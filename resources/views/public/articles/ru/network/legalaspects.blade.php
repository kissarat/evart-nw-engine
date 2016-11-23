@extends('public.articles.article')

@section('path', 'Evart Network')
@section('article-title', 'Юридические аспекты')

@section('content')
    <section id="article" class="article">
        <header>
            <div class="img-wrapper">
                <img src="/assets_front/img/slider/1.jpg" alt="Юридические аспекты">
            </div>
            <div class="container flex">

                <div class="col-xs-12 col-sm-8 col-md-5">
                    <h1>Юридические аспекты</h1>
                </div>
            </div>

        </header>
        <article class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="header">
                        Компания «Evart Network» зарегистрирована в Великобритании, # SLO025347.
                    </div>
                </div>
            </div>

            <div class="col-xs-12">
                <p>
                    Главный офис «Evart» находится в Риге, Латвия, а регистрационный номер компании 14058641.
                </p>
                <p>
                    Это первое, что интересует большинство.
                </p>
                <p>Если у тебя есть другие вопросы, обращайся в представительство компании «Evart Network» в твоей стране.</p>
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

