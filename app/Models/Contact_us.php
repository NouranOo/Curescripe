<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact_us extends Model
{
    //
    protected $table="contact_us";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','phone','subject','message','fromUser_id','toUser_id','issueType_id'
        
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
