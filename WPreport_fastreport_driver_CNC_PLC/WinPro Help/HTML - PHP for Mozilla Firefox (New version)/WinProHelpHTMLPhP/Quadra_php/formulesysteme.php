<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["System Formula","Formule de syst&#232;me"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?formulesysteme.php"; }
else { parent.quicksync('a3.8'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Formule de syst&#232;me</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Syst&#232;me" />
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
     <a href="formuleclient.php">Previous</a>&nbsp;
     <a href="formulederemise.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p><span style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;">&nbsp;</span></p>
<p class="p_Interligne">You can define a formula for each system. This formula lets you define variables that have a constant value for the system. This kind of formula is also useful if you use sub-routines, so that they can behave differently depending on the system from which they are used.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-style: italic; text-decoration: underline;">System formula:</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">_Welding := 2.5</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-style: italic; text-decoration: underline;">Outer frame profile formula:</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">Length := Dimension</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">If Angle1 Not In 0, 90</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">  &nbsp;Length += _Welding</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">End If</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">If Angle2 Not In 0, 90</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">  &nbsp;Length += _Welding</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">End If</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="526" style="width: 526px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Note</span></p>
<p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">The system formula is executed at the start of the window computation, immediately after the user formula. See the page on <a href="ordrecalcul.php">Computation order</a> for more information.</span></p>
</td>
</tr>
</table>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Vous pouvez définir une formule pour chaque système. </p>
<p>Cette formule vous permet de définir des variables qui ont une valeur constante dans tout le système. </p>
<p>Ce type de formule est également utile si vous utilisez des routines communes à plusieurs systèmes. </p>
<p>Vous pouvez faire réagir ces routines en fonction du système depuis lequel elles sont appelées.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-style: italic; text-decoration: underline;">Formule système:</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">_Soudure := 2.5</span></p>
<p style="margin: 0px 0px 0px 48px;">&nbsp;</p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-style: italic; text-decoration: underline;">Formule de profil dormant:</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">Longueur := Dimension</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">Si Angle1 Pas Dans 0, 90</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables"> &nbsp; Longueur += _Soudure</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">Fin Si</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">Si Angle2 Pas Dans 0, 90</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables"> &nbsp; Longueur += _Soudure</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">Fin Si</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="526" style="width: 526px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarque</span><span style="text-decoration: underline;">:</span></p>
<p style="margin: 0px 0px 0px 13px;">La formule système est exécutée en début de calcul, juste après la formule utilisateur. </p>
<p style="margin: 0px 0px 0px 13px;">Voyez la page <a href="ordrecalcul.php">Ordre de calcul</a> pour plus de précisions.</p>
</td>
</tr>
</table>
</div>

</td></tr></table>
</div>

</body>
</html>
