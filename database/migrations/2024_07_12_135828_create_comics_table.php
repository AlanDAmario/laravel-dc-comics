<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            
            $table->string('title', 255);
            $table->text('description');
            $table->string('thumb', 512);
            $table->string('price', 50);
            $table->string('series', 255);
            $table->string('sale_date', 50);
            $table->string('type', 100);
            $table->json('artists'); //riga per memorizzare gli artisti come JSON

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
