<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Locamais Veiculos</title>
    {{-- <link href="/favicon.png" rel="icon"/> --}}


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
    <script src="https://kit.fontawesome.com/78ee0163db.js" crossorigin="anonymous"></script>

    <!-- start: Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- end: Icons -->

    <!-- start: boostrap -->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap.min.css')}}">     --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- end: bootstrap -->
    
    <!-- start: Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- end: Css -->

    @vite([
        'resources/js/app.js',
        'resources/css/app.css',
    ]) 
    @inertiaHead
  </head>
  <body>
    @inertia

    <!-- start: JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- end: JS -->
    
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