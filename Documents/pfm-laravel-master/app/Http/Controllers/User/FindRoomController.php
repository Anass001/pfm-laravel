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
        // fix validation later: add validation error ui message
//        $request->validate([
//            'city' => 'required',
//            'check-in' => 'required',
//            'check-out' => 'required',
//            'adult' => 'required',
//            'room' => 'required'
//        ]);

        $city = $request->city;
        $results = Property::all()->where('city', $city);
        $booking_info = ['city' => $request->city, 'check_in' => $request['check-in'], 'check_out' => $request['check-out'], 'adult' => $request->adult, 'rooms' => $request->room];
        return view('user.found', ['results' => $results, 'booking_info' => $booking_info]);
    }
}
