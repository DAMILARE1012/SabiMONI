@extends('layouts.master')

@section('title', 'About: SANEF')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div style="padding: 40px 40px">
                    <div class="row" style="display: flex">
                        <div class="col-md-6" style="display: flex; align-items: center;">
                            <figure>
                                <img src="{{ asset('assets/images/modules/courses-image3.jpg') }}" class="img-responsive"
                                    alt="sanef">
                                <figcaption style="text-align: center; padding-top:15px;">Shared Agent Network Expansion
                                    Facility (SANEF)</figcaption>
                            </figure>
                        </div>
                        <div class="col-md-6">
                            <h3>About the Course</h3>
                            <p style="text-align: justify;">
                                The SANEF training aims to equip its Agents with basic financial literacy knowledge to
                                better serve their clients, improve their businesses and their level of financial literacy
                                with the goal of promoting the uptake of financial services, especially at the grassroots.
                            </p>

                            <p>
                                <b>Objectives</b>
                            </p>
                            <ul>
                                <li style="text-align: justify">The objective of the training programme is to equip Super
                                    Agents and Agent with skills required to cascade and teach financial literacy at their
                                    place of business and community.</li>
                            </ul>
                            <p>
                                <b>Targeted Audience</b>
                            </p>
                            <ul>
                                <li>SANEF Agents and Super Agents</li>
                            </ul>

                            <p>
                                <b>Prerequisites and Technical Requirements</b>
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
