<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Bitmap","Image"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?image.php"; }
else { parent.quicksync('a2.6.21'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Image</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Bitmap,Image" />
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
     <a href="fonte.php">Previous</a>&nbsp;
     <a href="ligne.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p class="p_Interligne"><span style="color: #000000;">&nbsp;</span></p>
<p class="p_Interligne"><span style="color: #000000;">This instruction draws an image from a bitmap file.</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="color: #000000; text-decoration: underline;">Syntax:</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">Bitmap (file name, x, y, width, height[, transparent colour not available with 24bits bmp])</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" border="1" style="border-color : #ffffff #696968 #696968 #ffffff; border-style: solid; border-width: 1px; border-spacing:0px;">
<tr valign="top" align="left">
<td width="189" bgcolor="#fff7ef" style="width: 189px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-weight: bold; color: #000000;">Parameter</span></p>
</td>
<td width="416" bgcolor="#fff7ef" style="width: 416px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; color: #000000;">Description</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="189" bgcolor="#fff7ef" style="width: 189px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">file name</span></p>
</td>
<td width="416" bgcolor="#fff7ef" style="width: 416px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Complete file name of the bitmap.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="189" bgcolor="#fff7ef" style="width: 189px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">x, y</span></p>
</td>
<td width="416" bgcolor="#fff7ef" style="width: 416px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Lower left corner coordinates</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="189" bgcolor="#fff7ef" style="width: 189px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">width</span></p>
</td>
<td width="416" bgcolor="#fff7ef" style="width: 416px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Width of the image, in mm.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="189" bgcolor="#fff7ef" style="width: 189px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">height</span></p>
</td>
<td width="416" bgcolor="#fff7ef" style="width: 416px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">Height of the image, in mm.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="189" bgcolor="#fff7ef" style="width: 189px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">transparent colour</span></p>
</td>
<td width="416" bgcolor="#fff7ef" style="width: 416px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 13px;"><span style="color: #000000;">This optional parameter lets you define a transparent colour. Pixels from the bitmap in this colour will not be drawn.</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Image (c:\images\logo.bmp, 50, 500, 900, 300)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0060.jpg" width="467" height="219" border="0" alt="clip0060"></p>
<p style="margin: 0px 0px 0px 24px;"><span class="f_ImageCaption">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette instruction permet de dessiner une image stockée sur disque en format BMP.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Image (nom_fichier, x, y, largeur, hauteur[, couleur_transparente pour bmp pas en 24bits])</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Paramètres</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"> </span><span class="f_Variables">nom_fichier</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Nom du fichier contenant l'image. Le chemin d'accès peut être ajouté à ce nom</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">x, y</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Coordonnées du coin inférieur gauche de l'image</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">largeur</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Largeur de l'image (en mm avant mise à l'échelle)</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">hauteur</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Hauteur de l'image (en mm avant mise à l'échelle)</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">couleur_transparente</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Ce paramètre optionnel permet de définir une couleur 'transparente'. Les points de cette couleur ne seront pas affichés. Paramètre valide si bitmap autre que 24bits</p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Image (c:\images\logo.bmp, 50, 500, 900, 300)</span></p>
<p><img src="img/clip0060.jpg" width="467" height="219" border="0" alt="clip0060"></p>

</td></tr></table>
</div>

</body>
</html>
