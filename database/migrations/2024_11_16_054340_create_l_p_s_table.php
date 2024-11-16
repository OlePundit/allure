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
        Schema::create('l_p_s', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('intro');
            $table->string('thumb');
            $table->string('thumb1');
            $table->string('thumb2');
            $table->text('benefits');
            $table->text('process');
            $table->string('slug')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('l_p_s');
    }
};
