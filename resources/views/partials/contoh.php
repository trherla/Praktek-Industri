
@section('navbar')
	    <!--navbar -->
    <nav class="navbar navbar-toggleable-sm fixed-top navbar-light hidden-sm-down " style="background:#fafafa;">
      <div class='container'>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mr-auto" id="navbarSupportedContent">
          <ul class="navbar-nav" id='nav'>
          	@foreach($info as $k => $v)
            <li class="nav-item mr-2"><a class="nav-link font2 text-lg" href="#v">{{$v}}</a></li>
          	@endforeach
            <!-- <li class="nav-item mr-2"><a class="nav-link font2 text-lg" href="#rooms">{{$navbar['rooms']}}</a></li>
            <li class="nav-item mr-2"><a class="nav-link font2 text-lg" href="#restaurant">{{$navbar['resto']}}</a></li>
            <li class="nav-item mr-2"><a class="nav-link font2 text-lg" href="#hall">{{$navbar['hm']}}</a></li>
            <li class="nav-item mr-2"><a class="font2 btn btn-primary text-lg mt-2 align-self-end" href="#booking">{{$navbar['book']}} </a></li> -->
          </ul>
        </div>
      </div>
    </nav>
@endsection
<!-- @include('partials/footer')
@yield('nama_hotel')
@yield('alamat_hotel')

@endsection

@section('content')
  <p>Coba Section</p>
@endsection -->