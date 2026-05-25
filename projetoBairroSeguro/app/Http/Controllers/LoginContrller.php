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
        
        $dados['cadastro'] = $request->all();        
        //Como retornar esses dados tanto para o login quanto para a ocorrencia? Mesmo erro da rota de ocorrencia metodo post.

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
    
        $dados['cadastroMorador'] = [
            ['nomeCompletoMorador' => $request->nomeCompletoMorador, 'generoMorador' => $request->generoMorador, 'dataNascMorador'=> $request->dataNascMorador, 'telefoneMorador' => $request->telefoneMorador]
        ];

        return redirect()->route('cadastrarRoute');

        //como enviar esses dados diretamente para a rota do perfil? é possivel? Mesmo erro da rota de ocorrencia metodo post. = Não envia ainda, usa var estatica mesmo
    }

    public function cancelarMorador(){
        return redirect()->route('cadastrarRoute');
    }

    //---------------------

    public function login(){
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



    public function ocorrencias(){
        return view('ocorrencias');
    }

    public function perfil(){
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

        return view('perfil', $dados);
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
        return redirect()->route('comingSoonRoute');
    }

}
