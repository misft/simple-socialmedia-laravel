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

<body class="container-fluid">
    <div class="row">
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
            {{-- <li><a class="waves-effect" href="#search"><i class="material-icons">search</i>Search</a></li> --}}
            <li><a class="waves-effect" href="home"><i class="material-icons">home</i>Home</a></li>
            <li><a class="waves-effect" href="myprofile"><i class="material-icons">account_circle</i>Profile</a></li>
            <li><a class="fa waves-effect" href="{{ route('logout')}}"><i class="material-icons">exit_to_app</i>Log
                    out</a></li>
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
        <div class="container-fluid">
            <div id="wrapper-row" class="row">
                <article class="col">
                    <form action="" method="post"></form>
                    <form action="home/post" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-2 mt-1">
                                <a href="user"><img src="{{ asset($current[0] -> avatar)}}" class="rounded-circle"
                                        alt="" srcset=""></a>
                            </div>
                            <div class="col-10">
                                <label for="title">Title :</label>
                                <input type="text" name="title">
                                <label for="message">Message :</label>
                                <textarea name="message" class="materialize-textarea"></textarea>
                                <div class="file-field input-field">
                                    <div class="btn blue darken-1 white-text">
                                        <span>File</span>
                                        <input type="file" name="file" multiple>
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                                <br>
                                <input class="btn blue darken-1 white-text" type="submit" value="Post">
                            </div>
                        </div>
                    </form>
                    @foreach ($posts as $i)
                    <article class="row">
                        <div class="col-2">
                            <a href="profile/{{$i->user_id}}"><img src="{{asset($i -> avatar)}}"
                                    class="rounded-circle col-" alt="" srcset=""></a>
                        </div>
                        <div class="col-10">
                        <h5><a class="flow-text" href="post/{{$postid[0] -> id}}">{{ $i -> title }}</a></h5>
                            <p class="flow-text">{{ $i -> message }}</p>
                        <a href="post/{{$postid[0] -> id}}"><img style="width: 60%; height: auto; object-fit: cover" src="{{$i -> images}}" alt=""
                            srcset=""></a>
                            <p><a class="flow-text" href="profile/{{ $i -> user_id }}">{{ $i -> name}}</a></p>
                        </div>
                    </article>
                    @endforeach
            </div>
            {{ $posts -> links() }}
        </div>
        </section>
    </div>
    </div>

    <aside>

    </aside>
    </div>

    <script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
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
