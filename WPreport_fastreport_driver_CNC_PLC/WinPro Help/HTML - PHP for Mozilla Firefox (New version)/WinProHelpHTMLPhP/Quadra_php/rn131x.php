<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["1.3.1x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn131x.php"; }
else { parent.quicksync('a11.29.2'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>1.3.1x</title>
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
     <a href="rn132x.php">Previous</a>&nbsp;
     <a href="rn130x.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.3.19</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">16/7/98</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Mise en page des bons de commande fournisseur:</span><span class="f_Textestd"> le num&#233;ro de commande est maintenant indiqu&#233; sous l&#8217;adresse du fournisseur, afin d&#8217;&#233;viter qu&#8217;il soit tronqu&#233; par le passage au fax.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">S&#233;lection des couleurs pour l&#8217;optimisation:</span><span class="f_Textestd"> la s&#233;lection se fait maintenant pour chaque ch&#226;ssis individuellement; pr&#233;c&#233;demment, seul le premier ch&#226;ssis de la commande &#233;tait pris en compte; si ce 1er ch&#226;ssis &#233;tait de la couleur demand&#233;e, toute la commande &#233;tait optimis&#233;e.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Stock de chutes:</span><span class="f_Textestd"> au lieu de m&#233;moriser la couleur de la chute, WinPro m&#233;morise maintenant le code de l&#8217;article correspondant. Ceci permet de mieux g&#233;rer les chutes de profils dont la couleur r&#233;elle correspond &#224; plusieurs couleurs de ch&#226;ssis (p.ex. profils brun lisse utilis&#233;s avec plusieurs teintes structur&#233;es). La proc&#233;dure de mise &#224; jour du programme transforme automatiquement les codes couleurs en code article dans la liste des chutes.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Consolidation du stock de chutes:</span><span class="f_Textestd"> avant optimisation, les chutes de m&#234;me longueur et de m&#234;me couleur sont regroup&#233;es.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Corrections</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Dessin des croisillons sur la liste des ch&#226;ssis d&#8217;un lot d&#8217;optimisation.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Correction mise en page liste vitrages</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Correction mise en page liste profils</span></td></tr></table></div><p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Ajout repr&#233;sentant, zone livraison, conditions de paiement &#224; l&#8217;impression de la liste des clients.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Recherche d&#8217;une commande sur base du code client:</span><span class="f_Textestd"> les commandes sont pr&#233;sent&#233;es dans l&#8217;ordre inverse de leur enregistrement (c&#8217;est &#224; dire les plus r&#233;centes d&#8217;abord).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Transformation du message</span><span class="f_Textestd"> &#8216;Ch&#226;ssis non r&#233;alisable&#8217; en &#8216;Volet non r&#233;alisable&#8217; lorsqu&#8217;il s&#8217;agit d&#8217;un volet seul.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Valorisation des articles d&#8217;un ch&#226;ssis sur les documents client:</span><span class="f_Textestd"> le prix de vente n&#233;goce (plus le forfait &#233;ventuel) est utilis&#233; &#224; la place du prix de revient augment&#233; de la marge. Si le prix de vente n&#233;goce est inconnu, c&#8217;est toujours l&#8217;ancienne m&#233;thode qui sera utilis&#233;e (PR + marge).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Indication des angles</span><span class="f_Textestd"> de coupe sur le bordereau de d&#233;coupe.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Stock de chute:</span><span class="f_Textestd"> WinPro peut maintenant g&#233;rer un num&#233;ro de casier pour les chutes de coupe de profils.</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="text-decoration: underline;">Fonctionnement:</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Liste des casiers. La liste des casiers doit &#234;tre pr&#233;cis&#233;e au programme. Chaque casier est repr&#233;sent&#233; par un code alphanum&#233;rique sur 5 caract&#232;res, une cat&#233;gorie (type de profil pouvant y &#234;tre stock&#233;), une capacit&#233; (nombre maximum de profils pouvant y &#234;tre stock&#233;s). L&#8217;encodage de cette liste se fait par le point de menu &#171; Donn&#233;es | Casiers de chutes &#187;.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Cat&#233;gorie de profil. Cette cat&#233;gorie permet de stocker les profils dans diff&#233;rents types de casiers. Par exemple, les profils de dormant et ouvrant seront de cat&#233;gorie 1, les profils d&#8217;ouvrant de porte et les traverses larges seront de cat&#233;gorie 2, les mauclairs de cat&#233;gorie 3; on donnera aussi, le cas &#233;ch&#233;ant, des cat&#233;gories diff&#233;rentes pour les profils PVC et aluminium. La cat&#233;gorie est repr&#233;sent&#233;e par un nombre de 1 &#224; 999. On attribue une cat&#233;gorie &#224; un profil au bas de l&#8217;onglet Optimisation de la fen&#234;tre Profil.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Stock de chutes. Chaque chute d&#8217;un profil poss&#233;dant une cat&#233;gorie sera attribu&#233;e &#224; un casier. La r&#233;partition peut &#234;tre r&#233;organis&#233;e manuellement dans l&#8217;onglet Optimisation de la fen&#234;tre Profil.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Optimisation. A l&#8217;optimisation, WinPro indiquera sur les &#233;tiquettes dans quel casier il faut prendre une chute, et dans quel casier il faut la stocker.</span></td></tr></table></div><p class="p_Textestd"><span class="f_Textestd">N.B. Cette gestion des casiers n&#8217;est utilis&#233;e par WinPro que pour les profils avec stock de chutes.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.3.18</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">11/7/98</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Droit d&#8217;acc&#232;s sp&#233;cifique</span><span class="f_Textestd"> </span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">pour la modification des &#233;tats de commandes et de ch&#226;ssis.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">pour les champs de prix net et tarif dans l&#8217;encodage des commandes.</span></td></tr></table></div><p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">S&#233;lection d&#8217;une fonte et d&#8217;une taille</span><span class="f_Textestd"> de caract&#232;re sp&#233;cifique pour les textes des documents.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Devis simplifi&#233;s sans cotes</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Textes des documents:</span><span class="f_Textestd"> le texte choisi est dor&#233;navant ins&#233;r&#233; &#224; la position du curseur. Si tout ou partie de l&#8217;ancien texte est s&#233;lectionn&#233;, la s&#233;lection est remplac&#233;e par le nouveau texte. Ceci permet de stocker des morceaux de textes pr&#233;d&#233;finis, que l&#8217;on peut &#8216;assembler&#8217; au moment de leur utilisation.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.3.17</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">9/7/98</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Ajout d&#8217;une colonne &#8216;Couleur RAL&#8217;</span><span class="f_Textestd"> dans l&#8217;encodage des profils d&#8217;une commande (profils fournis s&#233;par&#233;ment). Cette colonne est prise en compte au moment de la constitution des propositions de commande.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Fonction de recherche dans le param&#233;trage:</span><span class="f_Textestd"> Cette fonction permet de trouver tout mot ou morceau de mot se trouvant dans les formules.</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="text-decoration: underline;">Caract&#233;ristiques:</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Restriction possible &#224; un seul syst&#232;me (pour les dormants, ouvrants, traverses, rehausses, quincailleries).</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">S&#233;lection de l&#8217;&#233;tendue de la recherche (choix entre dormant, ouvrant, traverse, etc, et entre profils, pi&#232;ces, main d&#8217;&#339;uvre, etc).</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Possibilit&#233; d&#8217;indiquer 2 crit&#232;res avec un op&#233;rateur bool&#233;en (et, ou, et pas). Les 2 crit&#232;res sont consid&#233;r&#233;s pour chaque ligne d&#8217;instruction.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Restriction du type d&#8217;instructions (formule, commentaire, &#233;chec, message, usinage).</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Affichage de la liste des lignes trouv&#233;es.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Acc&#232;s direct &#224; la page et la ligne trouv&#233;e (double clic sur la ligne choisie, ou clic sur bouton Ouvrir).</span></td></tr></table></div><p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Possibilit&#233; de r&#233;partir les chutes RAL</span><span class="f_Textestd"> sur le p&#233;rim&#232;tre des ch&#226;ssis en teinte RAL (&#224; l&#8217;impression uniquement!).</span></p>
<p class="p_Textestd"><span class="f_Textestd">Attention! Lorsque les chutes RAL sont r&#233;parties, elles sont pr&#233;alablement major&#233;es de mani&#232;re &#224; tenir compte de la ristourne octroy&#233;e au client.</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="text-decoration: underline;">Exemple:</span></p>
<p class="p_Textestd"><span class="f_Textestd">Remise sur la commande &nbsp; &nbsp; &nbsp; &nbsp;30%</span></p>
<p class="p_Textestd"><span class="f_Textestd">1 ch&#226;ssis RAL de 6m de p&#233;rim&#232;tre; valeur hors chutes &nbsp; &nbsp; &nbsp; &nbsp;20.000</span></p>
<p class="p_Textestd"><span class="f_Textestd">1 ch&#226;ssis RAL de 4m de p&#233;rim&#232;tre; valeur hors chutes &nbsp; &nbsp; &nbsp; &nbsp;10.000</span></p>
<p class="p_Textestd"><span class="f_Textestd">Total brut &nbsp; &nbsp; &nbsp; &nbsp;20.000 + 10.000 = 30.000</span></p>
<p class="p_Textestd"><span class="f_Textestd">Remise &nbsp; &nbsp; &nbsp; &nbsp;30.000 x 30% = - 9.000</span></p>
<p class="p_Textestd"><span class="f_Textestd">Chutes RAL &nbsp; &nbsp; &nbsp; &nbsp;+ 3.000</span></p>
<p class="p_Textestd"><span class="f_Textestd">Total net &nbsp; &nbsp; &nbsp; &nbsp;30.000 &#8211; 9.000 + 3.000 = 24.000</span></p>
<p class="p_Textestd"><span class="f_Textestd">Avec r&#233;partition du RAL :</span></p>
<p class="p_Textestd"><span class="f_Textestd">P&#233;rim&#232;tre total &nbsp; &nbsp; &nbsp; &nbsp;10 m</span></p>
<p class="p_Textestd"><span class="f_Textestd">Chutes RAL &nbsp; &nbsp; &nbsp; &nbsp;3.000</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Remise sur la commande &nbsp; &nbsp; &nbsp; &nbsp;30%</span></p>
<p class="p_Textestd"><span class="f_Textestd">1 ch&#226;ssis RAL de 6m de p&#233;rim&#232;tre &nbsp; &nbsp; &nbsp; &nbsp;20.000</span></p>
<p class="p_Textestd"><span class="f_Textestd">  &nbsp; &nbsp;Chutes RAL &nbsp; &nbsp; &nbsp; &nbsp;3.000 &#247; 10m x 6m = 1.800</span></p>
<p class="p_Textestd"><span class="f_Textestd">  &nbsp; &nbsp;Majoration des chutes avant remise &nbsp; &nbsp; &nbsp; &nbsp;1.800 &#247; 70% = 2.571</span></p>
<p class="p_Textestd"><span class="f_Textestd">  &nbsp; &nbsp;Total ch&#226;ssis &nbsp; &nbsp; &nbsp; &nbsp;22.571</span></p>
<p class="p_Textestd"><span class="f_Textestd">1 ch&#226;ssis RAL de 4m de p&#233;rim&#232;tre &nbsp; &nbsp; &nbsp; &nbsp;10.000</span></p>
<p class="p_Textestd"><span class="f_Textestd">  &nbsp; &nbsp;Chutes RAL &nbsp; &nbsp; &nbsp; &nbsp;3.000 &#247; 10m x 4m = 1.200</span></p>
<p class="p_Textestd"><span class="f_Textestd">  &nbsp; &nbsp;Majoration des chutes avant remise &nbsp; &nbsp; &nbsp; &nbsp;1.200 &#247; 70% = 1.714</span></p>
<p class="p_Textestd"><span class="f_Textestd">  &nbsp; &nbsp;Total ch&#226;ssis &nbsp; &nbsp; &nbsp; &nbsp;11.714</span></p>
<p class="p_Textestd"><span class="f_Textestd">Total brut &nbsp; &nbsp; &nbsp; &nbsp;22.571 + 11.714 = 34.285</span></p>
<p class="p_Textestd"><span class="f_Textestd">Remise 30% &nbsp; &nbsp; &nbsp; &nbsp;34.285 x 30% = - 10.285</span></p>
<p class="p_Textestd"><span class="f_Textestd">Total net &nbsp; &nbsp; &nbsp; &nbsp;34.285 &#8211; 10.285 = 24.000</span></p>
<p class="p_Textestd"><span class="f_Textestd">NB 1. Le m&#234;me mode de calcul &#233;tait d&#233;j&#224; appliqu&#233; dans le module devis; toutefois, dans le module devis, ce mode de calcul est appliqu&#233; d&#8217;office; dans le module fabrication, on peut toujours choisir entre r&#233;partition et total s&#233;par&#233; des chutes RAL.</span></p>
<p class="p_Textestd"><span class="f_Textestd">NB 2. Les chutes RAL ne sont r&#233;parties que sur les ch&#226;ssis en teinte RAL. S&#8217;il y a dans la m&#234;me commande des ch&#226;ssis RAL et des ch&#226;ssis en teinte non RAL, ces derniers ne seront pas major&#233;s; les chutes seront r&#233;parties sur les autres ch&#226;ssis.</span></p>
<p class="p_Textestd"><span class="f_Textestd">NB 3. Les totaux &#233;crans sont toujours hors chutes! Le total des chutes RAL est affich&#233; explicitement sur la page prix; les prix des ch&#226;ssis affich&#233;s dans la page Information est toujours le prix du ch&#226;ssis sans chutes RAL.</span></p>
<p class="p_Textestd"><span class="f_Textestd">NB4. Les chutes sur les profils RAL vendus s&#233;par&#233;ment (page profil) sont &#233;galement r&#233;parties sur les ch&#226;ssis en teinte RAL. S&#8217;il n&#8217;y a aucun ch&#226;ssis dans la commande, le total des chutes RAL est d&#8217;office indiqu&#233; explicitement.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.3.16</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">3/7/98</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Ajout d&#8217;une variable</span><span class="f_Textestd"> </span><span class="f_Variables">SansVitrage</span><span class="f_Textestd"> dans le param&#233;trage des a&#233;rateurs. Cette variable est &#224; 0 lorsque l&#8217;a&#233;rateur est utilis&#233; avec un vitrage; elle est &#224; 1 lorsqu&#8217;il n&#8217;y a pas de vitrage mais que l&#8217;a&#233;rateur est directement &#224; c&#244;t&#233; d&#8217;une traverse.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">D&#233;tection de l&#8217;absence de vitrage</span><span class="f_Textestd"> &#233;ventuelle &#224; c&#244;t&#233; d&#8217;un a&#233;rateur, et s&#8217;il n&#8217;y a pas de vitrage, suppression de l&#8217;&#233;chec sur l&#8217;&#233;paisseur du vitrage avec cet a&#233;rateur.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Correction absence de dessin</span><span class="f_Textestd"> panneau fabriqu&#233; dans les ch&#226;ssis fixes.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Possibilit&#233; d&#8217;agir sur les angles de coupe des profils p&#233;riph&#233;riques</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Modification des textes des documents:</span><span class="f_Textestd"> au lieu de choisir un num&#233;ro, les textes apparaissent en toutes lettres.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Possibilit&#233; de choisir une ic&#244;ne pour accompagner le texte</span><span class="f_Textestd"> de fin des documents. Les choix possibles sont : rien, exclamation, information, interrogation, erreur.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.3.15</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">1/7/98</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Correction du comportement de la fonction</span><span class="f_Textestd"> </span><span class="f_Variables">RemplacerPar</span><span class="f_Textestd"> au niveau du dormant : tous les segments sont remplac&#233;s, si l&#8217;utilisateur a accept&#233; le remplacement.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">D&#233;tection d&#8217;&#233;checs &#233;ventuels dans les croisillons incorpor&#233;s.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Correction module de test quincailleries:</span><span class="f_Textestd"> l&#8217;&#233;paisseur du dormant n&#8217;&#233;tait pas prise en compte; c&#8217;est maintenant corrig&#233;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Ajout d&#8217;une variable</span><span class="f_Textestd"> </span><span class="f_Variables">Perimetre</span><span class="f_Textestd"> dans le calcul des dormants.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p><span style="font-size: 14pt; font-weight: bold; color: #ffffff;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.3.14</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">29/6/98</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Affichage</span><span class="f_Textestd">, dans l&#8217;onglet Prix de la fen&#234;tre Commande, du total des chutes RAL.</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="text-decoration: underline;">Remarque:</span><span class="f_Textestd"> Tant que la commande n&#8217;a pas &#233;t&#233; confirm&#233;e, le programme refera le calcul des chutes &#224; chaque affichage de l&#8217;onglet Prix. D&#232;s que la commande est confirm&#233;e, le programme affiche simplement le montant des chutes RAL tels que sur la confirmation. Le montant est exprim&#233; en devises (le code devise est rappel&#233; &#224; c&#244;t&#233;), arrondi au nombre de d&#233;cimales propre &#224; la devise. Le montant des chutes RAL est &#224; ajouter au total net de la commande (ceci est pr&#233;cis&#233; &#224; l&#8217;&#233;cran).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Choix du nombre d&#8217;&#233;tiquettes &#224; imprimer</span><span class="f_Textestd"> &#224; la r&#233;ception des articles tra&#231;ables (&#224; indiquer dans la fiche article).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Message &#233;cran dans les commandes fournisseur</span><span class="f_Textestd"> si le montant franco n&#8217;est pas atteint. Ce message appara&#238;t au moment de l&#8217;enregistrement de la commande. Il indique le montant franco &#224; atteindre, ainsi que les frais de port.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.3.13</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">26/6/98</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Ajout de questions de param&#233;trage</span><span class="f_Textestd"> pour les rehausses, seuils et autres profils p&#233;riph&#233;riques. Attention ! Les questions ne sont pas accessibles pour les seuils encod&#233;s en ent&#234;te du ch&#226;ssis.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Possibilit&#233; d&#8217;encoder des panneaux fabriqu&#233;s</span><span class="f_Textestd"> au niveau du ch&#226;ssis et de l&#8217;ouvrant.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Correction d&#8217;un bug portant sur les ouvrants d&#233;centr&#233;s avec plus de 2 vantaux:</span><span class="f_Textestd"> les largeurs de vantail sp&#233;cifi&#233;es &#224; partir du 2&#176; vantail et jusqu&#8217;&#224; l&#8217;avant-dernier vantail n&#8217;&#233;taient pas respect&#233;es exactement, mais d&#233;cal&#233;es en fonction des recouvrements des vantaux entre eux. Ce probl&#232;me est corrig&#233;. Veuillez donc v&#233;rifier s&#8217;il y a en cours de fabrications de tels ch&#226;ssis (typiquement, des coulissants &#224; 4 ou 6 vantaux, avec vantaux centraux plus petits que les vantaux ext&#233;rieurs), et corrigez-en l&#8217;encodage afin que les mesures de fabrication correspondent aux mesures des vitrages &#233;ventuellement command&#233;s.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Le total de la commande &#224; l&#8217;&#233;cran</span><span class="f_Textestd"> (onglet prix) prend en compte les prix impos&#233;s par ch&#226;ssis, ainsi que les suppl&#233;ments forfaitaires et prix de vitrages impos&#233;s.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Autorisations sp&#233;cifiques pour l&#8217;acc&#232;s au param&#233;trage</span><span class="f_Textestd"> des vitrages, panneaux, param&#232;tres de livraison (&#233;quipe et zone de livraison).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Correction dans la fa&#231;on d&#8217;arrondir</span><span class="f_Textestd"> les ch&#226;ssis avec volet monobloc compris dans la hauteur.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Prise en compte des chutes RAL</span><span class="f_Textestd"> pour les profils vendus en &#8216;n&#233;goce&#8217;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.3.12</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">23/6/98</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Possibilit&#233; de choisir une table de parclose diff&#233;rente pour chaque vitrage.</span><span class="f_Textestd"> Pour cela, cliquer avec le bouton droit de la souris sur le vitrage (ou le panneau) voulu, choisir l&#8217;option &#8216;Changer de vitrage&#8217;, et indiquer la table de parclose souhait&#233;e.</span></p>
<p class="p_Textestd"><span class="f_Textestd">La table choisie appara&#238;tra sur les documents client et atelier au niveau de la description de l&#8217;ouvrant.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Sur les &#233;tiquettes d&#8217;optimisation, jusqu&#8217;&#224; deux parcloses (et les joints correspondants) seront mentionn&#233;es sur chaque &#233;tiquette d&#8217;un vantail comportant 2 types de parcloses.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Encodage d&#8217;un suppl&#233;ment en %</span><span class="f_Textestd"> ou forfaitaire pour une commande, ainsi que d&#8217;un texte explicatif pour ce suppl&#233;ment. Ce suppl&#233;ment sera appliqu&#233; apr&#232;s calcul de la remise.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.3.11</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">18/6/98</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Prise en compte des cat&#233;gories de rehausse</span><span class="f_Textestd"> pour conversion des codes rehausse au moment d&#8217;un changement de syst&#232;me (&#224; l&#8217;encodage et &#224; la cr&#233;ation d&#8217;une variante).</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="text-decoration: underline;">R&#232;gles de remplacement:</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Si la rehausse a une cat&#233;gorie de 0 ou n&#8217;appartient &#224; aucun syst&#232;me, elle reste inchang&#233;e.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Si la rehausse a une cat&#233;gorie diff&#233;rente de 0 et un syst&#232;me, mais qu&#8217;il n&#8217;existe pas de rehausse de m&#234;me cat&#233;gorie dans le nouveau syst&#232;me, elle est effac&#233;e (sans avertissement)</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Si la rehausse a une cat&#233;gorie diff&#233;rente de 0 et un syst&#232;me, et qu&#8217;il existe une rehausse de m&#234;me cat&#233;gorie dans le nouveau syst&#232;me, ou &#224; d&#233;faut une rehausse de m&#234;me cat&#233;gorie n&#8217;appartenant &#224; aucun syst&#232;me, elle est remplac&#233;e.</span></td></tr></table></div><p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Suppression de l&#8217;impression intempestive du logo</span><span class="f_Textestd"> sur la premi&#232;re page imprim&#233;e des documents clients lors d&#8217;une impression partielle commen&#231;ant apr&#232;s la page 1.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">&#201;largissement de l&#8217;affichage</span><span class="f_Textestd"> de la description des croisillons dans l&#8217;encodage des croisillons d&#8217;une fen&#234;tre.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Impression d&#8217;une ligne</span><span class="f_Textestd"> de s&#233;paration entre les articles du rappel fournisseur.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Prise en compte des questions dormant</span><span class="f_Textestd"> au niveau des formules d&#8217;a&#233;rateur</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.3.10</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">15/6/98</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Placement des rehausses</span><span class="f_Textestd"> (d&#233;duites ou non) sur n&#8217;importe quel c&#244;t&#233; de n&#8217;importe quelle forme de dormant. Deux types de position ont &#233;t&#233; ajout&#233;s au niveau des rehausses : haut gauche et haut droite.</span></p>
<p class="p_Textestd"><span class="f_Textestd">NB. Le programme v&#233;rifie si la position demand&#233;e pour la rehausse existe bien pour la forme du ch&#226;ssis. Dans le cas contraire, le programme refuse de valider l&#8217;encodage des rehausses.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Cotations:</span><span class="f_Textestd"> Si la place est insuffisante pour indiquer la cote d&#8217;un &#233;l&#233;ment, la taille de caract&#232;re est r&#233;duite, afin d&#8217;&#233;viter les chevauchements des chiffres entre 2 cotes.</span></p>

</td></tr></table>
</div>

</body>
</html>
