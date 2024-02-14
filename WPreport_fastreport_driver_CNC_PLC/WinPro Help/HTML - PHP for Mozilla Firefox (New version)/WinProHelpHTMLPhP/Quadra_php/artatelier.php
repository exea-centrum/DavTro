<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Factory","Atelier","Werkplaats"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?artatelier.php"; }
else { parent.quicksync('a4.5.11'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Atelier</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="" />
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
     <a href="artdxf.php">Previous</a>&nbsp;
     <a href="articlesfiltres.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<p style="background: #fffff2;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="font-size: 5pt; color: #000000;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">If you have the Factory workplaces documents module, this page lets you define on which workplace the article must be mentionned.</span></p>
<p style="text-align: center; margin: 14px 0px 14px 0px;"><img src="img/clip0103eng.jpg" width="602" height="139" border="0" alt="clip0103eng"></p>
<p style="background: #fffff2;"><span style="color: #000000;">You just need to select on which workplace(s) the article must appear.</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Si vous disposez du module Postes d'atelier, cet onglet vous permet de définir sur quels postes l'article doit apparaître.</p>
<p style="text-align: center;"><img src="img/clip0103.gif" width="602" height="124" border="0" alt="clip0103"></p>
<p>Il vous suffit de cocher le ou les postes sur lesquels l'article doit apparaître.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

</td></tr></table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<p style="background: #fffff2;"><span style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="font-size: 5pt; color: #000000;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">Wanneer u beschikt over de module PA "Werkposten", laat deze pagina u toe om te bepalen op welke van deze werkposten dit artikel dient weergegeven te worden.</span></p>
<p style="text-align: center; margin: 14px 0px 14px 0px;"><img src="img/clip0103eng.jpg" width="602" height="139" border="0" alt="clip0103eng"></p>
<p style="background: #fffff2;"><span style="color: #000000;">U dient enkel te selecteren op welke werkpost(en) dit artikel wordt weergegeven.</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">&nbsp;</span></p>

</td></tr></table>
</div>

</body>
</html>
