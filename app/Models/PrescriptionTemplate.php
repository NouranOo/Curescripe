<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrescriptionTemplate extends Model
{
    //
    protected $table="prescriptiontemplates";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description' ,'userId'
        
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
