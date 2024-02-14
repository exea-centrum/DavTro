<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Date Functions","Fonctions de Date","Datum functies"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?fonctions_de_date.php"; }
else { parent.quicksync('a2.4.2'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>Fonctions de date</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="Date,Jour,Mois,Annee,Semaine,IncJours,IncMois,IncAnnee,Bissextile" />
<meta http-equiv="Content-Type" content="text/php; charset=ISO-8859-1" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link type="text/css" href="default.css" rel="stylesheet" />
</head>
<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;" onload="AddTitleAndLangFlags();highlight();">
<div id="hmpopupDiv" style="visibility:hidden; position:absolute; z-index:1000;"></div>


<table width="100%" border="0" cellspacing="0" cellpadding="5" bgcolor="#FF8000">
  <tr valign="middle">
    <td align="left">
      <p class="p_Heading1"><span class="f_Heading1" style="font-size: 6pt; font-weight: normal;">&nbsp;</span></p>
      <p class="p_Heading1"><span id="titlepage" class="f_Heading1"></span></p>
    </td>
	<td align="center">
     <div id="langflags"></div>
    </td>
    <td align="right">
     <span style="font-size: 9pt">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="valeur_absolue.php">Previous</a>&nbsp;
     <a href="annee.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p style="background: #fffff2;"><span style="color: #000000;">Date functions let you use date information in your computations (e.g. to define the limit date for a special discount; to temporarily disable a computation method, ...).</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">All dates are stored as simple numbers; the gap between two consecutive dates is always 1. This makes date arithmetic particularly simple.</span></p>
<p style="background: #fffff2;"><span style="font-size: 5pt; color: #000000;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">See also the date variables in the <a href="variablesgenerale.php">General variables</a> section.</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>Les fonctions de date vous permettent de tenir compte de diverses dates dans vos calcul (p.ex. pour définir la limite de validité d'une remise; pour désactiver une méthode de calcul avant ou après une certaine date; ...).</p>
<p>Toutes les dates sont stockées comme de simple nombres; l'écart entre deux dates consécutives est toujours de 1. Cela rend les calculs arithmétiques sur les dates particulièrement simples.</p>
<p>&nbsp;</p>
<p>Consultez également les variables de date dans la section <a href="variablesgenerale.php">Variables générales</a>.</p>

</td></tr></table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p style="background: #fffff2;"><span style="color: #000000;">Datum functies staan u toe datum informatie te gebruiken in uw berekeningen (vb. om te bepalen wanneer een speciale korting niet meer van toepassing is; of om tijdelijk een deel van de parametrage uit te schakelen, ...).</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">Alle datums worden opgeslagen als eenvoudige nummers; de spatie tussen twee opeenvolgende datums is steeds 1. Dit maakt de rekenkundige bewerkingen hiervan simpel.</span></p>
<p style="background: #fffff2;"><span style="font-size: 5pt; color: #000000;">&nbsp;</span></p>
<p style="background: #fffff2;"><span style="color: #000000;">Zie ook de datum variabelen in de <a href="variablesgenerale.php">Algemene variabelen</a> sectie.</span></p>

</td></tr></table>
</div>
</body>
</html>
