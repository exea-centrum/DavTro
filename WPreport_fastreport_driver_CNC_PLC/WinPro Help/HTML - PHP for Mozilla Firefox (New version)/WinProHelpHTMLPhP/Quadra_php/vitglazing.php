<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Glazing","Vitrage"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?vitglazing.php"; }
else { parent.quicksync('a5.8.8'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Vitrage</title>
  <meta name="keywords" content="Gla">
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
        href="vitvariables.php">Previous</a>  <a
        href="vitprofiles.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>This page is accessible only if the box <span style="font-weight: bold">Composed glass</span> is checked into the 
		<a href="vitdescription.php">Description page</a>.</p>

        <p>This page lets you define the simple glass sheets that can be used to create the
        composed glazing. You have to give the rules for using each sheet. The
        sheets will be examined by WinPro in the order in which they are
        defined.</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p>You may define a shape for each pane, using one of two methods:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>you can select a fixed shape from the shape list below the formula,</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>you can update the variables <span class="f_Variables">FillingShape, DimA, DimB, ..., Orientation</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -13px; margin: 0px 0px 0px 40px;"><span
        class="f_Variables"> </span></p>

        <p>See the <a href="vitvariables.php">Variables</a> page for more information.
        You can also use <a href="manipulation_de_formes.php">shape handling
        functions</a> to compute a new shape.</p>

        <p style="text-align: center; margin: 14px 0px 14px 0px;"><img
        src="img/clip0190eng.jpg" width="627" height="349" border="0"
        alt="clip0190eng"></p>

        <p>The page is divided in 2 sections (left and right).</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p><span style="font-weight: bold;">The left section</span> contains the list of glass panes. Select a line
        in this list, and type the glazing code in the input field immediately
        on top of the list.</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p>Below the list, there are several check boxes, which let you define a few usage conditions:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Do not use for cost price</span>: the price of the sheet 
			  will not be used when computing the cost price.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Do not use for selling price</span>: the price of the sheet 
			  will not be used when computing the selling price.</td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <p><span style="font-size: 5pt;"> </span></p>

        <p><span style="font-weight: bold;">The right section</span> contains the sheet's formula, and a few additional fields:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Number</span>: Number of the corresponding field in
                the composed code and description. Leave this field blank if the sheet is not used to compose the code and/or the description.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Code</span>: Contains a small text that will replace the field 
			  #<span style="font-style: italic">n</span># (where <span style="font-style: italic">n</span> is the number in the previous field), 
			  into the composed code.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>: Contains a small text that will
                replace the field #<span style="font-style: italic">n</span># 
				(where <span style="font-style: italic">n</span> is the number in the previous field), in the composed description.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Shape list</span>: You can select a shape here, as explained at the top of the page.</td>
            </tr>
          </tbody>
        </table>
        </div>
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
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>Cet onglet permet de définir les vitrages simples composant le
        vitrage composé, et n'est accessible que si la case <span
        style="font-weight: bold;">Vitrage composé </span>est cochée dans la <a
        href="vitdescription.php">page Description</a>.</p>

        <p>Les feuilles de verre seront évaluées par WinPro dans l'ordre dans
        lequel elles sont définies.</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p>Vous pouvez définir une forme pour chaque feuille de verre, en
        utilisant l'une de ces 2 méthodes: </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>sélectionner une forme fixe depuis la liste de formes
                proposée sous la formule, </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>mettre à jour les variables <span
                class="f_Variables">FormeRemplissage, DimA, DimB, ...,
                Orientation</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -13px; margin: 0px 0px 0px 40px;"><span
        class="f_Variables"> </span></p>

        <p>Voir la page des <span style="color: #0000ff;"><a
        href="vitvariables.php">Variables</a></span> pour plus d'informations.
        Vous pouvez également utiliser les <a
        href="manipulation_de_formes.php">fonctions de manipulation de
        formes</a> pour calculer de nouvelles formes.</p>

        <p style="text-align: center;"><img src="img/clip0473.zoom92.gif"
        width="567" height="375" border="0" alt="clip0473"></p>

        <p>Cette page se divise en 2 zones (gauche et droite).</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p><span style="font-weight: bold;">La zone gauche</span> contient la
        liste des feuilles de verre pour ce vitrage composé. Sélectionner une
        ligne dans cette liste, et saisissez le code vitrage dans le champs de
        saisie immédiatement au-dessus de la liste.</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p>Sous cette liste, plusieurs cases à cocher permettent de préciser
        les conditions d'utilisation suivantes:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Exclure du pr.
                revient</span>: le prix de la feuille de verre ne sera pas
                utilisé pour calculer le prix de revient.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Exclure du pr. vente</span>:
                le prix de la feuille de verre ne sera pas utilisé pour
                calculer le prix de vente.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;"> </span></p>

        <p><span style="font-weight: bold;">La zone de droite</span> contient
        la formule pour la feuille de verre, ainsi que plusieurs champs
        complémentaires:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Numéro</span>: Numéro du
                champs correspondant dans le code et la description concaténés.
                Laisser le champ vierge si la feuille de verre n'est pas
                utilisée pour composer la description et/ou le code concaténé
                du vitrage composé.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Code</span>: Contient un
                court texte qui viendra remplacé la macro #<span
                style="font-style: italic;">n</span># (où <span
                style="font-style: italic;">n</span> est le numéro détaillé
                dans le précédent champ), dans le code composé.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>: Contient
                un court texte qui viendra remplacé la macro #<span
                style="font-style: italic;">n</span># (où <span
                style="font-style: italic;">n</span> est le numéro détaillé
                dans le précédent champ), dans la description composé.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Liste de forme</span>:
                Sélectionner une forme dans ce dialogue, comme détaillé en haut
                de la page.</td>
            </tr>
          </tbody>
        </table>
        </div>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
