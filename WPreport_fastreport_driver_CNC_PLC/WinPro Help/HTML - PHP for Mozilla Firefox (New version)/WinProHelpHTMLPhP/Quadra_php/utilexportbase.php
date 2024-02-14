<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Export database","Exportation de la base de donn&#233;es"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utilexportbase.php"; }
else { parent.quicksync('a9.32'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Exportation de la base de données</title>
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
        href="utilimportbase.php">Previous</a>  <a
        href="utilimportini.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This menu is suitable to export a full WinPro database into a target directory of your choice. This 
	  is only version 8 compliant, whatever the database format is (<span style="font-weight: bold;">mySQL</span> or 
	  <span style="font-weight: bold;">FoxPro</span>).</p>

        <p>See also menu <a href="utilimportbase.php">Import database</a>.</p>

        <p> </p>

        <p>It is reached through menu <span style="font-weight: bold;">Tools | Export database</span>.</p>

        <p> </p>

        <p>At startup the program invits you to type the administrative password, you may ask it to Quadrature company in case of 
		need.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0762eng.jpg"
        width="200" height="124" border="0" alt="clip0762eng"></p>

        <p style="text-align: center;"> </p>

        <p>Then WinPro will export database into the target directory selected, or you may create a dedicated directory using 
		button<img src="img/clip0777.gif" width="134" height="20" border="0" alt="clip0777"> of the browser dialog.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0786eng.jpg"
        width="316" height="479" border="0" alt="clip0786eng"></p>

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
                      <td><span style="color: #000000;">Import/export files are under ASCII format, and can be modified 
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
      <td align="left"><p>Ce menu vous permet d'exporter la base de données
        WinPro complète dans un répertoire de votre choix. La fonction n'est
        compatible qu'avec la version 8 de WinPro, quel que soit le format
        (<span style="font-weight: bold;">mySQL</span> ou <span
        style="font-weight: bold;">FoxPro</span>).</p>

        <p>Voir également le menu <a href="utilimportbase.php">Importation de
        la base de données</a>.</p>

        <p> </p>

        <p>Cet outil est accessible via <span
        style="font-weight: bold;">Utilitaires | Exportation de la base de
        données</span>.</p>

        <p> </p>

        <p>Au lancement, un dialogue vous invite à saisir le mot de passe
        d'administration de WinPro. Demandez ce mot de passe à votre
        administrateur WinPro, ou bien à la société Quadrature. </p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0762.zoom84.gif"
        width="179" height="124" border="0" alt="clip0762"></p>

        <p style="text-align: center;"> </p>

        <p>Ensuite, cliquez sur WinPro exportera les tables dans le dossier que
        vous aurez sélectionné ou créé avec le bouton <img src="img/clip0777.gif"
        width="134" height="20" border="0" alt="clip0777"> de la fenêtre de
        navigation.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0786.zoom80.gif"
        width="430" height="358" border="0" alt="clip0786"></p>

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
                      <td><span style="color: #000000;">Les fichiers
                        d'export/import sont au format ASCII, modifiables avec
                        un simple éditeur de texte.</span></td>
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
