<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["WinPro/D Internet","WinPro/D Internet"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utilwinprodinternet.php"; }
else { parent.quicksync('a9.27'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>WinPro/D Internet</title>
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
        href="utilinfoclimultiple.php">Previous</a>  <a
        href="utilexportvitrage.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This version of WinPro/D uses a database engine under <span style="font-weight: bold;">mySQL</span> 
	  format. You may find details about this specific version and dialog within <a href="winprod_internet.php">release note 
	  version 8.02, dedicated to WinPro/D Internet</a>.</p>

        <p> </p>

        <p>See also <a href="faq7.php">FAQ</a> chapter for more details about WinPro/D.</p>

        <p> </p>

        <p>The tool is reached through menu <span
        style="font-weight: bold;">Tools | WinPro/D Internet</span>.</p>

        <p> </p>

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
      <td align="left"><p>Cette version du programme WinPro/D utilise un moteur
        de base de données au format <span
        style="font-weight: bold;">mySQL</span>. Vous trouverez plus de détails
        sur cette version et ce dialogue en particulier dans la <a
        href="winprod_internet.php">note de version 8.02 dédiée à WinPro/D
        Internet</a>.</p>

        <p> </p>

        <p>Voir également la <a href="faq7.php">FAQ</a> pour plus de détails
        sur WinPro/D.</p>

        <p> </p>

        <p>Cet outil est accessible via <span
        style="font-weight: bold;">Utilitaires | WinPro/D Internet</span>.</p>

        <p> </p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
