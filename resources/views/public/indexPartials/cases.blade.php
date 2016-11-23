<section id="cases">
    <div class="parallax"></div>
    <div class="container">
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="title">
                <h1>@lang('front/cases.choose'):</h1>
                <a href="#">@lang('front/cases.findout')</a>
            </div>
        </div>

        @each('public.indexPartials.case', $cases, 'case')




    </div>
</section>