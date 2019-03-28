<?php
$con = MYSQL_connect("localhost","root","maahmad");
if(!$con)
{ die('Could not connect:' .mysql_error()); }
Mysql_select_db("election",$con);
$SQL="INSERT INTO newuser VALUES ('$_POST[adhar]','$_POST[firstname]','$_POST[lastname]','$_POST[user]','$_POST[fathername]','$_POST[mobilenumber]','$_POST[currentaddress]','$_POST[permanentaddress]','$_POST[sex]','$_POST[password]','$_POST[password1]','$_POST[use]');";
MYSQL_query($SQL,$con);
echo "1 record added";
Mysql_close($con);
?>