<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kitaplar', function (Blueprint $table) {
            $table->id();
            $table->string('isim');
            $table->string('yazar');
            $table->string('durum'); // okunacak, elimde, alınacak
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kitaplar');
    }
};
