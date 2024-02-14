<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Colour","Couleur"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?volcaissoncouleur.php"; }
else { parent.quicksync('a6.1.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Caisson</title>
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
        href="volcaissondescription.php">Previous</a>  <a
        href="volcaissoncorrcouleur.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>This page lets you define the characteristics of colours to be used for this shutter box.</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p style="text-align: center;"><img src="img/clip0538beng.jpg"
        width="750" height="336" border="0" alt="clip0538beng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Set in/outside colour distinctly</span>: Check this box to be able to set inside coulour and outside colour distincly into the next <span style="font-style: italic;">Frame colour matching</span> tab. Otherwise, WinPro will consider the outside colour matching as the reference colour for any colour matching with the outer frame. <span style="color: #ff0000; text-decoration: underline;">Option available with version 9.1 and upper only, using a non Standalone Roller Shutter licence (no window)</span>.</td>
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
              <td><span style="font-weight: bold;">Allow RAL</span>: Check this box to enable the RAL colour selection list on the right panel, for the user to select the appropriate list of RAL for this box. <span style="color: #ff0000; text-decoration: underline;">Option available with version 9.1 and upper only</span>.</td>
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
              <td><span style="font-weight: bold;">Limit choice of RAL colours
			  </span>: When checked, the user is unable to input a non standard RAL colour anymore, 
			  only the standard RAL colours will fill the combo lists in case of non standard RAL
			  (<img src="img/clip7eng.jpg" width="94" height="20" border="0" alt="Clip7eng"> checked).<br>
                Moreover, using the  <span
                style="font-weight: bold;">Choose the sides</span> button, a choice by side, inside or outside colour, 
				for each RAL colour may be done. 
				Both sides are available for each standard RAL colour by default.</td>
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
              <td><span style="font-weight: bold;">Allowed
                colours</span>: Select in this list all the colours which are standard for this shutter box. Those colours 
				will fill combo list of colour during roller shutter creation, as long as the box <img src="img/clip7eng.jpg" width="94"
                height="20" border="0" alt="Clip7eng"> is not checked. Colours listed here are previously created into 
				menu Data | Basic data | Colours.</td>
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
              <td><span style="font-weight: bold;">Standard RAL colours</span>: Select in
                this list all the colours which can be used as standard RAL
                colours or semi-standard colours (mostly used within aluminium system of profiles). <span style="color: #ff0000; text-decoration: underline;">Option available when above <img src="img/clip7beng.jpg" width="64" height="15" border="0" alt="Clip7beng"> option is checked, using version 9.1 and upper only</span>.</td>
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
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>Cette page vous permet de définir les caractéristiques des couleurs utilisables dans ce caisson de volet.</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p style="text-align: center;"><img src="img/clip0538bfra.jpg"
        width="748" height="335" border="0" alt="clip0538bfra"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Définir teintes ext. et int. séparemment</span>: Cocher cette case pour définir les teintes extérieures séparemment des teintes intérieures dans l'onglet suivant <span style="font-style: italic;">Correspondance couleur dormant</span>. Autrement, WinPro prendra la correspondance t=de teinte pour l'extérieur comme teinte de référence pour toute correspondance avec le dormant. <span style="color: #ff0000; text-decoration: underline;">Option disponible en version 9.1 ou supérieure uniquement, et avec une licence autre que Volet Autonome (sans menuiserie)</span>.</td>
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
              <td><span style="font-weight: bold;">Autoriser RAL</span>: Cocher cette case pour activer la liste de sélection des RAL standards sur la droite, pour que l'utilisateur sélectionne les teintes appropriées pour ce caisson. <span style="color: #ff0000; text-decoration: underline;">Option disponible en version 9.1 ou supérieure uniquement</span>.</td>
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
              <td><span style="font-weight: bold;">Couleurs autorisées</span>:
                Les couleurs autorisées pour ce caisson seront disponibles dans les listes combo
                permettant de définir la teinte du caisson, pour autant que la saisie de ce repère ne soit pas effectué en
                teinte RAL (la case <img src="img/clip0198.gif" width="57" height="10" border="0" alt="Clip0198"> doit donc être
                désactivée).<br>
                Les couleurs apparaissant dans ces 2 listes ont été créées au
                préalable via le point de menu Données | Données de base |
                Couleurs.</td>
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
              <td><span style="font-weight: bold;">Couleurs RAL
                Standard</span>: Cochez la liste des couleurs RAL considérées
                comme semi-standard pour ce caisson (cette possibilité est
                généralement utilisée pour les châssis aluminium).</td>
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
              <td><span style="font-weight: bold;">Limiter le choix des
                couleurs RAL</span>: En activant cette case, nous empêchons
                l'utilisateur de saisir une teinte RAL hors standard. Seules
                les teintes RAL standard seront listées dans les listes combo
                en cas de saisie en teinte ral (<img src="img/clip0198.gif"
                width="57" height="10" border="0" alt="Clip0198"> activée).<br>
                De plus à l'aide du bouton <span
                style="font-weight: bold;">Choix faces</span>, nous pouvons
                définir, pour chaque teinte Ral, s'il doit être proposé en face
                intérieure et/ou en face extérieure. Par défaut, les 2 faces
                sont disponibles pour tous les Ral standard. <span style="color: #ff0000; text-decoration: underline;">Option disponible lorsque la case ci-dessus <img src="img/clip7bfra.jpg" width="80" height="17" border="0" alt="Clip7bfra"> est cochée, avec une version 9.1 ou supérieure uniquement</span>.</td>
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
