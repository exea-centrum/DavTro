<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["CreateTransformation","CreerTransformation"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?creertransformation.php"; }
else { parent.quicksync('a2.6.18.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>CreerTransformation</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="CreerTransformation" />
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
    <td align="right">
     <span style="font-size: 9pt">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="fonctions_de_transformation.php">Previous</a>&nbsp;
     <a href="transx_et_transy.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>This function initializes the type and properties of the transformation. </p>
<p>Those properties are then used for computing the new obejct coordinates. Those objects are drawn again using functions  <span class="f_Variables">TransX</span> and <span class="f_Variables">TransY</span>.</p>
<p>Transformations may be combined, applied successively in sequence, respecting a hierarchy (maximum 20 simultaneously).</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Test := CreateTransformation (Type, p1, p2, p3, p4)</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">Type</span></p>
</td>
<td width="64" style="width: 64px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 13px;"><span class="f_Variables" style="font-weight: bold;">p1</span></p>
</td>
<td width="55" style="width: 55px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">p2</span></p>
</td>
<td width="69" style="width: 69px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">p3</span></p>
</td>
<td width="48" style="width: 48px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">p4</span></p>
</td>
<td width="492" style="width: 492px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 8px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">1</span></p>
</td>
<td width="64" style="width: 64px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 13px;">Tx</p>
</td>
<td width="55" style="width: 55px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Ty</p>
</td>
<td width="69" style="width: 69px; border: solid 1px #c0c0c0;"><p style="text-align: center;">0</p>
</td>
<td width="48" style="width: 48px; border: solid 1px #c0c0c0;"><p style="text-align: center;">0</p>
</td>
<td width="492" style="width: 492px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 8px;">Translation using a vector of origin (0, 0) toward (Tx, Ty)</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; height: 14px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">2</span></p>
</td>
<td width="64" style="width: 64px; height: 14px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 13px;">x</p>
</td>
<td width="55" style="width: 55px; height: 14px; border: solid 1px #c0c0c0;"><p style="text-align: center;">y</p>
</td>
<td width="69" style="width: 69px; height: 14px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Fx</p>
</td>
<td width="48" style="width: 48px; height: 14px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Fy</p>
</td>
<td width="492" style="width: 492px; height: 14px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 8px;">Homothety using centre (x, y) and factor (Fx, Fy)</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">3</span></p>
</td>
<td width="64" style="width: 64px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 13px;">x1</p>
</td>
<td width="55" style="width: 55px; border: solid 1px #c0c0c0;"><p style="text-align: center;">y1</p>
</td>
<td width="69" style="width: 69px; border: solid 1px #c0c0c0;"><p style="text-align: center;">angle A</p>
</td>
<td width="48" style="width: 48px; border: solid 1px #c0c0c0;"><p style="text-align: center;">0</p>
</td>
<td width="492" style="width: 492px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 8px;">Rotation around centre (x, y) and angle A</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">4</span></p>
</td>
<td width="64" style="width: 64px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 13px;">x1</p>
</td>
<td width="55" style="width: 55px; border: solid 1px #c0c0c0;"><p style="text-align: center;">y1</p>
</td>
<td width="69" style="width: 69px; border: solid 1px #c0c0c0;"><p style="text-align: center;">x2</p>
</td>
<td width="48" style="width: 48px; border: solid 1px #c0c0c0;"><p style="text-align: center;">y2</p>
</td>
<td width="492" style="width: 492px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 8px;">Orthogonal symmetry using a line passing through points (x1, y1) and (x2, y2)</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">5</span></p>
</td>
<td width="64" style="width: 64px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 14px;">x1</p>
</td>
<td width="55" style="width: 55px; border: solid 1px #c0c0c0;"><p style="text-align: center;">y1</p>
</td>
<td width="69" style="width: 69px; border: solid 1px #c0c0c0;"><p style="text-align: center;">0</p>
</td>
<td width="48" style="width: 48px; border: solid 1px #c0c0c0;"><p style="text-align: center;">0</p>
</td>
<td width="492" style="width: 492px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 8px;">Central symmetry using centre (x1, y1)...equivalent to a homothety (x1,y1,-1,-1)</p>
</td>
</tr>
</table>
</div>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">A := CreateTransformation (1, 500, 500, 0, 0)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">X0 := 100</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Y0 := 100</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">X1 := 400</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Y1 := 200</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Circle (X0, Y0, 50)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Line (X0, Y0, X1, Y1)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">X00 := TransX (X0, Y0)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Y00 := TransY (X0, Y0)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">X11 := TransX (X1, Y1)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Y11 := TransY (X1, Y1)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Circle (X00, Y00, 50)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Line (X00, Y00, X11, Y11)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">A := DeleteTransformation ()</span></p>
<p style="margin: 0px 0px 0px 37px;"><img src="img/clip0285.jpg" width="310" height="242" border="0" alt="Clip0285"></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette fonction d&#233;finit le type et propri&#233;t&#233; de la transformation, il s'agit donc d'une initialisation. </p>
<p>Ces propri&#233;t&#233;s seront ensuite exploit&#233;es pour du calcul des nouvelles coordonn&#233;es des objets &#224; redessiner &#224; l'aide des fonctions <span class="f_Variables">TransX</span> et <span class="f_Variables">TransY</span>.</p>
<p>Les transformations sont combinables, c'est-&#224;-dire qu'on peut les appliquer en s&#233;rie selon une hi&#233;rarchie (maximum 20 simultan&#233;ment).</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Test := CreerTransformation (Type, p1, p2, p3, p4)</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">Type</span></p>
</td>
<td width="64" style="width: 64px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 13px;"><span class="f_Variables" style="font-weight: bold;">p1</span></p>
</td>
<td width="55" style="width: 55px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">p2</span></p>
</td>
<td width="69" style="width: 69px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">p3</span></p>
</td>
<td width="48" style="width: 48px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables" style="font-weight: bold;">p4</span></p>
</td>
<td width="492" style="width: 492px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 8px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">1</span></p>
</td>
<td width="64" style="width: 64px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 13px;">Tx</p>
</td>
<td width="55" style="width: 55px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Ty</p>
</td>
<td width="69" style="width: 69px; border: solid 1px #c0c0c0;"><p style="text-align: center;">0</p>
</td>
<td width="48" style="width: 48px; border: solid 1px #c0c0c0;"><p style="text-align: center;">0</p>
</td>
<td width="492" style="width: 492px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 8px;">Translation selon un vecteur dont l'origine est (0, 0) vers (Tx, Ty)</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; height: 14px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">2</span></p>
</td>
<td width="64" style="width: 64px; height: 14px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 13px;">x</p>
</td>
<td width="55" style="width: 55px; height: 14px; border: solid 1px #c0c0c0;"><p style="text-align: center;">y</p>
</td>
<td width="69" style="width: 69px; height: 14px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Fx</p>
</td>
<td width="48" style="width: 48px; height: 14px; border: solid 1px #c0c0c0;"><p style="text-align: center;">Fy</p>
</td>
<td width="492" style="width: 492px; height: 14px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 8px;">Homoth&#233;tie de centre (x, y) et de facteur (Fx, Fy)</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">3</span></p>
</td>
<td width="64" style="width: 64px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 13px;">x1</p>
</td>
<td width="55" style="width: 55px; border: solid 1px #c0c0c0;"><p style="text-align: center;">y1</p>
</td>
<td width="69" style="width: 69px; border: solid 1px #c0c0c0;"><p style="text-align: center;">angle A</p>
</td>
<td width="48" style="width: 48px; border: solid 1px #c0c0c0;"><p style="text-align: center;">0</p>
</td>
<td width="492" style="width: 492px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 8px;">Rotation de centre (x, y) et d'angle A</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">4</span></p>
</td>
<td width="64" style="width: 64px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 13px;">x1</p>
</td>
<td width="55" style="width: 55px; border: solid 1px #c0c0c0;"><p style="text-align: center;">y1</p>
</td>
<td width="69" style="width: 69px; border: solid 1px #c0c0c0;"><p style="text-align: center;">x2</p>
</td>
<td width="48" style="width: 48px; border: solid 1px #c0c0c0;"><p style="text-align: center;">y2</p>
</td>
<td width="492" style="width: 492px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 8px;">Sym&#233;trie orthogonale selon la droite passant par (x1, y1) et (x2, y2)</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">5</span></p>
</td>
<td width="64" style="width: 64px; border: solid 1px #c0c0c0;"><p style="text-align: center; margin: 0px 0px 0px 14px;">x1</p>
</td>
<td width="55" style="width: 55px; border: solid 1px #c0c0c0;"><p style="text-align: center;">y1</p>
</td>
<td width="69" style="width: 69px; border: solid 1px #c0c0c0;"><p style="text-align: center;">0</p>
</td>
<td width="48" style="width: 48px; border: solid 1px #c0c0c0;"><p style="text-align: center;">0</p>
</td>
<td width="492" style="width: 492px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 8px;">Sym&#233;trie centrale de centre (x1, y1)...cela revient &#224; une homoth&#233;tie (x1,y1,-1,-1)</p>
</td>
</tr>
</table>
</div>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">A := CreerTransformation (1, 500, 500, 0, 0)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">X0 := 100</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Y0 := 100</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">X1 := 400</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Y1 := 200</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Cercle (X0, Y0, 50)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ligne (X0, Y0, X1, Y1)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">X00 := TransX (X0, Y0)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Y00 := TransY (X0, Y0)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">X11 := TransX (X1, Y1)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Y11 := TransY (X1, Y1)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Cercle (X00, Y00, 50)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ligne (X00, Y00, X11, Y11)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">A := SupprimerTransformation ()</span></p>
<p style="margin: 0px 0px 0px 37px;"><img src="img/clip0285.jpg" width="310" height="242" border="0" alt="Clip0285"><span class="f_Variables"></span></p>

</td></tr></table>
</div>

</body>
</html>
