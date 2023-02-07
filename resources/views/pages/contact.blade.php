@extends('layouts.web.default')
@push('styles')
    <link rel="stylesheet" href="{{ asset('plugins/owl/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/owl/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
    <section id="contact_banner" class="d-flex flex-column justify-content-center align-items-center">
        <div class="content_banner">
            <div class="headers">
                <div class="heading">
                    @include('layouts.web.includes.heading', [
                                     'text' => 'IF YOU HAVE',
                                     'text1' => 'QUESTIONS,',
                                     'text2' => '',
                                      'text3' => 'Write Us'
                                 ])
                </div>
                <div class="description text-center">
                    <p>Vrei sa ne dai un semn? Iata programul nostru:</p>
                </div>
            </div>
            <div class="program d-flex flex-column justify-content-center align-items-center">
                <div class="ora">
                    <h4 class=" text-center d-lg-flex">PROGRAM:<p>LUNI - DUMINICA 09:00 21:00</p></h4>
                    <span class="d-block text-center">(ultima comanda se face la ora 20:30)</span>
                </div>
                <div class="comanda d-lg-flex">
                    <p>COMANDA LA NR.<span>8909</span> SAU</p><span class="d-block d-xl-inline-flex text-center">+40 730 000 000</span>
                </div>
            </div>
        </div>
        @include('components.socials')
    </section>
    <section id="formular">
        <div class="headers text-center">
            <div class="heading">
                @include('layouts.web.includes.heading', [
                                 'text' => 'IF YOU HAVE ANY LAST WORDS',
                                 'text1' => '',
                                 'text2' => '',
                                  'text3' => "Now its the time"
                             ])
            </div>
            <div class="description text-center">
                <p class="simple-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor
                    sit amet, consectetur adipiscing elit, sed do</p>
            </div>
        </div>
        <div class="container-lg">
            <div class="reservation-form d-flex flex-column align-items-center">
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
                        <div class="col-12">
                            <div class="check d-flex">
                                <input id="checked" type="checkbox" name="checkbox" value="value">
                                <label class="labe" for="checked">
                                </label>
                                <p class="simple-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incidunt und labore et dolore magna
                                    aliqua.</p>
                            </div>
                            @include('components.buttons.btn-normal', [
                                'class' => 'reservation',
                                'text' => 'SEND MESSAGE'
                            ])
                        </div>
                    </div>
                </form>
                @include('components.slogan')
                @include('components.slogan')
            </div>
        </div>
    </section>
    <section id="location">
        <div class="headers text-center">
            <div class="heading">
                @include('layouts.web.includes.heading', [
                                 'text' => 'WHERE CAN YOU',
                                 'text1' => '',
                                 'text2' => '',
                                  'text3' => "Find us"
                             ])
            </div>
            <div class="description text-center">
                <p class="simple-text">Lorem ipsum dolor sit amet, consecteur adipiscing;</p>
            </div>
        </div>
        <div class="location">
            <div class="location_map d-flex justify-content-center">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1007.1941186219588!2d26.11298267382773!3d44.43777401417954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1ff30ae3dd37b%3A0xffc8fa90f91d9c94!2sCalea%20Mo%C8%99ilor%20121%2C%20Bucure%C8%99ti%20030167!5e0!3m2!1sro!2sro!4v1639653622275!5m2!1sro!2sro"
                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="cards_info">
                <div class="container-lg">
                    <div class="test">
                        <div class="row">
                            <div class="col-12  col-md-6 col-lg-4">
                                <div
                                    class="card_box mx-auto d-flex flex-column justify-content-center align-items-center">
                                    <div class="image text-center">
                                        <img src="{{asset("images/pin.png")}}" alt="image">
                                    </div>
                                    <div class="info text-center">
                                        <h3 class="mini-header">
                                            LOCATIE
                                        </h3>
                                        <p>Str. Calea Mosilor 121, Sector 1, <span class="d-block"> Bucuresti
                                        </span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 ">
                                <div
                                    class="card_box mx-auto   d-flex flex-column justify-content-center align-items-center">
                                    <div class="image text-center">
                                        <img src="{{asset("images/phone-call.png")}}" alt="image">
                                    </div>
                                    <div class="info text-center">
                                        <h3 class="mini-header">
                                            NR. CONTACT
                                        </h3>
                                        <p>*8909 <span class="d-block"> +40 730 000 000
                                        </span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div
                                    class="card_box mx-auto   d-flex flex-column justify-content-center align-items-center">
                                    <div class="image text-center">
                                        <img src="{{asset("images/email.png")}}" alt="image">
                                    </div>
                                    <div class="info text-center">
                                        <h3 class="mini-header">
                                            EMAIL
                                        </h3>
                                        <p> contact@doppio.com</p>
                                    </div>
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
        <script src="{{asset('js/contact.js')}}"></script>

@endpush
