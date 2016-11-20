<section id="blog" {{isset($mb) ? 'class=mb70' : false}}>
    <div class="container">
        <div class="row text-center">
            <header class="wow fadeInLeftBig {{isset($mb) ? 'white' : false}}" data-wow-duration="600ms" data-wow-delay="200ms">
                <h1>Read our blog and develop Yourself</h1>
                <hr>
            </header>
        </div>
        <div class="row">
            @php
                $lang = Cookie::get('locale_front') == 'ru' ? 'ru' : 'en';
                $delay = 0;
                $directions = ['fadeInLeftBig', 'fadeInDown', 'fadeInRightBig'];
                $position = 0;
            @endphp
            @foreach($Publications as $publication)
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <a href="{{route('front.news.single', ['id' => $publication['id']])}}">
                        <article style="background-image: url({{$publication['image_path']}})" class="wow {{$position > 2 ? $directions[$position = 0] : $directions[$position++]}}" data-wow-duration="{{rand(300, 800)}}ms" data-wow-delay="{{$delay+=200}}ms">
                            <div class="filter filter-{{str_plural($publication['type'])}}">
                                <div class="col-xs-8">
                                    <h3>{{trans('front/news.'.$publication['type'])}}</h3>
                                </div>
                                <div class="col-xs-12 overlay">
                                    <p>{!! mb_strimwidth(strip_tags($publication['article_' . $lang]), 0, 90, '...') !!}</p>
                                </div>
                            </div>
                        </article>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

</section>