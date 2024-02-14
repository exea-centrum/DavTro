<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Visit","Visite"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?cltvisite.php"; }
else { parent.quicksync('a7.8.13'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Visite</title>
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
        href="introduction.php">Top</a>  <a href="cltfiltre.php">Previous</a> 
        <a href="codepostaux.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This table is designed to define a planning of visits for the salesman at customer's company. 
	  Only available for users of module <span style="font-weight: bold;">Customer relationship management CRM</span>. </p>

        <p> </p>

        <p>Please refer to <a href="rn723x.php">release note 7.2.30</a> for more details about this module.</p>

        <p> </p>

        <p>Also refer to <span style="font-style: italic;"><a
        href="represvisites.php">Visit</a> </span>tab from salesmen record.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0674eng.jpg"
        width="363" height="481" border="0" alt="clip0674eng"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Type</span>: Visit type for this customer. Visit list is defined into WinPro.ini file 
			  (or settings table), as follows:</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 43px;"><span
        class="f_Winproini">[TypeVisites]</span></p>

        <p style="margin: 0px 0px 0px 67px;"><span
        class="f_Winproini">Count</span><span class="f_Winproini"
        style="font-weight: normal;">       </span><span class="f_Winproini"
        style="font-weight: normal; color: #000000;">= Number of visit types to list (integer format)</span></p>

        <p style="margin: 0px 0px 0px 67px;"><span
        class="f_Winproini">n</span><span class="f_Winproini"
        style="font-weight: normal;">               </span><span
        class="f_Winproini" style="font-weight: normal; color: #000000;">=
        Label of the visit type n (character format)</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Date</span>: Appointment date. This field may be set by the salesman.</td>
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
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Fixed date</span>: Fixed date for the salesman. This field is to be set by a user with 
			  <span style="color: #008000;">Direction</span> access right.</td>
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
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Comment</span>: Free comment text for the salesman.</td>
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
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Comments direction</span>: Free comment text for the direction user.</td>
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
      <td align="left"><p>Cet onglet permet de définir un planning de visites
        pour ce représentant chez les clients. Il n'est accessible que si vous
        possédez le module <span style="font-weight: bold;">Gestion de
        relations clientèle CRM</span>. </p>

        <p> </p>

        <p>Consultez la <a href="rn723x.php">note de version 7.2.30</a> pour
        plus de détails sur ce module.</p>

        <p> </p>

        <p>Consultez également l'onglet <span style="font-style: italic;"><a
        href="represvisites.php">Visite</a> </span>de la fiche représentant.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0674.zoom84.gif"
        width="300" height="407" border="0" alt="clip0674"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Type</span>: Renseignez ici
                le type de visite pour ce client. Les type de visites se
                définissent directement dans WinPro.ini (ou dans la table
                settings), comme suit:</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 43px;"><span
        class="f_Winproini">[TypeVisites]</span></p>

        <p style="margin: 0px 0px 0px 67px;"><span
        class="f_Winproini">Count</span><span class="f_Winproini"
        style="font-weight: normal;">       </span><span class="f_Winproini"
        style="font-weight: normal; color: #000000;">= Nombre de types de
        visites à lister (format entier)</span></p>

        <p style="margin: 0px 0px 0px 67px;"><span
        class="f_Winproini">n</span><span class="f_Winproini"
        style="font-weight: normal;">               </span><span
        class="f_Winproini" style="font-weight: normal; color: #000000;">=
        Libellé du type de visite n (format caractères)</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Date</span>: Champ pour la
                date de rendez-vous, ou la date à laquelle la visite à eu lieu.
                Ce champs peut être renseigné par le représentant.</td>
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
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Date imposée</span>: Champ
                pour la date de rendez-vous imposée au représentant. Ce champs
                est à renseigner par un utilisateur disposant du droit
                utilisateur <span style="color: #008000;">Direction</span>.</td>
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
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Commentaire</span>: Champ de
                saisie libre pour un commentaire du représentant.</td>
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
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Commentaire de la
                direction</span>: Champ de saisie libre pour un commentaire de
                 la direction.</td>
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
