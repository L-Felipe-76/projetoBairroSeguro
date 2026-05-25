@extends('/sharedViews/templateHeaderHome')

@section('titulo', 'BS - Perfil')

@section('conteudoPrincipal')
    
    <section class="mainSectionPerfil">

        <form method="POST" action="" class="formCadastrar">

            <div class="primeiraLinha">
                <div class="controlCampo1">
                    <label for="campo-nomeCompleto" id="nomeCompletoLabel">Nome Completo</label>
                    <input type="text" name="nomeCompleto" id="campo-nomeCompleto" required maxlength="250" minlength="7" disabled value="{{$perfil['nomeCompleto']}}">
                </div>

                <div class="controlCampo1">
                    <label for="campo-genero" id="generoLabel">Gênero</label>
                    <select name="genero" id="campo-genero" required disabled>
                        <option>Selecione</option>
                        <option {{ $perfil['genero'] == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                        <option {{ $perfil['genero'] == 'Feminino' ? 'selected' : '' }}>Feminino</option>
                        <option {{ $perfil['genero'] == 'Prefiro não informar' ? 'selected' : '' }}>Prefiro não informar</option>
                    </select>
                </div>

                <div class="controlCampo1">
                    <label for="campo-dataNasc" id="dataNascLabel">Data Nascimento</label>
                    <input type="date" name="dataNasc" id="campo-dataNasc" required disabled value="{{$perfil['dataNasc']}}">
                </div>
            </div>

            <div class="segundaLinha">
                <div class="controlCampo2">
                    <label for="campo-emailCadastro" id="emailCadastroLabel">Email</label>
                    <input type="email" name="email" id="campo-emailCadastro" required disabled value="{{$perfil['email']}}">
                </div>
                
                <div class="controlCampo2">
                    <label for="campo-senhaCadastro" id="senhaCadastro">Senha</label>
                    <input type="text" name="senha" id="campo-senhaCadastro" required minlength="8" disabled value="{{$perfil['senha']}}">
                </div>

            </div>

            <div class="terceiraLinha">
                <div class="controlCampo3">
                    <label for="campo-telefone" id="telefoneLabel">Telefone</label>
                    <input type="tel" pattern="([0-9]{2}) [0-9]{5}-[0-9]{4}" name="telefone" id="campo-telefone" required disabled value="{{$perfil['telefone']}}">
                </div>

                <div class="controlCampo3">
                    <label for="campo-qtMorador" id="qtMoradorLabel">Quantidade de moradores</label>
                    <input type="number" name="qtMorador" id="campo-qtMorador" required disabled value="{{$perfil['qtMorador']}}">
                </div>

                <div class="controlCampo3">
                    <br>
                    <a href="{{route('comingSoonRoute')}}" id="btnAdicionarMorador">
                        <button type="button" id="addMorador">Listar Moradores</button>
                    </a>
                </div>
            </div>

            <div class="quartaLinha">
                <div class="controlCampo4">
                    <label for="campo-cep" id="cepLabel">CEP</label>
                    <input type="text" name="cep" id="campo-cep" required disabled value="{{$perfil['cep']}}">
                </div>

                <div class="controlCampo4">
                    <label for="campo-estado" id="estadoLabel">Estado</label>
                    <input type="text" name="estado" id="campo-estado" required disabled value="{{$perfil['estado']}}">
                </div>
            </div>

            <div class="quintaLinha">
                <div class="controlCampo5">
                    <label for="campo-cidade" id="cidadeLabel">Cidade</label>
                    <input type="text" name="cidade" id="campo-cidade" required disabled value="{{$perfil['cidade']}}">
                </div>
            </div>

            <div class="sextaLinha">
                <div class="controlCampo6">
                    <label for="campo-bairro" id="bairroLabel">Bairro</label>
                    <input type="text" name="bairro" id="campo-bairro" required disabled value="{{$perfil['bairro']}}">
                </div>
            </div>

            <div class="setimaLinha">
                <div class="controlCampo7">
                    <label for="campo-rua" id="ruaLabel">Rua</label>
                    <input type="text" name="rua" id="campo-rua" required disabled value="{{$perfil['rua']}}">
                </div>

                <div class="controlCampo7">
                    <label for="campo-numeroDaCasa" id="numeroDaCasaLabel">Número da casa</label>
                    <input type="text" name="numeroDaCasa" id="campo-numeroDaCasa" disabled value="{{$perfil['numeroDaCasa']}}">
                </div>
            </div>

            <div class="oitavaLinha">
                <div class="controlCampo8">
                    <label for="campo-referencias" id="referenciasLabel">Referências sobre a rua</label>
                    <textarea cols="100" rows="10" name="referencias" id="campo-referencias" disabled>{{$perfil['referencias']}}</textarea>
                </div>
            </div>

            <div class="butonsCadastroDiv">
                <a href="{{route('editarPerfilRoute')}}">
                    <button type="button" id="finalizarCadastro">Editar Perfil</button>
                </a>
                <a href="{{route('excluirPerfilRoute')}}">
                    <button type="button" id="cancelarCadastro">Excluir Conta</button>
                </a>
            </div>

        </form>

    </section>

@endsection