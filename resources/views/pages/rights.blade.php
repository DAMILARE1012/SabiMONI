@extends('layouts.master')

@section('title', 'Rights and Responsibilities')

@section('content')
    <div class="container">
        <div class="row" style="margin: 40px 0; margin">
            <div class="col-md-6">
                <div style="padding: 0 40px;">

                    <h3>Your rights and responsibilities as a financial consumer
                        rights</h3>
                    <ol style="margin-top: 10px">
                        <li>Be informed on financial products and services</li>
                        <li>
                            Choose from available products and services
                        </li>
                        <li>
                            Safety and security within the financial institution premises
                        </li>
                        <li>Privacy and confidentiality of customer details</li>
                        <li>Seek redress on complaint and financial issues</li>
                        <li>Quality customer service</li>
                        <li>Equality without discrimination</li>
                        <li>Free monthly statement of account</li>
                    </ol>
                    <h3>Responsibilities</h3>
                    <ol style="margin-top: 10px">
                        <li>For knowledge and understanding of products and services</li>
                        <li>
                            To adhere to financial obligation
                        </li>
                        <li>
                            To protect instruments and information
                        </li>
                        <li>
                            To provide information and not to mislead the bank
                        </li>
                        <li>
                            To report suspected fraud or error
                        </li>
                        <li>
                            To comply with safety laws and directives
                        </li>
                        <li>
                            Of keeping your savings only with registered Financial Institution
                        </li>


                    </ol>
                </div>
            </div>
            <div class="col-md-6" style="background-color: #29ca8e; color:white; padding: 20px 40px; margin-top:40px;">
                <h3>Responsibilities of the Central Bank Of Nigeria</h3>
                <p style="margin-top: 10px; color:white;">
                    One of the core mandates of the Central bank of Nigeria (CBN) is to ensure Financial System Stability.
                    The role
                    of the
                    Consumer Protection department therefore is to engender confidence in Financial consumers by ensuring:
                </p>
                <ol style="margin-top: 15px; margin-bottom:30px;">
                    <li>Consumers are equipped with adequate Financial Education to increase their financial Literacy and
                        Capability
                    </li>
                    <li>
                        Effective Redress Mechanism in the resolution of Financial Consumer Complaints
                    </li>

                    <li>
                        Fair and responsible Business Conduct amongst Financial Institutions under the regulatory purview of
                        the
                        CBN.
                    </li>
                </ol>
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
