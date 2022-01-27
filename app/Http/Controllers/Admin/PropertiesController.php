<?php

namespace App\Http\Controllers\Admin;

use App\Models\PropertyType;
use App\Models\Review;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use \App\Models\Property;
use Illuminate\Support\Facades\Log;

class PropertiesController extends Controller
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
        $properties = Property::all();
        return view('admin.properties.index', ['properties' => $properties]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $property_types = PropertyType::all();
        $room_types = RoomType::all();
        return view('admin.properties.create', ['property_types' => $property_types, 'countries' => $this->country_list, 'room_types' => $room_types]);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'property_type_id' => 'required',
            'address' => 'required',
            'zip_code' => 'required',
            'city' => 'required',
            'country' => 'required'
        ]);

        $property = new Property;
        $property->title = $request->title;
        $property->description = $request->description;
        $property->property_type_id = $request->property_type_id;
        $property->regular_room_price = $request->regular_room_price;
        $property->address = $request->address;
        $property->zip_code = $request->zip_code;
        $property->city = $request->city;
        $property->country = $request->country;

//        $room_types = RoomType::all();

        $property->save();

        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     */
    public function show($id)
    {
        $property = Property::find($id);
        // show the view and pass the property to it
        return view('admin.properties.show', ['property' => $property]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $property = Property::find($id);
        $property_types = PropertyType::all();

        // show the view and pass the property to it
        return view('admin.properties.edit', ['property' => $property, 'property_types' => $property_types, 'countries' => $this->country_list]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'property_type_id' => 'required',
            'address' => 'required',
            'zip_code' => 'required',
            'city' => 'required',
            'country' => 'required'
        ]);

        $property = Property::find($id);
        $property->title = $request->title;
        $property->description = $request->description;
        $property->property_type_id = $request->property_type_id;
        $property->regular_room_price = $request->regular_room_price;
        $property->address = $request->address;
        $property->zip_code = $request->zip_code;
        $property->city = $request->city;
        $property->country = $request->country;

        $property->save();

        return redirect()->route('viewProperties');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy($id)
    {
        $property = Property::find($id);
        $property->delete();
        return redirect()->route('viewProperties');
    }
}
