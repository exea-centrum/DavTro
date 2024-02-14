<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Text","Texte"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?texte.php"; }
else { parent.quicksync('a2.6.35'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Texte</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Texte" />
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
     <a href="temps.php">Previous</a>&nbsp;
     <a href="texture.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p><span style="color: #000000;">&nbsp;</span></p>
<p><span style="color: #000000;">This instruction draws a text, using the current text settings.</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Text (x, y, texte to display)</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 1px;"><table align="center" cellspacing="0" cellpadding="0" border="1" style="border-color : #dadada #696968 #696968 #dadada; border-style: solid; border-width: 1px; border-spacing:0px;">
<tr valign="top" align="left">
<td valign="middle" width="94" bgcolor="#fff7ef" style="width: 94px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-weight: bold; color: #000000;">Parameter</span></p>
</td>
<td width="510" bgcolor="#fff7ef" style="width: 510px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 12px;"><span style="font-weight: bold; color: #000000;">Description</span></p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="94" bgcolor="#fff7ef" style="width: 94px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">x, y</span></p>
</td>
<td width="510" bgcolor="#fff7ef" style="width: 510px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 12px;"><span style="color: #000000;">Text coordinates. </span>The start point depends on the current alignment settings (see <a href="alignetexte.php">TextAlign</a>)</p>
</td>
</tr>
<tr valign="top" align="left">
<td valign="middle" width="94" bgcolor="#fff7ef" style="width: 94px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="text-align: center;"><span style="font-family: 'Courier New'; color: #0000ff;">text</span></p>
</td>
<td width="510" bgcolor="#fff7ef" style="width: 510px; background-color: #fff7ef; border-color : #696968 #dadada #dadada #696968; border-style: solid; border-width: 1px;"><p style="margin: 0px 0px 0px 12px;"><span style="color: #000000;">Text to display. This text may be typed between quotes (double or simple), which is optional, unless the text contains parenthesis, commas or quotes.</span></p>
</td>
</tr>
</table>
</div>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example</span>:</p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Text (1000, 1000, "Text with simple 'quote' ")</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Texte (1000, 800, Text)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0074eng.jpg" width="194" height="108" border="0" alt="clip0074"></p>
<p style="margin: 14px 0px 0px 0px;"><span style="font-size: 8pt; font-family: 'MS Sans Serif'; color: #000000;">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette instruction permet d'afficher un texte, en utilisant la fonte et la couleur de texte actuellement sélectionnées.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Texte (x, y, texte à afficher)</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef" border="1" style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
<tr valign="middle" align="left">
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-weight: bold;">Paramètres</span></p>
</td>
<td width="510" style="width: 510px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold;">Description</span></p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"> </span><span class="f_Variables">x, y</span></p>
</td>
<td width="510" style="width: 510px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Coordonnées du texte. La position du point de départ par rapport au texte dépend du mode d'alignement courant (voir <a href="alignetexte.php">AligneTexte</a>)</p>
</td>
</tr>
<tr valign="middle" align="left">
<td width="94" style="width: 94px; border: solid 1px #c0c0c0;"><p style="text-align: center;"><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"> </span><span class="f_Variables">texte à afficher</span></p>
</td>
<td width="510" style="width: 510px; border: solid 1px #c0c0c0;"><p style="margin: 0px 0px 0px 13px;">Texte à afficher. Ce texte peut être mis entre guillemets, mais ce n'est pas obligatoire, sauf si le texte contient des parenthèses ou des guillemets (simples ou doubles).</p>
</td>
</tr>
</table>
</div>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Texte (1000, 1000, "Texte avec simples 'guillemets' ")</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Texte (1000, 800, Texte)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0074.gif" width="192" height="76" border="0" alt="clip0074"></p>

</td></tr></table>
</div>

</body>
</html>
