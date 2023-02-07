@extends('layouts.web.default')
@push('styles')

    <link rel="stylesheet" href="{{ asset('plugins/owl/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/owl/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">


@endpush
@section('content')
    <section id="coffe-banner" class="d-flex flex-column justify-content-center align-items-center">
        <div class="headers">
            <div class="heading">
                @include('layouts.web.includes.heading', [
                                 'text' => 'YEAH, WE KNOW..',
                                 'text1' => 'ANOTHER',
                                 'text2' => 'COFFEE SHOP.',
                                  'text3' => 'But different'
                             ])
            </div>
            <div class="description text-center">
                <p>Avem un gust aparte. La propriu si la figurat..</p>
            </div>
        </div>
        <div class="oferte">
            <div class="menu-offer elenco-articoli">
                <div class="offer-select">
                    <span>TAKE AWAY</span>
                    <img src="{{asset("images/coffee-shop.svg")}}" alt="">
                </div>
                <div class="offer-select">
                    <span>TAKE AWAY</span>
                    <img src="{{asset("images/coffee.svg")}}" alt="">
                </div>
                <div class="offer-select active-menu-offer">
                    <span>TAKE AWAY</span>
                    <img src="{{asset("images/take-away.svg")}}" alt="">
                </div>
                <div class="offer-select">
                    <span>TAKE AWAY</span>
                    <img src="{{asset("images/coffee-beans.svg")}}" alt="">
                </div>
                <div class="offer-select">
                    <span>TAKE AWAY</span>
                    <img src="{{asset("images/croissant.svg")}}" alt="">
                </div>
            </div>
        </div>
        @include('components.socials')
    </section>
    <section id="story">
        <div class="headers text-center">
            <div class="heading">
                @include('layouts.web.includes.heading', [
                                 'text' => 'SO WHAT S THE STORY',
                                 'text1' => 'BEHIND DOPPIO?',
                                 'text2' => '',
                                  'text3' => ''
                             ])
            </div>
            <div class="description text-center">
                <p class="bold-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor
                    sit amet, consectetur adipiscing elit, sed do</p>
                <p class="simple-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor
                    sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing
                    elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
            </div>
        </div>
        <div class="services">
            <div class="container">
                <div class="servicer d-none d-xl-block">
                    <div class="row">
                        <div class="col-4">
                            <div
                                class="service-card m-xl-auto d-flex flex-column justify-content-center align-items-center mb-xl-4">
                                <div class="image">
                                    <img class="img-fluid" src="{{asset("images/coffee-shop.png")}}" alt="image">
                                </div>
                                <div class="info text-center">
                                    <h3 class="mini-header">
                                        CAFEA PROASPATA
                                    </h3>
                                    <p>Lorem ipsum dolor it amet, consectetur adipiscingsit amet, consectetur adipiscing<span> elit ipsum d
                                        </span></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div
                                class="service-card m-xl-auto  d-flex flex-column justify-content-center align-items-center mb-xl-4">
                                <div class="image">
                                    <img class="img-fluid" src="{{asset("images/coffee-shop.png")}}" alt="image">
                                </div>
                                <div class="info text-center">
                                    <h3 class="mini-header">
                                        CAFEA PROASPATA
                                    </h3>
                                    <p>Lorem ipsum dolor it amet, consectetur adipiscingsit amet, consectetur adipiscing<span> elit ipsum d
                                        </span></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div
                                class="service-card m-xl-auto  d-flex flex-column justify-content-center align-items-center mb-xl-4">
                                <div class="image">
                                    <img class="img-fluid" src="{{asset("images/coffee-shop.png")}}" alt="image">
                                </div>
                                <div class="info text-center">
                                    <h3 class="mini-header">
                                        CAFEA PROASPATA
                                    </h3>
                                    <p>Lorem ipsum dolor it amet, consectetur adipiscingsit amet, consectetur adipiscing<span> elit ipsum d
                                        </span></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div
                                class="service-card m-xl-auto  d-flex flex-column justify-content-center align-items-center">
                                <div class="image">
                                    <img class="img-fluid" src="{{asset("images/coffee-shop.png")}}" alt="image">
                                </div>
                                <div class="info text-center">
                                    <h3 class="mini-header">
                                        CAFEA PROASPATA
                                    </h3>
                                    <p>Lorem ipsum dolor it amet, consectetur adipiscingsit amet, consectetur adipiscing<span> elit ipsum d
                                        </span></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div
                                class="service-card m-xl-auto  d-flex flex-column justify-content-center align-items-center">
                                <div class="image">
                                    <img class="img-fluid" src="{{asset("images/coffee-shop.png")}}" alt="image">
                                </div>
                                <div class="info text-center">
                                    <h3 class="mini-header">
                                        CAFEA PROASPATA
                                    </h3>
                                    <p>Lorem ipsum dolor it amet, consectetur adipiscingsit amet, consectetur adipiscing<span> elit ipsum d
                                        </span></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div
                                class="service-card m-xl-auto  d-flex flex-column justify-content-center align-items-center">
                                <div class="image">
                                    <img class="img-fluid" src="{{asset("images/coffee-shop.png")}}" alt="image">
                                </div>
                                <div class="info text-center">
                                    <h3 class="mini-header">
                                        CAFEA PROASPATA
                                    </h3>
                                    <p>Lorem ipsum dolor it amet, consectetur adipiscingsit amet, consectetur adipiscing<span> elit ipsum d
                                        </span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel service owl-theme d-block d-xl-none">
                    <div class="item">
                        <div class="service-card d-flex flex-column justify-content-center align-items-center">
                            <div class="image">
                                <img class="img-fluid" src="{{asset("images/coffee-shop.png")}}" alt="image">
                            </div>
                            <div class="info text-center">
                                <h3 class="mini-header">
                                    CAFEA PROASPATA
                                </h3>
                                <p>Lorem ipsum dolor it amet, consectetur adipiscingsit amet, consectetur
                                    adipiscing<span> elit ipsum d
                                        </span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-card d-flex flex-column justify-content-center align-items-center">
                            <div class="image">
                                <img class="img-fluid" src="{{asset("images/coffee-shop.png")}}" alt="image">
                            </div>
                            <div class="info text-center">
                                <h3 class="mini-header">
                                    CAFEA PROASPATA
                                </h3>
                                <p>Lorem ipsum dolor it amet, consectetur adipiscingsit amet, consectetur
                                    adipiscing<span> elit ipsum d
                                        </span></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-card d-flex flex-column justify-content-center align-items-center">
                            <div class="image">
                                <img class="img-fluid" src="{{asset("images/coffee-shop.png")}}" alt="image">
                            </div>
                            <div class="info text-center">
                                <h3 class="mini-header">
                                    CAFEA PROASPATA
                                </h3>
                                <p>Lorem ipsum dolor it amet, consectetur adipiscingsit amet, consectetur
                                    adipiscing<span> elit ipsum d
                                        </span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="subheaders">
            <div class="description text-center">
                <p class="simple-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor
                    sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing
                    elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                <p class="bold-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor
                    sit amet, consectetur adipiscing elit, sed do</p>

            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="about-wrapper">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-5">
                        <div class="contact-info text-center text-xl-start">
                            <div class="heading">
                                @include('layouts.web.includes.heading', [
                                                 'text' => 'COFFEE DOLOR',
                                                 'text1' => 'BEEF',
                                                 'text2' => '',
                                                  'text3' => 'Offer'
                                             ])
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit
                                    amet, consectetur adipiscing elit, sed do</p>
                            </div>
                            @include('components.buttons.btn-link', [
                                 'link' => '',
                                 'class' => 'main-button',
                                 'text' => 'contact us'
                             ])
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="{{asset('images/people-coffee-shop2.jpg')}}" alt="image">


                            @include('components.slogan')

                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-wrapper">
                <div class="main-blog">
                    <div class="headers text-center text-xl-start">
                        <div class="heading">
                            @include('layouts.web.includes.heading', [
                                             'text' => 'WANNA KNOW MORE ABOUT US?',
                                             'text1' => '',
                                             'text2' => '',
                                              'text3' => 'Our Blog'
                                         ])
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="owl-theme blog owl-carousel">
                            <div class="item">
                                <div class="blog-card">
                                    <div class="body">
                                        <img src="{{asset('images/medium-shot-friends-coffee-shop.jpg')}}" alt="image">
                                        <div class="content-card">
                                            <h4 class="mini-header">DOPPIO PUB. THE NEW THING IN THE TOWN</h4>
                                            <div class="author">
                                                <p>By John Snow</p>
                                                <span>29 August 2021</span>
                                            </div>
                                            <div class="description">
                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem
                                                    ipsum dolor
                                                    sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit
                                                    amet,
                                                    consectetur adipiscing
                                                    elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed
                                                    do</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog-card">
                                    <div class="body">
                                        <img src="{{asset('images/medium-shot-friends-coffee-shop.jpg')}}" alt="image">
                                        <div class="content-card">
                                            <h4 class="mini-header">DOPPIO PUB. THE NEW THING IN THE TOWN</h4>
                                            <div class="author">
                                                <p>By John Snow</p>
                                                <span>29 August 2021</span>
                                            </div>
                                            <div class="description">
                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem
                                                    ipsum dolor
                                                    sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit
                                                    amet,
                                                    consectetur adipiscing
                                                    elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed
                                                    do</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog-card">
                                    <div class="body">
                                        <img src="{{asset('images/medium-shot-friends-coffee-shop.jpg')}}" alt="image">
                                        <div class="content-card">
                                            <h4 class="mini-header">DOPPIO PUB. THE NEW THING IN THE TOWN</h4>
                                            <div class="author">
                                                <p>By John Snow</p>
                                                <span>29 August 2021</span>
                                            </div>
                                            <div class="description">
                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem
                                                    ipsum dolor
                                                    sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit
                                                    amet,
                                                    consectetur adipiscing
                                                    elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed
                                                    do</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('components.buttons.btn-link', [
                              'link' => '',
                              'class' => 'main-button',
                              'text' => 'view our blog'
                          ])
            </div>
        </div>
    </section>
    @include('pages.homepage.components.partners')
    <section id="number">
        <div class="container">
            <div class="about-wrapper">
                <div class="headers ">
                    <div class="heading d-none d-lg-block">
                        @include('layouts.web.includes.heading', [
                                         'text' => 'WANNA KNOW',
                                         'text1' => '',
                                         'text2' => 'MORE ABOUT?',
                                          'text3' => 'Our Numbers'
                                     ])
                    </div>
                    <div class="heading d-block d-lg-none">
                        @include('layouts.web.includes.heading', [
                                         'text' => 'WANNA KNOW',
                                         'text1' => '',
                                         'text2' => 'MORE ABOUT?',
                                          'text3' => 'Our Blog'
                                     ])
                    </div>
                </div>
                <div class="numbers-wrapper">
                    <div class="row justify-content-center justify-content-lg-around">
                        <div class="col-12 col-lg-6 col-xl-5">
                            <div class="image-wrapper">
                                <img class="img-fluid" src="{{asset('images/people-coffee-shopmedium.jpg')}}" alt="image">

                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-5">
                            <div class="numbers text-center text-xl-start ">
                                <div class="moreinfo">
                                    <h4 class="mini-header">+20,000 customers</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum
                                        dolor sit amet, consectetur adipiscing elit, sed do</p>
                                </div>
                                <div class="moreinfo">
                                    <h4 class="mini-header">Super offers</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum
                                        dolor sit amet, consectetur adipiscing elit, sed do</p>
                                </div>
                                <div class="moreinfo">
                                    <h4 class="mini-header">20 types of coffe</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum
                                        dolor sit amet, consectetur adipiscing elit, sed do</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('pages.homepage.components.social-media')
    @include('pages.homepage.components.subscribe')

@endsection
@push('scripts')

    <script src="{{ asset('plugins/owl/owl.carousel2.min.js') }}"></script>
    <script src="{{asset('js/about.js')}}"></script>



@endpush
