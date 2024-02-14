<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["VAT Codes","Taux de TVA"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utiltauxtva.php"; }
else { parent.quicksync('a9.5'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Taux de TVA</title>
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
        href="utilsupplementintercalaire.php">Previous</a>  <a
        href="utilcoordonneessociete.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This dialog is suitable for creation of the VAT rate codes to be used within WinPro, like into <span
        style="font-style: italic;">Price</span> tab of the order, or into <a href="cltfinances.php">customer</a> or <a
        href="prospect.php">prospect</a> record. Up to 10 VAT codes to be created here.</p>

        <p> </p>

        <p>This tool is reached through menu <span style="font-weight: bold;">Tools | VAT Codes</span>.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0745eng.jpg"
        width="664" height="352" border="0" alt="clip0745eng"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Print</span>: Check this when the detailled VAT computation should be 
			  printed onto customer documents.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>:
                VAT description that will be printed.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Tax 1 in %</span>: VAT rate value into %.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Description 2</span>:
                2nd VAT description as it will be printed (*).</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Tax 2 in %</span>: 2nd VAT rate value into percentage (*).</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Cumulative</span>: Sets the VAT cumulative method of computation in case 
			  of double VAT. The first tax is computed onto free of tax prices, the second is cumulated to the free of tax 
			  price increased of the first tax amount computed (*).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="446"
                style="width: 446px; border: solid 1px #000000;"><p><span
                style="font-weight: bold; text-decoration: underline;">Note:</span></p>

                <p>- (*) Those three fields are available in case of Double VAT (For USA or Canada, province Tax + federal) Tax.
				To enable this feature set the following key into WinPro configuration (INI or settings table):</p>

                <p>  <span class="f_Winproini">[VAT]</span></p>

                <p>     <span class="f_Winproini">Double</span>   = 0 ; Simple VAT.</p>

                <p>     <span class="f_Winproini">Double</span>   = 1 ; Double VAT.</p>

                <p> </p>

                <p>- It is also possible to input a separate VAT code for windows and installation elements within a WinPro
				customer order (see <a href="rn725x.php">release note version 7.2.58</a>). This would be available within a
				customer order into the <span style="font-style: italic;">Price</span> tab, beneath the standard VAT field. It
				would also be detailled into customer document footers. To enable the feature, add the following key into WinPro
				configuration (INI or settings table):</p>

                <p>  <span class="f_Winproini">[VAT]</span></p>

                <p>     <span class="f_Winproini">TvaPose</span>   = 0 ; Single VAT code.</p>

                <p>     <span class="f_Winproini">TvaPose</span>   = 1 ; Distinct VAT code for installation.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Accounting code</span>: This code MUST be set and MUST be unique. It will 
			  be used through a potential accounting system link.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">By default</span>: Check this box if the VAT code corresponds to a default VAT
			  code to be used into customer or prospect record.</td>
            </tr>
          </tbody>
        </table>
        </div>

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
      <td align="left"><p>Ce dialogue permet de créer les différents code de
        TVA qui seront utilisés dans WinPro, notamment dans l'onglet <span
        style="font-style: italic;">Prix </span>de la commande, ou bien dans
        les fiches <a href="cltfinances.php">client</a> ou <a
        href="prospect.php">prospect</a>. Jusqu'à 10 taux de TVA distincts.</p>

        <p> </p>

        <p>Cet outil est accessible via <span
        style="font-weight: bold;">Utilitaires | </span><span
        class="f_Heading1">Taux de TVA</span>.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0745.zoom82.gif"
        width="550" height="318" border="0" alt="clip0745"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Imprimer</span>: Cochez la
                case, si vous désirez imprimer le détail du calcul TVA sur les
                documents du client.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>:
                Description de la TVA, telle qu'elle sera imprimée.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Taux 1 en %</span>: Valeur
                du taux de TVA en pourcentage.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Description 2</span>:
                Description du deuxième taux de TVA, telle qu'elle sera
                imprimée (*).</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Taux 2 en %</span>: Valeur
                du deuxième taux de TVA en pourcentage (*).</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">En cascade</span>: Indique à
                WinPro la méthode de calcul pour la TVA cascadée en cas de
                double TVA. La 1ère taxe est calculée sur le prix hors taxes,
                la deuxième en cascade sur le prix hors taxe majoré du montant
                de la 1ere taxe (*).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="446"
                style="width: 446px; border: solid 1px #000000;"><p><span
                style="font-weight: bold; text-decoration: underline;">Remarques:</span></p>

                <p>- (*) Ces 3 champs sont accessibles si vous utilisez la
                notion de TVA Double (Notamment USA et Canada, Taxe provinciale
                + Taxe fédérale). Pour activer cette notion, renseignez une
                clef dans la configuration de WinPro (INI ou table
                settings):</p>

                <p>  <span class="f_Winproini">[</span><span
                class="f_Winproini">VAT]</span></p>

                <p>     <span class="f_Winproini">Double</span>   = 0 ; TVA
                simple.</p>

                <p>     <span class="f_Winproini">Double</span>   = 1 ; TVA
                double.</p>

                <p> </p>

                <p>- Il est également possible de saisir une TVA distincte pour
                le châssis et pour la pose dans une commande WinPro (notamment
                utilisée dans certains départements et territoires, voir <a
                href="rn725x.php">note de version 7.2.58</a>). Cette TVA pour
                la pose seulement pourra être saisie dans l'onglet <span
                style="font-style: italic;">Prix</span> de la commande, sous le
                champs de TVA standard. Elle sera également détaillée en bas de
                page des documents commerciaux. Pour activer cette saisie,
                renseignez une clef dans la configuration de WinPro (INI ou
                table settings):</p>

                <p>  <span class="f_Winproini">[VAT]</span></p>

                <p>     <span class="f_Winproini">TvaPose</span>   = 0 ; TVA
                unique.</p>

                <p>     <span class="f_Winproini">TvaPose</span>   = 1 ; TVA
                séparée pour la pose.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Code comptable</span>: Ce
                code est obligatoire et doit être unique. Il pourra servir de
                lien pour une éventuelle liaison avec un programme de
                comptabilité.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Par défaut</span>: Cochez
                cette case si ce code de TVA correspond à la TVA par défaut
                utilisée dans la fiche client ou prospect.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
