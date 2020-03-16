<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    

 protected $hidden = [
        'urlId' , 'created_at', 'id', 'gender', 'updated_at'
    ];

     public function staff()
    {
        return $this->belongsTo('App\Staff', 'staffId', 'staffId');
    }

    public function loan()
    {
        return $this->hasMany('App\LoanBook', 'customerId', 'customerId');
    }

    public function payment()
    {
        return $this->hasMany('App\PaymentSchedule', 'customerId', 'customerId');
    }
}
