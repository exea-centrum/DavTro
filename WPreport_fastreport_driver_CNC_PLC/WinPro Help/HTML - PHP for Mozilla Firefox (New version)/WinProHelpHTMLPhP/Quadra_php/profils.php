<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Profiles","Profils"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?profils.php"; }
else { parent.quicksync('a4.6'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Profils</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Profils" />
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
    </td>
    <td align="right">
     <span style="font-size: 9pt">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="articlesfiltres.php">Previous</a>&nbsp;
     <a href="prfdescription.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p style="background: #fffff2;"><span style="color: #000000;">The profile table is an extension of the article table. It defines additional informations for profiles.</span></p>
<p style="background: #fffff2;"><span style="font-size: 5pt; color: #000000;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">Each profile groups one or more <a href="articles.php">articles</a> (one per colour). These articles hold informations on price, stock, supplier, ... If a profile exists in several colours, you must match each article with a <a href="couleursdescription.php">colour</a>.</span></p>
<p style="text-align: center; margin: 14px 0px 14px 0px;"><img src="img/clip0108eng.jpg" width="647" height="420" border="0" alt="clip0108eng"></p>
<p style="background: #fffff2;"><span style="font-weight: bold; color: #000000;">Code</span><span style="color: #000000;">: The profile code. This information must be different for each profile.</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Le fichier profil se base sur le fichier article, et permet de définir des informations complémentaires, propres aux profils.</p>
<p>&nbsp;</p>
<p>Chaque profil correspond à un ou plusieurs <span style="color: #0000ff;"><a href="articles.php">articles</a></span> (un par couleur). Ces articles contiennent les renseignements de type prix, stock, fournisseur, ... Si un profil existe en plusieurs couleurs, il faut établir une correspondance entre chaque article et sa <span style="color: #0000ff;"><a href="couleursdescription.php">couleur</a></span>.</p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="text-align: center;"><img src="img/clip0108.gif" width="569" height="307" border="0" alt="clip0108"></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span style="font-weight: bold;">Code</span>: Le code du profil. Cette information doit être différente pour chaque profil.</td></tr></table></div><p>&nbsp;</p>
<p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
