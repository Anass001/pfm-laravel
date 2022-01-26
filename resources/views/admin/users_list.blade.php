@extends('admin.main')

@section('title','users list')

@section('main-content')
 <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="home" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center" scope="col">Date</th>
                                        <th scope="col">Speakers</th>
                                        <th scope="col">Session</th>
                                        <th scope="col">Venue</th>
                                        <th class="text-center" scope="col">Venue</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="inner-box">
                                        <th scope="row">
                                            <div class="event-date">
                                                <span>16</span>
                                                <p>Novembar</p>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="event-img">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="event-wrap">
                                                <h3><a href="#">Harman Kardon</a></h3>
                                                <div class="meta">
                                                    <div class="organizers">
                                                        <a href="#">Aslan Lingker</a>
                                                    </div>
                                                    <div class="categories">
                                                        <a href="#">Inspire</a>
                                                    </div>
                                                    <div class="time">
                                                        <span>05:35 AM - 08:00 AM 2h 25'</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="r-no">
                                                <span>Room B3</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="primary-btn">
                                                <a class="btn btn-primary" href="#">Read More</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
 </div>



@endsection
