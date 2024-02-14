<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Configuration of dates level","Configuration des niveaux de dates"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?configurationniveaudates.php"; }
else { parent.quicksync('a7.12'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Configuration des niveaux de dates</title>
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
        href="modulethbasporte.php">Previous</a>  <a
        href="equipepose.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This dialog is design to set the number of days to decrease from delivery date, for every type of date created, corresponding to "key" dates into the production process. This menu is only available for users of module <span
        style="font-weight: bold;">DAT Automatic date computation</span>. The various <a href="typedate.php">types of dates</a> 
		("key" dates) should be created first.</p>

        <p> </p>

        <p>This is reached through menu <span
        style="font-weight: bold;">Data | Miscellaneous | Configuration of dates level</span>.</p>

        <p> </p>

        <p>Refer to <a href="rn723x.php">release note version 7.2.32</a>
        for more detail about <span style="font-weight: bold;">DAT</span> module.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0614eng.jpg"
        width="397" height="267" border="0" alt="clip0614eng"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Tabs 1...n</span>: Those tabs correspond to the various date level. You may modify an
			  existing date level within corresponding tab, or else add a new level with button <span style="font-style: italic;">Add</span>, 
			  or even delete an existing date level (whole tab) using button <span style="font-style: italic;">Erase</span>. This date number 
			  will then be available for assigning to windows through formulas using variable <a href="variablesgenerale.php">_DateLevel</a>.</td>
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
              <td><span style="font-weight: bold;">Type of date</span>: List of existing date types.</td>
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
              <td><span style="font-weight: bold;">Value</span>: Number of days to decrease from delivery date for each date type.</td>
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
              <td><span style="font-weight: bold;">Add</span>: This button is suitable to add a date levl, which adds a tab into the dialog. 
			  A new field prompts the user to create a non existing <span style="font-weight: bold;">Level number</span> of date when the 
			  button is used.</td>
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
              <td><span style="font-weight: bold;">Level number</span>:
                Sequence number of date level to be created. Use <span style="font-weight: bold;">Ok</span> button on the right of the field
				to validate the new created number, or the <span style="font-weight: bold;">Cancel</span> button on the right of the same 
				field to cancel the dialog. This date level number is assigned to each window by rule, using variable <span
                class="f_Variables">_DateLevel</span>.</td>
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
              <td><span style="font-weight: bold;">Erase</span>: Use the button to erase the selected date level.</td>
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
              <td><span style="font-weight: bold;">Ok</span>: Use the button to record the dialog.</td>
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
              <td><span style="font-weight: bold;">Cancel</span>: Use this button to cancel the dialog without saving.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p> </p>

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
      <td align="left"><p>Ce dialogue permet de définir le nombre de jours à
        décrémenter de la date de livraison, pour chaque type de date créé,
        correspondant à des dates "clefs" dans la chaîne de production. Ce menu
        n'est accessible que si vous utilisez le module <span
        style="font-weight: bold;">DAT Calcul de dates automatisé</span>. Vous
        devez avoir créer vos <a href="typedate.php">types de dates</a> (dates
        "clefs") au préalable.</p>

        <p> </p>

        <p>Ce dialogue est accessible via le menu <span
        style="font-weight: bold;">Données | Autres données | </span><span
        class="f_Heading1">Configuration des niveaux de dates</span>.</p>

        <p> </p>

        <p>Reportez vous à la <a href="rn723x.php">note de version 7.2.32</a>
        pour plus de détails sur le module <span style="font-weight: bold;">DAT
        Calcul de dates automatisé</span>.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0614.zoom76.gif"
        width="468" height="247" border="0" alt="clip0614"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Onglets 1...n</span>: Ces
                onglets correspondent aux différents niveaux de dates que vous
                souhaitez implémenter. Vous pouvez modifier un niveau de date
                en accédant à l'onglet correspondant, ou bien ajouter un niveau
                via le bouton <span style="font-style: italic;">Ajouter</span>,
                ou encore supprimer un niveau de date (onglet) avec le bouton
                <span style="font-style: italic;">Effacer</span>. Ce numéro de
                niveau pourra être assigné par formule à chaque menuiserie, via
                l'initialisation de la variable <a
                href="variablesgenerale.php">_NiveauDate</a>.</td>
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
              <td><span style="font-weight: bold;">Type de date</span>: Colonne
                affichant la liste des types de dates existants.</td>
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
              <td><span style="font-weight: bold;">Valeur</span>: Nombre de
                jours à décrémenter de la date de livraison pour chaque type de
                date.</td>
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
              <td><span style="font-weight: bold;">Ajouter</span>: Ce bouton
                permet d'ajouter un niveau de date, et créé donc un nouvel
                onglet. Lorsque vous cliquez sur le bouton, un nouveau champs
                vous invite à saisir un <span style="font-weight: bold;">Numéro
                de niveau </span>de date non existant.</td>
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
              <td><span style="font-weight: bold;">Numéro de niveau</span>:
                Numéro du nouveau niveau de date à créer. Utilisez le bouton
                <span style="font-weight: bold;">Ok </span>à droite du champ
                pour valider votre nouveau numéro de niveau créé, ou <span
                style="font-weight: bold;">Annuler </span>à droite du même
                champ pour annuler votre saisie. Ce numéro de niveau est
                affecté à chaque châssis par paramétrage, via la variable <span
                class="f_Variables">_NiveauDate</span>.</td>
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
              <td><span style="font-weight: bold;">Effacer</span>: Ce bouton
                permet d'effacer le niveau de date sélectionné. </td>
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
              <td><span style="font-weight: bold;">Ok</span>: Ce bouton permet
                d'enregistrer votre saisie. </td>
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
              <td><span style="font-weight: bold;">Annuler</span>: Ce bouton
                permet d'annuler la saisie. </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p> </p>

        <p> </p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
