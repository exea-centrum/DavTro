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
if(top.frames.length==0) { top.location.href="index.php?ouvvariables.php"; }
else { parent.quicksync('a5.3.3'); }
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
        href="ouvquestions.php">Previous</a>  <a
        href="ouvprofiles.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p class="p_Textestd"></p>

        <p class="p_Textestd"><span class="f_Textestd">WinPro generates several variables to help you compute the sash's components. 
		They are listed below.</span></p>

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
                      <td>Some formulas, when applied to the sides of the frame, are followed by the numbers 1 or 2 (e.g. 
					  <span class="f_variables">Angle1</span>, <span class="f_variables">Angle2</span>). In such cases, 1 is the left end of 
					  the side when the frame is laid flat, with the corresponding side towards you (so, 1 = left of the bottom side, right of 
					  the top side, top of the left side, bottom of the right side).</td>
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
                      <td>The <span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span> sign tells which variables 
					  you can change.</td>
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
                      <td>The <span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span> sign tells which variables 
					  you must create.</td>
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
                      <td>The Usage column explains in which context the variable can be used:</td>
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

        <p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>

        <p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>

       <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Variables</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Usage</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>

            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Length</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span>
				<span style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="512" style="width: 512px; border: solid 1px #c0c0c0;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">P:</span> Cut length of the profile. </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #ff0000;">You must define this value, otherwise the profile is not generated.!</span></p>

                <p> </p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Articles:</span> Length of the article, used to define its price if a one dimension price 
					  table is tied to the article. It is also used to define the value which will replace <a href="macros___.php">macro #2#</a> if 
					  this macro is used in the article definition. This variable is ignored if variables <span class="f_variables">ArticleHeight </span>
					  and <span class="f_variables">ArticleWidth </span>are not defined. You must define this value if you need it.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>

            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Quantity</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span>
				<span style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="512" style="width: 512px; border: solid 1px #c0c0c0;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">P: </span>Number of identical profiles to cut. This must be an integer number. </td>
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
                      <td><span style="font-weight: bold;">Aa:</span> Number of identical articles to use. This may be any fractional value.</td>
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
                      <td><span style="font-weight: bold;">Ll:</span> Length of the operation, in seconds. You can also use a time notation
					  (hour:minutes:seconds or minutes:seconds - see the section about <a href="nombres.php">numbers</a>). Fractional seconds are allowed.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #ff0000;">You must define this value, otherwise the component is not generated.!</span></p>
              </td>
            </tr>
			
             <tr valign="top" align="left">
              <td valign="middle" width="215"
              style="width: 215px; height: 36px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Dimension</span></p>
              </td>
              <td valign="middle" width="72"
              style="width: 72px; height: 36px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-weight: bold;">PAL</span></p>
              </td>
              <td valign="top" width="512"
              style="width: 512px; height: 36px; border: solid 1px #c0c0c0;"><p
                style="margin: 7px 0px 7px 13px;">Length of the current side of the leaf.</p>
              </td>
            </tr>

             <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Dimension1</span></p>

                <p style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Dimension2</span><span
                class="f_Variables"></span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">al</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Length of the current corner of the
                leaf.<span style="font-weight: bold; color: #ff0000;"> TO BE REVIEWED !</span></p>
              </td>
            </tr>

             <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Angle1</span></p>

                <p style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Angle2</span><span
                class="f_Variables"></span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span>
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cutting angle of each end of the
                profile. If this is a miter assembly, this is half the angle of
                the corner.</p>
              </td>
            </tr>

             <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;">
				<p style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Angle</span><span
                class="f_Variables"></span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">al</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Angle of the current corner.</p>
              </td>
            </tr>
			
             <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">X0, X1</span></p>

                <p style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Y0, Y1</span><span
                class="f_Variables"></span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span>
				<span style="font-weight: bold;">P</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Position of each end of the profile
                (0,0 is at the bottom left of the outer frame). You may change
                these values to move the profile.</p>
              </td>
            </tr>

             <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">MillingCategory</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span>
				<span style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Milling category of the profile, used for <span class="f_variablesont">SPECIAL</span> <a
                href="usinage.php">millings</a>. You can dynamically change this value. <a href="prfdescription.php">Default value is defined 
				at profile level.</a></p>
              </td>
            </tr>

            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">InnerThickness</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Inner thickness of the profile,
                excluding the glass rebate. You can assign a new value to this
                variable, in the first profile formula. This will vary the
                profile default inner thickness.</p>

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

                        <p style="margin: 0px 0px 0px 13px;">Variables sections must <span style="font-weight: bold; color: #ff0000;">
						imperatively </span>be set up into the first profile page of concerned frame, otherwise they are not computed !</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="text-align: center;"> </p>
              </td>
            </tr>

            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">OuterThickness</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span>
				<span style="font-weight: bold;">P</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Outer thickness of the profile,
                excluding the fitting rebate. You can assign a new value to
                this variable, in the first profile formula. This will vary the
                profile default outer thickness. <span style="color: #ff0000;">Attention,
                the value should be AT LEAST greater than </span><span
                class="f_Variables">GlassRebate</span>.</p>

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
                        style="font-weight: bold; text-decoration: underline;">Note</span><span
                        style="text-decoration: underline;">:</span></p>

                        <p style="margin: 0px 0px 0px 13px;">Variables sections must <span style="font-weight: bold; color: #ff0000;">
						imperatively </span>be set up into the first profile page of concerned frame, otherwise they are not computed !</p>
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
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">GlassRebate</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span>
				<span style="font-weight: bold;">P</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                class="f_Textestd">Height of the glass rebate. You can
                assign a new value to this variable, in the first profile
                formula. This will vary the profile default glass rebate.<span style="color: #ff0000;">
                Attention, this rebate must have a constant value for all sides of the leaf (and for its transoms).</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span class="f_Textestd"
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
                        style="font-weight: bold; text-decoration: underline;">Note</span><span
                        style="text-decoration: underline;">:</span></p>

                        <p style="margin: 0px 0px 0px 13px;">Variables sections must <span style="font-weight: bold; color: #ff0000;">
						imperatively </span>be set up into the first profile page of concerned frame, otherwise they are not computed !</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="text-align: center;"><span class="f_Textestd"
                style="color: #ff0000;"> </span></p>
              </td>
            </tr>
			
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Clearance1</span></p>

                <p class="p_Textestd"><span class="f_Textestd">          
                to</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Clearance6</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span>
				<span style="font-weight: bold;">P</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span class="f_Textestd">Space between two leaves (Clearance1 is for space between
                leaf 1 and 2, Clearance2 between 2 and 3,...).</span></p>
              </td>
            </tr>

            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">SashWidth1</span></p>

                <p class="p_Textestd"><span class="f_Textestd">          
                to</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">SashWidth6</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span>
				<span style="font-weight: bold;">P</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variables allow to modify leaves axis by rule. When user defines axis by value with 
				setting it into the customer order, only the values input by users will be considered by Winpro.</p>
              </td>
            </tr>

             <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">SashIndex</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Index of the sash in the global sash arrays.</p>
              </td>
            </tr>

             <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Leaf</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Index of the current leaf (1 = leftmost or bottommost).</p>
              </td>
            </tr>

             <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Direction</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Opening direction of the sash
                (<span class="f_variables">Left</span> or <span class="f_variables">Right</span>).</p>
              </td>
            </tr>

             <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">OppositeDirection</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Opposite value of variable <span class="f_variables">Direction</span>.</p>
              </td>
            </tr>
			
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Side</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Side of current leaf. This variable is worth one of following values:</p>

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
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">TopOverlapping,</span></p>
                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">BottomOverlapping,</span></p>
                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">LeftOverlapping,</span></p>
                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">RightOverlapping,</span></p>
                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">TopLeftOverlapping,</span></p>
                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">TopRightOverlapping,</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span>
				<span style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Overlapping of the sash over the outer
                frame. You can assign new values to these variables, in the first profile formula.</p>
              </td>
            </tr>

            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">OuterFrameTop,</span></p>
                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">OuterFrameBottom,</span></p>
                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">OuterFrameLeft,</span></p>
                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">OuterFrameRight</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Those variables return the outer frame level element joining each side of the sash frame,
                values are : <span class="f_Variables">Transom</span> or
                <span class="f_Variables">OuterFrame</span>.</p>
              </td>
            </tr>

            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Overlapping</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-weight: bold;">PA</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Overlapping of the sash over the outer
                frame, for the current side of the leaf.</p>
              </td>
            </tr>

            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">ProfileThickness1,</span></p>
                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">ProfileThickness2</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Side formulas: Profile heights (total height minus glass rebate) on each end of the current profile.</p>
              </td>
            </tr>
						
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">ProfileThickness</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Profile thickness (total thickness
                minus glass rebate).</p>

                <div
                style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

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

                        <p style="margin: 0px 0px 0px 13px;">This variable is out of date since release of variable <span
                        class="f_Variables">InnerThickness</span>.</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
			
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">ProfileThickness1,</span></p>

                <p style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">ProfileThickness2</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="512" style="width: 512px; border: solid 1px #c0c0c0;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">PAL : </span>Returns the <span class="f_Variables">InnerThickness</span> 
					  value on each end of the current profile.</td>
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
                      <td><span style="font-weight: bold;">al : </span>Returns the <span class="f_Variables">InnerThickness</span> 
					  value on each end of the current corner.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>

             <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Thickness</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span>
				<span style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable lets you define a value
                which will replace the <a href="macros___.php">macro #3#</a> if
                it is present in the article description. You must define this
                variable if you need it.</p>
              </td>
            </tr>

             <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">ArticleWidth,</span></p>
                <p style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">ArticleHeight</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span>
				<span style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Those 2 variables let you define 2
                dimensions which are used to find the price of an article with
                a 2 dimension price table. They are also used to replace the <a
                href="macros___.php">macro #2#</a> if it appears in the article
                description. You must define these variables if you need
                them.</p>
              </td>
            </tr>

             <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">SawId</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span>
				<span style="font-weight: bold;">P</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable lets you dynamically
                reassign the profile to a different saw (e.g. for special
                cutting angles). You must define this variable if you need
                it.</p>
              </td>
            </tr>

             <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">DeliveryPreparation</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span>
				<span style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable lets you dynamically
                change the setting which decides of the printing of the article
                on delivery preparation documents. You must define this
                variable if you need it.</p>
              </td>
            </tr>

             <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">SimpleFactDoc</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span>
				<span style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable lets you dynamically
                change the setting which decides of the printing of the article
                on simplified factory documents. You must define this variable
                if you need it.</p>
              </td>
            </tr>

             <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">CustomerDoc</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span>
				<span style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable lets you dynamically
                change the setting which decides of the printing of the article
                on customer documents. You must define this variable if you
                need it.</p>
              </td>
            </tr>

             <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">QualityControl</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span>
				<span style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable lets you dynamically
                change the setting which decides of the printing of the article
                on quality control documents. You must define this variable if
                you need it.</p>
              </td>
            </tr>

            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Assembly1,</span><br>
                <span class="f_Variables">Assembly2</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">These variables contain the assembly
                mode on each end of the profile. This may be one of these
                values: </p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">Miter</span>: 45° assembly. <img src="img/clip0095.gif" width="23" height="15" border="0" alt="clip0095"></td>
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
                      <td><span class="f_Variables">StraightLong</span>: 90° assembly; the profile
                        continues to the corner. <img src="img/clip0125.gif" width="23" height="15" border="0" alt="clip0125"></td>
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
                      <td><span class="f_Variables">StraightShort</span>: 90° assembly; the profile
                        stops at the other profile in the corner. <img src="img/clip0131.gif" width="23" height="15" border="0" alt="clip0131"></td>
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
                      <td><span class="f_Variables">NoAssembly</span>: No assembly - e.g. lower end
                        of a frame with a door.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>

            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Assembly</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">al</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable contains the assembly
                mode of the corner. This may be one of these values:</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">Miter</span>: 45° assembly.</td>
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
                      <td><span class="f_Variables">StraightLong</span>: 90° assembly, the profile continues to the corner.</td>
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
                      <td><span class="f_Variables">StraightShort</span>: 90° assembly, the profile stops at the other profile in the corner.</td>
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
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FalseArchShape</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">If the window has a false arch, this
                variable contains its shape:</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">-1</span>: No false arch of type 4 or 5. (see variable FalseArchType).</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">0</span>: Flat bow type 5</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">1</span>: Half flat bow left type
                5</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">2</span>: Half flat bow right type
                5</p>

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
                class="f_Variables">8</span>: Half basket handle right type 5</p>

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
                class="f_Variables">2</span>
                or <span class="f_Variables">3</span>, this variable returns
                the minimum thickness of top profile (<span
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
                class="f_Variables">2 </span>
                or <span class="f_Variables">3</span>, this variable returns
                the maximum thickness of top profile onto its left edge (<span
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
                class="f_Variables">2 </span>
                or <span class="f_Variables">3</span>, this variable returns
                the maximum thickness of top profile onto its right edge (<span
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

            <tr valign="top" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Width</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLlD</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Total width of the current
                leaf.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">ExtWidth</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Sash width, extended to the outside of
                the outer frame or the first transom's axis.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
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
                style="margin: 0px 0px 0px 13px;">Sash width, extended to the outside of
                the outer frame minus the reveal, or the first transom's axis.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">TotalWidth</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Sash width, measured from the bottom of
                the outer frame rebate.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Height</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLlD</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Total height of the current
                leaf.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">ExtHeight</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Sash height, extended to the outside of
                the outer frame or the first transom's axis.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
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
                style="margin: 0px 0px 0px 13px;">Sash height, extended to the outside of
                the outer frame minus the reveal, or the first transom's axis.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td width="178"
                style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">TotalHeight</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Sash height, measured from the bottom
                of the outer frame rebate.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
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
                style="margin: 0px 0px 0px 13px;">Length of the top left segment of the
                leaf.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
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
                style="margin: 0px 0px 0px 13px;">Length of the top right segment of the
                leaf.</p>
              </td>
            </tr>
			
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Shape</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Shape of the current side, which may
                be: </p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">Straight</span>: Straight segment.</td>
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
                      <td><span class="f_Variables">Bow</span>: Simple bow segment (one
                        center, one radius).</td>
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
                      <td><span class="f_Variables">BasketHandleShape</span>: multi-bow segment (more than one center and/or radius).</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
				
             <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">FrameXCenter,</span></p>
				<p style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">FrameYCenter</span></p>				
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">These variables hold the coordinates
                the arc for bow shaped frames. Point 0,0 is at the bottom left
                corner of the outer frame. These variables are not created for
                other kinds of segments. Returns <span class="f_Variables">0</span> otherwise.</p>
              </td>
            </tr>

             <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">FrameRadius</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable holds the radius of the
                arc for bow shaped frames. This variable is not created for
                other kinds of segments. Returns <span class="f_Variables">0</span> otherwise.</p>
              </td>
            </tr>

             <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Radius</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable exists only for segments
                where <span class="f_variables">Shape=Bow</span>. It holds the radius of the arc. This
                variable is not created for other kinds of segments.
				<span style="color: #000000; text-decoration: underline;">In profile formulas</span>: You may create
                or change this variable, to force an arched shape for the profile, or force its radius.
				 Returns <span class="f_Variables">0</span> otherwise.</p>
              </td>
            </tr>
			

			
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FrameOpening</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable exists only for segments
                where <span style="font-family: 'Courier New'; color: #0000ff;">Shape=Bow</span>. It holds, into degrees, the opening angle of the 
				circle of arc from shaped frame, returns <span class="f_Variables">0</span> otherwise.</p>
              </td>
            </tr>
			
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Opening</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable exists only for segments
                where <span style="font-family: 'Courier New'; color: #0000ff;">Shape=Bow</span> AND current side is the top side. 
				It holds, into degrees, the opening angle of the circle of arc from shaped frame, returns <span class="f_Variables">0</span> otherwise.</p>
              </td>
            </tr>

            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FrameStartAngle</span></p>
				<p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FrameEndAngle</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">These variables exist only for segments
                where <span style="font-family: 'Courier New'; color: #0000ff;">Shape=Bow</span>. They hold, into degrees, the
                start and end angle of the arc for bow shaped frames. Angle 0 is at the right of the horizontal diameter, 90 at the top of
                the vertical diameter. Returns <span class="f_Variables">0</span> otherwise.</p>
              </td>
            </tr>

            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">StartAngle</span></p>
				<p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">EndAngle</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">These variables exist only for segments
                where <span style="font-family: 'Courier New'; color: #0000ff;">Shape=Bow</span> AND current side is the top side. 
				They hold the start and end angles of the arc, in degrees. Angle 0 is at the right of the horizontal
                diameter, 90 at the top of the vertical diameter. Returns <span class="f_Variables">0</span> otherwise.</p>
              </td>
            </tr>

            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">NBows</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable exists only if 
                <span style="font-family: 'Courier New'; color: #0000ff;">Shape=BasketHandleShape</span>. 
				It contains the number of arcs in the bow. Returns <span class="f_Variables">0</span> otherwise.</p>
              </td>
            </tr>

            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FrameXCenter[],</span></p>
				<p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FrameYCenter[]</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">These variables exist if 
                <span class="f_variables">Shape=BasketHandleShape</span> or <span class="f_variables">Bow</span>. They hold the coordinates of
                each arc for basket handle shaped leaves. Returns <span class="f_Variables">0</span> otherwise.</p>
              </td>
            </tr>

            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FrameRadius[],</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">These variables exist if 
                <span class="f_variables">Shape=BasketHandleShape</span> or <span class="f_variables">Bow</span>. They hold the radius of
                each arc for basket handle shaped leaves. Returns <span class="f_Variables">0</span> otherwise.</p>
              </td>
            </tr>

            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FrameOpening[],</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">These variables exist if 
                <span class="f_variables">Shape=BasketHandleShape</span> or <span class="f_variables">Bow</span>. They hold the opening angle of
                each arc for basket handle shaped leaves. Returns <span class="f_Variables">0</span> otherwise.</p>
              </td>
            </tr>
			
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FrameStartAngle[],</span></p>
				<p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FrameEndAngle[]</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">These variables exist if 
                <span class="f_variables">Shape=BasketHandleShape</span> or <span class="f_variables">Bow</span>. They hold the start and end
				angles of each arc for basket handle shaped leaves. Returns <span class="f_Variables">0</span> otherwise.</p>
              </td>
            </tr>

            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FullBow</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns <span class="f_variables">1</span> if the leaf may be considered as a full
                bow or a half full bow. This is when <span class="f_variables">Angle1</span> and <span class="f_variables">Angle2</span>
				return <span class="f_variables">0°</span> and/or <span class="f_variables">180°</span>.</p>
              </td>
            </tr>
			
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">SashShape</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">The shape of the leaf. It can contain
                one of these values:</p>

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
                class="f_Variables">TruncatedTrapezium</span></p>

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

                <p style="margin: 0px 0px 0px 13px;"><span
                style="font-family: 'Courier New';"><a
                href="creerforme.php">Refer to respective shape drawing for more details.</a></span></p>
              </td>
            </tr>

            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">SashShape2</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Like <span class="f_variables">SashShape</span>, except that instead of a single
                <span class="f_variables">Bow</span> value for all arched shapes, you get
                the exact type of bow:The shape of the leaf. It can contain one of these values:</p>

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

                <p style="margin: 0px 0px 0px 13px;"><span
                style="font-family: 'Courier New';"><a
                href="creerforme.php">Refer to respective shape drawing for more details.</a></span></p>
			  </td>
            </tr>
			
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">VentVisibleShape</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the visible shape of current leaf, with considering false arch if required. 
				Returned values are:</p>

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
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">VentFittShape</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the shape defined by fitting rebate perimeter of current leaf, 
				with considering false arch if required. Returned values are the same as for variable <span class="f_Variables">VentVisibleShape</span>.
              </td>
            </tr>

            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">VentExtShape</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the shape defined by outside edge of leaf perimeter, 
				with considering false arch if required. Returned values are the same as for variable <span class="f_Variables">VentVisibleShape</span>.
				</p>
              </td>
            </tr>

            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">VentGlBeadShape</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the shape defined by glass bead perimeter of the leaf, 
				with considering false arch if required. Returned values are the same as for variable <span class="f_Variables">VentVisibleShape</span>.
				</p>
              </td>
            </tr>
			
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">SegmentCount</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Number of segments in the current leaf
                (Rectangle=4, Triangle=3, etc...).</p>
              </td>
            </tr>

            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">GlassThicknessCount</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the number of distinct glass thickness into the current leaf.</p>
              </td>
            </tr>
			
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">GlassThickness[]</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">List of glass thickness for current leaf.</p>
              </td>
            </tr>

            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">SillHeight</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the height of a potential sill, only for door sash type.</p>
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
                class="f_Variables">ExtFinishing</span></p>
              </td>
              <td width="88" style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Retuns the outside <a
                href="finition.php">finishing</a> category of the sash
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
                href="finition.php">finishing</a> category of the sash
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

            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">AdditionalClearance</span></p>
              </td>
              <td valign="middle" width="88"
              style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAaLl</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Returns value of field of same name from Description page by default, 
				and allows modification of this value by rule.</p>
              </td>
            </tr>	
          </tbody>
        </table>
        </div>

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
      <td align="left"><p class="p_Textestd"></p>

        <p class="p_Textestd"><span class="f_Textestd">Vous disposez de
        variables générées par Winpro pour le calcul des composants du cadre
        ouvrant. La liste de ces variables est donnée ci-dessous.</span></p>

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
                      <td>Le signe <span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span>
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

        <p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>

        <p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Variables</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Usage</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Longueur</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="512" style="width: 512px; border: solid 1px #c0c0c0;">
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
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Quantite</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512" style="width: 512px; border: solid 1px #c0c0c0;">
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

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #ff0000;">Vous devez définir cette variable,
                sinon le composant n'est pas consommé!</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Dimension</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Longueur de l'arête du coté
                de l'ouvrant en cours de calcul.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Dimension1</span></p>

                <p style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Dimension2</span><span
                class="f_Variables"></span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">am</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Longueur de l'arête de chaque
                côté du coin.<span style="font-weight: bold; color: #ff0000;">A
                REVOIR</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Angle1</span></p>

                <p style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Angle2</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Angle de coupe de chaque côté
                du profil. Les assemblages à onglet sont pris en compte:
                l'angle du coin du châssis est divisé par deux dans ce cas.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Angle</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">am</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Angle formé par le coin en
                cours de calcul.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span class="f_Variables">X0,
                Y0</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">X1, Y1</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Position de chacune des
                extrémités du profil (le point 0,0 correspond au coin inférieur
                gauche <span style="text-decoration: underline;">du
                dormant</span>).</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">CategorieUsinage</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
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
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">EpaisseurInterieure</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Hauteur intérieure du profil,
                hors battée vitrage. Si vous modifiez la valeur de cette
                variable depuis la première formule de profil, WinPro en
                tiendra compte pour faire varier la section du profil.</p>

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
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">EpaisseurExterieure</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">La valeur renvoyée correspond
                à la différence entre le point le plus haut de la face
                extérieure avec la position de la rainure de quincaillerie. Si
                vous modifiez la valeur de cette variable depuis la première
                formule de profil, WinPro en tiendra compte pour faire varier
                la section du profil. <span style="color: #ff0000;">Attention,
                la valeur doit être au minimum équivalente à la </span><span
                class="f_Variables">BatteeVitrage</span><span
                style="color: #ff0000;">.</span></p>

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
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">BatteeVitrage</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                class="f_Textestd">Hauteur de la battée de vitrage. Si vous
                modifiez la valeur de cette variable, WinPro en tiendra compte
                pour faire varier la section du profil. </span><span
                class="f_Textestd" style="color: #ff0000;">Attention, cette
                battée doit avoir la même valeur pour tous les côtés du
                vantail, et doit également correspondre aux battées des
                traverses placées dans le vantail.</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span class="f_Textestd"
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

                <p style="text-align: center;"><span class="f_Textestd"
                style="color: #ff0000;"> </span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">JeuMauclair1</span></p>

                <p class="p_Textestd"><span class="f_Textestd">          
                à</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">jeuMauclair6</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                class="f_Textestd">Espace entre deux vantaux (JeuMauclair1
                contient l'espace entre les vantaux 1 et 2, JeuMauclair2 entre
                2 et 3, ...)</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Entraxevantail1</span></p>

                <p class="p_Textestd"><span class="f_Textestd">          
                à</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Entraxevantail6</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Ces variables permettent de
                décentrer les vantaux par formule en modifiant leur(s)
                valeur(s). Si l&rsquo;utilisateur décentre les vantaux lors de
                la saisie de la fenêtre, ce sont les valeurs saisies qui seront
                prises en considération par Winpro.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">NumeroOuvrant</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie le numéro d'index de
                l'ouvrant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Position -> NumeroVantail (dès la V9.0)</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie le numéro d'index du
                vantail en cours de calcul. (1=vantail gauche ou bas)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Sens</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie <span
                class="f_Variables">Gauche</span> ou <span
                class="f_Variables">Droite</span> en fonction du sens
                d'ouverture saisi par l'utilisateur.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">SensOppose</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie le contraire de la
                variable <span class="f_Variables">Sens</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Bord</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Bord du vantail en cours de
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
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">RecouvrementHaut</span></p>

                <p style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">RecouvrementBas</span></p>

                <p style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">RecouvrementGauche</span></p>

                <p style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">RecouvrementDroite</span></p>

                <p style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">RecouvrementHautGauche</span></p>

                <p style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">RecouvrementHautDroite</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Ces variables renvoient la
                valeur effective du recouvrement de l'ouvrant sur le dormant
                pour chaque bord. Vous pouvez également les modifier en leur
                affectant une nouvelle valeur depuis la première formule de
                profil d'ouvrant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">DormantBas</span></p>

                <p style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">DormantGauche</span></p>

                <p style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">DormantDroite</span></p>

                <p style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">DormantHaut</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Ces variables renvoient la
                nature dormant en contact avec chaque bord du cadre ouvrant,
                les valeurs sont : <span class="f_Variables">Traverse</span> ou
                <span class="f_Variables">Dormant</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Recouvrement</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la valeur du
                recouvrement de l'ouvrant sur le dormant pour le bord en cours
                de calcul. </p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #ff0000;">La valeur renvoyée ne tient pas compte
                des éventuelles modifications de recouvrement calculées par
                formule.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">EpaisseurProfil</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la Hauteur intérieure
                du profil, hors battée vitrage.</p>

                <div
                style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

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

                        <p style="margin: 0px 0px 0px 13px;">Cette variable est
                        obsolète depuis qu' <span
                        class="f_Variables">EpaisseurInterieure</span> est
                        disponible.</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">EpaisseurProfil1</span></p>

                <p style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">EpaisseurProfil2</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512" style="width: 512px; border: solid 1px #c0c0c0;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">PAM : </span>Renvoie
                        l'<span class="f_Variables">EpaisseurInterieure</span>
                        des profils ouvrant de part et d'autre du bord en cours
                        de calcul<span style="color: #000000;">.</span></td>
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
                        l'<span class="f_Variables">EpaisseurInterieure</span>
                        des profils ouvrants constituant le coin en cours de
                        calcul<span style="color: #ff0000;">.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Epaisseur</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                définir une valeur qui sera utilisée pour remplacer la <a
                href="macros___.php">macro #3# </a>si celle-ci est présente
                dans la description du profil. Vous devez définir cette
                variable vous-même.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">LargeurArticle</span></p>

                <p style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">HauteurArticle</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
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
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">NumeroScie</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                modifier dynamiquement le numéro de scie liée au profil. Vous
                devez définir vous-même cette variable si vous désirez modifier
                le numéro de scie.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 8px;"><span
                class="f_Variables">PrepaLivraison</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                modifier dynamiquement l'impression du profil sur les documents
                de préparation de livraison. Lorsque l'on utilise cette
                variable, il faut impérativement décocher la case "Préparation
                livraison" de la fiche article. Vous devez définir vous-même
                cette variable si vous désirez modifier ce paramètre.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">PlanSimplifie</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                modifier dynamiquement l'impression du composant sur les plans
                d'atelier simplifiés. Lorsque l'on utilise cette variable, il
                faut impérativement décocher la case "Plan d'atelier simplifié"
                de la fiche article. Vous devez définir vous-même cette
                variable si vous désirez modifier ce paramètre.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">DocClient</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                modifier dynamiquement l'impression du profil sur les documents
                client. Lorsque l'on utilise cette variable, il faut
                impérativement décocher la case "Documents client" de la fiche
                article. Vous devez définir vous-même cette variable si vous
                désirez modifier ce paramètre.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">CtrlQualite</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAa</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                modifier dynamiquement l'impression du profil sur les documents
                de contrôle qualité. Lorsque l'on utilise cette variable, il
                faut impérativement décocher la case "Contrôle qualité" de la
                fiche article. Vous devez définir vous-même cette variable si
                vous désirez modifier ce paramètre.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Assemblage1</span><br>
                <span class="f_Variables">Assemblage2</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
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
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Assemblage</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">am</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
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
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">TypeFauxCintre</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable renvoie un
                numéro correspondant au type de faux cintre saisi au niveau du
                cadre dormant:</p>

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
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FormeFauxCintre</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable contient une
                de ces valeurs numériques faisant référence aux différentes
                formes de l'applique cintrée telle qu'elle a été saisie au
                niveau du cadre dormant:</p>

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
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FlecheFauxCintre</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la valeur de la
                flèche du faux cintrage telle qu'elle a été saisie pour les
                formes 0, 1, 2, 6, 7 et 8 décrites ci-dessus.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">HauteurSupplFCtr</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">TypeFauxCintre</span> vaut <span
                class="f_Variables">4</span>, cette variable contient la
                hauteur d'extension vers le haut du faux cintrage telle qu'elle
                a été saisie.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">EpaisseurMinProfil</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">TypeFauxCintre</span> vaut <span
                style="font-size: 12pt; font-family: 'Times New Roman';"></span><span
                class="f_Variables">2</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';"> ou
                </span><span class="f_Variables"> 3</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                cette variable renvoie  l'épaisseur minimum du profil ouvrant
                haut.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">EpaisseurGaucheProfil</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">TypeFauxCintre</span> vaut <span
                style="font-size: 12pt; font-family: 'Times New Roman';"></span><span
                class="f_Variables">2</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';"> ou
                </span><span class="f_Variables"> 3</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                cette variable renvoie  l'épaisseur du profil ouvrant haut à
                son extrémité gauche.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">EpaisseurDroiteProfil</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">TypeFauxCintre</span> vaut <span
                style="font-size: 12pt; font-family: 'Times New Roman';"></span><span
                class="f_Variables">2</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';"> ou
                </span><span class="f_Variables"> 3</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                cette variable renvoie  l'épaisseur du profil ouvrant haut à
                son extrémité droite.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">CategFauxCintre</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la valeur numérique
                du champs catégorie de <a href="fauxcintre.php">faux
                cintre</a>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Largeur</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la largeur du <span
                style="text-decoration: underline;">vantail</span> en cours de
                calcul.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">LargeurHT</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la largeur de l<span
                style="text-decoration: underline;">'ouvrant</span>, en cote
                hors tout dormant (extérieur dormant et/ou axe de traverse
                dormant).</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">LargeurTableau</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la largeur de l<span
                style="text-decoration: underline;">'ouvrant</span>, en cote
                tableau dormant (extérieur dormant et/ou axe de traverse
                dormant).</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">LargeurTotale</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la largeur de l<span
                style="text-decoration: underline;">'ouvrant</span>, en fond de
                feuillure dormant (rainure parclose dormant).</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Hauteur</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la hauteur du <span
                style="text-decoration: underline;">vantail</span> en cours de
                calcul.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">HauteurHT</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la hauteur de l'<span
                style="text-decoration: underline;">ouvrant</span>, en cote
                hors tout dormant (extérieur dormant et/ou axe de traverse
                dormant).</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">HauteurTableau</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la hauteur de l<span
                style="text-decoration: underline;">'ouvrant</span>, en cote
                tableau dormant (extérieur dormant et/ou axe de traverse
                dormant).</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">HauteurTotale</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la hauteur de l<span
                style="text-decoration: underline;">'ouvrant</span>, en fond de
                feuillure dormant (rainure parclose dormant).</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">LongueurHautGauche</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Longueur du bord haut-gauche
                du vantail en cours de calcul.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">LongueurHautDroite</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Longueur du bord haut-droite
                du vantail en cours de calcul.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Forme</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
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
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">CentreXCadre</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">CentreYCadre</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">Forme </span>renvoie <span
                class="f_Variables">Cintre</span>, les variables contiennent
                les coordonnées du centre de chaque arc de cercle relatifs aux
                différents segments d'arc, sinon elles renvoient <span
                class="f_Variables">0</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">RayonCadre</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">Forme </span>renvoie <span
                class="f_Variables">Cintre</span>, la variable contient le
                rayon de l'arc de cercle du cadre cintré, sinon elle renvoie
                <span class="f_Variables">0</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Rayon</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">Forme </span>renvoie <span
                class="f_Variables">Cintre </span>et que le bord en cours de
                calcul est le haut, la variable contient le rayon de l'arc de
                cercle du cintre, sinon elle renvoie <span
                class="f_Variables">0</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">OuvertureCadre</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">Forme </span>renvoie <span
                class="f_Variables">Cintre</span>, la variable contient, en
                degrés, l'angle d'ouverture de l'arc de cercle du cadre cintré,
                sinon elle renvoie <span class="f_Variables">0</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Ouverture</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">Forme </span>renvoie <span
                class="f_Variables">Cintre</span> et que le bord en cours de
                calcul est le haut, la variable contient, en degrés, l'angle
                d'ouverture de l'arc de cercle du cadre cintré, sinon elle
                renvoie <span class="f_Variables">0</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">AngleDebutCadre</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">AngleFinCadre</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">Forme </span>renvoie <span
                class="f_Variables">Cintre</span>, les variables contiennent,
                en degrés, les angles de début et de fin de l'arc de cercle du
                cintre, sinon elles renvoient <span
                class="f_Variables">0</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">AngleDebut</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">AngleFin</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">Forme </span>renvoie <span
                class="f_Variables">Cintre </span>et que le bord en cours de
                calcul est le haut, les variables contiennent, en degrés, les
                angles de début et de fin de l'arc de cercle du cintre, sinon
                elles renvoient <span class="f_Variables">0</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">NCourbes</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
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
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">CentreXCadre[]</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">CentreYCadre[]</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
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
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">RayonCadre[]</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
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
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">OuvertureCadre[]</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Si <span
                class="f_Variables">Forme </span>renvoie <span
                class="f_Variables">Anse</span> ou <span
                class="f_Variables">Cintre</span>, l'angle d'ouverture de
                chaque arc de cercle dans les segments en anse de panier, sinon
                elle renvoie <span class="f_Variables">0</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">AngleDebutCadre[]</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">AngleFinCadre[]</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
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
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">PleinCintre</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie <span
                class="f_Variables">1</span><span class="f_Textestd">lorsque le
                bord en cours de calcul est considérer comme un plein cintre ou
                demi-plein cintre. Autrement dit, elle renvoie </span><span
                class="f_Variables">1</span><span class="f_Textestd">lorsque
                </span><span class="f_Variables">Angle1</span><span
                class="f_Textestd">et </span><span
                class="f_Variables">Angle2</span><span
                class="f_Textestd">renvoient </span><span
                class="f_Variables">0</span><span class="f_Textestd">et/ou
                </span><span class="f_Variables">180</span><span
                class="f_Textestd">°.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FormeOuvrant</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Représente la forme de
                l'ouvrant. Cette variable peut prendre l'une des valeurs
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

                <p style="margin: 0px 0px 0px 13px;"><span
                style="font-family: 'Courier New';"><a
                href="creerforme.php">Voir le dessin de chacune de ces
                formes</a></span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FormeOuvrant2</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -2px; margin: 0px 0px 0px 14px;">Lorsque
                <span class="f_Variables">FormeOuvrant</span> vaut <span
                class="f_Variables">Cintre</span><span
                style="color: #000000;">, la variable </span><span
                class="f_Variables">FormeOuvrant2</span> renvoie alors une de
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
                class="f_Variables">FormeOuvrant2</span> renvoie la même valeur
                que <span class="f_Variables">FormeOuvrant</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="font-family: 'Courier New';"><a
                href="creerforme.php">Voir le dessin de chacune de ces
                formes</a></span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FormeJourVantail</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la forme du clair
                vitrage du vantail en cours de calcul, en tenant compte de la
                présence d'un éventuel faux-cintre. Les valeurs renvoyées
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
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FormeQuincVantail</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la forme déterminée
                par le périmètre rainure quincaillerie du vantail en cours de
                calcul, et en tenant compte de la présence d'un éventuel
                faux-cintre. Les valeurs renvoyées sont identiques à la
                variable <span class="f_Variables">FormeJourVantail</span>
                ci-dessus.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FormeExtVantail</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la forme déterminée
                par le périmètre extérieur (hors-tout) du vantail en cours de
                calcul, en tenant compte de la présence d'un éventuel
                faux-cintre. Les valeurs renvoyées sont identiques à la
                variable <span class="f_Variables">FormeJourVantail</span>
                ci-dessus.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">FormeParclVantail</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la forme déterminée
                par le périmètre rainure parclose du vantail en cours de
                calcul. Les valeurs renvoyées sont identiques à la variable
                <span class="f_Variables">FormeJourVantail</span> ci-dessus.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">NombreSegments</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie le nombre de segments
                composant le cade ouvrant.</p>

                <p style="margin: 0px 0px 0px 13px;">(4 pour un rectangle, 3
                pour un triangle)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">NEpaisseurVitrage</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie le nombre
                d'épaisseurs différentes de vitrages se trouvant dans le
                vantail en cours de calcul.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">EpaisseurVitrage[]</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Liste des épaisseurs des
                vitrages du vantail en cours de calcul.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">HauteurSeuil</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la hauteur de
                l'éventuel seuil de porte. Cette variable n'est définie que si
                l'ouvrant est une porte.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">PosCoupe</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Cette variable n'est utilisée
                que dans le contexte des vues en coupe. Elle vous permet de
                connaître la position de la coupe verticale ou horizontale.
                (N.B.:Si le châssis comporte plusieurs coupes, le châssis est
                recalculé complètement pour chaque coupe)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">VarLin</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">VarLin2</span></p>

                <p class="p_Textestd"><span class="f_Textestd">     
                à</span></p>

                <p style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Varlin6</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Vous pouvez assigner une
                valeur à ces variables pour chaque composant ; le contenu de
                ces variables sont notés dans les champs Var, Var2 à Var6 de la
                table Lin.dbf, si le composant y est exporté.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">Vue</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">D</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 12px;">Renvoie
                <span class="f_Variables">VueInterieure</span> ou <span
                class="f_Variables">VueExterieure</span> en fonction de la vue
                du dessin en cours d'impression ou d'affichage.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">AssemblageTraverse</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Renvoie <span
                class="f_Variables">1</span> si au moins une traverse est fixée
                sur le bord en cours de calcul.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">Finition</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la valeur de la
                catégorie de la <a href="finition.php">finition</a> extérieure
                associée aux cadres ouvrant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="215"
                style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">FinitionInt</span></p>
              </td>
              <td width="72" style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la valeur de la
                catégorie de la <a href="finition.php">finition</a> intérieure
                associée aux cadres ouvrant.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="215"
              style="width: 215px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">MargeTechnique</span></p>
              </td>
              <td valign="middle" width="72"
              style="width: 72px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
                style="width: 512px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">S'utilise en remplacement de
                la marge supplémentaire définie dans l'onglet <span
                style="font-weight: bold;">Description</span> du cadre. </p>

                <p style="margin: 0px 0px 0px 14px;">Elle doit être paramétrée
                dans la première page profil du cadre impérativement, et
                affectera donc tous les onglets (profils articles MO...)</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="215"
              style="width: 215px; height: 9px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 9px;"><span
                class="f_Variables">MargeComposant</span></p>
              </td>
              <td valign="middle" width="72"
              style="width: 72px; height: 9px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td width="512"
              style="width: 512px; height: 9px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">S'utilise en remplacement de
                la marge supplémentaire définie dans l'onglet <span
                style="font-weight: bold;">Description</span> du cadre. </p>

                <p style="margin: 0px 0px 0px 14px;">La variable devra être
                initialisée dans la formule du composant concerné, et
                n'affectera que celui ci.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="215"
              style="width: 215px; height: 36px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 7px;"><span
                class="f_Variables">AisanceSupplementaire</span></p>
              </td>
              <td valign="middle" width="72"
              style="width: 72px; height: 36px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAaMm</span></p>
              </td>
              <td valign="top" width="512"
              style="width: 512px; height: 36px; border: solid 1px #c0c0c0;"><p
                style="margin: 7px 0px 7px 13px;">Cette nouvelle variable
                renvoie le paramètre « Aisance supplémentaire vitrage » défini
                par défaut, et vous permet de lui attribuer une autre
                valeur.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
