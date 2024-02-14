<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Profiles","Profils"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?ouvprofiles.php"; }
else { parent.quicksync('a5.3.4'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Profils</title>
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
        href="ouvvariables.php">Previous</a>  <a
        href="ouvbasearticles.php">Next</a> </span> </td>
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

        <p class="p_Textestd"><span class="f_Textestd">This page allows you to
        enumerate all the profiles that can be used to create this sash. You
        have to give the rules for using each profile. The profiles will be
        examined by WinPro in the order in which they are defined, for each
        side of each leaf successively.</span></p>

        <p style="background: #fffff2;"><span
        style="font-size: 5pt; color: #000000;"> </span></p>

        <p style="background: #fffff2;"><span style="color: #000000;">Also, the
        first profile formula can be used to set up:  </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">variable profile section
                (</span><span
                style="font-family: 'Courier New'; color: #0000ff;">InnerHeight</span><span
                style="color: #000000;">, </span><span
                style="font-family: 'Courier New'; color: #0000ff;">OuterHeight</span><span
                style="color: #000000;"> and </span><span
                style="font-family: 'Courier New'; color: #0000ff;">GlassRebate</span><span
                style="color: #000000;">), </span></td>
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
              <td><span class="f_Textestd">variable space between vents
                (</span><span
                style="font-family: 'Courier New'; color: #0000ff;">Clearance1</span><span
                style="color: #000000;"> to </span><span
                style="font-family: 'Courier New'; color: #0000ff;">Clearance6</span><span
                style="color: #000000;">), </span></td>
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
              <td><span class="f_Textestd">variable sash/frame overlapping
                (</span><span
                style="font-family: 'Courier New'; color: #0000ff;">TopOverlapping</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">,
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">BottomOverlapping</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">,
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">LeftOverlapping</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">,
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">RightOverlapping</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">,
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">TopLeftOverlapping</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">,
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">TopRightOverlapping</span><span
                style="color: #000000;">). </span></td>
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
              <td><span class="f_Textestd">variable sash frame widths
                (</span><span
                style="font-family: 'Courier New'; color: #0000ff;">SashWidth1</span><span
                style="color: #000000;"> to </span><span
                style="font-family: 'Courier New'; color: #0000ff;">SashWidth6</span><span
                style="color: #000000;">), </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="background: #fffff2;"><span
        style="font-size: 5pt; color: #000000;"> </span></p>

        <p style="text-align: center; margin: 14px 0px 14px 0px;"><img
        src="img/clip0145eng.jpg" width="742" height="412" border="0"
        alt="clip0145eng"></p>

        <p class="p_Textestd"><span class="f_Textestd">The page is divided in 3
        sections (left, center, right).</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p style="background: #fffff2;"><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">The
        left section</span> contains the list of profiles. Select a line in
        this list, and type the profile code in the input field immediately on
        top of the list.</p>

        <p class="p_Textestd"><span class="f_Textestd">Below the list, there
        are several check boxes, which let you define a few usage
        conditions:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Do not
                use for cost price</span>: the price of the profile will not be
                used when computing the cost price.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Do not
                use for selling price</span>: the price of the profile will not
                be used when computing the selling price.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Simpl.
                fact. document</span>: the profile will be listed on simplified
                factory documents.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Customer
                documents</span>: the profile will be mentioned (with quantity
                and dimension) on customer documents (quotation, confirmation,
                delivery).</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Print
                price on cust. doc.</span><span style="color: #000000;">: if
                the profile is mentioned on customer document, this check box
                tells WinPro its selling price must also be
              detailed.</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Delivery
                preparation</span>: the profile will be listed on delivery
                preparation documents.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Quality
                control</span><span style="color: #000000;">: the profile will
                be listed on quality control documents.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p style="background: #fffff2;"><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">The
        central section </span><span class="f_Textestd">contains the list of
        colours defined as standard or standard RAL within the system that the
        sash frame belongs to.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">When a profile does not
        obey to any rule concerning colours, do no select anything here; when
        the profile and its formula is depending on colour rules defined below,
        you should select here concerned colours.</span></p>

        <p style="margin: 0px 0px 0px 24px;">Winpro compute the profile formula
        in the following cases:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">1.</span></td>
              <td>Box <img src="img/clip0144beng.jpg" width="102" height="22"
                border="0" alt="Clip0144beng"> located into the system record
                is disabled.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 72px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">CASE 1</span> : Window is
                created using an authorized mono colour : <br>
                Winpro computes the profiles formulas where no colour is
                selected, or where a selected colour corresponds to the window
                colour input.<br>
                 </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 72px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">CASE 2</span> : Window is
                created using authorized bi colour : <br>
                WinPro computes the profile formulas where the selected colour
                corresponds to the inside colour input for the window <br>
                AND where boxes are set up like this <img src="img/clip104aeng.jpg"
                width="110" height="33" border="0" alt="Clip104aeng">, <br>
                OR where the selected colour corresponds to the outside colour
                input for the window <br>
                AND where boxes are set up like that <img src="img/clip104beng.jpg"
                width="116" height="38" border="0" alt="Clip104beng">, <br>
                OR where no colour is selected into the list. <br>
                <span class="f_ImageCaption"> </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 72px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">CASE 3</span> : Window is
                created using mono or bi standard RAL colour : <br>
                Winpro computes formulas of all profiles without
              restriction.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 72px;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 72px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">CASE 4</span> :  Window is
                created using mono or bi non standard RAL colour : <br>
                Winpro computes profiles formulas where NO colour is selected
                into the list.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 48px;">2. Box <img src="img/Clip0144aeng.jpg"
        width="99" height="19" border="0" alt="Clip0144aeng"> located into the
        system record is enabled.</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 72px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">CASE 1 </span>,<span
                style="font-weight: bold;">CASE 2 </span>and <span
                style="font-weight: bold;">CAS 4 </span>remains the same as
                above.<br>
                 </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 72px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">CASE 3</span> : Window is
                created using mono or bi standard RAL colour : <br>
                Winpro computes profiles formulas where nothing is selected
                into the list, <br>
                OR where the selected colour corresponds to the inside RAL
                colour input <br>
                AND where the box <img src="img/clip104ceng.jpg" width="101"
                height="16" border="0" alt="Clip104ceng"> is enabled, <br>
                OR where the selected colour corresponds to the outside RAL
                colour input for the window <br>
                AND box <img src="img/clip104deng.jpg" width="108" height="20"
                border="0" alt="Clip104deng"> is enabled. </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 72px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">The <span
        style="font-weight: bold; color: #000000;">Reverse selection</span>
        button above the list lets you reverse all of the list's
        selections.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Below this colour list,
        you have a few extra check boxes:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Visible
                from inside</span>: Check this box if the profile is visible
                from inside the building. </td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Visible
                from outside</span>: Check this box if the profile is visible
                from outside the building.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">No
                colour</span>: Check this box if the profile colour is
                undefined (e.g. steel reinforcement).</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Same
                colour as outer frame </span>: Check this box when the profile
                should retrieve the outer frame colour instead of sash frame
                colour.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Reverse
                clrs if RAL 2 clrs</span>: When you check this box, the inner
                and outer colours are reversed for the profile.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">The right
        section</span> contains the formula that applies to the profile, as
        well as some check boxes:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Top</span>, <span class="f_Textestd"
                style="font-weight: bold;">Bottom</span>, <span
                class="f_Textestd" style="font-weight: bold;">left</span>,
                <span class="f_Textestd"
                style="font-weight: bold;">Right</span> : The formula will only
                be applied onto sides where box is checked.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">90°
                cut</span>: Forces the profile to 90° cut on each end.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Not
                beside a transom</span><span style="color: #000000;">: The
                formula will not be applied if there is an outer frame transom
                on the current side of the leaf. </span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">French
                mullion</span><span style="color: #000000;">: The formula
                applies to a French mullion (profile between 2 leaves in a
                French window). </span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">French
                mullion width</span><span style="color: #000000;">: This field
                appears only when the </span><span
                style="font-weight: bold; color: #000000;">French
                mullion</span><span style="color: #000000;">box is checked. It
                contains the width of the French mullion. This width is used
                for drawings, and to compute the exact length of this profile
                in non rectangular sashes. </span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">French
                mullion width</span><span style="color: #000000;">: This field
                appears only when the </span><span
                style="font-weight: bold; color: #000000;">French
                mullion</span><span style="color: #000000;">box is checked. It
                contains the width of the French mullion. This width is used
                for drawings, and to compute the exact length of this profile
                in non rectangular sashes. </span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Central
                joint on outer frame</span><span style="color: #000000;">:
                Check this box if the formula applies to the central joint on
                the outer frame. This is used only for
              cross-sections.</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Central
                joint on sash</span><span style="color: #000000;">: Check this
                box if the formula applies to the central joint on the sash.
                This is used only for cross-sections. </span></td>
            </tr>
          </tbody>
        </table>
        </div>

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

        <p class="p_Textestd"><span class="f_Textestd">Cet onglet vous permet
        d'</span><span class="f_Textestd">é</span><span
        class="f_Textestd">num</span><span class="f_Textestd">é</span><span
        class="f_Textestd">rer les profils qui peuvent entrer dans la
        composition de l'ouvrant, et de donner les r</span><span
        class="f_Textestd">è</span><span class="f_Textestd">gles d'utilisation
        de chacun de ces profils. Les profils ainsi d</span><span
        class="f_Textestd">é</span><span class="f_Textestd">finis seront
        examin</span><span class="f_Textestd">é</span><span
        class="f_Textestd">s un </span><span class="f_Textestd">à</span><span
        class="f_Textestd">un pour chaque c</span><span
        class="f_Textestd">ô</span><span class="f_Textestd">t</span><span
        class="f_Textestd">é</span><span class="f_Textestd">de chaque vantail,
        dans l'ordre de leur d</span><span class="f_Textestd">é</span><span
        class="f_Textestd">finition.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">De plus, la
        premi</span><span class="f_Textestd">è</span><span
        class="f_Textestd">re formule de profil est </span><span
        class="f_Textestd">é</span><span class="f_Textestd">valu</span><span
        class="f_Textestd">é</span><span class="f_Textestd">e dans la phase de
        calcul dimensionnel. Vous pouvez donc y d</span><span
        class="f_Textestd">é</span><span class="f_Textestd">finir certaines
        caract</span><span class="f_Textestd">é</span><span
        class="f_Textestd">ristiques de l'ouvrant:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">les sections variables pour chaque
                vantail (variables </span><span
                class="f_Variables">EpaisseurInterieure</span><span
                class="f_Textestd">,</span><span
                class="f_Variables">EpaisseurExterieure</span><span
                class="f_Textestd"> et </span><span
                class="f_Variables">BatteeVitrage</span><span
                class="f_Textestd">)</span></td>
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
              <td><span class="f_Textestd">l'espace ou le recouvrement entre
                chaque vantail (</span><span
                class="f_Variables">JeuMauclair1</span><span
                class="f_Textestd"></span><span
                class="f_Textestd"> à </span><span
                class="f_Textestd"></span><span
                class="f_Variables">JeuMauclair6</span><span
                class="f_Textestd">)</span></td>
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
              <td><span class="f_Textestd">le recouvrement ouvrant/dormant
                (</span><span class="f_Variables">RecouvrementBas</span><span
                class="f_Textestd">, </span><span
                class="f_Variables">RecouvrementHaut</span><span
                class="f_Textestd">, </span><span
                class="f_Variables">RecouvrementGauche</span><span
                class="f_Textestd">, </span><span
                class="f_Variables">RecouvrementDroite</span><span
                class="f_Textestd">, </span><span
                class="f_Variables">RecouvrementHautGauche</span><span
                class="f_Textestd">, </span><span
                class="f_Variables">RecouvrementHautDroite</span><span
                class="f_Textestd">) </span></td>
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
              <td><span class="f_Textestd">les entraxes des différents vantaux
                constituant l'ouvrant (</span><span
                class="f_Variables">EntraxeVantail1</span><span
                class="f_Textestd"> à </span><span
                class="f_Variables">EntraxeVantail6</span><span
                class="f_Textestd">)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;"> </span></p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0329.gif" width="574"
        height="523" border="0" alt="clip0329"></p>
		
		        <p class="p_Textestd"><span class="f_Textestd">L'onglet est réparti en
        trois zones (gauche, centre et droite).</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">La zone de
        gauche</span><span class="f_Textestd"> contient la liste des profils;
        sélectionnez une ligne de cette liste, et indiquez le code profil dans
        la zone de saisie immédiatement au-dessus de la liste.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Sous la liste, vous
        disposez de plusieurs cases à cocher, qui vous permettent de définir
        certaines caractéristiques d'utilisation du profil:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Exclure
                du pr. revient</span><span class="f_Textestd">: le prix de ce
                profil n'interviendra pas sur le prix de revient.</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Exclure
                du pr. de vente</span><span class="f_Textestd">: le prix de ce
                profil n'interviendra pas sur le prix de vente.</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Plan
                d'atelier simplifié</span><span class="f_Textestd">: le profil
                sera listé sur le plan d'atelier simplifié.</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Documents
                clients</span><span class="f_Textestd">: le profil sera
                mentionné (avec quantité et dimension) sur les documents
                clients (devis, confirmation, note d'envoi).</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Valorisation</span><span
                class="f_Textestd">: si le profil est mentionné sur les
                documents clients, il sera en plus valorisé (en tenant compte
                du prix de vente négoce s'il est disponible).</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Préparation livraison</span><span
                class="f_Textestd">: le profil sera mentionné sur la
                préparation de livraison.</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Contrôle
                qualité</span><span class="f_Textestd">: le profil sera
                mentionné sur les documents de contrôle qualité.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">La zone du
        centre</span><span class="f_Textestd"> contient la liste des couleurs
        définies comme couleurs standard et comme couleurs RAL standard dans le
        système auquel appartient l'ouvrant. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Si le profil n'obéit à
        aucune règle de couleur, il suffit de ne rien sélectionner dans cette
        liste; si par contre, le profil et sa formule ne s'appliquent qu'à
        certaines couleurs en suivant les règles définies ci-dessous, il faut
        sélectionner chacune des couleurs concernées.</span></p>

        <p style="margin: 0px 0px 0px 24px;">Winpro évalue la formule d'un
        profil dans les cas suivants:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">1.</span></td>
              <td>La case <img src="img/clip0144.gif" width="94" height="10"
                border="0" alt="Clip0144"> se trouvant dans le système est
                désactivée</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 72px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">CAS 1</span> : Le chassis
                est saisi en teinte autorisée mono : <br>
                Winpro évalue la formule des profils pour lesquels aucune
                teinte nest sélectionnée, ou pour lesquels la couleurs
                sélectionnée correspond à la teinte saisie dans la commande.<br>
                 </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 72px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">CAS 2</span> : Le chassis
                est saisi en teinte autorisée bicolor : <br>
                Winpro évalue les formules des profils dont la couleur
                sélectionnée correspond à la teinte intérieure du chassis <br>
                ET que les cases à cocher soient dans cette configuration <img
                src="img/clip0173.zoom82.gif" width="69" height="21" border="0"
                alt="Clip0173">, <br>
                OU dont la couleur sélectionnée correspond à la teinte
                extérieure du chassis <br>
                ET que les cases à cocher soient dans cette configuration<img
                src="img/clip0155.zoom84.gif" width="71" height="22" border="0"
                alt="Clip0155">, <br>
                OU dont aucune teinte n'est sélectionnées dans la liste. <br>
                <span class="f_ImageCaption"> </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 72px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">CAS 3</span> : Le chassis
                est saisi en Teinte Ral mono ou bicolor standard : <br>
                Winpro évalue les formules de tous les profils sans
              restriction.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 72px;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 72px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">CAS 4</span> :  Le chassis
                est saisi en Teinte Ral mono ou bicolor hors standard : </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 72px;">Winpro évalue les formules des
        profils pour lesquels AUCUNE teinte n'a été sélectionnée dans la
        liste.</p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 48px;">2. La case <img
        src="img/clip104efra.jpg" width="121" height="16" border="0"
        alt="Clip104efra"> se trouvant dans le système est activée.</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 72px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Les <span style="font-weight: bold;">CAS 1 </span>,<span
                style="font-weight: bold;">CAS 2 </span>et <span
                style="font-weight: bold;">CAS 4 </span>correspondent
                respectivement aux cas énoncés ci-dessus.<br>
                 </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 72px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">CAS 3</span> : Le chassis
                est saisi en Teinte Ral mono ou bicolor standard : <br>
                Winpro évalue la formule des profils pour lesquels aucune
                teinte n'est sélectionnée, <br>
                OU pour lesquels la teinte Ral intérieure saisie correspond à
                la teinte sélectionnée dans la liste <br>
                ET que la case <img src="img/clip0196.gif" width="82" height="10"
                border="0" alt="Clip0196"> est activée, <br>
                OU pour lesquels la teinte Ral extérieure saisie correspond à
                la teinte sélectionnée dans la liste <br>
                ET que la case <img src="img/clip0205.gif" width="86" height="11"
                border="0" alt="Clip0205"> est activée.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 72px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd">Le bouton <span class="f_Textestd"
        style="font-weight: bold;">Inverser sélection</span> au-dessus de cette
        liste vous permet d'inverser la sélection dans la liste.</p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Sous cette liste de
        couleurs se trouvent quelques cases à cocher supplémentaires:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Visible
                de l'intérieur</span><span class="f_Textestd">: Cochez cette
                case si le profil est visible de l'intérieur.</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Visible
                de l'extérieur</span><span class="f_Textestd">: Cochez cette
                case si le profil est visible de l'extérieur.</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Sans
                couleur</span><span class="f_Textestd">: Cochez cette case si
                la couleur du profil est indéterminée par rapport à la couleur
                du dormant (p.ex. profil de renfort acier).</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Suivre
                couleur dormant</span><span class="f_Textestd">: Cochez cette
                case si la couleur du profil consommé doit suivre la couleur du
                dormant, et non celle de l'ouvrant.</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Retourner
                si RAL bicolore</span><span class="f_Textestd">: Cochez cette
                case pour inverser la notion de couleurs intérieure et
                extérieure, pour les profils RAL bicolores.</span></td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">La zone de
        droite</span><span class="f_Textestd"> contient la formule liée au
        profil, ainsi que quelques cases à cocher:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Haut</span><span
                class="f_Textestd">, </span><span class="f_Textestd"
                style="font-weight: bold;">Bas</span><span class="f_Textestd">,
                </span><span class="f_Textestd"
                style="font-weight: bold;">Gauche</span><span
                class="f_Textestd">, </span><span class="f_Textestd"
                style="font-weight: bold;">Droite</span><span
                class="f_Textestd">: La formule ne sera appliquée que sur les
                bords correspondant aux cases cochées.</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Coupe
                droite</span><span class="f_Textestd">: Force une coupe à 90°
                pour le profil correspondant (ex.: profil de
              renfort)</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Pas à
                côté d'une traverse</span><span class="f_Textestd">: La formule
                n'est pas évalué si une traverse de dormant touche le bord du
                vantail en cours de calcul.</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Mauclair</span><span
                class="f_Textestd">: la formule s'applique pour un profil de
                battement (profil entre vantaux).</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Largeur
                mauclair</span><span class="f_Textestd">: Ce champ n'apparaît
                que si la case </span><span class="f_Textestd"
                style="font-weight: bold;">Mauclair </span><span
                class="f_Textestd">est cochée. Il contiendra la largeur du
                profil de battement. Cette largeur sera utilisée pour les
                dessins, et pour calculer précisément la dimension de coupe du
                battement en cas de châssis non rectangulaire.</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Joint
                central dormant</span><span class="f_Textestd">: Cochez cette
                case si la formule s'applique pour un joint central sur le
                dormant. Cette option ne concerne que les vues en
              coupes.</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Joint
                central ouvrant</span><span class="f_Textestd">: Cochez cette
                case si la formule s'applique pour un joint central sur
                l'ouvrant. Cette option ne concerne que les vues en
                coupes.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
