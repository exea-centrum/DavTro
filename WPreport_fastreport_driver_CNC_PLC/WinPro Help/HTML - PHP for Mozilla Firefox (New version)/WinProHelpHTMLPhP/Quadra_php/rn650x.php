<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["6.5.0x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn650x.php"; }
else { parent.quicksync('a11.7.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>6.5.0x</title>
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
     <a href="rn700x.php">Previous</a>&nbsp;
     <a href="rn646.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.5.07 &#224; 09</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span class="f_Textestd">4/4/2003</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Release de maintenance:</span><span class="f_Textestd"> </span><span class="f_Textestd">Synchronisation avec version 6.4.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Usinage des traverses:</span><span class="f_Textestd"> Les usinages parall&#232;les aux axes de traverse prennent dor&#233;navant leur origine au centre de la traverse, plut&#244;t qu&#8217;&#224; une des extr&#233;mit&#233;s. Cela permet de g&#233;n&#233;rer correctement les usinages m&#234;me si la position de la traverse est d&#233;cal&#233;e de mani&#232;re importante</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Base de donn&#233;es commerciale:</span><span class="f_Textestd"> Un nouveau point de menu</span><span class="f_Textestd">, Utilitaire | Base de donn&#233;es commerciale</span><span class="f_Textestd">, vous permet de cr&#233;er &nbsp;une base de donn&#233;es destin&#233;e &#224; vos commerciaux, selon le principe utilis&#233; pour la base de donn&#233;es destin&#233;e &#224; WinPro/D. Cette base de donn&#233;e est cr&#233;&#233;e dans le r&#233;pertoire &#8216;</span><span class="f_Textestd">Commercial</span><span class="f_Textestd">&#8217; du r&#233;pertoire WinPro, et contient toutes les tables techniques. Pour l&#8217;utiliser, vous devez cr&#233;er une nouvelle installation de WinPro, par copie de votre installation de base, et copier tous les fichiers du r&#233;pertoire </span><span class="f_Textestd">Commercial</span><span class="f_Textestd"> vers le r&#233;pertoire </span><span class="f_Textestd">Data</span><span class="f_Textestd"> de cette nouvelle installation. Les champs sensibles de cette base de donn&#233;es commerciale sont crypt&#233;es.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Attention ! Outre les fichiers de base de donn&#233;e habituels (DBF, CDX, FPT), cette base de donn&#233;es commerciale contient un fichier </span><span class="f_Textestd">crypt.ini</span><span class="f_Textestd"> qui doit imp&#233;rativement &#234;tre copi&#233; en m&#234;me temps que les autres fichiers.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Base de donn&#233;es WinPro/D:</span><span class="f_Textestd"> Un fichier suppl&#233;mentaire, </span><span class="f_Textestd">crypt.ini</span><span class="f_Textestd">, est cr&#233;&#233; en m&#234;me temps que les fichiers de la base de donn&#233;es technique. Ce fichier doit absolument &#234;tre copi&#233; avec les autres fichiers du r&#233;pertoire devis, car il contient certaines informations n&#233;cessaires au d&#233;cryptage des champs crypt&#233;s.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.5.06</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">12/3/2003</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Situations ma&#231;onnerie:</span><span class="f_Textestd"> Vous pouvez attribuer &#224; chaque situation ma&#231;onnerie 4 dessins, un pour chaque c&#244;t&#233; du dormant, qui repr&#233;senteront graphiquement la situation ma&#231;onnerie sur les documents client (devis, confirmation, note d&#8217;envoi) et sur les plans d&#8217;atelier, contr&#244;le qualit&#233;, contr&#244;le de prix de revient, de vente et d&#8217;achat. Ces dessins sont d&#233;finis comme des dessins WinPro classiques.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Remarque : ces dessins sont imprim&#233;s &#224; une &#233;chelle fixe de 1/10. Vous disposez d&#8217;une bande de 8 mm de large le long du ch&#226;ssis (en bas ou &#224; droite) pour leur impression.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Aucune variable n&#8217;est disponible pour ce type de dessin.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Sens d&#8217;ouverture des portes:</span><span class="f_Textestd"> Vous pouvez d&#233;finir pour chaque porte un dessin repr&#233;sentant le sens d&#8217;ouverture vu en coupe. Vous devez d&#233;finir un dessin diff&#233;rent pour les sens gauche et droit, et vous pouvez aussi d&#233;finir les dessins appropri&#233;s pour les vues invers&#233;es.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Ces dessins sont d&#233;finis comme des dessins WinPro classiques.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Remarque : ces dessins sont imprim&#233;s &#224; l&#8217;&#233;chelle du dessin du ch&#226;ssis. Vous disposez d&#8217;une bande de 12 mm de large en bas du ch&#226;ssis pour leur impression.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Une seule variable est disponible pour ce dessin : </span><span class="f_Variables">W</span><span class="f_Textestd">, qui repr&#233;sente la largeur de l&#8217;ouvrant.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 8px;"><span class="f_ImageCaption">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 5px;"><img src="img/img_68.jpg" width="298" height="635" border="0" vspace="1" hspace="1" alt="img_68"></p>
<p style="margin: 0px 0px 0px 5px;"><span class="f_ImageCaption">&nbsp;</span></p>
<p class="p_Textestd" style="text-align: center;"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.5.01 &#224; 05</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">3/1 au 11/3/2003</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Release de maintenance:</span><span class="f_Textestd"> </span><span class="f_Textestd">Synchronisation avec version 6.4</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.5.00</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">2/1/2003</span></p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 8px;">&nbsp;</p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Faux cintrages:</span><span class="f_Textestd"> Une extension du syst&#232;me de faux cintrage d&#233;j&#224; disponible dans WinPro vous permet de r&#233;aliser de nouveaux types de cintre:</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><img src="img/img_69.jpg" width="803" height="453" border="0" vspace="1" hspace="1" alt="img_69"></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour les types 1 &#224; 3, vous disposez de nouvelles variables au niveau des dormants et des ouvrants, en partie haute :</span></p>
<p class="p_Textestd"><span class="f_Variables">TypeFauxCintre</span><span class="f_Textestd">: contient une valeur de </span><span class="f_Variables">0</span><span class="f_Textestd"> &#224; </span><span class="f_Variables">5</span><span class="f_Textestd">, correspondant aux descriptions dans le dialogue ci-dessus.</span></p>
<p class="p_Textestd"><span class="f_Variables">HauteurSupplFCtr</span><span class="f_Textestd">: si </span><span class="f_Variables">TypeFauxCintre</span><span class="f_Textestd"> vaut </span><span class="f_Variables">4</span><span class="f_Textestd">, cette variable contient la hauteur d&#8217;extension vers le haut du faux cintrage.</span></p>
<p class="p_Textestd"><span class="f_Variables">EpaisseurMinProfil</span><span class="f_Textestd">: pour les types 1 &#224; 3, l&#8217;&#233;paisseur minimum du profil haut (1 : dormant seulement, 2 et 3 : ouvrant seulement)</span></p>
<p class="p_Textestd"><span class="f_Variables">EpaisseurGaucheProfil</span><span class="f_Textestd">: pour les types 1 &#224; 3, l&#8217;&#233;paisseur maximum du profil haut sur son c&#244;t&#233; gauche (1 : dormant seulement, 2 et 3 : ouvrant seulement)</span></p>
<p class="p_Textestd"><span class="f_Variables">EpaisseurDroiteProfil</span><span class="f_Textestd">: pour les types 1 &#224; 3, l&#8217;&#233;paisseur maximum du profil haut sur son c&#244;t&#233; droit (1 : dormant seulement, 2 et 3 : ouvrant seulement)</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Attention ! Pour pouvoir saisir un faux cintrage de type 1, 2, 3 ou 4, vous devez d&#233;finir un ch&#226;ssis non rectangulaire !!!</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour les faux cintrages de type 4, vous devez d&#233;finir un faux cintrage comme pour le type 5.</span></p>

</td></tr></table>
</div>

</body>
</html>
