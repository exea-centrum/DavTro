<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["NED"];
var WinProHelpPageName=["Principe van voorraadbeheer"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?stkprincipe.php"; }
else { parent.quicksync('a8.3'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Principe van voorraadbeheer</title>
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
        href="introduction.php">Top</a>  <a href="stock.php">Previous</a>  <a
        href="stkprocesvoorraad.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="NED">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p
        style="text-align:center;margin-left:auto;margin-right:auto;"><strong><span
        style="font-size: 12pt">1 &ndash; Algemeen principe van het
        voorraadbeheer in WinPro</span></strong></p>

        <p></p>

        <p></p>

        <p><img alt="Principeschema voorraadbeheer" src="img/stkprincipeWinpro.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"
        width="862" height="737"></p>

        <p></p>

        <p></p>

        <p></p>

        <p></p>

        <p></p>

        <p></p>

        <p><strong><span
        style="font-size: 12pt">Klantbestellingen</span></strong></p>

        <p>Na goedkeuring van de bestelling gebeurd er nog niets met de
        voorraad in Winpro. De goedgekeurde klantbestelling staat toe voorraad
        te reserveren om te produceren en dit slechts na de financiële en
        technische goedkeuring van de klantbestelling.</p>

        <p>Op het moment van optimalisatie, zal Winpro de verschillen in
        behoeftes berekenen met de reservaties welke nodig zijn om de regels
        van de optimalisatie te respecteren.</p>

        <p>Van zodra een bestelling in productie gegeven wordt (begin van
        productie), zal WinPro alle artikels sorteren vanuit de voorraad, en
        zal de artikels welke identiek zijn in de andere tables wissen.
        (rescli.dbf, batchstk.dbf).</p>

        <p></p>

        <p></p>

        <p><strong><span
        style="font-size: 12pt">Leverancierbestellingen</span></strong></p>

        <p>Aangezien de verschillende behoeftes bepaald worden, kan WinPro een
        voorstel tot bestelling doen door zich te baseren op de reservaties
        vanuit de klantbestelling. Dit voorstel kan worden gewijzigd en
        getransfereerd naar de leverancierbestelling.Het is toegankelijk via
        het menu in Winpro /Voorraad Bestelling aanmaken en wijzigen. Deze
        dient dan afgedrukt of verzonden te worden zodat deze in de staat van «
        Leverancierbestelling in bestelling » wordt opgeslagen. De ontvangst
        van deze bestelling kan gedeeltelijk of in zijn geheel gebeuren. Men
        kan een lijn aanzien als volledig ontvangen zelfs al is nog niet het
        totaal aantal bestelde artikelen geleverd.<img
        alt="leveranciersbestelling1" src="img/stkleveranciersbestellingen.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"
        width="229" height="125"></p>

        <p></p>

        <p>Zolang er een saldo bestaat van nog te leveren aantallen en de lijn
        niet afgesloten wordt blijven deze geregistreerd in de tables
        CdefouH.dbf en CdeFou.dbf</p>

        <p></p>

        <p>Éénmaal alles ontvangen is, zal WinPro voor elke lijn een
        geschiedenis aanmaken van de aankoop in de table HistoFou.dbf. Deze
        table staat u toe de aankoopprijs van een bepaald artikels te kennen in
        functie van een aangegeven datum, of een gegeven periode, voor een
        leverancier, enz&hellip;</p>

        <p></p>

        <p>Indien er andere evenementen een bepaalde impact hebben op het
        voorraadbeheer,dan kan dit opgevangen worden door te werken met de
        verplaatsing van de voorraad naar een negatieve of positieve
        voorraad.</p>

        <p></p>

        <p><img alt="stkverplaatsingen" src="img/stkverplaatsingen.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"
        width="238" height="65"></p>

        <p></p>

        <p></p>

        <p>Wij detailleren alle elementen in het volgend hoofdstuk</p>

        <p></p>

        <p></p>

        <p></p>

        <p></p>

        <p></p>

        <p></p>

        <p></p>

        <p></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
