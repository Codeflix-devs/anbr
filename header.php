<!DOCTYPE html>
<html lang="en-US">
<?php
//Constants Declaration

/*
 *PRODUCT_BANNER for OUR PRODUCTS section in index.php
 */
define('PRODUCT_BANNER' ,"assets/img/product-banner-img-1.jpg");

?>
<head>
    <!-- ========== Meta Tags ========== -->
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Anbr Template">
	<meta name="twitter:card" content="summary_large_image" />
	<meta property="og:site_name" content="ANBR" />
	<meta property="og:url" content="https://www.anbr.in/" />
	<meta property="og:description" content="Anbr provides sustainable solutions in Agriculture through bulk manufacture of harmless feticides & pesticides for farming." />
	<meta property="og:title" content="Bio Fertilizer & Organic Fertilizer | Anbr" />
	<meta property="og:type" content="website" />
	<meta name="keywords" content="anbr, bio fertilizer providers, organic fertilizer providers" />
	<meta name="description" content="Anbr provides sustainable solutions in Agriculture through bulk manufacture of harmless feticides & pesticides for farming." />

    <!-- ========== Page Title ========== -->
   <title>Bio Fertilizer & Organic Fertilizer | Anbr</title> 

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <!-- ========== Start Stylesheet ========== -->
    <?php
$curr_lang = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] 
                === 'on' ? "https" : "http") . 
                "://" . $_SERVER['HTTP_HOST'] . 
                $_SERVER['REQUEST_URI'];
if($curr_lang == 'https://www.anbr.in/index.php' || $curr_lang == 'https://www.anbr.in/'){ ?>
    <link href="#" data-test="test">
<?php }
else{ ?>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/themify-icons.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
<?php } ?>
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P27RT8S');</script>
<!-- End Google Tag Manager -->


</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P27RT8S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area bg-dark text-light inc-pad">
        <div class="container-full">
            <div class="row align-center">
                <div class="col-lg-9">
                    <div class="flex-item left">
                        <ul>
                            <li>
                                <div class="dropdown">
                                    <button class="dropbtn p-0 text-white">Work Philosophy</button>
                                    <div class="dropdown-content">
                                        <a class="dropdown-item" href="overview-work-philosophy.php">Overview</a>
                                        <a class="dropdown-item" href="inovation.php">Innovation</a>
                                        <a class="dropdown-item" href="sustainability.php">Sustainability</a>
                                        <a class="dropdown-item" href="grower-partner-focus.php">Growth & Partner Focus</a>
                                        <a class="dropdown-item" href="our-people.php">Our People</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <button class="dropbtn p-0 text-white">Our Technology</button>
                                    <div class="dropdown-content">
                                        <a class="dropdown-item" href="overview-technology.php">Overview</a>
                                        <a class="dropdown-item" href="soil-health.php">Soil Health</a>
                                        <a class="dropdown-item" href="plant-establishment.php">Plant Establishment</a>
                                        <a class="dropdown-item" href="nutrient-uptake.php">Nutrient Uptake</a>
                                        <a class="dropdown-item" href="stress-managment.php">Stress Management</a>
                                        <a class="dropdown-item" href="crop-quality.php">Crop Quality</a>
                                        <a class="dropdown-item" href="post-harvest.php">Post Harvest</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <button class="dropbtn p-0 text-white">The Four Principles</button>
                                    <div class="dropdown-content">
                                        <a class="dropdown-item" href="health.php">Health</a>
                                        <a class="dropdown-item" href="ecology.php">Ecology</a>
                                        <a class="dropdown-item" href="fairness.php">Fairness</a>
                                        <a class="dropdown-item" href="care.php">care</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="culture.php">Culture</a>
                            </li>
                            <li>
                                <a href="#">Careers</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 text-right">
                    <div class="social">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/ANBRELIXIRPVTLTD/?ref=pages_you_manage" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav">

            <div class="container-full">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav inc-border">
                    <ul>
                        <li class="side-menu">
                            <a href="" class="m-2 support-link-btn" data-toggle="modal" data-target="#exampleModalCenter">Contact us<i class="ml-2 fas fa-arrow-right"></i></a>
                            <!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" placeholder="Enter Your Name">
                                            <input type="email" name="email" id="email" placeholder="Enter Your Email">
                                            <input type="text" name="company_name" id="company_name" placeholder="Enter Your Company Name">
                                            <input type="number" name="phone" id="phone" placeholder="Enter Your Phone Number">
                                            <textarea name="message" id="message" cols="20" rows="8" placeholder="Write Message"></textarea>
                                        </div>
                                        <a type="button" onclick="sendEmail()" class="btn btn-md">Submit <i class="ml-2 fas fa-arrow-right"></i></a>
                                    </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div> -->
                           <!-- </div>-->
                        </li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/img/logo.svg" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse anbr-header" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                        <li><a href="index.php">Home</a></li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn">About us</button>
                                <div class="dropdown-content">
                                    <a href="about-us.php">Overview</a>
                                    <a href="about-us.php">Leadership</a>
                                    <a href="about-us.php">Quality Policy</a>
                                    <a href="about-us.php">Certifications</a>
                                    <a href="about-us.php">Mile Stones</a>
                                    <a href="about-us.php">News & Blogs</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn">Products</button>
                                <div class="dropdown-content">
                                    <a href="bio-fertilizer.php">BIO FERTILIZER</a>
                                    <a href="bio-pesticide.php">BIO PESTICIDE</a>
                                    <a href="organic-fertilizer.php">ORGANIC FERTIIZER</a>
                                    <a href="water-soluble-fertilizer.php">WATER SOLUBLE FERTILIZER</a>
                                    <a href="micro-nutrients-fertilizer.php">MICRO NUTRIENTS FERTILIZER</a>
                                    <a href="chelated-fertilizer.php">CHELATED FERTILIZER</a>
                                    <a href="plant-growth-promoter.php">PLANT GROWTH PROMOTER</a>
                                    <a href="sulphur-fertilizer.php">SULPHUR FERTILIZER</a>
                                    <a href="botnical-insecticide.php">BOTANICAL INSECTICIDE</a>
                                    <a href="bio-fungicide.php">BIO FUNGICIDE</a>
                                    <a href="soil-conditioner-granules.php">SOIL CONDITIONER GRANULE</a>
                                    <a href="liquid-fertilizer.php">LIQUID FERTILIZER</a>
                                </div>
                            </div>
                        </li><li>
                        <div class="dropdown">
                                <button class="dropbtn">Innovation</button>
                                <div class="dropdown-content">
                                    <a href="index.php">EA<sup>2</sup> Technology</a>
                                    <a href="index.php">S<sup>4</sup> Technology</a>
                                    <a href="index.php">Nano Green Technology</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn">Group Companies</button>
                                <div class="dropdown-content">
                                    <a href="index.php">ANBR ELIXIR PVT LTD.</a>
                                    <a href="index.php">ARIHANT CHEMICALS INDUSTRIES</a>
                                    <a href="index.php">ARIHANT BIO SCIENCE ( I ) PVT LTD.</a>
                                    <a href="index.php">ARIHANT AGRI SCIENCE PVT LTD.</a>
                                    <a href="index.php">ARIHANT BIO FERTICHEM PVT LTD.</a>
                                    <a href="index.php">ANBK SEEDS ( I ) PVT LTD.</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn">Solutions</button>
                                <div class="dropdown-content">
                                    <a href="index.php">CUSTOMER SERVICES</a>
                                    <a href="index.php">BULK AGRICULTURAL PRODUCTS</a>
                                    <a href="index.php">IMPORT & EXPORT</a>
                                    <a href="index.php">CONTRACT MANUFACTURING</a>
                                    <a href="index.php">RESEARCH AND DEVELOPENT</a>
                                    <a href="index.php">RETAIL MARKETING</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->