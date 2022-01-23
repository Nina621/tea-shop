@extends('app')
@section('content')
<table class= "table table-light table-striped">
    <tr class= "table-primary">
        <th>Id</th>
        <th>Tea name</th>
        <th>Tea flavor</th>
        <th>Price</th>
        <th>Description</th>
        <th>Nature category</th>
        <th>City</th>   
        <th>Actions</th>
    </tr>

    @foreach($teas as $tea)
        <tr>
            <td>{{ $tea->id }}</td>
            <td>{{ $tea->tea_name }}</td>
            <td>{{ $tea->teaFlavor->flavor_name ?? ''}}</td>
            <td>{{ $tea->price }}</td>
            <td>{{ $tea->description }}</td>
            <td>{{ $tea->natureCategory->nature_category_name ?? ''}}</td>
            <td>{{ $tea->city->city_name ?? '' }}</td>
            <td>
                <a href="{{ route('teas.edit',$tea->id) }}" class="btn btn-outline-primary">Edit</a>
                <a class="btn btn-outline-danger" href="{{ route('teas.destroy', ['tea' => $tea->id]) }}">Delete</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection('content')