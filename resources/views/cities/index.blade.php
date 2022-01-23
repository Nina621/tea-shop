@extends('app')
@section('content')
<table class = "table table-light table-striped">
    <tr class= "table-primary">
        <th>Id</th>
        <th>City name</th>
        <th>Country</th>
        <th>Actions</th>
    </tr>

    @foreach($cities as $city)
        <tr>
            <td>{{ $city->id }}</td>
            <td>{{ $city->city_name }}</td>
            <td>{{ $city->country->country_name ?? ''}}</td>
            <td>
                <a  href="{{ route('cities.edit',$city->id) }}" class="btn btn-outline-primary">Edit</a>
                <a class="btn btn-outline-danger" href="{{ route('cities.destroy', ['city' => $city->id]) }}">Delete</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection('content')