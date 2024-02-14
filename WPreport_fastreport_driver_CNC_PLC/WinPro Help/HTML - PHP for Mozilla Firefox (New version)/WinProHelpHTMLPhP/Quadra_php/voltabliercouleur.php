<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Colours","Couleurs"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?voltabliercouleur.php"; }
else { parent.quicksync('a6.2.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Colours</title>
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
        href="voltablierdescription.php">Previous</a>  <a
        href="voltabliercorrcouleurtabdor.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left">
	  
        <p>This page lets you define the characteristics of colours to be used for this shutter curtain using 2 main sections.</p>
		
        <p><span style="font-size: 5pt;"> </span></p>
		
        <p><span style="color: #ff0000; ">This tab is designed for versions 9.1 and upper only!</span></p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p style="text-align: center;"><img src="img/clip0950eng.jpg"
        width="638" height="697" border="0" alt="clip0950eng"></p>

        <p><span style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td><span style="font-weight: bold; Text-decoration: underline;">Shutter curtain section</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Allow frame colour</span><span
                style="color: #000000;">: Check this box to let the curtain follow the frame colour in case of non stand alone roller shutter. When checked, a "Frame colour" option will be available into the curtain combo list of colours from the order. The next tab <span style="font-style: italic;"><a href="voltabliercorrcouleurtabdor.php">Curtain-frame matching</a></span> will then be enabled. <span style="color: #ff0000; text-decoration: underline;">Option unavailable with StandAlone Roller Shutter licence!</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Allow box colour</span><span
                style="color: #000000;">: Check this box to let the curtain follow the shutter box colour. When checked, a "Box colour" option will be available into the curtain combo list of colours from the order.</td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Allow RAL</span>: Check this box to enable the RAL colour selection list on the right panel, for the user to select the appropriate list of RAL for this curtain.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Limit choice of RAL colours
			  </span>: When checked, the user is unable to input a non standard RAL colour anymore, 
			  only the standard RAL colours will fill the combo lists in case of non standard RAL required
			  (<img src="img/clip7eng.jpg" width="94" height="20" border="0" alt="Clip7eng"> checked). Unavailable until previous option is checked.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Allowed
                colours</span>: Select in this list all the colours which are standard for this shutter curtain. Those colours 
				will fill combo list of colour during roller shutter creation, as long as the box <img src="img/clip7eng.jpg" width="94"
                height="20" border="0" alt="Clip7eng"> is not checked. Colours listed here are previously created into 
				menu Data | Basic data | Colours.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Standard RAL colours</span>: Select in
                this list all the colours which can be used as standard RAL
                colours or semi-standard colours (mostly used within aluminium system of profiles). Option unavailable until above <img src="img/clip7beng.jpg" width="64" height="15" border="0" alt="Clip7beng"> option is checked.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td><span style="font-weight: bold; Text-decoration: underline;">Bottom lath section</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">List box allowed colours</span><span
                style="color: #000000;">: Check this option to fill the combo list of colours for final balde with the list of colours allowed for the shutter box.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">List curtain allowed colours</span><span
                style="color: #000000;">: Check this option to fill the combo list of colours for final balde with the list of colours allowed for the shutter curtain.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">List rail allowed colours</span><span
                style="color: #000000;">: Check this option to fill the combo list of colours for final balde with the list of colours allowed for the shutter rail.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Colours set up</span><span
                style="color: #000000;">: Check this option to define manually the list of colours to be shown into the final blade combo list of colours, among the list of standard colours ungreyed into the right pane when checked.</td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Allow frame colour</span><span
                style="color: #000000;">: Check this box to let the final blade follow the outer frame colour in case of non stand alone roller shutter. When checked, a "Frame colour" option will be available into the final blade combo list of colours from the order. The next tab <span style="font-style: italic;"><a href="voltabliercorrcouleurssdor.php">Final lath-frame matching</a></span> will then be enabled. <span style="color: #ff0000; text-decoration: underline;">Option unavailable with StandAlone Roller Shutter licence!</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Allow box colour</span><span
                style="color: #000000;">: Check this box to let the final blade follow the shutter box colour. When checked, a "Box colour" option will be available into the final blade combo list of colours from the order.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Allow curtain colour</span><span
                style="color: #000000;">: Check this box to let the final blade follow the shutter curtain colour. When checked, a "Curtain colour" option will be available into the final blade combo list of colours from the order.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Allow RAL</span>: Check this box to enable the RAL colour selection list on the right panel, for the user to select the appropriate list of RAL for the final blade.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Limit choice of RAL colours
			  </span>: When checked, the user is unable to input a non standard RAL colour anymore, 
			  only the standard RAL colours will fill the combo lists in case of non standard RAL required
			  (<img src="img/clip7eng.jpg" width="94" height="20" border="0" alt="Clip7eng"> checked). Unavailable until previous option is checked.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Allowed
                colours</span>: Select in this list all the colours which are standard for the final blade. Those colours 
				will fill combo list of colour during roller shutter creation, as long as the box <img src="img/clip7eng.jpg" width="94"
                height="20" border="0" alt="Clip7eng"> is not checked. Colours listed here are previously created into 
				menu Data | Basic data | Colours. Available in case of above option "Colours set up" selected, greyed otherwise.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Standard RAL colours</span>: Select in
                this list all the colours which can be used as standard RAL
                colours or semi-standard colours (mostly used within aluminium system of profiles). Option unavailable until above <img src="img/clip7beng.jpg" width="64" height="15" border="0" alt="Clip7beng"> option is checked.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;"> </span></p>
        <p><span style="font-size: 5pt;"> </span></p>
        <p><span style="font-size: 5pt;"> </span></p>
        <p><span style="font-size: 5pt;"> </span></p>

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
      <td align="left">

        <p>Cette page vous permet de définir les caractéristiques des couleurs utilisables dans ce tablier de volet. La page est divisée en deux sections</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p><span style="color: #ff0000;">Cet onglet est disponible pour les versions 9.1 et supérieures, il n'est pas compatible avec les versions plus anciennes!</span></p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p style="text-align: center;"><img src="img/clip0950fra.jpg"
        width="709" height="725" border="0" alt="clip0950fra"></p>

        <p><span style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td><span style="font-weight: bold; Text-decoration: underline;">Section tablier</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Suivre couleur dormant</span>: Cocher cette case pour ajouter en saisie la possibilité de lister l'option "Couleur dormant" dans la liste des teintes du tablier. WinPro cherchera une correspondance de teinte dans l'onglet suivant <span style="font-style: italic;"><a href="voltabliercorrcouleurtabdor.php">Correspondance couleur tablier-dormant</a></span> qui s'activera. <span style="color: #ff0000;">Option indisponible avec une licence Volets Roulants Autonomes</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Suivre couleur caisson</span>: Cocher cette case pour ajouter en saisie la possibilité de lister l'option "Couleur caisson" dans la liste des teintes du tablier.</td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Autoriser RAL</span>: Cocher cette case pour activer la liste de sélection des RAL standards sur la droite, pour que l'utilisateur sélectionne les teintes appropriées pour ce tablier.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

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
                width="57" height="10" border="0" alt="Clip0198"> activée). Option disponible lorsque la case ci-dessus <img src="img/clip7bfra.jpg" width="80" height="17" border="0" alt="Clip7bfra"> est cochée.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Couleurs autorisées</span>:
                Les couleurs autorisées pour ce tablier seront disponibles dans les listes combo
                permettant de définir la teinte du tablier, pour autant que la saisie de ce repère ne soit pas effectué en
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
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Couleurs RAL
                Standard</span>: Cochez la liste des couleurs RAL considérées
                comme semi-standard pour ce tablier.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td><span style="font-weight: bold; Text-decoration: underline;">Section sous-lame</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Liste couleur autorisée caisson</span>: Sélectionner cette option pour lister les teintes autorisées pour le caisson dans le combo liste des couleurs pour la sous-lame.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Liste couleur autorisée tablier</span>: Sélectionner cette option pour lister les teintes autorisées pour le tablier dans le combo liste des couleurs pour la sous-lame.</td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Liste couleur autorisée coulisse</span>: Sélectionner cette option pour lister les teintes autorisées pour la coulisse dans le combo liste des couleurs pour la sous-lame.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Définitions des couleurs</span>: Sélectionner cette option pour définir manuellement les teintes autorisées pour la sous-lame dans la liste des teintes disponibles à droite.</td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Suivre couleur dormant</span>: Cocher cette case pour ajouter en saisie la possibilité de lister l'option "Couleur dormant" dans la liste des teintes pour la sous-lame. WinPro cherchera une correspondance de teinte dans l'onglet suivant <span style="font-style: italic;"><a href="voltabliercorrcouleurtabdor.php">Correspondance couleur souslame-dormant</a></span> qui s'activera. <span style="color: #ff0000;">Option indisponible avec une licence Volets Roulants Autonomes</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Suivre couleur caisson</span>: Cocher cette case pour ajouter en saisie la possibilité de lister l'option "Couleur caisson" dans la liste des teintes de la sous-lame.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Suivre couleur tablier</span>: Cocher cette case pour ajouter en saisie la possibilité de lister l'option "Couleur tablier" dans la liste des teintes de la sous-lame.</td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Autoriser RAL</span>: Cocher cette case pour activer la liste de sélection des RAL standards sur la droite, pour que l'utilisateur sélectionne les teintes appropriées pour la sous-lame.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

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
                width="57" height="10" border="0" alt="Clip0198"> activée). Option disponible lorsque la case ci-dessus <img src="img/clip7bfra.jpg" width="80" height="17" border="0" alt="Clip7bfra"> est cochée.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Couleurs autorisées</span>:
                Les couleurs autorisées pour cette sous lame seront disponibles dans les listes combo
                permettant de définir la teinte de la lame finale, pour autant que la saisie de ce repère ne soit pas effectué en
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
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Couleurs RAL
                Standard</span>: Cochez la liste des couleurs RAL considérées
                comme semi-standard pour cette sous-lame.</td>
            </tr>
          </tbody>
        </table>
        </div>

		
	    <p style="text-indent: -1px; margin: 0px 0px 0px 49px;"><span
        class="f_Textestd"> </span></p>

        <p style="text-indent: -1px; margin: 0px 0px 0px 1px;"><span
        class="f_Textestd"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
