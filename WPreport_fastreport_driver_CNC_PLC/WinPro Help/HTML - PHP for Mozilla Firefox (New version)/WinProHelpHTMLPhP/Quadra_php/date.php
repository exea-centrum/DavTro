<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Date","Date","Datum"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?date.php"; }
else { parent.quicksync('a2.4.2.3'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>Date</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="Date" />
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
     <a href="bissextile.php">Previous</a>&nbsp;
     <a href="jour.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p><span style="color: #000000;">&nbsp;</span></p>
<p class="p_Interligne"><span style="color: #000000;">Returns the date corresponding to the given day, month, year.</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Date (day, month, year)</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">j := Date (1, 1, 2000)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># j holds now the first of January, 2000</span><span class="f_Variables"> </span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="530" style="width: 530px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 12px;"><span style="font-weight: bold; text-decoration: underline;">Note:</span></p>
<p style="margin: 0px 0px 0px 12px;">All settings must be valid: year must be an integer greater than 0, month must be an integer between 1 and 12 inclusively; day must be an integer between 1 and the number of days in the given month. If any parameter is wrong, the function returns 0.</p>
</td>
</tr>
</table>
</div>
<p style="background: #fffff2;"><span style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Renvoie la date créée à partir du jour, du mois et de l'année indiqués.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Date (jour, mois, année)</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">j := Date (1, 1, 2000)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># j représente maintenant le 1er Janvier 2000</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarque:</span></p>
<p style="margin: 0px 0px 0px 13px;">Tous les paramètres doivent être valides: l'année doit être &gt; 0; le mois doit être entre 1 et 12; le jour doit être entre 1 et le nombre de jours effectif du mois donné. Si un mauvais paramètre est fourni, la fonction renvoie 0.</p>
</td>
</tr>
</table>
</div>
<p>&nbsp;</p>

</td></tr></table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p><span style="color: #000000;">&nbsp;</span></p>
<p class="p_Interligne"><span style="color: #000000;">Geeft de datum weer corrsponderend met de gegeven dag,maand,jaar.</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Date (day, month, year)</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Voorbeeld:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">j := Date (1, 1, 2000)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># j geeft 01 januari van het jaar 2000 weer</span><span class="f_Variables"> </span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="530" style="width: 530px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 12px;"><span style="font-weight: bold; text-decoration: underline;">Note:</span></p>
<p style="margin: 0px 0px 0px 12px;">Alle instellingen dienen correct te zijn: jaar dient een integer getal te zijn groter dan 0, de maand dient een integer getal te zijn tussen 1 en 12 (incl.); en de dag dient een integer getal te zijn tussen 1 en het antal dagen in de gegeven maand. Wanneer één van de parameters verkeerd is,zal de functie 0 als resultaat geven.</p>
</td>
</tr>
</table>
</div>
<p style="background: #fffff2;"><span style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">&nbsp;</span></p>

</td></tr></table>
</div>
</body>
</html>
