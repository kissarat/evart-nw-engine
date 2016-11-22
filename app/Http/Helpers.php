<?php
function createCase($name, $summ, $list, $month = false){
    $List = [];
    foreach ($list as $item){
        if(starts_with(strtolower($item), 'box'))
            array_push($List, trans('front/cases.list.box'));
        elseif (starts_with(strtolower($item), 'office'))
            array_push($List, trans('front/cases.list.office'));
        elseif (starts_with(strtolower($item), 'tv')){
            list($type, $count) = explode(':', $item);
            array_push($List, trans_choice('front/cases.list.tv', $count, [
                'count' => $count
            ]));
        }
        elseif (starts_with(strtolower($item), 'count')){
            list($type, $count) = explode(':', $item);
            array_push($List, trans('front/cases.list.available', [
                'count' => $count
            ]));
        }
    }

    return [
        'delay' => rand(200, 600),
        'name' => trans('front/cases.name', ['name' => "$name case"]),
        'description' => trans('front/cases.description', ['summ' => $summ]),
        'list' => $List,
        'month' => $month
        ];
}

function str_width($string, $maxlen){
    return mb_strimwidth(strip_tags($string), 0, $maxlen, '...');
}

function getLangRU_EN($name = 'locale_front'){
    return Cookie::get($name) == 'ru' ? 'ru' : 'en';
}

function html_strong($text){
    return '<strong>' . $text .'</strong>';
}

function setCarbonLocale(){
    $lang = getLangRU_EN();
    switch($lang){
        case "ru":
            setlocale(LC_TIME, "ru_RU.UTF-8");
            break;
        default:
            setlocale(LC_TIME, "en_US.UTF-8");
            break;
    }
    return $lang;
}

function dateparse_format($value, $format = '%d %b %Y'){
    Carbon\Carbon::setLocale(setCarbonLocale());
    $date = Carbon\Carbon::createFromTimeStamp(strtotime($value));

    return $date->formatLocalized($format);
}

function dateparse_timeAgo($value){
    Carbon\Carbon::setLocale(setCarbonLocale());
    $date = Carbon\Carbon::createFromTimeStamp(strtotime($value));
    return $date->diffForHumans();
}

function route_lang($lang){
    return route('front.lang', ['lang' => $lang]);
}

function view_localized($lang, $path, $name, $fallback = 'en'){
    $view = 'public.articles.' . $lang . '.' . $path . '.' . $name;

    if(!\Illuminate\Support\Facades\View::exists($view)){
        return view('public.articles.' . $fallback . '.' . $path . '.' . $name);
    }

    return view($view);
}