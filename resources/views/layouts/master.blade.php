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
     <style>
          #backToTOP{
               position: fixed;
               bottom: 20px;
               right: 20px;
               z-index: 10000;
               background: #29ca8e;
               border-radius: 50%;
               border: none;
               color: white;
               height: 50px;
               width: 50px;
               font-size: 20px;
               transition: .5 ease-in;
               display: none;
          }
          #backToTOP a{
               color: white;
          }
          #backToTOP:hover{
               background-color: green;
          }
          html{
               scroll-behavior: smooth;
          }
          #header-writeup{
        background: url('../assets/images/adeolu-eletu-unRkg2jH1j0-unsplash.jpg') center center/cover;
        background-position: center;
        width: 100%;
        height:250px;
        font-size: 40px;
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column
        
    }
    .basic{
      
        padding: 50px;
        font-size: 20px;
        text-align: justify;
    }
         
     </style>

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