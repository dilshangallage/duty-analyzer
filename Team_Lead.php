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
		</a></li><li><a href="#tab2" style="text-decoration:none;" onclick="setVisibility('tab1', 'none'); setVisibility('tab2','inline');setVisibility('tab3','none');  setVisibility('tab4','none');">
		<img src="img/report.png">Report</a></li>
    </ul>
 
    <div class="tab-content">
        <div id="tab1" class="tab  ">
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