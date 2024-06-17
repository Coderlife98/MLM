<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <?php include ("./includes/link.php"); ?>
</head>

<body>
    <?php include ("./includes/header.php"); ?>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="./index.php">Home /</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                    <li class="breadcrumb-item" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Get In Touch</h5>
                <h1 class="mb-3">Contact for any query</h1>
                <p class="mb-2">The contact form is currently inactive. Get a functional and working contact form .</p>
            </div>
            <div class="contact-detail position-relative p-5">
                <div class="row g-5 mb-5 justify-content-center">
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                                style="width: 64px; height: 64px;">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">Address</h4>
                                <a href="" target="_blank" class="h5"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                                style="width: 64px; height: 64px;">
                                <i class="fa fa-phone text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">Call Us</h4>
                                <a class="" href="tel:+91 9570444888" target="_blank">+91 9570444888</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle"
                                style="width: 64px; height: 64px;">
                                <i class="fa fa-envelope text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">Email Us</h4>
                                <a class="" href="mailto:mlmgigsoftware@gmail.com"
                                    target="_blank">mlmgigsoftware@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="p-5 h-100 rounded contact-map">
                            <iframe class="rounded w-100 h-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.4710403339755!2d-73.82241512404069!3d40.685622471397615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c26749046ee14f%3A0xea672968476d962c!2s123rd%20St%2C%20Queens%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1686493221834!5m2!1sen!2sbd"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-8 wow fadeIn" data-wow-delay=".5s">
                        <div class="p-5 rounded contact-form">
                            <form action="" method="post">
                                <div class="mb-4">
                                    <input type="text"
                                        oninput="this.value = this.value.toUpperCase().replace(/[^A-Z ]/g, '').replace(/(\  *?)\  */g, '$1')"
                                        maxlength="20" name="name" class="form-control border-0 py-3" placeholder="Your Name">
                                </div>
                                <div class="mb-4">
                                    <input type="email" name="email" class="form-control border-0 py-3" placeholder="Your Email">
                                </div>
                                <div class="mb-4">
                                    <input type="text"
                                        oninput="this.value = this.value.replace(/[^0-9 ]/g, '').replace(/(\  *?)\  */g, '$1')"
                                        maxlength="10" name="number" class="form-control border-0 py-3" placeholder="Phone Number">
                                </div>
                                <div class="mb-4">
                                    <input type="text" name="subject" class="form-control border-0 py-3" placeholder="Subject">
                                </div>
                                <div class="mb-4">
                                    <textarea class="w-100 form-control border-0 py-3" name="message" rows="6" cols="10"
                                        placeholder="Message"></textarea>
                                </div>
                                <div class="mb-4">
                                    <div class="outer-box">
                                        <div class="inner-box1 d-flex justify-content-around  align-items-center "
                                            style="border:0.2px solid white;padding: 8px 10px;">
                                            <span class="text-white fw-bolder">Enter Captcha:-</span>
                                            <div class="captcha-box-in d-flex align-items-center ">
                                                <div class="in-colo">
                                                    <span id="first"></span>
                                                    <span id="plus">+</span>
                                                    <span id="second"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <input type="text" id="num" placeholder="Enter Captcha Here"
                                        class="set-sum p-2 w-100" onkeyup="myFunction()" />
                                </div>
                                <div class="text-start">
                                    <button name="submit" onclick="return validate();"
                                        class="btn bg-primary text-white py-3 px-5" type="submit">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <?php include ("./includes/footer.php"); ?>
    <script>
        var firstNu = document.getElementById("first");
        var num1 = (firstNu.innerHTML = Math.floor(Math.random() * 100));
        console.log("number1", num1);
        var secNum = document.getElementById("second");
        var num2 = (secNum.innerHTML = Math.floor(Math.random() * 10));
        console.log("number2", num2);

        function myFunction() {
            var userInput = document.getElementById("num");
            var inputValu = userInput.value;
            return inputValu;
        }

        var storeRandomValue = parseInt(num1) + parseInt(num2);


        function validate() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var number = document.getElementById("number").value;
            var subject = document.getElementById("subject").value;
            var message = document.getElementById("message").value;
            var namePattern = /^[A-Za-z\s\-]+$/;
            var phoneRegex = /^\d{10}$/;
            var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

            var dued = myFunction();
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
            } else if (!number) {
                alert("Enter Mobile Number");
                return false;
            } else if (!phoneRegex.test(number)) {
                alert("Enter Correct Number");
                return false;
            } else if (!message) {
                alert("Enter Message");
                return false;
            } else if (!dued) {
                alert("Please Enter Captcha");
                return false;
            } else if (namePattern.test(dued)) {
                alert("Enter Only Number");
                return false;
            }
            else if (dued != storeRandomValue) {
                alert("Enter Correct Captcha");
                return false;
            }

        }
    </script>
    <?php include ("./includes/script.php"); ?>


</body>

</html>