@extends('layouts.master')

@section('title', 'Basic Fiancial Literacy')
    
@section('content')
<style>
    
</style>
    <div id="header-writeup">
       <div class="container">
        Basic Financial Literacy
       </div>
    </div>
    <div class="basic">
        <div class="row">
           
                <div class="col-md-5 col-md-offset-1">
                    <img src="{{ asset('assets/images/courses-image1.jpg') }}"
                    class="img-responsive" alt="" width="100%">
                    <div class="courses-text">
                        <h3><a href="basicFinLit">Basic Financial Literacy</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, necessitatibus reprehenderit a vitae molestias nesciunt expedita magnam culpa suscipit voluptas possimus laboriosam ducimus architecto aut quia. Nihil consequuntur tenetur perspiciatis? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam corrupti obcaecati aliquid, temporibus perspiciatis nisi nam velit ut mollitia quam, consectetur quis exercitationem neque dolorem rerum voluptate ab deleniti blanditiis!</p>
                    </div>
                </div>    
            <div class="col-md-3 col-md-offset-1 " >
                <div class="sanef">
                    <img src="{{ asset('assets/images/courses-image2.jpg') }}"
                    class="img-responsive" alt="">
                </div>

                <div class="courses-detail">
                    <h3><a href="sanef">SANEF</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>

                <div class="courses-info">
                    <div class="courses-author">
                            <img src="{{ asset('assets/images/author-image1.jpg') }}"
                                class="img-responsive" alt="">
                            <span>General</span>
                    </div>
                    <div class="courses-price">
                    <a href="#"><span>Register</span></a>
                    </div>

                </div>
                    <br>
                <div class="cflt">
                    <img src="{{ asset('assets/images/courses-image5.jpg') }}"
                    class="img-responsive" alt="">
                </div>

                <div class="courses-detail">
                    <h3><a href="cflt">CFLT</a></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>

                    <div class="courses-info">
                        <div class="courses-author">
                            <img src="{{ asset('assets/images/author-image1.jpg') }}"
                                class="img-responsive" alt="">
                            <span>General</span>
                        </div>
                        <div class="courses-price">
                            <a href="#"><span>Register</span></a>
                        </div>
    
                    </div>
            </div>  
            
        </div>
   
    </div>
@endsection