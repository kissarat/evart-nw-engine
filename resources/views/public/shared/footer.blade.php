<section id="footer" class="wow fadeIn" data-wow-duration="400ms" data-wow-delay="0ms">
    <div class="container">
        <div class="col-xs-12 col-sm-6 col-md-3 text-right">
            <a class="brand" href="/">
                <img src="/assets_front/img/logo-big.png" alt="Evart-Network">
            </a>
            <p>Be smart. Be first. Be cool.</p>
        </div>
        <div class="hidden-xs hidden-sm col-md-6">
            <div class="col-xs-6">
                <h1>@lang('front/footer.latest')</h1>
                <hr>
            </div>
            <div class="col-xs-12">
                @foreach(ewn_lastNews() as $post)
                    <article>
                        <h4>{{str_width($post['title_'. getLangRU_EN()], 80)}}</h4>
                        <time>{{dateparse_format($post->updated_at)}}</time>
                    </article>
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="col-xs-12">
                <h1>@lang('front/footer.contact')</h1>
                <hr>
            </div>
            <div class="col-xs-12">
                <div class="contacts">
                    <p>@lang('front/footer.address') <br>
                        Email: <a href="mailto:info@evartnetwork.com">info@evartnetwork.com</a>
                    </p>
                </div>
            </div>
            <div class="col-xs-12 socials">
                <a href="#"><i class="icon icon-facebook"></i></a>
                <a href="#"><i class="icon icon-twitter"></i></a>
                <a href="#"><i class="icon icon-youtube"></i></a>
                <a href="#"><i class="icon icon-instagram"></i></a>
                <a href="#"><i class="icon icon-vk"></i></a>
            </div>
        </div>
    </div>
</section>