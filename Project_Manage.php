<?php

?>
<script src="tabs.js">
</script>
<script language="JavaScript">
function setVisibility(id, visibility) {
document.getElementById(id).style.display = visibility;
}
</script>
<html>
<head>

<link rel="stylesheet" href="main_manager.css" type="text/css">
<link rel="stylesheet" href="common.css" type="text/css">

</head>
<body>
<div id="top">

</div>
<table>
<tr>
<td><div class="top_padding" align="left">
<ul id="top_menu"><li><a href="#" style="text-decoration:none;" onclick="setVisibility('layer1','inline'); setVisibility('layer2','none'); setVisibility('layer3','none');">Projects</a></li>
<li><a href="#"  style="text-decoration:none;" onclick="setVisibility('layer1','none'); setVisibility('layer2','inline'); setVisibility('layer3','none');">Users</a></li>
<li><a href="#" style="text-decoration:none;" onclick="setVisibility('layer1','none'); setVisibility('layer2','none'); setVisibility('layer3','inline');">Reports</a></li>
</ul>
</div></td>
<td><div id="top_line">

<a href="#"><img src="img/click1.png"></a><a href="#"><img src="img/click2.png"></a>
</div>
</td>
</tr>
</table>
<div class="layer">
<div id="layer1">
<div class="tabs">
    <ul class="tab-links">
        
        <li ><a href="#tab1" style="text-decoration:none;" onclick="setVisibility('tab1', 'inline'); setVisibility('tab2','none');setVisibility('tab3','none');  setVisibility('tab4','none');">
		<img src="img/new.png">New</a></li><li><a href="#tab3" style="text-decoration:none;" onclick="setVisibility('tab1', 'none'); setVisibility('tab2','none');setVisibility('tab3','inline');  setVisibility('tab4','none');"><img src="img/update.png">Update</a></li>
<li><a href="#tab4" style="text-decoration:none;" onclick="setVisibility('tab1', 'none'); setVisibility('tab2','none');setVisibility('tab3','none');  setVisibility('tab4','inline');"><img src="img/delete.png">Delete</a></li>

    </ul>
 
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
</div>
<div id="layer2">
<div class="tabs">
    <ul class="tab-links">
        
        <li ><a href="#tab11" style="text-decoration:none;" onclick="setVisibility('tab11', 'inline'); setVisibility('tab22','none');setVisibility('tab33','none');  setVisibility('tab4','none');">
		<img src="img/report.png">Report</a></li><li><a href="#tab22" style="text-decoration:none;" onclick="setVisibility('tab11', 'none'); setVisibility('tab22','inline');setVisibility('tab33','none');  setVisibility('tab44','none');">
		<img src="img/rating.png">Rating</a></li>
    </ul>
 
    <div class="tab-content">
        <div id="tab11" class="tab  ">
            <form><table><tr><td>Category</td><td><select></select></td><td></td><td><a href="#"><img src="img/search.png"></a></td></tr></table></form>

			</div>
 
        <div id="tab22" class="tab ">
				 <form><table><tr><td>Category</td><td><select></select></td><td></td><td><a href="#"><img src="img/search.png"></a></td></tr></table></form>

			</div>
        
    </div>
</div>
</div>
<div id="layer3">
<div id="tab444" >
				<form><table><tr><td>Category</td><td><select></select></td><td>Client</td><td><select></select></td><td></td><td><a href="#"><img src="img/search.png"></a></td></tr></table></form>

			</div>
</div>
</div>



</div>
<div class="end1">
<a href="#" target="_top"><img align="right" src="img/up_arrow.png"></a>
</div>
<div class="end2">
</div>
<div class="end3">
</div>

</body>
</html>