<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Arrow","Fleche"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?fleche.php"; }
else { parent.quicksync('a2.6.16'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Fleche</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Fleche" />
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
     <a href="epaisseurtrait.php">Previous</a>&nbsp;
     <a href="notion_de_chemin.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p><span style="color: #000000;">&nbsp;</span></p>
<p class="p_Interligne"><span style="color: #000000;">Draws a line ended by an arrow at one or both ends.</span></p>
<p>The line will be traced with the settings from the current pen, modified by functions <a href="couleurtrait.php">PenColour</a>, <a href="epaisseurtrait.php">PenWidth</a>, <a href="styletrait.php">PenStyle</a>. The default values are colour black, 1 pixel of width, solid line.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="color: #000000; text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">Arrow (x0, y0, x1, y1[, start][, end])</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-size: 10pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 1px;"><table align="center" cellspacing="0" cellpadding="0" border="1" style="border-color : #ffffff #696968 #696968 #ffffff; border-style: solid; border-width: 1px; border-spacing:0px;">
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-weight: bold; color: #000000;">Parameter</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p><span style="font-weight: bold; color: #000000;">Description</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">x0, y0</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p><span style="color: #000000;">start point</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">x1, y1</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p><span style="color: #000000;">end point</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">start</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p><span style="color: #000000;">Optional parameter; the start is arrowed when set</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">end</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p><span style="color: #000000;">Optional parameter; the end is arrowed when set</span></p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Arrow</span><span class="f_Variables"> (100, 100, 150, 150, debut, fin)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Arrow</span><span class="f_Variables"> (100, 100, 150, 100, debut)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Arrow</span><span class="f_Variables"> (100, 100, 100, 150, fin)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0057.jpg" width="216" height="203" border="0" alt="clip0057"></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Traçage d'une ligne terminée par une pointe de flèche à une extrémité ou aux deux extrémités.</p>
<p>Le trait sera tracé avec les caractéristique de trait courantes, que l'on peut modifier à l'aide des fonctions <a href="couleurtrait.php">CouleurTrait</a>, <a href="epaisseurtrait.php">EpaisseurTrait</a>, <a href="styletrait.php">StyleTrait</a>. Le trait par défaut est noir, 1 pixel d'épaisseur, continu.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Fleche (x0, y0, x1, y1[, début][, fin])</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Paramètre</span></p>
</td>
<td width="486" style="width: 486px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">x0, y0</span></p>
</td>
<td width="486" style="width: 486px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Coordonnées du point de départ</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">x1, y1</span></p>
</td>
<td width="486" style="width: 486px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Coordonnées du point d'arrivée</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">début</span></p>
</td>
<td width="486" style="width: 486px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Si ce paramètre est donné, une pointe de flèche sera tracée au point de départ</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">fin</span></p>
</td>
<td width="486" style="width: 486px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Si ce paramètre est donné, une pointe de flèche sera tracée au point d'arrivée</p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Fleche (100, 100, 150, 150, debut, fin)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Fleche (100, 100, 150, 100, debut)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Fleche (100, 100, 100, 150, fin)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0057.jpg" width="216" height="203" border="0" alt="clip0057"></p>

</td></tr></table>
</div>

</body>
</html>
