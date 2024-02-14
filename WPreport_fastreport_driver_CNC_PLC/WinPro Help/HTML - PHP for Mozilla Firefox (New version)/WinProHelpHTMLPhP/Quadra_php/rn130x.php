<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["1.3.0x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn130x.php"; }
else { parent.quicksync('a11.29.3'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>1.3.0x</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="" />
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
    <td align="right">
     <span style="font-size: 9pt">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="rn131x.php">Previous</a>&nbsp;
     
     </span>
    </td>
  </tr>
</table>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.3.09</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">6/6/98</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Cette mise &#224; jour apporte les corrections &#224; divers probl&#232;mes:</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd" style="text-decoration: underline;">Calcul faux cintrage ovale:</span><span class="f_Textestd"> </span><span class="f_Textestd">Il y avait un probl&#232;me dans le calcul du prix au m&#178; pour les faux cintrages, mais uniquement ovales. Ce probl&#232;me est r&#233;gl&#233;.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd" style="text-decoration: underline;">Messages dans les croisillons:</span><span class="f_Textestd"> </span><span class="f_Textestd">Cette nouvelle version en donne maintenant la possibilit&#233; de g&#233;n&#233;rer des messages dans les croisillons incorpor&#233;s (possibilit&#233; d&#233;j&#224; disponible dans les croisillons appliqu&#233;s).</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd" style="text-decoration: underline;">Panneaux et vitrages retournables:</span><span class="f_Textestd"> </span><span class="f_Textestd">Le programme confondait parfois largeur et hauteur au niveau des panneaux et vitrages retournables.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd" style="text-decoration: underline;">RAL .standard sur les croisillons appliqu&#233;s:</span><span class="f_Textestd"> </span><span class="f_Textestd">Les croisillons appliqu&#233;s ne sont pas li&#233;s &#224; un syst&#232;me particulier; il n&#8217;&#233;taient donc pas li&#233;s au syst&#232;me des couleurs RAL standards. On prend maintenant en compte le syst&#232;me li&#233; au ch&#226;ssis dans lequel se trouvent les croisillons pour d&#233;cider si le RAL est standard ou pas.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd" style="text-decoration: underline;">RAL standard sur bons de commande fournisseur:</span><span class="f_Textestd"> </span><span class="f_Textestd">Des RAL non standards &#233;taient communiqu&#233;s au fournisseur (toutefois avec les bons codes couleur). Les bons de commande fournisseur &#233;taient donc l&#233;g&#232;rement sur&#233;valu&#233;s.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd" style="text-decoration: underline;">Seuils de ch&#226;ssis (nouveaut&#233;):</span><span class="f_Textestd"> </span><span class="f_Textestd">Il est maintenant possible, dans l&#8217;encodage d&#8217;un ch&#226;ssis, de choisir un seuil de ch&#226;ssis, de la m&#234;me mani&#232;re qu&#8217;on pouvait choisir un seuil de porte. Ceci est strictement &#233;quivalent au choix d&#8217;un seuil de ch&#226;ssis dans la liste des rehausses, avec d&#233;duction de la hauteur du seuil. La nouvelle m&#233;thode permet simplement de gagner un peu de temps &#224; l&#8217;encodage. L&#8217;ancienne m&#233;thode est bien s&#251;r toujours disponible.</span></td></tr></table></div><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.3.08</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">2/6/98</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Cette mise &#224; jour apporte, outre diverses petites modifications &#233;num&#233;r&#233;es ci-apr&#232;s, une nouveaut&#233; int&#233;ressante:</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd" style="text-decoration: underline;">Copier/coller dans les questions:</span><span class="f_Textestd"> </span><span class="f_Textestd">Vous pouvez maintenant faire des copier/coller au niveau des questions. Pour cela, cliquez dans la colonne de gauche (num&#233;ros de ligne) sur la ou les lignes &#224; copier ou couper. Vous pouvez &#233;tendre la s&#233;lection &#224; l&#8217;aide des touches shift et control, selon les r&#232;gles habituelles de Windows. La ou les lignes s&#233;lectionn&#233;es appara&#238;tront en fond bleu (ou &#233;ventuellement dans une autre couleur selon les r&#233;glages de votre poste de travail). Cliquez sur le bouton droit, toujours dans la colonne de num&#233;ros, pour choisir l&#8217;op&#233;ration (couper, coller, copier)</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd" style="text-decoration: underline;">Autres modifications:</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Ligne de s&#233;paration inventaire</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Arrondi dimensions ch&#226;ssis sous caisson si caisson d&#233;duit</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Variable NombreVantaux disponibles dans les dessins d&#8217;accessoires</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Acc&#232;s zone livraison sur fen&#234;tre de modification des livraisons</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">&#201;tiquette entr&#233;e article &#8216;tra&#231;able&#8217; : ne sort pas si entr&#233;e = 0</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Code article sur &#233;tiquettes articles &#8217;tra&#231;ables&#8217;</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Rappel fournisseur : ne tient plus compte de la date confirm&#233;e</span></td></tr></table></div><p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.3.07</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">29/5/98</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Stock optimisation:</span><span class="f_Textestd"> Dans les versions pr&#233;c&#233;dentes, le programme d&#233;cr&#233;mentait un stock g&#233;n&#233;ral au moment de l&#8217;optimisation. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Cette mani&#232;re de travailler est toujours valable, mais on peut maintenant d&#233;finir, individuellement pour chaque article, le stock qu&#8217;il faut d&#233;cr&#233;menter au lieu du stock par d&#233;faut.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Coefficient de r&#233;servation:</span><span class="f_Textestd"> On peut, pour chaque article, d&#233;finir un coefficient de r&#233;servation. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ce coefficient multiplie la quantit&#233; &#224; r&#233;server normalement, afin d&#8217;obtenir une marge de s&#233;curit&#233;. Bien entendu, ce coefficient n&#8217;intervient pas sur les sorties de stock r&#233;elles. Veuillez noter que ce coefficient n&#8217;est utilisable et accessible que si la r&#233;servation n&#8217;est pas optimis&#233;e. Elle n&#8217;est donc pas utilisable actuellement chez vous.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.3.06</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">26/5/98</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Paramétrage dormant:</span></p>
<p class="p_Textestd"><span class="f_Textestd">Cette mise &#224; jour apporte essentiellement la possibilit&#233; de choisir pour chaque c&#244;t&#233; de dormant, le profil souhait&#233;, ainsi que le type d&#8217;assemblage entre chaque c&#244;t&#233; du dormant.</span></p>
<p class="p_Textestd"><span class="f_Textestd">A la base, il faut cr&#233;er un cadre de dormant pour chaque type de profil. Il faut, pour assurer la compatibilit&#233; entre les c&#244;t&#233;s des dormants, que chaque cadre dormant comporte les m&#234;mes questions, sp&#233;cialement au niveau du nom des variables; dans le cas contraire, le programme rejettera certaines combinaisons.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour permettre la d&#233;tection des diff&#233;rents types d&#8217;assemblage, WinPro cr&#233;e plusieurs nouvelles variables :</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="142" style="width: 142px; border: solid 1px ;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Assemblage1</span></p>
</td>
<td width="546" style="width: 546px; border: solid 1px ;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Type d&#8217;assemblage c&#244;t&#233; 1 : </span><span class="f_Variables">Onglet</span><span class="f_Textestd">, </span><span class="f_Variables">DroitCourt</span><span class="f_Textestd">, </span><span class="f_Variables">DroitLong</span><span class="f_Textestd">, </span><span class="f_Variables">SansAssemblage</span><span class="f_Textestd">)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="142" style="width: 142px; border: solid 1px ;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Assemblage2</span></p>
</td>
<td width="546" style="width: 546px; border: solid 1px ;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Type d&#8217;assemblage c&#244;t&#233; 2</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="142" style="width: 142px; border: solid 1px ;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">EpaisseurProfil1</span></p>
</td>
<td width="546" style="width: 546px; border: solid 1px ;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Petite hauteur du profil suivant (sens des aiguilles d&#8217;une montre)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="142" style="width: 142px; border: solid 1px ;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">EpaisseurProfil2</span></p>
</td>
<td width="546" style="width: 546px; border: solid 1px ;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Petite hauteur du profil pr&#233;c&#233;dent (sens des aiguilles d&#8217;une montre)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="142" style="width: 142px; border: solid 1px ;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Chambre</span></p>
</td>
<td width="546" style="width: 546px; border: solid 1px ;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Num&#233;ro de la chambre du profil courant</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="142" style="width: 142px; border: solid 1px ;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Chambre1</span></p>
</td>
<td width="546" style="width: 546px; border: solid 1px ;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Num&#233;ro de la chambre du profil suivant (sens des aiguilles d&#8217;une montre)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="142" style="width: 142px; border: solid 1px ;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Chambre2</span></p>
</td>
<td width="546" style="width: 546px; border: solid 1px ;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Num&#233;ro de la chambre du profil pr&#233;c&#233;dent (sens des aiguilles d&#8217;une montre)</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">La dimension de base donn&#233;e pour chacun des c&#244;t&#233;s est la dimension de fabrication du dormant. Il faut donc raccourcir le dormant dans le cas d&#8217;un &#8216;assemblage droit court&#8217; (cf. exemples ci-dessous). Toutefois, par compatibilit&#233; avec la version pr&#233;c&#233;dente, un assemblage droit court en bas &#224; c&#244;t&#233; d&#8217;une porte prend d&#233;j&#224; en compte l&#8217;&#233;paisseur de la traverse; il n&#8217;y a donc rien &#224; d&#233;duire du dormant dans ce cas l&#224;. La formule donn&#233;e dans les exemples prend en compte cette contrainte.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img src="img/img_135.jpg" width="82" height="88" border="0" vspace="1" hspace="1" alt="img_135"></p>
<p class="p_Textestd"><span class="f_Textestd">Dans le cas d&#8217;un assemblage &#224; onglet entre deux profils d&#8217;&#233;paisseurs diff&#233;rentes, le programme allonge ou r&#233;duit de la longueur n&#233;cessaire la variable dimension, de sorte qu&#8217;il n&#8217;est pas n&#233;cessaire de modifier la formule dans le param&#233;trage. (cf. croquis ci-contre). Ce calcul tient compte des angles.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Attention, ce type d&#8217;assemblage (onglet entre deux profils d&#8217;&#233;paisseurs diff&#233;rentes) est actuellement incompatible avec les usinages! Les usinages seraient en effet d&#233;cal&#233;s de la diff&#233;rence entre les &#233;paisseurs!</span><span class="f_Textestd"> Ce point sera revu dans une version ult&#233;rieure.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Toujours dans le cas d&#8217;un onglet, le programme v&#233;rifie la compatibilit&#233; entre les chambres. Pour cela, la d&#233;finition du dormant contient une nouvelle information : le num&#233;ro de chambre. Il s&#8217;agit d&#8217;une valeur arbitraire comprise entre &#8211;9999 et 9999. Par d&#233;faut, toutes les chambres sont &#224; 0, et donc tous les assemblages &#224; onglet sont compatibles. Si on donne &#224; la chambre une autre valeur, le programme n&#8217;acceptera plus l&#8217;assemblage &#224; onglet qu&#8217;avec des profils ayant ce m&#234;me num&#233;ro de chambre.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Exemples</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour l&#8217;aluminium, les formules sont typiquement les suivantes :</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">Profil de dormant</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Quantite := 1</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Longueur := Dimension</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">#</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables"># Ajuster dimension si coupe droite courte,</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables"># en fonction de l'&#233;paisseur des profils adjacents</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables"># et de l'angle de coupe</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">#</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Si Assemblage1 = DroitCourt et Angle1 &lt;&gt; 0 et Angle1 &lt;&gt; 180 et Non TraverseAGauche</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables"> Longueur -= EpaisseurProfil1 / Cosinus (Angle1 - 90)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Fin Si</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Si Assemblage2 = DroitCourt et Angle2 &lt;&gt; 0 et Angle2 &lt;&gt; 180 et Non TraverseADroite</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables"> Longueur -= EpaisseurProfil2 / Cosinus (Angle2 - 90)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Fin Si</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">Clame droite</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Si Assemblage1 = Onglet et Angle1 = 45</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables"> Quantite := 1</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Fin Si</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">Clame variable</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Si Assemblage1 = Onglet et Angle1 &lt;&gt; 45</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables"> Quantite := 1</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Fin Si</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">T&#233; d&#8217;assemblage</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Quantite := 0</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Si Assemblage1 = DroitCourt</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables"> Quantite += 1</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Fin si</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Si Assemblage2 = DroitCourt</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables"> Quantite += 1</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Fin si</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">Pour interdire les assemblages droits</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Si Assemblage1 Pas Dans Onglet, SansAssemblage</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp;Echec Assemblage droit interdit !</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Fin Si</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">Pour interdire les assemblages avec d&#8217;autres types de dormant</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Si EpaisseurProfil &lt;&gt; EpaisseurProfil1</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp;Echec M&#233;lange des dormants interdit !</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Fin Si</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">NB : on peut aussi d&#233;finir des num&#233;ros de &#8216;chambre&#8217; incompatibles, ce qui interdit d&#8217;office les assemblages &#224; onglet entre les diff&#233;rents types de profil.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle syntaxe pour les variables globales:</span><span class="f_Textestd"> toute variable commen&#231;ant par le signe &#8216;_&#8217; (underscore) est d&#8217;office consid&#233;r&#233;e comme globale. Elle pourra &#234;tre utilis&#233;e comme une variable ordinaire. </span></p>
<p class="p_Textestd"><span class="f_Textestd">L&#8217;ancienne syntaxe (</span><span class="f_Variables">Stocker</span><span class="f_Textestd"> / </span><span class="f_Variables">Charger</span><span class="f_Textestd">) est bien entendu toujours admise.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Repr&#233;sentation graphique</span><span class="f_Textestd"> du type d&#8217;assemblage sur les dormants et les ouvrants.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouveau choix du type d&#8217;assemblage pour les ouvrants:</span><span class="f_Textestd"> en plus du &#8216;tout onglet&#8217; et &#8216;tout droit&#8217;, on a un assemblage &#8216;onglet en haut, droit en bas&#8217;. Ce type d&#8217;assemblage est tr&#232;s fr&#233;quent sur les portes aluminium. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Le nouveau choix a &#233;t&#233; rendu n&#233;cessaire &#224; cause de la repr&#233;sentation graphique des types d&#8217;assemblage. Attention, la dimension donn&#233;e pour le profil bas est la largeur totale de l&#8217;ouvrant! (donc, d&#233;duire l&#8217;&#233;paisseur des montants)</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.3.04 &amp; 05</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">-</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Ajout de la notion de choix entre vue ext&#233;rieure et vue int&#233;rieure au niveau du syst&#232;me.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Possibilit&#233; d&#8217;imprimer un tarif de ch&#226;ssis avec prix des vitrages d&#233;duits</span></p>
<p><span class="f_Winproini">[Tarif]</span></p>
<p><span class="f_Winproini">Vitrage = 1  </span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.3.01</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">-</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Ajout dans les panneaux fabriqu&#233;s</span><span class="f_Textestd"> de la possibilit&#233; de d&#233;finir des panneaux &#224; d&#233;couper prenant toute la surface du panneau.</span></p>

</td></tr></table>
</div>

</body>
</html>
