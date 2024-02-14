<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["True","Vrai","Waar"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?vrai.php"; }
else { parent.quicksync('a2.4.3.3'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>Vrai</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="Vrai ()" />
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
     <a href="faux.php">Previous</a>&nbsp;
     <a href="fonctions_trigonometriques.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>This function always returns 1.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">True ()</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">If a = True ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">  &nbsp;b := 1</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">Else</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">  &nbsp;b := 0</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">End If</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Note:</span></p>
<p style="margin: 0px 0px 0px 12px;">The instruction <span class="f_Variables">If a</span> might be used instead of <span class="f_Variables">If a = True ()</span>. However the meaning will be slightly different: <span class="f_Variables">If a</span> will be true if variable <span class="f_Variables">a</span> holds any value different of 0; <span class="f_Variables">If a = True ()</span> will be true only if <span class="f_Variables">a</span> has the value <span class="f_Variables">True()</span></p>
</td>
</tr>
</table>
</div>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>
<p><span style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette fonction renvoie toujours 1</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Vrai ()</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Si a = Vrai ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">   b := 1</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Sinon</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">   b := 0</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Fin Si</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p><span style="font-weight: bold; text-decoration: underline;">Remarque:</span></p>
<p>L'instruction <span class="f_Variables">Si a</span> peut remplacer <span class="f_Variables">Si a = Vrai ()</span>. Cependant la signification sera légèrement différente: <span class="f_Variables">Si a</span> renvoie vrai lorsque la variable <span class="f_Variables">a</span> contient une valeur différente de 0; Par contre, l'instruction <span class="f_Variables">Si a = Vrai ()</span> est uniquement vraie si&nbsp; <span class="f_Variables">a </span>contient une de ces 2 valeurs: <span style="color: #0000ff;">1 </span><span style="color: #00007f;">ou</span> <span class="f_Variables">Vrai()</span></p>
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
<p>Deze functie geeft steeds de waarde 1.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">True ()</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Voorbeeld:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">If a = True ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">  &nbsp;b := 1</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">Else</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">  &nbsp;b := 0</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">End If</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Note:</span></p>
<p style="margin: 0px 0px 0px 12px;">De instructie <span class="f_Variables">If a</span> kan gebruikt worden in plaats van <span class="f_Variables">If a = True ()</span>. Maar de bedoeling zal hier wel verschillend zijn: <span class="f_Variables">If a</span> zal waar zijn wanneer de variabele <span class="f_Variables">a</span> elke waarde verschillend van 0 bevat; <span class="f_Variables">If a = True ()</span> is waar,enkel wanneer <span class="f_Variables">a</span> de waarde <span class="f_Variables">True() heeft</span></p>
</td>
</tr>
</table>
</div>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>
<p><span style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">&nbsp;</span></p>

</td></tr></table>
</div>
</body>
</html>
