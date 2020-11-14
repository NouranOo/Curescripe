<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersType extends Model
{
    protected $table="usertypes";

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
    
}
