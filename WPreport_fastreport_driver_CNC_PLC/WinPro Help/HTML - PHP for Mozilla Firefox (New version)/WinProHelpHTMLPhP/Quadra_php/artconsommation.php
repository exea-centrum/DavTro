<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Usage","Consommation","Verbruik"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?artconsommation.php"; }
else { parent.quicksync('a4.5.8'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Consommation</title>
  <meta name="keywords" content="">
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
        href="introduction.php">Top</a>  <a
        href="arthistorique.php">Previous</a>  <a
        href="artprevision.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>This page shows you a summarized history of stock usage, by month and year. You can access this page only if you have the relevant stock module.</p>

        <p> </p>

        <p style="text-align: center; margin: 14px 0px 14px 0px;"><img
        src="img/clip0100eng.jpg" width="614" height="118" border="0"
        alt="clip0100eng"></p>
		
        <p>For each year, you have 2 lines; the first one contains the used quantity; the
        second one, the average cost price. You get one column for the complete
        year, and one column per month.</p>

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
      <td align="left"><p> </p>

        <p>Cet onglet vous présente un résumé des consommations de stock,
        totalisés par mois et par an. Il n'est accessible que si vous disposez
        d'un module de gestion de stock.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0100.gif" width="602"
        height="116" border="0" alt="clip0100"></p>

        <p>Pour chaque année, WinPro vous montre deux lignes: sur la première,
        la quantité utilisée; sur la deuxième, le prix de revient moyen. Vous
        disposez d'une colonne contenant ces valeurs pour l'année complète, et
        d'une colonne pour chaque mois.</p>

      </td>
    </tr>
  </tbody>
</table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>Deze pagina toont u een opsomming van de historiek van de voorraad, per maand of jaar. U hebt enkel toegang tot deze pagina wanneer u over de voorraadmodule (MS) beschikt.</p>

        <p> </p>

        <p style="text-align: center; margin: 14px 0px 14px 0px;"><img
        src="img/clip0100eng.jpg" width="614" height="118" border="0"
        alt="clip0100eng"></p>
		
        <p>Voor elk jaar, zijn er 2 lijnen voorzien; waarbij de eerste de gebruikte hoeveelheid weergeeft en de andere de gemiddelde prijs weergeeeft.
		U krijgt één kolom voor het volledig 
		jaar en één kolom per maand</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
