<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>	
  
<!DOCTYPE HTML>
<!--
<!DOCTYPE HTML PUBLIC "-//W3C//DTD html 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
//-->

<html>
<head>
<title>WinPro Reference Manual</title>
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
<script type="text/javascript" src="wp_navigation.js"></script>
<script type="text/javascript">
<!--
var topic="introduction.php";
if (top.location.href.lastIndexOf("?") > 0) topic=top.location.href.substring(top.location.href.lastIndexOf("?")+1,top.location.href.length);
document.write('<frameset cols="25%,*" frameborder="1" framespacing="1">');
if (document.getElementById) {
  document.write('<frame name="hmnavigation" src="wp_content_dyn.php">'); }
document.write('<frame name="hmcontent" src="' + topic + '">');
document.write('</frameset>');
//-->
</script>
</head>
<noscript>
<frameset cols="25%,*" frameborder="1" framespacing="1">
<frame name="hmcontent" src="introduction.php"></frame>
</frameset>
</noscript>
</html>
