<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["DXF drawings","Dessin DXF"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?dessindxf.php"; }
else { parent.quicksync('a7.14'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Dessin DXF </title>
  <meta name="keywords" content="DXF,Drawing,Cross sections">
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
        href="introduction.php">Top</a>  <a href="equipepose.php">Previous</a> 
        <a href="devises.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>You may import DXF files into the program, they will be stored within a specific table under internal format. 
		Those drawings will then be available for defining cut-troughs.</p>

        <p>This feature is available through menu <span style="font-weight: bold;">Technic | Drawings | DXF drawings</span>.</p>

        <p style="text-align: center;"><img src="img/clip0595eng.jpg"
        width="667" height="461" border="0" alt="clip0595eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Code</span>: DXF drawing code.</td>
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
                style="font-size: 5pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';"></span><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>: DXF drawing description.</td>
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
                style="font-size: 5pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';"></span><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Rotation</span>: Rotation into degrees to apply toi this DXF drawing, anti-clockwise.
			  Angle 0 is on the right of the horizontal axis, on top of the vertical one. Value between 0 and 359.9 degrees.</td>
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
              <td><span style="font-weight: bold;">Line thickness</span>:
                Thickness of the drawing border, into mm.</td>
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
                style="font-size: 5pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';"></span><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Horizontal offset</span>:
                Drawing offset into horizontal direction. A positive value offsets the drawing on the right, a negative one on the left.</td>
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
                style="font-size: 5pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';"></span><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Vertical offset</span>:
                Drawing offset into vertical direction. A positive value moves the drawing toward the top, a negative one toward the bottom.</td>
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
                style="font-size: 5pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';"></span><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><img src="img/clip0220.jpg" width="39" height="42" border="0"
                alt="clip0220">: 90° rotation toward the left direction (anti-clockwise).</td>
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
              <td><img src="img/clip0221.jpg" width="39" height="42" border="0"
                alt="clip0221">: 90° rotation toward the right direction (clockwise).</td>
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
              <td><img src="img/clip0222.jpg" width="39" height="42" border="0"
                alt="clip0222">: 180° rotation.</td>
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
              <td><img src="img/clip0223.jpg" width="39" height="42" border="0"
                alt="clip0223">: Mirror image of the drawing according a vertical axis.</td>
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
                style="font-size: 5pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';"></span><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><img src="img/clip0224.jpg" width="39" height="42" border="0"
                alt="clip0224">: Mirror image of the drawing according a horzontal axis.</td>
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
              <td><span style="font-weight: bold;">DXF</span>: Use this button to import a DXF file into WinPro's table, 
			  through a standard open file dialog.</td>
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
              <td><span style="font-weight: bold;">Redraw</span>: Refresh drawing area.</td>
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
              <td><img src="img/clip0225.jpg" width="103" height="57" border="0"
                alt="clip0225">: List of layers into the original file. You may disable any recognized layer by unchecking 
				the corresponding box.</td>
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
                style="font-size: 5pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';"></span><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><img src="img/clip0226.jpg" width="70" height="118" border="0"
                alt="clip0226">: A WinPro DXF drawing allows defining up to 10 levels of layer colour (from 1 to 10). Each level has its 
				own default values (1=blue, 2=red, ...). You may customize this layer colours independantly, keeping in mind that changes 
				are appliable for any DXF drawing.</td>
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
              <td><span style="font-weight: bold;">Length limit</span>: Those buttons helps you moving the insertion points according 
			  the drawing limits:</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 28px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><img src="img/clip0596eng.jpg" width="127" height="56"
                border="0" alt="clip0596eng"> The insertion points limits are moved automatically <span
                style="font-style: italic; font-weight: bold;">on the </span> <span
                style="font-style: italic; font-weight: bold;">meft <img
                src="img/clip0597.gif" width="24" height="19" border="0"
                alt="clip0597"></span> of the DXF, <span
                style="font-style: italic; font-weight: bold;">on the right <img
                src="img/clip0597.gif" width="24" height="19" border="0"
                alt="clip0598"> </span>of the DXF or in the middle of the horizontal axis
                <img src="img/clip0599.gif" width="24" height="19" border="0"
                alt="clip0599"> of the DXF.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 28px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><img src="img/clip0600eng.jpg" width="135" height="43"
                border="0" alt="clip0600eng"> The insertion points limits are moved automatically <span
                style="font-style: italic; font-weight: bold;">on top <img
                src="img/clip0597.gif" width="24" height="19" border="0"
                alt="clip0597"></span> of the DXF, <span
                style="font-style: italic; font-weight: bold;">on the bottom <img
                src="img/clip0597.gif" width="24" height="19" border="0"
                alt="clip0598"> </span>of the DXF or in the middle of the vertical axis <img
                src="img/clip0599.gif" width="24" height="19" border="0"
                alt="clip0599"> of the DXF.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>
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

        <p>Vous pouvez importer des dessins DXF dans WinPro, ceux ci seront
        stockés dans la table des DXFs dans un format propriétaire. Ces dessins
        pourront ensuite être utilisés dans les vues en coupes. </p>

        <p>Cette fonctionnalité est accessible via le menu <span
        style="font-weight: bold;">Technique | Dessins | Dessins DXF</span>.</p>

        <p style="text-align: center;"><img src="img/clip0595.zoom80.gif"
        width="629" height="377" border="0" alt="clip0595"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Code</span>: Code du dessin
                DXF.</td>
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
                style="font-size: 5pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';"></span><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>:
                Description du dessin DXF.</td>
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
                style="font-size: 5pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';"></span><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Rotation</span>: Vous pouvez
                appliquer une rotation en degrés au dessin DXF, dans le sens
                anti-horaire. L'angle 0 est à droite de l'axe horizontal, 90 en
                haut de l'axe vertical. Valeur comprise entre 0 et 359.9
              degrés.</td>
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
              <td><span style="font-weight: bold;">Epaisseur trait</span>:
                Epaisseur de la ligne de trait du dessin, en mm.</td>
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
                style="font-size: 5pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';"></span><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Décalage horizontal</span>:
                Décalage du dessin dans la direction horizontale. Une valeur
                positive décale le dessin sur la droite, une valeur négative
                sur la gauche.</td>
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
                style="font-size: 5pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';"></span><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Décalage vertical</span>:
                Décalage du dessin dans la direction verticale. Une valeur
                positive décale le dessin vers le haut, une valeur négative
                vers le bas.</td>
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
                style="font-size: 5pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';"></span><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><img src="img/clip0220.jpg" width="39" height="42" border="0"
                alt="clip0220">: Rotation de 90° vers la gauche
              (anti-horaire).</td>
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
              <td><img src="img/clip0221.jpg" width="39" height="42" border="0"
                alt="clip0221">: Rotation de 90° vers la droite (horaire).</td>
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
              <td><img src="img/clip0222.jpg" width="39" height="42" border="0"
                alt="clip0222">: Rotation de 180°.</td>
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
              <td><img src="img/clip0223.jpg" width="39" height="42" border="0"
                alt="clip0223">: Image miroir du DXF sur un axe vertical.</td>
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
                style="font-size: 5pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';"></span><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><img src="img/clip0224.jpg" width="39" height="42" border="0"
                alt="clip0224">: Image miroir du DXF sur un axe horizontal.</td>
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
              <td><span style="font-weight: bold;">DXF</span>: Utiliser ce
                bouton pour importer un fichier DXF dans les tables WinPro, un
                dialogue standard d'ouverture de fichier s'affichera.</td>
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
              <td><span style="font-weight: bold;">Redessiner</span>: Utiliser
                ce bouton pour rafraîchir la zone de dessin.</td>
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
              <td><img src="img/clip0225.jpg" width="103" height="57" border="0"
                alt="clip0225">: Liste des layers (calques) dans le DXF
                original. Vous pouvez désactiver n'importe quel calque reconnu
                en décochant la case correspondante.</td>
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
                style="font-size: 5pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';"></span><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><img src="img/clip0226.jpg" width="70" height="118" border="0"
                alt="clip0226">: Un dessin DXF WinPro vous permet de définir
                jusqu'à 10 niveaux de couleurs de calques (numérotés de 1 à
                10). Chaque niveau à ses propres valeurs par défaut (1=bleu,
                2=rouge, ...). Vous pouvez personnaliser ces couleurs  de
                calques individuellement, en gardant à l'esprit que ces
                paramètres sont globaux et affecteront donc tous les
              dessins.</td>
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
              <td><span style="font-weight: bold;">Limites de coupe</span>: Ces
                boutons permettent de caler les points d'insertions par rapport
                aux limites du DXF:</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 28px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><img src="img/clip0596.zoom98.gif" width="144" height="39"
                border="0" alt="clip0596"> Les lignes de points d'insertions se
                placent automatiquement <span
                style="font-style: italic; font-weight: bold;">à</span> <span
                style="font-style: italic; font-weight: bold;">gauche <img
                src="img/clip0597.gif" width="24" height="19" border="0"
                alt="clip0597"></span> du DXF, <span
                style="font-style: italic; font-weight: bold;">à droite <img
                src="img/clip0597.gif" width="24" height="19" border="0"
                alt="clip0598"> </span>du DXF, ou au milieu l'axe horizontal
                <img src="img/clip0599.gif" width="24" height="19" border="0"
                alt="clip0599"> du DXF.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 28px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><img src="img/clip0600.zoom93.gif" width="131" height="39"
                border="0" alt="clip0600"> Les lignes de points d'insertions se
                placent automatiquement <span
                style="font-style: italic; font-weight: bold;">en haut <img
                src="img/clip0597.gif" width="24" height="19" border="0"
                alt="clip0597"></span> du DXF, <span
                style="font-style: italic; font-weight: bold;">en bas <img
                src="img/clip0597.gif" width="24" height="19" border="0"
                alt="clip0598"> </span>du DXF, ou au milieu l'axe vertical <img
                src="img/clip0599.gif" width="24" height="19" border="0"
                alt="clip0599"> du DXF.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
