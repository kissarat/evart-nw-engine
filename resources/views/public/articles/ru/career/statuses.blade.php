@extends('public.articles.article')

@section('path', 'Твоя карьера в Evart Network')
@section('article-title', 'Статусы')

@section('content')
    <section id="article" class="article">
        <header>
            <div class="img-wrapper">
                <img src="/assets_front/img/slider/1.jpg" alt="Статусы">
            </div>
            <div class="container flex">

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <h1>Статусы</h1>
                </div>
            </div>

        </header>
        <article class="container">

            <div class="col-xs-12">
                <figure>
                    <img src="/assets_front/img/status.png" alt="Статусы">
                </figure>
            </div>
        </article>
        <footer>
            <div class="container">
                <div class="col-xs-12">
                    <span>Share</span>
                    <a href="#"><i class="icon icon-facebook"></i></a>
                    <a href="#"><i class="icon icon-twitter"></i></a>
                    <a href="#"><i class="icon icon-vk"></i></a>
                </div>
            </div>
        </footer>
    </section>
@endsection

