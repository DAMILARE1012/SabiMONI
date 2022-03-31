<!DOCTYPE html>
<html lang="en">
<head>

     <title> @yield('title', 'SabiMONI Welcome Page') </title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     @include('roots._css')

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     @include('partials.header')

     @yield('content')

     @include('partials.footer')
 
     @include('roots._javascript')

</body>
</html>