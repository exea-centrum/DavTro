<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["HorizontalResolution","ResolutionHorizontale"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?resolutionhorizontale.php"; }
else { parent.quicksync('a2.6.30'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>ResolutionHorizontale</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="ResolutionHorizontale" />
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
     <a href="rectanglearrondi.php">Previous</a>&nbsp;
     <a href="resolutionverticale.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>This function returns the number of pixels on a horizontal line of 1000 mm, at the current scale.  </p>
<p>The returned value will vary both with the scale used for the drawing, and with the physical resolution of the device on which the drawing is executed.</p>
<p>This function will help you adapt a drawing to the resolution of the device.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax</span>:</p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">HorizontalResolution ()</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">rh := H</span><span style="font-family: 'Courier New'; color: #0000ff;">orizontalResolution</span><span class="f_Variables">()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Font (Courier New, rh/20)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Text (100, 100, proportional size)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Font (courier New, 14)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Text (100, 300, fixed size)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0069.jpg" width="289" height="187" border="0" alt="clip0069"></p>
<p><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 11px;"><span style="font-weight: bold; text-decoration: underline;">Note:</span></p>
<p style="margin: 0px 0px 0px 11px;">Horizontal and vertical resolutions are sometimes different. See function <a href="resolutionverticale.php">VerticalResolution</a>.</p>
</td>
</tr>
</table>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette fonction renvoie le nombre de pixels (plus petit point que peut représenter l'écran ou l'imprimante) pour un segment horizontal de 1000 mm, mis à l'échelle.</p>
<p>Le programme peut tracer les dessins à différentes échelles. Le nombre de points variera donc en fonction de cette échelle, mais aussi en fonction de la résolution du périphérique (96 ou 120 points par pouce pour un écran; 300 à 4800 points par pouce pour les imprimantes). Cette fonction vous permettra donc d'adapter un dessin à la capacité du périphérique et à l'échelle courante.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">ResolutionHorizontale ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">rh := ResolutionHorizontale()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Fonte (Courier New, rh/20)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Texte (100, 100, proportional size)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Fonte (courier New, 14)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Texte (100, 300, fixed size)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0069.jpg" width="289" height="187" border="0" alt="clip0069"></p>
<p><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarque:</span></p>
<p style="margin: 0px 0px 0px 13px;">La résolution horizontale et la résolution verticale ne sont pas toujours identiques. </p>
<p style="margin: 0px 0px 0px 13px;">Voyez la fonction <a href="resolutionverticale.php">ResolutionVerticale</a>.</p>
</td>
</tr>
</table>
</div>
<p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
