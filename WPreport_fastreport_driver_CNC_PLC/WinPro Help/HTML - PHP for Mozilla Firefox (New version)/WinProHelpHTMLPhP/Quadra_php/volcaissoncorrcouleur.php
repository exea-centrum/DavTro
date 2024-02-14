<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Colour","Couleur"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?volcaissoncorrcouleur.php"; }
else { parent.quicksync('a6.1.3'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Caisson</title>
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
        href="introduction.php">Top</a>� <a
        href="volcaissoncouleur.php">Previous</a>� <a
        href="volcaissonquestions.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;">�</span></p>


        <p>This page lets you define a matching between the box inside and/or outside colour and the outer frame colour, in case the box "Set in/outside colours distinctly" is checked into <span style="font-style: italic;"><a href="volcaissondescription.php">Description</a></span> tab. If unchecked, only the outside colour needs to be matched. </p>
		
        <p><span style="font-size: 5pt;">�</span></p>
		
        <p><span style="color: #ff0000; ">This tab is designed for versions 9.1 and upper only!</span></p>

        <p><span style="font-size: 5pt;">�</span></p>

        <p><span style="color: #ff0000;">Unavailable in case of StandAlone Roller Shutter licence.</span></p>
		
        <p><span style="font-size: 5pt;">�</span></p>

        <p style="text-align: center;"><img src="img/clip0951eng.jpg"
        width="420" height="415" border="0" alt="clip0951eng"></p>


        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Inside colours</span>: Check this box to create a match between below located box colour list on the left hand, and the outer frame colour list below on the right hand, for the inside. Only needed when box "Set in/outside colours distinctly" is checked into <span style="font-style: italic;"><a href="volcaissondescription.php">Description</a></span> tab of the box.</td>
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
              <td><span style="font-weight: bold;">Outside colours</span>: Check this box to create a match between below located box colour list on the left hand, and the outer frame colour list below on the right hand, for the outside. Base colour considered by WinPro.</td>
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
              <td><span style="font-weight: bold;">Allowed colours</span>: List of allowed colours for this box. Select here a box colour to be matched to one or more outer frame colour.</td>
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
              <td><span style="font-weight: bold;">Frame colours</span>: List of existing outer frame colours. Select here one or more outer frame colours that will match the selected box colour.</td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <p><span style="font-size: 5pt;">�</span></p>

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
                style="color: #000000;">A logical set up excludes a link between several box colours and a single outer frame colour. Please take a particular care with 
				this point.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;">�</span></p>
        <p><span style="font-size: 5pt;">�</span></p>
        <p><span style="font-size: 5pt;">�</span></p>
        <p><span style="font-size: 5pt;">�</span></p>
        <p><span style="font-size: 5pt;">�</span></p>
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
      <td align="left"><p><span style="font-size: 5pt;">�</span></p>


        <p>Cet onglet permet de d�finir une correspondance entre la couleur du caisson de volet int�rieure et/ou ext�rieure, et la la couleur du dormant, lorsque la case "D�finir teintes int. et ext. s�paremment" est coch�e dans l'onglet <span style="font-style: italic;"><a href="volcaissondescription.php">Description</a></span> du caisson. Si la case est d�coch�e, seule la correspondance pour la face ext�rieure est n�cessaire.</p>
		
        <p><span style="font-size: 5pt;">�</span></p>
		
        <p><span style="color: #ff0000;">Cet onglet est disponible pour les versions 9.1 et sup�rieures, il n'est pas compatible avec les versions plus anciennes!</span></p>

        <p><span style="font-size: 5pt;">�</span></p>

        <p><span style="color: #ff0000;">Indisponible en cas de licences Volets Roulants Autonomes.</span></p>
		
        <p><span style="font-size: 5pt;">�</span></p>

        <p style="text-align: center;"><img src="img/clip0951fra.jpg"
        width="403" height="389" border="0" alt="clip0951fra"></p>


        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Teintes int�rieures</span>: Choisissez cette option pour d�finir la correspondance entre la teinte int�rieure du caisson dans le combo en dessous � gauche, et une ou plusieurs teintes de dormant situ�es juste en dessous � droite. N�cessaire seulement si l'option "D�finir teintes int. et ext. s�paremment" est coch�e dans l'onglet <span style="font-style: italic;"><a href="volcaissondescription.php">Description</a></span> du caisson.</td>
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
              <td><span style="font-weight: bold;">Teintes ext�rieures</span>: Choisissez cette option pour d�finir la correspondance entre la teinte ext�rieure du caisson dans le combo en dessous � gauche, et une ou plusieurs teintes de dormant situ�es juste en dessous � droite. Couleur de base consid�r�e par WinPro.</td>
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
              <td><span style="font-weight: bold;">Couleurs autoris�es</span>: Liste des teintes autoris�es pour ce caisson. S�lectionnez ici une teinte � faire correspondre � une ou plusieurs teintes de dormant.</td>
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
              <td><span style="font-weight: bold;">Couleurs dormant</span>: Liste les couleurs de dormant existantes. S�lectionnez ici une ou plusieurs teintes de dormant qui doivent correspondre � la teintte de caisson choisie.</td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <p><span style="font-size: 5pt;">�</span></p>

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
                style="color: #000000;">Une configuration logique exclut la liaison de plusieurs teintes de caissons pour une teinte de dormant. Soyez-y particuli�rement attentif.</span>
                � � � �</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;">�</span></p>
        <p><span style="font-size: 5pt;">�</span></p>
        <p><span style="font-size: 5pt;">�</span></p>
        <p><span style="font-size: 5pt;">�</span></p>
        <p><span style="font-size: 5pt;">�</span></p>
     </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
