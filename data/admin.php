<!doctype html>
<html>
<head>
<title> WELCOME</title>
<style type="text/css">
body{
	background-image: url(bg7.jpg), url(bg9.jpg);
    background-position:left top,left center;
    background-repeat:repeat-x,repeat;
    background-size:150px,cover;
		
}  

.bb{
	width:450px;
	height: 450px;
	background-color: rgba(0,0,0,0.4);
	margin: 0 auto;
	padding-left: 20px;
	padding-top: 10px;
	border-radius: 15px;
	font-weight: bolder;
}
.bb input[type="text"]{
	width:400px;
	height:20px;
	border-radius:5px;
}																																									
																																					
.bb input[type="submit"]{
	width:100px;
	border-radius:5px;
	background-color:rgba(0,1,0,0.1);
	font-weight: bolder;
	font-color: white;
	

}		
</style>
    </head>
<body>
    <br>
    <center> <h1> WELCOME ADMIN</h1>
        <br><br><br>
<div class="bb">
<form method="post" action="candiregister.php">
	ELECTION TYPE: <input type="text" name="electiontype" placeholder="enter the election type.."><br><br>
	CANDIDATE 1: <input type="text" name="candidateo" placeholder="enter candidate name.."><br><br>
	CANDIDATE 2: <input type="text" name="candidatetw" placeholder="enter candidate name.."><br><br>
	CANDIDATE 3: <input type="text" name="candidateth" placeholder="enter candidate name.."><br><br>
	CANDIDATE 4: <input type="text" name="candidatefo" placeholder="enter candidate name.."><br><br>
	CANDIDATE 5: <input type="text" name="candidatefi" placeholder="enter candidate name.."><br><br>
   <input type="hidden" name="voteo" placeholder="enter candidate initial vote.."value="0">
    <input type="hidden" name="votetw" placeholder="enter candidate initial vote.."value="0">
    <input type="hidden" name="voteth" placeholder="enter candidate initial vote.."value="0">
    <input type="hidden" name="votefo" placeholder="enter candidate initial vote.."value="0">
     <input type="hidden" name="votefi" placeholder="enter candidate initial vote.."value="0">
        <input type="submit" value="SUBMIT">
</form>
</div>
</body>
</html>