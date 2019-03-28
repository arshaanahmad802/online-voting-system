<!doctype html>
<html>
<head>
<title> Welcome to ELECTION PORTAL.</title>
<style type="text/css">
body{
	background-image: url(bg7.jpg), url(bg9.jpg);
    background-position:left top,left center;
    background-repeat:repeat-x,repeat;
    background-size:150px,cover;
		
}    
.cc{
	width:80px;
	height: 20px;
	background-color: rgba(0,0,0,0.2);
	position: absolute;
    top: 0;
    left:94%;
	padding-left: 2px;
	padding-top: 1px;
	border-radius: 1px;
	font-weight: bolder;
}
</style>
</head>
<body>
    
<br>

        <center><h1>WELCOME ADMIN</h1></center>
<br><br><br>
    <center>
  <div class="w3-content w3-section" style="max-width:500px" width="100%" height="50%">
<img class="mySlides w3-animate-fading" src="img1%20(1).jpg" width="100%" height="50%" >
<img class="mySlides w3-animate-fading" src="img1%20(2).jpg" width="100%" height="50%">
<img class="mySlides w3-animate-fading" src="img1%20(3).jpg" width="100%" height="50%">
<img class="mySlides w3-animate-fading" src="img1%20(4).jpg" width="100%" height="50%">
<img class="mySlides w3-animate-fading" src="img1%20(5).jpg" width="100%" height="50%">
<img class="mySlides w3-animate-fading" src="img1%20(6).jpg" width="100%" height="50%">
<img class="mySlides w3-animate-fading" src="img1%20(7).jpg" width="100%" height="50%">
</div>
    </center>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 9000);    
}
</script>
<a href="candisplay.php"><img src="candidate.png" width="32.5%" height="250"></a>
    <a href="result.php"><img src="result.jpg" width="32.5%" height="250"></a>
<div class="cc">
	<a href="election.php">LOGOUT</a></div>
	 <a href="admin.php"><img src="newuser.png" width="32.5%" height="250"></a>
</div>
</body>
</html>