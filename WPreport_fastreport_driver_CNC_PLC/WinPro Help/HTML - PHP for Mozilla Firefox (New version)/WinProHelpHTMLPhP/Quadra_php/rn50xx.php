<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["5.0.xx"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn50xx.php"; }
else { parent.quicksync('a11.15.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>5.0.xx</title>
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
     <a href="rn51xx.php">Previous</a>&nbsp;
     <a href="rn41xx.php">Next</a>
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
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 5.0.07</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">26/12/2000</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Lots d&#8217;optimisation des volets:</span><span class="f_Textestd"> WinPro attribue et m&#233;morise maintenant un num&#233;ro de lot s&#233;par&#233; pour les volets roulants. Si une ensemble ch&#226;ssis/volet est optimis&#233; dans deux lots s&#233;par&#233;s (un pour le ch&#226;ssis, un pour le volet), les num&#233;ros de lots seront donc diff&#233;rents. Ces num&#233;ros sont imprim&#233;s sur les plans d&#8217;atelier.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Valorisation de l&#8217;encours:</span><span class="f_Textestd"> Par le menu </span><span class="f_Textestd">Commande | Listes d&#8217;encours | Valorisation de l&#8217;encours ,</span><span class="f_Textestd"> vous pouvez &#233;valuer de mani&#232;re approximative l&#8217;encours commande de WinPro. Pour cela, WinPro se base sur l&#8217;&#233;tat d&#8217;avancement de chaque commande, et sur son prix calcul&#233;. Vous pouvez attribuer (menu </span><span class="f_Textestd">Utilitaires | Pr&#233;f&#233;rences | Valorisation de l&#8217;encours des commandes</span><span class="f_Textestd">) &#224; chaque &#233;tat un pourcentage fixe, qui sera appliqu&#233; sur le prix de la commande, afin d&#8217;en &#233;valuer sa valeur approximative. Cette m&#233;thode n&#8217;est accessible que si vous disposez d&#8217;une licence incluant la gestion de production.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 5.0.06</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">29/11/2000</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Chutes sur chutes:</span><span class="f_Textestd"> Vous pouvez d&#233;cider, pour chaque couleur de profil, s&#8217;il faut accepter de faire des chutes sur les chutes ou pas. Une nouvelle case &#224; cocher dans la liste des couleurs de chaque profil vous permet de faire ce choix. Par d&#233;faut, les chutes sur chutes ne sont pas accept&#233;es.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Num&#233;ros de lots:</span><span class="f_Textestd"> WinPro vous autorise &#224; indiquer, au moment de la cr&#233;ation de chaque lot, un code alphanum&#233;rique qui repr&#233;sente ce lot. Ce code sera affich&#233; ou imprim&#233; sur toutes les listes et &#233;tiquettes g&#233;n&#233;r&#233;es par WinPro. Il est indiff&#233;rent pour Winpro qu&#8217;un code identique soit affect&#233; &#224; plusieurs lots (WinPro utilise son num&#233;ro interne).</span></p>
<p class="p_Textestd"><span class="f_Textestd">Si vous ne sp&#233;cifiez aucun code pour un lot, le num&#233;ro interne sera utilis&#233; &#224; sa place ; il est donc parfaitement possible d&#8217;utiliser &#224; la fois les num&#233;ros WinPro pour certains lots, et des num&#233;ros &#8216;manuels&#8217; pour d&#8217;autres lots.</span></p>
<p class="p_Textestd"><span class="f_Textestd">L'activation de cette fonctionnalit&#233; se param&#232;tre dans le fichier winpro.ini:</span></p>
<p class="p_Textestd"><span class="f_Winproini">[optimisation]</span></p>
<p class="p_Textestd"><span class="f_Winproini">code &nbsp; &nbsp; &nbsp; &nbsp;= 1 </span><span class="f_Textestd">pour activer la codification utilisateur</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 0 </span><span class="f_Textestd">pour que Winpro impose le code du lot (par d&#233;faut)</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Proposition de commande:</span><span class="f_Textestd"> </span><span class="f_Textestd">Il faut maintenant qu&#8217;une proposition de commande soit imprim&#233;e pour qu&#8217;elle soit prise en compte au niveau du stock pr&#233;visionnel.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 5.0.05</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">29/11/2000</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Mise en production:</span><span class="f_Textestd"> Vous pouvez s&#233;lectionner simultan&#233;ment plusieurs lots pour les mettre en production ; une seule liste d&#8217;articles hors stock sera imprim&#233;e, regroupant tous les lots.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Contr&#244;le fin de cha&#238;ne:</span><span class="f_Textestd"> Un nouveau module WinPro vous permet de contr&#244;ler quelles fen&#234;tres sont termin&#233;es &#224; l&#8217;atelier. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ce menu comprend deux parties, l&#8217;une destin&#233;e &#224; l&#8217;atelier, l&#8217;autre au bureau. Ces deux parties doivent &#234;tre activ&#233;es au moyen d&#8217;un num&#233;ro de licence WinPro sp&#233;cifique.</span></p>
<p class="p_Textestd"><span class="f_Textestd">La premi&#232;re partie permet de saisir sur cha&#238;ne chaque fen&#234;tre termin&#233;e. Cette saisie se fait au moyen d&#8217;un lecteur code barre, ce qui implique que l&#8217;impression des code barre sur &#233;tiquettes doit &#234;tre activ&#233;e (nous consulter le cas &#233;ch&#233;ant). Lorsque la derni&#232;re fen&#234;tre d&#8217;une commande est valid&#233;e, la commande est automatiquement marqu&#233;e comme &#8216;Termin&#233;e&#8217;. Elle peut alors suivre son cours (impression de la pr&#233;paration de livraison, bon de livraison, &#8230;).</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img src="img/img_114.jpg" width="1024" height="768" border="0" vspace="1" hspace="1" alt="img_114"></p>
<p class="p_Textestd"><span class="f_Textestd">La deuxi&#232;me partie est accessible par le menu </span><span class="f_Textestd">&#8216;Commandes | Gestion de production | Commandes en cours de production&#8217; </span><span class="f_Textestd">; il s&#8217;ag&#238;t d&#8217;une simple liste des commandes envoy&#233;es en production mais pas encore termin&#233;es.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelles variables:</span><span class="f_Textestd"> Deux nouvelles variables sont disponibles dans les formules de dormant : </span><span class="f_Variables">LargeurTableau</span><span class="f_Textestd"> et </span><span class="f_Variables">HauteurTableau</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 5.0.04</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">15/11/2000</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Lots d&#8217;accessoires:</span><span class="f_Textestd"> WinPro vous permet de sp&#233;cifier l&#8217;optimisation, et donc aussi la mise en production, de lots d&#8217;accessoires (articles, profils, t&#244;les pli&#233;es), s&#233;par&#233;ment des ch&#226;ssis de la commande. Une nouvelle case &#224; cocher, dans la constitution des lots d&#8217;optimisation, vous permet d&#8217;inclure ou non les accessoires dans le lot. Si vous demandez plus d&#8217;une fois l&#8217;optimisation de ces accessoires pour une m&#234;me commande, WinPro n&#8217;en prendra bien s&#251;r compte que pour le premier lot.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Optimisation des traverses:</span><span class="f_Textestd"> Vous pouvez, au moment de l&#8217;optimisation, d&#233;cider que les traverses doivent &#234;tre optimis&#233;es plus tard, en regroupant plusieurs lots. La mise en production se fera &#233;galement s&#233;par&#233;ment, si vous avez activ&#233; l&#8217;option de mise en production.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Les r&#233;servations de stock tiennent bien s&#251;r compte de cette m&#233;thode.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Attention ! Si vous mettez en production un lot de traverses avant d&#8217;avoir mis en production les ch&#226;ssis correspondants, le recalcul des r&#233;servations sera relativement long !</span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous pouvez demander &#224; WinPro de vous proposer par d&#233;faut cette m&#233;thode d&#8217;optimisation en cochant la case correspondante dans l&#8217;onglet </span><span class="f_Textestd">Optimisation</span><span class="f_Textestd"> du menu </span><span class="f_Textestd">Utilitaires | Pr&#233;f&#233;rences.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Dialogue Pr&#233;f&#233;rences | utilitaires:</span><span class="f_Textestd"> Ce dialogue appara&#238;t maintenant en plein &#233;cran ; vous pouvez aussi ouvrir d&#8217;autres fen&#234;tres sans n&#233;cessairement fermer ce dialogue ; par contre, son contenu ne sera pris en compte qu&#8217;une fois que le dialogue est valid&#233; et ferm&#233;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 5.0.03</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">15/11/2000</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Lots de vitrages:</span><span class="f_Textestd"> Vous pouvez s&#233;lectionner simultan&#233;ment plusieurs lots de vitrage &#224; imprimer. Attention, tous ces lots auront une seule et unique date de livraison !</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 5.0.02</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">8/11/2000</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Acomptes:</span><span class="f_Textestd"> Un nouvel onglet dans la fen&#234;tre des commandes client permet de lister les acomptes factur&#233;s; ces acomptes seront d&#233;compt&#233;s de la facture finale. Attention! Vous devez indiquer les montants hors TVA!</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelles variables:</span><span class="f_Textestd"> Deux nouvelles variables ont &#233;t&#233; ajout&#233;es aux ouvrants et traverses d&#8217;ouvrants : </span><span class="f_Variables">EpaisseurVitrage[]</span><span class="f_Textestd"> et </span><span class="f_Variables">nEpaisseurVitrage</span><span class="f_Textestd">; ces deux variables indique la liste des &#233;paisseurs de vitrages pr&#233;sentes dans l&#8217;ouvrant (</span><span class="f_Variables">EpaisseurVitrage[]</span><span class="f_Textestd"> est un tableau contenant la liste proprement dite; </span><span class="f_Variables">nEpaisseurVitrage</span><span class="f_Textestd"> indique le nombre d&#8217;&#233;l&#233;ments du tableau).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 5.0.01</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">2/11/2000</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_TitreReleaseNote">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Fichier d&#8217;aide:</span><span class="f_Textestd"> Vous pouvez maintenant choisir, pour chaque utilisateur, le fichier d&#8217;aide &#224; utiliser dans WinPro. Cette nouvelle caract&#233;ristique permet d&#8217;utiliser des fichiers d&#8217;aides diff&#233;rents selon la langue de chaque utilisateur.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Textes des documents:</span><span class="f_Textestd"> les textes figurant sur les documents client sont d&#233;sormais des textes &#8216;enrichis&#8217;. Vous pouvez, &#224; l&#8217;int&#233;rieur de chaque texte, choisir plusieurs styles, types, tailles de caract&#232;res ou de paragraphe. Le fonctionnement est similaire &#224; celui de WordPad, livr&#233; avec Windows NT et Windows 2000. Les textes concern&#233;s sont : texte de d&#233;but et de fin de document client, texte de commentaire de chaque ch&#226;ssis</span><span style="font-family: 'Tahoma'; color: #000000;"> (client et atelier), texte d&#8217;atelier.</span></p>
<p class="p_Textestd"><span style="font-family: 'Tahoma'; color: #000000;">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 5.0.00</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">1/10/2000</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Recouvrements ouvrant/dormant variable:</span><span class="f_Textestd"> WinPro comprend maintenant 6 nouvelles variables, qui permettent de modifier dynamiquement le recouvrement ouvrant/dormant, pour chaque c&#244;t&#233; individuellement. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ces variables sont utilis&#233;es comme suit :</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">1. WinPro commence par calculer le recouvrement standard, tel que d&#233;fini dans les signal&#233;tiques ouvrant et quincaillerie.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">2. WinPro calcule ensuite les entraxes ouvrant/dormant standard, &#233;galement d&#233;finis dans le signal&#233;tique ouvrant.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">3. WinPro &#233;value les formules de profils de quincaillerie, puis d&#8217;ouvrant, et r&#233;cup&#232;re les valeurs des variables de recouvrement. WinPro arr&#234;te l&#8217;&#233;valuation des formules &#224; la premi&#232;re formule ex&#233;cut&#233;e effectivement (ce pourrait ne pas &#234;tre la formule n&#176; 1 si celle-ci est filtr&#233;e pour la couleur, p.ex.).</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">4. WinPro recalcule les dimensions hors tout de l&#8217;ouvrant en tenant compte des nouvelles valeurs.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">5. WinPro &#233;value, &#224; ce moment, les formules de profils de quincaillerie et d&#8217;ouvrant, pour r&#233;cup&#233;rer les variables de jeu entre les vantaux.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Les 6 nouvelles variables pour le contr&#244;le des recouvrements sont les suivantes :</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Variables">RecouvrementHaut</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Variables">RecouvrementBas</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Variables">RecouvrementGauche</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Variables">RecouvrementDroite</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Variables">RecouvrementHautGauche</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Variables">RecouvrementHautDroite</span></p>
<p class="p_Textestd"><span class="f_Textestd">Ces variables sont au d&#233;part cr&#233;&#233;es par WinPro avec les valeurs standard; elles peuvent donc &#234;tre modifi&#233;es par simple assignation (p.ex. </span><span class="f_Variables">RecouvrementGauche := 10</span><span class="f_Textestd">), ou par modification (p.ex. </span><span class="f_Variables">RecouvrementGauche += 3</span><span class="f_Textestd">). Elles peuvent bien &#233;videmment prendre des valeurs n&#233;gatives; dans ce cas il n&#8217;y a plus de recouvrement, mais bien un jeu entre l&#8217;ouvrant et le dormant.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Saisie des dimensions:</span><span class="f_Textestd"> Vous pouvez dor&#233;navant saisir vos cotes en dimensions fabrication ou tableau. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour cela, la saisie des cotes dans une commande a &#233;t&#233; d&#233;plac&#233;e dans un onglet s&#233;par&#233;; il suffit de choisir le mode de saisie, et &#233;ventuellement de saisir les corrections. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Le type de cote non saisi est automatiquement calcul&#233; et appara&#238;t &#224; l&#8217;&#233;cran, &#224; c&#244;t&#233; des cotes saisies.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table cellspacing="0" cellpadding="0" border="0" style="border: none border-spacing:0px;">
<tr valign="top" align="left">
<td valign="middle" width="409" style="width: 409px;"><p style="margin: 0px 0px 0px 24px;"><img src="img/img_115.jpg" width="372" height="216" border="0" vspace="1" hspace="1" alt="img_115"></p>
</td>
<td width="1177" style="width: 1177px;"><p style="margin: 0px 0px 0px 24px;"><img src="img/img_116.jpg" width="508" height="388" border="0" vspace="1" hspace="1" alt="img_116"></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">Ce type d&#8217;encodage peut &#234;tre contr&#244;l&#233; pour chaque dormant; un nouvel onglet a &#233;t&#233; cr&#233;&#233; dans la d&#233;finition des dormants, qui permet d&#8217;autoriser ou non chaque type de saisie, et &#233;ventuellement de d&#233;finir une s&#233;rie de valeurs de correction sugg&#233;r&#233;es ou obligatoires.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Listes &#233;cran:</span><span class="f_Textestd"> L&#8217;interface de la plupart des listes apparaissant &#224; l&#8217;&#233;cran a &#233;t&#233; revue; vous pouvez d&#233;sormais r&#233;gler vous-m&#234;me la largeur des colonnes, trier les listes dynamiquement sur toute colonne (tri ascendant et descendant), exporter la liste dans une table FoxPro, et imprimer la liste telle qu&#8217;elle appara&#238;t (m&#234;mes proportions entre colonnes, m&#234;mes ordres de tris, respect des couleurs et des s&#233;lections &#233;ventuelles). De plus, les r&#233;glages de largeur de colonne sont m&#233;moris&#233;s pour chaque liste et pour chaque utilisateur.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour imprimer ou exporter une de ces listes, il suffit de cliquer dans la liste avec le bouton droit de la souris; un menu vous propose d&#8216;exporter ou d&#8217;imprimer. Pour exporter, vous devrez sp&#233;cifier un nom de ficher et un r&#233;pertoire; pour imprimer, un dialogue d&#8217;impression standard vous permet de param&#233;trer l&#8217;impression, ou d&#8217;annuler.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Liste des ch&#226;ssis d&#8217;une commande : Vous pouvez maintenant d&#233;placer un ch&#226;ssis dans la liste des ch&#226;ssis d&#8217;une commande. Il suffit de maintenir le bouton gauche de &nbsp;la souris enfonc&#233; lorsqu&#8217;elle pointe sur le nom du ch&#226;ssis, et de descendre ou remonter, puis de l&#226;cher le bouton &#224; l&#8217;endroit voulu.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd" style="text-decoration: underline;">N.B.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">1. Les variantes ne peuvent &#234;tre d&#233;plac&#233;es hors de port&#233;e du ch&#226;ssis de base; de m&#234;me, les &#233;l&#233;ments d&#8217;ensemble ne pourront &#234;tre d&#233;plac&#233;s hors de l&#8217;ensemble.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">2. Les ensembles et ch&#226;ssis avec variantes peuvent &#234;tre d&#233;plac&#233;s; dans ce cas, bien s&#251;r, les ch&#226;ssis qui leur sont li&#233;s suivent.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Imputation pose:</span><span class="f_Textestd"> La ventilation comptable de la pose peut &#234;tre sp&#233;cifi&#233;e s&#233;par&#233;ment; </span></p>
<p class="p_Textestd"><span class="f_Textestd">Il faut pour cela ajouter, dans WinPro.ini, la cl&#233; suivante :</span></p>
<p class="p_Textestd"><span class="f_Winproini">[Accounting]</span></p>
<p class="p_Textestd"><span class="f_Winproini">Imputation pose = </span><span class="f_Textestd" style="font-weight: bold;">xxx</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Textestd">xxx est &#224; remplacer par le compte d&#8217;imputation ad&#233;quat.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Frais de port:</span><span class="f_Textestd"> L&#8217;onglet Prix de l&#8217;encodage des commandes contient un nouveau champ vous permettant de saisir d&#8217;&#233;ventuels frais de port, avec ou sans TVA. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour la liaison &#224; la comptabilit&#233;, de champ peut recevoir son propre compte d&#8217;imputation, avec en plus distinction entre le port avec et sans TVA. Il faut ajouter les cl&#233;s suivantes dans WinPro.ini:</span></p>
<p class="p_Textestd"><span class="f_Winproini">[Accounting]</span></p>
<p class="p_Textestd"><span class="f_Winproini">Imputation port sans TVA = </span><span class="f_Textestd" style="font-weight: bold;">xxx &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">xxx est &#224; remplacer par le </span><span class="f_Textestd">compte d&#8217;imputation </span><span class="f_Textestd">port sans TVA</span></p>
<p class="p_Textestd"><span class="f_Winproini">Imputation port avec TVA = </span><span class="f_Textestd" style="font-weight: bold;">xxx &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">xxx est &#224; remplacer par le </span><span class="f_Textestd">compte d&#8217;imputation </span><span class="f_Textestd">port avec TVA</span></p>
<p class="p_Textestd"><span class="f_Winproini">Code TVA port = </span><span class="f_Textestd" style="font-weight: bold;">xxx &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">xxx est &#224; remplacer par le </span><span class="f_Textestd">code </span><span class="f_Textestd">TVA du port</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Note d&#8217;envoi r&#233;capitulative:</span><span class="f_Textestd"> une note d&#8217;envoi r&#233;capitulative chiffr&#233;e par client peut &#234;tre imprim&#233;e si cette option est activ&#233;e dans la fiche documents client sous le menu &#171; pr&#233;f&#233;rence &#187;. La note d&#8217;envoi r&#233;capitulative est imprim&#233;e lorsque une ou plusieurs note d&#8217;envois sont imprim&#233;es pour un m&#234;me client. Ce document reprend toutes les commandes &#224; livrer pour un m&#234;me client et donne un aper&#231;u des montants &#224; payer. Un montant de frais de livraison ainsi qu&#8217;un montant franco de port &nbsp;peuvent &#234;tre encod&#233;s dans la fiche client.</span></p>
<p style="margin: 0px 0px 0px 53px;"><span style="font-family: 'Tahoma'; color: #000000;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 53px;"><span style="font-family: 'Tahoma'; color: #000000;">&nbsp;</span></p>

</td></tr></table>
</div>

</body>
</html>
