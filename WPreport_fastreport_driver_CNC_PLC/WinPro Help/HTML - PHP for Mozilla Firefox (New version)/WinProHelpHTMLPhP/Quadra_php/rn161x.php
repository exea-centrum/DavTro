<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["1.6.1x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn161x.php"; }
else { parent.quicksync('a11.26.2'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>1.6.1x</title>
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
     <a href="rn162x.php">Previous</a>&nbsp;
     <a href="rn160x.php">Next</a>
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
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.6.19</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">8/3/1999</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Devis:</span><span class="f_Textestd"> WinPro peut maintenant exclure les devis de la gestion de production. Une case &#224; cocher permet de s&#233;parer les devis et les commandes. Cette case se trouve sur la page </span><span class="f_Textestd">Ent&#234;te</span><span class="f_Textestd"> de la fen&#234;tre </span><span class="f_Textestd">Commandes</span><span class="f_Textestd">, juste sous la case &#224; cocher</span><span class="f_Textestd"> Ne pas fournir les vitrages</span><span class="f_Textestd">. Seules les commandes n&#8217;ayant pas encore &#233;t&#233; trait&#233;es dans la gestion de production peuvent &#234;tre d&#233;finies comme devis. De plus, une commande cr&#233;&#233; par le bouton </span><span class="f_Textestd">Nouveau devis</span><span class="f_Textestd"> est automatiquement consid&#233;r&#233;e comme devis. Pour ramener un devis dans la gestion de production, il suffit de ne plus cocher la case </span><span class="f_Textestd">Devis</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Factures et notes d&#8217;envoi:</span><span class="f_Textestd"> Pour les installations qui ne disposent pas de la gestion de production, mais bien des documents client, l&#8217;impression des factures et notes d&#8217;envoi a &#233;t&#233; d&#233;plac&#233;e vers le sous-menu </span><span class="f_Textestd">Gestion de production</span><span class="f_Textestd"> du menu </span><span class="f_Textestd">Commandes</span><span class="f_Textestd">. L&#8217;avantage principal est de pouvoir imprimer plusieurs factures ou plusieurs notes d&#8217;envoi en une seule fois.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Comptage des vantaux au moment de l&#8217;optimisation</span><span class="f_Textestd">. La m&#233;thode de comptage a &#233;t&#233; nettement acc&#233;l&#233;r&#233;e. Attention, seules les commandes cr&#233;&#233;es ou modifi&#233;es apr&#232;s cette mise &#224; jour b&#233;n&#233;ficient de l&#8217;am&#233;lioration en vitesse.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Encours production:</span><span class="f_Textestd"> Les listes d&#8217;encours de production limit&#233;es par date ne reprennent plus que les commandes approuv&#233;es et non termin&#233;es. Ces listes ne sont utilisables qu&#8217;avec au minimum les modules optimisation et facturation, ou avec la gestion de production.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Clients:</span><span class="f_Textestd"> Une nouvelle case &#224; cocher dans la fiche signal&#233;tique du client permet de d&#233;cider s&#8217;il faut imprimer les dimensions des vitrages sur les confirmations de commande.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Articles:</span><span class="f_Textestd"> Une nouvelle zone, &#224; c&#244;t&#233; de la description fournisseur, peut contenir un identificateur sp&#233;cifique &#224; l&#8217;article chez le fournisseur. Cet identificateur &#224; pour but de faciliter les liaisons entre le fichier article de WinPro et les fichiers fournis par certains fournisseurs.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.6.18</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">5/3/1999</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Page Action:</span><span class="f_Textestd"> Cette page (qui permet l&#8217;impression de diff&#233;rents documents li&#233;s &#224; une commande client) &#224; &#233;t&#233; d&#233;plac&#233;e en 3</span><span class="f_Textestd">&#232;me</span><span class="f_Textestd"> onglet de la fen&#234;tre commande, pour rendre son acc&#232;s plus facile sur les &#233;crans de faible r&#233;solution (800x600).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Page composants:</span><span class="f_Textestd"> Dans le m&#234;me ordre d&#8217;id&#233;e, la page Composants, d&#8217;acc&#232;s moins fr&#233;quent, a &#233;t&#233; d&#233;plac&#233;e en avant-derni&#232;re position, juste avant la page R&#233;servations.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Page composants:</span><span class="f_Textestd"> Les utilisateurs ayant les droits d&#8217;acc&#232;s suffisants peuvent maintenant consulter le prix de revient (tarif et courant) pour chaque ligne de la page Composants. WinPro indique en plus un sous-total par type d&#8217;article (profil, pi&#232;ce, main d&#8217;&#339;uvre, vitrage, &#8230;) ainsi qu&#8217;un total g&#233;n&#233;ral des prix de revient.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Page Ctrl Prix:</span><span class="f_Textestd"> Cette page vous offre une synth&#232;se de la r&#233;partition des co&#251;ts de la commande, ch&#226;ssis par ch&#226;ssis et globalement. Vous la trouverez dans la fen&#234;tre commande, entre de la page Composants et la page R&#233;servations.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Correction:</span><span class="f_Textestd"> Depuis le d&#233;but, WinPro ne tenait pas compte des notions de visibilit&#233; int&#233;rieur/ext&#233;rieur pour les profils standards (non RAL) des dormants, ouvrants et traverses. Ce point est maintenant corrig&#233;. Il y a lieu d&#8217;&#234;tre vigilant au niveau de la d&#233;finition de la visibilit&#233; des profils concern&#233;s, notamment les rejets d&#8217;eau et les mauclairs. Si la visibilit&#233; a &#233;t&#233; correctement d&#233;finie, il n&#8217;y a pas de probl&#232;me. Dans le cas contraire, WinPro peut demander des couleurs de profils inappropri&#233;es (p.ex. les rejets d&#8217;eau en couleur int&#233;rieure).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.6.17</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">1/3/1999</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Fen&#234;tre principale:</span><span class="f_Textestd"> Le nom de la soci&#233;t&#233; utilisatrice appara&#238;t maintenant dans le titre de la fen&#234;tre principale.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Contr&#244;le du prix d&#8217;achat:</span><span class="f_Textestd"> WinPro calcule maintenant le prix d&#8217;achat au m&#178; par ch&#226;ssis, par type de composant de ch&#226;ssis, et pour toute la commande.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Devises:</span><span class="f_Textestd"> Augmentation du nombre de chiffres &#224; 15, dont 10 d&#233;cimales, pour le cours de la devise et la valeur de l&#8217;Euro.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Panneaux d&#233;coratifs, panneaux &#224; d&#233;couper, panneaux fabriqu&#233;s:</span><span class="f_Textestd"> vous pouvez maintenant les exclure du module devis.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Commandes:</span><span class="f_Textestd"> Augmentation du nombre de chiffres disponibles pour les prix totaux (15 chiffres dont 2 d&#233;cimales).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p style="text-align: center; margin: 0px 0px 0px 8px;">&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.6.15 &amp; 16</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">15/2/1999</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Optimisation:</span><span class="f_Textestd"> </span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Pendant l&#8217;optimisation, un num&#233;ro de s&#233;rie unique est g&#233;n&#233;r&#233; pour chaque ch&#226;ssis.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Le param&#233;trage de l&#8217;optimisation a &#233;t&#233; int&#233;gr&#233; dans le menu </span><span class="f_Textestd">Utilitaires | Pr&#233;f&#233;rences.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Dans la fen&#234;tre de lancement de l&#8217;optimisation, WinPro affiche maintenant le nombre de vantaux s&#233;lectionn&#233;s, en plus des temps de fabrication et du nombre total de ch&#226;ssis.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Vous pouvez limiter le nombre de pi&#232;ces et le nombre de vantaux s&#233;lectionnables dans un m&#234;me lot d&#8217;optimisation. Ce param&#233;trage se fait par la page </span><span class="f_Textestd">Optimisation</span><span class="f_Textestd"> du menu </span><span class="f_Textestd">Utilitaires | Pr&#233;f&#233;rences</span><span class="f_Textestd">.</span></td></tr></table></div><p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">P&#233;rim&#232;tres:</span><span class="f_Textestd"> Ajout d&#8217;une possibilit&#233; de traduction.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Faux cintrages:</span><span class="f_Textestd"> Affichage de la description &#224; l&#8217;&#233;cran dans la langue de l&#8217;utilisateur.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Articles:</span><span class="f_Textestd"> une case &#224; cocher permet d&#8217;interdire la visibilit&#233; de l&#8217;article dans les pages articles et profils des commandes du module Devis (WinPro/D).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.6.14</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">1/2/1999</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Euro:</span><span class="f_Textestd"> Le fichier devise contient un nouveau champ. Vous y indiquerez, pour chaque devise, quel est son taux de conversion en euro. P. ex, pour le franc belge, indiquez 40.3399; pour le franc fran&#231;ais, 6.55957; pour le mark, 1.95583. Vous devez bien s&#251;r, afin de respecter la l&#233;gislation, indiquer le cours officiel pour les devises de la zone euro.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Ce taux est utilis&#233; lors de l&#8217;impression d&#8217;un document client; si le taux est indiqu&#233;, la contrepartie de la valeur finale sera indiqu&#233;e dans la devise du client et en euro (avec d&#8217;office 2 d&#233;cimales pour l&#8217;euro).</span></p>
<p class="p_Textestd"><span class="f_Textestd">Si donc vous ne souhaitez pas voir de contrepartie en euro pour une devise, il vous suffit de ne pas encoder la valeur de l&#8217;euro.</span></p>
<p class="p_Textestd"><span class="f_Textestd">De m&#234;me, si vous avez d&#233;j&#224; ajout&#233; l&#8217;euro &#224; votre fichier devise, n&#8217;y indiquez rien dans la valeur de l&#8217;euro. C&#8217;est en effet dans ce cas inutile (le taux de conversion serait bien entendu de 1, et le programme indiquerait deux totaux identiques!).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Prise de mesure:</span><span class="f_Textestd"> Vous pouvez maintenant imprimer un document de prise de mesure. Ce document est accessible via la page </span><span class="f_Textestd">Action</span><span class="f_Textestd"> de la fen&#234;tre d&#8217;encodage des commandes.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">R&#233;capitulatif des ch&#226;ssis:</span><span class="f_Textestd"> Vous pouvez imprimer une liste condens&#233;e de tous les ch&#226;ssis de la commande via la page </span><span class="f_Textestd">Action</span><span class="f_Textestd"> de la fen&#234;tre d&#8217;encodage des commandes. Par d&#233;faut, WinPro imprimera 3 ch&#226;ssis par ligne; vous pouvez r&#233;gler cette quantit&#233; par le point de menu </span><span class="f_Textestd">Pr&#233;f&#233;rences</span><span class="f_Textestd"> du menu </span><span class="f_Textestd">Utilitaires</span><span class="f_Textestd">, dans l&#8217;onglet </span><span class="f_Textestd">R&#233;capitulatif</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Texte de fin de confirmation. </span><span class="f_Textestd">WinPro utilise maintenant 4 variantes du texte de fin de confirmation, suivant qu&#8217;il s&#8217;agit d&#8217;une pose, d&#8217;une livraison, d&#8217;un enl&#232;vement, ou d&#8217;une fourniture non sp&#233;cifi&#233;e. Si vous avez personnalis&#233; le texte de fin de confirmation, il vous faut compl&#233;ter les 3 nouveaux textes (le texte de la livraison n&#8217;a pas &#233;t&#233; modifi&#233;), dans le point </span><span class="f_Textestd">Traduction</span><span class="f_Textestd"> du menu </span><span class="f_Textestd">Donn&#233;es</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.6.13</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">25/1/1999</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Encodage des corrections d&#8217;inventaire:</span><span class="f_Textestd"> La colonne description a &#233;t&#233; d&#233;plac&#233;e en fin de ligne afin d&#8217;am&#233;liorer la lisibilit&#233;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Parclose et &#233;paisseur vitrage:</span><span class="f_Textestd"> au cas o&#249; la table de parclose n&#8217;est pas utilisable avec l&#8217;&#233;paisseur demand&#233;e, WinPro affiche maintenant dans le message d&#8217;erreur l&#8217;&#233;paisseur de vitrage qui pose probl&#232;me.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Param&#233;trage s&#233;par&#233; de la mise en page des factures:</span><span class="f_Textestd"> Ceci vous permet d&#8217;utiliser un papier et une pr&#233;sentation diff&#233;rents pour les factures d&#8217;une part, et les autres documents d&#8217;autre part.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Coulisses de volets:</span><span class="f_Textestd"> Les questions des caissons et tabliers sont maintenant accessibles depuis les coulisses de volet.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Centralisation sous un seul point de menu du param&#233;trage des documents:</span><span class="f_Textestd"> mise en page des documents client, textes des documents, commandes fournisseurs. Le nouveau point de menu est nomm&#233; </span><span class="f_Textestd">Pr&#233;f&#233;rences</span><span class="f_Textestd"> et se trouve dans le menu </span><span class="f_Textestd">Utilitaires</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle variable:</span><span class="f_Textestd"> </span><span class="f_Variables">FlecheFauxCintre</span><span class="f_Textestd">. Cette variable est accessible depuis les formules de dormant, ouvrant et quincaillerie.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Couleur mauclair:</span><span class="f_Textestd"> Les documents (devis, confirmation, plan d&#8217;atelier, &#8230;) sp&#233;cifient maintenant si le mauclair est de la couleur du dormant.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Corrections:</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Si vous changez le syst&#232;me d&#8217;un ch&#226;ssis, WinPro trouve maintenant correctement l&#8217;ouvrant correspondant dans le nouveau syst&#232;me (pour autant que la correspondance ait &#233;t&#233; param&#233;tr&#233;e entre les 2 syst&#232;mes).</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">WinPro/D : les couleurs RAL standard ne sont plus propos&#233;es comme couleur de base.</span></td></tr></table></div><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.6.12</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">2O/1/1999</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">P&#233;rim&#232;tre et surface totale:</span><span class="f_Textestd"> dans le cas ou la commande contenait un ou plusieurs ensembles, le p&#233;rim&#232;tre et la surface totale de la commande &#224; l&#8217;&#233;cran &#233;taient erron&#233;s : le p&#233;rim&#232;tre et la surface de l&#8217;ensemble &#233;taient compt&#233;s deux fois. Ceci est maintenant corrig&#233;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Renommer un ch&#226;ssis:</span><span class="f_Textestd"> WinPro vous propose maintenant l&#8217;ancien num&#233;ro du ch&#226;ssis. Il est ainsi plus facile de modifier un num&#233;ro existant.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Impression optionnelle du num&#233;ro du client:</span><span class="f_Textestd"> Vous pouvez choisir de ne pas imprimer le num&#233;ro du client (code client) sur les documents client. Il faut pour cela que la case &#8216;</span><span class="f_Textestd">Imprimer num&#233;ro de client</span><span class="f_Textestd">&#8217; sur la page </span><span class="f_Textestd">Documents client</span><span class="f_Textestd"> du menu </span><span class="f_Textestd">Utilitaire | Bon de commande client</span><span class="f_Textestd"> ne soit pas coch&#233;e.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Ajout d&#8217;une zone &#8216;Titre&#8217; dans la fiche client:</span><span class="f_Textestd"> Cette zone peut contenir un titre qui sera imprim&#233; devant le nom du client (p.ex. M., Mme, Ets, SPRL, etc&#8230;)</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.6.11</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">2O/1/1999</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Chiffre d&#8217;affaire:</span><span class="f_Textestd"> WinPro m&#233;morise maintenant le chiffre d&#8217;affaire mensuel de chaque client. Cette m&#233;morisation se fait au moment de l&#8217;&#233;dition de la facture. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ce chiffre d&#8217;affaire est stock&#233;, et est visualisable dans l&#8217;onglet C.A. de la fiche client. L&#8217;historique est maintenu sans limite dans le temps.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.6.10</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">11/1/1999</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Num&#233;rotation des notes d&#8217;envoi:</span><span class="f_Textestd"> Les notes d&#8217;envoi client poss&#232;dent maintenant leur propre num&#233;rotation.</span></p>
<p class="p_Textestd"><span class="f_Textestd">N.B. Si vous ne souhaitez pas imprimer le num&#233;ro de note d&#8217;envoi, allez dans le menu Donn&#233;es | Traduction, recherchez la phrase &#171; Note d&#8217;envoi #1# &#187; dans la liste en haut du dialogue, et recopiez-la sur la ligne intitul&#233;e &#8216;Fran&#231;ais&#8217; en enlevant le &#171; #1# &#187;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Bouton pour remise &#224; z&#233;ro</span><span class="f_Textestd"> compl&#232;te</span><span class="f_Textestd"> du stock dans la proc&#233;dure de remise &#224; z&#233;ro du stock.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>

</td></tr></table>
</div>

</body>
</html>
