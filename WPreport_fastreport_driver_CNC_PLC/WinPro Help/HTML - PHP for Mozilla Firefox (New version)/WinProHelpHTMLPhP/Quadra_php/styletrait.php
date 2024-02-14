<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["PenStyle","StyleTrait"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?styletrait.php"; }
else { parent.quicksync('a2.6.33'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>StyleTrait</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="StyleTrait" />
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
     <a href="secteur.php">Previous</a>&nbsp;
     <a href="temps.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Changes the pen style. You can select one of these styles: </p>
<p style="margin: 0px 0px 0px 24px;"><span class="f_Variables" style="font-weight: bold;">solid</span></p>
<p style="margin: 0px 0px 0px 24px;"><span class="f_Variables" style="font-weight: bold;">dot</span></p>
<p style="margin: 0px 0px 0px 24px;"><span class="f_Variables" style="font-weight: bold;">dash</span></p>
<p style="margin: 0px 0px 0px 24px;"><span class="f_Variables" style="font-weight: bold;">axis</span></p>
<p class="p_Interligne"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="color: #000000; text-decoration: underline;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="color: #000000; text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">PenStyle (solid)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">PenStyle (dot)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">PenStyle (dash)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">PenStyle (axis)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">PenWidth</span><span class="f_Variables"> (1)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">PenStyle </span><span class="f_Variables">(solid)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Line (25, 25, 200, 25)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">PenStyle</span><span class="f_Variables"> (dot)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Line (25, 50, 200, 50)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">PenStyle</span><span class="f_Variables"> (dash)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Line (25, 75, 200, 75)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">PenStyle</span><span class="f_Variables"> (Axis)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Line (25, 100, 200, 100)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0072.jpg" width="382" height="219" border="0" alt="clip0072"></p>
<p><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">&nbsp;</span></p>
<p><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">&nbsp;</span></p>
<p><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>

</td></tr></table>

</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Indique le style du trait. On peut utiliser les styles suivants: </p>
<p style="margin: 0px 0px 0px 27px;"><span class="f_Variables" style="font-weight: bold;">Plein</span></p>
<p style="margin: 0px 0px 0px 27px;"><span class="f_Variables" style="font-weight: bold;">Pointille</span></p>
<p style="margin: 0px 0px 0px 27px;"><span class="f_Variables" style="font-weight: bold;">Tiret</span></p>
<p style="margin: 0px 0px 0px 27px;"><span class="f_Variables" style="font-weight: bold;">Axe</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">StyleTrait (Plein)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">StyleTrait (Pointille)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">StyleTrait (Tiret)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">StyleTrait (Axe)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">EpaisseurTrait (1)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">StyleTrait (Plein)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ligne (25, 25, 200, 25)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">StyleTrait (POintille)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ligne (25, 50, 200, 50)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">StyleTrait (Tiret)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ligne (25, 75, 200, 75)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">StyleTrait (Axe)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ligne (25, 100, 200, 100)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0072.jpg" width="382" height="219" border="0" alt="clip0072"></p>

</td></tr></table>
</div>

</body>
</html>
