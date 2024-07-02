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
        Schema::create('records_vaccines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('child_id');
            $table->foreignId('vaccine_id');
            $table->string('date');
            $table->integer('dosage_number');
            $table->decimal('dosage');
            $table->string('injection_site');
            $table->text('details');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('records_vaccines');
    }
};
