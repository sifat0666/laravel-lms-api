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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('daak');
            $table->string('data_of_joining');
            $table->string('employee_id');
            $table->string('exp');
            $table->string('father_name');
            $table->string('graam');
            $table->string('jela');
            $table->string('mother_name');
            $table->string('passing_district');
            $table->string('passing_year');
            $table->string('dob');
            $table->string('position');
            $table->string('qualification');
            $table->string('reg_no');
            $table->string('thana');
            $table->string('type');
            $table->string('phn_no');
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
        Schema::dropIfExists('employees');
    }
};