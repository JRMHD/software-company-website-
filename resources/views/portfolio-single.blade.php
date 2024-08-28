<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Basic Meta Tags -->
    <meta name="description"
        content="Explore the portfolio of JRMHD, showcasing a range of IT solutions and business services. See our successful projects in web development, graphic design, and more." />
    <meta name="keywords"
        content="JRMHD portfolio, web development projects, graphic design examples, IT solutions portfolio, business services, project showcase" />
    <meta name="author" content="JRMHD Technologies" />

    <!-- Open Graph Meta Tags for Social Media -->
    <meta property="og:title" content="JRMHD Portfolio | Web Development & Design Projects" />
    <meta property="og:description"
        content="Browse through the portfolio of JRMHD to view our diverse projects in web development, graphic design, and other IT solutions. See how we bring business ideas to life." />
    <meta property="og:image" content="images/og-portfolio.jpg" />
    <meta property="og:url" content="https://www.jrmhd.tech/portfolio" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="JRMHD Portfolio | Web Development & Design Projects" />
    <meta name="twitter:description"
        content="Discover JRMHD's portfolio, showcasing successful projects in web development, graphic design, and more. Learn how our services can benefit your business." />
    <meta name="twitter:image" content="images/twitter-card-portfolio.jpg" />

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

    <title>JRMHD Portfolio | Web Development & Design Projects</title>
</head>


<body class="home-1">

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

    <div class="single-service">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-8 col-12" data-aos="fade-right" data-aos-delay="150">
                    <img src="images/service/banner-img2.png" alt="service-img">
                    <h2 class="title my-2">Project Goals</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea
                        rerum beatae dolore quod molestias quos tempora veniam distinctio
                        non, porro eum. Veniam corrupti veritatis ab maiores quod. Explicabo
                        assumenda voluptate unde labore ratione saepe ab omnis quo sit? Atque eos eius hic
                        iusto. Ullam distinctio delectus nobis atque! Ea, atque.</p>
                    <p class="my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea
                        rerum beatae dolore quod molestias quos tempora veniam distinctio
                        non, porro eum. Veniam corrupti veritatis ab maiores quod. Explicabo
                        assumenda voluptate unde labore ratione saepe ab omnis quo sit? Atque eos eius hic
                        iusto. Ullam distinctio delectus nobis atque! Ea, atque.</p>
                    <img src="images/service/business-development-2885464-2409431.webp" alt="service-img">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea
                        rerum beatae dolore quod molestias quos tempora veniam distinctio
                        non, porro eum. Veniam corrupti veritatis ab maiores quod. Explicabo
                        assumenda voluptate unde labore ratione saepe ab omnis quo sit? Atque eos eius hic
                        iusto. Ullam distinctio delectus nobis atque! Ea, atque.</p>
                    <div class="project-results row g-2 my-4">
                        <h2 class="title my-2">Project results</h2>
                        <div class="col-lg-6 col-12">
                            <img src="images/portfolio/1.jpg" alt="portfolio-img">
                        </div>
                        <div class="col-lg-6 col-12">
                            <img src="images/portfolio/6.jpg" alt="portfolio-img">
                        </div>
                        <div class="col-lg-6 col-12">
                            <img src="images/portfolio/3.jpg" alt="portfolio-img">
                        </div>
                        <div class="col-lg-6 col-12">
                            <img src="images/portfolio/2.jpg" alt="portfolio-img">
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-12 client-side row g-2" data-aos="fade-left" data-aos-delay="150">
                    <div class="col-12">
                        <div class="box row align-items-center justify-content-center">
                            <div class="icon">
                                <i class="bi bi-person-lines-fill"></i>
                            </div>
                            <div class="text">
                                <h2 class="title-2 m-0">client</h2>
                                <h3>ahmad erramix</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="box row align-items-center justify-content-center">
                            <div class="icon">
                                <i class="bi bi-list-check"></i>
                            </div>
                            <div class="text">
                                <h2 class="title-2 m-0">service</h2>
                                <h3>digital marketing</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="box row align-items-center justify-content-center">
                            <div class="icon">
                                <i class="bi bi-calendar2-check-fill"></i>
                            </div>
                            <div class="text">
                                <h2 class="title-2 m-0">date</h2>
                                <h3>10/04/2023</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="box row align-items-center justify-content-center">
                            <div class="icon">
                                <i class="bi bi-stopwatch-fill"></i>
                            </div>
                            <div class="text">
                                <h2 class="title-2 m-0">duration</h2>
                                <h3>4 days</h3>
                            </div>
                        </div>
                    </div>
                    <h2 class="title-2 mt-4">follow us</h2>
                    <div class="row social">
                        <div class="icon"><i class="bi bi-facebook"></i></div>
                        <div class="icon mx-2"><i class="bi bi-instagram"></i></div>
                        <div class="icon mx-2"><i class="bi bi-twitter-x "></i></div>
                        <div class="icon mx-2"><i class="bi bi-youtube"></i></div>
                    </div>
                </div>
            </div>

            <!-- ============== Start FAQ section ========== -->
            <section class="container faq py-5">
                <div class="heading">
                    <h4 class="pretitle" data-aos="fade-up">
                        FAQ
                    </h4>
                    <h1 class="title col-12" data-aos="fade-up" data-aos-delay="100">
                        Frequently Asked Questions
                    </h1>
                    <p class="col-lg-7 col-12" data-aos="fade-up" data-aos-delay="150">
                        As a matter of fact the unification of the coherent software provides a strict control over
                        The Accomplishment of Intended Estimation
                    </p>
                </div>
                <div class="row justify-content-center align-items-center  gx-4 ">
                    <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-delay="200">
                        <img src="images/faq/customer.png" alt="faq">
                    </div>
                    <div class="col-12 col-lg-6  ">
                        <div class="col-12 my-4" data-aos="fade-up" data-aos-delay="250">
                            <div class="box">
                                <div class="d-flex w-100 justify-content-between">
                                    <a data-bs-toggle="collapse" class="w-100" onclick="rotateIcon('icon1')"
                                        href="#answer1" role="button" aria-expanded="false">
                                        <h4 class="d-flex justify-content-between w-100 heading-3 m-0 p-0">
                                            Do you offer both on-site and remote IT support?
                                            <i class="bi bi-chevron-compact-down mx-4 rotate-icon" id="icon1"></i>
                                        </h4>
                                    </a>
                                </div>
                                <p id="answer1" class="collapse">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum ullam earum itaque,
                                    quas labore illo
                                    eligendi iure asperiores, modi veniam molestiae vero quasi. Ex, alias modi
                                    voluptates aspernatur
                                    consequuntur facere?
                                </p>
                            </div>
                        </div>
                        <div class="col-12 my-4 " data-aos="fade-up" data-aos-delay="300">
                            <div class="box">
                                <div class="d-flex w-100 justify-content-between">
                                    <a data-bs-toggle="collapse" class="w-100" onclick="rotateIcon('icon2')"
                                        href="#answer2" role="button" aria-expanded="false">
                                        <h4 class="d-flex justify-content-between w-100 heading-3 m-0 p-0">
                                            what is techida ?
                                            <i class="bi bi-chevron-compact-down mx-4 rotate-icon" id="icon2"></i>
                                        </h4>
                                    </a>
                                </div>
                                <p id="answer2" class="collapse">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum ullam earum itaque,
                                    quas labore illo
                                    eligendi iure asperiores, modi veniam molestiae vero quasi. Ex, alias modi
                                    voluptates aspernatur
                                    consequuntur facere?
                                </p>
                            </div>
                        </div>
                        <div class="col-12 my-4 " data-aos="fade-up" data-aos-delay="350">
                            <div class="box">
                                <div class="d-flex w-100 justify-content-between">
                                    <a data-bs-toggle="collapse" class="w-100" onclick="rotateIcon('icon3')"
                                        href="#answer3" role="button" aria-expanded="false">
                                        <h4 class="d-flex justify-content-between w-100 heading-3 m-0 p-0">
                                            Is There Any Updates In The Future ?
                                            <i class="bi bi-chevron-compact-down mx-4 rotate-icon" id="icon3"></i>
                                        </h4>
                                    </a>
                                </div>
                                <p id="answer3" class="collapse">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum ullam earum itaque,
                                    quas labore illo
                                    eligendi iure asperiores, modi veniam molestiae vero quasi. Ex, alias modi
                                    voluptates aspernatur
                                    consequuntur facere?
                                </p>
                            </div>
                        </div>
                        <div class="col-12 my-4" data-aos="fade-up" data-aos-delay="400">
                            <div class="box">
                                <div class="d-flex w-100 justify-content-between">
                                    <a data-bs-toggle="collapse" class="w-100" onclick="rotateIcon('icon4')"
                                        href="#answer4" role="button" aria-expanded="false">
                                        <h4 class="d-flex justify-content-between w-100 heading-3 m-0 p-0">
                                            How Much For The Service?
                                            <i class="bi bi-chevron-compact-down mx-4 rotate-icon" id="icon4"></i>
                                        </h4>
                                    </a>
                                </div>
                                <p id="answer4" class="collapse">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum ullam earum itaque,
                                    quas labore illo
                                    eligendi iure asperiores, modi veniam molestiae vero quasi. Ex, alias modi
                                    voluptates aspernatur
                                    consequuntur facere?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ============== End FAQ section ========== -->
        </div>
    </div>



    <!-- ============== Start Footer section ========== -->
    @include('footer')
    <!-- ============== end Footer section ========== -->


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
