@extends('user.main')
@section('title', 'found')

@section('main-content')
    <div class="root" style="background-color: #fbfbfb; min-height:100vh;">
        <div class="container justify-content-center d-flex flex-column pt-5">
            <div class="tm-bg-white ie-container-width-fix-2 mb-5">
                <div class="container ie-h-align-center-fix">
                    <div class="row">
                        <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
                            <form class="tm-search-form tm-section-pad-2" action="{{route('showResults')}}" method="post">
                                @csrf
                                <div class="form-row tm-search-form-row">
                                    <div class="form-group tm-form-element tm-form-element-100">
                                        <i class="fa fa-map-marker fa-2x tm-form-element-icon"></i>
                                        <input name="city" type="text" class="form-control" id="inputCity"
                                               placeholder="Type your destination...">
                                    </div>
                                    <div class="form-group tm-form-element tm-form-element-50">
                                        <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                        <input name="check-in" type="text" class="form-control" id="inputCheckIn"
                                               placeholder="Check In">
                                    </div>
                                    <div class="form-group tm-form-element tm-form-element-50">
                                        <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                        <input name="check-out" type="text" class="form-control" id="inputCheckOut"
                                               placeholder="Check Out">
                                    </div>
                                </div>
                                <div class="form-row tm-search-form-row">
                                    <div class="form-group tm-form-element tm-form-element-100">
                                        <select name="adult" class="form-control tm-select" id="adult">
                                            <option value="">Adult</option>
                                            <option value="2">2</option>
                                            <option value="1">1</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                        <i class="fa fa-2x fa-user tm-form-element-icon"></i>
                                    </div>
                                    <div class="form-group tm-form-element tm-form-element-50">
                                        <select name="room" class="form-control tm-select" id="room">
                                            <option value="">Room</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                        <i class="fa fa-2x fa-bed tm-form-element-icon"></i>
                                    </div>
                                    <div class="form-group tm-form-element tm-form-element-50">
                                        <button type="submit" class="btn btn-primary tm-btn-search">Check Availability</button>
                                    </div>
                                </div>
                                <div class="form-row clearfix pl-2 pr-2 tm-fx-col-xs">
                                    <p class="tm-margin-b-0">Feel free to search or .... not </p>
                                    <a href="#" class="ie-10-ml-auto ml-auto mt-1 tm-font-semibold tm-color-primary">Need
                                        Help?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @foreach($results as $result)
                <div class="card flex-row mb-5" style="width: 100%; height: 250px">
                    <div class="h-100"
                         style="background-image: url('{{$result->images->first()->image_url}}');
                             background-size:cover; background-repeat: no-repeat;background-position: center center; width: 300px"></div>
                    <div class="card-body">
                        <h3 class="card-title font-weight-bold">{{ $result->title }}</h3>
                        <div class="d-flex mb-2" style="color: goldenrod">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <p class="card-text">{{ $result->description }}</p>
                    </div>
                    <div class="d-flex flex-column align-items-end">
                        <div class="d-flex m-3">
                            <p class="d-flex align-self-center mr-2"
                               style="color: dimgrey; margin: 0 auto">{{ $result->reviews->count() }} reviews</p>
                            <div class="d-flex align-items-center justify-content-center font-weight-bold text-white"
                                 style="width: 40px; height: 40px; background-color: #003580; font-size: medium">{{$result->rating}}
                            </div>
                        </div>
                        <div class="mr-3 mb-3 mt-auto d-flex flex-column">
                            <p class="m-0 d-flex justify-content-end" style="color: dimgrey">1 adult, 2 nights</p>
                            <h4 class="mb-3 d-flex justify-content-end">MAD {{ $result->regular_room_price }}</h4>
                            <form method="post" action="{{route('viewProperty', ['id' => $result->id])}}">
                                @csrf
                                <button type="submit" class="btn btn-primary m-0">See availability</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
