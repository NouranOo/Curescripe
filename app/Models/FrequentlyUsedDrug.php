<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FrequentlyUsedDrug extends Model
{
    //
    protected $table="frequentlyuseddrugs";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'drug_id' ,'user_id'
        
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
