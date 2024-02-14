<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Frame","Cadre","Omkadering-Frame"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?cadre.php"; }
else { parent.quicksync('a2.5.3'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Cadre</title>
  <meta name="keywords" content="Cadre">
  <meta http-equiv="Content-Type" content="text/php; charset=iso-8859-1">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <link type="text/css" href="default.css" rel="stylesheet">
</head>

<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;"
onload="AddTitleAndLangFlags();highlight();">

<div id="hmpopupDiv"
style="visibility:hidden; position:absolute; z-index:1000;">
</div>

<table width="100%" border="0" cellspacing="0" cellpadding="5"
bgcolor="#FF8000">
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
      <td align="right"><span style="font-size: 9pt"><a
        href="introduction.php">Top</a>  <a href="apply.php">Previous</a>  <a
        href="executer.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>WinPro lets you handle 'frames', that are geometrical shapes,
        derived from the shape of the element being computed.  Usage of these
        frames is limited to printing a list of such element, either on paper
        or on labels.</p>

        <p>This lets you print a list of shapes with dimensions, which can help
        to make secondary elements such as fly screens, roller shutters,
        etc...</p>

        <p>Frames can be grouped in categories. Printing will be grouped in
        categories, with a page break between categories.</p>

        <p>Frames can be created from sashes, frames, or fittings. Their
        original dimensions are those of the element from which they are
        created. You can alter this dimensions by giving expansion or reduction
        parameters, globally or for each individual side of the frame.</p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000; text-decoration: underline;">Syntax:</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"
        style="font-weight: bold;">Frame (description, expansion)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"
        style="font-weight: bold;">Frame (#code, expansion)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"
        style="font-weight: bold;">Frame (description, bottom, top, left,
        right[, topleft, topright])</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"
        style="font-weight: bold;">Frame (#code, bottom, top, left, right[,
        topleft, topright])</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-size: 5pt; color: #000000;"> </span></p>

        <p>In the first case, the frame description is given directly in the
        formula, and the frame has category 0.</p>

        <p> </p>

        <p>In the second case, the sign <span style="color: #0000ff;">#</span>
        tells that the following code is an entry in the frame table, in which
        the category is defined. This also lets you create a translation for
        the frame, and decide how it is to be printed.</p>

        <p> </p>

        <p>In both cases, the second parameter tells how to expand the frame,
        by reference to the element from which it is generated. If the
        parameter is positive, the frame is expanded; if it is negative, it is
        shrunk. This may be a single parameter. In third and fourth syntax, it
        is multiple; you give an expand or shrink value for each individual
        side of the frame (positive expands, negative shrinks). The order of
        parameters is: bottom, top, left, right, top left, top right (the last
        2 parameters are optional).</p>

        <p> </p>

        <p>There is an alternative method for sash and fitting frames:</p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">SashFrame (description, expansion)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">SashFrame (#code, expansion) </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">SashFrame (description, bottom, top, left, right[,
        topleft, topright]) </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">SashFrame (#code, bottom, top, left, right[,
        topleft, topright])</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p class="p_Interligne">This method lets you define frames which are
        derived from the complete sash (even if it has several leaves). The
        reference size is the bottom of the outer frame rebate<span
        style="color: #000000;">.</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Examples:</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Frame
        (Central joint, -10)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">SashFrame (#FLYSCREEN, -70, -65, -65, -65, -65,
        -65)</span></p>

        <p><span style="color: #000000;"> </span></p>
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

        <p>WinPro vous permet de manipuler des 'cadres', c'est à dire des
        formes géométriques correspondant à la forme de l'élément en cours de
        calcul. L'usage de ces cadres est assez restrictif: ils seront
        simplement imprimés, soit sur une liste papier, soit sur une liste
        d'étiquettes.</p>

        <p>Cette notion de cadre permet d'imprimer une liste de dimensions pour
        la fabrication d'éléments secondaires de la fenêtre (p.ex. joint
        central vulcanisé, moustiquaire, tabliers de volets, ...).</p>

        <p>Les cadres peuvent être groupés par catégorie. Chaque catégorie de
        cadre sera imprimée séparément.</p>

        <p>Les cadres peuvent être créés à partir des ouvrants, dormants et
        quincailleries. Leur dimension sera toujours celle de l'élément dans
        lequel ils sont créés, à savoir la dimension de fabrication du dormant,
        la dimension extérieur du vantail si le cadre est créé dans un ouvrant,
        ou la dimension de la quincaillerie du vantail si le cadre est créé
        dans une quincaillerie (selon le paramétrage du système, extérieur
        vantail ou fond de feuillure). Vous pouvez modifier cette dimension par
        réduction ou extension de chaque bord du cadre.</p>

        <p><span style="font-size: 5pt;"> </span></p>

        <p><span style="text-decoration: underline;">Syntaxe:</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-size: 5pt; font-family: 'Courier New'; color: #0000ff;"> </span></p>

        <p style="margin: 0px 0px 0px 13px;"><span class="f_Variables"
        style="font-weight: bold;">Cadre (description,
        agrandissement)</span></p>

        <p style="margin: 0px 0px 0px 13px;"><span class="f_Variables"
        style="font-weight: bold;">Cadre (#code, agrandissement)</span></p>

        <p style="margin: 0px 0px 0px 13px;"><span class="f_Variables"
        style="font-weight: bold;">Cadre (description, bas, haut, gauche,
        droite[, hautgauche, hautdroite])</span></p>

        <p style="margin: 0px 0px 0px 13px;"><span class="f_Variables"
        style="font-weight: bold;">Cadre (#code, bas, haut, gauche, droite[,
        hautgauche, hautdroite])</span></p>

        <p><span class="f_Variables"> </span></p>

        <p>Dans le 1er cas, la description du cadre est donnée directement dans
        la formule, et le cadre est d'office sans catégorie (catégorie = 0).</p>

        <p> </p>

        <p>Dans le 2ème cas, le signe <span style="color: #0000ff;">#</span>
        indique que l'on fait référence à la description d'un cadre se trouvant
        dans la table des cadres, et la catégorie est celle définie dans cette
        table. De plus, le cadre peut être traduit dans ce 2ème cas.</p>

        <p> </p>

        <p>Le 2ème paramètre utilisé dans la formule indique une éventuelle
        expansion du cadre par rapport au cadre de référence. La valeur du
        paramètre peut être négative, ce qui signifie alors que le cadre sera
        plus petit que l'original. Ce paramètre peut être unique: dans ce cas,
        chaque côté du cadre sera agrandi ou rétréci de la même valeur. Il peut
        être multiple: dans ce cas, vous donnerez individuellement la valeur
        d'expansion de chaque côté du cadre, dans l'ordre suivant: bas, haut,
        gauche, droit, haut gauche, haut droite.</p>

        <p> </p>

        <p>Il existe une méthode alternative, utilisable dans le cas de cadres
        d'ouvrant ou de quincaillerie :</p>

        <p style="margin: 0px 0px 0px 13px;"><span
        class="f_Variables">CadreOuvrant (description,
        agrandissement)</span></p>

        <p style="margin: 0px 0px 0px 13px;"><span
        class="f_Variables">CadreOuvrant (#code, agrandissement)</span></p>

        <p style="margin: 0px 0px 0px 13px;"><span
        class="f_Variables">CadreOuvrant (description, bas, haut, gauche,
        droite[, hautgauche, hautdroite])</span></p>

        <p style="margin: 0px 0px 0px 13px;"><span
        class="f_Variables">CadreOuvrant (#code, bas, haut, gauche, droite[,
        hautgauche, hautdroite])</span></p>

        <p>Cette méthode permet de définir des cadres qui sont non pas de la
        taille d'un seul vantail, mais de la taille complète de l'ouvrant. La
        taille de base sera la taille fond de battée dormant.</p>

        <p> </p>

        <p><span style="text-decoration: underline;">Exemples:</span></p>

        <p style="margin: 0px 0px 0px 13px;"><span class="f_Variables">Cadre
        (Joint central, -10)</span></p>

        <p style="margin: 0px 0px 0px 13px;"><span
        class="f_Variables">CadreOuvrant (#MOUSTIQ, -60, -65, -65, -65, -65,
        -65)</span></p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-size: 11pt; font-family: 'Courier New'; color: #0000ff;"> </span></p>

        <p> </p>
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

        <p>WinPro laat u 'frames of omkaderingen' bepalen welke geometrische
        vormen zijn, onstaan uit het element welk op dat moment berekend
        wordt.Gebruik van deze omkaderingen zijn gelimiteerd tot het printen
        van een lijst van zulk element, op papier of op een etiket.</p>

        <p>Dit staat u dan toe een lijst van vormen af te drukken met hun
        afmetingen, welke u kan helpen om secundaire elementen te producren
        zoals er zijn muggenramen, rolluiken, enz.....</p>

        <p>Frames kunnen gegroepeerd worden in categrorieën. Afdrukken zullen
        gegroepeerd worden met een pagina scheiding per categorie.</p>

        <p>Frames kunnen gemaakt worden vanuit een vleugel,kader of beslag. Hun
        originele afmetingen komen voort uit het element van waaruit het frame-
        omkadering berekend wordt.U kan deze afmeting aanpassen door hier
        uitbreidingsparameters of beperkingen an te geven. Dit in het algemeen
        of per zijde van het frame..</p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color: #000000; text-decoration: underline;">Syntax:</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"
        style="font-weight: bold;">Frame (beschrijving, expansion)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"
        style="font-weight: bold;">Frame (#code, expansion)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"
        style="font-weight: bold;">Frame (beschrijving, onder, boven, links,
        rechts[, bovenlinks, bovenrechts])</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables"
        style="font-weight: bold;">Frame (#code,onder, boven, links, rechts[,
        bovenlinks, bovenrechts])</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="font-size: 5pt; color: #000000;"> </span></p>

        <p>In het eerste geval, is de frame beschrijving direct gegeven in de
        formule, en de frame heeft categorie 0.</p>

        <p> </p>

        <p>In het tweede geval, verteld het teken <span
        style="color: #0000ff;">#</span> dat de volgende code welke aangemaakt
        is in de omkadering tabel , in welke de categorie bepaald is. Dit laat
        u ook toe om een vetaling aan te maken van de omkadering code,en hoe
        het dient afgedrukt te worden.</p>

        <p> </p>

        <p>In beide gevallen, verteld de 2de parameter hoe je de frame gaat
        uitbreiden,door referentie van het element vanwaar hij gegenereert
        is.Wannneer de parameter positief is,wordt het frame uitgebreid; indien
        negatief, wordt het ingebonden. Dit kan één enkele parameter zijn.In de
        derde en vierde syntax, zijn het er meerdere, u geeft een expand of
        shrink waarde voor elke afzonderlijke zijde van het frame (positief
        expand,negatief shrinks).De volgorde van de andere parameters is :
        onder,boven,links,rechts,bovenlinks,bovenrechts .(de laatste 2
        parameters zijn optioneel)..</p>

        <p> </p>

        <p>Er is ook een alternatief voor de vleugel en beslag omkaderingen
        (frames):</p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">SashFrame (beschrijving, expansion)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">SashFrame (#code, expansion) </span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">SashFrame (beschrijving, onder, boven, links,
        rechts[, bovenlinks, bovenrechts])</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">SashFrame (#code,onder, boven, links, rechts[,
        bovenlinks, bovenrechts])</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p class="p_Interligne">Deze methode laat u frames definiëren welke
        vanuit de volledige vleugel berekend worden (zelfs bij meerdere
        velugels).De referentiezijde is de onderzijde van de
        buitenkaderaanslag<span style="color: #000000;">.</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Voorbeelden:</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">Frame
        (Middendichting, -10)</span></p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">SashFrame (#Muggenraam, -70, -65, -65, -65, -65,
        -65)</span></p>

        <p><span style="color: #000000;"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
