@extends('app')
@section('content')
<table class = "table table-light table-striped">
    <tr class = "table-primary">
        <th>Id</th>
        <th>Country name</th>
        <th>Actions</th>
    </tr>

    @foreach($countries as $country)
        <tr>
            <td>{{ $country->id }}</td>
            <td>{{ $country->country_name }}</td>
            <td>
            <a  href="{{ route('countries.edit',$country->id) }}" class="btn btn-outline-primary">Edit</a>
            <a class="btn btn-outline-danger" href="{{ route('countries.destroy', ['country' => $country->id]) }}">Delete</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection('content')