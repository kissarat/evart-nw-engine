@extends('public.articles.article')

@section('article-title', 'Руководство')

@section('content')
    <section id="article" class="article">
        <header>
            <div class="img-wrapper">
                <img src="/assets_front/img/slider/1.jpg" alt="Руководство">
            </div>
            <div class="container flex">

                <div class="col-xs-12 col-sm-8 col-md-5">
                    <h1>Руководство</h1>
                </div>
            </div>

        </header>
        <article class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="header">
                        Компания «Evart Network» находит специалистов оригинальным способом:
                    </div>
                </div>
            </div>

            <div class="col-xs-12">
                <p>
                    Мы не ищем людей под должности.
                </p>
                <p>
                    Мы находим талантливых профи и должности создаются сами собой.
                </p>
                <p>Ведь мы прежде всего ценим людей и ориентируемся на простые, но очень весомые вещи: уважение, искренность, взаимопомощь.</p>
                <p>Впрочем, одного таланта мало. Нужно работать. Начинай свою перспективную деятельность в компании «Evart Network» и ты окажешься среди руководителей.</p>
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

