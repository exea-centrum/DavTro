<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["1.4.xx"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn14xx.php"; }
else { parent.quicksync('a11.28.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>1.4.xx</title>
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
     <a href="rn15xx.php">Previous</a>&nbsp;
     <a href="rn132x.php">Next</a>
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
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 1.4.01</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">25/8/98</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Ajout d&#8217;une notion &#8216;Bois&#8217; dans les syst&#232;mes:</span><span class="f_Textestd"> Actuellement, cette notion s&#233;lectionne une autre forme de plan d&#8217;atelier simplifi&#233;, plus adapt&#233;e au bois.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Ajout d&#8217;une notion de cadre</span><span class="f_Textestd"> dans les formules de dormant, ouvrant, quincaillerie, traverse, croisillons. Ces cadres sont repris uniquement sur les plans simplifi&#233;s bois. La formule permet de d&#233;finir toute dimension de cadre, ainsi qu&#8217;une description pour chaque cadre.</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="text-decoration: underline;">Syntaxe:</span><span class="f_Textestd"> </span><span class="f_Variables">Cadre (</span><span class="f_Textestd">description</span><span class="f_Variables">, </span><span class="f_Textestd">agrandissement</span><span class="f_Variables">)</span><span class="f_Textestd">.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Note : </span><span class="f_Textestd">agrandissement</span><span class="f_Textestd"> indique de combien le cadre doit &#234;tre agrandi par rapport aux cotes du cadre de r&#233;f&#233;rence (un agrandissement n&#233;gatif donne un cadre plus petit). </span></p>
<p class="p_Textestd"><span class="f_Textestd">L&#8217;agrandissement peut &#234;tre diff&#233;rent sur chaque bord. On note alors les agrandissements dans l&#8217;ordre suivant : bas, haut, gauche, droite, haut gauche, haut droite</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Possibilit&#233; d&#8217;&#233;liminer une partie d&#8217;un ch&#226;ssis, pour des configurations de ch&#226;ssis comme celles-ci (et autres combinaisons):</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img src="img/img_130.jpg" width="210" height="240" border="0" vspace="1" hspace="1" alt="img_130"><span class="f_Textestd">  &nbsp;  </span><img src="img/img_131.jpg" width="304" height="241" border="0" vspace="1" hspace="1" alt="img_131"></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img src="img/img_132.jpg" width="305" height="240" border="0" vspace="1" hspace="1" alt="img_132"><span class="f_Textestd"> &nbsp;&nbsp;&nbsp; </span><span class="f_Textestd"> </span><img src="img/img_133.jpg" width="346" height="173" border="0" vspace="1" hspace="1" alt="img_133"></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img src="img/img_134.jpg" width="340" height="170" border="0" vspace="1" hspace="1" alt="img_134"></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="text-decoration: underline;">Utilisation:</span></p>
<p class="p_Textestd"><span class="f_Textestd">Cliquer avec le bouton droit de la souris dans la fen&#234;tre Dormant sur l&#8217;ouverture &#224; &#233;liminer. Un menu appara&#238;t, vous donnant les choix suivants :</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Ajouter une traverse</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Partie vide (traverse au-dessus)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Partie vide (dormant au-dessus)</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Les deux derni&#232;res options donnent le choix du type de profil au-dessus qui sera au-dessus de la partie vide :</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">dans le premier cas (partie vide avec traverse au-dessus), on conserve la traverse qui a &#233;t&#233; plac&#233;e au-dessus de la partie vide;</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">dans le deuxi&#232;me cas (partie vide avec dormant au-dessus), on remplace cette traverse par un dormant. Dans ce cas, la dimension &#224; l&#8217;axe de la traverse devient la dimension en-dessous du dormant.</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="text-decoration: underline;">Contraintes:</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Seules les ouvertures touchant le bas du dormant peuvent &#234;tre &#233;limin&#233;es.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Les ouvertures touchant le haut du dormant ne peuvent pas &#234;tre &#233;limin&#233;es.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Seules les parties rectangulaires peuvent &#234;tre &#233;limin&#233;es</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Une partie touchant &#224; la fois les 2 c&#244;t&#233;s gauche et droit ne peut &#234;tre &#233;limin&#233;e.</span></td></tr></table></div><p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd" style="text-decoration: underline;">Remarque importante:</span></p>
<p class="p_Textestd"><span class="f_Textestd">Les versions pr&#233;c&#233;dentes comportaient un bug li&#233; au calcul de la longueur du bas du dormant &#224; c&#244;t&#233; d&#8217;une porte, dans le cas d&#8217;un assemblage &#224; onglet avec la traverse verticale adjacente. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Ce bug pouvait &#234;tre compens&#233; par une correction au niveau du param&#233;trage.</span></p>
<p class="p_Textestd"><span class="f_Textestd">La section de programme effectuant ce calcul a &#233;t&#233; r&#233;&#233;crite pour pouvoir tenir compte de situation similaires avec des parties manquantes. Le bug a donc &#233;t&#233; corrig&#233;.</span></p>
<p class="p_Textestd"><span class="f_Textestd">Ceci implique que, si vous avez des dormants param&#233;tr&#233;s pour un assemblage &#224; onglet entre le dormant bas et la traverse verticale &#224; c&#244;t&#233; d&#8217;une porte, vous devez reprendre le param&#233;trage et en &#233;liminer les &#233;ventuelles corrections correspondantes. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Le programme calcule maintenant directement les bonnes valeurs, auxquelles il suffit d&#8217;ajouter le cas &#233;ch&#233;ant les soudures.</span></p>

</td></tr></table>
</div>

</body>
</html>
