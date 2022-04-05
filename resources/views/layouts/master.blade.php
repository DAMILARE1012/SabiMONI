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
        #backToTOP {
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
            animation-name: backtop;
            animation-duration: 1s
        }

        #backToTOP:hover {
            background-color: green;
        }

        html {
            scroll-behavior: smooth;
        }

        .header-text {
            width: 100%;
            height: 242px;
            background-image: url('../assets/images/slider-image1.jpg');
            background-repeat: no-repeat;
            background-position: center;
            font-size: 30px;
            display: flex;
            flex-direction: column;
            align-content: center;
            justify-content: center;
            color: #ffffff;
            margin-bottom: 50px;
        }

        @keyframes backtop {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .accordion {

            /* margin: 2rem auto; */
        }

        .accordion-head {
            padding: 1rem;
            line-height: 2.25rem;
            display: flex;
            align-items: center;
            position: relative;
            justify-content: space-between;
            cursor: pointer;
        }

        .accordion-head::after {
            content: "\002B";
            font-size: 2rem;
            position: absolute;
            right: 1rem;
            transition: .5s ease-in-out;
        }

        .accordion-head.active::after {
            content: "\2212";
        }

        .accordion-item {
            background-color: white;
            color: #333;
            margin: 1rem 0 3rem;
            border-radius: 10px;
            box-shadow: 1px 2px 20px rgba(0, 0, 0, 0.1);

        }

        .accordion-body {
            padding: 10px;
            background-color: #f3f6fa;
            display: none;

        }

        .accordion-head.active+.accordion-body {
            animation: .5s ease;
            display: block;
        }

        .main {
            display: flex;
            flex-direction: column;
            width: 100%;
            border-radius: 5px;
            box-shadow: 0.778571px 1.55714px 15.5714px rgba(0, 0, 0, 0.1);
            padding: 0;

            margin-bottom: 20px;
        }

        .part1 {
            width: 100%;
            /* background-image: url('../assets/images/slider-image1.jpg'); */
            background-repeat: no-repeat;
            height: 5% !important;

        }

        .part2 {
            width: 100%;
            padding: 20px;
            height: 70%;
        }

        .margin-2 {
            margin-bottom: 500px;
        }

        .back a {
            font-size: 20px;
            text-transform: capitalize;


        }

        .back {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        @media(max-width: 786px) {
            .part1 {
                width: 100%;
                padding: 20px;
                height: 70%;
            }

            .part2 {
                width: 100%;
                padding: 20px;
                height: 70%;
            }

            .main {
                margin: 20px auto;
                width: 50%;

            }

        }

    </style>

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
    <!-- back to top button -->
    <button id="backToTOP"><i class="fa fa-angle-double-up"></i></button>

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


    <script>
        const accordion_head = document.querySelectorAll('.accordion-head');
        accordion_head.forEach((accordion) => {
            accordion.addEventListener('click', function() {
                accordion.classList.toggle('active')
            })

        })
        const forHome = document.getElementById('forHome');
        const forFaq = document.getElementById('forFaq');

        if (window.location.pathname === '/faqs') {
            forHome.setAttribute('href', "{{ route('home') }}")
            forFaq.setAttribute('href', '#top')
        }

        if (window.location.pathname === '/courses/sanef' || window.location.pathname === '/courses/cflt' || window.location
            .pathname ===
            '/courses/basicFinLit') {
            forHome.setAttribute('href', "{{ route('home') }}")
        }
    </script>
</body>

</html>
