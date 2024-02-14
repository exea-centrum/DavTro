<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Sector","Secteur"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?secteur.php"; }
else { parent.quicksync('a2.6.32'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Secteur</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Secteur" />
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
     <a href="resolutionverticale.php">Previous</a>&nbsp;
     <a href="styletrait.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Draws an arc of circle or ellipse, with 2 lines joining the two ends of the arc to the center. The shape is filled with the current brush, and the outline is drawn with the current pen.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Sector (X, Y, radius[, vertical radius], start angle, end angle)</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 1px;"><table align="center" cellspacing="0" cellpadding="0" border="1" style="border-color : #dadada #696968 #696968 #dadada; border-style: solid; border-width: 1px; border-spacing:0px;">
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-weight: bold; color: #000000;">Parameter</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 9px;"><span style="font-weight: bold; color: #000000;">Description</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">X</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 9px;"><span style="color: #000000;">Horizontal position of the center</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">Y</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 9px;"><span style="color: #000000;">Vertical position of the center</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">radius</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 9px;"><span style="color: #000000;">Radius of the circle, or horizontal radius of the ellipse</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">vertical radius</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 9px;"><span style="color: #000000;">Vertical radius of the ellipse; this parameter is optional. If it is present, the arc will be the arc of an ellipse; otherwise, it will be the arc of a circle.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">start angle</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 9px;"><span style="color: #000000;">Start angle, in degrees. Angle 0 is at the left of the horizontal diameter of the circle or the ellipse. Drawing is done counter-clockwise. Thus, for example, angle 90 is on top of the circle.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">end angle</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 9px;"><span style="color: #000000;">End angle, in degrees</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brush (colour, cyan)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">PenColour (blue)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Sector (100, 100, 50, 17, 85)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0070.jpg" width="191" height="167" border="0" alt="clip0070"></p>
<p style="margin: 0px 0px 0px 24px;"><span class="f_ImageCaption">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brush (colour, cyan)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">PenColour (blue)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Pie (100, 100, 100, 50, 17, 85)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0071.jpg" width="269" height="178" border="0" alt="clip0071"></p>
<p style="margin: 0px 0px 0px 24px;"><span class="f_ImageCaption">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Traçage d'un arc de cercle ou d'ellipse, dont les deux extrémités sont reliées au centre du cercle ou de l'ellipse par une paire de droites. L'intérieur de l'arc est rempli au moyen de la brosse précédemment sélectionnée; le contour dépend du trait qui a été défini.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Secteur (X, Y, rayon[, rayon vertical], angle début, angle fin)</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Paramètres</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">X</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Position horizontale du centre du cercle</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">Y</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Position verticale du centre du cercle</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">rayon</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Rayon du cercle, ou rayon horizontal de l'ellipse</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">rayon vertical</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Rayon vertical de l'ellipse. Ce paramètre est optionnel; s'il est spécifié, l'arc est un arc d'ellipse; sinon c'est un arc de cercle</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">angle début</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Angle de début de l'arc de cercle, exprimé en degrés. L'angle 0 se trouve à gauche du cercle. Les angles croissent dans le sens inverse des aiguilles d'une montre. L'angle 90 se trouve donc en haut du cercle.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">angle fin</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Angle de fin de l'arc</p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 61px;"><span class="f_Variables">Brosse (Pleine, Cyan)</span></p>
<p style="margin: 0px 0px 0px 61px;"><span class="f_Variables">CouleurTrait (Bleu)</span></p>
<p style="margin: 0px 0px 0px 61px;"><span class="f_Variables">Secteur (100, 100, 50, 17, 85)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0070.jpg" width="191" height="167" border="0" alt="clip0070"></p>
<p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brosse (Pleine, Cyan)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CouleurTrait (Bleu)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Secteur (100, 100, 100, 50, 17, 85)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0071.jpg" width="269" height="178" border="0" alt="clip0071"></p>

</td></tr></table>
</div>

</body>
</html>
