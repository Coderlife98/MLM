<!-- fixed icon section start -->
<style>
    .text_slate {
        color: #bbb;
        font-size: 14px;
    }

    .whatsfixed::after {
        z-index: -1;
        content: "";
        position: absolute;
        left: -3px;
        top: -2px;
        width: 45px;
        height: 45px;
        -webkit-animation: ripple 1.6s ease-out infinite;
        -moz-animation: ripple 1.6s ease-out infinite;
        animation: ripple 1.6s ease-out infinite;
        opacity: 0;
        background-image: -moz-linear-gradient(0deg, #69DDCC 0%, #69DDCC 100%);
        background-image: -webkit-linear-gradient(0deg, #42fb76 0%, #5afb42 100%);
        border-radius: 100%;
    }

    #myBtn::after{
        z-index: -1;
        content: "";
        position: absolute;
        left: 2px;
        top: 0px;
        width: 45px;
        height: 45px;
        -webkit-animation: ripple 1.6s ease-out infinite;
        -moz-animation: ripple 1.6s ease-out infinite;
        animation: ripple 1.6s ease-out infinite;
        opacity: 0;
        background-image: -moz-linear-gradient(0deg, #69DDCC 0%, #69DDCC 100%);
        background-image: -webkit-linear-gradient(0deg, #4242fb 0%, #4242fb 100%);
        border-radius: 100%;
    }

    @keyframes ripple {

        0%,
        35% {
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
            opacity: 1;
        }

        50% {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -ms-transform: scale(1.1);
            -o-transform: scale(1.2);
            transform: scale(1.2);
            opacity: 0.8;
        }

        100% {
            opacity: 0;
            -webkit-transform: scale(1.5);
            -moz-transform: scale(1.5);
            -ms-transform: scale(2);
            -o-transform: scale(2);
            transform: scale(2);
        }
    }

    @media (min-width:0px) and (max-width:576px) {
        .whatsfixed {
            position: fixed;
            bottom: 10%;
            left: 5%;
        }
    }

    @media (min-width:576px) and (max-width:768px) {
        .whatsfixed {
            position: fixed;
            bottom: 10%;
            left: 3%;
        }
    }

    @media (min-width:768px) and (max-width:992px) {
        .whatsfixed {
            position: fixed;
            bottom: 10%;
            left: 3%;
        }
    }

    @media (min-width:992px) and (max-width:1200px) {
        .whatsfixed {
            position: fixed;
            bottom: 5%;
            left: 3%;
        }
    }

    @media (min-width:1200px) and (max-width:1400px) {
        .whatsfixed {
            position: fixed;
            bottom: 10%;
            left: 3%;
        }
    }

    @media (min-width:1400px) {
        .whatsfixed {
            position: fixed;
            bottom: 20%;
            left: 3%;
        }
    }
</style>
<!-- fixed icon section end -->


<div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
    <div class="container pt-5 ">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.8s">
                <a href="index.php">
                    <img src="./img/logo.png" loading="lazy" width="150px" alt="">
                </a>
                <p class="mt-4 text_slate">We provide reliable MLM Software Development Solutions like <a
                        href="./unilevel_plan.php" class="text-sny">Single Leg MLM</a>,
                    <a href="./binary_plan.php" class="text-sny">Binary MLM</a>, <a href="./matrix_plan.php"
                        class="text-sny">Matrix MLM</a>, <a href="./generation.php" class="text-sny">Generation
                        Plan</a>, <a href="./unilevel_plan.php" class="text-sny">
                        Unilevel MLM</a> etc.
                </p>
                <div class="d-flex hightech-link">
                    <a href="https://www.facebook.com/mlmgigcompany" target="_blank"
                        class="btn-light nav-fill btn btn-square rounded-circle me-2"><i
                            class="fab fa-facebook-f text-primary"></i></a>
                    <a href="https://x.com/i/flow/login?redirect_after_login=%2FMgigMl"
                        class="btn-light nav-fill btn btn-square rounded-circle me-2" target="_blank"><i
                            class="fab fa-twitter text-primary"></i></a>
                    <a href="https://www.instagram.com/mlmgigsoftware/" target="_blank"
                        class="btn-light nav-fill btn btn-square rounded-circle me-2"><i
                            class="fab fa-instagram text-primary"></i></a>
                    <a href="https://www.linkedin.com/company/mlmgig/" target="_blank"
                        class="btn-light nav-fill btn btn-square rounded-circle me-0">
                        <i class="fab fa-brands fa-linkedin text-primary fw-bolder"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="1s">
                <a href="#" class="h3 text-sny pe-none">Quick Link</a>
                <div class="mt-4 d-flex flex-column help-link">
                    <a href="./index.php" class="mb-2 text_slate" id="footerLinks"><i
                            class="fas fa-angle-right text-sny me-2"></i>Home</a>
                    <a href="./about.php" class="mb-2 text_slate" id="footerLinks"><i
                            class="fas fa-angle-right text-sny me-2"></i>About us</a>
                    <a href="./demo.php" class="mb-2 text_slate" id="footerLinks"><i
                            class="fas fa-angle-right text-sny me-2"></i>Demo</a>
                    <a href="./mlm_plan.php" class="mb-2 text_slate" id="footerLinks"><i
                            class="fas fa-angle-right text-sny me-2"></i>Mlm Plan</a>
                    <a href="./contact.php" class="mb-2 text_slate" id="footerLinks"><i
                            class="fas fa-angle-right text-sny me-2"></i>Contact</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="1.2s">
                <a href="#" class="h3 text-sny pe-none">Contact Us</a>
                <div class="text-white mt-4 d-flex flex-column contact-link">
                    <a href="#" class="pb-3 text_slate border-bottom border-primary" id="footerLinks"><i
                            class="fas fa-map-marker-alt text-sny me-2"></i>Janki Market, Bhagwat Nagar, Kumhrar,
                        Patna-800026, Bihar, India</a>
                    <a href="tel:+91 9570444888" class="py-3 text_slate border-bottom border-primary"
                        id="footerLinks"><i class="fas fa-phone-alt text-sny me-2"></i>+91 9570444888</a>
                    <a href="mailto:mlmgigsoftware@gmail.com" id="footerLinks"
                        class="py-3 text_slate border-bottom border-primary"><i
                            class="fas fa-envelope text-sny me-2"></i>mlmgigsoftware@gmail.com</a>
                </div>
            </div>
        </div>
        <hr class="text-light mt-5 ">
        <div class="row py-2">
            <div class="col-md-12 text-center ">
                <span class="text-sny">Copyright &copy; 2020
                    <a href="https://mlmgig.com/" class="text-white" id="footerLinks" target="_blank">Mlmgig.com.</a>
                    All rights reserved.</span>

            </div>

        </div>
    </div>
</div>
<!--  -->
<a href="#" onclick="topFunction()" id="myBtn" title="Go to top"
    class="btn btn-primary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="whatsfixed">
                <a href="https://wa.me/9028388889" target="_blank"> <img src="./img/whats.png" loading="lazy"
                        height="40px" width="40px" alt=""></a>
            </div>
        </div>
    </div>
</div>



<script>
    // Get the button
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () { scrollFunction() };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            // mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>