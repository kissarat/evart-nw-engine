<section id="navigation" class="container-fluid wow fadeIn" data-wow-duration="500ms" data-wow-delay="0ms">
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
                <a class="navbar-brand" href="/"><img src="assets_front/img/logo.png" alt="Evart Network"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown dropdown-main active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Evart Network</a>
                        <ul class="dropdown-menu dropdown-menu-left">
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-main">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">@lang('front/navigation.Carrier')</a>
                        <ul class="dropdown-menu dropdown-menu-left">
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-main">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">@lang('front/navigation.News')</a>
                        <ul class="dropdown-menu dropdown-menu-left">
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-main">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">@lang('front/navigation.About')</a>
                        <ul class="dropdown-menu dropdown-menu-left">
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#">Link</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-lang">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            {{ Cookie::get('locale_front') ?? 'en'}}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-left wow fadeInRight" data-wow-duration="400ms" data-wow-delay="0ms">
                            <li><a href="/lang/en"><abbr>en</abbr><i class="lang lang-en"></i> English</a></li>
                            <li><a href="/lang/ru"><abbr>ru</abbr><i class="lang lang-ru"></i> Русский</a></li>
                            <li><a href="#"><abbr>zh</abbr><i class="lang lang-zh"></i> China</a></li>
                            <li><a href="#"><abbr>de</abbr><i class="lang lang-de"></i> Deutsch</a></li>
                            <li><a href="#"><abbr>fr</abbr><i class="lang lang-fr"></i> Français</a></li>
                            <li><a href="#"><abbr>it</abbr><i class="lang lang-it"></i> Italiano</a></li>
                            <li><a href="#"><abbr>ua</abbr><i class="lang lang-ua"></i> Українська</a></li>
                            <li><a href="#"><abbr>pl</abbr><i class="lang lang-pl"></i> Polski</a></li>
                            <li><a href="#"><abbr>es</abbr><i class="lang lang-es"></i> Español</a></li>
                            <li><a href="#"><abbr>tr</abbr><i class="lang lang-tr"></i> Türkçe</a></li>
                            <li><a href="#"><abbr>kz</abbr><i class="lang lang-kz"></i> қазақ тілі</a></li>
                            <li><a href="#"><abbr>pt</abbr><i class="lang lang-pt"></i> Português</a></li>
                            <li><a href="#"><abbr>az</abbr><i class="lang lang-az"></i> azәrbaycan dili</a></li>
                            <li><a href="#"><abbr>kg</abbr><i class="lang lang-kg"></i> Кыргызча</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="btn"><i class="ico ico-user"></i>@lang('front/navigation.Signin')</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
</section>