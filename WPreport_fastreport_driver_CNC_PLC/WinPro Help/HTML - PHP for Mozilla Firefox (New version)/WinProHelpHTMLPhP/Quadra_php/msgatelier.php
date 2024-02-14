<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Factory","Atelier","Werkplaatspost"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?msgatelier.php"; }
else { parent.quicksync('a7.23.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Atelier</title>
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
        href="msgdescription.php">Previous</a>  <a
        href="modepaiement.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>If you use the workplace module and related documents, this page defines onto which workplace sheet or workplace 
		screen the message will be displayed.</p>

        <p style="text-align: center;"><img src="img/clip0572eng.jpg"
        width="622" height="287" border="0" alt="clip0572eng"></p>

        <p>Select into the list the workplace concerned by the message.</p>

        <p> </p>

        <p>Refer to workplace manual, <span style="font-weight: bold;">PostAtl.chm</span>, for more details about this module.</p>
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
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>Si vous utilisez le module Poste Atelier et les documents liés,
        cette page vous permet de définir sur quelle fiche de poste ou écran
        d'atelier ce message sera affiché. </p>

        <p style="text-align: center;"><img src="img/clip0572.zoom84.gif"
        width="498" height="251" border="0" alt="clip0572"></p>

        <p>Sélectionnez dans cette liste les postes atelier concernés par ce
        message.</p>

        <p> </p>

        <p>Reportez vous au manuel sur les postes atelier <span
        style="font-weight: bold;">PostAtl.chm </span>pour plus de détails sur
        ce module.</p>
      </td>
    </tr>
  </tbody>
</table>
</div>

<div class="NED">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>Indien u de module IPA (Afdruk Werkplaatsposten) en EA (Schermen in
        de fabriek) in het bezit heeft en u heeft de documenten gekoppeld, dan
        dient deze pagina om te definiëren op welke werkpost u welke bericht
        wil doen verschijnen.Dit op papier en/of een scherm in de fabriek.</p>

        <p style="text-align: center;"><img src="img/clip0572.zoom84.gif"
        width="498" height="251" border="0" alt="clip0572"></p>

        <p>Selecteer de werkpost waarop het dient weergegeven te worden.</p>

        <p> </p>

        <p>Wij verwijzen ook naar de uitgebreide handleiding ivm werkposten in
        de fabriek <span style="font-weight: bold;">PostAtl.chm </span>voor
        meer gedetailleerde informatie omtrent deze module.</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
