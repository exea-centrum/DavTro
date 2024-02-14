<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Polynomial","Polynome","Polynomiaal"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?polynome.php"; }
else { parent.quicksync('a2.4.1.9'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>Polynome</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="Polynome" />
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
     <a href="plancher.php">Previous</a>&nbsp;
     <a href="racine.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p class="p_Interligne"><span style="color: #000000;">This function computes the value of a polynomial expression, in the form n0 + n1*x + n2*x</span><span style="font-size: 8pt; color: #000000; vertical-align: super;">2</span><span style="color: #000000;"> + n3*x</span><span style="font-size: 8pt; color: #000000; vertical-align: super;">3</span><span style="color: #000000;"> ...</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Polynomial (x, number_of_degrees, n0, n1, ..., n_last)</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">result := Polynomial (10, 4, 3, 1, 2, 5, 6)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;"># </span><span class="f_Variables">result is now</span><span style="font-family: 'Courier New'; color: #0000ff;"> 3*10</span><span style="font-size: 8pt; font-family: 'Courier New'; color: #0000ff; vertical-align: super;">0</span><span style="font-family: 'Courier New'; color: #0000ff;"> + 1*10</span><span style="font-size: 8pt; font-family: 'Courier New'; color: #0000ff; vertical-align: super;">1</span><span style="font-family: 'Courier New'; color: #0000ff;"> + 2*10</span><span style="font-size: 8pt; font-family: 'Courier New'; color: #0000ff; vertical-align: super;">2</span><span style="font-family: 'Courier New'; color: #0000ff;"> + 5*10</span><span style="font-size: 8pt; font-family: 'Courier New'; color: #0000ff; vertical-align: super;">3</span><span style="font-family: 'Courier New'; color: #0000ff;"> + 6*10</span><span style="font-size: 8pt; font-family: 'Courier New'; color: #0000ff; vertical-align: super;">4</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># result is now 3*1 + 1*10 + 2*100 + 5*1000 + 6*10000, equal to 65213</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="468" style="width: 468px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Note:</span> </p>
<p style="margin: 0px 0px 0px 12px;">The number of parameters is variable, and equals the second parameter plus 2</p>
</td>
</tr>
</table>
</div>
<p>&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette fonction calcule la valeur d'un polynôme, sous la forme <span style="color: #000000;">n0 + n1*x + n2*x</span><span style="font-size: 8pt; color: #000000; vertical-align: super;">2</span><span style="color: #000000;"> + n3*x</span><span style="font-size: 8pt; color: #000000; vertical-align: super;">3</span><span style="color: #000000;"> ... </span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Polynome (x, dernier_degre, n0, n1, ..., n_dernier_degre)</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">resultat := Polynome (10, 4, 3, 1, 2, 5, 6)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;"># </span><span class="f_Variables">resultat vaut</span><span style="font-family: 'Courier New'; color: #0000ff;"> 3*10</span><span style="font-size: 8pt; font-family: 'Courier New'; color: #0000ff; vertical-align: super;">0</span><span style="font-family: 'Courier New'; color: #0000ff;"> + 1*10</span><span style="font-size: 8pt; font-family: 'Courier New'; color: #0000ff; vertical-align: super;">1</span><span style="font-family: 'Courier New'; color: #0000ff;"> + 2*10</span><span style="font-size: 8pt; font-family: 'Courier New'; color: #0000ff; vertical-align: super;">2</span><span style="font-family: 'Courier New'; color: #0000ff;"> + 5*10</span><span style="font-size: 8pt; font-family: 'Courier New'; color: #0000ff; vertical-align: super;">3</span><span style="font-family: 'Courier New'; color: #0000ff;"> + 6*10</span><span style="font-size: 8pt; font-family: 'Courier New'; color: #0000ff; vertical-align: super;">4</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># resultat vaut 3*1 + 1*10 + 2*100 + 5*1000 + 6*10000, soit 65213</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="468" style="width: 468px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarque:</span> </p>
<p style="margin: 0px 0px 0px 13px;">Le nombre de paramètre est variable, et est égal au second paramètre plus 2</p>
</td>
</tr>
</table>
</div>
<p>&nbsp;</p>

</td></tr></table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p class="p_Interligne"><span style="color: #000000;">Deze functie berekend de waarde van een polynomiale expressie, in de vorm van n0 + n1*x + n2*x</span><span style="font-size: 8pt; color: #000000; vertical-align: super;">2</span><span style="color: #000000;"> + n3*x</span><span style="font-size: 8pt; color: #000000; vertical-align: super;">3</span><span style="color: #000000;"> ...</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Polynomial (x, aantal_graden, n0, n1, ..., n_laatste)</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">result := Polynomial (10, 4, 3, 1, 2, 5, 6)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;"># </span><span class="f_Variables">resultaat is</span><span style="font-family: 'Courier New'; color: #0000ff;"> 3*10</span><span style="font-size: 8pt; font-family: 'Courier New'; color: #0000ff; vertical-align: super;">0</span><span style="font-family: 'Courier New'; color: #0000ff;"> + 1*10</span><span style="font-size: 8pt; font-family: 'Courier New'; color: #0000ff; vertical-align: super;">1</span><span style="font-family: 'Courier New'; color: #0000ff;"> + 2*10</span><span style="font-size: 8pt; font-family: 'Courier New'; color: #0000ff; vertical-align: super;">2</span><span style="font-family: 'Courier New'; color: #0000ff;"> + 5*10</span><span style="font-size: 8pt; font-family: 'Courier New'; color: #0000ff; vertical-align: super;">3</span><span style="font-family: 'Courier New'; color: #0000ff;"> + 6*10</span><span style="font-size: 8pt; font-family: 'Courier New'; color: #0000ff; vertical-align: super;">4</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># resultaat is 3*1 + 1*10 + 2*100 + 5*1000 + 6*10000, equal to 65213</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="468" style="width: 468px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Note:</span> </p>
<p style="margin: 0px 0px 0px 12px;">Het aantal parameters is variabel,en is gelijk aan de 2de parameter plus 2</p>
</td>
</tr>
</table>
</div>
<p>&nbsp;</span></p>

</td></tr></table>
</div>

</body>
</html>
