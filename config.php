<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "home";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("wrong database details included");
mysql_select_db($mysql_database, $bd) or die("not databse select actualy...");

?>