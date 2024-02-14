<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["SplitShapeHorizontally","CouperFormeHorizontalement"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?couperformehorizontalement.php"; }
else { parent.quicksync('a2.5.5.2'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>CouperFormeHorizontalement</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="CouperFormeHorizontalement" />
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
     <a href="copierforme.php">Previous</a>&nbsp;
     <a href="couperformeverticalement.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Using an existing shape as a source, this instruction creates two new shapes, by drawing a horizontal line on the original shape, and creating the 2 resulting shapes from the top and the bottom of that line. The position of the horizontal line is relative to the bottom of the original shape.</p>
<p class="p_Interligne"><span class="f_Interligne" style="text-decoration: underline;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">SplitShapeHorizontally (sourceIndex, bottomIndex, topIndex, position)</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example :</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Create a trapezium at index 20</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CreateShape (20, trapeziumShape, Left, 1000, 1000, 200)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Split it horizontally at 300 mm from bottom ; </span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># store the bottom shape at index 30 and the top shape at index 40</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">SplitShapeHorizontally (20, 30, 40, 300)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># You now have a rectangle at index 30, a new trapezium at index 40</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># while the original trapezium remains untouched</span></p>
<p><span style="font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>
<p><span style="font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette formule crée, à partir de la forme source, une forme bas et une forme haut, qui représentent respectivement les parties bas et haut de la forme source, coupée par une droite horizontale écartée du point inférieur gauche de la valeur indiquée par le paramètre position.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">CouperFormeHorizontalement (sourceIndex, basIndex, hautIndex, position)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple :</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Créer un trapèze</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CreerForme (20, trapeze, gauche, 1000, 1000, 200)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Le couper en 2 horizontalement à 300 mm en partant du bas ;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># stocker la partie basse à l'index 30 et la partie haute à l'index 40</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CouperFormeHorizontalement (20, 30, 40, 300)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># on a maintenant un rectangle à l'index 30, et un trapèze à l'index 40</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># le trapèze d'origine reste inchangé</span></p>
<p style="margin: 0px 0px 0px 13px;"><span style="font-size: 11pt; font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>
<p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
