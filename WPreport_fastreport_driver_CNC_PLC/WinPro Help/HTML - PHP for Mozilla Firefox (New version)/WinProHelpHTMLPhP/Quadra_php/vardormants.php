<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Outer Frame","Dormant"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?vardormants.php"; }
else { parent.quicksync('a3.10.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Dormant</title>
  <meta name="keywords"
  content="_EpaisseurDormantHaut,_EpaisseurDormantBas,_EpaisseurDormantGauche,_EpaisseurDormantDroite,_EpaisseurDormantHautGauche,_EpaisseurDormantHautDroite,_LargeurHT,_HauteurHT,_LargeurTableau,_HauteurTableau,_OrientationFormeDormant,_FormeDormant,_CouleurDormant,_CouleurDormantInt,_CouleurDormantRouge,_CouleurDormantVert,_CouleurDormantBleu,_CouleurDormantIntRouge,_CouleurDormantIntVert,_CouleurDormantIntBleu,_CouleurTraitDormantRouge,_CouleurTraitDormantVert,_CouleurTraitDormantBleu,_CouleurTraitDormantIntRouge,_CouleurTraitDormantIntVert,_CouleurTraitDormantIntBleu,_DormantHaut,_DormantBas,_DormantGauche,_DormantDroite,_CouleurDormantRal,_DimA,_DimB,_DimC,_DimD,_DimE,_DimF,_DimG,_DimH,_DimI,_DimJ,_DimK,_DimL,_NCourbesDormant,_CentreXDormant [],_CentreYDormant [],_RayonDormant [],_OuvertureDormant [],_AngleDebutDormant [],_AngleFinDormant []">
  <meta http-equiv="Content-Type"
  content="application/xhtml+xml; charset=iso-8859-1">
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
        href="introduction.php">Top</a>  <a href="varvolets.php">Previous</a> 
        <a href="vartraverse.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p></p>

        <p><span class="f_Comment"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="290"
                style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Variable</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_FrameThicknessTop</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the <a
                href="drmvariables.php">SmallerHeight</a> of outer frame
                profile on top</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FrameThicknessBottom</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the <a
                href="drmvariables.php">SmallerHeight</a> of outer frame
                profile at bottom</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FrameThicknessLeft</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the <a
                href="drmvariables.php">SmallerHeight</a> of outer frame
                profile on the left</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FrameThicknessRight</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the <a
                href="drmvariables.php">SmallerHeight</a> of outer frame
                profile on the right</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FrameThicknessTopLeft</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Comment"> </span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Comment"> </span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"></span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the <a
                href="drmvariables.php">SmallerHeight</a> of outer frame
                profile on top left</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FrameThicknessTopRight</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the <a
                href="drmvariables.php">SmallerHeight</a> of outer frame
                profile on top right</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_ExtWidth</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">External width of the frame</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_ExtHeight</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">External height of the frame</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_RevealWidth</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Fabrication width of the
                outer frame, deduced with masonry extensions on the left and
                right sides. Reveal width of the outer frame.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_RevealHeight</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Fabrication height of the
                outer frame, deduced with masonry extensions on on top and
                bottom sides. Reveal height of the outer frame.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_OuterFrameShapeOrientation</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Orientation de la forme
                (<span style="color: #0000ff;">_Gauche</span> ou <span
                style="color: #0000ff;">_Droite</span>). La valeur est
                indéterminée pour les formes dans lesquelles l'orientation n'a
                pas de signification</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_OuterFrameShape</span></p>
              </td>
              // <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Outer frame shape.<span
                style="font-size: 12pt; font-family: 'Times New Roman';"></span></p>

                <p style="margin: 0px 0px 0px 13px;">Possible values are:<span
                style="font-size: 12pt; font-family: 'Times New Roman';"></span><span
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
                _TruncatedBasketHandle5, _ReversedTriangle</span> <span style="color: #ff0000">(versions 9.0 and upper)</span><span
                class="f_Variables">, _RightAngledTriangle,</span> <span style="color: #ff0000">(versions 9.0 and upper)</span><span
                class="f_Variables">, _ReversedRectTriangle,</span> <span style="color: #ff0000">(versions 9.0 and upper)</span></p>

                <div
                style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table align="center" cellspacing="0" cellpadding="0"
                bgcolor="#bfd7bf" border="0"
                style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
                  <tbody>
                    <tr valign="top" align="left">
                      <td width="526"
                      style="width: 526px; border: solid 1px #000000;"><p
                        style="margin: 0px 0px 0px 13px;"><span
                        style="font-weight: bold; text-decoration: underline;">Note</span><span
                        style="text-decoration: underline;">:</span></p>

                        <p style="margin: 0px 0px 0px 13px;">When <span
                        class="f_Variables">_FalseArchType</span> returns <span
                        class="f_Variables">2</span> or <span
                        class="f_Variables">3</span>, variable <span
                        class="f_Variables">_OuterFrameShape</span> returns
                        always the value <span
                        class="f_Variables">_Rectangle</span></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="font-family: 'Courier New';"><a
                href="creerforme.php">Refer to the list of shapes for more
                details</a></span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FrameColour</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Category of frame colour (overall or
                outside)</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_FrameInsideColour</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Category of the inside frame
                colour</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_ExtFrameFinishing</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Colour category of the
                outside <a href="finition.php">finishing</a> used for the outer
                frame</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_IntFrameFinishing</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Colour category of the inside
                <a href="finition.php">finishing</a> used for the outer
                frame</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_OuterFrameColourRed</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-size: 5pt;"></span>Returns the RGB value for the
                level of red as specified for the (overall or outside) outer
                frame background colour.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_OuterFrameColourGreen</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the RGB value for the
                level of green as specified for the (overall or outside) outer
                frame background colour.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_OuterFrameColourBlue</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the RGB value for the
                level of blue as specified for the (overall or outside) outer
                frame background colour.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_OuterFrameIntColourRed</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the RGB value for the
                level of red as specified for the inside outer frame fill
                colour.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_OuterFrameIntColourGreen</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the RGB value for the
                level of green as specified for the inside outer frame fill
                colour..</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_OuterFrameIntColourBlue</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the RGB value for the
                level of blue as specified for the inside outer frame fill
                colour..</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_OuterFrameLineColourRed</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the RGB value for the
                level of red as specified for the (overall or outside) outer
                frame line colour.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_OuterFrameLineColourGreen</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the RGB value for the
                level of green as specified for the (overall or outside) outer
                frame line colour.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_OuterFrameLineColourBlue</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the RGB value for the
                level of blue as specified for the (overall or outside) outer
                frame line colour.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_OuterFrameIntLineColourRed</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the RGB value for the
                level of red as specified for the inside outer frame line
                colour.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_OuterFrameIntLineColourGreen</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the RGB value for the
                level of green as specified for the inside outer frame line
                colour.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_OuterFrameIntLineColourBlue</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the RGB value for the
                level of blue as specified for the inside outer frame line
                colour.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_OuterFrameTop</span></p>

                <p style="text-align: center;"><span
                class="f_Variables">_OuterFrameBottom</span></p>

                <p style="text-align: center;"><span
                class="f_Variables">_OuterFrameLeft</span></p>

                <p style="text-align: center;"><span
                class="f_Variables">_OuterFrameRight</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the category of every
                outer frame composing the frame.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DimA</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DimB</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DimC</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DimD</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DimE</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DimF</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DimG</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DimH</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DimI</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DimJ</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DimK</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DimL</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Return the various
                fabrication dimensions input for a window. Variable _<span
                class="f_Variables">DimA</span> correspond to the width, _<span
                class="f_Variables">DimB</span> to the height, and others
                dimensions respectively to fields <span
                class="f_Variables">D</span> to <span
                class="f_Variables">L</span>. Refer to the <a
                href="creerforme.php">shape handling</a> page for more
                details.</p>

                <p style="margin: 0px 0px 0px 14px;"><span
                style="color: #ff0000;">Please note that _DimA correspond to
                the width and _DimB correspond to the height. If you enabled
                the dimension reverse feature into </span><span
                style="font-style: italic; color: #ff0000;">WinPro.ini</span><span
                style="color: #ff0000;">file or </span><span
                style="font-style: italic; color: #ff0000;">settings
                </span><span style="color: #ff0000;">table, _DimA correspond to
                dimension field B and _DimB to dimension field A.</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                style="color: #ff0000;">This reverse feature is enabled through
                section</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                style="font-weight: bold;">[system]</span></p>

                <p style="text-indent: 1px; margin: 0px 0px 0px 22px;"><span
                class="f_Winproini">HxW = 1 </span> </p>

                <p style="margin: 0px 0px 0px 14px;"><span
                style="color: #ff0000;">Same note for _DimC that do not
                consider the value of the following key when computing
                trapezius:</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">[system]</span></p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Winproini">Dim Type = 1  </span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_OuterFrameRalColour</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Returns a value depending on
                the type of colour selected for the outer frame, among
                values:<br>
                <span class="f_Variables">0</span><span
                style="font-family: 'Tahoma';"></span><span
                style="font-family: 'Wingdings';">à</span> Not a RAL colour<br>
                <span class="f_Variables">1</span><span
                style="font-family: 'Tahoma';"></span><span
                style="font-family: 'Wingdings';">à</span><span
                style="font-family: 'Tahoma';"></span>Standard Mono-colour RAL
                <br>
                <span class="f_Variables">2</span><span
                style="font-family: 'Tahoma';"></span><span
                style="font-family: 'Wingdings';">à</span> Standard Bi-colour
                RAL<br>
                <span class="f_Variables">3</span><span
                style="font-family: 'Tahoma';"></span><span
                style="font-family: 'Wingdings';">à</span><span
                style="font-family: 'Tahoma';"></span>Non Standard Mono-colour
                RAL <br>
                <span class="f_Variables">4</span><span
                style="font-family: 'Tahoma';"></span><span
                style="font-family: 'Wingdings';">à</span><span
                style="font-family: 'Tahoma';"></span>Non Standard Bi-colour
                RAL </p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                class="f_Variables">_NBowsFrame</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the real number of
                arc segments of the arched head outer frame.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_CentreXDormant[]</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_CentreYDormant[]</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the coordinates of
                the centre of each circle arc composing the various arched
                segments of an arched outer frame.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_RayonDormant []</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns the radius of the
                centre of each circle arc composing the various arched segments
                of an arched outer frame.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_OuvertureDormant []</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns, into degrees, the
                opening angle of the circle arc of an arched head outer
                frame.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_AngleDebutDormant []</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_AngleFinDormant []</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Returns, into degrees, the
                starting and ending angles of an arched head outer frame.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        style="font-size: 12pt; font-weight: bold; color: #000000;"> </span></p>

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
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p><span style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="290"
                style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Variable</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_EpaisseurDormantHaut</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la <a
                href="drmvariables.php">PetiteHauteur</a> du profil dormant se
                trouvant en haut du cadre</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_EpaisseurDormantBas</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la <a
                href="drmvariables.php">PetiteHauteur</a> du profil dormant se
                trouvant en bas du cadre</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_EpaisseurDormantGauche</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la <a
                href="drmvariables.php">PetiteHauteur</a> du profil dormant se
                trouvant à gauche du cadre</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_EpaisseurDormantDroite</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la <a
                href="drmvariables.php">PetiteHauteur</a> du profil dormant se
                trouvant à droite du cadre</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_EpaisseurDormantHautGauche</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Comment"> </span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Comment"> </span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"></span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la <a
                href="drmvariables.php">PetiteHauteur</a> du profil dormant se
                trouvant en haut à gauche du cadre</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_EpaisseurDormantHautDroite</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la <a
                href="drmvariables.php">PetiteHauteur</a> du profil dormant se
                trouvant en haut à droite du cadre</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_LargeurHT</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Largeur totale du dormant </p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_HauteurHT</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Hauteur totale du dormant</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_LargeurTableau</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Largeur de fabrication du
                cadre dormant, pour laquelle sont déduites les pénétrations
                maçonneries gauche et droite. Largeur tableau du dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_HauteurTableau</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Hauteur de fabrication du
                cadre dormant, pour laquelle sont déduites les pénétrations
                maçonneries haute et basse. Hauteur tableau du dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_OrientationFormeDormant</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Orientation de la forme
                (<span style="color: #0000ff;">_Gauche</span> ou <span
                style="color: #0000ff;">_Droite</span>). La valeur est
                indéterminée pour les formes dans lesquelles l'orientation n'a
                pas de signification</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_FormeDormant</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Forme du cadre dormant.<span
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
                </span><span class="f_Variables">_AnsePanier5Tronquee</span><span
                style="font-size: 12pt; font-family: 'Times New Roman';">,
                </span><span class="f_Variables">_TriangleInverse</span> <span style="color: #ff0000">(versions 9.0 et supérieures)</span>,
                </span><span class="f_Variables">_TriangleRectangle</span> <span style="color: #ff0000">(versions 9.0 et supérieures)</span>,
                </span><span class="f_Variables">_TriangleRectangleInverse</span> <span style="color: #ff0000">(versions 9.0 et supérieures)</span></p>

                <div
                style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table align="center" cellspacing="0" cellpadding="0"
                bgcolor="#bfd7bf" border="0"
                style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
                  <tbody>
                    <tr valign="top" align="left">
                      <td width="526"
                      style="width: 526px; border: solid 1px #000000;"><p
                        style="margin: 0px 0px 0px 13px;"><span
                        style="font-weight: bold; text-decoration: underline;">Remarque</span><span
                        style="text-decoration: underline;">:</span></p>

                        <p style="margin: 0px 0px 0px 13px;">Lorsque <span
                        class="f_Variables">_TypefauxCintre</span> renvoie
                        <span class="f_Variables">2</span> ou <span
                        class="f_Variables">3</span>, la variable <span
                        class="f_Variables">_FormeDormant</span> renvoie
                        systématiquement la valeur <span
                        class="f_Variables">_Rectangle</span></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="font-family: 'Courier New';"><a
                href="creerforme.php">Voir le dessin de chacune de ces
                formes</a></span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_CouleurDormant</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Catégorie de la couleur du
                cadre dormant</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_CouleurDormantInt</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Catégorie de la couleur
                intérieure du cadre dormant</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DormantFinition</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la catégorie de la <a
                href="finition.php">finition</a> extérieure saisie pour le
                cadre dormant</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DormantFinitionInt</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la catégorie de la <a
                href="finition.php">finition</a> intérieure saisie pour le
                cadre dormant</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_CouleurDormantRouge</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-size: 5pt;"></span>Renvoie la valeur RVB du niveau
                de Rouge telle qu'elle est spécifiée dans la couleur de fond du
                dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_CouleurDormantVert</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-size: 5pt;"></span>Renvoie la valeur RVB du niveau
                de Vert telle qu'elle est spécifiée dans la couleur de fond du
                dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_CouleurDormantBleu</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-size: 5pt;"></span>Renvoie la valeur RVB du niveau
                de Bleu telle qu'elle est spécifiée dans la couleur de fond du
                dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_CouleurDormantIntRouge</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la valeur RVB du
                niveau de Rouge telle qu'elle est spécifiée dans la couleur de
                fond intérieure du dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_CouleurDormantIntVert</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la valeur RVB du
                niveau de Vert telle qu'elle est spécifiée dans la couleur de
                fond intérieure du dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_CouleurDormantIntBleu</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la valeur RVB du
                niveau de Bleu telle qu'elle est spécifiée dans la couleur de
                fond intérieure du dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_CouleurTraitDormantRouge</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la valeur RVB du
                niveau de Rouge telle qu'elle est spécifiée dans la couleur de
                trait du dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_CouleurTraitDormantVert</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la valeur RVB du
                niveau de Vert telle qu'elle est spécifiée dans la couleur de
                trait du dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_CouleurTraitDormantBleu</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la valeur RVB du
                niveau de Bleu telle qu'elle est spécifiée dans la couleur de
                trait du dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_CouleurTraitDormantIntRouge</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la valeur RVB du
                niveau de Rouge telle qu'elle est spécifiée dans la couleur du
                trait intérieure du dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_CouleurTraitDormantIntVert</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la valeur RVB du
                niveau de Vert telle qu'elle est spécifiée dans la couleur du
                trait intérieure du dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_CouleurTraitDormantIntBleu</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie la valeur RVB du
                niveau de Bleu telle qu'elle est spécifiée dans la couleur du
                trait intérieure du dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DormantHaut</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DormantBas</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DormantGauche</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DormantDroite</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-size: 5pt;"></span>Renvoie la catégorie de chacun
                des dormants constituant le cadre.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DimA</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DimB</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DimC</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DimD</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DimE</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DimF</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DimG</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DimH</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DimI</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DimJ</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DimK</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_DimL</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoient les différentes
                cotes de fabrication saisies. La variable _<span
                class="f_Variables">DimA</span> correspond à la largeur ,
                _<span class="f_Variables">DimB</span> à la hauteur, quant aux
                autres variables elles correspondent respectivement aux cotes
                de D à L.  Consultez la page <a
                href="creerforme.php">détaillant les formes</a> et chacune de
                leurs cotes.</p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #ff0000;">Retenez bien que _DimA correspond à la
                largeur et _DimB correspond à la hauteur. Car si vous avez
                activé l'inversion des cotes de saisies via le fichier
                winpro.ini, _DimA correspond à la cote saisie B et _DimB à la
                cote A.</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #ff0000;">Cette inversion s'active depuis la
                section:</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span class="f_Winproini"
                style="color: #000000;">[system]</span></p>

                <p style="margin: 0px 0px 0px 37px;"><span
                class="f_Winproini">HxW = 1</span><span
                class="f_Winproini"></span><span class="f_Winproini"></span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #ff0000;">Même remarque pour _DimC qui ne tient
                pas compte de l'état de la clé suivante pour les
                trapèzes:</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span class="f_Winproini"
                style="color: #000000;">[system]</span></p>

                <p style="margin: 0px 0px 0px 37px;"><span
                class="f_Winproini">Dim Type = 1</span><span
                class="f_Winproini"></span><span class="f_Winproini"></span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_CouleurDormantRal</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Renvoie une de ces valeurs en
                fonction du type de teinte saisie du cadre dormant:<br>
                <span class="f_Variables">0</span><span
                style="font-family: 'Tahoma';"></span><span
                style="font-family: 'Wingdings';">à</span> Teinte non Ral<br>
                <span class="f_Variables">1</span><span
                style="font-family: 'Tahoma';"></span><span
                style="font-family: 'Wingdings';">à</span><span
                style="font-family: 'Tahoma';"></span>Teinte Ral Mono
                Standard<br>
                <span class="f_Variables">2</span><span
                style="font-family: 'Tahoma';"></span><span
                style="font-family: 'Wingdings';">à</span> Teinte Ral Bicolor
                Standard<br>
                <span class="f_Variables">3</span><span
                style="font-family: 'Tahoma';"></span><span
                style="font-family: 'Wingdings';">à</span><span
                style="font-family: 'Tahoma';"></span>Teinte Ral Mono Hors
                Standard<br>
                <span class="f_Variables">4</span><span
                style="font-family: 'Tahoma';"></span><span
                style="font-family: 'Wingdings';">à</span><span
                style="font-family: 'Tahoma';"></span>Teinte Ral Bicolor Hors
                Standard</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_NCourbesDormant</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie le nombre effectif de
                segments d'arc de la partie cintrée ou en anse du cadre
                dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_CentreXDormant[]</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_CentreYDormant[]</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoient les coordonnées du
                centre de chaque arc de cercle relatifs aux différents segments
                d'arc du cadre dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_RayonCadreDormant []</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie les rayons de chaque
                arc de cercle relatifs aux différents segments d'arc du cadre
                dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_OuvertureCadreDormant []</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoie, en degrés, l'angle
                d'ouverture de l'arc de cercle du cadre dormant cintré.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="290"
              style="width: 290px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_AngleDebutDormant []</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables">_AngleFinDormant []</span></p>
              </td>
              <td width="611"
                style="width: 611px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;">Renvoient, en degrés, les
                angles de début et de fin de l'arc de cercle du cadre dormant
                cintré.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
