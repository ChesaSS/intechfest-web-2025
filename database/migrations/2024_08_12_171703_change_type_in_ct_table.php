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
        Schema::table('ct', function (Blueprint $table) {
            $table->dropUnique('ct_nomer_peserta_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ct', function (Blueprint $table) {
            $table->unique('nomor_peserta');
        });
    }
};
