<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Roller Shutter","Volet"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?varvolets.php"; }
else { parent.quicksync('a3.10.1'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Volet</title>
  <meta name="keywords"
  content="NumeroTablier,_VoletSeul,_HauteurCaisson,_CaissonDeduit,_NTabliers,_LargeurTablier,_CouleurCaisson,_CouleurCaissonInt,_CouleurTablier,_CouleurSousLame,_CouleurCoulisse,_RecouvrementCaisson,_CaissonDeduitAutorise,_CaissonNonDeduitAutorise">
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
        href="variablesconfiguration.php">Previous</a>  <a
        href="vardormants.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>The index number of the curtain computed is stored into variable :
        <span class="f_Variables">ShutterIndex</span></p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Variable</span></p>
              </td>
              <td width="394"
                style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">_RollerShutterOnly</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                style="font-family: 'Courier New'; color: #0000ff;">True()</span><span
                style="color: #000000;">for a roller shutter defined without a
                window </span></p>

                <p style="margin: 0px 0px 0px 11px;"><span
                style="font-family: 'Courier New'; color: #0000ff;">False()</span><span
                style="color: #000000;">for a roller shutter defined on a
                window.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">_BoxHeight</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">External height of the roller shutter's
                box (0 in case of no roller shutter).</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">_BoxHeightDeduced</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                style="font-family: 'Courier New'; color: #0000ff;">True()</span><span
                style="color: #000000;">if the box height is deduced from the
                total window's height</span></p>

                <p style="margin: 0px 0px 0px 11px;"><span
                style="font-family: 'Courier New'; color: #0000ff;">False()</span><span
                style="color: #000000;">otherwise.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">_NShutters</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Number of shutters in the same box (0
                if no roller shutter)</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-family: 'Courier New'; color: #0000ff;">_RollerShutterWidth</span><span
                class="f_Variables">[]</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                style="color: #000000;">Width of each shutter (0 if no shutter,
                or when the index is greater than </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_NShutters</span>)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 8px;"><span
                class="f_Variables">_ShutterBoxColour</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Outside or overall colour
                category for roller box</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 8px;"><span
                class="f_Variables">_ShutterBoxIntColour</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Inside colour category for
                roller box</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 8px;"><span
                class="f_Variables">_ShutterCurtainColour</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Outside or overall colour
                category for roller blades</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 8px;"><span
                class="f_Variables">_FinalBladeColour</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Colour category for final
                blade of the curtain</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 8px;"><span
                class="f_Variables">_ShutterRailColour</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Inside colour category for
                roller rails</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_BoxCanBeDeduced</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-size: 14pt;font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="color: #000000;">Holds 1 if the user is allowed to
                deduce the box height, 0 otherwise</span>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_BoxCannotBeDeduced</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-size: 14pt;font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="color: #000000;">Holds 1 if the user is not allowed to
                deduce the box height, 0 otherwise</span>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_ShutterWeight []</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="color: #000000;">Returns the weight of the required curtain (indexed onto variable <span class="f_Variables">ShutterIndex</span>). Global variable, 5 slots/curtains. <span style="color: #ff0000; ">For use with versions 9.1 and upper only.</span> See <a href="9_1_0_x.php">release note version 9.1.0</a> for more details.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_CurtainHandling []</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="color: #000000;">Return the handling position of the required curtain (indexed onto variable <span class="f_Variables">ShutterIndex</span>). Global variable, 5 slots/curtains. <span style="color: #ff0000; ">For use with versions 9.1 and upper only.</span> See <a href="9_1_0_x.php">release note version 9.1.0</a> for more details.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_CurtainDirection []</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="color: #000000;">Return the handling direction, left or right, of the required curtain (indexed onto variable <span class="f_Variables">ShutterIndex</span>). Global variable, 5 slots/curtains. <span style="color: #ff0000; ">For use with versions 9.1 and upper only.</span> See <a href="9_1_0_x.php">release note version 9.1.0</a> for more details.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_CurtainHeight []</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="color: #000000;">Return the height the required curtain including a potential wall height (indexed onto variable <span class="f_Variables">ShutterIndex</span>). Global variable, 5 slots/curtains. <span style="color: #ff0000; ">For use with versions 9.1 and upper only.</span> See <a href="9_1_0_x.php">release note version 9.1.0</a> for more details.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_ShutterBoxRalColour</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
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
				<p style="margin: 0px 0px 0px 0px;"><span
                style="color: #000000;"><span style="color: #ff0000; ">For use with versions 9.1 and upper only.</span> See <a href="9_1_0_x.php">release note version 9.1.0</a> for more details.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_ShutterBoxRalColourIns</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
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
				<p style="margin: 0px 0px 0px 0px;"><span
                style="color: #000000;"><span style="color: #ff0000; ">For use with versions 9.1 and upper only.</span> See <a href="9_1_0_x.php">release note version 9.1.0</a> for more details.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_ShutterCurtainRalColour</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="color: #000000;">For shutter curtain:</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">0 when box RAL is unchecked within an order.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">1 when box RAL is checked and a standard RAL is selected.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">2 when box RAL is checked and a non standard RAL is input.</span></p>
				<p style="margin: 0px 0px 0px 0px;"><span
                style="color: #000000;"><span style="color: #ff0000; ">For use with versions 9.1 and upper only.</span> See <a href="9_1_0_x.php">release note version 9.1.0</a> for more details.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_ShutterRailRalColour</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="color: #000000;">For shutter rail:</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">0 when box RAL is unchecked within an order.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">1 when box RAL is checked and a standard RAL is selected.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">2 when box RAL is checked and a non standard RAL is input.</span></p>
				<p style="margin: 0px 0px 0px 0px;"><span
                style="color: #000000;"><span style="color: #ff0000; ">For use with versions 9.1 and upper only.</span> See <a href="9_1_0_x.php">release note version 9.1.0</a> for more details.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FinalBladeRalColour</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="color: #000000;">For shutter final blade:</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">0 when box RAL is unchecked within an order.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">1 when box RAL is checked and a standard RAL is selected.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">2 when box RAL is checked and a non standard RAL is input.</span></p>
				<p style="margin: 0px 0px 0px 0px;"><span
                style="color: #000000;"><span style="color: #ff0000; ">For use with versions 9.1 and upper only.</span> See <a href="9_1_0_x.php">release note version 9.1.0</a> for more details.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>

        <p style="text-align: center;"><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>

        <p style="text-align: center;"><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>

        <p style="text-align: center;"><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>
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
      <td align="left"><p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>

        <p> </p>

        <p>Le numéro du tablier en cours de calcul est stocké dans la variable
        : <span class="f_Variables">NumeroTablier</span></p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Variable</span></p>
              </td>
              <td width="394"
                style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 8px;"><span
                class="f_Variables">_VoletSeul</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Vaut:</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Vrai()</span> s'il s'agit d'un volet seul,
                </p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">Faux()</span> si le volet est associé à un
                châssis</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 8px;"><span
                class="f_Variables">_HauteurCaisson</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Hauteur de caisson effective
                (vaut <span class="f_Variables">0</span> si pas de volet)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 8px;"><span
                class="f_Variables">_CaissonDeduit</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Vaut:</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">1</span> si le caisson est déduit de la
                hauteur saisie</p>

                <p style="margin: 0px 0px 0px 27px;"><span
                class="f_Variables">0</span> si la hauteur du caisson s'ajoute
                à la hauteur saisie</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 8px;"><span
                class="f_Variables">_NTabliers</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"> </p>

                <p style="margin: 0px 0px 0px 13px;">Nombre de tabliers
                constituant le volet (vaut <span class="f_Variables">0</span>
                si pas de volet)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 8px;"><span
                class="f_Variables">_LargeurTablier[]</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Largeur de chaque tablier
                (vaut <span class="f_Variables">0</span> si pas de volet, ou si
                l'indice est supérieur à <span
                class="f_Variables">_NTabliers</span>)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 8px;"><span
                class="f_Variables">_CouleurCaisson</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Catégorie de la couleur du
                caisson</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 8px;"><span
                class="f_Variables">_CouleurCaissonInt</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Catégorie de la couleur
                intérieure du caisson</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 8px;"><span
                class="f_Variables">_CouleurTablier</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Catégorie de la couleur du
                tablier</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 8px;"><span
                class="f_Variables">_CouleurSousLame</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Catégorie de la couleur de la
                sous-lame du tablier</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 8px;"><span
                class="f_Variables">_CouleurCoulisse</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Catégorie de la couleur des
                coulisses</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_CaissonDeduitAutorise</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="font-size: 14pt;font-family: 'Wingdings'; color: #ff0000;">&hArr;</span>Indique
                si l'utilisateur peut choisir de déduire le caisson à la
                saisie.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_CaissonNonDeduitAutorise</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="font-size: 14pt;font-family: 'Wingdings'; color: #ff0000;">&hArr;</span>Indique
                si l'utilisateur peut choisir de ne pas déduire le caisson à la
                saisie.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_PoidsTablier []</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="color: #000000;">Retourne le poids du tablier spécifié (indexée sur la variable <span class="f_Variables">NumeroTablier</span>). Variable globale, 5 positions/tabliers. <span style="color: #ff0000; ">Pour les versions 9.1 et supérieure seulement.</span> Voir <a href="9_1_0_x.php">note de version 9.1.0</a> pour plus de détails.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_SortieTablier []</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="color: #000000;">Retourne le sens de manœuvre, gauche ou droite, du tablier spécifié (indexée sur la variable <span class="f_Variables">NumeroTablier</span>). Variable globale, 5 positions/tabliers. <span style="color: #ff0000; ">Pour les versions 9.1 et supérieure seulement.</span> Voir <a href="9_1_0_x.php">note de version 9.1.0</a> pour plus de détails.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_Senstablier []</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="color: #000000;">Retourne le sens de manœuvre, gauche ou droite, du tablier spécifié (indexée sur la variable <span class="f_Variables">NumeroTablier</span>). Variable globale, 5 positions/tabliers. <span style="color: #ff0000; ">Pour les versions 9.1 et supérieure seulement.</span> Voir <a href="9_1_0_x.php">note de version 9.1.0</a> pour plus de détails.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_HauteurTablier []</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="color: #000000;">Retourne la hauteur du tablier spécifié, en incluant la hauteur d’un muret potentiel (indexée sur la variable <span class="f_Variables">NumeroTablier</span>). Variable globale, 5 positions/tabliers. <span style="color: #ff0000; ">Pour les versions 9.1 et supérieure seulement.</span> Voir <a href="9_1_0_x.php">note de version 9.1.0</a> pour plus de détails.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_CouleurCaissonRal</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
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
                style="color: #000000;">2 lorsque la case RAL est cochée et qu’une teinte RAL hors standard est saisie dans le devis <span style="text-decoration: underline;">pour la teinte extérieure.</span></p>
				<p style="margin: 0px 0px 0px 0px;"><span style="color: #ff0000; ">Pour les versions 9.1 et supérieure seulement.</span> Voir <a href="9_1_0_x.php">note de version 9.1.0</a> pour plus de détails.</span></span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_CouleurCaissonRalInt</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
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
                style="color: #000000;">2 lorsque la case RAL est cochée et qu’une teinte RAL hors standard est saisie dans le devis <span style="text-decoration: underline;">pour la teinte intérieure.</span></p>
				<p style="margin: 0px 0px 0px 0px;"><span style="color: #ff0000; ">Pour les versions 9.1 et supérieure seulement.</span> Voir <a href="9_1_0_x.php">note de version 9.1.0</a> pour plus de détails.</span></span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_CouleurTablierRal</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="color: #000000;">Pour le tablier de volet:</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">0 lorsque la case RAL est décochée dans le devis.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">1 lorsque la case RAL est cochée et qu’une teinte RAL standard est sélectionnée.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">2 lorsque la case RAL est cochée et qu’une teinte RAL hors standard est saisie dans le devis.</span></p>
				<p style="margin: 0px 0px 0px 0px;"><span style="color: #ff0000; ">Pour les versions 9.1 et supérieure seulement.</span> Voir <a href="9_1_0_x.php">note de version 9.1.0</a> pour plus de détails.</span></span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_CouleurCoulisseRal</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="color: #000000;">Pour la coulisse de volet:</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">0 lorsque la case RAL est décochée dans le devis.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">1 lorsque la case RAL est cochée et qu’une teinte RAL standard est sélectionnée.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">2 lorsque la case RAL est cochée et qu’une teinte RAL hors standard est saisie dans le devis.</span></p>
				<p style="margin: 0px 0px 0px 0px;"><span style="color: #ff0000; ">Pour les versions 9.1 et supérieure seulement.</span> Voir <a href="9_1_0_x.php">note de version 9.1.0</a> pour plus de détails.</span></span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="209"
              style="width: 209px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_CouleurSousLameRal</span></p>
              </td>
              <td valign="top" width="394"
              style="width: 394px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="color: #000000;">Pour la sous-lame de volet:</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">0 lorsque la case RAL est décochée dans le devis.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">1 lorsque la case RAL est cochée et qu’une teinte RAL standard est sélectionnée.</span></p>
				<p style="margin: 0px 0px 0px 53px;"><span
                style="color: #000000;">2 lorsque la case RAL est cochée et qu’une teinte RAL hors standard est saisie dans le devis.</span></p>
				<p style="margin: 0px 0px 0px 0px;"><span style="color: #ff0000; ">Pour les versions 9.1 et supérieure seulement.</span> Voir <a href="9_1_0_x.php">note de version 9.1.0</a> pour plus de détails.</span></span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>

        <p style="text-align: center;"><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>

        <p style="text-align: center;"><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>

        <p style="text-align: center;"><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
