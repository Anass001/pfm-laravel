<?php

namespace App\Http\Controllers\Admin;

use App\Models\Property;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BookingsController extends Controller
{
    private $country_list = array(
        "Afghanistan",
        "Albania",
        "Algeria",
        "Andorra",
        "Angola",
        "Antigua and Barbuda",
        "Argentina",
        "Armenia",
        "Australia",
        "Austria",
        "Azerbaijan",
        "Bahamas",
        "Bahrain",
        "Bangladesh",
        "Barbados",
        "Belarus",
        "Belgium",
        "Belize",
        "Benin",
        "Bhutan",
        "Bolivia",
        "Bosnia and Herzegovina",
        "Botswana",
        "Brazil",
        "Brunei",
        "Bulgaria",
        "Burkina Faso",
        "Burundi",
        "Cambodia",
        "Cameroon",
        "Canada",
        "Cape Verde",
        "Central African Republic",
        "Chad",
        "Chile",
        "China",
        "Colombi",
        "Comoros",
        "Congo (Brazzaville)",
        "Congo",
        "Costa Rica",
        "Cote d'Ivoire",
        "Croatia",
        "Cuba",
        "Cyprus",
        "Czech Republic",
        "Denmark",
        "Djibouti",
        "Dominica",
        "Dominican Republic",
        "East Timor (Timor Timur)",
        "Ecuador",
        "Egypt",
        "El Salvador",
        "Equatorial Guinea",
        "Eritrea",
        "Estonia",
        "Ethiopia",
        "Fiji",
        "Finland",
        "France",
        "Gabon",
        "Gambia, The",
        "Georgia",
        "Germany",
        "Ghana",
        "Greece",
        "Grenada",
        "Guatemala",
        "Guinea",
        "Guinea-Bissau",
        "Guyana",
        "Haiti",
        "Honduras",
        "Hungary",
        "Iceland",
        "India",
        "Indonesia",
        "Iran",
        "Iraq",
        "Ireland",
        "Israel",
        "Italy",
        "Jamaica",
        "Japan",
        "Jordan",
        "Kazakhstan",
        "Kenya",
        "Kiribati",
        "Korea, North",
        "Korea, South",
        "Kuwait",
        "Kyrgyzstan",
        "Laos",
        "Latvia",
        "Lebanon",
        "Lesotho",
        "Liberia",
        "Libya",
        "Liechtenstein",
        "Lithuania",
        "Luxembourg",
        "Macedonia",
        "Madagascar",
        "Malawi",
        "Malaysia",
        "Maldives",
        "Mali",
        "Malta",
        "Marshall Islands",
        "Mauritania",
        "Mauritius",
        "Mexico",
        "Micronesia",
        "Moldova",
        "Monaco",
        "Mongolia",
        "Morocco",
        "Mozambique",
        "Myanmar",
        "Namibia",
        "Nauru",
        "Nepal",
        "Netherlands",
        "New Zealand",
        "Nicaragua",
        "Niger",
        "Nigeria",
        "Norway",
        "Oman",
        "Pakistan",
        "Palau",
        "Panama",
        "Papua New Guinea",
        "Paraguay",
        "Peru",
        "Philippines",
        "Poland",
        "Portugal",
        "Qatar",
        "Romania",
        "Russia",
        "Rwanda",
        "Saint Kitts and Nevis",
        "Saint Lucia",
        "Saint Vincent",
        "Samoa",
        "San Marino",
        "Sao Tome and Principe",
        "Saudi Arabia",
        "Senegal",
        "Serbia and Montenegro",
        "Seychelles",
        "Sierra Leone",
        "Singapore",
        "Slovakia",
        "Slovenia",
        "Solomon Islands",
        "Somalia",
        "South Africa",
        "Spain",
        "Sri Lanka",
        "Sudan",
        "Suriname",
        "Swaziland",
        "Sweden",
        "Switzerland",
        "Syria",
        "Taiwan",
        "Tajikistan",
        "Tanzania",
        "Thailand",
        "Togo",
        "Tonga",
        "Trinidad and Tobago",
        "Tunisia",
        "Turkey",
        "Turkmenistan",
        "Tuvalu",
        "Uganda",
        "Ukraine",
        "United Arab Emirates",
        "United Kingdom",
        "United States",
        "Uruguay",
        "Uzbekistan",
        "Vanuatu",
        "Vatican City",
        "Venezuela",
        "Vietnam",
        "Yemen",
        "Zambia",
        "Zimbabwe"
    );

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $bookings = Booking::all();
        return view('admin.bookings.index', ['bookings' => $bookings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $properties = Property::all();
        $users = User::all();
        return view('admin.bookings.create', ['properties' => $properties, 'countries' => $this->country_list, 'users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $request->validate([
            'arrival_date' => 'required|date',
            'checkout_date' => 'required|date',
            'people_count' => 'required|max:10',
            'room_id' => 'required',
            'requested_room_type_id' => 'required',
        ]);

        $booking = new Booking;
        $booking->arrival_date = $request->arrival_date;
        $booking->checkout_date = $request->checkout_date;
        $booking->people_count = $request->people_count;
        $booking->user_id = Auth::id();
        $booking->room_id = $request->room_id;
        $booking->requested_room_type_id = $request->requested_room_type_id;
        $booking->save();

        return view('admin.bookings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     */
    public function show($id)
    {
        $booking = Booking::find($id);

        // show the view and pass the bookings to it
        return view('admin.bookings.show', ['booking' => $booking]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $booking = Booking::find($id);

        // show the view and pass the bookings to it
        return view('admin.bookings.edit', ['booking' => $booking]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     */
    public function update($id, $request)
    {
        $request->validate([
            'arrival_date' => 'required|date',
            'checkout_date' => 'required|date',
            'people_count' => 'required|max:10',
            'room_id' => 'required',
            'requested_room_type_id' => 'required',
        ]);

        $booking = Booking::find($id);
        $booking->arrival_date = $request->arrival_date;
        $booking->checkout_date = $request->checkout_date;
        $booking->people_count = $request->people_count;
        $booking->room_id = $request->room_id;
        $booking->requested_room_type_id = $request->requested_room_type_id;
        $booking->save();

        return view('admin.bookings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        return view('admin.bookings.index');
    }
}
