<?php

include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from form 

$myusername=addslashes($_POST['username']); 
$mypassword=addslashes($_POST['password']); 


$sql="SELECT * FROM login WHERE username='$myusername' and passcode='$mypassword'";
$sql1="SELECT position FROM login WHERE username='$myusername' and passcode='$mypassword'";
$result=mysql_query($sql);
$result1=mysql_query($sql1);
$row=mysql_fetch_array($result);
//$active=$row['active'];

$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
session_register("myusername");
$_SESSION['login_user']=$myusername;

header("location: main_manager.php");
}
else 
{
$error="Your Login Name or Password is invalid";
}
}
?>
