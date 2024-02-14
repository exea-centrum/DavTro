<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["FRA","NED"];
var WinProHelpPageName=["Stock","Voorraadbeheer"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?stock.php"; }
else { parent.quicksync('a8'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Stock</title>
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
        href="introduction.php">Top</a>  <a
        href="zonelivraison.php">Previous</a>  <a
        href="stkcreation.php">Next</a> </span> </td>
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
        style="text-align:center;margin-left:auto;margin-right:auto;font-size: 15pt"><strong>Voorraadbeheer</strong></h1>

        <p></p>

        <p
        style="text-align:center;margin-left:auto;margin-right:auto;"><strong><span
        style="font-size: 12pt">VOORWOORD</span></strong></p>

        <p></p>

        <p></p>

        <p>Dit document biedt u een kort overzicht aan van voorraadbeheer in
        WinPro en dit volgens de verschillende beschikbare modules en de
        invloed hiervan op de aan &ndash;en kostprijs in WinPro</p>

        <p></p>

        <p>Vooreerst , welke zijn de verschillende modules voor voorraadbeheer
        in WinPro</p>

        <p></p>

        <p style="text-align:left;margin-left:0;margin-right:auto;"><strong
        style="font-size: 12pt">1 &ndash; Zonder voorraad</strong></p>

        <p style="text-align:left;margin-left:0;margin-right:auto;"></p>

        <p style="text-align:left;margin-left:0;margin-right:auto;">De
        leverancierbestellingen en de opvolging hiervan gebeurd manueel. WinPro
        berekent geen enkele behoefte. De gebruiker dient de
        leverancierbestellingen en de goederenontvangst volledig manueel te
        beheren. </p>

        <p style="text-align:left;margin-left:0;margin-right:auto;">In dit
        geval zullen de voorziene leveringen ook indicatief zijn en geven ze
        enkel een beeld van de datum en hoeveelheid van een bestelling en
        wanneer deze eventueel geleverd zal worden. </p>

        <p style="text-align:left;margin-left:0;margin-right:auto;">Hier wordt
        geen rekening gehouden met reserveringen, nog een levervoorstel,
        herschikking van de voorraad bij optimalisatie of in het productie
        geven. </p>

        <p style="text-align:left;margin-left:0;margin-right:auto;">Wel is het
        mogelijk om de saldi van de leverancierbestellingen te beheren door
        deze manueel toe te wijzen aan reeds eerder gevoerde bestellingen. Op
        dit niveau zal WinPro geen enkele automatische berekening </p>

        <p style="text-align:left;margin-left:0;margin-right:auto;">noch
        bijstand uitvoeren. Dit is het laagste niveau. </p>

        <p style="text-align:left;margin-left:0;margin-right:auto;"></p>

        <p style="text-align:left;margin-left:0;margin-right:auto;"><strong
        style="font-size: 12pt">2 &ndash; Eenvoudig voorraadbeheer</strong></p>

        <p style="text-align:left;margin-left:0;margin-right:auto;"></p>

        <p style="text-align:left;margin-left:0;margin-right:auto;">De
        leverancierbestellingen gebeuren manueel (geen leveringsvoorstel).De
        goederenontvangst brengt de toegang tot de voorraad op gang. In dit
        geval beheert WinPro enkel de inkomende en uitgaande goederen. </p>

        <p style="text-align:left;margin-left:0;margin-right:auto;">De
        voorziene leveringstermijnen zijn hier indicatief, ze staan in de
        leverancierbestelling toe te weten op welke datum de goederen ten
        laatste geleverd zullen worden. </p>

        <p style="text-align:left;margin-left:0;margin-right:auto;">Ook is het
        mogelijk de verschillende saldi hier te beheren. Uitgaande goederen
        worden op het moment van optimalisatie of in begin van productie
        beheerd. </p>

        <p style="text-align:left;margin-left:0;margin-right:auto;">Dit is het
        gemiddeld niveau.</p>

        <p style="text-align:left;margin-left:0;margin-right:auto;"></p>

        <p style="text-align:left;margin-left:0;margin-right:auto;"><strong
        style="font-size: 12pt">3 &ndash; Vooruitziende
        voorraadbeheer</strong></p>

        <p style="text-align:left;margin-left:0;margin-right:auto;">Deze module
        biedt dezelfde functionaliteiten als in punt 2 maar door de begrippen
        reservering en leveranciersvoorstel te integreren. </p>

        <p style="text-align:left;margin-left:0;margin-right:auto;">Bij het
        invoeren van een klantbestelling,stelt WinPro voor een levertermijn te
        berekenen aan de hand van de voorziene leveringstermijnen per artikel
        van de verschillende leveranciers. </p>

        <p style="text-align:left;margin-left:0;margin-right:auto;">WinPro
        staat toe op elk moment de totale hoeveelheden te kunnen berekenen per
        leverancier rekeninghoudende met de levertermijn voor de klant,de
        voorziene leveringstermijnen per leverancier,</p>

        <p style="text-align:left;margin-left:0;margin-right:auto;">de minimum
        voorraad per aangegeven periode en de beschikbare voorraad. De
        uitgaande voorraad houdt hier rekening mee op moment van optimalisatie
        of bij het begin van de productie. </p>

        <p style="text-align:left;margin-left:0;margin-right:auto;">De
        inkomende goederen worden beheerd door de ontvangst van de
        leverancierbestellingen. Het is hier mogelijk te werken met saldi ,
        backorders, en herinneringen naar de leverancier toe, ook is het hier
        mogelijk </p>

        <p style="text-align:left;margin-left:0;margin-right:auto;">te werken
        met verplaatsingen in de voorraad, voorraadcorrecties, en in &ndash;en
        uitgaande goederen. Dit is het hoogste en meest complete manier van
        voorraadbeheer.</p>

        <p></p>

        <p></p>

        <p></p>

        <p></p>

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
