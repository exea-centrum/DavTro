<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html><head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED","ESP"];
var WinProHelpPageName=["Assignment operators","Operateurs d'assignation","Opdracht operatoren","Operadores de asignación"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame. 
if(top.frames.length==0) { top.location.href="index.php?operateurs_dassignation.php"; }
else { parent.quicksync('a2.2.2'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>


<title>Operateurs d'assignation</title><meta name="generator" content="Help &amp; Manual">
<meta name="keywords" content="Opérateurs d'assignation,Assignation,Variable,Addition,Soustraction,Multiplication,Division,Exposant">
<meta http-equiv="Content-Type" content="text/php; charset=ISO-8859-1">
<meta http-equiv="Content-Style-Type" content="text/css">
<link type="text/css" href="default.css" rel="stylesheet"></head>

<body style="margin: 0px; background: rgb(255, 255, 255) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;" onload="AddTitleAndLangFlags();highlight();">
<div id="hmpopupDiv" style="visibility: hidden; position: absolute; z-index: 1000;"></div>


<table bgcolor="#ff8000" border="0" cellpadding="5" cellspacing="0" width="100%">
  <tbody><tr valign="middle">
    <td align="left">
      <p class="p_Heading1"><span class="f_Heading1" style="font-size: 6pt; font-weight: normal;">&nbsp;</span></p>
      <p class="p_Heading1"><span id="titlepage" class="f_Heading1"></span></p>
    </td>
	<td align="center">
     <div id="langflags"></div>
    </td>
    <td align="right">
     <span style="font-size: 9pt;">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="arithmetic_operators.php">Previous</a>&nbsp;
     <a href="operateurs_logiques.php">Next</a>
     </span>
    </td>
  </tr>
</tbody></table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%"><tbody><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Assignement operators lets you change the value of <a href="variables.php">variables</a>.</p>
<p>&nbsp;</p>
<p>Operator <span class="f_Variables">:=</span> is also used to create <a href="variables.php">variables</a>.</p>
<p style="background: rgb(255, 255, 242) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 1px; padding: 0px; text-align: center; text-indent: 0px;"><table style="border-style: solid; border-color: rgb(255, 255, 255) rgb(105, 105, 104) rgb(105, 105, 104) rgb(255, 255, 255); border-width: 1px; -x-border-x-spacing: 0px; -x-border-y-spacing: 0px;" align="center" border="1" cellpadding="0" cellspacing="0">
<tbody><tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113"><p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Operator</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 227px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="227"><p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Description</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 265px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="265"><p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Example</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">:=</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 227px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="227"><p style="margin: 0px 0px 0px 17px;"><span style="color: rgb(0, 0, 0);">Assignment</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 265px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="265"><p style="margin: 0px 0px 0px 16px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a := 1</span><span style="color: rgb(0, 0, 0);"> stores value 1 in variable </span><span style="font-size: 0pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">+=</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 227px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="227"><p style="margin: 0px 0px 0px 17px;"><span style="color: rgb(0, 0, 0);">Assignment with addition</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 265px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="265"><p style="margin: 0px 0px 0px 16px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a += 1</span><span style="color: rgb(0, 0, 0);"> adds 1 to variable </span><span style="font-size: 0pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">-=</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 227px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="227"><p style="margin: 0px 0px 0px 17px;"><span style="color: rgb(0, 0, 0);">Assignment with subtraction</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 265px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="265"><p style="margin: 0px 0px 0px 16px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a -= 1</span><span style="color: rgb(0, 0, 0);"> subtracts 1 from variable</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> </span><span style="font-size: 0pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">*=</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 227px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="227"><p style="margin: 0px 0px 0px 17px;"><span style="color: rgb(0, 0, 0);">Assignment with multiplication</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 265px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="265"><p style="margin: 0px 0px 0px 16px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a *= 2</span><span style="color: rgb(0, 0, 0);"> multiplies variable </span><span style="font-size: 0pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a</span><span style="color: rgb(0, 0, 0);"> by 2</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">/=</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 227px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="227"><p style="margin: 0px 0px 0px 17px;"><span style="color: rgb(0, 0, 0);">Assignment with division</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 265px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="265"><p style="margin: 0px 0px 0px 16px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a /= 2</span><span style="color: rgb(0, 0, 0);"> divides variable </span><span style="font-size: 0pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a</span><span style="color: rgb(0, 0, 0);"> by 2</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">**=</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 227px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="227"><p style="margin: 0px 0px 0px 17px;"><span style="color: rgb(0, 0, 0);">Assignment with exponent</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 265px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="265"><p style="margin: 0px 0px 0px 16px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a **= 2</span><span style="color: rgb(0, 0, 0);"> squares variable </span><span style="font-size: 0pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a</span></p>
</td>
</tr>
</tbody></table>
</div>
<p><span style="text-decoration: underline;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">a := 1</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">b := 2</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">c := 3</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">d := 5</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">a += b</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">a **= c</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">a *= (b*b)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">a /= d</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">a -= (b*c)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p>At the end of this formula, variable a has the value ( ( ( (1 + 2) * 3 ) * 4 ) / 5 ) - 6</p>
<p>&nbsp;</p>
<div style="margin: 0px 0px 0px 2px; padding: 0px; text-align: center; text-indent: 0px;"><table style="background-color: rgb(191, 215, 191); border-collapse: collapse;" align="center" bgcolor="#bfd7bf" border="0" cellpadding="0" cellspacing="0">
<tbody><tr align="left" valign="top">
<td style="border: 1px solid rgb(0, 0, 0); width: 567px;" width="567"><p style="margin: 0px 0px 0px 7px;"><span style="font-weight: bold; text-decoration: underline;">Note:</span> </p>
<p style="margin: 0px 0px 0px 3px;"> You must distinguish between the assignment operator <span class="f_Variables">:=</span> and the comparison operator <span class="f_Variables">=</span></p>
</td>
</tr>
</tbody></table>
</div>

</td></tr></tbody></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%"><tbody><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Les opérateurs d'assignation permettent de modifier le contenu d'une <a href="variables.php">variables</a>. </p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p>L'opérateur <span style="color: rgb(0, 0, 255);">:=</span> sert également à créer les <a href="variables.php">variables</a><span style="font-size: 11pt; color: rgb(0, 0, 255);">.</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;"><table style="border: 2px solid rgb(192, 192, 192); background-color: rgb(255, 247, 239); -x-border-x-spacing: 0px; -x-border-y-spacing: 0px; border-collapse: collapse;" align="center" bgcolor="#fff7ef" border="1" cellpadding="2" cellspacing="0">
<tbody><tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113"><p style="text-align: center;"><span style="font-weight: bold;">Operateur</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 227px;" width="227"><p style="text-align: center;"><span style="font-weight: bold;">Description</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 280px;" width="280"><p style="text-align: center;"><span style="font-weight: bold;">Explication</span></p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113"><p style="text-align: center;"><span class="f_Variables">:=</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 227px;" width="227"><p style="margin: 0px 0px 0px 13px;">Assignation</p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 280px;" width="280"><p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">a := 1</span> stocke la valeur 1 dans la variable a</p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113"><p style="text-align: center;"><span class="f_Variables">+=</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 227px;" width="227"><p style="margin: 0px 0px 0px 13px;">Assignation avec addition</p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 280px;" width="280"><p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">a += 1</span> ajoute 1 au contenu actuel de <span class="f_Variables">a</span></p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113"><p style="text-align: center;"><span class="f_Variables">-=</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 227px;" width="227"><p style="margin: 0px 0px 0px 13px;">Assignation avec soustraction</p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 280px;" width="280"><p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">a -= 1</span> soustrait 1 au contenu actuel de<span style="font-weight: bold;"> </span><span class="f_Variables">a</span></p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113"><p style="text-align: center;"><span class="f_Variables">*=</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 227px;" width="227"><p style="margin: 0px 0px 0px 13px;">Assignation avec multiplication</p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 280px;" width="280"><p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">a *= 2</span> multiplie la variable <span class="f_Variables">a</span> par 2</p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113"><p style="text-align: center;"><span class="f_Variables">/=</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 227px;" width="227"><p style="margin: 0px 0px 0px 13px;">Assignation avec division</p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 280px;" width="280"><p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">a /= 2</span> divise par 2 la variable <span class="f_Variables">a</span></p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113"><p style="text-align: center;"><span class="f_Variables">**=</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 227px;" width="227"><p style="margin: 0px 0px 0px 13px;">Assignation avec exposant</p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 280px;" width="280"><p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">a **= 2</span> exposant 2 de la variable <span class="f_Variables">a</span></p>
</td>
</tr>
</tbody></table>
</div>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-size: 0pt; font-family: 'Courier New'; color: rgb(0, 128, 0);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">a := 1</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">b := 2</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">c := 3</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">d := 5</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">a += b</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">a **= c</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">a *= (b*b)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">a /= d</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">a -= (b*c)</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p>A la fin de cette formule, la valeur de la variable vaut : ( ( ( (1 + 2) * 3<span style="font-size: 8pt;"> </span>) * 4 ) / 5 ) - 6</p>
<p>&nbsp;</p>
<div style="margin: 0px 0px 0px 2px; padding: 0px; text-align: center; text-indent: 0px;"><table style="background-color: rgb(191, 215, 191); border-collapse: collapse;" align="center" bgcolor="#bfd7bf" border="0" cellpadding="0" cellspacing="0">
<tbody><tr align="left" valign="top">
<td style="border: 1px solid rgb(0, 0, 0); width: 567px;" width="567"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarque:</span> </p>
<p style="margin: 0px 0px 0px 13px;">Vous devez faire la distinction entre l'opérateur d'assignation <span style="color: rgb(0, 0, 255);">:=</span> et l'opérateur de comparaison <span style="color: rgb(0, 0, 255);">=</span></p>
</td>
</tr>
</tbody></table>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

</td></tr></tbody></table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%"><tbody><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Opdracht operatoren staan u toe om een waarde te wijzigen van een <a href="variables.php">variabele</a>.</p>
<p>&nbsp;</p>
<p>Operator <span class="f_Variables">:=</span> wordt ook gebruikt om nieuwe <a href="variables.php">variabelen</a> aan te maken.</p>
<p style="background: rgb(255, 255, 242) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 1px; padding: 0px; text-align: center; text-indent: 0px;"><table style="border-style: solid; border-color: rgb(255, 255, 255) rgb(105, 105, 104) rgb(105, 105, 104) rgb(255, 255, 255); border-width: 1px; -x-border-x-spacing: 0px; -x-border-y-spacing: 0px;" align="center" border="1" cellpadding="0" cellspacing="0">
<tbody><tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113"><p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Operator</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 227px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="227"><p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Beschrijving</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 265px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="265"><p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Voorbeeld</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">:=</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 227px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="227"><p style="margin: 0px 0px 0px 17px;"><span style="color: rgb(0, 0, 0);">Opdracht</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 265px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="265"><p style="margin: 0px 0px 0px 16px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a := 1</span><span style="color: rgb(0, 0, 0);"> Slaat de waarde 1 op in de variabele </span><span style="font-size: 0pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">+=</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 227px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="227"><p style="margin: 0px 0px 0px 17px;"><span style="color: rgb(0, 0, 0);">Opdracht met optellen</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 265px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="265"><p style="margin: 0px 0px 0px 16px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a += 1</span><span style="color: rgb(0, 0, 0);"> Voegt 1 toe aan de variable </span><span style="font-size: 0pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">-=</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 227px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="227"><p style="margin: 0px 0px 0px 17px;"><span style="color: rgb(0, 0, 0);">Opdracht met aftrekken</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 265px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="265"><p style="margin: 0px 0px 0px 16px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a -= 1</span><span style="color: rgb(0, 0, 0);"> Verminderd de variabele met 1 </span><span style="font-weight: bold; color: rgb(0, 0, 0);"> </span><span style="font-size: 0pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">*=</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 227px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="227"><p style="margin: 0px 0px 0px 17px;"><span style="color: rgb(0, 0, 0);">Opdracht met vermenigvuldiging</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 265px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="265"><p style="margin: 0px 0px 0px 16px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a *= 2</span><span style="color: rgb(0, 0, 0);"> Vermenigvuldigen van de variabele </span><span style="font-size: 0pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a</span><span style="color: rgb(0, 0, 0);"> by 2</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">/=</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 227px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="227"><p style="margin: 0px 0px 0px 17px;"><span style="color: rgb(0, 0, 0);">Opdracht met delen</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 265px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="265"><p style="margin: 0px 0px 0px 16px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a /= 2</span><span style="color: rgb(0, 0, 0);"> Verdeeld de variabele </span><span style="font-size: 0pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a</span><span style="color: rgb(0, 0, 0);"> by 2</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">**=</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 227px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="227"><p style="margin: 0px 0px 0px 17px;"><span style="color: rgb(0, 0, 0);">Opdracht met machten</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 265px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="265"><p style="margin: 0px 0px 0px 16px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a **= 2</span><span style="color: rgb(0, 0, 0);"> Verheft de variable tot macht 2 </span><span style="font-size: 0pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a</span></p>
</td>
</tr>
</tbody></table>
</div>
<p><span style="text-decoration: underline;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Voorbeeld:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">a := 1</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">b := 2</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">c := 3</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">d := 5</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">a += b</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">a **= c</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">a *= (b*b)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">a /= d</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">a -= (b*c)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p>Op het eind van deze formule,heeft de variabele de waarde ( ( ( (1 + 2) * 3 ) * 4 ) / 5 ) - 6</p>
<p>&nbsp;</p>
<div style="margin: 0px 0px 0px 2px; padding: 0px; text-align: center; text-indent: 0px;"><table style="background-color: rgb(191, 215, 191); border-collapse: collapse;" align="center" bgcolor="#bfd7bf" border="0" cellpadding="0" cellspacing="0">
<tbody><tr align="left" valign="top">
<td style="border: 1px solid rgb(0, 0, 0); width: 567px;" width="567"><p style="margin: 0px 0px 0px 7px;"><span style="font-weight: bold; text-decoration: underline;">Note:</span> </p>
<p style="margin: 0px 0px 0px 3px;"> U dient een onderscheid te maken tussen the opdracht operatoren <span class="f_Variables">:=</span> en de vergelijkings operator <span class="f_Variables">=</span></p>
</td>
</tr>
</tbody></table>
</div>



</td></tr></tbody></table>
</div>
<div class="ESP">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%"><tbody><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p><span style="color: rgb(0, 0, 0);">Los operadores de Asignación permiten cambiar el valor de las <a href="../../Users/Propietario/Documents/4.%20Doc%20Techniques/OLIVIER/OLIVIER/HM%20WP-RefES/php/variables.php">variables</a>.</span></p>
<p><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p><span style="color: rgb(0, 0, 0);">El operador </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">:=</span><span style="color: rgb(0, 0, 0);"> también se utiliza para crear <a href="../../Users/Propietario/Documents/4.%20Doc%20Techniques/OLIVIER/OLIVIER/HM%20WP-RefES/php/variables.php">variables</a></span><span style="font-size: 11pt; color: rgb(0, 0, 255);">.</span></p>
<p><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;"><table style="border: medium none ; background-color: rgb(255, 247, 239); border-collapse: collapse;" align="center" bgcolor="#fff7ef" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Operador</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 227px;" valign="top" width="227"><p><span style="font-weight: bold; color: rgb(0, 0, 0);">Descripción</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 265px;" valign="top" width="265"><p><span style="font-weight: bold; color: rgb(0, 0, 0);">Ejemplo</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">:=</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 227px;" valign="top" width="227"><p><span style="color: rgb(0, 0, 0);">Asignación de un valor</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 265px;" valign="top" width="265"><p><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a := 1</span><span style="color: rgb(0, 0, 0);"> </span><span style="font-style: italic; font-weight: bold; color: rgb(0, 0, 0);">asigna la valor</span><span style="color: rgb(0, 0, 0);"> </span><span style="font-style: italic; font-weight: bold; color: rgb(0, 0, 255);">1</span><span style="color: rgb(0, 0, 0);"> a la variable</span><span style="font-style: italic; color: rgb(0, 0, 0);"> </span><span style="font-style: italic; font-weight: bold; color: rgb(0, 0, 255);">a</span><span style="font-size: 0pt; font-family: 'Courier New'; font-style: italic; color: rgb(0, 0, 255);">a</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">+=</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 227px;" valign="top" width="227"><p><span style="color: rgb(0, 0, 0);">Asignación con adición</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 265px;" valign="top" width="265"><p><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a += 1</span><span style="color: rgb(0, 0, 0);"> </span><span style="font-style: italic; font-weight: bold; color: rgb(0, 0, 0);">suma 1</span><span style="color: rgb(0, 0, 0);"> a la variable </span><span style="font-style: italic; font-weight: bold; color: rgb(0, 0, 255);">a</span></p>
<p><span style="font-size: 0pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">&nbsp;</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">-=</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 227px;" valign="top" width="227"><p><span style="color: rgb(0, 0, 0);">Asignación con substracción</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 265px;" valign="top" width="265"><p><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a -= 1</span><span style="color: rgb(0, 0, 0);"> </span><span style="font-style: italic; font-weight: bold; color: rgb(0, 0, 0);">resta 1</span><span style="color: rgb(0, 0, 0);"> de la variable </span><span style="font-style: italic; font-weight: bold; color: rgb(0, 0, 255);">a</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">*=</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 227px;" valign="top" width="227"><p><span style="color: rgb(0, 0, 0);">Asignación con multiplicación</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 265px;" valign="top" width="265"><p><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a *= 2</span><span style="color: rgb(0, 0, 0);"> </span><span style="font-style: italic; font-weight: bold; color: rgb(0, 0, 0);">multiplica</span><span style="color: rgb(0, 0, 0);"> la variable </span><span style="font-style: italic; font-weight: bold; color: rgb(0, 0, 255);">a</span><span style="color: rgb(0, 0, 0);"> </span><span style="font-style: italic; font-weight: bold; color: rgb(0, 0, 0);">por 2</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">/=</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 227px;" valign="top" width="227"><p><span style="color: rgb(0, 0, 0);">Asignación con división</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 265px;" valign="top" width="265"><p><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a /= 2</span><span style="color: rgb(0, 0, 0);"> </span><span style="font-style: italic; font-weight: bold; color: rgb(0, 0, 0);">divide</span><span style="color: rgb(0, 0, 0);"> la variable </span><span style="font-style: italic; font-weight: bold; color: rgb(0, 0, 255);">a</span><span style="color: rgb(0, 0, 0);"> </span><span style="font-style: italic; font-weight: bold; color: rgb(0, 0, 0);">por 2</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">**=</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 227px;" valign="top" width="227"><p><span style="color: rgb(0, 0, 0);">Asignación con exponente</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 265px;" valign="top" width="265"><p><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a **= 2</span><span style="color: rgb(0, 0, 0);"> variable </span><span style="font-style: italic; font-weight: bold; color: rgb(0, 0, 255);">a</span><span style="color: rgb(0, 0, 0);"> </span><span style="font-style: italic; font-weight: bold; color: rgb(0, 0, 0);">exponente</span><span style="color: rgb(0, 0, 0);"> </span><span style="font-style: italic; font-weight: bold; color: rgb(0, 0, 255);">2</span></p>
<p><span style="font-size: 0pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">&nbsp;</span></p>
</td>
</tr>
</tbody></table>
</div>
<p><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="color: rgb(0, 0, 0); text-decoration: underline;">Ejemplo:</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-size: 0pt; font-family: 'Courier New'; color: rgb(0, 128, 0);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a := 1</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">b := 2</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">c := 3</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">d := 5</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a += b</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a **= c</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a *= (b*b)</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a /= d</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a -= (b*c)</span></p>
<p><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p><span style="color: rgb(0, 0, 0);">Al final de esta fórmula, la variable </span><span style="font-style: italic; font-weight: bold; color: rgb(0, 0, 255);">a </span><span style="color: rgb(0, 0, 0);">tiene el valor( ( ( (1 + 2)</span><span style="font-size: 8pt; color: rgb(0, 0, 0);">3 </span><span style="color: rgb(0, 0, 0);">) * 4 ) / 5 ) - 6</span></p>
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 29px;"><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 2px; padding: 0px; text-align: center; text-indent: 0px;"><table style="border: medium none ; background-color: rgb(191, 215, 191); border-collapse: collapse;" align="center" bgcolor="#bfd7bf" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 605px;" valign="top" width="605"><p><span style="font-size: 0pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">&nbsp;</span></p>
<p><span style="font-weight: bold; color: rgb(0, 0, 0); text-decoration: underline;">&nbsp;</span></p>
<p><span style="font-weight: bold; color: rgb(0, 0, 0); text-decoration: underline;">Observación</span><span style="font-weight: bold; color: rgb(0, 0, 0);">: </span><span style="color: rgb(0, 0, 0);">hay que distinguir entre el operador de asignación</span><span style="font-style: italic; font-weight: bold; color: rgb(0, 0, 255);">: = </span><span style="color: rgb(0, 0, 0);">y el operador de &nbsp;comparación </span><span style="font-style: italic; font-weight: bold; color: rgb(0, 0, 255);">=</span></p>
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
</td>
</tr>
</tbody></table>
</div>






<p></p></td></tr></tbody></table></div></body></html>