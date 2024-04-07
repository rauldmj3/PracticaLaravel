<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('descripcio',50);
            $table->bigInteger('id_usuari')->nullable();
            $table->timestamps();
        });

        DB::table('articles')->insert([
            ['descripcio' => 'P1', 'id_usuari' => 1],
            ['descripcio' => 'P2', 'id_usuari' => 2],
            ['descripcio' => 'P3', 'id_usuari' => 1],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};