<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Salesmen","Repr&#233;sentants"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?representants.php"; }
else { parent.quicksync('a7.32'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Représentants</title>
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
        href="introduction.php">Top</a>  <a href="prospect.php">Previous</a> 
        <a href="represdescription.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This table defines the list of salesmen selling for this company. The salesman created can be assigned 
	  to a <a href="client.php">customer</a> record, and will be printed onto customer document headers.</p>

        <p>Many additional features are available when module <span style="font-weight: bold;">Contact Relationship 
		Management CRM</span> is used, as the ability to schedule visits for the salesman at fixed dates.</p>

        <p> </p>

        <p>This dialog is reached through menu <span style="font-weight: bold;">Data | Miscellaneous | Salesmen</span>.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0628eng.jpg"
        width="431" height="223" border="0" alt="clip0628eng"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Code</span>: Code of the salesman.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"><span
        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';"> </span></p>
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
      <td align="left"><p>Cette table permet de définir la liste des
        représentants travaillant pour la société. Ces représentants pourront
        être affectés à une fiche <a href="client.php">client</a>, et
        apparaître en entête des documents clients.</p>

        <p>D'autres fonctionnalités sont disponibles lorsque vous utilisez le
        module <span style="font-weight: bold;">Gestion de relation clientèle
        CRM</span>, comme la possibilité de planifier des visites pour le
        représentant à des dates précises.</p>

        <p> </p>

        <p>Ce dialogue est accessible via le menu <span
        style="font-weight: bold;">Données | Autres données |
        Représentants</span>.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0628.zoom89.gif"
        width="426" height="241" border="0" alt="clip0628"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Code</span>: Code du
                représentant. </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"><span
        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
