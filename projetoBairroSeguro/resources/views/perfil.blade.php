@extends('/sharedViews/templateHeaderHome')

@section('titulo', 'BS - Perfil')

@section('classe', 'mainSectionPerfil')

@section('conteudoPrincipal')
    
    <section>

        <form method="POST" action="">

            <div class="linha">
                <div class="controlCampo">
                    <label for="campo-nomeCompleto" id="campoLabel">Nome Completo</label>
                    <input type="text" name="nomeCompleto" id="campo-nomeCompleto" required maxlength="250" minlength="7" disabled value="{{$perfil['nomeCompleto']}}">
                </div>

                <div class="controlCampo">
                    <label for="campo-genero" id="campoLabel">Gênero</label>
                    <select name="genero" id="campo-genero" required disabled>
                        <option>Selecione</option>
                        <option {{ $perfil['genero'] == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                        <option {{ $perfil['genero'] == 'Feminino' ? 'selected' : '' }}>Feminino</option>
                        <option {{ $perfil['genero'] == 'Prefiro não informar' ? 'selected' : '' }}>Prefiro não informar</option>
                    </select>
                </div>

                <div class="controlCampo">
                    <label for="campo-dataNasc" id="campoLabel">Data Nascimento</label>
                    <input type="date" name="dataNasc" id="campo-dataNasc" required disabled value="{{$perfil['dataNasc']}}">
                </div>
            </div>

            <div class="linha">
                <div class="controlCampo">
                    <label for="campo-emailCadastro" id="campoLabel">Email</label>
                    <input type="email" name="email" id="campo-emailCadastro" required disabled value="{{$perfil['email']}}">
                </div>
                
                <div class="controlCampo">
                    <label for="campo-senhaCadastro" id="campoLabel">Senha</label>
                    <input type="text" name="senha" id="campo-senhaCadastro" required minlength="8" disabled value="{{$perfil['senha']}}">
                </div>

            </div>

            <div class="linha">
                <div class="controlCampo">
                    <label for="campo-telefone" id="campoLabel">Telefone</label>
                    <input type="tel" pattern="([0-9]{2}) [0-9]{5}-[0-9]{4}" name="telefone" id="campo-telefone" required disabled value="{{$perfil['telefone']}}">
                </div>

                <div class="controlCampo">
                    <label for="campo-qtMorador" id="campoLabel">Quantidade de moradores</label>
                    <input type="number" name="qtMorador" id="campo-qtMorador" required disabled value="{{$perfil['qtMorador']}}">
                </div>

                <div class="controlCampo">
                    <br>
                    <a href="{{route('comingSoonRoute')}}" id="btnAdicionarMorador">
                        <button type="button" id="addMorador">Listar Moradores</button>
                    </a>
                </div>
            </div>

            <div class="linha">
                <div class="controlCampo">
                    <label for="campo-cep" id="campoLabel">CEP</label>
                    <input type="text" name="cep" id="campo-cep" required disabled value="{{$perfil['cep']}}">
                </div>

                <div class="controlCampo">
                    <label for="campo-estado" id="campoLabel">Estado</label>
                    <input type="text" name="estado" id="campo-estado" required disabled value="{{$perfil['estado']}}">
                </div>
            </div>

            <div class="linha">
                <div class="controlCampo">
                    <label for="campo-cidade" id="campoLabel">Cidade</label>
                    <input type="text" name="cidade" id="campo-cidade" required disabled value="{{$perfil['cidade']}}">
                </div>
            </div>

            <div class="linha">
                <div class="controlCampo">
                    <label for="campo-bairro" id="campoLabel">Bairro</label>
                    <input type="text" name="bairro" id="campo-bairro" required disabled value="{{$perfil['bairro']}}">
                </div>
            </div>

            <div class="linha">
                <div class="controlCampo">
                    <label for="campo-rua" id="campoLabel">Rua</label>
                    <input type="text" name="rua" id="campo-rua" required disabled value="{{$perfil['rua']}}">
                </div>

                <div class="controlCampo">
                    <label for="campo-numeroDaCasa" id="campoLabel">Número da casa</label>
                    <input type="text" name="numeroDaCasa" id="campo-numeroDaCasa" disabled value="{{$perfil['numeroDaCasa']}}">
                </div>
            </div>

            <div class="linha">
                <div class="controlCampo">
                    <label for="campo-referencias" id="campoLabel">Referências sobre a rua</label>
                    <textarea cols="100" rows="10" name="referencias" id="campo-referencias" disabled>{{$perfil['referencias']}}</textarea>
                </div>
            </div>

            <div id="butonsCadastroDiv">
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