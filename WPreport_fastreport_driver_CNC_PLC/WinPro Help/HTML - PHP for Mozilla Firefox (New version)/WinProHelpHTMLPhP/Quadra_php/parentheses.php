<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html><head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> <!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED","ESP"];
var WinProHelpPageName=["Parenthesis","Parenthèses","Haakjes","Paréntesis"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?parentheses.php"; }
else { parent.quicksync('a2.2.5'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script><title>Parenthèses</title>

<meta name="generator" content="Help &amp; Manual">
<meta name="keywords" content="Parenthèse,Priorité">
<meta http-equiv="Content-Type" content="text/php; charset=ISO-8859-1">
<meta http-equiv="Content-Style-Type" content="text/css">
<link type="text/css" href="default.css" rel="stylesheet">
</head>

<body style="margin: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;" onload="AddTitleAndLangFlags();highlight();">
<div id="hmpopupDiv" style="visibility: hidden; position: absolute; z-index: 1000;"></div>
<table bgcolor="#ff8000" border="0" cellpadding="5" cellspacing="0" width="100%">
<tbody>
<tr valign="middle">
<td align="left">
<p class="p_Heading1"><span class="f_Heading1" style="font-size: 6pt; font-weight: normal;">&nbsp;</span></p>
<p class="p_Heading1"><span id="titlepage" class="f_Heading1"></span></p>
</td>
<td align="center">
<div id="langflags"></div>
</td>
<td align="right"> <span style="font-size: 9pt;">
<a href="introduction.php">Top</a>&nbsp; <a href="operateurs_de_comparaison.php">Previous</a>&nbsp;
<a href="listes.php">Next</a> </span> </td>
</tr>
</tbody>
</table>
<div class="ENG">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%">
<tbody>
<tr valign="top">
<td align="left">
<p><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p>Parenthesis lets you control the order in which
computations inside a complex arithmetic formula is carried. The part
of the expression between parenthesis is computed first, as if it were
a separate formula.</p>
<p>&nbsp;</p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Examples:</span></p>
<p style="margin: 0px 0px 0px 48px;">&nbsp;</p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">1 + 2 * 2 </span>gives 5, because
multiplication has priority over addition. </p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">(1 + 2) * 2</span> gives 6 </p>
</td>
</tr>
</tbody>
</table>
</div>
<div class="FRA">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%">
<tbody>
<tr valign="top">
<td align="left">
<p>&nbsp;</p>
<p>Les parenthèses permettent de définir l'ordre de calcul
à l'intérieur de formules arithmétiques complexes. La partie de
l'expression entre parenthèses sera calculée en priorité, comme s'il
s'agissait d'une expression séparée.</p>
<p>&nbsp;</p>
<p style="margin: 0px 0px 0px 27px;"><span style="text-decoration: underline;">Exemples:</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt; color: rgb(0, 128, 0);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">1 + 2 * 2</span><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 128, 0);">
</span>donne 5, car la multiplication est prioritaire sur
l'addition.</p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">(1 + 2) * 2</span> donne 6</p>
<p><span style="font-size: 11pt;">&nbsp;</span></p>
</td>
</tr>
</tbody>
</table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%">
<tbody>
<tr valign="top">
<td align="left">
<p><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p>Haakjes staan u toe om een bepaaalde ingewikkelde
rekenkundige formule te controleren. Het deel van de formule tussen de
haakjes wordt eerst berekend, als een afzonderlijke formule.</p>
<p>&nbsp;</p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Voorbeelden:</span></p>
<p style="margin: 0px 0px 0px 48px;">&nbsp;</p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">1 + 2 * 2 </span>uitkomst is 5,
omdat de vermenigvuldiging voorrang heeft op de optelsom. </p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">(1 + 2) * 2</span> uitkomst is 6 </p>
</td>
</tr>
</tbody>
</table>
</div>
<div class="ESP">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%">
<tbody>
<tr valign="top">
<td align="left">
<p><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p><p><span style="color: rgb(0, 0, 0);">Los paréntisis le permíten
controlar el orden en el que los cálculos dentro de una fórmula
aritmética compleja son llevados. La parte de la expresión entre los
paréntesis es calclulada primero, como si fuera una formula separada.</span></p>
<p><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="color: rgb(0, 0, 0); text-decoration: underline;">Ejemplos:</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt; color: rgb(0, 128, 0);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">1 + 2 * 2</span><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 128, 0);"> =</span><span style="color: rgb(0, 0, 0);"> 5, porque la multiplicación tiene prioridad sobre la suma.</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">(1 + 2) * 2</span><span style="color: rgb(0, 0, 0);"> = 6</span></p><br></td>
</tr>
</tbody>
</table>
</div>
</body></html>