<!DOCTYPE html>
<html>
<title>MyProject</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/style3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<script src="myscript.js"></script>
<style>

</style>
<body>

<!-- Sidenav -->
<nav class="w3-sidenav w3-black w3-card-2 w3-animate-top w3-center w3-xxlarge" style="display:none;padding-top:220px" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-closenav w3-jumbo w3-right w3-display-topright" style="padding:6px 24px">
    <i class="fa fa-remove"></i>
  </a>
  <a href="aboutCollage.php" class="w3-text-grey w3-hover-black">About</a>
  <a href="faculties.php" class="w3-text-grey w3-hover-black">Faculties</a>
  <a href="students.php" class="w3-text-grey w3-hover-black">Students</a>
  <a href="contact.php" class="w3-text-grey w3-hover-black">Contact</a>
</nav>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

<div class="w3-container w3-padding-32 w3-center w3-opacity w3-margin-bottom">
  <span class="w3-opennav w3-xxlarge w3-right w3-margin-right" onclick="w3_open()"><i class="fa fa-bars"></i></span>
  <div class="w3-clear"></div>
  <h1>COLLAGE</h1>
  <h3 style="color:green">National institute of technology durgapur</h3>
  <p class="w3-padding-16"><button class="w3-btn" onclick="myFunction()">Toggle Grid Padding</button></p>
</div>

<!-- Photo Grid -->
<div id="myGrid">
  <div class="w3-third">
    <img src="nit/nitd1.jpg" style="width:100%">
    <img src="nit/nitd2.jpg" style="width:100%">
    <img src="nit/nitd7.jpg" style="width:100%">
    <img src="nit/nitd4.jpg" style="width:100%">
    <img src="nit/nitd5.jpg" style="width:100%">
    <img src="nit/nitd17.jpg" style="width:100%">
  </div>

  <div class="w3-third">
    <img src="nit/nitd3.jpg" style="width:100%">
    <img src="nit/nitd8.jpg" style="width:100%">
    <img src="nit/nitd9.jpg" style="width:100%">
    <img src="nit/nitd10.jpg" style="width:100%">
    <img src="nit/nitd11.jpg" style="width:100%">
    <img src="nit/nitd12.jpg" style="width:100%">
  </div>

  <div class="w3-third">
    <img src="nit/nitd13.jpg" style="width:100%">
    <img src="nit/nitd14.jpg" style="width:100%">
    <img src="nit/nitd15.jpg" style="width:100%">
    <img src="nit/nitd16.jpg" style="width:100%">
    <img src="nit/nitd6.jpg" style="width:100%">
    <img src="nit/nitd18.jpg" style="width:100%">
  </div>
  </div>
</div>
<!-- Clear floats -->
<div class="w3-clear"></div><br><br>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-margin-top w3-opacity">
 <div class="w3-xlarge w3-padding-32">
   <a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
   <a href="#" class="w3-hover-text-red"><i class="fa fa-pinterest-p"></i></a>
   <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
   <a href="#" class="w3-hover-text-grey"><i class="fa fa-flickr"></i></a>
   <a href="#" class="w3-hover-text-indigo"><i class="fa fa-linkedin"></i></a>
 </div>
  <p style="font-weight:normal">Powered by <a href="index.php" target="_self">nitdgp</a></p>
</footer>
 
<script>
</script>

</body>
</html>

