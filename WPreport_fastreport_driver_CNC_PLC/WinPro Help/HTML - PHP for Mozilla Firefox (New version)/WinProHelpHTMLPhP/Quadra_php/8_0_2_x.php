<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>	
<!DOCTYPE php PUBLIC "-//W3C//DTD php 4.01 Transitional//EN">  
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["8.0.2.x","8.0.2.x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?8_0_2_x.php"; }
else { parent.quicksync('a11.3.3'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>8.0.2.x</title>
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
        href="introduction.php">Top</a>  <a href="8_0_3_x.php">Previous</a>  <a
        href="winprod_internet.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p class="p_Comment"><span class="f_Comment"
        style="font-size: 8pt;">* Uncompatible with version 7.2, except when mentionned</span></p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 8pt;"> </span></p>

        <p style="margin: 0px 0px 0px 136px;"><span
        style="font-family: 'Courier New';"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.0.2.048</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';"> </span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Brent coefficient (refer to release note 7.2.02) onto quotations:</span><span
        class="f_Textestd"> Addition of a new key into </span><span
        class="f_Textestd" style="font-style: italic;">Settings</span><span
        class="f_Textestd">  table, enabling to apply the Brent coefficient onto quotations rather than only onto glass order form.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Onto quotations, the computation will be based on the method of procing used into the order, list or cost price.</span></p>

        <p class="p_Textestd"> </p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-family: 'Tahoma'; font-weight: bold;">[Glass]</span></p>

        <p class="p_Comment"><span class="f_Winproini">BCvitrages              
         </span><span class="f_Comment"
        style="font-size: 12pt; font-family: 'Courier New';">= 0        The Brent is applied onto the glass order form only (default).</span></p>

        <p class="p_Comment">                       <span class="f_Comment"
        style="font-size: 12pt; font-family: 'Courier New';">= 1        The Brent is applied onto glass order form AND quotation.</span></p>

        <p style="margin: 0px 0px 0px 136px;"><span
        style="font-family: 'Courier New';"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.0.2.x</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';"> </span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Import / Export function for customers and orders using WinPro/D:</span><span class="f_Textestd"> You may now
		import or export the whole quotation and customers created into WinPro/D in a single step, using both new menus Utilities | Im/Export customer(s) and quotations. Both
		features share the same base directory.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">This feature is version 7.2.72 compliant.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">« Printing correct ? » dialog for optimization documents:</span><span class="f_Textestd"> You may now disable
		this dialog with adding a new key into settings table, format integer I:</span></p>

        <p style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-family: 'Tahoma'; font-weight: bold;">[Optimisation]</span></p>

        <p class="p_Comment"><span class="f_Winproini">Confirm Print</span>    
                   <span style="font-size: 12pt; font-family: 'Courier New';">=
        0        disabled        </span></p>

        <p class="p_Comment">                       <span
        style="font-size: 12pt; font-family: 'Courier New';">= 1        enabled (default value)</span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">This feature is version 7.2.72 compliant.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Automatic fixed price for an order:</span><span class="f_Textestd"> A new settings key (format double D) allow an
		automatic additional price to be added to the order total:</span></p>

        <p style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-family: 'Tahoma'; font-weight: bold;">[Customer
        Order]</span></p>

        <p class="p_Comment"><span class="f_Winproini">Forfait Auto</span><span
        style="font-size: 12pt; font-family: 'Courier New';">       = automatic additional price amount (zero by default)</span></p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-family: 'Courier New';"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">The feature is version 7.2.71 compliant.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Recomputation and price record dialog:</span><span class="f_Textestd"> 2 additional switches to control price
		recompilation and price record dialogs into an order, in case the order is modified or recorded again.</span></p>

        <p style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-family: 'Tahoma'; font-weight: bold;">[Customer
        order]</span></p>

        <p class="p_Comment"><span class="f_Winproini">Memo Prix</span>      
         <span style="font-size: 12pt; font-family: 'Courier New';">= 0      
         WinPro asks if prices should be recorded again (current behaviour, default value)</span></p>

        <p class="p_Comment">               <span
        style="font-size: 12pt; font-family: 'Courier New';">= 1      
         prices are always recorded without acknowledgement </span></p>

        <p class="p_Comment">               <span
        style="font-size: 12pt; font-family: 'Courier New';">= 2        prices are never recorded</span></p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <p class="p_Comment"><span class="f_Winproini">Recalc Prix      
         </span><span style="font-size: 12pt; font-family: 'Courier New';">= 0
               WinPro asks if prices should be computed again (current behaviour, default value)</span></p>

        <p class="p_Comment">               <span
        style="font-size: 12pt; font-family: 'Courier New';">= 1      
         prices are always recomputed without acknowledgement</span></p>

        <p class="p_Comment">               <span
        style="font-size: 12pt; font-family: 'Courier New';">= 2        prices are never recomputed</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">The feature is version 7.2.71 compliant.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Global management dashboard:</span><span class="f_Textestd"> This new feature is a visualization board of the
		customer orders with their respective statuses and properties from a same interface, without the need to browse the miscellaneous management menus.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">The left hand panel offers a various set of filters, search and display options:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Filters on date selection</span></td>
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
              <td><span class="f_Textestd">Display options depending on the user's responsibility level (Commercial/Technical/Financial into green colour, Production into red,
			  Delivering/Invoicing into yellow), as well as settings playing with the level of detail required</span></td>
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
              <td><span class="f_Textestd">Filters on order type or status, representative or delivery area</span></td>
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
              <td><span class="f_Textestd">Search options on orders according mark-ups, or for a specific order.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 4px 48px;"> </p>

        <p class="p_Textestd"><span class="f_Textestd">The right panel shows the order filtered list. This interface offers a comfortable view on information, and allows
		sorting features on clicking on various columns of the array. A given order code will be automatically opened when double clicking on it, as well as for a customer 
		code.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">The screen list may be printed at anytime using the appropriate Print button, with optionally setting up a zoom level for
		the document. You may finally export the screen list as an Excel file, using the button labelled XLS export.</span></p>

        <p style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim66eng.jpg" width="1198" height="787" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Textestd" style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">This feature is version 7.2.58 compliant.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Composed glazing:</span><span class="f_Textestd"> This new module is suitable to create your own glazing set
		using formulas instead of a list of fixed fields. Checking this box for a glass unit will move a list of fields into the new tabs activated, « Questions », « Glazings»,
		« Profiles », « Articles », « Labours» and « Drawings». A filter for "Allowed colours" is also available. You may also program code and description fields of the
		glazing, using Composed code and description features along the tabs (filling macros).</span></p>

        <p class="p_Textestd"><span class="f_Textestd">This module is similar to the composed panel module but with variants. The syntax may also vary between versions 7.2 and
		8 of WinPro.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0418eng.jpg" width="829" height="509" border="0"
        alt="clip0418eng"></p>

        <p class="p_Textestd" style="text-align: center;"><span
        class="f_Textestd" style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Please refer to the main set up manual for details of usage of formulas within those tabs (variables 
		available, consumption rules, etc.).</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">Sample of basic formula for composed glazing, Glazings tab:</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;"># Common rule for the whole sheets</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;"># Glass clearance</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">ShrinkShape (1,
        3)</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;"># Dimensions calculation, shape depending</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">DimA := ShapeDimA
        [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">DimB := ShapeDimB
        [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">DimC := ShapeDimC
        [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">DimD := ShapeDimD
        [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">DimE := ShapeDimE
        [1]</span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">DimF := ShapeDimF
        [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">DimG := ShapeDimG
        [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">DimH := ShapeDimH
        [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">DimI := ShapeDimI
        [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">DimJ := ShapeDimJ
        [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">DimK := ShapeDimK
        [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">DimL := ShapeDimL
        [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;"># Shape and orientation assignation, if required</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">Orientation :=
        ShapeOrientation [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">FillingShape :=
        ShapeType [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;"># Consumption</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">Quantity := 1</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="417"
                style="width: 417px; border: solid 1px #000000;"><p><span
                style="font-weight: bold; color: #ff0000;">Attention!</span><span
                style="color: #ff0000;"></span></p>

                <p><span style="color: #ff0000;">It is not possible to use a composed glazing into a composed panel, both features are not compatible ! Only single glazings
				(not composed) must be consumed into composed panels!</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Additional sort column within browse dialog:</span><span class="f_Textestd"> The browse dialog for technical
		elements has been enhanced with a new sort column « Number » nearby « Category ». This field only appear when sequencing field « Number » is visible within concerned
		menus (transoms, fittings, sashes, peripheral profiles and outer frames). You need to set the key Numerotation List=1 at section [System] of table settings to enable
		the feature, as mentioned in release note 7.1.21.</span></p>

        <p style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim66beng.jpg" width="286" height="225" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim66ceng.jpg" width="276" height="120" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><span
        style="font-size: 12pt; color: #000080;"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Price table from libraries:</span><span class="f_Textestd"> The old price list module has been rebuilt in
		order to enhance the functionalities as well as the interface, now integrated to design libraries feature, menu Orders | Libraries. Interface and feature have been
		completed, calculation now compute using most window elements (like peripheral profiles, door sills, questions, composed design, variants, etc.).</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">Header tab from library</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim67eng.jpg" width="385" height="290" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">Price list tab:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim68eng.jpg" width="442" height="255" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">Printing:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim69eng.jpg" width="461" height="300" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Textestd" style="text-align: center;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim70eng.jpg" width="584" height="439" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">For </span><span class="f_Textestd" style="font-weight: bold;">WPR</span><span class="f_Textestd">/</span><span 
		class="f_Textestd" style="font-weight: bold;">WPR</span><span class="f_Textestd">+ users, the reports used for the printings are available as models into the reporting
		program, you may then create copies of those in order to define your own layout, using menu Report | Creation to run </span><span class="f_Textestd" 
		style="font-weight: bold;">WPR</span><span class="f_Textestd"> then using the button </span><span class="f_Textestd" style="font-weight: bold;">Copy standard 
		report</span><span class="f_Textestd">  to create of a copy of the originals, from models «</span><span class="f_Textestd"
        style="font-weight: bold;"> Entire price list </span><span
        class="f_Textestd">» and «</span><span class="f_Textestd"
        style="font-weight: bold;"> Simple price list </span><span
        class="f_Textestd"> ».</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">New variable</span><span class="f_Variables"> FalseArchCateg</span><span class="f_Textestd"> and an associated
		numeric field « Category » into false arches set up, from menu Technic | Window | False arches. This variable may be tested at outer frame and sash frame levels
		.</span></p>

        <p style="text-align: center;"><span class="f_Comment"
        style="font-size: 8pt;"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Filling selection filter feature:</span><span class="f_Textestd"> A new functionality is available at filling
		selection level during order input, which allows the user to filter the list of possible fillings by user defined categories, using a new combo button located on the
		right of the filling code selection in an order. This feature is available at any input level where WinPro offer this dialog (Design tab, Sash tab, Change glazing
		context menu...).</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">View of the Design tab of an order or quotation, pre-selection of a filling filter</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim71eng.jpg" width="370" height="169" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">To enable the feature, a new filling categories menu is available through </span><span class="f_Textestd"
        style="font-weight: bold;">Data | Miscellaneous | Filling category</span><span class="f_Textestd">. This file contains the 3 following fields:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0456eng.jpg" width="480" height="201" border="0"
        alt="clip0456eng"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Code</span><span
                class="f_Textestd"> : code of the category</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Description</span><span
                class="f_Textestd"> : description of the category</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Filling type:</span><span class="f_Textestd"> : defines the type of the concerned filling, between
			  glazing, standard panel, decorative panel and composed panel</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Once the table is set up, a new combo is to be assigned by user for every concerned filling (glazing, standard panel,
		decorative panel, composed panel), the </span><span class="f_Textestd" style="font-weight: bold;">Selection filter</span><span class="f_Textestd"> field within
		</span><span class="f_Textestd" style="font-weight: bold;">Description</span><span class="f_Textestd"> tab of fillings.</span></p>

        <p class="p_Textestd"><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">Sample of glazing record, selection filter for this glass unit code:</span></p>

        <p class="p_Comment" style="text-align: center;"><span
        class="f_Textestd" style="font-style: italic;"> </span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim72eng.jpg" width="347" height="146" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">WinPro/D Internet mySQL:</span><span class="f_Textestd"> A new version of WinPro/D has been built, supporting
		mySQL database format. Along with the network performances that mySQL is famous for, this particular build will allow to centralize the WinPro/D databases into the same
		mySQL, which will make easier the management and deployment of  the reseller versions. Refer to the specific <a
        href="winprod_internet.php">release note</a> of this product for more details.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>
		
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
      <td align="left"><p class="p_Comment"><span class="f_Comment"
        style="font-size: 8pt;">* Incompatible version 7.2, sauf si
        précisé</span></p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 8pt;"> </span></p>

        <p style="margin: 0px 0px 0px 136px;"><span
        style="font-family: 'Courier New';"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.0.2.048</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';"> </span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Calcul du Brent
        (voir note de version 7.2.02) sur les devis:</span><span
        class="f_Textestd"> Ajout d'une clé dans la table </span><span
        class="f_Textestd" style="font-style: italic;">Settings</span><span
        class="f_Textestd">pour appliquer le coefficient Brent (cf note de
        version 7.2.02) sur les bons de commande vitrages et/ou sur les
        devis.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Pour les devis, le
        calcul se fera aussi bien sur le prix courant que sur le prix tarif des
        vitrages.</span></p>

        <p class="p_Textestd"> </p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-family: 'Tahoma'; font-weight: bold;">[Glass]</span></p>

        <p class="p_Comment"><span class="f_Winproini">BCvitrages              
         </span><span class="f_Comment"
        style="font-size: 12pt; font-family: 'Courier New';">= 0        Le
        Brent s'applique uniquement sur les bons de commande vitrages
        (défaut).</span></p>

        <p class="p_Comment">                       <span class="f_Comment"
        style="font-size: 12pt; font-family: 'Courier New';">= 1        Le
        Brent s'applique sur les bons de commande vitrages et sur les
        devis.</span></p>

        <p style="margin: 0px 0px 0px 136px;"><span
        style="font-family: 'Courier New';"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.0.2.x</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';"> </span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Import / Export
        clients et commandes pour WinPro/D:</span><span class="f_Textestd"> Vous
        pouvez maintenant importer et exporter l'ensemble des devis et des
        clients créés dans WinPro/D en une seule opération, grâce aux deux
        nouveaux menus Utilitaires | Im/Export client(s) et devis. Les 2
        fonctionnalités travaillent dans le répertoire de base.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Fonction compatible avec
        la version 7.2.72.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Dialogue
        « Impression correcte ? » pour les documents
        d'optimisation:</span><span class="f_Textestd"> Vous pouvez maintenant
        désactiver ce dialogue, en ajoutant la clef suivante dans
        WinPro.ini:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-family: 'Tahoma'; font-weight: bold;">[Optimisation]</span></p>

        <p class="p_Comment"><span class="f_Winproini">Confirm Print</span>    
                   <span style="font-size: 12pt; font-family: 'Courier New';">=
        0        désactivé        </span></p>

        <p class="p_Comment">                       <span
        style="font-size: 12pt; font-family: 'Courier New';">= 1        activé
        (valeur par défaut)</span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Fonction compatible avec
        la version 7.2.72.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Forfait
        automatique à la commande:</span><span class="f_Textestd"> Une nouvelle
        clef dans la table settings (format double D) permet de déclencher un
        montant forfaitaire automatique sur la commande client:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-family: 'Tahoma'; font-weight: bold;">[Customer
        Order]</span></p>

        <p class="p_Comment"><span class="f_Winproini">Forfait Auto</span><span
        style="font-size: 12pt; font-family: 'Courier New';">       = montant
        du forfait automatique (zéro par défaut)</span></p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-family: 'Courier New';"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Fonction compatible avec
        la version 7.2.71. Format double D pour la clef dans la table settings
        (version 8)</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Dialogue de
        recalcul et mémorisation de prix:</span><span class="f_Textestd"> Deux
        options supplémentaire permet de contrôler le dialogue de recalcul du
        prix en saisie, ainsi que le dialogue de mémorisation des prix lors
        d'une modification et de l'enregistrement. Pour activer ces
        fonctionnalités, ajouter les clefs suivantes dans WinPro.ini:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-family: 'Tahoma'; font-weight: bold;">[Customer
        order]</span></p>

        <p class="p_Comment"><span class="f_Winproini">Memo Prix</span>      
         <span style="font-size: 12pt; font-family: 'Courier New';">= 0      
         WinPro demande s'il faut mémoriser les prix (comportement actuel de
        Winpro, valeur par défaut)</span></p>

        <p class="p_Comment">               <span
        style="font-size: 12pt; font-family: 'Courier New';">= 1      
         toujours mémoriser les prix sans demander </span></p>

        <p class="p_Comment">               <span
        style="font-size: 12pt; font-family: 'Courier New';">= 2        ne
        jamais mémoriser les prix</span></p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <p class="p_Comment"><span class="f_Winproini">Recalc Prix      
         </span><span style="font-size: 12pt; font-family: 'Courier New';">= 0
               WinPro demande s'il faut recalculer les prix (comportement
        actuel de Winpro, valeur par défaut)</span></p>

        <p class="p_Comment">               <span
        style="font-size: 12pt; font-family: 'Courier New';">= 1      
         toujours recalculer les prix sans demander </span></p>

        <p class="p_Comment">               <span
        style="font-size: 12pt; font-family: 'Courier New';">= 2        ne
        jamais recalculer les prix</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Fonction compatible avec
        la version 7.2.71. Format entier I pour les clefs dans la table
        settings (version 8)</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Tableau de bord
        de gestion:</span><span class="f_Textestd"> Ce nouveau menu permet de
        visualiser les commandes et leurs états respectifs depuis la même
        interface, plutôt que par des points de menus successifs dans les menus
        de gestion.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Le panneau de gauche met
        à disposition différents filtres et options de recherche et
        d'affichage:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Filtres pour la sélection de
                dates</span></td>
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
              <td><span class="f_Textestd">Options d'affichage suivant le
                niveau de responsabilité de l'utilisateur
                (Commercial/Technique/Financier en vert, Production en rouge,
                Livraison/Facturation en jaune) et niveau de détail</span></td>
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
              <td><span class="f_Textestd">Filtres sur le type ou l'état de la
                commande, sur le code représentant ou la zone de
                livraison</span></td>
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
              <td><span class="f_Textestd">Options de recherche de commandes
                suivant les valeurs de marges calculées, ou directement sur un
                numéro de commande.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 4px 48px;"> </p>

        <p class="p_Textestd"><span class="f_Textestd">Le panneau de droite
        contient la liste des commandes filtrées. Vous pouvez visualiser
        l'ensemble des commandes aisément, et trier la liste écran en cliquant
        sur les nombreuses colonnes du tableau. Un double clic sur un numéro de
        commande ouvrira celle ci dans WinPro, de même qu'un double clic sur un
        code client ouvrira la fiche client. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Vous pouvez à tout
        moment imprimer la liste écran des commandes avec le bouton Imprimer,
        en définissant éventuellement un niveau de zoom pour l'impression si
        nécessaire. Vous pouvez enfin exporter cette liste écran telle quelle
        sous un fichier compatible Excel avec le bouton Export XLS.</span></p>

        <p style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim66.jpg" width="531" height="315" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Textestd" style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Fonction compatible avec
        la version 7.2.58.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Vitrages
        composés:</span><span class="f_Textestd"> Ce nouveau module vous permet
        de définir vos vitrages au moyen de formules plutôt qu'en renseignant
        une série de champs fixes. En cochant cette case pour un vitrage donné,
        une série de champs sera déportée dans les différents onglets qui
        seront activés dans le même temps, « Questions », « Vitrages »,
        « Profiles », « Articles », « Main d'oeuvre » et « Dessin ». Un filtre
        sur les « Couleurs autorisées » pour ce vitrage sera proposé, parmi
        toutes les couleurs existantes dans WinPro. Cette liste de couleurs
        filtrée sera ensuite disponible dans les formules de débit de profils,
        d'articles, de mains-d'oeuvre et de dessins. Vous pourrez également
        utiliser des libellés variables, qui pourront être injectés au fil des
        calculs dans un Code et une Description concaténés, vous permettant de
        composer également le descriptif de vos verres composés pour les
        fournisseurs.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ce module fonctionne
        sous le même principe que les panneaux fabriqués, à quelques variantes
        près. De plus, des variantes de syntaxe seront à prévoir entre les
        versions 7.2 et 8 de WinPro.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0418.zoom70.gif" width="536" height="331" border="0"
        alt="clip0418"></p>

        <p class="p_Textestd" style="text-align: center;"><span
        class="f_Textestd" style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Reportez vous au manuel
        de paramétrage général au format CHM pour plus de détails sur
        l'utilisation des formules dans ces onglets (variables disponibles,
        règles de consommation, etc.).</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">Exemple de formule de consommation pour un
        vitrage composé, onglet Vitrage:</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;"># Formule commune à toutes
        les feuilles de verres</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;"># Application du jeu de
        vitrage</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">ReduireForme (1,
        3)</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;"># Application des dimensions
        de débit, suivant formes</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">DimA := DimAForme
        [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">DimB := DimBForme
        [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">DimC := DimCForme
        [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">DimD := DimDForme
        [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">DimE := DimEForme
        [1]</span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">DimF := DimFForme
        [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">DimG := DimGForme
        [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">DimH := DimHForme
        [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">DimI := DimIForme
        [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">DimJ := DimJForme
        [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">DimK := DimKForme
        [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">DimL := DimLForme
        [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;"># Assignation de la forme et
        de son orientation, si requis</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">Orientation :=
        OrientationForme [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">FormeRemplissage :=
        TypeForme [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;"># Consommation</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">Quantite := 1</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="417"
                style="width: 417px; border: solid 1px #000000;"><p><span
                style="font-weight: bold; color: #ff0000;">Attention!</span><span
                style="color: #ff0000;"></span></p>

                <p><span style="color: #ff0000;">Il n'est pas possible
                d'utiliser un vitrage composé dans un panneau fabriqué, ces
                deux fonctions ne sont pas compatibles ! Seuls les vitrages
                simples (non composés) peuvent être consommés dans les panneaux
                fabriqués !</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>
        <p class="p_Textestd"><span class="f_TitreReleaseNote">Tri complémentaire sur les listes de paramétrage:</span><span class="f_Textestd"> Les fenêtres de navigation des
		éléments techniques peuvent à présent être triées suivant une colonne "Numéro" à côté de la catégorie. Ce numéro correspond au champs respectif dans les fiches de
		paramétrage (traverses, quincailleries, ouvrants, réhausses et dormants), visible lorsque la clef Numerotation List=1 dans la section [System] de settings. Voir release
		note 7.1.21.</span></p>

        <p style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim66bfra.jpg" width="239" height="212" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim66cfra.jpg" width="258" height="113" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><span
        style="font-size: 12pt; color: #000080;"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Tarif depuis la
        bibliothèque:</span><span class="f_Textestd"> Le module de calcul de
        tarif pour les châssis et les volets dans WinPro étant devenu obsolète
        du fait de l'évolution du logiciel, celui ci a été totalement réécrit
        avec une approche plus intuitive, et intégré au menu Commandes &amp;
        Devis | Bibliothèques. L'interface de création de tarif a été
        améliorée, de même que les fonctionnalités, plus complètes dans cette
        version, avec notamment une prise en charge de tous les éléments
        constituant le châssis (notamment les rehausses et seuils, les
        questions, les assemblages de châssis, les variantes...). Vous pouvez
        donc éditer vos tarifs papier directement à partir des bibliothèques
        pour plus de confort et de lisibilité. </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">Onglet EnTête de la biliothèque:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim67.jpg" width="493" height="272" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">Onglet Tarif:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim68.jpg" width="488" height="286" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">Lancement et impression:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim69.jpg" width="495" height="253" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Textestd" style="text-align: center;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim70.jpg" width="535" height="481" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Pour les utilisateurs
        </span><span class="f_Textestd"
        style="font-weight: bold;">WPR</span><span
        class="f_Textestd">/</span><span class="f_Textestd"
        style="font-weight: bold;">WPR</span><span class="f_Textestd">+, les
        documents utilisés pour ces impressions sont portés sous ce module pour
        vous permettre de réaliser votre propre mise en page. Pour ce faire,
        rendez vous dans le menu Rapports | Création pour lancer </span><span
        class="f_Textestd" style="font-weight: bold;">WPR</span><span
        class="f_Textestd">, puis utilisez le bouton </span><span
        class="f_Textestd" style="font-weight: bold;">Importation
        standard</span><span class="f_Textestd">: vous pourrez créer des copies
        à partir des modèles «</span><span class="f_Textestd"
        style="font-weight: bold;"> Tarif complet</span><span
        class="f_Textestd"> » et «</span><span class="f_Textestd"
        style="font-weight: bold;"> Tarif simple</span><span
        class="f_Textestd"> ».</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Ajout d'une
        variable</span><span class="f_Variables"> CategFauxCintre</span><span
        class="f_Textestd"> ainsi que d'un champs numérique « Catégorie » dans
        les faux-cintrages, menu Technique | Châssis | Faux cintrages. Cette
        variable peut être testée dans les formules de dormant et
        d'ouvrant.</span></p>

        <p style="text-align: center;"><span class="f_Comment"
        style="font-size: 8pt;"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Filtre de
        sélection de remplissage: </span><span class="f_Textestd">Une nouvelle
        fonctionnalité de saisie permet à l'utilisateur de filtrer la liste des
        remplissages par catégories, au moyen d'un nouveau bouton situé à
        droite du combo de saisie du code remplissage, à tous les niveau où
        WinPro propose ce dialogue (onglet Châssis, onglet Ouvrant, menu
        contextuel Changer de vitrage...). </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">Vue de l'onglet Châssis d'une
        commande/devis, présélection d'un filtre de remplissage</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim71.jpg" width="355" height="139" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Pour activer la
        fonctionnalité, vous devez renseigner les catégories de remplissages
        via le menu </span><span class="f_Textestd"
        style="font-weight: bold;">Données | Autres données | Catégories de
        remplissages</span><span class="f_Textestd">. Cette fiche présente 3
        champs :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0456.gif" width="499" height="211" border="0"
        alt="clip0456"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Code</span><span
                class="f_Textestd"> : code de la catégorie</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Description</span><span
                class="f_Textestd"> : description de la catégorie</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 17px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Courier New'; color: #000000;">o</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Type de
                remplissage</span><span class="f_Textestd"> : définit la
                catégorie du remplissage concerné, entre vitrage, panneau à
                découper, panneau décoratif ou panneau fabriqué</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Une fois la table des
        catégories renseignée, vous devez renseigner un nouveau combo dans
        chaque fiche de remplissage (vitrage, panneau, panneau décoratif,
        panneau fabriqué), le champ </span><span class="f_Textestd"
        style="font-weight: bold;">Filtre de sélection</span><span
        class="f_Textestd"> dans l'onglet </span><span class="f_Textestd"
        style="font-weight: bold;">Description</span><span
        class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Une fois la table
        renseignée, vous devez renseigner un nouveau combo dans chaque fiche de
        remplissage (vitrage, panneau, panneau décoratif, panneau fabriqué), le
        champ Filtre de sélection dans l'onglet Description.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">Exemple de fiche vitrage, sélection du
        filtre pour ce code de vitrage:</span></p>

        <p class="p_Comment" style="text-align: center;"><span
        class="f_Textestd" style="font-style: italic;"> </span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim72.jpg" width="332" height="214" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">WinPro/D
        Internet mySQL:</span><span class="f_Textestd"> Une nouvelle version de
        WinPro/D a été créée, supportant le format de base de données mySQL.
        Outre les performances réseau propres à mySQL, cette version va
        permettre de centraliser la base de données WinPro/D sur un seul
        serveur mySQL, ce qui simplifiera la distribution et le déploiement des
        versions chez les revendeurs. Reportez vous à la note de version
        spécifique à ce module pour plus de détails. Voir la <a
        href="winprod_internet.php">note de version </a>spécifique à cette
        version du programme.</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote"> </span></p>
		
		</td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
