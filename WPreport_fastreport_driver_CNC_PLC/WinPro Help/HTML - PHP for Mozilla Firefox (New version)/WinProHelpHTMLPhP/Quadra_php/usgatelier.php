<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Factory","Atelier"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?usgatelier.php"; }
else { parent.quicksync('a7.40.2'); }
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
        href="usgdescription.php">Previous</a>  <a href="warmedge.php">Next</a>
        </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;"></span>If the Production Spots module is used as well as related 
	  documents, this page lets you define onto which paper list or spot screen the milling code will be displayed.</p>

        <p></p>

        <p style="text-align: center;"><img src="img/clip0572eng.jpg"
        width="622" height="287" border="0" alt="clip0572eng"></p>

        <p>Select here the production spots concerned by the milling.</p>

        <p> </p>

        <p>Refer to Production Spots manual, <span style="font-weight: bold;">PostAtl.chm</span>, for more details about 
		this feature.</p>
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
      <td align="left"><p><span style="font-size: 5pt;"></span>Si vous utilisez
        le module Poste Atelier et les documents liés, cette page vous permet
        de définir sur quelle fiche de poste ou écran d'atelier cet usinage
        sera affiché.</p>

        <p></p>

        <p style="text-align: center;"><img src="img/clip0572.zoom84.gif"
        width="498" height="251" border="0" alt="clip0572"></p>

        <p>Sélectionnez dans cette liste les postes atelier concernés par cet
        usinage.</p>

        <p> </p>

        <p>Reportez vous au manuel sur les postes atelier <span
        style="font-weight: bold;">PostAtl.chm </span>pour plus de détails sur
        ce module.</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
