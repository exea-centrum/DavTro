<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["FRA","NED"];
var WinProHelpPageName=["7.0.4x","7.0.4x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?rn704x.php"; }
else { parent.quicksync('a11.6.4'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>7.0.4x</title>
  <meta name="keywords" content="Winpro.ini">
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
        href="introduction.php">Top</a>  <a href="rn707x.php">Previous</a>  <a
        href="rn703x.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="FRA">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

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
                7.0.49</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">30/06/04
                &ndash; 11/04/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">Assemblages de châssis dans les
        bibliothèques:</span> La saisie d&rsquo;assemblage de fenêtres est
        possible dans les bibliothèques.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Codes postaux et localités:</span>
        Dans le menu Données | Autres Données | Codes Postaux, vous avez la
        possibilité d&rsquo;enregistrer les codes postaux et localités.</p>

        <p>Nous disposons, à titre d&rsquo;exemple, des codes postaux des pays
        suivants : Belgique, France, Espagne et Suisse. Nous pouvons vous en
        faire bénéficier gracieusement sur simple demande.</p>

        <p>Les codes postaux ainsi créés peuvent ensuite être exploités
        directement dans la fiche client.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Factures d&rsquo;acomptes:</span>
        Vous ne pouvez plus accéder directement à la grille de l&rsquo;onglet
        Acomptes de la Commande client. </p>

        <p>Vous devez absolument cliquer sur le bouton Acomptes situé en bas de
        l&rsquo;écran afin de généré une nouvelle ligne avec ou sans édition
        d&rsquo;une facture d&rsquo;acompte.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Nouvelles variables de
        traverse:</span> Ces 2 variables locales sont disponible dans le
        paramétrage des traverses.</p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">HauteurVideAGauche</span> : Hauteur de la partie
        vide se trouvant à gauche de la traverse verticale en cours de
        calcul.</p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">HauteurVideADroite</span> : Hauteur de la partie
        vide se trouvant à droite de la traverse verticale en cours de
        calcul.</p>

        <p> </p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Vue coupe partielle:</span> Pour
        les utilisateurs des vue en coupe,  nous avons la possibilité de
        déplacer les 2 points d&rsquo;accroche de l&rsquo;axe afin de
        visualiser une vue en coupe partielle.</p>

        <p style="margin: 0px 0px 0px 35px;"><img src="img/img_47.jpg" width="471"
        height="443" border="0" vspace="1" hspace="1" alt="img_47"></p>

        <p style="text-align: center; margin: 0px 0px 0px 35px;"><span
        class="f_ImageCaption"> </span></p>

        <p style="text-align: center; margin: 0px 0px 0px 35px;"><span
        class="f_ImageCaption"> </span></p>

        <p><span class="f_TitreReleaseNote">Position des variables X0Segment[],
        X1Segment[], Y0Segment[], Y1Segment[]:</span> La disposition de ces
        variables a été modifiée.</p>

        <p> <br>
        Numérotation des segments : Si vous utilisez les dormants et traverses
        segmentés (traverse filante ou inversion de frappe)</p>

        <p>Voici le détail de ces 2 points :</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 8px 0px 0px 5px;"><img src="img/img_48.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_48"></p>
              </td>
              <td width="214" style="width: 214px;"><p
                style="margin: 8px 0px 0px 5px;"><img src="img/img_49.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_49"></p>
              </td>
              <td width="216" style="width: 216px;"><p
                style="margin: 8px 0px 0px 5px;"><img src="img/img_50.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_50"></p>
              </td>
              <td width="211" style="width: 211px;"><p
                style="margin: 8px 0px 0px 5px;"><img src="img/img_51.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_51"></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 5px;"><img src="img/img_52.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_52"></p>
              </td>
              <td width="214" style="width: 214px;"><p
                style="margin: 0px 0px 0px 5px;"><img src="img/img_53.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_53"></p>
              </td>
              <td width="216" style="width: 216px;"><p
                style="margin: 0px 0px 0px 5px;"><img src="img/img_54.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_54"></p>
              </td>
              <td width="211" style="width: 211px;"><p
                style="margin: 0px 0px 0px 5px;"><img src="img/img_55.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_55"></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 5px;"><img src="img/img_56.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_56"></p>
              </td>
              <td width="214" style="width: 214px;"><p
                style="margin: 0px 0px 0px 5px;"><img src="img/img_57.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_57"></p>
              </td>
              <td width="216" style="width: 216px;"><p
                style="margin: 0px 0px 0px 5px;"><img src="img/img_58.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_58"></p>
              </td>
              <td width="211" style="width: 211px;"><p
                style="margin: 0px 0px 0px 5px;"><img src="img/img_59.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_59"></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 5px;"><img src="img/img_60.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_60"></p>
              </td>
              <td width="214" style="width: 214px;"><p
                style="margin: 0px 0px 0px 5px;"><img src="img/img_61.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_61"></p>
              </td>
              <td colspan="2">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

                <table cellspacing="0" cellpadding="0" border="2"
                style="border: solid 4px #ff0000; border-spacing:0px; border-collapse: collapse;">
                  <tbody>
                    <tr valign="top" align="left">
                      <td width="213"
                      style="width: 213px; border: solid 2px #ff0000;"><p><img
                        src="img_62.jpg" width="250" height="250" border="0"
                        vspace="1" hspace="1" alt="img_62"></p>
                      </td>
                      <td valign="top" width="227"
                      style="width: 227px; border: solid 2px #ff0000;"><p><img
                        src="img_63.jpg" width="250" height="250" border="0"
                        vspace="1" hspace="1" alt="img_63"></p>
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

        <p style="margin: 0px 0px 0px 5px;"><span
        class="f_ImageCaption"> </span></p>

        <p style="margin: 8px 0px 0px 5px;"><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #0000ff;">X0,
        X1, Y0, Y1 </span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">:
        </span>correspondent aux variables X0, X1, Y0, Y1.</p>

        <p style="margin: 8px 0px 0px 5px;"><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #808080;">x0,
        x1, y0, y1</span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #0000ff;"></span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">:
        </span>correspondent aux variables <span class="f_Variables">X0Segment
        []</span>, <span class="f_Variables">X1Segment []</span>, <span
        class="f_Variables">Y0Segment []</span>, <span
        class="f_Variables">Y1Segment []</span>.</p>

        <p style="margin: 8px 0px 0px 5px;"><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #339966;">a1,
        a2</span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #0000ff;"></span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">:
        </span><span
        style="font-family: 'Tahoma'; color: #000000;">correspondent aux
        variables </span><span class="f_Variables">Angle1Segment []</span><span
        style="font-family: 'Tahoma'; color: #000000;">, </span><span
        class="f_Variables">Angle2Segment []</span><span
        style="font-family: 'Tahoma'; color: #000000;">.</span></p>

        <p style="margin: 8px 0px 0px 5px;"><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #ff0000;">1,
        2</span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #0000ff;"></span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">:
        </span><span
        style="font-family: 'Tahoma'; color: #000000;">correspondent aux
        variables </span><span class="f_Variables">Angle1</span><span
        style="font-family: 'Tahoma'; color: #000000;">et </span><span
        class="f_Variables">Angle2</span><span
        style="font-family: 'Tahoma'; color: #000000;">.</span></p>

        <p style="margin: 8px 0px 0px 5px;"><img src="img/img_64.jpg" width="22"
        height="22" border="0" vspace="1" hspace="1" alt="img_64"><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">&hellip;
        : </span><span
        style="font-family: 'Tahoma'; color: #000000;">correspondent à la
        variable </span><span class="f_Variables">NumeroSegment</span><span
        style="font-family: 'Tahoma'; color: #000000;">.</span></p>

        <p style="margin: 8px 0px 0px 5px;"><span
        style="font-family: 'Tahoma'; color: #000000;">- - - Les traits en
        pointillé représentent la présence facultative d&rsquo;un dormant en
        partie basse.</span></p>

        <p><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #000000; text-decoration: underline;"> </span></p>

        <p><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #000000; text-decoration: underline;"> </span></p>

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
                7.0.45 à 48</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">01/06/04
                au 30/06/04</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Nouvelles fonctions de
        dessin:</span> Il s'agit d'une suite de fonctions permettant de créer
        des formes.</p>

        <p>Certaines fonctions de dessin définissent le début d'un chemin,
        d'autres définissent la continuité et les dernières définissent la fin
        du chemin.<br>
        Ces chemins réunis génèrent une forme simple ou complexe pouvant
        ensuite être remplie par une brosse.</p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">DebutChemin ()</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">FinChemin ()</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">RemplirChemin ()</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">ContourChemin ()</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">RemplirEtContourChemin ()</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Ligne
        (</span>x1<span class="f_Variables">, </span>y1<span
        class="f_Variables">)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">Bezier(</span>tx1<span class="f_Variables">,
        </span>ty1<span class="f_Variables">,</span>tx2<span
        class="f_Variables">,</span>ty2<span
        class="f_Variables">,</span>pointx1<span
        class="f_Variables">,</span>pointy1<span class="f_Variables">,&hellip;)
        [</span>nb de param multiple de 6<span class="f_Variables">]</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Arc2
        (</span>lr<span class="f_Variables">,</span>tr<span
        class="f_Variables">,</span>rr<span class="f_Variables">,</span>br<span
        class="f_Variables">,</span>xr1<span
        class="f_Variables">,</span>yr1<span
        class="f_Variables">,</span>xr2<span
        class="f_Variables">,</span>yr2<span class="f_Variables">)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Arc2
        (</span>x1<span class="f_Variables">,</span>y1<span
        class="f_Variables">,</span>x2<span class="f_Variables">,</span>y2<span
        class="f_Variables">,</span>h<span
        class="f_Variables">,</span>epaisseur<span
        class="f_Variables">,</span>demi<span class="f_Variables">)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Arc
        (</span>cx<span class="f_Variables">,</span>cy<span
        class="f_Variables">,</span>r<span class="f_Variables">,</span>xr1<span
        class="f_Variables">,</span>yr1<span
        class="f_Variables">,</span>xr2<span
        class="f_Variables">,</span>yr2<span class="f_Variables">)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">SetSensRotation (</span>sens<span
        class="f_Variables">)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Détails:</span></p>

        <p style="margin: 0px 0px 0px 24px;">Les 5 premières fonctions
        concernant les Chemins sont assez explicites et permettent la création
        de chemins/path qui pourront être coloriés par une Brosse ensuite.</p>

        <p style="margin: 0px 0px 0px 24px;">Ces fonctions de chemins ne sont
        vraiment efficaces qu&rsquo;avec les nouvelles fonctions « Ligne,
        Bezier et Arc2 » avec un certain nombre de paramètres.</p>

        <p style="margin: 0px 0px 0px 24px;">Aucune erreur ne sera renvoyée si
        on utilise une autre fonction que ces 3 là dans un chemin, mais le
        chemin sera « coupé » et produira des résultats inattendus !</p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Exemple:</span></p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Brosse
        (Pleine,0,255,0)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">DebutChemin()</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Ligne
        (1000,500,250,1500)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Bezier
        (-250,2200,1000,2500,1000,1500)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Bezier
        (1000,2500,2250,2200,1750,1500)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">FinChemin()</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">RemplirEtContourChemin()</span></p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 24px;">Cela produira un c&oelig;ur.
        L&rsquo;instruction Ligne(4 paramètres) a été utilisée dans le chemin
        au lieu de l&rsquo;instruction Ligne(2 parametres) car elle COMMENCE la
        figure et donc n&rsquo;interrompra pas le chemin ; au contraire, elle
        évitera un trait partant de l&rsquo;origine (0,0) vers (250,1500).</p>

        <p style="margin: 0px 0px 0px 24px;">On utilise 2 instructions
        Bezier(6*k paramètres) au lieu de Bezier (6*k+2 paramètres) pour éviter
        de couper le chemin. On peut très bien remplacer ces deux instructions
        par une seule de 12 paramètres sans que ça change qqch au résultat.</p>

        <p style="margin: 0px 0px 0px 24px;">On peut aussi utiliser
        l&rsquo;instruction Arc2(8param) qui se comporte exactement comme
        Arc(8param) à l&rsquo;exception près qu&rsquo;elle n&rsquo;interrompt
        pas le chemin.</p>

        <p style="margin: 0px 0px 0px 24px;">La dernière instruction
        [Arc2(7param)] est un peu différente des autres et permet la création
        d&rsquo;arcs en se basant sur d&rsquo;autres données, plus intuitives
        que celles demandées par Arc(8param).</p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="text-decoration: underline;">Syntaxe: </span></p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">Arc2
        (</span>x0<span class="f_Variables">, </span>y0<span
        class="f_Variables">, </span>x1<span class="f_Variables">,
        </span>y1<span class="f_Variables">, </span>h<span
        class="f_Variables">, </span>épaisseur<span class="f_Variables">,
        </span>demi<span class="f_Variables">) </span></p>

        <p style="margin: 0px 0px 0px 24px;">x0,y0 = point de départ de
        l&rsquo;arc de cercle</p>

        <p style="margin: 0px 0px 0px 24px;">x1,y1 = point d&rsquo;arrivée de
        l&rsquo;arc de cercle</p>

        <p style="margin: 0px 0px 0px 24px;">h = hauteur de la courbure, peut
        être également négative, pour dessiner l&rsquo;arc de l&rsquo;autre
        coté du segment x0,y0 &ndash; x1,y1</p>

        <p style="margin: 0px 0px 0px 24px;">épaisseur = peut être nulle pour
        dessiner un simple arc ou positive pour dessiner des arcs pleins, comme
        sur l&rsquo;illustration. Ces arcs pleins sont en fait des Chemins, il
        suffit d&rsquo;ajouter les instructions DébutChemin, FinChemin&hellip;
        pour pouvoir les colorier. Si l&rsquo;épaisseur est nulle, l&rsquo;arc
        peut faire partie d&rsquo;un Chemin, il ne l&rsquo;interrompra pas.</p>

        <p style="margin: 0px 0px 0px 24px;">Demi = 0, 1, 2, 10, 11,  12 = </p>

        <p style="margin: 0px 0px 0px 24px;">Si demi &gt;= 10, on ne dessine
        pas une épaisseur mais un décalage (très utile pour faire le pointillé
        au milieu de l&rsquo;arc par exemple). </p>

        <p style="margin: 0px 0px 0px 24px;">Si demi vaut 0 ou 10, on dessine
        un arc « normal », en donnant la hauteur de la courbure au milieu de
        l&rsquo;arc. </p>

        <p style="margin: 0px 0px 0px 24px;">Si demi=1 ou 11, on donne la
        hauteur de la courbure à la fin de l&rsquo;arc, et si demi = 2 ou 12,
        on donne la hauteur au début de l&rsquo;arc. (Voir les 3 formes du
        bas)</p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

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
                7.0.44</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">26/05/04</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Incidents de production:</span> Une
        gestion des incidents de production a été ajoutée au module des postes
        d&rsquo;atelier. Cette gestion vous permet de définir pour chaque poste
        la liste des incidents possibles, en autorisant ou non la saisie sur le
        poste d&rsquo;atelier d&rsquo;un commentaire additionnel. Cette
        définition est accessible depuis le menu Technique | Production |
        Incidents. Ensuite, sur chaque poste d&rsquo;atelier, vous devez
        autoriser la saisie des incidents. Pour cela, vous devez ajouter au
        winpro.ini se trouvant dans le root de chaque poste, la variable<span
        style="font-weight: bold; color: #666699;">Incidents=1</span>. Sur les
        postes sur lesquels la saisie des incidents est autorisée, un bouton
        supplémentaire apparaît, « Incidents [F3] ». Si vous cliquez sur ce
        bouton, ou si vous appuyez sur la touche F3, un dialogue apparaît, qui
        vous permet de saisir un des incidents autorisés pour le poste,
        éventuellement accompagné d&rsquo;un commentaire additionnel. Les
        incidents peuvent être consultés depuis la page Encours production de
        la saisie des commandes</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Commentaires atelier:</span> Les
        commentaires atelier, encodés au niveau de chaque châssis dans la
        saisie des commandes, peuvent apparaître sur les écrans des postes
        d&rsquo;atelier. Pour cela, il faut, sur chaque poste concerné,
        ajouter, dans le winpro.ini se trouvant dans le root, la ligne suivante
        : <span style="font-weight: bold; color: #666699;">Comment=1</span></p>

        <p style="text-align: center; margin: 0px 0px 0px 35px;"><span
        class="f_ImageCaption"> </span></p>

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
                7.0.42</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">14/05/04</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Code tarif par défaut:</span> Vous
        pouvez définir dans WinPro.ini le code tarif par défaut pour la saisie
        de commande. Ce code par défaut ne sera utilisé que si aucun code tarif
        n&rsquo;est associé au client de la commande.</p>

        <p> </p>

        <p><span class="f_Winproini">[System]</span></p>

        <p><span class="f_Winproini">Tarif = </span></p>

        <p> </p>

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
                7.0.41</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">5/05/04</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Nombre de copies imprimées:</span>
        Pour chaque document imprimé de WPReport, vous pouvez prédéfinir le
        nombre de copies.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Documents multiples dans
        WPReport:</span> Pour chaque impression depuis WPReport, vous pouvez
        définir plusieurs documents imprimés à la suite.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Scies:</span> Le nombre maximum de
        scies définissables dans WinPro a été porté de 99 à 999.</p>
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
      <td align="left"
      style="text-align:center;margin-left:auto;margin-right:auto;"><p> </p>

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
                7.0.49</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">30/06/04
                &ndash; 11/04/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">&bull;Samengestelde ramen in de
        bibliotheken</span> Ingave van samengestelde ramen (koppelingen) is nu
        ook mogelijk in de biblioteken;.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">&bull;Postcode&rsquo;s en
        plaatsen</span> : In het menu Gegevens-Diversen-Postcodes, hebt u nu de
        mogelijkheid postcodes en plaatsen op te slaan.</p>

        <p>Wij beschikken,als voorbeeld,over de postcodes van volgende landen :
        België, Frankrijk, Spanje en Zwitserland.Wij kunnen u op eenvoudige
        vraag erover laten beschikken. De aldus gecreëerde postcodes kunnen
        vervolgens direct in de fiche klant beheerd worden. </p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">&bull;Voorschotfacturen:</span> U
        kunt niet meer direct het rooster in het scherm&rdquo;
        Voorschotten&rdquo; van de klantbestelling bereiken. U moet absoluut op
        de knop &ldquo;Voorschot&rdquo; klikken, welke zich onderaan in het
        midden van dit scherm bevindt, teneinde een nieuwe lijn met of zonder
        uitgave van een voorschotrekening toe te kunnen voegen</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">&bull;Nieuwe variabelen voor de
        stijlen</span> Deze 2 lokale variabelen zijn vanaf heden beschikbaar in
        de parametrage van de stijlen :</p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">HauteurVideAGauche</span> (<strong><span
        style="color:#0000a0">HoogteLeegDeelLinks</span></strong>) : Grootte
        van het lege deel welke zich tijdens de berekening aan de linkerkant
        van de verticale dwarsligger bevindt.</p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">HauteurVideADroite</span> (<strong
        style="color:#0000a0">HoogteLeegDeelRechts</strong>) :Grootte van het
        lege deel welke zich tijdens de berekening aan de rechterkant van de
        verticale dwarsligger bevindt.</p>

        <p> </p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">&bull;Gedeeltelijke
        doorsnede</span> Voor de gebruikers van de doorsneden,hebben wij nu de
        mogelijkheid om de 2 eindpunten te verschuiven zodat enkel 1 uiteinde
        kan weergegeven worden. </p>

        <p style="margin: 0px 0px 0px 35px;"><img src="img/img_47.jpg" width="471"
        height="443" border="0" vspace="1" hspace="1" alt="img_47"></p>

        <p style="text-align: center; margin: 0px 0px 0px 35px;"><span
        class="f_ImageCaption"> </span></p>

        <p style="text-align: center; margin: 0px 0px 0px 35px;"><span
        class="f_ImageCaption"> </span></p>

        <p><span class="f_TitreReleaseNote">&bull;Posities van de variabelen
        X0Segment[], X1Segment[], Y0Segment[], Y1Segment[]</span> Het gebruik
        van deze variabelen is nu uitgebreid.</p>

        <p>Nummering van de segmenten : Indien u gebruik maakt van
        gesegmenteerde kaders en stijlen (doorlopende stijlen,
        wisselprofielen)</p>

        <p>Ziehier het detail van beide punten :</p>

        <p></p>

        <p></p>

        <p> <br>
        </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table cellspacing="0" cellpadding="0" border="0"
        style="border: none border-spacing:0px;">
          <tbody>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 8px 0px 0px 5px;"><img src="img/img_48.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_48"></p>
              </td>
              <td width="214" style="width: 214px;"><p
                style="margin: 8px 0px 0px 5px;"><img src="img/img_49.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_49"></p>
              </td>
              <td width="216" style="width: 216px;"><p
                style="margin: 8px 0px 0px 5px;"><img src="img/img_50.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_50"></p>
              </td>
              <td width="211" style="width: 211px;"><p
                style="margin: 8px 0px 0px 5px;"><img src="img/img_51.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_51"></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 5px;"><img src="img/img_52.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_52"></p>
              </td>
              <td width="214" style="width: 214px;"><p
                style="margin: 0px 0px 0px 5px;"><img src="img/img_53.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_53"></p>
              </td>
              <td width="216" style="width: 216px;"><p
                style="margin: 0px 0px 0px 5px;"><img src="img/img_54.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_54"></p>
              </td>
              <td width="211" style="width: 211px;"><p
                style="margin: 0px 0px 0px 5px;"><img src="img/img_55.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_55"></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 5px;"><img src="img/img_56.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_56"></p>
              </td>
              <td width="214" style="width: 214px;"><p
                style="margin: 0px 0px 0px 5px;"><img src="img/img_57.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_57"></p>
              </td>
              <td width="216" style="width: 216px;"><p
                style="margin: 0px 0px 0px 5px;"><img src="img/img_58.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_58"></p>
              </td>
              <td width="211" style="width: 211px;"><p
                style="margin: 0px 0px 0px 5px;"><img src="img/img_59.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_59"></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="229" style="width: 229px;"><p
                style="margin: 0px 0px 0px 5px;"><img src="img/img_60.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_60"></p>
              </td>
              <td width="214" style="width: 214px;"><p
                style="margin: 0px 0px 0px 5px;"><img src="img/img_61.jpg"
                width="250" height="250" border="0" vspace="1" hspace="1"
                alt="img_61"></p>
              </td>
              <td colspan="2">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

                <table cellspacing="0" cellpadding="0" border="2"
                style="border: solid 4px #ff0000; border-spacing:0px; border-collapse: collapse;">
                  <tbody>
                    <tr valign="top" align="left">
                      <td width="213"
                      style="width: 213px; border: solid 2px #ff0000;"><p><img
                        src="img_62.jpg" width="250" height="250" border="0"
                        vspace="1" hspace="1" alt="img_62"></p>
                      </td>
                      <td valign="top" width="227"
                      style="width: 227px; border: solid 2px #ff0000;"><p><img
                        src="img_63.jpg" width="250" height="250" border="0"
                        vspace="1" hspace="1" alt="img_63"></p>
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

        <p style="margin: 0px 0px 0px 5px;"><span
        class="f_ImageCaption"> </span></p>

        <p style="margin: 8px 0px 0px 5px;"><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #0000ff;">X0,
        X1, Y0, Y1 </span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">:
        </span>corresponderen met de variabelen X0, X1, Y0, Y1.</p>

        <p style="margin: 8px 0px 0px 5px;"><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #808080;">x0,
        x1, y0, y1</span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #0000ff;"></span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">:</span>
        corresponderen met de variabelen <span class="f_Variables">X0Segment
        []</span>, <span class="f_Variables">X1Segment []</span>, <span
        class="f_Variables">Y0Segment []</span>, <span
        class="f_Variables">Y1Segment []</span>.</p>

        <p style="margin: 8px 0px 0px 5px;"><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #339966;">a1,
        a2</span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #0000ff;"></span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">:
        </span><span style="font-family: 'Tahoma'; color: #000000;"><span
        style="font-family: 'Tahoma'; color: #000000;"></span>corresponderen
        met de variabelen </span><span class="f_Variables">Angle1Segment
        []</span><span style="font-family: 'Tahoma'; color: #000000;">,
        </span><span class="f_Variables">Angle2Segment []</span><span
        style="font-family: 'Tahoma'; color: #000000;">.</span></p>

        <p style="margin: 8px 0px 0px 5px;"><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #ff0000;">1,
        2</span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #0000ff;"></span><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">:
        </span><span
        style="font-family: 'Tahoma'; color: #000000;"></span><span
        style="font-family: 'Tahoma'; color: #000000;">corresponderen met de
        variabelen <strong><span style="color:#0000a0">angle</span></strong>1
        en <strong style="color:#0000a0">angle2</strong>.(<strong
        style="color:#0000a0">hoek1 en hoek2</strong>)</span></p>

        <p style="margin: 8px 0px 0px 5px;"><img src="img/img_64.jpg" width="22"
        height="22" border="0" vspace="1" hspace="1" alt="img_64"><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">&hellip;
        : correspondeerd met de variabele <strong><span
        style="color:#0000a0">NumeroSegment.
        (Segmentnummer)</span></strong></span><strong><span
        style="color:#0000a0"><span
        style="font-family: 'Tahoma'; color: #000000;"></span><span
        style="font-family: 'Tahoma'; color: #000000;">.</span></span></strong></p>

        <p style="margin: 8px 0px 0px 5px;"><span
        style="font-family: 'Tahoma'; color: #000000;">- - - - De streeplijn
        vertegenwoordigt de fictieve kader aan de onderzijde van een leeg
        deel.</span></p>

        <p><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #000000; text-decoration: underline;"> </span></p>

        <p><span
        style="font-family: 'Tahoma'; font-weight: bold; color: #000000; text-decoration: underline;"> </span></p>

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
                7.0.45 tot 48</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">01/06/04
                tot 30/06/04</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Nieuwe tekenfuncties :</span></p>

        <p></p>

        <p><img alt="vb1" src="rn7045_1.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"
        width="816" height="483"></p>

        <p></p>

        <p><img alt="vb2" src="rn7045_2.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"
        width="863" height="540"></p>

        <p></p>

        <p><img alt="vb3" src="rn7045_3.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"
        width="942" height="457"></p>

        <p></p>

        <p><strong><span style="color:#0000a0">FWLFormeGlobale</span></strong>
        (largeurtotale, hauteurGauche, hauteurDroite)
        (TotaleBreedte,HoogteLinks,HoogteRechts)</p>

        <p>Men moet specificeren OFWEL breedte aan de linkerkant OFWEL aan de
        rechterkant (de keus, hangt af van diegene welke men reeds kent), de
        niet gespecificeerde hoogte moet op 0 gezet worden .Stuurt een
        &ldquo;waar&rdquo; of &ldquo;onwaar&rdquo; terug indien er een fout of
        niet optreedt.</p>

        <p></p>

        <p><strong><span style="color:#0000a0">FWLFormeHaut
        </span></strong>(type, hauteur, rayon,
        largeur)(type,hoogte,straal,breedte)</p>

        <p><strong><span style="color:#0000a0">FWLFormeBas</span></strong>
        (type, hauteur, rayon, largeur) )(type,hoogte,straal,breedte)</p>

        <p>De 2 functies staan toe vormen op de bovenzijde of onderzijde te
        definieren.Er bestaan 11 types van vormen (0 tot 10).Volgens de
        keuze,wijzigen het aantal benodigde parameters. :</p>

        <p style="margin-left:2em;">* In de vorm 0, vertegenwoordigt de 3de
        parameter de hellingshoek.</p>

        <p style="margin-left:2em;">* De breedte, gebruikt in de Béziers,
        vertegenwoordigd NIET de breedte van de kromme (welke wordt berekend in
        functie van de hoogte en de straal),maar wel de platte breedte links
        van de kromme.</p>

        <p style="margin-left:6em">* Deze breedte kan positief of 0 zijn.</p>

        <p style="margin-left:6em">* Indien deze negatief is (ongeacht zijn
        waarde),wordt de kromme gecentreerd in het midden van de vorm (in geval
        van type 7 en 8,worden de kromme gecentreerd op ¼ en ¾ van de vorm).</p>

        <p style="margin-left:6em">Indien deze te groot is
        (breedte+breedtebezier&gt; totalebreedte)en dat zij Béziers zou laten
        overlopen buiten de vorm, kiest het programma automatisch de toegelaten
        grootste waarde. Dat heeft als gevolg in de vormen 5 en 6 om de kromme
        aan de rechterkant te stutten; en in de vormen 7 en 8 om beide Béziers
        te plakken aan het centrum van de vorm (de lengte van de platte boog in
        midden is nu nul)</p>

        <p style="margin-left:6em">* Het is niet mogelijk om direct een Bezier
        te tekenen in een globale vorm want de breedte zal kleiner zijn dan de
        breedte van de Bezier (berekend).&#xf020;De enige wijze om erin te
        slagen is een grotere waarde te geven aan de totale breedte (zonder de
        vorm van Bezier te wijzigen) en een genoteerde shrink op de linkerkant
        of recht (of beide) te gebruiken. Dat maakt het mogelijk om in de
        eerste ontmoete boog aan te komen, maar niet verder.</p>

        <p>De aantallen tussen haakjes zijn alleen aanwijzingen van orde van
        grootheid. Wanneer er absurde waarden (te kleine straal voor de
        bogen...) in parameter worden gegeven, tekenen de vormen zich
        doodeenvoudig niet.Deze functies sturen het nummer van de vorm terug
        die zij (0-&gt;10) of -1 bepalen als er een fout bij de definitie van
        de parameters was. Opgelet: alle soorten fouten worden niet hier
        ontdekt, men moet soms wachten om de berekeningen uitgevoerd te hebben
        om te beseffen dat er een probleem is.</p>

        <p></p>

        <p><img alt="tb1" src="rn7045_4.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"
        width="679" height="729"></p>

        <p></p>

        <p><strong><span style="color:#0000a0">FWLLattes</span></strong>
        (epaisseur1, epaisseur2, inclinaison, décalagedébut, deportmin,
        déportmax) (Dikte1,Dikte2,inclinaison, décalagedébut, deportmin,
        déportmax)</p>

        <p>Dikte1 bepaald de dikte zichtbaar (zonder rand)van de latten
        (Positief).</p>

        <p>Dikte2 kan 0 zijn (en dus gebruiken we enkel dikte1) of Positief :
        beide diktes zullen afgewisseld worden teneinde bijvoorbeeld de staven
        te creëren.</p>

        <p>Inclinaison moet tussen -89.99° en +90° liggen. Vermijdt echter
        bijna rakende hellingen met de krommen van de vormen</p>

        <p>Decalagedébut is meestal nul maar kan tussen 0 en 1 (of zelfs meer
        als men weet wat men doet) zijn. In feite gaat het om een percentage
        dat Dikte1 zal vermenigvuldigen teneinde centrale latten te verplaatsen
        (eerste getekende latten). Deze parameter verliest zijn nut als men
        deportmin/deportmax. gebruikt.</p>

        <p>Voorbeeld:</p>

        <p><img alt="tb2" src="rn7045_5.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"
        width="604" height="195"></p>

        <p></p>

        <p></p>

        <p>Deportmin en deportmax betreffen barreaudage en slechts gebruikt als
        de helling 90° is (anders, moet men ze 0 laten). in dit geval, zult u
        eveneens aan Dikte1 de dikte van een staaf moeten geven en Dikte2
        tussenruimte tussen de staven.</p>

        <p>Als u deze instructies eerbiedigt, zal het programma de leegtes niet
        meer tellen zoals latten en de nummering van latten zal dus intuïtiever
        zijn (aantal: eerste latten bevindt zich aan de rechterkant en draagt
        het nummer 1, de laatste is aan de linkerkant en draagt het nummer «
        fwlnombredelattes() ».</p>

        <p></p>

        <p>De voorbeelden om op verschillende wijze de instructie FWLLattes te
        gebruiken ():</p>

        <p></p>

        <p><img alt="tb6" src="rn7045_6.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"
        width="624" height="318"></p>

        <p></p>

        <p>Als men een tusseninterval wil toepassen die over de staven wordt
        verdeeld, voldoet het om de waarde van deportmax aan te zetten - NbBar;
        NbBar vertegenwoordigt het aantal gewenste staven. Men kan toch een
        koersdaling (zonder verdraagzaamheid) in de variabele bepalen
        deportmin.</p>

        <p>Voorbeeld van barreaudage met toleranties:</p>

        <p>De functie stuurt waar of onwaar volgens het feit of er een fout is
        of niet.</p>

        <p></p>

        <p><img alt="afb7" src="rn7045_7.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"
        width="853" height="536"></p>

        <p></p>

        <p><strong><span style="color:#0000a0">FWLShrink</span></strong>
        (shrinkgauche, shrinkhaut, shrinkdroit, shrinkbas)</p>

        <p>Het is een facultatieve instructie, in tegenstelling tot deze tot nu
        toe gezien</p>

        <p>Zij maakt het mogelijk om te vernauwen of (positieve waarde)
        (negatieve waarde) elke 4 genoteerd van de vorm te vergroten teneinde
        een dikte van eenvormig profiel te behouden.</p>

        <p>Aandacht echter in Béziers (types 5,.6,.7, 8):</p>

        <p>- geen waarden invoeren welke veel groter zijn dan de straal</p>

        <p>- [aktueel] niet genoteerd de linkerkant en recht vernauwen over het
        buigingspunt van Bézier (niet de eerste boog overschrijden, maar men
        kan binnen zijn)</p>

        <p></p>

        <p><strong><span style="color:#0000a0">FWLEncastrement</span></strong>
        (encastrement)</p>

        <p>Het is een facultatieve instructie, met de standaardwaarde van 0.</p>

        <p>Zij maakt het mogelijk om de breedte van encastrement van twee
        lattes in een verticaal of schuin vullen te bepalen. Een positieve
        waarde vergroot de dikte van latte door "hoog" (zie tekening op de
        volgende bladzijde), een negatieve waarde het vergroot door "de
        onderkant".De absolute waarde van "encastrement" zal aan "dikte1" of
        "dikte2" toegevoegd worden om te rekenen FWLResEpaisseur(numlatte).</p>

        <p></p>

        <p><img alt="afb8" src="rn7045_8.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"
        width="853" height="536"></p>

        <p></p>

        <p><strong><span
        style="color:#0000a0">FWLEffectuerCalcul()</span></strong></p>

        <p>Deze functie forceert de berekening van de vorm. Zij is niet
        absoluut noodzakelijk maar zij heldert de code op. De functie stuurt
        waar of onwaar volgens het feit of er een fout is of niet.</p>

        <p><strong><span
        style="color:#0000a0">FWLNombreDeLattes()</span></strong></p>

        <p>Stuurt de berekende aantal latten terug.Het programma berekend ook
        de eerste en de laatste latten (onvolledige, délignées lattes, kleine
        driehoeken...).</p>

        <p><strong><span
        style="color:#0000a0">FWLResDecalageHG(numlatte)</span></strong></p>

        <p style="color:#0000a0"><strong>FWLResDecalageHD(numlatte)</strong></p>

        <p style="color:#0000a0"><strong>FWLResMesureH(numlatte)</strong></p>

        <p style="color:#0000a0"><strong>FWLResMesureB(numlatte)</strong></p>

        <p style="color:#0000a0"><strong>FWLResAngleBG(numlatte)</strong></p>

        <p style="color:#0000a0"><strong>FWLResAngleBD(numlatte)</strong></p>

        <p style="color:#0000a0"><strong><span
        style="color:#0000a0">FWLResEpaisseur(numlatte)</span></strong></p>

        <p
        style="color:#0000a0">FWLResLongueurTot(numlatte)<strong></strong></p>

        <p></p>

        <p>Elke functie stuurt de waarde welke u toestaan de latten te verdelen
        (genummerd van 1 tot <strong><span
        style="color:#0000a0">FWLnombredelattes())</span></strong>.</p>

        <p>De dikte wordt normaal gekend maar in het geval van twee
        afgewisselde diktes, aangezien men met de tekening te midden van de
        vorm met een "dikte1" begint, weet men van tevoren niet welk de dikte
        van latten aan de einden zal zijn. Deze functie maakt het mogelijk om
        het te weten.</p>

        <p><img alt="afb9" src="rn7045_9.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"
        width="630" height="444"></p>

        <p></p>

        <p><strong><span
        style="color:#0000a0">FWLGetCoordLatteX0(numlatte)</span></strong></p>

        <p
        style="color:#0000a0"><strong>FWLGetCoordLatteY0(numlatte)</strong></p>

        <p style="color:#0000a0"><strong><span
        style="color:#0000a0">FWLGetCoordLatteY1(numlatte)</span></strong></p>

        <p style="color:#0000a0"><strong><strong><span
        style="color:#0000a0"></span></strong></strong><strong>FWLGetCoordLatteX1(numlatte)</strong></p>

        <p></p>

        <p>Deze functies sturen de ascoordinaten van elke lat.</p>

        <p>Aangezien de oorsprong op de linkse lagere hoek van de niet shrink
        vorm wordt geplaatst. *</p>

        <p></p>

        <p><img alt="afb10" src="rn7045_10.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"
        width="402" height="161"></p>

        <p></p>

        <p></p>

        <p>Noteer goed de positie van punt 1 (geel) en punt 0 (groen) : punt 1
        staat steeds links van punt 0 behalve in het geva van een verticale lat
        (90°) : punt 1 staat steeds onderaan het punt 0.</p>

        <p>Nb : de helling moet altijd tussen + 90° en -89.999° liggen.</p>

        <p></p>

        <p><img alt="afb11" src="rn7045_11.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"
        width="393" height="392"></p>

        <p></p>

        <p></p>

        <p><strong><span style="color:#0000a0">FWLGetYH(x)</span></strong></p>

        <p><strong><span style="color:#0000a0">FWLGetYB(x)</span></strong></p>

        <p></p>

        <p>Deze 2 functies sturen de y waarde correspoderende aan de gegeven xx
        waarde. Ze stuurt ofwel de y van de vorm boven ofwel de y van de vorm
        onder</p>

        <p>Begin (0,0) is gesitueerd in de linkeronderhoek van de vorm niet
        shrink. *</p>

        <p></p>

        <p><img alt="afb12" src="rn7045_12.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"
        width="854" height="536"></p>

        <p></p>

        <p></p>

        <p><strong><span
        style="color:#0000a0">FWLHauteurTot()</span></strong></p>

        <p>Geeft het hoogteverschil tussen de bovenhoek en de onderhoek van de
        vorm</p>

        <p></p>

        <p><strong><span
        style="color:#0000a0">FWLDecalageBas()</span></strong></p>

        <p>Stuurt de verschuiving in de hoogte tusen de 2 kleinste hoeken van
        de vorm.</p>

        <p></p>

        <p><strong><span
        style="color:#0000a0">FWLDecalageHaut()</span></strong></p>

        <p>Stuurt de verschuiving in de hoogte tusen de 2 grootste hoeken van
        de vorm.</p>

        <p></p>

        <p><strong style="color:#0000a0">FWLPerimetre(numcoté)</strong></p>

        <p>Stuurt de omtrek van één van de 4 zijden , d.w.z de lengte van een
        lijn die langs zijn kromming gaat.</p>

        <p>« numcoté » moet zijn 1=links, 2=boven, 3=rechts, 4=onder.</p>

        <p></p>

        <p><strong><span
        style="color:#0000a0">FWLInterPerimetreHaut(numvide)</span></strong></p>

        <p><strong><span
        style="color:#0000a0">FWLInterPerimetreBas(numvide)</span></strong></p>

        <p>Stuurt de lengte van de leegte (tussen twee staven) die aan
        hoog/onderkanten genoteerd wordt geplakt terug. Geldig alleen in een
        barreaudage (verticaal, met deportmin en deportmax). De
        tussen-afstanden leegtes worden van 0 aan fwlnombredelattes ()
        genummerd. Maakt het mogelijk om entretoises te berekenen.</p>

        <p><strong style="color:#0000a0">FWLInterBar()</strong></p>

        <p>Stuurt de tussenafstand (berekend) tussen twee staven in het geval
        van meerdere tussenafstanden met verdeelde tussenafstanden terug.</p>

        <p></p>

        <p><strong
        style="color:#0000a0">FWLRemplissage</strong>(dessinerlattes,dessinercroix,dessinercontour)</p>

        <p>Deze 3 parameters zijn 0 (=niet) of 1 (=ja) volgens dat je ze wil
        weergeven op de tekening</p>

        <p></p>

        <p><strong><span
        style="color:#0000a0">FWLDessiner</span></strong>(x,y,mirroir)</p>

        <p>Het is deze instructie die de tekening van de vorm produceert, zijn
        lage lagere hoek zal de linkerkant (niet shrinké *) op het punt (x, y)
        in grafische coordinaten geplaatst worden.</p>

        <p>Mirroir kan 1 zijn of -1. zet men het om -1 om de vorm terug te
        sturen volgens een verticale lijn van symmetrie. Dat maakt het mogelijk
        om (een lijn) het tweede half portaal zeer snel te tekenen wanneer men
        reeds de eerste heeft beschreven. Deze tekeninginstructie draagt
        eveneens de 5 nieuwe functies "chemin" voor de gehele vorm</p>

        <p></p>

        <p><strong
        style="color:#0000a0">FWLDessinerUneLatte</strong>(x,y,mirroir,numlatte,mode)</p>

        <p>Deze instructie gedraagt zich als FWLDessiner, maar om één latte
        (numlatte) te tekenen, hetgeen het mogelijk maakt om elke latte los te
        kleuren</p>

        <p>Het is beter dezelfde x,y te gebruiken welke een spiegeling is van
        FWLDessiner, als zij gelijktijdig worden gebruikt! * De manier maakt
        het mogelijk om enkele tekeningvarianten van latte te bepalen.
        Aandacht: dit betreft slechts de display van de tekening, de zijden
        veranderen niet. Hij kan 3 waarden hebben:</p>

        <p style="margin-left:4em">* 0 =Normaal : tekening benaderd geleverde
        maten, zonder rekening te houden met encastrement.</p>

        <p style="margin-left:4em">* 1 =Goed: als latte in een van de 4 hoeken
        van de vorm valt, stelt de tekening zich vrij af om niet meer met de
        maten overeen te stemmen. Opgelet: deze parameter is vooral te
        gebruiken in vormen nabij een rechthoek en waar de oriëntatie nabij aan
        + 45° of -45° is.</p>

        <p style="margin-left:4em">* 2 = exact : De tekening komt volledig
        overeen met de geleverde afmetingen die daartegenover door de functies
        FWLRes###### (numlatte) worden geleverd, met inbegrip van
        encastrementl</p>

        <p><img alt="afb13" src="rn7045_13.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"
        width="502" height="298"></p>

        <p></p>

        <p><img alt="afb14" src="rn7045_14.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"
        width="438" height="257"></p>

        <p><span
        style="font-family: Times New Roman,Times,serif; font-style: oblique; font-weight:bold; text-decoration: underline;">Opmerkingen
        :</span></p>

        <p></p>

        <p>De 4 eerste functies van de interpretor(FWLFormeGlobale,
        FWLFormeHaut, FWLFormeBas, FWLLattes) zijn absoluut noodzakelijk voor
        de aanmaak van elke vorm, welke het ook is. Zelfs wanneer men geen
        vulling met latten verlangt, moet men toch de instructie FWLLattes
        geven [en hem fictieve waarden geven: FWLLattes (100,0,90,0,0,0) ].</p>

        <p></p>

        <p>De instructie FWLShrink is theoretisch facultatief, maar u zult zien
        dat in de praktijk zeer weinig vormen juist zullen zijn als u de
        instructie Shrink negeert. Zelfs wanneer zijn gevolgen een beetje
        obscuur kunnen lijken, is het een verplichte stap om een juist
        resultaat te bereiken</p>

        <p></p>

        <p></p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

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
                7.0.44</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">26/05/04</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">&bull;Gebeurtenissen in productie
        :</span> Een beheer van alle gebeurtenissen wordt toegevoegd aan de
        module arbeidsposten in het atelier. Dit staat u toe voor elke post een
        lijst te definiëren met de mogelijke gebeurtenissen per post,en staat
        toe of niet extra commentaar toe te voegen per arbeidpost. Deze
        definitie is beschikbaar vanuit het menu Techniek | Productie |
        Gebeurtenissen. Verder,kan op elke arbeidspost, de daar gebeurde
        gebeurtenissen gemeld worden .Hiervoor dient u in de winpro.ini welke
        zich in de directory van elke arbeidpost bevindt de variabele
        <strong><span style="color:#0000a0">Incidents=1</span></strong>
        toevoegen. Op de posten waar de terugkoppeling is toegestaan verschijnt
        dan een extra knop, « <strong style="color:#0000a0">Gebeurtenis
        [F3]</strong> ». Indien hier op geklikt wordt,of u klikt op de knop F3,
        verschijnt een dialoogscherm,welke u toestaat een gebeurtenis (van de
        toegestane lijst) te melden, eventueel met extra opmerkingen. Deze
        gebeurtenissen kunnen dan bekeken worden vanaf de pagina Lopende
        fabricatie per systeem in de bestelling</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">&bull;Commentaar voor fabricatie
        :</span> Het commentaar voor de werkplaats,welke vanaf het tabblad «
        raam » wordt ingegeven,kunnen nu ook rechtstreeks verschijnen op het
        scherm in het atelier. Voor dit,dient u,op elke betrekkende arbeidspost
        in de winpro.ini,welke zich op deze arbeidspost bevindt het volgende
        toe te voegen. <span
        style="font-weight: bold; color: #666699;">Comment=1</span></p>

        <p style="text-align: center; margin: 0px 0px 0px 35px;"><span
        class="f_ImageCaption"> </span></p>

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
                7.0.42</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">14/05/04</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">&bull;Standaard tariefcode :</span>
        U kan in de sectie [System] van de WinPro.ini een standaard tariefcode
        ingeven voor de bestelling. Deze standaardcode wordt gebruikt van zodra
        er geen tariefcode geassocieerd is met de klant in de bestelling.</p>

        <p> </p>

        <p><span class="f_Winproini">[System]</span></p>

        <p><span class="f_Winproini">Tarif = </span></p>

        <p> </p>

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
                7.0.41</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">5/05/04</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">&bull;Aantal af te drukken
        documenten</span> Voor elk document welke vanuit WPREPORT afgedrukt
        wordt,heeft u nu de mogelijkheid om het aantal kopie's in te voeren</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">&bull;Meerdere documenten in
        WPReport</span> Voor elke afdruk vanuit WPReport, kan u nu meerdere
        dokumenten definiëren welke afgedrukt dienen te worden</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">&bull;Zagen:</span> Het max aantal
        zagen in WinPro wordt uitgebreid van 99 naar 999.</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
