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
        href="introduction.php">Top</a>� <a
        href="utilutilisateurdescription.php">Previous</a>� <a
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

        <p>�</p>

        <p style="text-align: center;"><img src="img/clip0753eng.jpg" width="404"
        height="430" border="0" alt="clip0753eng"></p>

        <p>�</p>

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
              <td><span style="font-weight: bold;">Assurances cr�dits</span>: When checked, user has access to usage and setup 
			  for module Assurances Cr�dits.</td>
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
        style="font-weight: bold;">�</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-weight: bold;">�</span></p>
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
      <td align="left"><p>Ce menu propose de d�finir les param�tres g�n�raux du
        compte utilisateur. Une case coch�e signifie que l'utilisateur poss�de
        le droit d'acc�s. Les diff�rents droits peuvent varier avec vos options
        de licence.</p>

        <p>�</p>

        <p style="text-align: center;"><img src="img/clip0753fra.jpg" width="406"
        height="424" border="0" alt="clip0753fra"></p>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Droits limit�s</span></td>
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
                Acc�s restreint au logiciel si coch�e (cryptage), pour un
                utilisateur de base de donn�es commerciale, comme le pr�cise la
                <a href="rn650x.php">note de version 6.5.07</a>. Voir �galement
                le menu <a href="utilbasecommerciale.php">Base de donn�es
                commerciale</a> ainsi que <a
                href="utilimportcommercial.php">Import commercial</a> pour plus
                de d�tails. Ce droit est prioritaire sur les autres droits
                d'acc�s, et ne fournira qu'un acc�s extr�mement restreint aux
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
              <td><span style="font-weight: bold;">Signal�tiques</span>: Acc�s
                � la fiche <a href="articles.php">article</a> (consultation si
                d�coch�e). </td>
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
              <td><span style="font-weight: bold;">Clients</span>: Acc�s � la
                fiche <a href="client.php">client</a> (consultation si
                d�coch�e). </td>
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
              <td><span style="font-weight: bold;">Prospects</span>: Acc�s � la
                fiche <a href="prospect.php">prospect</a> (consultation si
                d�coch�e). </td>
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
              <td><span style="font-weight: bold;">Fournisseurs</span>: Acc�s �
                la fiche <a href="fournisseur.php">fournisseur</a>
                (consultation si d�coch�e). </td>
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
              <td><span style="font-weight: bold;">Base de donn�es</span>:
                Menus <span style="font-weight: bold;">Utilitaires |</span>
                <span class="f_Heading1"><a href="utilimportbase.php">Im</a>/<a
                href="utilexportbase.php">Exportation</a> de la base de donn�es
                </span><span class="f_Heading1"
                style="font-weight: normal;">gris�s si d�coch�.</span></td>
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
              <td><span style="font-weight: bold;">Utilisateurs</span>: Acc�s
                sur la fiche <a href="utilutilisateurs.php">utilisateur</a>
                (consultation si d�coch�e), et menu <span
                style="font-weight: bold;">Utilitaires | </span><span
                class="f_Heading1"><a
                href="utilregenereruser.php">R�g�nerer</a> les utilisateurs
                WinPro dans la base de donn�es </span><span class="f_Heading1"
                style="font-weight: normal;">gris� (en version 8)</span>. Celui
                qui a acc�s � cette fen�tre peut d�finir les autorisations de
                chaque utilisateur (y compris lui-m�me) et donc d�finir la
                fonction de chacun dans WinPro et dans la soci�t� </td>
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
              <td><span style="font-weight: bold;">Soci�t�</span>: Menu <span
                style="font-weight: bold;">Utilitaires |</span> <span
                style="font-weight: bold;"><a
                href="utilcoordonneessociete.php">Coordonn�es
                soci�t�</a></span> <span class="f_Heading1"
                style="font-weight: normal;">gris� si d�coch�e.</span><span
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
              <td><span style="font-weight: bold;">Prix forc�s</span>: Acc�s
                aux champs susceptible de modifier le calcul de prix lorsque
                coch�e, pas d'acc�s si d�coch�e (champs de prix et de marges de
                l'onglet <span style="font-style: italic;">Prix</span>, et de
                l'onglet <span style="font-style: italic;">Ch�ssis</span>).</td>
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
                l'acc�s � la gestion de stock (fiche <a
                href="artstock.php">article</a>) et aux commandes fournisseurs
                (menu <a href="artstock.php">Stock</a>) lorsque
                coch�e.</td>
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
              <td><span style="font-weight: bold;">Pr�f�rences</span>: Menu
                <span style="font-weight: bold;">Utilitaires |</span> <span
                style="font-weight: bold;"><a
                href="utilpreferences.php">Pr�f�rences</a></span> <span
                class="f_Heading1" style="font-weight: normal;">gris� si
                d�coch�e.</span><span class="f_Heading1"></span></td>
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
                d�coch�e, les menus <span style="font-weight: bold;">Divers |
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
                d�coch�e, le menu <span style="font-weight: bold;">Technique
                </span>est limit� � la consultation, et certains sous-menus
                sont gris�s, exceptions faites des sous-menus <span
                style="font-weight: bold;">Casiers de chute</span>, <span
                style="font-weight: bold;">Poste atelier</span> et <span
                style="font-weight: bold;">Incidents</span> du menu <span
                style="font-weight: bold;">Technique | Production</span>, ainsi
                que des sous-menus <span style="font-weight: bold;">Warm
                edge</span>, <span style="font-weight: bold;">Vitrage</span>,
                <span style="font-weight: bold;">Panneaux</span>, <span
                style="font-weight: bold;">Panneaux d�coratifs</span>, <span
                style="font-weight: bold;">Cat�gories de panneaux</span>, <span
                style="font-weight: bold;">Norme de verre</span>, <span
                style="font-weight: bold;">Norme de vent</span> et <span
                style="font-weight: bold;">Finition</span> du menu <span
                style="font-weight: bold;">Technique | Ch�ssis</span>, du menu
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
                d�coch�e, l'utilisateur n'a pas acc�s au module de reporting
                WpReport. Les menus <span style="font-weight: bold;">Rapport |
                Cr�ation</span> et <span style="font-weight: bold;">Rapport |
                Documents types</span> sont gris�s (en version 8)<span
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
                coch�e, l'utilisateur a acc�s � l'onglet <a
                href="cltdirection.php">Direction de la fiche client</a>, et
                peut forcer des dates de visites chez le <a
                href="cltvisite.php">client</a> pour le <a
                href="represvisites.php">repr�sentant</a><span
                class="f_Heading1" style="font-weight: normal;">.
                </span>Consultez la <a href="rn723x.php">note de version
                7.2.30</a> pour plus de d�tails sur le module <span
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
              <td><span style="font-weight: bold;">Assurances cr�dits</span>: Lorsque
                coch�e, l'utilisateur a acc�s au param�trage et � l'utilisation des Assurances Cr�dits.</td>
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
                coch�e, l'utilisateur a acc�s au param�trage du <a href="modulethermique.php">Module Thermique</a>.</td>
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
                d�coch�e, l'utilisateur ne peut cr�er ou modifier une commande
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
                Lorsque d�coch�e, l'utilisateur ne peut supprimer une commande
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
              <td><span style="font-weight: bold;">Modif. �tat cde</span>:
                Lorsque d�coch�e, l'utilisateur n'a pas acc�s aux menus <span
                style="font-weight: bold;">Utilitaires | <a
                href="utilmodifieretatcommande.php">Modifier</a> l'�tat d'une
                commande</span> et <span style="font-weight: bold;">Utilitaires
                | <a href="utilmodifieretatchassis.php">Modifier</a> l'�tat
                d'un ch�ssis</span>.</td>
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
                Acc�s aux prix de revient dans la commande ou le devis, ainsi
                que dans la fiche article (prix masqu�s si d�coch�e). </td>
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
              <td><span style="font-weight: bold;">Tarif</span>: Acc�s aux
                tarifs de ch�ssis et de volet (menu <span
                style="font-weight: bold;">Divers | Tarifs | Ch�ssis</span> et
                <span style="font-weight: bold;">Divers | Tarifs |
                Volet</span>), y compris depuis la biblioth�que de ch�ssis en
                version 8 (Menu <span style="font-weight: bold;">Commandes |
                Biblioth�ques</span>). Lorsque d�coch�e, ces options et menus
                sont gris�s.</td>
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
              <td><span style="font-weight: bold;">Comptabilit�</span>: Acc�s
                aux informations de comptabilit� concernant les <a
                href="utiltauxtva.php">Taux de TVA</a>. Le menu <span
                style="font-weight: bold;">Utilitaires | Taux de TVA </span>est
                gris� lorsque la case est d�coch�e.</td>
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
                Acc�s au param�trage du fichier vitrage, menu <span
                style="font-weight: bold;">Technique | Ch�ssis |
                Vitrages</span>. Lorsque d�coch�e, l'utilisateur n'a acc�s aux
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
                Acc�s au param�trage du fichier de panneaux � d�couper et
                panneaux d�coratifs, menu <span
                style="font-weight: bold;">Technique | Ch�ssis |
                Panneaux</span> et <span style="font-weight: bold;">Technique |
                Ch�ssis | Panneaux d�coratifs</span>. Lorsque d�coch�e,
                l'utilisateur n'a acc�s � ces fiches qu'en consultation.</td>
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
                Acc�s au param�trage des palettes de livraison. Les sous-menus
                du menu <span style="font-weight: bold;">Donn�es |
                Palettes</span> sont gris�s, ou bien accessible en consultation
                seulement, lorsque la case est d�coch�e.</td>
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
                multi-site</span>: Lorsque coch�e, cette case autorise
                l'utilisateur � importer des commandes et devis provenant de
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
              <td><span style="font-weight: bold;">Biblioth�ques</span>:
                Lorsque d�coch�e, le menu <span
                style="font-weight: bold;">Commandes | Biblioth�ques </span>est
                gris�, l'utilisateur ne peut cr�er ou modifier une biblioth�que
                de ch�ssis.</td>
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
                dates</span>: Lorsque coch�e, l'utilisateur � acc�s au param�trage du module 
				<span style="font-weight: bold;">DAT Calcul de dates
                automatis�</span>, comme d�crit dans la note de version <a
                href="rn723x.php">note de version 7.2.32</a>, et notamment au param�trage des 
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
                Lorsque coch�e, l'utilisateur � acc�s � la colonne <span
                style="font-weight: bold;">Forcer la date </span>ainsi qu'� la
                case � cocher <span style="font-weight: bold;">Valider la
                date</span> de l'onglet <span style="font-style: italic;">Dates
                </span>de la commande ou du devis. Uniquement si vous utilisez
                le module <span style="font-weight: bold;">DAT Calcul de dates
                automatis�</span>, comme d�crit dans la note de version <a
                href="rn723x.php">note de version 7.2.32</a>. Voir �galement
                les menus <span style="font-weight: bold;">Donn�es | Autres
                donn�es | <a href="typedate.php">Types</a> de dates </span>et
                <span style="font-weight: bold;">Donn�es | Autres donn�es | <a
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
                Settings</span>: Lorsque d�coch�e, le menu <span
                style="font-weight: bold;">Utilitaires | <a
                href="utilmodificationsettings.php">Modification</a> Settings
                </span>est gris� pour l'utilisateur.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-weight: bold;">�</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-weight: bold;">�</span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
