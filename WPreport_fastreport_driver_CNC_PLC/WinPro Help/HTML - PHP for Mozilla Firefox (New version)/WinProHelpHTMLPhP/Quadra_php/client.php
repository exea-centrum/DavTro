<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Customers","Clients","Klanten"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?client.php"; }
else { parent.quicksync('a7.8'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Client</title>
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
        href="categoriesclient.php">Previous</a>  <a
        href="cltdescription.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This tables is designed for creation of your customer
        files. Values set here are retrieved into an order or quote when the
        customer is selected.</p>

        <p>Some fields may not be displayed into your version, depending on
        modules, licence options and status of checkbox <span
        style="font-style: italic;">Simplified</span>. Anyway, this manual will
        try to detail the maximium of fields and features from this dialog
        (considering mostly the extended customer record).</p>

        <p>Many fiels are added to the extended customer record, mostly for
        profesional customers.</p>

        <p> </p>

        <p>This dialog is reached through menu <span
        style="font-weight: bold;">Data | Basic data | Customers</span>.</p>

        <p> </p>

        <p><span
        style="font-style: italic; text-decoration: underline;">Simplified
        record, Description tab:</span></p>

        <p style="text-align: center;"><img src="img/clip0643eng.jpg"
        width="888" height="630" border="0" alt="clip0643eng"></p>

        <p><span
        style="font-style: italic; text-decoration: underline;"> </span></p>

        <p><span
        style="font-style: italic; text-decoration: underline;">Extended
        customer record, Description tab:</span></p>

        <p style="text-align: center;"><img src="img/clip0652eng.jpg"
        width="888" height="630" border="0" alt="clip0652eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Code</span>: Customer
              code.</td>
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
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Simplified</span>: When
                checked, tabs <span
                style="font-style: italic;">Logistics</span>, <span
                style="font-style: italic;">Commercial</span>, <span
                style="font-style: italic;">Finances</span>, and <span
                style="font-style: italic;">management</span> become
                unavailable, and needed fields within those hidden tabs are
                grouped into remaining tabs, in order to obtain the simplified
                record, more compacted.</td>
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
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">New customer</span>: The
                <img src="img/clip0644eng.jpg" width="115" height="24"
                border="0" alt="clip0644eng"> button is suitable to create a
                customer code automatically, from a prefix and/or from counters
                defined within menu <a href="utilprefnumerotations.php">Tools |
                Preferences, Numbering tab</a>. This button is only available
                when no customer record is already loaded.</td>
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
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Installation
                planning</span>: The <img src="img/clip0645eng.jpg" width="121"
                height="21" border="0" alt="clip0645eng"> button gives here an
                access to installation/delivery planning feature, for
                vizualization only.</td>
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
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Financial position</span>:
                The <img src="img/clip0646eng.jpg" width="118" height="22"
                border="0" alt="clip0646eng"> button allows checking of the
                accounting status for this customer within a third party
                accounting software.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -21px; margin: 0px 0px 0px 21px;"> </p>

        <p style="text-indent: -21px; margin: 0px 0px 0px 21px;"> </p>

        <p style="text-indent: -21px; margin: 0px 0px 0px 21px;"> </p>
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
      <td align="left"><p>Cette table permet de créer votre fichier client. Les
        valeurs qui y sont définies sont récupérées lorsque le client est
        sélectionné dans une commande ou un devis. </p>

        <p>Certains champs de cette fiche peuvent ne pas être présents dans
        votre version, suivant vos options de licence et l'état de la case à
        cocher <span style="font-style: italic;">Fiche simplifiée</span>.
        Toutefois, ce manuel détaillera le maximum de champs et fonctions de
        cette fiche (fiche client étendue).</p>

        <p>De nombreux champs sont ajoutés dans la fiche client étendue, plus
        particulièrement à l'intention des clients professionnels.</p>

        <p> </p>

        <p>Ce dialogue est accessible via le menu <span
        style="font-weight: bold;">Données | Données de base |
        Clients</span>.</p>

        <p> </p>

        <p><span style="font-style: italic; text-decoration: underline;">Fiche
        simplifiée, onglet Description:</span></p>

        <p style="text-align: center;"><img src="img/clip0643.zoom86.gif"
        width="765" height="607" border="0" alt="clip0643"></p>

        <p><span
        style="font-style: italic; text-decoration: underline;"> </span></p>

        <p><span style="font-style: italic; text-decoration: underline;">Fiche
        détaillée, onglet Description:</span></p>

        <p style="text-align: center;"><img src="img/clip0652.zoom86.gif"
        width="757" height="594" border="0" alt="clip0652"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Code</span>: Code du
              client.</td>
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
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Fiche simplifiée</span>:
                Lorsque cette case est cochée, les onglets <span
                style="font-style: italic;">Logistique</span>, <span
                style="font-style: italic;">Commercial</span>, <span
                style="font-style: italic;">Finances</span>, et <span
                style="font-style: italic;">Direction </span>deviennent
                inaccessibles, et les champs indispensables qui pourraient être
                contenus dans ces onglets sont rapatriés sur les onglets
                restants, afin d'obtenir une fiche client simplifiée, plus
                compacte.  </td>
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
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Nouveau client</span>: Le
                bouton <img src="img/clip0644.zoom84.gif" width="101"
                height="21" border="0" alt="clip0644"> permet de créer un
                nouveau numéro de  client automatiquement, à partir d'un
                préfixe et/ou d'un incrément que vous pouvez définir dans le
                menu <a href="utilprefnumerotations.php">Utilitaires |
                Préférences, onglet Numérotation</a>. Ce bouton n'est
                accessible que si aucune fiche client n'est chargée.</td>
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
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Agenda de pose</span>: Le
                bouton <img src="img/clip0645.zoom94.gif" width="111"
                height="22" border="0" alt="clip0645"> donne un accès direct au
                planning de pose &amp; livraison pour ce client, en
                visualisation uniquement.</td>
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
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Encours</span>: Le bouton
                <img src="img/clip0646.gif" width="119" height="23" border="0"
                alt="clip0646"> permet de vérifier l'encours comptable de ce
                code client dans un logiciel tiers de comptabilité.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -21px; margin: 0px 0px 0px 21px;"> </p>

        <p style="text-indent: -21px; margin: 0px 0px 0px 21px;"> </p>

        <p style="text-indent: -21px; margin: 0px 0px 0px 21px;"> </p>
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
      <td align="left"><p>Deze gegevens zijn ontwikkeld voor het aanmaken van
        nieuwe klanten en hun gegevens.De verschillende waardes worden
        geselecteerd in een nieuw order/offerte wanneer de desbetreffende klant
        gekozen wordt..</p>

        <p>Het kan zijn dat er bepaalde velden niet weergegeven worden in uw
        versie, deze zijn module , licentie of status van de klant afhankelijk
        (<em>Eenvoudig</em>). Deze handleiding geeft het maximum van velden en
        mogelijkheden binnen dit scherm weer. (de uitgebreide klantenfiche in
        rekening gehouden).</p>

        <p>De meeste extra velden zijn terug te vinden in de uitgebreide
        klantenfiche en hebben meestal betrekking op professionele klanten.</p>

        <p> </p>

        <p>Dit scherm bekomt u vanuit het menu <span
        style="font-weight: bold;">Gegevens | Basisgegevens |
        Klanten</span>.</p>

        <p> </p>

        <p><span
        style="font-style: italic; text-decoration: underline;">Eenvoudige
        klantenfiche, Pagina beschrijving:</span></p>

        <p style="text-align:center;margin-left:auto;margin-right:auto;"><span
        style="font-style: italic; text-decoration: underline;"><img
        alt="Klant1" src="/Quadra_php/img/Klant1.jpg"><img alt="k1"
        src="img/Klant1.jpg" width="931" height="690"></span></p>

        <p><span
        style="font-style: italic; text-decoration: underline;">Uitgebreide
        klantenfiche, Pagina Beschrijving:</span></p>

        <p style="text-align: center;"><img src="img/klant2.jpg" width="935"
        height="660" border="0" alt="k2"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Code</span>: Klantcode.</td>
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
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Eenvoudig</span>: Wanneer
                geselecteerd,zullen de pagina's
                Logistiek,Commercieel,Financieel en beheer onbeschikbaar
                worden, waardoor de essentiële informatie samengevat wordt in
                de overgebleven pagina's, om de gegevens meer compact te
              houden.</td>
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
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Nieuwe klant</span>: De
                knop<img alt="nk1" src="img/Nieuwe klant.jpg" width="149"
                height="60"> is beschikbaar om automatisch een nieuwe klant aan
                te maken, dit met een prefix en/of van tellers welke
                gedefinieerd worden in <a
                href="utilprefnumerotations.php">Instelling | Parameters
                document, Nummering</a>. Deze knop is enkel beschikbaar wanneer
                er nog geen klant geselecteerd is.</td>
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
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Montage planning</span>: De
                knop <img src="img/clip0645eng.jpg" width="121" height="21"
                border="0" alt="clip0645eng"> geeft u toegang tot de toepassing
                montage/levering planning, maar enkel voor te visualiseren en
                niet voor te editeren.</td>
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
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Financiële positie</span>:
                De knop <img alt="fp" src="img/Financiële positie.jpg"
                width="126" height="32"> staat u toe om de financiële toestand
                van de klant te checken binnen een boekhoudsoftware.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -21px; margin: 0px 0px 0px 21px;"> </p>

        <p style="text-indent: -21px; margin: 0px 0px 0px 21px;"> </p>

        <p style="text-indent: -21px; margin: 0px 0px 0px 21px;"> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
