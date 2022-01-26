<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
class UsersController extends Controller
{

     public function index() {
         //replace the queries
        $d1 = array(
                    'date' => "12/2",
                    'firstName' => "Pay",
                    'lastName' => "last name",
                    'email' => "email@sss.com",
                    'dateOfBirth' => "04/02/2002",
                    'photoUrl' => "link2",
                    'zipCode' => 4222,
                    'city' =>"city two",
                    'country' => "morocco",
                    'isAdmin' => true);
        $d2 = array(
            'date' => "10/03",
                    'firstName' => "Paysqd",
                    'lastName' => "last name sqds",
                    'email' => "emai01l@sss.com",
                    'dateOfBirth' => "05/02/2002",
                    'photoUrl' => "link24",
                    'zipCode' => 42,
                    'city' =>"city three",
                    'country' => "morocqsdco",
                    'isAdmin' => false);
        //dd($d1);
        $data = array($d1, $d2);
        return view('admin.users_list')->with('data', $data);
    }
}
