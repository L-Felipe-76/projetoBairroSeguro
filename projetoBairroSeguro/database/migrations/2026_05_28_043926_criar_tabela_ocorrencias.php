<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ocorrencias', function (Blueprint $table) {

            $table->id();
            $table->string('titulo');
            $table->text('descricao');
            $table->string('tipo');
            $table->string('bairro');
            $table->string('rua')->nullable();
            $table->dateTime('dataOcorrencia');
            $table->string('imagem')->nullable();
            $table->bigInteger('user_id');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ocorrencias');
    }
};