<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('date')->nullable();
            $table->string('hazard_type')->nullable();
            $table->string('trigger')->nullable();
            $table->string('fatalities')->nullable();
            $table->string('injuries')->nullable();
            $table->string('size')->nullable();
            $table->string('population')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('depth')->nullable();
            $table->string('magnitude')->nullable();
            $table->string('minimum_distance')->nullable();
            $table->string('azimuthal_gap')->nullable();
            $table->string('origin_time')->nullable();
            $table->string('confidence')->nullable();
            $table->string('text')->nullable();
            $table->string('wattage')->nullable();
            $table->unsignedInteger('category_id');
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
        Schema::dropIfExists('countries');
    }
}
