@extends('index')

<body class="container-fluid">
    @section('konten')
    <div class="row">
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
                            <a href="post/{{$postid[0] -> id}}"><img style="width: 60%; height: auto; object-fit: cover"
                                    src="{{$i -> images}}" alt="" srcset=""></a>
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
    @endsection

    <script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
    </script>
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
