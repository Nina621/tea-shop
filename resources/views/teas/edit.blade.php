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
                <h2 class="h2"><a class="btn btn-outline-info" href="{{ route('teas.index') }}"><i class="fas fa-arrow-left"></i></a><span class="ml-5">Edit</span></h2>
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
    <form action="{{ route('teas.update',$tea->id) }}" method="POST">
    @csrf
        @method('PUT')
         <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-5">
                <div class="form-group" style="margin-left:100px">
                    <strong class= "text">Tea name:</strong>
                    <input type="text" style="margin-top:7px" name="tea_name" value="{{ $tea->tea_name }}" class="form-control" placeholder="Tea name">
                </div>
            </div>
            <div class="row">
                 <div class="col-xs-3 col-sm-3 col-md-3">
                     <div class="form-group"style="margin-left:100px">
                            <strong class= "text">Tea flavor:</strong>
                             <input type="text" name="tea_flavor_id" value="{{ $tea->tea_flavor_id }}"
                              class="form-control" style="margin-top:7px"placeholder="Tea flavor">
                        </div>
                     </div>

                     <div class="row">
                        <div class="col-xs-3 col-sm-3 col-md-3">
                             <div class="form-group"style="margin-left:100px">
                                <strong class= "text">Price:</strong>
                                <input type="text" name="price" value="{{ $tea->price }}"
                                class="form-control" style="margin-top:5px" placeholder="Price">
                            </div>
                     </div>
    
            <div class="col-xs-12 col-sm-3 col-md-10">
                <div class="form-group" style="margin-left:100px">
                    <strong class= "text">Description:</strong>
                    <textarea class="form-control" style="margin-top:7px" name="description" placeholder="Description">{{ $tea->description }}</textarea>
                </div>
            </div>

            <div class="row">
                 <div class="col-xs-3 col-sm-3 col-md-3">
                    <div class="form-group" style="margin-left:100px">
                        <strong class= "text">Nature category:</strong>
                        <input type="text" name="nature_category_id" value="{{ $tea->nature_category_id }}"
                        class="form-control" style="margin-top:7px" placeholder="Nature category">
                 </div>
            </div>

            <div class="row">
                 <div class="col-xs-3 col-sm-3 col-md-3">
                     <div class="form-group" style="margin-left:100px">
                     <strong class= "text">City name:</strong>
                    <input type="text" name="city_id" value="{{ $tea->city_id }}"
                    class="form-control" style="margin-top:7px" placeholder="City name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button class="btn btn-outline-info" id="menu-toggle">Submit</button>
            </div>
        </div>
    </form>
    </form>
@endsection