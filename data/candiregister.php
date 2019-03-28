<?php
$con = MYSQL_connect("localhost","root","maahmad");
if(!$con)
{ die('Could not connect:' .mysql_error()); }
Mysql_select_db("election",$con);
$SQL="INSERT INTO candidates  VALUES ('$_POST[electiontype]','$_POST[candidateo]','$_POST[candidatetw]','$_POST[candidateth]','$_POST[candidatefo]','$_POST[candidatefi]','$_POST[voteo]','$_POST[votetw]','$_POST[voteth]','$_POST[votefo]','$_POST[votefi]');";
MYSQL_query($SQL,$con);
echo "1 record added";
Mysql_close($con);
?>