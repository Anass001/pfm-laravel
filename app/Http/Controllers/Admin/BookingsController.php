<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BookingsController extends Controller
{
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
        return view('admin.bookings.create');
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
