<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Decorative panels","Panneaux d&#233;coratifs"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?panneaudeco.php"; }
else { parent.quicksync('a5.10'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Panneaux décoratifs</title>
  <meta name="keywords" content="Panels,Decorative panels">
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
        href="panelsfilter.php">Previous</a>  <a
        href="decdescription.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>The decorative panel table lets you enumerate all the decorative panels
        that you use. A decorative panel is such that you need to use the whole
        panel each time; whatever is the waste you create after cutting, it is not reuseable.</p>

        <p style="text-align: center;"><img src="img/clip0200eng.jpg"
        width="660" height="467" border="0" alt="clip0200eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Code</span>: Code for this panel.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -13px; margin: 0px 0px 0px 13px;"> </p>
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
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>La table de panneaux décoratifs permet d'énumérer les panneaux que
        vous utilisez. Un panneau décoratif est un panneau à recouper aux
        dimensions souhaitées, utilisé dans sa totalité à chaque fois, et dont
        les chutes ne sont pas réutilisables. </p>

        <p style="text-align: center;"><img src="img/clip0200fra.jpg"
        width="658" height="462" border="0" alt="clip0200fra"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Code</span>: Code du panneau
                décoratif.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -13px; margin: 0px 0px 0px 13px;"> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
