<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["False","Faux","Onwaar"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?faux.php"; }
else { parent.quicksync('a2.4.3.2'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>Faux</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="Faux ()" />
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
     <a href="existe.php">Previous</a>&nbsp;
     <a href="vrai.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>This function always returns 0.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">False ()</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">If a = False ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">  &nbsp;b := 1</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">Else</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">  &nbsp;b := 0</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">End If</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Add a to b only if a exists.</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Note:</span></p>
<p style="margin: 0px 0px 0px 12px;">The instruction <span class="f_Variables">If Not</span> a might be used instead of <span class="f_Variables">If a = False ()</span>.</p>
</td>
</tr>
</table>
</div>
<p>&nbsp;</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>Cette fonction renvoie toujours 0</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Faux ()</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Si a = Faux ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">   b := 1</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Sinon</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">   b := 0</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Fin Si</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p><span style="font-weight: bold; text-decoration: underline;">Remarque:</span></p>
<p>L' instruction <span class="f_Variables">Si Non a</span> ou <span class="f_Variables">Si a = 0 </span>pourraient être utilisées à la place de <span class="f_Variables">Si a = Faux ()</span>. </p>
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
<p>Deze functie geeft altijd de waarde 0 weer.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">False ()</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Voorbeeld:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">If a = False ()</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">  &nbsp;b := 1</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">Else</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">  &nbsp;b := 0</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">End If</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Voeg a toe aan b wanneer deze bestaat.</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Opmerking:</span></p>
<p style="margin: 0px 0px 0px 12px;">De instructie <span class="f_Variables">If Not</span> a kan tevens gebruikt worden in plaats van <span class="f_Variables">If a = False ()</span>.</p>
</td>
</tr>
</table>
</div>
<p>&nbsp;</p>

</td></tr></table>
</div>
</body>
</html>
