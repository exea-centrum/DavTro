<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Time","Temps"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?temps.php"; }
else { parent.quicksync('a2.6.34'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Temps</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Temps" />
   <meta http-equiv="Content-Type" content="text/php; charset=ISO-8859-1" />
   <meta http-equiv="Content-Style-Type" content="text/css" />
   <link type="text/css" href="default.css" rel="stylesheet" />
</head>
<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;" onload=" AddTitleAndLangFlags();highlight();">
<div id="hmpopupDiv" style="visibility:hidden; position:absolute; z-index:1000;"></div>


<table width="100%" border="0" cellspacing="0" cellpadding="5" bgcolor="#FF8000">
  <tr valign="middle">
    <td align="left">
      <p class="p_Heading1"><span id="titlepage" class="f_Heading1"></span></p>
    </td>
	<td align="center">
     <div id="langflags"></div>
    </td>
    </td>
    <td align="right">
     <span style="font-size: 9pt">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="styletrait.php">Previous</a>&nbsp;
     <a href="texte.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>This instruction draws a time, using the current text settings </p>
<p class="p_Interligne"><span class="f_Interligne" style="text-decoration: underline;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax</span>:</p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Time (x, y, value[, format])</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td valign="middle" width="83" style="width: 83px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Parameter</span></p>
</td>
<td width="522" style="width: 522px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 12px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td valign="middle" width="83" style="width: 83px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>
<p style="text-align: center;"><span class="f_Variables">x, y</span></p>
</td>
<td width="522" style="width: 522px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 12px;">Text coordinates. The start point depends on the current alignment settings (see <a href="alignetexte.php">TextAlign</a>)</p>
</td>
</tr>
<tr valign="middle" align="left">
<td valign="middle" width="83" style="width: 83px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>
<p style="text-align: center;"><span class="f_Variables">value</span></p>
</td>
<td width="522" style="width: 522px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 12px;">Time to display. This can be a simple <a href="nombres.php">number</a> (time in seconds), a number in time format, or any valid arithmetic expression (time in seconds)</p>
</td>
</tr>
<tr valign="middle" align="left">
<td valign="middle" width="83" style="width: 83px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"> </span><span class="f_Variables">format</span></p>
</td>
<td width="522" style="width: 522px; border: solid 1px #c0c0c0;"><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>Display format. Here are some possibilities:</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">SS</span> Display the seconds portion of the time</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">SSS</span> Display the total number of seconds</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">SS.sss</span> Display the seconds portion of the time, with decimals</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">SSS.sss</span> Display the total number of seconds, with decimals</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">MM.mmm </span>Display the minutes portion of the time, with seconds as decimals</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">MMM.mmm</span> Display the total number of minutes, with seconds as decimals</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">MM:SS</span> Display the number of minutes and seconds</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">MMM:SS</span> Display the total number and minutes and the seconds</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">MM:SS.sss</span> Display the number of minutes and seconds with decimals</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">HH.hhh</span> Display the time in hours, with minutes and seconds as decimals</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">HH:MM</span> Display the hours and minutes</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">HH:MM.mmm</span> Display the hours and minutes, with seconds as the decimal part</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">HH:MM:SS</span> Display the time as hour, minutes seconds (default format)</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">HH:MM:SS.sss</span> Display the time as hour, minutes seconds, with decimals</p>
</td></tr></table></div></td>
</tr>
</table>
</div>
<p style="text-align: center;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="248" style="width: 248px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Note</span><span style="text-decoration: underline;">:</span> </p>
<p style="margin: 0px 0px 0px 13px;">The default format is <span class="f_Variables">HH:MM:SS</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Time (1000, 900, (12:45:15)/30, HH:MM:SS.s)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Time (1000, 800, 80, MM:SS)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Time (1000, 700, 2:30, SSS.sss)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Time (1000, 600, 2:30, SS.sss)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0073.jpg" width="133" height="139" border="0" alt="clip0073"></p>
<p style="margin: 0px 0px 0px 24px;"><span class="f_ImageCaption">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p><span style="font-size: 12pt; font-family: 'Times New Roman';">&nbsp;</span></p>
<p><span style="font-size: 12pt; font-family: 'Times New Roman';">Cette instruction permet d'afficher un temps, en utilisant la fonte et la couleur de texte actuellement sélectionnées.</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Temps (x, y, valeur[, format])</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="83" style="width: 83px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Paramètres</span></p>
</td>
<td width="522" style="width: 522px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="83" style="width: 83px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>
<p style="text-align: center;"><span class="f_Variables">x, y</span></p>
</td>
<td width="522" style="width: 522px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Coordonnées du texte. La position du point de départ par rapport au texte dépend du mode d'alignement courant (voir <a href="alignetexte.php">AligneTexte</a>)</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="83" style="width: 83px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>
<p style="text-align: center;"><span class="f_Variables">valeur</span></p>
</td>
<td width="522" style="width: 522px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Temps à afficher. Il peut être un simple <a href="nombres.php">nombre</a> (temps en secondes), un nombre au format date, ou une expression de temps en secondes.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="83" style="width: 83px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"> </span><span class="f_Variables">format</span></p>
</td>
<td width="522" style="width: 522px; border: solid 1px #c0c0c0;"><p> Format d'affichage. Différents formats sont possibles :</p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">SS</span> Affichage <span style="font-weight: bold;">des</span> secondes </td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">SSS</span> Affichage <span style="font-weight: bold;">en </span>secondes</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">SS.sss</span> Affichage <span style="font-weight: bold;">des</span> secondes et millièmes de secondes</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">SSS.sss</span> Affichage <span style="font-weight: bold;">en</span> secondes et millièmes de&nbsp; secondes</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">MM.mmm</span> Affichage <span style="font-weight: bold;">des</span> minutes et millièmes de minutes</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">MMM.mmm</span> Affichage en minutes et millièmes de minutes</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">MM:SS</span> Affichage <span style="font-weight: bold;">des</span> minutes et <span style="font-weight: bold;">des</span> secondes</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">MMM:SS</span> Affichage <span style="font-weight: bold;">en</span> minutes et <span style="font-weight: bold;">en</span> secondes</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">MM:SS.sss</span> Affichage <span style="font-weight: bold;">des</span> minutes, secondes et millièmes de secondes</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">MMM:SS.sss</span> Affichage <span style="font-weight: bold;">en</span> minutes, secondes et millièmes de secondes</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">HH.hhh</span> Affichage <span style="font-weight: bold;">des</span> heures et millièmes d'heures</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">HH:MM</span> Affichage <span style="font-weight: bold;">en</span> heures et millièmes d'heures </td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">HH:MM.mmm</span> Affichage des heures, des minutes et millièmes de minutes</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">HH:MM:SS</span> Affichage des heures, des minutes et secondes </td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Variables">HH:MM:SS.sss</span> Affichage des heures, des minutes, des secondes et des millièmes de secondes</p>
</td></tr></table></div></td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="248" style="width: 248px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarque</span><span style="text-decoration: underline;">:</span> </p>
<p style="margin: 0px 0px 0px 13px;">Le format par défaut est <span class="f_Variables">HH:MM:SS</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Temps (1000, 900, (12:45:15)/30, HH:MM:SS.s)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Temps (1000, 800, 80, MM:SS)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Temps (1000, 700, 2:30, SSS.sss)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Temps (1000, 600, 2:30, SS.sss)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0073.jpg" width="133" height="139" border="0" alt="clip0073"></p>

</td></tr></table>
</div>

</body>
</html>
