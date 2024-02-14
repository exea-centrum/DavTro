<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Price Table","Tarif"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?arttarif.php"; }
else { parent.quicksync('a4.5.3'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Tarif</title>
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
        href="artfournisseur.php">Previous</a>  <a
        href="artlaquage.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>Some articles cannot be defined with a single price. You need to assign them a one or two dimension price table. This page lets you define such prices. </p>

        <p style="text-align: center;"><img src="img/clip0098eng.jpg" width="522" height="325" border="0" alt="clip0098eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Dimension type</span><span style="color: #000000;">: Select the desired dimension type. 
			  If you check the box </span><span style="font-weight: bold; color: #000000;">No table</span><span style="color: #000000;">(checked by default), 
			  all elements of this page are disabled and the price fields of the supplier pages remain active and visible. If you check any other box, the price 
			  fields of the main <a href="artfournisseur.php">supplier page</a> are disabled (only the discount, currency and cost coefficient fields remain active); 
			  secondary supplier pages are disabled, and the fields on this page are enabled. Depending on which box you checked, you will have one or two dimensions lists.</td>
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
              <td><span style="font-weight: bold;">Parameters</span><span style="color: #000000;">: The cost coefficient, the currency and its 
			  rate are displayed here as reminders. A formula field is available to calculate the selling price. You may set a formula here, 
			  using the following variables</span>:</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 40px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">X1</span><span style="color: #000000;">: cost coefficient.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 40px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">X2</span>: currency rate.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 40px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">P1</span><span style="color: #000000;">: buying price for the corresponding dimension.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 40px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">P2</span><span style="color: #000000;">: current cost price for the corresponding dimension.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 40px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">P3</span><span style="color: #000000;">: list cost price for the corresponding dimension.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 4px;"><span
        style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><img src="img/clip21eng.jpg" width="136" height="29" border="0" alt="clip21eng"><span style="font-weight: bold;"> button</span>: 
			  lets you type the buying price table.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="margin: 0px 0px 0px 4px;"><span
        style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><img src="img/clip22eng.jpg" width="112" height="25" border="0" alt="clip22eng"><span style="font-weight: bold;"> button 
			  (concering Current Cost Price)</span><span style="font-weight: bold;"></span>: lets you automatically fill the current 
			  cost price table from the buying price table, using the discount, currency rate and cost coefficient.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="margin: 0px 0px 0px 4px;"><span
        style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><img src="img/clip23eng.jpg" width="135" height="33" border="0" alt="clip23eng"><span style="font-weight: bold;"> button</span>: 
			  lets you type the current cost price table.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="margin: 0px 0px 0px 4px;"><span
        style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><img src="img/clip24eng.jpg" width="101" height="24" border="0" alt="clip24eng"><span style="font-weight: bold;"> button</span>: 
			  copies the current cost price table into the list cost price table.</td>
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
              <td><img src="img/clip25eng.jpg" width="134" height="25" border="0" alt="clip25eng"><span style="font-weight: bold;"> button</span>: 
			  lets you type the list cost price table.</td>
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
              <td><img src="img/clip22eng.jpg" width="112" height="25" border="0" alt="clip22eng"><span style="font-weight: bold;"> button 
			  (concering List Selling Price)</span><span style="font-weight: bold;"></span>: lets you fill automatically the selling price table, 
			  using any of the other kind of prices and the formula which you have defined.</td>
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
              <td><span style="font-weight: bold;">Min width</span>: minimum width under which the article is not useable. 
			  This field only applies to 2 dimension price tables.</td>
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
              <td><span style="font-weight: bold;">Min height</span>: minimum height under which the article is not useable. This field is renamed '</span>
			  <span style="font-weight: bold; color: #000000;">Minimum length</span><span style="color: #000000;">' for one dimension price tables. </span></td>
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
              <td><span style="font-weight: bold;">Widths</span><span style="color: #000000;">: This table lets you type the widths of the 
			  price table. The gap between 2 dimensions may be variable. This table does not appear for one dimension price tables. </span></td>
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
              <td><span style="font-weight: bold;">Heights</span><span style="color: #000000;">: This table lets you type the widths of the 
			  price table. The gap between 2 dimensions may be variable. This table is renamed </span><span style="font-weight: bold; color: #000000;">
			  Lengths</span><span style="color: #000000;">for one dimension price tables. </span></td>
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

<p style="background: #fffff2;"><span style="color: #000000;"> </span></p>

<div class="FRA">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>Certains articles ne peuvent être définis avec un seul prix. Ils
        doivent être associés à une grille de prix à une ou deux dimensions.
        Cet onglet vous permet de définir les prix de tels articles.</p>

        <p style="text-align: center;"><img src="img/clip0098.gif" width="601"
        height="400" border="0" alt="clip0098"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Type de dimension</span>:
                Choisissez le type de dimension souhaité en fonction de votre
                grille de prix. Si vous cochez la case <img src="img/clip0115.gif"
                width="76" height="15" border="0" alt="clip0115"> (ce qui est
                le cas par défaut), tous les éléments de cet onglet seront
                désactivés et les champs de prix des onglets "Fourn.princ",
                "Fourn. n°2" ...restent actives. Si vous cochez l'une ou
                l'autre des deux autres cases, les champs prix de l'onglet
                "Fourn.princ" sont désactivées (seuls les champs remise, devise
                d'achat et coefficient de frais restent accessibles), les
                onglets "Fourn. n°2" et "Fourn. n°3" sont inaccessibles, et les
                champs de cet onglet sont activés. Selon la case cochée, vous
                aurez une ou deux listes de dimensions à encoder.</td>
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
              <td><span style="font-weight: bold;">Paramètres</span>: Le
                coefficient de frais, la devise et le taux de change sont
                affichés ici pour rappel. Vous disposez d'un champ Formule pour
                le calcul du prix de vente négoce, dans lequel vous pouvez
                saisir une formule arithmétique, qui permettra de calculer le
                prix de vente négoce de l'article, pour chacune de ses
                dimensions, en utilisant les variables suivantes:</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 40px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">X1</span>: coefficient de
                frais.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 40px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">X2</span>: taux de
              change.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 40px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">P1</span>: prix d'achat de
                la dimension correspondante.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 40px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">P2</span>: prix de revient
                courant de la dimension correspondante.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 40px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">P3</span>: prix de revient
                tarif de la dimension correspondante.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 4px;"><span
        style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">bouton </span><img
                src="img/clip0116.gif" width="58" height="12" border="0"
                alt="clip0116">: Vous donne accès à la saisie des prix d'achat
                dans la grille.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="margin: 0px 0px 0px 4px;"><span
        style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">bouton</span><img
                src="img/clip0117.gif" width="72" height="20" border="0"
                alt="clip0117">(concernant le Prix de revient courant)<span
                style="font-weight: bold;"></span>: Vous permet de remplir
                automatiquement la grille de prix de revient courant, sur base
                du prix d'achat, compte tenu de la remise, de la devise et du
                coefficient de frais.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="margin: 0px 0px 0px 4px;"><span
        style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">bouton</span><img
                src="img/clip0082.gif" width="108" height="11" border="0"
                alt="clip0082">: Vous donne accès à la saisie des prix de
                revient courant.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="margin: 0px 0px 0px 4px;"><span
        style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">bouton </span><img
                src="img/clip0104.gif" width="73" height="20" border="0"
                alt="clip0104">: Copie la grille de prix de revient courant
                dans la grille de prix de revient tarif.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="margin: 0px 0px 0px 4px;"><span
        style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">bouton </span><img
                src="img/clip0083.gif" width="90" height="11" border="0"
                alt="clip0083">: Vous donne accès à la saisie des prix de
                revient tarif.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="margin: 0px 0px 0px 4px;"><span
        style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">bouton </span><img
                src="img/clip0117.gif" width="72" height="20" border="0"
                alt="clip0117">(concernant le Prix de vente négoce): Vous
                permet de remplir automatiquement la grille de prix de vente
                négoce, en appliquant la formule définie plus haut pour chaque
                dimension de l'article.</td>
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
              <td><span style="font-weight: bold;">Largeur minimum</span>:
                Largeur minimum en-dessous de laquelle l'article n'est pas
                valorisé. Ce champ n'est pas disponible pour les articles à une
                dimension.</td>
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
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Hauteur minimum</span>: Hauteur
                minimum en-dessous de laquelle l'article n'est pas valorisé. Ce
                champ est renommé '<span style="font-weight: bold;">Longueur
                minimum</span>' pour les grilles à une seule dimension.</td>
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
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Largeurs</span>: Cette grille vous
                permet de définir la liste des largeurs qui définissent la
                grille de prix. L'écart entre deux dimensions peut être
                variable. Cette grille n'est pas disponibles pour les articles
                à une dimension.</td>
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
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Hauteurs</span>: Cette grille vous
                permet de définir la liste des hauteurs qui définissent la
                grille de prix. L'écart entre deux dimensions peut être
                variable. Cette grille est renommée '<span
                style="font-weight: bold;">Longueurs</span>'pour les articles à
                une dimension.</td>
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
