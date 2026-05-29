<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginContrller;
use App\Http\Controllers\HomeController;


Route::controller(LoginContrller::class)
    ->prefix('/BairroSeguro')
    ->group(function() {
        Route::get('/RecuperarSenha', 'esqueciSenha')->name('esqueciASenhaRoute');
        Route::post('/EnviarLink', 'enviarLink')->name('enviarLinkRoute');

        Route::get('/Cadastrar', 'cadastrar')->name('cadastrarRoute');
        Route::post('/FinalizarCadastrar', 'finalizarCadastro')->name('finalizarCadastroRoute');
        Route::get('/CancelarCadastro', 'cancelarCadastro')->name('cancelarCadastroRoute');

        Route::get('/AdicionarMorador', 'adicionarMorador')->name('adicionarMoradorRoute');
        Route::post('/SalvarMorador', 'salvarMorador')->name('salvarMoradorRoute');
        Route::get('/cancelarMorador', 'cancelarMorador')->name('cancelarMoradorRoute');

        Route::get('/Index', 'login')->name('loginRoute');
        Route::post('/Logar', 'logar')->name('logarRoute');
        Route::get('/LogOut', 'logout')->name('logoutRoute');
    });

Route::controller(HomeController::class)
    ->prefix('/BairroSeguro')
    ->group(function() {
        Route::get('/Home', 'ocorrencias')->name('ocorrenciasRoute'); //Perguntar sobre erro no direcionamento dos dados para essa rota atraves do controler = Fazer com dados mockados estaticos

        Route::get('/Perfil', 'perfil')->name('perfilRoute');
        Route::get('/EditarPerfil', 'editarPerfil')->name('editarPerfilRoute');
        Route::post('/SalvarPerfil', 'salvarPerfil')->name('salvarPerfilRoute');
        Route::get('/cancelarEdicaoPerfil', 'cancelarEdicaoPerfil')->name('cancelarEdicaoPerfilRoute');
        Route::get('/ExcluirPerfil', 'excluirPerfil')->name('excluirPerfilRoute');

        Route::get('/ComingSoon', 'emBreve')->name('comingSoonRoute');
    });