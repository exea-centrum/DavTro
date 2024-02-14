<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Coloured glass frame","Suppl&#233;ment intercalaire couleur"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utilsupplementintercalaire.php"; }
else { parent.quicksync('a9.4'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Supplément intercalaire couleur</title>
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
        href="utilsystemeprincipal.php">Previous</a>  <a
        href="utiltauxtva.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>Set here an additional fixed percentage to apply to the glazings price in case of coloured spacer. 
	  This coloured spacer may be set within the Price tab of the order 
	  <img src="img/clip0742eng.jpg" width="260" height="27" border="0" alt="clip0742eng">, or thorough glass change dialogs 
	  with button <img src="img/clip0743.gif" width="24" height="23" border="0" alt="clip0743"> (from 
	  <span style="font-style: italic;">Window</span> tab, from <span style="font-style: italic;">Sash</span> tab or through the 
	  <span style="font-style: italic;">Change glass</span> context menu).</p>

        <p> </p>

        <p>This dialog is reached through menu <span style="font-weight: bold;">Tools | Coloured glass frame</span>.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0744eng.jpg"
        width="410" height="146" border="0" alt="clip0744eng"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Supplement in % for coloured glass frame</span>: Set here the percentage 
			  of additional fixed price to apply to glazings with coloured spacers, between 0 and 50%.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -19px; margin: 0px 0px 0px 19px;"> </p>

        <p style="text-indent: -19px; margin: 0px 0px 0px 19px;"> </p>
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
      <td align="left"><p>Renseignez dans cette fenêtre un pourcentage de
        supplément forfaitaire à appliquer au prix du vitrage en cas
        d'intercalaire de couleur. Cet intercalaire couleur peut être renseigné
        depuis l'onglet Prix de la commande <img src="img/clip0742.zoom89.gif"
        width="203" height="29" border="0" alt="clip0742">, ou bien dans les
        dialogues de modification des vitrage via le bouton <img
        src="img/clip0743.gif" width="24" height="23" border="0" alt="clip0743">
        (depuis l'onglet <span style="font-style: italic;">Châssis</span>,
        l'onglet <span style="font-style: italic;">Ouvrant </span>ou le menu
        contextuel <span style="font-style: italic;">Changer de
        vitrage</span>).</p>

        <p> </p>

        <p>Cet outil est accessible via <span
        style="font-weight: bold;">Utilitaires | </span><span
        class="f_Heading1">Supplément intercalaire couleur</span>.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0744.zoom90.gif"
        width="369" height="145" border="0" alt="clip0744"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">% supplément pour
                intercalaire de couleur</span>: Saisissez ici le pourcentage de
                supplément à appliquer aux vitrages avec intercalaire de
                couleur, entre 0 et 50%.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -19px; margin: 0px 0px 0px 19px;"> </p>

        <p style="text-indent: -19px; margin: 0px 0px 0px 19px;"> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
