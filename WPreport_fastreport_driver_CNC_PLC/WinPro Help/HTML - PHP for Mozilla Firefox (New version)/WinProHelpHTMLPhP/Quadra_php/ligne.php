<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Line","Ligne"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?ligne.php"; }
else { parent.quicksync('a2.6.22'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Ligne</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Ligne" />
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
     <a href="image.php">Previous</a>&nbsp;
     <a href="modetexte.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>Draws one or several lines. You must give at least 2 pairs of parameter, each pair being one end of the line. You can give additional pairs; in this case, a new line will be drawn from the previous ending point to the new coordinate. </p>
<p>The line is drawn using the current pen.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="color: #000000; text-decoration: underline;">Syntax:</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Line (x0, y0, x1, y1 [x2, y2 [, x3, y3 [, ...] ] ] </span><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">)</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="color: #000000; text-decoration: underline;">Example</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Line (500,500, 515,125)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Line (100,50, 100,500, 900,900)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0061.jpg" width="435" height="435" border="0" alt="clip0061"></p>
<p><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Traçage d'une ou plusieurs lignes. Il faut donner en paramètre les coordonnées d'au moins deux points (x,y); on peut donner plus de 2 coordonnées, dans ce cas une ligne droite réunira chaque paire de points consécutifs.</p>
<p>Le trait sera tracé avec les caractéristique de trait courantes, que l'on peut modifier à l'aide des fonctions <span class="f_Variables">CouleurTrait</span>, <span class="f_Variables">EpaisseurTrait</span>, <span class="f_Variables">StyleTrait</span>. Le trait par défaut est noir, 1 pixel d'épaisseur, continu.</p>
<p>Les dimensions sont données en mm, et seront mises à l'échelle sur le dessin, en fonction des caractéristiques de celui-ci.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Ligne (x0, y0, x1, y1 [x2, y2 [, x3, y3 [, ...] ] ] )</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ligne (500,500, 515,125)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ligne (100,50, 100,500, 900,900)</span></p>
<p><img src="img/clip0061.jpg" width="435" height="435" border="0" alt="clip0061"></p>
<p><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>

</td></tr></table>
</div>

</body>
</html>
