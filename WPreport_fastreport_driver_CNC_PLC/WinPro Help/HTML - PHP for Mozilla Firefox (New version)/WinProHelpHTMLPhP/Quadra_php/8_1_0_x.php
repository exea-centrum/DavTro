<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>	
<!DOCTYPE php PUBLIC "-//W3C//DTD php 4.01 Transitional//EN">  
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["8.1.0.x","8.1.0.x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?8_1_0_x.php"; }
else { parent.quicksync('a11.2.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>8.1.0.x</title>
  <meta name="keywords"
  content="_RemplUg,_RemplPsiG,_RemplTransLum,_RemplFacSol,_RemplIntercalaire,_RemplIntercalaire2,_Rempl2Ug,_Rempl2PsiG,_Rempl2TransLum,_Rempl2FacSol,_Rempl2Intercalaire,_Rempl2Intercalaire2">
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
        href="introduction.php">Top</a>  <a href="8_1_1_x.php">Previous</a>  <a
        href="8_0_4_x.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p class="p_Comment"><span class="f_Comment"
        style="font-size: 8pt;">* Not compatible with version 7.2, unless mentioned</span></p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 8pt;"> </span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.073</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">26/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Modified tables</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Created tables</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">None</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">None</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">New global variables for fillings:</span><span
        class="f_ImageCaption"> New global variables added for fillings:</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 23px;"><span
                class="f_Variables">_FillUg []</span></p>
              </td>
              <td width="514" style="width: 514px;"><p
                style="margin: 4px 0px 4px 0px;"><span
                class="f_ImageCaption">=  </span><span
                style="font-style: italic;">Ug </span><span
                class="f_ImageCaption">value for the glass unit, </span><span
                class="f_ImageCaption"
                style="font-weight: bold;">Dimension</span> tab</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Variables">_FillPsiG []</span></p>
              </td>
              <td width="514" style="width: 514px;"><p
                style="margin: 4px 0px 4px 0px;"><span
                class="f_ImageCaption">=  Value of the </span><span
                style="font-style: italic;">PsiG </span><span
                class="f_ImageCaption">column from the warmedge, for the concerned glass thickness</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Variables">_FillLtTrans []</span></p>
              </td>
              <td width="514" style="width: 514px;"><p
                style="margin: 4px 0px 4px 0px;"><span
                class="f_ImageCaption">=  </span><span
                style="font-style: italic;">Light Transmission </span><span
                class="f_ImageCaption">value for the glass unit, </span><span
                class="f_ImageCaption"
                style="font-weight: bold;">Dimension</span> tab</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Variables">_FillSolFac []</span></p>
              </td>
              <td width="514" style="width: 514px;"><p
                style="margin: 4px 0px 4px 0px;"><span
                class="f_ImageCaption">=  </span><span
                style="font-style: italic;">Solar Factor </span><span
                class="f_ImageCaption">value for the glass unit, </span><span
                class="f_ImageCaption"
                style="font-weight: bold;">Dimension</span> tab</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Variables">_FillSpacer []</span></p>
              </td>
              <td width="514" style="width: 514px;"><p
                style="margin: 4px 0px 4px 0px;"><span
                class="f_ImageCaption">=  Thickness of the first </span><span
                style="font-style: italic;">Spacer </span><span
                class="f_ImageCaption">value for the glass unit, </span><span
                class="f_ImageCaption"
                style="font-weight: bold;">Dimension</span> tab
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Variables">_FillSpacer2 []</span></p>
              </td>
              <td width="514" style="width: 514px;"><p
                style="margin: 4px 0px 4px 0px;"><span
                class="f_ImageCaption">=  Thickness of the second </span><span
                style="font-style: italic;">Spacer </span><span
                class="f_ImageCaption">value for the glass unit, </span><span
                class="f_ImageCaption"
                style="font-weight: bold;">Dimension</span> tab
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Variables">_Fill2Ug []</span></p>
              </td>
              <td width="514" style="width: 514px;"><p
                style="margin: 4px 0px 4px 0px;"><span
                class="f_ImageCaption">=  </span><span
                style="font-style: italic;">Ug </span><span
                class="f_ImageCaption">value for the second glass unit </span><span
                class="f_ImageCaption"
                style="font-weight: bold;">Dimension</span><span
                class="f_ImageCaption"> tab, in case of Doubled Window (release note 8.1.0)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Variables">_Fill2PsiG []</span></p>
              </td>
              <td width="514" style="width: 514px;"><p
                style="margin: 4px 0px 4px 0px;"><span
                class="f_ImageCaption">=  Value of the </span><span
                style="font-style: italic;">PsiG </span><span
                class="f_ImageCaption">column from the warmedge, for the concerned glass thickness, in case of Doubled
				Window (release note 8.1.0)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Variables">_Fill2LtTrans []</span></p>
              </td>
              <td width="514" style="width: 514px;"><p
                style="margin: 4px 0px 4px 0px;"><span
                class="f_ImageCaption">=  </span><span
                style="font-style: italic;">Light Transmission </span><span
                class="f_ImageCaption">value for the second glass unit, </span><span
                class="f_ImageCaption"
                style="font-weight: bold;">Dimension</span><span
                class="f_ImageCaption"> tab, in case of Doubled Window (release note 8.1.0)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Variables">_Fill2SolFac []</span></p>
              </td>
              <td width="514" style="width: 514px;"><p
                style="margin: 4px 0px 4px 0px;"><span
                class="f_ImageCaption">=  </span><span
                style="font-style: italic;">Solar Factor </span><span
                class="f_ImageCaption">value for the second glass unit, </span><span
                class="f_ImageCaption"
                style="font-weight: bold;">Dimension</span><span
                class="f_ImageCaption"> tab, in case of Doubled Window (release note 8.1.0)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Variables">_Fill2Spacer []</span></p>
              </td>
              <td width="514" style="width: 514px;"><p><span
                class="f_ImageCaption">=  Thickness of the first </span><span
                style="font-style: italic;">Spacer</span><span
                class="f_ImageCaption"> for the second glass unit, 
                </span><span class="f_ImageCaption"
                style="font-weight: bold;">Dimension</span><span
                class="f_ImageCaption"> tab, in case of Doubled Window (release note 8.1.0)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Variables">_Fill2Spacer2 []</span></p>
              </td>
              <td width="514" style="width: 514px;"><p
                style="margin: 4px 0px 4px 0px;"><span
                class="f_ImageCaption">=  Thickness of the second </span><span
                style="font-style: italic;">Spacer</span><span
                class="f_ImageCaption"> for the glass unit, 
                </span><span class="f_ImageCaption"
                style="font-weight: bold;">Dimension</span><span
                class="f_ImageCaption"> tab, in case of triple glazing</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_ImageCaption">Those arrays are indexed onto the filling index. For values
		related to the thermic computation of the window, they are initialized only when your licence includes the
		</span><span class="f_ImageCaption" style="font-weight: bold;">Thermic Module ( TM )</span><span
        class="f_ImageCaption">. Those variable may be usefull to retrieve thermic values onto </span><span 
		class="f_ImageCaption" style="font-weight: bold;">CE Labels ( CE )</span><span class="f_ImageCaption">, once
		again if your licence file includes this module (refer to release note 8.1.0).</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.071</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>
        <p class="p_Comment"><span class="f_TitreReleaseNote">Addition concerning packaging feature:</span><span 
		class="f_ImageCaption"> For users of the </span><span class="f_ImageCaption" style="font-weight: bold;">Packaging
		Management</span><span class="f_ImageCaption"> feature, articles to be packaged are defaultly cumulated, enven
		when they don't belong to the same window. You may disable this behaviour and not cumulate articles from distinct
		window anymore with creating a new key into <span style="font-style: italic;">Settings</span> table:</p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;">[Packages]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="243" style="width: 243px;"><p class="p_Textestd"
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Winproini">Split Package By Window</span></p>
              </td>
              <td width="384" style="width: 384px;"><p
                style="margin: 4px 0px 4px 0px;"><span class="f_Winproini">=
                0</span><span class="f_Textestd">    Articles cumulated (base behaviour, default).</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="243" style="width: 243px;"><br>
              </td>
              <td width="384" style="width: 384px;"><p
                style="margin: 4px 0px 4px 0px;"><span class="f_Winproini">=
                1</span><span class="f_Textestd">    Articles not cumulated.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span style="font-size: 12pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.070</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>
        <p class="p_Comment"><span class="f_TitreReleaseNote">Warm-edge pricing:</span><span class="f_ImageCaption"> The
		warmedge price is now altered by insurance and discount from glass unit, for WinPro and WinPro/D.</span></p>

        <p class="p_Comment">       </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.069</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>
        <p class="p_Comment"><span class="f_TitreReleaseNote">Default creation for Settings table:</span><span
        class="f_ImageCaption"> When creating an empty database, or at the first update from this version, WinPro will
		create all <span class="f_ImageCaption" style="font-style: italic;">Settings</span> keys that does not exist,
		with default value.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption">A new section is also created allowing to restart this default
		creation process if necessary:</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;">[Settings]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="192" style="width: 192px;"><p class="p_Textestd"
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Winproini">Imported</span></p>
              </td>
              <td width="435" style="width: 435px;"><p
                style="margin: 4px 0px 4px 0px;"><span class="f_Winproini">=
                0</span><span class="f_Textestd">    Restart the process.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="192" style="width: 192px;"><br>
              </td>
              <td width="435" style="width: 435px;"><p
                style="margin: 4px 0px 4px 0px;"><span class="f_Winproini">=
                1</span><span class="f_Textestd">    Does nothing (default value).</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment">       </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.068</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>
        <p class="p_Comment"><span class="f_TitreReleaseNote">Price list for ventilators:</span><span 
		class="f_ImageCaption">You may now select all WinPro's colours in addition to RAL colours, for price grid of the
		Price List tab of Ventilators.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim23.jpg" width="248"
        height="142" vspace="1" hspace="1" border="0" alt=""></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.066</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Creation of design including roller shutter:</span>
		<span class="f_ImageCaption">When the first created design of an order contains a roller shutter, if a new window
		is created, by default this window will also contain a roller shutter. You may now disable this behaviour through
		the following key into <span style="font-style: italic;">Settings</span> table:</p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;">[Customer
        Order]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="192" style="width: 192px;"><p class="p_Textestd"
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Winproini">Copy Roller Shutter</span></p>
              </td>
              <td width="435" style="width: 435px;"><p
                style="margin: 4px 0px 4px 0px;"><span class="f_Winproini">=
                0</span><span class="f_Textestd">    The roller shutter is not copied for the following windows.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="192" style="width: 192px;"><br>
              </td>
              <td width="435" style="width: 435px;"><p
                style="margin: 4px 0px 4px 0px;"><span class="f_Winproini">=
                1</span><span class="f_Textestd">    WinPro copy the roller shutter for next window (default).</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Winproini"> </span></p>

        <p class="p_Comment"><span
        style="font-family: 'Courier New'; font-weight: bold;"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Cutting slot generation in case of fixed pane:</span><span
		class="f_ImageCaption">You may now avoid the generation of a sash slot into the trolley for a fixed pane, using a
		new key into <span style="font-style: italic;">Settings</span> table</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;">[Optimisation]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="193" style="width: 193px;"><p
                style="text-indent: -235px; margin: 0px 0px 0px 259px;"><span
                class="f_Winproini">FixeSansCasier</span></p>
              </td>
              <td width="351" style="width: 351px;"><p
                style="margin: 4px 0px 4px 0px;"><span class="f_Winproini">=
                0   </span><span class="f_Textestd">WinPro create a sash slot number for fixed panes (base behaviour,
				default).</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="193" style="width: 193px;"><br>
              </td>
              <td width="351" style="width: 351px;"><p
                style="margin: 4px 0px 4px 0px;"><span class="f_Winproini">=
                1   </span><span class="f_Textestd">WinPro does not create a sash slot number for fixed panes anymore.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -235px; margin: 0px 0px 0px 235px;"><span
        class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_ImageCaption">Previously, slots were not generated for fixed panes by default, which
		involved problems in case of glazing bars and/or ventilators into the sash frame.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span
        style="font-weight: bold; text-decoration: underline;">Questions with selection format:</span>
		<span class="f_ImageCaption">Selections from a question are now unaccessible for display or modification, until the
		concerned record (Outer frame, Sash frame, ...) is not edited using [F3] button.</span></p>

        <p class="p_Comment">       </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.059</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

 
        <p class="p_Comment"><span class="f_TitreReleaseNote">Filter for module module Multi-CustInfo (INF module):</span>
		<span class="f_ImageCaption">When using module mutli-customer information generation for WinPro/D, customers codes are only
		listed for records filled in with a not null valuie for field "Number of WinPro/D copies", into Commercial tab.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim2beng.jpg" width="190"
        height="108" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="text-align: center;"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_ImageCaption">Refer to release note 8.01 for more details about this feature.</span></p>

        <p class="p_Comment">       </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.053</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Printing options for thermic module:</span><span
        class="f_ImageCaption"> Addition of an option "Do not print thermic coefficient " within the Price tab when creating a
		customer order, using the following <span style="font-style: italic;">Settings</span> key:</p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;">[Customer
        Order]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="235"><span class="f_Winproini">No printing thermic
                coefficient</span></td>
              <td><span class="f_Winproini">= 0</span><span
                style="font-family: 'Courier New'; font-weight: bold;">  
                </span><img src="img/embim25eng.jpg" width="173" height="26"
                vspace="1" hspace="1" border="0" alt=""><span
                style="font-family: 'Courier New'; font-weight: bold;"></span><span
                class="f_Textestd">unchecked by default (base status).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="235"></td>
              <td><span class="f_Winproini">= 1</span><span
                style="font-family: 'Courier New'; font-weight: bold;">  
                </span><img src="img/embim26eng.jpg" width="169" height="22"
                vspace="1" hspace="1" border="0" alt=""><span
                style="font-family: 'Courier New'; font-weight: bold;"></span><span
                class="f_Textestd">checked by default.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_ImageCaption">The box remains modifiable straight into the Priice tab of the order, if
		required.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Extension of module Glass Multi Supplier:</span><span
        class="f_ImageCaption"> You may now set upt to 10 different supplier by glass unit (instead of 5 previously).</span></p>

        <p class="p_Comment">       </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.051</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>
 
        <p class="p_Comment"><span class="f_TitreReleaseNote">Window copy function fix:</span><span class="f_ImageCaption"> When
		copying a window from one order to another, fields DMELVOL and DMELCHA from Detail2 table are not copied anymore but are
		reset to zero value. Batching dates for window or roller shutter are then not copied anymore along with the design.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Pricing and printing option for WinPro/D:</span><span
        class="f_ImageCaption">The following keys from Settings table are suitable for WinPro, and also now for WinPro/D:</span></p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;"> </span></p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;">[Commande]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="188"><span class="f_Winproini">%user%::Rep</span></td>
              <td>       <span class="f_Textestd">=     Default status for checkbox « Discount per window », by user</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="188"><span class="f_Winproini">%user%::Tot</span></td>
              <td>       <span class="f_Textestd">=     Default status of checkbox « No total », by user</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_ImageCaption">Refer to release not 7.1.13 for more details about those keys.</span></p>

        <p class="p_Comment">       </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.045</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">19/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Modified tables</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Created tables</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">None</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">None</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Purge for customer documents export tables:</span><span
        class="f_ImageCaption">The old key </span><span
        style="font-family: 'Courier New';">VidageTableExport</span><span
        class="f_ImageCaption"> from the </span><span
        style="font-family: 'Tahoma'; font-weight: bold;">[System]</span><span
        class="f_ImageCaption">section will disappear using a version 8 of WinPro (release note 7.2.049). Another <span
        style="font-style: italic;">settings</span><span class="f_ImageCaption"> key with different name is created for version 8,
		allowing the deletion of useless records into export tables (ART, CDE, FEN, DET, LIN & VAR).</p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;"> </span></p>

        <p><span style="font-weight: bold;">[System]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="142"><span
              class="f_Winproini">VideTablesExport</span></td>
              <td><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">=
                The key controls when records from export tables are deleted or not if the corresponding order is 
				deleted.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="142"></td>
              <td><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">When set to 0, no record is 
				deleted.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="142"></td>
              <td><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">When set to 1, records are 
				systematically deleted.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="142"></td>
              <td><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">When set to 2, users are prompted 
				to confirm deletion.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.039</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/07/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Overlapping outer frame and Thermic Module TM:</span><span
        class="f_ImageCaption"> Creation of global variables, </span><span class="f_Variables">_DeductionRenoOuterFrameTop</span>, <span class="f_Variables">
		_DeductionRenoOuterFrameBottom</span>, <span class="f_Variables">
		_DeductionRenoOuterFrameLeft</span>, <span class="f_Variables">_DeductionRenoOuterFrameRight</span>, <span class="f_Variables">
		_DeductionRenoOuterFrameTopLeft</span>,
		<span class="f_Variables">_DeductionRenoOuterFrameTopRight</span>.</span></p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p class="p_Comment"><span class="f_ImageCaption">This variables will contain the value (into mm) to be deduced to the outer
		frame width when computing needed surfaces for the thermic module.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption">This may be usefull in case of outer frame overlapping a wall, as
		detailled into below documentation :</span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><span
        class="f_ImageCaption"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-family: 'Courier New';">Frames with special extensions overlapping the wall or other building elements, such as
		Z-shaped profiles, shall be treated in accordance with figure below. The part of the wall/building element is replaced by
		an adiabatic boundary. The width of the frame <span style="font-family: 'Courier New'; font-style: italic; color: #800000;">
		LInt</span> used for the calculation of Uf is the total width of the frame <span style="font-family: 'Courier New';
		font-style: italic; color: #800000;">LTot</span> decreased by the distance overlapping the
		wall <span style="font-family: 'Courier New'; font-style: italic; color: #800000;">lrec</span>. 
		This method can be applied to all profiles with special extensions (e.g. H-shape) where the extensions overlap the wall or
		other building elements.</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-family: 'Courier New';"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0266eng.jpg"
        width="482" height="202" border="0" alt="clip0266eng"></p>

        <p class="p_Comment"><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="525"
                style="width: 525px; border: solid 1px #000000;"><p
                class="p_Notes" style="margin: 0px 0px 0px 10px;"><span
                class="f_Notes" style="font-weight: bold;">Note :</span><span
                class="f_Notes"> :</span><br>
                <span class="f_Notes">- Those variables are only available during the pre-computation stage, into the first profile page of the 
				outer-frame set up (or if <span class="f_Variables">PreComp = False()</span> using version 9 and above).</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Roller shutter and Thermic Module TM:</span><span 
		class="f_ImageCaption"> Creation of a global array variable </span><span
        class="f_Variables">_DesactiverCalculThermiqueVolet</span>.</p>

        <p class="p_Comment"><span class="f_ImageCaption">This variable indicates to WinPro not to compute elements of thermic
		calculation from a roller shutter.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Wood density introduced for Thermic Module TM:</span><span
        class="f_ImageCaption"> A new « Density » column is available into the various records representing combination of profiles
		for the thermic module (Frame + Sash, Frame + Fixed sash, etc).</span></p>

        <p class="p_Comment"><span class="f_ImageCaption">This column may correspond to a density value of the wood essence. WinPro
		will retrieve this value now when computing for U value.</span></p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0265eng.jpg" width="892" height="194" border="0"
        alt="clip0265eng"></p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p class="p_Comment"><span class="f_ImageCaption">This density may be set up by the user for a given design through a new
		global variable labelled </span><span class="f_Variables">_Densite</span><span
        class="f_ImageCaption">. </span></p>

        <p class="p_Comment"><span class="f_ImageCaption">WinPro will look for the U value based on the combination of profiles and
		this density. When no correspondancy is found for a given density, the upper density value will be selected, if 
		exists.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_ImageCaption">Density usage is optional.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Additional feature for optimization:</span><span
        class="f_ImageCaption">A new key of <span class="f_ImageCaption" style="font-style: italic;">Settings</span> table is now
		enabled for optimization option.</span></p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;"> </span></p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;">[Optimisation]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Sorting profiles      
         = 0</span><span class="f_Textestd">  Default sort order for profiles (base behaviour).</span></p>

        <p class="p_Textestd">                       <span
        class="f_Winproini">= 1 </span><span class="f_Textestd">Alternative sort method for profiles (sashes first).</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_ImageCaption">When set to zero, profiles are sorted based onto fields LOT, SOUSLOT,
		SCIE and LIGNE from <span style="font-style: italic;">DetLot</span> table  (default sort order).</p>

        <p class="p_Comment"><span class="f_ImageCaption">When set to 1, profiles are sorted based onto fields LOT, SOUSLOT, SCIE,
		DORMANT and LIGNE from <span style="font-style: italic;">DetLot</span> table. Sash frames will then be handled 
		first.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_ImageCaption">However, when using a profile into both sash and outer farmes at the same
		time, this sort method is no more </span></p>

        <p class="p_Comment"><span class="f_ImageCaption">reliable unless having error messages or machine driver 
		problems.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Note:</span><span
        class="f_ImageCaption"> Those sorting methods impact optimization documents as well as machine driver links, in case no sort
		method is applied at driver level.</span></p>

        <p class="p_Comment">       </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.035</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Modified tables</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Created tables</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">None</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">None</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">New WPREPORT function:</span><span class="f_ImageCaption"> The
        </span><span style="color: #0000ff;">Sendmail (Subject : string; Text ; string ; Attachment: string ;  ForMail ; string ;
		FromMail : string ; FromName ; string ; SMTPHost : string ; SMTPPort:integer ; Authentification : integer) : 
		Boolaen</span><span
        style="font-family: 'Times New Roman'; color: #0000ff;"></span><span
        class="f_ImageCaption"> function is designed to send a mail automatically to a given receiver, from a WPR report. This 
		returns </span><span class="f_Variables">True</span><span
        class="f_ImageCaption"> when the email is correctly sent, </span><span
        class="f_Variables">False</span><span class="f_ImageCaption"> otherwise. The function uses the default mail client declared
		into the system.</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">Subject</span><span
                class="f_ImageCaption">               subject of the mail (facultative but better when set).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">Text</span><span
                class="f_ImageCaption">               body of the mail (facultative but better when set).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">Attachment</span>      
                 <span class="f_ImageCaption"> path and name of the file to be joined to the mail (facultative).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">ForMail        </span>    
                   <span class="f_ImageCaption">email address of the receiver (imperative).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">FromMail</span>      
                 <span class="f_ImageCaption">email address of the sender (imperative).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">FromName</span>      
                 <span class="f_ImageCaption">name of the sender that will be displayed along with the address 
				(facultative).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">SMTPHost</span>      
                 <span class="f_ImageCaption">name of the SMTP server used to send the mail (imperative).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">SMTPPort      
                 </span><span class="f_ImageCaption">TCP port number of the SMTP server used to send the mail (facultative, port 
				25 by default).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">Authentification      
                 </span><span class="f_ImageCaption">is worth 0 when the SMTP server does not require an authentification login to
				transfer the mail, 1 when the server requires it, then a user name and password will be prompted when the mail is
				sent (most often 0).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Example:</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        class="f_ImageCaption"> </span><br>
        <span style="color: #000080;">var</span><br>
        <span style="color: #000080;">   cpt : boolean;</span><br>
        <span style="color: #000080;">   cpt := Sendmail ('Subject of mail' , 'Mail body' , 'c:\attachedfile.txt' ,      '
		</span><span
        style="color: #000080; text-decoration: underline;">receiver@ receiver.com</span><span
        style="color: #000080;">' , '</span><span
        style="color: #000080; text-decoration: underline;">sender@sender.com</span><span
        style="color: #000080;">' , 'Sender name' , 'smtp.text.com' , 25 , 0);</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_ImageCaption">This will return <span class="f_Variables">True</span> or 
		<span class="f_Variables">False</span> into '<span style="color: #000080;">cpt</span>' variable, in case the mail is
		correctly sent or not.</p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Enhancements for DashBoard feature (TBC):</span><span
        class="f_ImageCaption"> Enhancements applied to the module (release note 8.02.x) :</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_ImageCaption">Option for "No total", from the </span><span class="f_ImageCaption"
                style="font-weight: bold;">Price</span><span
                class="f_ImageCaption"> tab of the order, is now available. In this case, the selling price displayed onto the
				dashboard will be null, and the gross makup will be set to -100.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_ImageCaption">The 3 levels of discounts from the </span><span class="f_ImageCaption"
                style="font-weight: bold;">Price</span><span class="f_ImageCaption"> tab of the order are now cumulated (Example :
				when discount1 = 50% and discount2 = 30%, displayed discount will be 65%).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_ImageCaption">The « At » field into the date selection area id now initialized to the today date,
			  when the dashboard is accessed for the first time in the session.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_ImageCaption">The « Roller shutters number » column is moved near the « Windows number » 
			  column.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 48px;"><span
        class="f_ImageCaption"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.027</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/07/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Import/Export of translations under Excel file:</span><span 
		class="f_ImageCaption"> This new feature allows to import from an Excel file, or export to an Excel file, the translations
		of the database content.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption">This feature is available through 2 menu entries, Miscellaneous | Import
		from Xls | Translations along with menu Miscellaneous | Import from Xls | Translations.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p style="text-align: center; text-indent: 45px;"><img
        src="img/clip0264eng.jpg" width="373" height="194" border="0"
        alt="clip0264eng"></p>

        <p style="text-indent: 45px;"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p style="text-indent: 45px;"><span
        class="f_ImageCaption">The export step is made of several processes. First, the user is invited to define the target
		location and file name of the Excel file containing the translations.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption">After selection, WinPro will search all translations into the database
		and add them to one or more Excel files.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption">You may consider that the maximum capacity of an Excel file is up to
		65535 lines. Once this limit is reached, WinPro will create a new Excel file with the same name followed by a sequence
		number.</span></p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p class="p_Comment"><span
        style="font-style: italic; background-color: #ffff00; text-decoration: underline;">Note:</span><span
        style="font-style: italic;"></span><span class="f_ImageCaption">First of all, WinPro will search for descriptions of each
		component of a window (article, outer frame, etc..). This description is considered as the default translation into the
		user language for this element. Then, WinPro will read the content of <span style="font-style: italic;">Traductions</span>
		table and will update this list. Refer to release note 8.0 for more details about the translation system for the database
		content that has been put in place from version 8.</p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p style="text-indent: 45px;"><span
        class="f_ImageCaption">The import step is also composed of several processes. First, the user is invited to select the
		source Excel file to be imported.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption">Then, WinPro will load the content of the file into memory, and finally
		will check existing translations in order to add or update the translation records.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.012</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Thermic module tables into a technical export:</span><span 
		class="f_ImageCaption"> Tables related to <span class="f_ImageCaption" style="font-weight: bold;">Thermic Module TM
		</span> are now included into the technical export generated from menu Tools | Export technical database.</p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Syntax maintenance:</span><span
        style="font-weight: bold; text-decoration: underline;"></span><span
        class="f_ImageCaption"> The following global variables for fillings are renamed to leave the program uniform from a syntax
		point of view:</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

		<div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 23px;"><span style="color: #008080;">Original name (French)</span></p>
              </td>
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 23px;"><span class="f_Variables">=&gt;  </span><span
                style="font-style: italic;">Renamed as (French)</p>
              </td>
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 23px;"><span class="f_Variables">=&gt;  English version</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 23px;"><span style="color: #008080;">_CouleurCrx []</span></p>
              </td>
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 23px;"><span class="f_Variables">=&gt;  </span><span
                style="font-style: italic;">_RemplCoulCrx []</p>
              </td>
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 23px;"><span class="f_Variables">=&gt;  _GBarColour []</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 23px;"><span style="color: #008080;">_CouleurCrx2 []</span></p>
              </td>
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 23px;"><span class="f_Variables">=&gt;  </span><span
                style="font-style: italic;">_Rempl2CoulCrx []</p>
              </td>
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 23px;"><span class="f_Variables">=&gt;  _GBar2Colour []</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 23px;"><span style="color: #008080;">_CouleurCrxInt []</span></p>
              </td>
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 23px;"><span class="f_Variables">=&gt;  </span><span
                style="font-style: italic;">_RemplCoulCrxInt []</p>
              </td>
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 23px;"><span class="f_Variables">=&gt;  _GBarIntClr []</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 23px;"><span style="color: #008080;">_CouleurCrxInt2 []</span></p>
              </td>
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 23px;"><span class="f_Variables">=&gt;  </span><span
                style="font-style: italic;">_Rempl2CoulCrxInt []</p>
              </td>
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 23px;"><span class="f_Variables">=&gt;  _GBar2IntClr []</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 23px;"><span style="color: #008080;">_CouleurIntercalaire []</span></p>
              </td>
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 23px;"><span class="f_Variables">=&gt;  </span><span
                style="font-style: italic;">_RemplCoulIntercalaire []</p>
              </td>
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 23px;"><span class="f_Variables">=&gt;  _FrameClrCateg []</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 23px;"><span style="color: #008080;">_CouleurIntercalaire2 []</span></p>
              </td>
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 23px;"><span class="f_Variables">=&gt;  </span><span
                style="font-style: italic;">_Rempl2CoulIntercalaire []</p>
              </td>
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 23px;"><span class="f_Variables">=&gt;  _Frame2ClrCateg []</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_ImageCaption"
        style="font-weight: bold;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.x</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';"> </span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span class="f_Heading1"
        style="font-style: italic;"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Addenum concerning Bull's eye shapes:</span> The bull's eye shape of design is
		proposed by the program since version 1, but the following features are not supported yet:</p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td>No support for glazing bars</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td>No support for sash/outer frame transoms</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim27eng.jpg" width="241"
        height="170" vspace="1" hspace="1" border="0" alt=""></p>

        <p> </p>

        <p>Those features will be available for such a shape with version 8.2 of WinPro.</p>

        <p> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Warm edges
        :</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote"> </span></p>

        <p class="p_Heading1"><span class="f_Heading1"
        style="font-size: 12pt;">Definition</span></p>

        <p class="p_Heading1"><span class="f_Heading1"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">A warm edge is a new type of spacer for glass sealed units, granting a better thermal
		insulation than the classic aluminium spacer, as a classic spacer is already a thermic bridge around the glass unit.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">The warm edges have to be defined in order to calculate the involved additional cost.
		They also have a great impact within the thermic module, even if you can use warm edges without the thermic module.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="background-color: #ffff00;">Attention! If you define at least one warm edge type, you will also have to define the standard
		aluminium spacer as a warm edge. Indeed, when at least one warm edge is defined, WinPro will control that the selected glass unit is
		compatible with the chosen warm edge.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Moreover, when at least one warm edge is defined, you will have to assign at least one warm edge for each
		glass unit into the file!!!</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">If some specific glass units cannot contain a warm edge, then a 'dummy warm edge' should be assigned to
		those glass units.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">The warm edge management dialog even contains a button allowing the user to define a
		warm edge for the overall glass file.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">The warm edges may be defined at two levels: first into a table of warm edges, where the
		code, description, price and <span class="f_Textestd" style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 
		'Arial';">&Psi;</span> coefficient (optional in case you do not use the thermic module) are set; secondly warm edges may be set into
		glazing table: for every glass unit, define there if a given warm edge is allowed or not for the specified sealed unit.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1"><span class="f_Heading1"
        style="font-size: 12pt;">Warm edges setup</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-size: 12pt;"> </span></p>

        <p class="p_Heading1">       <span class="f_Heading1"
        style="font-style: italic;">Warm edges table</span></p>

        <p class="p_Heading1"><span class="f_Heading1"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">This table is reached through menu </span><span class="f_Textestd"
        style="font-weight: bold;">Technic | Window | Warm edges</span><span
        class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0638eng.jpg" width="815" height="461" border="0"
        alt="clip0638eng"></p>

        <p class="p_Comment"><span
        style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Code</span> : code assigned to the warm edge</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span> : description of the warm edge</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Category</span> : numeric value updating a variable <span class="f_Variables">WarmEdge</span>
			  within glazing formulas.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Cannot be arched</span>: check this box when the warm edge cannot be used within an arched shape.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">No colour</span>: check this box if the warm edge cannot be painted on demand. When the user input a
			  specific colour for spacer with a no colour warm edge, no error message will be shown, glazing prices won't be be added with additional price
			  for coloured spacer, and the specific colour for spacer won't be mentioned onto any document.</td>
            </tr>
          </tbody>
        </table>
        </div>
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Use as default</span>: check this box for the warm edge to be used by default, in case no warm edge is
			  defined at order input level. If the existing default value is modified, WinPro will show a dialog to confirm the modification.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">The array</span> allows to set the prices according the warm edge thickness, along with the <span
                style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span> coefficient by default for the thermic
				computation of the window.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 42px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span style="font-weight: bold;">Thickness</span>: : thickness of the spacer considered for the price and the <span
                style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span> coefficient of the line.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 42px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span style="font-weight: bold;">Fixed price</span>: additional fixed price, by glass unit.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 42px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span style="font-weight: bold;">Perimeter</span>: additional fixed price according glass unit perimeter (by meter).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 42px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span style="font-weight: bold;">Surface</span>: additional fixed price according glass unit surface (by square meter).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 42px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span style="font-weight: bold;">Supplementary %</span>: percentage of additional fixed price to be applied to the glass unit (calculated
			  first before calculation of others additional prices for the warm edge).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 42px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span style="font-weight: bold;">Psi</span>: <span style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 
			  'Arial';">&Psi;</span> coefficient applied when the warm edge is used; this is a default value: in case another value is defined for the
			  combination of profiles, glass thickness, <span style="font-family: 'Times New Roman';">Ug</span> value and for this warm edge, this last value
			  will be used.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Apply to all glazings</span>: use this button for the displayed warm edge to be assigned to every existing
			  glazing in the file. A message box will be displayed for confirmation before proceeding. This operation may last a time according the glazing
			  file size into the database.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 12px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1" style="font-style: italic;">Glass units table</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-family: 'Lucida Casual';"> </span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0427eng.jpg" width="742" height="353" border="0"
        alt="clip0427eng"></p>

        <p class="p_Comment" style="text-align: center;"><span
        class="f_Heading1" style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Warm edges tab</span><span
        class="f_Textestd">: displays the list of available warm edges; if at least one warm edge is defined, you should select the warm edge(s) compatible with the glass 
		unit.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p style="margin: 12px 0px 0px 0px;"><span class="f_Heading1"
        style="font-size: 12pt;">Configuration array variable</span></p>

        <p> </p>

        <p>A new configuration array variable is available concerning warm edges. It returns the category value of a given warm edge for each filling:</p>

        <p style="margin: 8px 0px 0px 45px;"><span
        class="f_Variables">_FillWarmEdge[]</span></p>

        <p style="margin: 8px 0px 0px 45px;"><span
        style="font-size: 11pt; font-family: 'Lucida Console'; font-weight: bold;"> </span></p>

        <p>This variable works the same way as the others configuration variables related to fillings.</p>

        <p>When the corresponding filling is not a glass unit, and then cannot include a warm edge, this variable will return zero for this filling.</p>

        <p style="margin: 16px 0px 4px 0px;"><span
        style="font-size: 14pt; font-weight: bold; text-decoration: underline;"> </span></p>

        <p class="p_Heading1"><span class="f_Heading1"
        style="font-size: 12pt;">Warm edges usage</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 12px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1"
                style="font-style: italic;">Input</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 12px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1"
              style="font-style: italic;"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0428eng.jpg" width="799" height="521" border="0"
        alt="clip0428eng"></p>

        <p class="p_Comment" style="text-align: center;"><span
        class="f_Heading1" style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">You may globally change the warm edge type for the overall order, using the </span>
		<span class="f_Textestd"
		style="font-style: italic; font-weight: bold;">Warm edge</span><span class="f_Textestd"> combo at the bottom left of the dialog. Be careful in case
		you defined a specific warm edge by level, either at design level or at glass unit level, this last one warm edge will be the one considered by the
		software. The correct warm edge is anyway displayed, at glass description level as well as at detail level of thermic calculation.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">You may also input a warm edge for a given design in the order, using button <img src="img/embim28.jpg"
		width="21" height="21" vspace="1" hspace="1" border="0" alt=""> nearby the sealed unit code. You may finally redefine the warm edge for a particular
		glass unit, using the 'Modify glazing' context menu (right click into a glass unit).</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1" style="font-style: italic;">EDI for glass units</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">At this current day, we still have received no communication from glass suppliers concerning changes
		involved by those norms and calculation onto the EDI for glass units. We stay at your disposal for the necessary modifications if required, in
		collaboration with your suppliers.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Thermic module
        :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1"><span class="f_Heading1"
        style="font-size: 12pt;">Definitions</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">This module allows you to compute the coefficient of thermic dissipation of a design, labelled <span
        style="font-size: 11pt; font-family: 'Times New Roman';">U</span><span style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align: sub;">
		w</span> value.</p>
		
        <p class="p_Textestd"><span class="f_Textestd">An <span style="font-size: 11pt; font-family: 'Times New Roman';">U</span><span style="font-size: 6pt;
		font-family: 'Times New Roman'; vertical-align: sub;">ws</span> value will also be computed when required, for a coefficient of thermic dissipation 
		of a window with integrated roller shutter, when the curtain is shut.</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Textestd"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1">       <span class="f_Heading1"
        style="font-style: italic;">Windows and doors</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">For each filling, WinPro will determine the profiles surrounding it: couples of outer frame-sash frame,
		transom-sash frame, single outer frame when fixed pane, single transom when fixed pane, sash frame-French mullion, sash frame-door sill, sash
		frame-kaltefeind. An Uf value also needs to be assigned to each of those profile groups, taking in consideration when the profile is reinforced or not
		(for PVC). Then, WinPro calculates the surface of the profile group determined, and multiply the thermic coefficient assigned to the group by this
		surface. Regarding transoms, note that the surface is evaluated reaching the axis.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">The result found is added to the thermal calculation for glass units, obtained by multiplying the
		visible surface of glazing by their respective thermic coefficient.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Finally is added a peripheral coefficient, proper to each combination of glazing-profile, multiplied by
		the perimeter. The perimeter considered here is the visible perimeter of the glass unit.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">The main formula is then the following :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0429.gif" width="528" height="71" border="0"
        alt="clip0429"></p>

        <p class="p_Textestd" style="text-align: center;"><span
        class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 1px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold;">A</span><span
                style="font-size: 7pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">g</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> is the surface of each glass unit, panel unit or ventilator (into m²)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 1px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold;">U</span><span
                style="font-size: 7pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">g</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> is the thermic coefficient of each glass unit, panel unit or ventilator</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 1px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold;">A</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">f</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> is the surface of profiles (into m²) adjacent to a side of a glass unit</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 1px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold;">U</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">f</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> is the thermic coefficient of each profile group adjacent to a side reaching a glass unit</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 1px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold;">l</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">g</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> is the perimeter of each glass unit, panel unit or ventilator (into m)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 1px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; font-style: italic; font-weight: bold;">&Psi;</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-style: italic; vertical-align: sub;">g</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> is the peripheral thermic coefficient, depending on the glass unit, panel unit or ventilator, and depending on the
				adjacent profiles combination</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 1px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold;">l</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">Sp</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> is the glazing bars length (into m)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 1px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; font-style: italic; font-weight: bold;">&Psi;</span><span
                style="font-size: 7pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">sp</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> is the thermic coefficient for glazing bars</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 1px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold;">l</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">VRI</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-style: italic; vertical-align: sub;"></span><span
                class="f_Textestd"> is the width of the roller shutter box</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 1px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; font-style: italic; font-weight: bold;">&Psi;</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">VRI</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> is the thermic coefficient of the roller shutter box</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1"><span class="f_Textestd">Further in the document, values <span style="font-size: 11pt; font-family: 'Times New Roman';">
		U</span><span style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align: sub;">g</span><span style="font-size: 11pt; 
		font-family: 'Times New Roman';">, U</span><span style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align: sub;">p</span><span
        style="font-size: 11pt; font-family: 'Times New Roman';">, U</span><span style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align: sub;">
		a</span> will be distinguished respectively for glass units, panel units and ventilators. Same thing with values <span style="font-size: 11pt;
		font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span style="font-size: 6pt; font-family: 'Times New Roman';
		vertical-align: sub;">g</span><span style="font-size: 11pt; font-family: 'Times New Roman';">, </span><span style="font-size: 11pt; font-family:
		'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align: sub;">
		p</span><span style="font-size: 11pt; font-family: 'Times New Roman';">, </span><span style="font-size: 11pt; font-family: 'Arial Unicode MS', 
		'Lucida Sans Unicode', 'Arial';">&Psi;</span><span style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align: sub;">a</span> related to
		peripheral coefficients. Nevertheless, computation methods remain similar for all those values.</span></p>

        <p class="p_Heading1"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1" style="font-style: italic;">Boxes for integrated roller shutter</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;"> </span></p>

        <p style="margin: 4px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">When a window is calculated with an integrated roller shutter, the box affects the thermic
		performance of the design. For this calculation, 3 settings are required:</span></p>

        <p style="margin: 4px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Insulation of the box panels</span><span class="f_Textestd"> : not insulated, insulated panel installed on
			  lintel, 3 panels insulated</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Location of the shutter box</span><span class="f_Textestd"> : in contact with the outside environment or
			  hidden behind the frontage.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Ventilation</span><span
                class="f_Textestd"> : average (remaining slot at the inferior side of the shutter &lt;= 10mm) or strong (remaining slot at the inferior side of the 
				shutter &gt; 10mm)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Once those 3 values identified, a linear normalized value (</span><span class="f_Textestd" style="font-family: 'Arial
		Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span class="f_Textestd">) is applied, according the following table:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="text-align: center;"><span
        class="f_Textestd" style="font-weight: bold;">Tableau 1</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 27px 4px 24px;">

        <table cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td rowspan="2" valign="middle" width="145"
              style="width: 145px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Installation of the roller shutter box</span></p>
              </td>
              <td rowspan="2" valign="middle" width="196"
              style="width: 196px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Insulation of the shutter box panels </span><span
                class="f_ImageCaption" style="font-size: 6pt;">1</span></p>
              </td>
              <td colspan="2" valign="middle"
              style="border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align: sub;">VRI</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">(W/mK)
                </span><span class="f_ImageCaption"
                style="font-size: 6pt;">2</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="95"
              style="width: 95px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Average ventilation </span><span class="f_ImageCaption"
                style="font-size: 6pt;">3</span></p>
              </td>
              <td valign="middle" width="92"
              style="width: 92px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Strong ventilation </span><span class="f_ImageCaption"
                style="font-size: 6pt;">4</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td rowspan="3" valign="middle" width="145"
              style="width: 145px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">In contact with outside environment</span></p>
              </td>
              <td valign="middle" width="196"
              style="width: 196px; border: solid 1px #000000;"><p
                style="margin: 4px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Not insulated</span></p>
              </td>
              <td valign="middle" width="95"
              style="width: 95px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,34</span></p>
              </td>
              <td valign="middle" width="92"
              style="width: 92px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">1,10</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="196"
              style="width: 196px; border: solid 1px #000000;"><p
                style="margin: 4px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">1
                panel insulated (on lintel)</span></p>
              </td>
              <td rowspan="2" valign="middle" width="95"
              style="width: 95px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,19</span></p>
              </td>
              <td valign="middle" width="92"
              style="width: 92px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,90</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="196"
              style="width: 196px; border: solid 1px #000000;"><p
                style="margin: 4px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">3
                panels insulated</span></p>
              </td>
              <td valign="middle" width="92"
              style="width: 92px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,40</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td rowspan="3" valign="middle" width="145"
              style="width: 145px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Integrated behind frontage</span></p>
              </td>
              <td valign="middle" width="196"
              style="width: 196px; border: solid 1px #000000;"><p
                style="margin: 4px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Not insulated</span></p>
              </td>
              <td valign="middle" width="95"
              style="width: 95px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,30</span></p>
              </td>
              <td valign="middle" width="92"
              style="width: 92px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">1,50</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="196"
              style="width: 196px; border: solid 1px #000000;"><p
                style="margin: 4px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">1
                panel insulated (on lintel)</span></p>
              </td>
              <td rowspan="2" valign="middle" width="95"
              style="width: 95px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,18</span></p>
              </td>
              <td valign="middle" width="92"
              style="width: 92px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">1,10</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="196"
              style="width: 196px; border: solid 1px #000000;"><p
                style="margin: 4px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">3 panels insulated</span></p>
              </td>
              <td valign="middle" width="92"
              style="width: 92px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,45</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">The </span><span style="font-size: 11pt; font-family: 'Times New Roman';"></span><span style="font-size: 11pt;
		font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align: sub;">
		VRI</span><span style="font-size: 11pt; font-family: 'Times New Roman';"></span><span class="f_Textestd"> value found will be multiplied by the box width (into m), and
		added to the total <span style="font-size: 11pt; font-family: 'Times New Roman';">U</span><span style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align:
		sub;">w</span> value for the design, before dividing the result by the design surface (excluding the shutter box surface). See formula in the previous page.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span
        class="f_Heading1" style="font-style: italic;">Curtains for integrated roller shutters</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">If the design is produced with an integrated roller shutter, a second thermic value will be calculated specifically for
		the thermal value of the design with closed curtain. This value will be labelled </span><span style="font-size: 11pt; font-family: 'Times New Roman';">U</span>
		<span style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align: sub;">ws</span><span style="font-size: 11pt; font-family: 'Times New Roman';"></span>
		<span class="f_Textestd"> and supplied complementary with the </span><span style="font-size: 11pt; font-family: 'Times New Roman';">U</span><span style="font-size: 
		6pt; font-family: 'Times New Roman'; vertical-align: sub;">w</span><span class="f_Textestd"> value.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">In order to calculate this Uws value, the following values need to be known:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 6pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">b</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">sh</span><span
                class="f_Textestd"> : clearance left between the edges of the closed curtain and masonry. This value is the sum of bottom clearances (labelled </span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">b</span>
				<span style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">1</span><span class="f_Textestd">), top clearance (labelled
				</span><span style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">b</span><span style="font-size: 6pt; font-family: 'Times New Roman';
				font-weight: bold; vertical-align: sub;">2</span><span class="f_Textestd">) and lateral clearance (here is considered the average of lateral clearances for both
				sides, labelled </span><span style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">b</span><span style="font-size: 6pt; font-family:
				'Times New Roman'; font-weight: bold; vertical-align: sub;">3</span><span class="f_Textestd">). La valeur</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">b</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">sh</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align: sub;"></span><span
                class="f_Textestd"> value is then the sum of </span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">b</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">1</span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">+
                b</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">2</span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">+
                b</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">3</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 6pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">R</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">sh</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"> </span><span
                class="f_Textestd">: thermic resistance of the curtain itself</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Both values allow then to calculate a </span><span class="f_Textestd"
        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Delta;</span><span
        style="font-size: 11pt; font-family: 'Times New Roman';">R</span><span
        class="f_Textestd"> value, according the following array :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="text-align: center;"><span
        class="f_Textestd" style="font-weight: bold;">Tableau 2</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="middle" width="44"
              style="width: 44px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Classe</span></p>
              </td>
              <td valign="middle" width="317"
              style="width: 317px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Air permeability of the roller shutter in closed position</span></p>
              </td>
              <td valign="middle" width="75"
              style="width: 75px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">b</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">sh</span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">(mm)</span></p>
              </td>
              <td valign="middle" width="85"
              style="width: 85px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; font-weight: bold;">&Delta;</span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">R
                (m²K/W) </span><span class="f_ImageCaption"
                style="font-size: 6pt;">5</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="44"
              style="width: 44px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">1</span></p>
              </td>
              <td valign="middle" width="317"
              style="width: 317px; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">Very high permeability</span></p>
              </td>
              <td valign="middle" width="75"
              style="width: 75px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">b</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; vertical-align: sub;">sh</span><span
                style="font-family: 'Times New Roman';">&gt; 35</span></p>
              </td>
              <td valign="middle" width="85"
              style="width: 85px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">0,08</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="44"
              style="width: 44px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">2</span></p>
              </td>
              <td valign="middle" width="317"
              style="width: 317px; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">High permeability (the roller shutter itself is impermeable to air)</span></p>
              </td>
              <td valign="middle" width="75"
              style="width: 75px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">15 &lt; b</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; vertical-align: sub;">sh</span><span
                style="font-family: 'Times New Roman';"></span><span
                style="font-family: 'Times New Roman';">&le;</span><span
                style="font-family: 'Times New Roman';">35</span></p>
              </td>
              <td valign="middle" width="85"
              style="width: 85px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">0,25 . R</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; vertical-align: sub;">sh</span><span
                style="font-family: 'Times New Roman';">+ 0,09</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="44"
              style="width: 44px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">3</span></p>
              </td>
              <td valign="middle" width="317"
              style="width: 317px; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">Average permeability (the roller shutter itself is impermeable to air)</span></p>
              </td>
              <td valign="middle" width="75"
              style="width: 75px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">8 &lt; b</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; vertical-align: sub;">sh</span><span
                style="font-family: 'Times New Roman';"></span><span
                style="font-family: 'Times New Roman';">&le;</span><span
                style="font-family: 'Times New Roman';">15</span></p>
              </td>
              <td valign="middle" width="85"
              style="width: 85px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">0,55 . R</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; vertical-align: sub;">sh</span><span
                style="font-family: 'Times New Roman';">+ 0,11</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="44"
              style="width: 44px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">4</span></p>
              </td>
              <td valign="middle" width="317"
              style="width: 317px; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">Low permeability (the roller shutter itself is impermeable to air)</span></p>
              </td>
              <td valign="middle" width="75"
              style="width: 75px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">b</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; vertical-align: sub;">sh</span><span
                style="font-family: 'Times New Roman';"></span><span
                style="font-family: 'Times New Roman';">&le;</span><span
                style="font-family: 'Times New Roman';">8</span></p>
              </td>
              <td valign="middle" width="85"
              style="width: 85px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">0,80 . R</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; vertical-align: sub;">sh</span><span
                style="font-family: 'Times New Roman';">+ 0,14</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="44"
              style="width: 44px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">5</span></p>
              </td>
              <td valign="middle" width="317"
              style="width: 317px; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">Very low permeability (the roller shutter itself is impermeable to air)</span></p>
              </td>
              <td valign="middle" width="75"
              style="width: 75px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">b</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; vertical-align: sub;">sh</span><span
                style="font-family: 'Times New Roman';"></span><span
                style="font-family: 'Times New Roman';">&le;</span><span
                style="font-family: 'Times New Roman';">3 and (b</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; vertical-align: sub;">1</span><span
                style="font-family: 'Times New Roman';">+b</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; vertical-align: sub;">3</span><span
                style="font-family: 'Times New Roman';">= 0 or b</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; vertical-align: sub;">2</span><span
                style="font-family: 'Times New Roman';">+b</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; vertical-align: sub;">3</span><span
                style="font-family: 'Times New Roman';">= 0)  </span><span
                class="f_ImageCaption" style="font-size: 6pt;">6 7</span></p>
              </td>
              <td valign="middle" width="85"
              style="width: 85px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">0,95 . R</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; vertical-align: sub;">sh</span><span
                style="font-family: 'Times New Roman';">+ 0,17</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p style="margin: 4px 0px 0px 0px;"><span class="f_Textestd">With the </span><span style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode',
		'Arial'; font-weight: bold;">&Delta;</span><span style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">R</span><span class="f_Textestd"> value
		obtained, the above formula can be applied:</span></p>

        <p style="margin: 4px 0px 0px 0px;"><span
        class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 18px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><img src="img/clip0430.gif" width="212" height="102" border="0"
                alt="clip0430"></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 18px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Textestd"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">U</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">ws</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> is the thermic value of the window when curtain is shut</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">U</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">w</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> is the thermic value of the window calculated as described above</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; font-weight: bold;">&Delta;</span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">R</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> is the thermic value of the roller shutter itself when shut, as described previously</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1" style="font-style: italic;">Calculation for profiles surfaces</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">WinPro knows the base surface of the profiles, considering dimensions HxW, overlapping and clearances values set. 
		The computed surface will vary automatically in case of variable overlapping, variable section, etc., as this corresponds to the calculation norm of the thermic
		dissipation.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">WinPro will compute the profiles surfaces aiming that the sum of those surfaces added to the sum of the fillings surfaces
		corresponds to the total surface of the design. The following cases are considered during computation:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Design corner</span><span
        class="f_Textestd"> : surface of the corner is calculated; for each edge of the corner, half of this surface is considered</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Transom</span><span class="f_Textestd"> : for an assembly join with a sash or outer frame, the transom surface is stopped at the most inside
		edge of the sash or outer frame. When joined to another transom, the surface of the junction between both transoms is calculated, and half of this surface is allocated
		to each transom. Attention, transom are always calculated based onto half of its width, as both sides of the transom will be processed anyway to obtain the full width
		.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">French mullion</span><span class="f_Textestd"> :
        the surface of the sash side corresponding to the French mullion is fully evaluated; surface of attached profiles is stopped at the most inside edge of the sash 
		profile.</span></p>

        <p class="p_Textestd" style="text-align: center;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0432.gif" width="414" height="500" border="0"
        alt="clip0432"></p>

        <p class="p_ImageCaption"><span class="f_ImageCaption"> </span></p>

        <p class="p_ImageCaption"><span class="f_ImageCaption">Aside drawing shows a sample of surfaces cutting out. Each surface has a different colour than its neighbour. The
		list of surfaces computed is available into the <span class="f_ImageCaption" style="font-weight: bold;">&lsquo;</span><span class="f_ImageCaption" style="font-weight:
		bold;">thermic calculation</span><span class="f_ImageCaption" style="font-weight: bold;">&rsquo;</span> tab of the order.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1" style="font-style: italic;">Double windows</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">WinPro 8.1 will also offer features for double windows calculation, meaning 2 windows in front of one another (parallel)
		into the same outer frame. Refer to the en of the chapter for more details about this.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">For such windows, WinPro calculate thermic values as follows:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0433.gif" width="305" height="89" border="0"
        alt="clip0433"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 8px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold;">U</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">w1</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> and </span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold;">U</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">w2</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> are the </span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">U</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">w</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> coefficients for inside and outside windows, calculated individually by the program for each semi-window.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-family: 'Times New Roman'; font-style: italic; font-weight: bold;">R</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">se</span><span
                style="font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> is the thermic resistance of exchange for the outside surface of the window from the inside. Basically this value is set to à 0,04</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-family: 'Times New Roman'; font-style: italic; font-weight: bold;">R</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">si</span><span
                style="font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> is the thermic resistance of exchange for the inside surface of the window from the outside. Basically, for vertical windows, this value is
				set to 0,13. WinPro will only consider this case. The value is 0,10 for windows installed with an angle of more than 60°, but the program will not consider this
				case.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

       <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-family: 'Times New Roman'; font-style: italic; font-weight: bold;">R</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">s</span><span
                style="font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> is the thermic resistance of the space gap separating both windows, determined according </span><span class="f_Textestd"
                style="font-weight: bold;">table 3</span><span class="f_Textestd">. The default value assigned to this setting by WinPro is 0.163 (most disadvantageous case).
				You may modify this value with modifying a global variable labelled </span><span class="f_Variables">_Rs</span><span
              class="f_Textestd">.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="text-align: center;"><span
        class="f_Textestd" style="font-weight: bold;">Table 3</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td rowspan="2" valign="middle" width="67"
              style="width: 67px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Thickness of the space gap (mm)</span></p>
              </td>
              <td colspan="4" valign="middle"
              style="border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">Glass unit with coating on one side, normal emissivity (</span><span
                style="font-size: 11pt; font-family: 'TimesNewRomanPS-BoldMT';">&epsilon;</span><span
                style="font-size: 6pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">n</span><span
                style="font-size: 11pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">)
                equal</span></p>
              </td>
              <td rowspan="2" valign="middle" width="150"
              style="width: 150px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">Glass unit without coating (</span><span
                style="font-size: 11pt; font-family: 'TimesNewRomanPS-BoldMT';">&epsilon;</span><span
                style="font-size: 6pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">n</span><span
                style="font-size: 11pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">=0,89)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="62"
              style="width: 62px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">&epsilon;</span><span
                style="font-size: 6pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">n
                </span><span
                style="font-size: 11pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">=
                0,1</span></p>
              </td>
              <td valign="top" width="56"
              style="width: 56px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">&epsilon;</span><span
                style="font-size: 6pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">n
                </span><span
                style="font-size: 11pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">=
                0,2</span></p>
              </td>
              <td valign="top" width="55"
              style="width: 55px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">&epsilon;</span><span
                style="font-size: 6pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">n
                </span><span
                style="font-size: 11pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">=
                0,4</span></p>
              </td>
              <td valign="top" width="72"
              style="width: 72px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">&epsilon;</span><span
                style="font-size: 6pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">n
                </span><span
                style="font-size: 11pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">=
                0,8</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="67"
              style="width: 67px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">50</span></p>
              </td>
              <td valign="top" width="62"
              style="width: 62px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,406</span></p>
              </td>
              <td valign="top" width="56"
              style="width: 56px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,336</span></p>
              </td>
              <td valign="top" width="55"
              style="width: 55px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,260</span></p>
              </td>
              <td valign="top" width="72"
              style="width: 72px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,189</span></p>
              </td>
              <td valign="top" width="150"
              style="width: 150px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,179</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="67"
              style="width: 67px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">100</span></p>
              </td>
              <td valign="top" width="62"
              style="width: 62px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,376</span></p>
              </td>
              <td valign="top" width="56"
              style="width: 56px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,315</span></p>
              </td>
              <td valign="top" width="55"
              style="width: 55px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,247</span></p>
              </td>
              <td valign="top" width="72"
              style="width: 72px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,182</span></p>
              </td>
              <td valign="top" width="150"
              style="width: 150px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,173</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="67"
              style="width: 67px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">300
                </span><span class="f_ImageCaption"
                style="font-size: 6pt;">8</span></p>
              </td>
              <td valign="top" width="62"
              style="width: 62px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,333</span></p>
              </td>
              <td valign="top" width="56"
              style="width: 56px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,284</span></p>
              </td>
              <td valign="top" width="55"
              style="width: 55px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,228</span></p>
              </td>
              <td valign="top" width="72"
              style="width: 72px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,171</span></p>
              </td>
              <td valign="top" width="150"
              style="width: 150px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,163</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">As </span><span style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">R</span><span
        style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">se</span><span class="f_Textestd"> and </span><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">R</span><span style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold;
		vertical-align: sub;">si</span><span class="f_Textestd"> values are constant, WinPro simplifies the formula as follow :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0434.gif" width="301" height="100" border="0"
        alt="clip0434"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Please note that, according this formula, it is not necessary to know which window is inside or outside, the formula is
		anyway evaluated the same way whatever the case is.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" bgcolor="#e1f0ff" border="1"
        style="background-color: #e1f0ff; border: solid 2px #000000; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td style="border: solid 1px #000000;"><p
                style="margin: 3px 0px 0px 0px;"><span class="f_ImageCaption"
                style="font-size: 6pt; color: #808080;">1</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;"> condition for the insulation layer: Risol </span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">&ge;</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">0,5
                m²K/W</span></p>

                <p style="margin: 3px 0px 0px 0px;"><span
                class="f_ImageCaption"
                style="font-size: 6pt; color: #808080;">2</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;"></span><span
                style="font-size: 9pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; font-style: italic; color: #808080;">&Psi;</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;"></span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;"> value to be added to the thermic transmission through the frontage
				element where the shutter box is installed as product of the <span style="font-size: 9pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';
				font-style: italic; color: #808080;">&Psi;</span><span style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;"></span>
				<span style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;"> value with the length (l) of the shutter box;</span></p>

                <p style="margin: 3px 0px 0px 0px;"><span
                class="f_ImageCaption"
                style="font-size: 6pt; color: #808080;">3</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;"> remaining slot at the inferior side of the shutter box: 2 &lt; b
                </span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">&le;</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">10
                mm</span></p>

                <p style="margin: 3px 0px 0px 0px;"><span
                class="f_ImageCaption"
                style="font-size: 6pt; color: #808080;">4</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;"> remaining slot at the inferior side of the shutter box: b &gt; 10
				mm</span></p>

                <p style="margin: 3px 0px 0px 0px;"><span
                class="f_ImageCaption"
                style="font-size: 6pt; color: #808080;">5</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;"></span> <span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">&Delta;</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">R values are correct for Rsh Rsh &lt; 0,3 m²K/W (Rsh is the thermic
				resistance of the roller shutter itself, determined according NBN EN ISO 6946 in case the roller shutter is composed of homogeneous material, according NBN EN
				ISO 10211 in case of heterogeneous composition, or according EN ISO 10077-2 in case of a designed box profile). For unknown roller shutters, the resistance
				value may be ignored: Rsh = 0 m²K/W.</span></p>

                <p style="margin: 3px 0px 0px 0px;"><span
                class="f_ImageCaption"
                style="font-size: 6pt; color: #808080;">6</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;"> This case involves the usage of closing gaskets along at least 3
				sides of the roller shutter, and the remaining slot should be under 3mm</span></p>

                <p style="margin: 3px 0px 0px 0px;"><span
                class="f_ImageCaption"
                style="font-size: 6pt; color: #808080;">7</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;"> Class 5 (very low permeability) may also be used if the air flow
				measured through the closed roller shutter is not above 10 m³/h.m² (with a difference of pressure of 10 Pa 
                </span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">&ndash;</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;"> reference according NBN EN 12835). Additional conditions for class 5
				may be found into NBN EN 13125 by roller shutter type..</span></p>

                <p style="margin: 3px 0px 0px 0px;"><span
                class="f_ImageCaption"
                style="font-size: 6pt; color: #808080;">8</span><span
                style="font-family: 'Times New Roman'; color: #808080;"></span><span
                style="font-family: 'Times New Roman'; font-style: italic; color: #808080;"> Concerning more important thickness of the space gap between windows, the R<span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">s</span><span style="font-family: 'Times New Roman'; font-style:
				italic; color: #808080;"> value should be determined based on calculation method from norm ISO 15099, or on a numeric calculation or on tests.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1"><span class="f_Heading1"
        style="font-size: 12pt;">Thermic module set up</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">This set up is relatively simple and does not require a good knowledge of WinPro as it only consists in filling a various
		number of lists of values; WinPro only applies standardized formulas onto the values.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1" style="font-style: italic;">Thermic coefficient menu</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1"
              style="font-style: italic;"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">A sub menu within the Technic menu gives an access to the main settings for thermic computation.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0074beng.jpg" width="645" height="330" border="0"
        alt="clip0074beng"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1"
                style="font-style: italic;">Fillings thicknesses</span></td>
            </tr>
          </tbody>
        </table>
        </div>
        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">This dialog allows you to set up the glass or panel units thicknesses in use. For each thickness, you
		may define the </span><span style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">U</span><span style="font-size: 6pt;
		font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">g</span><span class="f_Textestd">(thermic coefficient for glass unit) or 
		</span><span style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">U</span><span style="font-size: 6pt; font-family: 
		'Times New Roman'; font-weight: bold; vertical-align: sub;">p</span><span class="f_Textestd"> (thermic coefficient for panel unit) values that you
		need in order to limit the set up of the detailled </span><span class="f_Textestd" style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode',
		'Arial';">&Psi;</span><span class="f_Textestd"> values (peripheral thermic coefficient for fillings).</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0436eng.jpg" width="444" height="316" border="0"
        alt="clip0436eng"></p>

        <p class="p_Textestd"><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">If a filling with intermediate thickness is found, the program will select the immediately below value, for the computation
		needs. <span style="text-decoration: underline;"> If the glass thickness is less than the lower thickness set, WinPro will generate a
		computation error for the <span 
		style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; text-decoration: underline;">U</span><span
        style="font-size: 6pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub; text-decoration: underline;">w
		</span> value.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1"
                style="font-style: italic;">Kaltefeinds</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1"
              style="font-style: italic;"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">This dialog allows you to set the list of article code for kaltefeinds.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0437eng.jpg" width="286" height="329" border="0"
        alt="clip0437eng"></p>

        <p class="p_Textestd"><span class="f_Heading1"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">WinPro will then look for a potential kaltefeind consumed along with the bottom profile of a door, in
		order to compute correctly the thermic value.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span
        class="f_Heading1" style="font-style: italic;">Frame + sash </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">You may define using this dialog the thermic values for outer frame / sash frame pairs of 
		profiles.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0015beng.jpg" width="1026" height="175" border="0"
        alt="clip0015beng"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p style="margin: 8px 0px 0px 0px;"><span class="f_ImageCaption">a </span><span class="f_ImageCaption"
        style="font-weight: bold;">Filter</span><span
        class="f_ImageCaption"> column may be set with an arbitrary value for each line. Those values will filter the liste of U coefficient to display when
		the menu is accessed.</span></p>

        <p style="text-align: center; margin: 8px 0px 0px 0px;"><span
        class="f_ImageCaption"> </span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0012beng.jpg" width="362" height="319" border="0"
        alt="clip0012beng"></p>

        <p class="p_Comment"><span class="f_ImageCaption">The user may use this dialog to filter the list of values to display, or may also display the whole
		liste using button <img src="img/clip0013beng.jpg" width="140"
        height="23" border="0" alt="clip0013beng">.</span><br>
        <span class="f_ImageCaption"> </span></p>
		
        <p class="p_Textestd"><span class="f_Textestd">Within this frame + sash dialog, set a distinct line for each combination of profiles, reinforced or
		not (for PVC designs), with the nature of the reinforcement, as reinforcement has a valuable involvement into thermic performance of profiles
		.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">For every combinations of outer frame / sash frame / reinforcement profile(s), a thermic value should
		be defined in function of the filling thickness. </span><span class="f_Textestd" style="font-style: italic; font-weight: bold; text-decoration:
		underline;">In case of null value, WinPro will generate an error when this value is absolutely needed.</span>.</p>

        <p class="p_Textestd"><span class="f_Textestd">A button may be used nearby each thermic value (</span><span style="font-size: 11pt; font-family:
		'Times New Roman';">&Psi;</span><span class="f_Textestd"> column), giving access to the table of detailed peripheral values for fillings. The table is
		optional thanks to the ability to set a defaukt <span class="f_Textestd" style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;
		</span><span class="f_Textestd"> value at the warm edges level or at the fillings categories level. Nevertheless those default values would be 
		penalizing for the calculation compared to detailled values; it is then better to set complete <span class="f_Textestd" style="font-family: 
		'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span class="f_Textestd"> values if they are known, for the most accurate computation
		possible.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 48px;"><img
        src="img/clip0014beng.jpg" width="529" height="278" border="0"
        alt="clip0014beng"></p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 48px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">In fact, each <span style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode',
		'Arial';">&Psi;</span> value depends on the following settings:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Profiles combination</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Filling thickness</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Filling type (glass or panel unit). There is a table for glass units, and a table for panels.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Potential warm edge (glazing spacer), or panel category</span></td>
            </tr>
          </tbody>
        </table>
        </div>

		<div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"><span style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">U</span><span style="font-size:
			  6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">g</span><span style="font-size: 11pt; font-family: 
			  'Times New Roman';"></span><span class="f_Textestd"> coefficient for glass unit or </span><span style="font-size: 11pt; font-family: 
			  'Times New Roman';"></span><span style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">U</span><span style="font-size:
			  6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">p</span><span class="f_Textestd"> for panel unit.</span>
			  <span class="f_Textestd"
                style="font-style: italic; font-weight: bold; text-decoration: underline;"> When an intermediate value </span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; text-decoration: underline;">U</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub; text-decoration: underline;">g</span><span
                class="f_Textestd" style="font-style: italic; font-weight: bold; text-decoration: underline;"> or </span><span style="font-size: 11pt;
				font-family: 'Times New Roman'; font-weight: bold; text-decoration: underline;">U</span><span style="font-size: 6pt; font-family: 
				'Times New Roman'; font-weight: bold; vertical-align: sub; text-decoration: underline;">p</span><span style="font-size: 11pt; font-family:
				'Times New Roman'; font-style: italic; font-weight: bold; text-decoration: underline;"></span><span class="f_Textestd" style="font-style:
				italic; font-weight: bold; text-decoration: underline;">is found regarding values defined in the table, the default </span><span class=
				"f_Textestd" style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; font-style: italic; font-weight: bold; text-decoration:
				underline;">&Psi;</span><span class="f_Textestd" style="font-style: italic; font-weight: bold; text-decoration: underline;"> value from the
				warm edge or panel category will be used instead (when a value is set for this particular spacer thickness into the warm-edge, otherwise
				WinPro returns a computation error).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span
        class="f_Heading1" style="font-style: italic;"> </span></p>

        <p class="p_Comment"><span class="f_Textestd">Each line of the </span><span class="f_Textestd" style="font-family: 'Arial Unicode MS', 
		'Lucida Sans Unicode', 'Arial';">&Psi;</span><span class="f_Textestd"> value array includes a column labelled </span><span
        class="f_Textestd">&lsquo;</span><span
        class="f_Textestd">Def.</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">, corresponding to a default value for the considered line.</span></p>

        <p class="p_Comment"><span class="f_Textestd">The search algorithm for </span><span class="f_Textestd" style="font-family: 'Arial Unicode MS', 
		'Lucida Sans Unicode', 'Arial';">&Psi;</span><span class="f_Textestd"> value is detailled below:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">1.</span></td>
              <td><span class="f_Textestd">WinPro tries first to find the </span><span class="f_Textestd" style="font-family: 'Arial Unicode MS', 
			  'Lucida Sans Unicode', 'Arial';">&Psi;</span><span class="f_Textestd"> value exactly matching the glazing type (thickness, U value, spacer
			  thickness) along with the group of profiles considered.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">2.</span></td>
              <td><span class="f_Textestd">In case of no match found, the program checks if a default value is set for the same considered line of </span>
			  <span class="f_Textestd" style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span class="f_Textestd"> 
			  value.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">3.</span></td>
              <td><span class="f_Textestd">If no default value has been set, the program jump to the <span class="f_Textestd" style="font-family: 
			  'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span class="f_Textestd"> value line of the same array, for the same warm-edge
			  reference, but for a spacer thickness immediately inferior (if exists).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">4.</span></td>
              <td><span class="f_Textestd">If for this line, a U value is set for the considered glazing, the program uses it.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">5.</span></td>
              <td><span class="f_Textestd">If for this line, no U value is set for this glazing, the program uses the default value set for this 
			  line.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">6.</span></td>
              <td><span class="f_Textestd">If no default value is set for this line, the program restart at point 3, until eventually all spacer thickness
			  values inferior to the targeted thickness have been reviewed.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">7.</span></td>
              <td><span class="f_Textestd">When no match is found after all spacer thicknesses are checked, WinPro fetches the default value from the
			  warm-edge for the considered spacer thickness of the glass unit. Attention, the algorithm will look for the exact spacer thickness into the
			  warm-edge, it won't look for an inferior value for the spacer as for the detailled Psi values !</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">8.</span></td>
              <td><span class="f_Textestd">If, at this stage, this value is not set, WinPro returns an error value.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 48px;"><span
        class="f_Textestd"> </span></p>

        <p
        style="border-color: #000000; border-style: solid; border-width: 1px; padding: 1px 5px 1px 5px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; text-decoration: underline;">Important note:</span></p>

        <p
        style="border-color: #000000; border-style: solid; border-width: 1px; padding: 1px 5px 1px 5px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic;">The set up of a <span style="font-size: 11pt; font-family: 
		'Times New Roman'; font-style: italic;">&Psi;</span> value for every combination is a long time spending work, but maybe be optionnal. Indeed, as soon
		as a default Psi value is set at the warm edge and panel category levels, WinPro has the ability to compute the thermic dissipation coefficient for
		the window. You may then skip this stage, setting nothing into the array, or only set up values that are the most often used. Anyway, be aware that
		the default Psi value is generally the less favorable value; then if you only work with default value, the final result will also be less favorable
		!</span></p>

        <p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span
        class="f_Heading1" style="font-style: italic;"> </span></p>

        <p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span
        class="f_Heading1" style="font-style: italic;">Frame + fixed sash</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">This dialog works the same way as the frame + sash dialog, but for a single outer frame (fixed pane).
		You should set here the outer frame and its reinforcement profile (when required), along with the various thermic values according the filling
		thickness.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span
        class="f_Heading1" style="font-style: italic;">Transom + sash</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">This dialog is similar to the frame + sash dialog, with replacing outer frames with transoms.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span
        class="f_Heading1" style="font-style: italic;">Transom + fixed sash</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">This dialog is used similarly to the frame + fixed sash dialog, with replacing outer frames
		with transoms. It also allows users to set values for sash transoms (same values in fact in case outer frame transoms and sash transoms are identical)
		.</span></p>

        <p> </p>

        <p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span
        class="f_Heading1" style="font-style: italic;">French mullions</span></p>

        <p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span
        class="f_Heading1" style="font-style: italic;"> </span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim29eng.jpg" width="979" height="136" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p style="text-align: center;"> </p>

        <p>This dialog is similar to frame + sash one, but for French mullions. It has to be set with sash frame code along with its reinforcement profile, as
		well as the French mullion code along with its potential reinforcement profile too, for any profile combination of  sash + French mullion, in order to
		clear any ambiguity.</p>

        <p> </p>

        <p>To visualize computation method, below is the program algorithm:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">1.</span></td>
              <td>For the sash frame side corresponding to the French mullion, the program fetches the sash profile code used (and its potential reinforcement
			  profile)</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">2.</span></td>
              <td>Then, for the same side of the same leaf, the program will look for an existing French mullion profile category. If exists, WinPro stored it
			  internally, along with its potential reinforcement profile reference.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">3.</span></td>
              <td>The program then search for a French mullion profile into the corresponding side of the adjacent leaf.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">4.</span></td>
              <td>If such a profile is found into the adjacent leaf, 2 cases:</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 18px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">a.</span></td>
              <td>Either an existing French mullion profile has already been found into the 1st leaf; the second reference will then also be stored by the
			  program (correspond to the 'French mullion2' field), along with its potential reinforcement profile reference.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 18px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">b.</span></td>
              <td>Or a French mullion profile hasn't been found for first leaf; the program will then store the found French mullion reference of the second
			  leaf as the main French mullion (correspond to the 'French mullion' field) , as well as its potential reinforcement profile.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>6 cases should be considered for the set up.</p>

        <p>Whatever the case is, all profile combinations should be detailled inti the array, without reinforcement, reinforced one side, reinforced both sides.</p>

        <p>The first example will be detailled with every profile combinations (without reinforcement, reinforced one side, reinforced both sides).Others samples will only show
		the maximum reinforcement case with no detail for others combinations not reinforced, but you still have to detail all combinations into the array.</p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-style: italic; text-decoration: underline;">Case 1 :<span
                style="font-style: italic; text-decoration: underline;"> 2 identical sash profiles for each leaf, no French mullion (complete detail of all combinations, with
				and without reinforcement, 4 cases)</span></td>
            </tr>
          </tbody>
        </table>
        </div>
 
        <p style="margin: 8px 0px 0px 24px;"><img src="img/clip0022.zoom69.jpg"
        width="482" height="172" border="0" alt="clip0022"></p>

        <p style="margin: 8px 0px 0px 24px;"><img src="img/clip0024.zoom68.jpg"
        width="480" height="170" border="0" alt="clip0024"></p>

        <p style="margin: 8px 0px 0px 24px;"><img src="img/clip0025.zoom68.jpg"
        width="481" height="171" border="0" alt="clip0025"></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0026.zoom69.jpg" width="480" height="172" border="0"
        alt="clip0026"></p>

        <p><span
        style="font-style: italic; text-decoration: underline;"> </span></p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">As many lines to create as possible combinations, in sequence:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 24px;">

        <table cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 32px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">Sash</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 32px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Sash reinf.</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 32px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">French mullion</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 32px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">French mullion reinf.</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 32px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">French mullion 2</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 32px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">French mullion reinf. 2</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 32px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Sash reinf. 2</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 17px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 17px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 17px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 17px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 17px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 17px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 17px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff6600;"> </span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #33cc33;">Reinf.
                A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff6600;"> </span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 10px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 10px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 10px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 10px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 10px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 10px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 10px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff6600;">Reinf. A</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 6px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 6px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #33cc33;">Reinf. A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 6px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 6px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 6px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 6px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 6px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff9933;">Reinf. A</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-style: italic; text-decoration: underline;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-style: italic; text-decoration: underline;">Case 2 : 2 identical sash profiles for each leaf, one single French mullion</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0019.zoom66.jpg" width="565" height="206" border="0"
        alt="clip0019"></p>

        <p><span
        style="font-style: italic; text-decoration: underline;"> </span></p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">One line required for each profile/reinforcement combination, and for the below case</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">Sash</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Sash reinf.</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">French mullion</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">French mullion reinf.</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">French mullion 2</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">French mullion reinf. 2</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Sash reinf. 2</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;">Reinf. A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;">Reinf. B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff6600;">Reinf. A</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-style: italic; text-decoration: underline;">Case 3 : 2 identical sash profiles for each leaf, two French mullions</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0020.zoom65.jpg"
        width="563" height="238" border="0" alt="clip0020"></p>

        <p> </p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">One line required for each profile/reinforcement combination, and for the below case</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">Sash</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Sash reinf.</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">French mullion</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">French mullion reinf.</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">French mullion 2</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">French mullion reinf. 2</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Sash reinf. 2</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;">Reinf. A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;">Reinf.
                B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">C</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;">Reinf.
                C</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff6600;">Reinf.
                A</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff9933;">Reinf.
                A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">C</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #33cc33;">Reinf.
                C</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #33cc33;">Reinf.
                B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #33cc33;">Reinf.
                A</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-style: italic; text-decoration: underline;">Case 4 : 2 distinct sash profiles for each leaf, no French mullion</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0851.zoom89.gif"
        width="571" height="197" border="0" alt="clip0851"></p>

        <p><span
        style="font-style: italic; text-decoration: underline;"> </span></p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">One line required for each profile/reinforcement combination, and for the below case</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">Sash</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Sash reinf.</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">French mullion</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">French mullion reinf.</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">French mullion 2</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">French mullion reinf. 2</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Sash reinf. 2</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 19px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 19px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;">Reinf.
                A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 19px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 19px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 19px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 19px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 19px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff6600;"> </span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 14px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 14px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #33cc33;">Reinf.
                B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 14px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 14px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 14px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 14px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 14px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff6600;"> </span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-style: italic; text-decoration: underline;">Case 5 : 2 distinct sash profiles for each leaf, one single French mullion</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0846.zoom89.gif"
        width="572" height="233" border="0" alt="clip0846"></p>

        <p> </p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">One line required for each profile/reinforcement combination, and for the below case</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">Sash</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Sash reinf.</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">French mullion</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">French mullion reinf.</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">French mullion 2</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">French mullion reinf. 2</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Sash reinf. 2</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;">Reinf.
                A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;">Reinf.
                B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff6600;"> </span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">C</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff9933;">Reinf.
                C</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #33cc33;">Reinf.
                B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff6600;"> </span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-style: italic; text-decoration: underline;">Cas 6: 2 distinct sash profiles for each leaf, two French mullions</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0845.zoom89.gif"
        width="572" height="270" border="0" alt="clip0845"></p>

        <p><span
        style="font-style: italic; text-decoration: underline;"> </span></p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">One line required for each profile/reinforcement combination, and for the below case</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">Sash</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Sash reinf.</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">French mullion</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">French mullion reinf.</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">French mullion 2</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">French mullion reinf. 2</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Sash reinf. 2</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;">Reinf.
                A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;">Reinf.
                B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">C</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;">Reinf.
                C</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff6600;"> </span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">D</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff9933;">Reinf.
                D</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">C</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #33cc33;">Reinf.
                C</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #33cc33;">Reinf.
                B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #33cc33;"> </span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="525"
                style="width: 525px; border: solid 1px #000000;"><p
                class="p_Notes" style="margin: 0px 0px 0px 10px;"><span
                class="f_Notes" style="font-weight: bold;">Important notes :</span><span class="f_Notes"> :</span><br>
                <span class="f_Notes">- Cut-throughs showned here are samples corresponding to the various combinations.</span><br>
                <span class="f_Notes">- The sequence used to declare profiles is important, as the software will consider this sequence to determine the correct profile
				combination used, particularly for cases 3 and 6.</span><br>
                <span class="f_Notes" style="color: #ff0000;">- For the computation to be correctly processed by the program, it is imperative that the profile rules are set
				correctly. Thus, sash frame profiles have to belong to the <span class="f_Notes" style="font-weight: bold; color: #ff0000;">Main profile</span> category, and
				French mullion profiles must belong to the <span class="f_Notes" style="font-weight: bold; color: #ff0000;">French mullion</span> category ! Every profiles set
				should also belong to the correct frame level, at the appropriate frame side, otherwise computation will return incorrect values !</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p style="text-align: center;"> </p>

        <p style="margin: 8px 0px 0px 0px;"><span class="f_ImageCaption">Once those elements fetched, the program generates a search key and use it for seeking into the 
		U</span><span style="font-size: 5pt; vertical-align: sub;">f</span><span class="f_ImageCaption"> values table. <span style="font-style: italic;">This implies then that
		French mullion profiles must be set up correctly to the appropriate sash frame, in particular when 2 French mullion profiles are used into the same pane type.
		</span></p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-style: italic;"> </span></p>

        <p style="margin: 8px 0px 0px 0px;"><span class="f_Heading1"
        style="font-style: italic;">Door bottoms</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">This dialog is similar to the frame + sash dialog, with replacing outer frames with a door sill or a kaltefeind.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span
        class="f_Heading1" style="font-style: italic;">Ventilation grid</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">The program takes consideration of ventilation grids during thermic computation. Fot this, you need to create two
		variables for profile(s) receiving the grid hole:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">CoeffU_VMC</span><span class="f_Textestd"> :
        stores the thermic coefficient of the ventilation grid.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">SurfaceVMC</span><span class="f_Textestd"> :
        stores the total surface calculated for the ventilation grid, into mm².</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0457eng.jpg" width="437" height="50" border="0"
        alt="clip0457eng"></p>

        <p class="p_Textestd"><span class="f_Textestd">WinPro retrieves the surface of the ventilation grid. The surface is deduced from the surface of the profile receiving
		the grid. Then the program compute the product of the ventilation grid' surface (converted to m²) by the grid coefficient.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1" style="font-style: italic;">Glass units table</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">This table contains additional settings for correct calculation of thermic coefficient of a window or door:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim30eng.jpg" width="625" height="483" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">U coefficient U</span><span
        class="f_Textestd"> : thermic coefficient of the glass unit.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic; font-weight: bold;">Attention! For composed glazing, this value can only be set through formulas (variable 
		</span><span class="f_Variables">Ug</span><span class="f_Textestd" style="font-style: italic; font-weight: bold;">).</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Solar factor:</span><span
        class="f_Textestd"> : </span><span class="f_ImageCaption">Coefficient of solar energy transmission for the glass unit.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Light transmission</span><span
        class="f_Textestd"> : coefficient of light transmission for the glass unit.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">Both settings are not used during thermic computation, but are shown as indication along with the description of each glass unit.</span></p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic;"> </span></p>

        <p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span
        class="f_Heading1" style="font-style: italic;">Panel units categories</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">This table can be accessed via menu </span><span class="f_Textestd"
        style="font-weight: bold;">Technic | Windows | Panels category</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Those categories will make the set up of </span><span class="f_Textestd" style="font-family: 'Arial Unicode MS', 
		'Lucida Sans Unicode', 'Arial';">&Psi;</span><span style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">p</span><span
        style="font-size: 11pt; font-family: 'Times New Roman';"></span><span class="f_Textestd"> values (peripheral coefficient for panels) easier, for simplified as for
		detailed values. A category will have to be assigned for each panel unit, and will be used to fetch necessary values for thermic calculation: either the simplified 
		</span><span class="f_Textestd" style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span style="font-size: 6pt; font-family: 
		'Times New Roman'; font-weight: bold; vertical-align: sub;">p</span><span style="font-size: 11pt; font-family: 'Times New Roman';"></span><span class="f_Textestd"> 
		value, or the relevant index number into table of detailed <span class="f_Textestd" style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;
		</span><span style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">p</span><span style="font-size: 11pt; font-family: 
		'Times New Roman';"></span><span class="f_Textestd">values.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0442eng.jpg" width="464" height="102" border="0"
        alt="clip0442eng"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 34px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Code</span><span
                class="f_Textestd"> : code of the category</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 34px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Description</span><span
                class="f_Textestd"> : description of the category</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 34px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Psi coefficient (simplified)</span><span class="f_Textestd"> : similar usage as for glass units.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1" style="font-style: italic;">Panels tables (standard panels, decorative panels, composed panels)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0443eng.jpg" width="464" height="375" border="0"
        alt="clip0443eng"></p>

        <p class="p_Textestd"><span class="f_Heading1"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Those tables contain additional settings for correct computation of the thermic coefficient for a window or 
		door:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Thermic category</span><span class="f_Textestd"> : sets the panel category for thermic computation (See
			  above Panels category). All panel types are supported.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0444eng.jpg" width="592" height="507" border="0"
        alt="clip0444eng"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">U coefficient U</span><span
                class="f_Textestd"> : thermic coefficient for the panel.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic; font-weight: bold;">Attention! This value is set for standard panels and decorative panels only. For composed panels, you will have to define
		this value by formulas (variable </span><span class="f_Variables">Up</span><span
        class="f_Textestd"
        style="font-style: italic; font-weight: bold;">).</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1" style="font-style: italic;">Ventilators table</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">This table contains additional settings for correct calculation of thermic coefficient of a window or door:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0445eng.jpg" width="598" height="424" border="0"
        alt="clip0445eng"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">U coefficient U</span><span
                class="f_Textestd"> : thermic coefficient for the ventilator</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;"><span
                class="f_Textestd"
                style="font-weight: bold;">&lsquo;</span><span
                class="f_Textestd" style="font-weight: bold;">Psi</span><span class="f_Textestd" style="font-weight: bold;">&rsquo;</span> coefficient</span><span
                class="f_Textestd"> : peripheral coefficient of the ventilator. Attention, this coefficient is applied for the whole ventilator perimeter, and then
				replaces the <span class="f_Textestd" style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span style="font-size: 6pt;
				font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">g</span> of the glazing, at the interface between the glass unit and the ventilator.
				</span> 

                <p class="p_Textestd"><span class="f_Textestd"> </span></p>

                <p><span style="color:#ff0000">Caution!!!</span>  Thermic computation including ventilators is disabled by default. For the program to consider the ventilator
				within below described calculation, add the following section and key into settings table:</p>

                <p>[Thermique]<span class="f_Winproini"></span></p>

                <p><span class="f_Winproini">Aerateurs Simplifies = 0 <span
                style="color:#000000"><em>The ventilator is affecting the thermic computation, otherwise not</em></span></span></p>

                <p></p>

                <p></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1" style="font-style: italic;">Glazing bars table</span></td>
            </tr>
          </tbody>
        </table>
        </div>

		<p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">This table contains additional settings for correct calculation of thermic coefficient of a window or door:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0446eng.jpg" width="588" height="378" border="0"
        alt="clip0446eng"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">&lsquo;</span><span class="f_Textestd" style="font-weight: bold;">psi</span>
			  <span class="f_Textestd" style="font-weight: bold;">&rsquo;</span><span class="f_Textestd" style="font-weight: bold;">Coefficient </span>
			  <span class="f_Textestd"> : linear coefficient of the glazing bar
                (</span><span class="f_Textestd"
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align: sub;">Sp</span><span
                class="f_Textestd">).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">The </span><span class="f_Textestd" style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; 
		font-weight: bold;">&Psi;</span><span style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">Sp</span>
		<span style="font-size: 11pt; font-family: 'Times New Roman';"></span><span class="f_Textestd"> coefficient will be applied onto the length of the bars of the Georgian
		frame. This length is automatically calculated and stored by WinPro; it can be redefined by rule, with assigning the </span><span class="f_Variables">PsiLn</span>
		<span class="f_Textestd"> variable into glazing bars formula, in order to take in consideration the eventual glazing bars drawing formulas you may have created
		.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1" style="font-style: italic;">Integrated roller shutter boxes</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">The set up of thermic values for the roller shutter boxes depends on variables and input options, which make the
		calculation using fixed values impossible. You may then have to set by rule a </span><span style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">
		&Psi;</span><span class="f_Textestd"> value that will be recorded into a </span><span class="f_Variables">Psi</span><span class="f_Textestd"> labelled variable. The
		value of the </span><span class="f_Variables">Psi</span><span class="f_Textestd"> variable will correspond to one of the values of array 1 (see above). If this variable
		is not initialized properly, or is null, WinPro will apply the maximum </span><span class="f_Textestd" style="font-family: 'Arial Unicode MS', 
		'Lucida Sans Unicode', 'Arial';">&Psi;</span><span class="f_Textestd"> coefficient, value would then be 1.5.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1" style="font-style: italic;">Integrated roller shutter curtains</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">The </span><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">R</span><span
        style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">sh</span><span
        class="f_Textestd"> value, which represents the thermic resistance of the design, will be available after setting a fixed value into the curtain file. This value may be
		changed afterward, with setting the </span><span class="f_Variables">RSH</span><span class="f_Textestd">  variable into a curtain formula. If the variable is left as
		null, and the fixed value is not defined, the program will consider the most disadvantageous value, </span><span style="font-size: 11pt; font-family: 
		'Times New Roman'; font-weight: bold;">R</span><span style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">sh</span>
		<span style="font-size: 11pt; font-family: 'Times New Roman';"></span><span class="f_Textestd"> = </span><span class="f_Textestd" style="font-weight: 
		bold;">0</span><span class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0447eng.jpg" width="592" height="405" border="0"
        alt="clip0447eng"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">The class of thermic resistance for shutter curtains will exclusively be assigned through a </span><span 
		class="f_Variables">ThermicClass</span><span class="f_Textestd">  variable, to be defined into curtain formula, according </span><span class="f_Textestd" 
		style="font-weight: bold;">table 2</span><span class="f_Textestd"> (see above). If the variable is not set, or set with a value lower than 1, WinPro will automatically
		assign 1 to the variable (most disadvantageous case). If the value is greater than 5, WinPro will assign a value of 5. In case the variable value is a decimal number,
		it will be rounded to the nearest integer number.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1"><span class="f_Heading1"
        style="font-size: 12pt;">Thermic module usage</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">The use is particularly simple.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0448eng.jpg" width="571" height="355" border="0"
        alt="clip0448eng"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">You may simply disable the thermic computation, checking the box labelled
		</span><span class="f_Textestd">&lsquo;</span><span
        class="f_Textestd" style="font-weight: bold;">Do not print thermic coefficient</span><span class="f_Textestd">&rsquo;</span></p>

        <p class="p_Textestd"><span class="f_Textestd">See also above for the warm edges usage feature.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">That's all you need to do for the input operation!</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">The thermic calculation results may be checked into 4 locations:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">Into the
        </span><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">&lsquo;</span><span
        class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">Order summary</span><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">&rsquo;</span><span
        class="f_Textestd"> tab: an additional column Uw indicate the calculated values by window. At the bottom left area for total price, an additional line displays the
		average balanced value for the overall order. In case of computation error (missing setting), question marks (???) will be displayed in place of the thermic values
		.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">Into the new </span><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">&lsquo;</span><span
        class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">Thermic computation</span><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">&rsquo;</span><span class="f_Textestd"> tab. This tab of the order displays a full detail of the computation, for
		glass unit or panel unit, and their surrounding profile sets
		.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">Screenshot:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0450eng.jpg" width="469" height="547" border="0"
        alt="clip0450eng"><span class="f_Textestd">  <img
        src="img/clip0449eng.jpg" width="704" height="408" border="0"
        alt="clip0449eng"></span></p>

        <p class="p_Textestd" style="text-align: center;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">In case of error, the incorrect line will be highlined in red colour, with the 'Error' label at the beginning of the 
		line.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">Example</span><span
        class="f_Textestd"> :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0451eng.jpg" width="267" height="500" border="0"
        alt="clip0451eng"><span class="f_Textestd">         <img
        src="img/clip0452eng.jpg" width="710" height="406" border="0"
        alt="clip0452eng"></span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">Onto customer documents</span><span class="f_Textestd">. The thermic value by design is printed among the
		description, into a dedicated area. A summary is also printed at the end of the document, listing every design with individual value, surface and quantity. This 
		summary also displays a global balanced value (sum of values of each design multiplied by each respective quantity, the sum is then divided by the total surface of all
		designs).</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0453eng.jpg" width="609" height="550" border="0"
        alt="clip0453eng"><span class="f_Textestd">   </span></p>

        <p class="p_Textestd" style="text-align: center;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0454eng.jpg" width="612" height="352" border="0"
        alt="clip0454eng"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p style="margin: 32px 0px 4px 0px;"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">Ujn (day/night coefficient)</span></p>

        <p class="p_Comment"><span class="f_Textestd">In Belgium and France, a notion of </span><span
        class="f_Textestd">&lsquo;</span><span
        class="f_Textestd">day/night</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">, coefficient exists, labelled Ujn.</span></p>

        <p class="p_Comment"><span class="f_Textestd">This coefficient applies onto combinations of windows and incorporated roller shutter.</span></p>

        <p class="p_Comment"><span class="f_Textestd">This value is computed as follows:</span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span class="f_Textestd"
        style="font-weight: bold;">France :</span></p>

        <p style="margin: 4px 0px 4px 48px;"><img src="img/clip0010.jpg"
        width="130" height="59" border="0" alt="clip0010"></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span class="f_Textestd"
        style="font-weight: bold;">Belgium :</span></p>

        <p style="margin: 4px 0px 4px 48px;"><img src="img/clip0011.jpg"
        width="149" height="61" border="0" alt="clip0011"></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span class="f_Textestd">In order to allow WinPro to apply the right formulae for the right customer, a global variable has to be set, as 
		follows:</span></p>

        <p style="text-indent: 45px;"><span class="f_Textestd">_FormuleUjn := x</span></p>

        <p class="p_Comment"><span class="f_Textestd">Replacing x with 0 for France, 1 for Belgium. Any other value will be ignored.</span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span class="f_Textestd">If you wish to use always one of both formulae, simply set the variable _FormuleUjn at the site variable level of the set
		up (menu Tools | Preferences.). If you wish to make this rule vary according the customer code, set this variable at the customer record level rather than at site
		formulae level.</span></p>

        <p class="p_Comment"><span class="f_Textestd">Please note that when this value is not set, or set with a value other than 0 or 1, the Ujn wouldn't be nor computed,
		neither mentioned onto documents.</span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Heading1"
        style="font-size: 12pt;">Limitation of computation for the thermic module</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Using 8.1 versions, the computation can be granted as correct for every rectangular window.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">For trapeziums and triangles, some minor gaps may be encountered comparing with the theoretical calculation (error
		related to the evaluation of the surface for profiles corners).</span></p>

        <p class="p_Textestd"><span class="f_Textestd">For others shapes, the computation is more approximated, and cannot be granted.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Designs including empty spaces are not correctly handled (missing calculation of the loss for semi-transom beside an
		empty space).</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Those problems should be solved into the following releases.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1"><span class="f_Heading1"
        style="font-size: 12pt;">Calculation accuracy for the thermic module</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">The computation is done using floating point numbers, according norm IEEE-754 over 64 bits (around 15 significant
		digits). Internal memory computation is done over 80 bits. Basic values may be set with over a maximum of 5 decimals, as well as for intermediate values, but the full
		decimals are used during internal computation. The final result is rounded on 2 decimals at the nearest value (4-5 rounding). Attention, some rounded value may seem to
		be wrong, but are most probably correct. For instance, a value of 1.4449999 would be rounded to 1.44 using a 2 decimals display format, but rounded to 1.445 with a 3
		decimals display format, and to 1.44500 using a 5 decimals format.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1"><span class="f_Heading1"
        style="font-size: 12pt;">Guarantees for thermic module</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Everything has been done aiming to offer an exact computation of the thermic performance for windows, based on
		coefficients customized by users into the program.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Nevertheless, none programs having none computation errors, we fully detail the computation for each window.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Indeed, mainly two kinds of errors may occur: either a software error, in case the program meets a not programmed
		situation; or a data error, in case the user made errors when inputting thermic values of components.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">We then recommend that you check the computation values for every quote or order when those values have a critical importance. For that, we
		supply a complete, clear and accurate control tool, and then any responsibilities will be declined in case of error. We are engaged in correcting the software once the
		error is reproduced and analyzed by our services.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Doubled windows
        :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">This module is currently at finalization stage and will be documented further later.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1"><span class="f_Heading1"
        style="font-size: 12pt;">Definition</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">A window is advertised by the name of </span><span class="f_Textestd">&lsquo;</span><span
        class="f_Textestd">doubled window</span><span class="f_Textestd">&rsquo;</span><span class="f_Textestd"> when 2 sash frames are installed one in front of another
		(paralleled), into the same outer frame. That sort of product is mostly wide spread into northern countries and East European countries.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">amples of doubled windows, photographed at Warsaw:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0455.zoom96.gif" width="513" height="663" border="0"
        alt="clip0455"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1"><span class="f_Heading1"
        style="font-size: 12pt;">Data set up</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">A doubled window is basically set up and input like two single windows, with a common outer frame.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">The main thing to do is only to enable the feature at the outer frame set up level.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">At the formula level, you may use a variable labelled <span class="f_Variables">DoubleWindow</span>, available at sash
		and fittings frame levels:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-weight: bold;">0</span><span
        class="f_Textestd">= no doubled window</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-weight: bold;">1</span><span
        class="f_Textestd">= inside window</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-weight: bold;">2</span><span
        class="f_Textestd">= outside window</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">The concept of inside/outside windows is set for a design viewed from inside. In case the design is input viewed from
		outside (system property), value 1 will be set for the outside window, 2 would be set for the inside one.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">In order to avoid ambiguous reference, we will label the inside window as main window, and the outside window will be
		labelled as slave window.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">At the milling operations point of view, nothing particular should be done for such feature. Millings code from sash or
		fitting frames toward the outer frame are available for both windows. Millings from a sash frame toward itself, or from a fitting frame toward a sash frame are based on
		the original window where the milling were generated, and will reach the corresponding sash frame (millings from a sash or fitting frame within a main window will reach
		the main sash frame, millings from a slave window will reach the slave sash frame).</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1"><span class="f_Heading1"
        style="font-size: 12pt;">Usage</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span
        class="f_Heading1" style="font-style: italic;">Input</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">The input stage for such a product is very simple, but it is better to start with inputting the outer frame elements
		(outer frame itself, O/F transoms, peripheral profiles, roller shutter), before taking care of sash frames. Anyway, WinPro would be able to adapt the respective sash
		frame of each facet of the design, in case the outer frame is modified afterward.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">The main window is input normally, like usually for a basic window.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">For the slave window, a right click into the list of designs (right side pane of the order) will show a new context menu
		suitable for adding a <span class="f_Textestd" style="font-weight: bold;">Doubled window</span>. WinPro will then create a second record into the list of window, which
		will contain the slave window specifications. Anything may be modified at this step, except the outer frame settings.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Please also not that a right click onto a slave window will have no effects. Also, when a slave window is already
		defined, a right click onto the main window will not allow the user to input a slave window again. Finally, if you wish to delete a slave window, simply delete the main
		window.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1"
                style="font-style: italic;">Computation</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">The slave window won't be edited separately onto a specific document; it will be edited along with the main window. For
		instance, assembly list documents will be printed with both slave and main windows into the same layout. But in order to correctly identify the components, the slave
		window components will be printed just after the main window last component, as well as for the Component tab of the order.</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Textestd"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1"
                style="font-style: italic;">Drawings</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Sash frames are drawn according the view orientation defined into the system, and according their visibility regarding
		this view. It i possible to print both sashes with printing both views onto documents systematically.</span></p>

        <p class="p_Heading1"><span class="f_Heading1"
        style="font-style: italic;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1" style="font-style: italic;">Cut throughs<span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">This feature is not available currently and will be developed later.</span></p>

        <p style="margin: 4px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>

        <p style="margin: 4px 0px 4px 0px;"><img src="img/embim31.jpg"
        width="29" height="23" vspace="1" hspace="1" border="0" alt=""> <span
        class="f_TitreReleaseNote"> marking feature</span></p>

        <p style="margin: 4px 0px 4px 0px;"><span
        class="f_Heading1"> </span></p>

        <p class="p_Heading1"><span class="f_Heading1"> </span></p>

        <p class="p_Heading1" style="text-align: center;"><img
        src="img/clip0033eng.jpg" width="280" height="428" border="0"
        alt="clip0033eng"></p>

        <p class="p_Heading1" style="text-align: center;"><span
        class="f_Heading1"> </span></p>

        <p class="p_Heading1"><span class="f_Heading1">Definition</span></p>

        <p class="p_Heading1"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">The new
        </span><img src="img/embim32.jpg" width="20" height="16" vspace="1"
        hspace="1" border="0" alt=""><span class="f_Textestd"> marking module is design to answer your legal obligations regarding  marking, automatically.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">This module allows the set up and printing of any imperative disclosure about the 
		</span><img src="img/embim32.jpg" width="20" height="16" vspace="1" hspace="1" border="0" alt=""><span class="f_Textestd"> marking. Note that the content of this mark
		remains under your full responsibility, Winpro only supplies the necessary mechanisms, as well as a printing format meeting legal requirements.</span></p>

        <p style="margin: 16px 0px 4px 0px;"><span
        class="f_Heading1">Set up</span></p>

        <p class="p_Textestd"><span class="f_Textestd">CE marking feature is a 2 levels set up.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">The first level</span><span class="f_Textestd"> allows to define different type of 
		</span><img src="img/embim32.jpg" width="20" height="16" vspace="1" hspace="1" border="0" alt=""><span class="f_Textestd"> mark, according for instance the window types
		(door, casement, slider, . into PVC, aluminium, wood, .), the production site, the destination country, etc.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">At this set up level, a record needs to be created for each mark type, through menu 
		</span><span class="f_Textestd" style="font-weight: bold;">Technic | CE Marking</span><span
        class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Each record is composed of two pages. The first one consists in fixed data for each mark (field in bold are necessary !) µ
		:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Description : set here the design type, e.g. </span><span class="f_Textestd"
                style="font-weight: bold;">&lsquo;</span><span
                class="f_Textestd" style="font-weight: bold;">PVC casement</span><span class="f_Textestd"
                style="font-weight: bold;">&rsquo;</span><span
                class="f_Textestd" style="font-weight: bold;">.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Category : random numeric value, which just needs to be different for each mark</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Identification number (optional)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Name and address of the company applying the mark</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Certification number (optional)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Identification of the corresponding norm</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">A variable name should be created here (without « _ »), in order to retrieve the thermic coefficient Uw of the design, as it is
			  computed by WinPro (in case you use the thermic module), or as it is computed through user defined formulas along the design computation. Refer to point 2 of the
			  second set up level below.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0030eng.jpg"
        width="339" height="425" border="0" alt="clip0030eng"></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">The second page is a list similar to the existing list of questions met into the technical set up.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">The differences with existing question sets are : in a fist hand, a new column is added for a <span
        class="f_Textestd">&lsquo;</span><span
        class="f_Textestd">Unit</span><span
        class="f_Textestd">&rsquo;</span>  value, for settings requiring a measure unit (e.g. for the thermic computation, the unit would be 
		<span class="f_Textestd">&lsquo;</span><span class="f_Textestd">W/m².K</span>); in a second hand, those <span class="f_Textestd">&lsquo;</span>
		<span class="f_Textestd">questions</span><span class="f_Textestd">&rsquo;</span> are not accessed straight by the user into the interface as for standard questions, 
		as answers will have to be set by programming it only.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">The second level</span><span class="f_Textestd"></span><span
        class="f_Textestd"> consists in using those pseudo-questions defined at the set up level, into formulas.  This is done in a 2 steps way:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 8px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">1.</span></td>
              <td><span class="f_Textestd">First, the mark to use with a particular design has to be set. This is to be done before the design computation, but after WinPro has
			  initialized the global variables related to this design. Then, the mark type should be set into one of the below formula:</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Site formula</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">User formula</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">System formula</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Customer specific formula</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="color: #000000;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">The selection of the mark type is done by assigning a value for variable </span><span
        class="f_Variables">_CEMarking</span><span class="f_Textestd">; this value will be used as a search key for the mark type, corresponding to the content of field 
		<span class="f_Textestd" style="font-weight: bold;">Category</span>.</p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">Sample of system formula</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim35eng.jpg" width="285" height="121" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">2.</span></td>
              <td><span class="f_Textestd">Into the data set up itself, you may modify the variables for questions defined at the mark level, with your suitable values. 
			  Note that all marking variables are considered as global variables, question variables or answer selection variables.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">Example of questions creation (variable names without « _ »)</span></p>

        <p style="margin: 8px 0px 0px 24px;"><img src="img/clip0031eng.jpg"
        width="774" height="330" border="0" alt="clip0031eng"></p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">Example of questions usage into a fittings frame (variable names with « _ »)</span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0032eng.jpg" width="513" height="181" border="0"
        alt="clip0032eng"></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">The modification of default values defined for questions must imperatively be done from a tab where components are computed 
		(article, profile, .).</span><br>
        <span class="f_Textestd">It is then prohibited to assign variables for questions from:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">The </span><span
                class="f_Textestd"
                style="font-style: italic;">Formula</span><span
                class="f_Textestd"> sub-tab from the </span><span class="f_Textestd" style="font-style: italic;">Supplier</span><span
                class="f_Textestd"> tab of a glass unit record</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">The </span><span class="f_Textestd" style="font-style: italic;">Round up glazing</span><span
                class="f_Textestd"> tab of a Supplier record</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Questions formulas</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Filters formulaes</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">The site, user, system and customer specific formulas</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">However, as an exception, it is anyway possible to modify questions values for CE marking from customer discount formulas.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p
                class="p_Textestd" style="margin: 0px 0px 0px 11px;"><span
                class="f_Textestd"
                style="font-weight: bold; text-decoration: underline;">Note:</span></p>

                <p class="p_Textestd" style="margin: 0px 0px 0px 11px;"><span
                class="f_Textestd">To be able to retrieve a thermic coefficient Uw for the design, you must have created first a variable name into the 
                </span><span class="f_Textestd"
                style="font-style: italic;">Description</span><span
                class="f_Textestd"> tab of the CE label, as seen previously.</span></p>

                <p class="p_Textestd" style="margin: 0px 0px 0px 11px;"><span
                class="f_Textestd">A question labelled with this variable name must then be created into the question tab, with numerical format (it is better to set a measure
				unit, as well as a zero default value for this option).</span></p>

                <p class="p_Textestd" style="margin: 0px 0px 0px 11px;"><span
                class="f_Textestd">When the variable is not altered manually by the user along the design formulas computed, the created variable will retrieve the thermic
				coefficient as computed by WinPro, if the thermic module is available into your licence.</span></p>

                <p class="p_Textestd" style="margin: 0px 0px 0px 11px;"><span
                class="f_Textestd">When the concerned variable is altered along design formulas (see above screenshot), the new assigned value will be retrieved into the 
				option.</span></p>

                <p class="p_Textestd" style="margin: 0px 0px 0px 11px;"><span
                class="f_Textestd">This in order to allow a manual thermic value without the whole and finalized thermic module set up.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">At the end of the computation, meaning when all rules related to the windows are executed, the variables for questions are retrieved, and the final
		set of questions/answers is stored into table DETAIL2, ready for printing labels at the optimization stage.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim36eng.jpg" width="511" height="425" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">You will then be able to use information related to the marks into WpReport, or any reporting software.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Note that the document used for printing labels is set a standard WPR document labelled « CE labels », you may create any needed copy using the
		button <span class="f_Textestd">&lsquo;</span><span class="f_Textestd">Standard report</span><span class="f_Textestd">&lsquo;</span> from WPR.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim37eng.jpg" width="428" height="242" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Also, when sending an order or quote into export table (when printing a customer document set with a data export for instance), various new 
		fields into </span><span class="f_Textestd" style="font-style: italic;">FEN</span><span class="f_Textestd"> table will contain options printed onto  label, 
		including the set of questions/answers, along with the others details as the address, the certification number, etc., this in order to store information as defined 
		when the order was recorded.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">This new feature has lead us to lightly modify the initial computation sequence for global variables into WinPro. The
		initial computation sequence was :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-style: italic;">1. Overall variables (dates, wall configuration, ...)</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-style: italic;">2. Site formulas</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-style: italic;">3. User formulas</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-style: italic;">4. System formulas</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-style: italic;">5. Window configuration and description variables</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-style: italic;">6. Customer specific formulas</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">The new computation sequence is now:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-style: italic;">1. Overall variables (dates, wall configuration, ...)</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-style: italic;">2. Window configuration and description variables</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-style: italic;">3. Site formulas</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-style: italic;">4. User formulas</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-style: italic;">5. System formulas</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-style: italic;">6. Customer specific formulas</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">7. <img src="img/embim32.jpg" width="20" height="16" vspace="1" hspace="1"
        border="0" alt=""> marking variables</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">The </span><span
        class="f_Variables">_CEMarking</span><span class="f_Textestd"> variable should be defined before step 7, then into a site, user, system or customer formula. It was in
		fact necessary to be able to test the window configuration variable into the above mentioned formulas, that is the reason why those configuration variables are now
		computed at step 2 into the computation sequence.</span></p>

        <p style="margin: 16px 0px 4px 0px;"><span class="f_Heading1">Installation</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Several new keys are created into <span class="f_Textestd"
        style="font-style: italic;">settings</span> table, in order to manage with the label format and the feature behaviour, among :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Comment" style="font-weight: bold;">[Label CE]                
               ; </span><span class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">labels format</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Winproini">Height</span><span class="f_Textestd">             
                 </span><span class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">= label height, into mm (type integer I)</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Winproini">Width</span>                        <span
        class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">= label width, into mm (type integer I)</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Winproini">Top Margin        </span>        <span
        class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">= label top margin, into mm (type integer I)</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Winproini">Bottom Margin</span>                <span
        class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">= label bottom margin, into mm (type integer I)</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Winproini">Left Margin        </span>        <span
        class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">= label left  margin, into mm (type integer I)</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Winproini">Right Margin</span>                <span
        class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">= label right margin, into mm (type integer I)</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Comment" style="font-weight: bold;">[Optimisation]            
           </span><span class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">; overall settings related to optimization</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Winproini">Label CE</span>                <span
        class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">= set to 1 to defaultly check the printing box for CE labels at optimization stage, zero to default uncheck the 
		box (type integer I).</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Comment" style="font-weight: bold;">[Export Groupe]          
             </span><span class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">; settings for grouped printings at optimization stages</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Winproini">Label CE                </span><span
        class="f_Winproini"
        style="font-size: 12pt; font-family: 'Courier New';">=</span><span
        class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">1 to allow a grouped (silent) printing of the CE labels after optimization, without using the document selection
		dialog, zero otherwise (default value, standard WinPro behaviour, key of type integer I)</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">For the whole related key, please take a particular care to the syntax and spelling as keys are case sensitive, and you
		may not be able to print your labels in case of a wrong set up.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">We also designed a procedure to apply the CE marking to orders created after the module has been set up. To compute the
		marking settings for those orders, simply run WinPro under command line with below described switch :/span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Comment">               <span class="f_Comment"
        style="font-size: 12pt; font-weight: bold;">WinPro /ce yyyymmdd</span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span><br>
        <span class="f_Textestd">The second switch </span><span
        class="f_Textestd" style="font-weight: bold;">yyyymmdd</span><span
        class="f_Textestd"> is the date when the orders have been created. With this optional switch, WinPro will compute the CE marking to all orders created before or
		including this date; the date switch is to be declared with year month day format, without separator, and with the century (e.g. 20090901 for September the first of
		year 2009). When the date switch is not set, WinPro will compute CE marking for all orders.</span><br>
        <span class="f_Textestd"> </span><br>
        <span class="f_Textestd">A 'logCE.txt' file is also created, containing for each order line the order number, the design number and the CE marking applied, for you to
		quickly check the result!</span></p>

        <p style="margin: 4px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>

        <p style="margin: 4px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>
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
      <td align="left"><p class="p_Comment"><span class="f_Comment"
        style="font-size: 8pt;">* Incompatible version 7.2, sauf si
        précisé</span></p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 8pt;"> </span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.073</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">26/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                modifiées</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                créées</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Nouvelle
        variables globales de remplissages:</span><span
        class="f_ImageCaption"> Les variables globales de remplissages suivantes
        ont été ajoutées :</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 23px;"><span
                class="f_Variables">_RemplUg []</span></p>
              </td>
              <td width="514" style="width: 514px;"><p
                style="margin: 4px 0px 4px 0px;"><span
                class="f_ImageCaption">=  Valeur </span><span
                style="font-style: italic;">Ug </span><span
                class="f_ImageCaption">du vitrage, onglet </span><span
                class="f_ImageCaption"
                style="font-weight: bold;">Dimension</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Variables">_RemplPsiG []</span></p>
              </td>
              <td width="514" style="width: 514px;"><p
                style="margin: 4px 0px 4px 0px;"><span
                class="f_ImageCaption">=  Valeur de la colonne </span><span
                style="font-style: italic;">PsiG </span><span
                class="f_ImageCaption">du warmedge pour l</span>&rsquo;<span
                class="f_ImageCaption">épaisseur de vitrage
                concernée.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Variables">_RemplTransLum []</span></p>
              </td>
              <td width="514" style="width: 514px;"><p
                style="margin: 4px 0px 4px 0px;"><span
                class="f_ImageCaption">=  Valeur de </span><span
                style="font-style: italic;">Transmission Lumineuse </span><span
                class="f_ImageCaption">du vitrage, onglet </span><span
                class="f_ImageCaption"
                style="font-weight: bold;">Dimension.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Variables">_RemplFacSol []</span></p>
              </td>
              <td width="514" style="width: 514px;"><p
                style="margin: 4px 0px 4px 0px;"><span
                class="f_ImageCaption">=  Valeur du </span><span
                style="font-style: italic;">Facteur Solaire </span><span
                class="f_ImageCaption">du vitrage, onglet </span><span
                class="f_ImageCaption"
                style="font-weight: bold;">Dimension</span><span
                class="f_ImageCaption">.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Variables">_RemplIntercalaire []</span></p>
              </td>
              <td width="514" style="width: 514px;"><p
                style="margin: 4px 0px 4px 0px;"><span
                class="f_ImageCaption">=  Epaisseur du premier </span><span
                style="font-style: italic;">Intercalaire </span><span
                class="f_ImageCaption">du vitrage, onglet </span><span
                class="f_ImageCaption"
                style="font-weight: bold;">Dimension</span><span
                class="f_ImageCaption">.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Variables">_RemplIntercalaire2 []</span></p>
              </td>
              <td width="514" style="width: 514px;"><p
                style="margin: 4px 0px 4px 0px;"><span
                class="f_ImageCaption">=  Epaisseur du deuxième </span><span
                style="font-style: italic;">Intercalaire </span><span
                class="f_ImageCaption">du vitrage en cas de triple vitrage,
                onglet </span><span class="f_ImageCaption"
                style="font-weight: bold;">Dimension</span><span
                class="f_ImageCaption">.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Variables">_Rempl2Ug []</span></p>
              </td>
              <td width="514" style="width: 514px;"><p
                style="margin: 4px 0px 4px 0px;"><span
                class="f_ImageCaption">=  Valeur </span><span
                style="font-style: italic;">Ug </span><span
                class="f_ImageCaption">du second vitrage, onglet </span><span
                class="f_ImageCaption"
                style="font-weight: bold;">Dimension</span><span
                class="f_ImageCaption">, en cas de </span><span
                style="font-style: italic;">Fenêtres Doubles </span><span
                class="f_ImageCaption">(note de version 8.1.0). </span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Variables">_Rempl2PsiG []</span></p>
              </td>
              <td width="514" style="width: 514px;"><p
                style="margin: 4px 0px 4px 0px;"><span
                class="f_ImageCaption">=  Valeur de la colonne </span><span
                style="font-style: italic;">PsiG </span><span
                class="f_ImageCaption">du warmedge pour l</span>&rsquo;<span
                class="f_ImageCaption">épaisseur de vitrage concernée, pour le
                second vitrage</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Variables">_Rempl2TransLum []</span></p>
              </td>
              <td width="514" style="width: 514px;"><p
                style="margin: 4px 0px 4px 0px;"><span
                class="f_ImageCaption">=  Valeur de </span><span
                style="font-style: italic;">Transmission Lumineuse </span><span
                class="f_ImageCaption">du second vitrage, onglet </span><span
                class="f_ImageCaption"
                style="font-weight: bold;">Dimension</span><span
                class="f_ImageCaption">, en cas de </span><span
                style="font-style: italic;">Fenêtres Doubles </span><span
                class="f_ImageCaption">(note de version 8.1.0).</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Variables">_Rempl2FacSol []</span></p>
              </td>
              <td width="514" style="width: 514px;"><p
                style="margin: 4px 0px 4px 0px;"><span
                class="f_ImageCaption">=  Valeur du </span><span
                style="font-style: italic;">Facteur Solaire </span><span
                class="f_ImageCaption">du second vitrage, onglet </span><span
                class="f_ImageCaption"
                style="font-weight: bold;">Dimension</span><span
                class="f_ImageCaption">, en cas de </span><span
                style="font-style: italic;">Fenêtres Doubles </span><span
                class="f_ImageCaption">(note de version 8.1.0).</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Variables">_Rempl2Intercalaire []</span></p>
              </td>
              <td width="514" style="width: 514px;"><p><span
                class="f_ImageCaption">=  Epaisseur du premier </span><span
                style="font-style: italic;">Intercalaire </span><span
                class="f_ImageCaption">pour le second vitrage, onglet
                </span><span class="f_ImageCaption"
                style="font-weight: bold;">Dimension</span><span
                class="f_ImageCaption">, en cas de </span><span
                style="font-style: italic;">Fenêtres Doubles </span><span
                class="f_ImageCaption">(note de version 8.1.0).</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Variables">_Rempl2Intercalaire2 []</span></p>
              </td>
              <td width="514" style="width: 514px;"><p
                style="margin: 4px 0px 4px 0px;"><span
                class="f_ImageCaption">=  Epaisseur du deuxième </span><span
                style="font-style: italic;">Intercalaire </span><span
                class="f_ImageCaption">du vitrage en cas de triple vitrage,
                onglet </span><span class="f_ImageCaption"
                style="font-weight: bold;">Dimension.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_ImageCaption">Ces variables sont
        indicées sur le numéro de remplissage. Pour les valeurs en rapport avec
        le calcul thermique de la fenêtre, celles-ci sont initialisées si vous
        disposez du </span><span class="f_ImageCaption"
        style="font-weight: bold;">Module Thermique ( TM )</span><span
        class="f_ImageCaption">. Ces variables peuvent s</span>&rsquo;<span
        class="f_ImageCaption">avérer utiles pour récupérer les valeurs
        thermiques sur les étiquettes du </span><span class="f_ImageCaption"
        style="font-weight: bold;">Marquage CE ( CE )</span><span
        class="f_ImageCaption">, si vous disposez du module (voir note de
        version 8.1.0).</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.071</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Complément sur la
        mise en colis:</span><span class="f_ImageCaption"> Pour les utilisateurs
        du module </span><span class="f_ImageCaption"
        style="font-weight: bold;">Gestion de Colis</span><span
        class="f_ImageCaption">, les articles à coliser sont, par défaut,
        cumulés même s</span>&rsquo;<span class="f_ImageCaption">ils
        appartiennent à des châssis différents. Vous pouvez désactiver ce
        comportement et ne pas cumuler les articles en ajoutant la clef
        suivante dans la table </span><span
        style="font-style: italic;">Settings</span><span
        class="f_ImageCaption">:</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;">[Packages]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="243" style="width: 243px;"><p class="p_Textestd"
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Winproini">Split Package By Window</span></p>
              </td>
              <td width="384" style="width: 384px;"><p
                style="margin: 4px 0px 4px 0px;"><span class="f_Winproini">=
                0</span><span class="f_Textestd">    Articles cumulés
                (comportement de base, défaut).</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="243" style="width: 243px;"><br>
              </td>
              <td width="384" style="width: 384px;"><p
                style="margin: 4px 0px 4px 0px;"><span class="f_Winproini">=
                1</span><span class="f_Textestd">    Articles non
                cumulés.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span style="font-size: 12pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.070</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Prix du
        warmedge:</span><span class="f_ImageCaption"> Le prix du warmedge est
        maintenant affecté par l'assurance et la remise vitrage définie dans la
        fiche vitrage, dans WinPro et WinPro/D.</span></p>

        <p class="p_Comment">       </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.069</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Création de table
        </span><span class="f_TitreReleaseNote"
        style="font-style: italic;">Settings</span><span
        class="f_TitreReleaseNote"> par défaut:</span><span
        class="f_ImageCaption"> A la création d'une base vide ou lors de la
        première mise a jour à partir de cette version, WinPro crée toutes les
        clefs de </span><span class="f_ImageCaption"
        style="font-style: italic;">Settings </span><span
        class="f_ImageCaption">inexistantes, avec leur valeur par
        défaut.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption">Une nouvelle section
        est également créée pour permettre de relancer ce processus en cas de
        besoin:</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;">[Settings]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="192" style="width: 192px;"><p class="p_Textestd"
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Winproini">Imported</span></p>
              </td>
              <td width="435" style="width: 435px;"><p
                style="margin: 4px 0px 4px 0px;"><span class="f_Winproini">=
                0</span><span class="f_Textestd">    Relancer le
                processus.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="192" style="width: 192px;"><br>
              </td>
              <td width="435" style="width: 435px;"><p
                style="margin: 4px 0px 4px 0px;"><span class="f_Winproini">=
                1</span><span class="f_Textestd">    Ne fait rien (valeur par
                défaut).</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment">       </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.068</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Grille de prix
        des aérateurs:</span><span class="f_ImageCaption"> Vous pouvez
        maintenant sélectionner toutes les couleurs WinPro en plus des teintes
        RAL, pour les grilles de prix de l</span>&rsquo;<span
        class="f_ImageCaption">onglet Tarif des Aérateurs.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim23.jpg" width="248"
        height="142" vspace="1" hspace="1" border="0" alt=""></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.066</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Saisie de châssis
        avec volet:</span><span class="f_ImageCaption"> Lorsque le premier
        châssis saisi dans la commande contient un volet, lors de la création
        d'un nouveau châssis, par défaut, ce dernier aura également un volet.
        Vous pouvez désactiver cette fonctionnalité en ajoutant la clé suivante
        dans la table </span><span
        style="font-style: italic;">Settings</span><span
        class="f_ImageCaption">:</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;">[Customer
        Order]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="192" style="width: 192px;"><p class="p_Textestd"
                style="margin: 0px 0px 0px 24px;"><span
                class="f_Winproini">Copy Roller Shutter</span></p>
              </td>
              <td width="435" style="width: 435px;"><p
                style="margin: 4px 0px 4px 0px;"><span class="f_Winproini">=
                0</span><span class="f_Textestd">    Le volet n</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">est
                plus copié dans les châssis suivants.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="192" style="width: 192px;"><br>
              </td>
              <td width="435" style="width: 435px;"><p
                style="margin: 4px 0px 4px 0px;"><span class="f_Winproini">=
                1</span><span class="f_Textestd">    WinPro copie le volet
                saisi d</span><span class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">un repère à l</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">autre
                (défaut).</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Winproini"> </span></p>

        <p class="p_Comment"><span
        style="font-family: 'Courier New'; font-weight: bold;"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Génération de
        casiers en cas de fixe simple cadre:</span><span
        class="f_ImageCaption"> Vous avez la possibilité d</span>&rsquo;<span
        class="f_ImageCaption">empêcher WinPro de créer un numéro de casier
        d</span>&rsquo;<span class="f_ImageCaption">ouvrant pour les fixes
        simple cadre, au moyen d</span>&rsquo;<span class="f_ImageCaption">une
        nouvelle clef dans la table </span><span
        style="font-style: italic;">Settings</span><span
        class="f_ImageCaption">:</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;">[Optimisation]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="193" style="width: 193px;"><p
                style="text-indent: -235px; margin: 0px 0px 0px 259px;"><span
                class="f_Winproini">FixeSansCasier</span></p>
              </td>
              <td width="351" style="width: 351px;"><p
                style="margin: 4px 0px 4px 0px;"><span class="f_Winproini">=
                0   </span><span class="f_Textestd">WinPro génère un numéro de
                casier d</span><span class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">ouvrant pour les fixes simple cadre
                (comportement de base, valeur par défaut).</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="193" style="width: 193px;"><br>
              </td>
              <td width="351" style="width: 351px;"><p
                style="margin: 4px 0px 4px 0px;"><span class="f_Winproini">=
                1   </span><span class="f_Textestd">WinPro ne génère pas de
                numéro de casier d</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">ouvrant pour les fixes simple
                cadre.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -235px; margin: 0px 0px 0px 235px;"><span
        class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_ImageCaption">Auparavant les
        casiers n</span>&rsquo;<span class="f_ImageCaption">étaient pas générés
        pour les fixes, ce qui posait des problèmes en cas de croisillons et/ou
        d</span>&rsquo;<span class="f_ImageCaption">aérateurs dans
        l</span>&rsquo;<span class="f_ImageCaption">ouvrant.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Questions au
        format sélection:</span><span class="f_ImageCaption"> Les sélections
        d</span>&rsquo;<span class="f_ImageCaption">une question ne sont plus
        accessibles en visualisation ou modification, tant que la fiche
        concernée (Dormant, Ouvrant, ...) n</span>&rsquo;<span
        class="f_ImageCaption">est pas en mode édition avec le bouton
        [F3].</span></p>

        <p class="p_Comment">       </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.059</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Filtre pour le
        module Multi-Infocli (module INF):</span><span
        class="f_ImageCaption"> Lors de l</span>&rsquo;<span
        class="f_ImageCaption">utilisation de ce module, les codes clients ne
        sont affichés que pour les fiches client renseignées avec une valeur
        supérieure à zéro pour le champ “Nombre de copies WinPro/D”, dans
        l</span>&rsquo;<span class="f_ImageCaption">onglet
        Commercial.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim2.jpg" width="237"
        height="107" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="text-align: center;"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_ImageCaption">Voir note de version
        8.0.1 pour plus de détail sur ce module.</span></p>

        <p class="p_Comment">       </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.053</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Option
        d</span><span class="f_TitreReleaseNote">&rsquo;</span><span
        class="f_TitreReleaseNote">impression du module thermique:</span><span
        class="f_ImageCaption"> Ajout de la possibilité d'activer l'option "Ne
        pas imprimer le coefficient thermique" de l'onglet Prix lors de la
        création d'une commande client via la clef suivante de la table
        </span><span style="font-style: italic;">Settings</span><span
        class="f_ImageCaption">:</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;">[Customer
        Order]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="235"><span class="f_Winproini">No printing thermic
                coefficient</span></td>
              <td><span class="f_Winproini">= 0</span><span
                style="font-family: 'Courier New'; font-weight: bold;">  
                </span><img src="img/embim25.jpg" width="206" height="17"
                vspace="1" hspace="1" border="0" alt=""><span
                style="font-family: 'Courier New'; font-weight: bold;"></span><span
                class="f_Textestd">décochée par défaut (comportement de
                base).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="235"></td>
              <td><span class="f_Winproini">= 1</span><span
                style="font-family: 'Courier New'; font-weight: bold;">  
                </span><img src="img/embim26.jpg" width="209" height="18"
                vspace="1" hspace="1" border="0" alt=""><span
                style="font-family: 'Courier New'; font-weight: bold;"></span><span
                class="f_Textestd">cochée par défaut.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_ImageCaption">La case reste
        toujours modifiable directement dans l</span>&rsquo;<span
        class="f_ImageCaption">onglet Prix si nécessaire.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Extension du
        module Multi Fournisseur Vitrage:</span><span
        class="f_ImageCaption"> Vous avez la possiblité de définir, par vitrage,
        jusqu'à 10 fournisseurs différents (au lieu de 5 dans les précédentes
        versions).</span></p>

        <p class="p_Comment">       </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.051</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Correction sur la
        copie de châssis:</span><span class="f_ImageCaption"> Lors de la copie
        d</span>&rsquo;<span class="f_ImageCaption">un chassis
        d</span>&rsquo;<span class="f_ImageCaption">une commande à
        l</span>&rsquo;<span class="f_ImageCaption">autre, les champs DMELVOL
        et DMELCHA de la table </span><span style="font-style: italic;">Detail2
        </span><span class="f_ImageCaption">ne sont plus copié mais remis a
        zéro. Autrement dit, les dates de mise en lot du châssis et/ou du volet
        ne sont plus copiées avec le repère.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Option de
        chiffrage et d</span><span
        class="f_TitreReleaseNote">&rsquo;</span><span
        class="f_TitreReleaseNote">impression pour WinPro/D:</span><span
        class="f_ImageCaption"> Les clés de Settings suivantes sont maintenant
        prises en compte dans WinPro ET dans WinPro/D: </span></p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;"> </span></p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;">[Commande]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="188"><span class="f_Winproini">%user%::Rep</span></td>
              <td>       <span class="f_Textestd">=     Etat par défaut de la
                case « Remise par repère », par utilisateur</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="188"><span class="f_Winproini">%user%::Tot</span></td>
              <td>       <span class="f_Textestd">=     Etat par défaut de la
                case « Pas de total », par utilisateur</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_ImageCaption">Voir note de version
        7.1.13 pour plus de détail sur ces clefs.</span></p>

        <p class="p_Comment">       </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.045</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">19/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                modifiées</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                créées</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Purge des tables
        d</span><span class="f_TitreReleaseNote">&rsquo;</span><span
        class="f_TitreReleaseNote">export de documents client:</span><span
        class="f_ImageCaption"> La clef </span><span
        style="font-family: 'Courier New';">VidageTableExport</span><span
        class="f_ImageCaption"> de la section </span><span
        style="font-family: 'Tahoma'; font-weight: bold;">[System] </span><span
        class="f_ImageCaption">ne sera pas portée en version 8 (voir note de
        version 7.2.049). Une autre clef dans la table </span><span
        style="font-style: italic;">settings</span><span
        class="f_ImageCaption">, de nom différent, a été créée pour vous
        permettre de purger vos tables d</span>&rsquo;<span
        class="f_ImageCaption">export (ART, CDE, FEN, DET, LIN &amp;
        VAR).</span></p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;"> </span></p>

        <p><span style="font-weight: bold;">[System]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="142"><span
              class="f_Winproini">VideTablesExport</span></td>
              <td><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">=
                Cette clef permet de contrôler la purge des tables
                d</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">&rsquo;</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">export
                de documents client en cas de suppression de commande (format
                nombre entier).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="142"></td>
              <td><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">Lorsqu</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">&rsquo;</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">elle
                vaut 0, aucun enregistrement n</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">&rsquo;</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">est
                supprimé.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="142"></td>
              <td><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">Lorsqu</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">&rsquo;</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">elle
                vaut 1, les enregistrements sont supprimés
                systématiquement.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="142"></td>
              <td><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">Lorsqu</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">&rsquo;</span><span
                style="font-size: 12pt; font-family: 'Courier New'; font-weight: bold;">elle
                vaut 2, une confirmation est demandée avant la suppression des
                enregistrements.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.039</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/07/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Dormant à
        recouvrement et Module Thermique TM:</span><span
        class="f_ImageCaption"> Création de variables globales, </span><span class="f_Variables">_DeductionDormantRenoHaut</span>, 
		<span class="f_Variables">_DeductionDormantRenoBas</span>, <span class="f_Variables">_DeductionDormantRenoGauche</span>, 
		<span class="f_Variables">_DeductionDormantRenoDroite</span>, <span class="f_Variables">_DeductionDormantRenoHautGauche</span>, 
		<span class="f_Variables">_DeductionDormantRenoHautDroite</span>.</span></p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p class="p_Comment"><span class="f_ImageCaption">Ces variables
        contiendront la valeur (en mm) à déduire de la largeur du côté du dormant
        lors du calcul des surfaces pour le module thermique.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption">Ceci peut
        s</span>&rsquo;<span class="f_ImageCaption">avérer utile pour les
        dormants à recouvrement, comme le détaille la documentation
        ci-dessous :</span></p>

        <p class="p_Comment"><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><span
        class="f_ImageCaption"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-family: 'Courier New';">Les cadres avec une extension
        spéciale recouvrant le mur ou d</span><span
        style="font-family: 'Courier New';">&rsquo;</span><span
        style="font-family: 'Courier New';">autres parties de la construction,
        comme les dormants en forme Z, doivent être considérés selon la figure
        ci-dessous. La partie du mur ou de l</span><span
        style="font-family: 'Courier New';">&rsquo;</span><span
        style="font-family: 'Courier New';">élément de construction est
        remplacée par une barrière adiabatique. La largeur du cadre
        </span><span
        style="font-family: 'Courier New'; font-style: italic; color: #800000;">LInt</span><span
        style="font-family: 'Courier New';"> utilisé pour le calcul de la valeur
        Uf correspond à la largeur totale du cadre </span><span
        style="font-family: 'Courier New'; font-style: italic; color: #800000;">LTot</span><span
        style="font-family: 'Courier New';"> décrémentée de la valeur de
        l</span><span style="font-family: 'Courier New';">&rsquo;</span><span
        style="font-family: 'Courier New';">aile en recouvrement sur le mur
        </span><span
        style="font-family: 'Courier New'; font-style: italic; color: #800000;">lrec</span><span
        style="font-family: 'Courier New';">. </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-family: 'Courier New';">Cette méthode peut être appliquée
        pour tout profil avec une aile venant en recouvrement (forme en H par
        exemple) sur la construction. </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-family: 'Courier New';"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0266.zoom49.jpg"
        width="475" height="199" border="0" alt="clip0266"></p>

        <p class="p_Comment"><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="525"
                style="width: 525px; border: solid 1px #000000;"><p
                class="p_Notes" style="margin: 0px 0px 0px 10px;"><span
                class="f_Notes" style="font-weight: bold;">Remarque :</span><span
                class="f_Notes"> :</span><br>
                <span class="f_Notes">- Ces variables sont disponible uniquement dans la phase de pré-calcul dimensionnel, dans la première page profils 
				du dormant (et si <span class="f_Variables">PreCalc = Vrai()</span> dans les versions 9 ou supérieur).</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-family: 'Courier New';"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Volet roulant et
        Module Thermique TM:</span><span class="f_ImageCaption"> Création de la
        variable globale générale  </span><span
        class="f_Variables">_DesactiverCalculThermiqueVolet</span><span
        class="f_ImageCaption">.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption">Cette variable
        indique à WinPro de ne pas tenir compte du calcul thermique pour le
        volet roulant.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Notion de densité
        du bois, pour le Module Thermique TM:</span><span
        class="f_ImageCaption"> Une nouvelle colonne "Densité" a été ajoutée
        dans les différentes fiches des combinaisons de profils (Dormant +
        Ouvrant, Dormant + fixe, etc).</span></p>

        <p class="p_Comment"><span class="f_ImageCaption">Cette colonne
        correspond à la densité de l'essence des profils en bois. WinPro en
        tiendra compte dans sa recherche de la valeur U.</span></p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0265.zoom73.jpg" width="689" height="141" border="0"
        alt="clip0265"></p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p class="p_Comment"><span class="f_ImageCaption">Cette densité est
        paramétrable par le client pour un châssis donné, via la nouvelle
        variable globale </span><span class="f_Variables">_Densite</span><span
        class="f_ImageCaption">. </span></p>

        <p class="p_Comment"><span class="f_ImageCaption">WinPro recherchera
        donc la valeur U sur base de la combinaison de profils ainsi que la
        densité. Si aucune correspondance n'est trouvée pour la densité, la
        densité supérieure sera sélectionnée si elle existe.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_ImageCaption">L'utilisation de la
        densité est optionnelle. </span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Complément pour
        l</span><span class="f_TitreReleaseNote">&rsquo;</span><span
        class="f_TitreReleaseNote">optimisation:</span><span
        class="f_ImageCaption"> Une nouvelle clef dans la table </span><span
        class="f_ImageCaption" style="font-style: italic;">Settings</span><span
        class="f_ImageCaption">a été mise en place concernant les paramètres
        d</span>&rsquo;<span class="f_ImageCaption">optimisation.</span></p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;"> </span></p>

        <p class="p_Comment"><span
        style="font-family: 'Tahoma'; font-weight: bold;">[Optimisation]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Sorting profiles      
         = 0</span><span class="f_Textestd">  Tri des profils par défaut
        (comportement de base).</span></p>

        <p class="p_Textestd">                       <span
        class="f_Winproini">= 1 </span><span class="f_Textestd">Tri des profils
        alternatif (ouvrants d</span><span
        class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">abords).</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_ImageCaption">Lorsque cette clef
        est à zéro, les profils sont triés sur base des champs LOT, SOUSLOT,
        SCIE et LIGNE de la table </span><span
        style="font-style: italic;">DetLot </span><span
        class="f_ImageCaption">(tri par défaut).</span></p>

        <p class="p_Comment"><span class="f_ImageCaption">Lorsque cette clef
        est à 1, les profils sont triès sur base des champs LOT, SOUSLOT, SCIE,
        DORMANT et LIGNE de la table </span><span
        style="font-style: italic;">DetLot</span><span class="f_ImageCaption">.
        Les ouvrants apparaitront donc en premier. </span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_ImageCaption">Cependant, si vous
        utilisez un profil à la fois dans les dormants et dans les ouvrants, le
        second tri n'est plus</span></p>

        <p class="p_Comment"><span class="f_ImageCaption">valable au risque
        d'obtenir des messages d'erreurs avec vos drivers machines.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Remarque:</span><span
        class="f_ImageCaption"> Ces tris influent non seulement sur les
        documents d'optimisation, mais également sur les fichiers machines,
        dans le cas où il n'y aurait pas de tri effectué au niveau des
        drivers.</span></p>

        <p class="p_Comment">       </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.035</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/08/2010</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                modifiées</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables
                créées</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">Aucune</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Nouvelles
        fonctions WPREPORT:</span><span class="f_ImageCaption"> La fonction
        </span><span style="color: #0000ff;">Sendmail (Sujet : chaîne ; Texte ;
        chaîne ; Attachement: chaîne ;  ForMail ; chaîne ; FromMail : chaîne ;
        FromName ; chaîne ; SMTPHost : chaîne ; SMTPPort:entier ;
        Authentification : entier) : Booléen</span><span
        style="font-family: 'Times New Roman'; color: #0000ff;"></span><span
        class="f_ImageCaption"> permet d</span>&rsquo;<span
        class="f_ImageCaption">envoyer un email automatiquement à un
        destinataire donné depuis un rapport WPR. Cette fonction renvoie
        </span><span class="f_Variables">True</span><span
        class="f_ImageCaption">si l</span>&rsquo;<span
        class="f_ImageCaption">email a bien été envoyé, </span><span
        class="f_Variables">False</span><span class="f_ImageCaption">sinon. La
        fonction s</span>&rsquo;<span class="f_ImageCaption">appuie sur le
        client de messagerie par défaut du système.</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">Sujet</span><span
                class="f_ImageCaption">               sujet du mail (facultatif
                mais préférable).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">Texte</span><span
                class="f_ImageCaption">               corps du mail (facultatif
                mais préférable).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">Attachement</span>      
                 <span class="f_ImageCaption">nom et au chemin
                d</span>&rsquo;<span class="f_ImageCaption">un fichier à
                joindre avec le mail (facultatif).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">ForMail        </span>    
                   <span class="f_ImageCaption">adresse électronique du
                destinataire du mail (obligatoire).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">FromMail</span>      
                 <span class="f_ImageCaption">adresse électronique de
                l</span>&rsquo;<span class="f_ImageCaption">expéditeur du mail
                (obligatoire).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">FromName</span>      
                 <span class="f_ImageCaption">nom de l</span>&rsquo;<span
                class="f_ImageCaption">expéditeur qui sera affiché avec
                l</span>&rsquo;<span class="f_ImageCaption">adresse
                électronique (facultatif).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">SMTPHost</span>      
                 <span class="f_ImageCaption">nom du serveur SMTP qui sera
                utilisé pour envoyer le mail (obligatoire).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">SMTPPort      
                 </span><span class="f_ImageCaption">numéro de port TCP du
                serveur SMTP utilisé pour envoyer le mail (facultatif, port 25
                par défaut).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span style="font-style: italic;">Authentification      
                 </span><span class="f_ImageCaption">prend la valeur 0 lorsque
                le serveur SMTP ne requiert pas d'authentification pour faire
                transiter le mail, 1 si ce serveur requiert une
                authentification, auquel cas un nom et un mot de passe sera
                demandé lors de l'envoi du mail (0 le plus souvent).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span
        style="text-decoration: underline;">Exemple:</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        class="f_ImageCaption"> </span><br>
        <span style="color: #000080;">var</span><br>
        <span style="color: #000080;">   cpt : boolean;</span><br>
        <span style="color: #000080;">   cpt := Sendmail ('Sujet du mail' ,
        'Texte du mail' , 'c:\piecejointe.txt' ,      '</span><span
        style="color: #000080; text-decoration: underline;">destinataire@destination.com</span><span
        style="color: #000080;">' , '</span><span
        style="color: #000080; text-decoration: underline;">expediteur@expediteur.com</span><span
        style="color: #000080;">' , 'Nom de l'expéditeur' , 'smtp.text.com' ,
        25 , 0);</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_ImageCaption">Cette instruction
        renverra </span><span class="f_Variables">True</span><span
        style="color: #0000ff;"></span><span class="f_ImageCaption"> ou 
        </span><span class="f_Variables">False</span><span
        class="f_ImageCaption"> dans la variable </span><span
        style="color: #000080;">&rsquo;</span><span
        style="color: #000080;">cpt</span><span
        style="color: #000080;">&rsquo;</span><span class="f_ImageCaption"> si
        le mail a bien été envoyé au destinataire ou non. </span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Complément pour
        le module Tableau de Bord Commande (TBC):</span><span
        class="f_ImageCaption"> Des améliorations ont été apportées à ce module
        (note de version 8.02.x) :</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_ImageCaption">Gestion de l'option "Pas de
                total" de l'onglet </span><span class="f_ImageCaption"
                style="font-weight: bold;">Prix</span><span
                class="f_ImageCaption"> d'une commande. Dans ce cas, le prix de
                vente affiché dans le tableau de bord sera à 0 et la marge
                brute sera définie à -100.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_ImageCaption">Cumul des 3 niveaux de remises
                de l'onglet </span><span class="f_ImageCaption"
                style="font-weight: bold;">Prix</span><span
                class="f_ImageCaption"> (Exemple : si remise1 = 50% et remise2 =
                30%, affichage remise 65%).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_ImageCaption">Le champ "Au" dans la sélection
                par dates est maintenant initialisé à la date du jour lors de
                l'ouverture du tableau de bord.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td><span class="f_ImageCaption">Déplacement de la colonne
                "Nombre  volet" afin de la retrouver à côté de la colonne
                "Nombre châssis".</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 48px;"><span
        class="f_ImageCaption"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.027</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/07/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Import/Export des
        traductions sous Excel:</span><span class="f_ImageCaption"> Cette
        nouvelle fonction d</span>&rsquo;<span
        class="f_ImageCaption">exportation/importation de traduction est un
        système permettant d'exporter toutes les traductions d'une base de
        données WinPro vers un fichier Excel, ou d</span>&rsquo;<span
        class="f_ImageCaption">importer ces mêmes fichiers Excel de traductions
        dans la base de données WinPro.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption">Cette fonctionnalité
        est accessible via 2 nouveaux points de menu, Divers | Importer depuis
        Xls | Traductions ainsi que le menu Divers | Exporter vers Xls |
        Traductions.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p style="text-align: center; text-indent: 45px;"><img
        src="img/clip0264.jpg" width="381" height="188" border="0"
        alt="clip0264"></p>

        <p style="text-indent: 45px;"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p style="text-indent: 45px;"><span
        class="f_ImageCaption">L'exportation se déroule en plusieurs étapes.
        Tout d'abords, l'utilisateur sera invité à choisir l'emplacement et le
        nom du fichier Excel qui contiendra les traductions.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption">Après cette
        sélection, WinPro va rechercher toutes les traductions de la base de
        données et les ajoutera dans un ou plusieurs fichiers Excel. </span></p>

        <p class="p_Comment"><span class="f_ImageCaption">Il faut noter qu'un
        fichier Excel est limité à 65535 lignes. Une fois cette limite
        atteinte, WinPro crée un nouveau fichier Excel qui portera le même nom
        suivi d'un numéro d</span>&rsquo;<span
        class="f_ImageCaption">ordre.</span></p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p class="p_Comment"><span
        style="font-style: italic; background-color: #ffff00; text-decoration: underline;">Remarque:</span><span
        style="font-style: italic;"></span><span class="f_ImageCaption"> En tout
        premier, WinPro va rechercher les descriptions de chaque composants
        d'une fenêtre (article, dormant, etc..). Cette description est
        renseignée comme étant la traduction disponible dans la langue de
        l'utilisateur, ou traduction par défaut. Ensuite, WinPro lira le
        contenu de la table </span><span
        style="font-style: italic;">Traductions</span><span
        class="f_ImageCaption">et mettra à jour cette liste. Voir la note de
        release 8.0 pour plus de détails sur le système de traduction de
        contenus mis en place pour les versions 8.</span></p>

        <p class="p_Comment"><span
        style="font-family: 'Times New Roman';"> </span></p>

        <p style="text-indent: 45px;"><span
        class="f_ImageCaption">L'importation se déroule, comme pour
        l'exportation, en plusieurs étapes. Tout d'abord, l'utilisateur sera
        invité à sélectionner le fichier Excel qu'il veut importer.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption">Ensuite, WinPro
        chargera en mémoire le contenu de ce fichier. Il vérifiera les
        traductions avec les traductions existantes dans la base de données
        afin de voir s'il faut ajouter ou mettre à jour les nouvelles
        traductions.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.012</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/06/2010</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Module thermique
        et export technique:</span><span class="f_ImageCaption"> Les tables
        relatives au </span><span class="f_ImageCaption"
        style="font-weight: bold;">Module Thermique TM </span><span
        class="f_ImageCaption">sont maintenant incluses dans
        l</span>&rsquo;<span class="f_ImageCaption">export lancé depuis le menu
        Utilitaires | Export technique.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Correction de
        maintenance:</span><span
        style="font-weight: bold; text-decoration: underline;"></span><span
        class="f_ImageCaption"> Les variables globales de remplissages suivantes
        changent de nom pour rester dans la logique de WinPro:</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="color: #008080;">_CouleurCrx [ ]</span><span
        class="f_ImageCaption">                     =&gt;        </span><span
        class="f_Variables">_</span><span class="f_Variables">RemplCoulCrx
        []</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="color: #008080;">_CouleurCrx2</span><span
        class="f_ImageCaption"></span><span style="color: #008080;">[
        ]</span><span class="f_ImageCaption">                         =&gt;    
           </span><span class="f_Variables">_</span><span
        class="f_Variables">Rempl2CoulCrx []</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="color: #008080;">_CouleurCrxInt</span><span
        class="f_ImageCaption"></span><span style="color: #008080;">[
        ]</span><span class="f_ImageCaption">                       =&gt;      
         </span><span class="f_Variables">_</span><span
        class="f_Variables">RemplCoulCrxInt []</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="color: #008080;">_CouleurCrxInt2</span><span
        class="f_ImageCaption"></span><span style="color: #008080;">[
        ]</span><span class="f_ImageCaption">                     =&gt;      
         </span><span class="f_Variables">_</span><span
        class="f_Variables">Rempl2CoulCrxInt []</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="color: #008080;">_CouleurIntercalaire</span><span
        class="f_ImageCaption"></span><span style="color: #008080;">[
        ]</span><span class="f_ImageCaption">               =&gt;      
         </span><span class="f_Variables">_</span><span
        class="f_Variables">RemplCoulIntercalaire []</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span
        style="color: #008080;">_CouleurIntercalaire2</span><span
        class="f_ImageCaption"></span><span style="color: #008080;">[ ]        
               </span><span class="f_ImageCaption">=&gt;        </span><span
        class="f_Variables">_</span><span
        class="f_Variables">Rempl2CoulIntercalaire []</span></p>

        <p style="margin: 0px 0px 0px 47px;"><span class="f_ImageCaption"
        style="font-weight: bold;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.0.x</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';"> </span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span class="f_Heading1"
        style="font-style: italic;"> </span></p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Précision sur la
        forme Œil de boeuf:</span> Depuis la version 1, WinPro propose la forme
        ronde, ou œil de bœuf, en saisie mais celle ci n&rsquo;est pas
        compatible avec les spécialités suivantes:</p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td>Pas de support des croisillons</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Times New Roman'; color: #000000;">-</span></td>
              <td>Pas de support des traverses ouvrant/dormant</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim27.jpg" width="241"
        height="162" vspace="1" hspace="1" border="0" alt=""></p>

        <p> </p>

        <p>Ces fonctionnalités seront supportées dans la version 8.2 du
        logiciel.</p>

        <p> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Warm edges
        :</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote"> </span></p>

        <p class="p_Heading1"><span class="f_Heading1"
        style="font-size: 12pt;">Définition</span></p>

        <p class="p_Heading1"><span class="f_Heading1"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Le warm edge est un
        nouveau type d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">intercalaire vitrage, qui assure une meilleure
        isolation thermique que le classique intercalaire en aluminium, ce
        dernier constituant en lui-même un pont thermique à la périphérie du
        vitrage.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les warm edges doivent
        être définis de manière à en calculer le surcoût. Ils ont en outre une
        grande importance pour le module thermique, bien que vous puissiez
        utiliser les warm edges sans le module thermique.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="background-color: #ffff00;">Attention! Si vous définissez au
        moins un type de warm edge, il faudra en plus définir l</span><span
        class="f_Textestd"
        style="background-color: #ffff00;">&rsquo;</span><span
        class="f_Textestd" style="background-color: #ffff00;">intercalaire
        aluminium standard en tant que warm edge. En effet, à partir du moment
        où un warm edge est défini, WinPro va s</span><span class="f_Textestd"
        style="background-color: #ffff00;">&rsquo;</span><span
        class="f_Textestd" style="background-color: #ffff00;">assurer que le
        vitrage sélectionné est compatible avec le warm edge choisi.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">De plus, si vous définissez au moins un warm
        edge, vous devez assigner au moins un warm edge à chaque vitrage!!!
        </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Si certains vitrages ne peuvent pas contenir
        de warm edge, alors définissez un </span><span class="f_Textestd"
        style="font-weight: bold;">&lsquo;</span><span class="f_Textestd"
        style="font-weight: bold;">pseudo warm edge</span><span
        class="f_Textestd" style="font-weight: bold;">&rsquo;</span><span
        class="f_Textestd" style="font-weight: bold;">, et assignez-le à ces
        vitrages.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Le dialogue de gestion
        des warm edges contient d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">ailleurs un
        bouton, qui vous permettent d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">assigner un
        warm edge à l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">ensemble des vitrages.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les warm edges se
        définissent à deux niveaux : d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">abord dans
        une table des warm edges, où vous définissez leur code, description,
        prix, et coefficient </span><span class="f_Textestd"
        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span
        class="f_Textestd">éventuel (ce dernier point n</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">est utilisé
        que pour le module thermique); ensuite dans la table des vitrages :
        pour chaque vitrage, il faut définir quels sont les warm edges
        autorisés ou non.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1"><span class="f_Heading1"
        style="font-size: 12pt;">Paramétrage des warm edges</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-size: 12pt;"> </span></p>

        <p class="p_Heading1">       <span class="f_Heading1"
        style="font-style: italic;">Table des warm edges</span></p>

        <p class="p_Heading1"><span class="f_Heading1"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cette table est
        accessible par le menu </span><span class="f_Textestd"
        style="font-weight: bold;">Technique | Châssis | Warm edges</span><span
        class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0638.zoom74.gif" width="608" height="342" border="0"
        alt="clip0638"></p>

        <p class="p_Comment"><span
        style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Code</span> : code que vous
                attribuez au warm edge</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span> : la
                description du warm edge</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Catégorie</span> : valeur
                numérique qui alimente une variable <span
                class="f_Variables">WarmEdge</span> dans les formules de
                vitrage.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Non cintrable</span>: cochez
                cette case pour empêcher l&rsquo;utilisation de ce warm edge
                avec un vitrage cintré.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Sans couleur</span>: cochez
                cette case si le warm edge ne peut pas être peint à la demande.
                Si l&rsquo;utilisateur précise une couleur
                d&rsquo;intercalaire, mais pour un warm edge sans couleur,
                aucun message d&rsquo;erreur ne sera généré, le prix du vitrage
                ne tiendra pas compte du supplément pour la couleur, et la
                couleur ne sera mentionnée sur aucun document.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Utiliser par défaut</span>:
                cochez cette case pour que ce warm edge soit utilisé par
                défaut, si aucun warm edge n&rsquo;est défini au niveau de la
                commande. Si un autre warm edge a déjà été défini comme à
                utiliser par défaut, WinPro vous demandera de confirmer la
                modification de la valeur par défaut.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Le tableau</span> permet de
                définir les prix en fonction de l&rsquo;épaisseur du warm edge.
                Ce tableau permet aussi de définir le coefficient <span
                style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span>
                par défaut pour le calcul du coefficient de dissipation
                thermique de la fenêtre.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 42px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span style="font-weight: bold;">Epaisseur</span>: épaisseur
                d'intercalaire prise en compte pour le prix et le coefficient
                <span
                style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span>
                de la ligne du tableau.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 42px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span style="font-weight: bold;">Forfait</span> : supplément
                forfaitaire, par vitrage.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 42px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span style="font-weight: bold;">Périmètre</span> :
                supplément en fonction du périmètre du vitrage (par mètre).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 42px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span style="font-weight: bold;">Surface</span> : supplément
                en fonction de la surface du vitrage (par mètre carré).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 42px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span style="font-weight: bold;">Supplément %</span> :
                pourcentage de supplément à appliquer au vitrage (calculé avant
                l&rsquo;application des autres suppléments liés au warm
              edge).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 42px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="21"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span style="font-weight: bold;">Psi</span> : coefficient
                <span
                style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span>
                appliqué en cas d&rsquo;utilisation du warm edge; il
                s&rsquo;agît d&rsquo;une valeur par défaut : si une autre
                valeur est définie pour la combinaison de profils, épaisseur
                vitrage, coefficient <span
                style="font-family: 'Times New Roman';">Ug</span> et pour ce
                même warm edge, c&rsquo;est cette dernière valeur qui sera
                utilisée.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Appliquer à tous les
                vitrages</span>: cliquez sur ce bouton pour que le warm edge
                affiché soit associé à tous les vitrages. Un message de
                confirmation vous demandera de confirmer l&rsquo;opération
                avant de la lancer. Cette opération peut prendre un certain
                temps, suivant la quantité de vitrages dans votre base de
                données.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 12px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1" style="font-style: italic;">Table
                des vitrages</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-family: 'Lucida Casual';"> </span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0427.zoom66.gif" width="539" height="353" border="0"
        alt="clip0427"></p>

        <p class="p_Comment" style="text-align: center;"><span
        class="f_Heading1" style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Page des warm edges</span><span
        class="f_Textestd"> : affiche la liste des warm edges; si vous avez
        défini au moins un warm edge, vous devez sélectionner celui ou ceux qui
        sont compatibles avec le vitrage.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p style="margin: 12px 0px 0px 0px;"><span class="f_Heading1"
        style="font-size: 12pt;">Variables de configuration</span></p>

        <p> </p>

        <p>Une nouvelle variable de configuration vous permet de récupérer la
        catégorie de warm edge de chaque vitrage :</p>

        <p style="margin: 8px 0px 0px 45px;"><span
        class="f_Variables">_RemplWarmEdge[]</span></p>

        <p style="margin: 8px 0px 0px 45px;"><span
        style="font-size: 11pt; font-family: 'Lucida Console'; font-weight: bold;"> </span></p>

        <p>Cette variable fonctionne sur le même principe que les autres
        variables de remplissage.</p>

        <p>Dans le cas où le remplissage correspondant n&rsquo;est pas un
        vitrage, et donc ne peut avoir de warm edge, cette variable contient la
        valeur 0 pour le remplissage en question.</p>

        <p style="margin: 16px 0px 4px 0px;"><span
        style="font-size: 14pt; font-weight: bold; text-decoration: underline;"> </span></p>

        <p class="p_Heading1"><span class="f_Heading1"
        style="font-size: 12pt;">Utilisation des warm edges</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 12px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1"
                style="font-style: italic;">Encodage</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 12px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1"
              style="font-style: italic;"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0428.zoom68.gif" width="539" height="461" border="0"
        alt="clip0428"></p>

        <p class="p_Comment" style="text-align: center;"><span
        class="f_Heading1" style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Vous pouvez changer
        globalement le type de warm edge pour toute la commande, via la boîte
        de sélection </span><span class="f_Textestd"
        style="font-style: italic; font-weight: bold;">Warm edge</span><span
        class="f_Textestd"> en bas à gauche. Attention, si vous avez défini
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">un ou l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">autre warm
        edge particulier, soit au niveau d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">un châssis,
        soit au niveau d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">un vitrage, c</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">est ce
        dernier warm edge qui sera pris en compte. Le warm edge est de toutes
        façons indiqué, tant au niveau de la description des vitrages
        qu</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">au niveau du détail du calcul thermique.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Vous pouvez également
        définir le warm edge pour un châssis, par le bouton </span><img
        src="img/embim28.jpg" width="21" height="21" vspace="1" hspace="1"
        border="0" alt=""><span class="f_Textestd"> à côté du code du vitrage.
        De même, vous pouvez redéfinir le warm edge d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">un vitrage
        par le dialogue de définition du vitrage, accessible par clic droit sur
        le vitrage.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1" style="font-style: italic;">EDI
                vitrage</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">A ce jour, nous
        n</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">avons encore reçu aucune communication de la part
        des vitriers sur les modifications à apporter aux EDI vitrage. Nous
        nous tenons toutefois à votre disposition afin d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">apporter les
        modifications nécessaires, en collaboration avec vos
        fournisseurs.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Module thermique
        :</span></p>

        <p class="p_Textestd"><span
        style="font-size: 14pt; font-weight: bold; text-decoration: underline;"> </span></p>

        <p class="p_Heading1"><span class="f_Heading1"
        style="font-size: 12pt;">Définitions</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ce module permet de
        calculer le coefficient de dissipation thermique d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">une fenêtre,
        notée valeur </span><span
        style="font-size: 11pt; font-family: 'Times New Roman';">U</span><span
        style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align: sub;">w
        </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Le cas échéant, une
        valeur </span><span
        style="font-size: 11pt; font-family: 'Times New Roman';">U</span><span
        style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align: sub;">ws</span><span
        style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
        class="f_Textestd"> sera également calculée : cette valeur représente le
        coefficient de dissipation thermique d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">une fenêtre
        avec volet roulant incorporé, et dont le volet est baissé.</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Textestd"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Heading1">       <span class="f_Heading1"
        style="font-style: italic;">Fenêtres et portes</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Pour chaque remplissage,
        WinPro va déterminer les profils qui le bordent : paire
        dormant-ouvrant, traverse-ouvrant, dormant seul, traverse seule,
        ouvrant-battement, ouvrant-seuil de porte, ouvrant-kaltefeind. Une
        valeur Uf doit être attribuée à chacun de ces groupes de profils, en
        tenant compte de la présence éventuelle de renforts (pour le PVC).
        WinPro détermine alors la surface du groupe de profil ainsi déterminé,
        et multiplie le coefficient thermique attribué à ce groupe par cette
        surface. Notez que pour les traverses, on prend en compte la surface
        jusqu</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">à l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">axe de la
        traverse.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Au résultat de ces
        calculs, on ajoute le calcul thermique des vitrages, qui est défini en
        multipliant leur surface visible par leur coefficient
        thermique.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Enfin, on ajoute un
        coefficient périphérique propre à chaque combinaison vitrage-profil, et on multiplie ce coefficient par la
        longueur du périmètre. On prend en compte ici le périmètre vu du
        vitrage.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">La formule générale est
        la suivante :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0429.gif" width="528" height="71" border="0"
        alt="clip0429"></p>

        <p class="p_Textestd" style="text-align: center;"><span
        class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 1px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold;">A</span><span
                style="font-size: 7pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">g</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> représente la surface de chaque vitrage,
                panneau ou aérateur (en m²)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 1px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold;">U</span><span
                style="font-size: 7pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">g</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> représente le coefficient thermique de
                chaque vitrage, panneau ou aérateur</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 1px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold;">A</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">f</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> représente la surface des profils (en m²)
                adjacents à un côté de vitrage</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 1px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold;">U</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">f</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> représente le coefficient thermique de
                chaque groupe de profils adjacent à un côté de
              vitrage</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 1px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold;">l</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">g</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> représente le périmètre de chaque vitrage,
                panneau ou aérateur (en m)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 1px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; font-style: italic; font-weight: bold;">&Psi;</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-style: italic; vertical-align: sub;">g</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> représente le coefficient thermique
                périmétrique, dépendant du vitrage, panneau ou aérateur, et de
                la combinaison de profils adjacente</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 1px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold;">l</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">Sp</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> représente la longueur des croisillons (en
                m)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 1px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; font-style: italic; font-weight: bold;">&Psi;</span><span
                style="font-size: 7pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">sp</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> représente le coefficient thermique des
                croisillons</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 1px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold;">l</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">VRI</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-style: italic; vertical-align: sub;"></span><span
                class="f_Textestd"> représente la largeur du caisson de volet
                roulant</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 1px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; font-style: italic; font-weight: bold;">&Psi;</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">VRI</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> représente le coefficient thermique du
                caisson de volet roulant</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1"><span class="f_Textestd">Plus loin dans ce
        document, on distinguera les valeurs </span><span
        style="font-size: 11pt; font-family: 'Times New Roman';">U</span><span
        style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align: sub;">g</span><span
        style="font-size: 11pt; font-family: 'Times New Roman';">,
        U</span><span
        style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align: sub;">p</span><span
        style="font-size: 11pt; font-family: 'Times New Roman';">,
        U</span><span
        style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align: sub;">a</span><span
        style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
        class="f_Textestd"> pour respectivement les vitrages, panneaux et
        aérateurs. De même, on distinguera les </span><span
        style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
        style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span
        style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align: sub;">g</span><span
        style="font-size: 11pt; font-family: 'Times New Roman';">, </span><span
        style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span
        style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align: sub;">p</span><span
        style="font-size: 11pt; font-family: 'Times New Roman';">, </span><span
        style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span
        style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align: sub;">a</span><span
        style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
        class="f_Textestd"> pour les coefficients périphériques. Néanmoins, les
        modes de calcul pour </span><span class="f_Textestd">toutes ces valeurs
        sont similaires.</span></p>

        <p class="p_Heading1"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1" style="font-style: italic;">Caissons
                de volets roulant incorporés</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;"> </span></p>

        <p style="margin: 4px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">Si le châssis
        possède un volet roulant incorporé, le caisson influence la valeur
        thermique du châssis. Pour ce calcul, il faut définir 3
        critères :</span></p>

        <p style="margin: 4px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Isolation
                des parois du coffre</span><span class="f_Textestd"> : pas
                isolé, paroi contre linteau isolée, 3 parois isolées</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Situation
                du caisson</span><span class="f_Textestd"> : touchant à
                l</span><span class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">environnement extérieur ou incorporé
                derrière la façade</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Ventilation</span><span
                class="f_Textestd"> : moyenne (fente restante côté inférieur du
                volet &lt;= 10mm) ou forte (fente restante côté inférieur du
                volet &gt; 10mm)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Une fois ces trois
        variables connues, une valeur linéaire (</span><span class="f_Textestd"
        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span
        class="f_Textestd">) normalisée est appliquée, selon le tableau
        suivant :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="text-align: center;"><span
        class="f_Textestd" style="font-weight: bold;">Tableau 1</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 27px 4px 24px;">

        <table cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td rowspan="2" valign="middle" width="145"
              style="width: 145px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Pose
                du coffre de volet roulant</span></p>
              </td>
              <td rowspan="2" valign="middle" width="196"
              style="width: 196px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Isolation
                des parois du coffre de volet roulant </span><span
                class="f_ImageCaption" style="font-size: 6pt;">1</span></p>
              </td>
              <td colspan="2" valign="middle"
              style="border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align: sub;">VRI</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"> (W/mK)
                </span><span class="f_ImageCaption"
                style="font-size: 6pt;">2</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="95"
              style="width: 95px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Moyennement
                ventilé </span><span class="f_ImageCaption"
                style="font-size: 6pt;">3</span></p>
              </td>
              <td valign="middle" width="92"
              style="width: 92px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Fortement
                ventilé </span><span class="f_ImageCaption"
                style="font-size: 6pt;">4</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td rowspan="3" valign="middle" width="145"
              style="width: 145px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Touchant
                à l'environnement extérieur</span></p>
              </td>
              <td valign="middle" width="196"
              style="width: 196px; border: solid 1px #000000;"><p
                style="margin: 4px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Pas
                isolé</span></p>
              </td>
              <td valign="middle" width="95"
              style="width: 95px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,34</span></p>
              </td>
              <td valign="middle" width="92"
              style="width: 92px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">1,10</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="196"
              style="width: 196px; border: solid 1px #000000;"><p
                style="margin: 4px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">1
                paroi isolée (contre linteau)</span></p>
              </td>
              <td rowspan="2" valign="middle" width="95"
              style="width: 95px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,19</span></p>
              </td>
              <td valign="middle" width="92"
              style="width: 92px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,90</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="196"
              style="width: 196px; border: solid 1px #000000;"><p
                style="margin: 4px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">3
                parois isolées</span></p>
              </td>
              <td valign="middle" width="92"
              style="width: 92px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,40</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td rowspan="3" valign="middle" width="145"
              style="width: 145px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Incorporé
                derrière façade</span></p>
              </td>
              <td valign="middle" width="196"
              style="width: 196px; border: solid 1px #000000;"><p
                style="margin: 4px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">Pas
                isolé</span></p>
              </td>
              <td valign="middle" width="95"
              style="width: 95px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,30</span></p>
              </td>
              <td valign="middle" width="92"
              style="width: 92px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">1,50</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="196"
              style="width: 196px; border: solid 1px #000000;"><p
                style="margin: 4px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">1
                paroi isolée (contre linteau)</span></p>
              </td>
              <td rowspan="2" valign="middle" width="95"
              style="width: 95px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,18</span></p>
              </td>
              <td valign="middle" width="92"
              style="width: 92px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">1,10</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="196"
              style="width: 196px; border: solid 1px #000000;"><p
                style="margin: 4px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">3
                parois isolées</span></p>
              </td>
              <td valign="middle" width="92"
              style="width: 92px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 27px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,45</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">La valeur </span><span
        style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
        style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span
        style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align: sub;">VRI</span><span
        style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
        class="f_Textestd"> ainsi trouvée sera multipliée par la largeur du
        caisson (en m), et ajoutée à la valeur </span><span
        style="font-size: 11pt; font-family: 'Times New Roman';">U</span><span
        style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align: sub;">w</span><span
        class="f_Textestd"> totale du châssis, avant division de cette valeur
        par la surface du châssis (non compris la surface du caisson). Voyez la
        formule en page précédente</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span
        class="f_Heading1" style="font-style: italic;">Tabliers de volets
        roulant incorporés</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Si le châssis possède un
        volet roulant incorporé, une deuxième valeur thermique sera calculée
        afin d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">indiquer la valeur thermique tablier baissé. Cette
        valeur sera notée </span><span
        style="font-size: 11pt; font-family: 'Times New Roman';">U</span><span
        style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align: sub;">ws</span><span
        style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
        class="f_Textestd"> et sera fournie en complément de la
        valeur </span><span
        style="font-size: 11pt; font-family: 'Times New Roman';">U</span><span
        style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align: sub;">w</span><span
        class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Pour calculer cette
        valeur, il faut connaître les valeurs suivantes :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 6pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">b</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">sh</span><span
                class="f_Textestd"> : interstice laissé ouvert entre les bords
                du tablier baissé et la maçonnerie. Cette valeur est la somme
                des interstices bas (noté </span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">b</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">1</span><span
                class="f_Textestd">), haut (noté </span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">b</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">2</span><span
                class="f_Textestd">) et latéral (on prend ici la moyenne des
                interstices des deux côtés, notée </span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">b</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">3</span><span
                class="f_Textestd">). La valeur </span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">b</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">sh</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align: sub;"></span><span
                class="f_Textestd"> est donc la somme de </span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">b</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">1</span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">+
                b</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">2</span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">+
                b</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">3</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 6pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">R</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">sh</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"> </span><span
                class="f_Textestd">: résistance thermique du tablier proprement
                dit</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ces deux valeurs
        permettent alors de calculer une valeur </span><span class="f_Textestd"
        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Delta;</span><span
        style="font-size: 11pt; font-family: 'Times New Roman';">R</span><span
        class="f_Textestd">, selon le tableau suivant :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="text-align: center;"><span
        class="f_Textestd" style="font-weight: bold;">Tableau 2</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="middle" width="44"
              style="width: 44px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Classe</span></p>
              </td>
              <td valign="middle" width="317"
              style="width: 317px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Perméabilité
                à l'air du volet en position fermée</span></p>
              </td>
              <td valign="middle" width="75"
              style="width: 75px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">b</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">sh</span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"> (mm)</span></p>
              </td>
              <td valign="middle" width="85"
              style="width: 85px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; font-weight: bold;">&Delta;</span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">R
                (m²K/W) </span><span class="f_ImageCaption"
                style="font-size: 6pt;">5</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="44"
              style="width: 44px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">1</span></p>
              </td>
              <td valign="middle" width="317"
              style="width: 317px; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">Perméabilité très
                élevée</span></p>
              </td>
              <td valign="middle" width="75"
              style="width: 75px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">b</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; vertical-align: sub;">sh</span><span
                style="font-family: 'Times New Roman';">&gt; 35</span></p>
              </td>
              <td valign="middle" width="85"
              style="width: 85px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">0,08</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="44"
              style="width: 44px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">2</span></p>
              </td>
              <td valign="middle" width="317"
              style="width: 317px; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">Perméabilité élevée (le
                volet est lui-même étanche à l'air)</span></p>
              </td>
              <td valign="middle" width="75"
              style="width: 75px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">15 &lt; b</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; vertical-align: sub;">sh</span><span
                style="font-family: 'Times New Roman';"></span><span
                style="font-family: 'Times New Roman';">&le;</span><span
                style="font-family: 'Times New Roman';">35</span></p>
              </td>
              <td valign="middle" width="85"
              style="width: 85px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">0,25 . R</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; vertical-align: sub;">sh</span><span
                style="font-family: 'Times New Roman';">+ 0,09</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="44"
              style="width: 44px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">3</span></p>
              </td>
              <td valign="middle" width="317"
              style="width: 317px; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">Perméabilité moyenne
                (le volet est lui-même étanche à l'air)</span></p>
              </td>
              <td valign="middle" width="75"
              style="width: 75px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">8 &lt; b</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; vertical-align: sub;">sh</span><span
                style="font-family: 'Times New Roman';"></span><span
                style="font-family: 'Times New Roman';">&le;</span><span
                style="font-family: 'Times New Roman';">15</span></p>
              </td>
              <td valign="middle" width="85"
              style="width: 85px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">0,55 . R</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; vertical-align: sub;">sh</span><span
                style="font-family: 'Times New Roman';">+ 0,11</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="44"
              style="width: 44px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">4</span></p>
              </td>
              <td valign="middle" width="317"
              style="width: 317px; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">Perméabilité faible (le
                volet est lui-même étanche à l'air)</span></p>
              </td>
              <td valign="middle" width="75"
              style="width: 75px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">b</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; vertical-align: sub;">sh</span><span
                style="font-family: 'Times New Roman';"></span><span
                style="font-family: 'Times New Roman';">&le;</span><span
                style="font-family: 'Times New Roman';">8</span></p>
              </td>
              <td valign="middle" width="85"
              style="width: 85px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">0,80 . R</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; vertical-align: sub;">sh</span><span
                style="font-family: 'Times New Roman';">+ 0,14</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="44"
              style="width: 44px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">5</span></p>
              </td>
              <td valign="middle" width="317"
              style="width: 317px; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">Perméabilité très
                faible (le volet est lui-même étanche à l'air)</span></p>
              </td>
              <td valign="middle" width="75"
              style="width: 75px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">b</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; vertical-align: sub;">sh</span><span
                style="font-family: 'Times New Roman';"></span><span
                style="font-family: 'Times New Roman';">&le;</span><span
                style="font-family: 'Times New Roman';">3 et (b</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; vertical-align: sub;">1</span><span
                style="font-family: 'Times New Roman';">+b</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; vertical-align: sub;">3</span><span
                style="font-family: 'Times New Roman';">= 0 ou b</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; vertical-align: sub;">2</span><span
                style="font-family: 'Times New Roman';">+b</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; vertical-align: sub;">3</span><span
                style="font-family: 'Times New Roman';">= 0)  </span><span
                class="f_ImageCaption" style="font-size: 6pt;">6 7</span></p>
              </td>
              <td valign="middle" width="85"
              style="width: 85px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-family: 'Times New Roman';">0,95 . R</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; vertical-align: sub;">sh</span><span
                style="font-family: 'Times New Roman';">+ 0,17</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p style="margin: 4px 0px 0px 0px;"><span class="f_Textestd">A partir
        de la valeur </span><span
        style="font-size: 11pt; font-family: 'Times New Roman';">&Delta;</span><span
        class="f_Textestd">R ainsi obtenue, on applique la formule
        suivante :</span></p>

        <p style="margin: 4px 0px 0px 0px;"><span
        class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 18px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><img src="img/clip0430.gif" width="212" height="102" border="0"
                alt="clip0430"></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 18px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Textestd"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">U</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">ws</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> est la valeur thermique de la fenêtre volet
                baissé</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">U</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">w</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> est la valeur thermique de la fenêtre
                calculée tel que décrit plus haut</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; font-weight: bold;">&Delta;</span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">R</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> est la valeur thermique du volet baissé, tel
                que décrit précédemment</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1" style="font-style: italic;">Calcul
                des aires des profils</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">WinPro connaît
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">aire de base des profils, compte tenu des dimensions
        et recouvrements paramétrés. L</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">aire variera
        donc automatiquement en cas de recouvrement variable, section variable,
        etc., ce qui correspond bien à le norme de calcul de la dissipation
        thermique.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">WinPro va calculer les
        aires des profils de telle sorte que la somme de ces aires plus la
        somme des aires des remplissages corresponde bien à l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">aire totale
        du châssis. Les cas suivants sont pris en compte :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Coin de châssis</span><span
        class="f_Textestd"> : l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">aire du coin
        est calculée ; pour chaque bord du coin, on prend en compte la moitié
        de cette aire</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Traverse</span><span class="f_Textestd"> :
        pour la connexion sur un ouvrant ou un dormant, l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">aire de la
        traverse s</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">arrête au bord le plus à l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">intérieure de
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">ouvrant ou du dormant. Pour la connexion à une autre
        traverse, l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">aire de la jonction entre les deux traverses est
        calculée, et la moitié de cette aire est attribuée à chaque traverse.
        Attention, pour les traverses, on calcule toujours la traverse sur la
        moitié de sa largeur ; on traite de toute façon les deux côtés de la
        traverse.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Battement</span><span class="f_Textestd"> :
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">aire du bord correspondant au battement est
        entièrement prise en compte ; l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">aire des
        profils qui s</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">y rattachent s</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">arrête au
        bord le plus à l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">intérieur du profil d</span><span
        class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">ouvrant.</span></p>

        <p class="p_Textestd" style="text-align: center;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0432.gif" width="414" height="500" border="0"
        alt="clip0432"></p>

        <p class="p_ImageCaption"><span class="f_ImageCaption"> </span></p>

        <p class="p_ImageCaption"><span class="f_ImageCaption">Le croquis
        ci-dessus montre un exemple de découpage des aires de calcul. Chaque
        aire se distingue des aires voisines par sa couleur. On retrouvera la
        liste des aires ainsi calculées dans la page </span><span
        class="f_ImageCaption" style="font-weight: bold;">&lsquo;</span><span
        class="f_ImageCaption" style="font-weight: bold;">Calcul
        thermique</span><span class="f_ImageCaption"
        style="font-weight: bold;">&rsquo;</span><span
        class="f_ImageCaption"> de la fenêtre Commande.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1" style="font-style: italic;">Fenêtres
                doubles</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">WinPro 8.1 permet
        également le calcul de fenêtres doubles, c'est-à-dire deux fenêtres
        parallèles dans un même dormant. Reportez-vous à la suite de ce
        chapitre pour de plus amples informations sur les fenêtres
        doubles.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Le calcul thermique de
        ces fenêtres est également assuré par WinPro, selon la formule
        suivante :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0433.gif" width="305" height="89" border="0"
        alt="clip0433"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 8px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold;">U</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">w1</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> et </span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold;">U</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">w2</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> sont les coefficients </span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">U</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">w</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> des fenêtres intérieures et extérieures, que
                WinPro va calculer individuellement pour chaque
                demi-fenêtre.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-family: 'Times New Roman'; font-style: italic; font-weight: bold;">R</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">se</span><span
                style="font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> est la résistance thermique d</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">échange à la surface extérieure de la
                fenêtre du côté intérieur. En pratique, cette valeur est fixée
                à 0,04</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-family: 'Times New Roman'; font-style: italic; font-weight: bold;">R</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">si</span><span
                style="font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> est la résistance thermique d</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">échange à la surface intérieure de la
                fenêtre du côté extérieur. En pratique, pour les fenêtres
                verticales, cette valeur est fixée à 0,13. WinPro ne prend en
                compte que ce cas. La valeur est de 0,10 pour les fenêtres
                inclinées à plus de 60°, mais WinPro ne considère pas ce
                cas.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-family: 'Times New Roman'; font-style: italic; font-weight: bold;">R</span><span
                style="font-size: 5pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub;">s</span><span
                style="font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> est la résistance thermique de la lame
                d</span><span class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">aire comprise entre les deux fenêtres,
                déterminée selon le </span><span class="f_Textestd"
                style="font-weight: bold;">tableau 3</span><span
                class="f_Textestd">. Par défaut, WinPro attribue une valeur de
                0.163 à ce paramètre (cas le plus défavorable). Vous pouvez
                modifier cette valeur via une variable globale </span><span
                class="f_Variables">_Rs</span><span
              class="f_Textestd">.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="text-align: center;"><span
        class="f_Textestd" style="font-weight: bold;">Tableau 3</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td rowspan="2" valign="middle" width="67"
              style="width: 67px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">Epaisseur
                de la lame d</span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">&rsquo;</span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">air
                (mm)</span></p>
              </td>
              <td colspan="4" valign="middle"
              style="border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">Vitrage
                pourvu sur une face d'un coating à émissivité normale
                (</span><span
                style="font-size: 11pt; font-family: 'TimesNewRomanPS-BoldMT';">&epsilon;</span><span
                style="font-size: 6pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">n</span><span
                style="font-size: 11pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">)
                égale</span></p>
              </td>
              <td rowspan="2" valign="middle" width="150"
              style="width: 150px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">Vitrage
                sans coating (</span><span
                style="font-size: 11pt; font-family: 'TimesNewRomanPS-BoldMT';">&epsilon;</span><span
                style="font-size: 6pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">n</span><span
                style="font-size: 11pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">=0,89)</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="62"
              style="width: 62px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">&epsilon;</span><span
                style="font-size: 6pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">n
                </span><span
                style="font-size: 11pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">=
                0,1</span></p>
              </td>
              <td valign="top" width="56"
              style="width: 56px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">&epsilon;</span><span
                style="font-size: 6pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">n
                </span><span
                style="font-size: 11pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">=
                0,2</span></p>
              </td>
              <td valign="top" width="55"
              style="width: 55px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">&epsilon;</span><span
                style="font-size: 6pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">n
                </span><span
                style="font-size: 11pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">=
                0,4</span></p>
              </td>
              <td valign="top" width="72"
              style="width: 72px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">&epsilon;</span><span
                style="font-size: 6pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">n
                </span><span
                style="font-size: 11pt; font-family: 'TimesNewRomanPS-BoldMT'; font-weight: bold;">=
                0,8</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="67"
              style="width: 67px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">50</span></p>
              </td>
              <td valign="top" width="62"
              style="width: 62px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,406</span></p>
              </td>
              <td valign="top" width="56"
              style="width: 56px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,336</span></p>
              </td>
              <td valign="top" width="55"
              style="width: 55px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,260</span></p>
              </td>
              <td valign="top" width="72"
              style="width: 72px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,189</span></p>
              </td>
              <td valign="top" width="150"
              style="width: 150px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,179</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="67"
              style="width: 67px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">100</span></p>
              </td>
              <td valign="top" width="62"
              style="width: 62px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,376</span></p>
              </td>
              <td valign="top" width="56"
              style="width: 56px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,315</span></p>
              </td>
              <td valign="top" width="55"
              style="width: 55px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,247</span></p>
              </td>
              <td valign="top" width="72"
              style="width: 72px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,182</span></p>
              </td>
              <td valign="top" width="150"
              style="width: 150px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,173</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="67"
              style="width: 67px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">300
                </span><span class="f_ImageCaption"
                style="font-size: 6pt;">8</span></p>
              </td>
              <td valign="top" width="62"
              style="width: 62px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,333</span></p>
              </td>
              <td valign="top" width="56"
              style="width: 56px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,284</span></p>
              </td>
              <td valign="top" width="55"
              style="width: 55px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,228</span></p>
              </td>
              <td valign="top" width="72"
              style="width: 72px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,171</span></p>
              </td>
              <td valign="top" width="150"
              style="width: 150px; border: solid 1px #000000;"><p
                style="text-align: center; margin: 4px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">0,163</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Comme les termes </span><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">R</span><span
        style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">se</span><span
        class="f_Textestd"> et </span><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">R</span><span
        style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">si</span><span
        class="f_Textestd"> sont des valeurs constantes, WinPro simplifie la
        formule comme suit :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0434.gif" width="301" height="100" border="0"
        alt="clip0434"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Notez bien que, selon
        cette formule, il n</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">est pas nécessaire de connaître quelle fenêtre est à
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">extérieur ou à l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">intérieur, la
        formule s</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">évaluant de la même façon quel que soit le
        cas.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table cellspacing="0" cellpadding="0" bgcolor="#e1f0ff" border="1"
        style="background-color: #e1f0ff; border: solid 2px #000000; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td style="border: solid 1px #000000;"><p
                style="margin: 3px 0px 0px 0px;"><span class="f_ImageCaption"
                style="font-size: 6pt; color: #808080;">1</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;"> condition
                pour la couche d'isolation: Risol </span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">&ge;</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;"> 0,5
                m²K/W</span></p>

                <p style="margin: 3px 0px 0px 0px;"><span
                class="f_ImageCaption"
                style="font-size: 6pt; color: #808080;">2</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;"> Valeur </span><span
                style="font-size: 9pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; font-style: italic; color: #808080;">&Psi;</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;"></span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;"> à
                additionner à la transmission thermique au travers de l'élément
                de façade dans lequel le coffre de volet se trouve en tant que
                produit de la valeur </span><span
                style="font-size: 9pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; font-style: italic; color: #808080;">&Psi;</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;"></span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;"> avec
                la longueur (l) du coffre de volet;</span></p>

                <p style="margin: 3px 0px 0px 0px;"><span
                class="f_ImageCaption"
                style="font-size: 6pt; color: #808080;">3</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;"> fente
                restante du côté inférieur du coffre de volet: 2 &lt; b </span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">&le;</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;"> 10
                mm</span></p>

                <p style="margin: 3px 0px 0px 0px;"><span
                class="f_ImageCaption"
                style="font-size: 6pt; color: #808080;">4</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;"> fente
                restante du côté inférieur du coffre de volet: b &gt; 10 mm</span></p>

                <p style="margin: 3px 0px 0px 0px;"><span
                class="f_ImageCaption"
                style="font-size: 6pt; color: #808080;">5</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;"> Les
                valeurs </span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">&Delta;</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">R sont valables pour Rsh &lt; 0,3 m²K/W (Rsh est la résistance
                thermique du volet même, déterminée selon NBN EN ISO 6946 dans le cas où le volet est composé d</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">&rsquo;</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">un
                matériau homogène, selon NBN EN ISO 10211 dans le cas d</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">&rsquo;</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">un volet à composition hétérogène ou selon EN ISO 10077-2 dans 
				le cas d</span><span style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">&rsquo;</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">un élément profilé). Pour des volets inconnus il y a lieu de
                négliger la résistance : Rsh = 0 m²K/W.</span></p>

                <p style="margin: 3px 0px 0px 0px;"><span
                class="f_ImageCaption"
                style="font-size: 6pt; color: #808080;">6</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;"> Ce
                cas suppose la présence de joints de fermeture autour d</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">&rsquo;</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">au
                moins trois côtés du volet et que la largeur de la fente restante reste inférieure ou égale à 3 mm</span></p>

                <p style="margin: 3px 0px 0px 0px;"><span
                class="f_ImageCaption"
                style="font-size: 6pt; color: #808080;">7</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;"> La
                classe 5 (perméabilité très faible) peut également être adoptée si une mesure du débit d</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">&rsquo;</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">air
                au travers du volet fermé démontre que ce débit d</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">&rsquo;</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">air n</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">&rsquo;</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">est
                pas supérieur à 10 m³/h.m² (avec différence de pression de 10 Pa <span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">&ndash;</span><span
                style="font-size: 9pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;"> essai
                selon NBN EN 12835). Des conditions supplémentaires pour la classe 5 peuvent être trouvées dans la
                NBN EN 13125 par type de volet.</span></p>

                <p style="margin: 3px 0px 0px 0px;"><span
                class="f_ImageCaption"
                style="font-size: 6pt; color: #808080;">8</span><span
                style="font-family: 'Times New Roman'; color: #808080;"></span><span
                style="font-family: 'Times New Roman'; font-style: italic; color: #808080;">Pour
                des épaisseurs plus importantes, la valeur R</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-style: italic; color: #808080;">s
                </span><span
                style="font-family: 'Times New Roman'; font-style: italic; color: #808080;"> doit
                être déterminée sur la base des méthodes de calcul de la norme ISO 15099, d</span><span
                style="font-family: 'Times New Roman'; font-style: italic; color: #808080;">&rsquo;</span><span
                style="font-family: 'Times New Roman'; font-style: italic; color: #808080;">un
                calcul numérique ou de tests.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1"><span class="f_Heading1"
        style="font-size: 12pt;">Paramétrage du module thermique</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Le paramétrage du module
        thermique est simple à réaliser, et ne nécessite pas de connaissance
        approfondie de WinPro. Il consiste essentiellement à remplir un certain
        nombre de listes de valeurs ; WinPro applique sur ces valeurs des
        formules standardisées.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1" style="font-style: italic;">Menu du
                Coefficient thermique</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1"
              style="font-style: italic;"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">Un sous-menu, dans le
        menu Technique, vous donne accès aux principaux éléments de paramétrage
        du calcul thermique.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0435.zoom75.gif" width="532" height="335" border="0"
        alt="clip0435"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1"
                style="font-style: italic;">Epaisseurs des
              remplissages</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ce dialogue vous permet
        de spécifier les épaisseurs de vitrage ou de panneaux que vous
        utilisez. Il permet également de définir, pour chaque épaisseur, les
        valeurs </span><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">U</span><span
        style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">g</span><span
        class="f_Textestd"> (coefficient thermique du vitrage) ou </span><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">U</span><span
        style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">p</span><span
        class="f_Textestd"> (coefficient thermique du panneau) que vous
        souhaitez prendre en compte, afin de limiter l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">encodage des
        valeurs </span><span class="f_Textestd"
        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span
        class="f_Textestd"> détaillées (coefficient thermique périphérique des
        remplissages).</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0436.zoom89.gif" width="379" height="284" border="0"
        alt="clip0436"></p>

        <p class="p_Textestd"><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Si vous utilisez un remplissage
        d</span><span class="f_Textestd"
        style="font-weight: bold;">&rsquo;</span><span class="f_Textestd"
        style="font-weight: bold;">épaisseur intermédiaire, WinPro
        sélectionnera, pour les besoins du calcul, la valeur liée à
        l</span><span class="f_Textestd"
        style="font-weight: bold;">&rsquo;</span><span class="f_Textestd"
        style="font-weight: bold;">épaisseur immédiatement inférieure.
        </span><span class="f_Textestd"
        style="font-style: italic; font-weight: bold; text-decoration: underline;"> Si
        l</span><span class="f_Textestd"
        style="font-style: italic; font-weight: bold; text-decoration: underline;">&rsquo;</span><span
        class="f_Textestd"
        style="font-style: italic; font-weight: bold; text-decoration: underline;">épaisseur
        de vitrage utilisée est inférieure à la plus petite épaisseur déclarée,
        WinPro générera une erreur de calcul pour la valeur </span><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; text-decoration: underline;">U</span><span
        style="font-size: 6pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; vertical-align: sub; text-decoration: underline;">w</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1"
                style="font-style: italic;">Kaltefeinds</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1"
              style="font-style: italic;"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">Ce dialogue vous permet
        de définir la liste des codes article des kaltefeinds. </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0437.zoom83.gif" width="304" height="378" border="0"
        alt="clip0437"></p>

        <p class="p_Textestd"><span class="f_Heading1"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cela permettra à WinPro
        de rechercher un éventuel kaltefeind associé au profil bas
        d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">une porte, pour en calculer correctement la valeur
        thermique.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span
        class="f_Heading1" style="font-style: italic;">Dormant +
        ouvrant</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ce dialogue permet de
        définir les valeurs thermiques des couples ouvrant / dormant.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0015.zoom48.jpg" width="712" height="127" border="0"
        alt="clip0015"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p style="margin: 8px 0px 0px 0px;"><span class="f_ImageCaption">Une
        colonne </span><span class="f_ImageCaption"
        style="font-weight: bold;">Filtre</span><span
        class="f_ImageCaption"> peut être renseignée dans ce dialogue avec des
        valeurs arbitraires pour chaque ligne. Ces valeurs serviront à filtrer
        la liste des valeurs à afficher lors de l</span>&rsquo;<span
        class="f_ImageCaption">appel du menu.</span></p>

        <p style="text-align: center; margin: 8px 0px 0px 0px;"><span
        class="f_ImageCaption"> </span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0012.jpg" width="361" height="319" border="0"
        alt="clip0012"></p>

        <p class="p_Comment"><span class="f_ImageCaption">L</span>&rsquo;<span
        class="f_ImageCaption">utilisateur pourra filtrer la liste des valeurs
        U à afficher, ou bien ne pas utiliser de filtre de manière à tout
        lister avec le bouton <img src="img/clip0013.zoom93.jpg" width="129"
        height="22" border="0" alt="clip0013">.</span><br>
        <span class="f_ImageCaption"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ce dialogue dormant +
        ouvrant permet également de tenir compte de la présence de renforts
        (pour les châssis PVC), ainsi que de leur nature, les renforts ayant
        une influence non négligeable sur la performance thermique des profils.
        Le code des renforts doit être renseigné, car on peut avoir plusieurs
        types de renfort pour un même profil. Il faut également renseigner les
        valeurs des profils non renforcés, s</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">il y a
        lieu.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Pour chaque combinaison
        dormant / ouvrant / renfort(s), il faudra définir une valeur thermique
        en fonction de l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">épaisseur du remplissage. </span><span
        class="f_Textestd"
        style="font-style: italic; font-weight: bold; text-decoration: underline;">Si
        une valeur est laissée à 0, WinPro considérera qu</span><span
        class="f_Textestd"
        style="font-style: italic; font-weight: bold; text-decoration: underline;">&rsquo;</span><span
        class="f_Textestd"
        style="font-style: italic; font-weight: bold; text-decoration: underline;">elle
        n</span><span class="f_Textestd"
        style="font-style: italic; font-weight: bold; text-decoration: underline;">&rsquo;</span><span
        class="f_Textestd"
        style="font-style: italic; font-weight: bold; text-decoration: underline;">est
        pas renseignée, et générera une erreur s</span><span class="f_Textestd"
        style="font-style: italic; font-weight: bold; text-decoration: underline;">&rsquo;</span><span
        class="f_Textestd"
        style="font-style: italic; font-weight: bold; text-decoration: underline;">il
        a besoin de cette valeur</span><span class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">A côté de chaque valeur
        thermique figure un bouton (colonne </span><span
        style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
        style="font-size: 11pt; font-family: 'Times New Roman';">&Psi;</span><span
        class="f_Textestd">), qui donne accès aux tables de valeur périphérique
        des remplissages. L</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">utilisation de ces tables est optionnelle; en effet,
        il est possible de définir une valeur </span><span class="f_Textestd"
        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span
        class="f_Textestd"> par défaut au niveau des warm edges et des
        catégories de remplissage. Néanmoins, ces valeurs par défaut sont plus
        défavorables que les valeurs précises; il est donc préférable de
        renseigner les valeurs </span><span class="f_Textestd"
        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span
        class="f_Textestd"> détaillées si vous disposez des informations
        nécessaires, de manière à obtenir un calcul aussi précis que
        possible.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 48px;"><img
        src="img/clip0014.zoom57.jpg" width="509" height="306" border="0"
        alt="clip0014"></p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 48px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Chaque
        valeur </span><span
        style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
        style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span
        style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
        class="f_Textestd"> dépend en fait des paramètres suivants :</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Combinaison de profils</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Epaisseur de remplissage</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Type de remplissage (vitrage ou
                panneau). Il y a un tableau pour les vitrages, et un pour les
                panneaux.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Warm edge éventuel (intercalaire de
                vitrage), ou catégorie de panneau</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Coefficient </span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">U</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">g</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                class="f_Textestd"> du vitrage ou </span><span
                style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">U</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">p</span><span
                class="f_Textestd"> du panneau</span><span
                style="font-size: 11pt; font-family: 'Times New Roman';">.
                </span><span class="f_Textestd"
                style="font-style: italic; font-weight: bold; text-decoration: underline;"> Si
                une valeur </span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; text-decoration: underline;"></span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; text-decoration: underline;">U</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub; text-decoration: underline;">g</span><span
                class="f_Textestd"
                style="font-style: italic; font-weight: bold; text-decoration: underline;"> ou </span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; text-decoration: underline;">U</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub; text-decoration: underline;">p</span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; text-decoration: underline;"></span><span
                class="f_Textestd"
                style="font-style: italic; font-weight: bold; text-decoration: underline;"> intermédiaire
                aux valeurs définies est utilisée, c</span><span
                class="f_Textestd"
                style="font-style: italic; font-weight: bold; text-decoration: underline;">&rsquo;</span><span
                class="f_Textestd"
                style="font-style: italic; font-weight: bold; text-decoration: underline;">est
                la valeur </span><span class="f_Textestd"
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; font-style: italic; font-weight: bold; text-decoration: underline;">&Psi;</span><span
                class="f_Textestd"
                style="font-style: italic; font-weight: bold; text-decoration: underline;"> par
                défaut du warm edge ou de la catégorie de panneau qui est utilisée </span><span
                style="font-style: italic; font-weight: bold; text-decoration: underline;">(pour
                autant qu</span><span
                style="font-style: italic; font-weight: bold; text-decoration: underline;">&rsquo;</span><span
                style="font-style: italic; font-weight: bold; text-decoration: underline;">une
                valeur soit renseignée pour cette épaisseur d</span><span
                style="font-style: italic; font-weight: bold; text-decoration: underline;">&rsquo;</span><span
                style="font-style: italic; font-weight: bold; text-decoration: underline;">intercalaire
                dans le warm-edge, sinon WinPro renvoie une erreur de calcul)</span><span
                style="font-style: italic; font-weight: bold;">.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span
        class="f_Heading1" style="font-style: italic;"> </span></p>

        <p class="p_Comment"><span class="f_Textestd">Chaque ligne du tableau
        des valeurs </span><span class="f_Textestd"
        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span
        class="f_Textestd"> comprend une première colonne notée </span><span
        class="f_Textestd">&lsquo;</span><span
        class="f_Textestd">Déf.</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">. Cette
        première colonne permet de définir une valeur par défaut pour la ligne
        considérée.</span></p>

        <p class="p_Comment"><span class="f_Textestd">L</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">algorithme de
        recherche de la valeur </span><span class="f_Textestd"
        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span
        class="f_Textestd"> est donc le suivant :</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">1.</span></td>
              <td><span class="f_Textestd">WinPro essaie de trouver la valeur </span><span class="f_Textestd"
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span
                class="f_Textestd"> correspondant exactement au type de vitrage (épaisseur, valeur U, largeur d</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">intercalaire) et au groupe de profil considéré.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">2.</span></td>
              <td><span class="f_Textestd">S</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">il ne
                trouve rien, il vérifie s</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">il y
                a une valeur par défaut définie au niveau de la même ligne de
                valeurs </span><span class="f_Textestd"
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span
                class="f_Textestd">.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">3.</span></td>
              <td><span class="f_Textestd">S</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">il
                n</span><span class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">y en a pas, il prend la ligne de valeur </span><span class="f_Textestd"
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span
                class="f_Textestd"> du même tableau, pour le même warm edge, mais avec l</span><span class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">épaisseur d</span><span class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">intercalaire immédiatement inférieure (si elle existe).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">4.</span></td>
              <td><span class="f_Textestd">Si sur cette ligne, il y a une
                valeur définie pour la valeur U du vitrage considéré, il
                l</span><span class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">utilise.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">5.</span></td>
              <td><span class="f_Textestd">Si cette valeur n</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">est
                pas définie, il utilise la valeur par défaut de cette
                ligne.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">6.</span></td>
              <td><span class="f_Textestd">Si cette valeur par défaut
                n</span><span class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">est pas définie, il recommence au point 3,
                jusqu</span><span class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">à ce qu</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">éventuellement toutes les épaisseurs
                d</span><span class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">intercalaire inférieures à l</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">épaisseur voulue aient été passées en
                revue.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">7.</span></td>
              <td><span class="f_Textestd">Si après avoir vérifié toutes les
                épaisseurs d</span><span class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">intercalaire inférieures, il n</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">a
                encore rien trouvé, WinPro récupère la valeur par défaut de
                warm edge pour l</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">épaisseur d</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">intercalaire du vitrage. </span><span
                class="f_Textestd" style="font-weight: bold;">Attention, c'est
                l'épaisseur d'intercalaire exacte que l'algorithme recherchera
                dans le warm-edge, il n'ira pas chercher l'épaisseur
                d'intercalaire inférieure comme pour les tables Psi détaillées,
                mais attendra bien la valeur exacte !</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">8.</span></td>
              <td><span class="f_Textestd">Si à ce stade, cette valeur
                n</span><span class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">est pas définie, une erreur est
                générée.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 48px;"><span
        class="f_Textestd"> </span></p>

        <p
        style="border-color: #000000; border-style: solid; border-width: 1px; padding: 1px 5px 1px 5px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic; font-weight: bold; text-decoration: underline;">Remarque
        importante :</span></p>

        <p
        style="border-color: #000000; border-style: solid; border-width: 1px; padding: 1px 5px 1px 5px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic;">La
        définition d</span><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic;">&rsquo;</span><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic;">une
        valeur </span><span class="f_Textestd"
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span>
        pour chaque cas de figure repr</span><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic;">ésente
        un très gros volume de travail. Cette définition est cependant tout à
        fait optionnelle. E</span><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic;">n
        effet, du moment qu</span><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic;">&rsquo;</span><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic;">une
        valeur <span class="f_Textestd"
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span> par d</span><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic;">éfaut
        a été renseignée au niveau des warm edges et des catégories de
        panneaux, WinPro est en mesure de calculer le coefficient de
        dissipation thermique de la fenêtre. Vous pouvez donc ne rien
        renseigner dans ce table</span><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic;">au,
        ou encore ne renseigner que les cas de figure que vous rencontrez le
        plus souvent. Attention toutefois, la valeur <span class="f_Textestd"
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span> par d</span><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic;">éfaut
        est généralement la valeur la moins favorable; si vous vous en
        contentez, le résultat du calcul sera moins favorable!</span></p>

        <p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span
        class="f_Heading1" style="font-style: italic;"> </span></p>

        <p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span
        class="f_Heading1" style="font-style: italic;">Dormant + fixe</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ce dialogue fonctionne
        sur le même principe que le dialogue dormant + ouvrant, mais pour les
        dormants seuls (fixe simple cadre). Il faut renseigner le dormant et
        son renfort éventuel, ainsi que les différentes valeurs thermiques en
        fonction de l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">épaisseur de remplissage.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span
        class="f_Heading1" style="font-style: italic;">Traverse +
        ouvrant</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ce dialogue fonctionne
        sur le même principe que le dialogue dormant + ouvrant, mais pour en
        remplaçant les dormants par les traverses.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span
        class="f_Heading1" style="font-style: italic;">Traverse +
        fixe</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ce dialogue fonctionne
        sur le même principe que le dialogue dormant + fixe, mais pour en
        remplaçant les dormants par les traverses. Il permet également de
        définir les valeurs pour les traverses d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">ouvrant (ce
        sont d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">ailleurs les mêmes valeurs si les traverses de
        dormant et d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">ouvrant sont identiques).</span></p>

        <p> </p>

        <p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span
        class="f_Heading1" style="font-style: italic;">Battements</span></p>

        <p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span
        class="f_Heading1" style="font-style: italic;"> </span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim29.jpg" width="602" height="89" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p style="text-align: center;"> </p>

        <p>Ce dialogue fonctionne sur le même principe que le dialogue dormant
        + ouvrant, mais pour les battements. Il faut renseigner l&rsquo;ouvrant
        et son renfort éventuel, ainsi que le profil de battement qui y est
        associé et son renfort éventuel, pour toutes les combinaisons de
        profils possibles ouvrant + battement, afin de lever toutes les
        ambiguïtés.</p>

        <p> </p>

        <p>Pour expliquer différemment, voici l&rsquo;algorithme que suit le
        programme :</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">1.</span></td>
              <td>Sur le bord de cadre d&rsquo;ouvrant correspondant à un
                battement, le programme récupère le code du profil
                d&rsquo;ouvrant utilisé (et son renfort éventuel)</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">2.</span></td>
              <td>Ensuite, sur ce même bord du même cadre, il recherche un
                éventuel profil de battement. S&rsquo;il en trouve un, il le
                note, avec son renfort éventuel..</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">3.</span></td>
              <td>Le programme cherche ensuite un profil de battement sur le
                bord de cadre correspondant du cadre adjacent.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">4.</span></td>
              <td>S&rsquo;il en trouve un sur le cadre adjacent, de deux choses
                l&rsquo;une :</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 18px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">a.</span></td>
              <td>Soit il avait déjà trouvé un profil de battement pour le
                premier cadre; dans ce cas il note le deuxième profil de
                battement en complément (ce qui correspond à la colonne
                &lsquo;Battement 2&rsquo;), avec son renfort éventuel.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 18px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">b.</span></td>
              <td>Soit il n&rsquo;avait pas trouvé de profil de battement sur
                le premier cadre; dans ce cas il note le profil de battement
                trouvé sur le cadre adjacent comme profil principal de
                battement (ce qui correspond à la colonne
                &lsquo;Battement&rsquo;), avec son renfort éventuel.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>On pourra distinguer 6 cas de figures pour ce type de paramétrage,
        illustrés par des exemples ci-dessous.</p>

        <p>Quelque soit le cas de figure, il faudra décliner toutes les
        combinaisons de profils dans tous les cas, sans renfort, renfort
        d&rsquo;un côté, renfort des 2 côtés.</p>

        <p>L&rsquo;exemple 1 sera ici détaillé pour tous les cas de figures
        possibles (sans renforts, renforts d&rsquo;un côté, renfort des 2
        côtés). Les autres exemples représentent les cas de renforcements
        maximums, mais sans détailler les cas non renforcés.</p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 11pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-style: italic; text-decoration: underline;">Cas 1 :
                2 profils d</span><span
                style="font-style: italic; text-decoration: underline;">&rsquo;</span><span
                style="font-style: italic; text-decoration: underline;">ouvrant
                identiques sur chaque vantail, pas de battement </span><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic; text-decoration: underline;">(détail
                complet de toutes les combinaisons, avec et sans renforts, 
                soit 4 combinaisons)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 8px 0px 0px 24px;"><img src="img/clip0022.zoom69.jpg"
        width="482" height="172" border="0" alt="clip0022"></p>

        <p style="margin: 8px 0px 0px 24px;"><img src="img/clip0024.zoom68.jpg"
        width="480" height="170" border="0" alt="clip0024"></p>

        <p style="margin: 8px 0px 0px 24px;"><img src="img/clip0025.zoom68.jpg"
        width="481" height="171" border="0" alt="clip0025"></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0026.zoom69.jpg" width="480" height="172" border="0"
        alt="clip0026"></p>

        <p><span
        style="font-style: italic; text-decoration: underline;"> </span></p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">Autant de
        ligne nécessaires que de combinaisons, dans l</span><span
        style="font-size: 11pt; font-family: 'Times New Roman';">&rsquo;</span><span
        style="font-size: 11pt; font-family: 'Times New Roman';">ordre :</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 24px;">

        <table cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 32px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">Ouvrant</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 32px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Renfort
                ouvrant</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 32px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">Battement</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 32px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Renfort
                battement</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 32px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">Battement
                2</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 32px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Renfort
                battement 2</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 32px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Renfort
                ouvrant 2</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 17px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 17px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 17px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 17px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 17px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 17px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 17px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff6600;"> </span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #33cc33;">Renfort
                A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff6600;"> </span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 10px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 10px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 10px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 10px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 10px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 10px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 10px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff6600;">Renfort
                A</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 6px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 6px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #33cc33;">Renfort
                A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 6px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 6px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 6px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 6px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 6px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff9933;">Renfort
                A</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-style: italic; text-decoration: underline;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-style: italic; text-decoration: underline;">Cas 2 :
                2 profils d</span><span
                style="font-style: italic; text-decoration: underline;">&rsquo;</span><span
                style="font-style: italic; text-decoration: underline;">ouvrant
                identiques sur chaque vantail, un seul battement</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0019.zoom66.jpg" width="565" height="206" border="0"
        alt="clip0019"></p>

        <p><span
        style="font-style: italic; text-decoration: underline;"> </span></p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">Une ligne
        nécessaire par combinaison de profil/renfort, et pour le cas
        illustré</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">Ouvrant</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Renfort
                ouvrant</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">Battement</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Renfort
                battement</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">Battement
                2</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Renfort
                battement 2</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 28px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Renfort
                ouvrant 2</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;">Renfort
                A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;">Renfort
                B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff6600;">Renfort
                A</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-style: italic; text-decoration: underline;">Cas 3:
                2 profils d</span><span
                style="font-style: italic; text-decoration: underline;">&rsquo;</span><span
                style="font-style: italic; text-decoration: underline;">ouvrant
                identiques sur chaque vantail, 2 battements</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0020.zoom65.jpg"
        width="563" height="238" border="0" alt="clip0020"></p>

        <p> </p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">Une ligne
        nécessaire par combinaison de profil/renfort, et pour le cas
        illustré</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 24px;">

        <table cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 34px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">Ouvrant</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 34px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Renfort
                ouvrant</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 34px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">Battement</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 34px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Renfort
                battement</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 34px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">Battement
                2</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 34px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Renfort
                battement 2</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 34px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Renfort
                ouvrant 2</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;">Renfort
                A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;">Renfort
                B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">C</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;">Renfort
                C</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff6600;">Renfort
                A</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff9933;">Renfort
                A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">C</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #33cc33;">Renfort
                C</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #33cc33;">Renfort
                B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #33cc33;">Renfort
                A</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-style: italic; text-decoration: underline;">Cas 4:
                2 profils d</span><span
                style="font-style: italic; text-decoration: underline;">&rsquo;</span><span
                style="font-style: italic; text-decoration: underline;">ouvrant
                distincts sur chaque vantail, pas de  battement</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0851.zoom89.gif"
        width="571" height="197" border="0" alt="clip0851"></p>

        <p><span
        style="font-style: italic; text-decoration: underline;"> </span></p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">Une ligne
        nécessaire par combinaison de profil/renfort, et pour le cas
        illustré</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 24px;">

        <table cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">Ouvrant</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Renfort
                ouvrant</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">Battement</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Renfort
                battement</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">Battement
                2</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Renfort
                battement 2</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Renfort
                ouvrant 2</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 19px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 19px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;">Renfort
                A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 19px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 19px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 19px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 19px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 19px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff6600;"> </span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 14px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 14px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #33cc33;">Renfort
                B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 14px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 14px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 14px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 14px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 14px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff6600;"> </span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-style: italic; text-decoration: underline;">Cas 5:
                2 profils d</span><span
                style="font-style: italic; text-decoration: underline;">&rsquo;</span><span
                style="font-style: italic; text-decoration: underline;">ouvrant
                distincts sur chaque vantail, un seul battement</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0846.zoom89.gif"
        width="572" height="233" border="0" alt="clip0846"></p>

        <p> </p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">Une ligne
        nécessaire par combinaison de profil/renfort, et pour le cas
        illustré</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 24px;">

        <table cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 34px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">Ouvrant</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 34px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Renfort
                ouvrant</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 34px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">Battement</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 34px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Renfort
                battement</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 34px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">Battement
                2</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 34px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Renfort
                battement 2</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 34px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Renfort
                ouvrant 2</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;">Renfort
                A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;">Renfort
                B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 14px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff6600;"> </span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">C</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff9933;">Renfort
                C</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #33cc33;">Renfort
                B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;"> </span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 17px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff6600;"> </span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span
                style="font-style: italic; text-decoration: underline;">Cas 6:
                2 profils d</span><span
                style="font-style: italic; text-decoration: underline;">&rsquo;</span><span
                style="font-style: italic; text-decoration: underline;">ouvrant
                distincts sur chaque vantail, deux battements</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0845.zoom89.gif"
        width="572" height="270" border="0" alt="clip0845"></p>

        <p><span
        style="font-style: italic; text-decoration: underline;"> </span></p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';">Une ligne
        nécessaire par combinaison de profil/renfort, et pour le cas
        illustré</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 24px;">

        <table cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 34px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">Ouvrant</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 34px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Renfort
                ouvrant</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 34px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">Battement</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 34px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Renfort
                battement</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 34px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; color: #ffffff;">Battement
                2</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 34px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Renfort
                battement 2</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 34px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ffffff;">Renfort
                ouvrant 2</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;">Renfort
                A</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;">Renfort
                B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">C</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #009900;">Renfort
                C</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#bfbfbf"
              style="width: 80px; height: 16px; background-color: #bfbfbf; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff6600;"> </span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">D</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #ff9933;">Renfort
                D</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">C</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #33cc33;">Renfort
                C</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman';">B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #33cc33;">Renfort
                B</span></p>
              </td>
              <td valign="middle" width="80" bgcolor="#7f7f7f"
              style="width: 80px; height: 24px; background-color: #7f7f7f; border: solid 1px #000000;"><p
                style="text-align: center; margin: 8px 0px 0px 0px;"><span
                style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold; color: #33cc33;"> </span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="525"
                style="width: 525px; border: solid 1px #000000;"><p
                class="p_Notes" style="margin: 0px 0px 0px 10px;"><span
                class="f_Notes" style="font-weight: bold;">Remarques
                importantes</span><span class="f_Notes"> :</span><br>
                <span class="f_Notes">- Les coupes données ci-dessus sont des
                exemples représentatifs des différents cas de
                figures.</span><br>
                <span class="f_Notes">- L</span><span
                class="f_Notes">&rsquo;</span><span class="f_Notes">ordre dans
                lequel les séquences de profils sont définis est important,
                c</span><span class="f_Notes">&rsquo;</span><span
                class="f_Notes">est ce qui permet au logiciel de déterminer la
                bonne combinaison de profils utilisée en partie centrale,
                notamment pour les cas de figure 3 et 6.</span><br>
                <span class="f_Notes" style="color: #ff0000;">- Pour que le
                calcul s</span><span class="f_Notes"
                style="color: #ff0000;">&rsquo;</span><span class="f_Notes"
                style="color: #ff0000;">effectue correctement, il est impératif
                que les débits de profils soient paramétrés correctement.
                Ainsi, les différents ouvrants doivent appartenir à la
                catégorie </span><span class="f_Notes"
                style="font-weight: bold; color: #ff0000;">Profil
                principal</span><span class="f_Notes" style="color: #ff0000;">,
                et les battements et couvre-joints doivent être paramétrés dans
                la catégorie </span><span class="f_Notes"
                style="font-weight: bold; color: #ff0000;">Mauclair
                </span><span class="f_Notes" style="color: #ff0000;">! Chaque
                profil doit également être </span><span class="f_Notes"
                style="font-weight: bold; color: #ff0000;">affecté au bon
                cadre, et sur le bon bord</span><span class="f_Notes"
                style="color: #ff0000;">, sans quoi le calcul sera erroné
                !</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p style="text-align: center;"> </p>

        <p style="margin: 8px 0px 0px 0px;"><span class="f_ImageCaption">Une
        fois trouvés ces éléments, le programme constitue une clé de recherche
        dans la table des valeurs U</span><span
        style="font-size: 5pt; vertical-align: sub;">f</span><span
        class="f_ImageCaption">. </span><span style="font-style: italic;">Cela
        implique donc que les profils de battement soient bien paramétrés sur
        le cadre auquel ils appartiennent, particulièrement lorsqu</span><span
        style="font-style: italic;">&rsquo;</span><span
        style="font-style: italic;">il y a deux profils de battement.</span></p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-style: italic;"> </span></p>

        <p style="margin: 8px 0px 0px 0px;"><span class="f_Heading1"
        style="font-style: italic;">Bas de porte</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ce dialogue fonctionne
        sur le même principe que le dialogue dormant + ouvrant, mais pour en
        remplaçant le dormant par un seuil et/ou un kaltefeind.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span
        class="f_Heading1" style="font-style: italic;">VMC</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Le programme permet de
        prendre en compte les VMC dans le calcul thermique. Il faut pour cela
        créer deux variables sur le (ou les) profil(s) recevant la
        VMC :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">CoeffU_VMC</span><span class="f_Textestd"> :
        Indique le coefficient thermique de la VMC.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">SurfaceVMC</span><span class="f_Textestd"> :
        indique la surface totale des VMC, en mm².</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0457.zoom92.gif" width="523" height="63" border="0"
        alt="clip0457"></p>

        <p class="p_Textestd"><span class="f_Textestd">WinPro va récupérer la
        surface de la VMC. Il déduit cette surface de la surface du profil
        recevant la VMC. Ensuite il calcule le produit de la surface de la VMC
        (converti en m²) par le coefficient de la VMC. </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1" style="font-style: italic;">Table
                des vitrages</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cette table contient des
        renseignements complémentaires pour pouvoir calculer correctement le
        coefficient thermique d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">une
        fenêtre :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim30.jpg" width="535" height="347" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Coefficient U</span><span
        class="f_Textestd"> : coefficient thermique du vitrage.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic; font-weight: bold;">Attention! Pour les
        vitrages composés, cette valeur ne peut être définie que par formule
        (variable </span><span class="f_Variables">Ug</span><span
        class="f_Textestd"
        style="font-style: italic; font-weight: bold;">).</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Facteur solaire</span><span
        class="f_Textestd"> : </span><span class="f_ImageCaption">mesure la
        contribution d'un vitrage à l'échauffement de la pièce. Plus le facteur
        solaire est petit, plus les apports solaires sont faibles.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Transmission lumineuse</span><span
        class="f_Textestd"> : coefficient de transmission lumineuse du
        vitrage.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">Ces deux derniers paramètres n</span><span
        class="f_Textestd" style="font-style: italic;">&rsquo;</span><span
        class="f_Textestd" style="font-style: italic;">entrent pas en compte
        pour le calcul thermique; ils sont simplement mentionnés à titre
        indicatif avec la description de chaque vitrage.</span></p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-style: italic;"> </span></p>

        <p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span
        class="f_Heading1" style="font-style: italic;">Catégories de
        panneaux</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cette table est
        accessible par le menu </span><span class="f_Textestd"
        style="font-weight: bold;">Technique | Châssis | Catégories de
        panneaux</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ces catégories vont
        permettre de définir plus facilement les valeurs </span><span
        class="f_Textestd"
        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span
        style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">p</span><span
        style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
        class="f_Textestd"> (coefficient périmétrique du panneau), tant pour les
        valeurs simplifiées que détaillées. Il faudra assigner à chaque panneau
        une catégorie; cette catégorie fournira les valeurs nécessaires au
        calcul thermique : soit le </span><span class="f_Textestd"
        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span
        style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">p</span><span
        style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
        class="f_Textestd"> simplifié, soit l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">index
        d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">entrée dans les tables des valeurs </span><span
        class="f_Textestd"
        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span
        style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">p</span><span
        style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
        class="f_Textestd"> détaillées.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0442.zoom79.gif" width="478" height="91" border="0"
        alt="clip0442"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 34px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Code</span><span
                class="f_Textestd"> : code de la catégorie</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 34px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Description</span><span
                class="f_Textestd"> : description de la catégorie</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 34px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x25aa;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Coefficient Psi
                (simplifié</span><span class="f_Textestd">) : fonctionne sur le
                même principe que pour les vitrages.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1" style="font-style: italic;">Table
                des panneaux (panneaux à découper, panneaux décoratifs,
                panneaux fabriqués)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0443.zoom87.gif" width="526" height="433" border="0"
        alt="clip0443"></p>

        <p class="p_Textestd"><span class="f_Heading1"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ces table contiennent
        des renseignements complémentaires pour pouvoir calculer correctement
        le coefficient thermique d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">une
        fenêtre :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Catégorie
                thermique</span><span class="f_Textestd"> : indique la
                catégorie de panneau pour le calcul thermique (voir ci-dessus
                Catégories de panneaux). Ceci est valable pour tous les types
                de panneau.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0444fra.jpg" width="610" height="470" border="0"
        alt="clip0444fra"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Coefficient U</span><span
                class="f_Textestd"> : coefficient thermique du
              panneau.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic; font-weight: bold;">Attention! Cette valeur
        est définie pour les panneaux à découper et les panneaux décoratifs.
        Pour les panneaux fabriqués, cette valeur ne peut être définie que par
        formule (variable </span><span class="f_Variables">Up</span><span
        class="f_Textestd"
        style="font-style: italic; font-weight: bold;">).</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1" style="font-style: italic;">Table
                des aérateurs</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cette table contient des
        renseignements complémentaires pour pouvoir calculer correctement le
        coefficient thermique d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">une
        fenêtre :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0445.zoom66.gif" width="521" height="362" border="0"
        alt="clip0445"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Coefficient U</span><span
                class="f_Textestd"> : coefficient thermique de l</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">aérateur</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Coefficient </span><span
                class="f_Textestd"
                style="font-weight: bold;">&lsquo;</span><span
                class="f_Textestd" style="font-weight: bold;">psi</span><span
                class="f_Textestd"
                style="font-weight: bold;">&rsquo;</span><span
                class="f_Textestd"> : coefficient périphérique de l</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">aérateur. Attention, ce coefficient est
                appliqué sur tout le périmètre de l</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">aérateur, et remplace donc le </span><span
                class="f_Textestd"
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">g</span><span
                class="f_Textestd"> du vitrage à l</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">interface entre le vitrage et l</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">aérateur.</span> 

                <p></p>

                <p><span style="color:#ff0000">Attention :</span> Par défaut,
                Winpro ne tient pas compte de l'aérateur pour le calcul
                thermique de la menuiserie. Si toutefois vous souhaitez qu'il
                soit pris en compte, il faut alors activer une clé dans les
                settings:</p>

                <p>[Thermique]<span class="f_Winproini"></span></p>

                <p><span class="f_Winproini">Aerateurs Simplifies = 0 <span
                style="color:#000000"><em>L'aérateur influence le calcul
                thermique </em></span></span></p>

                <p></p>

                <p></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1" style="font-style: italic;">Table
                des croisillons</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cette table contient des
        renseignements complémentaires pour pouvoir calculer correctement le
        coefficient thermique d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">une
        fenêtre :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0446.zoom68.gif" width="532" height="370" border="0"
        alt="clip0446"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Coefficient </span><span
                class="f_Textestd"
                style="font-weight: bold;">&lsquo;</span><span
                class="f_Textestd" style="font-weight: bold;">psi</span><span
                class="f_Textestd"
                style="font-weight: bold;">&rsquo;</span><span
                class="f_Textestd"> : coefficient linéaire du croisillon
                (</span><span class="f_Textestd"
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span
                style="font-size: 6pt; font-family: 'Times New Roman'; vertical-align: sub;">Sp</span><span
                class="f_Textestd">).</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Le
        coefficient </span><span class="f_Textestd"
        style="font-weight: bold;"></span><span class="f_Textestd"
        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; font-weight: bold;">&Psi;</span><span
        style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">Sp</span><span
        style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
        class="f_Textestd"> sera appliqué sur la longueur des barreaux du
        croisillon. Cette longueur est calculée automatiquement par WinPro;
        vous pouvez la redéfinir par formule, en assignant une valeur à la
        variable </span><span class="f_Variables">LgPsi</span><span
        class="f_Textestd"> dans les formules de croisillon, ceci afin de
        prendre en compte des dessins de croisillon que vous auriez
        définis.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1" style="font-style: italic;">Caissons
                des volets incorporés</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Le paramétrage de la
        valeur thermique des caissons dépend de variables et options de saisie,
        qui rendent impossible le paramétrage par des valeurs fixes. Il vous
        faudra donc fournir une valeur </span><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">&Psi;</span><span
        class="f_Textestd">calculée par formule, qui sera stockée dans une
        variable nommée </span><span class="f_Variables">Psi</span><span
        class="f_Textestd">, et dont la valeur correspondra à l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">une des
        valeurs reprises au </span><span class="f_Textestd"
        style="font-weight: bold;">tableau 1 </span><span
        class="f_Textestd">(voir plus haut). Si cette variable n</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">est pas
        fournie, ou est à 0, WinPro appliquera le coefficient </span><span
        class="f_Textestd"
        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&Psi;</span><span
        class="f_Textestd"> maximum, qui est de 1.5.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1" style="font-style: italic;">Tabliers
                des volets incorporés</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">La valeur </span><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">R</span><span
        style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">sh</span><span
        class="f_Textestd"> qui représente la résistance thermique du tablier,
        sera fournie par paramétrage d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">une valeur
        fixe au niveau de la définition des tabliers. Il vous est possible de
        la redéfinir via la variable </span><span
        class="f_Variables">RSH</span><span class="f_Textestd"> que vous pouvez
        définir au niveau des formules de tablier. Si cette variable
        n</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">est pas fournie, et que la valeur fixe n</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">a pas été
        définie, WinPro considérera que </span><span
        style="font-size: 11pt; font-family: 'Times New Roman'; font-weight: bold;">R</span><span
        style="font-size: 6pt; font-family: 'Times New Roman'; font-weight: bold; vertical-align: sub;">sh</span><span
        style="font-size: 11pt; font-family: 'Times New Roman';"></span><span
        class="f_Textestd"> vaut </span><span class="f_Textestd"
        style="font-weight: bold;">0</span><span class="f_Textestd"> (cas le
        plus défavorable).</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0447.zoom69.gif" width="542" height="376" border="0"
        alt="clip0447"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">La classe de résistance
        thermique des tabliers sera exclusivement paramétrée par une variable </span><span class="f_Variables">ClasseThermique</span><span
        class="f_Textestd"> à définir dans les formules de tablier, conformément
        au </span><span class="f_Textestd" style="font-weight: bold;">tableau
        2</span><span class="f_Textestd"> (voir plus haut). Si cette variable
        n</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">est pas définie, ou a une valeur inférieure à 1,
        WinPro considérera qu</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">elle a une
        valeur de </span><span class="f_Textestd"
        style="font-weight: bold;">1</span><span class="f_Textestd"> (cas le
        plus défavorable). Si la valeur est supérieure à </span><span
        class="f_Textestd" style="font-weight: bold;">5</span><span
        class="f_Textestd">, WinPro considérera qu</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">elle a une
        valeur de 5. Si cette variable est définie avec des décimales, la
        valeur sera arrondie à la valeur entière la plus proche.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1"><span class="f_Heading1"
        style="font-size: 12pt;">Utilisation du module thermique</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">L</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">utilisation
        est particulièrement simple.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0448.zoom76.gif" width="600" height="513" border="0"
        alt="clip0448"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Vous pouvez simplement
        désactiver l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">application du calcul thermique, via la case à
        cocher </span><span class="f_Textestd">&lsquo;</span><span
        class="f_Textestd" style="font-weight: bold;">Ne pas imprimer le
        coefficient thermique</span><span class="f_Textestd">&rsquo;</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Voyez également plus
        haut, pour l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">utilisation des warm edges.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Au niveau de
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">encodage, c</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">est
        tout.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Le résultat du calcul
        thermique peut être consulté à 4 niveaux :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">Sur la page
        </span><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">&lsquo;</span><span
        class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">Récapitulatif de
        la commande</span><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">&rsquo;</span><span
        class="f_Textestd"> : une colonne supplémentaire, Uw, indique la valeur
        calculée pour chaque fenêtre. Dans le total du prix, en bas à gauche,
        une ligne supplémentaire indique la valeur moyenne pondérée pour
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">ensemble de la commande. En cas d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">erreur de
        calcul (paramètre manquant), des points d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">interrogation
        (???) sont affichés à la place de la valeur thermique.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">Sur une nouvelle
        page </span><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">&lsquo;</span><span
        class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">Calcul
        thermique</span><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">&rsquo;
        :</span><span class="f_Textestd">Cette page vous donne tout le détail
        du calcul, pour chaque vitrage ou panneau et pour les profils qui le
        bordent. </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">Exemple :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0450.zoom55.gif" width="454" height="530" border="0"
        alt="clip0450"><span class="f_Textestd">  <img
        src="img/clip0449.zoom28.gif" width="533" height="333" border="0"
        alt="clip0449"></span></p>

        <p class="p_Textestd" style="text-align: center;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">En cas d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">erreur, la
        ligne posant problème est surlignée en rouge, avec le mot </span><span
        class="f_Textestd">&lsquo;</span><span
        class="f_Textestd">Erreur</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd"> en début de
        ligne.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">Exemple</span><span
        class="f_Textestd"> :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0451.zoom76.gif" width="404" height="756" border="0"
        alt="clip0451"><span class="f_Textestd">         <img
        src="img/clip0452.zoom28.gif" width="530" height="304" border="0"
        alt="clip0452"></span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">Sur les
        documents client</span><span class="f_Textestd">. La valeur de chaque
        châssis est indiqué dans sa description, dans un encadré spécifique. Un
        récapitulatif est également fourni en fin de document, qui reprend
        toutes les menuiseries, leur valeur individuelle, leur surface, leur
        quantité. Ce récapitulatif fournit également une valeur globale
        pondérée (somme des valeurs de chaque châssis multipliées chacune par
        la quantité de chaque châssis, cette somme est divisée par la surface
        totale de tous les châssis).</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0453.zoom50.gif" width="543" height="486" border="0"
        alt="clip0453"><span class="f_Textestd">   </span></p>

        <p class="p_Textestd" style="text-align: center;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0454.zoom49.gif" width="530" height="332" border="0"
        alt="clip0454"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p style="margin: 32px 0px 4px 0px;"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">Ujn (coefficient
        jour/nuit)</span></p>

        <p class="p_Comment"><span class="f_Textestd">En Belgique et en France,
        il existe une notion de coefficient </span><span
        class="f_Textestd">&lsquo;</span><span
        class="f_Textestd">jour/nuit</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">, noté
        Ujn.</span></p>

        <p class="p_Comment"><span class="f_Textestd">Ce coefficient
        s</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">applique sur les combinaisons de châssis et volet
        roulants incorporés (ou monoblocs).</span></p>

        <p class="p_Comment"><span class="f_Textestd">Elle se calcule de la
        manière suivante :</span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span class="f_Textestd"
        style="font-weight: bold;">France :</span></p>

        <p style="margin: 4px 0px 4px 48px;"><img src="img/clip0010.jpg"
        width="130" height="59" border="0" alt="clip0010"></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span class="f_Textestd"
        style="font-weight: bold;">Belgique :</span></p>

        <p style="margin: 4px 0px 4px 48px;"><img src="img/clip0011.jpg"
        width="149" height="61" border="0" alt="clip0011"></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span class="f_Textestd">Pour permettre à WinPro
        d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">appliquer la bonne formule en fonction du client, il
        faut définir, à n</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">importe quel niveau de paramétrage, une définition
        de formule, comme suit :</span></p>

        <p style="text-indent: 45px;"><span class="f_Textestd">_FormuleUjn :=
        x</span></p>

        <p class="p_Comment"><span class="f_Textestd">En remplaçant x par 0
        pour la France, et 1 pour la Belgique. Toute autre valeur sera
        ignorée.</span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p class="p_Comment"><span class="f_Textestd">Si vous souhaitez
        n</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">utiliser qu</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">une seule de
        ces deux formules, il vous suffit de définir la variable _FormuleUjn au
        niveau des variables de site (menu Utilitaires | Préférences…). Si vous
        souhaitez faire varier cette formule en fonction du client, il faudra
        définir la variable au niveau des variables de client.</span></p>

        <p class="p_Comment"><span class="f_Textestd">Notez que si la variable
        n</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">est pas définie, ou comporte une valeur autre que 0
        ou 1, la valeur Ujn ne sera ni calculée ni mentionnée sur les
        documents.</span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Heading1"
        style="font-size: 12pt;">Limites du calcul du module
        thermique</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Dans cette version, le
        calcul est assuré correctement pour toutes les fenêtres
        rectangulaires.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Pour les trapèzes et
        triangles, des écarts très minimes sont possibles par rapport au calcul
        théorique (l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">erreur vient du calcul de l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">aire des
        coins de profils).</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Pour les autres formes,
        le calcul est plus approximatif, et sans garantie.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les châssis comportant
        des parties vides ne sont pas correctement gérés (il manque le calcul
        de déperdition des demi-traverses côté vide).</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ces problèmes seront
        résolus dans les prochaines versions.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1"><span class="f_Heading1"
        style="font-size: 12pt;">Précision du calcul du module
        thermique</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les calculs sont
        effectués en virgule flottante, selon les normes IEEE-754 sur 64 bits
        (soit environ sur 15 chiffres significatifs). Les calculs
        intermédiaires en mémoire sont effectués sur 80 bits. Les valeurs de
        bases peuvent être encodées avec un maximum de 5 décimales. Les valeurs
        intermédiaires sont affichées sur 5 décimales également, mais toutes
        les décimales sont conservées pour le calcul. Le résultat final est
        tronqué sur deux décimales, en arrondissant à la valeur la plus proche
        (arrondi 4-5). Attention, certains arrondis peuvent au premier abord
        déconcerter, bien qu</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">ils soient parfaitement corrects. Par exemple, une
        valeur de 1.4449999 sera arrondie à 1.44 dans une représentation à deux
        décimales, mais à 1.445 dans une représentation à 3 décimales, et
        1.44500 dans une représentation à 5 décimales.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1"><span class="f_Heading1"
        style="font-size: 12pt;">Garanties du module thermique</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Nous avons tout mis en
        oeœuvre pour vous offrir un calcul exact de la performance thermique des
        fenêtres, sur base des coefficients que vous aurez introduits dans
        WinPro. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Néanmoins, nul programme
        n</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">est à l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">abri
        d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">une erreur de calcul. C</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">est entre
        autres pour cette raison que nous vous fournissons le calcul détaillé
        de chaque fenêtre.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">En effet,
        essentiellement deux types d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">erreur
        peuvent se produire : soit une erreur logicielle, si le programme
        rencontre une situation non prévue ; soit une erreur de données, si
        vous avez commis une erreur dans la saisie des valeurs thermiques de
        chaque composant.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Nous insistons donc pour que vous vérifiiez
        le calcul de tout devis ou commande pour lequel ce calcul a une
        importance cruciale. Nous vous fournissons un moyen de contrôle
        complet, clair et précis, et nous déclinons toute responsabilité en cas
        d</span><span class="f_Textestd"
        style="font-weight: bold;">&rsquo;</span><span class="f_Textestd"
        style="font-weight: bold;">erreur. Nous nous engageons uniquement à
        corriger le logiciel une fois l</span><span class="f_Textestd"
        style="font-weight: bold;">&rsquo;</span><span class="f_Textestd"
        style="font-weight: bold;">erreur reproduite et analysée par nos
        services.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Fenêtres doubles
        :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ce module est en cours
        de finalisation ; il sera documenté ultérieurement.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1"><span class="f_Heading1"
        style="font-size: 12pt;">Définition</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Nous appelons </span><span class="f_Textestd">&lsquo;</span><span
        class="f_Textestd">fenêtre double</span><span class="f_Textestd">&rsquo;</span><span class="f_Textestd"> une fenêtre
        rassemblant dans un même dormant deux séries d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">ouvrant en
        parallèle. Ce type de fenêtre est particulièrement répandu dans les
        pays nordiques et en Europe de l</span><span
        class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">Est.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Un exemple de fenêtre
        double, photographiée à Varsovie :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0455.zoom96.gif" width="513" height="663" border="0"
        alt="clip0455"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1"><span class="f_Heading1"
        style="font-size: 12pt;">Paramétrage</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Une fenêtre double se
        paramètre et s</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">encode fondamentalement comme deux fenêtres simples,
        avec un dormant commun.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Essentiellement, le
        paramétrage se résume, au niveau du dormant, à spécifier que les
        fenêtres doubles y sont autorisées.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Au niveau des formules
        de paramétrage, vous disposez en outre d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">une variable
        </span><span class="f_Variables">DoubleFenetre</span><span
        class="f_Textestd">, disponible au niveau des ouvrants et des
        quincailleries, qui peut prendre l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">une des
        valeurs suivante :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-weight: bold;">0</span><span
        class="f_Textestd">= pas de double fenêtre</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-weight: bold;">1</span><span
        class="f_Textestd">= fenêtre intérieure</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-weight: bold;">2</span><span
        class="f_Textestd">= fenêtre extérieure</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">La notion de fenêtre
        intérieure / extérieure s</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">entend pour
        une saisie en vue intérieure. Pour une saisie en vue extérieure, 1
        représentera la fenêtre extérieure, 2 la fenêtre intérieure.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Pour éviter toute
        ambiguïté par la suite, la fenêtre intérieure sera dénommée fenêtre
        principale, et la fenêtre extérieure, fenêtre secondaire.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Au niveau des usinages,
        il n</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">y a rien de particulier à signaler. Les usinages
        depuis un ouvrant ou une quincaillerie vers le dormant sont utilisables
        depuis les deux fenêtres. Les usinages d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">un ouvrant
        vers lui-même ou d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">une quincaillerie vers l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">ouvrant
        tiennent compte de la fenêtre d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">origine, et
        aboutissent sur l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">ouvrant correspondant (donc, les usinages
        d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">un ouvrant ou d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">une
        quincaillerie dans la fenêtre principale aboutissent à l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">ouvrant de la
        fenêtre principale ; ceux de la fenêtre secondaire à l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">ouvrant de la
        fenêtre secondaire).</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1"><span class="f_Heading1"
        style="font-size: 12pt;">Utilisation</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Heading1" style="margin: 0px 0px 0px 48px;"><span
        class="f_Heading1" style="font-style: italic;">Encodage</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">La saisie d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">une fenêtre
        double commence de manière tout à fait classique. Il est préférable de
        commencer par saisir tous les éléments de dormant (dormant proprement
        dit, traverses de dormant, profils périphériques, volet roulant) avant
        de saisir les ouvrants. Toutefois, WinPro est capable de réajuster
        correctement les ouvrants de chaque face de la fenêtre si l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">un quelconque
        des éléments de dormant est modifié ultérieurement.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">La fenêtre principale se
        saisit tout à fait classiquement, comme pour une fenêtre
        simple.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Pour la saisie de la
        fenêtre secondaire, il faut faire un clic droit dans la liste des
        châssis de la commande, à droite de l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">écran. Dans
        le menu contextuel, choisissez </span><span
        class="f_Textestd">&lsquo;</span><span class="f_Textestd"
        style="font-weight: bold;">Fenêtre double</span><span
        class="f_Textestd" style="font-weight: bold;">&rsquo;</span><span
        class="f_Textestd">. WinPro crée alors une deuxième entrée dans la
        liste des fenêtres. Cette entrée va contenir la définition de la
        fenêtre secondaire. Vous pouvez y saisir librement la fenêtre
        secondaire, à ceci près qu</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">il
        n</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">est pas possible de modifier les éléments du
        dormant.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Notez enfin
        qu</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">un clic droit sur la fenêtre secondaire, dans la
        liste des fenêtres, n</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">a aucun
        effet. De même, si la fenêtre secondaire est déjà définie, un clic
        droit sur la fenêtre principale ne présente plus la possibilité de
        créer une nouvelle fenêtre secondaire. Enfin, pour supprimer une
        fenêtre double, il faut simplement supprimer la fenêtre
        principale.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1"
                style="font-style: italic;">Calculs</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">La fenêtre secondaire ne
        figurera jamais en tant que telle sur un document ; elle sera toujours
        associée à la fenêtre principale. Notamment, les plans d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">atelier
        regrouperont les deux fenêtres sur une même liste de composants.
        Toutefois, pour plus de clarté, les composants de la fenêtre secondaire
        seront imprimés à la suite du dernier composant de la fenêtre
        principale. Il en sera de même dans la liste des composants disponible
        à l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">écran au niveau de la saisie de commande.</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Textestd"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1"
                style="font-style: italic;">Dessins</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les ouvrants sont
        dessinés en fonction de la vue demandée et de leur visibilité par
        rapport à cette vue. Il est possible de représenter simultanément les
        deux ouvrants en imprimant systématiquement la vue intérieure et la vue
        extérieure.</span></p>

        <p class="p_Heading1"><span class="f_Heading1"
        style="font-style: italic;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 36px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-weight: bold; font-style: italic; font-size: 10pt; font-family: 'Arial'; color: #000000;"></span></td>
              <td><span class="f_Heading1" style="font-style: italic;">Vues en
                coupe</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cette fonctionnalité
        n</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">est pas disponible à ce stade. Elle sera développée
        ultérieurement.</span></p>

        <p style="margin: 4px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>

        <p style="margin: 4px 0px 4px 0px;"><span
        class="f_TitreReleaseNote">Marquage </span><img src="img/embim31.jpg"
        width="29" height="23" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="margin: 4px 0px 4px 0px;"><span
        class="f_Heading1"> </span></p>

        <p class="p_Heading1"><span class="f_Heading1"> </span></p>

        <p class="p_Heading1" style="text-align: center;"><img
        src="img/clip0033.zoom45.jpg" width="225" height="345" border="0"
        alt="clip0033"></p>

        <p class="p_Heading1" style="text-align: center;"><span
        class="f_Heading1"> </span></p>

        <p class="p_Heading1"><span class="f_Heading1">Définition</span></p>

        <p class="p_Heading1"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Le module de marquage </span><img src="img/embim32.jpg" width="20" height="16" vspace="1"
        hspace="1" border="0" alt=""><span class="f_Textestd"> vous permet de
        répondre à vos obligations légales en la matière, de manière
        automatisée.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ce module permet la
        définition et l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">impression de toutes les mentions obligatoires pour
        le marquage </span><img src="img/embim32.jpg" width="20" height="16"
        vspace="1" hspace="1" border="0" alt=""><span class="f_Textestd">. Notez que le contenu de ce marquage reste sous votre entière
        responsabilité, Winpro se borne à vous fournir les mécanismes indispensables, ainsi qu</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">un format
        d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">impression conforme à la législation.</span></p>

        <p style="margin: 16px 0px 4px 0px;"><span
        class="f_Heading1">Paramétrage</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Le marquage CE se
        paramètre à deux niveaux.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">Le premier
        niveau</span><span class="f_Textestd"> permet de définir différents
        types de marquage </span><img src="img/embim32.jpg" width="20" height="16"
        vspace="1" hspace="1" border="0" alt=""><span class="f_Textestd">,
        suivant p.ex. les types de fenêtre (porte, fenêtre à frappe, fenêtre
        coulissante, … en PVC, aluminium, bois, …), leur lieu de production,
        leur pays de destination, etc… </span></p>

        <p class="p_Textestd"><span class="f_Textestd">A ce niveau de
        paramétrage, il faut définir pour chaque type de marquage une fiche,
        via le menu </span><span class="f_Textestd"
        style="font-weight: bold;">Technique | Marquage CE</span><span
        class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Chaque fiche comporte
        deux pages. La première vous permet de définir les informations fixes
        pour chaque marquage (les champs en gras sont obligatoires!) :
        </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Description : indiquez ici le type
                de menuiserie, p.ex. </span><span class="f_Textestd"
                style="font-weight: bold;">&lsquo;</span><span
                class="f_Textestd" style="font-weight: bold;">Fenêtre PVC à
                frappe</span><span class="f_Textestd"
                style="font-weight: bold;">&rsquo;</span><span
                class="f_Textestd" style="font-weight: bold;">.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Catégorie : valeur numérique
                arbitraire, qui doit simplement être différente pour chaque
                marquage</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Numéro d</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">identification (optionnel)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Nom et
                adresse de la société apposant le marquage</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Numéro de certification
                (optionnel)</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Identification de la norme
                correspondante</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Créez ici un nom de variable (sans «
                _ ») qui sera utilisé pour récupérer le coefficient thermique
                Uw de la fenêtre, tel que calculé par WinPro, ou bien calculé
                manuellement au fil des formules. Voir le point 2 du deuxième
                niveau.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0030.jpg"
        width="372" height="440" border="0" alt="clip0030"></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">La deuxième page
        consiste en une liste similaire à une liste de questions telle que vous
        pouvez rencontrer dans le paramétrage technique. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cette liste de question
        se distingue toutefois des questions standard sur deux points : tout
        d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">abord par l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">ajout
        d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">une colonne </span><span
        class="f_Textestd">&lsquo;</span><span
        class="f_Textestd">Unité</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd"> pour les
        caractéristiques nécessitant la mention de l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">unité
        utilisée (p.ex. pour le calcul thermique, l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">unité sera </span><span class="f_Textestd">&lsquo;</span><span
        class="f_Textestd">W/m².K</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">); ensuite
        par le fait que ces </span><span class="f_Textestd">&lsquo;</span><span
        class="f_Textestd">questions</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd"> ne seront pas
        directement accessibles à l</span><span class="f_Textestd">&rsquo;</span><span class="f_Textestd">utilisateur;
        les réponses devront être apportées par paramétrage uniquement.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">Le deuxième
        niveau</span><span class="f_Textestd"></span><span
        class="f_Textestd"> consiste à utiliser les pseudo-questions ainsi
        définies au niveau du paramétrage par formules.  Ceci se fait en deux
        temps :</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 8px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">1.</span></td>
              <td><span class="f_Textestd">Tout d</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">abord, il faut définir quel marquage doit
                être utilisé pour une menuiserie. Ceci se fait avant le début
                de calcul de la menuiserie, mais après l</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">initialisation par WinPro de toutes les
                variables globales liées à cette menuiserie. En clair, il
                faudra définir le type de marquage dans l</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">une
                des formules suivantes :</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Formule de site</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Formule utilisateur</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Formule système</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Formule spécifique client</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="color: #000000;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">La sélection du type de
        marquage se fait en affectant une valeur à la variable </span><span
        class="f_Variables">_MarquageCE</span><span class="f_Textestd">; cette
        valeur servira de clé de recherche du type de marquage, par
        correspondance avec le contenu du champ </span><span class="f_Textestd"
        style="font-weight: bold;">Catégorie</span><span
        class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">Exemple de formule système</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim35.jpg" width="360" height="173" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">2.</span></td>
              <td><span class="f_Textestd">Dans le paramétrage proprement dit,
                vous pourrez modifier les variables de question définies au
                niveau du marquage, avec les valeurs qui vous conviennent.
                Notez que toutes les variables de marquage sont considérées
                comme des variables globales, qu</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">il
                s</span><span class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">agisse des variables de question aussi bien
                que des variables de réponse au format sélection.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">Exemple de création des questions (noms de
        variables sans « _ ») </span></p>

        <p style="margin: 8px 0px 0px 24px;"><img src="img/clip0031.jpg"
        width="820" height="387" border="0" alt="clip0031"></p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-style: italic;">Exemple d</span><span class="f_Textestd"
        style="font-style: italic;">&lsquo;</span><span class="f_Textestd"
        style="font-style: italic;">utilisation des variables dans une
        quincaillerie (mêmes noms de variables mais avec  « _ »)</span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/clip0032.jpg" width="584" height="216" border="0"
        alt="clip0032"></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">La modification des valeurs définies par défaut doit
        impérativement se faire dans les différents onglets ou nous pouvons
        paramétrer des consommations (article, profil, …). </span><br>
        <span class="f_Textestd">Nous excluons donc :</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">le sous-onglet </span><span
                class="f_Textestd"
                style="font-style: italic;">Formule</span><span
                class="f_Textestd">de l</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">onglet </span><span class="f_Textestd"
                style="font-style: italic;">Fournisseur </span><span
                class="f_Textestd">de la fiche vitrage. </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">l</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">onglet </span><span class="f_Textestd"
                style="font-style: italic;">Arrondi vitrage </span><span
                class="f_Textestd">de la fiche Fournisseur</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">les formules de questions</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">les filtres</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">les formules de site, utilisateur,
                système et spécifique client</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Une seule exception : il est autorisé de modifier
        les paramètres via la formule de remise client.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p
                class="p_Textestd" style="margin: 0px 0px 0px 11px;"><span
                class="f_Textestd"
                style="font-weight: bold; text-decoration: underline;">Note:</span></p>

                <p class="p_Textestd" style="margin: 0px 0px 0px 11px;"><span
                class="f_Textestd">Pour récupérer le coefficient thermique Uw
                du châssis, il faut avoir créé un nom de variable dans la page </span><span class="f_Textestd"
                style="font-style: italic;">Description</span><span
                class="f_Textestd"> de l’étiquette CE, comme vu précédemment.</span></p>

                <p class="p_Textestd" style="margin: 0px 0px 0px 11px;"><span
                class="f_Textestd">Une question portant ce nom de variable
                devra ensuite être créée dans la liste des options, au format
                numérique (il est souhaitable de renseigner une unité, ainsi
                qu’une valeur par défaut à zéro pour cette option).</span></p>

                <p class="p_Textestd" style="margin: 0px 0px 0px 11px;"><span
                class="f_Textestd">Si la variable n’est pas réaffectée
                manuellement par l’utilisateur au fil des calculs, elle
                récupérera la valeur thermique du châssis telle que calculée
                par WinPro, si vous disposez du module thermique. </span></p>

                <p class="p_Textestd" style="margin: 0px 0px 0px 11px;"><span
                class="f_Textestd">Si la variable est réaffectée manuellement
                dans les formules (voir capture ci-dessus), c’est cette valeur
                qui sera récupérée pour cette option. </span></p>

                <p class="p_Textestd" style="margin: 0px 0px 0px 11px;"><span
                class="f_Textestd">Ceci pour permettre de calculer une valeur
                thermique pour le châssis manuellement, sans avoir la mise en
                place finale du calcul thermique.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">A la fin du calcul, c'est-à-dire après l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">exécution de
        toutes les formules liées au calcul de la menuiserie, les variables de
        question sont récupérées, et le jeu de questions/réponses finales est
        stockée dans la table DETAIL2, prêt à être imprimé. WinPro pourra ainsi
        procéder à l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">impression des étiquettes lors de
        l'optimisation.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim36.jpg" width="503" height="420" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Vous pourrez ainsi, via WPReport ou tout autre
        générateur de rapport, exploiter les informations propres au marquage.
        </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">A noter que le document standard pour ces étiquettes
        est inclus dans le menu </span><span
        class="f_Textestd">&lsquo;</span><span class="f_Textestd">Importation
        standard</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd"> de WPR (via le bouton du même nom), sous le nom
        « Etiquette marquage CE ».</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><img
        src="img/embim37.jpg" width="439" height="244" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Comment" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">De même, lors de l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">exportation
        de la commande dans les tables d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">export (à
        l'impression d'un document client avec export de données par exemple),
        de nouveaux champs dans la table </span><span class="f_Textestd"
        style="font-style: italic;">FEN</span><span
        class="f_Textestd"> contiendront toutes les mentions de l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">étiquette
        </span><img src="img/embim32.jpg" width="20" height="16" vspace="1"
        hspace="1" border="0" alt=""><span class="f_Textestd">, à savoir aussi
        bien la liste des questions/réponses que les autres mentions, telles
        que l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">adresse, numéro de certification, etc., ceci afin de
        stocker de manière stable les informations telles que définies au
        moment de l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">enregistrement de la commande.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cette nouvelle
        fonctionnalité nous a amené à modifier légèrement l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">ordre de
        calcul initial des variables globales dans WinPro. L</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">ordre de
        calcul initial était le suivant :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-style: italic;">1. Variables générales
        (date, situation maçonnerie, ...)</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-style: italic;">2. Formules de
        site</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-style: italic;">3. Formules
        utilisateur</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-style: italic;">4. Formules
        système</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-style: italic;">5. Variables de
        description de configuration de la fenêtre</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-style: italic;">6. Formule spécifique
        client</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Le nouvel ordre de
        calcul est maintenant :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-style: italic;">1. Variables générales
        (date, situation maçonnerie, ...)</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-style: italic;">2. Variables de
        description de configuration de la fenêtre</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-style: italic;">3. Formules de
        site</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-style: italic;">4. Formules
        utilisateur</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-style: italic;">5. Formules
        système</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-style: italic;">6. Formule spécifique
        client</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">7. Variables du marquage </span><img
        src="img/embim32.jpg" width="20" height="16" vspace="1" hspace="1"
        border="0" alt=""></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">La variable </span><span
        class="f_Variables">_MarquageCE</span><span class="f_Textestd"> doit
        être définie avant l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">étape 7, c'est-à-dire en fait dans l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">une des
        formules site, utilisateur, système ou client. Il était donc utile,
        dans les formules citées, de disposer des variables de configuration de
        la fenêtre, d'où leur remontée en deuxième position dans l'ordre de
        calcul.</span></p>

        <p style="margin: 16px 0px 4px 0px;"><span class="f_Heading1">Mise en
        place</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Plusieurs nouvelles
        clefs dans la table </span><span class="f_Textestd"
        style="font-style: italic;">settings</span><span
        class="f_Textestd"> permettent de contrôler le format des étiquettes et
        le comportement du module. En voici la liste :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Comment" style="font-weight: bold;">[Label CE]                
               ; </span><span class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">format des
        étiquettes</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Winproini">Height</span><span class="f_Textestd">             
                 </span><span class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">= hauteur de
        l</span><span class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">&rsquo;</span><span
        class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">étiquette, en mm
        (type entier I)</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Winproini">Width</span>                        <span
        class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">= largeur de
        l</span><span class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">&rsquo;</span><span
        class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">étiquette, en mm
        (type entier I)</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Winproini">Top Margin        </span>        <span
        class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">= marge
        supérieure, en mm (type entier I)</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Winproini">Bottom Margin</span>                <span
        class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">= marge
        inférieure, en mm (type entier I)</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Winproini">Left Margin        </span>        <span
        class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">= marge gauche, en
        mm (type entier I)</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Winproini">Right Margin</span>                <span
        class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">= marge droite, en
        mm (type entier I)</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Comment" style="font-weight: bold;">[Optimisation]            
           </span><span class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">; paramètres
        généraux liés à l</span><span class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">&rsquo;</span><span
        class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">optimisation</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Winproini">Label CE</span>                <span
        class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">= 1 pour cocher
        par défaut la case d</span><span class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">&rsquo;</span><span
        class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">impression des
        étiquettes CE dans l</span><span class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">&rsquo;</span><span
        class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">optimisation, zéro
        pour la décocher par défaut (type entier I)</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Comment" style="font-weight: bold;">[Export Groupe]          
             </span><span class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">; paramètres de
        lancements groupés à l</span><span class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">&rsquo;</span><span
        class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">optimisation</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 48px;"><span
        class="f_Winproini">Label CE                </span><span
        class="f_Winproini"
        style="font-size: 12pt; font-family: 'Courier New';">=</span><span
        class="f_Textestd"
        style="font-size: 12pt; font-family: 'Courier New';">1 pour permettre
        de lancer l'impression des étiquettes automatiquement après
        l'optimisation sans passer par la fenêtre de sélection des documents,
        zéro sinon (valeur par défaut, clef de type entier I)</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Pour toutes ces clefs,
        il est important de respecter la syntaxe ainsi que les majuscules et
        minuscules, sans quoi les impressions ne seront pas lancées.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Nous avons également
        prévu une procédure pour appliquer le marquage sur les commandes
        saisies avant la mise en place du module. Pour calculer ce marquage, il
        faut lancer WinPro dans un mode particulier, par ligne de
        commande :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Comment">               <span class="f_Comment"
        style="font-size: 12pt; font-weight: bold;">WinPro /ce
        aaaammjj</span></p>

        <p class="p_Comment"><span class="f_Textestd"> </span><br>
        <span class="f_Textestd">Le deuxième paramètre </span><span
        class="f_Textestd" style="font-weight: bold;">aaaammjj </span><span
        class="f_Textestd">représente la date de saisie de commande à partir de
        laquelle le marquage doit être calculé; il faut donner la date sous la
        forme année mois jour, sans séparateur, et avec le siècle (p.ex.
        20090901 pour le 1er septembre 2009). Ce paramètre est optionnel, si
        vous ne le précisez pas, toutes les commandes seront
        traitées.</span><br>
        <span class="f_Textestd"> </span><br>
        <span class="f_Textestd">Un fichier 'logCE.txt' est également créé, qui
        contient, pour chaque ligne de commande, le numéro de commande, le
        numéro de fenêtre, et le marquage CE généré. Cela permet de vérifier
        rapidement le résultat!</span></p>

        <p style="margin: 4px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>

        <p style="margin: 8px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>

        <p style="margin: 4px 0px 0px 0px;"><span
        style="font-size: 11pt; font-family: 'Times New Roman';"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
