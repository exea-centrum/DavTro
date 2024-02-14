<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Questions Accessibility","Accessibilité des questions"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?accessibilitédesquestions.php"; }
else { parent.quicksync('a3.2.3'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Accessibilité des questions</title>
  <meta name="keywords" content="Accessibilité des questions">
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
        href="formulesdequestions.php">Previous</a>  <a
        href="variables_de_production.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="color: #000000;"></span></p>

        <p style="background: #fffff2;"><span style="color: #000000;">Question
        variables can be used in these contexts:</span></p>

        <p style="background: #fffff2;"><span
        style="font-size: 5pt; color: #000000;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" border="1"
        style="border-color : #dadada #696968 #696968 #dadada; border-style: solid; border-width: 1px; border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold; color: #000000;">Where</span></p>
              </td>
              <td width="416" bgcolor="#fff7ef"
              style="width: 416px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 11px;"><span
                style="font-weight: bold; color: #000000;">Accessible
                questions</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Outer
                frame</span></p>
              </td>
              <td width="416" bgcolor="#fff7ef"
              style="width: 416px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 11px;"><span
                style="color: #000000;">Outer frame, door sill, window sill,
                roller box, roller slide, roller blade</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Door
                sill</span></p>
              </td>
              <td width="416" bgcolor="#fff7ef"
              style="width: 416px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 11px;"><span
                style="color: #000000;">Outer frame, door sill, window
                sill</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Window
                sill</span></p>
              </td>
              <td width="416" bgcolor="#fff7ef"
              style="width: 416px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 11px;"><span
                style="color: #000000;">Outer frame, door sill, window
                sill</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Sash</span></p>
              </td>
              <td width="416" bgcolor="#fff7ef"
              style="width: 416px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 11px;"><span
                style="color: #000000;">Sash, fitting, outer frame, door sill,
                window sill</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Fitting</span></p>
              </td>
              <td width="416" bgcolor="#fff7ef"
              style="width: 416px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 11px;"><span
                style="color: #000000;">Sash, fitting, outer frame, door sill,
                window sill</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Outer frame
                transom</span></p>
              </td>
              <td width="416" bgcolor="#fff7ef"
              style="width: 416px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 11px;"><span
                style="color: #000000;">Transom, outer frame, door sill, window
                sill</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Sash
                transom</span></p>
              </td>
              <td width="416" bgcolor="#fff7ef"
              style="width: 416px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 11px;"><span
                style="color: #000000;">Transom, sash, fitting, outer frame,
                door sill, window sill</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Peripheral
                profiles</span></p>
              </td>
              <td width="416" bgcolor="#fff7ef"
              style="width: 416px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 11px;"><span
                style="color: #000000;">Peripheral profile, outer frame, door
                sill, window sill</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Ventilators</span></p>
              </td>
              <td width="416" bgcolor="#fff7ef"
              style="width: 416px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 11px;"><span
                style="color: #000000;">Ventilator, sash, fitting, outer frame,
                door sill, window sill</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Georgian
                bars</span></p>
              </td>
              <td width="416" bgcolor="#fff7ef"
              style="width: 416px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 11px;"><span
                style="color: #000000;">Georgian bar, sash, fitting, outer
                frame, door sill, window sill</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Composed
                panels</span></p>
              </td>
              <td width="416" bgcolor="#fff7ef"
              style="width: 416px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 11px;"><span
                style="color: #000000;">Composed panel, sash, fitting, outer
                frame, door sill, window sill</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Roller
                shutter box</span></p>
              </td>
              <td width="416" bgcolor="#fff7ef"
              style="width: 416px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 11px;"><span
                style="color: #000000;">Box, shutter, slides, outer frame, door
                sill, window sill</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Roller
                shutter curtain</span></p>
              </td>
              <td width="416" bgcolor="#fff7ef"
              style="width: 416px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 11px;"><span
                style="color: #000000;">Box, shutter, slides, outer frame, door
                sill, window sill</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Roller
                shutter guide</span></p>
              </td>
              <td width="416" bgcolor="#fff7ef"
              style="width: 416px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 11px;"><span
                style="color: #000000;">Box, shutter, slides, outer frame, door
                sill, window sill</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Glass
                unit</span></p>
              </td>
              <td width="416" bgcolor="#fff7ef"
              style="width: 416px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 11px;"><span
                style="color: #000000;">Composed glazing, sash, fitting, outer
                frame, door sill, window sill</span><span
                style="color: #000000;"><br>
                </span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Decorative
                composed panel</span></p>
              </td>
              <td width="416" bgcolor="#fff7ef"
              style="width: 416px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="margin: 0px 0px 0px 11px;"><span
                style="color: #000000;">Decorative composed panel, sash,
                fitting, outer frame, door sill, window sill</span><span
                style="color: #000000;"><br>
                </span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="673"
                style="width: 673px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Notes</span><span
                style="text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">It is very important
                        that each variable name be unique, in order to avoid
                        conflicting with other variables.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">Similarly, the variable
                        linked to each answer of a </span><span
                        style="font-weight: bold; color: #000000;">Selection</span><span
                        style="color: #000000;"> question must be unique, for
                        the same reason.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">Answer to the
                        </span><span
                        style="font-weight: bold; color: #000000;">Selection</span><span
                        style="color: #000000;"> questions must be variable
                        names, and should </span><span
                        style="font-weight: bold; color: #ff0000;">never start
                        with a figure</span>.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="color: #000000;">As a reminder, question
                        or answer variable names should </span><span
                        style="font-weight: bold; color: #ff0000;">never start
                        with a «<span
                        style="font-weight: bold; color: #ff0000;">_ </span>»
                        character or with a figure ! </span>This character is
                        reserved into winpro for usage of <a
                        href="variables.php">global variables </a>.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 14px 0px;"><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>
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
      <td align="left"><p></p>

        <p> </p>

        <p>Les variables des questions sont utilisables depuis les éléments
        suivants:</p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="145"
                style="width: 145px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Dans les formules de </span></p>
              </td>
              <td width="498"
                style="width: 498px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">Je dispose des questions Globales et
                des questions de...</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Dormant</span></p>
              </td>
              <td width="498"
                style="width: 498px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Dormant, seuil de porte,
                seuil de châssis, caisson, coulisse, tablier</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Seuil
                de porte</p>
              </td>
              <td width="498"
                style="width: 498px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Dormant, seuil de porte,
                seuil de châssis</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Seuil
                de châssis</p>
              </td>
              <td width="498"
                style="width: 498px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Dormant, seuil de porte,
                seuil de châssis</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Ouvrant</p>
              </td>
              <td width="498"
                style="width: 498px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Ouvrant, quincaillerie,
                dormant, seuil de porte, seuil de châssis</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Quincaillerie</p>
              </td>
              <td width="498"
                style="width: 498px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Ouvrant, quincaillerie,
                dormant, seuil de porte, seuil de châssis</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Traverse
                de dormant</p>
              </td>
              <td width="498"
                style="width: 498px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Traverse, dormant, seuil de
                porte, seuil de châssis</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Traverse
                d'ouvrants</p>
              </td>
              <td width="498"
                style="width: 498px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Traverse, ouvrant,
                quincaillerie, dormant, seuil de porte, seuil de châssis</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Profil
                périphérique</p>
              </td>
              <td width="498"
                style="width: 498px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Profil périphérique, dormant,
                seuil de porte, seuil de châssis</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Aérateur</p>
              </td>
              <td width="498"
                style="width: 498px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Aérateur, ouvrant,
                quincaillerie, dormant, seuil de porte, seuil de châssis</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Croisillon</p>
              </td>
              <td width="498"
                style="width: 498px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Croisillon, ouvrant,
                quincaillerie, dormant, seuil de porte, seuil de châssis</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Panneau
                fabriqué</p>
              </td>
              <td width="498"
                style="width: 498px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Panneau fabriqué, ouvrant,
                quincaillerie, dormant, seuil de porte, seuil de châssis</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Caisson</p>
              </td>
              <td width="498"
                style="width: 498px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Caisson, tablier, coulisse,
                dormant, seuil de porte, seuil de châssis</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Tablier</p>
              </td>
              <td width="498"
                style="width: 498px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Caisson, tablier, coulisse,
                dormant, seuil de porte, seuil de châssis</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Coulisse</p>
              </td>
              <td width="498"
                style="width: 498px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Caisson, tablier, coulisse,
                dormant, seuil de porte, seuil de châssis</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Vitrage</p>
              </td>
              <td width="498"
                style="width: 498px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Vitrage composé, ouvrant,
                quincaillerie, dormant, seuil de porte, seuil de châssis</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="189" bgcolor="#fff7ef"
              style="width: 189px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">Panneau
                décoratif configuré</p>
              </td>
              <td width="498"
                style="width: 498px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Panneau décoratif configuré,
                ouvrant, quincaillerie, dormant, seuil de porte, seuil de
                châssis</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="673"
                style="width: 673px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Remarques</span><span
                style="text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Il est très important que le nom de chaque variable
                        de question soit unique, de manière à éviter les
                        conflits avec</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p
                style="text-indent: -13px; margin: 0px 0px 0px 27px;">d'autres
                questions.</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>De même, la variable liée à chaque réponse d'une
                        question de type <span
                        style="font-weight:bold;">Sélection</span> doit être
                        unique, pour la même</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p
                style="text-indent: -13px; margin: 0px 0px 0px 27px;">raison.</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Les réponses aux questions de type <span
                        style="font-weight:bold;">Sélection</span> doivent
                        impérativement être associées à des noms de
                      variable,</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="text-indent: -13px; margin: 0px 0px 0px 27px;">et
                <span style="font-weight: bold; color: #ff0000;">en aucun cas à
                des chiffres</span>.</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Pour rappel, les nom des variables de question ou de
                        réponse <span
                        style="font-weight: bold; color: #ff0000;">ne doivent
                        en aucun cas commencer par un</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="text-indent: -13px; margin: 0px 0px 0px 27px;"><span
                style="font-weight: bold; color: #ff0000;">caractère
                </span><span
                style="font-family: 'System'; font-weight: bold; color: #ff0000;">«</span><span
                style="font-weight: bold; color: #ff0000;">_ </span><span
                style="font-family: 'System'; font-weight: bold; color: #ff0000;">»
                ou par un chiffre !</span> Ce caractère est réservé dans WinPro
                pour les<a href="variables.php"> variables globales</a></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>       </p>

        <p> </p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
