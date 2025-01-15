<?php include ('includes/header.php');?>

<!-- <div class="slider-area slider-style-1 variation-default height-850 bg_image bg_image--12" data-black-overlay="7">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner pt--80 text-center" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">

                    <h1 class="title display-one">Privacy Policy</h1>
                </div>
            </div>
        </div>
    </div>
</div> -->
<main>
    <div class="privacy-policy-wrapper" style="padding-top:30px;">
<div class="container privacy-policy">
    <div class="row">
        <div class="col-lg-12">
            <div class="head-style">
                <h1>Privacy Policy</h1>
                <p>At GreylabelFX, accessible from <a href="http://www.Greylabelfx.com" class="highlighted-link">www.Greylabelfx.com</a>, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by GreylabelFX and how we use it.</p>
                <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>
                <p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collected in GreylabelFX. This policy is not applicable to any information collected offline or via channels other than this website.</p>
                <h2>Consent</h2>
                <p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>
                <h2>Information we collect</h2>
                <p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>
                <p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
                <p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>
                <h2>Log Files</h2>
                <p>GreylabelFX follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this as part of hosting services' analytics. The information collected by log files includes internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>
                <h2>Third Party Privacy Policies</h2>
                <p>GreylabelFX Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options.</p>
                <p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.</p>
                <h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>
                <h4 class="sub-heading">Under the CCPA, among other rights, California consumers have the right to:</h4>
                <ul class="ccpa-rights">
                    <li><i class="bi bi-check-circle-fill"></i> Request that a business that collects a consumer's personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Request that a business delete any personal data about the consumer that a business has collected.</li>
                    <li><i class="bi bi-check-circle-fill"></i> Request that a business that sells a consumer's personal data, not sell the consumer's personal data.</li>
                    <li><i class="bi bi-check-circle-fill"></i> If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
</main>
<style>
.privacy-policy-wrapper {
    display: flex;
    justify-content: center; /* Center horizontally */
    align-items: center;    /* Center vertically */
    min-height: 100vh;      /* Full viewport height */
    padding: 20px;          /* Optional padding for spacing */
   
}

/* General container styling */
.privacy-policy {
    background-color: rgb(73, 71, 71);
    padding: 40px 30px;

    border-radius: 20px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
     /* Set a max width for responsiveness */
    width: 100%;      /* Ensure container is responsive */
    max-width: 900px;
    
}

/* Header styles */
.privacy-policy h1 {
    font-size: 28px;
    color: #fff;
    text-align: center;
    margin-bottom: 20px;
    font-weight: bold;
}

/* Sub-heading styles */
.privacy-policy h2 {
    font-size: 25px;
    color: #fff;
    margin-top: 30px;
  
    padding-bottom: 10px;
}

.privacy-policy h3.sub-heading { 
    color: #fff;
    margin-bottom: 15px;
}

/* Text and links */
.privacy-policy p {
    color:rgb(182 182 182);
    line-height: 1.8;
    margin-bottom: 15px;
}

/* .privacy-policy a.highlighted-link {
    color: #ff0000;
    text-decoration: underline;
} */

.privacy-policy a.highlighted-link:hover {
    text-decoration: none;
    color: #ff0000;
}

/* List styling */
.privacy-policy ul.ccpa-rights {
    padding-left: 0;
    list-style: none;
}

.privacy-policy ul.ccpa-rights li {
    margin-bottom: 10px;
    
    color: rgb(182 182 182);
    display: flex;
    align-items: center;
}

/* .privacy-policy ul.ccpa-rights i {
    color: #ff0000;
    margin-right: 10px;
} */

/* Responsive design */
@media (max-width: 768px) {
    .privacy-policy {
        padding: 20px;
    }

    .privacy-policy h1 {
        font-size: 2rem;
    }

    .privacy-policy h2 {
        font-size: 1.5rem;
    }
}


</style>

<!-- 
        <button class="open-button" onclick="openForm()">Contact Us</button>

        <div class="chat-popup" id="myForm">

            <form action="floating.php" method="post" class="form-container">
                <div class="float-heading">
                    <h2 style="color: red;
                padding: 9px 0px;
                width: 100%;
                font-size: 17px;">Please fill out the form below and we will get back to you as soon as possible.</h2>
                </div>

                <div class="textfiled-wrapper">
                    <input type="text" name="float-name" placeholder="*Name" class="input_filed">
                    <input type="text" name="float-email" placeholder="*Email" class="input_filed">
                    <textarea placeholder="*Message.." name="msg" required></textarea>

                    <button type="submit" class="btn submit-btn" name="submit"><b>&#10148;</b> Submit</button>
                    <button type="button" class=" cancel" onclick="closeForm()">&#x2716;</button>
                </div>


            </form>
        </div> -->


        <!-- Start Footer Area  -->
            <?php include ('includes/footer.php');?>
       <!-- End Footer Area  -->    
    </main>
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K5VSCQZZ"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
        <script>
          var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"Message us","cornerRadius":40,"marginBottom":100,"marginLeft":20,"marginRight":20,"btnPosition":"left","whatsAppNumber":"447403655762","welcomeMessage":"Hello","zIndex":999999,"btnColorScheme":"light"};
          window.onload = () => {
            _waEmbed(wa_btnSetting);
          };
        </script>
    <script type="text/javascript">
        (function() {
            var options = {
                telegram: "greylabelfx", // Telegram bot username
                call_to_action: "Message us", // Call to action
                button_color: "#FF6550", // Color of button
                position: "right", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>


    
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
      "name": "Privacy Policy",
      "alternateName": "Privacy Policy",
      "url": "https://greylabelfx.com/privacy-policy.php",
      "logo": "https://greylabelfx.com/assets/images/logo/white-01.webp",
      "sameAs": [
        "https://www.facebook.com/Greylabelfx",
        "https://twitter.com/GreylabelFX",
        "https://www.instagram.com/greylabelfx/",
        "https://www.linkedin.com/company/greylabelfx"
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