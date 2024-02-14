<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Price List","Tarif"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?rehpricelist.php"; }
else { parent.quicksync('a5.5.7'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Tarif</title>
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
        href="introduction.php">Top</a>  <a href="rehlabour.php">Previous</a> 
        <a href="rehdxf.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p class="p_Textestd"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">This page lets you link one or more price table to each peripheral profile (or sill), 
		depending on the colour.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p style="text-align: center;"><img src="img/clip0252eng.jpg" width="458" height="336" border="0" alt="clip0252eng">
		
        <p style="text-align: center;"> </p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Minimum length</span><span
        class="f_Textestd">: The minimum length accepted for this peripheral profile (or sill).</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Lengths</span><span class="f_Textestd">: List of the lengths in the price table. 
		The gap between 2 dimensions may be variable.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Generate</span><span class="f_Textestd">: This button lets you fill automatically the lengths list, 
		with a constant increment:</span></p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"><span
        style="font-weight: bold;"> </span></p>

        <img src="img/clip0138eng.jpg" width="241" height="178" border="0" alt="clip0138eng"></p>
		
        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Colour groups</span><span
        class="f_Textestd">: If the peripheral profile (or sill) can be made in different colours, 
		you may have to define more than one price table (one per colour group). Type an arbitrary 
		number for each colour, with the same number for colours of the same price.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Use for cost price</span>: Check this box if the price grid is to be used when computing 
		the cost price of the window.</p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Use for selling price</span>: Check this box if the price grid is to be used when computing 
		the selling price of the window.</p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Input price</span>: Click this button to select and fill the price tables. 
		When you click, you first get a list of the colour groups you have defined:</p>
		

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"><span
        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';"> </span></p>

        <p class="p_Textestd" style="text-align: center;"><img
        src="img/clip0139eng.jpg" width="200" height="266" border="0"
        alt="clip0139eng"></p>

        <p class="p_Textestd"><span class="f_Textestd">Select one of the groups, then click OK; the next dialog opens, 
		in which you will type the prices:</span></p>

        <p style="text-align: center;"><img src="img/clip0171eng.jpg" width="520" height="345" border="0" alt="clip0171eng"></p>

        <p> </p>
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
      <td align="left"><p class="p_Textestd"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cet onglet vous permet
        de lier une grille de prix à chaque profil périphérique ou seuil, en
        fonction de sa couleur. </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p style="text-align: center;"><img src="img/clip0516.zoom87.gif"
        width="513" height="368" border="0" alt="clip0516"></p>

        <p style="text-align: center;"> </p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Longueur minimum</span><span
        class="f_Textestd">: Longueur minimum acceptée pour ce profil
        périphérique ou seuil.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Longueurs</span><span class="f_Textestd">:
        liste des longueurs définissant les colonnes de la grille de prix.
        L'écart entre deux longueurs peut varier si nécessaire.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Générer</span><span class="f_Textestd">: Ce
        bouton vous permet de remplir la liste des longueurs (avec un
        espacement constant).</span></p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"><span
        style="font-weight: bold;"> </span></p>

        <p style="text-align: center;"><img src="img/clip0138.jpg" width="210"
        height="154" border="0" alt="clip0138"></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Groupes de couleurs</span><span
        class="f_Textestd">: Si la rehausse peut être fabriquée dans plusieurs
        couleurs, vous aurez plusieurs grilles de prix à définir, chaque grille
        de prix étant liée à une ou plusieurs couleurs. Attribuez un numéro
        arbitraire à chaque grille de prix (de 0 à 99), et indiquez, pour
        chaque couleur, le numéro de le grille de prix
        correspondante.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Utiliser pour le prix de revient</span><span
        class="f_Textestd">: Cochez cette case pour que la grille de prix
        affecte le prix de revient de la fenêtre.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Utiliser pour le prix de vente</span><span
        class="f_Textestd">: Cochez cette case pour que la grille de prix
        affecte le prix de vente de la fenêtre.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">Encodage des grilles de prix</span><span
        class="f_Textestd">: Cliquez sur ce bouton pour encoder les différentes
        grilles de prix. WinPro vous présente alors la liste des numéros de
        grille que vous avez définis:</span></p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"><span
        style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';"> </span></p>

        <p class="p_Textestd" style="text-align: center;"><img
        src="img/clip0139.jpg" width="200" height="266" border="0"
        alt="clip0139"></p>

        <p class="p_Textestd"><span class="f_Textestd">Sélectionnez l'un des
        groupes, et cliquez sur OK pour accéder à l'encodage des
        prix:</span></p>

        <p style="text-align: center;"><img src="img/clip0526.gif" width="271"
        height="283" border="0" alt="clip0526"></p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
