@extends('frontend.layouts.layout')


@section('content')
    <!-- BANNER
                    ================================================== -->
    <section class="py-6 py-md-16 py-lg-20 py-xxl-24 bg-img cover-background banner-style02 left-overlay-secondary"
        data-overlay-dark="75" data-background="img/banner/banner-07.jpg">
        <div class="container pt-1-9 pt-sm-6 pt-md-0">
            <div class="row align-items-center position-relative z-index-1">
                <div class="col-lg-10 col-xl-8 col-xxl-7 py-5">
                    <div class="section-title01">
                        <h1 class="display-2 font-weight-800 text-shadow text-white ls-minus-2px lh-1 wow fadeInUp"
                            data-wow-delay="100ms">
                            <span>We Ensure The Best </span>
                            <span class="text-primary">Agency Service.</span>
                        </h1>
                        <p class="w-lg-70 font-weight-500 display-28 text-white opacity7 d-none d-sm-block wow fadeInUp"
                            data-wow-delay="150ms">We’re committed to providing customers exceptional service
                            offering employees the best training.</p>
                    </div>
                    <div class="banner-button wow fadeInUp" data-wow-delay="200ms">
                        <a href="services.html" class="button-arrow"><i class="ti-arrow-right"></i></a>
                        <div class="button-text">
                            <a href="services.html" class="text-white text-primary-hover">Explore services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="left-text d-none d-xxl-block">
            <span><i class="ti-email"></i>Get our service - <a href="contact.html" class="border-bottom text-white">Send a
                    message</a></span>
        </div>
    </section>

    <!-- ABOUT US
                    ================================================== -->
    <section>
        <div class="container">
            <div class="row mt-n1-9">
                <div class="col-lg-6 mt-1-9 order-2 order-lg-1">
                    <div class="px-lg-1-9 px-xl-7">
                        <img src="img/content/about-09.jpg" alt="..."
                            class="mb-1-9 mb-lg-10 border-radius-10 d-none d-lg-block">
                        <p class="mb-2-6">Team is a diverse network of consultants and industry professionals with
                            a global mindset and a collaborative culture. We work to understand your issues and are
                            driven to ask better questions.</p>
                        <a href="about.html" class="btn-style7 md">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6 mt-1-9 order-1 order-lg-2">
                    <div class="ps-lg-8 ps-xl-12">
                        <h2 class="mb-1-9 mb-lg-8 display-5 font-weight-800 lh-1">Creative Studio Excited About
                            Your Business</h2>
                        <img src="img/content/about-10.jpg" alt="..." class="border-radius-10">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COUNTER
                    ================================================== -->
    <section class="counter-style2 pt-0">
        <div class="container">
            <div class="row mt-n2-9">
                <div class="col-sm-6 col-lg-3 mt-2-9">
                    <div class="position-relative text-center">
                        <span class="count-no countup">30</span>
                        <h4 class="h5 mb-0 position-absolute left-50 top-50 translate-middle">Exprience</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mt-2-9">
                    <div class="position-relative text-center">
                        <span class="count-no countup">896</span>
                        <h4 class="h5 mb-0 position-absolute left-50 top-50 translate-middle">Projects</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mt-2-9">
                    <div class="position-relative text-center">
                        <span class="count-no countup">758</span>
                        <h4 class="h5 mb-0 position-absolute left-50 top-50 translate-middle">Customers</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mt-2-9">
                    <div class="position-relative text-center">
                        <span class="count-no countup">16</span>
                        <h4 class="h5 mb-0 position-absolute left-50 top-50 translate-middle">Branches</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES
                    ================================================== -->
    <section class="bg-light">
        <div class="container">
            <h2 class="mb-1-9 mb-md-5 text-center display-5 font-weight-800 lh-1">Our Services</h2>
            <div class="row mt-n1-9">
                <div class="col-md-6 col-lg-4 mt-1-9">
                    <div class="card card-style09 border-0">
                        <img src="img/service/service-11.jpg" alt="..." class="border-radius-10">
                        <div class="card-body p-0">
                            <div class="service-icon">
                                <img src="img/icon/icon-20.png" alt="..." class="w-60px">
                            </div>
                            <h3 class="mb-0"><a href="web-development.html">Web Development</a></h3>
                        </div>
                        <a href="web-development.html" class="service-butn"><i class="ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-1-9">
                    <div class="card card-style09 border-0">
                        <img src="img/service/service-12.jpg" alt="..." class="border-radius-10">
                        <div class="card-body p-0">
                            <div class="service-icon">
                                <img src="img/icon/icon-21.png" alt="..." class="w-60px">
                            </div>
                            <h3 class="mb-0"><a href="apps-development.html">Apps Development</a></h3>
                        </div>
                        <a href="apps-development.html" class="service-butn"><i class="ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-1-9">
                    <div class="card card-style09 border-0">
                        <img src="img/service/service-13.jpg" alt="..." class="border-radius-10">
                        <div class="card-body p-0">
                            <div class="service-icon">
                                <img src="img/icon/icon-22.png" alt="..." class="w-60px">
                            </div>
                            <h3 class="mb-0"><a href="graphics-design.html">Graphics Design</a></h3>
                        </div>
                        <a href="graphics-design.html" class="service-butn"><i class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- EXTRA
                    ================================================== -->
    <section class="extra-style01 py-0">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="bg-img cover-background h-100" data-background="img/content/exta-img-01.jpg">
                        <div class="story-video d-none d-lg-block">
                            <a class="video video_btn2 bg-white" href="https://www.youtube.com/watch?v=pDWUf_g2zsc"><i
                                    class="fa fa-play text-primary"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content bg-secondary position-relative">
                        <div class="inner-content">
                            <h2 class="mb-1-9 mb-md-5 display-5 font-weight-800 lh-1">We're Shaping the Ideal Web
                                Arrangements</h2>
                            <a href="about.html" class="btn-style7 md">Read More</a>
                        </div>
                        <div class="position-absolute top-0 end-0 opacity1">
                            <img src="img/content/shape-01.png" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROCESS
                    ================================================== -->
    <section class="process-style-02">
        <div class="container">
            <div class="mb-8 mb-sm-12 mb-lg-15 text-center">
                <h2 class="mb-0 display-5 font-weight-800 lh-1">Our Working Process</h2>
            </div>
            <div class="row mt-n10">
                <div class="col-md-6 col-lg-4 mt-10">
                    <div class="position-relative pe-xl-7 process-inner">
                        <span class="process-no">01</span>
                        <h4 class="h5">Plan & Design</h4>
                        <p class="mb-0">We focus on the best practices for it solutions and services.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-10">
                    <div class="position-relative pe-xl-7 process-inner">
                        <span class="process-no">02</span>
                        <h4 class="h5">Project Testing</h4>
                        <p class="mb-0">We focus on the best practices for it solutions and services.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mt-10">
                    <div class="position-relative pe-xl-7 process-inner">
                        <span class="process-no">03</span>
                        <h4 class="h5">Got Results</h4>
                        <p class="mb-0">We focus on the best practices for it solutions and services.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO
                    ================================================== -->
    <section class="py-0">
        <div class="container-fluid px-xl-1-9 px-xxl-10">
            <div class="row portfolio-gallery mt-n1-9">
                <div class="col-sm-6 col-lg-3 mt-1-9" data-src="img/portfolio/portfolio-13.jpg"
                    data-sub-html="<h4 class='text-white'><a href='portfolio-details.html' class='text-white'>Task Management</a></h4><p>Dashboard</p>">
                    <div class="card card-style11 border-0 border-radius-10 overflow-hidden">
                        <img src="img/portfolio/portfolio-13.jpg" alt="...">
                        <div class="card-body">
                            <span class="text-primary mb-2 d-inline-block">Dashboard</span>
                            <h4 class="mb-4 h5"><a href="portfolio-details.html">Task Management</a></h4>
                            <div class="portfolio-btn">
                                <a href="portfolio-details.html" class="portfolio-link"><i
                                        class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mt-1-9" data-src="img/portfolio/portfolio-14.jpg"
                    data-sub-html="<h4 class='text-white'><a href='portfolio-details.html' class='text-white'>App Integration</a></h4><p>Technology</p>">
                    <div class="card card-style11 border-0 border-radius-10 overflow-hidden">
                        <img src="img/portfolio/portfolio-14.jpg" alt="...">
                        <div class="card-body">
                            <span class="text-primary mb-2 d-inline-block">Technology</span>
                            <h4 class="mb-4 h5"><a href="portfolio-details.html">App Integration</a></h4>
                            <div class="portfolio-btn">
                                <a href="portfolio-details.html" class="portfolio-link"><i
                                        class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mt-1-9" data-src="img/portfolio/portfolio-15.jpg"
                    data-sub-html="<h4 class='text-white'><a href='portfolio-details.html' class='text-white'>Desktop Mockup</a></h4><p>Branding</p>">
                    <div class="card card-style11 border-0 border-radius-10 overflow-hidden">
                        <img src="img/portfolio/portfolio-15.jpg" alt="...">
                        <div class="card-body">
                            <span class="text-primary mb-2 d-inline-block">Branding</span>
                            <h4 class="mb-4 h5"><a href="portfolio-details.html">Desktop Mockup</a></h4>
                            <div class="portfolio-btn">
                                <a href="portfolio-details.html" class="portfolio-link"><i
                                        class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mt-1-9" data-src="img/portfolio/portfolio-16.jpg"
                    data-sub-html="<h4 class='text-white'><a href='portfolio-details.html' class='text-white'>Market Research</a></h4><p>Business</p>">
                    <div class="card card-style11 border-0 border-radius-10 overflow-hidden">
                        <img src="img/portfolio/portfolio-16.jpg" alt="...">
                        <div class="card-body">
                            <span class="text-primary mb-2 d-inline-block">Business</span>
                            <h4 class="mb-4 h5"><a href="portfolio-details.html">Market Research</a></h4>
                            <div class="portfolio-btn">
                                <a href="portfolio-details.html" class="portfolio-link"><i
                                        class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US
                    ================================================== -->
    <section class="pb-0">
        <div class="container">
            <div class="row mt-n1-9">
                <div class="col-lg-6 mt-1-9">
                    <div class="pe-lg-1-9 pe-xxl-12">
                        <h2 class="mb-1-9 mb-lg-8 display-5 font-weight-800 lh-1">We’re Shaping the Perfect Web
                            Solutions</h2>
                        <div class="d-flex align-items-center">
                            <img src="img/avatar/avatar-10.jpg" alt="..."
                                class="rounded-circle border border-width-4 border-white shadow">
                            <img src="img/avatar/avatar-11.jpg" alt="..."
                                class="rounded-circle border border-width-4 border-white shadow w-60px me-3 ms-minus-20">
                            <p class="text-dark font-weight-600 text-decoration-underline mb-0">Web code from
                                <strong>experts.</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-1-9">
                    <div class="border-bottom border-color-light-black mb-4 mb-sm-0">
                        <div class="row g-0">
                            <div class="col-sm-3 border-sm-end">
                                <div class="text-sm-center px-sm-1-6 px-xxl-5 py-sm-1-6">
                                    <img src="img/icon/icon-23.png" alt="..." class="w-60px">
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="px-sm-1-6 px-xl-5 py-1-6">
                                    <h4>Efficiency & Management</h4>
                                    <p class="mb-0">Providing the solutions for your all business.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom border-color-light-black mb-4 mb-sm-0">
                        <div class="row g-0">
                            <div class="col-sm-3 border-sm-end">
                                <div class="text-sm-center px-sm-1-6 px-xxl-5 py-sm-1-6">
                                    <img src="img/icon/icon-24.png" alt="..." class="w-60px">
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="px-sm-1-6 px-xl-5 py-1-6">
                                    <h4>Unique Product Design</h4>
                                    <p class="mb-0">Providing the solutions for your all business.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row g-0">
                            <div class="col-sm-3 border-sm-end">
                                <div class="text-sm-center px-sm-1-6 px-xxl-5 py-sm-1-6">
                                    <img src="img/icon/icon-25.png" alt="..." class="w-60px">
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="px-sm-1-6 px-xl-5 pt-1-6">
                                    <h4>Commitment & Professional</h4>
                                    <p class="mb-0">Providing the solutions for your all business.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOG
                    ================================================== -->
    <section>
        <div class="container">
            <div class="row gx-xxl-5 mt-n2-2">
                <div class="col-md-6 col-lg-4 mt-2-2 wow fadeInUp" data-wow-delay="100ms">
                    <article class="card card-style04 h-100 rounded">
                        <div class="card-img position-relative">
                            <img src="img/blog/blog-01.jpg" class="card-img-top rounded-top" alt="...">
                            <a href="#!" class="category">design</a>
                        </div>
                        <div class="card-body p-2-0 p-xl-2-4">
                            <span class="text-primary mb-2 d-block font-weight-500">Apr 14, 2023</span>
                            <h3 class="h4 mb-0"><a href="blog-details.html">Delivering the best web design
                                    agency.</a></h3>
                        </div>
                        <div class="card-footer bg-white px-2-0 px-xl-2-4 py-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div><span class="font-weight-600"><i class="ti-user me-2"></i></span><a
                                        href="#!">Admin</a></div>
                                <span>
                                    <i class="ti-comment-alt me-2"></i>02
                                </span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4 mt-2-2 wow fadeInUp" data-wow-delay="200ms">
                    <article class="card card-style04 h-100 rounded">
                        <div class="card-img position-relative">
                            <img src="img/blog/blog-02.jpg" class="card-img-top rounded-top" alt="...">
                            <a href="#!" class="category">agency</a>
                        </div>
                        <div class="card-body p-2-0 p-xl-2-4">
                            <span class="text-primary mb-2 d-block font-weight-500">Apr 08, 2023</span>
                            <h3 class="h4 mb-0"><a href="blog-details.html">Basic rule of running web agency
                                    business.</a></h3>
                        </div>
                        <div class="card-footer bg-white px-2-0 px-xl-2-4 py-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div><span class="font-weight-600"><i class="ti-user me-2"></i></span><a
                                        href="#!">Admin</a></div>
                                <span>
                                    <i class="ti-comment-alt me-2"></i>01
                                </span>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4 mt-2-2 wow fadeInUp" data-wow-delay="300ms">
                    <article class="card card-style04 h-100 rounded">
                        <div class="card-img position-relative">
                            <img src="img/blog/blog-03.jpg" class="card-img-top rounded-top" alt="...">
                            <a href="#!" class="category">developer</a>
                        </div>
                        <div class="card-body p-2-0 p-xl-2-4">
                            <span class="text-primary mb-2 d-block font-weight-500">March 26, 2023</span>
                            <h3 class="h4 mb-0"><a href="blog-details.html">Over ride the digital divide with
                                    additional.</a></h3>
                        </div>
                        <div class="card-footer bg-white px-2-0 px-xl-2-4 py-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div><span class="font-weight-600"><i class="ti-user me-2"></i></span><a
                                        href="#!">Admin</a></div>
                                <span>
                                    <i class="ti-comment-alt me-2"></i>04
                                </span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
