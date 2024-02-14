<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Dimensions","Dimensions"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?vitdimensions.php"; }
else { parent.quicksync('a5.8.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Dimensions</title>
  <meta name="keywords" content="">
  <meta http-equiv="Content-Type"
  content="application/xhtml+xml; charset=iso-8859-1">
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
        href="vitdescription.php">Previous</a>  <a
        href="vitwarmedge.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>This page defines the dimensional limits of the glazing.</p>

        <p style="text-align: center; margin: 14px 0px 0px 0px;"><img
        src="img/clip0182eng.jpg" width="629" height="413" border="0"
        alt="clip0182eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Thickness (mm)</span>: The
                thickness of the glazing. This will be used to select the
                correct glazing bead.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Clearance</span>: Standard
                clearance around the glazing.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Glazing frame</span>: Width
                of air between glass panes. This will be used to limit the
                choice of glazing bars. It is also smetimes used for EDI
              orders.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">2nd spacer</span>: Width of
                air between glass sheets in case of triple glazing.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Maximum surface (m²)</span>:
                Maximum surface accepted, into square meters.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Maximum height (mm)</span>:
                Maximum height accepted, into millimeters.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Maximum width (mm)</span>:
                Maximum width accepted, into millimeters.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Maximum ratio
                width/height</span>: Maximum accepted ratio between width and
                height.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Can be rotated</span>: Check
                this box id you can swap the maximum width and height when
                checking for maximum dimensions.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Weight/m²</span>: Set here
                the weight for one square meter of this glass unit. This will
                fill global variable <span class="f_Variables">_FillWeight
                []</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Next glass if out of
                dimension</span>: If the glass is larger than any of the above
                limits, the glazing cannot be used. In such case, WinPro will
                check the glazing specified here, and check again, until
                eventually the limits are sufficient, or this field is empty.
                In this later case, this will generate an error that will be
                displayed to the user.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">U coefficient</span>: Ug
                coefficient value for this glass unit. This will also fill
                global variable <span class="f_Variables">_FillUg []</span>.
                Only for users of the Thermic Module, see release note <a
                href="8_1_0_x.php">8.1.0</a> for more details.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Solar factor</span>: Solar
                factor value for this glass unit. This will also fill global
                variable <span class="f_Variables">_FillSolFac []</span>. Only
                for users of the Thermic Module, see release note <a
                href="8_1_0_x.php">8.1.0</a> for more details.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Light transmission</span>:
                Light transmission value for this glass unit. This will also
                fill global variable <span class="f_Variables">_FillLtTrans
                []</span>. Only for users of the Thermic Module, see release
                note <a href="8_1_0_x.php">8.1.0</a> for more details.</td>
            </tr>
          </tbody>
        </table>
        </div>

		<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
              style="width: 605px; height: 45px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; color: #000000; text-decoration: underline;">Note:</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">For a shaped glazing, the default
                surface computation considered by the program would be the
                rectangle containing the shape and not the exact surface
                value.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

		<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>

        <p></p>

        <p></p>
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

        <p>Cette page définie les limites dimensionnelles du vitrage. </p>

        <p style="text-align: center; margin: 14px 0px 0px 0px;"><img
        src="img/clip0182fra.jpg" width="649" height="422" border="0"
        alt="clip0182fra"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Epaisseur (mm)</span>:
                Epaisseur du vitrage. Utilisé pour sélectionner la
              pareclose.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Aisance</span>: Aisance
                standard totale autour du vitrage.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Intercalaire</span>: Largeur
                de l'espace d'air entre deux feuille de verre, utilisé
                notamment pour limiter l'utilisation des croisillons incorporés
                dans le vitrage, également reprit dans certains EDI vers les
                vitriers.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Intercalaire 2</span>:
                Largeur de l'espace d'air entre deux feuille de verre, dans le
                cas d'un vitrage triple.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Surface maximum (m²)</span>:
                Surface maximum autorisée, en mètres carrés.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Hauteur maximum (mm)</span>:
                Hauteur maximum autorisée, en millimètres.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Largeur maximum (mm)</span>:
                largeur maximum autorisée, en millimètres.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Rapport maximum
                hauteur/largeur</span>: Rapport maximum autorisée entre la
                largeur et la hauteur.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Retournable</span>: Lorsque
                cette case est cochée, WinPro bascule le rapport
                hauteur/largeur lors de la recherche des limites maximums.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Poids m²</span>: Indiquez
                ici le poids au mètre carré pour ce volume de verre. Cette
                valeur ira renseigner la variable globale de remplissage <span
                class="f_Variables">_RemplPoids []</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Code du vitrage en cas de
                dépassement de dimension</span>: Si le vitrage est plus grand
                que les limites autorisées, il ne pourra pas être utiliser et
                WinPro affichera un message d'erreur. Si ce champs est
                renseigné, WinPro ira chercher le vitrage indiqué et vérifiera
                à nouveau les limites maximums, jusqu'à ce que les limites
                soient suffisantes ou que le champs soit vide, auquel cas le
                message d'erreur sera finalement affiché.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Coefficient U</span>:
                Coefficient Ug du vitrage. Cette valeur viendra remplir la
                variable globale <span class="f_Variables">_RemplUg []</span>.
                Uniquement pour les utilisateurs du Module Thermique, voir note
                de version <a href="8_1_0_x.php">8.1.0</a> pour plus de
              détails.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Facteur solaire</span>:
                Facteur solaire du vitrage. Cette valeur viendra remplir la
                variable globale <span class="f_Variables">_RemplFacSol
                []</span>. Uniquement pour les utilisateurs du Module
                Thermique, voir note de version <a href="8_1_0_x.php">8.1.0</a>
                pour plus de détails.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Transmission
                lumineuse</span>: Facteur solaire du vitrage. Cette valeur
                viendra remplir la variable globale <span
                class="f_Variables">_RemplFacSol []</span>. Uniquement pour les
                utilisateurs du Module Thermique, voir note de version <a
                href="8_1_0_x.php">8.1.0</a> pour plus de détails.</td>
            </tr>
          </tbody>
        </table>
        </div>

		<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
              style="width: 605px; height: 45px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; color: #000000; text-decoration: underline;">Note:</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Pour un vitrage en forme, la surface considérée par défaut par le programme sera la surface du rectangle contenant la forme plutot que  
				la surface exacte.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

		<p class="p_Textestd"><span class="f_Textestd">&nbsp;</span></p>

        <p></p>

        <p></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
