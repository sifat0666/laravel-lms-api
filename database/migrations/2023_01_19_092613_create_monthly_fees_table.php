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
        Schema::create('monthly_fees', function (Blueprint $table) {
            $table->id();
            $table->string('class');
            $table->string('determined_fee');
            $table->string('discount');
            $table->string('fee_name');
            $table->string('month');
            $table->string('order_no');
            $table->string('receiver');
            $table->string('student_id');
            $table->string('student_name');
            $table->string('submitted_fee');
            $table->string('submit_date')->nullable();
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
        Schema::dropIfExists('monthly_fees');
    }
};