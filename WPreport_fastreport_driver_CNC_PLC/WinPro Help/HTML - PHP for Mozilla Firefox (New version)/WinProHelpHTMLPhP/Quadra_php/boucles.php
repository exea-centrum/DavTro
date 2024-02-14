<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html><head>
<script type="text/JavaScript" src="wplang.js">
</script>
<script type="text/JavaScript">
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED","ESP"];
var WinProHelpPageName=["Loops","Boucles","Loops","Bucles"];
WPlangInit(WinProHelpAvailableLanguages);
// Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?boucles.php"; }
else { parent.quicksync('a2.3.2'); }
//--></script>
<script type="text/javascript" src="highlight.js">
</script><title>Boucles</title>

<meta name="keywords" content="Boucle,Fin Boucle,Sortir Boucle,Repeter Tant Que,Fin Repeter,Repeter,Tant Que,Retour">
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
<td align="right"><span style="font-size: 9pt;"><a href="introduction.php">Top</a>&nbsp; <a href="conditions.php">Previous</a>&nbsp; <a href="ruptures.php">Next</a> </span> </td>
</tr>
</tbody>
</table>
<div class="ENG">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%">
<tbody>
<tr valign="top">
<td align="left">
<p>&nbsp;</p>
<p>A loop instruction tells WinPro that you have to
repeatedly execute a block of instructions, between the start and the
end of the loop. Loops can be nested, contain conditions, be contained
in conditions, ...</p>
<p>&nbsp;</p>
<p>WinPro has three types of loops:</p>
<p>&nbsp;</p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="border-style: solid; border-color: rgb(218, 218, 218) rgb(105, 105, 104) rgb(105, 105, 104) rgb(218, 218, 218); border-width: 1px;" align="center" border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="151">
<p>Instruction</p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 454px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="454">
<p>Description</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 151px; height: 81px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="151">
<p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">Loop</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">...</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">End
loop</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 454px; height: 81px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="454">
<p>There is no predefined condition to exit the loop.</p>
<p>You must use at some point one or more <span class="f_Variables">Exit loop</span> instructions
somewhere inside the loop.</p>
<p>Alternatively, you can also exit the loop using
the <span class="f_Variables">Return</span>
instruction, which will also quit the currently executing formula.</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="151">
<p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">Repeat
While</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">...</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">End
Repeat</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 454px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="454">
<p>The condition expression contained in the <span class="f_Variables">Repeat While</span> instruction is
evaluated.</p>
<p>If it is true, the instructions inside the loop
(which ends at <span class="f_Variables">End Repeat</span>)
are evaluated. Then you check again the condition expression at the
first line of the loop, and start over until this expression is false.</p>
<p>You can also use the <span class="f_Variables">Exit
Loop</span> instruction inside the loop.</p>
<p>With this kind of loop, it is possible never to
execute the loop instruction, if the condition expression is false from
the start.</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="151">
<p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">Repeat</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">...</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">While</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 454px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="454">
<p>The instructions inside the loop are executed,
then the condition following the <span class="f_Variables">While</span>
instruction is tested.</p>
<p>If it is true, the loop is executed again, until
this expression is false.</p>
<p>You can also use the <span class="f_Variables">Exit
Loop</span> instruction inside the loop.</p>
<p>This kind of loop guarantees that the loop
instructions are executed at least once.</p>
</td>
</tr>
</tbody>
</table>
</div>
<p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Examples:</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">&nbsp;</span></p>
<p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span class="f_Heading1" style="text-decoration: underline;">Loop
... End Loop</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">a := 1</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">b := 10</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">Loop</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">&nbsp;a += 1</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">&nbsp;if a &gt;= b</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">Exit Loop</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">&nbsp;End if</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">&nbsp;b -= 1</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">End Loop</span></p>
<p style="margin: 0px 0px 0px 48px;">The loop is
executed as long as a is smaller than b.</p>
<p style="margin: 0px 0px 0px 48px;">When the loop
starts, a is incremented by 1.</p>
<p style="margin: 0px 0px 0px 48px;">Then, the
program checks if a is greater than or equal to b.</p>
<p style="margin: 0px 0px 0px 48px;">If so, the loop
ends; if not, b is decremented by 1, and the loop is executed again.</p>
<p style="margin: 0px 0px 0px 48px;">The values of a
and b will be, successively:</p>
<p style="margin: 0px 0px 0px 59px;">1, 10 (before
starting the loop)</p>
<p style="margin: 0px 0px 0px 59px;">2, 9 (after
first run)</p>
<p style="margin: 0px 0px 0px 59px;">3, 8 (after
second run)</p>
<p style="margin: 0px 0px 0px 59px;">4, 7 (after
third run)</p>
<p style="margin: 0px 0px 0px 59px;">5, 6 (after
fourth run)</p>
<p style="margin: 0px 0px 0px 59px;">6, 6 (At the
fifth run, a is incremented, but then it becomes equal to b. The
condition to exit the loop is met, so the program exits the loop before
decrementing b, which retains its previous value).</p>
<p style="margin: 0px 0px 0px 59px;">&nbsp;</p>
<p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span class="f_Heading1" style="text-decoration: underline;">Repeat
While ... End Repeat</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">a := 1</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">Repeat While a &lt;= 10</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">&nbsp;a *= 2</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">&nbsp;# other instructions here if
needed</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">End Repeat</span></p>
<p style="margin: 0px 0px 0px 48px;">The loop is
executed as long as a is less than or equal to ten.</p>
<p style="margin: 0px 0px 0px 48px;">In this case,
the successive values of a will be 1 (before the loop), 2, 4, 8, 16. At
that point, the loop will end.</p>
<p style="margin: 0px 0px 0px 48px;">&nbsp;</p>
<p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span class="f_Heading1" style="text-decoration: underline;">Repeat
... While</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">a := 1</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">Repeat </span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">&nbsp;a *= 2</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">&nbsp;# other instructions here if
needed</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">While a &lt;= 10</span></p>
<p style="margin: 0px 0px 0px 48px;">The loop is
executed at least once.</p>
<p style="margin: 0px 0px 0px 48px;">At the end of
each loop, the value of a is checked.</p>
<p style="margin: 0px 0px 0px 48px;">In this case,
the successive values of a will be 1 (before the loop), 2, 4, 8, 16. At
that point, the loop will end.</p>
<p style="margin: 0px 0px 0px 48px;"><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
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
<p>Une instruction de boucle indique à WinPro qu'il faut
exécuter de manière répétitive les instructions se situant entre le
début et la fin de la boucle. Les boucles peuvent être imbriquées les
unes dans les autres, contenir des conditions, être imbriquées dans des
conditions, ...</p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p>Il existe dans WinPro trois types de boucle:</p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="border: 2px solid rgb(192, 192, 192); background-color: rgb(255, 247, 239); border-collapse: collapse;" align="center" bgcolor="#fff7ef" border="1" cellpadding="2" cellspacing="0">
<tbody>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 151px;" width="151">
<p style="text-align: center;"><span style="font-weight: bold;">Instruction</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 454px;" width="454">
<p style="text-align: center;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 151px;" width="151">
<p style="text-align: center;"><span style="font-size: 5pt; font-family: 'Courier New'; color: rgb(0, 0, 255);"></span><span class="f_Variables" style="font-weight: bold;">Boucle</span></p>
<p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">...</span></p>
<p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">Fin
Boucle</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 454px;" width="454">
<p style="margin: 0px 0px 0px 13px;">Il n'y a
pas de condition prédéfinie pour sortir de la boucle. Il est
indispensable de spécifier l'instruction <span style="color: rgb(0, 0, 255);">Sortir Boucle</span>
quelque part à l'intérieur de la boucle.</p>
<p style="margin: 0px 0px 0px 13px;">Vous
pouvez aussi sortir de la boucle en utilisant l'instruction <span style="color: rgb(0, 0, 255);">Retour</span>, avec
laquelle l'exécution de la formule en cours prendra fin également.</p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 151px;" width="151">
<p style="text-align: center;"><span style="font-size: 5pt; font-family: 'Courier New'; color: rgb(0, 0, 255);"></span><span class="f_Variables" style="font-weight: bold;">Repeter
Tant Que</span></p>
<p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">...</span></p>
<p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">Fin
Repeter</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 454px;" width="454">
<p style="margin: 0px 0px 0px 13px;">On évalue
l'expression conditionnelle qui suit l'instruction <span style="color: rgb(0, 0, 255);">Repeter Tant Que</span>;
si elle est vraie, on exécute les instructions de la boucle jusqu'à
l'instruction <span style="color: rgb(0, 0, 255);">Fin
Repeter</span>. On recommence alors la boucle, en réévaluant
l'expression après <span style="color: rgb(0, 0, 255);">Repeter
Tant Que</span>. La boucle peut éventuellement contenir une
instruction <span style="color: rgb(0, 0, 255);">Sortir
Boucle</span>.</p>
</td>
</tr>
<tr align="left" valign="middle">
<td style="border: 1px solid rgb(192, 192, 192); width: 151px;" width="151">
<p style="text-align: center;"><span style="font-size: 5pt; font-family: 'Courier New'; color: rgb(0, 0, 255);"></span><span class="f_Variables" style="font-weight: bold;">Repeter</span></p>
<p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">...</span></p>
<p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">Tant
Que</span></p>
</td>
<td style="border: 1px solid rgb(192, 192, 192); width: 454px;" width="454">
<p style="margin: 0px 0px 0px 13px;">La boucle
est exécutée au moins une fois; ensuite, la condition qui suit <span style="color: rgb(0, 0, 255);">Tant Que</span> est
évaluée; si elle est vraie, on recommence la boucle, jusqu'à ce que
cette condition soit fausse. La boucle peut éventuellement contenir une
instruction <span style="color: rgb(0, 0, 255);">Sortir
Boucle</span></p>
</td>
</tr>
</tbody>
</table>
</div>
<p>&nbsp; </p>
<p><span style="text-decoration: underline;">Exemples:</span></p>
<p><span style="font-size: 6pt; font-family: 'Courier New'; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 27px;"><span class="f_Heading1" style="text-decoration: underline;">Boucle
... Fin Boucle</span><span style="font-size: 5pt; font-family: 'Courier New'; color: rgb(0, 0, 255); text-decoration: underline;"></span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">a := 1</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">b := 10</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Boucle</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;&nbsp;&nbsp;a += 1</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;&nbsp;&nbsp;Si a
&gt;= b</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sortir
Boucle</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;&nbsp;&nbsp;Fin Si</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;&nbsp;&nbsp;b -= 1</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Fin Boucle</span></p>
<p style="margin: 0px 0px 0px 27px;">La boucle est
exécutée tant que a est inférieur à b. </p>
<p style="margin: 0px 0px 0px 27px;">En début de
boucle, on incrémente a. </p>
<p style="margin: 0px 0px 0px 27px;">Ensuite, on
vérifie si a est supérieur ou égal à b.</p>
<p style="margin: 0px 0px 0px 27px;">Si oui,
on&nbsp; quitte la boucle; si non, in décrémente b, et on reprend
la boucle à son début.</p>
<p style="margin: 0px 0px 0px 27px;">On aura donc,
successivement pour a et b, les valeurs:</p>
<p style="margin: 0px 0px 0px 40px;">1, 10 (avant
d'entrer dans la boucle)</p>
<p style="margin: 0px 0px 0px 40px;">2, 9 (après la
première exécution)</p>
<p style="margin: 0px 0px 0px 40px;">3, 8 (après la
deuxième exécution)</p>
<p style="margin: 0px 0px 0px 40px;">4, 7 (après la
troisième exécution)</p>
<p style="margin: 0px 0px 0px 40px;">5, 6 (après la
quatrième exécution)</p>
<p style="margin: 0px 0px 0px 40px;">6, 6 (à la
cinquième exécution, on incrémente a, qui est alors égal à b; on sort
donc de la boucle sans plus toucher à b).</p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;</span></p>
<p>&nbsp;</p>
<p style="margin: 0px 0px 0px 27px;"><span class="f_Heading1" style="text-decoration: underline;">Repeter
Tant Que ... Fin Repeter</span><span style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255); text-decoration: underline;"></span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">a := 1</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Repeter Tant Que a &lt;= 10</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;&nbsp;&nbsp;a *= 2</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;&nbsp;&nbsp;# autres
instructions ici si nécessaire</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Fin Repeter</span></p>
<p style="margin: 0px 0px 0px 27px;">La boucle est
exécutée tant que a est inférieur ou égal à 10.</p>
<p style="margin: 0px 0px 0px 27px;">Comme on
incrémente a à chaque passage, la boucle sera exécutée 10 fois</p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;</span></p>
<p style="text-align: center;">&nbsp;</p>
<p style="margin: 0px 0px 0px 27px;"><span class="f_Heading1" style="text-decoration: underline;">Repeter
... Tant Que</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-size: 5pt; font-family: 'Courier New'; color: rgb(0, 0, 255);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">a := 1</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Repeter</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;&nbsp;&nbsp;a *= 2</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;&nbsp;&nbsp;# autres
instructions ici si nécessaire</span></p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">Tant Que a &lt; 100</span></p>
<p style="margin: 0px 0px 0px 27px;">On passe au
moins une fois dans la boucle. </p>
<p style="margin: 0px 0px 0px 27px;">On y double à
chaque passage la valeur de a. </p>
<p style="margin: 0px 0px 0px 27px;">A la fin de la
boucle, on vérifie si a est inférieur à 100. </p>
<p style="margin: 0px 0px 0px 27px;">Si oui, on
reprend la boucle; sinon, on arrête là et on passe à la suite.</p>
<p style="margin: 0px 0px 0px 40px;"><span class="f_Variables">&nbsp;</span></p>
<p><span style="font-family: 'Courier New'; color: rgb(0, 0, 0);">&nbsp;</span></p>
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
<p>&nbsp;</p>
<p>Een loop instructie verteld WinPro dat een blok van
instructies meermaals dient uitgevoerd te worden, en dit tussen de
start en het einde van de aangegeven loop. Loops kunnen ook genest
worden,voorwaarden bevatten,opgeslagen worden in andere voorwaarden,....</p>
<p>&nbsp;</p>
<p>WinPro heeft drie types van loops:</p>
<p>&nbsp;</p>
<div style="margin: 0px; padding: 0px; text-align: center; text-indent: 0px;">
<table style="border-style: solid; border-color: rgb(218, 218, 218) rgb(105, 105, 104) rgb(105, 105, 104) rgb(218, 218, 218); border-width: 1px;" align="center" border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="151">
<p>Instruction</p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 454px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="454">
<p>Description</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 151px; height: 81px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="151">
<p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">Loop</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">...</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">End
loop</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 454px; height: 81px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="454">
<p>Er bestaat geen vooraf gedefinieerde voorwaarde om
de loop te verlaten.</p>
<p>U dient op een gegeven moment één of meerdere <span class="f_Variables">Exit loop</span> instructies te
gebruiken binnen de loop.</p>
<p>Als alternatief,kan je de loop ook verlaten door
de instructie <span class="f_Variables">Return</span>
te gebruiken,welke ook de op dat moment gebruikte formule zal verlaten.</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="151">
<p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">Repeat
While</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">...</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">End
Repeat</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 454px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="454">
<p>De voorwaarde expressie welke zich in de
instructie <span class="f_Variables">Repeat While</span>
bevindt wordt gecontroleert.</p>
<p>Indien dit waar is,zal de instructie in de loop
(welke eindigt op <span class="f_Variables">End Repeat</span>)
gecontroleert worden, dan controleert u terug de eerste lijn van de
loop,en gaat zo door totdat de voorwaarde onwaar (false ) is.</p>
<p>U kan ook de instructie <span class="f_Variables">Exit Loop</span> gebruiken binnen
de loop.</p>
<p>Met dit soort van loop, is het mogelijk de loop
instructie NOOIT te verlaten,wanneer de voorwaarde vanaf de start
onwaar (false) is.</p>
</td>
</tr>
<tr align="left" valign="top">
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 151px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" valign="middle" width="151">
<p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">Repeat</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">...</span></p>
<p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">While</span></p>
</td>
<td style="border-style: solid; border-color: rgb(105, 105, 104) rgb(218, 218, 218) rgb(218, 218, 218) rgb(105, 105, 104); border-width: 1px; width: 454px; background-color: rgb(255, 247, 239);" bgcolor="#fff7ef" width="454">
<p>De insructies binnen in de loop worden
uitgevoerd,daarna wordt de voorwaarde gevolgd door de <span class="f_Variables">While</span> instructie getest.</p>
<p>Indien dit waar ( true) is,zal de loop opnieuw
uitgevoerd worden, totdat de expressie onwaar (false) is.</p>
<p>U kan ook de instructie <span class="f_Variables">Exit Loop</span> gebruiken binnen
de loop.</p>
<p>Dit soort van loop garandeert dat de loop
instructies minstens éénmaal uitgevoerd worden.</p>
</td>
</tr>
</tbody>
</table>
</div>
<p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Voorbeelden:</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">&nbsp;</span></p>
<p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span class="f_Heading1" style="text-decoration: underline;">Loop
... End Loop</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">a := 1</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">b := 10</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">Loop</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">&nbsp;a += 1</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">&nbsp;if a &gt;= b</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">Exit Loop</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">&nbsp;End if</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">&nbsp;b -= 1</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">End Loop</span></p>
<p style="margin: 0px 0px 0px 48px;">De loop wordt
uitgevoerd zoalng dat a kleiner is dan b.</p>
<p style="margin: 0px 0px 0px 48px;">Wanneer de loop
start,wordt a verhoogd met 1.</p>
<p style="margin: 0px 0px 0px 48px;">Vervolgens,controleert
het programma of a groter of gelijk is aan b.</p>
<p style="margin: 0px 0px 0px 48px;">Indien dit zo
is,wordt de loop beëindigd; indien niet,wordt b verkleind met 1,en de
loop wordt opnieuw uitgevoerd.</p>
<p style="margin: 0px 0px 0px 48px;">De waarden van
a en b worden dan, successively:</p>
<p style="margin: 0px 0px 0px 59px;">1, 10 (voor het
starten van de loop)</p>
<p style="margin: 0px 0px 0px 59px;">2, 9 (eerste
uitvoering van de loop)</p>
<p style="margin: 0px 0px 0px 59px;">3, 8 (tweede
uitvoering van de loop)</p>
<p style="margin: 0px 0px 0px 59px;">4, 7 (derde
uitvoering van de loop)</p>
<p style="margin: 0px 0px 0px 59px;">5, 6 (vierde
uitvoering van de loop)</p>
<p style="margin: 0px 0px 0px 59px;">6, 6 (bij de
vijfde uitvoering,wordt a verhoogd,maar is dan gelijk aan b. De
voorwaarde om de loop te verlaten is dan bereikt,dus zal het programma
de loop verlaten alvorens b te verlagen,welke zijn vorige waarde
behoudt).</p>
<p style="margin: 0px 0px 0px 59px;">&nbsp;</p>
<p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span class="f_Heading1" style="text-decoration: underline;">Repeat
While ... End Repeat</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">a := 1</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">Repeat While a &lt;= 10</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">&nbsp;a *= 2</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">&nbsp;# indien nodig kan hier een
andere instructie plaatsvinden</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">End Repeat</span></p>
<p style="margin: 0px 0px 0px 48px;">De loop wordt
uitgevoerd zolang de waarde van a kleiner of gelijk aan 10 is.</p>
<p style="margin: 0px 0px 0px 48px;">In dit
geval,zijn de successieve waarden van a , 1 (voor de loop), 2, 4, 8,
16. Op dit punt,zal de loop beëindigd worden.</p>
<p style="margin: 0px 0px 0px 48px;">&nbsp;</p>
<p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span class="f_Heading1" style="text-decoration: underline;">Repeat
... While</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">a := 1</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">Repeat </span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">&nbsp;a *= 2</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">&nbsp;# indien nodig kan hier een
andere instructie plaatsvinden</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">While a &lt;= 10</span></p>
<p style="margin: 0px 0px 0px 48px;">De loop wordt
minstens éénmaal uitgevoerd.</p>
<p style="margin: 0px 0px 0px 48px;">Op het eind vn
elke loop,wordt de waarde van a gecontroleert.</p>
<p style="margin: 0px 0px 0px 48px;">In dit
geval,zijn de successieve waarden van a , 1 (voor de loop), 2, 4, 8,
16. Op dit punt,zal de loop beëindigd worden.</p>
<p style="margin: 0px 0px 0px 48px;"><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
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
<p>&nbsp;</p>
<p><span style="color: rgb(0, 0, 0);">Una
instrucción de bucle indica a WinPro que es necesario realizar de
manera repetitiva el conjunto de instrucciones que se sitúan entre el
principio y el final del bucle. <br>Los bucles pueden anidarse, pueden
contener condiciones, estar contenidos dentro de condiciones...</span></p>
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<p><span style="color: rgb(0, 0, 0);">WinPro dispone de 3 tipos de bucles:</span></p>
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 227px; padding: 0px; text-align: left; text-indent: 0px;"><table style="border: medium none ; background-color: rgb(255, 255, 213); border-collapse: collapse;" bgcolor="#ffffd5" border="0" cellpadding="1" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 185px;" valign="top" width="185"><p style="text-align: center;"><span style="font-weight: bold; color: rgb(0, 0, 0);">Instrucción</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 418px;" valign="top" width="418"><p><span style="font-weight: bold; color: rgb(0, 0, 0);">Descripción</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 185px;" valign="top" width="185"><p style="text-align: center;"><span style="font-family: 'Times New Roman'; color: rgb(127, 0, 127); text-decoration: underline;">Bucle</span></p>
<p style="text-align: center;"><span style="font-family: 'Times New Roman'; color: rgb(0, 0, 255); text-decoration: underline;">...</span></p>
<p style="text-align: center;"><span style="font-family: 'Times New Roman'; color: rgb(0, 0, 255); text-decoration: underline;">Fin Bucle</span></p>
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 418px; font-family: Tahoma;" valign="top" width="418"><p><span style="color: rgb(0, 0, 0);">No hay condición predefinida para salir del bucle. Es indispensable especificar la instrucción '</span><span style="color: rgb(0, 0, 255);">Salir Bucle</span><span style="color: rgb(0, 0, 0);">' en alguna parte dentro del bucle.</span></p>
<p><span style="color: rgb(0, 0, 0);">Alternativamente, se puede también salir del bucle utilizando la instrucción</span><span style="color: rgb(0, 0, 255);"> </span><span style="color: rgb(0, 0, 255);">Retorno, </span><span style="color: rgb(0, 0, 0);">que también permite salir de la formula ejecutada actualmente.</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 185px;" valign="top" width="185"><p style="text-align: center;"><span style="font-family: 'Times New Roman'; color: rgb(127, 0, 127); text-decoration: underline;">Repetir Mientras</span></p>
<p style="text-align: center;"><span style="font-family: 'Times New Roman'; color: rgb(0, 0, 255); text-decoration: underline;">...</span></p>
<p style="text-align: center;"><span style="font-family: 'Times New Roman'; color: rgb(0, 0, 255); text-decoration: underline;">Fin Repetir</span></p>
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 418px;" valign="top" width="418"><p><span style="color: rgb(0, 0, 0);">Se evalúa la expresión condicional que sigue a la instrucción </span><span style="color: rgb(0, 0, 255);">'Repetir mientras'</span><span style="color: rgb(0, 0, 0);">; si es verdadera, se realizan las instrucciones del bucle hasta la instrucción </span><span style="color: rgb(0, 0, 255);">Fin Repetir</span><span style="color: rgb(0, 0, 0);">. Se reinicia entonces el bucle, evaluando de nuevo la expresión que esta despues de </span><span style="color: rgb(0, 0, 255);">'Repetir Mientras'</span><span style="color: rgb(0, 0, 0);">. El bucle puede eventualmente contener la instrucción </span><span style="color: rgb(0, 0, 255);">'Salir Bucle'</span><span style="color: rgb(0, 0, 0);">.</span></p>
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
</td>
</tr>
<tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 185px;" valign="top" width="185"><p style="text-align: center;"><span style="font-family: 'Times New Roman'; color: rgb(127, 0, 127); text-decoration: underline;">Repetir</span></p>
<p style="text-align: center;"><span style="font-family: 'Times New Roman'; color: rgb(0, 0, 255); text-decoration: underline;">...</span></p>
<p style="text-align: center;"><span style="font-family: 'Times New Roman'; color: rgb(0, 0, 255); text-decoration: underline;">Mientras</span></p>
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
</td>
<td style="border: 1px solid rgb(0, 0, 0); width: 418px; font-family: Tahoma;" valign="top" width="418"><small><small><small><small><small><span style="font-size: 12pt; color: rgb(0, 0, 0);"><small>El bucle se realiza al menos una vez; despues, se evalúa la condición que sigue a </small></span><small><span style="font-size: 12pt; color: rgb(0, 0, 255);">'<small>Mientras</small>'</span></small><span style="font-size: 12pt; color: rgb(0, 0, 0);"><small>;
si es verdadera, se reinicia el bucle, hasta que esta condición sea
falsa. El bucle puede eventualmente contener una instrucción</small> </span><span style="font-size: 12pt; color: rgb(0, 0, 255);">'<small>Salir</small> <small>Bucle</small>'</span><span style="font-size: 12pt; color: rgb(0, 0, 0);">.</span></small></small></small></small></small><br><small>
</small></td>
</tr>
</tbody></table>
</div>
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<p><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p><span style="font-weight: bold; color: rgb(0, 0, 0); text-decoration: underline;">Ejemplos:</span></p>
<p><span style="font-weight: bold; color: rgb(0, 0, 0); text-decoration: underline;">&nbsp;</span></p>
<div style="margin: 0px; padding: 0px; text-align: left; text-indent: 0px;"><table style="border: medium none ; background-color: rgb(255, 255, 176); border-collapse: collapse;" bgcolor="#ffffb0" border="0" cellpadding="1" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="border: 1px solid rgb(0, 0, 0); width: 747px;" valign="top" width="747"><p style="text-align: center;"><span style="font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold; color: rgb(0, 0, 0); text-decoration: underline;">Bucle &nbsp;... Fin Bucle</span></p>
</td>
</tr>
</tbody></table>
</div>
<p style="margin: 0px 0px 0px 40px;"><span style="font-size: 11pt; font-family: 'Times New Roman'; color: rgb(0, 0, 255);">x := 1</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-size: 11pt; font-family: 'Times New Roman'; color: rgb(0, 0, 255);">z := 10</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-size: 11pt; font-family: 'Times New Roman'; color: rgb(0, 0, 255);">bucle</span></p>
<p style="margin: 0px 0px 0px 53px;"><span style="font-size: 11pt; font-family: 'Times New Roman'; color: rgb(0, 0, 255);">x += 1</span></p>
<p style="margin: 0px 0px 0px 53px;"><span style="font-size: 11pt; font-family: 'Times New Roman'; color: rgb(0, 0, 255);">si x &gt;= z</span></p>
<p style="margin: 0px 0px 0px 67px;"><span style="font-size: 11pt; font-family: 'Times New Roman'; color: rgb(0, 0, 255);">salir bucle</span></p>
<p style="margin: 0px 0px 0px 53px;"><span style="font-size: 11pt; font-family: 'Times New Roman'; color: rgb(0, 0, 255);">fin si</span></p>
<p style="margin: 0px 0px 0px 53px;"><span style="font-size: 11pt; font-family: 'Times New Roman'; color: rgb(0, 0, 255);">z -= 1</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-size: 11pt; font-family: 'Times New Roman'; color: rgb(0, 0, 255);">fin bucle</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: rgb(0, 0, 255);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);"># El bucle se realiza mientras x sea inferior a z.</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);"># Al principio del bucle, se incrementa x.</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);"># A continuación, se comprueba si x es superior o igual a z. En caso afirmativo,</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);"># se sale del bucle; sí no, se en decrementa z, </span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);"># el bucle vuelve al principio</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);"># se obtienen sucesivamente para x y z los valores siguientes:</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);"># 1,.10 (antes de entrar en el bucle)</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);"># 2,.9 (después de la primera ejecución)</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);"># 3,.8 (después de la segunda ejecución)</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);"># 4,.7 (después de la tercera ejecución)</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);"># 5,.6 (después de la cuarta ejecución)</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);"># 6,.6 (a la quinta ejecución, se incrementa x,</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);"># que es entonces igual a z; entonces se sale del bucle</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);"># sin afectar más a z).</span></p>
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 34px; padding: 0px; text-align: center; text-indent: 0px;"><table style="border: medium none ; background-color: rgb(255, 255, 174);" align="center" bgcolor="#ffffae" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="width: 766px;" valign="top" width="766"><p style="text-align: center;"><span style="font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold; color: rgb(0, 0, 0);">Repetir Mientras ... Fin Repetir</span></p>
</td>
<td valign="top"><p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
</td>
</tr>
</tbody></table>
</div>
<p><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);">a &nbsp;: = 1</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);">Repetir Mientras a &lt;= 10</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);">a + = 1</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);"># otras instrucciones aquí</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);">Fin Repetir</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);"># el bucle se ejecuta mientras a sea inferior o igual a 10</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);"># como se incrementa a en 1 en cada paso, el ciclo no se ejecutará mas cuando a = 10</span></p>
<p style="text-align: center;"><span style="font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold; color: rgb(0, 0, 0);">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 44px; padding: 0px; text-align: center; text-indent: 0px;"><table style="border: medium none ; background-color: rgb(255, 255, 183);" align="center" bgcolor="#ffffb7" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="width: 747px;" valign="top" width="747"><p style="text-align: center;"><span style="font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold; color: rgb(0, 0, 0);">Repetir ... Mientras</span></p>
</td>
</tr>
</tbody></table>
</div>
<p style="text-align: center;"><span style="font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold; color: rgb(0, 0, 0);">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);">a : = 1</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);">repetir</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);">a * = 2</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);"># otras instrucciones</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);">Mientras a </span><span style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 255); text-decoration: underline;">&lt;</span><span style="color: rgb(0, 0, 255);"> 100</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);"># se ejecuta al menos una vez el bucle. Se duplica</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);"># a cada paso el valor de a. Al final del bucle,</span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);"># se comprueba si a es inferior a 100. En caso afirmativo, se vuelve a ejecutar </span></p>
<p style="margin: 0px 0px 0px 40px;"><span style="color: rgb(0, 0, 255);"># el bucle; si no, se para allí y se pasa a la instrucción siguiente.</span></p>





<br><p style="margin: 0px 0px 0px 48px;"><span style="color: rgb(0, 0, 0);"></span></p>
</td>
</tr>
</tbody>
</table>
</div>
</body></html>