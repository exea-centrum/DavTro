<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Production variables","Variables de production"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?variables_de_production.php"; }
else { parent.quicksync('a3.3'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Variables de production</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="_OrdreLot,_OrdreCadre,_DelaiProductionChassis,_DelaiProductionVolet,_LigneProductionChassis,_LigneProductionVolet" />
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
     <a href="accessibilitédesquestions.php">Previous</a>&nbsp;
     <a href="variablesgenerale.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Production variables are handled by WinPro with a licence file including the "Production lines" management module.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="233" style="width: 233px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;"> Variable</span></p>
</td>
<td width="456" style="width: 456px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 12px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="233" style="width: 233px; border: solid 1px #c0c0c0;"><p class="p_Textestd" style="text-align: center;"><span class="f_Variables">_JobOrder</span></p>
</td>
<td width="456" style="width: 456px; border: solid 1px #c0c0c0;"><p class="p_Textestd" style="margin: 0px 0px 0px 12px;"><span class="f_Textestd">Sort key for windows, for the production (end of saw). It interacts with outer frame slot number assignation. The variable is evaluated when validating the window. The designs will be sorted into ascending order according the various values of the variable.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 12px;"><span class="f_Textestd">When undefined (</span><span class="f_Variables">0</span><span class="f_Textestd">), designs are sorted by order code, designs are handled &nbsp;into the order of input.</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="233" style="width: 233px; border: solid 1px #c0c0c0;"><p class="p_Textestd" style="text-align: center;"><span class="f_Variables">_FrameOrder</span></p>
</td>
<td width="456" style="width: 456px; border: solid 1px #c0c0c0;"><p class="p_Textestd" style="margin: 0px 0px 0px 12px;"><span class="f_Textestd">Sort key to arrange windows along with each glazings type (end of line or glass sorting). The variable is evaluated when validating the window. The designs will be sorted into ascending order according the various values of the variable.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 12px;"><span class="f_Textestd">When undefined (</span><span class="f_Variables">0</span><span class="f_Textestd">), designs are sorted by order code, designs are handled &nbsp;into the order of input.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 12px;"><span class="f_Textestd">This sort key is applied onto the result of the sort key defined into menu Technic | Production | End of production sort order.</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="233" style="width: 233px; border: solid 1px #c0c0c0;"><p class="p_Textestd" style="text-align: center;"><span class="f_Variables">_WindowProductionDelay</span></p>
</td>
<td width="456" style="width: 456px; border: solid 1px #c0c0c0;"><p class="p_Textestd" style="margin: 0px 0px 0px 12px;"><span class="f_Textestd">Additional time (into days) for the fabrication of a specific window</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="233" style="width: 233px; border: solid 1px #c0c0c0;"><p class="p_Textestd" style="text-align: center;"><span class="f_Variables">_RollerShutterProductionDelay</span></p>
</td>
<td width="456" style="width: 456px; border: solid 1px #c0c0c0;"><p class="p_Textestd" style="margin: 0px 0px 0px 12px;"><span class="f_Textestd">Additional time (into days) for the fabrication of a specific roller shutter</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="233" style="width: 233px; border: solid 1px #c0c0c0;"><p class="p_Textestd" style="text-align: center;"><span class="f_Variables">_WindowProductionLine</span></p>
</td>
<td width="456" style="width: 456px; border: solid 1px #c0c0c0;"><p class="p_Textestd" style="margin: 0px 0px 0px 12px;"><span class="f_Textestd">ID of the production line where the window will be fabricated</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="233" style="width: 233px; border: solid 1px #c0c0c0;"><p class="p_Textestd" style="text-align: center;"><span class="f_Variables">_RollerShutterProductionLine</span></p>
</td>
<td width="456" style="width: 456px; border: solid 1px #c0c0c0;"><p class="p_Textestd" style="margin: 0px 0px 0px 12px;"><span class="f_Textestd">ID of the production line where the roller shutter will be fabricated</span></p>
</td>
</tr>
</table>
</div>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;"></p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>
<p class="p_Textestd" style="text-align: center;"><span class="f_Variables">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Les variables de production sont trait&#233;es par Winpro si le module "Lignes de production" est activ&#233; dans votre licence. Reportez vous au manuel de <span style="font-weight: bold;">Gestion des lignes de production GLP.chm</span> pour plus de d&#233;tails.</p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="192" style="width: 192px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;"> Variable</span></p>
</td>
<td width="459" style="width: 459px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 11px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td valign="middle" width="192" style="width: 192px; border: solid 1px #c0c0c0;"><p class="p_Textestd" style="text-align: center;"><span class="f_Variables">_OrdreLot</span></p>
</td>
<td width="459" style="width: 459px; border: solid 1px #c0c0c0;"><p class="p_Textestd" style="margin: 0px 0px 0px 11px;"><span class="f_Textestd">Cl&#233; de tri des fen&#234;tres pour la production (sortie de scie). Elle agit sur l'affectation des num&#233;ros de casier de dormant. La variable est &#233;valu&#233;e lors de la validation de la fen&#234;tre. Les ch&#226;ssis seront tri&#233;s par ordre croissant selon les diff&#233;rentes affections de la variable.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 11px;"><span class="f_Textestd">Si la variable est ind&#233;finie (</span><span class="f_Variables">0</span><span class="f_Textestd">), les ch&#226;ssis sont tri&#233;s par commande et en suivant l'ordre de saisie.</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td valign="middle" width="192" style="width: 192px; border: solid 1px #c0c0c0;"><p class="p_Textestd" style="text-align: center;"><span class="f_Variables">_OrdreCadre</span></p>
</td>
<td width="459" style="width: 459px; border: solid 1px #c0c0c0;"><p class="p_Textestd" style="margin: 0px 0px 0px 11px;"><span class="f_Textestd">Cl&#233; de tri pour ranger les fen&#234;tres avec chaque type de vitrage (tri fin de cha&#238;ne &nbsp; ou tri vitrage). La variable est &#233;valu&#233;e lors de la validation de la fen&#234;tre. Les ch&#226;ssis seront tri&#233;s par ordre croissant selon les diff&#233;rentes affections de la variable.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 11px;"><span class="f_Textestd">Si la variable est ind&#233;finie (</span><span class="f_Variables">0</span><span class="f_Textestd">), les ch&#226;ssis sont tri&#233;s par commande et en suivant l'ordre de saisie.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 11px;"><span class="f_Textestd">Cette cl&#233; de tri s'applique sur le r&#233;sultat de la cl&#233; de tri d&#233;finie via le menu Technique | Production | Ordre de tri en fin de cha&#238;ne.</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td valign="middle" width="192" style="width: 192px; border: solid 1px #c0c0c0;"><p class="p_Textestd" style="text-align: center;"><span class="f_Variables">_DelaiProductionChassis</span></p>
</td>
<td width="459" style="width: 459px; border: solid 1px #c0c0c0;"><p class="p_Textestd" style="margin: 0px 0px 0px 11px;"><span class="f_Textestd">Temps suppl&#233;mentaire (en jours) pour la production d&#8217;une fen&#234;tre sp&#233;cifique</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td valign="middle" width="192" style="width: 192px; border: solid 1px #c0c0c0;"><p class="p_Textestd" style="text-align: center;"><span class="f_Variables">_DelaiProductionVolet</span></p>
</td>
<td width="459" style="width: 459px; border: solid 1px #c0c0c0;"><p class="p_Textestd" style="margin: 0px 0px 0px 11px;"><span class="f_Textestd">Temps suppl&#233;mentaire (en jours) pour la production d&#8217;un volet sp&#233;cifique</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td valign="middle" width="192" style="width: 192px; border: solid 1px #c0c0c0;"><p class="p_Textestd" style="text-align: center;"><span class="f_Variables">_LigneProductionChassis</span></p>
</td>
<td width="459" style="width: 459px; border: solid 1px #c0c0c0;"><p class="p_Textestd" style="margin: 0px 0px 0px 11px;"><span class="f_Textestd">Identificateur de la ligne de production sur laquelle la fen&#234;tre sera produite</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td valign="middle" width="192" style="width: 192px; border: solid 1px #c0c0c0;"><p class="p_Textestd" style="text-align: center;"><span class="f_Variables">_LigneProductionVolet</span></p>
</td>
<td width="459" style="width: 459px; border: solid 1px #c0c0c0;"><p class="p_Textestd" style="margin: 0px 0px 0px 11px;"><span class="f_Textestd">Identificateur de la ligne de production sur laquelle le volet sera produit</span></p>
</td>
</tr>
</table>
</div>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;"></p>

</td></tr></table>
</div>

</body>
</html>
