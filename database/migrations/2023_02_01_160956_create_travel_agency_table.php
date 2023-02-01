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
            $table->string('package_name', 64) -> nullable(false);
            $table->text('description') -> nullable(false);
            $table->integer('price') -> nullable(false) -> unsigned();
            $table->string('maximum_people') -> nullable(false);
            $table->date('expiration_date');
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
