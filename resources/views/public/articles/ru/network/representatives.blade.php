@extends('public.articles.article')

@section('article-title', 'Представительства')

@section('content')
    <section id="article" class="article">
        <header>
            <div class="img-wrapper">
                <img src="/assets_front/img/slider/1.jpg" alt="Представительства">
            </div>
            <div class="container flex">

                <div class="col-xs-12 col-sm-8 col-md-5">
                    <h1>Представительства</h1>
                </div>
            </div>

        </header>
        <article class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="header">
                        Если Ты не нашел среди списка стран свою, то тебе повезло!
                    </div>
                </div>
            </div>

            <div class="col-xs-12">
                <p>
                    Потому что у Тебя есть шанс стать первым! Значит у тебя есть уникальная возможность начать бизнес будущего в своей стране. За это тебе поставят памятник, или наградят орденом.
                </p>
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

