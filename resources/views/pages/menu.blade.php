@extends('layouts.web.default')
@push('styles')
    <link rel="stylesheet" href="{{ asset('plugins/owl/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/owl/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
@endpush

@section('content')
    <section id="menu_banner">
        <div class="container">
            <div class="menu_wrapper">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-lg-7">
                        <div class="menu_info text-center text-xl-start">
                            <div class="heading d-none d-lg-block">
                                @include('layouts.web.includes.heading', [
                                                 'text' => 'ENJOY OUR',
                                                 'text1' => 'COFFEE',
                                                 'text2' => '',
                                                  'text3' => 'Menu'
                                             ])

                            </div>
                            <div class="heading d-block d-lg-none">
                                @include('layouts.web.includes.heading', [
                                                 'text' => 'ENJOY YOUR',
                                                 'text1' => 'COFFEE',
                                                 'text2' => '',
                                                  'text3' => 'Menu'
                                             ])

                            </div>
                            <div class="description text-center text-xl-start">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit
                                    amet, consectetur adipiscing elit, sed do</p>
                            </div>
                        </div>
                        @include('components.socials')
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="{{asset('images/people-coffee-shop.jpg')}}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="menu">
        <div class="headers text-center">
            <div class="heading">
                @include('layouts.web.includes.heading', [
                                 'text' => 'THERE ARE OUR MAIN',
                                 'text1' => 'SORTIMENTS OF COFFEE',
                                 'text2' => '',
                                  'text3' => ""
                             ])
            </div>
            <div class="description text-center">
                <p class="simple-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor
                    sit amet, consectetur adipiscing elit, sed do</p>
            </div>
        </div>
        <div class="meniu-oferte">
            <div class="container-lg">
                <div class="oferte">
                    <div class="owl-carousel menu_slider owl-theme">
                        <div class="item">
                            <div class="choose text-center">
                                <span>Cafea cu boabe</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="choose text-center">
                                <span>Cafea  macinata</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="choose text-center">
                                <span>Croasante</span>
                            </div>

                        </div>
                        <div class="item">
                            <div class="choose text-center">
                                <span>Cafele expresso</span>
                            </div>

                        </div>
                        <div class="item">
                            <div class="choose text-center">
                                <span class="active">oferte doppio</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products">
                    <div class="product">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="{{asset('images/product.jpg')}}" alt="image">
                        </div>

                        <div class="product_info">
                            <div class="headers">
                                @include('layouts.web.includes.price_title', [
                                                 'text1' => 'Cafea',
                                                 'text2' => 'AMARA SI RECE'
                                             ])
                                <span class="second_title">Ingrediente:</span>
                            </div>
                            <div class="content_info">
                                <div class="ingredients">
                                    <ul class="list">
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <p class="d-flex">18<span>.99 RON</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product reverse">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="{{asset('images/product.jpg')}}" alt="image">
                        </div>

                        <div class="product_info">
                            <div class="headers">
                                @include('layouts.web.includes.price_title', [
                                                 'text1' => 'Cafea',
                                                 'text2' => 'AMARA SI RECE'
                                             ])
                                <span class="second_title">Ingrediente:</span>
                            </div>
                            <div class="content_info">
                                <div class="ingredients">
                                    <ul class="list">
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</li>
                                    </ul>
                                </div>
                                <div class="price">
                                    <p class="d-flex">18<span>.99 RON</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('pages.homepage.components.partners')
    @include('pages.homepage.components.social-media')
    @include('pages.homepage.components.subscribe')

@endsection
@push('scripts')
    <script src="{{ asset('plugins/owl/owl.carousel2.min.js') }}"></script>
    <script src="{{asset('js/menu.js')}}"></script>
@endpush

