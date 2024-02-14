<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Description","Description"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?couleursdescription.php"; }
else { parent.quicksync('a4.3.1'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Description</title>
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
        href="introduction.php">Top</a>  <a href="couleur.php">Previous</a>  <a
        href="coloursfilter.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>This tab defines the main settings of a colour code.</p>

        <p style="text-align: center;"><img
        alt="image" src="img/clip0104eng.jpg" width="490" height="358"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>:
                Description of the colour, the one that appears onto
              documents.</td>
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
              <td><span style="font-weight: bold;">Category</span>: numeric
                value associated to the colour. This value may be used into
                data set up through the following <a
                href="variablesconfiguration.php">configuration variables </a>:
                <span class="f_Variables"></span><span
                class="f_Variables">_FrameColour, _FrameInsideColour,
                _SashColour[], _SashInsideColour[], _FittingColour[],
                _FittingIntColour[], _ShutterBoxColour, _ShutterBoxIntColour
               [], _ShutterRailColour, _ShutterCurtainColour</span> .</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Inner colour</span>: In case
                of bicoloration, it may be necessary to set a specific code for
                inner colour.</td>
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
              <td><span style="font-weight: bold;">RAL</span>
                <strong>match</strong>: Corresponding RAL values for this
                colour (in fact, corresponds to a second label). Cette This
                field is used for <a href="macros___.php">macro #4# </a>
                initialization used into articles or profiles descriptions.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Bitmap</span>: Path and file
                name of BMP picture set as texture for this colour code. Size
                of files may not be over 64 Kb (65.336 bytes). It is advised
                for performances to use a file the lightest as possible
                (shrinking size and number of colours). When the program does
                not find the specified colour, the fill colour will be
              used.</td>
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
              <td><span style="font-weight: bold;">Fill colour</span>:
                Background colour set into red, green and blue values (from 0
                to 255 for each value). A <img src="img/clip0105.jpg" width="15"
                height="15" border="0" alt="Clip0105"> button is suitable for
                user defined Windows colour standard dialog. This colour
                remains unused when a texture bitmap file is used.</td>
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
              <td><span style="font-weight: bold;">Line colour</span>: Pen
                colour for lines set into red, green and blue values (from 0 to
                255 for each value). A <img src="img/clip0105.jpg" width="15"
                height="15" border="0" alt="Clip0105"> button is suitable for
                user defined Windows colour standard dialog.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p> </p>

        <p style="text-align: center;"><span
        style="color: #0000ff; text-decoration: underline;"><a
        href="couleurs.php" target="_blank" class="weblink">Here is a
        correspondancy table for RAL colours converted into RGB
        codes</a></span></p>

        <p style="text-align: center;"> </p>

        <p style="text-align: center;"> </p>
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

        <p>Cet onglet vous permet de définir les principales caractéristique du
        code couleur.</p>

        <p style="text-align: center;"><img src="img/clip0292.jpg" width="545"
        height="349" border="0" alt="clip0292"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>:
                Description de la couleur. C'est cette description qui sera
                éditée sur les documents.</td>
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
              <td><span style="font-weight: bold;">Catégorie</span>: valeur
                numérique associée à la couleur. Cette valeur est utilisée dans
                les formules de paramétrage, par l'intermédiaire des <a
                href="variablesconfiguration.php">variables de
                configuration</a> suivantes : <span
                class="f_Variables">_CouleurDormant</span>, <span
                class="f_Variables">_CouleurDormantInt</span>,<span
                class="f_Variables">_CouleurOuvrant[]</span>, <span
                class="f_Variables">_CouleurOuvrantInt[]</span>,<span
                class="f_Variables">_CouleurQuincaillerie[]</span>, <span
                class="f_Variables">_CouleurQuincaillerieInt[]</span>, <span
                class="f_Variables">_CouleurCaisson</span>, <span
                class="f_Variables">_CouleurCaissonInt[]</span>, <span
                class="f_Variables">_CouleurCoulisse</span> et<span
                class="f_Variables">_CouleurTablier</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Couleur intérieure</span>:
                Dans le cas où le code de la couleur représente une
                bicoloration, il peut être nécessaire de spécifier dans ce
                champ quelle est le code de la couleur intérieure.</td>
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
              <td><span style="font-weight: bold;">Correspondance RAL</span>:
                Equivalant RAL de cette couleur (en fait, deuxième libellé).
                Cette information n'est exploitée que par la <a
                href="macros___.php">macro #4# </a> que l'on utilise dans les
                descriptions d'articles et profils.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Bitmap</span>: Nom et chemin
                d'accès vers un fichier .BMP qui sera utilisé pour représenter
                une texture correspondant au code couleur. La taille de ce
                fichier ne peut dépasser 64 Kb (65.336 octets). Nous vous
                conseillons, pour plus de performance, d'utiliser un fichier
                aussi petit que possible (en réduisant tant la taille que le
                nombre de couleurs). Si WinPro ne trouve pas le fichier
                spécifié, il utilisera la couleur de fond.</td>
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
              <td><span style="font-weight: bold;">Couleur fond</span>: Couleur
                de fond exprimée en valeurs de rouge, vert, bleu (de 0 à 255
                pour chacune des valeurs). Un bouton <img src="img/clip0105.jpg"
                width="15" height="15" border="0" alt="Clip0105"> vous permet
                de sélectionner la couleur au moyen du dialogue standard de
                sélection de couleur de Windows. Cette couleur de fond n'est
                pas utilisée si un fichier bitmap de texture a été valablement
                spécifié.</td>
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
              <td><span style="font-weight: bold;">Couleur trait</span>:
                Couleur de trait exprimée en valeurs de rouge, vert, bleu (de 0
                à 255 pour chacune des valeurs). Un bouton <img
                src="img/clip0105.jpg" width="15" height="15" border="0"
                alt="clip0105"> vous permet de sélectionner la couleur au moyen
                du dialogue standard de sélection de couleur de Windows. </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p> </p>

        <p style="text-align: center;"><span
        style="color: #0000ff; text-decoration: underline;"><a
        href="couleurs.php" target="_blank" class="weblink">Voici, à titre
        d'information, une table de correspondance des teintes Ral converties
        en codes RVB</a></span></p>

        <p style="text-align: center;"> </p>

        <p style="text-align: center;"> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
