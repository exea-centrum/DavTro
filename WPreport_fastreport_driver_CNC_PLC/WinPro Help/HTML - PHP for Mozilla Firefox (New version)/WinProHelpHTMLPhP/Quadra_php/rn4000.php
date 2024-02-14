<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["4.0.00"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn4000.php"; }
else { parent.quicksync('a11.17.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>4.0.00</title>
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
     <a href="rn41xx.php">Previous</a>&nbsp;
     <a href="rn33xx.php">Next</a>
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
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 4.0.00</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">5/6/2000</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Optimisation:</span><span class="f_Textestd"> Un nouveau moteur d&#8217;optimisation a &#233;t&#233; int&#233;gr&#233; &#224; WinPro. Cette nouvelle optimisation poss&#232;de les caract&#233;ristiques suivantes :</span></p>
<p class="p_Textestd"><span class="f_Textestd">  &nbsp; &nbsp;- Optimisation globale (le r&#233;sultat est jug&#233; globalement et plus profil par profil).</span></p>
<p class="p_Textestd"><span class="f_Textestd">  &nbsp; &nbsp;- Longueurs standard variables (jusqu&#8217;&#224; 6 longueurs).</span></p>
<p class="p_Textestd"><span class="f_Textestd">  &nbsp; &nbsp;- Couleurs disponibles diff&#233;rentes suivant longueur standard.</span></p>
<p class="p_Textestd"><span class="f_Textestd">  &nbsp; &nbsp;- Espacement variable entre les morceaux en fonction des angles de coupe.</span></p>
<p class="p_Textestd"><span class="f_Textestd">  &nbsp; &nbsp;- Temps de calcul modifiable, pour choisir entre vitesse et qualit&#233;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Cette nouvelle optimisation ne demande pas de param&#233;trage particulier. Toutefois, comme elle peut prendre en compte jusqu&#8217;&#224; 6 longueurs standard, il sera n&#233;cessaire, pour certains profils, de sp&#233;cifier ces longueurs suppl&#233;mentaires.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Quincailleries:</span><span class="f_Textestd"> WinPro permet maintenant de modifier le recouvrement ouvrant/dormant pour chaque quincaillerie et pour chaque c&#244;t&#233; du cadre ouvrant.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Biblioth&#232;ques:</span><span class="f_Textestd"> Il est maintenant possible de verrouiller compl&#232;tement un ch&#226;ssis en biblioth&#232;que, en cochant sur la case pr&#233;vue &#224; cet effet. Quand le ch&#226;ssis sera utilis&#233; dans une commande, il sera impossible de modifier quoi que ce soit.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Clients:</span><span class="f_Textestd"> Un nouveau bouton, &#224; c&#244;t&#233; du code client, permet de cr&#233;er un nouveau num&#233;ro automatiquement.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Prix minimum du vitrage:</span><span class="f_Textestd"> Pour les calculs de vitrages selon prix tarif et au m</span><span class="f_Textestd">2</span><span class="f_Textestd">, il est maintenant possible de d&#233;finir un prix minimum pour le vitrage.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Prix de revient:</span><span class="f_Textestd"> Le prix de revient affich&#233; &#224; l&#8217;&#233;cran dans la page prix est dor&#233;navant le prix de revient </span><span class="f_Textestd">courant.</span><span class="f_Textestd"> C&#8217;est ce m&#234;me prix de revient qui est enregistr&#233; dor&#233;navant dans le champ PR de la table commande.dbf.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Prix de vente net:</span><span class="f_Textestd"> Le prix de vente net affich&#233; &#224; l&#8217;&#233;cran est pour toute commande confirm&#233;e &#224; partir de cette mise &#224; jour, le </span><span class="f_Textestd">prix de vente confirm&#233;</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Exportation de commande fournisseur:</span><span class="f_Textestd"> WinPro peut exporter une commande fournisseur de mani&#232;re &#224; ce qu&#8217;elle puisse &#234;tre r&#233;cup&#233;r&#233;e dans une commande client. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour cela, vous devez d&#233;finir dans WinPro.ini la section suivante :</span></p>
<p class="p_Textestd"><span class="f_Winproini">[Export Cde Fourn]</span></p>
<p class="p_Textestd"><span class="f_Winproini">Fournisseur =</span><span class="f_Variables"> </span><span class="f_Textestd" style="font-weight: bold;">xxx &nbsp; &nbsp; &nbsp; &nbsp;</span><span class="f_Textestd">xxx est le nom du fournisseur pour lequel il faut exporter</span></p>
<p class="p_Textestd"><span class="f_Winproini">Path =</span><span class="f_Textestd"> </span><span class="f_Textestd" style="font-weight: bold;">ppp</span><span class="f_Textestd">   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ppp est le r&#233;pertoire dans lequel stocker la cde export&#233;e</span></p>
<p class="p_Textestd"><span class="f_Winproini">Client =</span><span class="f_Textestd"> </span><span class="f_Textestd" style="font-weight: bold;">ccc</span><span class="f_Textestd">  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ccc est le num&#233;ro de client dans la commande client</span></p>
<p class="p_Textestd"><span class="f_Winproini">Tarif =</span><span class="f_Textestd"> </span><span class="f_Textestd" style="font-weight: bold;">ttt</span><span class="f_Textestd">  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ttt est le code tarif dans la commande client</span></p>
<p class="p_Textestd"><span class="f_Winproini">Code TVA =</span><span class="f_Textestd"> </span><span class="f_Textestd" style="font-weight: bold;">vvv</span><span class="f_Textestd">    &nbsp; &nbsp; &nbsp; &nbsp;vvv est le code TVA dans la commande client</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Chutes RAL:</span><span class="f_Textestd"> WinPro vous permet maintenant de g&#233;rer les chutes des profils RAL. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Deux colonnes suppl&#233;mentaires ont &#233;t&#233; ajout&#233;es &#224; la liste des chutes; de plus la liste des chutes a &#233;t&#233; d&#233;plac&#233;e dans un nouvel onglet, pour disposer de la place suffisante.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Chutes:</span><span class="f_Textestd"> WinPro m&#233;morise maintenant la date de cr&#233;ation de chaque chute.</span></p>
<p class="p_Textestd"><span class="f_Textestd">N.B : pour les chutes cr&#233;&#233;es avant cette version de WinPro, la date est ind&#233;termin&#233;e; pour les chutes cr&#233;&#233;es manuellement, la date n&#8217;est pas encodable, mais sera forc&#233;e &#224; la date du jour au moment de l&#8217;enregistrement</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Usinages:</span><span class="f_Textestd"> Le mode de d&#233;finition de la face &#224; usiner sur les traverses a chang&#233;. </span><span class="f_Textestd">Toutefois, pour assurer la compatibilit&#233; avec la version pr&#233;c&#233;dente, une case &#224; cocher &#8216;Nouvelle version&#8217; a &#233;t&#233; ajout&#233;e au dialogue usinage. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Elle est automatiquement coch&#233;e pour tout nouvel usinage. Vous pouvez la cocher ou non selon vos besoins</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Ceci concerne les usinages qui d&#233;finissent des codes d&#8217;usinage diff&#233;rents pour la face bas ou gauche, et haut ou droit. Dans l&#8217;ancienne version, les traverses et les cadres &#233;taient affect&#233;s. Dans la nouvelle, seules les traverses sont affect&#233;es; de plus, l&#8217;ancienne version comportait un bug qui inversait la signification des notions bas/gauche, haut/droite. La correction de ce bug ne s&#8217;applique que si vous cochez la case &#8216;Nouvelle version&#8217;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Listes de sertissage:</span><span class="f_Textestd"> WinPro ajoute une nouvelle liste aux documents imprim&#233;s lors de l&#8217;optimisation : la liste de sertissage. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Il s&#8217;ag&#238;t de la liste des profils compos&#233;s, qui doivent donc &#234;tre assembl&#233;s. La liste est tri&#233;e par couleur, et indique le nombre, la longueur, les composants de chacun des profils &#224; assembler.</span></p>

</td></tr></table>
</div>

</body>
</html>
