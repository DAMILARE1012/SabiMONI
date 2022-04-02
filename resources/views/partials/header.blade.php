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
                <li><a href="#top" class="smoothScroll">Home</a></li>
                <li><a href="#about" class="smoothScroll">About Us</a></li>
                <li><a href="#courses" class="smoothScroll">Courses</a></li>
                <li><a href="#team" class="smoothScroll">News</a></li>
                <li><a href="#testimonial" class="smoothScroll">Reviews</a></li>
                <li><a href="#contact" class="smoothScroll">Contact</a></li>
                <li><a href="{{ route('faqs') }}" class="smoothScroll">Faqs</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://sabimonidemo.com/start/login/signup.php" target="_blank"><i
                            class="fa fa-sign-in"></i>Register</a></li>
                <li><a href="https://sabimonidemo.com/start/login/index.php" target="_blank"><i
                            class="fa fa-user-circle" aria-hidden="true"></i>Login</a></li>
            </ul>
        </div>

    </div>
</section>


