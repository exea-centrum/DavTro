<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["6.4.2x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn642x.php"; }
else { parent.quicksync('a11.8.5'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>6.4.2x</title>
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
     <a href="rn643x.php">Previous</a>&nbsp;
     <a href="rn641x.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p style="text-align: center; margin: 0px 0px 0px 8px;"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.29</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">23/10/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Gestion de champs obsol&#232;tes:</span><span class="f_Textestd"> Divers champs</span><span class="f_Textestd">, non utilis&#233;s, peuvent &#234;tre supprim&#233;s des tables AccessCh.dbf, Article.dbf, Client.dbf, Commande.dbf, Croisill.dbf, Dessin.dbf, Det1Bibl.dbf, Detail.dbf, Dormant.dbf, Equipe.dbf, GrpUsg.dbf, JnlStock.dbf, Lot.dbf, Message.dbf, Ouvrant.dbf, Profil.dbf, Quinc.dbf, ResCli.dbf, Systeme.dbf, User.dbf, Usinage.dbf, ZoneLivr.dbf. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour activer la suppression, avant de lancer la nouvelle version, ajoutez la ligne suivante dans le fichier </span><span class="f_Textestd">WinPro.ini</span><span class="f_Textestd"> :</span></p>
<p class="p_Textestd"><span class="f_Winproini">[system]</span></p>
<p class="p_Textestd"><span class="f_Winproini">Can delete fields = 1</span></p>
<p class="p_Textestd"><span class="f_Textestd">A l&#8217;avenir, d&#8217;autres champs devenus inutiles pourront &#233;galement &#234;tre supprim&#233;, &#224; condition que le fichier WinPro.ini contienne la ligne mentionn&#233;e ci-dessus.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Listes d&#8217;optimisation:</span><span class="f_Textestd"> </span><span class="f_Textestd">Un sch&#233;ma de coupe de chaque barre a &#233;t&#233; ajout&#233;, au-dessus de chaque liste de coupe par barre. Ce sch&#233;ma tient compte des pertes en bout de barre, traits de scie (&#233;ventuellement variables en fonction des angles de coupe), et du sens d&#8217;avancement de la barre. Il vous permet donc de visualiser directement la mani&#232;re dont WinPro arrange les d&#233;coupes dans une optimisation.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Aisance des vitrages :</span><span class="f_Textestd"> L&#8217;aisance des vitrages peut &#234;tre modifi&#233;e par formule, ind&#233;pendamment pour chaque c&#244;t&#233; du vitrage, et ce depuis la formule de vitrage. WinPro met &#224; votre disposition une nouvelle variable, </span><span class="f_Textestd">Aisance[]</span><span class="f_Textestd">, index&#233;e de 1 &#224; 6. Les index ont la signification suivante :</span></p>
<p class="p_Textestd"><span class="f_Variables">Aisance[1]</span><span class="f_Textestd"> : </span><span class="f_Textestd">aisance bas</span></p>
<p class="p_Textestd"><span class="f_Variables">Aisance[2]</span><span class="f_Textestd"> : </span><span class="f_Textestd">Aisance haut</span></p>
<p class="p_Textestd"><span class="f_Variables">Aisance[3]</span><span class="f_Textestd"> : </span><span class="f_Textestd">Aisance gauche</span></p>
<p class="p_Textestd"><span class="f_Variables">Aisance[4]</span><span class="f_Textestd"> : </span><span class="f_Textestd">Aisance droite</span></p>
<p class="p_Textestd"><span class="f_Variables">Aisance[5]</span><span class="f_Textestd"> : </span><span class="f_Textestd">Aisance haut gauche</span></p>
<p class="p_Textestd"><span class="f_Variables">Aisance[6]</span><span class="f_Textestd"> : </span><span class="f_Textestd">Aisance haut droite</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour votre facilit&#233;, vous pouvez remplacer les index num&#233;riques par les variables </span><span class="f_Variables">Bas</span><span class="f_Textestd">, </span><span class="f_Variables">Haut</span><span class="f_Textestd">, </span><span class="f_Variables">Gauche</span><span class="f_Textestd">, </span><span class="f_Variables">Droite</span><span class="f_Textestd">, </span><span class="f_Variables">HautGauche</span><span class="f_Textestd"> </span><span class="f_Textestd">et </span><span class="f_Variables">HautDroite</span><span class="f_Textestd">, respectivement.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Si l&#8217;aisance que vous souhaitez appliquer est identique pour chaque c&#244;t&#233;, vous pouvez simplement taper la formule suivante :</span></p>
<p class="p_Textestd"><span class="f_Textestd">  &nbsp; </span><span class="f_Variables">Aisance</span><span class="f_Textestd"> := xxx</span></p>
<p class="p_Textestd"><span class="f_Textestd">La valeur </span><span class="f_Textestd">xxx</span><span class="f_Textestd"> sera affect&#233;e &#224; chaque bord.</span></p>
<p class="p_Textestd"><span class="f_Textestd">La variable </span><span class="f_Variables">Aisance[]</span><span class="f_Textestd"> </span><span class="f_Textestd">est initialis&#233;e avec la valeur d&#8217;aisance d&#233;finie dans la page </span><span class="f_Textestd">Dimension</span><span class="f_Textestd"> du dialogue des vitrages. Si vous ne d&#233;finissez aucune formule, c&#8217;est tout simplement cette valeur d&#8217;aisance qui sera utilis&#233;e par WinPro.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Exemple :</span></p>
<p class="p_Textestd"><span class="f_Textestd">Affecter une aisance de 4 mm sur chaque c&#244;t&#233;, sauf en bas : 5 mm</span></p>
<p class="p_Textestd"><span class="f_Variables">  &nbsp; Aisance := 4</span></p>
<p class="p_Textestd"><span class="f_Variables">  &nbsp; Aisance[Bas] := 5</span></p>
<p class="p_Textestd"><span class="f_Textestd">Alternativement, on pourrait &#233;crire la formule de cette mani&#232;re</span></p>
<p class="p_Textestd"><span class="f_Variables">  &nbsp; &nbsp;Aisance := 4</span></p>
<p class="p_Textestd"><span class="f_Variables">  &nbsp; &nbsp;Aisance[Bas] += 1</span></p>
<p class="p_Textestd"><span class="f_Variables">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.28</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">22/10/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Propositions de commande:</span><span class="f_Textestd"> Lorsque vous g&#233;n&#233;rez une ou plusieurs commandes fournisseur &#224; partir de la commande, client, WinPro g&#233;n&#232;re un bon de commande pour chaque fournisseur chez qui il faut acheter au moins un article utilis&#233; dans la commande client. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Il est maintenant possible d&#8217;emp&#234;cher WinPro de g&#233;n&#233;rer les bons de commande pour certains de ces fournisseurs. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour cela, cliquez la case &#224; cocher &#8216;</span><span class="f_Textestd">Ne pas g&#233;n&#233;rer de commande &#224; partir de la commande client</span><span class="f_Textestd">&#8217;, dans la page &#8216;</span><span class="f_Textestd">Commandes et livraisons</span><span class="f_Textestd">&#8217; du signal&#233;tique fournisseur.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Profils pr&#233;d&#233;coup&#233;s:</span><span class="f_Textestd"> Deux colonnes suppl&#233;mentaires dans la page &#8216;</span><span class="f_Textestd">Pr&#233;d&#233;coupe</span><span class="f_Textestd">&#8217; du dialogue &#8216;</span><span class="f_Textestd">Profil</span><span class="f_Textestd">&#8217; vous permettent d&#8217;indiquer que, en dessous de la longueur indiqu&#233;e dans la colonne &#8216;Lg min&#8217;, et si le nombre de morceaux longueurs identiques est sup&#233;rieur ou &#233;gal &#224; la valeur indiqu&#233;e dans la colonne &#8216;Qt&#233; min.&#8217;, les morceaux seront &#224; pr&#233;d&#233;couper &#224; la longueur exacte indiqu&#233;e. P.ex. si vous indiquez que vous avez des morceaux pr&#233;d&#233;coup&#233;s standard de 1200 et 1500 mm, et que, pour le morceau de 1500 mm, vous indiquez une longueur minimum de 1450 mm et une quantit&#233; de 20, lorsque vous pr&#233;parez un lot contenant p.ex. 25 morceaux de 1421 mm, WinPro, au lieu de vous demander 25 morceaux de 1500 mm, vous demandera plut&#244;t 25 morceaux de 1421 mm.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous devrez de plus cr&#233;er un article propre &#224; ces longueurs pr&#233;d&#233;coup&#233;es non standard. Il devra &#234;tre ajout&#233; &#224; la liste des morceaux pr&#233;d&#233;coup&#233;s du profil, avec une longueur standard de 0 mm. Il sera g&#233;r&#233; au m&#232;tre courant dans la gestion de stock (dans l&#8217;exemple ci-dessus, WinPro d&#233;comptera 25 x 1,421 m du stock, soit 35,525 m). Le prix de cet article devra &#234;tre g&#233;r&#233; par une table de prix &#224; une dimension ; faute de quoi un prix unique sera compt&#233; quelle que soit la longueur utilis&#233;e. Enfin, vous pouvez ajouter &#224; la description du profil la macro #2#, qui sera remplac&#233;e par la longueur exacte du profil pr&#233;d&#233;coup&#233; (1425 dans l&#8217;exemple ci-dessus).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.27</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">16/10/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">UsinagesExt:</span><span class="f_Textestd"> La fonction </span><span class="f_Variables">UsinageExt</span><span class="f_Textestd"> accepte maintenant jusqu&#8217;&#224; 20 positions simultan&#233;ment (au lieu de 10 pr&#233;c&#233;demment). </span></p>
<p class="p_Textestd"><span class="f_Textestd">Voyez les notes de la version 6.1.7 pour plus d&#8217;informations.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle variable:</span><span class="f_Textestd"> Une troisi&#232;me variable, </span><span class="f_Variables">BatteeVitrage</span><span class="f_Textestd"> a &#233;t&#233; ajout&#233;e aux deux variables de section variable des ouvrants (</span><span class="f_Variables">EpaisseurInterieure</span><span class="f_Textestd"> </span><span class="f_Textestd">et </span><span class="f_Variables">EpaisseurExterieure</span><span class="f_Textestd">). </span></p>
<p class="p_Textestd"><span class="f_Textestd">Elle vous permet de faire varier la batt&#233;e vitrage. </span></p>
<p class="p_Textestd"><span class="f_Textestd" style="color: #ff0000;">Attention ! Il est indispensable que cette batt&#233;e soit identique pour tous les c&#244;t&#233;s du cadre du vantail, ainsi que pour les traverses &#224; l&#8217;int&#233;rieur de ce vantail ; faute de quoi l&#8217;exactitude du calcul ne sera pas garantie.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle variable:</span><span class="f_Textestd"> Dans les vitrages et panneaux des panneaux fabriqu&#233;s, vous pouvez utiliser une nouvelle variable </span><span class="f_Variables">FormeRemplissage</span><span class="f_Textestd">. Cette variable re&#231;oit par d&#233;faut la valeur s&#233;lectionn&#233;e dans la liste des formes sous la formule. Vous pouvez lui affecter une autre valeur, &#224; votre convenance, parmi les noms de formes habituels (</span><span class="f_Variables">Rectangle</span><span class="f_Textestd">, </span><span class="f_Variables">Trapeze</span><span class="f_Textestd">, </span><span class="f_Variables">Cintre</span><span class="f_Textestd">, etc&#8230;). </span></p>
<p class="p_Textestd"><span class="f_Textestd">Cette variable compl&#233;mente utilement les nouvelles fonctions de manipulation de forme.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.25</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">14/10/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Remise par rep&#232;re:</span><span class="f_Textestd"> Vous pouvez d&#233;finir, au niveau de la fiche client, s&#8217;il faut appliquer ou non les remises par rep&#232;re ; il s&#8217;ag&#238;t d&#8217;une valeur par d&#233;faut qui peut &#234;tre chang&#233;e au niveau de la commande ; si toutefois le choix est bloqu&#233; au niveau de la commande, alors la valeur d&#233;finie dans la fiche client sera ignor&#233;e.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.24</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">10/10/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle variable globale pour les profils p&#233;riph&#233;riques:</span><span class="f_Textestd"> La variable </span><span class="f_Variables">_PeriphDeduit[]</span><span class="f_Textestd"> permet de v&#233;rifier, pour chaque profil p&#233;riph&#233;rique, s&#8217;il est ou non d&#233;duit de la dimension de saisie du ch&#226;ssis.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Postes d&#8217;atelier:</span><span class="f_Textestd"> Une case &#224; cocher dans la d&#233;finition des postes d&#8217;atelier vous permet de d&#233;finir s&#8217;il faut ou non cr&#233;er un jeu d&#8217;enregistrements dans InfoPst pour chaque ch&#226;ssis physique, ou s&#8217;il suffit de cr&#233;er un seul jeu d&#8217;enregistrements pour chaque ligne de commande, quelle qu&#8217;en soit la quantit&#233;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelles variables dans les panneaux fabriqu&#233;s:</span><span class="f_Textestd"> Les variables </span><span class="f_Variables">LargeurTableau</span><span class="f_Textestd"> et </span><span class="f_Variables">HauteurTableau</span><span class="f_Textestd"> donnent les cotes tableau (cotes &#8216;commerciales&#8217;).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Manipulations de formes dans les panneaux fabriqu&#233;s:</span><span class="f_Textestd"> Une nouvelle s&#233;rie de fonctions et de variables vous permettent de manipuler des formes et leurs dimensions dans les panneaux fabriqu&#233;s.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Le principe de fonctionnement est le suivant : WinPro maintient en m&#233;moire une liste de formes (rectangle, trap&#232;ze, cintre, etc.) ; vous pouvez effectuer sur ces formes une s&#233;rie d&#8217;op&#233;rations de transformation (copier, agrandir, couper, &#8230;) ; vous pouvez aussi obtenir un certain nombre de leurs caract&#233;ristiques (largeur, hauteur, caract&#233;ristiques de chaque segment, etc.).</span></p>
<p class="p_Textestd"><span class="f_Textestd">A chaque forme correspond une s&#233;rie de variables, stock&#233;e dans des tableaux de variables, dont voici la liste :</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">TypeForme[] </span><span class="f_Textestd">: Type de la forme (Rectangle, Trapeze, Cintre, &#8230;)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">OrientationForme[] </span><span class="f_Textestd">: Orientation de la forme (</span><span class="f_Variables">Gauche</span><span class="f_Textestd"> ou </span><span class="f_Variables">Droite</span><span class="f_Textestd">). La valeur est ind&#233;termin&#233;e pour les formes dans lesquelles l&#8217;orientation n&#8217;a pas de signification</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">DimAForme[] </span><span class="f_Textestd">: Premi&#232;re dimension de la forme</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">DimBForme[] </span><span class="f_Textestd">: Deuxi&#232;me dimension de la forme</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&#8230;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">DimLForme[] </span><span class="f_Textestd">: Douzi&#232;me dimension de la forme</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Reportez-vous au tableau des formes ci-dessous pour le signification exacte de chaque dimension (</span><span class="f_Variables">DimAForme</span><span class="f_Textestd"> correspond &#224; la cote </span><span class="f_Textestd" style="font-weight: bold;">A</span><span class="f_Textestd">, </span><span class="f_Variables">DimBForme</span><span class="f_Textestd"> &#224; la cote </span><span class="f_Textestd" style="font-weight: bold;">B</span><span class="f_Textestd">, etc). Ces variables sont automatiquement maintenues lorsque vous manipulez les formes &#224; l&#8217;aide des fonctions d&#233;crites ci-dessous.</span></p>
<p class="p_Textestd"><span class="f_Textestd">L&#8217;index de chaque forme correspond &#224; l&#8217;index &#224; utiliser pour obtenir les valeurs correspondantes dans ces tableaux de variables (p.ex. </span><span class="f_Variables">TypeForme[1]</span><span class="f_Textestd"> donne le type de la forme d&#8217;index 1). Les dimensions non utilis&#233;e pour une forme ont une valeur de z&#233;ro.</span></p>
<p class="p_Textestd"><span class="f_Textestd">L&#8217;index d&#8217;une forme doit &#234;tre compris entre 1 et 100. En dehors de ces limites, WinPro g&#233;n&#233;rera un message d&#8217;erreur.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Les formes d&#8217;index 1 &#224; 3 sont pr&#233;d&#233;finies : la forme 1 repr&#233;sente la dimension du panneau ; la forme 2 repr&#233;sente la dimension &#8216;hors tout&#8217; du panneau, c'est-&#224;-dire la dimension jusqu&#8217;&#224; l&#8217;axe de la premi&#232;re traverse jouxtant le panneau, ou jusqu&#8217;&#224; l&#8217;entraxe entre 2 vantaux, ou jusqu&#8217;&#224; l&#8217;ext&#233;rieur du dormant jouxtant le panneau (il s&#8217;ag&#238;t donc d&#8217;une dimension plus &#8216;commerciale&#8217; que &#8216;technique&#8217;) ; la forme 3 est calcul&#233;e &#224; partir de la dimension hors tout, d&#233;duction faite des p&#233;n&#233;trations ma&#231;onneries pour les c&#244;t&#233;s du panneau jouxtant le dormant ext&#233;rieur. Vous avez le droit de modifier ces formes ; vous pouvez aussi en cr&#233;er d&#8217;autres, soit sur base de ces deux premi&#232;res formes, soit en utilisant l&#8217;instruction </span><span class="f_Variables">CreerForme</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="text-decoration: underline;">Liste des instructions de manipulation de forme:</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">CouperFormeHorizontalement (</span><span class="f_Textestd">source, bas, haut, position</span><span class="f_Variables">) </span><span class="f_Textestd">:</span><span class="f_Variables"> </span><span class="f_Textestd">Cette formule cr&#233;e, &#224; partir de la forme source, une forme bas et une forme haut, qui repr&#233;sentent respectivement les parties bas et haut de la forme source, coup&#233;e par une droite horizontale &#233;cart&#233;e du point inf&#233;rieur gauche de la valeur indiqu&#233;e par le param&#232;tre position.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">Exemple:</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CreerForme (2, Trapeze, 1000, 1000, 200) &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Cr&#233;ation d'un trap&#232;ze &#224; l'indice 2.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CouperFormeHorizontalement (2, 3, 4, 300) &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Coupe horizontalement le trap&#232;ze en 2 &#224; 300 mm du bas. La forme du bas est stock&#233;e &#224; l'indice 3 et celle du haute &#224; l'indice 4</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Textestd">On a maintenant un rectangle &#224; l&#8217;index 3, et un trap&#232;ze &#224; l&#8217;index 4</span><br>
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Textestd">Le trap&#232;ze d&#8217;origine (indice 2) reste inchang&#233;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">CouperFormeVerticalement (</span><span class="f_Textestd">source, gauche, droite, position</span><span class="f_Variables">) </span><span class="f_Textestd">: Cette formule cr&#233;e, &#224; partir de la forme source, une forme gauche et une forme droite, qui repr&#233;sentent respectivement les parties gauche et droite de la forme source, coup&#233;e par une droite verticale &#233;cart&#233;e du point inf&#233;rieur gauche de la valeur indiqu&#233;e par le param&#232;tre position.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">Exemple:</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CreerForme (2, trapeze, 1000, 1000, 200) &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Cr&#233;er un trap&#232;ze</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CouperFormeVerticalement (2, 3, 4, 300) &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Coupe verticalement le trap&#232;ze en 2 &nbsp;&#224; 300 mm du bas. La forme du bas est stock&#233;e &#224; l'indice 3 et celle du haute &#224; l'indice 4</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Textestd">On a maintenant un rectangle &#224; l&#8217;index 3, et un trap&#232;ze &#224; l&#8217;index 4</span><br>
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Textestd">Le trap&#232;ze d&#8217;origine (indice 2) reste inchang&#233;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Variables">ReduireForme (</span><span class="f_Textestd">index, valeur</span><span class="f_Variables">)</span><span class="f_Textestd"> ou </span><span class="f_Variables">ReduireForme (</span><span class="f_Textestd">index, bas, haut, gauche, droite, hautGauche, hautDroite</span><span class="f_Variables">)</span><span class="f_Textestd"> ou </span><span class="f_Variables">ReduireForme (</span><span class="f_Textestd">index, valeur[]</span><span class="f_Variables">) </span><span class="f_Textestd">:</span><span class="f_Variables"> </span><span class="f_Textestd">Cette formule r&#233;duit la forme en cr&#233;ant une forme dont tous les bords sont parall&#232;les &#224; la forme d&#8217;origine, et &#224; la distance indiqu&#233;e par valeur (1&#232;re formule), ou &#224; une distance indiqu&#233;e s&#233;par&#233;ment pour chaque c&#244;t&#233; (2&#232;me et 3&#232;me formules). Chacun des param&#232;tres peut &#234;tre une expression arithm&#233;tique. Si vous utilisez la troisi&#232;me forme, l&#8217;ordre des valeurs doit correspondre &#224; l&#8217;ordre dans la deuxi&#232;me forme. Les valeurs indiqu&#233;es pour des c&#244;t&#233;s qui n&#8217;existent pas (p.ex. HautGauche dans un rectangle) seront ignor&#233;es.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">Exemple 1:</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">ReduireForme (1, 10) &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">R&#233;duire la forme 1 de 10 mm uniform&#233;ment</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">Exemple 2:</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">ReduireForme (1, 5, 10, 10, 10, 10, 10) &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">R&#233;duire forme 1 de 10 mm sauf en bas : 5 mm</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">Exemple 3:</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd"># </span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Valeur : 6</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Valeur := 10</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Valeur [1] := 5</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">ReduireForme (1, Valeur) &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">R&#233;duire forme 1 de 10 mm sauf en bas : 5 mm</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Textestd">Remarque : vous pouvez donner une valeur n&#233;gative &#224; un ou plusieurs des param&#232;tres. Dans ce cas, l&#8217;instruction se comportera, pour les c&#244;t&#233;s concern&#233;s, comme l&#8217;instruction </span><span class="f_Variables">ElargirForme</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Variables">ElargirForme (</span><span class="f_Textestd">index, valeur</span><span class="f_Variables">)</span><span class="f_Textestd"> ou </span><span class="f_Variables">ElargirForme (</span><span class="f_Textestd">index, bas, haut, gauche, droite, hautGauche, hautDroite</span><span class="f_Variables">)</span><span class="f_Textestd"> ou </span><span class="f_Variables">ElargirForme (</span><span class="f_Textestd">index, valeur[]</span><span class="f_Variables">) </span><span class="f_Textestd">:</span><span class="f_Variables"> </span><span class="f_Textestd">Cette formule &#233;largit la forme en cr&#233;ant une forme dont tous les bords sont parall&#232;les &#224; la forme d&#8217;origine, et &#224; la distance indiqu&#233;e par valeur (1&#232;re formule), ou &#224; une distance indiqu&#233;e s&#233;par&#233;ment pour chaque c&#244;t&#233; (2&#232;me et 3&#232;me formules). Chacun des param&#232;tres peut &#234;tre une expression arithm&#233;tique. Si vous utilisez la troisi&#232;me forme, l&#8217;ordre des valeurs doit correspondre &#224; l&#8217;ordre dans la deuxi&#232;me forme. Les valeurs indiqu&#233;es pour des c&#244;t&#233;s qui n&#8217;existent pas (p.ex. HautGauche dans un rectangle) seront ignor&#233;es.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">Exemple 1:</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">ElargirForme (1, 10) &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Elargir la forme 1 de 10 mm uniform&#233;ment</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">Exemple 2:</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">ElargirForme (1, 5, 10, 10, 10, 10, 10) &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Elargir forme 1 de 10 mm sauf en bas : 5 mm</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">Exemple 3:</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd"># </span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Valeur : 6</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Valeur := 10</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Valeur [1] := 5</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">ElargirForme (1, Valeur) &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Elargir forme 1 de 10 mm sauf en bas : 5 mm</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Textestd">Remarque : vous pouvez donner une valeur n&#233;gative &#224; un ou plusieurs des param&#232;tres. Dans ce cas, l&#8217;instruction se comportera, pour les c&#244;t&#233;s concern&#233;s, comme l&#8217;instruction </span><span class="f_Variables">ReduireForme</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Variables">CopierForme (source, destination) </span><span class="f_Textestd">:</span><span class="f_Variables"> </span><span class="f_Textestd">Cette formule copie la forme dont l&#8216;index est source vers la forme dont l&#8217;index est destination. Si la forme source n&#8217;est pas d&#233;finie, la forme destination ne le sera pas non plus. Si la forme destination existe d&#233;j&#224;, elle sera remplac&#233;e par la forme source.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">Exemple:</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">CopierForme (1, 2) &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Copier la forme 1 vers la forme 2</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Variables">CreerForme (</span><span class="f_Textestd">index, type, [orientation,] dimensions&#8230;</span><span class="f_Variables">) </span><span class="f_Textestd">:</span><span class="f_Variables"> </span><span class="f_Textestd">Cette formule vous permet de cr&#233;er une forme, en en donnant les dimensions, comme si vous saisissiez une dimension de fen&#234;tre dans WinPro (toutefois, la largeur est toujours donn&#233;e avant la hauteur). La syntaxe exacte varie en fonction de chaque forme, en fonction du nombre de dimensions n&#233;cessaires. De plus, il faut pr&#233;ciser l&#8217;orientation pour certaines formes (dans ce cas, il faut indiquer gauche ou droite avant la premi&#232;re dimension). Chacun de ces param&#232;tres peut &#234;tre une expression arithm&#233;tique. De plus, pour chaque forme, la liste des dimensions peut &#234;tre remplac&#233;e par une variable de type tableau, qui contient les dimensions n&#233;cessaires.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">Exemple 1:</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">CreerForme (2, Trapeze, Largeur-200, Hauteur-200, (Hauteur-200)/10) &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">cr&#233;er &#224; l&#8217;index 2 un trap&#232;ze</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">Exemple 2:</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Dim : 3</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Dim [1] := Largeur-200</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Dim [2] := Hauteur-200</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Dim [3] := Dim[2]/10</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">CreerForme (2, Trapeze, Dim) &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">cr&#233;er &#224; l&#8217;index 2 un trap&#232;ze</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Voici, sous forme de croquis, la liste des formes, si n&#233;cessaire en version droite et gauche. Les dimensions sont &#224; donner dans l&#8217;ordre alphab&#233;tique des cotes indiqu&#233;es sur les croquis :</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 32px;"><table cellspacing="0" cellpadding="4" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="162" bgcolor="#e0e9fa" style="width: 162px; background-color: #e0e9fa; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">Forme</span></p>
</td>
<td colspan="2" width="323" bgcolor="#e0e9fa" style="width: 323px; background-color: #e0e9fa; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">Dimensions</span></p>
</td>
<td width="81" bgcolor="#e0e9fa" style="width: 81px; background-color: #e0e9fa; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">Orientation</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">Rectangle</span></p>
</td>
<td colspan="2" width="323" style="width: 323px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_72.jpg" width="119" height="111" border="0" vspace="1" hspace="1" alt="img_72"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Non</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">Trap&#232;ze</span></p>
</td>
<td width="153" style="width: 153px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Gauche</span></p>
<p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_73.jpg" width="107" height="111" border="0" vspace="1" hspace="1" alt="img_73"></p>
</td>
<td width="162" style="width: 162px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Droite</span></p>
<p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_74.jpg" width="109" height="109" border="0" vspace="1" hspace="1" alt="img_74"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Oui</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">TriangleRectangle</span></p>
</td>
<td width="153" style="width: 153px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Gauche</span></p>
<p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_75.jpg" width="111" height="105" border="0" vspace="1" hspace="1" alt="img_75"></p>
</td>
<td width="162" style="width: 162px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Droite</span></p>
<p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_76.jpg" width="109" height="107" border="0" vspace="1" hspace="1" alt="img_76"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Oui</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">CoinCasse</span></p>
</td>
<td width="153" style="width: 153px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Gauche</span></p>
<p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_77.jpg" width="111" height="109" border="0" vspace="1" hspace="1" alt="img_77"></p>
</td>
<td width="162" style="width: 162px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Droite</span></p>
<p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_78.jpg" width="115" height="115" border="0" vspace="1" hspace="1" alt="img_78"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Oui</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">TrapezeRectangle</span></p>
</td>
<td width="153" style="width: 153px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Gauche</span></p>
<p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_79.jpg" width="111" height="109" border="0" vspace="1" hspace="1" alt="img_79"></p>
</td>
<td width="162" style="width: 162px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Droite</span></p>
<p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_80.jpg" width="109" height="107" border="0" vspace="1" hspace="1" alt="img_80"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Oui</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">Cintre</span></p>
</td>
<td colspan="2" width="323" style="width: 323px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_81.jpg" width="117" height="109" border="0" vspace="1" hspace="1" alt="img_81"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Non</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">PleinCintre</span></p>
</td>
<td colspan="2" width="323" style="width: 323px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_82.jpg" width="111" height="107" border="0" vspace="1" hspace="1" alt="img_82"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Non</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">DemiPleinCintre</span></p>
</td>
<td width="153" style="width: 153px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Gauche</span></p>
<p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_83.jpg" width="107" height="113" border="0" vspace="1" hspace="1" alt="img_83"></p>
</td>
<td width="162" style="width: 162px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Droite</span></p>
<p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_84.jpg" width="99" height="107" border="0" vspace="1" hspace="1" alt="img_84"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Oui</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">CintrePlat</span></p>
</td>
<td colspan="2" width="323" style="width: 323px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_85.jpg" width="101" height="109" border="0" vspace="1" hspace="1" alt="img_85"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Non</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">DemiCintrePlat</span></p>
</td>
<td width="153" style="width: 153px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Gauche</span></p>
<p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_86.jpg" width="109" height="107" border="0" vspace="1" hspace="1" alt="img_86"></p>
</td>
<td width="162" style="width: 162px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Droite</span></p>
<p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_87.jpg" width="107" height="105" border="0" vspace="1" hspace="1" alt="img_87"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Oui</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">CintreTronque</span></p>
</td>
<td colspan="2" width="323" style="width: 323px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_88.jpg" width="113" height="103" border="0" vspace="1" hspace="1" alt="img_88"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Non</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">CoinArrondi</span></p>
</td>
<td width="153" style="width: 153px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Gauche</span></p>
<p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_89.jpg" width="111" height="107" border="0" vspace="1" hspace="1" alt="img_89"></p>
</td>
<td width="162" style="width: 162px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Droite</span></p>
<p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_90.jpg" width="115" height="107" border="0" vspace="1" hspace="1" alt="img_90"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Oui</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">Triangle</span></p>
</td>
<td colspan="2" width="323" style="width: 323px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_91.jpg" width="115" height="113" border="0" vspace="1" hspace="1" alt="img_91"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Non</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">Quadrilatere</span></p>
</td>
<td width="153" style="width: 153px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Gauche</span></p>
<p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_92.jpg" width="111" height="113" border="0" vspace="1" hspace="1" alt="img_92"></p>
</td>
<td width="162" style="width: 162px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Droite</span></p>
<p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_93.jpg" width="117" height="113" border="0" vspace="1" hspace="1" alt="img_93"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Oui</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">SimpleTrapeze</span></p>
</td>
<td colspan="2" width="323" style="width: 323px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_94.jpg" width="113" height="107" border="0" vspace="1" hspace="1" alt="img_94"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Non</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">CoinCasse2</span></p>
</td>
<td colspan="2" width="323" style="width: 323px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_95.jpg" width="111" height="111" border="0" vspace="1" hspace="1" alt="img_95"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Non</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">Pentagone</span></p>
</td>
<td colspan="2" width="323" style="width: 323px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_96.jpg" width="119" height="113" border="0" vspace="1" hspace="1" alt="img_96"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Non</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">TrapezeTronque</span></p>
</td>
<td width="153" style="width: 153px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Gauche</span></p>
<p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_97.jpg" width="111" height="113" border="0" vspace="1" hspace="1" alt="img_97"></p>
</td>
<td width="162" style="width: 162px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Droite</span></p>
<p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_98.jpg" width="117" height="109" border="0" vspace="1" hspace="1" alt="img_98"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Oui</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">AnsePanier</span></p>
</td>
<td colspan="2" width="323" style="width: 323px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_99.jpg" width="131" height="123" border="0" vspace="1" hspace="1" alt="img_99"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Non</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">AnsePanierTronquee</span></p>
</td>
<td colspan="2" width="323" style="width: 323px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_100.jpg" width="111" height="119" border="0" vspace="1" hspace="1" alt="img_100"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Non</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">OeilDeBoeuf</span></p>
</td>
<td colspan="2" width="323" style="width: 323px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_101.jpg" width="103" height="95" border="0" vspace="1" hspace="1" alt="img_101"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Non</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">AnsePanierComplete</span></p>
</td>
<td colspan="2" width="323" style="width: 323px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_102.jpg" width="111" height="111" border="0" vspace="1" hspace="1" alt="img_102"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Non</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">DemiAnsePanier</span></p>
</td>
<td width="153" style="width: 153px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Gauche</span></p>
<p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_103.jpg" width="103" height="111" border="0" vspace="1" hspace="1" alt="img_103"></p>
</td>
<td width="162" style="width: 162px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Droite</span></p>
<p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_104.jpg" width="101" height="109" border="0" vspace="1" hspace="1" alt="img_104"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Oui</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">AnsePanier5</span></p>
</td>
<td colspan="2" width="323" style="width: 323px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_105.jpg" width="117" height="111" border="0" vspace="1" hspace="1" alt="img_105"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Non</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">AnsePanierTronquee5</span></p>
</td>
<td colspan="2" width="323" style="width: 323px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_106.jpg" width="107" height="111" border="0" vspace="1" hspace="1" alt="img_106"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Non</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">AnsePanierComplete5</span></p>
</td>
<td colspan="2" width="323" style="width: 323px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_107.jpg" width="115" height="115" border="0" vspace="1" hspace="1" alt="img_107"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Non</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="162" style="width: 162px; border: solid 1px ;"><p style="margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">DemiAnsePanier5</span></p>
</td>
<td width="153" style="width: 153px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Gauche</span></p>
<p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_108.jpg" width="107" height="115" border="0" vspace="1" hspace="1" alt="img_108"></p>
</td>
<td width="162" style="width: 162px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Droite</span></p>
<p style="text-align: center; margin: 8px 0px 0px 0px;"><img src="img/img_109.jpg" width="105" height="107" border="0" vspace="1" hspace="1" alt="img_109"></p>
</td>
<td width="81" style="width: 81px; border: solid 1px ;"><p style="text-align: center; margin: 8px 0px 0px 0px;"><span style="font-family: 'Tahoma'; color: #000000;">Oui</span></p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 32px;"><span class="f_Variables">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.23</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">8/10/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Table export&#233;e Cde.dbf:</span><span class="f_Textestd"> Le taux de TVA est export&#233; dans le champ </span><span class="f_Textestd">TAUXTVA</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Table export&#233;e Fen.dbf:</span><span class="f_Textestd"> Trois nouveaux champs indiquent s&#8217;il s&#8217;ag&#238;t d&#8217;un ensemble ou d&#8217;une partie d&#8217;ensemble. Voyez Dict.xls pour plus d&#8217;information.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Tables Art.dbf et ArtCde.dbf:</span><span class="f_Textestd"> La documentation dans Dict.xls &#233;tait erron&#233;e ; la valeur du champ </span><span class="f_Textestd">Type </span><span class="f_Textestd">pour les profils et les articles &#233;tait invers&#233;e.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Fiche client:</span><span class="f_Textestd"> Vous avez acc&#232;s &#224; la liste des commandes d&#8217;un client, depuis la fiche signal&#233;tique de ce client. Allez sur le dernier onglet (&#8216;Commandes&#8217;), et la liste des commandes et devis du client appara&#238;t. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous pouvez double-cliquer une commande (ou la s&#233;lectionner et cliquer sur le bouton &#8216;Ouvrir&#8217;) pour ouvrir la commande en mode visualisation.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.22</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">26/9/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Hauteur variable des profils p&#233;riph&#233;riques:</span><span class="f_Textestd"> Vous pouvez d&#233;finir, dans le param&#233;trage des rehausses, si la rehausse a une hauteur variable. Vous disposez pour cela d&#8217;une nouvelle case &#224; cocher &#8216;Hauteur variable&#8217;. Dans ce cas, deux nouveaux champs vous permettent de d&#233;finir les limites haute et basse des valeurs possibles (si vous ne remplissez pas l&#8217;un ou l&#8217;autre de ces champs, la limite correspondante ne sera pas v&#233;rifi&#233;e).</span></p>
<p class="p_Textestd"><span class="f_Textestd">Au niveau de la saisie des profils p&#233;riph&#233;riques, une nouvelle colonne a &#233;t&#233; ajout&#233;e, qui vous permet de d&#233;finir l&#8217;&#233;paisseur souhait&#233;e. Cette nouvelle colonne n&#8217;est accessible que pour les profils qui auront &#233;t&#233; d&#233;finis comme &#8216;variables&#8217;. WinPro v&#233;rifiera de plus si la valeur saisie se trouve bien entre les limites d&#233;finies.</span></p>
<p class="p_Textestd"><span class="f_Textestd">La variable </span><span class="f_Variables">_PeriphEp[]</span><span class="f_Textestd"> contient la hauteur effective du profil.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.21</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">24/9/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Traitement des documents par WPReport:</span><span class="f_Textestd"> Vous pouvez configurer WinPro de telle mani&#232;re qu&#8217;il ex&#233;cute un script WPReport pour les trois documents suivants : &#233;tiquettes d&#8217;optimisation, liste d&#8217;optimisation, liste de chargement des barres.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Il faut ajouter de nouvelles cl&#233;s dans le fichier WinPro.ini:</span></p>
<p class="p_Textestd"><span class="f_Winproini">[Mode sortie documents]</span></p>
<p class="p_Textestd"><span class="f_Winproini">Etiquette optimisation  &nbsp; &nbsp; &nbsp; &nbsp;= 1 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">impression par WinPro (par d&#233;faut)</span></p>
<p class="p_Textestd"><span class="f_Winproini"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= 4 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">impression par WPReport</span></p>
<p class="p_Textestd"><span class="f_Winproini"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= 5 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">impression par WinPro &nbsp;et par WPReport</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Winproini">Liste optimisation &nbsp; &nbsp; &nbsp; &nbsp;= 1 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">impression par WinPro (par d&#233;faut)</span></p>
<p class="p_Textestd"><span class="f_Winproini"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= 4 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">impression par WPReport</span></p>
<p class="p_Textestd"><span class="f_Winproini"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= 5 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">impression par WinPro &nbsp;et par WPReport</span></p>
<p class="p_Textestd"><span class="f_Winproini">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Winproini">Chargement Barre  &nbsp; &nbsp; &nbsp; &nbsp;= 1 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">impression par WinPro (par d&#233;faut)</span></p>
<p class="p_Textestd"><span class="f_Winproini"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= 4 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">impression par WPReport</span></p>
<p class="p_Textestd"><span class="f_Winproini"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;= 5 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">impression par WinPro &nbsp;et par WPReport</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.20</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">23/9/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">La formule par site:</span><span class="f_Textestd"> V</span><span class="f_Textestd">ous permet de d&#233;finir une formule unique appliqu&#233;e &#224; chaque ch&#226;ssis. Le but premier de ce module est de permettre, pour les fabricants poss&#233;dant plusieurs sites de production, de modifier le comportement de WinPro en fonction du site. Vous pouvez d&#233;finir cette formule par la page &#8216;</span><span class="f_Textestd">Formules site</span><span class="f_Textestd">&#8217; du menu </span><span class="f_Textestd">Utilitaires | Pr&#233;f&#233;rences</span><span class="f_Textestd">. La formule de site est stock&#233;e dans le fichier </span><span class="f_Textestd">Site.var</span><span class="f_Textestd">, dans le r&#233;pertoire </span><span class="f_Textestd">Data</span><span class="f_Textestd"> de WinPro, en format ASCII (modifiable par un simple &#233;diteur de texte).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Les formules par utilisateur:</span><span class="f_Textestd"> Vous permettent, de mani&#232;re similaire, de d&#233;finir un comportement diff&#233;rent pour chaque utilisateur (ex. : interdiction de saisie de certains syst&#232;mes ; d&#233;passement des limites techniques autoris&#233; &#224; certains utilisateurs ; etc&#8230;). Vous pouvez d&#233;finir les formules utilisateur par une nouvelle page &#8216;</span><span class="f_Textestd">Formule</span><span class="f_Textestd">&#8217; dans le dialogue </span><span class="f_Textestd">Utilisateurs</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">N.B. : Les formules site seront &#233;galement transmises &#224; WinPro/D, dans un fichier &#8216;site.var&#8217; sur la disquette InfoCli. Le contenu de ce fichier est crypt&#233;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="text-decoration: underline;">Remarque :</span><span class="f_Textestd">Il nous parait utile de reprendre ici l&#8217;ordre d&#8217;utilisation des diff&#233;rentes formules, ainsi que de la cr&#233;ation des variables globales de description du ch&#226;ssis.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Variables </span><span class="f_Variables">_Aujourdhui</span><span class="f_Textestd"> et </span><span class="f_Variables">_DateSaisie</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Variables </span><span class="f_Variables">_CaissonDeduitAutorise</span><span class="f_Textestd"> et </span><span class="f_Variables">_CaissonNonDeduitAutorise</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Variable </span><span class="f_Variables">_Situation</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Variable </span><span class="f_Variables">_WinPro</span><span class="f_Textestd"> (valeurs possible : </span><span class="f_Variables">_Fabricant</span><span class="f_Textestd"> dans WinPro, </span><span class="f_Variables">_Devis</span><span class="f_Textestd"> dans WinPro/D)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Variable </span><span class="f_Variables">_TypePrix</span><span class="f_Textestd"> (valeurs possibles : </span><span class="f_Variables">_Commercial</span><span class="f_Textestd"> ou </span><span class="f_Variables">_Debourse</span><span class="f_Textestd">)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Formule de site</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Formule de l&#8217;utilisateur (non utilis&#233; dans WinPro/D)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Formule du syst&#232;me</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Variables de configuration de la fen&#234;tre (</span><span class="f_Variables">_NOuvrants</span><span class="f_Textestd">, </span><span class="f_Variables">_OuvrantNVantaux []</span><span class="f_Textestd">, etc. &#8230;)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Formule sp&#233;cifique du client</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Calcul de la fen&#234;tre (formules de quincaillerie, ouvrant, dormant, traverse, etc. &#8230;)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Formule de remise du client (actuellement non utilis&#233; dans WinPro/D)</span></p>

</td></tr></table>
</div>

</body>
</html>
