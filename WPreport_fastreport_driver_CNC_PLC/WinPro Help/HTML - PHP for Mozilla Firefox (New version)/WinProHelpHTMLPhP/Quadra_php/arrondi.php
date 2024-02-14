<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Round","Arrondi","Afronden"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?arrondi.php"; }
else { parent.quicksync('a2.4.1.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>Arrondi</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="Arrondi" />
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
     <a href="fonctions_arithmetiques.php">Previous</a>&nbsp;
     <a href="carre.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>This function rounds a number to the nearest value, with a specified number of decimals.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Round (number_to_round, number_of_decimals)</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">result := round (17.256, 2)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># result is now 17,26</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">result := round (17.256, 0)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># result is now 17</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">result := round (17.256, -1)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># result is now 20</span></p>
<p><span class="f_Variables" style="font-weight: bold;">&nbsp;</span></p>
<p><span class="f_Variables" style="font-weight: bold;">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette fonction arrondi un nombre au nombre le plus proche, à n décimales près</p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Arrondi (nombre_a_arrondir, nombre_de_décimales)</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemples:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">resultat := Arrondi (17.256, 2)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># resultat vaut 17,26</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">resultat := Arrondi (17.256, 0)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># resultat vaut 17</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">resultat := Arrondi (17.256, -1)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># resultat vaut 20</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p>&nbsp;</p>

</td></tr></table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Deze functies rond een getal af naar de dichtsbijzijnde waarde,met het aantal decimalen gespecifieerd.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Round (af_te_ronden_getal, aantal_decimalen)</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Voorbeeld:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">result := round (17.256, 2)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># resultaat is nu 17,26</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">result := round (17.256, 0)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># resultaat is nu 17</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">result := round (17.256, -1)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># resultaat is nu 20</span></p>
<p><span class="f_Variables" style="font-weight: bold;">&nbsp;</span></p>
<p><span class="f_Variables" style="font-weight: bold;">&nbsp;</span></p>

</td></tr></table>
</div>
</body>
</html>
