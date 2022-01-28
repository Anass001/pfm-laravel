<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use \App\Models\Property;

class PropertiesController extends Controller
{
    public function show($id)
    {
        $property = Property::find($id);
        return view('user.properties.show', ['property' => $property]);
    }
}
