<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Main Components","Composants de base","Basis onderdelen"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?composantsdebase.php"; }
else { parent.quicksync('a4'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Composants de base</title>
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
        href="introduction.php">Top</a>  <a href="macros___.php">Previous</a> 
        <a href="filtres.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<p style="background: #fffff2;"><span
style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>

<p style="background: #fffff2;"><span
style="font-size: 5pt; color: #000000;"> </span></p>

<p style="background: #fffff2;"><span style="color: #000000;">To create a
window or a roller shutter, you must first define basic components. WinPro has
a few categories of such components: <a href="articles.php">Articles</a>, <a
href="profils.php">Profiles</a>, <a href="maindoeuvre.php">Labour</a>, <a
href="couleur.php">Colours</a>, <a href="dessinwinpro.php">Drawings</a>, <a
href="systemes.php">Systems</a>. These components use other types of
components: e.g., articles will reference <a
href="fournisseur.php">suppliers</a>, <a href="categoriesarticle.php">article
categories</a>, <a href="devises.php">currencies</a>, ...</span></p>

<p style="background: #fffff2;"><span
style="font-size: 5pt; color: #000000;"> </span></p>

<p style="background: #fffff2;"><span style="color: #000000;">The main basic
components are described in the following pages.</span></p>

<p style="background: #fffff2;"><span style="color: #000000;"> </span></p>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>Pour définir une menuiserie, il faut d'abord disposer de ses
        composants de base. Il existe dans WinPro quelques composants de ce
        type: <a href="articles.php">Articles</a>, <a
        href="profils.php">Profils</a>, <a href="maindoeuvre.php">Main
        d'oeuvre</a>, <a href="couleur.php">Couleurs</a>, <a
        href="dessinwinpro.php">Dessins</a>, <a
        href="systemes.php">Systèmes</a>. Ces composants peuvent eux-même
        nécessiter d'autres composants pour leur définition: p.ex, les articles
        vont contenir des références aux <a
        href="fournisseur.php">fournisseurs</a>, <a
        href="categoriesarticle.php">catégories d'articles</a>, <a
        href="devises.php">devises</a>, ...</p>

        <p>La description de ces composants de base se trouve dans les pages
        suivantes.</p>

        <p> </p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>

<div class="NED">
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

       <p>Als u een raam, deur of een rolluik wil maken, moet u eerst 
	      basiscomponenten definiëren.WinPro heeft een paar categorieën van dergelijke
          componenten: <a href="profils.php">Profielen</a>,<a href="articles.php">Artikels ,</a>,
          <a href="maindoeuvre.php">Arbeid</a>, <a href="couleur.php">Kleuren</a>, 
		  <a href="dessinwinpro.php">Tekeningen</a>, <a href="systemes.php">Systemen</a>.Deze componenten 
		  maken gebruik van andere soorten componenten: bijvoorbeeld artikelen zullen verwijzen naar <a
          href="fournisseur.php">leveranciers</a>, <a
          href="categoriesarticle.php">artikel categorieën</a>, <a
          href="devises.php">munteenheden</a>, ...</p>

          <p> De belangrijkste basiscomponenten worden beschreven op de volgende
              pagina's.</p>
       <p> </p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>


</body>
</html>
