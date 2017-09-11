<?php

$con = mysql_connect("localhost","root","","cred");
mysql_select_db("cred",$con);


$a=$_POST["username"];
$b=$_POST["password"];

 $res=mysql_query("select user,pass from cred where user='".$a."' and pass='".$b."'");
    
     $count=  mysql_num_rows($res);
    //echo"".$count;
if($count >0)//fetches first row or last row
   {    
    echo 'correct';
} else{ 
    echo 'wrong';
}
 
  ?>