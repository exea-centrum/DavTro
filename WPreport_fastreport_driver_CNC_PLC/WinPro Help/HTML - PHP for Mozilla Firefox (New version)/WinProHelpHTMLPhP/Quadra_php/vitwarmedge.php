<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Warmedges","Warmedges"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?vitwarmedge.php"; }
else { parent.quicksync('a5.8.3'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Warm edges</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="" />
   <meta http-equiv="Content-Type" content="text/php; charset=ISO-8859-1" />
   <meta http-equiv="Content-Style-Type" content="text/css" />
   <link type="text/css" href="default.css" rel="stylesheet" />
</head>
<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;" onload=" AddTitleAndLangFlags();highlight();">
<div id="hmpopupDiv" style="visibility:hidden; position:absolute; z-index:1000;"></div>


<table width="100%" border="0" cellspacing="0" cellpadding="5" bgcolor="#FF8000">
  <tr valign="middle">
    <td align="left">
      <p class="p_Heading1"><span id="titlepage" class="f_Heading1"></span></p>
    </td>
	<td align="center">
     <div id="langflags"></div>
    </td>
    <td align="right">
     <span style="font-size: 9pt">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="vitdimensions.php">Previous</a>&nbsp;
     <a href="vitprice.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>This tab display the list of existing <a href="warmedge.php">warm edges</a>, with their respective codes and descriptions. You may select here the warmedges compliant with this glass unit.</p>

<p>&nbsp;</p>

<p style="text-align: center;"><img src="img/clip0183eng.jpg" width="622" height="215" border="0" alt="clip0183eng"></p>

<p>&nbsp;</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Default warmedge</span>: Define here a default warmedge for thios glass unit, 
			  in case no warmedge is set at order level.</td>
				</tr>
          </tbody>
        </table>
        </div>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>Cet onglet affiche la liste des <a href="warmedge.php">warm edges</a> existants dans WinPro, avec leurs codes et descriptions respectifs. S&#233;lectionnez les warm edges compatibles avec ce vitrage dans ce dialogue.</p>

<p>&nbsp;</p>

<p style="text-align: center;"><img src="img/clip0183eng.jpg" width="622" height="215" border="0" alt="clip0183eng"></p>

<p>&nbsp;</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Warmedge par défaut</span>: Vous pouvez définir ici un warmedge par défaut pour le vitrage, 
			  qui sera utilisé si aucun warmedge n'est renseigné dans la commande.</td>
				</tr>
          </tbody>
        </table>
        </div>

</td></tr></table>
</div>

</body>
</html>
