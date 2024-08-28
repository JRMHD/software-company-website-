<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Basic Meta Tags -->
    <meta name="description"
        content="JRMHD offers top-notch IT solutions and web development services. Explore our innovative web design and development services tailored to your business needs." />
    <meta name="keywords"
        content="IT solutions, web development, graphic design, technology services, JRMHD, software development" />
    <meta name="author" content="JRMHD Technologies" />

    <!-- Open Graph Meta Tags for Social Media -->
    <meta property="og:title" content="JRMHD | IT Solutions & Web Development" />
    <meta property="og:description"
        content="Discover JRMHD's exceptional IT solutions and web development services. We provide tailored web design and technology services for businesses." />
    <meta property="og:image" content="images/og-image.jpg" />
    <meta property="og:url" content="https://www.jrmhd.tech" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="JRMHD | IT Solutions & Web Development" />
    <meta name="twitter:description"
        content="Explore JRMHD's web development and IT solutions services. We offer customized web design and technology solutions for your business." />
    <meta name="twitter:image" content="images/twitter-card.jpg" />

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- AOS (Animate on Scroll) CSS -->
    <link rel="stylesheet" href="css/aos.css" />

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" />

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />

    <!-- Toastr (Notification) CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>JRMHD | IT Solutions & Web Development</title>
</head>


<body class="home-2">
    <!-- start preLoader -->
    <div id="preloader">
        <svg id="mainSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 600">
            <defs>
                <radialGradient id="mainGrad" cx="400" cy="300" fx="400" fy="300" r="100"
                    gradientUnits="userSpaceOnUse">
                    <stop offset=".68" stop-color="#21df51" />
                    <stop offset=".72" stop-color="#3add63" />
                    <stop offset=".77" stop-color="#4fdd73" />
                    <stop offset=".82" stop-color="#66db83" />
                    <stop offset=".88" stop-color="#7cd893" />
                    <stop offset=".93" stop-color="#95d8a6" />
                    <stop offset=".99" stop-color="#bde6c7" />
                    <stop offset="1" stop-color="#e3f1e7" />
                </radialGradient>
            </defs>
            <circle id="fillDot" cx="400" cy="300" fill="#21df51" r="100" />
            <circle id="gradDot" cx="400" cy="300" fill="url(#mainGrad)" r="100" />
        </svg>
    </div>
    <!-- end preLoader -->

    <!-- start scroll to top button -->
    <div id="progress">
        <span id="progress-value"><i class="bi bi-arrow-up-short"></i></span>
    </div>
    <!-- end scroll to top button -->
    <!-- ======= start Header ======= -->
    @include('header')
    <!-- ======= end Header ======= -->
    <!-- ============== Start Hero section ========== -->
    <section class="hero d-flex align-items-center justify-content-center" id="hero">
        <div id="particles-js"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-flex flex-column wow text-center align-items-center justify-content-center fadeInUp"
                        data-wow-delay="1s">
                        <div class="hero-icons d-flex gap-lg-3 gap-2 my-lg-3 my-2" data-aos="fade-up"
                            data-aos-delay="50">
                            <a href="https://www.facebook.com/JRMHDD/"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/reaganmukabana/"><i class="bi bi-instagram"></i></a>
                            <a href="https://x.com/reaganmukabana/"><i class="bi bi-twitter-x"></i></a>
                            <a href="http://www.youtube.com/@JRMHD1"><i class="bi bi-youtube"></i></a>
                        </div>
                        <div class="col-12">
                            <h1 class="title col-12 text-center" data-aos="fade-up" data-aos-delay="100">
                                Empowering Your Business with <span class="unique-text">Innovative Digital
                                    Solutions</span>
                            </h1>
                        </div>
                        <div class="col-lg-10 col-12" data-aos="fade-up" data-aos-delay="150">
                            <p>
                                Jrmhd Technologies is dedicated to helping businesses thrive in the digital age. We
                                specialize in website development, custom software solutions, digital marketing, and
                                more to ensure your business stands out online and achieves its goals.
                            </p>
                        </div>
                        <div class="d-flex gap-4">
                            <a href="contact" class="btn" data-aos="fade-up" data-aos-delay="200">Get
                                Started</a>
                            <a href="services" class="btn-sec" data-aos="fade-up" data-aos-delay="250">Learn
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============== End Hero section ========== -->


    <!-- ============== Start services section ========== -->
    @include('service')
    <!-- ============== End services section ========== -->


    <!-- ============== Start About section ========== -->
    <section class="about py-5 mt-5" id="about">
        <div class="container">
            <div class="row mt-5 justify-content-center align-items-center">
                <div class="col-12 col-lg-6">
                    <h4 class="pretitle" data-aos="fade-up" data-aos-delay="200">
                        About Us
                    </h4>
                    <h1 class="title col-12" data-aos="fade-up" data-aos-delay="250">
                        Transforming Businesses with <span class="unique-text">Innovative IT Solutions</span> Since
                        <span class="unique-text">2020</span>
                    </h1>
                    <p class="col-lg-10 col-12" data-aos="fade-up" data-aos-delay="300">
                        At Jrmhd Technologies, we are dedicated to delivering top-notch IT solutions tailored to meet
                        the unique needs of our clients. From web development and graphic design to software solutions
                        and digital marketing, our goal is to drive business growth through innovative technology. Our
                        team of experts combines creativity, technical expertise, and strategic thinking to ensure your
                        business thrives in the digital world.
                    </p>
                    <a href="#contact" class="btn" data-aos="fade-up" data-aos-delay="350">Contact Us</a>
                </div>
                <!-- image -->
                <div class="col-12 col-lg-6 d-flex align-items-center" data-aos="fade-left" data-aos-delay="100">
                    <img src="images/about/1.png" alt="about-img" />
                </div>
            </div>

            <div class="row mt-5 py-4 justify-content-center align-items-center">
                <!-- image -->
                <div class="col-12 col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                    <img src="images/about/2.png" alt="about-img" />
                </div>
                <div class="col-12 col-lg-6">
                    <h1 class="title col-12" data-aos="fade-up" data-aos-delay="200">
                        Comprehensive <span class="unique-text">IT Services</span> for Your Success
                    </h1>
                    <p class="col-lg-10 col-12" data-aos="fade-up" data-aos-delay="250">
                        We provide a full range of IT services, including website development, mobile app development,
                        UI/UX design, and 24/7 support. Our team is committed to delivering high-quality solutions that
                        are easy to reach and designed to meet your business goals.
                    </p>
                    <div class="row gx-2 gy-2 col-12">
                        <div class="col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
                            <div class="box box-hover">
                                <i class="bi bi-globe"></i>
                                <h5 class="mx-4 title-2 fw-bold">Global Reach</h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="350">
                            <div class="box box-hover">
                                <i class="bi bi-headset"></i>
                                <h5 class="mx-4 title-2 fw-bold">24/7 Support</h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                            <div class="box box-hover">
                                <i class="bi bi-people"></i>
                                <h5 class="mx-4 title-2 fw-bold">Customer-Centric Approach</h5>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="450">
                            <div class="box box-hover">
                                <i class="bi bi-trophy-fill"></i>
                                <h5 class="mx-4 title-2 fw-bold">Award-Winning Team</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 py-4 justify-content-center align-items-center">
                <div class="col-12 col-lg-6">
                    <h1 class="title col-12" data-aos="fade-up" data-aos-delay="200">
                        Unmatched IT Expertise with <span class="unique-text"> Years of Experience</span>
                    </h1>
                    <p class="col-lg-10 col-12" data-aos="fade-up" data-aos-delay="250">
                        Our extensive experience in IT solutions helps us provide tailored services that meet your
                        specific business needs. From website and software development to digital marketing and graphic
                        design, we deliver results-driven strategies to help your business grow.
                    </p>
                    <ul class="col-12 bars">
                        <li class="py-3" data-aos="fade-up" data-aos-delay="300">
                            <div class="justify-content-between d-flex">
                                <h5>App Development</h5>
                                <h6>95%</h6>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-bar-fill progress-bar-fill-1"></div>
                            </div>
                        </li>
                        <li class="py-3" data-aos="fade-up" data-aos-delay="350">
                            <div class="justify-content-between d-flex">
                                <h5>UI/UX Design</h5>
                                <h6>85%</h6>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-bar-fill progress-bar-fill-2"></div>
                            </div>
                        </li>
                        <li class="py-3" data-aos="fade-up" data-aos-delay="400">
                            <div class="justify-content-between d-flex">
                                <h5>Web Development</h5>
                                <h6>90%</h6>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-bar-fill progress-bar-fill-3"></div>
                            </div>
                        </li>
                        <li class="py-3" data-aos="fade-up" data-aos-delay="450">
                            <div class="justify-content-between d-flex">
                                <h5>System/Software Development</h5>
                                <h6>88%</h6>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-bar-fill progress-bar-fill-4"></div>
                            </div>
                        </li>
                        <li class="py-3" data-aos="fade-up" data-aos-delay="500">
                            <div class="justify-content-between d-flex">
                                <h5>Graphic Design</h5>
                                <h6>80%</h6>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-bar-fill progress-bar-fill-5"></div>
                            </div>
                        </li>
                        <li class="py-3" data-aos="fade-up" data-aos-delay="550">
                            <div class="justify-content-between d-flex">
                                <h5>Digital Marketing</h5>
                                <h6>85%</h6>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-bar-fill progress-bar-fill-6"></div>
                            </div>
                        </li>
                    </ul>
                    <a href="#" class="btn mt-3" data-aos="fade-up" data-aos-delay="600">Contact Us</a>
                </div>
                <!-- image -->
                <div class="col-12 col-lg-6 d-flex align-items-center" data-aos="fade-left" data-aos-delay="100">
                    <img src="images/about/3.png" alt="about-img" />
                </div>
            </div>
        </div>
    </section>

    <!-- ============== End About section ========== -->


    <!-- ============== Start Why Us Section ========== -->
    <section class="container why-choose-us py-5">
        <div class="heading">
            <h4 class="pretitle" data-aos="fade-up">Why Choose Us</h4>
            <h1 class="title col-12" data-aos="fade-up" data-aos-delay="100">
                Why Our Clients Trust Us
            </h1>
            <p class="col-lg-7 col-12" data-aos="fade-up" data-aos-delay="150">
                We are committed to delivering exceptional IT solutions by leveraging the latest technologies, offering
                unique strategies, and maintaining a customer-centric approach to meet our clients' diverse needs.
            </p>
        </div>
        <div class="row gy-4 gx-4">
            <div class="col-md-6 col-lg-4 mx-auto" data-aos="fade-right" data-aos-delay="250">
                <div class="box">
                    <h1 class="my-4">01.</h1>
                    <h2 class="title-2 my-2">Cutting-Edge Technologies</h2>
                    <p>
                        We utilize the latest tools and technologies to ensure our solutions are both innovative and
                        effective, keeping your business ahead of the competition.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mx-auto" data-aos="fade-up" data-aos-delay="200">
                <div class="box">
                    <h1 class="my-4">02.</h1>
                    <h2 class="title-2 my-2">Customized Solutions</h2>
                    <p>
                        Our team crafts unique, tailor-made solutions that are specifically designed to address your
                        business challenges and help you achieve your goals.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mx-auto" data-aos="fade-left" data-aos-delay="250">
                <div class="box">
                    <h1 class="my-4">03.</h1>
                    <h2 class="title-2 my-2">Strategic Expertise</h2>
                    <p>
                        We employ powerful, result-driven strategies that are built on experience and data, ensuring
                        sustainable growth and a competitive edge for your business.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- ============== End Why Us Section ========== -->


    <!-- ============== Start Clients Section ========== -->
    <div class="clients py-lg-5 py-2" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <div class="row">
                <div class="owl-carousel client owl-theme">
                    <div class="item">
                        <img src="images/clients-logos/1-white.png" alt="client-logo" class="client-logo" />
                    </div>
                    <div class="item">
                        <img src="images/clients-logos/2-white.png" alt="client-logo" class="client-logo" />
                    </div>
                    <div class="item">
                        <img src="images/clients-logos/3-white.png" alt="client-logo" class="client-logo" />
                    </div>
                    <div class="item">
                        <img src="images/clients-logos/4-white.png" alt="client-logo" class="client-logo" />
                    </div>
                    <div class="item">
                        <img src="images/clients-logos/5-white.png" alt="client-logo" class="client-logo" />
                    </div>
                    <div class="item">
                        <img src="images/clients-logos/6-white.png" alt="client-logo" class="client-logo" />
                    </div>
                    <div class="item">
                        <img src="images/clients-logos/7-white.png" alt="client-logo" class="client-logo" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============== End Clients Section ========== -->



    <!-- Additional CSS -->
    <style>
        .client-logo {
            width: 150px;
            /* Set the desired width */
            height: auto;
            /* Maintain the aspect ratio */
            max-height: 80px;
            /* Set the maximum height */
            object-fit: contain;
            /* Ensure logos fit within the defined size */
        }
    </style>


    <!-- ============== Start Pricing Section ========== -->
    <section class="container pricing py-5" id="pricing">
        <div class="heading">
            <h4 class="pretitle" data-aos="fade-up">pricing</h4>
            <h1 class="title col-12" data-aos="fade-up" data-aos-delay="100">
                our pricing
            </h1>
            <p class="col-lg-7 col-12" data-aos="fade-up" data-aos-delay="150">
                Choose from our flexible and affordable web hosting plans that cater to your needs, with full control
                and a range of free features.
            </p>
            <div class="row gy-4 gx-4 w-100">
                <!-- Starter Plan -->
                <div class="col-md-6 col-lg-3 mx-auto" data-aos="fade-up" data-aos-delay="200">
                    <div class="box">
                        <i class="bi bi-box my-4"></i>
                        <h1 class="my-2 title-2">Starter Plan</h1>
                        <h2 class="price">$4.85</h2>
                        <h3>per month</h3>
                        <ul class="my-4">
                            <li class="my-1"><i class="bi bi-check2-circle"></i>1 Website</li>
                            <li class="my-1"><i class="bi bi-hdd-fill"></i>5 GB NVMe Storage</li>
                            <li class="my-1"><i class="bi bi-arrow-repeat"></i>Unlimited Bandwidth</li>
                            <li class="my-1"><i class="bi bi-gear"></i>cPanel Control Panel</li>
                            <li class="my-1"><i class="bi bi-envelope-fill"></i>FREE Emails</li>
                            <li class="my-1"><i class="bi bi-wordpress"></i>FREE WordPress Install</li>
                            <li class="my-1"><i class="bi bi-shield-lock-fill"></i>FREE & Auto SSL</li>
                            <li class="my-1"><i class="bi bi-lightning-fill"></i>FREE LiteSpeed Caching</li>
                            <li class="my-1"><i class="bi bi-cloud-arrow-down-fill"></i>FREE Quic Cloud CDN</li>
                            <li class="my-1"><i class="bi bi-arrow-counterclockwise"></i>30-Day Money-Back</li>
                        </ul>
                        <a href="https://billing.jrmhd.tech/store/web-hosting/starter-plan" class="btn my-4">start
                            now</a>
                    </div>
                </div>
                <!-- Premium Plan -->
                <div class="col-md-6 col-lg-3 mx-auto" data-aos="fade-up" data-aos-delay="250">
                    <div class="box">
                        <i class="bi bi-gem my-4"></i>
                        <h1 class="my-2 title-2">Premium Plan</h1>
                        <h2 class="price">$8.85</h2>
                        <h3>per month</h3>
                        <ul class="my-4">
                            <li class="my-1"><i class="bi bi-check2-circle"></i>2 Websites</li>
                            <li class="my-1"><i class="bi bi-hdd-fill"></i>10 GB NVMe Storage</li>
                            <li class="my-1"><i class="bi bi-arrow-repeat"></i>Unlimited Bandwidth</li>
                            <li class="my-1"><i class="bi bi-gear"></i>cPanel Control Panel</li>
                            <li class="my-1"><i class="bi bi-envelope-fill"></i>FREE Emails</li>
                            <li class="my-1"><i class="bi bi-wordpress"></i>FREE WordPress Install</li>
                            <li class="my-1"><i class="bi bi-shield-lock-fill"></i>FREE & Auto SSL</li>
                            <li class="my-1"><i class="bi bi-lightning-fill"></i>FREE LiteSpeed Caching</li>
                            <li class="my-1"><i class="bi bi-cloud-arrow-down-fill"></i>FREE Quic Cloud CDN</li>
                            <li class="my-1"><i class="bi bi-arrow-counterclockwise"></i>30-Day Money-Back</li>
                        </ul>
                        <a href="https://billing.jrmhd.tech/store/web-hosting/premium-plan" class="btn my-4">start
                            now</a>
                    </div>
                </div>
                <!-- Business Plan -->
                <div class="col-md-6 col-lg-3 mx-auto" data-aos="fade-up" data-aos-delay="300">
                    <div class="box">
                        <i class="bi bi-trophy my-4"></i>
                        <h1 class="my-2 title-2">Business Plan</h1>
                        <h2 class="price">$12.85</h2>
                        <h3>per month</h3>
                        <ul class="my-4">
                            <li class="my-1"><i class="bi bi-check2-circle"></i>5 Websites</li>
                            <li class="my-1"><i class="bi bi-hdd-fill"></i>15 GB NVMe Storage</li>
                            <li class="my-1"><i class="bi bi-arrow-repeat"></i>Unlimited Bandwidth</li>
                            <li class="my-1"><i class="bi bi-gear"></i>cPanel Control Panel</li>
                            <li class="my-1"><i class="bi bi-envelope-fill"></i>FREE Emails</li>
                            <li class="my-1"><i class="bi bi-wordpress"></i>FREE WordPress Install</li>
                            <li class="my-1"><i class="bi bi-shield-lock-fill"></i>FREE & Auto SSL</li>
                            <li class="my-1"><i class="bi bi-lightning-fill"></i>FREE LiteSpeed Caching</li>
                            <li class="my-1"><i class="bi bi-cloud-arrow-down-fill"></i>FREE Quic Cloud CDN</li>
                            <li class="my-1"><i class="bi bi-arrow-counterclockwise"></i>30-Day Money-Back</li>
                        </ul>
                        <a href="https://billing.jrmhd.tech/store/web-hosting/business-plan" class="btn my-4">start
                            now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============== End Pricing Section ========== -->




    <!-- ============== Start Blog section ========== -->
    <section class="container blog py-5" id="blog">
        <div class="heading">
            <h4 class="pretitle" data-aos="fade-up">blog</h4>
            <h1 class="title col-12" data-aos="fade-up" data-aos-delay="100">
                our blog
            </h1>
            <p class="col-lg-7 col-12" data-aos="fade-up" data-aos-delay="150">
                As a matter of fact the unification of the coherent software provides
                a strict control over The Accomplishment of Intended Estimation
            </p>
        </div>

        <div class="row gy-4 gx-4">
            <div class="col-lg-4 col-md-6 col-12 mx-auto" data-aos="fade-right" data-aos-delay="250">
                <div class="box card border-0">
                    <div class="col-12">
                        <img src="images/blog/post-images/1.jpg" alt="blog-img" />
                    </div>
                    <div class="card-body">
                        <div class="info d-flex justify-content-between">
                            <h3><i class="bi bi-person-fill title-2 mx-2"></i>admin</h3>
                            <h3>
                                <i class="bi bi-calendar-date-fill title-2 mx-2"></i>27/05/2024
                            </h3>
                            <h3><i class="bi bi-tag-fill title-2 mx-2"></i>web dev</h3>
                        </div>
                        <h1 class="title-2">
                            how to learn javascript easily with this method
                        </h1>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Explicabo earum id assumenda ad neque recusandae, quasi deleniti
                            voluptatum eos vel quas molestias?
                        </p>
                        <a class="learn-more" href="blog-single">
                            read more <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mx-auto" data-aos="fade-up" data-aos-delay="200">
                <div class="box card border-0">
                    <div class="col-12">
                        <img src="images/blog/post-images/2.jpg" alt="blog-img" />
                    </div>
                    <div class="card-body">
                        <div class="info d-flex justify-content-between">
                            <h3><i class="bi bi-person-fill title-2 mx-2"></i>admin</h3>
                            <h3>
                                <i class="bi bi-calendar-date-fill title-2 mx-2"></i>27/03/2024
                            </h3>
                            <h3><i class="bi bi-tag-fill title-2 mx-2"></i>web dev</h3>
                        </div>
                        <h1 class="title-2">
                            why you should learn this new javascript framework
                        </h1>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Explicabo earum id assumenda ad neque recusandae, quasi deleniti
                            voluptatum eos vel quas molestias?
                        </p>
                        <a class="learn-more" href="blog-single">
                            read more <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mx-auto" data-aos="fade-left" data-aos-delay="250">
                <div class="box card border-0">
                    <div class="col-12">
                        <img src="images/blog/post-images/3.jpg" alt="blog-img" />
                    </div>
                    <div class="card-body">
                        <div class="info d-flex justify-content-between">
                            <h3><i class="bi bi-person-fill title-2 mx-2"></i>admin</h3>
                            <h3>
                                <i class="bi bi-calendar-date-fill title-2 mx-2"></i>20/04/2024
                            </h3>
                            <h3><i class="bi bi-tag-fill title-2 mx-2"></i>marketing</h3>
                        </div>
                        <h1 class="title-2">
                            What is digital marketing and why is important ?
                        </h1>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Explicabo earum id assumenda ad neque recusandae, quasi deleniti
                            voluptatum eos vel quas molestias?
                        </p>
                        <a class="learn-more" href="blog-single">
                            read more <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============== End Blog section ========== -->

    <!-- ============== Start FAQ section ========== -->
    <section class="container faq py-5">
        <div class="heading">
            <h4 class="pretitle" data-aos="fade-up">FAQ</h4>
            <h1 class="title col-12" data-aos="fade-up" data-aos-delay="100">
                Frequently Asked Questions
            </h1>
            <p class="col-lg-7 col-12" data-aos="fade-up" data-aos-delay="150">
                Find answers to the most common questions about our web hosting services.
            </p>
        </div>
        <div class="row justify-content-center align-items-center gx-4">
            <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-delay="200">
                <img src="images/faq/customer.png" alt="faq" />
            </div>
            <div class="col-12 col-lg-6">
                <div class="col-12 my-4" data-aos="fade-up" data-aos-delay="250">
                    <div class="box">
                        <div class="d-flex w-100 justify-content-between">
                            <a data-bs-toggle="collapse" class="w-100" onclick="rotateIcon('icon1')"
                                href="#answer1" role="button" aria-expanded="false">
                                <h4 class="d-flex justify-content-between w-100 heading-3 m-0 p-0">
                                    What is included in your Starter Plan?
                                    <i class="bi bi-chevron-compact-down mx-4 rotate-icon" id="icon1"></i>
                                </h4>
                            </a>
                        </div>
                        <p id="answer1" class="collapse">
                            The Starter Plan includes 1 website, 5 GB NVMe storage, unlimited bandwidth, cPanel control
                            panel, free emails, free WordPress install, free & auto SSL, free LiteSpeed caching, free
                            Quic Cloud CDN, and a 30-day money-back guarantee.
                        </p>
                    </div>
                </div>
                <div class="col-12 my-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="box">
                        <div class="d-flex w-100 justify-content-between">
                            <a data-bs-toggle="collapse" class="w-100" onclick="rotateIcon('icon2')"
                                href="#answer2" role="button" aria-expanded="false">
                                <h4 class="d-flex justify-content-between w-100 heading-3 m-0 p-0">
                                    Can I upgrade my plan later?
                                    <i class="bi bi-chevron-compact-down mx-4 rotate-icon" id="icon2"></i>
                                </h4>
                            </a>
                        </div>
                        <p id="answer2" class="collapse">
                            Yes, you can upgrade your plan at any time. Simply contact our support team or use the
                            control panel to change your plan to one that suits your needs better.
                        </p>
                    </div>
                </div>
                <div class="col-12 my-4" data-aos="fade-up" data-aos-delay="350">
                    <div class="box">
                        <div class="d-flex w-100 justify-content-between">
                            <a data-bs-toggle="collapse" class="w-100" onclick="rotateIcon('icon3')"
                                href="#answer3" role="button" aria-expanded="false">
                                <h4 class="d-flex justify-content-between w-100 heading-3 m-0 p-0">
                                    Do you provide a money-back guarantee?
                                    <i class="bi bi-chevron-compact-down mx-4 rotate-icon" id="icon3"></i>
                                </h4>
                            </a>
                        </div>
                        <p id="answer3" class="collapse">
                            Yes, all our plans come with a 30-day money-back guarantee. If you're not satisfied with our
                            service, you can request a full refund within the first 30 days.
                        </p>
                    </div>
                </div>
                <div class="col-12 my-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="box">
                        <div class="d-flex w-100 justify-content-between">
                            <a data-bs-toggle="collapse" class="w-100" onclick="rotateIcon('icon4')"
                                href="#answer4" role="button" aria-expanded="false">
                                <h4 class="d-flex justify-content-between w-100 heading-3 m-0 p-0">
                                    How do I get support if I face any issues?
                                    <i class="bi bi-chevron-compact-down mx-4 rotate-icon" id="icon4"></i>
                                </h4>
                            </a>
                        </div>
                        <p id="answer4" class="collapse">
                            You can reach our support team 24/7 via live chat, email, or phone. We are here to help with
                            any issues you may encounter.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============== End FAQ section ========== -->

    @include('whatsapp')


    <!-- ============== Start Footer section ========== -->
    @include('footer')
    <!-- ============== End Footer section ========== -->


    <!--  JQuery file     -->
    <script src="js/jquery-3.6.1.min.js"></script>

    <!-- bootstrap min js -->
    <script src="js/bootstrap.min.js"></script>

    <!--  toasts file     -->
    <script src="../../cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!--  owl carousel    -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- aos file    -->
    <script src="js/aos.js"></script>

    <!-- gsap file    -->
    <script src="js/gsap.min.js"></script>

    <!--  counter     -->
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.waypoints.js"></script>

    <!-- particles js file  -->
    <script src="js/particles.min.js"></script>

    <!-- jquery isotope file -->
    <script src="js/isotope.min.js"></script>

    <!-- jquery fancybox file -->
    <script src="js/jquery.fancybox.min.js"></script>

    <!--  main js file  -->
    <script src="js/main.js"></script>
</body>

</html>
