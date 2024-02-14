<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["BowRotationDirection","ArcSensRotation"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?arcsensrotation.php"; }
else { parent.quicksync('a2.6.17.3'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>ArcSensRotation</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="ArcSensRotation" />
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
     <a href="arc22.php">Previous</a>&nbsp;
     <a href="bezier2.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>This function lets you define a rotation direction for circle arcs.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">BowRotationDirection (value)</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Value</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">0</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">see example</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">1</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">see example</p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Note</span><span style="text-decoration: underline;">:</span> </p>
<p style="margin: 0px 0px 0px 13px;">The utility of this function is mainly to modify the arc rotation direction for arcs continuing an existing path.</p>
</td>
</tr>
</table>
</div>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example n°1:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brush (Colour, LightRed)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">StartPath ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">BowRotationDirection&nbsp; (0)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Line (1000, 1000, 1000, 1000)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Arc (1000, 1000, 500, 500, 750, 1000, 800)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">EndPath ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">FillAndBorderPath ()</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0269eng.jpg" width="128" height="122" border="0" alt="Clip0269"></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_ImageCaption">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example °2 :</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brush (Colour, LightRed)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">StartPath ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">BowRotationDirection&nbsp; (1)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Line (1000, 1000, 1000, 1000)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Arc (1000, 1000, 500, 500, 750, 1000, 800)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">EndPath ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">FillAndBorderPath ()</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0273.jpg" width="207" height="203" border="0" alt="Clip0273"></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette instruction permet de d&#233;finir le sens de rotation des arcs.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">ArcSensRotation (valeur)</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Valeur</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">0</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">voir exemple</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">1</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">voir exemple</p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarque</span><span style="text-decoration: underline;">:</span> </p>
<p style="margin: 0px 0px 0px 13px;">L'intérêt réel de cette fonction est de modifier le sens de rotation des arcs poursuivant un chemin.</p>
</td>
</tr>
</table>
</div>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple n°1:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brosse (Pleine, RougeClair)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">DebutChemin ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">ArcSensRotation(0)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ligne(1000,1000,1000,1000)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Arc (1000, 1000, 500, 500, 750, 1000, 800)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">FinChemin ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">RemplirEtContourChemin ()</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0269eng.jpg" width="128" height="122" border="0" alt="Clip0269"><span class="f_Variables"></span></p>
<p style="margin: 0px 0px 0px 37px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple n°2:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brosse (Pleine, RougeClair)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">DebutChemin ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">ArcSensRotation(1)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ligne(1000,1000,1000,1000)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Arc (1000, 1000, 500, 500, 750, 1000, 800)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">FinChemin ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">RemplirEtContourChemin ()</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0273.jpg" width="207" height="203" border="0" alt="Clip0273"></p>

</td></tr></table>
</div>

</body>
</html>
