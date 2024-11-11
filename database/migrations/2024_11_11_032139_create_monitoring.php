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
        Schema::create('monitoring', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_users')->unsigned()->nullable();
            $table->string('transkip_nilai_1');
            $table->string('transkip_nilai_2');
            $table->string('transkip_nilai_3');
            $table->string('transkip_nilai_4');
            $table->string('ptn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitoring');
    }
};
