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
        Schema::create('food_fees', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('fee');
            $table->string('month');
            $table->string('session');
            $table->string('student_id');
            $table->string('receiver');
            $table->string('class');
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
        Schema::dropIfExists('food_fees');
    }
};