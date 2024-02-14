<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Import database","Importation de la base de donn&#233;es"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utilimportbase.php"; }
else { parent.quicksync('a9.31'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Importation de la base de données</title>
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
        href="utilimportvitragexls.php">Previous</a>  <a
        href="utilexportbase.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This menu is suitable to import a full database within WinPro. This is only version 8 compliant, whatever
	  the database format is (<span style="font-weight: bold;">mySQL</span> or <span style="font-weight: bold;">FoxPro</span>).</p>

        <p>Also refer to menu <a href="utilexportbase.php">Export database</a>.</p>

        <p> </p>

        <p>This is reached through menu <span style="font-weight: bold;">Tools | Import database</span>.</p>

        <p> </p>

        <p>At startup the program invits you to type the administrative password, you may ask it to Quadrature company in case of 
		need.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0762eng.jpg"
        width="200" height="124" border="0" alt="clip0762eng"></p>

        <p style="text-align: center;"> </p>

        <p>The next dialog siplays a warning to be read carefully.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0784eng.jpg"
        width="416" height="226" border="0" alt="clip0784eng"></p>

        <p style="text-align: center;"> </p>

        <p>Indeed, before importation, WinPro will first purge all target tables from the database. <span
        style="font-weight: bold; color: #ff0000;">This is why this importation cannot be rolled back ! </span></p>

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
                style="font-weight: bold; color: #ff0000; text-decoration: underline;">Attention</span><span
                style="color: #ff0000; text-decoration: underline;">:</span></p>

                <p style="margin: 0px 0px 0px 12px;"><span
                style="color: #ff0000;">It is strongly recommended to create a complete database backup (using menu </span><span
                style="font-weight: bold; color: #ff0000;"><a
                href="utilexportbase.php">Export database</a></span><span
                style="color: #ff0000;">) before any database handling !</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Then, click the <img src="img/clip0785.gif" width="79" height="23"
        border="0" alt="clip0785"> button, WinPro will import tables into the database from the source directory selected.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0776eng.jpg"
        width="328" height="316" border="0" alt="clip0776eng"></p>

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
                      <td><span style="color: #000000;">It is possible to process to partial importation, and even import a single
					  table. To do this, leave ONLY the files to be imported into the source directory, and proceed as usually to
					  import, the others tables won't be altered.</span></td>
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
                      <td><span style="color: #000000;">WinPro will <a
                        href="utilsuppressioncaches.php">delete all buffers</a> of the machine after importation. It is anyway
						recommended to restart the program before use.</span></td>
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
      <td align="left"><p>Ce menu vous permet d'importer une base de données
        complète dans WinPro. La fonction n'est compatible qu'avec la version 8
        de WinPro, quel que soit le format (<span
        style="font-weight: bold;">mySQL</span> ou <span
        style="font-weight: bold;">FoxPro</span>).</p>

        <p>Voir également le menu <a href="utilexportbase.php">Exportation de
        la base de données</a>.</p>

        <p> </p>

        <p>Cet outil est accessible via <span
        style="font-weight: bold;">Utilitaires | Importation de la base de
        données</span>.</p>

        <p> </p>

        <p>Au lancement, un dialogue vous invite à saisir le mot de passe
        d'administration de WinPro. Demandez ce mot de passe à votre
        administrateur WinPro, ou bien à la société Quadrature. </p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0762.zoom84.gif"
        width="179" height="124" border="0" alt="clip0762"></p>

        <p style="text-align: center;"> </p>

        <p>Le dialogue suivant affiche un message d'avertissement à lire
        attentivement. </p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0784.zoom90.gif"
        width="460" height="152" border="0" alt="clip0784"></p>

        <p style="text-align: center;"> </p>

        <p>En effet, avant d'importer les tables de la base de données, WinPro
        purgera l'intégralité des enregistrements de la table cible avant de
        procéder à l'import. <span
        style="font-weight: bold; color: #ff0000;">C'est pourquoi cette action
        est irréversible ! </span></p>

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
                style="font-weight: bold; color: #ff0000; text-decoration: underline;">Attention</span><span
                style="color: #ff0000; text-decoration: underline;">:</span></p>

                <p style="margin: 0px 0px 0px 12px;"><span
                style="color: #ff0000;">Il est fortement conseillé de faire une
                sauvegarde intégrale (via le menu </span><span
                style="font-weight: bold; color: #ff0000;"><a
                href="utilexportbase.php">Exportation</a></span><span
                style="color: #ff0000;">) avant toute manipulation d'une base
                de données WinPro !</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Ensuite, Cliquez sur <img src="img/clip0785.gif" width="79" height="23"
        border="0" alt="clip0785">. WinPro importera les tables de la base de
        données depuis le dossier source que vous aurez sélectionné. </p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0776.zoom82.gif"
        width="429" height="267" border="0" alt="clip0776"></p>

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
                        d'import/export sont au format ASCII, modifiables avec
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
                      <td><span style="color: #000000;">Il est possible
                        d'importer une partie seulement des tables via cet
                        outil, ou même une table unique. Pour ce faire, ne
                        laissez dans le dossier d'import QUE les tables que
                        vous souhaitez importer, les autres tables de la base
                        de données ne seront pas altérées.</span></td>
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
                      <td><span style="color: #000000;">WinPro <a
                        href="utilsuppressioncaches.php">rafraîchira les
                        caches</a> de la machine après l'importation. Il est
                        toutefois vivement conseillé de relancer le logiciel
                        avant utilisation.</span></td>
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
