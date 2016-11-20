<div class="col-xs-12 col-sm-6 col-md-3">
    <div class="case wow fadeInDown" data-wow-duration="400ms" data-wow-delay="{{$case['delay']}}ms">
        <div class="bg"></div>
        <article>
            <header>
                <h1>{{$case['name']}}</h1>
                <p>{{$case['description']}}</p>
            </header>
            <footer>
                <ul>
                    @foreach($case['list'] as $item)
                        <li>{{$item}}</li>
                    @endforeach
                </ul>
            </footer>
            @if($case['month'])
                <span class="time"><strong>{{$case['month']}}</strong>@choice('front/cases.month', $case['month'])</span>
            @endif
        </article>
    </div>
</div>