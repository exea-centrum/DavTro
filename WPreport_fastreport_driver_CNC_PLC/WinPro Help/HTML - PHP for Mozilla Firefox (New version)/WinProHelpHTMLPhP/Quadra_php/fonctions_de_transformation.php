<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Transformation Functions","Fonctions de transformation"," Transformatie functies"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?fonctions_de_transformation.php"; }
else { parent.quicksync('a2.6.18'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Fonctions de transformation</title>
  <meta name="keywords" content="Transformation">
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
        href="rempliretcontourchemin.php">Previous</a>  <a
        href="creertransformation.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>Those functions may be used when you need to reproduce the whole or
        a part of a drawing, applying on it a rotation around a centre, a
        homothety, a central or orthogonal symmetry, or a single vectorial
        transformation. </p>

        <p> </p>

        <p>Here is an example with a handle drawing.</p>

        <p>Basically, the drawing had to be defined 3 times into WinPro : </p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p><span style="font-weight: bold;">HAND HORIZ L</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Drawing code for horizontal handle on left side</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Circle
        (400, 500, 50)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">PenWidth
        (4)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Line
        (400, 500, 100, 500)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p><span style="font-weight: bold;">HAND HORIZ R</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Drawing code for horizontal handle on right side</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Circle
        (400, 500, 50)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">PenWidth
        (4)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Line
        (400, 500, 700, 500)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p><span style="font-weight: bold;">HAND VERT</span> </p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Drawing code for vertical handle</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Circle
        (300, 500, 50)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">PenWidth
        (4)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Line
        (300, 500, 300, 200)</span></p>

        <p style="margin: 0px 0px 0px 48px;"> </p>

        <p>Using the functions, you may now create a basic drawing as a
        reference, then transform it.</p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p><span style="font-weight: bold;">HAND VERT</span> </p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Basic
        drawing code for vertical handle</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Circle
        (TransX (300, 500), TransY (300, 500), 50)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">PenWidth
        (4)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Line</span><span class="f_Variables">(TransX (300,
        500), TransY (300, 500), TransX (300, 200), TransY (300,
        200))</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Et ensuite, pour les
        autres orientations de poignées, nous allons créer les dessins
        suivants:</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p><span style="font-weight: bold;">HAND HORIZ R</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Basic
        drawing code transformed into horizontal right handle</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Test :=
        CreateTransformation (3, 300, 500, 90, 0)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Circle</span><span class="f_Variables">(TransX
        (300, 500), TransY (300, 500), 50)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">PenWidth</span><span
        class="f_Variables">(4)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Line</span><span class="f_Variables">(TransX (300,
        500), TransY (300, 500), TransX (300, 200), TransY (300,
        200))</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Test :=
        DeleteTransformation ()</span></p>

        <p style="margin: 0px 0px 0px 48px;"> </p>

        <p><span style="font-weight: bold;">HAND HORIZ L</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Basic
        drawing code transformed into horizontal left handle</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Test :=
        CreateTransformation (3, 300, 500, 270, 0)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Circle</span><span class="f_Variables">(TransX
        (300, 500), TransY (300, 500), 50)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">PenWidth</span><span
        class="f_Variables">(4)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Line</span><span class="f_Variables">(TransX (300,
        500), TransY (300, 500), TransX (300, 200), TransY (300,
        200))</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Test :=
        DeleteTransformation ()</span></p>

        <p><span class="f_Variables"> </span></p>

        <p>Note that all drawing codes are similar, except for the specific
        transformation applied.</p>

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
      <td align="left"><p> </p>

        <p>Ces fonctions vous permettent de reproduire un dessin, ou une partie
        de dessin par rotation autour d'un centre, par une homothétie, par une
        symétrie orthogonale, par une symétrie centrale, ou tout simplement par
        un vecteur. </p>

        <p> </p>

        <p>Voici un exemple concret: le dessin d'une poignée.</p>

        <p>Jusqu'alors la poignée devait être paramétrée 3x dans Winpro : </p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p><span style="font-weight: bold;">POIG HORIZ G</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Dessin
        de poignée horizontale à gauche</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Cercle
        (400, 500, 50)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">EpaisseurTrait (4)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ligne
        (400, 500, 100, 500)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p><span style="font-weight: bold;">POIG HORIZ D</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Dessin
        de poignée horizontale à droite</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Cercle
        (400, 500, 50)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">EpaisseurTrait (4)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ligne
        (400, 500, 700, 500)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p><span style="font-weight: bold;">POIG VERT</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Dessin
        de poignée verticale</span> </p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Cercle
        (300, 500, 50)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">EpaisseurTrait (4)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ligne
        (300, 500, 300, 200)</span></p>

        <p style="margin: 0px 0px 0px 48px;"> </p>

        <p>Désormais, nous pouvons créer un dessin de base, par exemple la
        poignée verticale.</p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p><span style="font-weight: bold;">POIG VERT</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Dessin
        de base, poignée verticale</span> </p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Cercle
        (TransX (300, 500), TransY (300, 500), 50)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">EpaisseurTrait (4)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ligne
        (TransX (300, 500), TransY (300, 500), TransX (300, 200), TransY (300,
        200))</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Et ensuite, pour les
        autres orientations de poignées, nous allons créer les dessins
        suivants:</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p><span style="font-weight: bold;">POIG HORIZ D</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Dessin
        de base transformé en poignée horizontale à droite</span> </p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Test :=
        CreerTransformation (3, 300, 500, 90, 0)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Cercle
        (TransX (300, 500), TransY (300, 500), 50)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">EpaisseurTrait (4)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ligne
        (TransX (300, 500), TransY (300, 500), TransX (300, 200), TransY (300,
        200))</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Test :=
        SupprimerTransformation ()</span></p>

        <p style="margin: 0px 0px 0px 48px;"> </p>

        <p><span style="font-weight: bold;">POIG HORIZ G</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"># Dessin
        de base transformé en poignée horizontale à gauche</span> </p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Test :=
        CreerTransformation (3, 300, 500, 270, 0)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Cercle
        (TransX (300, 500), TransY (300, 500), 50)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">EpaisseurTrait (4)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Ligne
        (TransX (300, 500), TransY (300, 500), TransX (300, 200), TransY (300,
        200))</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Test :=
        SupprimerTransformation ()</span></p>

        <p><span class="f_Variables"> </span></p>

        <p>En lisant ces formules, vous pouvez vous rendre compte que le dessin
        de base est utilisé tel quel pour les 2 autres dessins, si ce n'est
        l'ajout de transformations spécifiques.</p>
      </td>
    </tr>
  </tbody>
</table>
</div>

<div class="NED">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>Deze functies kunnen gebruikt worden wanneer je een hele tekening of
        een deel hiervan dient te reproduceren,hierop toegepast een rotatie
        rond een center,een homothety, een centrale of orthogonale symmetrie,
        of een enkele vectoriële transformatie. </p>

        <p> </p>

        <p>Hier vindt je een voorbeeld van een raamkruk tekening.</p>

        <p>In het algemeen, moet deze tekening 3 maal gedefinieerd worden in
        Winpro : </p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p><span style="font-weight: bold;">HAND HORIZ L</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Tekening code voor horizontale raamkruk op de linkerzijde</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Circle
        (400, 500, 50)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">PenWidth
        (4)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Line
        (400, 500, 100, 500)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p><span style="font-weight: bold;">HAND HORIZ R</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Tekening code voor horizontale raamkruk op de rechterzijde</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Circle
        (400, 500, 50)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">PenWidth
        (4)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Line
        (400, 500, 700, 500)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p><span style="font-weight: bold;">HAND VERT</span> </p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Tekening code voor vertikale raamkruk</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Circle
        (300, 500, 50)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">PenWidth
        (4)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Line
        (300, 500, 300, 200)</span></p>

        <p style="margin: 0px 0px 0px 48px;"> </p>

        <p>Gebruikmakend van deze functies , kan je nu een standaard tekening
        aanmaken als referentie en deze dan transformeren.</p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p><span style="font-weight: bold;">HAND VERT</span> </p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Standaard tekening code voor vertikale raamkruk</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Circle
        (TransX (300, 500), TransY (300, 500), 50)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">PenWidth
        (4)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Line</span><span class="f_Variables">(TransX (300,
        500), TransY (300, 500), TransX (300, 200), TransY (300,
        200))</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">En vervolgens, voor de
        andere orientaties van de raamkruk, gaan wij de volgende tekeningen
        aanmaken:</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p><span style="font-weight: bold;">HAND HORIZ R</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Standaard tekening code getransformeerd naar een horizontale rechter
        raamkruk</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Test :=
        CreateTransformation (3, 300, 500, 90, 0)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Circle</span><span class="f_Variables">(TransX
        (300, 500), TransY (300, 500), 50)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">PenWidth</span><span
        class="f_Variables">(4)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Line</span><span class="f_Variables">(TransX (300,
        500), TransY (300, 500), TransX (300, 200), TransY (300,
        200))</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Test :=
        DeleteTransformation ()</span></p>

        <p style="margin: 0px 0px 0px 48px;"> </p>

        <p><span style="font-weight: bold;">HAND HORIZ L</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">#
        Standaard tekening code getransformeerd naar een horizontale linker
        raamkruk</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Test :=
        CreateTransformation (3, 300, 500, 270, 0)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Circle</span><span class="f_Variables">(TransX
        (300, 500), TransY (300, 500), 50)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">PenWidth</span><span
        class="f_Variables">(4)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">Line</span><span class="f_Variables">(TransX (300,
        500), TransY (300, 500), TransX (300, 200), TransY (300,
        200))</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Test :=
        DeleteTransformation ()</span></p>

        <p><span class="f_Variables"> </span></p>

        <p>Hier valt op dat alle codes identiek zijn, met uitzondering van de
        specifieke transformatie welke toegepast is.</p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>
