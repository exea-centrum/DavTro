<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED","ESP","POL"];
var WinProHelpPageName=["Operators","Operateurs","Operatoren","Operadores"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?operateurs.php"; }
else { parent.quicksync('a2.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Operateurs</title>
  <meta name="keywords" content="Operateurs">
  <meta http-equiv="Content-Type" content="text/php; charset=iso-8859-1">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <link type="text/css" href="default.css" rel="stylesheet">
</head>

<body
style="margin: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial;"
onload="AddTitleAndLangFlags();highlight();">

<div id="hmpopupDiv"
style="visibility: hidden; position: absolute; z-index: 1000;">
</div>

<table bgcolor="#ff8000" border="0" cellpadding="5" cellspacing="0"
width="100%">
  <tbody>
    <tr valign="middle">
      <td align="left"><p class="p_Heading1"><span class="f_Heading1"
        style="font-size: 6pt; font-weight: normal;"> </span></p>

        <p class="p_Heading1"><span id="titlepage"
        class="f_Heading1"></span></p>
      </td>
      <td align="center">
        <div id="langflags">
        </div>
      </td>
      <td align="right"><span style="font-size: 9pt;"><a
        href="introduction.php">Top</a>  <a href="variables.php">Previous</a> 
        <a href="arithmetic_operators.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table border="0" cellpadding="5" cellspacing="0" width="100%">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"> </span></p>

        <p>WinPro's integrated programming language uses several kinds of
        operators:</p>

        <p> </p>

        <div
        style="margin: 0px 0px 0px 24px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="line-height: normal;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></td>
              <td><span style="color: rgb(0, 0, 0);"><a
                href="arithmetic_operators.php">Arithmetic operators</a> (
                </span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">+</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">-</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">*</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">/</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">**</span><span
                style="color: rgb(0, 0, 255);"></span><span
                style="color: rgb(0, 0, 0);">) </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 24px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="line-height: normal;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></td>
              <td><span style="color: rgb(0, 0, 0);"><a
                href="operateurs_dassignation.php">Assignment operators</a> (
                </span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">:=</span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|
                </span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">+=</span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|
                </span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">-=</span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|
                </span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">*=</span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|
                </span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">/=</span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|
                </span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">**=</span><span
                style="color: rgb(0, 0, 0);">) </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 24px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="line-height: normal;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></td>
              <td><span style="color: rgb(0, 0, 0);"><a
                href="operateurs_logiques.php">Logical
                operators</a></span><span
                style="color: rgb(0, 0, 255);"></span><span
                style="color: rgb(0, 0, 0);">(</span><span
                style="color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">and</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">or</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">excl
                or</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">not</span><span
                style="color: rgb(0, 0, 255);"></span><span
                style="color: rgb(0, 0, 0);">) </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 24px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="line-height: normal;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></td>
              <td><span style="color: rgb(0, 0, 0);"><a
                href="operateurs_de_comparaison.php">Comparison
                operators</a></span><span
                style="color: rgb(0, 0, 255);"></span><span
                style="color: rgb(0, 0, 0);">(</span><span
                style="color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">=</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                style="font-weight: bold; color: rgb(0, 0, 0);">|</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&lt;&gt;</span><span
                style="font-weight: bold; color: rgb(0, 0, 0);">|</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&lt;</span><span
                style="font-weight: bold; color: rgb(0, 0, 0);">|</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&lt;=</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                style="font-weight: bold; color: rgb(0, 0, 0);">|</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&gt;</span><span
                style="font-weight: bold; color: rgb(0, 0, 0);">|</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&gt;=</span><span
                style="color: rgb(0, 0, 0);">) </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 24px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="line-height: normal;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></td>
              <td><span style="color: rgb(0, 0, 0);"><a
                href="parentheses.php">Parenthesis</a></span><span
                style="color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">(
                )</span><span style="color: rgb(0, 0, 0);"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 24px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="line-height: normal;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></td>
              <td><span style="color: rgb(0, 0, 0);"><a
                href="listes.php">Lists</a></span><span
                style="color: rgb(0, 0, 255);"></span><span
                style="color: rgb(0, 0, 0);">(</span><span
                style="color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">in</span><span
                style="color: rgb(0, 0, 0);">|</span><span
                style="color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">not
                in</span><span style="color: rgb(0, 0, 0);">) </span></td>
            </tr>
          </tbody>
        </table>
        </div>
      </td>
    </tr>
  </tbody>
</table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->

<table border="0" cellpadding="5" cellspacing="0" width="100%">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>Le langage intégré de WinPro comporte différents types
        d'opérateurs:</p>

        <p style="margin: 0px 0px 0px 27px;"><span
        style="font-size: 5pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);"> </span></p>

        <div
        style="margin: 0px 0px 0px 27px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="line-height: normal;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></td>
              <td><a href="arithmetic_operators.php">Opérateurs
                arithmétiques</a> ( <span class="f_Variables">+</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                class="f_Variables">-</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                class="f_Variables">*</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                class="f_Variables">/</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                class="f_Variables">**</span><span
                style="color: rgb(0, 0, 255);"></span> )</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 27px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="line-height: normal;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></td>
              <td><a href="operateurs_dassignation.php">Opérateurs
                d'assignation</a> ( <span class="f_Variables">:=</span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|
                </span><span class="f_Variables">+=</span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|
                </span><span class="f_Variables">-=</span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|
                </span><span class="f_Variables">*=</span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|
                </span><span class="f_Variables">/=</span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|
                </span><span class="f_Variables">**=</span> )</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 27px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="line-height: normal;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></td>
              <td><a href="operateurs_logiques.php">Opérateurs
                logiques</a><span style="color: rgb(0, 0, 255);"></span>(<span
                style="color: rgb(0, 0, 255);"></span><span class="f_Variables"
                style="font-weight: bold;">Et</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                class="f_Variables" style="font-weight: bold;">Ou</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                class="f_Variables" style="font-weight: bold;">Ou
                Excl</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                class="f_Variables" style="font-weight: bold;">Non</span><span
                style="color: rgb(0, 0, 255);"></span> )</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 27px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="line-height: normal;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></td>
              <td><a href="operateurs_de_comparaison.php">Opérateurs de
                comparaison</a><span
                style="color: rgb(0, 0, 255);"></span>(<span
                style="color: rgb(0, 0, 255);"></span><span
                class="f_Variables">=</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                style="font-weight: bold;">|</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                class="f_Variables">&lt;&gt;</span><span
                style="font-weight: bold;">|</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                class="f_Variables">&lt;</span><span
                style="font-weight: bold;">|</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                class="f_Variables">&lt;=</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                style="font-weight: bold;">|</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                class="f_Variables">&gt;</span><span
                style="font-weight: bold;">|</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                class="f_Variables">&gt;=</span> )</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 27px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="line-height: normal;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></td>
              <td><a href="parentheses.php">Parenthèses</a><span
                style="color: rgb(0, 0, 255);"></span><span class="f_Variables"
                style="font-weight: bold;">( )</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 27px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="line-height: normal;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></td>
              <td><a href="listes.php">Listes</a><span
                style="color: rgb(0, 0, 255);"></span>(<span
                style="color: rgb(0, 0, 255);"></span><span class="f_Variables"
                style="font-weight: bold;">Dans</span> |<span
                style="color: rgb(0, 0, 255);"></span><span class="f_Variables"
                style="font-weight: bold;">Pas</span><span
                class="f_Variables"></span><span class="f_Variables"
                style="font-weight: bold;">Dans</span> )</td>
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

<div class="NED">
<!-- Placeholder for topic body. -->

<table border="0" cellpadding="5" cellspacing="0" width="100%">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"> </span></p>

        <p>WinPro's programmeertaal gebruikt verschillende type van
        operatoren:</p>

        <p> </p>

        <div
        style="margin: 0px 0px 0px 24px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="line-height: normal;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></td>
              <td><span style="color: rgb(0, 0, 0);"><a
                href="arithmetic_operators.php">Rekenkundige operatoren</a> (
                </span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">+</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">-</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">*</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">/</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">**</span><span
                style="color: rgb(0, 0, 255);"></span><span
                style="color: rgb(0, 0, 0);">) </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 24px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="line-height: normal;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></td>
              <td><span style="color: rgb(0, 0, 0);"><a
                href="operateurs_dassignation.php">Opdracht operatoren</a> (
                </span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">:=</span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|
                </span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">+=</span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|
                </span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">-=</span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|
                </span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">*=</span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|
                </span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">/=</span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|
                </span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">**=</span><span
                style="color: rgb(0, 0, 0);">) </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 24px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="line-height: normal;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></td>
              <td><span style="color: rgb(0, 0, 0);"><a
                href="operateurs_logiques.php">Logische
                operatoren</a></span><span
                style="color: rgb(0, 0, 255);"></span><span
                style="color: rgb(0, 0, 0);">(</span><span
                style="color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">and</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">or</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">excl
                or</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">not</span><span
                style="color: rgb(0, 0, 255);"></span><span
                style="color: rgb(0, 0, 0);">) </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 24px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="line-height: normal;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></td>
              <td><span style="color: rgb(0, 0, 0);"><a
                href="operateurs_de_comparaison.php">Vergelijkings
                operatoren</a></span><span
                style="color: rgb(0, 0, 255);"></span><span
                style="color: rgb(0, 0, 0);">(</span><span
                style="color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">=</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                style="font-weight: bold; color: rgb(0, 0, 0);">|</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&lt;&gt;</span><span
                style="font-weight: bold; color: rgb(0, 0, 0);">|</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&lt;</span><span
                style="font-weight: bold; color: rgb(0, 0, 0);">|</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&lt;=</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                style="font-weight: bold; color: rgb(0, 0, 0);">|</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&gt;</span><span
                style="font-weight: bold; color: rgb(0, 0, 0);">|</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&gt;=</span><span
                style="color: rgb(0, 0, 0);">) </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 24px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="line-height: normal;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></td>
              <td><span style="color: rgb(0, 0, 0);"><a
                href="parentheses.php">Haakjes</a></span><span
                style="color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">(
                )</span><span style="color: rgb(0, 0, 0);"></span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 24px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="line-height: normal;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></td>
              <td><span style="color: rgb(0, 0, 0);"><a
                href="listes.php">Lijsten</a></span><span
                style="color: rgb(0, 0, 255);"></span><span
                style="color: rgb(0, 0, 0);">(</span><span
                style="color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">in</span><span
                style="color: rgb(0, 0, 0);">|</span><span
                style="color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">not
                in</span><span style="color: rgb(0, 0, 0);">) </span></td>
            </tr>
          </tbody>
        </table>
        </div>
      </td>
    </tr>
  </tbody>
</table>
</div>

<div class="ESP">
<!-- Placeholder for topic body. -->

<table border="0" cellpadding="5" cellspacing="0" width="100%">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: rgb(0, 0, 0);"> </span></p>

        <p><span style="color: rgb(0, 0, 0);">El lenguaje de programación
        integrado de WinPro utiliza varias clases de operadores:</span></p>

        <p style="margin: 0px 0px 0px 27px;"><span
        style="font-size: 5pt; font-family: 'Arial Unicode MS'; color: rgb(0, 0, 255);"> </span></p>

        <div
        style="margin: 0px 0px 0px 27px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="border: medium none ;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr style="text-align: left; vertical-align: top;">
              <td style="width: 13px;" valign="top" width="13"><p><span
                style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></p>
              </td>
              <td valign="top"><p><span style="color: rgb(0, 0, 0);"><a
                href="arithmetic_operators.php">Operadores aritméticos </a>(
                </span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">+</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">-</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">*</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">/</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">**</span><span
                style="color: rgb(0, 0, 255);"></span><span
                style="color: rgb(0, 0, 0);">)</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 27px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="border: medium none ;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr style="text-align: left; vertical-align: top;">
              <td style="width: 13px;" valign="top" width="13"><p><span
                style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></p>
              </td>
              <td valign="top"><p><span style="color: rgb(0, 0, 0);"><a
                href="operateurs_dassignation.php">Operadores de asignación
                </a>( </span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">:=</span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|
                </span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">+=</span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|
                </span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">-=</span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|
                </span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">*=</span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|
                </span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">/=</span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|
                </span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">**=</span><span
                style="color: rgb(0, 0, 0);">)</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 27px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="border: medium none ;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr style="text-align: left; vertical-align: top;">
              <td style="width: 13px;" valign="top" width="13"><p><span
                style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></p>
              </td>
              <td valign="top"><p><span style="color: rgb(0, 0, 0);"><a
                href="operateurs_logiques.php">Operadores lógicos
                </a>(</span><span style="color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">and</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">or</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">excl
                or</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">not</span><span
                style="color: rgb(0, 0, 255);"></span><span
                style="color: rgb(0, 0, 0);">)</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 27px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="border: medium none ;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr style="text-align: left; vertical-align: top;">
              <td style="width: 13px;" valign="top" width="13"><p><span
                style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></p>
              </td>
              <td valign="top"><p><span style="color: rgb(0, 0, 0);"><a
                href="operateurs_de_comparaison.php">Operadores de
                comparación</a> (</span><span
                style="color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">=</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                style="font-weight: bold; color: rgb(0, 0, 0);">|</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&lt;&gt;</span><span
                style="font-weight: bold; color: rgb(0, 0, 0);">|</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&lt;</span><span
                style="font-weight: bold; color: rgb(0, 0, 0);">|</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&lt;=</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                style="font-weight: bold; color: rgb(0, 0, 0);">|</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&gt;</span><span
                style="font-weight: bold; color: rgb(0, 0, 0);">|</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">&gt;=</span><span
                style="color: rgb(0, 0, 0);">)</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 27px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="border: medium none ;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr style="text-align: left; vertical-align: top;">
              <td style="width: 13px;" valign="top" width="13"><p><span
                style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></p>
              </td>
              <td valign="top"><p><span style="color: rgb(0, 0, 0);"><a
                href="parentheses.php">Paréntesis </a>( )</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 27px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="border: medium none ;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr style="text-align: left; vertical-align: top;">
              <td style="width: 13px;" valign="top" width="13"><p><span
                style="font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></p>
              </td>
              <td valign="top"><p><span style="color: rgb(0, 0, 0);"><a
                href="listes.php">Listas</a></span><span
                style="color: rgb(0, 0, 255);"></span><span
                style="color: rgb(0, 0, 0);">(</span><span
                style="color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">in</span><span
                style="color: rgb(0, 0, 0);">|</span><span
                style="color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 255);">not
                in</span><span style="color: rgb(0, 0, 0);">)</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
      </td>
    </tr>
  </tbody>
</table>
</div>

<div class="POL">
<!-- Placeholder for topic body. -->

<table border="0" cellpadding="5" cellspacing="0" width="100%">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>Zintegrowany j&#x119;zyk programowania WinPro wykorzystuje kilka
        rodzajów operatorów:</p>

        <p></p>

        <p style="margin: 0px 0px 0px 27px;"><span
        style="font-size: 5pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 255);"> </span></p>

        <div
        style="margin: 0px 0px 0px 27px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="line-height: normal;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></td>
              <td><a href="arithmetic_operators.php">Operatory arytmetyczne</a>
                ( <span class="f_Variables">+</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                class="f_Variables">-</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                class="f_Variables">*</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                class="f_Variables">/</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                class="f_Variables">**</span><span
                style="color: rgb(0, 0, 255);"></span> )</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 27px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="line-height: normal;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></td>
              <td><a href="operateurs_dassignation.php">Operatory zadaniowe</a>
                ( <span class="f_Variables">:=</span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|
                </span><span class="f_Variables">+=</span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|
                </span><span class="f_Variables">-=</span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|
                </span><span class="f_Variables">*=</span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|
                </span><span class="f_Variables">/=</span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|
                </span><span class="f_Variables">**=</span> )</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 27px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="line-height: normal;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></td>
              <td><a href="operateurs_logiques.php">Operatory logiczne</a><span
                style="color: rgb(0, 0, 255);">(<span
                style="color: rgb(0, 0, 255);"></span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">and</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">or</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">excl
                or</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; color: rgb(0, 0, 0);">|</span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 0);"></span><span
                style="font-family: 'Courier New'; font-weight: bold; color: rgb(0, 0, 255);">not</span><span
                style="color: rgb(0, 0, 255);"></span>) </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 27px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="line-height: normal;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></td>
              <td><a href="operateurs_de_comparaison.php">Operatory
                porównawcze</a>(<span
                style="color: rgb(0, 0, 255);"></span><span
                class="f_Variables">=</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                style="font-weight: bold;">|</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                class="f_Variables">&lt;&gt;</span><span
                style="font-weight: bold;">|</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                class="f_Variables">&lt;</span><span
                style="font-weight: bold;">|</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                class="f_Variables">&lt;=</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                style="font-weight: bold;">|</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                class="f_Variables">&gt;</span><span
                style="font-weight: bold;">|</span><span
                style="font-weight: bold; color: rgb(0, 0, 255);"></span><span
                class="f_Variables">&gt;=</span> )</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 27px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="line-height: normal;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></td>
              <td><a href="parentheses.php">Nawiasy</a><span
                style="color: rgb(0, 0, 255);"></span><span class="f_Variables"
                style="font-weight: bold;">( )</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="margin: 0px 0px 0px 27px; padding: 0px; text-align: left; text-indent: 0px;">

        <table style="line-height: normal;" border="0" cellpadding="0"
        cellspacing="0">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS','Lucida Sans Unicode','Arial'; color: rgb(0, 0, 0);">&bull;</span></td>
              <td><a href="listes.php">Wykazy</a>(<span
                style="color: rgb(0, 0, 255);"></span><span class="f_Variables"
                style="font-weight: bold;">w</span> |<span
                style="color: rgb(0, 0, 255);"></span><span class="f_Variables"
                style="font-weight: bold;">nie w</span> )</td>
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
