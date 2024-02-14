<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Description","Description","Beschrijving"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?artdescription.php"; }
else { parent.quicksync('a4.5.1'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Description</title>
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
        href="introduction.php">Top</a>� <a href="articles.php">Previous</a>�
        <a href="artfournisseur.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>�</p>

        <p>This page lets you define the general description of the article.
        Informations pertaining to the supplier are defined on the supplier
        pages.�</p>

        <p>�</p>

        <p style="text-align: center; margin: 14px 0px 0px 0px;"><img
        src="img/clip9eng.jpg" width="871" height="661" border="0"
        alt="clip9eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>: Your own
                description of the article. You can use several lines if
                necessary. Press Ctrl <span
                style="font-size: 12pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; font-weight: bold;">&crarr;</span>
                to insert a line break.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Category</span>: The <a
                href="categoriesarticle.php">category</a> to which the article
                belongs. This category is used to sort or filter on article
                lists.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Unit</span>: The base unit for the
                article: meter, piece, pair, ... WinPro does not use this field
                which is only for use onto supplier order forms and customer
                documents, when articles or profiles as accessories are used.
                It is recommended to use the meter for profiles.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">General sales account</span>: If you
                link WinPro invoices to your accounting system, this will show
                the possible account numbers, which will be used when the
                article is sold individually.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Dimension</span>: This field
                is used for packaging module. It is suitable to select the
                packaging type according length of profile to pack. (Unit :
                meter)</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Print ... labels</span>: This field
                is used only when the box <img src="img/clip11eng.jpg" width="126"
                height="20" border="0" alt="clip11eng"><span
                style="color: #000000;">is checked. The number of specified
                labels will be printed for each article when it is received
                from the supplier.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Packing type</span>: If you have the
                <span style="font-weight: bold; color: #000000;">Packing
                module</span><span style="color: #000000;">, these fields tells
                WinPro in which kind of pack the article goes. This type is for
                profiles and articles supplied by piece.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Packing type (full length)</span>:
                If you have the <span
                style="font-weight: bold; color: #000000;">Packing
                module</span><span style="color: #000000;">, these fields tells
                WinPro in which kind of pack the article goes, corresponding to
                field <img src="img/clip0081.gif" width="167" height="20"
                border="0" alt="clip0081">. This type is for profiles supplied
                by full length.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">% filling</span>: Those
                fields define the filling percentage of the article by unit or
                by full length.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Unit weight</span>: Used
                only when article is valued by Kilo. See tab "Main supplier",
                box <span style="font-weight: bold;">Aluminium profile priced
                by kg</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Check delivery delay for customer
                orders</span>: if this box is checked, WinPro will check the
                article delivery date (for the main supplier) against the
                customer order delivery date.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Order separately</span>: If this box
                is checked, when you ask WinPro to create a supplier order
                proposition, one order line will be created for each customer
                order, and will reference the customer order. When enabled, it
                is recommended to check box <img src="img/clip13eng.jpg"
                width="135" height="27" border="0" alt="clip13eng">.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Order on measure</span>: This box is
                used only when the previous box (<span
                style="font-weight: bold; color: #000000;">Order
                separately</span><span style="color: #000000;">). You must
                check this box if every article you order has a different
                dimension.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">To varnish</span>: Checking this box
                enables the <a href="artlaquage.php">Varnishing</a> page. It
                also shows an extra check box, <img src="img/clip12eng.jpg"
                width="288" height="22" border="0" alt="clip12eng"> <span
                style="color: #000000;">, which when checked means that the
                varnishing is done by a specialized supplier. In this case,
                WinPro will issue a varnishing order to the supplier, rather
                than a varnishing list for your factory.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Do not add colour in
                description</span>: Check this box to prevent WinPro from
                adding the window colour to in front of the profile
              description.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Promotional article</span><span
                style="color: #000000;">: When this box is checked, the article
                can be used in the list of promotional articles of the
                </span><span
                style="font-weight: bold; color: #000000;">Commercial</span>
                <span style="color: #000000;">page of the customer definition.
                It will also be automatically inserted in that list when
                creating a delivery note containing such articles. </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Not visible in WinPro/D</span><span
                style="color: #000000;">: When this box is checked, the article
                is not visible to the users of WinPro/D, although it is still
                present in WinPro/D's database. This is similar to selecting
                the '</span><span
                style="font-weight: bold; color: #000000;">Not
                listed</span><span style="color: #000000;">' option explained
                above, but only for WinPro/D.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Exclude from WinPro/D</span><span
                style="color: #000000;">: When this box is checked, the article
                is not copied in the WinPro/D database. Use this with caution,
                because if any construction references the article, WinPro/D
                will generate an error! Use it only for special article which
                are not related to window components, such as tools, office
                supplies, ...</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Net price</span>: When
                enabled, the article is excluded from the automatic routine for
                assigning a discount onto buying price, which is called from
                menu <span style="font-weight: bold;">Tools |� <a
                href="utilremiseachat.php">Discount</a> onto buying
                price</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">To translate</span>: Only
                the checked articles will be listed into thye translation
                dialog. See <a href="traductions.php">translation</a>
              feature.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">List cost price</span><span
                style="color: #000000;">: This fields holds the official cost
                price of the article. See the <a
                href="articles.php">Definition</a> page for more information on
                prices.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><img src="img/clip0080.gif"
                width="19" height="22" border="0" alt="clip0080"><span
                style="font-weight: bold;">button</span><span
                style="color: #000000;">: You must click this button to be able
                to input a value in the list cost price. This is to remind you
                that any change in that field has an impact on your selling
                price!</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Additional margin</span><span
                style="color: #000000;">: This extra margin will be applied to
                the cost price before computing the final selling
              price.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Selling price</span><span
                style="color: #000000;">: You can define up to 3 selling
                prices, which are used when you sell the article individually.
                Each selling will be applied depending on the quantity
                sold.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Per unit + fixed price</span><span
                style="color: #000000;">: Fixed price to add to the selling
                price when the article is sold per unit.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">By ... units</span><span
                style="color: #000000;">: Quantites that trigger the second or
                third selling price.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Article page </span><span
                style="color: #000000;">or</span><span
                style="font-weight: bold; color: #000000;">Profile page
                </span><span style="color: #000000;">or</span><span
                style="font-weight: bold; color: #000000;">Not listed</span>
                <span style="color: #000000;">: When </span><span
                style="font-weight: bold; color: #000000;">Article
                page</span><span style="color: #000000;">is selected, you can
                type the article in the articles page of the order; when
                </span><span style="font-weight: bold; color: #000000;">Profile
                page</span><span style="color: #000000;">is selected, you can
                type it in the profiles page, and when </span> <span
                style="font-weight: bold; color: #000000;">Not
                listed</span><span style="color: #000000;">is selected, you
                cannot sell it separately.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Simpl. factory document</span><span
                style="color: #000000;">: Check this box to let the article
                appear <span
                style="text-decoration: underline;">systematically</span> on
                simplified factory documents (from the "Actions" tab or from
                optimization menus). When checked, WinPro does not consider
                variable <span class="f_Variables">SimplFacDoc</span>
                anymore.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Quality control</span><span
                style="color: #000000;">: Check this box to let the article
                appear <span
                style="text-decoration: underline;">systematically</span> on
                quality control documents (from the "Actions" tab or
                optimization menus). </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Customer documents</span><span
                style="color: #000000;">: Check this box to let the article
                appear <span
                style="text-decoration: underline;">systematically</span> on
                customer documents. (with quantity, description, and length if
                applicable). Concerned documents are Quotation, Confirmation
                and Delivery Note.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Valued</span><span
                style="color: #000000;">: Check this box to let the price of
                the article appear <span
                style="text-decoration: underline;">systematically</span> on
                customer documents (additionally, the <img src="img/clip15eng.jpg"
                width="91" height="22" border="0" alt="clip15eng"> box is
                checked when box <img src="img/clip14eng.jpg" width="152"
                height="20" border="0" alt="clip14eng"> is enabled, and the
                detailed price must be enabled in the customer order). Customer
                documents are: Detailled quotation, Confirmation, Delivery
                note. Valuation is based onto selling price, otherwise WinPro
                will used cost price and apply the price
              coefficient.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Delivery preparation</span><span
                style="color: #000000;">: Check this box to let the article
                appear <span
                style="text-decoration: underline;">systematically</span> on
                delivery preparation documents (printed from menu Order -
                Delivery management. </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Stock preparation
                document</span><span style="color: #000000;">: Check this box
                to let the article appear <span
                style="text-decoration: underline;">systematically</span> on
                stock preparation documents, which are printed when launching a
                production job. </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>
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
      <td align="left"><p>�</p>

        <p>Cet onglet vous permet de d�finir la description g�n�rale de
        l'article. Les informations concernant le fournisseur sont d�finies aux
        onglets de "Fourn. princ", "Fourn. n�2", ...</p>

        <p>�</p>

        <p style="text-align: center;"><img src="img/clip9fra.jpg" width="854"
        height="603" border="0" alt="clip9fra"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>: Votre
                description de l'article. Vous disposez de plusieurs lignes si
                n�cessaire. Pressez Ctrl <span
                style="font-size: 12pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; font-weight: bold;">&crarr;</span>
                pour ins�rer un saut de ligne.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Cat�gorie</span>: Indique la
                <a href="categoriesarticle.php">cat�gorie</a> � laquelle
                l'article appartient. Cette cat�gorie peut �tre utilis�e comme
                cl� de tri ou de cl� de s�lection pour les inventaires, les
                augmentations de prix d'achat, etc</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Unit� de mesure</span>: Indique
                l'unit� de mesure utilis�e pour cet article (pi�ce, m�tre,
                cartouche, ...). Winpro ne base aucun calcul sur ce champ, il
                n'est utilis� qu'� l'impression des commandes fournisseur et
                des documents client lorsqu'ils contiennent des articles et
                profils en accessoires. Il est tr�s recommand� de d�finir le
                m�tre pour les profils.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Imputation comptable</span>:
                Si vous disposez d'un module de liaison comptable pour la
                facturation, ce contr�le contient la liste des imputations
                comptables. S�lectionnez-en une pour que l'article, lorsqu'il
                est vendu individuellement (c'est � dire hors fabrication) soit
                imput� sp�cifiquement en comptabilit�.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Dimension</span>: Ce champ
                est utilis� pour la gestion des colis. Il permet � Winpro de
                s�lectionner le type de colis en fonction de la longueur du
                profil � coliser. (Unit� : le m�tre)</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Imprimer...�tiquettes � la
                r�ception</span>: Ce champ est uniquement utilis� lorsque la
                case <img src="img/clip0078.gif" width="159" height="16" border="0"
                alt="clip0078"> est coch�e. L'impression de l'�tiquette en x
                exemplaires se produira pour chaque article r�ceptionn� en
                provenance du fournisseur, pour autant que l'article en
                question n'ai pas �t� command� via une commande fournisseur
                saisie manuellement.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Type de colis</span>: Si le
                module 'Gestion des colis' est activ� dans votre licence, ce
                champ vous permet de sp�cifier le type d'emballage qui sera
                utilis� pour la pr�paration de la livraison des articles
                accessoires.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Type de colis longueur
                enti�re</span>: Ce champ vous permet de sp�cifier quel type
                d'emballage il faut alors utilis� lorsque la quantit�
                d'articles � coliser correspond au contenu du champ <img
                src="img/clip0081.gif" width="167" height="20" border="0"
                alt="clip0081"></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">% remplissage</span>: Ces 2
                champs d�finissent le taux d'occupation de cet article par
                unit� ou pour une longueur enti�re.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Poids unitaire</span>: N'est
                utilis� par Winpro que si la valorisation de l'article se
                d�termine au Kilo. Voir l'onglet "Fourn. principal" section,
                <span style="font-weight: bold;">Profil achet� au kg</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Tenir compte du d�lai de
                livraison pour les confirmations client</span>: Si cette case
                est coch�e, WinPro v�rifiera le d�lai de livraison de cet
                article (aupr�s du fournisseur principal) par rapport au d�lai
                de livraison de la commande (en tenant compte �galement du jour
                de livraison du fournisseur et du client s'ils ont �t�
                pr�cis�s).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Commander
                individuellement</span>: Quand cette case est coch�e, et que
                WinPro cr�e une proposition de commande automatique, les
                articles, au lieu d'�tre group�s sur une seule ligne de
                commande fournisseur pour toutes les commandes client, sont
                d�taill�s par commande client, avec r�f�rence � la commande
                client sur la ligne de commande fournisseur.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 13px;">Lorsque cette case est activ�e, il
        est alors conseill� d'activer la case <img src="img/clip0079.gif"
        width="76" height="16" border="0" alt="clip0079">.</p>

        <p style="margin: 0px 0px 0px 13px;">�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Commander sur mesure</span>:
                Ce champ est uniquement utilis� lorsque la case <img
                src="img/clip0078.gif" width="159" height="16" border="0"
                alt="clip0078"> est coch�e. Vous devez cocher cette case si
                chaque article que vous commandez inclut des mesures
                diff�rentes pour chaque pi�ce.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">A laquer</span>: Vous pouvez
                indiquer, pour chaque article, qu'il doit �tre laqu� <img
                src="img/clip0086.gif" width="316" height="16" border="0"
                alt="clip0086">. Le type et la quantit� de laque sont alors
                indiqu�s dans l'onglet "<span style="color: #0000ff;"><a
                href="artlaquage.php">Laquage</a></span>". <br>
                Vous pouvez en plus indiquer que le laquage se fait chez un
                sous-traitant. Suivant que l'article est laqu� sur place ou que
                le laquage est sous-trait�, vous pourrez imprimer une liste de
                laquage ou un bon de commande de laquage lors de
              l'optimisation.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 13px;">S'il s'agit d'un profil compos�,
        le laquage sera sp�cifi� au niveau de chacun de ses composants. <br>
        Toutefois, vous pouvez sp�cifier, dans le cas o� le profil est laqu�
        d'une seule couleur, que le laquage doit �tre appliqu� sur le profil
        entier assembl�, et non sur ses composants s�par�ment. Dans ce dernier
        cas, vous pouvez aussi sp�cifier si le laquage est sous-trait�.</p>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Commander sans
                couleur</span>: Cochez cette case pour emp�cher WinPro
                d'inclure automatiquement la couleur devant la description de
                l'article.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Mat�riel Promotionnel</span>: Si
                cette case est coch�e, l'article sera utilisable dans la liste
                de mat�riel promotionnel attribu�e � chaque client (onglet
                <span
                style="font-weight: bold; color: #000000;">Commercial</span> de
                la fiche client).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Invisible dans
                WinPro/D</span>: Si cette case est coch�e, l'article est copi�
                dans la base de donn�es de WinPro/D, mais ne pourra pas �tre
                utilis� dans les onglets "Articles" ou "Profils" des commandes
                client, quelle que soit la s�lection dans le contr�le d�crit
                ci-dessus.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Exclure de WinPro/D</span>:
                Si cette case est coch�e, l'article n'est pas copi� vers la
                base de donn�es de WinPro/D. Attention, si cet article est
                utilis� dans le calcul des menuiseries, et que vous ne le
                copiez pas, cela g�n�rera une erreur dans WinPro/D.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Prix Net</span>: Lorsque
                cette case est activ�e, l'article sera exclus de la proc�dure
                d'affectation automatique d'une remise au prix d'achat. Cette
                proc�dure est appel�e via le menu <span
                style="font-weight: bold;">Utilitaire |� <a
                href="utilremiseachat.php">Remise</a> sur le prix
                d'achat</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">A traduire</span>: Seuls les
                articles pour lesquels cette case a �t� coch�e seront pr�sent�s
                dans l'�cran de traduction. Voir les <a
                href="traductions.php">traductions</a></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Prix de revient
                tarif</span>: Ce champs correspond au prix de revient officiel
                de l'article. Consultez les <span style="color: #0000ff;"><a
                href="articles.php">Remarques sur le prix des
                articles</a></span> pour distinguer les diff�rents types de
                prix.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Bouton</span> <img
                src="img/clip0080.gif" width="19" height="22" border="0"
                alt="clip0080">: Vous devez cliquer sur ce bouton avant de
                pouvoir saisir une nouvelle valeur pour le prix de revient
                tarif. Ceci � pour but de vous rappeler que toute modification
                de ce prix de revient peut avoir une cons�quence sur le prix de
                vente.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 4px;">�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Marge suppl�mentaire</span>:
                Ce coefficient s'applique sur le prix de revient lorsque vous
                utilisez l'article pour calculer le prix de vente (exemple :
                1.1 revient � majorer de 10% le PRTarif). <br>
                Cette marge n'est pas prise en consid�ration dans le cas o�
                l'article est consomm� via un panneau d�coratif.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Prix de vente n�goce</span>:
                Vous disposez de trois prix de vente n�goce (vente hors
                fabrication via les onglets "Articles" et "Profils" de la
                commande client). L'utilisation de ces prix est conditionn�e
                par la quantit� vendue.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">par unit� + forfait</span>:
                Forfait � ajouter au prix de vente n�goce si l'article est
                vendu � l'unit�.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">ou...par ... unit�s</span>:
                Indique les quantit�s qui d�clenchent les deuxi�mes ou
                troisi�mes prix de vente n�goce.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 12pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Utilis� dans� Page articles
                </span> ou <span style="font-weight: bold;">Page profils
                </span> ou <span style="font-weight: bold;">Non list�</span>:
                Pr�cise la page dans la commande client o� sera disponible
                l'article. L'article sera encodable depuis l'onglet "Articles"
                suppl�mentaires si <span style="font-weight: bold;">Page
                article</span> est s�lectionn�e; il est encodable depuis
                l'onglet "Profils" suppl�mentaires si <span
                style="font-weight: bold;">Page Profil </span>est s�lectionn�;
                il n'est encodable nulle part si <span
                style="font-weight: bold;">Non list�</span> est s�lectionn�
                (dans ce dernier cas l'article est indisponible en vente
                n�goce)<span
                style="font-size: 12pt; font-family: 'Times New Roman';">.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Plan d'atelier
                simplifi�</span>: Cocher cette case pour que l'article
                apparaisse <span
                style="text-decoration: underline;">syst�matiquement</span> sur
                le plan d'atelier simplifi�. (Vous pouvez lancer l'impression
                depuis l'onglet "Action" de la commande client o� lors de
                l'optimisation d'un lot). Si cette case est activ�e, Winpro ne
                tient plus compte de la variable <span
                class="f_Variables">PlanSimplifie</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Contr�le qualit�</span>:
                Cocher cette case pour que l'article apparaisse <span
                style="text-decoration: underline;">syst�matiquement</span> sur
                le document contr�le de qualit�. (Vous pouvez lancer
                l'impression depuis l'onglet "Action" de la commande client o�
                lors de l'optimisation d'un lot)</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Documents client</span>:
                Cocher cette case pour que l'article apparaisse <span
                style="text-decoration: underline;">syst�matiquement</span> sur
                les documents client avec notion de quantit�, description et
                longueur �ventuelle. Par document client, nous entendons :
                Devis D�taill�, Confirmation, Bordereau de livraison (�galement
                appel� Note d'envoi).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 27px;">�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Valorisation</span>: Cocher
                cette case pour que le prix de l'article puisse �tre indiqu�
                sur les documents client. Ce prix sera indiqu� pour autant que
                la case � cocher� <img src="img/clip0089.gif" width="118"
                height="14" border="0" alt="clip0089"> de l'onglet "Prix" de la
                commande client soit activ�e. La case � cocher <img
                src="img/clip0124.gif" width="76" height="14" border="0"
                alt="clip0124"> n'est active que si la case <img
                src="img/clip0189.gif" width="105" height="14" border="0"
                alt="Clip0189"> est coch�e.� Par document client, nous
                entendons : Devis D�taill�, Confirmation, Bordereau de
                livraison (�galement appel� Note d'envoi). La valorisation sur
                base du prix de vente n�goce. A d�faut de prix de vente n�goce,
                Winpro utilise le prix de revient sur lequel il applique le
                coefficient tarif.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Pr�paration
                livraison</span>: Cocher cette case pour que l'article
                apparaisse <span
                style="text-decoration: underline;">syst�matiquement</span> sur
                la liste du bordereau de pr�paration de livraison. (Vous pouvez
                lancer l'impression de ce document depuis le menu Commande -
                Gestion de livraison - ...)</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Pr�paration du stock</span>:
                Cocher cette case pour que l'article apparaisse <span
                style="text-decoration: underline;">syst�matiquement</span> sur
                le document pr�paration de stock. (Vous pouvez lancer
                l'impression de ce document lors de l'optimisation d'un
              lot)</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -14px; margin: 0px 0px 0px 14px;">�</p>

        <p style="text-align: center;"><span
        style="font-size: 8pt; font-family: 'MS Sans Serif'; color: #000000;">�</span></p>

        <p>�</p>
      </td>
    </tr>
  </tbody>
</table>
</div>

<div class="NED">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>�</p>

        <p>Deze pagina laat u toe de algemene beschrijving van het artikel te
        defini�ren.Informaties m.b.t. de leverancier wordt beschreven in de
        leveranciers pagina.�</p>

        <p></p>

        <p><img alt="ba"
        src="../../Users/dtrippaers/Pictures/Winpro Help/Artikels/Beschrijving artikel.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"
        width="796" height="664">�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Beschrijving</span>: Uw
                eigen beschrijving van het artikel. U kan meerdere lijnen
                gebruiken ,indien nodig.Gebruik Ctrl <span
                style="font-size: 12pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; font-weight: bold;">&crarr;</span>
                om een lege lijn te voorzien.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Categorie</span>: De <a
                href="categoriesarticle.php">Categorie</a> tot welke dit
                artikel behoort. Deze categorie wordt gebruikt als filter in de
                artikellijst.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Eenheid</span>: De eenheid voor dit
                artikel:meter,stuk,paar,m�, ... WinPro gebruikt deze eenheid
                niet, enkel op leveranciersbestellingen en
                klantdocumenten,wanneer artikels of profielen als toebehoren
                gebruikt worden.Het is aangeraden om de meter eenheid te
                gebruiken voor profielen.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Grootboekrekening</span>: Wanneer u
                Winpro koppelt aan een boekhoudingssoftware, geeft deze de
                mogelijke boekhoudrekningen an, welke gebruikt worden wanneer
                dit artikel afzonderlijk verkocht wordt.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Maat</span>: Dit veld wordt
                gebruikt door de Pakbon module (GC). Het is bruikbaar om de
                verpakkingstype te selecteren in functie van de lengte van de
                profiel welke verpakt dient te worden (Eenheid: meter)</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Etiketten afdrukken</span>: Dit veld
                wordt enkel gebruikt wanneer box <span
                style="color: #000000;"><img alt="ab"
                src="../../Users/dtrippaers/Pictures/Winpro Help/Artikels/Afzonderlijk bestellen.jpg"
                width="132" height="20">"Afzonderlijk bestellen"is checked. Het
                aantal etiketten zal worden afgedrukt voor elk artikel wanneer
                deze ontvangen wordt van de leverancier.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Verpakkingswijze:</span> Wanneer
                Wanneer u de <strong>Pakbon module (GC)</strong> bezit, vertelt
                dit veld Winpro hoe dit artikel verpakt wordt. Dit type is voor
                profielen en artikels geleverd per stuk. <span
                style="color: #000000;">.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Verpakkingswijze (volledige
                lengte)</span>: <span style="color: #000000;">Wanneer u de
                <strong>Pakbon module (GC)</strong> bezit, , vertelt dit veld
                Winpro hoe dit artikel verpakt wordt, corresponderenda aan het
                veld <img src="img/clip0081.gif" width="167" height="20" border="0"
                alt="clip0081">. Dit type is voor profielen en artikels
                geleverd per volledige lengte.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">% vulling</span>: Deze
                velden defini�ren het vullingspercentage van dit artikel per
                eenheid of per volledige lengte.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Gewicht per eenheid</span>:
                Enkel gebruikt wanneer het artikel de waarde Kilo heeft. Zie
                tab "Hoofdleverancierr", box <span
                style="font-weight: bold;">Aluminium profiel
              ,prijs/kg</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><strong>Rekening houden
                met de levertermijn bij klantbevestigingen</strong>: wanneer
                dit geselecteerd is, zal Winpro de leverdatum van het artikel
                controleren (voor de hoofdleverancier) t.o.v. de leveringsdatum
                bij van de order bij de klant.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td> <strong>Afzonderlijk bestellen</strong>: wanneer dit
                geselecteerd is, en u wil Winpro een voorstel voor een
                leveranciersbestelling laten aanmaken, zal er ��n orderlijn
                gecre�erd worden per klantorder met de referentie ervan.
                Wanneer dit geactiveerd is, raden wij aan om geen voorraad
                hiervoor te beheren in tabblad &ldquo;stock&rdquo;.<img
                alt="bv"
                src="../../Users/dtrippaers/Pictures/Winpro Help/Artikels/buiten stock.jpg"
                width="134" height="24"></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><strong>Op maat
                bestellen</strong>: Deze selectie wordt enkel gebruikt wanneer
                de vorige selectie. U dient dit te selecteren wanneer elke
                artikelbestelling hiervan een andere afmeting bevat <span
                style="color: #000000;"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><strong>Te
                lakken</strong>: Deze selectie activeert de <a
                href="artlaquage.php">Lakken</a> pagina. En geeft tevens een
                extra selectiemogelijkheid , <img alt="tl"
                src="../../Users/dtrippaers/Pictures/Winpro Help/Artikels/te lakken.jpg"
                width="337" height="27"><span style="color: #000000;">, waar
                aangegeven kan worden of het lakken door een onderaannemer
                gedaan dient te worden. In dit geval zal Winpro voor dit
                artikel tevens een bestelbon voor het lakken bij de leverancier
                afdrukken in plaats van een laklijst voor de
              fabriek.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><strong>Bestel zonder
                kleur</strong>: Deze selectie dient om te voorkomen dat Winpro
                een kleur toevoegt aan de profile beschrijving.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="color: #000000;"><strong>Artikel in promotie</strong>:
                Deze selectie dient om een artikel welke gebruikt wordt als
                promotie artikel (folders, flyers,&hellip;) in het tabblad �
                commercieel � van de klantgegevens. Deze worden tevens
                automatisch in deze lijst weggeschreven wanneer hiervoor een
                verzendnota voor afgedrukt wordt</span><span
                style="color: #000000;">. </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="color: #000000;"><strong>Onzichtbaar in
                Winpro/D</strong>: Deze selectie dient om dit artikel niet
                zichtbaar te maken in een WinproD versie, maar deze wordt wel
                gebruikt in de WinproD versie. Dit is te vergelijken met de
                optie &ldquo;niet gelijst&rdquo; zoals bovenaan uitgelegd, maar
                enkel voor WinproD</span><span
              style="color: #000000;">.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="color: #000000;"><strong>Onbruikbaar in
                WinPro/D</strong>: Bij selectie hiervan wordt deze niet
                kopieert in de WinproD database. Gebruik dit met enige
                voorzichtigheid, omdat wanneer er een bepaalde constructie toch
                over dit artikel dient te beschikken, WinproD een foutmelding
                zal genereren. Wij adviseren dit enkel te gebruiken voor
                artikels niet gerelateerd rechtstreeks aan een raam, zoals
                tools, kantoorartikelen,&hellip;.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><strong>Netto prijs</strong>: Bij deze selectie zal het
                artikel uitgesloten worden van de automatische routine binnen
                Winpro om een korting toe te passen op een aankoopprijs, welke
                opgeroepen wordt in het menu <strong>Instelling
                |</strong><strong></strong><span style="font-weight: bold;">�
                <a href="utilremiseachat.php">Korting</a> op de
                aankoopprijs</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><strong>Te vertalen</strong>: Enkel de geselecteerde
                artikelen zullen opgelijst worden in het scherm voor de
                vertalingen. Zie toepassing <a
                href="traductions.php">Vertalingen</a> </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="color: #000000;"><strong>Tarief kostprijs</strong>: Dit
                veld bevat de offici�le kostprijs van het artikel waarmee
                Winpro zijn berekeningen zal uitvoeren. Zie de <a
                href="articles.php">Beschrijving</a> pagina voor meer
                informatie.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><img src="img/clip0080.gif"
                width="19" height="22" border="0" alt="clip0080"><span
                style="font-weight: bold;">knop</span><span
                style="color: #000000;">: U dient deze knop te gebruiken om een
                waarde te kunnen ingeven in de tarief kostprijs. Dit dient om
                uw aandacht daarop te vestigen dat elke wijziging aan de
                kostprijs gevolgen heft op uw verkoopprijs.!</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="color: #000000;"><strong>Bijkomende marge:</strong> Deze
                extra marge zal toegepast worden op de tarief kostprijs
                alvorens de uiteindelijke verkoopsprijs te berekenen</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="color: #000000;"><strong>Verkoopprijs voor de
                klanten</strong>: U heeft de mogelijkheid tot het defini�ren
                van 3 verkoopsprijzen, welke gebruikt worden wanneer u het
                artikel afzonderlijk verkoopt (balieverkoop).Elke verkoop zal
                toegepast worden in functie van de hoeveelheid.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="color: #000000;"><strong>Per eenheid + vast
                bedrag:</strong> Vaste prijs toe te voegen aan de verkoopsprijs
                van het artikel wanneer deze per eenheid verkocht
                wordt...</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="color: #000000;"><strong>Per ... eenheid:</strong>
                Hoeveelheden welke invloed hebben op de 2de of 3de
                verkoopsprijs</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="color: #000000;"><strong>Bladzijde artikels</strong> of
                <strong>bladzijde Profielen</strong> of <strong>Niet
                gelijst</strong> : Wanneer bladzijde Artikels geselecteerd is,
                kan u van dit artikel gebruik maken in het tabblad
                <strong>&ldquo;artikels&rdquo;</strong> in een klantorder.
                Wanneer bladzijde <strong>Profielen</strong> geselecteerd is,
                kan u van dit artikel gebruik maken in het tabblad
                &ldquo;profielen&rdquo; in een klantorder. Wanneer Niet gelijst
                geselecteerd is, kan u dit artikel niet afzonderlijk aanbieden
                in een klantorder</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="color: #000000;"><strong>Vereenvoudigd
                werkplaatpl</strong>.: Indien geselecteerd zal dit artikel
                systematisch weergegeven worden op het vereenvoudigde
                werkplaatsplan. (vanuit het tabblad � acties � of het
                optimalisatie menu).Wanneer geselecteerd houdt Winpro geen
                rekening meer met de variabele <span
                style="color:#8000ff">SimplFacDoc.</span>.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="color: #000000;"><strong>Kwaliteitscontrole:</strong>
                Indien geselecteerd zal dit artikel systematisch weergegeven
                worden op het document voor de kwaliteitscontrole (vanuit het
                tabblad � acties � of het optimalisatie menu)..  </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="color: #000000;"><strong>Documenten voor
                klanten</strong>: Indien geselecteerd zal dit artikel
                systematisch weergegeven worden op klantdocumenten (met
                hoeveelheid, beschrijving en lengte indien van
                toepassing).Betreffende documenten zijn Offerte,
                Orderbevestiging en Verzendnota.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="color: #000000;"><strong>Becijfering</strong>: Indien
                geselecteerd zal dit artikel systematisch weergegeven worden op
                klantdocumenten<img alt="b"
                src="../../Users/dtrippaers/Pictures/Winpro Help/Artikels/becijfering.jpg"
                width="90" height="20"> (bijkomend, de optie is actief wanneer
                <img alt="h"
                src="../../Users/dtrippaers/Pictures/Winpro Help/Artikels/documenten voor klanten.jpg"
                width="154" height="21">geselecteerd is en wanneer
                gedetailleerde prijs actief is in de klantorder).
                Klantdocumenten zijn: Gedetailleerde offerte, Orderbevestiging,
                Verzendnota. Waarde is gebaseerd op de verkoopprijs, anders
                gebruikt Winpro de tarief kostprijs + het toegepast prijs
                co�ffici�nt.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="color: #000000;"><strong>Leveringsvoorbereiding</strong>
                Indien geselecteerd zal dit artikel systematisch weergegeven
                worden op de levering bon (afgedrukt via Bestellingen en
                offertes &ndash; Beheer van levering. </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="color: #000000;"><strong>Voorbereiding van de
                stock</strong>: Indien geselecteerd zal dit artikel
                systematisch weergegeven worden op stock voorbereiding
                documenten, welke afgedrukt worden wanneer een productie lot
                gelanceerd wordt. </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
