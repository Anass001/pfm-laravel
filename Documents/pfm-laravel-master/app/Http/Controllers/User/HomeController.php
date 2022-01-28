<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Property;
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
        $properties = Property::all()->take(5);
        return view('user.home', ['properties' => $properties]);
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

    public function articles($title) {
        $d1 = array(
            'title' => 'Lost Angeles',
            'short_details' => 'this is a short details',
            'text' => 'sqdqsdsqfhezdgzegoidshgodshgohdsoighdsoighsoidhgoisdhgoidshgsoifdihgsdoighsdoihgsdoighsdoighsdoighsdoihgsdoihgoisdhgoisdhgoisdh'
        );

        $d2 = array(
            'title' => 'Not lost angeles',
            'short_details' => 'this is a short details',
            'text' => 'sqdqsdsqfhezdgzegoidshgodshgohdsoighdsoighsoidhgoisdhgoidshgsoifdihgsdoighsdoihgsdoighsdoighsdoighsdoihgsdoihgoisdhgoisdhgoisdh'
        );
        $d3 = array(
              'title' => 'Not lost',
              'short_details' => 'this is a shorter short details',
              'text' => 'sqdqsdsqfhezdgzegoidshgodshgohdsqsdqsdqsdoighdsoighsoidhgoisdhgoidshgsoifdihgsdoighsdoihgsdoighsdoighsdoighsdoihgsdoihgoisdhgoisdhgoisdh'
        );
        $data = array($d1, $d2, $d3);
        return view("extra.articles")->with('data', $d3);
    }
}
