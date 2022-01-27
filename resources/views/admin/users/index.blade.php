@extends('admin.main')

@section('title','users')

@section('main-content')

    <div class="card m-4">
        <div class="card-header">
            <i class="fas fa-users"></i>
            Users
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        @if($user->isAdmin == 0)
                            <td>Standard user</td>
                        @else
                            <td>Admin</td>
                        @endif
                        <td class="d-flex justify-content-center">
                            <form method="post" action="{{route('editUser', ['id' => $user->id])}}">
                                @csrf
                                <button class="btn" type="submit">
                                    <i class="fas fa-pen text-black me-2"></i>
                                </button>
                            </form>
                            <form method="post" action="{{route('deleteUser', ['id' => $user->id])}}">
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
