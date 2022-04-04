@extends('layouts.master')

@section('title', 'SANEF Group')

@section('content')

    <div id="header-writeup">
        <div class="container">
            SANEF
        </div>
    </div>
    <div class="basic">
        <div class="row">
           
                <div class="col-md-5 col-md-offset-1">
                    <img src="{{ asset('assets/images/courses-image2.jpg') }}"
                    class="img-responsive" alt="" width="100%">
                    <div class="courses-text">
                        <h3><a href="sanef">SANEF</a></h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum ratione obcaecati beatae sapiente eaque, necessitatibus, perferendis consectetur non explicabo vero accusantium provident nesciunt doloribus deleniti cupiditate ipsa quia repudiandae commodi? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi nemo iusto unde officiis quidem? Est voluptatum nostrum autem? Assumenda blanditiis ducimus, tempora incidunt aspernatur optio numquam deserunt quis voluptatibus dolore?.</p>
                    </div>
                </div>    
            <div class="col-md-3 col-md-offset-1" >
                <div class="clft">
                    <img src="{{ asset('assets/images/courses-image1.jpg') }}"
                    class="img-responsive" alt="">   
                </div>

                <div class="courses-detail">
                    <h3><a href="basicFinLit">Basic Financial Literacy</a></h3>
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
                <div class="sanef">
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

