<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PharmacyPrescriptionItem extends Model
{
    //
    protected $table="pharmacyprescriptionitems";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'prescription_id' ,'drug_id','quantity','price','status_id','totalprice'
        
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
           
    ];
    protected $casts = [
        

    ];
    public function Drug(){
        return $this->belongsTo('App\Models\Drug','drug_id');
    }

    public function Prescription(){
        return $this->belongsTo('App\Models\Prescription','prescription_id');
    }

}
