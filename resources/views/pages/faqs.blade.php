@extends('layouts.master')

@section('title', 'Frequently Asked Questions')

@section('content')

    <div class="header-text mb-5">
        <div class="container">
            <h3 style="color: white;"><b>Frequently Asked </b><br> Questions</h3>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="accordion col-lg-7  col-sm-12">
                <div class="accordion-item">
                    <div class="accordion-head">
                        <h5>What browser(s) can I use to access the web platform?</h5>
                    </div>
                    <div class="accordion-body">
                        <div class="accordion-item-body-content">
                            <p>
                            <ul class="text-justify" style="padding-right: 30px; padding-bottom:20px;">
                                <li>For best user experience, the recommended browsers are Google Chrome and Firefox.</li>
                            </ul>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-head">
                        <h5>What are the computer requirements?</h5>
                    </div>
                    <div class="accordion-body">
                        <div class="accordion-item-body-content">
                            <p>
                            <ul class="text-justify" style="padding-right: 30px; padding-bottom:20px;">
                                <li>If you want to use a computer, then you would require a Windows computers running a
                                    minimum of Windows 8 operating system or a Macintosh computer running High Sierra.
                                    However, it is important to state that you can also learn from this e-learning portal
                                    using just a smart mobile phone device</li>
                            </ul>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-head">
                        <h5>What mobile devices are recommended for accessing the mobile application?</h5>
                    </div>
                    <div class="accordion-body">
                        <div class="accordion-item-body-content">
                            <p>
                            <ul class="text-justify" style="padding-right: 30px; padding-bottom:20px;">
                                <li>You need a smart phone and enough data. The mobile app can be downloaded on Android and
                                    IOS app is coming soon.</li>
                            </ul>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-head">
                        <h5>Why am I unable to view the videos in the modules?</h5>
                    </div>
                    <div class="accordion-body">
                        <div class="accordion-item-body-content">
                            <p>
                            <ul class="text-justify" style="padding-right: 30px; padding-bottom:20px;">
                                <li>Some browsers require a third party plugin to play multimedia content. You can download
                                    adobe's flash player plugin using this link
                                    https://get.adobe.com/flashplayer/otherversions</li>
                            </ul>
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="main-1 col-lg-4 col-lg-offset-1 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                <h4 class="text-center" style="margin-bottom: 15px;">Other Related Information</h4>

                <div class="main">
                    <div class="part1">
                        <img src="../assets/images/related_info/footerLogo.png" alt="related info" width="100%">
                    </div>
                    <div class="part2">
                        <h5 style="font-weight: bold;"><a href="#">Eliminating And Avoiding Debt</a></h5>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae,
                            libero blanditiis debitis quibusdam deleniti adipisci voluptas quam iusto ab mollitia rem eius
                            minus. Laborum voluptatem pariatur recusandae! Sunt, neque.
                            <a href="#">Read More <i class="fa fa-arrow-right" aria-hidden="true"
                                    style="color: #29ca8e"></i></a>
                        </p>
                    </div>
                </div>
                <div class="main">
                    <div class="part1">
                        <img src="../assets/images/related_info/footerLogo.png" alt="related info" width="100%">
                    </div>
                    <div class="part2">
                        <h5 style="font-weight: bold;"><a href="#">Eliminating And Avoiding Debt</a></h5>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae,
                            libero blanditiis debitis quibusdam deleniti adipisci voluptas quam iusto ab mollitia rem eius
                            minus. Laborum voluptatem pariatur recusandae! Sunt, neque.
                            <a href="#">Read More <i class="fa fa-arrow-right" aria-hidden="true"
                                    style="color: #29ca8e"></i></a>
                        </p>
                    </div>
                </div>
                <div class="main">
                    <div class="part1">
                        <img src="../assets/images/related_info/footerLogo.png" alt="related info" width="100%">
                    </div>
                    <div class="part2">
                        <h5 style="font-weight: bold;"><a href="#">Eliminating And Avoiding Debt</a></h5>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae,
                            libero blanditiis debitis quibusdam deleniti adipisci voluptas quam iusto ab mollitia rem eius
                            minus. Laborum voluptatem pariatur recusandae! Sunt, neque.
                            <a href="#">Read More <i class="fa fa-arrow-right" aria-hidden="true"
                                    style="color: #29ca8e"></i></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="back">
                <a href="{{ route('home') }}"> <i class="fa fa-long-arrow-left" aria-hidden="true"></i> back to
                    home</a>
            </div>

        </div>
    </div>
    </div>


@endsection
