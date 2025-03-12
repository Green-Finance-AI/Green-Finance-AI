<?php include 'analytics.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $ga_id; ?>"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', '<?php echo $ga_id; ?>');
    </script>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Green Finance AI">
    <!-- Description -->
    <meta name="description" content="Expert data science and advanced analytics consulting. Empowering organizations with data-driven insights and bespoke consulting services, offering full-stack data science and end-to-end data solutions.">
    <!-- Page Title -->
    <title>Green Finance AI</title>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','<?php echo $gtm_id; ?>');</script>
        <!-- End Google Tag Manager -->

    <!-- Favicon -->
    <!-- <link href="vendor/img/favicon.ico" rel="icon"> -->
    <!-- Bundle -->
    <link rel="stylesheet" href="vendor/css/bundle.min.css">
    <link rel="stylesheet" href="vendor/css/elements.css">
    <!-- Plugin Css -->
    <link href="vendor/css/wow.css" rel="stylesheet">
    <link href="vendor/css/LineIcons.min.css" rel="stylesheet">
    <link href="vendor/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="vendor/css/owl.carousel.min.css" rel="stylesheet">
    <link href="vendor/css/cubeportfolio.min.css" rel="stylesheet">
    <link href="dark-creative/css/line-awesome.min.css" rel="stylesheet">
    <!-- Style Sheet -->
    <link href="dark-creative/css/style.css" rel="stylesheet">
    <link href="dark-creative/css/custom.css" rel="stylesheet">
    <!-- Custom fonts -->
    <!-- <link href="dark-creative/fonts/stylesheet.css" rel="stylesheet"> -->
    <!-- SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
</head>


<body data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $gtm_id; ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Start Loader -->
<!-- <div class="loader">
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="row">
                    <a class="intro-banner-vdo-play-btn pinkBg">
                        <i class="glyphicon glyphicon-play whiteText" aria-hidden="true"></i>
                        <span class="ripple pinkBg"></span>
                        <span class="ripple pinkBg"></span>
                        <span class="ripple pinkBg"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- End Loader -->


<!-- Start Header -->
<header id="home">
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-simple nav-line">
        <div class="container">
            <a href="#slider-area" title="Logo" class="logo scroll">
                <img src="dark-creative/img/logo-mockup-nav.png" title="logo" alt="logo" class="logo-default">
            </a>
            <div class="collapse navbar-collapse" id="megaone">
                <div class="navbar-nav  ml-auto mr-auto">
                    <a id="navbar-home" class="nav-link scroll line" href="#home">Home</a>
                    <a id="navbar-training" class="nav-link line" href="https://training.greenfinanceai.com" target="_blank">Training</a>
                    <a id="navbar-contact" class="nav-link scroll line" href="#contact">Contact</a>
                </div>
            </div>
            
            <a id="call-to-action" href="#pricing" class="scroll btn btn-medium btn-margin btn-yellow d-none d-lg-block">Book your free consultation today</a>

            <!-- <div class="banner-icons mt-2 mr-2"> -->
                <!-- <a href="#"><i class="lab la-facebook-f"></i></a>
                <a href="#"><i class="fab fa-x-twitter"></i></a> -->
                <!-- <a href="https://github.com/Green-Finance-AI"><i class="fab fa-github"></i></a>
                <a href="https://hub.docker.com/u/alicesoto"><i class="fab fa-docker"></i></a>
                <a href="https://www.linkedin.com/in/alicelepissier/"><i class="lab la-linkedin-in"></i></a>
                <a href="mailto:info@greenfinanceai.com"><i class="fa-solid fa-envelope"></i></a> -->
                <!-- <a href="#"><i class="lab la-instagram"></i></a> -->
            <!-- </div> -->
        </div>
    </nav>
    <!--Side Nav-->
    <div class="side-menu left hidden">
        <div class="quarter-circle  btn_sideNavClose">
            <div class="menu_bars2 active link">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="inner-wrapper">
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a id="sidenav-home" class="nav-link scroll" href="#home">Home</a>
                    </li>
                    <li>
                        <a id="sidenav-training" class="nav-link" href="https://training.greenfinanceai.com" target="_blank">Training</a>
                    </li>
                    <li class="nav-item">
                        <a id="sidenav-contact" class="nav-link scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </nav>

            <div class="side-footer w-100">
                <ul class="social-icons-simple">
                    <li><a id="side-footer-link" class="github-text-hvr" href="https://github.com/Green-Finance-AI"><i class="fab fa-github"></i></a></li>
                    <li><a id="side-footer-link" class="docker-text-hvr" href="https://hub.docker.com/u/alicesoto"><i class="fab fa-docker"></i></a></li>
                    <!-- <li><a class="linkedin-text-hvr" href="https://www.linkedin.com/in/alicelepissier/"><i class="fab fa-linkedin-in"></i></a></li> -->
                    <li><a id="side-footer-link" class="envelope-text-hvr" href="mailto:info@greenfinanceai.com"><i class="fa-solid fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <a id="close_side_menu" href="javascript:void(0);"></a>
</header>
<!-- End Header -->


<!-- Start Fix Nav -->
<div class="fixed-nav-on-scroll fixed-nav-appear d-none sidemenu_toggle">
    <div class="row no-gutters">
        <div class="col-12 d-flex justify-content-center align-items-center position-relative">
            <div class="fixed-icon-scroll">
                <a class="menu_bars menu-bars-setting mr-3 mr-lg-0">
                    <div class="menu-lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End Fix Nav -->


<!-- Start Banner -->
<!-- <section class="p-0 banner" id="home-banner"> -->
<section class="p-0 banner" id="particles-js">
    <div class="slider-area" id="slider-area">
        <!-- <div class="bg-overlay bg-black opacity-4"></div> -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 heading-area text-center">
                    <!-- <h4 class="main-font font-weight-bold text-white wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.2s">Start Your Online and Creative</h4> -->
                    <!-- <h4 class="main-font text-white wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.2s">Start Your Online and Creative</h4> -->
                    <h2 class="text-white my-3 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.6s">GREEN FINANCE AI</h2>
                    <a id="learn-more" href="#about" class="scroll btn btn-medium btn-yellow text-capitalize mt-3 mb-5 mb-md-0 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="2s">Learn More<span></span></a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Start About -->
<section class="ui-block-13 about" id="about">
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="main-title style-two d-flex justify-content-md-around align-items-center flex-column flex-md-row text-center text-md-left wow fadeIn" data-wow-delay="300ms">
                    <div class="mb-4 mb-md-0">
                        <h5> About Green Finance AI </h5>
                        <h2> Delivering Technical Excellence and Business Insight </h2>
                    </div>
                    <div class="ml-md-4 pl-md-2">
                        <p class="mb-4">
                            Green Finance AI provides advanced data science, machine learning, and full-stack development services with a focus on delivering real-world business impact. We specialize in transforming complex data into actionable insights through robust, end-to-end solutions that integrate seamlessly into your operations.
                        </p>
                        <p>
                            Our expertise spans the entire data pipeline—from data engineering and model development to deploying scalable applications on virtual machines and cloud platforms. With a solid foundation in scientific programming and a proven ability to bridge the gap between technical complexity and strategic decision-making, Green Finance AI empowers organizations to thrive in a data-driven world.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-12 mb-xs-2rem">
                <div class="about-box center-block wow zoomIn" data-wow-delay="400ms">
                    <div class="about-opacity-icon"> <i class="fa fa-chart-line" aria-hidden="true"></i> </div>
                    <div class="about-main-icon pb-4">
                        <i class="fa fa-chart-line" aria-hidden="true"></i>
                    </div>
                    <h5 class="mb-0">Economics & Statistics Consulting</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 mb-xs-2rem">
                <div class="about-box center-block wow zoomIn" data-wow-delay="500ms">
                    <div class="about-opacity-icon"> 
                        <svg class="icon-class opacity-icon" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.13053 2.79282C6.78561 2.28331 7.64507 2 8.5 2C8.74064 2 8.9312 2.12486 9.04164 2.21146C9.16633 2.30922 9.28272 2.43395 9.38565 2.55868C9.45957 2.64826 9.5 2.76078 9.5 2.87692V6.5H8.41465C8.20873 5.9174 7.65311 5.5 7 5.5C6.17157 5.5 5.5 6.17157 5.5 7C5.5 7.82843 6.17157 8.5 7 8.5C7.65311 8.5 8.20873 8.0826 8.41465 7.5H9.5V16.9152C9.5 17.0652 9.43266 17.2072 9.31655 17.3022C8.85465 17.68 8.23639 18 7.5 18C6.31413 18 5.43097 17.4016 4.85957 16.6873C4.42092 16.139 4.14123 15.4928 4.04126 14.9347C3.71454 14.8495 3.33214 14.6754 2.9871 14.3796C2.43532 13.9067 2 13.1413 2 12C2 11.4433 2.03699 10.9403 2.11915 10.5H5.25C5.88581 10.5 6.41075 10.9747 6.48973 11.589C5.91251 11.7978 5.5 12.3507 5.5 13C5.5 13.8284 6.17157 14.5 7 14.5C7.82843 14.5 8.5 13.8284 8.5 13C8.5 12.3446 8.07969 11.7874 7.49391 11.5832C7.40857 10.4185 6.43654 9.5 5.25 9.5H2.44117C2.59442 9.20217 2.7989 8.94981 3.0664 8.77147C3.13479 8.72588 3.20555 8.68631 3.27837 8.65255C2.99364 7.82134 3.06843 6.8468 3.34163 6.08183C3.51741 5.58965 3.79482 5.12486 4.17729 4.81475C4.42931 4.6104 4.72888 4.47422 5.05692 4.44859C5.20085 3.76595 5.60552 3.20116 6.13053 2.79282ZM10.5 14.5H11.25C12.4926 14.5 13.5 13.4926 13.5 12.25V10.4146C14.0826 10.2087 14.5 9.65311 14.5 9C14.5 8.17157 13.8284 7.5 13 7.5C12.1716 7.5 11.5 8.17157 11.5 9C11.5 9.65311 11.9174 10.2087 12.5 10.4146V12.25C12.5 12.9404 11.9404 13.5 11.25 13.5H10.5V2.87692C10.5 2.76078 10.5404 2.64826 10.6144 2.55868C10.7173 2.43395 10.8337 2.30922 10.9584 2.21146C11.0688 2.12486 11.2594 2 11.5 2C12.3549 2 13.2144 2.28331 13.8695 2.79282C14.3945 3.20116 14.7991 3.76595 14.9431 4.44859C15.2711 4.47422 15.5707 4.6104 15.8227 4.81475C16.2052 5.12486 16.4826 5.58965 16.6584 6.08183C16.9316 6.8468 17.0064 7.82134 16.7216 8.65255C16.7945 8.68631 16.8652 8.72588 16.9336 8.77147C17.209 8.95505 17.4176 9.21708 17.5722 9.52639C17.8745 10.1309 18 10.9745 18 12C18 13.1413 17.5647 13.9067 17.0129 14.3796C16.6679 14.6754 16.2855 14.8495 15.9587 14.9347C15.8588 15.4928 15.5791 16.139 15.1404 16.6873C14.569 17.4016 13.6859 18 12.5 18C11.7636 18 11.1453 17.68 10.6835 17.3022C10.5673 17.2072 10.5 17.0652 10.5 16.9152V14.5ZM7 6.5C6.72386 6.5 6.5 6.72386 6.5 7C6.5 7.27614 6.72386 7.5 7 7.5C7.27614 7.5 7.5 7.27614 7.5 7C7.5 6.72386 7.27614 6.5 7 6.5ZM7 12.5C6.72386 12.5 6.5 12.7239 6.5 13C6.5 13.2761 6.72386 13.5 7 13.5C7.27614 13.5 7.5 13.2761 7.5 13C7.5 12.7239 7.27614 12.5 7 12.5ZM13 9.5C13.2761 9.5 13.5 9.27614 13.5 9C13.5 8.72386 13.2761 8.5 13 8.5C12.7239 8.5 12.5 8.72386 12.5 9C12.5 9.27614 12.7239 9.5 13 9.5Z"/>
                        </svg>
                    </div>
                    <div class="about-main-icon pb-4">
                        <svg class="icon-class" height="20" viewBox="0 0 20 20" width="20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.13053 2.79282C6.78561 2.28331 7.64507 2 8.5 2C8.74064 2 8.9312 2.12486 9.04164 2.21146C9.16633 2.30922 9.28272 2.43395 9.38565 2.55868C9.45957 2.64826 9.5 2.76078 9.5 2.87692V6.5H8.41465C8.20873 5.9174 7.65311 5.5 7 5.5C6.17157 5.5 5.5 6.17157 5.5 7C5.5 7.82843 6.17157 8.5 7 8.5C7.65311 8.5 8.20873 8.0826 8.41465 7.5H9.5V16.9152C9.5 17.0652 9.43266 17.2072 9.31655 17.3022C8.85465 17.68 8.23639 18 7.5 18C6.31413 18 5.43097 17.4016 4.85957 16.6873C4.42092 16.139 4.14123 15.4928 4.04126 14.9347C3.71454 14.8495 3.33214 14.6754 2.9871 14.3796C2.43532 13.9067 2 13.1413 2 12C2 11.4433 2.03699 10.9403 2.11915 10.5H5.25C5.88581 10.5 6.41075 10.9747 6.48973 11.589C5.91251 11.7978 5.5 12.3507 5.5 13C5.5 13.8284 6.17157 14.5 7 14.5C7.82843 14.5 8.5 13.8284 8.5 13C8.5 12.3446 8.07969 11.7874 7.49391 11.5832C7.40857 10.4185 6.43654 9.5 5.25 9.5H2.44117C2.59442 9.20217 2.7989 8.94981 3.0664 8.77147C3.13479 8.72588 3.20555 8.68631 3.27837 8.65255C2.99364 7.82134 3.06843 6.8468 3.34163 6.08183C3.51741 5.58965 3.79482 5.12486 4.17729 4.81475C4.42931 4.6104 4.72888 4.47422 5.05692 4.44859C5.20085 3.76595 5.60552 3.20116 6.13053 2.79282ZM10.5 14.5H11.25C12.4926 14.5 13.5 13.4926 13.5 12.25V10.4146C14.0826 10.2087 14.5 9.65311 14.5 9C14.5 8.17157 13.8284 7.5 13 7.5C12.1716 7.5 11.5 8.17157 11.5 9C11.5 9.65311 11.9174 10.2087 12.5 10.4146V12.25C12.5 12.9404 11.9404 13.5 11.25 13.5H10.5V2.87692C10.5 2.76078 10.5404 2.64826 10.6144 2.55868C10.7173 2.43395 10.8337 2.30922 10.9584 2.21146C11.0688 2.12486 11.2594 2 11.5 2C12.3549 2 13.2144 2.28331 13.8695 2.79282C14.3945 3.20116 14.7991 3.76595 14.9431 4.44859C15.2711 4.47422 15.5707 4.6104 15.8227 4.81475C16.2052 5.12486 16.4826 5.58965 16.6584 6.08183C16.9316 6.8468 17.0064 7.82134 16.7216 8.65255C16.7945 8.68631 16.8652 8.72588 16.9336 8.77147C17.209 8.95505 17.4176 9.21708 17.5722 9.52639C17.8745 10.1309 18 10.9745 18 12C18 13.1413 17.5647 13.9067 17.0129 14.3796C16.6679 14.6754 16.2855 14.8495 15.9587 14.9347C15.8588 15.4928 15.5791 16.139 15.1404 16.6873C14.569 17.4016 13.6859 18 12.5 18C11.7636 18 11.1453 17.68 10.6835 17.3022C10.5673 17.2072 10.5 17.0652 10.5 16.9152V14.5ZM7 6.5C6.72386 6.5 6.5 6.72386 6.5 7C6.5 7.27614 6.72386 7.5 7 7.5C7.27614 7.5 7.5 7.27614 7.5 7C7.5 6.72386 7.27614 6.5 7 6.5ZM7 12.5C6.72386 12.5 6.5 12.7239 6.5 13C6.5 13.2761 6.72386 13.5 7 13.5C7.27614 13.5 7.5 13.2761 7.5 13C7.5 12.7239 7.27614 12.5 7 12.5ZM13 9.5C13.2761 9.5 13.5 9.27614 13.5 9C13.5 8.72386 13.2761 8.5 13 8.5C12.7239 8.5 12.5 8.72386 12.5 9C12.5 9.27614 12.7239 9.5 13 9.5Z"/>
                        </svg>
                    </div>
                    <h5 class="mb-0">AI & Machine Learning</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 mb-xs-2rem">
                <div class="about-box center-block wow zoomIn" data-wow-delay="600ms">
                    <div class="about-opacity-icon"> <i class="fa fa-briefcase" aria-hidden="true"></i> </div>
                    <div class="about-main-icon pb-4">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                    </div>
                    <h5 class="mb-0">Business Intelligence</h5>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="about-box center-block wow zoomIn" data-wow-delay="700ms">
                    <div class="about-opacity-icon"> <i class="fa fa-tools" aria-hidden="true"></i> </div>
                    <div class="about-main-icon pb-4">
                        <i class="fa fa-tools" aria-hidden="true"></i>
                    </div>
                    <h5 class="mb-0">Full-Stack Development</h5>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Start Pricing -->
<section class="pricing bg-black" id="pricing">
    <div class="container">

        <div class="row text-center">
            <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 wow zoomIn heading-area" data-wow-duration="1s" data-wow-delay=".1s">
                <span class="sub-heading text-yellow">Designed to meet your objectives</span>
                <h3 class="heading text-center padding-bottom-half">Choose the Right Service</h3>
            </div>
        </div>

        <div class="row">

            <div class="col-12 col-lg-4 wow slideInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                <div class="price-item text-center">
                    <div class="price_header">
                        <span class="price_header_text underline">Free Consultation</span>
                        <p class="price_header_content">Discover if our services align with your needs.</p>
                    </div>
                    <p class="actual_price">Free</p>
                    <ul class="price-list">
                        <li>Complimentary 20-minute session</li>
                        <li>High-level project discussion</li>
                        <li>Identify goals and challenges</li>
                        <li>No obligation, just insight</li>
                    </ul>
                    <a id="book-free-consult" role="button"
                    class="scroll btn btn-medium btn-rounded btn-trans btn-margin" 
                    data-cal-link="green-finance-ai/free-consultation"
                    data-cal-namespace="free-consultation"
                    data-cal-config='{"layout":"month_view"}'>Book Now</a>
                </div>
            </div>

            <div class="col-12 col-lg-4 wow slideInUp" data-wow-duration="1s" data-wow-delay=".6s">
                <div class="price-item text-center price-margin">
                    <div class="price_header">
                        <span class="price_header_text underline">Expert Session</span>
                        <p class="price_header_content">Get expert advice on specific challenges.</p>
                    </div>
                    <p class="actual_price"><sup class="dollar">$</sup>200<span class="small_font">/Hour</span></p>
                    <ul class="price-list">
                        <li>Statistics & data science</li>
                        <li>Modeling assumptions</li>
                        <li>Document review</li>
                        <li>Coding & implementation</li>
                    </ul>
                    <a id="book-expert-session" role="button"
                    class="scroll btn btn-medium btn-rounded btn-trans btn-margin" 
                    data-cal-link="green-finance-ai/expert-session"
                    data-cal-namespace="expert-session"
                    data-cal-config='{"layout":"month_view"}'>Book Now</a>
                </div>
            </div>

            <div class="col-12 col-lg-4 wow slideInRight" data-wow-duration="1s" data-wow-delay=".3s">
                <div class="price-item text-center">
                    <div class="price_header">
                        <span class="price_header_text underline">Custom Projects</span>
                        <p class="price_header_content">Ideal for long-term or large-scale projects.</p>
                    </div>
                    <p class="actual_price">Quote</p>
                    <ul class="price-list">
                        <li>Build scientific apps</li>
                        <li>Economic and statistical models</li>
                        <li>End-to-end project support</li>
                        <li>Tailored analytics solutions</li>
                    </ul>
                    <a id="book-request-quote" href="#contact" class="scroll btn btn-medium btn-rounded btn-trans btn-margin">Contact For Pricing</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Pricing -->


<!-- Start Contact -->
<section id="contact">
    <div class="container">

        <div class="row text-center mb-5">
            <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 wow zoomIn heading-area" data-wow-duration="1s" data-wow-delay=".1s">
                <span class="sub-heading text-yellow">Let's design unique solutions for your technical needs</span>
                <h3 class="heading text-center">Get in Touch Today</h3>
            </div>
        </div>

        <form class="contact-form" id="contact-form-data" method="POST">
            <div class="row wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".5s">

                <div class="col-sm-12" id="result"></div>

                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="First Name" required="" id="first_name" name="firstName">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Last Name" required="" id="last_name" name="lastName">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <input class="form-control" type="email" placeholder="Email" required="" id="email" name="userEmail">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <input class="form-control" type="tel" placeholder="Phone (optional)" id="phone" name="userPhone">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Message" id="message" name="userMessage"></textarea>
                    </div>
                </div>
                <div class="col-sm-12">
                    <button type="submit" class="btn contact_btn btn-large btn-yellow mt-4" id="submit_btn">
                        <i class="d-none fas fa-spinner fa-spin"></i>
                        Contact Now
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- End Contact -->


<!-- Start Footer -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-12">
                <div class="footer-social text-center">
                    <ul class="list-unstyled">
                        <li><a id="footer-link" class="wow fadeInUp" href="https://github.com/Green-Finance-AI"><i aria-hidden="true" class="fab fa-github"></i><span></span></a></li>
                        <li><a id="footer-link" class="wow fadeInDown" href="https://hub.docker.com/u/alicesoto"><i aria-hidden="true" class="fab fa-docker"></i><span></span></a></li>
                        <li><a id="footer-link" class="wow fadeInUp" href="mailto:info@greenfinanceai.com"><i aria-hidden="true" class="fa-solid fa-envelope"></i><span></span></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-12 text-center mt-3">
                <p class="company-about fadeIn">&copy; 2025 Green Finance AI. A company by 
                    <img src="dark-creative/img/future-forward-ventures-logo.png" alt="Future Forward Ventures" style="height: 24px; vertical-align: bottom;"> 
                    <a href="https://futureforwardventures.ai" style="color: inherit; text-decoration: none;" onmouseover="this.style.color='#1ED873'" onmouseout="this.style.color='inherit'">Future Forward Ventures</a>.
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->


<!-- Cal element-click embed code begins -->
<script type="text/javascript">
    (function (C, A, L) { let p = function (a, ar) { a.q.push(ar); }; let d = C.document; C.Cal = C.Cal || function () { let cal = C.Cal; let ar = arguments; if (!cal.loaded) { cal.ns = {}; cal.q = cal.q || []; d.head.appendChild(d.createElement("script")).src = A; cal.loaded = true; } if (ar[0] === L) { const api = function () { p(api, arguments); }; const namespace = ar[1]; api.q = api.q || []; if(typeof namespace === "string"){cal.ns[namespace] = cal.ns[namespace] || api;p(cal.ns[namespace], ar);p(cal, ["initNamespace", namespace]);} else p(cal, ar); return;} p(cal, ar); }; })(window, "https://app.cal.com/embed/embed.js", "init");
  Cal("init", "free-consultation", {origin:"https://cal.com"});
  
    
    // Important: Please add the following attributes to the element that should trigger the calendar to open upon clicking.
    // `data-cal-link="green-finance-ai/free-consultation"`
    // data-cal-namespace="free-consultation"
    // `data-cal-config='{"layout":"month_view"}'`
  
    Cal.ns["free-consultation"]("ui", {"cssVarsPerTheme":{"light":{"cal-brand":"#292929"},"dark":{"cal-brand":"#fafafa"}},"hideEventTypeDetails":false,"layout":"month_view"});
</script>
<!-- Cal element-click embed code ends -->


<!-- Cal element-click embed code begins -->
<script src="https://app.cal.com/embed/embed.js" async></script>
<script type="text/javascript">
    (function (C, A, L) { let p = function (a, ar) { a.q.push(ar); }; let d = C.document; C.Cal = C.Cal || function () { let cal = C.Cal; let ar = arguments; if (!cal.loaded) { cal.ns = {}; cal.q = cal.q || []; d.head.appendChild(d.createElement("script")).src = A; cal.loaded = true; } if (ar[0] === L) { const api = function () { p(api, arguments); }; const namespace = ar[1]; api.q = api.q || []; if(typeof namespace === "string"){cal.ns[namespace] = cal.ns[namespace] || api;p(cal.ns[namespace], ar);p(cal, ["initNamespace", namespace]);} else p(cal, ar); return;} p(cal, ar); }; })(window, "https://app.cal.com/embed/embed.js", "init");
  Cal("init", "expert-session", {origin:"https://cal.com"});
  
    // Important: Please add the following attributes to the element that should trigger the calendar to open upon clicking.
    // `data-cal-link="green-finance-ai/expert-session"`
    // data-cal-namespace="expert-session"
    // `data-cal-config='{"layout":"month_view"}'`
  
    Cal.ns["expert-session"]("ui", {"cssVarsPerTheme":{"light":{"cal-brand":"#292929"},"dark":{"cal-brand":"#fafafa"}},"hideEventTypeDetails":false,"layout":"month_view"});
</script>
<!-- Cal element-click embed code ends -->


<!-- Start Scroll Top -->
<div class="go-top"><i class="fas fa-angle-up"></i><i class="fas fa-angle-up"></i></div>
<!-- End Scroll Top -->


<!-- JavaScript -->
<script src="vendor/js/bundle.min.js"></script>
<!-- Plugin Js -->
<script src="vendor/js/jquery.appear.js"></script>
<script src="vendor/js/morphext.min.js"></script>
<script src="vendor/js/parallaxie.min.js"></script>
<script src="vendor/js/owl.carousel.min.js"></script>
<script src="vendor/js/jquery.cubeportfolio.min.js"></script>
<script src="vendor/js/wow.min.js"></script>
<!-- Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4fusEY9kSwNHgtK8KOgyoTsyP5Tb2NXo"></script>
<script src="dark-creative/js/map.js"></script>
<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Custom Js -->
<script src="vendor/js/contact_us.js"></script>
<script src="dark-creative/js/script.js"></script>
<script src="dark-creative/js/particles.min.js"></script>

</body>
</html>