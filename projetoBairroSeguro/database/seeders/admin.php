<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nomeCompleto' => 'Administrador',
            'genero' => 'Prefiro não informar',
            'dataNasc' => '2001-02-03',
            'email' => 'admin@admin.email.com',
            'password' => 'admin123',
            'telefone' => '82 99999-9999',
            'qtMorador' => 2,
            'cep' => '12345-678',
            'estado' => 'Alagoas',
            'cidade' => 'Macéio',
            'bairro' => 'Farol',
            'rua' => 'Rua a Harmonia',
            'numeroDaCasa' => '22',
            'referencias' => 'Casa ao lado dos predios do cesmac'
        ]);
    }
}
