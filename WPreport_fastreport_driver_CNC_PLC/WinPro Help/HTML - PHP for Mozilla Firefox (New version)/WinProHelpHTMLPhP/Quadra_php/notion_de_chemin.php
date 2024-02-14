<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Path Functions","Fonctions de chemin"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?notion_de_chemin.php"; }
else { parent.quicksync('a2.6.17'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Fonctions de chemin</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Chemin" />
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
     <a href="fleche.php">Previous</a>&nbsp;
     <a href="arc3.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>With the path feature, you may create drawing with complex shapes with ease, and fill those shapes using the current brush instruction.</p>
<p>When creating a new shape using those path functions, any drawing instructions into the path will start a new shape with a point corresponding to the last point of the previous function, which allow to create complex drawings.</p>
<p>&nbsp;</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Avec la notion de chemin, vous pouvez cr&#233;er une forme complexe plus facilement et de la remplir &#224; l'aide de l'instruction Brosse classique.</p>
<p>De plus, lors de la cr&#233;ation de cette forme, certaines de ces fonctions prennent le point d'arriv&#233;e de l'instruction pr&#233;c&#233;dente comme point de d&#233;part.</p>
<p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
