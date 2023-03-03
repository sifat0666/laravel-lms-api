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
        Schema::create('doner_members', function (Blueprint $table) {
            $table->id();


            $table->string('copil');
            $table->string('daak');
            $table->string('daak_perm');
            $table->string('date');
            $table->string('father_name');
            $table->string('fee');
            $table->string('graam');
            $table->string('graam_perm');
            $table->string('image')->nullable();
            $table->string('jela');
            $table->string('jela_perm');
            $table->string('mother_name');
            $table->string('name');
            $table->string('occupation');
            $table->string('thana');
            $table->string('thana_perm');
            $table->string('duration');
            $table->string('type');
            $table->string('nid_image')->nullable();
            $table->string('nid_no');
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
        Schema::dropIfExists('doner_members');
    }
};