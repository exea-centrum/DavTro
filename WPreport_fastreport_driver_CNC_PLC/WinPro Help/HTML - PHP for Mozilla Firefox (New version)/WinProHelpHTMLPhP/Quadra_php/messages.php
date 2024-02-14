<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Messages","Messages","Berichten"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?messages.php"; }
else { parent.quicksync('a7.23'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Messages</title>
  <meta name="keywords" content="Message,Fail,Messages">
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
        href="magasinsstock.php">Previous</a>  <a
        href="msgdescription.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>This table is designed to create message labels to be used with instructions 
		<a href="message.php">Message</a> and <a href="flowcontrolinstructions.php">Fail</a> within data set up. 
		This dialog is reached through menu <span style="font-weight: bold;">Data | Basic data | Messages</span>.</p>

        <p style="text-align: center;"><img src="img/clip0570eng.jpg"
        width="595" height="290" border="0" alt="clip0570eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Message</span>: Code of the
                message, as used into instructions <a href="message.php">Message</a> and 
				<a href="flowcontrolinstructions.php">Fail</a>, just after a 
				<span class="f_Variables" style="font-weight: bold;">#</span> symbol.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

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
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>La table des messages permet de stockés des messages qui pourront
        ensuite être utilisés avec les instructions <a
        href="message.php">Message</a> et <a
        href="flowcontrolinstructions.php">Echec</a> dans les formules. Ce
        dialogue est accessible depuis le menu <span
        style="font-weight: bold;">Données | Données de base |
        Messages</span>.</p>

        <p style="text-align: center;"><img src="img/clip0570.zoom89.gif"
        width="534" height="282" border="0" alt="clip0570"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Message</span>: Code du
                message. Ce paramètre sera utilisé dans les instructions <a
                href="message.php">Message</a> et <a
                href="flowcontrolinstructions.php">Echec</a>, précédé du signe
                <span class="f_Variables"
              style="font-weight: bold;">#</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>

<div class="NED">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>De berichten tabel staat u toe om berichten op te slaan en
        vervolgens te gebruiken met de instructie <a
        href="message.php">Message</a> en <a
        href="flowcontrolinstructions.php">Fail</a> in de formules. Dit scherm
        is toegankelijk via het menu <span style="font-weight: bold;">Gegevens
        | Basisgegevens | Berichten</span>.</p>

        <p style="text-align: center;"><img src="img/clip0570.zoom89.gif"
        width="534" height="282" border="0" alt="clip0570"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';"></span></td>
              <td><p><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span><span
                style="font-weight: bold;">Code</span> : Code van het bericht.
                Deze parameter wordt verder gebruikt in de instructies <a
                href="message.php">Message</a> en <a
                href="flowcontrolinstructions.php">Fail</a>, voorafgegaan door
                het teken <span class="f_Variables"
                style="font-weight: bold;">#</span>.</p>

                <p></p>

                <p></p>

                <p></p>

                <p></p>

                <p></p>

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

        <p> </p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>

</body>
</html>
