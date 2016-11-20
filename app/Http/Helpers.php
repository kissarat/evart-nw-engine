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
