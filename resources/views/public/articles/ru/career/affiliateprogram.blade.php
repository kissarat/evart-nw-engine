@extends('public.articles.article')

@section('path', 'Твоя карьера в Evart Network')
@section('article-title', 'Партнерская программа')

@section('content')
    <section id="article" class="article">
        <header>
            <div class="img-wrapper">
                <img src="/assets_front/img/slider/1.jpg" alt="Партнерская программа">
            </div>
            <div class="container flex">

                <div class="col-xs-12 col-sm-8 col-md-6">
                    <h1>Партнерская программа</h1>
                </div>
            </div>

        </header>
        <article class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="header">
                        Начни активный карьерный рост в компании «Evart Network». Предлагай кейсы друзьям, родственникам, коллегам. Мы убеждены - каждый радостно согласится зарабатывать, сидя на диване перед телевизором и получая стабильный доход с рекламы, транслируемой на TV-экранах в глобальной сети.
                    </div>
                </div>
            </div>

            <div class="col-xs-12">
                <h2 class="type-one">
                    Партнерская программа насчитывает 9 реферальных линий и следующие вознаграждения в процентах.
                </h2>
                <figure>
                    <img src="/assets_front/img/lines.png" class="original-width" alt="Партнерская программа">
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

