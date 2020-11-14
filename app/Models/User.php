<?php

namespace App\Models;

//use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;
use Illuminate\Contracts\Auth\CanResetPassword;
use App\Notifications\ResetPasswordNotification;
class User extends Authenticatable implements CanResetPassword
{
    use Notifiable;
    
    //
    protected $table="users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mobile','password','fullname','email','gender','bithday','lat',
        'lang','pin','photo','qr','recoverySmsCode','ApiToken','Token','NickName',
        'Experience','Education','BusinessLegalName','Description','BusinessPhone','PhysicalAddress',
        'NickName','Experience','Education','BusinessLegalName','Description','BusinessPhone','gender_id', 
        
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
            
    ];
    protected $casts = [
        'mobile'=>'int',
        'lat'=>'float',
        'lang'=>'float',
        'pin'=>'int',
    
    ];
    public function Notifications(){
        return $this->hasMany('App\Models\Notfication','target_to');
    }

    public function Prescriptions(){
        return $this->hasMany('App\Models\Prescription','user_id');
    }
    public function Gender(){
        return $this->belongsTo('App\Models\Gender','gender_id');
    }
    public function UsersType(){
        return $this->belongsTo('App\Models\UsersType','userType_id');
    }
    
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }


}
