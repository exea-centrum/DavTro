<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["6.1.xx"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn61xx.php"; }
else { parent.quicksync('a11.11.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>6.1.xx</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Winpro.ini" />
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
     <a href="rn62xx.php">Previous</a>&nbsp;
     <a href="rn60xx.php">Next</a>
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
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.1.14</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">11/8/2001</span></p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 8px;">&nbsp;</p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Page dessin:</span><span class="f_Textestd"> Nouvelle disposition plus claire. Nouveau contr&#244;le de l&#8217;&#233;chelle du dessin lui-m&#234;me &#224; l&#8217;impression.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Valorisation de l&#8217;encours:</span><span class="f_Textestd"> Ajout d&#8217;une colonne Client ; ajout de sous-totaux par &#233;tat d&#8217;avancement (si tri sur &#233;tat) ou par client (si tri sur client).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Co&#251;t r&#233;el de production:</span><span class="f_Textestd"> Ajout d&#8217;un module permettant le contr&#244;le des co&#251;ts de production par lot de fabrication. Ce module est accessible via le menu &#171; Liste d&#8217;encours &#187;, &#171; Contr&#244;le des co&#251;ts &#187;. Le sous-module &#171; Main d&#8217;&#339;uvre &#187; permet d&#8217;enregistrer les temps de fabrication r&#233;els et donne un aper&#231;u de la diff&#233;rence entre le r&#233;el et le pr&#233;vus. Le sous-module &#171; Production &#187; permet de visualiser la r&#233;partition des co&#251;ts de production d&#8217;un lot ainsi que la marge. Les calculs des diff&#233;rents co&#251;ts sont bas&#233;s sur des formules sp&#233;cifiques.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.1.12</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">6/8/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Touches de fonction:</span><span class="f_Textestd"> Les principaux boutons des dialogues WinPro sont li&#233;s chacun &#224; une touche de fonction : F3 = modifier ; F4 = Rechercher ; F5 = enregistrer ; F6 = cr&#233;er ; F7 = copier ; F8 = Exporter ; F9 = importer ; F11 = biblioth&#232;que ; F12 = nouveau ch&#226;ssis. Tous ces raccourcis sont explicitement indiqu&#233;s sur les boutons concern&#233;s.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.1.08</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">27/6/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Fiche commande:</span><span class="f_Textestd"> Ajout d&#8217;un bouton pour pr&#233;fixe personnalis&#233; : Un nouveau bouton a &#233;t&#233; dans la fiche commande au m&#234;me titre que les boutons &#171; Nv Devis &#187;, &#171; Nv Cde &#187;, etc. Ce nouveau bouton vous permet la cr&#233;ation automatique d&#8217;un nouveau pr&#233;fixe pour les commandes (pr&#233;fixe et num&#233;ro param&#233;trable dans le menu &#171; Pr&#233;f&#233;rence &#187;). </span></p>
<p class="p_Textestd"><span class="f_Textestd">L&#8217;intitul&#233; de ce bouton est param&#233;trable au niveau du fichier WinPro.ini</span></p>
<p class="p_Textestd"><span class="f_Winproini">[Prefixes]</span></p>
<p class="p_Textestd"><span class="f_Winproini">PrefixeButton = </span><span class="f_Textestd">Nom du bouton</span></p>
<p class="p_Textestd"><span class="f_Textestd">Si cet intitul&#233; n&#8217;existe pas dans WinPro.ini, ce bouton est d&#233;sactiv&#233;. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ce bouton ainsi que le bouton &#171; Nv Acc &#187; vous offrent la possibilit&#233; de pouvoir imputer directement un suppl&#233;ment forfaitaire en pourcentage ainsi que son motif. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Les cl&#233;s &#224; remplir dans WinPro.ini &#224; cet effet sont d&#233;taill&#233;es ci-dessous </span></p>
<p class="p_Textestd"><span class="f_Winproini">PrefixeForfait = </span></p>
<p class="p_Textestd"><span class="f_Winproini">PrefixeMotif = </span></p>
<p class="p_Textestd"><span class="f_Winproini">AccessForfait = </span></p>
<p class="p_Textestd"><span class="f_Winproini">AccessMotif = </span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Possibilit&#233; de ne pas imprimer les &#233;tiquettes d&#8217;optimisation des profils hors limites:</span><span class="f_Textestd">  Une case &#224; cocher suppl&#233;mentaire &#171;Ne pas imprimer les &#233;tiquettes&#187; a &#233;t&#233; cr&#233;&#233;e dans l&#8217;onglet &#171; Optimisation &#187; de la fiche &#171; Profil &#187;. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Celle-ci vous permet de ne pas imprimer les &#233;tiquettes d&#8217;optimisation des profils hors limites &#224; la seule condition que le num&#233;ro de scie de ces profils soit diff&#233;rent du num&#233;ro de la scie principale.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Eclatement des devis multi-soci&#233;t&#233;s:</span><span class="f_Textestd"> Dans les configurations multi-soci&#233;t&#233;s, il est possible &#224; partir de cette version d&#8217;imprimer autant de devis que de soci&#233;t&#233;s concern&#233;es par la production des &#233;l&#233;ments repris dans ce devis. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour ce faire, vous devrez ajouter la cl&#233; suivante:</span></p>
<p class="p_Textestd"><span class="f_Winproini">[Soci&#233;t&#233;]</span></p>
<p class="p_Textestd"><span class="f_Winproini">Split Offer = 1 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Active l'impression des en-t&#234;tes diff&#233;rentes par devis, vous devrez cr&#233;er des sections sp&#233;cifiques s&#8217;appellant &#171; InfoCompanyXX &#187; o&#249; le XX correspondra au num&#233;ro de la soci&#233;t&#233; fille. </span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Winproini">[InfoCompanyXX] &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">XX doit correspondre au n&#176; de la soci&#233;t&#233; fille</span></p>
<p class="p_Textestd"><span class="f_Winproini">Logo = </span><span class="f_Textestd">Chemin d&#8217;acc&#232;s au logo</span></p>
<p class="p_Textestd"><span class="f_Winproini">Company = </span><span class="f_Textestd">Nom de la soci&#233;t&#233;</span></p>
<p class="p_Textestd"><span class="f_Winproini">Subtitle = </span><span class="f_Textestd">Sous-titre</span></p>
<p class="p_Textestd"><span class="f_Winproini">Street = </span><span class="f_Textestd">Rue</span></p>
<p class="p_Textestd"><span class="f_Winproini">Zip = </span><span class="f_Textestd">Code postal</span></p>
<p class="p_Textestd"><span class="f_Winproini">Locality = </span><span class="f_Textestd">Localit&#233;</span></p>
<p class="p_Textestd"><span class="f_Winproini">Tel = </span><span class="f_Textestd">Num&#233;ro de t&#233;l&#233;phone</span></p>
<p class="p_Textestd"><span class="f_Winproini">Fax = </span><span class="f_Textestd">Num&#233;ro de t&#233;l&#233;fax</span></p>
<p class="p_Textestd"><span class="f_Winproini">Info = </span><span class="f_Textestd">Informations compl&#233;mentaires</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.1.07</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">25/6/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Affichage des usinages dans la page Composants de la &nbsp;commande:</span><span class="f_Textestd"> Vous disposez d&#233;sormais de deux modes de visualisation : l&#8217;un prend comme r&#233;f&#233;rence le coin inf&#233;rieur gauche du cadre concern&#233;, l&#8217;autre le c&#244;t&#233; gauche du profil pos&#233; devant vous, feuillure vitrage vers le haut. Vous pouvez passer d&#8217;un mode &#224; l&#8217;autre dynamiquement, en cliquant sur le bouton appropri&#233; (en-dessous de la liste des composants).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Usinages &#224; plus d&#8217;une position:</span><span class="f_Textestd"> WinPro vous autorise maintenant un nouvel ordre d&#8217;usinage, qui autorise jusqu&#8217;&#224; 5 positions pour un m&#234;me code. La syntaxe est la suivante :</span></p>
<p class="p_Textestd"><span class="f_Variables">UsinageExt (</span><span class="f_Textestd">position</span><span class="f_Variables">,</span><span class="f_Textestd"> origine</span><span class="f_Variables">,</span><span class="f_Textestd"> code</span><span class="f_Variables">,</span><span class="f_Textestd"> cadre</span><span class="f_Variables">,</span><span class="f_Textestd"> bord [</span><span class="f_Variables">,</span><span class="f_Textestd"> vantail]</span><span class="f_Variables">)</span></p>
<p class="p_Textestd"><span class="f_Textestd">Position et Origine sont obligatoirement des variables de type tableau, contenant chacun au maximum 5 &#233;l&#233;ments. Vous ne pouvez en aucun cas passer, dans ces deux premiers param&#232;tres, des expressions arithm&#233;tiques, telles qu&#8217;elles sont autoris&#233;es dans la formule standard d&#8217;usinage. Par contre, vous pouvez remplir ces tableaux avec les valeurs et expressions que vous souhaitez, et le nom de ces deux param&#232;tres est &#233;galement libre. Le param&#232;tre Simple ou Compose de la formule d&#8217;usinage de base est supprim&#233; dans cette nouvelle formule d&#8217;usinage : les usinages sont toujours simples. Les autres param&#232;tres sont identiques &#224; ceux d&#233;j&#224; utilis&#233;s dans les usinages standards.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Voici un exemple d&#8217;usinage comportant 3 positions :</span></p>
<p class="p_Textestd"><span class="f_Variables">  &nbsp; &nbsp;# cr&#233;er les 2 tableaux de positions et origines</span></p>
<p class="p_Textestd"><span class="f_Variables">  &nbsp; &nbsp;Pos : 2</span></p>
<p class="p_Textestd"><span class="f_Variables">  &nbsp; &nbsp;Org : 2</span></p>
<p class="p_Textestd"><span class="f_Variables">  &nbsp; &nbsp;# y stocker les valeurs</span></p>
<p class="p_Textestd"><span class="f_Variables">  &nbsp; &nbsp;Si Dimension &gt; 1200</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp;Pos : 3</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp;Org : 3</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp;Pos[3] := 0</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">  &nbsp; &nbsp;Org[3] := Centre</span></p>
<p class="p_Textestd"><span class="f_Variables">  &nbsp; &nbsp;Fin Si</span></p>
<p class="p_Textestd"><span class="f_Variables">  &nbsp; &nbsp;Pos[1] := 150</span></p>
<p class="p_Textestd"><span class="f_Variables">  &nbsp; &nbsp;Pos[2] := 150</span></p>
<p class="p_Textestd"><span class="f_Variables">  &nbsp; &nbsp;Org[1] := Droite</span></p>
<p class="p_Textestd"><span class="f_Variables">  &nbsp; &nbsp;Org[2] := Gauche</span></p>
<p class="p_Textestd"><span class="f_Variables">  &nbsp; &nbsp;#cr&#233;er en une seule op&#233;ration 2 ou 3 drainages (suivant dimension profil)</span></p>
<p class="p_Textestd"><span class="f_Variables">  &nbsp; &nbsp;UsinageExt (Pos, Org, Drainage, Dormant, Bas)</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="text-decoration: underline;">Remarques :</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Il est important que la taille de tableau des 2 premiers param&#232;tres corresponde au nombre de positions que vous envoyez. N&#8217;oubliez pas qu&#8217;un tableau peut tr&#232;s facilement &#234;tre redimensionn&#233; dynamiquement, comme dans l&#8217;exemple ci-dessus. WinPro utilise en effet la taille du tableau pour d&#233;terminer combien de positions vous utilisez.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Si vos usinages passent par un driver &#233;crit par nous, veuillez nous contacter, car nous devons &#233;videmment adapter ce driver pour prendre en compte ce nouveau format d&#8217;usinage.</span></td></tr></table></div><p><span style="font-family: 'Tahoma'; color: #000000;">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.1.06</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">22/6/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Fournisseurs multiples pour chaque vitrage:</span><span class="f_Textestd"> Un nouveau module optionnel vous permet de d&#233;finir jusqu&#8217;&#224; 5 fournisseurs pour chaque vitrage. Les prix et d&#233;lais peuvent varier en fonction du fournisseur.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour s&#233;lectionner un fournisseur plut&#244;t qu&#8217;un autre, vous disposez d&#8217;un nouveau champ de saisie, dans la page d&#8217;ent&#234;te de la saisie des commandes, qui vous permet de sp&#233;cifier le fournisseur pr&#233;f&#233;rentiel pour les vitrages de la commande. WinPro utilisera ce fournisseur pour tous les vitrages pr&#233;sents dans la commande, pour lequel ce fournisseur a &#233;t&#233; renseign&#233;. Si pour un vitrage quelconque, ce fournisseur n&#8217;existe pas, alors le vitrage sera command&#233; au fournisseur principal de ce vitrage. Si vous ne sp&#233;cifiez pas de fournisseur de pr&#233;f&#233;rence, alors c&#8217;est le fournisseur de principal de chaque vitrage qui sera s&#233;lectionn&#233;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Identificateur fournisseur:</span><span class="f_Textestd"> Chaque fournisseur de vitrage peut se voir attribu&#233; un num&#233;ro d&#8217;identification (dans la page Information de la fiche fournisseur). Ce num&#233;ro peut &#234;tre utilis&#233; dans le param&#233;trage des croisillons incorpor&#233;s : il est affect&#233; &#224; la variable </span><span class="f_Variables">IdFournisseur</span><span class="f_Textestd">. Vous pouvez donc adapter la m&#233;thode de calcul de prix de vos croisillons incorpor&#233;s en fonction du fournisseur du vitrage. Si aucun fournisseur n&#8217;est d&#233;fini pour le vitrage contenant les croisillons, </span><span class="f_Variables">IdFournisseur</span><span class="f_Textestd"> vaut </span><span class="f_Variables">&#8211;1</span><span class="f_Textestd">. Il vaut aussi </span><span class="f_Variables">&#8211;1</span><span class="f_Textestd"> dans tous les cas si le calcul se fait dans WinPro/D (le choix du fournisseur de vitrage est impossible dans WinPro/D).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelles variables globales:</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">_Quantite</span><span class="f_Textestd"> : nombre de ch&#226;ssis dans un seul rep&#232;re</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">_DormantHaut</span><span class="f_Textestd"> : cat&#233;gorie du dormant haut</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">_DormantBas</span><span class="f_Textestd"> : cat&#233;gorie du dormant bas</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">_DormantGauche</span><span class="f_Textestd"> : cat&#233;gorie du dormant gauche</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">_DormantDroite</span><span class="f_Textestd"> : cat&#233;gorie du dormant droite</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">N.B. Les 4 variables _Dormant... ne contiennent de valeurs diff&#233;rentes que si on a s&#233;lectionn&#233; des dormants diff&#233;rents &#224; la saisie !!!</span></p>
<p><span style="font-family: 'Tahoma'; color: #000000;">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.1.05</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">19/6/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Routines de calcul:</span><span class="f_Textestd"> Vous pouvez d&#233;finir des sections de param&#233;trage qui sont utilis&#233;es r&#233;guli&#232;rement, dans une table centrale, accessible par le menu Technique | Routines.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Les enregistrement cr&#233;&#233;s dans cette table contiennent les renseignements suivants : un code d&#8217;identification, une description, une zone de note, et enfin les formules proprement dites. Vous utiliserez ces formules simplement en incluant, dans votre param&#233;trage, une ligne que les appelle, suivant la syntaxe suivante : </span><span class="f_Variables">Executer (</span><span class="f_Textestd">xxx</span><span class="f_Variables">)</span><span class="f_Textestd">, o&#249; xxx repr&#233;sente le code d&#8217;identification de la formule que vous souhaitez appeler. Ces routines disposent exactement des m&#234;mes variables que la formule depuis laquelle elles sont appel&#233;es, et disposent globalement des m&#234;mes possibilit&#233;s (usinages, coupes, cadres, &#8230;)</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Postes et listes atelier:</span><span class="f_Textestd"> vous avez deux filtres suppl&#233;mentaires au niveau de la d&#233;finition des postes atelier : l&#8217;un sur les bordereaux de pr&#233;paration de livraison, l&#8217;autre sur les fiches de contr&#244;le qualit&#233;. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Dans les deux cas, vous pouvez d&#233;cider si les articles doivent appara&#238;tre sur le poste (ou la liste correspondante) en fonction de leur apparition sur un des documents mentionn&#233;s.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Panneaux fabriqu&#233;s:</span><span class="f_Textestd"> Une nouvelle variable, </span><span class="f_Variables">Position</span><span class="f_Textestd">, vous permet de conna&#238;tre le num&#233;ro de vantail dans lequel se trouve le panneau fabriqu&#233;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.1.04</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">15/6/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Croisillons:</span><span class="f_Textestd"> Il y a plusieurs nouveaut&#233;s :</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Vous pouvez d&#233;finir des questions propres au croisillon</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Vous pouvez d&#233;finir vos propres dessins de croisillons. Ces dessins seront report&#233;s aussi bien sur les dessins de fen&#234;tres (plans, devis, &#8230;) que sur les commandes de vitrage.</span></td></tr></table></div><p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Il y a quelques nouvelles variables :</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">AxeVertical[]</span><span class="f_Textestd">, </span><span class="f_Variables">AxeHorizontal[]</span><span class="f_Textestd"> : ces deux tableaux contiennent la liste des axes de croisillons verticaux et horizontaux, tels que l&#8217;utilisateur les a d&#233;finis dans l&#8217;encodage du croisillon. Si l&#8217;utilisateur n&#8217;a pas d&#233;fini de position, il s&#8217;agit des calcul&#233;es par Winpro (&#233;cartement uniforme des barreaux sur chaque axe).</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">CategorieParclose</span><span class="f_Textestd"> : cat&#233;gorie de la parclose utilis&#233;e pour le vitrage correspondant au croisillon en cours de calcul.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.1.03</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">11/6/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Situation ma&#231;onnerie:</span><span class="f_Textestd"> Une variable globale, </span><span class="f_Variables">_Situation</span><span class="f_Textestd">, vous permet de v&#233;rifier quelle situation ma&#231;onnerie a &#233;t&#233; s&#233;lectionn&#233;e. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous devez attribuer un num&#233;ro &#224; chaque situation ma&#231;onnerie. Il est autoris&#233; de donner un m&#234;me num&#233;ro &#224; plusieurs situations ; les num&#233;ros</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Postes atelier:</span><span class="f_Textestd"> Le code barre de chaque fen&#234;tre est maintenant m&#233;moris&#233; dans le fichier Atelier.dbf. </span></p>
<p class="p_Textestd"><span class="f_Textestd">De m&#234;me, lors de l&#8217;envoi d&#8217;information dans le fichier InfoPst.dbf, le code barre de la fen&#234;tre concern&#233;e est not&#233; dans chaque enregistrement. doivent se trouver entre 0 et 999 999.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Param&#233;trage des parclose:</span><span class="f_Textestd"> Vous pouvez utiliser un nouveau mode de param&#233;trage des parcloses, en cliquant la case &#8216;Param&#233;trage par formules&#8217; de la page Description du param&#233;trage des parcloses.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Ce nouveau param&#233;trage utilise le m&#234;me type de formule que les dormants et ouvrants ; vous pouvez y d&#233;finir des profils, des articles et de la main d&#8217;&#339;uvre. Il n&#8217;est pas pr&#233;vu pour l&#8217;instant de lier une table de questions &#224; ce type de param&#233;trage.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Important : Les parcloses sont calcul&#233;es avant l&#8217;ouvrant qui les contient.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Chaque formule sera appel&#233;e pour chaque c&#244;t&#233; du cadre form&#233; par chaque remplissage.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous disposez en entr&#233;e des variables suivantes :</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table cellspacing="0" cellpadding="2" border="0" style="border: none border-spacing:0px;">
<tr valign="top" align="left">
<td width="179" style="width: 179px;"><p class="p_Textestd"><span class="f_Variables">EpaisseurVitrage</span></p>
</td>
<td width="407" style="width: 407px;"><p class="p_Textestd"><span class="f_Textestd">&#233;paisseur du remplissage associ&#233; &#224; la parclose.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="179" style="width: 179px;"><p class="p_Textestd"><span class="f_Variables">TypeRemplissage</span></p>
</td>
<td width="407" style="width: 407px;"><p class="p_Textestd"><span class="f_Textestd">Peut prendre une des valeurs suivantes : </span><span class="f_Variables">Vitrage</span><span class="f_Textestd">, </span><span class="f_Variables">PanneauADecouper</span><span class="f_Textestd">, </span><span class="f_Variables">PanneauDecoratif</span><span class="f_Textestd">, </span><span class="f_Variables">PanneauFabrique</span><span class="f_Textestd">.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="179" style="width: 179px;"><p class="p_Textestd"><span class="f_Variables">Fixe</span></p>
</td>
<td width="407" style="width: 407px;"><p class="p_Textestd"><span class="f_Textestd">Vaut </span><span class="f_Variables">1</span><span class="f_Textestd"> si la parclose est dans un fixe simple cadre (donc dans le dormant), </span><span class="f_Variables">0</span><span class="f_Textestd"> sinon.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="179" style="width: 179px;"><p class="p_Textestd"><span class="f_Variables">NumeroOuvrant</span></p>
</td>
<td width="407" style="width: 407px;"><p class="p_Textestd"><span class="f_Textestd">Index de l&#8217;ouvrant dans la liste des tableaux de description de l&#8217;ouvrant</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="179" style="width: 179px;"><p class="p_Textestd"><span class="f_Variables">Position</span></p>
</td>
<td width="407" style="width: 407px;"><p class="p_Textestd"><span class="f_Textestd">Num&#233;ro de vantail auquel la parclose est destin&#233;e</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="179" style="width: 179px;"><p class="p_Textestd"><span class="f_Variables">EnBas</span></p>
<p class="p_Textestd"><span class="f_Variables">Agauche</span></p>
<p class="p_Textestd"><span class="f_Variables">EnHaut</span></p>
<p class="p_Textestd"><span class="f_Variables">EnBas</span></p>
</td>
<td width="407" style="width: 407px;"><p class="p_Textestd"><span class="f_Textestd">Ces 4 variables indiquent si la parclose est pos&#233;e sur le cadre ou sur une traverse &#224; l&#8217;int&#233;rieur de ce cadre. Les valeurs possibles sont les suivantes: </span><span class="f_Variables">Traverse</span><span class="f_Textestd">, </span><span class="f_Variables">Dormant</span><span class="f_Textestd"> (si Fixe = 1), </span><span class="f_Variables">Ouvrant</span><span class="f_Textestd"> (si Fixe = 0)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="179" style="width: 179px;"><p class="p_Textestd"><span class="f_Variables">Largeur</span></p>
</td>
<td width="407" style="width: 407px;"><p class="p_Textestd"><span class="f_Textestd">Largeur hors tout du cadre de parclose (= fond de batt&#233;e)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="179" style="width: 179px;"><p class="p_Textestd"><span class="f_Variables">Hauteur</span></p>
</td>
<td width="407" style="width: 407px;"><p class="p_Textestd"><span class="f_Textestd">Hauteur hors tout du cadre de parclose (= fond de batt&#233;e)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="179" style="width: 179px;"><p class="p_Textestd"><span class="f_Variables">Dimension</span></p>
</td>
<td width="407" style="width: 407px;"><p class="p_Textestd"><span class="f_Textestd">Longueur totale de la parclose en cours de calcul</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="179" style="width: 179px;"><p class="p_Textestd"><span class="f_Variables">Bord</span></p>
</td>
<td width="407" style="width: 407px;"><p class="p_Textestd"><span class="f_Textestd">Indique de quel c&#244;t&#233; se trouve la parclose en cours de calcul : </span><span class="f_Variables">Haut</span><span class="f_Textestd">, </span><span class="f_Variables">Bas</span><span class="f_Textestd">, </span><span class="f_Variables">Gauche</span><span class="f_Textestd">, </span><span class="f_Variables">Droite</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="179" style="width: 179px;"><p class="p_Textestd"><span class="f_Variables">CategorieCroisillon</span></p>
</td>
<td width="407" style="width: 407px;"><p class="p_Textestd"><span class="f_Textestd">Cat&#233;gorie du croisillon appliqu&#233; au vitrage correspondant aux parclose en cours de calcul. S&#8217;il n&#8217;y a pas de croisillon, cette variable vaut </span><span class="f_Variables">&#8211;1</span><span class="f_Textestd">.</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">En sortie, WinPro attend que les variables suivantes contiennent une valeur non nulle :</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table cellspacing="0" cellpadding="2" border="0" style="border: none border-spacing:0px;">
<tr valign="top" align="left">
<td width="139" style="width: 139px;"><p class="p_Textestd"><span class="f_Variables">Quantite</span></p>
</td>
<td width="398" style="width: 398px;"><p class="p_Textestd"><span class="f_Textestd">Nombre de profils, articles, ou secondes &#224; utiliser</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="139" style="width: 139px;"><p class="p_Textestd"><span class="f_Variables">Longueur</span></p>
</td>
<td width="398" style="width: 398px;"><p class="p_Textestd"><span class="f_Textestd">Pour les profils seulement : longueur exacte &#224; d&#233;couper</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Optionnellement, WinPro r&#233;cup&#232;re les valeurs d&#8217;angle des profils si vous les avez modifi&#233;es :</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table cellspacing="0" cellpadding="2" border="0" style="border: none border-spacing:0px;">
<tr valign="top" align="left">
<td width="139" style="width: 139px;"><p class="p_Textestd"><span class="f_Variables">Angle1 </span><span class="f_Textestd">et</span><span class="f_Variables"> Angle2</span></p>
<p class="p_Textestd"><span class="f_Variables">&nbsp;</span></p>
</td>
<td width="863" style="width: 863px;"><p class="p_Textestd"><span class="f_Textestd">Respectivement angle gauche et droite, lorsque la parclose est pos&#233;e devant vous, c&#244;t&#233; ext&#233;rieur (= c&#244;t&#233; batt&#233;e du cadre) vers le bas</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.1.02</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">7/6/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Configuration de la fen&#234;tre:</span><span class="f_Textestd"> De nouvelles variables globales, cr&#233;&#233;es par WinPro, vous permettent de conna&#238;tre, d&#232;s le d&#233;but du calcul, la configuration g&#233;n&#233;rale de la fen&#234;tre. La plupart de ces variables sont de type tableau (voir notes de release de la version 4.1.0).</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour faciliter l&#8217;utilisation de ces tableaux, une variable a &#233;t&#233; ajout&#233;e au param&#233;trage des ouvrants et des quincailleries : </span><span class="f_Variables">NumeroOuvrant</span><span class="f_Textestd">. Cette variable repr&#233;sente l&#8217;index de l&#8217;ouvrant en cours de calcul dans les tableaux de description des ouvrants. De m&#234;me, dans le param&#233;trage des traverses, une variable </span><span class="f_Variables">NumeroTraverse</span><span class="f_Textestd"> est disponible. Elle sert d&#8217;index sur la traverse en cours de calcul dans les tableaux de description des traverses.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="text-decoration: underline;">Description des ouvrants:</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour chaque ouvrant, vous disposez des variables suivantes :</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table cellspacing="0" cellpadding="2" border="0" style="border: none border-spacing:0px;">
<tr valign="top" align="left">
<td width="193" style="width: 193px;"><p class="p_Textestd"><span class="f_Variables">_Nouvrants</span></p>
</td>
<td width="993" style="width: 993px;"><p class="p_Textestd"><span class="f_Textestd">Nombre d&#8217;ouvrants dans la fen&#234;tre (y compris fixes simple cadre).</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="193" style="width: 193px;"><p class="p_Textestd"><span class="f_Variables">_OuvrantL []</span></p>
</td>
<td width="993" style="width: 993px;"><p class="p_Textestd"><span class="f_Textestd">Largeur de chaque ouvrant.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="193" style="width: 193px;"><p class="p_Textestd"><span class="f_Variables">_OuvrantH []</span></p>
</td>
<td width="993" style="width: 993px;"><p class="p_Textestd"><span class="f_Textestd">Hauteur de chaque ouvrant.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="193" style="width: 193px;"><p class="p_Textestd"><span class="f_Variables">_OuvrantX []</span></p>
</td>
<td width="993" style="width: 993px;"><p class="p_Textestd"><span class="f_Textestd">Position horizontale du bord gauche de chaque ouvrant (par rapport au bord ext&#233;rieur gauche de la fen&#234;tre).</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="193" style="width: 193px;"><p class="p_Textestd"><span class="f_Variables">_OuvrantY []</span></p>
</td>
<td width="993" style="width: 993px;"><p class="p_Textestd"><span class="f_Textestd">Position verticale du bord bas de chaque ouvrant (par rapport au bord ext&#233;rieur bas de la fen&#234;tre).</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="193" style="width: 193px;"><p class="p_Textestd"><span class="f_Variables">_OuvrantCatOuvr []</span></p>
</td>
<td width="993" style="width: 993px;"><p class="p_Textestd"><span class="f_Textestd">Cat&#233;gorie de chaque ouvrant (case Cat&#233;gorie de l&#8217;onglet Description de la d&#233;finition de l&#8217;ouvrant).</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="193" style="width: 193px;"><p class="p_Textestd"><span class="f_Variables">_OuvrantCatQuinc []</span></p>
</td>
<td width="993" style="width: 993px;"><p class="p_Textestd"><span class="f_Textestd">Cat&#233;gorie de chaque quincaillerie (case Cat&#233;gorie de l&#8217;onglet Description de la d&#233;finition de la quincaillerie).</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="193" style="width: 193px;"><p class="p_Textestd"><span class="f_Variables">_OuvrantSens []</span></p>
</td>
<td width="993" style="width: 993px;"><p class="p_Textestd"><span class="f_Textestd">Sens d&#8217;ouverture de chaque ouvrant : </span><span class="f_Variables">_Gauche</span><span class="f_Textestd"> ou </span><span class="f_Variables">_Droite</span><span class="f_Textestd">.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="193" style="width: 193px;"><p class="p_Textestd"><span class="f_Variables">_OuvrantNVantaux []</span></p>
</td>
<td width="993" style="width: 993px;"><p class="p_Textestd"><span class="f_Textestd">Nombre de vantaux de chaque ouvrant.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="193" style="width: 193px;"><p class="p_Textestd"><span class="f_Variables">_OuvrantNTrav []</span></p>
</td>
<td width="993" style="width: 993px;"><p class="p_Textestd"><span class="f_Textestd">Nombre total de traverses dans chaque ouvrant (pour l&#8217;ensemble des vantaux).</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="193" style="width: 193px;"><p class="p_Textestd"><span class="f_Variables">_OuvrantHaut []</span></p>
</td>
<td width="993" style="width: 993px;"><p class="p_Textestd"><span class="f_Textestd">Indique si le haut de chaque ouvrant touche une traverse ou non. Valeurs possible : </span><span class="f_Variables">_Traverse</span><span class="f_Textestd">, </span><span class="f_Variables">_Dormant</span><span class="f_Textestd"> (si traverse de dormant), </span><span class="f_Variables">_Ouvrant</span><span class="f_Textestd"> (si traverse d&#8217;ouvrant)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="193" style="width: 193px;"><p class="p_Textestd"><span class="f_Variables">_OuvrantBas []</span></p>
</td>
<td width="993" style="width: 993px;"><p class="p_Textestd"><span class="f_Textestd">Indique si le bas de chaque ouvrant touche une traverse ou non. Valeurs possible : </span><span class="f_Variables">_Traverse</span><span class="f_Textestd">, </span><span class="f_Variables">_Dormant</span><span class="f_Textestd"> (si traverse de dormant), </span><span class="f_Variables">_Ouvrant</span><span class="f_Textestd"> (si traverse d&#8217;ouvrant)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="193" style="width: 193px;"><p class="p_Textestd"><span class="f_Variables">_OuvrantGauche []</span></p>
</td>
<td width="993" style="width: 993px;"><p class="p_Textestd"><span class="f_Textestd">Indique si la gauche de chaque ouvrant touche une traverse ou non. Valeurs possible : </span><span class="f_Variables">_Traverse</span><span class="f_Textestd">, </span><span class="f_Variables">_Dormant</span><span class="f_Textestd"> (si traverse de dormant), </span><span class="f_Variables">_Ouvrant</span><span class="f_Textestd"> (si traverse d&#8217;ouvrant)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="193" style="width: 193px;"><p class="p_Textestd"><span class="f_Variables">_OuvrantDroite []</span></p>
</td>
<td width="993" style="width: 993px;"><p class="p_Textestd"><span class="f_Textestd">Indique si la droite de chaque ouvrant touche une traverse ou non. Valeurs possible : </span><span class="f_Variables">_Traverse</span><span class="f_Textestd">, </span><span class="f_Variables">_Dormant</span><span class="f_Textestd"> (si traverse de dormant), </span><span class="f_Variables">_Ouvrant</span><span class="f_Textestd"> (si traverse d&#8217;ouvrant)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="193" style="width: 193px;"><p class="p_Textestd"><span class="f_Variables">_OuvrantRecouvrG []</span></p>
</td>
<td width="993" style="width: 993px;"><p class="p_Textestd"><span class="f_Textestd">Indique la valeur de recouvrement gauche de chaque ouvrant sur le dormant.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="193" style="width: 193px;"><p class="p_Textestd"><span class="f_Variables">_OuvrantRecouvrD []</span></p>
</td>
<td width="993" style="width: 993px;"><p class="p_Textestd"><span class="f_Textestd">Indique la valeur de recouvrement droite de chaque ouvrant sur le dormant.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="193" style="width: 193px;"><p class="p_Textestd"><span class="f_Variables">_OuvrantRecouvrH []</span></p>
</td>
<td width="993" style="width: 993px;"><p class="p_Textestd"><span class="f_Textestd">Indique la valeur de recouvrement haut de chaque ouvrant sur le dormant.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="193" style="width: 193px;"><p class="p_Textestd"><span class="f_Variables">_OuvrantRecouvrB []</span></p>
</td>
<td width="993" style="width: 993px;"><p class="p_Textestd"><span class="f_Textestd">Indique la valeur de recouvrement bas &nbsp;de chaque ouvrant sur le dormant.</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="text-decoration: underline;">Description des traverses:</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour chaque traverse, vous disposez des variables suivantes :</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table cellspacing="0" cellpadding="2" border="0" style="border: none border-spacing:0px;">
<tr valign="top" align="left">
<td width="170" style="width: 170px;"><p class="p_Textestd"><span class="f_Variables">_NTraverses</span></p>
</td>
<td width="1039" style="width: 1039px;"><p class="p_Textestd"><span class="f_Textestd">Nombre total de traverses (ouvrant + dormant)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="170" style="width: 170px;"><p class="p_Textestd"><span class="f_Variables">_NTraversesDormant</span></p>
</td>
<td width="1039" style="width: 1039px;"><p class="p_Textestd"><span class="f_Textestd">Nombre total de traverses de dormant</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="170" style="width: 170px;"><p class="p_Textestd"><span class="f_Variables">_NTraversesOuvrant</span></p>
</td>
<td width="1039" style="width: 1039px;"><p class="p_Textestd"><span class="f_Textestd">Nombre total de traverses d&#8217;ouvrant</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="170" style="width: 170px;"><p class="p_Textestd"><span class="f_Variables">_TravLong []</span></p>
</td>
<td width="1039" style="width: 1039px;"><p class="p_Textestd"><span class="f_Textestd">Longueur de chaque traverse</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="170" style="width: 170px;"><p class="p_Textestd"><span class="f_Variables">_TravType []</span></p>
</td>
<td width="1039" style="width: 1039px;"><p class="p_Textestd"><span class="f_Textestd">Type de chaque traverse : </span><span class="f_Variables">_Dormant</span><span class="f_Textestd"> ou </span><span class="f_Variables">_Ouvrant</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="170" style="width: 170px;"><p class="p_Textestd"><span class="f_Variables">_TravX []</span></p>
</td>
<td width="1039" style="width: 1039px;"><p class="p_Textestd"><span class="f_Textestd">Point gauche si traverse horizontale, axe si traverse verticale, par rapport au bord gauche du ch&#226;ssis</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="170" style="width: 170px;"><p class="p_Textestd"><span class="f_Variables">_TravY []</span></p>
</td>
<td width="1039" style="width: 1039px;"><p class="p_Textestd"><span class="f_Textestd">Point inf&#233;rieur si traverse verticale, axe si traverse horizontale, par rapport au bord bas du ch&#226;ssis</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="170" style="width: 170px;"><p class="p_Textestd"><span class="f_Variables">_TravOrient []</span></p>
</td>
<td width="1039" style="width: 1039px;"><p class="p_Textestd"><span class="f_Textestd">Orientation de chaque traverse : </span><span class="f_Variables">_Horizontal</span><span class="f_Textestd"> ou </span><span class="f_Variables">_Vertical</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="170" style="width: 170px;"><p class="p_Textestd"><span class="f_Variables">_TravCat []</span></p>
</td>
<td width="1039" style="width: 1039px;"><p class="p_Textestd"><span class="f_Textestd">Cat&#233;gorie de chaque traverse (case Cat&#233;gorie de l&#8217;onglet Description de la d&#233;finition de la traverse).</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="170" style="width: 170px;"><p class="p_Textestd"><span class="f_Variables">_TravEp []</span></p>
</td>
<td width="1039" style="width: 1039px;"><p class="p_Textestd"><span class="f_Textestd">Epaisseur int&#233;rieure de chaque traverse</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="170" style="width: 170px;"><p class="p_Textestd"><span class="f_Variables">_TravCadre []</span></p>
</td>
<td width="1039" style="width: 1039px;"><p class="p_Textestd"><span class="f_Textestd">Num&#233;ro du cadre &#224; laquelle la traverse appartient : 0 pour le dormant, 1.1 pour le premier vantail du premier ouvrant, 1.2 pour le deuxi&#232;me vantail du premier ouvrant, &#8230;.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="170" style="width: 170px;"><p class="p_Textestd"><span class="f_Variables">_TravHaut []</span></p>
</td>
<td width="1039" style="width: 1039px;"><p class="p_Textestd"><span class="f_Textestd">Indique si le haut de chaque traverse verticale touche une traverse ou non. Valeurs possible : </span><span class="f_Variables">_Traverse</span><span class="f_Textestd">, </span><span class="f_Variables">_Dormant</span><span class="f_Textestd"> (si traverse de dormant), </span><span class="f_Variables">_Ouvrant</span><span class="f_Textestd"> (si traverse d&#8217;ouvrant).</span></p>
<p class="p_Textestd"><span class="f_Textestd">La valeur est ind&#233;termin&#233;e si la traverse est horizontale.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="170" style="width: 170px;"><p class="p_Textestd"><span class="f_Variables">_TravBas []</span></p>
</td>
<td width="1039" style="width: 1039px;"><p class="p_Textestd"><span class="f_Textestd">Indique si le bas de chaque traverse touche une traverse ou non. Valeurs possible : </span><span class="f_Variables">_Traverse</span><span class="f_Textestd">, </span><span class="f_Variables">_Dormant</span><span class="f_Textestd"> (si traverse de dormant), </span><span class="f_Variables">_Ouvrant</span><span class="f_Textestd"> (si traverse d&#8217;ouvrant). </span></p>
<p class="p_Textestd"><span class="f_Textestd">La valeur est ind&#233;termin&#233;e si la traverse est horizontale.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="170" style="width: 170px;"><p class="p_Textestd"><span class="f_Variables">_TravGauche []</span></p>
</td>
<td width="1039" style="width: 1039px;"><p class="p_Textestd"><span class="f_Textestd">Indique si la gauche de chaque traverse touche une traverse ou non. Valeurs possible : </span><span class="f_Variables">_Traverse</span><span class="f_Textestd">, </span><span class="f_Variables">_Dormant</span><span class="f_Textestd"> (si traverse de dormant), </span><span class="f_Variables">_Ouvrant</span><span class="f_Textestd"> (si traverse d&#8217;ouvrant). </span></p>
<p class="p_Textestd"><span class="f_Textestd">La valeur est ind&#233;termin&#233;e si la traverse est verticale.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="170" style="width: 170px;"><p class="p_Textestd"><span class="f_Variables">_TravDroite []</span></p>
</td>
<td width="1039" style="width: 1039px;"><p class="p_Textestd"><span class="f_Textestd">Indique si la droite de chaque traverse touche une traverse ou non. Valeurs possible : </span><span class="f_Variables">_Traverse</span><span class="f_Textestd">, </span><span class="f_Variables">_Dormant</span><span class="f_Textestd"> (si traverse de dormant), </span><span class="f_Variables">_Ouvrant</span><span class="f_Textestd"> (si traverse d&#8217;ouvrant). </span></p>
<p class="p_Textestd"><span class="f_Textestd">La valeur est ind&#233;termin&#233;e si la traverse est verticale.</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="text-decoration: underline;">Description des profils p&#233;riph&#233;riques:</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour chaque profil, vous disposez des variables suivantes :</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table cellspacing="0" cellpadding="2" border="0" style="border: none border-spacing:0px;">
<tr valign="top" align="left">
<td width="142" style="width: 142px;"><p class="p_Textestd"><span class="f_Variables">_Nperiph</span></p>
</td>
<td width="729" style="width: 729px;"><p class="p_Textestd"><span class="f_Textestd">Nombre total de profils p&#233;riph&#233;riques, y compris seuils.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="142" style="width: 142px;"><p class="p_Textestd"><span class="f_Variables">_PeriphPos []</span></p>
</td>
<td width="729" style="width: 729px;"><p class="p_Textestd"><span class="f_Textestd">Position de chaque profil : </span><span class="f_Variables">_Haut</span><span class="f_Textestd">, </span><span class="f_Variables">_Bas</span><span class="f_Textestd">, </span><span class="f_Variables">_Gauche</span><span class="f_Textestd">, </span><span class="f_Variables">_Droite</span><span class="f_Textestd">, </span><span class="f_Variables">_HautGauche</span><span class="f_Textestd">, </span><span class="f_Variables">_HautDroite</span><span class="f_Textestd">.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="142" style="width: 142px;"><p class="p_Textestd"><span class="f_Variables">_PeriphType []</span></p>
</td>
<td width="729" style="width: 729px;"><p class="p_Textestd"><span class="f_Textestd">Type de chaque profil : </span><span class="f_Variables">_Profil</span><span class="f_Textestd"> (profil p&#233;riph&#233;rique simple), </span><span class="f_Variables">_SeuilPorte</span><span class="f_Textestd">, </span><span class="f_Variables">_SeuilChassis</span><span class="f_Textestd">.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="142" style="width: 142px;"><p class="p_Textestd"><span class="f_Variables">_PeriphCat []</span></p>
</td>
<td width="729" style="width: 729px;"><p class="p_Textestd"><span class="f_Textestd">Cat&#233;gorie de chaque profil (case Cat&#233;gorie de l&#8217;onglet Description de la d&#233;finition du profil p&#233;riph&#233;rique).</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="142" style="width: 142px;"><p class="p_Textestd"><span class="f_Variables">_PeriphEp []</span></p>
</td>
<td width="729" style="width: 729px;"><p class="p_Textestd"><span class="f_Textestd">Epaisseur de chaque profil p&#233;riph&#233;rique.</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;">&nbsp;</p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.1.01</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">4/6/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Ordre des morceaux de profil dans les barres optimis&#233;es:</span><span class="f_Textestd"> WinPro trie d&#8217;office, dans une m&#234;me barre, les morceaux optimis&#233;s du plus grand au plus petit. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous pouvez inverser cet ordre (pour tous les profils) en ajoutant une cl&#233; dans le fichier WinPro.ini:</span></p>
<p class="p_Textestd"><span class="f_Winproini">[Optimisation]:</span></p>
<p class="p_Textestd"><span class="f_Winproini">SortOrder = 1 </span><span class="f_Textestd">pour commencer le d&#233;bit par la plus petite pi&#232;ce.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Finalisation de la gestion des colis:</span><span class="f_Textestd"> La gestion des colis permet d&#8217;imprimer des &#233;tiquettes et listes de colisage reprenant le contenu de chaque colis et ou chevalet de transport, qu&#8217;il s&#8217;agisse de volets, fen&#234;tres, ou accessoires. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Il s&#8217;agit d&#8217;un module optionnel.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.1.00</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">31/5/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Postes d&#8217;atelier:</span><span class="f_Textestd"> La gestion des postes atelier est am&#233;lior&#233;e par la possibilit&#233; d&#8217;afficher plus d&#8217;information sur les &#233;crans d&#8217;atelier, ou alternativement par la possibilit&#233; d&#8217;imprimer, pour chaque poste, une liste de renseignements, par lot et par fen&#234;tre.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour utiliser ces nouvelles fonctionnalit&#233;s, vous devez commencer par d&#233;finir dans WinPro la liste des postes d&#8217;atelier. Pour cela, prenez le menu Donn&#233;es | Postes d&#8217;atelier, et cr&#233;ez un enregistrement pour chaque poste. Cet enregistrement comprend, comme renseignement : l&#8217;identificateur du poste (code 16 caract&#232;res maximum), la description du poste, 3 cases &#224; cocher indiquant s&#8217;il faut afficher ou imprimer les vitrages, panneaux &#224; d&#233;couper et/ou panneaux d&#233;coratifs, deux cases &#224; cocher indiquant l&#8217;une si une liste doit &#234;tre imprim&#233;e avec chaque lot pour ce poste, l&#8217;autre si cette m&#234;me liste doit &#234;tre enregistr&#233;e dans une table (InfoPst.dbf).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">A partir de ce moment, vous pouvez, dans les d&#233;finitions des articles, usinages et messages, indiquer quel(s) poste(s) sont concern&#233;s par l&#8217;article, l&#8217;usinage ou le message.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Enfin, sur les postes d&#8217;atelier, vous devez cr&#233;er un fichier c:\WinPro.ini, qui contiendra les lignes suivantes :</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Winproini">[Workplace]</span></p>
<p class="p_Textestd"><span class="f_Winproini">ID =</span><span class="f_Textestd"> </span><span class="f_Textestd" style="font-weight: bold;">XXX &nbsp;  </span><span class="f_Textestd">  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; remplacez </span><span class="f_Textestd" style="font-weight: bold;">XXX</span><span class="f_Textestd"> par l&#8217;identificateur du poste</span></p>
<p class="p_Textestd"><span class="f_Winproini">Control only  &nbsp; &nbsp; &nbsp; &nbsp;=</span><span class="f_Textestd"> </span><span class="f_Winproini">1 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">poste normal</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 0 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">poste de fin de cha&#238;ne (marque le ch&#226;ssis comme termin&#233;)</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Winproini">prop.W = 0.5 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">proportion du dessin en largeur. Varie de 0 &#224; 1 ;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Winproini">prop.H = 0.5 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">proportion du dessin et de la zone message en hauteur.Varie de 0 &#224; 1 </span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Cette gestion des postes d&#8217;atelier est un module optionnel.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelles variables:</span><span class="f_Textestd"> Dans les dormants, vous disposez de deux nouvelles variables : </span><span class="f_Variables">ContientPorte</span><span class="f_Textestd"> et </span><span class="f_Variables">ContientVide</span><span class="f_Textestd">, qui sont &#224; </span><span class="f_Variables">1</span><span class="f_Textestd"> ou &#224; </span><span class="f_Variables">0</span><span class="f_Textestd">, si le dormant contient respectivement au moins une porte ou une partie vide.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Affichage des usinages:</span><span class="f_Textestd"> Vous pouvez visualiser, depuis la page Composants de la fen&#234;tre de saisie de commandes, la liste des usinages li&#233;es &#224; chaque profil. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Il suffit pour cela de cliquer sur le bouton Usinages en-dessous de cette liste.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Questions sur seuils:</span><span class="f_Textestd"> Vous pouvez d&#233;finir des questions pour les seuils de ch&#226;ssis et les seuils de porte. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ces questions seront ajout&#233;es aux questions de dormant au moment de la saisie.</span></p>

</td></tr></table>
</div>

</body>
</html>
