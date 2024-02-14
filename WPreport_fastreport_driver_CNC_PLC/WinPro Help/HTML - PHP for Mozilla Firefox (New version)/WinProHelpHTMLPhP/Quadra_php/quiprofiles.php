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
if(top.frames.length==0) { top.location.href="index.php?quiprofiles.php"; }
else { parent.quicksync('a5.6.5'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Profils</title>
  <meta name="keywords"
  content="InnerHeight,OuterHeight,GlassRebate,Clearance1,Clearance6,TopOverlapping,BottomOverlapping,LeftOverlapping,RightOverlapping,TopLeftOverlapping,TopRightOverlapping">
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
        href="quivariables.php">Previous</a>  <a
        href="quibasearticles.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">This page
        allows you to enumerate all the profiles that can be used to create
        this fitting. You have to give the rules for using each profile. The
        profiles will be examined by WinPro in the order in which they are
        defined, for each leaf successively.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Also, the
        first profile formula can be used to set up:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">variable profile section for the sash 
			  (<span class="f_Variables">InnerHeight</span>, <span class="f_Variables">OuterHeight</span> and <span class="f_Variables">GlassRebate</span>).
			  </span></td>
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
                (<span class="f_Variables">Clearance1</span> to <span class="f_Variables"> Clearance6</span>).</td>
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
              <td><span class="f_Textestd">variable sash/frame
                overlapping (<span class="f_Variables">TopOverlapping</span>, <span class="f_Variables">BottomOverlapping</span>, 
                <span class="f_Variables">LeftOverlapping</span>, <span class="f_Variables">RightOverlapping</span>, 
                <span class="f_Variables">TopLeftOverlapping</span>, <span class="f_Variables">TopRightOverlapping</span>).</td>
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
              <td><span class="f_Textestd">variable leaf width within the sash frame (<span class="f_Variables">SashWidth1</span> to 
			  <span class="f_Variables">SashWidth6</span>).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span style="font-size: 5pt;"> </span></p>

        <p>See page <span style="color: #0000ff;"><a
        href="quivariables.php">Variables</a></span> for more details.</p>

        <p style="text-align: center;"><img src="img/clip0159eng.jpg" width="568"
        height="435" border="0" alt="clip0159"></p>

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
                use for cost price</span>: the price of the component will not be
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
                use for selling price</span>: the price of the component will not
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
                fact. document</span>: the component will be listed onto simplified
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
                documents</span>: the component will be mentioned (with quantity
                and dimension) onto customer documents (quotation, confirmation,
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
                the component is mentioned onto customer document, this check box
                tells WinPro its selling price must also be detailed.</span></td>
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
                preparation</span>: the component will be listed onto delivery
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
                control</span><span style="color: #000000;">: the component will
                be listed onto quality control documents.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p style="background: #fffff2;"><span
        style="font-weight: bold; color: #000000; text-decoration: underline;">The
        central section </span><span class="f_Textestd">contains the list of
        colours defined as standard or standard RAL within the system that the
        fittings frame belongs to.</span></p>

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
                from inside</span>: Check this box if the component is visible
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
                from outside</span>: Check this box if the component is visible
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
                colour</span>: Check this box if the component colour is
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
                 as frame colour</span>: Check this box when the component
                should retrieve the outer frame colour instead of fittings frame
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
              <td><span class="f_Textestd" style="font-weight: bold;">Same
                as sash colour</span>: Check this box when the component
                should retrieve the sash frame colour instead of fittings frame
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
        section</span> contains the formula that applies to the profile.</p>

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

        <p class="p_Textestd"><span class="f_Textestd">Cet onglet vous permet
        d'</span><span class="f_Textestd">é</span><span
        class="f_Textestd">num</span><span class="f_Textestd">é</span><span
        class="f_Textestd">rer les profils qui peuvent entrer dans la
        composition de la quincaillerie, et de donner les r</span><span
        class="f_Textestd">è</span><span class="f_Textestd">gles d'utilisation
        de chacun de ces profils. Les profils ainsi d</span><span
        class="f_Textestd">é</span><span class="f_Textestd">finis seront
        examin</span><span class="f_Textestd">é</span><span
        class="f_Textestd">s un </span><span class="f_Textestd">à</span><span
        class="f_Textestd">un pour chaque vantail, dans l'ordre de leur
        d</span><span class="f_Textestd">é</span><span
        class="f_Textestd">finition. </span></p>

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

        <p class="p_Textestd"><span style="font-size: 5pt;"> </span></p>

        <p>Voir la page <span style="color: #0000ff;"><a
        href="quivariables.php">Variables</a></span> pour plus
        d'informations.</p>

        <p style="text-align: center;"><img src="img/clip0398.gif" width="556"
        height="401" border="0" alt="clip0398"></p>

        <p class="p_Textestd"><span class="f_Textestd">L'onglet est réparti en
        trois zones (gauche, centre et droite).</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">La zone de
        gauche</span><span class="f_Textestd">contient la liste des profils;
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

        <p><span style="font-size: 5pt;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">La zone du
        centre</span><span class="f_Textestd">contient la liste des couleurs
        définies comme couleurs standard et comme couleurs RAL standard dans le
        système auquel appartient la quincaillerie. </span></p>

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
                est saisi en teinte autorisée bicolore : <br>
                Winpro évalue les formules des profils dont la couleur
                sélectionnée correspond à la teinte intérieure du chassis ET
                que les cases à cocher soient dans cette configuration <img
                src="img/clip0173.zoom82.gif" width="69" height="21" border="0"
                align="right" vspace="0" hspace="0" alt="Clip0173">, <br>
                OU dont la couleur sélectionnée correspond à la teinte
                extérieure du chassis ET que les cases à cocher soient dans
                cette configuration<img src="img/clip0155.zoom84.gif" width="71"
                height="22" border="0" align="right" vspace="0" hspace="0"
                alt="Clip0155">,<br>
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
                est saisi en Teinte Ral mono ou bicolore standard : <br>
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
                est saisi en Teinte Ral mono ou bicolore hors standard : </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 72px;">          Winpro évalue les
        formules des profils pour lesquels AUCUNE teinte n'a été sélectionnée
        dans la liste.</p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 48px;">2. La case <img src="img/clip0144.gif"
        width="94" height="10" border="0" alt="Clip0144"> se trouvant dans le
        système est activée.</p>

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
                la teinte sélectionnée dans la liste ET que la case <img
                src="img/clip0196.gif" width="82" height="10" border="0"
                alt="Clip0196"> est activée,<br>
                OU pour lesquels la teinte Ral extérieure saisie correspond à
                la teinte sélectionnée dans la liste ET que la case <img
                src="img/clip0205.gif" width="86" height="11" border="0"
                alt="Clip0205"> est activée.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 72px;"> </p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Le bouton </span><span
        class="f_Textestd" style="font-weight: bold;">Inverser
        sélection</span><span class="f_Textestd">au-dessus de cette liste vous
        permet d'inverser la sélection dans la liste.</span></p>

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
                de l'ouvrant (p.ex. profil de renfort acier).</span></td>
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
                dormant, et non celle de la quincaillerie.</span></td>
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
                couleur ouvrant</span><span class="f_Textestd">: Cochez cette
                case si la couleur du profil consommé doit suivre la couleur de
                l'ouvrant, et non celle de la quincaillerie.</span></td>
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
        droite</span><span class="f_Textestd">contient la formule liée au
        profil.</span></p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
