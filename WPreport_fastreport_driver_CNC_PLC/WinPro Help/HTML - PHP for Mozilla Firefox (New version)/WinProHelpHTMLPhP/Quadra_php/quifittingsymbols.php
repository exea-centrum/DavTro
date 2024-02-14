<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Fitting Symbols","Symboles d'ouverture"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?quifittingsymbols.php"; }
else { parent.quicksync('a5.6.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Symboles d'ouverture</title>
  <meta name="keywords"
  content="Fitting symbol,Symbol,Opening direction,Drawings">
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
        href="quidescription.php">Previous</a>  <a
        href="quiquestions.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This page lets you define the fitting symbols. These symbols are defined individually for each vent (1 is for the 
	  leftmost or bottommost vent), and for each direction. The symbol itself is a drawing defined in the 
	  <a href="dessinwinpro.php">drawings</a> table.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0157eng.jpg" width="441" height="236" border="0" alt="clip0157eng"></p>
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
      <td align="left"><p>Cette page permet de définir les symboles
        d'ouvertures pour cette quincaillerie, à définir individuellement pour
        chaque vantail (1 pour le plus en bas/à gauche, 7 pour le plus en
        haut/à droite), et chaque sens ouvrant. Le symbole d'ouverture utilisé
        ici est un <a href="dessinwinpro.php">dessin WinPro</a>. </p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0397.gif" width="430"
        height="228" border="0" alt="clip0397"></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
