@extends('layouts.main')
@section('title', 'found')



@section('main-content')
    <div class="root" style=".css-xbcz3d {
            border: 1px solid rgb(242, 242, 242);
            border-radius: 2px;
            font-size: 12px;
            font-weight: normal;
            height: 236px;
            line-height: 18px;
            font-family: BlinkMacSystemFont, -apple-system, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            color: rgb(38, 38, 38);
            text-decoration: none;
    }

    .fas.fa-star,
    .far.fa-star,
    .fas.fa-star-half-alt {
    color: orange;
    }">
        {{--        <div class="results-container d-flex flex-column justify-content-center">--}}
        {{--      </div>--}}
        <div class="card mx-auto rounded-0" style="width:840px;height:236px;">
            <a href="#" class="css-xbcz3d">
                <div class="row m-2 p-2">
                    <div class="col-md-3 p-0">
                        <img src="images/pic2.jpg" style="object-fit:cover;
                        width:200px;
                        height:200px;
                        border: solid 1px #CCC;"/>
                    </div>

                    <div class="col-md-9 pe-3">
                        <div>
                            <h4 class="card-title mb-0 me-2">Card Title</h4>
                            <div class="my-2 ps-1 me-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                        <div class="position-absolute end-0 top-0 pt-3 pe-3 d-flex">
                            <p class="text-black fs-6 text-end me-2 my-auto"
                               style="line-height: 16px; font-weight: 450;">
                                Good
                                <br><span class="text-muted" style="font-size: 12px;font-weight:300;">263 reviews</span>
                            </p>
                            <div
                                style="background-color:#003580; height: 31px;width:30px;border-radius:5px 5px 5px 0px;padding-top:2px">
                                <p class="text-white text-center m-0 pt-1 fs-6" style="font-weight: 400;">8.5</p>
                            </div>
                        </div>
                        <p class=" text-black ps-1" style="line-height: 22px; font-size: 15px;padding-right:145px;">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Doloribus repellat esse quam labore porro eum molestias placeat
                            totam in ducimus.Doloribus repellat esse quam labore porro eum
                            molestias placeat.
                        </p>

                        <div class="position-absolute end-0 bottom-0 mb-4 me-3">
                            <p class="mb-0 text-muted position-absolute bottom-100 end-0" style="font-size:12px;">
                                From</p>
                            <p class="mb-3 text-black fs-5 text-end" style="font-weight: 450;">MAD 456.99</p>
                            <button class="btn btn btn-primary rounded-0" style="width: 160px; height:38px;">See
                                availability<i class="fas fa-angle-right fw-light ms-2 ps-1"></i></button>
                        </div>


                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
