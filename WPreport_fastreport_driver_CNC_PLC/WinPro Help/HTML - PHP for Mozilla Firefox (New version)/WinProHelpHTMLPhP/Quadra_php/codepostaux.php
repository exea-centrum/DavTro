<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Postal Codes","Code Postaux"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?codepostaux.php"; }
else { parent.quicksync('a7.9'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Code Postaux</title>
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
        href="introduction.php">Top</a>  <a href="cltvisite.php">Previous</a> 
        <a href="coefficientsprix.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This table is designed to create your own postal codes.</p>

        <p> </p>

        <p>The dialog is reached through menu <span style="font-weight: bold;">Data | Miscellaneous | Postal codes</span>.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0609eng.jpg"
        width="542" height="158" border="0" alt="clip0609eng"></p>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Postal code</span>: Code of the postal code to be created.</td>
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
              <td><span style="font-weight: bold;">City</span>: Description
                of the city for this postal code.</td>
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
              <td><span style="font-weight: bold;">New</span>: This button is suitable to create a new postal code into the list.</td>
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
              <td><span style="font-weight: bold;">Edit</span>: Use this button to modify an existing postal code.</td>
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
              <td><span style="font-weight: bold;">Record</span>: This button is suitable for saving the created or modified postal code.</td>
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
              <td><span style="font-weight: bold;">Cancel</span>: Cancel the previous modification and leave the dialog without saving.</td>
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
              <td><span style="font-weight: bold;">Delete</span>: Delete an existing postal code.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"><span
        style="font-style: italic; text-decoration: underline;">Creation</span> <span
        style="text-decoration: underline;">walkthrough</span></p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;">1 - Input the new postal code + 
		<span style="font-style: italic;">New</span></p>

        <p
        style="text-align: center; text-indent: -24px; margin: 0px 0px 0px 28px;"><img
        src="img/clip0610eng.jpg" width="543" height="161" border="0"
        alt="clip0610eng"></p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;">2 - To access city description field, first input the 
		<span style="font-style: italic;">Postal code</span> again, then set the concerned 
		<span style="font-style: italic;">City</span> description. 
		
        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;">3 - Finally, use the <span style="font-style: italic;">Record</span> 
		button. You must input the postal code again into this dialog before setting the city description.</p>

        <p
        style="text-align: center; text-indent: -24px; margin: 0px 0px 0px 28px;"><img
        src="img/clip0611eng.jpg" width="544" height="160" border="0"
        alt="clip0611eng"></p>
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
      <td align="left"><p>Cette table vous permet de définir vos propres codes
        postaux. </p>

        <p> </p>

        <p>Ce dialogue est accessible depuis le menu <span
        style="font-weight: bold;">Données | Autres données | Codes
        postaux</span>.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0609.zoom84.gif"
        width="454" height="139" border="0" alt="clip0609"></p>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Code postal</span>: Code du
                code postal à créer. </td>
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
              <td><span style="font-weight: bold;">Localité</span>: Description
                de la localité pour ce code postal.</td>
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
              <td><span style="font-weight: bold;">Créer</span>: Ce bouton permet de créer un nouveau code postal dans
                la liste. </td>
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
              <td><span style="font-weight: bold;">Modifier</span>: Utilisez ce bouton pour modifier un code postal
                existant. </td>
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
              <td><span style="font-weight: bold;">Enregistrer</span>: Ce bouton permet d'enregistrer vos créations ou
                modifications de codes postaux. </td>
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
              <td><span style="font-weight: bold;">Annuler</span>: Annule les manipulations précédentes et quitte le
                dialogue sans enregistrement. </td>
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
              <td><span style="font-weight: bold;">Supprimer</span>: Permet de supprimer un code postal existant. </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"><span
        style="text-decoration: underline;">Didacticiel </span><span
        style="font-style: italic; text-decoration: underline;">Création</span></p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;">1 - Saisie du
        nouveau code postal + <span style="font-style: italic;">Créer</span></p>

        <p
        style="text-align: center; text-indent: -24px; margin: 0px 0px 0px 28px;"><img
        src="img/clip0610.zoom77.gif" width="418" height="127" border="0"
        alt="clip0610"></p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;">2 - Pour la
        localité, saisir le <span style="font-style: italic;">Code postal
        </span>concerné à nouveau, puis renseigner le champs <span style="font-style: italic;">Localité</span>. 
		
        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>

		<p style="text-indent: -24px; margin: 0px 0px 0px 28px;">3 - Enfin, cliquez
        sur <span style="font-style: italic;">Enregistrer</span>. Il est
        impératif de saisir le code postal à nouveau dans ce dialogue avant de
        renseigner la localité.</p>
		
        <p
        style="text-align: center; text-indent: -24px; margin: 0px 0px 0px 28px;"><img
        src="img/clip0611.zoom79.gif" width="425" height="130" border="0"
        alt="clip0611"></p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>

		</td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
