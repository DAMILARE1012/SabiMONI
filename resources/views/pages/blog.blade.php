@extends('layouts.master')

@section('title', 'Blog')

@section('content')
    {{-- -------------------------------------Jubotron Section------------------------------------- --}}
    <div class="blog-head">
        <div class="row">
            <div class="col-md-6 col-md-offset-1 blog-res-1">
                <div class="row blog-head1">
                    <h1 class="item1">How to Land a Job in Your Dream <br> Location? Ideas and Indider Stories</h1>
                </div>
                <div class="row blog-res-2">
                    <div class="col-md-1">
                        <img id="play" src="{{ url('/assets/images/blogLogo.png') }}" alt="image not found">

                    </div>
                    <div class="col-md-8 item2">
                        Lorem ipsum dolor, sit amet consectetur <br> adipisicing elit. Vitae cupiditate <br> voluptatem
                        magni
                        temporibus
                    </div>


                </div>

            </div>


        </div>
    </div>

    {{-- -------------------------------------News Section------------------------------------- --}}


    <div class="blog-content1">
        <div class="row blog-res-3">
            <div class="col-md-1">
                <ul class="blog-social">
                    <li class="fa fa-solid fa-thumbs-up"></li>
                    <li class="fa fa-facebook-f"></li>
                    <li class="fa fa-brands fa-twitter"></li>
                    <li class="fa fa-brands fa-linkedin"></li>
                    <li class="fa fa-solid fa-comments"></li>
                </ul>
            </div>
            <div class="col-md-11 bc1-item1">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid repellendus cumque eum deserunt dolorem sit
                numquam quaerat non eos? Recusandae doloribus omnis consectetur distinctio non a optio quisquam facere
                maxime. <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid repellendus cumque eum deserunt dolorem sit
                numquam quaerat non eos? Recusandae doloribus omnis consectetur distinctio non a optio quisquam facere
                maxime.<br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid repellendus cumque eum deserunt dolorem sit
                numquam quaerat non eos? Recusandae doloribus omnis consectetur distinctio non a optio quisquam facere
                maxime.<br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid repellendus cumque eum deserunt dolorem sit
                numquam quaerat non eos? Recusandae doloribus omnis consectetur distinctio non a optio quisquam facere
                maxime.<br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid repellendus cumque eum deserunt dolorem sit
                numquam quaerat non eos? Recusandae doloribus omnis consectetur distinctio non a optio quisquam facere
                maxime.<br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid repellendus cumque eum deserunt dolorem sit
                numquam quaerat non eos? Recusandae doloribus omnis consectetur distinctio non a optio quisquam facere
                maxime.


            </div>

        </div>
    </div>

    {{-- -------------------------------------Rating------------------------------------ --}}

    {{-- <div class="blog-content2">

        <div class="bc2-item1">

            <p>Rate my Article:</p>
            <span>How to land a job in your dream location</span>
        </div>
        <div class="bc2-item2">
            <span>Average: 4.63 (88 votes)</span>
        </div>
        <div class="bc2-item3">
            <i class="fa fa-solid fa-star"></i>
            <i class="fa fa-solid fa-star"></i>
            <i class="fa fa-solid fa-star"></i>
            <i class="fa fa-solid fa-star"></i>
            <i class="fa fa-solid fa-star"></i>
        </div>
    </div> --}}



    <div class="blog-content3">
        <div class="row bc3-item1">
            <div class="col-md-2 bc3-item1a">
                <img id="play" src="{{ url('/assets/images/blogLogo.png') }}" alt="image not found">
            </div>
            <div class="col-md-8">

                <h2>David Docker</h2>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid repellendus cumque eum deserunt dolorem
                    sit
                    numquam quaerat non eos? Recusandae doloribus omnis consectetur distinctio non a optio quisquam facere
                    maxime.</p>
                <div class="bc3-item2">
                    <i class="fa fa-brands fa-linkedin"></i>
                    <span>Linkedin</span>
                </div>
            </div>

        </div>
    </div>

    {{-- ---------------------------------Similar Article--------------------------------- --}}

    <div class="blog-content4">
        <h1 class="bc4-item1">Similar Articles</h1>
        <div class="row blog-res-4">
            <div class="col-md-3 bsa">
                <div class="bc4-item2">
                    <img src="{{ url('/assets/images/adeolu-eletu-unRkg2jH1j0-unsplash.jpg') }}" alt="No image found"
                        width="100%">
                    <div class="bc4-item3">
                        <p>LifeStyle</p>
                        <h4>Where To Look For Cheap Brochure Printing</h2>
                            <p>There is a moment in the live of any aspiring astronomer that it is timem to buy that first
                                telescope.</p>
                            <div class="bc4-item4"><span>David Docekr</span><span>04 JUN 2020</span></div>
                    </div>




                </div>
            </div>
            <div class="col-md-3 bsa">
                <div class="bc4-item2">
                    <img src="{{ url('/assets/images/adeolu-eletu-unRkg2jH1j0-unsplash.jpg') }}" alt="No image found"
                        width="100%">
                    <div class="bc4-item3">
                        <p>LifeStyle</p>
                        <h4>Where To Look For Cheap Brochure Printing</h2>
                            <p>There is a moment in the live of any aspiring astronomer that it is timem to buy that first
                                telescope.</p>
                            <div class="bc4-item4"><span>David Docekr</span><span>04 JUN 2020</span></div>
                    </div>

                </div>
            </div>
            <div class="col-md-3 bsa">
                <div class="bc4-item2">
                    <img src="{{ url('/assets/images/adeolu-eletu-unRkg2jH1j0-unsplash.jpg') }}" alt="No image found"
                        width="100%">
                    <div class="bc4-item3">
                        <p>LifeStyle</p>
                        <h4>Where To Look For Cheap Brochure Printing</h2>
                            <p>There is a moment in the live of any aspiring astronomer that it is timem to buy that first
                                telescope.</p>
                            <div class="bc4-item4"><span>David Docekr</span><span>04 JUN 2020</span></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 bsa">
                <div class="bc4-item2">
                    <img src="{{ url('/assets/images/adeolu-eletu-unRkg2jH1j0-unsplash.jpg') }}" alt="No image found"
                        width="100%">
                    <div class="bc4-item3">
                        <p>LifeStyle</p>
                        <h4>Where To Look For Cheap Brochure Printing</h2>
                            <p>There is a moment in the live of any aspiring astronomer that it is timem to buy that first
                                telescope.</p>
                            <div class="bc4-item4"><span>David Docekr</span><span>04 JUN 2020</span></div>
                    </div>
                </div>
            </div>

        </div>


    </div>

@endsection
