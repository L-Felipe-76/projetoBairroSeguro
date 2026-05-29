<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Morador;
use Illuminate\Support\Facades\Auth;

class LoginContrller extends Controller
{
    public function esqueciSenha(){
        return view('esqueciSenha');
    }

    public function enviarLink(Request $request){
        $request->validate([
            'email' => 'required|email'
        ]);

        $usuario = User::where('email', 'like', $request->email)->first();

        if ($usuario){
            return redirect()->route('loginRoute')->with('sucesso', 'Link de redefinição enviado!');
        }else {
            return redirect()->back()->with('erro', 'Email incorreto!');
        }
    }

    //---------------

    public function cadastrar(){
        return view('cadastrar');
    }

    public function finalizarCadastro(Request $request){
        $request->validate([
            'nomeCompleto' => 'required|max:250|min:7',
            'genero' => 'required',
            'dataNasc' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'confirmarSenha' => 'required|min:8|same:password',
            'telefone' => 'required|max:15',
            'qtMorador' => 'required',
            'cep' => 'required|max:9',
            'estado' => 'required|max:250',
            'cidade' => 'required|max:250',
            'bairro' => 'required|max:250',
            'rua' => 'required|max:250',
            'numeroDaCasa' => 'required|max:5',
            'referencias' => 'max:2000'
        ]);
        
        $usuario = User::create($request->except('confirmarSenha'));

        Morador::create([

            'nomeCompletoMorador' => $request->session()->get('nomeCompletoMorador'),
            'generoMorador' => $request->session()->get('generoMorador'),
            'dataNascMorador' => $request->session()->get('dataNascMorador'),
            'telefoneMorador' => $request->session()->get('telefoneMorador'),
            'users_id' => $usuario->id
        ]);

        $request->session()->forget([
        'nomeCompletoMorador', 
        'generoMorador', 
        'dataNascMorador', 
        'telefoneMorador'
    ]);

        return redirect()->route('loginRoute');
    }

    public function cancelarCadastro(){
        return redirect()->route('loginRoute');
    }

    public function adicionarMorador(){
        return view('adicionarMorador');
    }

    public function salvarMorador(Request $request){
        $request->validate([
            'nomeCompletoMorador' => 'required|max:250|min:7',
            'generoMorador' => 'required',
            'dataNascMorador' => 'required',
            'telefoneMorador' => 'required|max:13'
        ]);
    
        $request->session()->put([
            'nomeCompletoMorador' => $request->nomeCompletoMorador,
            'generoMorador' => $request->generoMorador,
            'dataNascMorador'=> $request->dataNascMorador,
            'telefoneMorador' => $request->telefoneMorador]
        );

        return redirect()->route('cadastrarRoute');

    }

    public function cancelarMorador(){
        return redirect()->route('cadastrarRoute');
    }

    //---------------------

    public function login(Request $request){
        return view('login');
    }

    public function logar(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('ocorrenciasRoute');
        }else {
            return redirect()->back()->with('erro', 'Emaill ou senha incorretos!');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('loginRoute');
    }

}
