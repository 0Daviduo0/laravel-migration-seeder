<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_agency', function (Blueprint $table) {
            $table->id();
            $table->string('package_name', 64);
            $table->text('description');
            $table->integer('price') -> unsigned();
            $table->string('maximum_people', 2);
            $table->date('expiration_date') -> nullable();
            $table->datetime('start_date');
            $table->datetime('end_date');
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
        Schema::dropIfExists('travel_agency');
    }
};
