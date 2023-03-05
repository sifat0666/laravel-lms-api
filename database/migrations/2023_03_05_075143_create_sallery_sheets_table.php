<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sallery_sheets', function (Blueprint $table) {
            $table->id();


            $table->string('bari_vara')->nullable();
            $table->string('chikitsha')->nullable();
            $table->string('employee_id');
            $table->string('mul_beton');
            $table->string('name');
            $table->string('otiriktoBeton')->nullable();
            $table->string('podobi');
            $table->string('total');
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
        Schema::dropIfExists('sallery_sheets');
    }
};