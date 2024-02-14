<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["CreateShape","CreerForme"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?creerforme.php"; }
else { parent.quicksync('a2.5.5.4'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>CreerForme</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="CreerForme" />
<meta http-equiv="Content-Type" content="text/php; charset=ISO-8859-1" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link type="text/css" href="default.css" rel="stylesheet" />
</head>
<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;" onload="AddTitleAndLangFlags();highlight();">
<div id="hmpopupDiv" style="visibility:hidden; position:absolute; z-index:1000;"></div>


<table width="100%" border="0" cellspacing="0" cellpadding="5" bgcolor="#FF8000">
  <tr valign="middle">
    <td align="left">
      <p class="p_Heading1"><span class="f_Heading1" style="font-size: 6pt; font-weight: normal;">&nbsp;</span></p>
      <p class="p_Heading1"><span id="titlepage" class="f_Heading1"></span></p>
    </td>
	<td align="center">
     <div id="langflags"></div>
    </td>
    <td align="right">
     <span style="font-size: 9pt">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="couperformeverticalement.php">Previous</a>&nbsp;
     <a href="elargirforme.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p style="background: #fffff2;"><span style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">&nbsp;</span></p>
<p>This instruction lets you create a shape, giving all its characteristics.  </p>
<p>The exact syntax depends on each shape, because it depends on the number and nature of dimensions needed. Some shapes also need an orientation (Left or Right). In such cases, the orientation must be given before the first dimension. The table below details the needed parameters for each shape.</p>
<p>Each parameter may be an arithmetic expression. You can also replace the list of dimension parameters by a reference to a single array, which will contain all the necessary dimensions. </p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">CreateShape (index, type, [orientation,] dimensions)</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example 1:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Create a trapezium at index 20  </span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CreateShape (20, TrapezimuShape, Left, Width-200, Height-200, (Height-200)/10)</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example 2:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Create a trapezium at index 20</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Dim : 3</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Dim [1] := Width-200</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Dim [2] := Height-200</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Dim [3] := Dim[2]/10</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CreateShape (20, TrapeziumShape, Left, Dim)</span></p>
<p><span style="font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>
<p>Here is a list of every shape supported by WinPro, with the dimensions each shape needs (in alphabetical order from A to L) :  </p>
<p style="text-align: center; margin: 0px 0px 0px 1px;"><span style="color: #000000;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold; color: #000000;">Shape name</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Dimensions</span></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Orientation</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">Rectangle</span></p>
</td>
<td width="219" style="width: 219px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0001.gif" width="119" height="111" border="0" alt="clip0001"></p>
</td>
<td width="203" style="width: 203px; border: solid 1px #c0c0c0;"><br>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">No</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">Trapezium</span></p>
</td>
<td width="219" style="width: 219px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Left</p>
<p style="text-align: center;"><img src="img/clip0002.gif" width="107" height="111" border="0" alt="clip0002"></p>
</td>
<td width="203" style="width: 203px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Right</p>
<p style="text-align: center;"><img src="img/clip0003.gif" width="109" height="109" border="0" alt="clip0003"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Yes</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">RightAngledTriangle</span></p>
</td>
<td width="219" style="width: 219px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Left</p>
<p style="text-align: center;"><img src="img/clip0004.gif" width="111" height="105" border="0" alt="clip0004"></p>
</td>
<td width="203" style="width: 203px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Right</p>
<p style="text-align: center;"><img src="img/clip0005.gif" width="109" height="107" border="0" alt="clip0005"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Yes</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">TruncatedCorner</span></p>
</td>
<td width="219" style="width: 219px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Left</p>
<p style="text-align: center;"><img src="img/clip0006.gif" width="111" height="109" border="0" alt="clip0006"></p>
</td>
<td width="203" style="width: 203px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Right</p>
<p style="text-align: center;"><img src="img/clip0007.gif" width="115" height="115" border="0" alt="clip0007"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Yes</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">RightAngledTrapezium</span></p>
</td>
<td width="219" style="width: 219px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Left</p>
<p style="text-align: center;"><img src="img/clip0008eng.jpg" width="111" height="109" border="0" alt="clip0008"></p>
</td>
<td width="203" style="width: 203px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Right</p>
<p style="text-align: center;"><img src="img/clip0009.gif" width="109" height="107" border="0" alt="clip0009"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Yes</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">Bow</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0010.gif" width="117" height="109" border="0" alt="clip0010"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">No</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">FullBow</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0011.gif" width="111" height="107" border="0" alt="clip0011"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">No</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">HalfFullBow</span></p>
</td>
<td width="219" style="width: 219px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Left</p>
<p style="text-align: center;"><img src="img/clip0012.gif" width="107" height="113" border="0" alt="clip0012"></p>
</td>
<td width="203" style="width: 203px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Right</p>
<p style="text-align: center;"><img src="img/clip0013.gif" width="99" height="107" border="0" alt="clip0013"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Yes</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">FlatBow</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0014.gif" width="101" height="109" border="0" alt="clip0014"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">No</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">HalfFlatBow</span></p>
</td>
<td width="219" style="width: 219px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Left</p>
<p style="text-align: center;"><img src="img/clip0015.gif" width="109" height="107" border="0" alt="clip0015"></p>
</td>
<td width="203" style="width: 203px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Right</p>
<p style="text-align: center;"><img src="img/clip0016.gif" width="107" height="105" border="0" alt="clip0016"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Yes</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">TruncatedBow</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0017.gif" width="113" height="103" border="0" alt="clip0017"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">No</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">RoundedCorner</span></p>
</td>
<td width="219" style="width: 219px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Left</p>
<p style="text-align: center;"><img src="img/clip0018.gif" width="111" height="107" border="0" alt="clip0018"></p>
</td>
<td width="203" style="width: 203px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Right</p>
<p style="text-align: center;"><img src="img/clip0019.gif" width="115" height="107" border="0" alt="clip0019"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Yes</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">Triangle</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0020.gif" width="115" height="113" border="0" alt="clip0020"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">No</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">Quadrilateral</span></p>
</td>
<td width="219" style="width: 219px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Left</p>
<p style="text-align: center;"><img src="img/clip0021.gif" width="111" height="113" border="0" alt="clip0021"></p>
</td>
<td width="203" style="width: 203px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Right</p>
<p style="text-align: center;"><img src="img/clip0022.gif" width="117" height="113" border="0" alt="clip0022"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Yes</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold; color: #0000ff;">SimpleTrapezium</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0023.gif" width="113" height="107" border="0" alt="clip0023"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">No</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">TruncatedCorner2</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0024.gif" width="111" height="111" border="0" alt="clip0024"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">No</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"> </span><span class="f_Variables" style="font-weight: bold;">Pentagon</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0025.gif" width="119" height="113" border="0" alt="clip0025"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">No</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"> </span><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">TruncatedTrapezium</span></p>
</td>
<td width="219" style="width: 219px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Left</p>
<p style="text-align: center;"><img src="img/clip0026.gif" width="111" height="113" border="0" alt="clip0026"></p>
</td>
<td width="203" style="width: 203px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Right</p>
<p style="text-align: center;"><img src="img/clip0027.gif" width="117" height="109" border="0" alt="clip0027"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Yes</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">BasketHandle</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0028.gif" width="131" height="123" border="0" alt="clip0028"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">No</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">TruncatedBasketHandle</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0029.gif" width="111" height="119" border="0" alt="clip0029"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">No</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">BullsEye</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0030.gif" width="103" height="95" border="0" alt="clip0030"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">No</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">FullBasketHandle</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0031.gif" width="111" height="111" border="0" alt="clip0031"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">No</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">HalfBasketHandle</span></p>
</td>
<td width="219" style="width: 219px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Left</p>
<p style="text-align: center;"><img src="img/clip0032.gif" width="103" height="111" border="0" alt="clip0032"></p>
</td>
<td width="203" style="width: 203px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Right</p>
<p style="text-align: center;"><img src="img/clip0033.gif" width="101" height="109" border="0" alt="clip0033"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Yes</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">BasketHandle5</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0034.gif" width="117" height="111" border="0" alt="clip0034"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">No</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">TruncatedBasketHandle5</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0035.gif" width="107" height="111" border="0" alt="clip0035"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">No</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">FullBasketHandle5</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0036.gif" width="115" height="115" border="0" alt="clip0036"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">No</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">HalfBasketHandle5</span></p>
</td>
<td width="219" style="width: 219px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Left</p>
<p style="text-align: center;"><img src="img/clip0037.gif" width="107" height="115" border="0" alt="clip0037"></p>
</td>
<td width="203" style="width: 203px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Right</p>
<p style="text-align: center;"><img src="img/clip0038.gif" width="105" height="107" border="0" alt="clip0038"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Yes</p>
</td>
</tr>
</table>
</div>
<p style="text-align: center; margin: 0px 0px 0px 1px;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;">&nbsp;</span></p>
<p style="text-align: center; margin: 0px 0px 0px 1px;"><span style="color: #000000;">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p><span style="color: #000000;">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Cette formule vous permet de créer une forme, en en donnant les dimensions, comme si vous saisissiez une dimension de fenêtre dans WinPro (toutefois, la largeur est toujours donnée avant la hauteur). </span></p>
<p class="p_Textestd"><span class="f_Textestd">La syntaxe exacte varie en fonction de chaque forme, en fonction du nombre de dimensions nécessaires. De plus, il faut préciser l'orientation pour certaines formes (dans ce cas, il faut indiquer gauche ou droite avant la première dimension). </span></p>
<p class="p_Textestd"><span class="f_Textestd">Chacun de ces paramètres peut être une expression arithmétique. De plus, pour chaque forme, la liste des dimensions peut être remplacée par une variable de type tableau, qui contient les dimensions nécessaires. </span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">CreerForme (index, type, [orientation,] dimensions)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple 1 :</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Creer un trapèze à l'index 20 </span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CreerForme (20, Trapeze, Gauche, Largeur-200, Hauteur-200, (Hauteur-200)/10)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple 2 :</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Creer un trapèze à l'index 20 </span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Dim : 3</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Dim [1] := Largeur-200</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Dim [2] := Hauteur-200</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Dim [3] := Dim[2]/10</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CreerForme (20, Trapeze, Gauche, Dim)</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p>&nbsp;</p>
<p>Voici, sous forme de croquis, la liste des formes, si nécessaire en version droite et gauche. Les dimensions sont à donner dans l'ordre alphabétique des cotes indiquées sur les croquis :</p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Nom de la forme</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Dimensions</span></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Orientation</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">Rectangle</span></p>
</td>
<td width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0001.gif" width="119" height="111" border="0" alt="clip0001"></p>
</td>
<td style="border: solid 1px #c0c0c0;"><br>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Non</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">Trapeze</span></p>
</td>
<td width="142" style="width: 142px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Gauche</p>
<p style="text-align: center;"><img src="img/clip0002.gif" width="107" height="111" border="0" alt="clip0002"></p>
</td>
<td width="142" style="width: 142px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Droite</p>
<p style="text-align: center;"><img src="img/clip0003.gif" width="109" height="109" border="0" alt="clip0003"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Oui</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">TriangleRectangle</span></p>
</td>
<td width="142" style="width: 142px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Gauche</p>
<p style="text-align: center;"><img src="img/clip0004.gif" width="111" height="105" border="0" alt="clip0004"></p>
</td>
<td width="142" style="width: 142px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Droite</p>
<p style="text-align: center;"><img src="img/clip0005.gif" width="109" height="107" border="0" alt="clip0005"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Oui</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">CoinCasse</span></p>
</td>
<td width="142" style="width: 142px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Gauche</p>
<p style="text-align: center;"><img src="img/clip0006.gif" width="111" height="109" border="0" alt="clip0006"></p>
</td>
<td width="142" style="width: 142px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Droite</p>
<p style="text-align: center;"><img src="img/clip0007.gif" width="115" height="115" border="0" alt="clip0007"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Oui</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">TrapezeRectangle</span></p>
</td>
<td width="142" style="width: 142px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Gauche</p>
<p style="text-align: center;"><img src="img/clip0008eng.jpg" width="111" height="109" border="0" alt="clip0008"></p>
</td>
<td width="142" style="width: 142px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Droite</p>
<p style="text-align: center;"><img src="img/clip0009.gif" width="109" height="107" border="0" alt="clip0009"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Oui</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">Cintre</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0010.gif" width="117" height="109" border="0" alt="clip0010"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Non</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">PleinCintre</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0011.gif" width="111" height="107" border="0" alt="clip0011"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Non</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">DemiPleinCintre</span></p>
</td>
<td width="142" style="width: 142px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Gauche</p>
<p style="text-align: center;"><img src="img/clip0012.gif" width="107" height="113" border="0" alt="clip0012"></p>
</td>
<td width="142" style="width: 142px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Droite</p>
<p style="text-align: center;"><img src="img/clip0013.gif" width="99" height="107" border="0" alt="clip0013"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Oui</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">CintrePlat</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0014.gif" width="101" height="109" border="0" alt="clip0014"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Non</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">DemiCintrePlat</span></p>
</td>
<td width="142" style="width: 142px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Gauche</p>
<p style="text-align: center;"><img src="img/clip0015.gif" width="109" height="107" border="0" alt="clip0015"></p>
</td>
<td width="142" style="width: 142px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Droite</p>
<p><img src="img/clip0016.gif" width="107" height="105" border="0" alt="clip0016"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Oui</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">CintreTronque</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0017.gif" width="113" height="103" border="0" alt="clip0017"></p>
<p>&nbsp;</p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Non</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">CoinArrondi</span></p>
</td>
<td width="142" style="width: 142px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Gauche</p>
<p style="text-align: center;"><img src="img/clip0018.gif" width="111" height="107" border="0" alt="clip0018"></p>
</td>
<td width="142" style="width: 142px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Droite</p>
<p style="text-align: center;"><img src="img/clip0019.gif" width="115" height="107" border="0" alt="clip0019"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Oui</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">Triangle</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0020.gif" width="115" height="113" border="0" alt="clip0020"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Non</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">Quadrilatere</span></p>
</td>
<td width="142" style="width: 142px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Gauche</p>
<p style="text-align: center;"><img src="img/clip0021.gif" width="111" height="113" border="0" alt="clip0021"></p>
</td>
<td width="142" style="width: 142px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Droite</p>
<p style="text-align: center;"><img src="img/clip0022.gif" width="117" height="113" border="0" alt="clip0022"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Oui</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">SimpleTrapeze</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0023.gif" width="113" height="107" border="0" alt="clip0023"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Non</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">CoinCasse2</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0024.gif" width="111" height="111" border="0" alt="clip0024"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Non</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"> </span><span class="f_Variables" style="font-weight: bold;">Pentagone</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0025.gif" width="119" height="113" border="0" alt="clip0025"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Non</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"> </span><span class="f_Variables" style="font-weight: bold;">TrapezeTronque</span></p>
</td>
<td width="142" style="width: 142px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Gauche</p>
<p style="text-align: center;"><img src="img/clip0026.gif" width="111" height="113" border="0" alt="clip0026"></p>
</td>
<td width="142" style="width: 142px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Droite</p>
<p style="text-align: center;"><img src="img/clip0027.gif" width="117" height="109" border="0" alt="clip0027"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Oui</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">AnsePanier</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0028.gif" width="131" height="123" border="0" alt="clip0028"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Non</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">AnsePanierTronquee</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0029.gif" width="111" height="119" border="0" alt="clip0029"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Non</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">OeilDeBoeuf</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0030.gif" width="103" height="95" border="0" alt="clip0030"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Non</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">AnsePanierComplete</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0031.gif" width="111" height="111" border="0" alt="clip0031"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Non</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">DemiAnsePanier</span></p>
</td>
<td width="142" style="width: 142px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Gauche</p>
<p style="text-align: center;"><img src="img/clip0032.gif" width="103" height="111" border="0" alt="clip0032"></p>
</td>
<td width="142" style="width: 142px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Droite</p>
<p style="text-align: center;"><img src="img/clip0033.gif" width="101" height="109" border="0" alt="clip0033"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Oui</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">AnsePanier5</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0034.gif" width="117" height="111" border="0" alt="clip0034"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Non</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">AnsePanier5Tronquee</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0035.gif" width="107" height="111" border="0" alt="clip0035"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Non</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">AnsePanier5Complete</span></p>
</td>
<td colspan="2" width="284" style="width: 284px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><img src="img/clip0036.gif" width="115" height="115" border="0" alt="clip0036"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Non</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="227" style="width: 227px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">DemiAnsePanier5</span></p>
</td>
<td width="142" style="width: 142px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Gauche</p>
<p style="text-align: center;"><img src="img/clip0037.gif" width="107" height="115" border="0" alt="clip0037"></p>
</td>
<td width="142" style="width: 142px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Droite</p>
<p style="text-align: center;"><img src="img/clip0038.gif" width="105" height="107" border="0" alt="clip0038"></p>
</td>
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Oui</p>
</td>
</tr>
</table>
</div>
<p style="text-align: center;">&nbsp;</p>
<p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
