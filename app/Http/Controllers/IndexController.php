<?php

namespace App\Http\Controllers;

use App\View\Components\Alert;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Controllers\Controller;


class IndexController extends BaseController
{

    public function seek(\Illuminate\Http\Request $request) {
        // Anas i wanna see the result of the search query here
        // in this array
        $d1 = array(
            'name' => 'hotel1',
            'desc' => 'awesome hotel',
            'price' => 4221
        );

        $d2 = array(
            'name' => 'hotel2',
            'desc' => 'awesome not hotel',
            'price' => 42
        );

        $d3 = array(
            'name' => 'hotel3',
            'desc' => 'awesofqsdfme hotel',
            'price' => 4221
        );

        $d4 = array(
            'name' => 'hotel1qsd',
            'desc' => 'awesome hotel',
            'price' => 4
        );
        $form_data = array($d1, $d2, $d3, $d4);
        return view('layouts.found',['form_data' => $form_data]);
}
    public function index()
    {
        return view('layouts.home');
    }
}
