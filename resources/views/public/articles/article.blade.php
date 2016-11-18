@extends('public.master')

@section('body-class', 'side-filter--active')

@section('content')
    <section id="article" class="article">
        <header>
            <div class="img-wrapper">
                <img src="assets_front/img/slider/1.jpg" alt="Success philosophy">
            </div>
            <div class="container flex">

                <div class="col-xs-12 col-sm-7 col-md-5">
                    <h1>Success philosophy</h1>
                </div>
            </div>

        </header>
        <article class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="header">
                        Evart Corporation was created in 2016. Since its birth, a new era of cutting-edge business strategies of the new creative-class generation has started.
                    </div>
                </div>
            </div>

            <div class="col-xs-12">
                <p>Even at the beginning of its operation, Evart has something that other companies <br> have been struggling to achieve for decades:</p>
                <ul>
                    <li>Freedom</li>
                    <li>Self-sufficiency</li>
                    <li>Topicality</li>
                    <li>Innovations</li>
                </ul>
                <h2 class="type-one">Evart Corporation not creates the future. It is the future.</h2>
                <h2 class="type-two">Evart Corporation not creates the future. It is the future.</h2>
                <p>Dozens of profitable companies and successful projects are combined in a strong competitive corporate structure.</p>
                <p>But the flagship and the priority of Evart Corporation is the company Evart Network, which is the result of a unique collaboration of two other key companies: Evart Media and Evart Technology.</p>
                <p>The basis of Evart Network consists of <mark>a revolutionary concept, which for the <br> first time in the history of business unites:</mark></p>
                <ul>
                    <li>Media</li>
                    <li>Information technologies</li>
                    <li>Network marketing</li>
                </ul>

                <p>In a simplified sense, Evart Network is a global network of worldwide TV screens. And the main income is the sale of airtime.</p>

                <p>In your opinion, how much are famous brands willing to pay for advertising?</p>

                <p>In 2016, the broadcasting of a 30-second promotional video during a live Super Bowl broadcasting reached a record amount of $5,000,000. Nearly 100,000,000 viewers have been ensured.</p>

                <p>However, <a href="#">Super Bowl</a> takes place only once a year. In the future, Evart Network will ensure an audience of one million interested viewers daily worldwide.</p>

                <p>TV-screens are already placed in the US. Europe, CIS, Asia are ahead.</p>

                <p>Through information technology, we produce exclusive and developing media content and broadcast it on own channel Evart TV.</p>

                <p>Thus, covering a vast audience, Evart Network has a unique offer for advertisers.</p>

                <p>Our business is very successful. We want to share our profits with people like us. We need ambitious, hard-working, purposeful, courageous people and those who have the desire to change the world.</p>

                <p>We are the first to offer such a business model. And we are very proud of it.</p>

                <p><strong>We believe that the work of the company Evart Network will become a matter of your life. Of your happy and prosperous Life.</strong></p>

                <blockquote>
                    <p>This is Your Only Unique Chance to change your Life. Use it right now.</p>
                    <cite>CEO Maksym Blazhkun</cite>
                </blockquote>
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

@section('after-main')
    <section id="floatHeader">
        <div class="container">
            <div class="row">
                <div class="navbar" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/"><img src="assets_front/img/logo.png" alt="Evart Network"></a>
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