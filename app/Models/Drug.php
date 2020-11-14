<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    //
    protected $table="drugs";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description' ,'drugType_id','notes','customerPrice'
        
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

    public function DrugType(){
        return $this->belongsTo('App\Models\DrugType','drugType_id');
    }
}
