<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["BowCutSetNbTrapeziums","DecArcDecider","BowCutSetNbTrapeziums"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?decarcdecider.php"; }
else { parent.quicksync('a2.4.5.2.3.2'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>DecArcDecider</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="DecArcDecider" />
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
     <a href="decarcestimer.php">Previous</a>&nbsp;
     <a href="generer_le_decoupage.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>This function stores the number of trapezius asked to realize the bow cutting.</p>
<p>It returns <span class="f_Variables">1</span> when the quantity set is accepted, <span class="f_Variables">-1 </span>otherwise.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">a := BowCutSetNbTrapeziums (value)</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette fonction stocke le nombre de trap&#232;zes demand&#233;s pour r&#233;aliser le d&#233;coupage.</p>
<p>Elle renvoie <span class="f_Variables">1</span> si la quantit&#233; demand&#233;e est accept&#233;e, sinon elle renvoie <span class="f_Variables">-1</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">a := DecArcDecider (valeur)</span></p>

</td></tr></table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Deze functie slaat het aantal trapeziums op welke gevraagd zijn om de boog te zagen.</p>
<p>Deze functie geeft de waarde <span class="f_Variables">1</span> wanneer de hoeveelheid geaccepteert is, <span class="f_Variables">-1 </span>in het ander geval.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">a := BowCutSetNbTrapeziums (parameter)</span></p>

</td></tr></table>
</div>
</body>
</html>
