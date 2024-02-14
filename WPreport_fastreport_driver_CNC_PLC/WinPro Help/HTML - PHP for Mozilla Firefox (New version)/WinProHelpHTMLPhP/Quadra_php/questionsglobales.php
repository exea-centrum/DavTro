<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Gloabl Questions","Questions globales"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?questionsglobales.php"; }
else { parent.quicksync('a4.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Questions globales</title>
  <meta name="keywords" content="Questions globales,_Question">
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
        href="introduction.php">Top</a>  <a href="filtres.php">Previous</a>  <a
        href="questionsglobalesdescription.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">

<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>Global questions feature consists in setting up a set of questions
        specifically for the whole order. Those questions follow the same rule
        as <a href="questions.php">standard questions</a>, and can be used from
        any component formula. You may also create several set of questions
        that will be identified by a unique category field. </p>

        <p>A set of question may then be linked to a customer according your
        own rules: a list of question is assigned to a customer afet computing
        site formula, user and customer formulas. One of these rules will
        affect a value to variablme <span class="f_Variables">_Question</span>,
        corresponding to the <span style="font-weight: bold;">Catégory</span>
        of the question set.</p>

        <p> </p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip3eng.jpg" width="568"
        height="244" border="0" alt="clip3eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Code</span>: Code of each
                question set.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_Variables"> </span></p>
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

        <p>Les questions globales sont des listes de questions que vous
        définissez pour une commande complète. Ces questions suivent les mêmes
        règles que des <a href="questions.php">questions régulières</a>. Elles
        sont accessibles depuis les formules de tous les composants. Vous
        pouvez créer plusieurs listes de questions qui se distingueront par une
        catégorie unique. </p>

        <p>Vous liez ensuite une liste de question par client selon vos propres
        critères : une liste de question est attribuée au client après
        évaluation des formules de site, d'utilisateur et de client. Une de ces
        formules affecteront à la variable <span
        class="f_Variables">_Question</span> la valeur correspondant à la <span
        style="font-weight: bold;">Catégorie</span> de la liste de questions
        globales.</p>

        <p> </p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0314.gif" width="568"
        height="244" border="0" alt="clip0314"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Code</span>: Code unique
                pour chaque liste de questions globales</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_Variables"> </span></p>
      </td>
    </tr>
  </tbody>
</table>

</div>
</body>
</html>
