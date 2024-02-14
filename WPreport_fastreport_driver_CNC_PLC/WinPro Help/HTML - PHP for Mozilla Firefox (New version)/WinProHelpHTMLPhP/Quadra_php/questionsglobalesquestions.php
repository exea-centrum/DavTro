<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Questions","Questions"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?questionsglobalesquestions.php"; }
else { parent.quicksync('a4.2.2'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Questions</title>
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
     <a href="questionsglobalesdescription.php">Previous</a>&nbsp;
     <a href="couleur.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p></p>
<p>You may define here the various questions of the list. See <a href="questions.php">Questions</a> for more details.</p>
<p>&nbsp;</p>
<p style="text-align: center;"><img src="img/clip4eng.jpg" width="790" height="295" border="0" alt="clip4eng"></p>
<p>&nbsp;</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p></p>
<p>C'est dans cet onglet que les différentes questions de la liste sont définies. Voir <a href="questions.php">Questions</a> pour plus détails.</p>
<p>&nbsp;</p>
<p style="text-align: center;"><img src="img/clip4fra.jpg" width="794" height="287" border="0" alt="clip4fra"></p>
<p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
