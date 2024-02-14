<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Discount Formula","Formule de remise"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?formulederemise.php"; }
else { parent.quicksync('a3.9'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Formule de remise</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Remise" />
   <meta http-equiv="Content-Type" content="text/php; charset=ISO-8859-1" />
   <meta http-equiv="Content-Style-Type" content="text/css" />
   <link type="text/css" href="default.css" rel="stylesheet" />
</head>
<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;" onload=" AddTitleAndLangFlags();highlight();">
<div id="hmpopupDiv" style="visibility:hidden; position:absolute; z-index:1000;"></div>


<table width="100%" border="0" cellspacing="0" cellpadding="5" bgcolor="#FF8000">
  <tr valign="middle">
    <td align="left">
      <p class="p_Heading1"><span id="titlepage" class="f_Heading1"></span></p>
    </td>
	<td align="center">
     <div id="langflags"></div>
    </td>
    </td>
    <td align="right">
     <span style="font-size: 9pt">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="formulesysteme.php">Previous</a>&nbsp;
     <a href="variablesconfiguration.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p><span style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;">&nbsp;</span></p>
<p>A discount formula can be defined for each customer. The formula is executed after all other computations for the window. Thus you can gather informations while computing the window, in global variables, and define, in this formula, the actual discount(s).</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-style: italic; text-decoration: underline;">Outer frame formula:</span></p>
<p style="margin: 0px 0px 0px 62px;"><span class="f_Variables">if width = 1000 and height = 1250</span></p>
<p style="margin: 0px 0px 0px 62px;"><span class="f_Variables">  &nbsp;_StandardDim := True()</span></p>
<p style="margin: 0px 0px 0px 62px;"><span class="f_Variables">end if</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-style: italic; text-decoration: underline;">Discount formula:</span></p>
<p style="margin: 0px 0px 0px 63px;"><span class="f_Variables">if _FrameColour = 0</span></p>
<p style="margin: 0px 0px 0px 63px;"><span class="f_Variables">  &nbsp;if _DimStandard</span></p>
<p style="margin: 0px 0px 0px 63px;"><span class="f_Variables">  &nbsp; &nbsp; _Discount2 := 5</span></p>
<p style="margin: 0px 0px 0px 63px;"><span class="f_Variables">  &nbsp;else</span></p>
<p style="margin: 0px 0px 0px 63px;"><span class="f_Variables">  &nbsp; &nbsp; _Discount2 := 3</span></p>
<p style="margin: 0px 0px 0px 63px;"><span class="f_Variables">  &nbsp;end if</span></p>
<p style="margin: 0px 0px 0px 63px;"><span class="f_Variables">end if</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="526" style="width: 526px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Note</span><span style="text-decoration: underline;">:</span></p>
<p style="margin: 0px 0px 0px 13px;">The discount formula is the last one executed, it can then retrieve any user defined global variable. <span style="color: #000000;">See the page on  <a href="ordrecalcul.php">Computation order</a> for more information.</span></p>
</td>
</tr>
</table>
</div>
<p><span style="font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="font-size: 5pt; color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Une formule de remise peut être définie pour chaque client. La formule est exécutée après tous les autres calculs de menuiserie. </p>
<p>Vous pouvez donc cumuler des informations tout au long du calcul, dans des variables globales, pour définir en fin de calcul, dans cette formule, la remise effective.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-style: italic; text-decoration: underline;">Formule de dormant:</span></p>
<p style="margin: 0px 0px 0px 60px;"><span class="f_Variables">Si Largeur = 1000 et Hauteur = 1250</span></p>
<p style="margin: 0px 0px 0px 60px;"><span class="f_Variables"> &nbsp; _DimStandard := Vrai()</span></p>
<p style="margin: 0px 0px 0px 60px;"><span class="f_Variables">Fin Si</span></p>
<p style="margin: 0px 0px 0px 48px;">&nbsp;</p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-style: italic; text-decoration: underline;">Formule de remise:</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">_Remise2 := 0</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">Si _CouleurDormant = 0</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables"> &nbsp; Si _DimStandard</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables"> &nbsp;&nbsp;&nbsp;&nbsp; _Remise2 := 5</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables"> &nbsp; Sinon</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables"> &nbsp;&nbsp;&nbsp;&nbsp; _Remise2 := 3</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables"> &nbsp; Fin Si</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">Fin Si</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="526" style="width: 526px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarque</span><span style="text-decoration: underline;">:</span></p>
<p style="margin: 0px 0px 0px 13px;">La formule de remise est exécutée en tout dernier lieu, elle peut donc récupérer toutes vos variables globales. Voyez la page <a href="ordrecalcul.php">Ordre de calcul</a> pour plus de précisions.</p>
</td>
</tr>
</table>
</div>

</td></tr></table>
</div>

</body>
</html>
