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
                    <label for="userEmailsDataList" class="form-label">User email</label>
                    <input class="form-control" list="datalistOptions" id="userEmailsDataList" placeholder="Type user email...">
                    <datalist id="emailListOptions">
                        @foreach($users as $user)
                            <option value="{{$user->email}}">
                        @endforeach
                    </datalist>
                </div>
                <div class="col-12">
                    <label class="form-label" for="autoSizingSelect">Property type</label>
                    <select name="property" class="form-select" id="autoSizingSelect">
                        @foreach($properties as $property)
                            <option value="{{ $property->id }}">{{$property->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12">
                    <label for="priceInput" class="form-label">Single room rate (per night)</label>
                    <div class="input-group">
                        <input name="regular_room_price" id="priceInput" type="text" class="form-control"
                               aria-label="Dollar amount (with dot and two decimal places)">
                        <span class="input-group-text">MAD</span>
                    </div>
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input name="city" type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                    <label for="inputCountry" class="form-label">Country</label>
                    <select name="country" id="inputCountry" class="form-select">
                        @foreach($countries as $country)
                            <option>{{$country}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input name="zip_code" type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Add property</button>
                </div>
            </form>
        </div>
    </div>
@endsection
