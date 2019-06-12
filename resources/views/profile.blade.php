<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    {{-- Bootstrap core CSS --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Look! A gorgerous person</title>
</head>

<body>
    <nav class="indigo">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo"></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li id="search-btn"><a href="#search"><i class="material-icons">search</i></a></li>
                <li><a href="">Home</a></li>
                <li><a href="">Profile</a></li>
            </ul>
        </div>
    </nav>
    <div class="col" style="padding: 0">
        <div class="row">
            <div class="col">
                <div class="jumbotron blue lighten-1">
                    <div id="profile-card" class="white-text">
                        <a class="d-flex justify-content-center modal-trigger" href="#modal1"><img src="{{asset($ava[0] -> avatar)}}"
                            class="rounded-circle col-" alt="" srcset=""></a>
                        <h3 class="row justify-content-center">{{ $userposts[0] -> user }}</h3>
                    </div>
                    <div class="card-action white-text">
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <h2>Recent Post</h2>
        </div>
        <div class="col"></div>
            @foreach ($userposts as $i)
                <div>
                    <div class="col">
                    <a href=""><img src="{{asset($ava[0] -> avatar)}}" class="rounded-circle col-" alt=""
                                    srcset=""></a>
                    </div>
                    <div class="col">
                        <h5><a href="../post/{{$i -> id}}">{{ $i -> title }}</a></h5>
                        <p>{{ $i -> message }}</p>
                        <a href="../post/{{$i -> id}}"><img src="{{asset($i -> images)}}" alt=""></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
