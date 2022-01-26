<?php

namespace App\Http\Controllers;

use App\View\Components\Alert;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;


class IndexController extends BaseController
{

    public function seek(\Illuminate\Http\Request $request)
    {
        $form_data = $_POST;
        dd($form_data);
    }

    public function index()
    {
        return view('layouts.home');
    }
}
