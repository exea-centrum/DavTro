<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Transom","Traverse"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?faq3b.php"; }
else { parent.quicksync('a10.3.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Traverse</title>
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
        href="introduction.php">Top</a>  <a href="faq3a.php">Previous</a>  <a
        href="faq4.php">Next</a> </span> </td>
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
        style="font-family: 'Tahoma'; color: #000000;">correspond to  variables </span><span class="f_Variables">X0</span><span
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
        style="font-family: 'Tahoma'; color: #000000;">correspond to variables </span><span class="f_Variables">SegmentX0 []</span><span
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
        style="font-family: 'Tahoma'; color: #000000;">correspond to variables </span><span class="f_Variables">
		SegmentAngle1 []</span><span
        style="font-family: 'Tahoma'; color: #000000;">, </span><span
        class="f_Variables">SegmentAngle2 []</span><span
        style="font-family: 'Tahoma'; color: #000000;">.</span></p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #ff0000;">1,
        2</span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #0000ff;"> </span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">:
        </span><span
        style="font-family: 'Tahoma'; color: #000000;">correspond to variables </span><span class="f_Variables">Angle1</span><span
        style="font-family: 'Tahoma'; color: #000000;"> and </span><span
        class="f_Variables">Angle2</span><span
        style="font-family: 'Tahoma'; color: #000000;">.</span></p>

        <p style="margin: 8px 0px 0px 0px;"><img src="img/embim3.jpg" width="22"
        height="22" vspace="1" hspace="1" border="0" alt=""><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">… :
        </span><span
        style="font-family: 'Tahoma'; color: #000000;">correspond to variable </span><span class="f_Variables">SegmentIndex</span><span
        style="font-family: 'Tahoma'; color: #000000;">. </span></p>

        <p><span style="font-family: 'Tahoma'; color: #000000;"> </span></p>

        <p><img src="img/clip0361.jpg" width="250" height="250" border="0"
        alt="Clip0361"><img src="img/clip0362.jpg" width="250" height="250"
        border="0" alt="Clip0362"><img src="img/clip0363.jpg" width="250"
        height="250" border="0" alt="Clip0363"><img src="img/clip0364.jpg"
        width="250" height="250" border="0" alt="Clip0364"><img
        src="img/clip0365.jpg" width="250" height="250" border="0"
        alt="Clip0365"><img src="img/clip0366.jpg" width="250" height="250"
        border="0" alt="Clip0366"><img src="img/clip0367.jpg" width="250"
        height="250" border="0" alt="Clip0367"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="519"
                style="width: 519px; border: solid 1px #ff0000;"><p><img
                src="img/clip0368.jpg" width="250" height="250" border="0"
                alt="Clip0368"><img src="img/clip0370.jpg" width="250" height="250"
                border="0" alt="Clip0370"><span
                class="f_ImageCaption"></span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-family: 'Tahoma'; color: #000000;"> </span></p>

        <p><span style="font-family: 'Tahoma'; color: #000000;">IMPORTANT NOTE: <ins>from version 9 and 
		upper versions</ins>, the exception inside the red frame is removed, every transoms will then behave the same way: </span></p>
        <ul>
          <li>verticals from bottom to top</li>
          <li>horizontals from left to right</li>
        </ul>

        <p>Angle1 is still related to X0Y0, and Angle2 to X1Y1</p>

        <p><span style="font-family: 'Tahoma'; color: #000000;"> </span></p>

        <p><span style="font-family: 'Tahoma'; color: #000000;"> </span></p>
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
        variables </span><span class="f_Variables">Angle1Segment []</span><span
        style="font-family: 'Tahoma'; color: #000000;">, </span><span
        class="f_Variables">Angle2Segment []</span><span
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

        <p><span style="font-family: 'Tahoma'; color: #000000;"> </span></p>

        <p><img src="img/clip0361.jpg" width="250" height="250" border="0"
        alt="Clip0361"><img src="img/clip0362.jpg" width="250" height="250"
        border="0" alt="Clip0362"><img src="img/clip0363.jpg" width="250"
        height="250" border="0" alt="Clip0363"><img src="img/clip0364.jpg"
        width="250" height="250" border="0" alt="Clip0364"><img
        src="img/clip0365.jpg" width="250" height="250" border="0"
        alt="Clip0365"><img src="img/clip0366.jpg" width="250" height="250"
        border="0" alt="Clip0366"><img src="img/clip0367.jpg" width="250"
        height="250" border="0" alt="Clip0367"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="519"
                style="width: 519px; border: solid 1px #ff0000;"><p><img
                src="img/clip0368.jpg" width="250" height="250" border="0"
                alt="Clip0368"><img src="img/clip0370.jpg" width="250" height="250"
                border="0" alt="Clip0370"><span
                class="f_ImageCaption"></span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-family: 'Tahoma'; color: #000000;"> </span></p>

        <p><span style="font-family: 'Tahoma'; color: #000000;">REMARQUE
        IMPORTANTE: </span><ins>à partir de la v9</ins>, l'exception dans le cadre
        rouge est supprimée, toutes les traverses se comporteront de la même
        façon: </span></p>
        <ul>
          <li>les verticales de bas en haut</li>
          <li>les horizontales de gauche à droite</li>
        </ul>

        <p>Angle1 sera toujours lié à X0Y0, et Angle2 à X1Y1</p>

        <p><span style="font-family: 'Tahoma'; color: #000000;"> </span></p>

        <p><span style="font-family: 'Tahoma'; color: #000000;"> </span></p>
		</td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
