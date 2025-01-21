@php
    $data = \App\Models\Setting::whereIn('key_id', ['instagram', 'twitter','facebook', 'Linkedin','youtube','phone'])->pluck('value', 'key_id')->toArray();

@endphp


{{--<footer>--}}
{{--    <div class="container">--}}
{{--        <div class="footer">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-4 col-12">--}}
{{--                    <div class="footer-info">--}}
{{--                        <div class="footer-logo">--}}
{{--                            <img loding="lazy" src="{{asset('frontEnd/images/logo.svg')}}" class="img-fluid" />--}}
{{--                        </div>--}}
{{--                        <p class="footer-p">--}}
{{--                            {{__('front.Innovating Digital Solutions. All Rights Reserved')}}--}}
{{--                        </p>--}}
{{--                        <p class="footer-p">{{__('front.Join our community')}}</p>--}}
{{--                        <div class="socials">--}}
{{--                            <a href="{{$data['instagram']}}" target="_blank" class="social">--}}
{{--                                <i class="fa-brands fa-instagram"></i>--}}
{{--                            </a>--}}
{{--                            <a href="{{$data['facebook']}}" target="_blank" class="social">--}}
{{--                                <i class="fa-brands fa-facebook-f"></i>--}}
{{--                            </a>--}}
{{--                            <a href="{{$data['Linkedin']}}" target="_blank" class="social">--}}
{{--                                <i class="fa-brands fa-linkedin-in"></i>--}}
{{--                            </a>--}}
{{--                            <a href="{{$data['twitter']}}" target="_blank" class="social">--}}
{{--                                <i class="fa-brands fa-x-twitter"></i>--}}
{{--                            </a>--}}
{{--                            <a href="{{$data['youtube']}}" target="_blank" class="social">--}}
{{--                                <i class="fa-brands fa-youtube"></i>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-12">--}}
{{--                    <div class="footer-nav">--}}
{{--                        <h4 class="footer-title nav-foot-header">{{__('front.Links')}}</h4>--}}
{{--                        <ul class="footer-list nav-foot">--}}
{{--                            <li class="footer-item">--}}
{{--                                <a href="{{url('/#')}}" class="footer-link">{{__('front.Home')}} </a>--}}
{{--                            </li>--}}
{{--                            <li class="footer-item">--}}
{{--                                <a href="{{ url('/#services') }}" class="footer-link">{{__('front.Services')}}</a>--}}
{{--                            </li>--}}
{{--                            <li class="footer-item">--}}
{{--                                <a href="{{ url('/#work') }}" class="footer-link">{{__('front.PROJECTS')}}</a>--}}
{{--                            </li>--}}
{{--                            <li class="footer-item">--}}
{{--                                <a href="{{route('front.about',App::getLocale())}}" class="footer-link">{{__('front.About Us')}}</a>--}}
{{--                            </li>--}}
{{--                            <li class="footer-item">--}}
{{--                                <a href="{{route('front.blogs',App::getLocale())}}" class="footer-link">{{__('front.Blogs')}}</a>--}}
{{--                            </li>--}}
{{--                            <li class="footer-item">--}}
{{--                                <a href="{{route('front.contact',App::getLocale())}}" class="footer-link">{{__('front.Contact Us')}}</a>--}}
{{--                            </li>--}}
{{--                            <li class="footer-item">--}}
{{--                                <a href="{{url('/#FAQs')}}" class="footer-link">{{__('front.FAQs')}}</a>--}}
{{--                            </li>--}}
{{--                            <li class="footer-item">--}}
{{--                                <a href="{{route('front.terms',App::getLocale())}}" class="footer-link">--}}
{{--                                    {{__('front.Terms & Conditions')}}--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-12">--}}
{{--                    <div class="footer-newsletter">--}}
{{--                        <h4 class="footer-title nav-foot-header">{{__('front.Newsletter')}}</h4>--}}
{{--                        <div class="nav-foot">--}}
{{--                            <h5 class="newsletter-title">--}}
{{--                                {{__('front.Get exclusive promotions & updates straight to your inbox.')}}--}}
{{--                            </h5>--}}
{{--                            <div class="newsletter-form">--}}
{{--                                <form>--}}
{{--                                    <input--}}
{{--                                        type="email"--}}
{{--                                        placeholder="{{__('front.Enter e-mail')}}"--}}
{{--                                        class="newsletter-input"--}}
{{--                                    />--}}
{{--                                    <button type="submit" class="newsletter-btn">--}}
{{--                                        {{__('front.Subscribe')}}--}}
{{--                                    </button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="copy-footer">--}}
{{--            <p class="copyrights"> {{__('front.All rights reserved')}} © {{date('Y')}} Effect Teams  </p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}


<footer class="footer-section">
    <div
        class="container d-flex flex-column flex-md-row justify-content-between align-items-start"
    >
        <!-- Logo and Description -->
        <div class="footer-logo">
            <img src="{{asset('frontEnd/image/logo.png')}}" alt="Ocean Logo" class="mb-4" />
            <p class="mb-4">
                Ocean. Innovating Digital <br />
                Solutions. All Rights Reserved
            </p>
            <p>Join our community</p>
            <div class="social-icons mt-2">
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <!-- Explore Links -->
        <div class="footer-links">
            <h4>Explore</h4>
            <ul class="ul-footer">
                <li><a href="#">PROJECTS</a></li>
                <li><a href="#">How it works</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

        <!-- Newsletter -->
        <div class="footer-newsletter">
            <p>Get exclusive promotions & updates straight to your inbox.</p>
            <h4>Join Our Weekly Digest</h4>
            <p class="text-foot-p">
                Get exclusive promotions & updates <br />
                straight to your inbox.
            </p>
            <form class="input-group-2">
                <input
                    type="email"
                    class="form-control-2"
                    placeholder="Enter your email here"
                    required
                />
                <button type="submit" class="btn btn-primary">Subscribe</button>
            </form>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <p class="mt-2">
            © <span class="ocean-footer">Ocean</span> Market. Use this template
            freely.
        </p>
    </div>
</footer>
<!-- End footer section -->

{{--<a href="https://wa.me/{{ str_replace(' ', '', ltrim($data['phone'], '+')) }}" target="_blank" class="whatsapp-button" id="whatsappButton">--}}
<a href="https://wa.me/970567463404" target="_blank" class="whatsapp-button" id="whatsappButton" style="color: #fff">
    <i class="fab fa-whatsapp"></i>
</a>
