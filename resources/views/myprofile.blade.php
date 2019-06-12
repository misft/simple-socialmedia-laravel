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
    <link rel="stylesheet" href="./css/style.css">
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
                <li><a href="home">Home</a></li>
                <li><a href="">Profile</a></li>
            </ul>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <ul id="slide-out" class="sidenav">
        <li><a class="waves-effect" href="#!">Search</a></li>
        <li><a class="waves-effect" href="#!">Home</a></li>
        <li><a class="waves-effect" href="#!">Profile</a></li>
        {{-- <li>
            <div class="user-view">
                <div class="background">
                    <img src="images/office.jpg">
                </div>
                <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
                <a href="#name"><span class="white-text name">John Doe</span></a>
                <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
            </div>
        </li>
        <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
        <li><a href="#!">Second Link</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a class="subheader">Subheader</a></li> --}}
    </ul>   
    <div class="col" style="padding: 0">
        <div class="jumbotron blue lighten-1">
            <div class="col s12 m6">
                <div class="blue lighten-1">
                    <div id="profile-card" class="card-content white-text">
                        <!-- Modal Trigger -->
                    <a class="d-flex justify-content-center modal-trigger" href="#modal1"><img src="{{ asset($me[0] -> avatar) }}"
                                class="rounded-circle col-" alt="" srcset=""></a>

                        <!-- Modal Structure -->
                        <div id="modal1" class="modal bottom-sheet">
                            <button type="submit"
                                class="modal-content waves-effect waves-blue btn-flat justify-content-center">Lihat
                                foto</button>
                            <form id="form" action="myprofile/uploadphoto" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input name="file" id="file" type="file" value="Ambil dari Galeri"
                                    class="modal-content waves-effect waves-blue btn-flat justify-content-center">
                            </form>
                            <form action="myprofile/deletephoto" method="get" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="submit" value="Hapus Foto"
                                class="modal-content waves-effect waves-blue btn-flat justify-content-center">
                            </form>
                        </div>
                        <h3 class="row mt-2 justify-content-center">{{ $me[0] -> name }}</h3>
                        {{-- <p class="row mt-2 justify-content-center">{{ $me[0] -> status }}</p> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <h2>Recent Post</h2>
        </div>
        <br>
        <div class="col">
            @foreach ($posts as $i)
            <div class="row">
                <img class="circle" style="" src="{{ asset($me[0] -> avatar) }}">
                <div class="col">
                    <h4>{{$i -> title}}</h4>
                    <p>{{$i -> message}}</p>
                    <img style="width: 75%; height: auto; object-fit: cover" src="{{ asset($i -> images) }}" alt="">
                    </div>
            </div>
            @endforeach
        </div>
    </div>

    <script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function () {
            $('.modal').modal();
        });



        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.fixed-action-btn');
            var instances = M.FloatingActionButton.init(elems, options);
        });

        document.getElementById("file").onchange = function () {
            document.getElementById("form").submit();
        };

        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function () {
            $('.sidenav').sidenav();
        });
        // Or with jQuery

    </script>
</body>

</html>
