<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Bow Cutting/Mapping","Découpage d'arc","Herverdelen van de te zagen stukken voor een boog"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?decoupage_darc.php"; }
else { parent.quicksync('a2.4.5.2'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>Découpage d'arc</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="D&#233;coupage d'arcs" />
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
     <a href="inclinaison.php">Previous</a>&nbsp;
     <a href="initialisation.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Those functions allow to compute the cutting sequence of a bowed shape into trapezium (mapping).</p>
<p>Several cutting options are available.</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Ces fonctions vous permettent de calculer le d&#233;coupage d'arc(s) de cercle en trap&#232;zes.</p>
<p>Plusieurs options de d&#233;coupage sont disponibles.</p>

</td></tr></table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Deze functies laten u toe de zaagsequentie van een gebogen vorm in een trapezium (mapping) te berekenen.</p>
<p>Diverse zaag-opties zijn beschikbaar.</p>

</td></tr></table>
</div>
</body>
</html>
