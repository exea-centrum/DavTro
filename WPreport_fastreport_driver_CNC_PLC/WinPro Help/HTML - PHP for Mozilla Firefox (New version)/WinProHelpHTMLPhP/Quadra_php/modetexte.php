<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["TextMode","ModeTexte"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?modetexte.php"; }
else { parent.quicksync('a2.6.23'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>ModeTexte</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="ModeTexte" />
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
     <a href="ligne.php">Previous</a>&nbsp;
     <a href="nombre.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p style="background: #fffff2;">&nbsp;</p>
<p>This instruction changes the way the text background is drawn. It takes a single parameter, which will be either <span class="f_Variables">Opaque</span> (the text background erases whatever is beneath) or <span class="f_Variables">Transparent</span> (The background remains unchanged).</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">TextMode (transparent)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">TextMode (opaque)</span></p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brush (Colour, Blue)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Bar (0,0, Width, Height)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">TextMode (Opaque)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">TextBackground (LightYellow)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CouleurTexte (Bleu)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Texte (100, 100, Opaque)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">TextMode (Transparent)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">TextColour (LightYellow)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Texte (100, 150, Transparent)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0062.jpg" width="140" height="116" border="0" alt="clip0062"></p>
<p>&nbsp;</p>

</td></tr></table>
</div>


<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette instruction modifie le mode de traçage du fond du texte. L'instruction prend un seul paramètre, qui peut prendre soit la valeur <span class="f_Variables">opaque</span> (le texte est écrit sur un fond de couleur) soit la valeur <span class="f_Variables">transparent</span> (le fond reste inchangé sous le texte)</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">ModeTexte (transparent)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">ModeTexte (opaque)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Brosse (Pleine, Bleu)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Barre (0,0, Largeur, Hauteur)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">ModeTexte (Opaque)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">FondTexte (JauneClair)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CouleurTexte (Bleu)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Texte (100, 100, Opaque)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">ModeTexte (Transparent)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CouleurTexte (JauneClair)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Texte (100, 150, Transparent)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0062.jpg" width="140" height="116" border="0" alt="clip0062"></p>
<p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
