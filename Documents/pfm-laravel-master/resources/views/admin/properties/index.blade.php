@extends('admin.main')

@section('title','properties')

@section('main-content')

    <div class="card m-4">
        <div class="card-header">
            <i class="fas fa-hotel"></i>
            properties
        </div>
        <div class="card-body">
            <button style="float: right;" class="btn btn-primary mb-3 ms-3">
                <a href="{{ route('createProperty') }}" class="text-decoration-none text-white" target="_self">
                    <i class="fas fa-plus me-2"></i>Add Property
                </a>
            </button>

            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>Property ID</th>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Address</th>
                    <th>Rating</th>
                </tr>
                </thead>
                <tbody>
                @foreach($properties as $property)
                    <tr>
                        <td>{{ $property->id }}</td>
                        <td>{{ $property->title }}</td>
                        <td>{{ $property->propertyType->description }}</td>
                        <td>{{ $property->address }}, {{ $property->zip_code }} {{ $property->city }}
                            , {{ $property->country }}</td>
                        <td>{{ $property->rating }}</td>
                        <td class="d-flex justify-content-center">
                            <form method="post" action="{{route('editProperty', ['id' => $property->id])}}">
                                @csrf
                                <button class="btn" type="submit">
                                    <i class="fas fa-pen text-black me-2"></i>
                                </button>
                            </form>
                            <form method="post" action="{{route('deleteProperty', ['id' => $property->id])}}">
                                @csrf
                                <button class="btn" type="submit">
                                    <i class="fas fa-trash-alt text-danger"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
