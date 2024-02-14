<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["TransX and TransY","TransX et TransY"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?transx_et_transy.php"; }
else { parent.quicksync('a2.6.18.2'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>TransX et TransY</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="TransX,TransY" />
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
     <a href="creertransformation.php">Previous</a>&nbsp;
     <a href="supprimertransformation.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">As soon as a transformation is initialized, </span><span class="f_Variables">TransX</span><span class="f_Textestd"> and </span><span class="f_Variables">TransY</span><span class="f_Textestd"> functions will compute the coordinates of a point according the origin point, and according the values set into the whole </span><span class="f_Variables">CreateTransformation</span><span class="f_Textestd"> functions previously declared. </span></p>
<p class="p_Textestd"><span class="f_Variables">TransX </span><span class="f_Textestd">and </span><span class="f_Variables">TransY </span><span class="f_Textestd">return the x,y coordinate of the point set as parameter, applying before all the transformation coded, starting with the last one declared.</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">NewX := TransX (x, y)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">NewY := TransY (x, y)</span></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables" style="font-weight: bold;">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>
<p class="p_Textestd"><span class="f_Textestd">D&#233;s que la transformation est initialis&#233;e, les fonctions </span><span class="f_Variables">TransX</span><span class="f_Textestd"> et </span><span class="f_Variables">TransY</span><span class="f_Textestd"> permettent de calculer les coordonn&#233;es d'un point d'apr&#232;s les coordonn&#233;es d'un point d'origine et en fonction des param&#232;tres de toutes les fonctions </span><span class="f_Variables">CreerTransformation</span><span class="f_Textestd"> actives. </span></p>
<p class="p_Textestd"><span class="f_Textestd">Autrement dit, </span><span class="f_Variables">TransX </span><span class="f_Textestd">et </span><span class="f_Variables">TransY </span><span class="f_Textestd">renvoie les coordonn&#233;es x,y du point pass&#233; en param&#232;tre, apr&#232;s lui avoir appliqu&#233; toutes les transformations, en commen&#231;ant par la derni&#232;re ajout&#233;e &#224; la hi&#233;rarchie.</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">NouvelX := TransX (x, y)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">NouvelY := TransY (x, y)</span></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables" style="font-weight: bold;">&nbsp;</span></p>

</td></tr></table>
</div>

</body>
</html>
