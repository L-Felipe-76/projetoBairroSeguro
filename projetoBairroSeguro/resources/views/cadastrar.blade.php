@extends('/sharedViews/templateFormAccount')

@section('titulo', 'BS - Cadastro')

@section('Subtitulo', 'Cadastro')

@section('classe', 'mainSectionCadastrar')

@section('conteudoPrincipal')

    <form method="POST" action="{{route('finalizarCadastroRoute')}}">

        <div class="linha">
            <div class="controlCampo1">
                <label for="campo-nomeCompleto" id="nomeCompletoLabel">Nome Completo</label>
                <input type="text" name="nomeCompleto" id="campo-nomeCompleto" required maxlength="250" minlength="7">
            </div>

            <div class="controlCampo1">
                <label for="campo-genero" id="generoLabel">Gênero</label>
                <select name="genero" id="campo-genero" required>
                    <option>Selecione</option>
                    <option>Masculino</option>
                    <option>Feminino</option>
                    <option>Prefiro não informar</option>
                </select>
            </div>

            <div class="controlCampo1">
                <label for="campo-dataNasc" id="dataNascLabel">Data Nascimento</label>
                <input type="date" name="dataNasc" id="campo-dataNasc" required>
            </div>
        </div>

        <div class="linha">
            <div class="controlCampo2">
                <label for="campo-emailCadastro" id="emailCadastroLabel">Email</label>
                <input type="email" name="email" id="campo-emailCadastro" required placeholder="seu@email.com">
            </div>
            
            <div class="controlCampo2">
                <label for="campo-senhaCadastro" id="senhaCadastro">Senha</label>
                <input type="password" name="senha" id="campo-senhaCadastro" required minlength="8" placeholder="********">
            </div>

            <div class="controlCampo2">
                <label for="campo-confirmarSenhaCadastro" id="confirmarSenhaCadastroLabel">Confirmar Senha</label>
                <input type="password" name="confirmarSenha" id="campo-confirmarSenhaCadastro" required minlength="8" placeholder="********">
            </div>
        </div>

        <div class="linha">
            <div class="controlCampo3">
                <label for="campo-telefone" id="telefoneLabel">Telefone</label>
                <input type="tel" pattern="([0-9]{2}) [0-9]{5}-[0-9]{4}" name="telefone" id="campo-telefone" required placeholder="(xx) xxxxx-xxxx">
            </div>

            <div class="controlCampo3">
                <label for="campo-qtMorador" id="qtMoradorLabel">Quantidade de moradores</label>
                <input type="number" name="qtMorador" id="campo-qtMorador" required>
            </div>

            <div class="controlCampo3">
                <br>
                <a href="{{route('adicionarMoradorRoute')}}" id="btnAdicionarMorador">
                    <button type="button" id="addMorador">Adicionar Morador</button>
                </a>
            </div>
        </div>

        <div class="linha">
            <div class="controlCampo4">
                <label for="campo-cep" id="cepLabel">CEP</label>
                <input type="text" name="cep" id="campo-cep" placeholder="12345-678" required>
            </div>

            <div class="controlCampo4">
                <label for="campo-estado" id="estadoLabel">Estado</label>
                <input type="text" name="estado" id="campo-estado" required>
            </div>
            
            <div class="controlCampo4">
                <label for="campo-cidade" id="cidadeLabel">Cidade</label>
                <input type="text" name="cidade" id="campo-cidade" required>
            </div>
        </div>

        <div class="linha">
            <div class="controlCampo5">
                <label for="campo-bairro" id="bairroLabel">Bairro</label>
                <input type="text" name="bairro" id="campo-bairro" required>
            </div>

            <div class="controlCampo5">
                <label for="campo-rua" id="ruaLabel">Rua</label>
                <input type="text" name="rua" id="campo-rua" required>
            </div>

            <div class="controlCampo5">
                <label for="campo-numeroDaCasa" id="numeroDaCasaLabel">Número da casa</label>
                <input type="text" name="numeroDaCasa" id="campo-numeroDaCasa">
            </div>
        </div>

        <div class="linha">
            <div class="controlCampo6">
                <label for="campo-referencias" id="referenciasLabel">Referências sobre a rua</label>
                <textarea cols="100" rows="10" name="referencias" id="campo-referencias"></textarea>
            </div>
        </div>

        <div class="butonsCadastroDiv">
            @csrf
            <button type="submit" id="finalizarCadastro">Finalizar Cadastro</button>
            <a href="{{route('cancelarCadastroRoute')}}">
                <button type="button" id="cancelarCadastro">Cancelar</button>
            </a>
        </div>

    </form>

@endsection