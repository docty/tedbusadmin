<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('companyName');
            $table->string('source');
            $table->string('sourceRegion');
            $table->string('destination');
            $table->string('destinationRegion');
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
        Schema::dropIfExists('routings');
    }
}
