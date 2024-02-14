<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED","ESP"];
var WinProHelpPageName=["Arithmetic functions","Fonctions Arithmétiques","Rekenkundige functies","Funciones aritméticas"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?fonctions_arithmetiques.php"; }
else { parent.quicksync('a2.4.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>Fonctions Arithm&#233;tiques</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="Arithm&#233;tique,Math" />
<meta http-equiv="Content-Type" content="text/php; charset=ISO-8859-1" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link type="text/css" href="default.css" rel="stylesheet" />
</head>

<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;" onload="AddTitleAndLangFlags();highlight();">
<div id="hmpopupDiv" style="visibility:hidden; position:absolute; z-index:1000;"></div>


<table width="100%" border="0" cellspacing="0" cellpadding="5" bgcolor="#FF8000">
  <tr valign="middle">
    <td align="left">
      <p class="p_Heading1"><span class="f_Heading1" style="font-size: 6pt; font-weight: normal;">&nbsp;</span></p>
      <p class="p_Heading1"><span id="titlepage" class="f_Heading1"></span></p>
    </td>
	<td align="center">
     <div id="langflags"></div>
    </td>
    <td align="right">
     <span style="font-size: 9pt">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="fonctions.php">Previous</a>&nbsp;
     <a href="arrondi.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Those functions put at your disposal extended arithmetic operators for numbers and expressions, like rounding, square root, absolute value, etc...</p>
<p>&nbsp;</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Les fonctions arithmétiques mettent à votre disposition les opérations arithmétiques étendues, telles que l'arrondi, la racine carrée, etc...</p>
<p>&nbsp;</p>

</td></tr></table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Deze functies staan u toe om rekenkundige bewerkingen uit te voeren voor cijfers en voorwaarden,zoals afronden,vierkantswortels,absolute waardes, enz...</p>
<p>&nbsp;</p>

</td></tr></table>
</div>
<div class="ESP">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Las funciones aritméticas proveen de un conjunto extenso de operaciones aritméticas, tales como redondeo, raiz cuadrada, etc..</p>
<p>&nbsp;</p>

</td></tr></table>
</div>
</body>
</html>
