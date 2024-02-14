<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["3.1.xx"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn31xx.php"; }
else { parent.quicksync('a11.19.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>3.1.xx</title>
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
     <a href="rn33xx.php">Previous</a>&nbsp;
     <a href="rn30xx.php">Next</a>
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
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 3.1.02</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">11/4/2000</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">D&#233;tail des composants:</span><span class="f_Textestd"> Un probl&#232;me mineur &#233;tait apparu dans la version 2.4 : les articles identiques dans un m&#234;me ch&#226;ssis n&#8217;&#233;taient plus toujours fusionn&#233;s en une seule ligne sur les plans d&#8217;atelier. Ce probl&#232;me est corrig&#233;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Mise en attente de commandes:</span><span class="f_Textestd"> Vous pouvez maintenant mettre en attente des commandes </span><span class="f_Textestd">approuv&#233;es</span><span class="f_Textestd"> (menu </span><span class="f_Textestd">Commandes | Gestion des confirmations | Mise en attente</span><span class="f_Textestd">). Ces commandes apparaissent en </span><span class="f_Textestd">caract&#232;res rouges</span><span class="f_Textestd"> dans la liste des commandes &#224; mettre en attente. Les r&#233;servations de stock de ces commandes seront annul&#233;es.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Encours client:</span><span class="f_Textestd"> La liste des devis a &#233;t&#233; supprim&#233;e de l&#8217;encours.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 3.1.01</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">3/4/2000</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Notion de cadre:</span><span class="f_Textestd"> En plus de l&#8217;impression des cadres en liste, vous pouvez aussi en obtenir l&#8217;impression sur des &#233;tiquettes. Ce choix se fait au niveau de la d&#233;finition du cadre (</span><span class="f_Textestd">Technique</span><span class="f_Textestd"> </span><span class="f_Textestd">|</span><span class="f_Textestd"> </span><span class="f_Textestd">Cadre</span><span class="f_Textestd">). Il est possible d&#8217;obtenir les deux types d&#8217;impression.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Exportation du dessin:</span><span class="f_Textestd"> Vous pouvez maintenant exporter le dessin d&#8217;un ch&#226;ssis en format EMF (Enhanced Metafile). Il s&#8217;ag&#238;t l&#224; d&#8217;un format graphique natif de Windows, et support&#233; par de nombreux logiciels (Office et AutoCad entre autre). Cliquez simplement sur le nouveau bouton situ&#233; au-dessus du dessin (onglet dessin de la commande). Le dessin est alors transf&#233;r&#233; dans le presse papier. Vous pouvez ensuite coller le dessin dans un autre logiciel. Le format du dessin &#233;tant de type vectoriel, le niveau de d&#233;tail sera conserv&#233; quelle que soit la taille du dessin apr&#232;s collage. Enfin, si des coupes ont &#233;t&#233; d&#233;finies, ces coupes seront &#233;galement incluses dans le dessin.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;"><table align="center" cellspacing="0" cellpadding="2" border="1" style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 3.1.00</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">29/3/2000</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Notion de cadre:</span><span class="f_Textestd"> WinPro permettait jusqu&#8217;ici de manipuler des cadres (c-&#224;-d des entit&#233;s constitu&#233;es d&#8217;une description et de 2 dimensions) dans les plans d&#8217;atelier sp&#233;cifiques au ch&#226;ssis en bois.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Cette notion est &#233;tendue &#224; tous les types de fen&#234;tres. Elle vous permet de d&#233;finir des listes de cadres, imprim&#233;es pour chaque fabrication. Cette liste permet par exemple d&#8217;imprimer une liste des moustiquaires &#224; fabriquer, ou une liste de tabliers, ou une liste de joints &#224; vulcaniser, etc. &#8230; Les cadres peuvent &#234;tre group&#233;s par cat&#233;gorie (num&#233;ro de 1 &#224; 99), les cadres d&#8217;une m&#234;me cat&#233;gorie &#233;tant imprim&#233;s sur une m&#234;me feuille.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Les cadres peuvent &#234;tre cr&#233;&#233;s &#224; partir des ouvrants, dormants et quincailleries. Leur dimension sera toujours celle de l&#8217;&#233;l&#233;ment dans lequel ils sont cr&#233;&#233;s, &#224; savoir la dimension de fabrication du dormant, la dimension ext&#233;rieur du vantail si le cadre est cr&#233;&#233; dans un ouvrant, ou la dimension de la quincaillerie du vantail si le cadre est cr&#233;&#233; dans une quincaillerie (selon le param&#233;trage du syst&#232;me, ext&#233;rieur vantail ou fond de feuillure).</span></p>
<p class="p_Textestd"><span class="f_Textestd">La syntaxe pour la cr&#233;ation des cadres est la suivante :</span></p>
<p class="p_Textestd"><span class="f_Variables">Cadre (</span><span class="f_Textestd">description</span><span class="f_Variables">,</span><span class="f_Textestd"> agrandissement</span><span class="f_Variables">)</span><span class="f_Textestd">ou </span><span class="f_Variables">Cadre (#</span><span class="f_Textestd">code, agrandissement</span><span class="f_Variables">)</span></p>
<p class="p_Textestd"><span class="f_Textestd">Dans le 1</span><span class="f_Textestd">er</span><span class="f_Textestd"> cas, la description du cadre est donn&#233;e directement dans la formule, et le cadre est d&#8217;office sans cat&#233;gorie. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Dans le 2</span><span class="f_Textestd">&#232;me</span><span class="f_Textestd"> cas, le signe </span><span class="f_Variables">#</span><span class="f_Textestd"> indique que l&#8217;on fait r&#233;f&#233;rence &#224; la description d&#8217;un cadre se trouvant dans la table des cadres, et la cat&#233;gorie est celle d&#233;finie dans cette table. De plus, le cadre peut &#234;tre traduit dans ce 2</span><span class="f_Textestd">&#232;me</span><span class="f_Textestd"> cas.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Le 2</span><span class="f_Textestd">&#232;me</span><span class="f_Textestd"> param&#232;tre utilis&#233; dans la formule indique une &#233;ventuelle expansion du cadre par rapport au cadre de r&#233;f&#233;rence. </span></p>
<p class="p_Textestd"><span class="f_Textestd">La valeur du param&#232;tre peut &#234;tre n&#233;gative, ce qui signifie alors que le cadre sera plus petit que l&#8217;original.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Il existe une m&#233;thode alternative, utilisable dans le cas de cadres d&#8217;ouvrant ou de quincaillerie :</span></p>
<p class="p_Textestd"><span class="f_Variables">CadreOuvrant (</span><span class="f_Textestd">description</span><span class="f_Variables">,</span><span class="f_Textestd"> agrandissement</span><span class="f_Variables">)</span><span class="f_Textestd">ou </span><span class="f_Variables">CadreOuvrant (#</span><span class="f_Textestd">code</span><span class="f_Variables">,</span><span class="f_Textestd"> agrandissement</span><span class="f_Variables">)</span></p>
<p class="p_Textestd"><span class="f_Textestd">Cette m&#233;thode permet de d&#233;finir des cadres qui sont non pas de la taille d&#8217;un seul vantail, mais de la taille compl&#232;te de l&#8217;ouvrant.. La taille de base sera la taille fond de batt&#233;e dormant.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Il est aussi possible de donner des valeurs d&#8217;agrandissement diff&#233;rentes pour chacun des c&#244;t&#233;s. Dans ce cas, il faut donner les param&#232;tres dans l&#8217;ordre suivant : bas, haut, gauche, droite, plus les deux param&#232;tres optionnels haut gauche, haut droite.</span></p>

</td></tr></table>
</div>

</body>
</html>
