<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Bezier","Bezier"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?bezier.php"; }
else { parent.quicksync('a2.6.5'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Bezier</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Bezier" />
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
     <a href="barre.php">Previous</a>&nbsp;
     <a href="brosse.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p><span style="color: #000000;">&nbsp;</span></p>
<p>Draws a curved line, defined by a starting point an end point, and 2 attraction points. The simplest Bezier curve requires thus 8 parameters (2 per point). You can chain several Bezier curves, by adding 6 new parameters per additional curve (the starting point of the new curve is the end point of the previous one).  </p>
<p>To chain smoothly several B&#233;zier curves, you must meet the two following requirements: </p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>The starting point of the new curve must match the end point of the previous one.</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>The second attraction point of the first curve and the first attraction point of the new curve must be on a line including the end point of the first curve.  </td></tr></table></div><p>The pen used to draw the curve is the current pen, which you can alter using instructions such as <a href="couleurtrait.php">penColour</a>, <a href="epaisseurtrait.php">penThickness</a>, <a href="styletrait.php">penStyle</a>. The default pen is black, one pixel wide, solid.</p>
<p>Dimensions are into mm, and will be scaled onto the drawing, according its set up.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Bezier (x0, y0, x1, y1, x2, y2, x3, y3[, x4,y4, x5,y5, x6,y6[, ...])</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Settings:</span></p>
<p style="margin: 0px 0px 0px 48px;">Each pair of parameters are the coordinates of one of the points, in the order x, y.</p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Bezier (100,100, 80,150, 100,100, 200,100)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0043.jpg" width="281" height="113" border="0" alt="clip0043"></p>
<p>&nbsp;</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Traçage d'un ligne courbe, définie par un point de départ, un point d'arrivée, et deux points d'attraction. Le traçage d'une courbe de Bézier simple réclame 8 paramètres; on peut enchaîner plusieurs courbes de Bézier, en ajoutant 6 nouveaux paramètres pour chaque courbe (le point d'arrivée de la courbe précédente servant de point de départ de la nouvelle courbe).</p>
<p>Pour que plusieurs courbes de Bézier s'enchaînent sans rupture, il faut satisfaire aux deux conditions suivantes:</p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td> Le point d'arrivée de la première courbe doit coïncider avec le point de départ de la deuxième courbe.</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td> Le deuxième point d'attraction de la première courbe et le premier point d'attraction de la deuxième courbe doivent se trouver sur une droite qui passe en outre par le point de départ de la deuxième courbe.</td></tr></table></div><p>Le trait sera tracé avec les caractéristique de trait courantes, que l'on peut modifier à l'aide des fonctions <a href="couleurtrait.php">CouleurTrait</a>, <a href="epaisseurtrait.php">EpaisseurTrait</a>, <a href="styletrait.php">StyleTrait</a>. Le trait par défaut est noir, 1 pixel d'épaisseur, continu.</p>
<p>Les dimensions sont données en mm, et seront mises à l'échelle sur le dessin, en fonction des caractéristiques de celui-ci.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Bezier (x0, y0, x1, y1, x2, y2, x3, y3[, x4,y4, x5,y5, x6,y6[, ...])</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Paramètres:</span></p>
<p style="margin: 0px 0px 0px 48px;">Chaque paire de paramètres représente les coordonnées d'un point, dans l'ordre x,y</p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Bezier (100,100, 80,150, 100,100, 200,100)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0043.jpg" width="281" height="113" border="0" alt="clip0043"></p>
<p style="text-align: center;">&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
