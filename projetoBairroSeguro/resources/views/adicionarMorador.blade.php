@extends('/sharedViews/templateFormAccount')

@section('titulo', 'BS - Adicionar Morador')

@section('Subtitulo', 'Adicionar Morador')

@section('classe', 'mainSectionAdicionarMorador')

@section('conteudoPrincipal')

    <form method="POST" action="{{route('salvarMoradorRoute')}}">

        <div class="linha">
            <div class="controlCampo">
                <label for="campo-nomeCompleto" id="campoLabel">Nome Completo</label>
                <input type="text" name="nomeCompletoMorador" id="campo-nomeCompleto" required maxlength="250" minlength="7">
            </div>

            <div class="controlCampo">
                <label for="campo-genero" id="campoLabel">Gênero</label>
                <select name="generoMorador" id="campo-genero" required>
                    <option>Selecione</option>
                    <option>Masculino</option>
                    <option>Feminino</option>
                    <option>Prefiro não informar</option>
                </select>
            </div>

            <div class="controlCampo">
                <label for="campo-dataNasc" id="campoLabel">Data Nascimento</label>
                <input type="date" name="dataNascMorador" id="campo-dataNasc" required>
            </div>
        </div>

        <div class="linha">
            <div class="controlCampo">
                <label for="campo-telefone" id="campoLabel">Telefone</label>
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

@endsection