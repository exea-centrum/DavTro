<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Description","Description"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?ouvdescription.php"; }
else { parent.quicksync('a5.3.1'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Description</title>
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
        href="introduction.php">Top</a>� <a href="ouvrants.php">Previous</a>�
        <a href="ouvquestions.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p class="p_Textestd"><span
        class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">The description page defines the main characteristics of the sash.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p style="text-align: center; margin: 14px 0px 0px 0px;"><img
        src="img/clip0142eng.jpg" width="774" height="411" border="0"
        alt="clip0142eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Description</span>: Sash frame description.</td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">System</span>: Code of the <a href="systemes.php">system</a> for the sash frame.</td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Extra
                margin</span>: Additional sales
                margin applied to all components of this sash.</td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Category</span>: Numerical value for the category of the sash. This field has a double 
				functionality and may contain an optional value.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">1. � � � �The array variable <span
        class="f_variables">_SashCategory []</span> is initialized with the value of sash frames used into the window.</p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">2. � � � �WinPro will attempt to find in the new system a sash whose 
		category matches that of the previous sash.</p>
		
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Lock
                changes</span>: if you check this box, you have to give a predefined password to be able to make changes to the sash.</td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Exclude from WinPro/D</span>: Check this box if you do not want this sash to be exported to WinPro/D.</td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Default transom</span>: select here the default transom which will be proposed to the user when adding
                a transom to this sash. This overrides the default sash transom setting in the <a href="systemes.php">system</a>.</td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Outside</span>: Height of the outside face of the
                sash profile, for all sides (except otherwise specified).</td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Bottom</span>: Height of the outside face of the
                sash profile, for the bottom side. Type nothing here if this is the same as the general value.</td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Rebate</span>: Height of the glass rebate, for all sides (except otherwise specified).</td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Bottom</span>: Height of the glass rebate, for the
                bottom side. Type nothing here if this is the same as the general value.</td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Inside</span>: Height of the inside face of the sash
                profile, for all sides (except otherwise specified).</td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Bottom</span>: Height of the inside face of the sash
                profile, for the bottom side. Type nothing here if this is the same as the general value.</td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Reverse frame</span>: Check this box if the sash opens in the reverse direction (inside or outside).
                When you mix sashes with and without this box checked, in the same window, WinPro will segment the outer frame and possibly
                the transoms.</td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Frame without rebate (NL)</span><span class="f_Textestd">: 
			  this box is only available when corresponding system box is checked. This box when checked will initialize variable <span
                class="f_Variables">SegmentType []</span> or not.</span></td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Connection of angles</span>: Select how profiles are assembled.</td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Number of leaves</span>: Select the number of leaves in the sash, as well as their layout (horizontal or
                vertical). You can have a maximum of 7 leaves horizontally, and 3 leaves vertically.</td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Leaf order</span><span style="color: #000000;">: Define the order in which leaves will be drawn, 
				for a sash opening to the left. The leftmost or bottommost leaf has number 1. This is useful when leaves overlap 
				(e.g. in a sliding window). This default value may be changed by rule using variable <span
                class="f_Variables">SashOrder.</span></td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Frame/sash overlapping</span>: Define the overlapping of sash over frame, for all sides (except otherwise
                specified). A positive value means an overlapping; a negative value means a clearance. See also variables <span
                class="f_variables"><a href="ouvvariables.php">TopOverlapping, BottomOverlapping, LeftOverlapping, RightOverlapping</a></td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Bottom</span>: Define the overlapping of sash over
                frame, for the bottom side. Type nothing here if this is the same as the general value.</td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Additional clearance</span>: This clearance will be added to the glass standard clearance.</td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Glazing beads outside</span>: Check this box if the glazing beads are outside.</td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Type</span>: Define the category that the sash belongs to: <span
                style="font-weight: bold; color: #000000;">Door</span><span
                style="color: #000000;">, </span><span
                style="font-weight: bold; color: #000000;">Fixed
                sash</span><span style="color: #000000;">, </span><span
                style="font-weight: bold; color: #000000;">Regular
                sash</span><span style="color: #000000;">.</td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Space between leaves</span>: The number
                of fields in this area depends on the number of leaves in the
                sash: nothing for one leaf, 1 field for 2 leaves, ..., 6 fields
                for 7 leaves. These fields contain the clearance between 2
                leaves (positive value) or the overlapping (negative value).</td>
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
              <td><span style="font-weight: bold;">Fixed section: </span>When checked, 
			  WinPro excluded the variable sections and overlapping computation that may have been set up, which may increase computation speed.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="526"
                style="width: 526px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Note</span><span
                style="text-decoration: underline;">:</span></p>

                <p style="margin: 0px 0px 0px 13px;">Variables sections 
                must <span
                style="font-weight: bold; color: #ff0000;">imperatively
                </span> be set up into the first profile page of corresponding frame, otherwise they are ignored !</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;">�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">No variable overlapping</span><span
                class="f_Textestd">: </span>When checked, 
			  WinPro excluded the variable sections and overlapping computation that may have been set up, which may increase computation speed.</td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Fixed gap between leaves</span><span class="f_Textestd">: </span>When checked, 
			  WinPro excluded the variable gap between leaves computation that may have been set up, which may increase computation speed.</td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Cross section representation of door opening</span>: This section has 4 fields, which let
                you connect WinPro drawings to a door, that will represent a schematic cross section of the door opening. You can define
                drawings for left and right opening, and from normal and reversed view.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">For those drawings, only configuration variables are available
		Exemple:</span></p>

		 <p style="text-align: center; margin: 14px 0px 14px 0px;"><img
        src="img/clip0143eng.jpg" width="229" height="507" border="0"
        alt="clip0143eng"></p>
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
        class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_Textestd">L'onglet description
        d�finit les caract�ristiques de base de l'ouvrant.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p style="text-align: center;"><img src="img/clip0268.jpg" width="605"
        height="359" border="0" alt="clip0268"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Description</span><span
                class="f_Textestd">: Description de l'ouvrant.</span></td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Syst�me</span><span
                class="f_Textestd">: Le <a href="systemes.php">syst�me</a>
                auquel appartient cet ouvrant.</span></td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Coefficient de marge</span><span
                class="f_Textestd">: Coefficient multiplicateur appliqu� au
                prix de revient de tous les composants de l'ouvrant pour
                obtenir le prix de vente.</span></td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Cat�gorie</span><span
                class="f_Textestd">: Ce champ a une double fonction et peut
                contenir une valeur num�rique facultative.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">1. � � � �La variable tableau </span><span
        class="f_Variables">_OuvrantCatOuvr []</span><span
        class="f_Textestd"> est initialis�e avec la valeur de la cat�gorie des
        ouvrants utilis�s dans la menuiserie.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">2. � � � �</span><span class="f_Textestd">WinPro
        tentera de remplacer l'ouvrant de l'ancien syst�me par un ouvrant du
        nouveau, dont le champ cat�gorie est �gal � celui de l'ancien
        ouvrant.</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Verrouiller les
                modifications</span><span class="f_Textestd">: Si vous cochez
                cette case, vous devrez fournir un mot de passe avant de
                pouvoir modifier � nouveau l'ouvrant.</span></td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Exclure
                du module devis</span><span class="f_Textestd">: cochez cette
                case si l'ouvrant ne doit pas �tre transmis �
              WinPro/D.</span></td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Traverse
                par d�faut</span><span class="f_Textestd">:</span><span
                class="f_Textestd">indiquez ici le code de la traverse par
                d�faut pour cet ouvrant, si cette traverse n'est pas celle
                d�finie par d�faut au niveau du <a href="systemes.php">syst�me</a>.</span></td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Ext�rieur</span><span
                class="f_Textestd">: hauteur de la face ext�rieure de
                l'ouvrant, pour tous les c�t�s (sauf indication
                contraire).</span></td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Ext�rieur
                (Bas)</span><span class="f_Textestd">: hauteur de la face
                ext�rieure de l'ouvrant dans la partie basse. N'indiquez rien
                dans ce champ si la partie basse a la m�me hauteur que les
                autres c�t�s.</span></td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Batt�e</span><span
                class="f_Textestd">: hauteur de la batt�e de vitrage, pour tous
                les c�t�s (sauf indication contraire).</span></td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Batt�e
                (Bas)</span><span class="f_Textestd">: hauteur de la batt�e de
                vitrage dans la partie basse. N'indiquez rien dans ce champ si
                la partie basse a la m�me hauteur que les autres
              c�t�s.</span></td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Int�rieur</span><span
                class="f_Textestd">: hauteur de la face int�rieure de
                l'ouvrant, pour tous les c�t�s (sauf indication
                contraire).</span></td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Int�rieur
                (Bas)</span><span class="f_Textestd">: hauteur de la face
                int�rieure de l'ouvrant dans la partie basse. N'indiquez rien
                dans ce champ si la partie basse a la m�me hauteur que les
                autres c�t�s.</span></td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Inverser
                le dormant</span><span class="f_Textestd">: cochez cette case
                si le dormant doit �tre retourn� vers l'ext�rieur autour de cet
                ouvrant. Ceci peut �ventuellement g�n�rer une segmentation du
                dormant, si des ouvrants non invers�s et des ouvrants invers�s
                sont utilis�s dans un m�me ch�ssis.</span></td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Dormant
                sans batt�e (NL)</span><span class="f_Textestd">: cette case
                n'appara�t que si la case du m�me nom est activ�e au niveau du
                syst�me auquel appartient cet ouvrant. L'�tat de cette case
                permettra � Winpro d'initialiser la variable </span><span
                class="f_Variables">TypeSegment []</span><span
                class="f_Textestd">en fonction.</span></td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Assembl.
                angles</span><span class="f_Textestd">: choisissez le type
                d'assemblage des profils de l'ouvrant.</span></td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Nombre de
                vantaux</span><span class="f_Textestd">: choisissez le nombre
                de vantaux dans l'ouvrant, ainsi que leur orientation
                (horizontale ou verticale). Vous pouvez disposer au maximum de
                7 vantaux horizontalement ou de 3 verticalement.</span></td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Ordre de
                dessin des vantaux</span><span class="f_Textestd">: indiquez
                par une s�rie de chiffres dans quel ordre les vantaux seront
                dessin�s, pour un sens d'ouverture gauche. Le vantail le plus �
                gauche porte le num�ro 1. Ceci n'est utile que si les vantaux
                se recouvrent mutuellement (ex.: coulissant). Cette valeur par
                d�faut pourra ensuite �tre modifi�e par formule � l'aide de la
                variable </span><span
                class="f_Variables">OrdreVantaux</span><span
                class="f_Textestd"></span></td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Recouvrement
                ouvrant/dormant</span><span class="f_Textestd">: Indiquez le
                recouvrement de l'ouvrant sur le dormant, sur chaque c�t� du
                cadre. Voyez aussi les variables </span><a href="ouvvariables.php">RecouvrementHaut, RecouvrementBas, RecouvrementGauche 
				et RecouvrementDroite</a>.</span></td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Recouvrement ouvrant/dormant
                (Bas)</span><span class="f_Textestd">: recouvrement de
                l'ouvrant sur le dormant en partie basse. N'indiquez rien dans
                ce champ si le recouvrement est identique � celui des autres
                c�t�s.</span></td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Aisance
                suppl�mentaire vitrage</span><span class="f_Textestd">: Cette
                aisance sera ajout�e � celle d�finie au niveau des
                vitrages.</span></td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Parclose
                � l'ext�rieur</span><span class="f_Textestd">: cochez cette
                case si les parcloses de cet ouvrant sont � l'ext�rieur. Cette
                notion est importante dans le cas d'une fen�tre en teinte
                bicolor.</span></td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Type</span><span
                class="f_Textestd">: Indiquez de quel type d'ouvrant il s'ag�t:
                </span><span class="f_Textestd"
                style="font-weight: bold;">Porte</span><span
                class="f_Textestd">, </span><span class="f_Textestd"
                style="font-weight: bold;">Fixe simple cadre</span><span
                class="f_Textestd">, </span><span class="f_Textestd"
                style="font-weight: bold;">Ouvrant</span><span
                class="f_Textestd">. La diff�rence entre une porte et un
                ouvrant est l'absence de dormant en partie inf�rieure du cadre
                pour la porte.</span></td>
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Intervalles</span><span
                class="f_Textestd">: le nombre de champs affich�s dans cette
                zone d�pend du nombre de vantaux dans l'ouvrant. Rien n'est
                affich� s'il n'y a qu'un seul vantail; s'il y a deux vantaux,
                un seul champ est affich�; pour trois vantaux, deux champs, ...
                Ces champs contiennent l'�cart entre deux vantaux (si la valeur
                est positive) ou le recouvrement entre deux vantaux (si la
                valeur est n�gative).</span></td>
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
              <td><span style="font-weight: bold;">Section fixe: </span>Si
                cette case est coch�e, WinPro exclu le calcul des sections
                variables et recouvrements variables qui auraient pu �tre
                param�tr�. Ceci a pour effet d'acc�l�rer les calculs de mani�re
                significative.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="526"
                style="width: 526px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Remarque</span><span
                style="text-decoration: underline;">:</span></p>

                <p style="margin: 0px 0px 0px 13px;">Les sections variables
                doivent <span
                style="font-weight: bold; color: #ff0000;">imp�rativement
                </span>�tre param�tr�es dans la premi�re page formule du cadre
                concern�, sans quoi elles ne sont pas prises en compte !</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;">�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Recouvrement fixe</span><span
                class="f_Textestd">: </span>Si cette case est coch�e, WinPro
                exclu le calcul des sections variables et recouvrements
                variables qui auraient pu �tre param�tr�. Ceci a pour effet
                d'acc�l�rer les calculs de mani�re significative.</td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Battement
                fixe</span><span class="f_Textestd">: </span>Si cette case est
                coch�e, WinPro exclu le calcul des variations d'intervalles
                entre vantaux ainsi que le calcul des variations d'entraxe
                entre les vantaux qui auraient pu �tre param�tr�s dans la
                premi�re formule de Profil. Ceci a pour effet d'acc�l�rer les
                calculs de mani�re significative.</td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Vue en
                coupe de l'ouverture</span><span class="f_Textestd">: Cette
                section appara�t uniquement dans le cas de portes. Il contient
                4 champs faisant appel � un dessin Winpro que vous devez
                param�trer. Ce dessin d'ouverture sera alors ajout� au dessin
                de la porte. </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">Vous pouvez d�finir un
        dessin pour chaque sens d'ouverture (gauche - droite) et chaque type de
        vue (int�rieure - ext�rieure).</span><br>
        <span class="f_Textestd">Pour la cr�ation de ces dessins, seules les
        variables de configuration sont disponibles.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Exemple:</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 72px;"><img
        src="img/clip0143.jpg" width="229" height="507" border="0"
        alt="clip0143"></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
