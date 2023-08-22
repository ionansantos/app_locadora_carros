<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Locamais Veiculos</title>
    {{-- <link href="/favicon.png" rel="icon"/> --}}

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <script src="https://kit.fontawesome.com/78ee0163db.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap.min.css')}}">
  
    {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @vite([
        'resources/js/app.js',
        'resources/css/app.css',
    ]) 
    @inertiaHead
  </head>
  <body>
    @inertia


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/bootstrap.bundle.min.js')}}"></script> 
    <script src="{{ asset('assets/js/jquery.js')}}"></script> 
    <script src="{{ asset('assets/js/app-menu.js')}}"></script> 
    <script src="https://unpkg.com/feather-icons"></script>
    
    <script>
     $(window).on('load', function() {
            if (feather) {
              feather.replace({
                width: 14,
                height: 14
              });
            }
          })
          
    </script>
  </body>
</html>