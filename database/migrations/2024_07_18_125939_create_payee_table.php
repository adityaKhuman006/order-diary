<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payee', function (Blueprint $table) {
            $table->id();
            $table->string('transactionType')->nullable();

            $table->unsignedBigInteger('account')->nullable();
            $table->foreign('account')->references('id')->on('add_account')->onDelete('cascade')->onUpdate('cascade');

            $table->string('amount')->nullable();

            $table->unsignedBigInteger('payee');
            $table->foreign('payee')->references('id')->on('payee_category')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('to');
            $table->foreign('to')->references('id')->on('payee_category')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('category');
            $table->foreign('category')->references('id')->on('category')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('paymentmethod');
            $table->foreign('paymentmethod')->references('id')->on('payment_category')->onDelete('cascade')->onUpdate('cascade');

            $table->string('cr_balance')->nullable();

            $table->string('cheque')->nullable();
            $table->string('remark')->nullable();
            $table->string('description')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payee');
    }
};
