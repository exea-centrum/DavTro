<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["DXF 2","DXF 2"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?ouvdxf2.php"; }
else { parent.quicksync('a5.3.11'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>DXF 2</title>
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
     <a href="ouvdxf1.php">Previous</a>&nbsp;
     <a href="outerframesfilter2.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">This page lets you link automatically basic cross-section information for the sash. See also <a href="ouvdxf1.php">previous page</a>.</p>
<p style="text-align: center;"><img src="img/clip0154eng.jpg" width="546" height="319" border="0" alt="clip0154eng"></p>
<p>The number of fields on this page depends on the number of leaves in the vent.</p>
<p>&nbsp;</p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd" style="font-weight: bold;">French mullion a/b</span><span style="color: #000000;">: Input here the horizontal and vertical offset of the French mullions relatively to the sash.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd" style="font-weight: bold;">Leaf n</span><span style="color: #000000;">: Input here the offset of each leaf relatively to the base sash position. You can have different values for left and right openings.</span></p>
</td></tr></table></div>
</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">Cet onglet vous permet de définir des paramètres relatifs aux vues en coupes dans l'ouvrant. Voir également l'</span><a href="ouvdxf1.php">onglet précédent</a>.</p>
<p style="text-align: center;"><img src="img/clip0395.gif" width="524" height="196" border="0" alt="clip0395"></p>
<p>Le nombre de champs dans cette page est fonction du nombre de vantaux de l'ouvrant.</p>
<p>&nbsp;</p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd" style="font-weight: bold;">Mauclair a/b</span><span class="f_Textestd">: Renseignez ici le décalage horizontal ou vertical du battement par rapport à l'ouvrant.</span></td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span class="f_Textestd" style="font-weight: bold;">Vantail n</span><span class="f_Textestd">:&nbsp; Décalage de chaque vantail par rapport à la position de base. Vous pouvez saisir des valeurs distinctes pour un ouverture à gauche et à droite.</span></p>
</td></tr></table></div>
</td></tr></table>
</div>

</body>
</html>
