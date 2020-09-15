<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->increments('ID',10);
            $table->String('Name',100);
            $table->char('Gender', 1);
            $table->String('IC',12);
            $table->String('DrivingLicNo',15);
            $table->String('Email',50);
            $table->String('phoneNo',12);
            $table->String('adddress',255);
            $table->String('driverPhoto',255);
            $table->String('Status', 100);
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
        Schema::dropIfExists('drivers');
    }
}
