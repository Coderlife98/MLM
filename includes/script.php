
<script src="./Bootstrap/npm/bootstrap%405.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="./Animate/lib/wow/wow.min.js"></script>
<script src="./Animate/lib/easing/easing.min.js"></script>
<script src="./Animate/lib/waypoints/waypoints.min.js"></script>
<script src="./Animate/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="./Animate/js/main.js"></script>

<script>

let myFno=Math.floor(Math.random() * 100);
let myScnd=Math.floor(Math.random() * 100);
$('.firstside').html(myFno);
$('.secondside').html(myScnd);
$('#validateCaptcha').val(parseInt(myFno) + parseInt(myScnd));


// function myFunction() {
//     var userInput = document.getElementsByClassName("num");
//     var inputValu = userInput.value;
//     return inputValu;
// }

</script>