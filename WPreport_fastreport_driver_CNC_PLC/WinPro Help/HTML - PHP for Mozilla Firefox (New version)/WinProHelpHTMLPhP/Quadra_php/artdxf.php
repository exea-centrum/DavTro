<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED","POL"];
var WinProHelpPageName=["DXF","DXF","DXF","DXF"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?artdxf.php"; }
else { parent.quicksync('a4.5.10'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>DXF</title>
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
        href="artprevision.php">Previous</a>  <a href="artatelier.php">Next</a>
        </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>This tab is suitable to be able to link a drawing with DXF format
        (stored into table DXF) to the article. In case of profile to be
        optimized, this drawing will be systematically printed onto
        optimization labels of WinPro, onto Take as well as Store labels. This
        drawing may also appear onto some documents, nearby the article
        description.</p>

        <p style="text-align: center; margin: 14px 0px 0px 0px;"><img
        src="img/clip102eng.jpg" width="883" height="399" border="0"
        alt="clip102eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">DXF code</span><span
                style="color: #000000;">: Code of the DXF to associate with the
                article.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Print on factory
                documents</span><span style="color: #000000;">: If this box is
                checked, the drawing will be printed on factory documents when
                the article is used.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Print on customer
                documents</span><span style="color: #000000;">: If this box is
                checked, the drawing will be printed on customer documents when
                the article is used.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Export drawing </span>: this
                box allows exporting the DXF drawing of the article toward an
                EMF file into <em>Drawing</em> directory of WinPro. When one of
                both above option is selected, the EMF file will be generated
                accordingly, when printing factory documents and/or when
                printing customer documents. When none of above box is checked,
                the EMF drawing is only exported in case of full unconditional
                export for each order change (see full export through menu
                <strong>Report - Document type</strong>, typedoc = X).</td>
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
      <td align="left"><p> </p>

        <p>Cet onglet vous permet de lier à l'article un dessin provenant d'un
        fichier en format DXF (stocké par WinPro dans la table DXF). S'il
        s'agît d'un profil à optimiser, ce dessin sera systématiquement imprimé
        sur les étiquettes d'optimisation de WinPro, sur les étiquettes Prendre
        et Stocker. Ce dessin pourra aussi figurer sur certains documents, à
        côté de la description de l'article.</p>

        <p style="text-align: center;"><img src="img/clip102fra.jpg" width="889"
        height="402" border="0" alt="clip102fra"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Code de dessin DXF</span>:
                Code du DXF associé à l'article.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Imprimer sur les plans
                d'atelier</span>: si la case est cochée, le dessin sera imprimé
                sur les plans d'atelier, chaque fois que l'article y est
                mentionné.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Imprimer sur les documents
                client</span>: si la case est cochée, le dessin sera imprimé
                sur les documents client, chaque fois que l'article y est
                mentionné.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Exporter le dessin </span>:
                cette case permet de faire un export du dessin DXF de l'article
                au format EMF, dans le dossier <em>Drawing</em> de WinPro. Si
                l'une des options précédentes est cochée, le dessin EMF sera
                généré selon le choix respectif, à l'impression des plans
                d'atelier et/ou à l'impression des documents clients. Si aucune
                des options précédentes n'est sélectionnée, le dessin ne sera
                exporté que pour un export complet inconditionnel à chaque
                modification de la commande client (voir export complet dans le
                menu <strong>Rapport - Documents Type</strong>, typedoc =
              X).</td>
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
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>Deze pagina dient om een tekening in DXF formaat 
        (opgeslagen in de tabel DXF) toe te wijzen aan een artikel. In geval van een profiel
        welke optimaliseert word,zal deze tekening systematisch op de 
		optimalisatei etiketten van Winpro afgedrukt worden,alsook op de Neem en Opslaan etiketten.Deze
        tekening komt ook terug op enkele andere documenten ,naast de artikel beschrijving (werkplaatsplan).</p>

        <p style="text-align: center; margin: 14px 0px 0px 0px;"><img
        src="img/clip102eng.jpg" width="883" height="399" border="0"
        alt="clip102eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">DXF code</span><span
                style="color: #000000;">: Code van de DXF toegewezen aan het
                artikel.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Afdrukken op werkplaats
                documenten</span><span style="color: #000000;">: Wanneer deze box is
                checked, zal de tekening afgedrukt worden op de werkplaatstdocumenten wanneer dit
                artikel gebruikt wordt.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Afdrukken op klant
                documenten</span><span style="color: #000000;">: Wanneer deze box is
                checked, zal de tekening afgedrukt worden op de klantendocumenten wanneer dit
                artikel gebruikt wordt.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Export tekening </span>: deze
                keuze staat toe om de DXF Tekening te exporteren naar een
                EMF file in <em>Tekening</em> directorie van WinPro. Wanneer één van beide opties
                geselecteert is,zal de EMF file gegenereert worden
                , wanneer de werkplaats of klantendocumenten afgedrukt worden
                Wanneer geen van beide opties geselecteer is,zal de EMF Tekening enkel geëxporteert worden,
                in geval van volledige onvoorwaardelijke export
                voor elke wijziging in de order (zie volledige export in het menu
                <strong>Rapporten - Document type</strong>, typedoc = X).</td>
            </tr>
          </tbody>
        </table>
        </div>
      </td>
    </tr>
  </tbody>
</table>
</div>
<div class="POL">
<!-- Placeholder for topic body. -->
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>Ta zakladka moze byc wykozystana aby móc podlaczyc rysunek w formacie DXF
        (Zapisany w tabeli DXF) do artykulu. W przypadku profili, które maja byc
        zoptymalizowane, rysunek ten bedzie nieustannie drukowany na etykietach
        optymalizacyjnych WinPro. Ten
        rysunek moze równiez pokazac sie na niektórych dokumentach, przy opisie
        artykulu.</p>

        <p style="text-align: center; margin: 14px 0px 0px 0px;"><img
        src="img/clip102eng.jpg" width="883" height="399" border="0"
        alt="clip102eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">DXF kod</span><span
                style="color: #000000;">: Kod DXF do skojarzenia z
                artykulem.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Drukuj na dokumentach
                produkcyjnych</span><span style="color: #000000;">: Jezeli to okientko jest zaznaczone
                , rysunek bedzie drukowal sie na dokumentach produkcyjnych kiedy
                artykul bedzie uzyty.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Drukuj na dokumentach
                dla klienta</span><span style="color: #000000;">: Jezeli to okienko jest zaznaczone
                , rysunek bedzie drukowal sie na dokumentach dla klienta kiedy
                artykul bedzie uzyty.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Export rysunku </span>: to
                pozwala na eksport rysunku DXF artykulu wprost do pliku
                EMF w katalogu <em>Rysunek</em> w WinPro. Kiedy jedna z dwóch opcji
                powyzszych, plik EMF wygeneruje sie
                odpowiednio, kiedy dokumenty produkcyjne lub/i dla klienta
                sa drukowane. Kiedy zadna z powyzszych opcji nie jest zaznaczona,
                plik rysunku EMF jest tylko eksportowany w przypadku pelnego bezwarunkowego eksportu
                dla kazdej zmiany zamówienia (zobacz pelny eksport poprzez menu
                <strong>Raport - Typ dokumentu</strong>, typedoc = X).</td>
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
