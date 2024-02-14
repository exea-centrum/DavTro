<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Outer frame","Cadre dormant"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?faq3a.php"; }
else { parent.quicksync('a10.3.1'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Cadre dormant</title>
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
        href="introduction.php">Top</a>  <a href="faq3.php">Previous</a>  <a
        href="faq3b.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p style="margin: 8px 0px 0px 0px;"><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #0000ff;">X0,
        X1, Y0, Y1 </span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">:
        </span><span
        style="font-family: 'Tahoma'; color: #000000;">correspond to variables </span><span class="f_Variables">X0</span><span
        style="font-family: 'Tahoma'; color: #000000;">, </span><span
        class="f_Variables">X1</span><span
        style="font-family: 'Tahoma'; color: #000000;">, </span><span
        class="f_Variables">Y0</span><span
        style="font-family: 'Tahoma'; color: #000000;">, </span><span
        class="f_Variables">Y1</span><span
        style="font-family: 'Tahoma'; color: #000000;">.</span></p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #808080;">x0,
        x1, y0, y1</span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #0000ff;"> </span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">:
        </span><span
        style="font-family: 'Tahoma'; color: #000000;">correspond to variables </span><span class="f_Variables">
		SegmentX0 []</span><span
        style="font-family: 'Tahoma'; color: #000000;">, </span><span
        class="f_Variables">SegmentX1 []</span><span
        style="font-family: 'Tahoma'; color: #000000;">, </span><span
        class="f_Variables">SegmentY0 []</span><span
        style="font-family: 'Tahoma'; color: #000000;">, </span><span
        class="f_Variables">SegmentY1 []</span><span
        style="font-family: 'Tahoma'; color: #000000;">.</span></p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #00dd00;">a1,
        a2</span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #0000ff;"></span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #000000;"> :
        </span><span
        style="font-family: 'Tahoma'; color: #000000;">correspond to
        variables </span><span class="f_Variables">SegmentAssembly1
        []</span><span style="font-family: 'Tahoma'; color: #000000;">,
        </span><span class="f_Variables">SegmentAssembly2 []</span><span
        style="font-family: 'Tahoma'; color: #000000;">.</span></p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #ff0000;">1,
        2</span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #0000ff;"> </span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">:
        </span><span
        style="font-family: 'Tahoma'; color: #000000;">correspond to
        variables </span><span class="f_Variables">Angle1</span><span
        style="font-family: 'Tahoma'; color: #000000;"> and </span><span
        class="f_Variables">Angle2</span><span
        style="font-family: 'Tahoma'; color: #000000;">.</span></p>

        <p style="margin: 8px 0px 0px 0px;"><img src="img/embim3.jpg" width="22"
        height="22" vspace="1" hspace="1" border="0" alt=""><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">… :
        </span><span
        style="font-family: 'Tahoma'; color: #000000;">correspond to
        variable </span><span class="f_Variables">SegmentIndex</span><span
        style="font-family: 'Tahoma'; color: #000000;">. </span></p>

        <p><span style="font-family: 'Tahoma'; color: #000000;">- - - The dashes represent the optional presence of an outer frame
		profile at the bottom.</span></p>

        <p><span style="font-family: 'Tahoma'; color: #000000;"> </span></p>

        <p style="text-align: center;"><img src="img/clip0357.jpg" width="250"
        height="250" border="0" alt="Clip0357"><img src="img/clip0355.zoom100.jpg"
        width="249" height="249" border="0" alt="Clip0355"><img
        src="img/clip0356.jpg" width="250" height="250" border="0"
        alt="Clip0356"><img src="img/clip0358.jpg" width="250" height="250"
        border="0" alt="Clip0358"><img src="img/clip0359.jpg" width="250"
        height="250" border="0" alt="Clip0359"><img src="img/clip0360.jpg"
        width="250" height="250" border="0" alt="Clip0360"></p>

        <p style="text-align: center;"><span class="f_ImageCaption"> </span></p>

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
      <td align="left"><p style="margin: 8px 0px 0px 0px;"><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #0000ff;">X0,
        X1, Y0, Y1 </span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">:
        </span><span
        style="font-family: 'Tahoma'; color: #000000;">correspondent aux
        variables </span><span class="f_Variables">X0</span><span
        style="font-family: 'Tahoma'; color: #000000;">, </span><span
        class="f_Variables">X1</span><span
        style="font-family: 'Tahoma'; color: #000000;">, </span><span
        class="f_Variables">Y0</span><span
        style="font-family: 'Tahoma'; color: #000000;">, </span><span
        class="f_Variables">Y1</span><span
        style="font-family: 'Tahoma'; color: #000000;">.</span></p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #808080;">x0,
        x1, y0, y1</span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #0000ff;"> </span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">:
        </span><span
        style="font-family: 'Tahoma'; color: #000000;">correspondent aux
        variables </span><span class="f_Variables">X0Segment []</span><span
        style="font-family: 'Tahoma'; color: #000000;">, </span><span
        class="f_Variables">X1Segment []</span><span
        style="font-family: 'Tahoma'; color: #000000;">, </span><span
        class="f_Variables">Y0Segment []</span><span
        style="font-family: 'Tahoma'; color: #000000;">, </span><span
        class="f_Variables">Y1Segment []</span><span
        style="font-family: 'Tahoma'; color: #000000;">.</span></p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #00dd00;">a1,
        a2</span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #0000ff;"></span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #000000;"> :
        </span><span
        style="font-family: 'Tahoma'; color: #000000;">correspondent aux
        variables </span><span class="f_Variables">Assemblage1Segment
        []</span><span style="font-family: 'Tahoma'; color: #000000;">,
        </span><span class="f_Variables">Assemblage2Segment []</span><span
        style="font-family: 'Tahoma'; color: #000000;">.</span></p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #ff0000;">1,
        2</span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #0000ff;"> </span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">:
        </span><span
        style="font-family: 'Tahoma'; color: #000000;">correspondent aux
        variables </span><span class="f_Variables">Angle1</span><span
        style="font-family: 'Tahoma'; color: #000000;">et </span><span
        class="f_Variables">Angle2</span><span
        style="font-family: 'Tahoma'; color: #000000;">.</span></p>

        <p style="margin: 8px 0px 0px 0px;"><img src="img/embim3.jpg" width="22"
        height="22" vspace="1" hspace="1" border="0" alt=""><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">… :
        </span><span
        style="font-family: 'Tahoma'; color: #000000;">correspondent à la
        variable </span><span class="f_Variables">NumeroSegment</span><span
        style="font-family: 'Tahoma'; color: #000000;">. </span></p>

        <p><span style="font-family: 'Tahoma'; color: #000000;">- - - Les
        traits en pointillé représentent la présence facultative d</span><span
        style="font-family: 'Tahoma'; color: #000000;">&rsquo;</span><span
        style="font-family: 'Tahoma'; color: #000000;">un dormant en partie
        basse.</span></p>

        <p><span style="font-family: 'Tahoma'; color: #000000;"> </span></p>

        <p style="text-align: center;"><img src="img/clip0357.jpg" width="250"
        height="250" border="0" alt="Clip0357"><img src="img/clip0355.zoom100.jpg"
        width="249" height="249" border="0" alt="Clip0355"><img
        src="img/clip0356.jpg" width="250" height="250" border="0"
        alt="Clip0356"><img src="img/clip0358.jpg" width="250" height="250"
        border="0" alt="Clip0358"><img src="img/clip0359.jpg" width="250"
        height="250" border="0" alt="Clip0359"><img src="img/clip0360.jpg"
        width="250" height="250" border="0" alt="Clip0360"></p>

        <p style="text-align: center;"><span class="f_ImageCaption"> </span></p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
