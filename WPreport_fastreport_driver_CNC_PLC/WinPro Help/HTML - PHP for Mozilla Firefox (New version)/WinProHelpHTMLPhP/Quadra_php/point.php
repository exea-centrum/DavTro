<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Pixel","Point"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?point.php"; }
else { parent.quicksync('a2.6.26'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Point</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Point,Pixel" />
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
     <a href="orientationtexte.php">Previous</a>&nbsp;
     <a href="polygone.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p style="background: #fffff2;"><span style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">&nbsp;</span></p>
<p><span style="color: #000000;">Draws a single pixel. On some devices, this may be very tiny! For instance, onto a laser 300 dpi printer, a pixel would be a square of 1/300 inch by side.</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Pixel (x, y, colour)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Pixel (x, y, </span><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;"><a href="colours2.php">level_of_red, level_of_green, level_of_blue</a></span><span class="f_Variables" style="font-weight: bold;">)</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 1px;"><table align="center" cellspacing="0" cellpadding="0" border="1" style="border-color : #ffffff #696968 #696968 #ffffff; border-style: solid; border-width: 1px; border-spacing:0px;">
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-weight: bold; color: #000000;">Parameter</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-indent: 2px; margin: 0px 0px 0px 7px;"><span style="font-weight: bold; color: #000000;">Description</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">x, y</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-indent: 2px; margin: 0px 0px 0px 7px;"><span style="color: #000000;">Pixel coordinates</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">colour</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-indent: 2px; margin: 0px 0px 0px 7px;"><span style="color: #000000;">Pixel colour</span></p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brush (Colour, 200,200,255)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Bar (0,0, width, height)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">i := 0</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Repeat while i &lt;= 255</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">   Pixel (i, i, Blue)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">   Pixel (i, Sine(i*256/180)*128 + 128, i, 255-i, 128-i/2)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">   i += 1</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">End Repeat</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0065.jpg" width="236" height="239" border="0" alt="clip0065"></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Traçage d'un seul point. La taille physique de ce point dépendra du périphérique sur lequel il sera affiché. Par exemple, sur une laser 300 dpi, le point sera un carré de 1/300 de pouce de côté.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Point (x, y, </span><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;"><a href="couleurs.php">couleur</a></span><span class="f_Variables" style="font-weight: bold;">)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Point (x, y, </span><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;"><a href="couleurs.php">niveau_rouge, niveau_vert, niveau_bleu</a></span><span class="f_Variables" style="font-weight: bold;">)</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Paramètres</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">x, y</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Coordonnées du point (ou pixel)</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">couleur</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Couleur du point</p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brosse (Pleine, 200,200,255)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Barre (0,0, largeur, hauteur)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">i := 0</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Repeter Tant Que i &lt;= 255</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">   Point (i, i, Bleu)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">   Point (i, Sinus(i*256/180)*128 + 128, i, 255-i, 128-i/2)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">   i += 1</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Fin Repeter</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0065.jpg" width="236" height="239" border="0" alt="clip0065"></p>

</td></tr></table>
</div>

</body>
</html>
