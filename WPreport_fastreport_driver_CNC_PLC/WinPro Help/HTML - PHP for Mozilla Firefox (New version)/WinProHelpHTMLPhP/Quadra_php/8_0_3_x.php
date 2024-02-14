<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>	
<!DOCTYPE php PUBLIC "-//W3C//DTD php 4.01 Transitional//EN">  
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["8.0.3.x","8.0.3.x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?8_0_3_x.php"; }
else { parent.quicksync('a11.3.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>8.0.3.x</title>
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
        href="introduction.php">Top</a>� <a href="8_0_4_x.php">Previous</a>� <a
        href="8_0_2_x.php">Next</a> </span> </td>
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
        style="font-size: 8pt;">�</span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.03.035</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-family: 'Times New Roman';">�</span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Enhancement concerning document export toward tables:</span> Some enhancements related to the export of documents
		to table feature concerning quotation (detailled, simplified, with no dimension, ...) listed below:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td>Into an order, when box "Discount per window" is checked and a discount for installation is set, gross prices will be exported to table 
			  <span style="font-style: italic;">ART</span>, concerning Articles, Profiles, Bent Sheets or Installation articles.</td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td>Into an order, when a "Discount per window" is set, no "Hidden discount" and a discount for installation, fields PCREMPOSE and VALREMPOSE from table 
			  <span style="font-style: italic;">CDE</span> are now fullfilled.</td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td>Into an order, when no "Hidden discount" is set along with no "Discount per window", and with a discount for installation, installation articles from the
			  Installation tab are exported with net prices into table <span style="font-style: italic;">ART</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment">� � � �</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.03.032</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-family: 'Times New Roman';">�</span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Export of WinPro.ini decimal separator:</span> When table <span
        style="font-style: italic;">Settings</span> is exported to a WinPro.ini file through menu Tools | Export to WinPro.ini, WinPro automatically replaces the decimal
		separator int the file with " . " (point), this to avoid compatibility problems when importing the file into a database.</p>

        <p class="p_Comment">� � � �</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.03.027</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-family: 'Times New Roman';">�</span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Export tables and window set with roller shutter:</span> In case of window set including a roller shutter,
		question from the roller shutter are now also exported into <span style="font-style: italic;">DET</span> table.</p>

        <p class="p_Comment">� � � �</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.03.025</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-family: 'Times New Roman';">�</span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">New module Import Glazing (.xls):</span><span
        style="font-size: 12pt; font-family: 'Times New Roman';"></span> This new module allows to import a list of glazings that will be automatically created into the
		database from a formatted Excel file.</p>
		
        <p class="p_Comment">This feature is available at menu Tools | Import glazing (.xls).</p>

        <p class="p_Comment">The dialog shows an browser to select the appropriate Excel file.</p>

        <p class="p_Comment">Data from this file should be formatted as follows:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 47px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td>The first line of the file must correspond to the field names from tables <span style="font-style: italic;">Vitrage</span> and <span
                style="font-style: italic;">FournVit</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 47px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td>The first field must be the CODE field.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 47px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td>For any line from table <span style="font-style: italic;">FournVit</span>, a column "AF" should be added, followed by the NUMERO field as well as others
			  fields from FournVit table.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';">�</span></p>

        <p class="p_Comment">In fact, records from <span style="font-style: italic;">FounVit</span> are put in line for each glazing.</p>

        <p class="p_Comment">We obtain : ��Fournvit for glazing code 1 supplier 1 + AF + numero + Fournvit for glazing code 1 supplier 2  etc...��</p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';">�</span></p>

        <p class="p_Comment"><span
        style="font-style: italic; text-decoration: underline;">Example:</span></p>

        <p class="p_Comment">CODE � � � �|AISANCE � � � �|... � � � �|AF � � �
        �|NUMERO � � � �|... � � � �|AF � � � �|NUMERO � � � �|... � � � �|</p>

        <p class="p_Comment">4/15/4 � � � �|4 � � � � � � � �| � � � �| � � �
        �|0 � � � � � � � �| � � � �| � � � �|1 � � � � � � � �| � � � �|</p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';">�</span></p>

        <p class="p_Comment">Once the file is selected with the browser, use the "Update" button to import.</p>

        <p class="p_Comment">�</p>

        <p class="p_Comment">Unexisting supplier codes are created automatically.</p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';">�</span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim57.jpg" width="646" height="448" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Comment">� � � �</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.03.021</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Fields deleted into pannel tables:</span><span
        class="f_Textestd"></span> The fields FOURNISS and BSUPPLFFT from table <span style="font-style: italic;">PannDeco</span>, and field BSUPPLM2 from table <span
        style="font-style: italic;">Panneau</span> are now dropped from table, as they are now out of date.</p>

        <p class="p_Comment">� � � �</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.03.015</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Printings for additional elements:</span><span class="f_Textestd"></span> Prices for additional supplies within an order (tabs for Articles, Profiles ...) are not detailled anymore onto quotations when the order price is fixed manually.</p>

        <p class="p_Comment">� � � �</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.03.014</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Guides and final blades colour into a roller shutter:</span><span
        class="f_Textestd"> New checkboxes available within Curtain and Guide set up dialogs, for roller shutters included into a window.</span></p>

        <p class="p_Comment"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td>A new checkbox into the Description tab of guides set up dialog, giving the ability to allow the list of outer frame possible colours into the guide colours
			  list.<span
                class="f_Textestd"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">�</span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim58eng.jpg" width="166"
        height="50" vspace="1" hspace="1" border="0" alt=""></p>

        <p class="p_Comment"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td>A new checkbox into the Description tab of the curtains set up dialog, giving the ability to allow the outer frame colours into the curtain final blade's list
			  of colours.<span class="f_Textestd"></span></td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td>A new checkbox into the Description tab of the curtains set up dialog, giving the ability to allow the guide colours into the curtain final blade's list of
			  colours.<span class="f_Textestd"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">�</span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim59eng.jpg" width="397"
        height="90" vspace="1" hspace="1" border="0" alt=""></p>

        <p class="p_Comment"><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Information about Multi-sashes for fitting frame feature:</span><span
        class="f_Textestd"></span> When toggling from a standard data set up to a set up using this multi-sashes for fitting frame feature (release note 8.03), the base sash
		frame normally sets for the given fitting frame is now defaultly affected to this fitting frame.</p>

        <p class="p_Comment"><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Additional clearance for glazing:</span> You may assign an additional glazing clearance from the Description tab
		of the Sash frame.</p>

        <p class="p_Comment">This additional clearance value is now cumulated to existing clearances contained into global variables for clearances, <span
        class="f_Variables">_FillBottom/Top/Left/RightClearance</span>, corresponding to clearances values computed for each side of the glazing.</p>

        <p class="p_Comment">� � � �</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.03.007</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">New fields into export tables for documents Art, Cde and Fen:</span> Changes have been made into exported
		documents :</p>

        <p class="p_Comment"><span
        style="font-size: 11pt; font-family: 'Times New Roman'; text-decoration: underline;">�</span></p>

        <p class="p_Comment"><span
        style="font-style: italic; text-decoration: underline;">Art</span> <span style="text-decoration: underline;">table
        </span></p>

        <p class="p_Comment">1. � � � �New field PVNET added, value 0 or 1, depending on the nature of the selling price computed (net or gross) and stored into field 
		PVTotal.</p>

        <p class="p_Comment">2. � � � �Material discounts are now exported into fields REM1/2/3, when additional supplies are exported into table <span
        style="font-style: italic;">Art</span>.</p>

        <p class="p_Comment">�</p>

        <p class="p_Comment"><span style="font-style: italic; text-decoration: underline;">Cde</span> <span style="text-decoration: underline;">table
        </span></p>

        <p class="p_Comment">1. � � � �A new field REMREPERE added, corresponding to DETREMISE field from table <span style="font-style: italic;">Commande</span>. This field is
		worth 1 when box "Discount per window" is checked, zero instead.</p>

        <p class="p_Comment">2. � � � �A new LANGUE field added containing the language code used when exporting.</p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">�</span></p>

        <p class="p_Comment"><span style="font-style: italic; text-decoration: underline;">Fen</span> <span style="text-decoration: underline;"> table</span></p>

        <p class="p_Comment">1. � � � �A new PVNET field added, value 0 or 1, depending on the nature of the selling price computed (net or gross) and stored into fields
		PVTOTAL, PVVOLET, PVVITRAGE, PVCHASSIS.</p>

        <p class="p_Comment">�</p>

        <p class="p_Comment"><span
        style="font-size: 11pt; font-family: 'Calibri';">This will be used prior to any setting defined into Winpro.ini/Settings.</span></p>

        <p class="p_Comment"><span
        style="font-size: 11pt; font-family: 'Calibri';">�</span></p>

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
                8.0.3.x</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">�</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span class="f_Comment"
        style="font-size: 8pt;">�</span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">RAL offcuts for WinPro:</span> A new key into <span
        style="font-style: italic;">settings</span> table for WinPro allows the RAL offcut computation to be done when the order is recorded.</p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;">�</span></p>

        <p><span style="font-weight: bold;">[System]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="94"><span class="f_Winproini">RAL</span></td>
              <td>� � � �<span class="f_Comment"
                style="font-size: 12pt; font-family: 'Courier New';">=&gt;
                Enables (1, default value) or disables (0) RAL offcut computation when recording the order.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -94px; margin: 0px 0px 0px 94px;"><span
        class="f_TitreReleaseNote">�</span></p>

        <p style="text-indent: -94px; margin: 0px 0px 0px 94px;"><span
        class="f_TitreReleaseNote">Archiving by moves (using module MYSQL):</span><span
        class="f_Textestd"> In case your database is under mySQL format, you should add the following keys into settings table, in order to use the feature :</span><br>
        �</p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;">[</span><span
        style="font-weight: bold;">Archive DB</span><span
        style="font-family: 'Tahoma'; font-weight: bold;">]</span></p>

        <p class="p_Comment"><span class="f_Winproini">User = Administrator �
        � � �</span><span
        style="font-size: 12pt; font-family: 'Courier New';">=&gt; � � �
        �WinPro user (string S)</span><br>
        <span class="f_Winproini">DB = ArchiveDB � � � �</span><span
        style="font-size: 12pt; font-family: 'Courier New';">=&gt; � � � �Name of the mySQL database (string S, </span><span
        style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">lower case imperatively)</span><span
        style="font-size: 12pt; font-family: 'Courier New';">)</span><br>
        <span class="f_Winproini">Host = ServerName � � � �</span><span
        style="font-size: 12pt; font-family: 'Courier New';">=&gt; � � � �Name of the mySQL server (string S, </span><span
        style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">lower case imperatively)</span><br>
        <span class="f_Winproini">Port = 3306 � � � �</span> � � � �<span
        style="font-size: 12pt; font-family: 'Courier New';">=&gt; � � � �mySQL server port number (integer I)</span><br>
        �<br>
        The archive database should be the same structure as the original database, and should contain the WinPro user recorded into settings table as shown above.</p>

        <p class="p_Comment">�</p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Profile wastes valuation:</span> Profile wastes valuation: Winpro do not value wastes for a profile when no colour
		code is mentioned into the bar lenght tab of a profile record. That's the reason why the checkbox <span style="font-weight: bold;">Waste val</span> is now greyed and
		unchecked systematically when no code is set into the colour column.</p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Warning message on batching:</span><span class="f_Textestd"> When using the quick order selection feature during
		batching stage of production line module (GLP module), a new message warns the user that a particular design has been computed as failed.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">New WPREPORT function:</span><span class="f_Textestd">The function </span><span class="f_Variables">
		RecordCount(Query : string) : integer</span><span class="f_Textestd"> returns the number of records for the defined query. Returns -1 in case of error (invalid or not
		opened SQL query)</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">New WPREPORT function:</span><span class="f_Textestd"> The function </span><span class="f_Variables">
		EditSelectAll(Edit box: string)</span><span class="f_Textestd"> allows to highlight the text into an edit control object TFRXEditControl.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">New WPREPORT function:</span><span class="f_Textestd"> The function </span><span class="f_Variables">Translate(ID
		: string; Language code: string) : string</span><span class="f_Textestd"> returns the translation of a field from the program interface or from an internal document,
		contained into files labelled strings.xxx.</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">ID</span><span
                class="f_Textestd"> is the name of the key to be found into the string.xxx file</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd" style="font-style: italic;">Language code</span><span class="f_Textestd">  is the code of the language to look for into the file
			  string.xxx</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">This function is only suitable for fields from the interface or from printed documents; it is not suitable for user
		defined set up elements (like outer frame or sash frame description for instance). This function, used along with below TransData() function, allows to create
		multilingual reports using WPR.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Textestd" style="font-style: italic;">Example:</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"
        style="font-weight: bold;">Translate('DOC_TVA','ENG')</span> � � �
        �<span class="f_Textestd"> returns the translation of the field from the interface or document labelled DOC_TVA, into the language of code ENG. WinPro will look for a
		corresponding entry into the file strings.ENG. In case none is found, a corresponding entry will be searched into the substitution language (see module for language
		management xstring.exe).</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">New WPREPORT function:</span><span class="f_Textestd">The function </span><span class="f_Variables">
		TransData(Table : string ; ID : string ; Language code : string ; Description : string) : string</span><span class="f_Textestd"> returns the translation of a user
		defined labelled created into the database, and stored into files called Tra.xxx.</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">ID</span><span
                class="f_Textestd"> is the name of the field to be translated</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Table</span><span
                class="f_Textestd"> is the table containing the field to be translated</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Description</span><span
                class="f_Textestd"> is the value of the field to be translated</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd" style="font-style: italic;">Language code</span><span class="f_Textestd"> is the language code used to search the translation (file
			  Tra.xxx, where xxx is the language code)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">This function is only suitable for user defined data set up elements like outer frame or sash frame description�; it is
		not suitable for translating fields related to the program interface or documents. This function used along with the above mentioned Translate() function, allows to
		create multilingual reports using WPR.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">�</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Textestd" style="font-style: italic;">Example:</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables" style="font-weight: bold;">TransData('Question', 'Descriptio', 'ENG', 'Handle height')</span><span class="f_Textestd">�seek into table Question
		field Description a corresponding value for 'handle height'. When found, WPR look for a corresponding value into the Tra.ENG file, for the ENG language code (the file
		is created when the question is translated into the ENG language code, using menu Miscellaneous | Translations).</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">New WPREPORT function:</span><span class="f_Textestd">The function </span><span class="f_Variables">
		GetCursorPos(Variables X,Y : integer)</span><span class="f_Textestd"> returns the absolute coordinates of the mouse cursor from the screen (and not from the current in
		use WPR dialog).</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">New WPREPORT function:</span><span class="f_Textestd"> The function </span><span class="f_Variables">
		WindowDrawing(Picture object : string ; Order : string ; Window : string ; Width : Integer ; Height : Integer ; Dimension : Boolean ; Glazing dimension : Boolean)</span></p>

        <p class="p_Textestd"><span class="f_Textestd">allows to draw designs elevations straight, without the need of an external EMF file.</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd" style="font-style: italic;">Picture object</span><span class="f_Textestd"> is the name of the picture object into WPR 
			  designer</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Order</span><span class="f_Textestd"> is the order code of the design to be drawn</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Window</span><span class="f_Textestd"> is the code of the concerned design of the order</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Width</span><span
                class="f_Textestd"> is the design width</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Height</span><span
                class="f_Textestd"> is the design height</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Dimension</span><span class="f_Textestd"> is a switch enabling dimension lines onto the design drawing (<span class="f_Textestd"
                style="font-style: italic;">True</span>=enabled, <span class="f_Textestd" style="font-style: italic;">False</span> otherwise)</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd" style="font-style: italic;">Glazing dimension</span><span class="f_Textestd"> is a switch enabling dimension lines onto the design
			  drawing for glass units only (<span class="f_Textestd" style="font-style: italic;">True</span>=enabled, <span class="f_Textestd" style="font-style: italic;">False
			  </span> otherwise)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

 		<p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">�</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Textestd" style="font-style: italic;">Example:</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"
        style="font-weight: bold;">WindowDrawing('Picture1', 'TESTDESS', '001', 1000, 1000, True, False)</span><span class="f_Textestd">� � � �this instruction draws into
		picture object Picture1 of the report, the drawing is for design number 001 from the TESTDESS order, having dimensions 1000 W x 1000 H, with drawing design dimension
		lines but not the glazing dimension lines</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">New WPREPORT function:</span><span class="f_Textestd"> The function </span><span class="f_Variables">Browse(Key :
		string ; Table : string) : string</span><span class="f_Textestd"> allows to list values of a given field from a table without the need of a SQL query.</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Key</span><span
                class="f_Textestd"> is the name of the field to browse</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Table</span><span
                class="f_Textestd"> is the table containing the field.
                </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">New WPREPORT function:</span><span class="f_Textestd">  The function </span><span class="f_Variables">
		CallReport(Report name : string)</span><span class="f_Textestd"> allows recursive call of WPR reports from an existing report.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">New WPREPORT function:</span><span class="f_Textestd">The function </span><span class="f_Variables">
		ReadSettingFloat(Section : string ; Key : string ; Default : double) : double</span><span class="f_Textestd">, as well as </span><span
        class="f_Variables">ReadSettingInteger(Section : string ; Key : string ; Default : integer) : integer</span><span class="f_Textestd"> and </span>
		<span class="f_Variables">ReadSettingsString(Section : string ; Key : string ; Default : string) : string</span><span class="f_Textestd"> afford a direct read of a key
		into settings table, without need of a query. They respectively return the required key for formats floating points, integers and strings.</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Key</span><span class="f_Textestd"> is the name of the searched key</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Section</span><span class="f_Textestd"> is the section of the settings table including the key</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Default</span><span class="f_Textestd"> allows to fix a default value in case no value is found for the search into settings 
				table.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">New WPREPORT function:</span><span class="f_Textestd"> The function </span><span class="f_Variables">
		WriteSettingFloat(Section : string ; Key : string ; Value : double)</span><span class="f_Textestd">, as well as </span><span class="f_Variables">
		WriteSettingInteger(Section : string ; Key : string ; Value : integer)</span><span class="f_Textestd"> and </span><span
        class="f_Variables">WriteSettingsString(Section : string ; Key : string ; Value : string)</span><span class="f_Textestd"> afford the user to write straight values into
		settings table without the need of a query (respectively for formats floating points, integers and strings).</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Key</span><span
                class="f_Textestd"> is the name of the searched key</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Section</span><span class="f_Textestd"> is the section of settings table containing the key</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">New WPREPORT function:</span><span class="f_Textestd"> The function </span><span class="f_Variables">
		SetCharset(Charset : integer)</span><span class="f_Textestd"> allows to define a default character set to be used by the designer.</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">New WPREPORT function:</span><span class="f_Textestd"> The function </span><span class="f_Variables">
		SetDecimalSeparator(Format : string)</span><span class="f_Textestd"> allows to set a specific character as decimal separator for the displayed numbers.</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">New WPREPORT function:</span><span class="f_Textestd"> The function </span><span class="f_Variables">
		SetThousandSeparator(Format : string)</span><span class="f_Textestd"> allows to set a specific character as thousand separator for the displayed numbers.</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">New WPREPORT function:</span><span class="f_Textestd"> The function </span><span class="f_Variables">
		SetGlobalFont(Name : string ; Size : integer)</span><span class="f_Textestd"> allows to set a default font for the whole report.</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Name</span><span class="f_Textestd"> is the default police name (ex. 'Arial')</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Size</span><span class="f_Textestd"> is the default police point size</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">New WPREPORT function:</span><span class="f_Textestd"> The function </span><span class="f_Variables">
		DestockagePosteAtelier(Spot: string ; Order : string ; Window : string)</span><span class="f_Textestd"> allows to remove from stock the articles associated to the
		defined production spot.</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Spot</span><span class="f_Textestd"> is the code of the concerned production spot</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Order</span><span class="f_Textestd"> is the order code within WinPro</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Window</span><span class="f_Textestd"> is the design number inside the order</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Based on those 3 settings, WinPro will check the articles of the design. If associated to this production spot, those
		articles will be removed from stock.</span></p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-style: italic;">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Fields added</span> into export table cde, fen and
        art, indicating when prices are stored as net prices (PVNET field, hidden discount checkbox).</p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Comments added to licence files (WinPro.lic):</span><span class="f_Textestd"> Comments are now available into
		licence files for version 8. To use the feature, simply use a dies ' # ' character at the beginning of the line. Licence files are now generated by default with a
		comment showing the customer name.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">WinPro Light, menu name change</span><span class="f_Textestd"> for menu Confirmation handling | Print
		confirmations, renamed as Customer order form.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">System filter for false arches:</span><span class="f_Textestd"> A new dialog into the false arches set up allows
		the user to filter the use of the false arch by system.</span></p>

        <p class="p_Comment"><span style="font-size: 12pt;">�</span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim61eng.jpg" width="263"
        height="438" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="text-align: center;"><span class="f_Comment"
        style="font-size: 8pt;">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Multi sashes fittings frame:</span><span class="f_Textestd"> You may now assigned a same fittings frame to
		multiple sash frames, as long as the fittings frame set up is compatible with all associated sash frames. To enable the feature, add the following key into settings
		table, format integer I:</span></p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-family: 'Tahoma'; font-weight: bold;">[System]</span></p>

        <p class="p_Comment"><span class="f_Winproini">Quinc Multi
        Ouvrant</span><span
        style="font-size: 12pt; font-family: 'Courier New';">� � � �= 0 � � �
        �one fittings frame for one sash frame, current behaviour (default value)</span></p>

        <p class="p_Comment">� � � � � � � � � � � �<span
        style="font-size: 12pt; font-family: 'Courier New';">= 1 � � � �multi sashes fittings frame</span></p>

        <p style="text-align: center;"><span class="f_Comment"
        style="font-size: 8pt;">�</span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim62eng.jpg" width="578"
        height="347" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="text-align: center;"><span class="f_Comment"
        style="font-size: 8pt;">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">New global variable _VATRate:</span><span class="f_Textestd"> This new variable will be available at the
		beginning of the computation, and returns the value of the VAT rate used for the order.</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Optimization for special window:</span><span class="f_Textestd"> A new checkbox into system set up allows a user
		to optimize orders as soon as the Confirmations handling | Validate confirmations (technical validation) stage is passed, with avoiding usual steps of the process. For
		running such an optimization, use the menu Production handling | Optimize special windows.</span></p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Separated optimization for transoms:</span><span class="f_Textestd"> A new feature into Utilities | Preferences
		dialog, Optimization tab, enables a checkbox into the Launch optimization dialog, and allows running a separate batching and optimization for transoms.</span></p>

        <p style="text-align: center;"><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;">�</span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim63eng.jpg" width="242"
        height="272" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="text-align: center;"><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;">�</span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim64eng.jpg" width="306"
        height="164" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="text-align: center;"><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">When launching a production batch, the user may uncheck the option � Optimize transoms later �, transoms will then be
		optimized as usually. When the box is checked, the transoms will have to be optimized using Production handling | Optimize transoms menu. If the box is hidden, the
		batch is empty of transoms.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">New variables for WinPro/D:</span><span class="f_Textestd"> A set of new variables specific to WinPro/D, 
		</span><span class="f_Variables">_Discount1D</span><span class="f_Textestd"> (1st window discount), </span><span class="f_Variables">_Discount2D</span><span
        class="f_Textestd"> (2nd window discount), </span><span class="f_Variables">_Discount3D</span><span class="f_Textestd"> (3rd window discount), </span><span
        class="f_Variables">_RShutterDiscount1D</span><span class="f_Textestd"> (1st roller shutter discount),� </span><span class="f_Variables">_RShutterDiscount2D</span><span
		class="f_Textestd"> (2nd roller shutter discount) and </span><span class="f_Variables">_RShutterDiscount3D</span><span class="f_Textestd"> (3rd roller shutter discount),
		is initialized by WinPro based onto discounts set by the user for windows in the order. They cannot be modified and are created in order to be able to test discount
		condition by window into a WinPro/D order.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Automatic prefix for batches using module GLP (production line management):</span><span class="f_Textestd"> In
		case your licence enable GLP module, 2 new keys into settings table define, by user, a customized prefix into batches numbering. To enable this, create as many keys as
		users:</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">�</span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><span
        class="f_Comment"
        style="font-size: 12pt; font-weight: bold;">[PrefixeLot]</span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 48px;"><span
        class="f_Winproini">%user%:Prefixe</span><span
        style="font-size: 12pt; font-family: 'Courier New';">� � � �= string format S, batch prefix code for this user</span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 48px;"><span
        class="f_Winproini">%user%:Numero � � � �</span><span
        style="font-size: 12pt; font-family: 'Courier New';">= double format D, sequence number of the next batch to be created</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_TitreReleaseNote">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">New checkbox into Actions tab of the order, Re print confirmations:</span><span
        class="f_Textestd"> This box allows printing again a confirmation from the Actions tab of the order, for an order confirmed but not optimized, or partially optimized.
		This document may anyway show price differences compared to the first confirmation printed.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Like filter for strings into a mySQL database:</span><span
        class="f_Textestd"> It is now possible to search for a sub string into a code or a description within WinPro. For instance, looking for string � urand � into name field
		of the customer file, you may type the instruction � %urand% � then click on the search combo. This may filter the list of customers with name containing the sub string
		� urand �.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim65eng.jpg" width="310" height="120" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">This is only relevant for a mySQL database format.</span></p>
        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">�</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">�</span></p>
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
        pr�cis�</span></p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 8pt;">�</span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.03.035</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-family: 'Times New Roman';">�</span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Am�lioration du
        traitement de documents vers les tables d</span><span
        class="f_TitreReleaseNote">&rsquo;</span><span
        class="f_TitreReleaseNote">export:</span> Quelques am�liorations et
        compl�ments ont �t� apport�s sur les exports de documents, en
        particulier pour les devis (simplifi�, d�taill�, sans c�tes):</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td>Dans une commande, si on est en � Remise par rep�re � et
                qu'on a indiqu� une remise de pose, se sont les prix bruts qui
                sont export�s pour les Articles, Profils, T�les pli�es ou Pose
                dans la table <span style="font-style: italic;">ART</span>.</td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td>Dans une commande, si il y a une � Remise par repere �, pas
                de � Remise deduite � et une remise pour la pose, les champs
                PCREMPOSE et VALREMPOSE de la table <span
                style="font-style: italic;">CDE </span>sont maintenant
                compl�t�s.</td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td>Dans une commande, si il y a une � Remise deduite �, pas de �
                Remise par repere � et une remise pour la pose, les articles de
                pose de la commande seront export�s en prix nets dans la table
                <span style="font-style: italic;">ART</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment">� � � �</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.03.032</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-family: 'Times New Roman';">�</span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Export de
        WinPro.ini et s�parateur de d�cimales:</span> Lorsque la table <span
        style="font-style: italic;">Settings </span>est export�e dans un
        fichier WinPro.ini via le menu Utilitaires | Exportation vers
        WinPro.ini, WinPro force le s�parateur de d�cimal � la valeur � . �
        (point), ceci pour �viter les probl�mes de compatibilit� lors de
        l&rsquo;importation du fichier dans la base de donn�es.</p>

        <p class="p_Comment">� � � �</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.03.027</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-family: 'Times New Roman';">�</span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Tables
        d</span><span class="f_TitreReleaseNote">&rsquo;</span><span
        class="f_TitreReleaseNote">export et assemblages avec volet:</span>
        Dans le cas d&rsquo;un assemblage de ch�ssis avec volet, les questions
        de volet sont dor�navant �galement export�es dans DET.</p>

        <p class="p_Comment">� � � �</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.03.025</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-family: 'Times New Roman';">�</span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Ajout du module
        Importation Vitrage (.xls):</span><span
        style="font-size: 12pt; font-family: 'Times New Roman';"></span> Ce
        nouveau module vous permettra d&rsquo;importer une liste de vitrage qui
        sera directement cr��e dans WinPro � partir d&rsquo;un fichier Excel
        formatt�.</p>

        <p class="p_Comment">Cette importation des vitrages est accessible par
        le menu Utilitaire | Import Vitrage (.xls).</p>

        <p class="p_Comment">L'�cran affiche une zone permettant de choisir un
        fichier Excel contenant les donn�es � importer.</p>

        <p class="p_Comment">Les donn�es de ce fichier doivent �tre format�es
        de la mani�re suivante :</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 47px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td>La premi�re ligne du fichier Excel doit contenir le nom des
                champs tels qu'ils sont not�s dans les tables V<span
                style="font-style: italic;">itrage</span> et <span
                style="font-style: italic;">FournVit</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 47px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td>Le premier champ doit �tre le champ CODE.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 47px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td>Pour chaque ligne dans la table <span
                style="font-style: italic;">FournVit</span>, il faut ajouter
                une colonne "AF", suivie du champ NUMERO ainsi que des autres
                champs de la table FournVit.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';">�</span></p>

        <p class="p_Comment">En fait, on remet ici en lignes les
        enregistrements de <span style="font-style: italic;">FounVit</span>
        pour chaque vitrage.</p>

        <p class="p_Comment">On obtient�: ��Fournvit pour code vitrage 1
        fournisseur 1 + AF + numero + Fournvit pour code vitrage 1 fournisseur
        2 etc...��</p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';">�</span></p>

        <p class="p_Comment"><span
        style="font-style: italic; text-decoration: underline;">Exemple:</span></p>

        <p class="p_Comment">CODE � � � �|AISANCE � � � �|... � � � �|AF � � �
        �|NUMERO � � � �|... � � � �|AF � � � �|NUMERO � � � �|... � � � �|</p>

        <p class="p_Comment">4/15/4 � � � �|4 � � � � � � � �| � � � �| � � �
        �|0 � � � � � � � �| � � � �| � � � �|1 � � � � � � � �| � � � �|</p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';">�</span></p>

        <p class="p_Comment">Une fois le fichier s�lectionn�, il ne reste plus
        qu'� cliquer sur le bouton "Mise � jour" pour faire l'importation.</p>

        <p class="p_Comment">�</p>

        <p class="p_Comment">Si le fournisseur utilis� n'existe pas, il sera
        automatiquement cr��.</p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';">�</span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim57.jpg" width="646" height="448" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Comment">� � � �</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.03.021</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Suppression de
        champs dans les tables de panneaux:</span><span
        class="f_Textestd"></span> Suppression des champs FOURNISS et BSUPPLFFT
        de la table <span style="font-style: italic;">PannDeco</span>, et du
        champ BSUPPLM2 de la table <span
        style="font-style: italic;">Panneau</span>. Ces champs sont devenus
        obsol�tes.</p>

        <p class="p_Comment">� � � �</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.03.015</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Impressions des
        �l�ments en fourniture:</span><span class="f_Textestd"></span> Le prix
        des articles n�goces saisis en fournitures (onglet Articles ou Profil
        de la commande) n'est plus imprim� sur le devis si le prix de la
        commande est forc�.</p>

        <p class="p_Comment">� � � �</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.03.014</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Couleur de
        coulisses et sous-lame pour les volets roulants:</span><span
        class="f_Textestd"> Des cases � cocher ont �t� ajout�es dans le dialogue
        de cr�ation de Coulisse et de Tablier, pour des cas de volets saisis
        avec ch�ssis.</span></p>

        <p class="p_Comment"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td>Une case � cocher dans l&rsquo;onglet Description des
                coulisses, permettant d'autoriser les couleurs du dormant dans
                la liste des couleurs de coulisses.<span
                class="f_Textestd"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">�</span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim58.jpg" width="190"
        height="51" vspace="1" hspace="1" border="0" alt=""></p>

        <p class="p_Comment"><span class="f_Textestd">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td>Une case � cocher dans l&rsquo;onglet Description des
                tabliers, permettant d'autoriser les couleurs du dormant pour
                la sous-lame du tablier.<span class="f_Textestd"></span></td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td>Une case � cocher dans l&rsquo;onglet Description des
                tabliers, permettant d'autoriser les couleurs de coulisses pour
                la sous-lame du tablier.<span class="f_Textestd"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">�</span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim59.jpg" width="280"
        height="109" vspace="1" hspace="1" border="0" alt=""></p>

        <p class="p_Comment"><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Compl�ment sur la
        fonction Quincaillerie multi-ouvrant :</span><span
        class="f_Textestd"></span> Pour le passage entre un param�trage de
        quincaillerie normal et le param�trage de quincaillerie multiple (note
        de version 8.03), l&rsquo;ouvrant de base li� � cette quincaillerie est
        maintenant affect� par d�faut � la quincaillerie.</p>

        <p class="p_Comment"><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Aisance
        suppl�mentaire des vitrages:</span> Vous pouvez d�finir une aisance
        suppl�mentaire pour un vitrage en fonction d&rsquo;un ouvrant, dans la
        page Description de la fiche Ouvrant.</p>

        <p class="p_Comment">Cette aisance suppl�mentaire d�finie dans
        l&rsquo;ouvrant vient maintenant se cumuler aux variables existantes
        concernant les aisances, <span
        class="f_Variables">_RemplAisanceHaut/Bas/Gauche/Droite</span>,
        correspondantes � l&rsquo;aisance calcul�e sur chaque bord du
        vitrage.</p>

        <p class="p_Comment">� � � �</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.03.007</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">�</span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Ajout de champ
        dans les tables d</span><span
        class="f_TitreReleaseNote">&rsquo;</span><span
        class="f_TitreReleaseNote">export </span><span
        class="f_TitreReleaseNote" style="font-style: italic;">Art</span><span
        class="f_TitreReleaseNote">, </span><span class="f_TitreReleaseNote"
        style="font-style: italic;">Cde </span><span
        class="f_TitreReleaseNote">&amp; </span><span
        class="f_TitreReleaseNote" style="font-style: italic;">Fen</span><span
        class="f_TitreReleaseNote">:</span> Les modifications suivantes ont �t�
        apport�es aux exportations de documents WinPro�:</p>

        <p class="p_Comment"><span
        style="font-size: 11pt; font-family: 'Times New Roman'; text-decoration: underline;">�</span></p>

        <p class="p_Comment"><span style="text-decoration: underline;">Table
        </span><span
        style="font-style: italic; text-decoration: underline;">Art</span></p>

        <p class="p_Comment">1. � � � �Ajout d&rsquo;un nouveau champ PVNET
        contenant 0 ou 1 en fonction de la nature du prix vente (brut ou net)
        contenu dans le champ PVTOTAL.</p>

        <p class="p_Comment">2. � � � �Les remises mati�res sont dor�navant
        export�es dans les champs REM1/2/3, lorsque des fournitures sont
        export�es dans la table <span
        style="font-style: italic;">Art</span>.</p>

        <p class="p_Comment">�</p>

        <p class="p_Comment"><span style="text-decoration: underline;">Table
        </span><span
        style="font-style: italic; text-decoration: underline;">Cde</span></p>

        <p class="p_Comment">1. � � � �Ajout d&rsquo;un nouveau champ REMREPERE
        correspondant au champ DETREMISE de la table <span
        style="font-style: italic;">Commande</span>. Autrement dit, le champ
        vaut 1 lorsque la case �Remise par rep�re� est active, z�ro sinon.</p>

        <p class="p_Comment">2. � � � �Ajout d&rsquo;un champ LANGUE contenant
        le code de la langue utilis�e � l&rsquo;export.</p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">�</span></p>

        <p class="p_Comment"><span style="text-decoration: underline;">Table
        </span><span
        style="font-style: italic; text-decoration: underline;">Fen</span></p>

        <p class="p_Comment">1. � � � �Ajout d&rsquo;un nouveau champ PVNET
        contenant 0 ou 1 en fonction de la nature du prix de vente (brut ou
        net) contenu dans les champs PVVOLET, PVVITRAGE, PVCHASSIS.</p>

        <p class="p_Comment">�</p>

        <p class="p_Comment"><span
        style="font-size: 11pt; font-family: 'Calibri';">Ceci pr�vaut sur la
        configuration d�finie par d�faut dans Winpro.ini/Settings</span></p>

        <p class="p_Comment"><span
        style="font-size: 11pt; font-family: 'Calibri';">�</span></p>

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
                8.0.3.x</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">�</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span class="f_Comment"
        style="font-size: 8pt;">�</span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Chutes RAL dans
        WinPro:</span> Une nouvelle clef dans la table <span
        style="font-style: italic;">settings </span>de WinPro permet
        d&rsquo;activer le calcul des chutes RAL � l&rsquo;enregistrement de la
        commande.</p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;">�</span></p>

        <p><span style="font-weight: bold;">[System]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="94"><span class="f_Winproini">RAL</span></td>
              <td>� � � �<span class="f_Comment"
                style="font-size: 12pt; font-family: 'Courier New';">=&gt;
                Active (1, valeur par d�faut) ou d�sactive (0) le calcul des
                chutes RAL � l</span><span class="f_Comment"
                style="font-size: 12pt; font-family: 'Courier New';">&rsquo;</span><span
                class="f_Comment"
                style="font-size: 12pt; font-family: 'Courier New';">enregistrement
                de la commande.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -94px; margin: 0px 0px 0px 94px;"><span
        class="f_TitreReleaseNote">�</span></p>

        <p style="text-indent: -94px; margin: 0px 0px 0px 94px;"><span
        class="f_TitreReleaseNote">Archivage par d�placement (avec le module
        MYSQL)�:</span><span
        style="font-weight: bold; text-decoration: underline;">�</span> <span
        class="f_Textestd">Pour utiliser l'archivage par d�placement en MySQL,
        ajouter les informations suivantes � la table settings :</span><br>
        �</p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;">[</span><span
        style="font-weight: bold;">Archive DB</span><span
        style="font-family: 'Tahoma'; font-weight: bold;">]</span></p>

        <p class="p_Comment"><span class="f_Winproini">User = Administrateur �
        � � �</span><span
        style="font-size: 12pt; font-family: 'Courier New';">=&gt; � � �
        �Utilisateur WinPro (caract�re S)</span><br>
        <span class="f_Winproini">DB = BaseArchive � � � �</span><span
        style="font-size: 12pt; font-family: 'Courier New';">=&gt; � � � �Nom
        de la base de donn�es mySQL (caract�re S, </span><span
        style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">en
        minuscules imp�rativement</span><span
        style="font-size: 12pt; font-family: 'Courier New';">)</span><br>
        <span class="f_Winproini">Host = ServerName � � � �</span><span
        style="font-size: 12pt; font-family: 'Courier New';">=&gt; � � � �Nom
        du serveur mySQL (caract�re S, </span><span
        style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">en
        minuscules imp�rativement</span><span
        style="font-size: 12pt; font-family: 'Courier New';">)</span><br>
        <span class="f_Winproini">Port = 3306 � � � �</span> � � � �<span
        style="font-size: 12pt; font-family: 'Courier New';">=&gt; � � � �Port
        utilis� par le serveur mySQL (entier I)</span><br>
        �<br>
        La base archive doit �tre de structure identique � la base d'origine et
        comporter l'utilisateur WinPro repris dans la table settings.</p>

        <p class="p_Comment">�</p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Valorisation des
        chutes de profils: </span>Winpro ne valorise pas les chutes si on ne
        mentionne pas de code couleur dans l'onglet de la barre du profil.
        C'est la raison pour laquelle la case <span
        style="font-weight: bold;">Val.Ch </span>est d�sormais gris�e et
        d�coch�e syst�matiquement, lorsqu'aucune couleur n'est renseign�e dans
        la colonne couleur.</p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Message
        d'avertissement dans la mise en lot</span><span class="f_Textestd">:
        Lors de la s�lection rapide de commande pour la mise en lot avec ligne
        de production (module GLP), un message� avertit maintenant
        l'utilisateur qu'un des ch�ssis est en �chec.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle
        fonction WPREPORT:</span><span class="f_Textestd"> La fonction
        </span><span class="f_Variables">RecordCount(Requete : chaine) :
        entier</span><span class="f_Textestd"> retourne le nombre
        d'enregistrement d'une requ�te. Elle retourne la valeur -1 en cas
        d'erreur (requ�te SQL non valide ou non ouverte)</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle
        fonction WPREPORT:</span><span class="f_Textestd"> La fonction
        </span><span class="f_Variables">EditSelectAll(Boite D'edition :
        chaine)</span><span class="f_Textestd"> permet de mettre en surbrillance
        une cha�ne de caract�re (� utiliser dans un objet de contr�le d'�dition
        TFRXeditcontrol).</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle
        fonction WPREPORT:</span><span class="f_Textestd"> La fonction
        </span><span class="f_Variables">Translate(Identifiant : chaine ; Code
        langue : chaine) : chaine</span><span class="f_Textestd"> renvoie la
        traduction d�un champs de l�interface ou d�un des documents WinPro
        contenu dans les fichiers de traduction strings.xxx.</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Identifiant</span><span
                class="f_Textestd"> est le nom de la clef � rechercher dans le
                fichier string.xxx</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd" style="font-style: italic;">Code
                langue</span><span class="f_Textestd"> est la langue de
                recherche dans le fichier string.xxx</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cette fonction concerne
        les traductions des diff�rents champs de l'interface et des documents
        de WinPro, mais ne concerne pas les donn�es de param�trage cr��es par
        l'utilisateur. Cette fonction, utilis�e avec la fonction TransData()
        ci-dessous, permet de cr�er des rapports WPR multilingue.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Textestd" style="font-style: italic;">Exemple:</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"
        style="font-weight: bold;">Translate('DOC_TVA','ENG')</span> � � �
        �<span class="f_Textestd">renvoie la traduction du champs DOC_TVA de
        l'interface ou les documents, dans la langue de code ENG. WinPro
        cherchera une correspondance de ce champ dans le fichier strings.ENG.
        S'il n'en trouve pas, il cherchera correspondance dans la langue de
        substitution (voir module de langue xstring.exe).</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle
        fonction WPREPORT:</span><span class="f_Textestd"> La fonction
        </span><span class="f_Variables">TransData(Table : chaine ; Identifiant
        : chaine ; Code langue : chaine ; Description : chaine) :
        chaine</span><span class="f_Textestd"> renvoie la traduction d�un
        libell� de param�trage contenu dans les fichiers de traduction
        Tra.xxx.</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Identifiant</span><span
                class="f_Textestd"> est le nom du champs � traduire</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Table</span><span
                class="f_Textestd"> est le nom de la table contenant le champs �
                traduire</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Description</span><span
                class="f_Textestd"> est la valeur du champs que l�on cherche �
                traduire</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd" style="font-style: italic;">Code
                langue</span><span class="f_Textestd"> est le code de la langue
                dans laquelle on recherche la traduction (fichier Tra.xxx, o�
                xxx est le code langue)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cette fonction concerne
        les traductions des diff�rentes donn�es de param�trage cr��es par
        l'utilisateur dans WinPro (par exemple la description des syst�mes,
        dormants, ouvrants, etc..), mais ne concerne pas les champs de
        l'interface et des documents. Cette fonction, utilis�e avec la fonction
        Translate() ci-dessus, permet de cr�er des rapports
        multilingue.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">�</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Textestd" style="font-style: italic;">Exemple:</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables" style="font-weight: bold;">TransData('Question',
        'Descriptio', 'ENG', 'Hauteur poign�e')</span><span
        class="f_Textestd">� � � �cherche dans la table Question dans le champ
        Descriptio si une ligne de valeur 'Hauteur poign�e' existe. Si oui, WPR
        recherche une correspondance dans la langue de code ENG dans le fichier
        Tra.ENG (fichier cr�� d�s lorsque la question a �t� traduite dans la
        langue de code ENG via le menu Divers | Traductions).</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle
        fonction WPREPORT:</span><span class="f_Textestd"> La fonction
        </span><span class="f_Variables">GetCursorPos(Variables X,Y :
        entier)</span><span class="f_Textestd"> renvoie la position absolue du
        pointeur de souris par rapport � l'�cran (et non par rapport � la
        fen�tre de WPR en cours d'utilisation).</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle
        fonction WPREPORT:</span><span class="f_Textestd"> La fonction
        </span><span class="f_Variables">WindowDrawing(Objet image : chaine ;
        Commande : chaine ; Chassis : chaine ; Largeur : Integer ; Hauteur :
        Integer ; Cotation : Bool�en ; Cotation vitrage : Bool�en) </span></p>

        <p class="p_Textestd"><span class="f_Textestd">permet de dessiner les
        �l�vations de ch�ssis directement sans passer par un fichier
        interm�diaire comme pr�c�demment. </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd" style="font-style: italic;">Objet
                image</span><span class="f_Textestd"> est le nom de l'objet
                image d�finit dans WPR</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Commande</span><span
                class="f_Textestd"> est le code de la commande du ch�ssis �
                dessiner</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Chassis</span><span
                class="f_Textestd"> est le code du ch�ssis dans la
                commande</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Largeur</span><span
                class="f_Textestd"> vaut la largeur du ch�ssis</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Hauteur</span><span
                class="f_Textestd"> vaut la hauteur ch�ssis</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Cotation</span><span
                class="f_Textestd"> vaut </span><span class="f_Textestd"
                style="font-style: italic;">False </span><span
                class="f_Textestd">si les lignes de c�tes du ch�ssis ne doivent
                pas �tre dessin�es (</span><span class="f_Textestd"
                style="font-style: italic;">True</span><span
                class="f_Textestd"> sinon)</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd" style="font-style: italic;">Cotation
                vitrage</span><span class="f_Textestd"> vaut </span><span
                class="f_Textestd" style="font-style: italic;">False
                </span><span class="f_Textestd">si les dimensions de vitrage ne
                doivent pas �tre dessin�es (</span><span class="f_Textestd"
                style="font-style: italic;">True</span><span
                class="f_Textestd"> sinon)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">�</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Textestd" style="font-style: italic;">Exemple:</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"
        style="font-weight: bold;">WindowDrawing('Picture1', 'TESTDESS', '001',
        1000, 1000, True, False)</span><span class="f_Textestd">� � � �cette
        instruction dessine dans l'objet Picture1 du rapport, le dessin du
        ch�ssis 001 de la commande TESTDESS de dimension 1000 L x 1000 H, avec
        les dimensions de ch�ssis mais sans les c�tes de vitrages</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle
        fonction WPREPORT:</span><span class="f_Textestd"> La
        fonction</span><span class="f_Variables">Browse(Clef : chaine ; Table :
        chaine) : chaine</span><span class="f_Textestd"> permet de lister les
        valeur d'un champs dans une table (parcourir) sans passer par une
        requ�te.</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Clef</span><span
                class="f_Textestd"> est le nom du champ � parcourir</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Table</span><span
                class="f_Textestd"> est la table contenant le champ.
                </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle
        fonction WPREPORT:</span><span class="f_Textestd"> La fonction
        </span><span class="f_Variables">CallReport(Nom du rapport :
        chaine)</span><span class="f_Textestd"> permet l'appel d'un rapport WPR
        de code Nom du rapport depuis un autre rapport WPR.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle
        fonction WPREPORT:</span><span class="f_Textestd"> Les fonctions
        </span><span class="f_Variables">ReadSettingFloat(Section : chaine ;
        Clef : chaine ; Defaut : double) : double</span><span
        class="f_Textestd">, ainsi que </span><span
        class="f_Variables">ReadSettingInteger(Section : chaine ; Clef : chaine
        ; Defaut : entier) : entier</span><span class="f_Textestd"> et
        </span><span class="f_Variables">ReadSettingsString(Section : chaine ;
        Clef : chaine ; Defaut : chaine) : chaine</span><span
        class="f_Textestd"> permettent de lire directement une clef dans la
        table settings sans passer par une requ�te. Ces fonctions renvoient les
        clefs demand�es respectivement pour les formats � virgule flottante,
        les entiers et les cha�nes de caract�res.</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Clef</span><span
                class="f_Textestd"> est le nom de la clef recherch�e</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Section</span><span
                class="f_Textestd"> est la section de la table settings
                contenant la clef recherch�e</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Defaut</span><span
                class="f_Textestd"> permet de fixer une valeur par d�faut au cas
                o� aucune clef n'est trouv�e dans settings.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle
        fonction WPREPORT:</span><span class="f_Textestd"> Les fonctions
        </span><span class="f_Variables">WriteSettingFloat(Section : chaine ;
        Clef : chaine ; Valeur : double)</span><span class="f_Textestd">, ainsi
        que </span><span class="f_Variables">WriteSettingInteger(Section :
        chaine ; Clef : chaine ; Valeur : entier)</span><span
        class="f_Textestd"> et </span><span
        class="f_Variables">WriteSettingsString(Section : chaine ; Clef :
        chaine ; Valeur : chaine)</span><span class="f_Textestd"> permettent
        d'aller �crire directement dans la table settings sans passer par une
        requ�te, respectivement pour les formats � virgule flottante, les
        entiers et les cha�nes de caract�res.</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Clef</span><span
                class="f_Textestd"> est le nom de la clef recherch�e</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Section</span><span
                class="f_Textestd"> est la section de la table settings
                contenant la clef recherch�e</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle
        fonction WPREPORT:</span><span class="f_Textestd"> La fonction
        </span><span class="f_Variables">SetCharset(Charset :
        entier)</span><span class="f_Textestd"> permet de d�finir dans le
        concepteur un jeu de caract�re par d�faut pour le rapport entier, par
        programmation.</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle
        fonction WPREPORT:</span><span class="f_Textestd"> La fonction
        </span><span class="f_Variables">SetDecimalSeparator(Format :
        chaine)</span><span class="f_Textestd"> permet de d�finir le caract�re �
        utiliser par d�faut en tant que s�parateur de d�cimales pour les
        nombres affich�s, par programmation.</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle
        fonction WPREPORT:</span><span class="f_Textestd"> La fonction
        </span><span class="f_Variables">SetThousandSeparator(Format :
        chaine)</span><span class="f_Textestd"> permet de d�finir le caract�re �
        utiliser par d�faut en tant que s�parateur de milliers pour les nombres
        affich�s, par programmation.</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle
        fonction WPREPORT:</span><span class="f_Textestd"> La fonction
        </span><span class="f_Variables">SetGlobalFont(Nom : chaine ; Taille :
        entier)</span><span class="f_Textestd"> permet de d�finir une police par
        d�faut pour tout le document, par programmation.</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Nom</span><span
                class="f_Textestd"> est le nom de la police par d�faut (ex.
                �Arial�)</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Taille</span><span
                class="f_Textestd"> est la taille par d�faut de la
              police</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle
        fonction WPREPORT:</span><span class="f_Textestd"> La fonction
        </span><span class="f_Variables">DestockagePosteAtelier(Poste : chaine
        ; Commande : chaine ; Chassis�: chaine)</span><span
        class="f_Textestd"> permet de retirer du stock les articles qui sont
        associ�s � ce poste.</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Poste</span><span
                class="f_Textestd"> est le code du poste atelier
              concern�</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Commande</span><span
                class="f_Textestd"> est le num�ro de commande WinPro</span></td>
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
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Chassis</span><span
                class="f_Textestd"> est le num�ro de ch�ssis dans la commande
                WinPro</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Sur base de ces trois
        informations, WinPro va v�rifier les articles du ch�ssis. S'ils sont
        associ�s au poste atelier "Poste", ceux-ci seront retir�s du
        stock.</span></p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-style: italic;">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Ajout de champs
        dans les tables d'export</span><span class="f_Textestd"> cde, fen et
        art, indiquant que les prix sont stock�s nets (champs PVNET, case
        remise d�duite).</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Ajout de
        commentaires dans les fichiers de licence (WinPro.lic):</span><span
        class="f_Textestd"> Vous pouvez ajouter des commentaires dans vos
        fichiers de licences, en faisant commencer la ligne par le caract�re
        di�se ' # '. Par d�faut, les licences sont maintenant g�n�r�es avec le
        nom du client.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">WinPro Light,
        changement de libell�</span><span class="f_Textestd"> du menu Gestion
        des confirmations | Impression des confirmations, renomm� en Bon de
        commande client.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Filtre syst�me
        pour les faux cintrages:</span><span class="f_Textestd"> Un nouveau
        dialogue dans le param�trage des faux cintrages permet d'autoriser le
        faux cintre par syst�me.</span></p>

        <p class="p_Comment"><span style="font-size: 12pt;">�</span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim61.jpg" width="268"
        height="435" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="text-align: center;"><span class="f_Comment"
        style="font-size: 8pt;">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Quincaillerie
        multi ouvrant:</span><span class="f_Textestd"> Vous pouvez � pr�sent
        associer une m�me quincaillerie � de multiples cadres ouvrant. Le
        param�trage de cette quincaillerie multi ouvrants doit bien entendu
        �tre compatible avec tous les cadres ouvrant auxquels elle est
        associ�e. Pour activer cette fonction, ajouter la clef suivante (format
        entier I) dans la table settings:</span></p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-family: 'Tahoma'; font-weight: bold;">[System]</span></p>

        <p class="p_Comment"><span class="f_Winproini">Quinc Multi
        Ouvrant</span><span
        style="font-size: 12pt; font-family: 'Courier New';">� � � �= 0 � � �
        �une quincaillerie pour un cadre ouvrant (comportement actuel de
        Winpro, valeur par d�faut)</span></p>

        <p class="p_Comment">� � � � � � � � � � � �<span
        style="font-size: 12pt; font-family: 'Courier New';">= 1 � � � �active
        le dialogue quincaillerie multi ouvrants</span></p>

        <p style="text-align: center;"><span class="f_Comment"
        style="font-size: 8pt;">�</span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim62.jpg" width="492"
        height="346" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="text-align: center;"><span class="f_Comment"
        style="font-size: 8pt;">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle
        variable _TauxTva:</span><span class="f_Textestd"> Une nouvelle variable
        globale </span><span class="f_Variables">_TauxTVA</span><span
        class="f_Textestd">, disponible en tout d�but de calcul,� permet de
        conna�tre la valeur du taux de TVA appliqu� � la commande
        client.</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Optimisation
        anticip�e:</span><span class="f_Textestd"> Une nouvelle case � cocher
        dans la fiche syst�me autorise les commandes � �tre optimis�es d�s lors
        que l'�tape Gestion des confirmation | Validation des confirmations
        (Approbation technique) a �t� valid�e, sans passer par les �tapes
        habituelles. Pour lancer l'optimisation des commandes apr�s
        l'approbation technique, rendez vous dans le menu Gestion de production
        | Optimisation anticip�e. </span></p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Optimisation
        s�par�e des traverses:</span><span class="f_Textestd"> Une nouvelle
        option, dans le menu Utilitaires | Pr�f�rences onglet Optimisation,
        active une nouvelle case � cocher dans le dialogue de lancement de
        l'optimisation, permettant de lancer une optimisation des traverses
        s�par�ment des ch�ssis.</span></p>

        <p style="text-align: center;"><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;">�</span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim63.jpg" width="295"
        height="309" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="text-align: center;"><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;">�</span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim64.jpg" width="300"
        height="188" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="text-align: center;"><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Au lancement d'un lot
        d'optimisation, si l'utilisateur d�coche la case ��Optimiser les
        traverses plus tard��, les traverses seront optimis�es normalement avec
        les ch�ssis. Si la case est coch�e au lancement du lot, les traverses
        devront �tre optimis�es via le menu Gestion de production |
        Optimisation des traverses. La case dispara�t si un lot s�lectionn� ne
        contient pas de traverses.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle
        variable pour WinPro/D:</span><span class="f_Textestd"> Une nouvelle
        s�rie de variables sp�cifiques � WinPro/D, </span><span
        class="f_Variables">_Remise1D</span><span class="f_Textestd"> (1�re
        remise ch�ssis), </span><span class="f_Variables">_Remise2D</span><span
        class="f_Textestd"> (2�me remise ch�ssis), </span><span
        class="f_Variables">_Remise3D</span><span class="f_Textestd"> (3�me
        remise ch�ssis), </span><span
        class="f_Variables">_RemiseVolet1D</span><span class="f_Textestd"> (1�re
        remise volet),� </span><span
        class="f_Variables">_RemiseVolet2D</span><span class="f_Textestd"> (2�me
        remise volet) et </span><span
        class="f_Variables">_RemiseVolet3D</span><span class="f_Textestd"> (3�me
        remise volet), est initialis�e par WinPro sur base des remises
        accord�es au rep�re en cours de calcul. Elles ne sont pas modifiables
        par param�trage, mais peuvent �tre utilis�es pour permettre de
        conditionner des traitements en fonctions des remises par rep�res
        saisies dans la commande WinPro/D.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Pr�fixe de lot
        automatique pour la GLP:</span><span class="f_Textestd"> Si votre
        licence active le module GLP, deux nouvelles clefs dans la table
        settings permettent de d�finir, pour chaque utilisateur, un pr�fixe
        personnalis� dans la num�rotation des lots. Pour activer cette
        fonction, il faut cr�er dans settings autant de clef que d'utilisateur,
        comme suit:</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">�</span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><span
        class="f_Comment"
        style="font-size: 12pt; font-weight: bold;">[PrefixeLot]</span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 48px;"><span
        class="f_Winproini">%user%:Prefixe</span><span
        style="font-size: 12pt; font-family: 'Courier New';">� � � �= format
        caract�re S, code du lot pour cet utilisateur</span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 48px;"><span
        class="f_Winproini">%user%:Numero � � � �</span><span
        style="font-size: 12pt; font-family: 'Courier New';">= format double D,
        num�ro d'ordre du prochain lot � cr�er </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_TitreReleaseNote">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Ajout d'une case
        R�impression de confirmation dans l'onglet Action:</span><span
        class="f_Textestd"> Cette case permet de r�imprimer une confirmation
        pour une commande confirm�e mais pas encore optimis�e (compl�tement ou
        partiellement). Cette confirmation pourra toutefois provoquer des
        �carts de prix par rapport � la premi�re confirmation
        imprim�e.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Filtres de type
        Like pour les bases de donn�es au format mySQL:</span><span
        class="f_Textestd"> Il est maintenant possible de rechercher une sous
        cha�ne de caract�re dans la cha�ne de caract�re d'un code ou d'une
        description dans WinPro. Par exemple, pour rechercher la cha�ne
        �urand�� dans le nom de client, vous pourrez taper dans le champs Nom
        client de la fiche commande, l'instruction ��%urand%�� puis cliquer
        l'ascenseur de recherche. Ceci filtrera tous les codes client dont le
        champ nom contient la cha�ne ��urand��.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim65.jpg" width="326" height="123" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ceci n'est valable que
        pour une base de donn�e au format mySQL.</span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
