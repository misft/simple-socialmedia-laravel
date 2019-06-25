@extends('index')

@section('konten')

<body>
    <div class="container-fluid">
        <div class="col">
            <div class="col">
                <h2> {{ $load[0]->title }} </h2>
                @if ($load[0]-> images != null)
                <a href="{{$load[0]->post_id}}/{{$load[0]-> images}}"><img style="width: 75%; height:auto;"
                        src="{{ asset($load[0] -> images) }}" alt="" srcset=""></a>
                @else
                <a href="{{$load[0]->post_id}}/{{$load[0]-> images}}"><img style="width: 75%; height:auto;"
                        src="../images/profile.png" alt="" srcset=""></a>
                @endif

                <p>{{$load[0] ->message}}</p>
            </div>
            <div class="col">
            <form action="/post/{{$load[0]->post_id}}/commentpost" method="post">
                    {{ csrf_field() }}
                    <label for="comment">Comment</label>
                    <div class="row">
                        <textarea name="comment" class="materialize-textarea col-10"
                            placeholder="Comments"></textarea>
                        <input class="btn blue lighten-1 col white-text" type="submit" value="OK">
                    </div>
                </form>
            </div>
        </div>

        <div class="col">

            @foreach ($comments as $i)
            @if ($i -> post_id == $load[0] -> post_id)
            <div class="row">
                <div class="col-3">
                    <a href=""><img class="img-1 rounded-circle" src="{{asset($i->avatar)}}" alt=""></a>
                </div>
                <div class="col">
                        <a href="../profile/{{$i -> user_id}}">
                            <h5>{{ $i -> name}}</h5>
                        </a>
                        <p>{{$i -> comment}}</p>
                </div>
            </div>
            @else

            @endif
            @endforeach
        </div>
    </div>
</body>

@endsection
