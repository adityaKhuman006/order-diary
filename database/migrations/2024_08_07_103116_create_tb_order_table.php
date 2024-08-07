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
        Schema::create('tb_order', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name')->nullable();
            $table->string('date')->nullable();
            $table->string('order_given_by')->nullable();
            $table->string('order_select')->nullable();
            $table->string('order_no')->nullable();
            $table->string('belt_select')->nullable();
            $table->string('quantity')->nullable();
            $table->string('description')->nullable();
            $table->string('uom_select')->nullable();
            $table->string('rate')->nullable();
            $table->string('amount')->nullable();
            $table->string('attach_doc_file')->nullable();
            $table->string('remark_vender')->nullable();
            $table->string('order_priority')->nullable();
            $table->string('wight_belt')->nullable();
            $table->string('packing_size_belt')->nullable();
            $table->string('packing_charges')->nullable();
            $table->string('transportaion_charges')->nullable();
            $table->string('doc_attached_file')->nullable();
            $table->string('tentaive_delevery_date')->nullable();
            $table->string('delevery_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_order');
    }
};
