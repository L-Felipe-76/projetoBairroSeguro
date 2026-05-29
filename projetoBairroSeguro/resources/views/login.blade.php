<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BS - Login</title>
    <link rel="stylesheet" href="{{asset('assets/css/loginStyles.css')}}">
</head>

<body>

    <header>

        <div id="divHeader">

            <a href="{{route('cadastrarRoute')}}" id="BtnCadastrarA">
                Cadastrar
            </a>

            <div class="divLogo">
                <h1 class="logoText">BS</h1>
            </div>

        </div>

    </header>
    
    
    <section id="mainSectionLogin">

        <form method="POST" action="{{route('logarRoute')}}">

            <div id="emailDiv">
                <div class="columEmail">
                    <label for="campo-email" class="emailLabel">Email</label>
                    <input type="email" name="email" id="campo-email" required placeholder="seu@email.com">
                </div>
            </div>

            <div id="senhaDiv">
                <div id="columSenha">
                    <label for="campo-senha" id="senhaLabel">Senha</label>
                    <input type="password" name="password" id="campo-senha" required minlength="8" placeholder="********">
                </div>
            </div>

            @if(session('erro'))

			<div class="erroDiv">
				<p class="mensagemErro">{{session('erro')}}</p>
			</div>
			@endif

            @if(session('sucesso'))

			<div class="erroDiv">
				<p id="mensagemSucesso">{{session('sucesso')}}</p>
			</div>
			@endif

            <div id="submitDiv">
                @csrf
                <button type="submit" class="btnSubmit">Entrar</button>
            </div>

            <a href="{{route('esqueciASenhaRoute')}}" id="esqueciMinhaSenhaRedirect">Esqueci minha senha</a>

        </form>

    </section>

    <footer class="footer">
        <p>Bairro Seguro - Maceió, AL</p>
    </footer>

</body>
</html>