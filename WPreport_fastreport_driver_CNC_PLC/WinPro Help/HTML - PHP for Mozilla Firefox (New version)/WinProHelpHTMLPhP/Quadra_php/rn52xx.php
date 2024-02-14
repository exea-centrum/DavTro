<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["5.2.xx"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn52xx.php"; }
else { parent.quicksync('a11.13.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>5.2.xx</title>
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
     <a href="rn60xx.php">Previous</a>&nbsp;
     <a href="rn51xx.php">Next</a>
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
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 5.2.03</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">21/3/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Listes d&#8217;encours:</span><span class="f_Textestd"> Si vous disposez de la gestion de fin de cha&#238;ne, vous pouvez imprimer une liste d&#8217;encours, o&#249; vous pourrez voir, pour chaque commande et chaque ch&#226;ssis, les quantit&#233;s command&#233;es et d&#233;j&#224; produites. Cette liste est accessible par le menu </span><span class="f_Textestd">Commandes | Liste d&#8217;encours | Etat des ch&#226;ssis</span><span class="f_Textestd">. Vous obtenez d&#8217;abord &#224; l&#8217;&#233;cran la liste des commandes en cours de production ; si vous s&#233;lectionnez une commande, vous pouvez cliquer sur un bouton qui vous donne l&#8217;&#233;tat d&#8217;avancement de chacun de ses ch&#226;ssis. Chacune des listes est imprimable. La liste des commandes peut &#234;tre g&#233;n&#233;rale, ou s&#233;lectionn&#233;e sur base du num&#233;ro de commande, zone de livraison, semaine de livraison, num&#233;ro de client.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 5.2.02</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">19/3/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Cotes tableau:</span><span class="f_Textestd"> </span><span class="f_Textestd">Vous pouvez maintenant d&#233;finir, au niveau des dormants, des configurations de ma&#231;onnerie, c-&#224;-d des groupes de valeurs de p&#233;n&#233;tration ma&#231;onnerie pr&#233;-d&#233;finies pour chaque c&#244;t&#233; du ch&#226;ssis. Ces groupes sont nomm&#233;s et peuvent &#234;tre r&#233;utilis&#233;s lors de la saisie des dimensions, au moyen d&#8217;un nouveau bouton.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 5.2.01</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">16/3/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Colisage:</span><span class="f_Textestd"> La version 5.2.1 marque le d&#233;but de la programmation d&#8217;une gestion de colis. Cette fonctionnalit&#233; sera disponible ult&#233;rieurement.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 5.2.00</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">9/3/2001</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Remises par client et par ch&#226;ssis:</span><span class="f_Textestd"> La version 5.2 apporte la possibilit&#233; de d&#233;finir jusqu&#8217;&#224; 4 remises par position, &#224; savoir : remise principale sur le ch&#226;ssis, remise secondaire sur le ch&#226;ssis, remise principale sur le volet roulant, remise secondaire sur le volet roulant. Ces remises peuvent &#234;tre encod&#233;es directement dans la page </span><span class="f_Textestd">Ch&#226;ssis</span><span class="f_Textestd"> de la fen&#234;tre </span><span class="f_Textestd">Commande</span><span class="f_Textestd">, &#224; condition d&#8217;avoir coch&#233; la case </span><span class="f_Textestd">Remise calcul&#233;e par rep&#232;re</span><span class="f_Textestd"> dans la page </span><span class="f_Textestd">Prix</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">De plus, il est possible d&#8217;appliquer une remise calcul&#233;e en fonction du client. Pour cela, vous disposez dans la fiche client d&#8217;une nouvelle page, &#8216;</span><span class="f_Textestd">Formules remise</span><span class="f_Textestd">&#8217;. La formule que vous indiquez dans cette page sera appliqu&#233;e apr&#232;s calcul de chaque ch&#226;ssis. Vous pouvez y affecter une valeur &#224; 4 variables : </span><span class="f_Variables">_Remise</span><span class="f_Textestd">, </span><span class="f_Variables">_Remise2</span><span class="f_Textestd">, </span><span class="f_Variables">_RemiseVolet</span><span class="f_Textestd">, </span><span class="f_Variables">_RemiseVolet2</span><span class="f_Textestd">. Vous disposez de toutes les possibilit&#233;s du langage de WinPro pour calculer ces remises, et notamment, vous pouvez r&#233;cup&#233;rer des variables globales provenant du reste du param&#233;trage. Vous pouvez donc, par ce syst&#232;me, calculer une remise pour chaque client en fonction de la composition de chaque fen&#234;tre (p.ex., +1% si PVC blanc).</span></p>
<p class="p_Textestd"><span class="f_Textestd">Attention ! Pour que la remise calcul&#233;e soit appliqu&#233;e, il ne faut pas encoder de remise au niveau du ch&#226;ssis. Vous pouvez par contre, dans une m&#234;me commande, appliquer des remises encod&#233;es sur certains ch&#226;ssis, et calcul&#233;es sur d&#8217;autres</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Onglet &#8216;R&#233;capitulatif&#8217;:</span><span class="f_Textestd"> </span><span class="f_Textestd">Les remises par ch&#226;ssis nous ont amen&#233;s &#224; modifier la pr&#233;sentation des prix dans une commande. Tous les prix calcul&#233;s ont &#233;t&#233; enlev&#233;s des pages Prix et Informations. Vous les retrouverez sur la page R&#233;capitulatif, avec de nouveaux renseignements : d&#233;tail par fen&#234;tre, prix total net de la commande, prix de revient, marges, &#8230; (bien s&#251;r, chaque utilisateur doit disposer de droits suffisants pour voir ce qui concerne les marges et prix de revient). Tous les prix sur cette page sont calcul&#233;s selon une proc&#233;dure identique &#224; celle calculant les documents. Vous y trouverez donc exactement les m&#234;mes prix que sur les documents papier, puisqu&#8217;on y applique notamment les m&#234;mes d&#233;compositions de calcul et donc les m&#234;mes m&#233;thodes d&#8217;arrondi. Ce qui n&#8217;&#233;tait pas le cas avec l&#8217;ancien syst&#232;me !</span></p>
<p class="p_Textestd"><span class="f_Textestd">De plus cette nouvelle pr&#233;sentation acc&#233;l&#232;re consid&#233;rablement l&#8217;acc&#232;s &#224; la page </span><span class="f_Textestd">Prix</span><span class="f_Textestd">, o&#249; vous encodez toujours les remises, conditions de paiement, TVA, &#8230;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Enfin, un certain nombre de cases &#224; cocher pr&#233;sentes anciennement sur la page </span><span class="f_Textestd">Action </span><span class="f_Textestd">ont &#233;t&#233; ramen&#233;es sur la page </span><span class="f_Textestd">Prix</span><span class="f_Textestd">, pour une question de logique de saisie.</span></p>

</td></tr></table>
</div>

</body>
</html>
