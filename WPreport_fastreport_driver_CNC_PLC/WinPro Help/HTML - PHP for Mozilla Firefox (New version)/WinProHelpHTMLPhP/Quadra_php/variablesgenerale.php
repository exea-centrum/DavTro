<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["General variables","Variables g&#233;n&#233;rales"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?variablesgenerale.php"; }
else { parent.quicksync('a3.4'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Variables générales</title>
  <meta name="keywords"
  content="Variables générales,_Aujourdhui,_DateSaisie,_DateLivraison,_DateMiseEnLotChassis,_DateMiseEnLotVolet,_Winpro,_Quantite,_AssemblageChassis,_FormeAssemblage,_DimAAssemblage,_DimBAssemblage,_DimCAssemblage,_DimDAssemblage,_DimEAssemblage,_DimFAssemblage,_DimGAssemblage,_DimHAssemblage,_DimIAssemblage,_DimJAssemblage,_DimKAssemblage,_DimLAssemblage,_CaissonDeduitAutorise,_CaissonNonDeduitAutorise,_Situation,_PenetrationMaconnerieHaut,_PenetrationMaconnerieBas,_PenetrationMaconnerieGauche,_PenetrationMaconnerieDroite,_NormeVent,_NormeVerre,_HauteurConstruction,_TypePrix,_NumeroBiblio,_NumeroInterneBiblio,_Remise,_Remise2,_Remise3,_RemiseVolet,_RemiseVolet2,_RemiseVolet3,_RemiseVitrage,_RemiseVitrage2,_RemiseVitrage3,_Commercial,_Debourse,_HorsAssemblage,_StructureAssemblage,_ElementAssemblage,_Fabricant,_Devis,_ContientVide,_ContientPorte,_SansVitrage,_PoidsChargement,_Ral,_CommandeVitrage,_EtatCommande">
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
        href="variables_de_production.php">Previous</a>  <a
        href="formuledesite.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p></p>

        <p>These variables are made available just before the computation
        begins. They give you information about the computation context.</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 11px;"><span
                style="font-weight: bold; text-decoration: underline;">Note:</span></p>

                <p style="margin: 0px 0px 0px 11px;">Variables with description
                starting with the sign <span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span> may be modified by
                the formulas. WinPro will use their value when needed.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Variable</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_Today</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="color: #000000;">Holds the current date as a number -
                see section about <a href="fonctions_de_date.php">date
                handling</a>.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_InputDate</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="color: #000000;">Holds the date when the window is
                input, and is initialized as soon as the order is
                recorded.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_DeliveryDate</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Order delivery date</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_DateLevel</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span> This variable
                should be set by the user into the technical set up rules for
                the window. It affects a date level value to a window regarding
                its complexity. It will then be used into module <span
                style="font-weight: bold;">DAT Date automated
                computation</span>, as mentioned into <a
                href="rn723x.php">release note 7.2.32</a>. See also the detail
                of the <a href="typedate.php">date types</a> as well as set up
                for <a href="configurationniveaudates.php">date levels
                setup</a>. WinPro will base its computation onto the highest
                date level of the windows.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_ProductionSpotCategory</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                class="p_Textestd" style="margin: 0px 0px 0px 14px;"><span
                class="f_Textestd">Returns the production spot category number,
                in order to adapt specific treatments for it.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_WindowJobCreationDate</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_ShutterJobCreationDate</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                class="p_Textestd" style="margin: 0px 0px 0px 14px;"><span
                class="f_Textestd">Returns the date when the production job has
                been generated for this window or roller shutter.</span><br>
                <span class="f_Textestd">Please note that this variable is only
                initialized when clicking on the « Generate job » of the job
                preparation interface (specific to the GLP module, production
                lines management). Without this module, those variables are not
                initialized.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_Winpro</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="color: #000000;">Holds the value </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_Maker</span><span
                style="color: #000000;"> when evaluated in </span><span
                style="font-weight: bold; color: #000000;">WinPro</span><span
                style="color: #000000;">, and </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_Seller</span><span
                style="color: #000000;"> when evaluated in </span><span
                style="font-weight: bold; color: #000000;">Winpro/D</span><span
                style="color: #000000;">.</span> </p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_Quantity</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="color: #000000;">Number of identical windows (as typed
                in the "Window" page of the order input dialog).</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_WindowSet</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">Tells whether the window belongs to a
                window set. Holds: </span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span
                        style="font-family: 'Courier New'; color: #0000ff;">_SetElement</span><span
                        style="color: #000000;"> if the window belongs to a
                        set, </span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span
                        style="font-family: 'Courier New'; color: #0000ff;">_SetStructure </span><span
                        style="color: #000000;">if this is the set itself
                        (without its windows), </span></td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 13px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span
                        style="font-family: 'Courier New'; color: #0000ff;">_NotInSet</span><span
                        style="color: #000000;"> if the window does not belong
                        to a set.</span></td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_SetShape</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Shape of the window set.<span
                style="font-size: 12pt; font-family: 'Times New Roman';"></span></p>

                <p style="margin: 0px 0px 0px 14px;">Possible values are: <span
                class="f_Variables">_Rectangle, _Trapezium,
                _RightAngledTriangle, _TruncatedCorner, _Pentagon,
                _TruncatedTrapezium, _TruncatedCorner2, _RightAngledTrapezium,
                _SimpleTrapezium, _Bow, _FullBow, _HalfFullBow, _FlatBow,
                _HalfFlatBow, _TruncatedBow, _RoundedCorner, _Quadrilateral,
                _Triangle,</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                class="f_Variables">_BullsEye, _BasketHandle,
                _FullBasketHandle, _HalfBasketHandle, _TruncatedBasketHandle,
                _BasketHandle5, _FullBasketHandle5, _HalfBasketHandle5,
                _TruncatedBasketHandle5.</span></p>

                <p style="margin: 0px 0px 0px 14px;"> </p>

                <p style="margin: 0px 0px 0px 14px;"><span
                style="color: #ff0000;">WinPro returns </span><span
                class="f_Variables">-1 </span><span style="color: #ff0000;">in
                case the design is not a window set.</span></p>

                <p style="margin: 0px 0px 0px 14px;"> </p>

                <p style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Courier New';"><a
                href="creerforme.php">Refer to the drawing of each
                shape</a></span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_DimASet</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_DimBSet</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_DimCSet</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_DimDSet</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_DimESet</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_DimFSet</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_DimGSet</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_DimHSet</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_DimISet</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_DimJSet</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_DimKSet</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_DimLSet</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Return the various
                fabrication dimensions input for a window set. In case the
                design is not a set of windows, the variables return <span
                class="f_Variables">zero</span>. Variable _<span
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
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_BoxCanBeDeduced</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Holds 1 if the user
                is allowed to deduce the box height, 0 otherwise.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_BoxCannotBeDeduced</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Holds 1 if the user
                is not allowed to deduce the box height, 0 otherwise.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_InputMode</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Holds:</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">_FactoryDimension</span> :
                        when dimensions of the window correspond to overall
                        frame dimension (finished frame).</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">_RevealDimension</span> :
                        when dimensions of the window correspond to the wall
                        dimension or window visible dimension.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_WallConfiguration</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="color: #000000;">Holds the id of the selected wall
                configuration.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_TopReveal</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Reveal's value at
                the top of the window.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_BottomReveal</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Reveal's value at
                the bottom of the window.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_LeftReveal</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Reveal's value on
                the left of the window.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_RightReveal</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Reveal's value on
                the right of the window.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_WindNorm</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="color: #000000;">Holds the value linked to the wind norm
                used for the window.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_GlassNorm</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="color: #000000;">Holds the value linked to the glass
                norm used for the window.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_HeightInBuilding</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="color: #000000;">Holds the height of the window in the
                building.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_PriceType</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Forces how the
                window's price is computed: <span
                style="font-family: 'Courier New'; color: #0000ff;">_RealCost</span><span
                style="color: #000000;"> or </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_Commercial</span><span
                style="color: #000000;">. </span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                style="color: #000000;">When computing in </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_RealCost</span><span
                style="color: #000000;"> mode, WinPro sums the price of all
                components which are not excluded from the cost price;
                </span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                style="color: #000000;">when computing in </span><span
                style="font-family: 'Courier New'; color: #0000ff;">_Commercial </span><span
                style="color: #000000;">mode, WinPro sums the price of all
                components which are not excluded from the selling
                price.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_LibraryNumber</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="color: #000000;">Number of the library from which the
                window was extracted.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_LibraryInternalNumber</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="color: #000000;">Number of the library's window from
                which the window was extracted.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_Discount</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;">&hArr;</span><span
                style="color: #000000;">Main discount on the window (excluding
                glazing and roller shutter). The initial value is the one typed
                in the </span><span
                style="font-weight: bold; color: #000000;">Window </span><span
                style="color: #000000;">page of the order, or the one typed in
                the </span><span
                style="font-weight: bold; color: #000000;">Price</span><span
                style="color: #000000;"> page.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_Discount2</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Second level
                discount on the window (excluding glazing and roller shutter).
                The initial value is the one typed in the <span
                style="font-weight: bold; color: #000000;">Window</span><span
                style="color: #000000;"> page of the order, or the one typed in
                the </span><span
                style="font-weight: bold; color: #000000;">Price </span><span
                style="color: #000000;">page.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_Discount3</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Third level
                discount on the window (excluding glazing and roller shutter).
                The initial value is the one typed in the <span
                style="font-weight: bold; color: #000000;">Window </span><span
                style="color: #000000;">page of the order, or the one typed in
                the </span><span
                style="font-weight: bold; color: #000000;">Price</span><span
                style="color: #000000;"> page.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_RollerShutterDiscount</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Main discount on
                the roller shutter. The initial value is the one typed in the
                <span
                style="font-weight: bold; color: #000000;">Window</span><span
                style="color: #000000;"> page of the order, or the one typed in
                the </span><span
                style="font-weight: bold; color: #000000;">Price</span><span
                style="color: #000000;"> page.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_RollerShutterDiscount2</span></p>

                <p style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;"> </span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Second level
                discount on the roller shutter. The initial value is the one
                typed in the <span
                style="font-weight: bold; color: #000000;">Window</span><span
                style="color: #000000;"> page of the order, or the one typed in
                the </span><span
                style="font-weight: bold; color: #000000;">Price</span><span
                style="color: #000000;"> page.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_RollerShutterDiscount3</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Third level
                discount on the roller shutter. The initial value is the one
                typed in the <span
                style="font-weight: bold; color: #000000;">Window</span><span
                style="color: #000000;"> page of the order, or the one typed in
                the </span><span
                style="font-weight: bold; color: #000000;">Price</span><span
                style="color: #000000;"> page.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_GlassDiscount</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span> Base discount for
                the glazings. </p>

                <p style="margin: 0px 0px 0px 14px;">The initial value is
                indicated into the <span style="font-weight: bold;">Price
                </span>tab of the order, or into the <span
                style="font-weight: bold;">Window</span> tab.</p>

                <p style="margin: 0px 0px 0px 14px;">The set up user may modify
                this value by rule from the customer record. This formulae will
                only be considered when the Discount per window box is enabled.
                (module GR - Release note 6.4.13)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_GlassDiscount2</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span> Second discount
                for glazings. </p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_GlassDiscount3</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span> Third discount for
                glazings. </p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_HasVoidPart</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Indicate when an empty part
                composes the window</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; height: 22px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_HasDoor</span></p>
              </td>
              <td valign="top" width="451"
              style="width: 451px; height: 22px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Indicate if at least one
                "door" sash type is existing into the window</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_WithoutGlass</span></p>
              </td>
              <td valign="top" width="451"
              style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Initialized according status
                of checkbox "Do not supply glass" into the <span
                style="font-weight: bold;">Header </span>tab of the order.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_LoadWeight</span></p>
              </td>
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span> Winpro cumulate
                the various values of this variable along the rules, and will
                store the result, by window, into <span
                style="font-style: italic;">Detail</span> table and <span
                style="font-style: italic;">Fen</span> table in case of
                export..</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables" style="font-weight: bold;">_Ral</span></p>
              </td>
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Initialized in function of
                the status of checkbox "Ral" into the <span
                style="font-weight: bold;">Window </span>tab of the order.
                Returns 1 when the design is input with RAL colours.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables" style="font-weight: bold;"> </span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_GlazingOrder</span></p>
              </td>
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">This variable returns <span
                class="f_Variables">1</span> when Winpro has calculated and
                printed the glass order form. It allows the user to condition
                the display of specific drawings only to be printed onto this
                document.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables" style="font-weight: bold;"> </span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_OrderStatus</span></p>
              </td>
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Returns the numerical value
                corresponding to the order status : <span
                class="f_Variables">100</span>=quote; <span
                class="f_Variables">200</span>=Order not handled; <span
                class="f_Variables">210</span>=Order modified; <span
                class="f_Variables">220</span>=Confirmation printed; <span
                class="f_Variables">240</span>=Confirmation validated; <span
                class="f_Variables">250</span>=Supplier order forms printed;
                <span class="f_Variables">260</span>=Financial approval; <span
                class="f_Variables">280</span>=Confirmation sent; <span
                class="f_Variables">398</span>=Order on hold; <span
                class="f_Variables">399</span>=Reactivation after on hold
                period; <span class="f_Variables">400</span>=Approbation; <span
                class="f_Variables">420</span>=Glass order; <span
                class="f_Variables">499</span>=Optimization preparation; <span
                class="f_Variables">500</span>=Optimization complete; <span
                class="f_Variables">501</span>=Partial optimisation; <span
                class="f_Variables">600</span>=Production complete; <span
                class="f_Variables">601</span>=Partial production; <span
                class="f_Variables">700</span>=End of production; <span
                class="f_Variables">740</span>=Delivery préearation; <span
                class="f_Variables">800</span>=Delivery note; <span
                class="f_Variables">850</span>=Invoicing; <span
                class="f_Variables">900</span>=Closed<br>
                This variable returns 0 as long as the order or quote is not
                recorded once.</p>

                <p style="margin: 0px 0px 0px 14px;"> </p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table cellspacing="0" cellpadding="0" bgcolor="#339966"
                border="0"
                style="background-color: #339966; border: none border-spacing:0px;">
                  <tbody>
                    <tr valign="top" align="left">
                      <td><p style="margin: 0px 0px 0px 14px;"><span
                        style="font-weight: bold; color: #ff0000; text-decoration: underline;">Addenum
                        :</span> This behaviour is modified from version <a
                        href="8_1_1_x.php">8.1.1.087</a>. The variable would
                        now be worth Quotation or Order (<span
                        class="f_Variables">100</span> ou <span
                        class="f_Variables">200</span>) as soon as the order
                        creation, without need to record the order once at
                        least.</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables" style="font-weight: bold;"> </span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_FalseArchType</span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_FalseArchCateg</span></p>
              </td>
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Those variables returns
                numbers depending on the false arch type and category seti:</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">0</span>: Standard frame (no false arch)</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">1</span>: Outer frame is rectangular
                externally</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">2</span>: Outer frame fully rectangular;
                sash frame rectangular externally</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">3</span>: Outer frame fully rectangular;
                sash rectangular externally; glass is rectangular</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">4</span>: Outer frame squared out with a
                panel</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">5</span>: Window retains its shape; glass
                is covered to show a non rectangular shape</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables" style="font-weight: bold;"> </span></p>

                <p style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_FalseArchShape</span></p>
              </td>
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">This variable contains a
                numerical value corresponding to the false arch shape,
                depending on type (4 or 5 concerned here):</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">-1</span>: No false arch of type 4 or 5
                (see variable <span
                class="f_Variables">_FalseArchType</span>).</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">0</span>: Flat bow of type 5</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">1</span>: Half flat bow left of type 5</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">2</span>: Half flat bow right of type 5</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">3</span>: Full bow of type 5</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">4</span>: Half full bow left of type 5</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">5</span>: Half full bow right of type 5</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">6</span>: Basket handle of type 5</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">7</span>: Half basket handle left of type
                5</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">8</span>: Half basket handle right of type
                5</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">9</span>: Oval type 5</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><span
                class="f_Variables"
                style="font-weight: bold;">_MullionColour</span></p>
              </td>
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span> This variable
                allows the set up user to mention whether the French mullion
                colour should follow the <span
                class="f_Variables">_OuterFrame</span> or <span
                class="f_Variables">_Sash</span> frame colour defined. Winpro
                identifies the French mullion profile with checkbox "French
                mullion" onto the bottom pane of the sash rule editor for
                profile.<br>
                </p>

                <p style="margin: 0px 0px 0px 14px;"><span
                style="color: #ff0000;">This variable is fetched during the
                pre-computation process, please do not check boxes related to
                the "Computation options" into the </span><span
                style="font-style: italic; color: #ff0000;">Description
                </span><span style="color: #ff0000;">tab of the sash
                file.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span class="f_Variables"
                style="font-weight: bold;">_RecordedOrder</span></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">This variable is worth 1 as soon as the order or quotation has been recorded once. It is worth zero as long as the order is not recorded once.
				Refer to <a href="8_1_1_x.php">release note 8.1.1.099</a>.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 48px;"><span
        style="font-size: 5pt; color: #000000;"> </span></p>

        <p style="text-align: center; margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"> </span></p>

        <p style="text-align: center; margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"> </span></p>

        <p style="text-align: center; margin: 0px 0px 0px 48px;"><span
        style="font-family: 'Courier New'; color: #0000ff;"> </span></p>

        <p style="margin: 0px 0px 14px 0px;"><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>

        <p style="background: #fffff2;"><span
        style="color: #000000;"> </span></p>
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

        <p>Ces variables, disponibles dès le début du calcul, vous renseignent
        sur les conditions générales du calcul.</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Remarque:</span></p>

                <p style="margin: 0px 0px 0px 13px;">Les variables dont la
                description par <span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span> peuvent être
                modifiées par paramétrage. Winpro récupérera leur valeur en
                temps utile.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table align="center" cellspacing="0" cellpadding="2" bgcolor="#fff7ef"
        border="1"
        style="background-color: #fff7ef; border: solid 2px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><strong><span
                style="font-weight: bold;">Variable</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_Aujourdhui</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Cette variable contient la
                date du jour (sous forme numérique) - reportez-vous à l'aide
                sur les <a href="fonctions_de_date.php">fonctions de
                date</a>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_DateSaisie</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Date à laquelle la commande a
                été saisie. Cette variable n'est initialisée par Winpro que si
                la commande a été enregistrée.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_DateLivraison</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Date de livraison de la
                commande</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_NiveauDate</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Cette variable doit
                être renseignée par l'utilisateur dans les formules de
                paramétrage technique de la menuiserie. Elle permet d'affecter
                une valeur de niveau de date à un châssis en fonction de sa
                complexité. Cette variable sera ensuite utilisée dans le module
                <span style="font-weight: bold;">DAT Calcul de date
                automatisé</span>, comme indiqué dans la <a
                href="rn723x.php">note de version 7.2.32</a>. Voir également le
                détail des<a href="typedate.php">types de dates</a>, ainsi que
                la <a href="configurationniveaudates.php">configuration des
                niveaux de dates</a>. WinPro basera son calcul sur le niveau de
                date le plus élevé de tous les repères.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_CategPosteAtelier</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                class="p_Textestd" style="margin: 0px 0px 0px 14px;"><span
                class="f_Textestd">Renvoie le numéro de catégorie d'un <a
                href="posteatelier.php">poste atelier</a>, afin de prévoir des
                traitements particuliers pour celui ci.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_DateMiseEnLotChassis</span></strong></p>

                <p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_DateMiseEnLotVolet</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                class="p_Textestd" style="margin: 0px 0px 0px 14px;"><span
                class="f_Textestd">Renvoient la date à laquelle le lot
                contenant la menuiserie à été généré.</span><br>
                <span class="f_Textestd">Attention ces 2 variables ne sont
                initialisées que lors du clic sur le bouton « Générer les
                lots » de l</span><span class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">interface de préparation des lots spécifique
                au module GLP (Gestion des lignes de production). Si vous ne
                disposez pas de ce module, les variables ne seront jamais
                initialisées.</span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_Winpro</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Cette variable vaut <span
                class="f_Variables">_Fabricant</span> dans WinPro, et <span
                class="f_Variables">_Devis</span> dans Winpro/D. </p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_Quantite</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Nombre de châssis identiques
                (tel que saisi dans l'onglet "Châssis" de la commande
                client).</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_AssemblageChassis</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Vaut:</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">_ElementAssemblage</span>
                        si le châssis est compris dans un assemblage.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">_StructureAssemblage</span>
                        s'il s'agît de l'assemblage lui-même (sans ses
                        châssis). </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">_HorsAssemblage</span> si
                        le châssis n'appartient pas à un assemblage.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_FormeAssemblage</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Forme de l'assemblage.<span
                style="font-size: 12pt; font-family: 'Times New Roman';"></span></p>

                <p style="margin: 0px 0px 0px 14px;">Les valeurs possibles
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

                <p style="margin: 0px 0px 0px 14px;"><span
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
                </span><span
                class="f_Variables">_AnsePanier5Tronquee.</span></p>

                <p style="margin: 0px 0px 0px 14px;"> </p>

                <p style="margin: 0px 0px 0px 14px;"><span
                style="color: #ff0000;">La valeur retournée dans le cas où nous
                ne sommes pas en présence d'un assemblage est:</span><span
                style="font-size: 12pt; font-family: 'Times New Roman'; color: #ff0000;"></span><span
                class="f_Variables">-1</span></p>

                <p style="margin: 0px 0px 0px 14px;"> </p>

                <p style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Courier New';"><a
                href="creerforme.php">Voir le dessin de chacune de ces
                formes</a></span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_DimAAssemblage</span></strong></p>

                <p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_DimBAssemblage</span></strong></p>

                <p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_DimCAssemblage</span></strong></p>

                <p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_DimDAssemblage</span></strong></p>

                <p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_DimEAssemblage</span></strong></p>

                <p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_DimFAssemblage</span></strong></p>

                <p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_DimGAssemblage</span></strong></p>

                <p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_DimHAssemblage</span></strong></p>

                <p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_DimIAssemblage</span></strong></p>

                <p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_DimJAssemblage</span></strong></p>

                <p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_DimKAssemblage</span></strong></p>

                <p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_DimLAssemblage</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Renvoient les différentes
                cotes de fabrication saisies au niveau de l'assemblage. S'il ne
                s'agit pas d'un assemblage, elles renvoient toutes <span
                class="f_Variables">0</span>. La variable _<span
                class="f_Variables">DimA</span> correspond à la largeur, _<span
                class="f_Variables">DimB</span> à la hauteur, quant aux autres
                variables elles correspondent respectivement aux cotes de D à
                L.  Consultez la page <a href="creerforme.php">détaillant les
                formes</a> et chacune de leurs cotes.</p>

                <p style="margin: 0px 0px 0px 14px;"><span
                style="color: #ff0000;">Retenez bien que _DimA correspond à la
                largeur et _DimB correspond à la hauteur. Car si vous avez
                activé l'inversion des cotes de saisies via le fichier
                </span><span
                style="font-style: italic; color: #ff0000;">WinPro.ini</span><span
                style="color: #ff0000;">ou la table </span><span
                style="font-style: italic; color: #ff0000;">settings</span><span
                style="color: #ff0000;">, _DimA correspond à la cote saisie B
                et _DimB à la cote A.</span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                style="color: #ff0000;">Cette inversion s'active depuis la
                section </span></p>

                <p style="margin: 0px 0px 0px 14px;"><span
                style="font-weight: bold;">[system]</span></p>

                <p style="text-indent: 1px; margin: 0px 0px 0px 22px;"><span
                class="f_Winproini">HxW = 1</span><span
                class="f_Winproini"></span> </p>

                <p style="margin: 0px 0px 0px 14px;"><span
                style="color: #ff0000;">Même remarque pour _DimC qui ne tient
                pas compte de l'état de la clé suivante pour les
                trapèzes:</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold;">[system]</span></p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Winproini">Dim Type = 1</span><span
                class="f_Winproini"></span><span class="f_Winproini"></span></p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_CaissonDeduitAutorise</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Indique si
                l'utilisateur peut choisir de déduire le caisson à la
                saisie.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_CaissonNonDeduitAutorise</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Indique si
                l'utilisateur peut choisir de ne pas déduire le caisson à la
                saisie.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_ModeSaisie</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Vaut:</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">_CoteFabrication</span> :
                        si les dimensions de la fenêtres correspondent à des
                        dimensions hors tout (cadre fini).</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td><span class="f_Variables">_CoteTableau</span> : si
                        les dimensions de la fenêtres correspondent  au tableau
                        de la menuiserie, au jour de la menuiserie, ou encore
                        tête de moule.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_Situation</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Contient le numéro de la
                situation maçonnerie.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_PenetrationMaconnerieHaut</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Contient la
                profondeur de pénétration maçonnerie en haut du dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_PenetrationMaconnerieBas</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Contient la
                profondeur de pénétration maçonnerie en bas du dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_PenetrationMaconnerieGauche</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Contient la
                profondeur de pénétration maçonnerie à gauche du dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_PenetrationMaconnerieDroite</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Contient la
                profondeur de pénétration maçonnerie à droite du dormant.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_NormeVent</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Contient la valeur liée à la
                norme de pression de vent définie pour le châssis.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_NormeVerre</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Contient la valeur liée à la
                norme de résistance de verre définie pour le châssis.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_HauteurConstruction</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Contient la hauteur de la
                fenêtre dans le bâtiment.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_TypePrix</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span> Mode de calcul du
                prix: <span class="f_Variables">_Debourse</span> ou <span
                class="f_Variables">_Commercial</span>. </p>

                <p style="margin: 0px 0px 0px 14px;">Le mode de calcul <span
                class="f_Variables">_Debourse</span> cumule le prix des
                composants qui ne sont pas exclus du prix de revient. </p>

                <p style="margin: 0px 0px 0px 14px;">Le mode de calcul <span
                class="f_Variables">_Commercial</span> cumule le prix des
                composants qui ne sont pas exclus du prix de vente.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_NumeroBiblio</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Numéro de la bibliothèque
                dont le châssis est extrait.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_NumeroInterneBiblio</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Numéro du châssis de
                bibliothèque dont le châssis a été copié.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_Remise</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Remise de base sur
                le châssis (hors vitrage et volet). La valeur initiale est
                celle indiquée dans l'onglet <span
                style="font-weight: bold;">Prix</span> de la commande client,
                ou celle indiquée dans l'onglet <span
                style="font-weight: bold;">Châssis</span> de la commande
                client. Variable prise en compte seulement si la case <span
                style="font-style: italic;">"Remise par repère"</span> est
                activée dans l'onglet <span style="font-weight: bold;">Prix
                </span>de la commande.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_Remise2</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Remise de 2ème
                niveau sur le châssis (hors vitrage et volet). La valeur
                initiale est celle indiquée dans l'onglet <span
                style="font-weight: bold;">Prix</span> de la commande client,
                ou celle indiquée dans l'onglet <span
                style="font-weight: bold;">Châssis</span> de la commande
                client. Variable prise en compte seulement si la case <span
                style="font-style: italic;">"Remise par repère"</span> est
                activée dans l'onglet <span style="font-weight: bold;">Prix
                </span>de la commande. Variable prise en compte seulement si la
                case <span style="font-style: italic;">"Remise par
                repère"</span> est activée dans l'onglet <span
                style="font-weight: bold;">Prix </span>de la commande.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_Remise3</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Remise de 3ème
                niveau sur le châssis (hors vitrage et volet). La valeur
                initiale est celle indiquée dans l'onglet <span
                style="font-weight: bold;">Prix</span> de la commande client,
                ou celle indiquée dans l'onglet <span
                style="font-weight: bold;">Châssis</span> de la commande
                client. Variable prise en compte seulement si la case <span
                style="font-style: italic;">"Remise par repère"</span> est
                activée dans l'onglet <span style="font-weight: bold;">Prix
                </span>de la commande.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_RemiseVolet</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Remise de base sur
                le volet roulant. La valeur initiale est celle indiquée dans
                l'onglet <span style="font-weight: bold;">Prix</span> de la
                commande client, ou celle indiquée dans l'onglet <span
                style="font-weight: bold;">Châssis</span> de la commande.
                Variable prise en compte seulement si la case <span
                style="font-style: italic;">"Remise par repère"</span> est
                activée dans l'onglet <span style="font-weight: bold;">Prix
                </span>de la commande.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_RemiseVolet2</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Remise de 2ème
                niveau sur le volet roulant. La valeur initiale est celle
                indiquée dans l'onglet <span
                style="font-weight: bold;">Prix</span> de la commande client,
                ou celle indiquée dans l'onglet <span
                style="font-weight: bold;">Châssis</span> de la commande.
                Variable prise en compte seulement si la case <span
                style="font-style: italic;">"Remise par repère"</span> est
                activée dans l'onglet <span style="font-weight: bold;">Prix
                </span>de la commande.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_RemiseVolet3</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Remise de 3ème
                niveau sur le volet roulant. La valeur initiale est celle
                indiquée dans l'onglet <span
                style="font-weight: bold;">Prix</span> de la commande client,
                ou celle indiquée dans l'onglet <span
                style="font-weight: bold;">Châssis</span> de la commande.
                Variable prise en compte seulement si la case <span
                style="font-style: italic;">"Remise par repère"</span> est
                activée dans l'onglet <span style="font-weight: bold;">Prix
                </span>de la commande.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_RemiseVitrage</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Remise de base sur
                le vitrage. </p>

                <p style="margin: 0px 0px 0px 14px;">La valeur initiale est
                celle indiquée dans l'onglet <span
                style="font-weight: bold;">Prix</span> de la commande client,
                ou celle indiquée dans l'onglet <span
                style="font-weight: bold;">Châssis</span> de la commande.</p>

                <p style="margin: 0px 0px 0px 14px;">Le paramétreur peut
                modifier cette remise par formule via la fiche client. Cette
                formule ne sera considérée par Winpro que si l'on est en calcul
                de remise par repère.(module GR - <a href="rn641x.php">Note de
                release 6.4.13</a>)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_RemiseVitrage2</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Remise de 2ème
                niveau sur le vitrage. </p>

                <p style="margin: 0px 0px 0px 14px;">La valeur initiale est
                celle indiquée dans l'onglet <span
                style="font-weight: bold;">Prix</span> de la commande client,
                ou celle indiquée dans l'onglet <span
                style="font-weight: bold;">Châssis</span> de la commande.</p>

                <p style="margin: 0px 0px 0px 14px;">Le paramétreur peut
                modifier cette remise par formule via la fiche client. Cette
                formule ne sera considérée par Winpro que si l'on est en calcul
                de remise par repère.(module GR - <a href="rn641x.php">Note de
                release 6.4.13</a>)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_RemiseVitrage3</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Remise de 3ème
                niveau sur le vitrage. </p>

                <p style="margin: 0px 0px 0px 14px;">La valeur initiale est
                celle indiquée dans l'onglet <span
                style="font-weight: bold;">Prix</span> de la commande client,
                ou celle indiquée dans l'onglet <span
                style="font-weight: bold;">Châssis</span> de la commande.</p>

                <p style="margin: 0px 0px 0px 14px;">Le paramétreur peut
                modifier cette remise par formule via la fiche client. Cette
                formule ne sera considérée par Winpro que si l'on est en calcul
                de remise par repère.(module GR - <a href="rn641x.php">Note de
                release 6.4.13</a>)</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_ContientVide</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Indique si une partie vide
                fait partie de la fenêtre</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
              style="width: 241px; height: 22px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_ContientPorte</span></strong></p>
              </td>
              <td valign="top" width="451"
              style="width: 451px; height: 22px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Indique si au moins 1 ouvrant
                de type "porte" est présent ou non dans la fenêtre</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_SansVitrages</span></strong></p>
              </td>
              <td valign="top" width="451"
              style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">S'initialise en fonction de
                l'état de la case à cocher "Ne pas fournir les vitrages" se
                trouvant dans l'onglet <span style="font-weight: bold;">Entête
                </span>de la commande client.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_PoidsChargement</span></strong></p>
              </td>
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Winpro cumule les
                incrémentations paramétrées de cette variable et stocke la
                valeur de cette variable, par repère, dans la table <span
                style="font-style: italic;">Detail</span>, et en cas
                d&rsquo;export des données dans <span
                style="font-style: italic;">Fen</span>.</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_Ral</span></strong></p>
              </td>
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">S'initialise en fonction de
                l'état de la case à cocher "Ral" se trouvant dans l'onglet
                <span style="font-weight: bold;">Châssis</span> de la commande
                client. Renvoie 1si le châssis est saisi en teinte Ral</p>
              </td>
            </tr>
            <tr valign="middle" align="left">
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_CommandeVitrage</span></strong></p>
              </td>
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Cette variable renvoie <span
                class="f_Variables">1</span> lorsque Winpro calcule et lance
                l'impression du bon de commande vitrage. Elle permet au
                paramétreur de conditionner l'affichage de dessins
                exclusivement destinés à l'impression de ce document.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_EtatCommande</span></strong></p>
              </td>
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Renvoie la valeur numérique
                correspondant à l&rsquo;état de la commande, soit : <span
                class="f_Variables">100</span>=devis; <span
                class="f_Variables">200</span>=Commande non traitée; <span
                class="f_Variables">210</span>=Commande modifiée; <span
                class="f_Variables">220</span>=Impression confirmation; <span
                class="f_Variables">240</span>=Vérification confirmation; <span
                class="f_Variables">250</span>=Impression de la commande
                fournisseur; <span class="f_Variables">260</span>=Avalisation
                financière; <span class="f_Variables">280</span>=Envoi
                confirmation; <span class="f_Variables">398</span>=Mise en
                attente; <span class="f_Variables">399</span>=Réactivation
                après mise en attente; <span
                class="f_Variables">400</span>=Approbation; <span
                class="f_Variables">420</span>=Commande vitrages; <span
                class="f_Variables">499</span>=Préparation optimisation; <span
                class="f_Variables">500</span>=Optimisation complète; <span
                class="f_Variables">501</span>=Optimisation partielle; <span
                class="f_Variables">600</span>=Mise en production complète;
                <span class="f_Variables">601</span>=Mise en production
                partielle; <span class="f_Variables">700</span>=Fin de
                fabrication; <span class="f_Variables">740</span>=Préparation
                de la livraison; <span class="f_Variables">800</span>=Note
                d'envoi; <span class="f_Variables">850</span>=Facturation;
                <span class="f_Variables">900</span>=Clôture<br>
                Cette variable renvoie 0 tant que le devis ou la commande n'a
                pas été enregistrée un première fois.</p>

                <p style="margin: 0px 0px 0px 14px;"> </p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table cellspacing="0" cellpadding="0" bgcolor="#339966"
                border="0"
                style="background-color: #339966; border: none border-spacing:0px;">
                  <tbody>
                    <tr valign="top" align="left">
                      <td><p style="margin: 0px 0px 0px 14px;"><span
                        style="font-weight: bold; color: #ff0000; text-decoration: underline;">Addenum
                        :</span> Ce comportement est modifié à partir de la <a
                        href="8_1_1_x.php">version 8.1.1.087</a>. Dorénavant,
                        la variable vaudra le status Devis ou Commande (<span
                        class="f_Variables">100</span> ou <span
                        class="f_Variables">200</span>) dés la création de la
                        commande, et ce sans avoir besoin d'enregistrer au
                        moins une fois.</p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="margin: 0px 0px 0px 14px;"> </p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_TypeFauxCintre</span></strong></p>

                <p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_CategFauxCintre</span><span
                style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"></span></strong></p>
              </td>
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Ces variables renvoient des
                numéros correspondants au type de faux cintre saisi:</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">0</span>: Cadre standard (pas de faux
                cintre)</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">1</span>: Extérieur du dormant
                rectangulaire.</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">2</span>: Dormant et extérieur de l'ouvrant
                rectangulaire</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">3</span>: Dormant, ouvrant extérieur et
                battée vitrage extérieure rectangulaire;intérieur ouvrant et
                intérieur parcloses non rectangulaire.</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">4</span>: Ajout d'une extension à
                l'extérieur du dormant.</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">5</span>: Forme châssis inchangée;applique
                sur les vitrages.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 7px;"><strong><span
                class="f_Variables">_FormeFauxCintre</span></strong></p>
              </td>
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Cette variable contient une
                de ces valeurs numériques faisant référence aux différentes
                formes de l'applique cintrée saisie (type 4 ou 5 ici):</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">-1</span>: Pas de faux-cintre de type 4 ou
                5 (voir variable <span
                class="f_Variables">_TypeFauxCintre</span>).</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">0</span>: Cintre plat de type 5</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">1</span>: Demi-cintre plat gauche de type
                5</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">2</span>: Demi-cintre plat droit de type
                5</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">3</span>: Plein cintre de type 5</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">4</span>: Demi-plein cintre gauche de type
                5</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">5</span>: Demi-plein cintre droit de type
                5</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">6</span>: Anse de panier de type 5</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">7</span>: Demi-anse de panier gauche de
                type 5</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">8</span>: Demi-anse de panier droite de
                type 5</p>

                <p style="margin: 0px 0px 0px 22px;"><span
                class="f_Variables">9</span>: Ovale de type 5</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_CouleurMauclair</span></strong></p>
              </td>
              <td width="241"
                style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;"><span
                style="font-family: 'Wingdings'; color: #ff0000;"><span
                style="font-size: 14pt">&hArr;</span></span>Cette variable
                permet au paramétreur de préciser si le mauclair doit suivre la
                couleur du <span class="f_Variables">_Dormant</span> ou de
                l'<span class="f_Variables">_Ouvrant</span>. Winpro identifie
                le profil mauclair par la case à cocher "Mauclair" se trouvant
                en partie inférieure du paramétrage profil ouvrant.</p>

                <p style="margin: 0px 0px 0px 14px;"><span
                style="color: #ff0000;">Cette variable est récupérée par Winpro
                lors du pré-calcul, ne cochez pas toutes les cases de l'encadré
                "Options de calcul" se trouvant dans l'onglet </span><span
                style="font-style: italic; color: #ff0000;">Description</span><span
                style="color: #ff0000;">du paramétrage ouvrant.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="241"
              style="width: 241px; border: solid 1px #c0c0c0;"><p
                style="text-align: center; margin: 0px 0px 0px 6px;"><strong><span
                class="f_Variables">_CommandeEnregistree</span></strong></p>
              </td>
              <td width="451"
                style="width: 451px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Cette variable vaut 1 lorsque la commande dés lors que la commande est enregistrée la première fois. 
				Elle vaut zéro pour toute commande ou devis qui n'a jamais été enregistré. 
				Voir la <a href="8_1_1_x.php">note de version 8.1.1.099</a>.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p style="text-align: center;"> </p>

        <p style="text-align: center;"> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
