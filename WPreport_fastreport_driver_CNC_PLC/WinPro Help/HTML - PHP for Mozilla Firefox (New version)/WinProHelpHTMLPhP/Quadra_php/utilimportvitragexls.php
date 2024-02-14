<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["FRA"];
var WinProHelpPageName=["Import vitrage (.xls"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?utilimportvitragexls.php"; }
else { parent.quicksync('a9.30'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Import vitrage (.xls)</title>
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
    <td align="right">
     <span style="font-size: 9pt">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="utilimportvitrage.php">Previous</a>&nbsp;
     <a href="utilimportbase.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>Enter topic text here.</p>

</td></tr></table>
</div>

</body>
</html>
