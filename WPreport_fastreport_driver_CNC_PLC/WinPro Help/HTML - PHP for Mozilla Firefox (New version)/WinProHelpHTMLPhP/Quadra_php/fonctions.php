<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html><head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED","ESP"];
var WinProHelpPageName=["Functions","Fonctions","Functies","Funciones"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?fonctions.php"; }
else { parent.quicksync('a2.4'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>


<title>Fonctions</title><meta name="generator" content="Help &amp; Manual">
<meta name="keywords" content="Fonctions">
<meta http-equiv="Content-Type" content="text/php; charset=ISO-8859-1">
<meta http-equiv="Content-Style-Type" content="text/css">
<link type="text/css" href="default.css" rel="stylesheet"></head>
<body style="margin: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;" onload="AddTitleAndLangFlags();highlight();">
<div id="hmpopupDiv" style="visibility: hidden; position: absolute; z-index: 1000;"></div>


<table bgcolor="#ff8000" border="0" cellpadding="5" cellspacing="0" width="100%">
  <tbody><tr valign="middle">
    <td align="left">
      <p class="p_Heading1"><span class="f_Heading1" style="font-size: 6pt; font-weight: normal;">&nbsp;</span></p>
      <p class="p_Heading1"><span id="titlepage" class="f_Heading1"></span></p>
    </td>
	<td align="center">
     <div id="langflags"></div>
    </td>
    <td align="right">
     <span style="font-size: 9pt;">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="ruptures.php">Previous</a>&nbsp;
     <a href="fonctions_arithmetiques.php">Next</a>
     </span>
    </td>
  </tr>
</tbody></table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%"><tbody><tr valign="top"><td align="left">

<p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="color: rgb(0, 0, 0);">WinPro provides a number of functions to let you perform <a href="fonctions_arithmetiques.php">arithmetic</a>, <a href="fonctions_trigonometriques.php">trigonometric</a>, <a href="fonctions_logiques.php">logical</a>, <a href="fonctions_graphiques.php">graphical</a> or <a href="fonctions_de_date.php">date</a> computations.</span></p>

</td></tr></tbody></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%"><tbody><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Winpro fournit un certain nombre de fonctions vous permettant de faire du calcul <a href="fonctions_arithmetiques.php">arithmétique</a>, <a href="fonctions_trigonometriques.php">trigonométrique</a>, <a href="fonctions_logiques.php">logique</a>, <a href="fonctions_graphiques.php">graphiques</a> ou de <a href="fonctions_de_date.php">date</a>.</p>

</td></tr></tbody></table>
</div>

<div class="NED">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%"><tbody><tr valign="top"><td align="left">

<p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="color: rgb(0, 0, 0);">WinPro bied u verschillende functies aan om volgende punten te laten berekenen <a href="fonctions_arithmetiques.php">rekenkundig</a>, <a href="fonctions_trigonometriques.php">trigonometrisch</a>, <a href="fonctions_logiques.php">logisch</a>, <a href="fonctions_graphiques.php">grafisch</a> of <a href="fonctions_de_date.php">datums</a> </span></p>

</td></tr></tbody></table>
</div>
<div class="ESP">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%"><tbody><tr valign="top"><td align="left">

<p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"></span></p><p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"></span><span style="color: rgb(0, 0, 0);">WinPro provee un número de funciones que le permiten realizar cálculos <a href="fonctions_arithmetiques.php">aritméticos</a>, <a href="fonctions_trigonometriques.php">trigonométricos</a>, <a href="fonctions_logiques.php">lógicos</a></span>, <a href="fonctions_graphiques.php">graphiques</a><span style="color: rgb(0, 0, 0);"><a href="fonctions_logiques.php"> </a>y <a href="fonctions_de_date.php">fechas </a>.</span></p>
<p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="color: rgb(0, 0, 0);"><br></span></p>

</td></tr></tbody></table>
</div>
</body></html>