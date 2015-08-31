<?php
//session_start();
$message="";
if(!empty($_POST['username']) || !empty($_POST['password']))  {
$conn = mysql_connect("localhost","root","");
mysql_select_db("home",$conn);
$result = mysql_query("SELECT * FROM login WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
$row  = mysql_fetch_array($result);
if(is_array($row)) {
//$_SESSION["user_id"] = $row[user_id];
$_SESSION["username"] = $row[username];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["username"])) {
header("Location:main_manager.php");
}
else{
?>
<script type="text/javascript">
alert("Enter valid username and password");
window.location.href="index.php";
//window.open('index.php');
</script>
<?php
}
?>
?>