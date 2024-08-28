<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Basic Meta Tags -->
    <meta name="description"
        content="Learn more about JRMHD Technologies. Discover our mission, values, and the team behind our IT solutions and web development services." />
    <meta name="keywords"
        content="About JRMHD, IT solutions, web development, technology services, JRMHD team, company mission, JRMHD values" />
    <meta name="author" content="JRMHD Technologies" />

    <!-- Open Graph Meta Tags for Social Media -->
    <meta property="og:title" content="About Us | JRMHD Technologies" />
    <meta property="og:description"
        content="Discover JRMHD Technologies – our mission, values, and the dedicated team providing top-tier IT solutions and web development services." />
    <meta property="og:image" content="images/about-og-image.jpg" />
    <meta property="og:url" content="https://www.jrmhd.tech/about" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="About Us | JRMHD Technologies" />
    <meta name="twitter:description"
        content="Learn more about JRMHD Technologies, including our mission, values, and the team dedicated to delivering exceptional IT solutions and web development services." />
    <meta name="twitter:image" content="images/about-twitter-card.jpg" />

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

    <title>About Us | JRMHD Technologies</title>
</head>


<body>

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

    <!-- ======= srart Breadcrumbs ======= -->
    <section class="breadcrumbs py-4" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>About Us</li>
            </ol>
            <h2 class="title">About Us</h2>
            <p class="col-lg-10 col-12">
                Learn more about our mission, values, and the team behind our success. We are dedicated to delivering
                exceptional services and building lasting relationships with our clients.
            </p>
        </div>
    </section><!-- End Breadcrumbs -->



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

    <!-- particles js file  -->
    <script src="js/particles.min.js"></script>

    <!-- gsap file    -->
    <script src="js/gsap.min.js"></script>

    <script src="../../cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>

    <!--  counter     -->
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.waypoints.js"></script>

    <!-- jquery isotope file -->
    <script src="js/isotope.min.js"></script>

    <!-- jquery fancybox file -->
    <script src="js/jquery.fancybox.min.js"></script>

    <!--  main js file  -->
    <script src="js/main.js"></script>


</body>


</html>

</html>
