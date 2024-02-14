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
if(top.frames.length==0) { top.location.href="index.php?travariables.php"; }
else { parent.quicksync('a5.4.3'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Variables</title>
  <meta name="keywords"
  content="Length,Quantity,Dimension,ExtDimension,TransomIndex,Radius,Angle1,Angle2,MillingCategory,X0,Y0,X1,Y1,LargerHeight,ArticleWidth,ArticleHeight,Thickness,SawId,DeliveryPreparation,SimpleFactDoc,CustomerDoc,QualityControl,GlassThicknessCount,GlassThickness[],AboveVoid,BesideVoid,BesideADoor,DoorToLeft,AboveADoor,Orientation,Horizontal,Vertical,ProfileThickness,VoidToLeft,VoidToRight,ShortTransom,VoidHeight,Beneath,Above,ToTheLeft,ToTheRight,Width,Height,Axis,AxisInLeaf,TopHeight,BottomHeight,LeftWidth,RightWidth,TransomThroughTop,TransomThroughBottom,TransomThroughLeft,TransomThroughRight,SubSegmentsCount,VoidLeftOfSegment[],SegmentType[],SegmentDim[],SegmentAssembly1[],NoAssembly,Miter,StraightLong,StraightShort,BetweenSegments,Normal,Reversed,Transom,TransomIndex1[],TransomIndex2[],SegmentX0[],SegmentY0[],SegmentX1[],SegmentY1[],CrossSectionPosition,VarLin">
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
        href="traquestions.php">Previous</a>  <a
        href="traprofiles.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>WinPro generates several variables to help you compute the transom's
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
                      <td width="17">
					  <span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Notes">Some formulas are followed by the numbers 1 or 2 (e.g. <span class="f_variables">Angle1</span>,
					  <span class="f_Variables">Angle2</span>). In such cases, 1 is the left end of the side when the frame is laid  
					  flat, with the corresponding side towards you (so, 1 = left of the bottom side, right of the top side, top of the left side, 
					  bottom of the right side).</td>
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
                      <td>The <span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span>
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
                      <td>The Usage column explains in which context the variable can be used:</td>
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
                style="text-align: center;"><span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
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
                      <td><span style="font-weight: bold;">Profiles:</span>
                        Cut length of the profile. </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="text-indent: 16px;"><span
                style="color: #ff0000;">You must define this value, otherwise the profile is not generated.!</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Articles:</span>
						Length of the article, used to define its price if a one dimension price table is tied
                        to the article. It is also used to define the value
                        which will replace <a href="macros___.php">macro
                        #2#</a> if this macro is used in the article
                        definition. This variable is ignored if variables
                        <span class="f_Variables">ArticleHeight</span> and <span class="f_Variables">ArticleWidth</span> are defined. 
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
                style="font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
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
                        </span>Number of identical profiles to cut. This must be an integer number.</td>
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
                      <td><span style="font-weight: bold;">Articles:</span>Number of identical articles to
                        use. This may be any fractional value.</td>
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
                      <td><span style="font-weight: bold;">Labour:</span> Length of the operation, in
                        seconds. You can also use a time notation (hour:minutes:seconds or minutes:seconds - see the
                        section on <a href="nombres.php">numbers</a>). Fractional seconds are allowed. </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="text-indent: 16px;"><span
                style="color: #ff0000;">You must define this value, otherwise the profile is not generated.!</span></p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Dimension</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Length of transom, between both inside edge of the sash or outer frame.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ExtDimension</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Length of transom, extended to the
                outside of the outer frame or the first transom's
                axis.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">SashIndex</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Index of the sash to which the transom
                belongs (index into the <a href="varouvrantetquincaillerie.php">global
                sash variables</a>). Contains 0 if the transom belongs to the
                outer frame.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TransomIndex</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Index of the transom into the <a
                href="vartraverse.php">global transom variables</a>.
				</p>
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
                style="margin: 0px 0px 0px 16px;">You may create this variable to force
                an arched shape for the profile, or force its radius.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Angle1</span><span class="f_Variables"
                style="font-weight: bold;">, </span><span
                class="f_Variables">Angle2</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Cutting angle of each end of the profile.</p>
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
                style="text-indent: 1px; margin: 0px 0px 0px 15px;">Milling category of the profile, used
                for <a
                href="usinage.php">SPECIAL type millings</a>. You can dynamically change this
                value.</p>

                <p style="text-indent: 1px; margin: 0px 0px 0px 15px;"><a
                href="prfdescription.php">Default value is defined into the profile</a>.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span class="f_Variables">X0</span>, <span class="f_Variables">Y0</span>, 
				<span class="f_Variables">X1</span>, <span class="f_Variables">Y1</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Position of each end of the profile
                (0,0 is at the bottom left <span style="text-decoration: underline;">of the outer frame</span>).</p>

                <p style="margin: 0px 0px 0px 16px;">You may change these values to move the profile. </p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">SmallerHeight</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Thickness of the profile, minus glass
                rebates. You may change this value; in that case WinPro will
                use the new value as the transom's smaller height, instead of
                the standard one.
				<span style="color: #ff0000;">Attention, the glass rebate value must match the one of the frame where the transom is joined.</span></p>

                <p style="margin: 0px 0px 0px 16px;"><span
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

                        <p style="margin: 0px 0px 0px 13px;">Variable sections must <span
                        style="font-weight: bold; color: #ff0000;">imperatively
                        </span> be set up into the first profile page of concerned frame, otherwise they are ignored !</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="text-align: center;"><span style="color: #ff0000;"> </span></p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">LargerHeight</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Thickness of the profile, including glass
                rebates. You may change this value; in that case WinPro will
                use the new value as the transom's smaller height, instead of
                the standard one.
				<span style="color: #ff0000;">Attention, the glass rebate value must match the one of the frame where the transom is joined.</span></p>

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

                        <p style="margin: 0px 0px 0px 13px;">Variable sections must <span
                        style="font-weight: bold; color: #ff0000;">imperatively
                        </span> be set up into the first profile page of concerned frame, otherwise they are ignored !</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="text-align: center;"><span style="color: #ff0000;"> </span></p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ArticleWidth</span><span
                class="f_Variables" style="font-weight: bold;">, </span><span
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
                style="margin: 0px 0px 0px 16px;">Those 2 variables let you define 2
                dimensions which are used to find the price of an article with
                a 2 dimension price table. They are also used to replace the <a
                href="macros___.php">macro #2#</a> if it appears in the article
                description. You must define these variables if you need
                them.</p>
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
                style="margin: 0px 0px 0px 17px;">This variable lets you define a value
                which will replace the <a href="macros___.php">macro #3#</a> if
                it is present in the article description. You must define this
                variable if you need it.</p>
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
                style="margin: 0px 0px 0px 16px;">This variable lets you dynamically
                reassign the profile to a different saw (e.g. for special
                cutting angles). You must define this variable if you need
                it.</p>
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
                style="margin: 0px 0px 0px 13px;">This variable lets you dynamically
                change the setting which decides of the printing of the article
                on delivery preparation documents. You must define this
                variable if you need it.</p>
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
                style="margin: 0px 0px 0px 13px;">This variable lets you dynamically
                change the setting which decides of the printing of the article
                on simplified factory documents. You must define this variable
                if you need it.</p>
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
                style="margin: 0px 0px 0px 13px;">This variable lets you dynamically
                change the setting which decides of the printing of the article
                on customer documents. You must define this variable if you
                need it.</p>
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
                style="margin: 0px 0px 0px 13px;">This variable lets you dynamically
                change the setting which decides of the printing of the article
                on quality control documents. You must define this variable if
                you need it.</p>
              </td>
            </tr>
            
			<tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">GlassThicknessCount</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Count of different filling thicknesses
                in the leaf containing this transom. Contains 0 for transoms in
                outer frames.</p>
              </td>
            </tr>
            
			<tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">GlassThickness[]</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">List of all different filling
                thicknesses in the leaf containing the transom.</p>
              </td>
            </tr>
            
			<tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ProfileThickness</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 18px;">Profile thickness. This variable
                contains the same value as <span class="f_Variables">SmallerHeight</span>, but must not be changed by the user.</p>
              </td>
            </tr>
            
			<tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Orientation</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Tansom's orientation:
                <span class="f_Variables">Horizontal</span> or <span
                class="f_Variables">Vertical</span>.</p>
              </td>
            </tr>
            
			<tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">AboveADoor</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;"><span
                class="f_Textestd">Contains <span class="f_Variables">True()</span> if the transom touches the upper side of a door.</p>
              </td>
            </tr>
            
			<tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">BesideADoor</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;"><span
                class="f_Textestd">Contains <span class="f_Variables">True()</span> if the transom touches the left or
                right side of a door.</p>
              </td>
            </tr>
            
			<tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DoorToLeft</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;"><span
                class="f_Textestd">Contains <span class="f_Variables">True()</span> if the transom touches the right side
                of a door.</p>
              </td>
            </tr>

			<tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DoorToRight</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;"><span
                class="f_Textestd">Contains <span class="f_Variables">True()</span> if the transom touches the left side
                of a door.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">AboveVoid</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;"><span
                class="f_Textestd">Contains <span class="f_Variables">True()</span> if the transom touches the upper side
                of an empty area.</p>
              </td>
            </tr>
            
			<tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">BesideVoid</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;"><span
                class="f_Textestd">Contains <span class="f_Variables">True()</span> if the transom touches the left or
                right side of an empty area.</p>
              </td>
            </tr>
            
			<tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">VoidToLeft</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;"><span
                class="f_Textestd">Contains <span class="f_Variables">True()</span> if the transom touches the right side
                of an empty area.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">VoidToRight</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;"><span
                class="f_Textestd">Contains <span class="f_Variables">True()</span> if the transom touches the left side of
                an empty area.</p>
              </td>
            </tr>
            
			<tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ShortTransom</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Contains <span class="f_Variables">True()</span> if the transom is shortened because of
                a door sill.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">VoidHeight</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Height of the empty part beside the
                transom.</p>
              </td>
            </tr>
           
     		<tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Beneath</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Contains <span
                class="f_Variables">Transom</span> if the lower end of the vertical
                transom connects to another transom.</p>
              </td>
            </tr>

     		<tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Above</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Contains <span
                class="f_Variables">Transom</span> if the upper end of the vertical
                transom connects to another transom.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ToTheLeft</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Contains <span class="f_Variables">Transom</span> if the left end of the horizontal
                transom connects to another transom.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ToTheRight</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Contains <span class="f_Variables">Transom</span> if the right end of the horizontal
                transom connects to another transom.</p>
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
                style="margin: 0px 0px 0px 17px;">Width of the frame containing the
                transom (outer frame or sash).</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Height</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Height of the frame containing the
                transom (outer frame or sash).</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Axis</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Position of the transom's axis in the
                window (position 0 is at the lower left corner of the outer
                frame).</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Leaf</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Index of the leaf containing the
                transom (0 if outer frame).</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">AxisInLeaf</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Position of the transom's axis in the
                leaf.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TopHeight</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;"><span
                style="text-decoration: underline;">· Horizontal outer frame transom :</span> Returns the same value as the 
				sash variable TotalHeight – 2 * outer frame glass rebate for the highest sash above this transom and joining it.</p>

                <p style="margin: 0px 0px 0px 17px;"> </p>

                <p style="margin: 0px 0px 0px 17px;"><span style="text-decoration: underline;">· Horizontal sash frame transom :</span> 
				Returns the visible height of the most important glass unit located above the transom and joining it. This definition might 
				be applied to outer frame as soon as it is considered that the sash frame is a fixed pane.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">BottomHeight</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;"><span
                style="text-decoration: underline;">· Horizontal outer frame transom :</span> Returns the same value as the 
				sash variable TotalHeight – 2 * outer frame glass rebate for the highest sash below this transom and joining it.</p>

                <p style="margin: 0px 0px 0px 17px;"> </p>

                <p style="margin: 0px 0px 0px 17px;"><span style="text-decoration: underline;">· Horizontal sash frame transom :</span> 
				Returns the visible height of the most important glass unit located below the transom and joining it. This definition might 
				be applied to outer frame as soon as it is considered that the sash frame is a fixed pane.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">LeftWidth</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;"><span
                style="text-decoration: underline;">· Vertical outer frame transom :</span> Returns the same value as the 
				sash variable TotalWidth – 2 * outer frame glass rebate for the largest sash frame on the left of this transom and joining it.</p>

                <p style="margin: 0px 0px 0px 17px;"> </p>

                <p style="margin: 0px 0px 0px 17px;"><span
                style="text-decoration: underline;">· Vertical sash transom :</span> Returns the visible width of the most important 
				glass unit located on the left of the transom and joining it. This definition might be applied to outer frame as soon as it is 
				considered that the sash frame is a fixed pane.</p>

                <p style="margin: 0px 0px 0px 17px;"> </p>

                <p style="margin: 0px 0px 0px 17px;"><img
                src="img/clip0268.zoom88eng.jpg" width="308" height="97" border="0"
                alt="clip0268eng"></p>

                <p style="margin: 0px 0px 0px 17px;"> </p>

                <p style="margin: 0px 0px 0px 17px;"><img src="img/clip0269.jpg"
                width="264" height="247" border="0" alt="clip0269"></p>

                <p style="margin: 0px 0px 0px 17px;">For the greyed transom, the <span
                style="font-size: 18pt; font-weight: bold;">*</span> holes are the position retrieved by WinPro to initialize variables <span
                class="f_Variables">LeftWidth/RightWidth.</span></p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">RightWidth</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;"><span
                style="text-decoration: underline;">· Vertical outer frame transom :</span> Returns the same value as the 
				sash variable TotalWidth – 2 * outer frame glass rebate for the largest sash frame on the right of this transom and joining it.</p>

                <p style="margin: 0px 0px 0px 17px;"> </p>

                <p style="margin: 0px 0px 0px 17px;"><span
                style="text-decoration: underline;">· Vertical sash transom :</span> Returns the visible width of the most important 
				glass unit located on the right the transom and joining it. This definition might be applied to outer frame as soon as it is 
				considered that the sash frame is a fixed pane.</p>

              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TransomThroughTop</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Contains <span class="f_Variables">True()</span> if the vertical transom goes through
                the outer frame on the top side.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TransomThroughBottom</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Contains <span class="f_Variables">True()</span> if the vertical transom goes through
                the outer frame on the bottom side.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TransomThroughLeft</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Contains <span class="f_Variables">True()</span> if the horizontal transom goes through
                the outer frame on the left side.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TransomThroughRight</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Contains <span class="f_Variables">True()</span> if the horizontal transom goes through
                the outer frame on the right side.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">SubSegmentsCount</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Number of sub segments for a profile with multiple segments 
				(mixed pane types inward/outward or continuous transom).</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">VoidLeftOfSegment[]</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Contains <span class="f_Variables">True()</span> for each sub-segment touching an empty
                part on the left of the transom.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">VoidRightOfSegment[]</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Contains <span class="f_Variables">True()</span> for each sub-segment touching an empty
                part on the right of the transom.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">SegmentType[]</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Type of each sub-segment: <span class="f_Variables">Normal</span> or 
				<span class="f_Variables">Reversed</span>.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">SegmentDim[]</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Length of each sub-segment.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">SegmentAssembly1[]</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">SegmentAssembly2[]</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">These variables contain the assembling
                mode of each end of each sub-segment. Possible values
                are:</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 42px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">Miter</span>: 45° corner.
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 42px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">StraightLong</span>: straight corner, the profile
                        stops at the end of the corner.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 42px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">StraightShort</span>: straight corner, the profile
                        stops on the inner of outer frame profile.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 42px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">NoAssembly</span>: No assembly (e.g. transom
                        between 2 doors or a door and an empty area).</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 42px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">BetweenSegments</span>: connection to the end of
                        another segment.</td>
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
                class="f_Variables">TransomIndex1[],
                TransomIndex2[]</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Index in the <a
                href="vartraverse.php">global transom variables</a>, on each end
                of the sub-segment. One end of the first and last sub-segments
                has the index 0 if it connects to the outer frame.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">SegmentX0[], SegmentY0[], SegmentX1[], SegmentY1[]</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Position of each end of each
                sub-segment (point 0,0 is at the lower left corner of the outer
                frame).</p>
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
                style="margin: 0px 0px 0px 17px;">This variable is used only when
                generating cross-sections. It tells you the horizontal or
                vertical position of the section. Note that if the window has
                several cross sections, it will be recomputed once per section,
                so that this variable always has a single value.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ExtFinishing</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><br>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Returns the value of the outside <a href="finition.php">finishing</a> category 
				related to outer frame in case of outer frame transom, of sash frames in case of sash transom.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">IntFinishing</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><br>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Returns the value of the inside <a href="finition.php">finishing</a> category 
				related to outer frame in case of outer frame transom, of sash frames in case of sash transom.</p>
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

            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">LeftCornerEmpty</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Returns <span class="f_Variables">True()</span> when horizontal transom is above an empty part 
				AND when Angle1 of the transom is above the empty part AND the trasom is joined to the outer frame.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">RightCornerEmpty</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Returns <span class="f_Variables">True()</span> when horizontal transom is above an empty part 
				AND when Angle2 of the transom is above the empty part AND the trasom is joined to the outer frame.</p>
              </td>
            </tr>
			
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#fff7ef"
        border="2"
        style="background-color: #fff7ef; border: solid 3px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">VarLin</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="559"
                style="width: 559px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 19px;">You may assign a value to this variable; the content of the
                variable is stored into Var field of table Lin.dbf, when the component is exported.</p>
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
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>WinPro génère toute une série de variables pour vous aidez à
        calculer vos composants de traverse. En voici la liste. </p>

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
                        class="f_variables">Angle2</span><span class="f_Notes">).
                        Dans ces cas de figures, 1 est donné pour la valeur à
                        gauche lorsque le cadre est mit à plat, le côté
                        correspondant vers vous. (donc, 1 = gauche du bord bas,
                        droite du bord haut, haut du côté gauche, bas du côté
                        droit).</span></td>
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
                      <td>Le signe <span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span>
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
                      <td>Le signe <span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span>
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
                style="text-align: center;"><span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span>
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
                style="text-align: center;"><span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAM</span></p>
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
                      <td><span style="font-weight: bold;">Profils:
                        </span>Nombre de profils identique à produire. Il doit
                        s'agir d'un nombre entier.</td>
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
                        Nombre d'articles identiques à produire. Il peut s'agir
                        d'un nombre fractionnaire.</td>
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
                        d'oeuvres:</span> Durée de l'opération, exprimée en
                        secondes. Vous pouvez également utilisé une notation en
                        minute:seconde, ou encore en heure:minute:seconde (voir
                        la page d'aide sur les <span style="color: #0000ff;"><a
                        href="nombres.php">nombres</a></span>). Les fractions
                        de seconde sont prises en compte. </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="text-indent: 1px; margin: 0px 0px 0px 16px;"><span
                style="color: #ff0000;">Vous devez définir cette variable,
                sinon le composant n'est pas consommé!</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Dimension</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 17px;">Dimension
                mesurée entre les deux faces intérieures de l'ouvrant ou du
                dormant.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DimensionHT</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Longueur de la traverse,
                étendue à l'extérieur du dormant ou à l'axe de la première
                traverse.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">NumeroOuvrant</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Index du numéro d'ouvrant
                auquel la traverse appartient (index dans les <a
                href="varouvrantetquincaillerie.php">variables globales
                d'ouvrant</a>). Contient zéro en cas de traverse dormant.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">NumeroTraverse</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Index de la traverse dans les
                <a href="vartraverse.php">variables globales de
                traverses</a>.</p>
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
                style="text-align: center;"><span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Cette variable se renseigne
                pour forcer une forme cintrée sur un profil de traverse, ou
                pour forcer son rayon.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Angle1</span><span class="f_Variables"
                style="font-weight: bold;">, </span><span
                class="f_Variables">Angle2</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Angles de coupe à chaque
                extrémité de la traverse.</p>
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
                style="text-align: center;"><span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="text-indent: 1px; margin: 0px 0px 0px 15px;">Catégorie
                d'usinage de base du profil, utilisée par les <a
                href="usinage.php">usinages de type SPECIAL</a>. Vous pouvez
                modifier dynamiquement cette valeur.</p>

                <p style="text-indent: 1px; margin: 0px 0px 0px 15px;"><a
                href="prfdescription.php">La valeur par défaut est définie dans
                le profil</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">X0</span><span class="f_Variables"
                style="font-weight: bold;">, </span><span
                class="f_Variables">Y0</span><span class="f_Variables"
                style="font-weight: bold;">, </span><span
                class="f_Variables">X1</span><span class="f_Variables"
                style="font-weight: bold;">, </span><span
                class="f_Variables">Y1</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Position de chacune des
                extrémités du profil (le point 0,0 correspond au coin inférieur
                gauche <span style="text-decoration: underline;">du
                dormant</span>).</p>

                <p style="margin: 0px 0px 0px 16px;">Modifier ces valeurs
                repositionne le profil dans l'espace. </p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">PetiteHauteur</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Epaisseur du profil, hors
                battées vitrage. Si vous modifiez la valeur de cette variable,
                WinPro en tiendra compte pour faire varier la section du
                profil. <span style="color: #ff0000;">Attention, la  valeur de
                la battée vitrage  doit être identique à celle du cadre dans
                lequel la traverse est fixée.</span></p>

                <p style="margin: 0px 0px 0px 16px;"><span
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
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">GrandeHauteur</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Epaisseur du profil, battées
                vitrage incluses. Si vous modifiez la valeur de cette variable,
                WinPro en tiendra compte pour faire varier la section du
                profil. <span style="color: #ff0000;">Attention, la  valeur de
                la battée vitrage  doit être identique à celle du cadre dans
                lequel la traverse est fixée.</span></p>

                <p style="margin: 0px 0px 0px 16px;"><span
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
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">LargeurArticle</span><span
                class="f_Variables" style="font-weight: bold;">, </span><span
                class="f_Variables">HauteurArticle</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Ces deux variables vous
                permettent de définir deux dimensions qui seront utilisées
                d'une part pour déterminer le prix du profil si une grille de
                prix à deux dimensions lui est attachée, et d'autre part en
                remplacement de la <a href="macros___.php">macro #2#</a> si
                celle-ci est présente dans la description du profil. Vous devez
                définir ces variables vous-même.</p>
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
                style="text-align: center;"><span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Cette variable vous permet de
                définir une valeur qui sera utilisée pour remplacer la <a
                href="macros___.php">macro #3# </a>si celle-ci est présente
                dans la description du profil. Vous devez définir cette
                variable vous-même.</p>
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
                style="text-align: center;"><span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Cette variable vous permet de
                modifier dynamiquement le numéro de scie liée au profil. Vous
                devez définir vous-même cette variable si vous désirez modifier
                le numéro de scie.</p>
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
                style="text-align: center;"><span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                modifier dynamiquement l'impression du profil sur les documents
                de préparation de livraison. Lorsque l'on utilise cette
                variable, il faut impérativement décocher la case "Préparation
                livraison" de la fiche article. Vous devez définir vous-même
                cette variable si vous désirez modifier ce paramètre.</p>
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
                style="text-align: center;"><span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                modifier dynamiquement l'impression du composant sur les plans
                d'atelier simplifiés. Lorsque l'on utilise cette variable, il
                faut impérativement décocher la case "Plan d'atelier simplifié"
                de la fiche article. Vous devez définir vous-même cette
                variable si vous désirez modifier ce paramètre.</p>
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
                style="text-align: center;"><span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                modifier dynamiquement l'impression du profil sur les documents
                client. Lorsque l'on utilise cette variable, il faut
                impérativement décocher la case "Documents client" de la fiche
                article. Vous devez définir vous-même cette variable si vous
                désirez modifier ce paramètre.</p>
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
                style="text-align: center;"><span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                modifier dynamiquement l'impression du profil sur les documents
                de contrôle qualité. Lorsque l'on utilise cette variable, il
                faut impérativement décocher la case "Contrôle qualité" de la
                fiche article. Vous devez définir vous-même cette variable si
                vous désirez modifier ce paramètre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">nEpaisseurVitrage</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Compteur du nombre
                d'épaisseur de remplissages différentes dans le vantail
                contenant la traverse. Contient zéro pour une traverse de
                dormant.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">EpaisseurVitrage[]</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Liste de toutes les
                épaisseurs de remplissages dans le vantail contenant la
                traverse.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">EpaisseurProfil</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 18px;">Epaisseur du profil. Cette
                variable contient la même valeur que <span
                class="f_Variables">PetiteHauteur</span>, mais ne peut être
                modifié par l'utilisateur.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Orientation</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Orientation de la traverse:
                <span class="f_Variables">Horizontal</span> ou <span
                class="f_Variables">Vertical</span>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">AuDessusPorte</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;"><span
                class="f_Textestd">Contient </span><span
                class="f_Variables">Vrai()</span> si la traverse touche la
                traverse haute d'une porte.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ACotePorte</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;"><span
                class="f_Textestd">Contient </span><span
                class="f_Variables">Vrai()</span> si la traverse touche le
                montant gauche ou droit d'une porte.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">PorteAGauche</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;"><span
                class="f_Textestd">Contient </span><span
                class="f_Variables">Vrai()</span> si la traverse touche le
                montant droit d'une porte.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">PorteADroite</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;"><span
                class="f_Textestd">Contient </span><span
                class="f_Variables">Vrai()</span> si la traverse touche le
                montant gauche d'une porte.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">AuDessusVide</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;"><span
                class="f_Textestd">Contient </span><span
                class="f_Variables">Vrai()</span> si la traverse touche la zone
                haute d'une partie vide.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">aCoteVide</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;"><span
                class="f_Textestd">Contient </span><span
                class="f_Variables">Vrai()</span> si la traverse touche le côté
                gauche ou droit d'une partie vide.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">VideAGauche</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;"><span
                class="f_Textestd">Contient </span><span
                class="f_Variables">Vrai()</span> si la traverse est en contact
                direct avec une partie vide et que celle ci se trouve sur sa
                gauche.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">VideADroite</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;"><span
                class="f_Textestd">Contient </span><span
                class="f_Variables">Vrai()</span>si la traverse est en contact
                direct avec une partie vide et que celle ci se trouve sur sa
                droite.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TraverseRaccourcie</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Contient <span
                class="f_Variables">Vrai()</span> si la traverse est raccourcie
                par un seuil de porte</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">HauteurVide</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Hauteur de la partie vide à
                côté de la traverse</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">enBas</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Contient <span
                class="f_Variables">Traverse</span> si l'extrémité basse d'une
                traverse verticale se connecte à une autre traverse</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">enHaut</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Contient <span
                class="f_Variables">Traverse</span> si l'extrémité haute d'une
                traverse verticale se connecte à une autre traverse</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">aGauche</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Contient <span
                class="f_Variables">Traverse</span> si l'extrémité gauche d'une
                traverse horizontale se connecte à une autre traverse</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">aDroite</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Contient <span
                class="f_Variables">Traverse</span> si l'extrémité gauche d'une
                traverse horizontale se connecte à une autre traverse</p>
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
                style="margin: 0px 0px 0px 17px;">Largeur du cadre contenant la
                traverse (dormant ou ouvrant)</p>
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
                style="margin: 0px 0px 0px 17px;">Hauteur du cadre contenant la
                traverse (dormant ou ouvrant)</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Axe</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Position de l'axe de la
                traverse dans la fenêtre (la position 0 est dans le coin
                inférieur gauche du dormant)</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Position</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Index du vantail contenant la
                traverse (0 si dormant).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">AxeDansCadre</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Position de l'axe de la
                traverse dans le vantail.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">HauteurHaut</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;"><span
                style="text-decoration: underline;">· Cas d’une traverse
                horizontale de dormant :</span> Renvoie la même valeur que la variable d’ouvrant
                HauteurTotale – 2 * battée à vitrage dormant de l’ouvrant le plus haut
                se trouvant au-dessus de cette traverse et étant en contact avec celle-ci.</p>

                <p style="margin: 0px 0px 0px 17px;"> </p>

                <p style="margin: 0px 0px 0px 17px;"><span
                style="text-decoration: underline;">· Cas d’une traverse
                horizontale d’ouvrant :</span> Renvoie la hauteur du vu vitrage le plus important
                se trouvant au-dessus de cette traverse et étant en contact avec
                celle-ci. On peut aussi appliquer cette définition au cadre
                dormant pour autant que l’on considère que l’ouvrant est un fixe
                simple cadre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">HauteurBas</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;"><span
                style="text-decoration: underline;">· Cas d’une traverse
                horizontale de dormant :</span> Renvoie la même valeur que la variable d’ouvrant
                HauteurTotale – 2 * battée à vitrage dormant de l’ouvrant le plus haut
                se trouvant en-dessous de cette traverse et étant en contact avec
                celle-ci.</p>

                <p style="margin: 0px 0px 0px 17px;"> </p>

                <p style="margin: 0px 0px 0px 17px;"><span
                style="text-decoration: underline;">· Cas d’une traverse
                horizontale d’ouvrant :</span> Renvoie la hauteur du vu vitrage le plus important
                se trouvant en-dessous de cette traverse et étant en contact avec
                celle-ci. On peut aussi appliquer cette définition au cadre
                dormant pour autant que l’on considère que l’ouvrant est un fixe
                simple cadre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">LargeurGauche</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;"><span
                style="text-decoration: underline;">· Cas d’une traverse
                verticale de dormant :</span> Renvoie la même valeur que la variable d’ouvrant
                LargeurTotale – 2 * battée à vitrage dormant de l’ouvrant le plus large se
                trouvant à gauche de cette traverse et étant en contact avec
                celle-ci.</p>

                <p style="margin: 0px 0px 0px 17px;"> </p>

                <p style="margin: 0px 0px 0px 17px;"><span
                style="text-decoration: underline;">· Cas d’une traverse
                verticale d’ouvrant :</span> Renvoie la largeur du vu vitrage le plus important
                se trouvant à gauche de cette traverse et étant en contact avec
                celle-ci. On peut aussi appliquer cette définition au cadre
                dormant pour autant que l’on considère que l’ouvrant est un fixe
                simple cadre.</p>

                <p style="margin: 0px 0px 0px 17px;"> </p>

                <p style="margin: 0px 0px 0px 17px;"><img
                src="img/clip0268.zoom88.jpg" width="308" height="97" border="0"
                alt="clip0268"></p>

                <p style="margin: 0px 0px 0px 17px;"> </p>

                <p style="margin: 0px 0px 0px 17px;"><img src="img/clip0269.jpg"
                width="264" height="247" border="0" alt="clip0269"></p>

                <p style="margin: 0px 0px 0px 17px;">Pour la traverse grisée,
                sont marqués d'un <span
                style="font-size: 18pt; font-weight: bold;">*</span> les trous
                que WinPro retient pour initialiser les variables <span
                class="f_Variables">LargeurGauche/LargeurDroite.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">LargeurDroite</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;"><span
                style="text-decoration: underline;">· Cas d’une traverse
                verticale de dormant :</span> Renvoie la même valeur que la variable d’ouvrant
                LargeurTotale – 2 * battée à vitrage dormant de l’ouvrant le plus large se
                trouvant à droite de cette traverse et étant en contact avec
                celle-ci.</p>

                <p style="margin: 0px 0px 0px 16px;"> </p>

                <p style="margin: 0px 0px 0px 16px;"><span
                style="text-decoration: underline;">· Cas d’une traverse
                verticale d’ouvrant :</span> Renvoie la largeur du vu vitrage le plus important
                se trouvant à droite de cette traverse et étant en contact avec
                celle-ci. On peut aussi appliquer cette définition au cadre
                dormant pour autant que l’on considère que l’ouvrant est un fixe
                simple cadre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">FilanteHaut</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Contient <span
                class="f_Variables">Vrai()</span> si la traverse verticale est
                filante et sectionne le dormant en partie haute.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">FilanteBas</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Contient <span
                class="f_Variables">Vrai()</span> si la traverse verticale est
                filante et sectionne le dormant en partie bas.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">FilanteGauche</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Contient <span
                class="f_Variables">Vrai()</span> si la traverse horizontale
                est filante et sectionne le dormant à gauche.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">FilanteDroite</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Contient <span
                class="f_Variables">Vrai()</span> si la traverse horizontale
                est filante et sectionne le dormant à droite.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">NbSousSegments</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Nombre de sous-segments dans
                un profil à segments multiples (inversion de frappe ou traverse
                filante).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">VideAGaucheSegment[]</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Contient <span
                class="f_Variables">Vrai()</span> pour chaque sous-segment
                touchant une partie vide à gauche de la traverse.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">VideADroiteSegment[]</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Contient <span
                class="f_Variables">Vrai()</span> pour chaque sous-segment
                touchant une partie vide à droite de la traverse.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TypeSegment[]</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Type de chaque sous segment:
                <span class="f_Variables">Normal</span> ou <span
                class="f_Variables">Inverse</span>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DimSegment[]</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Longueur de chaque sous
                segment</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">AssemblageSegment1[]</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">AssemblageSegment2[]</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Ces variables enregistre le
                mode d'assemblage à l'extrémité de chaque sous segment. Les
                valeurs possibles sont: </p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 42px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">Onglet</span>: coin à 45°.
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 42px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">DroitLong</span>: coupe
                        droite, le profil s'arrête à la fin du coin. </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 42px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">DroitCourt</span>: coupe
                        droite, le profil s'arrête à l'arête intérieure du coin
                        du cadre dormant. </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 42px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">SansAssemblage</span>: Pas
                        d'assemblage (ex. traverses entre 2 portes, ou porte
                        avec partie vide). </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 42px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">EntreSegments</span>:
                        connection à la fin d'un autre segment.</td>
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
                class="f_Variables">IndexTraverse1[],
                IndexTraverse2[]</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Index dans les <a
                href="vartraverse.php">variables globales de traverse </a>,
                pour chaque extrémité d'un sous segment. Une extrémité du
                premier et du dernier segment auront une valeur d'index à zéro
                lorsque connecté à un dormant. </p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">X0Segment[], Y0Segment[], X1Segment[],
                Y1Segment[]</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Position de chaque extrémité
                de chaque sous segment (le point 0,0 est dans le coin inférieur
                gauche du dormant).</p>
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
                style="margin: 0px 0px 0px 17px;">Cette variable n'est utilisée
                que dans le contexte des vues en coupe. Elle vous permet de
                connaître la position de la coupe verticale ou horizontale.
                (N.B.:Si le châssis comporte plusieurs coupes, le châssis est
                recalculé complètement pour chaque coupe)</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Finition</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><br>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Renvoie la valeur de la
                catégorie de la <a href="finition.php">finition</a> extérieure
                associée au cadre dormant si c'est une traverse de dormant, aux
                cadres ouvrants si c'est une traverse d'ouvrant.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">FinitionInt</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><br>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Renvoie la valeur de la
                catégorie de la <a href="finition.php">finition</a> intérieure
                associée au cadre dormant si c'est une traverse de dormant, aux
                cadres ouvrants si c'est une traverse d'ouvrant.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">MargeTechnique</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">S'utilise en remplacement de
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
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">S'utilise en remplacement de
                la marge supplémentaire définie dans l'onglet <span
                style="font-weight: bold;">Description</span> du cadre. </p>

                <p style="margin: 0px 0px 0px 14px;">La variable devra être
                initialisée dans la formule du composant concerné, et
                n'affectera que celui ci.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">VideDansCoinGauche</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Renvoie <span class="f_Variables">Vrai()</span> si la traverse horizontale se trouve 
				au-dessus d'une partie vide ET que l'Angle1 de cette traverse se trouve bien au-dessus de la partie vide ET qu'elle s'assemble 
				sur le cadre dormant.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">VideDansCoinDroit</span></p>
              </td>
              <td valign="middle" width="61"
              style="width: 61px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="553"
                style="width: 553px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Renvoie <span class="f_Variables">Vrai()</span> si la traverse horizontale se trouve 
				au-dessus d'une partie vide ET que l'Angle2 de cette traverse se trouve bien au-dessus de la partie vide ET qu'elle s'assemble 
				sur le cadre dormant.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#fff7ef"
        border="2"
        style="background-color: #fff7ef; border: solid 3px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">VarLin</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="559"
                style="width: 559px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 19px;">Une valeur peut être assignée
                à cette variable. Les valeurs successives seront stockées dans
                la table d'export <span style="font-weight: bold;">Lin</span>,
                champs <span style="font-weight: bold;">Var</span>, à toutes
                fins utiles.</p>
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
