<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","ESP","POL","NED"];
var WinProHelpPageName=["Introduction","Introduction","Introducción","Wprowadzenie","Voorstelling"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?introduction.php"; }
else { parent.quicksync('a1'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Introduction</title>
  <meta name="keywords" content="">
  <meta http-equiv="Content-Type"
  content="application/xhtml+xml; charset=iso-8859-1">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <link type="text/css" href="default.css" rel="stylesheet">
</head>

<body background="img/workinprogress.png" style="margin: 0px 0px 0px 0px;"
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
        href="introduction.php">Top</a>  <a href="langage.php">Next</a> </span>
      </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span
        style="font-size: 5pt; color: #000000;"> </span></p>

        <p style="background: #fffff2;"><span
        style="font-size: 5pt; color: #000000;"> </span></p>

        <p style="background: #fffff2;">This reference manual is a useful
        assistant to help you master the many possibilities of WinPro. We did
        our best to provide you thye most complete and accurate information.
        However, if you have any remark or suggestion, please contact us by
        e-mail at<span style="color: #000000;"></span><span
        class="f_Variables"><a href="mailto:fbournonville@winpro.be "
        class="weblink">fbournonville@winpro.be</a></span><span
        class="f_Textestd">or </span><span class="f_Variables"><a
        href="mailto:rmansour@winpro.be "
        class="weblink">rmansour@winpro.be</a></span><span
        style="color: #000000;">.</span></p>

        <p style="background: #fffff2;"><span
        style="color: #000000;"> </span></p>

        <p style="text-align: center;"><span
        style="font-size: 20pt; font-weight: bold;">Last compilation date
        :</span><span
        style="font-size: 20pt; font-weight: bold; color: #ff0000;"> July, 22nd 2013</span></p>

        <p style="background: #fffff2;"><span
        style="color: #000000;"> </span></p>
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
      <td align="left"><p class="p_Textestd"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les nombreuses
        fonctionnalités de Winpro rendent indispensable ce manuel de référence,
        dont nous espérons qu'il vous permettra de paramétrer notre logiciel au
        mieux.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cependant, n'hésitez pas
        à nous faire part de vos remarques et suggestions, par e-mail à
        l'adresse suivante :</span> <span class="f_Variables"><a
        href="mailto:fbournonville@winpro.be "
        class="weblink">fbournonville@winpro.be</a></span><span
        class="f_Textestd">ou </span><span class="f_Variables"><a
        href="mailto:rmansour@winpro.be "
        class="weblink">rmansour@winpro.be</a></span></p>

        <p> </p>

        <p><span style="font-size: 14pt; font-weight: bold;"> </span></p>

        <p style="text-align: center;"><span
        style="font-size: 20pt; font-weight: bold;">Date de compilation
        :</span><span
        style="font-size: 20pt; font-weight: bold; color: #ff0000;"> 22 Juillet
        2013</span></p>

        <p><span style="font-size: 14pt; font-weight: bold;"> </span></p>

        <p style="text-align: center;"><span
        style="font-size: 14pt; font-weight: bold; color: #0000ff;">Ce fichier
        d'aide est toujours en cours de réalisation, </span></p>

        <p style="text-align: center;"><span
        style="font-size: 14pt; font-weight: bold; color: #0000ff;">il sera
        régulièrement compilé et mis à votre disposition . </span></p>

        <p style="text-align: center;"><span
        style="font-size: 14pt; font-weight: bold; color: #0000ff;"> </span></p>

        <p style="text-align: center;"><span
        style="font-size: 14pt; font-weight: bold; color: #0000ff;">Le contenu
        de celui-ci est susceptible d'être modifié.</span></p>

        <p style="text-align: center;"><span
        style="font-size: 14pt; font-weight: bold; color: #0000ff;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 25 janvier 2012:</span></p>

        <p><a href="9_0_0_x.php">Note de version 9.0.0.x intégrée</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 21 juin 2011:</span></p>

        <p><a href="8_1_1_x.php">WPReport en ligne de commande avec fichier
        d'entrée (8.1.1.129)</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 09 novembre 2010:</span></p>

        <p><a href="8_1_1_x.php">Comportement de la variable _EtatCommande
        (8.1.1.087)</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 01 septembre 2010:</span></p>

        <p><a href="8_0_0_x.php">Langage de script pour les versions mysql
        (8.0.0.000)</a></p>

        <p><a href="8_0_0_x.php">Module WPR+ (8.0.0.000)</a></p>

        <p><a href="8_0_4_x.php">Nouvelles fonctions WPR, RemoveDir, BrowseDir,
        FileExists, DeleteFile, FileLength, CopyFile, Execute
        (8.0.4.xxx)</a></p>

        <p><a href="8_0_4_x.php">Chutes RAL dans WinPro/D (8.0.4.xxx)</a></p>

        <p><a href="8_0_4_x.php">Nouvelles variables locales pour les marges,
        MargeTechnique &amp; MargeComposant (8.0.4.018)</a></p>

        <p><a href="8_0_4_x.php">Variable SansVitrage dans les aérateurs
        (8.0.4.036)</a></p>

        <p><a href="8_0_4_x.php">Nouvelle clef pour saisie de châssis avec
        seuil (8.0.4.037)</a></p>

        <p><a href="8_0_4_x.php">Importation de données WinPro/D en ligne de
        commande (8.0.4.041)</a></p>

        <p><a href="8_1_0_x.php">Informations complémentaires pour le module
        Tableau de Bord de Commande TBC (8.1.0.035)</a></p>

        <p><a href="8_1_0_x.php">Nouvelle fonction WPR, SendMail
        (8.1.0.035)</a></p>

        <p><a href="8_1_0_x.php">Purge des tables d'export en version 8
        (8.1.0.045)</a></p>

        <p><a href="8_1_0_x.php">Nouvelles variables globales de remplissages
        _Rempl(x)Ug, _Rempl(x)PsiG, _Rempl(x)TransLum, _Rempl(x)FacSol,
        _Rempl(x)Intercalaire, _Rempl(x)Intercalaire2 (8.1.0.073)</a></p>

        <p><a href="8_1_1_x.php">Vitrages composés dans l'onglet Informations
        (8.1.1.004)</a></p>

        <p><a href="8_1_1_x.php">Module Gestion/Suivi de Paiements SP
        (8.1.1.010)</a></p>

        <p><a href="8_1_1_x.php">Option de saisie pour les croisillons
        (8.1.1.028)</a></p>

        <p><a href="8_1_1_x.php">Option de recommande vitrage pour le module
        Réception de Vitrages CFV (8.1.1.038)</a></p>

        <p><a href="8_1_1_x.php">PDF automatique pour WPR (8.1.1.039)</a></p>

        <p><a href="8_1_1_x.php">Réservations de laques pour barre entière
        (8.1.1.065)</a></p>

        <p><a href="8_1_1_x.php">Nouvelles variables globales de traverses
        &amp; coupleurs, _CategCoupleurDroite/Gauche/Haut/Bas
        (8.1.1.074)</a></p>

        <p><a href="8_1_1_x.php">Appel d'impression WPR supplémentaire
        (8.1.1.074)</a></p>

        <p><a href="8_1_1_x.php">Extension de saisie pour les profils
        périphériques (8.1.1.074)</a></p>

        <p><a href="8_1_1_x.php">Bascule de client en prospect
        (8.1.1.075)</a></p>

        <p><a href="8_1_1_x.php">Forme oeil-de-boeuf &amp; battées dormant
        (8.1.1.075)</a></p>

        <p><a href="8_1_1_x.php">Volet seul et variables système
        (8.1.1.075)</a></p>

        <p><a href="8_1_1_x.php">Code barre vitrage &amp; module Réception de
        Vitrages CFV (8.1.1.077)</a></p>

        <p><a href="8_0_4_x.php"> </a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 27 juillet 2010:</span></p>

        <p><a href="8_0_2_x.php">Application du Brent sur les devis
        (8.02.048)</a></p>

        <p><a href="8_1_0_x.php">Export/Import de traductions sous Excel
        (8.1.0.027)</a></p>

        <p><a href="8_1_0_x.php">Déductions sur dormant à recouvrement pour le
        calcul thermique (8.1.0.039)</a></p>

        <p><a href="8_1_0_x.php">Désactivation du calcul thermique pour les
        volets seulement (8.1.0.039)</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 17 juillet 2010:</span></p>

        <p><a href="7_2_7x.php">Compléments Note de version 7.2.70</a></p>

        <p><a href="7_2_8x.php">Ajout Note de version 7.2.80</a></p>

        <p><a href="8_0_1_x.php">Compléments Note de version 8.01</a></p>

        <p><a href="8_0_3_x.php">Compléments Note de version 8.03</a></p>

        <p><a href="8_0_4_x.php">Compléments Note de version 8.04</a></p>

        <p><a href="8_1_0_x.php">Compléments Note de version 8.1.0</a></p>

        <p><a href="8_1_1_x.php">Compléments Note de version 8.1.1</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 14 juin 2010:</span></p>

        <p><a href="8_1_1_x.php">Ajout du nouveau module GLPV dans la note de
        version 8.1.1</a></p>

        <p><a href="8_1_1_x.php">Ajout du nouveau module TMS dans la note de
        version 8.1.1</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 13 juin 2010:</span></p>

        <p><a href="8_0_4_x.php">Complément note de version 8.04 : vitrages
        composés</a></p>

        <p><a href="8_0_4_x.php">Complément note de version 8.04 : édition de
        tarif depuis les bibliothèques</a></p>

        <p><a href="accessibilitédesquestions.php">Correction et complément sur
        l'accessibilité des questions</a></p>

        <p><a href="panprice.php">Complément sur le chiffrage des panneaux à
        découper</a></p>

        <p><a href="8_1_1_x.php">Ajout des panneaux décoratifs configurés dans
        la note de version 8.1.1</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 15 avril 2010:</span></p>

        <p><a href="scies.php">Correction concernant les bornes des limites de
        coupes en cas de scie alternative</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 02 avril 2010:</span></p>

        <p><a href="8_1_0_x.php">Correction note de version 8.1.0: Marquage
        CE</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 08 mars 2010:</span></p>

        <p><a href="8_0_1_x.php">Compléments note de version 8.01:
        Archivage</a></p>

        <p><a href="8_0_4_x.php">Compléments note de version 8.04: Installation
        de WinPro/D</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 29 janvier 2010:</span></p>

        <p><a href="8_1_0_x.php">Compléments note de version 8.1.0: Marquage
        CE</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 29 septembre 2009:</span></p>

        <p><a href="8_1_0_x.php">Compléments note de version 8.1</a></p>

        <p><a href="8_0_4_x.php">Compléments note de version 8.04</a></p>

        <p><a href="8_0_0_x.php">Compléments note de version 8.0</a></p>

        <p> </p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 22 juin 2009:</span></p>

        <p><a href="8_1_0_x.php">Compléments note de version 8.1</a></p>

        <p><a href="8_0_4_x.php">Compléments note de version 8.04</a></p>

        <p><a href="8_0_0_x.php">Compléments note de version 8.0</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 29 avril 2009:</span></p>

        <p><a href="utilinfoclimultiple.php">Intégration du menu Utilitaires |
        Génération multiple de disquettes INFOCLI</a></p>

        <p><a href="utilwinprodinternet.php">Intégration du menu Utilitaires |
        WinPro/D Internet</a></p>

        <p><a href="utilimportbase.php">Intégration du menu Utilitaires |
        Importation de la base de données</a></p>

        <p><a href="utilexportbase.php">Intégration du menu Utilitaires |
        Exportation de la base de données</a></p>

        <p><a href="utilimportini.php">Intégration du menu Utilitaires |
        Importation WinPro.ini</a></p>

        <p><a href="utilexportini.php">Intégration du menu Utilitaires |
        Exportation WinPro.ini</a></p>

        <p><a href="utilmodificationsettings.php">Intégration du menu
        Utilitaires | Modification de settings</a></p>

        <p><a href="utilregenereruser.php">Intégration du menu Utilitaires |
        Régénerer les utilisateurs WinPro dans la base de données</a></p>

        <p><a href="utilsuppressioncaches.php">Intégration du menu Utilitaires
        | Suppression des caches</a></p>

        <p><a href="utilimportgrillesprix.php">Intégration du menu Utilitaires
        | Importation des grilles de prix</a></p>

        <p><a href="8_0_4_x.php">Compléments sur la note de version
        8.0.4</a></p>

        <p> </p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 27 avril 2009:</span></p>

        <p><a href="utilmagasinstockprincipal.php">Intégration du menu
        Utilitaires | Magasin de stock principal</a></p>

        <p><a href="utilsystemeprincipal.php">Intégration du menu Utilitaires |
        Système principal</a></p>

        <p><a href="utilsupplementintercalaire.php">Intégration du menu
        Utilitaires | Supplément intercalaire couleur</a></p>

        <p><a href="utiltauxtva.php">Intégration du menu Utilitaires | Taux de
        TVA</a></p>

        <p><a href="utilcoordonneessociete.php">Intégration du menu Utilitaires
        | Coordonnées société</a></p>

        <p><a href="utillicence.php">Intégration du menu Utilitaires |
        Licence</a></p>

        <p><a href="utilimportdeceuninck.php">Intégration du menu Utilitaires |
        Importation des articles Deceuninck</a></p>

        <p><a href="utilutilisateurs.php">Intégration du menu Utilitaires |
        Utilisateurs</a></p>

        <p><a href="utilmotdepasse.php">Intégration du menu Utilitaires | Mot
        de passe</a></p>

        <p><a href="utilautreutilisateur.php">Intégration du menu Utilitaires |
        Autre utilisateur</a></p>

        <p><a href="utilbasculertarif.php">Intégration du menu Utilitaires |
        Basculer les prix tarif</a></p>

        <p><a href="utilaugmenterachat.php">Intégration du menu Utilitaires |
        Augmenter les prix d'achat</a></p>

        <p><a href="utilremiseachat.php">Intégration du menu Utilitaires |
        Remise sur le prix d'achat</a></p>

        <p><a href="utilmodifierclef.php">Intégration du menu Utilitaires |
        Modifier la clef d'un enregistrement</a></p>

        <p><a href="utildupliquercouleur.php">Intégration du menu Utilitaires |
        Dupliquer une couleur</a></p>

        <p><a href="utilmodifieretatcommande.php">Intégration du menu
        Utilitaires | Modifier l'état d'une commande</a></p>

        <p><a href="utilmodifieretatchassis.php">Intégration du menu
        Utilitaires | Modifier l'état d'un châssis</a></p>

        <p><a href="utilbasevide.php">Intégration du menu Utilitaires | Base de
        données vide</a></p>

        <p><a href="utilbasecommerciale.php">Intégration du menu Utilitaires |
        Base de données commerciale</a></p>

        <p><a href="utilimportcommercial.php">Intégration du menu Utilitaires |
        Import commercial</a></p>

        <p><a href="utilexporttechnique.php">Intégration du menu Utilitaires |
        Export base technique</a></p>

        <p><a href="faq6.php">Ajout d'un lien dans la FAQ vers la liste des
        tables techniques</a></p>

        <p><a href="utilbasedevis.php">Intégration du menu Utilitaires | Base
        de données devis</a></p>

        <p><a href="utilinfocli.php">Intégration du menu Utilitaires |
        Informations client pour module devis</a></p>

        <p><a href="utilbasecommerciale.php"> </a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 21 avril 2009:</span></p>

        <p><a href="varremplissages.php">Variable de configuration de
        remplissage _RemplWarmEdge[]</a></p>

        <p><a href="vitvariables.php">Variable de vitrage WarmEdge</a></p>

        <p><a href="8_1_0_x.php">Compléments sur la note de version 8.1</a></p>

        <p><a href="warmedge.php">Intégration des warm edges</a></p>

        <p><a href="zonelivraison.php">Intégration des zones de
        livraison</a></p>

        <p><a href="client.php">Intégration de la fiche client étendue
        (certains champs restent à définir)</a></p>

        <p><a href="utilpreferences.php">Intégration du menu Utilitaires |
        Préférences</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 07/04/2009:</span></p>

        <p><a href="variablesgenerale.php">Ajout des variables générales
        _NiveauDate, _CategPosteAtelier</a></p>

        <p><a href="prospect.php">Intégration des prospects</a></p>

        <p><a href="representants.php">Intégration des représentants</a></p>

        <p><a href="modepaiement.php">Intégration des modes de paiement</a></p>

        <p><a href="magasinsstock.php">Intégration des magasins de stock</a></p>

        <p><a href="incidents.php">Intégration des incidents de
        production</a></p>

        <p><a href="equipepose.php">Intégration des équipes de
        pose/livraison</a></p>

        <p><a href="configurationniveaudates.php">Intégration de la
        configuration des niveaux de dates</a></p>

        <p><a href="coefficientsprix.php">Intégration des coefficients de
        prix</a></p>

        <p><a href="articlespose.php">Intégration des articles de pose</a></p>

        <p><a href="categoriespanneaux.php">Intégration des catégories de
        panneaux</a></p>

        <p><a href="categoriesremplissage.php">Intégration des catégories de
        remplissages</a></p>

        <p><a href="categoriesclient.php">Intégration des catégories de
        client</a></p>

        <p><a href="codepostaux.php">Intégration des codes postaux</a></p>

        <p> </p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 02/04/2009 :</span></p>

        <p><a href="normeverre.php">Traduction Française complète et
        compléments divers</a></p>

        <p><a href="finition.php">Intégration des finitions</a></p>

        <p><a href="macros___.php">Ajout des macros de finitions</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 27/03/2009 :</span></p>

        <p><a href="tolepliees.php">Traduction Française et compléments jusqu'à
        autres éléments de données </a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 01/02/2009 :</span></p>

        <p><a href="8_1_0_x.php">Compléments pour module thermique dans la note
        de version WinPro 8.1</a></p>

        <p><a href="winprod_internet.php"> </a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 24/11/2008 :</span></p>

        <p><a href="8_0_0_x.php">Intégration de la note de version WinPro
        8.0</a></p>

        <p><a href="8_1_0_x.php">Intégration de la note de version WinPro
        8.1</a></p>

        <p><a href="winprod_internet.php">Intégration de la note de version
        WinPro/D 8.0.2</a></p>

        <p><a href="dormants.php">Traduction Française et compléments pour les
        dormants</a></p>

        <p><a href="ouvrants.php">Traduction Française et compléments pour les
        ouvrants</a></p>

        <p><a href="quincailleries.php">Traduction Française et compléments
        pour les quincailleries</a></p>

        <p><a href="traverses.php">Traduction Française et compléments pour les
        traverses</a></p>

        <p><a href="vitrages.php">Traduction Française partielle et compléments
        pour les vitrages</a></p>

        <p><a href="syscouleurs.php"> </a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 01/01/2008 :</span></p>

        <p><a href="syscouleurs.php">Mise à jour onglet couleurs du
        système</a></p>

        <p><a href="prfdescription.php">Correction de la définition de la "
        correction de coupe à 45° "</a></p>

        <p><a href="prfoptimisation.php">Mise à jour onglet optimisation du
        profil</a></p>

        <p><a href="varremplissages.php">Variable de Couleur des
        croisillons</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 20/11/2007 :</span></p>

        <p><a href="ouvvariables.php">Variables d'ouvrants</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 10/07/2007 :</span></p>

        <p><a href="variablesgenerale.php">Variables générales:_TypeFauxCintre,
        _FormeFauxCintre, _CouleurMauclair </a></p>

        <p> </p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 12/03/2007 :</span></p>

        <p><a href="drmvariables.php">VideDansCoinDroit, VideDansCoinGauche,
        Finition</a></p>

        <p><a href="faq5.php">FAQ : Calculs de variantes</a></p>

        <p><span style="color: #007f00;"><a
        href="varouvrantetquincaillerie.php">Variable de configuration Dormant
        : _DormantFinition...</a></span></p>

        <p><span style="color: #007f00;"><a
        href="varouvrantetquincaillerie.php">Variable de configuration Traverse
        : _TraverseFinition...</a></span></p>

        <p><span style="color: #007f00;"><a
        href="varouvrantetquincaillerie.php">Variable de configuration Ouvrant
        : _OuvrantFinition []...</a></span></p>

        <p><span style="color: #007f00;"><a
        href="varouvrantetquincaillerie.php">Variable de configuration Ouvrant
        : _OuvrantMauclairFinition []...</a></span></p>

        <p><span style="color: #007f00;"><a
        href="varouvrantetquincaillerie.php">Variable de configuration
        Remplissage : _RemplParcloseFinition []...</a></span></p>

        <p><span class="f_Variables"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 04/12/2006 :</span><br>
        <span style="color: #007f00;"><a
        href="notes_de_versions.php">Intégration des notes de releases dans ce
        fichier</a></span></p>

        <p><span style="color: #ff0000;"><a href="drmvariables.php">Variables
        de dormant : DormantAuDessusVide et TraverseAuDessusVide</a></span></p>

        <p><span style="color: #007f00;"><a
        href="variablesgenerale.php">Variable générale : _CommandeVitrage,
        _FormeAssemblage, _DateMiseEnLotChassis,
        _DateMiseEnLotVolet,_EtatCommande</a></span></p>

        <p><span style="color: #007f00;"><a href="vardormants.php">Variables de
        configuration Dormant : _CentreXDormant[] _CentreYDormant[]
        _NcourbesDormant...</a></span></p>

        <p><span style="color: #007f00;"><a
        href="varouvrantetquincaillerie.php">Variable de configuration Ouvrant
        : _OuvrantLargeurVantail1 []...</a></span></p>

        <p><span style="color: #007f00;"><a
        href="varouvrantetquincaillerie.php">Variable de configuration Ouvrant
        : _OuvrantJeuMauclair1 []...</a></span></p>

        <p><span style="color: #007f00;"><a href="sysdescription.php">Système :
        Cases à cocher : Dormant sans battée &amp; Comptage
        individuel...</a></span></p>

        <p><span style="color: #007f00;"><a
        href="fonctions_graphiques.php">Fonctions Graphiques</a></span></p>

        <p><span style="color: #007f00;"><a href="arc.php">Arc</a>, <a
        href="arc2.php">Arc2</a>, <a
        href="arcsensrotation.php">ArcSensRotation</a>, <a
        href="bezier.php">Bezier</a>, <a
        href="contourchemin.php">ContourChemin</a>, <a
        href="remplirchemin.php">RemplirChemin</a>, <a
        href="rempliretcontourchemin.php">RemplirEtContourChemin</a>, <a
        href="debutchemin.php">DebutChemin</a>, <a
        href="finchemin.php">FinChemin</a> </span><br>
        <span class="f_Textestd"><a href="faq1c.php">Quantification des
        articles sur cde fourn</a></span></p>

        <p><span class="f_Textestd"><a href="varremplissages.php">Variable de
        configuration remplissage :_RemplCateg2 []</a></span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 3/02/2006:</span></p>

        <p> </p>

        <p><span style="color: #ff0000;"><a href="faq1.php">Ajout d'un point
        dans la FAQ traitant de la Gestion de Stock</a></span></p>

        <p><span style="color: #ff0000;"><a href="faq3.php">Ajout d'une
        nouvelle section FAQ traitant du repositionnement des profils pour les
        usinages</a></span></p>

        <p><span style="color: #ff0000;"><a href="drmvariables.php">Traduction
        et mise à jour de la liste des variables locales au paramétrage du
        dormant</a></span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 13/01/2006:</span></p>

        <p> </p>

        <p><a href="artdescription.php">Case à cocher "Prix Net" de la fiche
        article</a></p>

        <p><a href="variablesgenerale.php">Variables générales :
        _PoidsChargement</a></p>

        <p><a href="vardormants.php">Variables dormant</a></p>

        <p><a href="varouvrantetquincaillerie.php">Variables ouvrant et
        quinc</a></p>

        <p><a href="varprofilperipherique.php">Variables profils
        périphériques</a></p>

        <p><a href="définitiondesquestions.php">Variables Imprimer</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Liste
        des nouveautés de la release du 13/10/2005:</span></p>

        <p> </p>

        <p><a href="varvolets.php">_CouleurSousLame</a></p>

        <p><a href="vardormants.php">_CouleurDormantRouge /Vert /Bleu</a></p>

        <p><a href="vardormants.php">_CouleurDormantIntRouge /Vert /Bleu</a></p>

        <p><a href="vardormants.php">_CouleurTraitDormantRouge /Vert
        /Bleu</a></p>

        <p><a href="vardormants.php">_CouleurTraitDormantIntRouge /Vert
        /Bleu</a></p>
      </td>
    </tr>
  </tbody>
</table>
</div>

<div class="ESP">
<!-- Placeholder for topic body. -->

<p><span
style="font-family:Helvetica,Arial; font-size:10pt; color:#000000">Bienvenido
al Manual de Referencia de WinPro</span></p>

<p><span
style="font-family:Helvetica,Arial; font-size:10pt; color:#000000">Este manual
de referencia tiene como objetivo ser un asistente muy útil para enseñarle
todas las posibilidades que ofrece WinPro.</span></p>

<p><span
style="font-family:Helvetica,Arial; font-size:10pt; color:#000000">Hicimos todo
lo posible para proveerle una documentación completa y exacta. Sin embargo, si
usted tiene cualquier observación o sugerencia, por favor le rogamos
contactarnos por E-mail en <a
href="mailto:info@quadrature.be">info@quadrature.be</a> - <a
href="mailto:obejar@winpro.es">obejar@winpro.es</a></span></p>
</div>

<div class="POL">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left">
        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table width="100%" cellspacing="0" cellpadding="5" border="0"
        style="border: none; border-spacing:0px;">
          <tbody>
            <tr style="text-align:left;vertical-align:top;">
              <td valign="top">
                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

                <table width="100%" cellspacing="0" cellpadding="2"
                bgcolor="#e8e8ff" border="0"
                style="background-color: #e8e8ff; border: none; border-spacing:0px;">
                  <tbody>
                    <tr style="text-align:left;vertical-align:top;">
                      <td valign="top"><p><span
                        style="font-size: 12pt; font-weight: bold; color: #000000;">Powitanie
                        w WinPro Reference Manual</span></p>
                      </td>
                      <td valign="top"><p style="text-align: right;"><span
                        style="color: #000000;">Góra  </span></p>
                      </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <p style="background: #fffff2;"><span
                style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>

                <p style="text-align: center; margin: 14px 0px 0px 0px;"><span
                style="font-size: 5pt; color: #000000;"> </span></p>

                <p style="background: #fffff2;"><span
                style="font-size: 5pt; color: #000000;"> </span></p>

                <p style="background: #fffff2;"><span
                style="color: #000000;">Podrecznik ten jest to przydatny
                asystent, który pomoze Ci opanowac wiele mozliwosci w WinPro.
                Staralismy sie zapewnic Panstwu pelne i dokladne informacje.
                Jednak, jesli masz uwagi lub sugestie, prosimy o kontakt e-mail
                </span><span style="color: #000000;"><a
                href="mailto:info@quadrature.be" class="weblink">info@winpro.be
                </a></span><span style="color: #000000;">.</span></p>
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

<div class="NED">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p class="p_Textestd"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">De vele functies binnen
        Winpro maken dit naslagwerk,we hopen dat dit u zal toestaan?om onze
        software beter te configureren</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Tegelijkertijd, aarzel
        niet om van jullie zijde jullie opmerkingen of suggesties aan ons door
        te geven, per e-mail op volgend adres :</span> <span
        class="f_Variables"><a href="mailto:fbournonville@winpro.be "
        class="weblink">fbournonville@winpro.be</a></span><span
        class="f_Textestd">of </span><span class="f_Variables"><a
        href="mailto:rmansour@winpro.be "
        class="weblink">rmansour@winpro.be</a></span></p>

        <p> </p>

        <p><span style="font-size: 14pt; font-weight: bold;"> </span></p>

        <p style="text-align: center;"><span
        style="font-size: 20pt; font-weight: bold;">Datum van compilatie
        :</span><span
        style="font-size: 20pt; font-weight: bold; color: #ff0000;">08 juli
        2013</span></p>

        <p><span style="font-size: 14pt; font-weight: bold;"> </span></p>

        <p style="text-align: center;"><span
        style="font-size: 14pt; font-weight: bold; color: #0000ff;">Deze help
        file is steeds in beweging, </span></p>

        <p style="text-align: center;"><span
        style="font-size: 14pt; font-weight: bold; color: #0000ff;">hij wordt
        op regelmatige basis gecompileert en ter uwer beschikking gesteld .
        </span></p>

        <p style="text-align: center;"><span
        style="font-size: 14pt; font-weight: bold; color: #0000ff;"> </span></p>

        <p style="text-align: center;"><span
        style="font-size: 14pt; font-weight: bold; color: #0000ff;">De inhoud
        hiervan wordt voortdurend gewijzigd.</span></p>

        <p style="text-align: center;"><span
        style="font-size: 14pt; font-weight: bold; color: #0000ff;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 25 januari 2012:</span></p>

        <p><a href="9_0_0_x.php">Release note's versie 9 (Franstalig)</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 21 juni 2011:</span></p>

        <p><a href="8_1_1_x.php">WPReport command line met input file
        (8.1.1.129)</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 09 november 2010</span></p>

        <p><a href="8_1_1_x.php">Gedrag van de variabele _EtatCommande
        (8.1.1.087)</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 01 september 2010:</span></p>

        <p><a href="8_0_0_x.php">Scripting taal voor mysql (8.0.0.000)</a></p>

        <p><a href="8_0_0_x.php">Module WPR+ (8.0.0.000)</a></p>

        <p><a href="8_0_4_x.php">Nieuwe functies WPR, RemoveDir, BrowseDir,
        FileExists, DeleteFile, FileLength, CopyFile, Execute
        (8.0.4.xxx)</a></p>

        <p><a href="8_0_4_x.php">RAL reststukken in WinPro/D (8.0.4.xxx)</a></p>

        <p><a href="8_0_4_x.php">Nieuwe lokale variabelen voor de marges,
        MargeTechnique &amp; MargeComposant (8.0.4.018)</a></p>

        <p><a href="8_0_4_x.php">Variable SansVitrage bij de verluchtingen
        (8.0.4.036)</a></p>

        <p><a href="8_0_4_x.php">Nieuwe sleutel voor de ingave van een raam met
        dorpel (8.0.4.037)</a></p>

        <p><a href="8_0_4_x.php">Import van de gegevens van WinPro/D via een
        command line (8.0.4.041)</a></p>

        <p><a href="8_1_0_x.php">Bijkomende informatie voor de module
        "Orderbeheer - TBC "(8.1.0.035)</a></p>

        <p><a href="8_1_0_x.php">Nieuwe functie WPR, SendMail
        (8.1.0.035)</a></p>

        <p><a href="8_1_0_x.php">Purge de exporttables in versie 8
        (8.1.0.045)</a></p>

        <p><a href="8_1_0_x.php">Nieuwe globale variabelen voor de vullingen
        _Rempl(x)Ug, _Rempl(x)PsiG, _Rempl(x)TransLum, _Rempl(x)FacSol,
        _Rempl(x)Intercalaire, _Rempl(x)Intercalaire2 (8.1.0.073)</a></p>

        <p><a href="8_1_1_x.php">Samengestelde beglazingen in het tabbald
        "Informatie" (8.1.1.004)</a></p>

        <p><a href="8_1_1_x.php">Module Beheer/Opvolging betalingen SP
        (8.1.1.010)</a></p>

        <p><a href="8_1_1_x.php">Optie voor de ingave van kleinhouten
        (8.1.1.028)</a></p>

        <p><a href="8_1_1_x.php">Optie voor het herbestellen van beglazing voor
        de module "Ontvangst beglazingen -CFV" (8.1.1.038)</a></p>

        <p><a href="8_1_1_x.php">Automatische PDF voor WPR (8.1.1.039)</a></p>

        <p><a href="8_1_1_x.php">Reservaties voor het lakken van volledige
        lengtes (8.1.1.065)</a></p>

        <p><a href="8_1_1_x.php">Nieuwe globale variabelen voor stijlen/regels
        &amp; koppelingen, _CategCoupleurDroite/Gauche/Haut/Bas
        (8.1.1.074)</a></p>

        <p><a href="8_1_1_x.php">Melding extra afdrukken met
        WPR(8.1.1.074)</a></p>

        <p><a href="8_1_1_x.php">Uitbreiding ingave
        bijprofielen(8.1.1.074)</a></p>

        <p><a href="8_1_1_x.php">Overzetten van klant naar
        prospect(8.1.1.075)</a></p>

        <p><a href="8_1_1_x.php">Vorm osseoog (ovaal)&amp; Aanslagen kader
        (8.1.1.075)</a></p>

        <p><a href="8_1_1_x.php">Enkel rolluik en systeem variabelen
        (8.1.1.075)</a></p>

        <p><a href="8_1_1_x.php">Barcode beglazing &amp; module "Ontvangst
        beglazingen -CFV" (8.1.1.077)</a></p>

        <p><a href="8_0_4_x.php"> </a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 27 juli 2010:</span></p>

        <p><a href="8_0_2_x.php">Toepassing van de Brent index op een offerte
        (8.02.048)</a></p>

        <p><a href="8_1_0_x.php">Export/Import van vertalingen in Excel
        (8.1.0.027)</a></p>

        <p><a href="8_1_0_x.php">Aftrek van de kaderoverlapping voor de
        thermische berekening (8.1.0.039)</a></p>

        <p><a href="8_1_0_x.php">Uitschakelen van de thermische berekening voor
        enkel rolluiken (8.1.0.039)</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 17 juli 2010:</span></p>

        <p><a href="7_2_7x.php">Toevoegingen van release note's 7.2.70
        (Franstalig)</a></p>

        <p><a href="7_2_8x.php">Toevoegen van release note 7.2.80
        (Franstalig)</a></p>

        <p><a href="8_0_1_x.php">Toevoegingen van release note's 8.01
        (Franstalig)</a></p>

        <p><a href="8_0_3_x.php">Toevoegingen van release note's 8.03
        (Franstalig)</a></p>

        <p><a href="8_0_4_x.php">Toevoegingen van release note's 8.04
        (Franstalig)</a></p>

        <p><a href="8_1_0_x.php">Toevoegingen van release note's 8.1.0
        (Franstalig)</a></p>

        <p><a href="8_1_1_x.php">Toevoegingen van release note's 8.1.1
        (Franstalig)</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 14 juni 2010:</span></p>

        <p><a href="8_1_1_x.php">Toevoegen van de nieuwe module GLPV in de
        release note's 8.1.1 (Franstalig)</a></p>

        <p><a href="8_1_1_x.php">Toevoegen van de nieuwe module TMS in de
        release note's 8.1.1 (Franstalig) </a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 13 juni 2010:</span></p>

        <p><a href="8_0_4_x.php">Toevoegingen van release note's 8.04 :
        samengestelde beglazingen</a></p>

        <p><a href="8_0_4_x.php">Toevoegingen van release note's : Prijs
        toevoegen vanuit een bibliotheek</a></p>

        <p><a href="accessibilitédesquestions.php">Correctie en aanvulling op
        toegankelijkheid van de vragen</a></p>

        <p><a href="panprice.php">Toevoeging op de berekening van te zagen
        panelen</a></p>

        <p><a href="8_1_1_x.php">Toevoegen van de samengestelde sierpanelen in
        de release note's 8.1.1</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 15 april 2010</span></p>

        <p><a href="scies.php">Correctie betreffende de limieten voor het zagen
        bij alternatieve zagen</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 2 april 2010:</span></p>

        <p><a href="8_1_0_x.php">Correctie van de release note's 8.1.0: CE
        Markering</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 8 maart 2010:</span></p>

        <p><a href="8_0_1_x.php">Toevoegingen van release note's 8.01:
        Archivering </a></p>

        <p><a href="8_0_4_x.php">Toevoegingen van release note's 8.04:
        Installatie WinPro/D</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 29 februari 2010:</span></p>

        <p><a href="8_1_0_x.php">Toevoegingen van release note's 8.1.0: CE
        Markering</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 29 september 2009:</span></p>

        <p><a href="8_1_0_x.php">Toevoegingen van release note's 8.1</a></p>

        <p><a href="8_0_4_x.php">Toevoegingen van release note's 8.04</a></p>

        <p><a href="8_0_0_x.php">Toevoegingen van release note's 8.0</a></p>

        <p> </p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 22 juni 2009:</span></p>

        <p><a href="8_1_0_x.php">Toevoegingen van release note's 8.1</a></p>

        <p><a href="8_0_4_x.php">Toevoegingen van release note's 8.04</a></p>

        <p><a href="8_0_0_x.php">Toevoegingen van release note's 8.0</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 29 april 2009:</span></p>

        <p><a href="utilinfoclimultiple.php">Integratie va<span
        class="ENG"></span>n menu Instellingen | Aanmaken meerdere INFOCLI
        Disketten </a></p>

        <p><a href="utilwinprodinternet.php">Integratie van menu Instellingen |
        WinPro/D Internet</a></p>

        <p><a href="utilimportbase.php">Integratie van menu Instellingen |
        Import database </a></p>

        <p><a href="utilexportbase.php">Integratie van menu Instellingen |
        Export database </a></p>

        <p><a href="utilimportini.php">Integratie van menu Instellingen |
        Import WinPro.ini</a></p>

        <p><a href="utilexportini.php">Integratie van menu Instellingen |
        Export WinPro.ini</a></p>

        <p><a href="utilmodificationsettings.php">Integratie van menu
        Instellingen | Wijzig Instellingen</a></p>

        <p><a href="utilregenereruser.php">Integratie van menu Instellingen |
        Regenereer de Winpro gebruikers in de database</a></p>

        <p><a href="utilsuppressioncaches.php">Integratie van menu Instellingen
        | Wissen van het cache geheugen</a></p>

        <p><a href="utilimportgrillesprix.php">Integratie van menu Instellingen
        | Import prijslijsten </a></p>

        <p><a href="8_0_4_x.php">Toevoegingen van release note's 8.0.4</a></p>

        <p> </p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 27 april 2009:</span></p>

        <p><a href="utilmagasinstockprincipal.php">Integratie van menu
        Instellingen| Hoofdvoorraad</a></p>

        <p><a href="utilsystemeprincipal.php">Integratie van menu Instellingen|
        Hoofdsysteem</a></p>

        <p><a href="utilsupplementintercalaire.php">Integratie van menu
        Instellingen| Supplement kleur afstandshouder</a></p>

        <p><a href="utiltauxtva.php">Integratie van menu Instellingen| BTW
        Code's</a></p>

        <p><a href="utilcoordonneessociete.php">Integratie van menu
        Instellingen| Gegevens van de maatschappij</a></p>

        <p><a href="utillicence.php">Integratie van menu Instellingen|
        Licentie</a></p>

        <p><a href="utilimportdeceuninck.php">Integratie van menu Instellingen|
        Import Deceuninck artikelen</a></p>

        <p><a href="utilutilisateurs.php">Integratie van menu Instellingen|
        Gebruikers</a></p>

        <p><a href="utilmotdepasse.php">Integratie van menu Instellingen|
        Wachtwoord</a></p>

        <p><a href="utilautreutilisateur.php">Integratie van menu Instellingen|
        Andere gebruiker</a></p>

        <p><a href="utilbasculertarif.php">Integratie van menu Instellingen|
        Tariefprijzen dumpen</a></p>

        <p><a href="utilaugmenterachat.php">Integratie van menu Instellingen|
        Inkoopprijs verhogen</a></p>

        <p><a href="utilremiseachat.php">Integratie van menu Instellingen|
        Korting op de inkoopprijs</a></p>

        <p><a href="utilmodifierclef.php">Integratie van menu Instellingen| De
        code van 1 record aanpassen</a></p>

        <p><a href="utildupliquercouleur.php">Integratie van menu Instellingen|
        Een kleur kopieëren</a></p>

        <p><a href="utilmodifieretatcommande.php">Integratie van menu
        Instellingen| De staat van een bestelling wijzigen</a></p>

        <p><a href="utilmodifieretatchassis.php">Integratie van menu
        Instellingen| De staat van een raam wijzigen</a></p>

        <p><a href="utilbasevide.php">Integratie van menu Instellingen| Lege
        database</a></p>

        <p><a href="utilbasecommerciale.php">Integratie van menu Instellingen|
        Commerciêle database</a></p>

        <p><a href="utilimportcommercial.php">Integratie van menu Instellingen|
        Import commerciële database</a></p>

        <p><a href="utilexporttechnique.php">Integratie van menu Instellingen|
        Export technische database</a></p>

        <p><a href="faq6.php">Toevoegen van een link in de FAQ op de lijst van
        technische tabellen</a></p>

        <p><a href="utilbasedevis.php">Integratie van menu Instellingen|
        Offerte database</a></p>

        <p><a href="utilinfocli.php">Integratie van menu Instellingen|
        Informatie klant voor de offertemodule</a></p>

        <p><a href="utilbasecommerciale.php"> </a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 21 april 2009:</span></p>

        <p><a href="varremplissages.php">Configuratievariabele vulling
        _RemplWarmEdge[]</a></p>

        <p><a href="vitvariables.php">Variabele beglazing WarmEdge</a></p>

        <p><a href="8_1_0_x.php">Toevoegingen van release note's 8.1</a></p>

        <p><a href="warmedge.php">Integratie van warm edges</a></p>

        <p><a href="zonelivraison.php">Integratie van leveringszones</a></p>

        <p><a href="client.php">Integratie van de uitgebreide
        klantenfiche(enkele velden dienen nog gedefinieert te worden)</a></p>

        <p><a href="utilpreferences.php">Integratie van menu Instellingen |
        Parameters dokument</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 07 april 2009:</span></p>

        <p><a href="variablesgenerale.php">Toevoegen van algemene variabelen
        _NiveauDate, _CategPosteAtelier</a></p>

        <p><a href="prospect.php">Integratie van prospects</a></p>

        <p><a href="representants.php">Integratie van vertegenwoordigers</a></p>

        <p><a href="modepaiement.php">Integratie van
        betalingsvoorwaarden</a></p>

        <p><a href="magasinsstock.php">Integratie van voorraadplaatsen</a></p>

        <p><a href="incidents.php">Integratie van bijzondere
        gebeurtenissen</a></p>

        <p><a href="equipepose.php">Integratie van montageploegen</a></p>

        <p><a href="configurationniveaudates.php">Integratie van datumniveau
        configuratie</a></p>

        <p><a href="coefficientsprix.php">Integratie van
        prijscoefficienten</a></p>

        <p><a href="articlespose.php">Integratie van montage artikelen</a></p>

        <p><a href="categoriespanneaux.php">Integratie van paneel
        categorieën</a></p>

        <p><a href="categoriesremplissage.php">Integratie van
        vullingscategorieën</a></p>

        <p><a href="categoriesclient.php">Integratie van
        klantcategorieën</a></p>

        <p><a href="codepostaux.php">Integratie van postcode's</a></p>

        <p> </p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 02 april 2009 :</span></p>

        <p><a href="normeverre.php">Franstalige vertalingen en diverse
        toevoegingen</a></p>

        <p><a href="finition.php">Integratie van finitions (afwerkingen)
        </a></p>

        <p><a href="macros___.php">Toevoegen van macros voor finitions</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 27 maart 2009 :</span></p>

        <p><a href="tolepliees.php">Franstalige vertalingen en diverse
        toevoegingen </a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 01 februari 2009 :</span></p>

        <p><a href="8_1_0_x.php">Toevoegen van Thermische module WinPro
        8.1</a></p>

        <p><a href="winprod_internet.php"> </a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 24 november 2008 :</span></p>

        <p><a href="8_0_0_x.php">Integratie van release note's WinPro
        8.0</a></p>

        <p><a href="8_1_0_x.php">Integratie van release note's WinPro
        8.1</a></p>

        <p><a href="winprod_internet.php">Integratie van release note's
        WinPro/D 8.0.2</a></p>

        <p><a href="dormants.php">Franstalige vertalingen en toevoeging voor
        kaders </a></p>

        <p><a href="ouvrants.php">Franstalige vertalingen en toevoeging voor
        vleugels</a></p>

        <p><a href="quincailleries.php">Franstalige vertalingen en toevoeging
        voor beslag</a></p>

        <p><a href="traverses.php">Franstalige vertalingen en toevoeging voor
        stijlen/regels </a></p>

        <p><a href="vitrages.php">Franstalige vertalingen gedeelelijk en
        toevoeging voor de beglazing</a></p>

        <p><a href="syscouleurs.php"> </a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 01 januari 2008 :</span></p>

        <p><a href="syscouleurs.php">Update tabblad kleuren in een
        systeem</a></p>

        <p><a href="prfdescription.php">Correctie van de definitie " correctie
        zaagsnede bij 45° "</a></p>

        <p><a href="prfoptimisation.php">Update tabblad Optimalisatie bij
        Profielen</a></p>

        <p><a href="varremplissages.php">Variabele voor de kleur van
        kleinhouten</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 20 november 2007 :</span></p>

        <p><a href="ouvvariables.php">Variabele vleugels</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 10 juli 2007 :</span></p>

        <p><a href="variablesgenerale.php">Variabelen algemeen:_TypeFauxCintre,
        _FormeFauxCintre, _CouleurMauclair </a></p>

        <p> </p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 12 maart 2007 :</span></p>

        <p><a href="drmvariables.php">VideDansCoinDroit, VideDansCoinGauche,
        Finition</a></p>

        <p><a href="faq5.php">FAQ : Berekenen van varianten</a></p>

        <p><span style="color: #007f00;"><a
        href="varouvrantetquincaillerie.php">Configuratie variabelen Kader :
        _DormantFinition...</a></span></p>

        <p><span style="color: #007f00;"><a
        href="varouvrantetquincaillerie.php">Configuratie variabelen Stijl :
        _TraverseFinition...</a></span></p>

        <p><span style="color: #007f00;"><a
        href="varouvrantetquincaillerie.php">Configuratie variabelen Vleugel :
        _OuvrantFinition []...</a></span></p>

        <p><span style="color: #007f00;"><a
        href="varouvrantetquincaillerie.php">Configuratie variabelen Vleugel :
        _OuvrantMauclairFinition []...</a></span></p>

        <p><span style="color: #007f00;"><a
        href="varouvrantetquincaillerie.php">Configuratie variabelen Vulling :
        _RemplParcloseFinition []...</a></span></p>

        <p><span class="f_Variables"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 04 december 2006 :</span><br>
        <span style="color: #007f00;"><a
        href="notes_de_versions.php">Integratie van de release note's in dit
        bestand</a></span></p>

        <p><span style="color: #ff0000;"><a href="drmvariables.php">Variabelen
        kader: DormantAuDessusVide et TraverseAuDessusVide</a></span></p>

        <p><span style="color: #007f00;"><a
        href="variablesgenerale.php">Variabelen algemeen : _CommandeVitrage,
        _FormeAssemblage, _DateMiseEnLotChassis,
        _DateMiseEnLotVolet,_EtatCommande</a></span></p>

        <p><span style="color: #007f00;"><a href="vardormants.php">Configuratie
        variabelen Kader : _CentreXDormant[] _CentreYDormant[]
        _NcourbesDormant...</a></span></p>

        <p><span style="color: #007f00;"><a
        href="varouvrantetquincaillerie.php">Configuratie variabelen Vleugel:
        _OuvrantLargeurVantail1 []...</a></span></p>

        <p><span style="color: #007f00;"><a
        href="varouvrantetquincaillerie.php">Configuratie variabelen Vleugel:
        _OuvrantJeuMauclair1 []...</a></span></p>

        <p><span style="color: #007f00;"><a href="sysdescription.php">Systeem :
        Te selecteren : Kader zonder aanslag &amp; Comptage
        individueel...</a></span></p>

        <p><span style="color: #007f00;"><a
        href="fonctions_graphiques.php">Grafische Functies</a></span></p>

        <p><span style="color: #007f00;"><a href="arc.php">Arc</a>, <a
        href="arc2.php">Arc2</a>, <a
        href="arcsensrotation.php">ArcSensRotation</a>, <a
        href="bezier.php">Bezier</a>, <a
        href="contourchemin.php">ContourChemin</a>, <a
        href="remplirchemin.php">RemplirChemin</a>, <a
        href="rempliretcontourchemin.php">RemplirEtContourChemin</a>, <a
        href="debutchemin.php">DebutChemin</a>, <a
        href="finchemin.php">FinChemin</a> </span><br>
        <span class="f_Textestd"><a href="faq1c.php">Aantallen artikelen op de
        leveranciersbestelling</a></span></p>

        <p><span class="f_Textestd"><a href="varremplissages.php">Configuratie
        variabelen Vulling :_RemplCateg2 []</a></span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 03 februari 2006:</span></p>

        <p> </p>

        <p><span style="color: #ff0000;"><a href="faq1.php">Toevoegen van een
        punt in de FAQ over voorraadbeheer</a></span></p>

        <p><span style="color: #ff0000;"><a href="faq3.php">Toevoegen van een
        sectie in de FAQ waar de repositie van de profielen gebeurd bij
        bewerkingen</a></span></p>

        <p><span style="color: #ff0000;"><a href="drmvariables.php">Vertaling
        en update van de lijst van lokale variabelen gebruikt op
        kaderniveau</a></span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 13 januari 2006:</span></p>

        <p> </p>

        <p><a href="artdescription.php">Te selecteren "Netto prijs" in de
        artikelfiche</a></p>

        <p><a href="variablesgenerale.php">Variabelen algemeen :
        _PoidsChargement</a></p>

        <p><a href="vardormants.php">Variabelen kader</a></p>

        <p><a href="varouvrantetquincaillerie.php">Variabelen vleugels en
        beslag</a></p>

        <p><a href="varprofilperipherique.php">Variabele Bijprofielen</a></p>

        <p><a href="définitiondesquestions.php">Variabele Afdrukken</a></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;"> </span></p>

        <p><span
        style="font-size: 11pt; font-weight: bold; color: #007f00; text-decoration: underline;">Lijst
        van nieuwigheden :release 13 oktober 2005:</span></p>

        <p> </p>

        <p><a href="varvolets.php">Variabelen rolluik : _CouleurSousLame</a></p>

        <p><a href="vardormants.php">Variabelen kader : _CouleurDormantRouge
        /Vert /Bleu</a></p>

        <p><a href="vardormants.php">Variabelen kader :_CouleurDormantIntRouge
        /Vert /Bleu</a></p>

        <p><a href="vardormants.php">Variabelen kader
        :_CouleurTraitDormantRouge /Vert /Bleu</a></p>

        <p><a href="vardormants.php">Variabelen kader
        :_CouleurTraitDormantIntRouge /Vert /Bleu</a></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
