<style>
    .fixed {
        position: fixed !important;
        top: 0 !important;
        width: 100% !important;
        z-index: 10000;
        background: linear-gradient(0deg, rgb(34 195 101 / 74%) 0%, rgb(45 74 253 / 52%) 100%);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
        border: 1px solid rgba(255, 255, 255, 0.18);
        color: black !important;
        animation: fadeInBottom 1s linear;
    }

    #navbar {
        background-color: white !important;
        color: black !important;
    }

    @media (min-width:992px) {
        .nav-link {
            color: black !important;
        }
    }

    @keyframes fadeInBottom {
        from {
            opacity: 0;
            transform: translateY(-50%);
        }

        to {
            opacity: 1
        }
    }
</style>

<!-- Spinner Start -->
<div id="spinner"
    class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->

<!-- Topbar Start -->
<div class="container-fluid bg-dark py-2 d-none d-md-flex">
    <div class="container">
        <div class="d-flex justify-content-between topbar">
            <div class="top-info">
                <small class="me-3 text-white"><a href="tel:+91 9570444888" class="text-white"><i
                            class="fas fa-phone-alt me-2 text-secondary"></i>+91 9570444888</a></small>
                <small class="me-3 text-white-50"><a href="mailto:mlmgigsoftware@gmail.com" class="text-white"><i
                            class="fas fa-envelope me-2 text-secondary"></i>mlmgigsoftware@gmail.com</a></small>
            </div>
            <!-- Note : We help you to Grow your Business -->
            <!-- <div id="note" class="text-secondary d-none d-xl-flex"><small>Binary || Matrix || Unilevel ||
                    Generation</small></div> -->
            <div class="top-link">
                <a href="https://www.facebook.com/mlmgigsoftware" target="_blank"
                    class="bg-light nav-fill btn btn-sm-square rounded-circle dued-up"><i
                        class="fab fa-facebook-f text-primary"></i></a>
                <a href="https://x.com/i/flow/login?redirect_after_login=%2Fmlmgigsoftware" target="_blank"
                    class="bg-light nav-fill btn btn-sm-square rounded-circle dued-up"><i
                        class="fab fa-twitter text-primary"></i></a>
                <a href="https://www.instagram.com/mlmgigsoftware/" target="_blank"
                    class="bg-light nav-fill btn btn-sm-square rounded-circle dued-up fw-bolder"><i
                        class="fab fa-instagram text-primary"></i></a>
                <a href="https://api.whatsapp.com/send/?phone=9028388889&text&type=phone_number&app_absent=0"
                    target="_blank" class="bg-light nav-fill btn btn-sm-square rounded-circle  dued-up me-0"><i
                        class="fab fa-whatsapp text-primary fw-bolder"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<div class="container-fluid bg-primary__gradient " id="navbar">
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-lg py-0" id="">
            <a href="index.php" class="navbar-brand">
                <img src="./img/logo.png" height="60px" alt="@logo-dued">
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                <div class="navbar-nav ms-auto mx-xl-auto p-0">
                <a href="index.php" class="nav-item nav-link ">Home</a>

                    <a href="./about.php" class="nav-item nav-link  ">About Us</a>
                    <a href="./demo.php" class="nav-item nav-link ">Demo</a>


                    <div class="nav-item dropdown">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">
                            <span class="droplink" data-id="snyOpen---demo.php">MLM Plan
                            </span></a>
                        <div class="dropdown-menu rounded">
                            <a href="./binary_plan.php" class="dropdown-item">Binary Plan</a>
                            <a href="./matrix_plan.php" class="dropdown-item">Matrix Plan</a>
                            <a href="./unilevel_plan.php" class="dropdown-item">Unilevel Plan</a>
                            <a href="./generation.php" class="dropdown-item">Generation Plan</a>
                            <a href="./helping.php" class="dropdown-item">Helping Plan</a>
                            <a href="./crowd_funding.php" class="dropdown-item">Crowdfunding Plan</a>

                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle"
                            data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu rounded">
                            <a href="./website_dev.php" class="dropdown-item">Website Development</a>
                            <a href="digital.php" class="dropdown-item">Digital marketing</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-xl-flex flex-shirink-0">
                <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                    <a href="./contact.php" class="position-relative animated tada infinite">
                        <button class="text-white bg_button_gradient">Contact Us</button>
                    </a>
                </div>

            </div>
        </nav>
    </div>
</div>

<script>

    $(document).ready(function () {
        $(".droplink").click(function () {
            let nbActn = $(this).attr('data-id');
            //store data-id="snyOpen---demo.php" value in nbActn button
            let perFrm = nbActn.split('---');
            if (perFrm[0] == 'snyOpen') {
                window.location.href = perFrm[1];
            }
        });
    });

    // Navbar sticky code section start
    var num = 200;

    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > num) {
            $('#navbar').addClass('fixed');
        } else {
            $('#navbar').removeClass('fixed');
        }
    });
    // Navbar sticky code section end
</script>