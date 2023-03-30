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
        Schema::create('book_sales', function (Blueprint $table) {
            $table->id();

            $table->string('book_name');
            $table->string('buying_price');
            $table->string('class');
            $table->string('date');
            $table->string('name');
            $table->string('price');
            $table->string('selling_price');
            $table->string('total');
            $table->string('submitted_by');
            $table->string('qty');
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
        Schema::dropIfExists('book_sales');
    }
};