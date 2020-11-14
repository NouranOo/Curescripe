<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    //
    protected $table="prescriptions";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','doctor_id'
        
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
          
    ];
    protected $casts = [
        'user_id'=>'int',
        'doctor_id'=>'int',
       
    ];
    public function User(){
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function Pres_items(){
        return $this->hasMany('App\Models\Pres_item','pres_id');
    }
    public function Doctor(){
        return $this->belongsTo('App\Models\User','doctor_id');
    }

    public function PharmacyPrescriptionItem(){
        return $this->hasMany('App\Models\PharmacyPrescriptionItem','prescription_id');
    }
}
