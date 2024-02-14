<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["FRA","NED"];
var WinProHelpPageName=["7.2.2x","7.2.2x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?rn722x.php"; }
else { parent.quicksync('a11.4.7'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>7.2.2x</title>
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
        href="introduction.php">Top</a>  <a href="rn723x.php">Previous</a>  <a
        href="rn721x.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="FRA">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p
        style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                7.2.29</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">27/08/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle
        fonction graphique:</span><span class="f_Textestd">La fonction
        Inclinaison (x1,y1,x2,y2) renvoie l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">angle formé
        par une droite passant par 2 points et une droite représentant
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">horizon.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelles
        instructions de dessin avec notion de continuité:</span></p>

        <p class="p_Textestd"><span class="f_Textestd">De nouvelles
        instructions vous permettent de créer des formes libres et de les
        remplir d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">une brosse. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ces formes libres sont
        constituées d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">un ensemble d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">instructions
        de dessin qui les relient les unes aux autres par leurs points
        extrêmes. </span></p>

        <p class="p_Textestd">       <span class="f_Variables">Arc
        (</span><span class="f_Textestd">cx</span><span
        class="f_Variables">,</span><span class="f_Textestd">cy</span><span
        class="f_Variables">,</span><span class="f_Textestd">rayon</span><span
        class="f_Variables">,</span><span class="f_Textestd">a1</span><span
        class="f_Variables">,</span><span class="f_Textestd">a2</span><span
        class="f_Variables">,</span><span class="f_Textestd">b1</span><span
        class="f_Variables">,</span><span class="f_Textestd">b2</span><span
        class="f_Variables">)</span><span class="f_Textestd"> : Trace un cercle
        dont le point départ correspond au point d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">arrivée de
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">instruction précédente.</span></p>

        <p class="p_Textestd">       <span class="f_Variables">Arc2
        (</span><span class="f_Textestd">x0</span><span
        class="f_Variables">,</span><span class="f_Textestd">y0</span><span
        class="f_Variables">,</span><span class="f_Textestd">x1</span><span
        class="f_Variables">,</span><span class="f_Textestd">y1</span><span
        class="f_Variables">,</span><span class="f_Textestd">a1</span><span
        class="f_Variables">,</span><span class="f_Textestd">a2</span><span
        class="f_Variables">, </span><span class="f_Textestd">b1 </span><span
        class="f_Variables">,</span><span class="f_Textestd">b2</span><span
        class="f_Variables">)</span><span class="f_Textestd"> : Trace un arc de
        cercle dont le point départ correspond au point d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">arrivée de
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">instruction précédente.</span></p>

        <p class="p_Textestd">       <span class="f_Variables">Bezier
        (</span><span class="f_Textestd">x1</span><span
        class="f_Variables">,</span><span class="f_Textestd">y1</span><span
        class="f_Variables">,</span><span class="f_Textestd">x2</span><span
        class="f_Variables">,</span><span class="f_Textestd">y2</span><span
        class="f_Variables">, </span><span class="f_Textestd">x3</span><span
        class="f_Variables">,</span><span class="f_Textestd">y3) : Trace un
        Bézier dont le point départ correspond au point d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">arrivée de
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">instruction précédente.</span></p>

        <p class="p_Textestd">       <span class="f_Variables">Ligne
        (</span><span class="f_Textestd">x1</span><span
        class="f_Variables">,</span><span class="f_Textestd">y1</span><span
        class="f_Variables">)</span><span class="f_Textestd"> : Trace une ligne
        dont le point départ correspond au point d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">arrivée de
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">instruction précédente.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd">       <span class="f_Variables">DebutChemin
        ()</span><span class="f_Textestd"> : Annonce le début d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">une nouvelle
        forme composée de plusieurs fonctions assurant la continuité.</span></p>

        <p class="p_Textestd">       <span class="f_Variables">FinChemin
        ()</span><span class="f_Textestd"> : Clôture la forme.</span></p>

        <p class="p_Textestd">       <span class="f_Variables">ContourChemin
        ()</span><span class="f_Textestd"> : Cette instruction ferme la forme
        et la dessine d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">un trait.</span></p>

        <p class="p_Textestd">       <span class="f_Variables">RemplirChemin
        ()</span><span class="f_Textestd"> : Rempli d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">une brosse la
        forme créée.</span></p>

        <p class="p_Textestd">       <span
        class="f_Variables">RemplirEtContourChemin ()</span><span
        class="f_Textestd"> : Cette instruction combine les propriétés des
        instructions </span><span class="f_Variables">RemplirChemin
        ()</span><span class="f_Textestd">et </span><span
        class="f_Variables">ContourChemin ()</span><span
        class="f_Textestd">.</span></p>

        <p style="text-indent: 45px;"> </p>

        <p class="p_Heading1"><span class="f_TitreReleaseNote">Découpage
        d&rsquo;arcs:</span> Ces fonctions vous permettent de calculer le
        découpage d'arc(s) de cercle en trapèzes.</p>

        <p class="p_Heading1">Le découpage s'effectue en plusieurs étapes:</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-weight: bold; text-decoration: underline;">Première étape :
        Initialisation</span></p>

        <p style="margin: 0px 0px 0px 24px;">Avant de calculer un découpage
        d'arc, il est nécessaire d'initialiser le moteur de calcul en précisant
        certaines options</p>

        <p style="margin: 0px 0px 0px 24px;">qui lui sont indispensables.</p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">DecArcInit ()</span> : Cette fonction reinitialise
        l'état. Cette fonction est indispensable et renvoie toujours <span
        class="f_Variables">1</span>.</p>

        <p style="margin: 0px 0px 0px 24px;">Syntaxe: <span
        class="f_Variables">a := DecArcInit ()</span></p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">DecArcInitSurCotes </span>: Cette fonction
        facultative permet de définir les surcotes représentées sur le dessin
        pour les trapèzes qui seront</p>

        <p style="margin: 0px 0px 0px 24px;">calculés. Les surcotes a et c
        pourraient correspondre à une perte due à la méthode d'assemblage.</p>

        <p style="margin: 0px 0px 0px 24px;">Cette fonction renvoie toujours
        <span class="f_Variables">1</span>.</p>

        <p style="margin: 0px 0px 0px 24px;">Syntaxe: <span
        class="f_Variables">a := DecArcInitSurCotes ( </span>valeur a<span
        class="f_Variables">, </span>valeur b<span class="f_Variables">,
        </span>valeur c<span class="f_Variables">, </span>valeur d<span
        class="f_Variables">)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/img_1.jpg" width="505"
        height="189" border="0" vspace="1" hspace="1" alt="img_1"></p>

        <p style="margin: 0px 0px 0px 24px;">Remarque:</p>

        <p style="margin: 0px 0px 0px 24px;">Nous devons considérer le sens
        horlogique, donc :</p>

        <p style="margin: 0px 0px 0px 24px;">&bull; La cote a correspond au
        début</p>

        <p style="margin: 0px 0px 0px 24px;">&bull; La cote b correspond à
        l'extérieur</p>

        <p style="margin: 0px 0px 0px 24px;">&bull; La cote c correspond à la
        fin</p>

        <p style="margin: 0px 0px 0px 24px;">&bull; La cote d correspond à
        l'intérieur</p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">DecArcInitSectionStd </span>: Cette fonction
        facultative permet de définir les différentes sections que Winpro devra
        utiliser pour les trapèzes calculés.</p>

        <p style="margin: 0px 0px 0px 24px;">Jusqu'à 10 sections peuvent être
        ainsi prédéfinies, par ordre croissant. Si vous en définissez moins de
        10, les x dernières valeurs doivent impérativement être renseignées à
        0.</p>

        <p style="margin: 0px 0px 0px 24px;">Si toutes les valeurs sont à 0,
        Winpro calculera la section de chaque trapèze automatiquement.</p>

        <p style="margin: 0px 0px 0px 24px;">Cette fonction renvoie toujours
        <span class="f_Variables">1</span>.</p>

        <p style="margin: 0px 0px 0px 24px;">Syntaxe: <span
        class="f_Variables">a := DecArcInitSectionStd (</span>Section1<span
        class="f_Variables">, </span>Section2<span class="f_Variables">,
        </span>Section3<span class="f_Variables">, </span>Section4<span
        class="f_Variables">, </span>Section5<span class="f_Variables">,
        </span>Section6<span class="f_Variables">, </span>Section7<span
        class="f_Variables">, </span>Section8<span class="f_Variables">,
        </span>Section9<span class="f_Variables">, </span>Section10<span
        class="f_Variables">)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/img_2.jpg" width="348"
        height="136" border="0" vspace="1" hspace="1" alt="img_2"></p>

        <p style="margin: 0px 0px 0px 24px;">Remarque: Sachez cependant que
        quelque soit la méthode de calcul, les trapèzes générés auront toujours
        une section équivalente.</p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">DecArcInitLongMin</span> : Cette fonction
        facultative permet de définir la longueur minimale pour les trapèzes
        qui seront calculés.</p>

        <p style="margin: 0px 0px 0px 24px;">La valeur de cette longueur
        minimale doit inclure les éventuelles corrections définies par la
        fonction <span class="f_Variables">DecArcInitSurCotes</span></p>

        <p style="margin: 0px 0px 0px 24px;">Cette fonction renvoie toujours
        <span class="f_Variables">1</span>.</p>

        <p style="margin: 0px 0px 0px 24px;">Syntaxe: <span
        class="f_Variables">a := DecArcInitLongMin (</span>valeur<span
        class="f_Variables">)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/img_3.jpg" width="352"
        height="151" border="0" vspace="1" hspace="1" alt="img_3"></p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">DecArcInitPenalite </span>: Cette fonction
        facultative va influencer Winpro au niveau de la quantité de trapèzes
        qu'il doit générer. Dans un premier temps une valeur égale à 5000 est
        conseillée, adaptez-la ensuite en fonction de vos besoins.</p>

        <p style="margin: 0px 0px 0px 24px;">Au plus la valeur est grande, au
        moins il y aura de découpe dans l'arc.</p>

        <p style="margin: 0px 0px 0px 24px;">Cette fonction renvoie toujours
        <span class="f_Variables">1</span>.</p>

        <p style="margin: 0px 0px 0px 24px;">Syntaxe: <span
        class="f_Variables">a := DecArcInitPenalite (5000)</span></p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-weight: bold; text-decoration: underline;">Seconde étape :
        Définition des arcs</span></p>

        <p style="margin: 0px 0px 0px 24px;">Il est nécessaire de définir le ou
        les arcs qui composent le cintre.</p>

        <p style="margin: 0px 0px 0px 24px;">Par définition, nous avons un arc
        par rayon de courbure.</p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/img_4.jpg" width="603"
        height="282" border="0" vspace="1" hspace="1" alt="img_4"></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">DecArcDefinirArc </span>: Cette fonction
        indispensable précise à Winpro la nature de l'arc.</p>

        <p style="margin: 0px 0px 0px 24px;">Cette fonction renvoie toujours
        <span class="f_Variables">1</span>.</p>

        <p style="margin: 0px 0px 0px 24px;">Syntaxe: <span
        class="f_Variables">a := DecArcDefinirArc (</span>x0<span
        class="f_Variables">, </span>y0<span class="f_Variables">,
        </span>x1<span class="f_Variables">, </span>y1<span
        class="f_Variables">, </span>centrex<span class="f_Variables">,
        </span>centrey<span class="f_Variables">, </span>rayon<span
        class="f_Variables">, </span>EpProfil<span class="f_Variables">,
        </span>0<span class="f_Variables">)</span></p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 24px;">Remarques:</p>

        <p style="margin: 0px 0px 0px 24px;">&bull; La position d'angleBD et
        d'angleBF dépend du dernier paramètre qui peut prendre comme valeur 0
        ou1.</p>

        <p style="margin: 0px 0px 0px 24px;">&bull; Le dernier paramètre doit
        toujours être à 0 pour confirmer le sens horlogique. Le sens
        anti-horlogique ne peut actuellement pas être utilisé.</p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">DecArcDefinirDebut </span>: Cette fonction
        facultative précise à Winpro l'angle correspondant au début de l'arc.
        </p>

        <p style="margin: 0px 0px 0px 24px;">Cette fonction renvoie toujours
        <span class="f_Variables">1</span>.</p>

        <p style="margin: 0px 0px 0px 24px;">Syntaxe: <span
        class="f_Variables">a := DecArcDefinirDebut (</span>angleBD<span
        class="f_Variables">, </span>180 - angleBD<span class="f_Variables">,
        </span>0<span class="f_Variables">, </span>0<span class="f_Variables">,
        </span>0<span class="f_Variables">)</span></p>

        <p style="margin: 0px 0px 0px 24px;">Remarque: Les 3 derniers
        paramètres doivent valoir <span class="f_Variables">0</span>.</p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">DecArcDefinirFin</span> : Cette fonction
        facultative précise à Winpro l'angle correspondant à la fin de
        l'arc.</p>

        <p style="margin: 0px 0px 0px 24px;">Cette fonction renvoie toujours
        <span class="f_Variables">1</span>.</p>

        <p style="margin: 0px 0px 0px 24px;">Syntaxe: <span
        class="f_Variables">a := DecArcDefinirFin (</span>angleBF<span
        class="f_Variables">, </span>180 - angleBF<span class="f_Variables">,
        </span>0<span class="f_Variables">, </span>0<span class="f_Variables">,
        </span>0<span class="f_Variables">)</span></p>

        <p style="margin: 0px 0px 0px 24px;">Remarque : Les 3 derniers
        paramètres doivent valoir <span class="f_Variables">0</span>.</p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">DecArcAjouterArc</span> : Cette fonction
        indispensable stocke dans un tableau les propriétés de l'arc venant
        d'être défini. </p>

        <p style="margin: 0px 0px 0px 24px;">Cette fonction renvoie <span
        class="f_Variables">-1</span> en cas d'erreur, et renvoie le nombre
        d'arcs déjà enregistrés dans le tableau dans le cas contraire.</p>

        <p style="margin: 0px 0px 0px 24px;">Syntaxe: <span
        class="f_Variables">a := DecArcAjouterArc ()</span></p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">DecArcNbArcs</span> : Cette fonction renvoie la
        quantité d'arcs déjà définis dans un tableau.</p>

        <p style="margin: 0px 0px 0px 24px;">Elle peut donc être utilisée à
        tout moment dans la procédure du découpage d'arc.</p>

        <p style="margin: 0px 0px 0px 24px;">Syntaxe: <span
        class="f_Variables">a := DecArcNbArcs ()</span></p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-weight: bold; text-decoration: underline;">Troisième étape
        : Quantifier le découpage</span></p>

        <p style="margin: 0px 0px 0px 24px;">Le découpage va être calculé en 2
        phases dont la première est facultative.</p>

        <p style="margin: 0px 0px 0px 24px;">Le résultat dépendra des critères
        d'initialisation et des propriétés des arcs de cercle définis.</p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">DecArcEstimer</span> : Cette fonction facultative
        renvoie:</p>

        <p style="margin: 0px 0px 0px 24px;">La quantité idéale de trapèzes
        qu'il est nécessaire de produire pour réaliser le cintre, ou l'anse.</p>

        <p style="margin: 0px 0px 0px 24px;">La valeur <span
        class="f_Variables">-10</span> s'il y a un problème au niveau de
        l'initialisation.</p>

        <p style="margin: 0px 0px 0px 24px;">La valeur <span
        class="f_Variables">-5</span> s'il y a un problème au niveau du
        précalcul (du a des valeurs absurdes ou absentes).</p>

        <p style="margin: 0px 0px 0px 24px;">La valeur<span
        class="f_Variables">-1</span> si les contraintes imposées dans
        l'initialisation empêche Winpro de trouver une solution (aucune
        SectionStd suffisamment importante, impossible de trouver une
        combinaison de segments  suffisamment grands pour la limite spécifiées,
        ...)</p>

        <p style="margin: 0px 0px 0px 24px;">Syntaxe: <span
        class="f_Variables">a := DecArcEstimer ()</span></p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">DecArcDecider</span> : Cette fonction stocke le
        nombre de trapèzes demandés pour réaliser le découpage.</p>

        <p style="margin: 0px 0px 0px 24px;">Elle renvoie <span
        class="f_Variables">1</span> si la quantité demandée est acceptée,
        sinon elle renvoie<span class="f_Variables">-1</span></p>

        <p style="margin: 0px 0px 0px 24px;">Syntaxe: <span
        class="f_Variables">a := DecArcDecider (</span>valeur<span
        class="f_Variables">)</span></p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-weight: bold; text-decoration: underline;">Quatrième étape
        : Générer &amp; consulter le découpage</span></p>

        <p style="margin: 0px 0px 0px 24px;">Le découpage est généré dés que
        l&rsquo;on utilise l&rsquo;instruction <span
        class="f_Variables">DecArcInfoTrapeze</span>.</p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Générer &amp; vérifier le
        découpage</span></p>

        <p style="margin: 0px 0px 0px 24px;">Le découpage est généré après
        avoir exécuter la fonction ci-dessous avec les paramètres à -1.</p>

        <p style="margin: 0px 0px 0px 24px;">La fonction renvoie :</p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">-10</span> en cas d'erreur dans la procédure
        d'initialisation</p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">-1</span> en cas d'erreur indéfinie</p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">1</span>
        en cas de bon fonctionnement.</p>

        <p style="margin: 0px 0px 0px 24px;">Syntaxe: <span
        class="f_Variables">a := DecArcInfoTrapeze (-1, -1, -1)</span></p>

        <p style="margin: 0px 0px 0px 24px;">Remarque: Cette étape est
        facultative et sera principalement utilisée pour détecter une
        erreur.</p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Consulter les résultats du
        découpage</span></p>

        <p style="margin: 0px 0px 0px 24px;">La consultation du découpage est
        alors disponible à l'aide de la même fonction.</p>

        <p style="margin: 0px 0px 0px 24px;">La fonction renvoie <span
        class="f_Variables">-1</span> ou <span class="f_Variables">-10</span>
        en cas d'erreur, sinon elle renvoie la valeur demandée correspondant au
        3e paramètre de la fonction.</p>

        <p style="margin: 0px 0px 0px 24px;">Syntaxe: <span
        class="f_Variables">a := DecArcInfoTrapeze (0, </span>n° du
        trapeze<span class="f_Variables">, </span>TypeInfo<span
        class="f_Variables">)</span></p>

        <p style="margin: 0px 0px 0px 24px;">TypeInfo peut prendre l'une de ces
        valeurs:</p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">1</span>
        = Longueur du coté bas</p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">2</span>
        = Longueur du côté haut</p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">3</span>
        = Angle gauche</p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">4</span>
        = Angle droite</p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">5</span>
        = Angle haut gauche</p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">6</span>
        = Angle haut droite</p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">7</span>
        = Décalage de la pointe gauche (à partir du haut) - Renvoie toujours 0
        en ce moment, fonctionnalité non développée à ce jour.</p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">8</span>
        = Décalage de la pointe droite (à partir du haut) - Renvoie toujours 0
        en ce moment, fonctionnalité non développée à ce jour.</p>

        <p style="margin: 0px 0px 0px 48px;"><span class="f_Variables">9</span>
        = Longueur totale</p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">10</span> = Section</p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">11</span> = Vaut 1 si Avec pointe gauche, sinon
        renvoie 0 - Renvoie toujours 0 en ce moment, fonctionnalité non
        développée à ce jour.</p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">12</span> = Vaut 1 si Avec pointe droite, sinon
        renvoie 0 - Renvoie toujours 0 en ce moment, fonctionnalité non
        développée à ce jour.</p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">13</span> = Position en x du point haut gauche</p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">14</span> = Position en y du point haut gauche</p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">15</span> = Position en x du point haut droite</p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">16</span> = Position en y du point haut droite</p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">17</span> = Position en x de la pointe droite -
        Renvoie toujours 0 en ce moment, fonctionnalité non développée à ce
        jour.</p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">18</span> = Position en y de la pointe droite -
        Renvoie toujours 0 en ce moment, fonctionnalité non développée à ce
        jour.</p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">19</span> = Position en x du point bas droite</p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">20</span> = Position en y du point bas droite</p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">21</span> = Position en x du point bas gauche</p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">22</span> = Position en y du point bas gauche</p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">23</span> = Position en x de la pointe gauche -
        Renvoie toujours 0 en ce moment, fonctionnalité non développée à ce
        jour.</p>

        <p style="margin: 0px 0px 0px 48px;"><span
        class="f_Variables">24</span> = Position en y de la pointe gauche -
        Renvoie toujours 0 en ce moment, fonctionnalité non développée à ce
        jour.</p>

        <p> </p>

        <p> </p>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                7.2.27</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">07/08/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">Liste des châssis
        optimisés:</span><span
        style="font-weight: bold; color: #000000;"></span><span
        style="color: #000000;">Le numero de lot Winpro est maintenant indiqué
        sur l&rsquo;entête de ce document.</span></p>

        <p style="margin: 0px 0px 0px 5px;"><span
        style="color: #000000;"> </span></p>

        <p style="margin: 0px 0px 0px 5px;"><span
        style="color: #000000;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                7.2.26</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">24/07/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p><span class="f_TitreReleaseNote">Ecran atelier:</span> Une nouvelle
        variable globale <span class="f_Variables">_CategPosteAtelier</span>
        est initialisée par le contenu du poste atelier éxécutant Winpro.
        Autrement dit le paramétreur peut désormais prévoir des paramétrages
        spécifiques à l&rsquo;un ou l&rsquo;autre poste de travail.</p>

        <p>Exemple : Faire apparaître un dessin ne concernant qu&rsquo;un poste
        atelier. </p>

        <p> </p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                7.2.25</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">17/07/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">JeuMauclair:</span> 6 nouvelles
        variables globales s&rsquo;ajoutent à la liste des ouvrants :</p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_OuvrantJeuMauclair1 [NumeroOuvrant]</span>
        correspondant à la variable locale à l&rsquo;ouvrant : <span
        class="f_Variables">JeuMauclair1</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_OuvrantJeuMauclair2 [NumeroOuvrant]</span>
        correspondant à la variable locale à l&rsquo;ouvrant : <span
        class="f_Variables">JeuMauclair2</span></p>

        <p style="margin: 0px 0px 0px 24px;">&hellip;</p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_OuvrantJeuMauclair6 [NumeroOuvrant]</span>
        correspondant à la variable locale à l&rsquo;ouvrant : <span
        class="f_Variables">JeuMauclair6</span></p>

        <p> </p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Temps de traitement:</span> Winpro
        a subi quelques modifications améliorant sensiblement ses performances
        dans des cas bien précis:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Lors du passage d'un repère à l'autre dans une commande
                client.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>En cas de changement du système dans une commande client</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                7.2.24</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">06/07/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Valorisation des
        volets:</span><span class="f_Textestd">Un champ « Prix imposé »
        apparaît dans l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">onglet volet à la condition que le prix du châssis
        soit également imposé.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p><span class="f_TitreReleaseNote">Limiter RAL:</span> Ce qui suit ne
        concerne que les systèmes dont la case à cocher « Limiter le choix des
        couleurs  Ral » est activée. Par défaut, en ayant saisi une menuiserie
        en teinte Ral, Winpro passera dans l&rsquo;onglet de la barre de chaque
        profil afin d&rsquo;y consommer l&rsquo;article dont la couleur
        correspond à celle saisie par l&rsquo;utilisateur. Dans le cas où il ne
        trouve pas de correspondance de couleur, il consommera alors
        l&rsquo;article adéquat mentionné dans l&rsquo;onglet description du
        profil.</p>

        <p>En ajoutant une nouvelle clé dans le fichier Winpro.ini et en lui
        assignant la valeur 1, Winpro consommera directement l&rsquo;article
        adéquat spécifié dans l&rsquo;onglet description du profil, en cas de
        saisie Ral.</p>

        <p><span style="font-weight: bold; color: #666699;">[System]</span></p>

        <p><span style="font-weight: bold; color: #666699;">Limiter RAL      
         = 0</span>        valeur par défaut </p>

        <p>               <span style="font-weight: bold; color: #666699;">=
        1</span>        empêche Winpro de consommer l&rsquo;article depuis
        l&rsquo;onglet de longueur de barre des profils en cas de saisie en
        teinte Ral ET que le système limite le choix des couleurs Ral.</p>

        <p> </p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                7.2.20</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">23/06/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Export DXF
        vitrage (module DXFV):</span><span class="f_Textestd">Lors de
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">impression des commandes de vitrages, Winpro exporte
        le dessin de t</span>ous les vitrages sauf les rectangulaire n'ayant
        pas de croisillons asymétriques.<span class="f_Textestd">. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Deux nouvelles clés
        doivent être ajoutées dans le fichier winpro.ini</span></p>

        <p class="p_Textestd"><span class="f_Winproini">[Glass]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">VitrageDxf        = 1  
             </span>pour activer l'exportation</p>

        <p class="p_Textestd">               <span class="f_Winproini">= 0    
           </span>pour désactiver l'exportation</p>

        <p class="p_Textestd"><span class="f_Winproini">VitrageDxfPath =
        C:\WinPro\Dxf     </span><span class="f_Textestd">chemin dans lequel
        sera créé le fichier dxf</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Et également 2 nouvelles
        clés sont ajoutées dans le fichier module.ini :</span></p>

        <p><span class="f_Winproini">[DXF]</span></p>

        <p><span class="f_Winproini">Version AutoCAD        = R2000</span>
        (valeur par défaut), </p>

        <p>                       <span class="f_Winproini">= R14</span></p>

        <p><span class="f_Winproini">Epaisseur Ligne        = 35</span>      
         (valeur par défaut) </p>

        <p style="margin: 0px 0px 0px 24px;">                       <span
        class="f_Winproini">= ...        </span>valeur exprimée au 1/100<span
        style="font-size: 5pt; vertical-align: super;">e</span> de mm</p>

        <p style="margin: 0px 0px 0px 24px;"> </p>
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
      <td align="left"><p
        style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Versie
                7.2.29</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">27/08/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Nieuwe grafische
        functies:</span><span class="f_Textestd">De Slope (x1,y1,x2,y2) functie
        geeft de hoek tussen een horizontale lijn en een lijn gedefinieerd door
        2 punten aan.</span></p>

        <p style="color:#0000ff"><span style="color:#0000ff"><span
        style="color:#0000ff">b := 90 &ndash; Slope
        (x1,y1,x2,y2)</span></span><span style="color:#0000ff"></span></p>

        <p style="color:#0000ff"><span style="color:#0000ff">a := Slope
        (x1,y1,X2,Y2)</span></p>

        <p></p>

        <p><img alt="afb2" src="rn7229_1.jpg" style="float: left" width="475"
        height="208"></p>

        <p></p>

        <p></p>

        <p></p>

        <p></p>

        <p></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Nieuwe tekening
        instructies:</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Deze nieuwe instructies
        staan u toe om vrije vormen te creeren en deze op te vullen met een
        kleur</span><span class="f_Textestd">. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Deze vrije vormen worden
        opgebouwd uit een groep van teken instructies welek aan elkaar gelinkt
        zijn door de punten van de uiteinden</span><span class="f_Textestd">.
        </span></p>

        <p class="p_Textestd">       <span class="f_Variables">Arc
        (</span><span class="f_Textestd">cx</span><span
        class="f_Variables">,</span><span class="f_Textestd">cy</span><span
        class="f_Variables">,</span><span class="f_Textestd">rayon</span><span
        class="f_Variables">,</span><span class="f_Textestd">a1</span><span
        class="f_Variables">,</span><span class="f_Textestd">a2</span><span
        class="f_Variables">,</span><span class="f_Textestd">b1</span><span
        class="f_Variables">,</span><span class="f_Textestd">b2</span><span
        class="f_Variables">)</span><span class="f_Textestd"> : </span><span
        class="f_Textestd">Teken een cirkel van de gegeven dikte</span></p>

        <p class="p_Textestd">       <span class="f_Variables">Arc2
        (</span><span class="f_Textestd">x0</span><span
        class="f_Variables">,</span><span class="f_Textestd">y0</span><span
        class="f_Variables">,</span><span class="f_Textestd">x1</span><span
        class="f_Variables">,</span><span class="f_Textestd">y1</span><span
        class="f_Variables">,</span><span class="f_Textestd">a1</span><span
        class="f_Variables">,</span><span class="f_Textestd">a2</span><span
        class="f_Variables">, </span><span class="f_Textestd">b1 </span><span
        class="f_Variables">,</span><span class="f_Textestd">b2</span><span
        class="f_Variables">)</span><span class="f_Textestd"> : Teken een
        cirkel waarvan het vertrekpunt correspondeerd met het aankomstpunt van
        de vorige instructie</span><span class="f_Textestd">.</span></p>

        <p class="p_Textestd">       <span class="f_Variables">Bezier
        (</span><span class="f_Textestd">x1</span><span
        class="f_Variables">,</span><span class="f_Textestd">y1</span><span
        class="f_Variables">,</span><span class="f_Textestd">x2</span><span
        class="f_Variables">,</span><span class="f_Textestd">y2</span><span
        class="f_Variables">, </span><span class="f_Textestd">x3</span><span
        class="f_Variables">,</span><span class="f_Textestd">y3) : Teken een
        Bézier waarvan het vertrekpunt correspondeerd met het aankomstpunt van
        de vorige instructie</span><span class="f_Textestd">.</span></p>

        <p class="p_Textestd">       <span class="f_Variables">Ligne
        (</span><span class="f_Textestd">x1</span><span
        class="f_Variables">,</span><span class="f_Textestd">y1</span><span
        class="f_Variables">)</span><span class="f_Textestd"> : </span><span
        class="f_Textestd">Teken een lijn waarvan het vertrekpunt
        correspondeerd met het aankomstpunt van de vorige instructie.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd">       <span class="f_Variables">DebutChemin
        ()</span><span class="f_Textestd"> : Start van een nieuwe vorm
        samengesteld uit verschillende functies om de continuiteit te
        verzekeren</span><span class="f_Textestd">.</span></p>

        <p class="p_Textestd">       <span class="f_Variables">FinChemin
        ()</span><span class="f_Textestd"> : Sluit de vorm.</span></p>

        <p class="p_Textestd">       <span class="f_Variables">ContourChemin
        ()</span><span class="f_Textestd"> : Deze instructie sluit de vorm en
        tekent een streep</span><span class="f_Textestd">.</span></p>

        <p class="p_Textestd">       <span class="f_Variables">RemplirChemin
        ()</span><span class="f_Textestd"> : Opvullen van de aangemaakte
        vorm</span><span class="f_Textestd">.</span></p>

        <p class="p_Textestd">       <span
        class="f_Variables">RemplirEtContourChemin ()</span><span
        class="f_Textestd"> : Deze instructie combineert de eigenschappen van
        de instructies </span><span class="f_Variables">RemplirChemin
        ()</span><span class="f_Textestd">en </span><span
        class="f_Variables">ContourChemin ()</span><span
        class="f_Textestd">.</span></p>

        <p></p>

        <p>of met de nederlandse variabelen :</p>

        <p></p>

        <p style="margin-left:2em;"><span style="color:#0000ff">Arc (cx, cy,
        radius, a1,a2,b1,b2) :</span> Trek een cirkel met een startpunt welke
        overeenkomt met het eindpunt van de vorige instructie.</p>

        <p style="margin-left:2em;"><span style="color:#0000ff">Arc2 (x0, y0,
        x1, y1,a1,a2,b1 ,b2) :</span> Trek een cirkel boog met een startpunt
        welke overeenkomt met het eindpunt van de vorige instructie.</p>

        <p style="margin-left:2em;"><span
        style="color:#0000ff">ArcSensRotation(0 ou 1)</span> : Definieer een
        rotatie oriëntatie voor bogen volgens deze instructie</p>

        <p style="margin-left:2em;"><span style="color:#0000ff">Bezier (x1, y1,
        x2, y2,x3, y3)</span> : Trek en Bézier (gebogen lijn) met een startpunt
        welke overeenkomt met het eindpunt van de vorige instructie.</p>

        <p style="margin-left:2em;"><span style="color:#0000ff">Line (x1,
        y1)</span> : Trek een lijn met een startpunt welke overeenkomt met het
        eindpunt van de vorige instructie.</p>

        <p></p>

        <p style="margin-left:2em;"><span style="color:#0000ff">StartPath
        ()</span> : Geef het startpunt van een nieuwe vorm welke is opgemaakt
        uit verschillende functies met de mogelijkheid deze door te zetten.</p>

        <p style="margin-left:2em;"><span style="color:#0000ff">EndPath
        ()</span> : Beëindig de vorm.</p>

        <p style="margin-left:2em;"><span style="color:#0000ff">BorderPath
        ()</span> : Eindig de vorm en teken deze met 1 streek.</p>

        <p style="margin-left:2em;"><span style="color:#0000ff">FillPath
        ()</span> : Vul met een kwast de gecreëerde vorm.</p>

        <p style="margin-left:2em;"><span
        style="color:#0000ff">FillAndBorderPath ()</span> : Combineer de
        eigenschappen van beide voorgaande instructies.</p>

        <p></p>

        <p style="text-indent: 45px;"> </p>

        <p class="p_Heading1"><span class="f_TitreReleaseNote">Samenvoegen
        bogen:</span> Deze functies kunnen worden gebruikt om de snijpositie
        van een ronde boog naar een trapezium sub-vorm te calculeren.</p>

        <p class="p_Heading1">Vele snijpunt samenvoeg opties zijn
        beschikbaar:</p>

        <p class="p_Heading1"></p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-weight: bold; text-decoration: underline;">Eerste fase:
        Initialisering</span></p>

        <p style="margin: 0px 0px 0px 24px;">Voor het starten van een
        zaagvolgorde van een boog dient de instelling correct geïnitialiseerd
        te worden voor juist gedrag</p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">BowCutInit ()</span> : Deze noodzakelijke functie
        reset de status. Geeft altijd 1. </p>

        <p style="margin: 0px 0px 0px 24px;">Syntaxe: <span
        class="f_Variables">a := BowCutInit ()</span></p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">BowCutSetOverLenghts</span> :Met deze optionele
        instructie geeft u de extra afmetingen weer op de tekening voor de
        trapezium vormen welke worden gecalculeerd. Over dimensie a en c kan
        een verlies ontstaan vanwege de assemblage vorm. Geeft altijd de waarde
        1.</p>

        <p style="margin: 0px 0px 0px 24px;">Syntaxe: <span
        class="f_Variables">a := BowCutSetOverLenghts (</span> valeur a<span
        class="f_Variables">, </span>valeur b<span class="f_Variables">,
        </span>valeur c<span class="f_Variables">, </span>valeur d<span
        class="f_Variables">)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/img_1.jpg" width="505"
        height="189" border="0" vspace="1" hspace="1" alt="img_1"></p>

        <p style="margin: 0px 0px 0px 24px;">Opmerking :</p>

        <p style="margin: 0px 0px 0px 24px;">De rotatie is met de klok mee
        gezien, dan:</p>

        <p style="margin: 0px 0px 0px 24px;">&bull; a correspondeert met het
        startpunt</p>

        <p style="margin: 0px 0px 0px 24px;">&bull; b correspondeert met de
        buiten zijde</p>

        <p style="margin: 0px 0px 0px 24px;">&bull;c correspondeert met het
        eind</p>

        <p style="margin: 0px 0px 0px 24px;">&bull; d correspondeert met de
        binnenzijde</p>

        <p style="margin: 0px 0px 0px 24px;"></p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">BowCutSetUsualWidths </span>: Deze optionele
        instructie definieert de sectie welke WinPro moet gebruiken om de
        trapezium te calculeren.</p>

        <p style="margin: 0px 0px 0px 24px;">Tot 10 secties kunnen worden
        voorgedefinieerd. Indien minder dan 10 secties nuttig zijn dient u de
        andere waarden op 0 te zetten.</p>

        <p style="margin: 0px 0px 0px 24px;">Indien alle waarden op 0 worden
        gezet zal WinPro de sectie van elk trapezium automatisch berekenen.
        Geeft altijd 1.</p>

        <p style="margin: 0px 0px 0px 24px;"></p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Syntax:
        a := BowCutSetUsualWidths (Section1, Section2, Section3, Section4,
        Section5, Section6, Section7, Section8, Section9, Section10)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-size: 20pt;color:#ff0000"><img src="img/img_2.jpg" width="348"
        height="136" border="0" vspace="1" hspace="1"
        alt="img_2">Sectie</span></p>

        <p style="margin: 0px 0px 0px 24px;">Opmerking: Je zult moeten weten
        dat, hoe de vorm van de calculatiemethode ook is, het gegenereerde
        trapezium altijd een uniforme sectie heeft. </p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">BowCutSetMinLength : Dit is optioneel en geeft de
        gebruiker de mogelijkheid de minimale maat van het gecalculeerde
        trapezium in te voeren. De waarde van deze minimum lengte moet
        inclusief eventuele correctie welke worden aangegeven in de functie
        BowCutSetOverLenghts. Geeft altijd 1.</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Syntax:
        a := BowCutSetMinLenght (value)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables"></span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/img_3.jpg" width="352"
        height="151" border="0" vspace="1" hspace="1" alt="img_3"><span
        style="color:#ff0000"><span
        style="font-size: 20pt">Lengte</span></span></p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">BowCutPenalty : Deze optionele functie beïnvloed
        WinPro voor de hoeveelheid trapeziums het dient te genereren. Om mee te
        beginnen raden we een waarde van 5000 aan maar dit kan worden aangepast
        la naar gelang uw behoefte.</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Hoe
        hoger deze waarde is, hoe minder het aantal zaagsnedes voor de
        boog.</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Geeft
        altijd 1.</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Syntax:
        a := BowCutPenalty (5000)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables"></span></p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-weight: bold; text-decoration: underline;">Tweede fase:
        Bogen set up</span></p>

        <p style="margin: 0px 0px 0px 24px;">Het is noodzakelijk de kromming
        van de boog te definieren .</p>

        <p style="margin: 0px 0px 0px 24px;">Per definitie, één radius is voor
        één boog.</p>

        <p style="margin: 0px 0px 0px 24px;">.</p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/img_4.jpg" width="603"
        height="282" border="0" vspace="1" hspace="1" alt="img_4"></p>

        <p style="margin: 0px 0px 0px 24px;"><strong><span
        style="color:#000000"><span style="color:#000000"><span
        class="f_Variables">BowCutGetNbBows : Deze functie geeft het aantal
        krommingen welke zijn gecalculeerd en opgeslagen in een array en kunnen
        worden gebruikt op het moment van
        calculeren.</span></span></span></strong><span
        style="color:#000000"><strong><span style="color:#000000"><span
        style="color:#000000"><span style="color:#000000"><span
        class="f_Variables">BowCutDefineTmpBow : Deze noodzakelijke instructie
        geeft de set-up voor aard van de boog oor
        WinPro.</span></span></span></span></strong></span></p>

        <p style="margin: 0px 0px 0px 24px;color:#000000"><strong><span
        class="f_Variables">Geeft altijd 1.</span></strong></p>

        <p style="margin: 0px 0px 0px 24px;color:#000000"><strong><span
        class="f_Variables">Syntax: a := BowCutDefineTmpBow (x0, y0, x1, y1,
        centrex, centrey, radius, EpProfile, 0)</span></strong></p>

        <p style="margin: 0px 0px 0px 24px;color:#000000"><strong><span
        class="f_Variables"></span></strong></p>

        <p style="margin: 0px 0px 0px 24px;color:#000000"><strong><span
        class="f_Variables">Let op:</span></strong></p>

        <p style="margin: 0px 0px 0px 24px;color:#000000"><strong><span
        class="f_Variables">&bull;&#xf020;De positie van angleBS en angleBE is
        afhankelijk van de laatste setting welke is 0 of 1.</span></strong></p>

        <p style="margin: 0px 0px 0px 24px;color:#000000"><strong><span
        class="f_Variables">&bull;&#xf020;De laatste setting moet altijd op 0
        worden gezet om te komen tot een kloksgewijze draairichting te
        valideren. De tegen de klokrichting draaiende setting 1 kan momenteel
        niet worden toegepast..</span></strong></p>

        <p style="margin: 0px 0px 0px 24px;color:#000000"><strong><span
        class="f_Variables"></span></strong></p>

        <p style="margin: 0px 0px 0px 24px;color:#000000"><strong><span
        class="f_Variables">BowCutDefineTmpStart : Deze niet noodzakelijke
        functie set de hoek corresponderend met de start van de kromming. Geeft
        altijd 1.</span></strong></p>

        <p style="margin: 0px 0px 0px 24px;color:#000000"><strong><span
        class="f_Variables">Syntax: a := BowCutDefineTmpStart (angleBS, 180 -
        angleBE, 0, 0, 0)</span></strong></p>

        <p style="margin: 0px 0px 0px 24px;color:#000000"><strong><span
        class="f_Variables">Let op : De 3 laatste settings moeten 0 waarden
        blijven.</span></strong></p>

        <p style="margin: 0px 0px 0px 24px;color:#000000"><strong><span
        class="f_Variables"></span></strong></p>

        <p style="margin: 0px 0px 0px 24px;color:#000000"><strong><span
        class="f_Variables">BowCutDefineTmpEnd : Deze niet noodzakelijke
        functie set de hoek corresponderend met het eind van de kromming. Geeft
        altijd 1.</span></strong></p>

        <p style="margin: 0px 0px 0px 24px;color:#000000"><strong><span
        class="f_Variables">Syntax: a := BowCutDefineTmpEnd (angleBS, 180 -
        angleBE, 0, 0, 0)</span></strong></p>

        <p style="margin: 0px 0px 0px 24px;color:#000000"><strong><span
        class="f_Variables">Note : De 3 laatste settings moeten 0 waarden
        blijven.</span></strong></p>

        <p style="margin: 0px 0px 0px 24px;color:#000000"><strong><span
        class="f_Variables"></span></strong></p>

        <p style="margin: 0px 0px 0px 24px;color:#000000"><strong><span
        class="f_Variables">BowCutAddBow : Deze noodzakelijke instructie
        bewaard de boog instellingen welke zijn gedefinieerd in een array. Deze
        geeft -1 in geval van een fout of het aantal krommingen welke reeds
        zijn gecalculeerd en opgeslagen in de array.</span></strong></p>

        <p style="margin: 0px 0px 0px 24px;color:#000000"><span
        style="color:#000000"><span class="f_Variables">Syntax: a :=
        BowCutGetNbBows ()</span></span><strong><span
        class="f_Variables">Syntax: a := BowCutAddBow ()</span></strong></p>

        <p style="margin: 0px 0px 0px 24px;color:#000000"><span
        style="color:#000000"><strong><span
        style="color:#000000"></span></strong></span><strong><span
        class="f_Variables"></span></strong></p>

        <p style="margin: 0px 0px 0px 24px;color:#000000"><span
        style="color:#000000"></span></p>

        <p style="margin: 0px 0px 0px 24px;"></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables"></span></p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-style: oblique; font-weight:bold; text-decoration: underline;">Derde
        fase : Bepalen van de aantalen reeksen</span></p>

        <p style="margin: 0px 0px 0px 24px;">De reeksen worden verwerkt in 2
        fases, de 1e is one is facultatief.</p>

        <p style="margin: 0px 0px 0px 24px;">Het resultaat hangt af van de
        geïnitialiseerde criterias de gebogen krommingen zoals gedefinieerd.</p>

        <p style="margin: 0px 0px 0px 24px;"></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color:#0000ff">BowCutGuessNbTrapeziums</span>: Deze is niet
        noodzakelijk en geeft:</p>

        <p style="margin: 0px 0px 0px 24px;">De ideaale hoeveelheid van
        trapezium vormen benodigd om de boog te produceren.</p>

        <p style="margin: 0px 0px 0px 24px;">-10indien er initialisatie
        problemen zijn.</p>

        <p style="margin: 0px 0px 0px 24px;">-5 indien er een probleem is
        gedurende het voor-calculeren (door verkeerde of missende waarden).</p>

        <p style="margin: 0px 0px 0px 24px;">-1 indien WinPro geen oplossing
        kan calculeren door toegewezen beperkingen (geen SectionStd, onmogelijk
        te vinden, niet lang genoeg gesegmenteerd deel gecombineerd met het
        gespecificeerde limiet, ...)</p>

        <p style="margin: 0px 0px 0px 24px;">Syntax: a := <span
        style="color:#0000ff">BowCutGuessNbTrapeziums</span> ()</p>

        <p style="margin: 0px 0px 0px 24px;"></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="color:#0000ff">BowCutSetNbTrapeziums</span> : Deze functie
        bewaard het aantal trapeziums benodigd voor het samenvoegen.</p>

        <p style="margin: 0px 0px 0px 24px;">Geeft 1 indien de gevraagde
        hoeveelheid is geaccepteerd en -1 indien dit niet het geval is</p>

        <p style="margin: 0px 0px 0px 24px;">Syntax: a := <span
        style="color:#0000ff">BowCutSetNbTrapeziums</span> (value)</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-weight:bold; text-decoration: underline;">Vierde fase:
        Genereer &amp; raadpleeg de reeks</span></p>

        <p style="margin: 0px 0px 0px 24px;">De reeks wordt verwerkt zodra de
        instructie BowCutInfosTrapezium wordt gevonden in de code.</p>

        <p style="margin: 0px 0px 0px 24px;"></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Genereer &amp; controleer de
        reeks</span></p>

        <p style="margin: 0px 0px 0px 24px;">De reeks wordt gegenereerd na
        uitvoer van de onderstaande functie geïnitialiseerd met -1 waarden.</p>

        <p style="margin: 0px 0px 0px 24px;">Geeft:</p>

        <p style="margin: 0px 0px 0px 24px;">-10 indien zich een
        initialisatieprobleem voordoet</p>

        <p style="margin: 0px 0px 0px 24px;">-1 indien er een onbekende fout
        plaats<span style="text-decoration: underline;"></span>vind</p>

        <p style="margin: 0px 0px 0px 24px;">1 indien de controle juist is.</p>

        <p style="margin: 0px 0px 0px 24px;">Syntax: a := BowCutInfosTrapezium
        (-1, -1, -1)</p>

        <p style="margin: 0px 0px 0px 24px;">Let op : Deze fase is niet
        noodzakelijk en zal hoofdzakelijk gebruikt worden om te debuggen;</p>

        <p style="margin: 0px 0px 0px 24px;"></p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="text-decoration: underline;">Weergeven van het resultaat van de
        reeks</span></p>

        <p style="margin: 0px 0px 0px 48px;">U kunt dezelfde functie gebruiken
        om het resutaat van de reeks te raadplegen.</p>

        <p style="margin: 0px 0px 0px 48px;">Hier geeft deze de waarde -1 of
        -10 indien er een fout is gemaakt, in alle andere gevallen geeft deze
        de gevraagde waarde welke corespondeerd met de 3e setting van de
        functie.</p>

        <p style="margin: 0px 0px 0px 48px;">Syntax: a := BowCutInfosTrapezium
        (0, n° of the trapezium, InfoType)</p>

        <p style="margin: 0px 0px 0px 48px;">InfoType geeft éèn van de volgende
        waarden:</p>

        <p style="margin: 0px 0px 0px 48px;">1 = lengte van de onderzijde</p>

        <p style="margin: 0px 0px 0px 48px;">2 = lengte van de bovenzijde</p>

        <p style="margin: 0px 0px 0px 48px;">3 = Linker hoek</p>

        <p style="margin: 0px 0px 0px 48px;">4 = Rechter hoek</p>

        <p style="margin: 0px 0px 0px 48px;">5 = Boven linker hoek</p>

        <p style="margin: 0px 0px 0px 48px;">6 = Boven rechter hoek</p>

        <p style="margin: 0px 0px 0px 48px;">7 = Omgekeerde waarde van de
        linker uiterste punt (vanaf de bovenzijde) &ndash; Geeft altijd 0,
        functie is nog niet geïmplementeerd.</p>

        <p style="margin: 0px 0px 0px 48px;">8 = Omgekeerde waarde van de
        rechter uiterste punt (vanaf de bovenzijde) &ndash; Geeft altijd 0,
        functie is nog niet geïmplementeerd.</p>

        <p style="margin: 0px 0px 0px 48px;">9 = Totale lengte</p>

        <p style="margin: 0px 0px 0px 48px;">10 = Sectie</p>

        <p style="margin: 0px 0px 0px 48px;">11 = Geeft waarde 1 met linker
        uiterste punt, anders 0 - Geeft altijd 0, functie is nog niet
        geïmplementeerd.</p>

        <p style="margin: 0px 0px 0px 48px;">12 = Geeft waarde 1 met rechter
        uiterste punt, anders 0 - Geeft altijd 0, functie is nog niet
        geïmplementeerd.</p>

        <p style="margin: 0px 0px 0px 48px;">13 = x positie van de bovenste
        linker punt</p>

        <p style="margin: 0px 0px 0px 48px;">14 = y positie van de bovenste
        linker punt</p>

        <p style="margin: 0px 0px 0px 48px;">15 = x positie van de bovenste
        rechter punt</p>

        <p style="margin: 0px 0px 0px 48px;">16 = y positie van de bovenste
        rechter punt</p>

        <p style="margin: 0px 0px 0px 48px;">17 = x positie van de rechter
        uiterste punt - Geeft altijd 0, functie is nog niet geïmplementeerd.</p>

        <p style="margin: 0px 0px 0px 48px;">18 = y positie van de rechter
        uiterste punt - Geeft altijd 0, functie is nog niet geïmplementeerd.</p>

        <p style="margin: 0px 0px 0px 48px;">19 = x positie van de onderste
        rechter punt</p>

        <p style="margin: 0px 0px 0px 48px;">20 = y positie van de onderste
        rechter punt</p>

        <p style="margin: 0px 0px 0px 48px;">21 = x positie van de onderste
        linker punt</p>

        <p style="margin: 0px 0px 0px 48px;">22 = y positie van de onderste
        linker puntt</p>

        <p style="margin: 0px 0px 0px 48px;">23 = x positie van de linker
        uiterste punt - Geeft altijd 0, functie is nog niet geïmplementeerd.</p>

        <p style="margin: 0px 0px 0px 48px;">24 = y positie van de linker
        uiterste punt - Geeft altijd 0, functie is nog niet geïmplementeerd.</p>

        <p style="margin: 0px 0px 0px 48px;"></p>

        <p style="margin: 0px 0px 0px 48px;">Een illustratie voorbeeld over het
        gebruik van deze nieuwe functie zal binnenkort hier worden
        toegevoegd.</p>

        <p style="margin: 0px 0px 0px 48px;"></p>

        <p> </p>

        <p> </p>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Versie
                7.2.27 en 28</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">07/08/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p></p>

        <p><span
        style="font-family: Times New Roman,Times,serif; font-style: oblique; font-weight:bold; text-decoration: underline;font-size: 12pt">Stijl
        ingave:</span> Daar waar een stijl wordt ingevoerd, is WinPro in staat
        de maten van de laatst ingegeven stijl in het geheugen te houden. Om
        echter de informatie van de eerste ingegeven stijl te kunnen bewaren
        dient simpelweg onderstaande regel aan de WinPro.ini te worden
        toegevoegd.</p>

        <p>[System]</p>

        <p>Traverse Static = 0(bewaard in het geheugen de maat van de eerst
        ingegeven stijl)</p>

        <p>= 1(bewaard in het geheugen de maat van de laatst ingegeven
        stijl)</p>

        <p></p>

        <p></p>

        <p><span class="f_TitreReleaseNote">Lijst van geoptimaliseerde
        ramen:</span><span
        style="font-weight: bold; color: #000000;"></span><span
        style="color: #000000;">Het WinPro lotnummer wordt nu afgedrukt op dit
        document</span></p>

        <p style="margin: 0px 0px 0px 5px;"><span
        style="color: #000000;"> </span></p>

        <p style="margin: 0px 0px 0px 5px;"><span
        style="color: #000000;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Versie
                7.2.26</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">24/07/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p><span class="f_TitreReleaseNote">Schermen in de werkplaats:</span>
        Een nieuwe globale variabele <span
        class="f_Variables">_CategPosteAtelier of _CatArbeidsPost</span> is
        geïnitialiseerd voor de plaats waar de productie wordt gedraaid. De
        applicatiebeheerder kan nu elke productie plaats voorzien van een
        specifieke code.</p>

        <p>Voorbeeld: Laat een tekening zien welke enkel benodigd is op 1
        unieke productie plaats en niet op andere productie plaatsen.</p>

        <p></p>

        <p> </p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Versie
                7.2.25</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">17/07/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">Speling vleugel stijl:</span> 6
        nieuwe globale variabelen zijn toegevoegd voor vleugels</p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_OuvrantJeuMauclair1 [NumeroOuvrant]</span>
        correspondeert met de lokale vleugel variabele: <span
        class="f_Variables">JeuMauclair1</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_OuvrantJeuMauclair2 [NumeroOuvrant]</span>
        correspondeert met de lokale vleugel variabele: <span
        class="f_Variables">JeuMauclair2</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_OuvrantJeuMauclair6 [NumeroOuvrant]</span>
        correspondeert met de lokale vleugel variabele: <span
        class="f_Variables">JeuMauclair6</span></p>

        <p></p>

        <p>of met de nederlandse variabelen:</p>

        <p></p>

        <p style="margin-left:2em;"><span
        style="color:#0000ff">_SpelingVleugelStolp1 [Vleugelnummer]</span>
        correspondeert met de lokale vleugel variabele: <strong><span
        style="color:#0000ff">SpelMakelaar1</span></strong></p>

        <p style="margin-left:2em;"><span
        style="color:#0000ff">_SpelingVleugelStolp2 [Vleugelnummer]</span>
        correspondeert met de lokale vleugel variabele <strong
        style="color:#0000ff">SpelMakelaar2</strong></p>

        <p style="margin-left:2em;"><span
        style="color:#0000ff">_SpelingVleugelStolp6 [Vleugelnummer]</span>
        correspondeert met de lokale vleugel variabele: <strong
        style="color:#0000ff">SpelMakelaar6</strong></p>

        <p></p>

        <p> </p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Proces snelheid:</span> De snelheid
        van WinPro is vergroot onder deze omstandigheden:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Bij het bladeren tussen de diverse merk(raam)en in een
              order.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Bij het wijzigen van een systeem in een order.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Versie
                7.2.24</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">06/07/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Rolluik
        goedkeuring :</span><span class="f_Textestd"></span><span
        class="f_Textestd">Een nieuw veld &ldquo;vaste prijs&rdquo; is
        toegevoegd in de rolluik tab in de order van de klant. Dit werkt enkel
        als de prijs van het kozijn eveneens is vastgezet als &ldquo;vaste
        prijs&rdquo; </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p><span class="f_TitreReleaseNote">Beperkt gebruik RAL kleuren</span>
        Deze aanpassing heeft enkel betrekking op gebruikers welke gebruik
        maken van &ldquo;beperkte keuze Ral kleuren&rdquo; ». Als basis, bij
        invoer van een RAL kleur, zal WinPro automatisch voor elk profiel op
        zoek gaan naar het juiste artikel voor de gekozen kleur. In het geval
        WinPro geen bijbehorende kleur vind zal het hierbij behorende artikel
        uit de lijst onder profielen kiezen. Indien onder genoemde nieuwe regel
        aan de WinPro.ini is toegevoegd, geïnitialiseerd op 1 zal WinPro direct
        het bijbehorende artikel behorende artikel uit de lijst onder profielen
        kiezen, indien is gekozen voor Ral kleuren</p>

        <p><span style="font-weight: bold; color: #666699;">[System]</span></p>

        <p><span style="font-weight: bold; color: #666699;">Limiter RAL      
         = 0</span>         (standaard waarde),</p>

        <p>               <span style="font-weight: bold; color: #666699;">=
        1</span>        WinPro kan het bijbehorende artikel uit tab profielen
        niet gebruiken indien Ral kleuren wordt ingevoerd en het in het systeem
        het vinkje &ldquo;gelimiteerd Ral kleurgebruik&rdquo; is aangevinkt</p>

        <p> </p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Versie
                7.2.20</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">23/06/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Export beglazing
        DXF (module DXFV): :</span><span class="f_Textestd">Op het moment van
        beglazing exporteren printen order, Exporteert WinPro de beglazingen
        van elke elk stukje glas als een dxf document. Twee nieuwe regels
        dienen hiervoor worden toegevoegd aan het WinPro.ini bestand</span></p>

        <p class="p_Textestd"><span class="f_Winproini">[Glass]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">VitrageDxf        = 1  
             </span>mogelijk maken dxf export</p>

        <p class="p_Textestd">               <span class="f_Winproini">= 0    
           </span>verhinderen dxf export</p>

        <p class="p_Textestd"><span class="f_Winproini">VitrageDxfPath =
        C:\WinPro\Dxf     </span><span class="f_Textestd">plaats waar het dxf
        bestand wordt geplaatst op de harde schijf</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Eveneens dienen 2 nieuwe
        regels aan het module.ini bestand worden toegevoegd:</span></p>

        <p><span class="f_Winproini">[DXF]</span></p>

        <p><span class="f_Winproini">Version AutoCAD        = R2000</span>
        (standaard waarde), , </p>

        <p>                       <span class="f_Winproini">= R14</span></p>

        <p><span class="f_Winproini">Epaisseur Ligne        = 35</span>      
        (standaard waarde), </p>

        <p style="margin: 0px 0px 0px 24px;">                       <span
        class="f_Winproini">= ...       waarde precisie 1/100e of mm</span></p>

        <p style="margin: 0px 0px 0px 24px;"> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
