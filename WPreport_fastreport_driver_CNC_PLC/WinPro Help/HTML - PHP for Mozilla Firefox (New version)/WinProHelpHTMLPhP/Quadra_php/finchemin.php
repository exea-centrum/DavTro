<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["EndPath","FinChemin"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?finchemin.php"; }
else { parent.quicksync('a2.6.17.7'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>FinChemin</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="FinChemin" />
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
     <a href="debutchemin.php">Previous</a>&nbsp;
     <a href="ligne2.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p><span style="color: #000000;">&nbsp;</span></p>
<p>La fonction Fin<span class="f_Variables">Chemin ()</span> clôture une nouvelle forme qui sera fermée automatiquement par la fonction <span class="f_Variables">ContourChemin ()</span></p>
<p>Path function define the start a path, its continuity and its end.<br>
Those paths combined generate a shape, simple or complex, that may be filled with a brush.</p>
<p>The <span class="f_Variables">EndPath ()</span> function closes a new shape that will be finished automatically by the <span class="f_Variables">BorderPath ()</span> function.</p>
<p>&nbsp;</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">EndPath ()</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brush (Colour, LightRed)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">StartPath ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Line (1000, 500, 250, 1500)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Line (250, 500)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">EndPath ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">FillAndBorderPath () </span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0263.jpg" width="180" height="200" border="0" alt="clip0263"></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Note:</span></p>
<p style="margin: 0px 0px 0px 13px;">This function is only available with specifically featured functions for drawing continuity, meaning : </p>
<p style="margin: 0px 0px 0px 37px;"><span class="f_Variables">Line (...) </span>with 2 settings</p>
<p style="margin: 0px 0px 0px 37px;"><span class="f_Variables">Bezier (...)</span> with 6 settings</p>
<p style="margin: 0px 0px 0px 37px;"><span class="f_Variables">Arc2 (...) </span>with 8 settings</p>
<p style="margin: 0px 0px 0px 37px;"><span class="f_Variables">Arc (...) </span>with 7 settings</p>
<p style="margin: 0px 0px 0px 13px;">Also, remember to declare the start of the path using an <span class="f_Variables">StartPath ()</span> instruction.</p>
</td>
</tr>
</table>
</div>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p><span style="color: #000000;">&nbsp;</span></p>
<p>Certaines instructions de dessin définissent le début d'un chemin, d'autres définissent la continuité et les dernières définissent la fin du chemin.<br>
Ces chemins réunis génèrent une forme simple ou complexe pouvant ensuite être remplie par une brosse.</p>
<p>La fonction Fin<span class="f_Variables">Chemin ()</span> clôture une nouvelle forme qui sera fermée automatiquement par la fonction <span class="f_Variables">ContourChemin ()</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">FinChemin ()</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brosse (Pleine, RougeClair)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">DebutChemin ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ligne (1000, 500, 250, 1500)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ligne (250, 500)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">FinChemin ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">RemplirEtContourChemin () </span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0263.jpg" width="180" height="200" border="0" alt="clip0263"></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarque:</span></p>
<p style="margin: 0px 0px 0px 13px;">Cette fonction n'est valable que si l'on utilise des fonctions de continuité du dessin, c'est-à-dire : </p>
<p style="margin: 0px 0px 0px 37px;"><span class="f_Variables">Ligne (...)</span> à 2 paramètres</p>
<p style="margin: 0px 0px 0px 37px;"><span class="f_Variables">Bezier (...)</span> à 6 paramètres</p>
<p style="margin: 0px 0px 0px 37px;"><span class="f_Variables">Arc2 (...)</span> à 8 paramètres</p>
<p style="margin: 0px 0px 0px 37px;"><span class="f_Variables">Arc (...) </span>à 7 paramètres</p>
<p style="margin: 0px 0px 0px 13px;">Et que l'on ai au préalable précisé le début du chemin à l'aide de la fonction <span class="f_Variables">DebutChemin ()</span></p>
</td>
</tr>
</table>
</div>

</td></tr></table>
</div>

</body>
</html>
