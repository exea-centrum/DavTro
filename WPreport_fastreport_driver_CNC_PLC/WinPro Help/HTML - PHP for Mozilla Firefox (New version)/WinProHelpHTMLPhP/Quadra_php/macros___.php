<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Macros","Macros","Macros"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?macros___.php"; }
else { parent.quicksync('a3.11'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Macros #...#</title>
  <meta name="keywords" content="#1#,#2#,#3#,#4#,#5#,#6#,Macro,Macro5,Macro6">
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
        href="varremplissages.php">Previous</a>  <a
        href="composantsdebase.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p></p>

        <p>WinPro lets you insert macros in the description of articles and
        profiles. At run time, they will be replaced by a computed value or a
        text.</p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Macro</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">Usage</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">#1#</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Replaced with the colour of the article
                or profile </span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">#2#</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Replaced with either:</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>content of the <span
                        class="f_Variables">Length</span> variable </td>
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
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&bull;</span></td>
                      <td>or content of variables <span
                        style="font-family: 'Courier New'; color: #0000ff;">ArticleWidth</span>
                        and <span
                        style="font-family: 'Courier New'; color: #0000ff;">ArticleHeight</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">#3#</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Replaced with the value of variable
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">Thickness</span><span
                style="font-weight: bold; color: #000000;">.</span></p>

                <p class="p_ImageCaption"
                style="margin: 0px 0px 0px 14px;"><span class="f_Variables"
                style="color: #000080;">Note: this macro may be displayed with
                decimals or not, depending on the value of the following key
                into </span><span class="f_Variables"
                style="font-style: italic; color: #000080;">WinPro.ini
                </span><span class="f_Variables" style="color: #000080;">file
                or </span><span class="f_Variables"
                style="font-style: italic; color: #000080;">settings
                </span><span class="f_Variables" style="color: #000080;">table
                (format integer I):</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span class="f_Winproini"
                style="color: #000000;">[System]</span></p>

                <p style="margin: 0px 0px 0px 23px;"><span class="f_Winproini"
                style="font-weight: normal;">EpaisseurAvecUneDecimale    = 0 
                macro #3# without decimal (default)</span></p>

                <p style="margin: 0px 0px 0px 23px;"><span class="f_Winproini"
                style="font-weight: normal;">                                           
                = 1  macro #3# with 1 decimal</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">#4#</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Replaced with the value of variable
                </span><span
                style="font-family: 'Courier New'; color: #0000ff;">Thickness</span><span
                style="font-weight: bold; color: #000000;">.</span>Remplacée
                par la correspondance Ral de la couleur Winpro.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">#5#</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Replaced with a predefined
                text. The text is selected by assigning to the <span
                class="f_Variables">Macro5</span> variable the required text
                number.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">#6#</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Replaced with a predefined
                text. The text is selected by assigning to the <span
                class="f_Variables">Macro6</span> variable the required text
                number.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">#Fint#</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Category of the inside <a
                href="finition.php">finishing</a> coat input by the user for
                this level of frame.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">#Fext#</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Category of the outside <a
                href="finition.php">finishing</a> coat input by the user for
                this level of frame.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>

        <p style="background: #fffff2;"><span
        style="font-size: 5pt; color: #000000;"> </span></p>

        <p><span style="color: #000000;"> </span></p>
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

        <p>WinPro vous permet d'insérer dans la description des articles et
        profils des 'macros', qui seront remplacées en temps utile par une
        valeur calculée ou un texte.</p>

        <p> </p>

        <p>Les macros disponibles sont:</p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Macro</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">Explication</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">#1#</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Remplacée par le code couleur
                Winpro de l'article ou du profil</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">#2#</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Remplacée par :</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&bull;</span></td>
                      <td>soit par le contenu de la variable <span
                        class="f_Variables">Longueur</span></td>
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
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&bull;</span></td>
                      <td>soit par le contenu des variables <span
                        class="f_Variables">LargeurArticle</span> et <span
                        class="f_Variables">HauteurArticle</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">#3#</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Remplacée par le contenu de
                la variable <span class="f_Variables">Epaisseur</span></p>

                <p class="p_ImageCaption"
                style="margin: 0px 0px 0px 14px;"><span class="f_Variables"
                style="color: #000080;">Remarque: cette macro peut être
                affichée avec ou sans décimales. Pour cela, ajouter ceci à
                </span><span class="f_Variables"
                style="font-style: italic; color: #000080;">WinPro.ini
                </span><span class="f_Variables" style="color: #000080;">(ou la
                table </span><span class="f_Variables"
                style="font-style: italic; color: #000080;">settings</span><span
                class="f_Variables" style="color: #000080;">en version 8,
                format entier I)</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span class="f_Winproini"
                style="color: #000000;">[System]</span></p>

                <p style="margin: 0px 0px 0px 23px;"><span class="f_Winproini"
                style="font-weight: normal;">EpaisseurAvecUneDecimale    = 0 
                macro #3# sans décimale (défaut)</span></p>

                <p style="margin: 0px 0px 0px 23px;"><span class="f_Winproini"
                style="font-weight: normal;">                                           
                = 1  macro #3# avec 1 décimale</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">#4#</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Remplacée par la
                correspondance Ral de la couleur Winpro.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">#5#</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Remplacée par un texte
                prédéni. Le choix de ce texte se fait par l'affectation de la
                variable <span class="f_Variables">Macro5</span> par le numéro
                de texte désiré.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">#6#</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Remplacée par un texte
                prédéni. Le choix de ce texte se fait par l'affectation de la
                variable <span class="f_Variables">Macro6</span> par le numéro
                de texte désiré.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">#Fint#</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Catégorie de la <a
                href="finition.php">finition</a> intérieure saisie par
                l'utilisateur pour ce niveau de cadre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">#Fext#</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Catégorie de la <a
                href="finition.php">finition</a> extérieure saisie par
                l'utilisateur pour ce niveau de cadre.</p>
              </td>
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

<div class="NED">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p></p>

        <p>WinPro staat u toe om macros te gebruiken in de beschrijving van
        artikels en profielen. Bij berekening worden deze macro's vervangen
        door de berekende waarde of tekst..</p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Macro</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">Gebruik</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">#1#</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Vervangen door de kleur van het artikel
                of profiel </span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">#2#</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Vervangen door ofwel:</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>inhoud van de variabele <span
                        class="f_Variables">Length (Lengte)</span> </td>
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
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&bull;</span></td>
                      <td>of de inhoud van de variabelen <span
                        style="font-family: 'Courier New'; color: #0000ff;">ArticleWidth
                        (ArtikelBreedte)</span> en <span
                        style="font-family: 'Courier New'; color: #0000ff;">ArticleHeight
                        (ArikelHoogte)</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">#3#</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Vervangen met de waarde van de
                variabele </span><span
                style="font-family: 'Courier New'; color: #0000ff;">Thickness
                (Dikte)</span><span
                style="font-weight: bold; color: #000000;">.</span></p>

                <p class="p_ImageCaption"
                style="margin: 0px 0px 0px 14px;"><span class="f_Variables"
                style="color: #000080;">Nota: deze macro kan weergegeven worden
                met decimalen of niet,afhankelijk van de waarde van de volgende
                sleutel in de settings van Winpro </span><span
                class="f_Variables"
                style="font-style: italic; color: #000080;">of in de Winpro.ini
                </span><span class="f_Variables" style="color: #000080;">file
                </span><span class="f_Variables"
                style="color: #000080;">(formaat integer I):</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span class="f_Winproini"
                style="color: #000000;">[System]</span></p>

                <p style="margin: 0px 0px 0px 23px;"><span class="f_Winproini"
                style="font-weight: normal;">EpaisseurAvecUneDecimale    = 0 
                macro #3# without decimal (default)</span></p>

                <p style="margin: 0px 0px 0px 23px;"><span class="f_Winproini"
                style="font-weight: normal;">                                           
                = 1  macro #3# with 1 decimal</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">#4#</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Vervangen door de corresponderende RAL
                kleur in Winpro</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">#5#</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Vervangen door een
                voorgedefinieerde tekst. De tekst wordt geselecteerd door het
                tekstnummer toe te wijzen aan de variabele <span
                class="f_Variables">Macro5</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">#6#</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Vervangen door een
                voorgedefinieerde tekst. De tekst wordt geselecteerd door het
                tekstnummer toe te wijzen aan de variabele <span
                class="f_Variables">Macro6</span>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">#Fint#</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Categorie van de binnenzijde
                <a href="finition.php">afwerking</a> ingegeven door de
                gebruiker voor dit niveau van kader.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="76" style="width: 76px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">#Fext#</span></p>
              </td>
              <td width="529"
                style="width: 529px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Categorie van de buitenzijde
                <a href="finition.php">afwerking</a> ingegeven door de
                gebruiker voor dit niveau van kader.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>

        <p style="background: #fffff2;"><span
        style="font-size: 5pt; color: #000000;"> </span></p>

        <p><span style="color: #000000;"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
