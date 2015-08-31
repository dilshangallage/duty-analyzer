<html>
<?php
?>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script>
$(document).ready(function(){
	$("#circle").click(function(){
		$("#slide").slideToggle(3000);
	});
});
</script>
<link type="text/css" rel="stylesheet" href="home.css">
</head>
<body >
<div  id="top1">
<p><span id="circle1">T</span><span id="text1">hink</span></p>
</div>
<div  id="top2">
<p><span id="circle1">E</span><span id="text1">volve</span></p><div id="top4"  align="center">
<img src="img/down.png" id="circle">

</div>
</div>
<div  id="top3">
<p><span id="circle1">S</span><span id="text1">olve</span></p>
</div>

<div id="slide">

<form name="loginform" action="log.php" method="post">
<table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
  <tr>
    <td colspan="2">
		
	</td>
  </tr>
  <tr>
    <td width="300" height="60"><div align="right" style="font-size:20pt;">Username</div></td>
    <td width="300" height="60"><input name="username" type="text" style="font-size:20pt;"/></td>
  </tr>
  <tr>
    <td><div align="right" style="font-size:20pt;">Password</div></td>
    <td><input name="password" type="password"  style="font-size:20pt;"/></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td><input name="login" type="submit" value="login" id="button" /></td>
  </tr>
</table>
</form>

</div>
<div id="end">
<table align="center">
<tr>
<td width="100px"><a href="#" ><img src="img/f.png" class="a" title="facebook" id="circle2"></a>
</td>
<td width="100px"><a href="#" ><img src="img/g.png" class="a" title="gmail" id="circle2"></a>
</td>
<td width="100px"><a href="#" ><img src="img/t.png" class="a" title="twitter" id="circle2"></a>
</td>
<td width="100px"><a href="#" ><img src="img/i.png"  class="a"title="linkedin" id="circle2"></a>
</td>
<td width="100px"><a href="#" ><img src="img/b.png" class="a" title="aa" id="circle2"></a>
</td>
</tr>
</table>
</div>
</body>
</html>