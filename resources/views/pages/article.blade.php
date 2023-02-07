@extends('layouts.web.default')
@push('styles')
    <link rel="stylesheet" href="{{ asset('plugins/owl/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/owl/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/article.css') }}">
@endpush
@section('content')
    @include('layouts.web.includes.customheader')
    <section id="article_idea">
        <div class="article_wrapper">
            <div class="container container_blog">
                <div class="row justify-content-center justify-content-xl-evenly">
                    <div class="col-12 col-lg-6">
                        <div class="image_wrapper text-center text-xl-start">
                            <img class="img-fluid" src="{{asset('images/medium-shot-friends-coffee-shopblog.jpg')}}"
                                 alt="image">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5">
                        <div class="description_wrapper">
                            <span class="current d-none d-xl-block"> Cafea macinata</span>
                            <div class="heading">
                                <h4 class="mini-header">Doppio pub. The new thing in the town it's coming</h4>
                            </div>
                            <div class="author">
                                <p>By John Snow <span>  29, Aug 2021</span>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="article_content">
            <div class="container-xl container_blog">
                <div class="row">
                    <div class="col-12 col-xl-3 order-2 order-xl-1">
                        <span class="share text-center d-block">Share this article on:</span>
                        <div class="socials d-flex flex-column align-items-center">
                            <a class="btn" href="#" title="Twitter">Twitter</a>
                            <a class="btn" href="#" title="Facebook">Facebook</a>
                            <a class="btn" href="#" title="Instagram">Instagram</a>
                        </div>

                    </div>
                    <div class="col-12 col-xl-9 order-1 order-xl-2">
                        <div class="article_text">
                            <span class="info">
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            </span>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit
                                    amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit
                                    amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor
                                    sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit
                                    amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do</p>
                            </div>
                        </div>
                        <div class="article_text">
                            <h4 class="mini-header">Doppio pub. The new thing in the town it’s coming</h4>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit
                                    amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit
                                    amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor
                                    sit amet, consectetur adipiscing elit, sed do Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit
                                    amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do</p>

                                <ul class="list">
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor
                                        sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed doorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    </li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor
                                        sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed doorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    </li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor
                                        sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed doorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    </li>
                                </ul>
                                <div class="description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor
                                        sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do</p>
                                </div>
                            </div>
                        </div>
                        <div class="article_text">
                            <h4 class="mini-header">Doppio pub. The new thing in the town it’s coming</h4>
                            <div class="description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit
                                    amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit
                                    amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do</p>

                                <ul class="list">
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor
                                        sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed doorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    </li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor
                                        sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed doorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    </li>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor
                                        sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed doorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.web.includes.subscribe2')
    <section id="top_articles">
        <div class="headers text-center">
            <div class="heading d-none d-xl-block">
                @include('layouts.web.includes.heading', [
                                 'text' => 'TOP READED ARTICLES',
                                 'text1' => 'FROM DOPPIO',
                                 'text2' => '',
                                  'text3' => ''
                             ])
            </div>
            <div class="heading d-block d-xl-none">
                @include('layouts.web.includes.heading', [
                                 'text' => "SO WHAT'S THE STORY",
                                 'text1' => 'BEHIND DOPPIO',
                                 'text2' => '',
                                  'text3' => ''
                             ])
            </div>
            <div class="description text-center">
                <p>Consectetur adipiscing elit, sed Lorem ipsum dolor sit amet, co Consectetur adipiscing elit, sed
                    Lorem ipsum dolor sit amet, co Consectetur adipiscing elit, sed Lorem ipsum dolor sit amet, co</p>
            </div>
        </div>
        <div class="article_wrapper">
            <div class="container container_blog">
                <div class="row">
                    <div class="col-6 col-lg-3">
                        <div class="blog-card">
                            <div class="body">
                                <div class="image-wrapper text-center">
                                    <img class="img-fluid" src="{{asset('images/people-coffee-shopblog.jpg')}}"
                                         alt="image">
                                </div>
                                <div class="content-card">
                                    <h4 class="mini-header">DOPPIO PUB. THE NEW THING IN THE TOWN</h4>
                                    <div class="author">
                                        <p>By John Snow</p>
                                        <span>29 August 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="blog-card">
                            <div class="body">
                                <div class="image-wrapper text-center">
                                    <img class="img-fluid" src="{{asset('images/people-coffee-shopblog.jpg')}}"
                                         alt="image">
                                </div>
                                <div class="content-card">
                                    <h4 class="mini-header">DOPPIO PUB. THE NEW THING IN THE TOWN</h4>
                                    <div class="author">
                                        <p>By John Snow</p>
                                        <span>29 August 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="blog-card">
                            <div class="body">
                                <div class="image-wrapper text-center">
                                    <img class="img-fluid" src="{{asset('images/people-coffee-shopblog.jpg')}}"
                                         alt="image">
                                </div>
                                <div class="content-card">
                                    <h4 class="mini-header">DOPPIO PUB. THE NEW THING IN THE TOWN</h4>
                                    <div class="author">
                                        <p>By John Snow</p>
                                        <span>29 August 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="blog-card">
                            <div class="body">
                                <div class="image-wrapper text-center">
                                    <img class="img-fluid" src="{{asset('images/people-coffee-shopblog.jpg')}}"
                                         alt="image">
                                </div>
                                <div class="content-card">
                                    <h4 class="mini-header">DOPPIO PUB. THE NEW THING IN THE TOWN</h4>
                                    <div class="author">
                                        <p>By John Snow</p>
                                        <span>29 August 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="blog-card">
                            <div class="body">
                                <div class="image-wrapper text-center">
                                    <img class="img-fluid" src="{{asset('images/people-coffee-shopblog.jpg')}}"
                                         alt="image">
                                </div>
                                <div class="content-card">
                                    <h4 class="mini-header">DOPPIO PUB. THE NEW THING IN THE TOWN</h4>
                                    <div class="author">
                                        <p>By John Snow</p>
                                        <span>29 August 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="blog-card">
                            <div class="body">
                                <div class="image-wrapper text-center">
                                    <img class="img-fluid" src="{{asset('images/people-coffee-shopblog.jpg')}}"
                                         alt="image">
                                </div>
                                <div class="content-card">
                                    <h4 class="mini-header">DOPPIO PUB. THE NEW THING IN THE TOWN</h4>
                                    <div class="author">
                                        <p>By John Snow</p>
                                        <span>29 August 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="blog-card">
                            <div class="body">
                                <div class="image-wrapper text-center">
                                    <img class="img-fluid" src="{{asset('images/people-coffee-shopblog.jpg')}}"
                                         alt="image">
                                </div>
                                <div class="content-card">
                                    <h4 class="mini-header">DOPPIO PUB. THE NEW THING IN THE TOWN</h4>
                                    <div class="author">
                                        <p>By John Snow</p>
                                        <span>29 August 2021</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="blog-card">
                            <div class="body">
                                <div class="image-wrapper text-center">
                                    <img class="img-fluid" src="{{asset('images/people-coffee-shopblog.jpg')}}"
                                         alt="image">
                                </div>
                                <div class="content-card">
                                    <h4 class="mini-header">DOPPIO PUB. THE NEW THING IN THE TOWN</h4>
                                    <div class="author">
                                        <p>By John Snow</p>
                                        <span>29 August 2021</span>
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
@endpush
