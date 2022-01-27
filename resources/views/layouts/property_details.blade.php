@extends('layouts.main')
@section('title', '' . $property['title'])

    @section('main-content')
        <div class="container" style="margin-top: 100px">
            <div class="pics" style="display:flex;justify-content:center;width: 80vw;gap: 70px">
                <div class="left" style="width: 400px; margin-top: 100px">
                    <form action={{"/book" . $property['title']}} method="POST" style="width: 230px">
                        <input type="text" name="destination" class="form-control form-group" placeholder="Type your destination" style="display:block">
                        <input type="date" name="check-in" class="form-control form-group" placeholder="Check in"  style="display:block">
                        <input type="date" name="check-out" class="form-control form-group" placeholder="Check out"  style="display:block">
                        <input type="number" name="Adults" class="form-control form-group" placeholder="Adults"  style="display:block">
                        <input type="number" name="Room" class="form-control form-group" placeholder="Rooms"  style="display:block">
                        <button type="submit" class="btn btn-primary">Search </button>
                    </form>
                </div>
                <div>
                    <div class="details" style="width:100%;height:70px">

                        <div class="left" style="float:left">
                        <h3>Property {{ $property['title'] }}</h3>
                        <h5>{{$property['location']}}</h5>
                        </div>
                        <div class="right" style="float:right">
                            <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Reserver</button>
                        </div>
                    </div>
                    <div class="right" style="display:flex;justify-content:center; gap: 10px">
                    <div class="right-pics" style="width: 300px">
                        @foreach ($property['imgUrl'] as $pic)
                            <img src={{$pic}} style="width:150px; height:auto; margin-top: 10px;margin-bottom:10px">
                        @endforeach
                    </div>
                    <img src={{$property['imgUrl'][0]}} alt="" style="width: auto ;height: 300px" />
                </div>
                </div>
            </div>
        </div>
        @endsection
