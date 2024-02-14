<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html><head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED","ESP"];
var WinProHelpPageName=["Flow control instructions","Instructions de contrôle","Controle instructies","Instrucciones de control"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame. 
if(top.frames.length==0) { top.location.href="index.php?flowcontrolinstructions.php"; }
else { parent.quicksync('a2.3'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>


<title>Instructions de contrôle</title><meta name="generator" content="Help &amp; Manual">
<meta name="keywords" content="Instructions de contrôle,Condition,Boucle,Rupture">
<meta http-equiv="Content-Type" content="text/php; charset=ISO-8859-1">
<meta http-equiv="Content-Style-Type" content="text/css">
<link type="text/css" href="default.css" rel="stylesheet"></head>
<body style="margin: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;" onload="AddTitleAndLangFlags();highlight();">
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
     <a href="regles_de_priorite_operateurs.php">Previous</a>&nbsp;
     <a href="conditions.php">Next</a>
     </span>
    </td>
  </tr>
</tbody></table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%"><tbody><tr valign="top"><td align="left">
<p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<p>Flow control instructions let you decide which statements are
executed in a formula, and in which order. There are three types of
control instructions:</p>
<p>&nbsp;</p>
<div style="margin: 0px 0px 0px 24px; padding: 0px; text-align: left; text-indent: 0px;"><table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0"><tbody><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td><td><a href="conditions.php">Conditions</a><span class="f_Variables"> </span>(<span class="f_Variables">If</span> | <span class="f_Variables">Else If</span> | <span class="f_Variables">Else</span> | <span class="f_Variables">End If</span>)</td></tr></tbody></table></div><div style="margin: 0px 0px 0px 24px; padding: 0px; text-align: left; text-indent: 0px;"><table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0"><tbody><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td><td><a href="Boucles.php">Loops</a> (<span class="f_Variables">Loop ... End Loop</span> | <span class="f_Variables">Repeat While ... End Repeat</span> | <span class="f_Variables">R</span><span class="f_Variables">epeat ... While</span>)</td></tr></tbody></table></div><div style="margin: 0px 0px 0px 24px; padding: 0px; text-align: left; text-indent: 0px;"><table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0"><tbody><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td><td><a href="ruptures.php">Breaks</a><span class="f_Variables"> </span>(<span class="f_Variables">Return</span> | <span class="f_Variables">Fail</span>)</td></tr></tbody></table></div><p><span style="font-size: 11pt; color: rgb(0, 0, 0);">&nbsp;</span></p>

</td></tr></tbody></table>

</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%"><tbody><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Les instructions de contrôle permettent de décider quelles
instructions exécuter à l'intérieur d'une formule. Il y a trois types
d'instructions de contrôles:</p>
<p style="margin: 0px 0px 0px 24px;"><span style="font-size: 5pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 24px; padding: 0px; text-align: left; text-indent: 0px;"><table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0"><tbody><tr valign="baseline"><td width="24"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td><td><a href="conditions.php">Conditions</a><span style="color: rgb(0, 0, 255);"> </span>(<span style="color: rgb(0, 0, 255);"> </span><span class="f_Variables">Si</span><span style="color: rgb(0, 0, 255);"> </span>|<span style="color: rgb(0, 0, 255);"> </span><span class="f_Variables">Sinon Si</span><span style="color: rgb(0, 0, 255);"> </span>|<span style="color: rgb(0, 0, 255);"> </span><span class="f_Variables">Sinon</span><span style="color: rgb(0, 0, 255);"> </span>|<span style="color: rgb(0, 0, 255);"> </span><span class="f_Variables">Fin Si</span><span class="f_Variables" style="font-weight: bold;"> </span>)</td></tr></tbody></table></div><div style="margin: 0px 0px 0px 24px; padding: 0px; text-align: left; text-indent: 0px;"><table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0"><tbody><tr valign="baseline"><td width="24"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td><td><a href="boucles.php">Boucles</a><span style="color: rgb(0, 0, 255);"> </span>(<span style="color: rgb(0, 0, 255);"> </span><span class="f_Variables">Boucle ... Fin Boucle</span> |<span style="color: rgb(0, 0, 255);"> </span><span class="f_Variables">Repeter Tant Que&nbsp; ... Fin Repeter</span> |<span style="color: rgb(0, 0, 255);"> </span><span class="f_Variables">Repeter ... Tant Que</span> )</td></tr></tbody></table></div><div style="margin: 0px 0px 0px 24px; padding: 0px; text-align: left; text-indent: 0px;"><table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0"><tbody><tr valign="baseline"><td width="24"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td><td><a href="ruptures.php">Ruptures</a><span style="color: rgb(0, 0, 255);"> </span>(<span style="color: rgb(0, 0, 255);"> </span><span class="f_Variables">Retour</span><span style="color: rgb(0, 0, 255);"> </span>|<span style="color: rgb(0, 0, 255);"> </span><span class="f_Variables">Echec</span><span style="color: rgb(0, 0, 255);"> </span>)</td></tr></tbody></table></div><p><span style="font-size: 11pt;">&nbsp;</span></p>

</td></tr></tbody></table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%"><tbody><tr valign="top"><td align="left">
<p style="background: rgb(255, 255, 242) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"><span style="color: rgb(0, 0, 0);">&nbsp;</span></p>
<p>Controle instructies laten u toe te bepalen welke "instructies" in
een formule dienen uitgevoerd te worden en in welke volgorde dit dient
te gebeuren. Er zijn drie types van controle instructies:</p>
<p>&nbsp;</p>
<div style="margin: 0px 0px 0px 24px; padding: 0px; text-align: left; text-indent: 0px;"><table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0"><tbody><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td><td><a href="conditions.php">Condities</a><span class="f_Variables"> </span>(<span class="f_Variables">If</span> | <span class="f_Variables">Else If</span> | <span class="f_Variables">Else</span> | <span class="f_Variables">End If</span>)</td></tr></tbody></table></div><div style="margin: 0px 0px 0px 24px; padding: 0px; text-align: left; text-indent: 0px;"><table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0"><tbody><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td><td><a href="Boucles.php">Loops</a> (<span class="f_Variables">Loop ... End Loop</span> | <span class="f_Variables">Repeat While ... End Repeat</span> | <span class="f_Variables">R</span><span class="f_Variables">epeat ... While</span>)</td></tr></tbody></table></div><div style="margin: 0px 0px 0px 24px; padding: 0px; text-align: left; text-indent: 0px;"><table style="line-height: normal;" border="0" cellpadding="0" cellspacing="0"><tbody><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></td><td><a href="ruptures.php">Breaks</a><span class="f_Variables"> </span>(<span class="f_Variables">Return</span> | <span class="f_Variables">Fail</span>)</td></tr></tbody></table></div><p><span style="font-size: 11pt; color: rgb(0, 0, 0);">&nbsp;</span></p>

</td></tr></tbody></table>

</div>
<div class="ESP">
<!-- Placeholder for topic body. -->
<table border="0" cellpadding="5" cellspacing="0" width="100%"><tbody><tr valign="top"><td align="left">
<p><span style="color: rgb(0, 0, 0);"></span></p><p><span id="result_box" class="" lang="es"><span class="hps alt-edited">Las instrucciones de control</span> permiten elegir&nbsp;<span class="hps"></span> <span class="hps">el orden de ejecución de una&nbsp;instruccion</span><span class="hps"></span> <span class="hps">dentro de</span> <span class="hps">una fórmula&nbsp;.</span> <span class="hps"><br>Hay tres</span> <span class="hps">tipos de</span> <span class="hps">instrucciones de control</span><span>:</span></span></p><p><span style="color: rgb(0, 0, 0);"><br></span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="font-size: 5pt; font-family: 'Arial Unicode MS'; color: rgb(0, 0, 255);">&nbsp;</span></p>
<div style="margin: 0px 0px 0px 24px; padding: 0px; text-align: left; text-indent: 0px;"><table style="border: medium none ;" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="width: 24px;" valign="top" width="24"><p><span style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></p>
</td>
<td valign="top"><p><span style="color: rgb(0, 0, 0);"><a href="conditions.php">Condiciones</a></span><span style="color: rgb(0, 0, 255);"> </span><span style="color: rgb(0, 0, 0);">(</span><span style="color: rgb(0, 0, 255);"> </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">si</span><span style="color: rgb(0, 0, 255);"> </span><span style="color: rgb(0, 0, 0);">|</span><span style="color: rgb(0, 0, 255);"> </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">sino si</span><span style="color: rgb(0, 0, 255);"> </span><span style="color: rgb(0, 0, 0);">|</span><span style="color: rgb(0, 0, 255);"> </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">sino</span><span style="color: rgb(0, 0, 255);"> </span><span style="color: rgb(0, 0, 0);">|</span><span style="color: rgb(0, 0, 255);"> </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">fin si</span><span style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);"> </span><span style="color: rgb(0, 0, 0);">)</span></p>
</td>
</tr>
</tbody></table>
</div>
<div style="margin: 0px 0px 0px 24px; padding: 0px; text-align: left; text-indent: 0px;"><table style="border: medium none ;" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="width: 24px;" valign="top" width="24"><p><span style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></p>
</td>
<td valign="top"><p><span style="color: rgb(0, 0, 0);"><a <a href="Boucles.php">Bucles</a> </span><span style="color: rgb(0, 0, 255);"> </span><span style="color: rgb(0, 0, 0);">(</span><span style="color: rgb(0, 0, 255);"> </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">bucle ... fin bucle</span><span style="color: rgb(0, 0, 0);"> |</span><span style="color: rgb(0, 0, 255);"> </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">repetir mientras ... fin repetir</span><span style="color: rgb(0, 0, 0);"> |</span><span style="color: rgb(0, 0, 255);"> </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">repetir ... mientras</span><span style="color: rgb(0, 0, 0);"> )</span></p>
</td>
</tr>
</tbody></table>
</div>
<div style="margin: 0px 0px 0px 24px; padding: 0px; text-align: left; text-indent: 0px;"><table style="border: medium none ;" border="0" cellpadding="0" cellspacing="0">
<tbody><tr style="text-align: left; vertical-align: top;">
<td style="width: 24px;" valign="top" width="24"><p><span style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&#8226;</span></p>
</td>
<td valign="top"><p><span style="color: rgb(0, 0, 0);"> <a href="ruptures.php">Rupturas</a> </span><span style="color: rgb(0, 0, 255);"> </span><span style="color: rgb(0, 0, 0);">(</span><span style="color: rgb(0, 0, 255);"> </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Retorno</span><span style="color: rgb(0, 0, 255);"> </span><span style="color: rgb(0, 0, 0);">|</span><span style="color: rgb(0, 0, 255);"> </span><span style="font-family: 'Courier New'; color: rgb(0, 0, 255);">Fallo</span><span style="color: rgb(0, 0, 255);"> </span><span style="color: rgb(0, 0, 0);">)</span></p>
</td>
</tr>
</tbody></table>
</div>
<p><span style="font-size: 11pt; color: rgb(0, 0, 0);">&nbsp;</span></p></td></tr></tbody></table></div>
</body></html>