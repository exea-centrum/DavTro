<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Fonte","Fonte"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?fonte.php"; }
else { parent.quicksync('a2.6.20'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Fonte</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Fonte" />
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
     <a href="fondtexte.php">Previous</a>&nbsp;
     <a href="image.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p style="background: #fffff2;"><span style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">&nbsp;</span></p>
<p>This instruction lets you vary the style, shape and size of characters, used along with text display functions (<a href="texte.php">Text</a>, <a href="nombre.php">Number</a>, <a href="temps.php">Time</a>, <a href="cote1cote2cote3cote4.php">Dimensions1, Dimensions2, Dimensions3</a>). </p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax</span><span style="color: #000000; text-decoration: underline;">:</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">font (font name, font size, styles)</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table cellspacing="0" cellpadding="0" border="1" style="border-color : #ffffff #696968 #696968 #ffffff; border-style: solid; border-width: 1px; border-spacing:0px;">
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-weight: bold; color: #000000;">Parameter</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 11px;"><span style="font-weight: bold; color: #000000;">Description</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">font name</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 11px;"><span style="color: #000000;">Font name. For example, Arial, or Times New Roman</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">font size</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 11px;"><span style="color: #000000;">Character size, in 1/72 inch (which is nearly one typographical point. Decimals are allowed.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: #0000ff;">styles</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 11px;"><span style="color: #000000;">Any combination of styles: </span><span style="font-family: 'Courier New'; color: #0000ff;">bold</span><span style="font-size: 11pt; font-family: 'Courier New'; color: #000000;">, </span><span style="font-family: 'Courier New'; color: #0000ff;">italic</span><span style="font-size: 11pt; font-family: 'Courier New'; color: #000000;">, </span><span style="font-family: 'Courier New'; color: #0000ff;">underline</span><span style="font-size: 11pt; font-family: 'Courier New'; color: #000000;">, </span><span style="font-family: 'Courier New'; color: #0000ff;">strikeout</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Font (Arial, 12)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Text (100, 100, Arial 12)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Font (Courier New, 18.5, Bold, Underline)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Text (100, 150, Courier New 18.5)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0059.jpg" width="299" height="112" border="0" alt="clip0059"></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 11px;"><span style="font-weight: bold; text-decoration: underline;">Note:</span></p>
<p style="margin: 0px 0px 0px 11px;">You should restrict yourself to <span style="font-weight: bold;">TrueType</span> or <span style="font-weight: bold;">PostScript</span> fonts, which can be rendered similarly on all kinds of graphic devices (display or printer).</p>
</td>
</tr>
</table>
</div>
<p style="margin: 14px 0px 0px 0px;">&nbsp;</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette instruction permet de faire varier le style, la forme, la taille des caractères employé par les instructions d'affichage de texte (<a href="texte.php">Texte</a>, <a href="nombre.php">Nombre</a>, <a href="temps.php">Temps</a>, <a href="cote1cote2cote3cote4.php">Cote1, Cote2, Cote3, Cote4</a>).</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Fonte (nom_fonte, taille_fonte, styles)</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Paramètres</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"> </span><span class="f_Variables">nom_fonte</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Contient le nom du jeu de caractères. Par exemple, Arial, ou Times New Roman</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">taille_fonte</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Indique la taille des caractères. Il s'agit de la taille horizontal, exprimée 1/72 de pouce (soit approximativement la taille d'un point typographique). La taille peut être données avec des valeurs décimales</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: #0000ff;">styles</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Différents styles peuvent être combinés, dans un ordre quelconque: <span class="f_Variables" style="font-weight: bold;">Gras</span>, <span class="f_Variables" style="font-weight: bold;">Italique</span>, <span class="f_Variables" style="font-weight: bold;">Souligne</span>, <span class="f_Variables" style="font-weight: bold;">Barre</span></p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Fonte (Arial, 12)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Texte (100, 100, Arial 12)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Fonte (Courier New, 18.5, Gras, Souligne)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Texte (100, 150, Courier New 18.5)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0059.jpg" width="299" height="112" border="0" alt="clip0059"></p>
<p><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarque:</span></p>
<p style="margin: 0px 0px 0px 13px;">Il est préférable de s'en tenir aux fontes <span style="font-weight: bold;">TrueType</span>, ou <span style="font-weight: bold;">PostScript</span> si vous disposez de cette option sur votre machine, car ces fontes ont l'avantage de pouvoir être rendues de façon similaire sur tous les types de périphériques (écran ou imprimante).</p>
</td>
</tr>
</table>
</div>
<p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
