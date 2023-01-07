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
        Schema::create('fees_determinations', function (Blueprint $table) {
            $table->id();
            $table->string('academic_year');
            $table->string('boy_resi_new');
            $table->string('boy_resi_old');
            $table->string('boy_unresi_new');
            $table->string('boy_unresi_old');
            $table->string('class_name');
            $table->string('fee_name');
            $table->string('fee_type');
            $table->string('girl_resi_new');
            $table->string('girl_resi_old');
            $table->string('girl_unresi_new');
            $table->string('girl_unresi_old');
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
        Schema::dropIfExists('fees_determinations');
    }
};