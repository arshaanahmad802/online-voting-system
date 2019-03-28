<!doctype html>
<html>
<head>
<title> USER ENROLMENT PAGE</title>
<style type="text/css">
body{
	background-image: url(bg7.jpg), url(bg9.jpg);
    background-position:left top,left center;
    background-repeat:repeat-x,repeat;
    background-size:150px,cover;
		
}
.aa{
	width:500px;
	height: 1000px;
	background-color: rgba(0,0,0,0.4);
	margin: 0 auto;
	padding-left: 20px;
	padding-top: 10px;
	border-radius: 15px;
	font-weight: bolder;
}
.aa input[type="text"]{
	width:400px;
	height:20px;
	border-radius:5px;
}																																									
																												.aa input[type="password"]{
	width:400px;
	height:20px;
	border-radius:5px;
}							
.aa input[type="submit"]{
	width:100px;
	border-radius:5px;
	background-color:rgba(0,1,0,0.1);
	font-weight: bolder;
	font-color: white;
	

}																																							


</style>
</head>
<body>
<center><h1>  REGISTRATION FORM<h1></center>
    <br><br>
<div class="aa">
<form method="post" action="register.php">
	ADHARCARD NUMBER : <input type="text" name="adhar" placeholder="enter your adhaarcard no.."><br><br><br>
	FIRST NAME: <input type="text" name="firstname" placeholder="enter your first name.."><br><br><br>
	LAST NAME: <input type="text" name="lastname" placeholder="enter your last name.."><br><br><br>
   COMPLETE  NAME: <input type="text" name="user" placeholder="enter your last name.."><br><br><br>
	FATHER NAME: <input type="text" name="fathername" placeholder="enter your father name.."><br><br><br>
	MOBILE NUMBER: <input type="text" name="mobilenumber" placeholder="enter your  mobile number registered.."><br><br><br>
	CURRENT ADDRESS: <input type="text" name="currentaddress" placeholder="enter your current address.."><br><br><br>
	PERMANENT ADDRESS: <input type="text" name="permanentaddress" placeholder="enter your permanent address."><br><br><br>
    PASSWORD: <input type="password" name="password" placeholder="enter your password."><br><br><br>
    RE-ENTER PASSWORD: <input type="password" name="password1" placeholder="enter your password."><br><br><br>
	SEX: <br><input type="radio" name="sex" value="male">Male<br>
	<input type="radio" name="sex" value="female">Female<br><br>
    <input type="hidden" name="use" value="use">
	<input type="submit" value="SUBMIT">
</form>

</div>





</body>
</html>