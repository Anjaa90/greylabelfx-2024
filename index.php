<?php include ('includes/header.php');?>


    <!-------------- POPUP-------------->
    <style>
        .whatsapp-button {
          background-color: #25D366; /* WhatsApp green */
          border: none;
          border-radius: 5px;
          padding: 16px 20px;
          font-size: 16px;
          color: white;
          cursor: pointer;
          display: inline-block;
          text-align: center;
          transition: background-color 0.3s ease;
        }
      
        .whatsapp-button:hover {
          background-color: #128C7E; /* Darker shade of WhatsApp green */
        }
      
        .whatsapp-link {
          text-decoration: none;
          color: white;
          display: block;
        }
      
        .whatsapp-link:hover {
          color: #fffbf1; /* Light color on hover */
        }
      
        .whatsapp-button:focus {
          outline: none;
        }
      </style>

    <div id="popup" class="popup" >
        <span class="close-btn" onclick="closePopup()">&times;</span>
        <h3 style="color:F10000;">
            BEWARE OF FAKE WEBSITES
        </h3><br>
        <ul>
            We have learned that few of the providers/competitors have copied our whole website and are trying to
            impersonate GreyLabelFX. We would like to make it clear that GreyLabelFX is not a part of any other provider
            and has not lent any reseller rights to them.
            Clients, please use official Support Numbers and Email ID from domain <a href="https://greylabelfx.com"> <span
                style="color:#F10000;">https://greylabelfx.com</span> </a> only for any conversation.
        </ul>
        <button class="whatsapp-button">
            <a href="https://api.whatsapp.com/send/?phone=447403655762&text=Hello&type=phone_number&app_absent=0" class="whatsapp-link" target="_blank">WhatsApp</a>
          </button>
          <button class="telegram-button"><a href="https://telegram.me/greylabelfx" class="telegram-link" target="_blank">Telegram</a></button>
    </div>
    <style>
        /* Media query for small devices */
@media (max-width: 768px) {
    .popup {
        width: 90%; 
        max-width: none; 
        padding: 10px; 
        font-size: 14px; 
    }

    .close-btn {
        font-size: 20px; 
        top: 8px; 
        right: 8px;
    }

    h3 {
        font-size: 18px; 
    }

    ul {
        font-size: 14px; 
    }
}

/* Media query for very small devices */
@media (max-width: 480px) {
    .popup {
        width: 95%; 
        padding: 8px;
    }

    h3 {
        font-size: 16px; 
    }

    ul {
        font-size: 12px; 
    }
}
.telegram-button{
    padding: 14px 20px;
    background-color: #0087CB;
    color: white;
    border-radius: 5px;
    cursor: pointer;
    display: inline-block;
    text-align: center;
    transition: background-color 0.3s ease;
    border: none;

}

.telegram-button:hover{
    color: #ffffff;
    background-color: #06618f;
}

.telegram-link {
    color: #ffffff;
    font-size: 16px;
    text-decoration: none;
}
.telegram-link:hover{
    color: #ffffff;
}
.telegram-button:focus{
    outline: none;
}
    </style>
    <div class="slider-area slider-style-1 bg-transparent variation-2 height-750">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-2 order-lg-1 mt_md--40 mt_sm--40">
                    <div class="inner text-left">
                        <h1 class="title theme-gradient display-two">Launch Your Forex Brokerage with MET5 GreyLabel
                        </h1>
                        <h2>
                            <span class="header-caption">
                                <span class="cd-headline clip is-full-width">
                                    <!-- <span class="cd-words-wrapper bolder-text">
                                                <b class="is-visible theme-gradient "></b>
                                                <b class="is-hidden theme-gradient">MET5 Greylabel.</b>
                                            </span> -->
                                </span>
                            </span>
                        </h2>
                        <p class="description">Affordable, scalable, and packed with powerful features to grow your
                            trading business seamlessly with GreyLabelFX.

                        </p>
                        <div class="button-group">

                            <a class="btn-default btn-medium btn-border round btn-icon" href="contact.php">Contact Us
                                <i class="icon feather-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2">
                    <div class="thumbnail">
                        <!-- <img loading="lazy" src="assets/images/bg/bg-image-16.webp" alt="Banner Images"> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>

    <div class="rwt-about-area rn-section-gap">
        <div class="container">
            <div class="row row--30 align-items-center">
                <div class="col-lg-5">
                    <div class="thumbnail" data-sal="slide-right" data-sal-duration="800">
                        <img loading="lazy" src="assets/images/about/new-3.webp" alt="About Images">

                    </div>
                </div>
                <div class="col-lg-7 mt_md--40 mt_sm--40">
                    <div class="content" data-sal="slide-left" data-sal-duration="800">
                        <div class="section-title">
                            <h2 class="title heading-titile-normal">Start Your Forex Brokerage at Low Cost
                            </h2><br>
                            <p>GreyLabelFX offers an affordable way to start your Forex trading business with MET5 Grey
                                Label. This solution is
                                perfect for new brokers who want to begin small and grow their business without a big
                                investment.</p><br>
                            <p>A Grey Label platform is an easy and cost-effective way to launch a professional Forex
                                brokerage. With MET5,
                                connecting to liquidity providers is simple, ensuring smooth and reliable operations.
                            </p><br>
                            <p>Ideal for Introducing Brokers (IBs) and local brokers, MET5 Grey Label includes powerful
                                features to help you
                                succeed in the competitive Forex market.
                            </p><br>
                            <p>Get started with GreyLabelFX today and build your brokerage with minimal costs and
                                maximum growth potential
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>

    <div class="rwt-tab-area rn-section-gap">
        <div class="container">
            <div class="row mb--40">

            </div>

            <div class="row row row--30 align-items-center">
                <div class="col-lg-5">
                    <img class="radius-small" src="assets/images/about/new-1.webp" alt="Corporate Template">
                </div>
                <div class="col-lg-7 mt_md--40 mt_sm--40 order-2 order-lg-1">
                    <div class="rn-default-tab">
                        <ul class="nav nav-tabs tab-button" role="tablist">
                            <li class="nav-item tabs__tab " role="presentation">
                                <h2 button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                    style="font-size: 30px;" aria-selected="true">Why Brokers Benefit from GreyLabelFX
                                    Solutions
                                </h2></button>
                            </li>

                        </ul>
                        <div class="rn-tab-content tab-content">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                <ul>
                                    <li>Attract More Traders: Grow your customer base effortlessly.</li>
                                    <li>Increased Liquidity: Handle larger trade volumes with ease.</li>
                                    <li>Higher Revenue: Earn more from spreads, swaps, and commissions.
                                    </li>
                                    <li>Maximized Resources: Utilize your existing team and technology more effectively.
                                    </li>
                                    <li>Better Vendor Deals: Negotiate lower prices with liquidity providers as trade
                                        volumes rise.</li>
                                    <li>Effortless Growth: Acquire customers without heavy spending on marketing.
                                    </li>
                                    <li>Rapid Expansion: Scale your brokerage quickly to meet market demands.
                                    </li>
                                    <li>Boost Brand Awareness: Grey Label Brokers promote your brand, increasing
                                        visibility among their clients.
                                    </li>
                                </ul><br>
                                <p>GreyLabelFX empowers brokers to grow their business efficiently and profitably.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>

    <div class="rn-service-area rn-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700"
                        data-sal-delay="100">

                        <h2 class="title w-600 mb--20">GreylabelFX offers the </h2>
                        <h2>following service</h2>

                    </div>
                </div>
            </div>

            <div class="row row--15 service-wrapper">
                <div class="col-lg-12 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700"
                    data-sal-delay="100">
                    <div class="service service__style--1 bg-color-blackest radius mt--25 text-center rbt-border">
                        <div class="icon">
                            <img loading="lazy" src="assets\images\services\mt5.webp" alt="MET5 services" style="height:50px;">
                        </div>
                        <div class="content">
                            <h3 class="title w-600">
                                <a href="MET5-greylabel.php">MET5 GreyLabel: Affordable and Powerful Trading Solution
                                </a>
                            </h3>
                            <p class="description b1 color-gray mb--0"> <a
                                    href="MET5-greylabel.php"
                                    class="font-blod-color-title">MET5 Greylabel</a> offers a cost-effective alternative
                                to a full license, delivering the same functionality while giving you better control
                                over expenses. With access to a wide range of trading tools like TradersRoom, Trade
                                Copier, PAMM, MAMM, Bridge, and API, MET5 GreyLabel provides everything you need to run
                                a successful brokerage at a fraction of the cost.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include ('includes/footer.php');?>
    
    </main>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K5VSCQZZ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
    <script>
        var wa_btnSetting = { "btnColor": "#16BE45", "ctaText": "Message us", "cornerRadius": 40, "marginBottom": 100, "marginLeft": 20, "marginRight": 20, "btnPosition": "left", "whatsAppNumber": "447403655762", "welcomeMessage": "Hello", "zIndex": 999999, "btnColorScheme": "light" };
        window.onload = () => {
            _waEmbed(wa_btnSetting);
        };
    </script>
    <script type="text/javascript">
        (function () {
            var options = {
                telegram: "greylabelfx", // Telegram bot username
                call_to_action: "Message us", // Call to action
                button_color: "#FF6550", // Color of button
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- <script
        type="text/javascript">!function () {
                var e = {
                    "buttons": [{ "type": "whatsapp", "token": "+447403655762" },
                    { "type": "telegram", "token": "greylabelfx" },
                    { "type": "email", "token": "sales@greylabelfx.com" },
                    { "type": "call", "token": "+447403655762" }], "color": "#FF0F28", "position": "left", "bottomSpacing": "30", "callToActionMessage": "Speak to Us", "displayOn": "everywhere", "lang": "en"
                }, t = document.location.protocol + "//bothelp.io", o = document.createElement("script"); o.type = "text/javascript", o.async = !0, o.src = t + "/widget-folder/widget-page.js", o.onload = function () { new BhWidgetPage.init(e) }; var n = document.getElementsByTagName("script")[0]; n.parentNode.insertBefore(o, n)
            }();</script> -->

    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/629a0fa4b0d10b6f3e758a42/1g4ksq7n7';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-230714452-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-230714452-1');
    </script>
    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "GreylabelFX",
      "alternateName": "GreylabelFX",
      "url": "https://greylabel-fx.com/index.php",
      "logo": "https://greylabel-fx.com/assets/images/logo/white-01.webp",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+447403655762",
        "contactType": "customer service",
        "areaServed": "VC",
        "availableLanguage": "en"
      },
      "sameAs": [
        "https://www.facebook.com/Greylabelfx",
        "https://www.instagram.com/greylabelfx/",
        "https://www.linkedin.com/company/greylabelfx/"
      ]
    }
    </script>



    <div class="rn-back-top">
        <i class="feather-arrow-up"></i>
    </div>

    <!-- Modernizr -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/3.11.7/modernizr.min.js" defer></script>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" defer></script>

<!-- Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js" defer></script>

<!-- Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js" defer></script>

<!-- Feather Icons -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" defer></script>

<!-- Slick Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" defer></script>

<!-- Lightbox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js" defer></script>

<!-- Remaining scripts retained from assets folder -->
<script src="assets/js/vendor/waypoint.min.js" defer></script>
<script src="assets/js/vendor/wow.min.js" defer></script>
<script src="assets/js/vendor/counterup.min.js" defer></script>
<script src="assets/js/vendor/sal.min.js" defer></script>
<script src="assets/js/vendor/masonry.js" defer></script>
<script src="assets/js/vendor/imageloaded.js" defer></script>
<script src="assets/js/vendor/magnify.min.js" defer></script>
<script src="assets/js/vendor/easypie.js" defer></script>
<script src="assets/js/vendor/text-type.js" defer></script>
<script src="assets/js/vendor/jquery.style.swicher.js" defer></script>
<script src="assets/js/vendor/js.cookie.js" defer></script>
<script src="assets/js/vendor/jquery-one-page-nav.js" defer></script>

<!-- Google reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- Main JS -->
<script src="assets/js/main.js" defer></script>


</body>



</html>

<style>
    /*-------------- POPUP--------------*/
    .popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 4em;
        color: #ffffff;
        font-size: 20px;
        font-weight: 500;
        background-color: #1F2937;
        border-radius: 5px;
        text-align: center;
        z-index: 1000;
        opacity: 0;
        transition: opacity 0.5s;
        border: 2px solid #ffffff;
        /* Border color */
        border-radius: 17px;
        /* Border radius */
    }


    .popup.show {
        display: block;
        opacity: 1;
    }

    .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 20px;
        cursor: pointer;
    }
</style>


<script>

    // POPUP
    function showPopup() {
        var popup = document.getElementById("popup");
        popup.classList.add("show");

        setTimeout(function () {
            closePopup();
        }, 100000);
    }

    function closePopup() {
        var popup = document.getElementById("popup");
        popup.classList.remove("show");
    }

    document.addEventListener("DOMContentLoaded", function () {
        setTimeout(showPopup, 1000);
    });




    // CATEGORY FILTERS

    filterSelection("all")
    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("column");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }

    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) { element.className += " " + arr2[i]; }
        }
    }

    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }


    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function () {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }

    // modal for login signup
    // Get the modal
    var modal = document.getElementById('id00');
    var modal = document.getElementById('id01');
    var modal = document.getElementById('id02');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }


    //Expanded image
    function openModal(element) {
        var expandedImgDiv = document.getElementById("expandedImgDiv");
        var expandedImg = document.getElementById("expandedImg");
        var imgtext = document.getElementById("imgtext");
        var modalOverlay = document.getElementById("modalOverlay");

        expandedImg.src = element.src;
        imgtext.innerHTML = element.alt;
        expandedImgDiv.style.display = "block";
        modalOverlay.style.display = "block";
    }

    function closeModal() {
        var expandedImgDiv = document.getElementById("expandedImgDiv");
        var modalOverlay = document.getElementById("modalOverlay");

        expandedImgDiv.style.display = "none";
        modalOverlay.style.display = "none";
    }
</script>

