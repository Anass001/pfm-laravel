@extends('layouts.main')

@section('title','Home')

@section('main-content')

<div class="tm-section tm-bg-img" id="tm-section-1">
                <div class="tm-bg-white ie-container-width-fix-2">
                    <div class="container ie-h-align-center-fix">
                        <div class="row">
                            <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
                                <form class="tm-search-form tm-section-pad-2" action="{{route('showResults')}}" method="post">
                                    @csrf
                                    <div class="form-row tm-search-form-row">
                                        <div class="form-group tm-form-element tm-form-element-100">
                                            <i class="fa fa-map-marker fa-2x tm-form-element-icon"></i>
                                            <input name="city" type="text" class="form-control" id="inputCity" placeholder="Type your destination...">
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-50">
                                            <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                            <input name="check-in" type="text" class="form-control" id="inputCheckIn" placeholder="Check In">
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-50">
                                            <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                            <input name="check-out" type="text" class="form-control" id="inputCheckOut" placeholder="Check Out">
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
                                          <p class="tm-margin-b-0">Feel free to search or .... not  </p>
                                          <a href="#" class="ie-10-ml-auto ml-auto mt-1 tm-font-semibold tm-color-primary">Need Help?</a>
                                      </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tm-section-2">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h2 class="tm-section-title">We are here to help you?</h2>
                            <p class="tm-color-white tm-section-subtitle">Best Booking Service</p>
                            <a href="#" class="tm-color-white tm-btn-white-bordered">Take a tour !!</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tm-section tm-position-relative">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" class="tm-section-down-arrow">
                    <polygon fill="#003580" points="0,0  100,0  50,60"></polygon>
                </svg>
                <div class="container tm-pt-5 tm-pb-4">
                    <div class="row text-center">
                        <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-article">
                            <i class="fa tm-fa-6x fa-legal tm-color-primary tm-margin-b-20"></i>
                            <h3 class="tm-color-primary tm-article-title-1">Best homes ever</h3>
                            <p>With more than 1111111111 property </p>
                            <a href="#" class="text-uppercase tm-color-primary tm-font-semibold">Discorver more...</a>
                        </article>
                        <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-article">
                            <i class="fa tm-fa-6x fa-plane tm-color-primary tm-margin-b-20"></i>
                            <h3 class="tm-color-primary tm-article-title-1">Airplane Tickets</h3>
                            <p>Affiliated with more than 111 airlines craps </p>
                            <a href="#" class="text-uppercase tm-color-primary tm-font-semibold">Discorver more...</a>
                        </article>
                        <article class="col-sm-12 col-md-4 col-lg-4 col-xl-4 tm-article">
                            <i class="fa tm-fa-6x fa-life-saver tm-color-primary tm-margin-b-20"></i>
                            <h3 class="tm-color-primary tm-article-title-1">Best Trains ever</h3>
                            <p>Just Ride it or leave it .</p>
                            <a href="#" class="text-uppercase tm-color-primary tm-font-semibold">Discover more...</a>
                        </article>
                    </div>
                </div>
            </div>


            <div class="properties-list-vertical" style="display:flex;flex-direction:row;justify-content: center;gap: 50px;overflow:auto;position:relative;margin-bottom:100px">
                @foreach ($properties as $p)
                    <div class="card" style="width: 18rem;">
                        <img src={{  "/img/" . $p['imgUrl'] }} style="width:100%;height: 100px">
                        <div class="card-body">
                    <h5 class="card-title">{{$p['title']}}</h5>
                    <p class="card-text">
                        {{$p['desc']}}
                    </p>
                    <a href={{"/property/" . $p['id']}} class="btn btn-primary"> Go check </a>
                            </div>
                    </div>
                @endforeach

            </div>


@endsection
