<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Slope","Inclinaison","Kantelen"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?inclinaison.php"; }
else { parent.quicksync('a2.4.5.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>Inclinaison</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="Inclinaison" />
<meta http-equiv="Content-Type" content="text/php; charset=ISO-8859-1" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link type="text/css" href="default.css" rel="stylesheet" />
</head>
<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;" onload="AddTitleAndLangFlags();highlight();">
<div id="hmpopupDiv" style="visibility:hidden; position:absolute; z-index:1000;"></div>


<table width="100%" border="0" cellspacing="0" cellpadding="5" bgcolor="#FF8000">
  <tr valign="middle">
    <td align="left">
      <p class="p_Heading1"><span id="titlepage" class="f_Heading1"></span></p>
    </td>
	<td align="center">
     <div id="langflags"></div>
    </td>
    <td align="right">
     <span style="font-size: 9pt">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="fonctions_graphiques.php">Previous</a>&nbsp;
     <a href="decoupage_darc.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>This function returns the angle defined by a straight line passing by 2 points and a straight horizontal line, expressed in degrees.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Slope (x1,y1,x2,y2)</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Example:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">a := Slope (x1,y1,X2,Y2)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">b := 90 - Slope (x1,y1,x2,y2)</span></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 13px;"><img src="img/clip0001.jpg" width="475" height="208" border="0" alt="clip0001"></p>
<p style="margin: 0px 0px 0px 13px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="559" style="width: 559px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 10px;"><span style="font-weight: bold; text-decoration: underline;">Note:</span></p>
<p style="margin: 0px 0px 0px 10px;">Onto the above sample, when angle <span class="f_Variables">a</span> is 30°, the <span class="f_Variables">Slope () </span>function will return <span class="f_Variables">-30</span> as the computation runs clockwise.</p>
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
<p>Cette fonction renvoie l'angle formé par une droite passant par 2 points et une droite représentant l'horizon.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntaxe:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Inclinaison (x1,y1,x2,y2)</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Exemple:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">a := Inclinaison (x1,y1,X2,Y2)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">b := 90 - Inclinaison (x1,y1,x2,y2)</span></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 13px;"><img src="img/clip0164.gif" width="475" height="208" border="0" alt="Clip0164"></p>
<p style="margin: 0px 0px 0px 13px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 9px;"><span style="font-weight: bold; text-decoration: underline;">Remarque:</span></p>
<p style="margin: 0px 0px 0px 9px;">Si l'angle <span class="f_Variables">a</span> représenté dans l'exemple ci-dessus vaut 30°, la fonction Inclinaison enverra la valeur <span class="f_Variables">-30</span> dans ce cas, car on va dans le sens horlogique.</p>
</td>
</tr>
</table>
</div>

</td></tr></table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Deze functie geeft de hoek bepaald door een rechte lijn die met 2 punten en een rechte horizontale lijn, uitgedrukt in graden.</p>
<p style="margin: 0px 0px 0px 27px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Syntax:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables" style="font-weight: bold;">Slope (x1,y1,x2,y2)</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="text-decoration: underline;">Voorbeeld:</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">a := Slope (x1,y1,X2,Y2)</span></p>
<p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">b := 90 - Slope (x1,y1,x2,y2)</span></p>
<p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 13px;"><img src="img/clip0001.jpg" width="475" height="208" border="0" alt="clip0001"></p>
<p style="margin: 0px 0px 0px 13px;"><span style="font-size: 5pt;">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="559" style="width: 559px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 10px;"><span style="font-weight: bold; text-decoration: underline;">Opmerking:</span></p>
<p style="margin: 0px 0px 0px 10px;">In bovenstaand voorbeeld, indien de hoek <span class="f_Variables">a</span> 30° is, zal de <span class="f_Variables">Slope () </span>functie de waarde <span class="f_Variables">-30</span> geven als de berekening in klokwijzerzin gebeurd.</p>
</td>
</tr>
</table>
</div>

</td></tr></table>
</div>

</body>
</html>
