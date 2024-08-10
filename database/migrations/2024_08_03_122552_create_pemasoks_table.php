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
        Schema::create('pemasoks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemasok');
            $table->string('kontak');
            $table->text('alamat');
            $table->enum('status', ['Y', 'N'])->default('Y')->comment('Y: Aktif, N: Tidak Aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemasoks');
    }
};
