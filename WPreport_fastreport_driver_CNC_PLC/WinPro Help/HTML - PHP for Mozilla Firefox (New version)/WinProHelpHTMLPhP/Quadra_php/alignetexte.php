<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["TextAlign","AligneTexte"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?alignetexte.php"; }
else { parent.quicksync('a2.6.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>AligneTexte</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="AligneTexte" />
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
     <a href="instructions_de_dessin.php">Previous</a>&nbsp;
     <a href="arc.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>This instruction changes the way that text is aligned, relatively to the reference point. The instruction needs 2 parameters; each of which can have these values:</p>
<p style="text-align: center;"><span style="font-size: 5pt; color: #000000;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 1px;"><table align="center" cellspacing="0" cellpadding="0" border="1" style="border-color : #ffffff #696968 #696968 #ffffff; border-style: solid; border-width: 1px; border-spacing:0px;">
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-weight: bold; color: #000000;">First parameter</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-indent: 2px; margin: 0px 0px 0px 8px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">left</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-indent: 2px; margin: 0px 0px 0px 8px;">The left of the text is aligned on the reference point</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">center</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-indent: 2px; margin: 0px 0px 0px 8px;">Text is centered horizontally on the reference point</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">right</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-indent: 2px; margin: 0px 0px 0px 8px;">The right of the text is aligned on the reference point</p>
</td>
</tr>
</table>
</div>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 1px;"><table align="center" cellspacing="0" cellpadding="0" border="1" style="border-color : #ffffff #696968 #696968 #ffffff; border-style: solid; border-width: 1px; border-spacing:0px;">
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-weight: bold; color: #000000;">Second parameter</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 12px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">bottom</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 12px;">The bottom of the text is aligned on the reference point</p>
</td>
</tr>
<tr valign="top" align="left">
<td width="151" bgcolor="#fff7ef" style="width: 151px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">top</span></p>
</td>
<td width="454" bgcolor="#fff7ef" style="width: 454px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 12px;">The top of the text is aligned on the reference point</p>
</td>
</tr>
</table>
</div>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p>The default alignment is <span class="f_Variables">left</span>, <span class="f_Variables">bottom</span>. </p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax</span>:</p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">textAlign (left, top)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">textAlign (left, bottom)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">textAlign (center, top)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">textAlign (center, bottom)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">textAlign (right, top)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">textAlign (right, bottom)</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">textAlign (left, top)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Text (200, 200, top left)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">textAlign (right, bottom)</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Text (200, 200, right bottom)</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0039.jpg" width="151" height="78" border="0" alt="clip0039"></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette instruction modifie l'alignement du texte par rapport à un point de référence. La fonction prend deux paramètres, qui peuvent avoir l'une de ces valeurs :</p>
<p style="text-align: center;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Premier paramètre</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">Gauche</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">La gauche du texte est alignée sur le point de référence</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">Centre</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Le texte est centré horizontalement sur le point de référence</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">Droite</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">La droite du texte est alignée sur le point de référence</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Second paramètre</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">Bas</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">La base du texte est alignée sur le point de référence</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="151" style="width: 151px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">Haut</span></p>
</td>
<td width="454" style="width: 454px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Le dessus du texte est aligné sur le point de référence</p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p>L'alignement par défaut est <span class="f_Variables">Gauche</span>,<span class="f_Variables"> Bas</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">AligneTexte (Gauche, Haut)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">AligneTexte (Gauche, Bas)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">AligneTexte (Centre, Haut)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">AligneTexte (Centre, Bas)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">AligneTexte (Droite, Haut)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">AligneTexte (Droite, Bas)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">AligneTexte (Gauche, Haut)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Texte (200, 200, top left)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">AligneTexte (Droite, Bas)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Texte (200, 200, right bottom)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0039.jpg" width="151" height="78" border="0" alt="clip0039"></p>
<p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
