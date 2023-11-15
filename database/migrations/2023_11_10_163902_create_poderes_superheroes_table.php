<?php

use App\Models\superheroe;
use App\Models\superpoder;
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
        Schema::create('poderes_superheroes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(superheroe::class)->constrained();
            $table->foreignIdFor(superpoder::class)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poderes_superheroes');
    }
};
