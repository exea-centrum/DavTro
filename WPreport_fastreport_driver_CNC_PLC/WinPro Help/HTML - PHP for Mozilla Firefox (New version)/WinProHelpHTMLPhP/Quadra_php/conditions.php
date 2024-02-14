<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html><head>
<script type="text/JavaScript" src="wplang.js">
</script>
<script type="text/JavaScript">
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED","ESP"];
var WinProHelpPageName=["Conditions","Conditions","Voorwaarden","Condiciones"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?conditions.php"; }
else { parent.quicksync('a2.3.1'); }
//--></script>
<script type="text/javascript" src="highlight.js">
</script><title>Conditions</title>

<meta name="keywords" content="Condition,Si,Fin Si,Sinon,Sinon &nbsp;Si,Expression conditionnelle">
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
<td align="right"><span style="font-size: 9pt;"><a href="introduction.php">Top</a>&nbsp; <a href="flowcontrolinstructions.php">Previous</a>&nbsp;
<a href="boucles.php">Next</a> </span> </td>
</tr>
</tbody>
</table>
<div class="ENG">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%">
<tbody>
<tr valign="top">
<td align="left">
<p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<p>Condition instructions let you test a logical
expression, and execute groups of statements depending on the result of
the expression.</p>
<p>All condition block starts with the<span style="color: rgb(0, 0, 255);"></span><span style="font-weight: bold; color: rgb(0, 0, 255);">If...</span>
instruction. Instructions starting on the next line after this
instruction, will be executed if the expression is true. After this <span style="font-weight: bold; color: rgb(0, 0, 255);">If</span>
instruction, you may have three other instructions:</p>
<div style="margin: 0px 0px 0px 1px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="border-style: solid; border-color: rgb(218, 218, 218) rgb(105, 105, 104) rgb(105, 105, 104) rgb(218, 218, 218); border-width: 1px;" align="center" border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 76px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="76">
<p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">If</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 529px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="529">
<p style="margin: 0px 0px 0px 14px;">Start of
the condition block. Must be followed by a logical instruction; when
this logical instruction yields a <span class="f_Variables">True()</span>
value, the instructions immediately after the <span class="f_Variables">If</span> instruction are
executed; if it yields <span class="f_Variables">False()</span>,
the corresponding <span class="f_Variables">Else If</span>,
<span class="f_Variables">Else</span> or
<span class="f_Variables">End If</span>
instruction is searched, in this order.</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 76px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="76">
<p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">Else
If</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 529px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="529">
<p style="margin: 0px 0px 0px 14px;">Similar
to <span class="f_Variables">Else</span>, but the
instruction has another expression to test. If this new expression is
true, the next line will be executed, otherwise WinPro will look for
the next <span class="f_Variables">Else</span>, <span class="f_Variables">Else If</span> or <span class="f_Variables">End If</span> instruction.</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 76px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="76">
<p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">Else</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 529px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="529">
<p style="margin: 0px 0px 0px 14px;"><span style="color: rgb(0, 0, 0);">If the test of the previous
conditional expression yields a </span><span class="f_Variables">False()</span><span style="color: rgb(0, 0, 0);">value, the lines following the </span><span class="f_Variables">Else </span><span style="color: rgb(0, 0, 0);">instruction will be executed.</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 76px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="76">
<p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">End
If</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 529px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="529">
<p style="margin: 0px 0px 0px 14px;"><span style="color: rgb(0, 0, 0);">End of the condition block.
Execution resumes on the next instruction.</span></p>
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
<p style="margin: 0px 0px 0px 9px;"><span style="font-weight: bold; text-decoration: underline;">Notes:</span></p>
<div style="margin: 0px 0px 0px 9px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td>
<td>An instruction block starting with <span class="f_Variables">If</span> will be followed by <span class="f_Variables">Else</span>, <span class="f_Variables">Else If</span> or <span class="f_Variables">End If</span>.</td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 9px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td>
<td>An instruction block starting with <span class="f_Variables">Else If</span> will be followed by
<span class="f_Variables">Else If</span>
or <span class="f_Variables">End If</span>. </td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 9px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td>
<td>An instruction block starting with <span class="f_Variables">Else</span> can only be followed
by <span class="f_Variables">End If</span>. </td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 9px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td>
<td>You can nest several <span class="f_Variables">If ... Else If ... Else ... End If</span>.
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
<p style="margin: 0px 0px 0px 24px;"><span style="color: rgb(0, 0, 0); text-decoration: underline;">Examples:</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="color: rgb(0, 0, 0); text-decoration: underline;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># 1st example</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">if a = b</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;instructions</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">end if</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># instructions are executed only if a
equals b</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># 2nd example</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">if a = b</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;instructions1</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">else</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;instructions2</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">end if</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># if a equals b, instructions1 are
executed;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># otherwise, instructions2 are executed</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># 3rd example</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">if a = b</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;instructions1</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">else if a = c</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;instructions2</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">else</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;instructions3</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">end if</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># instructions1 are executed if a equals
b;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># otherwise, if a equals c,
instructions2 are executed</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># otherwise, instructions3 are executed.</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># 4th example</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">if a = b</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;instructions1</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">else if a = c</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;instructions2</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">end if</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># instructions1 are executed if a equals
b;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># otherwise, if a equals c,
instructions2 are executed</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># otherwise, nothing happens</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># 5th example</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">if a = b</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;if a = c</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp; &nbsp; instructions 1</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;end if</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;instructions2</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">else if a = c</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;instructions3</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">else if</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># example of nested condition
instructions</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Remark: (instructions, instructions1,
instructions2, instructions3</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># ======= &nbsp;may each be one or
several lines)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&nbsp;</span></p>
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
<p>Les instructions de condition permettent de tester une
expression logique, et d'exécuter une ou plusieurs lignes en fonction
du résultat de cette évaluation.</p>
<p>Tout bloc conditionnel débute par une instruction <span style="font-weight: bold; color: rgb(0, 0, 255);">Si</span>...
. Immédiatement après cette instruction, figure la ou les ligne(s) à
exécuter, si la condition est vraie. Ensuite, on trouvera l'une des
trois instructions suivantes:</p>
<p>&nbsp;</p>
<p style="margin: 0px 0px 0px 24px;"><span style="font-size: 5pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&nbsp;</span></p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="border: 2px solid rgb(192, 192, 192); background-color: rgb(255, 247, 239); border-collapse: collapse;" align="center" bgcolor="#fff7ef" border="1" cellpadding="2" cellspacing="0">
<tbody>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 76px;" width="76">
<p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">Si</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 529px;" width="529">
<p style="margin: 0px 0px 0px 13px;">Début
d'un nouveau bloc conditionnel. Doit être suivi d'une condition
logique; lorsque cette instruction logique renvoie la valeur <span class="f_Variables">Vrai()</span>, les instructions se
trouvant juste après la ligne du <span style="color: rgb(0, 0, 255);">Si</span> son
exécutées; si la valeur est <span class="f_Variables">Faux()</span>,
l'instruction <span class="f_Variables">Sinon Si</span>,
<span class="f_Variables">Sinon</span>
ou <span class="f_Variables">Fin Si</span> est
recherchée dans cet ordre.</p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 76px;" width="76">
<p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">Sinon
Si</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 529px;" width="529">
<p style="margin: 0px 0px 0px 13px;">comme <span style="color: rgb(0, 0, 255);">Sinon</span>, mais on
teste une nouvelle condition</p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 76px;" width="76">
<p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">Sinon</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 529px;" width="529">
<p style="margin: 0px 0px 0px 13px;">si le
test donne un résultat <span style="color: rgb(0, 0, 255);">Faux()</span>,
ce sont les lignes qui suivent cette instruction qui seront exécutées.</p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 76px;" width="76">
<p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">Fin Si</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 529px;" width="529">
<p style="margin: 0px 0px 0px 13px;">il n'y a
plus rien a tester. L'exécution reprend inconditionnellement à
l'instruction suivante</p>
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
<p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarques:</span></p>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td>
<td>Une instruction <span class="f_Variables">Si</span> sera suivie, au choix,
d'un <span class="f_Variables">Sinon</span>, <span class="f_Variables">Sinon Si</span> ou <span class="f_Variables">Fin Si</span>.</td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td>
<td>Une instruction <span class="f_Variables">Sinon Si</span> sera suivie, au
choix, d'un <span class="f_Variables">Sinon Si</span>
ou <span class="f_Variables">Fin Si</span>.</td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td>
<td>Une instruction <span class="f_Variables">Sinon</span> sera obligatoirement
suivie d'un <span class="f_Variables">Fin Si</span>.</td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td>
<td>On peut imbriquer plusieurs instructions <span class="f_Variables">Si ... Sinon Si ... Sinon ... Fin Si</span>
l'une dans l'autre.</td>
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
<p style="margin: 0px 0px 0px 27px;"><span style="text-decoration: underline;">Exemples:</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"># 1er exemple</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Si a = b</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;&nbsp;&nbsp;instructions</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Fin Si</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"># Les instructions ne sont exécutées que
si a est bien égal à b</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"># 2ème exemple</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Si a = b</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;&nbsp;&nbsp;instructions
n°1</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Sinon</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;&nbsp;&nbsp;instructions
n°2</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Fin Si</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"># Si a égale b, les instructions n°1
sont exécutées; </span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"># Si a &lt;&gt; b, les
instructions n°2 sont exécutées;</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"># 3rd exemple</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Si a = b</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;&nbsp;&nbsp;instructions
n°1</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Sinon Si a = c</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;&nbsp;&nbsp;instructions
n°2</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Sinon</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;&nbsp;&nbsp;instructions
n°3</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Sinon Si</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"># Si a égale b, les instructions n°1
sont exécutées; </span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"># Si a égale c, les instructions n°2
sont exécutées; </span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"># Si les 2 premières conditions sont
fausses, les instructions n°3 sont exécutées;</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"># 4ème exemple</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Si a = b</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;&nbsp;&nbsp;instructions
n°1</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Sinon Si a = c</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;&nbsp;&nbsp;instructions
n°2</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Fin Si</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"># Si a égale b, les instructions n°1
sont exécutées; </span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"># Si a égale c, les instructions n°2
sont exécutées; </span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"># Rien ne se produit lorsqu'aucune de
ces 2 conditions n'est vraie();</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"># 5ème exemple</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Si a = b</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;&nbsp;&nbsp;Si a = c</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;instructions
n°1</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;&nbsp;&nbsp;Fin Si</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;&nbsp;&nbsp;instructions
n°2</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Sinon Si a = c</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;&nbsp;&nbsp;instructions
n°3</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Fin Si</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables"># exemple d'instructions conditionnelles
imbriquées</span></p>
<p style="margin: 0px 0px 0px 40px;">&nbsp;</p>
<p style="margin: 0px 0px 0px 18px;"><span style="font-family: 'Courier New'; font-style: italic; color: rgb(0, 0, 0);">Remarque:
instructions, instructions n°1, instructions n°2, instructions n°3
peuvent correspondre à une ou plusieurs lignes. </span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;</span></p>
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
<p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<p>Voorwaarden instructies staan u toe een logische
expressie te testen, en laat u, afhankelijk van de uitslag van de
expressie, groepen van intructies uitvoeren.</p>
<p>Alle blokken van voorwaarden beginnen met de <span style="color: rgb(0, 0, 255);"></span><span style="font-weight: bold; color: rgb(0, 0, 255);">If...</span>
instructie. Instructies welke beginnen op de volgende lijn na deze
instructie,worden uitgevoerd als de expressie (voorwaarde) waar is. Na
deze <span style="font-weight: bold; color: rgb(0, 0, 255);">If</span>
instructie, kan je nog 3 andere instructies hebben:</p>
<div style="margin: 0px 0px 0px 1px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="border-style: solid; border-color: rgb(218, 218, 218) rgb(105, 105, 104) rgb(105, 105, 104) rgb(218, 218, 218); border-width: 1px;" align="center" border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 76px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="76">
<p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">If</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 529px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="529">
<p style="margin: 0px 0px 0px 14px;">Start van
de blok van voorwaarden. Moet geveolgd worden door een logische
instructie; wanneer deze logische instructie een <span class="f_Variables">True()</span> waarde bevat, worden
de instructies direct achter the <span class="f_Variables">If</span>
instructie uigevoerd; als dit <span class="f_Variables">False()</span>bevat,
wordt de corresponderende <span class="f_Variables">Else
If</span>, <span class="f_Variables">Else</span>
of <span class="f_Variables">End If</span>
instructie gezocht, in deze volgorde.</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 76px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="76">
<p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">Else
If</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 529px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="529">
<p style="margin: 0px 0px 0px 14px;">Zelfde
als <span class="f_Variables">Else</span>, maar de
iinstructie heeft nog een andere expressie te testen.Indien deze nieuwe
expressie waar is wordt de volgende lijn uitgevoerd,anders zal Winpro
zoeken naar de volgende <span class="f_Variables">Else</span>,
<span class="f_Variables">Else If</span>
of <span class="f_Variables">End If</span>
instructie.</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 76px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="76">
<p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">Else</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 529px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="529">
<p style="margin: 0px 0px 0px 14px;"><span style="color: rgb(0, 0, 0);">Als de test van de vorige
voorwaarden een </span><span class="f_Variables">False()</span><span style="color: rgb(0, 0, 0);">waarde bevat, worden de lijnen
volgend op de </span><span class="f_Variables">Else
</span><span style="color: rgb(0, 0, 0);">instructie
uitgevoerd.</span></p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 76px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="76">
<p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">End
If</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 529px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="529">
<p style="margin: 0px 0px 0px 14px;"><span style="color: rgb(0, 0, 0);">Einde van de voorwaarde blok.
Uitvoeringen gebeurd bij de volgende instructie.</span></p>
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
<p style="margin: 0px 0px 0px 9px;"><span style="font-weight: bold; text-decoration: underline;">Nota:</span></p>
<div style="margin: 0px 0px 0px 9px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td>
<td>Een instructie blok welke start met <span class="f_Variables">If</span> zal gevolgd worden door <span class="f_Variables">Else</span>, <span class="f_Variables">Else If</span> of <span class="f_Variables">End If</span>.</td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 9px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td>
<td>Een instructie blok welke start met <span class="f_Variables">Else If</span> zal gevolgd worden
door <span class="f_Variables">Else If</span> of <span class="f_Variables">End If</span>. </td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 9px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td>
<td>Een instructie blok welke start met <span class="f_Variables">Else</span> kan gevolgd worden
door <span class="f_Variables">End If</span>. </td>
</tr>
</tbody>
</table>
</div>
<div style="margin: 0px 0px 0px 9px; padding: 0px; text-align: left; text-indent: 0px;">
<table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr valign="baseline">
<td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td>
<td>U kan tevens meerdere <span class="f_Variables">If ... Else If ... Else ... End If <span style="color: rgb(0, 0, 0);">nesten</span></span><span style="color: rgb(0, 0, 0);">.</span> </td>
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
<p style="margin: 0px 0px 0px 24px;"><span style="color: rgb(0, 0, 0); text-decoration: underline;">Voorbeelden:</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="color: rgb(0, 0, 0); text-decoration: underline;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># 1st voorbeeld</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">if a = b</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;instructions</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">end if</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># instructies worden uitgevoerd wanneer
a gelijk is aan b</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># 2de voorbeeld</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">if a = b</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;instructions1</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">else</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;instructions2</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">end if</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># als a gelijk is aan b, instructions1
wordt uitgevoerd;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># anders, instructions2 wordt uitgevoerd.</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># 3de voorbeeld</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">if a = b</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;instructions1</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">else if a = c</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;instructions2</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">else</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;instructions3</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">end if</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># als a gelijk is aan b, instructions1
wordt uitgevoerd;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># anders,als a gelijk is aan c,
instructions2 wordt uitgevoerd</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># anders, instructions3 wordt uitgevoerd.</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># 4de voorbeeld</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">if a = b</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;instructions1</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">else if a = c</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;instructions2</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">end if</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># als a gelijk is aan b, instructions1
wordt uitgevoerd;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># anders,als a gelijk is aan c,
instructions2 wordt uitgevoerd</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># anders,wordt er NIETS uitgevoerd</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># 5de voorbeeld</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">if a = b</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;if a = c</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp; &nbsp; instructions 1</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;end if</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;instructions2</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">else if a = c</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;instructions3</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">else if</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># voorbeeld van een geneste instructie</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Opmerking: (instructions,
instructions1, instructions2, instructions3</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># =======&nbsp;&nbsp;kunnen elk
één of meerdere lijnen bevatten)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&nbsp;</span></p>
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
<p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<p><span style="color: rgb(0, 0, 0);">Las
instrucciones de condición le permiten evaluar una expresión lógica, y
ejecutar grupos de instrucciones dependiendo del resultado de la
expresión.</span></p>
<p><span style="color: rgb(0, 0, 0);">Todos los bloques de condición comienzan con la instuccion </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Si</span><span style="color: rgb(0, 0, 0);">.
&nbsp;<br>Las instrucciones que aparecen en la siguiente linea tras esta
instrucción, serán ejecutadas si la expresión es verdadera. <br>Luego de la
instrucción </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Si</span><span style="color: rgb(0, 0, 0);"> se pueden encontrar otras tres instrucciones:</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="font-size: 5pt; font-family: 'Arial Unicode MS'; color: rgb(0, 0, 255);">&nbsp;</span></p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;"><table style="border: medium none ; background-color: rgb(255, 247, 239); border-collapse: collapse;" align="center" bgcolor="#fff7ef" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 76px;" valign="top" width="76"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Si</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 529px;" valign="top" width="529"><p><span style="color: rgb(0, 0, 0);">Inicio del bloque de condición. Debe ser seguido de una instrucción lógica; cuando esta instrucción lógica se evalúa a </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Verdadero()</span><span style="color: rgb(0, 0, 0);">, las instrucciones inmediatamente posteriores al  </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Si</span><span style="color: rgb(0, 0, 0);"> son ejecutadas; si se evalúa a </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Falso()</span><span style="color: rgb(0, 0, 0);">, la correspondiente instrucción </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Sino Si</span><span style="color: rgb(0, 0, 0);">, </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Sino</span><span style="color: rgb(0, 0, 0);"> o </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Fin Si</span><span style="color: rgb(0, 0, 0);"> es buscada, en ese orden.</span></p>
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 76px;" valign="top" width="76"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Fin Si</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 529px;" valign="top" width="529"><p><span style="color: rgb(0, 0, 0);">Ya no hay nada que probar. La ejecución reanuda incondicionalmente a la instrucción siguiente.</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 76px;" valign="top" width="76"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Sino</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 529px;" valign="top" width="529"><p><span style="color: rgb(0, 0, 0);">si la prueba da un resultado falso, entonces las líneas que siguen a esta instrucción se realizarán.</span></p>
<p><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 76px;" valign="top" width="76"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Sino Si</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 529px;" valign="top" width="529"><p><span style="color: rgb(0, 0, 0);">Como </span><span style="font-weight: bold; color: rgb(0, 0, 255);">Sino</span><span style="color: rgb(0, 0, 0);">, pero se prueba una nueva condición.</span></p>
</td>
</tr>
</tbody></table>
</div>
<p><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;"><table style="border: medium none ; background-color: rgb(191, 215, 191); border-collapse: collapse;" align="center" bgcolor="#bfd7bf" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 605px;" valign="top" width="605"><p><span style="color: rgb(0, 0, 0); text-decoration: underline;">Observaciones:</span></p>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;"><table style="border: medium none ;" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="width: 13px;" valign="top" width="13"><p><span style="font-size: 12pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></p>
</td>
<td valign="top"><p><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Una instrucción </span><span style="font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold; color: rgb(0, 0, 255);">Si</span><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"> irá seguida, de un '</span><span style="font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold; color: rgb(0, 0, 255);">Sino</span><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">', de '</span><span style="font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold; color: rgb(0, 0, 255);">Sino si</span><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">' o de '</span><span style="font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold; color: rgb(0, 0, 255);">Fin si'</span><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">, a su elección.</span></p>
</td>
</tr>
</tbody></table>
</div>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;"><table style="border: medium none ;" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="width: 13px;" valign="top" width="13"><p><span style="font-size: 12pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></p>
</td>
<td valign="top"><p><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Una instrucción '</span><span style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: rgb(0, 0, 255);">Sino si</span><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">' irá seguida, de uno '</span><span style="font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold; color: rgb(0, 0, 255);">Si no si</span><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">' o de '</span><span style="font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold; color: rgb(0, 0, 255);">Fin si</span><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">'.</span></p>
</td>
</tr>
</tbody></table>
</div>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;"><table style="border: medium none ;" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="width: 13px;" valign="top" width="13"><p><span style="font-size: 12pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></p>
</td>
<td valign="top"><p><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Una instrucción '</span><span style="font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold; color: rgb(0, 0, 255);">Sino</span><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">' &nbsp;irá obligatoriamente seguida de un '</span><span style="font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold; color: rgb(0, 0, 255);">Fin si'</span><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">.</span></p>
</td>
</tr>
</tbody></table>
</div>
<div style="margin: 0px 0px 0px 14px; padding: 0px; text-align: left; text-indent: 0px;"><table style="border: medium none ;" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="width: 13px;" valign="top" width="13"><p><span style="font-size: 12pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></p>
</td>
<td valign="top"><p><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">Se pueden anidar varias instrucciones '</span><span style="font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold; color: rgb(0, 0, 255);">Si... Si no si... Si no... Fin si</span><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">' una dentro de otra.</span></p>
</td>
</tr>
</tbody></table>
</div>
<p style="margin: 0px 0px 0px 13px;"><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
</td>
</tr>
</tbody></table>
</div>
<p><span style="font-size: 5pt; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p><span style="font-weight: bold; color: rgb(0, 0, 0); text-decoration: underline;">Ejemplos:</span></p>
<p><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-weight: bold; color: rgb(0, 0, 255); text-decoration: underline;"># 1° ejemplo</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-weight: bold; color: rgb(0, 0, 255);">Si a = b</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="color: rgb(0, 0, 255);">Instrucciones</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-weight: bold; color: rgb(0, 0, 255);">Fin si</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-style: italic; color: rgb(0, 0, 255);"># Instrucciones se ejecuta únicamente </span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-style: italic; color: rgb(0, 0, 255);"># si a igual b</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="color: rgb(0, 0, 255);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-weight: bold; color: rgb(0, 0, 255); text-decoration: underline;"># 2° ejemplo</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-weight: bold; color: rgb(0, 0, 255);">si a = b</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="color: rgb(0, 0, 255);">Instrucciones1</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-weight: bold; color: rgb(0, 0, 255);">si no</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="color: rgb(0, 0, 255);">Instrucciones2</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-weight: bold; color: rgb(0, 0, 255);">fin si</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-style: italic; color: rgb(0, 0, 255);"># si a = b, se ejecuta Instrucciones1;</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-style: italic; color: rgb(0, 0, 255);"># sino (a &lt;&gt; b) se ejecuta Instrucciones2</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="color: rgb(0, 0, 255);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-weight: bold; color: rgb(0, 0, 255); text-decoration: underline;"># 3° ejemplo</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-weight: bold; color: rgb(0, 0, 255);">si a = b</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="color: rgb(0, 0, 255);">Instrucciones1</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-weight: bold; color: rgb(0, 0, 255);">Sino Si a = c</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="color: rgb(0, 0, 255);">Instrucciones2</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-weight: bold; color: rgb(0, 0, 255);">Sino</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="color: rgb(0, 0, 255);">Instrucciones3</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-weight: bold; color: rgb(0, 0, 255);">Fin si</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-style: italic; color: rgb(0, 0, 255);"># Instrucciones1 se ejecuta si a igual b;</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-style: italic; color: rgb(0, 0, 255);"># si no, si a es differente de b y a igual c,</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-style: italic; color: rgb(0, 0, 255);"># se ejecuta Instrucciones2; si niguna de las condiciones</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-style: italic; color: rgb(0, 0, 255);"># anteriores es verdadera, se ejecuta Instrucciones3.</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="color: rgb(0, 0, 255);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-weight: bold; color: rgb(0, 0, 255); text-decoration: underline;"># 4° ejemplo</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-weight: bold; color: rgb(0, 0, 255);">si a = b</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="color: rgb(0, 0, 255);">Instrucciones1</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-weight: bold; color: rgb(0, 0, 255);">sino si a = c</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="color: rgb(0, 0, 255);">Instrucciones2</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-weight: bold; color: rgb(0, 0, 255);">fin si</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-style: italic; color: rgb(0, 0, 255);"># Instrucciones1 se ejecuta si a igual b;</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-style: italic; color: rgb(0, 0, 255);"># si no, si a es differente de b y a igual &nbsp;c,</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-style: italic; color: rgb(0, 0, 255);"># se ejecuta Instrucciones2</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="color: rgb(0, 0, 255);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-weight: bold; color: rgb(0, 0, 255); text-decoration: underline;"># 5° ejemplo</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-weight: bold; color: rgb(0, 0, 255);">Si a = b</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-weight: bold; color: rgb(0, 0, 255);">Si a = c</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="color: rgb(0, 0, 255);">Instrucciones 1</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-weight: bold; color: rgb(0, 0, 255);">Fin Si</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="color: rgb(0, 0, 255);">Instrucciones2</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-weight: bold; color: rgb(0, 0, 255);">Si no Si a = c</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="color: rgb(0, 0, 255);">Instrucciones3</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-weight: bold; color: rgb(0, 0, 255);">Fin si</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-style: italic; color: rgb(0, 0, 255);"># ejemplo de Instrucciones conditionales anidadas</span></p>
<p><span style="color: rgb(0, 127, 0);">&nbsp;</span></p>
<p><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0); text-decoration: underline;">N.B.:</span><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"> (Instrucciones, Instrucciones1, Instrucciones2, Instrucciones3 pueden corresponder a una o varias lineas)</span></p>





<p></p><p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&nbsp;</span></p>
</td>
</tr>
</tbody>
</table>
</div>
</body></html>