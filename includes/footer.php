<!-- fixed icon section start -->
<style>
    .text_slate {
        color: #bbb;
        font-size: 14px;
    }

    @media (min-width:0px) and (max-width:576px) {
        .whatsfixed {
            position: fixed;
            bottom: 10%;
            left: 5%;
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
    <div class="container pt-5 pb-4">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.8s">
                <a href="index.php">
                    <img src="./img/logo.png" width="150px" alt="">
                </a>
                <p class="mt-4 text_slate">We provide reliable MLM Software Development Solutions like <a href="./unilevel_plan.php" class="text-secondary">Single Leg MLM</a>,
                    <a href="./binary_plan.php" class="text-secondary">Binary MLM</a>, <a href="./matrix_plan.php"
                        class="text-secondary">Matrix MLM</a>, <a href="./generation.php"
                        class="text-secondary">Generation Plan</a>, <a href="./unilevel_plan.php" class="text-secondary">
                        Unilevel MLM</a> etc.</p>
                <div class="d-flex hightech-link">
                    <a href="https://www.facebook.com/mlmgigpatna" target="_blank"
                        class="btn-light nav-fill btn btn-square rounded-circle me-2"><i
                            class="fab fa-facebook-f text-primary"></i></a>
                    <a href="https://x.com/i/flow/login?redirect_after_login=%2FMgigMl"
                        class="btn-light nav-fill btn btn-square rounded-circle me-2" target="_blank"><i
                            class="fab fa-twitter text-primary"></i></a>
                    <a href="https://www.instagram.com/mlmgig/" target="_blank"
                        class="btn-light nav-fill btn btn-square rounded-circle me-2"><i
                            class="fab fa-instagram text-primary"></i></a>
                    <a href="https://www.linkedin.com/in/mlmgigsoftware/"
                        target="_blank" class="btn-light nav-fill btn btn-square rounded-circle me-0">
                            <i class="fab fa-brands fa-linkedin text-primary fw-bolder"></i>
                        </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="1s">
                <a href="#" class="h3 text-secondary">Quick Link</a>
                <div class="mt-4 d-flex flex-column help-link">
                    <a href="./index.php" class="mb-2 text_slate" id="footerLinks"><i
                            class="fas fa-angle-right text-secondary me-2"></i>Home</a>
                    <a href="./about.php" class="mb-2 text_slate" id="footerLinks"><i
                            class="fas fa-angle-right text-secondary me-2"></i>About us</a>
                    <a href="./binary_plan.php" class="mb-2 text_slate" id="footerLinks"><i
                            class="fas fa-angle-right text-secondary me-2"></i>Binary Plan</a>
                    <a href="./mlm_plan.php" class="mb-2 text_slate" id="footerLinks"><i
                            class="fas fa-angle-right text-secondary me-2"></i>Mlm Plan</a>
                    <a href="./contact.php" class="mb-2 text_slate" id="footerLinks"><i
                            class="fas fa-angle-right text-secondary me-2"></i>Contact</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="1.2s">
                <a href="#" class="h3 text-secondary">Contact Us</a>
                <div class="text-white mt-4 d-flex flex-column contact-link">
                    <a href="#" class="pb-3 text_slate border-bottom border-primary" id="footerLinks"><i
                            class="fas fa-map-marker-alt text-secondary me-2"></i>Janki Market, Bhagwat Nagar, Kumhrar, Patna-800026, Bihar, India</a>
                    <a href="tel:+91 9570444888" class="py-3 text_slate border-bottom border-primary" id="footerLinks"><i
                            class="fas fa-phone-alt text-secondary me-2"></i>+91 9570444888</a>
                    <a href="mailto:mlmgigsoftware@gmail.com" id="footerLinks" class="py-3 text_slate border-bottom border-primary"><i
                            class="fas fa-envelope text-secondary me-2"></i>mlmgigsoftware@gmail.com</a>
                </div>
            </div>
        </div>
        <hr class="text-light mt-5 mb-4">
        <div class="row">
            <div class="col-md-12 text-center ">
                <span class="text-secondary">Copyright &copy; 2020
                    <a href="https://mlmgig.com/" class="text-white" id="footerLinks" target="_blank">Mlmgig.com.</a> All rights reserved.</span>
                   
            </div>

        </div>
    </div>
</div>
<!--  -->
<a href="#" onclick="topFunction()" id="myBtn" title="Go to top"
    class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="whatsfixed">
                <a href="https://wa.me/9028388889" target="_blank"> <img src="./img/whats.png" height="40px"
                        width="40px" alt=""></a>
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