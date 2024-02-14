<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Colours","Couleurs"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?syscouleurs.php"; }
else { parent.quicksync('a4.4.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Couleurs</title>
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
        href="introduction.php">Top</a>  <a
        href="sysdescription.php">Previous</a>  <a
        href="sysmillings.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left">

        <p style="background: #fffff2;"><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>

        <p style="background: #fffff2;"><span
        style="font-size: 5pt; color: #000000;"> </span></p>

        <p style="background: #fffff2;"><span style="color: #000000;">This page
        lets you define which colours are authorised and which can be used as
        standard RAL colours.</span></p>

        <p style="text-align: center; margin: 14px 0px 0px 0px;"><img
        src="img/clip5eng.jpg" width="895" height="396" border="0"
        alt="clip5eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Allowed
                colours</span>: Select in this
                list all the colours which are standard for this system. Those colours will fill combo list of colour during window creation, as long as the box <img src="img/clip7eng.jpg" width="94"
                height="20" border="0" alt="Clip7eng"> is not checked. Colours listed here are previously created into menu Data | Basic data | Colours.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Standard
                RAL colours</span>: Select in
                this list all the colours which can be used as standard RAL
                colours or semi-standard colours (mostly used within aluminium system of profiles).</td>
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
              <td><span style="font-weight: bold;">Limit choice of RAL colours
			  </span>: when checked, the user is unable to input a non standard RAL colour anymore, only the standard RAL colours will fill the combo lists in case of non standard RAL
			  (<img src="img/clip7eng.jpg" width="94"
                height="20" border="0" alt="Clip7eng"> checked).<br>
                Moreover, using the  <span
                style="font-weight: bold;">Choose the sides</span> button, a choice by side, inside or outside colour, for each RAL colour may be done. 
				Both sides are available for each standard RAL colour by default.<br>
                By default, when a window is created with a RAL colour, WinPro will search into the bar length 
				tab of each profile to consume the article that correponds to the colour input by the user. <br>
                In case of no match found, WinPro will select the appropriate article within description tab of the profile.<br>
                Adding a key into Winpro.ini (or settings table), and assigning it the value <span class="f_Variables">1</span>,
                Winpro will consume straight the specified article from description tab of the profile, in case of RAL colour.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>       <span class="f_Variables">[System]</span></p>

        <p>       <span class="f_Variables">Limiter RAL</span><span
        style="font-family: 'Courier New';"></span><span
        class="f_Variables">=</span><span
        style="font-family: 'Courier New';"></span><span
        class="f_Variables">0</span><span
        style="font-family: 'Courier New'; font-style: italic;"> (default value) </span><span style="font-family: 'Courier New';"></span><span
        style="font-family: 'Courier New'; font-style: italic; font-weight: bold;"> or </span><span
        style="font-family: 'Courier New';"></span><span
        class="f_Variables">1</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>


		

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Finishing</span><span
                class="f_Textestd">: This is optional to the colour and offers the following features:</span><br>
                       <span class="f_Textestd">When printing documents, the  </span><a href="finition.php">finishing</a><span
                class="f_Textestd"> appears.</span><br>
                       <span class="f_Textestd">The user may use some local and global variables initialized by WinPro and containing the category of the input </span><a
                href="finition.php">finishing</a><span
                class="f_Textestd">.</span><br>
                       <span class="f_Textestd">Macros </span><span
                class="f_Variables">#Fint#</span><span
                class="f_Textestd"> and </span><span
                class="f_Variables">#Fext#</span><span
                class="f_Textestd"> used into components descriptions are replaced with descriptions of corresponding </span><a
                href="finition.php">finishing</a><span
                class="f_Textestd">.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Limit
                 finishing selection</span><span class="f_Textestd">: When finishing box is checked, the user may limit 
                </span><a href="finition.php">finishing</a><span
                class="f_Textestd"> to the one created through menu entry : </span><span class="f_Textestd">Technic | Window |
                Finishing </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Note</span><span
                style="text-decoration: underline;">:</span></p>

                <p style="margin: 0px 0px 0px 13px;">Winpro may easily manage with 3 types (or groups) of colours, 
				considering also that into the allowed list of colours, "sub-groups" may be distinguished too.</p>
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

<div class="FRA">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>Cet onglet vous permet de définir quelles sont les couleurs
        autorisées pour les menuiseries de ce système.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0296.jpg" width="562"
        height="304" border="0" alt="Clip0296"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Couleurs autorisées</span>:
                les couleurs autorisées pour ce système seront disponibles
                <span class="f_Textestd">dans les listes combo
                permettant</span> de définir la teinte de la fenêtre, pour
                autant que la saisie de ce repère ne soit pas effectué en
                teinte RAL (la case <img src="img/clip0198.gif" width="57"
                height="10" border="0" alt="Clip0198"> doit donc être
                désactivée).<br>
                Les couleurs apparaissant dans ces 2 listes ont été créées au
                préalable via le point de menu Données | Données de base |
                Couleurs.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Couleurs RAL
                Standard</span>: cochez la liste des couleurs RAL considérées
                comme semi-standard pour ce système (cette possibilité est
                généralement utilisée pour les châssis aluminium).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Limiter le choix des
                couleurs RAL</span>: en activant cette case, nous empêchons
                l'utilisateur de saisir une teinte RAL hors standard. Seules
                les teintes RAL standard seront listées dans les listes combo
                en cas de saisie en teinte ral (<img src="img/clip0198.gif"
                width="57" height="10" border="0" alt="Clip0198"> activée).<br>
                De plus à l'aide du bouton <span
                style="font-weight: bold;">Choix faces</span>, nous pouvons
                définir, pour chaque teinte Ral, s'il doit être proposé en face
                intérieure et/ou en face extérieure. Par défaut, les 2 faces
                sont disponibles pour tous les Ral standard.<br>
                Par défaut, en ayant saisi une menuiserie en teinte Ral, Winpro
                passera dans l&rsquo;onglet de la barre de chaque profil afin
                d&rsquo;y consommer l&rsquo;article dont la couleur correspond
                à celle saisie par l&rsquo;utilisateur. <br>
                Dans le cas où il ne trouve pas de correspondance de couleur,
                il consommera alors l&rsquo;article adéquat mentionné dans
                l&rsquo;onglet description du profil.<br>
                En ajoutant une nouvelle clé dans le fichier Winpro.ini (ou table settings) et en
                lui assignant la valeur <span class="f_Variables">1</span>,
                Winpro consommera directement l&rsquo;article adéquat spécifié
                dans l&rsquo;onglet description du profil, en cas de saisie
              Ral.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>       <span class="f_Variables">[System]</span></p>

        <p>       <span class="f_Variables">Limiter RAL</span><span
        style="font-family: 'Courier New';"></span><span
        class="f_Variables">=</span><span
        style="font-family: 'Courier New';"></span><span
        class="f_Variables">0</span><span
        style="font-family: 'Courier New'; font-style: italic;"> (valeur par
        défaut) </span><span style="font-family: 'Courier New';"></span><span
        style="font-family: 'Courier New'; font-style: italic; font-weight: bold;"> ou </span><span
        style="font-family: 'Courier New';"></span><span
        class="f_Variables">1</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Finition</span><span
                class="f_Textestd">: Cette notion est complémentaire et
                optionnelle à la couleur et offre les possibilités
                suivantes:</span><br>
                       <span class="f_Textestd">Lors de l'édition des
                documents, la </span><a href="finition.php">finition</a><span
                class="f_Textestd"> apparaît.</span><br>
                       <span class="f_Textestd">Le paramétreur dispose de
                quelques variables locales et globales initialisées par Winpro
                et contenant la catégorie de la </span><a
                href="finition.php">finition</a><span
                class="f_Textestd"> saisie.</span><br>
                       <span class="f_Textestd">Les macros </span><span
                class="f_Variables">#Fint#</span><span
                class="f_Textestd"> et </span><span
                class="f_Variables">#Fext#</span><span
                class="f_Textestd"> utilisées dans les descriptions des
                composants consommés dans le paramétrage seront remplacées par
                la description des </span><a
                href="finition.php">finitions</a><span
                class="f_Textestd"> correspondantes.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Limiter
                choix finitions</span><span class="f_Textestd">: Lorsque la
                case finition est activée, il est possible de limiter les
                </span><a href="finition.php"> finitions </a><span
                class="f_Textestd">à celles qui ont été créées via le point de
                menu: </span><span class="f_Textestd">Technique | Châssis |
                Finitions </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Remarque</span><span
                style="text-decoration: underline;">:</span></p>

                <p style="margin: 0px 0px 0px 13px;">Winpro peut donc gérer
                aisément 3 types (ou groupes) de teintes. En sachant que dans
                les couleurs autorisées, nous pouvons distinguer des
                "sous-groupes".</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_Textestd"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
