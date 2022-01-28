@extends('admin.main')

@section('title','properties')

@section('main-content')

    <div class="d-flex justify-content-center mt-5">
        <div class="d-flex flex-column w-75">
            <div class="mb-4"><h1>Edit property</h1></div>
            <form class="row g-3" method="post" action="{{route('updateProperty', ['id' => $property->id])}}">
                @csrf
                <div class="col-md-12">
                    <label for="inputTitle" class="form-label">Title</label>
                    <input value="{{$property->title}}" name="title" type="text" class="form-control" id="inputTitle">
                </div>
                <div class="col-md-12">
                    <label for="inputDescription" class="form-label">Description</label>
                    <textarea name="description" rows="4" class="form-control" id="inputDescription">{{$property->description}}</textarea>
                </div>
                <div class="col-12">
                    <label class="form-label" for="autoSizingSelect">Property type</label>
                    <select name="property_type_id" class="form-select" id="autoSizingSelect">
                        <option selected value="{{$property->propertyType->id}}">{{$property->propertyType->description}}</option>
                        @foreach($property_types as $property_type)
                            <option value="{{ $property_type->id }}">{{$property_type->description}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12">
                    <label for="priceInput" class="form-label">Rate (per night)</label>
                    <div class="input-group">
                        <input value="{{$property->regular_room_price}}" name="regular_room_price" id="priceInput" type="text" class="form-control"
                               aria-label="Dollar amount (with dot and two decimal places)">
                        <span class="input-group-text">MAD</span>
                    </div>
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input value="{{$property->address}}" name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input value="{{$property->city}}" name="city" type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                    <label for="inputCountry" class="form-label">Country</label>
                    <select name="country" id="inputCountry" class="form-select">
                        <option selected>{{$property->country}}</option>
                        @foreach($countries as $country)
                            <option>{{$country}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input value="{{$property->zip_code}}" name="zip_code" type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Update property</button>
                </div>
            </form>
        </div>
    </div>
@endsection
