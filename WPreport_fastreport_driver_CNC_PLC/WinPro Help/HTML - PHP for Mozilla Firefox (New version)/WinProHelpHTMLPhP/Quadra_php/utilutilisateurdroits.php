<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Rights","Droits"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utilutilisateurdroits.php"; }
else { parent.quicksync('a9.9.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Droits</title>
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
        href="utilutilisateurdescription.php">Previous</a>  <a
        href="utilutilisateurgestionprod.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This menu defines the general settings for user account rights. When a box is checked, the right is
	  granted. The rights may vary according licence options.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0753eng.jpg" width="404"
        height="430" border="0" alt="clip0753eng"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Limited rights</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Commercial user</span>:
                Restricted software access when checked (encryption) for the commercial database user, as defined into 
				<a href="rn650x.php">release note version 6.5.07</a>. Also refer to menus 
				<a href="utilbasecommerciale.php">Create sales technical database</a> and 
				<a href="utilimportcommercial.php">Commercial import</a> for more details. 
				This access right has priority onto other rights, and will only give an etremely restricted access to data 
				because of encryption.</td>
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
              <td><span style="font-weight: bold;">Rights</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Descriptions</span>: Access to <a href="articles.php">article</a> record 
			  (vizualisation only when unchecked).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Customers</span>: Access to <a href="client.php">customer</a> record 
			  (vizualisation only when unchecked).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Prospects</span>: Access to <a href="prospect.php">prospect</a> record 
			  (vizualisation only when unchecked).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Suppliers</span>: Access to <a href="fournisseur.php">supplier</a> record 
			  (vizualisation only when unchecked).</td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Database</span>:
                Menus <span style="font-weight: bold;">Tools |</span>
                <span class="f_Heading1"><a href="utilimportbase.php">Im</a>/<a
                href="utilexportbase.php">Export</a> database</span><span class="f_Heading1"
                style="font-weight: normal;"> greyed when unchecked.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Users</span>: Access to <a href="utilutilisateurs.php">user</a> record 
			  (vizualisation only when unchecked), and menu <span style="font-weight: bold;">Tools | </span><span
                class="f_Heading1"><a href="utilregenereruser.php">Re-create</a> WinPro users in database </span>
				<span class="f_Heading1" style="font-weight: normal;">greyed (with version 8)</span>. The people having access to
				this menu may define access rights for each user (including himself), and then define the function of any user from
				the company within the software.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Company</span>: Menu <span
                style="font-weight: bold;">Tools |</span> <span
                style="font-weight: bold;"><a
                href="utilcoordonneessociete.php">company address</a></span> <span class="f_Heading1"
                style="font-weight: normal;">greyed when unchecked.</span><span
                class="f_Heading1"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Forced prices</span>: Access right to fields related to price computation when
			  checked, no access when unchecked (price and margin fields from <span style="font-style: italic;">Price</span> and 
			  <span style="font-style: italic;">Window</span> tabs).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Stock</span>: Access granted to stock management features 
			  (<a href="artstock.php">article</a> record) and supplier order management 
			  (<a href="stock.php">Stock</a> menu) when checked.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Preferences</span>: Menu
                <span style="font-weight: bold;">Tools |</span> <span
                style="font-weight: bold;"><a
                href="utilpreferences.php">Preferences</a></span> <span
                class="f_Heading1" style="font-weight: normal;">greyed when unchecked.</span><span class="f_Heading1"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Translations</span>: When unchecked, menus 
			  <span style="font-weight: bold;">Miscellaneous |
                Translations</span> and <span style="font-weight: bold;">Miscellaneous |
                Im/Export translations</span> are unavailable<span
                class="f_Heading1" style="font-weight: normal;">.</span><span
                class="f_Heading1"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Technics</span>: When unchecked, 
			  the <span style="font-weight: bold;">Technics</span> is limited to vizualisation, and various sub menus are greyed 
			  except sub-menus <span style="font-weight: bold;">Waste boxes</span>, 
			  <span style="font-weight: bold;">Production spot</span> and <span
                style="font-weight: bold;">Incidents</span> from menu <span
                style="font-weight: bold;">Technics | Production</span>, as well as sub-menus 
				<span style="font-weight: bold;">Warm edge</span>, <span style="font-weight: bold;">Glazings</span>,
                <span style="font-weight: bold;">Plain panels</span>, <span
                style="font-weight: bold;">Decrorative panels</span>, <span
                style="font-weight: bold;">Panel categories</span>, <span
                style="font-weight: bold;">Glass norm</span>, <span
                style="font-weight: bold;">Wind pressure norm</span> and <span
                style="font-weight: bold;">Finishing</span> from menu <span
                style="font-weight: bold;">Technics | Window</span>, and along with menus
                <span style="font-weight: bold;">Technics | Thermic coefficient</span> and 
				<span style="font-weight: bold;">Technics | Lists</span><span class="f_Heading1"
                style="font-weight: normal;">.</span><span
                class="f_Heading1"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Wp-Report</span>: When unchecked, the user is not granted for using reporting 
			  module WpReport. Menus <span style="font-weight: bold;">Report |
                Creation</span> and <span style="font-weight: bold;">Report | Documents types</span> are greyed (version 8)<span
                class="f_Heading1" style="font-weight: normal;">.</span><span
                class="f_Heading1"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Management</span>: When checked, user is granted to access 
			  <a href="cltdirection.php">management tab from customer record</a>, and may force the visit dates at the 
			  <a href="cltvisite.php">customer</a>'s place for the <a
                href="represvisites.php">salesman</a><span
                class="f_Heading1" style="font-weight: normal;">.
                </span>Refer to <a href="rn723x.php">release note version
                7.2.30</a> for more details about module <span
                style="font-weight: bold;">CRM</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Assurances crédits</span>: When checked, user has access to usage and setup 
			  for module Assurances Crédits.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Param. module thermique</span>: When checked, user has access to set up of 
			  <a href="modulethermique.php">Thermic Module</a>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Orders</span>: When unchecked, the user cannot create or modify an order or
			  quote, but only vizualise it</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Order deletion</span>:
                When unchecked, the user cannot delete an existing order or quote.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Change order status</span>:
                When unchecked, the user cannot access menus <span style="font-weight: bold;">Tools | <a
                href="utilmodifieretatcommande.php">Change</a> order status</span> and <span style="font-weight: bold;">Tools
                | <a href="utilmodifieretatchassis.php">Change</a> window status</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Cost price</span>:
                Access to cost price within an order or quotation, as well as within an article record (price masked when 
				unchecked). </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Price list</span>: Access to window or roller shutter price lists (menu <span
                style="font-weight: bold;">Miscellaneous | Price lists | Window</span> and
                <span style="font-weight: bold;">Miscellaneous | Price lists | Roller shutter</span>), including from window 
				libraries into version 8 (Menu <span style="font-weight: bold;">Orders | Libraries</span>). When unchecked, 
				those options and menus are greyed.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Accounting</span>: Access to accounting data about 
			  <a href="utiltauxtva.php">VAT codes</a>. Menu <span style="font-weight: bold;">Tools | VAT codes</span> is 
			  greyed when unchecked.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Glazings param.</span>:
                Set up access to glass unit record, menu <span
                style="font-weight: bold;">Technics | Window | Glazings</span>. Vizualisation only when unchecked.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Panels param.</span>:
                Set up access to plain and decorative panel record, menus <span
                style="font-weight: bold;">Technics | Window | Plain panels</span> and <span
                style="font-weight: bold;">Technics | Window | Decorative panels</span>. Vizualisation only when unchecked.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Delivery param.</span>:
                Set up access to transport rack records, menu <span
                style="font-weight: bold;">Data | Racks</span>. Vizualisation only when unchecked.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Supplier EDI</span>:
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Multi-site import</span>: When checked, the user is granted to import orders 
			  and quotations from multiple production sites. Only when using <span style="font-weight: bold;">Multi-sites</span> 
			  module.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Archive imports</span>:
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Libraries</span>:
                When unchecked, menu <span style="font-weight: bold;">Orders | Libraries</span> is greyed, the user cannot 
				create or modify a library.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Date configuration</span>: When checked, the user has access to set up for 
			  module <span style="font-weight: bold;">DAT Automatic dates computation</span>, as described into 
			  <a href="rn723x.php">release note version 7.2.32</a>, and particularly to set up for  
				<a href="typedate.php">Types of date</a> and <a href="configurationniveaudates.php">Configuration of dates level</a>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Validation of the dates</span>:
                When checked, user has access to column <span
                style="font-weight: bold;">Force date</span> as well as access to checkbox 
				<span style="font-weight: bold;">Validate the date</span> within <span style="font-style: italic;">Dates</span> 
				tab of an order or quote. Only for users of module <span style="font-weight: bold;">DAT Automatic date 
				computation</span>, as described into <a href="rn723x.php">release note version 7.2.32</a>. See also menus 
				<span style="font-weight: bold;">Data | Miscellaneous | <a href="typedate.php">Types</a> of dates</span> and 
				<span style="font-weight: bold;">Data | Miscellaneous | <a href="configurationniveaudates.php">Configuration</a> of
				the dates level</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Edit Settings</span>: When unchecked, menu <span
                style="font-weight: bold;">Tools | <a
                href="utilmodificationsettings.php">Edit</a> Settings</span> is greyed for the user.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-weight: bold;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-weight: bold;"> </span></p>
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
      <td align="left"><p>Ce menu propose de définir les paramètres généraux du
        compte utilisateur. Une case cochée signifie que l'utilisateur possède
        le droit d'accès. Les différents droits peuvent varier avec vos options
        de licence.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0753fra.jpg" width="406"
        height="424" border="0" alt="clip0753fra"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Droits limités</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Encodage commercial</span>:
                Accès restreint au logiciel si cochée (cryptage), pour un
                utilisateur de base de données commerciale, comme le précise la
                <a href="rn650x.php">note de version 6.5.07</a>. Voir également
                le menu <a href="utilbasecommerciale.php">Base de données
                commerciale</a> ainsi que <a
                href="utilimportcommercial.php">Import commercial</a> pour plus
                de détails. Ce droit est prioritaire sur les autres droits
                d'accès, et ne fournira qu'un accès extrêmement restreint aux
                informations du fait du cryptage.</td>
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
              <td><span style="font-weight: bold;">Droits </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Signalétiques</span>: Accès
                à la fiche <a href="articles.php">article</a> (consultation si
                décochée). </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Clients</span>: Accès à la
                fiche <a href="client.php">client</a> (consultation si
                décochée). </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Prospects</span>: Accès à la
                fiche <a href="prospect.php">prospect</a> (consultation si
                décochée). </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Fournisseurs</span>: Accès à
                la fiche <a href="fournisseur.php">fournisseur</a>
                (consultation si décochée). </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Base de données</span>:
                Menus <span style="font-weight: bold;">Utilitaires |</span>
                <span class="f_Heading1"><a href="utilimportbase.php">Im</a>/<a
                href="utilexportbase.php">Exportation</a> de la base de données
                </span><span class="f_Heading1"
                style="font-weight: normal;">grisés si décoché.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Utilisateurs</span>: Accès
                sur la fiche <a href="utilutilisateurs.php">utilisateur</a>
                (consultation si décochée), et menu <span
                style="font-weight: bold;">Utilitaires | </span><span
                class="f_Heading1"><a
                href="utilregenereruser.php">Régénerer</a> les utilisateurs
                WinPro dans la base de données </span><span class="f_Heading1"
                style="font-weight: normal;">grisé (en version 8)</span>. Celui
                qui a accès à cette fenêtre peut définir les autorisations de
                chaque utilisateur (y compris lui-même) et donc définir la
                fonction de chacun dans WinPro et dans la société </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Société</span>: Menu <span
                style="font-weight: bold;">Utilitaires |</span> <span
                style="font-weight: bold;"><a
                href="utilcoordonneessociete.php">Coordonnées
                société</a></span> <span class="f_Heading1"
                style="font-weight: normal;">grisé si décochée.</span><span
                class="f_Heading1"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Prix forcés</span>: Accès
                aux champs susceptible de modifier le calcul de prix lorsque
                cochée, pas d'accès si décochée (champs de prix et de marges de
                l'onglet <span style="font-style: italic;">Prix</span>, et de
                l'onglet <span style="font-style: italic;">Châssis</span>).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Stock</span>: Autorise
                l'accès à la gestion de stock (fiche <a
                href="artstock.php">article</a>) et aux commandes fournisseurs
                (menu <a href="artstock.php">Stock</a>) lorsque
                cochée.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Préférences</span>: Menu
                <span style="font-weight: bold;">Utilitaires |</span> <span
                style="font-weight: bold;"><a
                href="utilpreferences.php">Préférences</a></span> <span
                class="f_Heading1" style="font-weight: normal;">grisé si
                décochée.</span><span class="f_Heading1"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Traductions</span>: Lorsque
                décochée, les menus <span style="font-weight: bold;">Divers |
                Traductions</span>, <span style="font-weight: bold;">Divers |
                Im/Exporter les traductions</span> sont inaccessibles<span
                class="f_Heading1" style="font-weight: normal;">.</span><span
                class="f_Heading1"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Technique</span>: Lorsque
                décochée, le menu <span style="font-weight: bold;">Technique
                </span>est limité à la consultation, et certains sous-menus
                sont grisés, exceptions faites des sous-menus <span
                style="font-weight: bold;">Casiers de chute</span>, <span
                style="font-weight: bold;">Poste atelier</span> et <span
                style="font-weight: bold;">Incidents</span> du menu <span
                style="font-weight: bold;">Technique | Production</span>, ainsi
                que des sous-menus <span style="font-weight: bold;">Warm
                edge</span>, <span style="font-weight: bold;">Vitrage</span>,
                <span style="font-weight: bold;">Panneaux</span>, <span
                style="font-weight: bold;">Panneaux décoratifs</span>, <span
                style="font-weight: bold;">Catégories de panneaux</span>, <span
                style="font-weight: bold;">Norme de verre</span>, <span
                style="font-weight: bold;">Norme de vent</span> et <span
                style="font-weight: bold;">Finition</span> du menu <span
                style="font-weight: bold;">Technique | Châssis</span>, du menu
                <span style="font-weight: bold;">Technique | Coefficient
                thermique </span>et <span style="font-weight: bold;">Technique
                | Listes</span><span class="f_Heading1"
                style="font-weight: normal;">.</span><span
                class="f_Heading1"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Wp-Report</span>: Lorsque
                décochée, l'utilisateur n'a pas accès au module de reporting
                WpReport. Les menus <span style="font-weight: bold;">Rapport |
                Création</span> et <span style="font-weight: bold;">Rapport |
                Documents types</span> sont grisés (en version 8)<span
                class="f_Heading1" style="font-weight: normal;">.</span><span
                class="f_Heading1"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Direction</span>: Lorsque
                cochée, l'utilisateur a accès à l'onglet <a
                href="cltdirection.php">Direction de la fiche client</a>, et
                peut forcer des dates de visites chez le <a
                href="cltvisite.php">client</a> pour le <a
                href="represvisites.php">représentant</a><span
                class="f_Heading1" style="font-weight: normal;">.
                </span>Consultez la <a href="rn723x.php">note de version
                7.2.30</a> pour plus de détails sur le module <span
                style="font-weight: bold;">CRM</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Assurances crédits</span>: Lorsque
                cochée, l'utilisateur a accès au paramétrage et à l'utilisation des Assurances Crédits.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Param. module thermique</span>: Lorsque
                cochée, l'utilisateur a accès au paramétrage du <a href="modulethermique.php">Module Thermique</a>.</td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Commandes</span>: Lorsque
                décochée, l'utilisateur ne peut créer ou modifier une commande
                ou un devis, mais seulement les consulter<span
                class="f_Heading1" style="font-weight: normal;">.</span><span
                class="f_Heading1"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Suppr. commandes</span>:
                Lorsque décochée, l'utilisateur ne peut supprimer une commande
                ou un devis existant<span class="f_Heading1"
                style="font-weight: normal;">.</span><span
                class="f_Heading1"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Modif. état cde</span>:
                Lorsque décochée, l'utilisateur n'a pas accès aux menus <span
                style="font-weight: bold;">Utilitaires | <a
                href="utilmodifieretatcommande.php">Modifier</a> l'état d'une
                commande</span> et <span style="font-weight: bold;">Utilitaires
                | <a href="utilmodifieretatchassis.php">Modifier</a> l'état
                d'un châssis</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Prix de revient</span>:
                Accès aux prix de revient dans la commande ou le devis, ainsi
                que dans la fiche article (prix masqués si décochée). </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Tarif</span>: Accès aux
                tarifs de châssis et de volet (menu <span
                style="font-weight: bold;">Divers | Tarifs | Châssis</span> et
                <span style="font-weight: bold;">Divers | Tarifs |
                Volet</span>), y compris depuis la bibliothèque de châssis en
                version 8 (Menu <span style="font-weight: bold;">Commandes |
                Bibliothèques</span>). Lorsque décochée, ces options et menus
                sont grisés.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Comptabilité</span>: Accès
                aux informations de comptabilité concernant les <a
                href="utiltauxtva.php">Taux de TVA</a>. Le menu <span
                style="font-weight: bold;">Utilitaires | Taux de TVA </span>est
                grisé lorsque la case est décochée.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Param. vitrages</span>:
                Accès au paramétrage du fichier vitrage, menu <span
                style="font-weight: bold;">Technique | Châssis |
                Vitrages</span>. Lorsque décochée, l'utilisateur n'a accès aux
                fiches vitrages qu'en consultation.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Param. panneaux</span>:
                Accès au paramétrage du fichier de panneaux à découper et
                panneaux décoratifs, menu <span
                style="font-weight: bold;">Technique | Châssis |
                Panneaux</span> et <span style="font-weight: bold;">Technique |
                Châssis | Panneaux décoratifs</span>. Lorsque décochée,
                l'utilisateur n'a accès à ces fiches qu'en consultation.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Param. livraison</span>:
                Accès au paramétrage des palettes de livraison. Les sous-menus
                du menu <span style="font-weight: bold;">Données |
                Palettes</span> sont grisés, ou bien accessible en consultation
                seulement, lorsque la case est décochée.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Liaison fournisseur</span>:
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Importation
                multi-site</span>: Lorsque cochée, cette case autorise
                l'utilisateur à importer des commandes et devis provenant de
                sites multiples. Uniquement lorsque vous utilisez le module
                <span style="font-weight: bold;">Multi-sites</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Importation archive</span>:
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Bibliothèques</span>:
                Lorsque décochée, le menu <span
                style="font-weight: bold;">Commandes | Bibliothèques </span>est
                grisé, l'utilisateur ne peut créer ou modifier une bibliothèque
                de châssis.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Configuration des
                dates</span>: Lorsque cochée, l'utilisateur à accès au paramétrage du module 
				<span style="font-weight: bold;">DAT Calcul de dates
                automatisé</span>, comme décrit dans la note de version <a
                href="rn723x.php">note de version 7.2.32</a>, et notamment au paramétrage des 
				<a href="typedate.php">Types de dates</a> et des <a href="configurationniveaudates.php">Configuration de 
				niveaux de dates</a>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Validation des dates</span>:
                Lorsque cochée, l'utilisateur à accès à la colonne <span
                style="font-weight: bold;">Forcer la date </span>ainsi qu'à la
                case à cocher <span style="font-weight: bold;">Valider la
                date</span> de l'onglet <span style="font-style: italic;">Dates
                </span>de la commande ou du devis. Uniquement si vous utilisez
                le module <span style="font-weight: bold;">DAT Calcul de dates
                automatisé</span>, comme décrit dans la note de version <a
                href="rn723x.php">note de version 7.2.32</a>. Voir également
                les menus <span style="font-weight: bold;">Données | Autres
                données | <a href="typedate.php">Types</a> de dates </span>et
                <span style="font-weight: bold;">Données | Autres données | <a
                href="configurationniveaudates.php">Configuration</a> des
                niveaux de dates</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Modification
                Settings</span>: Lorsque décochée, le menu <span
                style="font-weight: bold;">Utilitaires | <a
                href="utilmodificationsettings.php">Modification</a> Settings
                </span>est grisé pour l'utilisateur.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-weight: bold;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-weight: bold;"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
