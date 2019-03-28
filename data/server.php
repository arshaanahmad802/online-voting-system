<?php
$u;
$p;
$t;
$con = mysql_connect("localhost","root","maahmad");
if(!$con)
{ die('Could not connect' .mysql_error());}
mysql_select_db("election",$con);
$result =mysql_query("SELECT* FROM newuser WHERE user='$_POST[user]' & password='$_POST[password]'",$con);
while($row = mysql_fetch_array($result)){
$u =$row['user'];
$p = $row['password'];
$t = $row['use'];
if($t=='admin')
{
HEADER("c:\wamp\www\data\admin.php");
}
if($t=='use')
{
HEADER("c:\wamp\www\data\user.php");
}
}?>