<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Export technical database","Export base technique"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utilexporttechnique.php"; }
else { parent.quicksync('a9.23'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Export base technique</title>
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
        href="utilimportcommercial.php">Previous</a>  <a
        href="utilimptechtabtech.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This menu is designed to extract a database containg only the technical settings. This database will be
	  purged of all running elements (orders & quotation, production jobs, stock) to leave only technical settings.</p>

        <p> </p>

        <p>It is accessed through menu <span
        style="font-weight: bold;">Tools | Export technical database</span>.</p>

        <p> </p>

        <p>Refer to <a href="rn650x.php">release note version 7.2.38</a> for more details about this feature.</p>

        <p> </p>

        <p>At startup the program invits you to type the administrative password, you may ask it to Quadrature company in case of 
		need. The password is asked twice here.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0762eng.jpg"
        width="200" height="124" border="0" alt="clip0762eng"></p>

        <p> </p>

        <p>Then, WinPro will export <a href="utilimptechtabtech.php">technical tables</a> within selected directory or within 
		a directory the user would have created first using button <img src="img/clip0777.gif"
        width="134" height="20" border="0" alt="clip0777"> from the browse dialog.</p>

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
                style="font-weight: bold; text-decoration: underline;">Note</span><span
                style="text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>For version 7.2 anyway, this dialog is not displayed, WinPro automatically export tables into a 
					  <span style="font-weight: bold;">Technique</span> directory located into the base directory.</td>
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

        <p><span
        style="font-style: italic; text-decoration: underline;">Usage of a technical database:</span></p>

        <p><span
        style="font-style: italic; text-decoration: underline;"> </span></p>

        <p>1 - For any version, run the tool as described above to generate technical data.</p>

        <p>2 - The procedure is then different according version</p>

        <p style="margin: 0px 0px 0px 24px;">a - Version 7.2:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Copy the content of the <span style="font-weight: bold;">Technique</span> directory into 
			  <span style="font-weight: bold;">Data</span> directory from the target version, overwriting all files to update 
			  with technical tables. <span style="font-weight: bold;">The other technical tables will not be altered</span> !</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Restart the program: the program is ready to use !</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;">b - Version 8:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Run the tool from menu <span
                style="font-weight: bold;">Tools | <a
                href="utilimportbase.php">Import</a> database</span>, and import the technical database generated at step 1 into
				the target database (<span style="font-weight: bold;">FoxPro</span> or <span style="font-weight: bold;">mySQL</span>
				). WinPro will handle the technical tables one by one, purge the corresponding target table before importing 
				the updated table into the base. This only affects technical tables contained into the export directory, <span
                style="font-weight: bold;">the others tables are not altered</span> !</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Restart the program: the version is ready to use !</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 48px;"> </p>

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
                style="font-weight: bold; text-decoration: underline;">Note</span><span
                style="text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>The usage of this tool is adapted in case of technical update without need to alter existing orders. 
					  The user may prepare the technical data as he needs, then toggle the technical update into current 
					  version using this feature.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>The feature is also interesting in case you need to reset the database with leavinbg only the technical
					  data, when used along with the <a href="utilbasevide.php">base de données vide</a> feature. </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>This feature is obsolete using a late version 8 and upper versions, replaced with the feature from 
					  menu <span style="font-weight: bold;">Tools | Selective database export</span>.</td>
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
      <td align="left"><p>Ce menu vous permet de générer une base de données
        WinPro avec seulement les paramètres techniques. Cette base de données
        sera purgée de tous les encours (commande &amp; devis, lot, stock) pour
        ne laisser que la partie technique du paramétrage.</p>

        <p> </p>

        <p>Cet outil est accessible via <span
        style="font-weight: bold;">Utilitaires | Export base
        technique</span>.</p>

        <p> </p>

        <p>Reportez vous à la note de version <a href="rn650x.php">note de
        version 7.2.38</a> pour plus de détails sur la fonction.</p>

        <p> </p>

        <p>Au lancement, un dialogue vous invite à saisir le mot de passe
        d'administration de WinPro. Demandez ce mot de passe à votre
        administrateur WinPro, ou bien à la société Quadrature. Ce mot de passe
        sera demandé 2 fois de suite dans cet outil.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0762.zoom84.gif"
        width="179" height="124" border="0" alt="clip0762"></p>

        <p> </p>

        <p>Ensuite, WinPro exportera les <a
        href="utilimptechtabtech.php">tables techniques</a> dans le dossier que
        vous aurez sélectionné ou créé avec le bouton <img src="img/clip0777.gif"
        width="134" height="20" border="0" alt="clip0777"> de la fenêtre de
        navigation.</p>

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
                style="font-weight: bold; text-decoration: underline;">Remarque</span><span
                style="text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Pour la version 7.2 toutefois, ce dialogue n'apparaît
                        pas, WinPro exporte automatiquement les tables dans un
                        dossier <span style="font-weight: bold;">Technique
                        </span>localisé dans le répertoire de base.</td>
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

        <p><span
        style="font-style: italic; text-decoration: underline;">Utilisation
        d'une base technique:</span></p>

        <p><span
        style="font-style: italic; text-decoration: underline;"> </span></p>

        <p>1 - Quelle que soit la version utilisée, lancez l'outil comme décrit
        plus haut pour générer les tables techniques.</p>

        <p>2 - La procédure diffère ensuite selon la version</p>

        <p style="margin: 0px 0px 0px 24px;">a - Version 7.2:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Copier le contenu du dossier <span
                style="font-weight: bold;">Technique</span> dans le dossier
                <span style="font-weight: bold;">Data</span> de la version
                cible en écrasant tous les fichiers pour mettre à jour les
                tables technique. <span style="font-weight: bold;">Les autres
                tables non techniques ne sont pas altérées</span> !</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Relancez WinPro: la version est prête à l'emploi !</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;">b - Version 8:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Lancez l'outil du menu <span
                style="font-weight: bold;">Utilitaires | <a
                href="utilimportbase.php">Importation</a> de la base de
                données</span>, et importez la base de données technique
                générée à l'étape 1 dans la base de données cible (<span
                style="font-weight: bold;">FoxPro </span>ou <span
                style="font-weight: bold;">mySQL</span>). Cet outil va prendre
                les tables techniques exportées une par une, purger la table
                cible correspondante avant d'importer la table à jour dans la
                base. Cette manipulation n'affecte que les tables techniques
                contenues dans le dossier d'export, <span
                style="font-weight: bold;">les autres tables ne sont pas
                altérées</span> !</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Relancez WinPro: la version est prête à l'emploi !</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 48px;"> </p>

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
                style="font-weight: bold; text-decoration: underline;">Remarque</span><span
                style="text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>L'utilisation de cet outil s'avère judicieuse pour
                        mettre à jour la partie technique du paramétrage sans
                        toucher aux commandes en cours. Le paramétreur pourra à
                        loisir préparer sa version, puis basculer le
                        paramétrage dans la version en cours de production en
                        utilisant cette fonction.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>La fonction est également intéressante pour
                        réinitilaliser la base de données et ne laisser que le
                        paramétrage technique (purge des encours),
                        lorsqu'utilisé conjointement avec une <a
                        href="utilbasevide.php">base de données vide</a>. </td>
                    </tr>
                  </tbody>
                </table>

                </div>
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>La fonction est devenu obsolète dans les dernières version 8 ou supérieure, du fait de l'apparition de la 
					  fonction <span style="font-weight: bold;">Utilitaires | Exportation sélective de la base de données</span>.</td>
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
