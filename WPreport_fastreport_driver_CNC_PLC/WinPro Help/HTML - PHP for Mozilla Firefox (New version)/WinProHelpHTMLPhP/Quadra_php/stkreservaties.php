<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["FRA","NED"];
var WinProHelpPageName=["Reservations stock","Reservaties voorraad"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?stkprocesvoorraad.php"; }
else { parent.quicksync('a8'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Reservation</title>
  <meta name="keywords" content="">
  <meta http-equiv="Content-Type" content="text/php; charset=iso-8859-1">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <link type="text/css" href="default.css" rel="stylesheet">
  <style type="text/css" title="Amaya theme">
/* Classic style for Amaya Editor Lite */

/* default rules for the whole document */
body {
    font-size: 12pt;
    font-family: Times, serif;
    font-weight: normal;
    font-style: normal;
    color: black;
    background-color: white;
    line-height: 1em;
    margin-left: 4em;
    margin-right: 2em;
   }

/* paragraphs */
p  {
    padding: 0;
    margin-top: 0em;
    margin-bottom: 0em;
    text-align: justify;
    text-indent: 1em;
   }

/* headings */
h1 {
    background-color: #e8e1e1;
    font-size: 150%;
    font-weight: bold;
    font-style: normal;
    font-variant: normal;
    text-align: center;
    padding: 0;
    margin-top: .7em;
    margin-bottom: 2em;
   }
h2 {
    font-size: 130%;
    font-weight: bold;
    font-style: normal;
    padding: 0;
    margin-top: .7em;
    margin-bottom: .7em;
   }
h3 {
    font-size: 100%;
    font-weight: bold;
    font-style: normal;
    padding: 0;
    margin-top: .5em;
    margin-bottom: .5em;
   }
h4 {
    font-size: 100%;
    font-weight: bold;
    font-style: normal;
    padding: 0;
    margin-top: .3em;
    margin-bottom: .3em;
   }
h5 {
    font-size: 100%;
    font-weight: bold;
    font-style: italic;
    padding: 0;
    margin-top: .3em;
    margin-bottom: .3em;
   }
h6 {
    font-size: 100%;
    font-weight: bold;
    font-style: normal;
    padding: 0;
    margin-top: .3em;
    margin-bottom: .3em;
   }

/* divisions */
div {
    padding: 0;
    margin-top: 0em;
    margin-bottom: 0em;
   }

/* lists */
ul, ol {
    padding: 0 0 0 2em;
    margin-top: .1em;
    margin-bottom: .1em;
   }
ul ul, ol ol, ul ol, ol ul {
    margin-top: .1em;
    margin-bottom: .1em;
   }
li {
    padding: 0;
    margin-top: .1em;
    margin-bottom: .1em;
    text-align: justify;
   }
li p {
    margin-top: .1em;
    margin-bottom: .1em;
   }
dl {
    padding: 0;
    margin-top: .1em;
    margin-bottom: .1em;
    margin-left: 1em;
   }
dl dl {
    margin-top: .1em;
    margin-bottom: .1em;
   }
dt {
    padding: 0;
    font-weight: bold;
    margin-top: .1em;
    margin-bottom: .1em;
   }
dd {
    padding: 0;
    margin-top: .1em;
    margin-left: 1.5em;
    margin-bottom: .1em;
   }
dl p {
    margin-top: .1em;
    margin-bottom: .1em;
   }
th {
    background-color: #e8e1e1;
   }

/* inline */
strong {
    font-weight: bold;
   }
em {
    font-style: italic;
   }
code {
    font-family: Courier New, Courier, monospace;
   }
ins {
    background-color: inherit;
    text-decoration: underline;
   }
del {
    text-decoration: line-through;
   }

/* anchors */
a[href] {
    color: purple;
    text-decoration: underline;
   }

/* end */
  </style>
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
        href="stock.php">Top</a>  <a href="stkprocesvoorraad.php">Previous</a> 
        <a href="stkleveranciers.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="FRA">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>Enter topic text here.</p>
      </td>
    </tr>
  </tbody>
</table>
</div>

<div class="NED">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left">
        <div>

        <div>
        <h1
        style="text-align:center;margin-left:auto;margin-right:auto;font-size: 15pt"><strong>Reservaties
        in de voorraad</strong></h1>

        <p></p>

        <p></p>

        <p></p>

        <p></p>

        <p>Wanneer een gebruiker de staat « Bevestigingen goedkeuren » kiest
        voor een klantbestelling,zal Winpro de materialen berekenen en
        reserveren welke nodig zijn voor het produceren van deze bestelling.
        Deze materialen (artikels) kunnen weergegeven worden in het scherm
        &ldquo;reservaties&rdquo; in de klantbestelling. Dit is slechts
        zichtbaar nadat deze als &ldquo;Bevestigingen goedkeuren&rdquo; is
        geregistreerd. </p>

        <p></p>

        <p></p>

        <p><img alt="Goedkering bevestiging" src="img/stkbevgoedkeuren.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"
        width="315" height="224"></p>

        <p><img alt="Reservatievoorraad" src="img/stkreservatieorder.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"
        width="802" height="584"></p>

        <p></p>

        <p></p>

        <p>Het geheel van deze reservatie vormt het geheel van de totale
        behoefte. De materialen zijn gereserveerd in functie van :</p>

        <p></p>

        <p>-De geplande productiedatum aangegeven in de klantbestelling, voor
        wanneer alle materialen of op voorraad of geleverd dienen te worden.</p>

        <p style="margin-left:0em">-Indien er geen productiedatum ingegeven is,
        baseert Winpro zich op basis van de leverdatum in de klantbestelling,
        en dit volgens de regel (DATE_LEVERING &ndash; 2 weken) om voldoende
        tijd te hebben de goederen te kunnen ontvangen.</p>

        <p></p>

        <p>-Indien geen van beide gegevens gegeven zijn, zal WinPro ervan uit
        gaan dat dezelfde dag nog geproduceerd wordt.</p>

        <p></p>

        <p></p>

        <p>De reservaties per stuk worden gecumuleerd per klantbestelling.</p>

        <p></p>

        <p>De reservaties voor de profielen worden volgens volgende methode
        berekend.</p>

        <p></p>

        <p>-Gecumuleerd :</p>

        <p>Voor een gegeven klantbestelling,zal WinPro de afmetingen van alle
        profielen berekend hebben om de productie te kunnen starten. WinPro zal
        voor elke berekende profielreferentie de lengtes optellen om alzo terug
        te brengen tot de verschillende eenheden. Deze rond WinPro dan af naar
        boven om zo een totaal te bestellen hoeveelheid te bekomen.</p>

        <p></p>

        <p>-Geoptimaliseerd.</p>

        <p>Zelfde methode als hierboven doch met als extra, WinPro houdt
        rekening met de parameters van de optimalisatie van elk profiel. Dit
        wil zeggen dat er rekening gehouden wordt met de zaagsnede, het
        verlieseinde. We optimaliseren hier de berekening van de profielen
        binnen elke bestelling</p>

        <p>Voorbeeld : voor een KADERPROFIEL1, WinPro weet dat er in een
        bestelling 20 lengtes van 1300 mm te zagen vallen, wat in totaal 26000
        mm geeft. Een profiellengte is 6 m (ingevoerd voor het profiel met de
        eenheid van m).WinPro berekend nu het aantal meters nodig voor het
        maken van deze bestelling , zijnde 30 m welke correspondeert met 5
        lengtes van 6 m KADERPROFIEL1</p>

        <p></p>

        <p>Deze methode wordt het meest gebruikt. De andere methode
        (gecumuleerd) minder ,daar dit niet zo precies is. Dit
        berekeningsgedrag kan bepaald worden in het winpro.ini bestand met de
        variabele <strong><span style="color:#ff0000">"OPTIM RES =
        {0,1}</span></strong>" in de sectie <strong><span
        style="color:#ff0000">[ INVENTORY ]</span></strong> van het
        configuratiebestand winpro.ini. Deze waarde is nul voor de methode door
        cumulatie, 1 in het tegenovergestelde geval. </p>

        <p>Men bepaalt ofwel het één, ofwel de andere van dit gedrag</p>

        <p></p>

        <p></p>

        <p>Om de verschillende stappen te kennen, welke in een klantbestelling
        gemaakt zijn, dient men in de bestelling op het tabblad
        &ldquo;Acties&rdquo; te klikken waar WinPro de verschillende stappen en
        datums weergeeft van de bestelling.</p>

        <p></p>

        <p></p>

        <p><img alt="acties" src="img/stkactiesklant.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"
        width="948" height="408"></p>

        <p></p>
        </div>
        </div>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
