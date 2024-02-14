<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Curtain-frame matching","Correspondance tablier-dormant"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?voltabliercorrcouleurtabdor.php"; }
else { parent.quicksync('a6.2.3'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Curtain-frame matching</title>
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
        href="voltabliercouleur.php">Previous</a>  <a
        href="voltabliercorrcouleurssdor.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>


        <p>This page lets you define a matching between the curtain colour and the outer frame colour, in case the box "Allow frame colour" is checked into <span style="font-style: italic;"><a href="voltabliercouleur.php">Colours</a></span> tab of the curtain section. If unchecked, this tab is unavailable.</p>
		
        <p><span style="font-size: 5pt;"> </span></p>
		
        <p><span style="color: #ff0000; ">This tab is designed for versions 9.1 and upper only!</span></p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p><span style="color: #ff0000;">Unavailable in case of StandAlone Roller Shutter licence.</span></p>
		
        <p><span style="font-size: 5pt;"> </span></p>

        <p style="text-align: center;"><img src="img/clip0952eng.jpg"
        width="385" height="354" border="0" alt="clip0952eng"></p>


        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Allowed colours</span>: List of allowed colours for this curtain. Select here a curtain colour to be matched to one or more outer frame colour.</td>
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
              <td><span style="font-weight: bold;">Frame colours</span>: List of existing outer frame colours. Select here one or more outer frame colours that will match the selected curtain colour.</td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <p><span style="font-size: 5pt;"> </span></p>

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
                style="font-weight: bold; color: #000000; text-decoration: underline;">Attention!</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">A logical set up excludes a link between several curtain colours and a single outer frame colour. Please take a particular care with 
				this point.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;"> </span></p>
        <p><span style="font-size: 5pt;"> </span></p>
        <p><span style="font-size: 5pt;"> </span></p>
        <p><span style="font-size: 5pt;"> </span></p>
        <p><span style="font-size: 5pt;"> </span></p>
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


        <p>Cet onglet permet de définir une correspondance entre la couleur du tablier de volet roulant et la couleur du dormant, lorsque la case "Suivre couleur dormant" est cochée dans l'onglet <span style="font-style: italic;"><a href="voltabliercouleur.php">Couleurs</a></span> de la section tablier.</p>
		
        <p><span style="font-size: 5pt;"> </span></p>
		
        <p><span style="color: #ff0000;">Cet onglet est disponible pour les versions 9.1 et supérieures, il n'est pas compatible avec les versions plus anciennes!</span></p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p><span style="color: #ff0000;">Indisponible en cas de licences Volets Roulants Autonomes.</span></p>
		
        <p><span style="font-size: 5pt;"> </span></p>

        <p style="text-align: center;"><img src="img/clip0952fra.jpg"
        width="398" height="346" border="0" alt="clip0952fra"></p>


        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Couleurs autorisées</span>: Liste des teintes autorisées pour ce tablier. Sélectionnez ici une teinte à faire correspondre à une ou plusieurs teintes de dormant.</td>
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
              <td><span style="font-weight: bold;">Couleurs dormant</span>: Liste les couleurs de dormant existantes. Sélectionnez ici une ou plusieurs teintes de dormant qui doivent correspondre à la teinte de tablier choisie.</td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <p><span style="font-size: 5pt;"> </span></p>

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
                style="font-weight: bold; color: #000000; text-decoration: underline;">Attention!</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Une configuration logique exclut la liaison de plusieurs teintes de tablier pour une teinte de dormant. Soyez-y particulièrement attentif.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;"> </span></p>
        <p><span style="font-size: 5pt;"> </span></p>
        <p><span style="font-size: 5pt;"> </span></p>
        <p><span style="font-size: 5pt;"> </span></p>
        <p><span style="font-size: 5pt;"> </span></p>
     </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
