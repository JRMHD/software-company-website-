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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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

    <!-- ======= srart Breadcrumbs ======= -->
    <section class="breadcrumbs py-4" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>portfolio</li>
            </ol>
            <h2 class="title">our portfolio</h2>
            <p class="col-lg-10 col-12">
                Although, final stages of the internal network gives a complete
                experience of The Parameter of Speculative Environment
            </p>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ============== Start portfolio section ========== -->
    <section class="container portfolio py-5" id="portfolio">
        <div class="heading">
            <h4 class="pretitle" data-aos="fade-up">portfolio</h4>
            <h1 class="title col-12" data-aos="fade-up" data-aos-delay="100">
                our portfolio
            </h1>
        </div>
        <div class="row portfolio-row gy-4 gx-4" data-aos="fade-up" data-aos-delay="150">
            @foreach ($projects as $project)
                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="portfolio-item">
                        <div class="project-image">
                            @if ($project->image)
                                <div class="image-wrapper">
                                    <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->name }}"
                                        class="gallery-item" />
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <h4 style="color: #1A56DB; font-weight: bold;">{{ $project->name }}</h4>
                                            <p>{{ $project->type }}</p>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div
                                    style="width: 100%; height: 200px; background-color: #E5E7EB; display: flex; align-items: center; justify-content: center;">
                                    <span style="color: #9CA3AF;">No Image Available</span>
                                </div>
                            @endif
                        </div>
                        <div class="project-content">
                            <h3 class="project-title">{{ $project->name }}</h3>
                            <h6 class="project-type">{{ $project->type }}</h6>
                            <p class="project-description">{{ Str::limit($project->description, 120) }}</p>
                            <div class="d-flex tags my-2">
                                @foreach (explode(',', $project->languages) as $language)
                                    <span>#{{ trim($language) }}</span>
                                @endforeach
                            </div>
                            <div class="link">
                                <a class="view-project-button" href="{{ route('portfolio.show', $project) }}">view
                                    project</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $projects->links('vendor.pagination.bootstrap-5') }}
        </div>
    </section>
    <!-- ============== End portfolio section ========== -->


    <style>
        /* Ensure all images have the same size with rounded corners and shadows */
        .image-wrapper {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .image-wrapper img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .image-wrapper:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        /* Add a cool overlay effect */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .overlay-content {
            text-align: center;
        }

        .image-wrapper:hover .overlay {
            opacity: 1;
        }

        /* Custom styling for the 'view project' button */
        .view-project-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #1E9547;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .view-project-button:hover {
            background-color: #1A56DB;
            transform: translateY(-2px);
        }

        /* Add subtle scale effect on hover */
        .project-image img:hover {
            transform: scale(1.05);
        }
    </style>
    <!-- ============== End portfolio section ========== -->


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
