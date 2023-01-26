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
        Schema::create('audits', function (Blueprint $table) {
            $table->id();
            $table->string('account_name')->nullable();
            $table->string('ammount');
            $table->string('book')->nullable();
            $table->string('chart_of_account');
            $table->string('comment')->nullable();
            $table->string('fund_name');
            $table->string('general_ledger');
            $table->string('particulars_detail')->nullable();
            $table->string('payment_system')->nullable();
            $table->string('sub_ledger');
            $table->string('submit_date');
            $table->string('submit_date_arabic')->nullable();
            $table->string('voucher_slip');
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
        Schema::dropIfExists('audits');
    }
};