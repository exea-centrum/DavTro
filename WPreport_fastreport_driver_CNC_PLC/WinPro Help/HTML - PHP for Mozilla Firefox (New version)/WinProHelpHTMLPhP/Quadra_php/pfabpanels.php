<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Panels","Panneaux"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?pfabpanels.php"; }
else { parent.quicksync('a5.11.5'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Panneaux</title>
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
        href="pfabvitrages.php">Previous</a>  <a
        href="pfabprofiles.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p><span style="font-size: 5pt;"></span></p>

        <p>This page lets you define the simple panels that can be used to
        create the composed panel. You have to give the rules for using each
        panel. The panels will be examined by WinPro in the order in which they
        are defined.</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p>You may define a shape for each panel, using one of both methods:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>you may select a fixed shape from the shape list below the
                formula, </td>
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
              <td>you may update the variables <span
                class="f_Variables">FillingShape, DimA, DimB, ...,
                Orientation</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -13px; margin: 0px 0px 0px 40px;"> </p>

        <p style="background: #fffff2;"><span style="color: #000000;">See the
        <a href="Pfabvariables.php">Variables</a> page for more information.
        You may also use <a href="manipulation_de_formes.php">shape handling
        functions</a> to compute a new shape.</span></p>

        <p style="text-indent: -13px; margin: 0px 0px 0px 40px;"> </p>

        <p style="text-align: center;"><img src="img/clip0213eng.jpg" width="555"
        height="329" border="0" alt="clip0213eng"></p>

        <p>The page is divided in 3 sections (left, center, right).</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p><span style="font-weight: bold; text-decoration: underline;">The
        left section</span> contains the list of panels. Select a line in this
        list, and type the panel code in the input field immediately on top of
        the list.</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p>Below the list, there are several check boxes, which let you define
        a few usage conditions:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Do not use for cost
                price</span>: the price of the component will not be used when
                computing the cost price.</td>
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
              <td><span style="font-weight: bold;">Do not use for selling
                price</span>: the price of the component will not be used when
                computing the selling price.</td>
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
              <td><span style="font-weight: bold;">Simpl. fact.
                document</span>: the component will be listed onto simplified
                factory documents.</td>
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
              <td><span style="font-weight: bold;">Customer documents</span>:
                the component will be mentioned (with quantity and dimension)
                onto customer documents (quotation, confirmation,
              delivery).</td>
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
              <td><span style="font-weight: bold;">Valued</span><span
                style="color: #000000;">: if the component is mentioned onto
                customer document, this check box tells WinPro its selling
                price must also be detailed.</span></td>
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
              <td><span style="font-weight: bold;">Delivery preparation</span>:
                the component will be listed onto delivery preparation
                documents.</td>
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
              <td><span style="font-weight: bold;">Quality control</span><span
                style="color: #000000;">: the component will be listed onto
                quality control documents.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 48px;"> </p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p><span style="font-weight: bold; text-decoration: underline;">The
        central section</span> contains the list of colours authorized into the
        <a href="pfabdescription.php">Description</a> page. If the panel has no
        colour rule to follow, you simply need to select nothing from this
        list. If the profile (and its formula) only apply for specific colours,
        you must select each colour as appropriate.</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">The <span
        style="font-weight: bold">Reverse selection</span> button above the
        list lets you reverse all of the list's selections.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p>Below this colour list, you have a few extra check boxes:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Standard</span>: When this box is
                checked, the component can be used with any of the standard
                colours.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">RAL 1
                colour</span>: When this box is checked, the component can be
                used with any of the non-standard RAL single-colour.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">RAL 2
                colours</span>: When this box is checked, the component can be
                used with any of the non-standard RAL bi-colour.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Visible
                from inside</span>: Check this box if the component is visible
                from inside the building.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Visible
                from outside</span>: Check this box if the component is visible
                from outside the building.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">No
                colour</span>: Check this box if the component colour is
                undefined.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd" style="font-weight: bold;">Tolerance
                to deduct</span>: when checked, WinPro will deduce the panel
                clearance from overall dimensions, it will then be useless to
                deduce clearance by rule. See <a href="rn707x.php">release note
                7.0.73</a>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -13px; margin: 0px 0px 0px 40px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="526"
                style="width: 526px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;"><span
                style="font-size: 14pt"><span style="font-size: 12pt"><span
                style="color:#ff0000">Important !</span></p>

                <p style="margin: 0px 0px 0px 13px;">The considered colour
                depends on the value of a key from <em>settings</em> table:
                </p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Winproini"><strong><span
                class="f_Textestd">[System]</span></strong></span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Winproini">PanneauFabriqueDormant</span> =
                0    ;    Composed panel components retrieve the sash frame
                colour, if no colour is set when inputing the panel (default
                value). Then, the formula should be read "for a standard sash
                frame colour" or "for a sash frame RAL 1 colour", depending on
                checkboxes, as long as no colour is set at input.</p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Winproini">PanneauFabriqueDormant</span> =
                1    ;    Composed panel components retrieve the outer frame
                colour, if no colour is set when inputing the panel AND the
                panel is within a fixed pane. Then, the formula should be read
                "for a standard outer frame colour" or "for an outer frame RAL
                1 colour", depending on checkboxes, as long as the sash frame
                is a fixed pane and no colour is set for the panel at input.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;"> </span></p>

        <p><span style="font-weight: bold; text-decoration: underline;">The
        right section</span> contains the panel's formula, and an additional
        combo:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Shape list</span>: you can
                select a shape here, as explained on top of the page.</td>
            </tr>
          </tbody>
        </table>
        </div>

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
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p><span style="font-size: 5pt;"></span></p>

        <p>Cet onglet permet de définir les panneaux à découper composant le
        panneau fabriqué. Les panneaux seront évaluées par WinPro dans l'ordre
        dans lequel ils sont définis. </p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p>Vous pouvez définir une forme pour chaque panneaux, en utilisant
        l'une de ces 2 méthodes: </p>

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

        <p style="text-indent: -13px; margin: 0px 0px 0px 40px;"> </p>

        <p style="background: #fffff2;"><span style="color: #000000;">Voir la
        page des <a href="Pfabvariables.php">Variables</a> pour plus
        d'informations. Voir également les fonctions de <a
        href="manipulation_de_formes.php">manipulation de formes</a> pour
        calculer une nouvelle forme.</span></p>

        <p style="text-indent: -13px; margin: 0px 0px 0px 40px;"> </p>

        <p style="text-align: center;"><img src="img/clip0509.zoom92.gif"
        width="516" height="362" border="0" alt="clip0509"></p>

        <p>Cette page se divise en 3 zones (gauche, centre et droite).</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p><span style="font-weight: bold; text-decoration: underline;">La zone
        gauche</span> contient la liste des panneaux à découper à consommer
        pour ce panneau fabriqué. Sélectionner une ligne dans cette liste, et
        saisissez le code panneau dans le champ de saisie immédiatement
        au-dessus de la liste.</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p>Sous cette liste, plusieurs cases à cocher permettent de préciser
        les conditions d'utilisation suivantes:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="25"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Exclure du pr.
                revient</span>: le prix du panneau ne sera pas utilisé pour
                calculer le prix de revient.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="25"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Exclure du pr. vente</span>:
                le prix du panneau ne sera pas utilisé pour calculer le prix de
                vente.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Plan d'atelier
                simplifié</span>: le panneau sera imprimé sur le document plan
                d'atelier simplifié.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Documents client</span>: le
                panneau sera imprimé sur les documents client (devis,
                confirmation, note d'envoi).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Valorisation</span>: si le
                panneau est coché à imprimer sur les documents client, cette
                case cochée détaillera le prix de vente sur ces documents.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Préparation
                livraison</span>: le panneau sera imprimé sur les documents de
                préparation à la livraison.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Contrôle qualité</span>: le
                panneau sera imprimé sur le document de contrôle qualité.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 48px;"> </p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p><span style="font-weight: bold; text-decoration: underline;">La zone
        centrale</span> contient la liste des couleurs autorisées pour ce le
        panneau dans l'onglet <a href="pfabdescription.php">Description</a>. Si
        le panneau n'est pas dépendant de la couleur, il suffit de ne rien
        sélectionner dans cette liste. Si le panneau (et sa formule) s'applique
        uniquement pour certaines couleurs, sélectionnez ces couleurs dans la
        liste.</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Le bouton </span><span
        class="f_Textestd" style="font-weight: bold;">Inverser
        sélection</span><span class="f_Textestd">au-dessus de cette liste vous
        permet d'inverser la sélection dans la liste.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p>Sous cette liste, quelques options supplémentaires peuvent être
        utilisées::</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Standard</span>: lorsque
                cette case est cochée, ce panneau peut être utilisé avec
                n'importe laquelle des couleurs standards.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">RAL 1 couleur</span>:
                lorsque cette case est cochée, ce panneau peut être utilisé
                avec n'importe laquelle des teintes RAL non-standards 1
              couleur.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">RAL 2 couleurs</span>:
                lorsque cette case est cochée, ce panneau peut être utilisé
                avec n'importe laquelle des teintes RAL non-standards 2
                couleurs.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Visible de
                l'intérieur</span>: Cocher cette case si le panneau est visible
                de l'intérieur de la construction.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Visible de
                l'extérieur</span>: Cocher cette case si le panneau est visible
                de l'extérieur de la construction.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Sans couleur</span>: Cocher
                cette case si le panneau est sans couleur.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 25px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="23"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Déduire aisance</span>:
                lorsque la case est cochée, WinPro déduit l'aisance du le
                panneau des dimensions calculées, de sorte qu'il n'est plus
                nécessaire de déduire l'aisance par formule. Voir <a
                href="rn707x.php">note de version 7.0.73</a>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -13px; margin: 0px 0px 0px 40px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="526"
                style="width: 526px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;"><span
                style="font-size: 14pt"><span style="font-size: 12pt"><span
                style="color:#ff0000">Important !</span></p>

                <p style="margin: 0px 0px 0px 13px;">La couleur considérée ici dépend d'une clef dans 
				la table <em>settings</em>:
                </p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Winproini"><strong><span
                class="f_Textestd">[System]</span></strong></span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Winproini">PanneauFabriqueDormant</span> =
                0    ;    Les composants du panneau suivront la couleur de l'ouvrant si aucune couleur n'est renseignée 
				à la saisie (valeur par défaut). La formule pour ce composant se lira donc 
				"pour une couleur d'ouvrant standard" ou bien "pour un ouvrant en RAL 1 couleur", en fonction des cases 
				à cocher, tant qu'aucune couleur n'est précisée en saisie pour ce panneau.</p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Winproini">PanneauFabriqueDormant</span> =
                1    ;    Les composants du panneau suivront la couleur du dormant si aucune couleur n'est renseignée 
				en saisie ET que le panneau se trouve dans un fixe simple cadre. La formule pour ce composant se lira donc
				"pour une couleur de dormant standard" ou bien "pour un dormant en teinte RAL 1 couleur", en fonction 
				des cases à cocher, tant qu'aucune couleur n'est précisée en saisie pour le panneau ET que le panneau 
				se trouve dans un fixe simple cadre.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;"> </span></p>

        <p><span style="font-weight: bold; text-decoration: underline;">La zone
        de droite</span> contient la formule pour le panneau, ainsi qu'un combo
        complémentaire:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 25px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="23"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Liste de forme</span>:
                sélectionner une forme dans ce dialogue, comme détaillé en haut
                de la page.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
