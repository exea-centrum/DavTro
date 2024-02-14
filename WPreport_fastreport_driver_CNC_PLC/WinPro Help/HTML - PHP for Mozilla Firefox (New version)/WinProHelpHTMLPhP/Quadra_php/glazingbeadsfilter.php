<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Filter","Filtre"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?glazingbeadsfilter.php"; }
else { parent.quicksync('a5.1.8'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Filtre</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="_@White,_@Black,_@Red,_@Yellow,_@Green,_@Blue,_@Cyan,_@Magenta,_Visible,_BackgroundColour,_TextColour" />
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
     <a href="parlabour.php">Previous</a>&nbsp;
     <a href="dormants.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>This filter applies for beads combo lists within an order. See corresponding chapter about <span style="font-weight: bold;"><a href="filtres.php">Filters</a></span> for more details about this feature.</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>Ce filtre s'applique sur les combos de listes de parcloses utilisés depuis la commande. Voir le chapitre relatif aux <span style="font-weight: bold;"><a href="filtres.php">Filtres</a></span> pour plus de détails.</p>

</td></tr></table>
</div>

</body>
</html>
