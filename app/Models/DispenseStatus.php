<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DispenseStatus extends Model
{
    //
    protected $table="dispensestatus";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description' 
        
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
