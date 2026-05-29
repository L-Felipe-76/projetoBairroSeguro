<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{asset('assets/css/homeStyles.css')}}">
</head>

<body>

    <header>
        <nav id="navBar">

            <div>
                <a id="menuBtn">☰</a>
            </div>
            
            <div>
                <input type="search" name="searchBar" id="barraDePesquisa" placeholder="Pesquisar CEP de bairro...">
            </div>

            <div id="profileBtnDiv">
                <a href="{{route('perfilRoute')}}">
                    <img src="{{asset('assets/imgs/user.png') }}" id="profileOcorrenciasImg">
                </a>
                
            </div>
        </nav>
        <nav id="menuTemp">
            <a href="{{route('ocorrenciasRoute')}}" id="MenuLink">Home</a>
            <a href="{{route('comingSoonRoute')}}" id="MenuLink">Relatar ocorrência</a>
            <a href="{{route('comingSoonRoute')}}" id="MenuLink">Minhas ocorrência</a>
            <a href="{{route('comingSoonRoute')}}" id="MenuLink">Redes de apoio</a>
            <a href="{{route('comingSoonRoute')}}" id="MenuLink">Contatar Serviços de Emergência</a>
            <a href="{{route('logoutRoute')}}" id="MenuLink">Log-Out</a>
        </nav>
    </header>

    <div id="@yield('classe')">
        @yield('conteudoPrincipal')
    </div>

    <footer class="footer">Bairro Seguro - Maceió, AL</footer>
</body>
</html>
