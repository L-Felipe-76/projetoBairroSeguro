<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{asset('assets/css/loginStyles.css')}}">
</head>

<body>

    <header>

        <div id="divHeaderEsqueciASenha">
            <h1 id="h1Head">@yield('Subtitulo')</h1>

            <div class="divLogo">
                <h1 class="logoText">BS</h1>
            </div>
        </div>

    </header>
    
    <div id="@yield('classe')">
        @yield('conteudoPrincipal') 
    </div>
    
    <footer class="footer">
        <p>Bairro Seguro - Maceió, AL</p>
    </footer>

</body>
</html>