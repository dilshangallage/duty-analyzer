<html>
<?php 
?>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
/*$(document).ready(function(){
	$(".circle").dblclick(function(){
		$("#top").slideDown(1000);
	});
});
*/
$(document).ready(function(){
	$("#hover0").click(function(){
		$("#top").slideToggle(1000);
	});
});
$(document).ready(function(){
	$("#hover1").click(function(){
		$("#project_tab").slideDown(1000);
	});
});
$(document).ready(function(){
	$("#hover2").click(function(){
		$("#project_tab").slideUp(1000);
	});
});
$(document).ready(function(){
	$("#hover3").click(function(){
		$("#user_tab_collection").slideToggle(1000);
	});
});

</script>
<script>
///////////////JS//////
function setVisibility(id, visibility) {
document.getElementById(id).style.display = visibility;
}

</script>

</head>
<link rel="stylesheet" href="ss.css" type="text/css" >
<link rel="stylesheet" href="commoncss.css" type="text/css" >
<body>

<div id="top">
<div id="top_inside">
</div>
</div>

<div id="middle_tabs">

<div id="middle1" align="center">
<table id="tabing" >
<tr>
<td title="graphs" ><img src="img/graphs.png"id="hover0" class="circle"></td>
<td title="projects" ><a href="#"><img src="img/projects1.png"id="hover1" class="circle" ></a></td>
<td title="users" ><a href="#"><img src="img/users3.png" id="hover2"class="circle" ></a></td>
<td title="reports"><a href="#"><img src="img/reports.png" id="hover3" class="circle"></a></td>
</tr>
</table>
</div>

<div id="tabs" >

<div id="user_tab_collection">

<div id="project_tab">
<table>
<tr>
<td width="200px">
<div id="tab_left">
<table id="tabing" >
<td title="projects" ><img src="img/adds.png"id="hover4" class="circle1" onclick="setVisibility('tab2','inline');setVisibility('tab3','none');  setVisibility('tab4','none');"></td>
</tr>
<tr><td title="users" ><img src="img/deletes1.png" id="hover5"class="circle1"onclick="setVisibility('tab2','none');setVisibility('tab3','inline');  setVisibility('tab4','none');"></td>
</tr>
<tr><td title="reports"><img src="img/updates.png" id="hover6" class="circle1" onclick="setVisibility('tab2','none');setVisibility('tab3','none');  setVisibility('tab4','inline');"></td>
</tr>
</table>
</div>
</td>
<td>
<div id="content">

<div class="tab-content">
        
 
        <div id="tab2" class="tab ">
				<form><table><tr><td align="right" >ID</td><td><input type="text" name="id"></td></tr>
<tr><td align="right">Category</td><td><select></select></td></tr>
<tr><td align="right">Project Name</td><td><input type="text" name="proname"></td></tr>
<tr><td align="right">Project Description </td><td><textarea rows="4" cols="50" name="prodesc"></textarea></td></tr>
<tr><td align="right">Client Name</td><td><input type="text" name="clientname"></td></tr>
<tr><td align="right">Address</td><td><textarea rows="4" cols="50" name="address"></textarea></td></tr>
<tr><td align="right">Tel no</td><td><input type="text" name="telno1"></td></tr>
<tr><td align="right"></td><td><input type="text" name="telno2"></td></tr>
<tr><td align="right"></td><td><input type="text" name="id"></td></tr>
</table></form>
			</div>
 
        <div id="tab3" class="tab">
				<form><table><tr><td align="right" >ID</td><td><input type="text" name="id"></td></tr>
<tr><td align="right">Category</td><td><select></select></td></tr>
<tr><td align="right">Project Name</td><td><input type="text" name="proname"></td></tr>
<tr><td align="right">Project Description </td><td><textarea rows="4" cols="50" name="prodesc"></textarea></td></tr>
<tr><td align="right">Client Name</td><td><input type="text" name="clientname"></td></tr>
<tr><td align="right">Address</td><td><textarea rows="4" cols="50" name="address"></textarea></td></tr>
<tr><td align="right">Tel no</td><td><input type="text" name="telno1"></td></tr>
<tr><td align="right"></td><td><input type="text" name="telno2"></td></tr>
<tr><td align="right"></td><td><input type="text" name="id"></td></tr>
</table></form>
			</div>
 
        <div id="tab4" class="tab">
				<form><table><tr><td>Category</td><td><select></select></td><td>Client</td><td><select></select></td><td></td><td><a href="#"><img src="img/search.png"></a></td></tr></table></form>

			</div>
    </div>
</div>
</td>
</tr>
</table>

</div>

<div id="user_tab">
<table>
<tr>
<td width="200px">
<div id="tab_left">
<table id="tabing" >
<tr>
<td title="report" ><img src="img/gr1.png"id="hover7" class="circle1" onclick="setVisibility('tab11', 'inline'); setVisibility('tab22','none');setVisibility('tab33','none');  setVisibility('tab44','none');"></td>
</tr>
<tr>
<td title="add" ><img src="img/adds.png"id="hover7" class="circle1" onclick="setVisibility('tab11', 'none'); setVisibility('tab22','inline');setVisibility('tab33','none');  setVisibility('tab44','none');"></td>
</tr>
<tr><td title="delete" ><img src="img/deletes1.png" id="hover8"class="circle1" onclick="setVisibility('tab11', 'none'); setVisibility('tab22','none');setVisibility('tab33','inline');  setVisibility('tab44','none');"></td>
</tr>
<tr><td title="update"><img src="img/updates.png" id="hover9" class="circle1" onclick="setVisibility('tab11', 'none'); setVisibility('tab22','none');setVisibility('tab33','none');  setVisibility('tab44','inline');"></td>
</tr>
</table>
</div>
</td>
<td>
<div id="content">

<div class="tab-content">
        <div id="tab11" class="tab  ">
            <form><table><tr><td>Category</td><td><select></select></td><td></td><td><a href="#"><img src="img/search.png"></a></td></tr></table></form>

			</div>
 
        <div id="tab22" class="tab ">
				<form><table><tr><td align="right" >ID</td><td><input type="text" name="id"></td></tr>
<tr><td align="right">Full Name</td><td><input type="text" name="fulname"></td></tr>
<tr><td align="right">Name with Initials</td><td><input type="text" name="initials"></td></tr>
<tr><td align="right">Date of Birth</td><td><input type="text" name="dob"></td></tr>
<tr><td align="right">Sex</td><td><input type="radio" name="sex" value="male">Male</td></tr>
<tr><td align="right"></td><td><input type="radio" name="sex" value="female">Female</td></tr>
<tr><td align="right">Address</td><td><textarea rows="4" cols="50" name="address"></textarea></td></tr>
<tr><td align="right">Tel no</td><td><input type="text" name="telno1"></td></tr>
<tr><td align="right"></td><td><input type="text" name="telno2"></td></tr>
<tr><td align="right">Position</td><td><input type="text" name="position"></td></tr>
<tr><td align="right">Qualifications</td><td><textarea rows="4" cols="50" name="qualification"></textarea></td></tr>
<tr><td align="right">Join Date</td><td><input type="text" name="joind"></td></tr>
</table></form>
			</div>
 
        <div id="tab33" class="tab">
				<form><table><tr><td align="right" >ID</td><td><input type="text" name="id"></td></tr>
<tr><td align="right">Full Name</td><td><input type="text" name="fulname"></td></tr>
<tr><td align="right">Name with Initials</td><td><input type="text" name="initials"></td></tr>
<tr><td align="right">Date of Birth</td><td><input type="text" name="dob"></td></tr>
<tr><td align="right">Sex</td><td><input type="radio" name="sex" value="male">Male</td></tr>
<tr><td align="right"></td><td><input type="radio" name="sex" value="female">Female</td></tr>
<tr><td align="right">Address</td><td><textarea rows="4" cols="50" name="address"></textarea></td></tr>
<tr><td align="right">Tel no</td><td><input type="text" name="telno1"></td></tr>
<tr><td align="right"></td><td><input type="text" name="telno2"></td></tr>
<tr><td align="right">Position</td><td><input type="text" name="position"></td></tr>
<tr><td align="right">Qualifications</td><td><textarea rows="4" cols="50" name="qualification"></textarea></td></tr>
<tr><td align="right">Join Date</td><td><input type="text" name="joind"></td></tr>
</table></form>
			</div>
 
        <div id="tab44" class="tab">
				<form><table><tr><td>Category</td><td><select></select></td><td></td><td><a href="#"><img src="img/search.png"></a></td></tr></table></form>

			</div>
    </div>
</div>
</td></tr></table>

</div>
</div>


<div id="report_tab">
<table>
<tr><td width="200px">
<div id="tab_left">
<table id="tabing" >
<tr>
<td title="reports" ><img src="img/reports3.png"id="hover10" class="circle1" ></td>
</tr>
</table>
</div>
</td><td>
<div id="content">
<div id="tab444" >
				<form><table><tr><td>Category</td><td><select></select></td><td>Client</td><td><select></select></td><td></td><td><a href="#"><img src="img/search.png"></a></td></tr></table></form>

			</div>
</div>
</td></tr></table>
</div>
</div>

</div>

<div id="end_arrow">
</div>
</body>

</html>