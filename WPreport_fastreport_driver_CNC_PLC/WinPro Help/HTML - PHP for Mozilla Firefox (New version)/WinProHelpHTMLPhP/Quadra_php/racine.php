<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Square Root","Racine","Vierkantwortel"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?racine.php"; }
else { parent.quicksync('a2.4.1.10'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>Racine</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="Racine Carr&#233;e" />
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
     <a href="polynome.php">Previous</a>&nbsp;
     <a href="valeur_absolue.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>This function computes the square root of a number.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Root (number)</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Examples:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">result := Root (16)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># result is now 4</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">result := Root (9)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># result vaut 3</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="358" style="width: 358px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 27px;"><span style="font-weight: bold; text-decoration: underline;">Note:</span><span style="font-weight: bold;"> </span></p>
<p style="margin: 0px 0px 0px 27px;">The setting must be a positive value</p>
</td>
</tr>
</table>
</div>
</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette fonction calcule la racine carrée d'un nombre.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Racine (valeur)</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemples:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">resultat := Racine (16)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># resultat vaut 4</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">resultat := Racine (9)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># resultat vaut 3</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="358" style="width: 358px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 27px;"><span style="font-weight: bold; text-decoration: underline;">Remarque:</span><span style="font-weight: bold;"> </span></p>
<p style="margin: 0px 0px 0px 27px;">Le paramètre doit impérativement être une valeur positive</p>
</td>
</tr>
</table>
</div>
</td></tr></table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Deze functie berekend de vierkantswortel van een getal.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Root (getal)</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Voorbeeld:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">result := Root (16)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># resultaat is 4</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">result := Root (9)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># resultaat is 3</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="358" style="width: 358px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 27px;"><span style="font-weight: bold; text-decoration: underline;">Note:</span><span style="font-weight: bold;"> </span></p>
<p style="margin: 0px 0px 0px 27px;">De instelling dient een positieve waarde te zijn</p>
</td>
</tr>
</table>
</div>
</td></tr></table>
</div>
</body>
</html>
