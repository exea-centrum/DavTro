<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Licence","Licence"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utillicence.php"; }
else { parent.quicksync('a9.7'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Licence</title>
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
        href="utilcoordonneessociete.php">Previous</a>  <a
        href="utilimportdeceuninck.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This dialog sets your company's licence number.</p>

        <p> </p>

        <p>The menu is available at <span style="font-weight: bold;">Tools | Licence</span>.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0747eng.jpg"
        width="467" height="237" border="0" alt="clip0747eng"></p>

        <p> </p>

        <p>You may copy then paste the code into the field, or else load a <span style="font-style: italic;">licence.ini</span> 
		file with the appropriate <span style="font-weight: bold; font-style: italic">Open</span> button.</p>

        <p>This number is then recorded into WinPro.ini file, under key <span class="f_Winproini">Company</span> 
		of section <span class="f_Winproini">[Licence]</span>, once the 
		<img src="img/clip0749.zoom83.gif" width="62" height="20" border="0" alt="clip0749"> button is used.</p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="446"
                style="width: 446px; border: solid 1px #000000;"><p><span
                style="font-weight: bold; text-decoration: underline;">Note:</span></p>

                <p>- It is required to restart WinPro once a new licence has been loaded.</p>

                <p>- <span style="font-weight: bold;">Only version 7 compliant !</span></p>
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
<!-- Placeholder for topic body. -->

<div class="FRA">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>Ce dialogue permet de modifier le numéro de licence
        WinPro.</p>

        <p> </p>

        <p>Cet outil est accessible via <span
        style="font-weight: bold;">Utilitaires | Licence</span>.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0747.zoom85.gif"
        width="407" height="225" border="0" alt="clip0747"></p>

        <p> </p>

        <p>Vous pouvez saisir votre code de licence directement dans le champ,
        le copier puis le coller, ou encore charger un fichier <span
        style="font-style: italic;">licence.ini </span>au moyen du bouton <img
        src="img/clip0748.zoom92.gif" width="70" height="22" border="0"
        alt="clip0748">.</p>

        <p>Ce numéro de licence est stocké ensuite dans WinPro.ini, sous la
        clef <span class="f_Winproini">Company</span> de la section <span
        class="f_Winproini">[Licence]</span>,<span
        class="f_Winproini"></span>une fois le bouton <img
        src="img/clip0749.zoom83.gif" width="62" height="20" border="0"
        alt="clip0749"> utilisé.</p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="446"
                style="width: 446px; border: solid 1px #000000;"><p><span
                style="font-weight: bold; text-decoration: underline;">Remarque:</span></p>

                <p>- Il est préférable de relancer WinPro après avoir changé
                une licence.</p>

                <p>- <span style="font-weight: bold;">Compatible avec la
                version 7 de WinPro uniquement !</span></p>
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
