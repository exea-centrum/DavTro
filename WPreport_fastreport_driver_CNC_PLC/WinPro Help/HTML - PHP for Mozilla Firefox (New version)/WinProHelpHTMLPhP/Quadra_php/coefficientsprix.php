<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Price Margins","Coefficients de Prix","Prijscoëfficienten"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?coefficientsprix.php"; }
else { parent.quicksync('a7.10'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Coefficients de prix</title>
  <meta name="keywords" content="">
  <meta http-equiv="Content-Type"
  content="application/xhtml+xml; charset=iso-8859-1">
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
        href="codepostaux.php">Previous</a>  <a
        href="modulethermique.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This table is designed to create price margins for
        the customers. Those multiplying coefficient will be applied onto the
        total net cost price of the order, to obtain the brut selling price.
        This margins may be assigned to <a href="client.php">customer</a>
        record, and may be modified through the <span
        style="font-style: italic;">Price</span> tab of the customer order.
        Many price margins may be created corresponding to several price list
        level (professional, final customer, etc...).</p>

        <p> </p>

        <p>This dialog is reached through menu <span
        style="font-weight: bold;">Data | Miscellaneous | Price
        margins</span>.</p>

        <p> </p>

        <p
        style="text-align: center; text-indent: -24px; margin: 0px 0px 0px 28px;"><img
        src="img/clip0612eng.jpg" width="416" height="259" border="0"
        alt="clip0612eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Code</span>: Code of the
                price margin.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Description</span>:
                Description of the price margin.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">% margin</span>: Percentage
                of margin applied to net cost price of the order.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Use price method from
                customer record</span>: When selected, the price margin will be
                applied according pricing method from customer record, either
                from list cost price, or from current cost price. WinPro will
                compute the sum of net cost prices from the order, into current
                or list cost price according customer record, then will apply
                the price margin to obtain the brut selling price.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Use list price</span>: When
                selected, the price margin will be applied based onto the sum
                of list cost prices from the order, to obtain the brut selling
                price, independantly from the pricing method assigned to
                customer record.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Use current prices</span>:
                When selected, the price margin will be applied based onto the
                sum of current cost prices from the order, to obtain the brut
                selling price, independantly from the pricing method assigned
                to customer record.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Use technical price by
                default</span>: When selected, the box <span
                style="font-style: italic;">Selling price is the sum of current
                components</span> (<span
                style="font-style: italic;">Price</span> of the order) will be
                checked by default when this price margin is selected into the
                order. WinPro will then compute the net cost price of the order
                based onto the sum of components included into the cost price
                only, without cumulating components included into the selling
                price. When the box is unchecked, components included into the
                selling price only will be considered.</td>
            </tr>
          </tbody>
        </table>
        </div>
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
      <td align="left"><p>Cette table permet de définir des coefficients de
        prix pour les clients. Ce sont des coefficients multiplicateurs qui
        viendront s'appliquer au prix de revient net total de la commande pour
        obtenir le prix de vente brut. Ce coefficient peut être affecté aux
        fiches <a href="client.php">client</a>, et sont modifiables en saisie à
        partir de l'onglet <span style="font-style: italic;">Prix </span>de la
        commande. Vous pouvez créer plusieurs coefficients, correspondant à
        plusieurs niveaux de tarif (professionnel, particulier, etc...).</p>

        <p> </p>

        <p>Ce dialogue est accessible via le menu <span
        style="font-weight: bold;">Données | Autres données | Coefficients de
        prix</span>.</p>

        <p> </p>

        <p
        style="text-align: center; text-indent: -24px; margin: 0px 0px 0px 28px;"><img
        src="img/clip0612.zoom86.gif" width="356" height="240" border="0"
        alt="clip0612"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Code</span>: Code de ce
                niveau de marge.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Description</span>:
                Description du coefficient de prix.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">% marge</span>: Pourcentage
                de marge à appliqué au prix de revient net de la commande, en
              %.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Appliquer la méthode de prix
                liée au client</span>: Lorsque cette option est sélectionnée,
                le coefficient de marge sera appliqué en fonction de la méthode
                de calcul de prix appliquée au client, soit en prix de revient
                tarif, soit en prix courant. WinPro calculera la somme des prix
                de revients nets de la commande, en prix courant ou tarif selon
                le paramètre du client, puis appliquera le coefficient de marge
                pour obtenir le prix de vente brut.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Travailler en prix
                tarif</span>: Lorsque cette option est sélectionnée, le
                coefficient de marge sera appliqué sur la somme des prix de
                revients tarif de la commande, pour obtenir le prix de vente
                net, et ce indépendamment de la méthode de calcul de prix liée
                au client.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Travailler en prix
                courant</span>: Lorsque cette option est sélectionnée, le
                coefficient de marge sera appliqué sur la somme des prix de
                revients courant de la commande, pour obtenir le prix de vente
                net, et ce indépendamment de la méthode de calcul de prix liée
                au client.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Utiliser la méthode de
                calcul au déboursé par défaut</span>: Lorsque cette option est
                sélectionnée, la case <span style="font-style: italic;">Calcul
                au déboursé</span> (onglet <span
                style="font-style: italic;">Prix </span>de la commande) sera
                cochée par défaut lorsque ce code tarif sera utilisé dans une
                commande. En conséquence, WinPro calculera le prix de revient
                net de la commande en tant que somme des composants inclus dans
                le prix de revient uniquement, sans tenir compte des éléments
                inclus dans le prix de vente (calcul au déboursé). Si la case
                <span style="font-style: italic;">Calcul au déboursé </span>est
                décochée, ce sont les composants inclus dans le prix de vente
                qui seront seuls considérés.</td>
            </tr>
          </tbody>
        </table>
        </div>
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
      <td align="left"><p>Deze optie is ontwikkeld om prijscoëfficienten aan te
        maken voor de klanten.Deze prijscoëfficient wordt toegepast op de
        totale netto kostprijs van het order, om een bruto verkoopsprijs te
        bekomen.Deze coëfficienten kunnen al op <a
        href="/Quadra_php/client.php">klant</a> niveau toegewezen worden, en
        kunenn in een order gewijzigd worden in de pagina "Prijs" .Er kunnen
        verschillende prijscoëfficienten aangemaakt worden corresponderend aan
        verschillende prijslijsten (Professionelen, Particulieren,
        Projecten,...).</p>

        <p> </p>

        <p>Het scherm is bereikbaar vanuit het menu <span
        style="font-weight: bold;">Gegevens | Diversen |
        Prijzencoëfficienten</span>.</p>

        <p> </p>

        <p
        style="text-align: center; text-indent: -24px; margin: 0px 0px 0px 28px;"><img
        alt="Price" src="img/Prijscoefficient.jpg" width="453" height="255"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Code</span>: Code van de
                prijscoëfficient.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Description</span>:
                Beschrijving van de prijscoëfficient.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">% margin</span>: Percentage
                van de coëfficient welke toegepast dient te worden op de
                kostprijs van het order.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Pas de prijs van bij de
                klantgegevens toe</span>: Indien geselecteerd,zal de
                prijscoëfficient welke gekozen is bij de klantgegevens
                toegepast worden, op de kostprijs of huidige prijs (lopende
                prijs). WinPro berekend de som van alle netto prijzen van het
                order, op basis van de kostprijs of lopende prijs en zal dan
                het prijscoëfficient hierop toepassen om een bruto
                verkoopsprijs te bekomen.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Werken met tarief
                kostprijs</span>: Indien geselecteerd, zal de prijscoëfficient
                toegepast worden op de som van de kostprijzen van het order, om
                zo de bruto verkoopsprijs te bekomen, onafhankelijk van wat er
                gekozen is geweest op klantniveau.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Werken met de lopende
                prijs</span>: Indien geselecteerd, zal de prijscoëfficient
                toegepast worden op de som van de Lopende kostprijzen van het
                order, om zo de bruto verkoopsprijs te bekomen, onafhankelijk
                van wat er gekozen is geweest op klantniveau.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Gebruik standaard de
                berekeningsmanier per uitgave</span>: Indien geselecteerd, zal
                de optie in de pagina "Prijs" <em style="color:#8080ff"><span
                style="color:#0080c0">Bereken de verkoopsprijs vanuit de
                kostprijs</span></em> automatisch geselecteerd zijn in een
                order bij de keuze van deze prijscoëfficient. WinPro zal dan de
                berekening doen van de netto kostprijs van het order gebaseerd
                op de som van alle componenten welke in de kostprijs inbegrepen
                zijn,zonder de componenten te cumuleren welke voor de
                verkoopsprijs voorzien zijn.Indien niet geselecteerd,zal Winpro
                enkel rekening houden met de componenten voorzien in de
                verkoopprijs.</td>
            </tr>
          </tbody>
        </table>
        </div>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
