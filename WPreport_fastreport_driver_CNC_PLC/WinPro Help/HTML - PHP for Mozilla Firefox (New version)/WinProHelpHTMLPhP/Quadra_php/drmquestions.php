<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Questions","Questions"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?drmquestions.php"; }
else { parent.quicksync('a5.2.4'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Questions</title>
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
        href="introduction.php">Top</a>� <a
        href="drmsituationmaconnerie.php">Previous</a>� <a
        href="drmvariables.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>�</p>

        <p>This page lets you define the questions for this outer frame. See
        the general page on <a href="questions.php">questions</a> for more
        information.��</p>

        <p>�</p>

        <p style="text-align: center; margin: 14px 0px 14px 0px;"><img
        src="img/clip0131eng.jpg" width="574" height="364" border="0"
        alt="clip0131eng"></p>

        <p style="text-align: center;">�</p>
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
      <td align="left"><p>�</p>

        <p>Cet onglet d�finit les questions pour ce dormant. Reportez-vous �
        l'aide g�n�rale sur les <a href="questions.php">questions</a> pour plus
        de pr�cisions.</p>

        <p>�</p>

        <p style="text-align: center;"><span
        style="font-size: 5pt;"></span><img src="img/clip0265.gif" width="554"
        height="257" border="0" alt="clip0265"></p>

        <p style="text-align: center;">�</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
