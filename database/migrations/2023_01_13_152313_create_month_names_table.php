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
        Schema::create('month_names', function (Blueprint $table) {
            $table->id();
            $table->string('m1');
            $table->string('m2');
            $table->string('m3');
            $table->string('m4');
            $table->string('m5');
            $table->string('m6');
            $table->string('m7');
            $table->string('m8');
            $table->string('m9');
            $table->string('m10');
            $table->string('m11');
            $table->string('m12');
            $table->string('class');
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
        Schema::dropIfExists('month_names');
    }
};