@extends('admin.main')

@section('title','users')

@section('main-content')

    <div class="card m-4">
        <div class="card-header">
            <i class="fas fa-calendar-check"></i>
            Bookings
        </div>
        <div class="card-body">
            <button style="float: right;" class="btn btn-primary mb-3 ms-3">
                <a href="{{ route('createBooking') }}" class="text-decoration-none text-white" target="_self">
                    <i class="fas fa-plus me-2"></i>Add Booking
                </a>
            </button>
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Arrival date</th>
                    <th>Checkout date</th>
                    <th>Property</th>
                    <th>Price</th>
                    <th>Booking date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $booking->id }}</td>
                        <td>{{ $booking->user->first_name }}</td>
                        <td>{{ $booking->user->last_name }}</td>
                        <td>{{ $booking->arrival_date }}</td>
                        <td>{{ $booking->checkout_date }}</td>
                        <td>{{ $booking->property->title }}</td>
                        <td>{{ $booking->total_price }}</td>
                        <td>{{ $booking->created_at }}</td>
                        <td class="d-flex">
                            <i class="fas fa-pen text-black me-2"></i>
                            <i class="fas fa-trash-alt text-danger"></i>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
