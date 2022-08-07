@extends('layouts.master')

@section('title', 'About: CFLT')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div style="padding: 40px 40px">
                    <div class="row" style="display: flex">
                        <div class="col-md-6"style="display: flex; align-items: center;">
                            <figure>
                                <img src="{{ asset('assets/images/modules/courses-image1.jpg') }}"
                                                class="img-responsive" alt="certified financial literacy trainer">
                                <figcaption style="text-align: center; padding-top:15px;">Certified Financial Literacy
                                    Trainer (CFLT)</figcaption>
                            </figure>
                        </div>
                        <div class="col-md-6">
                            <h3>About the Course</h3>
                            <p style="text-align: justify;">
                                This programme is for individuals who are interested in becoming Certified Financial
                                Literacy
                                Trainers. A trainer certificate is given to an individual who has taken all the Financial
                                Literacy Modules and Learning Methodology on the SabiMONI platform, obtained a mark of 60%
                                and
                                undergone an assessment session (physical/virtual) to demonstrate that he or she can teach
                                and
                                transfer the knowledge to others.
                            </p>

                            <p>
                                <b>Objectives</b>
                            </p>
                            <ul>
                                <li style="text-align: justify">The objective of the train the trainer programme is to equip
                                    trainers with skills
                                    required to
                                    teach financial literacy in their various communities.</li>
                            </ul>
                            <p>
                                <b>Targeted Audience</b>
                            </p>
                            <ul>
                                <li>Interested individuals</li>
                            </ul>

                            <p>
                                <b>Prerequisites and Technical requirements</b>
                            </p>
                            <ul>
                                <li style="text-align: justify;">
                                    Minimum of Secondary School education with basic computer navigation knowledge.</li>
                            </ul>
                            <p>Kindly click <a href="https://sabimoni.org.ng/start/login/signup.php" class="nav-res-2" target="_blank">here</a> to enroll for this course.</p>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>



@endsection
