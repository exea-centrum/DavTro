<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["FillAndBorderPath","RemplirEtContourChemin"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rempliretcontourchemin.php"; }
else { parent.quicksync('a2.6.17.10'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>RemplirEtContourChemin</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="RemplirEtContourChemin" />
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
     <a href="remplirchemin.php">Previous</a>&nbsp;
     <a href="fonctions_de_transformation.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>This instruction combines properties of both functions&nbsp; <span class="f_Variables">FillPath ()</span> and <span class="f_Variables">FillAndBorderPath ()</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">FillAndBorderPath ()</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brush (Colour, LightRed)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">StartPath ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Line (1000, 500, 250, 1500)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Line (250, 500)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">EndPath ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">FillAndBorderPath () </span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0263.jpg" width="180" height="200" border="0" alt="clip0263"></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">&nbsp;</span></p>
<p style="text-align: center;"><span class="f_Variables">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette instruction combine les propriétés des fonctions&nbsp; <span class="f_Variables">RemplirChemin () </span>et <span class="f_Variables">ContourChemin ()</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">RemplirEtContourChemin ()</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brosse (Pleine, RougeClair)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">DebutChemin ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ligne (1000, 500, 250, 1500)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ligne (250, 500)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">FinChemin ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">RemplirEtContourChemin () </span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0263.jpg" width="180" height="200" border="0" alt="clip0263"></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_ImageCaption">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">&nbsp;</span></p>
<p style="text-align: center;"><span class="f_Variables">&nbsp;</span></p>

</td></tr></table>
</div>

</body>
</html>
