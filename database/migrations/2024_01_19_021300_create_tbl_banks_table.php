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
        Schema::create('tbl_banks', function (Blueprint $table) {
            $table->id();
            $table->int('id_bank');
            $table->char('kode_bank');
            $table->varchar('nama_bank');
            $table->varchar('no_rekening');
            $table->varchar('token');
            $table->tinyint('is_digunakan');
            $table->char('kode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_banks');
    }
};
