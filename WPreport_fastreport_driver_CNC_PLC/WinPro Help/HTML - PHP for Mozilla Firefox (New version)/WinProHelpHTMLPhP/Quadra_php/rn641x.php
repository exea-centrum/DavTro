<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["6.4.1x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn641x.php"; }
else { parent.quicksync('a11.8.6'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>6.4.1x</title>
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
     <a href="rn642x.php">Previous</a>&nbsp;
     <a href="rn640x.php">Next</a>
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
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.19</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">10/9/2002</span></p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 8px;">&nbsp;</p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Formules client et syst&#232;me:</span><span class="f_Textestd"> Vous pouvez appeler des routines &#224; partir de ces formules.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Prix au d&#233;bours&#233; ou prix commercial:</span><span class="f_Textestd"> Une nouvelle case &#224; cocher, dans la page prix, intitul&#233;e </span><span class="f_Textestd">&#8216;Calculer au d&#233;bours&#233;&#8217;</span><span class="f_Textestd">, permet de contr&#244;ler le mode de calcul de WinPro pour l&#8217;ensemble de la commande. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Dans les versions pr&#233;c&#233;dentes, WinPro consid&#233;rait que par d&#233;faut il fallait effectuer les calculs au d&#233;bours&#233;. Il &#233;tait possible de forcer le mode de calcul commercial par param&#233;trage, en donnant la valeur </span><span class="f_Variables">_Commercial</span><span class="f_Textestd"> &#224; la variable </span><span class="f_Variables">_TypePrix</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Avec cette nouvelle case &#224; cocher, vous pouvez d&#233;finir quel est le mode de calcul par d&#233;faut pour toute la commande ; cependant, une valeur affect&#233;e par param&#233;trage &#224; la variable </span><span class="f_Variables">_TypePrix</span><span class="f_Textestd"> aura toujours priorit&#233; sur cette case &#224; cocher.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Il est possible de contr&#244;ler l&#8217;acc&#232;s &#224; cette case &#224; cocher. La m&#233;thode est similaire &#224; celle utilis&#233;e pour les cases &#8216;Arrondir par 10 cm&#8217;, &#8216;Compter les chutes RAL&#8217;, &#8230; Vous devez ajouter une nouvelle cl&#233; au fichier Winpro.ini:</span></p>
<p class="p_Textestd"><span class="f_Winproini">[Customer Order]</span></p>
<p class="p_Textestd"><span class="f_Winproini">Price Type &nbsp; &nbsp; &nbsp; &nbsp;= 0</span><span class="f_Textestd"> : La case est non coch&#233;e par d&#233;faut, et modifiable par l&#8217;utilisateur</span></p>
<p class="p_Textestd"><span class="f_Textestd">  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Winproini">= 1</span><span class="f_Textestd"> : La case est coch&#233;e par d&#233;faut, et modifiable par l&#8217;utilisateur</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 2 </span><span class="f_Textestd">: La case est non coch&#233;e, et non modifiable par l&#8217;utilisateur</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 3</span><span class="f_Textestd"> : La case est coch&#233;e, et non modifiable par l&#8217;utilisateur</span></p>
<p class="p_Textestd"><span class="f_Textestd">De plus, l&#8217;utilisateur doit avoir des droits d&#8217;acc&#232;s suffisants (droit </span><span class="f_Textestd">&#8216;Marge/commande&#8217;</span><span class="f_Textestd">) pour pouvoir modifier le contenu de cette case.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle variable globale:</span><span class="f_Textestd"> La forme de chaque remplissage (verre ou panneau) est &#233;num&#233;r&#233;e dans la variable </span><span class="f_Variables">_RemplForme[]</span><span class="f_Textestd">. Les valeurs que cette variable peut prendre sont identiques &#224; celle que peut prendre </span><span class="f_Variables">_FormeDormant</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Gestion des lots par ligne de production:</span><span class="f_Textestd"> Dans la cr&#233;ation de lots, lorsque vous s&#233;lectionnez des ch&#226;ssis dans la fen&#234;tre sup&#233;rieure, WinPro n&#8217;indiquait que le total du ch&#226;ssis sous le curseur (cadre pointill&#233;). </span></p>
<p class="p_Textestd"><span class="f_Textestd">Dor&#233;navant, il totalisera les compteurs de tous les ch&#226;ssis s&#233;lectionn&#233;s. Par contre, le dessin affich&#233; repr&#233;sente toujours le ch&#226;ssis sous le curseur.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Cotes tableau:</span><span class="f_Textestd"> Vous pouvez activer la repr&#233;sentation des cotes tableau sur le dessin des ch&#226;ssis ; dans ce cas, un cadre en pointill&#233; repr&#233;sentera les dimensions tableau du ch&#226;ssis, et les dimensions tableau seront imprim&#233;es avec les autres cotes du ch&#226;ssis. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour activer cette fonction, il est n&#233;cessaire d'ajouter une nouvelle cl&#233; dans le fichier </span><span class="f_Textestd">WinPro.ini</span><span class="f_Textestd">:</span></p>
<p class="p_Textestd"><span class="f_Winproini">[System]</span></p>
<p class="p_Textestd"><span class="f_Winproini">Dessin cote tableau=1</span></p>
<p style="margin: 0px 0px 0px 5px;"><img src="img/img_110.jpg" width="692" height="684" border="0" vspace="1" hspace="1" alt="img_110"></p>
<p style="margin: 0px 0px 0px 5px;"><span class="f_ImageCaption">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Fonctions de date:</span><span class="f_Textestd"> Le langage de param&#233;trage int&#232;gre maintenant plusieurs fonctions de manipulation de date, ainsi que deux variables globales indiquant la date du jour et la date de saisie. Les dates sont stock&#233;es sous la forme d&#8217;un simple nombre. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Toute op&#233;ration arithm&#233;tique peut donc en principe y &#234;tre appliqu&#233;, quoiqu&#8217;en pratique, seules l&#8217;addition et la soustraction aient un sens. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Voici la liste des fonctions disponibles :</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table cellspacing="0" cellpadding="4" border="0" style="border: none border-spacing:0px;">
<tr valign="top" align="left">
<td width="206" style="width: 206px;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Date (</span><span class="f_Textestd">jour, mois, annee</span><span class="f_Variables">)</span></p>
</td>
<td width="372" style="width: 372px;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Renvoie la date cr&#233;&#233;e &#224; partir du jour, du mois et de l&#8217;ann&#233;e indiqu&#233;s.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="206" style="width: 206px;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Jour (</span><span class="f_Textestd">date</span><span class="f_Variables">)</span></p>
</td>
<td width="372" style="width: 372px;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Renvoie le jour du mois de la date pass&#233;e en param&#232;tre</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="206" style="width: 206px;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Mois (</span><span class="f_Textestd">date</span><span class="f_Variables">)</span></p>
</td>
<td width="372" style="width: 372px;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Renvoie le mois de la date pass&#233;e en param&#232;tre</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="206" style="width: 206px;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Annee (</span><span class="f_Textestd">date</span><span class="f_Variables">)</span></p>
</td>
<td width="372" style="width: 372px;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Renvoie l&#8217;ann&#233;e de la date pass&#233;e en param&#232;tre</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="206" style="width: 206px;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">NJours (</span><span class="f_Textestd">mois, annee</span><span class="f_Variables">)</span></p>
</td>
<td width="372" style="width: 372px;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Renvoie le nombre de jours du mois pass&#233; en param&#232;tre (il faut indiquer l&#8217;ann&#233;e &#233;galement, afin de traiter correctement le mois de f&#233;vrier suivant que l&#8217;ann&#233;e est bissextile ou pas)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="206" style="width: 206px;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Semaine (</span><span class="f_Textestd">date</span><span class="f_Variables">)</span></p>
</td>
<td width="372" style="width: 372px;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Renvoie le num&#233;ro de la semaine correspondant &#224; la date indiqu&#233;e</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="206" style="width: 206px;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">IncJour (</span><span class="f_Textestd">date, njours</span><span class="f_Variables">)</span></p>
</td>
<td width="372" style="width: 372px;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Renvoie la date indiqu&#233;e, augment&#233;e de njours. Notez que vous pouvez simplement utiliser une addition arithm&#233;tique pour obtenir le m&#234;me r&#233;sultat. Njours peut &#234;tre n&#233;gatif.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="206" style="width: 206px;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">IncMois (</span><span class="f_Textestd">date, nmois</span><span class="f_Variables">)</span></p>
</td>
<td width="372" style="width: 372px;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Renvoie la date indiqu&#233;e, augment&#233;e de nmois. Le programme incr&#233;mente l&#8217;ann&#233;e si n&#233;cessaire, ainsi que le jour du mois si le jour d&#8217;origine est sup&#233;rieur au nombre de jours dans le mois calcul&#233;. Nmois peut &#234;tre n&#233;gatif.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="206" style="width: 206px;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">IncAnnee (</span><span class="f_Textestd">date, nannees</span><span class="f_Variables">)</span></p>
</td>
<td width="372" style="width: 372px;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Renvoie la date indiqu&#233;e, augment&#233;e de nannees. Si la date d&#8217;origine &#233;tait le 29 f&#233;vrier d&#8217;une ann&#233;e bissextile, et que le r&#233;sultat tombe une ann&#233;e non bissextile, le jour est ramen&#233; au 28. Nannees peut &#234;tre n&#233;gatif.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="206" style="width: 206px;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Bissextile (</span><span class="f_Textestd">annee</span><span class="f_Variables">)</span></p>
</td>
<td width="372" style="width: 372px;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Renvoie </span><span class="f_Textestd">Vrai()</span><span class="f_Textestd"> si l&#8217;ann&#233;e est bissextile, False() sinon</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="206" style="width: 206px;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">_Aujourdhui</span></p>
</td>
<td width="372" style="width: 372px;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Variable globale contenant la date du jour</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="206" style="width: 206px;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">_DateSaisie</span></p>
</td>
<td width="372" style="width: 372px;"><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Variable globale contenant la date de cr&#233;ation de la commande</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="text-decoration: underline;">Remarque:</span><span class="f_Textestd"> Ces fonctions de date peuvent &#234;tre utilis&#233;es, par exemple, pour interdire un type de saisie avant ou apr&#232;s une certaine date ; pour appliquer automatiquement une promotion temporaire ; pour utiliser une m&#233;thode de prix li&#233;e &#224; une date limite ; etc&#8230;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouveau champ:</span><span class="f_Textestd"> </span><span class="f_Textestd">Langue</span><span class="f_Textestd"> dans la table </span><span class="f_Textestd">Cde.dbf</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Grilles de question:</span><span class="f_Textestd"> Depuis la version 6.4.16, l&#8217;affichage des grilles de question est plus compact. Bien que la taille de caract&#232;re soit toujours la m&#234;me (taille standard Windows), le rapprochement des lignes rend la lecture moins facile &#224; certains utilisateurs. Vous disposez donc d&#8217;une option qui vous permet d&#8217;agrandir la hauteur des lignes. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour cela, ajoutez cette nouvelle cl&#233; dans WinPro.ini :</span></p>
<p class="p_Textestd"><span class="f_Winproini">[system]</span></p>
<p class="p_Textestd"><span class="f_Winproini">Ligne Question =</span><span class="f_Textestd"> nombre de pixels que vous souhaitez ajouter &#224; chaque ligne. La valeur doit &#234;tre comprise entre 0 et 8. La valeur par d&#233;faut est de 0.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.18</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">2/9/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Commandes de vitrage:</span><span class="f_Textestd"> Jusqu&#8217;&#224; pr&#233;sent, pour calculer les commandes de vitrage, WinPro se contentait d&#8217;un calcul simplifi&#233;. Cette m&#233;thode avait l&#8217;avantage d&#8217;&#234;tre plus rapide qu&#8217;un calcul complet. Par contre, il &#233;tait impossible de d&#233;tecter certaines erreurs de calcul. Compte tenu de l&#8217;acc&#233;l&#233;ration de la vitesse des machines, cette ancienne m&#233;thode est abandonn&#233;e. Le ch&#226;ssis sera donc calcul&#233; compl&#232;tement lors de la constitution des commandes de vitrage.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Il se pourrait que ceci bloque, &#224; raison, quelques commandes vitrages dans certains cas, si le programme d&#233;tecte une erreur lors du calcul (erreur de param&#233;trage ou erreur de saisie).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Instruction UsinageExt:</span><span class="f_Textestd"> Une syntaxe alternative prou ces formules d&#8217;usinage (cf. NR. 6.1.7) vous permet de sp&#233;cifier une variable simple comme deuxi&#232;me param&#232;tre (indiquant l&#8217;origine de la position) ; dans ce cas, chaque valeur de l&#8217;usinage sera calcul&#233;e par rapport &#224; cette origine commune. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Par exemple, la formule suivante :</span></p>
<p class="p_Textestd"><span class="f_Variables"> pos : 2</span></p>
<p class="p_Textestd"><span class="f_Variables"> pos[1] := 1</span></p>
<p class="p_Textestd"><span class="f_Variables"> pos[2] := 2</span></p>
<p class="p_Textestd"><span class="f_Variables"> UsinageExt (pos, absolu, code_usinage, dormant, bord)</span></p>
<p class="p_Textestd"><span class="f_Textestd">produit exactement le m&#234;me r&#233;sultat que la formule :</span></p>
<p class="p_Textestd"><span class="f_Variables"> pos : 2</span></p>
<p class="p_Textestd"><span class="f_Variables"> org : 2</span></p>
<p class="p_Textestd"><span class="f_Variables"> pos[1] := 1</span></p>
<p class="p_Textestd"><span class="f_Variables"> pos[2] := 2</span></p>
<p class="p_Textestd"><span class="f_Variables"> org := absolu</span></p>
<p class="p_Textestd"><span class="f_Variables"> UsinageExt (pos, org, code_usinage, dormant, bord)</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Profils:</span><span class="f_Textestd"> Vous pouvez indiquer, sp&#233;cifiquement pour chaque profil, des longueurs de coupe minimum et maximum sur la scie par d&#233;faut. Si vous n&#8217;indiquez pas ces valeurs (valeur = 0), ce sont les longueurs de coupe standard de la scie qui seront appliqu&#233;es. Si vous indiquez </span><span class="f_Variables">-1</span><span class="f_Textestd"> pour ces valeurs, la longueur de coupe minimum ou maximum de la scie par d&#233;faut ne sera pas prise en compte.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Ajout de champs:</span><span class="f_Textestd"> </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ligne dans la table </span><span class="f_Textestd">InfoPst.dbf</span><span class="f_Textestd"> ; ce champ &#233;tablit le lien entre un profil et ses usinages.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Line dans la table </span><span class="f_Textestd">ReportQry.dbf</span><span class="f_Textestd"> ; il permet de d&#233;finir l&#8217;ordre ex&#233;cution des requ&#234;tes</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Suppression de champs:</span><span class="f_Textestd"> Report et SQL de la table Report.dbf.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelles variables:</span><span class="f_Textestd"> Les tableaux de variable globaux </span><span class="f_Variables">_RemplLargeurHT[]</span><span class="f_Textestd"> et </span><span class="f_Variables">_RemplHauteurHT[]</span><span class="f_Textestd"> contiennent respectivement les largeurs et hauteurs de chaque remplissage, &#233;tendues &#224; l&#8217;ext&#233;rieur du dormant, l&#8217;axe de la traverse adjacente, ou l&#8217;entraxe entre deux vantaux, selon les cas. Le principe d&#8217;utilisation est le m&#234;me que pour les variables </span><span class="f_Variables">_RemplLargeur[]</span><span class="f_Textestd"> et </span><span class="f_Variables">_RemplHauteur[]</span><span class="f_Textestd">. </span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Information suppl&#233;mentaire dans Det.dbf:</span><span class="f_Textestd"> Ajout d&#8217;une valeur </span><span class="f_Textestd">&#8216;F&#8217;</span><span class="f_Textestd"> dans le champ </span><span class="f_Textestd">Info2</span><span class="f_Textestd"> si </span><span class="f_Textestd">Type=&#8217;O&#8217;</span><span class="f_Textestd"> et </span><span class="f_Textestd">Section=&#8217;O&#8217; </span><span class="f_Textestd">; ceci permet de reconna&#238;tre les ouvrants fixes (vitrage dans le dormant).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Information suppl&#233;mentaire dans Lin.dbf:</span><span class="f_Textestd"> le champ </span><span class="f_Textestd">Origine</span><span class="f_Textestd"> contient d&#233;sormais </span><span class="f_Textestd">17</span><span class="f_Textestd"> pour les composants provenant de la quincaillerie (pr&#233;c&#233;demment, il contenait </span><span class="f_Textestd">2</span><span class="f_Textestd">, comme pour les composants d&#8217;ouvrant).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.17</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">30/8/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Ajout d'un champ:</span><span class="f_Textestd"> Un champ WLivr </span><span class="f_Textestd">a &#233;t&#233; ajout&#233; dans la table cde.dbf ; ce champ est la copie du champ de m&#234;me nom dans la table Commande.dbf (donc, m&#234;me signification et m&#234;me format).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Impression des plans d&#8217;atelier et contr&#244;le de prix:</span><span class="f_Textestd"> En cliquant avec le bouton droite de la souris sur un ch&#226;ssis dans la liste des ch&#226;ssis de l&#8217;encodage des commandes, vous pouvez imprimer individuellement, pour le ch&#226;ssis s&#233;lectionn&#233;, l&#8217;un des documents suivants : plan d&#8217;atelier d&#233;taill&#233;, plan d&#8217;atelier simplifi&#233;, contr&#244;le de prix de revient, contr&#244;le de prix de vente (ces deux derniers sont sujets au droit sur les prix de revient d&#233;fini pour l&#8217;utilisateur).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.16</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">26/8/2002</span></p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 8px;">&nbsp;</p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Ajout d&#8217;un champ:</span><span class="f_Textestd"> &#8216;Contact&#8217;</span><span class="f_Textestd"> en ent&#234;te de commande. Ce champ &#233;tant index&#233;, vous pouvez rechercher une commande sur ce contact.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Impression devis et confirmations:</span><span class="f_Textestd"> Vous pouvez filtrer la liste des commandes propos&#233;es par WinPro sur les crit&#232;res suivants : client, encodeur, date de saisie, date de livraison. Ces filtres sont &#233;galement disponibles pour quelques autres listes.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Impression des questions:</span><span class="f_Textestd"> Vous disposez d&#8217;une nouvelle variable dans les formules de questions : </span><span class="f_Variables">Imprimer</span><span class="f_Textestd">. Si cette variable contient la valeur </span><span class="f_Variables">Vrai()</span><span class="f_Textestd">, la question pourra &#234;tre imprim&#233;e sur les documents, si les autres conditions sont r&#233;unies pour l&#8217;impression (colonne </span><span class="f_Textestd">Doc.</span><span class="f_Textestd"> de la d&#233;finition des questions) ; si la variable contient </span><span class="f_Variables">Faux()</span><span class="f_Textestd">, la question ne sera pas imprim&#233;e. Vous pouvez donc d&#233;cider si une question doit &#234;tre imprim&#233;e au non, en fonction des r&#233;ponses aux autres questions.</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="color: #ff0000;">Remarque importante: La variable </span><span class="f_Variables">Imprimer</span><span class="f_Textestd" style="color: #ff0000;"> ne sera prise en compte que pour les questions encod&#233;es apr&#232;s la mise &#224; jour et le param&#233;trage de la variable. Toutes les questions/r&#233;ponses enregistr&#233;es avant l&#8217;installation de cette version seront imprim&#233;es comme auparavant. De m&#234;me, si vous modifiez le param&#233;trage de cette variable, toutes les questions enregistr&#233;es avant le param&#233;trage seront imprim&#233;es selon l&#8217;ancien param&#233;trage. En effet, l&#8217;information d&#8217;impression est not&#233;e au niveau de chaque question au moment de l&#8217;enregistrement de la commande.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Questions en couleur:</span><span class="f_Textestd"> Deux nouvelles variables vous permettent de contr&#244;ler la couleur d&#8217;une question &#224; l&#8217;&#233;cran (texte et fond) ; de plus, la couleur de texte sera utilis&#233;e pour l&#8217;impression des documents. La couleur de texte se contr&#244;le par la variable </span><span class="f_Variables">TexteQuestion</span><span class="f_Textestd">, qui peut prendre l&#8217;une des valeurs suivantes : </span><span class="f_Variables">@Noir</span><span class="f_Textestd"> (par d&#233;faut), </span><span class="f_Variables">@Bleu</span><span class="f_Textestd">, </span><span class="f_Variables">@Vert</span><span class="f_Textestd">, </span><span class="f_Variables">@Cyan</span><span class="f_Textestd">, </span><span class="f_Variables">@Rouge</span><span class="f_Textestd">, </span><span class="f_Variables">@Magenta</span><span class="f_Textestd">, </span><span class="f_Variables">@Jaune</span><span class="f_Textestd">, </span><span class="f_Variables">@Gris</span><span class="f_Textestd">. Le fond du texte se contr&#244;le par la variable </span><span class="f_Variables">FondQuestion</span><span class="f_Textestd">, qui peut prendre l&#8217;une des valeurs suivantes : </span><span class="f_Variables">@Blanc</span><span class="f_Textestd"> (par d&#233;faut), </span><span class="f_Variables">@Bleu</span><span class="f_Textestd">, </span><span class="f_Variables">@Vert</span><span class="f_Textestd">, </span><span class="f_Variables">@Cyan</span><span class="f_Textestd">, </span><span class="f_Variables">@Rouge</span><span class="f_Textestd">, </span><span class="f_Variables">@Magenta</span><span class="f_Textestd">, </span><span class="f_Variables">@Jaune</span><span class="f_Textestd">, </span><span class="f_Variables">@Gris</span><span class="f_Textestd">. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Notez que les couleurs de fond sont beaucoup plus p&#226;les que les couleurs de texte, ce qui permet de m&#233;langer n&#8217;importe quelle couleur de fond avec n&#8217;importe quelle couleur de texte, et conserver une bonne lisibilit&#233;. L&#8217;ensemble vous donne 64 combinaisons utilisables (8 couleurs de texte x 8 couleurs de fond).</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="color: #ff0000;">Remarque importante: Au niveau de l&#8217;impression, les couleurs de texte ne seront activ&#233;es que pour les questions encod&#233;es apr&#232;s la mise &#224; jour et le param&#233;trage des couleurs. Toutes les questions/r&#233;ponses enregistr&#233;es avant l&#8217;installation de cette version seront imprim&#233;es en noir. De m&#234;me, si vous modifiez le param&#233;trage des couleurs, toutes les questions enregistr&#233;es avant le param&#233;trage seront imprim&#233;es dans l&#8217;ancienne couleur. En effet, la couleur de texte est not&#233;e au niveau de chaque question au moment de l&#8217;enregistrement de la commande.</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="color: #ff0000;">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.15</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">16/8/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Quelques champs de la base de donn&#233;es ont &#233;t&#233; modifi&#233;s et/ou ajout&#233;s:</span><span class="f_Textestd"> WLivr dans la table commande.dbf ; DimInt dans les tables DetLot.dbf et Lin.dbf ; Type, Biblio, IdBiblio dans Fen.dbf . Voyez Dict.xls pour plus de d&#233;tails.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Propositions de commande:</span><span class="f_Textestd"> Un nouveau bouton vous donne la liste des fournisseurs pour lesquels il y a quelque chose &#224; commander.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.13 / 6.4.14</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">7/8/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Modification de l&#8217;interface utilisateur:</span><span class="f_Textestd"> Cette version contient une modification superficielle de l&#8217;interface utilisateur : la plupart des boutons sont report&#233;s dans une barre de boutons commune, en haut de l&#8217;&#233;cran ; ces boutons remplacent les principaux boutons (Chercher, Modifier, Enregistrer, &#8230;). L&#8217;interface clavier reste inchang&#233;e (touche ENTER et touches de fonctions). La principale diff&#233;rence, du point de vue de l&#8217;utilisateur, est le d&#233;placement des boutons en haut de l&#8217;&#233;cran. Ce d&#233;placement offre trois avantages : les boutons sont toujours au m&#234;me endroit ; leur situation en haut permet de d&#233;placer moins la souris ; la place disponible pour les donn&#233;es est plus importante.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Remarque : &#224; l&#8217;exception du bouton Supprimer, les nouveaux boutons ne comprennent plus le texte indiquant leur fonction. Seule l&#8217;ic&#244;ne et la touche de fonction correspondant sont indiqu&#233;es. Toutefois, il suffit de laisser le curseur de la souris une demi seconde sur un bouton pour qu&#8217;un texte indiquant sa fonction apparaisse. Ceci a permis de loger plus de boutons dans la barre de boutons.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Autre remarque :</span><span class="f_Textestd"> Quelques &#233;crans ont &#233;t&#233; remani&#233;s, de fa&#231;on &#224; mieux profiter de la place lib&#233;r&#233;e. Les &#233;crans de saisie de commande et de biblioth&#232;que, notamment, voient tous les boutons (nouveau chassis, &#8230;) report&#233;s en haut de la fen&#234;tre. La page &#8216;Chassis&#8217; de la saisie de commande a &#233;galement &#233;t&#233; revue (voir aussi la note sur les remises vitrages).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Remises vitrage:</span><span class="f_Textestd"> Si vous utilisez les remises individuelles par ch&#226;ssis (calcul&#233;es ou encod&#233;es), vous pouvez maintenant d&#233;finir s&#233;par&#233;ment les remises des vitrages (3 niveaux de remise). Ces remises peuvent &#233;galement &#234;tre contr&#244;l&#233;es par des variables globales (</span><span class="f_Variables">_RemiseVitrage</span><span class="f_Textestd">, </span><span class="f_Variables">_RemiseVitrage2</span><span class="f_Textestd">, </span><span class="f_Variables">_RemiseVitrage3</span><span class="f_Textestd">), comme pour les autres remises.</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="color: #ff0000;">ATTENTION ! IMPORTANT ! Si vous utilisez d&#233;j&#224; les remises calcul&#233;es par formule, il est indispensable de rechercher toutes les occurrences des variables </span><span class="f_Variables">_Remise</span><span class="f_Textestd" style="color: #ff0000;">, </span><span class="f_Variables">_Remise2</span><span class="f_Textestd" style="color: #ff0000;">, </span><span class="f_Variables">_Remise3</span><span class="f_Textestd" style="color: #ff0000;">, et d&#8217;ajouter &#224; chaque fois une d&#233;finition de </span><span class="f_Variables">_RemiseVitrage</span><span class="f_Textestd" style="color: #ff0000;">, </span><span class="f_Variables">_RemiseVitrage2</span><span class="f_Textestd" style="color: #ff0000;">, </span><span class="f_Variables">_RemiseVitrage3</span><span class="f_Textestd" style="color: #ff0000;"> (p.ex. &#8216;</span><span class="f_Variables">_RemiseVitrage := _Remise</span><span class="f_Textestd" style="color: #ff0000;">&#8217;. Sans quoi, soit aucune remise vitrage ne sera appliqu&#233;e, soit la remise g&#233;n&#233;rale d&#233;finie dans la commande sera appliqu&#233;e sur le vitrage, suivant la mani&#232;re dont vos commandes sont encod&#233;es.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Exportation des donn&#233;es:</span><span class="f_Textestd"> WinPro vous offre une nouvelle fonctionnalit&#233; : l&#8217;exportation s&#233;lective du param&#233;trage. Cette fonctionnalit&#233; permet, &#224; partir de chaque &#233;cran de saisie en mode visualisation, d&#8217;exporter les donn&#233;es pr&#233;sent&#233;es, ainsi que toutes les donn&#233;es qui y sont rattach&#233;es. Par exemple, si vous exportez une quincaillerie, seront export&#233;s automatiquement tous les articles, profils, main d&#8217;&#339;uvre, dessins, usinages, messages, &#8230; qui composent la quincaillerie. La liste ci-dessous &#233;num&#232;re, pour chaque type d&#8217;exportation, quelles sont les donn&#233;es export&#233;es. En outre, pour chaque donn&#233;e export&#233;e, reportez-vous &#224; la description de l&#8217;exportation de cette donn&#233;e, car cela peut impliquer l&#8217;exportation d&#8217;autres donn&#233;es. (ex. Article exporte fournisseur, qui exporte devise et langue ; Ouvrant exporte composant qui exporte profil qui exporte article qui exporte fournisseur&#8230;).</span></p>
<p class="p_Textestd"><span class="f_Textestd">Le fichier export&#233; est g&#233;n&#233;ralement en format texte ; il comporte l&#8217;extension .WPT, ainsi qu&#8217;un pr&#233;fixe qui vous aidera &#224; reconna&#238;tre la nature des donn&#233;es export&#233;es (p.ex Art_... pour les articles, Sys_... pour les syst&#232;mes, etc).</span></p>
<p class="p_Textestd"><span class="f_Textestd">Si la taille du fichier export&#233; est sup&#233;rieure &#224; 1000 octets, WinPro vous proposera de compacter le fichier. Dans ce cas, l&#8217;extension du fichier sera .WPZ.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Bien entendu, vous disposez d&#8217;une fonction d&#8217;importation. Celle-ci est disponible &#224; partir de chaque &#233;cran de saisie, en mode recherche.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;"><table cellspacing="0" cellpadding="4" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td colspan="3" width="611" style="width: 611px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Liste des tables export&#233;es</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Table &nbsp; &nbsp;  </span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pr&#233;fixe &nbsp; &nbsp;  </span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Tables export&#233;es</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">AccBibl.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">AccessCh.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Acc_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Compos.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrPrix.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrClr.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Traduct.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aerateur.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aer_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Compos.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Question.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrPrix.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrClr.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Traduct.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">ArtComp.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Article.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">ArtFou.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Devise.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Fourn.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Article.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Art_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">ArtFou.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrPrix.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Traduct.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">LienPst.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Fourn.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Local.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Categ.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Dxf.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Colis.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">LaqArt.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">ArtComp.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Article.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Battee.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Biblio.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Bib_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Det1Bibl.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">CaClient.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Cadre.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Cad_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Traduct.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Caisson.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Cai_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Compos.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">ClrCmp.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Question.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrPrix.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrClr.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Traduct.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Casier.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Cas_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">CatCli.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">CatCli_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Categ.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">CatArt_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Chauffeur.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Chf_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Cintre.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">FCtr_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">ClrCintr.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Traduct.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Client.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Cli_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Var.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">CaClient.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Coeff.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Langue.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Repres.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">CatCli.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Devise.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">ZoneLivr.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Paiement.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Client.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">ClrCintr.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Couleur.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Work.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">ClrCmp.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Couleur.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Coeff.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Coeff_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">CoinParc.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Article.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Couleur.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Colis.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Colis_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Compos.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Profil.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Article.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Work.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Dessin.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Vitrage.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Panneau.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Couleur.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Cadre.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Message.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Sub.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Usinage.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrpUsg.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Couleur.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Clr_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Traduct.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Couleur.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Coulisse.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Coul_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Compos.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">ClrCmp.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Question.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrPrix.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrClr.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Traduct.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Croisill.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Crx_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Compos.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">ClrCmp.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Question.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrPrix.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrClr.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Traduct.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Dessin.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Dess_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Det1Bibl.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Det2Bibl.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">RehBibl.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Det2Bibl.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Det3Bibl.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">AccBibl.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Det3Bibl.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">DetParcl.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Profil.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Article.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Couleur.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">DetTarif.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">TravTar.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">DetVolet.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Devise.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Dev_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">HistoDev.dbf (optionnel)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Dormant.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Drm_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Compos.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Question.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrPrix.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrClr.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Battee.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Traduct.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Dxf.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Dxf_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Equipe.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Eqp_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">FouLivr.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Fourn.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Fourn_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Devise.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Langue.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">FouLivr.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">FournVit.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Fourn.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrPrix.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">GrClr.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">GrPrix.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">GrpUsg.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">GrpUsg_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Usinage.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">HistoDev.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">HistoPal.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Langue.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Lang_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">LaqArt.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Article.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Couleur.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">LineCap.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Local.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Empl_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Message.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Msg_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Traduct.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Ouvrant.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Ouvr_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Compos.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Question.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrPrix.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrClr.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Traduct.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Quinc.dbf (optionnel)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Paiement.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Cond_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Palette.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pal_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">HistoPal.dbf (optionnel)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">PannDeco.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">PanDeco_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Traduct.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Dessin.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Dxf.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Article.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Work.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Panneau.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pann_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Dessin.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Dxf.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Work.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Article.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Traduct.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">PannFabr.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">PanFabr_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Compos.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Question.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrPrix.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrClr.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">ClrCmp.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Traduct.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Panneau.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Parclose.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Parcl_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Compos.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Traduct.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">DetParcl.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">CoinParc.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Perim.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Peri_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Rehausse.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pose.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pose_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">PosteAtl.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Atl_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">LienPst.dbf (optionnel)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">ProdLine.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">LProd_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">ProdSpot.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">LineCap.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">ProdSpot.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">ProfChut.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Article.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Couleur.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">ProfCol.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Article.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Couleur.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Profil.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Prf_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">ProfCol.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">ProfChut.dbf (uniquement pour pr&#233;d&#233;coupe)</span></p>
<p class="p_Textestd"><span class="f_Textestd">Article.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Traduct.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Question.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">SelQuest.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">TradQues.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Quinc.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Quinc_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Compos.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Question.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrPrix.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrClr.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Traduct.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Ouvrant.dbf (optionnel)</span></p>
<p class="p_Textestd"><span class="f_Textestd">Dessin.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Rehausse.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Reh_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Compos.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Question.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrPrix.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrClr.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Traduct.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">RehBibl.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Repres.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Repr_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Scie.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Scie_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">SelQuest.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">TradSelQ.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Sub.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Sub_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Systeme.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Sys_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">ClrCmp.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Dormant.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Ouvrant.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Parclose.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Rehausse.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Traverse.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Caisson.dbf (caisson par d&#233;faut)</span></p>
<p class="p_Textestd"><span class="f_Textestd">Panneau.dbf (panneau par d&#233;faut si vitrage interdit)</span></p>
<p class="p_Textestd"><span class="f_Textestd">Vitrage.dbf (vitrage par d&#233;faut)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Tablier.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Tabl_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Compos.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">ClrCmp.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrPrix.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrClr.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Question.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Traduct.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Tarif.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">TarCha_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">DetTarif.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">TarVolet.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">TarVol_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">DetVolet.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Tole.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Tole_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">TradQues.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Langue.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">TradSelQ.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Langue.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Traduct.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Langue.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Traverse.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Tra_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Compos.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Question.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrPrix.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">GrClr.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Traduct.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">TravOuvT.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">TravTar.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Pas d&#8217;exportation individuelle</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">TravOuvT.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">User.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">User_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Usinage.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Usg_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Vitrage.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Vit_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">FournVit.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Dessin.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Work.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Dxf.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Traduct.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">Vitrage.dbf</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Work.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Wrk_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Aucune</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="103" style="width: 103px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">ZoneLivr.dbf</span></p>
</td>
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">ZLivr_</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Equipe.dbf</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_ImageCaption">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.12</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">26/6/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Commandes vitrage (EDIV):</span><span class="f_Textestd"> </span><span class="f_Textestd">Un petit changement a &#233;t&#233; apport&#233; au param&#233;trage dans WinPro.ini : la section propre &#224; chaque fournisseur portait en titre le nom du protocole (p.ex. </span><span class="f_Winproini">[Pilkington]</span><span class="f_Textestd">). </span></p>
<p class="p_Textestd"><span class="f_Textestd">Dor&#233;navant, il faut compl&#233;ter ce nom par un tiret suivi du code du fournisseur (pas d&#8217;espace !), tel que d&#233;fini dans votre table fournisseurs (p.ex. </span><span class="f_Winproini">[Pilkington-PILK]</span><span class="f_Textestd">. Les majuscules et minuscules n&#8217;ont pas d&#8217;importance.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Table Fen.dbf:</span><span class="f_Textestd"> Il y a quelques nouveaux champs ; voir Dict.xls pour plus d&#8217;informations.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.11</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">21/6/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Mode de calcul d&#233;bours&#233; ou commercial:</span><span class="f_Textestd"> Si votre param&#233;trage peut utiliser ces deux modes de calcul, vous pouvez maintenant en plus d&#233;finir pour chaque tarif s&#8217;il utilise par d&#233;faut l&#8217;un ou l&#8217;autre des modes de calcul. Pour cela, ouvrez le dans le dialogue de d&#233;finition de la marge (menu Donn&#233;es | Coefficient de prix), et cochez la case ad&#233;quate si vous d&#233;sirez que le calcul au d&#233;bours&#233; soit appliqu&#233; par d&#233;faut avec le tarif en question. Notez qu&#8217;il ne s&#8217;ag&#238;t que d&#8217;une pr&#233;d&#233;finition. En effet, vous pouvez toujours modifier le mode de calcul par formule (variable client, syst&#232;me ou param&#233;trage ch&#226;ssis).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Liste des devis:</span><span class="f_Textestd"> Vous pouvez obtenir une liste des devis encod&#233;s, et les imprimer en bloc &#224; partir de cette liste. Vous acc&#233;dez &#224; cette fonctionnalit&#233; par un menu </span><span class="f_Textestd">Impression des devis</span><span class="f_Textestd"> dans le menu </span><span class="f_Textestd">Commandes</span><span class="f_Textestd">. Vous pouvez imprimer les trois formes de devis. N&#8217;oubliez pas que vous pouvez trier la liste sur n&#8217;importe laquelle de ses colonnes pour trouver plus facilement les devis qui vous int&#233;ressent.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Croisillons:</span><span class="f_Textestd"> IMPORTANT ! Si vous encodez dans l&#8217;ordre hauteur x largeur, plut&#244;t que dans l&#8217;ordre par d&#233;faut largeur par hauteur, la modification suivante vous concerne : la saisie du nombre d&#8217;alv&#233;oles a &#233;t&#233; invers&#233;e ; vous saisissez maintenant d&#8217;abord le nombre d&#8217;alv&#233;oles verticales, puis le nombre d&#8217;alv&#233;oles horizontales. Bien entendu, les fen&#234;tres d&#233;j&#224; saisies tiennent compte de cette modification, et affichent correctement le nombre d&#8217;alv&#233;oles.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Information suppl&#233;mentaire dans la table InfoPst.dbf:</span><span class="f_Textestd"> Un champ </span><span class="f_Textestd">Origine</span><span class="f_Textestd"> a &#233;t&#233; ajout&#233;. Voyez &nbsp;Dict.xls pour plus d&#8217;information.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Information suppl&#233;mentaire dans la table Fen.dbf:</span><span class="f_Textestd"> Un champ </span><span class="f_Textestd">Type</span><span class="f_Textestd"> a &#233;t&#233; ajout&#233;. Voyez &nbsp;Dict.xls pour plus d&#8217;information.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.10</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">17/6/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Vitrages:</span><span class="f_Textestd"> Vous pouvez, pour chaque couple vitrage/fournisseur, d&#233;finir une formule, qui peut d&#8217;une part affecter le prix de revient du vitrage, et d&#8217;autre part valider techniquement ou non le vitrage. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous disposez des variables suivantes :</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 56px;"><table cellspacing="0" cellpadding="4" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="150" style="width: 150px; border: solid 1px ;"><p><span class="f_Variables">Largeur</span></p>
</td>
<td width="406" style="width: 406px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Largeur du vitrage (en mm)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="150" style="width: 150px; border: solid 1px ;"><p><span class="f_Variables">Hauteur</span></p>
</td>
<td width="406" style="width: 406px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Hauteur du vitrage (en mm)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="150" style="width: 150px; border: solid 1px ;"><p><span class="f_Variables">Surface</span></p>
</td>
<td width="406" style="width: 406px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Surface du vitrage (en m&#178;)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="150" style="width: 150px; border: solid 1px ;"><p><span class="f_Variables">NumeroOuvrant</span></p>
</td>
<td width="406" style="width: 406px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Num&#233;ro de l&#8217;ouvrant auquel le vitrage appartient</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="150" style="width: 150px; border: solid 1px ;"><p><span class="f_Variables">NumeroRemplissage</span></p>
</td>
<td width="406" style="width: 406px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Num&#233;ro de remplissage correspondant au vitrage</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="150" style="width: 150px; border: solid 1px ;"><p><span class="f_Variables">Position</span></p>
</td>
<td width="406" style="width: 406px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Num&#233;ro de vantail auquel le vitrage appartient</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="150" style="width: 150px; border: solid 1px ;"><p><span class="f_Variables">Forme</span></p>
</td>
<td width="406" style="width: 406px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Forme du vitrage ; peut valoir </span><span class="f_Variables">Rectangle</span><span class="f_Textestd">, </span><span class="f_Variables">Trapeze</span><span class="f_Textestd">, etc&#8230;</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="150" style="width: 150px; border: solid 1px ;"><p><span class="f_Variables">Epaisseur</span></p>
</td>
<td width="406" style="width: 406px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Epaisseur du vitrage</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Attention ! Les dimensions donn&#233;es ne sont pas arrondies !</span></p>
<p class="p_Textestd"><span class="f_Textestd">En sortie, vous pouvez cr&#233;er les variables suivantes :</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 56px;"><table cellspacing="0" cellpadding="4" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="153" style="width: 153px; border: solid 1px ;"><p><span class="f_Variables">Coefficient</span></p>
</td>
<td width="406" style="width: 406px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Coefficient multiplicateur du prix.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="153" style="width: 153px; border: solid 1px ;"><p><span class="f_Variables">Valide</span></p>
</td>
<td width="406" style="width: 406px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Vaut </span><span class="f_Variables">Vrai()</span><span class="f_Textestd"> si le vitrage est techniquement acceptable ; sinon </span><span class="f_Variables">Faux()</span><span class="f_Textestd">. Dans ce dernier cas, WinPro tentera d&#8217;utiliser le vitrage suivant, tel que d&#233;fini dans la description du vitrage.</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">Il n&#8217;est pas obligatoire de cr&#233;er toutes les variables ; vous pouvez vous contenter de cr&#233;er celles qui vous sont utiles (ou &#233;ventuellement aucune).</span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous pouvez &#233;galement g&#233;n&#233;rer des message ou des &#233;checs depuis ces formules de vitrage.</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="font-style: italic;">Remarque importante: Vous disposez, au niveau des formules de vitrage comme dans toutes les formules WinPro, de l&#8217;acc&#232;s aux variables globales d&#233;j&#224; d&#233;finies, ainsi qu&#8217;aux questions de dormant. </span></p>
<p class="p_Textestd"><span class="f_Textestd" style="font-style: italic;">Ceci vous permet par exemple, via la variable Valide, de faire varier les contraintes techniques du vitrage en fonction de sa situation g&#233;ographique.</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="font-style: italic;">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Vitrages:</span><span class="f_Textestd"> une nouvelle m&#233;thode de calcul de prix a &#233;t&#233; ajout&#233;e. Vous pouvez d&#233;finir une liste de prix au m&#232;tre carr&#233;, en faisant varier le prix en fonction de la surface du verre. Un prix minimum peut &#234;tre d&#233;fini.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Information suppl&#233;mentaire dans la table Lin.dbf:</span><span class="f_Textestd"> Un champ Origine a &#233;t&#233; ajout&#233;. Voyez &nbsp;Dict.xls pour plus d&#8217;information.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Fonction Appliquer:</span><span class="f_Textestd"> Cette fonction permet de g&#233;n&#233;rer, &#224; partir d&#8217;une seule formule, plusieurs profils, qui peuvent &#234;tre tous de longueur diff&#233;rente. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Jusqu&#8217;&#224; pr&#233;sent, cette fonction n&#8217;&#233;tait disponible que pour les profils de dormant et de traverse, ce qui permettait &#224; WinPro de calculer des ch&#226;ssis comportant &#224; la fois des frappes int&#233;rieures et ext&#233;rieures, en segmentant le dormant &#224; chaque inversion de frappe (syst&#232;me &#8216;hollandais&#8217;). </span></p>
<p class="p_Textestd"><span class="f_Textestd">Dor&#233;navant, cette fonction est disponible pour toutes les formules de profils (y compris donc dormant, ouvrants, quincaillerie, panneaux fabriqu&#233;s, croisillons, etc). Exemples d&#8217;utilisation : tringles de quincaillerie aluminium, panneaux planchettes, etc&#8230;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Au point de vue des usinages, cette fonction impose une restriction : les usinages de types &#8216;SPECIAL&#8217; et &#8216;AUTO&#8217; sont support&#233;s ; les usinages standard ne le sont pas. De plus, pour que les usinages de type &#8216;SPECIAL&#8217; soient support&#233;s, il faut que chaque morceau de profil g&#233;n&#233;r&#233; soit d&#8217;une cat&#233;gorie d&#8217;usinage diff&#233;rente, et que cette cat&#233;gorie soit correctement renseign&#233;e en param&#232;tre de l&#8217;instruction d&#8217;usinage ; faute de quoi, sur un m&#234;me c&#244;t&#233; de cadre, chaque morceau de profil recevra chaque usinage correspondant &#224; sa cat&#233;gorie d&#8217;usinage.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Usinages &#8216;standard&#8217;:</span><span class="f_Textestd">  par principe ils s&#8217;appliquent &#224; des morceaux de profil qui ne doivent exister qu&#8217;&#224; un seul exemplaire par c&#244;t&#233; (notion de &#8216;profil principal&#8217; ou de &#8216;renfort &#8217;). Il n&#8217;est donc pas possible &#224; WinPro de d&#233;cider pour un m&#234;me c&#244;t&#233; de cadre sur quel morceau de profil les usinages doivent &#234;tre envoy&#233;s. WinPro enverra donc les usinages sur tous les profils pr&#233;sents. Notez toutefois que, dans le cas des dormants segment&#233;s pour inversion de frappe, chaque segment aura une position diff&#233;rente ; les usinages seront donc envoy&#233;s directement sur le bon morceau.</span></p>

</td></tr></table>
</div>

</body>
</html>
