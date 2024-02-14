<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["1.6.0x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn160x.php"; }
else { parent.quicksync('a11.26.3'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>1.6.0x</title>
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
     <a href="rn161x.php">Previous</a>&nbsp;
     <a href="rn15xx.php">Next</a>
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
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.6.09</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">4/1/1999</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Contr&#244;le du prix d&#8217;achat:</span><span class="f_Textestd"> Un nouveau document a &#233;t&#233; cr&#233;&#233;, qui vous indique, pour chaque ch&#226;ssis d&#8217;une commande, diff&#233;rents prix d&#8217;achat : brut par unit&#233;, net par unit&#233;, remise d&#8217;achat, net pour le ch&#226;ssis; le document indique &#233;galement les r&#233;partitions de prix d&#8217;achat par les cat&#233;gories suivantes : profil, articles, main d&#8217;&#339;uvre, vitrages, panneaux</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Liste des sorties:</span><span class="f_Textestd"> Une nouvelle liste des sorties, tri&#233;e par zone de livraison, est disponible dans le menu </span><span class="f_Textestd">Commande | Listes d&#8217;encours | Liste des sorties par zone de livraison</span><span class="f_Textestd">. Cette liste reprend tous les types de sortie : livraison, pose, enl&#232;vement, ou non sp&#233;cifi&#233;, pour une semaine donn&#233;e, et soit pour l&#8217;ensemble des zones de livraison, soit pour une seule zone de livraison. Elle donne le nombre de ch&#226;ssis, de portes, de volets, de ch&#226;ssis avec volet incorpor&#233;, le num&#233;ro de commande, le nom du client, la r&#233;f&#233;rence de la commande.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Conditions de paiement:</span><span class="f_Textestd"> Pr&#233;c&#233;demment, les conditions de paiement &#233;taient d&#233;finies dans la fiche client et n&#8217;&#233;taient pas modifiables au niveau de la commande. Maintenant, WinPro vous proposera les conditions de paiement de la fiche client, mais vous pouvez les changer individuellement pour chaque commande &#8211; pour autant que vous ayez les droits n&#233;cessaires (sp&#233;cifiquement, droit de modification de la fiche client).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Conditions de paiement:</span><span class="f_Textestd"> Il est maintenant possible de traduire les conditions de paiement pour chaque langue.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Euro:</span><span class="f_Textestd"> Afin de permettre une conversion exacte des monnaies europ&#233;ennes vers l&#8217;Euro et vice-versa, la pr&#233;cision du taux de change a &#233;t&#233; port&#233;e &#224; 6 d&#233;cimales. Les prix d&#8217;achats et prix de revient dans le fichier article sont eux port&#233;s &#224; 5 d&#233;cimales.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">An 2000:</span><span class="f_Textestd"> Un petit probl&#232;me de compatibilit&#233; an 2000 dans WinPro concernait l&#8217;encodage &#8216;raccourci&#8217; d&#8217;une ann&#233;e : si vous tapiez, par exemple, 1/3/0 ou 1/3/00, WinPro interpr&#233;tait cette date soit comme le 1</span><span class="f_Textestd">er</span><span class="f_Textestd"> mars de l&#8217;ann&#233;e courante soit comme le 1</span><span class="f_Textestd">er</span><span class="f_Textestd"> mars de l&#8217;ann&#233;e suivante. Dor&#233;navant, WinPro interpr&#233;tera correctement cette date comme le 1/3/2000. De m&#234;me, l&#8217;affichage raccourci d&#8217;une date (ann&#233;e sur deux chiffres) donnait p.ex. 1/3/ 0 au lieu de 1/3/00. Ce probl&#232;me est &#233;galement corrig&#233;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Impression coupes:</span><span class="f_Textestd"> Sur certaines imprimantes, les arcs de cercle dans les vues en coupe pouvaient &#234;tre mal trac&#233;s. Ce probl&#232;me est contourn&#233; dans cette nouvelle version.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p style="text-align: center; margin: 0px 0px 0px 8px;">&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.6.08</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">28/12/1999</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Compactage de WinPro.exe:</span><span class="f_Textestd"> WinPro est maintenant livr&#233; en version compact&#233;e. Ce compactage a pour avantage principal un net gain de vitesse, particuli&#232;rement pour une installation r&#233;seau. La taille du programme ex&#233;cutable passe de &#177; 8.5 Mb &#224; &#177; 3 Mb.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Couleur mauclair:</span><span class="f_Textestd"> Si l&#8217;ouvrant est d&#8217;une couleur diff&#233;rente du dormant, vous pouvez demander que le mauclair soit de la m&#234;me couleur que le dormant. Par d&#233;faut, le mauclair est de la couleur de l&#8217;ouvrant, comme dans les versions pr&#233;c&#233;dentes.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Textes de d&#233;but et de fin:</span><span class="f_Textestd"> Il n&#8217;y a plus maintenant d&#8217;autre limite de taille, que celle impos&#233;e par le syst&#232;me (par texte, 32.767 caract&#232;res sous Windows 95, 2.147.483.647 &#8211;th&#233;oriques!&#8211; sous Windows NT)</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Inventaires:</span><span class="f_Textestd"> Vous avez maintenant la possibilit&#233;, pour chaque type d&#8217;inventaire, de filtrer les articles en fonction de leur stock : inf&#233;rieur &#224; z&#233;ro, sup&#233;rieur ou &#233;gal &#224; z&#233;ro, sup&#233;rieur &#224; z&#233;ro, ou tous les articles. </span></p>
<p class="p_Textestd"><span class="f_Textestd">En outre, vous pouvez demander &#224; voir le total &#224; l&#8217;&#233;cran, sans plus de d&#233;tails.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img src="img/img_129.jpg" width="507" height="379" border="0" vspace="1" hspace="1" alt="img_129"></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.6.07</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">9/12/1999</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Num&#233;ros de documents:</span><span class="f_Textestd"> Vous pouvez modifier la num&#233;rotation automatique des documents (devis, commandes, accessoires, SAV) par le param&#233;trage des documents clients (menu </span><span class="f_Textestd">Utilitaires | Bons de commande client</span><span class="f_Textestd">). </span></p>
<p class="p_Textestd"><span class="f_Textestd">Veuillez vous assurer que la nouvelle num&#233;rotation ne fait pas double emploi avec les commandes existantes! Sans quoi, le programme recherchera le premier num&#233;ro non utilis&#233; pour la prochaine cr&#233;ation de document.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Remise &#224; z&#233;ro du stock:</span><span class="f_Textestd"> Un point de menu vous permet d&#8217;effectuer une remise &#224; z&#233;ro totale ou partielle du stock, en s&#233;lectionnant les cat&#233;gories d&#8217;article &#224; utiliser. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous pouvez aussi indiquer la date de remise &#224; z&#233;ro.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.6.03 &#224; 06</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">2/11 au 2/12/1999</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Variables:</span><span class="f_Textestd"> une nouvelle variable globale, </span><span class="f_Variables">_WinPro</span><span class="f_Textestd">, permet de v&#233;rifier si la formule est ex&#233;cut&#233;e dans la version fabricant ( </span><span class="f_Variables">_WinPro</span><span class="f_Textestd"> = </span><span class="f_Variables">_Fabricant</span><span class="f_Textestd"> </span><span class="f_Textestd">) ou dans la version devis ( </span><span class="f_Variables">_WinPro</span><span class="f_Textestd"> = </span><span class="f_Variables">_Devis</span><span class="f_Textestd"> </span><span class="f_Textestd">). </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ceci permet, par exemple, de g&#233;n&#233;rer des messages sp&#233;cifique &#224; l&#8217;environnement, ou de modifier certaines m&#233;thodes de calcul.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Dans les rehausses et profils p&#233;riph&#233;riques</span><span class="f_Textestd">, deux nouvelles variables sont disponibles : </span><span class="f_Variables">Largeur</span><span class="f_Textestd"> et </span><span class="f_Variables">Hauteur</span><span class="f_Textestd">. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ces variables repr&#233;sentent les dimensions du dormant.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Croisillons:</span><span class="f_Textestd"> Il faut maintenant indiquer, pour chaque type de croisillon, quelles sont les couleurs autoris&#233;es, et &#233;ventuellement les couleurs interdites. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Cette indication se fait au niveau du param&#233;trage des croisillons, en 1</span><span class="f_Textestd">&#232;re</span><span class="f_Textestd"> page (onglet </span><span class="f_Textestd">Description</span><span class="f_Textestd">). Vous disposez d&#8217;une liste de couleurs autoris&#233;es, d&#8217;une liste de couleurs interdites, ainsi que de 2 cases &#224; cocher : </span><span class="f_Textestd">Autoriser toutes couleurs</span><span class="f_Textestd">, et </span><span class="f_Textestd">Bicolore</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">L&#8217;option la plus simple consiste &#224; cocher la case </span><span class="f_Textestd">Autoriser toutes couleurs</span><span class="f_Textestd">. Dans ce cas, toutes les couleurs sont accept&#233;es; vous pouvez toutefois s&#233;lectionner une liste de couleurs interdites.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous pouvez aussi cocher la case </span><span class="f_Textestd">Bicolore</span><span class="f_Textestd"> si les croisillons bicolores sont faisables.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous pouvez finalement s&#233;lectionner une liste des couleurs autoris&#233;es; dans ce cas, la liste des couleurs interdites sera ignor&#233;e.</span></p>
<p class="p_Textestd"><span class="f_Textestd">N.B. La v&#233;rification se fait au moment de l&#8217;encodage des croisillons. Aucune v&#233;rification ne sera faite par apr&#232;s.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Dessin &#224; l&#8217;&#233;cran et pleine page:</span><span class="f_Textestd"> Vous pouvez choisir l&#8217;&#233;chelle de la coupe, ind&#233;pendamment de l&#8217;&#233;chelle du dessin du ch&#226;ssis.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Dormants, ouvrants, traverses, profils p&#233;riph&#233;riques:</span><span class="f_Textestd"> </span><span class="f_Textestd">Une nouvelle page dans la d&#233;finition de ces &#233;l&#233;ments, </span><span class="f_Textestd">DXF</span><span class="f_Textestd">, permet de d&#233;finir leur principaux dessins de coupe (profil et renfort), ainsi que leur positionnement relatif. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ce param&#233;trage simplifi&#233; couvre la plus grande partie des besoins. Pour un param&#233;trage plus fin des coupes, voir la version 1.6.5.</span></p>
<p class="p_Textestd"><span class="f_Textestd">N.B. : pour les ouvrants, le param&#233;trage des coupes est r&#233;parti sur 2 pages, </span><span class="f_Textestd">DXF 1</span><span class="f_Textestd"> et </span><span class="f_Textestd">DXF 2</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Parcloses:</span><span class="f_Textestd"> une colonne suppl&#233;mentaire permet de pr&#233;ciser l&#8217;&#233;paisseur de chaque parclose, afin de permettre le positionnement pr&#233;cis d&#8217;un &#233;ventuel joint de parclose.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Vitrages, panneaux, panneaux d&#233;coratifs:</span><span class="f_Textestd"> Un nouvel onglet permet de sp&#233;cifier le fichier DXF &#224; utiliser pour repr&#233;senter la coupe de ces &#233;l&#233;ments (pour le panneau d&#233;coratif, vous pouvez indiquer une coupe verticale et une coupe horizontale)</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Formules de coupe:</span><span class="f_Textestd"> En plus des possibilit&#233;s &#233;num&#233;r&#233;es ci-dessus, vous pouvez g&#233;n&#233;rer une coupe &#224; partir des formules. Les deux m&#233;thodes sont compatibles et peuvent &#234;tre utilis&#233;es simultan&#233;ment. </span></p>
<p class="p_Textestd"><span class="f_Textestd">La syntaxe est la suivante : </span><span class="f_Variables">VueCoupe (</span><span class="f_Textestd" style="font-weight: bold;">Code</span><span class="f_Variables">,</span><span class="f_Textestd"> </span><span class="f_Textestd" style="font-weight: bold;">Origine</span><span class="f_Variables">,</span><span class="f_Textestd"> </span><span class="f_Textestd" style="font-weight: bold;">Dx</span><span class="f_Variables">,</span><span class="f_Textestd"> </span><span class="f_Textestd" style="font-weight: bold;">Dy</span><span class="f_Variables">,</span><span class="f_Textestd"> </span><span class="f_Textestd" style="font-weight: bold;">Rotation</span><span class="f_Variables">,</span><span class="f_Textestd"> </span><span class="f_Textestd" style="font-weight: bold;">MirroirVertical</span><span class="f_Variables">,</span><span class="f_Textestd"> </span><span class="f_Textestd" style="font-weight: bold;">MirroirHorizontal</span><span class="f_Variables">)</span></p>
<p class="p_Textestd"><span class="f_Textestd">Signification des param&#232;tres :</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="font-weight: bold;">Code</span><span class="f_Textestd">  &nbsp; &nbsp; &nbsp;Code de la coupe. Il s&#8217;agit du code attribu&#233; &#224; chaque coupe dans la table des DXF. Le code peut indiff&#233;remment &#234;tre donn&#233; en majuscules ou minuscules.</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="font-weight: bold;">Origine</span><span class="f_Textestd">  &nbsp; &nbsp; &nbsp;Peut prendre une des valeurs suivantes : </span><span class="f_Variables">Haut</span><span class="f_Textestd">, </span><span class="f_Variables">Bas</span><span class="f_Textestd">, </span><span class="f_Variables">Gauche</span><span class="f_Textestd">, </span><span class="f_Variables">Droite</span><span class="f_Textestd">. Exception : dans les traverses, </span><span class="f_Textestd">origine</span><span class="f_Textestd"> peut prendre la valeur </span><span class="f_Variables">Horizontal</span><span class="f_Textestd"> ou </span><span class="f_Variables">Vertical</span><span class="f_Textestd">. Dans les caissons et les tabliers, seules les valeurs </span><span class="f_Variables">Haut</span><span class="f_Textestd"> et </span><span class="f_Variables">Bas</span><span class="f_Textestd"> sont retenues; dans les coulisses, seules les valeurs </span><span class="f_Variables">Gauche</span><span class="f_Textestd"> et </span><span class="f_Variables">Droite</span><span class="f_Textestd"> sont retenues. Dans les tabliers et les coulisses, la valeur </span><span class="f_Variables">Centre</span><span class="f_Textestd"> peut aussi &#234;tre utilis&#233;e.</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="font-weight: bold;">Dx</span><span class="f_Textestd">  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;D&#233;placement de la coupe dans le sens de l&#8217;&#233;paisseur du ch&#226;ssis.</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="font-weight: bold;">Dy</span><span class="f_Textestd">  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;D&#233;placement de la coupe vers le centre du ch&#226;ssis.</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="font-weight: bold;">Rotation</span><span class="f_Textestd">  &nbsp; &nbsp; &nbsp;Permet une rotation de la coupe. Le point 0 est &#224; droite du cercle; la rotation se fait en sens inverse des aiguilles d&#8217;une montre (cercle trigonom&#233;trique).</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="font-weight: bold;">MirroirVertical</span><span class="f_Textestd">  &nbsp; &nbsp; &nbsp;Ce param&#232;tre peut prendre les valeur </span><span class="f_Variables">0</span><span class="f_Textestd"> ou </span><span class="f_Variables">1</span><span class="f_Textestd">. S&#8217;il est &#224; </span><span class="f_Variables">1</span><span class="f_Textestd">, la coupe sera retourn&#233;e selon un axe vertical passant par le point 0 de la coupe.</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="font-weight: bold;">MirroirHorizontal</span><span class="f_Textestd">  &nbsp; &nbsp; &nbsp;Ce param&#232;tre peut prendre les valeur </span><span class="f_Variables">0</span><span class="f_Textestd"> ou </span><span class="f_Variables">1</span><span class="f_Textestd">. S&#8217;il est &#224; </span><span class="f_Variables">1</span><span class="f_Textestd">, la coupe sera retourn&#233;e selon un axe horizontal passant par le point 0 de la coupe.</span></p>
<p class="p_Textestd"><span class="f_Textestd">N.B. </span><span class="f_Textestd">Seuls les 2 premiers param&#232;tres sont obligatoires dans tous les cas. Les autres ne doivent pas n&#233;cessairement &#234;tre sp&#233;cifi&#233;s, sauf s&#8217;ils pr&#233;c&#232;dent un param&#232;tre que vous voulez sp&#233;cifier. La valeur par d&#233;faut est de 0 pour tous les param&#232;tres optionnels.</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="text-decoration: underline;">Exemple:</span></p>
<p class="p_Textestd"><span class="f_Variables">  &nbsp; # coupe du renfort de dormant, d&#233;cal&#233;e de 12 mm</span></p>
<p class="p_Textestd"><span class="f_Variables">  &nbsp; # transversalement &nbsp;et 16 mm longitudinalement</span></p>
<p class="p_Textestd"><span class="f_Variables">  &nbsp; VueCoupe (RENF DORMANT, Bord, 12, 16)</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Corrections:</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Les ouvrants situ&#233;s au dessus d&#8217;une partie vide, avec un dormant sur la partie vide, &#233;taient calcul&#233;s trop hauts. Ce point est corrig&#233;.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Correction dans le module devis d&#8217;une discordance entre le prix affich&#233; dans la page prix et le prix sur papier, en cas d&#8217;utilisation d&#8217;un panneau fabriqu&#233;.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">N&#176; de semaine :</span><span class="f_Textestd"> le mode de calcul du num&#233;ro de semaine a &#233;t&#233; modifi&#233;. Pr&#233;c&#233;demment, la premi&#232;re semaine de l&#8217;ann&#233;e correspondait &#224; la semaine comprenant le 1</span><span class="f_Textestd">er</span><span class="f_Textestd"> janvier. Maintenant, la 1</span><span class="f_Textestd">&#232;re</span><span class="f_Textestd"> semaine est celle contenant le 1</span><span class="f_Textestd">er</span><span class="f_Textestd"> janvier, sauf si le premier janvier tombe un vendredi, samedi ou dimanche. Dans ce cas, la 1</span><span class="f_Textestd">&#232;re</span><span class="f_Textestd"> semaine commence le lundi suivant le 1</span><span class="f_Textestd">er</span><span class="f_Textestd"> janvier.</span></td></tr></table></div><p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.6.02</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">27/10/1999</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Stock n&#233;gatif:</span><span class="f_Textestd"> au moment de l&#8217;optimisation (ou de la mise en production), vous avez maintenant l&#8217;option d&#8217;imprimer la liste des articles utilis&#233;s, et se trouvant en stock n&#233;gatif.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Coupes DXF:</span><span class="f_Textestd"> Sur la page Dessin de la fen&#234;tre Commande client, vous pouvez s&#233;lectionner une ou plusieurs coupes horizontales et / ou verticales.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Ces coupes sont d&#233;finies au moyen de deux r&#232;gles (gradu&#233;es par 100 mm), l&#8217;une verticale &#224; gauche, l&#8217;autre horizontale en haut.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Cliquez simplement avec le bouton gauche de la souris sur la barre appropri&#233;e, &#224; l&#8217;endroit o&#249; vous d&#233;sirez effectuer la coupe.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous pouvez annuler une coupe en cliquant avec le bouton droit de la souris sur le curseur correspondant &#224; la coupe.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous pouvez aussi d&#233;placer une coupe en cliquant avec le bouton gauche, et en maintenant le bouton enfonc&#233;, puis en d&#233;pla&#231;ant la souris dans la direction souhait&#233;e.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Remarque : le programme refuse d&#8217;effectuer 2 coupes trop pr&#232;s l&#8217;une de l&#8217;autre.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.6.01</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">20/10/1999</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">&#201;tiquettes d&#8217;optimisation:</span><span class="f_Textestd"> Impression, sur les &#233;tiquettes d&#8217;optimisation &#8216;Prendre&#8217; et &#8216;Stocker&#8217; ou &#8216;Chute&#8217;, du dessin du profil, en fonction du code DXF contenu dans la fiche article correspondant au profil.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Pr&#233;paration de stock, plans d&#8217;atelier, liste de pr&#233;paration des barres:</span><span class="f_Textestd"> pour chaque ligne d&#8217;article, si l&#8217;article est li&#233; &#224; un dessin DXF, et si l&#8217;option &#8216;</span><span class="f_Textestd">Imprimer sur les plans d&#8217;atelier</span><span class="f_Textestd">&#8217; est coch&#233;e dans la page DXF de l&#8217;article, le dessin de l&#8217;article est imprim&#233; juste devant sa description.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Documents clients:</span><span class="f_Textestd"> Comme ci-dessus, les articles indiqu&#233;s individuellement sont le cas &#233;ch&#233;ant accompagn&#233;s d&#8217;un dessin DXF si celui-ci est indiqu&#233; au niveau de l&#8217;article et si la case &#8216;</span><span class="f_Textestd">Imprimer sur les documents</span><span class="f_Textestd">&#8217; est coch&#233;e.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Dialogues d&#8217;ouverture et d&#8217;enregistrement de fichiers:</span><span class="f_Textestd"> Ces dialogues utilisent maintenant une interface de type &#8216;Explorer&#8217;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Texture des parties manquantes des ch&#226;ssis:</span><span class="f_Textestd"> Elles sont dor&#233;navant imprim&#233;es et affich&#233;es &#224; &#233;chelle constante (ind&#233;pendamment de la r&#233;solution de l&#8217;imprimante ou de l&#8217;&#233;cran, et de l&#8217;&#233;chelle du dessin).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Modification de la num&#233;rotation automatique des ch&#226;ssis:</span><span class="f_Textestd"> WinPro attribue d&#233;sormais le premier num&#233;ro libre &#224; chaque nouveau ch&#226;ssis, en commen&#231;ant par 1. Par exemple, si la commande comporte d&#233;j&#224; des ch&#226;ssis num&#233;rot&#233;s </span><span class="f_Textestd">1, 2, 5</span><span class="f_Textestd">, le prochain ch&#226;ssis se verra attribuer le num&#233;ro </span><span class="f_Textestd">3</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Ceci est surtout int&#233;ressant pour les ensembles de ch&#226;ssis. Si par exemple vous avez un ensemble num&#233;rot&#233; </span><span class="f_Textestd">1</span><span class="f_Textestd">, le programme vous cr&#233;e plusieurs ch&#226;ssis appartenant &#224; cet ensemble, num&#233;rot&#233;s </span><span class="f_Textestd">1/1, 1/2, &#8230;, 1/n</span><span class="f_Textestd">. Maintenant, si vous ajoutez un ch&#226;ssis &#224; la suite de cet ensemble, il sera num&#233;rot&#233; </span><span class="f_Textestd">2</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Croisillons:</span><span class="f_Textestd"> Possibilit&#233; de d&#233;finir des profils utilis&#233;s &#8216;une fois&#8217;, comme pour les articles et la main d&#8217;&#339;uvre. Attention!! Dans ce cas, les variables </span><span class="f_Variables">Dimension</span><span class="f_Textestd">, </span><span class="f_Variables">Bout1</span><span class="f_Textestd">, </span><span class="f_Variables">Bout2</span><span class="f_Textestd"> sont initialis&#233;es &#224; z&#233;ro!</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Corrections:</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Probl&#232;me de relecture des ch&#226;ssis en &#339;il de b&#339;uf : les ouvrants n&#8217;&#233;taient plus pris en compte!</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Ensembles de ch&#226;ssis : pr&#233;sentation des coupleurs n&#8217;appartenant &#224; aucun syst&#232;me.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Correction d&#8217;un probl&#232;me de verrouillage de l&#8217;encodage des nouveaux ch&#226;ssis si le premier ch&#226;ssis de la commande est un ensemble.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">V&#233;rification que la couleur d&#8217;un panneau fabriqu&#233; est autoris&#233;e.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Correction de la v&#233;rification de la hauteur maximum des volets roulants.</span></td></tr></table></div><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.6.00</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">12/10/1999</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">La version 1.6 introduit la notion de fichiers DXF (= fichiers AutoCad)-&#224; diverses fin, dont les coupes de ch&#226;ssis. Dans la version 1.6.0, seul la d&#233;finition des dessins DXF et leur liaison avec la fiche article est disponible. Suivront l&#8217;impression des dessins sur &#233;tiquettes d&#8217;optimisation, plans d&#8217;atelier et documents clients, puis les coupes de ch&#226;ssis (qui seront disponibles en tant que module optionnel).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Fichier DXF:</span><span class="f_Textestd"> dans le menu &#8216;</span><span class="f_Textestd">Technique&#8217;</span><span class="f_Textestd">, il y a un nouveau point &#8216;</span><span class="f_Textestd">Dessins DXF</span><span class="f_Textestd">&#8217;, qui vous permet de manipuler et codifier les dessins DXF de toute provenance. Les dessins eux-m&#234;mes seront stock&#233;s par WinPro dans la base de donn&#233;es; il n&#8217;est donc pas indispensable de maintenir sur toutes les machines une copie de ces fichier. De m&#234;me, les dessins DXF seront automatiquement transf&#233;r&#233;s vers le module devis, puisque les dessins font partie de la base de donn&#233;es.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Divers contr&#244;les dans le dialogue DXF vous permettent de manipuler le dessin original. Ces contr&#244;les ont pour objectif de vous permettre de normaliser la repr&#233;sentation de dessins de provenances diverses. Notez que la normalisation est laiss&#233;e &#224; votre appr&#233;ciation. WinPro ne vous impose rien sur ce point.</span></p>
<p class="p_Textestd"><span class="f_Textestd">La premi&#232;re &#233;tape dans l&#8217;utilisation des fichiers DXF consiste donc &#224; int&#233;grer ces dessins &#224; la base de donn&#233;es, et &#224; les normaliser.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Fichier article:</span><span class="f_Textestd"> Le fichier article fait r&#233;f&#233;rence aux dessins DXF d&#233;finis ci-dessus. Ces dessins seront utilis&#233;s principalement sur les &#233;tiquettes d&#8217;optimisation, mais aussi sur d&#8217;autres documents (voir 1&#176; paragraphe).</span></p>

</td></tr></table>
</div>

</body>
</html>
