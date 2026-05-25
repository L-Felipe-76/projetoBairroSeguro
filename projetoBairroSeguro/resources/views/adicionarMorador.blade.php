@extends('/sharedViews/templateFormAccount')

@section('titulo', 'BS - Adicionar Morador')

@section('subtitulo', 'Adicionar Morador')

@section('conteudoPrincipal')

    <section class="mainSectionAdicionarMorador">

        <form method="POST" action="{{route('salvarMoradorRoute')}}" class="formCadastrar">

            <div class="primeiraLinhaMorador">
                <div class="controlCampo1">
                    <label for="campo-nomeCompleto" id="nomeCompletoLabel">Nome Completo</label>
                    <input type="text" name="nomeCompletoMorador" id="campo-nomeCompleto" required maxlength="250" minlength="7">
                </div>

                <div class="controlCampo1">
                    <label for="campo-genero" id="generoLabel">Gênero</label>
                    <select name="generoMorador" id="campo-genero" required>
                        <option>Selecione</option>
                        <option>Masculino</option>
                        <option>Feminino</option>
                        <option>Prefiro não informar</option>
                    </select>
                </div>

                <div class="controlCampo1">
                    <label for="campo-dataNasc" id="dataNascLabel">Data Nascimento</label>
                    <input type="date" name="dataNascMorador" id="campo-dataNasc" required>
                </div>
            </div>

            <div class="segundaLinhaMorador">
                <div class="controlCampo3">
                    <label for="campo-telefone" id="telefoneLabel">Telefone</label>
                    <input type="tel" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" name="telefoneMorador" id="campo-telefoneMorador" required placeholder="(xx) xxxxx-xxxx">
                </div>
            </div>

            <div class="butonsMoradorDiv">
                @csrf
                <button type="submit" id="finalizarCadastroMorador">Finalizar Cadastro</button>
                <a href="{{route('cancelarMoradorRoute')}}">
                    <button type="button" id="cancelarCadastro">Cancelar</button>
                </a>
            </div>

    </section>

@endsection