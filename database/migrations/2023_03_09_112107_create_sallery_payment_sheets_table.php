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
        Schema::create('sallery_payment_sheets', function (Blueprint $table) {
            $table->id();

            $table->string('employee_id');
            $table->string('korton');
            $table->string('month');
            $table->string('name');
            $table->string('nirdharito_sallery');
            $table->string('podobi');
            $table->string('sallery');
            $table->string('session');
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
        Schema::dropIfExists('sallery_payment_sheets');
    }
};