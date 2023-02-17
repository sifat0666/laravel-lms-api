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
        Schema::create('pay_fees', function (Blueprint $table) {
            $table->id();
            $table->string('ammount');
            $table->string('voucher_no');
            $table->string('comment')->nullable();
            $table->string('discount')->nullable();
            $table->string('determined_fee')->nullable();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('pay_fees');
    }
};