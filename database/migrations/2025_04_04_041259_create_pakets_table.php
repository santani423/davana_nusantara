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
        Schema::create('pakets', function (Blueprint $table) {
            $table->id();
            $table->integer('wilayah_id');  
            $table->integer('type_paket_id');  
            $table->string('thumbnail_img');
            $table->string('name');
            $table->string('start_date_departure');
            $table->string('end_date_departure');
            $table->boolean('hotel_bintang_1')->default(1);
            $table->boolean('hotel_bintang_2')->default(1);
            $table->boolean('hotel_bintang_3')->default(1);
            $table->boolean('hotel_bintang_4')->default(1);
            $table->boolean('hotel_bintang_5')->default(0);
            $table->boolean('transportation_ticket')->default(1);
            $table->string('code');
            $table->text('description');  
            $table->decimal('price', 10, 2);   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakets');
    }
};
