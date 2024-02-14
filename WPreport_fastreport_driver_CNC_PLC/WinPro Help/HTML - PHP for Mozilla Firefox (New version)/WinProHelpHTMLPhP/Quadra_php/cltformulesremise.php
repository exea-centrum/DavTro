<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Discount Formula","Formules Remise"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?cltformulesremise.php"; }
else { parent.quicksync('a7.8.8'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Formules remise</title>
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
        href="cltdirection.php">Previous</a>  <a
        href="formules_specifiquess.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This tab allows creation of discount formulas at the end of computation, as detailled into chapter about <a
        href="formulederemise.php">customer's discount formulas</a>.</p>

        <p>The aim is to compute by rules the <a
        href="variablesgenerale.php">global variables</a> related to discounts, as <span class="f_Variables">_Discount</span>, 
		<span class="f_Variables">_Discount2</span>, 
		<span class="f_Variables">_Discount3</span>, 
		<span class="f_Variables">_RollerShutterDiscount</span>, 
		<span class="f_Variables">_RollerShutterDiscount2</span>, 
		<span class="f_Variables">_RollerShutterDiscount3</span>, 
		<span class="f_Variables">_GlassDiscount</span>, 
		<span class="f_Variables">_GlassDiscount2</span>, 
		<span class="f_Variables">_GlassDiscount3</span>.</p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="450"
                style="width: 450px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Note</span><span
                style="text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Discount formulas will also be transfered to WinPro/D, into a ‘remise.var’ file among InfoCli diskette files. 
					  The content of this file is encrypted.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
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
      <td align="left"><p>Cet onglet vous permet de définir des formules de
        remises en fin de calcul, comme indiqué dans le chapitre sur les <a
        href="formulederemise.php">formules de remises client</a>.</p>

        <p>L'objet est de calculer par formule les <a
        href="variablesgenerale.php">variables générales</a> relatives aux
        remises telles <span class="f_Variables">_Remise</span>, <span
        class="f_Variables">_Remise2</span>, <span
        class="f_Variables">_Remise3</span>, <span
        class="f_Variables">_RemiseVolet</span>, <span
        class="f_Variables">_RemiseVolet2</span>, <span
        class="f_Variables">_RemiseVolet3</span>, <span
        class="f_Variables">_RemiseVitrage</span>, <span
        class="f_Variables">_RemiseVitrage2</span>, <span
        class="f_Variables">_RemiseVitrage3</span>.</p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="450"
                style="width: 450px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Remarque</span><span
                style="text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Les formules remise seront également transmises à
                        WinPro/D, dans un fichier ‘remise.var’ sur la disquette
                        InfoCli. Le contenu de ce fichier est crypté.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
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
