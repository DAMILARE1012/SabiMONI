@extends('layouts.master')

@section('title', 'Frequently Asked Questions')
    
@section('content')

    <div class="header-text">
        <div class="container">
            Frequently asked questions
        </div>
    </div>
    <div class="container margin-2">
        <div class="row ">
            <div class="accordion col-lg-7 col-lg-offset-1  col-sm-12">
                    <div class="accordion-item">
                        <div class="accordion-head">
                            <h5>status</h5>
                        </div>
                        <div class="accordion-body">
                            <div class="accordion-item-body-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, est.
                            </div>

                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-head">
                            <h5>eligibility</h5>
                        </div>
                        <div class="accordion-body">
                            <div class="accordion-item-body-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, corporis!
                            </div>

                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-head">
                            <h5>requirements</h5>
                        </div>
                        <div class="accordion-body">
                            <div class="accordion-item-body-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, obcaecati.
                            </div>

                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-head">
                            <h5>how to apply </h5>
                        </div>
                        <div class="accordion-body">
                            <div class="accordion-item-body-content">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, doloremque.
                            </div>

                        </div>
                    </div>
                    <div class="back">
                        <a href="{{route('home')}}"> <i class="fa fa-long-arrow-left" aria-hidden="true"></i> back to home</a>
                    </div>
            </div>
                
                <div class=" main-1 col-lg-3 col-lg-offset-1 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 ">
                    <h4>lastest blogs</h4>
                    
                        <div class="main">
                            <div class="part1">
                               <img src="../assets/images/slider-image1.jpg" alt="" width="100%">
                            </div>
                            <div class="part2">
                                <h4>Financial literacy</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. R
                                    eiciendis consequatur maiores voluptatem qui numquam iste nostrum sit est similique quidem.</p>
                            </div>
                        </div>
                        <div class="main">
                            <div class="part1">
                                <img src="../assets/images/slider-image1.jpg" alt="" width="100%">.
                            </div>
                            <div class="part2">
                                <h4>Financial literacy</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. R
                                    eiciendis consequatur maiores voluptatem qui numquam iste nostrum sit est similique quidem.</p>
                            </div>
                        </div>
                        <div class="main">
                            <div class="part1">
                                <img src="../assets/images/slider-image1.jpg" alt="" width="100%">
                            </div>
                            <div class="part2">
                                <h4>Financial literacy</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. R
                                    eiciendis consequatur maiores voluptatem qui numquam iste nostrum sit est similique quidem.</p>
                            </div>
                        </div>
            </div>
                
        </div>
    </div>
    </div>
    
   
@endsection