<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Increase buying price","Augmenter les prix d'achat"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utilaugmenterachat.php"; }
else { parent.quicksync('a9.13'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Augmenter les prix d'achat</title>
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
        href="utilbasculertarif.php">Previous</a>  <a
        href="utilremiseachat.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This tool is suitable to change the buying price fields (brut and net), as well as current cost price of 
	  <a href="artfournisseur.php">article</a> record, without altering the 
	  <a href="utilbasculertarif.php">list cost price</a> and <a
        href="utilremiseachat.php">buying price discounts</a>.</p>

        <p> </p>

        <p>It is accessed through menu <span style="font-weight: bold;">Tool | Increase buying price</span>.</p>

        <p> </p>

        <p>At the tool start up, a message will ask to confirm that you wish to apply changes and update buying prices.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0764eng.jpg"
        width="242" height="173" border="0" alt="clip0764eng"></p>

        <p style="text-align: center;"> </p>

        <p>After confirmation, a second dialog is displayed to type in the administrative password of WinPro. Ask for this 
		password to the WinPro administrator, or to Quadrature company.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0762eng.jpg"
        width="220" height="142" border="0" alt="clip0762eng"></p>

        <p>Once those stages validated, the price update dialog is displayed.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0765eng.jpg"
        width="377" height="201" border="0" alt="clip0765eng"></p>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Selection conditions</span></td>
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
              <td><span style="font-weight: bold;">Category</span>: This combo lists <a href="categoriesarticle.php">article 
			  categories</a> existing within WinPro, in order to apply buying price increase onto those articles only.
			  When left blank, all categories are processed.</td>
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
              <td><span style="font-weight: bold;">Supplier</span>: This combo lists <a href="fournisseur.php">suppliers</a> 
			  created into WinPro, in order to apply buying price increase onto those articles only. When left blank, all suppliers 
			  are processed.</td>
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
              <td><span style="font-weight: bold;">% buying price increase</span>: Set here the increase percentage to apply onto 
			  buying price fields from the article records corresponding to criteras above.</td>
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
                      <td>This tool only forces the buying price field value. Il clique également les boutons
                        <img src="img/clip0084.gif" width="20" height="23"
                        border="0" alt="clip0084"> for yourself, until the prices are recompute to obtain the current cost price, 
						as explainded into <a href="artfournisseur.php">article</a> record. But, at the opposite of the 
						<a href="utilbasculertarif.php">previous tool</a>, this one will stop at current cost price level and won't
						alter the list cost price.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>
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
      <td align="left"><p>Cet utilitaire à pour objet de modifier le champ de
        prix d'achat (net et brut) et de prix de revient courant de la fiche <a
        href="artfournisseur.php">article</a>, sans modifier les <a
        href="utilbasculertarif.php">prix de revient tarif</a> et les <a
        href="utilremiseachat.php">remises d'achat</a>.</p>

        <p> </p>

        <p>Cet outil est accessible via <span
        style="font-weight: bold;">Utilitaires | Augmenter les prix
        d'achat</span>.</p>

        <p> </p>

        <p>Au lancement de l'outil, un message vous demandera de confirmer que
        vous souhaitez bien procéder à la mise à jour des prix d'achat.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0764.zoom85.gif"
        width="200" height="116" border="0" alt="clip0764"></p>

        <p style="text-align: center;"> </p>

        <p>Après confirmation, un second dialogue vous invite à saisir le mot
        de passe d'administration de WinPro. Demandez ce mot de passe à votre
        administrateur WinPro, ou bien à la société Quadrature.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0762.zoom84.gif"
        width="179" height="124" border="0" alt="clip0762"></p>

        <p>Une fois ces sécurités validées, le dialogue de mise à jour des prix
        d'achat apparaît.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0765.zoom87.gif"
        width="325" height="180" border="0" alt="clip0765"></p>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Critères de
              sélection</span></td>
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
              <td><span style="font-weight: bold;">Catégorie</span>: Ce combo
                propose la liste des <a href="categoriesarticle.php">catégories
                d'articles</a> créées dans WinPro, afin d'appliquer
                l'augmentation sur les articles de cette catégorie uniquement.
                Si rien n'est renseigné, toutes les catégories d'articles
                seront traitées.</td>
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
              <td><span style="font-weight: bold;">Fournisseur</span>: Ce combo
                propose la liste des <a href="fournisseur.php">fournisseurs</a>
                créés dans WinPro, afin d'appliquer l'augmentation sur les
                articles de ce fournisseur uniquement. Si rien n'est précisé
                ici, les articles de tous les fournisseurs seront traités.</td>
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
              <td><span style="font-weight: bold;">% augmentation du prix
                d'achat</span>: Renseignez ici le pourcentage d'augmentation à
                appliquer aux champs de prix d'achat des articles
                correspondants aux critères ci-dessus.</td>
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
                      <td>Cet outil ne fait que forcer la valeur du champ prix
                        d'achat de l'article. Il clique également les boutons
                        <img src="img/clip0084.gif" width="20" height="23"
                        border="0" alt="clip0084"> à votre place, de manière à
                        recalculer les prix jusqu'à obtenir le prix de revient
                        courant, comme expliqué dans la fiche <a
                        href="artfournisseur.php">article</a>. Par contre, il
                        s'arrêtera au calcul du prix courant et n'altérera pas
                        le prix de revient tarif, contrairement à l'<a
                        href="utilbasculertarif.php">outil précédent</a>.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
