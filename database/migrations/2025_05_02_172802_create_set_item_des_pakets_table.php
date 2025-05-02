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
        Schema::create('set_item_des_pakets', function (Blueprint $table) {
            $table->id();
            $table->integer('paket_id'); // ID paket
            $table->integer('item_desc_id'); // ID item_desc
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('set_item_des_pakets');
    }
};
