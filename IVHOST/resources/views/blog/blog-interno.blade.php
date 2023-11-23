<!-- resources/views/conteudo.blade.php -->
@extends('includes.header-footer')

@section('titulo-pagina', 'Hospedagem de sites') <!-- Define o título específico desta página -->

@section('conteudo-pagina')





<section id="hero-main" class="jumbotron-fluid hero">
    <div class="hero hero-0 hero-bg-image hero-type-post hero-nav-inverse overflow-hidden hero-right-side-boxed hero-classic">
        <div class="background-image" style="background-image: url(/images/links-bg.png); background-position: center center;"></div>
        <style>
            .hero-0 {
                --hero-background: #002D3F;
                --content-backdrop-color: inherit;
                --hero-background-mobile: block;
            }

            .hero-0 .right-side-content img {
                max-width: 100%;
                max-height: 100%;
                border-radius: 0px;
            }
        </style>
        <div class="container-fluid">
            <div class="row justify-content-md-start">
                <div class="hero-left d-flex flex-column justify-content-center no-gutters col-md-7">
                    <div class="hero-content-wrapper d-flex align-items-center col-12 col-lg-11">
                        <div class="inner-wrapper">
                            <div class="meta">
                                <div class="meta-item meta-author">
                                    {{ $blog->autor }}
                                </div>
                                <div class="meta-item meta-date">
                                    <time datetime="2023-10-13T05:00:45-04:00" class="meta-info date notranslate">{{ $blog->data_hora }}</time>
                                </div>
                                <div class="meta-item meta-reading">{{ $blog->categoria }}</div>
                            </div>
                            <div class="hero-title-wrapper">
                                <h1 class="page-title">{{ $blog->titulo }}</h1>
                            </div>
                            <div class="hero-subtext">{{ $blog->sub_titulo }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<div class="main">

@php
$currentURL = url()->current();
@endphp

<div class="block blog-post-full">
    <div class="container-fluid position-relative">
        <div id="share-links" class="share-links stuck" style="top: auto; bottom: 0px;">
            <a rel="noopener" class="share-links-link share-links-linkedin" href="https://www.linkedin.com/shareArticle?mini=true&amp;url={{ $currentURL }}" target="_blank">
                <svg class="icon">
                    <use xlink:href="#linkedin"></use>
                </svg>
            </a>
            <a rel="noopener" class="share-links-link share-links-twitter" href="https://twitter.com/share?url={{ $currentURL }}" target="_blank">
                <svg class="icon">
                    <use xlink:href="#twitter"></use>
                </svg>
            </a>
            <a rel="noopener" class="share-links-link share-links-facebook" href="http://www.facebook.com/sharer.php?u={{ $currentURL }}" target="_blank">
                <svg class="icon">
                    <use xlink:href="#facebook"></use>
                </svg>
            </a>
            <a rel="noopener" class="share-links-link share-links-email" href="mailto:?Subject=IVHOST&amp;Body={{ $currentURL }}">
                <svg class="icon">
                    <use xlink:href="#mail"></use>
                </svg>
            </a>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-md-10 col-lg-10 col-xl-9">
        <article class="blog-content content-styled">
            <div style="text-align: center;"><img src="/images/blog/{{ $blog->image }}"></div>
            <p>{!! $blog->texto !!}</p>
        </article>
        <b>Tags:</b>
        
    </div>
</div>

<section class="block block-blogs padding-none-bottom block-align-center">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="relatedTitle"> Relacionados </div>
            </div>
            @foreach ($blogsRelacionados as $blog)
                <div class="blog-item col-md-4 col-12 animated fadeIn">
                    <div class="post">
                        <a href="/blog/{{ $blog['titulo_slug'] }}" class="featured-image-thumbnail">
                            <div class="image" style="background-image: url('/images/blog/{{ $blog['image'] }}');">&nbsp;</div>
                            <div class="overlay overlay-blogs"></div>
                        </a>
                        <div class="content-wrapper match-height-row" style="min-height: 177.797px;">
                            <a href="/blog/{{ $blog['titulo_slug'] }}" class="overlay-link"></a>
                            <div class="meta meta-top">
                                <time class="meta-info date notranslate">{{ $blog['data_hora'] }}</time>
                                <span class="meta-info author">{{ $blog['autor'] }}</span>
                            </div>
                            <h6 class="title">{{ $blog['titulo'] }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>







      </div>
    </div>
  </section>
</div>


@endsection