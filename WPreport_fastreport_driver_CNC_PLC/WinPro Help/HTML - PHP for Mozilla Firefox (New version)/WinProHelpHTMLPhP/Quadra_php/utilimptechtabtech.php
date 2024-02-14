<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["List of technical tables","Liste des tables techniques"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utilimptechtabtech.php"; }
else { parent.quicksync('a9.23.1'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Liste des tables techniques</title>
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
        href="utilexporttechnique.php">Previous</a>  <a
        href="utilbasedevis.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p class="p_Heading1"><span class="f_Heading1">List of WinPro technical tables</span></p>

        <p class="p_Heading1"><span class="f_Heading1"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="737"
                style="width: 737px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="font-weight: bold; text-decoration: underline;">Note</span><span
                style="text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 11px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Lines marked with a <span style="font-weight: bold;">(*)</span> are technical tables not included 
					  into the list of tables from <a href="utilexporttechnique.php">Technical table export</a>.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 11px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>The reference version is a version 8.1, the number of tables may vary according versions and modules.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 8px;"><span
                style="font-weight: bold; color: #800080;">Export file (txt)</span></p>
              </td>
              <td valign="top" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #800080;">Table name</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                style="font-weight: bold; color: #993300;">Description</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">ACCESSOIREBIBLIOTHEQUE 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">AccBibl</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;">Accessories from sash frame of windows stored into libraries</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">ACCESSOIRECHASSIS
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">AccessCh</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Sash accesories set up</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">AERATEUR </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Aerateur</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Ventilators set up</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">ARTICLECOMPOSE
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">ArtComp</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Component of articles</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">ARTICLEFOURNISSEUR
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">ArtFou</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Article information by supplier</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">ARTICLE</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Article</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Article file</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">BATTEE   </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Battee</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Masonry depth set up</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">BIBLIOTHEQUE 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Biblio</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Window libraries set up</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 33px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">CADRE  </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 33px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Cadre</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 33px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Frame set up (generated by rules, and printed paper or label format)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">CAISSON </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Caisson</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Roller shutter box set up</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">CATEGORIEARTICLE 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Categ</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Article categories</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">CATEGORIEPANNEAU</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">CategoriePanneau</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">List of panel categories</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">FAUXCINTRAGE 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Cintre</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">False arches set up</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">COULEURFAUXCINTRAGE
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">ClrCintr</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Price information concerning false arches</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">COULEURCOMPOSANT 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">ClrCmp</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Allowed colours for some components</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">COEFFUF</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">CoeffUf</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">U coefficient U for thermic module</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">COINPARECLOSE</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">CoinParc</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Bead frame corners set up</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">COMPOSANT 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Compos</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">List of data set up rules</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">CORCMP  </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">CorCmp</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Components correspondancies</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">COULEUR</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Couleur</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">List of colours</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">COULISSE </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Coulisse</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Roller shutter guides set up</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">CROISILLON
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Croisill</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Glazing bars set up</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">DESSIN  </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Dessin</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Drawing rules</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">DETAIL1BIBLIOTHEQUE</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Det1Bibl</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Window library lines</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">DETAIL2BIBLIOTHEQUE
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Det2Bibl</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Transoms and sash frames from library lines</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 33px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">DETAIL3BIBLIOTHEQUE
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 33px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Det3Bibl</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 33px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Transom and fillings for sash frames of library lines</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">DETAILPARCLOSE 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">DetParcl</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Bead frame set up according thickness</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">DORMANT </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Dormant</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Outer frame set up</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">DXF</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Dxf</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Cut throughs elements</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">FILLCATEG </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">FillCateg</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">List of filter categories for fillings</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">FINITION</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Finition</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Finishing list</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">PLANNINGLIVRAISONFOURNISSEUR 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">FouLivr</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Scheduled delivery dates by supplier</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">FOUNUMCLI</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">FouNumCli</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">List of customer numbers for the suppliers</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">FOURNISSEUR 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Fourn</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">List of suppliers</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">FOURNVITRAGE</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">FournVit</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Information of glazing prices by supplier</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">GROUPECOULEUR 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">GrClr</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Colour groups for price grids</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">GRILLEPRIX
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">GrPrix</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Price list content</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">GROUPEUSINAGE 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">GrpUsg</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Millings groups</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">INCIDENT
                (*)</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Incident
                (*)</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Incidents types (*)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">LAQUEART  </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">LaqArt</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Information oabout varish for articles according colour</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">LIENPOSTE
                (*)</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">LienPst
                (*)</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Links between production spot and articles, messages or millings (*)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">MESSAGE  </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Message</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Error message set up</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">NORMEVENT
                (*)</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">NormeVent
                (*)</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Wind pressure norm (*)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">NORMEVERRE
                (*)</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">NormeVerre
                (*)</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Glass resistance norms (*)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">OUVRANT</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Ouvrant</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Sash frames set up</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">PANNEAUDECORATIF
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">PannDeco</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Decorative panels</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">PANNEAU </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Panneau</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Plain panels</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">PANNEAUFABRIQUE
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">PannFabr</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Composed panels</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">PANNEAUDECOCONF
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">PannDecoConf</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Composed decorative panels</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">PARART (*)</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">ParArt (*)</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Settings related to components (RN 7.1.28) (*)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">PARCLOSE  </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Parclose</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Bead frames</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">PERIMETRE 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Perim</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Perimeters (groupe of peripheral profiles)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">POSTEDETRAVAIL 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">PosteAtl</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Production screen within factory</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">PRODUCTIONLINE
                (*)</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">ProdLine
                (*)</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Production lines (*)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">PRODUCTIONSPOT
                (*)</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">ProdSpot
                (*)</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Production spot for the production lines (*)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">CHUTEPROFIL 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">ProfChut</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Profiles wastes stock</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">COULEURPROFIL 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">ProfCol</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Associations article/colour for profiles</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">PROFIL  </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Profil</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Profiles</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">PSIG</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">PsiG</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Psi coefficient for thermic module</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">QUESTIONCOMMANDE 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">QstCde</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Order global questions</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">QUESTION  </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Question</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Questions</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">QUINCAILLERIE</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Quinc</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Fittings frames</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">REHAUSSE</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Rehausse</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Peripheral profiles</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">REHAUSSEBIBLIOTHEQUE 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">RehBibl</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Peripheral profiles within window library</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">SCIE  </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Scie</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">List of saws</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">SCIEPROFIL 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">ScieProfil</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">List of alternative saws, by profile</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">SELECTIONQUESTION 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">SelQuest</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Possible answers to selection format questions</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">SUB  </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Sub</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Sub-routines</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">SYSTEME  </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Systeme</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Systems</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">TABLIER</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Tablier</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Roller shutter curtains</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 33px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">TEXT   </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 33px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Text</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 33px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">List of predefined texts used within floating description</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">TOLE  </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Tole</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Bent sheets</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">TRAVERSE</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Traverse</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Transoms</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">USINAGE  </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Usinage</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Millings set up</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">VITRAGE</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Vitrage</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Glazings</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">WARMEDGE
                (*)</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">WarmEdge
                (*)</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">List of warm edges (*)</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Heading1"> </span></p>
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
      <td align="left"><p class="p_Heading1"><span class="f_Heading1">Liste des
        tables techniques de WinPro</span></p>

        <p class="p_Heading1"><span class="f_Heading1"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="737"
                style="width: 737px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="font-weight: bold; text-decoration: underline;">Note</span><span
                style="text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 11px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Les lignes marquées d'un <span
                        style="font-weight: bold;">(*)</span> sont des tables
                        techniques, mais ne faisant pas partie de l'<a
                        href="utilexporttechnique.php">export de base
                        technique</a>.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 11px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>La version de référence pour cette liste est une
                        version 8.1. Le nombre de table peut varier suivant les
                        versions et les modules.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 8px;"><span
                style="font-weight: bold; color: #800080;">Fichier d'export
                (txt)</span></p>
              </td>
              <td valign="top" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #800080;">Nom de
                table</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                style="font-weight: bold; color: #993300;">Description</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">ACCESSOIREBIBLIOTHEQUE 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">AccBibl</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;">Accessoires des ouvrants des
                châssis mis en bibliothèque</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">ACCESSOIRECHASSIS
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">AccessCh</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">D</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">finition des accessoires
                d'ouvrant</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">AERATEUR </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Aerateur</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">D</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">finition des grilles d'a</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">ration</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">ARTICLECOMPOSE
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">ArtComp</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Composants des articles</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">ARTICLEFOURNISSEUR
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">ArtFou</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Informations article par
                fournisseur</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">ARTICLE</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Article</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Fichier article</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">BATTEE   </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Battee</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">D</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">finition des configurations de
                ma</span><span style="color: #000000;">ç</span><span
                style="color: #000000;">onnerie</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">BIBLIOTHEQUE 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Biblio</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Biblioth</span><span
                style="color: #000000;">è</span><span
                style="color: #000000;">ques de fen</span><span
                style="color: #000000;">ê</span><span
                style="color: #000000;">tres</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 33px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">CADRE  </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 33px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Cadre</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 33px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">D</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">finition des 'cadres' (g</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">n</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">r</span><span
                style="color: #000000;">é</span><span style="color: #000000;">s
                par instructions, et imprim</span><span
                style="color: #000000;">é</span><span style="color: #000000;">s
                sous forme de listes papier ou d'</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">tiquettes)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">CAISSON </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Caisson</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">D</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">finition des caissons de
                volets</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">CATEGORIEARTICLE 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Categ</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Cat</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">gories d'articles</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">CATEGORIEPANNEAU</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">CategoriePanneau</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Liste des catégories de
                panneaux</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">FAUXCINTRAGE 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Cintre</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">D</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">finition des faux cintres</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">COULEURFAUXCINTRAGE
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">ClrCintr</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Information de prix sur les faux
                cintres</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">COULEURCOMPOSANT 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">ClrCmp</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Couleurs autoris</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">es pour certains composants</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">COEFFUF</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">CoeffUf</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Coefficient U pour module
                thermique</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">COINPARECLOSE</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">CoinParc</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Coins de parcloses</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">COMPOSANT 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Compos</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Liste des formules de param</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">trage</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">CORCMP  </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">CorCmp</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Correspondance des composants</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">COULEUR</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Couleur</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Liste des couleurs</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">COULISSE </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Coulisse</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Coulisses des volets roulants</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">CROISILLON
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Croisill</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Croisillons</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">DESSIN  </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Dessin</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Formules de dessin</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">DETAIL1BIBLIOTHEQUE</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Det1Bibl</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Lignes de biblioth</span><span
                style="color: #000000;">è</span><span
                style="color: #000000;">ques</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">DETAIL2BIBLIOTHEQUE
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Det2Bibl</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Traverses et ouvrants des lignes de
                biblioth</span><span style="color: #000000;">è</span><span
                style="color: #000000;">ques</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 33px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">DETAIL3BIBLIOTHEQUE
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 33px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Det3Bibl</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 33px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Traverses et remplissages des ouvrants
                des lignes de biblioth</span><span
                style="color: #000000;">è</span><span
                style="color: #000000;">ques</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">DETAILPARCLOSE 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">DetParcl</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">D</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">finition des parcloses en fonction de
                l'</span><span style="color: #000000;">é</span><span
                style="color: #000000;">paisseur</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">DORMANT </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Dormant</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">D</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">finition des dormants</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">DXF</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Dxf</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">El</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">ments des vues en coupe</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">FILLCATEG </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">FillCateg</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Liste des cat</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">gories de filtres pour les
                remplissages</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">FINITION</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Finition</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Liste des finitions</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">PLANNINGLIVRAISONFOURNISSEUR 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">FouLivr</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Dates de livraison pr</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">vues par fournisseur</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">FOUNUMCLI</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">FouNumCli</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Liste des numéros de client chez les
                fournisseurs</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">FOURNISSEUR 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Fourn</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Fournisseurs</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">FOURNVITRAGE</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">FournVit</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Informations de prix vitrage par
                fournisseur</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">GROUPECOULEUR 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">GrClr</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Groupes de couleur pour les grilles de
                prix</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">GRILLEPRIX
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">GrPrix</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Contenu des grilles de prix</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">GROUPEUSINAGE 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">GrpUsg</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Groupes d'usinages</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">INCIDENT
                (*)</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Incident
                (*)</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Types d'incidents (*)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">LAQUEART  </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">LaqArt</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Informations de laquage des articles
                suivant couleur</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">LIENPOSTE
                (*)</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">LienPst
                (*)</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Liens entre postes d'atelier et
                articles, messages ou usinages (*)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">MESSAGE  </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Message</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">D</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">finition des messages
                d'erreur</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">NORMEVENT
                (*)</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">NormeVent
                (*)</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Normes de pression de vent
                (*)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">NORMEVERRE
                (*)</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">NormeVerre
                (*)</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Normes de r</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">sistance de verre (*)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">OUVRANT</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Ouvrant</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">D</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">finition des ouvrants</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">PANNEAUDECORATIF
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">PannDeco</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Panneaux d</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">coratifs</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">PANNEAU </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Panneau</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Panneaux </span><span
                style="color: #000000;">à</span><span
                style="color: #000000;">d</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">couper</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">PANNEAUFABRIQUE
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">PannFabr</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Panneau fabriqu</span><span
                style="color: #000000;">é</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">PANNEAUDECOCONF
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">PannDecoConf</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Panneau décoratif configuré</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">PARART (*)</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">ParArt (*)</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Param</span><span
                style="color: #000000;">è</span><span
                style="color: #000000;">tres li</span><span
                style="color: #000000;">é</span><span style="color: #000000;">s
                aux composants (RN 7.1.28) (*)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">PARCLOSE  </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Parclose</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Parcloses</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">PERIMETRE 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Perim</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">P</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">rim</span><span
                style="color: #000000;">è</span><span
                style="color: #000000;">tres (groupes de profils p</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">riph</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">riques)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">POSTEDETRAVAIL 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">PosteAtl</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Postes de travail en atelier</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">PRODUCTIONLINE
                (*)</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">ProdLine
                (*)</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Lignes de production (*)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">PRODUCTIONSPOT
                (*)</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">ProdSpot
                (*)</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Point de production (*)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">CHUTEPROFIL 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">ProfChut</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Stock de chutes de profils</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">COULEURPROFIL 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">ProfCol</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Associations article/couleur pour les
                profils</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">PROFIL  </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Profil</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Profils</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">PSIG</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">PsiG</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Coefficient Psi pour module
                thermique</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">QUESTIONCOMMANDE 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">QstCde</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Questions de commande</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">QUESTION  </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Question</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Questions</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">QUINCAILLERIE</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Quinc</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Quincailleries</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">REHAUSSE</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Rehausse</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Profils p</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">riph</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">riques</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">REHAUSSEBIBLIOTHEQUE 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">RehBibl</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Profils p</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">riph</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">riques sur ch</span><span
                style="color: #000000;">â</span><span
                style="color: #000000;">ssis de biblioth</span><span
                style="color: #000000;">è</span><span
                style="color: #000000;">ques</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">SCIE  </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Scie</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Liste des scies</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">SCIEPROFIL 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">ScieProfil</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Liste des scies alternatives, par
                profil</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">SELECTIONQUESTION 
                </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">SelQuest</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">R</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">ponses possibles aux questions de type
                S</span><span style="color: #000000;">é</span><span
                style="color: #000000;">lection</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">SUB  </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Sub</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Sous-routines</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">SYSTEME  </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Systeme</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Syst</span><span
                style="color: #000000;">è</span><span
                style="color: #000000;">mes</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">TABLIER</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Tablier</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Tabliers de volets roulants</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 33px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">TEXT   </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 33px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Text</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 33px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Liste de textes pr</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">d</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">finis </span><span
                style="color: #000000;">à</span><span
                style="color: #000000;">utiliser dans les descriptions
                param</span><span style="color: #000000;">é</span><span
                style="color: #000000;">trables</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">TOLE  </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Tole</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">T</span><span
                style="color: #000000;">ô</span><span
                style="color: #000000;">les pli</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">es</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">TRAVERSE</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Traverse</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Traverses</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">USINAGE  </span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Usinage</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">D</span><span
                style="color: #000000;">é</span><span
                style="color: #000000;">finition des usinages</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">VITRAGE</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">Vitrage</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Vitrages</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="202" bgcolor="#ffff99"
              style="width: 202px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; color: #003366;">WARMEDGE
                (*)</span></p>
              </td>
              <td valign="middle" width="177" bgcolor="#ffff99"
              style="width: 177px; height: 17px; background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #0000ff;">WarmEdge
                (*)</span></p>
              </td>
              <td valign="top" width="355" bgcolor="#c0c0c0"
              style="width: 355px; height: 17px; background-color: #c0c0c0; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;"><span
                style="color: #000000;">Liste des warm edges (*)</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Heading1"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
