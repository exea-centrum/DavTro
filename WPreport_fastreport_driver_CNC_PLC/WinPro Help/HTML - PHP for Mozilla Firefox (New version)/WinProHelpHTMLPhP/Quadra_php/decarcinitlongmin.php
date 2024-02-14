<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["BowCutSetMinLength","DecArcInitLongMin","BowCutSetMinLength"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?decarcinitlongmin.php"; }
else { parent.quicksync('a2.4.5.2.1.4'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>DecArcInitLongMin</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="DecArcInitLongMin" />
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
     <a href="decarcsetlargeursstand.php">Previous</a>&nbsp;
     <a href="decarcinitpenalite.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>This optional function allows to define the minimum length for the trapezius that will be generated.</p>
<p>This minimum length value should include the optional allowance values set with function <span class="f_Variables">BowCutSetOverLenghts</span></p>
<p>This function always returns <span class="f_Variables">1</span>.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">a := BowCutSetMinLength (value)</span></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 13px;"><img src="img/clip0003.jpg" width="352" height="151" border="0" alt="clip0003"></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette fonction facultative permet de d&#233;finir la longueur minimale pour les trap&#232;zes qui seront calcul&#233;s.</p>
<p>La valeur de cette longueur minimale doit inclure les &#233;ventuelles corrections d&#233;finies par la fonction <span class="f_Variables">DecArcInitSurCotes</span></p>
<p>Cette fonction renvoie toujours <span class="f_Variables">1</span>.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">a := DecArcInitLongMin (valeur)</span></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 13px;"><img src="img/clip0181.gif" width="352" height="151" border="0" alt="Clip0181"><span class="f_Variables" style="font-weight: bold;"></span></p>

</td></tr></table>
</div>

<div class="NED">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Deze optionele functie laat u toe de minium lengte te berekenen voor de trapezium welke berekend wordt.</p>
<p>Deze minium lengte dienen de extralorentaie waardes te bevatten welke in de functie <span class="f_Variables">BowCutSetOverLenghts </span></p>
<p>aangemaakt zijn .</p>
<p>Deze functie geeft steeds de waarde <span class="f_Variables">1</span>.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">a := BowCutSetMinLength (value)</span></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 13px;"><img src="img/clip0003.jpg" width="352" height="151" border="0" alt="clip0003"></p>

</td></tr></table>
</div>
</body>
</html>
