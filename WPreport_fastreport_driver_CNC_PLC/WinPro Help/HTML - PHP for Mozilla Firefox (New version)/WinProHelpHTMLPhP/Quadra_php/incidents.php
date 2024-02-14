<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Incidents","Incidents"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?incidents.php"; }
else { parent.quicksync('a7.20'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Incidents</title>
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
        href="groupesusinages.php">Previous</a>  <a
        href="ligneproduction.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This table allows creating a list of possible production incidents for a given  <a
        href="posteatelier.php">workplace</a>. Incidents will be listed on screen and may be selected by the user of the 
		workplace when required, along with an optional comment to enable or not. The workplace setting may allow to display 
		this list whatsoever.</p>

        <p>Production incidents are available for display within
        <span style="font-style: italic;">Running production</span> tab of the customer order.</p>

        <p> </p>

        <p>This incidents list is created into menu <span
        style="font-weight: bold;">Technique | Production | Incidents</span>.
        </p>

        <p> </p>

        <p>Refer to manual concerning WorkPlaces, <span
        style="font-weight: bold;">PostAtl.chm</span>, for more details about this module.</p>

        <p> </p>

        <p>Also refer to <a href="rn704x.php">release note version 7.0.44
        </a> for more details about this feature.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0616eng.jpg"
        width="406" height="139" border="0" alt="clip0616eng"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Code</span>: Code of the incident as displayed to the user.</td>
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
              <td><span style="font-weight: bold;">Description</span>:
                Description of the incident.</td>
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
              <td><span style="font-weight: bold;">Workplace</span>: Code
                of the workplace where the incident will be listed.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="417"
                style="width: 417px; border: solid 1px #000000;"><p><span
                style="font-weight: bold;">Important!</span> </p>

                <p>For a given workplace to be able to display the incidents list assigned, a key should be enabled into 
				the local WinPro.ini file of concerned workplace (or into settings table):</p>

                <p class="p_Textestd"><span
                class="f_Winproini">[Worplace]</span></p>

                <p class="p_Textestd"><span class="f_Winproini">Incidents = 0  
                     </span><span class="f_Textestd">incidents are not displayed onto workplace screen (default value)</span></p>

                <p class="p_Textestd"><span class="f_Winproini">               = 
                1        </span><span class="f_Textestd">incidents are displayed onto workplace</span></p>
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
              <td><span style="font-weight: bold;">Allow input of optional text</span>: Enable ability to add an 
			  additionnal free text along with the incident itself.</td>
            </tr>
          </tbody>
        </table>
        </div>

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
      <td align="left"><p>Cette table permet de paramétrer une liste
        d'incidents de production possibles sur un <a
        href="posteatelier.php">poste d'atelier</a>. Les incidents seront
        listés sur le poste, laissant la possibilité à l'utilisateur de l'écran
        d'atelier d'en saisir un, avec un commentaire additionnel en option.
        L'écran d'atelier doit toutefois être autorisé à afficher cette
        liste.</p>

        <p>Les incidents de production peuvent être consultés depuis la page
        <span style="font-style: italic;">Encours production </span>de la
        saisie des commandes.</p>

        <p> </p>

        <p>Cette liste d'incidents est accessible depuis le menu <span
        style="font-weight: bold;">Technique | Production | Incidents</span>.
        </p>

        <p> </p>

        <p>Reportez vous au manuel sur les postes atelier <span
        style="font-weight: bold;">PostAtl.chm </span>pour plus de détails sur
        ce module.</p>

        <p> </p>

        <p>Consultez également la <a href="rn704x.php">note de version 7.0.44
        </a>pour plus d'informations sur cette fonction.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0616.zoom70.gif"
        width="411" height="117" border="0" alt="clip0616"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Code</span>: Code de
                l'incident tel qu'il apparaîtra à l'utilisateur. </td>
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
              <td><span style="font-weight: bold;">Description</span>:
                Description de l'incident.</td>
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
              <td><span style="font-weight: bold;">Poste atelier</span>: Code
                du poste atelier sur lequel l'incident sera listé.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="417"
                style="width: 417px; border: solid 1px #000000;"><p><span
                style="font-weight: bold;">Important!</span> </p>

                <p>Pour qu'un poste atelier donné puisse lister les incidents
                qui lui sont assignés, il faut activer une clef dans le fichier
                WinPro.ini local de l'écran d'atelier concerné (ou dans la
                table settings):</p>

                <p class="p_Textestd"><span
                class="f_Winproini">[Worplace]</span></p>

                <p class="p_Textestd"><span class="f_Winproini">Incidents = 0  
                     </span><span class="f_Textestd">pas d'affichage des
                incidents sur cet écran d'atelier (valeur par défaut)</span></p>

                <p class="p_Textestd"><span class="f_Winproini">              =
                1        </span><span class="f_Textestd">affichage des
                incidents sur cet écran d'atelier</span></p>
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
              <td><span style="font-weight: bold;">Saisie d'un texte
                optionnel</span>: Saisie d'un texte complémentaire libre en
                plus de l'incident.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
