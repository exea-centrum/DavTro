<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED","DEU"];
var WinProHelpPageName=["Import Price list","Importation des grilles de prix","Importeren van prijslijsten","Importieren von Preisliste"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utilimportgrillesprix.php"; }
else { parent.quicksync('a9.15'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Importation des grilles de prix</title>
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
        href="utilremiseachat.php">Previous</a>  <a
        href="utilmodifierclef.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>The price list import module is suitable for a user to maintain the various price levels into 
	  the database, when computed by price list (articles, glazings, outer frames, etc). To process, Winpro will analyze and 
	  import <spanstyle="font-style: italic;">Excel</span> files containing the price lists.</p>

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
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; text-decoration: underline;">Attention</span><span
                style="text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 10px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>You must obtain module <span style="font-weight: bold;">IMPG</span> <span
                        style="font-weight: bold;">(Price list import)</span> to be able to proceed.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 10px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>The module detailled here only concerns version 8 of the program. The version 7 also has such a module,
					  with minor variants for usage or interface.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <p>The price list import procedure is available under menu 
		<span style="font-weight: bold;">Tools | Price list import</span>.</p>

        <p> </p>

        <p style="text-align: center;"><span
        style="font-size: 8pt; font-style: italic; color: #666699;">picture
        1</span></p>

        <p style="text-align: center;"><img src="img/clip0811eng.jpg"
        width="306" height="444" border="0" alt="clip0811eng"></p>

        <p> </p>

        <p>This menu point will grant access to the first dialog of the import utility (See 
		<span class="f_Legende">picture 2</span>). </p>

        <p> </p>

        <p style="text-align: center;"><span
        style="font-size: 8pt; font-style: italic; color: #666699;">Illustration
        2</span></p>

        <p style="text-align: center;"><img src="img/clip0810eng.jpg"
        width="512" height="232" border="0" alt="clip0810eng"></p>

        <p> </p>

        <p>This dialog displays three choices to the user, that will be detailled further. The user may import a price list manually. He may also set up an INI file and import, the INI file containing a list of updates.</p>

        <p> </p>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="22"><span
                style="font-weight: bold; font-size: 12pt; font-family: 'Arial'; color: #000000;">1.</span></td>
              <td><span class="f_TitreReleaseNote">Manual import mode</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>In a first step, the manual import mode will be detailled.</p>

        <p>Onto welcome screen (See <span class="f_Legende">picture
        2</span>), when the user clicks onto <img src="img/clip0841eng.jpg" width="53" height="22" border="0" alt="clip0841eng"> button, 
		a new dialog is displayed to define a new importation (See <span class="f_Legende">picture 3</span>).</p>

        <p> </p>

        <p class="p_Legende"><span class="f_Legende">picture 3</span></p>

        <p style="text-align: center;"><img src="img/clip0812eng.jpg"
        width="578" height="458" border="0" alt="clip0812eng"></p>

        <p class="p_Heading1" style="margin: 0px 0px 0px 24px;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p>The dialog is composed of a <span style="font-weight: bold;">menu bar</span> for execution
		of given actions, a list of <span style="font-weight: bold;">input fields</span> for the import set up, and an 
		<span style="font-weight: bold;">information area</span> on the bottom of the window.</p>

        <p> </p>

        <p>The dialog contains four buttons.</p>

        <p>The <img src="img/clip0817eng.jpg" width="57" height="17" border="0"
        alt="clip0817eng"> button for price list import.</p>

        <p>The <img src="img/clip0824eng.jpg" width="64" height="21" border="0"
        alt="clip0824eng"> button to ask WinPro to extract an existing price list from the database.</p>

        <p>The <img src="img/clip0822eng.jpg" width="88" height="18" border="0"
        alt="clip0822eng"> button to record changes done to the <span style="font-style: italic;">Excel</span> file, either into 
		the same file or into a new one.</p>

        <p>And the <img src="img/clip0823eng.jpg" width="40" height="19"
        border="0" alt="clip0823eng"> button to return to the welcome screen.</p>

        <p> </p>

        <p>For a better use, it is recommended to respect a determined sequence of usage, depending on the action to be done.</p>

        <p> </p>

        <p>When the user clicks on button  
		<img src="img/clip0824eng.jpg" width="64" height="21" border="0" alt="clip0824eng">,
        he may first select a <span
        style="font-weight: bold;">component type </span>(<span
        style="font-weight: bold;">Article</span>, <span
        style="font-weight: bold;">Outer frame</span>, etc). Then, a <span style="font-weight: bold;">code</span> should be 
		selected, either with typing it into the input field, or with browsing the list of elements available.
        Finally, the user should select a <span style="font-weight: bold;">group</span>. Once those settings defined, 
		the user will be able to click onto the loading button, and WinPro will extract the appropriate price list from the 
		database.</p>

        <p> </p>

        <p>When the user wishes to import a price list from an <span style="font-style: italic;">Excel</span> file using button 
		<img src="img/clip0817eng.jpg" width="57" height="17" border="0" alt="clip0817eng">, the file should be selected first, either
		with typing the name and path of the file into the first field of the dialog, or with browsing the hard disks using the 
		button on the right of the dialog.</p>

        <p>When the user wants to modify an existing <span style="font-style: italic;">Excel</span> file, 
		he should first imperatively save the changes before proceeding an import, using button 
		<img src="img/clip0822eng.jpg" width="88" height="18" border="0" alt="clip0822eng">. Once the file is saved, the dialog is 
		purged for the user to load again the same file or even load another one.</p>

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
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; text-decoration: underline;">Note</span><span
                style="text-decoration: underline;">:</span></p>

                <p style="margin: 0px 0px 0px 10px;">The utility is suitable for linking 
				<span style="font-style: italic;">Excel</span> price lists to WinPro components through importation. I also allows
				the opposite, meaning generate an <span style="font-style: italic;">Excel</span> file from a price list linked to 
				a WinPro component. To do this, load the WinPro component price list with button 
				<img src="img/clip0824eng.jpg" width="64" height="21" border="0" alt="clip0824eng">, and record it using button 
				<img src="img/clip0822eng.jpg" width="88" height="18" border="0" alt="clip0822eng"></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>When an <span style="font-style: italic;">Excel</span> file is opened with this utility, the <span
        style="font-weight: bold;">Line count</span> field is automatically filled. This field contains the number of price line 
		by height.</p>

        <p>Three types of price grid are possible.</p>

        <p>A file with a price grid of two dimensions may be used, containing a line by height (See 
		<span class="f_Legende">picture 4</span>), the first line containing the widths and the first column is for heights.</p>

        <p> </p>

        <p class="p_Legende"><span class="f_Legende">picture 4</span></p>

        <p style="text-align: center;"><img src="img/clip0813eng.jpg"
        width="620" height="259" border="0" alt="clip0813eng"></p>

        <p> </p>

        <p>A file with a price grid with one dimension may also be created, with a line by length (See <span
        class="f_Legende">picture 5</span>). The first line contains a zero value and the first column is for lengths.</p>

        <p> </p>

        <p class="p_Legende"><span class="f_Legende">picture 5</span></p>

        <p style="text-align: center;"><img src="img/clip0814.gif" width="190"
        height="244" border="0" alt="clip0814"></p>

        <p> </p>

        <p>The third grid type is a two dimensions grid containing multiple price lines by height (See <span
        class="f_Legende">picture 6</span>). The first line contains the widths and the first column is for heigths.</p>

        <p> </p>

        <p class="p_Legende"><span class="f_Legende">picture 6</span></p>

        <p style="text-align: center;"><img src="img/clip0815.zoom86.gif"
        width="428" height="231" border="0" alt="clip0815"></p>

        <p> </p>

        <p>A contextual help is available for each field (See <span
        class="f_Legende">picture 3</span>) into the <span style="font-weight: bold;">information area</span>, when the mouse 
		cursor is left onto the field. See below for the detail of each field.</p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-style: italic; font-weight: bold;">Excel</span> 
			  <span style="font-weight: bold;">file</span>: Use the right button to browse the hard drive and select the file to 
			  be imported into WinPro.</td>
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
              <td><span style="font-weight: bold;">Type</span>: Select through this combo the target component where the price 
			  list should be imported. Price lists will be imported into <span style="font-style: italic;">Price list</span> tab 
			  of the various component listed (outer frame, sash frame, ...), or into the supplier tab of an article record.</td>
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
              <td><span style="font-weight: bold;">Code</span>: Code of the component where the price list will be imported,
			  according the component <span style="font-weight: bold;">type</span> previously selected.</td>
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
              <td><span style="font-weight: bold;">Group</span>: This field contains the list of colour groups associated to the
			  component type and code selected. For articles, those groups correspond to the <a href="artfournisseur.php">price 
			  list</a> types (0 = Buying price, 1 = List cost price, 2 = Current cost price, 3 = List selling price). For 
			  others components, those groups are defined within the <span style="font-style: italic;">Price list</span> tab of 
			  the component record. For instance, if the user goes to the <span style="font-style: italic;">
			  <a href="drmtarif.php">Price list</a></span> tab of an outer frame record, he will find a grid with the list of
			  colours. It is possible to assigna group number and a price list to each colour (See <span class="f_Legende">picture 
			  7</span>). Once the user has selected a component type and code within the importation dialog, WinPro will
			  automatically fill the list of groups with the list found into the component record.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Legende"><span class="f_Legende">picture 7</span></p>

        <p style="text-align: center;"><img src="img/clip0826eng.jpg"
        width="466" height="163" border="0" alt="clip0826eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Line to process</span>:
                Corresponds to the line of price that will be used by height.
                For a one or two dimensions price list, the user should set 1 into the field. For the case illustrated with 
				<span class="f_Legende">picture 6</span> (Two dimensions price grid with several lines by height), the user 
				should define which price line to update with. Into the sample, there are 6 lines by height, allowing the user 
				for values from 1 to six into the line count field. WinPro will import the price line according selected line, 
				for each height.</td>
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
              <td><span style="font-weight: bold;">Glazing price line</span>:
                Corresponds to the grid line number used by height to value the glazing only, when box 
                <span style="font-weight: bold;">Glazing included</span> is checked.</td>
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
              <td><span style="font-weight: bold;">Glazing included</span>: This box sets that WinPro shoulkd deduce from the 
			  new price the price of the glazing. To use this option, the file should contain a two dimensions grid with several
			  lines by height (See <span class="f_Legende">picture 6</span>). The user should select a 
			  <span style="font-weight: bold;">Line to process</span> as well as a line for the glazing price, 
			  <span style="font-weight: bold;">Glazing price line</span>. As for the line to process setting, the user will be 
			  able to select a line for glazing price between values 1 to the maximum number of lines by height.</td>
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
              <td><span style="font-weight: bold;">Coefficient</span>: This field sets a multiplying coefficient to apply to the 
			  new price. When importing, WinPro will multiply each line by this, before writing the record into the database.</td>
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
              <td><span style="font-weight: bold;">Minimum height</span>: This field is straight recorded into the component 
			  record.</td>
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
              <td><span style="font-weight: bold;">Minimum width</span>: This field is straight recorded into the component 
			  record.</td>
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
              <td><span style="font-weight: bold;">Margin</span>: This valuie is an extra margin that will be stored straight 
			  into the component record (field <span style="font-weight: bold;">Additional margin</span> from an 
			  <a href="artdescription.php">article</a> record, or field <span style="font-weight: bold;">Extra margin</span> 
			  from an <a href="drmdescription.php">outer frame</a> record for instance).</td>
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
              <td><span style="font-weight: bold;">Price list</span>: This window is a snapshot of the price list in process. All
			  values are modifiable straight from there. Do not forget tu use button 
			  <img src="img/clip0822eng.jpg" width="88" height="18" border="0" alt="clip0822eng"> once modifications are done, and to 
			  <img src="img/clip0824eng.jpg" width="64" height="21" border="0" alt="clip0824eng"> again before running the importation.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>In case of set up error the too; displays a dialog box with the error message, then the concerned fields will 
		be highlighted.</p>

        <p>Concerning the component code, WinPro checks if the user has selected a code or not. When the code is wrong or not found, the process will be run anyway. This importation will have no effect.</p>

        <p>Once the user has fulfilled the whole fields, the <img src="img/clip0817eng.jpg" width="57" height="17" border="0"
        alt="clip0817eng"> button can be used to start the process.</p>

        <p> </p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="22"><span
                style="font-weight: bold; font-size: 12pt; font-family: 'Arial'; color: #000000;">2.</span></td>
              <td><span class="f_TitreReleaseNote">Configuration of ini file importation mode</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Into the welcome screen (See <span class="f_Legende">picture 2</span>), if user clicks onto 
		<img src="img/clip0827eng.jpg" width="56" height="22" border="0" alt="clip0827eng"> button, a new dialog appears for setting up 
		an importation based onto a configuration file (See <span class="f_Legende">picture 8</span>).</p>

        <p> </p>

        <p style="text-align: center;"><span class="f_Legende">picture 8</span></p>

        <p style="text-align: center;"><img src="img/clip0828eng.jpg"
        width="814" height="647" border="0" alt="clip0828eng"></p>

        <p> </p>

        <p>This dialog is similar to the manual import mode dialog and contains the same features. But this dialog also includes 
		a button for opening a configuration INI file <img src="img/clip0829eng.jpg" width="60" height="18" border="0" 
		alt="clip0829eng">, and a button to save changes into an INI file <img src="img/clip0830eng.jpg" width="61" height="19" 
		border="0" alt="clip0830eng">.</p>

        <p>When the user has filled each field from this dialog, he will be able to right click onto the 
		<span style="font-weight: bold;">update list</span>. This will display a context menu (See <span
        class="f_Legende">picture 9</span>) allowing addition or deletion of data from the update list.</p>

        <p> </p>

        <p style="text-align: center;"><span class="f_Legende">picture
        9</span></p>

        <p style="text-align: center;"><img src="img/clip0831eng.jpg"
        width="195" height="191" border="0" alt="clip0831eng"></p>

        <p style="margin: 0px 0px 8px 0px;"><span
        style="font-size: 12pt; font-family: 'Times New Roman';">The contextual menu shows the following features:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><img src="img/clip0833eng.jpg" width="101" height="21" border="0"
                alt="clip0833eng"> to add an update line containing data created into areas from upper side of the dialog.</td>
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
              <td><img src="img/clip0834eng.jpg" width="99" height="20" border="0"
                alt="clip0834eng"> allows to request WinPro for checking if the update list does not or does no more contain
				errors. Indeedwhen a line is added, WinPro check if it doesn't contain any error. If an error occurs, the error
				number is added to the last column of the list, and the line is displayed with a red background. The user will 
				the just have to put the mouse cursor on the line to see the error message displayed i,nto information area, at 
				the bottom of the dialog (See <span class="f_Legende">picture 10</span>).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="text-align: center;"><span class="f_Legende">picture 10</span></p>

        <p style="text-align: center;"><img src="img/clip0835eng.jpg"
        width="942" height="247" border="0" alt="clip0835eng"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><img src="img/clip0837eng.jpg" width="96" height="20" border="0"
                alt="clip0837eng"> will check the boxes from the first column, which is processed when the INI file is saved. 
				<span style="font-weight: bold;">Only records with this box checked are added to the INI file</span>.</td>
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
              <td><img src="img/clip0838eng.jpg" width="97" height="20" border="0"
                alt="clip0838eng"> will uncheck the boxes from the first column, which is processed when the INI file is saved. 
				Only records with this box checked are added to the INI file.</td>
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
              <td><img src="img/clip0839eng.jpg" width="99" height="20" border="0"
                alt="clip0839eng"> will delete selected line from the list (blue background).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>When a line shows an error, this can be fixed straight within the array. All fields except the type column may be
		modified. The list may also be sorted by clicking onto columns.</p>

        <p>The «<span style="font-weight: bold;">To do</span>» column will be considered when the update will be run (Next paragraph
		, <span style="font-style: italic;">Automatic importation mode</span>). <span style="font-weight: bold;">Only records 
		with this box checked are processed during the update</span>. </p>

        <p>Once the user has modified the table, the <img src="img/clip0834eng.jpg" width="99" height="20" border="0" 
		alt="clip0834eng"> button has to be used for WinPro to check if all errors are fixed.</p>

        <p>Don't forget to save changes done onto the configuration file using button 
		<img src="img/clip0830eng.jpg" width="61" height="19" border="0" alt="clip0830eng">.</p>

        <p> </p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="22"><span
                style="font-weight: bold; font-size: 12pt; font-family: 'Arial'; color: #000000;">3.</span></td>
              <td><span class="f_TitreReleaseNote">Automatic importation mode</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Into the welcome screen, the automatic importation mode through an INI file is accessed with button 
		<img src="img/clip0842eng.jpg" width="78" height="19" border="0" alt="clip0842eng"> (See <span class="f_Legende">picture
		11</span>).</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0843eng.jpg"
        width="750" height="308" border="0" alt="clip0843eng"></p>

        <p> </p>

        <p>This dialog allows the user importing an INI file with the updates (See previous paragraph). To do this, the user 
		will first have to open an INI file, either with typing path and file name, or with browsing to the file.</p>

        <p>Once opened, the <span style="font-weight: bold;">update list</span> is filled with the content of the INI file.</p>

        <p>As for INI file creation step, if an error is found for a line, it will be displayed with a red background, and with 
		the error number into the last column. Just put the mouse cursor on the line to see the error message displayed into 
		<span style="font-weight: bold;">information area</span> below. Anyway, it is not possible to make changes from here, 
		the user will have to return to the INI file edit dialog to finalize the changes.</p>

        <p>The <span style="font-weight: bold;">To do</span> column is checked when the user clicks onto <img src="img/clip0817eng.jpg"
		width="57" height="17" border="0" alt="clip0817eng"> button.
        <span style="font-weight: bold;">Only records with this box checked are processed</span>.</p>

        <p>To finalize, the user will just have to click onto the <img src="img/clip0817eng.jpg" width="57" height="17" border="0"
        alt="clip0817eng"> button.</p>

        <p> </p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>

</tbody>
</table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>Le module d'importation des grilles de prix permet, à
        un utilisateur, de mettre à jour les différents prix de sa base de
        données lorsque calculés par grilles (articles, vitrages, dormants,
        etc). Pour ce faire, Winpro analysera des fichiers <span
        style="font-style: italic;">Excel</span> contenant la liste de prix et
        importera celle-ci.</p>

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
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; text-decoration: underline;">Attention</span><span
                style="text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 10px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Pour pouvoir utiliser cette fonctionnalité, il est
                        nécessaire de posséder le module <span
                        style="font-weight: bold;">IMPG</span> <span
                        style="font-weight: bold;">(Importation des grilles de
                        prix)</span>.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 10px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Le module détaillé ici concerne la version 8 du
                        logiciel. La version 7 possède également un module
                        similaire mais sous forme de programme externe, avec
                        des variantes mineures d'utilisation ou
                      d'interface.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <p>L'importation des grilles de prix est accessible à partir du menu
        <span style="font-weight: bold;">Utilitaire | Importation des grilles
        de prix</span>.</p>

        <p> </p>

        <p style="text-align: center;"><span
        style="font-size: 8pt; font-style: italic; color: #666699;">Illustration
        1</span></p>

        <p style="text-align: center;"><img src="img/clip0811.zoom84.gif"
        width="227" height="320" border="0" alt="clip0811"></p>

        <p> </p>

        <p>Ce point de menu donnera accès à la première fenêtre de l'utilitaire
        d'importation (Voir <span class="f_Legende">illustration 2</span>). </p>

        <p> </p>

        <p style="text-align: center;"><span
        style="font-size: 8pt; font-style: italic; color: #666699;">Illustration
        2</span></p>

        <p style="text-align: center;"><img src="img/clip0810.zoom84.gif"
        width="437" height="193" border="0" alt="clip0810"></p>

        <p> </p>

        <p>Cette fenêtre propose à l'utilisateur trois options qui seront
        expliquées en détail par la suite. L'utilisateur a la possibilité
        d'importer manuellement une grille de prix. Il peut également
        configurer un fichier INI et l'importer. Un fichier INI contient une
        liste de mises à jour.</p>

        <p> </p>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="22"><span
                style="font-weight: bold; font-size: 12pt; font-family: 'Arial'; color: #000000;">1.</span></td>
              <td><span class="f_TitreReleaseNote">Importation en mode
                manuel</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Pour commencer, nous allons expliquer comment importer manuellement
        une grille de prix.</p>

        <p>Dans la fenêtre d'accueil (Voir <span class="f_Legende">illustration
        2</span>), si l'utilisateur clique sur le bouton <img
        src="img/clip0841.gif" width="67" height="22" border="0" alt="clip0841">,
        une nouvelle fenêtre s'ouvrira, lui donnant accès à toutes les options
        permettant de définir une importation (Voir <span
        class="f_Legende">illustration 3</span>).</p>

        <p> </p>

        <p class="p_Legende"><span class="f_Legende">Illustration 3</span></p>

        <p style="text-align: center;"><img src="img/clip0812.zoom72.gif"
        width="552" height="397" border="0" alt="clip0812"></p>

        <p class="p_Heading1" style="margin: 0px 0px 0px 24px;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p>La fenêtre est composée d'une <span style="font-weight: bold;">barre
        de menu </span>permettant d'exécuter certaines actions, d'une série de
        <span style="font-weight: bold;">zones de saisie </span>permettant la
        configuration de l'importation, et d'une <span
        style="font-weight: bold;">zone d'information </span>se trouvant en bas
        de la fenêtre.</p>

        <p> </p>

        <p>Le menu contient quatre boutons accessibles dans cette fenêtre. </p>

        <p>Le bouton <img src="img/clip0817.gif" width="84" height="24" border="0"
        alt="clip0817"> permet l'importation de la grille de prix. </p>

        <p>Le bouton <img src="img/clip0824.gif" width="93" height="23" border="0"
        alt="clip0824"> demande à WinPro d'extraire une grille de prix à partir
        de la base de données. </p>

        <p>Le bouton <img src="img/clip0821.gif" width="118" height="24" border="0"
        alt="clip0822"> permet d'enregistrer les modifications apportées à un
        fichier <span style="font-style: italic;">Excel</span>, soit dans le
        même fichier soit dans un fichier différent. </p>

        <p>Et enfin, le bouton <img src="img/clip0823.gif" width="58" height="25"
        border="0" alt="clip0823"> ramène l'utilisateur sur la fenêtre
        d'accueil.</p>

        <p> </p>

        <p>Afin d'utiliser au mieux cette fenêtre, l'utilisateur devra
        respecter un ordre précis dans sa manière de saisir les informations
        suivant l'action qu'il veut faire. </p>

        <p> </p>

        <p>Si l'utilisateur souhaite cliquer sur le bouton <img
        src="img/clip0824.gif" width="93" height="23" border="0" alt="clip0825">,
        il devra tout d'abord sélectionner un <span
        style="font-weight: bold;">type de composant </span>(<span
        style="font-weight: bold;">Articles</span>, <span
        style="font-weight: bold;">Dormant</span>, etc). Ensuite, il devra
        sélectionner un <span style="font-weight: bold;">code</span>, soit en
        le tapant dans la zone de saisie, soit en cliquant sur le bouton à
        droite de la zone de saisie et en sélectionnant un élément de la liste.
        Pour finir, l'utilisateur devra choisir un <span
        style="font-weight: bold;">groupe</span>. Une fois ces trois éléments
        définis, il pourra cliquer sur le bouton de chargement, et WinPro
        pourra extraire la bonne grille de prix de la base de données. </p>

        <p> </p>

        <p>Si l'utilisateur souhaite importer une grille de prix disponible
        dans un fichier <span style="font-style: italic;">Excel </span>par le
        bouton <img src="img/clip0817.gif" width="84" height="24" border="0"
        alt="clip0817">, il devra sélectionner son fichier <span
        style="font-style: italic;">Excel</span>, soit en tapant le chemin
        d'accès directement dans la première zone de saisie de la fenêtre, soit
        en cliquant sur le bouton à droite de la zone et en sélectionnant son
        fichier.</p>

        <p>Lorsque l'utilisateur modifie un fichier <span
        style="font-style: italic;">Excel</span>, il doit obligatoirement
        veiller à sauvegarder ses modifications avant de faire une importation,
        grâce au bouton <img src="img/clip0821.gif" width="118" height="24"
        border="0" alt="clip0821">. Une fois le fichier sauvegardé, l'écran est
        complètement vidé. Ceci afin que l'utilisateur puisse charger son
        fichier ou un autre. </p>

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
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; text-decoration: underline;">Note</span><span
                style="text-decoration: underline;">:</span></p>

                <p style="margin: 0px 0px 0px 10px;">L'outil permet de lier des
                grilles de prix sous <span
                style="font-style: italic;">Excel</span> à des composants de
                WinPro par importation. Il permet également de faire l'inverse,
                à savoir générer un fichier <span
                style="font-style: italic;">Excel</span> à partir d'une grille
                de prix stockée dans un composant WinPro. Pour cela, charger la
                grille de prix d'un composant WinPro <img src="img/clip0824.gif"
                width="93" height="23" border="0" alt="clip0825">, et
                enregistrez la avec le bouton <img src="img/clip0821.gif"
                width="118" height="24" border="0" alt="clip0821">.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>L'ouverture d'un fichier <span
        style="font-style: italic;">Excel</span> avec cet utilitaire a pour
        effet de remplir automatiquement la zone de saisie <span
        style="font-weight: bold;">Nombre de ligne</span>. Cette zone contient
        le nombre de lignes de prix par hauteur. </p>

        <p>Il faut savoir que WinPro autorise trois types de grille <span
        style="font-style: italic;">Excel</span>. </p>

        <p>Vous pouvez créer un fichier contenant une grille de prix à deux
        dimensions contenant une ligne de prix par hauteur (Voir <span
        class="f_Legende">illustration 4</span>), la première ligne contient
        les largeurs et la première colonne contient les hauteurs. </p>

        <p> </p>

        <p class="p_Legende"><span class="f_Legende">Illustration 4</span></p>

        <p style="text-align: center;"><img src="img/clip0813.zoom81.gif"
        width="427" height="207" border="0" alt="clip0813"></p>

        <p> </p>

        <p>Vous pouvez également créer un fichier contenant une grille de prix
        à une dimension contenant une ligne de prix par longueur (Voir <span
        class="f_Legende">illustration 5</span>) La première ligne contient la
        valeur 0 et la première colonne contient les longueurs. </p>

        <p> </p>

        <p class="p_Legende"><span class="f_Legende">Illustration 5</span></p>

        <p style="text-align: center;"><img src="img/clip0814.gif" width="190"
        height="244" border="0" alt="clip0814"></p>

        <p> </p>

        <p>Le troisième type supporté est une grille de prix à deux dimensions
        contenant plusieurs lignes de prix par hauteur (Voir <span
        class="f_Legende">illustration 6</span>). La première ligne contient
        les largeurs et la première colonne  les hauteurs.</p>

        <p> </p>

        <p class="p_Legende"><span class="f_Legende">Illustration 6</span></p>

        <p style="text-align: center;"><img src="img/clip0815.zoom86.gif"
        width="428" height="231" border="0" alt="clip0815"></p>

        <p> </p>

        <p>Une explication de chaque zone de saisie (Voir <span
        class="f_Legende">illustration 3</span>) est affichée dans la <span
        style="font-weight: bold;">zone d'information </span>lorsque
        l'utilisateur survole le champ en question avec le pointeur de la
        souris, ainsi que sous forme d'infos bulles. Voici le détail des champs
        de cette fenêtre.</p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Fichier </span><span
                style="font-style: italic; font-weight: bold;">Excel</span>:Utilisez
                le bouton à droite pour parcourir le disque et sélectionner un
                fichier Excel à importer dans le composant WinPro.</td>
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
              <td><span style="font-weight: bold;">Type</span>: Choisissez dans
                ce combo le composant dans lequel il faut importer la grille de
                prix, parmi la liste de composants proposée. Ces grilles seront
                importées dans onglet <span style="font-style: italic;">Tarif
                </span>des différents composants (dormant, ouvrant, ...), ou
                bien l'onglet fournisseur de la fiche article. </td>
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
              <td><span style="font-weight: bold;">Code</span>: Code du
                composant dans lequel la grille doit être importée, en fonction
                du <span style="font-weight: bold;">type </span>renseigné au
                préalable.</td>
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
              <td><span style="font-weight: bold;">Groupe</span>: Ce champ
                contient la liste des groupes de couleurs associés au type de
                composant et au code sélectionné. Pour un article, ces groupes
                correspondent aux types de <a href="artfournisseur.php">grille
                de prix</a> (0 = Prix d'achat, 1 = Prix de revient tarif, 2 =
                Prix de revient courant, 3 = Prix de vente négoce). Pour les
                autres composants, les groupes sont définis dans l'onglet <span
                style="font-style: italic;">Tarif</span> de la fiche du
                composant. Par exemple, si l'utilisateur va dans l'onglet <span
                style="font-style: italic;"><a
                href="drmtarif.php">Tarif</a></span> de la fiche d'un dormant,
                il pourra trouver un tableau reprenant la liste des couleurs. A
                chaque couleur, il est possible d'associer un numéro de groupe
                et une grille de prix (Voir <span
                class="f_Legende">illustration 7</span>). Une fois que
                l'utilisateur a sélectionné dans la fenêtre d'importation un
                type de composant et un code, WinPro remplit automatiquement la
                liste des groupes avec celle qu'il trouve dans la fiche du
                composant.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Legende"><span class="f_Legende">Illustration 7</span></p>

        <p style="text-align: center;"><img src="img/clip0826.zoom88.gif"
        width="302" height="151" border="0" alt="clip0826"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Ligne à traiter</span>:
                Correspond à la ligne de prix qui sera utilisée par hauteur.
                Pour une grille à une ou deux dimension n'ayant qu'une seule
                ligne par hauteur, l'utilisateur devra indiquer le chiffre 1
                dans la zone. Dans le cas de l'<span
                class="f_Legende">illustration 6</span> (Grille à deux
                dimensions ayant plusieurs lignes de prix par hauteur),
                l'utilisateur devra indiquer le chiffre de la ligne avec
                laquelle il souhaite mettre à jour ses prix. Dans ce cas-ci,
                par exemple, il y a 6 lignes par hauteur. L'utilisateur pourra
                donc indiquer un chiffre entre 1 et 6. A chaque hauteur, WinPro
                prendra la ligne choisie afin d'importer les prix.</td>
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
              <td><span style="font-weight: bold;">Ligne prix vitrage</span>:
                Correspond au numéro de ligne de la grille de prix qui sera
                utilisée par hauteur pour le vitrage seul, lorsque la case
                <span style="font-weight: bold;">Vitrage compris </span>est
                cochée. </td>
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
              <td><span style="font-weight: bold;">Vitrage compris</span>:<span
                style="font-weight: bold;"></span>Cette case à cocher indique à
                WinPro qu'il devra déduire du nouveau prix, le prix du vitrage.
                Pour utiliser cette case, vous devez ouvrir un fichier à deux
                dimensions contenant plusieurs lignes de prix par hauteur (Voir
                <span class="f_Legende">illustration 6</span>). L'utilisateur
                devra choisir une <span style="font-weight: bold;">Ligne a
                traiter </span>ainsi qu'une ligne contenant le prix du vitrage,
                <span style="font-weight: bold;">Ligne prix vitrage</span>.
                Tout comme pour la ligne à traiter, l'utilisateur aura la
                possibilité de choisir une ligne de prix de vitrage comprise
                entre 1 et le nombre maximum de lignes par hauteur.</td>
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
              <td><span style="font-weight: bold;">Coefficient</span>: Ce champ
                permet de définir un coefficient multiplicateur du nouveau
                prix. Au moment de l'importation, WinPro multipliera chaque
                prix de la grille par ce coefficient, avant de l'écrire dans la
                base de données.</td>
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
              <td><span style="font-weight: bold;">Hauteur minimum</span>: Ce
                champ sera enregistré directement dans la fiche du
              composant.</td>
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
              <td><span style="font-weight: bold;">Largeur minimum</span>: Ce
                champ sera enregistré directement dans la fiche du
              composant.</td>
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
              <td><span style="font-weight: bold;">Marge</span>: Cette valeur
                contient un coefficient de marge qui sera directement
                enregistré dans la fiche du composant (champ <span
                style="font-weight: bold;">Marge supplémentaire </span>de la
                fiche <a href="artdescription.php">article</a>, ou champ <span
                style="font-weight: bold;">Coefficient de marge </span>d'un <a
                href="drmdescription.php">dormant</a> par exemple).</td>
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
              <td><span style="font-weight: bold;">Grille tarif</span>: Cette
                fenêtre permet de visualiser la grille de prix en cours de
                traitement. Vous pouvez modifier cette grille de prix, les
                cellules sont éditables. Pensez toutefois à utiliser le bouton
                <img src="img/clip0821.gif" width="118" height="24" border="0"
                alt="clip0821"> une fois les modifications faites, et à <img
                src="img/clip0824.gif" width="93" height="23" border="0"
                alt="clip0825"> à nouveau avant de lancer le traitement.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>En cas d'erreur d'encodage, l'utilitaire affichera une boîte de
        dialogue avec le message d'erreur. Ensuite, la barre de saisie sera
        placée dans la zone posant un problème. </p>

        <p>Concernant le code d'un composant, WinPro vérifie si l'utilisateur a
        sélectionné un code. Si le code ne se trouve pas dans la base de
        données, ou bien s'il est mal écrit, le traitement s'exécutera malgré
        tout. Cette importation n'aura aucun effet et n'influencera pas le
        programme.</p>

        <p>Une fois que l'utilisateur a complètement terminé de remplir les
        différentes zones de saisie, il ne lui reste plus qu'à cliquer sur le
        bouton <img src="img/clip0817.gif" width="84" height="24" border="0"
        alt="clip0817"> pour finir l'opération.</p>

        <p> </p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="22"><span
                style="font-weight: bold; font-size: 12pt; font-family: 'Arial'; color: #000000;">2.</span></td>
              <td><span class="f_TitreReleaseNote">Configuration d'un fichier
                ini</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Heading1" style="margin: 0px 0px 0px 24px;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p>Dans la fenêtre d'accueil (Voir <span class="f_Legende">illustration
        2</span>), si l'utilisateur clique sur le bouton <img
        src="img/clip0827.gif" width="70" height="24" border="0" alt="clip0827">,
        une nouvelle fenêtre s'ouvrira, lui donnant accès à toutes les options
        permettant la configuration d'un fichier d'importation (Voir <span
        class="f_Legende">illustration 8</span>).</p>

        <p> </p>

        <p style="text-align: center;"><span class="f_Legende">Illustration
        8</span></p>

        <p style="text-align: center;"><img src="img/clip0828.zoom67.gif"
        width="577" height="460" border="0" alt="clip0828"></p>

        <p> </p>

        <p>Cette fenêtre est similaire à la fenêtre d'importation en mode
        manuel et contient les mêmes fonctionnalités. Elle contient en plus un
        bouton permettant l'ouverture d'un fichier de configuration INI <img
        src="img/clip0829.gif" width="79" height="23" border="0" alt="clip0829">,
        et un bouton permettant la sauvegarde des modifications dans un fichier
        INI <img src="img/clip0830.gif" width="108" height="25" border="0"
        alt="clip0830">.</p>

        <p>Lorsque l'utilisateur aura rempli les zones de saisie de cette
        fenêtre, il devra cliquer avec le bouton droit de la souris sur la
        <span style="font-weight: bold;">liste des mises à jour</span>. Cette
        action aura pour effet d'afficher un menu contextuel (Voir l'<span
        class="f_Legende">illustration 9</span>) permettant l'ajout ou la
        suppression des données saisies à la liste des mises à jour.</p>

        <p> </p>

        <p style="text-align: center;"><span class="f_Legende">Illustration
        9</span></p>

        <p style="text-align: center;"><img src="img/clip0831.zoom81.gif"
        width="189" height="175" border="0" alt="clip0831"></p>

        <p style="margin: 0px 0px 8px 0px;"><span
        style="font-size: 12pt; font-family: 'Times New Roman';">Le menu
        contextuel contient les options suivantes:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><img src="img/clip0833.gif" width="138" height="20" border="0"
                alt="clip0833"> permet d'ajouter une ligne de mise à jour
                contenant les données saisies dans les zones de la partie haute
                de la fenêtre. </td>
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
              <td><img src="img/clip0834.gif" width="137" height="21" border="0"
                alt="clip0834"> permet à l'utilisateur de demander à WinPro de
                vérifier si la liste de mises à jour ne contient pas ou plus
                d'erreurs. En effet, lorsqu'une ligne est ajoutée, WinPro
                vérifie si elle ne contient pas d'erreur. S'il en trouve une,
                le numéro de l'erreur est ajouté dans la dernière colonne de la
                liste, et la ligne est écrite sur fond rouge. Il suffit à
                l'utilisateur de placer son curseur sur la ligne, de cette
                manière, le message d'erreur sera indiqué dans la zone
                d'information en bas de la fenêtre (Voir <span
                class="f_Legende">illustration 10</span>).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="text-align: center;"><span class="f_Legende">Illustration
        10</span></p>

        <p style="text-align: center;"><img src="img/clip0835.zoom69.gif"
        width="591" height="249" border="0" alt="clip0835"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><img src="img/clip0837.gif" width="139" height="21" border="0"
                alt="clip0837"> permet de cocher les cases se trouvant dans la
                toute première colonne. Cette colonne est prise en compte au
                moment de la sauvegarde du fichier INI. <span
                style="font-weight: bold;">Seuls les enregistrements dont la
                case sera cochée seront ajoutés au fichier INI</span>.</td>
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
              <td><img src="img/clip0838.gif" width="134" height="22" border="0"
                alt="clip0838"> permet de décocher les cases se trouvant dans
                la toute première colonne. Cette colonne est prise en compte au
                moment de la sauvegarde du fichier INI. Seules les
                enregistrements dont la case sera cochée seront ajoutés au
                fichier INI.</td>
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
              <td><img src="img/clip0839.gif" width="133" height="23" border="0"
                alt="clip0839"> permet d'enlever de la liste la ligne qui est
                sélectionnée (écrite sur fond bleu).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Lorsqu'une ligne contient une erreur, il est possible de corriger
        cette erreur directement dans le tableau. Toutes les zones, sauf la
        colonne type, peuvent être modifiées. Vous pouvez également trier la
        liste de mises à jour en cliquant sur les colonnes. </p>

        <p>La colonne «<span style="font-weight: bold;"> A faire </span>» sera
        prise en compte au moment de l'exécution de la mise à jour (Paragraphe
        suivant, <span style="font-style: italic;">Importation en mode
        automatique</span>). <span style="font-weight: bold;">Seuls les
        enregistrements dont cette case est cochée seront traités pendant la
        mise à jour</span>. </p>

        <p>Une fois que l'utilisateur a fait des modifications dans le tableau,
        il doit utiliser le menu <img src="img/clip0834.gif" width="137"
        height="21" border="0" alt="clip0834">, afin que WinPro vérifie si
        toutes les erreurs ont bien été corrigées.</p>

        <p>N'oubliez pas de sauvegarder les modifications sur le fichier de
        configuration avec le bouton <img src="img/clip0830.gif" width="108"
        height="25" border="0" alt="clip0830">.</p>

        <p> </p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="22"><span
                style="font-weight: bold; font-size: 12pt; font-family: 'Arial'; color: #000000;">3.</span></td>
              <td><span class="f_TitreReleaseNote">Importation en mode
                automatique</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Dans la fenêtre d'accueil (Voir <span class="f_Legende">illustration
        2</span>), si l'utilisateur clique sur le bouton <img
        src="img/clip0842.gif" width="90" height="20" border="0" alt="clip0842">,
        une nouvelle fenêtre s'ouvrira, lui donnant accès à l'importation d'un
        fichier INI (Voir <span class="f_Legende">illustration 11</span>).</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0843.zoom76.gif"
        width="577" height="278" border="0" alt="clip0843"></p>

        <p> </p>

        <p>Cette fenêtre permet a l'utilisateur d'importer un fichier INI de
        mises à jour (Voir le paragraphe précédent). Pour ce faire,
        l'utilisateur devra en premier lieu ouvrir un fichier INI. Il pourra
        donc soit taper le chemin d'accès vers ce fichier dans la zone de
        saisie, soit cliquer sur le bouton à droite de la zone de saisie. Cette
        action ouvrira une boîte de dialogue lui permettant de sélectionner son
        fichier.</p>

        <p>Une fois le fichier ouvert, la zone de <span
        style="font-weight: bold;">liste des mises à jour </span>est remplie
        avec le contenu du fichier INI. </p>

        <p>Tout comme pour la création du fichier INI, si une ligne contient
        une erreur, la ligne est écrite sur fond rouge avec le numéro de
        l'erreur dans la dernière colonne. Il suffit de placer le curseur sur
        la ligne posant problème pour voir le message d'erreur s'afficher dans
        la <span style="font-weight: bold;">zone d'information</span> en partie
        basse. Seulement, il n'est pas permis ici de modifier les lignes dans
        cette fenêtre. L'utilisateur devra retourner dans la fenêtre d'édition
        du fichier INI pour effectuer ses changements.</p>

        <p>La colonne <span style="font-weight: bold;">A faire</span> est
        vérifiée au moment où l'utilisateur clique sur le bouton <img
        src="img/clip0817.gif" width="84" height="24" border="0" alt="clip0817">..
        <span style="font-weight: bold;">Seuls les enregistrements dont la case
        est cochée dans cette colonne seront traités</span>.</p>

        <p>Pour finir l'opération, l'utilisateur n'a plus qu'à cliquer sur le
        bouton <img src="img/clip0817.gif" width="84" height="24" border="0"
        alt="clip0817">.</p>

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
      <td align="left"><p>De module Import Prijslijsten ,staat een gebruiker
        toe om de verschillende prijzen berekend via prijstabellen
        (artikels,beglazingen,kaders,enz.) te updaten. Om dit te doen,zal
        Winpro de bestanden analyseren vanuit <span
        style="font-style: italic;">Excel</span> welke de prijslijsten bevat en
        zal deze importeren.</p>

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
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; text-decoration: underline;">Attentie</span><span
                style="text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 10px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Om deze module te kunnen gebruiken dient u in bezit
                        te zijn van de module <span
                        style="font-weight: bold;">IMPG</span> <span
                        style="font-weight: bold;">(Importeren van
                        prijslijsten)</span>.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 10px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>De gedetailleerde module hier gaat om de versie 8.
                        Versie 7 heeft ook een vergelijkbare module maar d.m.v.
                        een extern programma, met kleine variaties te gebruiken
                        of te koppelen.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <p>Importeren van prijslijsten is toegankelijk vanaf het menu <span
        style="font-weight: bold;">Parameters | Importeren
        prijslijsten</span>.</p>

        <p> </p>

        <p style="text-align: center;"><span
        style="font-size: 8pt; font-style: italic; color: #666699;">Illustration
        1</span></p>

        <p style="text-align: center;"><img src="img/clip0811.zoom84.gif"
        width="227" height="320" border="0" alt="clip0811"></p>

        <p> </p>

        <p>Dit menu)iem geeft u toegang tot het welkomsscherm van de import
        module (Zie <span class="f_Legende">illustration 2</span>). </p>

        <p> </p>

        <p style="text-align: center;"><span
        style="font-size: 8pt; font-style: italic; color: #666699;">Illustration
        2</span></p>

        <p style="text-align: center;"><img src="img/clip0810.zoom84.gif"
        width="437" height="193" border="0" alt="clip0810"></p>

        <p> </p>

        <p>Dit venster stelt aan de gebruiker 3 opties voor welke hierna
        gedetailleerd zullen uitgelegd worden.De gebruiker heeft de
        mogelijkheid om manueel een prijstabel te importeren.Hij kan tevens een
        INI bestand inrichten en importeren.Het INI bestand bevat een lijst van
        updates.</p>

        <p> </p>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="22"><span
                style="font-weight: bold; font-size: 12pt; font-family: 'Arial'; color: #000000;">1.</span></td>
              <td><span class="f_TitreReleaseNote">Manuele Import</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Om te beginnen zullen we uitleggen hoe u handmatig een prijslijst
        kan importeren.</p>

        <p>In het Welkomvenster (zie figuur 2), wanneer de gebruiker op de
        knop<img src="img/clip0841.gif" width="67" height="22" border="0"
        alt="clip0841"> klikt ,opent een nieuw vesnter, welke toegang geeft aan
        de opties om de import te definiëren.(Zie <span
        class="f_Legende">illustration 3</span>).</p>

        <p> </p>

        <p class="p_Legende"><span class="f_Legende">Illustration 3</span></p>

        <p style="text-align: center;"><img src="img/clip0812.zoom72.gif"
        width="552" height="397" border="0" alt="clip0812"></p>

        <p class="p_Heading1" style="margin: 0px 0px 0px 24px;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p>Het venster bestaat uit een menubalk met bepaalde handelingen, een
        aantal invoervelden voor het configureren van de invoer, en een
        informatiegebied onderaan het venster.</p>

        <p> </p>

        <p>Het menu bevat 4 knoppen welke toegankelijk zijn in dit venster. </p>

        <p>De knop <img src="img/clip0817.gif" width="84" height="24" border="0"
        alt="clip0817"> welke de import van een prijstabel toestaat. </p>

        <p>De knop <img src="img/clip0824.gif" width="93" height="23" border="0"
        alt="clip0824"> vraagt aan Winpro om een prijstabel te genereren vanuit
        de database. </p>

        <p>De knop <img src="img/clip0821.gif" width="118" height="24" border="0"
        alt="clip0822"> staat u toe om de uitgevoerde wijzigingen in de Excel
        file op te slaan, ofwel in hetzelfde bestand of in een ander bestand.
        </p>

        <p>En tenslotte , de knop <img src="img/clip0823.gif" width="58"
        height="25" border="0" alt="clip0823"> welke de gebruiker terug naar
        het beginsscherm brengt.</p>

        <p> </p>

        <p>Om dit venster het beste te gebruiken, moet de gebruiker de preciese
        volgorde van ingave respecteren om de acties tot een goed einde te
        brengen. </p>

        <p> </p>

        <p>Wanneer de gebruiker op de knop <img src="img/clip0824.gif" width="93"
        height="23" border="0" alt="clip0825"> wenst te klikken, moet hij eerst
        het <span style="font-weight: bold;">type component</span> (<span
        style="font-weight: bold;">Artikel</span>, <span
        style="font-weight: bold;">Kader</span>, enz)
        selecteren.Vervolgens,dient hij de <span
        style="font-weight: bold;">code te selecteren</span>, door deze manueel
        in te geven, of door deze te selecteren door op de knop rechts te
        klikkenvan de ingavezone en vervolgens de code te selecteren vanuit de
        selectiebox. Tenslotte, dient de gebruiker een <span
        style="font-weight: bold;">groep</span> te kiezen. Eens deze keuzes
        gemaakt zijn, kan hij op de knop voor het laden klikken, en Winpro zal
        dan de juiste prijstabel vanuit de databse genereren. </p>

        <p> </p>

        <p>Wanneer de gebruiker een prijstabel vanuit een Excel bestand wenst
        te importeren kan dit door op de knop <img src="img/clip0817.gif"
        width="84" height="24" border="0" alt="clip0817"> te klikken,waarna hij
        zijn <span style="font-style: italic;">Excel bestand selecteert</span>,
        door manueel het directe pad aan te geven, of door op de knop rechts
        van de ingvaezone te klikken waarna hij zijn bestand kan selecteren.</p>

        <p>Wanneer een gebruiker een <span style="font-style: italic;">Excel
        bestand wijzigt</span>, dient hij deze wijzigingen
        <strong>EERST</strong> op te slaan alvorens deze kan geïmporteert
        worden <img src="img/clip0821.gif" width="118" height="24" border="0"
        alt="clip0821">. Wanneer het bestand opgeslagen is, is het scherm terug
        volledig leeg.Hierna kan de gebruiker terug een bestand opladen. </p>

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
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; text-decoration: underline;">Nota</span><span
                style="text-decoration: underline;">:</span></p>

                <p style="margin: 0px 0px 0px 10px;">De toepassing laat u toe
                om artikelcode's te koppelen aan prijstabellen vanuit Excel.Het
                staat u tevens toe om het omgkeerde uit te voeren, te weten ;
                het genereren van een Excekl bestand vanuit een reeds eerder
                opgeslagen prijstabel in een Winpro artikelcode.Om dit uit te
                voeren, laad de prijstabel vanuit een artikel Winpro <img
                src="img/clip0824.gif" width="93" height="23" border="0"
                alt="clip0825">, en sla deze op met de knop <img
                src="img/clip0821.gif" width="118" height="24" border="0"
                alt="clip0821">.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Het openen van een Excel-bestand met dit hulpprogramma heeft het
        doel om automatisch het invoerveld <strong>Aantal Lijnen</strong> te
        vullen. Dit veld bevat het aantal prijslijnen per hoogte.</p>

        <p>U moet weten dat WinPro drie soorten Excel spreadsheet maakt.</p>

        <p>U kunt een bestand met een prijslijst met een twee-dimensionale lijn
        prijs in de hoogte (zie figuur 4), de eerste regel bevat de breedtes en
        de eerste kolom bevat de hoogten.</p>

        <p> </p>

        <p class="p_Legende"><span class="f_Legende">Illustration 4</span></p>

        <p style="text-align: center;"><img src="img/clip0813.zoom81.gif"
        width="427" height="207" border="0" alt="clip0813"></p>

        <p> </p>

        <p>U kan tevens een bestand aanmaken welke een prijstabel met één
        afmeting bevatDit is één lijn per lengte (Zie <span
        class="f_Legende">illustration 5</span>) De eerste lijn bevat de waarde
        0 en de eerste kolom bevat de lengtes. </p>

        <p> </p>

        <p class="p_Legende"><span class="f_Legende">Illustration 5</span></p>

        <p style="text-align: center;"><img src="img/clip0814.gif" width="190"
        height="244" border="0" alt="clip0814"></p>

        <p> </p>

        <p>Het derde type dat ondersteund wordt ie een prijstabel met 2
        afmetingen welke meerdere prijslijnen per hoogte bevat.(Zie <span
        class="f_Legende">illustration 6</span>). De eerste lijn bevat de
        breedtes en de eerste kolom de hoogtes.</p>

        <p> </p>

        <p class="p_Legende"><span class="f_Legende">Illustration 6</span></p>

        <p style="text-align: center;"><img src="img/clip0815.zoom86.gif"
        width="428" height="231" border="0" alt="clip0815"></p>

        <p> </p>

        <p>Uitleg over de invoervelden (Zie <span
        class="f_Legende">illustration 3</span>) wordt weergegeven in de
        informatiezone wanneer de gebruiker met zijn muis over het veld
        gaat.Ziehier het detail van de velden in dit scherm.</p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;"></span><span
                style="font-style: italic; font-weight: bold;">Excel
                Bestand</span>: Gebruik deze knop om uw harde schijf te
                onderzoeken en een Excel bestand te selecteren welke
                geimporteerd dient te worden in een Winpro Artikelcode.</td>
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
              <td><span style="font-weight: bold;">Type</span>: Kies in de
                combobox van de componenten in welke de prijstabel dient
                geimporteerd te worden, in de voorgetselde lijst.Deze tabellen
                worden geimporteerd in het tabblad "Tarief" van de
                verschillende componenten (kader,vleugel,beslag,enz...), of in
                het tabblad "Leverancier" van de artikelcode</td>
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
              <td><span style="font-weight: bold;">Code</span>: Code van het
                componenet in welke de prijstabel dient geimporteerd te worden,
                in functie van het <span style="font-weight: bold;">type
                </span>aangegegeven bij de invoer.</td>
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
              <td><span style="font-weight: bold;">Groep</span>: Dit veld bevat
                een lijst van kleurgroepen welke geassocieerd zijn met het type
                component en an de geselecteerde code.Voor een
                artikel,corresponderebn deze groepen aan de types
                prijstabellen<a href="artfournisseur.php"></a> (0 =
                Aankoopprijs, 1 = Lopende kostprijs, 2 = Huidige kosprijs, 3 =
                Verkoopprijs). Voor de andere componeneten, worden de groepen
                gedefinieert in het tabblad "Tarief" van het
                component.Bijvoorbeeld, indien de gebruiker naar het tablad
                "Tarief" gaat in een code van een kader, daar kan hij een tabel
                terugvinden welke de lijst van de kleuren voortelt.Bij elke
                kleur, is het mogelijk om een kleurgroep toe te wijzen en een
                prijstabel toe te wijzen. (Zie <span
                class="f_Legende">illustration 7</span>). Eens de gebruiker een
                type component en een code geselecteert heeft in het
                importscherm, zal Winpro automatisch een lijst van groepen
                vullen met deze welke zich in de code van het component
              bevindt.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Legende"><span class="f_Legende">Illustration 7</span></p>

        <p style="text-align: center;"><img src="img/clip0826.zoom88.gif"
        width="302" height="151" border="0" alt="clip0826"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Te behandelen lijn</span>:
                Correspondeerd met de prijslijn welke gebruiktt wordt door de
                hoogte.Voor een tabel met één of 2 afmetingen waarbij er enkel
                1 lijn per hoogte is, dient de gebruiker het cijfer 1 aan te
                geven in de zone.In het geval van <span
                class="f_Legende">illustration 6</span> (Tabel met 2 afmetingen
                met meerdere prijslijnen per hoogte), dient de gebruiker met
                een cijfer aan te geven van welke lijn hij zijn prijs wenst up
                to daten. In dit geval,bijvoorbeeld,zijn er 6 lijnen per
                hoogte.De gebruiker dient dus een cijfer aan te geven tussen 1
                en 6.Bij elke hoogte, zal de gekozen lijn door Winpro behandeld
                worden .</td>
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
              <td><span style="font-weight: bold;">Lijn glasprijs</span>:
                Correspondeerd met de het lijnnummer van de prijstabel welke
                gebruikt wordt per hoogte voor het glas, wanneer het vakje "
                <strong>Beglazing inbegrepen</strong>" is aangevinkt. </td>
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
              <td><span style="font-weight: bold;">Beglazing
                inbegrepen</span>:<span style="font-weight: bold;"></span>Dit
                vakje geeft aan aan Winpro dat hij de prijs van het glas dient
                af te trekken van de nieuwe prijs.Om dit te gebruiken,dient u
                een bestand te openen met 2 afmetingen welke meerdere
                prijslijnen per hoogte bevat (Zie <span
                class="f_Legende">illustration 6</span>). De gebruiker dient
                een "<strong>Te behandelen lijn</strong> " te kiezen welke de
                beglazingsprijs bevat,<strong>Lijn glasprijs</strong>..Zelfde
                als bij " te behandelen lijn", dient ook hier de gebruiker een
                lijnnummer aan te geven voor de glasprijs welke behandeld dient
                te worden (bij meerdere glasprijslijnen). T</td>
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
              <td><span style="font-weight: bold;">Coefficient</span>: Dit veld
                staat toe om een verhogingscoëfficient te definiëren voor de
                nieuwe prijs.Op moment van het importeren,zal Winpro de prijzen
                in de prijstabel vermeerderen met het gekozen coëfficient, en
                dit alvorens dit weg te schrijven in de database.</td>
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
              <td><span style="font-weight: bold;">Hoogte minimum</span>: Dit
                veld wordt rechtstreeks opgeslagen in de code van het
              component.</td>
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
              <td><span style="font-weight: bold;">Breedte minimum</span>: Dit
                veld wordt rechtstreeks opgeslagen in de code van het
              component.</td>
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
              <td><span style="font-weight: bold;">Marge</span>: Deze waarde
                bevat een margecoëfficient welke direct opgeslagen wordt in de
                code van het component (Veld Extra Marge van het
                artikelbestand,of veld Margecoëfficient bij bijv. een kadercode
              </td>
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
              <td><span style="font-weight: bold;">Prijstabel</span>: Dit
                venster staat u toe om de prijstabel te visualisere bij het
                behandelen ervan.U kan deze prijstabel wijzigen,de cellen zijn
                te bewerken.Maar denk eraan om de knop <img src="img/clip0821.gif"
                width="118" height="24" border="0" alt="clip0821"> te gebruiken
                éénmaal de wijzigingen doorgevoerd zijn, en klik opnieuw <img
                src="img/clip0824.gif" width="93" height="23" border="0"
                alt="clip0825"> alvorens het importeren te starten.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>In geval van een foutmelding,geeft de toepassing in een
        dialoogscherm weer welke fouten er gegenereerd zijn.Vervolgens zal de
        muis op de lijn geplaatst worden welke de foutmeling geeft. </p>

        <p>Betreffende de code van een component, zal Winpro nagaan of de
        gebruiker een code geselecteert heeft.Indien de code zich niet in de
        database bevindt,of hij is verkeerd geschreven zal de behandeling
        evenzeer uitgevoerd worden. Dit zal geen invloed hebben op de juiste
        werking an het programma.</p>

        <p>Eenmaal dat de gebruiker alle invoervelden ingevuld heeft rest hem
        niets anders dan op de knop <img src="img/clip0817.gif" width="84"
        height="24" border="0" alt="clip0817"> te klikken om de bewerking uit
        te voeren.</p>

        <p> </p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="22"><span
                style="font-weight: bold; font-size: 12pt; font-family: 'Arial'; color: #000000;">2.</span></td>
              <td><span class="f_TitreReleaseNote">Configuratie van het
                ini-bestand</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Heading1" style="margin: 0px 0px 0px 24px;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p>In het beginscherm (Zie <span class="f_Legende">illustration
        2</span>), wanneer de gebruiker de knop <img src="img/clip0827.gif"
        width="70" height="24" border="0" alt="clip0827"> selecteert,zal een
        nieuw scherm openen, welke de gebruiker toegang geeft tot alle opties
        voor het correct invullen van het importbestand(Zie <span
        class="f_Legende">illustration 8</span>).</p>

        <p> </p>

        <p style="text-align: center;"><span class="f_Legende">Illustration
        8</span></p>

        <p style="text-align: center;"><img src="img/clip0828.zoom67.gif"
        width="577" height="460" border="0" alt="clip0828"></p>

        <p> </p>

        <p>Dit scherm is hetzelfde als het scherm voor de manuele import en
        bevat dezelfde functionaliteiten.Zij bevat een extra knop welke u
        toestaat een ini-bestand te selecteren <img src="img/clip0829.gif"
        width="79" height="23" border="0" alt="clip0829">, en een extra knop op
        de wijzigingen hierin op te slaan <img src="img/clip0830.gif" width="108"
        height="25" border="0" alt="clip0830">.</p>

        <p>Wanneer de gebruiker de verschillende invoervelden ingevuld heeft in
        dit scherm, moet hij met de rechter muisknop klikken op de lijst van de
        update's.Deze actie opent een menu (Zie l'<span
        class="f_Legende">illustration 9</span>) welke toestaat om gegevens oe
        te voegen of e verwijderen aan de lijst van de update's.</p>

        <p> </p>

        <p style="text-align: center;"><span class="f_Legende">Illustration
        9</span></p>

        <p style="text-align: center;"><img src="img/clip0831.zoom81.gif"
        width="189" height="175" border="0" alt="clip0831"></p>

        <p style="margin: 0px 0px 8px 0px;"><span
        style="font-size: 12pt; font-family: 'Times New Roman';">Dit menu bevat
        de volgende opties:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><img src="img/clip0833.gif" width="138" height="20" border="0"
                alt="clip0833"> staat toe om een update lijn toe te voegen
                welke de ingegeven gegevens bevat in het bovenste deel van het
                scherm.. </td>
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
              <td><img src="img/clip0834.gif" width="137" height="21" border="0"
                alt="clip0834"> staat de gebruiker toe om aan Winpro te vragen
                om het bestand te controleren op één of meerdere fouten.Wanneer
                een lijn wordt toegevoegd controleert Winpro deze op fouten.
                Indien hij er één vindt, wordt het nummer van de fout
                toegevoegd in een laatste kolom van de lijst, en de lijn wordt
                in het rood aangegeven.Het is voor de gebruiker voldoende om
                zijn cursor op deze lijn te plaatsen, zodat de informaie
                hiervan wordt weergegeven onderaan het scherm (Zie <span
                class="f_Legende">illustration 10</span>).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="text-align: center;"><span class="f_Legende">Illustration
        10</span></p>

        <p style="text-align: center;"><img src="img/clip0835.zoom69.gif"
        width="591" height="249" border="0" alt="clip0835"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><img src="img/clip0837.gif" width="139" height="21" border="0"
                alt="clip0837"> Selecteren van de overeenkomstige vakjes in de
                eerste kolom aan.In deze kolom wordt rekening gehouden bij het
                opslaan van het INI-bestand. Alleen records waarvan het bestand
                wordt gecontroleerd zal worden toegevoegd aan het
              INI-bestand</td>
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
              <td><img src="img/clip0838.gif" width="134" height="22" border="0"
                alt="clip0838"> Deselecteren van de overeenkomstige vakjes in
                de eerste kolom aan.In deze kolom wordt rekening gehouden bij
                het opslaan van het INI-bestand. Alleen records waarvan het
                bestand wordt gecontroleerd zal worden toegevoegd aan het
                INI-bestand</td>
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
              <td><img src="img/clip0839.gif" width="133" height="23" border="0"
                alt="clip0839"> Om een lijn welke geselecteert is te
                verwijderen (in blauwe kleur).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Wanneer een lijn een fout bevat, is het mogelijk deze fout direct te
        corrigeren in de tabel. Alle gebieden, behalve de kolom-type kan worden
        gewijzigd. U kunt de lijst met updates ook sorteren door te klikken op
        kolommen.</p>

        <p>In de kolom "<strong>To Do</strong>" zal rekening worden gehouden
        bij het uitvoeren van de update (volgende paragraaf, Import in
        automatische modus). Alleen records welke geselecteert zijn worden
        behandeld tijdens de upgrade.</p>

        <p>Zodra de gebruiker wijzigingen heeft aangebracht in de tabel, moet
        het gebruik van het menu<img src="img/clip0834.gif" width="137" height="21"
        border="0" alt="clip0834">, WinPro aangeven om te controleren of er
        fouten zijn gecorrigeerd.</p>

        <p>Vergeet niet om de wijzigingen op te slaan van het configuratie
        bestand met de knop <img src="img/clip0830.gif" width="108" height="25"
        border="0" alt="clip0830">.</p>

        <p> </p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="22"><span
                style="font-weight: bold; font-size: 12pt; font-family: 'Arial'; color: #000000;">3.</span></td>
              <td><span class="f_TitreReleaseNote">Import in automatische
                modus</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>In het beginscherm (Zie <span class="f_Legende">illustration
        2</span>), wanneer de gebruikt klikt op de knop <img src="img/clip0842.gif"
        width="90" height="20" border="0" alt="clip0842">, zal een nieuw scherm
        openen, welke u toegang geeft tot de import van het ini bestand (Zie
        <span class="f_Legende">illustration 11</span>).</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0843.zoom76.gif"
        width="577" height="278" border="0" alt="clip0843"></p>

        <p> </p>

        <p>In dit venster kan de gebruiker het importeren van een bijgewerkt
        INI-bestand (zie vorige paragraaf). Om dit te doen, moet de gebruiker
        eerst een INI-bestand openen . Het kan dus ofwel typt u het pad naar
        het bestand in het tekstvak of klik op de knop rechts van het vak. Dit
        opent een dialoogvenster waarin u het bestand kan selecteren.</p>

        <p>Zodra het bestand wordt geopend, wordt de combo-update gevuld met de
        inhoud van het INI-bestand.</p>

        <p>Met betrekking tot de INI-bestand , wanneer een regel een fou bevat,
        wordt de lijn in het rood met het foutnummer in de laatste kolom
        aangegeven. Plaats de cursor op de regel welke het probleem weergeeft
        om de foutmelding weer te geven in het informatiegebied aan de
        onderzijde. Het is niet toegestaan &#x200b;&#x200b;om hier verandering
        aan te brengen op de lijnen in dit venster. De gebruiker moet
        terugkeren naar het bewerkingsvenster van het INI-bestand om deze
        wijzigingen aan te brengen.</p>

        <p>De kolom "<strong>To Do</strong>" wordt gecontroleert op moment dat
        de gebruiker klikt op de knop <img src="img/clip0817.gif" width="84"
        height="24" border="0" alt="clip0817">.. <span
        style="font-weight: bold;">Enkel de records welke geselecteert zijn
        worden behandeld</span>.</p>

        <p>Om de bewerking e beëindigen, dient de gebruiker enkel nog op de
        knop <img src="img/clip0817.gif" width="84" height="24" border="0"
        alt="clip0817">. te klikken.</p>

        <p> </p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>

<div class="DEU">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>Das Modul Import Preislisten, ermöglicht einem
        Benutzer, verschiedene Preise berechnet durch Preistabellen (Artikel,
        Verglasung, Rahmen, etc.) zu aktualisieren. Um dies zu tun, WinPro
        werden die Dateien aus <span style="font-style: italic;">Excel</span>
        welche die Preislisten umfasst analysiert und importiert.</p>

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
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; text-decoration: underline;">Attention</span><span
                style="text-decoration: underline;">:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 10px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Um diese Funktion nutzen zu können,müssen Sie das
                        Modul <span style="font-weight: bold;">IMPG</span>
                        <span style="font-weight: bold;">(Importation
                        Preislisten) haben</span>.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 10px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Die detaillierte Modul hier betrifft die Version 8.
                        Version 7 hat auch eine ähnliche Modul, sondern als
                        externes Programm, mit geringfügigen Abweichungen zu
                        verwenden oder Schnittstelle</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <p>Die Import-Preislisten finden Sie auf der <strong>Utility-Menü |
        Einfuhrung preislisten</strong></p>

        <p> </p>

        <p style="text-align: center;"><span
        style="font-size: 8pt; font-style: italic; color: #666699;">Illustration
        1</span></p>

        <p style="text-align: center;"><img src="img/clip0811.zoom84.gif"
        width="227" height="320" border="0" alt="clip0811"></p>

        <p> </p>

        <p>Dieser Menüpunkt ermöglicht den Zugriff auf das erste Fenster des
        Import-Dienstprogramm (siehe Abbildung 2). </p>

        <p> </p>

        <p style="text-align: center;"><span
        style="font-size: 8pt; font-style: italic; color: #666699;">Illustration
        2</span></p>

        <p style="text-align: center;"><img src="img/clip0810.zoom84.gif"
        width="437" height="193" border="0" alt="clip0810"></p>

        <p> </p>

        <p>Dieses Fenster stellt dem Benutzer drei Optionen werden später im
        Detail erläutert werden. Der Benutzer kann manuell eine Preisliste
        importieren . Es kann auch eine INI-Datei so konfigurieren, und
        importieren. INI-Datei enthält eine Liste der Updates.</p>

        <p> </p>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="22"><span
                style="font-weight: bold; font-size: 12pt; font-family: 'Arial'; color: #000000;">1.</span></td>
              <td><span class="f_TitreReleaseNote">Manueller Import</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Um zu beginnen, werden wir erklären, wie man manuell eine Preisliste
        kann importieren .</p>

        <p>Im Willkommen-Fenster (siehe Abbildung 2), wenn der Benutzer auf die
        Button klickt <img src="img/clip0841.gif" width="67" height="22" border="0"
        alt="clip0841">, ein neues Fenster wird geöffnet, das den Zugang zu
        allen Optionen für die Einstellung der Einfuhrung (siehe Abbildung
        3).anzeigt. </p>

        <p> </p>

        <p class="p_Legende"><span class="f_Legende">Illustration 3</span></p>

        <p style="text-align: center;"><img src="img/clip0812.zoom72.gif"
        width="552" height="397" border="0" alt="clip0812"></p>

        <p class="p_Heading1" style="margin: 0px 0px 0px 24px;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p>Das Fenster besteht aus einer Menüleiste, um bestimmte Aktionen,
        eine Reihe von Eingabefeldern für die Konfiguration importieren und
        eine Informations-Bereich am unteren Rand des Fensters .</p>

        <p> </p>

        <p>The menu contains 4 buttons in ths screen. </p>

        <p>The button <img src="img/clip0817.gif" width="84" height="24" border="0"
        alt="clip0817"> let's you import the price table. </p>

        <p>The button <img src="img/clip0824.gif" width="93" height="23" border="0"
        alt="clip0824"> askes Winpro to extract a price table from the
        database. </p>

        <p>The button <img src="img/clip0821.gif" width="118" height="24"
        border="0" alt="clip0822"> let's you save the modifications made in the
        <span style="font-style: italic;">Excel file</span>, this in the same
        file or in a different file. </p>

        <p>En finally, the button <img src="img/clip0823.gif" width="58"
        height="25" border="0" alt="clip0823"> brings the user back to the
        startscreen.</p>

        <p> </p>

        <p>To use this screen best, the user has to respect the precise order
        of input according to the actions he wants to undertake. </p>

        <p> </p>

        <p>If the user wishes to click the button <img src="img/clip0824.gif"
        width="93" height="23" border="0" alt="clip0825">, he has to select
        first a <strong>type of component (Articel,
        Outerframe,Fitting,...).</strong> Then,he has to select a <span
        style="font-weight: bold;">code</span>, or by inputting it in the input
        zone,or by clicking the button to the rigth in the input zone and
        select a component from the selection box.To end, the user has to
        choose a <span style="font-weight: bold;">group</span>.Once these 3
        elements are defined, he can click on the button "charger" , to load
        the price table, and Winpro can extract the correct price table from
        the database. </p>

        <p> </p>

        <p>If the user wishes to import a price table which is in a excel file
        by clicking the button <img src="img/clip0817.gif" width="84" height="24"
        border="0" alt="clip0817">, he has to select the excel file,by
        inputting the direct path in the first input zone of the screen, or by
        clicking rigth in the zone to select his excel file.</p>

        <p>If the usere modifies an <span style="font-style: italic;">Excel
        file</span>,it is obliged to save these modificaions before doing the
        import,with the button <img src="img/clip0821.gif" width="118" height="24"
        border="0" alt="clip0821">. Once the file is saved,the screen will be
        completely empty.The user can now load his file or another file. </p>

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
                style="margin: 0px 0px 0px 10px;"><span
                style="font-weight: bold; text-decoration: underline;">Note</span><span
                style="text-decoration: underline;">:</span></p>

                <p style="margin: 0px 0px 0px 10px;">This utility makes a
                connection from a price table in an excel file to a Winpro
                article for the import.It also does the inverse,to generate an
                excel file from a Winpro article.For this, load the price table
                from the Winpro article <img src="img/clip0824.gif" width="93"
                height="23" border="0" alt="clip0825">, and save this with the
                button <img src="img/clip0821.gif" width="118" height="24"
                border="0" alt="clip0821">.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Opening an Excel file with this utility has the effect of
        automatically populate the input box number line. This field contains
        the number of lines by hight.</p>

        <p>You should know that WinPro allows three types of Excel
        spreadsheet.</p>

        <p>You can create a file containing a price list containing a
        two-dimensional line price by height (see Figure 4), the first line
        widths and the first column contains the heights.</p>

        <p> </p>

        <p class="p_Legende"><span class="f_Legende">Illustration 4</span></p>

        <p style="text-align: center;"><img src="img/clip0813.zoom81.gif"
        width="427" height="207" border="0" alt="clip0813"></p>

        <p> </p>

        <p>You can also create a file containing a price list containing a
        one-dimensional line length price (See Figure 5) The first line
        contains the value 0 and the first column contains the lengths</p>

        <p> </p>

        <p class="p_Legende"><span class="f_Legende">Illustration 5</span></p>

        <p style="text-align: center;"><img src="img/clip0814.gif" width="190"
        height="244" border="0" alt="clip0814"></p>

        <p> </p>

        <p>The third type is a supported price grid in two dimensions with
        multiple price lines by height (See Figure 6). The first line contains
        the first column widths and heights.</p>

        <p> </p>

        <p class="p_Legende"><span class="f_Legende">Illustration 6</span></p>

        <p style="text-align: center;"><img src="img/clip0815.zoom86.gif"
        width="428" height="231" border="0" alt="clip0815"></p>

        <p> </p>

        <p>An explanation of each entry field (see Figure 3) is displayed in
        <strong>the information area</strong> when the user hovers over the
        field in question with the mouse pointer, as well as info bubbles. Here
        are the details of the fields in this window</p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">File </span><span
                style="font-style: italic; font-weight: bold;">Excel</span>:Use
                the button to the right to browse the disk and select a file to
                import Excel into component WinPro.</td>
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
              <td><span style="font-weight: bold;">Type</span>: Choose this
                combo in which the component must import the price list, from
                the list of proposed components. These grids will be imported
                into tab Tarif components (frame, sash, ...) or the supplier
                tab of the record item.</td>
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
              <td><span style="font-weight: bold;">Code</span>: Code of the
                component in which the grid must be imported, depending on the
                type specified in advance.</td>
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
              <td><span style="font-weight: bold;">Group</span>: This field
                contains a list of color groups associated with the type of
                component and the selected code. For an article, these groups
                correspond to the types of price schedule (0 = Purchase Price,
                1 = Cost price, 2 = Cost current, 3 = Selling Price). For other
                components, groups are defined in the Tarif tab sheet of the
                component. For example, if the user will tab Tarif form a
                frame, it will find a table containing the list of colors. For
                each color, it is possible to associate a group number and a
                price list (see Figure 7). Once the user has selected in the
                Import window a component type and a code WinPro automatically
                populates the list with groups that it finds in the data
                componentt.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Legende"><span class="f_Legende">Illustration 7</span></p>

        <p style="text-align: center;"><img src="img/clip0826.zoom88.gif"
        width="302" height="151" border="0" alt="clip0826"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Line to treat</span>:
                Corresponds to the price line will be used by height. Grid for
                one or two dimension with only one line by height, the user
                must enter the figure 1 in the area. In the case of Figure 6
                (two-dimensional grid with several rows price by height), the
                user must specify the number of the line with which it wishes
                to update its prices. In this case, for example, there are 6
                lines per height. The user can then specify a number between 1
                and 6. At each height, Winpro will choose the line to import
                prices.</td>
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
              <td><span style="font-weight: bold;"></span><strong>Line price
                glazing</strong>: Corresponds to the grid line price which will
                be used for the glazing height only when the checkbox is
                checked <strong>including glazing</strong>. </td>
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
              <td><span style="font-weight: bold;">Vitrage compris</span>
                '<strong>including glazing'</strong>:<span
                style="font-weight: bold;"></span> This checkbox indicates
                WinPro he will deduct the price of the glass of the new price.
                To use this option, you must open a file containing
                two-dimensional multi-line price by height (See Figure 6). The
                user must choose <strong>a treating line</strong> and a line
                containing the price of the glazing, glazing line price. As for
                the line to be processed, the user will be able to choose a
                price line of glazing between 1 and the maximum number of lines
                per height.</td>
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
              <td><span style="font-weight: bold;">Coefficient</span>: This
                field allows you to define a multiplier of the new price. At
                the time of importation, WinPro multiply each price grid by
                this coefficient, before writing in database.</td>
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
              <td><span style="font-weight: bold;">Hauteur(Height)
                minimum</span>: This field will be stored directly in the data
                component.</td>
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
              <td><span style="font-weight: bold;">Largeur(Witdh)
                minimum</span>: This field will be stored directly in the data
                component.</td>
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
              <td><span style="font-weight: bold;">Marge(Margin)</span>: .This
                value contains a margin coefficient which will be recorded
                directly in the data component (field <strong>margin
                additional</strong> in the article or field <strong>margin
                coefficient</strong> of an outerframe for example).</td>
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
              <td><span style="font-weight: bold;">Grille tarif (Price
                table)</span>: This window allows you to view the price list
                being processed. You can change this price list, the cells are
                editable. Do however use the button <img src="img/clip0821.gif"
                width="118" height="24" border="0" alt="clip0821"> once the
                changes made and <img src="img/clip0824.gif" width="93" height="23"
                border="0" alt="clip0825"> again before starting the
              treatment..</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>In case of encoding errors, the utility will display a dialog box
        with the error message. Then, the entry bar will be placed in the area
        with a problem.</p>

        <p>On the code of a component, WinPro checks whether the user has
        selected a code. If the code is not in the database, or if it is poorly
        written, the treatment will run anyway. This import will have no effect
        and will not affect the program.</p>

        <p>Once the user has finished filling completely different areas of
        input, it only remains to click on the button <img src="img/clip0817.gif"
        width="84" height="24" border="0" alt="clip0817"> to complete the
        operation.</p>

        <p> </p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="22"><span
                style="font-weight: bold; font-size: 12pt; font-family: 'Arial'; color: #000000;">2.</span></td>
              <td><span class="f_TitreReleaseNote">Ini configuration
              file</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Heading1" style="margin: 0px 0px 0px 24px;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p>In the Welcome window (see Figure 2), if the user clicks the button
        <img src="img/clip0827.gif" width="70" height="24" border="0"
        alt="clip0827">, a new window will open, giving access to all the
        options for configuring an import file (see Figure 8). </p>

        <p> </p>

        <p style="text-align: center;"><span class="f_Legende">Illustration
        8</span></p>

        <p style="text-align: center;"><img src="img/clip0828.zoom67.gif"
        width="577" height="460" border="0" alt="clip0828"></p>

        <p> </p>

        <p>This window is similar to the import window in manual mode and
        contains the same functionality. It also contains a button to open a
        configuration file INI <img src="img/clip0829.gif" width="79" height="23"
        border="0" alt="clip0829">, and a button to save the changes to an INI
        file <img src="img/clip0830.gif" width="108" height="25" border="0"
        alt="clip0830">.</p>

        <p>When the user has filled the boxes in this window, it will click
        with the right mouse button on the list of updates. This action will
        result in a shortcut menu (see Figure 9) for the addition or deletion
        of data entered in the list of updates.</p>

        <p> </p>

        <p style="text-align: center;"><span class="f_Legende">Illustration
        9</span></p>

        <p style="text-align: center;"><img src="img/clip0831.zoom81.gif"
        width="189" height="175" border="0" alt="clip0831"></p>

        <p style="margin: 0px 0px 8px 0px;"><span
        style="font-size: 12pt; font-family: 'Times New Roman';">The context
        menu contains the following options:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><img src="img/clip0833.gif" width="138" height="20" border="0"
                alt="clip0833"> adds a line containing the update data recorded
                in the areas of the upper part of the window. </td>
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
              <td><img src="img/clip0834.gif" width="137" height="21" border="0"
                alt="clip0834"> allows the user to request WinPro of whether
                the list of updates or contains no more errors. Indeed, when a
                row is added WinPro checks if it contains no errors. If one is
                found, the error number is added to the last column of the
                list, and the line is written in red. Just the user to place
                his cursor on the line in this way, the error message will be
                shown in the information area at the bottom of the window (see
                Figure 10).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="text-align: center;"><span class="f_Legende">Illustration
        10</span></p>

        <p style="text-align: center;"><img src="img/clip0835.zoom69.gif"
        width="591" height="249" border="0" alt="clip0835"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><img src="img/clip0837.gif" width="139" height="21" border="0"
                alt="clip0837"> can select the boxes located in the first
                column. This column is taken into account when saving the INI
                file. <strong>Only records where the box will be checked will
                be added to the INI file.</strong></td>
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
              <td><img src="img/clip0838.gif" width="134" height="22" border="0"
                alt="clip0838"> can uncheck the boxes located in the first
                column. This column is taken into account when saving the INI
                file. <strong>Only records where the box will be checked will
                be added to the INI file</strong>.</td>
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
              <td><img src="img/clip0839.gif" width="133" height="23" border="0"
                alt="clip0839"> removes from the list the line which is
                selected (written in blue).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>When a line contains an error, it is possible to correct this error
        directly in the table. All areas except the column type can be changed.
        You can also sort the list of updates by clicking on columns.</p>

        <p>The column "<strong>To Do</strong>" will be taken into account when
        performing the update (next paragraph, Import in automatic mode).
        <strong>Only records with checked will be treated during the
        upgrade.</strong></p>

        <p>Once the user has made changes to the table, it must use the menu
        <img src="img/clip0834.gif" width="137" height="21" border="0"
        alt="clip0834">,so that WinPro checks whether any errors have been
        corrected.</p>

        <p>Do not forget to save the changes to the configuration file with the
        button <img src="img/clip0830.gif" width="108" height="25" border="0"
        alt="clip0830">.</p>

        <p> </p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="22"><span
                style="font-weight: bold; font-size: 12pt; font-family: 'Arial'; color: #000000;">3.</span></td>
              <td><span class="f_TitreReleaseNote">Import auto mode</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>In the Welcome window (see Figure 2), if the user clicks the button
        <img src="img/clip0842.gif" width="90" height="20" border="0"
        alt="clip0842">, a new window will open, giving access to import an INI
        file (see Figure 11).</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0843.zoom76.gif"
        width="577" height="278" border="0" alt="clip0843"></p>

        <p> </p>

        <p>This window allows the user to import an INI file updated (see
        previous paragraph). To do this, the user must first open an INI file.
        It may therefore either type the path to the file in the text box, or
        click the button to the right of the box. This will open a dialog box
        allowing you to select the file.</p>

        <p>Once the file is opened, <strong>the combo update is filled</strong>
        with the contents of the INI file.</p>

        <p>As to create the INI file if a line contains an error, the line is
        written in red with the error number in the last column. Simply place
        the cursor on the line problematic to see the error message is
        displayed in the <strong>information area</strong> at the bottom. But
        he is not allowed to change lines here in this window. The user must
        return to the editing window of the INI file to make these changes.</p>

        <p>The column '<strong>To Do</strong>" is checked when the user clicks
        the button<img src="img/clip0817.gif" width="84" height="24" border="0"
        alt="clip0817">.. <span style="font-weight: bold;">Only records where
        the checkbox is checked in this column will be treated</span>.</p>

        <p>To finish the operation, the user only has to click on <img
        src="img/clip0817.gif" width="84" height="24" border="0"
        alt="clip0817">.</p>

        <p> </p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
