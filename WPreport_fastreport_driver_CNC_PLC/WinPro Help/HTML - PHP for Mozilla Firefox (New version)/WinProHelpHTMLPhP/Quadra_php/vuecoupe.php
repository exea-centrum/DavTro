<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["CrossSection","VueCoupe"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?vuecoupe.php"; }
else { parent.quicksync('a2.5.9'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>VueCoupe</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="Dxf,VueCoupe" />
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
     <a href="usinage.php">Previous</a>&nbsp;
     <a href="instructions_de_dessin.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p style="background: #fffff2;"><span style="color: #000000;">&nbsp;</span></p>
<p>WinPro lets you define cross sections, by checking a few boxes of the outer frame, sash and transom definitions (module).</p>
<p>You can also generate more complicated cross-sections, using a formula instruction.</p>
<p>Both methods can be mixed.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">CrossSection (code, origin, dx, dy, rotation, vertical flip, horizontal flip) </span></p>
<p style="text-align: center; margin: 0px 0px 0px 1px;"><span style="font-size: 5pt; color: #000000;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" border="1" style="border-color : #dadada #696968 #696968 #dadada; border-style: solid; border-width: 1px; border-spacing:0px;">
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-weight: bold; color: #000000;">Parameter</span></p>
</td>
<td width="435" bgcolor="#fff7ef" style="width: 435px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 10px;"><span style="font-weight: bold; color: #000000;">Description</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">code</span></p>
</td>
<td width="435" bgcolor="#fff7ef" style="width: 435px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 10px;">Section code. References an entry in the <a href="dessindxf.php">DXF table</a>. Code may be indifferently in upper or lower case.</p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">origin</span></p>
</td>
<td width="435" bgcolor="#fff7ef" style="width: 435px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 10px;">May be one of these values : <span class="f_Variables">top, bottom, left, right</span>.</p>
<p style="margin: 0px 0px 0px 10px;"><span style="text-decoration: underline;">Exceptions :</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 10px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>With transoms, origin may be <span class="f_Variables">horizontal</span> or <span class="f_Variables">vertical</span>.</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 10px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>With roller shutter boxes and blades, only <span class="f_Variables">top</span> and <span class="f_Variables">bottom</span> are allowed</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 10px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>With roller shutter slides, only <span class="f_Variables">left</span> and <span class="f_Variables">right</span> are allowed.</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 10px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>You can also use <span class="f_Variables">center</span> with blades and slides.</p>
</td></tr></table></div></td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">dx</span></p>
</td>
<td width="435" bgcolor="#fff7ef" style="width: 435px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 10px;">Section offset in the thickness direction.</p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">dy</span></p>
</td>
<td width="435" bgcolor="#fff7ef" style="width: 435px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 10px;">Section offset towards the window center.</p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">rotation</span></p>
</td>
<td width="435" bgcolor="#fff7ef" style="width: 435px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 10px;">Rotates the section, counterclockwise; the parameter is expressed in degrees; angle 0 is at the right of the horizontal diameter of the rotation circle.</p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">vertical flip</span></p>
</td>
<td width="435" bgcolor="#fff7ef" style="width: 435px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 10px;">Possible values: 0 or 1. If 1, the section will be flipped vertically around an axis going through point 0 of the section</p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">horizontal flip</span></p>
</td>
<td width="435" bgcolor="#fff7ef" style="width: 435px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 10px;">Possible values: 0 or 1. If 1, the section will be flipped horizontally around an axis going through point 0 of the section</p>
</td>
</tr>
</table>
</div>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="color: #000000; text-decoration: underline;">Example :</span><span style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;">   </span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;"># Section of the outer frame steel reinforcement,</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;"># offset by 12 mm in the thickness direction,</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;"># 16 mm in the radial direction, and rotated</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;"># 90 degrees clockwise.</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">CrossSection (FrameSteel, side, 12, 16, -90)</span></p>
<p style="background: #fffff2;"><span style="font-size: 5pt; color: #000000;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="489" style="width: 489px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 14px;"><span style="font-weight: bold; text-decoration: underline;">Note:</span></p>
<p style="margin: 0px 0px 0px 14px;"><span style="color: #000000;">Only the first 2 parameters are non optional. However, if you need any extra parameter, all the settings on the left must be given. The default value of optional parameters is 0.</span></p>
</td>
</tr>
</table>
</div>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>WinPro vous permet de définir très simplement la plupart des vues en coupe, simplement en cochant quelques cases sur les onglets DXF des dormants, ouvrants, traverses, ... (module).</p>
<p>Mais cela ne suffit pas pour générer les coupes d'éléments plus compliqués. WinPro vous propose donc de générer une coupe à partir des formules. Les deux méthodes sont compatibles et peuvent être utilisées simultanément. Les instructions de coupe seront simplement mêlées aux instructions de calcul standard.</p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">VueCoupe (code, origine, dx, dy, rotation, mirroir vertical, mirroir horizontal)</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="183" style="width: 183px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Paramètre</span></p>
</td>
<td width="484" style="width: 484px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="183" style="width: 183px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"> </span><span class="f_Variables" style="font-weight: bold;">code</span></p>
</td>
<td width="484" style="width: 484px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Code de la coupe. Il s'agit du code attribué à chaque coupe dans la table des <a href="dessindxf.php">DXF</a>. Le code peut indifféremment être donné en majuscules ou minuscules.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="183" style="width: 183px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">origine</span></p>
</td>
<td width="484" style="width: 484px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Peut prendre une des valeurs suivantes: <span class="f_Variables">Haut</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">, </span><span class="f_Variables">Bas</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">, </span><span class="f_Variables">Gauche</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">, </span><span class="f_Variables">Droite</span>.&nbsp; </p>
<p style="margin: 0px 0px 0px 13px;"><span style="text-decoration: underline;">Exceptions :</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&#8226;</span></td><td>Pour les traverses, prend soit <span class="f_Variables">Horizontal</span> ou <span class="f_Variables">Vertical</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&#8226;</span></td><td>Pour les caissons et tabliers de volet , prend soit <span class="f_Variables">Haut</span> ou <span class="f_Variables">Bas</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&#8226;</span></td><td>Pour les coulisses, prend soit <span class="f_Variables">Gauche</span> ou <span class="f_Variables">Droite</span> </td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&#8226;</span></td><td>Pour les tabliers et coulisses de volet, prend également <span class="f_Variables">Centre</span></p>
</td></tr></table></div></td>
</tr>
<tr valign="middle" align="left">
<td width="183" style="width: 183px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">dx</span></p>
</td>
<td width="484" style="width: 484px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Déplacement de la coupe dans le sens de l'épaisseur du châssis.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="183" style="width: 183px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">dy</span></p>
</td>
<td width="484" style="width: 484px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Déplacement de la coupe vers le centre du châssis.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="183" style="width: 183px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">rotation</span></p>
</td>
<td width="484" style="width: 484px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Permet une rotation de la coupe. Le point 0 est à droite du cercle; la rotation se fait en sens inverse des aiguilles d'une montre (cercle trigonométrique), et est exprimée en degrés.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="183" style="width: 183px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">mirroir&nbsp; vertical</span></p>
</td>
<td width="484" style="width: 484px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Ce paramètre peut prendre les valeur 0 ou 1. S'il est à 1, la coupe sera retournée selon un axe vertical passant par le point 0 de la coupe.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="183" style="width: 183px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">mirroir horizontal</span></p>
</td>
<td width="484" style="width: 484px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Ce paramètre peut prendre les valeur 0 ou 1. S'il est à 1, la coupe sera retournée selon un axe horizontal passant par le point 0 de la coupe.</p>
</td>
</tr>
</table>
</div>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="font-size: 5pt;"> </span><span style="text-decoration: underline;">Exemple :</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># coupe du renfort de dormant, décalée de 12 mm </span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># transversalement et 16 mm longitudinalement</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># avec une rotation de 90° dans le sens des </span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># aiguilles d'une montre</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">VueCoupe (renfortDormant, bord, 12, 16, -90)</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarque:</span></p>
<p style="margin: 0px 0px 0px 13px;">Seuls les 2 premiers paramètres sont obligatoires dans tous les cas. Les autres ne doivent pas nécessairement être spécifiés, sauf s'ils précèdent un paramètre que vous voulez spécifier. La valeur par défaut est de 0 pour tous les paramètres optionnels.</p>
</td>
</tr>
</table>
</div>

</td></tr></table>
</div>

</body>
</html>
