@extends('app')
@section('content')
<table class = "table table-light table-striped">
    <tr class= "table-primary">
        <th>Id</th>
        <th>Flavor name</th>
        <th>Action</th>
    </tr>

    @foreach($tea_flavors as $tea_flavor)
        <tr>
            <td>{{ $tea_flavor->id }}</td>
            <td>{{ $tea_flavor->flavor_name }}</td>
            <td>
                <a  href="{{ route('tea_flavors.edit',$tea_flavor->id) }}" class="btn btn-outline-primary">Edit</a>
                <a class="btn btn-outline-danger" href="{{ route('tea_flavors.destroy', ['tea_flavor' => $tea_flavor->id]) }}">Delete</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection('content')