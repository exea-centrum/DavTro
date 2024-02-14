<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html><head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> <!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED","ESP"];
var WinProHelpPageName=["Arithmetic operators","Operateurs arithmétiques","Rekenkundige operatoren","Operadores aritméticos"];
WPlangInit(WinProHelpAvailableLanguages);
// Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?arithmetic_operators.php"; }
else { parent.quicksync('a2.2.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script><title>Operateurs arithmétiques</title>

<meta name="generator" content="Help &amp; Manual">
<meta name="keywords" content="Operateurs arithmétiques,Arithmétique,Addition,Soustraction,Multiplication,Division,Exposant">
<meta http-equiv="Content-Type" content="text/php; charset=ISO-8859-1">
<meta http-equiv="Content-Style-Type" content="text/css">
<link type="text/css" href="default.css" rel="stylesheet">
</head>

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
<a href="introduction.php">Top</a>&nbsp; <a href="operateurs.php">Previous</a>&nbsp; <a href="operateurs_dassignation.php">Next</a> </span>
</td>
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
<p>Arithmetic operators let you apply the 4 basic
operations, plus exponentiation.</p>
<p>&nbsp;</p>
<p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 1px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="border-style: solid; border-color: rgb(255, 255, 255) rgb(105, 105, 104) rgb(105, 105, 104) rgb(255, 255, 255); border-width: 1px;" align="center" border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Operator</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="151">
<p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Description</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 240px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="240">
<p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Example</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">+</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="151">
<p style="margin: 0px 0px 0px 17px;"><span style="color: rgb(0, 0, 0);">Addition</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 240px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="240">
<p style="margin: 0px 0px 0px 19px;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">1+1</span><span style="color: rgb(0, 0, 0);"> gives 2</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">-</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="151">
<p style="margin: 0px 0px 0px 17px;"><span style="color: rgb(0, 0, 0);">Subtraction</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 240px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="240">
<p style="margin: 0px 0px 0px 19px;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">2-1</span><span style="color: rgb(0, 0, 0);"> gives 1</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">*</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="151">
<p style="margin: 0px 0px 0px 17px;"><span style="color: rgb(0, 0, 0);">Multiplication</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 240px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="240">
<p style="margin: 0px 0px 0px 19px;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">2*2</span><span style="color: rgb(0, 0, 0);"> gives 4</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">/</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="151">
<p style="margin: 0px 0px 0px 17px;"><span style="color: rgb(0, 0, 0);">Division</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 240px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="240">
<p style="margin: 0px 0px 0px 19px;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">5/2</span><span style="color: rgb(0, 0, 0);"> gives 2.5</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">**</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="151">
<p style="margin: 0px 0px 0px 17px;"><span style="color: rgb(0, 0, 0);">Exponent</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 240px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="240">
<p style="margin: 0px 0px 0px 19px;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">2**3</span><span style="color: rgb(0, 0, 0);"> gives 8</span></p>
</td>
</tr>
</tbody>
</table>
</div>
<p style="margin: 0px 0px 14px;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>
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
<p style="text-align: center;">&nbsp;</p>
<p>Les opérateurs arithmétiques permettent d'effectuer les
4 opérations arithmétiques de base, ainsi que l'exponentiation.</p>
<p>&nbsp;</p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="border: 2px solid rgb(192, 192, 192); background-color: rgb(255, 247, 239); border-collapse: collapse;" align="center" bgcolor="#fff7ef" border="1" cellpadding="2" cellspacing="0">
<tbody>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span style="font-weight: bold;">Operateur</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 151px;" width="151">
<p style="text-align: center;"><span style="font-weight: bold;">Description</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 132px;" width="132">
<p style="text-align: center;"><span style="font-weight: bold;">Explication</span></p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">+</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 151px;" width="151">
<p style="text-align: center;">Addition</p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 132px;" width="132">
<p style="margin: 0px 0px 0px 13px;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">1+1</span>
donne 2</p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">-</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 151px;" width="151">
<p style="text-align: center;">Soustraction</p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 132px;" width="132">
<p style="margin: 0px 0px 0px 13px;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">2-1</span>
donne 1</p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">*</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 151px;" width="151">
<p style="text-align: center;">Multiplication</p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 132px;" width="132">
<p style="margin: 0px 0px 0px 13px;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">2*3</span>
donne 6</p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">/</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 151px;" width="151">
<p style="text-align: center;">Division</p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 132px;" width="132">
<p style="margin: 0px 0px 0px 13px;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">5/2</span>
donne 2.5</p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">**</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 151px;" width="151">
<p style="text-align: center;">Exposant</p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 132px;" width="132">
<p style="margin: 0px 0px 0px 13px;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">2**3</span>
donne 8</p>
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
<p>Rekenkundige operatoren staan u toe om de 4 basis
functies toe te passen , plus machten </p>
<p>&nbsp;</p>
<p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 1px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="border-style: solid; border-color: rgb(255, 255, 255) rgb(105, 105, 104) rgb(105, 105, 104) rgb(255, 255, 255); border-width: 1px;" align="center" border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Operator</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="151">
<p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Beschrijving</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 240px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="240">
<p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Voorbeeld</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">+</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="151">
<p style="margin: 0px 0px 0px 17px;"><span style="color: rgb(0, 0, 0);">Optellen</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 240px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="240">
<p style="margin: 0px 0px 0px 19px;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">1+1</span><span style="color: rgb(0, 0, 0);"> uitkomst 2</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">-</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="151">
<p style="margin: 0px 0px 0px 17px;"><span style="color: rgb(0, 0, 0);">Aftrekken</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 240px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="240">
<p style="margin: 0px 0px 0px 19px;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">2-1</span><span style="color: rgb(0, 0, 0);"> uitkomst 1</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">*</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="151">
<p style="margin: 0px 0px 0px 17px;"><span style="color: rgb(0, 0, 0);">Vermenigvuldigen</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 240px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="240">
<p style="margin: 0px 0px 0px 19px;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">2*2</span><span style="color: rgb(0, 0, 0);"> uitkomst 4</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">/</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="151">
<p style="margin: 0px 0px 0px 17px;"><span style="color: rgb(0, 0, 0);">Delen</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 240px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="240">
<p style="margin: 0px 0px 0px 19px;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">5/2</span><span style="color: rgb(0, 0, 0);"> uitkomst 2.5</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">**</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="151">
<p style="margin: 0px 0px 0px 17px;"><span style="color: rgb(0, 0, 0);">Macht</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 240px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="240">
<p style="margin: 0px 0px 0px 19px;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">2**3</span><span style="color: rgb(0, 0, 0);"> uitkomst 8</span></p>
</td>
</tr>
</tbody>
</table>
</div>
<p style="margin: 0px 0px 14px;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>
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
<p></p><p><span style="color: rgb(0, 0, 0);">Los operadores aritméticos permiten aplicar las 4 operaciones básicas, más el exponente.</span></p>
<p><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;"><table style="border: medium none ; background-color: rgb(255, 247, 239); border-collapse: collapse;" align="center" bgcolor="#fff7ef" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Operador</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 151px;" valign="top" width="151"><p><span style="font-weight: bold; color: rgb(0, 0, 0);">Descripción</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 340px;" valign="top" width="340"><p><span style="font-weight: bold; color: rgb(0, 0, 0);">Ejemplo</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">+</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 151px;" valign="top" width="151"><p><span style="color: rgb(0, 0, 0);">Adicíon</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 340px;" valign="top" width="340"><p><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">1+1</span><span style="color: rgb(0, 0, 0);"> = 2</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">-</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 151px;" valign="top" width="151"><p><span style="color: rgb(0, 0, 0);">Substracción </span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 340px;" valign="top" width="340"><p><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">2-1</span><span style="color: rgb(0, 0, 0);"> = 1</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">*</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 151px;" valign="top" width="151"><p><span style="color: rgb(0, 0, 0);">Multiplicación</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 340px;" valign="top" width="340"><p><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">2*2</span><span style="color: rgb(0, 0, 0);"> = 4</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">/</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 151px;" valign="top" width="151"><p><span style="color: rgb(0, 0, 0);">División</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 340px;" valign="top" width="340"><p><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">5/2</span><span style="color: rgb(0, 0, 0);"> = 2.5</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">**</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 151px;" valign="top" width="151"><p><span style="color: rgb(0, 0, 0);">Exponente</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 340px;" valign="top" width="340"><p><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">2**3</span><span style="color: rgb(0, 0, 0);"> = 8</span></p>
</td>
</tr>
</tbody></table>
</div>
<br></td>
</tr>
</tbody>
</table>
</div>
</body></html>