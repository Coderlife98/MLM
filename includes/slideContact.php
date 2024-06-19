<style>
    .slide_button {
        position: fixed;
        z-index: 1000;
        /* right: 0; */
        right: -34px;
        top: 50%;
        transform: rotate(270deg);
    }

    #myForm {
        width: 370px;
        height: 500px;
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
    }

    label {
        padding-bottom: 3px;
    }

    .form-container {
        width: 300px;
        height: 450px;
        padding: 25px;
        background: rgba(255, 255, 255, 0);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(3px);
        -webkit-backdrop-filter: blur(3px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.18);
    }
</style>

<div class="slide_button">
    <button class="open-button" id="open-form">Open Form</button>
</div>

<div id="main-form" data-id="0">
    <div class="form-popup " id="myForm">
        <form action="/action_page.php" class="form-container d-flex flex-column">
            <h3 class="text-center text-white py-3">Contact Us</h3>

            <div class="py-2">
                <label for="name" class="text-white"><b>Name</b></label>
                <input type="text" placeholder="Enter Name" name="email">
            </div>

            <div>
                <label for="email" class="text-white"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email">
            </div>

            <div class="py-2">
                <label for="psw" class="text-white"><b>Number</b></label>
                <input type="text" maxlength="10" placeholder="Enter Number">
            </div>
            <div>
                <label for="message" class="text-white"><b>Message</b></label>
                <input type="text" placeholder="Enter Message" name="">
            </div>

            <button type="submit" class="btn">Login</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
    </div>
</div>





<script>
    $(document).ready(function () {
        $("#main-form").hide();
        $("#open-form").click(function () {
            $("#main-form").css("position", "absolute");
            $("#main-form").css("z-index", "1000");
            $("#main-form").css("right", "3%");
            
            $("#main-form").toggle();
           
            if ($("#main-form").is(":visible")) {
                $("#open-form").html("Close Form");
            } else {
                $("#open-form").html("Open Form");
            }
        });
    });
</script>