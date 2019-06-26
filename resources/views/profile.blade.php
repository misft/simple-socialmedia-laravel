@extends('index')

@section('konten')

<body>
    <div class="col" style="padding: 0">
        <div class="jumbotron blue lighten-1">
            <div id="profile-card" class="white-text">
                @if ($ava[0] -> avatar != null)
                <a class="d-flex justify-content-center modal-trigger" href=""><img class="img-2 rounded-circle" src="{{asset($ava[0] -> avatar)}}"
                        class="rounded-circle col-" alt="" srcset=""></a>
                @else
                <a class="d-flex justify-content-center modal-trigger" href=""><img class="img-2 rounded-circle" src="../images/profile.png"
                        class="rounded-circle col-" alt="" srcset=""></a>
                @endif
                <h3 class="row justify-content-center">{{ $userposts[0] -> user }}</h3>
            </div>
        </div>
        <div class="col">
            <h2>Recent Post</h2>
        </div>
        <div class="col">
            @foreach ($userposts as $i)
            <div class="row">
                <div class="col-2">
                    @if ($ava[0] -> avatar != null)
                        <a href=""><img src="{{asset($ava[0] -> avatar)}}" class="img-1 rounded-circle col-" alt="" srcset=""></a>
                    @else
                        <a href=""><img src="/images/profile.png" class="img-1 rounded-circle col-" alt="" srcset=""></a>
                    @endif
                </div>
                <div class="col-8">
                    <h5><a href="/post/{{$i -> post_id}}">{{ $i -> title }}</a></h5>
                    <p>{{ $i -> message }}</p>
                    <a href="/post/{{$i -> post_id}}"><img src="{{asset($i -> images)}}" alt=""></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
@endsection
