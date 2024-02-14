<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Valuation for articles/profiles as additional supply","Valorisation des articles/profils en négoce"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?faq8.php"; }
else { parent.quicksync('a10.8'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Valorisation des articles/profils en négoce</title>
  <meta name="keywords" content="Négoces">
  <meta http-equiv="Content-Type" content="text/php; charset=iso-8859-1">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <link type="text/css" href="default.css" rel="stylesheet">
</head>

<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;"
onload=" AddTitleAndLangFlags();highlight();">

<div id="hmpopupDiv"
style="visibility:hidden; position:absolute; z-index:1000;">
</div>

<table width="100%" border="0" cellspacing="0" cellpadding="5"
bgcolor="#FF8000">
  <tbody>
    <tr valign="middle">
      <td align="left"><p class="p_Heading1"><span id="titlepage"
        class="f_Heading1"></span></p>
      </td>
      <td align="center">
        <div id="langflags">
        </div>
      </td>
      <td align="right"><span style="font-size: 9pt"><a
        href="introduction.php">Top</a>  <a href="faq7.php">Previous</a>  <a
        href="notes_de_versions.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>You may type in a customer order articles or profiles that are not included into a window, from tabs
	  <span style="font-weight: bold;">Articles</span> or <span
        style="font-weight: bold;">Profiles</span>.</p>

        <p>Here is how WinPro vlaues those kind of additional supplies.</p>

        <p> </p>

        <p><span
        style="font-weight: bold; text-decoration: underline;">Profiles:</span></p>

        <p><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p>Considering an article with the following settings :</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/image001eng.jpg"
        width="566" height="135" border="0" alt="image001eng"></p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p>When supplies are typed in with the following settings, Winpro will value as follows :</p>

        <p><span style="color: #008000;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span style="color: #008000;">1 x
        6000 at 6 x 50&euro; = 300&euro;</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span style="color: #008000;">2 x
        6000 at 12 x 50&euro; = 600&euro;</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #008000;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span style="color: #008000;">1 x
        1000 at 1 x 100&euro; + 10&euro; = 110&euro;</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span style="color: #008000;">2 x
        1000 at 2 x 100&euro; + 2 x 10&euro; = 220&euro;</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #008000;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span style="color: #008000;">6 x
        1000 at 6 x 50&euro; + 6 x 10&euro; = 360&euro;</span></p>

        <p><span style="color: #0000ff;"> </span></p>

        <p>For this sample, if a full length bar is typed in, the customer takes benefits of the lowest price without additional amount.</p>

        <p>The fixed price is applied as many times as a cut is necessary within the bar, then if a bar is ordered with a pre-cut, the customer
		is invoiced with a fixed additional price by each cut.</p>

        <p> </p>

        <p><span
        style="font-weight: bold; text-decoration: underline;">Articles:</span></p>

        <p> </p>

        <p>Considering an article with the following settings :</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/image003eng.jpg"
        width="563" height="135" border="0" alt="image003eng"></p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p>When supplies are typed in with the following settings, Winpro will value as follows :</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><span style="color: #008000;">1 x
         at 1 x 100&euro; + 10 &euro; = 110&euro;</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span style="color: #008000;">2 x
        at 2 x 100&euro; + 10&euro; = 210&euro;</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #008000;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span style="color: #008000;">5 x
        at 5 x 80&euro; + 10&euro; = 410&euro;</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span style="color: #008000;">8 x
        at 8 x 80&euro; + 10&euro; = 650&euro;</span></p>

        <p> </p>

        <p>The fixed price allows to value the stock manager moves to prepare the article; For one handle or 5, the preparation time is about
		the same, that is why the fixed price is only applied once.</p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>Vous pouvez saisir dans une commande des articles ou
        profils ne faisant pas partie d'un châssis quelconque, depuis les
        onglets <span style="font-weight: bold;">Articles </span>ou <span
        style="font-weight: bold;">Profils </span>de la commande.</p>

        <p>Voici la méthode de valorisation de ces articles par WinPro.</p>

        <p> </p>

        <p><span
        style="font-weight: bold; text-decoration: underline;">Profils:</span></p>

        <p><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p>Soit un article avec les paramètres suivants :</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/image001.png"
        width="546" height="107" border="0" alt="image001"></p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p>Lorsqu'on encode dans un devis les consommations suivantes, Winpro
        les valorise comme suit :</p>

        <p><span style="color: #008000;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span style="color: #008000;">1 x
        6000 à 6 x 50&euro; = 300&euro;</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span style="color: #008000;">2 x
        6000 à 12 x 50&euro; = 600&euro;</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #008000;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span style="color: #008000;">1 x
        1000 à 1 x 100&euro; + 10&euro; = 110&euro;</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span style="color: #008000;">2 x
        1000 à 2 x 100&euro; + 2 x 10&euro; = 220&euro;</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #008000;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span style="color: #008000;">6 x
        1000 à 6 x 50&euro; + 6 x 10&euro; = 360&euro;</span></p>

        <p><span style="color: #0000ff;"> </span></p>

        <p>Dans cet exemple, si on décide de commander une barre complète, on
        bénéficie du tarif le plus bas et sans aucun supplément.</p>

        <p>Le forfait s&rsquo;applique autant de fois qu&rsquo;il y a de coupe
        à faire dans la barre, donc si on décide de commander une barre
        complète pré-débitée, on se verra facturé un forfait par pièce
        débitée.</p>

        <p> </p>

        <p><span
        style="font-weight: bold; text-decoration: underline;">Articles:</span></p>

        <p> </p>

        <p>Soit un article avec les paramètres suivants :</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/image003.png"
        width="556" height="108" border="0" alt="image003"></p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p>Lorsqu'on encode dans un devis les consommations suivantes, Winpro
        les valorise comme suit :</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><span style="color: #008000;">1 x
         à 1 x 100&euro; + 10 &euro; = 110&euro;</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span style="color: #008000;">2 x
        à 2 x 100&euro; + 10&euro; = 210&euro;</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #008000;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span style="color: #008000;">5 x
        à 5 x 80&euro; + 10&euro; = 410&euro;</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span style="color: #008000;">8 x
        à 8 x 80&euro; + 10&euro; = 650&euro;</span></p>

        <p> </p>

        <p>Le forfait permet de valoriser le déplacement du magasinier pour
        préparer l&rsquo;article. Qu&rsquo;il y ait 1 poignée à préparer ou 5,
        le temps de préparation est sensiblement identique, c&rsquo;est la
        raison pour laquelle le forfait ne s&rsquo;applique qu&rsquo;une seule
        fois.</p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
