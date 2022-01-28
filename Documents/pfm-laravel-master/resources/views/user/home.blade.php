@extends('user.main')

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
                                    <button type="submit" class="btn btn-primary tm-btn-search">Check Availability
                                    </button>
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
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"
             class="tm-section-down-arrow">
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
    <div class="tm-section tm-section-pad tm-bg-gray" id="tm-section-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    <div class="tm-article-carousel">
                        <article class="tm-bg-white mr-2 tm-carousel-item">
                            <img src="img/img-01.jpg" alt="Image" class="img-fluid">
                            <div class="tm-article-pad">
                                <header><h3 class="text-uppercase tm-article-title-2">Go to Los Angeles</h3></header>
                                <p>Best Price 100% off </p>
                                <a href="offer/los_angeles" class="text-uppercase btn-primary tm-btn-primary">Get More
                                    Info.</a>
                            </div>
                        </article>
                        <article class="tm-bg-white mr-2 tm-carousel-item">
                            <img src="img/img-02.jpg" alt="Image" class="img-fluid">
                            <div class="tm-article-pad">
                                <header><h3 class="text-uppercase tm-article-title-2">Top 10 destination </h3></header>
                                <p>The best places in the world</p>
                                <a href="articles/10_destination" class="text-uppercase btn-primary tm-btn-primary">View
                                    Detail</a>
                            </div>
                        </article>
                        <article class="tm-bg-white mr-2 tm-carousel-item">
                            <img src="img/img-01.jpg" alt="Image" class="img-fluid">
                            <div class="tm-article-pad">
                                <header><h3 class="text-uppercase tm-article-title-2">The 5 Best Places to visit in
                                        Winter</h3></header>
                                <p>Cold weather is toxic stay safe </p>
                                <a href="articles/cold_toxic" class="text-uppercase btn-primary tm-btn-primary">More
                                    Info.</a>
                            </div>
                        </article>
                        <article class="tm-bg-white mr-2 tm-carousel-item">
                            <img src="img/img-02.jpg" alt="Image" class="img-fluid">
                            <div class="tm-article-pad">
                                <header><h3 class="text-uppercase tm-article-title-2">Absolutely nothing </h3></header>
                                <p>Really nothing</p>
                                <a href="articles/nothing" class="text-uppercase btn-primary tm-btn-primary">Detail
                                    Info.</a>
                            </div>
                        </article>
                        <article class="tm-bg-white mr-2 tm-carousel-item">
                            <img src="img/img-01.jpg" alt="Image" class="img-fluid">
                            <div class="tm-article-pad">
                                <header><h3 class="text-uppercase tm-article-title-2">Go to Casablanca </h3></header>
                                <p>Casablanca is a beautifull city go for it </p>
                                <a href="offers/casablanca" class="text-uppercase btn-primary tm-btn-primary">Read
                                    More</a>
                            </div>
                        </article>
                        <article class="tm-bg-white tm-carousel-item">
                            <img src="img/img-02.jpg" alt="Image" class="img-fluid">
                            <div class="tm-article-pad">
                                <header><h3 class="text-uppercase tm-article-title-2">Visit Tetouan</h3></header>
                                <p>Now for a limited time get 200%</p>
                                <a href="offers/tetouan" class="text-uppercase btn-primary tm-btn-primary">More
                                    Details</a>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-recommended-container">
                    <div class="tm-bg-white">
                        <div class="tm-bg-primary tm-sidebar-pad">
                            <h3 class="tm-color-white tm-sidebar-title">Recommended Places</h3>
                            <p class="tm-color-white tm-margin-b-0 tm-font-light">Take our suggestion and go to hell</p>
                        </div>
                        <div class="tm-sidebar-pad-2">
                            <a href="offers/Europe" class="media tm-media tm-recommended-item">
                                <img src="img/tn-img-01.jpg" alt="Image">
                                <div class="media-body tm-media-body tm-bg-gray">
                                    <h4 class="text-uppercase tm-font-semibold tm-sidebar-item-title">Europe</h4>
                                </div>
                            </a>
                            <a href="offers/Asia" class="media tm-media tm-recommended-item">
                                <img src="img/tn-img-02.jpg" alt="Image">
                                <div class="media-body tm-media-body tm-bg-gray">
                                    <h4 class="text-uppercase tm-font-semibold tm-sidebar-item-title">Asia</h4>
                                </div>
                            </a>
                            <a href="offers/Africa" class="media tm-media tm-recommended-item">
                                <img src="img/tn-img-03.jpg" alt="Image">
                                <div class="media-body tm-media-body tm-bg-gray">
                                    <h4 class="text-uppercase tm-font-semibold tm-sidebar-item-title">Africa</h4>
                                </div>
                            </a>
                            <a href="offers/Sout_America" class="media tm-media tm-recommended-item">
                                <img src="img/tn-img-04.jpg" alt="Image">
                                <div class="media-body tm-media-body tm-bg-gray">
                                    <h4 class="text-uppercase tm-font-semibold tm-sidebar-item-title">South America</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
