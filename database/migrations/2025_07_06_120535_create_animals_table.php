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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age')->nullable();
            $table->date('date_of_purchase')->nullable();
            $table->decimal('purchase_price', 10, 2)->nullable();
            $table->integer('total_births')->default(0);
            $table->date('last_birth_date')->nullable();
            $table->date('next_expected_birth_date')->nullable();
            $table->date('heat_date')->nullable();
            $table->decimal('weight', 8, 2)->nullable();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
