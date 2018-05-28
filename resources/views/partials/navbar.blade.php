    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light " style="background:#fafafa;">
      <div class='container'>
        <a class='navbar-brand' href="#">
          <img src="/images/logo.png" style="width:5rem">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mr-auto navbar-brand navbar-text" id="navbarSupportedContent">
          <ul class="navbar-nav" id='nav'>
            @foreach($navbar as $a)
            <li class="nav-item mr-2"><a class="nav-link font2 text-lg" href="#{{$a}}">{{$a}}</a></li>
            @endforeach
          </ul>
        </div>
      </div>
    </nav>
<div class='fixed-navbar-spacer hidden-sm-down'></div>