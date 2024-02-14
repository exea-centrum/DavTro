<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Suppliers","Fournisseurs"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?vitsuppliers.php"; }
else { parent.quicksync('a5.8.5'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Fournisseurs</title>
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
     <a href="vitprice.php">Previous</a>&nbsp;
     <a href="vitprice2.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p>This page lets you define the price computation elements which are specific to the supplier. If you have the multi-supplier glass module, you can define here up to 5 suppliers. This page has 2 sub-pages: the first one has all the fields for price information; the second contains a field to input a formula for this glazing and this supplier.</p>
<p>&nbsp;</p>
<p>This page is not accessible if the box </span><span style="font-weight: bold; color: #000000;">Composed glass</span> is checked on the <a href="vitdescription.php">Description</a> page.</p>
<p>&nbsp;</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p>Ces pages permettent de renseigner les éléments de calcul de prix spécifique à chaque fournisseur. Si vous possédez le module multi fournisseur vitrage, vous pouvez définir jusqu'à 10 fournisseurs. Deux sous onglets sont accessibles: le premier onglet contient les paramètres de prix; le second contient une formule de calcul pour ce vitrage et ce fournisseur.</p>
<p>&nbsp;</p>
<p>Cette page n'est pas accessible si la case <span style="font-weight: bold;">Vitrage composé </span>est cochée dans l'onglet <a href="vitdescription.php">Description</a>.</p>
<p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
