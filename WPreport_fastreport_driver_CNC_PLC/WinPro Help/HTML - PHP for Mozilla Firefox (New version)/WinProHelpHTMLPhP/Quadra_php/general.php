<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Overview","Généralités","Algemeen"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?general.php"; }
else { parent.quicksync('a3'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Généralités</title>
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
        href="introduction.php">Top</a>  <a
        href="traductions.php">Previous</a>  <a href="ordrecalcul.php">Next</a>
        </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>WinPro uses a configurator to compute windows. This configurator
        uses its own <a href="langage.php">integrated programming language</a>.
        This programming language is especially efficient to control how each
        basic element is used. This gives you a great freedom to define the
        special conditions you need.</p>

        <p> </p>

        <p>WinPro makes its windows computation in several steps:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">1.</span></td>
              <td>Dimensions computation. This first step computes the size and
                position of every main element of the window (outer frame,
                sash, transom, etc...). </td>
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
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">2.</span></td>
              <td>Components computation. This second step builds the list of
                all the elements qhich you use to build a window (profiles,
                articles, fillings, millings, ...) </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="background: #fffff2;"><span style="color: #000000;">Each step
        is divided in several sub-steps:</span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/onestep.gif" width="4"
        height="8" border="0" alt="onestep"> Computation of outer frames,
        sashes, transoms, etc...</p>

        <p style="margin: 0px 0px 0px 48px;"><img src="img/onestep.gif" width="4"
        height="8" border="0" alt="onestep"> For sashes and fittings, each leaf
        is computed individually.</p>

        <p style="margin: 0px 0px 0px 72px;"><img src="img/onestep.gif" width="4"
        height="8" border="0" alt="onestep"> For frames, each side of the frame
        is computed separately; for roller shutter slides, each slide is
        computed individually.</p>

        <p style="margin: 0px 0px 0px 96px;"><img src="img/onestep.gif" width="4"
        height="8" border="0" alt="onestep"> For each part of the window,
        computation of each category of components (profiles, articles, labour,
        ...)</p>

        <p style="margin: 0px 0px 0px 120px;"><img src="img/onestep.gif" width="4"
        height="8" border="0" alt="onestep"> Computation of the formula linked
        to each individual component (profile, article, ...); depending on the
        result of this computation, WinPro will choose to keep the component or
        not.</p>

        <p><span style="color: #000000;"> </span></p>

        <p>Computation in each of the two main steps is carried in a specific
        order. This order is different for each step.</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>For the dimensions computations, the data typed by the user
                are used as a starting point: width, height, transom position,
                type of outer frame, ...; globally, the computation is made
                from the outside of the window towards the inside of the
              window.</td>
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
              <td>For the components computation, the computation is made in
                reverse order, so that results of computations made for inner
                elements can be used for outer elements.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="background: #fffff2;"><span style="color: #000000;">The <a
        href="ordrecalcul.php">computation order</a> is described in the next
        page.</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

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
                style="font-weight: bold; text-decoration: underline;">Note</span><span
                style="text-decoration: underline;">:</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">The second step (components
                computation) will be computed by WinPro only when necessary.
                Specifically, this computation will not be made when drawing
                the window. This is because the first step provides enough
                informations to draw the window correctly, which considerably
                speeds up the drawing. However, there is a drawback: the
                drawing formulas cannot use the results of the computation
                formulas. This implies that you sometimes have to duplicate in
                the drawing formulas some of the computations you make in the
                components (e.g. to compute the number and position of
                hinges).</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p> </p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;"> </span></p>

        <p><span style="font-size: 11pt;"> </span></p>

        <p><span style="font-size: 11pt;"> </span></p>
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

        <p>WinPro utilise pour le calcul des fenêtres un configurateur, qui
        exploite un <a href="langage.php">langage de programmation intégré</a>.
        Ce langage de programmation se révèle particulièrement efficace pour
        contrôler les conditions d'utilisation de chaque composant élémentaire,
        tout en procurant une grande liberté de paramétrage. </p>

        <p>WinPro décompose le calcul des fenêtres en plusieurs étapes:</p>

        <p style="margin: 0px 0px 0px 24px;">1. Calcul dimensionnel. Ce calcul
        permet de calculer la taille et la position de chaque élément de la
        fenêtre (dormant, ouvrant, traverse, etc...)</p>

        <p style="margin: 0px 0px 0px 24px;">2. Calcul de composants. Cette
        deuxième étape établit la liste de tous les éléments constitutifs de la
        fenêtre (profils, articles, main d'oeuvre, remplissages, usinages,
        ...)</p>

        <p> </p>

        <p>Chaque étape est elle-même divisée en plusieurs niveaux:</p>

        <p style="margin: 0px 0px 0px 27px;"><img src="img/onestep.gif" width="4"
        height="8" border="0" alt="Onestep"> Calcul du dormant, des ouvrants,
        des traverses, etc...</p>

        <p style="margin: 0px 0px 0px 40px;"><img src="img/onestep.gif" width="4"
        height="8" border="0" alt="Onestep"> Pour les ouvrants et les
        quincailleries : calcul individuel de chaque vantail.</p>

        <p style="margin: 0px 0px 0px 53px;"><img src="img/onestep.gif" width="4"
        height="8" border="0" alt="Onestep"> Pour les cadres, calcul individuel
        de chaque côté du cadre; pour les coulisses de volets roulants, calcul
        individuel de chaque coulisse</p>

        <p style="margin: 0px 0px 0px 67px;"><img src="img/onestep.gif" width="4"
        height="8" border="0" alt="Onestep"> Calcul de chaque catégorie de
        composant élémentaire (profils, articles, main d'oeuvre, ...)</p>

        <p style="margin: 0px 0px 0px 80px;"><img src="img/onestep.gif" width="4"
        height="8" border="0" alt="Onestep"> Évaluation de la formule liée à
        chaque composant individuel (profil, article, ...); suivant le résultat
        de cette évaluation, WinPro décide de conserver le composant ou non.</p>

        <p> </p>

        <p>Le calcul dans chacune des deux étapes de base est effectué selon un
        ordre précis, mais différent entre les deux étapes pour des raisons de
        logique:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>pour le calcul dimensionnel, on part des données saisies par
                l'utilisateur (largeur, hauteur, position des traverses, type
                de dormant, ...); globalement, le calcul se fait de l'extérieur
                vers l'intérieur de la fenêtre; </td>
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
              <td>pour le calcul de composants, on part dans le sens inverse,
                car il peut être utile de cumuler des informations tout au long
                du calcul pour les traiter en fin de calcul, au niveau du
                dormant p.ex.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-size: 12pt; font-family: 'Times New Roman';"> </span></p>

        <p><a href="ordrecalcul.php">L'ordre de calcul</a> est décrit dans la
        page suivante.</p>

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
                style="font-weight: bold; text-decoration: underline;">Remarque</span><span
                style="text-decoration: underline;">:</span></p>

                <p style="margin: 0px 0px 0px 13px;">La deuxième étape (calcul
                des composants) ne sera effectuée par WinPro que lorsque c'est
                nécessaire. En particulier, ce calcul ne sera pas fait pour
                afficher le dessin d'une fenêtre. En effet, la première étape
                suffit à ce calcul. L'affichage des dessins en est ainsi
                considérablement accéléré. Toutefois, cette méthode présente un
                inconvénient: les formules de dessin ne peuvent pas s'appuyer
                sur le calcul des composants. Il faut donc parfois dupliquer
                une partie des calculs de composants dans les dessins (p.ex.
                pour déterminer le nombre et la position des charnières).</p>
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

<div class="NED">

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>WinPro gebruikt een configurator om ramen en deuren te berekenen,
        Deze configurator gebruikt zijn eigen <a
        href="langage.php">geintegreerde programmeertaal</a>. Deze
        programmeertaal is uiterst efficient om te controleren hoe elk basis
        element gebruikt wordt. Dit geeft u een grote vrijheid en flexibiliteit
        om speciale voorwaarden voor het gebruik van elementen in een raam te
        definiëren.</p>

        <p> </p>

        <p>WinPro berekend de ramen in verschillende stappen:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">1.</span></td>
              <td>Berekening afmetingen. De eerste stap berekend de afmeting en
                positie van elk basis element van een raam of deur
                (kader,vleugel,stijl,...enz...) </td>
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
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">2.</span></td>
              <td>Berekening van onderdelen. Deze tweede stap bouwt een lijst
                op van alle onderdelen welke benodigd zijn om een raam of deur
                samen te stellen (profielen,artikelen,beslag,bewerkingen, ...)
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="background: #fffff2;"><span style="color: #000000;">Elke stap
        is onderverdeeld in verschillende sub-stappen:</span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/onestep.gif" width="4"
        height="8" border="0" alt="onestep"> Berekening van kaders,vleugels
        stijlen,enz....</p>

        <p style="margin: 0px 0px 0px 48px;"><img src="img/onestep.gif" width="4"
        height="8" border="0" alt="onestep"> Voor vleugels en
        beslagsamenstellingen,wordt elke vleugel afzonderlijk berekend.</p>

        <p style="margin: 0px 0px 0px 72px;"><img src="img/onestep.gif" width="4"
        height="8" border="0" alt="onestep"> Voor kaders, wordt elke zijde
        afzonderlijk berekend, voor rolluikbladen, wordt elk blad afzonderlijk
        berekend.</p>

        <p style="margin: 0px 0px 0px 96px;"><img src="img/onestep.gif" width="4"
        height="8" border="0" alt="onestep"> Voor elk deel van een raam,wordt
        elke categorie van elk onderdeel berekend (profelen,artikelen,arbeid,
        ...)</p>

        <p style="margin: 0px 0px 0px 120px;"><img src="img/onestep.gif" width="4"
        height="8" border="0" alt="onestep"> Berekening van elk formule welke
        gekoppeld is aan een individueel ondereel (profiel,artikel,...)
        afhankelijk van het resultaat van deze berekening, zal Winpro bepalen
        of dit onderdeel berekend moet worden of niet.</p>

        <p><span style="color: #000000;"> </span></p>

        <p>Berekening van elk van de 2 stappen gebeurd in een bepaalde
        volgorde.Deze volgorde is verschillend in elke stap.</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Voor de berekning van de afmetingen,wordt de data welke
                ingoerd is door de gebruiker gebruikt als startpunt : breedte,
                hoogte, positie stijl/regel, type van buitenkader,....;
                algemeen, de berekening gebeurd vanaf de buitenzijde van het
                raam naar de binnenzijde van dat raam.</td>
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
              <td>Voor de berekening van de onderdelen, wordt de berekening in
                omgekeerde volgorde uigevoerd, de resulaten van de berekening
                vanaf de binnenzijde kunnen aldus gebruikt worden voor de
                onderelen welke aan de buitenzijde gebruikt worden.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p style="background: #fffff2;"><span style="color: #000000;">De <a
        href="ordrecalcul.php">berekeningsvolgorde</a> wordt beschreven op de
        volgende pagina.</span></p>

        <p class="p_Interligne"><span class="f_Interligne"> </span></p>

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
                style="font-weight: bold; text-decoration: underline;">Opmerking</span><span
                style="text-decoration: underline;">:</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">De tweede stap (onderdelen berekening)
                zal enkel door Winpro berekend worden indien dit nodig is.In
                speciaal geval, wordt deze ebrekening niet uitgevoerd bij het
                tekenen van het raam of deur.Dit komt omdat de eerste stap
                reeds voldoende informatie bevat om de tekening correct te
                tekenen, wat natuurlijk de snelheid van het tekenen ten goede
                komt. Hoewel,er is ook een nadeel: de tekening formules kunnen
                het resultaat van een berekening formule niet geberuiken.Dit
                impliceert dat je in sommige gevallen de formules van
                berekening dient te kopieëren in deze van de tekening formules.
                (vb. om het aantal en posities van de scharnieren te
                berekenen).</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p> </p>

        <p style="margin: 0px 0px 0px 40px;"><span
        style="font-size: 11pt; font-family: 'Courier New'; font-weight: bold; color: #0000ff;"> </span></p>

        <p><span style="font-size: 11pt;"> </span></p>

        <p><span style="font-size: 11pt;"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
