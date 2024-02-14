<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Arc2","Arc2"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?arc2.php"; }
else { parent.quicksync('a2.6.3'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Arc2</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Arc2" />
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
     <a href="arc.php">Previous</a>&nbsp;
     <a href="barre.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p style="background: #fffff2;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;">&nbsp;</span></p>
<p>Draws an arc of circle or ellipse with a thickness, using the current pen.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax</span>:</p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Arc2 (x0, y0, x1, y1, height, thickness, half)</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 1px;"><table align="center" cellspacing="0" cellpadding="0" border="1" style="border-color : #dadada #696968 #696968 #dadada; border-style: solid; border-width: 1px; border-spacing:0px;">
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-weight: bold; color: #000000;">Parameters</span></p>
</td>
<td width="416" bgcolor="#fff7ef" style="width: 416px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 10px;"><span style="font-weight: bold; color: #000000;">Description</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span class="f_Variables">x0, y0</span></p>
</td>
<td width="416" bgcolor="#fff7ef" style="width: 416px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 10px;"><span style="color: #000000;">Start point coordinates.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span class="f_Variables">x0, y0</span></p>
</td>
<td width="416" bgcolor="#fff7ef" style="width: 416px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 10px;"><span style="color: #000000;">End point coordinates.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">height</span></p>
</td>
<td width="416" bgcolor="#fff7ef" style="width: 416px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 10px;"><span style="color: #000000;">Height of the arc.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">thickness</span></p>
</td>
<td width="416" bgcolor="#fff7ef" style="width: 416px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 10px;"><span style="color: #000000;">Distance between the inside arc and the outside arc.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">half</span></p>
</td>
<td width="416" bgcolor="#fff7ef" style="width: 416px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 10px;"><span style="color: #000000;">May be worth </span><span class="f_Variables">0</span>, <span class="f_Variables">1</span> or<span class="f_Variables"> 2</span><span style="color: #000000;">.</span></p>
</td>
</tr>
</table>
</div>
<p style="text-align: center;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Examples:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Arc2 (200, 100, 700, 100, -250, 100, 0)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0267.jpg" width="274" height="167" border="0" alt="Clip0267"></p>
<p>&nbsp;</p>
<p><span class="f_Variables">&nbsp;</span></p>

</td></tr></table></div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p class="p_Interligne"><span style="color: #000000;">Trace un arc de cercle ou d'ellipse avec une épaisseur.</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Arc2 (x0, y0, x1, y1, hauteur, epaisseur, demi)</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Paramètres</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">x0, y0</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Coordonnées du point de départ</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">x1, y1</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Coordonnées du point d'arrivée</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">hauteur</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Hauteur de l'arc</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">epaisseur</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Distance entre l'arc extérieur et l'arc intérieur.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">demi</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 14px;">Peut prendre 3 valeurs :<span class="f_Variables"> 0</span>, <span class="f_Variables">1</span> ou<span class="f_Variables"> 2</span></p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemples:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Arc2 (200, 100, 700, 100, -250, 100, 0)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0267.jpg" width="274" height="167" border="0" alt="clip0267"></p>
<p>&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>
<p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
