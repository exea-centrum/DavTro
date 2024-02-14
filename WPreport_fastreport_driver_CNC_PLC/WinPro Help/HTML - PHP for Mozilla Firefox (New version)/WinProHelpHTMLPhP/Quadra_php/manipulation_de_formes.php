<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Shapes handling (only suitable for composed panels and composed glazings)","Manipulation de formes (disponible seulement dans les panneaux fabriqu�s et vitrages compos�s)"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?manipulation_de_formes.php"; }
else { parent.quicksync('a2.5.5'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>Manipulation de formes</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="Forme" />
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
      <p class="p_Heading1"><span class="f_Heading1" style="font-size: 5pt; font-weight: normal;">&nbsp;</span></p>
      <p class="p_Heading1"><span id="titlepage" class="f_Heading1"></span></p>
    </td>
	<td align="center">
     <div id="langflags"></div>
    </td>
    <td align="right">
     <span style="font-size: 9pt">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="executer.php">Previous</a>&nbsp;
     <a href="copierforme.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p style="background: #fffff2;"><span style="color: #000000;">&nbsp;</span></p>
<p>Several functions and variables let you handle shapes in special panels and composed glasses.</p>
<p>Here is how it works : WinPro stores in memory a list of shapes (rectangle, trapezium, bow, etc.) ; you can apply transformation functions on those shapes (copy, expand, shrink, cut, ...); you can also get their characteristics (width, height, ...).</p>
<p><span style="font-size: 18pt; font-weight: bold;">&nbsp;</span></p>
<p><span style="font-size: 18pt; font-weight: bold;">Shape handling variables</span></p>
<p><span style="font-size: 18pt; font-weight: bold;">&nbsp;</span></p>
<p>Each shape is described in a series of variables, stored in arrays. Here is the list of the variables:</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 1px;"><table align="center" cellspacing="0" cellpadding="0" border="1" style="border-color : #dadada #696968 #696968 #dadada; border-style: solid; border-width: 1px; border-spacing:0px;">
<tr valign="top" align="left">
<td width="170" bgcolor="#fff7ef" style="width: 170px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-weight: bold;">Variable</span></p>
</td>
<td width="435" bgcolor="#fff7ef" style="width: 435px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 9px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="170" bgcolor="#fff7ef" style="width: 170px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span class="f_Variables">ShapeType[]</span></p>
</td>
<td width="435" bgcolor="#fff7ef" style="width: 435px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 9px;">Type of shape (<span class="f_Variables">Rectangle</span>, <span class="f_Variables">Trapezium</span>, <span class="f_Variables">Bow</span>, &#8230;); see table below</p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="170" bgcolor="#fff7ef" style="width: 170px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span class="f_Variables">ShapeOrientation[]</span></p>
</td>
<td width="435" bgcolor="#fff7ef" style="width: 435px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 9px;">Shape orientation (<span class="f_Variables">Left</span> or <span class="f_Variables">Right</span>). This value is undefined for shapes with no orientation.</p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="170" bgcolor="#fff7ef" style="width: 170px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span class="f_Variables">ShapeDimA[]</span></p>
</td>
<td width="435" bgcolor="#fff7ef" style="width: 435px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 9px;">First shape dimension</p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="170" bgcolor="#fff7ef" style="width: 170px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span class="f_Variables">ShapeDimB[]</span></p>
</td>
<td width="435" bgcolor="#fff7ef" style="width: 435px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 9px;">Second shape dimension</p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="170" bgcolor="#fff7ef" style="width: 170px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span class="f_Variables">ShapeDim...[]</span></p>
</td>
<td width="435" bgcolor="#fff7ef" style="width: 435px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 9px;">etc...</p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="170" bgcolor="#fff7ef" style="width: 170px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span class="f_Variables">ShapeDimL[]</span></p>
</td>
<td width="435" bgcolor="#fff7ef" style="width: 435px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 9px;">Twelvth and last shape dimension</p>
</td>
</tr>
</table>
</div>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p>See the <a href="creerforme.php">shape table</a> for the exact meaning of each dimension (<span class="f_Variables">ShapeDimA</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;"> </span>is dimension<span style="color: #000000;"> </span><span class="f_Variables">A</span><span style="color: #000000;">, </span><span class="f_Variables">ShapeDimB</span><span style="color: #000000;"> </span>is dimension<span style="color: #000000;"> </span><span class="f_Variables">B</span><span style="color: #000000;">, </span>etc...). These variables are automatically maintain when you apply transformation functions to the shapes.</p>
<p>&nbsp;</p>
<p>The index of each shape is used to access the corresponding values in these arrays of variables. (e.g. <span class="f_Variables">ShapeType[1]</span> returns the type of the shape at index 1). Unused dimensions are set to 0.</p>
<p>&nbsp;</p>
<p>The shape index must be between 1 and 100 inclusively. Beyond those limits, WinPro will generate an error.</p>
<p>Shapes at indexes 1 to 3 are predefined :</p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 18px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>Shape <span style="font-weight: bold;">1</span> is the panel or glass dimension ;</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 18px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>Shape <span style="font-weight: bold;">2</span> is the 'external' dimension of the glass or panel, which means until the axis of the first transom touching the panel, the axes of the leaf containing the transom, or the external side of the outer frame.  </td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 18px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>Shape <span style="font-weight: bold;">3</span> is similar to shape 2, except that the wall penetration is deduced on the sides that are near the outer frame. You can create other shapes, either starting from these 3 basic shapes, or by creating new shapes from scratch, using the <a href="creerforme.php">CreateShape</a> instruction.</td></tr></table></div><p>&nbsp;</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Une s�rie de fonctions et de variables vous permettent de manipuler des formes et leurs dimensions dans les panneaux fabriqu�s.</p>
<p>Le principe de fonctionnement est le suivant : WinPro maintient en m�moire une liste de formes (rectangle, trap�ze, cintre, etc.) ; vous pouvez effectuer sur ces formes une s�rie d'op�rations de transformation (copier, agrandir, scinder, �) ; vous pouvez aussi obtenir un certain nombre de leurs caract�ristiques (largeur, hauteur, etc.). </p>
<p style="text-align: center;"><span style="font-size: 9pt;">&nbsp;</span></p>
<p><span style="font-size: 18pt; font-weight: bold;">Variables de manipulation de forme:</span></p>
<p>&nbsp;</p>
<p>A chaque forme correspond une s�rie de variables, stock�e dans des tableaux de variables, dont voici la liste :</p>
<p style="text-align: center;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="170" style="width: 170px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Variable</span></p>
</td>
<td width="435" style="width: 435px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="170" style="width: 170px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">TypeForme[]</span></p>
</td>
<td width="435" style="width: 435px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Type de la forme (<span class="f_Variables">Rectangle</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">, </span><span class="f_Variables">Trapeze</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">, </span><span class="f_Variables">Cintre</span><span style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;">,</span> �) </p>
<p style="margin: 0px 0px 0px 13px;"><a href="creerforme.php">Liste compl�te des formes </a></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="170" style="width: 170px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">OrientationForme[]</span></p>
</td>
<td width="435" style="width: 435px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Orientation de la forme (<span style="color: #0000ff;">Gauche</span> ou <span style="color: #0000ff;">Droite</span>). La valeur est ind�termin�e pour les formes dans lesquelles l'orientation n'a pas de signification</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="170" style="width: 170px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">DimAForme[]</span></p>
</td>
<td width="435" style="width: 435px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Premi�re dimension de la forme correspondant � la largeur</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="170" style="width: 170px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">DimBForme[]</span></p>
</td>
<td width="435" style="width: 435px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Seconde dimension de la forme correspondant � la hauteur</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="170" style="width: 170px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-size: 11pt; font-family: 'Courier New'; color: #0000ff;">Dim...Forme[]</span></p>
</td>
<td width="435" style="width: 435px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">etc...</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="170" style="width: 170px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">DimLForme[]</span></p>
</td>
<td width="435" style="width: 435px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Douzi�me et derni�re dimension de la forme</p>
</td>
</tr>
</table>
</div>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p>Reportez-vous au <a href="creerforme.php">tableau des formes</a> pour la signification exacte de chaque dimension (<span style="color: #0000ff;">DimAForme</span> correspond � la cote A, <span style="color: #0000ff;">DimBForme</span> � la cote B, etc). Ces variables sont automatiquement maintenues lorsque vous manipulez les formes � l'aide des fonctions d�crites ci-dessous. </p>
<p>&nbsp;</p>
<p>L'index de chaque forme correspond � l'index � utiliser pour obtenir les valeurs correspondantes dans ces tableaux de variables (p.ex. <span style="color: #0000ff;">TypeForme[1]</span> donne le type de la forme d'index 1). Les dimensions non utilis�e pour une forme ont une valeur de z�ro.</p>
<p>&nbsp;</p>
<p>L'index d'une forme doit �tre compris entre 1 et 100. En dehors de ces limites, WinPro g�n�rera un message d'erreur. </p>
<p>&nbsp;</p>
<p>Les formes d'index 1 � 3 sont pr�d�finies : </p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>la forme <span style="font-weight: bold;">1</span> repr�sente la dimension du panneau ; </td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>la forme <span style="font-weight: bold;">2</span> repr�sente la dimension 'hors tout' du panneau, c'est-�-dire la dimension jusqu'� l'axe de la premi�re traverse jouxtant le panneau, ou jusqu'� l'entraxe entre 2 vantaux, ou jusqu'� l'ext�rieur du dormant jouxtant le panneau (il s'ag�t donc d'une dimension plus 'commerciale' que 'technique') ;</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td>la forme <span style="font-weight: bold;">3</span> est calcul�e � partir de la dimension hors tout, d�duction faite des p�n�trations ma�onneries pour les c�t�s du panneau jouxtant le dormant ext�rieur. Vous avez le droit de modifier ces formes ; vous pouvez aussi en cr�er d'autres, soit sur base de ces deux premi�res formes, soit en utilisant l'instruction <a href="creerforme.php">CreerForme</a>. </td></tr></table></div><p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
