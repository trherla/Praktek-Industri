<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <!-- <link rel="stylesheet" href="/css/app.css"> -->

    <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}} ">

    <script type="text/javascript" src="{{mix('js/app.js')}} "></script>

    
    <title>{{$info['nama']}} Hotel</title>
  </head>
  <body>
    
    @include('partials/navbar')


    {{-- part alert--}}
    @if(Session::has('after_save'))
      <div class="row">
        <div class="col-md-12 text-center">
            <div class="alert alert-dismissible alert-{{ Session::get('after_save.alert') }}">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{ Session::get('after_save.title') }}</strong>

              
              <br>{{ Session::get('after_save.text-1') }}<br> 
              <strong> {{ Session::get('after_save.text-2') }}</strong>
            </div>
        </div>
    </div>
    @endif
    {{-- end part alert--}}

    @yield('contents')
    @include('partials/footer')
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <script src="js/sweetalert.min.js"></script> -->
    
    

  </body>
</html>