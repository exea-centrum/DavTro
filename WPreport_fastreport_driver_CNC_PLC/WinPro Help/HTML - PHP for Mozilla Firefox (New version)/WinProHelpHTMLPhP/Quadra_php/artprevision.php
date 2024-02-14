<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Forecast","Pr&#233;visions"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?artprevision.php"; }
else { parent.quicksync('a4.5.9'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Prévisions</title>
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
        href="artconsommation.php">Previous</a>  <a href="artdxf.php">Next</a>
        </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>This page shows you future stock movements, sorted by increasing date.
		You have a view of the remaining stock after each movement. When the foreseen
        stock is negative, the corresponding line is shown in white on
        red. This tab is available if you use corresponding stock management module.</p>

        <p style="text-align: center;"><img src="img/clip0101eng.jpg" width="610"
        height="140" border="0" alt="clip0101eng"></p>
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
      <td align="left"><p> </p>

        <p>Cet onglet vous donne une vue sur les futurs mouvements de stock,
        triés par date croissante, et sur le stock restant, après chacun des
        mouvements. Si le stock passe en négatif, les lignes correspondantes
        sont affichées en rouge. Cet onglet n'est accessible que si vous
        disposez d'un module de gestion de stock.</p>

        <p style="text-align: center;"><img src="img/clip0101.jpg" width="610"
        height="140" border="0" alt="clip0101"></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
