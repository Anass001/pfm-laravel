@extends('admin.main')

@section('title','users list')
@section('logged_in','makarov')
@section('main-content')
 <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="home" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center" scope="col">Date</th>
                                        <th scope="col">first name</th>
                                        <th scope="col">last name</th>
                                        <th scope="col">email</th>
                                        <th scope="col">dateOfBirth</th>
                                        <th scope="col">photoUrl</th>
                                        <th scope="col">zipCode</th>
                                        <th scope="col">city</th>
                                        <th scope="col">country</th>
                                        <th class="text-center" scope="col">isAdmin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $d)
                                    <tr class="inner-box">
                                        <th scope="row">
                                            <div>
                                                {{ $d['date'] }}
                                            </div>
                                        </th>
                                        <td>
                                            <div>
                                                {{ $d['firstName'] }}
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                {{ $d['lastName'] }}
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                 {{ $d['email'] }}
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                {{ $d['dateOfBirth'] }}
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                {{ $d['photoUrl'] }}
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                {{ $d['zipCode'] }}
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                {{ $d['city']}}
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                {{ $d['country'] }}
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                {{ (bool) $d['isAdmin'] }}
                                            </div>
                                        </td>
                                        <td>
                                            <a href="edit/{{ $d['id'] }}">edit</a>
                                            <a href="delete/{{ $d['id'] }}">delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
 </div>



@endsection
