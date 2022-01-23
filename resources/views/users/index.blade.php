@extends('app')
@section('content')
<table class="table table-light table-striped">
    <tr class="table-primary">
        <th>Id</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>City</th>
        <th>Actions</th>
    </tr>

    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->contact }}</td>
            <td>{{ $user->city->city_name ?? '--nema--' }}</td>
            <td>
                <a  href="{{ route('users.edit',$user->id) }}" class="btn btn-outline-primary">Edit</a>
                <a class="btn btn-outline-danger" href="{{ route('users.destroy', ['user' => $user->id]) }}">Delete</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection('content')