<?php

namespace App\Http\Controllers\User;

use App\Models\Booking;
use App\Models\Property;
use App\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Routing\Controller as BaseController;
use function view;


class FindRoomController extends BaseController
{
    public function index(Request $request)
    {
        $request->validate([
            'city' => 'required',
            'check-in' => 'required',
            'check-out' => 'required',
            'adult' => 'required',
            'room' => 'required'
        ]);

        $city = $request->city;
        $results = Property::all()->where('city', $city);
        return view('layouts.found', ['results' => $results]);
    }
}
