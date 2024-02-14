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
if(top.frames.length==0) { top.location.href="index.php?quivariables.php"; }
else { parent.quicksync('a5.6.4'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Variables</title>
  <meta name="keywords" content="Length,Quantity,BottomPosition,LeftPosition,BottomOverlapping,TopOverlapping,LeftOverlapping,RightOverlapping,TopLeftOverlapping,TopRightOverlapping,ArticleWidth,ArticleHeight,Thickness,SawId,DeliveryPreparation,SimpleFactDoc,CustomerDoc,QualityControl,Width,ExtHeight,LeafHeight,LeafWidth,RevealWidth,RevealHeight,TotalWidth,TotalHeight,TopWidth,BottomWidth,LeftHeight,RightHeight,TopLeftLength,TopRightHeight,Radius,Angle1,Angle2,X0,Y0,X1,Y1,MillingCategory,FrameRadius,XCenter,YCenter,FullBowLeaf,SashIndex,Leaf,Shape,SashShape,Rectangle,Trapezium,RightAngledTriangle,TruncatedCorner,Pentagon,TruncatedTrapezium,TruncatedCorner2,RightAngledTrapezium,SimpleTrapezium,Bow,TruncatedBow,RoundedCorner,Quadrilateral,Triangle,BullsEye,BasketHandle,FullBasketHandle,HalfBasketHandle,TruncatedBasketHandle,BasketHandle5,FullBasketHandle5,HalfBasketHandle5,TruncatedBasketHandle5,Shape2,SashShape2,FullBow,HalfFullBow,FlatBow,HalfFlatBow,Direction,Left,Right,OppositeDirection,OuterFrameTop,OuterFrameBottom,OuterFrameLeft,OuterFrameRight,Transom,OuterFrame,View,FromInside,FromOutside,LeafCount,CrossSectionPosition,VarLin">
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
        href="introduction.php">Top</a>� <a
        href="quiquestions.php">Previous</a>� <a
        href="quiprofiles.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;"></span></p>

        <p class="p_Textestd"><span class="f_Textestd">WinPro generates several
        variables to help you compute the fitting's components. They are listed
        below. </span></p>

        <p style="text-align: center;"><span
        style="font-size: 5pt;">�</span></p>

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
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>The <span
                        style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span>sign
                        tells which variables you can change.</td>
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
                        style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span>sign
                        tells which variables you must create.</td>
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
                      <td>The Usage column tells in which tab the variable is
                        available, among:</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">P</span> = Profiles</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">A</span> = Articles</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">L</span> = Labour</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">D</span> = Drawing selection
                formulas</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">F</span> = Actual drawing
                formulas</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">S</span> = Opening symbol
                drawings</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;">�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#fff7ef"
        border="2"
        style="background-color: #fff7ef; border: solid 3px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="170"
                style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                style="font-weight: bold;">Variable</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Usage</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Length</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="558" style="width: 558px; border: solid 1px #c0c0c0;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Profiles</span>: Cut
                        length of the profile.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="text-indent: -1px; margin: 0px 0px 0px 14px;"><span
                style="color: #ff0000;">You must define this value, otherwise
                the profile is not generated!</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Articles</span>:
                        Length of the article, used to define its price if a
                        one dimension price table is tied to the article. It is
                        also used to define the value which will replace <a
                        href="macros___.php">macro #2#</a> if this macro is
                        used in the article definition. This variable is
                        ignored if variables <span
                        class="f_Variables">ArticleHeight</span> and <span
                        class="f_Variables">ArticleWidth</span> are not
                        defined. You must define this value if you need it.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Quantity</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="558" style="width: 558px; border: solid 1px #c0c0c0;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Profiles</span>:
                        Number of identical profiles to cut. This must be an
                        integer value.</td>
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
                      <td><span style="font-weight: bold;">Articles</span>:
                        Number of identical articles to use. This may be any
                        fractional value.</td>
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
                      <td><span style="font-weight: bold;">Labour</span>:
                        Length of the operation, in seconds. You can also use a
                        time notation (hour:minutes:seconds or minutes:seconds
                        - see the section on <a
                        href="nombres.php">numbers</a>). Fractional seconds are
                        allowed.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="text-indent: -1px; margin: 0px 0px 0px 14px;"><span
                style="color: #ff0000;">You must define this value, otherwise
                the component is not generated!</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">BottomPosition</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Vertical offset of the leaf's
                bottom relative to the outer frame's bottom. This position is
                relative to the outside of the leaf, or to the bottom of the
                rebate, depending on the system's setting. It also corresponds
                to default value of variable <span
                class="f_Variables">Y0</span>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">LeftPosition</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Horizontal offset of the
                leaf's left side relative to the outer frame's left side. This
                position is relative to the outside of the leaf, or to the
                bottom of the rebate, depending on the system's setting. It
                also corresponds to default value of variable <span
                class="f_Variables">X0</span>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">BottomOverlapping,</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TopOverlapping,</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">LeftOverlapping,</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">RightOverlapping,</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TopLeftOverlapping,</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TopRightOverlapping</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 15px;">Overlapping of the sash over
                the outer frame. You can assign new values to these variables,
                in the first profile formula.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; height: 93px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ArticleWidth,</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ArticleHeight</span></p>
              </td>
              <td width="68"
              style="width: 68px; height: 93px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt;font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="558"
              style="width: 558px; height: 93px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Those 2 variables let you
                define 2 dimensions which are used to find the price of an
                article with a 2 dimension price table. They are also used to
                replace the <a href="macros___.php">macro #2#</a> if it appears
                in the article description. You must define these variables if
                you need them.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Thickness</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt;font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="text-indent: 2px; margin: 0px 0px 0px 16px;">This
                variable lets you define a value which will replace the <a
                href="macros___.php">macro #3#</a> if it is present in the
                article description. You must define this variable if you need
                it.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">SawId</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt;font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">This variable lets you
                dynamically reassign the profile to a different saw (e.g. for
                special cutting angles). You must define this variable if you
                need it.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DeliveryPreparation</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt;font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable lets you
                dynamically change the setting which decides of the printing of
                the article onto delivery preparation documents. The
                corresponding box into article record should be unchecked if
                this one is in use. You must define this variable if you need
                it.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">SimpleFactDoc</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt;font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable lets you
                dynamically change the setting which decides of the printing of
                the article onto simplified factory documents. The corresponding
                box into article record should be unchecked if this one is in
                use. You must define this variable if you need it.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">CustomerDoc</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt;font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable lets you
                dynamically change the setting which decides of the printing of
                the article onto customer documents. The corresponding box into
                article record should be unchecked if this one is in use. You
                must define this variable if you need it.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">QualityControl</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt;font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable lets you
                dynamically change the setting which decides of the printing of
                the article onto quality control documents. The corresponding box
                into article record should be unchecked if this one is in use.
                You must define this variable if you need it.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">FalseArchShape</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">If the window has a false
                arch, this variable contains its shape:</p>

                <p style="margin: 0px 0px 0px 65px;"><span
                class="f_Variables">-1</span>: No false arch of type 4 or 5
                (see variable <span
                class="f_Variables">FalseArchType</span>).</p>

                <p style="margin: 0px 0px 0px 65px;"><span
                class="f_Variables">0</span>: Flat bow type 5</p>

                <p style="margin: 0px 0px 0px 65px;"><span
                class="f_Variables">1</span>: Half flat bow left type 5</p>

                <p style="margin: 0px 0px 0px 65px;"><span
                class="f_Variables">2</span>: Half flat bow right type 5</p>

                <p style="margin: 0px 0px 0px 65px;"><span
                class="f_Variables">3</span>: Full bow type 5</p>

                <p style="margin: 0px 0px 0px 65px;"><span
                class="f_Variables">4</span>: Half full bow left type 5</p>

                <p style="margin: 0px 0px 0px 65px;"><span
                class="f_Variables">5</span>: Half full bow right type 5</p>

                <p style="margin: 0px 0px 0px 65px;"><span
                class="f_Variables">6</span>: Basket handle type 5</p>

                <p style="margin: 0px 0px 0px 65px;"><span
                class="f_Variables">7</span>: Half basket handle left type 5</p>

                <p style="margin: 0px 0px 0px 65px;"><span
                class="f_Variables">8</span>: Half basket handle right type
                5</p>

                <p style="margin: 0px 0px 0px 65px;"><span
                class="f_Variables">9</span>: Ellipse type 5</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">FalseArchHeight</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Height of the false arch for
                shapes 0, 1, 2, 6, 7, 8 as described above.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Width</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PALDFS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Width of the current leaf.
                This dimension is relative to the outside of the leaf, or to
                the bottom of the rebate, depending on the system's setting.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Height</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PALDFS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Height of the current leaf.
                This dimension is relative to the outside of the leaf, or to
                the bottom of the rebate, depending on the system's setting.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ExtWidth</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Sash width, extended to the
                outside of the outer frame or the first transom's axis.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ExtHeight</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Sash height, extended to the
                outside of the outer frame or the first transom's axis.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">LeafHeight</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Height of the leaf (total,
                not dependant from system).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; height: 14px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">LeafWidth</span></p>
              </td>
              <td width="68"
              style="width: 68px; height: 14px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="558"
              style="width: 558px; height: 14px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Width of the leaf (total, not
                dependant from system).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">RevealWidth</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Sash width, extended to the
                outside of the outer frame minus the reveal, or the first
                transom's axis.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">RevealHeight</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Sash height, extended to the
                outside of the outer frame minus the reveal, or the first
                transom's axis.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TotalWidth</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Sash width, measured from the
                bottom of the outer frame rebate.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TotalHeight</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Sash height, measured from
                the bottom of the outer frame rebate.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TopWidth</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PALDS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Length of the upper segment
                of the leaf (may be required for trapeziums). This dimension is
                relative to the outside of the leaf, or to the bottom of the
                rebate, depending on the system's setting.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">BottomWidth</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PALDS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Length of the lower segment
                of the leaf (may be required for trapeziums). This dimension is
                relative to the outside of the leaf, or to the bottom of the
                rebate, depending on the system's setting.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">LeftHeight</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PALDS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Length of the left segment of
                the leaf. This dimension is relative to the outside of the
                leaf, or to the bottom of the rebate, depending on the system's
                setting.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">RightHeight</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PALDS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 18px;">Length of the right segment
                of the leaf. This dimension is relative to the outside of the
                leaf, or to the bottom of the rebate, depending on the system's
                setting.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TopLeftLength</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PALDS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 18px;">Length of the top left
                segment of the leaf. This dimension is relative to the outside
                of the leaf, or to the bottom of the rebate, depending on the
                system's setting.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TopRightLength</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PALDS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 18px;">Length of the top right
                segment of the leaf. This dimension is relative to the outside
                of the leaf, or to the bottom of the rebate, depending on the
                system's setting.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Radius</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 18px;">You may create this variable
                to force an arched shape for the profile, or force its
                radius.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Angle1</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 18px;">Left angle of the profile.
                Default value is 90.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Angle2</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 18px;">Right angle of the profile.
                Default value is 90.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">X0</span><span class="f_Variables"
                style="font-weight: bold;">, </span><span
                class="f_Variables">Y0</span><span class="f_Variables"
                style="font-weight: bold;">, </span><span
                class="f_Variables">X1</span><span class="f_Variables"
                style="font-weight: bold;">, </span><span
                class="f_Variables">Y1</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 18px;">Position of each end of the
                profile (0,0 is at the bottom left <span
                style="text-decoration: underline;">of the outer
                frame</span>).</p>

                <p style="margin: 0px 0px 0px 18px;">You may change these
                values to move the profile.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">MillingCategory</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 19px;">Milling category of the
                profile, used for <a href="usinage.php">SPECIAL millings</a>.
                You can dynamically change this value.</p>

                <p style="margin: 0px 0px 0px 19px;"><a
                href="prfdescription.php">Default value is set at profile
                level</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">FrameRadius</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 18px;">When <span
                class="f_Variables">Shape</span> returns <span
                class="f_Variables">Bow</span>, this variable holds the radius
                of the arc for bow shaped frames. This variable is not created
                for other kinds of segments. This dimension is relative to the
                outside of the leaf, or to the bottom of the rebate, depending
                on the system's setting.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Radius</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">DS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 19px;">When <span
                class="f_Variables">Shape</span> returns <span
                class="f_Variables">Bow</span> and sideis the top one, this
                variable holds the radius of the arc for bow shaped frames.
                This variable is not created for other kinds of segments. This
                dimension is relative to the outside of the leaf, or to the
                bottom of the rebate, depending on the system's setting.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">XCenter</span><span class="f_Variables"
                style="font-weight: bold;">, </span><span
                class="f_Variables">YCenter</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">DS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 19px;">These variables hold the
                coordinates the arc for bow shaped frames. Point 0,0 is at the
                bottom left corner of the outer frame. These variables are not
                created for other kinds of segments.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">FullBowLeaf</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 19px;">Returns <span
                class="f_Variables">True()</span> if the leaf may be considered
                a full bow or a half full bow. This is when the starting angle
                of the bow is 0�, and/or the end angle is 180�.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">SashIndex</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PALDFS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 19px;">Index of the sash in the <a
                href="varouvrantetquincaillerie.php">global sash arrays</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Leaf</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PALDFS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 19px;">Index of the current leaf (1
                = leftmost or bottommost).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Shape</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 19px;">The shape of the leaf, among
                values:</p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">Rectangle</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">Trapezium</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">RightAngledTriangle</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">TruncatedCorner</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">Pentagon</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">TruncatedTrapezium</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">TruncatedCorner2</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">RightAngledTrapezium</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">SimpleTrapezium</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">Bow</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">TruncatedBow</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">RoundedCorner</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">Quadrilateral</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">Triangle</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">BullEye</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">BasketHandle</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">FullBasketHandle</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">HalfBasketHandle</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">TruncatedBasketHandle</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">BasketHandle5</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">FullBasketHandle5</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">HalfBasketHandle5</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">TruncatedBasketHandle5</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Shape2</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 20px;">Like <span
                class="f_variables;">Shape</span> and <span
                class="f_variables;">ShashShape</span> except that instead of a
                single <span class="f_variables;">Bow</span> value for all
                arched shapes, you get the exact type of bow:</p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">Bow</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">FullBow</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">HalFullBow</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">FlatBow</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">HalfFlatBow</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Shape, Shape2, SashShape2</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">DFS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 20px;">Leaf shape, among:</p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">Rectangle</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">Trapezium</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">RightAngledTriangle</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">TruncatedCorner</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">Pentagon</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">TruncatedTrapezium</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">TruncatedCorner2</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">RightAngledTrapezium</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">SimpleTrapezium</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">Bow</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">FullBow</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">HalfFullBow</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">FlatBow</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">HalfFlatBow</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">TruncatedBow</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">RoundedCorner</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">Quadrilateral</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">Triangle</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">BullsEye</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">BasketHandle</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">FullBasketHandle</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">HalfBasketHandle</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">TruncatedBasketHandle</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">BasketHandle5</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">FullBasketHandle5</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">HalfBasketHandle5</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">TruncatedBasketHandle5</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">SashOrder</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 21px;">Allows indicating with a sequence of digits the drawing order for the leaves, 
				for a left hand opening pane. Le leftmost leaf is number 1. Useful only in case of overlapping leaves one another (e.g.: slider).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Direction</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PALDS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 21px;">Opening direction of the sash
                (<span class="f_Variables">Left</span> or <span
                class="f_Variables">Right</span>).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">OppositeDirection</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PALDS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 21px;">Opposite of the opening
                direction of the sash (<span class="f_Variables">Left</span> or
                <span class="f_Variables">Right</span>).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">OuterFrameTop,</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">OuterFrameBottom,</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">OuterFrameLeft,</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">OuterFrameRight</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 21px;">Nature of the outer frame on
                each side of the sash: <span class="f_Variables">Transom</span>
                or <span class="f_Variables">OuterFrame</span>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">View</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">DFS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 22px;">Contains
                <span class="f_Variables">FromInside</span> when drawing the
                inner view, or <span class="f_Variables">FromOutside</span>
                when drawing the outer view.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">LeafCount</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PALD</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 21px;">Number of leaves in the sash
                using this fitting.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">CrossSectionPosition</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="text-indent: 1px; margin: 0px 0px 0px 21px;">This
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

        <p style="text-align: center;">�</p>

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
                style="margin: 0px 0px 0px 19px;">You may assign a value to
                this variable; the content of the variable is stored into <span
                style="font-weight: bold;">Var</span> field of table <span
                style="font-weight: bold;">Lin.dbf</span>, when the component
                is exported.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;">�</p>

        <p style="text-align: center;">�</p>
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
      <td align="left"><p><span style="font-size: 5pt;"></span></p>

        <p class="p_Textestd"><span class="f_Textestd">Vous disposez de
        variables g�n�r�es par Winpro pour le calcul des composants du cadre
        quincaillerie. La liste de ces variables est donn�e ci-dessous.
        </span></p>

        <p style="text-align: center;"><span
        style="font-size: 5pt;">�</span></p>

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
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Le signe <span
                        style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span>
                        vous informe que la variable peut �tre modifi�e par
                        param�trage.</td>
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
                        vous informe que la variable doit �tre initialis�e par
                        vous-m�me.</td>
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
                style="font-weight: bold;">M</span> = Main d'oeuvre</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">m</span> = Main d'oeuvre d'angle</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">D</span> = Formules de s�lection de
                dessin</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">F</span> = Formules de dessin</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">S</span> = Dessins de symboles
                d'ouverture</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;">�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#fff7ef"
        border="2"
        style="background-color: #fff7ef; border: solid 3px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="170"
                style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                style="font-weight: bold;">Variable</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Utilisation</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Longueur</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="558" style="width: 558px; border: solid 1px #c0c0c0;">
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
                        devez d�finir cette variable vous-m�me.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="text-indent: -1px; margin: 0px 0px 0px 14px;"><span
                style="color: #ff0000;">Vous devez d�finir cette variable,
                sinon le composant n'est pas consomm�!</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Articles:</span>
                        Longueur de l'article vous permettant de d�finir la
                        dimension qui sera utilis�e d'une part pour d�terminer
                        le prix de l'article si une grille de prix � une seule
                        dimension lui est attach�e, et d'autre part en
                        remplacement de la <a href="macros___.php">macro
                        #2#</a> si celle-ci est pr�sente dans la description de
                        l'article. Cette variable est ignor�e si les variables
                        <span class="f_Variables">HauteurArticle</span> et
                        <span class="f_Variables">LargeurArticle</span> sont
                        d�finies. Vous devez d�finir cette variable si
                        n�cessaire.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Quantite</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="558" style="width: 558px; border: solid 1px #c0c0c0;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Profils:
                        </span>Nombre de profils identique � produire. Il doit
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
                        Nombre d'articles identiques � produire. Il peut s'agir
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
                        d'oeuvres:</span> Dur�e de l'op�ration, exprim�e en
                        secondes. Vous pouvez �galement utilis� une notation en
                        minute:seconde, ou encore en heure:minute:seconde (voir
                        la page d'aide sur les <span style="color: #0000ff;"><a
                        href="nombres.php">nombres</a></span>). Les fractions
                        de seconde sont prises en compte. </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="text-indent: -15px; margin: 0px 0px 0px 15px;"><span
                style="color: #ff0000;">� Vous devez d�finir cette variable,
                sinon le composant n'est pas consomm�!</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">PositionBas</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Position verticale du bas du
                vantail par rapport au bas du dormant. Cette position est
                donn�e soit fond de feuillure, soit hors tout, selon le choix
                fait au niveau du syst�me auquel appartient la quincaillerie.
                Elle correspond aussi � la valeur par d�faut de la variable
                <span class="f_Variables">Y0</span>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">PositionGauche</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Position horizontale de la
                gauche du vantail par rapport � la gauche du dormant. Cette
                position est donn�e soit fond de feuillure, soit hors tout,
                selon le choix fait au niveau du syst�me auquel appartient la
                quincaillerie. Elle correspond aussi � la valeur par d�faut de
                la variable <span class="f_Variables">X0</span>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">RecouvrementBas,</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">RecouvrementHaut,</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">RecouvrementGauche,</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">RecouvrementDroite,</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">RecouvrementHautGauche,</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">RecouvrementHautDroite</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 15px;">Valeur de recouvrement de
                l'ouvrant sur le dormant. Cette valeur peut �tre modifi�e par
                param�trage, dans la premi�re page formule de l'onglet
                profils.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; height: 93px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">LargeurArticle, HauteurArticle</span></p>
              </td>
              <td width="68"
              style="width: 68px; height: 93px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="558"
              style="width: 558px; height: 93px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Ces deux variables vous
                permettent de d�finir deux dimensions qui seront utilis�es
                d'une part pour d�terminer le prix du profil si une grille de
                prix � deux dimensions lui est attach�e, et d'autre part en
                remplacement de la <a href="macros___.php">macro #2#</a> si
                celle-ci est pr�sente dans la description du profil. Vous devez
                d�finir ces variables vous-m�me.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Epaisseur</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="text-indent: 2px; margin: 0px 0px 0px 16px;">Cette
                variable vous permet de d�finir une valeur qui sera utilis�e
                pour remplacer la <a href="macros___.php">macro #3# </a>si
                celle-ci est pr�sente dans la description du profil. Vous devez
                d�finir cette variable vous-m�me.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">NumeroScie</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Cette variable vous permet de
                modifier dynamiquement le num�ro de scie li�e au profil. Vous
                devez d�finir vous-m�me cette variable si vous d�sirez modifier
                le num�ro de scie.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">PrepaLivraison</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                modifier dynamiquement l'impression du profil sur les documents
                de pr�paration de livraison. Lorsque l'on utilise cette
                variable, il faut imp�rativement d�cocher la case "Pr�paration
                livraison" de la fiche article. Vous devez d�finir vous-m�me
                cette variable si vous d�sirez modifier ce param�tre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">PlanSimplifie</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                modifier dynamiquement l'impression du composant sur les plans
                d'atelier simplifi�s. Lorsque l'on utilise cette variable, il
                faut imp�rativement d�cocher la case "Plan d'atelier simplifi�"
                de la fiche article. Vous devez d�finir vous-m�me cette
                variable si vous d�sirez modifier ce param�tre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DocClient</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                modifier dynamiquement l'impression du profil sur les documents
                client. Lorsque l'on utilise cette variable, il faut
                imp�rativement d�cocher la case "Documents client" de la fiche
                article. Vous devez d�finir vous-m�me cette variable si vous
                d�sirez modifier ce param�tre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">CtrlQualite</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                modifier dynamiquement l'impression du profil sur les documents
                de contr�le qualit�. Lorsque l'on utilise cette variable, il
                faut imp�rativement d�cocher la case "Contr�le qualit�" de la
                fiche article. Vous devez d�finir vous-m�me cette variable si
                vous d�sirez modifier ce param�tre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">FormeFauxCintre</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Cette variable contient une
                de ces valeurs num�riques faisant r�f�rence aux diff�rentes
                formes de l'applique cintr�e telle qu'elle a �t� saisie au
                niveau du cadre dormant:</p>

                <p style="margin: 0px 0px 0px 65px;"><span
                class="f_Variables">-1</span>: Pas de faux-cintre de type 4 ou
                5 (voir variable <span
                class="f_Variables">TypeFauxCintre</span>).</p>

                <p style="margin: 0px 0px 0px 65px;"><span
                class="f_Variables">0</span>: Cintre plat de type 5</p>

                <p style="margin: 0px 0px 0px 65px;"><span
                class="f_Variables">1</span>: Demi-cintre plat gauche de type
                5</p>

                <p style="margin: 0px 0px 0px 65px;"><span
                class="f_Variables">2</span>: Demi-cintre plat droit de type
                5</p>

                <p style="margin: 0px 0px 0px 65px;"><span
                class="f_Variables">3</span>: Plein cintre de type 5</p>

                <p style="margin: 0px 0px 0px 65px;"><span
                class="f_Variables">4</span>: Demi-plein cintre gauche de type
                5</p>

                <p style="margin: 0px 0px 0px 65px;"><span
                class="f_Variables">5</span>: Demi-plein cintre droit de type
                5</p>

                <p style="margin: 0px 0px 0px 65px;"><span
                class="f_Variables">6</span>: Anse de panier de type 5</p>

                <p style="margin: 0px 0px 0px 65px;"><span
                class="f_Variables">7</span>: Demi-anse de panier gauche de
                type 5</p>

                <p style="margin: 0px 0px 0px 65px;"><span
                class="f_Variables">8</span>: Demi-anse de panier droite de
                type 5</p>

                <p style="margin: 0px 0px 0px 65px;"><span
                class="f_Variables">9</span>: Ovale de type 5</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">FlecheFauxCintre</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Renvoie la valeur de la
                fl�che du faux cintrage telle qu'elle a �t� saisie pour les
                formes 0, 1, 2, 6, 7 et 8 d�crites ci-dessus.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Largeur</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAMDFS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Largeur du vantail en cours
                de calcul. Cette dimension est donn�e soit fond de feuillure
                (rainure quincaillerie), soit hors tout, selon le choix fait au
                niveau du syst�me auquel appartient la quincaillerie.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Hauteur</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAMDFS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Hauteur du vantail en cours
                de calcul. Cette dimension est donn�e soit fond de feuillure
                (rainure quincaillerie), soit hors tout, selon le choix fait au
                niveau du syst�me auquel appartient la quincaillerie.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">LargeurHT</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Largeur de l'ouvrant, �tendue
                � l'ext�rieur du dormant, ou bien � l'axe de la premi�re
                traverse.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">HauteurHT</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Hauteur de l'ouvrant, �tendue
                � l'ext�rieur du dormant, ou bien � l'axe de la premi�re
                traverse.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">HauteurVantail</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Hauteur du vantail, �
                l'ext�rieur du cadre (dimension de fabrication, ind�pendamment
                des options du syst�me).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; height: 14px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">LargeurVantail</span></p>
              </td>
              <td width="68"
              style="width: 68px; height: 14px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="558"
              style="width: 558px; height: 14px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Largeur du vantail, �
                l'ext�rieur du cadre (dimension de fabrication, ind�pendamment
                des options du syst�me).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">LargeurTableau</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Largeur de l'ouvrant �tendue
                � l'ext�rieur du dormant apr�s application des p�n�trations
                ma�onneries, ou � l'axe de la premi�re traverse.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">HauteurTableau</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Hauteur de l'ouvrant �tendue
                � l'ext�rieur du dormant apr�s application des p�n�trations
                ma�onneries, ou � l'axe de la premi�re traverse.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">LargeurTotale</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Largeur totale de l'ouvrant,
                mesur�e depuis le fond de batt�e du dormant.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">HauteurTotale</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Largeur totale de l'ouvrant,
                mesur�e depuis le fond de batt�e du dormant.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">LargeurHaut</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAMDS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Largeur du segment haut du
                vantail (peut �tre requis dans les trap�zes). Cette dimension
                est donn�e soit fond de feuillure, soit hors tout, selon le
                choix fait au niveau du syst�me auquel appartient la
                quincaillerie. </p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">LargeurBas</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAMDS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Largeur du segment bas du
                vantail (peut �tre requis dans les trap�zes). Cette dimension
                est donn�e soit fond de feuillure, soit hors tout, selon le
                choix fait au niveau du syst�me auquel appartient la
                quincaillerie. </p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">HauteurGauche</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAMDS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Longueur de la partie
                verticale gauche du vantail, mesur�e pointe � pointe ou fond de
                batt�e quincaillerie, en fonction du param�tre syst�me.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">HauteurDroite</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAMDS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 18px;">Longueur de la partie
                verticale droite du vantail, mesur�e pointe � pointe ou fond de
                batt�e quincaillerie, en fonction du param�tre syst�me.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">LongueurHautGauche</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAMDS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 18px;">Longueur de la partie
                sup�rieure gauche du vantail (si elle existe), mesur�e hors
                tout vantail ou fond de batt�e quincaillerie, en fonction du
                param�tre syst�me.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">LongueurHautDroite</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAMDS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 18px;">Longueur de la partie
                sup�rieure droite du vantail (si elle existe), mesur�e hors
                tout vantail ou fond de batt�e quincaillerie, en fonction du
                param�tre syst�me.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Rayon</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 18px;">Rayon du cintre, ou z�ro s'il
                n'y a pas de cintre. Vous devez renseigner cette valeur pour
                forcer la forme du profil, ou pour forcer son rayon.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Angle1</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 18px;">Angle � gauche du profil, 90�
                par d�faut</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Angle2</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 18px;">Angle � droite du profil, 90�
                par d�faut</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">X0</span><span class="f_Variables"
                style="font-weight: bold;">, </span><span
                class="f_Variables">Y0</span><span class="f_Variables"
                style="font-weight: bold;">, </span><span
                class="f_Variables">X1</span><span class="f_Variables"
                style="font-weight: bold;">, </span><span
                class="f_Variables">Y1</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 18px;">Position de chacune des
                extr�mit�s du profil (le point 0,0 correspond au coin inf�rieur
                gauche <span style="text-decoration: underline;">du
                dormant</span>).</p>

                <p style="margin: 0px 0px 0px 18px;">Modifier ces valeurs
                repositionne le profil dans l'espace. </p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">CategorieUsinage</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 19px;">Cat�gorie d'usinage de base
                du profil, utilis�e par les <a href="usinage.php">usinages de
                type SPECIAL</a>. Vous pouvez modifier dynamiquement cette
                valeur.</p>

                <p style="margin: 0px 0px 0px 19px;"><a
                href="prfdescription.php">La valeur par d�faut est d�finie dans
                le profil</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">RayonCadre</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 18px;">Si <span
                class="f_Variables">Forme </span>renvoie <span
                class="f_Variables">Cintre</span>, la variable contient le
                rayon de l'arc de cercle du cadre cintr�, sinon elle renvoie
                <span class="f_Variables">0</span>. La valeur peut �tre mesur�e
                pointe � pointe ou fond de batt�e ouvrant c�t� quincaillerie,
                selon le syst�me.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Rayon</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">DS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 19px;">Si <span
                class="f_Variables">Forme </span>renvoie <span
                class="f_Variables">Cintre </span>et que le bord en cours de
                calcul est le haut, la variable contient le rayon de l'arc de
                cercle du cintre, sinon elle renvoie <span
                class="f_Variables">0</span>. La valeur peut �tre mesur�e
                pointe � pointe ou fond de batt�e ouvrant c�t� quincaillerie,
                selon le syst�me.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">CentreX</span><span class="f_Variables"
                style="font-weight: bold;">, </span><span
                class="f_Variables">Centre</span><span
                class="f_Variables">Y</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">DS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 19px;">Ces variables contiennent les
                coordonn�es de l'arc de cercle d'une forme cintr�e. Le point
                0,0 se situe en bas � gauche du dormant. Ces variables ne sont
                pas initialis�es pour des segments autres que cintr�s.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">FormePleinCintre</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 19px;">Vaut <span
                class="f_Variables">Vrai() </span>lorsque le vantail peut �tre
                consid�r� en forme plein cintre ou demi plein cintre, ou encore
                lorsque l'angle de d�but du cintre est � 0�, et/ou l'ongle de
                fin � 180�.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">NumeroOuvrant</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAMDFS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 19px;">Index de l'ouvrant portant la
                quincaillerie dans les <a
                href="varouvrantetquincaillerie.php">tableaux de variables
                d'ouvrant et quincaillerie</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Position -> NumeroVantail (d�s la V9.0)</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAMDFS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 19px;">Num�ro du vantail courant (1
                = le plus � gauche ou le plus en bas)</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Forme</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 19px;">Forme du vantail, pouvant
                contenir les valeurs:</p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">Rectangle</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">Trapeze</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">TriangleRectangle</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">CoinCasse</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">Pentagone</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">TrapezeTronque</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">CoinCasse2</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">TrapezeRectangle</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">SimpleTrapeze</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">Cintre</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">CintreTronque</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">CoinArrondi</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">Quadrilatere</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">Triangle</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">OeilDeBoeuf</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">AnsePanier</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">AnsePanierComplete</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">DemiAnsePanier</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">AnsePanierTronquee</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">AnsePanier5</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">AnsePanier5Complete</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">DemiAnsePanier5</span></p>

                <p style="margin: 0px 0px 0px 67px;"><span
                class="f_Variables">AnsePanier5Tronquee</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Forme2</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 20px;">Variable similaire � <span
                class="f_Variables">Forme</span> et <span
                class="f_Variables">FormeOuvrant</span> except� qu'� la place
                d'un terme <span style="color: #0000ff;">Cintre</span> pour
                tous les types, la variable renvoie le type de cintre
                pr�cis:</p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">Cintre</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">PleinCintre</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">DemiPleinCintre</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">CintrePlat</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">DemiCintrePlat</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Forme, Forme2, FormeOuvrant2</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">DFS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 20px;">Forme du vantail, parmi:</p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">Rectangle</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">Trapeze</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">TriangleRectangle</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">CoinCasse</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">Pentagone</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">TrapezeTronque</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">CoinCasse2</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">TrapezeRectangle</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">SimpleTrapeze</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">Cintre</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">PleinCintre</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">DemiPleinCintre</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">CintrePlat</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">DemiCintrePlat</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">CintreTronque</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">CoinArrondi</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">Quadrilatere</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">Triangle</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">OeilDeBoeuf</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">AnsePanier</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">AnsePanierComplete</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">DemiAnsePanier</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">AnsePanierTronquee</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">AnsePanier5</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">AnsePanier5Complete</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">DemiAnsePanier5</span></p>

                <p style="margin: 0px 0px 0px 68px;"><span
                class="f_Variables">AnsePanier5Tronquee</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">OrdreVantaux</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 21px;">Permet d'indiquer par une s�rie de chiffres dans quel ordre les vantaux seront dessin�s, pour 
				un sens d'ouverture gauche. Le vantail le plus � gauche porte le num�ro 1. Ceci n'est utile que si les vantaux se recouvrent 
				mutuellement (ex.: coulissant).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Sens</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAMDS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 21px;">Sens d'ouverture de l'ouvrant
                (<span class="f_Variables">Gauche</span> ou <span
                class="f_Variables">Droite</span>).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">SensOppose</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAMDS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 21px;">Sens oppos� au sens
                d'ouverture de l'ouvrant (<span
                class="f_Variables">Gauche</span> ou <span
                class="f_Variables">Droite</span>).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DormantHaut,</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DormantBas,</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DormantGauche,</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DormantDroite</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 21px;">Nature du dormant sur chaque
                c�t� du vantail, vaudra: <span
                class="f_Variables">Traverse</span> ou <span
                class="f_Variables">Dormant</span>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Vue</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">DFS</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 22px;">Contient
                <span class="f_Variables">VueInterieure</span> lorsque l'on
                dessine une vue int�rieure, ou <span
                class="f_Variables">VueExterieure en dessinant la vue
                </span>ext�rieure</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">NombreVantaux</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAMD</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 21px;">Nombre de vantaux de
                l'ouvrant utilisant cette quincaillerie.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">PosCoupe</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="text-indent: 1px; margin: 0px 0px 0px 21px;">Cette
                variable n'est utilis�e que dans le contexte des vues en coupe.
                Elle vous permet de conna�tre la position de la coupe verticale
                ou horizontale. (N.B.:Si le ch�ssis comporte plusieurs coupes,
                le ch�ssis est recalcul� compl�tement pour chaque coupe)</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">MargeTechnique</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">S'utilise en remplacement de
                la marge suppl�mentaire d�finie dans l'onglet <span
                style="font-weight: bold;">Description</span> du cadre. </p>

                <p style="margin: 0px 0px 0px 14px;">Elle doit �tre param�tr�e
                dans la premi�re page profil du cadre imp�rativement, et
                affectera donc tous les onglets (profils articles MO...)</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">MargeComposant</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">S'utilise en remplacement de
                la marge suppl�mentaire d�finie dans l'onglet <span
                style="font-weight: bold;">Description</span> du cadre. </p>

                <p style="margin: 0px 0px 0px 14px;">La variable devra �tre
                initialis�e dans la formule du composant concern�, et
                n'affectera que celui ci.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;">�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 3px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; height: 30px; border: solid 2px #c0c0c0;"><p
                style="margin: 0px 0px 0px 15px;"><span
                class="f_Variables">VarLin</span></p>
              </td>
              <td width="68"
              style="width: 68px; height: 30px; border: solid 2px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="561"
              style="width: 561px; height: 30px; border: solid 2px #c0c0c0;"><p
                style="margin: 0px 0px 0px 23px;">Une valeur peut �tre assign�e
                � cette variable. Les valeurs successives seront stock�es dans
                la table d'export <span style="font-weight: bold;">Lin</span>,
                champs <span style="font-weight: bold;">Var</span>, � toute fin
                utile.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;">�</p>

        <p style="text-align: center;">�</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
