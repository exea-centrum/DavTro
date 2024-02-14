<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["CopyShape","CopierForme"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?copierforme.php"; }
else { parent.quicksync('a2.5.5.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>CopierForme</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="CopierForme" />
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
     <a href="manipulation_de_formes.php">Previous</a>&nbsp;
     <a href="couperformehorizontalement.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>This function copies the source shape to the destination shape. If the source is not defined, so will be the destination. If a shape already exists at destination, it will be overwritten.</p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">CopyShape (source, destination)</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example :</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Copy shape 1 to shape 20 </span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CopyShape (1, 20)</span></p>
<p style="background: #fffff2;"><span style="font-size: 5pt; color: #000000;">&nbsp;</span></p>
<p>&nbsp;</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette fonction copie la forme dont l'index est source vers la forme dont l'index est destination. Si la forme source n'est pas d�finie, la forme destination ne le sera pas non plus. Si la forme destination existe d�j�, elle sera remplac�e par la forme source.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">CopierForme (source, destination)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple :</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Copier la forme 1 vers la forme 20</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CopierForme (1, 20)</span></p>
<p style="margin: 0px 0px 0px 24px;">&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
