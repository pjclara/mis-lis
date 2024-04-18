<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('themes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamps();
        });

        // associate the themes with the galleries
        Schema::table('galleries', function (Blueprint $table) {
            $table->foreignId('theme_id')->constrained()->cascadeOnDelete();
        });

        // insert the default themes

        DB::table('themes')->insert([
            ['name' => 'Colorectal', 'description' => ''],
            ['name' => 'Parede abdominal', 'description' => ''],
            ['name' => 'Hepatobiliar', 'description' => ''],
            ['name' => 'Endócrina', 'description' => ''],
            ['name' => 'Outro', 'description' => ''],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('themes');
    }
};
