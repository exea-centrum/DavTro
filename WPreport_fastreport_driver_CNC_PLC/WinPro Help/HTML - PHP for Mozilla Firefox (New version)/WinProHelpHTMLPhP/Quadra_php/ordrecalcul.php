<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Computation sequence","Ordre de calcul&nbsp","Berekeningsvolgorde"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?ordrecalcul.php"; }
else { parent.quicksync('a3.1'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Ordre de calcul </title>
  <meta name="keywords" content="Ordre de calcul">
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
        href="introduction.php">Top</a>  <a href="general.php">Previous</a>  <a
        href="questions.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p style="text-align: center;"><span
        style="font-size: 5pt;"></span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p><span
                style="font-size: 16pt; font-weight: bold;">A. </span><span
                style="font-size: 16pt; font-weight: bold; color: #000000;">Dimensions
                computation</span><span
                style="font-size: 16pt; font-weight: bold;"> (pre-computation)</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_TitreReleaseNote" style="text-decoration: none;">1.
                Configuration variables</span></p>

                <p style="margin: 0px 0px 0px 35px;">1. General variables
                (date, wall configuration, ...)</p>

                <p style="margin: 0px 0px 0px 35px;">2. Site formulas</p>

                <p style="margin: 0px 0px 0px 35px;">3. User formulas</p>

                <p style="margin: 0px 0px 0px 35px;">4. System formulas</p>

                <p style="margin: 0px 0px 0px 35px;">5. Glazings formulas</p>

                <p style="margin: 0px 0px 0px 35px;">6. Window configuration
                variables</p>

                <p style="margin: 0px 0px 0px 35px;">7. Customer specific
                formulas</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_TitreReleaseNote" style="text-decoration: none;">2.
                Roller shutter</span></p>

                <p style="margin: 0px 0px 0px 35px;">1. Rails</p>

                <p style="margin: 0px 0px 0px 35px;">2. Box</p>

                <p style="margin: 0px 0px 0px 35px;">3. Blades</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_TitreReleaseNote" style="text-decoration: none;">3.
                Window </span></p>

                <p style="margin: 0px 0px 0px 35px;">1. Outer frame</p>

                <p style="margin: 0px 0px 0px 59px;">a. Frame</p>

                <p style="margin: 0px 0px 0px 59px;">b. Transoms + Connectors (peripheral profiles checked as connectors only)</p>

                <p style="margin: 0px 0px 0px 35px;">2. Sashes</p>

                <p style="margin: 0px 0px 0px 59px;">a. Fittings</p>

                <p style="margin: 0px 0px 0px 59px;">b. Frame</p>

                <p style="margin: 0px 0px 0px 59px;">c. Transoms</p>

                <p style="margin: 0px 0px 0px 59px;">d. Ventilators</p>

                <p style="margin: 0px 0px 0px 59px;">e. Georgian bars</p>

              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>

        <p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p><span
                style="font-size: 16pt; font-weight: bold;">B. </span><span
                style="font-size: 16pt; font-weight: bold; color: #000000;">Components
                computation</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_TitreReleaseNote" style="text-decoration: none;">1.
                Configuration variables</span></p>

                <p style="margin: 0px 0px 0px 35px;">1. General variables
                (date, wall configuration, ...)</p>

                <p style="margin: 0px 0px 0px 35px;">2. Site formulas</p>

                <p style="margin: 0px 0px 0px 35px;">3. User formulas</p>

                <p style="margin: 0px 0px 0px 35px;">4. System formulas</p>

                <p style="margin: 0px 0px 0px 35px;">5. Glazings formulas</p>

                <p style="margin: 0px 0px 0px 35px;">6. Window configuration
                variables</p>

                <p style="margin: 0px 0px 0px 35px;">7. Customer specific
                formulas</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_TitreReleaseNote" style="text-decoration: none;">2.
                Roller shutters</span></p>

                <p style="margin: 0px 0px 0px 35px;">1. Rails</p>

                <p style="margin: 0px 0px 0px 35px;">2. Box</p>

                <p style="margin: 0px 0px 0px 35px;">3. Blades</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_TitreReleaseNote" style="text-decoration: none;">3.
                Window</span></p>

                <p style="margin: 0px 0px 0px 35px;">1. Sashes</p>

                <p style="margin: 0px 0px 0px 59px;">a. Fillings</p>

                <p style="margin: 0px 0px 0px 59px;">b. Fittings</p>

                <p style="margin: 0px 0px 0px 59px;">c. Ventilators</p>

                <p style="margin: 0px 0px 0px 59px;">d. Georgian bars</p>

                <p style="margin: 0px 0px 0px 59px;">e. Fittings accessories</p>

                <p style="margin: 0px 0px 0px 59px;">f. Transoms</p>

                <p style="margin: 0px 0px 0px 59px;">g. Frame</p>

                <p style="margin: 0px 0px 0px 35px;">2. Outer frame</p>

                <p style="margin: 0px 0px 0px 59px;">a. Transoms + Connectors (peripheral profiles checked as connectors only)</p>

                <p style="margin: 0px 0px 0px 59px;">b. Frame</p>

                <p style="margin: 0px 0px 0px 59px;">c. Peripheral profiles (precomputation done, then full computation done just afterward, only when
				connector and window/door sill boxes are unchecked)</p>

                <p style="margin: 0px 0px 0px 59px;">d. Window/door sill (precomputation done, then full computation done just afterward, only when window/door sill 
				flags are checked)</p>

                <p style="margin: 0px 0px 0px 59px;">e. False arche (precomputation done, then full computation done just afterward)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_TitreReleaseNote" style="text-decoration: none;">4.
                Customer-specific discount formulas</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>

        <p> </p>

        <p>See also next page, <a href="questions.php">Questions</a>, related
        to accessibility of questions into each kind of element.</p>

        <p><span style="color: #000000;"> </span></p>
        
		<p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Additional information about computation sequence with version 9 and upper, for variables PreComp and
		ComputeForDraw :</span>

        <p> </p>
		
        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0901eng.jpg"
        width="921" height="571" border="0" alt="clip0901eng"></p>
        <p> </p>

        <p> </p>		

        <p>Refer to <a href="9_0_0_x.php">release note version 9.0</a> for more details about those variables.</p>

        <p> </p>		

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
      <td align="left"><p style="text-align: center;"><span
        style="font-size: 5pt;"></span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p><span
                style="font-size: 16pt; font-weight: bold;">A. Calcul
                dimensionnel (pré-calcul)</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-size: 12pt; font-weight: bold;">1. Variables de
                configuration</span></p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 61px;">1. Variables générales (date, situation maçonnerie, ...)</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 61px;">2. Formules de site</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 61px;">3. Formules utilisateur</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 61px;">4. Formules système</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 61px;">5. Formules vitrage</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 61px;">6. Variables de description de configuration de la fenêtre</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 61px;">7. Formule spécifique client</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-size: 12pt; font-weight: bold;">2. Volet</span></p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 61px;">1. Coulisses</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 61px;">2. Caisson</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 61px;">3. Tablier(s)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-size: 12pt; font-weight: bold;">3. Châssis</span></p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 56px;">1. Dormant</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 83px;">a. Cadre dormant</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 83px;">b. Traverse(s) de dormant + Coupleurs (rehausses définies comme coupleurs uniquement)</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 61px;">2. Ouvrant</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 83px;">a. Quincailleries</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 83px;">b. Cadre ouvrant</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 83px;">c. Traverse(s) d'ouvrant</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 83px;">d. Aérateurs dans le vitrage</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 83px;">e. Croisillons</p>

                <p><span style="font-size: 5pt;"> </span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>

        <p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p><span
                style="font-size: 16pt; font-weight: bold;">B. Calcul des
                composants</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-size: 12pt;"></span><span
                style="font-size: 12pt; font-weight: bold;">1. Variables de
                configuration</span></p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 61px;">1. Variables générales (date, situation maçonnerie, ...)</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 61px;">2. Formules de site</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 61px;">3. Formules utilisateur</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 61px;">4. Formules système</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 61px;">5. Formules vitrage</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 61px;">6. Initialisation des variables de configuration de la fenêtre</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 61px;">7. Formule spécifique client</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-size: 12pt; font-weight: bold;">2. Volet</span></p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 61px;">1. Coulisses</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 61px;">2. Caisson</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 61px;">3. Tablier(s)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-size: 12pt; font-weight: bold;">3. Châssis</span></p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 61px;">1. Par ouvrant</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 83px;">a. Remplissage(s)</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 83px;">b. Quincaillerie</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 83px;">c. Aérateurs dans le vitrage</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 83px;">d. Croisillons</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 83px;">e. Accessoires de quincaillerie</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 83px;">f. Traverse(s) d'ouvrant</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 83px;">g. Cadre ouvrant</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 61px;">2. Dormant</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 83px;">a. Traverses de dormant + Coupleurs (rehausses définies comme coupleurs uniquement)</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 83px;">b. Cadre dormant</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 83px;">c. Profil(s) périphérique(s) (précalcul suivi d'un calcul complet, uniquement pour les rehausses non
				cochées en tant que coupleur ou seuil de châssis/porte)</p>

                <p style="text-indent: -24px; margin: 0px 0px 0px 83px;">d. Seuil de châssis/porte (précalcul suivi d'un calcul complet, uniquement pour les rehausses cochées 
				en tant que seuil de châssis/porte)</p>

                <p style="margin: 0px 0px 0px 59px;">e. Faux cintre (précalcul suivi d'un calcul complet)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-size: 12pt; font-weight: bold;">4. Formule de
                remise client</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>

        <p> </p>

        <p>Voyez aussi la page suivantes, <a
        href="questions.php">Questions</a>, au sujet de la disponibilité des
        questions dans chaque type d'élément.</p>

        <p class="p_Comment"> </p>

        <p class="p_Comment"><span class="f_TitreReleaseNote">Complément sur l'ordre de calcul en version 9 et supérieure, pour les variables PreCalc et
		CalculPourDessin :</span>

        <p> </p>
		
        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0901fra.jpg"
        width="939" height="593" border="0" alt="clip0901fra"></p>

        <p> </p>		

        <p>Reportez vous à la <a href="9_0_0_x.php">note de version 9.0</a> pour plus de détails sur ces variables.</p>

        <p> </p>		

        <p> </p>

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
      <td align="left"><p style="text-align: center;"><span
        style="font-size: 5pt;"></span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p><span
                style="font-size: 16pt; font-weight: bold;">A. </span><span
                style="font-size: 16pt; font-weight: bold; color: #000000;">Berekening
                afmetingen</span><span
                style="font-size: 16pt; font-weight: bold;">(pre-berekening)</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_TitreReleaseNote" style="text-decoration: none;">1.
                Configuratie variabelen</span></p>

                <p style="margin: 0px 0px 0px 35px;">1. Algemene variabelen
                (datum, muur configuratie, ...)</p>

                <p style="margin: 0px 0px 0px 35px;">2. Site formules</p>

                <p style="margin: 0px 0px 0px 35px;">3. Gebruiker formules</p>

                <p style="margin: 0px 0px 0px 35px;">4. Systeem formules</p>

                <p style="margin: 0px 0px 0px 35px;">5. Raamconfiguratie
                variabelen</p>

                <p style="margin: 0px 0px 0px 35px;">6. Klantspecifieke
                formules</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_TitreReleaseNote" style="text-decoration: none;">2.
                Rolluiken</span></p>

                <p style="margin: 0px 0px 0px 35px;">1. Geleiders</p>

                <p style="margin: 0px 0px 0px 35px;">2. Rolluikkasten</p>

                <p style="margin: 0px 0px 0px 35px;">3. Rolluikbladen</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_TitreReleaseNote" style="text-decoration: none;">3.
                Ramen </span></p>

                <p style="margin: 0px 0px 0px 35px;">1. Stelkozijnen</p>

                <p style="margin: 0px 0px 0px 59px;">a. Kader</p>

                <p style="margin: 0px 0px 0px 59px;">b. Stijl/Regel in de
                kader</p>

                <p style="margin: 0px 0px 0px 35px;">2. Vleugels</p>

                <p style="margin: 0px 0px 0px 59px;">a. Kader</p>

                <p style="margin: 0px 0px 0px 59px;">b. Stijl/Regel in de
                vleugel</p>

                <p style="margin: 0px 0px 0px 59px;">c. Verluchtingen</p>

                <p style="margin: 0px 0px 0px 59px;">d. Kleinhouten</p>

                <p style="margin: 0px 0px 0px 59px;">e. Beslag</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>

        <p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p><span
                style="font-size: 16pt; font-weight: bold;">B. </span><span
                style="font-size: 16pt; font-weight: bold; color: #000000;">Onderdelen
                berekening</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_TitreReleaseNote" style="text-decoration: none;">1.
                Configuratie variabelen</span></p>

                <p style="margin: 0px 0px 0px 35px;">1. Algemene variabelen
                (datum, muur configuratie, ...)</p>

                <p style="margin: 0px 0px 0px 35px;">2. Site formules</p>

                <p style="margin: 0px 0px 0px 35px;">3. Gebruiker formules</p>

                <p style="margin: 0px 0px 0px 35px;">4. Systeem formules</p>

                <p style="margin: 0px 0px 0px 35px;">5. Raamconfiguratie
                variabelen</p>

                <p style="margin: 0px 0px 0px 35px;">6. Klantspecifieke
                formules</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_TitreReleaseNote" style="text-decoration: none;">2.
                Rolluiken</span></p>

                <p style="margin: 0px 0px 0px 35px;">1. Geleiders</p>

                <p style="margin: 0px 0px 0px 35px;">2. Rolluikkasten</p>

                <p style="margin: 0px 0px 0px 35px;">3. Rolluikbladen</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_TitreReleaseNote" style="text-decoration: none;">3.
                Raam</span></p>

                <p style="margin: 0px 0px 0px 35px;">1. Vleugels</p>

                <p style="margin: 0px 0px 0px 59px;">a. Vullingen</p>

                <p style="margin: 0px 0px 0px 59px;">b. Beslag</p>

                <p style="margin: 0px 0px 0px 59px;">c. Verluchtingen</p>

                <p style="margin: 0px 0px 0px 59px;">d. Kleinhouten</p>

                <p style="margin: 0px 0px 0px 59px;">e. Stijl/Regel</p>

                <p style="margin: 0px 0px 0px 59px;">f. Kader</p>

                <p style="margin: 0px 0px 0px 35px;">2. Stelkozijnen</p>

                <p style="margin: 0px 0px 0px 59px;">a. Stijl/Regel</p>

                <p style="margin: 0px 0px 0px 59px;">b. Kader</p>

                <p style="margin: 0px 0px 0px 59px;">c. Bijprofielen</p>

                <p style="margin: 0px 0px 0px 59px;">d. Dorpels</p>

                <p style="margin: 0px 0px 0px 59px;">e. Valse opdekken</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 11px;"><span
                class="f_TitreReleaseNote" style="text-decoration: none;">4.
                Klantspecifieke korting formules</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>

        <p> </p>

        <p>Zie volgende blz., <a href="questions.php">Vragen</a>, gerelateerd
        aan de toegankelijkheid van de vragen in elk type element.</p>

        <p><span style="color: #000000;"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
