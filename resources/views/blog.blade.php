<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Basic Meta Tags -->
    <meta name="description"
        content="Read the latest insights and updates on technology, IT solutions, and business services on the JRMHD blog. Stay informed with expert articles and tips." />
    <meta name="keywords"
        content="JRMHD blog, IT solutions blog, technology insights, business services tips, tech news, IT updates" />
    <meta name="author" content="JRMHD Technologies" />

    <!-- Open Graph Meta Tags for Social Media -->
    <meta property="og:title" content="JRMHD Blog | Insights on Technology, IT Solutions, and Business Services" />
    <meta property="og:description"
        content="Explore the JRMHD blog for expert articles and updates on technology trends, IT solutions, and business services. Get informed and stay ahead with our latest posts." />
    <meta property="og:image" content="images/og-blog.jpg" />
    <meta property="og:url" content="https://www.jrmhd.tech/blog" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="JRMHD Blog | Insights on Technology, IT Solutions, and Business Services" />
    <meta name="twitter:description"
        content="Discover JRMHD's blog for the latest articles and updates on technology, IT solutions, and business services. Stay informed with our expert content." />
    <meta name="twitter:image" content="images/twitter-card-blog.jpg" />

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

    <title>JRMHD Blog | Insights on Technology, IT Solutions, and Business Services</title>
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

    <!-- ======= Start Breadcrumbs ======= -->
    <section class="breadcrumbs py-4" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li><a href="blog.html">Blog</a></li> <!-- Updated to link to your blog overview page -->
            </ol>
            <h2 class="title">Our Blog</h2>
            <p class="col-lg-10 col-12">
                Welcome to our blog! Explore our latest posts and insights on technology, IT solutions, and business
                services.
            </p>
        </div>
    </section><!-- End Breadcrumbs -->



    <!-- ============== Start Blog section ========== -->
    <section class="container blog py-5" id="blog">
        <div class="heading">
            <h4 class="pretitle" data-aos="fade-up">
                blog
            </h4>
            <h1 class="title col-12" data-aos="fade-up" data-aos-delay="100">
                our blog
            </h1>
            <p class="col-lg-7 col-12" data-aos="fade-up" data-aos-delay="150">
                As a matter of fact the unification of the coherent software provides a strict control over
                The Accomplishment of Intended Estimation
            </p>
        </div>

        <div class="row  gy-4 gx-4 ">
            <div class="col-lg-4 col-md-6 col-12 mx-auto" data-aos="fade-right" data-aos-delay="250">
                <div class="box card border-0">
                    <div class="col-12">
                        <img src="images/blog/post-images/1.jpg" alt="blog-img">
                    </div>
                    <div class="card-body">
                        <div class="info d-flex justify-content-between">
                            <h3><i class="bi bi-person-fill title-2 mx-2"></i>admin</h3>
                            <h3> <i class="bi bi-calendar-date-fill title-2 mx-2"></i>27/05/2024</h3>
                            <h3> <i class="bi bi-tag-fill title-2 mx-2"></i>web dev</h3>
                        </div>
                        <h1 class="title-2">
                            how to learn javascript easily with this method
                        </h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Explicabo earum id assumenda ad neque recusandae, quasi deleniti
                            voluptatum eos vel quas molestias?</p>
                        <a class="learn-more" href="blog-single">
                            read more <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class=" col-lg-4 col-md-6 col-12 mx-auto" data-aos="fade-up" data-aos-delay="200">
                <div class="box card border-0">
                    <div class="col-12">
                        <img src="images/blog/post-images/2.jpg" alt="blog-img">
                    </div>
                    <div class="card-body">
                        <div class="info d-flex justify-content-between">
                            <h3><i class="bi bi-person-fill title-2 mx-2"></i>admin</h3>
                            <h3><i class="bi bi-calendar-date-fill title-2 mx-2"></i>27/03/2024</h3>
                            <h3><i class="bi bi-tag-fill title-2 mx-2"></i>web dev</h3>
                        </div>
                        <h1 class="title-2">
                            why you should learn this new javascript framework
                        </h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Explicabo earum id assumenda ad neque recusandae, quasi deleniti
                            voluptatum eos vel quas molestias?</p>
                        <a class="learn-more" href="blog-single">
                            read more <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class=" col-lg-4 col-md-6 col-12 mx-auto" data-aos="fade-left" data-aos-delay="250">
                <div class="box card border-0">
                    <div class="col-12">
                        <img src="images/blog/post-images/3.jpg" alt="blog-img">
                    </div>
                    <div class="card-body">
                        <div class="info d-flex justify-content-between">
                            <h3><i class="bi bi-person-fill title-2 mx-2"></i>admin</h3>
                            <h3> <i class="bi bi-calendar-date-fill title-2 mx-2"></i>20/04/2024</h3>
                            <h3> <i class="bi bi-tag-fill title-2 mx-2"></i>marketing</h3>
                        </div>
                        <h1 class="title-2">
                            What is digital marketing and why is important ?
                        </h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Explicabo earum id assumenda ad neque recusandae, quasi deleniti
                            voluptatum eos vel quas molestias?</p>
                        <a class="learn-more" href="blog-single">
                            read more <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mx-auto" data-aos="fade-right" data-aos-delay="250">
                <div class="box card border-0">
                    <div class="col-12">
                        <img src="images/blog/post-images/1.jpg" alt="blog-img">
                    </div>
                    <div class="card-body">
                        <div class="info d-flex justify-content-between">
                            <h3><i class="bi bi-person-fill title-2 mx-2"></i>admin</h3>
                            <h3> <i class="bi bi-calendar-date-fill title-2 mx-2"></i>27/05/2024</h3>
                            <h3> <i class="bi bi-tag-fill title-2 mx-2"></i>web dev</h3>
                        </div>
                        <h1 class="title-2">
                            how to learn javascript easily with this method
                        </h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Explicabo earum id assumenda ad neque recusandae, quasi deleniti
                            voluptatum eos vel quas molestias?</p>
                        <a class="learn-more" href="blog-single">
                            read more <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class=" col-lg-4 col-md-6 col-12 mx-auto" data-aos="fade-up" data-aos-delay="200">
                <div class="box card border-0">
                    <div class="col-12">
                        <img src="images/blog/post-images/3.jpg" alt="blog-img">
                    </div>
                    <div class="card-body">
                        <div class="info d-flex justify-content-between">
                            <h3><i class="bi bi-person-fill title-2 mx-2"></i>admin</h3>
                            <h3> <i class="bi bi-calendar-date-fill title-2 mx-2"></i>20/04/2024</h3>
                            <h3> <i class="bi bi-tag-fill title-2 mx-2"></i>marketing</h3>
                        </div>
                        <h1 class="title-2">
                            What is digital marketing and why is important ?
                        </h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Explicabo earum id assumenda ad neque recusandae, quasi deleniti
                            voluptatum eos vel quas molestias?</p>
                        <a class="learn-more" href="blog-single">
                            read more <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class=" col-lg-4 col-md-6 col-12 mx-auto" data-aos="fade-left" data-aos-delay="250">
                <div class="box card border-0">
                    <div class="col-12">
                        <img src="images/blog/post-images/2.jpg" alt="blog-img">
                    </div>
                    <div class="card-body">
                        <div class="info d-flex justify-content-between">
                            <h3><i class="bi bi-person-fill title-2 mx-2"></i>admin</h3>
                            <h3><i class="bi bi-calendar-date-fill title-2 mx-2"></i>27/03/2024</h3>
                            <h3><i class="bi bi-tag-fill title-2 mx-2"></i>web dev</h3>
                        </div>
                        <h1 class="title-2">
                            why you should learn this new javascript framework
                        </h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Explicabo earum id assumenda ad neque recusandae, quasi deleniti
                            voluptatum eos vel quas molestias?</p>
                        <a class="learn-more" href="blog-single">
                            read more <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-nav">
            <a href="#" class="active " data-aos="fade-up" data-aos-delay="100">1</a>
            <a href="#" data-aos="fade-up" data-aos-delay="150">2</a>
            <a href="#" data-aos="fade-up" data-aos-delay="200">3</a>
            <a href="#" data-aos="fade-up" data-aos-delay="250">4</a>
        </div>
    </section>
    <!-- ============== End Blog section ========== -->




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

</html>
