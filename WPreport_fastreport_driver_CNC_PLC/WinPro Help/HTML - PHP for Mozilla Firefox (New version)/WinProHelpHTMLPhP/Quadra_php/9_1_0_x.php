<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>	
<!DOCTYPE php PUBLIC "-//W3C//DTD php 4.01 Transitional//EN">  
<html>
<head>
  <meta http-equiv="content-type" content="text/php; charset=iso-8859-1">
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["9.1.0.x","9.1.0.x","9.1.0.x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?9_1_0_x.php"; }
else { parent.quicksync('a11.30.1'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>9.1.0.x</title>
  <link href="default.css" rel="stylesheet" type="text/css">
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
        href="notes_de_versions.php">Previous</a>  <a href="9_0_0_x.php">Next</a>
        </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
     <tr valign="top">
      <td align="left"><p class="p_Comment"><span class="f_Winproini"
        style="font-size: 8pt;">* Not compatible with version 7.2, except when mentionned</span></p>

        <p style="text-align: center;"><span class="f_Comment"
        style="font-size: 8pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                9.1.0.042</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">22/07/2013</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Modified
                tables</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Created
                tables</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">None</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">None</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Solar factor and light transmission values printing :</span> The following key (Integer format) 
		of settings table allows to print or not the solar factor and light transmission values for a glass unit onto customer documents.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-weight: bold;">[Customer order]</span></p>

        <div
        style="margin: 0px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="" border="0" cellpadding="0" cellspacing="0">
          <tbody>
            <tr align="left" valign="top">
              <td style="width: 237px;" width="237"><p
                style="margin: 0px 23px 0px 32px;"><span
                class="f_Winproini">No printing solar factor</span></p>
              </td>
              <td style="width: 837px;" width="837">
                <div
                style="margin: 0px; padding: 0px; text-align: left; text-indent: 0px;">

                <table style="line-height: normal;" border="0" cellpadding="0"
                cellspacing="0">
                  <tbody>
                    <tr valign="baseline">
                      <td>= 0 -&gt; solar factor and light transmission printed onto customer documents (default value)</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr align="left" valign="top">
              <td style="width: 237px;" width="237"><br>
              </td>
              <td style="width: 837px;" width="837">
                <div
                style="margin: 0px; padding: 0px; text-align: left; text-indent: 0px;">

                <table style="line-height: normal;" border="0" cellpadding="0"
                cellspacing="0">
                  <tbody>
                    <tr valign="baseline">
                      <td>= 1 -&gt; solar factor and light transmission NOT printed onto customer documents</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span class="f_Comment"
        style="font-size: 12pt;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0975eng.jpg" width="944" height="332" border="0"
        alt="clip0975eng"></p>

        <p style="text-align: center;"><span class="f_Comment"
        style="font-size: 12pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                9.1.0.000</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">17/06/2013</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Modified
                tables</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Created
                tables</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Caisson, Tablier, Couliise, Detail2, ClrCmp</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">ClrCaissonDormant, ClrTablierDormant, ClrCoulisseDormant, ClrSousLameDormant</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

		<p class="p_Comment"><span class="f_TitreReleaseNote">Enhanced incorporated roller shutter management:</span> The roller shutter management has been reviewed to add more
		flexibility for colour management and roller shutter creation within the customer order, in case the roller shutter is incorporated to a window. The main features
		introduced are:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Standard and non standard RAL colour management, as it exists for windows currently.</td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Bicoloration management for roller shutter boxes.</td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Automatic colour matching between roller shutter colour and outer frame colour.</td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Multiple curtains configuration enhanced with different curtain heights for the same design, with automatic number of blades computed and distinct handling
			  direction (left or right) and position (0 to 5) for each curtain.</td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>A new tab for curtain axis computation within curtain record.</td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>A new set of variables suiting the above mentioned features, to be used into roller shutter formulas.</td>
            </tr>
          </tbody>
        </table>
        </div>
	
        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0930eng.jpg"
        width="814" height="388" border="0" alt="clip0930eng"></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0931eng.jpg"
        width="814" height="594" border="0" alt="clip0931eng"></p>
		
        <p> </p>

		<p class="p_Comment"><span style="font-size: 14pt; font-weight: bold;">Main changes compared to previous versions</span></p>

        <p> </p>

		<p class="p_Comment"><span style="text-decoration: underline;">ROLLER SHUTTER BOX</span></p>
		
        <p> </p>

		<p class="p_Comment">The box record is completed with new possibilities:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 20pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>For default values into <span style="font-style: italic;">Description</span> page, a new option is added to ask the program to follow by default the outer
			  frame colour. In case of stand alone roller shutter, the first allowed colour is selected by default, into alphanumerical sequence. Moreover this option won’t be
			  displayed into the box combo list into the order.</td>
            </tr>
          </tbody>
        </table>
        </div>

  	    <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0932eng.jpg"
        width="532" height="164" border="0" alt="clip0932eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 20pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>The roller shutter handling position dialog has been removed from the box record, and transferred to the curtain record for a better consistency. The user may
			  now define a handling position for each curtain, instead of a unique position linked to the shutter box as previously. Refer to below paragraph about curtain
			  detail.</td>
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
              <td width="24"><span
                style="font-size: 20pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>A new <span style="font-style: italic;">Colours</span> tab is added to select the appropriate colour list (standard and/or RAL colour) to be allowed for this
			  box. You may also here decide if inside and outside colours have to be different or not, enable RAL colour management, decide to limit or not the list of RAL
			  colour by side for this box, similarly to the same feature from a system record.</td>
            </tr>
          </tbody>
        </table>
        </div>

  	    <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0933eng.jpg"
        width="761" height="414" border="0" alt="clip0933eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 20pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>New <span style="font-style: italic;">Frame colour matching</span> tab added, allowing defining a match between the outer frame colours and the
			  box colours to be used, by side if colours are different. One box colour should correspond to one or more outer frame colour.</td>
            </tr>
          </tbody>
        </table>
        </div>

  	    <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
              style="width: 605px; height: 45px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; color: #000000; text-decoration: underline;">Attention!</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">A logical set up excludes a link between several box colours and a single outer frame colour. Please take a particular care with 
				this point.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

  	    <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0934eng.jpg"
        width="469" height="459" border="0" alt="clip0934eng"></p>
		
        <p> </p>

		<p class="p_Comment"><span style="text-decoration: underline;">ROLLER SHUTTER CURTAIN</span></p>
		
        <p> </p>

		<p class="p_Comment">The curtain record is also modified, as follows:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 20pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>The roller shutter handling position dialog has been removed from the box record, and transferred to the curtain record for a better consistency, below 
			  the list of allowed shutter rails. This is done to be able to set a distinct handling position for each curtain, distinctly.</td>
            </tr>
          </tbody>
        </table>
        </div>

  	    <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0935eng.jpg"
        width="262" height="374" border="0" alt="clip0935eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 20pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>A <span style="font-style: italic;">Colours</span> tab is added to select the appropriate colour list (standard or RAL colour) to be allowed. This tab 
			  is divided into two sections:</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 12pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #05050505;">&rArr;</span></td>
              <td>Into the shutter curtain section, the user may select the colour list allowed (RAL and/or standard), decide if outer frame colour and/or box colour are
			  available into the shutter curtain list of colour, enable the RAL management, and define if the list of RAL colours should be limited into the combo list of
			  curtain colours, as for a system record.</td>
            </tr>
          </tbody>
        </table>
        </div>

  	    <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0936eng.jpg"
        width="733" height="284" border="0" alt="clip0936eng"></p>
		
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 12pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #05050505;">&rArr;</span></td>
              <td>For the final lath section, similar options are available as for shutter curtains section, with also the ability to allow the curtain colour to be followed
			  by the final lath. You may moreover fully list the colours allowed for box, curtain or even the rail into the final lath colour combo. Or else, the user may
			  choose the list of colours manually using the “Colour set up” checkbox. In that case the list of allowed and RAL colours are ungreyed. </td>
            </tr>
          </tbody>
        </table>
        </div>

  	    <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0937eng.jpg"
        width="803" height="311" border="0" alt="clip0937eng"></p>
		
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 20pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>New <span style="font-style: italic;">Curtain-frame colour matching</span> tab added, allowing defining a match between the outer frame colours and the curtain
			  colours to be used as for the shutter box, except that sides are not separated here. The tab is greyed when option “Allow frame colour” is disabled into the shutter curtain section.</td>
            </tr>
          </tbody>
        </table>
        </div>

  	    <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0938eng.jpg"
        width="561" height="340" border="0" alt="clip0938eng"></p>

  	    <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
              style="width: 605px; height: 45px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; color: #000000; text-decoration: underline;">Attention!</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">A logical set up excludes a link between several curtain colours and a single outer frame colour. Please take a particular care with 
				this point.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
		
  	    <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 20pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>New <span style="font-style: italic;">Final lath-frame colour matching</span> tab added, allowing definition of a match between the outer frame colours and
			  the final lath colours to be used, as the previous tab. It is greyed when option “Allow frame colour” is disabled into the final lath section.</td>
            </tr>
          </tbody>
        </table>
        </div>

  	    <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0939eng.jpg"
        width="544" height="338" border="0" alt="clip0939eng"></p>

  	    <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
              style="width: 605px; height: 45px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; color: #000000; text-decoration: underline;">Attention!</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">A logical set up excludes a link between several final blade colours and a single outer frame colour. Please take a particular care with 
				this point.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

  	    <p> </p>
		
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 20pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>New <span style="font-style: italic;">Axis computation</span> tab added, affording the ability to define by rule the curtain height, by programming the rolled dimensions, as defined into <span style="font-style: italic;">Description</span> tab, through a
			  set of new variables detailed below.</td>
            </tr>
          </tbody>
        </table>
        </div>

  	    <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0940eng.jpg"
        width="1031" height="327" border="0" alt="clip0940eng"></p>
		
        <p> </p>

		<p class="p_Comment"><span style="text-decoration: underline;">ROLLER SHUTTER RAIL</span></p>
		
        <p> </p>

		<p class="p_Comment">The rail record is finally enhanced with the following features:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 20pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>A new <span style="font-style: italic;">Colours</span> tab is added to select the appropriate colour list (standard and/or RAL colour) to be allowed for this rail. You may decide for
			  a rail if it is allowed to follow the outer frame, box or even curtain colour, as well as you can enable RAL colour management, decide to limit or not the list of RAL colours for this
			  rail, similarly to the same feature into a system record.</td>
            </tr>
          </tbody>
        </table>
        </div>

  	    <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0941eng.jpg"
        width="677" height="369" border="0" alt="clip0941eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 20pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>New <span style="font-style: italic;">Frame colour matching</span> tab added to make the outer frame colours suit to a rail colour, as for the shutter box or curtain. The tab
			  is greyed when option “Allow frame colour” is disabled. Note that the tab is unavailable for a double rail (box checked into <span style="font-style: italic;">Description</span> tab), 
			  as the program will consider all rails needed with the same colour, the one defined for lateral rails.</td>
            </tr>
          </tbody>
        </table>
        </div>

  	    <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
              style="width: 605px; height: 45px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; color: #000000; text-decoration: underline;">Attention!</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">A logical set up excludes a link between several rail colours and a single outer frame colour. Please take a particular care with 
				this point.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
		
  	    <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0942eng.jpg"
        width="440" height="351" border="0" alt="clip0942eng"></p>

        <p> </p>

		<p class="p_Comment"><span style="text-decoration: underline;">NEW SET OF VARIABLES</span></p>
		
        <p> </p>

		<p class="p_Comment">A new set of variables is created to manage with the new functionalities detailed above, either global variables (indexed onto 
		<span class="f_Variables">ShutterIndex</span> or not), or local to Axis computation tab of the roller shutter curtain. See detail below:</p>


  	    <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Variable</span></p>
              </td>
              <td width="700"
                style="width: 700px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: left; margin: 0px 0px 0px 13px;"><span
                class="f_Variables">_ShutterWeight []</span></p>
              </td>
              <td valign="top" width="700"
              style="width: 700px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Returns the weight of the required curtain (indexed onto variable <span class="f_Variables">ShutterIndex</span>). Global variable, 5 slots/curtains.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: left; margin: 0px 0px 0px 13px;"><span
                class="f_Variables">_CurtainHandling []</span></p>
              </td>
              <td valign="top" width="700"
              style="width: 700px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Return the handling position of the required curtain (indexed onto variable <span class="f_Variables">ShutterIndex</span>). Global variable, 
				5 slots/curtains.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: left; margin: 0px 0px 0px 13px;"><span
                class="f_Variables">_CurtainDirection []</span></p>
              </td>
              <td valign="top" width="700"
              style="width: 700px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Return the handling direction, left or right, of the required curtain (indexed onto variable <span class="f_Variables">ShutterIndex</span>). Global variable, 
				5 slots/curtains.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: left; margin: 0px 0px 0px 13px;"><span
                class="f_Variables">_CurtainHeight []</span></p>
              </td>
              <td valign="top" width="700"
              style="width: 700px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Return the height the required curtain including a potential wall height (indexed onto variable <span class="f_Variables">ShutterIndex</span>). Global variable, 
				5 slots/curtains.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: left; margin: 0px 0px 0px 13px;"><span
                class="f_Variables">RolledHeight1 to RolledHeight9</span></p>
              </td>
              <td valign="top" width="700"
              style="width: 700px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Allow to redefine the rolled height of a curtain in order to fetch the corresponding rolled diameter. Variable local to the curtain, used within 
				<span style="font-style: italic;">Axis computation</span> tab.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: left; margin: 0px 0px 0px 13px;"><span
                class="f_Variables">_ShutterBoxRalColour</span></p>
              </td>
              <td valign="top" width="700"
              style="width: 700px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">For shutter box, when box <span style="color: #ff9000;">“Set in/outside colour distinctly”</span> is unchecked:</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">0 when box RAL is unchecked within an order.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">1 when box RAL is checked and a standard RAL is selected.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">2 when box RAL is checked and a non standard RAL is input.</span></p>
				<p style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">For shutter box, when box <span style="color: #ff9000;">“Set in/outside colour distinctly”</span> is checked:</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">0 when box RAL is unchecked within an order <span style="text-decoration: underline;">for the outside.</span></span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">1 when box RAL is checked and a standard RAL is selected <span style="text-decoration: underline;">for the outside.</span>.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">2 when box RAL is checked and a non standard RAL is input <span style="text-decoration: underline;">for the outside.</span>.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: left; margin: 0px 0px 0px 13px;"><span
                class="f_Variables">_ShutterBoxRalColourIns</span></p>
              </td>
              <td valign="top" width="700"
              style="width: 700px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">For shutter box, when box <span style="color: #ff9000;">“Set in/outside colour distinctly”</span> is unchecked:</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">0 when box RAL is unchecked within an order <span style="text-decoration: underline;">for the inside box colour</span>.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">1 when box RAL is checked and a standard RAL is selected <span style="text-decoration: underline;">for the inside box colour</span>..</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">2 when box RAL is checked and a non standard RAL is input <span style="text-decoration: underline;">for the inside box colour</span>..</span></p>
				<p style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">For shutter box, when box <span style="color: #ff9000;">“Set in/outside colour distinctly”</span> is checked:</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">0 when box RAL is unchecked within an order <span style="text-decoration: underline;">for the inside box colour</span>.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">1 when box RAL is checked and a standard RAL is selected <span style="text-decoration: underline;">for the inside box colour</span>.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">2 when box RAL is checked and a non standard RAL is input <span style="text-decoration: underline;">for the inside box colour</span>.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: left; margin: 0px 0px 0px 13px;"><span
                class="f_Variables">_ShutterCurtainRalColour</span></p>
              </td>
              <td valign="top" width="700"
              style="width: 700px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">For shutter curtain:</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">0 when box RAL is unchecked within an order.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">1 when box RAL is checked and a standard RAL is selected.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">2 when box RAL is checked and a non standard RAL is input.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: left; margin: 0px 0px 0px 13px;"><span
                class="f_Variables">_ShutterRailRalColour</span></p>
              </td>
              <td valign="top" width="700"
              style="width: 700px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">For shutter rail:</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">0 when box RAL is unchecked within an order.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">1 when box RAL is checked and a standard RAL is selected.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">2 when box RAL is checked and a non standard RAL is input.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: left; margin: 0px 0px 0px 13px;"><span
                class="f_Variables">_FinalBladeRalColour</span></p>
              </td>
              <td valign="top" width="700"
              style="width: 700px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">For shutter final blade:</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">0 when box RAL is unchecked within an order.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">1 when box RAL is checked and a standard RAL is selected.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">2 when box RAL is checked and a non standard RAL is input.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <p> </p>

		<p class="p_Comment"><span class="f_TitreReleaseNote">Transom insertion using advanced mode:</span> This version of WinPro introduces a new way to insert a frame or sash transom within a window, using advanced features and a redesigned dialog to manage with oblic transoms mainly. Concerning transom computation and related components, glazings in particular, a standard data set up is fully compliant with this feature, as long as standard transom cases are already correctly managed.</p>

        <p> </p>

		<p class="p_Comment">A new <img src="img/clip0976fra.jpg" width="127" height="22" border="0" alt="clip0976fra"> checkbox is available among the transom insertion dialog, enabling a tab with the same name. The main features offered here are:</p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Compliant for all transoms, frame and sash, and even with couplors in case of assembled design, for rectangle shapes, trapeziums and bows also. Transoms inserted may now be horizontal, vertical AND oblic!</td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Using advanced mode, transoms are inserted into absolute value, and not one from another as previously.</td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Definition of a start point (<span style="color: #ff0000;">into red colour</span>, set using left click) and an end point (<span style="color: #00ff00;">into green colour</span>, set using right click), based onto a reference point (<span style="color: #ff0000;">4 highlighted for current start point and 4b for base reference start points available</span>, or else <span style="color: #00ff00;">4 highlighted for current end point and 4b for base reference end points available</span>), by manual input or by rule (<span style="color: #00ff00;">3</span> and <span style="color: #ff0000;">3</span>). An offset from a reference point may be defined using field <img src="img/clip0981fra.jpg" width="328" height="26" border="0" alt="clip0981fra">, or else the coordinates of the point may be defined straight using fields <img src="img/clip0982fra.jpg" width="326" height="24" border="0" alt="clip0982fra"> (W for Width, H for Height). The <img src="img/clip0981fra.jpg" width="328" height="26" border="0" alt="clip0981fra"> option will define the point from an existing reference point, and would allow to set an offset value, positive or negative, from this point, compliant for a straight segment as well as for a bowed one!</td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Definition of the reference point, for transom (point <span style="color: #00ff00;">1</span> / <span style="color: #ff0000;">1</span>, beneath transom, transom rebate, transom axis or above transom) and/or the outer frame (point <span style="color: #00ff00;">2</span> / <span style="color: #ff0000;">2</span>, beneath frame, frame rebate or above frame), for start point as well as for end point</td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Insert locally to the window in case of standard window, and globally considering the overall assmbly in case of coupled design (option <img src="img/clip0983fra.jpg" width="96" height="20" border="0" alt="clip0983fra">)</td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Definition of an angle as reference point for the transom axis (point 1), angle that may be momorized by the program from one facette to the others into a coupled design <img src="img/clip0984fra.jpg" width="265" height="54" border="0" alt="clip0984fra"></td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Feature for window drawing moves (point 2) or zooming (point 3) for a more user friendly insertion of transoms</td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0980fra.jpg"
        width="978" height="641" border="0" alt="clip0980fra"></p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0985fra.jpg"
        width="605" height="363" border="0" alt="clip0985fra"></p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0986fra.jpg"
        width="560" height="757" border="0" alt="clip0986fra"></p>
		
        <p> </p>

		<p class="p_Comment"><span class="f_TitreReleaseNote">Rotate shape feature:</span> A new button is available into <span style="font-style: italic;">Dimensions</span> page of the customer order, allowing a rotation of the current shape, into degrees.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0987eng.jpg"
        width="743" height="693" border="0" alt="clip0987eng"></p>

        <p> </p>
        <p> </p>
        <p> </p>
        <p> </p>
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
      <td align="left"><p class="p_Comment"><span class="f_Winproini"
        style="font-size: 8pt;">* Incompatible version 7.2, sauf si précisé</span></p>

        <p style="text-align: center;"><span class="f_Comment"
        style="font-size: 8pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                9.1.0.042</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">22/07/2013</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables modifiées</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables créées</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Impression du facteur solaire et transmission lumineuse sur les documents client :</span> La clef suivante (format Entier) 
		de la table settings permet d'imprimer ou non les valeurs de facteur solaire et transmission lumineuse d'un vitrage dans le détail du vitrage des documents client.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-weight: bold;">[Customer order]</span></p>

        <div
        style="margin: 0px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="" border="0" cellpadding="0" cellspacing="0">
          <tbody>
            <tr align="left" valign="top">
              <td style="width: 237px;" width="237"><p
                style="margin: 0px 23px 0px 32px;"><span
                class="f_Winproini">No printing solar factor</span></p>
              </td>
              <td style="width: 837px;" width="837">
                <div
                style="margin: 0px; padding: 0px; text-align: left; text-indent: 0px;">

                <table style="line-height: normal;" border="0" cellpadding="0"
                cellspacing="0">
                  <tbody>
                    <tr valign="baseline">
                      <td>= 0 -&gt; facteur solaire et transmission lumineuse imprimées sur les documents client (valeur par défaut)</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr align="left" valign="top">
              <td style="width: 237px;" width="237"><br>
              </td>
              <td style="width: 837px;" width="837">
                <div
                style="margin: 0px; padding: 0px; text-align: left; text-indent: 0px;">

                <table style="line-height: normal;" border="0" cellpadding="0"
                cellspacing="0">
                  <tbody>
                    <tr valign="baseline">
                      <td>= 1 -&gt; facteur solaire et transmission lumineuse NON imprimées sur les documents client</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span class="f_Comment"
        style="font-size: 12pt;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0975fra.jpg" width="953" height="303" border="0"
        alt="clip0975fra"></p>

        <p style="text-align: center;"><span class="f_Comment"
        style="font-size: 12pt;"> </span></p>

        <p style="text-align: center;"><span class="f_Comment"
        style="font-size: 8pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                9.1.0.000</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">17/06/2013</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables modifiées</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables créees</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Caisson, Tablier, Couliise, Detail2, ClrCmp</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">ClrCaissonDormant, ClrTablierDormant, ClrCoulisseDormant, ClrSousLameDormant</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

		<p class="p_Comment"><span class="f_TitreReleaseNote">Gestion avancée de volets roulants incorporés:</span> Les volets roulants ont été revus dans cette version 
		afin d’améliorer la gestion des couleurs et la création de volets roulants incorporés dans la saisie d’une commande. Les principales fonctionnalités introduites 
		sont détaillées ci-dessous:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Gestion des RAL standards et hors standards comme cela existe dans les systèmes de menuiseries.</td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Gestion de bi-coloration pour les caissons de volets roulants.</td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Correspondances automatiques de couleurs entre le volet roulant et le dormant de la fenêtre, pour faciliter la création de volets roulants intégrés.</td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Gestion de tabliers multiples améliorée, avec la possibilité de définir plusieurs hauteurs de tabliers dans le même caisson en une seule saisie, avec calcul
			  automatique du nombre de lames, une position (de 0 à 5) et un sens de manœuvre (gauche ou droite) spécifique pour chaque tablier.</td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Un nouvel onglet dédié au calcul d’axe dans la fiche tablier.</td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Une nouvelle série de variables pour accompagner les fonctionnalités mentionnées précédemment, à utiliser dans les formules de volets roulants.</td>
            </tr>
          </tbody>
        </table>
        </div>
	
        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0930fra.jpg"
        width="985" height="534" border="0" alt="clip0930fra"></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0931fra.jpg"
        width="964" height="828" border="0" alt="clip0931fra"></p>
		
        <p> </p>

		<p class="p_Comment"><span style="font-size: 14pt; font-weight: bold;">Principaux changements comparé aux versions précédentes</span></p>

        <p> </p>

		<p class="p_Comment"><span style="text-decoration: underline;">CAISSON DE VOLET ROULANT</span></p>
		
        <p> </p>

		<p class="p_Comment">La fiche caisson s’enrichit de nouvelles possibilités :</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 20pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Pour les valeurs par défaut dans l’onglet <span style="font-style: italic;">Description</span> du caisson, une nouvelle option est ajoutée pour demander au programme de récupérer par défaut la teinte du dormant pour le caisson. En cas de volet seul, c’est la première teinte autorisée dans l’ordre alphanumérique qui sera sélectionnée, et l’option ne sera plus proposée dans le combo de couleur du caisson en saisie.</td>
            </tr>
          </tbody>
        </table>
        </div>

  	    <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0932fra.jpg"
        width="572" height="188" border="0" alt="clip0932fra"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 20pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>La position de manœuvre des tabliers a été déplacée de la fiche caisson pour être transférée dans la fiche tablier, pour une meilleure cohérence dans le paramétrage comme la saisie. La position peut dés lors être distinguée pour chaque tablier, et non plus uniquement une seule position de manoeuvre par caisson. Voir ci-dessous le paragraphe concernant les nouveautés dans la fiche tablier.</td>
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
              <td width="24"><span
                style="font-size: 20pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Un nouvel onglet <span style="font-style: italic;">Couleurs </span> est disponible dans la fiche caisson, permettant de définir la liste des teintes autorisées (standard et/ou teinte RAL). On pourra aussi dorénavant décider si les teintes intérieures et extérieures pourront être définies séparément ou non, activer la gestion des RAL dans le caisson, et définir si on fonctionne sur base de teintes RAL limitées par face ou non comme cela existe déjà dans une fiche système pour une menuiserie.</td>
            </tr>
          </tbody>
        </table>
        </div>

  	    <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0933fra.jpg"
        width="760" height="398" border="0" alt="clip0933fra"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 20pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Nouvel onglet <span style="font-style: italic;">Correspondance couleurs dormant</span> ajouté, permettant de définir une correspondance automatique entre la couleur du dormant et celle du caisson, par face si les teintes sont distinctes. Une teinte de caisson doit correspondre à une ou plusieurs teintes de dormant.</td>
            </tr>
          </tbody>
        </table>
        </div>

  	    <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
              style="width: 605px; height: 45px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; color: #000000; text-decoration: underline;">Attention!</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Une configuration logique exclut la liaison de plusieurs teintes de caissons pour une teinte de dormant. Soyez-y particulièrement attentif.</span>
                       </p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

  	    <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0934fra.jpg"
        width="479" height="373" border="0" alt="clip0934fra"></p>
		
        <p> </p>

		<p class="p_Comment"><span style="text-decoration: underline;">TABLIER DE VOLET ROULANT</span></p>
		
        <p> </p>

		<p class="p_Comment">La fiche tablier a également été adaptée, comme suit:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 20pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>La position de manœuvre a été déplacée du caisson au tablier pour plus de cohérence, sous la liste des coulisses autorisées. Ceci permettra de définir une position et un sens de manœuvre distoinct par tablier, plutôt que par caisson comme précédemment.</td>
            </tr>
          </tbody>
        </table>
        </div>

  	    <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0935fra.jpg"
        width="301" height="377" border="0" alt="clip0935fra"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 20pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Un onglet <span style="font-style: italic;">Couleurs</span> est ajouté, permettant de sélectionner la liste de teintes appropriées (standard ou teinte RAL) à autoriser pour ce tablier. L’onglet se divise en deux parties :</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 12pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #05050505;">&rArr;</span></td>
              <td>Dans la section tablier, l’utilisateur pourra sélectionner la liste des teintes autorisées (RAL et/ou standard), décider si le tablier pourra suivre ou non la teinte du dormant ou du caisson de volet, activer la gestion des RAL, et définir si la liste des teintes RAL doit être limitée ou non dans le combo de liste des teintes de tablier, comme pour une fiche système.</td>
            </tr>
          </tbody>
        </table>
        </div>

  	    <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0936fra.jpg"
        width="813" height="295" border="0" alt="clip0936fra"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 12pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #05050505;">&rArr;</span></td>
              <td>Pour la section lame finale, les options sont similaires à la section tablier, avec en plus la possibilité d’autoriser la lame finale à suivre également la couleur du tablier automatiquement. Il est aussi possible de lister explicitement les teintes de caissons, de tabliers et même de coulisses pour la sous-lame. Ou encore, on pourra choisir manuellement la liste des couleurs à afficher dans le combo de couleur sous-lame, en utilisant la case “Définition des couleurs”. Dans ce cas de figure, la liste des teintes standard ainsi que la liste des teintes RAL sera accessible et dégrisée.</td>
            </tr>
          </tbody>
        </table>
        </div>

  	    <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0937fra.jpg"
        width="835" height="356" border="0" alt="clip0937fra"></p>
		
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 20pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Nouvel onglet <span style="font-style: italic;">Correspondance couleur tablier-dormant</span> ajouté, permettant de définir une correspondance automatique entre la teinte du dormant et celle du tablier comme dans la fiche caisson, sauf que les teintes intérieures et extérieures ne sont pas distinguées ici. L’onglet est grisé si l’option “Suivre couleur dormant” est désactivée dans la section tablier.</td>
            </tr>
          </tbody>
        </table>
        </div>

  	    <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0938fra.jpg"
        width="467" height="481" border="0" alt="clip0938fra"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 20pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Nouvel onglet <span style="font-style: italic;">Correspondance souslame-dormant</span> ajouté, pour définir une correspondance automatique entre la teinte de la sous-lame et celle du dormant, comme pour l’onglet précédent. L’onglet est grisé si l’option “Suivre couleur dormant” est désactivée dans la section sous-lame.</td>
            </tr>
          </tbody>
        </table>
        </div>

  	    <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0939fra.jpg"
        width="453" height="392" border="0" alt="clip0939fra"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 20pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Nouvel onglet <span style="font-style: italic;">Calcul d’axe</span> ajouté, permettant de redéfinir par formule les hauteurs d’enroulement d’un tablier, définis dans l'onglet <span style="font-style: italic;">Description</span>, afin de récupérer le diamètre d’enroulement, grâce à une série de variables locales détaillées plus bas.</td>
            </tr>
          </tbody>
        </table>
        </div>

  	    <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0940fra.jpg"
        width="1094" height="437" border="0" alt="clip0940fra"></p>
		
        <p> </p>

		<p class="p_Comment"><span style="text-decoration: underline;">COULISSE DE VOLET ROULANT</span></p>
		
        <p> </p>

		<p class="p_Comment">La fiche coulisse est également complétée avec les fonctionnalités suivantes:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 20pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Un nouvel onglet <span style="font-style: italic;">Couleurs</span> est ajouté afin de sélectionner les teintes appropriées (standard et/ou RAL), à autoriser pour cette coulisse. L’utilisateur pourra activer la possibilité pour la coulisse de suivre la couleur du dormant, du caisson ou du tablier. On pourra également activer la gestion des RAL, et décider ou non de limiter la saisie des RAL aux teintes autorisées, comme dans une fiche système.</td>
            </tr>
          </tbody>
        </table>
        </div>

  	    <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0941fra.jpg"
        width="654" height="349" border="0" alt="clip0941fra"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 20pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Nouvel onglet <span style="font-style: italic;">Correspondance couleur dormant</span> ajouté, pour faire correspondre automatiquement une teinte de coulisse à une teinte de dormant, comme dans le caisson et le tablier. L’onglet est désactivé si l’option “Suivre couleur dormant” est décochée. A noter que l’onglet est indisponible pour une coulisse double (case cochée dans l’onglet <span style="font-style: italic;">Description</span>), le programme considérant que toutes les coulisses ont la même teinte, celle définie pour les coulisses latérales.</td>
            </tr>
          </tbody>
        </table>
        </div>

  	    <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0942fra.jpg"
        width="418" height="345" border="0" alt="clip0942fra"></p>

        <p> </p>

		<p class="p_Comment"><span style="text-decoration: underline;">NOUVELLE SERIE DE VARIABLES</span></p>
		
        <p> </p>

		<p class="p_Comment">Une série de variables a été implémentée pour gérer les fonctionnalités décrites plus haut, soit variables globales (indexée sur <span class="f_Variables">NumeroTablier</span> ou non), soit locales à l’onglet Calcul d’axe du tablier de volet roulant. En voici la liste :</p>

  	    <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Variable</span></p>
              </td>
              <td width="700"
                style="width: 700px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: left; margin: 0px 0px 0px 13px;"><span
                class="f_Variables">_PoidsTablier []</span></p>
              </td>
              <td valign="top" width="700"
              style="width: 700px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Retourne le poids du tablier spécifié (indexée sur la variable <span class="f_Variables">NumeroTablier</span>). Variable globale, 5 positions/tabliers.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: left; margin: 0px 0px 0px 13px;"><span
                class="f_Variables">_SortieTablier []</span></p>
              </td>
              <td valign="top" width="700"
              style="width: 700px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Retourne la position de manœuvre du tablier spécifié (indexée sur la variable <span class="f_Variables">NumeroTablier</span>). Variable globale, 5 positions/tabliers.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: left; margin: 0px 0px 0px 13px;"><span
                class="f_Variables">_Senstablier []</span></p>
              </td>
              <td valign="top" width="700"
              style="width: 700px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Retourne le sens de manœuvre, gauche ou droite, du tablier spécifié (indexée sur la variable <span class="f_Variables">NumeroTablier</span>). Variable globale, 5 positions/tabliers.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: left; margin: 0px 0px 0px 13px;"><span
                class="f_Variables">_HauteurTablier []</span></p>
              </td>
              <td valign="top" width="700"
              style="width: 700px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Retourne la hauteur du tablier spécifié, en incluant la hauteur d’un muret potentiel (indexée sur la variable <span class="f_Variables">NumeroTablier</span>). Variable globale, 5 positions/tabliers.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: left; margin: 0px 0px 0px 13px;"><span
                class="f_Variables">HauteurEnroulement1 à HauteurEnroulement9</span></p>
              </td>
              <td valign="top" width="700"
              style="width: 700px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Permet de redéfinir par formule les hauteurs d’enroulement d’un tablier afin de récupérer le diamètre d’enroulement. Variable locale au tablier, utilisé dans l’onglet <span style="font-style: italic;">Calcul d’axe</span>.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: left; margin: 0px 0px 0px 13px;"><span
                class="f_Variables">_CouleurCaissonRal</span></p>
              </td>
              <td valign="top" width="700"
              style="width: 700px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Pour le caisson de volet, case <span style="color: #ff9000;">“Définir teintes ext. et int. séparément”</span> décochée:</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">0 lorsque la case RAL est décochée dans le devis.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">1 lorsque la case RAL est cochée et qu’une teinte RAL standard est sélectionnée.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">2 lorsque la case RAL est cochée et qu’une teinte RAL hors standard est saisie dans le devis.</span></p>
				<p style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Pour le caisson de volet, case <span style="color: #ff9000;">“Définir teintes ext. et int. séparément”</span> cochée:</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">0 lorsque la case RAL est décochée dans le devis <span style="text-decoration: underline;">pour la teinte extérieure.</span></span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">1 lorsque la case RAL est cochée et qu’une teinte RAL standard est sélectionnée <span style="text-decoration: underline;">pour la teinte extérieure.</span>.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">2 lorsque la case RAL est cochée et qu’une teinte RAL hors standard est saisie dans le devis <span style="text-decoration: underline;">pour la teinte extérieure.</span></span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: left; margin: 0px 0px 0px 13px;"><span
                class="f_Variables">_CouleurCaissonRalInt</span></p>
              </td>
              <td valign="top" width="700"
              style="width: 700px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Pour le caisson de volet, case <span style="color: #ff9000;">“Définir teintes ext. et int. séparément”</span> décochée:</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">0 lorsque la case RAL est décochée dans le devis <span style="text-decoration: underline;">pour la teinte intérieure.</span></span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">1 lorsque la case RAL est cochée et qu’une teinte RAL standard est sélectionnée <span style="text-decoration: underline;">pour la teinte intérieure.</span></span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">2 lorsque la case RAL est cochée et qu’une teinte RAL hors standard est saisie dans le devis<span style="text-decoration: underline;">pour la teinte intérieure.</span></span></p>
				<p style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Pour le caisson de volet, case <span style="color: #ff9000;">“Définir teintes ext. et int. séparément”</span> cochée:</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">0 lorsque la case RAL est décochée dans le devis <span style="text-decoration: underline;">pour la teinte intérieure.</span></span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">1 lorsque la case RAL est cochée et qu’une teinte RAL standard est sélectionnée <span style="text-decoration: underline;">pour la teinte intérieure.</span>.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">2 lorsque la case RAL est cochée et qu’une teinte RAL hors standard est saisie dans le devis <span style="text-decoration: underline;">pour la teinte intérieure.</span></span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: left; margin: 0px 0px 0px 13px;"><span
                class="f_Variables">_CouleurTablierRal</span></p>
              </td>
              <td valign="top" width="700"
              style="width: 700px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Pour le tablier de volet:</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">0 lorsque la case RAL est décochée dans le devis.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">1 lorsque la case RAL est cochée et qu’une teinte RAL standard est sélectionnée.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">2 lorsque la case RAL est cochée et qu’une teinte RAL hors standard est saisie dans le devis.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: left; margin: 0px 0px 0px 13px;"><span
                class="f_Variables">_CouleurCoulisseRal</span></p>
              </td>
              <td valign="top" width="700"
              style="width: 700px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Pour la coulisse de volet:</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">0 lorsque la case RAL est décochée dans le devis.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">1 lorsque la case RAL est cochée et qu’une teinte RAL standard est sélectionnée.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">2 lorsque la case RAL est cochée et qu’une teinte RAL hors standard est saisie dans le devis.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: left; margin: 0px 0px 0px 13px;"><span
                class="f_Variables">_CouleurSousLameRal</span></p>
              </td>
              <td valign="top" width="700"
              style="width: 700px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Pour la sous-lame de volet:</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">0 lorsque la case RAL est décochée dans le devis.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">1 lorsque la case RAL est cochée et qu’une teinte RAL standard est sélectionnée.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">2 lorsque la case RAL est cochée et qu’une teinte RAL hors standard est saisie dans le devis.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <p> </p>

		<p class="p_Comment"><span class="f_TitreReleaseNote">Insertion de traverses en mode avancé:</span> Cette version de WinPro introduit une nouvelle méthode de saisie de traverses, 
		dormant ou ouvrant, avec des fonctionnalités avancées et un dialogue revu pour permettre la gestion de traverse obliques. Pour le calcul de ces traverses et des éléments liés, notamment les vitrages, un paramétrage standard est pleinement compatible avec cette fonctionnalité de saisie dans la commande, pour peu que le paramétrage existant soit fonctionnel sur les cas standards.</p>

        <p> </p>

		<p class="p_Comment">Une nouvelle case <img src="img/clip0976fra.jpg" width="127" height="22" border="0" alt="clip0976fra"> est disponible dans le dialogue de saisie de traverse, ainsi qu'un onglet du même nom. Les principales fonctionnalités sont:</p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Valable pour les traverses dormant, ouvrant et également pour les coupleurs en cas d'assemblages, sur des châssis en forme rectangle, trapèzes comme cintres. Les traverses saisies peuvent maintenant être horizontales, verticales ET obliques!</td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>En mode avancé, les traverses sont saisies en absolu et non plus les unes par rapport aux autres comme précedemment.</td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Saisie d'un point de départ (<span style="color: #ff0000;">en rouge</span>, défini par clic gauche) et d'un point d'arrivée (<span style="color: #00ff00;">en vert</span>, défini par clic droit), sur base de points de référence (<span style="color: #ff0000;">4 surligné pour le point de départ courant et 4b pour les points de départ de référence</span>, ou bien <span style="color: #00ff00;">4 surligné pour le point d'arrivée courant et 4b pour les points d'arrivée de référence</span>), par saisie manuelle ou par formule (<span style="color: #00ff00;">3</span> et <span style="color: #ff0000;">3</span>). On pourra définir un décalage par rapport à un des points de référence par l'option <img src="img/clip0981fra.jpg" width="328" height="26" border="0" alt="clip0981fra">, ou encore saisir directement les points x et y, soit en valeur soit par formule par l'option <img src="img/clip0982fra.jpg" width="326" height="24" border="0" alt="clip0982fra"> (W pour Largeur, H pour hauteur). L'option <img src="img/clip0981fra.jpg" width="328" height="26" border="0" alt="clip0981fra"> partira d'un point de référence existant, elle permettra de saisir une valeur de déplacement positive ou négative par rapport à ce point, et fonctionnera également sur un segment incliné ou même courbé!</td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Définition de l'axe de référence, sur la traverse (point <span style="color: #00ff00;">1</span> / <span style="color: #ff0000;">1</span>, sous traverse, feuillure traverse, axe traverse ou au dessus de la traverse) et/ou le dormant (point <span style="color: #00ff00;">2</span> / <span style="color: #ff0000;">2</span>, sous dormant, feuillure dormant ou dessus du dormant), pour le point de départ et/ou le point d'arrivée</td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Saisie locale au châssis en cas de châssis simple, et saisie globale par rapport à l'assemblage en entier en cas de châssis assemblé (option <img src="img/clip0983fra.jpg" width="96" height="20" border="0" alt="clip0983fra">)</td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Définition d'un angle par rapport auquel passera l'axe de la traverse (point 1), angle qui pourra être mémorisé d'une facette à l'autre dans un assemblage de châssis <img src="img/clip0984fra.jpg" width="265" height="54" border="0" alt="clip0984fra"></td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Fonctionnalités de déplacement du dessin de châssis (point 2) ou de zoom (point 3) pour une saisie plus conviviale</td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0980fra.jpg"
        width="978" height="641" border="0" alt="clip0980fra"></p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0985fra.jpg"
        width="605" height="363" border="0" alt="clip0985fra"></p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0986fra.jpg"
        width="560" height="757" border="0" alt="clip0986fra"></p>
		
        <p> </p>

		<p class="p_Comment"><span class="f_TitreReleaseNote">Nouvelle fonction Rotation Forme:</span> Un nouveau bouton est disponible dans l'onglet <span style="font-style: italic;">Dimensions</span> de la commande client, permettant de définit une valeur d'angle de rotation à appliquer sur la forme en cours de saisie, en degrés.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0987fra.jpg"
        width="770" height="683" border="0" alt="clip0987fra"></p>

        <p> </p>

        <p> </p>
        <p> </p>

      </td>
    </tr>
  </tbody>
</table>
</div>

<div class="NED">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left">
        <p> </p>

        <p> </p>

      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
