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
            $table->string('titol');
            $table->string('descripcio');
            $table->timestamps();
        });
        DB::table('articles')->insert([
            ['titol' => 'P1', 'descripcio' => "Projecte 1"],
            ['titol' => 'P2', 'descripcio' => "Projecte 2"],
            ['titol' => 'P3', 'descripcio' => "Projecte 3"],
            ['titol' => 'P4', 'descripcio' => "Projecte 4"],
            ['titol' => 'P5', 'descripcio' => "Projecte 5"],
            ['titol' => 'P1', 'descripcio' => "Projecte 1"],
            ['titol' => 'P2', 'descripcio' => "Projecte 2"],
            ['titol' => 'P3', 'descripcio' => "Projecte 3"],
            ['titol' => 'P4', 'descripcio' => "Projecte 4"],
            ['titol' => 'P5', 'descripcio' => "Projecte 5"],
            ['titol' => 'P1', 'descripcio' => "Projecte 1"],
            ['titol' => 'P2', 'descripcio' => "Projecte 2"],
            ['titol' => 'P3', 'descripcio' => "Projecte 3"],
            ['titol' => 'P4', 'descripcio' => "Projecte 4"],
            ['titol' => 'P5', 'descripcio' => "Projecte 5"],
            ['titol' => 'P1', 'descripcio' => "Projecte 1"],
            ['titol' => 'P2', 'descripcio' => "Projecte 2"],
            ['titol' => 'P3', 'descripcio' => "Projecte 3"],
            ['titol' => 'P4', 'descripcio' => "Projecte 4"],
            ['titol' => 'P5', 'descripcio' => "Projecte 5"],
            ['titol' => 'P1', 'descripcio' => "Projecte 1"],
            ['titol' => 'P2', 'descripcio' => "Projecte 2"],
            ['titol' => 'P3', 'descripcio' => "Projecte 3"],
            ['titol' => 'P4', 'descripcio' => "Projecte 4"],
            ['titol' => 'P5', 'descripcio' => "Projecte 5"],
            ['titol' => 'P1', 'descripcio' => "Projecte 1"],
            ['titol' => 'P2', 'descripcio' => "Projecte 2"],
            ['titol' => 'P3', 'descripcio' => "Projecte 3"],
            ['titol' => 'P4', 'descripcio' => "Projecte 4"],
            ['titol' => 'P5', 'descripcio' => "Projecte 5"],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projectes');
    }
};
