<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Create WinPro/D technical database","Base de donn&#233;es devis"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utilbasedevis.php"; }
else { parent.quicksync('a9.24'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Base de données devis</title>
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
        href="utilimptechtabtech.php">Previous</a>  <a
        href="utilinfocli.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This menu is suitable to generate a database for WinPro/d in order to suppliy to ressellers a version
	  of the software.</p>

        <p>WinPro/D offers an interface similar to WinPro, without the technical elements that are removed from the program.</p>

        <p>This version is dedicated to reselling of windows.</p>

        <p>Records into this database are encrypted.</p>

        <p> </p>

        <p>This too; is reached through <span style="font-weight: bold;">Tools | Create WinPro/D technical data</span>.</p>

        <p> </p>

        <p>At startup the program invits you to type the administrative password, you may ask it to Quadrature company in case of 
		need.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0762eng.jpg"
        width="200" height="124" border="0" alt="clip0762eng"></p>

        <p> </p>

        <p>Then the behaviour depends on version.</p>

        <p> </p>

        <p>Using version 7.2, WinPro generate a <span
        style="font-weight: bold;">Devis</span> directory into base directory. This folder will contain all technical tables 
		needed by WinPro/D, and fields from those tables will be encrypted for a better confidentiality.</p>

        <p> </p>

        <p>Using version 8, the behaviour is the same except that files are compressed into a single <span
        style="font-weight: bold;">Data.pak</span> file.</p>

        <p> </p>

        <p>Once tables for WinPro/D are created, you should create the required <a href="utilinfocli.php">Customer information 
		for WinPro/D</a>.</p>

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
                      <td>3 distinct versions of WinPro/D may be considered:
                        version 7.2 with <span style="font-weight: bold;">FoxPro</span> format, version 8 with 
						<span style="font-weight: bold;">FoxPro</span> format, and version 8 with <span
                        style="font-weight: bold;">mySQL</span> format, also named <a href="winprod_internet.php">WinPro/D 
						Internet</a>. Procedures of installation and usage are lightly different from one version to another.
                        Refer to the <a href="faq7.php">FAQ</a> chapter for the full procedure.</td>
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
        pour WinPro/D afin de mettre ces versions revendeur du logiciel à
        disposition de vos agences ou de vos commerciaux.</p>

        <p>WinPro/D offre une interface similaire à celle de WinPro, mais
        dépourvue de toute la partie technique, absente du programme. </p>

        <p>C'est une version dédiée à la vente de menuiserie.</p>

        <p>Les enregistrements de cette base de données devis sont cryptés.</p>

        <p> </p>

        <p>Cet outil est accessible via <span
        style="font-weight: bold;">Utilitaires | Base de données
        devis</span>.</p>

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
        style="font-weight: bold;">Devis</span> dans son répertoire de base. Ce
        dossier contiendra les tables techniques nécessaires à WinPro/D, les
        champs de ces tables sont cryptés pour une meilleure
        confidentialité.</p>

        <p> </p>

        <p>En version 8, le comportement est identique, à la différence que les
        fichiers d'exports générés sont compressés dans un fichier <span
        style="font-weight: bold;">Data.pak</span>.</p>

        <p> </p>

        <p>Suite à cette génération des tables pour WinPro/D, il faudra créer
        les <a href="utilinfocli.php">informations client pour le module
        devis</a>.</p>

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
                      <td>On peut distinguer 3 versions distinctes de WinPro/D:
                        la version 7.2 au format <span
                        style="font-weight: bold;">FoxPro</span>, la version 8
                        au format <span
                        style="font-weight: bold;">FoxPro</span>, et la version
                        8 au format <span
                        style="font-weight: bold;">mySQL</span>, aussi appelée
                        <a href="winprod_internet.php">WinPro/D Internet</a>.
                        Les procédures d'utilisation et de mise en place
                        diffèrent légèrement selon la version utilisée.
                        Reportez vous à la <a href="faq7.php">FAQ</a> pour
                        consulter la procédure complète.</td>
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
