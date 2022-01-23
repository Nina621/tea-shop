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
                <h2 class="h2"><a class="btn btn-outline-info" href="{{ route('users.index') }}"><i class="fas fa-arrow-left"></i></a><span class="ml-5">Edit</span></h2>
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
    <form action="{{ route('users.update',$user->id) }}" method="POST">
    @csrf
        @method('PUT')
         <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3">
                <div class="form-group" style="margin-left:100px">
                    <strong class= "text">First name:</strong>
                    <input type="text" style="margin-top:7px" name="first_name" value="{{ $user->first_name }}" class="form-control" placeholder=" First name">
                </div>
            </div>
            <div class="row">
                 <div class="col-xs-3 col-sm-3 col-md-3">
                     <div class="form-group"style="margin-left:100px">
                            <strong class= "text">Last name:</strong>
                             <input type="text" name="last_name" value="{{ $user->last_name }}"
                              class="form-control" style="margin-top:7px"placeholder="Last name">
                        </div>
                     </div>

                     <div class="row">
                        <div class="col-xs-3 col-sm-3 col-md-4">
                             <div class="form-group"style="margin-left:100px">
                                <strong class= "text">Email:</strong>
                                <input type="text" name="email" value="{{ $user->email }}"
                                class="form-control" style="margin-top:5px" placeholder="Email">
                            </div>
                     </div>

            <div class="row">
                 <div class="col-xs-3 col-sm-3 col-md-3">
                    <div class="form-group" style="margin-left:100px">
                        <strong class= "text">Contact:</strong>
                        <input type="text" name="contact" value="{{ $user->contact }}"
                        class="form-control" style="margin-top:7px" placeholder="Contact">
                 </div>
            </div>

            <div class="row">
                 <div class="col-xs-3 col-sm-3 col-md-3">
                     <div class="form-group" style="margin-left:100px">
                     <strong class= "text">City name:</strong>
                    <input type="text" name="city_id" value="{{ $user->city_id }}"
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