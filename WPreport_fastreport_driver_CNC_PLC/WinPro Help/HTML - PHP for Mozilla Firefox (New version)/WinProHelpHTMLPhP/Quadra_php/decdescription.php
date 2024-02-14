<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Description","Description","Beschrijving"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?decdescription.php"; }
else { parent.quicksync('a5.10.1'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Description</title>
  <meta name="keywords" content="_FillCateg[]">
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
        href="panneaudeco.php">Previous</a>  <a
        href="decdimensions.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>The description page defines the main characteristics of the decorative panel.</p>

        <p style="text-align: center;"><img src="img/clip0200eng.jpg"
        width="660" height="467" border="0" alt="clip0200eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>:
                Description for the panel.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Category</span>: Numerical value assigned to variable 
			  <a href="varremplissages.php">_FillCateg[]</a>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">2nd category</span>: Second numerical value assigned to variable 
			  <a href="varremplissages.php">_FillCateg2[]</a>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="23"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Exclude from WinPro/D</span>: Check this
                box if you do not want this panel to be exported to WinPro/D.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold; color: #000000;">Selection filter</span>: This combo enables a customizable filter for 
				filling selection within the order. This filter may be used when selecting the filling, with a button on the right 
				of the filling code, from any change filling menu (Window tab, Sash tab or context menu "Change glazing").
				You may first create those filters through menu <span  style="font-weight: bold;">Data | Miscellaneous |
                Filling category</span> (table <span style="font-style: italic">FillCateg). Refer to <a href="8_0_2_x.php">note de version 8.02</a> 
				for more details.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"><span
        class="f_Textestd"
        style="font-style: italic; color: #000000;"> </span></p>

        <p
        style="text-align: center; text-indent: -24px; margin: 0px 0px 0px 28px;"><span
        class="f_Textestd" style="font-style: italic; color: #000000;">Screenshot from Window tab of the order</span></p>

        <p
        style="text-align: center; text-indent: -24px; margin: 0px 0px 0px 28px;"><img
        src="img/clip0413eng.jpg" width="369" height="167" border="0"
        alt="clip0413eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold; color: #000000;">Thermic category</span>: Assign here a thermic category for WinPro to compute 
				the thermic coefficient for this panel. Those categories are created through menu <span style="font-weight: bold;">Technic | Window |
                Panel categories</span>. Only for users of Thermic Module, as defined into <a href="8_1_0_x.php">release note 8.1.0</a>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Article</span>: Code of the panel into the 
			  <a href="articles.php">article table</a>. This article will be used both for stock handling and for computing the cost price.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Inside drawing</span>: Code of the <a href="dessinwinpro.php">drawing</a> that will be used 
			  for inside views.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Outside drawing</span>: Code of the <a href="dessinwinpro.php">drawing</a> that will be used 
			  for outsside views.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

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
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>Cette page permet de définir les principales caractéristiques du
        panneau décoratif. </p>

        <p style="text-align: center;"><img src="img/clip0200fra.jpg"
        width="658" height="462" border="0" alt="clip0200fra"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>:
                Description du panneau.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Catégorie</span>: Valeur
                numérique de la catégorie qui sera assignée à la variable<span
                style="font-weight: bold;"><a href="varremplissages.php">_RemplCateg[]</a></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">2ème catégorie</span>:
                Valeur numérique de la catégorie secondaire qui sera assignée à
                la variable<span style="font-weight: bold;"><a href="varremplissages.php">_RemplCateg2[]</a></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="23"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Exclure de WinPro/D</span>:
                Cochez cette case pour ne pas exporter cette fiche panneau vers
                WinPro/D.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold; color: #000000;">Filtre de
                sélection</span><span class="f_Textestd"
                style="color: #000000;">: Ce combo active un filtre
                personalisable de sélection du remplissage en saisie de
                commande. Un bouton à droite du code du remplissage, dans tous
                les menus de sélection de remplissages (onglet Châssis de la
                commande, onglet Ouvrant, menu contextuel "Changer de vitrage")
                permet de définir ce filtre. Pour pouvoir affecter un filtre à
                un panneau donné, et l'utiliser ensuite en saisie, il faut
                d'abords créer une table des filtres de sélection de
                remplissages via le menu </span><span class="f_Textestd"
                style="font-weight: bold;">Données | Autres données |
                Catégories de remplissages </span><span
                class="f_Textestd">(</span><span class="f_Textestd"
                style="color: #000000;">table </span><span class="f_Textestd"
                style="font-style: italic; color: #000000;">FillCateg).
                </span><span class="f_Textestd"
                style="color: #000000;">Reportez vous à la <a
                href="8_0_2_x.php">note de version 8.02</a> pour plus de
                détails.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"><span
        class="f_Textestd"
        style="font-style: italic; color: #000000;"> </span></p>

        <p
        style="text-align: center; text-indent: -24px; margin: 0px 0px 0px 28px;"><span
        class="f_Textestd" style="font-style: italic; color: #000000;">Vue de
        l'onglet châssis de la commande</span></p>

        <p
        style="text-align: center; text-indent: -24px; margin: 0px 0px 0px 28px;"><img
        src="img/clip0413.gif" width="355" height="139" border="0"
        alt="clip0413"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold; color: #000000;">Catégorie thermique</span>: Renseigner ici une catégorie thermique pour le remplissage, 
				afin que WinPro calcule les valeurs thermique de ce panneau. Ces catégories de remplissages sont à créer dans le 
				menu <span style="font-weight: bold;">Technique | Châssis | Catégorie de panneaux</span>. Uniquement pour les utilisateurs du 
				Module Thermique, tel que défini dans la <a href="8_1_0_x.php">note de version 8.1.0</a>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Article</span>: Code du
                panneau dans la table <a href="articles.php">table Article</a>.
                Cette article sera utilisé à la fois pour la gestion de stock
                et le calcul de prix de revient.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Dessin intérieur</span>:
                Code du <a href="dessinwinpro.php">dessin</a> à utiliser pour
                représenter la vue intérieure du panneau.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Dessin extérieur</span>:
                Code du <a href="dessinwinpro.php">dessin</a> à utiliser pour
                représenter la vue extérieure du panneau.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p> </p>
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
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>De pagina beschrijving definieert de algemene eigenschappen van een sierpaneel.</p>

        <p style="text-align: center;"><img src="img/clip0200eng.jpg"
        width="660" height="467" border="0" alt="clip0200eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Beschrijving</span>:
                Beschrijving van het paneel.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Categorie</span>: Numerieke waarde toegewezen aan de variabele 
			  <a href="varremplissages.php">_FillCateg[]</a>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">2nd categorie</span>: Tweede numerieke waarde toegewezen aan de variabele 
			  <a href="varremplissages.php">_FillCateg2[]</a>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="23"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Exclude van WinPro/D</span>: Selecteer dit
                wanneer je niet wenst dat dit paneel gebruikt geexporteert wordt naar WinPro/D.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold; color: #000000;">Selectie filter</span>: Deze combo activeert een aanpasbare filter voor de selectie van vullingen in een order.
				De filter mag gebruikt worden als een vulling geselecteert wordt,met de knop rechts van de vullingcode,en vanaf elke wijziging van het vullingsmenu.
				( Raam tabblad, Vleugel tabblad of context menu "Wijzig beglazing").
				U dient eerst deze filters te creeëren in het menu <span  style="font-weight: bold;">Data | Miscellaneous |
                Vullingscategorie</span> (table <span style="font-style: italic">FillCateg). Zie ook <a href="8_0_2_x.php">release note's versie 8.02</a> 
				voor meer details.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"><span
        class="f_Textestd"
        style="font-style: italic; color: #000000;"> </span></p>

        <p
        style="text-align: center; text-indent: -24px; margin: 0px 0px 0px 28px;"><span
        class="f_Textestd" style="font-style: italic; color: #000000;">Screenshot van het tabblad Raam in een order</span></p>

        <p
        style="text-align: center; text-indent: -24px; margin: 0px 0px 0px 28px;"><img
        src="img/clip0413eng.jpg" width="369" height="167" border="0"
        alt="clip0413eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold; color: #000000;">Thermische categorie</span>: Wijs hier een thermische categorie aan toe opdat WinPro 
				de thermische coëfficient van dit paneel kan berekenen.Deze categorieën worden aangemaakt in het menu <span style="font-weight: bold;">Techniek | Raam |
                Paneel categorieën</span>. Enkel voor gebruikers van de module TM of TMS (Thermische Berekening), zoals gedefinieert in <a href="8_1_0_x.php">release note 8.1.0</a>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Artikel</span>: Code van het paneel in de 
			  <a href="articles.php">article tabel</a>. Dit arikel zal zowel gebruikt worden voor voorraadbeheer als voor berekening van de kostsprijs.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Tekening binnenzicht</span>: Code van de <a href="dessinwinpro.php">tekening</a> welke gebruikt wordt 
			  voor het paneel in binnenzicht.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Tekening buitenzicht</span>: Code van de <a href="dessinwinpro.php">tekening</a> welke gebruikt wordt 
			  voor het paneel in buitenzicht.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
