<!DOCTYPE html>
<html lang="en">
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
<body>
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
                <li><a class="waves-effect" href="/project/public/home"><i class="material-icons">home</i>Home</a></li>
                <li><a class="waves-effect" href="/project/public/myprofile"><i class="material-icons">account_circle</i>Profile</a></li>
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
            <div>
                <div class="col">
                    <div class="col">
                        <h2> {{ $load[0]->title }} </h2>
                        <a href="{{$load[0]->id}}/{{$load[0]-> images}}"><img style="width: 75%; height:auto;"src="{{ asset($load[0] -> images) }}" alt="" srcset=""></a>
                        <p>{{$load[0] ->message}}</p>
                    </div>
                    <div class="col">
                        <form action="commentpost" method="post">
                            <label for="comment">Comment</label>
                            <div class="row">
                                <textarea name="comment" class="materialize-textarea col-10" placeholder="Get a  lot of likes here"></textarea>
                                <input class="btn blue lighten-1 col white-text" type="submit" value="OK">
                            </div>           
                        </form>
                    </div>
                </div>
    
                <div class="col">
                    @foreach ($comments as $i)
                        <a href="../profile/{{$i -> user_id}}"><h5>{{ $i -> name}}</h5></a>
                        <p>{{$i -> comment}}</p>
                    @endforeach
                </div>
            </div>

            <script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
            </script>
            <img src="{{ $load[0] -> images }}" alt="" srcset="">


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

