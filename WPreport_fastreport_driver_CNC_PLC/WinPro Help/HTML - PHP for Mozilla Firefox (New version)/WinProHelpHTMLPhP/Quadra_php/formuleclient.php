<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Customer Formula","Formule sp&#233;cifique client"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?formuleclient.php"; }
else { parent.quicksync('a3.7'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Formule sp&#233;cifique client</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Client" />
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
     <a href="formuleutilisateur.php">Previous</a>&nbsp;
     <a href="formulesysteme.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>You can define a formula for each customer.</p>
<p>Such a formula allows you to alter the composition of the window, display messages, prepare the computation of a special discount, vary the technical limitations, ... depending on the customer.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example</span>:</p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-style: italic; text-decoration: underline;">Customer formula:</span></p>
<p style="margin: 0px 0px 0px 60px;"><span class="f_Variables">_Discount := 45</span></p>
<p style="margin: 0px 0px 0px 60px;"><span class="f_Variables">_ReinforcedHinges := 1</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-style: italic; text-decoration: underline;">Outer frame formula:</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">if _FrameColour = 0</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">  &nbsp;_Discount += 2</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">else if HasRollerShutter</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">  &nbsp;_Discount += 0.5</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">end if </span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-style: italic; text-decoration: underline;">Fittings frame formula</span><span style="text-decoration: underline;">:</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">if _ReinforcedHinges = 1</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">  &nbsp;Quantity := 3</span></p>
<p style="margin: 0px 0px 0px 58px;"><span class="f_Variables">end if</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="526" style="width: 526px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Note</span><span style="text-decoration: underline;">:</span></p>
<p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">The customer formula is executed at the start of the window computation, immediately after the definition of the configuration variables by WinPro. See the page on  <a href="ordrecalcul.php">Computation order</a> for more information.</span></p>
</td>
</tr>
</table>
</div>
<p style="text-align: center;"><span class="f_Variables">&nbsp;</span></p>
<p><span style="color: #000000;">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Vous pouvez définir une formule pour chaque client.</p>
<p>Une telle formule peut vous permettre de modifier la composition d'un châssis, d'afficher un message, de préparer un calcul de remise, de faire varier les limites techniques, ... en fonction du client.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-style: italic; text-decoration: underline;">Formule client:</span></p>
<p style="margin: 0px 0px 0px 60px;"><span class="f_Variables">_Remise := 45</span></p>
<p style="margin: 0px 0px 0px 60px;"><span class="f_Variables">_CharniereLourde := 1</span></p>
<p style="margin: 0px 0px 0px 48px;">&nbsp;</p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-style: italic; text-decoration: underline;">Formule de dormant:</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">Si _CouleurDormant = 0</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables"> &nbsp; _Remise += 2</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">Sinon si AvecVolet</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables"> &nbsp; _Remise += 0.5</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">Fin Si</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-style: italic; text-decoration: underline;">Formule de quincaillerie:</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">Si _CharniereLourde = 1</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables"> &nbsp; Quantite := 3</span></p>
<p style="margin: 0px 0px 0px 59px;"><span class="f_Variables">Fin Si</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="526" style="width: 526px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarque</span><span style="text-decoration: underline;">:</span></p>
<p style="margin: 0px 0px 0px 13px;">La formule spécifique client est exécutée en début de calcul, juste après la définition des variables de configuration. Voyez la page <a href="ordrecalcul.php">Ordre de calcul</a> pour plus de précisions.</p>
</td>
</tr>
</table>
</div>

</td></tr></table>
</div>

</body>
</html>
