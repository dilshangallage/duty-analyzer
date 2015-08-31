<?php
if($_POST['username']=='' || $_POST['password']==''){
?>
<script type="text/javascript">
window.alert("Enter valid username and password");
window.location.href="index.php";
//window.open('index.php');
</script>
<?php

}
else
 {
if($_POST){
	//if(isset($_POST['login']) && $_POST['username'] && $_POST['password']){
		$db="home";
		$username = $_POST["username"];
    $password = md5($_POST["password"]);
		//$username=mysql_real_escape_string($_POST['username']);
		//$password=mysql_real_escape_string($_POST['password']);

		$connection = @mysql_connect("localhost","root","") or die("Couldn't make connection.");;
		
			if($connection){
				$selection = mysql_select_db($db)or die("Couldn't select database");

				
					if($selection){
						$query = "SELECT * FROM login WHERE username='" . $_POST["username"] . "' AND password='". $_POST["password"]."'";
						$query1 = "SELECT position FROM login WHERE username='" . $_POST["username"] . "' AND password='". $_POST["password"]."'";
						
						$mysql_query = mysql_query($query);
						$mysql_query1 = mysql_query($query1);
						//or trigger_error(mysql_error().$sql);
						//$row  = mysql_fetch_array($mysql_query);
						$row1 = mysql_fetch_array($mysql_query1);
						
						if(mysql_num_rows($mysql_query)>0){
							$_SESSION['username'] = $username;
							$_SESSION['position']= $mysql_query1;
							if($row1['position']=="team member"){
							
?>
<script type="text/javascript">
alert("Login successfully");
window.location.href="team_membe.php";
//window.open('main_manager.php');
</script>
<?php
}
elseif($row1['position']=="team leader"){
							
?>
<script type="text/javascript">
alert("Login successfully");
window.location.href="team_lead.php";
//window.open('team_leader.php');
</script>
<?php
}
elseif($row1['position']=="main manager"){
							
?>
<script type="text/javascript">
alert("Login successfully");
window.location.href="Main_Manage.php";
//window.open('team_leader.php');
</script>
<?php
}
elseif($row1['position']=="project manager"){
							
?>
<script type="text/javascript">
alert("Login successfully");
window.location.href="project_manage.php";
//window.open('team_leader.php');
</script>
<?php
}
						}else{

						?>
<script type="text/javascript">
alert("Invalid user");
window.location.href="index.php";
//window.open('index.php');
</script>
<?php
				}		
					}
					//echo "";
			}
			//echo "";
	//
}
}
?>