<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Ventilator","A&#233;rateurs"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?aerateurs.php"; }
else { parent.quicksync('a5.13'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>A�rateurs</title>
  <meta name="keywords" content="Ventilator">
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
        href="glazingbarsfilter.php">Previous</a>� <a
        href="ventilatorsdescription.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left">
	          <p>The ventilators table lets you define the whole components for ventilators; 
			  those components will be computed in the following order:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Profiles</td>
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
              <td>Articles</td>
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
              <td>Labours</td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <p><span style="font-size: 5pt;">�</span></p>

        <p><a href="dessinwinpro.php">Drawings</a> may also be assigned to the
        ventilator. For each drawing, you can define a formula, which lets you
        choose when and where to draw, as well as to define some drawing
        parameters. (e.g. width and height).</p>

        <p><span style="font-size: 5pt;">�</span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p><span
                style="font-weight: bold;">Attention!</span> </p>

                <p>For performance reasons, the drawing formulas are executed completely independantly of the other formulas. 
				This implies that you cannot reuse the result of the computations from the profile, article or labour formulas. 
				You have to duplicate the necessary computations into the drawing formulas.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;">�</p>

        <p style="text-align: center;">�</p>

        <p style="text-align: center;"><img src="img/clip0527eng.jpg"
        width="683" height="391" border="0" alt="clip0527eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Code</span>: Code of the ventilator.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -13px; margin: 0px 0px 0px 13px;">�</p>

        <p style="text-indent: -13px; margin: 0px 0px 0px 13px;">�</p>
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
      <td align="left"><p>La table des a�rateurs �num�re les caract�ristiques
        principales et les composants des a�rateurs. Les �l�ments sont calcul�s
        dans l'ordre suivant: </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Profils</td>
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
              <td>Articles</td>
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
              <td>Main d'oeuvres</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;">�</span></p>

        <p>Des <span style="color: #0000ff;"><a href="dessinwinpro.php">dessins
        WinPro</a></span> peuvent �galement �tre utilis�s dans l'a�rateur. Pour
        chaque dessin, une formule est � d�finir, qui permettra de d�terminer
        o� et quand provoquer le dessin, de m�me que diff�rents autres
        param�tres (ex. largeur et hauteur).</p>

        <p><span style="font-size: 5pt;">�</span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p><span
                style="font-weight: bold;">Attention!</span> </p>

                <p>Pour des raisons de performances, les formules de dessins
                sont ex�cut�es ind�pendamment des autres formules. La
                cons�quence est qu'il n'est pas possible de r�cup�rer dans ces
                formules des variables initialis�es dans d'autres onglets du
                panneau (profils, articles, main d'oeuvres, ...). Vous devrez
                dupliquer les calculs n�cessaires dans les formules de
                dessin.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;">�</p>

        <p style="text-align: center;"><img src="img/clip0527fra.jpg"
        width="710" height="523" border="0" alt="clip0527fra"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Code</span>: Code de
                l'a�rateur.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -13px; margin: 0px 0px 0px 13px;">�</p>

        <p style="text-indent: -13px; margin: 0px 0px 0px 13px;">�</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
