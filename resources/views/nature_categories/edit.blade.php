@extends('app')
@section('content')

<style>
.form-control{
 font-family:Garamond;
 font-size: 16px;
}
.text{
    font-family:Garamond;
    font-size: 18px;
}
.h2{
    font-family:Garamond;
    font-size: 40px;
}
}
    </style>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="h2"><a class="btn btn-outline-info" href="{{ route('nature_categories.index') }}"><i class="fas fa-arrow-left"></i></a><span class="ml-5">Edit</span></h2>
            </div>
        
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('nature_categories.update',$nature_category->id) }}" method="POST">
    @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-5">
                <div class="form-group" style="margin-left:100px">
                    <strong class= "text">Nature category:</strong>
                    <input type="text" style="margin-top:7px" name="nature_category_name" value="{{ $nature_category->nature_category_name }}" class="form-control" placeholder="Nature category">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button class="btn btn-outline-info" id="menu-toggle">Submit</button>
            </div>
        </div>
    </form>
    </form>
@endsection