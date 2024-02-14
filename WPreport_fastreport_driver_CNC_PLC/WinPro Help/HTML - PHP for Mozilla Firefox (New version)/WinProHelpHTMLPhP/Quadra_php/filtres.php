<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Filters","Filtres"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?filtres.php"; }
else { parent.quicksync('a4.1'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Filtres</title>
  <meta name="keywords"
  content="Filtre,_@Blanc,_@Noir,_@Rouge,_@Jaune,_@Vert,_@Bleu,_@Cyan,_@Magenta,_Visible,_CouleurFond,_CouleurTexte">
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
        href="composantsdebase.php">Previous</a>  <a
        href="questionsglobales.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>Filters are suitable to hide by formula some components like
        systems, colours, outer frames, ...</p>

        <p>They are also suitable for list coloration, with a limited set of
        colour for text and background.</p>

        <p>May be used for any combo list shown during a window creation into a
        customer order.</p>

        <p></p>

        <p>A filter may define up to 3 variables:</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="122"
                style="width: 122px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Variable</span></p>
              </td>
              <td width="443"
                style="width: 443px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="122"
                style="width: 122px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 6px;"><span
                style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"></span><span
                class="f_Variables">_Visible</span></p>
              </td>
              <td width="443"
                style="width: 443px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">The variable is worth <span
                class="f_Variables">True()</span> by default.<br>
                To hide the element, the value <span
                class="f_Variables">False()</span> should then be affected.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="122"
                style="width: 122px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_BackgroundColour</span></p>
              </td>
              <td width="443"
                style="width: 443px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Define background colour of
                the element into the list. Available values are<span
                class="f_Variables"> @White, _@Red, _@Yellow, _@Green, _@Blue,
                _@Cyan, _@Magenta, _@Grey</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="122"
                style="width: 122px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_TextColour</span></p>
              </td>
              <td width="443"
                style="width: 443px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Define text colour of the
                element into the list. Available values are<span
                class="f_Variables"> @White, _@Red, _@Yellow, _@Green, _@Blue,
                _@Cyan, _@Magenta, _@Grey</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p>For setting up a filter, we may use <a href="formuledesite.php">site
        variables</a> and <a href="formuleutilisateur.php">user
        variables</a></p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="503"
                style="width: 503px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Note</span><span
                style="text-decoration: underline;">:</span> </p>

                <p style="margin: 0px 0px 0px 13px;">Customer variables are
                unavailable for setting up a filter for client.</p>

                <p style="margin: 0px 0px 0px 13px;">There are other conflicts
                concerning filters depending on a customer variable :</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>The customer code should be input first into the
                        order or quote, before creating windows.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>The customer code shoud not be modified
                      afterward.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="margin: 0px 0px 0px 13px;">The content of lists may
                be incorrect, windows created may be changed automatically in
                case of bas used or if conflicts are not respected.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

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

        <p>Les filtres sont des formules permettant de masquer des  composants
        techniques tels que système, couleur, dormant, ...</p>

        <p>Ils permettent également de différencier ces éléments dans les
        listes par une palette limitée de teintes de fond et teintes de
        texte.</p>

        <p>Ils sont employés pour la plupart des listes consultables via les
        différentes fenêtres lors de la saisie d'une commande client.</p>

        <p> </p>

        <p>Un filtre peut définir jusqu'à 3 variables:</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="122"
                style="width: 122px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Variable</span></p>
              </td>
              <td width="443"
                style="width: 443px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="122"
                style="width: 122px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 6px;"><span
                style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"></span><span
                class="f_Variables">_Visible</span></p>
              </td>
              <td width="443"
                style="width: 443px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Cette variable est à <span
                class="f_Variables">Vrai()</span> par défaut.</p>

                <p style="margin: 0px 0px 0px 13px;">Pour rendre invisible cet
                élément, il faut alors lui affecter la valeur <span
                class="f_Variables">Faux()</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="122"
                style="width: 122px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_CouleurFond</span></p>
              </td>
              <td width="443"
                style="width: 443px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Défini la couleur de fond de
                l'élément dans la liste. Les valeurs disponibles sont <span
                class="f_Variables">_@Blanc, _@Rouge, _@Jaune, _@Vert, _@Bleu,
                _@Cyan, _@Magenta, _@Gris</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="122"
                style="width: 122px; border: solid 1px #c0c0c0;"><p
                style="text-indent: -1px; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_CouleurTexte</span></p>
              </td>
              <td width="443"
                style="width: 443px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Défini la couleur du texte de
                l'élément dans la liste. Les valeurs disponibles sont <span
                class="f_Variables">_@Noir, _@Rouge, _@Jaune, _@Vert, _@Bleu,
                _@Cyan, _@Magenta, _@Gris </span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p>Pour le paramétrage d'un filtre nous disposons des <a
        href="formuledesite.php">variables de site</a> et des <a
        href="formuleutilisateur.php">variables utilisateur</a></p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="503"
                style="width: 503px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Remarque</span><span
                style="text-decoration: underline;">:</span> </p>

                <p style="margin: 0px 0px 0px 13px;">Les variables spécifique
                client sont indisponibles pour les filtres de client.</p>

                <p style="margin: 0px 0px 0px 13px;">Il y a également quelques
                contraintes concernant les filtres dépendant de variables
                client :</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Le code client doit être saisi dans le devis ou la
                        commande avant de commencer la saisie des repères.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Le code client ne peut par la suite pas être
                      modifié.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="margin: 0px 0px 0px 13px;">Le contenu des listes peut
                être incorrect, les repères saisis peuvent être modifiés
                automatiquement avec des valeurs incohérentes en cas de non
                respect de ces contraintes.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
