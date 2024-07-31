<style>
    .open-button {
        outline: none;
        background-color: #059669;
        border-radius: 8px 8px 0px;
        border: 0px;
        padding: 8px;
        color: white;
    }
    #main-form{
        display: none;
    }
   
    .slide_button {
        position: fixed;
        z-index: 1000;
        /* right: 0; */
        right: -34px;
        top: 50%;
        transform: rotate(270deg);
    }

    #myForm {
        width: 300px;
        border-radius: 20px;
        height: 492px;
        background-color: black;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    input {
        background-color: transparent;
        border: 0.2px solid white;
        border-radius: 5px;
        padding: 5px 8px;
        font-size: 14px;

    }

    label {
        padding-bottom: 3px;
    }

    .form-container {
        width: 300px;
        height: 490px;
        padding: 25px;
        background: rgba(255, 255, 255, 0);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(3px);
        -webkit-backdrop-filter: blur(3px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.18);
    }

    label {
        font-size: 14px;
    }

    .btn-bg {
        background: linear-gradient(to left, #6366f1, #a855f7, #ec4899);
        color: white;
        outline: none;
        border: 0px;
    }

    .captchfont {
        font-size: 14px;
    }

    .input-transparent {
        /* width: 214px!important; */
    }

    @media (min-width:0px) and (max-width:576px) {
        .slide_button {
            position: fixed;
            z-index: 1000;
            /* right: 0; */
            right: -34px;
            top: 50%;
            transform: rotate(270deg);
        }

        #myForm {
            width: 300px;
            border-radius: 20px;
            height: 492px;
            background-color: black;
            display: flex;
            justify-content: center;
            position: fixed;
            align-items: center;
            z-index: 10000;
            top: 25%;
            flex-direction: column;
            right: 42px;
        }
    }

    @media (min-width:576px) and (max-width:768px) {
        .slide_button {
            position: fixed;
            z-index: 1000;
            /* right: 0; */
            right: -34px;
            top: 50%;
            transform: rotate(270deg);
        }
        #myForm {
            width: 300px;
            border-radius: 20px;
            height: 492px;
            background-color: black;
            display: flex;
            justify-content: center;
            position: fixed;
            align-items: center;
            z-index: 10000;
            top: 22%;
            flex-direction: column;
            right: 42px;
        }
    }

    @media (min-width:768px) and (max-width:992px) {
        .slide_button {
            position: fixed;
            z-index: 1000;
            /* right: 0; */
            right: -34px;
            top: 50%;
            transform: rotate(270deg);
        }

        #myForm {
            width: 300px;
            border-radius: 20px;
            height: 492px;
            background-color: black;
            display: flex;
            justify-content: center;
            position: fixed;
            align-items: center;
            z-index: 10000;
            top: 20%;
            flex-direction: column;
            right: 42px;
        }
    }

    @media (min-width:992px) and (max-width:1200px) {
        .slide_button {
            position: fixed;
            z-index: 1000;
            right: 0;
            /* right: -34px; */
            top: 50%;
            transform: rotate(270deg);
        }

        #myForm {
            width: 300px;
            border-radius: 20px;
            height: 492px;
            background-color: black;
            display: flex;
            justify-content: center;
            position: fixed;
            align-items: center;
            z-index: 10000;
            flex-direction: column;
            right: 71px;
        }
    }

    @media (min-width:1200px) and (max-width:1400px){
        #main-form {
            position: fixed;
            z-index: 10000;
            right: 3%;
           top: 18%;
        }
    }
    @media (min-width:1200px){
        #main-form {
            position: fixed;
            z-index: 10000;
            right: 3%;
            top: 22%
        }
    }
</style>

<div class="slide_button">
    <button class="open-button" id="open-form">Open Form</button>
</div>

<div id="main-form" data-id="0">
    <div class="form-popup " id="myForm">
        <form action="./formhandler.php" method="post" class="form-container d-flex flex-column">
            <h5 class="text-center text-white py-2 mb-0">Contact Us</h5>

            <div class="py-2 w-100">
                <label for="name" class="text-white"><b>Name</b></label>
                <input type="text" id="nameside" class="text-white w-100"
                    oninput="this.value = this.value.toUpperCase().replace(/[^a-zA-Z ]/g, '').replace(/(  *?)/g, ' ')"
                    placeholder="Enter Name" name="email">
            </div>

            <div class="w-100">
                <label for="email" class="text-white"><b>Email</b></label>
                <input type="email" id="emailside" class="text-white w-100" oninput="this.value = this.value.toUpperCase()"
                    placeholder="Enter Email" name="email">
            </div>

            <div class="py-2 w-100">
                <label for="psw" class="text-white"><b>Number</b></label>
                <input type="text"
                    oninput="this.value = this.value.toUpperCase().replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')"
                    name="number" class="text-white w-100" id="numberside" maxlength="10" placeholder="Enter Number">
            </div>
            <div class="w-100">
                <label for="message" class="text-white"><b>Message</b></label>
                <input type="text" id="messageside" class="text-white w-100" placeholder="Enter Message" name="message">
            </div>
            <div class="py-2">
                <div class="outer-box">
                    <div class="inner-box1 d-flex justify-content-between  align-items-center "
                        style="border:0.2px solid white; border-radius:5px;  padding: 5px 8px;">
                        <span class="text-white fw-bolder captchfont">Enter Captcha:-</span>
                        <div class="captcha-box-in d-flex align-items-center ">
                            <div class="in-colo">
                                <span class="firstside"></span>
                                <span id="plus">+</span>
                                <span  class="secondside"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-1 w-100">
                <input type="text" class= "text-white w-100" id="numinputside" placeholder="Enter Captcha Here"
                    name="message">

            </div>
            <input type="hidden" id="validateCaptcha" >
            <button type="submit" name="submit" onclick="return validate1();" class="btn-bg">Submit</button>

        </form>
    </div>
</div>





<script>
    $(document).ready(function () {
        $("#main-form").hide();
        $("#open-form").click(function () {
            // $("#main-form").css("position", "fixed");
            // $("#main-form").css("z-index", "1000");
            // $("#main-form").css("right", "3%");

            $("#main-form").toggle();
            if ($("#main-form").is(":visible")) {
                $("#main-form").animate({ right: '50px' });
                $("#open-form").html("Close Form");

            } else {
                $("#open-form").html("Open Form");
                // $("#main-form").animate({right: '-50px'});

            }
        });
    });
</script>


<script>


    function validate1() {
        var name = document.getElementById("nameside").value;
        var email = document.getElementById("emailside").value;
        var number = document.getElementById("numberside").value;
        var message = document.getElementById("messageside").value; 
        var inputValue = document.getElementById("numinputside").value;
        let captcha = $('#validateCaptcha').val();
        var namePattern = /^[A-Za-z\s\-]+$/;
        var phoneRegex = /^\d{10}$/;
        var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

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
            alert("Enter Number");
            return false;
        } else if (!message) {
             alert("Enter Message");
            return false;
         } else
         if (!inputValue) {
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