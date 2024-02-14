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
if(top.frames.length==0)  { top.location.href="index.php?ventilatorsquestions.php"; }
else { parent.quicksync('a5.13.2'); }
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
    <td align="right">
     <span style="font-size: 9pt">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="ventilatorsdescription.php">Previous</a>&nbsp;
     <a href="ventilatorsvariables.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
	
      <td align="left"><p>This page lets you define the questions for this ventilator. See the general page on <a href="questions.php">questions</a> 
	  for more information.</p>

<p style="text-align: center;"><img src="img/clip0166eng.jpg" width="580" height="374" border="0" alt="clip0166eng"></p>

        <p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>Cet onglet permet de définir une liste de questions
        pour cet aérateur. Reportez vous à la page générale sur les <span
        style="color: #0000ff;"><a href="questions.php">questions</a></span>
        pour plus de détails. </p>

        <p style="text-align: center;"><img src="img/clip0472.zoom78.gif"
        width="554" height="167" border="0" alt="clip0472"></p>

        <p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>

</body>
</html>
