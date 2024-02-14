<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Re-create WinPro users in database","R&#233;g&#233;nerer les utilisateurs WinPro dans la base de donn&#233;es"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utilregenereruser.php"; }
else { parent.quicksync('a9.36'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Régénerer les utilisateurs WinPro dans la base de données</title>
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
        href="utilmodificationsettings.php">Previous</a>  <a
        href="utilsuppressioncaches.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This menu allows to re-create Winpro users within a <span style="font-weight: bold;">mySQL</span> 
	  database.</p>

        <p> </p>

        <p>This is useful when creating a new WinPro user into the database, to validate the access for this user account inside
		the <span style="font-weight: bold;">mySQL</span> database server.</p>

        <p> </p>

        <p>This is reached through <span style="font-weight: bold;">Tools | Re-create WinPro users in database</span>.</p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="450"
                style="width: 450px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; color: #000000; text-decoration: underline;">Note</span><span
                style="color: #000000; text-decoration: underline;">:</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">This tool is only available with version 8 under </span><span
                style="font-weight: bold; color: #000000;">mySQL</span><span
                style="color: #000000;"> database, it is not visible with version 7.2 or even with version 8 under </span><span
                style="font-weight: bold; color: #000000;">FoxPro</span><span
                style="color: #000000;"> format. </span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p style="text-align: center;"> </p>
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
      <td align="left"><p>Ce menu permet de régénérer les utilisateurs de
        WinPro dans une base de données <span
        style="font-weight: bold;">mySQL</span>.</p>

        <p> </p>

        <p>Utile lors de la création d'un nouvel utilisateur WinPro dans la
        base de données, afin de valider l'accès de ce compte utilisateur
        WinPro à la base <span style="font-weight: bold;">mySQL</span>.</p>

        <p> </p>

        <p>Cet outil est accessible via <span
        style="font-weight: bold;">Utilitaires | </span><span
        class="f_Heading1">Régénérer les utilisateurs WinPro dans la base de
        données</span>.</p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="450"
                style="width: 450px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; color: #000000; text-decoration: underline;">Note</span><span
                style="color: #000000; text-decoration: underline;">:</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Cet outil n'est utile que pour la
                version 8 avec une base de données </span><span
                style="font-weight: bold; color: #000000;">mySQL</span><span
                style="color: #000000;">, ce menu n'est pas disponible en
                version 7.2, ni avec une version 8 au format </span><span
                style="font-weight: bold; color: #000000;">FoxPro</span><span
                style="color: #000000;">. </span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p style="text-align: center;"> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
