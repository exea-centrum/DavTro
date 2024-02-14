<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Texture","Texture"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?texture.php"; }
else { parent.quicksync('a2.6.36'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Texture</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Texture" />
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
     <a href="texte.php">Previous</a>&nbsp;
     <a href="indentation_style.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>This instruction is used to obtain a texture from an image stored into a BMP file.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Texture (file name, bitmap_width, bitmap_height, w, h)</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Settings</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"> </span><span class="f_Variables">file_name</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Name of the file containing the image. The path may be added to this name</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">bitmap_width</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Bitmap width into mm (before scaling)</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">bitmap_height</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Bitmap height into mm (before scaling)</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">w</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Texture width into mm (before scaling)</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">h</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Texture height into mm (before scaling)</p>
</td>
</tr>
</table>
</div>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example</span>:</p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Texture (logo.bmp, 250, 187.5, 100, 30)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip208.gif" width="244" height="140" border="0" alt="Clip208"></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette instruction permet d'obtenir une texture à partir d'une image stockée dans un fichier BMP.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Texture (nom_fichier, largeur_bitmap, hauteur_bitmap, l, h)</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
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
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">largeur_bitmap</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Largeur du bitmap en mm (avant mise à l'échelle)</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">hauteur_bitmap</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Hauteur du bitmap en mm (avant mise à l'échelle)</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">l</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Largeur de la texture en mm (avant mise à l'échelle)</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="189" style="width: 189px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">h</span></p>
</td>
<td width="416" style="width: 416px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Hauteur de la texture en mm (avant mise à l'échelle)</p>
</td>
</tr>
</table>
</div>
<p class="p_Interligne"><span class="f_Interligne" style="text-decoration: underline;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Texture (logo.bmp, 250, 187.5, 100, 30)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip208.gif" width="244" height="140" border="0" alt="Clip208"></p>

</td></tr></table>
</div>

</body>
</html>
