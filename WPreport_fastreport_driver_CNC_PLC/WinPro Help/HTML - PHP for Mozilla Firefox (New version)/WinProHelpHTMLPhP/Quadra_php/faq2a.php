<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Extended cill management","Gestion des seuils &#233;tendus"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?faq2a.php"; }
else { parent.quicksync('a10.2.1'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Gestion des seuils étendus</title>
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
        href="introduction.php">Top</a>  <a href="faq2.php">Previous</a>  <a
        href="faq2b.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>You may enable at any time the extended cill feature by adding the following key into <span
        class="f_Variables">[SYSTEM]</span> section of WinPro.ini file</p>

        <p> </p>

        <p><span class="f_Variables">[SYSTEM]</span></p>

        <p><span class="f_Variables">seuil etendu = 1</span></p>
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
      <td align="left"><p> </p>

        <p>Vous pouvez activer à tout moment la fonctionnalité de seuil étendu
        en rajoutant la ligne suivante dans la section <span
        class="f_Variables">[SYSTEM]</span> du fichier de configuration
        WinPro.ini</p>

        <p> </p>

        <p><span class="f_Variables">[SYSTEM]</span></p>

        <p><span class="f_Variables">seuil etendu = 1</span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
