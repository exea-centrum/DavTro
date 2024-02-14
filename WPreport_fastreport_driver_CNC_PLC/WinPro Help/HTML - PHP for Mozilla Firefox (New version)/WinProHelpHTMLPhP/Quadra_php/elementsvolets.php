<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Roller Shutter Elements","El&#233;ments De Volets","Rolluik elementen"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?elementsvolets.php"; }
else { parent.quicksync('a6'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>El&#233;ments de volets</title>
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
     <a href="ventilatorsfilters.php">Previous</a>&nbsp;
     <a href="voletcaisson.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p> </p>
<p>The data set up concerning roller shutters within WinPro is divided into three main frames, <a href="voletcaisson.php">roller shutter boxes</a>, <a href="volettablier.php">roller shutter curtains</a> and <a href="voletcoulisse.php">roller shutter rails</a>. Stacking all those elements is composing a full roller shutter.</p>
<p>&nbsp;</p>
<p>Each elements are detailled forward through next pages.</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p> </p>
<p>Le paramétrage des volets se décompose dans Winpro en paramétrage de <a href="voletcaisson.php">caissons</a>, <a href="volettablier.php">tabliers</a> et <a href="voletcoulisse.php">coulisses</a>. L'assemblage de ces différents éléments compose un volet complet.</p>
<p>&nbsp;</p>
<p>Vous trouverez la description de chacun de ces éléments dans les pages suivantes.</p>

</td></tr></table>
</div>

<div class="NED">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p> </p>
<p>De parametrage van rolluiken bestaat in Winpro uit de definitie en parametrage van volgende elementen : <a href="voletcaisson.php">rolluikkasten</a>, <a href="volettablier.php">rolluikbladen</a> en <a href="voletcoulisse.php">geleiders</a>. Samenbrengen van deze verschillende elementen definieert tenslotte uw volledig rolluik.</p>
<p>&nbsp;</p>
<p>Op de volgende pagina's worden deze elementen verder beschreven.</p>

</td></tr></table>
</div>
</body>
</html>
