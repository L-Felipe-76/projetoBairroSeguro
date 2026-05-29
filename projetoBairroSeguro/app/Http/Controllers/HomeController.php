<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class HomeController extends Controller
{
    public function ocorrencias(){
        return view('ocorrencias');
    }

    public function perfil(Request $request){


        return view('perfil', $usuario);
    }

    public function editarPerfil(){
        $dados['perfil'] = [
            'nomeCompleto' => 'Administrador',
            'genero' => 'Prefiro não informar',
            'dataNasc' => '2001-02-03',
            'email' => 'admin@admin.email.com',
            'senha' => 'admin123',
            'confirmarSenha' => 'admin123',
            'telefone' => '82 99999-9999',
            'qtMorador' => 2,
            'cep' => '12345-678',
            'estado' => 'Alagoas',
            'cidade' => 'Macéio',
            'bairro' => 'Farol',
            'rua' => 'Rua a Harmonia',
            'numeroDaCasa' => '22',
            'referencias' => 'Casa ao lado dos predios do cesmac'
        ];

        return view('editarPerfil', $dados);
    }

    public function salvarPerfil(Request $request){
        $request->validate([
            'nomeCompleto' => 'required|max:250|min:7',
            'genero' => 'required',
            'dataNasc' => 'required',
            'email' => 'required|email',
            'senha' => 'required|min:8',
            'confirmarSenha' => 'required|min:8|same:senha',
            'telefone' => 'required|max:15',
            'qtMorador' => 'required',
            'cep' => 'required|max:9',
            'estado' => 'required|max:250',
            'cidade' => 'required|max:250',
            'bairro' => 'required|max:250',
            'rua' => 'required|max:250',
            'numeroDaCasa' => 'required|max:5',
            'referencias' => 'max:2000',
            'fileProfilePicture' => 'image'
        ]);
        
        if ($request->has('fileProfilePicture')){
            $request->file('fileProfilePicture');
            $request->file('fileProfilePicture')->storeAs('/userProfile', 'user_1.jpg', 'public');
        }

        return redirect()->route('perfilRoute');
    }

    public function cancelarEdicaoPerfil(){
        return redirect()->route('perfilRoute');
    }

    public function excluirPerfil(){
        return redirect()->route('loginRoute');
    }

    public function emBreve(){
        return view('comingSoon');
    }
    
}
