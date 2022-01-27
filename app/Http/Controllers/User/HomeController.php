<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use function view;

class HomeController extends Controller
{
//    /**
//     * Create a new controller instance.
//     *
//     * @return void
//     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $p1 = array(
            'id' => 1,
            'imgUrl' => "/img/1.png",
            'desc' => "sqdqsfuhdsoghsdqiuhgisdfhgosfdhgoifdshjgoidfhghodfhgofdhoghfdoghdfoghodifhgoidfhgoifdhgoihdfoighdfoighoidfhgoidfhgoidfhgoihdfogi0",
            'title' => "villa mrida"
        );
      $p2 = array(
            'id' => 2,
            'imgUrl' => "/img/2.png",
            'desc' => 'sqdqsfuhdsoghsdqiuhgisdfhgosfdhgoifdshjgoidfhghodfhgofdhoghfdoghdfoghodifhgoidfhgoifdhgoihdfoighdfoighoidfhgoidfhgoidfhgoihdfogi0',
            'title' => "villa mrida bzaf"
        );
      $properties = array($p1, $p2);
      return view('layouts.home')->with('properties', $properties);
    }
}
