<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>	
<!DOCTYPE php PUBLIC "-//W3C//DTD php 4.01 Transitional//EN">  
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Setup sample code 9.0.0.x","Exemple Paramétrage 9.0.0.x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?9_0_0_xExample1.php"; }
else { parent.quicksync('a11.1.1.1'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>9.0.0.x</title>
  <meta name="keywords" content="- Elargissement globale">
  <meta http-equiv="Content-Type" content="text/php; charset=iso-8859-1">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <link type="text/css" href="default.css" rel="stylesheet">
</head>

<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;"
onload=" AddTitleAndLangFlags();highlight();">

<div id="hmpopupDiv"
style="visibility:hidden; position:absolute; z-index:1000;">
</div>

<table bgcolor="#ff8000" border="0" cellpadding="5" cellspacing="0"
width="100%">
  <tbody>
    <tr valign="middle">
      <td align="left"><p class="p_Heading1"><span id="titlepage"
        class="f_Heading1"></span></p>
        <br>
      </td>
      <td align="center">
        <div id="langflags">
        </div>
        <br>
      </td>
      <td align="right"><span style="font-size: 9pt"><a
        href="introduction.php">Top</a>  <a href="9_0_0_x.php">Previous</a>  <a
        href="8_2_0_x.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="text-align: center; font-size: 18pt; font-family: 'Times New Roman'; font-weight: bold; 
		text-decoration: underline;">Set up of an oblic transom through a composed panel, using shape instruction sets from version 9</span></p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="margin: 0px 0px 0px 24px; font-size: 14pt; font-family: 'Times New Roman'; font-weight: bold;">1
        - Introduction</span> </p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">This set up is designed to input horizontal oblic transom from a WinPro's composed panel.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">The aim is here to define and compute components for such a panel feature (profiles, articles, glazings and drawings).</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">For the below oblic transom, we need to compute outer frame profile also, but mainly beads, transom profile and glazings that
		will be input and compute from the composed panel.</p>

        <p class="p_Comment"> </p>

        <p style="text-align: center; text-indent: 45px;"><img
        src="img/clip0904eng.jpg" width="900" height="693" border="0"
        alt="clip0904eng"></p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">Finally we should obtain a bill of material ...</p>

        <p class="p_Comment"> </p>

        <p style="text-align: center; text-indent: 45px;"><img
        src="img/clip0905eng.jpg" width="666" height="472" border="0"
        alt="clip0905eng"></p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">... glazings included !</p>

        <p class="p_Comment"> </p>

        <p style="text-align: center; text-indent: 45px;"><img
        src="img/clip0906eng.jpg" width="716" height="392" border="0"
        alt="clip0906eng"></p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="margin: 0px 0px 0px 24px; font-size: 14pt; font-family: 'Times New Roman'; font-weight: bold;">2
        - Composed panel setup</span></p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="margin: 0px 0px 0px 48px; font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold; font-style: italic;">a
        - Questions</span> </p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">The implied composed panel for the set up of the oblic transom example will be set with a list of questions into the 
		appropriate tab.</p>

        <p class="p_Comment">4 questions to control the oblic transom feature :</p>

        <p class="p_Comment"> </p>

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="4000" style="width: 4000px;"><p
                style="margin: 0px 0px 0px 23px;"><span
                style="font-weight: bold; font-style: italic;">- Transom slope</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="4000" style="width: 4000px;"><p
                style="margin: 0px 0px 0px 23px;">Format : <span
                style="color: rgb(150, 20, 20);">Numéric</span> | Variable name : <span class="f_Variables">QCP_Slope</span> :
                Slope angle of the oblic transom, starting from the right side of the filling where the panel is used. The reference line crosses the
				horizontal line through the transom position (voir ci-dessous), starting from the right side. La valeur est comprise entre 135° 
				(horizontale) et 225° (forcée par paramétrage).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="4000" style="width: 4000px;"><p
                style="margin: 0px 0px 0px 23px;"><span
                style="font-weight: bold; font-style: italic;">- Inside transom section</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="4000" style="width: 4000px;"><p
                style="margin: 0px 0px 0px 23px;">Format : <span
                style="color: rgb(150, 20, 20);">Numeric</span> | Variable name : <span class="f_Variables">QCP_Section</span> :
                Oblic transom section (correspond to <span class="f_Variables">SmallerHeight</span> variable, meaning inside section excluding beads). 
				Value is set between 50 and 200mm (forced by rule).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="4000" style="width: 4000px;"><p
                style="margin: 0px 0px 0px 23px;"><span
                style="font-weight: bold; font-style: italic;">- Transom position</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="4000" style="width: 4000px;"><p
                style="margin: 0px 0px 0px 23px;">Format : <span
                style="color: rgb(150, 20, 20);">Numeric</span> | Variable name : <span class="f_Variables">QCP_Position</span> :
                Oblic transom position, from the filling right side, outside edge of the frame. Value between 200 and <span
                class="f_Variables">Height</span> - 200mm (forced by rule).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="4000" style="width: 4000px;"><p
                style="margin: 0px 0px 0px 23px;"><span
                style="font-weight: bold; font-style: italic;">- Panel clearance</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="4000" style="width: 4000px;"><p
                style="margin: 0px 0px 0px 23px;">Format : <span
                style="color: rgb(150, 20, 20);">Numeric</span> | Variable name : <span class="f_Variables">QCP_Clearance</span> :
                Panel clearance. This will affect glazings computation mainly. Value between -5 and 20mm (forced by rule).</p>
              </td>
            </tr>
          </tbody>
        </table>

        <p class="p_Comment"> </p>

        <p style="text-align: center; text-indent: 45px;"><img
        src="img/clip0907eng.jpg" width="728" height="290" border="0"
        alt="clip0907eng"></p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="margin: 0px 0px 0px 48px; font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold; font-style: italic;">b
        - Prerequired computation : </span><span style="font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold;">Glazings</span> <span 
		style="font-weight: bold; font-style: italic;">tab</span></p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">The biggest part of the required computation will be done at this stage tu be used into following tabs, including glazing 
		or panel consumation, profiles, articles and drawings.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment" style="text-decoration: underline;">STEP 1 : Prerequired computations</p>
		
        <p class="p_Comment"> </p>

        <p class="p_Comment">Below is the code used into the first FORMULA page of the <span style="font-style: italic;">
		Glazings</span> tab. You may follow easier this training documentation by copying and pasting this code into a composed panel formula, removing
		comments if needed :</p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># Temporary variable that will store the global shape of the panel</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpPanelGlobShapeNum := 0</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># This code fetches the outside shape of the panel, and stores it into </span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># the first available cell of the Shape array (see <a href="9_0_0_x.php">Basic notions</a>
		).</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># Refer to chapter about <a href="9_0_0_x.php">WinPro creation and modification functions for shapes</a> 
		</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># for more details on instruction <span class="f_Variables">LoadShape ()</span>.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># See <a href="9_0_0_x.php">List of predefined shapes variables</a> for details about variable
		<span class="f_Variables">_FillingShapeNum</span>, paragraph</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># related to shapes from fillings..</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># Result = <img src="img/clip0908.jpg" width="40" height="75" border="0"
        alt="clip0908">.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">LoadShape (- 1, _ FillingShapeNum,, FillingIndex)</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># Memorize the index of created shape into working variable</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># Voir les <a href="9_0_0_x.php">Basic notions</a> for the array 
		<span class="f_Variables">LastCreatedShapeNum []</span>, chapter about target shapes.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpPanelGlobShapeNum := LastCreatedShapeNum [1]</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># Debug (enable this line in case of need)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># This instruction allows to control values computed by WinPro for shape of index 
		<span class="f_Variables">TmpPanelGlobShapeNum</span>.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># See 
		<a href="9_0_0_x.php">WinPro creation and handling functions for shapes of boards</a>, 1 setting variant.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"></span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># For debug purpose only.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># <span style="font-weight: bold;">DebugShape (TmpPanelGlobShapeNum)</span></span></p>
		
        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># Temporary variables for sub shapes Left and Right when sit on cutting line (reference line),</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># the left corresponds to the bottom, and right correspond to top shape into the example, because the slope is 
		ranged between 90 and 270°.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># Seen from left to right.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpLeftPanelShapeNum:= 0</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpRightPanelShapeNum:= 0</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># STEP 1: sub shapes generation.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># The panel global shape <span class="f_Variables">TmpPanelGlobShapeNum</span> into 2 sub shapes.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># Both shapes are stored into the first available cells of the shape array (. -1, -1 .).</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># The global shape of the panel <span class="f_Variables">TmpPanelGlobShapeNum</span> is cut following a line</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># of angle defined by question « <Span style="font-weight: bold; color: 
		rgb(0, 0, 0);">Transom slope</span> » (variable <span class="f_Variables">QCP_Slope</span>).</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># The X coordinate of the line correspond to the filling width (., <span 
		class="f_Variables">_FillX [FillingIndex] + _FillWidth [FillingIndex]</span>, .).</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># The Y coordinate of the line correspond to the value of question « <Span style="font-weight: bold; color: 
		rgb(0, 0, 0);">Transom position</span> » (variable <span class="f_Variables">QCP_Position</span>), cumulated</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># to Y coordinate of the filling (., <span class="f_Variables">_FillY [FillingIndex]</span> + <span 
		class="f_Variables">QCP_Position</span>, .). The cutting line is offset by</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># half a transom inside section toward the bottom, corresponding to question « 
		<Span style="font-weight: bold; color: rgb(0, 0, 0);">Transom section</span> » (- <span class="f_Variables">QCP_Section</span> 
		/ 2).</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># See <a href="9_0_0_x.php">WinPro creation and modification functions for shapes</a>.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CutShape (TmpPanelGlobShapeNum, - 1, - 1, QCP_Slope, _FillX [FillingIndex] + _FillWidth [FillingIndex], _FillY 
		[FillingIndex] + QCP_Position, - QCP_Section / 2, 0)</span></p>

		<p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Storage of the index of both generated sub shape into temporary variables.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Result :</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># <span class="f_Variables">TmpLeftPanelShapeNum</span> = <img src="img/clip0909.jpg" width="40" 
		height="40" border="0" alt="clip0909">.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># <span class="f_Variables">TmpRightPanelShapeNum</span> = <img src="img/clip0910.jpg" width="40" 
		height="53" border="0" alt="clip0910">.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpLeftPanelShapeNum := LastCreatedShapeNum [1]</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpRightPanelShapeNum := LastCreatedShapeNum [2]</span></p>
		
        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Copy of the left (bottom) shape corresponding to final panel rebate value, clearance excluded and 
		beads included.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CopyShape (TmpLeftPanelShapeNum, - 1)</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Storage of shape number for final bottom panel <img src="img/clip0909.jpg" width="40" 
		height="40" border="0" alt="clip0909"> into a dedicated variable.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CutLeftPanelShapeNum:= LastCreatedShapeNum [1]</span></p>
		
        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Temporary variables for sub shapes from right panel (top, 
		<img src="img/clip0910.jpg" width="40" height="53" border="0" alt="clip0910">).</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># This top shape is cut again to generate the final top shape,</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># (beads included, clearance excluded), and the shape of the transom at the bottom.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpTransomPanelShapeNum := 0</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpFinalRightPanelShapeNum := 0</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Step 1: sub shapes generation :</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CutShape (TmpRightPanelShapeNum, - 1, - 1, QCP_Slope, _FillX [FillingIndex] + _FillWidth [FillingIndex], 
		_FillY [FillingIndex] + QCP_Position, + QCP_Section / 2, 0)</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Storage of shape number for generated sub shapes into dedicated variables.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Result :</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># <span class="f_Variables">TmpTransomPanelShapeNum</span> = <img src="img/clip0911.jpg" width="40" 
		height="24" border="0" alt="clip0911">. INSIDE section of transom beads excluded.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># <span class="f_Variables">TmpFinalRightPanelShapeNum</span> = <img src="img/clip0912.jpg" width="40" 
		height="43" border="0" alt="clip0912">.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpTransomPanelShapeNum := LastCreatedShapeNum [1]</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpFinalRightPanelShapeNum := LastCreatedShapeNum [2]</span></p>
		
        <p class="p_Comment"> </p>
 
        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Copy of the left shape (bottom) corresponding to the transom. ATTENTION the section</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># set here is considered inside and not overall outside ! Beads are then not included !</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># This values are not kept, used for fillings computation.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CopyShape (TmpTransomPanelShapeNum, - 1)</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Storage of shape index for the transom inside section (left/bottom) into a variable.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CutTransomPanelShapeNum := LastCreatedShapeNum [1]</span></p>
		
        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># An additionnal cut onto the global shape should be done for the transom as it is defined</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># from inside section and not overall outside section as required, this in order to correctly compute 
		glazings dimensions.</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Temporary variables for sub shapes, final transom computation, including rebate (20mm). </span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># 2 successive cuts needed from the global shape.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">BeadableDepth := 20</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpFinalTransomPanelShapeNum := 0</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CutFinalTransomPanelShapeNum := 0</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Step 1: sub shapes generation for final transom.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Same cut as previously except that beadable depth is included this time</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># (offset = - <span class="f_Variables">QCP_Section</span> / 2 - 
		<span class="f_Variables">BeadableDepth)</span>.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CutShape (TmpPanelGlobShapeNum, - 1, - 1, QCP_Slope, _FillX [FillingIndex] + _FillWidth [FillingIndex], _FillY 
		[FillingIndex] + QCP_Position, - QCP_Section / 2 - BeadableDepth, 0)</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Storage of sub shapes indexes into variables,</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># only the right (top) shape will be kept and cut again afterward.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># This shape corresponds to global panel shape - bottom shape underneath outside transom shape.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Result :</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># <span class="f_Variables">TmpFinalTransomPanelShapeNum</span> = <img src="img/clip0913.jpg" width="40" 
		height="53" border="0" alt="clip0913">.</span></p>
 
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpFinalTransomPanelShapeNum := LastCreatedShapeNum [2]</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># STEP 3: second cut onto the top remaining panel shape to obtain the transom.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CutShape (TmpFinalTransomPanelShapeNum, - 1, - 1, QCP_Slope, _FillX [FillingIndex] + _FillWidth [FillingIndex], 
		_FillY [FillingIndex] + QCP_Position, QCP_Section / 2 + BeadableDepth, 0)</span></p>
		
        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Storage of sub shapes indexes into variables, only the </span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># left (bottom) is kept at index 1 (first created), corresponding to the transom.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Result :</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># CutFinalTransomPanelShapeNum = <img src="img/clip0914.jpg" width="40" 
		height="28" border="0" alt="clip0914">.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CutFinalTransomPanelShapeNum:= LastCreatedShapeNum [1]</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># ######################################</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Final transom ready for cutting and drawing.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># ######################################</span></p>
		
        <p class="p_Comment"> </p>
		
        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Copy of the right shape (top) corresponding to final panel beads included without clearance.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># <img src="img/clip0912.jpg" width="40" height="43" border="0" alt="clip0912">.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CopyShape (TmpFinalRightPanelShapeNum, - 1)</span></p>

        <p class="p_Comment"> </p>
		
        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Storage of shape index for top final panel into variable.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CutFinalRightPanelShapeNum:= LastCreatedShapeNum [1]</span></p>

        <p class="p_Comment"> </p>
		
        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Shape computation for beads, left/bottom and right/top fillings.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpLeftBeadShapeNum := 0</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpRightBeadShapeNum := 0</span></p>
		
        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Copy of left (bottom) shape corresponding to the shape to bead at the bottom, clearance not deducted.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># <img src="img/clip0909.jpg" width="40" height="40" border="0" alt="clip0909">.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CopyShape (TmpLeftPanelShapeNum, - 1)</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Storage of the shape index to bead at the bottom into a variable.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpLeftBeadShapeNum := LastCreatedShapeNum [1]</span></p>
		
        <p class="p_Comment"> </p>


        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Copy of right (top) shape corresponding to the shape to bead on top, clearance not deducted.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># <img src="img/clip0912.jpg" width="40" height="43" border="0" alt="clip0912">.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CopyShape (TmpFinalRightPanelShapeNum, - 1)</span></p>
		
        <p class="p_Comment"> </p>
		
        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Storage of shape index for top beads into a variable.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpRightBeadShapeNum := LastCreatedShapeNum [1]</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Cutting variables for sub shapes of beads profiles, for the whole bead frame, top and bottom fillings.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Array variable for cutting angles, as set into <span 
		class="f_Variables">ShapeSubSideInfo 20/24</span> when <span class="f_Variables">GenerateProfilesIntoShape</span> with 14 settings is called.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CutBeadGlobalShapeNum : 0</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CutBeadGlobalShapeNum := 0</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle1BeadGlobalShapeNum : 0</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle1BeadGlobalShapeNum := 0</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle2BeadGlobalShapeNum : 0</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle2BeadGlobalShapeNum := 0</span></p>
		
        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Profiles computation for left (bottom) shape.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Extraction of global shape infos (here to know the number of sides).</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># See <a href="9_0_0_x.php">WinPro creation and modification functions for shapes of boards</a> about function 
		<span class="f_Variables">GetShapeInfo ()</span>.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">GetShapeInfo (TmpLeftBeadShapeNum,,,)</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Buffer variable for number of sides. See <a href="9_0_0_x.php">WinPro creation and modification functions for 
		shapes of boards</a> about value <span class="f_Variables">ShapeInfo ()</span>.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpBottomBeadNbSide := ShapeInfo [2]</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Extraction of global shape settings (here to know the number of sides).</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Loop onto all sides of the frame to bead.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">i := 0</span></p>


        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Repeat While i &lt; TmpBottomBeadNbSide</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span 
		style="color: rgb(0, 0, 128);"># Extraction of shape info by side/sub side.</span></p>
		
        <p style="margin: 0px 0px 0px 80px;"><span 
		style="color: rgb(0, 0, 128);"># Refer to <a href="9_0_0_x.php">WinPro creation and modification functions for shapes of boards</a> for detail 
		about function <span class="f_Variables">GenerateProfilesIntoShape ()</span>.</span></p>
		
        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">GenerateProfilesIntoShape (TmpLeftBeadShapeNum,, i, 0,,,, - 1, 0, 0, 20, 20, 20, 20)</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span 
		style="color: rgb(0, 0, 128);"># Loop onto all sub sides of the current side. See chapter <a href="9_0_0_x.php">WinPro creation and modification
		functions for shapes of boards</a> for detail about value <span class="f_Variables">ShapeSideInfo</span>.</span></p>

        <p class="p_Comment"> </p>
   
        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">j := 1</span></p>
      
        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Repeat While j &lt;= ShapeSideInfo [1]</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span 
		style="color: rgb(0, 0, 128);"># Dynamic resize for the array of profiles shapes and angles, one cell is added to current size.</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CutBeadGlobalShapeNum : GetArraySize (CutBeadGlobalShapeNum) + 1</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle1BeadGlobalShapeNum : GetArraySize (Angle1BeadGlobalShapeNum) + 1</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle2BeadGlobalShapeNum : GetArraySize (Angle2BeadGlobalShapeNum) + 1</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span 
		style="color: rgb(0, 0, 128);"># Values of the complete bead shape number, from the sub side of current side, will be stored into the last 
		cell created.</span></p>
		
        <p style="margin: 0px 0px 0px 94px;"><span 
		style="color: rgb(0, 0, 128);"># Index 4 is considered to obtain the complete shape (total profile length) of sub side 1 of current side.</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span 
		style="color: rgb(0, 0, 128);"># Index 8 is considered to obtain the complete shape (total profile length) of sub side 2 of current side.</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span 
		style="color: rgb(0, 0, 128);"># Index 4 + 4 * (sub side number - 1) (&lt;=&gt; 4 + (j-1)*4)</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span 
		style="color: rgb(0, 0, 128);"># is considered to obtain the complete shape (total profile length) of sub side j of current side 
		(current side = i).</span></p>
		
        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CutBeadGlobalShapeNum [GetArraySize (CutBeadGlobalShapeNum)] := LastCreatedShapeNum [4 + (j - 1) * 4]</span></p>
   
        <p style="margin: 0px 0px 0px 94px;"><span 
		style="color: rgb(0, 0, 128);"># Angles values are stored into array variables. See chapter <a href="9_0_0_x.php">WinPro creation and 
		modification functions for shapes of boards</a> about value <span class="f_Variables">ShapeSubSideInfo</span>.</span></p>
       
        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle1BeadGlobalShapeNum [GetArraySize (Angle1BeadGlobalShapeNum)] := ShapeSubSideInfo [24]</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle2BeadGlobalShapeNum [GetArraySize (Angle2BeadGlobalShapeNum)] := ShapeSubSideInfo [20]</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">j += 1</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">End Repeat</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">i += 1</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">End Repeat</span></p>
		
        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Profiles computation for left (top) shape. See upper comments.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">GetShapeInfo (TmpRightBeadShapeNum,,,)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpTopBeadNbSide := ShapeInfo [2]</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">i := 0</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Repeat While i &lt; TmpTopBeadNbSide</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">GenerateProfilesIntoShape (TmpRightBeadShapeNum,, i, 0,,,, - 1, 0, 0, 20, 20, 20, 20)</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">j := 1</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Repeat While j &lt;= ShapeSideInfo [1]</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CutBeadGlobalShapeNum : GetArraySize (CutBeadGlobalShapeNum) + 1</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle1BeadGlobalShapeNum : GetArraySize (Angle1BeadGlobalShapeNum) + 1</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle2BeadGlobalShapeNum : GetArraySize (Angle2BeadGlobalShapeNum) + 1</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CutBeadGlobalShapeNum [GetArraySize (CutBeadGlobalShapeNum)] := LastCreatedShapeNum [4 + (j - 1) * 4]</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle1BeadGlobalShapeNum [GetArraySize (Angle1BeadGlobalShapeNum)] := ShapeSubSideInfo [24]</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle2BeadGlobalShapeNum [GetArraySize (Angle2BeadGlobalShapeNum)] := ShapeSubSideInfo [20]</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">j += 1</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">End Repeat</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">i += 1</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">End Repeat</span></p>
		
        <p class="p_Comment"> </p>
      
        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Purge of the shape array, release cells from temporary variables. See chapter <a href="9_0_0_x.php">WinPro 
		creation and modification functions for shapes</a> for details about function <span class="f_Variables">DeleteShape ()</span>.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">DeleteShape (TmpPanelGlobShapeNum)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">DeleteShape (TmpLeftPanelShapeNum)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">DeleteShape (TmpRightPanelShapeNum)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">DeleteShape (TmpFinalRightPanelShapeNum)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">DeleteShape (TmpTransomPanelShapeNum)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">DeleteShape (TmpFinalTransomPanelShapeNum)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">DeleteShape (TmpLeftBeadShapeNum)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">DeleteShape (TmpRightBeadShapeNum) </span></p>
		
        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="margin: 0px 0px 0px 48px; font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold; font-style: italic;">c
        - Glazings computation : </span><span style="font-weight: bold;">Glazings</span> <span style="font-weight: bold; font-style: italic;">tab</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">Main calculation is done previously, into next rules within <span style="font-style: italic;">Glazings</span> tab, glass 
		units may be consumed as follows :</p>

        <p class="p_Comment"> </p>

        <p style="text-align: center; text-indent: 45px;"><img
        src="img/clip0915eng.jpg" width="633" height="284" border="0"
        alt="clip0915eng"></p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_Variables">CutLeftPanelShapeNum</span> = <img src="img/clip0912.jpg" width="40" 
		height="43" border="0" alt="clip0912">.</p>
		
        <p class="p_Comment"> </p>

        <p style="text-align: center; text-indent: 45px;"><img
        src="img/clip0916eng.jpg" width="616" height="284" border="0"
        alt="clip0916eng"></p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_Variables">CutFinalRightPanelShapeNum</span> = <img src="img/clip0909.jpg" width="40" 
		height="40" border="0" alt="clip0909">.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">See chapter <a href="9_0_0_x.php">WinPro creation and modification functions for shapes</a> concerning function 
		<span class="f_Variables">ShrinkShape ()</span>.</p>

        <p class="p_Comment">See chapter <a href="9_0_0_x.php">WinPro functions for cutting shape</a> for variable 
		<span class="f_Variables">ShapeNumberToCut</span>.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="margin: 0px 0px 0px 48px; font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold; font-style: italic;">d
        - Profiles cut for transom and beads : </span><span style="font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold;">Profiles</span> 
		<span style="font-weight: bold; font-style: italic;">tab</span></p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">Main calculation is done previously, into next rules within <span style="font-style: italic;">Profiles</span> tab, 
		profiles will be consumed.</p>
		
        <p class="p_Comment"> </p>

        <p class="p_Comment"><span style="font-weight: bold;">Transom cutting rule</span></p>
		
        <p class="p_Comment"> </p>

        <p style="text-align: center; text-indent: 45px;"><img
        src="img/clip0917eng.jpg" width="770" height="278" border="0"
        alt="clip0917eng"></p>
		
        <p class="p_Comment"> </p>

        <p class="p_Comment"><span style="font-weight: bold;">Beads cutting rule</span></p>
		
        <p class="p_Comment"> </p>

        <p style="text-align: center; text-indent: 45px;"><img
        src="img/clip0918eng.jpg" width="453" height="170" border="0"
        alt="clip0918eng"></p>
		
        <p class="p_Comment"> </p>
		
        <p class="p_Comment"><span style="margin: 0px 0px 0px 28px; font-style: italic; text-decoration: underline;">Corresponding code :</span></p>
		
        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Extraction of required data for cutting beads, loop on the whole profiles computed 
		(top and bottom fillings).</span></p>
  
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">i := 1</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Repeat While i &lt;= GetArraySize (CutBeadGlobalShapeNum)</span></p>
		
        <p style="margin: 0px 0px 0px 80px;"><span style="color: rgb(0, 0, 128);"># Counter for number of sides ("segment") for the current 
		bead profile.</span></p>
   
        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpBeadSideNum := 0</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="color: rgb(0, 0, 128);"># Extract data of the BEAD shape !</span></p>
   
        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">GetShapeInfo (CutBeadGlobalShapeNum [i],,,)</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="color: rgb(0, 0, 128);"># Stores the number of sides ("segment") of bead PROFILE itself.</span></p>
   
        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpBeadSideNum := ShapeInfo [2]</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="color: rgb(0, 0, 128);"># Loop onto sides of current profile, the aim is to retrieve the 
		side (edge, segment) of the bead profile with label 2000=outside.</span></p>
   
        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">j := 0</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Repeat While j &lt; TmpBeadSideNum</span></p>
		
        <p style="margin: 0px 0px 0px 94px;"><span style="color: rgb(0, 0, 128);"># Extract information of profile shape by side (segment, edge) 
		&lt;=&gt; variables <span class="f_Variables">ShapeInfo</span>, <span class="f_Variables">ShapeSideInfo</span>, 
		<span class="f_Variables">ShapeSubSideInfo</span>.</span></p>
   
        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">GetShapeInfo (CutBeadGlobalShapeNum [i],, j, 0)</span></p>
   
        <p style="margin: 0px 0px 0px 94px;"><span style="color: rgb(0, 0, 128);"># Here we look for the side (edge, segment) of the bead profile 
		with label 2000 = outside (<=> WinPro length).</span></p>
   
        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">If ShapeSubSideInfo [28] = 2000</span></p>

        <p style="margin: 0px 0px 0px 108px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Quantity := 1</span></p>

        <p style="margin: 0px 0px 0px 108px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Length := ShapeSideInfo [5]</span></p>

        <p style="margin: 0px 0px 0px 108px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle1 := Angle1BeadGlobalShapeNum [i]</span></p>

        <p style="margin: 0px 0px 0px 108px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle2 := Angle2BeadGlobalShapeNum [i]</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">End If</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">j += 1</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">End Repeat</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="color: rgb(0, 0, 128);"># The <span class="f_Variables">Apply</span> function is run for all 
		bead profiles except the last one (<span class="f_Variables">Apply</span> is implicit for the last one, as an alternative to last expected 
		instruction <span class="f_Variables">Quantity</span> := 0).</span></p>
		
        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">If i &lt; GetArraySize (CutBeadGlobalShapeNum)</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Apply</span></p>
		
        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">End If</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">i += 1</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">End Repeat</span></p>
		
        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="margin: 0px 0px 0px 48px; font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold; font-style: italic;">e
        - Drawings for profiles, transom and beads : </span><span style="font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold;">Drawing</span> 
		<span style="font-weight: bold; font-style: italic;">tab</span></p>

        <p class="p_Comment"> </p>
         
        <p class="p_Comment">Main computation is already done at step 1, we may now draw what has been computed, beads, transom and glazings.</p>
		
        <p class="p_Comment"> </p>

        <p class="p_Comment"><span style="font-weight: bold;">WinPro drawings</span></p>
		
        <p class="p_Comment"> </p>
   
        <p style="text-align: center; text-indent: 45px;"><img
        src="img/clip0919eng.jpg" width="838" height="250" border="0"
        alt="clip0919eng"></p>
   
        <p class="p_Comment"> </p>

        <p class="p_Comment"><span style="margin: 0px 0px 0px 28px; font-style: italic; text-decoration: underline;">Code of WinPro's 
		drawing PANDRAWING :</span></p>
		
        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">PenColour (Black)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Brush (Colour, LightCyan)</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Drawing for first glazing computed, Bottom/Left.</span></p>
        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Drawing for first glazing computed, Bottom/Left.</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># See chapter <a href="9_0_0_x.php">WinPro functions for cutting shape</a> for details about 
		<span class="f_Variables">DrawShape ()</span> funtion.</p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">StartPath ()</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">DrawShape (CutLeftPanelShapeNum, 0, 0)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">EndPath ()</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">FillAndBorderPath ()</span></p>

        <p class="p_Comment"> </p>
		
        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Drawing for second glazing computed, Top/Right.</p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">StartPath ()</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">DrawShape (CutFinalRightPanelShapeNum, 0, 0)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">EndPath ()</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">FillAndBorderPath ()</span></p>

        <p class="p_Comment"> </p>
		
        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Drawing for transom, outer frame colour here.</p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Brush (Colour, _OuterFrameIntColourRed, _OuterFrameIntColourGreen, _OuterFrameIntColourBlue)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">StartPath ()</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">DrawShape (CutFinalTransomPanelShapeNum, 0, 0)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">EndPath ()</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">FillAndBorderPath ()</span></p>

        <p class="p_Comment"> </p>
		
        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Drawing for beads, outer frame colour here.</p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Brush (Colour, _OuterFrameIntColourRed, _OuterFrameIntColourGreen, _OuterFrameIntColourBlue)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">i := 1</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Repeat While i &lt;= GetArraySize (CutBeadGlobalShapeNum)</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">StartPath ()</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">DrawShape (CutBeadGlobalShapeNum [i], 0, 0)</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">EndPath ()</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">FillAndBorderPath ()</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">i += 1</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">End Repeat</span></p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"> </p>
        <p class="p_Comment"> </p>
        <p class="p_Comment"> </p>
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
      <td align="left"><p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="text-align: center; font-size: 18pt; font-family: 'Times New Roman'; font-weight: bold; 
		text-decoration: underline;">Paramétrage
        d'une traverse oblique via un panneau fabriqué avec les instructions de
        formes de la version 9</span> </p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="margin: 0px 0px 0px 24px; font-size: 14pt; font-family: 'Times New Roman'; font-weight: bold;">1
        - Présentation</span> </p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">Ce paramétrage permettra de saisir des traverses
        intermédiaires horizontales obliques, depuis un panneau fabriqué
        WinPro.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">La finalité est de définir les éléments composant
        ce panneau (profils, articles, vitrages et dessins).</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">Pour la traverse oblique ci-dessous, on veut
        pouvoir calculer les profils de dormant mais surtout les parcloses, la
        traverse et les vitrages qui sont saisis ici et calculés dans un
        panneau fabriqué.</p>

        <p class="p_Comment"> </p>

        <p style="text-align: center; text-indent: 45px;"><img
        src="img/clip0904fra.jpg" width="893" height="766" border="0"
        alt="clip0904fra"></p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">On obtient finalement une liste de pièces ...</p>

        <p class="p_Comment"> </p>

        <p style="text-align: center; text-indent: 45px;"><img
        src="img/clip0905fra.jpg" width="664" height="382" border="0"
        alt="clip0905fra"></p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">... vitrages compris !</p>

        <p class="p_Comment"> </p>

        <p style="text-align: center; text-indent: 45px;"><img
        src="img/clip0906fra.jpg" width="711" height="379" border="0"
        alt="clip0906fra"></p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="margin: 0px 0px 0px 24px; font-size: 14pt; font-family: 'Times New Roman'; font-weight: bold;">2
        - Paramétrage du panneau fabriqué</span></p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="margin: 0px 0px 0px 48px; font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold; font-style: italic;">a
        - Questions</span> </p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">Le panneau fabriqué qui sera saisi pour calculer
        les traverses obliques disposera d'un jeu de questions dans l'onglet du
        même nom.</p>

        <p class="p_Comment">4 questions pour contrôler les traverses
        obliques :</p>

        <p class="p_Comment"> </p>

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="4000" style="width: 4000px;"><p
                style="margin: 0px 0px 0px 23px;"><span
                style="font-weight: bold; font-style: italic;">- Inclinaison de
                la traverse</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="4000" style="width: 4000px;"><p
                style="margin: 0px 0px 0px 23px;">Format : <span
                style="color: rgb(150, 20, 20);">Numérique</span> | Nom de
                variable : <span class="f_Variables">QPF_Inclinaison</span> :
                C'est l'angle d'inclinaison de la traverse oblique, donné
                depuis le bord droit du remplissage dans lequel se trouve le
                panneau. La ligne de référence passe par la droite horizontale
                passant par la position de traverse (voir ci-dessous), donnée
                depuis le bord droite. La valeur est comprise entre 135°
                (horizontale) et 225° (forcée par paramétrage).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="4000" style="width: 4000px;"><p
                style="margin: 0px 0px 0px 23px;"><span
                style="font-weight: bold; font-style: italic;">- Section
                intérieure de la traverse</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="4000" style="width: 4000px;"><p
                style="margin: 0px 0px 0px 23px;">Format : <span
                style="color: rgb(150, 20, 20);">Numérique</span> | Nom de
                variable : <span class="f_Variables">QPF_Section</span> :
                Section de la traverse oblique (correspond à la variable <span
                class="f_Variables">PetiteHauteur</span>, soit le profil hors
                battée vitrage). La valeur est comprise entre 50 et 200mm
                (forcée par paramétrage).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="4000" style="width: 4000px;"><p
                style="margin: 0px 0px 0px 23px;"><span
                style="font-weight: bold; font-style: italic;">- Position de
                traverse</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="4000" style="width: 4000px;"><p
                style="margin: 0px 0px 0px 23px;">Format : <span
                style="color: rgb(150, 20, 20);">Numérique</span> | Nom de
                variable : <span class="f_Variables">QPF_Position</span> :
                Position de la traverse oblique, donnée par rapport au bord
                droite du remplissage, depuis le bord extérieur du cadre. La
                valeur est comprise entre 200 et <span
                class="f_Variables">Hauteur</span> - 200mm (forcée par
                paramétrage).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="4000" style="width: 4000px;"><p
                style="margin: 0px 0px 0px 23px;"><span
                style="font-weight: bold; font-style: italic;">- Aisance du
                panneau</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="4000" style="width: 4000px;"><p
                style="margin: 0px 0px 0px 23px;">Format : <span
                style="color: rgb(150, 20, 20);">Numérique</span> | Nom de
                variable : <span class="f_Variables">QPF_Aisance</span> :
                Aisance appliquée au panneau. Ceci influencera principalement
                les vitrages calculés. La valeur est comprise entre -5 et 20mm
                (forcée par paramétrage).</p>
              </td>
            </tr>
          </tbody>
        </table>

        <p class="p_Comment"> </p>

        <p style="text-align: center; text-indent: 45px;"><img
        src="img/clip0907fra.jpg" width="616" height="276" border="0"
        alt="clip0907fra"></p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="margin: 0px 0px 0px 48px; font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold; font-style: italic;">b
        - Calculs préalables : onglet </span><span
        style="font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold;">Vitrages</span></p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">La plus grande partie des éléments requis sera calculée à cette étape, pour être réutilisé dans les onglets
		suivants, notamment pour les débits de vitrages ou panneaux, profils, articles ainsi que pour les dessins.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment" style="text-decoration: underline;">ETAPE 1 : Calculs préalables</p>
		
        <p class="p_Comment"> </p>

        <p class="p_Comment">Voici le code, utilisé dans la première page FORMULE de l'onglet <span style="font-style: italic;">
		Vitrages</span>. Il est peut être plus facile de suivre en copiant/collant ce code dans une formule de panneau fabriqué, voir en
		enlevant les commentaires, pour plus de confort de lecture :</p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># Variable de travail, on stockera la forme globale du panneau dans cette variable</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpNumFormePanneauGlob := 0</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># Récupération de la forme extérieure du panneau, que l'on stocke dans le premier</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># emplacement disponible du Tableau de formes (voir les <a href="9_0_0_x.php">Notions de base</a>
		).</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># Voir le chapitre <a href="9_0_0_x.php">Fonction WinPro de création et de modification de forme</a> 
		pour</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># l'instruction <span class="f_Variables">ChargerForme ()</span>.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># Voir la <a href="9_0_0_x.php">Liste des variables de formes prédéfinies</a> pour la 
		variable <span class="f_Variables">_NumFormeRemplissage</span>, paragraphe</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># des formes liées au remplissage.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># Résultat = <img src="img/clip0908.jpg" width="40" height="75" border="0"
        alt="clip0908">.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">ChargerForme (- 1, _NumFormeRemplissage,, NumeroRemplissage)</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># Mémorisation de l'indice de la forme créée dans la variable de travail</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># Voir les <a href="9_0_0_x.php">Notions de base</a> pour le tableau 
		<span class="f_Variables">NumDerniereFormeCreee []</span>, paragraphe sur les formes destination.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpNumFormePanneauGlob := NumDerniereFormeCreee [1]</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># Debug (à activer en cas de besoin)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># Cette instruction permet de contrôler les valeurs calculées par WinPro pour la forme 
		d'indice <span class="f_Variables">TmpNumFormePanneauGlob</span>.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># Voir les 
		<a href="9_0_0_x.php">Fonction WinPro de création et de modification de forme pour les lattes</a>, variante à 1 paramètre.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"></span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># Pour debuggage seulement.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># <span style="font-weight: bold;">DebugForme (TmpNumFormePanneauGlob)</span></span></p>
		
        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># Variable de travail temporaire pour les sous formes Gauche et droite, lorsque l'on est assis sur 
		la ligne de coupe (ligne de référence),</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># la gauche correspond au bas et la droite au haut dans l'exemple, car l'inclinaison est comprise 
		entre 90 et 270°.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># On regarde de la droite vers la gauche.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpNumFormePanneauGauche := 0</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpNumFormePanneauDroite := 0</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># ETAPE 2: création des sous formes.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># On coupe la forme globale du panneau <span class="f_Variables">TmpNumFormePanneauGlob</span> en 
		2.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># On stocke les 2 sous formes générées dans les premiers emplacement disponibles du 
		tableau de forme (. -1, -1 .).</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># La forme globale du panneau <span class="f_Variables">TmpNumFormePanneauGlob</span> est coupée 
		selon une droite</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># d'inclinaison correspondante à la question « <Span style="font-weight: bold; color: 
		rgb(0, 0, 0);">Inclinaison de la traverse</span> » (variable <span class="f_Variables">QPF_Inclinaison</span>).</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># La position en X de la droite correspond à la largeur du remplissage (., <span 
		class="f_Variables">_RemplX [NumeroRemplissage] + _RemplLargeur [NumeroRemplissage]</span>, .).</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># La position en Y de la droite correspond à la valeur de 
		la question « <Span style="font-weight: bold; color: rgb(0, 0, 0);">Position de la traverse</span> » (variable <span 
		class="f_Variables">QPF_Position</span>), additionnée</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># de la position du remplissage en Y (., <span class="f_Variables">_RemplY
		[NumeroRemplissage]</span> + <span class="f_Variables">QPF_Position</span>, .). On décale la ligne de</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># découpe d'une demi section intérieure de la traverse vers le bas, question « 
		<Span style="font-weight: bold; color: rgb(0, 0, 0);">Section de traverse</span> » (- <span class="f_Variables">QPF_Section</span> 
		/ 2).</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Voir les <a href="9_0_0_x.php">Fonctions WinPro de création et manipulation de formes</a>.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CouperForme (TmpNumFormePanneauGlob, - 1, - 1, QPF_Inclinaison, _RemplX [NumeroRemplissage] + _RemplLargeur
		[NumeroRemplissage], _RemplY [NumeroRemplissage] + QPF_Position, - QPF_Section / 2, 0)</span></p>

		<p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Mémorisation de l'indice des 2 sous formes créées dans des variables de travail.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Résultat :</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># <span class="f_Variables">TmpNumFormePanneauGauche</span> = <img src="img/clip0909.jpg" width="40" 
		height="40" border="0" alt="clip0909">.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span
        style="color: rgb(0, 0, 128);"># <span class="f_Variables">TmpNumFormePanneauDroite</span> = <img src="img/clip0910.jpg" width="40" 
		height="53" border="0" alt="clip0910">.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpNumFormePanneauGauche := NumDerniereFormeCreee [1]</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpNumFormePanneauDroite := NumDerniereFormeCreee [2]</span></p>
		
        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Copie de la forme gauche (bas) correspondante au panneau fini fond de feuillure sans aisance 
		et parclose comprise.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CopierForme (TmpNumFormePanneauGauche, - 1)</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Mémorisation du numéro de forme du panneau fini bas <img src="img/clip0909.jpg" width="40" 
		height="40" border="0" alt="clip0909"> dans une variable.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">ConsoNumFormePanneauGauche := NumDerniereFormeCreee [1]</span></p>
		
        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Variable de travail temporaire pour les sous formes du panneau droite (en haut, 
		<img src="img/clip0910.jpg" width="40" height="53" border="0" alt="clip0910">).</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># On redécoupe cette forme haute en 2 pour générer la forme du remplissage final en haut</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># (parclose comprise, hors aisance), et la forme de la traverse en bas.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpNumFormePanneauTraverse := 0</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpNumFormePanneauDroiteFini := 0</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Etape 1: création des sous formes:</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CouperForme (TmpNumFormePanneauDroite, - 1, - 1, QPF_Inclinaison, _RemplX [NumeroRemplissage] + _RemplLargeur
		[NumeroRemplissage], _RemplY [NumeroRemplissage] + QPF_Position, + QPF_Section / 2, 0)</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Mémorisation de l'indice des sous formes créées dans les variables de travail.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Résultat :</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># <span class="f_Variables">TmpNumFormePanneauTraverse</span> = <img src="img/clip0911.jpg" width="40" 
		height="24" border="0" alt="clip0911">. Section INTERIEURE de la traverse, hors parclose.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># <span class="f_Variables">TmpNumFormePanneauDroiteFini</span> = <img src="img/clip0912.jpg" width="40" 
		height="43" border="0" alt="clip0912">.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpNumFormePanneauTraverse := NumDerniereFormeCreee [1]</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpNumFormePanneauDroiteFini := NumDerniereFormeCreee [2]</span></p>
		
        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Copie de la forme gauche (bas) correspondante à la traverse. ATTENTION la section</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># renseignée est intérieure et pas hors tout ! Les parcloses ne sont donc pas comprises !</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Ce calcul n'est pas conservé, utilisé pour un calcul des remplissages.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CopierForme (TmpNumFormePanneauTraverse, - 1)</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Mémorisation du numéro de forme de la traverse en fond de feuillure (gauche/bas) dans une 
		variable.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">ConsoNumFormePanneauTraverse := NumDerniereFormeCreee [1]</span></p>
		
        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Il faudra refaire un découpage de forme sur la forme globales pour la traverse car elle est 
		ici</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># calculée en fond de feuillure et non en hors tout, pour caler les vitrages.</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Variable de travail temporaire pour les sous formes, calcul de la traverse finie,</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># feuillures incluses (20mm). 2 découpages successifs nécessaires depuis la forme globale.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">FeuillureParclosable := 20</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpNumFormeTraverseFinie := 0</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">ConsoNumFormeTraverseFinie := 0</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Etape 1: création des sous formes pour la traverse finie</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># C'est le même découpage que précedemment, sauf qu'on inclut la parclose cette fois</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># (décalage = - <span class="f_Variables">QPF_Section</span> / 2 - 
		<span class="f_Variables">FeuillureParclosable)</span>.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CouperForme (TmpNumFormePanneauGlob, - 1, - 1, QPF_Inclinaison, _RemplX [NumeroRemplissage] + _RemplLargeur
		[NumeroRemplissage], _RemplY [NumeroRemplissage] + QPF_Position, - QPF_Section / 2 - FeuillureParclosable, 0)</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Mémorisation de l'indice des sous formes créées dans les variables de travail,</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># on ne garde que la forme de droite (haut) que l'on va redécouper après.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Cette partie correspond au panneau global - la partie basse sous la traverse hors tout</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Résultat :</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># <span class="f_Variables">TmpNumFormeTraverseFinie</span> = <img src="img/clip0913.jpg" width="40" 
		height="53" border="0" alt="clip0913">.</span></p>
 
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpNumFormeTraverseFinie := NumDerniereFormeCreee [2]</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># ETAPE 3: redécoupage du panneau restant en haut pour obtenir la traverse.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CouperForme (TmpNumFormeTraverseFinie, - 1, - 1, QPF_Inclinaison, _RemplX [NumeroRemplissage] + 
		_RemplLargeur [NumeroRemplissage], _RemplY [NumeroRemplissage] + QPF_Position, QPF_Section / 2 + FeuillureParclosable, 0)</span></p>
		
        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Mémorisation de l'indice des sous formes créées dans les variables de travail, on ne garde</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># que la forme de gauche (bas) d'indice 1 (première créée), correspondante à la traverse.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Résultat :</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># ConsoNumFormeTraverseFinie = <img src="img/clip0914.jpg" width="40" 
		height="28" border="0" alt="clip0914">.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">ConsoNumFormeTraverseFinie := NumDerniereFormeCreee [1]</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># ######################################</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Traverse finalisée prête pour le débit/dessin.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># ######################################</span></p>
		
        <p class="p_Comment"> </p>
		
        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Copie de la forme droite (haut) correspondante au panneau fini fond de feuillure sans 
		aisance.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># <img src="img/clip0912.jpg" width="40" height="43" border="0" alt="clip0912">.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CopierForme (TmpNumFormePanneauDroiteFini, - 1)</span></p>

        <p class="p_Comment"> </p>
		
        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Mémorisation du numéro de forme du panneau fini haut dans une variable.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">ConsoNumFormePanneauDroiteFini := NumDerniereFormeCreee [1]</span></p>

        <p class="p_Comment"> </p>
		
        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Calcul de forme pour les parcloses, remplissage de gauche/bas et droite/haut.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpNumFormeAParcloserGauche := 0</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpNumFormeAParcloserDroite := 0</span></p>
		
        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Copie de la forme gauche (bas) correspondante à la forme à parcloser en bas, aisance non 
		déduite.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># <img src="img/clip0909.jpg" width="40" height="40" border="0" alt="clip0909">.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CopierForme (TmpNumFormePanneauGauche, - 1)</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Mémorisation du numéro de forme du cadre à parcloser bas dans une variable.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpNumFormeAParcloserGauche := NumDerniereFormeCreee [1]</span></p>
		
        <p class="p_Comment"> </p>


        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Copie de la forme droite (haut) correspondante à la forme à parcloser en haut, aisance non 
		déduite.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># <img src="img/clip0912.jpg" width="40" height="43" border="0" alt="clip0912">.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CopierForme (TmpNumFormePanneauDroiteFini, - 1)</span></p>
		
        <p class="p_Comment"> </p>
		
        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Mémorisation du numéro de forme du cadre à parcloser haut dans une variable.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpNumFormeAParcloserDroite := NumDerniereFormeCreee [1]</span></p>

        <p class="p_Comment"> </p>
		
        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Variable de consommation pour les sous formes des profils parclose à consommer, pour l'ensemble 
		des parcloses, remplissages haut et bas.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Variable tableau pour les angles de coupes car renseignés dans <span 
		class="f_Variables">InfoSouBordForme 20/24</span> lors d'un <span class="f_Variables">GenererProfilsDansForme</span> à 14 paramètres.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">ConsoNumFormeParcloseGlobal : 0</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">ConsoNumFormeParcloseGlobal := 0</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle1NumFormeParcloseGlobal : 0</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle1NumFormeParcloseGlobal := 0</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle2NumFormeParcloseGlobal : 0</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle2NumFormeParcloseGlobal := 0</span></p>
		
        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Calcul des profils pour la forme de gauche (bas).</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Extraction des infos globales de la forme (ici pour connaitre le nombre de bords).</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Voir <a href="9_0_0_x.php">Fonction WinPro de création et de modification de forme pour 
		les lattes</a> concernant la fonction <span class="f_Variables">ObtenirInfoForme ()</span>.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">ObtenirInfoForme (TmpNumFormeAParcloserGauche,,,)</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Variable tampon pour le nombre de bord. Voir <a href="9_0_0_x.php">Fonction WinPro de création et 
		de modification de forme pour les lattes</a> concernant la valeur <span class="f_Variables">InfoForme ()</span>.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpNbBordParcloseBas := InfoForme [2]</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Extraction des infos globales de la forme (ici pour connaître le nombre de bords).</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Boucle sur tous les bords du cadre à parcloser.</span></p>
		
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">i := 0</span></p>


        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Repeter Tant Que i &lt; TmpNbBordParcloseBas</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span 
		style="color: rgb(0, 0, 128);"># Extraction des infos de forme par bord/sous bords.</span></p>
		
        <p style="margin: 0px 0px 0px 80px;"><span 
		style="color: rgb(0, 0, 128);"># Voir <a href="9_0_0_x.php">Fonction WinPro de création et 
		de modification de forme pour les lattes</a> concernant la fonction <span class="f_Variables">GenererProfilsDansForme  ()</span>.</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">GenererProfilsDansForme  (TmpNumFormeAParcloserGauche,, i, 0,,,, - 1, 0, 0, 20, 20, 20, 20)</span></p>
		
        <p style="margin: 0px 0px 0px 80px;"><span 
		style="color: rgb(0, 0, 128);"># Boucle sur tous les sous bords du bord en cours. Voir le chapitre <a href="9_0_0_x.php">Fonction WinPro de 
		création et de modification pour les lattes</a> concernant la valeur <span class="f_Variables">InfoBordForme</span>.</span></p>

        <p class="p_Comment"> </p>
   
        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">j := 1</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Repeter Tant Que j &lt;= InfoBordForme [1]</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span 
		style="color: rgb(0, 0, 128);"># Redimensionnement du tableau des formes et angles de profils, on ajoute une case à la taille 
		courante.</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">ConsoNumFormeParcloseGlobal : TailleTableau (ConsoNumFormeParcloseGlobal) + 1</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle1NumFormeParcloseGlobal : TailleTableau (Angle1NumFormeParcloseGlobal) + 1</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle2NumFormeParcloseGlobal : TailleTableau (Angle2NumFormeParcloseGlobal) + 1</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span 
		style="color: rgb(0, 0, 128);"># On stocke dans la dernière case créée le numéro de la forme représentant la forme complète (totale) 
		de la parclose du sous bord du bord en cours.</span></p>
		
        <p style="margin: 0px 0px 0px 94px;"><span 
		style="color: rgb(0, 0, 128);"># On prend le numéro de forme 4 pour obtenir la forme complète (longueur totale) du profil du 
		sous bord 1 du bord en cours.</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span 
		style="color: rgb(0, 0, 128);"># On prend le numéro de forme 8 pour obtenir la forme complète (longueur totale) du profil du 
		sous bord 2 du bord en cours.</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span 
		style="color: rgb(0, 0, 128);"># On prend le numéro de forme 4 + 4 * (numero de sous bord - 1) (&lt;=&gt; 4 + (j-1)*4)</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span 
		style="color: rgb(0, 0, 128);"># pour obtenir la forme complète (longueur totale) du profil du sous bord j du bord en cours 
		(bord en cours = i).</span></p>
		
        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">ConsoNumFormeParcloseGlobal [TailleTableau (ConsoNumFormeParcloseGlobal)] := NumDerniereFormeCreee 
		[4 + (j - 1) * 4]</span></p>
   
        <p style="margin: 0px 0px 0px 94px;"><span 
		style="color: rgb(0, 0, 128);"># Stockage des angles dans les variables tableau. Voir le chapitre <a href="9_0_0_x.php">Fonction 
		WinPro de création et de modification de forme pour les lattes</a> concernant la valeur <span class="f_Variables">InfoSousBordForme
		()</span>.</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle1NumFormeParcloseGlobal [TailleTableau (Angle1NumFormeParcloseGlobal)] := InfoSousBordForme [24]</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle2NumFormeParcloseGlobal [TailleTableau (Angle2NumFormeParcloseGlobal)] := InfoSousBordForme [20]</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">j += 1</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Fin Repeter</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">i += 1</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Fin Repeter</span></p>
		
        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Calcul des profils pour la forme de droite (haut) Voir commentaires plus haut.</span></p>
   
        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">ObtenirInfoForme (TmpNumFormeAParcloserDroite,,,)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpNbBordParcloseHaut := InfoForme [2]</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">i := 0</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Repeter Tant Que i &lt; TmpNbBordParcloseHaut</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">GenererProfilsDansForme  (TmpNumFormeAParcloserDroite,, i, 0,,,, - 1, 0, 0, 20, 20, 20, 20)</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">j := 1</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Repeter Tant Que j &lt;= InfoBordForme [1]</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">ConsoNumFormeParcloseGlobal : TailleTableau (ConsoNumFormeParcloseGlobal) + 1</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle1NumFormeParcloseGlobal : TailleTableau (Angle1NumFormeParcloseGlobal) + 1</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle2NumFormeParcloseGlobal : TailleTableau (Angle2NumFormeParcloseGlobal) + 1</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">ConsoNumFormeParcloseGlobal [TailleTableau (ConsoNumFormeParcloseGlobal)] := NumDerniereFormeCreee 
		[4 + (j - 1) * 4]</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle1NumFormeParcloseGlobal [TailleTableau (Angle1NumFormeParcloseGlobal)] := InfoSousBordForme [24]</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle2NumFormeParcloseGlobal [TailleTableau (Angle2NumFormeParcloseGlobal)] := InfoSousBordForme [20]</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">j += 1</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Fin Repeter</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">i += 1</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Fin Repeter</span></p>
		
        <p class="p_Comment"> </p>
      
        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Purge du tableau de forme. Voir le chapitre <a href="9_0_0_x.php">Fonction WinPro de création et 
		de modification de forme</a> pour plus de détail sur la fonction <span class="f_Variables">SupprimerForme ()</span>.</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">SupprimerForme (TmpNumFormePanneauGlob)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">SupprimerForme (TmpNumFormePanneauGauche)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">SupprimerForme (TmpNumFormePanneauDroite)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">SupprimerForme (TmpNumFormePanneauDroiteFini)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">SupprimerForme (TmpNumFormePanneauTraverse)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">SupprimerForme (TmpNumFormeTraverseFinie)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">SupprimerForme (TmpNumFormeAParcloserGauche)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">SupprimerForme (TmpNumFormeAParcloserDroite)</span></p>
		
        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="margin: 0px 0px 0px 48px; font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold; font-style: italic;">c
        - Débit des vitrages : onglet </span><span
        style="font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold;">Vitrages</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">Les calculs intermédiaires sont effectués à l'étape précédente. Dans les formules suivantes de l'onglet 
		<span style="font-style: italic;">Vitrages</span>, on pourra directement consommé des vitrages, comme suit :</p>

        <p class="p_Comment"> </p>

        <p style="text-align: center; text-indent: 45px;"><img
        src="img/clip0915fra.jpg" width="561" height="298" border="0"
        alt="clip0915fra"></p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_Variables">ConsoNumFormePanneauGauche</span> = <img src="img/clip0912.jpg" width="40" 
		height="43" border="0" alt="clip0912">.</p>
		
        <p class="p_Comment"> </p>

        <p style="text-align: center; text-indent: 45px;"><img
        src="img/clip0916fra.jpg" width="590" height="289" border="0"
        alt="clip0916fra"></p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_Variables">ConsoNumFormePanneauDroiteFini</span> = <img src="img/clip0909.jpg" width="40" 
		height="40" border="0" alt="clip0909">.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">Voir le chapitre <a href="9_0_0_x.php">Fonction WinPro de création et de modification de forme</a> pour la 
		fonction <span class="f_Variables">ReduireForme ()</span>.</p>

        <p class="p_Comment">Voir le chapitre <a href="9_0_0_x.php">Fonctions WinPro de consommation de forme</a> pour la 
		variable <span class="f_Variables">NumFormeAConsommer</span>.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="margin: 0px 0px 0px 48px; font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold; font-style: italic;">d
        - Débit des profils, traverses et parcloses: onglet </span><span
        style="font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold;">Profils</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment">Les calculs intermédiaires sont effectués à l'étape a, on va maintenant consommer les profils dans 
		l'onglet du même nom.</p>
		
        <p class="p_Comment"> </p>

        <p class="p_Comment"><span style="font-weight: bold;">Débit de la traverse</span></p>
		
        <p class="p_Comment"> </p>

        <p style="text-align: center; text-indent: 45px;"><img
        src="img/clip0917fra.jpg" width="842" height="293" border="0"
        alt="clip0917fra"></p>
		
        <p class="p_Comment"> </p>

        <p class="p_Comment"><span style="font-weight: bold;">Débit des parcloses</span></p>
		
        <p class="p_Comment"> </p>

        <p style="text-align: center; text-indent: 45px;"><img
        src="img/clip0918fra.jpg" width="496" height="139" border="0"
        alt="clip0918fra"></p>
		
        <p class="p_Comment"> </p>
		
        <p class="p_Comment"><span style="margin: 0px 0px 0px 28px; font-style: italic; text-decoration: underline;">Code correspondant 
		:</span></p>
		
        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Extraction des infos nécessaire pour le débit de parclose, on boucle sur tous les profils 
		calculés, indisctinctement (remplissage haut et bas).</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">i := 1</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Repeter Tant Que i &lt;= TailleTableau (ConsoNumFormeParcloseGlobal)</span></p>
		
        <p style="margin: 0px 0px 0px 80px;"><span style="color: rgb(0, 0, 128);"># Variable comptant le nombre de bord ("segment") de 
		la forme du profil de parclose en cours.</span></p>
   
        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpNbBordParclose := 0</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="color: rgb(0, 0, 128);"># Extraire les infos de la forme de la PARCLOSE !</span></p>
   
        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">ObtenirInfoForme (ConsoNumFormeParcloseGlobal [i],,,)</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="color: rgb(0, 0, 128);"># Mémorisation du nbre de bords ("segment") du PROFIL 
		de parclose lui même.</span></p>
   
        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">TmpNbBordParclose := InfoForme [2]</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="color: rgb(0, 0, 128);"># Boucle sur les bords du profil en cours, pour 
		détecter quel est le bord (côté, segment) du profil de parclose de label 2000 (= extérieur).</span></p>
   
        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">j := 0</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Repeter Tant Que j &lt; TmpNbBordParclose</span></p>
		
        <p style="margin: 0px 0px 0px 94px;"><span style="color: rgb(0, 0, 128);"># Extraction des informations de forme des profils par 
		bord (segment, côté) &lt;=&gt; on remplit les variables <span class="f_Variables">InfoForme</span>, 
		<span class="f_Variables">InfoBordForme</span>, <span class="f_Variables">InfoSousBordForme</span>.</span></p>
   
        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">ObtenirInfoForme (ConsoNumFormeParcloseGlobal [i],, j, 0)</span></p>
   
        <p style="margin: 0px 0px 0px 94px;"><span style="color: rgb(0, 0, 128);"># On cherche l'information de sous bord de label 
		2000 correspondant au bord extérieur (&lt;=&gt; longueur WinPro).</span></p>
   
        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Si InfoSousBordForme [28] = 2000</span></p>

        <p style="margin: 0px 0px 0px 108px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Quantite := 1</span></p>

        <p style="margin: 0px 0px 0px 108px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Longueur := InfoBordForme [5]</span></p>

        <p style="margin: 0px 0px 0px 108px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle1 := Angle1NumFormeParcloseGlobal [i]</span></p>

        <p style="margin: 0px 0px 0px 108px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Angle2 := Angle2NumFormeParcloseGlobal [i]</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Fin Si</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">j += 1</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Fin Repeter</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="color: rgb(0, 0, 128);"># On exécute la fonction 
		<span class="f_Variables">Appliquer</span> pour toutes les parcloses sauf la dernière (<span class="f_Variables">Appliquer</span> 
		est implicite pour la dernière, alternative à <span class="f_Variables">Quantite</span> := 0)</span></p>
		
        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Si i &lt; TailleTableau (ConsoNumFormeParcloseGlobal)</span></p>

        <p style="margin: 0px 0px 0px 94px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Appliquer</span></p>
		
        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Fin Si</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">i += 1</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Fin Repeter</span></p>
		
        <p class="p_Comment"> </p>

        <p class="p_Comment"><span
        style="margin: 0px 0px 0px 48px; font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold; font-style: italic;">e
        - Dessin des profils, traverses et parcloses: onglet </span><span
        style="font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold;">Dessin</p>

        <p class="p_Comment"> </p>
         
        <p class="p_Comment">Les calculs intermédiaires sont effectués à l'étape a, on va maintenant dessiner ce qui a été calculé, 
		les parcloses, la traverse et les vitrages.</p>
		
        <p class="p_Comment"> </p>

        <p class="p_Comment"><span style="font-weight: bold;">Desin WinPro</span></p>
		
        <p class="p_Comment"> </p>
   
        <p style="text-align: center; text-indent: 45px;"><img
        src="img/clip0919fra.jpg" width="828" height="279" border="0"
        alt="clip0919fra"></p>
   
        <p class="p_Comment"> </p>
		
        <p class="p_Comment"><span style="margin: 0px 0px 0px 28px; font-style: italic; text-decoration: underline;">Code du dessin WinPro 
		DESSINPAN :</span></p>
		
        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">CouleurTrait (Noir)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Brosse (Pleine, CyanClair)</span></p>

        <p class="p_Comment"> </p>

        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Dessin du premier vitrage calculé, Bas/Gauche.</span></p>
        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Dessin du premier vitrage calculé, Bas/Gauche.</span></p>

        <p class="p_Comment"> </p>
         
        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Voir le chapitre <a href="9_0_0_x.php">Fonctions WinPro de consommation de forme</a> pour la 
		fonction <span class="f_Variables">DessinerForme ()</span>.</p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">DebutChemin ()</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">DessinerForme (ConsoNumFormePanneauGauche, 0, 0)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">FinChemin ()</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">RemplirEtContourChemin ()</span></p>

        <p class="p_Comment"> </p>
		
        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Dessin du deuxième vitrage calculé, Haut/Droite.</p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">DebutChemin ()</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">DessinerForme (ConsoNumFormePanneauDroiteFini, 0, 0)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">FinChemin ()</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">RemplirEtContourChemin ()</span></p>

        <p class="p_Comment"> </p>
		
        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Dessin de la traverse, couleur du dormant ici.</p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Brosse (Pleine, _CouleurDormantIntRouge, _CouleurDormantIntVert, _CouleurDormantIntBleu)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">DebutChemin ()</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">DessinerForme (ConsoNumFormeTraverseFinie, 0, 0)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">FinChemin ()</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">RemplirEtContourChemin ()</span></p>

        <p class="p_Comment"> </p>
		
        <p style="margin: 0px 0px 0px 66px;"><span 
		style="color: rgb(0, 0, 128);"># Dessin des parcloses, couleur du dormant ici.</p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Brosse (Pleine, _CouleurDormantIntRouge, _CouleurDormantIntVert, _CouleurDormantIntBleu)</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">i := 1</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Repeter Tant Que i &lt;= TailleTableau (ConsoNumFormeParcloseGlobal)</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">DebutChemin ()</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">DessinerForme (ConsoNumFormeParcloseGlobal [i], 0, 0)</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">FinChemin ()</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">RemplirEtContourChemin ()</span></p>

        <p style="margin: 0px 0px 0px 80px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">i += 1</span></p>

        <p style="margin: 0px 0px 0px 66px;"><span style="font-weight: bold; 
		color: rgb(0, 0, 128);">Fin Repeter</span></p>
		
        <p class="p_Comment"> </p>

        <p class="p_Comment"> </p>
        <p class="p_Comment"> </p>
        <p class="p_Comment"> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
