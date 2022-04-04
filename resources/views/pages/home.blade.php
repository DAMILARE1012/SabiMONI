@extends('layouts.master')

@section('title', 'SabiMONI: Financial Literacy Course')

@section('content')
    <!-- HOME -->
    <section id="home">
        <div class="row">

            <div class="owl-carousel owl-theme home-slider">
                <div class="item item-first">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-6 col-sm-12">
                                <h1>SabiMONI: Your Path to Financial Literacy</h1>
                                <h3>Our online courses are designed to fit in your industry supporting all-round with latest
                                    technologies.</h3>
                                <a href="#feature" class="section-btn btn btn-default smoothScroll">Discover more</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item item-second">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-6 col-sm-12">
                                <h1>SabiMONI: The Financial Literacy e-Learning Platform</h1>
                                <h3>Our online courses are built in partnership with technology leaders and are designed to
                                    meet industry demands.</h3>
                                <a href="#courses" class="section-btn btn btn-default smoothScroll">Take a course</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item item-third">
                    <div class="caption">
                        <div class="container">
                            <div class="col-md-6 col-sm-12">
                                <h1>SabiMONI: Free for All</h1>
                                <h3>Nam eget sapien vel nibh euismod vulputate in vel nibh. Quisque eu ex eu urna venenatis
                                    sollicitudin ut at libero. Visit <a rel="nofollow" href="#">templatemo</a>Read More</h3>
                                <a href="#contact" class="section-btn btn btn-default smoothScroll">Let's chat</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- FEATURE -->
    <section id="feature">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-4 text-justify">
                    <div class="feature-thumb">
                        <span><i class="fa fa-users"></i></span>
                        <h3>Interactive Courses</h3>
                        <p>We provide interactive financial literacy courses with a friendly tone.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 text-center">
                    <div class="feature-thumb">
                        <span><i class="fa fa-clock-o"></i></span>
                        <h3>Self Paced Learning</h3>
                        <p>We provide outmost convenience to learners over what we teach.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 text-center">
                    <div class="feature-thumb">
                        <span><i class="fa fa-certificate"></i></span>
                        <h3>Certification</h3>
                        <p>After final assessments, users' certificates are issued.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ABOUT -->
    <section id="about">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="about-info">
                        <h2>About <strong>SabiMONI</strong></h2>
                        <p>Financial literacy impacts almost every aspect in our lives today. Whether we go to the market,
                            discuss our family budget, manage our business or prepare for retirement, our understanding of
                            how money works has a strong effect on our quality of life.</p>

                        <p>This e-learning platform offers financial literacy knowledge tailored towards those interested in
                            becoming Certified Financial Literacy Trainer (CFLT) as well as consumers who want to improve
                            their financial wellbeing.</p>

                        <figure>
                            <span><i class="fa fa-users"></i></span>
                            <figcaption>
                                <h3>Professional Trainers</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                            </figcaption>
                        </figure>

                        {{-- <figure>
                              <span><i class="fa fa-certificate"></i></span>
                              <figcaption>
                                   <h3>International Certifications</h3>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                              </figcaption>
                         </figure> --}}

                        <figure>
                            <span><i class="fa fa-bar-chart-o"></i></span>
                            <figcaption>
                                <h3>Free for Everyone</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="about-info">
                        <div class="button-edit">
                            {{-- <h2>Start your journey to a better life....</h2> --}} <br>
                            <iframe width="500" height="350"
                                src="{{ asset('assets/images/videos/dgvideowsound.mp4?autoplay=0') }}" frameborder="0"
                                id="video"
                                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <div class="button-edit-1"><img id="play"
                                    src="{{ url('/assets/images/videos/playbutton.png') }}" alt=""></div>
                        </div>


                        <div style="display:inline-block; vertical-align: middle;">
                            <div style="font-weight:bold;">Mrs Aisha Ahmad </div>
                            <div> Deputy Governor, Financial System Stability, Central Bank Of Nigeria</div>
                        </div>

                    </div>
                </div>

                {{-- <div class="col-md-offset-1 col-md-4 col-sm-12">
                    <div class="entry-form">
                         <form action="#" method="post">
                              <h2>Signup today</h2>
                              <input type="text" name="full name" class="form-control" placeholder="Full name" required="">
 
                              <input type="email" name="email" class="form-control" placeholder="Your email address" required="">
 
                              <input type="password" name="password" class="form-control" placeholder="Your password" required="">
 
                              <button class="submit-btn form-control" id="form-submit">Get started</button>
                         </form>
                    </div>
               </div> --}}

            </div>
        </div>
    </section>

    <!-- Courses -->
    <section id="courses">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2>Core Courses <small>The following courses are available on SabiMONI</small></h2>
                    </div>

                    <div class="owl-carousel owl-theme owl-courses">
                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="courses-thumb">
                                    <div class="courses-top">
                                        <div class="courses-image">
                                            <img src="{{ asset('assets/images/courses-image1.jpg') }}"
                                                class="img-responsive" alt="">
                                        </div>
                                        <div class="courses-date">
                                            <span><i class="fa fa-calendar"></i> 12 / 7 / 2018</span>
                                            <span><i class="fa fa-clock-o"></i> 7 Hours</span>
                                        </div>
                                    </div>

                                    <div class="courses-detail">
                                        <h3><a href="courses/basicFinLit">Basic Financial Literacy</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>

                                    <div class="courses-info">
                                        <div class="courses-author">
                                            <img src="{{ asset('assets/images/author-image1.jpg') }}"
                                                class="img-responsive" alt="">
                                            <span>General</span>
                                        </div>
                                        <div class="courses-price free">
                                            <a href="https://sabimonidemo.com/start/login/signup.php"
                                                target="_blank"><span>Register</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-md-4 col-sm-4">
                              <div class="item">
                                   <div class="courses-thumb">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="{{ asset('assets/images/courses-image2.jpg') }}" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span><i class="fa fa-calendar"></i> 20 / 7 / 2018</span>
                                                  <span><i class="fa fa-clock-o"></i> 4.5 Hours</span>
                                             </div>
                                        </div>
 
                                        <div class="courses-detail">
                                             <h3><a href="#">Graphic & Web Design</a></h3>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
 
                                        <div class="courses-info">
                                             <div class="courses-author">
                                                  <img src="{{ asset('assets/images/author-image2.jpg') }}" class="img-responsive" alt="">
                                                  <span>Jessica</span>
                                             </div>
                                             <div class="courses-price">
                                                  <a href="#"><span>USD 80</span></a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
 
                         <div class="col-md-4 col-sm-4">
                              <div class="item">
                                   <div class="courses-thumb">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="{{ asset('assets/images/courses-image3.jpg') }}" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span><i class="fa fa-calendar"></i> 15 / 8 / 2018</span>
                                                  <span><i class="fa fa-clock-o"></i> 6 Hours</span>
                                             </div>
                                        </div>
 
                                        <div class="courses-detail">
                                             <h3><a href="#">Marketing Communication</a></h3>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
 
                                        <div class="courses-info">
                                             <div class="courses-author">
                                                  <img src="{{ asset('assets/images/author-image3.jpg') }}" class="img-responsive" alt="">
                                                  <span>Catherine</span>
                                             </div>
                                             <div class="courses-price free">
                                                  <a href="#"><span>Free</span></a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div> --}}

                        {{-- <div class="col-md-4 col-sm-4">
                              <div class="item">
                                   <div class="courses-thumb">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="{{ asset('assets/images/courses-image4.jpg') }}" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span><i class="fa fa-calendar"></i> 10 / 8 / 2018</span>
                                                  <span><i class="fa fa-clock-o"></i> 8 Hours</span>
                                             </div>
                                        </div>
 
                                        <div class="courses-detail">
                                             <h3><a href="#">Summer Kids</a></h3>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
 
                                        <div class="courses-info">
                                             <div class="courses-author">
                                                  <img src="{{ asset('assets/images/author-image1.jpg') }}" class="img-responsive" alt="">
                                                  <span>Mark Wilson</span>
                                             </div>
                                             <div class="courses-price">
                                                  <a href="#"><span>USD 45</span></a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div> --}}

                        {{-- <div class="col-md-4 col-sm-4">
                              <div class="item">
                                   <div class="courses-thumb">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="{{ asset('assets/images/courses-image5.jpg') }}" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span><i class="fa fa-calendar"></i> 5 / 10 / 2018</span>
                                                  <span><i class="fa fa-clock-o"></i> 10 Hours</span>
                                             </div>
                                        </div>
 
                                        <div class="courses-detail">
                                             <h3><a href="#">Business &amp; Management</a></h3>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
 
                                        <div class="courses-info">
                                             <div class="courses-author">
                                                  <img src="{{ asset('assets/images/author-image2.jpg') }}" class="img-responsive" alt="">
                                                  <span>Jessica</span>
                                             </div>
                                             <div class="courses-price free">
                                                  <a href="#"><span>Free</span></a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div> --}}
                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="courses-thumb">
                                    <div class="courses-top">
                                        <div class="courses-image">
                                            <img src="{{ asset('assets/images/courses-image2.jpg') }}"
                                                class="img-responsive" alt="">
                                        </div>
                                        <div class="courses-date">
                                            <span><i class="fa fa-calendar"></i> 5 / 10 / 2018</span>
                                            <span><i class="fa fa-clock-o"></i> 10 Hours</span>
                                        </div>
                                    </div>

                                    <div class="courses-detail">
                                        <h3><a href="courses/sanef">SANEF</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>

                                    <div class="courses-info">
                                        <div class="courses-author">
                                            <img src="{{ asset('assets/images/author-image2.jpg') }}"
                                                class="img-responsive" alt="">
                                            <span>SANEF Group</span>
                                        </div>
                                        <div class="courses-price free">

                                            <a href="https://sabimonidemo.com/start/login/signup.php"
                                                target="_blank"><span>Register</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="courses-thumb">
                                    <div class="courses-top">
                                        <div class="courses-image">
                                            <img src="{{ asset('assets/images/courses-image5.jpg') }}"
                                                class="img-responsive" alt="">
                                        </div>
                                        <div class="courses-date">
                                            <span><i class="fa fa-calendar"></i> 5 / 10 / 2018</span>
                                            <span><i class="fa fa-clock-o"></i> 10 Hours</span>
                                        </div>
                                    </div>

                                    <div class="courses-detail">
                                        <h3><a href="courses/cflt">CFLT</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>

                                    <div class="courses-info">
                                        <div class="courses-author">
                                            <img src="{{ asset('assets/images/author-image2.jpg') }}"
                                                class="img-responsive" alt="">
                                            <span>CFLT Group</span>
                                        </div>
                                        <div class="courses-price free">
                                            <a href="https://sabimonidemo.com/start/login/signup.php"
                                                target="_blank"><span>Register</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
    </section>

    <!-- TEAM -->
    <section id="team">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2>Latest News<small>Read through our blog for recent updates</small></h2>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="team-thumb">
                        <div class="team-image">
                            <img src="{{ asset('assets/images/news/bank.png') }}" class="img-responsive" alt="">
                        </div>
                        <div class="team-info text-justify">
                            <h5 style="font-weight: bold;">Eliminating And Avoiding Debt</h5>
                            <span>Debt is one of the biggest hurdles many younger generations are facing today. When you
                                have the financial education... <a href="{{ route('blog') }}" style="color: red;">Read
                                    More</a></span>
                        </div>
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-calendar" attr="calendar icon"></a>Dec 8, 2020</li>
                            {{-- <li><a href="#" class="fa fa-twitter"></a></li>
                              <li><a href="#" class="fa fa-instagram"></a></li> --}}
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="team-thumb">
                        <div class="team-image">
                            <img src="{{ asset('assets/images/news/finance-books-.png') }}" class="img-responsive" alt="">
                        </div>
                        <div class="team-info text-justify">
                            <h5 style="font-weight: bold;">Financial Literacy: Meanings and Descriptions</h5>
                            <span>Debt is one of the biggest hurdles many younger generations are facing today. When you
                                have the financial education... <a href="{{ route('blog') }}" style="color: red;">Read
                                    More</a></span>
                        </div>
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-calendar" attr="calendar icon"></a>Dec 8, 2020</li>
                            {{-- <li><a href="#" class="fa fa-twitter"></a></li>
                              <li><a href="#" class="fa fa-instagram"></a></li> --}}
                        </ul>
                    </div>
                </div>
                <!-- back to top button -->
                <button id="backToTOP"><i class="fa fa-angle-double-up"></i></button>

                <div class="col-md-3 col-sm-6">
                    <div class="team-thumb">
                        <div class="team-image">
                            <img src="{{ asset('assets/images/news/time-is-money.png') }}" class="img-responsive" alt="">
                        </div>
                        <div class="team-info text-justify">
                            <h5 style="font-weight: bold;">Achieve Financial Literacy on your Own</h5>
                            <span>Debt is one of the biggest hurdles many younger generations are facing today. When you
                                have the financial education... <a href="{{ route('blog') }}" style="color: red;">Read
                                    More</a></span>
                        </div>
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-calendar" attr="calendar icon"></a>Dec 6, 2020</li>
                            {{-- <li><a href="#" class="fa fa-twitter"></a></li>
                              <li><a href="#" class="fa fa-instagram"></a></li> --}}
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="team-thumb">
                        <div class="team-image">
                            <img src="{{ asset('assets/images/news/money-tree.png') }}" class="img-responsive" alt="">
                        </div>
                        <div class="team-info text-justify">
                            <h5 style="font-weight: bold;">Break your Consumer Mentality </h5>
                            <span>Debt is one of the biggest hurdles many younger generations are facing today. When you
                                have the financial education... <a href="{{ route('blog') }}" style="color: red;">Read
                                    More</a></span>
                        </div>
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-calendar" attr="calendar icon"></a>Dec 6, 2020</li>
                            {{-- <li><a href="#" class="fa fa-twitter"></a></li>
                              <li><a href="#" class="fa fa-instagram"></a></li> --}}
                        </ul>
                    </div>
                </div>




                {{-- <div class="col-md-3 col-sm-6">
                    <div class="team-thumb">
                         <div class="team-image">
                              <img src="{{ asset('assets/images/author-image4.jpg') }}" class="img-responsive" alt="">
                         </div>
                         <div class="team-info">
                              <h3>Andrew Berti</h3>
                              <span>Learning is fun</span>
                         </div>
                         <ul class="social-icon">
                              <li><a href="#" class="fa fa-twitter"></a></li>
                              <li><a href="#" class="fa fa-google"></a></li>
                              <li><a href="#" class="fa fa-behance"></a></li>
                         </ul>
                    </div>
               </div> --}}

            </div>
        </div>
    </section>


    <!-- TESTIMONIAL -->
    <section id="testimonial">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2>Trust Section<small>from around the world</small></h2>
                    </div>

                    <div class="owl-carousel owl-theme owl-client">
                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="tst-image">
                                    <img src="{{ asset('assets/images/tst-image1.jpg') }}" class="img-responsive"
                                        alt="">
                                </div>
                                <div class="tst-author">
                                    <h4>Damilare Emmanuel</h4>
                                    <span>Web Developer</span>
                                </div>
                                <p>You really do help young creative minds to get quality education and professional job
                                    search assistance.</p>
                                <div class="tst-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="tst-image">
                                    <img src="{{ asset('assets/images/tst-image2.jpg') }}" class="img-responsive"
                                        alt="">
                                </div>
                                <div class="tst-author">
                                    <h4>Damilare Emmanuel</h4>
                                    <span>Web Developer</span>
                                </div>
                                <p>You really do help young creative minds to get quality education and professional job
                                    search assistance.</p>
                                <div class="tst-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="tst-image">
                                    <img src="{{ asset('assets/images/tst-image3.jpg') }}" class="img-responsive"
                                        alt="">
                                </div>
                                <div class="tst-author">
                                    <h4>Damilare Emmanuel</h4>
                                    <span>Web Developer</span>
                                </div>
                                <p>You really do help young creative minds to get quality education and professional job
                                    search assistance.</p>
                                <div class="tst-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="item">
                                <div class="tst-image">
                                    <img src="{{ asset('assets/images/tst-image4.jpg') }}" class="img-responsive"
                                        alt="">
                                </div>
                                <div class="tst-author">
                                    <h4>Damilare Emmanuel</h4>
                                    <span>Web Developer</span>
                                </div>
                                <p>You really do help young creative minds to get quality education and professional job
                                    search assistance.</p>
                                <div class="tst-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
    </section>


    <!-- CONTACT -->
    <section id="contact">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="section-title text-center">
                        <h2>SabiMONI Mobile Application Now Available </h2>
                    </div>

                    <div class="contact-image">
                        <a href="https://play.google.com/store/apps/details?id=com.sabimoni.ng" target="_blank"
                            rel="noopener noreferrer">
                            <img src="{{ asset('assets/images/sabiMONI_Phone.jpg') }}" class="img-responsive"
                            alt="Sabi MONI Mobile Application">
                        </a>
                        
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <form id="contact-form" role="form" action="{{ route('contact-us') }}" method="post">
                        {{ csrf_field() }}
                        <div class="section-title text-center">
                            <h2>Contact Us <small>we love conversations. let us talk!</small></h2>
                        </div>

                        @if (session()->has('success'))
                            <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 5000)" x-show="show">
                                <div class="alert alert-success" role="alert">
                                    <strong>Success</strong> {{ session()->get('success') }}
                                </div>
                            </div>
                        @endif

                        <div class="col-md-12 col-sm-12">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12 ">
                                    <input type="text" class="form-control textarea @error('name') is-invalid @enderror"
                                        placeholder="Enter full name" name="name" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6 col-sm-12">
                                    <input type="email" class="form-control textarea @error('email') is-invalid @enderror"
                                        placeholder="Enter email address" name="email" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control textarea @error('subject') is-invalid @enderror"
                                    placeholder="Enter subject...." name="subject" required>
                                @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea class="form-control textarea @error('message') is-invalid @enderror" rows="6"
                                    placeholder="Tell us about your message" name="message" required></textarea>
                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-row">
                                <div class="captcha" style="display: flex; align-items:flex-end">
                                    <div class="row col-md-6 form-group" style="display: flex;">
                                        <span style="width: 50%; height:50px;">{!! captcha_img() !!}</span>
                                        <button type="button" class="btn btn-success btn-sm btn-refresh"
                                            style="padding: 0px; width: 40%; margin-left: 24px; height: 50px">
                                            <i class="fa fa-refresh"></i>
                                        </button>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input id="captcha" type="text" class="form-control" style="margin-bottom: 0px"
                                            placeholder="Enter Captcha" name="captcha">
                                        @if ($errors->has('captcha'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('captcha') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <input type="submit" class="form-control" name="send message" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        </div>
        </div>
    </section>

    {{-- Start of Partners' Section --}}

    <section id="partners">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" data-animation="fadeInLeft">
                    <!-- Title -->
                    <div class="section-title">
                        <h2>Our Partners<small>from around the world</small></h2>
                    </div>
                    {{-- <h3 class="no-margin bottom-margin-md-10 text-color2 mainFont">Our Partners</h3> --}}
                    <br>
                </div>
                {{--<div class="col-md-12 text-center">
                    <img src="{{ asset('assets/images/clients/cbn.png') }}" width="120" height="90" alt="">
                    <img src="{{ asset('assets/images/clients/giz.png') }}" width="120" height="90" alt="">
                    <img src="{{ asset('assets/images/clients/ndic.png') }}" width="120" height="90" alt="">
                    <img src="{{ asset('assets/images/clients/pencom.png') }}" width="120" height="90" alt="">
                    <img src="{{ asset('assets/images/clients/securities.png') }}" width="120" height="90" alt="">
                    <img src="{{ asset('assets/images/clients/naicom.png') }}" width="120" height="90" alt="">
                    <img src="{{ asset('assets/images/clients/fmys.png') }}" width="120" height="90" alt="">
                    <img src="{{ asset('assets/images/clients/ncc.png') }}" width="120" height="90" alt="">
                    <img src="{{ asset('assets/images/clients/smedan.png') }}" width="120" height="90" alt="">
                    <img src="{{ asset('assets/images/clients/education.png') }}" width="120" height="90" alt="">
                    <img src="{{ asset('assets/images/clients/nsitf.png') }}" width="120" height="90" alt="">
                    <img src="{{ asset('assets/images/clients/nia.png') }}" width="120" height="90" alt="">
                    <img src="{{ asset('assets/images/clients/fmic2.png') }}" width="120" height="90" alt="">
                    <img src="{{ asset('assets/images/clients/mercy.png') }}" width="120" height="90" alt="">
                    <img src="{{ asset('assets/images/clients/bankers.png') }}" width="120" height="90" alt="">
                    <img src="{{ asset('assets/images/clients/fmof.png') }}" width="120" height="90" alt="">
                    <img src="{{ asset('assets/images/clients/stock.png') }}" width="120" height="90" alt="">
                </div> --}}
                <div class="col-md-12 text-center">
                    <div class="carousel">
                        <div class="image-container" id="imgs">
                            <img src="{{ asset('assets/images/clients/cbn.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/giz.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/ndic.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/pencom.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/securities.png') }}" width="120" height="90"
                                alt="">
                            <img src="{{ asset('assets/images/clients/naicom.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/fmys.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/ncc.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/smedan.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/education.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/nsitf.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/nia.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/fmic2.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/mercy.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/bankers.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/fmof.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/stock.png') }}" width="120" height="90" alt="">

                            <img src="{{ asset('assets/images/clients/cbn.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/giz.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/ndic.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/pencom.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/securities.png') }}" width="120" height="90"
                                alt="">
                            <img src="{{ asset('assets/images/clients/naicom.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/fmys.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/ncc.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/smedan.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/education.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/nsitf.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/nia.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/fmic2.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/mercy.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/bankers.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/fmof.png') }}" width="120" height="90" alt="">
                            <img src="{{ asset('assets/images/clients/stock.png') }}" width="120" height="90" alt="">
                        </div>
                        <div class="buttons-container">
                            <div id="left" class="carousel-btn"><i class="fa fa-solid fa-chevron-left"></i></div>
                            <div id="right" class="carousel-btn"><i class="fa fa-solid fa-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Partners section -->


@endsection
