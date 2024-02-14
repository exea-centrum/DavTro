<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Dimension1, Dimension2, Dimension3, Dimension4","Cote1, Cote2, Cote3, Cote4"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?cote1cote2cote3cote4.php"; }
else { parent.quicksync('a2.6.10'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Cote1, Cote2, Cote3, Cote4</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Cote1,Cote2,Cote3,Cote4" />
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
     <a href="chord.php">Previous</a>&nbsp;
     <a href="couleurtexte.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Draws dimension lines, using the current font and pen.</p>
<p>The dimension is computed as the distance between the start and end points.</p>
<p>The orientation of the dimension lines is free</p>
<p><span class="f_Variables">Dimension1</span> and <span class="f_Variables">Dimension2</span> draw a line with arrows inside the line. The digits of both styles are reversed; see examples.</p>
<p><span class="f_Variables">Dimension3</span> and D<span class="f_Variables">imension4</span> draw a line with arrows outside the line. The digits of both styles are reversed; see examples.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax</span>:</p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Dimension1 (x0, y0, x1, y1[, decimales])</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Dimension2 (x0, y0, x1, y1[, decimales])</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Dimension3 (x0, y0, x1, y1[, decimales])</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Dimension4 (x0, y0, x1, y1[, decimales])</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 1px;"><table align="center" cellspacing="0" cellpadding="0" border="1" style="border-color : #ffffff #696968 #696968 #ffffff; border-style: solid; border-width: 1px; border-spacing:0px;">
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-weight: bold; color: #000000;">Parameter</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 10px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">x0, y0</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 10px;">Coordinates of start point</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">x1, y1</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 10px;">Coordinates of end point</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">decimals</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 10px;">Number of decimals to display; if this parameter is omitted, no decimal will be displayed.</p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 24px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Examples:</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;"><table cellspacing="0" cellpadding="0" border="0" style="border: none border-spacing:0px;">
<tr valign="top" align="left">
<td width="434" style="width: 434px;"><p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Dimension1 (100, 100, 1100, 600)</span></p>
<p style="text-align: center; margin: 0px 0px 0px 48px;"><img src="img/clip0048.jpg" width="300" height="210" border="0" alt="clip0048"></p>
</td>
<td width="434" style="width: 434px;"><p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Dimension3 (100, 100, 1100, 600)</span></p>
<p style="text-align: center; margin: 0px 0px 0px 48px;"><img src="img/clip0050.jpg" width="306" height="213" border="0" alt="clip0050"></p>
<p style="margin: 0px 0px 0px 48px;">&nbsp;</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="434" style="width: 434px;"><p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Dimension2 (100, 100, 1100, 600)</span></p>
<p style="text-align: center; margin: 0px 0px 0px 48px;"><img src="img/clip0049.jpg" width="304" height="211" border="0" alt="clip0049"></p>
<p style="margin: 0px 0px 0px 48px;">&nbsp;</p>
</td>
<td width="434" style="width: 434px;"><p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Dimension4 (100, 100, 1100, 600)</span></p>
<p style="text-align: center; margin: 0px 0px 0px 48px;"><img src="img/clip0051.jpg" width="315" height="205" border="0" alt="clip0051"></p>
</td>
</tr>
</table>
</div>
<p style="margin: 14px 0px 0px 0px;"><span class="f_Variables">&nbsp;</span></p>

</td></tr></table></div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Dessin de lignes de cote. La fonte utilisée, ainsi que la couleur et l'épaisseur du trait, dépendent respectivement de la fonte active et du type de trait sélectionné.</p>
<p>La mesure de la cote est calculée d'après la valeur des coordonnées d'origine. L'orientation des cotes peut être quelconque.</p>
<p><span class="f_Variables">Cote1</span> et <span class="f_Variables">Cote2</span> tracent une ligne de cote dont les pointes de flèche sont à l'intérieur de la cotation; la base des chiffres de <span class="f_Variables">Cote1</span> est tournée vers la ligne de cote; le haut des chiffres de <span class="f_Variables">Cote2</span> est tournée vers la ligne de cote.</p>
<p><span class="f_Variables">Cote3</span> et <span class="f_Variables">Cote4</span> tracent une ligne de cote dont les pointes de flèche sont à l'extérieur de la cotation; la base des chiffres de <span class="f_Variables">Cote3</span> est tournée vers la ligne de cote; le haut des chiffres de <span class="f_Variables">Cote4</span> est tournée vers la ligne de cote.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Cote1 (x0, y0, x1, y1[, decimales])</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Cote2 (x0, y0, x1, y1[, decimales])</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Cote3 (x0, y0, x1, y1[, decimales])</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Cote4 (x0, y0, x1, y1[, decimales])</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Paramètres</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">x0, y0</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Coordonnées du point de départ</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">x1, y1</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Coordonnées du point d'arrivée</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">decimals</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Nombres de décimales (pas de décimales si ce paramètre n'est pas indiqué)</p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemples:</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;"><table cellspacing="0" cellpadding="0" border="0" style="border: none border-spacing:0px;">
<tr valign="top" align="left">
<td width="434" style="width: 434px;"><p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Cote1 (100, 100, 1100, 600)</span></p>
<p style="text-align: center; margin: 0px 0px 0px 48px;"><img src="img/clip0048.jpg" width="300" height="210" border="0" alt="clip0048"></p>
</td>
<td width="434" style="width: 434px;"><p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Cote3 (100, 100, 1100, 600)</span></p>
<p style="text-align: center; margin: 0px 0px 0px 48px;"><img src="img/clip0050.jpg" width="306" height="213" border="0" alt="clip0050"></p>
<p style="margin: 0px 0px 0px 48px;">&nbsp;</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="434" style="width: 434px;"><p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Cote2 (100, 100, 1100, 600)</span></p>
<p style="text-align: center; margin: 0px 0px 0px 48px;"><img src="img/clip0049.jpg" width="304" height="211" border="0" alt="clip0049"></p>
<p style="margin: 0px 0px 0px 48px;">&nbsp;</p>
</td>
<td width="434" style="width: 434px;"><p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Cote4 (100, 100, 1100, 600)</span></p>
<p style="text-align: center; margin: 0px 0px 0px 48px;"><img src="img/clip0051.jpg" width="315" height="205" border="0" alt="clip0051"></p>
</td>
</tr>
</table>
</div>

</td></tr></table>
</div>

</body>
</html>
