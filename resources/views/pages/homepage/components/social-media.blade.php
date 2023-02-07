<section id="social-media">
    <div>
        <div class="title-section">
            <p class="first">WANT NEWS?</p>
            <p class="add-margin"><span>FOLLOW US ON</span> <span class="span-adl">Social Media</span></p>
        </div>
        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur adipiscing elit, sed</p>
        <div class="content">
            <div class="carousel-container">
                <div class="owl-carousel owl-theme social-media-carousel">
                    <div class="item">
                        <img src="{{ asset('images/social-media-image.jpg') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/social-media-image.jpg') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/social-media-image.jpg') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/social-media-image.jpg') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/social-media-image.jpg') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/social-media-image.jpg') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/social-media-image.jpg') }}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/social-media-image.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="btns">
                <a href="" class="btn-link" target="_blank">
                    <span class="d-none d-xl-block">TWITTER</span>
                    <span class="d-xl-none">ON TWITTER</span>
                </a>
                <a href="" class="btn-link" target="_blank">
                    <span class="d-none d-xl-block">INSTAGRAM</span>
                    <span class="d-xl-none">ON INSTAGRAM</span>
                </a>
                <a href="" class="btn-link" target="_blank">
                    <span class="d-none d-xl-block">FACEBOOK</span>
                    <span class="d-xl-none">ON FACEBOOK</span>
                </a>
            </div>
            <p class="description-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
            <div class="slogan-container">
                @include('components.slogan')
                @include('components.slogan')
            </div>
        </div>
    </div>
</section>
@push('scripts')

@endpush
