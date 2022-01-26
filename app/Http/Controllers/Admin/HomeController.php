<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use App\Models\Property;
use App\Models\User;
use Illuminate\Routing\Controller;
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
        $date = date("F j, Y, g:i a");
        $usersCount = User::all()->count();
        $bookingsCount = Booking::all()->count();
        $propertiesCount = Property::all()->count();
        $transactionsCount = Booking::all()->sum('total_price');
        $bookings = Booking::all();
        return view('admin.home', ['date' => $date, 'usersCount' => $usersCount, 'bookingsCount' => $bookingsCount, 'propertiesCount' => $propertiesCount, 'transactionsCount' => $transactionsCount, 'bookings' => $bookings]);
    }
}
