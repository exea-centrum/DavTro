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
if(top.frames.length==0) { top.location.href="index.php?drmvariables.php"; }
else { parent.quicksync('a5.2.5'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Variables</title>
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
        href="drmquestions.php">Previous</a>  <a href="drmprofils.php">Next</a>
        </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p class="p_Textestd"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">WinPro generates several
        variables to help you compute the frame's components. They are listed
        below. </span></p>

        <p> </p>

        <p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p><span
                style="text-decoration: underline;">Notes:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Some formulas, when applying to the sides of the
                        frame, are followed by the numbers 1 or 2 (e.g. <span
                        class="f_Variables">Angle1</span>, <span
                        class="f_Variables">Angle2</span>). In such cases, 1 is
                        the left end of the side when the frame is laid flat,
                        with the corresponding side towards you (so, 1 = left
                        of the bottom side, right of the top side, top of the
                        left side, bottom of the right side). </td>
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
                        style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span>
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
                        style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span>
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

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">P</span> = Profiles</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">A</span> = Articles</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">a</span> = Corner articles</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">L</span> = Labour</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">l</span> = Corner labour</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">D</span> = Drawings</p>
               </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Variables</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Usage</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Length</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="520" style="width: 520px; border: solid 1px #c0c0c0;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">P:</span> Profiles
                        cut length.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #ff0000;">You must define this value, otherwise
                the profile is not generated!</span></p>

                <p> </p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Aa:</span> Length of
                        the article, used to define its price if a one
                        dimension price table is tied to the article. It is
                        also used to define the value which will replace <a
                        href="macros___.php">macro #2#</a> if this macro is
                        used in the article definition. You must define this
                        value if you need it. </td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Quantity</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAaL</span></p>
              </td>
              <td width="520" style="width: 520px; border: solid 1px #c0c0c0;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">P: </span>Number of
                        identical profiles to cut. This must be an integer
                        number.</td>
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
                      <td><span style="font-weight: bold;">Aa:</span> Number of
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
                      <td><span style="font-weight: bold;">Ll:</span> Length of
                        the operation, in seconds. You can also use a time
                        notation (hour:minutes:seconds or minutes:seconds - see
                        the section on <a href="nombres.php">numbers</a>).
                        Fractional seconds are allowed.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #ff0000;">You must define this value, otherwise
                the component is not generated!</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Dimension</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">ExtDimension</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-size: 5pt;"> </span></p>

                <p style="margin: 0px 0px 0px 13px;">Length of the current side
                of the frame.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Dimension1</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Dimension2</span><span
                class="f_Variables"></span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">al</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p><span
                style="font-size: 5pt;"> </span></p>

                <p style="margin: 0px 0px 0px 13px;">Length of the edge from
                each side of the corner.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Angle1</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Angle2</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cutting angle of each end of
                the profile. If this is a miter assembly, this is half the
                angle of the corner.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Angle</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">al</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Angle of the current
                corner.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span class="f_Variables">X0,
                Y0</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">X1, Y1</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Position of each end of the
                profile (0,0 is at the bottom left of the outer frame). You may
                change these values to move the profile.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">MillingCategory</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Milling category of the
                profile, used for <span
                style="font-family: 'Courier New'; color: #0000ff;">SPECIAL
                </span><a href="usinage.php">millings</a>. You can dynamically
                change this value.</p>

                <p style="margin: 0px 0px 0px 13px;"><a
                href="prfdescription.php">Default value is defined at profile
                level</a>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">SmallerHeight</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Small height of the profile.
                You may alter this value in the first profile formula
                (independently for each side); WinPro will use it as the actual
                small height for the profile.</p>

                <p style="margin: 0px 0px 0px 13px;"> </p>

                <div
                style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table align="center" cellspacing="0" cellpadding="0"
                bgcolor="#bfd7bf" border="0"
                style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
                  <tbody>
                    <tr valign="top" align="left">
                      <td width="318"
                      style="width: 318px; border: solid 1px #000000;"><p
                        style="margin: 0px 0px 0px 13px;"><span
                        style="font-weight: bold; text-decoration: underline;">Note</span><span
                        style="text-decoration: underline;">:</span></p>

                        <p style="margin: 0px 0px 0px 13px;">Variable section
                        must <span
                        style="font-weight: bold; color: #ff0000;">imperatively
                        </span>be set up within the first profile page of
                        concerned frame, otherwise they are not computed !</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">LargerHeight</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Total height of the profile.
                You may alter this value in the first profile formula
                (independently for each side); WinPro will use it as the actual
                total height for the profile. Attention, WinPro needs that the
                difference between <span class="f_variables">SmallerHeight
                </span>and<span class="f_variables">LargerHeight </span>is
                constant on each side of the frame (and consistent with
                transoms).</p>

                <p style="margin: 0px 0px 0px 13px;"> </p>

                <div
                style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table align="center" cellspacing="0" cellpadding="0"
                bgcolor="#bfd7bf" border="0"
                style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
                  <tbody>
                    <tr valign="top" align="left">
                      <td width="318"
                      style="width: 318px; border: solid 1px #000000;"><p
                        style="margin: 0px 0px 0px 13px;"><span
                        style="font-weight: bold; text-decoration: underline;">Note</span><span
                        style="text-decoration: underline;">:</span></p>

                        <p style="margin: 0px 0px 0px 13px;">Variable section
                        must <span
                        style="font-weight: bold; color: #ff0000;">imperatively
                        </span>be set up within the first profile page of
                        concerned frame, otherwise they are not computed !</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">ArticleWidth</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">ArticleHeight</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Those 2 variables let you
                define 2 dimensions which are used to find the price of an
                article with a 2 dimension price table. They are also used to
                replace the <a href="macros___.php">macro #2#</a> if it appears
                in the article description. You must define these variables if
                you need them.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Thickness</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable lets you define
                a value which will replace the <a href="macros___.php">macro
                #3#</a> if it is present in the article description. You must
                define this variable if you need it.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">SawId</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable lets you
                dynamically reassign the profile to a different saw (e.g. for
                special cutting angles). You must define this variable if you
                need it.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">DeliveryPreparation</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable lets you
                dynamically change the setting which decides of the printing of
                the article on delivery preparation documents. You must define
                this variable if you need it.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">SimpleFactDoc</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable lets you
                dynamically change the setting which decides of the printing of
                the article on simplified factory documents. You must define
                this variable if you need it.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">CustomerDoc</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable lets you
                dynamically change the setting which decides of the printing of
                the article on customer documents. You must define this
                variable if you need it.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">QualityControl</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable lets you
                dynamically change the setting which decides of the printing of
                the article on quality control documents. You must define this
                variable if you need it.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">ShortFrame</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">If the window has an empty
                part, the left and/oror right frame profile may be shorter.
                This variable contains the length by which the profile is
                shortened, i.e. the height of the empty part.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Assembly1</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Assembly2</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">These variables contain the
                assembly mode on each end of the profile. This may be one of
                these values:</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">Miter</span>: 45° assembly.
                        <img src="img/clip0095.gif" width="23" height="15"
                        border="0" alt="clip0095"></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">StraightLong</span>: 90°
                        assembly; the profile continues to the corner. <img
                        src="img/clip0125.gif" width="23" height="15" border="0"
                        alt="clip0125"></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">StraightShort</span>: 90°
                        assembly; the profile stops at the other profile in the
                        corner. <img src="img/clip0131.gif" width="23" height="15"
                        border="0" alt="clip0131"> </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">NoAssembly</span>: No
                        assembly - e.g. lower end of a frame with a door.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Assembly</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">al</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable contains the
                assembly mode of the corner. This may be one of these
                values:</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">Miter</span>: 45°
                      assembly.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">StraightLong</span>: 90°
                        assembly; the profile continues to the corner.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">StraightShort</span>: 90°
                        assembly; the profile stops at the other profile in the
                        corner.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">NoAssembly</span>: No
                        assembly - e.g. lower end of a frame with a door.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FalseArchType</span><span
                style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"></span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable returns a
                numeric value corresponding to the false arch type input:</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">0</span>: Standard outer frame (no false
                arch).</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">1</span>: Outer frame is rectangular
                externally.</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">2</span>: Outer frame is fully rectangular,
                sash frames are rectangular externally.</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">3</span>: Outer frame is fully rectangular,
                sash frames are rectangular externally, glazings are
                rectangular externally.</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">4</span>: Outer frame is squared out with a
                panel.</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">5</span>: Window retains its shape: glass
                is covered to show a non rectangular shape.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FalseArchShape</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">If the window has a false
                arch, this variable contains its shape:</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">-1</span>: No false arch of type 4 or 5
                (see variable FalseArchType)</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">0</span>: Flat bow type 5</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">1</span>: Half flat bow left type 5</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">2</span>: Half flat bow right type 5</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">3</span>: Full bow type 5</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">4</span>: Half full bow left type 5</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">5</span>: Half full bow right type 5</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">6</span>: Basket handle type 5</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">7</span>: Half basket handle left type 5</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">8</span>: Half basket handle left type 5</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">9</span>: Ellipse type 5</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FalseArchHeight</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Height of the false arch for
                shapes 0, 1, 2, 6, 7, 8, as described above.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FalseArchExtraHeight</span><span
                style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"></span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 5pt;"></span><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">When <span
                class="f_Variables">FalseArchType</span> is worth <span
                class="f_Variables">4</span>, this variable contains the
                extenson height toward top side for the false arch.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">ProfileMinThickness</span><span
                style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"></span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">When <span
                class="f_Variables">FalseArchType</span> is worth <span
                class="f_Variables">1</span>,<span class="f_Variables">2</span>
                or <span class="f_Variables">3</span>, this variable returns
                the minimum thickness of top profile (<span
                class="f_Variables">1</span>: outer frame only,<span
                class="f_Variables">2</span> and <span
                class="f_Variables">3</span>: sash frame only).</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">ProfileLeftThickness</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">When <span
                class="f_Variables">FalseArchType</span> is worth <span
                class="f_Variables">1</span>,<span class="f_Variables">2</span>
                or <span class="f_Variables">3</span>, this variable returns
                the maximum thickness of top profile onto its left edge (<span
                class="f_Variables">1</span>: outer frame only, <span
                class="f_Variables">2</span> and <span
                class="f_Variables">3</span>: sash frame only).</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">ProfileRightThickness</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">When <span
                class="f_Variables">FalseArchType</span> is worth <span
                class="f_Variables">1</span>,<span class="f_Variables">2</span>
                or <span class="f_Variables">3</span>, this variable returns
                the maximum thickness of top profile onto its right edge (<span
                class="f_Variables">1</span>: outer frame only, <span
                class="f_Variables">2</span> and <span
                class="f_Variables">3</span>: sash frame only).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FalseArchCateg</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the numeric value of
                the category field of the <a href="fauxcintre.php">false
                arch</a>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Width</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">ExtWidth</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Both variables contain the
                total width of the frame.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">TopWidth</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Width of top side of the
                outer frame.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">BottomWidth</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Width of bottom side of the
                outer frame.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">RevealWidth</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Reveal width of the frame
                (width between walls).</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Height</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">ExtHeight</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Both variables contain the
                total height of the frame.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">LeftHeight</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Height of left side of the
                outer frame.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">RightHeight</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Height of right side of the
                outer frame.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">RevealHeight</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Reveal height of the frame
                (height between walls).</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">TopLeftLength</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Length of the top left
                segment of the frame.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">TopRightLength</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Length of the top right
                segment of the frame.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">ProfileThickness</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Smaller height of the profile
                (equal to <span class="f_Variables">SmallerHeight</span>, but
                not changeable by the user).</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">ProfileThickness1</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">ProfileThickness2</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520" style="width: 520px; border: solid 1px #c0c0c0;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">PAL : </span>Returns
                        the <span class="f_Variables">SmallerHeight</span> of
                        outer frame profiles, from each side of current side,
                        <span style="color: #ff0000;">as long as the adjacent
                        profile is an outer frame</span>.</td>
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
                      <td><span style="font-weight: bold;">al : </span>Returns
                        the <span class="f_Variables">SmallerHeight</span> of
                        outer frame profiles composing the current computed
                        corner. <span style="color: #ff0000;">This only
                        concerns corners composed by assembling 2 outer
                        frames.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Chamber</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Profile's chamber id, as
                explained on the <a href="drmdescription.php">Description</a>
                page.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Chamber1</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Chamber2</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520" style="width: 520px; border: solid 1px #c0c0c0;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">PAL : </span>Chamber
                        id of the profiles on each end of the current
                      profile.</td>
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
                      <td><span style="font-weight: bold;">al : </span>Chamber
                        id of the profiles on each side of the corner.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Shape</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Shape of the current side,
                which may be:</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">Straight</span>: Straight
                        segment.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">Bow</span>: Simple bow
                        segment (one center, one radius).</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">BasketHandleShape</span>:
                        multi-bow segment (more than one center and/or
                      radius).</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FrameXCenter</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FrameYCenter</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">These variables hold the
                coordinates the arc for bow shaped frames. Point 0,0 is at the
                bottom left corner of the outer frame. These variables are not
                created for other kinds of segments.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FrameRadius</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable holds the
                radius of the arc for bow shaped frames. This variable is not
                created for other kinds of segments.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Radius</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">For segments where <span
                class="f_Variables">Shape=Bow</span>, holds the radius of the
                arc, and returns <span class="f_Variables">0</span> otherwise.
                This variable is not created for other kinds of segments.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FrameOpening</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">When <span
                class="f_Variables">Shape </span>returns <span
                class="f_Variables">Bow</span>, the variable will store, into
                degrees, the opening angle value for the arc of circle of the
                arched frame, returns <span class="f_Variables">0</span>
                otherwise.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Opening</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">When <span
                class="f_Variables">Shape </span>returns <span
                class="f_Variables">Bow</span> and current side computed is the
                top side, the variable will store into degrees the opening
                angle value for the arc of circle of the arched frame, returns
                <span class="f_Variables">0</span> otherwise.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FrameStartAngle</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FrameEndAngle</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">When <span
                class="f_Variables">Shape </span>returns <span
                class="f_Variables">Bow</span>, the variables will store, into
                degrees, the start and end angles of the circle of arc for a
                bow, returns <span class="f_Variables">0</span> otherwise.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">StartAngle</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">EndAngle</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">When <span
                class="f_Variables">Shape </span>returns <span
                class="f_Variables">Bow</span> and the current computed side is
                the top side, the variables will store, into degrees, the start
                and end angles of the circle of arc for a bow, returns <span
                class="f_Variables">0</span> otherwise.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">NBows</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">When <span
                class="f_Variables">Shape </span>returns <span
                class="f_Variables">Bow</span> or <span
                class="f_Variables">BasketHandleShape</span>, the variable will
                store the number of arcs in the bow, and returns <span
                class="f_Variables">0</span> in case of straight segment.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FrameXCenter[]</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FrameYCenter[]</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">When <span
                class="f_Variables">Shape </span>returns <span
                class="f_Variables">Bow</span> or <span
                class="f_Variables">BasketHandleShape</span>, these variables
                hold the coordinates of each segment of arc for shaped frames,
                and returns <span class="f_Variables">0</span> in case of
                straight segment.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FrameRadius[]</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">When <span
                class="f_Variables">Shape </span>returns <span
                class="f_Variables">Bow</span> or <span
                class="f_Variables">BasketHandleShape</span>, the variable will
                store, into degrees, the radius of each circle of arc for the
                different bow segments, returns <span
                class="f_Variables">0</span> otherwise.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FrameOpening[]</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">When <span
                class="f_Variables">Shape </span>returns <span
                class="f_Variables">Bow</span> or <span
                class="f_Variables">BasketHandleShape</span>, the variable will
                store, into degrees, the opening angle value of each arc of
                circle for the bow segment, returns <span
                class="f_Variables">0</span> otherwise.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FrameStartAngle[]</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FrameEndAngle[]</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">When <span
                class="f_Variables">Shape </span>returns <span
                class="f_Variables">Bow</span> or <span
                class="f_Variables">BasketHandleShape</span>, the variables
                will store, into degrees, the start and end angles of each
                arched segment into the bow, returns <span
                class="f_Variables">0</span> otherwise.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">OuterFrameShape</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">The shape of the frame. It
                can contain one of these values:</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Rectangle</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Trapezium</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">RightAngledTriangle</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">TruncatedCorner</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Pentagon</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">RightAngledTrapezium</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Bow</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">TruncatedBow</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">RoundedCorner</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Triangle</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Quadrilateral</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">SimpleTrapezium</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">TruncatedCorner2</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">TruncatedTrapezium</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">BasketHandle</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">TruncatedBasketHandle</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">BullsEye</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">FullBasketHandle</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">HalfBasketHandle</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">BasketHandle5</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">TruncatedBasketHandle5</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">FullBasketHandle5</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">HalfBasketHandle5</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables"> </span></p>

                <div
                style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table align="center" cellspacing="0" cellpadding="0"
                bgcolor="#bfd7bf" border="0"
                style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
                  <tbody>
                    <tr valign="top" align="left">
                      <td width="479"
                      style="width: 479px; border: solid 1px #000000;"><p
                        style="margin: 0px 0px 0px 13px;"><span
                        style="font-weight: bold; text-decoration: underline;">Note</span><span
                        style="text-decoration: underline;">:</span></p>

                        <p style="margin: 0px 0px 0px 13px;">When <span
                        class="f_Variables">FalseArchType</span> returns <span
                        class="f_Variables">2</span> or <span
                        class="f_Variables">3</span>, the <span
                        class="f_Variables">OuterFrameShape</span> variable
                        returns systematically <span
                        class="f_Variables">Rectangle</span>.</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="font-family: 'Courier New';"><a
                href="creerforme.php">See drawing of each shape.</a></span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="font-family: 'Courier New';"> </span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">OuterFrameShape2</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -2px; margin: 0px 0px 0px 14px;">When <span
                class="f_Variables">OuterFrameShape</span> is worth <span
                class="f_Variables">Bow</span><span style="color: #000000;">,
                the </span><span class="f_Variables">OuterFrameShape2</span>
                variable returns one of the following value:</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Bow</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">FullBow</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">HalfFullBow</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">FlatBow</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">HalfFlatBow</span></p>

                <p style="text-indent: -2px; margin: 0px 0px 0px 14px;">In any
                other case, <span class="f_Variables">OuterFrameShape2</span>
                returns the same value as <span
                class="f_Variables">OuterFrameShape</span>.</p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="font-family: 'Courier New';"><a
                href="creerforme.php">See drawing of each shape.</a></span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="font-family: 'Courier New';"> </span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FrameVisShape</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la forme déterminée
                par le périmètre du clair vitrage du cadre dormant, en tenant
                compte de la présence d'un faux-cintre. Les valeurs renvoyées
                sont:</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Rectangle</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Trapezium</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">RightAngledTriangle</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">TruncatedCorner</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Pentagon</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">RightAngledTrapezium</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Bow</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">TruncatedBow</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">FullBow</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">HalfFullBow</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">FlatBow</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">HalfFlatBow</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">RoundedCorner</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Triangle</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Quadrilateral</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">SimpleTrapezium</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">TruncatedCorner2</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">TruncatedTrapezium</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">BasketHandle</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">TruncatedBasketHandle</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">BullsEye</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">FullBasketHandle</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">HalfBasketHandle</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">BasketHandle5</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">TruncatedBasketHandle5</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">FullBasketHandle5</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">HalfBasketHandle5</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FrameOutShape</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the shape determined
                with the outside perimeter of the outer frame, with considering
                a false arch installation. Returned values are the same as for
                variable <span class="f_Variables">FrameVisShape</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FrameGlBeadShape</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the shape determined
                with the bead perimeter inside of the outer frame, with
                considering a false arch installation. Returned values are the
                same as for variable <span
                class="f_Variables">FrameVisShape</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">SegmentCount</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Number of segments in the
                frame (4 for a rectangle or a trapezium, 3 for a triangle,
                ...).</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">LeftTransom</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable is used only
                for the bottom part of the frame, when it holds a door or a
                void part. It contains <span class="f_Variables">True()</span>
                if the bottom profile connects to a transom at its left end,
                or, in other words, if there is a door or a void part at the
                left end of the profile.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">RightTransom</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable is used only
                for the bottom part of the frame, when it holds a door or a
                void part. It contains <span class="f_Variables">True()</span>
                if the bottom profile connects to a transom at its right end,
                or, in other words, if there is a door or a void part at the
                right end of the profile.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">HasRollerShutter</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable contains <span
                class="f_Variables">True()</span> if the window has an
                integrated roller shutter.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">TopProfile</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">BottomProfile</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">LeftProfile</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">RightProfile</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Total thickness of peripheral
                profiles on each side of the frame. <span
                style="color: #ff0000;">Attention : door sills are not
                considered here!</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">HasTransom</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                class="f_Variables">True()</span> if at least one transom
                connects to the current side of the frame.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">DoorToLeft</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                class="f_Variables">True()</span> if the frame contains a door
                touching the left side.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">DoorToRight</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                class="f_Variables">True()</span> if the frame contains a door
                touching the right side.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">SimpleDoor</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                class="f_Variables">True()</span> if the frame contains a door
                touching both sides.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">HasDoor</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                class="f_Variables">True()</span> if the frame contains a
                door.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">HasVoidPart</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                class="f_Variables">True()</span> if the frame contains void
                part.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Sill</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Height of the sill (0 if no
                sill).</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Perimeter</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Frame's perimeter.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Side</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Current side of the frame.
                This variable may contain one of these values:</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Top</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Bottom</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Left</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Right</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">TopLeft</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">TopRight</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">AboveVoid</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Returns <span
                class="f_Variables">True()</span> when the current side is
                above an void part.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FrameAboveEmptyPart</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Returns <span
                class="f_Variables">True()</span> when the current side is
                shrinked by an empty part with an outerframe above. returns
                <span class="f_Variables">False()</span> otherwise.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">TransomAboveEmptyPart</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Returns <span
                class="f_Variables">True()</span> when the current side is
                shrinked by an empty part with an transom above. returns <span
                class="f_Variables">False()</span> otherwise.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">RightCornerEmpty</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Returns <span
                class="f_Variables">True()</span> when a void part is located
                into the bottom right corner of the windows.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">LeftCornerEmpty</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Returns <span
                class="f_Variables">True()</span> when a void part is located
                into the bottom left corner of the windows.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">CrossSectionPosition</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">This variable is used only
                when generating cross-sections. It tells you the horizontal or
                vertical position of the section. Note that if the window has
                several cross sections, it will be recomputed once per section,
                so that this variable always has a single value.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">VarLin</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">VarLin2</span></p>

                <p class="p_Textestd"><span class="f_Textestd">     
                to</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Varlin6</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">You may assign a value to
                those variables for each component ; the content of the
                variables are stored into respective Var, Var2 to Var6 fields
                of table Lin.dbf, when the component is exported.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">View</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">D</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 12px;">Returns
                <span class="f_Variables">FromInside</span> or <span
                class="f_Variables">FromOutside</span> according the view side
                of the drawing currently printed or displayed.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">ExtFinishing</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Retuns the outside <a
                href="finition.php">finishing</a> category of the outer
                frame.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">IntFinishing</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Retuns the inside <a
                href="finition.php">finishing</a> category of the outer
                frame.</p>
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
                style="font-weight: bold;">PAaLl</span></p>
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
                style="font-weight: bold;">PAaLl</span></p>
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

        <p><span style="font-size: 5pt;"> </span></p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="179"
                style="width: 179px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Segmentation </span></p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">variables</span></p>
              </td>
              <td width="87" style="width: 87px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Usage</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="179"
                style="width: 179px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">SubSegmentsCount</span></p>
              </td>
              <td width="87" style="width: 87px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Number of sub-segments in a
                segmented profile (on sides with a reverse openings or transoms
                through the frame).</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="179"
                style="width: 179px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">SegmentIndex</span></p>
              </td>
              <td width="87" style="width: 87px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">In case of segmented outer
                frame, it is necessary to know which segment index is currently
                computed before validating computation using instruction <span
                class="f_Variables">Apply</span>. The variable is only suitable
                for reverse openings or transoms through the frame features.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="179"
                style="width: 179px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">SegmentType[]</span></p>
              </td>
              <td width="87" style="width: 87px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Type of each sub-segment: </p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&bull;</span></td>
                      <td><span class="f_Variables">Normal</span></td>
                    </tr>
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
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&bull;</span></td>
                      <td><span class="f_Variables">Inverse</span></td>
                    </tr>
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
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&bull;</span></td>
                      <td><span class="f_Variables">DsBattee </span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="margin: 0px 0px 0px 12px;">The variable is only
                suitable for reverse openings or transoms through the frame
                features.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="179"
                style="width: 179px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">SegmentDim[]</span></p>
              </td>
              <td width="87" style="width: 87px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Length of each subsegment.
                The variable is only suitable for reverse openings or transoms
                through the frame features.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="179"
                style="width: 179px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">SegmentAssembly1 []</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">SegmentAssembly2 []</span></p>
              </td>
              <td width="87" style="width: 87px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Assembly mode of each
                sub-segment. This can be one of the following values:</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">Miter</span>: 45° assembly.
                        <img src="img/clip0095.gif" width="23" height="15"
                        border="0" alt="clip0095"></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">StraightLong</span>: 90°
                        assembly; the profile continues to the corner. <img
                        src="img/clip0125.gif" width="23" height="15" border="0"
                        alt="clip0125"></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">StraightShort</span>: 90°
                        assembly; the profile stops at the other profile in the
                        corner. <img src="img/clip0131.gif" width="23" height="15"
                        border="0" alt="clip0131"> </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">NoAssembly</span>: No
                        assembly - e.g. lower end of a frame with a door.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">BetweenSegments</span><span
                        style="color: #000000;">: when 2 segments are assembled
                        end to end.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="179"
                style="width: 179px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">TransomIndex1 []</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">TransomIndex2 []</span></p>
              </td>
              <td width="87" style="width: 87px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Index into the <a
                href="vartraverse.php">global transom variables</a>, for each
                end of the sub-segment. Those return <span
                class="f_Variables">0</span> in case of assembly different than
                <span class="f_Variables">BetweenSegments</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="179"
                style="width: 179px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">SegmentX0 []</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">SegmentX1 []</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">SegmentY0 []</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">SegmentY1 []</span></p>
              </td>
              <td width="87" style="width: 87px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Coordinates of each end of
                each sub-segment. Point 0,0 is at the lower left corner of the
                outer frame.</p>
              </td>
            </tr>
			</tbody>
        </table>
        </div>
        <p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>

        <p style="text-align: center;"> </p>

        <p style="text-align: center;"><span
        style="font-weight: bold;"> </span></p>

        <p style="text-align: center;"> </p>

        <p style="text-align: center;"> </p>

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
      <td align="left"><p class="p_Textestd"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Vous disposez de
        variables générées par Winpro pour le calcul des composants du cadre
        dormant. La liste de ces variables est donnée ci-dessous.</span></p>

        <p> </p>

        <p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p><span
                style="text-decoration: underline;">Notes:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Pour les formules appliquées aux côtés du dormant,
                        certaines variables sont suivies du chiffre 1 ou 2 (ex.
                        <span class="f_Variables">Assemblage1</span>, <span
                        class="f_Variables">Assemblage2</span>). Dans ce cas,
                        le côté 1 est à gauche du profil, si celui-ci est posé
                        devant vous, extérieur vers le bas (donc, côté 1 =
                        gauche en bas, droite en haut, haut à gauche, bas à
                        droite).</td>
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
                      <td>Le signe <span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span> 
					  vous informe que la variable peut être modifiée par paramétrage.</td>
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
                      <td>Le signe <span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span>
                        vous informe que la variable doit être initialisée par vous-même.</td>
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

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">P</span> = Profils</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">A</span> = Articles</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">a</span> = Pièces d'angle</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">M</span> = Main d'oeuvre</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">m</span> = Main d'oeuvre d'angle</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">D</span> = Dessins</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Variables</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Usage</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Longueur</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="520" style="width: 520px; border: solid 1px #c0c0c0;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">P:</span> Longueur
                        de coupe du profil en cours de calcul. Vous devez
                        définir cette variable vous-même.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #ff0000;">Vous devez définir cette variable,
                sinon le composant n'est pas consommé!</span></p>

                <p> </p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Aa:</span> Longueur
                        de l'article vous permettant de définir la dimension
                        qui sera utilisée d'une part pour déterminer le prix de
                        l'article si une grille de prix à une seule dimension
                        lui est attachée, et d'autre part en remplacement de la
                        <a href="macros___.php">macro #2#</a> si celle-ci est
                        présente dans la description de l'article.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Quantite</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520" style="width: 520px; border: solid 1px #c0c0c0;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">P: </span>Nombre de
                        profils identique à produire. Il doit s'agir d'un
                        nombre entier.</td>
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
                      <td><span style="font-weight: bold;">Aa:</span> Nombre
                        d'articles identiques à produire. Il peut s'agir d'un
                        nombre fractionnaire.</td>
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
                      <td><span style="font-weight: bold;">Mm:</span> Durée de
                        l'opération, exprimée en secondes. Vous pouvez
                        également utilisé une notation en minute:seconde, ou
                        encore en heure:minute:seconde (voir la page d'aide sur
                        les <span style="color: #0000ff;"><a
                        href="nombres.php">nombres</a></span>). Les fractions
                        de seconde sont prises en compte. </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p><span style="color: #ff0000;">Vous devez définir cette
                variable, sinon le composant n'est pas consommé!</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Dimension</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">DimensionHT</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-size: 5pt;"> </span></p>

                <p style="margin: 0px 0px 0px 13px;">Longueur de l'arête du
                coté de dormant en cours de calcul.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Dimension1</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Dimension2</span><span
                class="f_Variables"></span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">am</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p><span
                style="font-size: 5pt;"> </span></p>

                <p style="margin: 0px 0px 0px 13px;">Longueur de l'arête de
                chaque côté du coin.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Angle1</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Angle2</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Angle de coupe de chaque côté
                du profil. Les assemblages à onglet sont pris en compte:
                l'angle du coin du châssis est divisé par deux dans ce cas.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Angle</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">am</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Angle formé par le coin en
                cours de calcul.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span class="f_Variables">X0,
                Y0</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">X1, Y1</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Position de chacune des
                extrémités du profil (le point 0,0 correspond au coin inférieur
                gauche du dormant).</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">CategorieUsinage</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Catégorie d'usinage de base
                du profil, utilisée par les <a href="usinage.php">usinages de
                type SPECIAL</a>. Vous pouvez modifier dynamiquement cette
                valeur.</p>

                <p style="margin: 0px 0px 0px 13px;"><a
                href="prfdescription.php">La valeur par défaut est définie dans
                le profil</a>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">PetiteHauteur</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Epaisseur du profil, hors
                battée vitrage. Si vous modifiez la valeur de cette variable,
                WinPro en tiendra compte pour faire varier la section du
                profil.</p>

                <p style="margin: 0px 0px 0px 13px;"> </p>

                <div
                style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table align="center" cellspacing="0" cellpadding="0"
                bgcolor="#bfd7bf" border="0"
                style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
                  <tbody>
                    <tr valign="top" align="left">
                      <td width="318"
                      style="width: 318px; border: solid 1px #000000;"><p
                        style="margin: 0px 0px 0px 13px;"><span
                        style="font-weight: bold; text-decoration: underline;">Remarque</span><span
                        style="text-decoration: underline;">:</span></p>

                        <p style="margin: 0px 0px 0px 13px;">Les sections
                        variables doivent <span
                        style="font-weight: bold; color: #ff0000;">impérativement
                        </span>être paramétrées dans la première page formule
                        du cadre concerné, sans quoi elles ne sont pas prises
                        en compte !</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="text-align: center;"> </p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">GrandeHauteur</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Hauteur totale du profil, y
                compris battée vitrage. Si vous modifiez la valeur de cette
                variable, WinPro en tiendra compte pour faire varier la section
                du profil. <span style="color: #ff0000;">Attention, la
                différence entre les variables </span><span
                class="f_Variables">GrandeHauteur</span> <span
                style="color: #ff0000;">et</span> <span
                class="f_Variables">PetiteHauteur</span> <span
                style="color: #ff0000;">doit être identique pour tous les côtés
                du cadre.</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #ff0000;"> </span></p>

                <div
                style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table align="center" cellspacing="0" cellpadding="0"
                bgcolor="#bfd7bf" border="0"
                style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
                  <tbody>
                    <tr valign="top" align="left">
                      <td width="318"
                      style="width: 318px; border: solid 1px #000000;"><p
                        style="margin: 0px 0px 0px 13px;"><span
                        style="font-weight: bold; text-decoration: underline;">Remarque</span><span
                        style="text-decoration: underline;">:</span></p>

                        <p style="margin: 0px 0px 0px 13px;">Les sections
                        variables doivent <span
                        style="font-weight: bold; color: #ff0000;">impérativement
                        </span>être paramétrées dans la première page formule
                        du cadre concerné, sans quoi elles ne sont pas prises
                        en compte !</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="text-align: center;"><span
                style="color: #ff0000;"> </span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Epaisseur</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                définir une valeur qui sera utilisée pour remplacer la <a
                href="macros___.php">macro #3# </a>si celle-ci est présente
                dans la description du profil. Vous devez définir cette
                variable vous-même.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">LargeurArticle</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">HauteurArticle</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Ces deux variables vous
                permettent de définir deux dimensions qui seront utilisées
                d'une part pour déterminer le prix du profil si une grille de
                prix à deux dimensions lui est attachée, et d'autre part en
                remplacement de la <a href="macros___.php">macro #2#</a> si
                celle-ci est présente dans la description du profil. Vous devez
                définir ces variables vous-même.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">NumeroScie</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                modifier dynamiquement le numéro de scie liée au profil. Vous
                devez définir vous-même cette variable si vous désirez modifier
                le numéro de scie.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 8px;"><span
                class="f_Variables">PrepaLivraison</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                modifier dynamiquement l'impression du profil sur les documents
                de préparation de livraison. Lorsque l'on utilise cette
                variable, il faut impérativement décocher la case "Préparation
                livraison" de la fiche article. Vous devez définir vous-même
                cette variable si vous désirez modifier ce paramètre.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">PlanSimplifie</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                modifier dynamiquement l'impression du composant sur les plans
                d'atelier simplifiés. Lorsque l'on utilise cette variable, il
                faut impérativement décocher la case "Plan d'atelier simplifié"
                de la fiche article. Vous devez définir vous-même cette
                variable si vous désirez modifier ce paramètre.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">DocClient</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                modifier dynamiquement l'impression du profil sur les documents
                client. Lorsque l'on utilise cette variable, il faut
                impérativement décocher la case "Documents client" de la fiche
                article. Vous devez définir vous-même cette variable si vous
                désirez modifier ce paramètre.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">CtrlQualite</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                modifier dynamiquement l'impression du profil sur les documents
                de contrôle qualité. Lorsque l'on utilise cette variable, il
                faut impérativement décocher la case "Contrôle qualité" de la
                fiche article. Vous devez définir vous-même cette variable si
                vous désirez modifier ce paramètre.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">DormantRaccourci</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la position sur l'axe
                Y de l'extrémité inférieure du montant de dormant se trouvant
                au-dessus d'une partie vide.</p>

                <p style="margin: 0px 0px 0px 13px;">La valeur est nulle par
                défaut pour les bords non concernés.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Assemblage1</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Assemblage2</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Ces variables contiennent le
                mode d'assemblage de chaque extrémité du profil. Elles peuvent
                contenir l'une des valeurs suivantes: </p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">Onglet</span>: assemblage à
                        onglet. <img src="img/clip0095.gif" width="23" height="15"
                        border="0" alt="clip0095"></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">DroitLong</span>:
                        assemblage en coupe droite; le profil file jusqu'au
                        coin extérieur du cadre. <img src="img/clip0125.gif"
                        width="23" height="15" border="0" alt="clip0125"></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">DroitCourt</span>:
                        assemblage en coupe droite; le profil s'arrête contre
                        le profil adjacent.<img src="img/clip0131.gif" width="23"
                        height="15" border="0" alt="clip0131"> </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">SansAssemblage</span>:
                        aucun assemblage - (p.ex. l'extrémité basse du dormant
                        d'une simple porte)</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Assemblage</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">am</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable renvoie le
                mode d'assemblage de chaque coin. Elle peut contenir l'une des
                valeurs suivantes: </p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">Onglet</span>: assemblage à
                        onglet. </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">DroitLong</span>:
                        assemblage en coupe droite; le profil file jusqu'au
                        coin extérieur du cadre. </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">DroitCourt</span>:
                        assemblage en coupe droite; le profil s'arrête contre
                        le profil adjacent.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">TypeFauxCintre</span><span
                style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"></span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable renvoie un
                numéro correspondant au type de faux cintre saisi:</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">0</span>: Cadre standard (pas de faux
                cintre)</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">1</span>: Extérieur du dormant
                rectangulaire.</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">2</span>: Dormant et extérieur de l'ouvrant
                rectangulaire</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">3</span>: Dormant, ouvrant extérieur et
                battée vitrage extérieure rectangulaire;intérieur ouvrant et
                intérieur parcloses non rectangulaire.</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">4</span>: Ajout d'une extension à
                l'extérieur du dormant.</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">5</span>: Forme châssis inchangée;applique
                sur les vitrages.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FormeFauxCintre</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable contient une
                de ces valeurs numériques faisant référence aux différentes
                formes de l'applique cintrée:</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">-1</span>: Pas de faux-cintre de type 4 ou
                5 (voir variable TypeFauxCintre).</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">0</span>: Cintre plat de type 5</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">1</span>: Demi-cintre plat gauche de type
                5</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">2</span>: Demi-cintre plat droit de type
                5</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">3</span>: Plein cintre de type 5</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">4</span>: Demi-plein cintre gauche de type
                5</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">5</span>: Demi-plein cintre droit de type
                5</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">6</span>: Anse de panier de type 5</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">7</span>: Demi-anse de panier gauche de
                type 5</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">8</span>: Demi-anse de panier droite de
                type 5</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">9</span>: Ovale de type 5</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FlecheFauxCintre</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la valeur de la
                flèche du faux cintrage pour les formes 0, 1, 2, 6, 7 et 8
                décrites ci-dessus.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">HauteurSupplFCtr</span><span
                style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"></span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 5pt;"></span><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">TypeFauxCintre</span> vaut <span
                class="f_Variables">4</span>, cette variable contient la
                hauteur d'extension vers le haut du faux cintrage.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">EpaisseurMinProfil</span><span
                style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"></span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">TypeFauxCintre</span> vaut<span
                style="font-size: 12pt; font-family: 'Times New Roman';"></span><span
                class="f_Variables">1</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,</span><span
                class="f_Variables">2</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">ou
                </span><span class="f_Variables">3</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                cette variable renvoie  l'épaisseur minimum du profil haut
                (</span><span class="f_Variables">1</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">:
                dormant seulement,</span><span
                class="f_Variables">2</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">et
                </span><span class="f_Variables">3</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">:
                ouvrant seulement).</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">EpaisseurGaucheProfil</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">TypeFauxCintre</span> vaut<span
                style="font-size: 12pt; font-family: 'Times New Roman';"></span><span
                class="f_Variables">1</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,</span><span
                class="f_Variables">2</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">ou
                </span><span class="f_Variables">3</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                cette variable renvoie l'épaisseur maximum du profil haut sur
                son côté gauche (</span><span class="f_Variables">1</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">:
                dormant seulement, </span><span
                class="f_Variables">2</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">et
                </span><span class="f_Variables">3</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">:
                ouvrant seulement)</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">EpaisseurDroiteProfil</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">TypeFauxCintre</span> vaut<span
                style="font-size: 12pt; font-family: 'Times New Roman';"></span><span
                class="f_Variables">1</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,</span><span
                class="f_Variables">2</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">ou
                </span><span class="f_Variables">3</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                cette variable renvoie l'épaisseur maximum du profil haut sur
                son côté droit (</span><span class="f_Variables">1</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">:
                dormant seulement, </span><span
                class="f_Variables">2</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">et
                </span><span class="f_Variables">3</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">:
                ouvrant seulement)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">CategFauxCintre</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la valeur numérique
                du champs catégorie de <a href="fauxcintre.php">faux
                cintre</a>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Largeur</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">LargeurHT</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p><span
                style="font-size: 5pt;"> </span></p>

                <p style="margin: 0px 0px 0px 13px;">Renvoient la largeur
                maximum du cadre dormant</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">LargeurHaut</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Largeur du bord haut du cadre
                dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">LargeurBas</span><span
                style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"></span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Largeur du bord bas du cadre
                dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">LargeurTableau</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Largeur tableau du cadre
                dormant = largeur de fabrication du cadre dormant pour laquelle
                sont déduites les pénétrations maçonneries gauche et droite.
                </p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Hauteur</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">HauteurHT</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p><span
                style="font-size: 5pt;"> </span></p>

                <p style="margin: 0px 0px 0px 13px;">Renvoient la hauteur
                maximum du cadre dormant</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">HauteurGauche</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Hauteur du bord gauche du
                cadre dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">HauteurDroite</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Hauteur du bord droite du
                cadre dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">HauteurTableau</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Hauteur tableau du cadre
                dormant = hauteur de fabrication du cadre dormant pour laquelle
                sont déduites les pénétrations maçonneries haute et basse. </p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">LongueurHautGauche</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Longueur du bord haut-gauche
                du cadre dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">LongueurHautDroite</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Longueur du bord haut-droite
                du cadre dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">EpaisseurProfil</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la même valeur que la
                variable <span class="f_Variables">PetiteHauteur</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">EpaisseurProfil1</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">EpaisseurProfil2</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520" style="width: 520px; border: solid 1px #c0c0c0;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">PAM : </span>Renvoie
                        la <span class="f_Variables">PetiteHauteur</span> des
                        profils dormant de part et d'autre du bord en cours de
                        calcul <span style="color: #ff0000;">pour autant que le
                        profil adjacent soit un dormant</span><span
                        style="color: #000000;">.</span></td>
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
                      <td><span style="font-weight: bold;">am : </span> Renvoie
                        la <span class="f_Variables">PetiteHauteur</span> des
                        profils dormant constituant le coin en cours de
                        calcul<span style="color: #ff0000;">. Ne concerne que
                        les coins constitués par l'assemblage de 2
                        dormants</span><span
                      style="color: #000000;">.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Chambre</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Indique le numéro de chambre
                du bord en cours de calcul s'il a été spécifié dans le champ
                adéquat se trouvant dans l'onglet Description du cadre dormant.
                Cette notion est utilisée en aluminium, pour valider les
                assemblages à onglet entre les profils adjacents. </p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Chambre1</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Chambre2</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520" style="width: 520px; border: solid 1px #c0c0c0;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">PAM : </span>Numéro
                        de chambre des profils dormant de part et d'autre du
                        bord en cours de calcul.</td>
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
                      <td><span style="font-weight: bold;">am : </span> Numéro
                        de chambre des profils de part et d'autre du coin en
                        cours de calcul.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Forme</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Forme du bord en cours de
                calcul, la variable prend une de ces valeurs: </p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">Droit</span>: Si le bord
                        n'a pas de rayon de courbure.  </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">Cintre</span>: Si le bord
                        est un simple cintre (un seul rayon de courbure). </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">Anse</span>: Si le bord est
                        cintré en anse de panier (plusieurs rayons et
                      centres).</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">CentreXCadre</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">CentreYCadre</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">Forme </span>renvoie <span
                class="f_Variables">Cintre</span>, les variables contiennent
                les coordonnées du centre de chaque arc de cercle relatifs aux
                différents segments d'arc, sinon elles renvoient <span
                class="f_Variables">0</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">RayonCadre</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">Forme </span>renvoie <span
                class="f_Variables">Cintre</span>, la variable contient le
                rayon de l'arc de cercle du cadre cintré, sinon elle renvoie
                <span class="f_Variables">0</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Rayon</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">Forme </span>renvoie <span
                class="f_Variables">Cintre </span>et que le bord en cours de
                calcul est le haut, la variable contient le rayon de l'arc de
                cercle du cintre, sinon elle renvoie <span
                class="f_Variables">0</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">OuvertureCadre</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">Forme </span>renvoie <span
                class="f_Variables">Cintre</span>, la variable contient, en
                degrés, l'angle d'ouverture de l'arc de cercle du cadre cintré,
                sinon elle renvoie <span class="f_Variables">0</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Ouverture</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">Forme </span>renvoie <span
                class="f_Variables">Cintre</span> et que le bord en cours de
                calcul est le haut, la variable contient, en degrés, l'angle
                d'ouverture de l'arc de cercle du cadre cintré, sinon elle
                renvoie <span class="f_Variables">0</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">AngleDebutCadre</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">AngleFinCadre</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">Forme </span>renvoie <span
                class="f_Variables">Cintre</span>, les variables contiennent,
                en degrés, les angles de début et de fin de l'arc de cercle du
                cintre, sinon elles renvoient <span
                class="f_Variables">0</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">AngleDebut</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">AngleFin</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">Forme </span>renvoie <span
                class="f_Variables">Cintre </span>et que le bord en cours de
                calcul est le haut, les variables contiennent, en degrés, les
                angles de début et de fin de l'arc de cercle du cintre, sinon
                elles renvoient <span class="f_Variables">0</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">NCourbes</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">Forme </span>renvoie <span
                class="f_Variables">Anse</span> ou <span
                class="f_Variables">Cintre</span>, la variable indique le
                nombre effectif de segments d'arc de la partie cintrée ou en
                anse. Renvoie <span class="f_Variables">0</span> si la forme du
                cadre est droite.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">CentreXCadre[]</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">CentreYCadre[]</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;"> </span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">Forme </span>renvoie <span
                class="f_Variables">Anse</span> ou <span
                class="f_Variables">Cintre</span>, les variables contiennent
                les coordonnées du centre de chaque arc de cercle relatifs aux
                différents segments d'arc, sinon elles renvoient <span
                class="f_Variables">0</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">RayonCadre[]</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">Forme </span>renvoie <span
                class="f_Variables">Anse</span> ou <span
                class="f_Variables">Cintre</span>, la variable contient les
                rayons de chaque arc de cercle relatifs aux différents segments
                d'arc, sinon elle renvoie <span
                class="f_Variables">0</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">OuvertureCadre[]</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">Forme </span>renvoie <span
                class="f_Variables">Anse</span> ou <span
                class="f_Variables">Cintre</span>, l'angle d'ouverture de
                chaque arc de cercle dans les segments en anse de panier, sinon
                elle renvoie <span class="f_Variables">0</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">AngleDebutCadre[]</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">AngleFinCadre[]</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">Forme </span>renvoie <span
                class="f_Variables">Anse</span> ou <span
                class="f_Variables">Cintre</span>, les variables contiennent,
                en degrés, les angles de début et de fin de chaque arc de
                cercle des segments en anse de panier, sinon elles renvoient
                <span class="f_Variables">0</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FormeDormant</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Représente la forme du
                dormant. Cette variable peut prendre l'une des valeurs
                suivantes:</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Rectangle</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Trapeze</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">TriangleRectangle</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">CoinCasse</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Pentagone</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">TrapezeRectangle</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Cintre</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">CintreTronque</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">CoinArrondi</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Triangle</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Quadrilatere</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">SimpleTrapeze</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">CoinCasse2</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">TrapezeTronque</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">AnsePanier</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">AnsePanierTronquee</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">OeilDeBoeuf</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">AnsePanierComplete</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">DemiAnsePanier</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">AnsePanier5</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">AnsePanier5Tronquee</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">AnsePanier5Complete</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">DemiAnsePanier5</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables"> </span></p>

                <div
                style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table align="center" cellspacing="0" cellpadding="0"
                bgcolor="#bfd7bf" border="0"
                style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
                  <tbody>
                    <tr valign="top" align="left">
                      <td width="479"
                      style="width: 479px; border: solid 1px #000000;"><p
                        style="margin: 0px 0px 0px 13px;"><span
                        style="font-weight: bold; text-decoration: underline;">Remarque</span><span
                        style="text-decoration: underline;">:</span></p>

                        <p style="margin: 0px 0px 0px 13px;">Lorsque <span
                        class="f_Variables">TypefauxCintre</span> renvoie <span
                        class="f_Variables">2</span> ou <span
                        class="f_Variables">3</span>, la variable <span
                        class="f_Variables">FormeDormant</span> renvoie
                        systématiquement la valeur <span
                        class="f_Variables">Rectangle</span></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="font-family: 'Courier New';"><a
                href="creerforme.php">Voir le dessin de chacune de ces
                formes</a></span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="font-family: 'Courier New';"> </span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FormeDormant2</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -2px; margin: 0px 0px 0px 14px;">Lorsque
                <span class="f_Variables">FormeDormant</span> vaut <span
                class="f_Variables">Cintre</span><span
                style="color: #000000;">, la variable </span><span
                class="f_Variables">FormeDormant2</span> renvoie alors une de
                ces valeurs:</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Cintre</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">PleinCintre</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">DemiPleinCintre</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">CintrePlat</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">DemiCintrePlat</span></p>

                <p style="text-indent: -2px; margin: 0px 0px 0px 14px;">Dans
                tous les autres cas,  <span
                class="f_Variables">FormeDormant2</span> renvoie la même valeur
                que <span class="f_Variables">FormeDormant</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="font-family: 'Courier New';"><a
                href="creerforme.php">Voir le dessin de chacune de ces
                formes</a></span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="font-family: 'Courier New';"> </span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FormeJourDormant</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la forme déterminée
                par le périmètre du clair vitrage du cadre dormant, en tenant
                compte de la présence d'un faux-cintre. Les valeurs renvoyées
                sont:</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Rectangle</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Trapeze</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">TriangleRectangle</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">CoinCasse</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Pentagone</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">TrapezeRectangle</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Cintre</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">CintreTronque</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">PleinCintre</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">DemiPleinCintre</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">CintrePlat</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">DemiCintrePlat</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">CoinArrondi</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Triangle</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Quadrilatere</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">SimpleTrapeze</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">CoinCasse2</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">TrapezeTronque</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">AnsePanier</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">AnsePanierTronquee</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">OeilDeBoeuf</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">AnsePanierComplete</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">DemiAnsePanier</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">AnsePanier5</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">AnsePanier5Tronquee</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">AnsePanier5Complete</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">DemiAnsePanier5</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FormeExtDormant</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la forme déterminée
                par le périmètre hors tout du cadre dormant, en tenant compte
                de la présence d'un faux-cintre. La liste des valeurs renvoyées
                est identique à la variable <span
                class="f_Variables">FormeJourDormant</span> </p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FormeParclDormant</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la forme déterminée
                par le périmètre en rainure parclose du cadre dormant, en
                tenant compte de la présence d'un faux-cintre. La liste des
                valeurs renvoyées est identique à la variable <span
                class="f_Variables">FormeJourDormant</span> </p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">NombreSegments</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie le nombre de segments
                composant le cade dormant.</p>

                <p style="margin: 0px 0px 0px 13px;">(4 pour un rectangle, 3
                pour un triangle)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">TraverseAGauche</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Cette variable ne concerne
                que le bord bas du dormant. Elle renvoie <span
                class="f_Variables">Vrai()</span> lorsque l'extrémité gauche du
                bord en cours de calcul se raccorde à une traverse verticale se
                trouvant à côté d'une porte, ou si le bord en cours de calcul
                se trouve au-dessus d'une partie vide et que l'extrémité gauche
                se raccorde à une traverse verticale. Dans tous les autre cas,
                la variable renvoie <span class="f_Variables">Faux()</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">TraverseADroite</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Cette variable ne concerne
                que le bord bas du dormant. Elle renvoie <span
                class="f_Variables">Vrai()</span> lorsque l'extrémité droite du
                bord en cours de calcul se raccorde à une traverse verticale se
                trouvant à côté d'une porte, ou si le bord en cours de calcul
                se trouve au-dessus d'une partie vide et que l'extrémité de
                droite se raccorde à une traverse verticale. Dans tous les
                autre cas, la variable renvoie <span
                class="f_Variables">Faux()</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">AvecVolet</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Cette variable vaut <span
                class="f_Variables">Vrai()</span> si le châssis contient un
                volet saisi en tant que tel.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">RehausseHaut</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">RehausseBas</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">RehausseGauche</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">RehausseDroite</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p><span
                style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"> </span></p>

                <p style="margin: 0px 0px 0px 12px;">Cumul des épaisseurs des
                profils périphériques placés pour chaque côté du dormant.<span
                style="color: #ff0000;">Attention : les seuils de porte ne sont
                pas pris en compte!</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">AssemblageTraverse</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Vaut <span
                class="f_Variables">Vrai()</span> si au moins une traverse est
                fixée sur le bord en cours de calcul.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">PorteAGauche</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Vaut <span
                class="f_Variables">Vrai()</span> si le bord gauche du dormant
                est en contact direct avec une porte.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">PorteADroite</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Vaut <span
                class="f_Variables">Vrai()</span> si le bord droite du dormant
                est en contact direct avec une porte.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">SimplePorte</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Vaut <span
                class="f_Variables">Vrai()</span> si le dormant contient une
                porte sans imposte latérale ni partie vide.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">ContientPorte</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Vaut <span
                class="f_Variables">Vrai()</span> si le dormant contient une
                porte. Cette variable est également disponible en globale.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">ContientVide</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Vaut <span
                class="f_Variables">Vrai()</span> si le dormant contient une
                partie vide. Cette variable est également disponible en
                globale.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Seuil</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Renvoie l'épaisseur de
                l'éventuel seuil.<span style="color: #ff0000;"></span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Perimetre</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Renvoie la valeur du
                périmètre du cadre dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Bord</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Bord du dormant en cours de
                calcul. Cette variable peut prendre l'une des valeurs
                suivantes:</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Haut</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Bas</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Gauche</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Droite</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">HautGauche</span></p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">HautDroite</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">AuDessusVide</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Renvoie <span
                class="f_Variables">Vrai()</span> lorsque le bord en cours de
                calcul se trouve au-dessus d'une partie vide.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">DormantAuDessusVide</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Renvoie <span
                class="f_Variables">Vrai()</span> lorsque le montant en cours
                de calcul est raccourci par une partie vide pour laquelle nous
                avons demandé un dormant au-dessus. Renvoie <span
                class="f_Variables">Faux()</span> dans tous les autres cas.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">TraverseAuDessusVide</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Renvoie <span
                class="f_Variables">Vrai()</span> lorsque le montant en cours
                de calcul est raccourci par une partie vide pour laquelle nous
                avons demandé une traverse au-dessus. Renvoie <span
                class="f_Variables">Faux()</span> dans tous les autres cas.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">VideDansCoinDroit</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Renvoie <span
                class="f_Variables">Vrai()</span> lorsqu'une partie vide est
                logée dans le coin inférieur droit de la menuiserie.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">VideDansCoinGauche</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Renvoie <span
                class="f_Variables">Vrai()</span> lorsqu'une partie vide est
                logée dans le coin inférieur gauche de la menuiserie.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">PosCoupe</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Cette variable n'est utilisée
                que dans le contexte des vues en coupe. Elle vous permet de
                connaître la position de la coupe verticale ou horizontale.
                (N.B.:Si le châssis comporte plusieurs coupes, le châssis est
                recalculé complètement pour chaque coupe)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">VarLin</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">VarLin2</span></p>

                <p class="p_Textestd"><span class="f_Textestd">     
                à</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Varlin6</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Vous pouvez assigner une
                valeur à ces variables pour chaque composant ; le contenu de
                ces variables sont notés dans les champs Var, Var2 à Var6 de la
                table Lin.dbf, si le composant y est exporté.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Vue</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">D</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 12px;">Renvoie
                <span class="f_Variables">VueInterieure</span> ou <span
                class="f_Variables">VueExterieure</span> en fonction de la vue
                du dessin en cours d'impression ou d'affichage.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Finition</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Renvoie la catégorie de la <a
                href="finition.php">finition</a> extérieure associée au cadre
                dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FinitionInt</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Renvoie la catégorie de la <a
                href="finition.php">finition</a> intérieure associée au cadre
                dormant.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">MargeTechnique</span></p>
              </td>
              <td valign="middle" width="88"
              style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">S'utilise en remplacement de
                la marge supplémentaire définie dans l'onglet <span
                style="font-weight: bold;">Description</span> du cadre. </p>

                <p style="margin: 0px 0px 0px 14px;">Elle doit être paramétrée
                dans la première page profil du cadre impérativement, et
                affectera donc tous les onglets (profils articles MO...)</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">MargeComposant</span></p>
              </td>
              <td valign="middle" width="88"
              style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">S'utilise en remplacement de
                la marge supplémentaire définie dans l'onglet <span
                style="font-weight: bold;">Description</span> du cadre. </p>

                <p style="margin: 0px 0px 0px 14px;">La variable devra être
                initialisée dans la formule du composant concerné, et
                n'affectera que celui ci.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;"> </span></p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="179"
                style="width: 179px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Variables </span></p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">de </span></p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">segmentation</span></p>
              </td>
              <td width="87" style="width: 87px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Usage</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="179"
                style="width: 179px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">NbSousSegments</span></p>
              </td>
              <td width="87" style="width: 87px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Renvoie le nombre de
                sous-segments du bord en cours de calcul. L'utilisation de
                cette variable n'est requise que dans le cas d'un paramétrage
                avec inversion de frappe, ou de traverse filante)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="179"
                style="width: 179px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">NumeroSegment</span></p>
              </td>
              <td width="87" style="width: 87px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Dans le cas d'un paramétrage
                de dormant segmenté, il est nécessaire de préciser quel est le
                numéro de segment qui est en cours de calcul avant de valider
                la consommation du profil par l'instruction <span
                class="f_Variables">Appliquer</span>. L'utilisation de cette
                variable n'est requise que dans le cas d'un paramétrage avec
                inversion de frappe, ou de traverse filante)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="179"
                style="width: 179px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">TypeSegment []</span></p>
              </td>
              <td width="87" style="width: 87px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Renvoie le type de tous les
                segments du bord en cours de calcul. Cette variable peut
                prendre l'une des valeurs suivantes:</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&bull;</span></td>
                      <td><span class="f_Variables">Normal</span></td>
                    </tr>
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
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&bull;</span></td>
                      <td><span class="f_Variables">Inverse</span></td>
                    </tr>
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
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&bull;</span></td>
                      <td><span class="f_Variables">DsBattee </span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="margin: 0px 0px 0px 12px;">L'utilisation de cette
                variable n'est requise que dans le cas d'un paramétrage avec
                inversion de frappe, ou de traverse filante)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="179"
                style="width: 179px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">DimSegment []</span></p>
              </td>
              <td width="87" style="width: 87px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Renvoie la dimension de tous
                les segments du bord en cours de calcul. L'utilisation de cette
                variable n'est requise que dans le cas d'un paramétrage avec
                inversion de frappe, ou de traverse filante)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="179"
                style="width: 179px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Assemblage1Segment []</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Assemblage2Segment []</span></p>
              </td>
              <td width="87" style="width: 87px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Ces variables contiennent le
                mode d'assemblage de chaque segments du bord en cours de
                calcul. Elles peuvent contenir une des valeurs suivantes:</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">Onglet</span><span
                        class="f_Comment">: </span>assemblage à onglet. <img
                        src="img/clip0095.gif" width="23" height="15" border="0"
                        alt="clip0095"></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">DroitLong</span>:
                        assemblage en coupe droite; le profil file jusqu'au
                        coin extérieur du cadre. <img src="img/clip0125.gif"
                        width="23" height="15" border="0" alt="clip0125"></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">DroitCourt</span>:
                        assemblage en coupe droite; le profil s'arrête contre
                        le profil adjacent.<img src="img/clip0131.gif" width="23"
                        height="15" border="0" alt="clip0131"> </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">SansAssemblage</span>:
                        aucun assemblage - (p.ex. l'extrémité basse du dormant
                        d'une simple porte)</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">EntreSegments</span>:
                        jonction entre des profils segmentés (inversion de
                        frappe ou traverse filante)</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="179"
                style="width: 179px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">IndexTraverse1 []</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">IndexTraverse2 []</span></p>
              </td>
              <td width="87" style="width: 87px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Renvoie le numéro de la
                traverse responsable de la segmentation. Ce numéro fait donc
                référence à l'index dans les <a
                href="vartraverse.php">variables de traverses</a>. Ces
                variables renvoient <span class="f_Variables">0</span> lorsque
                l'assemblage ne correspond pas à <span
                class="f_Variables">EntreSegments</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="179"
                style="width: 179px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">X0Segment []</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">X1Segment []</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Y0Segment []</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Y1Segment []</span></p>
              </td>
              <td width="87" style="width: 87px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Renvoie la position de
                chacune des extrémités de chaque sous-segment. </p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>

        <p style="text-align: center;"> </p>

        <p style="text-align: center;"><span
        style="font-weight: bold;"> </span></p>

        <p style="text-align: center;"> </p>

        <p style="text-align: center;"> </p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
