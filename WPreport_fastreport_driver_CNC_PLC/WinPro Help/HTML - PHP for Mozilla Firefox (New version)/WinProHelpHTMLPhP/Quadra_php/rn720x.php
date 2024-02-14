<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["FRA","NED"];
var WinProHelpPageName=["7.2.0x","7.2.0x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?rn720x.php"; }
else { parent.quicksync('a11.4.9'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>7.2.0x</title>
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
        href="introduction.php">Top</a>  <a href="rn721x.php">Previous</a>  <a
        href="rn714x.php">Next</a> </span> </td>
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
                7.2.06</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">10/04/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span class="f_TitreReleaseNote">Nouveau module (CFL):</span>
        Création d&rsquo;un nouveau module pour WinproLight : Commande
        fournisseur Light.</p>

        <p>Ce module permet de définir pour chaque système et caisson de volet
        un code fournisseur, afin d&rsquo;éditer les bons de commande via
        l&rsquo;onglet action de la commande client.</p>

        <p>De cette manière, pour une commande, les châssis, volets, articles
        et profils complémentaires ainsi que les tôles pliées seront séparés
        par fournisseur(s) lors d'une impression.</p>

        <p> </p>

        <p class="p_Heading1"><span class="f_TitreReleaseNote">Date de
        confirmation:</span> Une nouvelle possibilité de date de livraison
        vient d&rsquo;être ajoutée à l&rsquo;impression de la confirmation, il
        s&rsquo;agit de la macro #6#.</p>

        <p style="margin: 0px 0px 0px 24px;">Pour rappel, les clés
        d&rsquo;accès aux textes (via strings.exe) sont :</p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="247" style="width: 247px;"><p
                style="margin: 8px 0px 0px 24px;"><span
                style="color: #000000;">Pour la pose :</span></p>
              </td>
              <td width="312" style="width: 312px;"><p
                style="margin: 8px 0px 0px 24px;"><span
                style="font-weight: bold; color: #000000;">DOC_POSECOMMANDE</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="247" style="width: 247px;"><p
                style="margin: 8px 0px 0px 24px;"><span
                style="color: #000000;">Pour la livraison :</span></p>
              </td>
              <td width="312" style="width: 312px;"><p
                style="margin: 8px 0px 0px 24px;"><span
                style="font-weight: bold; color: #000000;">DOC_LIVRAISONCOMMANDE</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="247" style="width: 247px;"><p
                style="margin: 8px 0px 0px 24px;"><span
                style="color: #000000;">Pour l&rsquo;enlèvement :</span></p>
              </td>
              <td width="312" style="width: 312px;"><p
                style="margin: 8px 0px 0px 24px;"><span
                style="font-weight: bold; color: #000000;">DOC_ENLEVEMENTCOMMANDE</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="247" style="width: 247px;"><p
                style="margin: 8px 0px 0px 24px;"><span
                style="color: #000000;">Pour un mode de livraison non spécifié
                :</span></p>
              </td>
              <td width="312" style="width: 312px;"><p
                style="margin: 8px 0px 0px 24px;"><span
                style="font-weight: bold; color: #000000;">DOC_FOURNITURECOMMANDE</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 8px 0px 0px 24px;"><span
        style="color: #000000;"> </span><br>
        <span style="color: #000000;">Les macros jusqu&rsquo;ici disponibles
        étaient :"</span><br>
        <span style="color: #000000;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="58" style="width: 58px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="font-weight: bold; color: #000000;">#1#</span></p>
              </td>
              <td width="501" style="width: 501px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="color: #000000;">La date de livraison est imprimée sous
                forme de numéro de semaine</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="58" style="width: 58px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="font-weight: bold; color: #000000;">#2#</span></p>
              </td>
              <td width="501" style="width: 501px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="color: #000000;">Le jour du mois (1 à 31) indique le
                nombre de semaines dans lequel la livraison
                s&rsquo;effectuera.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="58" style="width: 58px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="font-weight: bold; color: #000000;">#3#</span></p>
              </td>
              <td width="501" style="width: 501px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="color: #000000;">La date de livraison exacte est
                imprimée</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="58" style="width: 58px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="font-weight: bold; color: #000000;">#4#</span></p>
              </td>
              <td width="501" style="width: 501px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="color: #000000;">Ce texte précède la date de livraison ;
                pour la macro #1#, il est remplacé par le texte « pendant la
                semaine » (identificateur « DOC_LA_SEMAINE »); pour la macro
                #2#, par le texte « dans » (identificateur « DOC_DANS_(x
                semaines) »); pour la macro #3# par le texte « le »
                (identificateur « DOC_LE (date) »).</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="58" style="width: 58px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="font-weight: bold; color: #000000;">#5#</span></p>

                <p style="margin: 0px 0px 0px 24px;"><span
                style="font-weight: bold; color: #000000;"> </span></p>
              </td>
              <td width="501" style="width: 501px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="color: #000000;">Ce texte suit la date de livraison ;
                pour la macro </span><span
                style="font-weight: bold; color: #000000;">#2#</span><span
                style="color: #000000;">, il est remplacé par le texte «
                semaine(s) » (identificateur « DOC_SEMAINE(S) ») ; pour les
                macros #1# et </span><span
                style="font-weight: bold; color: #000000;">#3#</span><span
                style="color: #000000;">, la macro </span><span
                style="font-weight: bold; color: #000000;">#5#</span><span
                style="color: #000000;">est effacée.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 8px 0px 0px 24px;"><span style="color: #000000;">La
        nouvelle macro :</span><br>
        <span style="color: #000000;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="58" style="width: 58px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="font-weight: bold; color: #000000;">#6#</span></p>
              </td>
              <td width="501" style="width: 501px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="color: #000000;">Le délai client imprimé sous forme de
                numéro de semaine</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

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
                7.2.05</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">08/04/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">Module Version Fermée (VF):</span>
        Ce module bloque tout accès au paramétrage, et ce quelque soit les
        droits dont dispose l&rsquo;utilisateur. A l&rsquo;exception des
        vitrages, main d&rsquo;&oelig;uvre et paramètres d&rsquo;optimisation
        qui restent accessibles.</p>

        <p>L&rsquo;utilisateur a également la possibilité de créer de nouveaux
        articles qui ne devront être saisis dans une cde/devis qu&rsquo;en tant
        qu&rsquo;articles complémentaires. </p>

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
                7.2.02</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">28/03/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">Macro #2#:</span> Prise en compte
        de cette macro dans la description des panneaux décoratifs, à découper
        et fabriqués.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Brent:</span> Suite à la
        considérable envolée des prix de l'énergie et dans le but de compenser
        une partie de ces surcoûts, de nombreux fournisseurs ont mis en place
        un surcoût additionnel lié à l'énergie sur l'ensemble des  produits
        verriers. Nous avons donc créé une nouvelle fonctionnalité dans Winpro
        permettant de prendre en considération les variations de l&rsquo;indice
        IPE Brent en fonction du poids du vitrage. Ce surcoût est cumulé au
        prix de revient courant permettant ainsi une correcte valorisation des
        commandes de vitrages. Le coefficient a appliquer au poids est à
        définir dans le winpro.ini</p>

        <p><span style="font-weight: bold; color: #666699;">[Glass]</span></p>

        <p><span style="font-weight: bold; color: #666699;">Coeff plus value
        vitrage =</span> <span
        style="font-weight: bold; color: #666699;">0,104</span> coefficient à
        appliquer au poids du vitrage pour déterminer le surcoût majorant le
        Prix Courant (la valeur peut être négative)</p>

        <p> </p>

        <p class="p_Heading1"><span class="f_TitreReleaseNote">Poids de la
        menuiserie:</span> En version 7.1.30, nous annoncions l&rsquo;arrivée
        de la variable globale <span
        class="f_Variables">_PoidsChargement</span> qu&rsquo;il était
        nécessaire d&rsquo;incrémenter par formule.</p>

        <p>Désormais, si cette variable n&rsquo;est pas incrémentée via le
        paramétrage, Winpro calcule le poids de la menuiserie à l&rsquo;aide du
        champ poids de la fiche article des composants consommés dans la
        menuiserie.</p>

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
                7.2.01</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">15/03/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">Ordre de dessin des vantaux:</span>
        L&rsquo;ordre de dessin des vantaux défini par défaut dans
        l&rsquo;onglet « Description » du paramétrage de l'ouvrant peut
        maintenant être modifié par formule à l&rsquo;aide de la variable</p>

        <p><span class="f_Variables">OrdreVantaux</span>. </p>

        <p>L&rsquo;usage de cette variable sera probablement nécessaire dans le
        paramétrage de vos coulissants. </p>

        <p>Notez que cette variable ne peut être utilisée que depuis la
        première formule de paramétrage de quincaillerie.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/img_6.jpg" width="180"
        height="107" border="0" vspace="1" hspace="1" alt="img_6"></p>

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
                7.2.00</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">14/03/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">Ecran atelier:</span> Si un même
        poste atelier est utilisé par plusieurs utilisateurs effectuant des
        tâches identiques ou différentes, il est désormais possible
        d&rsquo;identifier l&rsquo;utilisateur avant de scanner les cadres. Il
        n&rsquo;est donc pas nécessaire de relancer Winpro. </p>

        <p>Pour activer ce développement, il est nécessaire d&rsquo;ajouter
        dans le fichier winpro.ini du poste atelier:</p>

        <p><span style="font-weight: bold; color: #666699;">[ workplace
        ]</span></p>

        <p><span style="font-weight: bold; color: #666699;">User = 1</span>
        Cette nouvelle clé vaut <span
        style="font-weight: bold; color: #666699;">0</span> par défaut.</p>

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
                7.2.06</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">10/04/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span class="f_TitreReleaseNote">Nieuwe module CFL:</span> Nieuwe
        module voor de WinProLight versie : Bestelling bij de leverancier
        Light.</p>

        <p>Deze module staat u toe per systeem en per rolluikkast een
        leverancierscode te bepalen,om deze bij het afdrukken in een bestelling
        te kunnen kiezen.Op deze wijze kan er voor één bestelling, een
        bestelbon voor de ramen,rolluiken, artikels en profielen en zelfs voor
        het plooiwerk een afzonderlijke leveranciersbestelling afgedrukt
        worden.</p>

        <p></p>

        <p> </p>

        <p class="p_Heading1"><span
        class="f_TitreReleaseNote">Bevestigingsdatum:</span> Er zal een nieuwe
        mogelijkheid toegevoegd kunnen worden bij de afdruk van een
        orderbevestiging; nl de leveringsdatum en dit door gebruik te maken van
        de macro #6#.</p>

        <p style="margin: 0px 0px 0px 24px;">Ter herinnering,de toegangssleutel
        tot de teksten (via strings.exe) zijn </p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="247" style="width: 247px;"><p
                style="margin: 8px 0px 0px 24px;"><span
                style="color: #000000;">Voor de plaatsing (montage)
                ::</span></p>
              </td>
              <td width="312" style="width: 312px;"><p
                style="margin: 8px 0px 0px 24px;"><span
                style="font-weight: bold; color: #000000;">DOC_POSECOMMANDE</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="247" style="width: 247px;"><p
                style="margin: 8px 0px 0px 24px;"><span
                style="color: #000000;">Voor de levering :</span></p>
              </td>
              <td width="312" style="width: 312px;"><p
                style="margin: 8px 0px 0px 24px;"><span
                style="font-weight: bold; color: #000000;">DOC_LIVRAISONCOMMANDE</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="247" style="width: 247px;"><p
                style="margin: 8px 0px 0px 24px;"><span
                style="color: #000000;">Voor een afhaling :</span></p>
              </td>
              <td width="312" style="width: 312px;"><p
                style="margin: 8px 0px 0px 24px;"><span
                style="font-weight: bold; color: #000000;">DOC_ENLEVEMENTCOMMANDE</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="247" style="width: 247px;"><p
                style="margin: 8px 0px 0px 24px;"><span
                style="color: #000000;">Voor een niet nader gespecificeerde
                levering:</span></p>
              </td>
              <td width="312" style="width: 312px;"><p
                style="margin: 8px 0px 0px 24px;"><span
                style="font-weight: bold; color: #000000;">DOC_FOURNITURECOMMANDE</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 8px 0px 0px 24px;"><span
        style="color: #000000;"> </span><br>
        <span style="color: #000000;">De tot op heden toepasbare macro&rsquo;s
        zijn </span><br>
        <span style="color: #000000;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="58" style="width: 58px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="font-weight: bold; color: #000000;">#1#</span></p>
              </td>
              <td width="501" style="width: 501px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="color: #000000;">De leveringsdatum wordt afgedrukt als
                weeknummer</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="58" style="width: 58px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="font-weight: bold; color: #000000;">#2#</span></p>
              </td>
              <td width="501" style="width: 501px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="color: #000000;">De dag van de maand (1 tot 31) geeft
                het aantal weken weer in dewelke de levering zal
                plaatsvinden.</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="58" style="width: 58px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="font-weight: bold; color: #000000;">#3#</span></p>
              </td>
              <td width="501" style="width: 501px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="color: #000000;">De exacte leveringsdatum wordt
                afgedrukt</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="58" style="width: 58px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="font-weight: bold; color: #000000;">#4#</span></p>
              </td>
              <td width="501" style="width: 501px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="color: #000000;">Deze tekst gaat de leveringsdatum
                vooraf ;voor de #1#, wordt vervangen door de tekst « gedurende
                de week » (identificateur « DOC_LA_SEMAINE »);voor de macro
                #2#, door de tekst « in » (identificateur « DOC_DANS_(x
                semaines) »); voor de macro #3# door de tekst « de »
                (identificateur « DOC_LE (date) »).</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="58" style="width: 58px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="font-weight: bold; color: #000000;">#5#</span></p>

                <p style="margin: 0px 0px 0px 24px;"><span
                style="font-weight: bold; color: #000000;"> </span></p>
              </td>
              <td width="501" style="width: 501px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="color: #000000;"></span><span
                style="color: #000000;">Deze tekst volgt op de leveringsdatum
                ;voor de macro #2wordt vervangen door de tekst « we(e)k(en) »
                (identificateur « DOC_SEMAINE(S) ») ; voor de macro's #1# en
                #3#, de macro #5# wordt verwijderd</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 8px 0px 0px 24px;"><span style="color: #000000;">De
        nieuwe macro :</span><br>
        <span style="color: #000000;"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="58" style="width: 58px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="font-weight: bold; color: #000000;">#6#</span></p>
              </td>
              <td width="501" style="width: 501px;"><p
                style="margin: 0px 0px 0px 24px;"><span
                style="color: #000000;">De leveringsdatum onder vorm van het
                weeknummer</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

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
                7.2.05</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">08/04/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">Module Gesloten Versie (VF):</span>
        Deze module blokkeert alle toegang tot de parametrage,en hierbij worden
        de rechten toegewezen door de administrateur (beheerder).Uizonderingen
        zijn de beglazing,werktijden en parameters voor de optimalisatie welke
        toegankelijk blijven.De gebruiker heeft tevens de mogelijkheid om
        artikels toe te voegen welke gebruikt junnen worden als extra artikels
        in een offerte of klantorder. </p>

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
                7.2.02</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">28/03/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">Macro #2#:</span> Er wordt nu in de
        beschrijving van de sierpanelen,samengestelde panelen en gezaagde
        panelen rekening gehouden met deze macro</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Brent:</span> Tengevolge van de
        toenemende energieprijzen en met als doel dit enigszins te compenseren
        rekenen veel leveranciers een meerkost op hun producten .Wij hebben
        hiervoor aldus een nieuwe functionaliteit ontwikkeld welke u toestaat
        de fluctuaties van de IPE Brent index op te vangen in functie van het
        glasgewicht. Deze meerkost wordt samen met de lopende kostprijs
        gecumuleerd welke u toestaat een correcte berekening van de
        glasbestelling te maken. De coëfficiënt op dit gewicht wordt
        gedefinieerd in de WinPro.ini en dit in volgende sectie</p>

        <p><span style="font-weight: bold; color: #666699;">[Glass]</span></p>

        <p><span style="font-weight: bold; color: #666699;">Coeff plus value
        vitrage =</span> <span
        style="font-weight: bold; color: #666699;">0,104</span> correspondeerd
        met het coëfficiënt op het glasgewicht voor de meerkost te bepalen op
        de kostprijs vb : 0.104 (de waarde kan ook negatief zijn)</p>

        <p> </p>

        <p class="p_Heading1"><span class="f_TitreReleaseNote">Gewicht van het
        raam</span> In versie 7.1.30, kondigen wij de nieuwe globale variabele
        aan: <span class="f_Variables">_PoidsChargement of
        _Gewichtslading</span> deze kan nu incrementeel per formule verhoogd
        worden</p>

        <p>Voortaan zal deze variabele ,indien deze niet via de parametrering
        wordt vergroot, door WinPro berekend worden met behulp van het veld
        gewicht in het bestand artikel van de componenten die in het raam
        verbruikt worden.</p>

        <p>Wanneer een artikel wordt verbruikt in x, hoeveelheden zal WinPro de
        variabele x maal verhogen met de waarde van het veld gewicht van elk
        artikel.</p>

        <p>Wanneer een profiel verbruikt wordt met een lengte y en een
        hoeveelheid x, zal WinPro de variabele verhogen met x * y en met de
        waarde van het veld gewicht in het artikel</p>

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
                7.2.01</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">15/03/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">Weergave tekening vleugels:</span>
        De volgorde van de vleugels wordt standaard gedefinieerd in het blad «
        Beschrijving » bij de vleugelcode, deze kan nu via formules gewijzigd
        worden met behulp van de variabele <span
        class="f_Variables">OrdreVantaux of VleugelVolgorde</span></p>

        <p>Gebruik van deze variabele kan handig zijn in de parametrage van
        bijv. Hefschuiframen, schuiframen, etc&hellip; . </p>

        <p>Noteer wel dan deze variabele enkel gebruikt kan worden vanuit de
        eerste formule in de parametrage van het beslag.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img alt="afb1" src="rn720_1.jpg"
        style="float: left" width="182" height="164"> </p>

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
                7.2.00</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">14/03/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">Schermen in de fabriek :</span> Als
        een bepaalde werkpost gebruikt wordt door meerdere gebruikers welke ook
        nog eens dezelfde werkzaamheden uitvoeren, dan is het voortaan mogelijk
        de gebruiker te identificeren alvorens het kader in te scannen. Het is
        niet nodig om WinPro opnieuw op te starten. Om deze ontwikkeling te
        activeren is het nodig een sleutel toe te voegen in de WinPro.ini van
        de werkplaatspost .</p>

        <p>Dit gebeurd in de sectie [ workplace ] met sleutel</p>

        <p></p>

        <p><span style="font-weight: bold; color: #666699;">[ workplace
        ]</span></p>

        <p><span style="font-weight: bold; color: #666699;">User = 1</span>
        Deze nieuwe sleutel is standaard 0.</p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
