<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Export to WinPro.ini","Exportation de WinPro.ini&nbsp"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utilexportini.php"; }
else { parent.quicksync('a9.34'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Exportation de WinPro.ini</title>
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
        href="utilimportini.php">Previous</a>  <a
        href="utilmodificationsettings.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This menu allow you to export the settings table into a configuration file Winpro.ini, within a target
	  directory of your choice. This is only version 8 compliant, whatever the database format is (<span style="font-weight: bold;">
	  mySQL</span> or <span style="font-weight: bold;">FoxPro</span>).</p>

        <p>Also refer to menu <a href="utilimportini.php">Import from Winpro.ini</a>.</p>

        <p> </p>

        <p>The feature is reached through menu <span
        style="font-weight: bold;">Tools | Export to WinPro.ini</span>.</p>

        <p> </p>

        <p>At the tool startup a browser invits to select the target directory where the exported file 
		<span style="font-weight: bold;">WinPro.ini</span> will be exported. You may create a dedicated directory using button 
		<img src="img/clip0777.gif" width="134" height="20" border="0" alt="clip0777">, if required.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0790eng.jpg"
        width="320" height="297" border="0" alt="clip0790eng"></p>

        <p style="text-align: center;"> </p>

        <p>Once the target directory is selected, click on <img
        src="img/clip0791.zoom92.gif" width="55" height="18" border="0"
        alt="clip0791"> button to generate the file.</p>

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
                      <td><span style="color: #000000;">WinPro.ini configuration file is under ASCII format, and can be modified 
					  manually through a single text editor of your choice.</span></td>
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
                      <td><span style="color: #ff0000;">Be careful to avoid selecting a target directory where another WinPro.ini
					  file is existing, in particular the base WinPro directory, otherwise the file will be overwritten !</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p style="text-align: center;"> </p>
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
      <td align="left"><p>Ce menu vous permet d'exporter la table settings dans
        un fichier de configuration WinPro.INI, dans un répertoire de votre
        choix. La fonction n'est compatible qu'avec la version 8 de WinPro,
        quel que soit le format (<span style="font-weight: bold;">mySQL</span>
        ou <span style="font-weight: bold;">FoxPro</span>).</p>

        <p>Voir également le menu <a href="utilimportini.php">Importation de
        Winpro.ini</a>.</p>

        <p> </p>

        <p>Cet outil est accessible via <span
        style="font-weight: bold;">Utilitaires | Exportation de
        WinPro.ini</span>.</p>

        <p> </p>

        <p>Au lancement de l'utilitaire, une fenêtre de navigation vous permet
        de sélectionner le répertoire où le fichier WinPro.ini doit être
        exporté. Vous pourrez créer ce répertoire avec le bouton <img
        src="img/clip0777.gif" width="134" height="20" border="0" alt="clip0777">
        si besoin.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0790.zoom85.gif"
        width="283" height="263" border="0" alt="clip0790"></p>

        <p style="text-align: center;"> </p>

        <p>Une fois la destination choisie, cliquez sur <img
        src="img/clip0791.zoom92.gif" width="55" height="18" border="0"
        alt="clip0791"> pour générer le fichier.</p>

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
                      <td><span style="color: #000000;">Ces fichiers de
                        configuration sont au format ASCII, modifiables avec un
                        simple éditeur de texte.</span></td>
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
                      <td><span style="color: #ff0000;">Attention à ne pas
                        sélectionner un dossier de destination contenant déjà
                        un fichier WinPro.ini, en particulier le répertoire de
                        base de WinPro, sans quoi ce fichier sera écrasé
                        !</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p style="text-align: center;"> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
