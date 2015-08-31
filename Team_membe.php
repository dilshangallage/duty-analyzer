<?php

?>
<script language="javascript"> 
var base = 60;
var clocktimer,dateObj,dh,dm,ds,ms;
var readout='';
var h=1;
var m=1;
var tm=1;
var s=0;
var ts=0;
var ms=0;
var show=true;
var init=0;
var mPLUS=new Array(
'm0',
'm1',
'm2',
'm3',
'm4',
'm5',
'm6',
'm7',
'm8',
'm9');
var ii=0;

function clearALL() {
clearTimeout(clocktimer);
h=1;m=1;tm=1;s=0;ts=0;ms=0;
init=0;show=true;
readout='00:00:00.00';
document.clockform.clock.value=readout;
var CF = document.clockform;
for (ij=0;ij<=9;ij++) { CF[mPLUS[ij]].value = ''; }
ii = 0;}

function addMEM() {
if (init>0) {var CF = document.clockform;
CF[mPLUS[ii]].value = readout;
if (ii==9) { ii = 0; } else { ii++; }}}


function startTIME() { 
var cdateObj = new Date();
var t = (cdateObj.getTime() - dateObj.getTime())-(s*1000);

if (t>999) { s++; }

if (s>=(m*base)) {ts=0;
m++;} else {ts=parseInt((ms/100)+s);
if(ts>=base) { ts=ts-((m-1)*base); }}

if (m>(h*base)) {tm=1;
h++;} else {tm=parseInt((ms/100)+m);
if(tm>=base) { tm=tm-((h-1)*base); }}

ms = Math.round(t/10);
if (ms>99) {ms=0;}
if (ms==0) {ms='00';}
if (ms>0&&ms<=9) { ms = '0'+ms; }

if (ts>0) { ds = ts; if (ts<10) { ds = '0'+ts; }} else { ds = '00'; }
dm=tm-1;
if (dm>0) { if (dm<10) { dm = '0'+dm; }} else { dm = '00'; }
dh=h-1;
if (dh>0) { if (dh<10) { dh = '0'+dh; }} else { dh = '00'; }

readout = dh + ':' + dm + ':' + ds + '.' + ms;
if (show==true) { document.clockform.clock.value = readout; }

clocktimer = setTimeout("startTIME()",1);}

function findTIME() {
if (init==0) {dateObj = new Date();
startTIME();
init=1;} else {if(show==true) {show=false;} else {show=true;}}}
</script>

<script language="JavaScript">
function setVisibility(id, visibility) {
document.getElementById(id).style.display = visibility;
}
</script>
<script type="text/javascript">
function poponload()
{
    testwindow = window.open("", "mywindow", "location=1,status=1,scrollbars=1,width=100,height=100");
    testwindow.moveTo(0, 0);
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
<ul id="top_menu"><li><a href="#" style="text-decoration:none;" onclick="setVisibility('layer1','inline'); setVisibility('layer2','none'); setVisibility('layer3','none');">Task</a></li>
<li><a href="#"  style="text-decoration:none;" onclick="setVisibility('layer1','none'); setVisibility('layer2','inline'); setVisibility('layer3','none');">Profile</a></li>
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

    <form name="clockform">
<input name="clock" style="font-size: 24; font-weight: bold; height: 35px; text-align: center; width: 174px;" value="00:00:00.00" />
<input name="starter" onclick="findTIME()" style="font-weight: bold; width: 97px;" type="button" value="Start/Stop" />
<input name="clearer" onclick="clearALL()" type="button" value="Reset" />
</form>

 
    
</div>
</div>
<div id="layer2">
<div id="tab2" class="tabs">
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
<tr><td align="right"><div >
            <img href="img/perform.png">Rating
			</div></td><td><input type="text" name="joind"></td></tr>
</table></form>
    </div>
</div>
<div id="layer3">
<div id="tab4" class="tabs">
				<form><table><tr><td>Category</td><td><select></select></td><td></td><td></td><td><a href="#"><img src="img/search.png"></a></td></tr></table></form>

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