<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Transom","Traverse"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?vartraverse.php"; }
else { parent.quicksync('a3.10.3'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Traverse</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="NumeroTraverse,_NTraverses,_NTraversesDormant,_NTraversesOuvrant,_TravLong [],_TravType [],_TravX [],_TravY [],_TravAxe [],_TravOrigineAxe [],_TravOrient [],_TravCat [],_TravEp [],_TravCadre [],_TravHaut [],_TravBas [],_TravGauche [],_TravDroite [],_TravEpaisseurHaut [],_TravEpaisseurBas [],_TravEpaisseurGauche [],_TravEpaisseurDroite [],_TravFilanteHaut [],_TravFilanteBas [],_TravFilanteGauche [],_TravFilanteDroite [],_TravTravHaut [],_TravTravBas [],_TravTravGauche [],_TravTravDroite [],_TravLongBD [],_TravLongHG []" />
   <meta http-equiv="Content-Type" content="text/php; charset=ISO-8859-1" />
   <meta http-equiv="Content-Style-Type" content="text/css" />
   <link type="text/css" href="default.css" rel="stylesheet" />
</head>
<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;" onload=" AddTitleAndLangFlags();highlight();">
<div id="hmpopupDiv" style="visibility:hidden; position:absolute; z-index:1000;"></div>


<table width="100%" border="0" cellspacing="0" cellpadding="5" bgcolor="#FF8000">
  <tr valign="middle">
    <td align="left">
      <p class="p_Heading1"><span id="titlepage" class="f_Heading1"></span></p>
    </td>
	<td align="center">
     <div id="langflags"></div>
    </td>
    </td>
    <td align="right">
     <span style="font-size: 9pt">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="vardormants.php">Previous</a>&nbsp;
     <a href="varprofilperipherique.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p></p>
<p>The index number of the transom computed is stored into variable : <span class="f_Variables">TransomIndex</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="630" style="width: 630px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Note</span><span style="text-decoration: underline;">:</span></p>
<p style="margin: 0px 0px 0px 13px;">It is not recommended, into particular cases, to use the variable <span class="f_Variables">TransomIndex</span> for the question code, as the variable is only initialized when the transom is input and validated into the window.</p>
</td>
</tr>
</table>
</div>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;"> Variable</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_NTransoms</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Total number of transoms in the window</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_NFrameTransoms</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Total number of transoms in the outer frame</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_NSashTransoms</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Total number of transoms in sashes </span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_TransomLength[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Length of each transom as computed by WinPro. Corresponds to the </span><span class="f_Variables">Dimension </span>variable&nbsp; for each transom</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_TransomType[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Type of frame for each transom: </span><span style="font-family: 'Courier New'; color: #0000ff;">_OuterFrame</span><span style="color: #000000;"> or </span><span style="font-family: 'Courier New'; color: #0000ff;">_Sash</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_TransomX[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Horizontal position of each transom (axis of vertical transoms, left end of horizontal transoms). Position is given from the point 0,0 located at the bottom left of the outer frame.</span></p>
<p style="margin: 0px 0px 0px 13px;"><span style="color: #ff0000;">Winpro does not take in consideration the usage of the variables </span><span class="f_Variables">X0</span><span style="color: #ff0000;">, </span><span class="f_Variables">X1</span><span style="color: #ff0000;">, </span><span class="f_Variables">Y0</span><span style="color: #ff0000;"> et </span><span class="f_Variables">Y1 </span><span style="color: #ff0000;">used to re-position the transom</span><span class="f_Variables">.</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_TransomY[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Vertical position of each transom (axis of horizontal transoms, bottom end of vertical transoms).Position is given from the point 0,0 located at the bottom left of the outer frame.</span></p>
<p style="margin: 0px 0px 0px 13px;"><span style="color: #ff0000;">Winpro does not take in consideration the usage of the variables </span><span class="f_Variables">X0</span><span style="color: #ff0000;">, </span><span class="f_Variables">X1</span><span style="color: #ff0000;">, </span><span class="f_Variables">Y0</span><span style="color: #ff0000;"> et </span><span class="f_Variables">Y1 </span><span style="color: #ff0000;">used to re-position the transom</span><span class="f_Variables">.</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_TransAxis[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Axis of each transoms, as typed by the user.</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_TransomOriginAxis[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Origin of the axis of each transom: </span><span style="font-family: 'Courier New'; color: #0000ff;">_OuterFrame</span><span style="color: #000000;"> or </span><span style="font-family: 'Courier New'; color: #0000ff;">_Transom</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_TransomOrientation[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Orientation of each transom: </span><span style="font-family: 'Courier New'; color: #0000ff;">_Horizontal </span><span style="color: #000000;">or </span><span style="font-family: 'Courier New'; color: #0000ff;">_Vertical</span><span style="color: #000000;">.</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_TransomCategory[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Category of each transom</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_TransomThickness[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Thickness of each transom (corresponds to local variable <span class="f_Variables">SmallerHeight</span>)</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_TransomFrame[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Leaf and sash number to which each transom belongs.</span></p>
<p style="margin: 0px 0px 0px 13px;">Returns:</p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">0</span> : <span style="color: #000000;">outer frame</span>.</p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">1.1</span> : <span style="color: #000000;">1st leaf of 1st sash</span>.</p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">1.2</span> : <span style="color: #000000;">2nd leaf of first sash.</span></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">2.1</span> : <span style="color: #000000;">1st leaf of 2nd sash</span>.</p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">2.2</span> : 2nd<span style="color: #000000;"> leaf of 2nd sash.</span></p>
<p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">...</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_TransomTop[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Profile type at the upper end of each vertical transom: </span><span style="font-family: 'Courier New'; color: #0000ff;">_OuterFrame</span><span style="color: #000000;">, </span><span style="font-family: 'Courier New'; color: #0000ff;">_Sash</span><span style="color: #000000;">, </span><span style="font-family: 'Courier New'; color: #0000ff;">_Transom</span><span style="color: #000000;">. This value is undefined for horizontal transoms. </span><span style="font-weight: bold; color: #ff0000;">For use only with vertical transom.</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_TransomBottom[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Profile type at the lower end of each vertical transom: </span><span style="font-family: 'Courier New'; color: #0000ff;">_OuterFrame</span><span style="color: #000000;">, </span><span style="font-family: 'Courier New'; color: #0000ff;">_Sash</span><span style="color: #000000;">, </span><span style="font-family: 'Courier New'; color: #0000ff;">_Transom</span><span style="color: #000000;">. This value is undefined for horizontal transoms. </span><span style="font-weight: bold; color: #ff0000;">For use only with vertical transom.</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_TransomLeft[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Profile type at the left end of each horizontal transom: </span><span style="font-family: 'Courier New'; color: #0000ff;">_OuterFrame</span><span style="color: #000000;">, </span><span style="font-family: 'Courier New'; color: #0000ff;">_Sash</span><span style="color: #000000;">, </span><span style="font-family: 'Courier New'; color: #0000ff;">_Transom</span><span style="color: #000000;">. This value is undefined for vertical transoms. </span><span style="font-weight: bold; color: #ff0000;">For use only with horizontal transom.</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_TransomRight[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Profile type at the right end of each horizontal transom: </span><span style="font-family: 'Courier New'; color: #0000ff;">_OuterFrame</span><span style="color: #000000;">, </span><span style="font-family: 'Courier New'; color: #0000ff;">_Sash</span><span style="color: #000000;">, </span><span style="font-family: 'Courier New'; color: #0000ff;">_Transom</span><span style="color: #000000;">. This value is undefined for vertical transoms. </span><span style="font-weight: bold; color: #ff0000;">For use only with horizontal transom.</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_TransomThicknessTop[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Frame thickness at the upper end of each transom. If there is another transom at the end of the transom, the given value is the half thickness of the other transom. If the transom is horizontal, the value is 0.</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_TransomThicknessBottom[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Frame thickness at the lower end of each transom. If there is another transom at the end of the transom, the given value is the half thickness of the other transom. If the transom is horizontal, the value is 0.</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_TransomThicknessLeft[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Frame thickness at the left end of each transom. If there is another transom at the end of the transom, the given value is the half thickness of the other transom. If the transom is vertical, the value is 0.</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_TransomThicknessRight[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Frame thickness at the right end of each transom. If there is another transom at the end of the transom, the given value is the half thickness of the other transom. If the transom is vertical, the value is 0.</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_TransomThroughTop[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Holds 1 or </span><span class="f_Variables">True()</span><span style="color: #000000;"> if the transom splits the outer frame at its upper end, 0 or </span><span class="f_Variables">False()</span><span style="color: #000000;"> otherwise. Always holds 0 or </span><span class="f_Variables">False()</span><span style="color: #000000;"> if the transom is horizontal or is a sash transom.</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_TransomThroughBottom[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Holds 1 or </span><span class="f_Variables">True()</span><span style="color: #000000;"> if the transom splits the outer frame at its lower end, 0 or </span><span class="f_Variables">False()</span><span style="color: #000000;"> otherwise. Always holds 0 or </span><span class="f_Variables">False()</span><span style="color: #000000;"> if the transom is horizontal or is a sash transom.</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_TransomThroughLeft[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Holds 1 or </span><span class="f_Variables">True()</span><span style="color: #000000;"> if the transom splits the outer frame at its left end, 0 or </span><span class="f_Variables">False()</span><span style="color: #000000;"> otherwise. Always holds 0 or </span><span class="f_Variables">False()</span><span style="color: #000000;"> if the transom is vertical or is a sash transom.</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_TransomThroughRight[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Holds 1 or </span><span class="f_Variables">True()</span><span style="color: #000000;"> if the transom splits the outer frame at its right end, 0 or </span><span class="f_Variables">False()</span><span style="color: #000000;"> otherwise. Always holds 0 or </span><span class="f_Variables">False()</span><span style="color: #000000;"> if the transom is vertical or is a sash transom.</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_TransomTopTransom[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Index of the transom touching the upper end of each transom (0 if the upper end does not touch a transom).</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_TransomBottomTransom[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Index of the transom touching the lower end of each transom (0 if the lower end does not touch a transom).</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_TransomLeftTransom[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Index of the transom touching the left end of each transom (0 if the left end does not touch a transom).</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_TransomRightTransom[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Index of the transom touching the right end of each transom (0 if the right end does not touch a transom).</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_ExtTransomFinishing[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Returns the category of outside <a href="finition.php">finishing</a> of the frame where the transom is located.</p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="200" style="width: 200px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">_IntTransomFinishing[]</span></p>
</td>
<td width="398" style="width: 398px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Returns the category of inside <a href="finition.php">finishing</a> of the frame where the transom is located.</p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_RightCouplCateg[]</span></p>
<p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_LeftCouplCateg[]</span></p>
<p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TopCouplCateg[]</span></p>
<p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_BottomCouplCateg[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Those arrays respectively contain couplers categories for top, bottom, left and right, at the extremity of the currently computed coupler.</p>
<p style="margin: 0px 0px 0px 13px;">The currently computed coupler is indexed by content of variable <span class="f_Variables">TransomIndex</span>. </p>
<p style="margin: 0px 0px 0px 13px;">See <a href="8_1_1_x.php">release note 8.1.1.073</a>.</p>
</td>
</tr>

</table>
</div>
<p style="text-align: center;"><span style="font-size: 5pt; color: #000000;">&nbsp;</span></p>
<p><span style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;">&nbsp;</span></p>
<p><span style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Le numéro de la traverse en cours de calcul est stocké dans la variable : <span class="f_Variables">NumeroTraverse</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="630" style="width: 630px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarque</span><span style="text-decoration: underline;">:</span></p>
<p style="margin: 0px 0px 0px 13px;">Il est déconseillé, dans certains cas, d'utiliser la variable <span class="f_Variables">NumeroTraverse</span> dans les formules de question car la variable est seulement initialisée une fois que la saisie de la traverse dans la fenêtre est validée.</p>
</td>
</tr>
</table>
</div>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;"> Variable</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_NTraverses</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Nombre total de traverses dans le châssis.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_NTraversesDormant</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Nombre total de traverses de dormant dans le châssis.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_NTraversesOuvrant</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Nombre total de traverses d'ouvrant dans le châssis.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravLong[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Longueur de chaque traverse telle qu'elle a été déterminée par Winpro. La valeur correspond donc à la variable <span class="f_Variables">Dimension</span> de chaque traverse.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravType[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Indique le type de cadre dans lequel est fixé chaque traverse: <span class="f_Variables">_Dormant</span> ou <span class="f_Variables">_Ouvrant</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravX[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Position horizontale de chaque traverse (axe de la traverse verticale ou extrémité gauche de la traverse horizontale). Cette position est donnée par rapport au point 0,0 correspondant au coin inférieur gauche du cadre dormant.</p>
<p style="margin: 0px 0px 0px 13px;"><span style="color: #ff0000;">Winpro ne tient pas compte de l'éventuel repositionnement de la traverse par les variables </span><span class="f_Variables">X0</span><span style="color: #ff0000;">, </span><span class="f_Variables">X1</span><span style="color: #ff0000;">, </span><span class="f_Variables">Y0</span><span style="color: #ff0000;"> et </span><span class="f_Variables">Y1</span><span style="color: #ff0000;">.</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravY[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Position verticale de chaque traverse (axe de la traverse horizontale ou extrémité bas de la traverse verticale). Cette position est donnée par rapport au point 0,0 correspondant au coin inférieur gauche du cadre dormant.</p>
<p style="margin: 0px 0px 0px 13px;"><span style="color: #ff0000;">Winpro ne tient pas compte de l'éventuel repositionnement de la traverse par les variables </span><span class="f_Variables">X0</span><span style="color: #ff0000;">, </span><span class="f_Variables">X1</span><span style="color: #ff0000;">, </span><span class="f_Variables">Y0</span><span style="color: #ff0000;"> et </span><span class="f_Variables">Y1</span><span style="color: #ff0000;">.</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravAxe[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Axe de chaque traverse tel qu'ils sont indiqués sur le dessin du châssis des onglets "Dormant" et "Ouvrant" de la commande client.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravOrigineAxe[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Origine de l'axe de l'axe de chaque traverse: <span class="f_Variables">_Dormant</span> ou <span class="f_Variables">_Traverse</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravOrient[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Orientation de chaque traverse: <span class="f_Variables">_Horizontal</span> ou <span class="f_Variables">_Vertical</span>.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravCat[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Catégorie de chaque traverse.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravEp[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Epaisseur intérieure de chaque traverse. (Correspond à la variable locale <span class="f_Variables">PetiteHauteur</span>)</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravCadre[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Permet de déterminer dans quel vantail et ouvrant est fixé chaque traverse.</p>
<p style="margin: 0px 0px 0px 13px;">La variable renvoie:</p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">0</span> : si la traverse est fixée dans le cadre dormant.</p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">1.1</span> : si la traverse est fixée dans le 1er vantail du 1er ouvrant.</p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">1.2</span> :si la traverse est fixée dans le 2eme vantail du 1er ouvrant</p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">2.1</span> : si la traverse est fixée dans le 1er vantail du 2eme ouvrant.</p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">2.2</span> :si la traverse est fixée dans le 2eme vantail du 2eme ouvrant</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravHaut[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Type de profil à l'extrémité supérieure de chaque traverse verticale: <span class="f_Variables">_Dormant</span>, <span class="f_Variables">_Ouvrant</span>, <span class="f_Variables">_Traverse</span>. La valeur est indéterminée si la traverse est horizontale. <span style="font-weight: bold; color: #ff0000;">A n'utiliser que si la traverse est verticale.</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravBas[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Type de profil à l'extrémité inférieure de chaque traverse verticale: <span class="f_Variables">_Dormant</span>, <span class="f_Variables">_Ouvrant</span>, <span class="f_Variables">_Traverse</span>. La valeur est indéterminée si la traverse est horizontale. <span style="font-weight: bold; color: #ff0000;">A n'utiliser que si la traverse est verticale.</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravGauche[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Type de profil à l'extrémité gauche de chaque traverse horizontale: <span class="f_Variables">_Dormant</span>, <span class="f_Variables">_Ouvrant</span>, <span class="f_Variables">_Traverse</span>. La valeur est indéterminée si la traverse est verticale. <span style="font-weight: bold; color: #ff0000;">A n'utiliser que si la traverse est horizontale.</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravDroite[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Type de profil à l'extrémité droite de chaque traverse horizontale: <span class="f_Variables">_Dormant</span>, <span class="f_Variables">_Ouvrant</span>, <span class="f_Variables">_Traverse</span>. La valeur est indéterminée si la traverse est verticale. <span style="font-weight: bold; color: #ff0000;">A n'utiliser que si la traverse est horizontale.</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravEpaisseurHaut[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Epaisseur du cadre à l'extrémité supérieure de chaque traverse. S'il s'agît d'une autre traverse, la valeur fournie est la demi-épaisseur de cette autre traverse. La valeur est de <span class="f_Variables">O</span> si la traverse est horizontale.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravEpaisseurBas[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Epaisseur du cadre à l'extrémité inférieure de chaque traverse. S'il s'agît d'une autre traverse, la valeur fournie est la demi-épaisseur de cette autre traverse. La valeur est de <span class="f_Variables">O</span> si la traverse est horizontale.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravEpaisseurGauche[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Epaisseur du cadre à l'extrémité gauche de chaque traverse. S'il s'agît d'une autre traverse, la valeur fournie est la demi-épaisseur de cette autre traverse. La valeur est de <span class="f_Variables">O</span> si la traverse est verticale.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravEpaisseurDroite[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Epaisseur du cadre à l'extrémité droite de chaque traverse. S'il s'agît d'une autre traverse, la valeur fournie est la demi-épaisseur de cette autre traverse. La valeur est de <span class="f_Variables">O</span> si la traverse est verticale.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravFilanteHaut[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Indique par <span class="f_Variables">Vrai()</span> ou <span class="f_Variables">Faux() </span>si chaque traverse est filante en haut. Renvoie <span class="f_Variables">Faux()</span> si la traverse est horizontale ou s'il s'agît d'une traverse d'ouvrant.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravFilanteBas[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Indique par <span class="f_Variables">Vrai()</span> ou <span class="f_Variables">Faux() </span>si chaque traverse est filante en bas. Renvoie <span class="f_Variables">Faux()</span> si la traverse est horizontale ou s'il s'agît d'une traverse d'ouvrant.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravFilanteGauche[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Indique par <span class="f_Variables">Vrai()</span> ou <span class="f_Variables">Faux() </span>si chaque traverse est filante à gauche. Renvoie <span class="f_Variables">Faux()</span> si la traverse est verticale ou s'il s'agît d'une traverse d'ouvrant.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravFilanteDroite[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Indique par <span class="f_Variables">Vrai()</span> ou <span class="f_Variables">Faux() </span>si chaque traverse est filante à droite. Renvoie <span class="f_Variables">Faux()</span> si la traverse est verticale ou s'il s'agît d'une traverse d'ouvrant.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravTravHaut[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Renvoie le numéro de la traverse touchant le haut de chaque traverse (vaut <span class="f_Variables">0</span> si le haut ne touche pas de traverse ou si la traverse est horizontale ).</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravTravBas[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Renvoie le numéro de la traverse touchant le bas de chaque traverse (vaut <span class="f_Variables">0</span> si le bas ne touche pas de traverse ou si la traverse est horizontale ).</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravTravGauche[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Renvoie le numéro de la traverse touchant la gauche de chaque traverse (vaut <span class="f_Variables">0</span> si la gauche ne touche pas de traverse ou si la traverse est verticale ). </p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravTravDroite[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Renvoie le numéro de la traverse touchant la droite de chaque traverse (vaut <span class="f_Variables">0</span> si la droite ne touche pas de traverse ou si la traverse est verticale ). </p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravFinition[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Renvoie la catégorie de la <a href="finition.php">finition</a> extérieure saisie pour le cadre dans lequel est fixé la traverse.</p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_TravFinitionInt[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Renvoie la catégorie de la <a href="finition.php">finition</a> intérieure saisie pour le cadre dans lequel est fixé la traverse.</p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_CategCoupleurDroite[]</span></p>
<p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_CategCoupleurGauche[]</span></p>
<p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_CategCoupleurHaut[]</span></p>
<p style="text-align: center; margin: 0px 0px 0px 7px;"><span class="f_Variables">_CategCoupleurBas[]</span></p>
</td>
<td width="410" style="width: 410px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Ces 4 tableaux de variables contiennent respectivement la catégorie des coupleurs en bas, en haut, à gauche et à droite, en bout du coupleur en cours de calcul.</p>
<p style="margin: 0px 0px 0px 13px;">Le coupleur en cours de calcul porte le numéro contenu dans la variable <span class="f_Variables">NumeroTraverse</span>. </p>
<p style="margin: 0px 0px 0px 13px;">Voir <a href="8_1_1_x.php">note de version 8.1.1.073</a>.</p>
</td>
</tr>
</table>
</div>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>
<p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
