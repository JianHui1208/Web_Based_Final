<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('ID',10);
            $table->Integer('DriverID')->unsigned();
            $table->String('platNo',10);
            $table->String('Brand', 15);
            $table->String('model',15);
            $table->String('manufacturerYear',4);
            $table->String('colour',10);
            $table->String('roadTax',255);
            $table->String('insurance',255);
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
        Schema::dropIfExists('cars');
    }
}
