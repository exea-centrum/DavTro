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
if(top.frames.length==0) { top.location.href="index.php?parvariables.php"; }
else { parent.quicksync('a5.1.4'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Variables</title>
  <meta name="keywords" content="Length,Quantity,Dimension,Angle1,Angle2,X0,Y0,X1,Y1,MillingCategory,SashIndex,Leaf,FillingIndex,GlazingBarCategory,GlassThickness,FillingType,Glass,Panel,DecorativePanel,SpecialPanel,Fixed,ArticleWidth,ArticleHeight,Thickness,SawId,DeliveryPreparation,SimpleFactDoc,CustomerDoc,QualityControl,Beneath,Transom,Above,ToTheLeft,ToTheRight,Width,Height,FrameXCenter,FrameYCenter,FrameRadius,FrameSpan,FrameStartAngle,FrameEndAngle,Side,Left,Right,Top,Bottom,TopLeft,TopRight,Shape,Straight,Bow,BasketHandleShape,NBows,Span,StartAngle,EndAngle,Shape=Bow,Radius,Radius[],Span[],StartAngle[],EndAngle[],FrameShape,Rectangle,Trapezium,RightAngledTriangle,TruncatedCorner,Pentagon,TruncatedTrapezium,TruncatedCorner2,RightAngledTrapezium,SimpleTrapezium,TruncatedBow,RoundedCorner,Quadrilateral,Triangle,BullsEye,BasketHandle,FullBasketHandle,HalfBasketHandle,TruncatedBasketHandle,BasketHandle5,FullBasketHandle5,HalfBasketHandle5,TruncatedBasketHandle5,Direction,CrossSectionPosition,VarLin">
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
        href="parglazingbeadcorner.php">Previous</a>  <a
        href="parprofiles.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>WinPro generates several variables to help you compute the glazing
        bead's components, if you have selected to define the glazing bead by
        formulas. They are listed below.</p>

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
                style="width: 605px; border: solid 1px #000000;"><p><span
                style="font-weight: bold; text-decoration: underline;">Notes:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Some formulas are followed by the numbers 1 or 2
                        (e.g. <span class="f_Variables">Angle1</span> or <span
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
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>The <span
                        style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                        style="color: #000000;"> sign tells which variables you
                        can change.</span></td>
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
                      <td>The <span
                        style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                        style="color: #000000;"> sign tells which variables you
                        must create.</span></td>
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
                      <td>The Usage column explains in which context the variable can be used: </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="text-indent: -24px; margin: 0px 0px 0px 77px;">P =
                profiles</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 77px;">A =
                articles</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 77px;">L =
                labours</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#fff7ef"
        border="0"
        style="background-color: #fff7ef; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="170"
                style="width: 170px; border: solid 1px #000000;"><p><span
                style="font-weight: bold;">Variable</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Usage</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Length</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367" style="width: 367px; border: solid 1px #000000;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Profiles:</span><span
                        style="color: #000000;"> Cut length of the profile. You
                        must define this value, otherwise the profile is not
                        generated.</td>
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
                      <td><span style="font-weight: bold;">Articles:</span><span
                        style="color: #000000;"> Length of the article, used to
                        define its price if a one dimension price table is tied
                        to the article. It is also used to define the value
                        which will replace <a href="macros___.php">macro
                        #2#</a> if this macro is used in the article
                        definition. This variable is ignored if variables
                        </span><span
                        style="font-family: 'Courier New'; color: #0000ff;">ArticleHeight</span><span
                        style="color: #000000;"> and </span><span
                        style="font-family: 'Courier New'; color: #0000ff;">ArticleWidth</span><span
                        style="color: #000000;"> are defined. You must define
                        this value if you need it. </span>
						</tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Quantity</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367" style="width: 367px; border: solid 1px #000000;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Profiles: </span><span style="color: #000000;">Number of
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
                      <td><span style="font-weight: bold;">Articles:</span> Articles:</span><span
                        style="color: #000000;">Number of identical articles to use. This may be any fractional value.</td>
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
                      <td><span style="font-weight: bold;">Labour:</span><span
                        style="color: #000000;">Length of the operation, in
                        seconds. You can also use a time notation
                        (hour:minutes:seconds or minutes:seconds - see the
                        section on <a href="nombres.php">numbers</a>).
                        Fractional seconds are allowed.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="margin: 0px 0px 0px 14px;">You must define this value,
                otherwise the component is not generated.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Dimension</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Length of the current side.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Angle1, Angle2</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Cutting angle of each end of the
                profile. If this is a miter assembly, this is half the angle of
                the corner.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">X0, X1, Y0, Y1</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span>
				<span style="font-weight: bold;">P</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Position of each end of the profile
                (0,0 is at the bottom left of the <span style="text-decoration: underline;">outer frame</span>). You may change
                these values to move the profile</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">MillingCategory</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span>
				<span style="font-weight: bold;">P</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Milling category of the profile, used
                for </span><span
                style="font-family: 'Courier New'; color: #0000ff;">SPECIAL </span><span
                style="color: #0000ff;"><a
                href="usinages.php">millings</a></span><span
                style="color: #000000;">. You can dynamically change this
                value.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">SashIndex</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Index of the sash in the <a
                href="varouvrantetquincaillerie.php">global sash arrays</a>.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Leaf</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Index of the current leaf (1 = leftmost
                or bottommost)</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">FillingIndex</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Index of the filling in the <a
                href="varremplissages.php">global filling arrays</a>.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">GlazingBarCategory</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Category of the glazing bar used in the
                filling corresponding to this glazing bead.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">GlassThickness</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Thickness of the filling corresponding
                to this glazing bead.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">FillingType</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Type of the filling corresponding to
                this glazing bead: </span><span
                style="font-family: 'Courier New'; color: #0000ff;">Glass</span><span
                style="color: #000000;">, </span><span
                style="font-family: 'Courier New'; color: #0000ff;">Panel</span><span
                style="color: #000000;">, </span><span
                style="font-family: 'Courier New'; color: #0000ff;">DecorativePanel</span><span
                style="color: #000000;">, </span><span
                style="font-family: 'Courier New'; color: #0000ff;">SpecialPanel</span>.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Fixed</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Courier New'; color: #0000ff;">True()</span><span
                style="color: #000000;">if the glazing bead is used in a fixed
                sash.</span>.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">ArticleWidth</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">,
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">ArticleHeight</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span>
				<span style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Those 2 variables let you define 2
                dimensions which are used to find the price of an article with
                a 2 dimension price table. They are also used to replace the <a
                href="macros___.php">macro #2#</a> if it appears in the article
                description. You must define these variables if you need
                them.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Thickness</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span>
				<span style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">This variable lets you define a value
                which will replace the <a href="macros___.php">macro #3#</a> if
                it is present in the article description. You must define this
                variable if you need it.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">SawId</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span>
				<span style="font-weight: bold;">P</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">This variable lets you dynamically
                reassign the profile to a different saw (e.g. for special
                cutting angles). You must define this variable if you need
                it.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">DeliveryPreparation</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span>
				<span style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">This variable lets you dynamically
                change the setting which decides of the printing of the article
                on delivery preparation documents. You must define this
                variable if you need it.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">SimpleFactDoc</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span>
				<span style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">This variable lets you dynamically
                change the setting which decides of the printing of the article
                on simplified factory documents. You must define this variable
                if you need it.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">CustomerDoc</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span>
				<span style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">This variable lets you dynamically
                change the setting which decides of the printing of the article
                on customer documents. You must define this variable if you
                need it.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">QualityControl</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span>
				<span style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">This variable lets you dynamically
                change the setting which decides of the printing of the article
                on quality control documents. You must define this variable if
                you need it.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Beneath</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Returns </span><span
                style="font-family: 'Courier New'; color: #0000ff;">Transom</span><span
                style="color: #000000;"> when the lower glazing bead is on a
                transom, 0 otherwise.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Above</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Returns </span><span
                style="font-family: 'Courier New'; color: #0000ff;">Transom</span><span
                style="color: #000000;"> when the upper glazing bead
                is on a transom, 0 otherwise.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">ToTheLeft</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Returns </span><span
                style="font-family: 'Courier New'; color: #0000ff;">Transom</span><span
                style="color: #000000;"> when the left glazing bead
                is on a transom, 0 otherwise.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">ToTheRight</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Returns </span><span
                style="font-family: 'Courier New'; color: #0000ff;">Transom</span><span
                style="color: #000000;"> when the right glazing bead
                is on a transom, 0 otherwise.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Width</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Width of the glazing bead
                frame.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Height</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Height of the glazing bead
                frame.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">FrameXCenter</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">,
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">FrameYCenter</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">These variables hold the coordinates
                the arc for bow shaped frames. Point 0,0 is at the bottom left
                corner of the outer frame. These variables are not created for
                other kinds of segments.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">FrameRadius</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">This variable holds the radius of the
                arc for bow shaped frames. This variable is not created for
                other kinds of segments.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">FrameSpan</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">This variable holds, in degrees, the
                span of the arc for bow shaped frames. This variable is not
                created for other kinds of segments.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">FrameStartAngle</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">,
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">FrameEndAngle</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">These variables hold, in degrees, the
                start and end angle of the arc for bow shaped frames. Angle 0
                is at the right of the horizontal diameter, 90 at the top of
                the vertical diameter. These variables are not created for
                other kinds of segments.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">FrameSpan</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Current side of the glazing bead frame.
                This variable may contain one of these values: </span><span class="f_Variables">Left</span>, <span class="f_Variables">Right</span>, 
				<span class="f_Variables">Top</span>, <span class="f_Variables">Bottom</span>, <span class="f_Variables">TopLeft</span>, 
				<span class="f_Variables"> TopRight</span>.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Shape</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Shape of the current side.
				</span><span class="f_Variables">Straight</span>: Straight segment. <span class="f_Variables">Bow</span>: Simple bow segment (one center, one
                radius). <span class="f_Variables">BasketHandleShape</span>: multi-bow segment (more than one
                center and/or radius).</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">NBows</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">This variable exists only if
                </span><span class="f_Variables">Shape=BasketHandleShape</span>. It contains the number of arcs in the
                bow.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Span</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">This variable exists only if
                </span><span class="f_Variables">Shape=Bow</span>. It holds the span of the arc, in
                degrees. This variable is not created for other kinds of segments.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">StartAngle</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">,
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">EndAngle</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">These variables exist only for segments
                where </span><span
                style="font-family: 'Courier New'; color: #0000ff;">Shape=Bow</span><span
                style="color: #000000;">. It holds the start and end angles of
                the arc, in degrees. Angle 0 is at the right of the horizontal
                diameter, 90 at the top of the vertical diameter. These
                variables are not created for other kinds of
                segments.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Radius</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span>
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">This variable exists only for segments
                where </span><span
                style="font-family: 'Courier New'; color: #0000ff;">Shape=Bow</span><span
                style="color: #000000;">. It holds the radius of the arc.
                </span><span
                style="color: #000000; text-decoration: underline;">In profile
                formulas</span><span style="color: #000000;">: You may create
                or change this variable, to force an arched shape for the
                profile, or force its radius.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Radius[]</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">This variable exists only for segments where 
                </span><span class="f_Variables">Shape=BasketHandleShape</span>. It holds the radius of each arc in
                the segment.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Span[]</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">This variable exists only for segments where 
                </span><span class="f_Variables">Shape=BasketHandleShape</span>. It holds the span of each arc, in
                degrees.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">StartAngle[]</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">,
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">EndAngle[]</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">This variable exists only for segments where 
                </span><span class="f_Variables">Shape=BasketHandleShape</span>. It holds the start and end angles of
                each arc, in degrees. Angle 0 is at the right of the horizontal
                diameter, 90 at the top of the vertical diameter. These
                variables are not created for other kinds of
                segments.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">FrameShape</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">The shape of the glazing bead frame. It
                can contain one of these values:</p>
				<p><p style="margin: 0px 0px 0px 30px;"><span class="f_Variables">Rectangle</span></p>
				<p><p style="margin: 0px 0px 0px 30px;"><span class="f_Variables">Trapezium</span></p>
				<p><p style="margin: 0px 0px 0px 30px;"><span class="f_Variables">RightAngledTriangle</span></p>
				<p><p style="margin: 0px 0px 0px 30px;"><span class="f_Variables">TruncatedCorner</span></p>
				<p><p style="margin: 0px 0px 0px 30px;"><span class="f_Variables">Pentagon</span></p>
				<p><p style="margin: 0px 0px 0px 30px;"><span class="f_Variables">TruncatedTrapezium</span></p>
				<p><p style="margin: 0px 0px 0px 30px;"><span class="f_Variables">TruncatedCorner2</span></p>
				<p><p style="margin: 0px 0px 0px 30px;"><span class="f_Variables">RightAngledTrapezium</span></p>
				<p><p style="margin: 0px 0px 0px 30px;"><span class="f_Variables">SimpleTrapezium</span></p>
				<p><p style="margin: 0px 0px 0px 30px;"><span class="f_Variables">Bow</span></p>
				<p><p style="margin: 0px 0px 0px 30px;"><span class="f_Variables">TruncatedBow</span></p>
				<p><p style="margin: 0px 0px 0px 30px;"><span class="f_Variables">RoundedCorner</span></p>
				<p><p style="margin: 0px 0px 0px 30px;"><span class="f_Variables">Quadrilateral</span></p>
				<p><p style="margin: 0px 0px 0px 30px;"><span class="f_Variables">Triangle</span></p>
				<p><p style="margin: 0px 0px 0px 30px;"><span class="f_Variables">BullsEye</span></p>
				<p><p style="margin: 0px 0px 0px 30px;"><span class="f_Variables">BasketHandle</span></p>
				<p><p style="margin: 0px 0px 0px 30px;"><span class="f_Variables">FullBasketHandle</span></p>
				<p><p style="margin: 0px 0px 0px 30px;"><span class="f_Variables">HalfBasketHandle</span></p>
				<p><p style="margin: 0px 0px 0px 30px;"><span class="f_Variables">TruncatedBasketHandle</span></p>
				<p><p style="margin: 0px 0px 0px 30px;"><span class="f_Variables">BasketHandle5</span></p>
				<p><p style="margin: 0px 0px 0px 30px;"><span class="f_Variables">FullBasketHandle5</span></p>
				<p><p style="margin: 0px 0px 0px 30px;"><span class="f_Variables">HalfBasketHandle5</span></p>
				<p><p style="margin: 0px 0px 0px 30px;"><span class="f_Variables">TruncatedBasketHandle5</span></p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Direction</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Opening direction of the sash frame
                (</span><span class="f_variables">Left</span> or <span class="f_variables">Right</span>).
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">CrossSectionPosition</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;">
				<span style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">This variable is used only when
                generating cross-sections. It tells you the horizontal or
                vertical position of the section. Note that if the window has
                several cross sections, it will be recomputed once per section,
                so that this variable always has a single value.
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">ExtFinishing</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;">Returns numeric value of outside <a href="finition.php">finishing</a> category 
				associated to sash frame for a sash bead, or associated to outer frame in case of fixed pane. Suitable when sash frame or fixed pane frame is checked
                <span style="font-style: italic;">Glazing beads outside
                </span>into <a
                href="ouvdescription.php">Description</a> page.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">IntFinishing</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;">Returns numeric value of inside <a href="finition.php">finishing</a> category 
				associated to sash frame for a sash bead, or associated to outer frame in case of fixed pane.</p>
              </td>
            </tr>
			
			<tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">TechnicalMargin</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Used to replace the additionnal margin defined into <span
                style="font-weight: bold;">Description</span> tab of the concerned frame.</p>

                <p style="margin: 0px 0px 0px 14px;">You need to set it up into the first profile page of concerned frame, 
				imperatively, and will then affect all tabs (profiles articles labour ...)</p>
              </td>
            </tr>
            
			<tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">ComponentMargin</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Used to replace the additionnal margin defined into <span
                style="font-weight: bold;">Description</span> tab of the concerned frame.</p>

                <p style="margin: 0px 0px 0px 14px;">The variable should be set within the concerned component formula, and will only affect this component.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#fff7ef"
        border="0"
        style="background-color: #fff7ef; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="170"
                style="width: 170px; border: solid 1px #000000;"><p><span
                class="f_Variables">VarLin</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">You may assign a value for this variable; the value will be stored into table
				<span style="font-weight: bold;">Lin.dbf</span>, within <span style="font-weight: bold;">Var</span> field.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 24px;"> </p>

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

        <p>WinPro met à disposition une série de variables pour vous aider à
        calculer vos parcloses, lorsque celles ci sont définies par formules.
        En voici la liste:</p>

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
                style="width: 605px; border: solid 1px #000000;"><p><span
                style="font-weight: bold; text-decoration: underline;">Notes:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Certaines formules sont suivies par les numéros 1 ou
                        2 (ex. <span class="f_Variables">Angle1</span>, <span
                        class="f_Variables">Angle2</span>). Dans pareils cas, 1
                        correspondra à la gauche du côté traité, lorsque le
                        cadre est remis à plat, le bord correspondant vers vous
                        (donc, 1 = gauche du bord bas, droite du bord haut,
                        haut du bord gauche, bas du bord droite).</td>
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
                      <td>Le signe <span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span> indique une variable modifiable.</td>
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
                      <td>Le signe <span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span>
                        indique une variable que vous devez créer.</td>
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
                      <td>La colonne Utilisation détaille le contexte dans
                        lequel ces variables peuvent être utilisées:</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="text-indent: -24px; margin: 0px 0px 0px 77px;">P =
                profiles</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 77px;">A =
                articles</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 77px;">M =
                main d'oeuvres</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#fff7ef"
        border="0"
        style="background-color: #fff7ef; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="170"
                style="width: 170px; border: solid 1px #000000;"><p><span
                style="font-weight: bold;">Variable</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Utilisation</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Longueur</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367" style="width: 367px; border: solid 1px #000000;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Profils:</span>
                        Longueur de coupe du profil. Vous devez définir cette
                        variable pour un débit de profil, autrement il ne sera
                        pas consommé.</td>
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
                        Longueur de l'article, utilisé pour calculer son prix
                        lorsqu'une grille de prix lui est assignée. Egalement
                        utilisé pour remplacer la <span
                        style="color: #0000ff;"><a href="macros___.php">macro
                        #2#</a></span> lorsque celle ci est utilisée dans la
                        description de l'article. Cette variable est ignorée
                        lorsque les variables <span
                        class="f_Variables">LargeurArticle </span>et <span
                        class="f_Variables">HauteurArticle</span> sont
                        définies. Cette variable est à définir en cas de
                      besoin.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Quantite</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367" style="width: 367px; border: solid 1px #000000;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Profils:
                        </span>Nombre de profils identiques à consommer, au
                        format nombre entier naturel.</td>
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
                        section relative aux <span style="color: #0000ff;"><a
                        href="nombres.php">nombres</a></span>). Les secondes
                        fractionnelles sont autorisées.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="margin: 0px 0px 0px 14px;">Vous devez définir cette
                variable, sans quoi le composant n'est pas consommé.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Dimension</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Longueur du côté en cours de
                calcul.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Angle1</span><span class="f_Variables"
                style="font-weight: bold;">, </span><span
                class="f_Variables">Angle2</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Angle de coupe des extrémités
                de profils. Pour une coupe d'onglet, c'est la moitié de l'angle
                du coin.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">X0</span><span class="f_Variables"
                style="font-weight: bold;">, </span><span
                class="f_Variables">Y0</span><span class="f_Variables"
                style="font-weight: bold;">, </span><span
                class="f_Variables">X1</span><span class="f_Variables"
                style="font-weight: bold;">, </span><span
                class="f_Variables">Y1</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 16px;">Position de chacune des
                extrémités du profil (le point 0,0 correspond au coin inférieur
                gauche <span style="text-decoration: underline;">du
                dormant</span>).</p>

                <p style="margin: 0px 0px 0px 16px;">Modifier ces valeurs
                repositionne le profil dans l'espace. </p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">CategorieUsinage</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Catégorie d'usinage du
                profil, utilisée pour les <span style="color: #0000ff;"><a
                href="usinages.php">usinages</a> </span>de type <span
                class="f_Variables">SPECIAL</span>. Vous pouvez changer
                dynamiquement cette valeur.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">NumeroOuvrant</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Index de l'ouvrant contenant
                le vitrage, dans les tableaux de <a
                href="varouvrantetquincaillerie.php">variables globales
                d'ouvrant</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Position</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Index du vantail contenant le
                vitrage (1 = vantail le plus en bas à gauche).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">NumeroRemplissage</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Index du vitrage dans les
                tableaux de <a href="varremplissages.php">variables globales de
                remplissages</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">CategorieCroisillon</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Catégorie du croisillon
                utilisé dans le remplissage correspondant à ce cadre de
                parcloses.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">EpaisseurVitrage</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Epaisseur du remplissage
                correspondant à la parclose.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">TypeRemplissage</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Type de remplissage
                correspondant à la parclose: <span class="f_Variables">Vitrage,
                PanneauADecouper, PanneauDecoratif, PanneauFabrique.</span>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Fixe</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Vrai()</span> si la parclose est utilisée
                dans un fixe simple cadre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">LargeurArticle</span><span
                class="f_Variables" style="font-weight: bold;">, </span><span
                class="f_Variables">HauteurArticle</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 12px;">Ces 2 variables permettent de
                définir les dimensions à rechercher dans une éventuelle grille
                de prix. Elles sont aussi utilisée pour remplacer la <span
                style="color: #0000ff;"><a href="macros___.php">macro
                #2#</a></span> lorsque celle ci est utilisée dans la
                description de l'article. Ces variables sont à définir en cas
                de besoin.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Epaisseur</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 15px;">Cette variable permet de
                définir la valeur qui viendra remplacer la <span
                style="color: #0000ff;"><a href="macros___.php">macro #3#</a>,
                </span>lorsque celle ci est présente dans la description de
                l'article. </p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">NumeroScie</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Cette variable vous permet de
                réassigner le profil à une scie différente (ex. pour les angles
                de coupes spéciaux). Cette variable est facultative.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">PrepaLivraison</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                modifier dynamiquement l'impression du profil sur les documents
                de préparation de livraison. Lorsque l'on utilise cette
                variable, il faut impérativement décocher la case "Préparation
                livraison" de la fiche article. Vous devez définir vous-même
                cette variable si vous désirez modifier ce paramètre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">PlanSimplifie</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                modifier dynamiquement l'impression du composant sur les plans
                d'atelier simplifiés. Lorsque l'on utilise cette variable, il
                faut impérativement décocher la case "Plan d'atelier simplifié"
                de la fiche article. Vous devez définir vous-même cette
                variable si vous désirez modifier ce paramètre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">DocClient</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                modifier dynamiquement l'impression du profil sur les documents
                client. Lorsque l'on utilise cette variable, il faut
                impérativement décocher la case "Documents client" de la fiche
                article. Vous devez définir vous-même cette variable si vous
                désirez modifier ce paramètre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">CtrlQualite</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                modifier dynamiquement l'impression du profil sur les documents
                de contrôle qualité. Lorsque l'on utilise cette variable, il
                faut impérativement décocher la case "Contrôle qualité" de la
                fiche article. Vous devez définir vous-même cette variable si
                vous désirez modifier ce paramètre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">enBas</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Contient <span
                class="f_Variables">Traverse</span> lorsque la parclose basse
                est fixée sur une traverse, 0 sinon.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">enHaut</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Contient <span
                class="f_Variables">Traverse</span> lorsque la parclose haute
                est fixée sur une traverse, 0 sinon.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">aGauche</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Contient <span
                class="f_Variables">Traverse</span> lorsque la parclose gauche
                est fixée sur une traverse, 0 sinon.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">aDroite</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Contient <span
                class="f_Variables">Traverse</span> lorsque la parclose droite
                est fixée sur une traverse, 0 sinon.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Largeur</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Largeur du cadre
                parcloses.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Hauteur</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Hauteur du cadre
                parcloses.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">CentreXCadre, CentreYCadre, </span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Ces variables contiennent les
                coordonnées de l'arc d'une partie cintrée. Le point 0,0 est en
                bas à gauche du dormant. Ces variables ne sont pas créées pour
                les segments autres que cintrés.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">RayonCadre</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Cette variable stocke le
                rayon de cintrage d'un châssis en forme cintrée. Cette variable
                n'est créée pour les segments autres que cintrés.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">FrameSpan</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">This variable holds, in
                degrees, the span of the arc for bow shaped frames. This
                variable is not created for other kinds of segments.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">AngleDebutCadre, AngleFinCadre</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Ces variables contiennent, en
                degrés, les angles de début et de fin de la partie cintrée d'un
                châssis en forme. L'angle vaut 0 à droite du diamètre
                horizontal, 90° en haut du diamètre vertical. Ces variables ne
                sont pas créées pour les segments autres que cintrés.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Bord</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Côté en cours de calcul du
                cadre de parcloses. Cette variable contient l'une des valeurs
                suivantes: <span class="f_Variables">Gauche</span><span
                class="f_Variables">Droite Haut Bas HautGauche,
                HautDoite</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Forme</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Forme du bord en cours de
                calcul, parmi les valeurs: <span
                class="f_Variables">Droit</span>: Segment droit.  <span
                class="f_Variables">Cintre</span>: Segment cintré simple (1
                centre, 1 rayon) <span class="f_Variables">Anse</span>: Segment
                avec parties cintrées multiples (plus d'un centre/rayon)</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">NCourbes</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Cette variable existe
                seulement lorsque <span class="f_Variables">Forme=Anse</span>.
                Elle contient le nombre d'arcs dans le cintre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Span</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">This variable exists only for
                segments where <span class="f_Variables">Shape=Bow</span>. It
                holds the span of the arc, in degrees. This variable is not
                created for other kinds of segments.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">AngleDebut, AngleFin</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Ces variables n'existent que
                pour les segments dont la variable <span
                class="f_Variables">Forme=Cintre</span>. Elles contiennent, en
                degrés, les angles de début et de fin de la partie cintrée d'un
                châssis en forme. L'angle vaut 0 à droite du diamètre
                horizontal, 90° en haut du diamètre vertical. Ces variables ne
                sont pas créées pour les segments autres que cintrés.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Rayon</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Cette variable n'existe que
                pour les segments dont la variable <span
                class="f_Variables">Forme=Cintre</span>. Elle contient le rayon
                de cintrage du segment. <span
                style="text-decoration: underline;">Dans les formules de
                profil</span>: Vous pouvez créer ou modifier cette variable
                pour imposer une forme cintrée sur le segment, ou pour en
                forcer la valeur de rayon existante.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Rayon[]</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Cette variable existe
                seulement si This variable exists only if <span
                class="f_Variables">Forme=Anse</span>. Elle contient le rayon
                de chaque arc de cercle du cintre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Span[]</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">This variable exists only if
                <span class="f_Variables">Shape=BasketHandleShape</span>. It
                holds the span of each arc, in degrees. </p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">AngleDebut[]</span><span
                class="f_Variables" style="font-weight: bold;">, </span><span
                class="f_Variables">AngleFin</span><span
                class="f_Variables">[]</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Ces variables n'existent que
                pour les segments dont la variable <span
                class="f_Variables">Forme=Anse</span>. Elles contiennent, en
                degrés, les angles de début et de fin de la partie cintrée d'un
                châssis en forme. L'angle vaut 0 à droite du diamètre
                horizontal, 90° en haut du diamètre vertical. Ces variables ne
                sont pas créées pour les segments autres que cintrés.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">FormeCadre</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Forme du cadre de parclose,
                parmi les valeurs suivantes: </p>

                <p style="margin: 0px 0px 0px 38px;"><span
                class="f_Variables">Rectangle</span></p>

                <p style="margin: 0px 0px 0px 38px;"><span
                class="f_Variables">Trapeze</span></p>

                <p style="margin: 0px 0px 0px 38px;"><span
                class="f_Variables">TriangleRectangle</span></p>

                <p style="margin: 0px 0px 0px 38px;"><span
                class="f_Variables">CoinCasse</span></p>

                <p style="margin: 0px 0px 0px 38px;"><span
                class="f_Variables">Pentagone</span></p>

                <p style="margin: 0px 0px 0px 38px;"><span
                class="f_Variables">TrapezeTronque</span></p>

                <p style="margin: 0px 0px 0px 38px;"><span
                class="f_Variables">CoinCasse2</span></p>

                <p style="margin: 0px 0px 0px 38px;"><span
                class="f_Variables">TrapezeRectangle</span></p>

                <p style="margin: 0px 0px 0px 38px;"><span
                class="f_Variables">SimpleTrapeze</span></p>

                <p style="margin: 0px 0px 0px 38px;"><span
                class="f_Variables">Cintre</span></p>

                <p style="margin: 0px 0px 0px 38px;"><span
                class="f_Variables">CintreTronque</span></p>

                <p style="margin: 0px 0px 0px 38px;"><span
                class="f_Variables">CoinArrondi</span></p>

                <p style="margin: 0px 0px 0px 38px;"><span
                class="f_Variables">Quadrilatere</span></p>

                <p style="margin: 0px 0px 0px 38px;"><span
                class="f_Variables">Triangle</span></p>

                <p style="margin: 0px 0px 0px 38px;"><span
                class="f_Variables">OeilDeBoeuf</span></p>

                <p style="margin: 0px 0px 0px 38px;"><span
                class="f_Variables">AnsePanier</span></p>

                <p style="margin: 0px 0px 0px 38px;"><span
                class="f_Variables">AnsePanierComplete</span></p>

                <p style="margin: 0px 0px 0px 38px;"><span
                class="f_Variables">DemiAnsePanier</span></p>

                <p style="margin: 0px 0px 0px 38px;"><span
                class="f_Variables">AnsePanierTronquee</span></p>

                <p style="margin: 0px 0px 0px 38px;"><span
                class="f_Variables">AnsePanier5</span></p>

                <p style="margin: 0px 0px 0px 38px;"><span
                class="f_Variables">AnsePanier5Complete</span></p>

                <p style="margin: 0px 0px 0px 38px;"><span
                class="f_Variables">DemiAnsePanier5</span></p>

                <p style="margin: 0px 0px 0px 38px;"><span
                class="f_Variables">AnsePanier5Tronquee</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Sens</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Sens d'ouverture pour ce
                cadre ouvrant (<span class="f_Variables">Gauche</span> ou <span
                class="f_Variables">Droite</span>).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">PoscCoupe</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Cette variable est utilisée
                seulement lorsque l'on génère des vues en coupe, et sert à
                définir la position horizontale et verticale de la coupe. A
                noter que si le châssis contient plusieurs vues en coupes, la
                fonction sera recalculée pour chaque coupe, afin de toujours
                avoir une valeur unique.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">Finition</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la valeur de la
                catégorie de la <a href="finition.php">finition</a> extérieure
                associée aux cadres ouvrant en cas de parclose dans l'ouvrant,
                ou au cadre dormant en cas de parclose pour fixe simple cadre.
                Utilisable uniquement lorsque l'ouvrant ou le fixe est coché
                <span style="font-style: italic;">Parclose à l'extérieur
                </span>dans la page <a
                href="ouvdescription.php">Description</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">FinitionInt</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la valeur de la
                catégorie de la <a href="finition.php">finition</a> intérieure
                associée aux cadres ouvrant en cas de parclose dans l'ouvrant,
                ou au cadre dormant en cas de parclose pour fixe simple
                cadre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">MargeTechnique</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">S'utilise en remplacement de
                la marge supplémentaire définie dans l'onglet <span
                style="font-weight: bold;">Description</span> du cadre. </p>

                <p style="margin: 0px 0px 0px 14px;">Elle doit être paramétrée
                dans la première page profil du cadre impérativement, et
                affectera donc tous les onglets (profils articles MO...)</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">MargeComposant</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
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

        <p style="text-align: center;"> </p>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#fff7ef"
        border="0"
        style="background-color: #fff7ef; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="170"
                style="width: 170px; border: solid 1px #000000;"><p><span
                class="f_Variables">VarLin</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #000000;"><p
                style="text-align: center;"><span style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 14px;">Vous pouvez assigner par
                formule une valeur à cette variable; cette valeur sera stockée
                dans la table <span style="font-weight: bold;">Lin.dbf</span>,
                champ <span style="font-weight: bold;">Var</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 24px;"> </p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
