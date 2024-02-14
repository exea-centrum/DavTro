<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["FRA","NED"];
var WinProHelpPageName=["7.0.1x","7.0.1x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?rn701x.php"; }
else { parent.quicksync('a11.6.7'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>7.0.1x</title>
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
        href="introduction.php">Top</a>  <a href="rn702x.php">Previous</a>  <a
        href="rn700x.php">Next</a> </span> </td>
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
                7.0.19</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">9/12/03</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Filtres sur les clients et les
        articles:</span> De manière similaire aux filtres sur les composants
        techniques (système, couleur, dormant, ...), une formule de filtre a
        été ajoutée aux tables clients et articles. </p>

        <p>Ces filtres sont actifs au niveau de la saisie de commande, et
        tiennent compte des formules site et utilisateur, ainsi que de la
        formule client pour le filtre sur les articles.</p>

        <p> </p>

        <p><span class="f_Heading1"
        style="text-decoration: underline;">Coloration des listes:</span> les
        différentes formules de filtre vous permettent aussi de colorer chaque
        ligne apparaissant dans une liste. </p>

        <p>Cette coloration s'applique au niveau de la saisie de commande. Pour
        définir la coloration, vous disposez de deux variables: <span
        class="f_Variables">_CouleurTexte</span> et <span
        class="f_Variables">_CouleurFond</span>. </p>

        <p>Ces deux variables peuvent prendre l'une des valeurs suivantes:
        <span class="f_Variables">_@Noir</span>, <span
        class="f_Variables">_@Bleu</span>, <span
        class="f_Variables">_@Vert</span>, <span
        class="f_Variables">_@Cyan</span>, <span
        class="f_Variables">_@Rouge</span>, <span
        class="f_Variables">_@Magenta</span>, <span
        class="f_Variables">_@Jaune</span>, <span
        class="f_Variables">_@Gris</span>.</p>

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
                7.0.18</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">5/12/03</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Historique des commandes
        fournisseur:</span> Dorénavant, lorsqu'une commande fournisseur est
        clôturée, elle est transférée dans une table historique (HistoFou.dbf).
        </p>

        <p>Cela permet de présenter un nouvel onglet dans la saisie de
        commande, qui contient la liste des articles commandés spécifiquement
        pour la commande client, et de visualiser si les articles sont rentrés
        et si non pur quelle date leur rentrée est prévue. </p>

        <p>Cette visualisation n'est bien entendu disponible que pour les
        licences comportant la gestion des commandes fournisseur. </p>

        <p>Pour faciliter la lecture, les articles rentrés en stock sont
        affichés sur fond vert, ceux en attente de livraison sur fond rouge.
        Vous pouvez donc très facilement vérifier si les fournitures
        spécifiques d'une commande sont rentrées.</p>

        <p>De plus, un champ Chassis a été ajouté à la table des commandes
        fournisseur. Ce champ contient le numéro de repère pour lequel
        l'article est commandé. </p>

        <p>Ce champ est affiché dans le nouvel onglet, ce qui vous permet de
        déterminer avec plus de précision quels sont les fournitures
        manquantes.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Encours de production:</span> Un
        nouvel onglet dans la saisie de commande vous permet de visualiser
        l'encours de production, et l'état d'avancement de chaque menuiserie.
        </p>

        <p>Cet onglet tient compte des postes d'atelier, si vous disposez de ce
        module.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Prix de l'aluminium:</span> Vous
        pouvez définir le prix du Kg d'aluminium par fournisseur. Vous disposez
        pour cela d'un champ supplémentaire dans la fiche fournisseur. </p>

        <p>Au niveau de la fiche article, sur la page prix, une case à cocher
        vous permet de définir que le prix de l'article est calculé selon le
        poids de l'article, et ce prix au Kg.</p>

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
                7.0.17</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">3/12/03</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Table Lin.dbf:</span> un nouveau
        champ, Var, a été ajouté; le contenu de ce champ est défini par une
        variable <span class="f_Variables">VarLin</span>, qui peut être définie
        dans la formule liée à chaque élément calculé.</p>

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
                7.0.14 à 16</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">27/10/03</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Questions globales:</span> WinPro
        peut automatiquement afficher les questions de commande lors de la
        création d&rsquo;une nouvelle commande. </p>

        <p>Il faut alors ajouter une clé dans le fichier WinPro.ini :</p>

        <p><span style="font-weight: bold; color: #666699;">[System]</span></p>

        <p><span style="font-weight: bold; color: #666699;">Questions
        Globales=1</span></p>

        <p><span style="font-weight: bold; color: #666699;"> </span></p>

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
                7.0.14 à 16</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">12/10/03</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">Questions générales:</span> Vous
        pouvez définir des questions de commande. Ces questions sont posées
        globalement pour toute la commande. </p>

        <p>Vous pouvez définir plusieurs jeux de questions, et lier chaque
        client à un jeu de question. La liaison client / jeu de question se
        fait par en assignant une valeur à la variable globale <span
        class="f_Variables">_Question</span>, au niveau de la formule client,
        utilisateur ou site. </p>

        <p>Le contenu de cette variable sera associé au champ catégorie défini
        au niveau des jeux de questions.</p>

        <p>L&rsquo;utilisation des questions de commandes obéit à des règles
        particulières :</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Dès sélection d&rsquo;un client, le jeu de questions associé
                au client est chargé, avec ses réponses par défaut.</td>
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
              <td>Il est possible de modifier les réponses à ces questions en
                cliquant sur le bouton &lsquo;Questions&rsquo; qui se trouve à
                côté du numéro de commande.</td>
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
              <td>Ce jeu de questions / réponses est lié aux châssis qui sont
                encodés à la suite.</td>
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
              <td>Il est possible de changer les réponses en cours de saisie.
                Toutefois, les réponses déjà faites pour les châssis déjà
                encodés ne sont plus modifiables. Les nouvelles réponses
                n&rsquo;affecteront que les châssis créés après la modification
                des réponses.</td>
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
              <td>Pour chaque châssis encodé, le jeu de questions / réponses
                est mémorisé tel quel, et utilisé tout au long des calculs
                ultérieurs (impressions, production, &hellip;)</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Si vous souhaitez définir une liste de questions générales par
        défaut, il vous faut alors ajouter une clé dans le fichier
        WinPro.ini.</p>

        <p><span style="font-weight: bold; color: #666699;">[system]</span></p>

        <p><span style="font-weight: bold; color: #666699;">Question globale
        par defaut = </span>n° de la catégorie de la liste de question par
        défaut (0 par défaut)</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Usinage:</span> Ajout d&rsquo;une
        case à cocher dans la fiche usinage permettant d&rsquo;autorisé ou non
        l&rsquo;envoi de cet usinage sur une partie cintrée.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Filtres:</span> Tous les composants
        techniques tels que système, dormant, ouvrant, vitrage, &hellip;
        contiennent  maintenant une formule &lsquo;Filtre&rsquo;, qui permet de
        gérer la visibilité de l&rsquo;élément concerné pendant la saisie de
        commande. </p>

        <p>Cette formule vous autorise à affecter une valeur à la variable
        <span class="f_Variables">_Visible</span>. Si cette valeur est de <span
        class="f_Variables">0</span>, l&rsquo;élément concerné n&rsquo;est pas
        visible. </p>

        <p>Toute autre valeur, ou l&rsquo;absence de définition de cette
        variable, autorise la visibilité de l&rsquo;élément.</p>

        <p>Cette formule filtre peut utiliser les variables suivantes :</p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_Aujourdhui</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_WinPro</span></p>

        <p style="margin: 0px 0px 0px 24px;">Variables globales créées dans la
        formule de site</p>

        <p style="margin: 0px 0px 0px 24px;">Variables globales créées dans la
        formule utilisateur</p>

        <p style="margin: 0px 0px 0px 24px;">Variables globales créées dans la
        formule client</p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_Remise</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_Remise2</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_Remise3</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_RemiseVitrage</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_RemiseVitrage2</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_RemiseVitrage3</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_RemiseVolet</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_RemiseVolet2</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_RemiseVolet3</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_Quantite</span></p>

        <p style="margin: 0px 0px 0px 24px;">Variables des questions de
        commande</p>
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
                7.0.19</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">9/12/03</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">&bull;Filter bij de klanten en
        artikels:</span> Op dezelfde manier zoals bij de technische onderdelen
        (systeem,kleur,kader,&hellip;.),wordt ook hier een formule toegevoegd
        in het tabblad &ldquo;filter&rdquo; bij de klanten en artikels.Deze
        filter wordt actief op niveau van de aanmaal van een bestelling,en
        bevat de formules van de site en de gebruiker,alsook de formule van bij
        de klanten voor de filter op de artikels..</p>

        <p> </p>

        <p><span class="f_Heading1"
        style="text-decoration: underline;">&bull;<span
        style="font-size: 12pt">Inkleuren van de combolijsten</span>:</span>De
        verschillende formules in de filters staan u ook toe gebruik te maken
        van kleuren in de combolijsten.Deze kleur is zichtbaar op niveau van de
        aanmaak van een bestelling.Voor deze kleur te definiëren,beschikt u
        over volgende 2 variabelen: <strong><span
        style="color:#0000a0">_CouleurTexte (_TekstKleur)</span></strong>
        en_<strong><em style="color:#0000a0">CouleurFond
        (_Achtergrondkleur)</em></strong>. Deze 2 variabelen kunnen volgende
        waarden aannemen: <strong><span
        style="color:#0000a0">_@Noir</span></strong> <strong><span
        style="color:#8000ff"><span style="color:#0000a0">(_@Zwart) , _@Bleu
        (_@Blauw), _@Vert (_@Groen), _@Cyan (_@Cyaan), _@Rouge (_@Rood),
        _@Magenta, _@Jaune (_@Geel),
        _@Gris.(_@Grijs).</span></span></strong></p>

        <p>.</p>

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
                7.0.18</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">5/12/03</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">&bull;Overzicht van de
        leveranciersbestellingen:</span> Vanaf nu zal, wanneer een
        leveranciersbestelling aangemaakt is,de gegevens naar een
        overzichtstabel gestuurd worden (HistoFou.dbf). Dit staat ons toe een
        extra tabblad toe te voegen in de aanmaak van een bestelling,welke de
        artikellijst toont specifiek voor de klantbestelling,en zal weergeven
        of de artikels reeds aanwezig zijn of wanneer de levering voorzien
        is..Dit is echter slechts beschikbaar voor de klanten welke de module
        hebben voor het beheer van de leveranciersbestellingen.Voor te
        verduidelijken,worden de binnenkomende artikels in de stock,weergegeven
        in groen,en de artikels in bestelling in rood.Dus u kan nu vrij
        eenvoudig nagaan of u alle artikels voor een specifieke bestelling
        reeds ontvangen hebt.</p>

        <p>Verder is er ook nog een veld Raam toegevoegd aan het bestandje van
        de leveranciersbestellingen.Dit veld houdt in de nummer van de
        werf(bestelling) waarvoor dit artikel besteld werd.Dit veld wordt
        getoond in een nieuw tabblad,waarin u een duidelijk overzicht hebt
        welke artikels er nog ontbreken</p>

        <p></p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">&bull;Productieopvolging:</span>
        Een nieuw tabblad in de bestelling laat u toe na te zien in welke staat
        een bepaalde productie zich bevindt en in welke staat een bepaald raam
        in de productie zich bevindt.Dit tabblad houdt de gegevens in van de
        arbeidsposten, wanneer u hierover zou beschikken..</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">&bull;Aluminiumprijzen:</span> U
        kan nu de prijs/kg definiëren voor de aankoop van uw
        aluminiumprofielen.U beschikt over een extra veld bij de
        leveranciersgegevens.Op niveau van de artikels beschikt u in het blad
        prijzen over de mogelijkheid aan te duiden of u wil werken met het
        gewicht en een prijs per kg.</p>

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
                7.0.17</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">3/12/03</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Table Lin.dbf:</span> een nieuw
        veld, Var,is toegevoegd; het verloop van dit veld wordt bepaald door
        een variabele <strong><span
        style="color:#0000a0">VarLin</span></strong>, welke gedefinieerd kan
        worden in het artikel van elk element(kader,vleugel,systeem,&hellip;.)
        en wordt berekend op het moment dat dit gekozen wordt.</p>

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
                7.0.14 tot 16</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">27/10/03</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">&bull;Algemene vragen per
        bestelling</span> WinPro kan u automatisch de vragen weergeven welke
        betrekking hebben op de bestelling bij de aanmaak van een nieuwe
        bestelling.Hiervoor dient u in de winpro.ini,sectie [System] volgende
        lijn toe te voegen </p>

        <p><span style="font-weight: bold; color: #666699;">[System]</span></p>

        <p><span style="font-weight: bold; color: #666699;">Questions
        Globales=1</span></p>

        <p><span style="font-weight: bold; color: #666699;"> </span></p>

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
                7.0.14 tot 16</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">12/10/03</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">&bull;Algemene vragen per
        bestelling</span> U kan verschillende algemene vragen definiëren per
        bestelling.Deze vragen hebben betrekking op de hele bestelling.U kan
        verschillende reeksen van vragen samenstellen, die afhankelijk van de
        gebruiker of klantcode zichtbaar kunnen worden.De verbinding tussen
        klant/vragenreeks wordt gemaakt d.m.v het toewijzen van een globale
        variabele <strong><span style="color:#0000a0">_Question, (
        _Vraag)</span></strong> ,en dit in de formule van de klanten,gebruiker
        of site.</p>

        <p>De inhoud van de vragenreeks wordt gekoppeld aan de categorie
        hiervan.</p>

        <p></p>

        <p>Gebruik van de vragenreeksen behoeft enkele specifieke regels:</p>

        <p style="margin-left:8em">&bull;De selectie van een klant,de
        vragenreeks wordt gelezen, samen met de standaard antwoorden .</p>

        <p style="margin-left:8em">&bull;Het blijft mogelijk de standaard
        antwoorden te vervangen door op de knop « vragen » te klikken in de
        aanmaak van een bestelling.</p>

        <p style="margin-left:8em">&bull;De vragenreeks/antwoorden worden
        toegepast op het raam dewelke volgt.</p>

        <p style="margin-left:8em">&bull;Het blijft mogelijk de antwoorden te
        wijzigen in functie van de bestelling.Telkens wanneer een nieuw raam
        aangemaakt wordt zal het antwoord gegeven op de vragenreeks van
        toepassing zijn op dit raam.Antwoorden op reeds ingevoerde ramen kunnen
        niet meer gewijzigd worden.</p>

        <p style="margin-left:8em">&bull;Voor elk aangemaakt raam,worden de
        vragenreeks/antwoorden opgeslagen in het geheugen en voor alle volgende
        berekeningen (afdrukken,productie,...)</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"></td>
              <td></td>
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
              <td width="17"></td>
              <td></td>
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
              <td width="17"></td>
              <td></td>
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
              <td width="17"></td>
              <td></td>
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
              <td width="17"></td>
              <td></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>Indien u een lijs van vragen als standaard lijst wil
        definiëren,dient u een sleutel toe te voegen in de settings of
        winpro.ini bestand.</p>

        <p><span style="font-weight: bold; color: #666699;">[system]</span></p>

        <p><span style="font-weight: bold; color: #666699;">Question globale
        par defaut = </span>n° van de categorie van standaardvragen (0 is
        standaard)</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Bewerkingen:</span> Toevoegen van
        een selectievak om de keuze te maken voor het toestaan van deze
        bewerking op een gebogen deel.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Filters:</span> Elk technisch
        onderdeel zoals het systeem,kader,vleugel,beglazing,&hellip;bevat nu
        een tabblad « filter,welke u toestaat de onderdelen zichtbaar of
        onzichtbaar te maken op niveau van de bestelling.Deze formule kan
        gebruikt worden met de variabele <strong><span
        style="color:#0000a0">_Visible (_Zichtbaar)</span></strong>. Indien de
        waarde hiervan <strong><span style="color:#0000a0">0</span></strong>
        is,is het desbetreffend onderdeel niet zichtbaar.</p>

        <p>Alle andere waardes,of bij ontbreken van deze waarde zal het
        onderdeel steeds zichtbaar zijn.</p>

        <p>De formules in de filter kunnen volgende variabelen bevatten</p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_Aujourdhui (_Vandaag)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_WinPro</span></p>

        <p style="margin: 0px 0px 0px 24px;">Globale variabelen gecreëerd in de
        variabelen van de site</p>

        <p style="margin: 0px 0px 0px 24px;">Globale variabelen gecreëerd bij
        de formules van de gebruiker</p>

        <p style="margin: 0px 0px 0px 24px;">Globale variabelen gecreëerd in de
        specifieke formules bij de klantgegevens.</p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">_Remise
        (_Korting)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">_Remise2
        (_Korting2)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">_Remise3
        (_Korting3)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_RemiseVitrage (_KortingBeglazing)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_RemiseVitrage2 (_KortingBeglazing2)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_RemiseVitrage3 (_KortingBeglazing3)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_RemiseVolet (_KortingRolluik)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_RemiseVolet2 (_KortingRolluik2)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_RemiseVolet3 (_KortingRolluik3)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_Quantite (_Hoeveelheid)</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables"></span></p>

        <p style="margin: 0px 0px 0px 24px;">Variabelen van de algemene vragen
        bij een bestelling</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
