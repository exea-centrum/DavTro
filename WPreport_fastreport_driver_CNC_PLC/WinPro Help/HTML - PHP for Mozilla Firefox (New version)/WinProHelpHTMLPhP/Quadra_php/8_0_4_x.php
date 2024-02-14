<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>	
<!DOCTYPE php PUBLIC "-//W3C//DTD php 4.01 Transitional//EN">  
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["8.0.4.x","8.0.4.x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?8_0_4_x.php"; }
else { parent.quicksync('a11.3.1'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>8.0.4.x</title>
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
        href="introduction.php">Top</a>  <a href="8_1_0_x.php">Previous</a>  <a
        href="8_0_3_x.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p class="p_Comment"><span class="f_Winproini"
        style="font-size: 8pt;">* Uncompatible with version 7.2, except when mentionned</span></p>

        <p style="text-align: center;"><span class="f_Comment"
        style="font-size: 8pt;"> </span></p>

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
                8.04.043</span></p>
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

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Problem fixed
        concerning EDI protocol for Glassver:</span> WinPro now deletes the EDI
        file generated when printing a glass order form, when this file is
        empty and does not contain any glass unit.</p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">WinPro/D and
        multi-sashes fitting frames:</span> When importing the technical
        database into WinPro/D, if the program detects the key <span
        class="f_Textestd">«</span><span class="f_Winproini"> Quinc Multi
        Ouvrant = 0</span> <span class="f_Textestd">» (multi sashes for
        fittings feature, refer to <a href="8_0_3_x.php">release note
        8.03</a>), and if table </span><span
        style="font-style: italic;">CorCmp</span> contains multiple records of
        sashes for a single fitting frame, WinPro/D will automatically assign 1
        to the key.</p>

        <p class="p_Comment">This test is done when data.pak file is imported
        as well as at the program startup.</p>

        <p class="p_Comment" style="text-align: center;"> </p>

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
                8.04.041</span></p>
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
                style="font-size: 8pt; font-family: 'Tahoma';">Modified
                tables</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Created
                tables</span></p>
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

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Data import for
        WinPro/D using command line:</span> It is now possible to import
        fabricator data for WinPro/D (data.pak file) silently and
        automatically, using a command line.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Examples :</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">WinProD.exe /import
        path_to_file_without_filename</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">or</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">D:\Program Files\WinproD\winprod.exe /import .\
        .\</span></p>

        <p style="text-align: center; margin: 0px 0px 0px 47px;"><span
        class="f_Textestd" style="color: #000080;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 47px;">

        <table align="center" width="50%" cellspacing="0" cellpadding="0"
        bgcolor="#339966" border="0"
        style="background-color: #339966; border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td><p style="margin: 0px 0px 0px 11px;"><span
                style="font-weight: bold; color: #ff0000;">Attention !
                </span></p>

                <p style="margin: 0px 0px 0px 11px;">The path to the file
                should not contain any space character, and the filename should
                not be written into the instruction !</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; color: #ff0000;"> </span></p>

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
                8.04.039</span></p>
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

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Default texts for
        customer documents:</span> It is now possible to assign default start
        and end texts for customer documents for each customer record.</p>

        <p class="p_Comment">Create the text itself first using menu Tools |
        Preferences, Texts tab, and set the corresponding number into the
        Customer file, section " Predefined texts " of the Relations tab.</p>

        <p class="p_Comment">Those texts are loaded when selecting a customer
        code, and may still be modified through the Texts tab of the order or
        quote.</p>

        <p class="p_Comment"> </p>

        <p style="text-align: center;"><img src="img/clip0084eng.jpg" width="491"
        height="111" border="0" alt="clip0084eng"></p>

        <p class="p_Comment">       </p>

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
                8.04.037</span></p>
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
                style="font-size: 8pt; font-family: 'Tahoma';">Modified
                tables</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Created
                tables</span></p>
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

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Window encoding
        in case of sill:</span> When a first window is encoded including a door
        or window sill, the next windows encoded will automatically retrieve
        this sill by default. This may now be adapted, through a new key into
        <span style="font-style: italic;">settings</span> table .</p>

        <p class="p_Comment"> </p>

        <p><span style="font-weight: bold;">[System]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="142"><span class="f_Winproini">Copie Seuil</span></td>
              <td><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">=
                When set to 0, WinPro does not copy the door or window sill
                from the first design to others.</span></td>
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
              <td width="142"></td>
              <td><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">When
                set to 1, WinPro will copy the sill from the first encoded
                design to others.</span><br>
                <span
                style="font-family: 'Courier New'; font-weight: bold;"> </span></td>
            </tr>
          </tbody>
        </table>
        </div>

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
                8.04.036</span></p>
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

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">WithoutGlazing
        variable within ventilators set up:</span> This variable for
        ventilators (release note 1.3.16) determines when a ventilator is used
        along with a glass unit (0), or without when the ventilator is located
        near enough from a transom to need a glass element (1).</p>

        <p class="p_Comment">An error message assists you for encoding the
        ventilator, and the variable behaviour has been fixed.</p>

        <p class="p_Comment">We consider here GH the remaining glazing height
        between a transom and a ventilator.</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span
                style="font-size: 12pt; font-family: 'Times New Roman';">if
                50mm &gt; GH &gt;= 1, </span><span
                class="f_Variables">WithoutGlazing</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">= 0,
                an error message suggests to close the transom up to the
                ventilator.</span></td>
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
                style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span
                style="font-size: 12pt; font-family: 'Times New Roman';">if GH
                &lt; 1, </span><span
                class="f_Variables">WithoutGlazing</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">= 1,
                no glass unit computed here.</span></td>
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
                style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span
                style="font-size: 12pt; font-family: 'Times New Roman';">if GH
                &lt;= -1, </span><span
                class="f_Variables">WithoutGlazing</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">= 1,
                an error message suggests to move the transom away from the
                ventilator.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 48px;"><span
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Input message for
        glazing bars drawn by formula:</span> A message is now displayed when
        setting a glazing bar frame into a design. This message requets to set
        a number of cells greater or equal to 2 in case of a glazing bar frame
        drawn by formula.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Enhancement for
        creation of the technical database for WinPro/D:</span> The WinPro/D
        database remains now not generated, and a message is displayed, when
        the following cases occur :</p>

        <p class="p_Comment"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>When an exported sash frame is not linked to any fitting
                frame, or when all fitting frames linked to the sash frame are
                checked as "Exclude from WinPro/D".</td>
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
              <td>When an exported system does not contain any outer frame, or
                when all the outer frames from a system are checked for box
                "Exclude from WinPro/D".</td>
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
              <td>When an exported system does not contain any sash frame, or
                when all sash frames from a system are checks "Exclude from
                WinPro/D".</td>
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
              <td>When an exported system does not contain any bead frame, or
                when all bead frames from a system are checked as "Excluded
                from WinPro/D".</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"> </p>

        <p class="p_Comment">This check is done only for system with box
        "Invisible" is left unchecked.</p>

        <p class="p_Comment"> </p>

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
                8.04.027</span></p>
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

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Enhancement for
        articles import feature:</span> When an articles is imported into the
        database from a WPX file, WinPro imports now information related to
        table <span style="font-style: italic;">JnlStock</span>. Stock
        movements history is now kept for articles when the are
        exported/imported.</p>

        <p class="p_Comment">       </p>

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
                8.04.024</span></p>
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

        <p class="p_Comment"> </p>

        <p style="margin: 7px 0px 7px 0px;"><span
        class="f_TitreReleaseNote">New WPREPORT function:</span> The following
        functions are used into WPR documents used for module <span
        class="f_Comment" style="font-weight: bold;">Soprofen Export</span>.</p>

        <p style="margin: 7px 0px 7px 0px;">The <span
        style="font-family: 'Times New Roman'; color: #0000ff;">ExportCaisson
        (</span><span style="color: #0000ff;">Filename: string ; Code :
        string</span><span
        style="font-family: 'Times New Roman'; color: #0000ff;">)</span><span
        style="font-family: 'Times New Roman';"></span> function allows to
        generate a WPX export file from a roller shutter box;</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 47px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">Filename</span> sets here
                the complete name and path of the export file to be generated
                for the roller box.</td>
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
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">Code</span> corresponds to
                the code of a roller box of the database to export into a WPX
                file.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p style="margin: 7px 0px 7px 0px;">The <span
        style="font-family: 'Times New Roman'; color: #0000ff;">ExportTablier
        (</span><span style="color: #0000ff;">Filename: string ; Code :
        string</span><span
        style="font-family: 'Times New Roman'; color: #0000ff;">)</span><span
        style="font-family: 'Times New Roman';"></span> function allows to
        generate a WPX export file from a roller shutter curtain;</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 47px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">Filename</span> sets here
                the complete name and path of the export file to be generated
                for the roller curtain.</td>
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
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">Code</span> corresponds to
                the code of a roller curtain of the database to export into a
                WPX file.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p style="margin: 7px 0px 7px 0px;">The <span
        style="font-family: 'Times New Roman'; color: #0000ff;">ExportCoulisse
        (</span><span style="color: #0000ff;">Filename: string ; Code :
        string</span><span
        style="font-family: 'Times New Roman'; color: #0000ff;">)</span><span
        style="font-family: 'Times New Roman';"></span> function allows to
        generate a WPX export file from a roller shutter guide;</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 47px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">Filename</span> sets here
                the complete name and path of the export file to be generated
                for the roller guide.</td>
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
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">Code</span> corresponds to
                the code of a roller guide of the database to export into a WPX
                file.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p style="margin: 7px 0px 7px 0px;">The <span
        style="font-family: 'Times New Roman'; color: #0000ff;">ExportArticle
        (</span><span style="color: #0000ff;">Filename: string ; Code :
        string</span><span
        style="font-family: 'Times New Roman'; color: #0000ff;">)</span><span
        style="font-family: 'Times New Roman';"></span> allows to generate a
        WPX export file from an article record;</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 47px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">Filename</span> sets here
                the complete name and path of the export file to be generated
                for the article.</td>
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
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">Code</span> corresponds to
                the code of an article of the database to export into a WPX
                file.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p style="margin: 7px 0px 7px 0px;">The <span
        style="font-family: 'Times New Roman'; color: #0000ff;">ImportWPX
        (</span><span style="color: #0000ff;">Filename: string</span><span
        style="font-family: 'Times New Roman'; color: #0000ff;">)</span><span
        style="font-family: 'Times New Roman';"></span> function allows to
        import a WPX file into the database;</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 47px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">Filename</span> sets the
                complete name and path of the WPX file to be imported into the
                database.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">New module
        import/export for SOPROFEN:</span> This new module, based onto WPR
        reports, allows to export or import a data set related to roller
        shutters, in particular roller Box, Curtain, Guide and Article.</p>

        <p class="p_Comment">This module is available through menu Data |
        Soprofen | Importation/Exportation.</p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0087.jpg"
        width="335" height="189" border="0" alt="clip0087"></p>

        <p style="text-align: center;"> </p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Installation:</span></p>

        <p class="p_Comment"><span
        style="text-decoration: underline;"> </span></p>

        <p class="p_Comment">To enable the module, you need a suitable licence
        file, as well as the fiollowing elements:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 47px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td>The Articles codes to be exported should belong to one of the
                supplier codes defined into WinPro.ini file. See below.</td>
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
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td>Codes for roller Boxes, Curtains and Guides should start with
                a prefix "SO-" in order to be displayed into the list of
                elements to export, or to be imported.</td>
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
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td>A <span style="font-weight: bold;">[Soprofen]</span> section
                should be added into WinPro.ini file, with the following
              keys:</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 47px;"> </p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;">[Soprofen]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="188"><span class="f_Winproini">chemin</span></td>
              <td><span class="f_Textestd">= Directory where exported records
                will be stored, and where WinPro will retrieve elements to
                import. Default value « .\Export_Soprofen\ ».</span></td>
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
              <td width="188"><span class="f_Winproini">Count</span></td>
              <td><span class="f_Textestd">= n The </span><span
                class="f_Textestd">&lsquo;</span><span
                class="f_Textestd">n</span><span
                class="f_Textestd">&rsquo;</span> <span
                class="f_Textestd">value corresponds to the number of supplier
                to explore for articles export. Attention, WinPro will create
                by default 2 values (Count&gt;= 2, default value). See
                following keys.</span></td>
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
              <td width="188"><span class="f_Winproini">n</span></td>
              <td><span class="f_Textestd">= As many lines as defined by the
                Count key, corresponding to supplier codes of articles that
                will be exported. WinPro will defaultly create keys
                « 1=SOPROFEN » and « 2=SOPROF</span><span
                class="f_Textestd">&euro;</span><span class="f_Textestd">N »,
                but it is possible to add custom lines with your own supplier
                codes to be exported. Both lines created by WinPro should be
                left as is, for the program to work correctly.</span></td>
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
                style="font-style: italic; font-weight: bold; color: #ff0000; text-decoration: underline;">Attention
                !</span></p>

                <p><span class="f_Textestd" style="font-style: italic;">Those
                keys must be created into WinPro.ini file and not into
                </span><span class="f_Textestd">Settings</span><span
                class="f_Textestd" style="font-style: italic;">table.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 47px;"> </p>

        <p class="p_Comment"><span style="text-decoration: underline;">Sample [Soprofen] section:</span></p>

        <p class="p_Comment"><span
        style="text-decoration: underline;"> </span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="font-family: 'Courier New'; font-weight: bold; color: #000080;">[Soprofen]</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="font-family: 'Courier New'; color: #000080;">chemin=.\ExpSoprof\</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="font-family: 'Courier New'; color: #000080;">count=3</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="font-family: 'Courier New'; color: #000080;">1=SOPROFEN</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="font-family: 'Courier New'; color: #000080;">2=SOPROF€N</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="font-family: 'Courier New'; color: #000080;">3=QUADRA</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="font-family: 'Courier New'; color: #000080;"> </span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="font-family: 'Courier New'; font-style: italic;">This sample sets that files are exported into (or imported from) directory "ExpSoprof" located into the program
		base directory (it will be created if not existing).</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="font-family: 'Courier New'; font-style: italic;">3 suppliers codes will be considered, articles from suppliers "SOPROFEN", "SOPROF?N" and "QUADRA" will be
		imported/exported.</span></p>

        <p class="p_Comment"><span
        style="text-decoration: underline;"> </span></p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Usage:</span></p>

        <p class="p_Comment"><span
        style="text-decoration: underline;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td>Export (menu Données | Soprofen | Export) stage will generate a list of files with WPX format into a subdirectory ("chemin" key).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim40.jpg" width="239"
        height="186" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="text-align: center;"> </p>

        <p class="p_Comment">Export movements are traced into a history file "Export_Soprofen.ini" of this subdirectory. This file is overwritten in case of successive exports
		. It will trace date and time of the last export, as well as the numbers and names of the exported codes.</p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0203.zoom90.jpg"
        width="316" height="388" border="0" alt="clip0203"></p>

        <p style="text-align: center;"> </p>

        <p class="p_Comment">A message warns the user in case of successive exports, if files already exist into the target directory.</p>

        <p class="p_Comment">A complete roller shutter data export (roller Boxes, Curtains, Guides and Articles) may be done using checkbox "Complete export", or a selective
		export when unchecked to obtain only what's necessary.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0105eng.jpg" width="773" height="491" border="0"
        alt="clip0105eng"></p>

        <p class="p_Comment"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td>The import process (menu Data | Soprofen | Import) will also retrieve files to import from the same subdirectory (set by "chemin" key).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"> </p>

        <p class="p_Comment">In case of error, the result is traced into a log file, recorded into directoty "Import_Soprofen_Log\ Import_Soprofen_Log.log" of the base
		directory.</p>

        <p class="p_Comment">A line is created here when one article to be imported does not correspond to a known supplier code, as set into WinPro.ini file.</p>

        <p class="p_Comment"><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Questions from composed glazings:</span> Those questions are now printed onto customer documents (quotation,
		confirmation, ...), similarly to what's existing for composed panels.</p>

        <p class="p_Comment">       </p>

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
                8.04.023</span></p>
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

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">VAT code creation from WinPro and WinPro/D:</span> When creating a VAT rate through menu Tools | VAR rate, an
		error message is now displayed when a VAT line is set with a blank code field.</p>

        <p class="p_Comment"> </p>

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
                8.04.020</span></p>
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

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Glazing pricing::</span> It is now possible to set a negative price for a glass unit.</p>

        <p class="p_Comment"> </p>

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
                8.04.020</span></p>
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

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Compatibility between ventilators and composed glazing:</span> Ventilators are now compliant with composed
		glazings. When a ventilator is used within a composed glazing, the ventilator is now correctly drawn and computed, as well as for DXF cut-throughs.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Addition to EDI for Glassver protocol:</span> The choice for a customer number has been added when printing a
		glass order form with EDI protocol GlassVer.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"> </p>

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
                8.04.018</span></p>
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

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="font-weight: bold; text-decoration: underline;">New markup variables:</span> Two new local variables are available into data set up ; they are designed to alter
		by formula the extra margin defined into the various frames, within the <span class="f_Comment" style="font-weight: bold;">Description</span> tab the most often (Outer
		frame, sash frame, .). Screenshot below shows the <span class="f_Comment"
        style="font-weight: bold;">Description</span> tab of an outer frame record.</p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim41eng.jpg" width="119"
        height="34" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 47px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="142"><span
              class="f_Variables">TechnicalMargin</span></td>
              <td>=  Local variable used to replace the extra margin set into the <span class="f_Comment"
                style="font-weight: bold;">Description</span> tab of the frame, usually (outer frame, sash frame, fittings frame etc).
				It must be initialized into the first Profiles page of the frame imperatively, and will affect all tabs (profiles articles labour...).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -142px; margin: 0px 0px 0px 142px;"><span
        style="text-decoration: underline;">Example :</span></p>

        <p style="text-indent: -142px; margin: 0px 0px 0px 142px;"><span
        style="text-decoration: underline;"> </span></p>

        <p style="text-indent: -142px; margin: 0px 0px 0px 166px;"><img
        src="img/embim42.jpg" width="569" height="227" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p
        style="text-align: center; text-indent: -142px; margin: 0px 0px 0px 142px;"> </p>

        <p style="text-indent: -142px; margin: 0px 0px 0px 189px;">This code, initializing the variable into the first <span class="f_Comment"
        style="font-weight: bold;">Profile</span> page of a Beads frame record, will replace the extra margin field set into the <span
        class="f_Comment" style="font-weight: bold;">Description</span> tab, and will affect all tabs.</p>

        <p class="p_Comment"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 47px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="142"><span
              class="f_Variables">ComponentMargin</span></td>
              <td>=  Local variable used to replace the extra margin set into the <span class="f_Comment" style="font-weight: bold;">Description</span> tab of the frame,
			  usually (outer frame, sash frame, fittings frame etc).
			  It must be set up into the formula of the component that should be marked up, and will not affect any other component, unlike 
			  <span class="f_Variables">TechnicalMargin</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -142px; margin: 0px 0px 0px 142px;"><span
        style="text-decoration: underline;">Example :</span></p>

        <p
        style="text-align: center; text-indent: -142px; margin: 0px 0px 0px 142px;"> </p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim44eng.jpg" width="580" height="219" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 47px;">This code, initializing the variable within an <span class="f_Comment" style="font-weight: bold;">Article</span> page of a Fittings
		frame, will replace the extra margin field set into the <span class="f_Comment" style="font-weight: bold;">Description</span>  page of this frame, marking this article
		up only, others elements are not altered.</p>

        <p style="margin: 0px 0px 0px 47px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.04.017</span></p>
              </td>
              <td valign="bottom" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="text-align: center; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';"> </span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span class="f_TitreReleaseNote"
        style="font-size: 10pt;"> </span></p>

        <p style="margin: 7px 0px 7px 0px;"><span
        class="f_TitreReleaseNote">Details about composed glazing:</span> Many fixes have been released for the composed glazing set up within this version. We also add new
		features that we hope you may appreciate. First of all, a reminder about data set up basis concerning <span style="text-decoration: underline;">composed glazing</span>
		 :</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>The <span class="f_Variables">SupplierId</span> variable is no more exclusively available at the glazing bars set up level. This variable usually returns the
			  glazing supplier ID (useful when using the <span style="font-weight: bold;">Glazings multi-supplier MFV</span> module combined with composed glazing set up).</td>
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
              <td>It is not allowed to consume a composed glazing within a composed panel, or within an existing composed glazing.</td>
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
              <td>When selling price is not calculated through a price grid into the <span style="font-weight: bold;">Price list</span> tab of the sash frame : the composed
			  glazing is valued into a quotation with the content of its <span style="font-weight: bold;">Main suppl.</span>tab, cumulated to each component price.</td>
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
              <td>When selling price is calculated through a price grid into the <span style="font-weight: bold;">Price list</span> tab of the sash frame : the composed glazing
			  is valued into a quotation with the content of its <span style="font-weight: bold;">Price</span> , cumulated to each component price.</td>
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
              <td>The status of boxes Do not use for cost/selling price, as well as the computation mode are relevant for composed glazing pricing (commercial, real cost).</td>
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
              <td>The glass order form is valued with cumulating the content of its <span style="font-weight: bold;">Main suppl.</span> tab along with prices of all components
			  <span style="text-decoration: underline;">not excluded from the cost price</span>.</td>
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
              <td>The glass order form prints the composed description string (the glazing base description will be used as default otherwise).</td>
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
              <td>The composed code and description will be displayed within the <span style="font-weight: bold;">Informations</span> tab of an order or quote (the base code
			  and description of the composed glazing will be used as default otherwise).</td>
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
              <td>The <span style="font-weight: bold;">Price</span> tab of a glass leaf consumed into a composed glazing is not considered by WinPro during composed glazing
			  price computation.</td>
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
              <td>The <span class="f_Variables">TechnicalMarkup</span> variable defined into the 1st formula of the <span style="font-weight: bold;">Glazing</span> tab allows
			  to apply an additional markup to ALL components consumed into the next tabs (eg : <span class="f_Variables">TechnicalMarkup</span> :=  1.1 <span 
			  style="font-style: italic;"> to increase markup of 10%</span>).<span style="background-color: #ffff00;"> This technical markup replaces the additional markup
			  defined into the <span style="font-weight: bold; background-color: #ffff00;">Price</span><span style="background-color: #ffff00;"> tab of the composed glazing,
			  ONLY for components consumed into </span><span style="font-weight: bold; background-color: #ffff00;">Glazing</span><span style="background-color: #ffff00;">,
			  </span><span style="font-weight: bold; background-color: #ffff00;">Profiles</span><span style="background-color: #ffff00;">, </span><span style="font-weight:
			  bold; background-color: #ffff00;">Articles</span><span style="background-color: #ffff00;">, </span><span style="font-weight: bold; background-color: #ffff00;">
			  Labour</span><span style="background-color: #ffff00;">. As a consequence, the content of tabs </span><span style="font-weight: bold; background-color: #ffff00;">
			  Price</span><span style="background-color: #ffff00;"> and </span><span style="font-weight: bold; background-color: #ffff00;">Supplier</span><span 
			  style="background-color: #ffff00;"> is not altered by this variable</span>.</span> This variable is unavailable for single glazings (not composed)</td>
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
              <td>The <span class="f_Variables">ComponentMarkup</span> variable defined into the formula of any component will apply an additional markup coefficient. This
			  mark-up will only affect components where it is defined.</td>
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
              <td>The <span class="f_Variables">TotalThickness</span> variable allows to modify by rule the default total thickness of a composed glazing. (This variable is
			  also used for composed panel set up).</td>
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
              <td>The <span class="f_Variables">IntegrateWindowPrice</span> variable allows the user to decide when the price of a given component has to be part of the wiindow
			  or glazing price detail. The variable is null by default, which means components are part of the glazing price. This feature is important when you print the
			  pricing details onto quotations or confirmations.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="512" bgcolor="#8bab97"
              style="width: 512px; background-color: #8bab97; border: solid 1px #000000;"><p><span
                style="font-weight: bold; text-decoration: underline;">Note:</span></p>

                <p>The <span class="f_Variables">IntegrateWindowPrice</span> variable should never be used into the <span style="font-weight: bold;">Glazing</span>tab. WinPro
				will automatically affect prices of glass leaves to the composed glazing price.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman'; font-weight: bold; text-decoration: underline;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>About code set up of questions for composed glazing, variables <span class="f_Variables">FillingIndex</span> and <span class="f_Variables">SashIndex</span>
			  are not available when the glazing is defined « by default » into the window, through the <span style="font-weight: bold;">Window</span> tab of the order :</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 7px 0px 7px 24px;"><img src="img/embim45eng.jpg" width="298"
        height="221" vspace="1" hspace="1" border="0" alt=""></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>When the composed glazing is input through the <span style="font-weight: bold;">Sash</span> tab of the order, only the 
			  <span class="f_Variables">SashIndex</span> variable will be available for questions code :</td>
            </tr>
          </tbody>
        </table>
        </div>
        <p style="margin: 7px 0px 7px 24px;"><img src="img/embim46eng.jpg" width="307"
        height="88" vspace="1" hspace="1" border="0" alt=""><span
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Finally, when composed glazing is input through the context menu 'Change glass' displayed when right clicking onto a filling from the 
			  <span style="font-weight: bold;">Sash</span> tab of the order, both <span class="f_Variables">FillingIndex</span> and 
			  <span class="f_Variables">SashIndex</span> will be available for questions code :</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim47eng.jpg" width="318"
        height="192" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="text-align: center;"><span class="f_Textestd"
        style="text-decoration: underline;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="text-decoration: underline;">Sample of rule consuming a glass leaf with a 50% mark-up :</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">ShrinkShape (1,
        5)</span><br>
        <span class="f_Textestd" style="color: #000080;">DimA := ShapeDimA
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

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
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
        class="f_Textestd" style="color: #000080;">Orientation :=
        ShapeType [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">FillingShape :=
        TypeForme [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">Quantity := 1</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">ComponentMarkup :=
        1.5</span></p>

        <p style="margin: 0px 0px 0px 45px;"><span
        style="color: #0000ff;"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Price list creation from libraries:</span> Inspiring from all your feedbacks, usefull changes have been done to
		enhance usage of price list creation from libraries :</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 34px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td>Choose now the currency used at the print dialog level.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 34px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td>Price list may be computed now based onto fabrication or masonery dimensions.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 34px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td>Valuation options are now available to include or not the roller shuytter or even glazing price into the computation line.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 34px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td>Choice between paper or file output through ASCII format file, recorded into a new subdirectory labelled Tarifs.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim48.jpg" width="506"
        height="353" vspace="1" hspace="1" border="0" alt=""></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote"> </span></p>

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
                8.04.014</span></p>
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

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Problem fix for EDI protocol Sprimoglass:</span> The write of the glazing location into the EDI file for
		Sprimoglass protocol is now similar to the design location code.</p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="text-decoration: underline;">Before bug fix:</span></p>

        <p style="margin: 0px 0px 0px 47px;">1.1.2                for window 001</p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="text-decoration: underline;">After bug fix:</span></p>

        <p style="margin: 0px 0px 0px 47px;">001.1.2                for window 001</p>

        <p class="p_Comment"><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Polish codepage under WpReport:</span> Characters from Polish codepage may now be displayed using WPReport, with
		the old and the new designer interface.</p>

        <p class="p_Comment">       </p>

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
                8.04.007</span></p>
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

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Validity for false arches colours:</span> When the selected colour of a false arch is not allowed, an error
		message is now displayed for the input user.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Filter onto sash frames list using multi sashes for fitting frame feature:</span> Using this feature (« <span
        class="f_Winproini">Quinc Multi Ouvrant = 1</span> » within <span style="font-weight: bold;">[System]</span> section, refer to release note 8.03) , the sashes list is
		now filtered and only lists sashes belonging to the same system, instead of listing all sashes from all systems.</p>

        <p class="p_Comment">       </p>

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
                8.04.006</span></p>
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
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Window creation into an order:</span> When successively creating designs into an order, WinPro retrieves by
		default RAL colours from the first window of the order, and applies it to the following window by default.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">New feature for stock resetting:</span> You may now reset the stock values for a single stock location at a 
		time.</p>

        <p class="p_Comment">Moreover, when no stock location is detected at WinPro' startup, and when the <span class="f_Comment" style="font-weight: bold;">Stock 
		Management</span> module is enabled, a stock location record is automatically created.</p>

        <p class="p_Comment">       </p>

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
                8.04.000</span></p>
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
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Discounts and fixed price:</span> When a price is fixed for a given design, only the main discounts for the window
		are now available, discounts for glazings or roller shutters are no more displayed.</p>

        <p class="p_Comment">When creating a single roller shutter, discounts for roller shutter will only remains available.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Fitting milling:</span> Due to a bug fix concerning millings from fitting frames and variable sections (outer
		frame, sash frame, ...), a checkbox is now available into the Milling tab of the systeme record.</p>

        <p class="p_Comment">This box labelled "Fitting milling" is automatically checked when creating a new system, it is recommended to leave this box checked for any new
		system.</p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0237eng.jpg"
        width="323" height="134" border="0" alt="clip0237eng"></p>

        <p class="p_Comment">       </p>

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
                8.0.4.x</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: center; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';"> </span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_TitreReleaseNote"> </span></p>


        <p class="p_Comment"><span class="f_TitreReleaseNote">New WPREPORT functions:</span> The <span style="color: #0000ff;">RemoveDir (Path : string) : Boolaen</span>
		<span style="font-family: 'Times New Roman'; color: #0000ff;"></span>function is suitable when you want to remove a specified directory. It returns <span
        class="f_Variables">True</span> in case the operation is correctly done, <span class="f_Variables">False</span> otherwise. The directory must be empty to be deleted.</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Path</span> corresponds to the path of directory to delete.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Example :</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">RemoveDir (</span><span
        style="color: #000080;">&lsquo;</span><span class="f_Textestd"
        style="color: #000080;">c:\doc</span><span
        style="color: #000080;">&rsquo;</span><span class="f_Textestd"
        style="color: #000080;">)</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;"> </span></p>

        <p style="margin: 0px 0px 0px 47px;">This code will delete directory 'c:\doc', if exists an dis empty.</p>

        <p style="margin: 0px 0px 0px 47px;"> </p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">The <span style="color: #0000ff;">BrowseDir (Path : string) : string</span> function allows to browse the content of a specified directory. It
		returns a string with the list of browsed elements.</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Path</span> corresponds to the path of directory to browse.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Example :</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">Var </span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  FileList : string ;</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  FileListTxt : string ;</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">Begin</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  FileList := BrowseDir (</span><span
        style="color: #000080;">&lsquo;</span><span class="f_Textestd"
        style="color: #000080;">c\\doc\\*.*</span><span
        style="color: #000080;">&rsquo;</span><span class="f_Textestd"
        style="color: #000080;">);</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  FileListTxt := BrowseDir (</span><span
        style="color: #000080;">&lsquo;</span><span class="f_Textestd"
        style="color: #000080;">c\\doc\\*.txt</span><span
        style="color: #000080;">&rsquo;</span><span class="f_Textestd"
        style="color: #000080;">);</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">End</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;"> </span></p>

        <p style="margin: 0px 0px 0px 47px;">This code stores into a string variable <span class="f_Textestd" style="color: #000080;">FileList</span> the content of directory
		<span class="f_Textestd">&rsquo;</span><span class="f_Textestd">c </span><span style="color: #000000; text-decoration: underline;">\\doc</span>&rsquo;, whereas the 
		<span class="f_Textestd" style="color: #000080;">FileListTxt</span> variable is set with the list of text files from the same directory.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">The <span style="color: #0000ff;">FileExists (FileName : string) : Boolean</span> function checks if a specified file exists or not. It returns 
		<span class="f_Variables">True</span> when the file exists, <span class="f_Variables">False</span> otherwise.</p>
		
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">FileName</span> corresponds to the name of the file to be checked.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Example :</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">Var </span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  Existfile : Boolean ;</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">Begin</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  Existfile := FileExists (</span><span
        style="color: #000080;">&lsquo;</span><span class="f_Textestd"
        style="color: #000080;">c\\doc\\File.pdf</span><span
        style="color: #000080;">&rsquo;</span><span class="f_Textestd"
        style="color: #000080;">);</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">End</span></p>

        <p class="p_Comment"><span class="f_Textestd"
        style="color: #000080;"> </span></p>

        <p style="margin: 0px 0px 0px 47px;">This code stores into <span class="f_Textestd" style="color: #000080;">ExistFile</span> variable if the file 
		<span class="f_Textestd">&lsquo;</span><span class="f_Textestd">c\\doc\\File.pdf</span><span class="f_Textestd">&rsquo;</span><span class="f_Textestd"
        style="color: #000080;"></span> exists or not.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">The <span style="color: #0000ff;">DeleteFile (FileName : string) : Boolean</span><span 
		style="font-family: 'Times New Roman'; color: #0000ff;"></span> function allows to delete a specified file. It returns 
		<span class="f_Variables">True</span> when the file is correctly deleted, <span class="f_Variables">False</span> otherwise.</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">FileName</span> corresponds to the name of the file to be deleted.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Example :</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">Var </span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  DeletedFile : Boolean ;</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">Begin</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  DeletedFile := DeleteFile (</span><span
        style="color: #000080;">&lsquo;</span><span class="f_Textestd"
        style="color: #000080;">c\\doc\\File.pdf</span><span
        style="color: #000080;">&rsquo;</span><span class="f_Textestd"
        style="color: #000080;">);</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">End</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;"> </span></p>

        <p style="margin: 0px 0px 0px 47px;">This instruction will delete file <span class="f_Textestd">&lsquo;</span><span
        class="f_Textestd">c\\doc\\File.pdf</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd"> and will return the result of the deletion into variable </span><span
        class="f_Textestd" style="color: #000080;">DeletedFile</span>.</p>

        <p style="margin: 0px 0px 0px 47px;"> </p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">The <span
        style="color: #0000ff;">FileLength (FileName : String) :
        Integer</span><span
        style="font-family: 'Times New Roman'; color: #0000ff;"></span> function is designed to return the size of the specified file, into kilo-bytes (KB). It returns an
		integer value corresponding to the file size.</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">FileName</span> corresponds to the name of the file to evaluate.</td>
            </tr>
          </tbody>
        </table>
        </div>

       <p class="p_Comment"><span
        style="text-decoration: underline;"> </span></p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Exemple :</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">Var </span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  FileSize : integer ;</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">Begin</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  FileSize := FileLength (</span><span
        style="color: #000080;">&lsquo;</span><span class="f_Textestd"
        style="color: #000080;">c\\doc\\File.pdf</span><span
        style="color: #000080;">&rsquo;</span><span class="f_Textestd"
        style="color: #000080;">);</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">End</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;"> </span></p>

        <p style="margin: 0px 0px 0px 47px;">This instruction will store into variable <span class="f_Textestd" style="color: #000080;">FileSize</span> the size of file <span
		class="f_Textestd">&rsquo;</span><span class="f_Textestd">c </span><span style="color: #000000; text-decoration: underline;">\\doc</span><span class="f_Textestd">
		\\File.pdf</span><span class="f_Textestd">&rsquo;</span>, into KB.</p>

        <p style="margin: 0px 0px 0px 47px;"> </p>

        <p style="margin: 0px 0px 0px 47px;"> </p>

        <p class="p_Comment">The <span style="color: #0000ff;">CopyFile (SourceFileName : string ; TargetFileName : string) : Boolean</span><span 
		style="font-family: 'Times New Roman'; color: #0000ff;"></span> function is used to copy a source file toward a target file. It returns 
		<span class="f_Variables">True</span> when the copy is correct, <span class="f_Variables">False</span> otherwise. If the target file already exists, it will be
		overwritten without confirmation.</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">SourceFileName</span> corresponds to the source file name  to copy.</td>
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
              <td><span class="f_Textestd"
                style="font-style: italic;">TargetFileName</span> corresponds to the target file name.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="text-decoration: underline;"> </span></p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Example :</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">Var </span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  FileCopied: boolean ;</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">Begin</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  FileCopied := CopyFile (</span><span
        style="color: #000080;">&lsquo;</span><span class="f_Textestd"
        style="color: #000080;">c\\doc\\File.pdf</span><span
        style="color: #000080;">&rsquo;</span><span class="f_Textestd"
        style="color: #000080;">, </span><span
        style="color: #000080;">&lsquo;</span><span class="f_Textestd"
        style="color: #000080;">c\\doc\\File2.pdf</span><span
        style="color: #000080;">&rsquo;</span><span class="f_Textestd"
        style="color: #000080;">);</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">End</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;"> </span></p>

        <p style="margin: 0px 0px 0px 47px;">This code copies file <span
        class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">c </span><span
        style="color: #000000; text-decoration: underline;">\\doc\\File.pdf</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd"></span> toward target file <span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">c </span><span style="color: #000000; text-decoration: underline;">\\doc</span><span
        class="f_Textestd">\\File2.pdf</span><span class="f_Textestd">&rsquo;</span>, and returns the result into variable <span class="f_Textestd"
        style="color: #000080;">FileCopied</span>.</p>
		
        <p style="margin: 0px 0px 0px 47px;"> </p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">The <span style="color: #0000ff;">Execute
        (S : string; T : string; W : boolean)</span><span style="font-family: 'Times New Roman'; color: #0000ff;"></span> function is designed to execute a specified extern
		program from within a WPR report.</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd" style="font-style: italic;">S</span>
                        corresponds to the name and the path of the extern program to execute.</td>
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
              <td><span class="f_Textestd" style="font-style: italic;">T</span>
                        corresponds to optional settings and command line switches for this program.</td>
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
              <td><span class="f_Textestd" style="font-style: italic;">W</span>
                        indicates if the execution is done with minimized dialog (<span class="f_Variables">True</span>) or not (<span class="f_Variables">False</span>).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Example :</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;"> </span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">Var </span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  ProgExecution : string ;</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">Begin</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  ProgExecution :=
        Execute('c:\winpro\winpro.exe', '/WPR', false)</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">End</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;"> </span></p>

        <p style="margin: 0px 0px 0px 47px;">This instruction will start WPR program.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">RAL offcuts for WinPro/D:</span> A new key into <span
        style="font-style: italic;">settings</span> table from WinPro/D activate RAL offcut computation in order to add the RAL offcut value to the order total. Previously, RAL
		offcuts were systematically added to the order total.</p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;"> </span></p>

        <p><span style="font-weight: bold;">[System]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="142"><span class="f_Winproini">Sans Chutes
              Ral</span></td>
              <td><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">=
                 Enables (0, default value) or disables (1) RAL offcut computation onto WinPro/D's quotations.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -142px; margin: 0px 0px 0px 142px;"><span
        style="font-family: 'Courier New'; font-weight: bold;"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Modification into table DetLot:</span><span class="f_Textestd"> When optimizing a customer order containing
		additionnal profiles supplied (</span><span class="f_Textestd" style="font-style: italic;">Profiles</span><span class="f_Textestd"> tab of the order), the </span>
		<span class="f_Textestd" style="font-style: italic;">POSITION</span><span class="f_Textestd"> field will be set to </span><span class="f_Textestd">&lsquo;</span><span
		class="f_Textestd">*</span><span class="f_Textestd">&rsquo;</span><span class="f_Textestd"> for such profiles, as they have no defined side position.</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">New WPREPORT function:</span> The <span style="color: #0000ff;">DxfDrawing (Picture : string ; 
		Code : string ; Type : string ; Width : Integer ; Height : Integer)</span> allows to draw a WinPro DXF drawing into a report;</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 41px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span class="f_Textestd" style="font-style: italic;">Picture 
                </span><span class="f_Textestd"> corresponds to the name of the picture object created into the report</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 41px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span class="f_Textestd" style="font-style: italic;">Code</span><span class="f_Textestd"> corresponds to the code of the DXF</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 41px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span class="f_Textestd" style="font-style: italic;">Type</span><span class="f_Textestd"> corresponds to the type of DXF record. If set to A or a, a DXF
			  matching the code will be searched into the article table, in case of another value the code will be searched into DXF table</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 41px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span class="f_Textestd" style="font-style: italic;">Width</span><span class="f_Textestd"> corresponds to the drawing width into pixels</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 41px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span class="f_Textestd" style="font-style: italic;">Height</span><span class="f_Textestd"> corresponds to the drawing height into pixels</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">If a too great value is input for the picture object, for width and height, the drawing will be limited to the size of
		the picture object defined into the page.</span></p>

        <p class="p_Comment"> </p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="text-decoration: underline;">Examples :</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 45px;"><span class="f_Textestd"
        style="font-weight: bold;">DxfDrawing
        ('Picture1','1130','1',100,180)</span></p>

        <p class="p_Textestd"><span class="f_Textestd">This instruction displays into Picture1 object a Dxf indexed into the Dxf table</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 45px;"><span class="f_Textestd"
        style="font-weight: bold;">DxfDrawing
        ('Picture1','1130','A',100,180)</span></p>

        <p class="p_Textestd"><span class="f_Textestd">This instruction displays into Picture1 object a Dxf indexed into the Dxf table</span></p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Machine driver link with WPR:</span><span class="f_Textestd"> With versions 8.0.4.017 and 8.1.0.8 or earlier, the
		user will have the ability to link a WinPro saw either to a classic DLL machine driver, or a WPR made driver, using section </span><span class="f_Textestd" 
		style="font-weight: bold;">[SAW]</span><span class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="text-decoration: underline;">Syntax:</span><br>
        <span class="f_Textestd">For classic DLL driver links, the syntax remains unchanged.</span><br>
        <span class="f_Textestd">For a WPR machine link, the syntax would be :</span><br>
         </p>

        <p class="p_Comment"><span class="f_Winproini"
        style="color: #000000;">[Saw]</span></p>

        <p style="text-indent: -136px; margin: 0px 0px 0px 136px;"><span
        class="f_Winproini">WINPRO_SAW_NUMBER = REPORT_CODE;REPORT_DIRECTORY;PRINT</span></p>

        <p style="text-indent: -136px; margin: 0px 0px 0px 136px;"><span
        class="f_Winproini">where</span></p>

        <p><span class="f_Winproini">WINPRO_SAW_NUMBER  </span><span
        class="f_Winproini"
        style="font-size: 12pt; font-family: 'Courier New'; font-weight: normal; color: #000000;"> corresponds to the saw number as defined into WinPro.</span></p>

        <p class="p_Comment"><span class="f_Winproini">REPORT_CODE 
        </span><span class="f_Winproini"
        style="font-size: 12pt; font-family: 'Courier New'; font-weight: normal; color: #000000;"> corresponds to the RPT file name of the report used for the link.</span></p>

        <p class="p_Comment"><span class="f_Winproini">REPORT_DIRECTORY 
        </span><span class="f_Winproini"
        style="font-size: 12pt; font-family: 'Courier New'; font-weight: normal; color: #000000;"> corresponds to the path to the RPT file containing the report to use as a
		link. When the report is not existing into the database, it will be automatically imported from this location. When this value is not set, the RPT file will be searched
		into WinPro base directory.</span></p>

        <p class="p_Comment"><span class="f_Winproini">PRINT  </span><span
        class="f_Winproini"
        style="font-size: 12pt; font-family: 'Courier New'; font-weight: normal; color: #000000;"> enables (1) or not (0) the printing of a document associated to the machine
		link. </span><br>
        <span style="font-family: 'Courier New';"> </span></p>

        <p class="p_Comment">WinPro will transfer to the link report the production batch number, usable into queries, through variable 
		<span style="color: #0000ff;">:job</span>, along with the saw number through variable <span style="color: #0000ff;">:saw</span>.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Examples</span></p>

        <p style="margin: 0px 0px 0px 45px;">1 = SAWV1;C:\drivers WPR\;1</p>
		
        <p class="p_Comment">The <span style="font-style: italic;">SAWV1</span> report, located into the directory <span style="font-style: italic;">C:\drivers WPR\</span>,
		will be executed, with a printing of a WPR report.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">When an update is received for the link, simply modify the <span class="f_Comment"
        style="font-weight: bold;">[Saw]</span> section and place the RPT file into the appropriate directory.</p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 45px;">1 = SAWV2;C:\drivers WPR\;1</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;">Customized menus for WPREPORT reports:</span> This feature allows to create your own menu
		entries for customized reports designed with WPR. Those sub-menus will appear below the <span class="f_Comment"
        style="font-weight: bold;">Reports</span> menu. Add the following keys into the settings table:</span></p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;"> </span></p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;">[Reports]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="136"><span class="f_Winproini">Count</span></td>
              <td><span style="font-size: 12pt; font-family: 'Courier New';">=
                       Number of customized reports (number of sub-menu entries, from 1 to 10, integer format I).</span></td>
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
              <td width="134"><span class="f_Winproini">n</span></td>
              <td><span style="font-size: 12pt; font-family: 'Courier New';">=
                       Code of the WPR report number n (character format S).</span></td>
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
              <td width="136"><span
              class="f_Winproini">n:description</span></td>
              <td><span style="font-size: 12pt; font-family: 'Courier New';">=
                       Description of the report number n, as it twill be displayed through the </span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">Reports</span><span
                style="font-size: 12pt; font-family: 'Courier New';"> menu (character format S).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Example :</span></p>

        <p style="margin: 0px 0px 0px 45px;">Count = 1</p>

        <p style="margin: 0px 0px 0px 45px;">1 = ART_DET</p>

        <p style="margin: 0px 0px 0px 45px;">1:description = Filtered article list</p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p style="text-align: center;"><img src="img/embim49eng.jpg" width="226"
        height="142" vspace="1" hspace="1" border="0" alt=""></p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;">WPREPORT under command line:</span> You may run WpReport program using a command line
		instruction, or through a batch file (*.bat). You also may run a report without running WinPro, with the following syntax :</p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p style="margin: 0px 0px 0px 45px;"><span
        style="color: #0000ff;">WinPro /WPR@Username:Password Report_Code</span></p>

        <p class="p_Comment">This instruction runs the WPR Designer. The <span style="color: #0000ff;">Username</span> field corresponds to the WinPro user code (optional). The
		<span style="color: #0000ff;">Password</span> field corresponds to the password associated to the user account. When the account password is not set, or for account
		without password, the standard login dialog will be displayed at start up. The <span style="color: #0000ff;">Report_code</span> field should be set with the code of an
		existing WPR report (optional, the report should be adapted to a stand alone use without settings).</p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 45px;"><span
        style="color: #0000ff;">WinPro /WPRS@Username:Password 
        </span></p>

        <p class="p_Comment">This line runs the <span style="font-style: italic;">Documents type</span> dialog, reached from menu 
		<span class="f_Comment" style="font-weight: bold;">Report | Documents type</span> from WinPro, but without running the program itself. The 
		<span style="color: #0000ff;">User</span> fields corresponds to the WinPro user code (optional). The <span style="color: #0000ff;">password</span> field corresponds 
		to the user accouint password. When the password is not set, or the account has no password, the stanbdard WinPro loigin dialog id displayed, otherwise it is not.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="color: #000000; text-decoration: underline;">Note :</span><span class="f_Textestd"> WinPro/D may also run reports using command lines, or modify the printing
		methods for documents (with sufficient user access rights). It is just needed to replace </span><span style="color: #0000ff;">WinPro</span><span class="f_Textestd">
		with </span><span style="color: #0000ff;">WinProD</span><span class="f_Textestd"> at the line begining. Into all cases, WinPro(/D) is loaded into memory but not
		executed.</span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span
        style="color: #000000; text-decoration: underline;">Examples:</span><span
        class="f_Textestd"></span></p>

        <p style="margin: 0px 0px 0px 45px;"><span
        style="color: #0000ff;">WinProD /WPRS </span></p>

        <p class="p_Comment"><span class="f_Textestd">This runs the configuration menu for printings from WinPro/D.</span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p style="margin: 0px 0px 0px 45px;"><span
        style="color: #0000ff;">WinPro /WPR</span></p>

        <p class="p_Comment"><span class="f_Textestd">This runs WPR designer with the standard WinPro login dialog.</span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p style="margin: 0px 0px 0px 45px;"><span
        style="color: #0000ff;">WinPro /WPR@Administrator:admin</span></p>

        <p class="p_Comment"><span class="f_Textestd">This runs WPR designer for user </span><span class="f_Textestd"
        style="font-style: italic;">Administrator</span><span
        class="f_Textestd">, with password </span><span
        class="f_Textestd" style="font-style: italic;">admin</span><span
        class="f_Textestd">.</span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p style="margin: 0px 0px 0px 45px;"><span
        style="color: #0000ff;">WinPro /WPR@Administrator:admin
        LISTART</span></p>

        <p class="p_Comment"><span class="f_Textestd">This straight </span><span class="f_Textestd" style="font-weight: bold;">runs</span><span class="f_Textestd"> the report
		of code </span><span class="f_Textestd" style="font-style: italic;">LISTART</span><span
        class="f_Textestd">, for the WinPro user account </span><span class="f_Textestd"
        style="font-style: italic;">Administrator</span><span
        class="f_Textestd">, with password </span><span
        class="f_Textestd" style="font-style: italic;">admin</span><span
        class="f_Textestd">.</span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="512" bgcolor="#8bab97"
              style="width: 512px; background-color: #8bab97; border: solid 1px #000000;"><p
                class="p_Comment"><span
                style="font-weight: bold; color: #ff0000;">Attention!</span><span
                style="color: #ff0000;"></span></p>

                <p class="p_Comment"><span style="color: #ff0000;">For the whole command lines, the report code must never contain space characters !</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;">WPREPORT access control:</span> New variables are available for WpReport, allowing the users to
		define easily the access from WPR to the mySQL database. Those variables may be set into the designer, at the query designer level.</p>

        <p class="p_Comment">Two access methods are possible for WPR toward a mySQL database, through ODBC (with appropriate mySQL driver), or through a direct connexion to
		mySQL server.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Connexion through ODBC :</span></p>

        <p style="text-align: center;"><img src="img/embim50eng.jpg" width="347"
        height="158" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="margin: 0px 0px 0px 45px;"><span class="f_Comment"
        style="font-weight: bold;">Type of  connexion </span><span
        style="font-family: 'Times New Roman';"> </span>:        <span
        style="font-family: 'Lucida Sans Unicode';">stODBC</span></p>

        <p style="margin: 0px 0px 0px 45px;"><span class="f_Comment"
        style="font-weight: bold;">DSN ODBC</span><span
        style="font-family: 'Times New Roman';"> </span>:                <span
        style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%DSN%</span></p>

        <p style="margin: 0px 0px 0px 45px;"><span class="f_Comment"
        style="font-weight: bold;">Parameters</span><span
        style="font-family: 'Times New Roman';"> </span>:                2 possibilities :</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 181px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&bull;</span></td>
              <td><span
                style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%AUTOLOGIN%</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: 45px; margin: 0px 0px 0px 91px;">or</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 181px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&bull;</span></td>
              <td><span style="font-style: italic; color: #0000ff;">user
                name</span> = <span
                style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%LOGIN%</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 181px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&bull;</span></td>
              <td><span style="font-style: italic; color: #0000ff;">password
                </span>= <span
                style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%PASSWORD%</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 181px;"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p class="p_Comment">The <span
        style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%DSN%</span> 
		variable is here automatically replaced with the correct mySQL connexion data (server name + schema name). Note that when an ODBC connexion to a mySQL server is
		identified, WPR automatically uses the mySQL driver.</p>

        <p class="p_Comment">The <span
        style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%AUTOLOGIN%</span> 
		variable is replaced with connexion data from the mySQL database, as set at WinPro's login dialog (user name + password for mySQL at the startup). This variable is used
		alone into the settings window.</p>

        <p class="p_Comment">The <span style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%LOGIN%</span> 
		variable is replaced with the mySQL user name used by WinPro at startup. It is also possible to use the 
		<span style="font-style: italic; color: #0000ff;">user name</span> field with a fixed value for the mySQL user granted.</p>

        <p class="p_Comment">The <span style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%PASSWORD%</span> 
		variable is replaced with the mySQL password used by WinPro at startup. It is also possible to use the 
		<span style="font-style: italic; color: #0000ff;">password</span> field with a fixed value 
		(<span class="f_Comment" style="font-weight: bold;">(Note anyway that the password and above user name fields, when set as fixed values, are readable by any WPR user
		granted !)</span><span style="font-family: 'Times New Roman';"> </span>.</p>

        <p class="p_Comment"><span
        style="font-weight: bold; color: #000000; text-decoration: underline;"> </span></p>

        <p class="p_Comment"><span class="f_Textestd">Considering that a direct connexion to mySQL server is always faster than via ODBC, this last method would be less
		efficient.</span></p>

        <p class="p_Comment"><span
        style="font-weight: bold; color: #000000; text-decoration: underline;"> </span></p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Direct connexion to mySQL</span><span
        style="font-family: 'Times New Roman'; text-decoration: underline;"> </span><span
        style="text-decoration: underline;">:</span></p>

        <p style="text-align: center;"><img src="img/embim51eng.jpg" width="352"
        height="155" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="margin: 0px 0px 0px 45px;"><span class="f_Comment"
        style="font-weight: bold;">Type of connection</span><span
        style="font-family: 'Times New Roman';"> </span>:        <span
        style="font-family: 'Lucida Sans Unicode';">stMySQL</span></p>

        <p style="margin: 0px 0px 0px 45px;"><span class="f_Comment"
        style="font-weight: bold;">DSN ODBC</span><span
        style="font-family: 'Times New Roman';"> </span>:                <span
        style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%SERVER%</span><span
        style="font-family: 'Times New Roman'; color: #0000ff;"> </span><span
        style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">:%DB%</span></p>

        <p style="margin: 0px 0px 0px 45px;"><span class="f_Comment"
        style="font-weight: bold;">Parameters</span><span
        style="font-family: 'Times New Roman';"> </span>:                2 possibilities :</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 181px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&bull;</span></td>
              <td><span
                style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%AUTOLOGIN%</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: 45px; margin: 0px 0px 0px 91px;">or</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 181px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&bull;</span></td>
              <td><span style="font-style: italic; color: #0000ff;">user
                name</span> = <span
                style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%LOGIN%</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 181px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&bull;</span></td>
              <td><span style="font-style: italic; color: #0000ff;">password
                </span>= <span
                style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%PASSWORD%</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 181px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&bull;</span></td>
              <td><span style="font-style: italic; color: #0000ff;">port
                </span>= <span
                style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%PORT%</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 181px;"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p class="p_Comment">The <span style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%SERVER%</span> 
		variable is automatically replaced with the mySQL server name defined for WinPro at startup.</p>

        <p class="p_Comment">The <span
        style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%DB%</span> 
		variable is replaced by the mySQL database name defined for WinPro at startup.</p>

        <p class="p_Comment">The <span
        style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%AUTOLOGIN%</span>
        est remplacée par les informations de connection à la base de données
        mySQL, telles que définies au lancement de WinPro (nom
        d&rsquo;utilisateur + mot de passe + port du serveur mySQL dans le
        login de démarrage de WinPro). Cette variable s&rsquo;utilise seule
        dans la fenêtre de paramètres.</p>

        <p class="p_Comment">The <span
        style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%AUTOLOGIN%</span>,
        <span
        style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%LOGIN%</span>,
        <span
        style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%PASSWORD%</span> variables are used as described above.</p>

        <p class="p_Comment">The <span style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%PORT%</span> 
		variable is optionally replaced with the port number of the mySQL server, when different from the default value (port=3306), as defined at WinPro' startup. A fixed
		value may also be set for this setting.</p>

        <p class="p_Comment"><span
        style="font-weight: bold; color: #000000; text-decoration: underline;"> </span></p>

        <p class="p_Comment"><span
        style="color: #000000; text-decoration: underline;">Note :</span><span class="f_Textestd"> Those access methods to the mySQL database are available for a report in use,
		those variables do not allow to preview a query result through the WPR query browser.</span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p><span class="f_TitreReleaseNote">Printing options for price lists from libraries (module):</span> The printing dialog for price lists from libraries for designs and
		roller shutters (menu <span style="font-weight: bold;">Orders | Libraries</span>) has been enhanced with some new features. This dialog is raised with using the Print
		price list button from a library.</p>
        <p> </p>

        <p style="text-align: center;"><img src="img/clip0852.zoom87.jpg"
        width="443" height="308" border="0" alt="clip0852"></p>

        <p> </p>

        <p>The <img src="img/clip0002.zoom92.jpg" width="86" height="23"
        border="0" alt="clip0002"> will create a specific line for the price of the glass units separately. When unchecked, no additional line for glazings price is created.</p>

        <p>The <img src="img/clip0003.zoom95.jpg" width="189" height="23"
        border="0" alt="clip0003"> checkbox will include the price of the glazings into the price line for the window. When unchecked, the price line for the window is computed
		excluding glazings price.</p>

        <p>The <img src="img/clip0004.jpg" width="80" height="18" border="0"
        alt="clip0004"> will create a specific line for the price of the roller shutter separately. When unchecked, no additional line for roller shutter price is created.</p>

        <p>The <img src="img/clip0005.jpg" width="187" height="21" border="0"
        alt="clip0005"> checkbox will include the price of the roller shutter into the price line for the window. When unchecked, the price line for the window is computed
		excluding roller shutter price.</p>

        <p>The <img src="img/clip0006.jpg" width="98" height="20" border="0"
        alt="clip0006"> combo allows the user to select a price margin among the list for this price list computation.</p>

        <p>The <img src="img/clip0007.jpg" width="45" height="16" border="0"
        alt="clip0007"> combo allows the user to select a currency for the price list computation among the list.</p>

        <p>The <img src="img/clip0008.jpg" width="81" height="22" border="0"
        alt="clip0008"> checkbox will raise the standard  Window's dialog for printing.</p>

        <p>The <img src="img/clip0009.jpg" width="69" height="19" border="0"
        alt="clip0009"> checkbox allows to save the price list computation result into a text file. This file may be renamed with a CSV file extension, in order to be opened
		using a dedicated software supporting this format  (MS Excel, OpenOffice suite.). The field separator used into this file is a tabulation TAB.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Enhancement for the Edit settings tool feature:</span> 
		The <span style="font-weight: bold;">Tools | Edit settings</span>feature, used to modify values of sections and keys of settings table straight into the interface, has
		been enhanced.</p>

        <p>You may now create your own keys and sections, using the pop up menu reached with a right click of the mouse into the section list.</p>

        <p>Highlight a section in the list (not a key !), and use the « <span
        style="font-style: italic;">Add section</span> » menu entry to create a new section along with one single key at the same time.</p>

        <p>Highlight a target section, and using the right click pop up menu, create a new key with the «<span style="font-style: italic;"> Add new key</span> » entry into the
		selected section. The use buttons Save and Record to save your changes.</p>

        <p>The utility shows also a description for each key (if exists) into a new pane. Those descriptions may be customized, then you can add, remove or complete a
		description for a chosen key, even into customized languages.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim52eng.jpg" width="477"
        height="473" vspace="1" hspace="1" border="0" alt=""></p>

        <p> </p>

        <p>You may modify the text into the <span
        style="font-style: italic;">Description</span>field, and save the changes using the <span
        style="font-style: italic;">Record</span> , then the <span style="font-style: italic;">Save</span> buttons.</p>

        <p>Some tabs are shown above the description field, leaving the user choose the required language to create/modify/view the key's description.</p>

        <p>Descriptions are stored independentely into separated files for each visible languages (variable length text format), named « sStrings.xxx » files (xxx is the
		language code), into a sub directory <span style="font-weight: bold;">Trad</span> of the base directory.</p>

        <p>Those files are commonly supplied with the program versions into both base languages French and English.</p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">New WPREPORT function:</span><span class="f_Textestd">: The function </span><span
        class="f_Variables">GetWindowsRect(DialogPage : string ; Var x,y : integer) : integer</span><span class="f_Textestd"> returns height (x) and width (y) dimensions of a
		DialogPage object of WPR.</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 47px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">DialogPage </span><span
                class="f_Textestd"> is the name of the DialogPage object created</span></td>
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
              <td><span class="f_Textestd" style="font-style: italic;">x
                </span><span class="f_Textestd"> corresponds to the height value</span></td>
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
              <td><span class="f_Textestd" style="font-style: italic;">y
                </span><span class="f_Textestd"> corresponds to the width value</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; color: #000000; text-decoration: underline;"> </span></p>

        <p style="margin: 0px 0px 0px 45px;"><span
        style="font-style: italic;">Example</span> :</p>

        <p style="margin: 0px 0px 0px 45px;">// A report contains a dialog page object named  'DialogPage1' with a button</p>

        <p style="margin: 0px 0px 0px 45px;">// Clicking the button show a message box with height and width values of the dialog box object</p>

        <p style="margin: 0px 0px 0px 45px;"> </p>

        <p style="margin: 0px 0px 0px 45px;">procedure Button1OnClick(Sender:
        TfrxComponent);</p>

        <p style="margin: 0px 0px 0px 45px;">  var</p>

        <p style="margin: 0px 0px 0px 45px;">  x,y : integer;</p>

        <p style="margin: 0px 0px 0px 45px;">begin</p>

        <p style="margin: 0px 0px 0px 45px;">  <span
        class="f_Variables">GETWINDOWRECT('DialogPage1', x,y);</span></p>

        <p style="margin: 0px 0px 0px 45px;">  showmessage(x);</p>

        <p style="margin: 0px 0px 0px 45px;">  showmessage(y);  </p>

        <p style="margin: 0px 0px 0px 45px;">end;</p>

        <p class="p_Comment"><span
        style="font-size: 8pt; font-family: 'MS Sans Serif';"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Filters on Commercial Region and Commercial Salespoint for WinPro/D:</span><span
        class="f_Textestd"> Two new filters have been added to WinPro/D, allowing a user to filter on lists of orders and lists of customers or prospects during order input.
		The user would only be able to list orders/quotes, or even customers/prospects corresponding to the salespoint and/or region assigned to him.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">To create those elements into WinPro/D datas, 2 new menus have been created,
        </span><span class="f_Textestd" style="font-weight: bold;">Data | Commercial region</span><span class="f_Textestd"> and menu </span>
		<span class="f_Textestd" style="font-weight: bold;">Data | Salesman</span><span class="f_Textestd">, both with a code and a description.</span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim53eng.jpg" width="490"
        height="200" vspace="1" hspace="1" border="0" alt=""></p>

        <p class="p_Comment"><span
        style="font-family: 'Courier New';"> </span></p>

        <p class="p_Comment">At the user set up level, you may select the region and/or sales point to affect to the selected user.</p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim54eng.jpg" width="365"
        height="271" vspace="1" hspace="1" border="0" alt=""></p>

        <p class="p_Comment"><span
        style="font-weight: bold; color: #000000; text-decoration: underline;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Finally, a region and/or sales point may be assigned to a customer record (Relationship tab) or a prospect record (main
		dialog).</span></p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="font-family: 'Courier New'; font-weight: bold; text-decoration: underline;">Filtering rules</span><br>
        <span class="f_Textestd"> </span><br>
        <span class="f_Textestd">For a user with no region or salespoint set, the user would have a full access to the whole job and whole customer file into WinPro/D 
		database.</span><br>
        <span class="f_Textestd"> </span><br>
        <span class="f_Textestd">For a user with a region set but no salespoint, the user would be able to list all orders and all customers/prospects assigned with the same
		region.</span><br>
        <span class="f_Textestd"> </span><br>
        <span class="f_Textestd">Finally, the most « restrictive » filter arises when a region AND a salespoint is set for the WinPro/D user. This user would then only be able
		to list orders and customers from the same region AND with the same salespoint asigned.</span><br>
        <span class="f_Textestd"> </span><br>
        <span class="f_Textestd" style="font-style: italic;">Note : orders are filtered based on the customer or prospect code set into the order itself.</span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">File compression for e-mail attachements using WinPro or WinPro/D:</span><span
        class="f_Textestd"> A compression may be enabled for the export files Winpro(/D) may have to generate.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">This compression may avoid various programs (antivirus or firewal from provider, local mail client, etc.) to alter the
		text structure of the document.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">To use this compression, add the following information into WinPro.ini file (or settings table for version 8, integer
		format I):</span></p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-family: 'Tahoma'; font-weight: bold;">[System]</span></p>

        <p class="p_Comment"><span class="f_Winproini">ZipWpx</span><span
        class="f_Comment" style="font-weight: bold;">       </span><span
        class="f_Comment"
        style="font-size: 12pt; font-family: 'Courier New';">= Compression for files in attachment (0 = no compression by default)</span><span
        style="font-size: 12pt; font-family: 'Courier New';"></span></p>

        <p class="p_Textestd"><span class="f_Winproini"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">New "Glazing dim. Rounding" tab available into the supplier file:</span><span class="f_Textestd"> 
		This tab gives access to a formula for surface calculation of glazing for that supplier. The result will be stored into a new 
		</span><span class="f_Variables">RoundedSurface</span><span class="f_Textestd"> variable. If the variable is not null, WinPro will use it to compute the price of the
		glass unit, otherwise the dimensions computed by the program will be kept.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Changes on WinPro's licence file format:</span><span class="f_Textestd"> WinPro's licence file changes of format
		with this version. From now on, the program will require a </span><span class="f_Variables" style="font-style: italic; font-weight: bold; color: #000080;">WinPro.lc2
		</span><span class="f_Textestd"> file instead of a </span><span class="f_Variables" style="font-style: italic; font-weight: bold; color: #000080;">WinPro.lic</span>
		<span class="f_Textestd"> file !</span><br>
        <span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Installation of WinPro/D Foxpro:</span><span class="f_Textestd"> From this version of WinPro/D, it will be
		necessary to install the program using sufficient administrative privileges for Windows.</span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span class="f_Textestd">If you use a Windows administrator account to install WinPro/D Foxpro onto the target machine, you are not concerned by
		the following information.</span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span class="f_Textestd">Otherwise, an error message is now displayed in case you are not logged as Administrator when installing WinPro/D
		.</span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim55eng.jpg" width="396"
        height="138" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="text-align: center;"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">If you meet this dialog when running WinPro/D, you haven't got enough installation privileges onto the machine !
		</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">In order to avoid such troubles when deploying, whatever the system is (XP, Vista or Seven.), proceed as 
		follows :</span></p>

        <p class="p_Comment"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 54px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">1.</span></td>
              <td><span class="f_Textestd">Use an Administrator level account for Windows. Please contact your computer supplier if you haven't got those logon settings,
			  otherwise installation is impossible.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 54px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">2.</span></td>
              <td><span class="f_Textestd">Install the package « Microsoft Visual C++ redistribuable » onto the machine. This package is supplied with any version of WinPro,
			  and is named « vcredist.exe ». It is better to install the version supplied by Quadrature. The installation of this Microsoft package also requires administrative
			  privileges onto the machine.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 54px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">3.</span></td>
              <td><span class="f_Textestd">Install the </span><span class="f_Textestd" style="font-style: italic;">Sentinel</span><span class="f_Textestd"> dongle driver if
			  required. It is available onto the base directory of our FTP server.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 54px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">4.</span></td>
              <td><span class="f_Textestd">WinPro/D may be launched at this stage. Nevertheless if you meet the below error dialog</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p style="margin: 0px 0px 0px 23px;"><img src="img/embim56.jpg" width="379"
        height="171" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="text-align: center; margin: 0px 0px 0px 47px;"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 72px;"><span
        class="f_Textestd">it will then be necessary to install the ODBC FoxPro VFP driver onto the machine, still using administrative privileges for Windows.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 72px;"><span
        class="f_Textestd">Indeed, some printings have been redesigned under WPReport module for WinPro/D, the ODBC FoxPro driver is then necessary to be able to print those
		.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 72px;"><span
        class="f_Textestd">You may easily find this driver onto our FTP server, or at url <a
        href="http://msdn.microsoft.com/en-us/vfoxpro/bb190233.aspx "
        target="_blank"
        class="weblink">http://msdn.microsoft.com/en-us/vfoxpro/bb190233.aspx.</a></span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 72px;"><span
        class="f_Textestd">Some listing documents may be impossible to print without this driver installed onto the system.</span></p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Points 1, 2 and 3 are concerning WinPro as well as WinPro/D, using FoxPro or mySQL database format. However, point 4 only
		concerns users of the WinPro or WinPro/D programs using a FoxPro database</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-weight: bold;">We insist on the fact that if you install WinPro/D (or WinPro) using sufficient administrative privileges onto the target machine, and when
		all needed components supplied are correctly located into the installation directory, all those processes are done automatically !</span></p>

        <p class="p_Textestd"><span class="f_Winproini"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Colour management using false arches:</span><span class="f_Textestd"> False arches listed for the user during
		order input are now filtered onto appropriate settings, instead of simply showing an error message when validating. A false arch must fit the following requirements to
		be used in a given design:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 54px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-.</span></td>
              <td><span class="f_Textestd">The window system must have been allowed into the list of systems of the false arch set up.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 54px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-.</span></td>
              <td><span class="f_Textestd">The false arch must be created  with a line of valuation setting the colour used for the window.</span></td>
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
              <td width="45"><p style="margin: 0px 0px 0px 11px;"><span
                style="font-weight: bold; color: #000000;">or</span></td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 54px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-.</span></td>
              <td><span class="f_Textestd">The false arch must be created with a line of valuation setting no colour code into the corresponding field.</span></td>
            </tr>
          </tbody>
        </table>
        </div>
		
		<p class="p_Comment"><span class="f_Comment"
        style="font-weight: bold;"> </span></p>
		
        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim55b.jpg" width="328"
        height="333" vspace="1" hspace="1" border="0" alt=""></p>
		
		<p class="p_Comment"><span class="f_Comment"
        style="font-weight: bold;"> </span></p>

        <p class="p_Textestd">The above false arch will be listed for the BOIS VARIABLE system only, when a design with ACAJOU colour is created (valued line with colour code),
		and also when a design of any colour of the system is created (valued line without colour code).</span></p>

		<p class="p_Comment"><span class="f_Comment"
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
      <td align="left"><p class="p_Comment"><span class="f_Winproini"
        style="font-size: 8pt;">* Incompatible version 7.2, sauf si
        précisé</span></p>

        <p style="text-align: center;"><span class="f_Comment"
        style="font-size: 8pt;"> </span></p>

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
                8.04.043</span></p>
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

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Correction sur
        l</span><span class="f_TitreReleaseNote">&rsquo;</span><span
        class="f_TitreReleaseNote">EDI Glassver:</span> WinPro supprime
        maintenant le fichier EDI généré lors de la commande vitrage lorsque
        celui ci ne contient pas de vitrage.</p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">WinPro/D et
        quincaillerie multi-ouvrants:</span> Lors de l'importation de la base
        de données devis dans WinPro/D, si le programme détecte clé <span
        class="f_Textestd">«</span><span class="f_Winproini"> Quinc Multi
        Ouvrant = 0</span> <span class="f_Textestd">» (quincaillerie
        multi-ouvrants désactivée, voir <a href="8_0_3_x.php">note de version
        8.03</a>), et que la table </span><span
        style="font-style: italic;">CorCmp </span>contient des enregistrements
        multiples d&rsquo;ouvrants pour une même quincaillerie, WinPro/D
        forcera la clef à 1.</p>

        <p class="p_Comment">Ce test est effectué à l&rsquo;import du data.pak
        ainsi qu&rsquo;au lancement du programme.</p>

        <p class="p_Comment" style="text-align: center;"> </p>

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
                8.04.041</span></p>
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

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Import des
        données WinPro/D en ligne de commande:</span> Il est à présent possible
        d&rsquo;importer les données fabricant dans WinPro/D (fichier data.pak)
        automatiquement en ligne de commande.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Exemples :</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">WinProD.exe /import
        chemin_vers_le_data.pak_sans_le_nom_de_fichier </span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">ou</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">D:\Program Files\WinproD\winprod.exe /import
        .\</span></p>

        <p style="text-align: center; margin: 0px 0px 0px 47px;"><span
        class="f_Textestd" style="color: #000080;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 47px;">

        <table align="center" width="50%" cellspacing="0" cellpadding="0"
        bgcolor="#339966" border="0"
        style="background-color: #339966; border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td><p style="margin: 0px 0px 0px 11px;"><span
                style="font-weight: bold; color: #ff0000;">Attention !
                </span></p>

                <p style="margin: 0px 0px 0px 11px;">Le chemin d&rsquo;accès au
                fichier ne doit pas contenir d&rsquo;espaces, et le nom de
                fichier ne doit pas être précisé !</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; color: #ff0000;"> </span></p>

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
                8.04.039</span></p>
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

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Textes par défaut
        pour documents client:</span> Il est maintenant possible de définir
        dans WinPro des textes pour documents client par défaut pour chaque
        client. </p>

        <p class="p_Comment">Renseignez le numéro du texte enregistré dans le
        menu Utilitaires | Préférences onglet Textes, dans la fiche Client,
        section “ Textes prédéfinis “ de l&rsquo;onglet Relations.</p>

        <p class="p_Comment">Ces textes sont chargés lorsqu'on sélectionne un
        client, et restent modifiables depuis l&rsquo;onglet Textes de la
        commande.</p>

        <p class="p_Comment"> </p>

        <p style="text-align: center;"><img src="img/clip0084.zoom93.jpg"
        width="462" height="103" border="0" alt="clip0084"></p>

        <p class="p_Comment">       </p>

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
                8.04.037</span></p>
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

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Saisie de châssis
        avec seuil:</span> Lorsque l'on saisit un premier repère avec un seuil
        de porte ou de châssis, les prochains repères saisis reprendront ce
        seuil de porte par défaut. Une nouvelle clef dans la table <span
        style="font-style: italic;">settings </span>permet à présent de
        contrôler ce comportement.</p>

        <p class="p_Comment"> </p>

        <p><span style="font-weight: bold;">[System]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="142"><span class="f_Winproini">Copie Seuil</span></td>
              <td><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">=
                Lorsqu</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">&rsquo;</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">elle
                vaut 0, WinPro ne copie plus le seuil de porte ou de châssis
                pour les prochains repères.</span></td>
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
              <td width="142"></td>
              <td><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">Lorsqu</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">&rsquo;</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">elle
                vaut 1, WinPro copie le seuil de porte ou de châssis pour les
                prochains repères.</span><br>
                <span
                style="font-family: 'Courier New'; font-weight: bold;"> </span></td>
            </tr>
          </tbody>
        </table>
        </div>

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
                8.04.036</span></p>
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

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Variable
        SansVitrage dans les aérateurs:</span> Cette variable dans les
        aérateurs (note de version 1.3.16) permet de déterminer si un aérateur
        est utilisé avec un vitrage (valeur 0), ou si l&rsquo;aérateur est
        placé suffisamment prêt d&rsquo;une traverse pour qu&rsquo;il n&rsquo;y
        ait pas de vitrage (valeur 1).</p>

        <p class="p_Comment">Un message d&rsquo;erreur vous assiste à présent à
        la saisie, et le comportement de la variable a été revu.</p>

        <p class="p_Comment">Soit HV la hauteur du vitrage restant entre un
        aérateur et une traverse.</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span
                style="font-size: 12pt; font-family: 'Times New Roman';">si
                50mm &gt; HV &gt;= 1, </span><span
                class="f_Variables">SansVitrage</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">= 0,
                un message d'erreur invite à rapprocher la traverse de
                l'aérateur.</span></td>
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
                style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span
                style="font-size: 12pt; font-family: 'Times New Roman';">si HV
                &lt; 1, </span><span
                class="f_Variables">SansVitrage</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">= 1,
                aucun vitrage ne sera consommé.</span></td>
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
                style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span
                style="font-size: 12pt; font-family: 'Times New Roman';">si HV
                &lt;= -1, </span><span
                class="f_Variables">SansVitrage</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">= 1,
                une message d'erreur invite à écarter la traverse de
                l'aérateur.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 48px;"><span
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Saisie de
        croisillons dessinés par formule:</span> Un message est maintenant
        généré au niveau de la saisie des croisillons. Ce message demande de
        sélectionner un nombre d'alvéoles supérieur ou égal à 2 dans le cas
        d'un croisillon dessiné par formule.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Amélioration de
        la génération de la base devis WinPro/D:</span> La base de données
        devis n'est pas générée, avec un message explicatif, dans les cas
        suivants : </p>

        <p class="p_Comment"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Lorsq'un ouvrant exporté n'est lié à aucune quincaillerie, ou
                que toutes les quicailleries liées à l'ouvrant sont cochée
                “Exclure de WinPro/D”.</td>
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
              <td>Lorsqu'un système exporté ne possède pas de dormant dans cet
                export, ou que tous les dormants sont cochés “Exclure de
                WinPro/D”.</td>
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
              <td>Lorsqu'un système exporté ne possède pas d'ouvrant dans cet
                export, ou que tous les ouvrants sont cochés “Exclure de
                WinPro/D”.</td>
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
              <td>Lorsqu'un système exporté ne possède pas de pareclose dans
                cet export, ou que toutes les parecloses sont cochées “Exclure
                de WinPro/D”.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"> </p>

        <p class="p_Comment">Cette vérification n'est faites que sur les
        systèmes dont la case "Invisible" est décochée.</p>

        <p class="p_Comment"> </p>

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
                8.04.027</span></p>
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

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Amélioration des
        importations d</span><span
        class="f_TitreReleaseNote">&rsquo;</span><span
        class="f_TitreReleaseNote">articles:</span> Lorsqu&rsquo;un article est
        importé dans la base de données à partir d&rsquo;un fichier
        d&rsquo;export WPX, WinPro importera également les informations liées à
        la table <span style="font-style: italic;">JnlStock</span>.
        L&rsquo;historique des mouvements de stock est donc à présent
        conservé.</p>

        <p class="p_Comment">       </p>

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
                8.04.024</span></p>
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

        <p class="p_Comment"> </p>

        <p style="margin: 7px 0px 7px 0px;"><span
        class="f_TitreReleaseNote">Nouvelles fonctions WPREPORT:</span> Les
        fonctions suivantes sont utilisées dans les documents WPR utilisés pour
        le module <span class="f_Comment" style="font-weight: bold;">Export
        Soprofen</span>.</p>

        <p style="margin: 7px 0px 7px 0px;">La fonction <span
        style="font-family: 'Times New Roman'; color: #0000ff;">ExportCaisson
        (</span><span style="color: #0000ff;">Filename: chaine ; Code :
        chaine</span><span
        style="font-family: 'Times New Roman'; color: #0000ff;">)</span><span
        style="font-family: 'Times New Roman';"></span> permet de générer un
        fichier d&rsquo;export WPX d&rsquo;un caisson;</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 47px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">Filename </span> préciser
                le chemin complet et le nom du fichier WPX pour le caisson dans
                ce champ.</td>
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
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">Code </span>correspond au
                code du caisson à exporter dans la base de données.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p style="margin: 7px 0px 7px 0px;">La fonction <span
        style="font-family: 'Times New Roman'; color: #0000ff;">ExportTablier
        (</span><span style="color: #0000ff;">Filename: chaine ; Code :
        chaine</span><span
        style="font-family: 'Times New Roman'; color: #0000ff;">)</span><span
        style="font-family: 'Times New Roman';"></span> permet de générer un
        fichier d&rsquo;export WPX d&rsquo;un tablier;</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 47px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">Filename </span> préciser
                le chemin complet et le nom du fichier WPX pour le tablier dans
                ce champ.</td>
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
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">Code </span>correspond au
                code du tablier à exporter dans la base de données.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p style="margin: 7px 0px 7px 0px;">La fonction <span
        style="font-family: 'Times New Roman'; color: #0000ff;">ExportCoulisse
        (</span><span style="color: #0000ff;">Filename: chaine ; Code :
        chaine</span><span
        style="font-family: 'Times New Roman'; color: #0000ff;">)</span><span
        style="font-family: 'Times New Roman';"></span> permet de générer un
        fichier d&rsquo;export WPX d&rsquo;une coulisse;</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 47px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">Filename </span> préciser
                le chemin complet et le nom du fichier WPX pour la coulisse
                dans ce champ.</td>
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
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">Code </span>correspond au
                code de la coulisse à exporter dans la base de données.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p style="margin: 7px 0px 7px 0px;">La fonction <span
        style="font-family: 'Times New Roman'; color: #0000ff;">ExportArticle
        (</span><span style="color: #0000ff;">Filename: chaine ; Code :
        chaine</span><span
        style="font-family: 'Times New Roman'; color: #0000ff;">)</span><span
        style="font-family: 'Times New Roman';"></span> permet de générer un
        fichier d&rsquo;export WPX d&rsquo;un article;</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 47px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">Filename </span> préciser
                le chemin complet et le nom du fichier WPX pour l&rsquo;article
                dans ce champ.</td>
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
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">Code </span>correspond au
                code de l&rsquo;article à exporter dans la base de données.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p style="margin: 7px 0px 7px 0px;">La fonction <span
        style="font-family: 'Times New Roman'; color: #0000ff;">ImportWPX
        (</span><span style="color: #0000ff;">Filename: chaine</span><span
        style="font-family: 'Times New Roman'; color: #0000ff;">)</span><span
        style="font-family: 'Times New Roman';"></span> permet d&rsquo;importer
        un fichier WPX dans la base de données;</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 47px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">Filename </span> préciser
                le chemin complet et le nom du fichier WPX à importer dans la
                base de données.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Nouveau module
        import/export SOPROFEN:</span> Ce nouveau module, basé sur des rapports
        WPR, permet d&rsquo;exporter ou d&rsquo;importer des données liées aux
        volets roulants, notamment les fiches Caisson, Tablier, Coulisse et
        Articles.</p>

        <p class="p_Comment">Ce module est accessible via le menu Donnée |
        Soprofen | Importation/Exportation.</p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0087.jpg"
        width="335" height="189" border="0" alt="clip0087"></p>

        <p style="text-align: center;"> </p>

        <p class="p_Comment"><span style="text-decoration: underline;">Mise en
        place:</span></p>

        <p class="p_Comment"><span
        style="text-decoration: underline;"> </span></p>

        <p class="p_Comment">Pour activer ce module, il vous faudra une licence
        adaptée, ainsi que les éléments suivants:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 47px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td>Les codes Articles à exporter devront appartenir à l&rsquo;un
                des codes fournisseurs définis en paramètre dans WinPro.ini.
                Voir plus bas.</td>
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
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td>Les codes de Caisson, Tabliers et Coulisses devront commencer
                par le préfixe “SO-“ pour apparaitre dans la liste des éléments
                à exporter, ou pour pouvoir être importés.</td>
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
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td>Une section <span style="font-weight: bold;">[Soprofen]</span> 
                devra être ajoutée dans le fichier WinPro.ini, avec les clefs
                suivantes:</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 47px;"> </p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;">[Soprofen]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="188"><span class="f_Winproini">chemin</span></td>
              <td><span class="f_Textestd">= Répertoire dans lequel seront
                stockés les éléments exportés, et où WinPro ira chercher les
                éléments à importer. Valeur par défaut
                « .\Export_Soprofen\ ».</span></td>
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
              <td width="188"><span class="f_Winproini">Count</span></td>
              <td><span class="f_Textestd">= n   La valeur </span><span
                class="f_Textestd">&lsquo;</span><span
                class="f_Textestd">n</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">correspond au nombre de fournisseurs à
                scruter pour les exports d</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">articles. Attention, par défaut WinPro
                créera au minimum 2 valeurs imposées (Count&gt;= 2, valeur par
                défaut). Voir les clefs suivantes.</span></td>
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
              <td width="188"><span class="f_Winproini">n</span></td>
              <td><span class="f_Textestd">= Autant de ligne que défini dans la
                clef Count, correspondant à autant de code fournisseur pour
                lesquels les articles seront exportés. Par défaut, WinPro
                créera les clefs « 1=SOPROFEN » et « 2=SOPROF€N », mais il est
                possible de créer des lignes personnalisées avec les codes
                fournisseurs que l</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">on
                souhaite inclure dans l</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">export ou l</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">import. Il faut par contre laisser ces 2
                lignes par défaut, indispensables au fonctionnement du
                module.</span></td>
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
                style="font-style: italic; font-weight: bold; color: #ff0000; text-decoration: underline;">Attention
                !</span></p>

                <p><span class="f_Textestd" style="font-style: italic;">Ces
                clefs doivent être créées dans le fichier WinPro.ini et non
                dans la table </span><span
                class="f_Textestd">Settings.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 47px;"> </p>

        <p class="p_Comment"><span style="text-decoration: underline;">Exemple
        de section [Soprofen]:</span></p>

        <p class="p_Comment"><span
        style="text-decoration: underline;"> </span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="font-family: 'Courier New'; font-weight: bold; color: #000080;">[Soprofen]</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="font-family: 'Courier New'; color: #000080;">chemin=.\ExpSoprof\</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="font-family: 'Courier New'; color: #000080;">count=3</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="font-family: 'Courier New'; color: #000080;">1=SOPROFEN</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="font-family: 'Courier New'; color: #000080;">2=SOPROF€N</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="font-family: 'Courier New'; color: #000080;">3=QUADRA</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="font-family: 'Courier New'; color: #000080;"> </span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="font-family: 'Courier New'; font-style: italic;">Dans cet
        exemple, les fichiers seront exportés dans (ou importés depuis) le
        dossier “ExpSoprof” situé dans le répertoire de base de WinPro (il sera
        créé s</span><span
        style="font-family: 'Courier New'; font-style: italic;">&rsquo;</span><span
        style="font-family: 'Courier New'; font-style: italic;">il
        n</span><span
        style="font-family: 'Courier New'; font-style: italic;">&rsquo;</span><span
        style="font-family: 'Courier New'; font-style: italic;">existe
        pas).</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="font-family: 'Courier New'; font-style: italic;">3 codes
        fournisseurs seront scrutés, les articles des fournisseurs de code
        “SOPROFEN”, “SOPROF€N” et “QUADRA” seront exportés/importés.</span></p>

        <p class="p_Comment"><span
        style="text-decoration: underline;"> </span></p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Utilisation:</span></p>

        <p class="p_Comment"><span
        style="text-decoration: underline;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td>L&rsquo;exportation (menu Données | Soprofen | Exportation)
                génerera une liste de fichiers d&rsquo;exports au format WPX,
                qui seront stockés dans un sous répertoire (clef “chemin”).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim40.jpg" width="239"
        height="186" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="text-align: center;"> </p>

        <p class="p_Comment">Les exports sont tracés dans un fichier
        “Export_Soprofen.ini” de ce sous répertoire. Ce fichier est écrasé au
        fil des exportations. Il contiendra la date et heure du dernier export,
        ainsi que la liste des fiches exportées.</p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0203.zoom90.jpg"
        width="316" height="388" border="0" alt="clip0203"></p>

        <p style="text-align: center;"> </p>

        <p class="p_Comment">Un message avertira l&rsquo;utilisateur en cas
        d&rsquo;export successifs, si des fichiers existent déjà dans le
        répertoire cible.</p>

        <p class="p_Comment">Vous pourrez procéder à un export complet des
        données de volet (Caisson, Tablier, Coulisse et Articles) lorsque la
        case “Export complet” est cochée, ou bien faire un export sélectif des
        éléments nécessaires lorsqu&rsquo;elle est décochée.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0105.zoom79.jpg" width="844" height="531" border="0"
        alt="clip0105"></p>

        <p class="p_Comment"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td>L&rsquo;importation (menu Données | Soprofen | Importation)
                ira quant à elle rechercher dans ce même sous répertoire
                (défini par la clef “chemin”) les fichiers à importer
                (l&rsquo;arborescence de répertoire doit être respectée).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"> </p>

        <p class="p_Comment">En cas d&rsquo;erreur, le résultat de
        l&rsquo;importation est tracé dans un fichier journal, enregistré dans
        le dossier “Import_Soprofen_Log\ Import_Soprofen_Log.log“ du répertoire
        de base.</p>

        <p class="p_Comment">Une ligne sera créée dans ce fichier lorsque
        l&rsquo;un des articles à importer ne correspondra pas à l&rsquo;un des
        codes fournisseurs renseignés dans WinPro.ini.</p>

        <p class="p_Comment"><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Questions de
        vitrages composés:</span> Ces questions sont maintenant imprimées sur
        les documents clients (devis, confirmation, ...), de manière similaire
        à ce qui existe pour les panneaux fabriqués.</p>

        <p class="p_Comment">       </p>

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
                8.04.023</span></p>
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

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Création des taux
        de TVA dans WinPro et WinPro/D:</span> Lors de l&rsquo;encodage des
        taux de TVA via le menu Utilitaire | Taux TVA, un message
        d&rsquo;erreur est maintenant affiché s&rsquo;il subsiste un ou
        plusieurs taux de TVA sans code renseigné.</p>

        <p class="p_Comment"> </p>

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
                8.04.020</span></p>
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

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Prix des
        vitrages:</span> Il est désormais possible de mettre un prix négatif
        dans les vitrages.</p>

        <p class="p_Comment"> </p>

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
                8.04.020</span></p>
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

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Compatibilité
        aérateur et vitrage composé:</span> Les aérateurs sont dorénavant
        compatibles avec les vitrages composés. Si un aérateur est utilisé dans
        un vitrage composé, l&rsquo;aérateur sera correctement dessiné et
        consommé, y compris pour les coupes en DXF.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Complément dans
        l</span><span class="f_TitreReleaseNote">&rsquo;</span><span
        class="f_TitreReleaseNote">EDI Glassver:</span> Le choix du numéro de
        client a été ajouté lorsque l&rsquo;on passe une commande vitrage avec
        le protocole EDI Glassver.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"> </p>

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
                8.04.018</span></p>
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

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="font-weight: bold; text-decoration: underline;">Nouvelles
        variables de marge :</span> Deux nouvelles variables locales sont mises
        à disposition dans le paramétrage, afin de vous permettre de faire
        varier les marges affectées aux différents cadres, dans l&rsquo;onglet
        <span class="f_Comment" style="font-weight: bold;">Description
        </span>le plus souvent (Dormant, ouvrant, …). Voir la capture
        ci-dessous, pour la page <span class="f_Comment"
        style="font-weight: bold;">Description </span>d&rsquo;une fiche
        Dormant.</p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim41.jpg" width="166"
        height="43" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 47px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="142"><span
              class="f_Variables">MargeTechnique</span></td>
              <td>=  Variable locale s'utilisant en remplacement de la marge
                supplémentaire située dans l'onglet <span class="f_Comment"
                style="font-weight: bold;">Description </span>du cadre le plus
                souvent (dormant ouvrant quincaillerie etc).<br>
                Elle doit être paramétrée dans la première page Profil du cadre
                impérativement, et affectera tous les onglets (profils articles
                MO...).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -142px; margin: 0px 0px 0px 142px;"><span
        style="text-decoration: underline;">Exemple :</span></p>

        <p style="text-indent: -142px; margin: 0px 0px 0px 142px;"><span
        style="text-decoration: underline;"> </span></p>

        <p style="text-indent: -142px; margin: 0px 0px 0px 166px;"><img
        src="img/embim42.jpg" width="533" height="232" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p
        style="text-align: center; text-indent: -142px; margin: 0px 0px 0px 142px;"> </p>

        <p style="text-indent: -142px; margin: 0px 0px 0px 189px;">Cette
        variable, initialisée dans la première page <span class="f_Comment"
        style="font-weight: bold;">Profil </span>d&rsquo;une fiche de Parclose,
        viendra </p>

        <p style="text-indent: -142px; margin: 0px 0px 0px 189px;">remplacer le
        <img src="img/embim43.jpg" width="144" height="20" vspace="1" hspace="1"
        border="0" alt=""> renseigné dans l&rsquo;onglet <span
        class="f_Comment" style="font-weight: bold;">Description</span>, et
        s&rsquo;appliquera à </p>

        <p style="text-indent: -142px; margin: 0px 0px 0px 189px;">tous les
        onglets.</p>

        <p class="p_Comment"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 47px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="142"><span
              class="f_Variables">MargeComposant</span></td>
              <td>=  Variable locale s'utilisant en remplacement de la marge
                supplémentaire située dans l'onglet <span class="f_Comment"
                style="font-weight: bold;">Description </span>du cadre le plus
                souvent (dormant ouvrant quincaillerie etc).<br>
                Elle doit être paramétrée dans la formule du composant
                qu&rsquo;elle doit affecter, et n&rsquo;affectera pas les
                autres composants, contrairement à <span
                class="f_Variables">MargeTechnique</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -142px; margin: 0px 0px 0px 142px;"><span
        style="text-decoration: underline;">Exemple :</span></p>

        <p
        style="text-align: center; text-indent: -142px; margin: 0px 0px 0px 142px;"> </p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim44.jpg" width="624" height="257" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 47px;">Cette variable, initialisée dans
        la formule d&rsquo;un composant de la page <span class="f_Comment"
        style="font-weight: bold;">Article</span> d&rsquo;une fiche
        Quincaillerie, viendra remplacer le coefficient de marge renseigné dans
        l&rsquo;onglet <span class="f_Comment"
        style="font-weight: bold;">Description </span>de cette Quincaillerie,
        pour cet article seulement, les autres éléments de la quincaillerie ne
        sont pas affectés.</p>

        <p style="margin: 0px 0px 0px 47px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.04.017</span></p>
              </td>
              <td valign="bottom" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="text-align: center; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';"> </span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span class="f_TitreReleaseNote"
        style="font-size: 10pt;"> </span></p>

        <p style="margin: 7px 0px 7px 0px;"><span
        class="f_TitreReleaseNote">Compléments sur les vitrages composés:
        </span>De nombreux correctifs au niveau des vitrages composés ont été
        effectués dans cette version. Nous avons également ajouté de nouvelles
        fonctionnalités qui seront sans aucun doute appréciées. Tout
        d&rsquo;abords, un rappel des quelques principes de base du paramétrage
        de <span style="text-decoration: underline;">vitrage
        composé</span> :</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>La variable <span class="f_Variables">idFournisseur</span>
                n&rsquo;est plus exclusivement disponible dans le paramétrage
                des croisillons. Pour rappel, cette variable renvoie le n° du
                fournisseur vitrage (utile lorsque l&rsquo;on combine le module
                <span style="font-weight: bold;">Multi-Fourn Vitrage MFV</span>
                avec un paramétrage de vitrages composés).</td>
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
              <td>Il n&rsquo;est pas autorisé de consommer un vitrage composé
                dans le paramétrage d&rsquo;un panneau fabriqué, ou dans le
                paramétrage d&rsquo;un autre vitrage composé. </td>
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
              <td>S&rsquo;il n&rsquo;y a pas de grille de prix vitrage utilisée
                pour le PV au niveau de l&rsquo;onglet <span
                style="font-weight: bold;">Tarif</span> de l&rsquo;ouvrant : le
                vitrage composé est valorisé dans le devis par le contenu de
                son onglet <span style="font-weight: bold;">Fourn.
                Princ</span>., cumulé aux prix de chaque composants.</td>
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
              <td>S&rsquo;il y a une grille de prix vitrage utilisée pour le PV
                au niveau de l&rsquo;onglet <span
                style="font-weight: bold;">Tarif</span> de l&rsquo;ouvrant : le
                vitrage composé est valorisé dans le devis par le contenu de
                son onglet <span style="font-weight: bold;">Prix</span> cumulé
                aux prix de chaque composants.</td>
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
              <td>L&rsquo;état des cases à cocher Exclure du PR, Exclure du PV
                ainsi que le mode de calcul sont pris en considération
                (commercial, déboursé)</td>
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
              <td>La valorisation du bon de commande vitrage cumule le contenu
                de son onglet <span style="font-weight: bold;">Fourn.
                Princ.</span> aux prix de chaque composants <span
                style="text-decoration: underline;">non exclus du prix de
                revient</span>.</td>
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
              <td>Le bon de commande vitrage mentionne la description
                concaténée (à défaut, ce sera la description du vitrage
                composés qui sera imprimée)</td>
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
              <td>Dans l&rsquo;onglet <span
                style="font-weight: bold;">Informations</span> du devis/cde,
                nous affichons le code concaténé du vitrage composé ainsi que
                sa description concaténée (à défaut, ce sera le code et la
                description du vitrage composés qui seront affichés) </td>
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
              <td>L&rsquo;onglet <span style="font-weight: bold;">Prix</span>
                d&rsquo;une feuille de verre consommée dans le paramétrage
                d&rsquo;un vitrage composé n&rsquo;est pas pris en compte par
                Winpro.</td>
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
              <td>La variable <span class="f_Variables">MargeTechnique</span>
                définie dans la 1ère formule de l&rsquo;onglet <span
                style="font-weight: bold;">Vitrage</span> permet
                d&rsquo;appliquer un coefficient de marge supplémentaire à
                TOUS  les composants consommés dans les différents onglets
                (ex : <span class="f_Variables">MargeTechnique</span> :=  1.1
                <span style="font-style: italic;">pour une hausse de
                10%</span>). <span style="background-color: #ffff00;">Cette
                marge technique remplace la marge supplémentaire définie dans
                l</span><span
                style="background-color: #ffff00;">&rsquo;</span><span
                style="background-color: #ffff00;">onglet </span><span
                style="font-weight: bold; background-color: #ffff00;">Prix</span><span
                style="background-color: #ffff00;">du vitrage composé,
                UNIQUEMENT pour les composants consommés dans les onglets
                </span><span
                style="font-weight: bold; background-color: #ffff00;">Vitrages</span><span
                style="background-color: #ffff00;">, </span><span
                style="font-weight: bold; background-color: #ffff00;">Profils</span><span
                style="background-color: #ffff00;">, </span><span
                style="font-weight: bold; background-color: #ffff00;">Articles</span><span
                style="background-color: #ffff00;">, </span><span
                style="font-weight: bold; background-color: #ffff00;">Main
                d</span><span
                style="font-weight: bold; background-color: #ffff00;">&rsquo;</span><span
                style="font-weight: bold; background-color: #ffff00;">œuvre</span><span
                style="background-color: #ffff00;">. Autrement dit, le contenu
                des onglets </span><span
                style="font-weight: bold; background-color: #ffff00;">Prix</span><span
                style="background-color: #ffff00;"> et </span><span
                style="font-weight: bold; background-color: #ffff00;">Fournisseur</span><span
                style="background-color: #ffff00;"> n</span><span
                style="background-color: #ffff00;">&rsquo;</span><span
                style="background-color: #ffff00;">est pas affecté par cette
                variable</span>. Cette variable est indisponible pour les
                vitrages simples.</td>
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
              <td>La variable <span class="f_Variables">MargeComposant</span>
                définie dans les formules de chaque composant permettent
                d&rsquo;appliquer un coefficient de marge supplémentaire. Elle
                ne s&rsquo;appliquera que sur le composant pour lequel la
                formule est définie.</td>
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
              <td>La variable <span class="f_Variables">EpaisseurTotale</span>
                permet de modifier par formule l&rsquo;épaisseur par défaut du
                vitrage composé. (Cette variable est également utilisable dans
                le paramétrage des panneaux fabriqués).</td>
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
              <td>La variable <span
                class="f_Variables">IntegrerPrixChassis</span> permet au
                paramétreur de décider si le prix du composant doit être repris
                dans le vitrage ou le châssis. Par défaut cette variable est
                nulle, donc les composants sont repris dans le prix du vitrage
                par défaut. Cette notion est importante si vous imprimez le
                détails des prix sur les devis &amp; confirmations.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="512" bgcolor="#8bab97"
              style="width: 512px; background-color: #8bab97; border: solid 1px #000000;"><p><span
                style="font-weight: bold; text-decoration: underline;">Remarque:</span></p>

                <p>Cette variable <span
                class="f_Variables">IntegrerPrixChassis</span> ne peut en aucun
                cas être utilisée dans l&rsquo;onglet <span
                style="font-weight: bold;">Vitrage</span>. Winpro affectera
                systématiquement le prix des feuilles de verre au vitrage. </p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman'; font-weight: bold; text-decoration: underline;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Dans le paramétrage des questions de vitrages composés, les
                variables <span class="f_Variables">NumeroRemplissage</span> et
                <span class="f_Variables">NumeroOuvrant</span> sont
                indisponibles lorsque l&rsquo;on configure le vitrage « par
                défaut » de la fenêtre, dans l&rsquo;onglet <span
                style="font-weight: bold;">Châssis</span> de la commande :</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 7px 0px 7px 24px;"><img src="img/embim45.jpg" width="191"
        height="132" vspace="1" hspace="1" border="0" alt=""></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Lorsque l&rsquo;on configure le vitrage composé via
                l&rsquo;onglet <span style="font-weight: bold;">Ouvrant</span>
                de la commande client, seule la variable <span
                class="f_Variables">NumeroOuvrant</span> est disponible dans le
                paramétrage des questions : </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 7px 0px 7px 24px;"><img src="img/embim46.jpg" width="155"
        height="56" vspace="1" hspace="1" border="0" alt=""><span
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Et lorsque l&rsquo;on configure le vitrage composé par un
                clic droit sur le remplissage concerné dans l&rsquo;onglet
                <span style="font-weight: bold;">Ouvrant</span> de la commande
                client, les variables <span
                class="f_Variables">NumeroRemplissage</span> et <span
                class="f_Variables">NumeroOuvrant</span> sont toutes deux
                disponibles :</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim47.jpg" width="186"
        height="131" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="text-align: center;"><span class="f_Textestd"
        style="text-decoration: underline;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="text-decoration: underline;">Exemple d</span><span
        class="f_Textestd"
        style="text-decoration: underline;">&rsquo;</span><span
        class="f_Textestd" style="text-decoration: underline;">une formule
        consommant une feuille de verre avec une marge supplémentaire de 50%
        :</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">ReduireForme (1,
        5)</span><br>
        <span class="f_Textestd" style="color: #000080;">DimA := DimAForme
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

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
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
        class="f_Textestd" style="color: #000080;">Orientation :=
        OrientationForme [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">FormeRemplissage :=
        TypeForme [1]</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">Quantite := 1</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="color: #000080;">MargeComposant :=
        1.5</span></p>

        <p style="margin: 0px 0px 0px 45px;"><span
        style="color: #0000ff;"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Edition de tarif
        depuis la bibliothèque:</span> Suite à vos remarques pertinentes, nous
        avons également apporté de nombreuses corrections et nouvelles
        fonctionnalités à l&rsquo;éditeur de tarifs basé sur les
        bibliothèques :</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 34px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td>Choix de la devise lors de l&rsquo;édition du tarif.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 34px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td>Les grilles de prix générées sont soit en cotes fabrication,
                ou soit en cotes tableau en fonction du mode de saisie des
                différents repères.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 34px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td>Des options de valorisation vous permettant d&rsquo; inclure
                ou non le prix du volet ou le prix du vitrage sur la ligne du
                repère.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 34px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td>Choix entre l&rsquo;édition papier ou création d&rsquo;un
                fichier ASCI qui sera enregistré dans un nouveau sous
                répertoire Tarifs.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim48.jpg" width="506"
        height="353" vspace="1" hspace="1" border="0" alt=""></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote"> </span></p>

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
                8.04.014</span></p>
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

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Correction dans
        l</span><span class="f_TitreReleaseNote">&rsquo;</span><span
        class="f_TitreReleaseNote">EDI Sprimoglass:</span> L'écriture de la
        position du vitrage dans le fichier généré par l'EDI Sprimoglass est
        maintenant conforme au numéro de repère.</p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="text-decoration: underline;">Avant correction:</span></p>

        <p style="margin: 0px 0px 0px 47px;">1.1.2                pour le
        repère 001</p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="text-decoration: underline;">Après correction:</span></p>

        <p style="margin: 0px 0px 0px 47px;">001.1.2                pour le
        repère 001</p>

        <p class="p_Comment"><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Code page
        Polonais sous WpReport:</span> Les caractères du code page polonais
        peuvent maintenant être affichés dans WPReport, avec l&rsquo;ancien
        comme avec le nouveau format du concepteur de rapport.</p>

        <p class="p_Comment">       </p>

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
                8.04.007</span></p>
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

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Validité des
        couleurs de faux-cintres:</span> Si la couleur sélectionnée pour un
        faux-cintre n'est pas autorisée, un message d&rsquo;erreur apparaît en
        saisie pour l&rsquo;utilisateur.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Filtre sur les
        listes d</span><span class="f_TitreReleaseNote">&rsquo;</span><span
        class="f_TitreReleaseNote">ouvrant en mode quincaillerie
        multi-ouvrant:</span> Dans ce mode d&rsquo;utilisation (« <span
        class="f_Winproini">Quinc Multi Ouvrant = 1</span> » dans la section
        <span style="font-weight: bold;">[System]</span>, voir note de version
        8.03), la liste des ouvrants est maintenant filtrée et ne propose plus
        que les ouvrants appartenants au même système que la quincaillerie,
        plutôt que de lister tous les ouvrants, y compris ceux des autres
        systèmes.</p>

        <p class="p_Comment">       </p>

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
                8.04.006</span></p>
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
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Saisie de châssis
        dans une commande:</span> Lors de la saisie successive de plusieurs
        châssis dans la commande, WinPro récupère par défaut les couleurs RAL
        saisies pour le premier chassis de la commande,  pour renseigner les
        teintes des châssis suivants.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Nouvelle fonction
        de remise à zéro du stock:</span> Vous pouvez maintenant effectuer une
        remise à zéro du stock pour un seul magasin individuellement.</p>

        <p class="p_Comment">De plus, si aucun magasin n'est présent au
        démarrage de WinPro, et que le module <span class="f_Comment"
        style="font-weight: bold;">Gestion de stock </span>est utilisé, un
        magasin est à présent créé par défaut.</p>

        <p class="p_Comment">       </p>

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
                8.04.000</span></p>
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
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Remises et prix
        imposé:</span> Lorsqu'on impose le prix d'un chassis, seules les
        remises principales pour le châssis sont affichées, les remises
        vitrages ne sont plus proposées, ni les remises pour le volet.</p>

        <p class="p_Comment">Si on est en volet seul, seules les remise volets
        seront disponibles.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Usinage
        quincaillerie:</span> Suite à une correction de bogue impliquant les
        usinages générés depuis une quincaillerie et les sections variables
        (ouvrant, dormant, ...), une case à cocher a été ajoutée dans
        l&rsquo;onglet Usinages du système.</p>

        <p class="p_Comment">Cette case à cocher "Usinage quinc" est dorénavant
        automatiquement cochée lors de la création d'un nouveau système, il est
        conseillé de la laisser cocher pour tout nouveau système</p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0237.jpg"
        width="353" height="132" border="0" alt="clip0237"></p>

        <p class="p_Comment">       </p>

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
                8.0.4.x</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: center; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';"> </span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_TitreReleaseNote"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Nouvelles
        fonctions WPREPORT:</span> La fonction <span
        style="color: #0000ff;">RemoveDir (Path : chaine) : Booléen</span><span
        style="font-family: 'Times New Roman'; color: #0000ff;"></span> permet
        de supprimer le répertoire spécifié. Cette fonction renvoie <span
        class="f_Variables">True</span> si l&rsquo;opération s&rsquo;est bien
        déroulée, <span class="f_Variables">False</span> sinon. Le répertoire
        doit être vide pour pouvoir être supprimé.</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Path</span> correspond au chemin
                d&rsquo;accès du répertoire à supprimer.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Exemple :</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">RemoveDir (</span><span
        style="color: #000080;">&lsquo;</span><span class="f_Textestd"
        style="color: #000080;">c:\doc</span><span
        style="color: #000080;">&rsquo;</span><span class="f_Textestd"
        style="color: #000080;">)</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;"> </span></p>

        <p style="margin: 0px 0px 0px 47px;">Cette instruction supprimera le
        répertoire &rsquo;c:\doc&rsquo;, s&rsquo;il existe et qu&rsquo;il est
        vide.</p>

        <p style="margin: 0px 0px 0px 47px;"> </p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">La fonction <span style="color: #0000ff;">BrowseDir
        (Path : chaine) : chaine</span><span
        style="font-family: 'Times New Roman'; color: #0000ff;"></span> permet
        de parcourir le contenu du répertoire spécifié. Cette fonction renvoie
        une chaîne de caractères contenant la liste des éléments parcourus.</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">Path</span> correspond au chemin
                d&rsquo;accès du répertoire à parcourir.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Exemple :</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">Var </span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  ListeFichier : string ;</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  ListeFichierTxt : string ;</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">Begin</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  ListeFichier := BrowseDir (</span><span
        style="color: #000080;">&lsquo;</span><span class="f_Textestd"
        style="color: #000080;">c\\doc\\*.*</span><span
        style="color: #000080;">&rsquo;</span><span class="f_Textestd"
        style="color: #000080;">);</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  ListeFichierTxt := BrowseDir (</span><span
        style="color: #000080;">&lsquo;</span><span class="f_Textestd"
        style="color: #000080;">c\\doc\\*.txt</span><span
        style="color: #000080;">&rsquo;</span><span class="f_Textestd"
        style="color: #000080;">);</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">End</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;"> </span></p>

        <p style="margin: 0px 0px 0px 47px;">Ce code initialise la chaîne de
        caractère <span class="f_Textestd"
        style="color: #000080;">ListeFichier</span> avec la liste de tous les
        fichiers du dossier <span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">c </span><span
        style="color: #000000; text-decoration: underline;">\\doc</span>&rsquo;,
        et la chaîne <span class="f_Textestd"
        style="color: #000080;">ListeFichierTxt </span>avec la liste des
        fichiers textes du même dossier.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">La fonction <span style="color: #0000ff;">FileExists (NomFichier : chaine) :
        Booléen</span><span
        style="font-family: 'Times New Roman'; color: #0000ff;"></span> permet
        de vérifier si le fichier spécifié existe ou non. Cette fonction
        renvoie <span class="f_Variables">True</span> si le fichier existe,
        <span class="f_Variables">False</span> sinon.</p>
		
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">NomFichier</span>
                correspond au nom de fichier dont l&rsquo;existence est à
                vérifier.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Exemple :</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">Var </span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  FichierPresent : Boolean ;</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">Begin</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  FichierPresent := FileExists (</span><span
        style="color: #000080;">&lsquo;</span><span class="f_Textestd"
        style="color: #000080;">c\\doc\\Fichier.pdf</span><span
        style="color: #000080;">&rsquo;</span><span class="f_Textestd"
        style="color: #000080;">);</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">End</span></p>

        <p class="p_Comment"><span class="f_Textestd"
        style="color: #000080;"> </span></p>

        <p style="margin: 0px 0px 0px 47px;">Ce code stocke dans la variable
        <span class="f_Textestd" style="color: #000080;">FichierPresent
        </span>le fait que le fichier <span
        class="f_Textestd">&lsquo;</span><span
        class="f_Textestd">c\\doc\\Fichier.pdf</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd"
        style="color: #000080;"></span> existe ou non.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">La fonction <span
        style="color: #0000ff;">DeleteFile (NomFichier : chaine) :
        Booléen</span><span
        style="font-family: 'Times New Roman'; color: #0000ff;"></span> permet
        de supprimer le fichier spécifié. Cette fonction renvoie <span
        class="f_Variables">True</span> si l&rsquo;opération s&rsquo;est bien
        déroulée, <span class="f_Variables">False</span> sinon.</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">NomFichier</span> correspond au nom
                du fichier à supprimer.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Exemple :</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">Var </span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  FichierSupprime : Boolean ;</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">Begin</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  FichierSupprime := DeleteFile (</span><span
        style="color: #000080;">&lsquo;</span><span class="f_Textestd"
        style="color: #000080;">c\\doc\\Fichier.pdf</span><span
        style="color: #000080;">&rsquo;</span><span class="f_Textestd"
        style="color: #000080;">);</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">End</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;"> </span></p>

        <p style="margin: 0px 0px 0px 47px;">Cette instruction supprimera le
        fichier <span class="f_Textestd">&lsquo;</span><span
        class="f_Textestd">c\\doc\\Fichier.pdf</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd"> et renverra
        le résultat de l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">opération dans la variable </span><span
        class="f_Textestd" style="color: #000080;">FichierSupprime</span>.</p>

        <p style="margin: 0px 0px 0px 47px;"> </p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">La fonction <span
        style="color: #0000ff;">FileLength (NomFichier : chaine) :
        Entier</span><span
        style="font-family: 'Times New Roman'; color: #0000ff;"></span> permet
        de connaître la taille du fichier spécifié, en kilo-octets (Ko). Cette
        fonction renvoie un nombre entier correspondant à la taille du
        fichier.</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">NomFichier</span> correspond au nom
                du fichier dont la taille est recherchée.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="text-decoration: underline;"> </span></p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Exemple :</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">Var </span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  TailleFichier : integer ;</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">Begin</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  TailleFichier := FileLength (</span><span
        style="color: #000080;">&lsquo;</span><span class="f_Textestd"
        style="color: #000080;">c\\doc\\Fichier.pdf</span><span
        style="color: #000080;">&rsquo;</span><span class="f_Textestd"
        style="color: #000080;">);</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">End</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;"> </span></p>

        <p style="margin: 0px 0px 0px 47px;">Ce code initialise la variable <span class="f_Textestd" style="color: #000080;">TailleFichier</span> 
		avec la taille du fichier <span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">c </span><span
        style="color: #000000; text-decoration: underline;">\\doc</span><span
        class="f_Textestd">\\Fichier.pdf</span><span
        class="f_Textestd">&rsquo;</span>, en Ko.</p>

        <p style="margin: 0px 0px 0px 47px;"> </p>

        <p style="margin: 0px 0px 0px 47px;"> </p>

        <p class="p_Comment">La fonction <span style="color: #0000ff;">CopyFile
        (NomFichierSource : chaine ; NomFichierCible : chaine) :
        Booléen</span><span
        style="font-family: 'Times New Roman'; color: #0000ff;"></span> permet
        de copier le fichier source vers le fichier destination spécifiés.
        Cette fonction renvoie <span class="f_Variables">True</span> si
        l&rsquo;opération s&rsquo;est bien déroulée, <span
        class="f_Variables">False</span> sinon. Si le fichier destination
        existe déjà, il sera écrasé sans avertissement.</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">NomFichierSource</span> correspond
                au nom du fichier source à copier.</td>
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
              <td><span class="f_Textestd"
                style="font-style: italic;">NomFichierCible</span> correspond
                au nom du fichier cible à copier.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="text-decoration: underline;"> </span></p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Exemple :</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">Var </span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  CopieFichier : boolean ;</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">Begin</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  CopieFichier := CopyFile (</span><span
        style="color: #000080;">&lsquo;</span><span class="f_Textestd"
        style="color: #000080;">c\\doc\\Fichier.pdf</span><span
        style="color: #000080;">&rsquo;</span><span class="f_Textestd"
        style="color: #000080;">, </span><span
        style="color: #000080;">&lsquo;</span><span class="f_Textestd"
        style="color: #000080;">c\\doc\\Fichier2.pdf</span><span
        style="color: #000080;">&rsquo;</span><span class="f_Textestd"
        style="color: #000080;">);</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">End</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;"> </span></p>

        <p style="margin: 0px 0px 0px 47px;">Ce code copie le fichier <span
        class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">c </span><span
        style="color: #000000; text-decoration: underline;">\\doc\\Fichier.pdf</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd"></span> vers
        le fichier <span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">c </span><span
        style="color: #000000; text-decoration: underline;">\\doc</span><span
        class="f_Textestd">\\Fichier2.pdf</span><span
        class="f_Textestd">&rsquo;</span>, et renvoie le résultat dans la
        variable <span class="f_Textestd"
        style="color: #000080;">CopieFichier</span>.</p>

        <p style="margin: 0px 0px 0px 47px;"> </p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">La fonction <span style="color: #0000ff;">Execute
        (S : chaine ; T : chaine ; W : booléen)</span><span
        style="font-family: 'Times New Roman'; color: #0000ff;"></span> permet
        d&rsquo;exécuter un programme externe depuis un rapport WPR.</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd" style="font-style: italic;">S</span>
                        correspond au nom et au chemin d&rsquo;accès du
                programme à exécuter.</td>
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
              <td><span class="f_Textestd" style="font-style: italic;">T</span>
                        correspond aux éventuels paramètre et options de ligne
                de commande pour cet exécutable (facultatif).</td>
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
              <td><span class="f_Textestd" style="font-style: italic;">W</span>
                        indique si l&rsquo;exécution doit se faire avec une
                fenêtre réduite (<span class="f_Variables">True</span>) ou non
                (<span class="f_Variables">False</span>).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Exemple :</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;"> </span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">Var </span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  ExecutionProg : string ;</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">Begin</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">  ExecutionProg :=
        Execute('c:\winpro\winpro.exe', '/WPR', false)</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;">End</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_Textestd"
        style="color: #000080;"> </span></p>

        <p style="margin: 0px 0px 0px 47px;">Cette instruction exécutera le
        module WPR.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Chutes RAL dans
        WinPro/D:</span> Une nouvelle clef dans la table <span
        style="font-style: italic;">settings </span>de WinPro/D permet de tenir
        compte ou non de la valeur des chutes RAL dans le total de la commande.
        Auparavant, les chutes RAL étaient systématiquement ajoutées au total
        commande, cette clef permet de contrôler ce point.</p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;"> </span></p>

        <p><span style="font-weight: bold;">[System]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="142"><span class="f_Winproini">Sans Chutes
              Ral</span></td>
              <td><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">=
                Active (0, valeur par défaut) ou désactive (1) le calcul des
                chutes RAL sur les devis WinPro/D.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -142px; margin: 0px 0px 0px 142px;"><span
        style="font-family: 'Courier New'; font-weight: bold;"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Modification
        dans la table DetLot: </span><span class="f_Textestd">Lors de
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">optimisation d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">une commande
        contenant des profils en fournitures (onglet </span><span
        class="f_Textestd" style="font-style: italic;">Profils</span><span
        class="f_Textestd"> de la commande), le champs </span><span
        class="f_Textestd" style="font-style: italic;">POSITION</span><span
        class="f_Textestd"> prend la valeur </span><span
        class="f_Textestd">&lsquo;</span><span class="f_Textestd">*
        </span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd"> dans le cas de ces profils, qui n</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">ont pas de
        position définie.</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle
        fonction WPREPORT</span><span
        style="font-weight: bold; text-decoration: underline;">:</span> La
        fonction <span style="color: #0000ff;">DxfDrawing (Picture : chaine ;
        Code : chaine ; Type : chaine ; Width : Integer ; Height :
        Integer)</span> permet de dessiner un dessin DXF WinPro;</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 41px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span class="f_Textestd" style="font-style: italic;">Picture 
                </span><span class="f_Textestd">correspond au nom de l'objet
                image créé dans WpReport</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 41px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span class="f_Textestd" style="font-style: italic;">Code
                </span><span class="f_Textestd">correspond au code du
              DXF</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 41px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span class="f_Textestd" style="font-style: italic;">Type 
                </span><span class="f_Textestd">correspond au type de DXF. Si
                dans ce paramètre vous entrez A ou a, vous irez rechercher le
                DXF correspondant à la table article, si vous entrez un autre
                caractère vous pointerez vers la table DXF</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 41px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span class="f_Textestd" style="font-style: italic;">Width
                </span><span class="f_Textestd">correspond à la largeur du
                dessin en pixels</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 41px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-</span></td>
              <td><span class="f_Textestd" style="font-style: italic;">Height 
                </span><span class="f_Textestd">correspond à la hauteur du
                dessin en pixels</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Si vous entrez des
        valeurs trop grandes par rapport à l'objet image dans la largeur et la
        hauteur, le dessin sera limité à la taille de l'objet image que vous
        aurez défini dans la page.</span></p>

        <p class="p_Comment"> </p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="text-decoration: underline;">Exemples :</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 45px;"><span class="f_Textestd"
        style="font-weight: bold;">DxfDrawing
        ('Picture1','1130','1',100,180)</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cette instruction
        affichera dans l'objet Picture1 un Dxf provenant de la table
        Dxf</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 45px;"><span class="f_Textestd"
        style="font-weight: bold;">DxfDrawing
        ('Picture1','1130','A',100,180)</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cette instruction
        affichera dans l'objet Picture1 un Dxf provenant de la table
        Article</span></p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Driver machine
        WPR:</span><span class="f_Textestd"> A partir de la version 8.0.4.017 et
        8.1.0.8, l'utilisateur aura la possibilité de lier une scie WinPro, via
        la section </span><span class="f_Textestd"
        style="font-weight: bold;">[SAW]</span><span class="f_Textestd">, soit
        à un driver en DLL, soit à un driver WPR. </span><br>
        <span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="text-decoration: underline;">Syntaxe: </span><br>
        <span class="f_Textestd">Pour les drivers  DLL, la syntaxe reste
        inchangée.</span><br>
        <span class="f_Textestd">Pour les drivers WPR : </span><br>
         </p>

        <p class="p_Comment"><span class="f_Winproini"
        style="color: #000000;">[Saw]</span></p>

        <p style="text-indent: -136px; margin: 0px 0px 0px 136px;"><span
        class="f_Winproini">NUMERO_SCIE_WINPRO =
        CODE_DU_RAPPORT;DOSSIER_RAPPORT;IMPRESSION </span></p>

        <p style="text-indent: -136px; margin: 0px 0px 0px 136px;"><span
        class="f_Winproini">Où</span></p>

        <p><span class="f_Winproini">NUMERO_SCIE_WINPRO  </span><span
        class="f_Winproini"
        style="font-size: 12pt; font-family: 'Courier New'; font-weight: normal; color: #000000;">correspond
        au numéro de la scie créée dans WinPro.</span></p>

        <p class="p_Comment"><span class="f_Winproini">CODE_DU_RAPPORT 
        </span><span class="f_Winproini"
        style="font-size: 12pt; font-family: 'Courier New'; font-weight: normal; color: #000000;">correspond
        au nom du fichier RPT contenant le rapport à utiliser.</span></p>

        <p class="p_Comment"><span class="f_Winproini">DOSSIER_RAPPORT 
        </span><span class="f_Winproini"
        style="font-size: 12pt; font-family: 'Courier New'; font-weight: normal; color: #000000;">correspond
        au chemin d'accès complet du dossier où se trouve le rapport à
        utiliser. Si celui-ci n'existe pas dans la base WinPro, il sera alors
        importé automatiquement. Si rien n'est indiqué, le fichier RPT sera
        recherché dans le répertoire de base de WinPro.</span></p>

        <p class="p_Comment"><span class="f_Winproini">IMPRESSION  </span><span
        class="f_Winproini"
        style="font-size: 12pt; font-family: 'Courier New'; font-weight: normal; color: #000000;">permet
        d'activer (1) ou non (0) l'impression d'un document WPR en même temps
        que les fichiers machines. </span><br>
        <span style="font-family: 'Courier New';"> </span></p>

        <p class="p_Comment">WinPro enverra au rapport le numéro du lot,
        utilisable dans les requêtes, via la variable <span
        style="color: #0000ff;">:job</span>, mais aussi le numéro de scie via
        la variable <span style="color: #0000ff;">:saw. </span></p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Exemples</span></p>

        <p style="margin: 0px 0px 0px 45px;">1 = SCIEV1;C:\drivers WPR\;1</p>

        <p class="p_Comment">Le rapport <span
        style="font-style: italic;">SCIEV1</span>, situé dans le dossier <span
        style="font-style: italic;">C:\drivers WPR\, </span>sera exécuté, avec
        une impression de rapport WPR.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">Si l&rsquo;utilisateur reçoit une mise à jour du
        driver, il devra simplement modifier la section <span class="f_Comment"
        style="font-weight: bold;">[Saw]</span> et placer le fichier RPT dans
        le bon dossier.</p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 45px;">1 = SCIEV2;C:\drivers WPR\;1</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;">Menu
        de rapports personnalisés pour WPREPORT:</span> Cette fonction permet
        de créer des sous menus sous le menu <span class="f_Comment"
        style="font-weight: bold;">Rapports</span>. Afin de lancer des rapports
        personalisés. <span class="f_Textestd">Ajouter ces clefs dans la table
        settings :</span></p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;"> </span></p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;">[Reports]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="136"><span class="f_Winproini">Count</span></td>
              <td><span style="font-size: 12pt; font-family: 'Courier New';">=
                       Nombre de rapports personnalisés (nombre de sous-menus,
                de 1 à 10, format entier I).</span></td>
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
              <td width="134"><span class="f_Winproini">n</span></td>
              <td><span style="font-size: 12pt; font-family: 'Courier New';">=
                       Code du rapport WPR numéro n (format caractère
              S).</span></td>
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
              <td width="136"><span
              class="f_Winproini">n:description</span></td>
              <td><span style="font-size: 12pt; font-family: 'Courier New';">=
                       Description du rapport numéro n, telle qu</span><span
                style="font-size: 12pt; font-family: 'Courier New';">&rsquo;</span><span
                style="font-size: 12pt; font-family: 'Courier New';">elle sera
                affichée dans le menu </span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">Rapports</span><span
                style="font-size: 12pt; font-family: 'Courier New';"> (format
                caractère S).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Exemple :</span></p>

        <p style="margin: 0px 0px 0px 45px;">Count = 1</p>

        <p style="margin: 0px 0px 0px 45px;">1 = ART_DET</p>

        <p style="margin: 0px 0px 0px 45px;">1:description = Liste
        d&rsquo;articles détaillée</p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p style="text-align: center;"><img src="img/embim49.jpg" width="242"
        height="116" vspace="1" hspace="1" border="0" alt=""></p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;">WPREPORT
        en ligne de commande:</span> Vous pouvez lancer WpReport depuis une
        ligne de commande, ou via un fichier de traitement par lot (*.bat).
        Vous pouvez également lancer directement l&rsquo;exécution d&rsquo;un
        rapport sans passer par une session WinPro. Pour se faire, utilisez la
        syntaxe suivante :</p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p style="margin: 0px 0px 0px 45px;"><span
        style="color: #0000ff;">WinPro /WPR@Utilisateur:mot_de_passe
        Code_du_rapport</span></p>

        <p class="p_Comment">Cette ligne lance le concepteur de WpReport. Le
        champ <span style="color: #0000ff;">Utilisateur</span> correspond au
        code utilisateur WinPro (optionnel). Le champ <span
        style="color: #0000ff;">mot_de_passe </span>correspond au mot de passe
        du compte utilisateur. Si le mot de passe du compte n&rsquo;est pas
        précisé, ou que le compte n&rsquo;a pas de mot de passe, la fenêtre de
        login standard de WinPro apparaitra. Le champ <span
        style="color: #0000ff;">Code_du_rapport</span> permet de préciser le
        rapport à exécuter directement au lancement (en option, le rapport doit
        être adapté à un lancement seul sans paramètres).</p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 45px;"><span
        style="color: #0000ff;">WinPro /WPRS@Utilisateur:mot_de_passe
        </span></p>

        <p class="p_Comment">Cette ligne lance le dialogue <span
        style="font-style: italic;">Documents type</span>, accessible depuis le
        menu <span class="f_Comment" style="font-weight: bold;">Rapport |
        Documents type de WinPro</span>, mais sans lancer WinPro. Le champ
        <span style="color: #0000ff;">Utilisateur</span> correspond au code
        utilisateur WinPro (optionnel). Le champ <span
        style="color: #0000ff;">mot_de_passe </span>correspond au mot de passe
        du compte utilisateur. Si le mot de passe du compte n&rsquo;est pas
        précisé, ou que le compte n&rsquo;a pas de mot de passe, la fenêtre de
        login standard de WinPro apparaîtra.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="color: #000000; text-decoration: underline;">A
        noter :</span><span class="f_Textestd"> WinPro/D peut également lancer
        des rapports via la ligne de commande, ou encore modifier les modes
        d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">impressions des documents (pour peu que
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">utilisateur ait les droits d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">accès
        suffisant). Il suffit de remplacer </span><span
        style="color: #0000ff;">WinPro</span><span class="f_Textestd"> par </span><span style="color: #0000ff;">WinProD</span><span
        class="f_Textestd"> en début de ligne. Dans tous les cas, WinPro(/D) est
        bien chargé en mémoire mais n</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">est pas
        exécuté.</span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span
        style="color: #000000; text-decoration: underline;">Exemples:</span><span
        class="f_Textestd"></span></p>

        <p style="margin: 0px 0px 0px 45px;"><span
        style="color: #0000ff;">WinProD /WPRS </span></p>

        <p class="p_Comment"><span class="f_Textestd">Cette instruction lance
        le menu de configuration des modes d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">impressions
        de documents pour WinPro/D.</span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p style="margin: 0px 0px 0px 45px;"><span
        style="color: #0000ff;">WinPro /WPR</span></p>

        <p class="p_Comment"><span class="f_Textestd">Cette instruction lance
        le concepteur WPR, avec la fenêtre de login standard de
        WinPro.</span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p style="margin: 0px 0px 0px 45px;"><span
        style="color: #0000ff;">WinPro /WPR@Administrateur:admin</span></p>

        <p class="p_Comment"><span class="f_Textestd">Cette instruction lance
        le concepteur WPR pour l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">utilisateur
        </span><span class="f_Textestd"
        style="font-style: italic;">Administrateur</span><span
        class="f_Textestd">, dont le mot de passe est </span><span
        class="f_Textestd" style="font-style: italic;">admin</span><span
        class="f_Textestd">.</span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p style="margin: 0px 0px 0px 45px;"><span
        style="color: #0000ff;">WinPro /WPR@Administrateur:admin
        LISTEART</span></p>

        <p class="p_Comment"><span class="f_Textestd">Cette instruction
        </span><span class="f_Textestd" style="font-weight: bold;">exécute
        </span><span class="f_Textestd">le rapport </span><span
        class="f_Textestd" style="font-style: italic;">LISTEART </span><span
        class="f_Textestd">directement, pour le compte utilisateur WinPro
        </span><span class="f_Textestd"
        style="font-style: italic;">Administrateur</span><span
        class="f_Textestd">, dont le mot de passe est </span><span
        class="f_Textestd" style="font-style: italic;">admin</span><span
        class="f_Textestd">.</span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="512" bgcolor="#8bab97"
              style="width: 512px; background-color: #8bab97; border: solid 1px #000000;"><p
                class="p_Comment"><span
                style="font-weight: bold; color: #ff0000;">Attention!</span><span
                style="color: #ff0000;"></span></p>

                <p class="p_Comment"><span style="color: #ff0000;">Pour toutes
                ces lignes de commandes : le code du rapport ne doit en aucun
                contenir des espaces !</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;">Contrôle
        d</span><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;">&rsquo;</span><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;">accès
        WPREPORT:</span> De nouvelles variables sont disponibles dans la
        création de rapports WPR afin de faciliter le contrôle de l&rsquo;accès
        aux ressources par WPR. Ces variables sont utilisables dans
        l&rsquo;interface, au niveau du requêteur, et servent à définir les
        méthodes d&rsquo;accès à la base de données mySQL.</p>

        <p class="p_Comment">Deux méthodes d&rsquo;accès possibles pour WPR
        vers une base de données au format mySQL, par ODBC (avec driver mySQL),
        ou par une connection directe au serveur mySQL. </p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Connection par ODBC :</span></p>

        <p style="text-align: center;"><img src="img/embim50.jpg" width="375"
        height="177" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="margin: 0px 0px 0px 45px;"><span class="f_Comment"
        style="font-weight: bold;">Type de connection</span><span
        style="font-family: 'Times New Roman';"> </span>:        <span
        style="font-family: 'Lucida Sans Unicode';">stODBC</span></p>

        <p style="margin: 0px 0px 0px 45px;"><span class="f_Comment"
        style="font-weight: bold;">DSN ODBC</span><span
        style="font-family: 'Times New Roman';"> </span>:                <span
        style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%DSN%</span></p>

        <p style="margin: 0px 0px 0px 45px;"><span class="f_Comment"
        style="font-weight: bold;">Paramètres</span><span
        style="font-family: 'Times New Roman';"> </span>:                2
        possibilités, soit :</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 181px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&bull;</span></td>
              <td><span
                style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%AUTOLOGIN%</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: 45px; margin: 0px 0px 0px 91px;">soit</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 181px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&bull;</span></td>
              <td><span style="font-style: italic; color: #0000ff;">user
                name</span> = <span
                style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%LOGIN%</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 181px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&bull;</span></td>
              <td><span style="font-style: italic; color: #0000ff;">password
                </span>= <span
                style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%PASSWORD%</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 181px;"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p class="p_Comment">La variable <span
        style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%DSN%</span>
        est ici automatiquement remplacée par les bonnes informations pour le
        serveur mySQL (nom du serveur + nom du schéma). A noter que
        lorsqu&rsquo;une connection ODBC est utilisée dans WPR et que la base
        de donnée est reconnue au format mySQL, WPR utilise automatiquement le
        driver mySQL.</p>

        <p class="p_Comment">La variable <span
        style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%AUTOLOGIN%</span>
        est remplacée par les informations de connection à la base de données
        mySQL, telles que définies au lancement de WinPro (nom
        d&rsquo;utilisateur + mot de passe mySQL dans le login de démarrage de
        WinPro). Cette variable s&rsquo;utilise seule dans la fenêtre de
        paramètres.</p>

        <p class="p_Comment">La variable <span
        style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%LOGIN%</span>
        est remplacée par le nom du compte utilisateur mySQL utilisé pour
        lancer WinPro (nom d&rsquo;utilisateur mySQL utilisé dans le login de
        démarrage de WinPro), Il est aussi possible d&rsquo;utiliser le
        paramètre <span style="font-style: italic; color: #0000ff;">user name
        </span>en renseignant directement le nom de l&rsquo;utilisateur
        mySQL.</p>

        <p class="p_Comment">La variable <span
        style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%PASSWORD%</span>
        est remplacée par le mot de passe du compte utilisateur mySQL utilisé
        pour lancer WinPro (mot de passe mySQL utilisé dans le login de
        démarrage de WinPro), Il est possible d&rsquo;utiliser le paramètre
        <span style="font-style: italic; color: #0000ff;">password </span>en
        renseignant directement le mot de passe de l&rsquo;utilisateur mySQL
        (<span class="f_Comment" style="font-weight: bold;">Attention
        toutefois, comme pour le paramètre précédent, ces informations seront
        dés lors accessible directement à toute personne ayant un accès minimum
        au module WPR</span><span
        style="font-family: 'Times New Roman';"> </span>!).</p>

        <p class="p_Comment"><span
        style="font-weight: bold; color: #000000; text-decoration: underline;"> </span></p>

        <p class="p_Comment"><span class="f_Textestd">Sachant qu</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">une
        connection directe au serveur mySQL est plus performante que via ODBC,
        cette méthode, même si elle est fonctionnelle, n</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">est pas la
        plus efficace.</span></p>

        <p class="p_Comment"><span
        style="font-weight: bold; color: #000000; text-decoration: underline;"> </span></p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Connection directe à
        mySQL</span><span
        style="font-family: 'Times New Roman'; text-decoration: underline;"> </span><span
        style="text-decoration: underline;">:</span></p>

        <p style="text-align: center;"><img src="img/embim51.jpg" width="352"
        height="155" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="margin: 0px 0px 0px 45px;"><span class="f_Comment"
        style="font-weight: bold;">Type de connection</span><span
        style="font-family: 'Times New Roman';"> </span>:        <span
        style="font-family: 'Lucida Sans Unicode';">stMySQL</span></p>

        <p style="margin: 0px 0px 0px 45px;"><span class="f_Comment"
        style="font-weight: bold;">DSN ODBC</span><span
        style="font-family: 'Times New Roman';"> </span>:                <span
        style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%SERVER%</span><span
        style="font-family: 'Times New Roman'; color: #0000ff;"> </span><span
        style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">:%DB%</span></p>

        <p style="margin: 0px 0px 0px 45px;"><span class="f_Comment"
        style="font-weight: bold;">Paramètres</span><span
        style="font-family: 'Times New Roman';"> </span>:                2
        possibilités, soit :</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 181px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&bull;</span></td>
              <td><span
                style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%AUTOLOGIN%</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: 45px; margin: 0px 0px 0px 91px;">soit</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 181px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&bull;</span></td>
              <td><span style="font-style: italic; color: #0000ff;">user
                name</span> = <span
                style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%LOGIN%</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 181px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&bull;</span></td>
              <td><span style="font-style: italic; color: #0000ff;">password
                </span>= <span
                style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%PASSWORD%</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 181px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&bull;</span></td>
              <td><span style="font-style: italic; color: #0000ff;">port
                </span>= <span
                style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%PORT%</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 181px;"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p class="p_Comment">La variable <span
        style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%SERVER%</span>
        est ici automatiquement remplacée par le nom du serveur mySQL défini
        dans la fenêtre de démarrage de WinPro. </p>

        <p class="p_Comment">La variable <span
        style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%DB%</span>
        est remplacée par le nom de la base de données dans le schéma mySQL,
        tel que définie dans la fenêtre de démarrage de WinPro.</p>

        <p class="p_Comment">La variable <span
        style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%AUTOLOGIN%</span>
        est remplacée par les informations de connection à la base de données
        mySQL, telles que définies au lancement de WinPro (nom
        d&rsquo;utilisateur + mot de passe + port du serveur mySQL dans le
        login de démarrage de WinPro). Cette variable s&rsquo;utilise seule
        dans la fenêtre de paramètres.</p>

        <p class="p_Comment">Les variables <span
        style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%AUTOLOGIN%</span>,
        <span
        style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%LOGIN%</span>,
        <span
        style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%PASSWORD%
        </span>sont employées comme déjà décrit ci-dessus.</p>

        <p class="p_Comment">La variable <span
        style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%PORT%</span>
        est optionnellement remplacée par le numéro de port du serveur mySQL,
        lorsque celui ci est défini avec une valeur différente de celle par
        défaut (port=3306) dans le login WinPro. Vous pouvez bien sûr définir
        ce numéro directement sans passer par la variable <span
        style="font-family: 'Lucida Sans Unicode'; color: #0000ff;">%PORT%</span>.
        </p>

        <p class="p_Comment"><span
        style="font-weight: bold; color: #000000; text-decoration: underline;"> </span></p>

        <p class="p_Comment"><span
        style="color: #000000; text-decoration: underline;">A
        noter :</span><span class="f_Textestd"> Ces différentes méthodes
        d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">accès aux données sont utilisées pour un rapport en
        exploitation, elles ne permettent pas de visualiser le résultat
        d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">une requête dans le requêteur de WPR. </span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p><span class="f_TitreReleaseNote">Complément sur l'impression des
        tarifs depuis la bibliothèque (module)</span>: Le dialogue d'impression
        des tarifs de châssis ou de volet depuis la bibliothèque (menu <span
        style="font-weight: bold;">Commandes | Bibliothèques</span>) a été
        complété par de nouvelles options d'impression. Ce nouveau dialogue est
        accessible en utilisant le bouton <img src="img/clip0001.zoom91.jpg"
        width="97" height="20" border="0" alt="clip0001"> de la
        bibliothèque.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0852.zoom87.jpg"
        width="443" height="308" border="0" alt="clip0852"></p>

        <p> </p>

        <p>La case <img src="img/clip0002.zoom92.jpg" width="86" height="23"
        border="0" alt="clip0002"> provoquera l&rsquo;impression d&rsquo;une
        ligne spécifique dans le tarif pour le prix du vitrage seul. Si
        décochée, WinPro ne créé pas de ligne spécifique pour le prix du
        vitrage.</p>

        <p>La case <img src="img/clip0003.zoom95.jpg" width="189" height="23"
        border="0" alt="clip0003"> indique à WinPro qu&rsquo;il doit calculer
        la ligne concernant la menuiserie en incluant le prix du vitrage. Si
        décochée, la ligne concernant le prix de la menuiserie est exprimée
        vitrage exclus.</p>

        <p>La case <img src="img/clip0004.jpg" width="80" height="18" border="0"
        alt="clip0004"> provoquera l&rsquo;impression d&rsquo;une ligne
        spécifique dans le tarif pour le prix du volet seul. Si décochée,
        WinPro ne créé pas de ligne spécifique pour le prix du volet.</p>

        <p>La case <img src="img/clip0005.jpg" width="187" height="21" border="0"
        alt="clip0005"> indique à WinPro qu&rsquo;il doit calculer la ligne
        concernant la menuiserie en incluant le prix du volet. Si décochée, la
        ligne concernant le prix de la menuiserie est exprimée volet exclus.</p>

        <p>Le combo <img src="img/clip0006.jpg" width="98" height="20" border="0"
        alt="clip0006"> permet de sélectionner un coefficient de prix dans la
        liste pour ce calcul de tarif.</p>

        <p>Le combo <img src="img/clip0007.jpg" width="45" height="16" border="0"
        alt="clip0007"> permet de sélectionner une devise dans laquelle le
        tarif sera calculé.</p>

        <p>La case <img src="img/clip0008.jpg" width="81" height="22" border="0"
        alt="clip0008"> lance le dialogue d&rsquo;impression standard de
        Windows pour une impression papier.</p>

        <p>La case <img src="img/clip0009.jpg" width="69" height="19" border="0"
        alt="clip0009"> permet de sauvegarder le tarif calculé dans un fichier
        texte. Ce fichier peut être renommé avec l&rsquo;extension CSV, afin
        d&rsquo;être ouvert avec un tableur supportant ce format (Excel,
        tableur OpenOffice…). Le séparateur de champ utilisé dans ce fichier
        est une tabulation TAB.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Amélioration de l</span><span
        class="f_TitreReleaseNote">&rsquo;</span><span
        class="f_TitreReleaseNote">outil Modification de settings</span>:
        L&rsquo;outil <span style="font-weight: bold;">Utilitaires |
        Modification de settings</span>, qui permet de modifier les clefs et
        sections de la tables settings directement dans l&rsquo;interface, à
        été amélioré.</p>

        <p>Vous pouvez dorénavant créer vos propres clefs et sections dans la
        table settings via cet utilitaire, en cliquant avec le bouton droit de
        la souris dans la liste des sections et clefs existantes.</p>

        <p>Un clic droit de la souris sur une section fait apparaître un menu
        contextuel. </p>

        <p>Sélectionnez une section (et non une clef !), et faites « <span
        style="font-style: italic;">Ajouter une section</span> » pour créer une
        nouvelle section avec au moins une clef dans la même opération. </p>

        <p>Sélectionnez une section cible, et avec le clic droit, utilisez le
        menu contextuel «<span style="font-style: italic;"> Ajouter une
        clef</span> » pour ajouter une clef dans une section existante.
        Utilisez les boutons Valider et Enregistrer pour enregistrer votre
        saisie.</p>

        <p>L&rsquo;utilitaire offre également une description de chaque clef
        reconnues par WinPro dans une nouvelles fenêtre. Ces descriptions sont
        modifiables, de sorte que vous pouvez compléter ou même créer vos
        propres descriptions de clefs, y compris dans vos langues
        personnalisées.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim52.jpg" width="400"
        height="399" vspace="1" hspace="1" border="0" alt=""></p>

        <p> </p>

        <p>Vous pouvez modifier le texte dans le champ <span
        style="font-style: italic;">Description</span>, puis enregistrez votre
        modification avec le bouton <span
        style="font-style: italic;">Enregistrer</span> juste en dessous, puis
        avec le bouton <span style="font-style: italic;">Valider</span>. </p>

        <p>Des onglets sont disponibles au dessus du champ pour sélectionner la
        langue dans laquelle vous souhaitez visualiser/créer/modifier la
        description de la clef.</p>

        <p>Les descriptions seront stockées pour les différentes langues
        visibles dans des fichiers (format texte à longueur variable) de nom
        « sStrings.xxx » (xxx est le code de la langue), dans un sous dossier
        <span style="font-weight: bold;">Trad</span> du répertoire de base.</p>

        <p>Ces fichiers vous sont fournis en standard pour les langues de bases
        Anglais et Français.</p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Nouvelle fonction
        WPREPORT:</span><span class="f_Textestd">: La fonction </span><span
        class="f_Variables">GetWindowsRect(DialogPage : chaine ; Var x,y :
        entiers) : entiers</span><span class="f_Textestd"> renvoie les
        dimensions en hauteur (x) et largeur (y) d'une boite de dialogue
        WPR.</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 47px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_Textestd"
                style="font-style: italic;">DialogPage </span><span
                class="f_Textestd">est le nom de la boite de dialogue
                créée</span></td>
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
              <td><span class="f_Textestd" style="font-style: italic;">x
                </span><span class="f_Textestd">correspond à la hauteur de la
                boite de dialogue</span></td>
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
              <td><span class="f_Textestd" style="font-style: italic;">y
                </span><span class="f_Textestd">correspond à la largeur de la
                boite de dialogue</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; color: #000000; text-decoration: underline;"> </span></p>

        <p style="margin: 0px 0px 0px 45px;"><span
        style="font-style: italic;">Exemple</span> :</p>

        <p style="margin: 0px 0px 0px 45px;">// Un rapport contient un dialogue
        nommé 'DialogPage1' et un bouton</p>

        <p style="margin: 0px 0px 0px 45px;">// Un click sur le bouton
        affichera un message avec la hauteur et la largeur de </p>

        <p style="margin: 0px 0px 0px 45px;">// la boite de dialogue</p>

        <p style="margin: 0px 0px 0px 45px;"> </p>

        <p style="margin: 0px 0px 0px 45px;">procedure Button1OnClick(Sender:
        TfrxComponent);</p>

        <p style="margin: 0px 0px 0px 45px;">  var</p>

        <p style="margin: 0px 0px 0px 45px;">  x,y : integer;</p>

        <p style="margin: 0px 0px 0px 45px;">begin</p>

        <p style="margin: 0px 0px 0px 45px;">  <span
        class="f_Variables">GETWINDOWRECT('DialogPage1', x,y);</span></p>

        <p style="margin: 0px 0px 0px 45px;">  showmessage(x);</p>

        <p style="margin: 0px 0px 0px 45px;">  showmessage(y);  </p>

        <p style="margin: 0px 0px 0px 45px;">end;</p>

        <p class="p_Comment"><span
        style="font-size: 8pt; font-family: 'MS Sans Serif';"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Filtres Agences
        et Régions Commerciales pour WinPro/D:</span><span
        class="f_Textestd"> Deux nouveaux filtres ont été ajoutés dans WinPro/D,
        afin de permettre à l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">utilisateur
        de filtrer la liste de commandes et la liste de clients ou prospects en
        saisie. L</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">utilisateur ne pourra lister que les
        commandes/devis, ou encore clients/prospects correspondants à
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">agence ou la région commerciale qui lui a été
        assignée.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Pour créer ces régions
        et agences dans WinPro/D, vous disposez de deux nouveaux menus,
        </span><span class="f_Textestd" style="font-weight: bold;">Données |
        Région commerciale</span><span class="f_Textestd"> et le
        menu </span><span class="f_Textestd" style="font-weight: bold;">Données
        | Agence commerciale</span><span class="f_Textestd">. Ces menus sont
        tous deux constitués d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">un code et
        d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">une description.</span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim53.jpg" width="484"
        height="209" vspace="1" hspace="1" border="0" alt=""></p>

        <p class="p_Comment"><span
        style="font-family: 'Courier New';"> </span></p>

        <p class="p_Comment">Ensuite, au niveau de la fiche "Utilisateur", deux
        nouveaux combos permettent de renseigner la région et/ou agence
        commerciale assignées à cet utilisateur.</p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim54.jpg" width="374"
        height="157" vspace="1" hspace="1" border="0" alt=""></p>

        <p class="p_Comment"><span
        style="font-weight: bold; color: #000000; text-decoration: underline;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Enfin, vous pouvez
        assigner une agence et/ou région commerciale à un client ou prospect
        WinPro, dans leurs fiches respectives (onglet Relations pour la fiche
        client, onglet principal pour la fiche prospect).</span></p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="font-family: 'Courier New'; font-weight: bold; text-decoration: underline;">Règle
        pour les filtres</span><br>
        <span class="f_Textestd"> </span><br>
        <span class="f_Textestd">Si un utilisateur n'a pas de région et
        d'agence définies, il aura alors accès à toutes les commandes, à tous
        les clients et à tous les prospects dans WinPro/D.</span><br>
        <span class="f_Textestd"> </span><br>
        <span class="f_Textestd">Si un utilisateur est lié à une région mais
        n'est pas lié à une agence, il verra alors les commandes, les clients
        et les prospects liés à cette même région.</span><br>
        <span class="f_Textestd"> </span><br>
        <span class="f_Textestd">Enfin, le filtre le plus "restrictif"
        s'applique dans le cas où l'utilisateur est lié à une région et à une
        agence. Celui-ci ne verra alors que les commandes, les clients et les
        prospects de cette région et de cette agence.</span><br>
        <span class="f_Textestd"> </span><br>
        <span class="f_Textestd" style="font-style: italic;">Remarque : les
        commandes sont filtrées en fonction du client ou du prospect auquel
        elles sont attachées. </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Compression des
        fichiers en pièces jointes pour WinPro et WinPro/D:</span><span
        class="f_Textestd"> Une compression des pièces jointes que Winpro(/D)
        génère peut être activée.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cette compression
        empêchant la modification de la structure du fichier texte par le
        provider internet, firewall, client mail ou autre antivirus.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ajouter cette clef dans
        le fichier WinPro.ini (ou la table settings en version 8, format entier
        I)</span></p>

        <p class="p_Comment"><span
        style="font-size: 12pt; font-family: 'Tahoma'; font-weight: bold;">[System]</span></p>

        <p class="p_Comment"><span class="f_Winproini">ZipWpx</span><span
        class="f_Comment" style="font-weight: bold;">       </span><span
        class="f_Comment"
        style="font-size: 12pt; font-family: 'Courier New';">= 1 active la
        compression (0 par défaut)</span><span
        style="font-size: 12pt; font-family: 'Courier New';"></span></p>

        <p class="p_Textestd"><span class="f_Winproini"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Ajout d'un
        onglet "arrondi vitrage" au niveau de la fiche d'un
        fournisseur:</span><span class="f_Textestd"> Cet onglet permet
        d'appliquer une formule sur les vitrages liés à ce fournisseur afin
        d'en calculer la surface. Le résultat sera stocké dans la variable
        </span><span class="f_Variables">SurfaceArrondie</span><span
        class="f_Textestd">. Si la variable calculée dans la formule n'est pas
        nulle, WinPro utilisera cette valeur pour calculer son prix de vitrage,
        sinon c'est la surface calculée par le programme qui sera
        utilisée.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Changement de
        format du fichier de licence WinPro:</span><span class="f_Textestd"> Le
        fichier de licence WinPro change de format à partir de cette version.
        Au lieu de prendre un fichier de nom </span><span class="f_Variables"
        style="font-style: italic; font-weight: bold; color: #000080;">WinPro.lic</span><span
        class="f_Textestd">, le programme cherchera un fichier </span><span
        class="f_Variables"
        style="font-style: italic; font-weight: bold; color: #000080;">WinPro.lc2</span><span
        class="f_Textestd">!</span><br>
        <span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Installation de
        WinPro/D Foxpro:</span><span class="f_Textestd"> A partir de ces
        versions de WinPro/D, il sera indispensable d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">installer
        WinPro/D avec des privilèges Windows suffisants. </span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span class="f_Textestd">Si vous disposez
        d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">un compte administrateur Windows sur la machine où
        vous devez installer WinPro/D FoxPro, vous n</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">êtes pas
        concerné par ce qui suit. </span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span class="f_Textestd">Si vous ne disposez pas
        des privilèges d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">administration pour la machine, un message
        d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">erreur apparaîtra au lancement de
        WinPro/D.</span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim55.jpg" width="366"
        height="138" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="text-align: center;"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Si vous rencontrez ce
        message en lançant WinPro/D, vous n</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">avez pas un
        compte utilisateur Windows suffisant pour installer le programme sur la
        machine ! </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Pour éviter des
        problèmes de mise en place, quelque soit le système Windows (XP, Vista
        ou Seven notamment), procéder comme suit :</span></p>

        <p class="p_Comment"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 54px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">1.</span></td>
              <td><span class="f_Textestd">Utiliser un compte Administrateur
                Windows. Contactez vos fournisseurs de matériel si vous
                n</span><span class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">en disposez pas.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 54px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">2.</span></td>
              <td><span class="f_Textestd">Installez le package « Microsoft
                Visual C++ redistribuable ». Ce logiciel est fourni avec toutes
                les versions de WinPro, et s</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">appelle « vcredist.exe ». Il est préférable
                d</span><span class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">installer la version fournie par Quadrature.
                L</span><span class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">installation de ce programme Microsoft
                requiert également les droits d</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">administration sur la machine.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 54px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">3.</span></td>
              <td><span class="f_Textestd">Installer le pilote de clef
                </span><span class="f_Textestd"
                style="font-style: italic;">Sentinel</span><span
                class="f_Textestd">lorsque requis. Il est disponible sur le
                répertoire de notre serveur FTP.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 54px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">4.</span></td>
              <td><span class="f_Textestd">WinPro/D peut être lancé à ce stade.
                Cependant si vous rencontrez le message d</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">erreur suivant</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p style="margin: 0px 0px 0px 23px;"><img src="img/embim56.jpg" width="379"
        height="171" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="text-align: center; margin: 0px 0px 0px 47px;"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 72px;"><span
        class="f_Textestd">il vous faudra installer le pilote ODBC pour FoxPro
        sur la machine, toujours avec les droits d</span><span
        class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">administration. </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 72px;"><span
        class="f_Textestd">En effet, WinPro/D s</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">appuie sur
        des documents personnalisés sous WPReport pour certaines impressions,
        ce qui rend indispensable l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">installation
        du pilote ODBC FoxPro. </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 72px;"><span
        class="f_Textestd">Vous trouverez facilement ce pilote ODBC sur notre
        site FTP, ou bien à l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">url <a
        href="http://msdn.microsoft.com/en-us/vfoxpro/bb190233.aspx "
        target="_blank"
        class="weblink">http://msdn.microsoft.com/en-us/vfoxpro/bb190233.aspx.</a></span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 72px;"><span
        class="f_Textestd">Certains documents de listes peuvent s</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">avérer
        impossible à imprimer si ce pilote est absent du système.</span></p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les points 1, 2 &amp; 3
        concernent aussi bien WinPro que WinPro/D, en FoxPro comme en mySQL.
        Toutefois, seuls les utilisateurs de WinPro ou WinPro/D FoxPro sont
        concernés par le point 4</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-weight: bold;">Nous insistons sur le fait si vous installez
        WinPro/D (ou WinPro) alors que vous disposez des droits d</span><span
        style="font-weight: bold;">&rsquo;</span><span class="f_Comment"
        style="font-weight: bold;">administration de votre PC, et que tous les
        composants fournis avec WinPro/D (ou WinPro) sont bien présents dans le
        répertoire d</span><span style="font-weight: bold;">&rsquo;</span><span
        class="f_Comment" style="font-weight: bold;">installation, toutes ces
        manipulations se feront automatiquement !</span></p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-weight: bold;"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Gestion de couleurs dans les faux-cintres</span><span class="f_Textestd"> Les faux-cintres que Winpro liste à
		l'utilisateur en saisie de cde/devis doivent maintenant répondre à des conditions précises, mises en place afin d'avoir un filtrage immédiat de la liste des
		faux-cintres autorisés, alors qu'auparavant nous avions un échec à la validation du châssis.
		Pour qu'un faux cintre soit proposé en saisie, il doit remplir les conditions suivantes:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 54px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-.</span></td>
              <td><span class="f_Textestd">Le système de la menuiserie doit être sélectionné dans la liste des systèmes autorisés du faux cintre.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 54px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-.</span></td>
              <td><span class="f_Textestd">Le faux cintre doit avoir une ligne de valorisation renseignée avec la couleur saisie pour la menuiserie.</span></td>
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
              <td width="45"><p style="margin: 0px 0px 0px 11px;"><span
                style="font-weight: bold; color: #000000;">ou</span></td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 54px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">-.</span></td>
              <td><span class="f_Textestd">Le faux cintre doit avoir une ligne de valorisation avec le champ couleur vierge.</span></td>
            </tr>
          </tbody>
        </table>
        </div>
		
		<p class="p_Comment"><span class="f_Comment"
        style="font-weight: bold;"> </span></p>
		
        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim55b.jpg" width="328"
        height="333" vspace="1" hspace="1" border="0" alt=""></p>
		
		<p class="p_Comment"><span class="f_Comment"
        style="font-weight: bold;"> </span></p>

        <p class="p_Textestd">Le faux cintre ci-dessus sera proposé pour le système BOIS VARIABLE seulement, en couleur ACAJOU (ligne valorisée), ainsi que dans toutes les
		couleurs du système (ligne valorisée sans code couleur).</span></p>

		<p class="p_Comment"><span class="f_Comment"
        style="font-weight: bold;"> </span></p>
		
		</td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
