<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["6.4.0x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn640x.php"; }
else { parent.quicksync('a11.8.7'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>6.4.0x</title>
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
     <a href="rn641x.php">Previous</a>&nbsp;
     <a href="rn63xx.php">Next</a>
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
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.08</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">25/5/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Impression des documents par poste d&#8217;atelier:</span><span class="f_Textestd"> vous pouvez indiquer, pour chaque poste, s&#8217;il faut imprimer en continu ou forcer un saut de page entre chaque ch&#226;ssis. Il suffit de cocher la case correspondante dans la d&#233;finition du poste d&#8217;atelier.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Variable de quincaillerie:</span><span class="f_Textestd"> La variable </span><span class="f_Variables">Forme2</span><span class="f_Textestd"> compl&#233;mente la variable de quincaillerie Forme, de la m&#234;me mani&#232;re que </span><span class="f_Variables">FormeDormant2</span><span class="f_Textestd"> compl&#233;mente la variable </span><span class="f_Variables">FormeDormant</span><span class="f_Textestd">; veuillez vous reporter &#224; la note 6.4.4 pour plus de d&#233;tails.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Alternativement, vous pouvez utiliser dans les quincailleries les variables </span><span class="f_Variables">FormeOuvrant</span><span class="f_Textestd"> et </span><span class="f_Variables">FormeOuvrant2</span><span class="f_Textestd"> &#224; la place respectivement de </span><span class="f_Variables">Forme</span><span class="f_Textestd"> et </span><span class="f_Variables">Forme2</span><span class="f_Textestd">. Ces variables ont une valeur strictement identique (</span><span class="f_Variables">Forme</span><span class="f_Textestd">=</span><span class="f_Variables">FormeOuvrant</span><span class="f_Textestd">, </span><span class="f_Variables">Forme2</span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">=</span><span class="f_Variables">FormeOuvrant2</span><span style="font-family: 'Tahoma'; color: #000000;">).</span></p>
<p class="p_Textestd"><span style="font-family: 'Tahoma'; color: #000000;">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.07</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">21/5/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Co&#251;t de la main d&#8217;oeuvre:</span><span class="f_Textestd"> Vous pouvez indiquer deux co&#251;ts par main d&#8217;&#339;uvre : un co&#251;t tarif, et un co&#251;t courant.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">M&#233;thode de calcul prix tarif / prix courant:</span><span class="f_Textestd"> Une nouvelle possibilit&#233; vous est donn&#233;e : lier la m&#233;thode de calcul au code tarif. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Pr&#233;c&#233;demment, cette m&#233;thode de calcul &#233;tait li&#233;e &#224; la fiche client. La nouvelle m&#233;thode vous propose trois choix : utiliser la m&#233;thode de la fiche client (valeur par d&#233;faut) ; utiliser le calcul sur prix tarif ; utiliser la calcul sur prix de revient. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Le choix se fait au niveau de la d&#233;finition du code tarif. Si vous ne modifiez rien, le programme continue &#224; se comporter comme auparavant.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Basculement prix courant &#224; prix tarif:</span><span class="f_Textestd"> Le dialogue de basculement des prix vous permet maintenant de basculer les prix d&#8217;articles, main d&#8217;&#339;uvre et vitrages.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Chaque type de donn&#233;e peut &#234;tre trait&#233; s&#233;par&#233;ment ou combin&#233; selon vos besoins.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.06</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">13/5/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Cases &#224; cocher &#8216;Arrondir par 10 cm&#8217;, &#8216;Compter les chutes RAL&#8217;, &#8216;R&#233;partir chutes RAL&#8217;:</span><span class="f_Textestd"> </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ces trois cases &#224; cocher peuvent &#234;tre contr&#244;l&#233;es via le fichier WinPro.ini, &nbsp;, par les variables suivantes :</span></p>
<p class="p_Textestd"><span class="f_Winproini">[Customer Order]</span></p>
<p class="p_Textestd"><span class="f_Winproini">Round up &nbsp; &nbsp; &nbsp; &nbsp;= 0 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">non s&#233;lectionn&#233; et modifiable par l&#8217;utilisateur</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 1 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">s&#233;lectionn&#233; et modifiable par l&#8217;utilisateur (valeur par d&#233;faut)</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 2 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">non s&#233;lectionn&#233; et non modifiable</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 3 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">s&#233;lectionn&#233; et non modifiable</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Winproini">Ral Cutoffs &nbsp; &nbsp; &nbsp; &nbsp;= 0 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">non s&#233;lectionn&#233; et modifiable par l&#8217;utilisateur</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 1 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">s&#233;lectionn&#233; et modifiable par l&#8217;utilisateur (valeur par d&#233;faut)</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 2 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">non s&#233;lectionn&#233; et non modifiable</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 3 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">s&#233;lectionn&#233; et non modifiable</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Winproini">Ral distribution= 0 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">non s&#233;lectionn&#233; et modifiable par l&#8217;utilisateur</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 1 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">s&#233;lectionn&#233; et modifiable par l&#8217;utilisateur (valeur par d&#233;faut)</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 2 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">non s&#233;lectionn&#233; et non modifiable</span></p>
<p class="p_Textestd"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Winproini">= 3 &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">s&#233;lectionn&#233; et non modifiable</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.04 &amp; 05</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">2/5/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Traverses verticales:</span><span class="f_Textestd"> Une modification importante a &#233;t&#233; apport&#233;e aux traverses verticales, dont la coupe en haut est diff&#233;rente de 90&#176;. Pr&#233;c&#233;demment, le programme retournait le cas &#233;ch&#233;ant de la traverse, de telle sorte que la coupe soit toujours inf&#233;rieure &#224; 90&#176;. Ceci entra&#238;nait toutefois des probl&#232;mes d&#8217;usinage. A pr&#233;sent, la traverse n&#8217;est plus retourn&#233;e ; l&#8217;angle de coupe sup&#233;rieur peut donc &#234;tre de plus de 90&#176;. Il y aura lieu de modifier le driver de certains centres d&#8217;usinage.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelles variables de quincaillerie:</span><span class="f_Textestd"> deux nouvelles variables, </span><span class="f_Variables">LargeurVantail</span><span class="f_Textestd"> et </span><span class="f_Variables">HauteurVantail</span><span class="f_Textestd">, vous donnent les dimensions hors tout du cadre de chaque vantail. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour les formes non rectangulaires, ces variables contiennent la plus grande dimension correspondante (p. ex. si plein cintre, hauteur au sommet du cintre).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Variables de forme:</span><span class="f_Textestd"> </span><span class="f_Variables">FormeDormant2</span><span class="f_Textestd"> et </span><span class="f_Variables">FormeOuvrant2</span><span class="f_Textestd"> : Ces variables contiennent les m&#234;mes valeurs que les variables correspondantes </span><span class="f_Variables">FormeDormant</span><span class="f_Textestd"> et </span><span class="f_Variables">FormeOuvrant</span><span class="f_Textestd">; &#224; ceci pr&#232;s que </span><span class="f_Variables">FormeDormant</span><span class="f_Textestd"> et </span><span class="f_Variables">FormeOuvrant</span><span class="f_Textestd"> &#233;taient impr&#233;cis au niveau des cintres : il &#233;tait impossible de distinguer les pleins cintres, cintres plats, et autres cintres. </span><span class="f_Variables">FormeDormant2</span><span class="f_Textestd"> et </span><span class="f_Variables">FormeOuvrant2</span><span class="f_Textestd"> corrigent ce probl&#232;me. Il &#233;tait n&#233;cessaire de cr&#233;er de nouveaux noms de variable, pour maintenir la compatibilit&#233; avec les versions pr&#233;c&#233;dentes.</span></p>
<p class="p_Textestd"><span class="f_Textestd">De mani&#232;re pr&#233;cise, </span><span class="f_Variables">FormeDormant2</span><span class="f_Textestd"> et </span><span class="f_Variables">FormeOuvrant2</span><span class="f_Textestd"> peuvent prendre, outre les valeurs admises pour </span><span class="f_Variables">FormeDormant</span><span class="f_Textestd"> et </span><span class="f_Variables">FormeDormant</span><span class="f_Textestd">, les valeurs suivantes, suivant la forme du cadre correspondant :</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Variables">PleinCintre</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Variables">DemiPleinCintre</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CintrePlat</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Variables">DemiCintrePlat</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Cintre</span><span class="f_Textestd"> (pour les autres cintres except&#233; les anses de panier)</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Veuillez noter que la nouvelle variable globale </span><span class="f_Variables">_FormeDormant</span><span class="f_Textestd"> se comporte comme </span><span class="f_Variables">FormeDormant2</span><span class="f_Textestd">, &#224; ceci pr&#232;s qu&#8217;elle est disponible partout, et que les valeurs possibles commencent toutes par un sous-tiret (p.ex. </span><span class="f_Variables">_Rectangle</span><span class="f_Textestd">, </span><span class="f_Variables">_Triangle</span><span class="f_Textestd">, etc.).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.03</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">25/4/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Anses de panier &#224; 5 centres:</span><span class="f_Textestd"> 4 nouvelles formes (X, Y, Z, [ ) autorisent la cr&#233;ations de fen&#234;tres en anses de panier &#224; 5 centres. Les formes X et Y sont surtout destin&#233;es &#224; g&#233;rer des formes cr&#233;&#233;es automatiquement par WinPro (p.ex. des assemblages en anses de panier, d&#233;compos&#233;s horizontalement et verticalement). Vous utiliserez surtout les formes Z et [, pour lesquelles il suffit d&#8217;encoder la largeur et la hauteur.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Variable globale:</span><span class="f_Textestd"> la variable </span><span class="f_Variables">_VoletSeul</span><span class="f_Textestd"> a &#233;t&#233; ajout&#233;e aux variables de configuration de fen&#234;tre. Elle a la m&#234;me signification que la variable </span><span class="f_Variables">VoletSeul</span><span class="f_Textestd"> disponible au niveau du caisson, mais la variable globale est accessible partout, et notamment au niveau des formules de question.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.02</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">17/4/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Situations ma&#231;onnerie:</span><span class="f_Textestd"> </span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous disposez, dans la d&#233;finition du dormant, de 4 corrections par c&#244;t&#233;, au lieu de 3 pr&#233;c&#233;demment.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Les situations ma&#231;onneries pr&#233;d&#233;finies comportent un libell&#233; suppl&#233;mentaire, qui sert de titre aux cotes tableau ; ce titre est utilis&#233; &#224; lors de la saisie et sur les documents imprim&#233;s et export&#233;s.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Elles comportent aussi une colonne &#8216;Par d&#233;faut&#8217;, qui permet de d&#233;finir quelle est la situation ma&#231;onnerie par d&#233;faut pour chaque dormant. Lorsque le dormant est chang&#233;, sa situation par d&#233;faut est automatiquement appliqu&#233;e.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Exportation des documents : deux nouveaux enregistrements sont g&#233;n&#233;r&#233;s dans la table Det.dbf, pour identifier la situation ma&#231;onnerie et les cotes tableau :</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">pour la situation ma&#231;onnerie, un D se trouve dans le champ Type, le texte se trouve dans le champ Texte, le code situation se trouve dans le champ Info1, et un S se trouve dans le champ Info2 ;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">pour le titre des cotes tableau, un D se trouve dans le champ Type, le titre se trouve dans le champ Texte, et un T se trouve dans le champ Info2.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Traduction des situations ma&#231;onnerie : Il est possible de traduire les situations ma&#231;onneries, ainsi que les titres des cotes tableau correspondantes. Attention ! Les traductions sont identifi&#233;es par le code dormant et le code situation (1&#232;re colonne du tableau de saisie des situations). Si donc vous modifiez le code situation, il est imp&#233;ratif de re-saisir les traductions correspondantes.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Coupe en simple ou en double (module multi-scie):</span><span class="f_Textestd"> WinPro vous permet de d&#233;finir si un profil doit &#234;tre coup&#233; en simple ou en double, individuellement pour chaque profil. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Toutefois, si un profil peut &#234;tre coup&#233; sur plusieurs scies, il est possible que certaines scies permettent une coupe en double, d&#8217;autres pas. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous pouvez donc maintenant d&#233;finir quelles scies exigent une coupe simple. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Cochez pour cela la case correspondante dans la d&#233;finition des scies (menu Technique | Scies).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Pr&#233;-utilisation des chutes par sous-lot (module lignes de production):</span><span class="f_Textestd"> Vous pouvez, pour chaque scie, d&#233;finir si vous souhaitez que les chutes d&#8217;un sous-lot soient directement utilis&#233;es pour couper des morceaux des sous-lots suivants. Cette possibilit&#233; &#224; l&#8217;avantage de r&#233;duire les manipulations, mais l&#8217;inconv&#233;nient de ne pas pouvoir toujours &#234;tre appliqu&#233;es, en fonction de l&#8217;organisation de votre atelier en sortie de d&#233;coupe (p.ex. la proc&#233;dure est inapplicable aux robots de rangement automatique des d&#233;coupes).</span></p>
<p class="p_Textestd"><span class="f_Textestd">Remarque : la m&#233;thode d&#8217;utilisation de ces chutes n&#8217;essaie pas vraiment d&#8217;optimiser la d&#233;coupe de ces chutes. Elle se contente de rechercher un ou plusieurs morceaux dans les lots qui suivent, pouvant tenir dans chaque chute, sans chercher la meilleure combinaison, et sans tenir compte des contraintes de chute minimum ou maximum. Cette m&#233;thode peut donc amener un l&#233;ger surplus de chutes &#224; jeter, compar&#233;e &#224; la m&#233;thode d&#8217;optimisation habituelle. Par contre, cette m&#233;thode a l&#8217;avantage de tenter d&#8217;utiliser chaque chute syst&#233;matiquement. Il faut donc bien comprendre que le but de cette option est de r&#233;duire les manipulations, au prix d&#8217;un l&#233;ger gaspillage de profils.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour reconna&#238;tre les morceaux pr&#233;d&#233;coup&#233;s sur des &#233;tiquettes, le num&#233;ro de sous lot et de casier est imprim&#233; en grand et en contour. Ex. :</span><span class="f_Textestd" style="font-weight: bold;"> !! 2.3 !!</span><span class="f_Textestd"> ; pour les listes d&#8217;optimisation sur papier, la ligne correspondant au morceau est imprim&#233;e en rouge, et le num&#233;ro de casier est pr&#233;c&#233;d&#233; du num&#233;ro de sous-lot.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.01</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">11/4/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Saisie des traverse:</span><span class="f_Textestd"> Le dialogue de saisie a &#233;t&#233; am&#233;lior&#233;, afin de permettre de saisir directement, en m&#234;me temps que la traverse, la configuration de remplissage de part et d&#8217;autre. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Cette configuration de remplissage peut en outre &#234;tre m&#233;moris&#233;e, pour &#234;tre rappel&#233;e automatiquement lors de la saisie de la traverse suivante.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 6.4.00</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">1/4/2002</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Choix d&#8217;une forme de dormant:</span><span class="f_Textestd"> Ce choix a &#233;t&#233; int&#233;gr&#233; &#224; la fen&#234;tre dimension, dans un but ergonomique.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Anses de panier:</span><span class="f_Textestd"> De nouvelles formes vous permettent de manipuler des anses de panier &#224; 3 centres. </span></p>
<p class="p_Textestd"><span class="f_Textestd">De nouvelles variables ont &#233;t&#233; cr&#233;&#233;es, et d&#8217;autres red&#233;finies, pour r&#233;cup&#233;rer les diff&#233;rents rayons d&#8217;un m&#234;me profil :</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;"><table cellspacing="0" cellpadding="4" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="174" style="width: 174px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">FormeDormant </span></p>
<p class="p_Textestd"><span class="f_Variables">FormeOuvrant</span></p>
<p class="p_Textestd"><span class="f_Variables">_FormeDormant</span></p>
<p class="p_Textestd"><span class="f_Variables">FormeDormant2</span></p>
<p class="p_Textestd"><span class="f_Variables">FormeOuvrant2</span></p>
</td>
<td width="450" style="width: 450px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Ces variables, qui repr&#233;sentent la forme d&#8217;un cadre, peuvent maintenant, en plus des possibilit&#233;s existant pr&#233;c&#233;demment (Rectangle, TriangleRectangle, PleinCintre, etc. &#8230;), prendre la valeur AnsePanierComplete (forme V), ou DemiAnsePanier (forme W).</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="174" style="width: 174px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">Forme</span></p>
</td>
<td width="450" style="width: 450px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">La variable Forme repr&#233;sentant la forme d&#8217;un segment peut &nbsp;prendre les valeurs Droit, Cintre, ou maintenant Anse. Si Forme &#224; pour valeur Anse, les variables suivantes sont disponibles :</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="174" style="width: 174px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">NCourbes</span></p>
</td>
<td width="450" style="width: 450px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Nombre de sections courbes dans le profil (1 section = 1 centre et 1 rayon)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="174" style="width: 174px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">CentreXCadre[]</span></p>
</td>
<td width="450" style="width: 450px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Centre X de chaque segment courbe (position horizontale) par rapport au bord gauche du dormant.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="174" style="width: 174px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">CentreYCadre[]</span></p>
</td>
<td width="450" style="width: 450px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Centre Y de chaque segment courbe (position verticale) par rapport au bord bas du dormant.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="174" style="width: 174px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">RayonCadre[]</span></p>
</td>
<td width="450" style="width: 450px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Rayon de chaque segment courbe.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="174" style="width: 174px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">OuvertureCadre[]</span></p>
</td>
<td width="450" style="width: 450px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Angle d&#8217;ouverture de chaque segment (longueur de la portion de cercle parcourue, en degr&#233;s).</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="174" style="width: 174px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">AngleDebutCadre[]</span></p>
</td>
<td width="450" style="width: 450px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Angle de d&#233;part de chaque segment, en degr&#233;s, conform&#233;ment au cercle trigonom&#233;trique (c.-&#224;-d. que 0&#176; est &#224; l&#8217;intersection droite du cercle et de son diam&#232;tre horizontal, et 90&#176; &#224; l&#8217;intersection haute avec le diam&#232;tre vertical).</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="174" style="width: 174px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">AngleFinCadre[]</span></p>
</td>
<td width="450" style="width: 450px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Angle de fin de chaque segment.</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Tahoma'; font-style: italic; color: #000000;">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="color: #ff0000;">Attention ! Les m&#234;mes noms de variables sont utilis&#233;s pour les cintres simples et les anses de panier. Toutefois, dans le cas des cintres simples, il s&#8217;ag&#238;t de variables ordinaires, comportant une seule valeur ; dans le cas des anses de panier, il s&#8217;ag&#238;t de variables tableaux, comportant une &#224; 3 valeurs (jusqu&#8217;&#224; 5 quand les anses de panier &#224; 5 centres seront impl&#233;ment&#233;es).Toutefois, le syst&#232;me utilis&#233; reste compatible avec le param&#233;trage des versions pr&#233;c&#233;dentes.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Saisie des dimensions:</span><span class="f_Textestd"> WinPro vous pr&#233;sente maintenant, pour chaque forme, un croquis repr&#233;sentant la signification exacte de chaque dimension.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Vue int&#233;rieure/ext&#233;rieure:</span><span class="f_Textestd"> WinPro vous donne la possibilit&#233; d&#8217;imprimer, indiff&#233;remment, la vue int&#233;rieure ou ext&#233;rieure d&#8217;une fen&#234;tre, en fonction du type de document.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Les possibilit&#233;s sont les suivantes :</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table cellspacing="0" cellpadding="4" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Vue normale</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Imprime la vue int&#233;rieure ou ext&#233;rieur, suivant la d&#233;finition du syst&#232;me</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Vue invers&#233;e</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Imprime le ch&#226;ssis en inversant la vue d&#233;finie dans le syst&#232;me</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Toujours 2 vues</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Imprime toujours les 2 vues</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="115" style="width: 115px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">2 vues si bicolore</span></p>
</td>
<td width="377" style="width: 377px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Imprime 2 vues uniquement si le ch&#226;ssis comporte du bicolore ; sinon imprime la nue normale.</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">Le choix du type de vue se d&#233;finit ind&#233;pendamment pour chaque syst&#232;me, dans l&#8217;onglet Vues int/ext du syst&#232;me, et par type de document : document client, plan d&#8217;atelier, poste d&#8217;atelier (impression uniquement), prise de mesure, r&#233;capitulatifs.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous pouvez &#233;galement d&#233;cider quelle couleur est montr&#233;e &#224; la saisie : couleur int&#233;rieure ou ext&#233;rieure. La saisie se fait par contre toujours telle que d&#233;finie dans le syst&#232;me.</span></p>
<p class="p_Textestd"><span class="f_Textestd">La page Dessin de la saisie des commandes vous permet de retourner la vue de mani&#232;re interactive.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Au point de vue du param&#233;trage, cette nouvelle possibilit&#233; am&#232;ne quelques ajouts :</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Dans les vitrages, panneaux &#224; d&#233;couper et panneaux d&#233;coratifs, vous pouvez d&#233;finir 2 dessins, un pour la vue normale, l&#8217;autre pour la vue invers&#233;e.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Dans les formules d&#8217;application des dessins (quincailleries, panneaux fabriqu&#233;s, a&#233;rateurs, croisillons, ...) et dans les formules de dessin, vous disposez d&#8217;une variable Vue, qui peut prendre l&#8217;une des valeurs suivantes : VueInterieure ou VueExterieure.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Dans les formules d&#8217;application des dessins (quincailleries, panneaux fabriqu&#233;s, a&#233;rateurs, croisillons, ...), vous disposez de deux cases &#224; cocher, qui vous permettent d&#8217;activer ou d&#233;sactiver un dessin en fonction de la vue.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelles variables dans les panneaux fabriqu&#233;s:</span><span class="f_Textestd"> Ces nouvelles variables ont &#233;t&#233; ajout&#233;es :</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table cellspacing="0" cellpadding="4" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="145" style="width: 145px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">NumeroRemplissage</span></p>
</td>
<td width="385" style="width: 385px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Index du panneau dans les variables de description des remplissages</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="145" style="width: 145px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">EpaisseurVitrage</span></p>
</td>
<td width="385" style="width: 385px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Cette variable est utilisable dans chaque formule de vitrage ; elle indique l&#8217;&#233;paisseur du vitrage.</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelles variables globales:</span><span class="f_Textestd"> De nouveaux tableaux ont &#233;t&#233; ajout&#233;s aux variables de configuration :</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table cellspacing="0" cellpadding="4" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="191" style="width: 191px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Variables">_RemplEnHaut[]</span></p>
<p class="p_Textestd"><span class="f_Variables">_RemplEnBas[]</span></p>
<p class="p_Textestd"><span class="f_Variables">_RemplAGauche[]</span></p>
<p class="p_Textestd"><span class="f_Variables">_RemplAdroite[]</span></p>
</td>
<td width="331" style="width: 331px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Ces variables correspondent &#224; chaque remplissage. Elles peuvent prendre l&#8217;une des valeurs suivantes : </span><span class="f_Variables">_Dormant</span><span class="f_Textestd">, </span><span class="f_Variables">_Ouvrant</span><span class="f_Textestd">, </span><span class="f_Variables">_Traverse</span><span class="f_Textestd">. Attention ! contrairement aux variables de m&#234;me nom utilis&#233;es dans les traverses, Dormant et Ouvrant ont des valeurs diff&#233;rentes.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="191" style="width: 191px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Variables">_RemplEpaisseurHaut[]</span></p>
<p class="p_Textestd"><span class="f_Variables">_RemplEpaisseurBas[]</span></p>
<p class="p_Textestd"><span class="f_Variables">_RemplEpaisseurGauche[]</span></p>
<p class="p_Textestd"><span class="f_Variables">_RemplEpaisseurDroite[]</span></p>
</td>
<td width="331" style="width: 331px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Ces variables correspondent &#224; chaque remplissage. Elles indiquent l&#8217;&#233;paisseur du cadre entourant le remplissage. S&#8217;il s&#8217;agit du cadre dormant ou ouvrant, la valeur indiqu&#233;e est la largeur int&#233;rieure du profil. S&#8217;il s&#8217;ag&#238;t d&#8217;une traverse, la largeur est la demi largeur int&#233;rieure de la traverse (soit la largeur jusqu&#8217;&#224; l&#8217;axe)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="191" style="width: 191px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_Ntabliers</span></p>
</td>
<td width="331" style="width: 331px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">cette variable indique le nombre de tabliers dans le volet (</span><span class="f_Variables">0</span><span class="f_Textestd"> si pas de volet).</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="191" style="width: 191px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_LargeurTablier[]</span></p>
</td>
<td width="331" style="width: 331px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">ce tableau donne la liste des largeurs de tablier (entraxe coulisse)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="191" style="width: 191px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_OuvrantTravGauche[]</span></p>
<p class="p_Textestd"><span class="f_Variables">_OuvrantTravDroite[]</span></p>
<p class="p_Textestd"><span class="f_Variables">_OuvrantTravHaut[]</span></p>
<p class="p_Textestd"><span class="f_Variables">_OuvrantTravBas[]</span></p>
</td>
<td width="331" style="width: 331px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Ces variables correspondent &#224; chaque ouvrant. Elles indiquent le num&#233;ro de la traverse qui touche chaque c&#244;t&#233; de chaque ouvrant. Une valeur de </span><span class="f_Variables">0</span><span class="f_Textestd"> indique que l&#8217;ouvrant est contigu au dormant pour le c&#244;t&#233; concern&#233;.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="191" style="width: 191px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Variables">_TravTravGauche[]</span></p>
<p class="p_Textestd"><span class="f_Variables">_TravTravDroite[]</span></p>
<p class="p_Textestd"><span class="f_Variables">_TravTravHaut[]</span></p>
<p class="p_Textestd"><span class="f_Variables">_TravTravBas[]</span></p>
</td>
<td width="331" style="width: 331px; border: solid 1px ;"><p class="p_Textestd"><span class="f_Textestd">Ces variables correspondent &#224; chaque traverse. Elles indiquent le num&#233;ro de la traverse qui touche les bouts de chaque traverse. Une valeur de </span><span class="f_Variables">0</span><span class="f_Textestd"> indique que la traverse est touche le cadre dormant ou le cadre ouvrant sur le bout concern&#233;.</span></p>
</td>
</tr>
</table>
</div>

</td></tr></table>
</div>

</body>
</html>
