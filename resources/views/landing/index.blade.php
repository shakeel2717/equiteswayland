@extends('landing.layout.app')
@section('title')
    Home
@endsection
@section('body')
    <div class="rs-banner banner-style6">
        <div class="container custom">
            <div class="row y-middle">
                <div class="col-lg-5 col-md-7">
                    <div class="sec-title4 mb-30">
                        <div class="sub-title">Grow With</div>
                        <h2 class="title primary-color">{{ env('APP_NAME') }}</h2>
                        <div class="desc left-line-v">
                            <div class="draw-line start-draw"></div>
                            {{ env('APP_DESC_LONG') }}
                        </div>
                    </div>
                    <div class="btn-area d-flex justify-content-around">
                        <a class="readon2 m-1" href="{{ route('register') }}">Create Account <div
                                class="btn-arrow"></div></a>
                        <a class="readon1 m-1" href="{{ route('login') }}">Sign in <div class="btn-arrow"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rs-services style1 reverse">
        <div class="container">
            <div class="row service-wrap mr-0 ml-0">
                <div class="col-lg-4 padding-0">
                    <div class="service-grid">
                        <div class="service-icon mb-23">
                            <img src="{{ asset('assets/images/icons/head.svg') }}" alt="">
                        </div>
                        <h4 class="title mb-18"><a href="{{ route('register') }}">Create Account</a></h4>
                        <div class="desc mb-12">Create an Account our website and verify your account.</div>
                        <div class="btn-wrap">
                            <a class="readmore" href="{{ route('register') }}">Get Started <div
                                    class="btn-arrow"></div></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 padding-0">
                    <div class="service-grid">
                        <div class="service-icon mb-23">
                            <img src="{{ asset('assets/images/icons/data-processing.svg') }}" alt="">
                        </div>
                        <h4 class="title mb-18"><a href="{{ route('register') }}">Deposit</a></h4>
                        <div class="desc mb-12">Select any Suiteable Investment and Request For Deposit</div>
                        <div class="btn-wrap">
                            <a class="readmore" href="{{ route('register') }}">Get Started <div
                                    class="btn-arrow"></div></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 padding-0">
                    <div class="service-grid br-none bdru">
                        <div class="service-icon mb-23">
                            <img src="{{ asset('assets/images/icons/risks.svg') }}" alt="">
                        </div>
                        <h4 class="title mb-18"><a href="{{ route('register') }}">Start Earning</a></h4>
                        <div class="desc mb-12">Once you Activate Your Account, You will Recieve Daily Profit
                            in your acount</div>
                        <div class="btn-wrap">
                            <a class="readmore" href="{{ route('register') }}">Get Started <div
                                    class="btn-arrow"></div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rs-about style5 relative pt-140 md-pt-80">
        <div class="container">
            <div class="row rs-vertical-middle">
                <div class="col-lg-6 pr-72">
                    <div class="left-side">
                        <img src="{{ asset('assets/images/about/about.jpg') }}" alt="">
                        <div class="skill-tag"><span>10</span> Years <br> Experience</div>
                        <img class="left-pattern" src="assets/images/pattern/pattern1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 md-pt-50">
                    <div class="sec-title4 mb-30">
                        <div class="sub-title secondary-color mb-10">About us</div>
                        <h2 class="title primary-color">{{ env('APP_NAME') }} is one of the<br> Best Business
                            Investment Agency</h2>
                        <div class="desc left-line-v">
                            <div class="draw-line start-draw"></div>
                            {{ env('APP_DESC_LONG') }}
                        </div>
                    </div>
                    <div class="row mb-40">
                        <div class="col-md-6">
                            <ul class="services">
                                <li><i class="fa fa-check"></i>Affordable Support</li>
                                <li><i class="fa fa-check"></i>Client Oriented</li>
                                <li><i class="fa fa-check"></i>Instant Deposit</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="services">
                                <li><i class="fa fa-check"></i>Professional Team</li>
                                <li><i class="fa fa-check"></i>24/7 Active Service</li>
                                <li><i class="fa fa-check"></i>Instant Withdraw</li>
                            </ul>
                        </div>
                    </div>
                    <div class="btn-part">
                        <a class="readon2" href="{{ route('register') }}">Get Started <div class="btn-arrow">
                            </div></a>
                    </div>
                </div>
            </div>
            <div class="pattern-img">
                <img class="left-pattern" src="assets/images/pattern/pattern1.png" alt="">
            </div>
        </div>
    </div>
    <div class="rs-cta style1 secondary-bg2 relative pt-128 pb-128 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row rs-vertical-middle">
                <div class="col-lg-7">
                    <div class="sec-title4">
                        <div class="sub-title secondary-color mb-6">Join our Whatsapp Group</div>
                        <h2 class="title white-color left-line-v margin-0">
                            <div class="draw-line start-draw"></div>
                            Join Whatsapp Official group
                        </h2>
                    </div>
                </div>
                <div class="col-lg-5 md-pt-30">
                    <div class="cta-btn text-center text-md-left">
                        <a class="readon2 hover-light" href="https://chat.whatsapp.com/BXn1uC0WOuxHxWAs0w9vEH"><i
                                class="fa fa-whatsapp me-2"></i>
                            Join now <div class="btn-arrow"></div></a>
                    </div>
                </div>
            </div>
            <br>
            {{-- <img class="pattern-right" src="{{ asset('assets/images/pattern/pattern5.png') }}" alt="">
            <img class="pattern-left" src="{{ asset('assets/images/pattern/pattern6.png') }}" alt=""> --}}
            <div class="row row rs-vertical-middle" style="z-index: ">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/JFLTHot7nG4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="rs-pricing style2 pt-128 md-pt-70">
        <div class="container">
            <div class="sec-title4 text-center mb-60">
                <div class="sub-title mb-6">Pricing</div>
                <h2 class="title">Pricing Plan</h2>
            </div>
            <div class="row">
                @forelse ($plans as $plan)
                    <div class="col-md-4">
                        <div class="pricing-wrap bg-white mb-4 active text-center">
                            <div class="head-part">
                                <div class="text-center">
                                    <img src="{{ asset('assets/images/crown.png') }}" alt="Office">
                                </div>
                                <div class="title">{{ $plan->name }}</div>
                                <div class="price">{{ number_format($plan->price, 0) }}<span
                                        class="period">/{{ $plan->duration }}D</span></div>
                            </div>
                            <div class="body-part">
                                <ul>
                                    <li>Daily Profit: <strong>{{ number_format($plan->profit, 2) }}</strong> <i
                                            class="fa fa-check"></i></li>
                                    <li>Total Profit: <strong>{{ number_format($plan->total, 2) }}</strong> <i
                                            class="fa fa-check"></i></li>
                                    <li>Plan Duration: <strong>{{ $plan->duration }} Days</strong> <i
                                            class="fa fa-check"></i></li>
                                    <li>Withdraw Limit: <strong>{{ number_format($plan->withdraw, 2) }}</strong> <i
                                            class="fa fa-check"></i></li>
                                </ul>
                                <div class="btn-part">
                                    <a class="price-btn"
                                        href="{{ route('user.plan.show', ['plan' => $plan->id]) }}">Activate now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No Plan Found</p>
                @endforelse
            </div>
        </div>
    </div>
    <div class="rs-services style1 modify shape-bg pt-128 md-pt-70 pb-140 md-pb-80">
        <div class="container">
            <div class="sec-title4 text-center mb-60">
                <div class="sub-title mb-6">Services</div>
                <h2 class="title primary-color">What We Provide</h2>
            </div>
            <div class="row service-wrap mr-0 ml-0">
                <div class="col-lg-4 padding-0">
                    <div class="service-grid">
                        <div class="service-icon mb-23">
                            <img src="{{ asset('assets/images/icons/head.svg') }}" alt="">
                        </div>
                        <h4 class="title mb-18"><a href="{{ route('register') }}">Create Account</a></h4>
                        <div class="desc mb-12">Create an Account our website and verify your account.</div>
                        <div class="btn-wrap">
                            <a class="readmore" href="{{ route('register') }}">Get Started <div
                                    class="btn-arrow"></div></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 padding-0">
                    <div class="service-grid">
                        <div class="service-icon mb-23">
                            <img src="{{ asset('assets/images/icons/data-processing.svg') }}" alt="">
                        </div>
                        <h4 class="title mb-18"><a href="{{ route('register') }}">Deposit</a></h4>
                        <div class="desc mb-12">Select any Suiteable Investment and Request For Deposit</div>
                        <div class="btn-wrap">
                            <a class="readmore" href="{{ route('register') }}">Get Started <div
                                    class="btn-arrow"></div></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 padding-0">
                    <div class="service-grid br-none bdru">
                        <div class="service-icon mb-23">
                            <img src="{{ asset('assets/images/icons/risks.svg') }}" alt="">
                        </div>
                        <h4 class="title mb-18"><a href="{{ route('register') }}">Start Earning</a></h4>
                        <div class="desc mb-12">Once you Activate Your Account, You will Recieve Daily Profit
                            in your acount</div>
                        <div class="btn-wrap">
                            <a class="readmore" href="{{ route('register') }}">Get Started <div
                                    class="btn-arrow"></div></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 padding-0">
                    <div class="service-grid">
                        <div class="service-icon mb-23">
                            <img src="{{ asset('assets/images/icons/branding.svg') }}" alt="">
                        </div>
                        <h4 class="title mb-18"><a href="{{ route('register') }}">Withdraw Fund</a></h4>
                        <div class="desc mb-12">Once you Earn Enough Money, you can withdraw it instantly to
                            your any Bank Account</div>
                        <div class="btn-wrap">
                            <a class="readmore" href="{{ route('register') }}">Get Started <div
                                    class="btn-arrow"></div></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 padding-0">
                    <div class="service-grid">
                        <div class="service-icon mb-23">
                            <img src="{{ asset('assets/images/icons/content-writing.svg') }}" alt="">
                        </div>
                        <h4 class="title mb-18"><a href="{{ route('register') }}">Refer</a></h4>
                        <div class="desc mb-12">You can also earn Refer Commission from your friend and family
                            you invite on our platform</div>
                        <div class="btn-wrap">
                            <a class="readmore" href="{{ route('register') }}">Get Started <div
                                    class="btn-arrow"></div></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 padding-0">
                    <div class="service-grid br-none bdru">
                        <div class="service-icon mb-23">
                            <img src="{{ asset('assets/images/icons/clipboard.svg') }}" alt="">
                        </div>
                        <h4 class="title mb-18"><a href="{{ route('register') }}">Deposit / Withdraw</a></h4>
                        <div class="desc mb-12">{{ env('APP_NAME') }} is a unique system that offers you
                            fast service during Deposit or Withdraw</div>
                        <div class="btn-wrap">
                            <a class="readmore" href="{{ route('register') }}">Get Started <div
                                    class="btn-arrow"></div></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-btn text-center mt-40">
                <a class="readon2" href="{{ route('register') }}">Create new Account <div
                        class="btn-arrow"></div></a>
            </div>
        </div>
    </div>
    <div class="rs-achievement style1 relative pt-171 md-pt-80">
        <div class="container">
            <div class="row rs-vertical-middle">
                <div class="col-lg-6 pr-0">
                    <div class="sec-title4 mb-35">
                        <div class="sub-title mb-6">Achievement & Registration</div>
                        <h2 class="title">Registered Govt of Pakistan</h2>
                        <div class="desc left-line-v">
                            <div class="draw-line start-draw"></div>
                            {{ env('APP_DESC_LONG') }}
                        </div>
                    </div>
                    <div class="rs-counter hover-box pt-35">
                        <div class="rs-counter-list box-item">
                            <div class="counter-icon"><i class="glyph-icon flaticon-user-1"></i></div>
                            <h3 class="counter-number">100</h3>
                            <div class="counter-text">Happy Users</div>
                        </div>
                        <div class="rs-counter-list box-item active">
                            <div class="counter-icon"><i class="glyph-icon flaticon-picture-1"></i></div>
                            <h3 class="counter-number">{{ custom_number_format(200000, 2) }}</h3>
                            <div class="counter-text">Total Investment</div>
                        </div>
                        <div class="rs-counter-list box-item">
                            <div class="counter-icon"><i class="glyph-icon flaticon-best"></i></div>
                            <h3 class="counter-number">{{ custom_number_format(1000, 0) }}</h3>
                            <div class="counter-text">Total Withdraw</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 md-pt-50">
                    <div class="img-part">
                        <img src="{{ asset('assets/images/fbr.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <img class="pattern-img" src="assets/images/pattern/pattern4.png" alt="">
        </div>
    </div>
    <div class="rs-cta style1 secondary-bg2 relative pt-128 pb-128 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row rs-vertical-middle">
                <div class="col-lg-7">
                    <div class="sec-title4">
                        <div class="sub-title secondary-color mb-6">Get ready to earn</div>
                        <h2 class="title white-color left-line-v margin-0">
                            <div class="draw-line start-draw"></div>
                            Ready to Get Started and opening a new account?
                        </h2>
                    </div>
                </div>
                <div class="col-lg-5 md-pt-30">
                    <div class="cta-btn text-center text-md-left">
                        <a class="readon2 hover-light" href="{{ route('register') }}">Open Account Today <div
                                class="btn-arrow"></div></a>
                    </div>
                </div>
            </div>
            <img class="pattern-right" src="{{ asset('assets/images/pattern/pattern5.png') }}" alt="">
            <img class="pattern-left" src="{{ asset('assets/images/pattern/pattern6.png') }}" alt="">
        </div>
    </div>
    <div class="rs-estimate relative pt-200 pb-187 mt-76 md-pt-85 md-mt-0 md-pb-80">
        <div class="container">
            <div class="row rs-vertical-middle">
                <div class="col-lg-6">
                    <div class="image-part">
                        <img src="{{ asset('assets/images/estimate/estimate.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 md-pt-50">
                    <div class="sec-title4 mb-36">
                        <div class="sub-title mb-6">Legal Document</div>
                        <h2 class="title">We Help Enterpreneurs to Grow Business</h2>
                        <div class="desc left-line-v">
                            <div class="draw-line start-draw"></div>
                            {{ env('APP_DESC_LONG') }}
                        </div>
                    </div>
                    <ul class="estimate-info">
                        <li>
                            <div class="title">We Have Valued Services</div>
                        </li>
                        <li>
                            <div class="title">We Provide Great Support</div>
                        </li>
                    </ul>
                </div>
            </div>
            <img class="pattern-img" src="{{ asset('assets/images/pattern/pattern4.png') }}" alt="">
        </div>
    </div>
@endsection
