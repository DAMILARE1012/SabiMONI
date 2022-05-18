<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container nav-space">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="{{ route('home') }}" class="navbar-brand"><img
                    src="{{ asset('assets/images/sabi_icon.png') }}" alt="" srcset=""></a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">
                <li><a href="#top" class="smoothScroll nav-res-1a" id="forHome">Home</a></li>
                <li><a href="#about" class="smoothScroll nav-res-1a" id="forAbout">About Us</a></li>
                <li><a href="#courses" class="smoothScroll nav-res-1a" id="forCourse">Courses</a></li>
                <li><a href="#team" class="smoothScroll nav-res-1a" id="forTeam">News</a></li>
                <li><a href="#testimonial" class="smoothScroll nav-res-1a" id="forTest">Testimonials</a></li>
                <li><a href="#contact" class="smoothScroll nav-res-1a" id="forContact">Contact</a></li>
                <li><a href="/index.php/faqs" class="smoothScroll" id="forFaq">FAQS</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://sabimoni.org.ng/start/login/signup.php" class="nav-res-2" target="_blank"><i
                            class="fa fa-sign-in "></i>Register</a></li>
                <li><a href="https://sabimoni.org.ng/start/login/index.php" class="nav-res-2" target="_blank"><i
                            class="fa fa-user-circle " aria-hidden="true"></i>Login</a></li>
            </ul>
        </div>

    </div>
</section>
