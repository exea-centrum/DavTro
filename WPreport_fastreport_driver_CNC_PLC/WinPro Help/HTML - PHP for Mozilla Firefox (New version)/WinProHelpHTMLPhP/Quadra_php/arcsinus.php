<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Arc Sine","Arc Sinus","Sinus Hoek"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?arcsinus.php"; }
else { parent.quicksync('a2.4.4.2'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>Arc Sinus</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="Arc Sinus" />
<meta http-equiv="Content-Type" content="text/php; charset=ISO-8859-1" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link type="text/css" href="default.css" rel="stylesheet" />
</head>
<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;" onload="AddTitleAndLangFlags();highlight();">
<div id="hmpopupDiv" style="visibility:hidden; position:absolute; z-index:1000;"></div>


<table width="100%" border="0" cellspacing="0" cellpadding="5" bgcolor="#FF8000">
  <tr valign="middle">
    <td align="left">
      <p class="p_Heading1"><span class="f_Heading1" style="font-size: 6pt; font-weight: normal;">&nbsp;</span></p>
      <p class="p_Heading1"><span id="titlepage" class="f_Heading1"></span></p>
    </td>
	<td align="center">
     <div id="langflags"></div>
    </td>
    <td align="right">
     <span style="font-size: 9pt">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="arccosinus.php">Previous</a>&nbsp;
     <a href="arctangente.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p><span style="color: #000000;">&nbsp;</span></p>
<p>This function computes the angle corresponding to the sine value set as parameter.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Arc Sine (value)</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">angle := arc sine (-1) </span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># angle is now -90</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="357" style="width: 357px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Note:</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>The result is always between -90&#176; and 90&#176; inclusively.  </td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>Parameter must be between -1 et 1 inclusively.</p>
</td></tr></table></div></td>
</tr>
</table>
</div>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette fonction permet de calculer l'angle en degrés correspondant au sinus donné en paramètre</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Arc Sinus (valeur)</span></p>
<p style="margin: 0px 0px 0px 24px;"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">angle := Arc Sinus (-1)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># angle vaut maintenant -90</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarques:</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>Le résultat est toujours compris entre -90 et 90°</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>L'argument doit toujours être compris entre -1 et 1 inclus.</p>
</td></tr></table></div></td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 2pt;">&nbsp;</span></p>
<p>&nbsp;</p>

</td></tr></table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p><span style="color: #000000;">&nbsp;</span></p>
<p>Deze functie berekend de hoek corresponderende aan de sinus waarde , bepaald als parameter.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Arc Sine (parameter)</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Voorbeeld:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">hoek := arc sine (-1) </span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># hoek is nu -90</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="357" style="width: 357px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Opmerking:</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>Het resultaat is altijd tussen -90&#176 and 90&#176; inclusief.  </td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>Parameter dient zich tussen -1 en 1 inclusief te bevinden.</p>
</td></tr></table></div></td>
</tr>
</table>
</div>

</td></tr></table>
</div>
</body>
</html>
