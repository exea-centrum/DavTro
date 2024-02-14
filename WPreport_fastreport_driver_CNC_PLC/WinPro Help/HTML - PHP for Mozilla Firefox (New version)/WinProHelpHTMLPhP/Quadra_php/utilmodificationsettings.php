<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Edit settings","Modification de settings"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utilmodificationsettings.php"; }
else { parent.quicksync('a9.35'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Modification de settings</title>
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
        href="utilexportini.php">Previous</a>  <a
        href="utilregenereruser.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This version 8 specific menu (settings table) is designed to allow changes into overall settings 
	  from WinPro, contained into WinPro.ini file for a version 7.</p>

        <p>Through this feature you straight modify keys from settings table using WinPro interface instead of handling the
		WinPro.ini file. You may also create or delete keys and sections into settings table, as well as read a contextual help 
		for a given key, when available.</p>

        <p> </p>

        <p>The feature is reached through menu <span
        style="font-weight: bold;">Tools | Edit settings</span>.</p>

        <p> </p>

        <p style="text-align: center;"><map name="map1">
          <area shape="rect" coords="0,0,0,0"
          href="utilmodificationsettings.php#modset01">
          <area shape="rect" coords="0,0,0,0"
          href="utilmodificationsettings.php#modset02">
          <area shape="rect" coords="0,0,0,0"
          href="utilmodificationsettings.php#modset03">
        </map>
        <img src="img/clip0804eng.jpg" width="799" height="599" border="0"
        alt="clip0804eng" ismap="ismap" usemap="#map1"></p>

        <p> </p>

        <p><a name="modset01"></a><span style="font-weight: bold;">The left area</span> displays a tree of the sections from
		settings table. Scrolling a section make the list of keys from this section to appear. Select a key to modify into 
		this list.</p>

        <p>You may also add your own keys and sections by right into this list.</p>

        <p>To add a section, right click onto any section and select "Add section" into contextual menu.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0796eng.jpg"
        width="496" height="260" border="0" alt="clip0796eng"></p>

        <p>The new key creation dialog appears.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0797eng.jpg"
        width="402" height="188" border="0" alt="clip0797eng"></p>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Section</span>: Name of the section to create.</td>
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
              <td><span style="font-weight: bold;">Key</span>: Name of the key to create.</td>
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
              <td><span style="font-weight: bold;">Type</span>: Format for created key, among integer, double or string.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Finally click onto button <img src="img/clip0798.gif" width="47"
        height="18" border="0" alt="clip0798"> to validate the creation, or 
		<img src="img/clip0799.gif" width="42" height="16" border="0"
        alt="clip0799"> to abort.</p>

        <p style="text-align: center;"> </p>

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
                style="font-weight: bold; color: #000000; text-decoration: underline;">Note</span><span
                style="color: #000000; text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">After any creation, use button <img src="img/clip0800eng.jpg"
                        width="147" height="22" border="0" alt="clip0800eng"> to record changes.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">To create a new key into an existing section, right click onto the section
					  and select option "Add key"; the procedure is similar except that the </span><span
                        style="font-weight: bold; color: #000000;">Section
                        </span><span style="color: #000000;"> field of the dialog is greyed.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">Correctly click onto a section and not a key, otherwise creation would fail.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">When adding a new section, you must create at least one new key within the
					  section in the same time.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><a name="modset02"></a><span style="font-weight: bold;">The top right area</span> displays a description of selected
		key, when available.</p>

        <p>The various tabs correspond to <a
        href="langues.php">languages</a> allowed and visible within WinPro. </p>

        <p>You mais read the description into the various languages by selecting the appropriate tab.</p>

        <p>You may also modify or create a description, with selecting the key and typing the text into the appropriate
        <span style="font-weight: bold;">Description</span> tab. Then click button <img src="img/clip0800eng.jpg" 
		width="147" height="22" border="0" alt="clip0800eng"> below. </p>

        <p> </p>

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
                style="font-weight: bold; color: #000000; text-decoration: underline;">Note</span><span
                style="color: #000000; text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">The key descriptions are stored ointo dedicated files labelled
					  sStrings.xxx, into subdirectory </span><span style="font-weight: bold; color: #000000;">Trad</span>
					  <span style="color: #000000;"> from WinPro base directory, where xxx is the code of the language modified.
					  Those files are available and maintained for French and English only currently.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">Those sStrings files are not modifiable through a text editor.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-weight: bold;"> </span></p>

        <p><a name="modset03"></a><span style="font-weight: bold;">The bottom right area</span> allows to modify the value of 
		an existing key.</p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Type</span>: Format of created key, among integer, double and string.
                For information.</td>
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
              <td><span style="font-weight: bold;">Value</span>: Key value to modify.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Finally, use the button <img src="img/clip0800eng.jpg" width="147" height="22" border="0" alt="clip0800eng"> below to store
		the changes.</p>

        <p> </p>

        <p>Once everything is recorded, use the <img src="img/clip0807eng.jpg" width="146" height="22" border="0" alt="clip0807eng">
		button to leave the dialog.</p>

        <p> </p>

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
                style="font-weight: bold; color: #000000; text-decoration: underline;">Note</span><span
                style="color: #000000; text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">When the dialog is left without recording changes, a confirmation dialog 
					  is displayed.</span></td>
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
      <td align="left"><p>Ce menu spécifique à la version 8 (table settings)
        vous permet de modifier les paramètres de configuration générales du
        logiciel contenus dans le fichier WinPro.INI pour la version 7. </p>

        <p>Avec cette fonction, vous modifiez directement les clefs de la table
        settings par l'interface de WinPro, plutôt que de manipuler le fichier
        WinPro.INI. Vous pouvez également créer ou supprimer des clefs et des sections dans
        la table settings, et consulter une aide sur une clef donnée.</p>

        <p> </p>

        <p>Cet outil est accessible via <span
        style="font-weight: bold;">Utilitaires | Modification de
        settings</span>.</p>

        <p> </p>

        <p style="text-align: center;"><map name="map1">
          <area shape="rect" coords="0,0,0,0"
          href="utilmodificationsettings.php#modset01">
          <area shape="rect" coords="0,0,0,0"
          href="utilmodificationsettings.php#modset02">
          <area shape="rect" coords="0,0,0,0"
          href="utilmodificationsettings.php#modset03">
        </map>
        <img src="img/clip0804fra.jpg" width="800" height="601" border="0"
        alt="clip0804fra" ismap="ismap" usemap="#map1"></p>

        <p> </p>

        <p><a name="modset01"></a><span style="font-weight: bold;">La zone de
        gauche </span>affiche une arborescence des sections de la table
        settings. En développant une branche, la liste des clefs de chaque
        section s'affiche. Sélectionnez dans cette liste une clef à
        modifier.</p>

        <p>Vous pouvez également ajouter vos propres clefs et sections dans la
        table settings, en cliquant avec le bouton droit dans cette liste.</p>

        <p>Pour ajouter une section, cliquez avec le bouton droit sur une
        section quelconque, et choisir "Ajouter une section" dans le menu
        contextuel.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0796.zoom89.gif"
        width="253" height="176" border="0" alt="clip0796"></p>

        <p>Le dialogue de création de nouvelle clef apparaît.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0797fra.jpg"
        width="401" height="184" border="0" alt="clip0797fra"></p>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Section</span>: Nom de la
                section à créer.</td>
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
              <td><span style="font-weight: bold;">Clef</span>: Nom de la clef
                à créer.</td>
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
              <td><span style="font-weight: bold;">Type</span>: Format de la
                clef créée, parmi les formats nombres entiers (Integer),
                nombres décimaux (Double) ou chaîne de caractères (String).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Cliquez enfin sur le bouton <img src="img/clip0798.gif" width="47"
        height="18" border="0" alt="clip0798"> pour valider cette création, ou
        bien <img src="img/clip0799.gif" width="42" height="16" border="0"
        alt="clip0799"> pour annuler.</p>

        <p style="text-align: center;"> </p>

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
                style="font-weight: bold; color: #000000; text-decoration: underline;">Remarque</span><span
                style="color: #000000; text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">Après toute création,
                        utilisez le bouton <img src="img/clip0801.zoom93.gif" width="83" height="22"
                        border="0" alt="clip0801"> en bas de la fenêtre principale.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">Pour créer une clef
                        dans une section existante, cliquez avec le bouton
                        droit sur la section elle même, puis choisissez
                        "Ajouter une clef"; la procédure est identique, mais le
                        champ </span><span
                        style="font-weight: bold; color: #000000;">Section
                        </span><span style="color: #000000;">du dialogue est
                        grisé.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">Cliquez bien sur une
                        section et non sur une clef, sans quoi la création
                        échouera.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">Lors de l'ajout d'une
                        section, vous devez créer au moins une clef pour cette
                        section dans le même temps.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><a name="modset02"></a><span style="font-weight: bold;">La zone de
        droite en haut </span>affiche une description de la clef sélectionnée,
        si cette description existe. </p>

        <p>Les différents onglets correspondent aux <a
        href="langues.php">langues</a> autorisées et visibles dans WinPro. </p>

        <p>Vous pouvez consulter la description de la clef dans les différentes
        langues disponibles en sélectionnant l'onglet voulu.</p>

        <p>Vous pouvez également modifier ou créer une description, en
        sélectionnant la clef et en saisissant le descriptif dans le champ
        <span style="font-weight: bold;">Description</span> prévu à cet effet.
        Ensuite, cliquer sur le bouton <img src="img/clip0805.zoom95.gif"
        width="102" height="21" border="0" alt="clip0805"> en dessous. </p>

        <p> </p>

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
                style="font-weight: bold; color: #000000; text-decoration: underline;">Note</span><span
                style="color: #000000; text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">Les descriptions de
                        clefs sont stockés dans des fichiers sStrings.xxx, dans
                        le répertoire </span><span
                        style="font-weight: bold; color: #000000;">Trad
                        </span><span style="color: #000000;">du répertoire de
                        base de WinPro, où xxx est le code de la langue dans
                        laquelle est stockée la description modifiée. Ces
                        fichiers sont disponibles en langue Française et
                        Anglaise actuellement.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">Ces fichiers sStrings
                        ne sont pas modifiables avec un éditeur de
                      texte.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-weight: bold;"> </span></p>

        <p><a name="modset03"></a><span style="font-weight: bold;">La zone de
        droite en bas</span> vous permet de modifier la valeur d'une clef
        existante.</p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Type</span>: Format de la
                clef créée, parmi les formats nombres entiers (Integer),
                nombres décimaux (Double) ou chaîne de caractères (String).
                Pour information.</td>
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
              <td><span style="font-weight: bold;">Valeur</span>: Valeur de la
                clef à modifier.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Une fois les diverses manipulations faites sur la table settings,
        utiliser le bouton <img src="img/clip0801.zoom93.gif" width="83"
        height="22" border="0" alt="clip0801"><span
        style="color: #000000;"></span>pour enregistrer définitivement les
        changements, puis sur le bouton <img src="img/clip0807.zoom92.gif"
        width="85" height="21" border="0" alt="clip0807"> pour sortit de cet
        outil.</p>

        <p> </p>

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
                style="font-weight: bold; color: #000000; text-decoration: underline;">Note</span><span
                style="color: #000000; text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 12px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">Si vous quittez le
                        dialogue sans avoir enregistrer les modifications, un
                        dialogue pour confirmer votre choix sera
                      affiché.</span></td>
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
