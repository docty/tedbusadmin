<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('urlId');
            $table->string('surname');
            $table->string('otherName');
            $table->string('phoneNumber');
            $table->string('gender');
            $table->integer('staffId')->unique('Staff Identification');
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
        Schema::dropIfExists('staff');
    }
}
