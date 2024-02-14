<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Axis computation","Calcul d'axe"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?voltabliercalculaxe.php"; }
else { parent.quicksync('a6.2.6'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Axis computation</title>
  <meta name="keywords" content="">
  <meta http-equiv="Content-Type" content="text/php; charset=iso-8859-1">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <link type="text/css" href="default.css" rel="stylesheet">
</head>

<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;"
onload=" AddTitleAndLangFlags();highlight();">

<div id="hmpopupDiv"
style="visibility:hidden; position:absolute; z-index:1000;">
</div>

<table width="100%" border="0" cellspacing="0" cellpadding="5"
bgcolor="#FF8000">
  <tbody>
    <tr valign="middle">
      <td align="left"><p class="p_Heading1"><span id="titlepage"
        class="f_Heading1"></span></p>
      </td>
      <td align="center">
        <div id="langflags">
        </div>
      </td>
      <td align="right"><span style="font-size: 9pt"><a
        href="introduction.php">Top</a>  <a
        href="voltablierquestions.php">Previous</a>  <a
        href="voltabliervariables.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left">
	  
        <p>This page allows to redefine by rules the rolled heights of the roller shutter curtain, as defined into the <span style="font-style: italic;"><a href="voltablierdescription.php">Description</a></span> page of the curtain, in case fixed values are not suitable. Rolled heights from roller shutter curtains are modified through variables <span class="f_Variables">RolledHeight1</span> to <span class="f_Variables">RolledHeight9</span>, local to the curtain.</p>
	  
        <p style="text-indent: -1px; margin: 0px 0px 0px 49px;"><span
        class="f_Textestd"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0940eng.jpg"
        width="1031" height="327" border="0" alt="clip0940eng"></p>
		
        <p style="text-indent: -1px; margin: 0px 0px 0px 1px;"><span
        class="f_Textestd"> </span></p>

  	    <p>See <a href="9_1_0_x.php">release note version 9.1.0</a> for more details.</p>

	    <p style="text-indent: -1px; margin: 0px 0px 0px 1px;"><span
        class="f_Textestd"> </span></p>

        <p style="text-indent: -1px; margin: 0px 0px 0px 1px;"><span
        class="f_Textestd"> </span></p>

        <p style="text-indent: -1px; margin: 0px 0px 0px 1px;"><span
        class="f_Textestd"> </span></p>

        <p style="text-indent: -1px; margin: 0px 0px 0px 1px;"><span
        class="f_Textestd"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left">

	  <p>Cette page permet de redéfinir par formule les hauteurs d'enroulement du tablier de volet roulant, telles que définies dans l'onglet <span style="font-style: italic;"><a href="voltablierdescription.php">Description</a></span> du tablier. Ces hauteurs peuvent être modifiée via les variables <span class="f_Variables">HauteurEnroulement1</span> à <span class="f_Variables">HauteurEnroulement</span>, locales au tablier.</p>
	  
        <p style="text-indent: -1px; margin: 0px 0px 0px 49px;"><span
        class="f_Textestd"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0940fra.jpg"
        width="1094" height="437" border="0" alt="clip0940fra"></p>
		
        <p style="text-indent: -1px; margin: 0px 0px 0px 49px;"><span
        class="f_Textestd"> </span></p>

	  <p>Voir <a href="9_1_0_x.php">note de version 9.1.0</a> pour plus de détails.</p>

	  <p style="text-indent: -1px; margin: 0px 0px 0px 49px;"><span
        class="f_Textestd"> </span></p>

		<p style="text-indent: -1px; margin: 0px 0px 0px 49px;"><span
        class="f_Textestd"> </span></p>

        <p style="text-indent: -1px; margin: 0px 0px 0px 1px;"><span
        class="f_Textestd"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
