<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["ExpandShape","ElargirForme"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?elargirforme.php"; }
else { parent.quicksync('a2.5.5.5'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>ElargirForme</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="ElargirForme" />
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
     <a href="creerforme.php">Previous</a>&nbsp;
     <a href="reduireforme.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>This function expands a shape by creating a new shapes whose sides are parallel to the original shape, at a distance specified uniformly for all sides (first syntax), or individually for each side (second and third syntax). In the first two syntax, the parameters may be any valid arithmetic expression. In the third syntax, the order of the values is the same as the order of parameters in the second syntax. The values given for non-existing sides (e.g. topLeft in a rectangle) are ignored.  </p>
<p>&nbsp;</p>
<p>The original shape is replaced by the new shape. </p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">ExpandShape (index, value)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">ExpandShape (index, bottom, top, left, right, topLeft, topRight)</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">ExpandShape (index, value[])</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="color: #000000; text-decoration: underline;">Example 1:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;"># Expand shape 1 by 10 mm uniformly </span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">ExpandShape (1, 10)</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="color: #000000; text-decoration: underline;">Example 2:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;"># Expand shape 1 by 10 mm on each side, except at the bottom: 5 mm</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">ExpandShape (1, 5, 10, 10, 10, 10, 10)</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="color: #000000; text-decoration: underline;">Example 3:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;"># Expand shape 1 by 10 mm on each side, except at the bottom: 5 mm</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">Value : 6</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">Value := 10</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">Value [1] := 5</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">ExpandShape (1, Value)</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; background: #fffff2; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Notes:</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>Any parameter may have a negative value. In such a case, for the corresponding sides, the instruction will shrink the shape.  </td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>You can mix positive and negative values if necessary.</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>Expanding a shape might produce a different shape. E.g. Expanding a trapezium shape might produce another trapezium or a right angled triangle.</p>
</td></tr></table></div></td>
</tr>
</table>
</div>
<p style="background: #fffff2;">&nbsp;</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette fonction élargit la forme en créant une forme dont tous les bords sont parallèles à la forme d'origine, et à la distance indiquée par valeur (1ère formule), ou à une distance indiquée séparément pour chaque côté (2ème et 3ème formules). Chacun des paramètres peut être une expression arithmétique. Si vous utilisez la troisième forme, l'ordre des valeurs doit correspondre à l'ordre dans la deuxième forme. Les valeurs indiquées pour des côtés qui n'existent pas (p.ex. HautGauche dans un rectangle) seront ignorées.</p>
<p>&nbsp;</p>
<p>La forme d'origine est remplacée par la nouvelle.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">ElargirForme (index, valeur)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">ElargirForme (index, bas, haut, gauche, droite, hautgauche, hautdroite)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">ElargirForme (index, valeur[])</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple 1:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Elargir la forme n°1 de 10mm uniformément</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">ElargirForme (1, 10)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple 2:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Elargir forme 1 de 10 mm sauf en bas : 5 mm</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">ElargirForme (1, 5, 10, 10, 10, 10, 10)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple 3:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Elargir forme 1 de 10 mm sauf en bas : 5 mm</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Valeur : 6</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Valeur := 10</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Valeur [1] := 5</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">ElargirForme (1, Valeur)</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarques</span><span style="text-decoration: underline;"> :</span> </p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>Vous pouvez donner une valeur négative à un ou plusieurs des paramètres. Dans ce cas, l'instruction se comportera, pour les côtés concernés, comme l'instruction <span class="f_Variables">ReduireForme</span>.</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>Vous pouvez mixer des valeurs positive et négative si nécessaire</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>L'extension d'une forme pourrait produire une forme différente. Exemple : L'extension d'un trapèze peut produire un autre trapèze ou un triangle rectangle.</p>
</td></tr></table></div></td>
</tr>
</table>
</div>
<p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
