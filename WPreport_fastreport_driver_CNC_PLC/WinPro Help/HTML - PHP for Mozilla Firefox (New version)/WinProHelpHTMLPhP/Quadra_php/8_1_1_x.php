<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>	
<!DOCTYPE php PUBLIC "-//W3C//DTD php 4.01 Transitional//EN">  
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["8.1.1.x","8.1.1.x","8.1.1.x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?8_1_1_x.php"; }
else { parent.quicksync('a11.2.1'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>8.1.1.x</title>
  <meta name="keywords"
  content="_CategCoupleurDroite,_CategCoupleurGauche,_CategCoupleurHaut,_CategCoupleurBas [ ]">
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
        href="introduction.php">Top</a>  <a href="8_1_2_x.php">Previous</a>  <a
        href="8_1_0_x.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p class="p_Comment"><span class="f_Comment"
        style="font-size: 8pt;">* Not compatible with version 7.2, unless mentioned</span></p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 8pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.129</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">21/06/2011</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Modified tables</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Created tables</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">None</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">None</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;">WPREPORT under command line with input file:</span>
        You may run WpReport program using a command line instruction, or through a batch file (*.bat), as defined into release note 8.04xx.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 57px;"><span
        style="color: #0000ff;">WinPro /WPR@User:Password @Ini_file</span></p>

        <p>Runs a report using an imput ini file. WinPro's login dialog won't appear. Do not work with empty password. 
		<span style="color: #0000ff;">Ini_file</span> corresponds to the full name and path of the ini file.</p>

        <p><span style="font-family: 'Times New Roman';"> </span></p>

        <p><span style="font-family: 'Times New Roman';">   </span> <span
        style="text-decoration: underline;">Example</span> :</p>

        <p> <br>
        <span
        style="font-family: 'Times New Roman'; font-style: italic;">   </span><span
        style="font-style: italic;">    - WinPro /WPR@Administrator:password @c:\test.ini         </span>(test.ini file is located into disk C:).<br>
        <span
        style="font-family: 'Times New Roman'; font-style: italic;">   </span><span
        style="font-style: italic;">    - WinPro /WPR@ Administrator:password @.\test.ini            </span>(test.ini file is located into WinPro base directory).<br>
        <span style="font-family: 'Times New Roman';">   </span> <br>
        <span style="font-family: 'Times New Roman';">   </span> <span
        style="text-decoration: underline;">INI file structure :</span><br>
        <span style="font-family: 'Times New Roman';">   </span>    <br>
        <span style="font-family: 'Times New Roman';">   </span>    <span
        style="font-weight: bold;">[WPReport]</span> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="245" style="width: 245px; height: 22px;"><p
                style="margin: 0px 0px 0px 34px;"><span
                style="font-style: italic;">REPORT=</span> </p>
              </td>
              <td width="829" style="width: 829px; height: 22px;"><p
                style="margin: 0px 0px 0px 34px;">WPR report code to run.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="245" style="width: 245px;"><p
                style="margin: 0px 0px 0px 34px;"><span
                style="font-style: italic;">PARAMCOUNT=</span>        </p>
              </td>
              <td width="829" style="width: 829px;"><p
                style="margin: 0px 0px 0px 34px;">Number of settings to consider for the WPR report (ex: 10).</p>
              </td>
            </tr>
          </tbody>
        </table>
        <br>
        <span style="font-family: 'Times New Roman';">   </span>    <br>
        <span style="font-family: 'Times New Roman';">   </span>    <span
        style="font-weight: bold;">[PARAM-1]</span></div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="245" style="width: 245px; height: 22px;"><p
                style="margin: 0px 0px 0px 29px;"><span
                style="font-style: italic;">NAME=</span></p>
              </td>
              <td width="829" style="width: 829px; height: 22px;"><p
                style="margin: 0px 0px 0px 34px;">Setting's name. This name is retrieved into WPReport at queries level.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="245" style="width: 245px;"><p
                style="margin: 0px 0px 0px 29px;"><span
                style="font-style: italic;">TYPE=</span>        </p>
              </td>
              <td width="829" style="width: 829px;"><p
                style="margin: 0px 0px 0px 34px;">Field format of the setting (values <span style="font-weight: bold;">ftinteger
                </span> for an integer, <span style="font-weight: bold;">ftstring</span> for a string, <span style="font-weight: bold;">ftfloat 
				</span> for a floating point).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="245" style="width: 245px;"><p
                style="margin: 0px 0px 0px 29px;"><span
                style="font-style: italic;">VALUE=</span></p>
              </td>
              <td width="829" style="width: 829px;"><p
                style="margin: 0px 0px 0px 35px;">Value of setting to be replaced.</p>
              </td>
            </tr>
          </tbody>
        </table>
        <br>
        <span style="font-family: 'Times New Roman';">   </span>    .<br>
        <span style="font-family: 'Times New Roman';">   </span>    <span
        style="font-weight: bold;">[PARAM-10]</span><br>
        <span
        style="font-family: 'Times New Roman'; font-style: italic;">   </span><span
        style="font-style: italic;">   NAME=</span><br>
        <span
        style="font-family: 'Times New Roman'; font-style: italic;">   </span><span
        style="font-style: italic;">   TYPE=</span><br>
        <span
        style="font-family: 'Times New Roman'; font-style: italic;">   </span><span
        style="font-style: italic;">   VALUE=</span><br>
         <br>
        <span style="font-family: 'Times New Roman';">   </span>    <span
        style="font-weight: bold;">[MISC]</span></div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="245" style="width: 245px; height: 22px;"><p
                style="margin: 0px 0px 0px 29px;"><span
                style="font-style: italic;">PREVIEW=</span>        </p>
              </td>
              <td width="829" style="width: 829px; height: 22px;"><p
                style="margin: 0px 0px 0px 34px;">Report is previewed into WPR (1) or physically printed (0, default).</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
        <p> <br>
        <span style="font-family: 'Times New Roman';">   </span>    <span
        style="font-weight: bold;">[PRINTER]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="245" style="width: 245px; height: 22px;"><p
                style="margin: 0px 0px 0px 34px;"><span
                style="font-style: italic;">NAME=</span></p>
              </td>
              <td width="829" style="width: 829px; height: 22px;"><p
                style="margin: 0px 0px 0px 34px;">Default printer name to use with the report, as defined into Windows.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="245" style="width: 245px;"><p
                style="margin: 0px 0px 0px 32px;"><span
                style="font-style: italic;">COPIES= </span>        </p>
              </td>
              <td width="829" style="width: 829px;"><p
                style="margin: 0px 0px 0px 34px;">Number of identical copies of the same report.</p>
              </td>
            </tr>
          </tbody>
        </table>
        <br>
        <span style="font-family: 'Times New Roman';">   </span>    </div>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="642" bgcolor="#8bab97"
              style="width: 642px; background-color: #8bab97; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 9px;"><span
                style="font-weight: bold; color: #000000; text-decoration: underline;">Note:</span><span
                style="color: #000000; text-decoration: underline;"></span></p>
                <p style="margin: 0px 0px 0px 9px;"><span class="f_Textestd">-
                When field </span><span class="f_Textestd"
                style="font-weight: bold;">[PARAM-n]</span><span
                class="f_Textestd">.</span><span
                style="font-style: italic; color: #000000;">NAME </span><span
                class="f_Textestd">to replace is </span><span
                class="f_Textestd" style="font-weight: bold;">:order </span>for instance, it will be typed
				<span style="font-weight: bold;">order
                </span>without the &lsquo; <span
                style="font-weight: bold;">:</span> &lsquo; !!<br>
                <span style="font-weight: bold; color: #ff0000;">- The ini file is deleted after usage !</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.099</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/11/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Modified tables</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Created tables</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">None</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">None</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span class="f_TitreReleaseNote"> </span></p>

        <p><span class="f_TitreReleaseNote">New global variable _RecordedOrder:</span> This global variable labelled <span class="f_Variables">_RecordedOrder</span> 
		will be worth 1 as soon as the order or quotation has been recorded once. It is worth zero as long as the order is not recorded.</p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.087</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">09/11/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Modified tables</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Created tables</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">None</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">None</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span class="f_TitreReleaseNote"> </span></p>

        <p><span class="f_TitreReleaseNote">Behaviour changes for variable _OrderStatus:</span> In order to allow a more accurate management of
		the orders and quotations, the behaviour of the <span class="f_Variables">_OrderStatus</span> variable has been modified.</p>

        <p>Previously, when a user created a new quote or order, <span class="f_Variables">_OrderStatus</span> was initialized with a zero value
		as long as the quote or order was not recorded at least once.</p>

        <p>This behaviour is now modified, WinPro initializes <span class="f_Variables">_OrderStatus</span> to the value corresponding to the
		quote or order status (respectively 100 or 200), as soon as created, without the need to record at least once.</p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.077</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">01/09/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Modified tables</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Created tables</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">None</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">None</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>
        <p><span class="f_TitreReleaseNote">Addition to module Glazings Reception CFV:</span> The glazings reception dialog, menu Order |
		Production management | Glazings reception, is now displayed with a new field corresponding to the barcode of the glass units, in order
		to clearly distinguish the multiple glass units possible from a same design.</p>

        <p>Moreover, it is now possible to sort orders according their codes, ascending or descending, by clicking on the column header.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0284eng.jpg"
        width="712" height="372" border="0" alt="clip0284eng"></p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.075</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">29/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Modified tables</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Created tables</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">None</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">None</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p><span class="f_TitreReleaseNote">Standalone roller shutter and system formula:</span> When creating a standalone roller shutter,
		variables initialized from the <span style="font-weight: bold;">Formula</span> tab of the System record are no more considered within
		the roller shutter, as well as for questions and variables from frames belonging to the concerned system.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Bull-eyes shape and outer frame masonry depth:</span> For a bull-eye shape of design nto the <span
        style="font-weight: bold;">Dimension</span> tab of the order, fields corresponding to the masonry depths for Top, Left and Right sides
		are now locked and cannot be filled anymore. Only the Bottom depth is now available for this shape.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim12eng.jpg" width="383"
        height="304" vspace="1" hspace="1" border="0" alt=""></p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Toggle prospects to customer record:</span> When transferring a prospect record as customer record
		using the appropriate button, WinPro now automatically copies the field related to the responsible name into the prospect record to the
		field « Contact name » of the customer corresponding record, into the <span style="font-weight: bold;">Relations</span> tab.</p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.074</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">29/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Modified tables</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Created tables</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">None</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">None</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Peripheral profiles into a window:</span> The maximum number of peripheral profiles that can be
		encoded into a single design has been increased, from 20 to up to 100 profiles for a same design.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Additional print call for WPR:</span>
        A new key into <span style="font-style: italic;">settings</span> table activates an additional print call for WPR, just before the
		generation of machine files, at optimization stage.</p>

        <p> </p>

        <p><span style="font-weight: bold;">[Reports]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="188"><span class="f_Winproini">After Data
                Optimisation</span></td>
              <td><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">=
                Is worth 1 to add an additional print call for WPR before machine file generation, 0 otherwise (Integer format I, default value).
				</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-family: 'Calibri';"> </span></p>

        <p><span
        style="font-weight: bold; text-decoration: underline;"></span><span
        class="f_TitreReleaseNote">New global variables for transoms and connectors:</span> New global variables available for transoms and
		connectors, as follows :</p>

        <p style="text-indent: -142px; margin: 0px 0px 0px 189px;"><span
        class="f_Variables"> </span></p>

        <div
        style="text-align: left; text-indent: -142px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="228" style="width: 228px;"><p
                style="text-indent: -7px; margin: 0px 0px 0px 30px;"><span
                class="f_Variables">_RightCouplCateg []</span></p>
              </td>
              <td width="503" style="width: 503px;"><p>=  Coupler category on the right side, at the end of the coupler currently calculated
			  (<span class="f_Variables">TransomIndex</span>).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="228" style="width: 228px;"><p
                style="text-indent: -7px; margin: 0px 0px 0px 30px;"><span
                class="f_Variables">_LeftCouplCateg []</span></p>
              </td>
              <td width="503" style="width: 503px;"><p>=  Coupler category on the left side, at the end of the coupler currently calculated
			  (<span class="f_Variables">TransomIndex</span>).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="228" style="width: 228px;"><p
                style="text-indent: -142px; margin: 0px 0px 0px 165px;"><span
                class="f_Variables">_TopCouplCateg []</span></p>
              </td>
              <td width="503" style="width: 503px;"><p>=  Coupler category on the top side, at the end of the coupler currently calculated
			  (<span class="f_Variables">TransomIndex</span>).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="228" style="width: 228px;"><p
                style="text-indent: -142px; margin: 0px 0px 0px 165px;"><span
                class="f_Variables">_BottomCouplCateg []</span></p>
              </td>
              <td width="503" style="width: 503px;"><p>=  Coupler category on the bottom side, at the end of the coupler currently calculated
			  (<span class="f_Variables">TransomIndex</span>). </p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -142px;"> <br>
        The connector currently computed is numbered <span class="f_Variables">TransomIndex</span>.</p>

        <p> </p>

        <p><span style="text-decoration: underline;">Usage sample :</span></p>

        <p> </p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="color: #000080;">Quantity := _RightCouplCateg [TransomIndex]</span><br>
        <span style="color: #000080;">Length := TransomIndex</span><br>
        <span style="font-size: 12pt; color: #000080;"> </span><br>
        <span style="color: #000080;">If _RightCouplCateg [TransomIndex] = 0</span><br>
        <span
        style="font-family: 'Times New Roman'; color: #000080;">  </span><span
        style="color: #000080;">Quantity := 100</span><br>
        <span
        style="font-family: 'Times New Roman'; color: #000080;">  </span><span
        style="color: #000080;">Length := 1000</span><br>
        <span style="color: #000080;">End If</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="color: #000080;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.065</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">29/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Modified tables</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Created tables</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">LaqArt</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">None</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Reservations/Supplier orders and varnished articles:</span> You have now the ability to reserve and
		order varnishes according the full bar length of a profile instead of the exact optimized length of profiles.</p>

        <p>Until now, WinPro computed varnishes with only considering the exact cutting lengths of profiles, without varnishing the full length
		for reservations or supplier order.</p>

        <p>You may now choose between both method, using a new checkbox into the <span style="font-weight: bold;">Varnish</span> tab of the
		Article record.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim13eng.jpg" width="619"
        height="289" vspace="1" hspace="1" border="0" alt=""></p>

        <p> </p>

        <p>When box <img src="img/embim14eng.jpg" width="90" height="30"
        vspace="1" hspace="1" border="0" alt=""> is checked, WinPro computes varnishing article reservations according the full bar length. When
		unchecked, WinPro will only consider the cutting lengths of profiles, offcuts are then ignored.</p>

        <p> </p>

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
                8.1.1.063</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">06/07/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">New field related to thermic module (TM):</span> A field labelled ERRTHERM is added into <span
        style="font-style: italic;">Detail2</span> table as well as <span style="font-style: italic;">Fen</span> table for WPR users. This field
		will be filled with the potential error messages from thermic computation (Thermic Module TM).</p>

        <p> </p>

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
                8.1.1.059</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">06/07/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>
		
        <p><span class="f_TitreReleaseNote">Addition of a new user right for thermic module:</span> A new user right is available into the User
		record, allowing the set up of <span style="font-weight: bold;">Thermic Module TM</span>.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim15eng.jpg" width="160"
        height="44" vspace="1" hspace="1" border="0" alt=""></p>

        <p> </p>

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
                8.1.1.058</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">06/07/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Importation of installation articles within WinPro/D:</span> WinPro/D offers now the ability to
		automatically answer the question "Do you want to import installation articles?" when importing a quotation (release note 8.1.1.047).</p>

        <p>Here is the needed key to add into the <span style="font-style: italic;">Settings</span> table of WinPro/D, as well as the WinPro/D's
		behaviour according this key:</p>

        <p><span style="font-family: 'Tahoma'; font-weight: bold;"> </span></p>

        <p><span
        style="font-family: 'Tahoma'; font-weight: bold;">[WinProD]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">AutoImportPose        =
        0</span><span class="f_Textestd">       Ask the question (default behaviour).</span></p>

        <p class="p_Textestd">                       <span
        class="f_Winproini">= 1</span><span class="f_Textestd">       Auto answer yes.</span></p>

        <p class="p_Textestd">                       <span
        class="f_Winproini">= 2</span><span class="f_Textestd">       Auto answer no.</span></p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Filters on multi-sashes for fittings feature:</span> The behaviour of the key enabling the
        <span style="font-weight: bold;">Multi-Sashes for Fittings</span> (refer to previous release notes) has been modified to allow to filter
		into the fittings frame the sashes list from the same system or not.</p>

        <p> </p>

        <p><span
        style="font-family: 'Tahoma'; font-weight: bold;">[System]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Quinc Multi Ouvrant    
           = 0</span><span class="f_Textestd">       No multi-sashes for fittings frame feature (default).</span></p>

        <p class="p_Textestd">                       <span
        class="f_Winproini">= 1</span><span class="f_Textestd">       Multiple sashes from the same system.</span></p>

        <p class="p_Textestd">                       <span
        class="f_Winproini">= 2</span><span class="f_Textestd">       Multiple sashes from all systems.</span></p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Modification of the _Quantity variable behaviour:</span> Until now, the 
		<span class="f_Variables">_Quantity</span>variable was initialized to zero by default, which might involve error message of "division by
		zero" when this variable is used into a division operation. This variable is now set to 1 by default.</p>

        <p>       </p>

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
                8.1.1.057</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">06/07/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">New field into table VitreCde:</span> Two new fields are added to table 
		<span style="font-style: italic;">VitreCde</span>. They will be filled with the thickness of the first and second spacer (in case of
		triple glass unit) of a glazing, respectively EPINTERC and EPINTERC2.</p>

        <p><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>
        <p><span class="f_TitreReleaseNote">Warm-edges printing:</span>
        At the WarmEdge record level, a checkbox allows now to choose when the Warm-edge is to be printed or not onto main documents (Quote,
		confirmation, factory docs, glass order form, etc...).</p>

        <p>This feature has been added to avoid printing this information when the warm-edge input by the user is not a warm-edge.</p>

        <p>For instance : « Warm-Edge : DUMMY ».</p>

        <p><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p><span class="f_TitreReleaseNote">IMPA module for articles creation/importation:</span> This module <span
        style="font-weight: bold;">Articles Importation IMPA</span> used to generate an articles table from a DBF file (compatible with Excel),
		is now compliant with mySQL database format.</p>

        <p>This module was only FoxPro format compliant previously.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Import of decorative composed panels (IPDC module):</span> A new module <span
        style="font-weight: bold;">IPDC - Import of decorative composed panel</span> has been added. This module allows importation and
		automatic creation of Harinck's decorative composed panels. WinPro allows now to import an Excel file provided by the panel supplier
		Harinck.</p>

        <p>This file contains all needed settings for the various panels.</p>

        <p>From this Excel file, WinPro will create panels as well as needed set up and articles associated to the panels.
		In order to import such a file from Harinck supplier, you may use menu Tools | Import composed decorative panels.</p>

        <p>       </p>

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
                8.1.1.053</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">06/07/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Programmed glass supplier:</span> You may now define a glass supplier by rule. This feature is
		enabled through a new key into <span style="font-style: italic;">Settings</span> table from one hand, and with setting up a formula to
		assign a supplier from a second hand.</p>

        <p> </p>

        <p><span
        style="font-family: 'Tahoma'; font-weight: bold;">[Glass]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Supplier by formula    
           = 0</span><span class="f_Textestd">       Feature disabled (default).</span></p>

        <p class="p_Textestd">                       <span
        class="f_Winproini">= 1</span><span class="f_Textestd">       
         Feature enabled, the glass supplier may be set by formula.</span></p>

        <p> </p>

        <p>When you enable this functionality, it is imperative to set a specific identifier for each supplier, for glass suppliers as well as
		for others material suppliers.</p>

        <p>This is to be set into the supplier record, into the dedicated field from the "Delivery and supply" tab.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim16eng.jpg" width="294"
        height="67" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="text-align: center;"> </p>

        <p>The glass supplier may be then defined by formula using the global filling variable <span
        class="f_Variables">_FillingSupplier</span>, indexed onto the filling number, as follows:</p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Variables"
        style="font-style: italic;">_FillingSupplier [FillingIndex] := ID of the supplier</span></p>

        <p style="text-align: center; margin: 0px 0px 0px 47px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="361" bgcolor="#00b2ae"
              style="width: 361px; background-color: #00b2ae; border: solid 1px #000000;"><p><span
                style="font-style: italic; font-weight: bold; color: #ff0000; text-decoration: underline;">Attention
                !</span></p>

                <p class="p_Textestd"><span class="f_Textestd">The filling supplier ID field is visible only if you have the module
				</span><span class="f_Textestd" style="font-weight: bold;">Multi Supplier for Glazing (MFV)</span><span class="f_Textestd">.
				Also, if the customer doesn't have required licence for MFV module, the </span><span class="f_Variables">_FillingSupplier[]
				</span><span class="f_Textestd" style="font-weight: bold;"></span><span class="f_Textestd"> variable will be handled as a
				classic global variable, and it wouldn't be suitable for WinPro to assign a different supplier for glazing by rules.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>       </p>

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
                8.1.1.050</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">06/07/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Teleglass EDI and composed glazings:</span> Addition to the glazing IDE for protocole Teleglass,
		the concatened code of a composed glazing is now written into the file generated by the IDE link.</p>

        <p>       </p>

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
                8.1.1.049</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">06/07/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Composed panel and composed glazing:</span> It is now possible to use a composed glazing with a
		composed panel set up, with keeping in mind the following rules:</p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>When the glazing code is not defined into the glazing tab of a composed panel set up, Winpro uses the glazing as it is input
			  into the window tab of the quote or order.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0262eng.jpg"
        width="293" height="134" border="0" alt="clip0262eng"></p>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>When the glazing code is set into this tab of the composed panel, the questions from the glass unit need to be copied into
			  the composed panel question set.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0263eng.jpg"
        width="294" height="133" border="0" alt="clip0263eng"></p>

        <p>       </p>

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
                8.1.1.047</span></p>
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

        <p> </p>

        <p><span class="f_TitreReleaseNote">Installation articles into WinPro/D:</span> When importing a quotation into WinPro/D, the user is
		now invited to confirm if Installation Articles need to be considered or not.</p>

        <p>When importing a quotation, a new dialog " Do you want to import installation articles into the quotation? " is displayed:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>When answering "YES", installation articles will be imported along with the content of the Installation tab of the order.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>When answering "NO", installation articles are not imported, the installation tab of the quote is also ignored.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>For exports, when the user answer "No" to the question "Is this file for the window maker?", the installation articles are
		systematically exported within the quotation.</p>

        <p>       </p>

        <p>       </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.039</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">25/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Modified tables</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Created tables</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">ReportCfg</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="text-align: center; margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';"> </span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Automatic PDF generation for WpReport:</span> A new feature allowing to print any WpReport document
		types into a PDF file, automatically, using new optional fields into menu <span style="font-weight: bold;">Reports | Documents 
		type</span>.</p>

        <p><span style="font-family: 'Times New Roman';"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0283eng.jpg"
        width="678" height="397" border="0" alt="clip0283eng"></p>

        <p> </p>

        <p>To activate the feature, you should define :</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>The PDF print option column <img src="img/embim17.jpg"
                width="25" height="37" vspace="1" hspace="1" border="0"
              alt=""></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>The target directory and filename <img src="img/embim18eng.jpg" width="206" height="37" vspace="1" hspace="1" border="0" alt="">.
			  The <span style="color: #0000ff;">%ORDER%</span> keyword will be replaced here by the order number.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 47px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="361" bgcolor="#00b2ae"
              style="width: 361px; background-color: #00b2ae; border: solid 1px #000000;"><p><span
                style="font-style: italic; font-weight: bold; color: #000000; text-decoration: underline;">Note:</span></p>

                <p><span style="font-style: italic;">The correct variable name to be used for the filename is "%ORDER%", including the % signs
				surrounding, and the variable is uppercased and case sensitive. Otherwise the variable will not be interpreted.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 48px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.038</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">19/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Modified tables</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Created tables</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">VitreCde</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">MotifCdeVitre</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p><span class="f_TitreReleaseNote">Glass reorder feature for Glass Reception Module (CFV):</span> Considering your various feedbecks,
		the <span style="font-weight: bold;">Glass Reception Module CFV</span> has been enhanced with new column within the interface, along
		with a new automatic reorder for glazings feature, in case of needs (Customer Service).</p>

        <p> </p>

        <p><span style="text-decoration: underline;">Set up :</span></p>

        <p> </p>

        <p style="text-indent: 47px;">In a first step, a list of reasons for glazings reorder should be set up, using a new menu available at
		<span style="font-weight: bold;">Data | Miscellaneous | Reason for glass reorder</span>.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0279eng.jpg"
        width="301" height="151" border="0" alt="clip0279eng"></p>

        <p style="text-align: center;"> </p>

        <p>When box « No price » is checked for a given reason, the glass customer service order generated, for a glass unit using such a
		reorder reason, will not be valued. The customer service order will be generated with the « No price » box checked within the 
		<span style="font-weight: bold;">Window</span> tab of the order.</p>

        <p>The same box from the <span style="font-weight: bold;">Window</span> tab will be unchecked in case of a reason for reorder where the
		« No price » box is unchecked; the order will then be valued.</p>

        <p> </p>

        <p style="text-indent: 47px;">A specific system record, dedicated to customer service for reordered glass units, will also have to be
		created. Such a system is similar to a system created for partial refabrication, such as fabricate again a leaf, a sash frame only for
		instance, as soon as it respects the following rules:</p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Creation of a dummy system code for glass unit customer service.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Creation of a dummy outer frame into the system, without dimensions set (no larger/smaller height set).</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Creation of a dummy sash frame into the system, without dimensions set (no outter/inner height set).</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Creation of a dummy fittings frame linked to the previous sash frame.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Creation of a dummy bead frame into the system, checked as «  define with formulas », and without components.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Finally set the default value for the system record with previously created elements.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="margin: 0px 0px 0px 47px;">Finally, two new keys into  <span style="font-style: italic;">Settings</span> table will be needed
		:</p>

        <p> </p>

        <p><span
        style="font-family: 'Tahoma'; font-weight: bold;">[Glass]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="188"><span class="f_Winproini">Systeme pour
                recommande</span></td>
              <td>       <span
                style="font-family: 'Courier New'; font-weight: bold;">=
                Define here the code of the system created for glass reorder only (String format S).</span></td>
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
              <td width="188"><span class="f_Winproini">Default
              pattern</span></td>
              <td>       <span
                style="font-family: 'Courier New'; font-weight: bold;">= Set here the reason for glass reorder by default to be used when no
				reason is set into the interface.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span style="text-decoration: underline;">Usage :</span></p>

        <p> </p>

        <p>       The usage of this feature starts into menu Orders | Production management | Glazing reception.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0280eng.jpg"
        width="859" height="509" border="0" alt="clip0280eng"></p>

        <p> </p>

        <p>Within this dialog, columns have been added in order to locate sharply the glass unit concerned, showing for each unit the sash
		number, leaf number and filling number into the window.</p>

        <p> </p>

        <p style="text-indent: 47px;">Three new columns are also dedicated to glass reorder feature :</p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>« To be reordered » corresponds to a checkbox that activates the automatic glass reorder. Any checked glass unit may be
			  reordered when the user press button <img src="img/clip0281eng.jpg" width="148" height="24"
                border="0" alt="clip0281eng">.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>« Cust.Serv. code » is automatically set by WinPro with the code of the corresponding customer service order that will be
			  automatically created for glass unit checked « To be reordered ». This code label is based onto the prefix defined for customer
			  service order, within menu <span style="font-weight: bold;">Tools | Preferences</span>, Numbering for the customer service fields
			  .</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>« Reason » allows defining a reason to create the customer service order, among existing reasons. When no reason is set, the
			  default reason is automatically selected (refer to key <span style="font-family: 'Courier New';">Default pattern</span> of 
			  <span style="font-style: italic;">settings</span> table above).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>This dialog may be displayed at any time, it shows which glazings are already receptionned or reordered, for which reasons as well
		as showing the corresponding customer service order codes.</p>

        <p> </p>

        <p>When a glass customer service order is created, the original order code and reference are copied into the reference of the new
		customer service order, to enhance tracking capabilities.</p>

        <p> </p>

        <p style="text-indent: 47px;">Finally, the glass reorder processes are also tracked into the « Glazing reception » tab of the order. A
		« Cust.Serv. code » column is added, and will contain the code of the customer service order related to the original unit.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0282eng.jpg"
        width="841" height="209" border="0" alt="clip0282eng"></p>

        <p style="text-align: center;"><span
        style="font-size: 12pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.028</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">26/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Modified tables</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Created tables</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Glazing bars input modification:</span> It is now forbidden to encode a glazing bar frame with less
		than 2 cells (Horizontal and Vertical), as it is already the case with glazing bars defined by formulas.
		Moreover, you may now encode glazing bars using a number of bars instead of a number of cells.
		To enable this, simply add the following key into <span style="font-style: italic;">settings</span> table:<br>
         </p>

        <p><span
        style="font-family: 'Tahoma'; font-weight: bold;">[System]</span></p>

        <p><span class="f_Winproini">Croisillon Encodage Barres      
         </span><span
        style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">=
        0  Encode cells (default).</span></p>

        <p>                               <span
        style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">=
        1  Encode bars.</span></p>

        <p><span
        style="font-family: 'Courier New'; font-weight: bold;"> </span></p>

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
                8.1.1.024</span></p>
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

        <p> </p>

        <p><span class="f_TitreReleaseNote">Filtered list of orders into invoice and delivery processes:</span> You may now display a filtered
		list of orders into dialogs "Reprint invoices" and "Reprint delivery note" instead of a ccomplete list, with creating the following key
		into <span style="font-style: italic;">Settings</span> table:</p>

        <p> </p>

        <p><span
        style="font-family: 'Tahoma'; font-weight: bold;">[System]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">FilterOrder        =
        0</span><span class="f_Textestd">       Complete list (base behaviour, default).</span></p>

        <p class="p_Textestd">               <span class="f_Winproini">=
        1</span>        <span class="f_Textestd">Filtered list.</span></p>

        <p> </p>

        <p>When the key is set to 1, the list of order will be displayed when the user defines at least one selection filter in the dialog.</p>

        <p>       </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.010</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">18/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Modified tables</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Created tables</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';"> </span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">GestPmt</span></p>

                <p style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">TypePmt</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Down payment management module (SP):</span> This new module allows managing with payments already
		done for the various customer orders, and printing accounting dedicated documents.</p>

        <p>To enable this module, you should obtain an appropriate licence file. A new menu entry is now available at Orders | Down payments
		management.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0273eng.jpg"
        width="302" height="352" border="0" alt="clip0273eng"></p>

        <p style="text-align: center;"> </p>

        <p><span style="text-decoration: underline;">Usage :</span></p>

        <p>The interface gives access to three features, « Input », « Print» and « Type of down payment ».</p>

        <p> </p>

        <p>       <span
        style="font-style: italic; text-decoration: underline;">Type of down payment :</span></p>

        <p>       This menu point is suitable for administrate the payment types used for encoding the down payment reception. You will here be
		able to use the different buttons to add, delete or modify payment types. Records generated are stored into table <span
        style="font-style: italic;">TypePmt</span>.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0274eng.jpg"
        width="489" height="402" border="0" alt="clip0274eng"></p>

        <p> </p>

        <p>       <span
        style="font-style: italic; text-decoration: underline;">Input of payment reception:</span></p>

        <p style="text-indent: 47px;">You may here select an existing order in the list, or select an order with filling the code field. Then,
		information related to the order is displayed in the dialog, as the invoiced amount, remaining amount due, and details for payments
		already done.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0275eng.jpg"
        width="1045" height="588" border="0" alt="clip0275eng"></p>

        <p style="text-align: center;"> </p>

        <p>Note that you cannot confirm a payment until the « Paid amount » field is filled.</p>

        <p>You may also set a date and type of payment, as well as a comment or the paid amount.</p>

        <p>The <img src="img/embim19.jpg" width="36" height="38" vspace="1"
        hspace="1" border="0" alt=""> button on the right area of the window is a direct access to the Windows' integrated calculator, for 
		your ease.</p>

        <p>When you finished encoding, use the button <img src="img/clip0276eng.jpg" width="142" height="38" border="0" alt="clip0276eng"> to
		record the transaction (into table <span style="font-style: italic;">GestPmt</span>), or else use the <img src="img/clip0277beng.jpg"
		width="143" height="37" border="0" alt="clip0277beng"> button to leave the module.</p>

        <p> </p>
	Accounting documents printing:
	This menu gives an access to printings for usefull accounting documents such as « Customer orders history », « Customer financial position » and « Customer financial position (aged) », for a given customer or a range of customer codes..



Note :
This module is based onto a standalone WpReport document, it is currently compatible only with mySQL database format, and is not suitable for a FoxPro database.

        <p>       <span
        style="font-style: italic; text-decoration: underline;">Accounting documents printing:</span></p>

        <p>       This menu gives an access to printings for usefull accounting documents such as « Customer orders history », « Customer
		financial position » and « Customer financial position (aged) », for a given customer or a range of customer codes.</p>

        <p style="margin: 0px 0px 0px 24px;"> <br>
        <img src="img/clip0278eng.jpg" width="934" height="413" border="0"
        alt="clip0278eng"></p>

        <p style="text-align: center; margin: 0px 0px 0px 47px;"><span
        style="font-size: 12pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="361" bgcolor="#00b2ae"
              style="width: 361px; background-color: #00b2ae; border: solid 1px #000000;"><p><span
                style="font-weight: bold; color: #0000ff; text-decoration: underline;">Note :</span></p>

                <p><span class="f_Textestd">This module is based onto a standalone WpReport document, it is currently compatible only with
				mySQL database format, and is not suitable for a FoxPro database.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 12pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.004</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Modified tables</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Created tables</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">None</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">OrderTxt</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>
		
        <p><span class="f_TitreReleaseNote">Details of composed glazings into the Information tab:</span> A new key into <span 
		style="font-style: italic;">Settings</span> table allows to decide if the composing glass leaves of a composed glazing should be
		detailled into the <span style="font-weight: bold;">Information</span> tab or not.</p>

        <p> </p>

        <p><span style="font-weight: bold;">[Glass]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="189"><span class="f_Winproini">Hide Glass
                Components</span></td>
              <td><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">= When set to 0 (Integer format I, default value),
				WinPro details the glass components into the <span style="font-size: 12pt; font-family: 'Courier New'; font-style: italic;
				font-weight: bold;">Information</span> tab of the order. When set to 1, only the composed glazing itself is displayed.
				</span></td>
            </tr>
          </tbody>
        </table>
        </div>


From menu Tools | Preferences Texts tab, a button  is also available in case you need to generate old format files from the recorded texts. Files will be recorded into an "OrderText" sub directory of the base path.
        <p> </p>

        <p><span class="f_TitreReleaseNote">Enhancement concerning texts for customer documents:</span> Texts at start/end of customer
		documents (created into preferences) are now transferred into the database, within a new table labelled <span style="font-style:
		italic;">OrderText</span>.</p>

        <p>Created texts will now be stored into this table.</p>

        <p>To import existing texts, the old format files has to be located into a "Data" directory of the base path (the directory
		needs to be created for a mySQL version of the program if not exists, and files should be copied into it).</p>

        <p>At WinPro or WinPro/D startup, you will be asked to import the text files, and files will be deleted afterward.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0260eng.jpg"
        width="413" height="195" border="0" alt="clip0260eng"></p>

        <p>From menu Tools | Preferences Texts tab, a button <img src="img/embim20eng.jpg" width="78" height="26" vspace="1" hspace="1"
		border="0" alt="">is also available in case you need to generate old format files from the recorded texts. Files will be
		recorded into an "OrderText" sub directory of the base path.</p>

        <p> </p>

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
                8.1.1.003</span></p>
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

        <p style="text-align: center;"><span class="f_Heading1"
        style="font-style: italic;"> </span></p>

        <p><span class="f_TitreReleaseNote">Composed decorative panel :</span> Addition of a new filling type : "Decorative
		composed panel". This filling type allows to manage with a Harinck's panels database.</p>

        <p> </p>

        <p>This filling type is input like the other filling types (glazing or panel, composed or not) into an order.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0035eng.jpg"
        width="403" height="214" border="0" alt="clip0035eng"></p>

        <p> </p>

        <p>This new filling type may be set up through an dedicated interface similar to the composed panel interface. Those set up
		dialogs are available either through the button located into the button bar on the top main window, or through menu 
		<span style="font-weight: bold;">Technic | Window | Decorative composed panel</span>.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim21.jpg" width="186"
        height="27" vspace="1" hspace="1" border="0" alt=""></p>

        <p> </p>

        <p>The interface is divided into a single screen containing various tabs:</p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim22eng.jpg" width="631"
        height="480" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>The <span style="font-weight: bold;">Description</span> tab is intented to define a description, two levels of
			  categories, an option to include the panel into a WinPro/D database or not, an article to be ordered to the supplier,
			  a selection filter (release note 8.02), a thermic category used for thermic computation (depending on modules,
			  release note 8.1.0) as well as the list of allowed colours to be used into the panel.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>The <span style="font-weight: bold;">Dimension</span> tab is used to define the default thickness of the panel as
			  well as limits of dimensions for the panel usage.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>The <span style="font-weight: bold;">Labour</span> tab is intended to set up additionnal costs for panel pricing,
			  as well as a code and time for labour in case of shaped panel.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>The <span style="font-weight: bold;">Question</span> tab allows to define a set of questions and answers that would be used within <span style="font-weight: bold;">Article</span> or <span style="font-weight: bold;">Drawing</span> tabs.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>The <span style="font-weight: bold;">Article</span> tab contains the list of articles to consume. The consumption
			  of those article determines the panel price. Each article may have a macro ID as well as a macro description (like
			  with composed glazing feature). Both strings will affect macros "<span class="f_Variables">@...@</span>", that can be
			  used into the description of the main article set for the panel. The <span class="f_Variables">TotalThickness</span>
			  variable may be used into the article formulas.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>The <span style="font-weight: bold;">Drawing</span> tab contains the list of WinPro's drawings to be used to
			  display or print the panel. The <span class="f_Variables">TotalThickness</span> variable may be used into the 
			  drawing formulas.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>The <span style="font-weight: bold;">Dxf</span> tab contains the list of WinPro's dxfthat may be used according
			  the panel thickness.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

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
                8.1.1.x</span></p>
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

        <p style="text-align: center;"><span class="f_Heading1"
        style="font-style: italic;"> </span></p>
        <p><span class="f_TitreReleaseNote">New module GLPV Production Line Management for Roller Shutter:</span> This new 
		optional module <span style="font-weight: bold;">GLPV</span> is intended for roller shutter fabricators to be able to
		affect a production line and prepare production batches according the roller box or roller curtain. This module is
		exclusively combined to module <span style="font-weight: bold;">VO</span>, it cannot be used along with module 
		<span style="font-weight: bold;">VO2</span>.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">New module TMS Simplifies Thermic Module:</span> This new module is designed from the
		full <span style="font-weight: bold;">Thermic Module TM</span>, with a significant simplification.</p>

        <p>The base computation method is kept as is here. However, WinPro just fetches the <span style="font-size: 
		12pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&Psi;g</span> value assigned by
		default to the warm-edge (depending on its thickness). There are then no tables to fill in for the variation of the 
		<span style="font-size: 12pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&Psi;g</span>
		value according the combination of profiles, filling thickness and <span style="font-size: 12pt; 
		font-family: 'Times New Roman'; color: #0000ff;">Ug</span> values.
		The final result of thermic computation is a value approaching very nearly of the real value, with staying between limits
		of what is allowed for this computation.</p>

        <p>Attention this module is only available under FoxPro database format. Under mySQL format database, the standard <span
        style="font-weight: bold;">TM</span> module remains the only one available.</p>
      </td>
<p> </p>
<p> </p>
<p> </p>
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

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.129</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">21/06/2011</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                modifiées</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                créées</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;">WPREPORT
        en ligne de commande avec fichier d</span><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;">&rsquo;</span><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;">entrée:</span>
        Vous pouvez lancer WpReport depuis une ligne de commande, ou via un
        fichier de traitement par lot (*.bat), comme défini dans la note de
        version 8.04xx. </p>

        <p> </p>

        <p style="margin: 0px 0px 0px 57px;"><span
        style="color: #0000ff;">WinPro /WPR@Utilisateur:mot_de_passe
        @Fichier_ini</span></p>

        <p>Permet d'exécuter un rapport via l'utilisation d'un fichier INI. La
        fenêtre de Login WinPro n'apparaitra pas. Ne fonctionne pas si mot de
        passe vide. <span style="color: #0000ff;">Fichier_ini</span> correspond
        au nom de fichier et chemin d&rsquo;accès complet à ce fichier. </p>

        <p><span style="font-family: 'Times New Roman';"> </span></p>

        <p><span style="font-family: 'Times New Roman';">   </span> <span
        style="text-decoration: underline;">Exemple</span> :</p>

        <p> <br>
        <span
        style="font-family: 'Times New Roman'; font-style: italic;">   </span><span
        style="font-style: italic;">    - WinPro
        /WPR@Administrateur:mot_de_passe @c:\test.ini         </span>(le
        fichier test.ini se trouve sur le disque C:).<br>
        <span
        style="font-family: 'Times New Roman'; font-style: italic;">   </span><span
        style="font-style: italic;">    - WinPro
        /WPR@Administrateur:mot_de_passe @.\test.ini           </span>(le
        fichier test.ini se trouve dans le répertoire de base de WinPro).<br>
        <span style="font-family: 'Times New Roman';">   </span> <br>
        <span style="font-family: 'Times New Roman';">   </span> <span
        style="text-decoration: underline;">Structure du fichier
        INI</span><span
        style="font-family: 'Times New Roman'; text-decoration: underline;"> </span><span
        style="text-decoration: underline;">:</span><br>
        <span style="font-family: 'Times New Roman';">   </span>    <br>
        <span style="font-family: 'Times New Roman';">   </span>    <span
        style="font-weight: bold;">[WPReport]</span> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="245" style="width: 245px; height: 22px;"><p
                style="margin: 0px 0px 0px 34px;"><span
                style="font-style: italic;">REPORT=</span> </p>
              </td>
              <td width="829" style="width: 829px; height: 22px;"><p
                style="margin: 0px 0px 0px 34px;">Code du rapport WPR à
                utiliser.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="245" style="width: 245px;"><p
                style="margin: 0px 0px 0px 34px;"><span
                style="font-style: italic;">PARAMCOUNT=</span>        </p>
              </td>
              <td width="829" style="width: 829px;"><p
                style="margin: 0px 0px 0px 34px;">Nombre de paramètres passés
                au rapport WPR (ex: 10).</p>
              </td>
            </tr>
          </tbody>
        </table>
        <br>
        <span style="font-family: 'Times New Roman';">   </span>    <br>
        <span style="font-family: 'Times New Roman';">   </span>    <span
        style="font-weight: bold;">[PARAM-1]</span></div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="245" style="width: 245px; height: 22px;"><p
                style="margin: 0px 0px 0px 29px;"><span
                style="font-style: italic;">NAME=</span></p>
              </td>
              <td width="829" style="width: 829px; height: 22px;"><p
                style="margin: 0px 0px 0px 34px;">Nom du paramètre. Ce nom sera
                repris dans WPReport au niveau des requêtes.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="245" style="width: 245px;"><p
                style="margin: 0px 0px 0px 29px;"><span
                style="font-style: italic;">TYPE=</span>        </p>
              </td>
              <td width="829" style="width: 829px;"><p
                style="margin: 0px 0px 0px 34px;">Format du champ passé en
                paramètre (valeurs <span style="font-weight: bold;">ftinteger
                </span>pour un entier, <span
                style="font-weight: bold;">ftstring </span>pour un caractère,
                <span style="font-weight: bold;">ftfloat </span>pour un nombre
                décimal)</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="245" style="width: 245px;"><p
                style="margin: 0px 0px 0px 29px;"><span
                style="font-style: italic;">VALUE=</span></p>
              </td>
              <td width="829" style="width: 829px;"><p
                style="margin: 0px 0px 0px 35px;">Valeur du paramètre à
                remplacer.</p>
              </td>
            </tr>
          </tbody>
        </table>
        <br>
        <span style="font-family: 'Times New Roman';">   </span>    .<br>
        <span style="font-family: 'Times New Roman';">   </span>    <span
        style="font-weight: bold;">[PARAM-10]</span><br>
        <span
        style="font-family: 'Times New Roman'; font-style: italic;">   </span><span
        style="font-style: italic;">   NAME=</span><br>
        <span
        style="font-family: 'Times New Roman'; font-style: italic;">   </span><span
        style="font-style: italic;">   TYPE=</span><br>
        <span
        style="font-family: 'Times New Roman'; font-style: italic;">   </span><span
        style="font-style: italic;">   VALUE=</span><br>
         <br>
        <span style="font-family: 'Times New Roman';">   </span>    <span
        style="font-weight: bold;">[MISC]</span></div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="245" style="width: 245px; height: 22px;"><p
                style="margin: 0px 0px 0px 29px;"><span
                style="font-style: italic;">PREVIEW=</span>        </p>
              </td>
              <td width="829" style="width: 829px; height: 22px;"><p
                style="margin: 0px 0px 0px 34px;">Prévisualisation dans WPR (1)
                ou impression directe (0, défaut).</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> <br>
        <span style="font-family: 'Times New Roman';">   </span>    <span
        style="font-weight: bold;">[PRINTER]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="245" style="width: 245px; height: 22px;"><p
                style="margin: 0px 0px 0px 34px;"><span
                style="font-style: italic;">NAME=</span></p>
              </td>
              <td width="829" style="width: 829px; height: 22px;"><p
                style="margin: 0px 0px 0px 34px;">Nom de l&rsquo;imprimante par
                défaut utilisée pour ce rapport, tel que défini dans
                Windows.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="245" style="width: 245px;"><p
                style="margin: 0px 0px 0px 32px;"><span
                style="font-style: italic;">COPIES= </span>        </p>
              </td>
              <td width="829" style="width: 829px;"><p
                style="margin: 0px 0px 0px 34px;">Nombre de copies identiques
                du même rapport.</p>
              </td>
            </tr>
          </tbody>
        </table>
        <br>
        <span style="font-family: 'Times New Roman';">   </span>    </div>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="642" bgcolor="#8bab97"
              style="width: 642px; background-color: #8bab97; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 9px;"><span
                style="font-weight: bold; color: #000000; text-decoration: underline;">Note:</span><span
                style="color: #000000; text-decoration: underline;"></span></p>

                <p style="margin: 0px 0px 0px 9px;"><span class="f_Textestd">-
                Si le champ </span><span class="f_Textestd"
                style="font-weight: bold;">[PARAM-n]</span><span
                class="f_Textestd">.</span><span
                style="font-style: italic; color: #000000;">NAME </span><span
                class="f_Textestd">à remplacer est </span><span
                class="f_Textestd" style="font-weight: bold;">:order </span>par
                exemple, on notera <span style="font-weight: bold;">order
                </span>sans le &lsquo; <span
                style="font-weight: bold;">:</span> &lsquo; !!<br>
                <span style="font-weight: bold; color: #ff0000;">- Le fichier
                ini est détruit après utilisation/lancement de la ligne de
                commande !</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span class="f_TitreReleaseNote"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.099</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/11/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                modifiées</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                créées</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span class="f_TitreReleaseNote"> </span></p>

       <p><span class="f_TitreReleaseNote">Nouvelle variable globale _CommandeEnregistree:</span> Ajout d'une variable <span class="f_Variables">_CommandeEnregistree</span> 
	   valant "1" à partir du moment ou la commande a été enregistrée une première fois. Elle vaudra zéro tant que la commande ou le devis n'a pas été enregistré au moins une 
	   fois.</p>

	   <p><span class="f_TitreReleaseNote"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.087</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">09/11/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                modifiées</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                créées</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span class="f_TitreReleaseNote"> </span></p>

        <p><span class="f_TitreReleaseNote">Modification de comportement pour
        la variable _EtatCommande:</span> Afin de permettre une gestion plus
        fine de vos commandes en temps réel, le comportement de la variable
        <span class="f_Variables">_EtatCommande</span> a été modifié. </p>

        <p>Auparavant, lors de la création d&rsquo;une nouvelle commande ou
        d&rsquo;un nouveau devis, <span
        class="f_Variables">_EtatCommande</span> était initialisée à zéro tant
        que la commande ou le devis n&rsquo;avait pas été enregistré une
        première fois.</p>

        <p>Ce comportement est maintenant modifié, WinPro initialise <span
        class="f_Variables">_EtatCommande</span> à la valeur correspondante au
        devis ou à la commande (respectivement 100 ou 200), ceci dés la
        création, sans avoir besoin d&rsquo;enregistrer au moins une fois. </p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.077</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">01/09/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                modifiées</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                créées</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p><span class="f_TitreReleaseNote">Complément sur le module Réception
        de Vitrage CFV:</span> La fenêtre de réception de vitrage, menu
        Commandes | Gestion de production | Réception de vitrage, fait
        maintenant apparaître le code barre de chaque vitrage dans
        l&rsquo;interface, pour mieux différencier un volume de verre
        d&rsquo;un autre lorsqu&rsquo;ils sont placés dans le même châssis.</p>

        <p>De plus, il est maintenant possible d&rsquo;effectuer un tri,
        croissant ou décroissant, sur numéro de commande, en cliquant sur la
        colonne.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0284.zoom84.jpg"
        width="594" height="389" border="0" alt="clip0284"></p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.075</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">29/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                modifiées</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                créées</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p><span class="f_TitreReleaseNote">Volet seul et formule
        système:</span> Lors de la création d&rsquo;un volet seul, les
        variables, initialisées dans l&rsquo;onglet <span
        style="font-weight: bold;">Formule </span>de la fiche Système, ne
        seront dorénavant plus prise en compte, de même que les questions et
        variables initialisées dans les cadres associés à ce système..</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Forme œil de bœuf et battées
        dormant:</span> Pour une forme Œil-De-Bœuf dans l&rsquo;onglet <span
        style="font-weight: bold;">Dimension </span>de la commande, les champs
        de battée correspondants aux valeur pour le bord Haut, Gauche et Droite
        seront inaccessibles avec cette forme de châssis. Seule la valeur de
        battée en partie basse est maintenant utilisable avec cette forme.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim12.jpg" width="310"
        height="265" vspace="1" hspace="1" border="0" alt=""></p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Bascule de prospect en
        client:</span> Lors d&rsquo;un transfert d&rsquo;un client en prospect
        via le bouton adéquat, WinPro copie à présent automatiquement le champ
        correspondant au nom du responsable de la fiche prospect, dans le champ
        « Nom du contact » de la fiche client, onglet <span
        style="font-weight: bold;">Relations</span>. </p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.074</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">29/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                modifiées</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                créées</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Saisie de profil périphériques
        :</span> Le nombre maximum de profil périphériques que l&rsquo;on peut
        saisir pour un même châssis a été augmenté. Il passe de 20 à 100
        profils par châssis.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Appel d</span><span
        class="f_TitreReleaseNote">&rsquo;</span><span
        class="f_TitreReleaseNote">impression supplémentaire pour WPR:</span>
        Une nouvelle clef dans la table <span
        style="font-style: italic;">settings </span>permet de provoquer un
        appel d&rsquo;impression supplémentaire à WPR, juste avant
        l&rsquo;étape de génération des fichiers machine, à
        l&rsquo;optimisation.</p>

        <p> </p>

        <p><span style="font-weight: bold;">[Reports]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="188"><span class="f_Winproini">After Data
                Optimisation</span></td>
              <td><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">=
                Vaut 1 pour ajouter un appel d</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">&rsquo;</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">impression
                à WPR, juste avant l</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">&rsquo;</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">étape
                de génération des fichiers machine, 0 sinon (format entier I,
                valeur par défaut).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-family: 'Calibri';"> </span></p>

        <p><span
        style="font-weight: bold; text-decoration: underline;"></span><span
        class="f_TitreReleaseNote">Nouvelles variables globales pour les
        traverses et coupleurs:</span> De nouvelles variables globales
        concernant les traverses et les coupleurs ont été ajoutées, en voici la
        liste : </p>

        <p style="text-indent: -142px; margin: 0px 0px 0px 189px;"><span
        class="f_Variables"> </span></p>

        <div
        style="text-align: left; text-indent: -142px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="228" style="width: 228px;"><p
                style="text-indent: -7px; margin: 0px 0px 0px 30px;"><span
                class="f_Variables">_CategCoupleurDroite []</span></p>
              </td>
              <td width="503" style="width: 503px;"><p>=  Catégorie du coupleur
                à droite, en bout du coupleur en cours de calcul (<span
                class="f_Variables">NumeroTraverse</span>). </p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="228" style="width: 228px;"><p
                style="text-indent: -7px; margin: 0px 0px 0px 30px;"><span
                class="f_Variables">_CategCoupleurGauche []</span></p>
              </td>
              <td width="503" style="width: 503px;"><p>=  Catégorie du coupleur
                à gauche, en bout du coupleur en cours de calcul (<span
                class="f_Variables">NumeroTraverse</span>). </p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="228" style="width: 228px;"><p
                style="text-indent: -142px; margin: 0px 0px 0px 165px;"><span
                class="f_Variables">_CategCoupleurHaut []</span></p>
              </td>
              <td width="503" style="width: 503px;"><p>=  Catégorie du coupleur
                en haut, en bout du coupleur en cours de calcul (<span
                class="f_Variables">NumeroTraverse</span>). </p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="228" style="width: 228px;"><p
                style="text-indent: -142px; margin: 0px 0px 0px 165px;"><span
                class="f_Variables">_CategCoupleurBas []</span></p>
              </td>
              <td width="503" style="width: 503px;"><p>=  Catégorie du coupleur
                en bas, en bout du coupleur en cours de calcul (<span
                class="f_Variables">NumeroTraverse</span>). </p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -142px;"> <br>
        Le coupleur en cours de calcul porte le numéro contenu dans la variable
        <span class="f_Variables">NumeroTraverse</span>.</p>

        <p> </p>

        <p><span style="text-decoration: underline;">Exemple d</span><span
        style="text-decoration: underline;">&rsquo;</span><span
        style="text-decoration: underline;">utilisation :</span></p>

        <p> </p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="color: #000080;">Quantite := _CategCoupleurDroite
        [NumeroTraverse]</span><br>
        <span style="color: #000080;">Longueur := NumeroTraverse</span><br>
        <span style="font-size: 12pt; color: #000080;"> </span><br>
        <span style="color: #000080;">Si _CategCoupleurDroite [NumeroTraverse]
        = 0</span><br>
        <span
        style="font-family: 'Times New Roman'; color: #000080;">  </span><span
        style="color: #000080;">Quantite := 100</span><br>
        <span
        style="font-family: 'Times New Roman'; color: #000080;">  </span><span
        style="color: #000080;">Longueur := 1000</span><br>
        <span style="color: #000080;">Fin Si</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="color: #000080;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.065</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">29/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                modifiées</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                créées</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">LaqArt</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Réservations/Commandes fournisseur
        et laquage des articles:</span> Vous avez maintenant la possibilité de
        réserver et commander les laques suivant la longueur des barres
        complètes et non des morceaux optimisés.</p>

        <p>Jusqu&rsquo;à présent, WinPro ne prenait en compte que la laque des
        profils tels que débités, sans tenir compte de la longueur de barre
        complète pour calculer la quantité de laque à réserver ou à commander
        au fournisseur.</p>

        <p>Vous avez à présent le choix entre les deux méthodes de calcul de la
        quantité de laque, grâce à une nouvelle case à cocher dans
        l&rsquo;onglet <span style="font-weight: bold;">Laque </span>de la
        fiche Article.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim13.jpg" width="606"
        height="273" vspace="1" hspace="1" border="0" alt=""></p>

        <p> </p>

        <p>Lorsque la case <img src="img/embim14.jpg" width="89" height="30"
        vspace="1" hspace="1" border="0" alt=""> est cochée, WinPro calcule la
        réservation de la laque pour cet article sur la longueur de barre
        complète consommée. Si la case est décochée, seuls les morceaux débités
        seront laqués, les chutes ne seront pas prises en compte.</p>

        <p> </p>

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
                8.1.1.063</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">06/07/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Nouveau champ pour le module
        thermique (TM):</span> Ajout d'un champ ERRTHERM dans la table <span
        style="font-style: italic;">Detail2</span> ainsi que dans la table
        <span style="font-style: italic;">Fen </span>pour les utilisateurs de
        WPR. Ce champ contiendra le message d'erreur éventuel provenant du
        calcul thermique.</p>

        <p> </p>

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
                8.1.1.059</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">06/07/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Ajout d</span><span
        class="f_TitreReleaseNote">&rsquo;</span><span
        class="f_TitreReleaseNote">un droit utilisateur pour le module
        thermique:</span> Un droit est ajouté à la fiche Utilisateur afin </p>

        <p>d&rsquo;autoriser ou non la configuration des valeurs pour le <span
        style="font-weight: bold;">Module Thermique TM</span>.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim15.jpg" width="181"
        height="46" vspace="1" hspace="1" border="0" alt=""></p>

        <p> </p>

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
                8.1.1.058</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">06/07/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Importation des articles de pose
        dans WinPro/D:</span> WinPro/D offre la possibilité de répondre
        automatiquement à la question "Voulez-vous importer les articles de
        poses ?" lors d&rsquo;un import de devis dans WinPro/D (note de version
        8.1.1.047).</p>

        <p>Voici la clef à ajouter dans la table <span
        style="font-style: italic;">Settings</span> de WinPro/D, ainsi que les
        comportements de WinPro/D en fonction de la valeur de cette clef:</p>

        <p><span style="font-family: 'Tahoma'; font-weight: bold;"> </span></p>

        <p><span
        style="font-family: 'Tahoma'; font-weight: bold;">[WinProD]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">AutoImportPose        =
        0</span><span class="f_Textestd">       Poser la question (comportement
        par défaut).</span></p>

        <p class="p_Textestd">                       <span
        class="f_Winproini">= 1</span><span class="f_Textestd">       Réponse
        auto oui.</span></p>

        <p class="p_Textestd">                       <span
        class="f_Winproini">= 2</span><span class="f_Textestd">       Réponse
        auto non.</span></p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Filtres sur les quincailleries
        multi-ouvrants:</span> Le comportement de la clef activant la fonction
        <span style="font-weight: bold;">Quincaillerie Multi-Ouvrants
        </span>(voir notes de versions correspondantes) a été modifié afin de
        permettre de filtrer dans la quincaillerie les ouvrants d&rsquo;un même
        système ou non.</p>

        <p> </p>

        <p><span
        style="font-family: 'Tahoma'; font-weight: bold;">[System]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Quinc Multi Ouvrant    
           = 0</span><span class="f_Textestd">       Pas de quincaillerie
        multi-ouvrant (défaut).</span></p>

        <p class="p_Textestd">                       <span
        class="f_Winproini">= 1</span><span class="f_Textestd">       Ouvrants
        multiples dans le même système.</span></p>

        <p class="p_Textestd">                       <span
        class="f_Winproini">= 2</span><span class="f_Textestd">       Ouvrants
        multiples dans tous les systèmes.</span></p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Comportement de la variable
        </span><span class="f_TitreReleaseNote"
        style="font-style: italic;">_Quantite</span><span
        class="f_TitreReleaseNote">:</span> Jusqu&rsquo;à présent la variable
        <span class="f_Variables">_Quantite</span> était intialisée à la valeur 0 par
        défaut, ce qui pouvait occasionner des messages d&rsquo;erreur de
        division par zéro lorsqu&rsquo;utilisée dans une division. Cette
        variable est maintenant initialisée à 1 par défaut.</p>

        <p>       </p>

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
                8.1.1.057</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">06/07/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Nouveau champ dans la table VitreCde</span><span
        class="f_TitreReleaseNote">:</span> Deux nouveaux champs sont ajoutés
        dans la table <span style="font-style: italic;">VitreCde</span>. Ils
        contiendront l'épaisseur du premier et du deuxième intercalaire (en cas
        de triple vitrage) d'un vitrage, respectivement EPINTERC et
        EPINTERC2.</p>

        <p><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p><span class="f_TitreReleaseNote">Impression des warm-edges:</span>
        Au niveau de la fiche signalétique du WarmEdge, une case à cocher
        permet à présent de choisir s'il faut imprimer ou non le warm-edge sur
        les différents documents (Devis, confirmation, plan atelier, commande
        vitrage, etc...).</p>

        <p>Cette fonctionnalité a été ajoutée pour éviter d&rsquo;imprimer
        inutilement cette information lorsque le warm-edge saisi par
        l&rsquo;utilisateur n&rsquo;en est pas un un. </p>

        <p>Par exemple : « Warm-Edge : SANS ».</p>

        <p><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p><span class="f_TitreReleaseNote">Module importation/création
        d</span><span class="f_TitreReleaseNote">&rsquo;</span><span
        class="f_TitreReleaseNote">articles IMPA:</span> Le module <span
        style="font-weight: bold;">Importation d</span><span
        style="font-weight: bold;">&rsquo;</span><span
        style="font-weight: bold;">article IMPA</span>, qui permet la
        génération d&rsquo;une base d&rsquo;articles à partir d&rsquo;une table
        DBF (compatible avec Excel) est à présent compatible avec le format de
        base de données mySQL. </p>

        <p>Auparavant ce module n&rsquo;était compatible qu&rsquo;avec les
        bases de données au format FoxPro.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Import de panneaux décoratifs
        configurés (module IPDC):</span> Ajout du module <span
        style="font-weight: bold;">IPDC - Importation des panneaux décoratifs
        configurés</span>. Ce module permet une importation et création
        automatique des panneaux décoratifs Harinck. WinPro permet d'importer
        un fichier Excel provenant du fournisseur de panneaux Harinck. </p>

        <p>Ce fichier contient toutes les caractéristiques des différents
        panneaux. </p>

        <p>A partir de ce fichier Excel, WinPro va créer les panneaux ainsi que
        leur paramétrage et les aricles associés aux panneaux.</p>

        <p>Pour importer un fichier Excel de chez Harinck, vous pouvez utiliser
        le menu Utilitaire | Importation des panneaux décoratifs configurés.</p>

        <p>       </p>

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
                8.1.1.053</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">06/07/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Fournisseur vitrage par
        formule:</span> Vous pouvez définir le fournisseur d&rsquo;un vitrage
        donné par paramétrage. Cette possibilité est activée par une clef dans
        la table <span style="font-style: italic;">Settings </span>d&rsquo;une
        part, et en définissant une formule d&rsquo;affectation du fournisseur
        d&rsquo;autre part.</p>

        <p> </p>

        <p><span
        style="font-family: 'Tahoma'; font-weight: bold;">[Glass]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Supplier by formula    
           = 0</span><span class="f_Textestd">       Développement désactivé
        (défaut).</span></p>

        <p class="p_Textestd">                       <span
        class="f_Winproini">= 1</span><span class="f_Textestd">       
         Développement activé, le fournisseur vitrage peut être défini par
        formule.</span></p>

        <p> </p>

        <p>Lorsque vous activez ce développement, il est impératif
        d&rsquo;ajouter un numéro d'identification différent pour chaque
        fournisseur, qu'il s'agisse d'un fournisseur de vitrage ou non.</p>

        <p>Ceci est à renseigner dans la fiche du fournisseur, dans le champ
        servant de numéro d'identification au bas de l'onglet "Commandes et
        livraison".</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim16.jpg" width="294"
        height="67" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="text-align: center;"> </p>

        <p>Le fournisseur du vitrage pourra être modifié par paramétrage, en
        utilisant la variable globale <span
        class="f_Variables">_RemplFournisseur</span>, indicée sur le numéro de
        remplissage, de la manière suivante:</p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Variables"
        style="font-style: italic;">_RemplFournisseur [NumeroRemplissage] :=
        numéro d'identification du fournisseur</span></p>

        <p style="text-align: center; margin: 0px 0px 0px 47px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="361" bgcolor="#00b2ae"
              style="width: 361px; background-color: #00b2ae; border: solid 1px #000000;"><p><span
                style="font-style: italic; font-weight: bold; color: #ff0000; text-decoration: underline;">Attention
                !</span></p>

                <p class="p_Textestd"><span class="f_Textestd">Le champ
                identificateur vitrage sera visible seulement si vous possédez
                le module </span><span class="f_Textestd"
                style="font-weight: bold;">Multi Fournisseur Vitrage
                (MFV)</span><span class="f_Textestd">, de même si vous n'avez
                pas le module, la variable </span><span
                class="f_Variables">_RemplFournisseur[]</span><span
                class="f_Textestd" style="font-weight: bold;"></span><span
                class="f_Textestd">sera utilisée comme une variable globale et
                ne sera pas récupérée par Winpro pour le traitement de
                l'affectation du vitrage à un fournisseur donné</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>       </p>

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
                8.1.1.050</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">06/07/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">EDI Teleglass et vitrages
        composés:</span> Complément dans l'EDI vitrage pour le protocole
        Teleglass, le code concaténé d'un vitrage composé est maintenant écrit
        dans le fichier généré par l'edi.</p>

        <p>       </p>

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
                8.1.1.049</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">06/07/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Panneau fabriqué et vitrage
        composé:</span> Il est à présent possible d&rsquo;utiliser des vitrages
        composés dans des panneaux fabriqués, en gardant à l&rsquo;esprit les
        règles suivantes:</p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Lorsque l&rsquo;on ne précise pas de code vitrage dans le
                paramétrage du panneau fabriqué, Winpro utilise le vitrage tel
                que saisi dans l&rsquo;onglet châssis du devis ou de la
                commande.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0262.zoom86.jpg"
        width="263" height="115" border="0" alt="clip0262"></p>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Lorsque l&rsquo;on précise un code vitrage dans le
                paramétrage du panneau fabriqué, il faut alors copier les
                questions du vitrage composé dans le jeu de questions du
                panneau fabriqué.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0263.zoom86.jpg"
        width="258" height="111" border="0" alt="clip0263"></p>

        <p>       </p>

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
                8.1.1.047</span></p>
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

        <p> </p>

        <p><span class="f_TitreReleaseNote">Articles de pose dans
        WinPro/D:</span> Lorsqu&rsquo;on importe un devis dans WinPro/D,
        l&rsquo;utilisateur est maintenant invité à confirmer si les Articles
        de Pose doivent être pris en compte ou non, selon les cas de figure.</p>

        <p>En important un devis, un nouveau dialogue " Voulez-vous importer
        les articles de poses saisis dans ce devis? " apparait:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Si la réponse est “OUI“, les articles de pose seront importés
                ainsi que le contenu de l'onglet Pose du devis.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Si la réponse est “NON“, les articles de pose ne sont pas
                importés, le contenu de l&rsquo;onglet Pose du devis est
              ignoré.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>Pour les exports, si l&rsquo;utilisateur répond “Non“ à la question
        “L&rsquo;export est-il destiné au fabricant?“, les articles de pose
        sont systématiquement exportés avec le devis.</p>

        <p>       </p>

        <p>       </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.039</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">25/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                modifiées</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                créées</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">ReportCfg</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="text-align: center; margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';"> </span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">PDF automatique pour
        WpReport:</span> Vous avez maintenant la possibilité d'imprimer tous
        les types de document WpReport dans un fichier PDF de manière
        automatique, via de nouvelles options dans le menu <span
        style="font-weight: bold;">Rapports | Documents type</span>.</p>

        <p><span style="font-family: 'Times New Roman';"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0283.zoom88.jpg"
        width="634" height="321" border="0" alt="clip0283"></p>

        <p> </p>

        <p>Il faudra pour cela définir :</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>La colonne d&rsquo;impression en PDF <img src="img/embim17.jpg"
                width="25" height="37" vspace="1" hspace="1" border="0"
              alt=""></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Le répertoire de sauvegarde et le format du nom de fichier 
                <img src="img/embim18.jpg" width="213" height="37" vspace="1"
                hspace="1" border="0" alt="">. Le mot-clé <span
                style="color: #0000ff;">%ORDER%</span> sera ici remplacé par le
                numéro de commande.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 47px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="361" bgcolor="#00b2ae"
              style="width: 361px; background-color: #00b2ae; border: solid 1px #000000;"><p><span
                style="font-style: italic; font-weight: bold; color: #000000; text-decoration: underline;">Note:</span></p>

                <p><span style="font-style: italic;">Le nom de variable à
                utiliser dans le nom du fichier est bien “%ORDER%”, signes %
                compris, et la variable, sensible à la casse, est en
                majuscules. Autrement la variable ne sera pas
                interpretée</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 48px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.038</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">19/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                modifiées</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                créées</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">VitreCde</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">MotifCdeVitre</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p><span class="f_TitreReleaseNote">Recommande des vitrages pour le
        module Réception de Vitrage (CFV):</span> Suite à vos différents
        retours, le module <span style="font-weight: bold;">Réception de
        Vitrage CFV </span>a été complété avec de nouvelles colonnes dans les
        différents dialogue du module, ainsi qu&rsquo;avec une fonctionnalité
        de recommande automatique des vitrages en cas de besoin (SAV).</p>

        <p> </p>

        <p><span style="text-decoration: underline;">Mise en place :</span></p>

        <p> </p>

        <p style="text-indent: 47px;">Dans un premier temps, il faudra définir
        des motifs de recommande de vitrage dans un menu prévu à cet effet,
        accessible via <span style="font-weight: bold;">Données | Autres
        données | Motif de recommande des vitrages</span>. </p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0279.zoom90.jpg"
        width="193" height="133" border="0" alt="clip0279"></p>

        <p style="text-align: center;"> </p>

        <p>Lorsque la case « Sans prix » est cochée pour un motif donné, la
        commande de SAV générée, pour un vitrage utilisant ce motif de
        recommande, ne sera pas valorisée. La commande SAV sera créée avec la
        case « Sans prix » cochée, au niveau de l&rsquo;onglet <span
        style="font-weight: bold;">Châssis </span>de cette commande </p>

        <p>Lorsque la case est décochée dans le motif de recommande, la
        commande SAV sera bien valorisée, la case « Sans prix » de
        l&rsquo;onglet <span style="font-weight: bold;">Châssis </span>sera
        décochée.</p>

        <p> </p>

        <p style="text-indent: 47px;">Il faudra également créer un système
        spécifique dédié au SAV des vitrages à recommander. Ce système sera
        similaire à ce qu&rsquo;on pourrait créer pour recommander un vantail
        seul par exemple, tant qu&rsquo;il respecte les conditions
        suivantes :</p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Création d&rsquo;un code système fictif dédié au SAV des
                vitrages.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Création d&rsquo;un dormant fictif dans ce système, sans
                encombrements (pas de petite/grande hauteur renseignées).</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Création d&rsquo;un ouvrant fictif dans ce système en tant
                que fixe simple cadre, sans encombrements (pas
                d&rsquo;épaisseur in/extérieure).</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Création d&rsquo;une quincaillerie fictive liée à
                l&rsquo;ouvrant.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Création d&rsquo;une table de parclose dans ce système,
                cochée « Paramétrage par formules », et sans contenu.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Renseigner les valeurs par défaut de la fiche système avec
                les éléments créés au préalable.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="margin: 0px 0px 0px 47px;">Enfin, il faudra définir deux
        nouvelles clefs dans la table <span
        style="font-style: italic;">settings</span> :</p>

        <p> </p>

        <p><span
        style="font-family: 'Tahoma'; font-weight: bold;">[Glass]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="188"><span class="f_Winproini">Systeme pour
                recommande</span></td>
              <td>       <span
                style="font-family: 'Courier New'; font-weight: bold;">=
                Définir ici le code du système créé pour le SAV des vitrages
                seuls (format caractères S).</span></td>
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
              <td width="188"><span class="f_Winproini">Default
              pattern</span></td>
              <td>       <span
                style="font-family: 'Courier New'; font-weight: bold;">=
                Renseigner ici le code du motif de recommande vitrage par
                défaut à utiliser si aucun motif n</span><span
                style="font-family: 'Courier New'; font-weight: bold;">&rsquo;</span><span
                style="font-family: 'Courier New'; font-weight: bold;">est
                précisé lors de la recommande du vitrage.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span style="text-decoration: underline;">Utilisation :</span></p>

        <p> </p>

        <p>       L&rsquo;utilisation de cette fonctionnalité commence dans le
        menu Commandes | Gestion de production | Réception de vitrage.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0280.zoom84.jpg"
        width="588" height="345" border="0" alt="clip0280"></p>

        <p> </p>

        <p>Dans ce dialogue, des colonnes ont été ajoutées afin de mieux
        repérer les vitrages que l&rsquo;on traite, avec pour chaque volume le
        numéro d&rsquo;ouvrant, de vantail et de remplissage correspondant.</p>

        <p> </p>

        <p style="text-indent: 47px;">Trois nouvelles colonnes sont également
        disponibles pour la fonctionnalité de recommande des vitrages :</p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>La colonne « A recommander » correspond à une case à cocher
                qui active la recommande automatique du vitrage. Tout vitrage
                pour lequel cette case est cochée se verra recommandé
                automatiquement lorsque l&rsquo;opérateur utilisera le bouton
                <img src="img/clip0281.zoom89.jpg" width="135" height="21"
                border="0" alt="clip0281">.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>La colonne « Code SAV » est renseignée automatiquement par
                WinPro avec le code de la commande SAV qu&rsquo;il créera pour
                le volume de verre coché « A recommander ». Le nom de la
                commande sera basé sur le préfixe défini pour les commandes
                SAV, dans le menu <span style="font-weight: bold;">Utilitaires
                | Préférences</span>, onglet Préfixes pour la ligne SAV.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>La colonne « Motif » permet à l&rsquo;opérateur de définir le
                motif pour lequel une commande de SAV est générée pour ce
                volume de verre. Si aucun motif n&rsquo;est renseigné ici, le
                motif par défaut sera automatiquement utilisé (voir clef <span
                style="font-family: 'Courier New';">Default pattern</span> de
                la table <span style="font-style: italic;">settings
                </span>ci-dessus).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Ce dialogue peut être consulté à tout moment, il permettra de savoir
        quels vitrages sont réceptionnés ou recommandés, pour quel motif et
        quels sont les codes des commandes SAV correspondantes.</p>

        <p> </p>

        <p>Lorsqu&rsquo;une commande pour la recommande des vitrages est
        générée, le code de la commande d'origine, ainsi que la référence
        d&rsquo;origine, seront automatiquement copiés dans la référence de la
        nouvelle commande SAV, afin d&rsquo;améliorer la traçabilité.</p>

        <p> </p>

        <p style="text-indent: 47px;">Enfin, la recommande des vitrages est
        également tracée dans l&rsquo;onglet « Réception des vitrages » de la
        commande. Une colonne « Code SAV » est ajoutée, elle contiendra le code
        de la commande SAV générée pour le vitrage d&rsquo;origine.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0282.zoom87.jpg"
        width="558" height="202" border="0" alt="clip0282"></p>

        <p style="text-align: center;"><span
        style="font-size: 12pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.028</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">26/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                modifiées</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                créées</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Saisie des croisillons
        modifiée:</span> Il est dorénavant interdit d'encoder un croisillon
        avec moins de 2 alvéoles (Horizontales et Verticales), comme c'est déjà
        le cas actuellement pour les croisillons dessinés par paramétrage.<br>
        De plus, il est maintenant possible d'encoder les croisillons en
        précisant le nombre de barres et non plus le nombre d'alvéoles.<br>
        Pour cela, une nouvelle clef (format nombre entier) a été créée dans la
        table <span style="font-style: italic;">settings </span>:<br>
         </p>

        <p><span
        style="font-family: 'Tahoma'; font-weight: bold;">[System]</span></p>

        <p><span class="f_Winproini">Croisillon Encodage Barres      
         </span><span
        style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">=
        0  Encodage des alvéoles (défaut).</span></p>

        <p>                               <span
        style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">=
        1  Encodage des barres.</span></p>

        <p><span
        style="font-family: 'Courier New'; font-weight: bold;"> </span></p>

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
                8.1.1.024</span></p>
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

        <p> </p>

        <p><span class="f_TitreReleaseNote">Listes de commandes filtrées en
        facturation et livraison:</span> Il est à présent possible de ne pas
        afficher la liste complète des commandes clients lors de l'ouverture
        des fenêtres "Réimpression des bordereaux de livraison" et
        "Réimpression des factures",  via l'utilisation de la nouvelle clé dans
        la table <span style="font-style: italic;">Settings</span>:</p>

        <p> </p>

        <p><span
        style="font-family: 'Tahoma'; font-weight: bold;">[System]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">FilterOrder        =
        0</span><span class="f_Textestd">       Liste de commandes non filtrée
        (comportement de base, défaut).</span></p>

        <p class="p_Textestd">               <span class="f_Winproini">=
        1</span>        <span class="f_Textestd">Liste de commandes
        filtrée.</span></p>

        <p> </p>

        <p>Lorsque la clef est à la valeur 1, la liste de commande ne sera
        affichée que si au moins un filtre de sélection est renseigné.</p>

        <p>       </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.010</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">18/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                modifiées</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                créées</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';"> </span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">GestPmt</span></p>

                <p style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">TypePmt</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Module Gestion/Suivi de paiements
        (SP):</span> Ce nouveau module permet de gérer les paiements effectués
        sur les différentes commandes clients, et d&rsquo;imprimer des
        documents comptables.</p>

        <p>Pour activer le module, vous devez disposer d&rsquo;une licence
        adaptée. Un nouveau sous-menu apparaîtra alors dans Commandes et devis
        | Gestion des paiements.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0273.zoom70.jpg"
        width="195" height="247" border="0" alt="clip0273"></p>

        <p style="text-align: center;"> </p>

        <p><span style="text-decoration: underline;">Utilisation :</span></p>

        <p>L&rsquo;interface du module permet de choisir parmi 3 opérations,
        « Encodage », « Impression » et « Type de paiement ».</p>

        <p> </p>

        <p>       <span
        style="font-style: italic; text-decoration: underline;">Type de
        paiement :</span></p>

        <p>       Ce point de menu vous permettra d&rsquo;administrer les types
        de paiement que vous pouvez utiliser lors de l&rsquo;encodage de la
        réception de paiement. Vous pourrez ici utiliser les différents boutons
        pour ajouter, supprimer ou modifier un type de paiement. Les types de
        paiements sont enregistrés dans la table <span
        style="font-style: italic;">TypePmt</span>.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0274.zoom74.jpg"
        width="350" height="307" border="0" alt="clip0274"></p>

        <p> </p>

        <p>       <span
        style="font-style: italic; text-decoration: underline;">Encodage des
        réceptions de paiement :</span></p>

        <p style="text-indent: 47px;">Vous pouvez ici lister les commandes en
        choisissant un client selon une liste, ou bien choisir directement une
        commande à partir de son code. Une fois la commande choisie, vous
        verrez apparaître les informations relatives à celle-ci telles que le
        montant de la facture, ce qu&rsquo;il reste à payer et le détail des
        paiements déjà effectués.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0275.zoom65.jpg"
        width="668" height="395" border="0" alt="clip0275"></p>

        <p style="text-align: center;"> </p>

        <p>Notez qu&rsquo;il n&rsquo;est pas possible de confirmer 
        l&rsquo;ajout d&rsquo;un paiement tant que le champ « montant payé »
        n&rsquo;a pas été rempli.</p>

        <p>Vous avez la possibilité de choisir une date de paiement, un type,
        un commentaire et un montant.</p>

        <p>La touche <img src="img/embim19.jpg" width="36" height="38" vspace="1"
        hspace="1" border="0" alt=""> à droite de la fenêtre donne un accès
        direct à la calculatrice Windows.</p>

        <p>Lorsque votre saisie est terminée, utilisez le bouton <img
        src="img/clip0276.zoom73.jpg" width="105" height="28" border="0"
        alt="clip0276"> pour enregistrer la transaction (dans la table <span
        style="font-style: italic;">GestPmt</span>), ou bien cliquez sur le
        bouton <img src="img/clip0277.zoom74.jpg" width="106" height="29"
        border="0" alt="clip0277"> pour quitter le module.</p>

        <p> </p>

        <p>       <span
        style="font-style: italic; text-decoration: underline;">Impression des
        documents comptables:</span></p>

        <p>       Ce menu vous permettra d&rsquo;imprimer des documents utiles
        en comptabilité tels que l&rsquo; « Historique des commandes clients »,
        une « Balance client » ou encore une « Balance âgée client », ceci pour
        une fourchette de codes client donnée.</p>

        <p style="margin: 0px 0px 0px 24px;"> <br>
        <img src="img/clip0278.zoom63.jpg" width="643" height="266" border="0"
        alt="clip0278"></p>

        <p style="text-align: center; margin: 0px 0px 0px 47px;"><span
        style="font-size: 12pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="361" bgcolor="#00b2ae"
              style="width: 361px; background-color: #00b2ae; border: solid 1px #000000;"><p><span
                style="font-weight: bold; color: #0000ff; text-decoration: underline;">Remarque :</span></p>

                <p><span class="f_Textestd">Ce module est basé sur le
                générateur de rapport WPReport</span><span
                style="font-style: italic; color: #000000;">.</span><span
                class="f_Textestd">Actuellement, il n</span><span
                style="color: #000000;">&rsquo;</span><span
                class="f_Textestd">est compatible qu</span><span
                style="color: #000000;">&rsquo;</span><span
                class="f_Textestd">avec une base de données au format mySQL, il
                n</span><span style="color: #000000;">&rsquo;</span><span
                class="f_Textestd">est pas compatible avec les bases de données
                FoxPro.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 12pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.004</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                modifiées</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                créées</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">OrderTxt</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Détail des vitrages fabriqués dans
        l</span><span class="f_TitreReleaseNote">&rsquo;</span><span
        class="f_TitreReleaseNote">onglet Informations:</span> Une nouvelle
        clef dans la table <span style="font-style: italic;">settings
        </span>vous permet de décider s&rsquo;il faut ou non afficher le détail
        des feuilles de verre d&rsquo;un vitrage composé dans l&rsquo;onglet
        <span style="font-weight: bold;">Informations </span>de la commande.</p>

        <p> </p>

        <p><span style="font-weight: bold;">[Glass]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="189"><span class="f_Winproini">Hide Glass
                Components</span></td>
              <td><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">=
                Lorsqu</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">&rsquo;</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">elle
                vaut 0 (format entier I, valeur par défaut), WinPro détaille
                les feuilles de verre dans l</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">&rsquo;</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">onglet
                </span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-style: italic; font-weight: bold;">Informations</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">de
                la commande seulement. Lorsque la clef vaut 1, seul le vitrage
                composé est affiché dans cet onglet.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Amélioration pour les textes de
        documents client:</span> Les textes de début/fin de documents client,
        paramétrés dans les préférences, sont à présent transférés dans une
        table de la base de données, la table <span
        style="font-style: italic;">OrderText</span>.</p>

        <p>Les textes que vous créerez seront dorénavant enregistrés dans cette
        table.</p>

        <p>Pour importer vos textes existants, les fichiers sous l&rsquo;ancien
        format doivent se trouver dans le dossier “Data“ du répertoire de base
        (en mySQL, le créer s&rsquo;il n&rsquo;existe pas et y copier les
        fichiers). </p>

        <p>Au lancement de WinPro ou de WinPro/D, il vous sera proposé
        d&rsquo;importer les textes, les fichiers étant supprimés après
        import.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0260.zoom86.jpg"
        width="395" height="171" border="0" alt="clip0260"></p>

        <p>Dans le menu Utilitaires | Préférences onglet Textes, vous disposez
        également d&rsquo;un bouton <img src="img/embim20.jpg" width="76"
        height="24" vspace="1" hspace="1" border="0" alt="">, qui permettra de
        générer les textes enregistrés dans la base de données sous
        l&rsquo;ancien format de fichier, dans un sous-dossier “OrderText” du
        répertoire de base.</p>

        <p> </p>

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
                8.1.1.003</span></p>
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

        <p style="text-align: center;"><span class="f_Heading1"
        style="font-style: italic;"> </span></p>

        <p><span class="f_TitreReleaseNote">Panneau décoratif
        configuré :</span> Ajout du nouveau type de remplissage: "Panneau
        décoratif configuré". Ce type de remplissage permet de gèrer une base
        de données des panneaux Harinck.</p>

        <p> </p>

        <p>Ce nouveau type de panneau s'encode comme les remplissages actuels
        (vitrage ou panneau, composé ou non) dans une commande. </p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0035.zoom75.jpg"
        width="374" height="177" border="0" alt="clip0035"></p>

        <p> </p>

        <p>Il peut être paramétré via une interface de saisie manuelle
        similaire à celle des panneaux fabriqués. L'interface est disponible
        soit par un bouton se trouvant dans la barre des boutons en haut de la
        fenêtre principale, soit par le menu <span
        style="font-weight: bold;">Technique | Châssis | Panneau décoratif
        configuré</span>.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim21.jpg" width="186"
        height="27" vspace="1" hspace="1" border="0" alt=""></p>

        <p> </p>

        <p>L'interface se compose d'un écran contenant différents onglets:</p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim22.jpg" width="546"
        height="483" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>L'onglet <span style="font-weight: bold;">Description
                </span>permet de saisir une description, deux niveaux de
                catégorie, une option pour inclure le panneau dans WinPro/D ou
                non, un article qui sera à commander chez le fournisseur, un
                filtre de sélection (note de version 8.02), une catégorie
                thermique pour le calcul thermique (selon module, note de
                version 8.1.0) ainsi que la liste des couleurs autorisées pour
                ce panneau.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>L'onglet <span style="font-weight: bold;">Dimension
                </span>permet de saisir l'épaisseur par défaut du panneau ainsi
                que les dimensions autorisées pour l'emploi de ce panneau.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>L'onglet <span style="font-weight: bold;">Main d'oeuvre
                </span>permet de définir des suppléments pour le prix du
                panneau ainsi qu'un poste et un temps de main d'oeuvre par
                forme de panneau.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>L'onglet <span style="font-weight: bold;">Question</span>
                permet de définir un jeu de question dont les réponses pourront
                être utilisées dans l'onglet <span
                style="font-weight: bold;">Article </span>ou <span
                style="font-weight: bold;">Dessin</span>.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>L'onglet <span style="font-weight: bold;">Article
                </span>contient la liste des articles à consommer. La
                consommation de ces articles permet de définir le prix du
                panneau. Chaque article peut avoir un identifiant de macro
                ainsi qu'une description de macro (comme dans les vitrages
                composés). Ces deux éléments permettront de modifier des macros
                "<span class="f_Variables">@...@</span>", que l'utilisateur
                emploierait dans la description de l'article principal du
                panneau. La variable <span
                class="f_Variables">EpaisseurTotale</span> est utilisable dans
                les formules d&rsquo;articles.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>L'onglet <span style="font-weight: bold;">Dessin
                </span>contient la liste des dessins qui seront utilisés pour
                afficher le panneau à l'écran ou sur papier. La variable <span
                class="f_Variables">EpaisseurTotale</span> est utilisable dans
                les formules de dessin</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>L'onglet <span style="font-weight: bold;">Dxf</span> contient
                la liste des dxf WinPro qui peuvent être utilisés en fonction
                de l'épaisseur du panneau.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

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
                8.1.1.x</span></p>
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

        <p style="text-align: center;"><span class="f_Heading1"
        style="font-style: italic;"> </span></p>

        <p><span class="f_TitreReleaseNote">Nouveau module GLPV Gestion de
        Ligne de Production de Volet:</span> Ce nouveau module optionnel <span
        style="font-weight: bold;">GLPV</span> permet aux fabricants de volets
        roulants d&rsquo;affecter une ligne de production et de préparer les
        lots en fonction du caisson ou du tablier. Ce module se combine
        exclusivement avec le module <span style="font-weight: bold;">VO</span>
        et non avec le module <span style="font-weight: bold;">VO2</span>.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Nouveau module TMS Module Thermique
        Simplifié :</span><span style="font-weight: bold;"></span>Ce nouveau
        module est dérivé du<span style="font-weight: bold;">Module Thermique
        TM </span>avec une simplification de taille. </p>

        <p>La formule de calcul est inchangée, Winpro se contente d&rsquo;aller
        chercher le <span
        style="font-size: 12pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&Psi;</span><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #0000ff;">g</span>
        attribué par défaut au warm-edge (compte tenu de son épaisseur). Il
        n&rsquo;y a donc pas de tableaux à compléter permettant de modifier le
        <span
        style="font-size: 12pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&Psi;</span><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #0000ff;">g</span>
        en fonction des combinaisons de profils, d&rsquo;épaisseur de
        remplissage et des valeurs <span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #0000ff;">Ug</span>.
        Le résultat final du calcul thermique est une valeur s&rsquo;approchant
        de très près de la valeur réelle tout en restant dans les limites de ce
        qui est autorisé.</p>

        <p>Attention ce module n&rsquo;est disponible qu&rsquo;en base de
        données FoxPro. En mySQL, seul le module <span
        style="font-weight: bold;">TM</span> est disponible.</p>
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
      <td align="left"><p class="p_Comment"><span class="f_Comment"
        style="font-size: 8pt;">* Niet compatibel met versie 7.2,enkel wanneer
        aangegeven</span></p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 8pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.129</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">21/06/2011</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Aangepaste
                tabellen</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Nieuwe
                tabellen</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Geen</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Geen</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;">WPREPORT
        in een command line met een opstartbestand</span><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;">:</span>
        U kan WpReport opstarten vanuit een command line, of via een batch
        bestand (*.bat),zoals gedefinieerd is in de release note's 8.04xx. </p>

        <p> </p>

        <p style="margin: 0px 0px 0px 57px;"><span
        style="color: #0000ff;">WinPro /WPR@Gebruiker:wachtwoord
        @ini_bestand</span></p>

        <p>Staat toe een rapport uit te voeren door gebruik te maken van een
        INI bestand.Het inlogscherm va Winpro verschijnt niet.Geen werking
        zolang er geen wachtwoord ingegeven is. <span
        style="color: #0000ff;">ini-bestand</span> correspondeerd met de naam
        van het bestand en het toegangspad naar dit bestand. </p>

        <p><span style="font-family: 'Times New Roman';"> </span></p>

        <p><span style="font-family: 'Times New Roman';">   </span> <span
        style="text-decoration: underline;">Voorbeeld</span> :</p>

        <p> <br>
        <span
        style="font-family: 'Times New Roman'; font-style: italic;">   </span><span
        style="font-style: italic;">    - WinPro
        /WPR@Administrateur:wachtwoord@c:\test.ini        </span> (het bestand
        test.ini bevindt zich op de harde schijf C:).<br>
        <span
        style="font-family: 'Times New Roman'; font-style: italic;">   </span><span
        style="font-style: italic;">    - WinPro /WPR@Administrateur:wachtwoord
        @.\test.ini          </span> (het bestand test.ini bevindt zich in de
        directorie van WinPro).<br>
        <span style="font-family: 'Times New Roman';">   </span> <br>
        <span style="font-family: 'Times New Roman';">   </span> <span
        style="text-decoration: underline;">Structuur van de INI</span><span
        style="font-family: 'Times New Roman'; text-decoration: underline;"> </span><span
        style="text-decoration: underline;">:</span><br>
        <span style="font-family: 'Times New Roman';">   </span>    <br>
        <span style="font-family: 'Times New Roman';">   </span>    <span
        style="font-weight: bold;">[WPReport]</span> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="245" style="width: 245px; height: 22px;"><p
                style="margin: 0px 0px 0px 34px;"><span
                style="font-style: italic;">REPORT=</span> </p>
              </td>
              <td width="829" style="width: 829px; height: 22px;"><p
                style="margin: 0px 0px 0px 34px;">Code van het rapport WPR
                welke je wil gebruiken.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="245" style="width: 245px;"><p
                style="margin: 0px 0px 0px 34px;"><span
                style="font-style: italic;">PARAMCOUNT=</span>        </p>
              </td>
              <td width="829" style="width: 829px;"><p
                style="margin: 0px 0px 0px 34px;">Aantal parameters naar het
                WPR Rapport (ex: 10).</p>
              </td>
            </tr>
          </tbody>
        </table>
        <br>
        <span style="font-family: 'Times New Roman';">   </span>    <br>
        <span style="font-family: 'Times New Roman';">   </span>    <span
        style="font-weight: bold;">[PARAM-1]</span></div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="245" style="width: 245px; height: 22px;"><p
                style="margin: 0px 0px 0px 29px;"><span
                style="font-style: italic;">NAME=</span></p>
              </td>
              <td width="829" style="width: 829px; height: 22px;"><p
                style="margin: 0px 0px 0px 34px;">Naam van de parameter. Deze
                naam wordt tevens gebruikt in WPReport op niveau van de
                queries.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="245" style="width: 245px;"><p
                style="margin: 0px 0px 0px 29px;"><span
                style="font-style: italic;">TYPE=</span>        </p>
              </td>
              <td width="829" style="width: 829px;"><p
                style="margin: 0px 0px 0px 34px;">Formaat van het veld van de
                parameter (waarde <span style="font-weight: bold;">ftinteger
                </span>voor een integer, <span
                style="font-weight: bold;">ftstring </span>voor een karakter
                (string), <span style="font-weight: bold;">ftfloat </span>voor
                een decimaal getal)</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="245" style="width: 245px;"><p
                style="margin: 0px 0px 0px 29px;"><span
                style="font-style: italic;">VALUE=</span></p>
              </td>
              <td width="829" style="width: 829px;"><p
                style="margin: 0px 0px 0px 35px;">Waarde van de te vervangen
                parameter.</p>
              </td>
            </tr>
          </tbody>
        </table>
        <br>
        <span style="font-family: 'Times New Roman';">   </span>    .<br>
        <span style="font-family: 'Times New Roman';">   </span>    <span
        style="font-weight: bold;">[PARAM-10]</span><br>
        <span
        style="font-family: 'Times New Roman'; font-style: italic;">   </span><span
        style="font-style: italic;">   NAME=</span><br>
        <span
        style="font-family: 'Times New Roman'; font-style: italic;">   </span><span
        style="font-style: italic;">   TYPE=</span><br>
        <span
        style="font-family: 'Times New Roman'; font-style: italic;">   </span><span
        style="font-style: italic;">   VALUE=</span><br>
         <br>
        <span style="font-family: 'Times New Roman';">   </span>    <span
        style="font-weight: bold;">[MISC]</span></div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="245" style="width: 245px; height: 22px;"><p
                style="margin: 0px 0px 0px 29px;"><span
                style="font-style: italic;">PREVIEW=</span>        </p>
              </td>
              <td width="829" style="width: 829px; height: 22px;"><p
                style="margin: 0px 0px 0px 34px;">Preview in WPR (1) of directe
                afdruk (0, standaard).</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> <br>
        <span style="font-family: 'Times New Roman';">   </span>    <span
        style="font-weight: bold;">[PRINTER]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="245" style="width: 245px; height: 22px;"><p
                style="margin: 0px 0px 0px 34px;"><span
                style="font-style: italic;">NAME=</span></p>
              </td>
              <td width="829" style="width: 829px; height: 22px;"><p
                style="margin: 0px 0px 0px 34px;">Naam van de standaard printer
                gebruikt om dit rapport af te drukken,en welke in Windows
                gedefinieerd is.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="245" style="width: 245px;"><p
                style="margin: 0px 0px 0px 32px;"><span
                style="font-style: italic;">COPIES= </span>        </p>
              </td>
              <td width="829" style="width: 829px;"><p
                style="margin: 0px 0px 0px 34px;">Aantal identieke afdrukken
                van hetzelfde rapport.</p>
              </td>
            </tr>
          </tbody>
        </table>
        <br>
        <span style="font-family: 'Times New Roman';">   </span>    </div>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="642" bgcolor="#8bab97"
              style="width: 642px; background-color: #8bab97; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 9px;"><span
                style="font-weight: bold; color: #000000; text-decoration: underline;">Nota:</span><span
                style="color: #000000; text-decoration: underline;"></span></p>

                <p style="margin: 0px 0px 0px 9px;"><span class="f_Textestd">-
                Indien het veld </span><span class="f_Textestd"
                style="font-weight: bold;">[PARAM-n]</span><span
                class="f_Textestd">.</span><span
                style="font-style: italic; color: #000000;">NAME </span><span
                class="f_Textestd">wordt vervangen door </span><span
                class="f_Textestd" style="font-weight: bold;">:order
                bijvoorbeeld</span>, noteren wij <span
                style="font-weight: bold;">order </span>zonder de &lsquo; <span
                style="font-weight: bold;">:</span> &lsquo; !!<br>
                <span style="font-weight: bold; color: #ff0000;">- Het ini
                bestand wordt gelezen na gebruik/opstarten van de command
                liine !</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.087</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">09/11/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Aangepaste
                tabellen</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Nieuwe
                tabellen</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Geen</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Geen</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span class="f_TitreReleaseNote"> </span></p>

        <p><span class="f_TitreReleaseNote">Wijziging gedrag voor variable
        _OrderStatus (_EtatCommande):</span> Om een meer efficient beheer van
        orders en offertes toe te laten, is het gedrag van de variabele <span
        style="color:#0080ff">_OrderStatus</span> <span
        style="color:#0080ff">(_EtatCommande)</span> gewijzigd.</p>

        <p>Voorheen, waanneer een gebruiker een nieuwe order of offerte
        aanmaakte, werd de variabele <span style="color:#0080ff">_OrderStatus
        (_EtatCommande)</span> geïnialiseerd met een 0 waarde zolang het order
        of offerte niet minstens éénmaal opgelagen was.Dit gedrag is nu
        aangepast, Winpro inialiseerd de variabele <span
        style="color:#0080ff">_OrderStatus(_EtatCommande)</span> tmet de waarde
        corresponderend aan de offerte of order status (resp. 100 of 200), van
        zodra deze aangemaakt wordt, zonder dat het nodig is deze eerst éénmaal
        op te slaan.</p>

        <p></p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.077</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">01/09/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Aangepaste
                tabellen</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Nieuwe
                tabellen</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Geen</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Geen</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p><span class="f_TitreReleaseNote">Toevoegsel aan de module Ontvangst
        Beglazingen CFV: :</span> De dialoog &lsquo;ontvangst
        beglazingen&rsquo;, menu| Productie beheer | Ontvangst beglazing, wordt
        nu weergegeven met een nieuw veld welke met de barcode van het glas
        correspondeert, om duidelijk een onderscheid te maken tussen
        verschillende beglazingen met dezelfde eigenschappen.</p>

        <p>Tevens is het nu mogelijk om de kolommen te sorteren door op de
        header te klikken</p>

        <p></p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img alt="CFV"
        src="../../Users/dtrippaers/Pictures/Ontvangst beglazing.png"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"
        width="721" height="372"></p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.075</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">29/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Aangepaste
                tabellen</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Nieuwe
                tabellen</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Geen</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Geen</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p><span class="f_TitreReleaseNote">Standalone rolluik en systeem
        formules:</span> Indien een afzonderlijk rolluik ingevoerd wordt,
        worden er met de variabelen geïnitialiseerd in het tabblad
        &ldquo;formules&rdquo; op systeem niveau niet langer meer rekening
        gehouden in de rolluik </p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Bull-eyes vorm en buitenkader
        dagmaat:</span> Voor een osse-oog vorm wordt in het tabblad
        &ldquo;Maten&rdquo;, de velden voor de ingave van de dagmaten
        (aanslagen) voor boven, links en rechts vergrendeld .Enkel de aanslag
        &ldquo;onderaan&rdquo; blijft mogelijk om in te vullen.</p>

        <p> </p>

        <p><img alt="BE" src="../../Users/dtrippaers/Pictures/bulls eye.png"
        style="float: left" width="383" height="304"> </p>

        <p><span class="f_TitreReleaseNote">Overzetten van prospecten naar
        klanten: :</span> . Wanneer een prospect naar een klantcode
        getransfereerd wordt gebruik makend van de voorziene knop, zal Winpro
        nu automatisch alle velden kopiëren welke gerelateerd zijn aan de naam
        van de verantwoordelijke naar het veld &ldquo;contactnaam&rdquo; van de
        corresponderende klanten record.in het tabblad &ldquo;Relaties&rdquo;..
        </p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.074</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">29/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Aangepaste
                tabellen</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Nieuwe
                tabellen</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Geen</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Geen</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Bijprofielen op een raam :</span>
        Het maximum aantal bijprofielen op een raam is verhoogd van 20 naar 100
        profielen voor eenzelfde raam.s.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote"></span><span
        class="f_TitreReleaseNote">Extra afdruk optie voor WPR:</span> Een
        nieuwe sleutel in de &ldquo;settings table&rdquo; activeert een extra
        afdruk optie voor WPR, net vooraleer de machine bestandjes aangemaakt
        worden, op optimalisatie niveau</p>

        <p> </p>

        <p><span style="font-weight: bold;">[Reports]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="188"><span class="f_Winproini">After Data
                Optimisation</span></td>
              <td><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">=
                bevat 1 om een extra afdruk voor WPR te activeren vóór de
                machinebestandjes aangemaakt worden,0 indien niet (Integer
                formaat I, standaard waarde).</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-family: 'Calibri';"> </span></p>

        <p><span
        style="font-weight: bold; text-decoration: underline;"></span><span
        class="f_TitreReleaseNote">Nieuwe globale variabelen voor
        stijlen/regels en koppelingen:</span> Winpro bevat nu nieuwe globale
        variabelen voor de stijlen/regels en koppelingen, deze zijn :</p>

        <p></p>

        <p><strong><span style="color:#0080ff">_RightCouplCateg [
        ]</span></strong>= Categorie van de koppeling rechts, op het einde van
        de koppeling welke op dat moment berekend wordt. <strong><span
        style="color:#0080ff">(TransomIndex).</span></strong></p>

        <p><strong><span style="color:#0080ff">_LeftCouplCateg [
        ]</span></strong>= Categorie van de koppeling links, op het einde van
        de koppeling welke op dat moment berekend wordt. <strong><span
        style="color:#0080ff">(TransomIndex).</span></strong></p>

        <p><strong style="color:#0080ff">_TopCouplCateg [ ]</strong>= Categorie
        van de koppeling boven, op het einde van de koppeling welke op dat
        moment berekend wordt. <strong><span
        style="color:#0080ff">(TransomIndex).</span></strong></p>

        <p><strong style="color:#0080ff">_BottomCouplCateg [ ]</strong>=
        Categorie van de koppeling onderaan, op het einde van de koppeling
        welke op dat moment berekend wordt. <strong><span
        style="color:#0080ff">(TransomIndex).</span></strong></p>

        <p>De koppeling welke op dat moment berekend wordt is genummerd
        <strong><span style="color:#0080ff">TransomIndex.</span></strong></p>

        <p></p>

        <p style="text-indent: -142px; margin: 0px 0px 0px 189px;"><span
        class="f_Variables"> </span></p>

        <div
        style="text-align: left; text-indent: -142px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="228" style="width: 228px;"><p
                style="text-indent: -7px; margin: 0px 0px 0px 30px;"><span
                class="f_Variables">_CategCoupleurDroite []</span></p>
              </td>
              <td width="503" style="width: 503px;"><p>=  Categorie van de
                koppeling rechts, op het einde van de koppeling welke op dat
                moment berekend wordt (<span
                class="f_Variables">NumeroTraverse</span>). </p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="228" style="width: 228px;"><p
                style="text-indent: -7px; margin: 0px 0px 0px 30px;"><span
                class="f_Variables">_CategCoupleurGauche []</span></p>
              </td>
              <td width="503" style="width: 503px;"><p>=  Categorie van de
                koppeling links, op het einde van de koppeling welke op dat
                moment berekend wordt (<span
                class="f_Variables">NumeroTraverse</span>). </p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="228" style="width: 228px;"><p
                style="text-indent: -142px; margin: 0px 0px 0px 165px;"><span
                class="f_Variables">_CategCoupleurHaut []</span></p>
              </td>
              <td width="503" style="width: 503px;"><p>=  Categorie van de
                koppeling boven, op het einde van de koppeling welke op dat
                moment berekend wordt (<span
                class="f_Variables">NumeroTraverse</span>). </p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="228" style="width: 228px;"><p
                style="text-indent: -142px; margin: 0px 0px 0px 165px;"><span
                class="f_Variables">_CategCoupleurBas []</span></p>
              </td>
              <td width="503" style="width: 503px;"><p>=  Categorie van de
                koppeling onderaan, op het einde van de koppeling welke op dat
                moment berekend wordt (<span
                class="f_Variables">NumeroTraverse</span>). </p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -142px;"> <br>
        De koppeling welke op dat moment berekend wordt is genummerd <span
        class="f_Variables">NumeroTraverse</span>.</p>

        <p> </p>

        <p><span style="text-decoration: underline;"></span><span
        style="text-decoration: underline;">Voorbeeld gebruik :</span></p>

        <p> </p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="color: #000080;">Quantite := _CategCoupleurDroite
        [NumeroTraverse]</span><br>
        <span style="color: #000080;">Longueur := NumeroTraverse</span><br>
        <span style="font-size: 12pt; color: #000080;"> </span><br>
        <span style="color: #000080;">Si _CategCoupleurDroite [NumeroTraverse]
        = 0</span><br>
        <span
        style="font-family: 'Times New Roman'; color: #000080;">  </span><span
        style="color: #000080;">Quantite := 100</span><br>
        <span
        style="font-family: 'Times New Roman'; color: #000080;">  </span><span
        style="color: #000080;">Longueur := 1000</span><br>
        <span style="color: #000080;">Fin Si</span></p>

        <p></p>

        <p>of</p>

        <p></p>

        <p style="margin-left:4em;color:#0080ff">Hoeveelheid :=
        _RightCouplCateg [TransomIndex]</p>

        <p style="margin-left:4em;color:#0080ff">Lengte := TransomIndex</p>

        <p style="margin-left:4em;color:#0080ff"></p>

        <p style="margin-left:4em;color:#0080ff">If _RightCouplCateg
        [TransomIndex] = 0</p>

        <p style="margin-left:4em;color:#0080ff">Hoeveelheid := 100</p>

        <p style="margin-left:4em;color:#0080ff">Lengte := 1000</p>

        <p style="margin-left:4em;color:#0080ff">End If</p>

        <p></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="color: #000080;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.065</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">29/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Aangepaste
                tabellen</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Nieuwe
                tabellen</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">LaqArt</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Geen</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Reservaties/Leverancierbestellingen
        en gelakte artikelen: :</span> U heeft nu de mogelijkheid om lakken te
        bestellen en te reserveren in functie van de volledige profiellengte
        i.p.v. de geoptimaliseerde profiellengte. Tot nu toe ,ging Winpro
        altijd uit van de gezaagde en werkelijk verbruikte lengtes, zonder de
        totale lengte te lakken en/of lak te reserveren.</p>

        <p>U heeft nu de keuze tussen beide manieren van werken, gebruikmakend
        van een checkbox in het tabblad &ldquo;Lakken&rdquo; van het
        artikelbestand.</p>

        <p></p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim13.jpg" width="606"
        height="273" vspace="1" hspace="1" border="0" alt=""></p>

        <p> </p>

        <p>Wanneer <img src="img/embim14.jpg" width="89" height="30" vspace="1"
        hspace="1" border="0" alt=""> aangevinkt is, zal WinPro de berekeningen
        volgens de totale lengte doen. Wanneer dit niet aangevinkt is, houdt
        Winpro rekening met de berekende en optimaliseerde lengtes waarbij met
        reststukken geen rekening gehouden wordt.</p>

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
                8.1.1.063</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">06/07/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Nouveau champ pour le module
        thermique (TM):</span> Ajout d'un champ ERRTHERM dans la table <span
        style="font-style: italic;">Detail2</span> ainsi que dans la table
        <span style="font-style: italic;">Fen </span>pour les utilisateurs de
        WPR. Ce champ contiendra le message d'erreur éventuel provenant du
        calcul thermique.</p>

        <p> </p>

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
                8.1.1.059</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">06/07/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Ajout d</span><span
        class="f_TitreReleaseNote">&rsquo;</span><span
        class="f_TitreReleaseNote">un droit utilisateur pour le module
        thermique:</span> Un droit est ajouté à la fiche Utilisateur afin </p>

        <p>d&rsquo;autoriser ou non la configuration des valeurs pour le <span
        style="font-weight: bold;">Module Thermique TM</span>.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim15.jpg" width="181"
        height="46" vspace="1" hspace="1" border="0" alt=""></p>

        <p> </p>

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
                8.1.1.058</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">06/07/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Importation des articles de pose
        dans WinPro/D:</span> WinPro/D offre la possibilité de répondre
        automatiquement à la question "Voulez-vous importer les articles de
        poses ?" lors d&rsquo;un import de devis dans WinPro/D (note de version
        8.1.1.047).</p>

        <p>Voici la clef à ajouter dans la table <span
        style="font-style: italic;">Settings</span> de WinPro/D, ainsi que les
        comportements de WinPro/D en fonction de la valeur de cette clef:</p>

        <p><span style="font-family: 'Tahoma'; font-weight: bold;"> </span></p>

        <p><span
        style="font-family: 'Tahoma'; font-weight: bold;">[WinProD]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">AutoImportPose        =
        0</span><span class="f_Textestd">       Poser la question (comportement
        par défaut).</span></p>

        <p class="p_Textestd">                       <span
        class="f_Winproini">= 1</span><span class="f_Textestd">       Réponse
        auto oui.</span></p>

        <p class="p_Textestd">                       <span
        class="f_Winproini">= 2</span><span class="f_Textestd">       Réponse
        auto non.</span></p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Filtres sur les quincailleries
        multi-ouvrants:</span> Le comportement de la clef activant la fonction
        <span style="font-weight: bold;">Quincaillerie Multi-Ouvrants
        </span>(voir notes de versions correspondantes) a été modifié afin de
        permettre de filtrer dans la quincaillerie les ouvrants d&rsquo;un même
        système ou non.</p>

        <p> </p>

        <p><span
        style="font-family: 'Tahoma'; font-weight: bold;">[System]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Quinc Multi Ouvrant    
           = 0</span><span class="f_Textestd">       Pas de quincaillerie
        multi-ouvrant (défaut).</span></p>

        <p class="p_Textestd">                       <span
        class="f_Winproini">= 1</span><span class="f_Textestd">       Ouvrants
        multiples dans le même système.</span></p>

        <p class="p_Textestd">                       <span
        class="f_Winproini">= 2</span><span class="f_Textestd">       Ouvrants
        multiples dans tous les systèmes.</span></p>

        <p> </p>

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
                8.1.1.058</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">06/07/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Comportement de la variable
        </span><span class="f_TitreReleaseNote"
        style="font-style: italic;">_Quantite</span><span
        class="f_TitreReleaseNote">:</span> Jusqu&rsquo;à présent la variable
        <span class="f_Variables">_Quantite</span><span
        style="font-weight: bold;"></span>était intialisée à la valeur 0 par
        défaut, ce qui pouvait occasionner des messages d&rsquo;erreur de
        division par zéro lorsqu&rsquo;utilisée dans une division. Cette
        variable est maintenant initialisée à 1 par défaut.</p>

        <p>       </p>

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
                8.1.1.057</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">06/07/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Nouveau champ dans la table
        </span><span class="f_TitreReleaseNote"
        style="font-style: italic;">VitreCde</span><span
        class="f_TitreReleaseNote">:</span> Deux nouveaux champs sont ajoutés
        dans la table <span style="font-style: italic;">VitreCde</span>. Ils
        contiendront l'épaisseur du premier et du deuxième intercalaire (en cas
        de triple vitrage) d'un vitrage, respectivement EPINTERC et
        EPINTERC2.</p>

        <p><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p><span class="f_TitreReleaseNote">Impression des warm-edges:</span>
        Au niveau de la fiche signalétique du WarmEdge, une case à cocher
        permet à présent de choisir s'il faut imprimer ou non le warm-edge sur
        les différents documents (Devis, confirmation, plan atelier, commande
        vitrage, etc...).</p>

        <p>Cette fonctionnalité a été ajoutée pour éviter d&rsquo;imprimer
        inutilement cette information lorsque le warm-edge saisi par
        l&rsquo;utilisateur n&rsquo;en est pas un un. </p>

        <p>Par exemple : « Warm-Edge : SANS ».</p>

        <p><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p><span class="f_TitreReleaseNote">Module importation/création
        d</span><span class="f_TitreReleaseNote">&rsquo;</span><span
        class="f_TitreReleaseNote">articles IMPA:</span> Le module <span
        style="font-weight: bold;">Importation d</span><span
        style="font-weight: bold;">&rsquo;</span><span
        style="font-weight: bold;">article IMPA</span>, qui permet la
        génération d&rsquo;une base d&rsquo;articles à partir d&rsquo;une table
        DBF (compatible avec Excel) est à présent compatible avec le format de
        base de données mySQL. </p>

        <p>Auparavant ce module n&rsquo;était compatible qu&rsquo;avec les
        bases de données au format FoxPro.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Import de panneaux décoratifs
        configurés (module IPDC):</span> Ajout du module <span
        style="font-weight: bold;">IPDC - Importation des panneaux décoratifs
        configurés</span>. Ce module permet une importation et création
        automatique des panneaux décoratifs Harinck. WinPro permet d'importer
        un fichier Excel provenant du fournisseur de panneaux Harinck. </p>

        <p>Ce fichier contient toutes les caractéristiques des différents
        panneaux. </p>

        <p>A partir de ce fichier Excel, WinPro va créer les panneaux ainsi que
        leur paramétrage et les aricles associés aux panneaux.</p>

        <p>Pour importer un fichier Excel de chez Harinck, vous pouvez utiliser
        le menu Utilitaire | Importation des panneaux décoratifs configurés.</p>

        <p>       </p>

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
                8.1.1.053</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">06/07/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Fournisseur vitrage par
        formule:</span> Vous pouvez définir le fournisseur d&rsquo;un vitrage
        donné par paramétrage. Cette possibilité est activée par une clef dans
        la table <span style="font-style: italic;">Settings </span>d&rsquo;une
        part, et en définissant une formule d&rsquo;affectation du fournisseur
        d&rsquo;autre part.</p>

        <p> </p>

        <p><span
        style="font-family: 'Tahoma'; font-weight: bold;">[Glass]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Supplier by formula    
           = 0</span><span class="f_Textestd">       Développement désactivé
        (défaut).</span></p>

        <p class="p_Textestd">                       <span
        class="f_Winproini">= 1</span><span class="f_Textestd">       
         Développement activé, le fournisseur vitrage peut être défini par
        formule.</span></p>

        <p> </p>

        <p>Lorsque vous activez ce développement, il est impératif
        d&rsquo;ajouter un numéro d'identification différent pour chaque
        fournisseur, qu'il s'agisse d'un fournisseur de vitrage ou non.</p>

        <p>Ceci est à renseigner dans la fiche du fournisseur, dans le champ
        servant de numéro d'identification au bas de l'onglet "Commandes et
        livraison".</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim16.jpg" width="294"
        height="67" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="text-align: center;"> </p>

        <p>Le fournisseur du vitrage pourra être modifié par paramétrage, en
        utilisant la variable globale <span
        class="f_Variables">_RemplFournisseur</span>, indicée sur le numéro de
        remplissage, de la manière suivante:</p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Variables"
        style="font-style: italic;">_RemplFournisseur [NumeroRemplissage] :=
        numéro d'identification du fournisseur</span></p>

        <p style="text-align: center; margin: 0px 0px 0px 47px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="361" bgcolor="#00b2ae"
              style="width: 361px; background-color: #00b2ae; border: solid 1px #000000;"><p><span
                style="font-style: italic; font-weight: bold; color: #ff0000; text-decoration: underline;">Attention
                !</span></p>

                <p class="p_Textestd"><span class="f_Textestd">Le champ
                identificateur vitrage sera visible seulement si vous possédez
                le module </span><span class="f_Textestd"
                style="font-weight: bold;">Multi Fournisseur Vitrage
                (MFV)</span><span class="f_Textestd">, de même si vous n'avez
                pas le module, la variable </span><span
                class="f_Variables">_RemplFournisseur[]</span><span
                class="f_Textestd" style="font-weight: bold;"></span><span
                class="f_Textestd">sera utilisée comme une variable globale et
                ne sera pas récupérée par Winpro pour le traitement de
                l'affectation du vitrage à un fournisseur donné</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>       </p>

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
                8.1.1.050</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">06/07/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">EDI Teleglass et vitrages
        composés:</span> Complément dans l'EDI vitrage pour le protocole
        Teleglass, le code concaténé d'un vitrage composé est maintenant écrit
        dans le fichier généré par l'edi.</p>

        <p>       </p>

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
                8.1.1.049</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">06/07/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Panneau fabriqué et vitrage
        composé:</span> Il est à présent possible d&rsquo;utiliser des vitrages
        composés dans des panneaux fabriqués, en gardant à l&rsquo;esprit les
        règles suivantes:</p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Lorsque l&rsquo;on ne précise pas de code vitrage dans le
                paramétrage du panneau fabriqué, Winpro utilise le vitrage tel
                que saisi dans l&rsquo;onglet châssis du devis ou de la
                commande.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0262.zoom86.jpg"
        width="263" height="115" border="0" alt="clip0262"></p>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Lorsque l&rsquo;on précise un code vitrage dans le
                paramétrage du panneau fabriqué, il faut alors copier les
                questions du vitrage composé dans le jeu de questions du
                panneau fabriqué.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0263.zoom86.jpg"
        width="258" height="111" border="0" alt="clip0263"></p>

        <p>       </p>

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
                8.1.1.047</span></p>
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

        <p> </p>

        <p><span class="f_TitreReleaseNote">Articles de pose dans
        WinPro/D:</span> Lorsqu&rsquo;on importe un devis dans WinPro/D,
        l&rsquo;utilisateur est maintenant invité à confirmer si les Articles
        de Pose doivent être pris en compte ou non, selon les cas de figure.</p>

        <p>En important un devis, un nouveau dialogue " Voulez-vous importer
        les articles de poses saisis dans ce devis? " apparait:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Si la réponse est “OUI“, les articles de pose seront importés
                ainsi que le contenu de l'onglet Pose du devis.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Si la réponse est “NON“, les articles de pose ne sont pas
                importés, le contenu de l&rsquo;onglet Pose du devis est
              ignoré.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>Pour les exports, si l&rsquo;utilisateur répond “Non“ à la question
        “L&rsquo;export est-il destiné au fabricant?“, les articles de pose
        sont systématiquement exportés avec le devis.</p>

        <p>       </p>

        <p>       </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.039</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">25/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                modifiées</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                créées</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">ReportCfg</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="text-align: center; margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';"> </span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">PDF automatique pour
        WpReport:</span> Vous avez maintenant la possibilité d'imprimer tous
        les types de document WpReport dans un fichier PDF de manière
        automatique, via de nouvelles options dans le menu <span
        style="font-weight: bold;">Rapports | Documents type</span>.</p>

        <p><span style="font-family: 'Times New Roman';"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0283.zoom88.jpg"
        width="634" height="321" border="0" alt="clip0283"></p>

        <p> </p>

        <p>Il faudra pour cela définir :</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>La colonne d&rsquo;impression en PDF <img src="img/embim17.jpg"
                width="25" height="37" vspace="1" hspace="1" border="0"
              alt=""></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Le répertoire de sauvegarde et le format du nom de fichier 
                <img src="img/embim18.jpg" width="213" height="37" vspace="1"
                hspace="1" border="0" alt="">. Le mot-clé <span
                style="color: #0000ff;">%ORDER%</span> sera ici remplacé par le
                numéro de commande.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 47px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="361" bgcolor="#00b2ae"
              style="width: 361px; background-color: #00b2ae; border: solid 1px #000000;"><p><span
                style="font-style: italic; font-weight: bold; color: #000000; text-decoration: underline;">Note:</span></p>

                <p><span style="font-style: italic;">Le nom de variable à
                utiliser dans le nom du fichier est bien “%ORDER%”, signes %
                compris, et la variable, sensible à la casse, est en
                majuscules. Autrement la variable ne sera pas
                interpretée</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 48px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.038</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">19/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                modifiées</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                créées</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">VitreCde</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">MotifCdeVitre</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p><span class="f_TitreReleaseNote">Recommande des vitrages pour le
        module Réception de Vitrage (CFV):</span> Suite à vos différents
        retours, le module <span style="font-weight: bold;">Réception de
        Vitrage CFV </span>a été complété avec de nouvelles colonnes dans les
        différents dialogue du module, ainsi qu&rsquo;avec une fonctionnalité
        de recommande automatique des vitrages en cas de besoin (SAV).</p>

        <p> </p>

        <p><span style="text-decoration: underline;">Mise en place :</span></p>

        <p> </p>

        <p style="text-indent: 47px;">Dans un premier temps, il faudra définir
        des motifs de recommande de vitrage dans un menu prévu à cet effet,
        accessible via <span style="font-weight: bold;">Données | Autres
        données | Motif de recommande des vitrages</span>. </p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0279.zoom90.jpg"
        width="193" height="133" border="0" alt="clip0279"></p>

        <p style="text-align: center;"> </p>

        <p>Lorsque la case « Sans prix » est cochée pour un motif donné, la
        commande de SAV générée, pour un vitrage utilisant ce motif de
        recommande, ne sera pas valorisée. La commande SAV sera créée avec la
        case « Sans prix » cochée, au niveau de l&rsquo;onglet <span
        style="font-weight: bold;">Châssis </span>de cette commande </p>

        <p>Lorsque la case est décochée dans le motif de recommande, la
        commande SAV sera bien valorisée, la case « Sans prix » de
        l&rsquo;onglet <span style="font-weight: bold;">Châssis </span>sera
        décochée.</p>

        <p> </p>

        <p style="text-indent: 47px;">Il faudra également créer un système
        spécifique dédié au SAV des vitrages à recommander. Ce système sera
        similaire à ce qu&rsquo;on pourrait créer pour recommander un vantail
        seul par exemple, tant qu&rsquo;il respecte les conditions
        suivantes :</p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Création d&rsquo;un code système fictif dédié au SAV des
                vitrages.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Création d&rsquo;un dormant fictif dans ce système, sans
                encombrements (pas de petite/grande hauteur renseignées).</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Création d&rsquo;un ouvrant fictif dans ce système en tant
                que fixe simple cadre, sans encombrements (pas
                d&rsquo;épaisseur in/extérieure).</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Création d&rsquo;une quincaillerie fictive liée à
                l&rsquo;ouvrant.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Création d&rsquo;une table de parclose dans ce système,
                cochée « Paramétrage par formules », et sans contenu.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Renseigner les valeurs par défaut de la fiche système avec
                les éléments créés au préalable.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="margin: 0px 0px 0px 47px;">Enfin, il faudra définir deux
        nouvelles clefs dans la table <span
        style="font-style: italic;">settings</span> :</p>

        <p> </p>

        <p><span
        style="font-family: 'Tahoma'; font-weight: bold;">[Glass]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="188"><span class="f_Winproini">Systeme pour
                recommande</span></td>
              <td>       <span
                style="font-family: 'Courier New'; font-weight: bold;">=
                Définir ici le code du système créé pour le SAV des vitrages
                seuls (format caractères S).</span></td>
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
              <td width="188"><span class="f_Winproini">Default
              pattern</span></td>
              <td>       <span
                style="font-family: 'Courier New'; font-weight: bold;">=
                Renseigner ici le code du motif de recommande vitrage par
                défaut à utiliser si aucun motif n</span><span
                style="font-family: 'Courier New'; font-weight: bold;">&rsquo;</span><span
                style="font-family: 'Courier New'; font-weight: bold;">est
                précisé lors de la recommande du vitrage.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span style="text-decoration: underline;">Utilisation :</span></p>

        <p> </p>

        <p>       L&rsquo;utilisation de cette fonctionnalité commence dans le
        menu Commandes | Gestion de production | Réception de vitrage.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0280.zoom84.jpg"
        width="588" height="345" border="0" alt="clip0280"></p>

        <p> </p>

        <p>Dans ce dialogue, des colonnes ont été ajoutées afin de mieux
        repérer les vitrages que l&rsquo;on traite, avec pour chaque volume le
        numéro d&rsquo;ouvrant, de vantail et de remplissage correspondant.</p>

        <p> </p>

        <p style="text-indent: 47px;">Trois nouvelles colonnes sont également
        disponibles pour la fonctionnalité de recommande des vitrages :</p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>La colonne « A recommander » correspond à une case à cocher
                qui active la recommande automatique du vitrage. Tout vitrage
                pour lequel cette case est cochée se verra recommandé
                automatiquement lorsque l&rsquo;opérateur utilisera le bouton
                <img src="img/clip0281.zoom89.jpg" width="135" height="21"
                border="0" alt="clip0281">.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>La colonne « Code SAV » est renseignée automatiquement par
                WinPro avec le code de la commande SAV qu&rsquo;il créera pour
                le volume de verre coché « A recommander ». Le nom de la
                commande sera basé sur le préfixe défini pour les commandes
                SAV, dans le menu <span style="font-weight: bold;">Utilitaires
                | Préférences</span>, onglet Préfixes pour la ligne SAV.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>La colonne « Motif » permet à l&rsquo;opérateur de définir le
                motif pour lequel une commande de SAV est générée pour ce
                volume de verre. Si aucun motif n&rsquo;est renseigné ici, le
                motif par défaut sera automatiquement utilisé (voir clef <span
                style="font-family: 'Courier New';">Default pattern</span> de
                la table <span style="font-style: italic;">settings
                </span>ci-dessus).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Ce dialogue peut être consulté à tout moment, il permettra de savoir
        quels vitrages sont réceptionnés ou recommandés, pour quel motif et
        quels sont les codes des commandes SAV correspondantes.</p>

        <p> </p>

        <p>Lorsqu&rsquo;une commande pour la recommande des vitrages est
        générée, le code de la commande d'origine, ainsi que la référence
        d&rsquo;origine, seront automatiquement copiés dans la référence de la
        nouvelle commande SAV, afin d&rsquo;améliorer la traçabilité.</p>

        <p> </p>

        <p style="text-indent: 47px;">Enfin, la recommande des vitrages est
        également tracée dans l&rsquo;onglet « Réception des vitrages » de la
        commande. Une colonne « Code SAV » est ajoutée, elle contiendra le code
        de la commande SAV générée pour le vitrage d&rsquo;origine.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0282.zoom87.jpg"
        width="558" height="202" border="0" alt="clip0282"></p>

        <p style="text-align: center;"><span
        style="font-size: 12pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.028</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">26/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                modifiées</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                créées</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Saisie des croisillons
        modifiée:</span> Il est dorénavant interdit d'encoder un croisillon
        avec moins de 2 alvéoles (Horizontales et Verticales), comme c'est déjà
        le cas actuellement pour les croisillons dessinés par paramétrage.<br>
        De plus, il est maintenant possible d'encoder les croisillons en
        précisant le nombre de barres et non plus le nombre d'alvéoles.<br>
        Pour cela, une nouvelle clef (format nombre entier) a été créée dans la
        table <span style="font-style: italic;">settings </span>:<br>
         </p>

        <p><span
        style="font-family: 'Tahoma'; font-weight: bold;">[System]</span></p>

        <p><span class="f_Winproini">Croisillon Encodage Barres      
         </span><span
        style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">=
        0  Encodage des alvéoles (défaut).</span></p>

        <p>                               <span
        style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">=
        1  Encodage des barres.</span></p>

        <p><span
        style="font-family: 'Courier New'; font-weight: bold;"> </span></p>

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
                8.1.1.024</span></p>
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

        <p> </p>

        <p><span class="f_TitreReleaseNote">Listes de commandes filtrées en
        facturation et livraison:</span> Il est à présent possible de ne pas
        afficher la liste complète des commandes clients lors de l'ouverture
        des fenêtres "Réimpression des bordereaux de livraison" et
        "Réimpression des factures",  via l'utilisation de la nouvelle clé dans
        la table <span style="font-style: italic;">Settings</span>:</p>

        <p> </p>

        <p><span
        style="font-family: 'Tahoma'; font-weight: bold;">[System]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">FilterOrder        =
        0</span><span class="f_Textestd">       Liste de commandes non filtrée
        (comportement de base, défaut).</span></p>

        <p class="p_Textestd">               <span class="f_Winproini">=
        1</span>        <span class="f_Textestd">Liste de commandes
        filtrée.</span></p>

        <p> </p>

        <p>Lorsque la clef est à la valeur 1, la liste de commande ne sera
        affichée que si au moins un filtre de sélection est renseigné.</p>

        <p>       </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.010</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">18/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                modifiées</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                créées</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';"> </span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">GestPmt</span></p>

                <p style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">TypePmt</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Module Gestion/Suivi de paiements
        (SP):</span> Ce nouveau module permet de gérer les paiements effectués
        sur les différentes commandes clients, et d&rsquo;imprimer des
        documents comptables.</p>

        <p>Pour activer le module, vous devez disposer d&rsquo;une licence
        adaptée. Un nouveau sous-menu apparaîtra alors dans Commandes et devis
        | Gestion des paiements.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0273.zoom70.jpg"
        width="195" height="247" border="0" alt="clip0273"></p>

        <p style="text-align: center;"> </p>

        <p><span style="text-decoration: underline;">Utilisation :</span></p>

        <p>L&rsquo;interface du module permet de choisir parmi 3 opérations,
        « Encodage », « Impression » et « Type de paiement ».</p>

        <p> </p>

        <p>       <span
        style="font-style: italic; text-decoration: underline;">Type de
        paiement :</span></p>

        <p>       Ce point de menu vous permettra d&rsquo;administrer les types
        de paiement que vous pouvez utiliser lors de l&rsquo;encodage de la
        réception de paiement. Vous pourrez ici utiliser les différents boutons
        pour ajouter, supprimer ou modifier un type de paiement. Les types de
        paiements sont enregistrés dans la table <span
        style="font-style: italic;">TypePmt</span>.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0274.zoom74.jpg"
        width="350" height="307" border="0" alt="clip0274"></p>

        <p> </p>

        <p>       <span
        style="font-style: italic; text-decoration: underline;">Encodage des
        réceptions de paiement :</span></p>

        <p style="text-indent: 47px;">Vous pouvez ici lister les commandes en
        choisissant un client selon une liste, ou bien choisir directement une
        commande à partir de son code. Une fois la commande choisie, vous
        verrez apparaître les informations relatives à celle-ci telles que le
        montant de la facture, ce qu&rsquo;il reste à payer et le détail des
        paiements déjà effectués.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0275.zoom65.jpg"
        width="668" height="395" border="0" alt="clip0275"></p>

        <p style="text-align: center;"> </p>

        <p>Notez qu&rsquo;il n&rsquo;est pas possible de confirmer 
        l&rsquo;ajout d&rsquo;un paiement tant que le champ « montant payé »
        n&rsquo;a pas été rempli.</p>

        <p>Vous avez la possibilité de choisir une date de paiement, un type,
        un commentaire et un montant.</p>

        <p>La touche <img src="img/embim19.jpg" width="36" height="38" vspace="1"
        hspace="1" border="0" alt=""> à droite de la fenêtre donne un accès
        direct à la calculatrice Windows.</p>

        <p>Lorsque votre saisie est terminée, utilisez le bouton <img
        src="img/clip0276.zoom73.jpg" width="105" height="28" border="0"
        alt="clip0276"> pour enregistrer la transaction (dans la table <span
        style="font-style: italic;">GestPmt</span>), ou bien cliquez sur le
        bouton <img src="img/clip0277.zoom74.jpg" width="106" height="29"
        border="0" alt="clip0277"> pour quitter le module.</p>

        <p> </p>

        <p>       <span
        style="font-style: italic; text-decoration: underline;">Impression des
        documents comptables:</span></p>

        <p>       Ce menu vous permettra d&rsquo;imprimer des documents utiles
        en comptabilité tels que l&rsquo; « Historique des commandes clients »,
        une « Balance client » ou encore une « Balance âgée client », ceci pour
        une fourchette de codes client donnée.</p>

        <p style="margin: 0px 0px 0px 24px;"> <br>
        <img src="img/clip0278.zoom63.jpg" width="643" height="266" border="0"
        alt="clip0278"></p>

        <p style="text-align: center; margin: 0px 0px 0px 47px;"><span
        style="font-size: 12pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="361" bgcolor="#00b2ae"
              style="width: 361px; background-color: #00b2ae; border: solid 1px #000000;"><p><span
                style="font-weight: bold; color: #0000ff; text-decoration: underline;">Remarque :</span></p>

                <p><span class="f_Textestd">Ce module est basé sur le
                générateur de rapport WPReport</span><span
                style="font-style: italic; color: #000000;">.</span><span
                class="f_Textestd">Actuellement, il n</span><span
                style="color: #000000;">&rsquo;</span><span
                class="f_Textestd">est compatible qu</span><span
                style="color: #000000;">&rsquo;</span><span
                class="f_Textestd">avec une base de données au format mySQL, il
                n</span><span style="color: #000000;">&rsquo;</span><span
                class="f_Textestd">est pas compatible avec les bases de données
                FoxPro.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 12pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.1.004</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                modifiées</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                créées</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">OrderTxt</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Détail des vitrages fabriqués dans
        l</span><span class="f_TitreReleaseNote">&rsquo;</span><span
        class="f_TitreReleaseNote">onglet Informations:</span> Une nouvelle
        clef dans la table <span style="font-style: italic;">settings
        </span>vous permet de décider s&rsquo;il faut ou non afficher le détail
        des feuilles de verre d&rsquo;un vitrage composé dans l&rsquo;onglet
        <span style="font-weight: bold;">Informations </span>de la commande.</p>

        <p> </p>

        <p><span style="font-weight: bold;">[Glass]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="189"><span class="f_Winproini">Hide Glass
                Components</span></td>
              <td><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">=
                Lorsqu</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">&rsquo;</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">elle
                vaut 0 (format entier I, valeur par défaut), WinPro détaille
                les feuilles de verre dans l</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">&rsquo;</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">onglet
                </span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-style: italic; font-weight: bold;">Informations</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">de
                la commande seulement. Lorsque la clef vaut 1, seul le vitrage
                composé est affiché dans cet onglet.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Amélioration pour les textes de
        documents client:</span> Les textes de début/fin de documents client,
        paramétrés dans les préférences, sont à présent transférés dans une
        table de la base de données, la table <span
        style="font-style: italic;">OrderText</span>.</p>

        <p>Les textes que vous créerez seront dorénavant enregistrés dans cette
        table.</p>

        <p>Pour importer vos textes existants, les fichiers sous l&rsquo;ancien
        format doivent se trouver dans le dossier “Data“ du répertoire de base
        (en mySQL, le créer s&rsquo;il n&rsquo;existe pas et y copier les
        fichiers). </p>

        <p>Au lancement de WinPro ou de WinPro/D, il vous sera proposé
        d&rsquo;importer les textes, les fichiers étant supprimés après
        import.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0260.zoom86.jpg"
        width="395" height="171" border="0" alt="clip0260"></p>

        <p>Dans le menu Utilitaires | Préférences onglet Textes, vous disposez
        également d&rsquo;un bouton <img src="img/embim20.jpg" width="76"
        height="24" vspace="1" hspace="1" border="0" alt="">, qui permettra de
        générer les textes enregistrés dans la base de données sous
        l&rsquo;ancien format de fichier, dans un sous-dossier “OrderText” du
        répertoire de base.</p>

        <p> </p>

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
                8.1.1.003</span></p>
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

        <p style="text-align: center;"><span class="f_Heading1"
        style="font-style: italic;"> </span></p>

        <p><span class="f_TitreReleaseNote">Panneau décoratif
        configuré :</span> Ajout du nouveau type de remplissage: "Panneau
        décoratif configuré". Ce type de remplissage permet de gèrer une base
        de données des panneaux Harinck.</p>

        <p> </p>

        <p>Ce nouveau type de panneau s'encode comme les remplissages actuels
        (vitrage ou panneau, composé ou non) dans une commande. </p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0035.zoom75.jpg"
        width="374" height="177" border="0" alt="clip0035"></p>

        <p> </p>

        <p>Il peut être paramétré via une interface de saisie manuelle
        similaire à celle des panneaux fabriqués. L'interface est disponible
        soit par un bouton se trouvant dans la barre des boutons en haut de la
        fenêtre principale, soit par le menu <span
        style="font-weight: bold;">Technique | Châssis | Panneau décoratif
        configuré</span>.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim21.jpg" width="186"
        height="27" vspace="1" hspace="1" border="0" alt=""></p>

        <p> </p>

        <p>L'interface se compose d'un écran contenant différents onglets:</p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim22.jpg" width="546"
        height="483" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>L'onglet <span style="font-weight: bold;">Description
                </span>permet de saisir une description, deux niveaux de
                catégorie, une option pour inclure le panneau dans WinPro/D ou
                non, un article qui sera à commander chez le fournisseur, un
                filtre de sélection (note de version 8.02), une catégorie
                thermique pour le calcul thermique (selon module, note de
                version 8.1.0) ainsi que la liste des couleurs autorisées pour
                ce panneau.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>L'onglet <span style="font-weight: bold;">Dimension
                </span>permet de saisir l'épaisseur par défaut du panneau ainsi
                que les dimensions autorisées pour l'emploi de ce panneau.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>L'onglet <span style="font-weight: bold;">Main d'oeuvre
                </span>permet de définir des suppléments pour le prix du
                panneau ainsi qu'un poste et un temps de main d'oeuvre par
                forme de panneau.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>L'onglet <span style="font-weight: bold;">Question</span>
                permet de définir un jeu de question dont les réponses pourront
                être utilisées dans l'onglet <span
                style="font-weight: bold;">Article </span>ou <span
                style="font-weight: bold;">Dessin</span>.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>L'onglet <span style="font-weight: bold;">Article
                </span>contient la liste des articles à consommer. La
                consommation de ces articles permet de définir le prix du
                panneau. Chaque article peut avoir un identifiant de macro
                ainsi qu'une description de macro (comme dans les vitrages
                composés). Ces deux éléments permettront de modifier des macros
                "<span class="f_Variables">@...@</span>", que l'utilisateur
                emploierait dans la description de l'article principal du
                panneau. La variable <span
                class="f_Variables">EpaisseurTotale</span> est utilisable dans
                les formules d&rsquo;articles.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>L'onglet <span style="font-weight: bold;">Dessin
                </span>contient la liste des dessins qui seront utilisés pour
                afficher le panneau à l'écran ou sur papier. La variable <span
                class="f_Variables">EpaisseurTotale</span> est utilisable dans
                les formules de dessin</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>L'onglet <span style="font-weight: bold;">Dxf</span> contient
                la liste des dxf WinPro qui peuvent être utilisés en fonction
                de l'épaisseur du panneau.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

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
                8.1.1.x</span></p>
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

        <p style="text-align: center;"><span class="f_Heading1"
        style="font-style: italic;"> </span></p>

        <p><span class="f_TitreReleaseNote">Nouveau module GLPV Gestion de
        Ligne de Production de Volet:</span> Ce nouveau module optionnel <span
        style="font-weight: bold;">GLPV</span> permet aux fabricants de volets
        roulants d&rsquo;affecter une ligne de production et de préparer les
        lots en fonction du caisson ou du tablier. Ce module se combine
        exclusivement avec le module <span style="font-weight: bold;">VO</span>
        et non avec le module <span style="font-weight: bold;">VO2</span>.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Nouveau module TMS Module Thermique
        Simplifié :</span><span style="font-weight: bold;"></span>Ce nouveau
        module est dérivé du<span style="font-weight: bold;">Module Thermique
        TM </span>avec une simplification de taille. </p>

        <p>La formule de calcul est inchangée, Winpro se contente d&rsquo;aller
        chercher le <span
        style="font-size: 12pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&Psi;</span><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #0000ff;">g</span>
        attribué par défaut au warm-edge (compte tenu de son épaisseur). Il
        n&rsquo;y a donc pas de tableaux à compléter permettant de modifier le
        <span
        style="font-size: 12pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&Psi;</span><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #0000ff;">g</span>
        en fonction des combinaisons de profils, d&rsquo;épaisseur de
        remplissage et des valeurs <span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #0000ff;">Ug</span>.
        Le résultat final du calcul thermique est une valeur s&rsquo;approchant
        de très près de la valeur réelle tout en restant dans les limites de ce
        qui est autorisé.</p>

        <p>Attention ce module n&rsquo;est disponible qu&rsquo;en base de
        données FoxPro. En mySQL, seul le module <span
        style="font-weight: bold;">TM</span> est disponible.</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
