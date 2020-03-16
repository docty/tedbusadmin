<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanBook extends Model
{
    


    public function payment()
    {
        return $this->hasMany('App\PaymentSchedule', 'loanId', 'loanId');
    }


    public function customer()
    {
        return $this->belongsTo('App\Customer', 'customerId', 'customerId');
    }

    public function staff()
    {
        return $this->belongsTo('App\Staff', 'staffId', 'staffId');
    }
}
