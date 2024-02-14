<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Quantify the mapping","Quantifier le d&#233;coupage","Verdeling van het mapping"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?quantifier_le_decoupage.php"; }
else { parent.quicksync('a2.4.5.2.3'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>Quantifier le d&#233;coupage</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="" />
<meta http-equiv="Content-Type" content="text/php; charset=ISO-8859-1" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link type="text/css" href="default.css" rel="stylesheet" />
</head>
<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;" onload="AddTitleAndLangFlags();highlight();">
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
     <a href="decarcnbarcs.php">Previous</a>&nbsp;
     <a href="decarcestimer.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>The cutting sequence will be computed using 2 passes, the first one is optional. </p>
<p>The result will depend on initialization settings along with properties defined for circle arcs.</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Le d&#233;coupage va &#234;tre calcul&#233; en 2 phases dont la premi&#232;re est facultative. </p>
<p>Le r&#233;sultat d&#233;pendra des crit&#232;res d'initialisation et des propri&#233;t&#233;s des arcs de cercle d&#233;finis.</p>

</td></tr></table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>De zaagsequentie wordt berekend in 2 stappen, de eerste is optioneel. </p>
<p>Het resultaat is afhankelijk van de instellingen van de initialisatie tesamen met de eigenschappen bepald voor de rondbogen.</p>

</td></tr></table>
</div>
</body>
</html>
