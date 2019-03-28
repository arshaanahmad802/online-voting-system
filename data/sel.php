<?php
$con = mysql_connect("localhost","root","");
if(!$con)
{ die('Could not connect' .mysql_error());}
mysql_select_db("election",$con);
$result = mysql_query("Select* from newuser",$con);
while($row = mysql_fetch_array($result))
{echo $row['adhar']." ".$row['firstname']." ".$row['lastname'];
echo"<br/>";
}mysql_close($con);
?>