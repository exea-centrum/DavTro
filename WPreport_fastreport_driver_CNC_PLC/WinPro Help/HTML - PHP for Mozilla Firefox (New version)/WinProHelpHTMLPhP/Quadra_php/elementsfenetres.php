<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Window Elements","El&#233;ments de Fen&#234;tres","Raam elementen"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?elementsfenetres.php"; }
else { parent.quicksync('a5'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Eléments de fenêtres</title>
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
        href="maindoeuvre.php">Previous</a>  <a href="parcloses.php">Next</a>
        </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="text-decoration: underline;"> </span></p>

        <p>You define window compositions in WinPro by specifying separately
        the composition of <a href="dormants.php">outer frames</a>, <a
        href="traverses.php">transoms</a>, <a href="ouvrants.php">sashes</a>,
        <a href="quincailleries.php">fittings</a>, <a
        href="accessoires.php">accessories</a>, <a
        href="croisillons.php">glazing bars</a>, <a
        href="parcloses.php">glazing beads</a>, <a
        href="vitrages.php">glazings</a>, <a
        href="panneaudecouper.php">panels</a>, <a
        href="panneaudeco.php">decorative panels</a>, <a
        href="panneaucompose.php">special panels</a>, <a
        href="profilperiph.php">peripheral profiles</a>, <a
        href="aerateurs.php">ventilators</a>. The union of those elements make
        up a window.</p>

        <p> </p>

        <p style="background: #fffff2;"><span style="color: #000000;">Each kind
        of element is described in the following pages.</span></p>

        <p style="background: #fffff2;"><span
        style="font-size: 11pt; color: #000000;"> </span></p>
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
      <td align="left"><p><span style="text-decoration: underline;"> </span></p>

        <p>Le paramétrage des fenêtres se décompose dans Winpro en paramétrage
        de <a href="systemes.php">systèmes</a>, <span
        style="color: #0000ff;"><a href="dormants.php">dormants</a></span>,
        <span style="color: #0000ff;"><a
        href="traverses.php">traverses</a></span>, <span
        style="color: #0000ff;"><a href="ouvrants.php">ouvrants</a></span>,
        <span style="color: #0000ff;"><a
        href="quincailleries.php">quincailleries</a></span>, <a
        href="accessoires.php">accessoires</a>, <span
        style="color: #0000ff;"><a
        href="croisillons.php">croisillons</a></span>, <span
        style="color: #0000ff;"><a href="parcloses.php">parcloses</a></span>,
        <a href="vitrages.php">vitrages</a>, <a
        href="panneaudecouper.php">panneaux à découper</a>, <a
        href="panneaudeco.php">panneaux décoratifs</a>, <a
        href="panneaucompose.php">panneaux composés</a>, <a
        href="profilperiph.php">profils périphériques</a>, <a
        href="aerateurs.php">aérateurs</a>. L'assemblage de ces différents
        éléments compose une fenêtre complète.</p>

        <p> </p>

        <p>Vous trouverez la description de chacun de ces éléments dans les
        pages suivantes.</p>

        <p><span style="font-size: 11pt;"> </span></p>
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
      <td align="left"><p><span style="text-decoration: underline;"> </span></p>

        <p>In Winpro bepaalt u de samenstelling van een raamelement door afzonderlijk 
        de eigenschappen van de<a href="dormants.php">kaders</a>, <a
        href="traverses.php">stijlen/regels</a>, <a href="ouvrants.php">vleugels</a>,
        <a href="quincailleries.php">beslag</a>, <a
        href="accessoires.php">toebehoren</a>, <a
        href="croisillons.php">kleinhouten</a>, <a
        href="parcloses.php">glaslatten</a>, <a
        href="vitrages.php">beglazingen</a>, <a
        href="panneaudecouper.php">te zagen panelen</a>, <a
        href="panneaudeco.php">sierpanelen</a>, <a
        href="panneaucompose.php">samengestelde panelen</a>, <a
        href="profilperiph.php">bijprofielen</a>, <a
        href="aerateurs.php">verluchtingsroosters</a>. te bepalen. Het samenbrengen van deze elementen
        definieert uiteindelijk uw raam of deur.</p>

        <p> </p>

        <p style="background: #fffff2;"><span style="color: #000000;">Elke type element
        wordt verder beschreven op de volgende pagina's.</span></p>

        <p style="background: #fffff2;"><span
        style="font-size: 11pt; color: #000000;"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>


</body>
</html>
