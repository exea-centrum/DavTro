<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html><head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED","ESP"];
var WinProHelpPageName=["Comparison operators","Operateurs de comparaison","Vergelijkings operatoren","Operadores de comparación"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame. 
if(top.frames.length==0) { top.location.href="index.php?operateurs_de_comparaison.php"; }
else { parent.quicksync('a2.2.4'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>


<title>Operateurs de comparaison</title><meta name="generator" content="Help &amp; Manual">
<meta name="keywords" content="Opérateurs de comparaison,Egalité,Différence,Plus grand,Plus grand ou égal,Plus petit,Plus petit ou égal">
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
     <a href="operateurs_logiques.php">Previous</a>&nbsp;
     <a href="parentheses.php">Next</a>
     </span>
    </td>
  </tr>
</tbody></table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%"><tbody><tr valign="top"><td align="left">
<p style="background: rgb(255, 255, 242) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<p>Comparison operators let you compare two arithmetic expressions, and provide a logical result which is true or false.</p>
<p style="background: rgb(255, 255, 242) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 1px; padding: 0px; text-align: center; text-indent: 0px;"><table style="border-style: solid; border-color: rgb(218, 218, 218) rgb(105, 105, 104) rgb(105, 105, 104) rgb(218, 218, 218); border-width: 1px; -x-border-x-spacing: 0px; -x-border-y-spacing: 0px;" align="center" border="1" cellpadding="0" cellspacing="0">
<tbody><tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113"><p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Operator</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="151"><p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Description</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 340px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="340"><p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Example</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; height: 16px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">=</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 151px; height: 16px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="151"><p style="text-align: center;"><span style="color: rgb(0, 0, 0);">equality</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 340px; height: 16px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="340"><p style="margin: 0px 0px 0px 11px; text-indent: -1px;"><span class="f_Variables" style="font-size: 11pt;">a = b</span><span class="f_Variables"> </span>is true if a equals b, false otherwise</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">&lt;&gt;</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="151"><p style="text-align: center;"><span style="color: rgb(0, 0, 0);">difference</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 340px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="340"><p style="margin: 0px 0px 0px 11px; text-indent: -1px;"><span class="f_Variables" style="font-size: 11pt;">a &lt;&gt; b</span><span style="color: rgb(0, 0, 0);"> </span>is true if a is different from b, false otherwise</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">&lt;</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="151"><p style="text-align: center;"><span style="color: rgb(0, 0, 0);">less than</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 340px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="340"><p style="margin: 0px 0px 0px 11px; text-indent: -1px;"><span style="font-size: 11pt;">a &lt; b</span><span style="color: rgb(0, 0, 0);"> </span>is true if a is less than b, false otherwise</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">&lt;=</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="151"><p style="text-align: center;"><span style="color: rgb(0, 0, 0);">less than or equal</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 340px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="340"><p style="margin: 0px 0px 0px 11px; text-indent: -1px;"><span class="f_Variables" style="font-size: 11pt;">a &lt;= b</span><span style="color: rgb(0, 0, 0);"> </span>is true if a is less than or equal to b, false otherwise</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">&gt;</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="151"><p style="text-align: center;"><span style="color: rgb(0, 0, 0);">greater than</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 340px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="340"><p style="margin: 0px 0px 0px 11px; text-indent: -1px;"><span class="f_Variables" style="font-size: 11pt;">a &gt; b</span><span style="color: rgb(0, 0, 0);"> </span>is true if a is greater than b, false otherwise</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">&gt;=</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="151"><p style="text-align: center;"><span style="color: rgb(0, 0, 0);">greater than or equal</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 340px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="340"><p style="margin: 0px 0px 0px 11px; text-indent: -1px;"><span class="f_Variables" style="font-size: 11pt;">a &gt;= b</span><span style="color: rgb(0, 0, 0);"> </span>is true if a is greater than or equal to b, false otherwise</p>
</td>
</tr>
</tbody></table>
</div>
<p style="margin: 0px 0px 0px 1px; text-align: center;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;"><table style="background-color: rgb(191, 215, 191); border-collapse: collapse;" align="center" bgcolor="#bfd7bf" border="0" cellpadding="0" cellspacing="0">
<tbody><tr align="left" valign="top">
<td style="border: 1px solid rgb(0, 0, 0); width: 631px;" width="631"><p style="margin: 0px 0px 0px 19px;"><span style="font-weight: bold; text-decoration: underline;">Notes:</span></p>
<div style="margin: 0px 0px 0px 19px; padding: 0px; text-align: left; text-indent: 0px;"><table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0"><tbody><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td><td>You must distinguish between the assignment operator<span class="f_Variables"> :=</span> and the comparison operator <span class="f_Variables">=</span></td></tr></tbody></table></div><div style="margin: 0px 0px 0px 19px; padding: 0px; text-align: left; text-indent: 0px;"><table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0"><tbody><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td><td>Le contraire de l'opérateur <span class="f_Variables">&lt; </span>est<span class="f_Variables"> &gt;=</span>, et non<span class="f_Variables"> &gt;</span></td></tr></tbody></table></div><div style="margin: 0px 0px 0px 19px; padding: 0px; text-align: left; text-indent: 0px;"><table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0"><tbody><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td><td>De même, le contraire de l'opérateur <span class="f_Variables">&gt;</span> est <span class="f_Variables">&lt;=</span>, et non <span class="f_Variables">&lt;</span><p></p>
</td></tr></tbody></table></div></td>
</tr>
</tbody></table>
</div>
<p style="margin: 0px 0px 14px;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>

</td></tr></tbody></table>
</div>


<div class="FRA">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%"><tbody><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Les opérateurs de comparaison permettent de comparer deux
expressions arithmétiques entre elles, et renvoient une valeur logique
indiquant si le résultat de la comparaison est vrai ou faux.</p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;"><table style="border: 2px solid rgb(192, 192, 192); background-color: rgb(255, 247, 239); -x-border-x-spacing: 0px; -x-border-y-spacing: 0px; border-collapse: collapse;" align="center" bgcolor="#fff7ef" border="1" cellpadding="2" cellspacing="0">
<tbody><tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113"><p style="text-align: center;"><span style="font-weight: bold;">Operateur</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 151px;" width="151"><p style="text-align: center;"><span style="font-weight: bold;">Description</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 366px;" width="366"><p style="text-align: center;"><span style="font-weight: bold;">Explication</span></p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">=</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 151px;" width="151"><p style="text-align: center;">égalité</p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 366px;" width="366"><p style="margin: 0px 0px 0px 13px;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a = b</span> est vrai si a est égal à b, faux sinon</p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">&lt;&gt;</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 151px;" width="151"><p style="text-align: center;">différence</p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 366px;" width="366"><p style="margin: 0px 0px 0px 13px;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a &lt;&gt; b</span> est vrai si a est différent à b, faux sinon</p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">&lt;</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 151px;" width="151"><p style="text-align: center;">inférieur</p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 366px;" width="366"><p style="margin: 0px 0px 0px 13px;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a &lt; b</span> est vrai si a est plus petit que b, faux sinon</p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">&lt;=</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 151px;" width="151"><p style="text-align: center;">inférieur ou égal</p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 366px;" width="366"><p style="margin: 0px 0px 0px 13px;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a &lt;= b</span> <span style="font-size: 12pt; font-family: 'Times New Roman';">est vrai si a est inférieur ou égal à b, faux sinon</span></p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">&gt;</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 151px;" width="151"><p style="text-align: center;">supérieur</p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 366px;" width="366"><p style="margin: 0px 0px 0px 13px;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a &gt; b</span> est vrai si a est supérieur à b, faux sinon</p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">&gt;=</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 151px;" width="151"><p style="text-align: center;">supérieur ou égal</p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 366px;" width="366"><p style="margin: 0px 0px 0px 13px;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">a &gt;= b</span> est vrai si a est supérieur ou égal à b, faux sinon</p>
</td>
</tr>
</tbody></table>
</div>
<p style="text-align: center;">&nbsp;</p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;"><table style="background-color: rgb(191, 215, 191); border-collapse: collapse;" align="center" bgcolor="#bfd7bf" border="0" cellpadding="0" cellspacing="0">
<tbody><tr align="left" valign="top">
<td style="border: 1px solid rgb(0, 0, 0); width: 631px;" width="631"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarques:</span></p>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;"><table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0"><tbody><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td><td>Vous devez faire la distinction entre l'opérateur d'assignation <span style="color: rgb(0, 0, 255);">:=</span> et l'opérateur de comparaison <span style="color: rgb(0, 0, 255);">=</span></td></tr></tbody></table></div><div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;"><table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0"><tbody><tr valign="baseline"><td width="17"><span style="font-size: 11pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td><td>Le contraire de l'opérateur <span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">&lt;</span> est <span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">&gt;=</span>, et non <span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">&gt;</span></td></tr></tbody></table></div><div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;"><table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0"><tbody><tr valign="baseline"><td width="17"><span style="font-size: 11pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td><td>De même, le contraire de l'opérateur <span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">&gt;</span> est <span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">&lt;=</span>, et non <span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">&lt;</span><p></p>
</td></tr></tbody></table></div></td>
</tr>
</tbody></table>
</div>
<p>&nbsp;</p>

</td></tr></tbody></table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%"><tbody><tr valign="top"><td align="left">
<p style="background: rgb(255, 255, 242) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<p>Vergelijkings operatoren laten u toe vergelijkingen te maken tussen
2 rekenkundige expressies,en geeft u een logisch resultaat welke "WAAR"
of "ONWAAR" is.</p>
<p style="background: rgb(255, 255, 242) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 1px; padding: 0px; text-align: center; text-indent: 0px;"><table style="border-style: solid; border-color: rgb(218, 218, 218) rgb(105, 105, 104) rgb(105, 105, 104) rgb(218, 218, 218); border-width: 1px; -x-border-x-spacing: 0px; -x-border-y-spacing: 0px;" align="center" border="1" cellpadding="0" cellspacing="0">
<tbody><tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113"><p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Operator</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="151"><p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Beschrijving</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 340px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="340"><p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Voorbeeld</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; height: 16px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">=</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 151px; height: 16px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="151"><p style="text-align: center;"><span style="color: rgb(0, 0, 0);">vergelijking</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 340px; height: 16px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="340"><p style="margin: 0px 0px 0px 11px; text-indent: -1px;"><span class="f_Variables" style="font-size: 11pt;">a = b</span><span class="f_Variables"> </span>is waar ALS a gelijk is aan b, onwaar indien dit niet het geval is</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">&lt;&gt;</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="151"><p style="text-align: center;"><span style="color: rgb(0, 0, 0);">verschil</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 340px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="340"><p style="margin: 0px 0px 0px 11px; text-indent: -1px;"><span class="f_Variables" style="font-size: 11pt;">a &lt;&gt; b</span><span style="color: rgb(0, 0, 0);"> </span>is waar ALS a verschillend is van b, onwaar indien dit niet het geval is</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">&lt;</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="151"><p style="text-align: center;"><span style="color: rgb(0, 0, 0);">kleiner dan</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 340px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="340"><p style="margin: 0px 0px 0px 11px; text-indent: -1px;"><span style="font-size: 11pt;">a &lt; b</span><span style="color: rgb(0, 0, 0);"> </span>is waar ALS a kleiner is dan b, onwaar indien dit niet het geval is</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">&lt;=</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="151"><p style="text-align: center;"><span style="color: rgb(0, 0, 0);">kleiner dan of gelijk aan</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 340px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="340"><p style="margin: 0px 0px 0px 11px; text-indent: -1px;"><span class="f_Variables" style="font-size: 11pt;">a &lt;= b</span><span style="color: rgb(0, 0, 0);"> </span>is waar ALS a kleiner is of gelijk is aan b, onwaar indien dit niet het geval is</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">&gt;</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="151"><p style="text-align: center;"><span style="color: rgb(0, 0, 0);">groter dan</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 340px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="340"><p style="margin: 0px 0px 0px 11px; text-indent: -1px;"><span class="f_Variables" style="font-size: 11pt;">a &gt; b</span><span style="color: rgb(0, 0, 0);"> </span>is waar ALS a groter is dan b, onwaar indien dit niet het geval is</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">&gt;=</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="151"><p style="text-align: center;"><span style="color: rgb(0, 0, 0);">groter dan of gelijk aan</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 340px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="340"><p style="margin: 0px 0px 0px 11px; text-indent: -1px;"><span class="f_Variables" style="font-size: 11pt;">a &gt;= b</span><span style="color: rgb(0, 0, 0);"> </span>is waar ALS a groter is of gelijk is aan b, onwaar indien dit niet het geval is</p>
</td>
</tr>
</tbody></table>
</div>
<p style="margin: 0px 0px 0px 1px; text-align: center;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;"><table style="background-color: rgb(191, 215, 191); border-collapse: collapse;" align="center" bgcolor="#bfd7bf" border="0" cellpadding="0" cellspacing="0">
<tbody><tr align="left" valign="top">
<td style="border: 1px solid rgb(0, 0, 0); width: 631px;" width="631"><p style="margin: 0px 0px 0px 19px;"><span style="font-weight: bold; text-decoration: underline;">Notes:</span></p>
<div style="margin: 0px 0px 0px 19px; padding: 0px; text-align: left; text-indent: 0px;"><table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0"><tbody><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td><td>U moet onderscheid maken tussen de opdracht operatoren<span class="f_Variables"> :=</span> en de vergelijkings operatoren <span class="f_Variables">=</span></td></tr></tbody></table></div><div style="margin: 0px 0px 0px 19px; padding: 0px; text-align: left; text-indent: 0px;"><table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0"><tbody><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td><td>het tegenovergestelde van de operator <span class="f_Variables">&lt; </span>is<span class="f_Variables"> &gt;=</span>, en niet<span class="f_Variables"> &gt;</span></td></tr></tbody></table></div><div style="margin: 0px 0px 0px 19px; padding: 0px; text-align: left; text-indent: 0px;"><table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0"><tbody><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></td><td>Hetzelfde, het tegenovergestelde van de operator <span class="f_Variables">&gt;</span> is <span class="f_Variables">&lt;=</span>, en niet <span class="f_Variables">&lt;</span><p></p>
</td></tr></tbody></table></div></td>
</tr>
</tbody></table>
</div>
<p style="margin: 0px 0px 14px;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>

</td></tr></tbody></table>
</div>
<div class="ESP">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%"><tbody><tr valign="top"><td align="left">
<p style="background: rgb(255, 255, 242) none repeat scroll 0%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="color: rgb(0, 0, 0);">&nbsp;</span></p><p><span style="color: rgb(0, 0, 0);">Los operadores de comparación </span><span style="font-weight: bold; color: rgb(0, 0, 0);">permiten comparar</span><span style="color: rgb(0, 0, 0);"> dos expresiones aritméticas entre ellas, y proporciona </span><span style="font-weight: bold; color: rgb(0, 0, 0);">un valor lógico</span><span style="color: rgb(0, 0, 0);"> indicando si el resultado de la comparación es </span><span style="font-weight: bold; color: rgb(0, 0, 0);">verdadero</span><span style="color: rgb(0, 0, 0);"> o </span><span style="font-weight: bold; color: rgb(0, 0, 0);">falso</span><span style="color: rgb(0, 0, 0);">.</span></p>
<p><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 2px; padding: 0px; text-align: center; text-indent: 0px;"><table style="border: medium none ; background-color: rgb(255, 247, 239); border-collapse: collapse;" align="center" bgcolor="#fff7ef" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Operator</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 103px;" valign="top" width="103"><p><span style="font-weight: bold; color: rgb(0, 0, 0);">Descripción</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 382px;" valign="top" width="382"><p><span style="font-weight: bold; color: rgb(0, 0, 0);">Ejemplo</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">=</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 103px;" valign="top" width="103"><p><span style="color: rgb(0, 0, 0);">Igualdad</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 382px;" valign="top" width="382"><p><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">a = b</span><span style="color: rgb(0, 0, 0);"> es verdadero si 'a' = 'b', &nbsp;sino falso</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">&lt;&gt;</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 103px;" valign="top" width="103"><p><span style="color: rgb(0, 0, 0);">Diferencia</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 382px;" valign="top" width="382"><p><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">a &lt;&gt; b</span><span style="color: rgb(0, 0, 0);"> es verdadero si 'a' es diferente de 'b', sino falso</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">&lt;</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 103px;" valign="top" width="103"><p><span style="color: rgb(0, 0, 0);">Inferior</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 382px;" valign="top" width="382"><p><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">a &lt; b</span><span style="color: rgb(0, 0, 0);"> es verdadero si 'a' es &lt; 'b', sino falso</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">&lt;=</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 103px;" valign="top" width="103"><p><span style="color: rgb(0, 0, 0);">Inferior o igual</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 382px;" valign="top" width="382"><p><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">a &lt;= b</span><span style="color: rgb(0, 0, 0);"> es verdadero si 'a' es inferior o igual a 'b', sino falso</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">&gt;</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 103px;" valign="top" width="103"><p><span style="color: rgb(0, 0, 0);">Superior</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 382px;" valign="top" width="382"><p><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">a &gt; b</span><span style="color: rgb(0, 0, 0);"> es verdadero si 'a' es superior a 'b', si no falso</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">&gt;=</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 103px;" valign="top" width="103"><p><span style="color: rgb(0, 0, 0);">Superior o igual</span></p>
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 382px;" valign="top" width="382"><p><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">a &gt;= b</span><span style="color: rgb(0, 0, 0);"> es verdadero si 'a' es superior o igual a 'b', sino falso</span></p>
</td>
</tr>
</tbody></table>
</div>
<p><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;"><table style="border: medium none ; background-color: rgb(191, 215, 191); border-collapse: collapse;" align="center" bgcolor="#bfd7bf" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 605px;" valign="top" width="605"><p><span style="font-weight: bold; color: rgb(0, 0, 0); text-decoration: underline;">Observaciones:</span></p>
<p><span style="font-weight: bold; color: rgb(0, 0, 0); text-decoration: underline;">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;"><table style="border: medium none ;" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="width: 13px;" valign="top" width="13"><p><span style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></p>
</td>
<td valign="top"><p><span style="color: rgb(0, 0, 0);">No hay que confundir el operador de comparación</span><span style="color: rgb(0, 0, 255);"> </span><span style="font-weight: bold; color: rgb(0, 0, 255);">=</span><span style="color: rgb(0, 0, 255);"> </span><span style="color: rgb(0, 0, 0);">y el operador de asignación</span><span style="font-weight: bold; color: rgb(0, 0, 255);">: =</span></p>
</td>
</tr>
</tbody></table>
</div>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;"><table style="border: medium none ;" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="width: 13px;" valign="top" width="13"><p><span style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></p>
</td>
<td valign="top"><p><span style="color: rgb(0, 0, 0);">El contrario del operador '</span><span style="font-weight: bold; color: rgb(0, 0, 255);">&lt;'</span><span style="color: rgb(0, 0, 0);"> es '</span><span style="font-weight: bold; color: rgb(0, 0, 255);">&gt; =' </span><span style="color: rgb(0, 0, 0);">, y no '</span><span style="font-weight: bold; color: rgb(0, 0, 255);">&gt;</span><span style="color: rgb(0, 0, 0);">'</span></p>
</td>
</tr>
</tbody></table>
</div>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;"><table style="border: medium none ;" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="width: 13px;" valign="top" width="13"><p><span style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></p>
</td>
<td valign="top"><p><span style="color: rgb(0, 0, 0);">Del mismo modo, el contrario del operador '</span><span style="font-weight: bold; color: rgb(0, 0, 255);">&gt;</span><span style="color: rgb(0, 0, 0);">' es '</span><span style="font-weight: bold; color: rgb(0, 0, 255);">&lt;=</span><span style="color: rgb(0, 0, 0);">', y no '</span><span style="font-weight: bold; color: rgb(0, 0, 255);">&lt;</span><span style="color: rgb(0, 0, 0);">'</span></p>
</td>
</tr>
</tbody></table>
</div>
</td>
</tr>
</tbody></table>
</div>
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p></td></tr></tbody></table></div>
</body></html>