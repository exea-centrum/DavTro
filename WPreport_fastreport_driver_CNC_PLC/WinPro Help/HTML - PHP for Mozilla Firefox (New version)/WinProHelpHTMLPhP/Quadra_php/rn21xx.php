<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["2.1.x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn21xx.php"; }
else { parent.quicksync('a11.24.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>2.1.x</title>
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
     <a href="rn22xx.php">Previous</a>&nbsp;
     <a href="rn20xx.php">Next</a>
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
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 2.01</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">1/9/1999</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Variante compl&#232;te:</span><span class="f_Textestd"> WinPro distingue 2 types de variantes : la variante compl&#232;te et la variante simple. La variante compl&#232;te s&#8217;obtient en cliquant avec le bouton droit de la souris sur le nom du ch&#226;ssis concern&#233;, et en s&#233;lectionnant le dernier point de menu (Ajout variante). WinPro vous cr&#233;e alors automatiquement une copie du ch&#226;ssis original, que vous pouvez modifier sans aucune restriction (teinte, forme, composition, syst&#232;me, vitrage, accessoires, etc). Sur le devis, cette variante occupera autant de place qu&#8217;un autre ch&#226;ssis, mais ne sera pas reprise dans le total. De plus, un libell&#233; sp&#233;cifique indiquera dans le titre du ch&#226;ssis qu&#8217;il s&#8217;agit bien d&#8217;une variante. Enfin, cette variante sera li&#233;e graphiquement a son ch&#226;ssis principal (figure 1).</span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous pouvez transformer une variante en ch&#226;ssis principal en cliquant avec le bouton droit sur le nom de la variante. S&#233;lectionnez le dernier point de menu (variante principale). La variante est alors &#233;chang&#233;e avec la ch&#226;ssis principal.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Vous pouvez aussi demander &#224; WinPro d&#8217;indiquer soit le prix complet de la variante, soit seulement la diff&#233;rence avec le ch&#226;ssis principal (case &#224; cocher Imprimer la diff&#233;rence de prix dans la page Ch&#226;ssis).</span></p>
<p class="p_Textestd"><span class="f_Textestd">Par d&#233;faut, WinPro attribue &#224; la variante le nom du ch&#226;ssis principal suivi d&#8217;un tiret et d&#8217;un num&#233;ro d&#8217;ordre; vous pouvez &#233;videmment modifier ce nom comme pour tout autre ch&#226;ssis.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img src="img/img_125.jpg" width="110" height="109" border="0" vspace="1" hspace="1" alt="img_125"></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Variante simple:</span><span class="f_Textestd"> Une version simplifi&#233;e des variantes est &#233;galement disponible. Elle se restreint &#224; la couleur principale du ch&#226;ssis, au vitrage principal, et aux accessoires de quincaillerie. Ces variantes occupent beaucoup moins de place &#224; l&#8217;impression (une seule ligne) et indiquent la diff&#233;rence de prix par rapport au ch&#226;ssis principal. Dans certains cas, la variante peut ne pas &#234;tre r&#233;alisable. WinPro indique ceci clairement.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img src="img/img_126.jpg" width="21" height="21" border="0" vspace="1" hspace="1" alt="img_126"><span class="f_Textestd"> </span><span class="f_Textestd">Vous s&#233;lectionnez une variante simple en cliquant sur le bouton</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Variantes accessoires:</span><span class="f_Textestd"> vous disposez d&#8217;une nouvelle colonne Option dans la liste des accessoires. Cochez la case contenue dans cette colonne pour chaque accessoire optionnel.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span style="font-family: 'Tahoma'; color: #ff0000;">Les variantes sont d&#8217;application exclusivement au moment de l&#8217;encodage des devis. Si un devis est transform&#233; en commande, les variantes en seront automatiquement supprim&#233;es (WinPro vous en pr&#233;viendra en temps utile).</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Historique des commandes:</span><span class="f_Textestd"> pour certaines &#233;tapes de l&#8217;historique (optimisation, mise en production), WinPro indique maintenant le num&#233;ro de lot dans le libell&#233; de l&#8217;historique. </span></p>
<p class="p_Textestd"><span class="f_Textestd">De m&#234;me, toute modification de l&#8217;&#233;tat d&#8217;une commande ou d&#8217;un ch&#226;ssis donne maintenant lieu &#224; un enregistrement dans l&#8217;historique des commandes. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Pour la modification d&#8217;&#233;tat d&#8217;un ch&#226;ssis, le num&#233;ro du ch&#226;ssis modifi&#233; se retrouve dans la description de l&#8217;action.</span></p>

</td></tr></table>
</div>

</body>
</html>
