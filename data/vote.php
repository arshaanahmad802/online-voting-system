<?php
$c=0;
$con = mysql_connect("localhost","root","maahmad");
if(!$con)
{ die('Could not connect' .mysql_error());}
mysql_select_db("election",$con);
$result = mysql_query("Select * from candidates",$con);
while($row = mysql_fetch_array($result)){
if($_POST['vote']==$row['candidateo'])
{echo"<b>sucessfully voted</b>";
 $c=$c+1;
 $vo = "update candidates set voteo=voteo+1";
         $v = mysql_query($vo,$con);}
if($_POST['vote']==$row['candidatetw'])
    {echo"<b>sucessfully voted</b>";
     $c=$c+1;
     $vo = "update candidates set votetw=votetw+1";
         $v = mysql_query($vo,$con);}
if($_POST['vote']==$row['candidatefo'])
    {echo"<b>sucessfully voted</b>";
     $c=$c+1;
    $vo = "update candidates set votefo=votefo+1";
         $v = mysql_query($vo,$con);}
if($_POST['vote']==$row['candidatefi'])
    {echo"<b>sucessfully voted</b>";
     $c=$c+1;
     $vo = "update candidates set votefi=votefi+1";
         $v = mysql_query($vo,$con);
}
if($_POST['vote']==$row['candidateth'])
    {echo"<b>sucessfully voted</b>";
     $c=$c+1;
     $vo = "update candidates set voteth=voteth
     +1";
         $v = mysql_query($vo,$con);}}
if($c==0)
{
    echo"<b>you have chosen wrong candidate.</b>";
}
mysql_close($con);
?>