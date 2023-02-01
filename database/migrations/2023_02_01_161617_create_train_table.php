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
        Schema::create('train', function (Blueprint $table) {
            $table->id();
            $table->string('brand') -> nullable(false);
            $table->date('manifacture_date');
            $table->string('recognition_number', 15) -> nullable(false) -> unique();
            $table->string('platform_number', 2) -> nullable(false) ;
            $table->integer('seats_quantity') -> nullable(false) -> unsigned();
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
        Schema::dropIfExists('train');
    }
};
