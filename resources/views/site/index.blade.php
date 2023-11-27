@extends('site.layouts.corpo')

@section('subtitulo', 'Home')

@section('conteudo')
    <header id="container-header">
        <div id="cabecalho">
            <h1>GetJob</h1>
            <div id="botao-tema" onclick="trocaTema()">
                <button><img id="foto-botao-tema" src="{{asset('user/img/contrast_FILL0_wght400_GRAD0_opsz24.svg')}}" alt=""></button>
            </div>
        </div>
    </header>
    <main style="background-image: url('{{ asset('user/img/bg-job.jpg')}}');">
 
        <div class="cards">
            <div class="card" id="card" onclick="abrirModal()" style="background-image: url('{{ asset('user/img/istockphoto-1183978184-612x612.jpg')}}'); background-size: container">
                <div class="card-cabecalho">
                    <div class="card-cabecalho-info">
                        <img src="{{asset('user/img/download.jpg')}}" alt="foto-usuario">
                        <div>
                            <p>Lucas Tavares</p>
                            <p>Cursando Ciência da Computação</p>
                        </div>
                    </div>
                </div>
                <div class="card-corpo">
                    <div class="card-corpo-info">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et ab quibusdam odit quod nemo incidunt officiis quas dolores corrupti earum voluptatem, illo dignissimos sed vitae sit natus quo doloribus. Odit nostrum animi et obcaecati? Atque nihil corrupti quae hic ratione!
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{asset('user/js/script.js')}}" ></script>
@endsection
@section('modal')
    <div class="janela-modal" id="janela-modal">
        <div class="modal">
            <button class="fechar" id="fechar">X</button>
            <h1>Janela modal</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae sint praesentium magnam earum quo et molestias, culpa vel laudantium natus!</p>
        </div>
    </div>
@endsection