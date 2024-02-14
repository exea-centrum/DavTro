<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html><head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> <!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED","ESP"];
var WinProHelpPageName=["Logical operators","Opérateurs logiques","Logische operatoren","Operadores lógicos"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?operateurs_logiques.php"; }
else { parent.quicksync('a2.2.3'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script><title>Opérateurs logiques</title>

<meta name="generator" content="Help &amp; Manual">
<meta name="keywords" content="Opérateurs logique,Logique,Et,Ou,Ou Excl,Ou exclusif,Exclusif,Non,Ou inclusif,Inclusif">
<meta http-equiv="Content-Type" content="text/php; charset=ISO-8859-1">
<meta http-equiv="Content-Style-Type" content="text/css">
<link type="text/css" href="default.css" rel="stylesheet"></head>
<body style="margin: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;" onload="AddTitleAndLangFlags();highlight();">
<div id="hmpopupDiv" style="visibility: hidden; position: absolute; z-index: 1000;"></div>
<table bgcolor="#ff8000" border="0" cellpadding="5" cellspacing="0" width="100%">
<tbody>
<tr valign="middle">
<td align="left">
<p class="p_Heading1"><span class="f_Heading1" style="font-size: 6pt; font-weight: normal;">&nbsp;</span></p>
<p class="p_Heading1"><span id="titlepage" class="f_Heading1"></span></p>
</td>
<td align="center">
<div id="langflags"></div>
</td>
<td align="right"> <span style="font-size: 9pt;">
<a href="introduction.php">Top</a>&nbsp; <a href="operateurs_dassignation.php">Previous</a>&nbsp;
<a href="operateurs_de_comparaison.php">Next</a>
</span> </td>
</tr>
</tbody>
</table>
<div class="ENG">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%">
<tbody>
<tr valign="top">
<td align="left">
<p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p>These operators let you combine logical values (true or
false) together, and provide a <span style="font-weight: bold;">logical
result</span> (<span style="font-weight: bold;">true</span>
or <span style="font-weight: bold;">false</span>).
These operators follow the rules of the&nbsp;<span id="result_box" class="short_text" lang="en"><span class="hps"><span style="font-weight: bold;">Boolean</span> </span></span><span style="font-weight: bold;">algebra</span>.</p>
<p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 1px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="border-style: solid; border-color: rgb(218, 218, 218) rgb(105, 105, 104) rgb(105, 105, 104) rgb(218, 218, 218); border-width: 1px;" align="center" border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Operator</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Description</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 378px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="378">
<p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Example</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113">
<p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">and</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">and</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 378px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="378">
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is true and b is true,
then </span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a
</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">and</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
b</span><span style="color: rgb(0, 0, 0);"> is</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> true</span></p>
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is true and b is false,
then </span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a
</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">and</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
b</span><span style="color: rgb(0, 0, 0);"> is </span><span style="font-weight: bold; color: rgb(0, 0, 0);">false</span></p>
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is false and b is true,
then </span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a
</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">and</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
b</span><span style="color: rgb(0, 0, 0);"> is</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> false</span></p>
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is false and b is false,
then </span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a
</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">and</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
b</span><span style="color: rgb(0, 0, 0);"> is</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> false</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113">
<p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">or</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">inclusive or</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 378px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="378">
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is true and b is true,
then </span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a
</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">or</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
b</span><span style="color: rgb(0, 0, 0);"> is</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> true</span></p>
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is true and b is false,
then </span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a
</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">or</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
b</span><span style="color: rgb(0, 0, 0);"> is</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> true</span></p>
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is false and b is true,
then </span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a
</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">or</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
b</span><span style="color: rgb(0, 0, 0);"> is </span><span style="font-weight: bold; color: rgb(0, 0, 0);">true</span></p>
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is false and b is false,
then</span><span style="font-size: 11pt; font-weight: bold; color: rgb(0, 0, 255);">
</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a
</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">or</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
b</span><span style="color: rgb(0, 0, 0);"> is</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> false</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113">
<p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">xor</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">exclusive or</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 378px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="378">
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is true and b is true,
then </span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a
</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">xor</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
b</span><span style="color: rgb(0, 0, 0);"> is</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> false</span></p>
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is true and b is false,
then </span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a
</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">xor</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
b</span><span style="color: rgb(0, 0, 0);"> is</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> true</span></p>
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is false and b is true,
then </span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a
</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">xor</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
b</span><span style="color: rgb(0, 0, 0);"> is </span><span style="font-weight: bold; color: rgb(0, 0, 0);">true</span></p>
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is false and b is false,
then </span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a
</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">xor</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
b</span><span style="color: rgb(0, 0, 0);"> is </span><span style="font-weight: bold; color: rgb(0, 0, 0);">false</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113">
<p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">not</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">not</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 378px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="378">
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is true, then </span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">not</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
a</span><span style="color: rgb(0, 0, 0);"> is </span><span style="font-weight: bold; color: rgb(0, 0, 0);">false</span></p>
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is false, then </span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">not</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
a</span><span style="color: rgb(0, 0, 0);"> is </span><span style="font-weight: bold; color: rgb(0, 0, 0);">true</span></p>
</td>
</tr>
</tbody>
</table>
</div>
<p style="margin: 0px 0px 0px 1px; text-align: center;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 24px; padding: 0px; text-align: center; text-indent: -24px;">
<table style="background-color: rgb(191, 215, 191); border-collapse: collapse;" align="center" bgcolor="#bfd7bf" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(0, 0, 0); width: 584px;" width="584">
<p style="margin: 0px 0px 0px 16px;"><span style="font-weight: bold; text-decoration: underline;">Notes:</span></p>
<div style="margin: 0px 0px 0px 16px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td>
<td>The opposite of <span class="f_Variables">a </span><span class="f_Variables" style="font-weight: bold;">and</span><span class="f_Variables"> b</span> is <span class="f_Variables">(</span><span class="f_Variables" style="font-weight: bold;">not</span><span class="f_Variables"> a) </span><span class="f_Variables" style="font-weight: bold;">or</span><span class="f_Variables"> (</span><span class="f_Variables" style="font-weight: bold;">not</span><span class="f_Variables"> b)</span></td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 16px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td>
<td>The opposite of <span class="f_Variables">a </span><span class="f_Variables" style="font-weight: bold;">or</span><span class="f_Variables"> b</span> is <span class="f_Variables">(</span><span class="f_Variables" style="font-weight: bold;">not</span><span class="f_Variables"> a) </span><span class="f_Variables" style="font-weight: bold;">and</span><span class="f_Variables"> (</span><span class="f_Variables" style="font-weight: bold;">not</span><span class="f_Variables"> b)</span><span style="color: rgb(0, 0, 0);"> </span>
<p></p>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div class="FRA">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%">
<tbody>
<tr valign="top">
<td align="left">
<p>&nbsp;</p>
<p>Ces opérateurs permettent de combiner des valeurs
logiques (vraies ou fausses) entre elles, et fournissent un <span style="font-weight: bold;">résultat logique</span> (<span style="font-weight: bold;">vrai</span> ou <span style="font-weight: bold;">faux</span>). Ces
opérateurs obéissent à l'<span style="font-weight: bold;">algèbre
de Boole</span>.</p>
<p>&nbsp;</p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="border: 2px solid rgb(192, 192, 192); background-color: rgb(255, 247, 239); border-collapse: collapse;" align="center" bgcolor="#fff7ef" border="1" cellpadding="2" cellspacing="0">
<tbody>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span style="font-weight: bold;">Operateur</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span style="font-weight: bold;">Description</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 378px;" width="378">
<p style="text-align: center;"><span style="font-weight: bold;">Explication</span></p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span style="font-size: 5pt;"> </span><span style="font-weight: bold; color: rgb(0, 0, 255);">Et</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span style="font-size: 5pt;"> </span>et</p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 378px;" width="378">
<p style="margin: 0px 0px 0px 13px;">si <span style="color: rgb(0, 0, 255);">a</span> est vrai et <span style="color: rgb(0, 0, 255);">b</span> est vrai,
alors <span style="color: rgb(0, 0, 255);">a</span>
<span style="font-weight: bold; color: rgb(0, 0, 255);">Et</span><span style="color: rgb(0, 0, 255);"> b</span> est <span style="font-weight: bold;">vrai </span></p>
<p style="margin: 0px 0px 0px 13px;">si <span style="color: rgb(0, 0, 255);">a</span> est vrai et <span style="color: rgb(0, 0, 255);">b</span> est faux,
alors <span style="color: rgb(0, 0, 255);">a</span>
<span style="font-weight: bold; color: rgb(0, 0, 255);">Et</span><span style="color: rgb(0, 0, 255);"> b</span> est <span style="font-weight: bold;">faux </span></p>
<p style="margin: 0px 0px 0px 13px;">si <span style="color: rgb(0, 0, 255);">a</span> est faux et <span style="color: rgb(0, 0, 255);">b</span> est vrai,
alors <span style="color: rgb(0, 0, 255);">a</span>
<span style="font-weight: bold; color: rgb(0, 0, 255);">Et</span><span style="color: rgb(0, 0, 255);"> b</span> est <span style="font-weight: bold;">faux </span></p>
<p style="margin: 0px 0px 0px 13px;">si <span style="color: rgb(0, 0, 255);">a</span> est faux et <span style="color: rgb(0, 0, 255);">b</span> est faux,
alors <span style="color: rgb(0, 0, 255);">a</span>
<span style="font-weight: bold; color: rgb(0, 0, 255);">Et</span><span style="color: rgb(0, 0, 255);"> b</span> est <span style="font-weight: bold;">faux </span></p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span style="font-size: 5pt;"> </span><span style="font-weight: bold; color: rgb(0, 0, 255);">Ou</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span style="font-size: 5pt;"> </span>ou inclusif</p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 378px;" width="378">
<p style="margin: 0px 0px 0px 13px;">si <span style="color: rgb(0, 0, 255);">a</span> est vrai et <span style="color: rgb(0, 0, 255);">b</span> est vrai,
alors <span style="color: rgb(0, 0, 255);">a</span>
<span style="font-weight: bold; color: rgb(0, 0, 255);">Ou</span><span style="color: rgb(0, 0, 255);"> b</span> est <span style="font-weight: bold;">vrai </span></p>
<p style="margin: 0px 0px 0px 13px;">si <span style="color: rgb(0, 0, 255);">a</span> est vrai et <span style="color: rgb(0, 0, 255);">b</span> est vrai,
alors <span style="color: rgb(0, 0, 255);">a</span>
<span style="font-weight: bold; color: rgb(0, 0, 255);">Ou</span><span style="color: rgb(0, 0, 255);"> b</span> est <span style="font-weight: bold;">vrai </span></p>
<p style="margin: 0px 0px 0px 13px;">si <span style="color: rgb(0, 0, 255);">a</span> est vrai et <span style="color: rgb(0, 0, 255);">b</span> est vrai,
alors <span style="color: rgb(0, 0, 255);">a</span>
<span style="font-weight: bold; color: rgb(0, 0, 255);">Ou</span><span style="color: rgb(0, 0, 255);"> b</span> est <span style="font-weight: bold;">vrai </span></p>
<p style="margin: 0px 0px 0px 13px;">si <span style="color: rgb(0, 0, 255);">a</span> est faux et <span style="color: rgb(0, 0, 255);">b</span> est faux,
alors <span style="color: rgb(0, 0, 255);">a</span>
<span style="font-weight: bold; color: rgb(0, 0, 255);">Ou</span><span style="color: rgb(0, 0, 255);"> b</span> est <span style="font-weight: bold;">faux </span></p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span style="font-size: 5pt;"> </span><span style="font-weight: bold; color: rgb(0, 0, 255);">Ou Excl</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span style="font-size: 5pt;"> </span>ou exclusif</p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 378px;" width="378">
<p style="margin: 0px 0px 0px 13px;">si <span style="color: rgb(0, 0, 255);">a</span> est vrai et <span style="color: rgb(0, 0, 255);">b</span> est vrai,
alors <span style="color: rgb(0, 0, 255);">a</span>
<span style="font-weight: bold; color: rgb(0, 0, 255);">Ou
Excl</span><span style="color: rgb(0, 0, 255);"> b</span>
est <span style="font-weight: bold;">faux </span></p>
<p style="margin: 0px 0px 0px 13px;">si <span style="color: rgb(0, 0, 255);">a</span> est vrai et <span style="color: rgb(0, 0, 255);">b</span> est faux,
alors <span style="color: rgb(0, 0, 255);">a</span>
<span style="font-weight: bold; color: rgb(0, 0, 255);">Ou
Excl</span><span style="color: rgb(0, 0, 255);"> b</span>
est <span style="font-weight: bold;">vrai </span></p>
<p style="margin: 0px 0px 0px 13px;">si <span style="color: rgb(0, 0, 255);">a</span> est faux et <span style="color: rgb(0, 0, 255);">b</span> est vrai,
alors <span style="color: rgb(0, 0, 255);">a</span>
<span style="font-weight: bold; color: rgb(0, 0, 255);">Ou
Excl</span><span style="color: rgb(0, 0, 255);"> b</span>
est <span style="font-weight: bold;">vrai </span></p>
<p style="margin: 0px 0px 0px 13px;">si <span style="color: rgb(0, 0, 255);">a</span> est faux et <span style="color: rgb(0, 0, 255);">b</span> est faux,
alors <span style="color: rgb(0, 0, 255);">a</span>
<span style="font-weight: bold; color: rgb(0, 0, 255);">Ou
Excl</span><span style="color: rgb(0, 0, 255);"> b</span>
est <span style="font-weight: bold;">faux </span></p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 255);">Non</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span style="font-size: 5pt;"> </span>non</p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 378px;" width="378">
<p style="margin: 0px 0px 0px 13px;">si <span style="color: rgb(0, 0, 255);">a</span> est vrai,
alors <span style="font-weight: bold; color: rgb(0, 0, 255);">Non
a</span> est <span style="font-weight: bold;">faux</span></p>
<p style="margin: 0px 0px 0px 13px;">si <span style="color: rgb(0, 0, 255);">a</span> est faux,
alors <span style="font-weight: bold; color: rgb(0, 0, 255);">Non
a</span> est <span style="font-weight: bold;">vrai</span></p>
</td>
</tr>
</tbody>
</table>
</div>
<p style="margin: 0px 0px 0px 24px; text-align: center; text-indent: -24px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px; text-align: center; text-indent: -24px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px; text-align: center; text-indent: -24px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 24px; padding: 0px; text-align: center; text-indent: -24px;">
<table style="background-color: rgb(191, 215, 191); border-collapse: collapse;" align="center" bgcolor="#bfd7bf" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(0, 0, 0); width: 605px;" width="605">
<p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarques:</span></p>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 11pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td>
<td>Le contraire de <span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a
Et b</span> est <span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">(Non
a) Ou (Non b)</span></td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 11pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td>
<td>Le contraire de <span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a
Ou b</span> est <span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">(Non
a) Et (Non b)</span>
<p></p>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<p>&nbsp;</p>
</td>
</tr>
</tbody>
</table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%">
<tbody>
<tr valign="top">
<td align="left">
<p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p>Deze operatoren laat u toe meerdere logische waarden
samen te combineren (waar of onwaar), en u een logisch resultaat <span style="font-weight: bold;">te geven</span> (<span style="font-weight: bold;">waar</span> of <span style="font-weight: bold;">onwaar</span>). Deze
operatoren volgen de regels van&nbsp;<span id="result_box" class="short_text" lang="nl"><span class="hps"><span style="font-weight: bold;">Booleaanse</span> </span></span><span style="font-weight: bold;">algebra</span>.</p>
<p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 1px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="border-style: solid; border-color: rgb(218, 218, 218) rgb(105, 105, 104) rgb(105, 105, 104) rgb(218, 218, 218); border-width: 1px;" align="center" border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Operator</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Beschrijving</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 378px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="378">
<p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Voorbeeld</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113">
<p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">and</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">and</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 378px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="378">
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is true and b is true,
then </span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a
</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">and</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
b</span><span style="color: rgb(0, 0, 0);"> is</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> true</span></p>
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is true and b is false,
then </span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a
</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">and</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
b</span><span style="color: rgb(0, 0, 0);"> is </span><span style="font-weight: bold; color: rgb(0, 0, 0);">false</span></p>
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is false and b is true,
then </span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a
</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">and</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
b</span><span style="color: rgb(0, 0, 0);"> is</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> false</span></p>
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is false and b is false,
then </span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a
</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">and</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
b</span><span style="color: rgb(0, 0, 0);"> is</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> false</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113">
<p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">or</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">inclusive or</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 378px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="378">
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is true and b is true,
then </span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a
</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">or</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
b</span><span style="color: rgb(0, 0, 0);"> is</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> true</span></p>
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is true and b is false,
then </span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a
</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">or</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
b</span><span style="color: rgb(0, 0, 0);"> is</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> true</span></p>
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is false and b is true,
then </span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a
</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">or</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
b</span><span style="color: rgb(0, 0, 0);"> is </span><span style="font-weight: bold; color: rgb(0, 0, 0);">true</span></p>
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is false and b is false,
then</span><span style="font-size: 11pt; font-weight: bold; color: rgb(0, 0, 255);">
</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a
</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">or</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
b</span><span style="color: rgb(0, 0, 0);"> is</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> false</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113">
<p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">xor</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">exclusive or</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 378px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="378">
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is true and b is true,
then </span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a
</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">xor</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
b</span><span style="color: rgb(0, 0, 0);"> is</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> false</span></p>
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is true and b is false,
then </span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a
</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">xor</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
b</span><span style="color: rgb(0, 0, 0);"> is</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> true</span></p>
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is false and b is true,
then </span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a
</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">xor</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
b</span><span style="color: rgb(0, 0, 0);"> is </span><span style="font-weight: bold; color: rgb(0, 0, 0);">true</span></p>
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is false and b is false,
then </span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a
</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">xor</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
b</span><span style="color: rgb(0, 0, 0);"> is </span><span style="font-weight: bold; color: rgb(0, 0, 0);">false</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113">
<p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">not</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">not</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 378px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="378">
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is true, then </span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">not</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
a</span><span style="color: rgb(0, 0, 0);"> is </span><span style="font-weight: bold; color: rgb(0, 0, 0);">false</span></p>
<p style="margin: 0px 0px 0px 15px;"><span style="color: rgb(0, 0, 0);">if a is false, then </span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">not</span><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">
a</span><span style="color: rgb(0, 0, 0);"> is </span><span style="font-weight: bold; color: rgb(0, 0, 0);">true</span></p>
</td>
</tr>
</tbody>
</table>
</div>
<p style="margin: 0px 0px 0px 1px; text-align: center;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 24px; padding: 0px; text-align: center; text-indent: -24px;">
<table style="background-color: rgb(191, 215, 191); border-collapse: collapse;" align="center" bgcolor="#bfd7bf" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(0, 0, 0); width: 584px;" width="584">
<p style="margin: 0px 0px 0px 16px;"><span style="font-weight: bold; text-decoration: underline;">Notes:</span></p>
<div style="margin: 0px 0px 0px 16px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td>
<td>The opposite of <span class="f_Variables">a </span><span class="f_Variables" style="font-weight: bold;">and</span><span class="f_Variables"> b</span> is <span class="f_Variables">(</span><span class="f_Variables" style="font-weight: bold;">not</span><span class="f_Variables"> a) </span><span class="f_Variables" style="font-weight: bold;">or</span><span class="f_Variables"> (</span><span class="f_Variables" style="font-weight: bold;">not</span><span class="f_Variables"> b)</span></td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 16px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td>
<td>The opposite of <span class="f_Variables">a </span><span class="f_Variables" style="font-weight: bold;">or</span><span class="f_Variables"> b</span> is <span class="f_Variables">(</span><span class="f_Variables" style="font-weight: bold;">not</span><span class="f_Variables"> a) </span><span class="f_Variables" style="font-weight: bold;">and</span><span class="f_Variables"> (</span><span class="f_Variables" style="font-weight: bold;">not</span><span class="f_Variables"> b)</span><span style="color: rgb(0, 0, 0);"> </span>
<p></p>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div class="ESP">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%">
<tbody>
<tr valign="top">
<td align="left">
<p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p><span style="color: rgb(0, 0, 0);">Estos operadores permiten combinar valores lógicos (verdaderos o falsos) entre ellos, y proporcionan </span><span style="font-style: italic; font-weight: bold; color: rgb(0, 0, 0);">un resultado lógico</span><span style="color: rgb(0, 0, 0);"> (</span><span style="font-style: italic; font-weight: bold; color: rgb(0, 0, 0);">verdadero</span><span style="color: rgb(0, 0, 0);"> o </span><span style="font-style: italic; font-weight: bold; color: rgb(0, 0, 0);">falso</span><span style="color: rgb(0, 0, 0);">). Estos operadores siguen las reglas del </span><span style="font-weight: bold; color: rgb(0, 0, 0);">álgebra de Boole</span><span style="color: rgb(0, 0, 0);">.</span></p>
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<p><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;"><table style="border: medium none ; background-color: rgb(255, 247, 239); border-collapse: collapse;" align="center" bgcolor="#fff7ef" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Operador</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p><span style="font-weight: bold; color: rgb(0, 0, 0);">Descripción</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 435px;" valign="top" width="435"><p><span style="font-weight: bold; color: rgb(0, 0, 0);">Ejemplo</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">&amp;</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p><span style="color: rgb(0, 0, 0);">y</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 435px;" valign="top" width="435"><p><span style="color: rgb(0, 0, 0);">si a es </span><span style="color: rgb(153, 51, 0);">verdadero</span><span style="color: rgb(0, 0, 0);"> y si b es </span><span style="color: rgb(153, 51, 0);">verdadero</span><span style="color: rgb(0, 0, 0);"> entonces </span><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">a &amp; b</span><span style="color: rgb(0, 0, 0);"> es </span><span style="font-weight: bold; color: rgb(153, 51, 0);">verdadero</span></p>
<p><span style="color: rgb(0, 0, 0);">si a es </span><span style="color: rgb(153, 51, 0);">verdadero</span><span style="color: rgb(0, 0, 0);"> y si b es </span><span style="color: rgb(0, 0, 127);">falso</span><span style="color: rgb(0, 0, 0);">, entonces </span><span style="font-weight: bold; color: rgb(0, 0, 255);">a &amp; b</span><span style="color: rgb(0, 0, 0);"> es </span><span style="font-weight: bold; color: rgb(0, 0, 0);">falso</span></p>
<p><span style="color: rgb(0, 0, 0);">si a es </span><span style="color: rgb(0, 0, 127);">falso</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> </span><span style="color: rgb(0, 0, 0);">y si b es </span><span style="color: rgb(153, 51, 0);">verdadero,</span><span style="color: rgb(0, 0, 0);"> entonces </span><span style="font-weight: bold; color: rgb(0, 0, 255);">a &amp; b</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> </span><span style="color: rgb(0, 0, 0);">es </span><span style="font-weight: bold; color: rgb(0, 0, 0);">falso</span></p>
<p><span style="color: rgb(0, 0, 0);">si a es </span><span style="color: rgb(0, 0, 127);">falso</span><span style="color: rgb(0, 0, 0);"> y si b es </span><span style="color: rgb(0, 0, 127);">falso</span><span style="color: rgb(0, 0, 0);">, entonces </span><span style="font-weight: bold; color: rgb(0, 0, 255);">a &amp; b</span><span style="color: rgb(0, 0, 0);"> es </span><span style="font-weight: bold; color: rgb(0, 0, 0);">falso</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">O</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p><span style="color: rgb(0, 0, 0);">O inclusivo</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 435px;" valign="top" width="435"><p><span style="color: rgb(0, 0, 0);">si a es </span><span style="color: rgb(153, 51, 0);">verdadero</span><span style="color: rgb(0, 0, 0);"> y si b es </span><span style="color: rgb(153, 51, 0);">verdadero,</span><span style="color: rgb(0, 0, 0);"> entonces </span><span style="font-weight: bold; color: rgb(0, 0, 255);">a O b</span><span style="color: rgb(0, 0, 0);"> es </span><span style="font-weight: bold; color: rgb(153, 51, 0);">verdadero</span></p>
<p><span style="color: rgb(0, 0, 0);">si a es </span><span style="color: rgb(153, 51, 0);">verdadero</span><span style="color: rgb(0, 0, 0);"> y si b es </span><span style="color: rgb(0, 0, 127);">falso</span><span style="color: rgb(0, 0, 0);">, entonces </span><span style="font-weight: bold; color: rgb(0, 0, 255);">a O b</span><span style="color: rgb(0, 0, 0);"> es </span><span style="font-weight: bold; color: rgb(153, 51, 0);">verdadero</span></p>
<p><span style="color: rgb(0, 0, 0);">si a es </span><span style="color: rgb(0, 0, 127);">falso</span><span style="color: rgb(0, 0, 0);"> y si b es </span><span style="color: rgb(153, 51, 0);">verdadero,</span><span style="color: rgb(0, 0, 0);"> entonces </span><span style="font-weight: bold; color: rgb(0, 0, 255);">a O b</span><span style="color: rgb(0, 0, 0);"> es </span><span style="font-weight: bold; color: rgb(153, 51, 0);">verdadero</span></p>
<p><span style="color: rgb(0, 0, 0);">si a es </span><span style="color: rgb(0, 0, 127);">falso</span><span style="color: rgb(0, 0, 0);"> y si b es </span><span style="color: rgb(0, 0, 127);">falso</span><span style="color: rgb(0, 0, 0);">, entonces </span><span style="font-weight: bold; color: rgb(0, 0, 255);">a O b</span><span style="color: rgb(0, 0, 0);"> es </span><span style="font-weight: bold; color: rgb(0, 0, 0);">falso</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">O Exl</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p><span style="color: rgb(0, 0, 0);">O exclusivo &nbsp; &nbsp; &nbsp;  </span></p>
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 435px;" valign="top" width="435"><p><span style="color: rgb(0, 0, 0);">si a es </span><span style="color: rgb(153, 51, 0);">verdadero</span><span style="color: rgb(0, 0, 0);"> y si b es </span><span style="color: rgb(153, 51, 0);">verdadero,</span><span style="color: rgb(0, 0, 0);"> entonces </span><span style="font-weight: bold; color: rgb(0, 0, 255);">a O Excl b</span><span style="color: rgb(0, 0, 0);"> es</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> falso</span></p>
<p><span style="color: rgb(0, 0, 0);">si a es </span><span style="color: rgb(153, 51, 0);">verdadero</span><span style="color: rgb(0, 0, 0);"> y si b es </span><span style="color: rgb(0, 0, 127);">falso</span><span style="color: rgb(0, 0, 0);">, entonces </span><span style="font-weight: bold; color: rgb(0, 0, 255);">a O Excl b</span><span style="color: rgb(0, 0, 0);"> es </span><span style="font-weight: bold; color: rgb(153, 51, 0);">verdadero</span></p>
<p><span style="color: rgb(0, 0, 0);">si a es</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> </span><span style="color: rgb(0, 0, 127);">falso</span><span style="color: rgb(0, 0, 0);"> y si b es</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> </span><span style="color: rgb(153, 51, 0);">verdadero</span><span style="font-weight: bold; color: rgb(153, 51, 0);">,</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> </span><span style="color: rgb(0, 0, 0);">entonces</span><span style="font-weight: bold; color: rgb(0, 0, 255);"> a O Excl b</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> </span><span style="color: rgb(0, 0, 0);">es</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> </span><span style="font-weight: bold; color: rgb(153, 51, 0);">verdadero</span></p>
<p><span style="color: rgb(0, 0, 0);">si a es </span><span style="color: rgb(0, 0, 127);">falso</span><span style="color: rgb(0, 0, 0);"> y si b es </span><span style="color: rgb(0, 0, 127);">falso</span><span style="font-weight: bold; color: rgb(0, 0, 0);">,</span><span style="color: rgb(0, 0, 0);"> entonces </span><span style="font-weight: bold; color: rgb(0, 0, 255);">a O Excl b</span><span style="color: rgb(0, 0, 0);"> es </span><span style="font-weight: bold; color: rgb(0, 0, 0);">falso</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">No</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p><span style="color: rgb(0, 0, 0);">No</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 435px;" valign="top" width="435"><p><span style="color: rgb(0, 0, 0);">si a es </span><span style="color: rgb(153, 51, 0);">verdadero,</span><span style="color: rgb(0, 0, 0);"> entonces </span><span style="font-weight: bold; color: rgb(0, 0, 255);">no a</span><span style="color: rgb(0, 0, 0);"> es </span><span style="font-weight: bold; color: rgb(0, 0, 0);">falso</span></p>
<p><span style="color: rgb(0, 0, 0);">si a es </span><span style="color: rgb(0, 0, 127);">falso</span><span style="color: rgb(0, 0, 0);">, entonces </span><span style="font-weight: bold; color: rgb(0, 0, 255);">no a</span><span style="color: rgb(0, 0, 0);"> es </span><span style="font-weight: bold; color: rgb(153, 51, 0);">verdadero</span></p>
</td>
</tr>
</tbody></table>
</div>
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px; text-align: center; text-indent: -24px;"><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 35px; padding: 0px; text-align: center; text-indent: 0px;"><table style="border: medium none ; background-color: rgb(191, 215, 191); border-collapse: collapse;" align="center" bgcolor="#bfd7bf" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 617px;" valign="top" width="617"><p><span style="font-weight: bold; color: rgb(0, 0, 0); text-decoration: underline;">Observación:</span></p>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;"><table style="border: medium none ;" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="width: 13px;" valign="top" width="13"><p><span style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></p>
</td>
<td valign="top"><p><span style="color: rgb(0, 0, 0);">El contrario de </span><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">a &amp; b</span><span style="color: rgb(0, 0, 0);"> es </span><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">(No a) o (No b)</span></p>
</td>
</tr>
</tbody></table>
</div>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;"><table style="border: medium none ;" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="width: 13px;" valign="top" width="13"><p><span style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></p>
</td>
<td valign="top"><p><span style="color: rgb(0, 0, 0);">El contrario de </span><span style="font-weight: bold; color: rgb(0, 0, 255);">a O b</span><span style="color: rgb(0, 0, 0);"> es </span><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">(No a) &amp; (No b)</span></p>
</td>
</tr>
</tbody></table>
</div>
</td>
</tr>
</tbody></table>
</div>

<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<p><span style="color: rgb(0, 0, 0);"></span></p>
<span style="color: rgb(0, 0, 0);"></span><p></p></td></tr></tbody></table></div>
</body></html>