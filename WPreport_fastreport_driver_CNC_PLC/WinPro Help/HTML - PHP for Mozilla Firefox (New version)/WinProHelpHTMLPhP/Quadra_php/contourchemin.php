<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["BorderPath","ContourChemin"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?contourchemin.php"; }
else { parent.quicksync('a2.6.17.5'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>ContourChemin</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="ContourChemin" />
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
    <td align="right">
     <span style="font-size: 9pt">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="bezier2.php">Previous</a>&nbsp;
     <a href="debutchemin.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>This instruction close the shape and draw it.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">BorderPath ()</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brush (Colour, LightRed)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">StartPath ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Line (1000, 500, 250, 1500)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Line (250, 500)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">EndPath ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">BorderPath ()&nbsp; </span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0266.jpg" width="172" height="206" border="0" alt="Clip0266"></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Note:</span></p>
<p style="margin: 0px 0px 0px 13px;">The brush properties are not used for the filling of the shape, only the border is drawn with the <span class="f_Variables">BorderPath ()</span>function.</p>
</td>
</tr>
</table>
</div>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette instruction ferme la forme et la dessine d'un trait.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">ContourChemin ()</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brosse (Pleine, RougeClair)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">DebutChemin ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ligne (1000, 500, 250, 1500)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ligne (250, 500)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">FinChemin ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">ContourChemin () </span></p>
<p style="margin: 0px 0px 0px 13px;"><img src="img/clip0266.jpg" width="172" height="206" border="0" alt="clip0266"></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarque:</span></p>
<p style="margin: 0px 0px 0px 13px;">Avec la fonction <span class="f_Variables">ContourChemin ()</span>, la brosse n'est pas prise en compte pour le remplissage de la forme. Seul le contour est dessiné.</p>
</td>
</tr>
</table>
</div>

</td></tr></table>
</div>

</body>
</html>
