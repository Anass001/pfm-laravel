<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\View\Components\Alert;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;

class IndexController extends BaseController
{


    public function index() {
        return view('layouts.home');
    }
}
