<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Import from WinPro.ini","Importation de WinPro.ini"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utilimportini.php"; }
else { parent.quicksync('a9.33'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Importation de WinPro.ini</title>
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
        href="utilexportbase.php">Previous</a>  <a
        href="utilexportini.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This menu is suitable to import a configuration file WinPro.ini within WinPro database. This is only
	  version 8 compliant, whatever the database format is (<span style="font-weight: bold;">mySQL</span> or 
	  <span style="font-weight: bold;">FoxPro</span>). The file is imported as it is into settings table.</p>

        <p>See also menu <a href="utilexportini.php">Export to WinPro.INI</a>.</p>

        <p> </p>

        <p>The feature is reached through menu <span
        style="font-weight: bold;">Tools | Import from WinPro.ini</span>.</p>

        <p> </p>

        <p>At the tool startup a browser invits to select the source directory where the import file 
		<span style="font-weight: bold;">WinPro.ini</span> is located.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0788eng.jpg"
        width="327" height="282" border="0" alt="clip0788eng"></p>

        <p style="text-align: center;"> </p>

        <p>Click to run the importation, then a message is displayed.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0789eng.jpg"
        width="396" height="176" border="0" alt="clip0789eng"></p>

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
                      <td><span style="color: #000000;">The user must have sufficient <a
                        href="utilutilisateurdroits.php">access right</a> to use this tool.</span></td>
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
                      <td><span style="color: #000000;">Every sessions of WinPro should be closed before importation.</span></td>
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
                      <td><span style="color: #000000;">Restart WinPro after importation.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        style="font-weight: bold;"> </span></p>

        <p style="text-align: center;"><span
        style="font-weight: bold;"> </span></p>
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
      <td align="left"><p>Ce menu vous permet d'importer un fichier de
        configuration WinPro.INI dans la base de données. La fonction n'est
        compatible qu'avec la version 8 de WinPro, quel que soit le format
        (<span style="font-weight: bold;">mySQL</span> ou <span
        style="font-weight: bold;">FoxPro</span>). Le fichier INI sera importé
        tel quel dans la table settings.</p>

        <p>Voir également le menu <a href="utilexportini.php">Exportation de
        WinPro.INI</a>.</p>

        <p> </p>

        <p>Cet outil est accessible via <span
        style="font-weight: bold;">Utilitaires | Importation de
        WinPro.ini</span>.</p>

        <p> </p>

        <p>Au lancement de l'utilitaire, une fenêtre de navigation vous permet
        de sélectionner le répertoire où se trouve le fichier à importer.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0788.zoom84.gif"
        width="276" height="256" border="0" alt="clip0788"></p>

        <p style="text-align: center;"> </p>

        <p>Cliquez sur pour lancer l'import; une fois réalisé, un message
        apparaît. </p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0789.zoom82.gif"
        width="447" height="112" border="0" alt="clip0789"></p>

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
                      <td><span style="color: #000000;">L'utilisateur doit
                        disposer de <a
                        href="utilutilisateurdroits.php">droits</a> suffisants
                        pour accéder à ce menu.</span></td>
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
                      <td><span style="color: #000000;">Toutes les sessions de
                        WinPro doivent être closes avant de procéder à
                        l'importation.</span></td>
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
                      <td><span style="color: #000000;">Relancez WinPro après
                        importation.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        style="font-weight: bold;"> </span></p>

        <p style="text-align: center;"><span
        style="font-weight: bold;"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
