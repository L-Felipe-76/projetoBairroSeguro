@extends('/sharedViews/templateFormAccount')

@section('titulo', 'BS - Cadastro')

@section('Subtitulo', 'Cadastro')

@section('classe', 'mainSectionCadastrar')

@section('conteudoPrincipal')

    <form method="POST" action="{{route('finalizarCadastroRoute')}}">

        <div class="linha">
            <div class="controlCampo">
                <label for="campo-nomeCompleto" id="campoLabel">Nome Completo</label>
                <input type="text" name="nomeCompleto" id="campo-nomeCompleto" required maxlength="250" minlength="7">
            </div>

            <div class="controlCampo">
                <label for="campo-genero" id="campoLabel">Gênero</label>
                <select name="genero" id="campo-genero" required>
                    <option>Selecione</option>
                    <option>Masculino</option>
                    <option>Feminino</option>
                    <option>Prefiro não informar</option>
                </select>
            </div>

            <div class="controlCampo">
                <label for="campo-dataNasc" id="campoLabel">Data Nascimento</label>
                <input type="date" name="dataNasc" id="campo-dataNasc" required>
            </div>
        </div>

        <div class="linha">
            <div class="controlCampo">
                <label for="campo-emailCadastro" id="campoLabel">Email</label>
                <input type="email" name="email" id="campo-emailCadastro" required placeholder="seu@email.com">
            </div>
            
            <div class="controlCampo">
                <label for="campo-senhaCadastro" id="campoLabel">Senha</label>
                <input type="password" name="password" id="campo-senhaCadastro" required minlength="8" placeholder="********">
            </div>

            <div class="controlCampo">
                <label for="campo-confirmarSenhaCadastro" id="campoLabel">Confirmar Senha</label>
                <input type="password" name="confirmarSenha" id="campo-confirmarSenhaCadastro" required minlength="8" placeholder="********">
            </div>
        </div>

        <div class="linha">
            <div class="controlCampo">
                <label for="campo-telefone" id="campoLabel">Telefone</label>
                <input type="tel" pattern="([0-9]{2}) [0-9]{5}-[0-9]{4}" name="telefone" id="campo-telefone" required placeholder="(xx) xxxxx-xxxx">
            </div>

            <div class="controlCampo">
                <label for="campo-qtMorador" id="campoLabel">Quantidade de moradores</label>
                <input type="number" name="qtMorador" id="campo-qtMorador" required>
            </div>

            <div class="controlCampo">
                <br>
                <a href="{{route('adicionarMoradorRoute')}}" id="btnAdicionarMorador">
                    <button type="button" id="addMorador">Adicionar Morador</button>
                </a>
            </div>
        </div>

        <h1 id="h1Cad">Dados de Endereço</h1>

        <div class="linha">
            <div class="controlCampo">
                <label for="campo-cep" id="campoLabel">CEP</label>
                <input type="text" name="cep" id="campo-cep" placeholder="12345-678" required>
            </div>

            <div class="controlCampo">
                <label for="campo-estado" id="campoLabel">Estado</label>
                <input type="text" name="estado" id="campo-estado" required>
            </div>
            
            <div class="controlCampo">
                <label for="campo-cidade" id="campoLabel">Cidade</label>
                <input type="text" name="cidade" id="campo-cidade" required>
            </div>
            
            <div class="controlCampo">
                <label for="campo-bairro" id="campoLabel">Bairro</label>
                <input type="text" name="bairro" id="campo-bairro" required>
            </div>
        </div>

        <div class="linha">
            <div class="controlCampo">
                <label for="campo-rua" id="campoLabel">Rua</label>
                <input type="text" name="rua" id="campo-rua" required>
            </div>

            <div class="controlCampo">
                <label for="campo-numeroDaCasa" id="campoLabel">Número da casa</label>
                <input type="text" name="numeroDaCasa" id="campo-numeroDaCasa">
            </div>
        </div>

        <div class="linha">
            <div class="controlCampo">
                <label for="campo-referencias" id="campoLabel">Referências sobre a rua</label>
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