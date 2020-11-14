<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PharmacyPresciption extends Model
{
    //
    protected $table="pharmacypresciptions";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id' ,'prescription_id'
        
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
    
}
