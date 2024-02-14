<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Draw","Dessiner"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?dessiner.php"; }
else { parent.quicksync('a2.6.13'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Dessiner</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Dessiner" />
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
     <a href="couleurtrait.php">Previous</a>&nbsp;
     <a href="ellipse.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>This instruction is useful when you need to call another drawing code inside the current drawing code. This function may be recursibe.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Draw (x, y, drawing_code [, setting:value])</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Parameter</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">X</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Bottom left horizontal position of the drawing to display</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">Y</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Bottom right vertical position of the drawing to display</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">drawing_code</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Drawing code to be drawn, UPPERCASE.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>
<p style="text-align: center;"><span class="f_Variables">setting:value</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Optionally, a list of settings may follow the sub-code name. Each setting is composed by a label for the setting (user defined), followed with: then the value assigned to the setting. Several settings may be declared, separated by commas.</p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Draw (100, 100, SPHERE, radius:45)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># calls a drawing code labelled SPHERE, </span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># transferring a radius setting with value 45 </span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># The drawing will be positioned at the reference point 100,100</span></p>
<p>&nbsp;</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Appel d'un autre dessin depuis le dessin en cours de calcul. Cette fonction peut être récursive.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Dessiner (x, y, code_dessin [, parametre:valeur])</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Paramètres</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">X</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Position horizontale inférieure droite du dessin à tracer</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">Y</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Position verticale inférieure droite du dessin à tracer</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">code_dessin</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Code du dessin à exécuter. Ce code doit être donné en MAJUSCULES.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>
<p style="text-align: center;"><span class="f_Variables">parametre:valeur</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Optionnellement, une liste de paramètres peut suivre le nom du sous-programme. Chaque paramètre est constitué du nom du paramètre (défini par l'utilisateur), suivit de : puis de la valeur affectée au paramètre. Plusieurs paramètres peuvent ainsi être indiqués, séparés entre eux par des virgules.</p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 72px;"><span class="f_Variables">Dessiner (100, 100, SPHERE, radius:45)</span></p>
<p style="margin: 0px 0px 0px 72px;"><span class="f_Variables"># appele un dessin dont le code est SPHERE, </span></p>
<p style="margin: 0px 0px 0px 72px;"><span class="f_Variables"># en lui passant un paramètre appelé radius dont sa valeur est 45 </span></p>
<p style="margin: 0px 0px 0px 72px;"><span class="f_Variables"># Le dessin sera placé au point de référence 100,100</span></p>
<p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
