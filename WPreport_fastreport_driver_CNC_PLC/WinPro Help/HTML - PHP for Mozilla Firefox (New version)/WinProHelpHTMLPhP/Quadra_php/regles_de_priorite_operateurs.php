<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html><head>
<script type="text/JavaScript" src="wplang.js">
</script>
<script type="text/JavaScript">
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED","ESP"];
var WinProHelpPageName=["Priority rules","Règles de priorité des opérateurs","Prioriteiten van operatoren","Reglas de prioridad de los operadores"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?regles_de_priorite_operateurs.php"; }
else { parent.quicksync('a2.2.7'); }
//--></script>
<script type="text/javascript" src="highlight.js">
</script><title>Règles de priorité des opérateurs</title>

<meta name="keywords" content="Règles de priorité des opérateurs,Non,Unaire,Parenthèses,Et,Ou,Ou Excl,Dans,Pas Dans">
<meta http-equiv="Content-Type" content="text/php; charset=iso-8859-1">
<meta http-equiv="Content-Style-Type" content="text/css">
<link type="text/css" href="default.css" rel="stylesheet">
</head>

<body style="margin: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;" onload="AddTitleAndLangFlags();highlight();">
<div id="hmpopupDiv" style="visibility: hidden; position: absolute; z-index: 1000;">
</div>
<table bgcolor="#ff8000" border="0" cellpadding="5" cellspacing="0" width="100%">
<tbody>
<tr valign="middle">
<td align="left">
<p class="p_Heading1"><span class="f_Heading1" style="font-size: 6pt; font-weight: normal;">&nbsp;</span></p>
<p class="p_Heading1"><span id="titlepage" class="f_Heading1"></span></p>
</td>
<td align="center">
<div id="langflags"> </div>
</td>
<td align="right"><span style="font-size: 9pt;"><a href="introduction.php">Top</a>&nbsp; <a href="listes.php">Previous</a>&nbsp; <a href="flowcontrolinstructions.php">Next</a> </span>
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
<p><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p>When an <span style="font-weight: bold;">arithmetic
expression</span> has<span style="font-weight: bold;">several
operators</span>, they will be generally executed<span style="font-weight: bold;">from left to right</span>.
However, some operators will be executed first. For example,
multiplication has priority over addition. In expression <span style="font-weight: bold; color: rgb(0, 0, 255);">a + b * c,
&nbsp;b * c</span> is evaluated before performing the
addition with <span style="font-weight: bold; color: rgb(0, 0, 255);">a</span>.</p>
<p>The table below lists all operators sorted by priority
order. Operators with the higher priority are evaluated before
operators with lower priority. Operators with the same priority are
evaluated from left to right.</p>
<p>&nbsp;</p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="border-style: solid; border-color: rgb(255, 255, 255) rgb(105, 105, 104) rgb(105, 105, 104) rgb(255, 255, 255); border-width: 1px;" align="center" border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-weight: bold;">Operator</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-weight: bold;">Priority</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Not</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">unary
-</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">unary
+</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">10</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">(</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">)</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">9</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">**</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">8</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">*</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">/</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">7</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">+</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">-</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">6</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&lt;</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&lt;=</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&gt;</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&gt;=</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">5</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">=</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&lt;&gt;</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">4</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">and</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">3</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">xor</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">2</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">or</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">1</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">in</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">not
in</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">:=</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">+=</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">-=</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">*=</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">/=</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">**=</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">0</span></p>
</td>
</tr>
</tbody>
</table>
</div>
<p style="text-align: center;">&nbsp;</p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="background-color: rgb(191, 215, 191); border-collapse: collapse;" align="center" bgcolor="#bfd7bf" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(0, 0, 0); width: 605px;" width="605">
<p style="margin: 0px 0px 0px 11px;"><span style="font-weight: bold; text-decoration: underline;">Notes:</span></p>
<div style="margin: 0px 0px 0px 11px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td>
<td>'<span style="font-weight: bold;">unary-</span>'
and '<span style="font-weight: bold;">unary+</span>'
are operators that affect the sign of a value (<span style="font-weight: bold;">unary+ </span>is seldom
used, because it is implicit). </td>
</tr>
</tbody>
</table>
</div>
<p style="margin: 0px 0px 0px 11px;">&nbsp;Examples
of <span style="font-weight: bold;">unary-</span>: <span class="f_Variables">-a, -1, -(a+b)</span>. </p>
<p style="margin: 0px 0px 0px 11px;">&nbsp;Examples
of <span style="font-weight: bold;">unary+</span>: <span class="f_Variables">+a, +1, +(a+b)</span></p>
<div style="margin: 0px 0px 0px 11px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 11pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td>
<td><span style="color: rgb(0, 0, 0);">You
can use <a href="parentheses.php">parenthesis</a>
to override the priority rules</span><span style="font-size: 11pt; color: rgb(0, 0, 0);"></span></td>
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
<p>Lorsqu'une <span style="font-weight: bold;">expression
arithmétique</span> contient <span style="font-weight: bold;">plusieurs
opérateurs</span>, ceux ci sont généralement exécutés <span style="font-weight: bold;">de gauche à droite</span>.
Toutefois, certains opérateurs seront exécutés avant d'autres. Par
exemple, la multiplication a priorité sur l'addition, et dans
l'expression <span style="font-weight: bold; color: rgb(0, 0, 255);">a
+ b * c, b * c</span> sera calculé avant d'effectuer l'addition
avec <span style="font-weight: bold; color: rgb(0, 0, 255);">a</span>.
</p>
<p>La table ci-dessous décrit le niveau de priorité des
opérateurs. Les opérateurs dont le niveau de priorité est plus élevé
sont évalués avant ceux de priorité inférieure. Les opérateurs dont le
niveau de priorité est identique sont évalués de gauche à droite.</p>
<p><span style="font-size: 11pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 27px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="border: 2px solid rgb(192, 192, 192); background-color: rgb(255, 247, 239); border-collapse: collapse;" align="center" bgcolor="#fff7ef" border="1" cellpadding="2" cellspacing="0">
<tbody>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span style="font-weight: bold;">Operateur</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span style="font-weight: bold;">Priorité</span></p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span class="f_Variables">Non</span></p>
<p style="text-align: center;"><span class="f_Variables">-unaire</span></p>
<p style="text-align: center;"><span class="f_Variables">+unaire</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span style="font-size: 5pt;"></span>10</p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span class="f_Variables">( )</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;">9</p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span class="f_Variables">**</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;">8</p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span class="f_Variables">*</span></p>
<p style="text-align: center;"><span class="f_Variables">/</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span style="font-size: 5pt;"></span>7</p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span class="f_Variables">+</span></p>
<p style="text-align: center;"><span class="f_Variables">-</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span style="font-size: 5pt;"></span>6</p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span class="f_Variables">&lt;</span></p>
<p style="text-align: center;"><span class="f_Variables">&lt;=</span></p>
<p style="text-align: center;"><span class="f_Variables">&gt;</span></p>
<p style="text-align: center;"><span class="f_Variables">&gt;=</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span style="font-size: 5pt;"></span>5</p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span class="f_Variables">=</span></p>
<p style="text-align: center;"><span class="f_Variables">&lt;&gt;</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span style="font-size: 5pt;"></span>4</p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span class="f_Variables">Et</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;">3</p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span class="f_Variables">Ou Excl</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;">2</p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span class="f_Variables">Ou</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;">1</p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span class="f_Variables">Dans</span></p>
<p style="text-align: center;"><span class="f_Variables">Pas Dans</span></p>
<p style="text-align: center;"><span class="f_Variables">:=</span></p>
<p style="text-align: center;"><span class="f_Variables">+=</span></p>
<p style="text-align: center;"><span class="f_Variables">-=</span></p>
<p style="text-align: center;"><span class="f_Variables">*=</span></p>
<p style="text-align: center;"><span class="f_Variables">/=</span></p>
<p style="text-align: center;"><span class="f_Variables">**=</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span style="font-size: 5pt;"></span>0</p>
</td>
</tr>
</tbody>
</table>
</div>
<p><span style="font-size: 11pt;">&nbsp;</span></p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="background-color: rgb(191, 215, 191); border-collapse: collapse;" align="center" bgcolor="#bfd7bf" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(0, 0, 0); width: 605px;" width="605">
<p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarques:</span></p>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td>
<td>'<span style="font-weight: bold;">-unaire</span>'
et '+<span style="font-weight: bold;">unaire</span>'
sont les opérateurs qui modifient le signe d'un nombre (le <span style="font-weight: bold;">+unaire</span> est rarement
utilisé, car il est implicite). </td>
</tr>
</tbody>
</table>
</div>
<p style="margin: 0px 0px 0px 27px;">Exemples
de <span style="font-weight: bold;">-unaire </span>:
<span class="f_Variables">-a</span><span style="color: rgb(0, 0, 255);">, </span><span class="f_Variables">-1</span><span style="color: rgb(0, 0, 255);">,</span><span class="f_Variables" style="font-weight: bold;"></span><span class="f_Variables">-(a+b)</span></p>
<p style="margin: 0px 0px 0px 27px;">Exemples
de <span style="font-weight: bold;">+unaire </span>:<span style="color: rgb(0, 0, 255);"></span><span class="f_Variables">+a</span><span style="color: rgb(0, 0, 255);">, </span><span class="f_Variables">+1</span><span style="color: rgb(0, 0, 255);">,</span><span class="f_Variables" style="font-weight: bold;"></span><span class="f_Variables">+(a+b)</span></p>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td>
<td>Vous pouvez utiliser des <a href="parentheses.php">parenthèses</a> pour
outrepasser ces règles de priorité</td>
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
<div class="NED">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%">
<tbody>
<tr valign="top">
<td align="left">
<p><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p>Wanneer een <span style="font-weight: bold;">rekenkundige
expressie</span> meerdere <span style="font-weight: bold;">operatoren
heeft</span>, dan zullen zij in het algemeen uitgevoerd worden <span style="font-weight: bold;">van links naar rechts</span>.
Maar,enkele operatoren zullen eerst uitgevoerd
worden.Voorbeeld,vermenigvuldigen heeft voorrang op opteleln. In de
expressie <span style="font-weight: bold; color: rgb(0, 0, 255);">a
+ b * c, &nbsp;b * c</span> wordt eerst uitgevoerd alvorens <span style="font-weight: bold; color: rgb(0, 0, 255);">a wordt
toegevoegd</span></p>
<p>Onderstaande tabel lijst alle operatoern op met hun
prioriteitenr. Operatoren met een hogere prioriteit zullen eerst
uitgevoerd worden. Operatoren met dezelfde prioriteit worden uitgevoerd
van links naar rechts.</p>
<p>&nbsp;</p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="border-style: solid; border-color: rgb(255, 255, 255) rgb(105, 105, 104) rgb(105, 105, 104) rgb(255, 255, 255); border-width: 1px;" align="center" border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-weight: bold;">Operator</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-weight: bold;">Prioriteit</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Not</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">unary
-</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">unary
+</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">10</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">(</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">)</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">9</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">**</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">8</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">*</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">/</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">7</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">+</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">-</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">6</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&lt;</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&lt;=</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&gt;</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&gt;=</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">5</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">=</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&lt;&gt;</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">4</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">and</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">3</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">xor</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">2</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">or</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">1</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">in</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">not
in</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">:=</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">+=</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">-=</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">*=</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">/=</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">**=</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="color: rgb(0, 0, 0);">0</span></p>
</td>
</tr>
</tbody>
</table>
</div>
<p style="text-align: center;">&nbsp;</p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="background-color: rgb(191, 215, 191); border-collapse: collapse;" align="center" bgcolor="#bfd7bf" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(0, 0, 0); width: 605px;" width="605">
<p style="margin: 0px 0px 0px 11px;"><span style="font-weight: bold; text-decoration: underline;">Opmerking:</span></p>
<div style="margin: 0px 0px 0px 11px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td>
<td>'<span style="font-weight: bold;">unary-</span>'
en '<span style="font-weight: bold;">unary+</span>'
zijn operatoren welke invloed hebben op he teken van de waarde (<span style="font-weight: bold;">unary+</span> word zelden
gebruikt, omdat het impliciet is). </td>
</tr>
</tbody>
</table>
</div>
<p style="margin: 0px 0px 0px 11px;">&nbsp;Voorbeeld
van <span style="font-weight: bold;">unary-</span>:
<span class="f_Variables">-a, -1, -(a+b)</span>.
</p>
<p style="margin: 0px 0px 0px 11px;">&nbsp;Voorbeeld
of <span style="font-weight: bold;">unary+</span>: <span class="f_Variables">+a, +1, +(a+b)</span></p>
<div style="margin: 0px 0px 0px 11px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 11pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td>
<td><span style="color: rgb(0, 0, 0);">U
kan <a href="parentheses.php">haakjes</a> gebruiken
om de regels te overrulen</span><span style="font-size: 11pt; color: rgb(0, 0, 0);"></span></td>
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
<p><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p><p><span style="color: rgb(0, 0, 0);">Cuando una </span><span style="font-weight: bold; color: rgb(0, 0, 0);">expresión aritmética </span><span style="color: rgb(0, 0, 0);">tiene </span><span style="font-weight: bold; color: rgb(0, 0, 0);">varios operadores</span><span style="color: rgb(0, 0, 0);">, serán ejecutados generalmente de </span><span style="font-weight: bold; color: rgb(0, 0, 0);">izquierda a derecha</span><span style="color: rgb(0, 0, 0);">.
Sin embargo, algunos operadores serán ejecutados primero. Por ejemplo,
la multiplicación tiene prioridad por sobre la adición. En la expresión
</span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a + b * c, &nbsp;b * c</span><span style="color: rgb(0, 0, 0);"> es evaluada antes de realizar la suma con </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a</span><span style="color: rgb(0, 0, 0);">.</span></p>
<p><span style="color: rgb(0, 0, 0);">La tabla siguiente lista todos
los operadores ordenados por prioridad. &nbsp;Los operadores con mayor
prioridad son evaluados antes que los operadores con prioridad mas baja.</span></p>
<p><span style="color: rgb(0, 0, 0);">Los operadores con igual prioridad son evaluados de izquierda a derecha.</span></p>
<p><span style="font-size: 11pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 202px; padding: 0px; text-align: center; text-indent: 0px;"><table style="border: medium none ; background-color: rgb(255, 247, 239); border-collapse: collapse;" align="center" bgcolor="#fff7ef" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Operador</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Prioridad</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">no</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">unario -</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">unario +</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="color: rgb(0, 0, 0);">10</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">(</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">)</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="color: rgb(0, 0, 0);">9</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">**</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="color: rgb(0, 0, 0);">8</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">*</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">/</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="color: rgb(0, 0, 0);">7</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">+</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">-</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="color: rgb(0, 0, 0);">6</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&lt;</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&lt;=</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&gt;</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&gt;=</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="color: rgb(0, 0, 0);">5</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">=</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&lt;&gt;</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="color: rgb(0, 0, 0);">4</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">y</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="color: rgb(0, 0, 0);">3</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">xor</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="color: rgb(0, 0, 0);">2</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">o</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="color: rgb(0, 0, 0);">1</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">en</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">no en</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">:=</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">+=</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">-=</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">*=</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">/=</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">**=</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="color: rgb(0, 0, 0);">0</span></p>
</td>
</tr>
</tbody></table>
</div>
<span style="font-size: 11pt; color: rgb(0, 0, 0);"></span><p></p><p>&nbsp;</p><div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;"><br><table style="background-color: rgb(191, 215, 191); border-collapse: collapse;" align="center" bgcolor="#bfd7bf" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(0, 0, 0); width: 605px;" width="605">
<p><span style="color: rgb(0, 0, 0); text-decoration: underline;">Observaciones:</span></p>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;"><table style="border: medium none ;" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="width: 13px;" valign="top" width="13"><p><span style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&#8226;</span></p>
</td>
<td valign="top"><p><span style="color: rgb(0, 0, 0);">'</span><span style="font-weight: bold; color: rgb(0, 0, 0);">Unario -</span><span style="color: rgb(0, 0, 0);">' y '</span><span style="font-weight: bold; color: rgb(0, 0, 0);">unario +</span><span style="color: rgb(0, 0, 0);">' son operadores que afectan el signo de un valor (</span><span style="font-weight: bold; color: rgb(0, 0, 0);">unario +</span><span style="color: rgb(0, 0, 0);"> es poco usado, porque está implícito). Ejemplos de </span><span style="font-weight: bold; color: rgb(0, 0, 0);">unario -</span><span style="color: rgb(0, 0, 0);">: </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">-a</span><span style="color: rgb(0, 0, 255);">, </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">-1</span><span style="color: rgb(0, 0, 255);">,</span><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);"> </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">-(a+b)</span><span style="color: rgb(0, 0, 0);">. Ejemplos de </span><span style="font-weight: bold; color: rgb(0, 0, 0);">unario +</span><span style="color: rgb(0, 0, 0);">:</span><span style="color: rgb(0, 0, 255);"> </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">+a</span><span style="color: rgb(0, 0, 255);">, </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">+1</span><span style="color: rgb(0, 0, 255);">,</span><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);"> </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">+(a+b)</span></p>
</td>
</tr>
</tbody></table>
</div>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;"><table style="border: medium none ;" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="width: 13px;" valign="top" width="13"><p><span style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></p>
</td>
<td valign="top"><p><span style="color: rgb(0, 0, 0);">Usted puede usar <a href="parentheses.php">paréntesis</a> para invalidar las reglas de prioridad</span></p>
</td>
</tr>
</tbody></table>
</div></td></tr></tbody></table></div></td></tr></tbody></table></div>
</body></html>