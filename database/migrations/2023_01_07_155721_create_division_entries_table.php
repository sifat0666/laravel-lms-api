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
        Schema::create('division_entries', function (Blueprint $table) {
            $table->id();
            $table->string('case1');
            $table->string('case1_div');
            $table->string('case1_div_a');
            $table->string('case2');
            $table->string('case2_div');
            $table->string('case2_div_a');
            $table->string('case3');
            $table->string('case3_div');
            $table->string('case3_div_a');
            $table->string('case4');
            $table->string('case4_div');
            $table->string('case4_div_a');
            $table->string('case5');
            $table->string('case5_div');
            $table->string('case5_div_a');
            $table->string('case6');
            $table->string('case6_div');
            $table->string('case6_div_a');
            $table->string('class');
            $table->string('highest_mark');
            $table->string('note');
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
        Schema::dropIfExists('division_entries');
    }
};