@extends('layouts.main')
@section('title', 'found')
@section('main-content')


<div class="root"
  style="margin-top: 200px"
 >
@foreach  ($form_data   as $d)
    <div class="col-lg-8  ">
      <!-- List group-->
      <ul class="list-group shadow">
        <!-- list group item-->
        <li class="list-group-item">
          <!-- Custom content-->
          <div class="media align-items-lg-center flex-column flex-lg-row p-3">
            <div class="media-body order-2 order-lg-1">
              <h5 class="mt-0 font-weight-bold mb-2">{{ $d['name'] }}</h5>
              <p class="font-italic text-muted mb-0 small"> {{$d['desc']}}</p>
              <div class="d-flex align-items-center justify-content-between mt-1">
                <h6 class="font-weight-bold my-2">{{ $d['price'] }}</h6>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                </ul>
              </div>
            </div><img src="https://bootstrapious.com/i/snippets/sn-cards/shoes-1_gthops.jpg" alt="Generic placeholder image" class="ml-lg-5 order-1 order-lg-2" width="200">
          </div>
          <!-- End -->
        </li>
      </ul>
      <!-- End -->
    </div>
@endforeach
</div>
