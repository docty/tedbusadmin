<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    

protected $hidden = [
        'urlId' , 'created_at', 'id', 'gender', 'updated_at'
    ];

    public function customer()
    {
        return $this->hasMany('App\Customer', 'staffId', 'staffId');
    }
}
