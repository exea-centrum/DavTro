<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Main system","Syst&#232;me principal"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utilsystemeprincipal.php"; }
else { parent.quicksync('a9.3'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Système principal</title>
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
        href="utilmagasinstockprincipal.php">Previous</a>  <a
        href="utilsupplementintercalaire.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This dialog sets the main <a href="systemes.php">system</a> for the user. 
	  This code correponds to the system that will be defaultly used when the user creates the first window.</p>

        <p> </p>

        <p>This setting is available through menu <span style="font-weight: bold;">Tools | Main system</span>.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0741eng.jpg" width="190"
        height="121" border="0" alt="clip0741eng"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Main system</span>:
                Set into the combo the code for main system by default for any user.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -17px; margin: 0px 0px 0px 17px;"> </p>

        <p> </p>

        <p> </p>

        <p style="text-align: center;"> </p>

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
      <td align="left"><p>Définissez dans ce menu le <a
        href="systemes.php">système</a> principal pour l'utilisateur. Ce code
        de système principal correspond au système qui sera proposé par défaut
        lors de la première saisie d'un châssis par l'utilisateur.</p>

        <p> </p>

        <p>Cet outil est accessible via <span
        style="font-weight: bold;">Utilitaires | Système principal</span>.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0741.gif" width="190"
        height="128" border="0" alt="clip0741"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Système principal</span>:
                Renseignez dans cette liste le code du système principal qui
                sera proposé en saisie à l'utilisateur.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -17px; margin: 0px 0px 0px 17px;"> </p>

        <p> </p>

        <p> </p>

        <p style="text-align: center;"> </p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
