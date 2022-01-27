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
            'imgUrl' => array('/img/pic_1.jpg'),
            'desc' => "sqdqsfuhdsoghsdqiuhgisdfhgosfdhgoifdshjgoidfhghodfhgofdhoghfdoghdfoghodifhgoidfhgoifdhgoihdfoighdfoighoidfhgoidfhgoidfhgoihdfogi0",
            'title' => "villa mrida"
        );
      $p2 = array(
            'id' => 2,
            'imgUrl' => array('/img/pic_2.jpeg') ,
            'desc' => 'sqdqsfuhdsoghsdqiuhgisdfhgosfdhgoifdshjgoidfhghodfhgofdhoghfdoghdfoghodifhgoidfhgoifdhgoihdfoighdfoighoidfhgoidfhgoidfhgoihdfogi0',
            'title' => "villa mrida bzaf"
        );
      $properties = array($p1, $p2);
      return view('layouts.home')->with('properties', $properties);
    }

    public function property($title) {
        $property = array(
            'id' => 1,
            'title' => "ddd",
            'location' => 'casablanca',
            'imgUrl' => array('/img/pic_1.jpg', '/img/pic_2.jpeg', '/img/pic_3.jpeg')
        );
        return view('layouts.property_details')->with('property', $property);
    }
}
