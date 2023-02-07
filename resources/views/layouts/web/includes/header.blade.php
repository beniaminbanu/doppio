<div class="container-fluid d-flex justify-content-between">
    <a href="/" title="logo" class="logo d-flex align-items-center logo_change green">
        <svg width="259" height="47">
            <use xlink:href="#logo">
        </svg>
    </a>
    <div class="menu d-flex">
        <ul class="option">
            <li>
                <a href="/" title="Home">HOME</a>
            </li>
            <li>
                <a href="" title="About doppio">ABOUT DOPPIO</a>
            </li>
            <li>
                <a href="" title="Menu">MENU</a>
            </li>
            <li>
                <a href="" title="Events">EVENTS</a>
            </li>
            <li>
                <a href="" title="Blog">BLOG</a>
            </li>
            <li>
                <a href="" title="Contact">CONTACT</a>
            </li>
        </ul>
        <ul class="contact">
            <li>
                @include('components.languages')
            </li>
            <li>
                <a href="" target="tel:" class="d-flex">
                    <img src="{{asset('images/telephone-handle-silhouette.png')}}" alt="">
                    <p class="program flex-column">
                        <span>Zilnic</span>
                        <span>10:00 - 23:30</span>
                    </p>
                    <p>*8909</p>
                </a>
            </li>
            <li class="hamburger">
                <p></p>
                <p></p>
                <p></p>
            </li>
        </ul>
    </div>
    <div class="menu-hamburger">
        <div class="close-menu-hamburger">
            <div></div>
            <div></div>
        </div>
        <div class="menu">
            <div class="logo">
                <img alt="Logo"  src="{{asset('images/Logo-Doppio_final-01.png')}}"class="logo-hamburger img-fluid">
            </div>
            <ul class="option-menu-hamburger">
                <li>
                    <a href="/" title="Home">HOME</a>
                </li>
                <li>
                    <a href="" title="About doppio">ABOUT DOPPIO</a>
                </li>
                <li>
                    <a href="" title="Menu">MENU</a>
                </li>
                <li>
                    <a href="" title="Events">EVENTS</a>
                </li>
                <li>
                    <a href="" title="Blog">BLOG</a>
                </li>
                <li>
                    <a href="" title="Contact">CONTACT</a>
                </li>
            </ul>
            @include('components.buttons.btn-link', [
                'link' => '#',
                'class' => 'btn-reservation',
                'text' => 'Get reservation'
            ])
            <div class="contact-hamburger">
                <div class=" socials d-flex">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-envelope" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                        </svg>
                        <p>contact@doppio.com</p>
                    </a>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                  d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                        <p>Phone number: *8909</p>
                    </a>
                <a class="d-lg-flex d-none"  href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path
                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                    <p>Str. Fundulesti 13, Bucharest</p>
                </a>
                </div>
                <a class="d-flex d-lg-none mt-3"  href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path
                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                    <p>Str. Fundulesti 13, Bucharest</p>
                </a>
            </div>
            <div class="social-hamburger">
                <a href="" target="_blank">
                    <svg width="18" height="18">
                        <use xlink:href="#facebook">
                    </svg>
                    <p>Facebook</p>
                </a>
                <a href="" target="_blank">
                    <svg width="18" height="18">
                        <use xlink:href="#instagram">
                    </svg>
                    <p>Instagram</p>
                </a>
                <a href="" target="_blank">
                    <svg width="12" height="14">
                        <use xlink:href="#twitter">
                    </svg>
                    <p>Twitter</p>
                </a>
            </div>
            <div class="copyright">
                <p>© 2021 <span> DOPPIO PUB</span>.ALL RIGHT RESERVED.</p>
            </div>
        </div>
    </div>
</div>


@push('scripts')
    <script src="{{ mix('js/header.js') }}"></script>
@endpush
