@extends('site.layouts.corpo')

@section('subtitulo', 'Home')

@section('conteudo')
    <header id="container-header">
        <div id="cabecalho">
          <h1>GetJob</h1>
        </div>
    </header>
    <main style="background-image: url('{{ asset('user/img/bg.jpg')}}');">
        <div class="cards">
            <div class="card">
                <div class="card-cabecalho">
                    <img src="{{asset('user/img/download.jpg')}}" alt="foto-usuario">
                    <div class="card-cabecalho-info">
                        <p>Lucas Lopes</p>
                        <p>Ciência da Computação</p>
                        <p>Cursando</p>
                    </div>
                </div>
                <div>

                </div>
                <div>

                </div>
            </div>
        </div>
    </main>
    <script src="{{asset('user/js/script.js')}}" ></script>
@endsection