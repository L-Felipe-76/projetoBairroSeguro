<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginContrller extends Controller
{
    public function esqueciSenha(){
        return view('esqueciSenha');
    }

    public function enviarLink(Request $request){
        $request->validate([
            'email' => 'required|email'
        ]);

        if ($request->email == 'admin@admin.email.com'){
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
            'referencias' => 'max:2000'
        ]);

        $request->session()->only([
            'nomeCompletoMorador',
            'generoMorador',
            'dataNascMorador',
            'telefoneMorador']
        );
        
        $dados['cadastro'] = $request->all();

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
        $request->session()->flush();
        return view('login');
    }

    public function logar(Request $request){
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required|min:8'
        ]);


        if ($request->email == 'admin@admin.email.com' && $request->senha == 'admin123'){
            return redirect()->route('ocorrenciasRoute');
            //comoo resolver o erro desse redirect?
        }else {
            return redirect()->back()->with('erro', 'Emaill ou senha incorretos!');
        }
    }

    public function logout(){
        return redirect()->route('loginRoute');
    }

}
