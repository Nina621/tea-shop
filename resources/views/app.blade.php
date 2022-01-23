<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>{{ env('APP_NAME') }}</title>

    <!-- Icons-->
    <script src="https://kit.fontawesome.com/2cb01379c6.js" crossorigin="anonymous"></script>
     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
jQuery(document).ready(function($){
    $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    });
})
</script>
<style>
    body {
overflow-x: hidden;
}

#sidebar-wrapper {
min-height: 100vh;
margin-left: -15rem;
-webkit-transition: margin .25s ease-out;
-moz-transition: margin .25s ease-out;
-o-transition: margin .25s ease-out;
transition: margin .25s ease-out;
}

#sidebar-wrapper .sidebar-heading {
color:#809fff;
font-family:Garamond;
padding: 0.875rem 1.25rem;
font-size: 1.4rem;
}

#sidebar-wrapper .list-group {
width: 15rem;
}

#page-content-wrapper {
min-width: 100vw;
}

#wrapper.toggled #sidebar-wrapper {
margin-left: 0;
}

@media (min-width: 768px) {
#sidebar-wrapper {
    margin-left: 0;
}

#page-content-wrapper {
    min-width: 0;
    width: 100%;
}

#wrapper.toggled #sidebar-wrapper {
    margin-left: -15rem;
}
.list-group-item-action
{
    color:#CBC4C4;
    font-family:Garamond;
    font-size: 16px;

}
.dropdown-item{
  color:#809fff;
  font-family:Garamond;
  font-size: 16px;
}
}
</style>    
</head>

<body>

<div class="d-flex" id="wrapper">

<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
<div class="sidebar-heading"><i class="fab fa-slack fa-lg"></i><span class="ml-3"> ART OF TEA</span></div>
<div class="list-group list-group-flush mt-4">
    <a aria-current="page" href="{{ route('users.index') }}" class="list-group-item list-group-item-action bg-light"><i class="fas fa-users fa-1x fa-fw"> </i><span  class="ml-2">Users</span></a>
    <a aria-current="page" href="{{ route('countries.index') }}" class="list-group-item list-group-item-action bg-light"><i class="fas fa-globe-europe fa-1x"></i><span class="ml-2">Countries</span></a>
    <a aria-current="page" href="{{ route('cities.index') }}" class="list-group-item list-group-item-action bg-light"><i class="fas fa-city fa-1x"></i><span class="ml-2">Cities</span></a>
    <a aria-current="page" href="{{ route('teas.index') }}" class="list-group-item list-group-item-action bg-light"><i class="fas fa-mug-hot fa-1x"></i><span class="ml-2">Teas</span></a>
    <a aria-current="page" href="{{ route('nature_categories.index') }}" class="list-group-item list-group-item-action bg-light "><i class="fas fa-seedling fa-1x"></i><span class="ml-2">Nature categories</span></a>
    <a aria-current="page" href="{{ route('tea_flavors.index') }}" class="list-group-item list-group-item-action bg-light"><i class="fas fa-magic fa-1x"></i><span class="ml-2">Tea flavors</span></a>
</div>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">

<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <button class="btn btn-outline-info" id="menu-toggle"><i class="fa fa-bars"></i> <span class="ml-2">Menu</span></button>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active">
        <a class="nav-link" aria-current="page" href="{{ route('dashboard') }}"><i class="fas fa-home fa-lg"style="color:#809fff"></i><span class="ml-2"></span></a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle fa-lg"style="color:#809fff"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" aria-current="page" href="{{ route('auth.register') }}">Registration</a>
            <a class="dropdown-item"aria-current="page" href="{{ route('auth.logout') }}">Login</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" aria-current="page" href="{{ route('auth.logout') }}">Logout</a>
        </div>
        </li>
    </ul>
    </div>
</nav>

<div class="container-fluid mt-2">
    @yield('content')
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->
</body>
</html>