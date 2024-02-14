<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["6.0.07"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn60xx.php"; }
else { parent.quicksync('a11.12.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>6.0.07</title>
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
     <a href="rn61xx.php">Previous</a>&nbsp;
     <a href="rn52xx.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p style="margin: 0px 0px 0px 8px;">&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.0.07</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">2/5/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Limites de d&#233;coupe:</span><span class="f_Textestd"> Vous disposez de 3 nouveaux champs dans l&#8217;onglet optimisation de la fen&#234;tre de param&#233;trage des profils. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ces onglets vous permettent de d&#233;finir, pour chaque profil, les longueurs minimum et maximum accept&#233;es par la scie &#224; laquelle le profil a &#233;t&#233; attribu&#233;. Pour d&#233;couper une valeur inf&#233;rieure &#224; ce minimum ou sup&#233;rieure &#224; ce maximum, vous pouvez d&#233;finir un 2</span><span class="f_Textestd">&#232;me</span><span class="f_Textestd"> num&#233;ro de scie ; les morceaux de profils correspondant &#224; ces longueurs seront optimis&#233;s s&#233;par&#233;ment et envoy&#233;s</span><span style="font-family: 'Tahoma'; color: #000000;"> sur cette scie.</span></p>
<p class="p_Textestd"><span style="font-family: 'Tahoma'; color: #000000;">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.0.05 &amp; 06</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">30/4/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Release de maintenance:</span><span class="f_Textestd"> Stabilisation de la version 6: </span></p>
<p class="p_Textestd"><span class="f_Textestd">Affinage du calcul des sections variables. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Correction d&#8217;un probl&#232;me occasionnel d&#8217;exportation de commandes.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Correction d&#8217;un bug emp&#234;chant la suppression des biblioth&#232;ques</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.0.04</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">16/4/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Textes des commandes:</span><span class="f_Textestd"> Tous les textes de d&#233;but et fin de document client ont &#233;t&#233; regroup&#233;s sur une seule page ; deux onglets en bas de page vous permettent de choisir le document sur lequel vous souhaitez travailler.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.0.03</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">9/4/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Gestion des colis:</span><span class="f_Textestd"> Cette version de WinPro introduit un nouveau module optionnel, qui permet de pr&#233;parer des listes et &#233;tiquettes de colis pour chaque commande.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.0.02</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">27/3/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Format de la base de donn&#233;es:</span><span class="f_Textestd"> La base de donn&#233;es a &#233;t&#233; mise au format Visual FoxPro 6.0. Ceci permet &#224; la fois de r&#233;duire sensiblement le volume total des tables, et d&#8217;acc&#233;l&#233;rer la lecture et l&#8217;&#233;criture. Les champs affect&#233;s sont les champs m&#233;mo (dont l&#8217;index passe de 10 &#224; 4 caract&#232;res) et les champs num&#233;riques qui sont maintenant enregistr&#233;s en format binaire (8 caract&#232;res pour les nombres d&#233;cimaux, 4 pour les nombres entiers).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">1.Ceci implique qu&#8217;une fois mise &#224; jour, la base de donn&#233;es sera incompatible avec les pr&#233;c&#233;dentes versions de WinPro. Il est donc imp&#233;ratif de faire une sauvegarde compl&#232;te de WinPro avant la mise &#224; jour !!!</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">2.Toute mise &#224; jour de WinPro/D devra imp&#233;rativement &#234;tre accompagn&#233;e d&#8217;une base de donn&#233;es cr&#233;&#233;e &#224; partir de WinPro version 6.0.2 minimum. En effet le changement de format des champs num&#233;riques est incompatible avec la m&#233;thode de cryptage des informations utilis&#233;e avec l&#8217;ancien format.</span></p>
<p style="margin: 0px 0px 0px 29px;"><img src="img/img_112.jpg" width="652" height="368" border="0" vspace="1" hspace="1" alt="img_112"></p>
<p style="margin: 0px 0px 0px 5px;"><span class="f_ImageCaption">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Couleur de fond des titres et totaux:</span><span class="f_Textestd"> sur les documents client et atelier, la couleur de fond des cadres contenant les titres et totaux est maintenant param&#233;trable. Pour acc&#233;der &#224; ce param&#232;tre, ouvrez la fen&#234;tre Utilitaires | Pr&#233;f&#233;rences ; vous trouverez les param&#232;tres de r&#233;glage &#224; droite de la page Documents client (1&#232;re page)</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Positionnement des profils:</span><span class="f_Textestd"> La position exacte de chaque profil de cadre dormant, ouvrant et de traverse est normalement connue par WinPro. Elle est utilis&#233;e pour positionner les usinages. Cette position vous est maintenant accessible pour vous permettre de d&#233;placer le profil selon vos besoins, de mani&#232;re &#224; contr&#244;ler tr&#232;s pr&#233;cis&#233;ment le positionnement des usinages. Vous disposez pour cela de 4 variables : x</span><span class="f_Variables">0</span><span class="f_Textestd">, </span><span class="f_Variables">y0</span><span class="f_Textestd">, </span><span class="f_Variables">x1</span><span class="f_Textestd">, </span><span class="f_Variables">y1</span><span class="f_Textestd">. Chaque paire x.., y.. indique la position d&#8217;un bout du profil dans le ch&#226;ssis, le point 0,0 se trouvant en bas &#224; gauche du dormant, et les coordonn&#233;es croissant vers le haut et la droite. Vous pouvez affecter de nouvelles valeurs &#224; ces variables ;WinPro en tiendra compte pour calculer les usinages.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Attention ! en principe, un calcul simple permettrait de d&#233;duire la longueur du profil &#224; partir de ces 4 variables, par la formule</span><img src="img/img_113.jpg" width="121" height="22" border="0" vspace="1" hspace="1" alt="img_113"><span class="f_Textestd">; toutefois, WinPro se contente de r&#233;cup&#233;rer la variable longueur habituelle. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous &#234;tes donc libre d&#8217;affecter aux variables x0, y0, x1, y1 les valeurs qui vous semblent appropri&#233;es.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Remarque : Ne consid&#233;rez pas syst&#233;matiquement que </span><span class="f_Variables">x0</span><span class="f_Textestd"> est inf&#233;rieur &#224; </span><span class="f_Variables">x1</span><span class="f_Textestd"> ni que </span><span class="f_Variables">y0</span><span class="f_Textestd"> est inf&#233;rieur &#224; </span><span class="f_Variables">y1</span><span class="f_Textestd">. Cela d&#233;pend en effet du c&#244;t&#233; de cadre en cours de traitement.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Cette fonctionnalit&#233; sera g&#233;n&#233;ralement utilis&#233;e lorsque vous modifiez la longueur de base du profil (p.ex. profil de renfort acier sur lequel vous souhaitez effectuer des usinages).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Contr&#244;le atelier:</span><span class="f_Textestd"> Vous pouvez, si vous disposez du contr&#244;le de fin de cha&#238;ne, d&#233;finir un nombre quelconque de postes de contr&#244;les en atelier. Ces postes, &#233;quip&#233;s d&#8217;un lecteur de code &#224; barre, pourront noter la date et l&#8217;heure de passage de chaque fen&#234;tre, ainsi que le code de l&#8217;utilisateur et celui du poste. Pour activer cette fonctionnalit&#233;, il vous faut cr&#233;er, sur chaque poste atelier, un fichier WinPro.ini, dans le r&#233;pertoire racine de l&#8217;unit&#233; C:\. Ce fichier comportera les renseignements suivants :</span></p>
<p class="p_Textestd"><span class="f_Winproini">[WorkPlace]</span></p>
<p class="p_Textestd"><span class="f_Winproini">Id =</span><span class="f_Textestd"> xxx &nbsp; &nbsp; &nbsp; &nbsp;nom du poste de travail (max. 16 car.)</span></p>
<p class="p_Textestd"><span class="f_Winproini">Control only  &nbsp; &nbsp; &nbsp; &nbsp;= 0 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">indique que le poste cl&#244;ture la fabrication de cette fen&#234;tre (le passage de la fen&#234;tre &#224; ce poste est not&#233;.)</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 1</span><span class="f_Textestd">  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;pas de cl&#244;ture possible (le passage de la fen&#234;tre &#224; ce poste est not&#233;.)</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">L&#8217;historique est enregistr&#233; dans la table data\atelier.dbf, qui comporte les champs suivants :</span></p>
<p class="p_Textestd"><span class="f_Textestd">Commande, C, 16 &nbsp; &nbsp; &nbsp; ; num&#233;ro de commande</span></p>
<p class="p_Textestd"><span class="f_Textestd">Chassis, C, 16 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ; num&#233;ro de ch&#226;ssis</span></p>
<p class="p_Textestd"><span class="f_Textestd">User, C, 16 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ; code utilisateur</span></p>
<p class="p_Textestd"><span class="f_Textestd">Poste, C, 16 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ; poste de travail</span></p>
<p class="p_Textestd"><span class="f_Textestd">Date, D &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ; format AAAAMMJJ</span></p>
<p class="p_Textestd"><span class="f_Textestd">Heure, C, 6 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ; format HHMMSS</span></p>
<p class="p_Textestd"><span class="f_Textestd">Cette table est index&#233;e suivant l&#8217;expression suivante :</span></p>
<p class="p_Textestd"><span class="f_Textestd">  &nbsp; COMMANDE+CHASSIS+POSTE+USER.</span></p>
<p class="p_Textestd"><span class="f_Textestd">La suppression d&#8217;une commande entra&#238;ne automatiquement la suppression des enregistrements qui lui correspondent dans cette table. Si ce comportement ne vous convient pas, vous pouvez mettre &#224; 0 le champ Cascade de la table data\links.dbf, pour l&#8217;enregistrement dont le champ Master contient la cha&#238;ne &#8216;Commande&#8217; et dont le champ Child contient la cha&#238;ne &#8216;Atelier&#8217;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.0.01</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">23/3/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Optimisation des profils secondaires:</span><span class="f_Textestd"> Vous pouvez optimiser s&#233;par&#233;ment les profils li&#233;s &#224; une ou plusieurs scies pr&#233;-d&#233;finies. Ceci vous permet de regrouper les commandes de fa&#231;on diff&#233;rente des lots.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Attention ! Cette m&#233;thode introduit une relative impr&#233;cision dans la gestion de stock des profils ainsi optimis&#233;s. En effet, WinPro consid&#232;re qu&#8217;ils sont optimis&#233;s au niveau des lots standards. La nouvelle m&#233;thode permet de recombiner les commandes pour une optimisation diff&#233;rente, mais cette nouvelle optimisation n&#8217;a pas d&#8217;effet sur le stock, puisque le stock est d&#233;j&#224; mis &#224; jour au niveau du lot. Il y aura donc de l&#233;g&#232;res diff&#233;rences sur les consommations effectives.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Par contre, le stock de chutes est g&#233;r&#233; en fonction de cette nouvelle optimisation.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour activer cette fonction, ajoutez la cl&#233; suivante dans le fichier WinPro.ini:</span></p>
<p class="p_Textestd"><span class="f_Winproini">[Optimisation]</span></p>
<p class="p_Textestd"><span class="f_Winproini">Scie accessoire = </span><span class="f_Textestd">xx;yy;zz &nbsp; &nbsp; &nbsp; &nbsp;xx, yy et zz repr&#233;sentant les num&#233;ros de scie, s&#233;par&#233;s chaque fois par le signe ';'. Le nombre de scie d&#233;finies sur cette ligne est libre.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Cette optimisation g&#233;n&#233;rera les documents et fichiers ad&#233;quats (liste de chargement, &#233;tiquettes, &#8230; et fichiers de pilotage des scies).</span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous avez en plus la possibilit&#233; d&#8217;imprimer les documents de pr&#233;paration de livraison.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.0.00</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">22/3/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Sections variables:</span><span class="f_Textestd"> Vous pouvez dor&#233;navant calculer la section de chaque c&#244;t&#233; des dormants, vantaux et traverses. Pour cela, vous devez modifier la valeur de nouvelles variables, et ce dans la premi&#232;re formule de profils pour chacun des cas.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour les dormants, vous disposez des variables </span><span class="f_Variables">PetiteHauteur</span><span class="f_Textestd"> et </span><span class="f_Variables">GrandeHauteur</span><span class="f_Textestd">. Ces variables peuvent recevoir une valeur diff&#233;rente pour chacun des c&#244;t&#233;s.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour les traverses, vous disposez des m&#234;mes variables que pour les dormants. Attention, ces valeurs repr&#233;sentent la dimension total de la traverse.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour les ouvrants, le syst&#232;me de fonctionnement est le m&#234;me, mais les noms des variables sont </span><span class="f_Variables">EpaisseurInterieure</span><span class="f_Textestd"> et </span><span class="f_Variables">EpaisseurExterieure</span></p>
<p class="p_Textestd"><span class="f_Variables">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="318" style="width: 318px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarque</span><span style="text-decoration: underline;">:</span></p>
<p style="margin: 0px 0px 0px 13px;">Les sections variables doivent <span style="font-weight: bold; color: #ff0000;">impérativement </span>être paramétrées dans la première page formule du cadre concerné, sans quoi elles ne sont pas prises en compte !</p>
</td>
</tr>
</table>
</div>
<p style="text-align: center;"><span class="f_Variables">&nbsp;</span></p>

</td></tr></table>
</div>

</body>
</html>
