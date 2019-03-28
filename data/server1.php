<?php
$a="admin";
$u="use";
$c=0;
$con = mysql_connect("localhost","root","maahmad");
if(!$con)
{ die('Could not connect' .mysql_error());}
mysql_select_db("election",$con);
$result = mysql_query("Select * from newuser",$con);
while($row = mysql_fetch_array($result)){
if($_POST['user']==$row['user'])
{
if($_POST['password']==$row['password'])
    {
     
if($a==$row['use'])
{
    $c=$c+1;
header('Location: admin1.php');
    exit();
}
if($u==$row['use']){
    $c=$c+1;
header('Location: user.php');
    exit();
}
}}}
if($c==0)
{echo "<b> Password or User name is incorrect<b>";}
mysql_close($con);
?>