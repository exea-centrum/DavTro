<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Polygon","Polygone","Polygone"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?polygone.php"; }
else { parent.quicksync('a2.6.27'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Polygone</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Polygone" />
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
     <a href="point.php">Previous</a>&nbsp;
     <a href="rectangle2.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p class="p_Interligne"><span style="color: #000000;">&nbsp;</span></p>
<p class="p_Interligne"><span style="color: #000000;">Draws a closed figure, outlined by straight lines. The figure is automatically closed if the first and last points are not the same. The shape is drawn using the current brush and pen settings.</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Polygon (x0, y0, x1, y1, x2, y2 [, x3, y3 [, ...] ]  )</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brush (colour, cyan)  </span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">PenColour (blue) </span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">PenWidth (1) </span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Polygon (50,100, 1000, 1000, 1900, 300, 1000, 500)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0066.jpg" width="457" height="254" border="0" alt="clip0066"></p>
<p style="margin: 0px 0px 0px 24px;"><span class="f_ImageCaption">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span class="f_ImageCaption">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Traçage d'une figure fermée, composée de segments droits. Si le dernier point du polygone ne correspond pas avec son premier point, un segment supplémentaire sera ajouté entre le dernier et le premier point.</p>
<p>Le contour sera tracé avec le style de trait actuellement sélectionné; l'intérieur sera rempli avec la brosse actuellement sélectionnée.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Polygone (x0, y0, x1, y1, x2, y2 [, x3, y3 [, ...] ]  )</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brosse (Pleine, Cyan)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CouleurTRait (Bleu)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">EpaisseurTrait (1)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Polygone (50,100, 1000, 1000, 1900, 300, 1000, 500)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0066.jpg" width="457" height="254" border="0" alt="clip0066"></p>

</td></tr></table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p class="p_Interligne"><span style="color: #000000;">&nbsp;</span></p>
<p class="p_Interligne"><span style="color: #000000;">Tekent een gesloten figuur, begrenst met rechte lijnen. De figuur wordt utomatisch gesloten wanneer de eerste en het laatste punt niet dezelfde zijn.De vorm gebruikt de huidige pen en vulling instellingen.</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Polygon (x0, y0, x1, y1, x2, y2 [, x3, y3 [, ...] ]  )</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Voorbeeld:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brush (colour, cyan)  </span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">PenColour (blue) </span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">PenWidth (1) </span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Polygon (50,100, 1000, 1000, 1900, 300, 1000, 500)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0066.jpg" width="457" height="254" border="0" alt="clip0066"></p>
<p style="margin: 0px 0px 0px 24px;"><span class="f_ImageCaption">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span class="f_ImageCaption">&nbsp;</span></p>

</td></tr></table>
</div>
</body>
</html>
