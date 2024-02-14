<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Supplier order","Commande fournisseur"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?faq1b.php"; }
else { parent.quicksync('a10.1.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Commande fournisseur</title>
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
        href="introduction.php">Top</a>  <a href="faq1a.php">Previous</a>  <a
        href="faq1c.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>Several methods to generate a supplier order form are available : the supplier proposition, or direct order through the
		Actions tab of the customer order.</p>

        <p>Please refer to below table for more details.</p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" bgcolor="#fff7ef" border="1"
        style="background-color: #fff7ef; border-color : #c0c0c0 #000000 #000000 #c0c0c0; border-style: solid; border-width: 1px; border-spacing:0px;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="129"
              style="width: 129px; height: 26px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-size: 12pt; font-weight: bold;">ARTICLE RECORD</span></p>
              </td>
              <td width="245"
              style="width: 245px; height: 26px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-size: 12pt; font-weight: bold;">SUPPLIER RECORD</span></p>
              </td>
              <td width="241"
              style="width: 241px; height: 26px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-size: 12pt; font-weight: bold;">ARTICLE RECORD</span></p>
              </td>
              <td width="279"
              style="width: 279px; height: 26px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-size: 11pt; font-weight: bold;">Article ordered through proposition</span></p>
              </td>
              <td width="257"
              style="width: 257px; height: 36px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-size: 11pt; font-weight: bold;">Article ordered through Actions tab of customer order.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="129"
              style="width: 129px; height: 36px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0371eng.jpg" width="110"
                height="24" border="0" alt="Clip0371eng"></p>
              </td>
              <td width="245"
              style="width: 245px; height: 36px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0374eng.jpg" width="244"
                height="17" border="0" alt="Clip0374eng"></p>
              </td>
              <td width="241"
              style="width: 241px; height: 36px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0078eng.jpg" width="99"
                height="18" border="0" alt="clip0078eng"><span
                style="font-size: 16pt; font-weight: bold; color: #ff0000;"></span></p>
              </td>
              <td width="279"
              style="width: 279px; height: 36px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #ff0000;">Article not proposed onto supplier order</span></p>
              </td>
              <td width="257"
              style="width: 257px; height: 36px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #ff0000;">Article not ordered.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="129"
              style="width: 129px; height: 39px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0371eng.jpg" width="110"
                height="24" border="0" alt="Clip0371eng"></p>
              </td>
              <td width="245"
              style="width: 245px; height: 39px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0373eng.jpg" width="242"
                height="16" border="0" alt="Clip0373eng"></p>
              </td>
              <td width="241"
              style="width: 241px; height: 39px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0078eng.jpg" width="99"
                height="18" border="0" alt="clip0078eng"></p>
              </td>
              <td width="279"
              style="width: 279px; height: 39px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #ff0000;">Article not proposed onto supplier order</span></p>
              </td>
              <td width="257"
              style="width: 257px; height: 36px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #339966;">Article ordered.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="129"
              style="width: 129px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0372eng.jpg" width="110"
                height="22" border="0" alt="Clip0372eng"></p>
              </td>
              <td width="245"
              style="width: 245px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0374eng.jpg" width="244"
                height="17" border="0" alt="Clip0374eng"></p>
              </td>
              <td width="241"
              style="width: 241px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0078eng.jpg" width="99"
                height="18" border="0" alt="clip0078eng"></p>
              </td>
              <td width="279"
              style="width: 279px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #339966;">Article proposed onto supplier order</span></p>
              </td>
              <td width="257"
              style="width: 257px; height: 36px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #ff0000;">Article not ordered.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="129"
              style="width: 129px; height: 39px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0372eng.jpg" width="110"
                height="22" border="0" alt="Clip0372eng"></p>
              </td>
              <td width="245"
              style="width: 245px; height: 39px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0373eng.jpg" width="242"
                height="16" border="0" alt="Clip0373eng"></p>
              </td>
              <td width="241"
              style="width: 241px; height: 39px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0078eng.jpg" width="99"
                height="18" border="0" alt="clip0078eng"></p>
              </td>
              <td width="279"
              style="width: 279px; height: 39px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #339966;">Article proposed onto supplier order</span></p>
              </td>
              <td width="257"
              style="width: 257px; height: 36px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #339966;">Article ordered.</span></p>
              </td>
            </tr>
            <tr align="left">
              <td width="129"
              style="width: 129px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0371eng.jpg" width="110"
                height="24" border="0" alt="Clip0371eng"></p>
              </td>
              <td width="245"
              style="width: 245px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0374eng.jpg" width="244"
                height="17" border="0" alt="Clip0374eng"></p>
              </td>
              <td width="241"
              style="width: 241px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0376eng.jpg" width="98"
                height="16" border="0" alt="clip0376eng"><span
                class="f_ImageCaption"></span></p>
              </td>
              <td width="279"
              style="width: 279px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #339966;">Article proposed onto supplier order</span></p>
              </td>
              <td width="257"
              style="width: 257px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #ff0000;">Article not ordered.</span></p>
              </td>
            </tr>
            <tr align="left">
              <td width="129"
              style="width: 129px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0371eng.jpg" width="110"
                height="24" border="0" alt="Clip0371eng"></p>
              </td>
              <td width="245"
              style="width: 245px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0373eng.jpg" width="242"
                height="16" border="0" alt="Clip0373eng"></p>
              </td>
              <td width="241"
              style="width: 241px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0376eng.jpg" width="98"
                height="16" border="0" alt="clip0376eng"></p>
              </td>
              <td width="279"
              style="width: 279px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #339966;">Article proposed onto supplier order</span></p>
              </td>
              <td width="257"
              style="width: 257px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #339966;">Article ordered.</span></p>
              </td>
            </tr>
            <tr align="left">
              <td width="129"
              style="width: 129px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0372eng.jpg" width="110"
                height="22" border="0" alt="Clip0372eng"></p>
              </td>
              <td width="245"
              style="width: 245px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0374eng.jpg" width="244"
                height="17" border="0" alt="Clip0374eng"></p>
              </td>
              <td width="241"
              style="width: 241px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0376eng.jpg" width="98"
                height="16" border="0" alt="clip0376eng"></p>
              </td>
              <td width="279"
              style="width: 279px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #339966;">Article proposed onto supplier order</span></p>
              </td>
              <td width="257"
              style="width: 257px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #ff0000;">Article not ordered.</span></p>
              </td>
            </tr>
            <tr align="left">
              <td width="129"
              style="width: 129px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0372eng.jpg" width="110"
                height="22" border="0" alt="Clip0372eng"></p>
              </td>
              <td width="245"
              style="width: 245px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0373eng.jpg" width="242"
                height="16" border="0" alt="Clip0373eng"></p>
              </td>
              <td width="241"
              style="width: 241px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0376eng.jpg" width="98"
                height="16" border="0" alt="clip0376eng"></p>
              </td>
              <td width="279"
              style="width: 279px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #339966;">Article proposed onto supplier order</span></p>
              </td>
              <td width="257"
              style="width: 257px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #339966;">Article ordered.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

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
      <td align="left"><p> </p>

        <p>Plusieurs manières de générer des commandes aux fournisseurs
        s'offrent à vous : la proposition de commande, ou la commande directe
        via l'onglet Action de la commande client.</p>

        <p>Faites votre choix en consultant le tableau ci-dessous.</p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" bgcolor="#fff7ef" border="1"
        style="background-color: #fff7ef; border-color : #c0c0c0 #000000 #000000 #c0c0c0; border-style: solid; border-width: 1px; border-spacing:0px;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="129"
              style="width: 129px; height: 26px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-size: 12pt; font-weight: bold;">FICHE
                ARTICLE</span></p>
              </td>
              <td width="245"
              style="width: 245px; height: 26px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-size: 12pt; font-weight: bold;">FICHE
                FOURNISSEUR</span></p>
              </td>
              <td width="241"
              style="width: 241px; height: 26px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-size: 12pt; font-weight: bold;">FICHE
                ARTICLE</span></p>
              </td>
              <td width="279"
              style="width: 279px; height: 26px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-size: 11pt; font-weight: bold;">Article commandé
                via une proposition</span></p>
              </td>
              <td width="257"
              style="width: 257px; height: 36px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-size: 11pt; font-weight: bold;">Article commandé
                via l'onglet Action de la commande client.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="129"
              style="width: 129px; height: 36px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0371.gif" width="82"
                height="23" border="0" alt="Clip0371"></p>
              </td>
              <td width="245"
              style="width: 245px; height: 36px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0374.gif" width="233"
                height="31" border="0" alt="Clip0374"></p>
              </td>
              <td width="241"
              style="width: 241px; height: 36px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0078.gif" width="159"
                height="16" border="0" alt="clip0078"><span
                style="font-size: 16pt; font-weight: bold; color: #ff0000;"></span></p>
              </td>
              <td width="279"
              style="width: 279px; height: 36px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #ff0000;">Article non proposé
                en commande fournisseur</span></p>
              </td>
              <td width="257"
              style="width: 257px; height: 36px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #ff0000;">Article non
                commandé.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="129"
              style="width: 129px; height: 39px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0371.gif" width="82"
                height="23" border="0" alt="Clip0371"></p>
              </td>
              <td width="245"
              style="width: 245px; height: 39px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0373.gif" width="227"
                height="32" border="0" alt="Clip0373"></p>
              </td>
              <td width="241"
              style="width: 241px; height: 39px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0078.gif" width="159"
                height="16" border="0" alt="clip0078"></p>
              </td>
              <td width="279"
              style="width: 279px; height: 39px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #ff0000;">Article non proposé
                en commande fournisseur</span></p>
              </td>
              <td width="257"
              style="width: 257px; height: 36px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #339966;">Article
                commandé.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="129"
              style="width: 129px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0372.gif" width="87"
                height="22" border="0" alt="Clip0372"></p>
              </td>
              <td width="245"
              style="width: 245px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0374.gif" width="233"
                height="31" border="0" alt="Clip0374"></p>
              </td>
              <td width="241"
              style="width: 241px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0078.gif" width="159"
                height="16" border="0" alt="clip0078"></p>
              </td>
              <td width="279"
              style="width: 279px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #339966;">Article proposé en
                commande fournisseur</span></p>
              </td>
              <td width="257"
              style="width: 257px; height: 36px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #ff0000;">Article non
                commandé.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="129"
              style="width: 129px; height: 39px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0372.gif" width="87"
                height="22" border="0" alt="Clip0372"></p>
              </td>
              <td width="245"
              style="width: 245px; height: 39px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0373.gif" width="227"
                height="32" border="0" alt="Clip0373"></p>
              </td>
              <td width="241"
              style="width: 241px; height: 39px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0078.gif" width="159"
                height="16" border="0" alt="clip0078"></p>
              </td>
              <td width="279"
              style="width: 279px; height: 39px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #339966;">Article proposé en
                commande fournisseur</span></p>
              </td>
              <td width="257"
              style="width: 257px; height: 36px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #339966;">Article
                commandé.</span></p>
              </td>
            </tr>
            <tr align="left">
              <td width="129"
              style="width: 129px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0371.gif" width="82"
                height="23" border="0" alt="Clip0371"></p>
              </td>
              <td width="245"
              style="width: 245px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0374.gif" width="233"
                height="31" border="0" alt="Clip0374"></p>
              </td>
              <td width="241"
              style="width: 241px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0376.jpg" width="162"
                height="20" border="0" alt="clip0376"><span
                class="f_ImageCaption"></span></p>
              </td>
              <td width="279"
              style="width: 279px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #339966;">Article proposé en
                commande fournisseur</span></p>
              </td>
              <td width="257"
              style="width: 257px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #ff0000;">Article non
                commandé.</span></p>
              </td>
            </tr>
            <tr align="left">
              <td width="129"
              style="width: 129px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0371.gif" width="82"
                height="23" border="0" alt="Clip0371"></p>
              </td>
              <td width="245"
              style="width: 245px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0373.gif" width="227"
                height="32" border="0" alt="Clip0373"></p>
              </td>
              <td width="241"
              style="width: 241px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0376.jpg" width="162"
                height="20" border="0" alt="clip0376"></p>
              </td>
              <td width="279"
              style="width: 279px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #339966;">Article proposé en
                commande fournisseur</span></p>
              </td>
              <td width="257"
              style="width: 257px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #339966;">Article
                commandé.</span></p>
              </td>
            </tr>
            <tr align="left">
              <td width="129"
              style="width: 129px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0372.gif" width="87"
                height="22" border="0" alt="Clip0372"></p>
              </td>
              <td width="245"
              style="width: 245px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0374.gif" width="233"
                height="31" border="0" alt="Clip0374"></p>
              </td>
              <td width="241"
              style="width: 241px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0376.jpg" width="162"
                height="20" border="0" alt="clip0376"></p>
              </td>
              <td width="279"
              style="width: 279px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #339966;">Article proposé en
                commande fournisseur</span></p>
              </td>
              <td width="257"
              style="width: 257px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #ff0000;">Article non
                commandé.</span></p>
              </td>
            </tr>
            <tr align="left">
              <td width="129"
              style="width: 129px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0372.gif" width="87"
                height="22" border="0" alt="Clip0372"></p>
              </td>
              <td width="245"
              style="width: 245px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0373.gif" width="227"
                height="32" border="0" alt="Clip0373"></p>
              </td>
              <td width="241"
              style="width: 241px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><img src="img/clip0376.jpg" width="162"
                height="20" border="0" alt="clip0376"></p>
              </td>
              <td width="279"
              style="width: 279px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #339966;">Article proposé en
                commande fournisseur</span></p>
              </td>
              <td width="257"
              style="width: 257px; height: 37px; border-color : #000000 #c0c0c0 #c0c0c0 #000000; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #339966;">Article
                commandé.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
