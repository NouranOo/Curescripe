<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IssueType extends Model
{
    //
    protected $table="issuetypes";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description' ,'userType_id'
        
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
