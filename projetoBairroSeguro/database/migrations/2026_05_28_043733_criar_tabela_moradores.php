<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('moradores', function (Blueprint $table) {

        $table->id();
        $table->string('nomeCompletoMorador');
        $table->string('generoMorador');
        $table->date('dataNascMorador');
        $table->string('telefoneMorador', 15);
        $table->timestamps();
        $table->unsignedBigInteger('users_id');
        $table->foreign('users_id')->references('id')->on('users');
    });
}

    public function down(): void
    {
        Schema::dropIfExists('moradores');
    }
};