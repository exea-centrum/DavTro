<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Brush","Brosse"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?brosse.php"; }
else { parent.quicksync('a2.6.6'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Brosse</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Brosse" />
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
     <a href="bezier.php">Previous</a>&nbsp;
     <a href="cadre2.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p class="p_Interligne"><span style="color: #000000;">This instruction lets you define the filling style of shapes such as rectangles, ellipses, etc... There are several filling types, and some types have variants. </span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" border="1" style="border-color : #dadada #696968 #696968 #dadada; border-style: solid; border-width: 1px; border-spacing:0px;">
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-weight: bold; color: #000000;">Style</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">Cross</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 13px;">Horizontal and vertical hatches</p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">BDiagonal</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 13px;">Diagonal hatches from bottom left to top right.</p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">FDiagonal</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 13px;">Diagonal hatches from bottom right to top left.</p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">Horizontal</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 13px;">Horizontal hatches</p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">Bitmap</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 13px;">Uses a BMP file to fill the area. The size of the file may not exceed 64K, due to a Windows limitation.</p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">Colour</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 13px;">Uniform coloured filling (see <a href="couleurs.php">colour definition</a>)</p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; height: 9px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">Vertical</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; height: 9px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 13px;">Vertical hatches</p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">Hollow</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 13px;">The shapes will be outlined with the current pen, but no kind of filling (the background will remain untouched)</p>
</td>
</tr>
</table>
</div>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax</span>:</p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Brush (hatch type, </span><span class="f_Variables" style="font-weight: bold; text-decoration: underline;">colour name</span><span class="f_Variables" style="font-weight: bold;">)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Brush (hatch type, </span><span class="f_Variables" style="font-weight: bold; text-decoration: underline;">red level</span><span class="f_Variables" style="font-weight: bold;">, </span><span class="f_Variables" style="font-weight: bold; text-decoration: underline;">green level</span><span class="f_Variables" style="font-weight: bold;">, </span><span class="f_Variables" style="font-weight: bold; text-decoration: underline;">blue level</span><span class="f_Variables" style="font-weight: bold;">)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Brush (bitmap, file name)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Brush (hollow)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Brush (colour, </span><span class="f_Variables" style="font-weight: bold; text-decoration: underline;">colour name</span><span class="f_Variables" style="font-weight: bold;">)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Brush (colour, </span><span class="f_Variables" style="font-weight: bold; text-decoration: underline;">red level</span><span class="f_Variables" style="font-weight: bold;">, </span><span class="f_Variables" style="font-weight: bold; text-decoration: underline;">green level</span><span class="f_Variables" style="font-weight: bold;">, </span><span class="f_Variables" style="font-weight: bold; text-decoration: underline;">blue level</span><span class="f_Variables" style="font-weight: bold;">)</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brush (fDiagonale, 255, 128, 0)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Bar (100, 300, 250, 100)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0044.jpg" width="286" height="156" border="0" alt="clip0044"></p>
<p style="margin: 0px 0px 0px 24px;"><span class="f_ImageCaption">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p><span style="color: #000000;">&nbsp;</span></p>
<p>Permet de spécifier le type de remplissage des formes géométriques ou libres telles que rectangle, cercle, etc... Il existe plusieurs styles de remplissages, et certains de ces styles comportent en outre des variantes.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Style</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">Croisee</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Trace des hachures horizontales et verticales. </p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">Diagonale1</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Trace des hachures en diagonale du bas gauche vers le haut droit. </p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">Diagonale2</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Trace des hachures en diagonale du bas droit vers le haut gauche. </p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">Horizontale</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Trace des hachures horizontales. </p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>
<p style="text-align: center;"><span class="f_Variables">Image</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Utilise un fichier de type BMP pour effectuer le remplissage. La taille de ce fichier ne peut dépasser 64K.</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">Pleine</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Remplissage avec un fond de couleur unie (voir <a href="couleurs.php">définition de couleur</a>)</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">Verticale</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Trace des hachures verticales. </p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">Vide</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Laisse intacte la zone de remplissage</p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Brosse (type_hachure, </span><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;"><a href="couleurs.php">nom_couleur</a></span><span class="f_Variables" style="font-weight: bold;">)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Brosse (type_hachure, </span><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;"><a href="couleurs.php">niveau_Rouge</a></span><span class="f_Variables" style="font-weight: bold;">, </span><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;"><a href="couleurs.php">niveau_Vert</a></span><span class="f_Variables" style="font-weight: bold;">, </span><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;"><a href="couleurs.php">niveau_Bleu</a></span><span class="f_Variables" style="font-weight: bold;">)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Brosse (Image, nom_fichier)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Brosse (Vide)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Brosse (Pleine, </span><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;"><a href="couleurs.php">nom_couleur</a></span><span class="f_Variables" style="font-weight: bold;">)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Brosse (Pleine, </span><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;"><a href="couleurs.php">niveau_Rouge</a></span><span class="f_Variables" style="font-weight: bold;">, </span><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;"><a href="couleurs.php">niveau_Vert</a></span><span class="f_Variables" style="font-weight: bold;">, </span><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;"><a href="couleurs.php">niveau_Bleu</a></span><span class="f_Variables" style="font-weight: bold;">)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brosse (Diagonale2, 255, 128, 0)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Rectangle (100, 300, 250, 100)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0044.jpg" width="286" height="156" border="0" alt="clip0044"></p>

</td></tr></table>
</div>

</body>
</html>
