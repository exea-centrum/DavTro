<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Fillings","Remplissage"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?varremplissages.php"; }
else { parent.quicksync('a3.10.6'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Remplissage</title>
  <meta name="keywords"
  content="NumeroRemplissage,_NRemplissages,_RemplType,_RemplCateg,_RemplIdFournisseur,_RemplX,_RemplY,_RemplLargeur,_RemplHauteur,_RemplLargeurHT,_RemplHauteurHT,_RemplCatCroisillon,_RemplAlveoleHCroisillon,_RemplAlveoleVCroisillon,_RemplVantail,_RemplOuvrant,_RemplEpaisseur,_RemplAisanceBas,_RemplAisanceHaut,_RemplAisanceGauche,_RemplAisanceDroite,_RemplForme,_RemplEnHaut,_RemplEnBas,_RemplAGauche,_RemplADroite,_RemplEpaisseurHaut,_RemplEpaisseurBas,_RemplEpaisseurGauche,_RemplEpaisseurDroite,_RemplPoids,_RemplTravHaut,_RemplTravBas,_RemplTravGauche,_RemplTravDroite,_RemplHauteurTableau,_RemplLargeurTableau,_RemplNCroisillonsH,_RemplNCroisillonsV,_RemplNCroisillons">
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
        href="varouvrantetquincaillerie.php">Previous</a>  <a
        href="macros___.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p></p>

        <p>The index number of the filling computed is stored into variable :
        <span class="f_Variables">FillingIndex</span></p>

        <p> </p>

        <p><span style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Variable</span></p>
              </td>
              <td width="536"
                style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_NFillings</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Number of fillings (glass or
                panel)</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillType[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Type of each filling: </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_Glass</span><span
                style="color: #000000;">, </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_Panel</span><span
                style="color: #000000;">, </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_DecorativePanel</span><span
                style="color: #000000;">, </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_SpecialPanel</span><span
                style="color: #000000;">, </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_ConfiguredDecorativePanel</span><span
                style="color: #000000;">.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillCateg[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Category of each filling</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillCateg2[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                class="f_Textestd">Second c</span><span
                style="color: #000000;">ategory of each filling</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillSupplierID[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Supplier ID of each glass (-1 if the
                filling is not a glass)</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillX[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Horizontal position of the lower left
                corner of each filling</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillY[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Vertical <span
                style="color: #000000;">position of the lower left corner of
                each filling</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillWidth[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Fabrication width of each filling. <br>
                <span style="color:#ff0000">This variable is set after filling
                computation, and then cannot be used to calculate the final
                filling dimension, in case of composed glazing for instance. A
                local variable (<span class="f_Variables">Width</span>) is
                available for such a value computation.</span></span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillHeight[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Fabrication height of each filling. <br>
                <span style="color:#ff0000">This variable is set after filling
                computation, and then cannot be used to calculate the final
                filling dimension, in case of composed glazing for instance. A
                local variable (<span class="f_Variables">Height</span>) is
                available for such a value computation.</span></span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillExtWidth[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Width of each filling, expanded to the
                left and right, up to the axis of the first sash transom, the
                axis between vents, the axis of the first frame transom or the
                external side of the outer frame (first encounter by order of
                priority).</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillExtHeight[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Height of each filling, expanded to the
                left and right, up to the axis of the first sash transom, the
                axis between vents, the axis of the first frame transom or the
                external side of the outer frame (first encounter by order of
                priority).</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillGBarCateg[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Category of the glazing bar associated
                to the filling (<span style="color:#0000ff">0</span> if no
                glazing bar)</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillGBarHCells[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Number of cells horizontally in the
                glazing bar (<span style="color:#0000ff">0</span> if no glazing
                bar)</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillGBarVCells[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Number of cells vertically in the
                glazing bar (<span style="color:#0000ff">0</span> if no glazing
                bar)</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillLeaf[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Index of the leaf containing the
                filling (in each sash, 1 is the leftmost or bottommost
                leaf).</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillSash[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Index of the sash containing the
                filling.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillThickness[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Thickness of each filling.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillTopClearance []</span></p>

                <p style="text-align: center;"><span
                class="f_Variables">_FillBottomClearance []</span></p>

                <p style="text-align: center;"><span
                class="f_Variables">_FillLeftClearance []</span></p>

                <p style="text-align: center;"><span
                class="f_Variables">_FillRightClearance []</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Clearance on each side of the
                filling</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillShape[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Shape of each filling. Possible values
                are:</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Variables">_Rectangle, _Trapezium,
                _RightAngledTriangle, _TruncatedCorner, _Pentagon,
                _TruncatedTrapezium, _TruncatedCorner2, _RightAngledTrapezium,
                _SimpleTrapezium, _Bow, _FullBow, _HalfFullBow, _FlatBow,
                _HalfFlatBow, _TruncatedBow, _RoundedCorner, _Quadrilateral,
                _Triangle,</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Variables">_BullsEye, _BasketHandle,
                _FullBasketHandle, _HalfBasketHandle, _TruncatedBasketHandle,
                _BasketHandle5, _FullBasketHandle5, _HalfBasketHandle5,
                _TruncatedBasketHandle5</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Variables"> </span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="font-family: 'Courier New';"><a
                href="createshape.php">Refer to the shape list for more
                details</a></span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="font-family: 'Courier New';"> </span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillTop[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Type of frame at the top of each
                filling: </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_OuterFrame</span><span
                style="font-weight: bold; color: #000000;">,</span><span
                style="font-weight: bold; color: #0000ff;"></span><span
                style="font-family: 'Courier New'; color: #0000ff;">_Sash</span><span
                style="color: #000000;"> or </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_Transom</span><span
                style="color: #000000;">.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillBottom[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Type of frame at the bottom of each
                filling: </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_OuterFrame</span><span
                style="font-weight: bold; color: #000000;">,</span><span
                style="font-weight: bold; color: #0000ff;"></span><span
                style="font-family: 'Courier New'; color: #0000ff;">_Sash</span><span
                style="color: #000000;"> or </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_Transom</span><span
                style="color: #000000;">.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillLeft[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Type of frame on the left of each
                filling: </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_OuterFrame</span><span
                style="font-weight: bold; color: #000000;">,</span><span
                style="font-weight: bold; color: #0000ff;"></span><span
                style="font-family: 'Courier New'; color: #0000ff;">_Sash</span><span
                style="color: #000000;"> or </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_Transom</span><span
                style="color: #000000;">.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillRight[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Type of frame on the right of each
                filling: </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_OuterFrame</span><span
                style="font-weight: bold; color: #000000;">,</span><span
                style="font-weight: bold; color: #0000ff;"></span><span
                style="font-family: 'Courier New'; color: #0000ff;">_Sash</span><span
                style="color: #000000;"> or </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_Transom</span><span
                style="color: #000000;">.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillThicknessTop[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Thickness of the frame at the top of
                each filling. If this is a transom, this is the half of the
                thickness of the transom.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillThicknessBottom[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Thickness of the frame at the bottom of
                each filling. If this is a transom, this is the half of the
                thickness of the transom.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillThicknessLeft[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Thickness of the frame on the left of
                each filling. If this is a transom, this is the half of the
                thickness of the transom.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillThicknessRight[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Thickness of the frame on the right of
                each filling. If this is a transom, this is the half of the
                thickness of the transom.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FillWeight[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Weight of each filling.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_FillTopTransom[]</span></p>
              </td>
                <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the index (<span
                class="f_Variables">TransomIndex</span>) of <a
                href="traverses.php">transom</a> reaching the filling on top.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_FillBottomTransom[]</span></p>
              </td>
                <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the index (<span
                class="f_Variables">TransomIndex</span>) of <a
                href="traverses.php">transom</a> reaching the filling at the bottom.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_FillLeftTransom[]</span></p>
              </td>
                <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the index (<span
                class="f_Variables">TransomIndex</span>) of <a
                href="traverses.php">transom</a> reaching the filling on the left.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_FillRightTransom[]</span></p>
              </td>
                <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the index (<span
                class="f_Variables">TransomIndex</span>) of <a
                href="traverses.php">transom</a> reaching the filling on the right.</span></p>
              </td>
                        </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_FillRevealHeight[]</span></p>
              </td>
                <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Height of each filling, extended left and right to the outside outer frame, axis of leaves or axis of first transom reached.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_FillRevealWidth[]</span></p>
              </td>
                <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Width of each filling, extended left and right to the outside outer frame, axis of leaves or axis of first transom reached.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_FillNBarsH[]</span></p>
              </td>
                <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Number of glazing bars horizontally (number of cells - 1).</span></p>
              </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_FillNBarsV[]</span></p>
              </td>
                <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Number of glazing bars vartically (number of cells - 1).</span></p>
              </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_FillNBars[]</span></p>
              </td>
                <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Total number of glazing bars.</span></p>
              </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_ExtGlazingbeadFinishing[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns category of the outside <a
                href="finition.php">finishing</a> for beads frame.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplParcloseFinitionInt[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns category of the inside<a
                href="finition.php">finishing</a> for beads frame.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_GBarColour[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Category for overall or outside colour of glazing bars</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_GlBarIntClr[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Category for inside colour of glazing bars</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_FillWarmEdge[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Category of <a
                href="warmedge.php">warm edge</a> used for this filling.
                Returns zero in case of panel (no warm edge). See <a
                href="8_1_0_x.php">release note 8.1</a>.</p>
              </td>
            </tr>
			<tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_FillUg[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Value <span
                style="font-style: italic;">Ug</span> of the glass unit, as set into tab <span
                style="font-weight: bold;">Dimension</span> of a glass record. See <a href="8_1_0_x.php">release note 8.1.0.073</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_FillPsiG[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Vlue of column <span
                style="font-style: italic;">PsiG</span><span
                style="font-style: italic;"></span>of the warmedge, for the conbcerned glass thickness. See <a
                href="8_1_0_x.php">release note 8.1.0.073</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_FillLtTrans[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Value for <span
                style="font-style: italic;">Light Transmission </span>of the glass unit, tab
                 <span style="font-weight: bold;">Dimension
                </span>of a glass record. See <a href="8_1_0_x.php">release note 8.1.0.073</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_FillSolFact[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Value of <span
                style="font-style: italic;">Solar Factor </span>for the glass unit,
                tab <span style="font-weight: bold;">Dimension </span>of a glass record. See <a href="8_1_0_x.php">release note
                8.1.0.073</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_FillSpacer[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Value of the <span
                style="font-style: italic;">Spacer </span>for the glass unit,
                tab <span style="font-weight: bold;">Dimension </span>of a glass record. See <a href="8_1_0_x.php">release note
                8.1.0.073</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_FillSpacer2[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Value of second <span
                style="font-style: italic;">Spacer </span>for the glass unit,
                tab <span style="font-weight: bold;">Dimension </span>of the glass record, in case of <span
                style="font-style: italic;">Triple Glazings</span>. See <a
                href="8_1_0_x.php">release note 8.1.0.073</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_Fill2Ug[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Value <span
                style="font-style: italic;">Ug</span> of the glass unit, as set into  <span
                style="font-weight: bold;">Dimension</span> tab of a glass record. For second glass only, in case of  <span
                style="font-style: italic;">Double Windows </span>(release note 8.1.0). See <a href="8_1_0_x.php">release note
                8.1.0.073</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_Fill2PsiG[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Value of column <span
                style="font-style: italic;">PsiG</span><span
                style="font-style: italic;"></span>of the warmedge for the concerned glass thickness. For the second glass unit, in case of <span style="font-style: italic;">Double Windows
                </span>(release note 8.1.0). See <a href="8_1_0_x.php">release note 8.1.0.073</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_Fill2LtTrans[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Value of <span
                style="font-style: italic;">Light Transmission </span>of the glass unit, tab  <span style="font-weight: bold;">Dimension
                </span>of a glass record. For the second glass unit, in case of 
                <span style="font-style: italic;">Double Windows </span>(release note 8.1.0). See <a href="8_1_0_x.php">release note
                8.1.0.073</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_Fill2SolFact[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Value of <span
                style="font-style: italic;">Solar Factor </span>of the glass unit,
                tab  <span style="font-weight: bold;">Dimension </span>of the glass record. For the second glass unit in case of <span
                style="font-style: italic;">Double Windows </span>(release note 8.1.0). See <a href="8_1_0_x.php">release note
                8.1.0.073</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_Fill2Spacer[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Value of the glazing's <span
                style="font-style: italic;">Spacer</span>,
                <span style="font-weight: bold;">Dimension </span>tab of a glass record. For the seconf glass unit, in case of <span
                style="font-style: italic;">Double Windows </span>(release note 8.1.0). See <a href="8_1_0_x.php">release note
                8.1.0.073</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_Fill2Spacer2[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Value of second <span
                style="font-style: italic;">Spacer </span>of glass unit, <span style="font-weight: bold;">Dimension </span>tab of the glass record, in case of <span
                style="font-style: italic;">Triple Glazing</span>. For the second glass unit, in case of <span
                style="font-style: italic;">Double Windows </span>(release note 8.1.0). See <a href="8_1_0_x.php">release note
                8.1.0.073</a>.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>

        <p style="text-align: center;"><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>
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
      <td align="left"><p class="p_CodeExample"><span
        class="f_CodeExample"> </span></p>

        <p>Le numéro du remplissage en cours de calcul est stocké dans la
        variable : <span class="f_Variables">NumeroRemplissage</span></p>

        <p> </p>

        <p><span style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Variable</span></p>
              </td>
              <td width="536"
                style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_NRemplissages</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Nombre de remplissages du
                châssis en cours de calcul (vitrages et panneaux confondus)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplType[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Type de chaque remplissage :
                <span class="f_Variables">_Vitrage</span>, <span
                class="f_Variables">_PanneauADecouper</span>, <span
                class="f_Variables">_PanneauDecoratif</span>, <span
                class="f_Variables">_PanneauFabrique</span>, <span
                class="f_Variables">_PanneauDecoratifConfigure</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplCateg[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Catégorie de chaque
                remplissage.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplCateg2[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                class="f_Textestd">Catégorie secondaire de chaque
                remplissage</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplIdFournisseur[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Numéro de fournisseur de
                chaque vitrage (vaut <span class="f_Variables">-1</span> si le
                remplissage n'est pas un vitrage)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplX[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Position horizontale du coin
                inférieur gauche de chaque remplissage.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplY[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Position verticale du coin
                inférieur gauche de chaque remplissage.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplLargeur[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Largeur de fabrication de
                chaque remplissage.</p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #ff0000;">Cette variable est initialisée apres
                calcul du remplissage ! Il n'est donc pas possible de
                l'utiliser pour calculer la dimension finale du remplissage,
                dans le cas d'un vitrage composé notamment. Une variable locale
                au vitrage (</span><span
                class="f_Variables">Largeur</span><span
                style="color: #ff0000;">) sera plus pertinente pour ce type de
                calcul.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplHauteur[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Hauteur de fabrication de
                chaque remplissage.</p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #ff0000;">Cette variable est initialisée apres
                calcul du remplissage ! Il n'est donc pas possible de
                l'utiliser pour calculer la dimension finale du remplissage,
                dans le cas d'un vitrage composé notamment. Une variable locale
                au vitrage (</span><span
                class="f_Variables">Hauteur</span><span
                style="color: #ff0000;">) sera plus pertinente pour ce type de
                calcul.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplLargeurHT[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Largeur de chaque
                remplissage, étendue à gauche et à droite jusqu'à l'extérieur
                du dormant, l'entraxe entre vantaux, ou l'axe de la première
                traverse rencontrée.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplHauteurHT[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Hauteur de chaque
                remplissage, étendue en haut et en bas jusqu'à l'extérieur du
                dormant, l'entraxe entre vantaux, ou l'axe de la première
                traverse rencontrée.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplCatCroisillon[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Catégorie du croisillon
                contenu dans le remplissage (vaut <span
                class="f_Variables">0</span> si pas de croisillon)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplAlveoleHCroisillon[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Nombre d'alvéoles
                horizontalement (vaut <span class="f_Variables">0</span> si pas
                de croisillon)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplAlveoleVCroisillon[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Nombre d'alvéoles
                verticalement (vaut <span class="f_Variables">0</span> si pas
                de croisillon)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplVantail[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Numéro de vantail dans lequel
                se trouve chaque remplissage (dans chaque ouvrant, <span
                class="f_Variables">1</span> est le vantail le plus à gauche ou
                le plus en bas).</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplOuvrant[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Numéro de l'ouvrant dans
                lequel se trouve chaque remplissage.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplEpaisseur[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Epaisseur de chaque
                remplissage.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplAisanceBas[]</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplAisanceHaut[]</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplAisanceGauche[]</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplAisanceDroite[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-size: 5pt;"></span>Aisance de chaque côté de chaque
                remplissage.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplForme[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Forme de chaque
                remplissage.<span
                style="font-size: 12pt; font-family: 'Times New Roman';"></span></p>

                <p style="margin: 0px 0px 0px 13px;">Les valeurs possibles
                sont:<span
                style="font-size: 12pt; font-family: 'Times New Roman';"></span><span
                class="f_Variables">_Rectangle</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                </span><span class="f_Variables">_Trapeze</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                </span><span class="f_Variables">_TriangleRectangle</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                </span><span class="f_Variables">_CoinCasse</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                </span><span class="f_Variables">_Pentagone</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                </span><span class="f_Variables">_TrapezeTronque</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                </span><span class="f_Variables">_CoinCasse2</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                </span><span class="f_Variables">_TrapezeRectangle</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                </span><span class="f_Variables">_SimpleTrapeze</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                </span><span class="f_Variables">_Cintre</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                </span><span class="f_Variables">_PleinCintre</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                </span><span class="f_Variables">_DemiPleinCintre</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                </span><span class="f_Variables">_CintrePlat</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                </span><span class="f_Variables">_DemiCintrePlat</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                </span><span class="f_Variables">_CintreTronque</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                </span><span class="f_Variables">_CoinArrondi</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                </span><span class="f_Variables">_Quadrilatere</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                </span><span class="f_Variables">_Triangle</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Variables">_OeilDeBoeuf</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                </span><span class="f_Variables">_AnsePanier</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                </span><span
                class="f_Variables">_AnsePanierComplete</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                </span><span class="f_Variables">_DemiAnsePanier</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">, 
                </span><span
                class="f_Variables">_AnsePanierTronquee</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                </span><span class="f_Variables">_AnsePanier5</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                </span><span
                class="f_Variables">_AnsePanier5Complete</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                </span><span class="f_Variables">_DemiAnsePanier5</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                </span><span class="f_Variables">_AnsePanier5Tronquee</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                class="f_Variables"> </span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="font-family: 'Courier New';"><a
                href="creerforme.php">Voir le dessin de chacune de ces
                formes</a></span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="font-family: 'Courier New';"> </span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplEnHaut[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Type de cadre en haut de
                chaque remplissage: <span class="f_Variables">_Dormant</span>,
                <span class="f_Variables">_Ouvrant</span> ou <span
                class="f_Variables">_Traverse</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplEnBas[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Type de cadre en bas de
                chaque remplissage: <span class="f_Variables">_Dormant</span>,
                <span class="f_Variables">_Ouvrant</span> ou <span
                class="f_Variables">_Traverse</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplAGauche[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Type de cadre à gauche de
                chaque remplissage: <span class="f_Variables">_Dormant</span>,
                <span class="f_Variables">_Ouvrant</span> ou <span
                class="f_Variables">_Traverse</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplADroite[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Type de cadre à droite de
                chaque remplissage: <span class="f_Variables">_Dormant</span>,
                <span class="f_Variables">_Ouvrant</span> ou <span
                class="f_Variables">_Traverse</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplEpaisseurHaut[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Epaisseur du cadre sur le
                bord supérieur de chaque remplissage. S'il s'agît d'une
                traverse, la valeur fournie est la demi-épaisseur de cette
                traverse.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplEpaisseurBas[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Epaisseur du cadre sur le
                bord inférieur de chaque remplissage. S'il s'agît d'une
                traverse, la valeur fournie est la demi-épaisseur de cette
                traverse.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplEpaisseurGauche[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Epaisseur du cadre sur le
                bord gauche de chaque remplissage. S'il s'agît d'une traverse,
                la valeur fournie est la demi-épaisseur de cette traverse.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="228"
                style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplEpaisseurDroite[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Epaisseur du cadre sur le
                bord droit de chaque remplissage. S'il s'agît d'une traverse,
                la valeur fournie est la demi-épaisseur de cette traverse.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplPoids[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Poids de chaque
                remplissage.</p>
              </td>
            </tr>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplTravHaut[]</span></p>
              </td>
                <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie le numéro (<span
                class="f_Variables">NumeroTraverse</span>) de la <a
                href="traverses.php">traverse</a> qui touche le remplissage en haut.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplTravBas[]</span></p>
              </td>
                <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie le numéro (<span
                class="f_Variables">NumeroTraverse</span>) de la <a
                href="traverses.php">traverse</a> qui touche le remplissage en bas.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplTravGauche[]</span></p>
              </td>
                <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie le numéro (<span
                class="f_Variables">NumeroTraverse</span>) de la <a
                href="traverses.php">traverse</a> qui touche le remplissage à gauche.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplTravDroite[]</span></p>
              </td>
                <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie le numéro (<span
                class="f_Variables">NumeroTraverse</span>) de la <a
                href="traverses.php">traverse</a> qui touche le remplissage à droite.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplHauteurTableau[]</span></p>
              </td>
                <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Hauteur de chaque
                remplissage, étendue à gauche et à droite jusqu'à l'extérieur
                du dormant, l'entraxe entre vantaux, ou l'axe de la première
                traverse rencontrée.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplLargeurTableau[]</span></p>
              </td>
                <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Largeur de chaque
                remplissage, étendue à gauche et à droite jusqu'à l'extérieur
                du dormant, l'entraxe entre vantaux, ou l'axe de la première
                traverse rencontrée.</span></p>
              </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplNCroisillonsH[]</span></p>
              </td>
                <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Nombre de croisillons en largeur (nombre d'aélvéoles - 1).</span></p>
              </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplNCroisillonsV[]</span></p>
              </td>
                <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Nombre de croisillons en hauteur (nombre d'aélvéoles - 1).</span></p>
              </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplNCroisillons[]</span></p>
              </td>
                <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Nombre de total de croisillons.</span></p>
              </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplParcloseFinition[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la catégorie de la <a
                href="finition.php">finition</a> extérieure associée aux parcloses.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplParcloseFinitionInt[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la catégorie de la <a
                href="finition.php">finition</a> intérieure associée aux parcloses.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplCoulCrx[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Catégorie de la couleur des
                croisillons</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplCoulCrxInt[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Catégorie de la couleur
                intérieure des croisillons</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplWarmEdge[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Catégorie du <a
                href="warmedge.php">warm edge</a> utilisé avec ce remplissage.
                Renvoie zéro en cas de panneau (pas de warm edge). Voir <a
                href="8_1_0_x.php">note de version 8.1</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplUg[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Valeur <span
                style="font-style: italic;">Ug</span> du vitrage, telle que
                saisie dans l'onglet <span
                style="font-weight: bold;">Dimension</span> de la fiche
                Vitrage. Voir <a href="8_1_0_x.php">note de version
                8.1.0.073</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplPsiG[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Valeur de la colonne <span
                style="font-style: italic;">PsiG</span><span
                style="font-style: italic;"></span>du warmedge pour
                l&rsquo;épaisseur de vitrage concernée. Voir <a
                href="8_1_0_x.php">note de version 8.1.0.073</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplTransLum[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Valeur de <span
                style="font-style: italic;">Transmission Lumineuse </span>du
                vitrage, onglet <span style="font-weight: bold;">Dimension
                </span>de la fiche Vitrage. Voir <a href="8_1_0_x.php">note de
                version 8.1.0.073</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplFacSol[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Valeur de <span
                style="font-style: italic;">Facteur Solaire </span>du vitrage,
                onglet <span style="font-weight: bold;">Dimension </span>de la
                fiche Vitrage. Voir <a href="8_1_0_x.php">note de version
                8.1.0.073</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplIntercalaire[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Valeur de l'<span
                style="font-style: italic;">Intercalaire </span>du vitrage,
                onglet <span style="font-weight: bold;">Dimension </span>de la
                fiche Vitrage. Voir <a href="8_1_0_x.php">note de version
                8.1.0.073</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_RemplIntercalaire2[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Valeur du deuxième <span
                style="font-style: italic;">Intercalaire </span>du vitrage,
                onglet <span style="font-weight: bold;">Dimension </span>de la
                fiche Vitrage, en cas de <span
                style="font-style: italic;">Vitrage Triple</span>. Voir <a
                href="8_1_0_x.php">note de version 8.1.0.073</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_Rempl2Ug[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Valeur <span
                style="font-style: italic;">Ug</span> du vitrage, telle que
                saisie dans l'onglet <span
                style="font-weight: bold;">Dimension</span> de la fiche
                Vitrage. Pour le second vitrage, en cas de <span
                style="font-style: italic;">Fenêtres Doubles </span>(note de
                version 8.1.0). Voir <a href="8_1_0_x.php">note de version
                8.1.0.073</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_Rempl2PsiG[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Valeur de la colonne  <span
                style="font-style: italic;">PsiG</span><span
                style="font-style: italic;"></span>du warmedge pour
                l&rsquo;épaisseur de vitrage concernée. Pour le second vitrage,
                en cas de <span style="font-style: italic;">Fenêtres Doubles
                </span>(note de version 8.1.0). Voir <a href="8_1_0_x.php">note
                de version 8.1.0.073</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_Rempl2TransLum[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Valeur de <span
                style="font-style: italic;">Transmission Lumineuse </span>du
                vitrage, onglet <span style="font-weight: bold;">Dimension
                </span>de la fiche Vitrage. Pour le second vitrage, en cas de
                <span style="font-style: italic;">Fenêtres Doubles </span>(note
                de version 8.1.0). Voir <a href="8_1_0_x.php">note de version
                8.1.0.073</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_Rempl2FacSol[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Valeur de <span
                style="font-style: italic;">Facteur Solaire </span>du vitrage,
                onglet <span style="font-weight: bold;">Dimension </span>de la
                fiche Vitrage. Pour le second vitrage, en cas de <span
                style="font-style: italic;">Fenêtres Doubles </span>(note de
                version 8.1.0). Voir <a href="8_1_0_x.php">note de version
                8.1.0.073</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_Rempl2Intercalaire[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Valeur de l'<span
                style="font-style: italic;">Intercalaire </span>du vitrage,
                onglet <span style="font-weight: bold;">Dimension </span>de la
                fiche Vitrage. Pour le second vitrage, en cas de <span
                style="font-style: italic;">Fenêtres Doubles </span>(note de
                version 8.1.0). Voir <a href="8_1_0_x.php">note de version
                8.1.0.073</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="228"
              style="width: 228px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 9px;"><span
                class="f_Variables">_Rempl2Intercalaire2[]</span></p>
              </td>
              <td valign="top" width="536"
              style="width: 536px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Valeur du deuxième <span
                style="font-style: italic;">Intercalaire </span>du vitrage,
                onglet <span style="font-weight: bold;">Dimension </span>de la
                fiche Vitrage, en cas de <span
                style="font-style: italic;">Vitrage Triple</span>. Pour le
                second vitrage, en cas de <span
                style="font-style: italic;">Fenêtres Doubles </span>(note de
                version 8.1.0). Voir <a href="8_1_0_x.php">note de version
                8.1.0.073</a>.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
