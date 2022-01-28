<?php

namespace App\Http\Controllers\User;

use App\Models\Booking;
use App\Models\Property;
use App\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;
use function view;

class FindRoomController extends BaseController
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'city' => 'required',
            'check-in' => 'required',
            'check-out' => 'required',
            'adult' => 'required',
            'room' => 'required'
        ]);

        if($validator->fails()){
            return view('user.home');
        }

        $city = $request->city;
        $results = Property::all()->where('city', $city);
        $booking_info = ['city' => $request->city, 'check_in' => $request['check-in'], 'check_out' => $request['check-out'], 'adult' => $request->adult, 'rooms' => $request->room];
        $request->session()->put('booking_info', $booking_info);

        return view('user.found', ['results' => $results]);
    }

    public function withValidator($validator)
    {
//        $validator->after(function ($validator) {
//            if ($this->somethingElseIsInvalid()) {
//                $validator->errors()->add('field', 'Something is wrong with this field!');
//            }
//        });
    }
}
