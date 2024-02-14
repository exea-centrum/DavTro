<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Change a record's key","Modifier la clef d'un enregistrement"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utilmodifierclef.php"; }
else { parent.quicksync('a9.16'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Modifier la clef d'un enregistrement</title>
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
        href="utilimportgrillesprix.php">Previous</a>  <a
        href="utildupliquercouleur.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This tool is designed to replace the code of a component record (among elemnts listed into 
	  <span style="font-weight: bold;">Table</span> list detailled below) with another code into the whole database (orders 
	  and quotations as well as data set up).</p>

        <p>The replaced component will then be available for deletion without locking error message, as no more table would 
		refer to it into the database after the process is run.</p>

        <p> </p>

        <p>This tool is reach through menu <span style="font-weight: bold;">Tools | Change a record's key</span>.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0767eng.jpg" width="554"
        height="319" border="0" alt="clip0767eng"></p>

        <p style="text-indent: -17px; margin: 0px 0px 0px 17px;"><span
        style="font-weight: bold;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #ff0000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Warning</span>: <span
                style="color: #000000;"></span><span style="color: #ff0000;">Please read this warning carefully!</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #ff0000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Table</span>: Select here the component type that you want to replace.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #ff0000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Password</span>: Type here the specific password for this module.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #ff0000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Former code</span>: Type here the old code to be replaced.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #ff0000;">&bull;</span></td>
              <td><span style="font-weight: bold;">New code</span>: Type here the new code that will replace the old code defined above.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -17px; margin: 0px 0px 0px 17px;"> </p>

        <p style="text-indent: -17px; margin: 0px 0px 0px 17px;"> </p>
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
      <td align="left"><p>Cet utilitaire à pour objet de remplacer le code de
        l'enregistrement d'un élément (parmi la liste proposée dans le combo
        <span style="font-weight: bold;">Table</span> détaillé plus bas) par un
        autre dans toute la base de données (commandes et devis aussi bien que
        paramétrage).</p>

        <p>L'article remplacé pourra ensuite être supprimé sans provoquer
        d'erreur de verrouillage, car aucune table ne mentionne plus son code
        dans la base de données après traitement par cet outil.</p>

        <p> </p>

        <p>Cet outil est accessible via <span
        style="font-weight: bold;">Utilitaires | </span><span
        class="f_Heading1">Modifier la clef d'un enregistrement</span>.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0767.gif" width="550"
        height="336" border="0" alt="clip0767"></p>

        <p style="text-indent: -17px; margin: 0px 0px 0px 17px;"><span
        style="font-weight: bold;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #ff0000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Avertissement</span>:<span
                style="color: #000000;"></span><span
                style="color: #ff0000;">Lisez attentivement cet avertissement
                !</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #ff0000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Table</span>: Sélectionnez
                ici le fichier dans lequel vous désirez changer le code d'un
                enregistrement.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #ff0000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Mot de passe</span>: Tapez
                ici le mot de passe spécifique à cet utilitaire.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #ff0000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Ancien code</span>: Tapez
                ici l'ancien code de l'enregistrement.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #ff0000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Nouveau code</span>: Tapez
                ici le code par lequel vous désirez le remplacer.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -17px; margin: 0px 0px 0px 17px;"> </p>

        <p style="text-indent: -17px; margin: 0px 0px 0px 17px;"> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
