<?php

namespace App\Http\Controllers\User;

use App\Models\Booking;
use App\Models\RoomType;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use \App\Models\Property;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class PropertiesController extends Controller
{
    public function show($id)
    {
        $property = Property::find($id);
        return view('user.properties.show', ['property' => $property]);
    }

    public function store(Request $request, $id)
    {
        $booking_info = $request->session()->get('booking_info');

        $booking = new Booking();
        $booking->property_id = $id;


        $fdate = $booking_info['check_in'];
        $tdate = $booking_info['check_out'];

        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);

        $booking->arrival_date = $datetime1;
        $booking->checkout_date = $datetime2;

        $interval = $datetime1->diff($datetime2);
        $nights = $interval->format('%a');
        $booking->nights = $nights;
        $booking->total_price = intval($nights) * intval($booking_info['adult']) * 1 * intval(Property::find($id)->regular_room_price);
        $booking->people_count = $booking_info['adult'];
        $booking->requested_room_type_id = 1;
        $booking->user_id = Auth::id();

        $booking->save();

        return $this->show($id);
    }
}
