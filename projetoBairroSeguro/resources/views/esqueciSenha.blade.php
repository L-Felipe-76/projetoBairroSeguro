@extends('/sharedViews/templateFormAccount')

@section('titulo', 'BS - Esqueci a Senha')

@section('Subtitulo', 'Recuperar Senha')

@section('classe', 'mainSectionEsqueciASenha')

@section('conteudoPrincipal')
    

    <p id="textoDeDireção">Informe o email cadastrado para receber o link de redefinição.</p>

    <form method="POST" action="{{route('enviarLinkRoute')}}" id="form">

        <div id="emailEsqueciASenhaDiv">
            <div class="columEmail">
                <label for="campo-email-esqueciASenha" class="emailLabel">Email</label>
                <input type="email" name="email" id="campo-email-esqueciASenha" required placeholder="seu@email.com">
            </div>
        </div>

        @if(session('erro'))

        <div id="erroDivEsqueciASenha">
            <p class="mensagemErro">{{session('erro')}}</p>
        </div>
        @endif
        
        <div id="enviarLinkDiv">
            @csrf
            <button type="submit" class="btnSubmit">Enviar Link</button>
        </div>
    </form>

@endsection