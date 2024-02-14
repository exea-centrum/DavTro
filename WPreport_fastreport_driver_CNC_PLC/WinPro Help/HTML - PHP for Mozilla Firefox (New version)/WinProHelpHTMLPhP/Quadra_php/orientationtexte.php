<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["TextOrientation","OrientationTexte"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?orientationtexte.php"; }
else { parent.quicksync('a2.6.25'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>OrientationTexte</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="OrientationTexte" />
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
     <a href="nombre.php">Previous</a>&nbsp;
     <a href="point.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p class="p_Interligne"><span style="color: #000000;">Changes the text orientation. The angle is given in degrees, with up to 1 decimal. Angle 0 lets the text print normally; angle 180 reverses the text. All angles are allowed.</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">TextOrientation (angle)</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Font (Arial, 20)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">TextOrientation (45)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Text (100, 100, 45°)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">TextOrientation (180)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Text (100, 200, 180°)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0064.jpg" width="138" height="135" border="0" alt="clip0064"></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="315" style="width: 315px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Note:</span> </p>
<p style="margin: 0px 0px 0px 13px;">This feature can only be used with TrueType fonts.</p>
</td>
</tr>
</table>
</div>
<p>&nbsp;</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette instruction modifie l'angle selon lequel le texte sera écrit. Cet angle est exprimé en degrés, avec éventuellement une décimale. L'angle 0 correspond à une écriture normale, l'angle 90 à une écriture tête à gauche et pied à droite. Tous les angles sont permis.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">OrientationTexte (angle)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Fonte (Arial, 20)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">OrientationTexte (45)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Texte (100, 100, 45°)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">OrientationTexte (180)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Texte (100, 200, 180°)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0064.jpg" width="138" height="135" border="0" alt="clip0064"></p>
<p style="margin: 0px 0px 0px 24px;"><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarque</span><span style="text-decoration: underline;">:</span> </p>
<p style="margin: 0px 0px 0px 13px;">Seules les fontes TrueType peuvent être utilisées avec cette fonction.</p>
</td>
</tr>
</table>
</div>
<p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
