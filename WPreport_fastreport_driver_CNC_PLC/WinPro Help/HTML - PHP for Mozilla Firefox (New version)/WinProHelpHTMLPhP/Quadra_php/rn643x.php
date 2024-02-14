<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["6.4.3x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn643x.php"; }
else { parent.quicksync('a11.8.4'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>6.4.3x</title>
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
     <a href="rn644x.php">Previous</a>&nbsp;
     <a href="rn642x.php">Next</a>
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
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.39</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">9/12/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Saisie des traverses en mode tableau:</span><span class="f_Textestd"> Vous pouvez saisir la position des traverses en laissant WinPro corriger cette position par rapport aux p&#233;n&#233;trations ma&#231;onnerie. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous disposez d&#8217;une nouvelle case &#224; cocher dans le dialogue de saisie de traverse, juste sous la zone de saisie de la position, qui vous permet de choisir le mode de saisie. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Par d&#233;faut, WinPro proposera le m&#234;me mode de saisie que pour les dimensions du ch&#226;ssis.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Remarque :</span><span class="f_Textestd"> </span><span class="f_Textestd">une saisie en cote tableau n&#8217;a de sens que si la position est donn&#233;e depuis l&#8217;ext&#233;rieur du dormant. Si la position est donn&#233;e </span><span class="f_Textestd">depuis l&#8217;axe d&#8217;une autre traverse</span><span class="f_Textestd">, </span><span class="f_Textestd">l&#8217;indication </span><span class="f_Textestd">de fonctionner en cote tableau </span><span class="f_Textestd">sera ignor&#233;e</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.37</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">2/12/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Rappels aux fournisseurs:</span><span class="f_Textestd"> vous pouvez s&#233;lectionner une nouvelle m&#233;thode de tri gr&#226;ce &#224; une case &#224; cocher &#8216;Tri par commande&#8217; ; si vous cochez cette case, la liste de rappel sera tri&#233;e d&#8217;abord par fournisseur, ensuite par num&#233;ro de commande (par d&#233;faut, le tri se fait sur le fournisseur, puis sur le code article).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Usinages:</span><span class="f_Textestd"> Quand WinPro envoie les usinages d&#8217;un cadre vers un autre, vous indiquez dans la formule d&#8217;usinage sur quel bord du cadre l&#8217;usinage doit arriver (haut, bas, gauche ou droite). Une nouvelle syntaxe vous permet maintenant d&#8217;indiquer la </span><span class="f_Textestd">direction</span><span class="f_Textestd"> dans laquelle l&#8217;usinage doit partir : ajoutez simplement le signe </span><span class="f_Textestd">-&gt;</span><span class="f_Textestd"> (tiret suivi du signe &#8216;plus grand que&#8217;) devant le param&#232;tre de bord de l&#8217;usinage, comme dans l&#8217;exemple ci-dessous :</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Usinage (400, bas, simple, MACONNERIE, special, 110, -&gt; gauche)</span></p>
<p class="p_Textestd"><span class="f_Textestd">WinPro s&#8217;arr&#234;tera au premier profil de type 110 qu&#8217;il rencontrera &#224; gauche du profil de d&#233;part. Notez que vous pouvez aussi utiliser cette instruction sur les usinages standard, comme suit :</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Usinage (400, bas, simple, MACONNERIE, dormant, -&gt; gauche)</span></p>
<p class="p_Textestd"><span class="f_Textestd">Dans ce cas, l&#8217;usinage s&#8217;arr&#234;tera au premier profil de dormant rencontr&#233; (y compris si c&#8217;est une traverse de dormant).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Tables Traduct.dbf, TradQuest.dbf, TradQelQ.dbf:</span><span class="f_Textestd"> le champ Texte de ces tables a &#233;t&#233; allong&#233; &#224; 120 caract&#232;res.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.36</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">28/11/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Vitrages:</span><span class="f_Textestd"> Deux nouvelles cases &#224; cocher, dans l&#8217;onglet </span><span class="f_Textestd">Prix </span><span class="f_Textestd">de la d&#233;finition des vitrages, vous permettent de ne pas compter la main d&#8217;&#339;uvre vitrage, pour le prix de revient et/ou le prix de vente.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Vitrages:</span><span class="f_Textestd"> Une nouvelle variable, </span><span class="f_Variables">MainDOeuvre</span><span class="f_Textestd">, vous permet de forcer le calcul de la main d&#8217;&#339;uvre de pose du vitrage, &#224; partir de la formule de vitrage. Dans ce cas, la main d&#8217;&#339;uvre sera affect&#233;e au poste de travail d&#233;fini dans le premier champ </span><span class="f_Textestd">Poste</span><span class="f_Textestd"> de la page </span><span class="f_Textestd">Prix</span><span class="f_Textestd"> du vitrage, et les temps de main d&#8217;&#339;uvre &#233;ventuellement saisis dans les champs &#8216;</span><span class="f_Textestd">Dur&#233;e</span><span class="f_Textestd">&#8217; seront ignor&#233;s.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Dormant et traverses segment&#233;s:</span><span class="f_Textestd"> Si vous utilisez les dormants et traverses segment&#233;s (traverse filante ou inversion de frappe), WinPro vous permet d&#8217;utiliser 4 nouvelles variables tableaux : </span><span class="f_Variables">X0Segment[]</span><span class="f_Textestd">, </span><span class="f_Variables">Y0Segment[]</span><span class="f_Textestd">, </span><span class="f_Variables">X1Segment[]</span><span class="f_Textestd">, </span><span class="f_Variables">Y1Segment[]</span><span class="f_Textestd">. Ces variables contiennent les coordonn&#233;es en X et Y de chaque extr&#233;mit&#233; de chaque segment ; vous pouvez modifier le contenu de ces variables, ce qui aura pour effet de repositionner les segments par rapport aux usinages et aux vues en coupe.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Impressions multiples:</span><span class="f_Textestd"> Certains pilotes d&#8217;imprimante g&#232;rent mal (ou pas du tout&#8230;) la notion de copie multiple d&#8217;un m&#234;me document. Pour pallier &#224; ce probl&#232;me, WinPro peut g&#233;n&#233;rer lui-m&#234;me les impressions successives d&#8217;un m&#234;me document. Pour activer cette fonctionnalit&#233;, ajoutez la cl&#233; suivante dans le fichier </span><span class="f_Textestd">WinPro.ini</span><span class="f_Textestd"> :</span></p>
<p class="p_Textestd"><span class="f_Winproini">[system]</span></p>
<p class="p_Textestd"><span class="f_Winproini">Copies = 1 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Attention ! ceci emp&#234;chera les impressions non tri&#233;es de fonctionner correctement !</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.34</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">18/11/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Main d&#8217;&#339;uvre vitrage:</span><span class="f_Textestd"> Deux nouvelles cases &#224; cocher, dans la page Prix de la d&#233;finition des vitrages, vous permettent de d&#233;cider si la main d&#8217;&#339;uvre d&#8217;un vitrage doit &#234;tre exclue du prix de revient et/ou du prix de vente. Notez que cette main d&#8217;&#339;uvre n&#8217;est pas compt&#233;e si le prix du vitrage est d&#233;fini par une grille de prix li&#233;e &#224; un ouvrant, et activ&#233;e pour le prix de revient et/ou le prix de vente.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">P&#233;n&#233;trations ma&#231;onnerie:</span><span class="f_Textestd"> Les p&#233;n&#233;trations ma&#231;onneries peuvent maintenant varier par formule. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous disposez de 4 variables globales (</span><span class="f_Variables">_PenetrationMaconnerieGauche</span><span class="f_Textestd">, </span><span class="f_Variables">_PenetrationMaconnerieDroite</span><span class="f_Textestd">, </span><span class="f_Variables">_PenetrationMaconnerieHaut</span><span class="f_Textestd">, </span><span class="f_Variables">_PenetrationMaconnerieBas</span><span class="f_Textestd">), qui correspondent aux 4 champs de saisie correspondants de la page dimension. Ces variables sont disponibles dans toutes les formules, et peuvent &#233;galement &#234;tre modifi&#233;es &#224; tout moment. Si vous modifiez ces variables, WinPro recalculera les dimensions de la fen&#234;tre, en tenant compte du mode de saisie des dimensions : si la saisie a &#233;t&#233; faite en cotes tableau, les dimensions hors tout de la fen&#234;tre sont recalcul&#233;es. Si la saisie a &#233;t&#233; faite en cotes fabrication, ce sont les cotes tableau qui sont recalcul&#233;es. Les dimensions dans les champs de saisie de la page dimension sont imm&#233;diatement mis &#224; jour.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Remarque :</span><span class="f_Textestd"> </span><span class="f_Textestd">cette fonctionnalit&#233; doit &#234;tre consid&#233;r&#233;e comme &#233;tant en version &#8216;b&#234;ta&#8217; jusque fin novembre 2002. Merci de nous faire part de vos remarques &#233;ventuelles.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.33</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">12/11/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Correction:</span><span class="f_Textestd"> Dans le cas particulier des assemblages de type &#8216;</span><span class="f_Textestd">droit court</span><span class="f_Textestd">&#8217;, si la case &#8216;</span><span class="f_Textestd">Corriger les usinages si assemblage droit</span><span class="f_Textestd">&#8217; est coch&#233;e dans la page &#8216;</span><span class="f_Textestd">Usinages</span><span class="f_Textestd">&#8217; du dialogue de d&#233;finition des syst&#232;mes, WinPro r&#233;duisait erron&#233;ment la longueur des profils de dormant bas s&#8217;ils &#233;taient situ&#233;s &#224; c&#244;t&#233; d&#8217;une porte d&#8217;un c&#244;t&#233;. Ce comportement est corrig&#233; dans cette version.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Cat&#233;gories de couleurs:</span><span class="f_Textestd"> Vous pouvez d&#233;finir pour chaque couleur une cat&#233;gorie, qui sera transmise au param&#233;trage par les variables globales suivantes : </span><span class="f_Variables">_CouleurDormant</span><span class="f_Textestd">, </span><span class="f_Variables">_CouleurOuvrant []</span><span class="f_Textestd">, </span><span class="f_Variables">_CouleurQuincaillerie []</span><span class="f_Textestd">. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ces variables peuvent, p.ex., &#234;tre utilis&#233;es pour afficher ou masquer certaines questions, telles que les questions de renforcement ; autre exemple : d&#233;finir la couleur d&#8217;un accessoire d&#8217;ouvrant en fonction de la cat&#233;gorie de couleur du dormant.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">WinPro/D:</span><span class="f_Textestd"> Le mode de calcul des remises de WinPro est maintenant int&#233;gralement transmis &#224; WinPro/D. Il est utilis&#233; uniquement pour les bons de commande au fabricant, dans lesquels les formules de remise attribu&#233;es au client utilisateur sont maintenant automatiquement appliqu&#233;es, ainsi que les trois niveaux de remise par d&#233;faut.</span></p>
<p class="p_Textestd"><span class="f_Textestd">De plus, l&#8217;utilisateur peut maintenant encoder les remises par ch&#226;ssis, pour ses clients finaux.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Notez qu&#8217;il y a donc deux syst&#232;mes ind&#233;pendants de remises : l&#8217;un, transmis de WinPro &#224; WinPro/D, concerne le client utilisateur, et les bons de commandes qu&#8217;il renvoie au fabricant. L&#8217;autre, concernant le client final, est d&#233;fini par l&#8217;utilisateur, et appara&#238;t sur les devis, confirmations et autres documents clients, mais n&#8217;affecte en rien le bon de commande au fabricant (ni le fichier export&#233; vers le fabricant).</span></p>
<p class="p_Textestd"><span class="f_Textestd">Enfin, WinPro/D affiche, dans la page &#8216;R&#233;capitulatif&#8217; de la commande, le prix d&#8217;achat (= prix tarif moins remise du fabricant), ainsi que la marge (prix de vente net moins prix d&#8217;achat), pour chaque fen&#234;tre. Ces deux informations ne sont visibles que pour les utilisateurs qui ont aussi le droit de forcer le prix de vente.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Traverses filantes:</span><span class="f_Textestd"> Plusieurs nouvelles variables vous permettent de d&#233;finir et utiliser des traverses de dormant &#8216;filantes&#8217;, c'est-&#224;-dire des traverses qui interrompent le dormant, comme dans l&#8217;exemple ci-dessous :</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd" style="text-align: center;"><img src="img/img_70.jpg" width="311" height="311" border="0" vspace="1" hspace="1" alt="img_70"></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Les variables disponibles sont les suivantes :</span></p>
<p class="p_Textestd"><span class="f_Variables">FilanteGauche</span><span class="f_Textestd">, </span><span class="f_Variables">FilanteDroite</span><span class="f_Textestd">, </span><span class="f_Variables">FilanteHaut</span><span class="f_Textestd">, </span><span class="f_Variables">FilanteBas</span><span class="f_Textestd"> </span><span class="f_Textestd">: Ces variables sont utilis&#233;es dans les formules de traverses ; elles indiquent que la traverse doit &#234;tre filante vers la gauche, la droite, le haut ou le bas, respectivement. </span></p>
<p class="p_Textestd"><span class="f_Variables">FilanteGauche</span><span class="f_Textestd"> </span><span class="f_Textestd">et </span><span class="f_Variables">FilanteDroite</span><span class="f_Textestd"> </span><span class="f_Textestd">sont ignor&#233;es par WinPro pour les traverses verticales ; de m&#234;me, </span><span class="f_Variables">FilanteHaut</span><span class="f_Textestd"> </span><span class="f_Textestd">et </span><span class="f_Variables">FilanteBas</span><span class="f_Textestd"> </span><span class="f_Textestd">sont ignor&#233;es pour les traverses horizontales ; de plus, ces variables ne sont prises en compte que pour le bout de la traverse qui touche le cadre ext&#233;rieur du dormant. </span><span class="f_Textestd">Ces variables doivent &#234;tre d&#233;finies dans la premi&#232;re formule de traverse.</span></p>
<p class="p_Textestd"><span class="f_Variables">_TravFilanteGauche[]</span><span class="f_Textestd">, </span><span class="f_Variables">_TravFilanteDroite[]</span><span class="f_Textestd">, </span><span class="f_Variables">_TravFilanteHaut[]</span><span class="f_Textestd">, </span><span class="f_Variables">_TravFilanteBas[]</span><span class="f_Textestd"> sont des variables globales, qui indiquent si une traverse est filante (</span><span class="f_Variables">0</span><span class="f_Textestd"> = non filante, </span><span class="f_Variables">1</span><span class="f_Textestd"> = filante). Ces variables sont accessibles de la m&#234;me mani&#232;re que les autres variables globales de traverse. Notez que, pour les traverses d&#8217;ouvrant, la valeur de ces variables est toujours z&#233;ro.</span></p>
<p class="p_Textestd"><span class="f_Textestd">La pr&#233;sence de traverses filantes segmentera le c&#244;t&#233; du dormant qu&#8217;elles touchent. Reportez-vous aux notes de release 4.1.0 pour une explication d&#233;taill&#233;e de cette segmentation. Attention : dans le cas des traverses filantes, les angles de coupe &#224; la jonction entre deux segments sont par d&#233;faut de 90&#176;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Cette notion de traverse filante est compatible avec la notion d&#8217;inversion de frappe. Les deux notions peuvent donc &#234;tre utilis&#233;es simultan&#233;ment.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Dans cette version, la segmentation du dormant n&#8217;est correcte que pour des ch&#226;ssis rectangulaires. Nous &#233;tudions l&#8217;opportunit&#233; de traiter d&#8217;autres cas.</span></p>
<p class="p_Textestd"><span class="f_Variables">IndexTraverse1[]</span><span class="f_Textestd">, </span><span class="f_Variables">IndexTraverse2[]</span><span class="f_Textestd"> :</span><span class="f_Textestd"> ces variables sont d&#233;finies pour chaque segment de dormant ; elles reportent au num&#233;ro de la traverse qui touche le bout du segment. La num&#233;rotation des variables (1 et 2) suit la m&#234;me convention que pour les variables d&#8217;angle et d&#8217;assemblage (p.ex. 1 est &#224; gauche en bas, mais &#224; droite au-dessus).</span></p>
<p class="p_Textestd"><span class="f_Textestd">Par convention, WinPro indiquera pour chaque segment de dormant, la cote &#224; l&#8217;axe de la traverse comme longueur, comme dans le sch&#233;ma ci-dessous :</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd" style="text-align: center;"><img src="img/img_71.jpg" width="598" height="221" border="0" vspace="1" hspace="1" alt="img_71"></p>
<p class="p_Textestd" style="text-align: center;"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Il vous incombe donc de raccourcir la longueur du segment de mani&#232;re appropri&#233;e, p.ex. en consultant la section de la traverse &#224; la jonction, gr&#226;ce aux variables </span><span class="f_Variables">IndexTraverse1[]</span><span class="f_Textestd"> et </span><span class="f_Variables">IndexTraverse2[]</span></p>
<p class="p_Textestd"><span class="f_Variables">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.32</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">4/11/2002</span></p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 8px;">&nbsp;</p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Prix de revient:</span><span class="f_Textestd"> Trois champs ont &#233;t&#233; ajout&#233;s &#224; la table Detail.dbf (table contenant la description de chaque ch&#226;ssis). </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ces champs contiennent le prix de revient courant de chaque fen&#234;tre, en d&#233;taillant : prix du ch&#226;ssis, du vitrage, du volet. </span></p>
<p class="p_Textestd"><span class="f_Textestd">La somme des trois champs vous donne donc le prix de revient complet du ch&#226;ssis. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Cette fonctionnalit&#233; n&#8217;est pas activ&#233;e par d&#233;faut, en raison du temps de calcul suppl&#233;mentaire que cela n&#233;cessite (quelques dixi&#232;mes &#224; quelques secondes suivant les cas). </span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour l&#8217;activer, il faut ajouter une nouvelle cl&#233; dans le fichier winpro.ini:</span></p>
<p class="p_Textestd"><span class="f_Winproini">[system]</span></p>
<p class="p_Textestd"><span class="f_Winproini">Stocker PR &nbsp; &nbsp; &nbsp; &nbsp;= 1</span><span class="f_Textestd"> pour activer la fonctionnalit&#233;</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 0</span><span class="f_Textestd"> pour d&#233;sactiver la fonctionnalit&#233; (valeur par d&#233;faut)</span></p>

</td></tr></table>
</div>

</body>
</html>
