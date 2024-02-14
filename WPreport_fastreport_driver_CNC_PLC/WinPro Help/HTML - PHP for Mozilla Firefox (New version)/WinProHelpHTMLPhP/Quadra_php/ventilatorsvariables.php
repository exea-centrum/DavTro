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
if(top.frames.length==0) { top.location.href="index.php?ventilatorsvariables.php"; }
else { parent.quicksync('a5.13.3'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Variables</title>
  <meta name="keywords"
  content="ExtDimension,SashIndex,Leaf,Dimension,GlassThickness,VentilatorPosition,Left,Top,Right,Bottom,NoGlass,SashType,Door,Fixed,Window,Quantity,ArticleWidth,ArticleHeight,Thickness,SawId,DeliveryPreparation,SimpleFactDoc,CustomerDoc,QualityControl,VarLin,Length,Angle1,Angle2,MillingCategory,X0,X1,Y0,Y1,CrossSectionPosition,FillingIndex,View,ViewFromInside,ViewFromOutside,Width,Height">
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
        href="ventilatorsquestions.php">Previous</a>  <a
        href="ventilatorsprofiles.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

        <p class="p_Textestd"><span class="f_Textestd">WinPro generates several
        variables to help you computing the glazing bar components. They are listed
        below. </span></p>

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
                style="font-weight: bold;">D</span> = Drawing selection formulas</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">F</span> = drawing definition Formulas</p>

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

                <table width="100%" cellspacing="0" cellpadding="0" border="0"
                style="border: none border-spacing:0px;">
                  <tbody>
                    <tr valign="top" align="left">
                      <td width="14" style="width: 14px;"><p><span
                        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></p>
                      </td>
                      <td><p><span
                        style="font-weight: bold; color: #000000;">Profiles:</span>Cut length of the profile.
						<span style="color: #ff0000;">You must define this value, otherwise the profile is not generated!</span></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table width="100%" cellspacing="0" cellpadding="0" border="0"
                style="border: none border-spacing:0px;">
                  <tbody>
                    <tr valign="top" align="left">
                      <td width="14" style="width: 14px;"><p><span
                        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></p>
                      </td>
                      <td><p><span
                        style="font-weight: bold; color: #000000;">Articles</span>:
                        Length of the article, used to define its price if a
                        one dimension price table is tied to the article. It is
                        also used to define the value which will replace <a
                        href="macros___.php">macro #2#</a> if this macro is
                        used in the article definition. This variable is
                        ignored if variables <span
                        class="f_Variables">ArticleHeight</span> and <span
                        class="f_Variables">ArticleWidth</span> are not
                        defined. You must define this value if you need it.</p>
                      </td>
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

                <table width="100%" cellspacing="0" cellpadding="0" border="0"
                style="border: none border-spacing:0px;">
                  <tbody>
                    <tr valign="top" align="left">
                      <td width="14" style="width: 14px;"><p><span
                        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></p>
                      </td>
                      <td><p><span
                        style="font-weight: bold; color: #000000;">Profiles:</span> Number of identical profiles to cut. 
						This must be an integer number.</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table width="100%" cellspacing="0" cellpadding="0" border="0"
                style="border: none border-spacing:0px;">
                  <tbody>
                    <tr valign="top" align="left">
                      <td width="14" style="width: 14px;"><p><span
                        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></p>
                      </td>
                      <td><p><span
                        style="font-weight: bold; color: #000000;">Articles:</span> Number of identical articles to use. 
						This may be any fractional value.</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table width="100%" cellspacing="0" cellpadding="0" border="0"
                style="border: none border-spacing:0px;">
                  <tbody>
                    <tr valign="top" align="left">
                      <td width="14" style="width: 14px;"><p><span
                        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></p>
                      </td>
                      <td><p><span
                        style="font-weight: bold; color: #000000;">Labour:</span> Length of the operation, into
                        seconds. You can also use a time notation (hour:minutes:seconds or minutes:seconds - see the
                        section about <a href="nombres.php">numbers</a>). Fractional seconds are allowed.</p>
						<br>  
						<span style="color: #ff0000;">You must define this value, otherwise the profile is not generated!</span></p>
					  </td>
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
                class="f_Variables">Dimension</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PALD</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Contains the length of the current ventilator.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ExtDimension</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Contains the length of the current ventilator, extended
                to the outside of the outer frame or the axis of the first transom..</p>
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
                style="font-weight: bold;">PALDF</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Index of the sash containg the filling
                into the <a href="varouvrantetquincaillerie.php">global sash
                variables</a>.</p>
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
                style="font-weight: bold;">PALDF</span></p>
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
                class="f_Variables">GlassThickness</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PALD</span></p>
              </td>
              <td width="367" style="width: 367px; border: solid 1px #c0c0c0;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 
						'Arial'; color: #c0c0c0;">&bull;</span></td>
                      <td>Thickness of the glass unit containing the ventilator.</td>
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
                class="f_Variables">VentilatorPosition</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Position of the ventilator within the glass unit: 
				<span class="f_variables">Top</span>, <span class="f_variables">Bottom</span>, 
				<span class="f_variables">Left</span> or <span class="f_variables">Right</span>.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Angle1</span>, 
				<span
                class="f_Variables">Angle2</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Cutting angles at each end of the profile (1=left angle).</p>
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
                style="margin: 0px 0px 0px 14px;"><span class="f_Variables">X0,
                Y0, X1, Y1</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
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
                style="margin: 0px 0px 0px 14px;"><span class="f_Variables">WithoutGlazing</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PALD</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">This variable returns zero when the ventilator is used along with a glazing;
				It returns 1 when there is no glazing but the ventilator is straight between a transom and another frame.</p>

                <p style="margin: 0px 0px 0px 13px;">Considering GH as the glass unit height between the ventilator and the adjacent transom:</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 
						'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>When 50mm &gt; GH &gt;= 1, <span class="f_Variables">WithoutGlazing</span> = 0, an error message 
					  is displayed for the user to move the transom nearer from the ventilator.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 
						'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>When GH &lt; 1, <span class="f_Variables">WithoutGlazing</span> = 1, no glazing will be computed here.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 
						'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>When GH &lt;= -1, <span class="f_Variables">WithoutGlazing</span>= 1, an error message is displayed 
					  for the user to move the transom further from the ventilator.</td>
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
                class="f_Variables">Width</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">DF</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Width of the drawing area.</p>
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
                style="font-weight: bold;">DF</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Height of the drawing area.</p>
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
                style="font-weight: bold;">PAL</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Type of sash containing the ventilator: <span class="f_Variables">Door</span>, 
				<span class="f_Variables">Fixed</span> or <span class="f_Variables">Window</span>.</p>
              </td>
            </tr>
			
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ArticleWidth,</span>
				<p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">ArticleHeight</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Those 2 variables let you define 2
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
                class="f_Variables">Thickness</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">This variable lets you define a value
                which will replace the <a href="macros___.php">macro #3#</a> if
                it is present into the article description. You must define this
                variable if you need it</p>
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
                class="f_Variables">Leaf</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PALD</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Index of the leaf containing the
                ventilator (1 = leftmost or bottommost leaf).</p>
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
                style="font-weight: bold;">PA</span></p>
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
                concerned ventilator.</p>

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
                ventilator.</p>

                <p style="margin: 0px 0px 0px 14px;">The variable should be set
                within the concerned component formula, and will only affect
                this component.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        style="font-weight: bold;"> </span></p>

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

        <p>WinPro génère une série de variables pour vous aider à calculer les
        composants de vos croisillons. En voici la liste.</p>

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
                      <td>Le signe <span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span>
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
                      <td>Le signe <span style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span>
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
				
				<p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">P</span> = Profils</p>
				
				<p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">A</span> = Articles</p>

               <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">M</span> = Main d'oeuvres</p>

               <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">D</span> = formule de sélection de Dessin</p>

               <p style="margin: 0px 0px 0px 40px;"><span
                style="font-weight: bold;">F</span> = formule de déFinition de dessin</p>

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
                        Longueur de coupe du profil. <span style="color: #ff0000;">Vous devez définir cette
                        variable pour un débit de profil, autrement il ne sera
                        pas consommé</span>.</td>
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
                        utilisé pour remplacer la <a href="macros___.php">macro
                        #2#</a> lorsque celle ci est utilisée dans la
                        description de l'article. Cette variable est ignorée
                        lorsque les variables <span
                        class="f_Variables">LargeurArticle </span>et <span
                        class="f_Variables">HauteurArticle</span> sont
                        définies. Cette variable est à définir en cas de besoin.
					   </td>
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
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367" style="width: 367px; border: solid 1px #c0c0c0;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 
						'Arial'; color: #c0c0c0;">&bull;</span></td>
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
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 
						'Arial'; color: #c0c0c0;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Articles:
                        </span>Nombre d'articles identiques à consommer, au
                        format nombre fractionnel.
					   </td>
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
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 
						'Arial'; color: #c0c0c0;">&bull;</span></td>
                      <td><span style="font-weight: bold;">Main d'oeuvre:</span> Longueur de l'opération, en secondes.
                        Vous pouvez également utiliser une notation horaire
                        (heures:minutes:secondes ou minutes:secondes - voir la
                        section relative aux <a href="nombres.php">nombres</a></span>). Les secondes
                        fractionnelles sont autorisées.</p>
						<p><span style="color: #ff0000;">Vous devez définir cette variable, 
						sans quoi le composant n'est pas consommé !</span></p>
					   </td>
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
                class="f_Variables">Dimension</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAMD</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Longueur de l'aérateur.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">DimensionHT</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Longueur de l'aérateur, étendue à l'extérieur du dormant ou à l'axe de la
                première traverse.</p>
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
                style="font-weight: bold;">PAMDF</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Index de l'ouvrant contenant
                l'aérateur, dans les tableaux de <a
                href="varouvrantetquincaillerie.php">variables globales
                d'ouvrant</a>.</p>
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
                style="font-weight: bold;">PAMDF</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Index du vitrage dans les
                tableaux de <a href="varremplissages.php">variables globales de
                remplissages</a>.</p>
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
                style="font-weight: bold;">PAMD</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Epaisseur du vitrage auquel est associé l'aérateur.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">PositionAerateur</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Position de
                l'aérateur dans le vitrage: <span class="f_variables">Gauche</span>, <span class="f_variables">Haut</span>, 
				<span class="f_variables">Droite</span>, <span class="f_variables">Bas</span>.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">Angle1</span>,
				<span
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
                style="margin: 0px 0px 0px 13px;">Angle de
                coupe aux extrémités du profil (1=angle gauche), 90° par défaut.</p>
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
                style="margin: 0px 0px 0px 13px;">Catégorie d'usinage du
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
                class="f_Variables">X0, Y0, X1, Y1</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&hArr;</span><span
                style="font-weight: bold;">P</span></p>
              </td>
              <td width="367" style="width: 367px; border: solid 1px #c0c0c0;">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 
						'Lucida Sans Unicode', 'Arial'; color: #c0c0c0;">&bull;</span></td>
                      <td>Position de chacune des extrémités du profil (le point 0,0 correspond au coin inférieur gauche 
					  <span style="text-decoration: underline;">du dormant</span>). Modifier ces valeurs repositionne le 
					  profil dans l'espace.</p>
 				     </td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
			
           <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span class="f_Variables">SansVitrage</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PALD</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Cette variable est à 0
                lorsque l&rsquo;aérateur est utilisé avec un vitrage; elle est
                à 1 lorsqu&rsquo;il n&rsquo;y a pas de vitrage mais que
                l&rsquo;aérateur est directement à côté d&rsquo;une
                traverse.</p>

                <p style="margin: 0px 0px 0px 13px;">Soit HV la hauteur du
                vitrage entre l'aérateur et la traverse adjacente:</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 
						'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Si 50mm &gt; HV &gt;= 1, <span class="f_Variables">SansVitrage</span> = 0, un message
                        d'erreur invite à rapprocher la traverse de l'aérateur.
					  </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 
						'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Si HV &lt; 1, <span class="f_Variables">SansVitrage
                        </span>= 1, aucun vitrage ne sera consommé.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 
						'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Si HV &lt;= -1, <span class="f_Variables">SansVitrage</span> = 1, une message
                        d'erreur invite à écarter la traverse de l'aérateur.</td>
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
                class="f_Variables">Largeur</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">DF</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Largeur de
                la zone de dessin.</p>
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
                style="font-weight: bold;">DF</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Hauteur de
                la zone de dessin.</p>
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
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Décrit le
                type d'ouvrant contenant l'aérateur: <span
                class="f_Variables">Porte</span>, <span
                class="f_Variables">Fixe </span>ou<span
                class="f_Variables">Chassis</span>.</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">LargeurArticle</span>, 
				<span
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
                style="margin: 0px 0px 0px 13px;">Ces 2 variables permettent de définir les dimensions à rechercher
                dans une éventuelle grille de prix. Elles sont aussi utilisées
                pour remplacer la <a href="macros___.php">macro #2#</a></span> lorsque celle ci est
                utilisée dans la description de l'article. Ces variables sont à définir en cas de besoin.</p>
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
                style="font-size: 13pt; font-family: 'Wingdings'; font-weight: bold; color: #ff0000;">&lArr;</span><span
                style="font-weight: bold;">PA</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable permet de définir la valeur qui viendra remplacer la
                <a href="macros___.php">macro #3#</a>, </span>lorsque celle ci est présente dans la description de l'article.</p>
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
                class="f_Variables">Position</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">PAMD</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Index du vantail contenant l'aérateur (1 = le plus en bas à gauche).</p>
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
                dessin visible de l'intérieur, ou  <span class="f_Variables">VueExterieure </span>si visible de
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
                style="font-weight: bold;">PA</span></p>
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
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">S'utilise en remplacement de
                la marge supplémentaire définie dans l'onglet <span
                style="font-weight: bold;">Description</span> de l'aérateur. </p>

                <p style="margin: 0px 0px 0px 14px;">Elle doit être paramétrée
                dans la première page profil de l'aérateur impérativement, et
                affectera donc tous les onglets (profils articles MO...).</p>
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
                style="font-weight: bold;">PAM</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">S'utilise en remplacement de
                la marge supplémentaire définie dans l'onglet <span
                style="font-weight: bold;">Description</span> de l'aérateur. </p>

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
              <td valign="middle" width="178"
              style="width: 178px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
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

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
