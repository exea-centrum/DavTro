<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Barcode format","Format du code barre"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?faq4b.php"; }
else { parent.quicksync('a10.4.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Format du code barre</title>
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
        href="introduction.php">Top</a>  <a href="faq4a.php">Previous</a>  <a
        href="faq5.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>You may select the barcode type you wish to use, this choice is done with defining a key into Winpro.ini file:</p>

        <p style="margin: 7px 0px 7px 0px;"><span
        class="f_Winproini">[Barcode]</span><br>
        <span class="f_Winproini">Type = 1</span><span
        class="f_Textestd"> or </span><span class="f_Winproini">3 </span><span
        class="f_Winproini"></span></p>

        <p class="p_Textestd"><span class="f_Textestd">For types 1 or 3, the barcode is defined on 10 characters, here is 
		the content:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="1"
        style="border-color : #e0e0e0 #808080 #808080 #e0e0e0; border-style: solid; border-width: 1px; border-spacing:0px;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="95" bgcolor="#ffcc00"
              style="width: 95px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°1</span></p>
              </td>
              <td width="95" bgcolor="#ffcc00"
              style="width: 95px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°2</span></p>
              </td>
              <td width="97" bgcolor="#ffcc00"
              style="width: 97px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°3</span></p>
              </td>
              <td width="95" bgcolor="#ffcc00"
              style="width: 95px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°4</span></p>
              </td>
              <td width="98" bgcolor="#ffcc00"
              style="width: 98px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°5</span></p>
              </td>
              <td width="100" bgcolor="#ffcc00"
              style="width: 100px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°6</span></p>
              </td>
              <td width="103" bgcolor="#ffcc00"
              style="width: 103px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°7</span></p>
              </td>
              <td width="156" bgcolor="#ffcc00"
              style="width: 156px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°8</span></p>
              </td>
              <td width="189" bgcolor="#ffcc00"
              style="width: 189px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°9</span></p>
              </td>
              <td width="176" bgcolor="#ffcc00"
              style="width: 176px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°10</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td colspan="5"
              style="border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span style="font-weight: bold;">window ID</span> (from 00000 to FFFFF)</p>

                <p style="text-align: center;"><span
                style="color: #339966;">Hexadecimal value (= base
                16)</span></p>
              </td>
              <td colspan="2"
              style="border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span style="font-weight: bold;">sash ID</span> (from 0 to 99) </p>

                <p style="text-align: center;"><span
                style="color: #339966;">Decimal value</span></p>
              </td>
              <td width="156"
              style="width: 156px; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span style="font-weight: bold;">leaf ID</span> (from 0 to 7)</p>

                <p style="text-align: center;"><span
                style="color: #339966;">Decimal value</span></p>
              </td>
              <td width="189"
              style="width: 189px; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">1</span> is for left ; <span
                style="font-weight: bold;">2</span> is for right</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">3</span> is for top ; <span
                style="font-weight: bold;">4</span> is for bottom</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">5</span> is for vertical transom</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">6</span> is for horizontal transom</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">7</span> is for oblic /</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">8</span> is for oblic \</p>
              </td>
              <td width="176"
              style="width: 176px; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span style="font-weight: bold;">part ID</span> (0 to Z) </p>

                <p style="text-align: center;"><span
                style="color: #339966;">Value defined with base 36</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p style="margin: 7px 0px 7px 0px;"><span
        class="f_Winproini">[Barcode]</span><br>
        <span class="f_Winproini">Type = 2</span><span
        class="f_Textestd"> or </span><span class="f_Winproini">4 </span><span
        class="f_Winproini"></span></p>

        <p class="p_Textestd"><span class="f_Textestd">For types 2 or 4, the barcode is defined on 8 characters, here is 
		the content:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="1"
        style="border-color : #e0e0e0 #808080 #808080 #e0e0e0; border-style: solid; border-width: 1px; border-spacing:0px;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="95" bgcolor="#ffcc00"
              style="width: 95px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°1</span></p>
              </td>
              <td width="95" bgcolor="#ffcc00"
              style="width: 95px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°2</span></p>
              </td>
              <td width="97" bgcolor="#ffcc00"
              style="width: 97px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°3</span></p>
              </td>
              <td width="95" bgcolor="#ffcc00"
              style="width: 95px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°4</span></p>
              </td>
              <td width="171" bgcolor="#ffcc00"
              style="width: 171px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°5</span></p>
              </td>
              <td width="151" bgcolor="#ffcc00"
              style="width: 151px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°6</span></p>
              </td>
              <td width="177" bgcolor="#ffcc00"
              style="width: 177px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°7</span></p>
              </td>
              <td width="133" bgcolor="#ffcc00"
              style="width: 133px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°8</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td colspan="4"
              style="border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span style="font-weight: bold;">window ID</span> (from 0000 to ZZZZ)</p>

                <p style="text-align: center;"><span
                style="color: #339966;">Value defined with base 36</span></p>
              </td>
              <td width="171"
              style="width: 171px; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span style="font-weight: bold;">sash ID</span> (from 0 to Z) </p>

                <p style="text-align: center;"><span
                style="color: #339966;">Value defined with base 36</span></p>
              </td>
              <td width="151"
              style="width: 151px; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span style="font-weight: bold;">leaf ID</span> (from 0 to 7)</p>

                <p style="text-align: center;"><span
                style="color: #339966;">Decimal value</span></p>
              </td>
              <td width="177"
              style="width: 177px; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">1</span> is for left ; <span
                style="font-weight: bold;">2</span> is for right</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">3</span> is for top ; <span
                style="font-weight: bold;">4</span> is for bottom</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">5</span> is for vertical transom</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">6</span> is for horizontal transom</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">7</span> is for oblic /</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">8</span> is for oblic \</p>
              </td>
              <td width="133"
              style="width: 133px; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span style="font-weight: bold;">part ID</span> (0 to Z) </p>

                <p style="text-align: center;"><span
                style="color: #339966;">Value defined with base 36</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p style="margin: 7px 0px 7px 0px;"><span
        class="f_Winproini">[Barcode]</span><br>
        <span class="f_Winproini">Type = 2</span><span
        class="f_Textestd"> or </span><span class="f_Winproini">4 </span><span
        class="f_Winproini"></span></p>

        <p class="p_Textestd"><span class="f_Textestd">For types 2 or 4, the barcode is defined on 9 characters, here is 
		the content:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="1"
        style="border-color : #e0e0e0 #808080 #808080 #e0e0e0; border-style: solid; border-width: 1px; border-spacing:0px;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="95" bgcolor="#ffcc00"
              style="width: 95px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°1</span></p>
              </td>
              <td width="95" bgcolor="#ffcc00"
              style="width: 95px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°2</span></p>
              </td>
              <td width="97" bgcolor="#ffcc00"
              style="width: 97px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°3</span></p>
              </td>
              <td width="95" bgcolor="#ffcc00"
              style="width: 95px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°4</span></p>
              </td>
              <td width="171" bgcolor="#ffcc00"
              style="width: 171px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°5</span></p>
              </td>
              <td width="151" bgcolor="#ffcc00"
              style="width: 151px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°6</span></p>
              </td>
              <td width="177" bgcolor="#ffcc00"
              style="width: 177px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°7</span></p>
              </td>
              <td width="133" bgcolor="#ffcc00"
              style="width: 133px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°8</span></p>
              </td>
              <td width="136" bgcolor="#ffcc00"
              style="width: 136px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Character n°9</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td colspan="4"
              style="border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span style="font-weight: bold;">window ID</span> (from 0000 to ZZZZ)</p>

                <p style="text-align: center;"><span
                style="color: #339966;">Value defined with base 36</span></p>
              </td>
              <td width="171"
              style="width: 171px; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span style="font-weight: bold;">sash ID</span> (from 0 to Z) </p>

                <p style="text-align: center;"><span
                style="color: #339966;">Value defined with base 36</span></p>
              </td>
              <td width="151"
              style="width: 151px; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span style="font-weight: bold;">leaf ID</span> (from 0 to 7)</p>

                <p style="text-align: center;"><span
                style="color: #339966;">Decimal value</span></p>
              </td>
              <td width="177"
              style="width: 177px; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">1</span> is for left ; <span
                style="font-weight: bold;">2</span> is for right</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">3</span> is for top ; <span
                style="font-weight: bold;">4</span> is for bottom</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">5</span> is for vertical transom</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">6</span> is for horizontal transom</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">7</span> is for oblic /</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">8</span> is for oblic \</p>
              </td>
              <td colspan="2" width="269"
              style="width: 269px; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span style="font-weight: bold;">part ID</span> (00 to ZZ) </p>

                <p style="text-align: center;"><span
                style="color: #339966;">Value defined with base 36</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"> </p>

        <p class="p_Textestd"> </p>

        <p class="p_Textestd"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="426"
                style="width: 426px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 27px;"><span
                style="font-weight: bold; text-decoration: underline;">Note:</span><span
                style="font-weight: bold;"></span></p>

                <p style="margin: 0px 0px 0px 27px;">If no value is set within Winpro.ini file, Winpro will work using Type = 1 
				as default value.</p>
              </td>
        <p class="p_Textestd"> </p>

        <p class="p_Textestd"> </p>

        <p class="p_Textestd"> </p>
            </tr>
          </tbody>
        </table>
        </div>
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
      <td align="left"><p> </p>

        <p>Vous pouvez définir le format de code barre que vous souhaitez
        utiliser, le choix du format est défini par une clé dans le fichier
        Winpro.ini:</p>

        <p style="margin: 7px 0px 7px 0px;"><span
        class="f_Winproini">[Barcode]</span><br>
        <span class="f_Winproini">Type = 1</span><span
        class="f_Textestd"> ou </span><span class="f_Winproini">3 </span><span
        class="f_Winproini"></span></p>

        <p class="p_Textestd"><span class="f_Textestd">Pour le type 1 ou 3, le
        code barre contient 10 caractères dont voici le contenu:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="1"
        style="border-color : #e0e0e0 #808080 #808080 #e0e0e0; border-style: solid; border-width: 1px; border-spacing:0px;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="95" bgcolor="#ffcc00"
              style="width: 95px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°1</span></p>
              </td>
              <td width="95" bgcolor="#ffcc00"
              style="width: 95px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°2</span></p>
              </td>
              <td width="97" bgcolor="#ffcc00"
              style="width: 97px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°3</span></p>
              </td>
              <td width="95" bgcolor="#ffcc00"
              style="width: 95px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°4</span></p>
              </td>
              <td width="98" bgcolor="#ffcc00"
              style="width: 98px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°5</span></p>
              </td>
              <td width="100" bgcolor="#ffcc00"
              style="width: 100px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°6</span></p>
              </td>
              <td width="103" bgcolor="#ffcc00"
              style="width: 103px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°7</span></p>
              </td>
              <td width="156" bgcolor="#ffcc00"
              style="width: 156px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°8</span></p>
              </td>
              <td width="189" bgcolor="#ffcc00"
              style="width: 189px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°9</span></p>
              </td>
              <td width="176" bgcolor="#ffcc00"
              style="width: 176px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°10</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td colspan="5"
              style="border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span style="font-weight: bold;">n°
                de fenêtre</span> (de 00000 à FFFFF)</p>

                <p style="text-align: center;"><span
                style="color: #339966;">Valeur hexadécimale (= base
                16)</span></p>
              </td>
              <td colspan="2"
              style="border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span style="font-weight: bold;">n°
                d'ouvrant</span> (de 0 à 99) </p>

                <p style="text-align: center;"><span
                style="color: #339966;">Valeur décimale</span></p>
              </td>
              <td width="156"
              style="width: 156px; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span style="font-weight: bold;">n°
                du vantail</span> (de 0 à 7)</p>

                <p style="text-align: center;"><span
                style="color: #339966;">Valeur décimale</span></p>
              </td>
              <td width="189"
              style="width: 189px; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">1</span> pour gauche ; <span
                style="font-weight: bold;">2</span> pour droite</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">3</span> pour haut ; <span
                style="font-weight: bold;">4</span> pour bas</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">5</span> pour traverse verticale</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">6</span> pour traverse
                horizontale</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">7</span> pour oblique /</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">8</span> pour oblique \</p>
              </td>
              <td width="176"
              style="width: 176px; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span style="font-weight: bold;">n°
                de pièce</span> (0 à Z) </p>

                <p style="text-align: center;"><span
                style="color: #339966;">Valeur exprimée en base 36</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p style="margin: 7px 0px 7px 0px;"><span
        class="f_Winproini">[Barcode]</span><br>
        <span class="f_Winproini">Type = 2</span><span
        class="f_Textestd"> ou </span><span class="f_Winproini">4 </span><span
        class="f_Winproini"></span></p>

        <p class="p_Textestd"><span class="f_Textestd">Pour le type 2 ou 4, le
        code barre contient 8 caractères dont voici le contenu:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="1"
        style="border-color : #e0e0e0 #808080 #808080 #e0e0e0; border-style: solid; border-width: 1px; border-spacing:0px;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="95" bgcolor="#ffcc00"
              style="width: 95px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°1</span></p>
              </td>
              <td width="95" bgcolor="#ffcc00"
              style="width: 95px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°2</span></p>
              </td>
              <td width="97" bgcolor="#ffcc00"
              style="width: 97px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°3</span></p>
              </td>
              <td width="95" bgcolor="#ffcc00"
              style="width: 95px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°4</span></p>
              </td>
              <td width="171" bgcolor="#ffcc00"
              style="width: 171px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°5</span></p>
              </td>
              <td width="151" bgcolor="#ffcc00"
              style="width: 151px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°6</span></p>
              </td>
              <td width="177" bgcolor="#ffcc00"
              style="width: 177px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°7</span></p>
              </td>
              <td width="133" bgcolor="#ffcc00"
              style="width: 133px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°8</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td colspan="4"
              style="border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span style="font-weight: bold;">n°
                de fenêtre</span> (de 0000 à ZZZZ)</p>

                <p style="text-align: center;"><span
                style="color: #339966;">Valeur exprimée en base 36</span></p>
              </td>
              <td width="171"
              style="width: 171px; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span style="font-weight: bold;">n°
                d'ouvrant</span> (de 0 à Z) </p>

                <p style="text-align: center;"><span
                style="color: #339966;">Valeur exprimée en base 36</span></p>
              </td>
              <td width="151"
              style="width: 151px; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span style="font-weight: bold;">n°
                du vantail</span> (de 0 à 7)</p>

                <p style="text-align: center;"><span
                style="color: #339966;">Valeur décimale</span></p>
              </td>
              <td width="177"
              style="width: 177px; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">1</span> pour gauche ; <span
                style="font-weight: bold;">2</span> pour droite</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">3</span> pour haut ; <span
                style="font-weight: bold;">4</span> pour bas</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">5</span> pour traverse verticale</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">6</span> pour traverse
                horizontale</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">7</span> pour oblique /</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">8</span> pour oblique \</p>
              </td>
              <td width="133"
              style="width: 133px; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span style="font-weight: bold;">n°
                de pièce</span> (0 à Z) </p>

                <p style="text-align: center;"><span
                style="color: #339966;">Valeur exprimée en base 36</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p style="margin: 7px 0px 7px 0px;"><span
        class="f_Winproini">[Barcode]</span><br>
        <span class="f_Winproini">Type = 2</span><span
        class="f_Textestd"> ou </span><span class="f_Winproini">4 </span><span
        class="f_Winproini"></span></p>

        <p class="p_Textestd"><span class="f_Textestd">Pour le type 2 ou 4, le
        code barre contient 9 caractères dont voici le contenu:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="1"
        style="border-color : #e0e0e0 #808080 #808080 #e0e0e0; border-style: solid; border-width: 1px; border-spacing:0px;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="95" bgcolor="#ffcc00"
              style="width: 95px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°1</span></p>
              </td>
              <td width="95" bgcolor="#ffcc00"
              style="width: 95px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°2</span></p>
              </td>
              <td width="97" bgcolor="#ffcc00"
              style="width: 97px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°3</span></p>
              </td>
              <td width="95" bgcolor="#ffcc00"
              style="width: 95px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°4</span></p>
              </td>
              <td width="171" bgcolor="#ffcc00"
              style="width: 171px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°5</span></p>
              </td>
              <td width="151" bgcolor="#ffcc00"
              style="width: 151px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°6</span></p>
              </td>
              <td width="177" bgcolor="#ffcc00"
              style="width: 177px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°7</span></p>
              </td>
              <td width="133" bgcolor="#ffcc00"
              style="width: 133px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°8</span></p>
              </td>
              <td width="136" bgcolor="#ffcc00"
              style="width: 136px; background-color: #ffcc00; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Caractère n°9</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td colspan="4"
              style="border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span style="font-weight: bold;">n°
                de fenêtre</span> (de 0000 à ZZZZ)</p>

                <p style="text-align: center;"><span
                style="color: #339966;">Valeur exprimée en base 36</span></p>
              </td>
              <td width="171"
              style="width: 171px; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span style="font-weight: bold;">n°
                d'ouvrant</span> (de 0 à Z) </p>

                <p style="text-align: center;"><span
                style="color: #339966;">Valeur exprimée en base 36</span></p>
              </td>
              <td width="151"
              style="width: 151px; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span style="font-weight: bold;">n°
                du vantail</span> (de 0 à 7)</p>

                <p style="text-align: center;"><span
                style="color: #339966;">Valeur décimale</span></p>
              </td>
              <td width="177"
              style="width: 177px; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">1</span> pour gauche ; <span
                style="font-weight: bold;">2</span> pour droite</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">3</span> pour haut ; <span
                style="font-weight: bold;">4</span> pour bas</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">5</span> pour traverse verticale</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">6</span> pour traverse
                horizontale</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">7</span> pour oblique /</p>

                <p style="text-align: center;"><span
                style="font-weight: bold;">8</span> pour oblique \</p>
              </td>
              <td colspan="2" width="269"
              style="width: 269px; border-color : #808080 #e0e0e0 #e0e0e0 #808080; border-style: solid; border-width: 1px;"><p
                style="text-align: center;"><span style="font-weight: bold;">n°
                de pièce</span> (00 à ZZ) </p>

                <p style="text-align: center;"><span
                style="color: #339966;">Valeur exprimée en base 36</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"> </p>

        <p class="p_Textestd"> </p>

        <p class="p_Textestd"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="426"
                style="width: 426px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 27px;"><span
                style="font-weight: bold; text-decoration: underline;">Remarque:</span><span
                style="font-weight: bold;"></span></p>

                <p style="margin: 0px 0px 0px 27px;">Si le type de code barre
                n'est pas défini dans le fichier Winpro.ini, Winpro prend alors
                par défaut le Type = 1.</p>
		</td>
        <p class="p_Textestd"> </p>

        <p class="p_Textestd"> </p>

        <p class="p_Textestd"> </p>
            </tr>
          </tbody>
        </table>
        </div>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
