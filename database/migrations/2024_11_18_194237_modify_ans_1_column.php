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
        Schema::table('l_p_s', function (Blueprint $table) {
            $table->text('ans_1')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('l_p_s', function (Blueprint $table) {
            $table->string('ans_1')->nullable()->change();
        });
    }
};
