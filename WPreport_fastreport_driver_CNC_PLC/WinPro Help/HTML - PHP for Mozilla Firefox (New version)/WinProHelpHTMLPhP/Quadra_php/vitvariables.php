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
if(top.frames.length==0) { top.location.href="index.php?vitvariables.php"; }
else { parent.quicksync('a5.8.7'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Variables</title>
  <meta name="keywords" content="Length,Quantity,Thickness,GlassThickness,SashType,Door,Fixed,Window,ArticleWidth,ArticleHeight,Radius,Angle1,Angle2,X0,Y0,X1,Y1,MillingCategory,SawId,DeliveryPreparation,SimpleFactDoc,CustomerDoc,QualityControl,Orientation,FillingShape,DimA,DimB,DimC,DimD,DimE,DimF,DimG,DimH,DimI,DimJ,DimK,DimL,Width,Height,ExtWidth,ExtHeight,RevealWidth,RevealHeight,SashIndex,Leaf,Direction,OppositeDirection,Left,Right,FillingIndex,View,CrossSectionPosition,FromInside,FromOutside,TotalThickness,Rectangle,Trapezium,RightAngledTriangle,TruncatedCorner,Pentagon,TruncatedTrapezium,TruncatedCorner2,RightAngledTrapezium,SimpleTrapezium,Bow,TruncatedBow,FullBow,HalfFullBow,FlatBow,HalfFlatBow,RoundedCorner,Quadrilateral,Triangle,BullsEye,BasketHandle,FullBasketHandle,HalfBasketHandle,TruncatedBasketHandle,BasketHandle5,FullBasketHandle5,HalfBasketHandle5,TruncatedBasketHandle5,ShapeOrientation[],DimAForme[],DimBForme[],DimCForme[],DimDForme[],DimEForme[],DimFForme[],DimGForme[],DimHForme[],DimIForme[],DimJForme[],DimKForme[],DimLForme[],VarLin">
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
        href="vitquestions.php">Previous</a>  <a href="vitglazing.php">Next</a>
        </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>These variables are available only when the box <span style="font-weight: bold; color: #000000;">Composed glass</span> is checked into the 
		<a href="vitdescription.php">Description page</a>.</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p>WinPro generates several variables to help you compute the composed glazing's
        components. They are listed below.</p>

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
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>The <span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span>sign tells 
					  which variables you can change.</td>
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
                      <td>The <span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span>sign tells 
					  which variables you must create.</td>
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
                      <td>The Usage column tells in which tab the variable is available, among:</td>
                    </tr>
                  </tbody>
                </table>
                </div>
				
                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">G</span> = Glazings</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">P</span> = Profiles</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">A</span> = Articles</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">L</span> = Labour</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">D</span> = Drawing
                selection formulas</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">F</span> = Drawing
                definition formulas</p>

              </td>
            </tr>

		</tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#fff7ef"
        border="0"
        style="background-color: #fff7ef; border: none border-spacing:0px; border-collapse: collapse;">
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
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Length</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367" style="width: 367px; border: solid 1px #c0c0c0;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #c0c0c0;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Profiles:</span>Cut length of the profile. You
                        must define this value, otherwise the profile is not generated.</td>
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
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #c0c0c0;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Articles:</span>Length of the article, used to
                        define its price if a one dimension price table is tied to the article. It is also used to define the value
                        which will replace <a href="macros___.php">macro #2#</a> if this macro is used in the article
                        definition. This variable is ignored if variables <span class="f_Variables">ArticleHeight</span> 
						and <span class="f_Variables">ArticleWidth</span> are defined. You must define this value if you need it.</td>
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
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">GPAL</span></p>
              </td>
              <td width="367" style="width: 367px; border: solid 1px #c0c0c0;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Profiles</span>: Number of identical profiles to cut. This must be an integer number.</td>
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
                      <td><span style="font-weight: bold;">Glazings</span>: Number of identical glass unit to compute, integer format.</td>
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
                      <td><span style="font-weight: bold;">Articles</span>: Number of identical articles to use. This may be any fractional value.</td>
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
                      <td><span style="font-weight: bold;">Labour</span>: Length of the operation, in seconds. You can also use a time notation
                        (hour:minutes:seconds or minutes:seconds - see the section about <a href="nombres.php">numbers</a>). Fractional seconds are allowed.</td>
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
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Thickness</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">GPAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 15px;">This variable lets you define the value
                which will replace the <a href="macros___.php">macro #3#</a> if
                it is present in the article description.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TotalThickness</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">GPAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Thickness of the composed glass. This
                value holds initially the contents of field Thickness into the <a href="vitdimensions.php">Dimensions page</a>; you may modify
                this value in any formula (except drawing formulas).</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">GlassThickness</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">G</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Thickness of the current glass sheet.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">SashType</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">GPAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Type of sash containing the glass, among:
                <span class="f_Variables">Door</span>, <span class="f_Variables">Fixed</span>, <span class="f_Variables">Window</span>.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ArticleWidth</span>, 
				<span class="f_Variables">ArticleHeight</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Those 2 variables let you define 2
                dimensions which are used to find the price of an article with
                a 2 dimension price table. They are also used to replace the <a
                href="macros___.php">macro #2#</a> if it appears in the article
                description. You must define these variables if you need
                them.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Radius</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">You may create this variable to force
                an arched shape for the profile, or force its radius.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Angle1</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Left angle of the profile. Contains 90°
                by default</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Angle2</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Right angle of the profile. Contains 90°
                by default</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span class="f_Variables">X0,
                Y0, X1, Y1</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Position of each end of the profile
                (0,0 is at the bottom left of the outer frame). You may change
                these values to move the profile.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">MillingCategory</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Milling category of the profile, used
                for <span class="f_Variables">SPECIAL</span> <a href="usinages.php">millings</a>. 
				You can dynamically change this value.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">SawId</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">This variable lets you dynamically
                reassign the profile to a different saw (e.g. for special
                cutting angles). You must define this variable if you need
                it.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DeliveryPreparation</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable lets you dynamically
                change the setting which decides of the printing of the component
                onto delivery preparation documents. You must define this
                variable if you need it.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">SimpleFactDoc</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable lets you dynamically
                change the setting which decides of the printing of the component
                onto simplified factory documents. You must define this variable
                if you need it.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">CustomerDoc</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable lets you dynamically
                change the setting which decides of the printing of the component
                onto customer documents. You must define this variable
                if you need it.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">QualityControl</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable lets you dynamically
                change the setting which decides of the printing of the component
                onto quality control documents. You must define this variable
                if you need it.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">FillingShape</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">G</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Shape of the glass. This variable
                originally contains the shape of the glazing, as computed by
                WinPro. You may change this value, but at the same time you
                will need to change variables <span class="f_Variables">DimA</span>, <span class="f_Variables">DimB</span>, ..., 
				<span class="f_Variables">Orientation</span>, depending on the new shape. You may
                also use the <a href="manipulation_de_formes.php">shape handling functions</a> to compute a new shape.
                Possible values of <span class="f_Variables">FillingShape</span> are:
				
                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Rectangle</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Trapezium</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">RightAngledTriangle</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TruncatedCorner</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Pentagon</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TruncatedTrapezium</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TruncatedCorner2</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">RightAngledTrapezium</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">SimpleTrapezium</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Bow</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">FullBow</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">HalfFullBow</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">FlatBow</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">HalfFlatBow</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TruncatedBow</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">RoundedCorner</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Quadrilateral</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Triangle</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">BullsEye</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">BasketHandle</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">FullBasketHandle</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">HalfBasketHandle</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TruncatedBasketHandle</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">BasketHandle5</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">FullBasketHandle5</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">HalfBasketHandle5</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TruncatedBasketHandle5</span></p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Orientation</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">G</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Shape orientation. You may change this
                value if necesary. Possible values are: <span
                class="f_Variables">Left</span> or <span class="f_Variables">Right</span>.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DimA, DimB, DimC, DimD, DimE, DimF, DimG,
                DimH, DimI, DimJ, DimK, DimL</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">G</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Shape dimensions. Variable <span class="f_Variables">DimA</span> is for dimension A, 
				<span class="f_Variables">DimB</span> for dimension B, etc... See the page about <a href="manipulation_de_formes.php">shape handling</a> 
				for a reference of the dimensions for each shape.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Width</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">GPALDF</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Width of the composed glass (rebate
                dimension).</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Height</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">GPALDF</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Height of the composed glass (rebate
                dimension).</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ExtWidth</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">GPAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Width of the composed glass, extended
                to the outside of the outer frame or the axis of the first
                transom.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ExtHeight</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">GPAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Height of the composed glass, extended
                to the outside of the outer frame or the axis of the first
                transom.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">RevealWidth</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">GPALD</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Width of the composed glass, extended
                to the outside of the outer frame minus the reveal, or the axis
                of the first transom.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">RevealHeight</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">GPALD</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Height of the composed glass, extended
                to the outside of the outer frame minus the reveal, or the axis
                of the first transom.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">SashIndex</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">GPALF</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Index of the sash containing the
                glazing, into the <a href="varouvrantetquincaillerie.php">global sash
                variables</a>.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Leaf</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">GPALF</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Index of the leaf containing the
                glazing (1 = leftmost or bottommost leaf).</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Direction</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">GPALD</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Opening direction of the sash that
                contains the glazing (<span class="f_Variables">Left</span> or <span class="f_Variables">Right</span>).</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">OppositeDirection</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">GPALD</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Opposite opening direction of the sash that
                contains the glazing (<span class="f_Variables">Left</span> or <span class="f_Variables">Right</span>).</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">FillingIndex</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">DF</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Index of the glazing into the <a
                href="varremplissages.php">global filling variables</a>.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">WarmEdge</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">GPALDF</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Returns the category of the <a href="warmedge.php">warm edge</a> 
				used with the glass unit. Refer to <a href="8_1_0_x.php">release note 8.1</a>.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">View</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">DF</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Contains <span class="f_Variables">FromInside</span> when drawing an inner view, or
                <span class="f_Variables">FromOutside</span> when drawing an outer view.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">CrossSectionPosition</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">GPA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">This variable is used only when
                generating cross-sections. It tells you the horizontal or
                vertical position of the section. Note that if the window has
                several cross sections, it will be recomputed once per section,
                so that this variable always has a single value.</p>
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
                style="font-weight: bold;">GPAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Used to replace the
                additionnal margin defined into <span
                style="font-weight: bold;">Price</span> tab of the
                concerned glazing.</p>

                <p style="margin: 0px 0px 0px 14px;">You need to set it up into
                the first glazings page of concerned frame, imperatively, and
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
                style="font-weight: bold;">GPAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Used to replace the
                additionnal margin defined into <span
                style="font-weight: bold;">Price</span> tab of the
                concerned glazing.</p>

                <p style="margin: 0px 0px 0px 14px;">The variable should be set
                within the concerned component formula, and will only affect
                this component.</p>
              </td>
            </tr>

          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#fff7ef"
        border="0"
        style="background-color: #fff7ef; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">VarLin</span></p>
              </td>
              <td valign="middle" width="88"
              style="width: 88px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Wingdings'; font-size: 14pt; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="520"
                style="width: 520px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">You may assign a value to this variable; the content of the
                variable is stored into <span style="font-weight: bold;">Var</span> field of table 
				<span style="font-weight: bold;">Lin.dbf</span>, when the component is exported.</p>
              </td>
            </tr>

          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;">Shape
        handling feature</span>:</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p>When computing glass pane components, you may use shape handling functions
        and variables to compute new shapes. See the page about <a href="manipulation_de_formes.php">shape handling</a> for more information.</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p>The table below lists the array variables that you can use with shape handling
        functions. Each array holds 100 elements. Elements of index 1 contain
        shape information on the original glazing dimensions; index 2 on outer
        frame dimensions; index 3 on reveal dimensions.</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#fff7ef"
        border="0"
        style="background-color: #fff7ef; border: none border-spacing:0px; border-collapse: collapse;">
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
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ShapeType[]</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">G</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Identification of each shape. Possible
                values are:</p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">Rectangle</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">Trapezium</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">RightAngledTriangle</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">TruncatedCorner</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">Pentagon</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">TruncatedTrapezium</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">TruncatedCorner2</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">RightAngledTrapezium</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">SimpleTrapezium</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">Bow</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">FullBow</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">HalfFullBow</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">FlatBow</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">HalfFlatBow</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">TruncatedBox</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">RoundedCorner</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">Quadrilateral</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">Triangle</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">BullsEye</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">BasketHandle</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">FullBasketHandle</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">HalfBasketHandle</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">TruncatedBasketHandle</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">BasketHandle5</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">FullBasketHandle5</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">HalfBasketHandle5</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">TruncatedBasketHandle5</span></p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ShapeOrientation[]</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">G</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Orientation of each shape: <span class="f_Variables">Left</span> or 
				<span class="f_Variables">Right.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ShapeDimA[]</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ShapeDimB[]</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ShapeDimC[]</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ShapeDimD[]</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ShapeDimE[]</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ShapeDimF[]</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ShapeDimG[]</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ShapeDimH[]</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ShapeDimI[]</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ShapeDimJ[]</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ShapeDimK[]</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ShapeDimL[]</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span>
				<span style="font-weight: bold;">G</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Dimensions of each shape. Variable<span class="f_Variables">ShapeDimA[]</span> contains dimension A, 
				<span class="f_Variables">ShapeDimB[]</span> for dimension B, etc... See the page about 
				<a href="manipulation_de_formes.php">shape handling</a> for a list of shapes with their respective dimensions.</p>
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

        <p>Ces variables sont disponibles uniquement lorsque la case Vitrage composé est cochée dans l'onglet <a
        href="vitdescription.php">Description</a>.</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p>WinPro génère une série de variables pour vous aider à calculer les
        composants de vos vitrages. En voici la liste.</p>

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
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Le signe <span
                        style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span>
                        indique une variable modifiable.</td>
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
                        indique une variable que vous devez créer.</td>
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
                      <td>La colonne Utilisation détaille le contexte dans
                        lequel ces variables peuvent être utilisées:</td>
                    </tr>
                  </tbody>
                </table>
                </div>
				
                <p style="margin: 0px 0px 0px 53px;">V = vitrages</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 77px;">P =
                profiles</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 77px;">A =
                articles</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 77px;">M =
                main d'oeuvres</p>

                <p style="margin: 0px 0px 0px 53px;">D = formule de sélection
                de dessin</p>

                <p style="margin: 0px 0px 0px 53px;">F = formule de définition
                de dessin</p>

             </td>
            </tr>

		</tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

       <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#fff7ef"
        border="0"
        style="background-color: #fff7ef; border: none border-spacing:0px; border-collapse: collapse;">
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
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
		
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Longueur</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367" style="width: 367px; border: solid 1px #c0c0c0;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #c0c0c0;">&bull;</span></td>
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
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #c0c0c0;">&bull;</span></td>
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
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Quantite</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">VPAM</span></p>
              </td>
              <td width="367" style="width: 367px; border: solid 1px #c0c0c0;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #c0c0c0;">&bull;</span></td>
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
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #c0c0c0;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Vitrages:
                        </span>Nombre de vitrages identiques à consommer, au
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
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #c0c0c0;">&bull;</span></td>
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
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #c0c0c0;">&bull;</span></td>
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
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Epaisseur</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">VPAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 15px;">Cette variable permet de
                définir la valeur qui viendra remplacer la <span
                style="color: #0000ff;"><a href="macros___.php">macro #3#</a>,
                </span>lorsque celle ci est présente dans la description de
                l'article. </p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">EpaisseurTotale</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">VPAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Epaisseur du vitrage composé.
                Cette valeur vaudra par défaut le contenu du champs Epaisseur
                de l'onglet <a href="vitdimensions.php">Dimensions</a>; vous
                pouvez modifier cette valeur depuis n'importe quelle formule,
                excepté les formules de dessins. </p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">EpaisseurVitrage</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">V</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Epaisseur de la feuille de
                verre courante.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TypeOuvrant</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">VPAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 12px;">Type d'ouvrant contenant le
                vitrage: <span class="f_Variables">Porte</span><span
                class="f_Variables" style="font-weight: bold;">, </span><span
                class="f_Variables">Fixe</span><span class="f_Variables"
                style="font-weight: bold;">, </span><span
                class="f_Variables">Chassis</span>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">LargeurArticle</span><span
                class="f_Variables" style="font-weight: bold;">, </span><span
                class="f_Variables">HauteurArticle</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
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
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Rayon</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Créez cette variable pour
                imposer une forme cintrée sur un profil, ou pour redéfinir le
                rayon de cintrage du cintre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Angle1</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Angle gauche du profil.
                Contient 90° par défaut.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Angle2</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Angle droit du profil.
                Contient 90° par défaut.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span class="f_Variables">X0,
                Y0, X1, Y1</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Position de chaque extrémité
                du profil (le point 0,0 est en bas à gauche du dormant).
                Modifiez ces variables pour repositionner le profil.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">CategorieUsinage</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Catégorie d'usinage du
                profil, utilisé pour les instructions d'<span
                style="color: #0000ff;"><a href="usinages.php">usinages</a>
                </span><span class="f_Variables">SPECIAL</span>. Vous pouvez
                changer dynamiquement cette valeur.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">NumeroScie</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Cette variable vous permet de
                réassigner le profil à une scie différente (ex. pour les angles
                de coupes spéciaux). Cette variable est facultative.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">PrepaLivraison</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                modifier dynamiquement l'impression du composant sur les documents
                de préparation de livraison. Lorsque l'on utilise cette
                variable, il faut impérativement décocher la case "Préparation
                livraison" de la fiche article. Vous devez définir vous-même
                cette variable si vous désirez modifier ce paramètre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">PlanSimplifie</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
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
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DocClient</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                modifier dynamiquement l'impression du composant sur les documents
                client. Lorsque l'on utilise cette variable, il faut
                impérativement décocher la case "Documents client" de la fiche
                article. Vous devez définir vous-même cette variable si vous
                désirez modifier ce paramètre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">CtrlQualite</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable vous permet de
                modifier dynamiquement l'impression du composant sur les documents
                de contrôle qualité. Lorsque l'on utilise cette variable, il
                faut impérativement décocher la case "Contrôle qualité" de la
                fiche article. Vous devez définir vous-même cette variable si
                vous désirez modifier ce paramètre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">FormeRemplissage</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">V</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Forme du vitrage. Cette
                variable contient par défaut la forme du remplissage tel que
                WinPro la calcule. Vous pouvez modifier cette valeur, mais il
                faut dans le même temps modifier les variables <span
                class="f_Variables">DimA</span><span class="f_Variables"
                style="font-weight: bold;">, </span><span
                class="f_Variables">DimB</span>, ..., <span
                class="f_Variables">Orientation</span>, en fonction de la
                nouvelle forme. Vous pouvez également utiliser les <a
                href="manipulation_de_formes.php">fonctions de manipulation de
                formes</a> pour recalculer une nouvelle forme. Les valeurs
                possibles sont: </p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Rectangle</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Trapeze</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TriangleRectangle</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">CoinCasse</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Pentagone</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TrapezeTronque</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">CoinCasse2</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TrapezeRectangle</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">SimpleTrapeze</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Cintre</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">PleinCintre</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DemiPleinCintre</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">CintrePlat</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DemiCintrePlat</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">CintreTronque</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">CoinArrondi</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Quadrilatere</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Triangle</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">OeilDeBoeuf</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">AnsePanier</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">AnsePanierComplete</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DemiAnsePanier</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">AnsePanierTronquee</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">AnsePanier5</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">AnsePanier5Complete</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DemiAnsePanier5</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">AnsePanier5Tronquee</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Orientation</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">V</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Orientation de la forme. Vous
                pouvez changer cette valeur si besoin, pour la valeur <span
                class="f_Variables">Gauche</span> ou <span
                class="f_Variables">Droite</span>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DimA, DimB, DimC, DimD, DimE, DimF, DimG,
                DimH, DimI, DimJ, DimK, DimL</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">V</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Dimensions de la forme. La
                variable <span class="f_Variables">DimA</span> pour la A, <span
                class="f_Variables">DimB</span> pour la dimension B, etc... 
                Voir la page concernant les <a
                href="manipulation_de_formes.php">fonctions de manipulation de
                formes</a> pour les références des dimensions concernées pour
                chaque forme. </p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Largeur</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">VPAMDF</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Largeur du vitrage composé
                (dimension fond de feuillure).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Hauteur</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">VPAMDF</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Hauteur du vitrage composé
                (dimension fond de feuillure).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">LargeurHT</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">VPAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Largeur du vitrage composé,
                étendue à l'extérieur du dormant ou à l'axe de la première
                traverse.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">HauteurHT</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">VPAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Hauteur du vitrage composé,
                étendue à l'extérieur du dormant ou à l'axe de la première
                traverse.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">LargeurTableau</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">VPAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Largeur du vitrage composé
                étendue à l'extérieur du dormant moins la pénétration
                maçonnerie, ou à l'axe de la première traverse.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">HauteurTableau</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">VPAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Hauteur du vitrage composé
                étendue à l'extérieur du dormant moins la pénétration
                maçonnerie, ou à l'axe de la première traverse.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">NumeroOuvrant</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">VPAMF</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Index de l'ouvrant contenant
                le vitrage, dans les tableaux de <a
                href="varouvrantetquincaillerie.php">variables globales
                d'ouvrant</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Position</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">VPAMF</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Index du vantail contenant le
                vitrage (1 = vantail le plus en bas à gauche).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Sens</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">VPAMD</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Sens de l'ouvrant contenant
                le vitrage (<span class="f_Variables">Gauche</span> ou <span
                class="f_Variables">Droite</span>).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">SensOppose</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">VPAMD</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Oppsé du sens de l'ouvrant
                contenant le vitrage (<span class="f_Variables">Gauche</span>
                ou <span class="f_Variables">Droite</span>).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">NumeroRemplissage</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">DF</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Index du vitrage dans les
                tableaux de <a href="varremplissages.php">variables globales de
                remplissages</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">WarmEdge</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">VPAMDF</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Renvoie la catégorie de <a
                href="warmedge.php">warm edge</a> utilisé avec ce vitrage. Voir
                <a href="8_1_0_x.php">note de version 8.1</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Vue</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">DF</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Contient <span
                class="f_Variables">VueInterieure</span> lorsqu'on dessine un
                dessin visible de l'intérieur, ou  <span
                class="f_Variables">VueExterieure </span>si visible de
                l'extérieur.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">PosCoupe</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">VPA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
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
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">MargeTechnique</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">VPAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">S'utilise en remplacement de
                la marge supplémentaire définie dans l'onglet <span
                style="font-weight: bold;">Prix</span> du vitrage. </p>

                <p style="margin: 0px 0px 0px 14px;">Elle doit être paramétrée
                dans la première page vitrage du cadre impérativement, et
                affectera donc tous les onglets (profils articles MO...)</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_Variables">MargeComposant</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">VPAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">S'utilise en remplacement de
                la marge supplémentaire définie dans l'onglet <span
                style="font-weight: bold;">Prix</span> du vitrage. </p>

                <p style="margin: 0px 0px 0px 14px;">La variable devra être
                initialisée dans la formule du composant concerné, et
                n'affectera que celui ci.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#fff7ef"
        border="0"
        style="background-color: #fff7ef; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                class="f_Variables">VarLin</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td valign="top" width="367"
              style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Vous pouvez assigner par
                formule une valeur à cette variable; cette valeur sera stockée
                dans la table <span style="font-weight: bold;">Lin.dbf</span>,
                champ <span style="font-weight: bold;">Var</span>.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p><span
        style="font-size: 12pt; font-weight: bold; text-decoration: underline;">Manipulation
        de forme</span><span style="font-size: 12pt;">:</span></p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p>Lors du calcul des composants du vitrage, vous pouvez utiliser les
        variables et fonctions de manipulation de formes pour créer de
        nouvelles formes. Voir la page concernant les <a
        href="manipulation_de_formes.php">fonctions de manipulation de
        formes</a> pour plus de détails.</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p>La table ci-dessous liste les variables tableau que vous pouvez
        utiliser avec ces fonctions. Chaque variable tableau contient 100
        valeurs; l'élément d'index 1 contient les informations de forme de la
        dimension de vitrage originelle; l'élément d'index 2 pour la dimension
        hors tout du vitrage; l'index 3 pour la dimension tableau.</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#fff7ef"
        border="0"
        style="background-color: #fff7ef; border: none border-spacing:0px; border-collapse: collapse;">
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
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">TypeForme[]</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">V</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Identification de chaque
                forme. Les valeurs possibles sont: </p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">Rectangle</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">Trapeze</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">TriangleRectangle</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">CoinCasse</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">Pentagone</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">TrapezeTronque</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">CoinCasse2</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">TrapezeRectangle</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">SimpleTrapeze</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">Cintre</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">PleinCintre</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">DemiPleinCintre</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">CintrePlat</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">DemiCintrePlat</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">CintreTronque</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">CoinArrondi</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">Quadrilatere</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">Triangle</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">OeilDeBoeuf</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">AnsePanier</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">AnsePanierComplete</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">DemiAnsePanier</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">AnsePanierTronquee</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">AnsePanier5</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">AnsePanier5Complete</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">DemiAnsePanier5</span></p>

                <p style="margin: 0px 0px 0px 41px;"><span
                class="f_Variables">AnsePanier5Tronquee</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">OrientationForme[]</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">V</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Orientation de chaque forme:
                <span class="f_Variables">Gauche</span> ou <span
                class="f_Variables">Droite</span>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DimAForme[]</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DimBForme[]</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DimCForme[]</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DimDForme[]</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DimEForme[]</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DimFForme[]</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DimGForme[]</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DimHForme[]</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DimIForme[]</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DimJForme[]</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DimKForme[]</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DimLForme[]</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
				style="font-weight: bold;">V</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 17px;">Dimensions de chaque forme.
                La variable <span class="f_Variables">DimAForme[]
                </span>contient la dimension A, <span
                class="f_Variables">DimBForme[]</span> la dimension B, etc... 
                Voir le chapitre sur les <a
                href="manipulation_de_formes.php">manipulations de forme</a>
                pour une liste des formes avec leurs dimensions respectives.</p>
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
