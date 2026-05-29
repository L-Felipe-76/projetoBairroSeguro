<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function ocorrencias(){
        return view('ocorrencias');
    }

    public function perfil(Request $request){
        $usuario = Auth::user();    

        return view('perfil', compact('usuario'));
    }

    public function editarPerfil(){
        $usuario = Auth::user();

        return view('editarPerfil', compact('usuario'));
    }

    public function salvarPerfil(Request $request){
        $request->validate([
            'nomeCompleto' => 'required|max:250|min:7',
            'genero' => 'required',
            'dataNasc' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
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
        $usuario = Auth::user();
        $delete = User::find($usuario->id);
        $delete->delete();

        Auth::logout();
                
        return redirect()->route('loginRoute');
    }

    public function emBreve(){
        return view('comingSoon');
    }
    
}
