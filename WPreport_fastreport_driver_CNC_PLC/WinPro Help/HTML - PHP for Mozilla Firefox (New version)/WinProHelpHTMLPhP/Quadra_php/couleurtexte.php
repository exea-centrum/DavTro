<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["TextColour","CouleurTexte"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?couleurtexte.php"; }
else { parent.quicksync('a2.6.11'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>CouleurTexte</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="CouleurTexte" />
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
     <a href="cote1cote2cote3cote4.php">Previous</a>&nbsp;
     <a href="couleurtrait.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p><span style="color: #000000;">&nbsp;</span></p>
<p>This instruction changes the current text colour.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">TextColour (</span><span class="f_Variables" style="font-weight: bold; text-decoration: underline;">colour name</span><span class="f_Variables" style="font-weight: bold;">)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">TextColour (</span><span class="f_Variables" style="font-weight: bold; text-decoration: underline;">red level</span><span class="f_Variables" style="font-weight: bold;">, </span><span class="f_Variables" style="font-weight: bold; text-decoration: underline;">green level</span><span class="f_Variables" style="font-weight: bold;">, </span><span class="f_Variables" style="font-weight: bold; text-decoration: underline;">blue level</span><span class="f_Variables" style="font-weight: bold;">)</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span class="f_Interligne" style="font-weight: bold;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">TextColour (blue)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Text (100, 100, Blue)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">TextColour (160, 0, 0)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Text (100, 150, Red)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0052.jpg" width="80" height="94" border="0" alt="clip0052"></p>
<p style="margin: 0px 0px 0px 24px;">&nbsp;</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette instruction modifie la couleur du texte</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">CouleurTexte (</span><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;"><a href="couleurs.php">nom_couleur</a></span><span class="f_Variables" style="font-weight: bold;">)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">CouleurTexte (</span><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;"><a href="couleurs.php">niveau_Rouge</a></span><span class="f_Variables" style="font-weight: bold;">, </span><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;"><a href="couleurs.php">niveau_Vert</a></span><span class="f_Variables" style="font-weight: bold;">, </span><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;"><a href="couleurs.php">niveau_Bleu</a></span><span class="f_Variables" style="font-weight: bold;">)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CouleurTexte (Blue)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Texte (100, 100, Blue)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CouleurTexte (160, 0, 0)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Texte (100, 150, Red)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0052.jpg" width="80" height="94" border="0" alt="clip0052"></p>
<p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
