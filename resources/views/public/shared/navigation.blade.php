<section id="navigation" class="container-fluid">
    <div class="container">
        <nav class="navbar" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="/assets_front/img/logo.png" alt="Evart Network"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown dropdown-main">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Evart Network</a>
                        <ul class="dropdown-menu dropdown-menu-left">
                            <li><a href="{{route('front.network.philosophy')}}">@lang('front/navigation.network.philosophy')</a></li>
                            <li><a href="{{route('front.network.slogan')}}">@lang('front/navigation.network.slogan')</a></li>
                            <li><a href="{{route('front.network.management')}}">@lang('front/navigation.network.management')</a></li>
                            <li><a href="{{route('front.network.box')}}">@lang('front/navigation.network.box')</a></li>
                            <li><a href="{{route('front.network.globaltv')}}">@lang('front/navigation.network.globaltv')</a></li>
                            <li><a href="{{route('front.network.legalaspects')}}">@lang('front/navigation.network.legalaspects')</a></li>
                            <li><a href="{{route('front.network.representatives')}}">@lang('front/navigation.network.representatives')</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-main">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">@lang('front/navigation.career.title')</a>
                        <ul class="dropdown-menu dropdown-menu-left">
                            <li><a href="{{route('front.career.marketing')}}">@lang('front/navigation.career.marketing')</a></li>
                            <li><a href="{{route('front.career.cases')}}">@lang('front/navigation.career.cases')</a></li>
                            <li><a href="{{route('front.career.affiliateprogram')}}">@lang('front/navigation.career.affiliateprogram')</a></li>
                            <li><a href="{{route('front.career.statuses')}}">@lang('front/navigation.career.statuses')</a></li>
                            <li><a href="{{route('front.career.financialsafety')}}">@lang('front/navigation.career.financialsafety')</a></li>
                        </ul>
                    </li>
                    <li {{ Route::currentRouteNamed('front.news') ? 'class=active' : '' }}>
                        <a href="{{route('front.news')}}">@lang('front/navigation.News')</a>
                    </li>
                    <li class="dropdown dropdown-main">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">@lang('front/navigation.questions.title')</a>
                        <ul class="dropdown-menu dropdown-menu-left">
                            <li><a href="#">@lang('front/navigation.questions.contacts')</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-lang">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            {{ Cookie::get('locale_front') ?? 'en'}}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-left wow fadeInRight" data-wow-duration="400ms" data-wow-delay="0ms">
                            {{--<li><a href="{{route_lang('en')}}"><abbr>en</abbr><i class="lang lang-en"></i> English</a></li>--}}
                            <li><a href="{{route_lang('ru')}}"><abbr>ru</abbr><i class="lang lang-ru"></i> Русский</a></li>
                            {{--<li><a href="{{route_lang('zh')}}"><abbr>zh</abbr><i class="lang lang-zh"></i> China</a></li>--}}
                            {{--<li><a href="{{route_lang('de')}}"><abbr>de</abbr><i class="lang lang-de"></i> Deutsch</a></li>--}}
                            <li><a href="{{route_lang('fr')}}"><abbr>fr</abbr><i class="lang lang-fr"></i> Français</a></li>
                            <li><a href="{{route_lang('it')}}"><abbr>it</abbr><i class="lang lang-it"></i> Italiano</a></li>
                            {{--<li><a href="{{route_lang('ua')}}"><abbr>ua</abbr><i class="lang lang-ua"></i> Українська</a></li>--}}
                            <li><a href="{{route_lang('pl')}}"><abbr>pl</abbr><i class="lang lang-pl"></i> Polski</a></li>
                            <li><a href="{{route_lang('hu')}}"><abbr>hu</abbr><i class="lang lang-hu"></i> Magyar</a></li>
                            {{--<li><a href="{{route_lang('tr')}}"><abbr>tr</abbr><i class="lang lang-tr"></i> Türkçe</a></li>--}}
                            {{--<li><a href="{{route_lang('kz')}}"><abbr>kz</abbr><i class="lang lang-kz"></i> қазақ тілі</a></li>--}}
                            {{--<li><a href="{{route_lang('pt')}}"><abbr>pt</abbr><i class="lang lang-pt"></i> Português</a></li>--}}
                            {{--<li><a href="{{route_lang('az')}}"><abbr>az</abbr><i class="lang lang-az"></i> azәrbaycan dili</a></li>--}}
                            {{--<li><a href="{{route_lang('kg')}}"><abbr>kg</abbr><i class="lang lang-kg"></i> Кыргызча</a></li>--}}
                        </ul>
                    </li>
                    <li><a href="{{route('front.login')}}" class="btn"><i class="ico ico-user"></i>@lang('front/navigation.Signin')</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
</section>