<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["2.0.x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?rn20xx.php"; }
else { parent.quicksync('a11.25.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>2.0.x</title>
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
     <a href="rn21xx.php">Previous</a>&nbsp;
     <a href="rn162x.php">Next</a>
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
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version 2.00</span></p>
</td>
<td width="303" bgcolor="#d8ffff" style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p style="text-align: right; margin: 4px 0px 4px 0px;"><span style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">1/8/1999</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Cr&#233;ation des biblioth&#232;ques:</span><span class="f_Textestd"> Un nouveau point de menu, situ&#233; dans le menu Commandes, permet de cr&#233;er les biblioth&#232;ques. </span></p>
<p class="p_Textestd"><span class="f_Textestd">L&#8217;encodage est tr&#232;s semblable &#224; l&#8217;encodage d&#8217;une commande, avec &#233;videmment de nombreuses simplifications.</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img src="img/img_127.jpg" width="724" height="578" border="0" vspace="1" hspace="1" alt="img_127"></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_TitreReleaseNote">Utilisation des biblioth&#232;ques:</span><span class="f_Textestd"> Un nouveau bouton, dans la fen&#234;tre Commandes, permet de s&#233;lectionner un ch&#226;ssis cr&#233;&#233; en biblioth&#232;que (voir figure 1).</span></p>
<p class="p_Textestd"><span class="f_Textestd">Ce bouton vous permet de cr&#233;er un nouveau ch&#226;ssis, sur base d&#8217;un ch&#226;ssis cr&#233;&#233; en biblioth&#232;que. Il vous donne acc&#232;s &#224; une fen&#234;tre de s&#233;lection, qui vous propose la liste des biblioth&#232;ques existantes. S&#233;lectionnez la biblioth&#232;que souhait&#233;e; WinPro affiche la liste des ch&#226;ssis contenus dans la biblioth&#232;que. S&#233;lectionnez le ch&#226;ssis voulu (double clic, ou simple clic + OK), et ce ch&#226;ssis est copi&#233; dans la commande. Vous pouvez alors en modifier les dimensions (voir figure 2).</span></p>
<p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img src="img/img_128.jpg" width="209" height="103" border="0" vspace="1" hspace="1" alt="img_128"></p>
<p class="p_Textestd"><span class="f_Textestd" style="text-decoration: underline;">Remarques:</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">Certains champs d&#8217;encodage sont fig&#233;s juste apr&#232;s que vous ayez s&#233;lectionn&#233; un ch&#226;ssis dans une biblioth&#232;que. Ceci est d&#251; &#224; la possibilit&#233; de lier une grille de prix &#224; chaque &#233;l&#233;ment de la biblioth&#232;que (voir ci-apr&#232;s). Vous pouvez les lib&#233;rer en mettant &#224; blanc la case &#224; cocher Prix tarif dans la page Ch&#226;ssis (figure 3). Cette case permet de supprimer le lien entre le ch&#226;ssis encod&#233; dans la commande, et la grille de tarif contenue dans la biblioth&#232;que.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd">La position de chaque traverse peut &#234;tre encod&#233;e de telle sorte que la traverse se d&#233;place proportionnellement aux dimensions du ch&#226;ssis. Pour cela, vous pouvez maintenant encoder la position de la traverse, tant dans la biblioth&#232;que que dans la commande, sous forme de formule arithm&#233;tique (notation alg&#233;brique). Ces formules reconnaissent deux variables : W (largeur du ch&#226;ssis) et H (hauteur du ch&#226;ssis).</span></td></tr></table></div><p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span class="f_Textestd">Exemple de formule : (W-48)/2 + 48 : Traverse positionn&#233;e &#224; la largeur &#8211; 48 mm, le tout divis&#233; par 2, puis 48 mm plus &#224; droite (le point d&#8217;origine se trouve toujours &#224; gauche).</span></p>

</td></tr></table>
</div>

</body>
</html>
