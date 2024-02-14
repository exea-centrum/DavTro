<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Price","Prix"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?vitprice.php"; }
else { parent.quicksync('a5.8.4'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Prix</title>
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
        href="vitwarmedge.php">Previous</a>  <a
        href="vitsuppliers.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>This page defines some of the elements that allow computing the price of the
        glazing. Other elements are defined in the supplier pages. In case of composed glazing, some fields are 
		reported into the different tabs related to component computation.</p>

        <p style="text-align: center; margin: 14px 0px 0px 0px;"><img
        src="img/clip0183.jpg" width="478" height="229" border="0"
        alt="clip0183"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Extra margin (%)</span>: Extra margin on this glazing, in %.</td>
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
              <td><span style="font-weight: bold;">On list
                price tables: Additional price</span><span
                style="color: #000000;">, </span><span
                style="font-weight: bold;">Coefficient</span> and <span
                style="font-weight: bold;">Minimum</span>: If the glazing price is computed with
                a price table tied to a sash, these two check boxes let you
                define how an additional price will be applied for the glazing:
                in the first case, the additional price is applied per square
                meter (with a minimum price); in the second case, it is a
                coefficient on the table's price.</td>
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
              <td><span style="font-weight: bold;">Labour</span>: 3 work places and durations can be
                applied to the glazing, depending on its surface. These operations and durations are <span
                style="font-weight: bold;">not </span>cumulative. Those are not available in case of composed glazing.</td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Exclude
                labour from cost price</span>: The price of the labour will not be used when computing the cost price.</td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Exclude
                labour from selling price</span>: The price of the labour will not be used when computing the selling price.</td>
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

        <p>Cette page permet de définir des éléments pour le calcul du prix du
        vitrage. D'autres éléments sont accessibles dans les pages liées aux
        fournisseurs. En cas de vitrage composé, certains champs sont déportés
        dans les pages relatives aux différents composants. </p>

        <p style="text-align: center;"><img src="img/clip0425.gif" width="630"
        height="296" border="0" alt="clip0425"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Marge suppl. (%)</span>:
                Marge supplémentaire sur le vitrage, en %.</td>
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
              <td><span style="font-weight: bold;">Sur gille de vitrages des
                ouvrants: Supplément forfaitaire, Coefficient </span>et <span
                style="font-weight: bold;">Minimum</span>: Si le prix du
                vitrage est calculé via une grille de prix lié à l'ouvrant
                (onglet Tarif de la fiche Ouvrant), les cases à cocher
                permettent de déterminer comment un prix forfaitaire
                supplémentaire va être appliquer au vitrage: dans le premier
                cas, un prix fixe forfaitaire sera appliqué au mètre carré sur
                le vitrage, avec un prix minimum; dans le second cas, le
                forfait sera un pourcentage de supplément sur la grille de
                vitrage de l'ouvrant.</td>
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
              <td><span style="font-weight: bold;">Main d'oeuvre</span>: 3
                postes de main d'oeuvre peuvent être renseignés, avec leurs
                durées respectives, en fonction de la surface. Ces main
                d'oeuvres ne sont <span style="font-weight: bold;">pas
                </span>cumulative. Ces champs de main d'oeuvre ne sont pas
                accessible en cas de vitrage composé.</td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Exclure
                la main d'oeuvre du prix de revient</span><span
                class="f_Textestd">: Le prix de cette main d'oeuvre
                n'interviendra pas sur le prix de revient.</span></td>
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
              <td><span class="f_Textestd" style="font-weight: bold;">Exclure
                la main d'oeuvre du prix de vente</span><span
                class="f_Textestd">: Le prix de cette main d'oeuvre
                n'interviendra pas sur le prix de vente.</span></td>
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

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
