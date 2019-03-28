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
    table{
        border 2px;
        background-color: rgba(0,0,0,0.1);
    }
    .cc{
	width:500px;
	height: 40px;
	background-color: rgba(0,0,0,0.4);
	margin: 0 auto;
	padding-left: 10px;
	padding-top: 10px;
	border-radius: 15px;
	font-weight: bolder;
}
.cc input[type="text"]{
	width:200px;
	height:20px;
	border-radius:5px;
}																																									
																																					
.cc input[type="submit"]{
	width:100px;
	border-radius:5px;
	background-color:rgba(0,1,0,0.1);
	font-weight: bolder;
	font-color: white;
	

}						
</style>
</head>
<body>
<br><br><br><br><br><br><br>
    <?php
$con = mysql_connect("localhost","root","");
if(!$con)
{ die('Could not connect' .mysql_error());}
mysql_select_db("election",$con);
$result = mysql_query("Select * from candidates",$con);
echo "<center><table border=10>";
echo "<tr><th>CANDIDATE NAME</th><th>ELECTION TYPE</th><tr>";
while($row = mysql_fetch_array($result))
{
    echo "<tr><td>";
    echo $row['candidateo'];
    echo "</td><td>";
     echo $row['electiontype'];
    echo "</td></tr>";
         echo "<tr><td>";
    echo $row['candidatetw'];
    echo "</td><td>";
     echo $row['electiontype'];
    echo "</td></tr>";
         echo "<tr><td>";
    echo $row['candidateth'];
    echo "</td><td>";
     echo $row['electiontype'];
    echo "</td></tr>";
         echo "<tr><td>";
    echo $row['candidatefo'];
    echo "</td><td>";
     echo $row['electiontype'];
    echo "</td></tr>";
         echo "<tr><td>";
    echo $row['candidatefi'];
    echo "</td><td>";
     echo $row['electiontype'];
    echo "</td></tr>";
}
echo"</table><center>";

echo"<br/>";
mysql_close($con);
?>
   <form  method="post" action="vote.php"> 
       <div class = "cc">
       YOUR VOTE: <input type="text" name="vote" placeholder="please enter YOUR VOTE..">
           <input type="submit" value="SUBMIT"></form>
    </div></body>
</html>