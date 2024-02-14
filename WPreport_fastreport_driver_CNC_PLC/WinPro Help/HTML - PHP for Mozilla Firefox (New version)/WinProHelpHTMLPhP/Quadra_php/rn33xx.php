<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["3.3.xx"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn33xx.php"; }
else { parent.quicksync('a11.18.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>3.3.xx</title>
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
     <a href="rn4000.php">Previous</a>&nbsp;
     <a href="rn31xx.php">Next</a>
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
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 3.3.01</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">27/4/2000</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Description fournisseur des articles:</span><span class="f_Textestd"> WinPro supporte maintenant jusque 4 descriptions fournisseur par article, en fonction des quantit&#233;s command&#233;es. Ces descriptions figurent sur les pages Fournisseur de la fiche article, &#224; c&#244;t&#233; de la quantit&#233; li&#233;e au prix d&#8217;achat. Elles seront combin&#233;es, sur le bon de commande au fournisseur, avec la description de base.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 3.3.00</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">25/4/2000</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Facturation partielle:</span><span class="f_Textestd">Une commande dans WinPro peut &#224; partir de cette version &#234;tre livr&#233;e et factur&#233;e partiellement. Cette possibilit&#233; est disponible actuellement uniquement pour les ch&#226;ssis d&#8217;une commande. La totalit&#233; des profils, articles et pose compl&#233;mentaires sont consid&#233;r&#233;s faire partie de la premi&#232;re note d&#8217;envois ou facture. Les &#233;crans de s&#233;lection des ch&#226;ssis &#224; livrer ou &#224; facturer montrent les quantit&#233;s fabriqu&#233;es, livr&#233;es et factur&#233;es. Une proposition de quantit&#233; &#224; traiter est faite selon la fonction choisie. Pour la livraison, la quantit&#233; propos&#233;e est : la quantit&#233; fabriqu&#233;e &#8211; la quantit&#233; d&#233;j&#224; livr&#233;e. Pour la facturation, la quantit&#233; propos&#233;e est : la quantit&#233; livr&#233;e &#8211; la quantit&#233; d&#233;j&#224; factur&#233;e. Un historique des livraisons et facturations partielles est gard&#233; dans la base de donn&#233;e Winpro, de ce fait, une r&#233;impression du bordereau de livraison partielle ou de facturation partielle est possible.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Profils compos&#233;s:</span><span class="f_Textestd"> WinPro vous permet maintenant de cr&#233;er des profils compos&#233;s. Cette fonction est surtout destin&#233;e aux fabricants de ch&#226;ssis aluminium qui assemblent eux-m&#234;me les profils &#224; coupure thermique. Toutefois, rien n&#8217;emp&#234;che d&#8217;utiliser cette nouvelle fonctionnalit&#233; avec d&#8217;autres mat&#233;riaux.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour cr&#233;er un profil compos&#233;, il faut d&#8217;abord cr&#233;er un article correspondant &#224; chacun des composants. Ensuite, il faut cr&#233;er un article correspondant au profil complet, et sp&#233;cifier dans la page Composants comment l&#8217;article est constitu&#233;. WinPro tiendra compte comme suit de ces indications :</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour le calcul des composants d&#8217;un ch&#226;ssis, il comptera les articles composants au pro-rata du profil complet (donc, pour p.ex. 1 m de profil complet, il comptera 1 m de chaque profil ext&#233;rieur ou int&#233;rieur, plus 1 m pour chaque barrette (multipli&#233; par le coefficient multiplicateur &#224; c&#244;t&#233; de chaque barrette).</span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour les consommations de stock, r&#233;servations, commandes fournisseurs, il proc&#233;dera de m&#234;me, mais en tenant compte de la quantit&#233; optimis&#233;e consomm&#233;e pour le profil de base.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Articles laqu&#233;s:</span><span class="f_Textestd"> Vous pouvez indiquer, pour chaque article, qu&#8217;il doit &#234;tre laqu&#233;. Le type et la quantit&#233; de laque sont alors indiqu&#233;s dans la fiche article. Vous pouvez en plus indiquer que le laquage se fait chez un sous-traitant. Suivant que l&#8217;article est laqu&#233; sur place ou que le laquage est sous-trait&#233;, WinPro imprimera une liste de laquage ou un bon de commande de laquage, respectivement.</span></p>
<p class="p_Textestd"><span class="f_Textestd">S&#8217;il s&#8217;agit d&#8217;un profil compos&#233;, le laquage sera sp&#233;cifi&#233; au niveau de chacun de ses composants. Toutefois, vous pouvez sp&#233;cifier, dans le cas o&#249; le profil est laqu&#233; d&#8217;une seule couleur, que le laquage doit &#234;tre appliqu&#233; sur le profil entier assembl&#233;, et non sur ses composants s&#233;par&#233;ment. Dans ce dernier cas, vous pouvez aussi sp&#233;cifier si le laquage est sous-trait&#233;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Prix fixes dans les biblioth&#232;ques :.WinPro vous autorise maintenant &#224; sp&#233;cifier un prix fixe pour un ch&#226;ssis dans une biblioth&#232;que. Dans ce cas, WinPro verrouille compl&#232;tement le ch&#226;ssis lorsque vous l&#8217;importez dans une commande; il est alors impossible de le modifier.</span></p>

</td></tr></table>
</div>

</body>
</html>
