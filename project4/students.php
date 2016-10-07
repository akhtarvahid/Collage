<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />	
	<title>InfoGrid</title>
	<link rel='stylesheet' type='text/css' href='css/studentcss.css' />
    <link rel="stylesheet" href="css/cssforfaculties1.css">
    <link rel="stylesheet" href="css/cssforfaculties2.css">
    <link rel="stylesheet" href="css/cssforfaculties.css">
    <link rel="stylesheet" href="lib/styleforstudent.css">

    <script type='text/javascript' src='js/studentjs.js'></script>
    <script type='text/javascript' src='js/infogrid.js'></script>   
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="lib/w3.css">
<style>
.mySlides {display:none}
.red{background:green;
    height:50px;
	width:100%;}
</style>
	
</head>

<body>
<!-----header---->
<ul class="w3-navbar w3-blue w3-card-2 w3-top w3-left-align w3-large">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="index.php" class="w3-padding-large w3-hover-white">Home</a></li>
  <li class="w3-hide-small"><a class="w3-padding-large w3-white">MCA BATCH</a></li>
</ul>    
<div class="red">
</div>

 <!------image slider------->
<div class="w3-content" style="max-width:1000px">
  <a href="mca2011batch.php"><img class="mySlides" src="images/mcanit2011-2014.jpg" style="width:100%;height:420px"></a>
  <a href="mca2012batch.php"><img class="mySlides" src="images/batch2012.jpg" style="width:100%;height:420px"></a>
  <a href="mca2013batch.php"><img class="mySlides" src="images/mcanitdgp2013-2016.jpg" style="width:100%;height:420px"></a>

  <div class="w3-row-padding w3-section">
    <div class="w3-col s4">
      <img class="demo w3-border w3-hover-shadow" src="images/mcanit2011-2014.jpg" style="width:100%;height:130px" onclick="currentDiv(1)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-border w3-hover-shadow" src="images/batch2012.jpg" style="width:100%;height:130px" onclick="currentDiv(2)">
    </div>
    <div class="w3-col s4">
      <img class="demo w3-border w3-hover-shadow" src="images/mcanitdgp2013-2016.jpg" style="width:100%;height:130px" onclick="currentDiv(3)">
    </div>
  </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-border-red", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-border-red";
}
</script>
 

</body>

</html>