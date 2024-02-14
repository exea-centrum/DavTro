<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>	
<!DOCTYPE php PUBLIC "-//W3C//DTD php 4.01 Transitional//EN">  
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["8.0.1.x","8.0.1.x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?8_0_1_x.php"; }
else { parent.quicksync('a11.3.4'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>8.0.1.x</title>
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
        href="winprod_internet.php">Previous</a>  <a
        href="8_0_0_x.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p class="p_Comment"><span class="f_Comment"
        style="font-size: 8pt;">* Uncompatible with version 7.2, unless mentionned</span></p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 8pt;"> </span></p>

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
                8.01.073</span></p>
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

        <p><span
        style="font-weight: bold; color: #000000; text-decoration: underline;"> </span></p>

        <p><span class="f_TitreReleaseNote">User rights concerning customers:</span> In the interface of the Customer record, the button allowing to toggle a customer as
		prospect is now disabled for users without the access right for « Customer ».</p>

        <p> </p>

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
                8.0.1.x</span></p>
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

        <p> </p>

        <p><span class="f_TitreReleaseNote">Optimization :</span> In order to grant a correct management of wastes storage, WinPro must be sure that a single optimization
		operation is processed at once. To master this conflict, WinPro create and lock a file called « lock.dbf » before running the optimization process. This also grants the
		release of this lock by the operating system in case of connexion lost between WinPro and the network, for instance.
		The same mechanism is kept as is into version 8. Under a MySQL database, this involves a constraint with WinPro's deployment. Indeed, users of WinPro MySQL version do
		not need anymore an access to a common shared directory; it will even be the case when connection to the database is done through the internet. At the opposite, users
		with rights granting access to the optimization process should, them, have such a common program directory. The lock file mentioned will therefore be created into such
		a directory. <br>
        Anyway, if the transaction system related to InnoDB format is used, this system will grant by itself the uniqueness of optimization occurrences, which will then raise
		the constraint of a common directory down.</p>
        <p> </p>

        <p><span class="f_TitreReleaseNote">Wood systems:</span> In order to clarify the wood system set up, we have modified the layout of header pages of set up dialog for
		outer frames, sashes, transoms and peripheral profiles.</p>

        <p>A new value is now available into table <span style="font-style: italic;">Settings</span>, allowing to set the appearance of the profile section displayed within
		those header tabs.</p>

        <p>To set this value, you must add a record into <span style="font-style: italic;">settings</span> table, <span style="font-style: italic;">System</span> 
		section (format integer I), as follow:</p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 12pt; font-family: 'Tahoma'; font-weight: bold;">[System]</span></p>

        <p class="p_Comment"><span class="f_Winproini">Wood              
         </span><span class="f_Comment"
        style="font-size: 12pt; font-family: 'Courier New';">= 0      
         Display of a PVC profile type by default when required, default value</span></p>

        <p class="p_Comment">               <span class="f_Comment"
        style="font-size: 12pt; font-family: 'Courier New';">= 1      
         Display of a wood profile type by default when required</span></p>

        <p class="p_Comment">               <span class="f_Comment"
        style="font-size: 12pt; font-family: 'Courier New';">= 2      
         Display of a wood profile type systematically</span></p>

        <p><span class="f_Winproini"> </span></p>

        <p>Zero is default value, and is set for a profile layout as a PVC type profile into the header tab. In case of a system with box "Wood system" checked, the layout for
		a component such as outer frame, sah, transom or peripheral profile will be a wood type layout.</p>

        <p>If value is 1 (one), default layout is a wood type profile, and the layout will vary as for value zero when Wood system" box is checked or not.</p>

        <p>If value is 2, the layout will always be a wood type profile, whatever the system type is. </p>

        <p> </p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Supplier order for roller shutter:</span><span class="f_Textestd"> A new combo into Roller shutter box file
		allows setting a supplier code for the whole roller shutter. This enables a new checkbox into the Actions tab, the Order supplier roller shutter form. This supplier
		document will sum up the main information of the design along with its drawing, questions and accessories articles, without valuing.</span> Version 7.2 compliant.</p>

        <p class="p_Textestd"> </p>

        <p style="margin: 8px 0px 0px 24px;"><img src="img/embim73.jpg" width="456"
        height="647" vspace="1" hspace="1" border="0" alt=""></p>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Multiple InfoCli sets generation for WinPro/D (INF module):</span><span
        class="f_Textestd"> The creation of reseller databases of WinPro may appear slow and fastidious in case there are several databases to process at the same time. In
		order to make it easier, a new menu has been added Utilities | Generate multiple InfoCli sets to help the user with this task, but also for update processes of multiple
		resellers at the same time:</span></p>
 
        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Generate InfoCli files with the same options as previously through menu Utilities | Customer information for WinPro/D (same access
			  code, base price coefficient, current price or list price computation, price grids rounding, discount by window, validity date), using button create, but with
			  ability to select multiple reseller into the dialog</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Filter the reseller list regarding validity dates of their versions</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Set a validity date individually by reseller</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Show and modify the price coefficient of each reseller individually</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Customize target directories for generated files by reseller</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Update those same settings for multiple reseller at the same time</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p style="margin: 0px 0px 8px 24px;"><img src="img/clip0414eng.jpg"
        width="793" height="440" border="0" alt="clip0414eng"></p>

        <p class="p_Textestd"><span class="f_Textestd">In order to help you with naming of the destination directories for the multiple files to generate, the module offers a
		list of keyword that may be used into the destination path.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">For instance</span><span
        class="f_Textestd">: when you define such a path «</span><span
        class="f_Textestd"> c:\infocli\#CODE#</span><span
        class="f_Textestd"> », Infocli will replace this path with « </span><span
        class="f_Textestd">c:\infocli\</span><span class="f_Textestd"> » followed by the reseller code. Here is the list of keywords proposed.</span></p>

        <p style="margin: 0px 0px 0px 13px;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table cellspacing="0" cellpadding="2" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td colspan="2" valign="top" bgcolor="#ffff99"
              style="background-color: #ffff99; border: solid 1px #000000;"><p
                style="text-align: center;"><span
                style="font-size: 16pt; font-family: 'Times New Roman';">List of keywords</span></p>
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
                style="font-size: 12pt; font-family: 'Times New Roman';">Code of the representative</span></p>
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
                style="font-size: 12pt; font-family: 'Times New Roman';">Name of the representative</span></p>
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
                style="font-size: 12pt; font-family: 'Times New Roman';">Code of the reseller </span></p>
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
                style="font-size: 12pt; font-family: 'Times New Roman';">Name of the reseller</span></p>
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
                style="font-size: 12pt; font-family: 'Times New Roman';">Postal code for the reseller</span></p>
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
                style="font-size: 12pt; font-family: 'Times New Roman';">Locality of the reseller</span></p>
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
                style="font-size: 12pt; font-family: 'Times New Roman';">Country of the reseller</span></p>
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
                style="font-size: 12pt; font-family: 'Times New Roman';">Validity date. This date is calculated with format : </span><span
                style="font-size: 12pt; font-family: 'Times New Roman'; font-weight: bold;"> Year_Month_Day</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Full bar optimization:</span><span class="f_Textestd"> Previously, WinPro didn't list full bar length cut for an
		optimization onto the optimization documents and labels. A new option now allow a profile to be listed in case the cut length is equal to the bar length, using the
		appropriate checkbox into the optimization tab of the profile set up.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p style="margin: 0px 0px 4px 24px;"><img src="img/clip0416eng.jpg"
        width="387" height="74" border="0" alt="clip0416eng"></p>

        <p style="margin: 0px 0px 4px 24px;"><span
        style="font-size: 12pt;"> </span></p>

        <p style="margin: 0px 0px 8px 0px;"><span
        class="f_TitreReleaseNote">Archiving features for orders and quotations:</span><span style="font-weight: bold;"></span><span
        class="f_Textestd">5 archiving methods are accessible into WinPro through menus from </span><span
        class="f_Textestd" style="font-weight: bold;">Orders | Delivery handling</span>.</p>

        <p style="margin: 0px 0px 8px 0px;"> </p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-weight: bold;">Archive :</span></p>

        <p style="margin: 0px 0px 8px 45px;"><span
        style="font-weight: bold;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">This method only applies to customer orders already invoiced or closed, when </span><span class="f_Textestd"
        style="font-weight: bold;">GP</span><span class="f_Textestd"> module (production management) is enabled into your licence file. Otherwise, any order or quote is
		concerned.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">You may select manually the list of orders into the dialog, or use available filters for input date, range of delivery
		date, encoder code or customer code.</span></p>

        <p style="margin: 0px 0px 8px 0px;"> </p>

        <p style="margin: 0px 0px 8px 24px;"><img src="img/clip0027eng.jpg"
        width="769" height="311" border="0" alt="clip0027eng"></p>

        <p style="text-align: center; margin: 0px 0px 8px 0px;"> </p>

        <p class="p_Textestd"><span class="f_Textestd">Orders are exported into a target directory specified by </span><span
        class="f_Comment"
        style="font-family: 'Tahoma'; font-weight: bold;">[LastPath]</span><span
        class="f_Textestd"> section, </span><span
        class="f_Winproini">Archive</span><span class="f_Textestd"> key into </span><span class="f_Textestd"
        style="font-style: italic;">settings</span><span class="f_Textestd">, table, under filename « Order_Or_Quote_Number.WPA ».</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Concerned tables are </span><span class="f_Textestd"
        style="font-style: italic;">COMMANDE</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">COMMANDE2</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">DETAIL</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">DETAIL2</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">ARTCDE</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">TRAVDORM</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">TRAVOUVR</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">REHDORM</span><span class="f_Textestd">et
        </span><span class="f_Textestd"
        style="font-style: italic;">ACCOUVR</span><span
        class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Exported orders will then be deleted from the database.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">This method requires the user right for "Accounting".</span></p>

        <p style="margin: 0px 0px 8px 0px;"> </p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-weight: bold;">Archive to WinPro archive :</span></p>

        <p style="margin: 0px 0px 8px 45px;"><span
        style="font-weight: bold;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">This method only applies to customer orders already invoiced or closed, when </span><span class="f_Textestd"
        style="font-weight: bold;">GP</span><span class="f_Textestd"> module (production management) is enabled into your licence file. Otherwise, any order or quote is
		concerned.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Those orders or quotations must be set with an invoice date equal or lower than the date specified into the dialog
		.</span></p>

        <p style="margin: 0px 0px 8px 0px;"> </p>

        <p style="margin: 0px 0px 8px 24px;"><img src="img/embim74eng.jpg" width="410"
        height="144" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="margin: 0px 0px 8px 0px;"> </p>

        <p class="p_Textestd"><span class="f_Textestd">Using FoxPro database format, orders are exported into a </span><span class="f_Textestd"
        style="font-style: italic;">data</span><span class="f_Textestd"> target directory specified by </span><span
        class="f_Comment"
        style="font-family: 'Tahoma'; font-weight: bold;">[LastPath]</span><span
        class="f_Textestd">section, </span><span class="f_Winproini">Archive2</span><span class="f_Textestd"> key into </span><span class="f_Textestd"
        style="font-style: italic;">settings</span><span
        class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Using mySQL database format, orders are moved from the current tables toward the target database, as specified by section 
		</span><span class="f_Comment" style="font-family: 'Tahoma'; font-weight: bold;">[Archive DB]</span><span class="f_Textestd">, keys </span><span
        class="f_Winproini">User</span><span class="f_Textestd">, </span><span
        class="f_Winproini">DB</span><span class="f_Textestd">, </span><span
        class="f_Winproini">Host</span><span class="f_Textestd">, </span><span
        class="f_Winproini">Port</span><span class="f_Textestd"> of </span><span class="f_Textestd"
        style="font-style: italic;">settings</span><span
        class="f_Textestd"> table (refer to <a
        href="8_0_3_x.php">release note version 8.03</a>).</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Concerned tables are </span><span class="f_Textestd"
        style="font-style: italic;">COMMANDE</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">COMMANDE2</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">DETAIL</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">DETAIL2</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">ARTCDE</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">TRAVDORM</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">TRAVOUVR</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">REHDORM</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">ACCOUVR</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">CDELOG</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">CDE</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">DET</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">FEN</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">LIN</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">ART</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">VAR</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">VITREHDR</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">VITRECDE</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">VITRECRX</span><span class="f_Textestd"> and 
        </span><span class="f_Textestd"
        style="font-style: italic;">CHECKINGDATES</span><span
        class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Exported orders will then be deleted from the source database.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">This method requires the user right for "Accounting".</span></p>

        <p style="margin: 0px 0px 8px 0px;"> </p>

        <p style="margin: 0px 0px 8px 21px;"><span
        style="font-weight: bold;">Archivage by date :</span></p>

        <p style="margin: 0px 0px 8px 45px;"><span
        style="font-weight: bold;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">This method is only relevant for customer orders already invoiced or closed, with an invoice date lower or equal to the
		date specified into the dialog.</span></p>

        <p style="margin: 0px 0px 8px 0px;"> </p>

        <p style="margin: 0px 0px 8px 24px;"><img src="img/embim74eng.jpg" width="410"
        height="144" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="margin: 0px 0px 8px 0px;"> </p>

        <p class="p_Textestd"><span class="f_Textestd">Orders are exported into a target directory specified by </span><span
        class="f_Textestd"
        style="font-family: 'Tahoma'; font-weight: bold;">[LastPath]</span><span
        class="f_Textestd"> section, </span><span
        class="f_Winproini">Archive</span><span class="f_Textestd">  key into </span><span class="f_Textestd"
        style="font-style: italic;">settings</span><span class="f_Textestd">  table, under filename « Order_Or_Quote_Number.WPA ».</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p style="margin: 0px 0px 8px 0px;">Concerned tables are <span style="font-style: italic;">COMMANDE</span>, <span
        style="font-style: italic;">COMMANDE2</span>, <span
        style="font-style: italic;">DETAIL</span>, <span
        style="font-style: italic;">DETAIL2</span>, <span
        style="font-style: italic;">ARTCDE</span>, <span
        style="font-style: italic;">TRAVDORM</span>, <span
        style="font-style: italic;">TRAVOUVR</span>, <span
        style="font-style: italic;">REHDORM</span> and <span
        style="font-style: italic;">ACCOUVR.</span></p>

        <p style="margin: 0px 0px 8px 0px;"> </p>

        <p style="margin: 0px 0px 8px 0px;">Exported orders will then be deleted from the database.</p>

        <p class="p_Textestd"><span class="f_Textestd">This method requires the user right for "Accounting".</span></p>

        <p style="margin: 0px 0px 8px 0px;"><span
        style="font-weight: bold;"> </span></p>

        <p style="margin: 0px 0px 8px 24px;"><span
        style="font-weight: bold;">Archive orders and quotations :</span></p>

        <p style="margin: 0px 0px 8px 45px;"><span
        style="font-weight: bold;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">This method applies to any order or quote when the user is not limited by the user right "Commercial user", otherwise,
		any order or quote is concerned.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Orders and/or quotations must be set with a creation date between both limit dates set into the on screen dialog. A
		filter by type, order or quote, may also be used, as well as it is possible to manually select the required codes without filtering.</span></p>

        <p style="margin: 0px 0px 8px 0px;"> </p>

        <p style="margin: 0px 0px 8px 24px;"><img src="img/clip0028.zoom82.jpg"
        width="772" height="533" border="0" alt="clip0028"></p>

        <p style="margin: 0px 0px 8px 0px;"> </p>

        <p class="p_Textestd"><span class="f_Textestd">Orders or quotes are exported into a target directory specified by </span><span
        class="f_Comment"
        style="font-family: 'Tahoma'; font-weight: bold;">[LastPath]</span><span
        class="f_Textestd"> section, </span><span
        class="f_Winproini">Archive</span><span class="f_Textestd"> key into </span><span class="f_Textestd"
        style="font-style: italic;">settings</span><span class="f_Textestd"> table, under filename « Order_Or_Quote_Number.WPA ».</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Concerned tables are </span><span class="f_Textestd"
        style="font-style: italic;">COMMANDE</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">COMMANDE2</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">DETAIL</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">DETAIL2</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">ARTCDE</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">TRAVDORM</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">TRAVOUVR</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">REHDORM</span><span class="f_Textestd"> and </span><span class="f_Textestd"
        style="font-style: italic;">ACCOUVR</span><span
        class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Exported orders or quotes will then be deleted from the database.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">This method requires module </span><span class="f_Textestd" style="font-weight: bold;">GP Production 
		Management.</span><span class="f_Textestd">.</span></p>

        <p style="margin: 0px 0px 8px 0px;"><span
        style="font-weight: bold;"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        style="font-weight: bold;">Delete orders and quotations :</span></p>

        <p style="margin: 0px 0px 8px 45px;"><span
        style="font-weight: bold;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">This method applies to any order or quote when the user is not limited by the user right "Commercial user", otherwise,
		any order or quote is concerned.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Orders and/or quotations may be filtered by a date creation range, or by type order or quote, or else selected manually
		into the displayed list.</span></p>

        <p style="margin: 0px 0px 8px 0px;"> </p>

        <p style="margin: 0px 0px 8px 24px;"><img src="img/clip0029eng.jpg"
        width="772" height="535" border="0" alt="clip0029eng"></p>

        <p style="margin: 0px 0px 8px 0px;"> </p>

        <p class="p_Textestd"><span class="f_Textestd">Concerned tables are </span><span class="f_Textestd"
        style="font-style: italic;">COMMANDE</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">COMMANDE2</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">DETAIL</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">DETAIL2</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">ARTCDE</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">TRAVDORM</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">TRAVOUVR</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">REHDORM</span><span class="f_Textestd"> and </span><span class="f_Textestd"
        style="font-style: italic;">ACCOUVR</span><span
        class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Orders or quotation will then be deleted from the database.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">This method requires module </span><span class="f_Textestd" style="font-weight: bold;">GP Production 
		Management</span><span class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; color: #ff0000;">Attention</span><span
        class="f_Textestd" style="color: #ff0000;">, no archive or backup file is generated using this menu, deleted orders and quotations are lost definitively when deleted
		with this feature !</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="color: #ff0000;"> </span></p>
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
                8.01.073</span></p>
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

        <p><span
        style="font-weight: bold; color: #000000; text-decoration: underline;"> </span></p>

        <p><span class="f_TitreReleaseNote">Droits utilisateur client :</span>
        Dans l'interface de la fiche Client, le bouton permettant de transférer
        un client en prospect n'est plus actif pour les utilisateurs ne
        disposant pas du droit <span class="f_Textestd">« </span>Client <span
        class="f_Textestd">»</span>.</p>

        <p> </p>

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
                8.0.1.x</span></p>
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

        <p> </p>

        <p><span class="f_TitreReleaseNote">Optimisation :</span> Pour assurer
        une gestion correcte du stock de chute, WinPro doit impérativement
        s&rsquo;assurer qu&rsquo;au plus une seule opération
        d&rsquo;optimisation a lieu à tout moment. Pour vérifier cette
        contrainte, WinPro 7 génère et verrouille un fichier « lock.opt » avant
        de commencer l&rsquo;optimisation. Ceci garantit en outre que ce
        verrouillage sera libéré par le système d&rsquo;exploitation si par
        exemple la communication entre WinPro et le réseau est perdue.<br>
        En version 8, le même mécanisme est conservé. Sous MySQL, cela implique
        une contrainte de configuration. En effet, les utilisateurs de WinPro
        MySQL ne doivent pas nécessairement avoir accès à un répertoire
        commun ; ce sera d&rsquo;ailleurs bien le cas si la connection est
        établie via Internet. Par contre, les utilisateurs effectuant des
        optimisations devront bien avoir accès à un répertoire programme
        commun. C&rsquo;est dans ce répertoire que le fichier de verrouillage
        sera créé.<br>
        Toutefois, si vous utilisez le système de transactions lié à InnoDB, ce
        système assurera en lui-même l&rsquo;unicité des optimisations, ce qui
        lève la contrainte du répertoire commun.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Systèmes bois :</span> Afin de
        clarifier le paramétrage bois,  nous avons modifié l&rsquo;affichage
        des pages d&rsquo;entête des définitions de dormants, ouvrants,
        traverses et rehausses.</p>

        <p>Vous disposez maintenant d&rsquo;une valeur stockée dans la table
        <span style="font-style: italic;">Settings</span>, qui permet de
        définir l&rsquo;apparence de la section de profil affichée dans ces
        pages d&rsquo;entête.</p>

        <p>Pour définir cette valeur, vous devez ajouter un enregistrement à la
        table <span style="font-style: italic;">settings</span>, dans la
        section <span style="font-style: italic;">System</span> (format entier
        I), comme suit :</p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 12pt; font-family: 'Tahoma'; font-weight: bold;">[System]</span></p>

        <p class="p_Comment"><span class="f_Winproini">Wood              
         </span><span class="f_Comment"
        style="font-size: 12pt; font-family: 'Courier New';">= 0      
         Affichage profil type PVC par défaut lorsque requit, valeur par
        défaut</span></p>

        <p class="p_Comment">               <span class="f_Comment"
        style="font-size: 12pt; font-family: 'Courier New';">= 1      
         Affichage profil type bois par défaut lorsque requit</span></p>

        <p class="p_Comment">               <span class="f_Comment"
        style="font-size: 12pt; font-family: 'Courier New';">= 2      
         Affichage profil type bois systématique</span></p>

        <p><span class="f_Winproini"> </span></p>

        <p>Par défaut, la valeur vaut 0 (zéro). Dans ce cas, l&rsquo;affichage
        par défaut est celui d&rsquo;un profil de type PVC. Si vous affichez
        par contre un composant (dormant, ouvrant, traverse, rehausse)
        appartenant à un système dont la case &lsquo;bois&rsquo; a été cochée,
        c&rsquo;est un profil de type bois qui apparaîtra.</p>

        <p>Si la valeur vaut 1 (un), l&rsquo;affichage par défaut est celui
        d&rsquo;un profil bois, et cet affichage variera de même que pour la
        valeur 0 si vous avez ou non coché la case &lsquo;bois&rsquo; dans le
        système.</p>

        <p>Si la valeur vaut 2 (deux), l&rsquo;affichage sera toujours celui
        d&rsquo;un profil bois, quel que soit le type de système affiché.</p>

        <p> </p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Bon de commande
        fournisseur par volet:</span><span class="f_Textestd"> Un nouveau combo,
        dans la fiche Caisson, vous permet de renseigner un code fournisseur
        pour un volet roulant. Ceci activera dans l'onglet Actions de la
        commande une impression facultative, le Bon de commande fournisseur. Ce
        document, destiné au fournisseur, reprendra les informations de celui
        ci en en-tête, avec le dessin du volet, les questions imprimées et les
        articles déclarés en accessoires, sans valorisation.</span> Compatible
        version 7.2.</p>

        <p class="p_Textestd"> </p>

        <p style="margin: 8px 0px 0px 24px;"><img src="img/embim73.jpg" width="456"
        height="647" vspace="1" hspace="1" border="0" alt=""></p>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Génération
        multiple de disquettes InfoCli pour WinPro/D (module INF):</span><span
        class="f_Textestd"> La création de version devis de WinPro peut s'avérer
        fastidieuse par la méthode classique via le menu Utilitaires |
        Informations client pour module devis, surtout si vous avez beaucoup de
        revendeurs ou de commerciaux. Afin de faciliter les créations
        d'informations pour WinPro/D, un nouveau point de menu vous permet de
        générer ces fichiers pour plusieurs clients à la fois, mais aussi de
        mettre à jour les informations de revendeurs existants. L'outil est
        disponible via le menu Utilitaires | Génération multiple de disquette
        InfoCli. Vous pourrez:</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Générer vos informations clients
                avec les mêmes options que l'outil simple (même code d'accès,
                code tarif de base, calcul en prix tarif ou courant, arrondi de
                grille de prix, remise par repère, date de validité) au moyen
                du bouton Créer, mais pour de multiples revendeurs (clients
                dans WinPro) à la fois </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Filtrer la liste des revendeurs
                existants suivant des critères de date de validité de leur
                version</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Renseigner une date de validité
                individuelle pour chaque revendeur</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Visualiser et modifier le code tarif
                de chaque revendeur indépendamment</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Personnaliser le chemin de
                destination des fichiers générés pour chaque revendeur
                indépendamment.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Mettre à jour ces mêmes informations
                pour plusieurs revendeurs à la fois avec le bouton
                Rafraîchir.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p style="margin: 0px 0px 8px 24px;"><img src="img/clip0414.zoom87.gif"
        width="533" height="398" border="0" alt="clip0414"></p>

        <p class="p_Textestd"><span class="f_Textestd">Pour vous aider dans le
        choix d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">un nom de répertoire de destination pour les
        multiples fichiers qui seront générés, le module vous propose
        différents mots clefs qui seront remplacés plus tard par des
        données.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Par exemple</span><span
        class="f_Textestd">: si vous écrivez le chemin «</span><span
        class="f_Textestd"> c:\infocli\#CODE#</span><span
        class="f_Textestd"> », Infocli remplacera ce chemin par « </span><span
        class="f_Textestd">c:\infocli\</span><span class="f_Textestd"> » suivi
        du code du revendeur. Voici une liste des mots clefs
        proposés.</span></p>

        <p style="margin: 0px 0px 0px 13px;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table cellspacing="0" cellpadding="2" border="0"
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

        <p style="text-align: center;"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Optimisation de
        barre entière:</span><span class="f_Textestd"> Auparavant, si la
        longueur de débit d'un profil donné équivalait à une longueur de barre
        pleine, WinPro ignorait la barre dans les documents d'optimisation
        (étiquettes/listes). Une nouvelle option, dans l'onglet Optimisation de
        la fiche profil, permet d'imprimer la barre sur ces mêmes documents en
        cas de débit correspondant à une longueur de barre.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p style="margin: 0px 0px 4px 24px;"><img src="img/clip0416.gif"
        width="384" height="166" border="0" alt="clip0416"></p>

        <p style="margin: 0px 0px 4px 24px;"><span
        style="font-size: 12pt;"> </span></p>

        <p style="margin: 0px 0px 8px 0px;"><span
        class="f_TitreReleaseNote">Archivage des devis et
        commandes:</span><span style="font-weight: bold;"></span><span
        class="f_Textestd"> 5 méthodes d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">archivage
        sont proposées dans WinPro, accessibles depuis le menu </span><span
        class="f_Textestd" style="font-weight: bold;">Commandes | Gestion des
        livraisons</span></p>

        <p style="margin: 0px 0px 8px 0px;"> </p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-weight: bold;">Archivage par
        filtres :</span></p>

        <p style="margin: 0px 0px 8px 45px;"><span
        style="font-weight: bold;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cette méthode s'applique
        uniquement sur les commandes clients facturées ou clôturées si le
        module </span><span class="f_Textestd"
        style="font-weight: bold;">GP</span><span class="f_Textestd"> (gestion
        de production) est actif dans la licence. Sinon, toutes les commandes
        sont reprises ainsi que les devis.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Vous pouvez sélectionner
        manuellement les commandes dans la liste, ou bien utiliser les filtres
        disponibles sur la date de saisie, une échelle de date de livraison, le
        code de l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">encodeur ou le code client.</span></p>

        <p style="margin: 0px 0px 8px 0px;"> </p>

        <p style="margin: 0px 0px 8px 24px;"><img src="img/clip0027.zoom83.jpg"
        width="631" height="258" border="0" alt="clip0027"></p>

        <p style="text-align: center; margin: 0px 0px 8px 0px;"> </p>

        <p class="p_Textestd"><span class="f_Textestd">Les commandes seront
        exportées dans le dossier spécifié par la section </span><span
        class="f_Comment"
        style="font-family: 'Tahoma'; font-weight: bold;">[LastPath]</span><span
        class="f_Textestd">, clef </span><span
        class="f_Winproini">Archive</span><span class="f_Textestd"> de la table
        </span><span class="f_Textestd"
        style="font-style: italic;">settings</span><span class="f_Textestd">,
        sous le nom de fichier « Numero_De_Commande_ou_Devis.WPA ».</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les tables concernées
        par cet archivage sont </span><span class="f_Textestd"
        style="font-style: italic;">COMMANDE</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">COMMANDE2</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">DETAIL</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">DETAIL2</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">ARTCDE</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">TRAVDORM</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">TRAVOUVR</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">REHDORM</span><span class="f_Textestd"> et
        </span><span class="f_Textestd"
        style="font-style: italic;">ACCOUVR</span><span
        class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les commandes exportées
        seront supprimées de la base de données.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cet archivage nécessite
        le droit utilisateur "Comptabilité".</span></p>

        <p style="margin: 0px 0px 8px 0px;"> </p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="font-weight: bold;">Archivage par
        déplacement :</span></p>

        <p style="margin: 0px 0px 8px 45px;"><span
        style="font-weight: bold;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cette méthode s'applique
        uniquement sur les commandes clients facturées ou clôturées si le
        module </span><span class="f_Textestd"
        style="font-weight: bold;">GP</span><span class="f_Textestd"> (gestion
        de production) est actif dans la licence. Sinon, toutes les commandes
        sont reprises ainsi que les devis.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Celles-ci doivent avoir
        une date de facturation inférieure ou égale à la date précisée à
        l'écran.</span></p>

        <p style="margin: 0px 0px 8px 0px;"> </p>

        <p style="margin: 0px 0px 8px 24px;"><img src="img/embim74.jpg" width="411"
        height="145" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="margin: 0px 0px 8px 0px;"> </p>

        <p class="p_Textestd"><span class="f_Textestd">En FoxPro, Les commandes
        seront déplacées, dans le dossier </span><span class="f_Textestd"
        style="font-style: italic;">data</span><span
        class="f_Textestd"> spécifié par la section </span><span
        class="f_Comment"
        style="font-family: 'Tahoma'; font-weight: bold;">[LastPath]</span><span
        class="f_Textestd">, clef </span><span
        class="f_Winproini">Archive2</span><span class="f_Textestd"> de la table
        </span><span class="f_Textestd"
        style="font-style: italic;">settings</span><span
        class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">En mySQL, elles seront
        déplacées dans la base de données spécifiées dans la section </span><span class="f_Comment"
        style="font-family: 'Tahoma'; font-weight: bold;">[Archive
        DB]</span><span class="f_Textestd">, clefs </span><span
        class="f_Winproini">User</span><span class="f_Textestd">, </span><span
        class="f_Winproini">DB</span><span class="f_Textestd">, </span><span
        class="f_Winproini">Host</span><span class="f_Textestd">, </span><span
        class="f_Winproini">Port</span><span class="f_Textestd"> (voir <a
        href="8_0_3_x.php">note de version 8.03</a>).</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les tables concernées
        par cet archivage sont </span><span class="f_Textestd"
        style="font-style: italic;">COMMANDE</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">COMMANDE2</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">DETAIL</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">DETAIL2</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">ARTCDE</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">TRAVDORM</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">TRAVOUVR</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">REHDORM</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">ACCOUVR</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">CDELOG</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">CDE</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">DET</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">FEN</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">LIN</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">ART</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">VAR</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">VITREHDR</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">VITRECDE</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">VITRECRX</span><span class="f_Textestd"> et </span><span class="f_Textestd"
        style="font-style: italic;">CHECKINGDATES</span><span
        class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les commandes exportées
        seront supprimées de la base de données source.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cet archivage nécessite
        le droit utilisateur "Comptabilité".</span></p>

        <p style="margin: 0px 0px 8px 0px;"> </p>

        <p style="margin: 0px 0px 8px 21px;"><span
        style="font-weight: bold;">Archivage par export :</span></p>

        <p style="margin: 0px 0px 8px 45px;"><span
        style="font-weight: bold;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cette méthode s'applique
        uniquement sur les commandes clients facturées ou clôturées avec une
        date de facturation inférieure ou égale à la date précisée à
        l'écran.</span></p>

        <p style="margin: 0px 0px 8px 0px;"> </p>

        <p style="margin: 0px 0px 8px 24px;"><img src="img/embim74.jpg" width="411"
        height="145" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="margin: 0px 0px 8px 0px;"> </p>

        <p class="p_Textestd"><span class="f_Textestd">Les commandes seront
        exportées dans le dossier spécifié par la section </span><span
        class="f_Textestd"
        style="font-family: 'Tahoma'; font-weight: bold;">[LastPath]</span><span
        class="f_Textestd">, clef </span><span
        class="f_Winproini">Archive</span><span class="f_Textestd"> de la table </span><span class="f_Textestd"
        style="font-style: italic;">settings</span><span class="f_Textestd">, sous le nom de fichier « Numero_De_Commande_ou_Devis.WPA ».</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p style="margin: 0px 0px 8px 0px;">Les tables concernées par cet
        archivage sont <span style="font-style: italic;">COMMANDE</span>, <span
        style="font-style: italic;">COMMANDE2</span>, <span
        style="font-style: italic;">DETAIL</span>, <span
        style="font-style: italic;">DETAIL2</span>, <span
        style="font-style: italic;">ARTCDE</span>, <span
        style="font-style: italic;">TRAVDORM</span>, <span
        style="font-style: italic;">TRAVOUVR</span>, <span
        style="font-style: italic;">REHDORM</span> et <span
        style="font-style: italic;">ACCOUVR.</span></p>

        <p style="margin: 0px 0px 8px 0px;"> </p>

        <p style="margin: 0px 0px 8px 0px;">Les commandes exportées seront
        supprimées de la base de données.</p>

        <p class="p_Textestd"><span class="f_Textestd">Cet archivage nécessite
        le droit utilisateur "Comptabilité".</span></p>

        <p style="margin: 0px 0px 8px 0px;"><span
        style="font-weight: bold;"> </span></p>

        <p style="margin: 0px 0px 8px 24px;"><span
        style="font-weight: bold;">Archivage des devis et commandes :</span></p>

        <p style="margin: 0px 0px 8px 45px;"><span
        style="font-weight: bold;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cette méthode s'applique
        sur toutes les commandes et sur tous les devis si l'utilisateur n'a pas
        le droit "Encodage commercial" activé. Sinon, seuls les devis seront
        concernés.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les commandes et/ou
        devis concernés doivent avoir une date de création comprise entre les 2
        dates limites précisées à l'écran. Il est également possible de filtrer
        par type, commande ou devis. Vous pouvez également sélectionner
        manuellement les commandes dans la liste sans utiliser de
        filtre.</span></p>

        <p style="margin: 0px 0px 8px 0px;"> </p>

        <p style="margin: 0px 0px 8px 24px;"><img src="img/clip0028.zoom82.jpg"
        width="630" height="434" border="0" alt="clip0028"></p>

        <p style="margin: 0px 0px 8px 0px;"> </p>

        <p class="p_Textestd"><span class="f_Textestd">Les commandes ou devis
        seront exportées dans le dossier spécifié par la section </span><span
        class="f_Comment"
        style="font-family: 'Tahoma'; font-weight: bold;">[LastPath]</span><span
        class="f_Textestd">, clef </span><span
        class="f_Winproini">Archive</span><span class="f_Textestd"> de la table
        </span><span class="f_Textestd"
        style="font-style: italic;">settings</span><span class="f_Textestd">,
        sous le nom de fichier « Numero_De_Commande_ou_Devis.WPA ».</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les tables concernées
        par cet archivage sont </span><span class="f_Textestd"
        style="font-style: italic;">COMMANDE</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">COMMANDE2</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">DETAIL</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">DETAIL2</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">ARTCDE</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">TRAVDORM</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">TRAVOUVR</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">REHDORM</span><span class="f_Textestd"> et </span><span class="f_Textestd"
        style="font-style: italic;">ACCOUVR</span><span
        class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les commandes ou devis
        exportés seront supprimés de la base de données.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cet archivage nécessite
        le module </span><span class="f_Textestd" style="font-weight: bold;">GP
        Gestion de Production</span><span class="f_Textestd">.</span></p>

        <p style="margin: 0px 0px 8px 0px;"><span
        style="font-weight: bold;"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        style="font-weight: bold;">Suppression des devis et commandes
        :</span></p>

        <p style="margin: 0px 0px 8px 45px;"><span
        style="font-weight: bold;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cette méthode s'applique
        sur toutes les commandes et sur tous les devis si l'utilisateur n'a pas
        le droit "Encodage commercial" activé. Sinon, seuls les devis seront
        concernés.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les commandes et/ou
        devis concernés peuvent être filtrés par une échelle de date de
        création, par type devis ou commande, ou encore être sélectionnées
        manuellement</span></p>

        <p style="margin: 0px 0px 8px 0px;"> </p>

        <p style="margin: 0px 0px 8px 24px;"><img src="img/clip0029.zoom82.jpg"
        width="634" height="437" border="0" alt="clip0029"></p>

        <p style="margin: 0px 0px 8px 0px;"> </p>

        <p class="p_Textestd"><span class="f_Textestd">Les tables concernées
        par cet archivage sont </span><span class="f_Textestd"
        style="font-style: italic;">COMMANDE</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">COMMANDE2</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">DETAIL</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">DETAIL2</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">ARTCDE</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">TRAVDORM</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">TRAVOUVR</span><span class="f_Textestd">,
        </span><span class="f_Textestd"
        style="font-style: italic;">REHDORM</span><span class="f_Textestd"> et </span><span class="f_Textestd"
        style="font-style: italic;">ACCOUVR</span><span
        class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les commandes ou devis
        seront supprimés de la base de données.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cet archivage nécessite
        le module </span><span class="f_Textestd" style="font-weight: bold;">GP
        Gestion de Production</span><span class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; color: #ff0000;">Attention</span><span
        class="f_Textestd" style="color: #ff0000;">, aucune archive
        n</span><span class="f_Textestd"
        style="color: #ff0000;">&rsquo;</span><span class="f_Textestd"
        style="color: #ff0000;">est conservée pour ce module, les devis ou
        commandes sont, ici, définitivement supprimés sans aucune
        sauvegarde !</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="color: #ff0000;"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
