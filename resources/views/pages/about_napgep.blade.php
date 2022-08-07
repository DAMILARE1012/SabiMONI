@extends('layouts.master')

@section('title', 'About: CFLT')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div style="padding: 40px 40px">
                    <div class="row" style="display: flex">
                        <div class="col-md-6" style="display: flex; align-items: center;">
                            <figure>
                                <img src="{{ asset('assets/images/modules/courses-image2.jpg') }}"
                                                class="img-responsive" alt="napgep">
                                <figcaption style="text-align: center; padding-top:15px;">National Peer Group Educator Programme (NAPGEP)</figcaption>
                            </figure>
                        </div>
                        <div class="col-md-6">
                            <h3>About the Course</h3>
                            <p style="text-align: justify;">
                                This programme leverages on the platform of the National Youth Services Corps (NYSC) to train selected Volunteer Corps Members (VCMs) on Financial Literacy in order to deliver financial education in rural communities and environs during their Community Development Service (CDS).
                            </p>

                            <p>
                               <b>Objectives</b> 
                            </p>
                            <ul>
                                <li style="text-align: justify">The objective of the train the trainer is to equip VCMs with  skills required to teach financial literacy at their various place of primary assignment and also improve the quality of their financial decisions.</li>
                            </ul>
                            <p>
                                <b>Targeted Audience</b>
                            </p>
                            <ul>
                                <li>Corps members</li>
                            </ul>

                            <p>
                               <b>Prerequisites and Technical requirements</b> 
                            </p>
                            <ul>
                                <li style="text-align: justify;">
                                    Basic English knowledge
                                </li>
                            </ul>
                            <p>Kindly click <a href="https://sabimoni.org.ng/start/login/signup.php" class="nav-res-2" target="_blank">here</a> to enroll for this course.</p>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>



@endsection
