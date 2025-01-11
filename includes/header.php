<?php include ('config.php');?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="google-site-verification" content="VsNjoLq_pBpRs6jlPU8IN6M7Oy4RaKmcMwLXo9ENsKU" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title ?>
  </title>
  <meta name="description" content="<?php echo $description ?> " />
  <meta name="keywords" content="<?php echo $keywords ?> " />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

<!-- Animation CSS -->
<link rel="stylesheet" href="assets/css/plugins/animation.css">

<!-- Feature CSS -->
<link rel="stylesheet" href="assets/css/plugins/feature.css">

<!-- Magnify CSS -->
<link rel="stylesheet" href="assets/css/plugins/magnify.min.css">

<!-- Slick Carousel -->
<link rel="stylesheet" href="assets/css/plugins/slick.css">
<link rel="stylesheet" href="assets/css/plugins/slick-theme.css">

<!-- Lightbox -->
<link rel="stylesheet" href="assets/css/plugins/lightbox.css">

<!-- Main Style -->
<link rel="stylesheet" href="assets/css/style.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Additional Style (Custom CSS) -->
<link rel="stylesheet" href="style.css">



    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-K5VSCQZZ');</script>
    <!-- End Google Tag Manager -->
</head>

<header class="active-dark-mode">
    <main class="page-wrapper">
        <div class="header-top-bar">
            <div class="container">
                <div class="row ">

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="header-right">
                            <div class="address-content">

                                <p>
                                    <i class="feather-mail"></i>
                                    <span><a href="sales@greylabelfx.com">sales@greylabelfx.com</a></span>
                                </p>
                                <p>
                                    <i class="feather-phone"></i>
                                    <span><a href="tel:+447403655762">+447403655762</a></span>
                                </p>
                                <p>
                                    <i class="feather-telegram"></i>
                                    <a href="https://telegram.me/greylabelfx"><img loading="lazy" src="assets/images/2022-06-05.webp"
                                            alt="Telegram" width="20" height="20"></a>

                                </p>

                            </div>
                            <div class="social-icon-wrapper">
                                <ul class="social-icon social-default icon-naked">
                                    <li><a href="https://www.facebook.com/Greylabelfx" aria-label="
                                        facebook">
                                            <i class="feather-facebook"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://twitter.com/GreylabelFX" aria-label="
                                        Twitter">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.instagram.com/greylabelfx/" aria-label="
                                        Instagram">
                                            <i class="feather-instagram"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.linkedin.com/company/greylabelfx" aria-label="
                                        Linkedin">
                                            <i class="feather-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rn-header header-default header-not-transparent header-sticky">
            <div class="container position-relative">
                <div class="row align-items-center row--0">
                    <div class="col-lg-3 col-md-6 col-4">
                        <div class="logo">
                            <a href="index.php">
                                <img class="logo-light" src="assets/images/logo/white-01.webp" alt="Corporate Logo">
                                <img class="logo-dark" src="assets/images/logo/logo-dark.png" alt="Corporate Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6 col-8 position-static">
                        <div class="header-right">
                            <nav class="mainmenu-nav d-none d-lg-block ">
                                <ul class="mainmenu">
                                    <li class="has-droupdown "><a href="index.php">Home</a>

                                    </li>
                                    <li class="has-droupdown has-menu-child-item ">
                                        <a href="about.php">About</a>
                                        <ul class="submenu">
                                            <ul class="submenu">
                                                <li><a href="our-servers.php">Our Servers</a></li>
                                                <!-- <li><a href="team.html">Team</a></li> -->

                                            </ul>
                                        </ul>
                                    </li>
                                    <li class="has-droupdown has-menu-child-item"><a href="#">FX Solutions</a>
                                        <ul class="submenu">
                                            <ul class="submenu">

                                                <li><a href="MET5-greylabel.php">MET5 Greylabel <span
                                                            style="color: red; font-size:16px; font-weight: 600; ">( Hot
                                                            )</span></a></li>
                                                <li><a href="broker-crm.php">BrokerCRM</a></li>
                                                <li><a href="psp.php">PSP</a></li>
                                            </ul>
                                        </ul>
                                    </li>
                                    <li class="has-droupdown has-menu-child-item"><a href="pricing.php"><span
                                                class="blink">Pricing</span></a>

                                    </li>
                                    <li class="has-droupdown has-menu-child-item"><a href="#">Digital</a>
                                        <ul class="submenu">
                                            <ul class="submenu">
                                                <li><a href="broker-website.php">BrokerWebsite</a></li>
                                                <li><a href="forex-seo.php">Forex SEO</a></li>
                                                <li><a href="branding.php">Branding</a></li>
                                            </ul>
                                        </ul>
                                    </li>
                                    <li class="has-droupdown has-menu-child-item"><a href="service.php">Corporate
                                            Services</a>

                                    </li>

                                    <li class="has-droupdown has-menu-child-item"><a href="#">Servers</a>
                                        <ul class="submenu">
                                            <ul class="submenu">
                                                <li><a href="MET5_Greylabel_Turkey.php">Turkey</a></li>
                                                <li><a href="MET5_Greylabel_China.php">China</a></li>
                                                <li><a href="MET5_Greylabel_UAE.php">UAE</a></li>
                                                <li><a href="MET5_Greylabel_Malaysia.php">Malaysia</a>
                                                </li>
                                                <li><a href="MET5_Greylabel_Singapore.php">Singapore</a>
                                                </li>
                                                <li><a href="MET5_Greylabel_Africa.php">Africa</a></li>
                                                <li><a href="MET5_Greylabel_Albania.php">Albania</a>
                                                </li>
                                                <li><a href="MET5_Greylabel_Algeria.php">Algeria</a>
                                                </li>
                                            </ul>
                                        </ul>
                                    </li>
                                    <li><a href="#">Blog</a></li>
                                </ul>
                            </nav>

                            <div class="header-btn"><a class="btn-default btn-small round" target="_blank"
                                    href="contact.php">Contact</a></div>

                            <div class="mobile-menu-bar ml--5 d-block d-lg-none">
                                <div class="hamberger">
                                    <button class="hamberger-button">
                                        <i class="feather-menu"></i>
                                    </button>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
</header>

<div class="popup-mobile-menu">
            <div class="inner">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.php">
                            <img class="logo-light" src="assets/images/logo/white-01.webp" alt="Corporate Logo">
                            <img class="logo-dark" src="assets/images/logo/black-01.png" alt="Corporate Logo">
                        </a>
                    </div>
                    <div class="close-menu">
                        <button class="close-button">
                            <i class="feather-x"></i>
                        </button>
                    </div>
                </div>
                <ul class="mainmenu">
                    <li><a href="index.php">Home</a>

                    </li>
                    <li class="has-dropdown has-menu-child-item">
                        <a href="about.php">About</a>
                        <ul class="submenu">
                        <li><a href="our-servers.php">Our Servers</a></li>
                        </ul>
                    </li>

                    <li class="has-droupdown has-menu-child-item"><a href="#">FX Solutions</a>

                        <ul class="submenu">
                            
                            <li><a href="MET5-greylabel.php">MET5 Greylabel <span
                                        >( Hot )</span></a></li>
                            <li><a href="broker-crm.php">BrokerCRM</a></li>
                            <li><a href="psp.php">PSP</a></li>
                        </ul>

                    </li>
                    <li><a href="pricing.php">Pricing</a>


                </li>

                    </li>
                    <li class="has-droupdown has-menu-child-item"><a href="#">Digital</a>

                        <ul class="submenu">
                            <li><a href="broker-website.php">BrokerWebsite</a></li>
                            <li><a href="forex-seo.php">Forex SEO</a></li>
                            <li><a href="branding.php">Branding</a></li>
                        </ul>

                    </li>
                    <li><a href="service.php">Corporate Services</a>

                    </li>

                    
                    <li><a href="#">Blog</a></li>
                </ul>








            </div>
        </div>

        <div class="section " style="background-color: rgb(20, 20, 20);box-shadow: rgb(24, 24, 24) 0px 4px 12px;">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb" style="float: right;">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item "><a href="#">Digital</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Forex SEO</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="rn-gradient-circle"></div>
            <div class="rn-gradient-circle theme-pink"></div>
        </div>