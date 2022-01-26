<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use \App\Models\Property;

class PropertiesController extends Controller
{
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
        return view('admin.properties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'property_type' => 'required',
            'address' => 'required',
            'zip_code' => 'required',
            'city' => 'required',
            'country' => 'required'
        ]);

        $property = new Property;
        $property->title = $request->title;
        $property->description = $request->description;
        $property->property_type = $request->property_type;
        $property->address = $request->address;
        $property->zip_code = $request->zip_code;
        $property->city = $request->city;
        $property->country = $request->country;

        $property->save();

        return view('admin.properties.index');
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

        // show the view and pass the property to it
        return view('admin.properties.edit', ['property' => $property]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     */
    public function update($id, $request)
    {
        $request->validate([
            'title' => 'required',
            'property_type' => 'required',
            'address' => 'required',
            'zip_code' => 'required',
            'city' => 'required',
            'country' => 'required'
        ]);

        $property = Property::find($id);
        $property->title = $request->title;
        $property->description = $request->description;
        $property->property_type = $request->property_type;
        $property->address = $request->address;
        $property->zip_code = $request->zip_code;
        $property->city = $request->city;
        $property->country = $request->country;

        $property->save();

        return view('admin.properties.index');
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
        return view('admin.properties.index');
    }
}
