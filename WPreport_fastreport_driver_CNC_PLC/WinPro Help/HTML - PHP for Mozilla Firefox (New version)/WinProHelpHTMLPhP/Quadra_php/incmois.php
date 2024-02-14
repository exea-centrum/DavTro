<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["IncMonth","IncMois","IncMaand"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?incmois.php"; }
else { parent.quicksync('a2.4.2.7'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>IncMois</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="IncMois" />
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
     <a href="incjour.php">Previous</a>&nbsp;
     <a href="mois.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Returns the given date, increased by the given number of months. Date's year is increased if necessary, and the date's day is adjusted if it is not a valid date in the final result. The given number of months may be negative.  </p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">IncMonth (date, nMonths)</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Examples:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">nextMonth := IncMonth (_Today, 1)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;"># nextMonth is now exactly one month more than the date of computation</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">lastMonth := IncMonth (_Today, -1)</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;"># lastMonth is now exactly one month less than the date of computation</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="263" style="width: 263px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Note:</span></p>
<p style="margin: 0px 0px 0px 13px;">The date setting must be greater then 0.</p>
</td>
</tr>
</table>
</div>
<p style="background: #fffff2;"><span style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">&nbsp;</span></p>
</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Renvoie la date indiquée, augmentée du nombre de mois spécifié. Le programme incrémente l'année si nécessaire, ainsi que le jour du mois si le jour d'origine est supérieur au nombre de jours dans le mois calculé. Le nombre de mois peut être négatif.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">IncMois (date, nMois)</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemples:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">moisProchain := IncMois (_Aujourdhui, 1)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># moisProchain représente maintenant une date 1 mois exactement après la date de calcul.</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">moispasse := IncMois (_Aujourdhui, -1)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># moisPasse représente maintenant une date 1 mois exactement avant la date de calcul.</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="270" style="width: 270px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarque:</span></p>
<p style="margin: 0px 0px 0px 13px;">Le paramètre date doit être supérieur à 0.</p>
</td>
</tr>
</table>
</div>
<p style="background: #fffff2;"><span style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">&nbsp;</span></p>
</td></tr></table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Geeft de ingegeven datum weer,verhoogd met het aanal opgegeven maanden.Het jaar van de datum wordt indien nodig verhoogd,en de dag van de datum wordt aangepast indien deze groter zou zijn dan het aantal dagen in de opgegeven maand.Het aantal opgegeven maanden kan negatief zijn.  </p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">IncMonth (date, nMonths)</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Voorbeeld:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">volgendeMaand := IncMonth (_Today, 1)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;"># De variabele volgendeMaand is nu precies 1 maand meer als de datum van berekening</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">vorigeMaand := IncMonth (_Today, -1)</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;"># De variabele vorigeMaand is nu precies 1 maand minder als de datum van berekening</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="263" style="width: 263px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Opmerking:</span></p>
<p style="margin: 0px 0px 0px 13px;">De instelling van de datum dient groter te zijn dan 0.</p>
</td>
</tr>
</table>
</div>
<p style="background: #fffff2;"><span style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">&nbsp;</span></p>
</td></tr></table>
</div>
</body>
</html>
