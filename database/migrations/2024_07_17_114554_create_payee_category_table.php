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
        Schema::create('payee_category', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('remark');
            $table->string('phone');
            $table->string('balance');
            $table->string('date');
            $table->string('img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payee_category');
    }
};
