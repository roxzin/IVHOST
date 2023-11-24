<!-- resources/views/conteudo.blade.php -->
@extends('includes.header-footer')

@section('titulo-pagina', 'Base De Conhecimento - IVHOST') <!-- Define o título específico desta página -->

@section('conteudo-pagina')

<section id="hero-main" class="jumbotron-fluid hero">
    <div class="hero hero-0 hero-bg-image hero-type-page hero-nav-inverse overflow-hidden hero-right-side-boxed hero-classic">
        <div class="background-image" style="background-image: url('/images/4313228.jpg'); background-position: center center;"></div>
        <div class="overlay overlay-brand opacity-30"></div>
        <style>
            .hero-0 {
                --hero-background: #002D3F;
                --content-backdrop-color: inherit;
                --hero-background-mobile: block;
            }

            .hero-0 .right-side-content img {
                max-width: 100%;
                max-height: 100%;
                border-radius: px;
            }
        </style>
        <div class="container-fluid">
            <div class="row justify-content-md-start">
                <div class="hero-left d-flex flex-column justify-content-center no-gutters col-md-6 col-lg-6">
                    <div class="hero-content-wrapper d-flex align-items-center col-12 col-lg-11">
                        <div class="inner-wrapper">
                            <div class="hero-title-wrapper">
                                <h1 class="page-title">BASE DE CONHECIMENTO</h1>
                            </div>
                            <div class="hero-subtext">Fique por dentro das notícias.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="row"></div>
<div class="main">
    <h2 style='text-align: center;'>Fique por dentro!</h2>
    <div class="blogs-content-wrapper">
        <div id="blog-stage" class="">
            <div id="blog-results">
                <div class="container-fluid">
                    <div id="blog-list" class="row no-gutters">
                        @foreach($bases as $base_de_conhecimentos)
                        <div class="blog-item col-md-4 col-12 animated fadeIn">
                            <div class="post">
                                <a href="/base-de-conhecimento/{{ $base_de_conhecimentos->titulo_slug }}" class="featured-image-thumbnail">
                                    <div class="image" style="background-image: url('/images/blog/{{ $base_de_conhecimentos->image }}');">&nbsp;</div>
                                    <div class="overlay overlay-blogs"></div>
                                </a>
                                <div class="content-wrapper match-height-row" style="min-height: 177.797px;">
                                    <a href="/base-de-conhecimento/{{ $base_de_conhecimentos->titulo_slug }}" class="overlay-link"></a>
                                    <div class="meta meta-top">
                                        <time class="meta-info date notranslate">{{ $base_de_conhecimentos->data_hora }}</time>
                                        <span class="meta-info author">{{ $base_de_conhecimentos->autor }}</span>
                                    </div>
                                    <h6 class="title">{{ $base_de_conhecimentos->titulo }}</h6>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="result-list row no-gutters"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

