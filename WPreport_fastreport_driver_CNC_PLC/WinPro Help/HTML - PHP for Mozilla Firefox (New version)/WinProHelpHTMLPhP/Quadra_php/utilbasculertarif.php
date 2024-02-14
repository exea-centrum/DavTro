<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Copy current prices to list prices","Basculer les prix tarif"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utilbasculertarif.php"; }
else { parent.quicksync('a9.12'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Basculer les prix tarif</title>
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
        href="utilautreutilisateur.php">Previous</a>  <a
        href="utilaugmenterachat.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This tool is designed to recompute the list cost prices within the database, based onto buying prices 
	  and margins defined.</p>

        <p>This only alters the list cost prices, no change is made at this stage onto 
		<a href="utilaugmenterachat.php">buying prices</a> or onto <a
        href="utilremiseachat.php">discounts</a>.</p>

        <p> </p>

        <p>This tool is reached through menu <span
        style="font-weight: bold;">Tools | Copy current prices to list prices</span>.</p>

        <p> </p>

        <p>At the tool start up, a message will ask for acknowledgement if you wish to proceed to the list price update.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0761eng.jpg"
        width="374" height="178" border="0" alt="clip0761eng"></p>

        <p style="text-align: center;"> </p>

        <p>After confirmation, a second dialog invits the user to type in the administrative password for WinPro. Ask for 
		this password to WinPro administrator or to Quadrature in case of need.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0762eng.jpg"
        width="220" height="142" border="0" alt="clip0762eng"></p>

        <p style="text-align: center;"> </p>

        <p>Once those securities validated, the price update dialog is shown.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0763eng.jpg"
        width="532" height="233" border="0" alt="clip0763eng"></p>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Supplier</span>:
                Set here the <a href="fournisseur.php">supplier</a> code to be filtered for the price update. When no code 
				is selected into the combo, the price update will alter all elements without considering the supplier.</td>
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
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Tables to update</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Articles and profiles</span>:
                Recompute list prices for all <a href="artfournisseur.php">articles</a> into the database.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Labour</span>:
                Recompute list prices for all <a
                href="maindoeuvre.php">labours</a> into the database (version 7).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Glazings</span>: Recompute list prices for all 
			  <a href="vitrages.php">glazings</a> into the database (version 7).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -18px; margin: 0px 0px 0px 42px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="450"
                style="width: 450px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Note</span><span
                style="text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>This tool only clicks buttons <img
                        src="img/clip0084.gif" width="20" height="23" border="0"
                        alt="clip0084"> for yourself, until the prices are recompute to obtain the list price, as explainded into 
						<a href="artfournisseur.php">article</a> record. This tool will also alter the current cost price too.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
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
      <td align="left"><p>Cet utilitaire à pour objet de recalculer les prix de
        revient tarif de la base de données, sur base des prix d'achat et des
        coefficients et marges renseignées.</p>

        <p>Cet utilitaire altère uniquement les prix de revient tarifs, aucune
        modification ne sera faites à cette étape sur les <a
        href="utilaugmenterachat.php">prix d'achat</a> ou les <a
        href="utilremiseachat.php">remises</a>.</p>

        <p> </p>

        <p>Cet outil est accessible via <span
        style="font-weight: bold;">Utilitaires | Basculer les prix
        tarif</span>.</p>

        <p> </p>

        <p>Au lancement de l'outil, un message vous demandera de confirmer que
        vous souhaitez bien procéder à la mise à jour des prix tarif.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0761.zoom80.gif"
        width="285" height="110" border="0" alt="clip0761"></p>

        <p style="text-align: center;"> </p>

        <p>Après confirmation, un second dialogue vous invite à saisir le mot
        de passe d'administration de WinPro. Demandez ce mot de passe à votre
        administrateur WinPro, ou bien à la société Quadrature.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0762.zoom84.gif"
        width="179" height="124" border="0" alt="clip0762"></p>

        <p style="text-align: center;"> </p>

        <p>Une fois ces sécurités validées, le dialogue de mise à jour des prix
        tarif apparaît.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0763.zoom82.gif"
        width="430" height="202" border="0" alt="clip0763"></p>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Fournisseur</span>:
                Renseignez ici le code <a
                href="fournisseur.php">fournisseur</a> à filtrer pour mettre à
                jour les prix. Si aucun code n'est sélectionné dans le combo,
                WinPro traitera tous les éléments sans tenir compte du
                fournisseur.</td>
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
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Tables à traiter</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Articles et profils</span>:
                Recalcul des prix de revient tarif pour tous les <a
                href="artfournisseur.php">articles</a> de la base de
              données.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Main d'oeuvre</span>:
                Recalcul des prix de revient tarif pour toutes les <a
                href="maindoeuvre.php">main d'oeuvres</a> de la base de données
                (version 7).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Vitrages</span>: Recalcul
                des prix de revient tarif pour tous les <a
                href="vitrages.php">vitrages</a> de la base de données (version
                7).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -18px; margin: 0px 0px 0px 42px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="450"
                style="width: 450px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Note</span><span
                style="text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Cet outil ne fait que cliquer les boutons <img
                        src="img/clip0084.gif" width="20" height="23" border="0"
                        alt="clip0084"> à votre place, de manière à recalculer
                        les prix jusqu'à obtenir le prix de revient tarif,
                        comme expliqué dans la fiche <a
                        href="artfournisseur.php">article</a>. Cet utilitaire
                        altérera donc le prix de revient courant de l'article
                        également. </td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
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
