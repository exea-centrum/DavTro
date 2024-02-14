<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Description","Description"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?pdcdescription.php"; }
else { parent.quicksync('a5.14.1'); }
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
        href="panneaudecoconf.php">Previous</a>  <a
        href="pdcdimensions.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>This page lets you define the main characteristics of the decorative composed panel.</p>

        <p style="text-align: center;"> </p>

        <p style="text-align: center;"><img src="img/clip0038eng.jpg" width="505" height="375" border="0"
        alt="clip0038eng"></p>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>:
                Panel description.</td>
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
              <td><span style="font-weight: bold;">Category</span>: Numerical value assigned to variable <a
                href="varremplissages.php">_FillCateg[]</a>.</td>
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
              <td><span style="font-weight: bold;">2nd category</span>: Numerical value assigned to variable <a
                href="varremplissages.php">_FillCateg2[]</a>.</td>
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
              <td><span style="font-weight: bold;">Exclude from WinPro/D</span>:
                Check this box to avoid exporting this panel record toward WinPro/D database.</td>
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
              <td><span style="font-weight: bold;">Selection filter</span>: This combo enables a customizable filter for 
				filling selection within the order. This filter may be used when selecting the filling, with a button on the right 
				of the filling code, from any change filling menu (Window tab, Sash tab or context menu "Change glazing").
				You may first create those filters through menu <span  style="font-weight: bold;">Data | Miscellaneous |
                Filling category</span> (table <span style="font-style: italic">FillCateg</span>). 
				Refer to <a href="8_0_2_x.php">note de version 8.02</a> for more details.</td>
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
              <td width="23"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 
				'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Thermic category</span>: Assign here a thermic category for WinPro to compute 
				the thermic coefficient for this panel. Those categories are created through menu 
				<span style="font-weight: bold;">Technic | Window | Panel categories</span>. Only for users of Thermic Module, 
				as defined into <a href="8_1_0_x.php">release note 8.1.0</a>.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 
				'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Article</span>: Code of the panel into the 
			  <a href="articles.php">article table</a>. This article will be used both for stock 
			  handling and for computing the cost price. You may insert <span class="f_variables">@n@</span> macros into 
				this article's description, the corresponding fields will 
				be replaced with various user defined texts, computed at <a href="pdcarticles.php">Article page</a>, 
				in order to create a composed description, as for a <a href="vitdescription.php">composed glazing</a>.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 
				'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Allowed colours</span>: Check here the list of allowed colours for this panel. 
			  The <span style="font-weight: bold;">Select all</span> button is suitable to select every colours at once, 
			  and the <span style="font-weight: bold;">Reverse selection</span> button is reversing the current selection list.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>
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
        panneau décoratif configuré.</p>

        <p style="text-align: center;"> </p>

        <p style="text-align: center;"><img src="img/clip0038fra.jpg" width="592" height="427" border="0"
        alt="clip0038fra"></p>

        <p style="text-align: center;"> </p>

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
                numérique de la catégorie qui sera assignée à la variable 
				<a href="varremplissages.php">_RemplCateg[]</a>.</td>
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
                la variable <a href="varremplissages.php">_RemplCateg2[]</a>.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 
				'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
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
              <td><span style="font-weight: bold;">Article</span>: Code du
                panneau dans la table <a href="articles.php">table Article</a>.
                Cette article sera utilisé à la fois pour la gestion de stock
                et le calcul de prix de revient. Vous pouvez insérer des macros <span class="f_variables">@n@</span> dans cette 
				description, celles ci seront remplacées par des textes correspondants calculés dans l'onglet 
				<a href="pdcarticles.php">Article</a> pour composer une description concaténée, 
				comme pour un <a href="vitdescription.php">vitrage composé</a>.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 
				'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Couleurs autorisées</span>:
                Sélectionnez ici la liste des couleurs autorisées pour ce panneau. Le bouton 
				<span style="font-weight: bold;">Tout sélectionner</span> permet de sélectionner 
				toutes les couleurs de la liste d'un seul clic, et le bouton <span style="font-weight: bold;">
				Inverser sélection</span> permet d'inverser la liste de sélection courante.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
