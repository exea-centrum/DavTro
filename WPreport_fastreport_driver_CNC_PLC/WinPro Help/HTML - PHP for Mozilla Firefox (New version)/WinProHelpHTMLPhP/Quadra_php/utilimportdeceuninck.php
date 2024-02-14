<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Import Deuceuninck's articles","Importation des articles Deceuninck"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utilimportdeceuninck.php"; }
else { parent.quicksync('a9.8'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Importation des articles Deceuninck</title>
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
        href="utillicence.php">Previous</a>  <a
        href="utilutilisateurs.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This menu allows creating automatically the article records for supplier 
	  <span style="color: #379bff;">Deceuninck</span>.</p>

        <p> </p>

        <p>This tool is available at menu <span style="font-weight: bold;">Tools | Import Deceuninck's articles</span>.</p>

        <p> </p>

        <p>When running the feature, a first message ask for the user to close any session on this data set.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0750eng.jpg" width="307"
        height="177" border="0" alt="clip0750eng"></p>

        <p> </p>

        <p>Then a browser is displayed for the user to select a hard drive location where to find the needed formatted XML 
		file from Deceuninck.</p>

        <p> </p>

        <p>This XML file is only available when you obtained the module and if you agreed with the supplier to obtain the file.</p>

        <p> </p>

        <p>Quadrature cannot obtain the file for you and does not supply any sample files.</p>

        <p> </p>

        <p>This menu point is only visible when key <span class="f_Winproini">ImportDeceuninck</span> from section 
		<span class="f_Winproini">[Deceuninck]</span> is set to 1.</p>
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
      <td align="left"><p>Ce menu vous permet de créer automatiquement les
        fiches articles pour le fournisseur <span
        style="color: #379bff;">Deceuninck</span>.</p>

        <p> </p>

        <p>Cet outil est accessible via <span
        style="font-weight: bold;">Utilitaires | </span><span
        class="f_Heading1">Importation des articles Deceuninck</span>.</p>

        <p> </p>

        <p>A l'utilisation de ce menu, un premier message demande à
        l'utilisateur de fermer toutes les sessions de WinPro sur cette base de
        données.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0750.gif" width="417"
        height="136" border="0" alt="clip0750"></p>

        <p> </p>

        <p>Une seconde fenêtre de navigation vous invite à sélectionner un
        emplacement sur le disque dur contenant les informations d'importation
        des articles, au format XML.</p>

        <p> </p>

        <p>Ce fichier est mis à votre disposition si vous disposez de ce
        module, ainsi que d'un accord avec votre fournisseur pour vous le
        procurez.</p>

        <p> </p>

        <p>Quadrature ne dispose pas de ces fichiers et ne peut en fournir
        d'exemples.</p>

        <p> </p>

        <p>Ce point de menu apparaît si la clef <span
        class="f_Winproini">ImportDeceuninck</span> de la section <span
        class="f_Winproini">[Deceuninck]</span> vaut 1.</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
