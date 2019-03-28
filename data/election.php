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
		
}    .bb{
     width:100%;
    height:40%;
    background-color: rgba(0,0,0,0.2);
	margin: 0 auto;
	padding-top: 10px;
	border-radius: 15px;
	font-weight: bolder;
}
.aa{
	width: 300px;
	height: 190px;
	background-color: rgba(0,0,0,0.4);
    position: absolute;
    top:0%;
    left:76%;
	padding-top: 10px;
	padding-left: 20px;
	border-radius:15px;
	font-weight: bolder;
		
}
.aa input[type="text"]{
	width:200px;
	height:20;
	border-radius:5px;
}																																									
.aa input[type="password"]{
	width:200px;
	height:20;
	border-radius:5px;
}																																									
.aa input[type="submit"]{
	width:100px;
	height:20;
	border-radius:5px;
	background-color:rgba(0,1,0,0.1);
	font-weight: bolder;
	color: white;
	

}
    
slideshow{
margin:0 auto;
padding-top:50px;
height:500px;
background: blue;
box-sizing:border-box;
}
.content{
margin:auto;
width: 190px;
perspective:1000px;
position:relative;
padding-top:80px;
}
.content-carrousel{
width:100%;
position:absolute;
float:right;
animation:rotar 15s infinite linear;
transform-style:preserve-3d;
}
.content-carrousel :hower{
animation-play-state:paused;
cursor:pointer;
}
.content-carrousel figure{
width: 100%;
height:120px;
border:1px solid #4d444d;
overflow:hidden;
position:absolute;
}
.content-carrousel figure:nth-child(1){
transform:rotateY(0deg) translateZ(300px);
}
.content-carrousel figure:nth-child(2){
transform:rotateY(40deg) translateZ(300px);
}

.content-carrousel figure:nth-child(3){
transform:rotateY(80deg) translateZ(300px);
}

.content-carrousel figure:nth-child(4){
transform:rotateY(120deg) translateZ(300px);
}

.content-carrousel figure:nth-child(5){
transform:rotateY(160deg) translateZ(300px);
}
.content-carrousel figure:nth-child(6){
transform:rotateY(200deg) translateZ(300px);
}

.content-carrousel figure:nth-child(7){
transform:rotateY(240deg) translateZ(300px);
}

.content-carrousel figure:nth-child(8){
transform:rotateY(280deg) translateZ(300px);
}
.content-carrousel figure:nth-child(9){
transform:rotateY(320deg) translateZ(300px);
}
.shadow{
position:absolute;
box-shadow: 0px 0px 20px 0px #000;
box-radius:2px;
}
.content-carrousel img{
image-rendering:auto;
transition:all 300ms;
width:100%;
height: 100%;
}
.content-carrousel img:hower{
transform:scale(1.2);
transition: all 300ms;
}
@keyframes rotar{
from{
transform:rotateY(0deg);
} 
to{
transform:rotateY(360deg);
}
}


</style>
</head>
<body>
<br><br>
    <center><h1> ELECTION PORTAL</h1></center>
    <div class="aa">
<h2> Login</h2>
<form method="post" action="server1.php">
	Name: <input type="text" name="user" placeholder="please enter user name.."> <br><br>	
	Password: <input type="password" name="password" placeholder="enter the password.."><br><br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="submit" value="LOGIN">
 </form>
</div>
    <div style="position:asolute;top:15%;left:0%;width:75%;height:15px;background-color:rgba(1,0,0,0);border-radius:0.5px;color:red;">
<marquee direction="left" onmouseover="stop() "onmouseout="start()">
    <b>    TO GO NEXT PAGE PLEASE CLICK ON IMAGES. &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp HAVE A VISION?? MAKE THE RIGHT DECISION!!!  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp BE BRIGHT, VOTE FOR THE <b>RIGHT</b>..!!</b>
</marquee>
</div>
    <section class ="slideshow">
	<div class ="content">
		<div class ="content-carrousel">
			<figure class ="shadow"><img src ="img1 (1).jpg" height="200px" width="200px"></figure>
			<figure class ="shadow"><img src ="12.jpg.jpg" height="200px" width="200px"></figure>
			<figure class ="shadow"><img src ="img1 (3).jpg" height="200px" width="200px"></figure>
			<figure class ="shadow"><img src ="15.jpg" height="200px" width="200px"></figure>
			<figure class ="shadow"><img src ="img1 (5).jpg" height="200px" width="200px"></figure>
			<figure class ="shadow"><img src ="img1 (6).jpg" height="200px" width="200px"></figure>
			<figure class ="shadow"><img src ="img1 (7).jpg" height="200px" width="200px"></figure>
			<figure class ="shadow"><img src ="13.jpg" height="200px" width="200px"></figure>
			<figure class ="shadow"><img src ="img1 (9).jpg" height="200px" width="200px"></figure>
		</div>
	</div>
</section>
<br><br><br><br><br><br<br><br><br<br><br><br<br><br><br<br><br><br<br><br><br<br><br><br<br><br><br<center>
    <a href="help.php"> <img src="qb.jpg" width="49%" height="350"> </a>
      <a href="home.php"> <img src="newuser.png" width="49%" height="350"> </a>
    <a href="result.php"> <img src="result.jpg" width="49%" height="350"> </a>
<a href="aboutus.php"> <img src="about.jpg" width="49%" height="350"> </a>
    </center>
</body>
</html>