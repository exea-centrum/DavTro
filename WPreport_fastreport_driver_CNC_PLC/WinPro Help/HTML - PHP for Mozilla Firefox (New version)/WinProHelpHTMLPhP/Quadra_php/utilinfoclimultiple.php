<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Generate multiple INFOCLI sets","Génération multiple de disquettes INFOCLI"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utilinfoclimultiple.php"; }
else { parent.quicksync('a9.26'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Génération multiple de disquettes INFOCLI</title>
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
        href="utilinfocli.php">Previous</a>  <a
        href="utilwinprodinternet.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This utility is designed to create customer information for WinPro/D for multiple resellers at the same
	  time. Then the usage is similar to the previous feature, but will allow to generate and update customer files by batch,
	  without running a dialog once for each customer/reseller.</p>

        <p>Refer to the <a href="faq7.php">FAQ</a> chapter for more details about winPro/D installation.</p>

        <p> </p>

        <p>This tool is reached through menu <span style="font-weight: bold;">Tools | Generate multiple INFOCLI sets</span>.</p>

        <p> </p>

        <p>You must have module <span style="font-weight: bold;">INF
        </span><span class="f_Heading1">Generate multiple INFOCLI sets</span> to be able to use this feature.</p>

        <p> </p>

        <p>The tool is not version 7.2 compatible as mentionned into <a href="8_0_1_x.php">release note version 8.01</a>, and is
		not used with a <a href="utilwinprodinternet.php">WinPro/D Internet</a> version which has its own creation/update procedure
		for reseller customers.</p>

        <p> </p>

        <p style="text-align: center; margin: 0px 0px 8px 0px;"><img
        src="img/clip0414eng.jpg" width="793" height="440" border="0"
        alt="clip0414eng"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Access code</span>: WinPro administrative password, you may ask it to 
			  Quadrature company in case of need.</td>
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
              <td><span style="font-weight: bold;">Destination</span>:
                Default target path where customer information files for WinPro/D will be stored.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="389"
                style="width: 389px; border: solid 1px #000000;"><p><span
                style="font-weight: bold; text-decoration: underline;">Note:</span></p>

                <p>The target directory do not need to be existing.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p style="margin: 0px 0px 0px 13px;">To help you to choose a correct directory labelling, the feature may propose a list 
		of keywords that will be rerplaced later by data.</p>

        <p style="margin: 0px 0px 0px 13px;"><span
        style="text-decoration: underline;">For instance</span>: when typing the path « <span
        style="font-weight: bold;"> c:\infocli\#CODE#</span> », Infocli will replace this path with « <span
        style="font-weight: bold;">c:\infocli\</span> » followed by the reseller code. Here is a list of available keywords.</p>

        <p style="margin: 0px 0px 0px 13px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td colspan="2" valign="top" bgcolor="#ffff99"
              style="background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 16pt; font-family: 'Times New Roman';">List of reserved keyword</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="125"
              style="width: 125px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman'; color: #003300;">#coderep#</span></p>
              </td>
              <td valign="top" width="279"
              style="width: 279px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 6px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Representative code</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="125"
              style="width: 125px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman'; color: #003300;">#namerep#</span></p>
              </td>
              <td valign="top" width="279"
              style="width: 279px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 6px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">representative name</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="125"
              style="width: 125px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman'; color: #003300;">#code#</span></p>
              </td>
              <td valign="top" width="279"
              style="width: 279px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 6px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Reseller code</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="125"
              style="width: 125px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman'; color: #003300;">#name#</span></p>
              </td>
              <td valign="top" width="279"
              style="width: 279px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 6px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Reseller name</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="125"
              style="width: 125px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman'; color: #003300;">#zip#</span></p>
              </td>
              <td valign="top" width="279"
              style="width: 279px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 6px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Reseller postal code</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="125"
              style="width: 125px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman'; color: #003300;">#city#</span></p>
              </td>
              <td valign="top" width="279"
              style="width: 279px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 6px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Reseller city name</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="125"
              style="width: 125px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman'; color: #003300;">#country#</span></p>
              </td>
              <td valign="top" width="279"
              style="width: 279px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 6px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Reseller country</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="125"
              style="width: 125px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman'; color: #003300;">#date#</span></p>
              </td>
              <td valign="top" width="279"
              style="width: 279px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 6px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Validity date. This date will be written using format : </span><span
                style="font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold;">Year_Month_Day</span></p>
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
              <td><span style="font-weight: bold;">Price list</span>: Select into the combo the coefficient code applied by the
			  fabricator to the reseller, when the reseller will buy window to the fabricator (and not the markup of the reseller 
			  to the final customer). It is a default code applied by default to all selected customers.</td>
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
              <td><span style="font-weight: bold;">Current price computations</span>: When checked, WinPro will compute selling
			  price for the reseller (and then cost price for the reseller) based onto current cost price instead of list cost
			  price. The order form from reseller to fabricator will then be valued with current cost prices. This is applied to
			  all selected customers/resellers.</td>
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
              <td><span style="font-weight: bold;">Round up by 10cm</span>:
                When checked, WinPro will round up dimensions of windows to steps of 10cm upper dimensions before computing the
				selling price for the customer/reseller. This is applied to all selected customers.</td>
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
              <td><span style="font-weight: bold;">Discount per line on customer orders</span>: When checked,
                WinPro compute the window selling price to reseller using discount per window instead of an overall discount set.
                Applied to all selected customers/resellers.</td>
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
              <td><span style="font-weight: bold;">Hidden discount</span>:
                When checked, WinPro will compute the window selling price with hidden discount. The order form from the reseller
				to the fabricator will be computed including discounts but those discounts won't be detailled, the document is
				printed with net prices.</td>
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
              <td><span style="font-weight: bold;">Valid until</span>: Expiration date of WinPro/D version. Above this date, the
			  reseller won't be able to run the program anymore, an error message will be displayed and the program will shut down.
			  Applied to all selected customers.</td>
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
              <td><span style="font-weight: bold;">Filter</span></td>
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
              <td><span style="font-weight: bold;">From ... to ...</span>:
                Set here into both fields the validity date fork of WinPro/D reseller that should be updated. The below reseller/customer list will be filtered with this values. You may also use button <img src="img/clip0783eng.jpg"
                width="58" height="19" border="0" alt="clip0783eng"> after setting the filters.</td>
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
              <td><span style="font-weight: bold;">Code</span>: This table list the customer codes from WinPro. You may click onto
			  the column to sort the list of codes.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="margin: 0px 0px 0px 36px;"><span class="f_ImageCaption">From <a href="8_1_0_x.php">version 8.1.0.059</a> 
		and later, customer codes are displayed into this dialog only when the field Number of WinPro/D copies is set with a non
		null value, into the <span class="f_ImageCaption">Commercial tab</span> of a customer record.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p style="margin: 0px 0px 0px 37px;"><img src="img/embim2eng.jpg" width="215"
        height="106" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="margin: 0px 0px 0px 37px;"><span
        class="f_ImageCaption"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Name</span>: This column is for customer name, you may click on it to sort 
			  the list by name if required.</td>
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
              <td><span style="font-weight: bold;">Date</span>: Validity date for WinPro/D version, for this reseller. When nothing
			  is set here, the default validity datye defined previously is used.</td>
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
              <td><span style="font-weight: bold;">Prev. pr. list</span>: Previous price list code assigned to this reseller.</td>
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
              <td><span style="font-weight: bold;">New pr. list</span>:
                New price list code to be assigned to this reseller line, when different from the default code defined above.</td>
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
              <td><span style="font-weight: bold;">Destination</span>:
                Target path for generated files for this reseller line, when different from the default path defined above.</td>
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
              <td><img src="img/clip0781.gif" width="39" height="17" border="0"
                alt="clip0781">: When checked, files are generated for this reseller line when button 
                <img src="img/clip0782eng.jpg" width="53" height="16" border="0"
                alt="clip0782eng"> is used, otherwise the tool won't create any file for this line.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="text-align: center;"> </p>
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
      <td align="left"><p>Ce menu vous permet de générer les informations
        client pour WinPro/D pour plusieurs utilisateurs à la fois. Cet outil
        fonctionne donc sur un principe similaire au menu précédent, mais vous
        permettra de générer et de mettre à jour les informations client pour
        WinPro/D de manière groupée, sans relancer le dialogue pour chaque code
        client/revendeur.</p>

        <p>Reportez vous à la <a href="faq7.php">FAQ</a> pour plus de détails
        sur la mise en place de WinPro/D.</p>

        <p> </p>

        <p>Cet outil est accessible via <span
        style="font-weight: bold;">Utilitaires | </span><span
        class="f_Heading1">Génération multiple de disquettes INFOCLI</span>.</p>

        <p> </p>

        <p>Vous devez posséder le module <span style="font-weight: bold;">INF
        </span><span class="f_Heading1">Génération multiple de disquettes
        INFOCLI </span>pour accéder à cette fonction.</p>

        <p> </p>

        <p>L'utilitaire n'est pas compatible avec les versions 7.2 de WinPro
        comme le souligne la <a href="8_0_1_x.php">note de version 8.01</a>, et
        n'est pas utile si vous utilisez la version <a
        href="utilwinprodinternet.php">WinPro/D Internet</a> qui possède sa
        propre procédure de création/mise à jour pour les clients
        revendeurs..</p>

        <p> </p>

        <p style="text-align: center; margin: 0px 0px 8px 0px;"><img
        src="img/clip0414fra.jpg" width="752" height="454" border="0"
        alt="clip0414fra"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Code d'accès</span>: Mot de
                passe d'administration de WinPro. Demandez ce mot de passe à
                votre administrateur WinPro, ou bien à la société
              Quadrature.</td>
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
              <td><span style="font-weight: bold;">Destination</span>:
                Renseignez ici un chemin de destination par défaut pour vos
                fichiers d'informations client pour WinPro/D. </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="389"
                style="width: 389px; border: solid 1px #000000;"><p><span
                style="font-weight: bold; text-decoration: underline;">Remarque:</span></p>

                <p>Le répertoire ne doit pas forcément être existant.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p style="margin: 0px 0px 0px 13px;">Pour vous aider dans le choix
        d&rsquo;un nom de répertoire, le module vous propose différents mots
        clefs qui seront remplacés plus tard par des données.</p>

        <p style="margin: 0px 0px 0px 13px;"><span
        style="text-decoration: underline;">Par exemple</span>: si vous écrivez
        le chemin «<span
        style="font-weight: bold;"> c:\infocli\#CODE#</span> », Infocli
        remplacera ce chemin par « <span
        style="font-weight: bold;">c:\infocli\</span> » suivi du code du
        revendeur. Voici une liste des mots clefs proposés.</p>

        <p style="margin: 0px 0px 0px 13px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td colspan="2" valign="top" bgcolor="#ffff99"
              style="background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 16pt; font-family: 'Times New Roman';">Liste
                des mots réservés</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="125"
              style="width: 125px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman'; color: #003300;">#coderep#</span></p>
              </td>
              <td valign="top" width="279"
              style="width: 279px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 6px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Code
                du représentant</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="125"
              style="width: 125px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman'; color: #003300;">#namerep#</span></p>
              </td>
              <td valign="top" width="279"
              style="width: 279px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 6px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Nom du
                représentant</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="125"
              style="width: 125px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman'; color: #003300;">#code#</span></p>
              </td>
              <td valign="top" width="279"
              style="width: 279px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 6px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Code
                du revendeur</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="125"
              style="width: 125px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman'; color: #003300;">#name#</span></p>
              </td>
              <td valign="top" width="279"
              style="width: 279px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 6px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Son
                nom</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="125"
              style="width: 125px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman'; color: #003300;">#zip#</span></p>
              </td>
              <td valign="top" width="279"
              style="width: 279px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 6px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Code
                postal</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="125"
              style="width: 125px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman'; color: #003300;">#city#</span></p>
              </td>
              <td valign="top" width="279"
              style="width: 279px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 6px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Localité</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="125"
              style="width: 125px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman'; color: #003300;">#country#</span></p>
              </td>
              <td valign="top" width="279"
              style="width: 279px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 6px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Pays</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="125"
              style="width: 125px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 10px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman'; color: #003300;">#date#</span></p>
              </td>
              <td valign="top" width="279"
              style="width: 279px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 6px;"><span
                style="font-size: 12pt; font-family: 'Times New Roman';">Date
                de validité. Cette date sera écrite au format : </span><span
                style="font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold;">Année_Mois_Jour</span></p>
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
              <td><span style="font-weight: bold;">Tarif</span>: Sélectionnez
                dans ce combo le code tarif qui sera appliqué par le fabricant
                au revendeur, lorsque celui ci achètera des menuiseries au
                fabricant (et non pas la marge prise par le revendeur sur le
                client final). Il s'agit d'un code valable par défaut pour tous
                les codes client sélectionnés.</td>
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
              <td><span style="font-weight: bold;">Calculs en prix
                courant</span>: Lorsque cette case est cochée, WinPro calculera
                le prix de vente du châssis au revendeur (et donc le prix de
                revient du revendeur) sur base des prix courant au lieu des
                prix tarif. Le bon de commande au fabricant émis par le
                revendeur sera évalué en prix courant. Paramètre valable pour
                tous les clients sélectionnés.</td>
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
              <td><span style="font-weight: bold;">Arrondir par 10cm</span>:
                Lorsque cette case est cochée, WinPro arrondira les dimensions
                du châssis aux dimensions supérieures par paliers de 10cm,
                avant de calculer le prix de vente au client/revendeur.
                Paramètre valable pour tous les clients sélectionnés.</td>
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
              <td><span style="font-weight: bold;">Remise par repère sur
                commande fournisseur</span>: Lorsque cette case est cochée,
                WinPro calculera le prix de vente du châssis au revendeur avec
                des remises par repères plutôt que globalement à la commande.
                Paramètre valable pour tous les clients sélectionnés.</td>
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
              <td><span style="font-weight: bold;">Remise déduite</span>:
                Lorsque cette case est cochée, WinPro calculera le prix de
                vente du châssis au revendeur avec des remises masquées. Le bon
                de commande au fabricant émis par le revendeur sera évalué avec
                les remises mais elles ne seront pas détaillées, le document
                sera exprimé avec des prix nets.</td>
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
              <td><span style="font-weight: bold;">Date limite</span>: Date
                d'expiration de la version de WinPro/D. Au delà de cette date,
                le revendeur ne pourra plus lancer son programme, un message
                d'erreur apparaîtra et le logiciel fermera. Paramètre valable
                pour tous les clients sélectionnés.</td>
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
              <td><span style="font-weight: bold;">Filtre</span></td>
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
              <td><span style="font-weight: bold;">De ... à ...</span>:
                Renseignez dans ces deux champs l'échelle de date de validité
                des clients WinPro/D que vous souhaitez mettre à jour. La liste
                des clients WinPro en dessous sera filtrée par ces valeurs.
                Vous pouvez utiliser le bouton <img src="img/clip0783.gif"
                width="67" height="22" border="0" alt="clip0783"> après avoir
                déclaré ces filtres.</td>
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
              <td><span style="font-weight: bold;">Code</span>: Ce tableau
                affiche la liste des clients de WinPro. Cette colonne
                représente le code client, vous pouvez cliquer dessus pour
                trier la liste comme requis.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="margin: 0px 0px 0px 36px;"><span class="f_ImageCaption">A
        partir de la <a href="8_1_0_x.php">version 8.1.0.059</a>, les codes
        clients ne sont affichés que pour les fiches client renseignées avec
        une valeur supérieure à zéro pour le champ “Nombre de copies WinPro/D”,
        dans l</span>&rsquo;<span class="f_ImageCaption">onglet
        Commercial.</span></p>

        <p class="p_Comment"><span class="f_ImageCaption"> </span></p>

        <p style="margin: 0px 0px 0px 37px;"><img src="img/embim2.jpg" width="237"
        height="107" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="margin: 0px 0px 0px 37px;"><span
        class="f_ImageCaption"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Nom</span>: Cette colonne
                représente le nom client, vous pouvez cliquer dessus pour trier
                la liste si besoin.</td>
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
              <td><span style="font-weight: bold;">Date</span>: Cette colonne
                représente la date de validité de la version de WinPro/D pour
                le client revendeur. Si rien n'est renseigné dans ce champ,
                c'est la date de validité par défaut définie ci-dessus qui sera
                prise en compte.</td>
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
              <td><span style="font-weight: bold;">Ancien tarif</span>: Cette
                colonne représente l'ancien code tarif affecté au client.</td>
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
              <td><span style="font-weight: bold;">Nouveau tarif</span>:
                Renseignez dans cette colonne le nouveau code tarif a affecté
                au client, si celui ci est différent du code tarif par défaut
                défini plus haut.</td>
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
              <td><span style="font-weight: bold;">Destination</span>:
                Renseignez ici le chemin de destination des fichiers
                d'informations client pour WinPro/D concernant ce client, si il
                est différent du chemin par défaut défini plus haut.</td>
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
              <td><img src="img/clip0781.gif" width="39" height="17" border="0"
                alt="clip0781">: Lorsque cette case est cochée, les fichiers
                seront générés pour le client lorsque l'on pressera le bouton
                <img src="img/clip0782.gif" width="59" height="23" border="0"
                alt="clip0782">, sinon l'outil ne créera pas de fichier pour ce
                code client.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="text-align: center;"> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
