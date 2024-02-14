<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html><head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> <!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED","ESP"];
var WinProHelpPageName=["Lists","Listes","Lijsten","Listas"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?listes.php"; }
else { parent.quicksync('a2.2.6'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script><title>Listes</title>

<meta name="generator" content="Help &amp; Manual">
<meta name="keywords" content="Dans,Pas Dans,Liste">
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
<a href="introduction.php">Top</a>&nbsp; <a href="parentheses.php">Previous</a>&nbsp; <a href="regles_de_priorite_operateurs.php">Next</a> </span>
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
<p>These special operators let you check that a value is or
is not inside a list of other values.</p>
<p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="border-style: solid; border-color: rgb(255, 255, 255) rgb(105, 105, 104) rgb(105, 105, 104) rgb(255, 255, 255); border-width: 1px;" align="center" border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-weight: bold;">Operator</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 491px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="491">
<p style="margin: 0px 0px 0px 9px; text-align: center;"><span style="font-weight: bold;">Example</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span class="f_Variables">in</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 491px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="491">
<p style="margin: 0px 0px 0px 11px; text-indent: -1px;"><span class="f_Variables">a in 1, 2, 3</span> is true if a
is 1, 2 or 3; false otherwise</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span class="f_Variables">not in</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 491px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="491">
<p style="margin: 0px 0px 0px 11px; text-indent: -1px;"><span class="f_Variables">a not in 1, 2, 3</span><span style="color: rgb(0, 0, 0);"> </span>is true if a has
any value except 1, 2 or 3; false otherwise</p>
</td>
</tr>
</tbody>
</table>
</div>
<p style="margin: 0px 0px 14px;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">Examples:</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 1px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="border-style: solid; border-color: rgb(255, 255, 255) rgb(105, 105, 104) rgb(105, 105, 104) rgb(255, 255, 255); border-width: 1px;" align="center" border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 265px;" width="265">
<p><span class="f_Variables">1 in a, b, c</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 340px;" width="340">
<p style="margin: 0px 0px 0px 10px;">checks
that at least one of the variables a, b and c has the value 1</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 265px;" width="265">
<p><span class="f_Variables">d in a+b, c</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 340px;" width="340">
<p style="margin: 0px 0px 0px 10px;">checks
whether a+b equals d, or if c equals d</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 265px;" width="265">
<p><span class="f_Variables">a in
cosine(45), cosine(135)</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 340px;" width="340">
<p style="margin: 0px 0px 0px 10px;">checks
that a equals cosine of 45°, or cosine of 135°</p>
</td>
</tr>
</tbody>
</table>
</div>
<p style="margin: 0px 0px 0px 1px; text-align: center;"><span style="font-size: 5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="background-color: rgb(191, 215, 191); border-collapse: collapse;" align="center" bgcolor="#bfd7bf" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(0, 0, 0); width: 605px;" width="605">
<p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Notes:</span><span style="font-weight: bold;"> </span></p>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td>
<td>Each element of the expression may be a
number, a variable or an expression.</td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td>
<td><span style="color: rgb(0, 0, 0);">If
a list instruction is used in a logical expression, it is better to put
it between parenthesis; otherwise, because the list operators have the
lowest priority, the terms of the logical expression will be considered
to be part of the list expression.</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> </span>
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
<p style="text-align: center;"><span class="f_Textestd" style="text-decoration: underline;">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">Other
examples:</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If a &lt; b and a in 10, 20, 30 </span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">will be interpreted as: </span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If (a &lt; b and a) in 10, 20, 30</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">You must write: </span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">if a &lt; b and (a in 10, 20, 30)</span><span class="f_Variables"> </span></p>
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Similarly:</span> </p>
<p style="margin: 0px 0px 0px 24px;">&nbsp;</p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If a in 10, 20, 30 and a &lt; b</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">will be interpreted as:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If a in 10, 20, (30 and a &lt; b)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">You must write:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If (a in 10, 20, 30) and a &lt; b</span></p>
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
<p>Il s'agit d'opérateurs d'un type particulier, qui
permettent de vérifier si une valeur se trouve dans une liste donnée.</p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="border: 2px solid rgb(192, 192, 192); background-color: rgb(255, 247, 239); border-collapse: collapse;" align="center" bgcolor="#fff7ef" border="1" cellpadding="2" cellspacing="0">
<tbody>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span style="font-weight: bold;">Operateur</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 491px;" width="491">
<p style="text-align: center;"><span style="font-weight: bold;">Explication</span></p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">Dans</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 491px;" width="491">
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">a Dans 1, 2, 3</span> est <span style="font-weight: bold;">vrai</span> si la valeur de
<span style="color: rgb(0, 0, 255);">a</span>
est soit 1, soit 2, soit 3; <span style="font-weight: bold;">faux</span>
sinon</p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 113px;" width="113">
<p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">Pas
Dans</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 491px;" width="491">
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">a Pas Dans 1, 2, 3</span> est <span style="font-weight: bold;">vrai</span> si la valeur de
<span style="color: rgb(0, 0, 255);">a </span>
n'est pas 1, 2 ou 3; <span style="font-weight: bold;">faux</span>
sinon</p>
</td>
</tr>
</tbody>
</table>
</div>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-weight: bold; text-decoration: underline;">Exemples:</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-size: 5pt; font-family: 'Courier New'; color: rgb(0, 128, 0);">&nbsp;</span></p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="border-collapse: collapse;" align="center" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(0, 0, 0); width: 263px;" width="263">
<p style="text-align: center;"><span class="f_Variables">1 Dans a, b, c</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 364px;" width="364">
<p style="margin: 0px 0px 0px 13px;">vérifie
si au moins une des variables a, b ou c vaut 1</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(0, 0, 0); width: 263px;" width="263">
<p style="text-align: center;"><span class="f_Variables">d Dans a+b, c</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 364px;" width="364">
<p style="margin: 0px 0px 0px 13px;">vérifie
si a+b est égal à d, ou si c est égal à d</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(0, 0, 0); width: 263px;" width="263">
<p style="text-align: center;"><span class="f_Variables">a Dans Cosinus(45), Cosinus(135)</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 364px;" width="364">
<p style="margin: 0px 0px 0px 13px;">vérifie
si a est égal au cosinus de 45 ou au cosinus de 135°</p>
</td>
</tr>
</tbody>
</table>
</div>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="background-color: rgb(191, 215, 191); border-collapse: collapse;" align="center" bgcolor="#bfd7bf" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(0, 0, 0); width: 605px;" width="605">
<p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarques:</span><span style="font-weight: bold;"> </span></p>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td>
<td>Chacun des termes de part et d'autre de
l'opérateur peut être un nombre, une variable ou une expression.</td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td>
<td>Si une liste est utilisée dans une
expression logique, il est préférable de mettre l'ensemble de la liste
entre parenthèses; sans quoi, puisque les opérateurs liste on la
priorité la plus basse, les termes de l'expression logique seront
évalués avec l'un des termes de la liste (le premier ou le dernier,
suivant le cas).
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
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Autres exemples:</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-size: 5pt; font-family: 'Courier New'; color: rgb(0, 128, 0);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Si a &lt; b Et a in 10, 20, 30</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">sera évalué comme:</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Si (a &lt; b Et a) Dans 10, 20, 30</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Vous devez écrire:</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Si a &lt; b Et (a Dans 10, 20, 30)</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt; font-family: 'Courier New'; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">De même</span>:</p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Si a Dans 10, 20, 30 Et a &lt; b</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">sera évalué comme:</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Si a Dans 10, 20, (30 Et a &lt; b)</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Vous devez écrire:</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Si (a Dans 10, 20, 30) Et a &lt; b</span></p>
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
<p><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p>Deze speciale operator staat u toe om te controleren of
één bepaalde waarde aanwezig is binnen een lijst van andere waarden.</p>
<p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="border-style: solid; border-color: rgb(255, 255, 255) rgb(105, 105, 104) rgb(105, 105, 104) rgb(255, 255, 255); border-width: 1px;" align="center" border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span style="font-weight: bold;">Operator</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 491px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="491">
<p style="margin: 0px 0px 0px 9px; text-align: center;"><span style="font-weight: bold;">Voorbeeld</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span class="f_Variables">in</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 491px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="491">
<p style="margin: 0px 0px 0px 11px; text-indent: -1px;"><span class="f_Variables">a in 1, 2, 3</span> is waar als a
gelijk is aan 1, 2 or 3; onwaar in omgekeerd geval</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 113px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="113">
<p style="text-align: center;"><span class="f_Variables">not in</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 491px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="491">
<p style="margin: 0px 0px 0px 11px; text-indent: -1px;"><span class="f_Variables">a not in 1, 2, 3</span><span style="color: rgb(0, 0, 0);"> </span>is waar als a
een waarde buiten 1, 2 of 3 heeft; onwaar in omgekeerd geval</p>
</td>
</tr>
</tbody>
</table>
</div>
<p style="margin: 0px 0px 14px;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">Voorbeeld:</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 1px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="border-style: solid; border-color: rgb(255, 255, 255) rgb(105, 105, 104) rgb(105, 105, 104) rgb(255, 255, 255); border-width: 1px;" align="center" border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 265px;" width="265">
<p><span class="f_Variables">1 in a, b, c</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 340px;" width="340">
<p style="margin: 0px 0px 0px 10px;">controleert
of tenminste één van de variabelen a,b of c de waarde 1 heeft</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 265px;" width="265">
<p><span class="f_Variables">d in a+b, c</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 340px;" width="340">
<p style="margin: 0px 0px 0px 10px;">controleert
of a+b gelijk is aan d, of als c gelijk is aan d</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(255, 255, 255); width: 265px;" width="265">
<p><span class="f_Variables">a in
cosine(45), cosine(135)</span></p>
</td>
<td style="border: 1px solid rgb(255, 255, 255); width: 340px;" width="340">
<p style="margin: 0px 0px 0px 10px;">controleert
of een gelijke cosinus van 45°, of cosinus van 135°</p>
</td>
</tr>
</tbody>
</table>
</div>
<p style="margin: 0px 0px 0px 1px; text-align: center;"><span style="font-size: 5pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="background-color: rgb(191, 215, 191); border-collapse: collapse;" align="center" bgcolor="#bfd7bf" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr align="left" valign="top">
<td style="border: 1px solid rgb(0, 0, 0); width: 605px;" width="605">
<p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Nota:</span><span style="font-weight: bold;"> </span></p>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td>
<td>Elk element van de expressie mag een
getal,een variabele of een expressie zijn.</td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td>
<td><span style="color: rgb(0, 0, 0);">Wanneer
een lijst van instructies gebruikt word in een logische expressie, dan
is het beter deze tussen haakjes te plaatsen; anders, worden de termen
van de logische expressie aanzien als deeel van de lijst expressie. en
deze heeft de laagste prioriteit.</span><span style="font-weight: bold; color: rgb(0, 0, 0);"> </span>
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
<p style="text-align: center;"><span class="f_Textestd" style="text-decoration: underline;">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">Andere
voorbeelden:</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If a &lt; b and a in 10, 20, 30 </span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">zal geinterpreteerd worden als: </span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If (a &lt; b and a) in 10, 20, 30</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">U moet schrijven: </span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">if a &lt; b and (a in 10, 20, 30)</span><span class="f_Variables"> </span></p>
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Similarly:</span> </p>
<p style="margin: 0px 0px 0px 24px;">&nbsp;</p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If a in 10, 20, 30 and a &lt; b</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">zal geinterpreteerd worden als:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If a in 10, 20, (30 and a &lt; b)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">You must write:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">If (a in 10, 20, 30) and a &lt; b</span></p>
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
<p><span style="color: rgb(0, 0, 0);"></span></p><p><span style="color: rgb(0, 0, 0);">Estos operadores especiales permiten verificar si un valor está o no está dentro de una lista de otros valores.</span></p>
<p><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 4px; padding: 0px; text-align: center; text-indent: 0px;"><table style="border: medium none ; background-color: rgb(255, 247, 239); border-collapse: collapse;" align="center" bgcolor="#fff7ef" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Operador</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 491px;" valign="top" width="491"><p><span style="font-weight: bold; color: rgb(0, 0, 0);">Ejemplo</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">en</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 491px;" valign="top" width="491"><p><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a en 1, 2, 3</span><span style="color: rgb(0, 0, 0);"> &nbsp;es verdadero si a es 1, 2 o 3; sino falso</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 113px;" valign="top" width="113"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">no en</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 491px;" valign="top" width="491"><p><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a no en 1, 2, 3</span><span style="color: rgb(0, 0, 0);"> &nbsp;es verdadero si a tiene cualquier valor excepto 1, 2 or 3; sino falso</span></p>
</td>
</tr>
</tbody></table>
</div>
<p><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p><span style="font-weight: bold; color: rgb(0, 0, 0); text-decoration: underline;">Ejemplos:</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-size: 5pt; font-family: 'Courier New'; color: rgb(0, 128, 0);">&nbsp;</span></p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;"><table style="border: medium none ; border-collapse: collapse;" align="center" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 265px;" valign="top" width="265"><p><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">1 en a, b, c</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 347px;" valign="top" width="347"><p><span style="color: rgb(0, 0, 0);">Verifica que al menos una de las variables </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a</span><span style="color: rgb(0, 0, 0);">, </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">b</span><span style="color: rgb(0, 0, 0);"> y </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">c</span><span style="color: rgb(0, 0, 0);"> tienen el valor 1</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 265px;" valign="top" width="265"><p><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">d in a+b, c</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 347px;" valign="top" width="347"><p><span style="color: rgb(0, 0, 0);">Verifica si </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a+b</span><span style="color: rgb(0, 0, 0);"> es igual a </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">d</span><span style="color: rgb(0, 0, 0);">, o si </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">c</span><span style="color: rgb(0, 0, 0);"> es igual a </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">d</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 265px;" valign="top" width="265"><p><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a in coseno(45), coseno(135)</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 347px;" valign="top" width="347"><p><span style="color: rgb(0, 0, 0);">verifica que </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">a</span><span style="color: rgb(0, 0, 0);"> sea igual al coseno de 45°, o coseno de 135°</span></p>
</td>
</tr>
</tbody></table>
</div>
<p><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 4px; padding: 0px; text-align: center; text-indent: 0px;"><table style="border: medium none ; background-color: rgb(191, 215, 191); border-collapse: collapse;" align="center" bgcolor="#bfd7bf" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 605px;" valign="top" width="605"><p><span style="font-weight: bold; color: rgb(0, 0, 0); text-decoration: underline;">Observaciones:</span></p>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;"><table style="border: medium none ;" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="width: 13px;" valign="top" width="13"><p><span style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></p>
</td>
<td valign="top"><p><span style="color: rgb(0, 0, 0);">Cada elemento de una expresión debe ser un número, una variable o una expresión</span></p>
</td>
</tr>
</tbody></table>
</div>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;"><table style="border: medium none ;" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="width: 13px;" valign="top" width="13"><p><span style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></p>
</td>
<td valign="top"><p><span style="color: rgb(0, 0, 0);">Si una lista es
usada en una expresión lógica,es mejor ponerla entre parentesis; De
otro modo, dado que los operadores de lista tienen la mas baja
prioridad, los términos de la expresión logica serán considerados como
parte de la expresión de lista</span></p>
</td>
</tr>
</tbody></table>
</div>
</td>
</tr>
</tbody></table>
</div>
<p><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="color: rgb(0, 0, 0); text-decoration: underline;">Ejemplos:</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-size: 5pt; font-family: 'Courier New'; color: rgb(0, 128, 0);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Si a &lt; b y a en 10, 20, 30</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Será interpretada como:</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Si (a &lt; b y a) en 10, 20, 30</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Usted debe escribir:</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Si a &lt; b y (a en 10, 20, 30)</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt; font-family: 'Courier New'; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="color: rgb(0, 0, 0); text-decoration: underline;">De forma similar</span><span style="color: rgb(0, 0, 0);">:</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Si a en 10, 20, 30 y a &lt; b</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">será interpretada como:</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Si a in 10, 20, (30 y a &lt; b)</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Usted debe escribir:</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Si (a en 10, 20, 30) y a &lt; b</span></p>
<span style="color: rgb(0, 0, 0);"></span><p><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p></td></tr></tbody></table></div>
</body></html>