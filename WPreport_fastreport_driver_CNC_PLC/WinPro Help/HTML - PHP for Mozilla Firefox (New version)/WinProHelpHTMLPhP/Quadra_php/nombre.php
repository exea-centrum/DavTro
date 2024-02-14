<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Number","Nombre"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?nombre.php"; }
else { parent.quicksync('a2.6.24'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Nombre</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Nombre" />
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
     <a href="modetexte.php">Previous</a>&nbsp;
     <a href="orientationtexte.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p class="p_Interligne"><span style="color: #000000;">This instruction draws a number, using the current text settings.</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="color: #000000; text-decoration: underline;">Syntax:</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">Number (x, y, value[, decimals])</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 1px;"><table align="center" cellspacing="0" cellpadding="0" border="1" style="border-color : #ffffff #696968 #696968 #ffffff; border-style: solid; border-width: 1px; border-spacing:0px;">
<tr valign="top" align="left">
<td width="113" bgcolor="#fff7ef" style="width: 113px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-weight: bold; color: #000000;">Parameter</span></p>
</td>
<td width="491" bgcolor="#fff7ef" style="width: 491px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 10px;"><span style="font-weight: bold; color: #000000;">Description</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="113" bgcolor="#fff7ef" style="width: 113px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">x, y</span></p>
</td>
<td width="491" bgcolor="#fff7ef" style="width: 491px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 10px;"><span style="color: #000000;">Text coordinates, start point from the text depending on current alignment value (see <a href="alignetexte.php">TextAlign</a>)</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="113" bgcolor="#fff7ef" style="width: 113px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">value</span></p>
</td>
<td width="491" bgcolor="#fff7ef" style="width: 491px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 10px;"><span style="color: #000000;">Value to display. This may be any valid arithmetic expression.</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="113" bgcolor="#fff7ef" style="width: 113px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">decimals</span></p>
</td>
<td width="491" bgcolor="#fff7ef" style="width: 491px; background-color: #fff7ef; border-color :  #ffffff #ffffff ; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 10px;"><span style="color: #000000;">Number of decimals to display. If this parameter is omitted, no decimal will be used</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Number (100, 800, 20.5, 0)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Number (100, 600, Pi(), 8)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0063.jpg" width="138" height="130" border="0" alt="clip0063"></p>
<p style="margin: 0px 0px 0px 24px;">&nbsp;</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette instruction permet d'afficher un nombre, en utilisant la fonte et la couleur de texte actuellement sélectionnées.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Nombre (x, y, valeur[, decimales])</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="113" style="width: 113px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Paramètres</span></p>
</td>
<td width="491" style="width: 491px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="113" style="width: 113px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">x, y</span></p>
</td>
<td width="491" style="width: 491px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Coordonnées du texte. La position du point de départ par rapport au texte dépend du mode d'alignement courant (voir <a href="alignetexte.php">AligneTexte</a>)</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="113" style="width: 113px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">valeur</span></p>
</td>
<td valign="middle" width="491" style="width: 491px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Valeur à afficher. Il peut s'agir d'un nombre ou d'une formule</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="113" style="width: 113px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span class="f_Variables">decimales</span></p>
</td>
<td width="491" style="width: 491px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Nombre de décimales à utiliser dans l'affichage du nombre. Si ce paramètre n'est pas indiqué, aucune décimale ne sera utilisée</p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Nombre (100, 800, 20.5, 0)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Nombre (100, 600, Pi(), 8)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0063.jpg" width="138" height="130" border="0" alt="clip0063"><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"> </span></p>
<p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
