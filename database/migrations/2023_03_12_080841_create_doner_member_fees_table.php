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
        Schema::create('doner_member_fees', function (Blueprint $table) {
            $table->id();


            $table->string('doner_id');
            $table->string('fee');
            $table->string('korton')->nullable();
            $table->string('month');
            $table->string('name');
            $table->string('nirdharito_fee');
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
        Schema::dropIfExists('doner_member_fees');
    }
};