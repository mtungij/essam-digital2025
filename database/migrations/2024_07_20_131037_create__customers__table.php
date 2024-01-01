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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('order');
            $table->decimal('work_cost', 10, 2); // Change to decimal
            $table->decimal('prepaid', 10, 2)->default(0); // Change to decimal
            $table->string('materials');
            $table->decimal('expenses', 10, 2)->default(0); // Change to decimal
            $table->string('phone');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_customers_');
    }
};
