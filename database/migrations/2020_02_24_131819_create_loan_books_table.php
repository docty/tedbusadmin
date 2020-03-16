<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanBooksTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('loan_books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('urlId');
            $table->integer('customerId')->index('Customer Id');
             $table->foreign('customerId')->references('customerId')->on('customers')->onDelete('cascade');
            $table->integer('loanId')->unique('Loan Id');
            $table->string('startDate');
            $table->string('months');
            $table->string('paymentType');
            $table->double('principal');
            $table->double('interestRate');
            $table->double('totalAmount');
            $table->integer('staffId')->index('Staff Id Card');;
            $table->foreign('staffId')->references('staffId')->on('staff')->onDelete('cascade');
            $table->text('LoanReason');
            $table->timestamps();
             
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loan_books');
    }
}
