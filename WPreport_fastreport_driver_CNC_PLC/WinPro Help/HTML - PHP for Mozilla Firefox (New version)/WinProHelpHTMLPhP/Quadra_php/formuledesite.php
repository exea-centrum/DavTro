<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Site Formula","Formule de site"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?formuledesite.php"; }
else { parent.quicksync('a3.5'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Formule de site</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Site" />
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
     <a href="variablesgenerale.php">Previous</a>&nbsp;
     <a href="formuleutilisateur.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p><span style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;">&nbsp;</span></p>
<p>A site formula allow you to define an instruction list which will be executed before starting the computation of each and every window. The formula is stored in the file <span style="font-weight: bold;">data\site.var</span>. You can define it form the menu <span style="font-weight: bold;">Tools | Preferences</span>, in page <span style="font-weight: bold;">Site</span> variables.</p>
<p>&nbsp;</p>
<p>If you use WinPro on more than one site, you can define a different formula for each site. This is useful for defining site specific values, such as the thickness of welding, the transoms' assembly mode, ...</p>
<p>&nbsp;</p>
<p>The formula can also be useful if you have a single production site. You can use it to create global variables which will be used for every window.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="color: #000000; text-decoration: underline;">Example</span><span style="font-weight: bold; color: #000000; text-decoration: underline;">:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-style: italic; color: #000000; text-decoration: underline;">Site formula:</span></p>
<p style="margin: 0px 0px 0px 63px;"><span style="font-family: 'Courier New'; color: #0000ff;">_Welding := 2.5</span></p>
<p style="margin: 0px 0px 0px 63px;"><span style="font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-style: italic; color: #000000; text-decoration: underline;">Outer frame profile formula:</span></p>
<p style="margin: 0px 0px 0px 61px;"><span style="font-family: 'Courier New'; color: #0000ff;">Length := Dimension</span></p>
<p style="margin: 0px 0px 0px 61px;"><span style="font-family: 'Courier New'; color: #0000ff;">If Angle1 not in 0, 90</span></p>
<p style="margin: 0px 0px 0px 61px;"><span style="font-family: 'Courier New'; color: #0000ff;">  &nbsp;Length += _Welding</span></p>
<p style="margin: 0px 0px 0px 61px;"><span style="font-family: 'Courier New'; color: #0000ff;">End if</span></p>
<p style="margin: 0px 0px 0px 61px;"><span style="font-family: 'Courier New'; color: #0000ff;">If Angle2 not in 0, 90</span></p>
<p style="margin: 0px 0px 0px 61px;"><span style="font-family: 'Courier New'; color: #0000ff;">  &nbsp;Length += _Welding</span></p>
<p style="margin: 0px 0px 0px 61px;"><span style="font-family: 'Courier New'; color: #0000ff;">End if</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="347" style="width: 347px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarque</span><span style="text-decoration: underline;">:</span></p>
<p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">The site formula is executed at the start of the window computation. See the page <a href="ordrecalcul.php">Computation order</a> for more information</span></p>
</td>
</tr>
</table>
</div>
<p style="text-align: center;"><span style="color: #000000;">&nbsp;</span></p>
<p style="text-align: center;"><span style="color: #000000;">&nbsp;</span></p>

</td></tr></table>

</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Les formules de site vous permettent de définir une liste d'instructions qui seront exécutées au début du calcul de chaque menuiserie. Cette formule est stockée dans le fichier <span style="font-weight: bold;">data\site.var</span>. Elle peut être définie à partir du menu <span style="font-weight: bold;">Utilitaires | Préférences</span>, onglet <span style="font-weight: bold;">Variables de site</span>.</p>
<p>&nbsp;</p>
<p>Si vous utilisez WinPro sur plusieurs sites, vous pouvez redéfinir cette formule pour chaque site. Cela vous permet de définir certaines variables globales: p.ex. la valeur du retrait soudure, le mode d'assemblage des traverses, ...</p>
<p>&nbsp;</p>
<p>Notez que cette formule de site peut aussi être utilisées si vous avez un seul site de production. Il peut se révéler pratique d'y créer les quelques variables globales dont la valeur est constante quelle que soit la menuiserie.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-style: italic; text-decoration: underline;">Formule de site:</span></p>
<p style="margin: 0px 0px 0px 61px;"><span class="f_Variables">_Soudure := 2.5</span></p>
<p style="margin: 0px 0px 0px 48px;">&nbsp;</p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-style: italic; text-decoration: underline;">Formule de profil dormant:</span></p>
<p style="margin: 0px 0px 0px 60px;"><span class="f_Variables">Longueur := Dimension</span></p>
<p style="margin: 0px 0px 0px 60px;"><span class="f_Variables">Si Angle1 Pas Dans 0, 90</span></p>
<p style="margin: 0px 0px 0px 60px;"><span class="f_Variables"> &nbsp; Longueur += _Soudure</span></p>
<p style="margin: 0px 0px 0px 60px;"><span class="f_Variables">Fin Si</span></p>
<p style="margin: 0px 0px 0px 60px;"><span class="f_Variables">Si Angle2 Pas Dans 0, 90</span></p>
<p style="margin: 0px 0px 0px 60px;"><span class="f_Variables"> &nbsp; Longueur += _Soudure</span></p>
<p style="margin: 0px 0px 0px 60px;"><span class="f_Variables">Fin Si</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="347" style="width: 347px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarque</span><span style="text-decoration: underline;">:</span></p>
<p style="margin: 0px 0px 0px 13px;">La formule de site est exécutée en début de calcul.</p>
<p style="margin: 0px 0px 0px 13px;">Voyez la page <a href="ordrecalcul.php">Ordre de calcul</a> pour plus de précisions.</p>
</td>
</tr>
</table>
</div>
<p style="text-align: center;"><span class="f_Interligne">&nbsp;</span></p>
<p style="text-align: center;"><span class="f_Interligne">&nbsp;</span></p>
<p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
