<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php include ("./includes/link.php"); ?>
</head>

<body style="background-color: #0c0c0c;">
<?php include ("./includes/headerTop.php"); ?>
    <!-- slide contact start -->
    <?php include ("./includes/slideContact.php"); ?>
    <!-- slide contact end -->

    <!-- Page Header Start -->
    <div class="container-fluid position-relative px-0 ">
    <img src="./img/contact_hero.png" alt="@dued" style="width:100%">
        <!-- <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="./index.php">Home /</a></li>

                    <li class="breadcrumb-item text-warning" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div> -->
    </div>
    <!-- Page Header End -->



    <!-- Contact Start -->
    <div class="container-fluid py-5 mt-5 contact-fluid">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-info">Get In Touch</h5>
                <h1 class="mb-3 text-warning">Contact for any query</h1>

            </div>
            <div class="contact-detail position-relative p-5">

                <div class="row ">
                    <div class="col-lg-6 wow fadeIn d-flex align-items-center" data-wow-delay=".3s">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="p-md-5 p-2 h-100 rounded  ">
                                <div>
                                    <h2 class="text-white mb-2">Get in <span class="text-info">Touch.</span></h2>
                                    <p>We'd love to hear from you! Whether you have a question, feedback, or need
                                        support,
                                        our team is here to help. Please reach out to us via email.</p>
                                </div>
                                <div class="alldetails">
                                    <div class="d-flex py-2">
                                        <div class="icon-map">
                                            <i class="fas fa-map-marker-alt dudecontact text-secondary22 me-2"></i>
                                        </div>
                                        <div class="address">
                                            <h4 class="text-white">Office Address</h4>
                                            <p class="text-secondary22">Janki Market, Bhagwat nagar Chauraha
                                                Bhagwat Nagar, Kumhrar, Patna - 800026.
                                                Landmark:- Near Singh Cement</p>
                                        </div>
                                    </div>
                                    <div class="d-flex ">
                                        <div class="icon-map">
                                            <i class="fas fa-phone-alt dudecontact text-secondary22 me-2"></i>
                                        </div>
                                        <div class="address">
                                            <h4 class="text-white">Call Us</h4>
                                            <a href="tel:+91 9570444888" class="text-secondary22">+91 9570444888</a>
                                        </div>
                                    </div>
                                    <div class="d-flex py-2">
                                        <div class="icon-map">
                                            <i class="fas fa-envelope  dudecontact text-secondary22 me-2"></i>
                                        </div>
                                        <div class="address">
                                            <h4 class="text-white">Mail Us</h4>
                                            <a href="mailto:mlmgigsoftware@gmail.com"
                                                class="text-secondary22">mlmgigsoftware@gmail.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                        <!-- <div class="p-5 rounded contact-form"> -->
                        <form action="./formhandler.php" method="post">
                            <div class=" p-0 p-md-5 rounded ">
                                <div class="mb-4 add_borrrrr">
                                    <input type="text" autocomplete="off" name="name"
                                        oninput="this.value = this.value.toUpperCase().replace(/[^a-zA-Z ]/g, '').replace(/(  *?)/g, ' ')"
                                        id="name" class="form-control input-transparent border-0 py-2"
                                        placeholder=" Name">
                                </div>
                                <div class="mb-4 add_borrrrr">
                                    <input type="email" autocomplete="off"
                                        oninput="this.value = this.value.toUpperCase()" name="email" id="email"
                                        class="form-control input-transparent border-0 py-2" placeholder=" Email">
                                </div>
                                <div class="mb-4 add_borrrrr">
                                    <input type="text" autocomplete="off" name="subject" id="subject"
                                        class="form-control input-transparent border-0 py-2" placeholder="Subject">
                                </div>
                                <div class="mb-4 add_borrrrr">
                                    <textarea name="message" autocomplete="off" id="message"
                                        class="w-100 form-control border-0 input-transparent py-2" rows="3" cols="10"
                                        placeholder="Message"></textarea>
                                </div>
                                <div class="mb-4">
                                    <div class="outer-box">
                                        <div class="inner-box1 d-flex justify-content-around  align-items-center "
                                            style="border:0.2px solid white;padding: 8px 10px;">
                                            <span class="text-white fw-bolder">Enter Captcha:-</span>
                                            <div class="captcha-box-in d-flex align-items-center ">
                                                <div class="in-colo">
                                                    <span class="firstside"></span>
                                                    <span id="plus">+</span>
                                                    <span class="secondside"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 add_borrrrr">
                                    <input type="text" id="numinput" oninput="this.value = this.value.toUpperCase().replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')"  placeholder="Enter Captcha Here"
                                        class="form-control input-transparent border-0 py-2set-sum " />
                                    <!-- onkeyup="myFunction()" -->
                                </div>


                                <div class="text-start">
                                    <button class="btn bg-primary text-white  py-2 px-4" name="submit" type="submit"
                                        onclick="return validate();">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <!-- map section start -->
    <div class="container-fluid add-border-bottom py-2 py-lg-4">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3598.3457704847724!2d85.17759957445585!3d25.593424115539918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed59ff1c4e1c11%3A0xe19a65ee6eb76c65!2sMLMgig!5e0!3m2!1sen!2sin!4v1718774791479!5m2!1sen!2sin"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <input type="hidden" id="validateCaptcha">

    <!-- map section end -->
    <?php include ("./includes/footer.php"); ?>

    <script>


        function validate() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var subject = document.getElementById("subject").value;
            var message = document.getElementById("message").value;
            var inputValue = document.getElementById("numinput").value;
            let captcha = $('#validateCaptcha').val();
            var namePattern = /^[A-Za-z\s\-]+$/;
            var phoneRegex = /^\d{10}$/;
            var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;



            // var dued = myFunction();
            if (!name) {
                alert("Please Enter Name");
                return false;
            } else if (!namePattern.test(name)) {
                alert("Enter Valid Name");
                return false;
            } else if (!email) {
                alert("Enter Email");
                return false;
            } else if (!emailRegex.test(email)) {
                alert("Please Enter Valid Email");
                return false;
            } else if (!subject) {
                alert("Enter subject");
                return false;
            } else if (!message) {
                alert("Enter Message");
                return false;
            } else if (inputValue=="") {
                alert("Please Enter Captcha");
                return false;
            } else if (namePattern.test(inputValue)) {
                alert("Enter Only Number");
                return false;
            }
            else if (inputValue != captcha) {
                alert("Enter Correct Captcha");
                return false;
            }

        }
    </script>

    <?php include ("./includes/script.php"); ?>

</body>

</html>