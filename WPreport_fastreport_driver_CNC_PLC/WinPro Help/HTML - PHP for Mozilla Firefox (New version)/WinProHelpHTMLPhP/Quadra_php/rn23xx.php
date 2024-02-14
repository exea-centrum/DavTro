<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["2.3.xx"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn23xx.php"; }
else { parent.quicksync('a11.22.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>2.3.xx</title>
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
     <a href="rn24xx.php">Previous</a>&nbsp;
     <a href="rn22xx.php">Next</a>
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
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 2.3.02</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">13/12/1999</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Recherche dans les formules:</span><span class="f_Textestd"> Vous pouvez maintenant aussi utiliser cette fonction pour remplacer automatiquement du texte dans les formules.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Vitrages, croisillons, a&#233;rateurs, accessoires de quincaillerie:</span><span class="f_Textestd"> Vous pouvez exclure certains enregistrements de la base de donn&#233;es devis (WinPro/D), comme c&#8217;&#233;tait d&#233;j&#224; possible pour d&#8217;autres &#233;l&#233;ments (dormants, ouvrants, quincailleries, &#8230;)</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Num&#233;rotation des vitrages:</span><span class="f_Textestd"> Les num&#233;ros de vitrage contiennent maintenant un chiffre suppl&#233;mentaire, de fa&#231;on &#224; permettre un tri correct m&#234;me lorsque le ch&#226;ssis contient plus de 9 ouvrants, ou qu&#8217;un vantail contient plus de 9 vitrages. L&#8217;ancienne num&#233;rotation avait la forme &#8216;1.1.1&#8217;; le nouveau format correspondant est &#8216;1.01.01&#8217;.</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="font-size: 14pt; font-weight: bold; color: #808080;">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="font-size: 14pt; font-weight: bold; color: #808080;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 2.3.01</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">29/11/1999</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Suppl&#233;ments forfaitaires sur commande:</span><span class="f_Textestd"> Vous pouvez maintenant appliquer des &#8216;suppl&#233;ments&#8217; n&#233;gatifs.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Position des traverses:</span><span class="f_Textestd"> La formule peut utiliser une nouvelle variable, </span><span class="f_Variables">T</span><span class="f_Textestd">, qui repr&#233;sente la hauteur du seuil de ch&#226;ssis &#233;ventuel. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ceci permet d&#8217;indiquer une hauteur de traverse par rapport au bas du seuil, plut&#244;t que par rapport &#224; l&#8217;ext&#233;rieur du dormant. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Attention! Cette m&#233;thode ne tient pas compte d&#8217;&#233;ventuels profils de rehausse situ&#233;s entre le seuil et le dormant, ou sous le seuil.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img src="img/img_122.jpg" width="624" height="142" border="0" vspace="1" hspace="1" alt="img_122"></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Position et nombre des traverses:</span><span class="f_Textestd"> Vous pouvez demander &#224; WinPro de m&#233;moriser la quantit&#233; et la position des traverses que vous ins&#233;rez. Ces informations seront repropos&#233;es pour la prochaine traverse.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 2.3.00</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">2/11/1999</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Articles command&#233;s sur mesure:</span><span class="f_Textestd"> une nouvelle case &#224; cocher dans la fiche article permet &#224; WinPro d&#8217;ajouter une dimension dans la description de l&#8217;article au moment de la cr&#233;ation d&#8217;une commande fournisseur automatique (proposition de commande). </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ceci est notamment utile pour les a&#233;rateurs command&#233;s sur mesure.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Cette fonctionnalit&#233; est disponible pour les articles, mais pas pour les profils, qui disposent d&#233;j&#224; d&#8217;un syst&#232;me de calcul de longueur sp&#233;cifique.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Description des articles:</span><span class="f_Textestd"> Vous pouvez ins&#233;rer dans la description d&#8217;un article des instructions qui seront remplac&#233;es au moment du calcul par une couleur ou une dimension. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Les deux instructions support&#233;es pour le moment sont:</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">#1#</span><span class="f_Textestd"> Cette instruction sera remplac&#233;e par la couleur de la pi&#232;ce</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Variables">#2#</span><span class="f_Textestd"> Cette instruction sera remplac&#233;e par la longueur de la pi&#232;ce, telle qu&#8217;expliqu&#233;e ci-dessus.</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="text-decoration: underline;">Exemple:</span></p>
<p class="p_Textestd"><span class="f_Variables">A&#233;rateur 73 m&#179;/h laqu&#233; couleur RAL #1# , longueur #2# mm</span></p>
<p class="p_Textestd"><span class="f_Textestd">sera par exemple remplac&#233; apr&#232;s calcul par :</span></p>
<p class="p_Textestd"><span class="f_Variables">A&#233;rateur 73 m&#179;/h laqu&#233; couleur RAL 9010 (ext.), 3005 (int.) , longueur 710 mm</span></p>
<p class="p_Textestd"><span class="f_Textestd">Ce remplacement est valable aussi bien pour la description interne, la description traduite, ou la commande au fournisseur.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Prix d&#8217;achat:</span><span class="f_Textestd"> WinPro vous permet maintenant de modifier d&#8217;un pourcentage donn&#233; les prix d&#8217;achat et de revient courant d&#8217;une liste d&#8217;articles, limit&#233;es &#224; une seule cat&#233;gorie ou &#224; un seul fournisseur ou &#224; une combinaison des deux.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img src="img/img_123.jpg" width="424" height="200" border="0" vspace="1" hspace="1" alt="img_123"></p>

</td></tr></table>
</div>

</body>
</html>
