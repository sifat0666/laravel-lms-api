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
        Schema::create('pass_marks', function (Blueprint $table) {
            $table->id();
            $table->string('book');
            $table->string('class');
            $table->string('exam_name');
            $table->string('pass_mark');
            $table->string('session');
            $table->string('subject_a');
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
        Schema::dropIfExists('pass_marks');
    }
};