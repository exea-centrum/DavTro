<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Indent & Style","Indentation & style"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?indentation_style.php"; }
else { parent.quicksync('a2.7.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Indentation &amp; style</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Indentation,Style" />
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
     <a href="texture.php">Previous</a>&nbsp;
     <a href="langues.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>The format of the rules is standardized, for indentation and presentation styles of instructions and variables (uppercase or lowercase). </p>
<p>You may right clic with the mouse to choose the appropriate style.</p>
<p>You may also define default values into <span style="font-style: italic;">WinPro.ini </span>file or <span style="font-style: italic;">settings </span>table, adding those keys into the <span style="color: #000000;"> </span><span class="f_Winproini" style="color: #000000;">[Interpretor]</span> section :</p>
<p style="margin: 0px 0px 0px 45px;"><span class="f_Winproini">Style=x</span><span class="f_Variables"> &nbsp; ; x is worth 0 for lowercase display</span></p>
<p style="margin: 0px 0px 0px 45px;"><span class="f_Variables"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 for a mix of uppercase/lowercase </span></p>
<p style="margin: 0px 0px 0px 45px;"><span class="f_Variables"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2 for an uppercase display</span></p>
<p style="margin: 0px 0px 0px 45px;"><span class="f_Variables"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ; default value : 1</span></p>
<p style="margin: 0px 0px 0px 45px;"><span class="f_Winproini">Indent=y</span><span class="f_Variables">  ; y contains the number of space characters for each indent level (1 à 8)</span></p>
<p style="margin: 0px 0px 0px 45px;"><span class="f_Variables"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ; default value : 3</span></p>
<p><span style="font-family: 'Tahoma'; color: #000000;">&nbsp;</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table cellspacing="0" cellpadding="0" border="0" style="border: none border-spacing:0px;">
<tr valign="top" align="left">
<td width="311" style="width: 311px;"><p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="text-decoration: underline;">Indentation:</span></p>
<p>&nbsp;</p>
<p>The formulae editor lets you adjust the indentation as needed. The indentation is moving the selected text onto the left or the right of the page. This makes the code easier to read with raising up the structure.</p>
<p>Onto the right hand sample, the indent level is set to 3, so that WinPro moves the <span class="f_Variables">Fail </span>instruction of 3 space characters.</p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p>&nbsp;</p>
</td>
<td width="548" style="width: 548px;"><p><img src="img/clip0005eng.jpg" width="247" height="377" border="0" alt="clip0005"></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="311" style="width: 311px;"><p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 2pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="text-decoration: underline;">Style:</span></p>
<p>&nbsp;</p>
<p>Winpro offers 3 different ways to format the rule code.</p>
<p>&nbsp;</p>
</td>
<td width="548" style="width: 548px;"><p><img src="img/clip0006eng.jpg" width="274" height="332" border="0" alt="clip0006"></p>
</td>
</tr>
</table>
</div>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>La mise en forme des formules a été automatisé, au niveau de l'indentation des formules, et du style de présentation des instructions et variables (majuscules ou minuscules). </p>
<p>Cliquez avec le bouton droit de la souris pour choisir le style qui vous convient. </p>
<p>Vous pouvez aussi définir des valeurs par défaut dans WinPro.ini, en ajoutant dans la section<span style="color: #000000;"> </span><span class="f_Winproini" style="color: #000000;">[Interpretor]</span> les lignes suivantes :</p>
<p style="margin: 0px 0px 0px 45px;"><span class="f_Winproini">Style=x</span><span class="f_Variables"> &nbsp; ; x vaut 0 pour un affichage en minuscules</span></p>
<p style="margin: 0px 0px 0px 45px;"><span class="f_Variables"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 pour un mélange majuscule/minuscule </span></p>
<p style="margin: 0px 0px 0px 45px;"><span class="f_Variables"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2 pour un affichage en majuscules </span></p>
<p style="margin: 0px 0px 0px 45px;"><span class="f_Variables"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ; valeur par défaut : 1</span></p>
<p style="margin: 0px 0px 0px 45px;"><span class="f_Winproini">Indent=y</span><span class="f_Variables">  ; y contient le nombre d'espaces pour chaque niveau </span></p>
<p style="margin: 0px 0px 0px 45px;"><span class="f_Variables"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ; d'indentation (1 à 8)</span></p>
<p style="margin: 0px 0px 0px 45px;"><span class="f_Variables"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ; valeur par défaut : 3</span></p>
<p><span style="font-family: 'Tahoma'; color: #000000;">&nbsp;</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table cellspacing="0" cellpadding="0" border="0" style="border: none border-spacing:0px;">
<tr valign="top" align="left">
<td width="311" style="width: 311px;"><p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="text-decoration: underline;">L'indentation:</span></p>
<p>&nbsp;</p>
<p>L'éditeur de formule vous laisse la possibilité d'ajuster l'indentation. L'indentation décale une partie de texte à droite ou à gauche, par rapport au texte environnant. Ce qui rend la formule plus lisible en faisant ressortir la structure des formules.</p>
<p>Dans l'exemple de droite, l'indentation à une valeur de 3, Winpro décale la ligne "Quantite := NbrPatte" de 3 espaces.</p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p>&nbsp;</p>
</td>
<td width="548" style="width: 548px;"><p><img src="img/clip0346.jpg" width="181" height="290" border="0" alt="clip0346"></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="311" style="width: 311px;"><p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 2pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="text-decoration: underline;">Le style:</span></p>
<p>&nbsp;</p>
<p>Winpro vous propose 3 possibilités de mise en forme du texte de vos formules.</p>
<p>&nbsp;</p>
</td>
<td width="548" style="width: 548px;"><p><img src="img/clip0347.gif" width="271" height="274" border="0" alt="clip0347"></p>
</td>
</tr>
</table>
</div>

</td></tr></table>
</div>

</body>
</html>
