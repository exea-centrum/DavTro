<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Empty database","Base de donn&#233;es vide"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utilbasevide.php"; }
else { parent.quicksync('a9.20'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Base de données vide</title>
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
        href="utilmodifieretatchassis.php">Previous</a>  <a
        href="utilbasecommerciale.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This menu generates a full and complete database suitable for WinPro, but containing no record.</p>

        <p> </p>

        <p>This is accessed through menu <span
        style="font-weight: bold;">Tools | Empty database</span>.</p>

        <p> </p>

        <p>At startup the program invits you to type the administrative password, you may ask it to Quadrature company in case of 
		need.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0762eng.jpg"
        width="200" height="124" border="0" alt="clip0762eng"></p>

        <p> </p>

        <p>Then, the rest of the process depends on the version.</p>

        <p> </p>

        <p>With version 7.2, WinPro generates a directory labelled <span style="font-weight: bold;">Empty</span> into the 
		base directory. This directory will contain the full list of tables, empty of any record.</p>

        <p> </p>

        <p>With version 8, an additional dialog invits to browse the target directory where empty database will be stored.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0776eng.jpg"
        width="328" height="316" border="0" alt="clip0776eng"></p>

        <p style="text-align: center;"> </p>

        <p>You may also dump the tables into a dedicated directory using button <img src="img/clip0777.gif" width="134"
        height="20" border="0" alt="clip0777">.</p>

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
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>This feature is only suitable for <span style="font-weight: bold;">FoxPro</span> format (version 7.2
                        or version 8). The tool is not required with <span style="font-weight: bold;">mySQL</span> format database,
						as WinPro defaultly creates an empty database at its first startup. Also note that version 8 with  <span
                        style="font-weight: bold;">FoxPro</span> format also creates an empty database at its first start up, which 
						means that creation of an <a href="utilbasevide.php">empty database</a> is not needed with version 8.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

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
      <td align="left"><p>Ce menu vous permet de générer une base de données
        WinPro complète entièrement vidée de tout enregistrement (base
        vierge).</p>

        <p> </p>

        <p>Cet outil est accessible via <span
        style="font-weight: bold;">Utilitaires | Base de données
        vide</span>.</p>

        <p> </p>

        <p>Au lancement, un dialogue vous invite à saisir le mot de passe
        d'administration de WinPro. Demandez ce mot de passe à votre
        administrateur WinPro, ou bien à la société Quadrature.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0762.zoom84.gif"
        width="179" height="124" border="0" alt="clip0762"></p>

        <p> </p>

        <p>Ensuite, le comportement de WinPro dépend de la version.</p>

        <p> </p>

        <p>En version 7.2, WinPro génère un dossier <span
        style="font-weight: bold;">Empty</span> dans son répertoire de base. Ce
        dossier contiendra l'intégralité des tables du logiciel, vide de tout
        enregistrement.</p>

        <p> </p>

        <p>En version 8, un dialogue supplémentaire de navigation vous invite à
        choisir un dossier de destination où seront stockées les tables
        vierges.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0776.zoom82.gif"
        width="429" height="267" border="0" alt="clip0776"></p>

        <p style="text-align: center;"> </p>

        <p>Vous pourrez également générer les tables vides dans un dossier créé
        à cet effet via le bouton <img src="img/clip0777.gif" width="134"
        height="20" border="0" alt="clip0777">.</p>

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
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Cette fonctionnalité n'est disponible qu'avec le
                        format de base de données <span
                        style="font-weight: bold;">FoxPro </span>(version 7.2
                        ou version 8). Il est inutile avec une base de données
                        au format <span
                        style="font-weight: bold;">mySQL</span>, WinPro créant
                        par défaut une base vierge lors de son premier
                        lancement sous ce format. A noter également que la
                        version 8 au format <span
                        style="font-weight: bold;">FoxPro </span>créé également
                        une base de données vierge au premier lancement, ce qui
                        rend facultative la création d'une <a
                        href="utilbasevide.php">base de données vide</a> avec
                        cette version.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
