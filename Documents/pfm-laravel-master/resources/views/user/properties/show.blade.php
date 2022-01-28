@extends('user.main')

@section('title','Home')

@section('styles')
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        .btn.btn-outline-primary {
            background-color: #007bff;
            color: #fff;
            border: none;

        }

        .btn.btn-outline-primary:hover {
            background-color: #1674e5;
            color: #fff;
            border: none;
        }

        body {
            height: 1000px;
            background-color: #faf8f8;
        }

        .carousel-item {
            height: 26rem;
            background: #777;
            color: white;
            position: relative;
        }

        ul {
            list-style: none;
        }

        li span {
            font-size: 14px;
        }

        .fas.fa-star,
        .far.fa-star,
        .fas.fa-star-half-alt {
            color: orange;
        }
    </style>

@endsection

@section('main-content')
    <div class="container" style="min-height: 100vh">
        <div class="container my-3 ps-0">
            <h1 class="m-0">{{$property->title}}</h1>
            <div class="d-flex">
                {{-- rating            --}}
                <div class="my-auto me-3">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <i class="far fa-star"></i>
                </div>
                <p class="text-muted text-center m-0"
                   style="font-weight: 400; padding-left:10px;">{{$property->rating}}</p>
            </div>
            <i class="fas fa-map-marked-alt text-muted" style="font-size:20px;"></i>&nbsp;
            <span
                class="text-muted">{{$property->address}}, {{$property->zip_code}} {{$property->city}}, {{$property->country}}</span>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($property->images as $key => $image)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}"
                        @if($key == 0) class="active" @endif></li>
                @endforeach
            </ol>
            <div class="carousel-inner" style="height: 400px;">
                @foreach($property->images as $key => $image)
                    <div class="carousel-item @if($key == 0) active @endif">
                        <img class="d-block w-100" src="{{$image->image_url}}" alt="First slide">
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="row pt-4">
            <div class="col-md-8">
                <p>{{ $property->description }}</p>
            </div>
            <div class="col-md-4">
                <h5>Availability</h5>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div class="container border border-dark-50 p-3" style="background-color:#fff;">
                    <h5 class="mb-3">info</h5>
                    <ul class="px-0">
                        <div class="container mb-3 p-0">
                            <li>
                                <i class="far fa-calendar-check my-auto"></i>
                                &nbsp;
                                <span>Free cancellation</span>
                            </li>
                        </div>
                        <div class="container mb-4 p-0">
                            <li>
                                <i class="far fa-clock me-3 fs-5 my-auto"></i>
                                &nbsp;
                                <span>Duration 40 minutes</span>
                            </li>
                        </div>
                    </ul>
                    <div class="d-flex">
                        <div class="my-auto pr-0" style="width:300px;">
                            <p class="m-0 text-black-50" style="font-size:12px;">From</p>
                            <p class="fw-bold mb-0 h-50">MAD 163.99</p>
                        </div>
                        <button class="btn btn-outline-primary fw-bold my-auto rounded-0"
                                style="width:90px;height:36px;">Reserve
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
    <script src="js/popper.min.js"></script>                    <!-- https://popper.js.org/ -->
    <script src="js/bootstrap.min.js"></script>

@endsection
