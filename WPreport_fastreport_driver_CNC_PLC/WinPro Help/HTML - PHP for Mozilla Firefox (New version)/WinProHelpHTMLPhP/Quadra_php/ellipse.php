<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Ellipse","Ellipse"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?ellipse.php"; }
else { parent.quicksync('a2.6.14'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Ellipse</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Ellipse" />
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
     <a href="dessiner.php">Previous</a>&nbsp;
     <a href="epaisseurtrait.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Draws an ellipse, using the current brush and pen. Use this instruction to draw a circle, simply by using the same value for both radiuses.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Ellipse (xCenter, yCenter, horizontal radius, vertical radius)</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 1px;"><table align="center" cellspacing="0" cellpadding="0" border="1" style="border-color : #ffffff #696968 #696968 #ffffff; border-style: solid; border-width: 1px; border-spacing:0px;">
<tr valign="top" align="left">
<td width="189" bgcolor="#fff7ef" style="width: 189px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-weight: bold; color: #000000;">Parameter</span></p>
</td>
<td width="416" bgcolor="#fff7ef" style="width: 416px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p><span style="font-weight: bold; color: #000000;">Description</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="189" bgcolor="#fff7ef" style="width: 189px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">xCenter</span></p>
</td>
<td width="416" bgcolor="#fff7ef" style="width: 416px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p><span style="color: #000000;">Horizontal position of the center</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="189" bgcolor="#fff7ef" style="width: 189px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">yCenter</span></p>
</td>
<td width="416" bgcolor="#fff7ef" style="width: 416px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p><span style="color: #000000;">Vertical position of the center</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="189" bgcolor="#fff7ef" style="width: 189px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">horizontal radius</span></p>
</td>
<td width="416" bgcolor="#fff7ef" style="width: 416px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p><span style="color: #000000;">Horizontal radius</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="189" bgcolor="#fff7ef" style="width: 189px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">vertical radius</span></p>
</td>
<td width="416" bgcolor="#fff7ef" style="width: 416px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p><span style="color: #000000;">Vertical radius</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Examples:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brush (colour, red)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">PenColour (black)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ellipse (100, 300, 50, 200)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0054.jpg" width="437" height="211" border="0" alt="clip0054"></p>
<p><span class="f_ImageCaption">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brush (colour, red)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">PenColour (black)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ellipse (100, 300, 75, 75)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0055.jpg" width="215" height="204" border="0" alt="clip0055"></p>
<p><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Traçage d'une ellipse, rempli au moyen de la brosse précédemment sélectionnée, et dont le contour dépend du trait qui a été défini</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"> </span><span class="f_Variables" style="font-weight: bold;">Ellipse (centreX, centreY, rayon horizontal, rayon vertical)</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Paramètres</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">centreX</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Position horizontale du centre de l'ellipse</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">centreY</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Position verticale du centre de l'ellipse</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">rayon horizontal</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Rayon horizontal de l'ellipse</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">rayon vertical</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Rayon vertical de l'ellipse</p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemples:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brosse (Pleine, Rouge)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CouleurTrait (Noir)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ellipse (100, 300, 400, 150)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0054.jpg" width="437" height="211" border="0" alt="clip0054"></p>
<p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brosse (Pleine, Rouge)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CouleurTrait (Noir)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ellipse (100, 300, 75, 75)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0055.jpg" width="215" height="204" border="0" alt="clip0055"></p>

</td></tr></table>
</div>

</body>
</html>
