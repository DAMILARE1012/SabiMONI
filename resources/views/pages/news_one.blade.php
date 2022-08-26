@extends('layouts.master')

@section('title', 'About: Celebration of 2022 Global Money Week')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div style="padding: 40px 40px">
                    <div class="row" style="display: flex">
                        <div class="col-md-6">

                            <h3>Celebration of 2022 Global Money Week</h3>
                            <p style="text-align: justify;">
                                The Global Money Week (GMW) is a global money awareness celebration that takes place in
                                March every year. The celebration of GMW consists of a series of activities aimed at
                                inspiring children and youth to learn about money, saving, creating livelihoods, gaining
                                employment, and becoming an entrepreneur.
                            </p>
                            <p style="text-align: justify;">
                                The CBN collaborated with the Banker’s Committee Sub-Committee on Financial Literacy and
                                Public Enlightenment (FLPE) and other Stakeholders to reach out to students in various
                                public schools across the 36 states of the Federation and the Federal Capital Territory to
                                conduct the school mentoring programme amongst others based on the 2022 GMW theme <b>“Build
                                    Your Future, Be Smart About Money”</b>
                            </p>
                            <p style="text-align: justify;">
                                The CBN conducted School Mentoring programmes in eight (8) schools including the Governor’s
                                and Deputy Governor’s Financial System Stability’s selected schools in Lagos & Abuja across
                                the six (6) Geo-Political Zones in Nigeria to inculcate savings culture in the pupils. Below
                                are the schools visited.
                            </p>
                            <table class="table table-striped text-justify">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>State</th>
                                        <th>School</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>FCT Abuja</td>
                                        <td>Government Secondary School, Wuse Zone 3, Abuja</td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Lagos</td>
                                        <td>Victoria Island Senior Secondary School, Lagos </td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Ondo</td>
                                        <td>Unique International
                                            College, Akure, Ondo
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>
                                            Borno
                                        </td>
                                        <td>Federal Government College, Maiduguri
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Akwa-Ibom</td>
                                        <td>St. Benedicts College, Uyo, Akwa Ibom State
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>Anambra</td>
                                        <td>
                                            St. John of God Secondary School, Awka, Anambra State.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7.</td>
                                        <td>Kaduna</td>
                                        <td>Victory Academy, Kakuri, Kaduna State.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8.</td>
                                        <td>Nasarawa</td>
                                        <td>Hallmark Academy, Lafia, Nassarawa State
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p style="text-align: justify;">
                                The Deputy Governor, Financial System Stability, Central Bank of Nigeria, Mrs. Aisha Ahmad
                                (CFA) in her recorded speech stressed the need for Nigerians to develop themselves with
                                basic financial skills for future financial resilience and wellbeing. She disclosed this at
                                Government Secondary School Zone 3, Wuse Abuja
                            </p>
                            <p style="text-align: justify;">
                                Mrs. Ahmad stated that the 2022 GMW was a special one, as it was the 10th anniversary of
                                the GMW, and an avenue to create an awareness amongst children and youth about the
                                importance of learning to make sound financial decisions.
                                While noting that having an income and making lots of money alone did not guarantee
                                financial well-being, she stressed the need to develop financial skills and the right
                                attitude required to be able to manage financial resources effectively.
                                She highlighted the importance of learning from an early age and how to plan, be
                                financially independent, make investment and have multiple source of income.
                            </p>
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
                            <p>Kindly click <a href="https://sabimoni.org.ng/start/login/signup.php" class="nav-res-2"
                                    target="_blank">here</a> to enroll for this course.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="back">
            <a href="{{ route('home') }}"> <i class="fa fa-home" aria-hidden="true"></i>
                Home</a>
        </div>
    </div>
@endsection
