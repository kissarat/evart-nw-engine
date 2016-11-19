<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\Publications;


class NewsController extends Controller
{

    protected $type = 'news';
    protected $paginate = 5;
    use Publications;
}
