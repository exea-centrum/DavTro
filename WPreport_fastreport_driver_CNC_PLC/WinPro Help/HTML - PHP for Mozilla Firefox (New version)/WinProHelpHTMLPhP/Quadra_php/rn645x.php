<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["6.4.5x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn645x.php"; }
else { parent.quicksync('a11.8.2'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>6.4.5x</title>
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
     <a href="rn646.php">Previous</a>&nbsp;
     <a href="rn644x.php">Next</a>
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
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.59</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">15/4/2003</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Variables de biblioth&#232;que:</span><span class="f_Textestd"> Vous pouvez d&#233;finir, au niveau des biblioth&#232;ques et des ch&#226;ssis de biblioth&#232;que, un num&#233;ro d&#8217;identification, qui sera stock&#233; dans les variables globales </span><span class="f_Variables">_NumeroBiblio</span><span class="f_Textestd"> (num&#233;ro de biblioth&#232;que) et </span><span class="f_Variables">_NumeroInterneBiblio</span><span class="f_Textestd"> (num&#233;ro de ch&#226;ssis de biblioth&#232;que) pour les ch&#226;ssis dans une commande, cr&#233;&#233;s &#224; partir d&#8217;un ch&#226;ssis de biblioth&#232;que.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.58</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">14/4/2003</span></p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 8px;">&nbsp;</p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Exportation des commandes de vitrage:</span><span class="f_Textestd"> Vous pouvez maintenant exporter les commandes de vitrage dans des tables FoxPro, ce qui permet de les imprimer &#224; partir de WPReport (ou tout autre g&#233;n&#233;rateur de rapport). Reportez-vous au document Dict.xls pour plus d&#8217;informations sur le contenu de ces tables.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Questions par d&#233;faut:</span><span class="f_Textestd"> Pendant la saisie, lorsque vous modifiez un &#233;l&#233;ment de base de la fen&#234;tre (syst&#232;me, dormant, ouvrant, quincaillerie, traverse, &#8230;), les premi&#232;res versions de WinPro &#233;tablissaient si possible une correspondance entre les questions/r&#233;ponses de l&#8217;ancien &#233;l&#233;ment et celles du nouveau.</span></p>
<p class="p_Textestd"><span class="f_Textestd">L&#8217;introduction de couleurs de questions a supprim&#233; cette caract&#233;ristique.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour r&#233;tablir ce comportement, la gestion des questions a &#233;t&#233; modifi&#233;e de telle sorte que, si la r&#233;ponse &#224; une question est la r&#233;ponse par d&#233;faut, lorsque l&#8217;&#233;l&#233;ment auquel appartient la question est remplac&#233; par un autre, et que le nouvel &#233;l&#233;ment contient une question correspondante, la r&#233;ponse &#224; la question du nouvel &#233;l&#233;ment est la r&#233;ponse par d&#233;faut de cette question.</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="font-style: italic; color: #ff0000;">Attention, cette &#233;valuation se fait non seulement pendant la saisie, mais aussi lors de chaque calcul (confirmation, production, &#8230;). Si vous changez les r&#233;ponses par d&#233;faut, cela peut donc avoir des cons&#233;quences sur le r&#233;sultat de ces calculs, ce qui peut &#234;tre ou non</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="font-style: italic; color: #ff0000;">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.57</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">4/4/2003</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelles variables globales:</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Variables">_OuvrantLargeurTableau []</span><span class="f_Textestd"> et </span><span class="f_Variables">_OuvrantHauteurTableau []</span><span class="f_Textestd"> : Dimensions en cotes tableau de chaque ouvrant.</span></p>
<p class="p_Textestd"><span class="f_Variables">_TravAxe []</span><span class="f_Textestd"> : Position saisie de chaque traverse</span></p>
<p class="p_Textestd"><span class="f_Variables">_TravOrigineAxe []</span><span class="f_Textestd"> : Origine de la cote saisie de chaque traverse : </span><span class="f_Variables">_Dormant</span><span class="f_Textestd"> ou </span><span class="f_Variables">_Traverse</span></p>
<p class="p_Textestd"><span class="f_Variables">_OuvrantEntraxeVantail1 []</span><span class="f_Textestd"> &#224; </span><span class="f_Variables">_OuvrantEntraxeVantail6 []</span><span class="f_Textestd"> : Cote saisie de chaque entraxe entre les vantaux de l&#8217;ouvrant.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Saisie des coulisses interm&#233;diaires en cotes tableau:</span><span class="f_Textestd"> </span></p>
<p class="p_Textestd"><span class="f_Textestd">Cette possibilit&#233; est maintenant disponible.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouveaux exports de dessins de fen&#234;tres dans les tables d&#8217;exportation:</span><span class="f_Textestd"> Vous pouvez exporter s&#233;par&#233;ment les dessins en vues int&#233;rieure et ext&#233;rieure d&#8217;une part, et avec et sans cote, d&#8217;autre part. Ces possibilit&#233;s sont contr&#244;l&#233;es &#224; partir du fichier WinPro.ini, comme suit :</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Winproini">[Mode Sortie Documents]</span></p>
<p class="p_Textestd"><span class="f_Winproini">Fichier = 1 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Sortie des dessins dans des fichiers EMF dans le r&#233;pertoire Drawing</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 0 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Pas de cr&#233;ation de fichiers.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Winproini">Memo &nbsp; &nbsp; &nbsp; &nbsp;= &nbsp;1 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Enregistrement des dessin dans les champs memo au format EMF</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= &nbsp;0 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Pas d'enregistrement des dessins dans les champs memo </span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Winproini">Fichier sans cote &nbsp; &nbsp; &nbsp; &nbsp;= 1 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Idem que la cl&#233; Fichier mais les dessins sont d&#233;pourvus de cotes.</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 0</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Winproini">Memo sans cote &nbsp; &nbsp; &nbsp; &nbsp;= 1 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Idem que la cl&#233; Memo mais les dessins sont d&#233;pourvus de cotes.</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 0</span></p>
<p class="p_Textestd"><span class="f_Winproini">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Winproini">Separation dessin &nbsp; &nbsp; &nbsp; &nbsp;= 1</span><span class="f_Textestd">  &nbsp; &nbsp; &nbsp;Les dessins des vues int&#233;rieures et ext&#233;rieures sont dans fichiers et/ou champs s&#233;par&#233;s.</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 0 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">Les dessins export&#233;s contiennent les 2 vues.</span><span class="f_Textestd" style="font-style: italic; color: #ff0000;"> souhaitable selon les cas.</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="font-style: italic; color: #ff0000;">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.56</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">21/3/2003</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Ajout d&#8217;un champ</span><span class="f_Textestd"> &#8216;quantit&#233; command&#233;e&#8217; dans la table histofac.dbf</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.55</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">20/3/2003</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd" style="text-align: center;"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Tarifs de volets:</span><span class="f_Textestd"> Il supporte maintenant les questions de manoeuvre.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.54</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">19/3/2003</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Fichier Lin.dbf:</span><span class="f_Textestd"> ajout de deux champs contenant les couleurs ext&#233;rieures et int&#233;rieures.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Module TSE:</span><span class="f_Textestd"> Cr&#233;ation d&#8217;un module permettant le fonctionnement de WinPro/D sous Terminal Server</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.52 &amp; 53</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">12/3/2003</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Vitrages compos&#233;s:</span><span class="f_Textestd"> Un nouveau module optionnel vous permet de d&#233;finir des vitrages compos&#233;s, &#224; partir d&#8217;autres vitrages, de profils, d&#8217;articles et de main d&#8217;&#339;uvre. Vous pouvez &#233;galement d&#233;finir des dessins. Le param&#233;trage de ce type de vitrage est tr&#232;s proche de celui des panneaux fabriqu&#233;s.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Visibilit&#233; des syst&#232;mes:</span><span class="f_Textestd"> Deux nouvelles possibilit&#233;s vous permettent de masquer un syst&#232;me aux utilisateurs :</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">1. Case &#224; cocher au niveau du syst&#232;me (&#8216;Invisible&#8217;). Les syst&#232;mes ainsi coch&#233;s ne seront pas accessibles aux utilisateurs.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">2. Par formule : la formule li&#233;e &#224; l&#8217;utilisateur est ex&#233;cut&#233;e ; ensuite la formule li&#233;e au syst&#232;me. Si apr&#232;s ex&#233;cution de ces deux formules la variable </span><span class="f_Variables">_Visible</span><span class="f_Textestd"> vaut </span><span class="f_Variables">0</span><span class="f_Textestd">, le syst&#232;me n&#8217;est pas accessible &#224; l&#8217;utilisateur en saisie de commande.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Saisie des coulisses interm&#233;diaires en cotes tableau:</span><span class="f_Textestd"> Une case &#224; cocher vous permet de positionner les coulisses entre deux tabliers par rapport &#224; la cote tableau de la fen&#234;tre.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Gestion des sous-lots du module de gestion de production par ligne:</span><span class="f_Textestd"> Vous pouvez choisir, en fonction de la scie, si la coupe doit &#234;tre faite en sous-lot, ou regroup&#233;e pour tout le lot.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.51</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">24/2/2003</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Biblioth&#232;ques:</span><span class="f_Textestd"> une case &#224; cocher dans l&#8217;ent&#234;te de d&#233;finition des biblioth&#232;ques vous permet de d&#233;finir qu&#8217;une biblioth&#232;que ne doit pas &#234;tre transf&#233;r&#233;e &#224; WinPro/D.</span></p>

</td></tr></table>
</div>

</body>
</html>
