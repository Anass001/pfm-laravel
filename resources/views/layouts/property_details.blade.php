@extends('layouts.main')
@section('title', '' . $property['title'])

    @section('main-content')
        <div class="container" style="margin-top: 100px">
            <div class="pics" style="display:flex;justify-content:center;width: 80vw;gap: 70px">
                <div class="left" style="width: 400px; margin-top: 70px">
                    <form action="{{route('showResults')}}" method="POST" style="width: 230px">
                        @csrf
                        <input type="text" name="destination" class="form-control form-group" placeholder="Type your destination" style="display:block">
                        <input type="date" name="check-in" class="form-control form-group" placeholder="Check in"  style="display:block">
                        <input type="date" name="check-out" class="form-control form-group" placeholder="Check out"  style="display:block">
                        <input type="number" name="Adults" class="form-control form-group" placeholder="Adults"  style="display:block">
                        <input type="number" name="Room" class="form-control form-group" placeholder="Rooms"  style="display:block">
                        <button type="submit" class="btn btn-primary" style="width: 100%">Search </button>
                    </form>
                </div>
                <div style="height: 100px">
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
            <div class="pics2" style="display:flex;justify-content:center;width: 80vw;gap: 70px; margin-top: 100px">
                <div class="left" style="width: 70%">
                    <h3>Get the celebrity treatment with world-class service at Hilton Tanger City Center Hotel & Residences </h3>
                    <p style="word-wrap: word-break;margin-top: 50px">

                        Offering a terrace and views of the city, Hilton Tanger City Center Hotel & Residences is located in Tangier in the Tanger-Tetouan Region. Guests can enjoy the on-site bar.

                        The rooms include a TV. Certain rooms include a seating area where you can relax. You will find a kettle in the room. Each room comes with a private bathroom.

                        There is a 24-hour front desk, a business centre, concierge service and shops at the property.

                        Cap Malabata is 6 km away from Hilton Tanger City Center Hotel & Residences. Tangier Ibn Battouta Airport is 13 km from the property.

                        Couples particularly like the location — they rated it 9.1 for a two-person trip.

                        Hilton Tanger City Center Hotel & Residences has been welcoming Booking.com guests since 24 May 2017.
                        Hotel chain/brand: Hilton Hotels & Resorts
                    </p>
                </div>
                <div class="right" style="width: 30%">
                    <div class="d-flex justify-content-center">
                        <div class="content text-center">
                            <div class="ratings"> <span class="product-rating">4.6</span><span>/5</span>
                                <div class="stars"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                <div class="rating-text"> <span>46 ratings & 15 reviews</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pics3"  style="display:flex;justify-content:center;width: 80vw;gap: 70px;">
                <div class="left" style="width: 70%">
                </div>
                <div class="right" style="width: 30%;margin-top: -40px">
                    <div class="container justify-content-center mt-5 border-left border-right" style="margin-top: 10px !important">
                        <div class="d-flex justify-content-center pt-3 pb-2">
                            <form action="/commetn" method="POST">
                                <label for="comment">@yield('logged_in_user')</label>
                                <input type="text" name="comment" placeholder="+ Add a note" class="form-control addtxt">
                                <button type="submit" class="btn btn-primary" style="width: 100%;margin-top: 10px">submit comment</button>
                            </form>
                        </div>

                        @foreach ($comments as $c)
                        <div class="d-flex justify-content-center py-2">
                            <div class="second py-2 px-2"> <span class="text1">{{$c['content']}}</span>
                                <div class="d-flex justify-content-between py-1 pt-2">
                                    <div><img src="https://i.imgur.com/AgAC1Is.jpg" width="18"><span class="text2">@yield('logged_in')</span></div>
                                    <div><span class="text3">Upvote?</span><span class="thumbup"><i class="fa fa-thumbs-o-up"></i></span><span class="text4">3</span></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
         @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

         body {
             margin: 0;
             padding: 0;
             font-family: 'Open Sans', serif;
             background: #eee
         }

         .content {
             width: 420px;
             margin-top: 10px
         }

         .ratings {
             background-color: #fff;
             padding: 20px;
             border: 1px solid rgba(0, 0, 0, 0.1);
             box-shadow: 0px 10px 10px #E0E0E0
         }

         .product-rating {
             font-size: 50px
         }

         .stars i {
             font-size: 18px;
             color: #003580;
         }

         .rating-text {
             margin-top: 10px
         }
         .addtxt {
             padding-top: 10px;
             padding-bottom: 10px;
             text-align: center;
             font-size: 13px;
             width: 350px;
             background-color: #e5e8ed;
             font-weight: 500
         }

         .form-control: focus {
             color: #000
         }

         .second {
             width: 350px;
             background-color: white;
             border-radius: 4px;
             box-shadow: 10px 10px 5px #aaaaaa
         }

         .text1 {
             font-size: 13px;
             font-weight: 500;
             color: #56575b
         }

         .text2 {
             font-size: 13px;
             font-weight: 500;
             margin-left: 6px;
             color: #56575b
         }

         .text3 {
             font-size: 13px;
             font-weight: 500;
             margin-right: 4px;
             color: #828386
         }

         .text3o {
             color: #00a5f4
         }

         .text4 {
             font-size: 13px;
             font-weight: 500;
             color: #828386
         }

         .text4i {
             color: #00a5f4
         }

         .text4o {
             color: white
         }

         .thumbup {
             font-size: 13px;
             font-weight: 500;
             margin-right: 5px
         }

         .thumbupo {
             color: #17a2b8
         }
        </style>
        @endsection
