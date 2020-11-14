@extends('layouts.master2')
@section('title')
Dispensing
@endsection
@section('content')


        <!-- Page Content -->
        <div id="page-content-wrapper">
            <a href="#menu-toggle" class="menuopener" id="menu-toggle"><i class="fa fa-bars"></i></a>
			
            <section class="Dispensing">
                <div class="Dispens">
                     <div class="row  page-Dispens">    <!-- start row 1-->
                        <div class="col-md-12">
                          <div class="prescript-title">
                            <a href="#"><span>home / </span><span> User's prescriptions</span> / Dispense drugs</a>
                            <hr>
                          </div>
                       </div>     <!-- end-col 1 -->
                       <!-- -------------- -->
                       <div class="card mb-4 col-md-4" style="max-width: 540px; border: 0;">
                             <div class="row no-gutters">
                                <div class="col-md-4">
                                 <img src="{{$prescription->Doctor->photo}}" class="card-img" style="padding: 20px;">
                                </div>
                              <div class="col-md-8">
                                 <div class="card-body">
                                   <h3 class="Dispens-title">{{$prescription->Doctor->fullname}}</h3>
                                   <p class="card-text-p">{{$prescription->Doctor->position}}</p>
                                 </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                                 <div class="card-body">
                                   <h6 class="card-title Dispense-data" style="text-align:center;">Sun 28, Oct 2020 <span> 10:15 AM </span></h6>
                                 </div>
                          </div>
                          <form method="post" action="{{route('setntdispensing')}}"  onsubmit="return passwordvalidation()" name="signup" >
      @csrf
                          <div class="col-md-4">
                           <div class="card-btn">
                             <button type="button" class="btn btn-primary btn-sm button-card">cancel</button>
                             <button type="submit" class="btn btn-secondary btn-sm button-card2">Submit</button>                
                             </div>
                           </div>
                      </div>
                      <!-- end row   -->
         
                      <!-- start row 2  -->
                      <div class="row part-patient-Data">
                        <div class="col-md-9">
                           <div class="Patient">
                               <h3 class="Patient-tData">Patient Name : <span> @if(isset($prescription->User->fullname)) {{$prescription->User->fullname}} @endif</span></h3>
                             </div>
                           <div class="patient-td">
                               <h3 class="Patient-tData">Age : <span> {{$prescription->User->bithday}} </span></h3>
                               <h3 class="Patient-num">Phone Number : <span>  {{$prescription->User->mobile}}</span></h3>
                             </div>
                      <table class="table table-borderless">
                        
                       <thead>
                         <tr class="Dispens-table items-table">
                           <th scope="col">#</th>
                           <th scope="col">Item</th>
                           <th scope="col">Doses</th>
                           <th scope="col">Time</th>
                           <th scope="col">Price</th>
                           <th scope="col">Total Price</th>
                           <th scope="col">Quantity</th>
                         </tr>
                       </thead>
                       <tbody>
                      
                @if($prescription)
                @foreach($prescription->PharmacyPrescriptionItem as $item)
                         <tr class="Dispens-table" >
                           <th scope="row">{{$loop->iteration}}</th>
                           <td class="Item-col">{{$item->Drug->description}}.</td>
                           <td > {{$item->Drug->DrugType->description}}</td>
                           <td>  </td>

                          
                           <input type="hidden" value="{{$item->id}}"  name="id[]">

                           <td><input class="price-col" type="number" name="oldprice[]"  value="{{$item->price}}"  id="price_{{$loop->iteration}}" min="0" step="any"  oninput="CalTotal({{$loop->iteration}})"></td>
                          
                           <td class="Total-Price-col" id="total_{{$loop->iteration}}" name="total[]"> {{$item->totalprice}}  </td>
                           <td><input class="price-col" type="number"   name="oldquantity[]" value="{{$item->quantity}}"   id="quantity_{{$loop->iteration}}" min="0" oninput="CalTotal({{$loop->iteration}})"></td>
                       </tr>
                      
                         @endforeach
                         @endif
                       </tbody>
                     </table>                  
                   </div>
                   <div class="col-md-3">
                     <div class="btn-table">

                     @if($prescription)
                @foreach($prescription->PharmacyPrescriptionItem as $item)
                    
                   <div class="turn-btn">
                      <input class="tgl tgl-skewed" id="cb{{$loop->iteration}}" type="checkbox"/>
                      <label class="tgl-btn" data-tg-off="Dispensed" data-tg-on="Dispense" for="cb{{$loop->iteration}}" text="Dispensed" id="c{{$item->id}}" onclick="clickdispense({{$item->id}}, {{$loop->iteration}})"></label>
                      <input class="tgl tgl-skewed2" id="cb_{{$loop->iteration}}" type="checkbox"/>
                      <label class="tgl-btn2" data-tg-off="Unavailable" data-tg-on="Mark unavailable" id="c_{{$item->id}}"  text="Unavailable" for="cb_{{$loop->iteration}}" onclick="clickdispense1({{$item->id}}, {{$loop->iteration}})"></label>
                     </div>
                   
                     @endforeach
                         @endif
         
                     </div>
                   </div>
         </form>
                   </div> <!--end row 3 pation-table  -->
         
                   <div class="row">
                     <div class="col-md-12">
                       <h3 class="Dr-data">Address :  23,Doctors st.,Patients City, Alexandria </h3>
                       <h3 class="Dr-data">Phone : <span>01234567890</span></h3>
                     </div>
                   </div> <!-- end row4 Dr-data -->
         
                   </div>
                </section>
         


            </div><!-- page content -->




            

<script>

function CalTotal(id){

// debugger

  var num1 =   Number($("#price_"+id).val());
  var num2 = Number($("#quantity_"+id).val()); 

  $("#total_"+id).text(num1 * num2);


    


}

</script>
<script>



function clickdispense(id,r){

debugger;

    var status = 1;
    console.log(status);
    if($("#cb_"+r).prop("checked") == false && $("#cb"+r).prop("checked") == false)
    {
      $("#cb"+r).click();
      //$("#cb_"+r).prop('checked', false);
      //$("#cb"+r).prop('checked', true);
    }
else if($("#cb_"+r).prop("checked") == true && $("#cb"+r).prop("checked") == false)
{
  $("#cb_"+r).click();
  $("#cb"+r).click();
}



//     $("#cb_"+r).attr('disabled',true);
// $("#c_"+id).prop('onclick', null);
  
// if($("#c"+id).css("background-color") ==  "rgb(0, 216, 128)"){
// $("#cb_"+r).attr('disabled',true);
// $("#c_"+id).prop('onclick', null);
// }else{

// $("#cb_"+r).attr('disabled',false);
// $("#c_"+id).prop('onclick',  clickdispense1(id,r));

// }

    $.ajax({
     type: 'GET', //THIS NEEDS TO BE GET
    url: "{{ url('dispense') }}",
    dataType: 'json',
    data: { id:id , status:status},
     success: function (data) {





    },error:function(){ 

   }
   });  

}




function clickdispense1(id,r){



var status = 2;
console.log(status);

$("#cb"+r).attr('disabled',true);
$("#c"+id).prop('onclick', null);

$.ajax({
 type: 'GET', //THIS NEEDS TO BE GET
url: "{{ url('dispense') }}",
dataType: 'json',
data: { id:id , status:status},
 success: function (data) {


   
// if($("#c_"+id).css("background-color") ==  "rgb(251, 4, 4)"){
// $("#cb"+r).attr('disabled',true);
// $("#c"+id).prop('onclick', null);
// }else{

// $("#cb"+r).attr('disabled',false);
// $("#c"+id).prop('onclick',  clickdispense(id,r));

// }

},error:function(){ 

}
});  

}



</script>

@endsection