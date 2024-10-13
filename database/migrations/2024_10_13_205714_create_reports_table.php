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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->json('images')->nullable();
            $table->text('name')->nullable();
            $table->text('surname')->nullable();
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->text('contactType')->nullable();
            $table->text('message')->nullable();
            $table->text('confirmTerm')->nullable();
            $table->text('ip')->nullable();
            $table->text('reviewConfirm')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
