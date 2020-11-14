<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersCertficate extends Model
{
    protected $table="userscertficates";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'User_id','Description','FileUrl','IsApproved'
        
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
            
    ];
    protected $casts = [
        'User_id'=>'int',
        
    
    ];
}
