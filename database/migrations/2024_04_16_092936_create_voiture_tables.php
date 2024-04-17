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
        Schema::create('voiture_tables', function (Blueprint $table) {
            $table->id();
            $table->string("brand")->nullable();
            $table->string("matricules")->nullable();
            $table->date("date_mise_en_circulation")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voiture_tables');
    }
};
