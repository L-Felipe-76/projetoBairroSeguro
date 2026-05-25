<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
</head>

<body class="bodyOcorrencias">

    <header class="header">
        <nav class="navBar">

            <div class="menuBtnDiv">
                <button id="menuBtn">☰</button>
            </div>
            
            <div class="searchBarDiv">
                <input type="search" name="searchBar" id="barraDePesquisa" placeholder="Pesquisar CEP de bairro...">
            </div>

            <div class="profileBtnDiv">
                <a href="{{route('perfilRoute')}}">
                    <img src="{{asset('assets/imgs/user.png') }}" id="profileOcorrenciasImg">
                </a>
                
            </div>
        </nav>
        <nav class="menuTemp">
            <a href="{{route('ocorrenciasRoute')}}" id="MenuLink">Home</a>
            <a href="{{route('comingSoonRoute')}}" id="MenuLink">Relatar ocorrência</a>
            <a href="{{route('comingSoonRoute')}}" id="MenuLink">Minhas ocorrência</a>
            <a href="{{route('comingSoonRoute')}}" id="MenuLink">Redes de apoio</a>
            <a href="{{route('comingSoonRoute')}}" id="MenuLink">Contatar Serviços de Emergência</a>
            <a href="{{route('logoutRoute')}}" id="MenuLink">Log-Out</a>
        </nav>
    </header>

    <div>
        @yield('conteudoPrincipal')
    </div>

    <footer class="footer">Bairro Seguro - Maceió, AL</footer>
</body>
</html>
