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
        Schema::create('mapels', function (Blueprint $table) {
            $table->id();
            $table->integer('id_mapel');
            $table->string('nama_mapel');
            $table->enum('jurusan', ['akl', 'mpl', 'tlg', 'ppl', 
        'pms', 'tlm', 'tkf', 'dkv', 'tet', 'tjk']);
            $table->integer('id_siswa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mapels');
    }
};