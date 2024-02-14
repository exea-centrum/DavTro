<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Formula","Formules"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?sysformula.php"; }
else { parent.quicksync('a4.4.4'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Formules</title>
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
    </td>
    <td align="right">
     <span style="font-size: 9pt">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="sysmillings.php">Previous</a>&nbsp;
     <a href="sysintextview.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>This tab contains a single text field where you can set a formula specificalloy for this system.</p>
<p>It will be run previously to any component computation.</p>
<p>Refer to page <span style="color: #0000ff;"><a href="formulesysteme.php">System Formula</a></span> for more details.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p><span style="font-weight: bold; text-decoration: underline;">Note</span>: </p>
<p>A Filter tab is not necessary at system level, filters may be set within this system formula.</p>
<p> Refer to page about <a href="filtres.php">filters</a> for more details about the feature.  </p>
</td>
</tr>
</table>
</div>
<p>&nbsp;</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Cet onglet ne comporte qu'une seule zone dans laquelle vous pouvez saisir une formule propre au système.</p>
<p>Cette formule sera exécutée avant tout calcul de composants.</p>
<p>Voyez la page <span style="color: #0000ff;"><a href="formulesysteme.php">Formule système</a></span> pour plus d'informations.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p><span style="font-weight: bold; text-decoration: underline;">Remarque</span>: </p>
<p>Nous n'avons pas ajouter d'onglet Filtre dans le système, celui-ci aurait fait double emploi. Vous pouvez donc paramétrer la notion de filtre d'un système dans cette formule.</p>
<p> Consultez la page traitant des <a href="filtres.php">filtres</a> pour plus d'informations à ce sujet.  </p>
</td>
</tr>
</table>
</div>
<p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
