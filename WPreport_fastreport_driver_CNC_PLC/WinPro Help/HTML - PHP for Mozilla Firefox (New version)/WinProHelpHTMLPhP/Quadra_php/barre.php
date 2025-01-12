<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Bar","Barre"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?barre.php"; }
else { parent.quicksync('a2.6.4'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Barre</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Barre" />
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
     <a href="arc2.php">Previous</a>&nbsp;
     <a href="bezier.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p style="background: #fffff2;"><span style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">&nbsp;</span></p>
<p>Draws a rectangular area, filled with the current brush. No border is drawn. </p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax</span>:</p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Bar (left, bottom, width, height)</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" border="1" style="border-color : #ffffff #696968 #696968 #ffffff; border-style: solid; border-width: 1px; border-spacing:0px;">
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-weight: bold; color: #000000;">Parameters</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 9px;"><span style="font-weight: bold; color: #000000;">Description</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">left</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 9px;"><span style="color: #000000;">Horizontal position of the left side</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">bottom</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 9px;"><span style="color: #000000;">Vertical position of the bottom side</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">width</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 9px;"><span style="color: #000000;">Width of the rectangle</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">height</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 9px;"><span style="color: #000000;">Height of the rectangle</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brush (colour, red)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Bar (100, 300, 250, 100)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0042.jpg" width="285" height="155" border="0" alt="clip0042"></p>
<p style="margin: 0px 0px 0px 24px;"><span class="f_ImageCaption">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Traçage d'une surface rectangulaire, remplie au moyen de la brosse précédemment sélectionnée.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Barre (gauche, bas, largeur, hauteur)</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Paramètres</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">gauche</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Position horizontale du coin inférieur gauche</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">bas</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Position verticale du coin inférieur gauche</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">largeur</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Largeur du rectangle</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">hauteur</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Hauteur du rectangle</p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 13px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brosse (Pleine, Rouge)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Rectangle (100, 300, 250, 100)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0042.jpg" width="285" height="155" border="0" alt="clip0042"></p>

</td></tr></table>
</div>


</body>
</html>
