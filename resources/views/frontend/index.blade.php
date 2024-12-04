@extends('frontend.dashboard')
@section('forntend')
    <!--slider-area start-->
    <div class="slider-area-03 pos-rel pt-40 pb-50">
        <div class="single-slider slider-height-03 pos-rel d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="slider__content slider__content__03 text-left">
                            <h5 class="sub-title mb-25 wow fadeInUp2 animated" data-wow-delay=".1s">{{ $banner->badge }}</h5>
                            <h1 class="main-title mb-35 wow fadeInUp2 animated" data-wow-delay=".1s">{{ $banner->name }}</h1>
                            <p class="mb-30">{{ $banner->sub_name }}</p>
                            <ul class="btn-list wow fadeInUp2 animated" data-wow-delay=".3s">

                                <li><a class="theme_btn theme_btn_bg" href="about.html">Learn more</a></li>

                                <li><a class="theme_btn theme_btn2 theme_btn_bg_02" href="case-details.html">our
                                        cases</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">

                        <div class="hero-img wow fadeInUp2 animated" data-wow-delay=".5s">
                            <img src="{{ !empty($banner->image) ? url('storage/' . $banner->image) : 'https://ui-avatars.com/api/?name=' . urlencode($banner->name) }}"
                                alt="{{ $banner->name }}">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--slider-area end-->

    <!--about-us-area start-->
    <section class="about-area grey-bg2 pt-180 pb-25">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="about-img-02 mb-30 pos-rel">
                        <div class="about-img-02__thumb pr-45">

                            <img style="width:335px;height: 370px;"
                                src="{{ !empty(optional($about)->image_one) ? url('storage/' . optional($about)->image_one) : 'https://ui-avatars.com/api/?name=' . urlencode(optional($about)->name) }}"
                                alt="">

                        </div>
                        <div class="about-img-02__thumb-02 ml-100">

                            <img style="width:385px;height: 385px;"
                                src="{{ !empty(optional($about)->image_two) ? url('storage/' . optional($about)->image_two) : 'https://ui-avatars.com/api/?name=' . urlencode(optional($about)->name) }}"
                                alt="">
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="about-wrapper about-wrap-02 mb-60 pl-40">
                        <div class="section-title text-left mb-20 wow fadeInUp2 animated" data-wow-delay='.1s'>
                            <h6>{{ optional($about)->badge }}</h6>
                            <h2>{{ optional($about)->name }}</h2>
                        </div>
                        <p>{!! optional($about)->short_descp !!}</p>
                        <p class="about_list mt-30 mb-20 wow fadeInUp2 animated" data-wow-delay='.2s'>
                            {!! optional($about)->long_descp !!}
                        </p>
                        <a class="theme_btn theme_btn_bg mt-20" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about-us-area end-->

    <!--features-area start-->
    <section class="feature-area pt-80 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="features features-02 active pos-rel mb-30 wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <div class="features-02__back" style="background-image: url(assets/img/shape/11.png);">
                        </div>
                        <div class="features__icon mb-25">
                            <i class="flaticon-donation-1"></i>
                        </div>
                        <div class="features__content">
                            <h3><a href="#">Food For Citizens</a></h3>
                            <p>Sed perspiciatis unde omnis natus voluatem ccntie</p>
                            <a class="more_btn2" href="about.html">read more <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="features features-02 mb-30 wow fadeInUp2 animated" data-wow-delay='.3s'>
                        <div class="features-02__back" style="background-image: url(assets/img/shape/11.png);">
                        </div>
                        <div class="features__icon mb-25">
                            <i class="flaticon-blood-donation"></i>
                        </div>
                        <div class="features__content">
                            <h3><a href="#">Medical & Health</a></h3>
                            <p>Sed perspiciatis unde omnis natus voluatem ccntie</p>
                            <a class="more_btn2" href="about.html">read more <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="features features-02 mb-30 wow fadeInUp2 animated" data-wow-delay='.5s'>
                        <div class="features-02__back" style="background-image: url(assets/img/shape/11.png);">
                        </div>
                        <div class="features__icon mb-25">
                            <i class="flaticon-donation"></i>
                        </div>
                        <div class="features__content">
                            <h3><a href="#">Mineral Water</a></h3>
                            <p>Sed perspiciatis unde omnis natus voluatem ccntie</p>
                            <a class="more_btn2" href="about.html">read more <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="features features-02 mb-30 wow fadeInUp2 animated" data-wow-delay='.7s'>
                        <div class="features-02__back" style="background-image: url(assets/img/shape/11.png);">
                        </div>
                        <div class="features__icon mb-25">
                            <i class="flaticon-scholarship"></i>
                        </div>
                        <div class="features__content">
                            <h3><a href="#">Educations</a></h3>
                            <p>Sed perspiciatis unde omnis natus voluatem ccntie</p>
                            <a class="more_btn2" href="about.html">read more <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--features-area end-->

    <!--donation-area start-->
    <section class="donation-area-03 grey-bg2 pos-rel pt-100 pb-75">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6 col-md-6">
                    <div class="doante-select-area donate-select-02 mb-30 mr-50 text-center white-bg wow fadeInUp2 animated"
                        data-wow-delay='.3s'>
                        <div class="section-title text-center mb-40 wow fadeInUp2 animated" data-wow-delay='.1s'>
                            <h2>Donate Us</h2>
                            <p>Sed perspiciatis unde omnis iste natus errvolu ptatem
                                accntium doloremque laudantiu aperiam</p>
                        </div>
                        <div class="select-area mb-10">
                            <select name="fund" id="fund">
                                <option value="Select Fund">Select Fund</option>
                                <option value="Select Fund">Poor Fund</option>
                                <option value="Select Fund">Refugee Fund</option>
                                <option value="Select Fund">Education Fund</option>
                                <option value="Select Fund">Water Fund</option>
                            </select>
                        </div>
                        <div class="donate-cart pos-rel mb-10">
                            <form class="donate-btn pos-rel" action="">
                                <input type="text" value="$500">
                            </form>
                        </div>
                        <button class="theme_btn theme_btn_bg">Donate now</button>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-6">
                    <div class="about-wrapper about-wrap-02 mb-60">
                        <div class="section-title text-left mb-20 wow fadeInUp2 animated" data-wow-delay='.1s'>
                            <h6>Get Started With Us</h6>
                            <h2>Ready To Donate
                                Million Refugee</h2>
                        </div>
                        <p>Sed perspiciatis unde omnis iste natus voluptate
                            accntium doloremque laudantium totam aperiams
                            eaque ipsa quailinve ntore veritatis architecto</p>
                        <ul class="about_list mt-30 mb-20 wow fadeInUp2 animated" data-wow-delay='.2s'>
                            <li>Employee Giving Funds - Corporate Generosity</li>
                            <li>Make Honest Design Work For Digital Business</li>
                            <li>Building An E-Commerce Site With October</li>
                        </ul>
                        <a class="theme_btn theme_btn2 theme_btn_bg_02" href="about.html">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--donation-area end-->

    <!--cases-area start-->
    <section class="cases-area-02 pos-rel pt-75 pb-100">
        <div class="container custom-container-04">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="section-title text-center mb-50 pl-50 pr-25 wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <h2>Our Project</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="cases white-bg mb-30 wow fadeInUp2 animated" data-wow-delay='.2s'>

                        <div class="cases__box pos-rel">
                            <div class="cases__box--img">
                                <img src="{{ asset('frontend/assets/img/cases/01.jpg') }}" alt="">
                            </div>
                        </div>

                        <div class="cases__content mt-4">
                            <h4><a href="">Donate Your Mind For The Homeless Children</a></h4>
                            <p>Sed perspiciat unde omnis iste natus error voluptatem accntiume</p>

                            <a class="theme_btn theme_btn_bg mt-3" href="about.html">Learn more</a>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="cases white-bg mb-30 wow fadeInUp2 animated" data-wow-delay='.2s'>

                        <div class="cases__box pos-rel">
                            <div class="cases__box--img">
                                <img src="{{ asset('frontend/assets/img/cases/01.jpg') }}" alt="">
                            </div>
                        </div>

                        <div class="cases__content mt-4">
                            <h4><a href="">Donate Your Mind For The Homeless Children</a></h4>
                            <p>Sed perspiciat unde omnis iste natus error voluptatem accntiume</p>

                            <a class="theme_btn theme_btn_bg mt-3" href="about.html">Learn more</a>

                        </div>

                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="cases white-bg mb-30 wow fadeInUp2 animated" data-wow-delay='.2s'>

                        <div class="cases__box pos-rel">
                            <div class="cases__box--img">
                                <img src="{{ asset('frontend/assets/img/cases/01.jpg') }}" alt="">
                            </div>
                        </div>

                        <div class="cases__content mt-4">
                            <h4><a href="">Donate Your Mind For The Homeless Children</a></h4>
                            <p>Sed perspiciat unde omnis iste natus error voluptatem accntiume</p>

                            <a class="theme_btn theme_btn_bg mt-3" href="about.html">Learn more</a>

                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="cases white-bg mb-30 wow fadeInUp2 animated" data-wow-delay='.2s'>

                        <div class="cases__box pos-rel">
                            <div class="cases__box--img">
                                <img src="{{ asset('frontend/assets/img/cases/01.jpg') }}" alt="">
                            </div>
                        </div>

                        <div class="cases__content mt-4">
                            <h4><a href="">Donate Your Mind For The Homeless Children</a></h4>
                            <p>Sed perspiciat unde omnis iste natus error voluptatem accntiume</p>
                            <a class="theme_btn theme_btn_bg mt-3" href="about.html">Learn more</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!--cases-area end-->

    <!--counter-area start-->
    <section class="counter-area counter-area-02 pos-rel pt-130 pb-60"
        style="background-image: url(assets/img/bg/07.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="counetrs mb-30 text-center wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <div class="counetrs__icon mb-20"><i class="flaticon-social-care"></i></div>
                        <h1><span class="counter">85642</span></h1>
                        <p>Volunteer</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="counetrs mb-30 text-center wow fadeInUp2 animated" data-wow-delay='.3s'>
                        <div class="counetrs__icon mb-20"><i class="flaticon-donation"></i></div>
                        <h1><span class="counter">74523</span></h1>
                        <p>Global Partner</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="counetrs mb-30 text-center wow fadeInUp2 animated" data-wow-delay='.5s'>
                        <div class="counetrs__icon mb-20"><i class="flaticon-charity"></i></div>
                        <h1><span class="counter">65634</span></h1>
                        <p>Save Children</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                    <div class="counetrs mb-30 text-center wow fadeInUp2 animated" data-wow-delay='.7s'>
                        <div class="counetrs__icon mb-20"><i class="flaticon-community"></i></div>
                        <h1><span class="counter">98563</span></h1>
                        <p>Refuge Shelter</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--counter-area end-->

    <!--team-area start-->
    <section class="team-area-02 pt-100 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="section-title text-center mb-25 pl-50 pr-50 wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <h6>Team Member</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay='.2s'>
                    <div class="teams white-bg mb-30">
                        <div class="teams__thumb pos-rel mb-30">
                            <div class="teams__thumb--img pos-rel">
                                <img src="{{ asset('frontend/assets/img/team/05.jpg') }}" alt="">
                            </div>
                            <div class="teams__thumb--social">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                        <div class="teams__content text-center">
                            <h3 class="semi-02-title"><a href="team-details.html">David Salika Warner</a></h3>
                            <p>Web Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay='.4s'>
                    <div class="teams white-bg mb-30">
                        <div class="teams__thumb pos-rel mb-30">
                            <div class="teams__thumb--img pos-rel">
                                <img src="{{ asset('frontend/assets/img/team/05.jpg') }}" alt="">
                            </div>
                            <div class="teams__thumb--social">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                        <div class="teams__content text-center">
                            <h3 class="semi-02-title"><a href="team-details.html">Michel Fokluz Huta</a></h3>
                            <p>Web Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-30 wow fadeInUp animated" data-wow-delay='.6s'>
                    <div class="teams white-bg mb-30">
                        <div class="teams__thumb pos-rel mb-30">
                            <div class="teams__thumb--img pos-rel">
                                <img src="{{ asset('frontend/assets/img/team/05.jpg') }}" alt="">
                            </div>
                            <div class="teams__thumb--social">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                        <div class="teams__content text-center">
                            <h3 class="semi-02-title"><a href="team-details.html">Nicolas Almeida Lima</a></h3>
                            <p>Web Programmar</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--team-area end-->

    <!--blog-area start-->
    <section class="blog-area grey-bg2 pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3">

                    <div class="section-title text-center mb-50  wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <h2>Get Our EnaCare Every News & Blog</h2>
                    </div>

                </div>
            </div>
            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp2 animated" data-wow-delay='.3s'>
                    <div class="blog blogs white-bg mb-30">
                        <div class="blog__thumb mb-40">
                            <img src="{{ asset('frontend/assets/img/blog/04.jpg') }}" alt="">
                        </div>
                        <div class="blog__content">
                            <a class="tag" href="blog-details.html">volunteer</a>
                            <h4 class="mb-15"><a href="blog-details.html">Experts Digital Accessibility
                                    Developments During</a></h4>
                            <p class="mb-25">Sed perspiciatis unde omnis iste natus
                                atem accntium doloremque</p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp2 animated" data-wow-delay='.3s'>
                    <div class="blog blogs white-bg mb-30">
                        <div class="blog__thumb mb-40">
                            <img src="{{ asset('frontend/assets/img/blog/04.jpg') }}" alt="">
                        </div>
                        <div class="blog__content">
                            <a class="tag" href="blog-details.html">volunteer</a>
                            <h4 class="mb-15"><a href="blog-details.html">Experts Digital Accessibility
                                    Developments During</a></h4>
                            <p class="mb-25">Sed perspiciatis unde omnis iste natus
                                atem accntium doloremque</p>

                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp2 animated" data-wow-delay='.3s'>
                    <div class="blog blogs white-bg mb-30">
                        <div class="blog__thumb mb-40">
                            <img src="{{ asset('frontend/assets/img/blog/04.jpg') }}" alt="">
                        </div>
                        <div class="blog__content">
                            <a class="tag" href="blog-details.html">volunteer</a>
                            <h4 class="mb-15"><a href="blog-details.html">Experts Digital Accessibility
                                    Developments During</a></h4>
                            <p class="mb-25">Sed perspiciatis unde omnis iste natus
                                atem accntium doloremque</p>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!--blog-area end-->

    <!--testimonial-area start-->
    <section class="testimonial-area-02 testimonila-area-03 pt-100 pb-180">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="section-title text-center mb-90 pl-50 pr-50 wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <h2>Our Clients Say About</h2>
                    </div>
                </div>
            </div>
            <div class="testimonial-wrapper-03">
                <div class="row testtimonial-item-active">
                    <div class="col-xl-6 testimonial-item-02 d-md-flex align-items-center wow fadeInUp2 animated"
                        data-wow-delay='.3s'>
                        <div class="testimonial-item__content">
                            <h4>Make Honest Design Work For Digital Business
                                With Ethical Design Handbook Building Commerce
                                Site With October CMS And Shopaholic</h4>
                            <div class="author_box d-flex">
                                <div class="author_box__img mr-25">
                                    <img src="assets/img/testimonial/04.png" alt="">
                                </div>
                                <div class="author_box__content">
                                    <h4 class="semi-02-title">David Warner</h4>
                                    <p>Senior Web Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 testimonial-item-02 d-md-flex align-items-center wow fadeInUp2 animated"
                        data-wow-delay='.3s'>
                        <div class="testimonial-item__content">
                            <h4>Make Honest Design Work For Digital Business
                                With Ethical Design Handbook Building Commerce
                                Site With October CMS And Shopaholic</h4>
                            <div class="author_box d-flex align-items-center'">
                                <div class="author_box__img mr-25">
                                    <img src="assets/img/testimonial/05.png" alt="">
                                </div>
                                <div class="author_box__content">
                                    <h4 class="semi-02-title">David Luis</h4>
                                    <p>Senior Web Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 testimonial-item-02 d-md-flex align-items-center wow fadeInUp2 animated"
                        data-wow-delay='.3s'>
                        <div class="testimonial-item__content">
                            <h4>Make Honest Design Work For Digital Business
                                With Ethical Design Handbook Building Commerce
                                Site With October CMS And Shopaholic</h4>
                            <div class="author_box d-flex">
                                <div class="author_box__img mr-25">
                                    <img src="assets/img/testimonial/04.png" alt="">
                                </div>
                                <div class="author_box__content">
                                    <h4 class="semi-02-title">David Warner</h4>
                                    <p>Senior Web Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 testimonial-item-02 d-md-flex align-items-center wow fadeInUp2 animated"
                        data-wow-delay='.3s'>
                        <div class="testimonial-item__content">
                            <h4>Make Honest Design Work For Digital Business
                                With Ethical Design Handbook Building Commerce
                                Site With October CMS And Shopaholic</h4>
                            <div class="author_box d-flex align-items-center'">
                                <div class="author_box__img mr-25">
                                    <img src="assets/img/testimonial/05.png" alt="">
                                </div>
                                <div class="author_box__content">
                                    <h4 class="semi-02-title">David Luis</h4>
                                    <p>Senior Web Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--testimonial-area end-->

    <!--brand-area start-->
    <section class="brand-area grey-bg2 pt-70">
        <div class="container custom-container-03">
            <div class="row brand-active pb-60">
                <div class="col-xl-2">
                    <div class="brand-slide text-center wow fadeInUp animated" data-wow-delay='.1s'>
                        <div class="brand-img">
                            <a href="#"><img src="{{ asset('frontend/assets/img/brand/01.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="brand-slide text-center wow fadeInUp animated" data-wow-delay='.3s'>
                        <div class="brand-img">
                            <a href="#"><img src="{{ asset('frontend/assets/img/brand/02.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="brand-slide text-center wow fadeInUp animated" data-wow-delay='.5s'>
                        <div class="brand-img">
                            <a href="#"><img src="{{ asset('frontend/assets/img/brand/03.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="brand-slide text-center wow fadeInUp animated" data-wow-delay='.7s'>
                        <div class="brand-img">
                            <a href="#"><img src="{{ asset('frontend/assets/img/brand/04.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="brand-slide text-center wow fadeInUp animated" data-wow-delay='.9s'>
                        <div class="brand-img">
                            <a href="#"><img src="{{ asset('frontend/assets/img/brand/05.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="brand-slide text-center wow fadeInUp animated" data-wow-delay='.3s'>
                        <div class="brand-img">
                            <a href="#"><img src="{{ asset('frontend/assets/img/brand/01.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="brand-slide text-center wow fadeInUp animated" data-wow-delay='.5s'>
                        <div class="brand-img">
                            <a href="#"><img src="{{ asset('frontend/assets/img/brand/02.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="brand-slide text-center wow fadeInUp animated" data-wow-delay='.7s'>
                        <div class="brand-img">
                            <a href="#"><img src="{{ asset('frontend/assets/img/brand/03.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--brand-area end-->
@endsection
