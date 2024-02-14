<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["DXF 1","DXF 1"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?ouvdxf1.php"; }
else { parent.quicksync('a5.3.10'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>DXF 1</title>
  <meta name="keywords" content="DXF">
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
        href="ouvpricelist.php">Previous</a>  <a href="ouvdxf2.php">Next</a>
        </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">This page
        lets you link automatically basic cross-section information for the
        sash. See also <a href="ouvdxf2.php">next page</a>. </span></p>

        <p style="text-align: center; margin: 14px 0px 0px 0px;"><img
        src="img/clip0153eng.jpg" width="614" height="308" border="0"
        alt="clip0153eng"></p>
		
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Profile</span>: Check this box to let the DXF linked
                to the profile (through the <a href="articles.php">article</a> definition) be automatically
                drawn. The profile must be defined as a 'Main profile' in the
                <a href="profils.php">profile</a> definition.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Steel</span>: Check this box to let the DXF linked
                to the reinforcement (through the <a href="articles.php">article</a> definition) be automatically
                drawn. The profile must be defined as a 'Steel' in the <a
                href="profils.php">profile</a> definition.. You can also input
                on the same line the offset (horizontal and vertical) of the
                steel's drawing relatively to the main profile's drawing.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Glazing bead</span>: Type here the
                horizontal and vertical offsets of the glazing beads relatively to the sash.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Glazing bead joint</span>: Type here the
                horizontal and vertical offsets of the glazing bead joints,
                relatively to the sash. Additionally, you can check the box on
                the same line to flip the joint drawing vertically if needed.</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Glass joint</span>: Type here the
                horizontal and vertical offsets of the glass joints, relatively
                to the sash. Additionally, you can check the box on the same
                line to flip the joint drawing vertically if needed.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Glass</span>: Type here the horizontal and vertical
                offsets of the glass, relatively to the sash.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Sash joint</span>: Check this box to
                let the DXF tied to the sash joint (through the <a
                href="articles.php">article</a> definition) be automatically
                drawn. The box 'Sash joint' must be checked for the
                corresponding article in the article page. You can also type a
                horizontal and a vertical offset relative to the leaf, and
                check boxes to flip the drawing horizontally or vertically.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Outer frame joint</span>: Check this
                box to let the DXF tied to the outer frame joint (through the
                <a href="articles.php">article</a> definition) be
                automatically drawn. The box 'Outer frame joint' must be
                checked for the corresponding article in the article page. You
                can also type a horizontal and a vertical offset relative to
                the leaf, and check boxes to flip the drawing horizontally or
                vertically.</td>
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
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Central joint on sash</span>: Check this
                box to let the DXF tied to the central joint on the sash
                (through the <a href="articles.php">article</a> definition)
                be automatically drawn. The box 'Central joint on sash' must be
                checked for the corresponding article or profile in the article
                or profile page. You can also type a horizontal and a vertical
                offset relative to the leaf, and check boxes to flip the
                drawing horizontally or vertically.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Central joint on outer frame</span>:
                Check this box to let the DXF tied to the central joint on the
                outer frame (through the <a href="articles_1.php">article</a>
                definition) be automatically drawn. The box 'Central joint on
                outer frame' must be checked for the corresponding article or
                profile in the article or profile page. You can also type a
                horizontal and a vertical offset relative to the leaf, and
                check boxes to flip the drawing horizontally or
                vertically.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Weather
                profile</span><span style="color: #000000;">: Check this box to
                let the DXF tied to the weather profile (through the <a
                href="articles.php">article</a> definition) be automatically
                drawn. The profile must be defined to be of the 'Weather
                profile' category in the <a href="profils.php">profile</a>
                definition.</td>
            </tr>
          </tbody>
        </table>
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

        <p class="p_Textestd"><span class="f_Textestd">Cet onglet vous permet
        de lier automatiquement à l'ouvrant un certain nombre d'éléments de
        vues en coupe. Voir également l'</span><a href="ouvdxf2.php">onglet
        suivant</a>.</p>

        <p style="text-align: center;"><img src="img/clip0393.gif" width="575"
        height="289" border="0" alt="clip0393"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Profil</span><span
                class="f_Textestd">: cochez cette case pour que le DXF lié au
                profil (via la fiche <a href="articles.php">article</a>) soit
                automatiquement dessiné. Le profil doit être défini comme un
                profil principal dans la définition du profil.</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Renfort</span><span
                class="f_Textestd">: cochez cette case pour que le DXF lié au
                renfort (via la fiche <a href="articles.php">article</a>) soit
                automatiquement dessiné. Le renfort doit être défini comme un
                profil de renfort dans la définition du profil. Vous pouvez
                indiquer, sur la même ligne, un décalage horizontal et un
                décalage vertical pour le positionnement du dessin.</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Parclose</span>: Indiquez
                <span class="f_Textestd">sur cette ligne un décalage horizontal
                et un décalage vertical pour le positionnement du dessin de
                parclose par rapport à l'ouvrant.</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Joint de parclose</span>:
                Décalage horizontal <span class="f_Textestd">et décalage
                vertical pour le positionnement du dessin de joint de parclose
                par rapport à l'ouvrant. Une case à cocher permet de faire
                basculer le dessin du joint verticalement, si
              nécessaire.</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Joint de vitrage</span>:
                Décalage horizontal <span class="f_Textestd">et décalage
                vertical pour le positionnement du dessin de joint de vitrage
                par rapport à l'ouvrant. Une case à cocher permet de faire
                basculer le dessin du joint verticalement, si
              nécessaire.</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Vitrage</span>: Décalage
                horizontal <span class="f_Textestd">et décalage vertical pour
                le positionnement du dessin de vitrage par rapport à
                l'ouvrant.</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Joint de frappe sur
                ouvrant</span>: Cliquez cette case pour dessiner
                automatiquement le DXF du joint de frappe sur ouvrant lié au
                profil (via la fiche <span style="color: #0000ff;"><a
                href="articles.php">article</a></span>). La case 'Jt frappe
                ouvrant' doit être cochée pour l'article correspondant dans
                l'onglet article. <span class="f_Textestd">Vous pouvez
                indiquer, sur la même ligne, un décalage horizontal et un
                décalage vertical pour le positionnement du dessin, ainsi que
                cocher les cases pour basculer horizontalement ou verticalement
                le dessin du joint.</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Joint de frappe sur
                dormant</span>: Cliquez cette case pour dessiner
                automatiquement le DXF du joint de frappe sur dormant lié au
                profil (via la fiche <span style="color: #0000ff;"><a
                href="articles.php">article</a></span>). La case 'Jt frappe
                dormant' doit être cochée pour l'article correspondant dans
                l'onglet article. <span class="f_Textestd">Vous pouvez
                indiquer, sur la même ligne, un décalage horizontal et un
                décalage vertical pour le positionnement du dessin, ainsi que
                cocher les cases pour basculer horizontalement ou verticalement
                le dessin du joint.</span></td>
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
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Joint central sur
                ouvrant</span>: Cliquez cette case pour dessiner
                automatiquement le DXF du joint central sur ouvrant lié au
                profil (via la fiche <span style="color: #0000ff;"><a
                href="articles.php">article</a></span>). La case 'Jt central
                ouvrant' doit être cochée pour l'article correspondant dans
                l'onglet article. <span class="f_Textestd">Vous pouvez
                indiquer, sur la même ligne, un décalage horizontal et un
                décalage vertical pour le positionnement du dessin, ainsi que
                cocher les cases pour basculer horizontalement ou verticalement
                le dessin du joint.</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Joint central sur
                dormant</span>: Cliquez cette case pour dessiner
                automatiquement le DXF du joint central sur dormant lié au
                profil (via la fiche <span style="color: #0000ff;"><a
                href="articles.php">article</a></span>). La case 'Jt central
                dormant' doit être cochée pour l'article correspondant dans
                l'onglet article. <span class="f_Textestd">Vous pouvez
                indiquer, sur la même ligne, un décalage horizontal et un
                décalage vertical pour le positionnement du dessin, ainsi que
                cocher les cases pour basculer horizontalement ou verticalement
                le dessin du joint.</span></td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Rejet d'eau</span>: Cliquez
                cette case pour dessiner automatiquement le DXF du rejet d'eau
                lié au profil (via la fiche <span style="color: #0000ff;"><a
                href="articles.php">article</a></span>). <span
                class="f_Textestd">Le profil doit être défini dans la catégorie
                "Rejet d'eau" dans la définition du </span><span
                style="color: #0000ff;"><a
                href="profils.php">profile</a></span>.</td>
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
