@extends('layouts.master')

@section('title', 'CFLT Group')

@section('content')


    {{-- <div id="header-writeup" style="margin-top: 12px; color:rebeccapurple">
        <div class="container">
            CFLT
        </div>
    </div> --}}


    <div class="header-text mb-5">
        <div class="container">
            <h3 style="color: white;"><b>CFLT </b></h3>
        </div>
    </div>




    <div class="basic">
        <div class="row courses-res-1">

            <div class="col-md-5 col-md-offset-1">
                <div class="courses-text">
                    <h3><a href="cflt">CFLT</a></h3>
                    <p align="justify" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor tenetur, optio ipsa excepturi fuga
                        saepe quibusdam atque officia obcaecati eveniet enim nostrum voluptatem expedita repellendus unde
                        provident cupiditate dolore laboriosam Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Reiciendis quia et, totam sed maiores fuga! Inventore voluptates hic suscipit autem numquam
                        voluptatem, accusantium modi. Porro quisquam in odio qui veritatis..</p>
                </div>
                <img src="{{ asset('assets/images/courses-image5.jpg') }}" class="img-responsive" alt="" width="100%"
                    style="margin-bottom: 25px; margin-top: 25px">
                <div class="courses-text">
                    {{-- <h3><a href="cflt">CFLT</a></h3> --}}
                    <p align="justify" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor tenetur, optio ipsa excepturi fuga
                        saepe quibusdam atque officia obcaecati eveniet enim nostrum voluptatem expedita repellendus unde
                        provident cupiditate dolore laboriosam Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Reiciendis quia et, totam sed maiores fuga! Inventore voluptates hic suscipit autem numquam
                        voluptatem, accusantium modi. Porro quisquam in odio qui veritatis..</p>
                </div>




                {{-- -------------------------------cflt carousel start-------------------------------------------- --}}




                <div class="" style=" margin-top: 50px; margin-bottom: 50px">
                    <p class="text-center h3" style="margin-bottom: 20px"><b>Modules Overview</b></p>
    
    
    
                    <div class="col-md-12 text-center" style="padding-left: 0px !important">
                        <div class="carousel">
                            <div class="image-container" id="imgs">
    
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel1.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel2.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel3.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel4.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel5.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel6.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel7.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel1.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel2.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel3.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel4.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel5.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel6.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel7.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel8.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel9.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel10.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel11.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel12.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel13.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel4.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel5.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel6.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel7.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel8.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel9.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel10.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel11.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel12.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel13.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel14.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel9.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel10.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel11.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel12.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel13.png') }}" width="150"
                                    height="120" alt="">
                                <img src="{{ asset('assets/images/courses_carousel_images/carousel14.png') }}" width="150"
                                    height="120" alt="">
    
                            </div>
                            <div class="buttons-container">
                                <div id="left" class="carousel-btn"><i class="fa fa-solid fa-chevron-left"></i></div>
                                <div id="right" class="carousel-btn"><i class="fa fa-solid fa-chevron-right"></i></div>
                            </div>
                        </div>
                    </div>
    
    
    
                </div>



                {{-- -------------------------------cflt carousel ends-------------------------------------------- --}}


            </div>
            <div class="col-md-3 col-md-offset-1 ">
                <div class="courses-card">

                    <div class="sanef">
                        <img src="{{ asset('assets/images/courses-image2.jpg') }}" alt="" width="100%" height="170px">
                    </div>

                    <div class="courses-detail">
                        <h3><a href="sanef">SANEF</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit
                            amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>

                    <div class="courses-info">
                        <div class="courses-author">
                            <img src="{{ asset('assets/images/author-image1.jpg') }}" alt="">
                            <span>General</span>
                        </div>
                        <div class="courses-price">
                            <a href="#"><span>Register</span></a>
                        </div>

                    </div>
                </div>

                <div class="courses-card courses-card-1">

                    <div class="cflt">
                        <img src="{{ asset('assets/images/courses-image1.jpg') }}" alt="" width="100%" height="170px">
                    </div>

                    <div class="courses-detail">
                        <h3><a href="basicFinLit">Basic Financial Literacy</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit
                            amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>

                    <div class="courses-info">
                        <div class="courses-author">
                            <img src="{{ asset('assets/images/author-image1.jpg') }}" alt="">
                            <span>General</span>
                        </div>
                        <div class="courses-price">
                            <a href="#"><span>Register</span></a>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>



    {{-- ----------Section two---------- --}}


    <div class="courses-section-2">
        <div class="container courses-section-2-wrapper">

            <div class="courses-item-1">
                Is your institution interested in being onboarded as well? <span>Contact us</span> for more information.
            </div>
            <div class="courses-button-1">
                <a href="#"> Register</a>

            </div>
        </div>
    </div>

    {{-- ----------Section Three---------- --}}

    <div class="container courses-section-3-wrapper">
        <div class="row" style="  text-align:center; margin-top: 40px; margin-bottom: 40px">
            <h1>Assessments And Scoring Policy</h1>

        </div>
        <div class="row">
            <div class="col-md-6 ">
                <div class="cs3-item1">
                    <img src="{{ asset('assets/images/2.png') }}" alt="" width="150px" height="130px">
                    <div class="">
                        <h2 style="margin-top: 0px; margin-bottom: 0px; padding-left: 12px;">Online Assessment
                        </h2>
                        <hr style="border: 2px solid white; margin-top: 0px; margin-bottom: 0px">
                        <p style="padding-left: 12px;">At the end of each module you are asked to pass the final module
                            assessment with a score of at
                            least 60%. In case of not passing, you have a final second attempt to retake the assessment
                            after
                            studying the module again.
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-md-6 ">
                <div class="cs3-item1" style="padding-bottom: 20px">
                    <img src="{{ asset('assets/images/3.png') }}" alt="" width="150px" height="130px">
                    <div class="">
                        <h2 style="margin-top: 0px; margin-bottom: 0px; padding-left: 12px;">Certification
                        </h2>
                        <hr style="border: 2px solid white; margin-top: 0px; margin-bottom: 0px">
                        <p style="padding-left: 12px;">Your certificate will be issued after having completed all
                            assessments successfully.
                        </p>
                    </div>
                </div>

            </div>


        </div>
        <div class="row">
            <div class="cs3-item2" style="margin-bottom: 50px">
                <img src="{{ asset('assets/images/1.png') }}" alt="" width="150px" height="130px">
                <div class="">
                    <h2 style="margin-top: 0px; margin-bottom: 0px; padding-left: 12px;">Final Teaching Assessment (For
                        Trainers Only)
                    </h2>
                    <hr style="border: 2px solid white; margin-top: 0px; margin-bottom: 0px">
                    <p style="padding-left: 12px;">At the end of each module
                        you are asked to pass the final module
                        assessment with a score of at
                        least 60%. In case of not passing, you have a final second attempt to retake the assessment
                        after
                        studying the module again.
                    </p>
                </div>
            </div>

        </div>

    </div>
@endsection
