<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentSchedule extends Model
{
    

     public function loan()
    {
        return $this->belongsTo('App\LoanBook', 'loanId', 'loanId');
    }
     
}
