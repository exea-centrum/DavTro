<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Simple variants","Variantes simples"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?faq5a.php"; }
else { parent.quicksync('a10.5.1'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Variantes simples</title>
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
        href="introduction.php">Top</a>  <a href="faq5.php">Previous</a>  <a
        href="faq5b.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p class="p_Textestd"><span class="f_Textestd">The valuation for a simple variant, as a colour variant for
	  instance, is based onto settings defined for the main window. Winpro does not recompute the rules for questions.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">This is meaning that if the answers to questions have to vary according the
		colour, the capital gain computation may be strongly altered.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Solution: Force the user to create a variant by right clicking onto the main
		window (full variant)</span></p>
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
      <td align="left"><p class="p_Textestd"><span class="f_Textestd">La
        valorisation d'une variante simple telle qu'une variante de couleur se
        base sur les paramètres saisis au niveau du repère principal. Winpro ne
        recalcule pas les formules de question.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Autrement dit, si des
        valeurs de questions sont censées être modifiées en fonction de la
        teinte, le calcul de la plus value risque fortement d'être
        faussée.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Solution: Obliger les
        utilisateurs à saisir leurs variantes à l'aide du clic droit sur le
        code du repère (variante complète)</span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
