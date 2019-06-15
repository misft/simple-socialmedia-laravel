<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {{-- Bootstrap core CSS --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<nav class="indigo">
    <div class="nav-wrapper">
        <a href="#" class="brand-logo"></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li id="search-btn"><a href="#search"><i class="material-icons">search</i></a></li>
            <li><a href="home">Home</a></li>
            <li><a href="">Profile</a></li>
            <li><a href="logout">Log out</a></li>
        </ul>
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>
<ul id="slide-out" class="sidenav">
    <li><a class="waves-effect" href="home"><i class="material-icons">home</i>Home</a></li>
    <li><a class="waves-effect" href="myprofile"><i class="material-icons">account_circle</i>Profile</a></li>
    <li><a class="fa waves-effect" href="{{ route('logout')}}"><i class="material-icons">exit_to_app</i>Log
            out</a></li>
</ul>

@yield('konten')

</html>
