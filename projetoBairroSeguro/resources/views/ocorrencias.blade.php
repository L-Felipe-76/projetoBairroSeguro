@extends('/sharedViews/templateHeaderHome')

@section('titulo', 'BS - Ocorrências Recentes')

@section('conteudoPrincipal')

    <section class="mainSectionOcorrencias">
        <h1>Ocorrências Recentes no Bairro</h1>
        
        <article class="article">
            <h2 id="h2OcorrenciaHomepage">Titulo da Ocorrencia</h2>
            <p id="pOcorrenciaHomepage">Descrição da última ocorrência relatada: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam imperdiet mollis neque, sed pharetra justo fringilla eget. Mauris ornare purus sit amet velit volutpat consectetur in ac augue. Ut convallis sapien tempus ipsum vestibulum, nec dapibus augue molestie. Nullam risus tellus, lobortis vel porta rhoncus.</p>
            <p id="pOcorrenciaData">Data: DD/MM/YYYY.</p>
            <span id="tagCriminal">Criminal</span>
        </article>

        <article class="article">
            <h2 id="h2OcorrenciaHomepage">Titulo da Ocorrencia</h2>
            <p id="pOcorrenciaHomepage">Descrição da última ocorrência relatada: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam imperdiet mollis neque, sed pharetra justo fringilla eget. Mauris ornare purus sit amet velit volutpat consectetur in ac augue. Ut convallis sapien tempus ipsum vestibulum, nec dapibus augue molestie. Nullam risus tellus, lobortis vel porta rhoncus.</p>
            <p id="pOcorrenciaData">Data: DD/MM/YYYY.</p>
            <span id="tagInfraestrutura">Ifraestrutural</span>
        </article>
    </section>

@endsection