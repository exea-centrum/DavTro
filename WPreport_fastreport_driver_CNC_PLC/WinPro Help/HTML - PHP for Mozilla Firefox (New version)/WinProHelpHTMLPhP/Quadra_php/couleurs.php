<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Colours","Couleurs"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?couleurs.php"; }
else { parent.quicksync(''); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Couleurs</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="" />
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
     
     
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>You may define a specific colour using 2 different ways: either with mentioning the name of a predefined colour (left column of below table), or with using values for the level of red, green and blue colour (into this order), considering that each level may vary from 0 to 255, 0 representing the minimum level of colour, 255 the lightest level. </p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#ffffff" border="0" style="background-color: #ffffff; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-weight: bold;">Colour name</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-weight: bold;">Red</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-weight: bold;">Green</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-weight: bold;">Blue</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold;">Black</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #800000;">Red</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">128</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #000080;">Blue</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">128</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #800080;">Magenta</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">128</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">128</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #808080;">Gray</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">128</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">128</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">128</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #00ff00;">LightGreen</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">255</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #00ffff;">LightCyan</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">255</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">255</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #ffff00;">LightYellow</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">255</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">255</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt;">White</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">255</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">255</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">255</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #008000;">Green</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0 </p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">128</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #008080;">Cyan</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">128</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">128</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #808000;">Yellow</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">128</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">128</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #ff0000;">LightRed</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">255</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #0000ff;">LightBlue</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">255</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #ff00ff;">Ligphpagenta</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">255 </p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">255</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #c0c0c0;">LightGray</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">192</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">192</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">192</p>
</td>
</tr>
</table>
</div>
<p style="text-align: center;">&nbsp;</p>
<p>&nbsp;</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>Vous pouvez spécifier une couleur de deux manières différentes: soit en donnant le nom d'une couleur prédéfinie (comme dans la colonne gauche du tableau ci-dessous), soit en indiquant les différents niveaux de rouge, vert et bleu (dans cet ordre), sachant que chaque niveau de couleur peut varier de 0 à 255, 0 représentant le niveau de couleur minimum, 255 le niveau le plus clair. </p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#ffffff" border="0" style="background-color: #ffffff; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-weight: bold;">Nom de la couleur</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-weight: bold;">Rouge</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-weight: bold;">Vert</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-weight: bold;">Bleu</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold;">Noir</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #800000;">Rouge</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">128</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #000080;">Bleu</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">128</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #800080;">Magenta</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">128</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">128</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #808080;">Gris</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">128</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">128</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">128</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #00ff00;">VertClair</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">255</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #00ffff;">CyanClair</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">255</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">255</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #ffff00;">JauneClair</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">255</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">255</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt;">Blanc</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">255</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">255</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">255</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #008000;">Vert</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0 </p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">128</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #008080;">Cyan</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">128</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">128</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #808000;">Jaune</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">128</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">128</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #ff0000;">RougeClair</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">255</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #0000ff;">BleuClair</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">255</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #ff00ff;">MagentaClair</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">255 </p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">0</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">255</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" style="width: 151px; border: solid 1px #000000;"><p style="text-align: center;"><span style="font-size: 16pt; font-weight: bold; color: #c0c0c0;">GrisClair</span></p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">192</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">192</p>
</td>
<td width="57" style="width: 57px; border: solid 1px #000000;"><p style="text-align: center;">192</p>
</td>
</tr>
</table>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
