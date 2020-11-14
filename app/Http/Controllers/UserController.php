<?php 

namespace App\Http\Controllers;
use App\Models\Gender;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Hash;
use App\Models\UsersCertficate;
use App\Models\UsersType;
use Session;
use App\Models\Prescription;
use App\Models\Pres_item;
use App\Models\PharmacyPrescriptionItem;
use Auth;
use App\Models\IssueType;
use App\Models\Contact_us;
use Alert;
class UserController extends Controller
{
        
    public function signup(){

     $genders = Gender::all();
        return view('signUp',compact('genders'));
    }

    public function sendsignup(Request $request){
        
        $errors = Validator::make($request->all(), [
                'mobile' => 'required|unique:users',
                'email' => 'required|unique:users|email',
                'password' => 'required',
            ]);
        
     $id=User::insertGetId([
           'mobile' =>$request->mobile,
           'password' =>Hash::make($request->password),
           'fullname' =>$request->name,
           'email' =>$request->email,
           'gender_id' =>$request->gender,
            'bithday' =>$request->date,
           
        ]);
        return view('businessaccount',compact('id'));
    }

    public function businessaccount(){
         

        return view('businessAccount');
    }
    public function personalaccount(Request $request ,$id){

  //dd($request->all());
        // $fileName = "fileName".time().'.'.request()->fileToUpload->getClientOriginalExtension();

        // $request->fileToUpload->storeAs('public/ProjectFile/CertificateFile',$fileName);

        // if ($files = $request->file('fileUpload')) {
        //     $destinationPath = 'ProjectFile/CertificateFile/'; // upload path
        //     $profilefile = date('YmdHis') . "." . $files->getClientOriginalExtension();
        //     $files->move($destinationPath, $profilefile);
        //     $insert['file'] = "$profilefile";
        //  }
        // $uniqueFileName = uniqid() . $request->get('upload_file')->getClientOriginalName() . '.' . $request->get('upload_file')->getClientOriginalExtension();

        // $request->get('upload_file')->move(public_path('ProjectFile/CertificateFile') . $uniqueFileName);

        // return redirect()->back()->with('success', 'File uploaded successfully.');

        User::where('id',$id)->update([

           'NickName' =>$request->nickname,
           'Experience' =>$request->experience,
           'Education' =>$request->education,

        ]);

        UsersCertficate::create([
            'User_id' =>$id,
            'Description' =>$request->desc,
            // 'FileUrl' =>$uniqueFileName,


        ]);
        return view('businessDetail',compact('id'));
    }

    public function businessdetail(){

          
        return view('businessDetail');
    }

    public function sentbusienssdeatil(Request $request ,$id){

        User::where('id',$id)->update([

            'BusinessLegalName' =>$request->LegalName,
            'userType_id' =>$request->usertype,
            'Description' =>$request->description,
            'BusinessPhone' =>$request->phone,
 
         ]);
 
    }

    public function signin(){
            $usertypes = UsersType::all();

        return view('login',compact('usertypes'));
    }

    public function postadminLogin(Request $req)
    {

        
        $req->validate([
            'mobile' => 'required'  ,
            'password' => 'required',
           ]);
        $admin = User::where('mobile', $req->mobile )->orWhere('email', $req->mobile)->first();
       // dd($admin);
        if($admin){
          $check = Hash::check($req->password,$admin->password);
          
    
         if($check){ /** check before .. */

          
      //    // dd('fffff');
         Session::put('curr',$admin->id );
      //     //Cache::put('curr',$admin->id,1440); /* admin that log in ... before we will use session  */
      // //   return redirect('user'); 

 if($admin->userType_id == 1){
   // dd($admin->userType_id);
        return redirect(route('signup'));

       }

       else{
     //   dd($admin->userType_id);
           return redirect(route('dispensing'));

       }    
      
         
    } else {
        

        return back();
    }
      
       
    }
}

    public function newpass(){

        return view('newPassword');
    }

    public function index(){

        return view('index');
    }

    public function resetpass(){

        return view('Resetpassword');
    }


    public function dispensing()  {  
           
        $prescription = Prescription::where('id',1)->with(['PharmacyPrescriptionItem.Drug','PharmacyPrescriptionItem.Prescription'])->first();


//  dd($prescription);

//         $items = Pres_item::where('pres_id',1)->with('Prescription')->get();
//         $pharmacyitems = PharmacyPrescriptionItem::where('prescription_id',1)->with('Drug')->first();
// // dd($pharmacyitems);
       // dd($items);
        return view('dashboradPharmacy.Dispensing',compact('prescription'));
    }
    public function setntdispensing(Request $request){

        if($request->oldprice != null)
        {
   

            $id = $request->id;
            $price = $request->oldprice;
            $quantity = $request->oldquantity;
            $total = $request->total;
  
           
          for($i=0 ;$i<count($id);$i++){
          
          PharmacyPrescriptionItem::where('id',$id[$i])->update([

          'price'=>$price[$i] , 
          'quantity' =>$quantity[$i] ,
          'totalprice' =>$price[$i] * $quantity[$i] 

          ]);
       
      }
 
    }

    return back();
   
}

     public function dispense(Request $request){


        PharmacyPrescriptionItem::where('id',$request->id)->update([
          'status_id' =>$request->status,

        ]);

     }

    public function contactus(){
        $a =  Session::get('curr');
        $users =User::where('id',$a)->first();
         $issues = IssueType::all();
      
        return view('dashboradPharmacy.contactUs',compact('user','issues'));
    }

    public function sentcontactus(Request $request){
        $a =  Session::get('curr');
        // $users =User::where('id',$a)->first();
        $admin = User:: where('userType_id',4)->first();
   //dd($admin);
        Contact_us ::create([
               'name' =>$request->name,
               'phone' =>$request->phone,
               'subject' =>$request->subject,
               'message' =>$request->message,
               'fromUser_id' => $a,
               'toUser_id' =>$admin->id,
               'issueType_id' =>$request->issue,



        ]);
        return back();

    }

    public function profile(){
        $a =  Session::get('curr');
        $users =User::where('id',$a)->first();
        $genders = Gender::all();
    //dd($a);
        return view('dashboradPharmacy.profile',compact('users','genders'));
    }


    public function senteditprofile(Request $request ){
        $a =  Session::get('curr');
        $users = User::where('id',$a)->first();
        $image=  $users->photo ;

        if ($request->hasFile('image')) {
            $file = $request->file("image");
            $filename = str_random(6) . '_' . time() . '_' . $file->getClientOriginalName();
            $path = 'ProjectFile/profilephoto';
            $file->move($path, $filename);
            $image = $path . '/' . $filename;
           
            }
   // dd($request->hasFile('image') );
        $a =  Session::get('curr');
        $users =User::where('id',$a)->first();
        User::where('id',$a)->update([
                'mobile' =>$request->mobile,
                'email' =>$request->email,
                'gender_id' =>$request->gender,
                'bithday' =>$request->date,
                'homeadress' =>$request->address,
                'photo' =>$image,
    
        ]);
        return back();
    }

    public function sentprofessionalprofile(Request $request){

        $a =  Session::get('curr');
        $users =User::where('id',$a)->first();
        User::where('id',$a)->update([
               'NickName' =>$request->nickname,
               'Education' =>$request->education,
               'Experience' =>$request->experience,
    
        ]);
        return back();

    }

    public function sentbusinessdetail(Request $request){
        $a =  Session::get('curr');
        $users =User::where('id',$a)->first();
        User::where('id',$a)->update([
               'BusinessLegalName' =>$request->legalname,
               'PhysicalAddress' =>$request->physicaladress,
               'Description' =>$request->description,
               'BusinessPhone' =>$request->businessphone,
    
        ]);
        return back();

          
    }

    public function sentnewpass(Request $request){
        $a =  Session::get('curr');
        $users =User::where('id',$a)->first();
        $old = Hash::make($request->input('currentpassword'));

       // $new = Hash::make($request->input('currentpassword'));
       
// $ss = Hash::make('12345');
// $dd = Hash::make('12345');
// dd($ss , $dd);
      


    //dd(hash::check( $request->input('currentpassword'),$users->password ));
        if(hash::check( $request->input('currentpassword'),$users->password )) {
            User::where('id',$a)->update([
                    
                'password' => Hash::make($request->input('newpassword')),

            ]);
          
                // $users->password = Hash::make($request->input('newpassword'));



               // dd('jhhhbhghhhh');
    }else {
        //dd('ggggg');
        Alert::error('Your current password is wrong')->autoclose(3000); /*must return alert*/
        return back();
    }
       return back();
}

    public function deactivate(Request $request){

        $a =  Session::get('curr');
        $users =User::where('id',$a)->first();
        if(hash::check( $request->input('currentpassword'),$users->password )) {

            User::where('id',$a)->update([

           'isActive' => 1,

            ]);
           
        }
        else {
            //dd('ggggg');
            Alert::error('Your current password is wrong')->autoclose(3000); /*must return alert*/
            return back();
        }
           return back();

    }
    public function active(Request $request){

        $a =  Session::get('curr');
        $users =User::where('id',$a)->first();
        if(hash::check( $request->input('currentpassword'),$users->password )) {

            User::where('id',$a)->update([

           'isActive' => 0,

            ]);
           
        }
        else {
            //dd('ggggg');
            Alert::error('Your current password is wrong')->autoclose(3000); /*must return alert*/
            return back();
        }
           return back();

    }

    
}