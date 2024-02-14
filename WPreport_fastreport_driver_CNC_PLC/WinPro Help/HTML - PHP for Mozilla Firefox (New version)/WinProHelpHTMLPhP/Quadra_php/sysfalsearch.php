<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["False Arch","Faux Cintrages"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?sysfalsearch.php"; }
else { parent.quicksync('a4.4.6'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Faux cintrages</title>
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
     <a href="sysintextview.php">Previous</a>&nbsp;
     <a href="articles.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>This page lets you define which kind of false arch is allowed for the system.</p>
<p>&nbsp;</p>
<p style="text-align: center;"><img src="img/clip0123eng.jpg" width="418" height="262" border="0" alt="clip0123eng"></p>
<p style="background: #fffff2;"><span style="color: #000000;">Check the boxes that apply to the kinds of false arches that are allowed.</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cet onglet vous permet d'autoriser les différents types de faux cintrages compatibles pour le système.</p>
<p>&nbsp;</p>
<p style="text-align: center;"><img src="img/clip0123.gif" width="352" height="234" border="0" alt="clip0123"></p>
<p style="background: #fffff2;"><span style="color: #000000;">Sélectionnez ici les faux cintrages applicables dans ce système.</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">&nbsp;</span></p>

</td></tr></table>
</div>

</body>
</html>
