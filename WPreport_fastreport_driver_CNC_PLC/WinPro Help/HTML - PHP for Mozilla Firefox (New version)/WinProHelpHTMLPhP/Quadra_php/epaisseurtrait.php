<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["PenWidth","EpaisseurTrait"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?epaisseurtrait.php"; }
else { parent.quicksync('a2.6.15'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>EpaisseurTrait</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="EpaisseurTrait" />
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
     <a href="ellipse.php">Previous</a>&nbsp;
     <a href="fleche.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p style="background: #fffff2;"><span style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">&nbsp;</span></p>
<p class="p_Interligne"><span style="color: #000000;">Changes the width with which lines will be drawn. By default, the value is given in mm (e.g. 0.25 for 1/4 mm) and is independent from the drawing scale. You can also give it in pixels.</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="color: #000000; text-decoration: underline;">Syntax</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">PenWidth (pen_width_in_mm)</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">PenWidth (pen_width_in_pixels P)</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="color: #000000; text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">PenColour (red)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">PenWidth (2) </span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">Line (100, 150, 300, 350)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">PenColour (green)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">PenWidth (0) </span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">Line (100, 350, 300, 150)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">PenColour (yellow)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">PenWidth (5 p)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">Line (200, 350, 200, 150)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0056.jpg" width="290" height="295" border="0" alt="clip0056"></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 12px;"><span style="font-weight: bold; text-decoration: underline;">Remarque:</span></p>
<p style="margin: 0px 0px 0px 12px;">A width of 0 will actually provide a width of 1 pixel.</p>
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
<p>Indique l'épaisseur du trait pour les prochaines instructions de traçage. L'épaisseur est données par défaut en mm (p.ex. 0.25 pour 1/4 mm) et n'est pas affectée par l'échelle du dessin. Elle peut être aussi donnée en pixels.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">EpaisseurTrait (largeur_tait_en_mm)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">EpaisseurTrait (largeur_tait_en_pixels P)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CouleurTrait (Rouge)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">EpaisseurTrait (2)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ligne (100, 150, 300, 350)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CouleurTrait (Vert)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">EpaisseurTrait (0)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ligne (100, 350, 300, 150)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CouleurTrait (Jaune)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">EpaisseurTrait (5 p)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ligne (200, 350, 200, 150)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0056.jpg" width="290" height="295" border="0" alt="clip0056"></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarque:</span></p>
<p style="margin: 0px 0px 0px 13px;">Vous pouvez indiquer une épaisseur de 0 si vous souhaitez une ligne épaisse de 1 pixel.</p>
</td>
</tr>
</table>
</div>
<p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
