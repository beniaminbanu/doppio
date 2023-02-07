<section id="blog">
    <div>
        <div class="logo">
            <img src="{{ asset('images/logo-Doppio.png') }}" alt="" class="logo-image">
            <img src="{{ asset('images/Logo-Doppio_final-03.png') }}" alt="" class="background-image d-none d-xl-block">
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        </div>
        <div class="title-section">
            <p class="first">WANNA KNOW</p>   
            <p class="add-margin"><span>MORE ABOUT?</span> <span class="span-adl">Our Blog</span></p>
        </div>
        <div class="container-card">
            <div class="owl-carousel owl-theme blog-carousel">
                <div class="item">
                    @include('components.homepage.card-blog')
                </div>
                <div class="item">
                    @include('components.homepage.card-blog')
                </div>
                <div class="item">
                    @include('components.homepage.card-blog')
                </div>
                <div class="item">
                    @include('components.homepage.card-blog')
                </div>
            </div>
            @include('components.buttons.btn-link', [
                'link' => '',
                'class' => 'blog',
                'text' => 'VIEW OUR BLOG'
            ])
            <div class="image-blog">
                <img src="{{ asset('images/medium-shot-friends-coffee-shop.jpg') }}" alt="">
                @include('components.slogan')
            </div>
        </div>
    </div>
</section>