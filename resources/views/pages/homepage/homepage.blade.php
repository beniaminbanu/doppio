@extends('layouts.web.default')

@push('styles')

    <link rel="stylesheet" href="{{ asset('plugins/owl/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/owl/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">

@endpush

@section('content')

    <section id="banner">
        <div class="d-none d-lg-block light-image"></div>
        <div class="container-fluid position-relative">
            <div class="owl-carousel owl-theme banner-carousel">
                <div class="item">
                    <div class="row align-items-center align-items-xl-start justify-content-center justify-content-xl-end">
                        <div
                            class="col-12 col-lg-8 col-xxl-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="headers">
                                <div class="heading">
                                    @include('layouts.web.includes.heading', [
                                                     'text' => 'ENJOY YOUR',
                                                     'text1' => '30%',
                                                     'text2' => 'OFFER',
                                                      'text3' => 'Coffee'
                                                 ])
                                </div>
                                <p class="description">
                                    <span>Lorem, ipsum dolor sit amet consectetur adipisicing</span>
                                    <span> elit. Praesentium ipsum autem officiis rem suscipit nostrum nihil iure cum omnis.</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xxl-5 flex-column align-items-center none">
                            <img class="offer-img" src="{{asset('images/banner-offer.png')}}" alt="">
                            @include('components.slogan')
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-start justify-content-end">
                        <div
                            class="col-12 col-lg-8 col-xl-5 d-flex flex-column align-items-center justify-content-center">
                            <div class="headers">
                                <div class="heading">
                                    @include('layouts.web.includes.heading', [
                                                     'text' => 'ENJOY YOUR',
                                                     'text1' => '30%',
                                                     'text2' => 'OFFER',
                                                      'text3' => 'Coffee'
                                                 ])
                                </div>
                                <p class="description">
                                    <span>Lorem, ipsum dolor sit amet consectetur adipisicing</span>
                                    <span> elit. Praesentium ipsum autem officiis rem suscipit nostrum nihil iure cum omnis.</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-5 flex-column align-items-center none">
                            <img class="offer-img" src="{{asset('images/banner-offer.png')}}" alt="">
                            @include('components.slogan')
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-start justify-content-end">
                        <div
                            class="col-12 col-lg-8 col-xl-5 d-flex flex-column align-items-center justify-content-center">
                            <div class="headers">
                                <div class="heading">
                                    @include('layouts.web.includes.heading', [
                                                     'text' => 'ENJOY YOUR',
                                                     'text1' => '30%',
                                                     'text2' => 'OFFER',
                                                      'text3' => 'Coffee'
                                                 ])
                                </div>
                                <p class="description">
                                    <span>Lorem, ipsum dolor sit amet consectetur adipisicing</span>
                                    <span> elit. Praesentium ipsum autem officiis rem suscipit nostrum nihil iure cum omnis.</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-5 flex-column align-items-center none">
                            <img class="offer-img" src="{{asset('images/banner-offer.png')}}" alt="">
                            @include('components.slogan')
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row align-items-start justify-content-end">
                        <div
                            class="col-12 col-lg-8 col-xl-5 d-flex flex-column align-items-center justify-content-center">
                            <div class="headers">
                                <div class="heading">
                                    @include('layouts.web.includes.heading', [
                                                     'text' => 'ENJOY YOUR',
                                                     'text1' => '30%',
                                                     'text2' => 'OFFER',
                                                      'text3' => 'Coffee'
                                                 ])
                                </div>
                                <p class="description">
                                    <span>Lorem, ipsum dolor sit amet consectetur adipisicing</span>
                                    <span> elit. Praesentium ipsum autem officiis rem suscipit nostrum nihil iure cum omnis.</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xl-5 flex-column align-items-center none">
                            <img class="offer-img" src="{{asset('images/banner-offer.png')}}" alt="">
                            @include('components.slogan')
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="menu-offer elenco-articoli">
                    <div class="offer-select ">
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
        </div>
    </section>
    <section id="andouille">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center move-up">
                <div class="col-12 col-md-8">
                    <div class="owl-carousel owl-theme andouille-carousel">
                        <div class="item">
                            @include('components.homepage.card-andouille')
                        </div>
                        <div class="item">
                            @include('components.homepage.card-andouille')
                        </div>
                        <div class="item">
                            @include('components.homepage.card-andouille')
                        </div>
                        <div class="item">
                            @include('components.homepage.card-andouille')
                        </div>
                        <div class="item">
                            @include('components.homepage.card-andouille')
                        </div>
                        <div class="item">
                            @include('components.homepage.card-andouille')
                        </div>
                        <div class="item">
                            @include('components.homepage.card-andouille')
                        </div>
                        <div class="item">
                            @include('components.homepage.card-andouille')
                        </div>
                        <div class="item">
                            @include('components.homepage.card-andouille')
                        </div>
                        <div class="item">
                            @include('components.homepage.card-andouille')
                        </div>
                        <div class="item">
                            @include('components.homepage.card-andouille')
                        </div>
                        <div class="item">
                            @include('components.homepage.card-andouille')
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-andouille">
                <h1>Andouille tri-tip burgdoggen strip steak since 2021!</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                    accumsan lacus vel facilisis.</p>
                @include('components.buttons.btn-link', [
                    'link' => '#',
                    'class' => 'about-doppio',
                    'text' => 'ABOUT DOPPIO'
                ])
            </div>
        </div>
    </section>
    <section id="offer">
        <div class="container-fluid container-offer">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-5 d-flex justify-content-end">
                    <div class="content">
                        <div class="title-section">
                            <p class="text-white">COFFEE DOLOR</p>
                            <p class="add-margin"><span class="span-normal">BEEF</span> <span
                                    class="span-adl">Offer</span></p>
                        </div>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                            Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                        @include('components.buttons.btn-link', [
                            'link' => '#',
                            'class' => 'contact-us',
                            'text' => 'CONTACT US'
                        ])
                    </div>
                </div>
            </div>
            @include('components.socials')
        </div>
        <img class="first-img" src="{{asset('images/people-coffee-shop.jpg')}}" alt="">
        <div class="second-img">
            <img src="{{asset('images/medium-shot-friends-coffee-shop.jpg')}}" alt="">
            @include('components.slogan')
        </div>
    </section>
    <section id="reservation">
        <div class="container-fluid d-flex flex-column align-items-center">
            <div class="title-section">
                <p>COME AND MAKE A</p>
                <p class="add-margin"><span class="span-normal">ONLINE</span> <span class="span-adl">Reservation</span>
                </p>
            </div>
            <div class="reservation-form">
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua</p>
                <div class="d-flex justify-content-center">
                    <img class="logo-final" src="{{ asset('images/Logo-Doppio_final-03.png') }}" alt="">
                </div>
                <form action="" id="myForm">
                    <div class="row">
                        <div class="col-12">
                            <div class="input-container">
                                @include('components.form.input', [
                                    'text' => 'text',
                                    'id' => 'fname',
                                    'class' => 'input-check',
                                    'name' => 'fullname',
                                    'placeholder' => '',
                                    'min' => '',
                                    'max' => '',
                                    'keypress' => 'return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)'
                                ])
                                <span>Full name</span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-container">
                                @include('components.form.input', [
                                    'text' => 'email',
                                    'id' => 'email',
                                    'class' => 'input-check',
                                    'name' => 'email',
                                    'placeholder' => '',
                                    'min' => '',
                                    'max' => '',
                                    'keypress' => ''
                                ])
                                <span>Email</span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-container">
                                <input type="number" id="pnumber" class="input input-check" name="phonenumber"
                                       placeholder=""
                                       oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                       type="number" maxlength="10">
                                <span>Phone number</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-container" id="input-timepicker">
                                <input type="text" id="timePicker" class="input input-check">
                                <span>Choose hour</span>
                                <svg class="down-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                     fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                </svg>
                                <svg class="close-svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                     fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                    <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-container number-container">
                                @include('components.form.input', [
                                    'text' => 'number',
                                    'id' => 'gnumber',
                                    'class' => 'input-check',
                                    'name' => 'grupnumber',
                                    'placeholder' => '',
                                    'min' => '1',
                                    'max' => '',
                                    'keypress' => ''
                                ])
                                <svg class="down-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                     fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                </svg>
                                <span>Grup number</span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-container textarea-container">
                                @include('components.form.textarea', [
                                    'class' => 'details input-check',
                                    'name' => 'details',
                                    'dataname' => 'details',
                                    'placeholder' => '',
                                    'text' => ''
                                ])
                                <span>Other details..</span>
                            </div>
                        </div>
                        @include('components.buttons.btn-normal', [
                            'class' => 'reservation',
                            'text' => 'MAKE A RESERVATION'
                        ])
                    </div>
                </form>
                @include('components.slogan')
                @include('components.slogan')
            </div>
        </div>
    </section>

    @include('pages.homepage.components.partners')

    <section id="menu">
        <div class="container-fluid">
            <div class="title-section">
                <p>WHAT WE HAVE</p>
                <p class="add-margin"><span class="span-normal">FOR YOU IN THE</span> <span class="span-adl">Menu</span>
                </p>
            </div>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua consectetur adipiscing elit, sed</p>
            <div class="carousel">
                <div class="owl-carousel owl-theme menu-carousel">
                    <div class="item">
                        <div class="container-image">
                            <img src="{{ asset('images/medium-shot-friends-coffee-shop-second.jpg') }}" alt="">
                        </div>
                        <div class="title">Coffee</div>
                    </div>
                    <div class="item">
                        <div class="container-image">
                            <img src="{{ asset('images/medium-shot-friends-coffee-shop-second.jpg') }}" alt="">
                        </div>
                        <div class="title">Other coffee type</div>
                    </div>
                    <div class="item">
                        <div class="container-image">
                            <img src="{{ asset('images/medium-shot-friends-coffee-shop-second.jpg') }}" alt="">
                        </div>
                        <div class="title">Another coffee</div>
                    </div>
                    <div class="item">
                        <div class="container-image">
                            <img src="{{ asset('images/medium-shot-friends-coffee-shop-second.jpg') }}" alt="">
                        </div>
                        <div class="title">Coffee</div>
                    </div>
                    <div class="item">
                        <div class="container-image">
                            <img src="{{ asset('images/medium-shot-friends-coffee-shop-second.jpg') }}" alt="">
                        </div>
                        <div class="title">Coffee</div>
                    </div>
                    <div class="item">
                        <div class="container-image">
                            <img src="{{ asset('images/medium-shot-friends-coffee-shop-second.jpg') }}" alt="">
                        </div>
                        <div class="title">Coffee</div>
                    </div>
                    <div class="item">
                        <div class="container-image">
                            <img src="{{ asset('images/medium-shot-friends-coffee-shop-second.jpg') }}" alt="">
                        </div>
                        <div class="title">Coffee</div>
                    </div>
                    <div class="item">
                        <div class="container-image">
                            <img src="{{ asset('images/medium-shot-friends-coffee-shop-second.jpg') }}" alt="">
                        </div>
                        <div class="title">Coffee</div>
                    </div>
                    <div class="item">
                        <div class="container-image">
                            <img src="{{ asset('images/medium-shot-friends-coffee-shop-second.jpg') }}" alt="">
                        </div>
                        <div class="title">Coffee</div>
                    </div>
                    <div class="item">
                        <div class="container-image">
                            <img src="{{ asset('images/medium-shot-friends-coffee-shop-second.jpg') }}" alt="">
                        </div>
                        <div class="title">Coffee</div>
                    </div>
                    <div class="item">
                        <div class="container-image">
                            <img src="{{ asset('images/medium-shot-friends-coffee-shop-second.jpg') }}" alt="">
                        </div>
                        <div class="title">Coffee</div>
                    </div>
                    <div class="item">
                        <div class="container-image">
                            <img src="{{ asset('images/medium-shot-friends-coffee-shop-second.jpg') }}" alt="">
                        </div>
                        <div class="title">Coffee</div>
                    </div>
                    <div class="item">
                        <div class="container-image">
                            <img src="{{ asset('images/medium-shot-friends-coffee-shop-second.jpg') }}" alt="">
                        </div>
                        <div class="title">Coffee</div>
                    </div>
                    <div class="item">
                        <div class="container-image">
                            <img src="{{ asset('images/medium-shot-friends-coffee-shop-second.jpg') }}" alt="">
                        </div>
                        <div class="title">Coffee</div>
                    </div>
                    <div class="item">
                        <div class="container-image">
                            <img src="{{ asset('images/medium-shot-friends-coffee-shop-second.jpg') }}" alt="">
                        </div>
                        <div class="title">Coffee</div>
                    </div>
                    <div class="item">
                        <div class="container-image">
                            <img src="{{ asset('images/medium-shot-friends-coffee-shop-second.jpg') }}" alt="">
                        </div>
                        <div class="title">Coffee</div>
                    </div>
                </div>
            </div>
            <p class="description second">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua</p>
            <div class="btn">
                @include('components.buttons.btn-link', [
                    'link' => '',
                    'class' => 'menu',
                    'text' => 'VIEW FULL MENU'
                ])
            </div>
        </div>
    </section>

    <section id="events">
        <div class="container-fluid">
            <div class="title-section">
                <p class="text-white">DO YOU HAVE PLANS?</p>
                <p class="add-margin"><span class="span-normal">HERE'S OUR</span> <span class="span-adl">Events</span>
                </p>
            </div>
            <div class="content">
                <div class="d-flex justify-content-end image">
                    <div class="image-container d-none d-xl-block">
                        <img src="{{ asset('images/events-image.png') }}" alt="">
                        @include('components.slogan')
                    </div>
                </div>
                <div class="d-none d-xl-block" id="counter"></div>
                <div class="owl-carousel owl-theme events-carousel">
                    <div class="item">
                        <div class="card">
                            <div class="title-section">
                                <p class="text-white">DOPPIO EVENTS</p>
                                <p class="add-margin"><span class="span-normal">COFFEE</span> <span class="span-adl">Party</span>
                                </p>
                            </div>
                            <div class="content-card">
                                <p><span>LOCATION:</span> Bucharest, RO</p>
                                <p><span>TYPE:</span> Social Party</p>
                                <p><span>SPECIAL GUEST:</span> Chef Catalin Popescu</p>
                                <p><span>DATE:</span> 20 Oct 2021, 19:00-23:00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="title-section">
                                <p class="text-white">DOPPIO EVENTS</p>
                                <p class="add-margin"><span class="span-normal">COFFEE</span> <span class="span-adl">Party</span>
                                </p>
                            </div>
                            <div class="content-card">
                                <p><span>LOCATION:</span> Bucharest, RO</p>
                                <p><span>TYPE:</span> Social Party</p>
                                <p><span>SPECIAL GUEST:</span> Chef Catalin Popescu</p>
                                <p><span>DATE:</span> 20 Oct 2021, 19:00-23:00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="title-section">
                                <p class="text-white">DOPPIO EVENTS</p>
                                <p class="add-margin"><span class="span-normal">COFFEE</span> <span class="span-adl">Party</span>
                                </p>
                            </div>
                            <div class="content-card">
                                <p><span>LOCATION:</span> Bucharest, RO</p>
                                <p><span>TYPE:</span> Social Party</p>
                                <p><span>SPECIAL GUEST:</span> Chef Catalin Popescu</p>
                                <p><span>DATE:</span> 20 Oct 2021, 19:00-23:00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <div class="title-section">
                                <p class="text-white">DOPPIO EVENTS</p>
                                <p class="add-margin"><span class="span-normal">COFFEE</span> <span class="span-adl">Party</span>
                                </p>
                            </div>
                            <div class="content-card">
                                <p><span>LOCATION:</span> Bucharest, RO</p>
                                <p><span>TYPE:</span> Social Party</p>
                                <p><span>SPECIAL GUEST:</span> Chef Catalin Popescu</p>
                                <p><span>DATE:</span> 20 Oct 2021, 19:00-23:00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('components.socials')
        </div>
    </section>
    <div class="image-mobile d-xl-none">
        <img src="{{ asset('images/events-image-phone.jpg') }}" alt="">
        @include('components.slogan')
    </div>

    @include('pages.homepage.components.blog')

    @include('pages.homepage.components.social-media')

    @include('pages.homepage.components.subscribe')


@endsection

@push('scripts')

    <script src="{{ asset('plugins/owl/owl.carousel2.min.js') }}"></script>
    <script src="{{asset('js/homepage.js')}}"></script>

@endpush
