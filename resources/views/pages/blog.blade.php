@extends('layouts.web.default')
@push('styles')
    <link rel="stylesheet" href="{{ asset('plugins/owl/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/owl/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endpush
@section('content')
    @include('layouts.web.includes.customheader')
    <section id="blog_banner">
        <div class="blog-wrapper">
            <div class="container">
                <div class="row justify-content-xl-between">
                    <div class="col-12 col-xl-5">
                        <div class="owl-carousel blog-article owl-theme">
                            <div class="item">
                                <div class="headers text-center text-xl-start">
                                    <div class="heading">
                                        <span>DOPPIO PUB.</span>
                                        <span class="d-block">THE NEW THING IN TOWN</span>
                                        <p>BY JOHN SNOW, 29, Aug 2021</p>
                                    </div>
                                    <div class="description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum
                                            dolor sit amet, consectetur adipiscing elit, sed do</p>
                                    </div>
                                    <div class="button ">
                                        @include('components.buttons.btn-link', [
                                            'link' => '',
                                            'class' => 'menu',
                                            'text' => 'READ MORE ABOUT'
                                        ])
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="headers text-center text-xl-start">
                                    <div class="heading">
                                        <span>DOPPIO PUB.</span>
                                        <span class="d-block">THE NEW THING IN TOWN</span>
                                        <p>BY JOHN SNOW, 29, Aug 2021</p>
                                    </div>
                                    <div class="description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum
                                            dolor sit amet, consectetur adipiscing elit, sed do</p>
                                    </div>
                                    <div class="button">
                                        @include('components.buttons.btn-link', [
                                            'link' => '',
                                            'class' => 'menu',
                                            'text' => 'READ MORE ABOUT'
                                        ])
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="image-wrapper text-center">
                            <img class="img-fluid" src="{{asset('images/medium-shot-friends-coffee-shopblog.jpg')}}"
                                 alt="image">
                            @include('components.slogan')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="articles">
        <div class="more_articles">
            <div class="container container_blog">
                <div
                    class="article_wrapper d-flex flex-xl-row flex-column  align-items-center justify-content-xl-between">
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
        <div class="another_articles ">
            <div class="container container_blog">
                <span class="topic">TOPICS</span>
                <div class="headers">
                    <div class="heading d-flex align-items-baseline">
                        @include('layouts.web.includes.heading', [
                                         'text' => 'CAFEA',
                                         'text1' => 'MACINATA',
                                         'text2' => '',
                                          'text3' => ""
                                     ])
                    </div>
                    <div class="description">
                        <p class="simple-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem
                            ipsum dolor
                            sit amet, consectetur adipiscing elit, sed do</p>
                    </div>
                </div>
                <div
                    class="article_wrapper d-flex flex-xl-row flex-column  align-items-center justify-content-xl-between">
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
                <div class="button">
                    @include('components.buttons.btn-link', [
                        'link' => '',
                        'class' => 'menu',
                        'text' => 'SEE MORE ARTICLES'
                    ])
                </div>
            </div>
        </div>
        <div class="anotherOne_articles ">
            <div class="container container_blog">
                <div class="headers">
                    <div class="heading d-flex align-items-baseline">
                        @include('layouts.web.includes.heading', [
                                         'text' => 'CAFEA',
                                         'text1' => 'MACINATA',
                                         'text2' => '',
                                          'text3' => ""
                                     ])
                    </div>
                    <div class="description">
                        <p class="simple-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem
                            ipsum dolor
                            sit amet, consectetur adipiscing elit, sed do</p>
                    </div>
                </div>
                <div
                    class="article_wrapper d-flex flex-xl-row flex-column  align-items-center justify-content-xl-between">
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
                <div class="button">
                    @include('components.buttons.btn-link', [
                        'link' => '',
                        'class' => 'menu',
                        'text' => 'SEE MORE ARTICLES'
                    ])
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
                <p>Consectetur adipiscing elit, sed Lorem ipsum dolor sit amet, co Consectetur adipiscing elit, sed Lorem ipsum dolor sit amet, co Consectetur adipiscing elit, sed Lorem ipsum dolor sit amet, co</p>
            </div>
        </div>
        <div class="article_wrapper">
            <div class="container container_blog">
                <div class="owl-carousel top_slider owl-theme">
                    <div class="item">
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
                    <div class="item">
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
                    <div class="item">
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
                    <div class="item">
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
                    <div class="item">
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
    <script src="{{asset('js/blog.js')}}"></script>
@endpush
