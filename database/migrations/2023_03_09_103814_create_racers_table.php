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
        Schema::create('racers', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->integer('age');
            $table->string('region');
            $table->string('national');
            $table->string('race_category');
            $table->foreignId('transaction_id')->constrained('transactions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('racers');
    }
};
