<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["DecArcSetLargeursStand","DecArcSetLargeursStand","DecArcSetLargeursStand"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?decarcsetlargeursstand.php"; }
else { parent.quicksync('a2.4.5.2.1.3'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>DecArcSetLargeursStand</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="DecArcSetLargeursStand" />
<meta http-equiv="Content-Type" content="text/php; charset=ISO-8859-1" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link type="text/css" href="default.css" rel="stylesheet" />
</head>
<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;" onload="AddTitleAndLangFlags();highlight();">
<div id="hmpopupDiv" style="visibility:hidden; position:absolute; z-index:1000;"></div>


<table width="100%" border="0" cellspacing="0" cellpadding="5" bgcolor="#FF8000">
  <tr valign="middle">
    <td align="left">
      <p class="p_Heading1"><span id="titlepage" class="f_Heading1"></span></p>
    </td>
	<td align="center">
     <div id="langflags"></div>
    </td>
    <td align="right">
     <span style="font-size: 9pt">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="decarcsurcotes.php">Previous</a>&nbsp;
     <a href="decarcinitlongmin.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p></p>
<p>This optional function allows to define the various sections that WinPro should use for the computed trapezius.</p>
<p>Up to 10 distinct sections may be predefined, into ascending order. In case you don't need 10 values, each remaining field should be set to <span class="f_Variables">0</span> for WinPro to compute properly.</p>
<p>In case every values are set to <span class="f_Variables">0</span>, Winpro will compute the section for each trapezium automatically.</p>
<p>This function always returns <span class="f_Variables">1</span>.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">a := BowCutSetUsualWidths (Section1, Section2, Section3, Section4, Section5, Section6, Section7, Section8, Section9, Section10)</span></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 13px;"><img src="img/clip0166.gif" width="348" height="136" border="0" alt="Clip0166"></p>
<p style="margin: 0px 0px 0px 13px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Note:</span><br>
You should know anyway that whatever the computation method is, the generated trapezius will always have an equal section.</p>
</td>
</tr>
</table>
</div>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p></p>
<p>Cette fonction facultative permet de d&#233;finir les diff&#233;rentes sections que Winpro devra utiliser pour les trap&#232;zes calcul&#233;s.</p>
<p>Jusqu'&#224; 10 sections peuvent &#234;tre ainsi pr&#233;d&#233;finies, par ordre croissant. Si vous en d&#233;finissez moins de 10, les x derni&#232;res valeurs doivent imp&#233;rativement &#234;tre renseign&#233;es &#224; <span class="f_Variables">0</span>.</p>
<p>Si toutes les valeurs sont &#224; <span class="f_Variables">0</span>, Winpro calculera la section de chaque trap&#232;ze automatiquement.</p>
<p>Cette fonction renvoie toujours <span class="f_Variables">1</span>.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">a := DecArcSetLargeursStand (Section1, Section2, Section3, Section4, Section5, Section6, Section7, Section8, Section9, Section10)</span></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 13px;"><img src="img/clip0166.gif" width="348" height="136" border="0" alt="Clip0166"><span class="f_Variables" style="font-weight: bold;"></span></p>
<p style="margin: 0px 0px 0px 13px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarque:</span><br>
Sachez cependant que quelque soit la méthode de calcul, les trapèzes générés auront toujours une section équivalente.</p>
</td>
</tr>
</table>
</div>

</td></tr></table>
</div>

<div class="NED">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p></p>
<p>Met deze optionele functie kunt het definiëren van de verschillende secties die WinPro moet gebruiken voor de berekende trapezius.</p>
<p>Tot 10 verschillende delen kunnen vooraf ingesteld worden, in oplopende volgorde. In het geval dat u de 10 waarden niet nodig hebt , moet elke resterende veld worden ingesteld op <span class="f_Variables">0</span> opdat Winpro correct kan rekenen.</p>
<p>In geval dat alle waardes op <span class="f_Variables">0</span> staan, zal Winpro automatisch de sectie van elke trapezium berekenen .</p>
<p>Deze functie geeft altijd de waarde <span class="f_Variables">1</span>.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">a := BowCutSetUsualWidths (Section1, Section2, Section3, Section4, Section5, Section6, Section7, Section8, Section9, Section10)</span></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 13px;"><img src="img/clip0166.gif" width="348" height="136" border="0" alt="Clip0166"></p>
<p style="margin: 0px 0px 0px 13px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Opmerking:</span><br>
U dient te weten dat welke berekeningsmanier u ook gebruikt, de gegenereerde trapeziums steeds een gelijke sectie zullen hebben.</p>
</td>
</tr>
</table>
</div>

</td></tr></table>
</div>

</body>
</html>
