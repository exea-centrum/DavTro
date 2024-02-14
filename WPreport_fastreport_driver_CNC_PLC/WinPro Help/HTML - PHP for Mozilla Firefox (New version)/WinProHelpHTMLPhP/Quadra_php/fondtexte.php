<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["TextBackGround","FondTexte"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?fondtexte.php"; }
else { parent.quicksync('a2.6.19'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>FondTexte</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="FondTexte" />
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
     <a href="supprimertransformation.php">Previous</a>&nbsp;
     <a href="fonte.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p class="p_Interligne"><span style="color: #000000;">This instruction changes the text background colour.</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="color: #000000; text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">TextBackground (colour name)</span></p>
<p class="p_Interligne" style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;">TextBackground (red level, green level, blue level)</span></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="color: #000000; text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">textMode (opaque)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">textColour (white)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">textBackground (blue)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">Text (100, 100, Blue)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">textBackground (160, 0, 0)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-family: 'Courier New'; color: #0000ff;">Text (100, 150, Red)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0058.jpg" width="78" height="95" border="0" alt="clip0058"></p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 12px;"><span style="font-weight: bold; text-decoration: underline;">Remarque</span><span style="text-decoration: underline;">:</span></p>
<p style="margin: 0px 0px 0px 12px;"><span style="color: #000000;">This instruction has no effect when the text mode is '</span><span class="f_Variables">Transparent</span><span style="color: #000000;">' (see <a href="modetexte.php">TextMode</a>). Be aware that, by default, the </span><span class="f_Variables">Transparent</span><span style="color: #000000;"> text mode is active. So, if you need a coloured text background, you also need to turn the text mode to '</span><span class="f_Variables">Opaque</span><span style="color: #000000;">'.</span></p>
</td>
</tr>
</table>
</div>
<p><span style="font-family: 'Courier New'; color: #0000ff;">&nbsp;</span></p>
<p>&nbsp;</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cette instruction modifie la couleur de fond du texte. </p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">FondTexte (</span><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;"><a href="couleurs.php">nom_couleur</a></span><span class="f_Variables" style="font-weight: bold;">)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">FondTexte (</span><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;"><a href="couleurs.php">niveau_Rouge</a></span><span class="f_Variables" style="font-weight: bold;">, </span><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;"><a href="couleurs.php">niveau_Vert</a></span><span class="f_Variables" style="font-weight: bold;">, </span><span style="font-family: 'Courier New'; font-weight: bold; color: #0000ff;"><a href="couleurs.php">niveau_Bleu</a></span><span class="f_Variables" style="font-weight: bold;">)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">ModeTexte (Opaque)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">CouleurTexte (Blanc)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">FondTexte (Bleu)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Texte (100, 100, Blue)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">FondTexte (160, 0, 0)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Texte (100, 150, Red)</span></p>
<p style="margin: 0px 0px 0px 24px;"><img src="img/clip0058.jpg" width="78" height="95" border="0" alt="clip0058"><span style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"> </span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 13px;"><span style="font-weight: bold; text-decoration: underline;">Remarque</span><span style="text-decoration: underline;">:</span></p>
<p style="margin: 0px 0px 0px 13px;">Cette instruction est sans effet sur les textes en mode "<span class="f_Variables">Transparent</span>" (voir <a href="modetexte.php">ModeTexte</a>). Attention, par défaut, c'est le mode "<span class="f_Variables">Transparent</span>" qui est activé. Il est donc indispensable, si vous voulez modifier la couleur de fond d'un texte, de spécifier que vous allez travailler en mode "<span class="f_Variables">Opaque</span>".</p>
</td>
</tr>
</table>
</div>
<p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
