<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('urlId');
            $table->integer('customerId')->unique('Customer Identification');
            $table->integer('staffId')->index('Officer Id');
            $table->foreign('staffId')->references('staffId')->on('staff')->onDelete('cascade');
            $table->string('surname');
            $table->string('otherName');
            $table->string('phoneNumber');
            $table->string('gender');
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
        Schema::dropIfExists('customers');
    }
}
