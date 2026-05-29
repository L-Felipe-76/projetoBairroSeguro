@extends('/sharedViews/templateHeaderHome')

@section('titulo', 'BS - Editar Perfil')

@section('classe', 'mainSectionEditarPerfil')

@section('conteudoPrincipal')
    
    <section>

        <form method="POST" action="{{route('salvarPerfilRoute')}}" enctype="multipart/form-data">

            <div class="linha">
                <div class="controlCampo">
                    <label for="campo-nomeCompleto" id="campoLabel">Nome Completo</label>
                    <input type="text" name="nomeCompleto" id="campo-nomeCompleto" required maxlength="250" minlength="7" value="{{$perfil['nomeCompleto']}}">
                </div>

                <div class="controlCampo">
                    <label for="campo-genero" id="campoLabel">Gênero</label>
                    <select name="genero" id="campo-genero" required>
                        <option >Selecione</option>
                        <option {{ $perfil['genero'] == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                        <option {{ $perfil['genero'] == 'Feminino' ? 'selected' : '' }}>Feminino</option>
                        <option {{ $perfil['genero'] == 'Prefiro não informar' ? 'selected' : '' }}>Prefiro não informar</option>
                    </select>
                </div>

                <div class="controlCampo">
                    <label for="campo-dataNasc" id="campoLabel">Data Nascimento</label>
                    <input type="date" name="dataNasc" id="campo-dataNasc" required value="{{$perfil['dataNasc']}}">
                </div>
            </div>

            <div class="linha">
                <div class="controlCampo">
                    <label for="campo-emailCadastro" id="campoLabel">Email</label>
                    <input type="email" name="email" id="campo-emailCadastro" required placeholder="seu@email.com" value="{{$perfil['email']}}">
                </div>
                
                <div class="controlCampo">
                    <label for="campo-senhaCadastro" id="campoLabel">Senha</label>
                    <input type="password" name="senha" id="campo-senhaCadastro" required minlength="8" placeholder="********">
                </div>

                <div class="controlCampo">
                    <label for="campo-confirmarSenhaCadastro" id="campoLabel">Confirmar Senha</label>
                    <input type="password" name="confirmarSenha" id="campo-confirmarSenhaCadastro" required minlength="8" placeholder="********">
                </div>
            </div>

            <div class="linha">
                <div class="controlCampo">
                    <label for="campo-telefone" id="campoLabel">Telefone</label>
                    <input type="tel" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" name="telefone" id="campo-telefone" required placeholder="(xx) xxxxx-xxxx" value="{{$perfil['telefone']}}">
                </div>

                <div class="controlCampo">
                    <label for="campo-qtMorador" id="campoLabel">Quantidade de moradores</label>
                    <input type="number" name="qtMorador" id="campo-qtMorador" required value="{{$perfil['qtMorador']}}">
                </div>

                <div class="controlCampo">
                    <label for="fileProfilePicture" id="campoLabel">Foto de perfil</label>
                    <input type="file" name="fileProfilePicture">
                </div>
            </div>

            <div class="linha">
                <div class="controlCampo">
                    <label for="campo-cep" id="campoLabel">CEP</label>
                    <input type="text" name="cep" id="campo-cep" placeholder="12345-678" required value="{{$perfil['cep']}}">
                </div>

                <div class="controlCampo">
                    <label for="campo-estado" id="campoLabel">Estado</label>
                    <input type="text" name="estado" id="campo-estado" required value="{{$perfil['estado']}}">
                </div>
            </div>

            <div class="linha">
                <div class="controlCampo">
                    <label for="campo-cidade" id="campoLabel">Cidade</label>
                    <input type="text" name="cidade" id="campo-cidade" required value="{{$perfil['cidade']}}">
                </div>
            </div>

            <div class="linha">
                <div class="controlCampo">
                    <label for="campo-bairro" id="campoLabel">Bairro</label>
                    <input type="text" name="bairro" id="campo-bairro" required value="{{$perfil['bairro']}}">
                </div>
            </div>

            <div class="linha">
                <div class="controlCampo">
                    <label for="campo-rua" id="campoLabel">Rua</label>
                    <input type="text" name="rua" id="campo-rua" required value="{{$perfil['rua']}}">
                </div>

                <div class="controlCampo">
                    <label for="campo-numeroDaCasa" id="campoLabel">Número da casa</label>
                    <input type="text" name="numeroDaCasa" id="campo-numeroDaCasa" value="{{$perfil['numeroDaCasa']}}">
                </div>
            </div>

            <div class="linha">
                <div class="controlCampo">
                    <label for="campo-referencias" id="campoLabel">Referências sobre a rua</label>
                    <textarea cols="100" rows="10" name="referencias" id="campo-referencias">{{$perfil['referencias']}}</textarea>
                </div>
            </div>

            <div id="butonsCadastroDiv">
                @csrf
                <button type="submit" id="finalizarCadastro">Salvar perfil</button>
                <a href="{{route('cancelarEdicaoPerfilRoute')}}">
                    <button type="button" id="cancelarCadastro">Cancelar edição perfil</button>
                </a>
            </div>

        </form>

    </section>

@endsection