<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}} ">
    <link rel="icon" type="image/png" href="/images/logo.png">

    <title>{{$info['nama']}} Hotel</title>
  </head>
  <body>
    
    @include('partials/navbar')
   
    @component('comp.alert')
    @endcomponent

    @include('partials.content')

    @include('partials/footer')
    
 
	<script type="text/javascript" src="{{mix('js/app.js')}} "></script>
 
  </body>
</html>