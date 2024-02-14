<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Drawing Instructions" ,"Instructions de Dessin","Tekening Instructies"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?instructions_de_dessin.php"; }
else { parent.quicksync('a2.6'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>

<title>Instructions de dessin</title>
<meta name="generator" content="Help &amp; Manual" />
<meta name="keywords" content="Dessin" />
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
     <a href="vuecoupe.php">Previous</a>&nbsp;
     <a href="alignetexte.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>WinPro lets you define custom drawings, which are stored in the <a href="dessinwinpro.php">drawings table</a>. Each drawing is defined with a set of instructions, &nbsp;using a language whose syntax is similar to the main computation language. Simply, this drawing language defines graphical extensions, to let you draw lines, curves, rectangles, bitmaps, etc...</p>
<p>&nbsp;</p>
<p>The drawings mentioned ahead are additional layers to existing frame drawing, processed by WinPro. For instance handles, hinges, ventilator, glazing bars etc...</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>WinPro vous permet de créer vos propres dessins, et de les stocker dans la <a href="dessinwinpro.php">table des dessins</a>. Chaque dessin est défini par une suite d'instructions, dont la syntaxe est celle du langage de paramétrage de WinPro. Mais vous disposez en plus d'une série d'instructions graphiques, qui permettent de dessiner des lignes, courbes, rectangles et autres formes, d'afficher des images bitmaps, ...</p>
<p>&nbsp;</p>
<p>Lorsque nous parlons de dessin il s'agit des poignées, charnières, paumelles, et autres accessoires de quincailleries, aérateurs, remplissages, croisillons, voir même le dessin des différents cadres constituant la fenêtre.</p>

</td></tr></table>
</div>
<div class="NED">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>WinPro staat u toe om standaard tekeningen te definiëren,deze zijn opgeslagen in een <a href="dessinwinpro.php"> tekening tabel</a>.Elke tekening wordt bepaald door een set van instructies,&nbsp;gebruikmakend van een taal waarvan de syntax overeenkomt met deze van de algemene taal in Winpro. Eenvoudigweg, de tekening instructies definiëren uw grafische uitbreidingen, om u toe te staan lijnen,bogen,rechthoeken,bitmaps,enz... te tekenen.</p>
<p>&nbsp;</p>
<p>Deze besproken tekeningen zijn bijkomende lagen op de standaard bestaande Winpro tekening. Voorbeeld, raamkrukken, scharnieren, ventilatoren, kruisroedes enz..</p>

</td></tr></table>
</div>
</body>
</html>
