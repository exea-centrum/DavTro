<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Chord","Corde"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?chord.php"; }
else { parent.quicksync('a2.6.9'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Corde</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Corde" />
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
     <a href="cercle.php">Previous</a>&nbsp;
     <a href="cote1cote2cote3cote4.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Draws an arc of circle or ellipse, with a line joining the two ends of the arc. The shape is filled with the current brush, and the outline is drawn with the current pen.</p>
<p class="p_Interligne"><span class="f_Interligne" style="text-decoration: underline;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax</span>:</p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Chord (X, Y, radius[, vertical radius], start angle, end angle)</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 1px;"><table align="center" cellspacing="0" cellpadding="0" border="1" style="border-color : #ffffff #696968 #696968 #ffffff; border-style: solid; border-width: 1px; border-spacing:0px;">
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-weight: bold; color: #000000;">Parameter</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 8px;"><span style="font-weight: bold; color: #000000;">Description</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">X</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 8px;"><span style="color: #000000;">Horizontal position of the center</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">Y</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 8px;"><span style="color: #000000;">Vertical position of the center</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">radius</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 8px;"><span style="color: #000000;">Radius of the circle, or horizontal radius of the ellipse</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">vertical radius</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 8px;"><span style="color: #000000;">Vertical radius of the ellipse; this parameter is optional. If it is present, the arc will be the arc of an ellipse; otherwise, it will be the arc of a circle.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">start angle</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 8px;"><span style="color: #000000;">Start angle, in degrees. Angle 0 is at the left of the horizontal diameter of the circle or the ellipse. Drawing is done counter-clockwise. Thus, for example, angle 90 is on top of the circle.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">end angle</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 8px;"><span style="color: #000000;">End angle, in degrees.</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Interligne"><span class="f_Interligne" style="text-decoration: underline;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brush (colour, red)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Chord (100, 100, 50, 17, 85)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0046.jpg" width="171" height="139" border="0" alt="clip0046"></p>
<p><span style="font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brush (colour, green)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Chord (100, 100, 100, 50, 17, 85)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0047.jpg" width="266" height="145" border="0" alt="clip0047"></p>
<p style="margin: 0px 0px 0px 24px;"><span class="f_ImageCaption">&nbsp;</span></p>

</td></tr></table>
</div>

</table>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Tra�age d'un arc de cercle ou d'ellipse, avec en plus une droite reliant les deux extr�mit�s de l'arc. L'int�rieur de l'arc est rempli au moyen de la brosse pr�c�demment s�lectionn�e; le contour d�pend du trait qui a �t� d�fini.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="text-decoration: underline;">Syntaxe:</span></p>
<p><span class="f_Variables" style="font-weight: bold;">Corde (X, Y, rayon[, rayon vertical], angle d�but, angle fin)</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Param�tres</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 5px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">X</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p> Position horizontale du centre du cercle</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">Y</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p> Position verticale du centre du cercle</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">rayon</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p> Rayon du cercle, ou rayon horizontal de l'ellipse</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">rayon vertical</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p> Rayon vertical de l'ellipse. Ce param�tre est optionnel; s'il est sp�cifi�, l'arc est un arc d'ellipse; sinon c'est un arc de cercle</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">angle d�but</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p> Angle de d�but de l'arc de cercle, exprim� en degr�s. L'angle 0 se trouve � gauche du cercle. Les angles croissent dans le sens inverse des aiguilles d'une montre. L'angle 90 se trouve donc en haut du cercle.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">angle fin</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p> Angle de fin de l'arc</p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="text-decoration: underline;">Exemples:</span></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">Brosse (Pleine, Rouge)</span></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">Corde (100, 100, 50, 17, 85)</span></p>
<p><img src="img/clip0046.jpg" width="171" height="139" border="0" alt="clip0046"></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">Brosse (Pleine, Vert)</span></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">Corde (100, 100, 100, 50, 17, 85)</span></p>
<p><img src="img/clip0047.jpg" width="266" height="145" border="0" alt="clip0047"></p>

</td></tr></table>
</div>

</body>
</html>
