@extends('public.master')

@section('body-class', 'side-filter--active')

@section('content')
    <section id="publication" class="article">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <header>
                        <a href="#">Publications</a>
                        <h1>WD Respond 2016: six key takeaways from two keynote speakers.</h1>
                        <div class="description">
                            <time>06 Sep 2016</time>
                            <span>By Gary Manson</span>
                            <span>Read in 4 minutes</span>
                        </div>
                    </header>
                </div>
            </div>
        </div>
        <article class="side-filter--active">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <figure>
                            <img src="/assets_front/img/slider/1.jpg" alt="">
                            <figcaption>
                                <p>Lorem ipsum dolor sit amet.</p>
                                <p>Imsge source</p>
                            </figcaption>
                        </figure>
                        <h2 class="type-one">After being held in Sydney for the previous two years, Web Directions Respond came to Melbourne on April 11 and 12 for two days of talks geared towards design and web-usability.</h2>
                        <hr>
                        <p>
                            As with other Web Directions events I’ve attended in the past, the first thing to note is that the catering was awesome! It was hard to resist the vast smorgasbord of snacks and limitless supply of excellent coffee. No need to stress about the decadent two-day diet though, it’s all fine – according to event organiser, John Allsopp, ‘conference calories don’t count’.
                        </p>
                        <p>
                            Wishful thinking, maybe. But with the amount of general thinking that was going on — and a variety of speakers introducing some fascinating ideas — every brain in attendance needed all the ongoing nourishment available.
                        </p>
                        <p>
                            Here are six key takeaways from my two favourite speakers at Web Directions Respond 2016: <u>Ethan Marcotte</u> and <u>Jen Simmons</u>. Or, the thoughts that have kept me thinking in the wake of the event.
                        </p>
                        <h2 class="type-four">Ethan Marcotte.</h2>
                        <p>Hailing from Boston, Massachusetts, <a href="#">Ethan Marcotte</a> is the man behind the term ‘responsive web design’. He kicked off the conference with a really interesting presentation – elaborating on the reasons why we should be lazy in responsive web design.</p>
                        <h3 class="type-one">Take away #1: Let’s get lazy in design.</h3>
                        <p>Ethan suggested it’s all about finding ways to be lazier in responsive web design. Or, to put it another way, looking for simpler approaches when developing interfaces. If we can use resources to make the development process easier for website elements that aren’t too complicated in the first place—like layouts, for example—we can siphon away time that could be better used in honing more impactful site features.</p>
                        <blockquote>
                            <p>“I will always choose a lazy person to do a difficult job, because they will find an easy way to do it.”</p>
                            <cite>CEO Maksym Blazhkun</cite>
                        </blockquote>

                        <h2 class="type-one">Take away #2: Work hard to make things better.</h2>
                        <p>Kind of contradictory when set against that first take away, but still a valid point nonetheless. Ethan’s second major piece of advice? Don’t avoid the hard stuff: work to improve everyone’s experience of the web.</p>
                        <p>As an example, he spoke about the fact there are more and more devices being released. It’s no longer practical or viable to simply classify them as ‘mobile’ or ‘tablet’. Developing for these specific devices is not a forward-thinking or future-proof approach.</p>
                        <p>Frameworks are great for prototyping rapidly and they make things easy, but they’re also device-focused which means they’re restrictive.</p>
                        <p>With that attitude, we can design for products that don’t actually exist yet. Which is pretty cool when you think about it.</p>

                        <h2 class="type-four">Jen Simmons.</h2>

                        <p><u>Jen Simmons</u> is a Designer Advocate at <u>Mozilla</u>. With more than two decades’ worth of front-end development experience, she has worked on a wide variety of projects for <u>CERN</u>, the <u>W3C</u>, <u>Google</u>, <u>Drupal</u>, and more.</p>

                        <h2 class="type-one">Take away #1: Re-think the ‘messy cupboard’ menu.</h2>

                        <p>This might sound a little strange, but stay with me: the hamburger menu is a messy cupboard.

                            Think about it – on the surface level, the hamburger menu icon is simple and clear. Just like someone’s cupboards in a nicely designed home kitchen. But once you open up that fly-out menu (or take a poke around the nether realms of anyone’s tupperware cupboard…you know the one) the mirage of pristine order and arrangement can very quickly come undone.</p>
                        <figure>
                            <img src="/assets_front/img/slider/1.jpg" alt="">
                            <figcaption>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </figcaption>
                        </figure>

                        <p>At a quick snapshot, Jen referenced:</p>

                        <ul>
                            <li>Initial-letter – drop caps is the print design practice of using a large letter to indicate the start of a block of text. The initial-letter feature allows you to recreate this aesthetic in the browser.</li>
                            <li>Clip-path and shape-outside – browsers render elements in boxes. Clip-path and shape-outside features enable you to create custom ‘masks’ for elements so they can achieve different shapes. The shape-outside feature goes one step further by wrapping text around the mask of an element that has shape-outside applied.</li>
                            <li>Grid layout – where flexbox is used to lay out elements along a single dimension – either in a row or column – grid layout allows you to lay out elements in both dimensions.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </article>
        <footer class="side-filter--active">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <span>Share</span>
                        <a href="#"><i class="icon icon-facebook"></i></a>
                        <a href="#"><i class="icon icon-twitter"></i></a>
                        <a href="#"><i class="icon icon-vk"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </section>
@endsection

@section('after-main')
    <section id="floatHeader">
        <div class="container">
            <div class="row">
                <div class="navbar" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/"><img src="/assets_front/img/logo.png" alt="Evart Network"></a>
                    </div>
                    <ul class="nav navbar-nav navbar-left breadcrumbs">
                        <li><a href="#">Evart Network</a></li>
                        <li class="active"><a href="#">Success philosophy</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><i class="icon icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon icon-vk"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection