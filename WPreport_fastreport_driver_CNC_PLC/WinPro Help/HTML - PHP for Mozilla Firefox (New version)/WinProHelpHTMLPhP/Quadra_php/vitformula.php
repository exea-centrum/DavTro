<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Formula","Formule"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?vitformula.php"; }
else { parent.quicksync('a5.8.5.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Formule</title>
  <meta name="keywords"
  content="Width,Height,Surface,SashIndex,Leaf,FillingIndex,SupplierId,Thickness,Clearance[],Top,Bottom,Left,Right,TopLeft,TopRight,Coefficient,Valid,Labour,AirSpace,Shape,Rectangle,Trapezium,RightAngledTriangle,TruncatedCorner,Pentagon,TruncatedTrapezium,TruncatedCorner2,RightAngledTrapezium,SimpleTrapezium,Bow,TruncatedBow,RoundedCorner,Quadrilateral,Triangle,BullsEye,BasketHandle,FullBasketHandle,HalfBasketHandle,TruncatedBasketHandle,BasketHandle5,FullBasketHandle5,HalfBasketHandle5,TruncatedBasketHandle5,FullBow,HalfFullBow,FlatBow,HalfFlatBow">
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
        href="introduction.php">Top</a>  <a href="vitprice2.php">Previous</a> 
        <a href="vitquestions.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>This sub-page contains a single field, in which you can type a
        formula, that can change the glazing's price, or its technical
        limitations. </p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p>You can use the following variables in that formula:</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p><span
                style="font-weight: bold; text-decoration: underline;">Notes:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>The <span
                        style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span>sign
                        tells which variables you can change.</td>
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
                      <td>The <span
                        style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span>sign
                        tells which variables you must create.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#fff7ef"
        border="2"
        style="background-color: #fff7ef; border: solid 3px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="170"
                style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                style="font-weight: bold;">Variable</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Usage</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">PreComp</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p> </p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">1 for precomputation stage, 0 for consumption stage.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">Width</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p> </p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Width of glazing (into
                mm).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">Height</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p> </p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Height of glazing (into
                mm).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">Surface</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p> </p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Surface of glazing (into
                m²).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">SashIndex</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p> </p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Index of containing sash
                frame into the <a href="varouvrantetquincaillerie.php">global
                sash variables</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">Leaf</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p> </p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Index of the leaf containing
                the glazing (1 = leftmost or bottommost leaf of each sash).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">FillingIndex</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p> </p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Index of the filling into the
                <a href="varremplissages.php">global filling variables</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">SupplierId</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p> </p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Supplier id (defined into the
                <a href="foucommlivr.php">supplier dialog</a>). Returns -1 when
                the supplier ID is unknown, or when computation is done by
                WinPro/D.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">Thickness</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p> </p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Thickness of glazing.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">Clearance[]</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p></p>

                <p style="text-align: center;"><span
                style="font-size: 13pt;font-family: 'Wingdings'; color: #ff0000;">&hArr;</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Clearance on each side of the
                glazing. You can change this value in the formula, individually
                for each side. You can use the variables <span
                class="f_Variables">Top, Bottom, Left, Right, TopLeft,
                TopRight</span> as index of this variable. Example: <span
                class="f_Variables">Clearance[Left] := 5 </span>&lt;=&gt;<span
                class="f_Variables">Clearance[3] := 5</span> (left side =
                3).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">Coefficient</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p></p>

                <p style="text-align: center;"><span
                style="font-size: 13pt;font-family: 'Wingdings'; color: #ff0000;">&lArr;</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Price multiplying factor. You
                must create this variable if you need to change the price of
                the glazing.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">Valid</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p></p>

                <p style="text-align: center;"><span
                style="font-size: 13pt;font-family: 'Wingdings'; color: #ff0000;">&lArr;</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">If you create this variable,
                and assigne it the value <span
                class="f_Variables">False()</span>, the glazing will be
                refused.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">Labour</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p></p>

                <p style="text-align: center;"><span
                style="font-size: 13pt;font-family: 'Wingdings'; color: #ff0000;">&lArr;</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">This variable lets you define
                the labour time for the glazing installation. This time applies
                to the fist workplace defined in the price page, without
                consideration of the maximum surface. You must create this
                variable if you need it.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">AirSpace</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p></p>

                <p style="text-align: center;"></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Air width between panes.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">Shape</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p> </p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Glazing shape. This may be
                one of the following values:</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">Rectangle</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">Trapezium</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">RightAngledTriangle</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">TruncatedCorner</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">Pentagon</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">TruncatedTrapezium</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">TruncatedCorner2</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">RightAngledTrapezium</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">SimpleTrapezium</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">Bow</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">FullBow</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">HalfFullBow</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">FlatBow</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">HalfFlatBow</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">TruncatedBow</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">RoundedCorner</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">Quadrilateral</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">Triangle</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">BullsEye</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">BasketHandle</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">FullBasketHandle</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">HalfBasketHandle</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">TruncatedBasketHandle</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">BasketHandle5</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">FullBasketHandle5</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">HalfBasketHandle5</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">TruncatedBasketHandle5</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

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
      <td align="left"><p><span style="font-size: 5pt;"> </span></p>

        <p>Cet onglet contient un champs unique dans lequel vous pouvez définir
        une formule. Celle ci permettra de modifier le prix de vitrage, ou ses
        limites techniques. </p>

        <p>Cette formule est éxécutée lors d'un précalcul et lors de la
        consommation. Les variable "Globales" ou "de configuration" ne sont
        disponibles que lors du calcul pour la consommation.</p>

        <p>La variable "PreCalc" permet de savoir si on est dans le précalcul
        (=1) ou dans le calcul pour consommation(=0).</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p>Les variables suivantes peuvent être utilisées dans cette
        formule:</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p><span
                style="font-weight: bold; text-decoration: underline;">Notes:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
                      <td>Le signe <span
                        style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span>
                        indique une variable modifiable.</td>
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
                      <td>Le signe <span
                        style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span>
                        indique une variable que vous devez créer.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#fff7ef"
        border="2"
        style="background-color: #fff7ef; border: solid 3px #c0c0c0; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="170"
                style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                style="font-weight: bold;">Variable</span></p>
              </td>
              <td width="68" style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-weight: bold;">Usage</span></p>
              </td>
              <td width="558"
                style="width: 558px; border: solid 1px #c0c0c0;"><p><span
                style="font-weight: bold;">Description</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">PreCalc</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p> </p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Précalcul = 1 ou calcul pour consommation = 0</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">Largeur</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p> </p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Largeur du vitrage (en mm)</p>
              </td>
            </tr>

            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">Hauteur</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p> </p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">hauteur du vitrage (en mm)</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">Surface</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p> </p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Surface du vitrage (en m²)</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">NumeroOuvrant</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p> </p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Index de l'ouvrat dans les
                tableaux de <a href="varouvrantetquincaillerie.php">variables
                globales d'ouvrants et quincailleries</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">Position</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p> </p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Index du vantail contenant le
                vitrage (1 = vantail le plus à gauche en bas de chaque
                ouvrant).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">NumeroRemplissage</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p> </p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 14px;">Index du vitrage dans les
                tableaux de <a href="varremplissages.php">variables globales de
                remplissages</a>.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">IdFournisseur</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p> </p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Renvoie la valeur du code
                fournisseur indiquée dans le champ Identification vitrage de la
                <a href="foucommlivr.php">fiche fournisseur</a>. Renvoie -1
                lorsque le fournisseur est inconnu ou si le calcul est effectué
                par WinproD.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">Epaisseur</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p> </p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Epaisseur du vitrage.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">Aisance[]</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&hArr;</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Aisance sur chaque côté du
                vitrage. Vous pouvez modifier cette valeur dans la formule,
                globalement pour tout le vitrage (ex: Aisance := xxx), ou bien
                modifier la valeur individuellement pour chaque bord. Vous
                pouvez utiliser les variables <span class="f_Variables">Bas,
                Haut, Gauche, Droite, HautGauche, HautDroite</span>
                (repectivement numérotées de 1 à 6)<span
                style="font-family: 'Courier New'; color: #0000ff;"></span>
                comme index pour cette variable tableau.  Exemple: <span
                class="f_Variables">Aisance [Gauche] := 5 </span>&lt;=&gt;<span
                class="f_Variables">Aisance [3] := 5 </span>(bord gauche = bord
                3).</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">Coefficient</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Facteur multiplicateur
                appliqué sur le prix. Vous devez créer cette variable si vous
                souhaitez modifier le prix par formule.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">Valide</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Si vous créez cette variable
                et lui assignez la valeur <span
                class="f_Variables">Faux()</span>, le vitrage sera refusé en
                saisie.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">MainDOeuvre</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p
                style="text-align: center;"><span
                style="font-size: 13pt; font-family: 'Wingdings'; color: #ff0000;">&lArr;</span></p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Cette variable permet de
                définir le temps de main d'oeucre pour ce vitrage. Ce temps
                s'appliquera au premier poste de main d'oeuvre définie dans
                l'onglet Prix, sans tenir compte de la surface maximum. Créez
                cette variable si elle est nécessaire.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">Intercalaire</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p> </p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Intercalaire entre les
                feuilles de verre.</p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="middle" width="170"
              style="width: 170px; border: solid 1px #c0c0c0;"><p><span
                class="f_Variables">Forme</span></p>
              </td>
              <td valign="middle" width="68"
              style="width: 68px; border: solid 1px #c0c0c0;"><p> </p>
              </td>
              <td width="367"
                style="width: 367px; border: solid 1px #c0c0c0;"><p
                style="margin: 0px 0px 0px 16px;">Forme du vitrage, parmi ces
                valeurs possibles:</p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">Rectangle</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">Trapeze</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">TriangleRectangle</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">CoinCasse</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">Pentagone</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">TrapezeTronque</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">CoinCasse2</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">TrapezeRectangle</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">SimpleTrapeze</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">Cintre</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">PleinCintre</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">DemiPleinCintre</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">CintrePlat</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">DemiCintrePlat</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">CintreTronque</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">CoinArrondi</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">Quadrilatere</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">Triangle</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">OeilDeBoeuf</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">AnsePanier</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">AnsePanierComplete</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">DemiAnsePanier</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">AnsePanierTronquee</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">AnsePanier5</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">AnsePanier5Complete</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">DemiAnsePanier5</span></p>

                <p style="margin: 0px 0px 0px 40px;"><span
                class="f_Variables">AnsePanier5Tronquee</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
