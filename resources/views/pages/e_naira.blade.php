@extends('layouts.master')

@section('title', 'E-Naira')

@section('content')

    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <div style="padding: 40px 0;">

                <h3 style="padding-bottom: 20px;">The e-Naira</h3>
                <p style="text-align: justify; background-color: #033B4D; color:white!important; padding: 20px 40px;">
                    The eNaira is the Central Bank of Nigeria-issued digital currency. It is the digital representation
                    of the
                    Nigerian Naira and constitutes a direct liability of the Central Bank of Nigeria (CBN). The eNaira
                    was launched
                    by the President of the Federal Republic of Nigeria on October 25, 2021.

                    The eNaira wallet is a digital storage that holds the eNaira and is required to access, hold and use
                    eNaira by
                    consumers.
                </p>
                <h3 style="text-align: center; padding-bottom: 20px;">How is the enaira different from cryptocurrency</h3>
                <div class="row" style="display: flex;">
                    <div class="first_part">
                        <h4 style="text-align: center;"> e-Naira</h4>
                        <ul>
                            <li>It is a legal tender Issued by the monetary authority (CBN)</li>
                            <li>It is a direct liability of the Central Bank of Nigeria</li>
                            <li>The eNaira is a means of payment and has no investment value</li>
                        </ul>
                    </div>
                    <div class="second_part">
                        <h4 style="text-align: center;">Cryptocurrency</h4>
                        <ul>
                            <li>It is not a legal tender</li>
                            <li>It is privately issued</li>
                            <li>It is not a liability of the Central Bank</li>
                            <li>It can be used as a means of payment and It has investment
                                value</li>
                        </ul>
                    </div>
                </div>

                <h3 style="text-align: center; padding-bottom: 20px;">Benefits of the e-Naira</h3>
                <div class="row"
                    style="display: flex; background-color: #033B4D; color:white!important; padding: 10px 40px;">
                    <div class="first">
                        <h4 style="color: white;">Benefits to Consumers:</h4>
                        <ul>
                            <li>Faster payments (speed)</li>
                            <li>Increased convenience/access (additional payment option)</li>
                            <li>Lower transaction cost</li>
                            <li>Reduced incidence of transactions failures</li>
                        </ul>
                    </div>
                    <div class="second">
                        <h4 style="color: white;">Benefits to Merchants and Corporates:</h4>
                        <ul>
                            <li>Better access to capital due to immediate receipt of payment value</li>
                            <li>Increased convenience/access (additional payment option)</li>
                            <li>Increased efficiency of payment processes and accounting</li>
                            <li>Reduced revenue leakages</li>
                            <li>Lower transaction cost</li>
                        </ul>
                    </div>
                </div>


                <div class="row"
                    style="display: flex; background-color: #033B4D; color:white!important; padding:5px 40px;">
                    <div class="first">
                        <h4 style="color: white;">Benefits to the CBN:</h4>
                        <ul>
                            <li>Increased financial inclusion</li>
                            <li>Increased effectiveness of monetary policy implementation</li>
                            <li>Reduced cost of currency management</li>
                            <li>Increased economic growth (positive correlation with increased payment efficiency)
                            </li>
                            <li>Optimization of tax revenue collection</li>

                        </ul>
                    </div>
                    <div class="second">
                        <h4 style="color: white;">Benefits to Financial Institutions:</h4>
                        <ul>
                            <li>Reduced cost of cash management</li>
                            <li>Increased banking penetration</li>
                            <li>Efficiency through electronic payment processing</li>
                            <li>Innovation opportunities for new business models to be created while improving
                                existing models</li>


                        </ul>
                    </div>
                </div>




                <p style="text-align: center; padding-top:10px;">*****Kindly visit <a
                        href="https://www.enaira.gov.ng">www.enaira.gov.ng</a>
                    for more information and
                    resources on the eNaira.
                </p>
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
