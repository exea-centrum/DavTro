<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Floor","Plancher","Afronden naar onder"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?plancher.php"; }
else { parent.quicksync('a2.4.1.8'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>Plancher</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="Plancher,Arrondi" />
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
     <a href="plafond.php">Previous</a>&nbsp;
     <a href="polynome.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p><span style="color: #000000;">This function rounds a number to the nearest integer lower than the number.</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 36px;"><span class="f_Variables" style="font-weight: bold;">Floor (value)</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">result := Floor (10.3)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># result is now 10</span></p>
<p style="background: #fffff2;"><span style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">result := Floor (10.999)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># result is now 10</span></p>
<p style="background: #fffff2;"><span style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">result := Floor (10)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># result is now 10</span></p>
<p style="background: #fffff2;"><span style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette fonction arrondi un nombre à l'unité inférieure</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 37px;"><span class="f_Variables" style="font-weight: bold;">Plancher (valeur)</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemples:</span></p>
<p style="margin: 0px 0px 0px 37px;"><span class="f_Variables">resultat := Plancher (10.3)</span></p>
<p style="margin: 0px 0px 0px 37px;"><span class="f_Variables"># resultat vaut 10</span></p>
<p style="margin: 0px 0px 0px 37px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 37px;"><span class="f_Variables">resultat := Plancher (10,999)</span></p>
<p style="margin: 0px 0px 0px 37px;"><span class="f_Variables"># resultat vaut 10</span></p>
<p style="margin: 0px 0px 0px 37px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 37px;"><span class="f_Variables">resultat := Plancher (10)</span></p>
<p style="margin: 0px 0px 0px 37px;"><span class="f_Variables"># resultat vaut 10</span></p>
<p>&nbsp;</p>

</td></tr></table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p><span style="color: #000000;">Deze functie rond een getal naar onder af.</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 36px;"><span class="f_Variables" style="font-weight: bold;">Floor (waarde)</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Voorbeeld:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">result := Floor (10.3)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># resultaat is 10</span></p>
<p style="background: #fffff2;"><span style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">result := Floor (10.999)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># resultaat is 10</span></p>
<p style="background: #fffff2;"><span style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">result := Floor (10)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># resultaat is 10</span></p>
<p style="background: #fffff2;"><span style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">&nbsp;</span></p>

</td></tr></table>
</div>
</body>
</html>
