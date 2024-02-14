<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Round up glazing","Arrondi"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?fouarrondi.php"; }
else { parent.quicksync('a7.18.3'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Arrondi</title>
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
        href="foucommlivr.php">Previous</a>  <a
        href="groupesusinages.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span class="f_Textestd">This tab allows to apply a
        formula onto glazings from this supplier, for surface
        computations.</span></p>

        <p><span class="f_Textestd">The result will be stored into variable Le
        résultat sera stocké dans la variable </span><span
        class="f_Variables">RoundedSurface</span><span class="f_Textestd">.
        </span></p>

        <p><span class="f_Textestd">If the variable computed is not null,
        WinPro will use this value for pricing the glass unit, otherwise the
        default computation will be used.</span></p>

        <p><span class="f_Textestd">Refer to <a href="8_0_4_x.php">release note
        version 8.04</a>.</span></p>
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
      <td align="left"><p><span class="f_Textestd">Cet onglet permet
        d'appliquer une formule sur les vitrages liés à ce fournisseur afin
        d'en calculer la surface. </span></p>

        <p><span class="f_Textestd">Le résultat sera stocké dans la variable
        </span><span class="f_Variables">SurfaceArrondie</span><span
        class="f_Textestd">. </span></p>

        <p><span class="f_Textestd">Si la variable calculée dans la formule
        n'est pas nulle, WinPro utilisera cette valeur pour calculer son prix
        de vitrage, sinon c'est la surface calculée par le programme qui sera
        utilisée.</span></p>

        <p><span class="f_Textestd">Reportez vous à la <a
        href="8_0_4_x.php">note de version 8.04</a>.</span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
