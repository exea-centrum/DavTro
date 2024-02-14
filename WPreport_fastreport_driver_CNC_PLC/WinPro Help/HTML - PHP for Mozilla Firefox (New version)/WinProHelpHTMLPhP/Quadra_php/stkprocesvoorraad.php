<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["NED"];
var WinProHelpPageName=["Processen voorraadbeheer"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?stkprocesvoorraad.php"; }
else { parent.quicksync('a8.3'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Processen voorraadbeheer</title>
  <meta name="keywords" content="">
  <meta http-equiv="Content-Type" content="text/php; charset=iso-8859-1">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <link type="text/css" href="default.css" rel="stylesheet">
</head>

<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;"
onload=" AddTitleAndLangFlags();highlight();">

<div id="hmpopupDiv"
style="visibility:hidden; position:absolute; z-index:1000;">
</div>

<table width="100%" border="0" cellspacing="0" cellpadding="5"
bgcolor="#FF8000">
  <tbody>
    <tr valign="middle">
      <td align="left"><p class="p_Heading1"><span id="titlepage"
        class="f_Heading1"></span></p>
      </td>
      <td align="center">
        <div id="langflags">
        </div>
      </td>
      <td align="right"><span style="font-size: 9pt"><a
        href="introduction.php">Top</a>  <a
        href="stkprincipe.php">Previous</a>  <a
        href="stkconfirmation.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="NED">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p></p>

        <p></p>

        <p></p>

        <p></p>

        <p></p>

        <p
        style="text-align:center;margin-left:auto;margin-right:auto;font-size: 15pt"><strong>2
        &ndash; PROCESSEN VAN VOORRAADBEHEER WINPRO</strong></p>

        <p></p>

        <p>Er dient met 3 niveaus rekening gehouden te worden voor
        vooruitziende voorraadbeheer :</p>

        <p style="margin-left:2em;">1 ) De <a
        href="stkreservaties.php">reserveringen</a></p>

        <p style="margin-left:2em;">2 ) De leverancierbestellingen</p>

        <p style="margin-left:2em;">3 ) De fysieke voorraad en de werkelijke
        voorraad</p>

        <p></p>

        <p></p>

        <p></p>

        <p></p>

        <p></p>

        <p></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
