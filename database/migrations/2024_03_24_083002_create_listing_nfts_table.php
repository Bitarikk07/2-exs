<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Миграция для создания таблицы 'listing_nfts'
    public function up(): void
    {
        Schema::create('listing_nfts', function (Blueprint $table) {
            $table->id();
            $table->string('currency');
            $table->string('price');
            $table->foreignId('nft_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete(); // Внешний ключ для пользователя
            $table->string('start');
            $table->string('end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listing_nfts');
    }
};
