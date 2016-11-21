<section id="cases">
    <div class="parallax"></div>
    <div class="container">
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="title">
                <h1>@lang('front/cases.choose'):</h1>
                <a href="#">@lang('front/cases.findout')</a>
            </div>
        </div>
        @php
            $cases = collect([
                createCase('Econom', 90, ["office", 'count:176']),
                createCase('Short', 900, ["box", "tv:0", 'count:12']),
                createCase('Start', 750, ["box", "tv:1", 'count:122']),
                createCase('Smart', 1500, ["box", "tv:2", 'count:47']),
                createCase('Business', 4500, ["box", "tv:3", 'count:45']),
                createCase('Premium ', 9000, ["box", "tv:5", 'count:29']),
                createCase('VIP', 21000, ["box", "tv:6", 'count:12']),
                createCase('Pragmatic ', 500 , ["box", "tv:1", 'count:200']),
                createCase('Priority', 1000, ["box", "tv:1", 'count:100']),
            ]);
        @endphp

        @each('public.indexPartials.case', $cases, 'case')




    </div>
</section>