<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrescriptionTemplateItem extends Model
{
    //
    protected $table="prescriptiontemplateitems";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'template_id' ,'drug_id','dose','times','useFor'
        
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
