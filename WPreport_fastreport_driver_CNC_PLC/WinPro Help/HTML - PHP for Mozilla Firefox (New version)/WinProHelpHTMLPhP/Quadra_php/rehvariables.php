<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Variables","Variables"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?rehvariables.php"; }
else { parent.quicksync('a5.5.3'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Variables</title>
  <meta name="keywords"
  content="Length,Quantity,Dimension,ExtDimension,Radius,Angle1,Angle2,X0,Y0,X1,1,MillingCategory,ArticleWidth,ArticleHeight,Thickness,FrameDimension,ProfileIndex,Side,Top,Bottom,Left,Right,TopLeft,TopRight,Sill,SawId,DeliveryPreparation,SimpleFactDoc,CustomerDoc,QualityControl,Width,Hauteur,CrossSectionPosition,VarLin">
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
        href="rehquestions.php">Previous</a>  <a
        href="rehprofiles.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>WinPro generates several variables to help you compute the profile's
        components. They are listed below. </p>

        <p> </p>

        <p> </p>

        <p></p>

        <p><span style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p
                class="p_Notes"><span class="f_Notes"
                style="font-weight: bold;">Notes:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Notes">Some formulas are followed by
                        the numbers 1 or 2 (e.g. <span
                        class="f_variables">Angle1</span>, <span
                        class="f_Variables">Angle2</span>). In such cases, 1 is
                        the left end of the side when the frame is laid flat,
                        with the corresponding side towards you (so, 1 = left
                        of the bottom side, right of the top side, top of the
                        left side, bottom of the right side).</span></td>
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
                      <td>The <span
                        style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span>
                        sign tells which variables you can change.</td>
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
                      <td>The <span
                        style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span>
                        sign tells which variables you must create.</td>
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
                      <td>The Usage column explains in which context the
                        variable can be used:</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p class="p_Notes" style="margin: 0px 0px 0px 48px;"><span
                class="f_Notes" style="font-weight: bold;">P</span><span
                class="f_Notes">= Profiles</span></p>

                <p class="p_Notes" style="margin: 0px 0px 0px 48px;"><span
                class="f_Notes" style="font-weight: bold;">A</span><span
                class="f_Notes">= Articles</span></p>

                <p class="p_Notes" style="margin: 0px 0px 0px 48px;"><span
                class="f_Notes" style="font-weight: bold;">L</span><span
                class="f_Notes">= Labour</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#fff7ef"
        border="2"
        style="background-color: #fff7ef; border: solid 3px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p><span
                style="font-weight: bold;">Variable</span></p>
              </td>
              <td width="61" style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Usage</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Length</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="553" style="width: 553px; border: solid 1px #c0c0c0;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Profiles:</span> Cut
                        length of the profile. </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="text-indent: 16px;"><span style="color: #ff0000;">You
                must define this value, otherwise the profile is not
                generated.!</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Articles:</span>
                        Length of the article, used to define its price if a
                        one dimension price table is tied to the article. It is
                        also used to define the value which will replace <a
                        href="macros___.php">macro #2#</a> if this macro is
                        used in the article definition. This variable is
                        ignored if variables <span
                        class="f_Variables">ArticleHeight</span> and <span
                        class="f_Variables">ArticleWidth</span> are defined.
                        You must define this value if you need it.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Quantity</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553" style="width: 553px; border: solid 1px #c0c0c0;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Profiles:
                        </span>Number of identical profiles to cut. This must
                        be an integer number.</td>
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
                      <td><span
                        style="font-weight: bold;">Articles:</span>Number of
                        identical articles to use. This may be any fractional
                        value.</td>
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
                      <td><span style="font-weight: bold;">Labour:</span>
                        Length of the operation, in seconds. You can also use a
                        time notation (hour:minutes:seconds or minutes:seconds
                        - see the section on <a
                        href="nombres.php">numbers</a>). Fractional seconds are
                        allowed. </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="text-indent: 16px;"><span style="color: #ff0000;">You
                must define this value, otherwise the profile is not
                generated.!</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Dimension,</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ExtDimension</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Base
                length of the profile.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Radius</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">You may
                create this variable to force an arched shape for the profile,
                or force its radius.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Angle1</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Left
                angle. 90° by default.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Angle2</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Right
                angle. 90° by default.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span class="f_Variables">X0,
                X1</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Y0, Y1</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Position
                of each end of the profile (0,0 is at the bottom left of the
                outer frame). You may change these values to move the
                profile.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">MillingCategory</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Milling
                category of the profile, used for <span
                style="font-family: 'Courier New'; color: #0000ff;">SPECIAL</span>
                <a href="usinages.php">millings</a>. You can dynamically change
                this value.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ArticleWidth,</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ArticleHeight</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Those 2
                variables let you define 2 dimensions which are used to find
                the price of an article with a 2 dimension price table. They
                are also used to replace the <a href="macros___.php">macro
                #2#</a> if it appears in the article description. You must
                define these variables if you need them.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Thickness</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">This
                variable lets you define a value which will replace the <a
                href="macros___.php">macro #3#</a> if it is present in the
                article description. You must define this variable if you need
                it.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">FrameDimension</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Length of
                the outerframe on the side the profile is located.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ProfileIndex</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Index of
                the profile into the <a href="varprofilperipherique.php">global
                peripheral profile variables</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Side</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Side on
                which the profile is located, among values: </p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Variables">Top</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Variables">Bottom</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Variables">Left</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Variables">Right</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Variables">TopLeft</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Variables">TopRight</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Variables">Sill</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">SawId</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">This
                variable lets you dynamically reassign the profile to a
                different saw (e.g. for special cutting angles). You must
                define this variable if you need it.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DeliveryPreparation</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">This
                variable lets you dynamically change the setting which decides
                of the printing of the article on delivery preparation
                documents. You must define this variable if you need it.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">SimpleFactDoc</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">This
                variable lets you dynamically change the setting which decides
                of the printing of the article on simplified factory documents.
                You must define this variable if you need it.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">CustomerDoc</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">This
                variable lets you dynamically change the setting which decides
                of the printing of the article on customer documents. You must
                define this variable if you need it.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">QualityControl</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">This
                variable lets you dynamically change the setting which decides
                of the printing of the article on quality control documents.
                You must define this variable if you need it.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Width</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Width of
                the frame on which the profile is located.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Heigth</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Heigth of
                the frame on which the profile is located.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">CrossSectionPosition</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">This
                variable is used only when generating cross-sections. It tells
                you the horizontal or vertical position of the section. Note
                that if the window has several cross sections, it will be
                recomputed once per section, so that this variable always has a
                single value.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">VarLin</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">You may
                assign a value to this variable; the content of the variable is
                stored into Var field of table Lin.dbf, when the component is
                exported.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">TechnicalMargin</span></p>
              </td>
              <td valign="middle" width="88"
              style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Used to replace the
                additionnal margin defined into <span
                style="font-weight: bold;">Description</span> tab of the
                concerned frame.</p>

                <p style="margin: 0px 0px 0px 14px;">You need to set it up into
                the first profile page of concerned frame, imperatively, and
                will then affect all tabs (profiles articles labour ...).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">ComponentMargin</span></p>
              </td>
              <td valign="middle" width="88"
              style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Used to replace the
                additionnal margin defined into <span
                style="font-weight: bold;">Description</span> tab of the
                concerned frame.</p>

                <p style="margin: 0px 0px 0px 14px;">The variable should be set
                within the concerned component formula, and will only affect
                this component.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

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
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>WinPro génère toute une série de variables pour vous aidez à
        calculer vos composants de rehausses et seuils. En voici la liste. </p>

        <p> </p>

        <p> </p>

        <p></p>

        <p><span style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p
                class="p_Notes"><span class="f_Notes"
                style="font-weight: bold;">Notes:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Notes">Certaines formules sont suivies
                        par un nombre 1 ou 2 </span><span class="f_Notes">(ex.
                        </span><span class="f_variables">Angle1</span><span
                        class="f_Notes">, </span><span
                        class="f_variables">Angle2</span><span
                        class="f_Notes">). Dans ces cas de figures, 1 est donné
                        pour la valeur à gauche lorsque le cadre est mit à
                        plat, le côté correspondant vers vous. (donc, 1 =
                        gauche du bord bas, droite du bord haut, haut du côté
                        gauche, bas du côté droit).</span></td>
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
                      <td>Le signe <span
                        style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span>
                        vous informe que la variable peut être modifiée par
                        paramétrage.</td>
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
                      <td>Le signe <span
                        style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span>
                        vous informe que la variable doit être initialisée par
                        vous-même.</td>
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
                      <td>La colonne Utilisation indique dans quel(s) onglet(s)
                        les variables sont utilisables:</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p class="p_Notes" style="margin: 0px 0px 0px 48px;"><span
                class="f_Notes" style="font-weight: bold;">P</span><span
                class="f_Notes">= Profils</span></p>

                <p class="p_Notes" style="margin: 0px 0px 0px 48px;"><span
                class="f_Notes" style="font-weight: bold;">A</span><span
                class="f_Notes">= Articles</span></p>

                <p class="p_Notes" style="margin: 0px 0px 0px 48px;"><span
                class="f_Notes" style="font-weight: bold;">M</span><span
                class="f_Notes">= Main d'oeuvre</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#fff7ef"
        border="2"
        style="background-color: #fff7ef; border: solid 3px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p><span
                style="font-weight: bold;">Variable</span></p>
              </td>
              <td width="61" style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Utilisation</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Longueur</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span>
                <span style="font-weight: bold;">PA</span></p>
              </td>
              <td width="553" style="width: 553px; border: solid 1px #c0c0c0;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Profils:</span>
                        Longueur de coupe du profil en cours de calcul. Vous
                        devez définir cette variable vous-même.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="text-indent: 16px;"><span
                style="color: #ff0000;">Vous devez définir cette variable,
                sinon le composant n'est pas consommé!</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Articles:</span>
                        Longueur de l'article vous permettant de définir la
                        dimension qui sera utilisée d'une part pour déterminer
                        le prix de l'article si une grille de prix à une seule
                        dimension lui est attachée, et d'autre part en
                        remplacement de la <a href="macros___.php">macro
                        #2#</a> si celle-ci est présente dans la description de
                        l'article. Cette variable est ignorée si les variables
                        <span class="f_Variables">HauteurArticle</span> et
                        <span class="f_Variables">LargeurArticle</span> sont
                        définies. Vous devez définir cette variable si
                        nécessaire.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Quantite</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span>
                <span style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553" style="width: 553px; border: solid 1px #c0c0c0;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Profils:</span>
                        Nombre de profils identiques à consommer, au format
                        nombre entier naturel.</td>
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
                      <td><span style="font-weight: bold;">Articles:</span>
                        Nombre d'articles identiques à consommer, au format
                        nombre fractionnel.</td>
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
                      <td><span style="font-weight: bold;">Main
                        d'oeuvre:</span> Longueur de l'opération, en secondes.
                        Vous pouvez également utiliser une notation horaire
                        (heures:minutes:secondes ou minutes:secondes - voir la
                        section relative aux <a
                        href="nombres.php">nombres</a>). Les secondes
                        fractionnelles sont autorisées.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="text-indent: 16px;"><span
                style="color: #ff0000;">Vous devez définir cette variable,
                sinon le composant n'est pas consommé!</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Dimension,</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DimensionHT</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Longueur
                de base du profil.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">HauteurProfil</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span>
                <span style="font-weight: bold;">P</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Winpro
                récupére le contenu de cette variable initialisée dans la 1ere
                formule de Profil lors du pré-calcul afin de modifier la
                hauteur du profil périphérique en cours de calcul.</p>

                <p style="text-indent: -1px; margin: 0px 0px 0px 17px;">A
                défaut, Winpro tient compte de la Hauteur définie dans l'onglet
                description ou tient compte de la hauteur saisie par
                l'utilisateur dans le cas où nous sommes en présence d'un
                profil périphérique dont la case Hauteur variable est
                cochée.</p>

                <p style="text-indent: -1px; margin: 0px 0px 0px 17px;"><span
                style="color:#ff0000">Lorsque la case "Hauteur variable" est
                activée, Winpro ne récupére pas le contenu de cette
                variable.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Rayon</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span>
                <span style="font-weight: bold;">P</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Créez
                cette variable pour imposer une forme cintrée sur un profil, ou
                pour redéfinir le rayon de cintrage du cintre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Angle1</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span>
                <span style="font-weight: bold;">P</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Angle
                gauche du profil. Contient 90° par défaut.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Angle2</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span>
                <span style="font-weight: bold;">P</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Angle
                droite du profil. Contient 90° par défaut.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span class="f_Variables">X0,
                X1</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Y0, Y1</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span>
                <span style="font-weight: bold;">P</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Position
                de chaque extrémité du profil (le point 0,0 est en bas à gauche
                du dormant). Modifiez ces variables pour repositionner le
                profil.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span class="f_Variables">X0,
                X1</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Y0, Y1</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span>
                <span style="font-weight: bold;">P</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Position
                de chaque extrémité du profil (le point 0,0 est en bas à gauche
                du dormant). Modifiez ces variables pour repositionner le
                profil.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">CategorieUsinage</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span>
                <span style="font-weight: bold;">P</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Catégorie
                d'usinage du profil, utilisé pour les instructions d'<span
                style="color: #0000ff;"><a href="usinages.php">usinages</a>
                </span><span class="f_Variables">SPECIAL</span>. Vous pouvez
                changer dynamiquement cette valeur.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">CategorieUsinage</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span>
                <span style="font-weight: bold;">PA</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Ces 2
                variables permettent de définir les dimensions à rechercher
                dans une éventuelle grille de prix. Elles sont aussi utilisée
                pour remplacer la <span style="color: #0000ff;"><a
                href="macros___.php">macro #2#</a></span> lorsque celle ci est
                utilisée dans la description de l'article. Ces variables sont à
                définir en cas de besoin.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Epaisseur</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span>
                <span style="font-weight: bold;">PA</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Cette
                variable permet de définir la valeur qui viendra remplacer la
                <span style="color: #0000ff;"><a href="macros___.php">macro
                #3#</a>, </span>lorsque celle ci est présente dans la
                description de l'article.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DimensionDormant</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Longueur
                du dormant sur le côté où le profil est positionné.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">NumeroProfil</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Index du
                profil dans les <a href="varprofilperipherique.php">variables
                global de profils périphériques</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Bord</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Bord du
                dormant sur lequel est situé le profil, parmi ces valeurs:</p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Variables">Haut</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Variables">Bas</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Variables">Gauche</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Variables">Droite</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Variables">HautGauche</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Variables">HautDroite</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Variables">Seuil</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">NumeroScie</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span>
                <span style="font-weight: bold;">P</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Cette
                variable vous permet de modifier dynamiquement le numéro de
                scie liée au profil. Vous devez définir vous-même cette
                variable si vous désirez modifier le numéro de scie.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">PrepaLivraison</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span>
                <span style="font-weight: bold;">PA</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Cette
                variable vous permet de modifier dynamiquement l'impression du
                profil sur les documents de préparation de livraison. Lorsque
                l'on utilise cette variable, il faut impérativement décocher la
                case "Préparation livraison" de la fiche article. Vous devez
                définir vous-même cette variable si vous désirez modifier ce
                paramètre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">PlanSimplifie</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span>
                <span style="font-weight: bold;">PA</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Cette
                variable vous permet de modifier dynamiquement l'impression du
                composant sur les plans d'atelier simplifiés. Lorsque l'on
                utilise cette variable, il faut impérativement décocher la case
                "Plan d'atelier simplifié" de la fiche article. Vous devez
                définir vous-même cette variable si vous désirez modifier ce
                paramètre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DocClient</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span>
                <span style="font-weight: bold;">PA</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Cette
                variable vous permet de modifier dynamiquement l'impression du
                profil sur les documents client. Lorsque l'on utilise cette
                variable, il faut impérativement décocher la case "Documents
                client" de la fiche article. Vous devez définir vous-même cette
                variable si vous désirez modifier ce paramètre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">CtrlQualite</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span>
                <span style="font-weight: bold;">PA</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Cette
                variable vous permet de modifier dynamiquement l'impression du
                profil sur les documents de contrôle qualité. Lorsque l'on
                utilise cette variable, il faut impérativement décocher la case
                "Contrôle qualité" de la fiche article. Vous devez définir
                vous-même cette variable si vous désirez modifier ce
                paramètre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Largeur</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Largeur du
                cadre sur lequel le profil se trouve.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Hauteur</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Hauteur du
                cadre sur lequel le profil se trouve.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">PosCoupe</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Cette
                variable est utilisée seulement lorsque l'on génère des vues en
                coupe, et sert à définir la position horizontale et verticale
                de la coupe. A noter que si le châssis contient plusieurs vues
                en coupes, la fonction sera recalculée pour chaque coupe, afin
                de toujours avoir une valeur unique.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">VarLin</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span>
                <span style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Vous
                pouvez assigner par formule une valeur à cette variable; cette
                valeur sera stockée dans la table <span
                style="font-weight: bold;">Lin.dbf</span>, champ <span
                style="font-weight: bold;">Var</span>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">MargeTechnique</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span>
                <span style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">S'utilise
                en remplacement de la marge supplémentaire définie dans
                l'onglet <span style="font-weight: bold;">Description</span> du
                cadre. </p>

                <p style="margin: 0px 0px 0px 14px;">Elle doit être paramétrée
                dans la première page profil du cadre impérativement, et
                affectera donc tous les onglets (profils articles MO...).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">MargeComposant</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span>
                <span style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">S'utilise
                en remplacement de la marge supplémentaire définie dans
                l'onglet <span style="font-weight: bold;">Description</span> du
                cadre. </p>

                <p style="margin: 0px 0px 0px 14px;">La variable devra être
                initialisée dans la formule du composant concerné, et
                n'affectera que celui ci.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p> </p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
