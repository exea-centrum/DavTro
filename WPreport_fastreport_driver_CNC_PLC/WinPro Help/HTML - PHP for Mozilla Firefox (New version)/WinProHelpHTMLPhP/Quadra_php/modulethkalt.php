<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Kaltefeind","Kaltefeind"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?modulethkalt.php"; }
else { parent.quicksync('a7.11.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Kaltefeind</title>
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
        href="moduletheprempl.php">Previous</a>  <a
        href="ModuleThDO.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p class="p_Textestd"><span class="f_Textestd">This dialog is designed to define the list of article codes used as 
        kaltefeinds. See <a href="8_1_0_x.php">release note version 8.1</a>.</span></p>

        <p class="p_Textestd">This for WinPro to locate a potential kaltefeind associated to bottom profile 
		of a door, to compute its thermic value correctly.</p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"
        style="text-align: center; margin: 0px 0px 0px 24px;"><img
        src="img/clip0437eng.jpg" width="286" height="329" border="0"
        alt="clip0437eng"></p>

        <p class="p_Textestd"><span class="f_Heading1"
        style="font-style: italic;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Kaltefeind</span>: List of article codes to be considered as kaltefeinds.</td>
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
      <td align="left"><p class="p_Textestd"><span class="f_Textestd">Ce
        dialogue vous permet de définir la liste des codes article des
        kaltefeinds. Voir <a href="8_1_0_x.php">note de version 8.1</a></span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cela permettra à WinPro
        de rechercher un éventuel kaltefeind associé au profil bas
        d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">une porte, pour en calculer correctement la valeur
        thermique.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"
        style="text-align: center; margin: 0px 0px 0px 24px;"><img
        src="img/clip0437.zoom83.gif" width="304" height="378" border="0"
        alt="clip0437"></p>

        <p class="p_Textestd"><span class="f_Heading1"
        style="font-style: italic;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Kaltefeind</span>: Liste des
                articles à considérer comme kaltefeinds.</td>
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
