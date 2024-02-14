<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["BowCutGuessNbTrapeziums","DecArcEstimer","BowCutGuessNbTrapeziums"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?decarcestimer.php"; }
else { parent.quicksync('a2.4.5.2.3.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>DecArcEstimer</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="DecArcEstimer" />
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
     <a href="quantifier_le_decoupage.php">Previous</a>&nbsp;
     <a href="decarcdecider.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>This optional function returns:</p>
<p> &nbsp; &nbsp; &nbsp; &nbsp;The optimal quantity of trapezius that should be produced to reaize the box or the circle arc.</p>
<p> &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Variables">-10</span> in case of initialization problem.</p>
<p> &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Variables">-5</span> in case of a pre-computation trouble (missing or incorrect values). &nbsp; &nbsp; &nbsp; &nbsp;</p>
<p> &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Variables">-1</span> when settings submitted during initialization do not allow the program to find a solution (no sufficient StdSection values, impossible to find a segment combination suiting the specified limits, ...) </p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">a := BowCutGuessNbTrapeziums ()</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette fonction facultative renvoie:</p>
<p> &nbsp; &nbsp; &nbsp; &nbsp;La quantit&#233; id&#233;ale de trap&#232;zes qu'il est n&#233;cessaire de produire pour r&#233;aliser le cintre, ou l'anse.</p>
<p> &nbsp; &nbsp; &nbsp; &nbsp;La valeur <span class="f_Variables">-10</span> s'il y a un probl&#232;me au niveau de l'initialisation.</p>
<p> &nbsp; &nbsp; &nbsp; &nbsp;La valeur <span class="f_Variables">-5</span> s'il y a un probl&#232;me au niveau du pr&#233;calcul (du a des valeurs absurdes ou absentes). &nbsp; &nbsp; &nbsp; &nbsp;</p>
<p> &nbsp; &nbsp; &nbsp; &nbsp;La valeur <span class="f_Variables">-1</span> si les contraintes impos&#233;es dans l'initialisation emp&#234;che Winpro de trouver une solution (aucune SectionStd suffisamment importante, impossible de trouver une combinaison de segments suffisament grands pour la limite sp&#233;cifi&#233;es, ...) </p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">a := DecArcEstimer ()</span></p>

</td></tr></table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Deze optionele functie geeft :</p>
<p> &nbsp; &nbsp; &nbsp; &nbsp;De optimale hoeveelheid van trapeziums welke gebruikt zouden moeten worden om de boog te maken.</p>
<p> &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Variables">-10</span> in geval van een probleem van initialisatie.</p>
<p> &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Variables">-5</span> in geval van een fout in de pre-berekening (vergeten of incorrecte waardes). &nbsp; &nbsp; &nbsp; &nbsp;</p>
<p> &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Variables">-1</span> wanneer de toegepaste instellingen tijdens de initialisatie het programma niet toestaan een oplossing te vinden (niet voldoende StdSection waardes, onmogelijk om een segment combinatie te volgen de gespecifieerde limiet, ...) </p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">a := BowCutGuessNbTrapeziums ()</span></p>

</td></tr></table>
</div>
</body>
</html>
