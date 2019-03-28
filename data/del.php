<?php
$con = mysql_connect("localhost","root","maahmad");
if(!$con)
{ die('Could not connect' .mysql_error());}
mysql_select_db("election",$con);
$result = mysql_query("Select * from candidates",$con);
while($row = mysql_fetch_array($result)){
$vo = "update candidates set voteo=voteo-voteo votetw= voteth=0 votefo=0 votefi=0 candidateo=none candidatetw=none candidateth=none candidatetefo=none candidatefi=none";
         $v = mysql_query($vo,$con);}
         header('Location: result.php');
mysql_close($con);
?>