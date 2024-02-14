<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Main stock store","Magasin de stock principal"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utilmagasinstockprincipal.php"; }
else { parent.quicksync('a9.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Magasin de stock principal</title>
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
        href="utilpreflangues.php">Previous</a>  <a
        href="utilsystemeprincipal.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This dialog is suitable to define the <a href="magasinsstock.php">main stock store</a> from where 
	  materials will be fetched for window fabrication.</p>

        <p> </p>

        <p>It is reached through menu <span style="font-weight: bold;">Tools | Main stock store</span>.</p>

        <p> </p>

        <p>Refer to manual about <span style="font-weight: bold;">Stock management</span> for more details about stock 
		management within WinPro.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0740eng.jpg"
        width="276" height="206" border="0" alt="clip0740eng"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Main stock</span>:
                Select here with the right hand button the stock code where parts will be stored most of the time.</td>
            </tr>
          </tbody>
        </table>
        </div>

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
      <td align="left"><p>Cette fenêtre permet de définir à partir de quel <a
        href="magasinsstock.php">magasin de stock</a> seront prises les pièces
        entrant dans la fabrication.</p>

        <p> </p>

        <p>Cet outil est accessible via <span
        style="font-weight: bold;">Utilitaires | Magasin de stock principal</span>.</p>

        <p> </p>

        <p>Reportez vous au manuel sur la <span
        style="font-weight: bold;">Gestion de stock </span>pour plus de détails
        sur le stock dans WinPro.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0740fra.jpg"
        width="274" height="203" border="0" alt="clip0740fra"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Stock principal</span>:
                Choisissez ici, à l'aide du bouton de droite, l'emplacement où
                vous stockez le plus grand nombre de pièce de cet article.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
