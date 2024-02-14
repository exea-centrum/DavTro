<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Varnishing","Laquage","Lakwerk"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?artlaquage.php"; }
else { parent.quicksync('a4.5.4'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Laquage</title>
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
        href="introduction.php">Top</a>  <a href="arttarif.php">Previous</a> 
        <a href="artcomposants.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>This page lets you define varnishing for relevant articles.</p>

        <p> </p>

        <p>The page contains a single table, in which you will associate colour
        codes with varnish code and quantity.</p>

        <p>The first line is reserved for RAL colours, when they are not
        defined in the main <a href="couleursdescription.php">colour
        table</a>.</p>

        <p> </p>

        <p>Each line must have the following information:</p>
        <p style="text-align: center;"><img src="img/clip26eng.jpg" width="739"
        height="281" border="0" alt="clip26eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Colour</span><span
                style="color: #000000;"> must match a code in the main </span>
                <a href="couleursdescription.php">colour table.</a></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Article</span><span
                style="color: #000000;"> must match another article in this
                table. This other article is the varnish itself.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

		<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
		  <tbody>
			<tr valign="baseline">
			  <td width="17"><span
				style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
			  <td><span style="font-weight: bold;">Quantity</span><span
				style="color: #000000;"> gives the varnish quantity per article
				unit.</span></td>
			</tr>
		  </tbody>
		</table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

		<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
		  <tbody>
			<tr valign="baseline">
			  <td width="17"><span
				style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
			  <td><span style="font-weight: bold;">Full length</span> indicates the
				program to base its reservations and supplier order computation for
				this colour onto the full length of the bar or only onto cut profiles,
				wastes excluded (box unchecked, default behaviour). See <a
				href="8_1_1_x.php">release note 8.1.1.065</a>.</td>
			</tr>
		  </tbody>
		</table>
		</div>

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
      <td align="left"><p> </p>

        <p>Cet onglet vous permet de définir le mode de laquage de certains
        articles.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0270.zoom88.jpg"
        width="543" height="232" border="0" alt="clip0270"></p>

        <p>L'onglet comporte une seule grille, qui permet d'associer à chaque
        couleur un article de laquage consommé dans une certaine quantité.</p>

        <p>La première ligne de cette grille est réservée aux couleurs non
        définies dans la <a href="couleursdescription.php">table des couleurs
        de Winpro</a>.</p>

        <p> </p>

        <p>Vous devez indiquer sur chaque ligne les renseignements suivants:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Couleur</span> qui doit
                correspondre à un enregistrement de la <a
                href="couleursdescription.php">table des couleurs</a>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Article</span> qui doit
                correspondre à un autre enregistrement de la table article.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Quantité </span>qui indique
                la quantité de l'article de laquage à utiliser par unité de
                l'article à laquer. </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Long. complète</span>
                indique si WinPro doit baser son calcul de réservation et de
                commande fournisseur pour cette laque sur la longueur de barre
                entière (case cochée) ou uniquement sur les morceaux débités,
                hors chutes (case décochée, comportement par défaut). Voir <a
                href="8_1_1_x.php">note de version 8.1.1.065</a>.</td>
            </tr>
          </tbody>
        </table>
        </div>
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

        <p>Deze pagina staat u toe om het eventueel lakwerk voor het artikel te
        definiëren. </p>

        <p style="text-align: center;"><img src="img/clip26eng.jpg" width="739"
        height="281" border="0" alt="clip26eng"></p>

        <p>Deze pagina bevat één enkele tabel, in welke u een associatie maakt
        tussen de kleurcode en de lakcode me de hoeveelheid.</p>

        <p>De eerste lijn is gereserveerd voor de RAL kleuren, wanneer deze
        niet gedefinieert zijn in de hoofdtabel van de kleuren <a
        href="couleursdescription.php">kleur table</a>.</p>

        <p> </p>

        <p>Elke lijn dient volgende informatie te bevatten:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Kleur </span><span
                style="color: #000000;">moet overeenkomen met een kleur in
                de</span> <a href="couleursdescription.php">kleur
              table.</a></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Artikel </span><span
                style="color: #000000;">moet overeenstemmen met een ander
                artikel in deze tabel.Dit ander artikel is de lak
              zelf.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

		<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
		  <tbody>
			<tr valign="baseline">
			  <td width="17"><span
				style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
			  <td><span style="font-weight: bold;">Hoeveelheid </span><span
				style="color: #000000;">geeft de hoeveelheid lak weer per artikel
				eenheid.</span></td>
			</tr>
		  </tbody>
		</table>
        </div>

		<div
		style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

		<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
		  <tbody>
			<tr valign="baseline">
			  <td width="17"><span
				style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
			  <td><span style="font-weight: bold;">Volledige lengte</span> geeft aan
				het programma aan om de reservatie en leverancierbestellingen te
				baseren op de volledige profiellengte of op de verzaagde lengtes,zonder
				reststukken (box unchecked, standaard gedrag. Zie <a
				href="8_1_1_x.php">release note 8.1.1.065</a>.</td>
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

