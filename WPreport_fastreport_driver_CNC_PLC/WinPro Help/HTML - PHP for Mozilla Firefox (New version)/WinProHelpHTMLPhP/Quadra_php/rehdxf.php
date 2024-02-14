<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["DXF","DXF"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?rehdxf.php"; }
else { parent.quicksync('a5.5.8'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>DXF</title>
  <meta name="keywords" content="Filter">
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
        href="rehpricelist.php">Previous</a>  <a
        href="peripheralprofilesfilter.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p class="p_Textestd"><span class="f_Textestd">This page lets you link automatically basic cross-section 
	  information for the peripheral profile (or sill)</span>. </p>

        <p style="text-align: center;"><img src="img/clip0253eng.jpg" width="333" height="150" border="0" alt="clip0253eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Profile</span>: Check this box to let the DXF linked to the profile (through the 
				<a href="articles.php">article</a> definition) be automatically drawn. The profile must be defined as a 'Main profile' in the 
				<a href="profils.php">profile</a> definition. You can also input on the same line the offset (horizontal and vertical) 
				of the profile's drawing.
				</td>
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
                style="font-weight: bold;">Steel</span>: Check this box to let the DXF linked to the reinforcement (through the 
				<a href="articles.php">article</a> definition) be automatically drawn. The profile must be defined as a 'Steel' in the 
				<a href="profils.php">profile</a> definition. You can also input on the same line the offset (horizontal and vertical) 
				of the steel's drawing relatively to the main profile's drawing.
				</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>

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
      <td align="left"><p class="p_Textestd"><span class="f_Textestd">Cet
        onglet vous permet de lier automatiquement au profil de rehausse un
        certain nombre d'éléments de vues en coupe</span>. </p>

        <p style="text-align: center;"><img src="img/clip0517.zoom92.gif"
        width="411" height="186" border="0" alt="clip0517"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Profil</span><span
                class="f_Textestd">: cochez cette case pour que le DXF lié au
                profil (via la fiche <a href="articles.php">article</a>) soit
                automatiquement dessiné. Le profil doit être défini comme un
                profil principal dans la définition du <a href="profils.php">profil</a>. Vous pouvez
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
              <td><span class="f_Textestd"
                style="font-weight: bold;">Renfort</span><span
                class="f_Textestd">: cochez cette case pour que le DXF lié au
                renfort (via la fiche <a href="articles.php">article</a>) soit
                automatiquement dessiné. Le renfort doit être défini comme un
                profil de renfort dans la définition du <a href="profils.php">profil</a>. Vous pouvez
                indiquer, sur la même ligne, un décalage horizontal et un
                décalage vertical pour le positionnement du dessin.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
