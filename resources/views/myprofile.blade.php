@extends('index')
@section('konten')

<body>
    <div class="container-fluid" style="padding: 0">
        <div class="jumbotron blue lighten-1">
            <div class="col s12 m6">
                <div class="blue lighten-1">
                    <div id="profile-card" class="card-content white-text">
                        @if ($me[0] -> avatar != null)
                        <a class="d-flex justify-content-center modal-trigger " href="#modal1"><img
                                src="{{ asset($me[0] -> avatar) }}" class="rounded-circle img-2 col-" alt="" srcset=""></a>
                        @else
                        <a class="d-flex justify-content-center modal-trigger" href="#modal1"><img
                                src="/images/profile.png" class="rounded-circle img-2 col-" alt="" srcset=""></a>
                        @endif

                        <!-- Modal Structure -->
                        <div id="modal1" class="modal bottom-sheet">
                            <form id="form" action="myprofile/uploadphoto" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="button" id="file-trigger"
                                    class="modal-content waves-effect waves-blue btn-flat justify-content-center"
                                    value="Ganti Foto">
                                <input name="file" id="file-select" type="file" value="Ambil dari Galeri"
                                    class="hide modal-content waves-effect waves-blue btn-flat justify-content-center">
                            </form>
                            <form action="myprofile/deletephoto" method="get" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="submit" value="Hapus Foto"
                                    class="red lighten-1 modal-content waves-effect waves-blue btn-flat justify-content-center">
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
                @if ($me[0] -> avatar != null)
                <img class="circle img-1" src="{{ asset($me[0] -> avatar) }}">
                @else
                <img class="circle img-1" src="/images/profile.png">
                @endif

                <div class="col">
                    <h4>{{$i -> title}}</h4>
                    <p>{{$i -> message}}</p>
                    <img class="img-3" src="{{ asset($i -> images) }}" alt="">
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

        document.getElementById("file-select").onchange = function () {
            document.getElementById("form").submit();
        };

        $('#file-trigger').click(function (e) {
            $('#file-select').click();
        });

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
@endsection
