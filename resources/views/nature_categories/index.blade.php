@extends('app')
@section('content')
<table class = "table table-light table-striped ">
    <tr table = "table-primary">
        <th>Id</th>
        <th>Nature categories</th>
        <th>Actions</th>
    </tr>

    @foreach($nature_categories as $nature_category)
        <tr>
            <td>{{ $nature_category->id }}</td>
            <td>{{ $nature_category->nature_category_name }}</td>
            <td>
                <a  href="{{ route('nature_categories.edit',$nature_category->id) }}" class="btn btn-outline-primary">Edit</a>
                <a class="btn btn-outline-danger" href="{{ route('nature_categories.destroy', ['nature_category' => $nature_category->id]) }}">Delete</a>
            </td>       
        </tr>
    @endforeach
</table>
@endsection('content')