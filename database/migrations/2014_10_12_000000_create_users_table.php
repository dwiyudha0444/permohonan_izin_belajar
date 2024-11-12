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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('nip')->unique();
            $table->date('tgl_lahir')->nullable();
            $table->string('pangkat')->nullable();
            $table->string('tmt')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('lokasi_bekerja')->nullable();
            $table->string('jejang_pendidikan')->nullable();
            $table->string('lulus_pendidikan')->nullable();
            $table->string('tugas_pekerjaan')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
