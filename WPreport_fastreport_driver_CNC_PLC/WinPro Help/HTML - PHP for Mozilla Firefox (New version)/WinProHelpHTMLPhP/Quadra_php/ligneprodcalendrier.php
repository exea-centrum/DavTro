<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Calendar","Calendrier"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?ligneprodcalendrier.php"; }
else { parent.quicksync('a7.21.4'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Calendrier</title>
  <meta name="keywords" content="Production load,Calendar">
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
        href="ligneprodrepartition.php">Previous</a>  <a
        href="magasinsstock.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This page lets the user define 1-off load capacities for specific weeks. The page is unavailable 
	  under edit mode.</p>

        <p style="text-align: center;"><img src="img/clip0581eng.jpg"
        width="712" height="272" border="0" alt="clip0581eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Week</span>: Input here the week number when a specific load capacity should 
			  be set. Click then onto the <img src="img/clip0582eng.jpg" width="75" height="21" border="0" alt="clip0582eng"> button 
			  to load the 1-off load capacity calendar for the week, if exists; otherwise the standard load capacities will be 
			  loaded by default in order to modify values. Click onto 
			  <img src="img/clip0328.jpg" width="28" height="15" border="0" alt="clip0328"> arrows to list the load capacity 
			  calendar for next or previous week.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>:
                Description du goulot concerné. </td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Lundi, Mardi, ...,
                Dimanche</span>: Vous pouvez assigner une capâcité
                exceptionnelle par goulot pour chaque jour de la semaine.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><img src="img/clip0582eng.jpg" width="75" height="21"
                border="0" alt="clip0582eng">: Cliquez sur ce bouton une fois le
                numéro de semaine renseigné pour charger le planning de
              charge.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><img src="img/clip0583eng.jpg" width="76" height="21"
                border="0" alt="clip0583eng">: Cliquez sur ce bouton pour
                sauvegarder vos modifications.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Reportez vous au manuel sur les lignes de production <span
        style="font-weight: bold;">GLP.chm </span>pour plus de détails sur ce
        module.</p>
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
      <td align="left"><p>Cette page permet de définir des capacités de charges
        exceptionnelles pour des semaines spécifiques. Cette page n'est pas
        accessible en mode édition.</p>

        <p style="text-align: center;"><img src="img/clip0581.zoom87.gif"
        width="625" height="255" border="0" alt="clip0581"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Semaine</span>: Saisissez
                ici le numéro de semaine pour laquelle il faut définir une
                charge exceptionnelle. Cliquez ensuite sur le bouton <img
                src="img/clip0582.zoom78.gif" width="61" height="17" border="0"
                alt="clip0582"> pour charger le calendrier de charge
                exceptionnelle pour la semaine, s'il existe, sinon le planning
                de charge standard est chargé par défaut afin de le modifier.
                Cliquez sur les flèches <img src="img/clip0328.jpg" width="28"
                height="15" border="0" alt="clip0328"> pour parcourir les
                plannings de charge des semaines contigues.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>:
                Description du goulot concerné. </td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Lundi, Mardi, ...,
                Dimanche</span>: Vous pouvez assigner une capâcité
                exceptionnelle par goulot pour chaque jour de la semaine.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><img src="img/clip0582.zoom92.gif" width="72" height="20"
                border="0" alt="clip0582">: Cliquez sur ce bouton une fois le
                numéro de semaine renseigné pour charger le planning de
              charge.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><img src="img/clip0583.zoom92.gif" width="71" height="21"
                border="0" alt="clip0583">: Cliquez sur ce bouton pour
                sauvegarder vos modifications.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Reportez vous au manuel sur les lignes de production <span
        style="font-weight: bold;">GLP.chm </span>pour plus de détails sur ce
        module.</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
