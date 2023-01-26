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
        Schema::create('institute_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('namea');
            $table->string('address');
            $table->string('addressa');
            $table->string('num');
            $table->string('numa');
            $table->string('graam');
            $table->string('graama');
            $table->string('daak');
            $table->string('daaka');
            $table->string('thana');
            $table->string('thanaa');
            $table->string('jela');
            $table->string('jelaa');
            $table->string('ilhak');
            $table->string('ilhaka');
            $table->string('logo');
            $table->string('mumtamim_sign');
            $table->string('najeme_talim_sign');
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
        Schema::dropIfExists('institute_infos');
    }
};