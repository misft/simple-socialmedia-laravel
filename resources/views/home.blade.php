@extends('index')
@section('konten')

<body>
    <div class="container-fluid">
        <div id="wrapper-row" class="row">
            <article class="col">
                <form action="" method="post"></form>
                <form action="home/post" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-2 mt-1">
                            @if ($current[0] -> avatar != null)
                                <a href="user"><img class="img-1 rounded-circle" src="{{ asset($current[0] -> avatar)}}" class="rounded-circle" alt=""
                                    srcset=""></a>
                            @else
                                <a href="myprofile"><img class="img-1" src="../images/profile.png" class="rounded-circle col-"
                                    alt="" srcset=""></a>
                            @endif
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
                @foreach ($posts as $i=>$x)
                <article class="row">
                    <div class="col-2">
                        @if ($x -> avatar != null)
                            <a href="profile/{{$x -> user_id}}"><img src="{{asset($x -> avatar)}}" class="img-1 rounded-circle col-"
                                alt="" srcset=""></a>
                        @else
                            <a href="profile/{{$x -> user_id}}"><img src="../images/profile.png" class="img-1 rounded-circle col-"
                                alt="" srcset=""></a>
                        @endif  
                    </div>
                    <div class="col-10">
                        <h5><a class="flow-text" href="post/{{ $x -> post_id }}">{{ $x -> title }}</a></h5>
                        <p class="flow-text">{{ $x -> message }}</p>
                        @if ($x->images != null)
                        <a href="post/{{$x -> post_id}}"><img style="width: 60%; height: auto; object-fit: cover"
                            src="{{$x -> images}}" alt="" srcset=""></a>
                        @else
                        
                        @endif
                        {{-- <a href="post/{{$x -> post_id}}" class="btn">
                            <p><i class="material-icons">comment</i></p>
                        </a> --}}
                        <p><a class="flow-text" href="profile/{{ $x -> user_id }}">{{ $x -> name}}</a></p>
                    </div>
                </article>
                @endforeach
        </div>
        {{ $posts -> links() }}
    </div>
    </section>
    </div>
    </div>
</body>

@endsection
