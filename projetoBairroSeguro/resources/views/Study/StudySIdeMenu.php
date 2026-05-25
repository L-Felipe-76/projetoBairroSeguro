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
                <button id="menuBtn" onclick="abrirFecharMenu()">☰</button>
            </div>
            
            <div class="searchBarDiv">
                <input type="search" name="searchBar" id="barraDePesquisa" placeholder="Pesquisar CEP de bairro...">
            </div>

            <div class="profileBtnDiv">
                <img src="{{asset('assets/imgs/user.png') }}" id="profileOcorrenciasImg">
            </div>
        </nav>
    </header>

<style>
    #container {
        display: flex;
    }

    #menu {
        width: 120px;
        background-color: red;
    }

    #main {
        flex: 1;
        padding: 5px;
    }

    .escondido {
        display: none;
    }
</style>


<script>
    let escondido = true;
    function abrirFecharMenu() {
        const menu = document.getElementById("menu");

        if (escondido) {
            menu.classList.remove('escondido');
        } else {
            menu.classList.add('escondido');
        }
        escondido = !escondido;
    }

</script>


    <div id="container">
        <div id="menu" class="escondido">
            <ul>
                <li><a href="#">Pagina 1</a></li>
                <li><a href="#">Pagina 2</a></li>
                <li><a href="#">Pagina 3</a></li>
                <li><a href="#">Pagina 4</a></li>
                <li><a href="#">Pagina 5</a></li>
            </ul>
        </div>

        <div id="main">
            @yield('conteudoPrincipal')
        </div>
    </div>
    <footer class="footer">Bairro Seguro - Maceió, AL</footer>
</body>
</html>
