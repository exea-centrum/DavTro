<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Colours","Couleurs"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?couleur.php"; }
else { parent.quicksync('a4.3'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Couleurs</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Couleur" />
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
     <a href="questionsglobalesquestions.php">Previous</a>&nbsp;
     <a href="couleursdescription.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p style="background: #fffff2;"><span style="color: #000000;">The colour table lets you define standard colours in WinPro. You can assign an RGB (Red, Green, Blue) value to each colour, or a bitmap to make a texture.</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">To each colour you can associate an 'inner colour'. This is mainly for PVC bicolour profiles.</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">Finally, you can associate a 'pen colour' to each colour; this will be used to draw the frame outlines.</span></p>
<p>&nbsp;</p>
<p style="text-align: center;"><img src="img/clip0104eng.jpg" width="566" height="401" border="0" alt="clip0104eng"></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span style="font-weight: bold;">Colour code</span><span style="color: #000000;">: The colour's code. This information must be unique for each colour. It will replace <a href="macros___.php">macro #1#</a> in the description of profiles and articles.</p>
<p>&nbsp;</p>
<p><span style="font-size: 12pt; font-family: 'Times New Roman';">&nbsp;</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>La table des couleurs permet de définir la liste des couleurs disponibles dans WinPro. Vous pouvez lier à chaque couleur soit une valeur RVB (rouge, vert, bleu), soit un bitmap qui représente une texture. </p>
<p>Vous pouvez associer à chaque couleur une 'couleur intérieure'. Cette notion est utilisée principalement pour le PVC bicolore.</p>
<p>Enfin, vous pouvez associer à chaque couleur une 'couleur de trait', dans laquelle seront tracées les lignes de séparation.</p>
<p>&nbsp;</p>
<p style="text-align: center;"><img src="img/clip0291eng.jpg" width="566" height="401" border="0" alt="clip0291eng"></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span style="font-weight: bold;">Code</span>: le code de la couleur. Cette information doit être différente pour chaque couleur. </td></tr></table></div><p>C'est ce code qui remplace la <a href="macros___.php">macro #1#</a> lorsque celle-ci est mentionnée dans la description de profils et d'articles.</p>
<p>&nbsp;</p>
<p><span style="font-size: 12pt; font-family: 'Times New Roman';">&nbsp;</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
