<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["FRA","NED"];
var WinProHelpPageName=["7.0.3x","7.0.3x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?rn703x.php"; }
else { parent.quicksync('a11.6.5'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>7.0.3x</title>
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
        href="introduction.php">Top</a>  <a href="rn704x.php">Previous</a>  <a
        href="rn702x.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="FRA">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                7.0.35</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">25/03/04</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Nouveau mode de paiement:</span> Il
        s&rsquo;agît d&rsquo;une extension du mode de paiement à fin de mois,
        augmenté d&rsquo;un nombre de jours (ex. : 60 jours fin de mois le
        10).</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Champs supplémentaires dans la
        table VitreCde.dbf:</span> Le champ Cadre indique le type de cadre
        contenant le vitrage (O=ouvrant, D=dormant). Les champs Paramxx
        contiennent les valeurs stockées dans une variable <span
        class="f_Variables">ParamVitrage[</span>xx<span
        class="f_Variables">]</span>, définissable uniquement dans les vitrages
        composés par formule.</p>

        <p> </p>

        <p><span style="text-decoration: underline;">Exemple:</span></p>

        <p><span style="text-decoration: underline;"> </span></p>

        <p><span style="color: #000080;"> ParamVitrage : 3</span></p>

        <p><span style="color: #000080;"> ParamVitrage [1] := 10</span></p>

        <p><span style="color: #000080;"> ParamVitrage [2] := 20</span></p>

        <p><span style="color: #000080;"> ParamVitrage [3] := 30</span></p>

        <p><span style="color: #000080;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                7.0.32</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">11/03/04</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">Champ supplémentaire dans la table
        PrepaLot:</span> Cette table permet de mémoriser si les vitrages du
        châssis ont déjà été commandés.</p>

        <p> </p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                7.0.31</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">4/03/04</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Description des châssis de
        bibliothèque:</span> Vous pouvez mémoriser une description succincte
        pour chaque châssis de bibliothèque.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Casiers de stock:</span> Un nouveau
        module vous permet de gérer l&rsquo;emplacement de chaque article dans
        le stock. </p>

        <p>Ce module définit le position de chaque article lors de la réception
        fournisseur, et indique où récupérer ces articles lors du lancement en
        production.</p>
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
      <td align="left"><p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Versie
                7.0.35 tot 7.0.39</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">25/03/04</span></p>

                <p></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p></p>

        <p></p>

        <p></p>

        <p><span style="font-size: 12pt">&bull;<strong><span
        style="font-family: Times New Roman,Times,serif; font-style: oblique; font-weight:bold; text-decoration: underline;">Beperking
        van de type dorpels</span>:</strong> <span
        style="font-size: 10pt">Indien u gebruik maakt van de notie « seuil
        étendu »,kan u bij deze per vleugel de keuze van dorpel beperken
        </span></span></p>

        <p><strong><span style="font-size: 12pt"> </span></strong></p>

        <p><span class="f_TitreReleaseNote">&bull;Nieuwe
        betalingsvoorwaarden</span> Er is de mogelijkheid toegevoegd om het
        aantal dagen einde maand in te voeren (vb. : 60 dagen einde maand vanaf
        10)..</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">&bull;Extra velden in de table
        VitreCde.dbf :</span> Het veld Cadre geeft het type kaderframe weer
        welke de beglazing bevat (O=vleugel, D=kader). Het veld Paramxx bevat
        de waarden welke opgeslaan zijn in de variabele <strong><span
        style="color:#0000a0">ParamVitrage[xx] (ParamBeglazing
        [xx])</span></strong>, welke enkel definieerbaar is in de formule van
        de samengestelde beglazing. .</p>

        <p> </p>

        <p><span style="text-decoration: underline;">Voorbeeld:</span></p>

        <p><span style="text-decoration: underline;"> </span></p>

        <p><span style="color: #000080;"> ParamVitrage : 3</span></p>

        <p><span style="color: #000080;"> ParamVitrage [1] := 10</span></p>

        <p><span style="color: #000080;"> ParamVitrage [2] := 20</span></p>

        <p><span style="color: #000080;"> ParamVitrage [3] := 30</span></p>

        <p></p>

        <p>of</p>

        <p></p>

        <p>ParamBeglazing : 3</p>

        <p><span style="color: #000080;"> ParamBeglazing [1] := 10</span></p>

        <p><span style="color: #000080;"> ParamBeglazing [2] := 20</span></p>

        <p><span> ParamBeglazing [3] := 30</span></p>

        <p><span style="color: #000080;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Versie
                7.0.32</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">11/03/04</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">&bull;Extra veld in de table
        PrepaLot:</span> Deze tabel staat u toe op te slaan of de beglazing van
        een raam reeds besteld is of niet..</p>

        <p> </p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Versie
                7.0.31</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">4/03/04</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">&bull;Beschrijving van de ramen in
        de bibliotheek:</span> U kan nu de beschrijving van elk raam in een
        bibliotheek onthouden.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">&bull;Voorraadvakken</span> Deze
        nieuwe module staat u toe elk artikel op te slaan in de voorraad .Deze
        module geeft u de mogelijkheid voor elk artikel een
        kostenplaats(voorraadvak) te voorzien bij ontvangst van het artikel en
        wordt gerecupereerd of aangeduid bij de lancering van de productie</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
