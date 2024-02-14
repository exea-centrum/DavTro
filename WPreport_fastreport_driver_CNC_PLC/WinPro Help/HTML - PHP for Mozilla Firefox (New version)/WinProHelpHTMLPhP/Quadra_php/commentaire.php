<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["# Comments","# Commentaires","Commentaar"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?commentaire.php"; }
else { parent.quicksync('a2.5.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>#</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="Commentaire,Remarque,#" />
<meta http-equiv="Content-Type" content="text/php; charset=ISO-8859-1" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link type="text/css" href="default.css" rel="stylesheet" />
</head>
<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;" onload="AddTitleAndLangFlags();highlight();">
<div id="hmpopupDiv" style="visibility:hidden; position:absolute; z-index:1000;"></div>


<table width="100%" border="0" cellspacing="0" cellpadding="5" bgcolor="#FF8000">
  <tr valign="middle">
    <td align="left">
      <p class="p_Heading1"><span class="f_Heading1" style="font-size: 6pt; font-weight: normal;">&nbsp;</span></p>
      <p class="p_Heading1"><span id="titlepage" class="f_Heading1"></span></p>
    </td>
	<td align="center">
     <div id="langflags"></div>
    </td>
    <td align="right">
     <span style="font-size: 9pt">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="generer_le_decoupage.php">Previous</a>&nbsp;
     <a href="apply.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p style="background: #fffff2;"><span style="color: #000000;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">To make formulas more readable, you can insert comment lines. To create a comment line, simply insert a </span><span style="font-family: 'Courier New'; color: #0000ff;">#</span><span style="color: #000000;"> sign as the first non-blank character of the line.</span></p>
<p style="background: #fffff2;"><span style="font-size: 11pt; color: #000000;">&nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Afin de rendre les formules plus lisibles, vous pouvez y insérer des lignes de commentaires. Il suffit de faire débuter la ligne par le signe <span style="color: #0000ff;">#</span> pour qu'une ligne soit considérée comme une ligne de commentaire. Vous pouvez, si vous le souhaitez, faire précéder ce caractère <span style="color: #0000ff;"># </span>par un nombre quelconque d'espaces.</p>
<p><span style="font-size: 11pt;">&nbsp;</span></p>

</td></tr></table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p style="background: #fffff2;"><span style="color: #000000;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">Om formules overzichtelijker te maken en meer leesbaar, kan u commentaar lijnen toevoegen.Om deze aan te maken is het voldoende om een </span><span style="font-family: 'Courier New'; color: #0000ff;">#</span><span style="color: #000000;"> teken voor de lijn te plaatsen.</span></p>
<pstyle="background: #fffff2;"><span style="color: #000000;">Hierdoor zal Winpro deze lijn niet mee opnemen in de uitvoering.</span></p>
<p style="background: #fffff2;"><span style="font-size: 11pt; color: #000000;">&nbsp;</span></p>

</td></tr></table>
</div>
</body>
</html>
