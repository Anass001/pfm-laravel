<?php

namespace App\Http\Controllers\User;

use App\Models\Property;
use App\View\Components\Alert;
use Illuminate\Routing\Controller as BaseController;
use function view;


class FindRoomController extends BaseController
{
    public function index()
    {
        $results = Property::all();
        return view('layouts.found', ['results' => $results]);
    }
}
