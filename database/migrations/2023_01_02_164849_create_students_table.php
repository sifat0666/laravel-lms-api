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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('session')->nullable();
            $table->string('class')->nullable();
            $table->string('notun_puraton')->nullable();
            $table->string('student_id')->nullable();
            $table->string('roll')->nullable();
            $table->string('gender')->nullable();
            $table->string('form_number')->nullable();
            $table->string('abashik_onabashik')->nullable();
            $table->string('student_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('dob')->nullable();
            $table->string('nid_no')->nullable();
            $table->string('nationality')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('phn_no')->nullable();
            $table->string('perm_daak')->nullable();
            $table->string('perm_thana')->nullable();
            $table->string('perm_graam')->nullable();
            $table->string('perm_jela')->nullable();
            $table->string('graam')->nullable();
            $table->string('daak')->nullable();
            $table->string('thana')->nullable();
            $table->string('jela')->nullable();
            $table->string('comment')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('students');
    }
};