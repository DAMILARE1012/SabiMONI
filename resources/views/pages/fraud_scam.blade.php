@extends('layouts.master')

@section('title', 'fraud and scam')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div style="padding: 40px 40px">

                    <h3 style="text-align:center; padding-bottom: 10px;">The Prevalence of Fraud and Scam in Digital
                        Financial Services</h3>

                    <p>
                        Today, more and more purchases are done through digital channels, especially via online payments.
                        The internet
                        offers
                        the convenience and ease of buying goods or paying for services via your computer, tablet or mobile
                        phones.
                        However,
                        the
                        use of online payments is not without its risks. According to experts in the financial sector,
                        Nigeria loses
                        about
                        N200
                        billion per year to cybercrime.
                    </p>
                    <div style="background-color: #033B4D; color:white!important; padding: 20px 40px; margin-top:20px;">
                        <p style="color: white;"><b>Examples of threats piercing the Digital Financial Services (DFS)
                                are:</b></p>
                        <ul>
                            <li style="font-size: 1.0em;"><b>Insider Fraud</b></li>
                            <p style="color:white!important;">
                                Insider fraud involves an individual who works in the organization and has access to all
                                vital information
                                within the
                                organisation. Such individuals use this privilege to steal private information such as bank
                                account numbers,
                                identity
                                cards, etc to adopt peoples’ identities and engage in fraud.
                                Tips:
                                1. Never give your sensitive/confidential information such as account number, debit card,
                                credit card,
                                insurance
                                number,
                                etc over the phone or via email.
                                2. Reconcile your bank account monthly, and notify your bank of any discrepancies
                                immediately.
                                3. Report unauthorized financial transactions to your bank as soon as you detect them.
                            </p>

                        </ul>
                        <ul style="margin-top: 20px">
                            <li style="font-size: 1.0em;"><b>Phishing:</b></li>
                            <p style="color:white!important;">
                                Phishing is a type of social engineering where an attacker sends a fraudulent message
                                designed to trick a
                                person into
                                revealing sensitive information to the attacker, or to deploy.Phishing has a simple approach
                                like an email
                                whcih
                                redirects victim to a malicious site which captures, and steals information used to
                                authenticate funds
                                transfers out of
                                the victim’s account.
                            </p>

                        </ul>
                    </div>


                    <h2 style="font-size: 1.5em;">Tips:</h2>
                    <ol>
                        <li>New phishing attack methods are being developed all the time, but they share commonalities that
                            can be
                            identified by
                            knowing what to look out for.
                            For example, a malicious website most likely would appear like http://www.xyz.com instead of
                            https://www.xyz.com. An
                            internet user should pay attention to the letter (s) at the end of the domain name which simply
                            indicates
                            that a website
                            is secure and safe to use.</li>
                        <li>
                            Do not click on a link in an email or instant message even if you know the sender. Hover over
                            the link to
                            double
                            check if the destination is the authentic domain.
                        </li>
                        <li>
                            Do not give your information to an unsecured website.
                        </li>
                        <li>Do not be tempted by pop-ups.</li>
                    </ol>


                </div>
            </div>
            {{-- <div class="col-md-6">
            
        </div> --}}
        </div>
    </div>

    <div class="container">
        <div class="back">
            <a href="{{ route('home') }}"> <i class="fa fa-home" aria-hidden="true"></i>
                Home</a>
        </div>
    </div>



@endsection
