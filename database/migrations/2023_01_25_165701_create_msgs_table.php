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
        Schema::create('msgs', function (Blueprint $table) {
            $table->id();
            $table->boolean('absent');
            $table->boolean('escaped');
            $table->boolean('khabar');
            $table->boolean('mashik');
            $table->boolean('present');
            $table->boolean('vorti');
            $table->string('absent_msg')->nullable();
            $table->string('escaped_msg')->nullable();
            $table->string('khabar_msg')->nullable();
            $table->string('mashik_msg')->nullable();
            $table->string('present_msg')->nullable();
            $table->string('vorti_msg')->nullable();
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
        Schema::dropIfExists('msgs');
    }
};