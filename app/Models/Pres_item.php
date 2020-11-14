<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pres_item extends Model
{
    //
    protected $table="pres_items";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pres_id','medicine_title','amount','time','use_untill','drug_id'
        
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
            
    ];
    protected $casts = [
        'pres_id'=>'int',
        'amount'=>'int',
        'drug_id' =>'int',
    ];
    
    public function Prescription(){
        return $this->belongsTo('App\Models\Prescription','pres_id');
    }

    public function Drug(){
        return $this->belongsTo('App\Models\Drug','drug_id');
    }

}
