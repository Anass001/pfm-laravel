@extends('admin.main')

@section('title','properties')

@section('main-content')

    <div class="d-flex justify-content-center mt-5">
        <div class="d-flex flex-column w-75">
            <div class="mb-4"><h1>Add booking</h1></div>
            <form class="row g-3" method="post" action="{{route('storeBooking')}}">
                @csrf
                <div class="col-md-6">
                    <label for="inputArrivalDate" class="form-label">Arrival date</label>
                    <input name="arrival_date" type="date" class="form-control" id="inputArrivalDate">
                </div>
                <div class="col-md-6">
                    <label for="inputCheckoutDate" class="form-label">Checkout date</label>
                    <input name="checkout_date" type="date" class="form-control" id="inputCheckoutDate">
                </div>
                <div class="col-md-12">
                    <label for="inputPeopleCount" class="form-label">People count</label>
                    <input name="people_count" type="number" class="form-control" id="inputPeopleCount">
                </div>
                <div class="col-12">
                    <label for="userId" class="form-label">Users</label>
                    <select name="user_id" class="form-select" id="userId">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{$user->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12">
                    <label class="form-label" for="autoSizingSelect">Property type</label>
                    <select name="property_id" class="form-select" id="autoSizingSelect">
                        @foreach($properties as $property)
                            <option value="{{ $property->id }}">{{$property->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12">
                    <label class="form-label" for="autoSizingSelect">Requested room type</label>
                    <select name="room_type_id" class="form-select" id="autoSizingSelect">
                        @foreach($room_types as $room_type)
                            <option value="{{ $room_type->id }}">{{$room_type->description}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Add booking</button>
                </div>
            </form>
        </div>
    </div>
@endsection
