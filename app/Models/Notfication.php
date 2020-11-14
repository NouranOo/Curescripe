<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notfication extends Model
{
    //
    protected $table="notifications";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','body','type','target_from','target_to','seen'
        
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
          
    ];
    protected $casts = [
        'target_from'=>'int',
        'seen'=>'int',
        'target_to'=>'int',
    ];

    public function User(){
        return $this->belongsTo('App\Models\User','target_to');
    }
}
