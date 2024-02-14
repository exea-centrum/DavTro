<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Import commercial data","Import commercial"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utilimportcommercial.php"; }
else { parent.quicksync('a9.22'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Import commercial</title>
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
        href="utilbasecommerciale.php">Previous</a>  <a
        href="utilexporttechnique.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This feature is designed to impart a <a href="utilbasecommerciale.php">sales technical database</a>
	  previously generated. This version will be generated and used the same way as for generation of a 
	  <a href="utilbasedevis.php">WinPro/D technical database</a>. This version should nevertheless be used with a standard 
	  WinPro  version, by a user with limited access right <a href="utilutilisateurdroits.php">Commercial user</a>. 
	  Fields from this database are encrypted.</p>

        <p> </p>

        <p>This tool is accessed through menu <span
        style="font-weight: bold;">Tools | Import commercial data</span>.</p>

        <p> </p>

        <p>Refer to <a href="rn650x.php">release note version 6.5.07</a> for more details about this feature, as well as to
		previous chapter about creation of a <a href="utilbasecommerciale.php">Sales technical database</a>.</p>

        <p> </p>

        <p>At the tool startup a browser invits to select the source directory where the import files 
		<span style="font-weight: bold;">Data.pak</span> is located.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0776eng.jpg"
        width="328" height="316" border="0" alt="clip0776eng"></p>

        <p> </p>

        <p>Once the source directory defined, WinPro will uncompress and importe the <span style="font-weight: bold;">Data.pak</span>
		file into the database as soon as button <img src="img/clip0778.gif"
        width="60" height="21" border="0" alt="clip0778"> is validated. Once imported (and even if no importation is done), a
		message is displayed to warn that WinPro will be killed for the commercial user to start it again.</p>

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
                      <td>This menu is only available using version 8, the procedure for version 7.2 is lightly different. Refer 
					  to installation instructions detailled into <a href="utilbasecommerciale.php">previous chapter</a> form 
					  more details.</td>
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
      <td align="left"><p>Ce menu vous permet d'importer une <a
        href="utilbasecommerciale.php">base de données commerciale</a> générée
        au préalable. Cette version sera créée et utilisée sur un principe
        similaire à celui utilisé pour générer la <a
        href="utilbasedevis.php">Base de données Devis pour WinPro/D</a>. Cette
        base de données pourra toutefois être utilisée avec une version
        standard de WinPro, par un utilisateur disposant du droit limité d'<a
        href="utilutilisateurdroits.php">Encodage commercial</a>. Les champs de
        cette base sont cryptés.</p>

        <p> </p>

        <p>Cet outil est accessible via <span
        style="font-weight: bold;">Utilitaires | Import commercial</span>.</p>

        <p> </p>

        <p>Reportez vous à la note de version <a href="rn650x.php">note de
        version 6.5.07</a> pour plus de détails sur la fonction, ainsi qu'au
        chapitre précédent sur la création de la <a
        href="utilbasecommerciale.php">Base de données commerciale</a>.</p>

        <p> </p>

        <p>Au lancement de l'outil, un dialogue de navigation vous invite à
        choisir le dossier source où se trouve le fichier d'import <span
        style="font-weight: bold;">Data.pak</span>.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0776.zoom82.gif"
        width="429" height="267" border="0" alt="clip0776"></p>

        <p> </p>

        <p>Une fois le bon dossier sélectionné, WinPro décompressera et
        importera le fichier <span style="font-weight: bold;">Data.pak</span>
        dans la base de données dés lors que le bouton <img src="img/clip0778.gif"
        width="60" height="21" border="0" alt="clip0778"> sera validé. Une fois
        importé (et même si aucune importation n'a été faites), un message
        d'avertissement vous préviendra que le logiciel va se fermer pour être
        relancé par l'utilisateur commercial.</p>

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
                      <td>Ce menu n'est disponible qu'en version 8, la
                        procédure pour la version 7.2 est légèrement
                        différente. Consultez la procédure de mise en place
                        décrite au <a href="utilbasecommerciale.php">chapitre
                        précédent</a> pour plus de détail.</td>
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

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
