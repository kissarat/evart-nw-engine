<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\Publications;

class PublicationsController extends Controller
{
    protected $type = 'publication';
    protected $paginate = 5;
    use Publications;
}
