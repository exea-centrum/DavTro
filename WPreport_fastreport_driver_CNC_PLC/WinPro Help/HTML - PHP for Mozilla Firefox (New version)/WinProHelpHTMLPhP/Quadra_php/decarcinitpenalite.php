<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["BowCutPenalty","DecArcInitPenalite","BowCutPenalty"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?decarcinitpenalite.php"; }
else { parent.quicksync('a2.4.5.2.1.5'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>DecArcInitPenalite</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="DecArcInitPenalite" />
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
     <a href="decarcinitlongmin.php">Previous</a>&nbsp;
     <a href="definition_des_arcs.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>This optional function may be used to influence the program about the number of trapezius to be computed. </p>
<p>In a first step, a value of 5000 is recommended, to be adapted according needs. </p>
<p>The greater the value is, the less trapezius will be generated.</p>
<p>This function always returns <span class="f_Variables">1</span>.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">a := BowCutPenalty (5000)</span></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables" style="font-weight: bold;">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette fonction facultative va influencer Winpro au niveau de la quantit&#233; de trap&#232;zes qu'il doit g&#233;n&#233;rer. </p>
<p>Dans un premier temps une valeur &#233;gale &#224; 5000 est conseill&#233;e, adaptez-la ensuite en fonction de vos besoins. </p>
<p>Au plus la valeur est grande, au moins il y aura de d&#233;coupe dans l'arc.</p>
<p>Cette fonction renvoie toujours <span class="f_Variables">1</span>.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">a := DecArcInitPenalite (5000)</span></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables" style="font-weight: bold;">&nbsp;</span></p>

</td></tr></table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Deze optionele functie kan gebruikt worden om het programma te beinvloeden voor de berekening van het aantal trapeziums. </p>
<p>In een eerste stap, wordt de waarde 5000 aangeraden,welke vervolgens aangepast kan worden in functie van het gebruik. </p>
<p>Hoe groter de waarde is, hoe minder trapeziums er gegenereert worden.</p>
<p>Deze functie geeft steeds de waarde <span class="f_Variables">1</span>.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">a := BowCutPenalty (5000)</span></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables" style="font-weight: bold;">&nbsp;</span></p>

</td></tr></table>
</div>
</body>
</html>
