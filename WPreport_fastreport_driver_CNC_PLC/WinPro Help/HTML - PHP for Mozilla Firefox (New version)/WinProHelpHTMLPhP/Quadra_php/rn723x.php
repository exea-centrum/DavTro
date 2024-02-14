<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["FRA","NED"];
var WinProHelpPageName=["7.2.3x","7.2.3x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?rn723x.php"; }
else { parent.quicksync('a11.4.6'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>7.2.3x</title>
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
        href="introduction.php">Top</a>  <a href="rn724x.php">Previous</a>  <a
        href="rn722x.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="FRA">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p style="text-align: center;"> </p>

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
                7.2.38</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">15/12/2006</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Onglet
        Informations:</span><span class="f_Textestd">Les questions relatives
        aux panneaux fabriqués sont désormais affichées dans l'onglet
        Informations de la cde/devis client.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Accès au bouton
        "Imprimer F11":</span><span class="f_Textestd">A l'aide d'une nouvelle
        clé dans le fichier Winpro.ini, il est désormais possible de rendre
        indisponible le bouton "Imprimer F11" tant que la page est en
        édition.</span></p>

        <p class="p_Textestd"><span class="f_Winproini">[System]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">PasImprimerSiEdition  
             = 1        </span><span class="f_Textestd">pour activer la
        fonctionnalité</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">WinproD export
        des données:</span><span class="f_Textestd">WinproD peut également
        exporter les données. La configuration de l'export se fait uniquement
        via le fichier winpro.ini</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelle
        instruction de dessin avec notion de continuité:</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cette instruction
        complète la liste documentée en version 7.2.29. </span></p>

        <p class="p_Textestd"><span
        class="f_Variables">ArcSensRotation(0</span><span class="f_Textestd">ou
        </span><span class="f_Variables">1)</span><span class="f_Textestd"> :
        Défini le sens de rotation des arcs qui suivent cette
        instructions.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Curseur de
        précision de l</span><span
        class="f_TitreReleaseNote">&rsquo;</span><span
        class="f_TitreReleaseNote">optimisation:</span><span
        class="f_Textestd">Vous pouvez définir la position du curseur par
        défaut par l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">ajout d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">une clé dans
        le fichier Winpro.ini</span></p>

        <p class="p_Textestd"><span
        class="f_Winproini">[Optimisation]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">MaxLoop        =
        0</span><span class="f_Textestd">pour positionner le curseur à gauche +
        rapide (la valeur doit être comprise entre 0 et 8)</span></p>

        <p class="p_Textestd">               <span class="f_Winproini">=
        4</span><span class="f_Textestd">pour positionner le curseur au centre
        (valeur par défaut)</span></p>

        <p class="p_Textestd">               <span class="f_Winproini">=
        8</span><span class="f_Textestd">pour positionner le curseur à droite +
        précis</span></p>

        <p style="margin: 4px 0px 4px 0px;">       <img src="img/clip0248.jpg"
        width="343" height="74" border="0" alt="Clip0248"></p>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">Saisie des traverses:</span>
        Lorsqu'on encode une des traverses dans un châssis, WinPro garde en
        mémoire les informations de la première ou de la dernière traverse
        encodée. <br>
        Une troisième valeur est maintenant possible spécifiant à Winpro de ne
        mémoriser aucun paramètre de saisie de traverse. Voir RN 7.2.28</p>

        <p><span style="font-weight: bold; color: #666699;">[System]</span></p>

        <p><span style="font-weight: bold; color: #666699;">Traverse Static    
           = 0 </span>(mémorisation des paramètres de la première traverse
        saisie)</p>

        <p>               <span style="font-weight: bold; color: #666699;">= 1
        </span>(mémorisation des paramètres de la dernière traverse saisie)</p>

        <p>               <span style="font-weight: bold; color: #666699;">= 2
        </span>(mémorisation d'aucun paramètre)</p>

        <p> </p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Export technique:</span><span
        class="f_Textestd">Un nouveau point de menu “Export technique” est
        ajouté au menu Utilitaires. L</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">export
        technique constitue une base de données contenant exclusivement les
        tables concernées par le paramétrage.</span><br>
        <span class="f_Textestd">Cette fonctionnalité est utile pour les
        paramétreurs travaillant sur base Winpro “développement” de transférer
        en temps utile le paramétrage complet vers la base Winpro
        “production”(par exemple).</span><br>
        <span class="f_Textestd">L</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">export
        technique génère donc les tables dbf dans le répertoire “technique”.
        Ces tables peuvent donc être transférées dans le répertoire Data
        d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">une autre base de donnée Winpro (de même
        version).</span><br>
        <span class="f_Textestd">Avant de procéder à une telle opération,
        veuillez contrôler que des données sensibles à conserver ne seront pas
        écrasées lors du transfert des tables.</span><br>
        <span class="f_Textestd">D</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">autre part,
        un point de menu “Import Technique” peut également être ajouté en
        spécifque à votre demande en nous précisant quels champs ne doivent pas
        être mis à jour lors de cette importation.   </span></p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                7.2.37</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">23/11/2006</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Profils
        complémentaires:</span><span class="f_Textestd">La saisie est désormais
        possible jusqu</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">à une décimale.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span><br>
        <span class="f_TitreReleaseNote">Livraisons et factures partielles
        (module LFP):</span><span class="f_Textestd">Une commande peut être
        livrée partiellement, et facturée partiellement. </span><br>
        <span class="f_Textestd">Voici quelques spécificités du
        module:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Le total facturé correspondra au
                montant total confirmé au client tout en tenant compte des
                acomptes facturés et non-facturés.</span></td>
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
              <td><span class="f_Textestd">La pose est également facturable
                partiellement.</span></td>
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
              <td><span class="f_Textestd">Rien ne vous empêche de facturer
                partiellement avant de livrer partiellement. </span></td>
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
              <td><span class="f_Textestd">Ce module nécessite l</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">activation de la gestion des colis, car nous
                livrons et facturons des colis.</span></td>
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
              <td><span class="f_Textestd">La valorisation des colis
                automatique par Winpro correspondra aux montants confirmés au
                client, il est donc conseillé de travailler en remise déduite
                lors de la saisie des commandes et devis.</span></td>
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
              <td><span class="f_Textestd">L</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">utilisateur a la possibilité de modifier la
                valorisation par défaut de chaque colis.</span></td>
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
              <td><span class="f_Textestd">Dés qu</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">une
                commande est approuvée, elle est disponible pour le
                colisage.</span></td>
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
              <td><span class="f_Textestd">Une case « colisage complet » est
                ajoutée à l</span><span class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">interface de mise en colis permettant au
                préparateur d</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">indiquer que le colisage est terminé pour
                cette commande, alors qu</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">il
                reste des articles non colisés.</span></td>
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
              <td><span class="f_Textestd">Pour livrer et/ou partiellement, il
                est indispensable que la commande soit complètement optimisée
                et que le Bordereau préparation du BL soit édité.</span></td>
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
              <td><span class="f_Textestd">L</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">édition du BL partiel est valorisé ou non en
                fonction de l</span><span
                class="f_Textestd">&rsquo;</span><span class="f_Textestd">état
                de la case « BL Val » se trouvant dans l</span><span
                class="f_Textestd">&rsquo;</span><span
                class="f_Textestd">onglet Entête de la commande
              client.</span></td>
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
              <td><span class="f_Textestd">Tous les documents édités peuvent
                être réimprimés.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="text-decoration: underline;">De nouveaux états pour la commande
        ont été ajoutés:</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">802: Livraison partielle : La commande est
        intégralement facturée et rien n</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">est livré
        (couleur Mauve)</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">810: Livraison et Facture partielle : La commande
        est livrée et facturée partiellement (couleur Saumon)</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">852: Facturation partielle : La commande est
        intégralement livrée et rien n</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">est facturé
        (couleur Verte)</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">860: La commande est intégralement livrée et
        facturée via plusieurs livraisons et factures.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span><br>
        <span class="f_Textestd" style="text-decoration: underline;">Pour
        rappel:</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">740: Edition du bordereau de préparation du
        BL</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">850: Commande facturée et livrée de manière
        ordinaire, sans passer par le BL partiel et la facture
        partielle.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Teintes Ral std
        autorisées par faces:</span><span class="f_Textestd">Lorsque vous
        limitez le choix de vos teintes Ral standard en activant la case
        spécifique se trouvant dans l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">onglet
        couleur de la fiche Système, Winpro active un nouveau bouton « Choix
        Faces » qui vous permet de définir la disponibilité de la teinte en Vue
        intérieure et/ou en Vue extérieure lors de la saisie d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">un repère
        dans un devis/cde. Les 2 cases sont décochées par défaut, cet état est
        interprété par Winpro comme si elles étaient cochées simultanément. 
        </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                7.2.36</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">16/11/2006</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p><span class="f_TitreReleaseNote">Nouvelle variable :</span><span
        style="font-weight: bold;"></span><span
        class="f_Variables">_EtatCommande</span> : Renvoie la valeur numérique
        correspondant à l&rsquo;état de la commande, soit : <span
        class="f_Variables">100</span>=devis; <span
        class="f_Variables">200</span>=Commande non traitée; <span
        class="f_Variables">210</span>=Commande modifiée; <span
        class="f_Variables">220</span>=Impression confirmation; <span
        class="f_Variables">240</span>=Vérification confirmation; <span
        class="f_Variables">250</span>=Impression de la commande fournisseur;
        <span class="f_Variables">260</span>=Avalisation financière; <span
        class="f_Variables">280</span>=Envoi confirmation; <span
        class="f_Variables">398</span>=Mise en attente; <span
        class="f_Variables">399</span>=Réactivation après mise en attente;
        <span class="f_Variables">400</span>=Approbation; <span
        class="f_Variables">420</span>=Commande vitrages; <span
        class="f_Variables">499</span>=Préparation optimisation; <span
        class="f_Variables">500</span>=Optimisation complète; <span
        class="f_Variables">501</span>=Optimisation partielle; <span
        class="f_Variables">600</span>=Mise en production complète; <span
        class="f_Variables">601</span>=Mise en production partielle; <span
        class="f_Variables">700</span>=Fin de fabrication; <span
        class="f_Variables">740</span>=Préparation de la livraison; <span
        class="f_Variables">800</span>=Note d'envoi; <span
        class="f_Variables">850</span>=Facturation; <span
        class="f_Variables">900</span>=Clôture<br>
        <span style="text-decoration: underline;">Remarque :</span>Sachez que
        de nouveaux états sont susceptibles d&rsquo;être ajoutés à la liste
        actuelle, comme c&rsquo;est déjà le cas en version 7.2.37</p>

        <p class="p_Textestd" style="text-align: center;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="text-align: center;"><span
        class="f_Textestd"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                7.2.35</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">10/11/2006</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Nouvelles
        variables:</span><span class="f_Textestd"></span><span
        class="f_Variables">_DateMiseEnLotChassis</span><span
        class="f_Textestd"> et </span><span
        class="f_Variables">_DateMiseEnLotVolet</span><span
        class="f_Textestd"> : Ces 2 variables renvoient la date à laquelle le
        lot contenant la menuiserie à été généré.</span><br>
        <span class="f_Textestd">Attention ces 2 variables ne sont initialisées
        que lors du clic sur le bouton « Générer les lots » de l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">interface de
        préparation des lots spécifique au module GLP (Gestion des lignes de
        production). Si vous ne disposez pas de ce module, les variables ne
        seront jamais initialisées.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Categorie des
        remplissages:</span><span class="f_Textestd">Un second champ catégorie
        a été ajouté aux différents remplissages. Ces nouveaux champs
        initialisent une nouvelle variable, </span><span
        class="f_Variables">_RemplCateg2 [ ]</span><span
        class="f_Textestd">dont les propriétés sont comparables à la variable
        </span><span class="f_Variables">_RemplCateg [ ]</span><span
        class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                7.2.34</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">06/11/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p><span class="f_TitreReleaseNote">Export des vues coupe en DXF
        (module DXFC) : </span>L&rsquo;activation de ce module, vous donne
        l&rsquo;accès à un nouveau bouton se trouvant dans l&rsquo;onglet
        Dessin du devis/cde. Ce bouton exportera sous la forme d&rsquo;un
        fichier DXF la ou les différentes coupes placées sur le dessin. Ce
        fichier DXF sera donc ensuite exploitable par votre logiciel de DAO.</p>

        <p class="p_Comment"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" cellspacing="0" cellpadding="4" border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="512" bgcolor="#8bab97"
              style="width: 512px; background-color: #8bab97; border: solid 1px #000000;"><p><span
                style="font-weight: bold; text-decoration: underline;">Attention:</span></p>

                <p>Cette fonction est prévue pour exporter les coupes de châssis uniquement ! Les élévations ne sont pas exportées sous format DXF !</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                7.2.33</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">30/10/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Optimisation
        avec macro dans description:</span><span class="f_Textestd">En
        préparation au calcul de l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">optimisation
        des barres, Winpro regroupe les débits en fonction de leur couleur
        respective. Dans le cas où la description des profils contient une
        macro (par exemple </span><span class="f_Variables">#3#</span><span
        class="f_Textestd">), Winpro peut éventuellement tenir compte de ce
        paramètre supplémentaire lors du regroupement des débits. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Dans ce cas, le
        regroupement est effectué à la fois sur la couleur et sur la
        description.</span><br>
        <span class="f_Textestd">Pour que Winpro optimise le profil en tenant
        compte de la macro présente dans la description, il faut alors cocher
        la nouvelle case « Grouper par description » se trouvant dans
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">onglet Optimisation du profil concerné.  </span></p>

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
                7.2.32</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">24/10/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"><span
        class="f_Winproini"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Optimisation de
        profils avec macros:</span><span class="f_Textestd">Une nouvelle case 
        à cocher "Grouper par description" se trouvant dans l'onglet
        Optimisation de la page Profil. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cette case peut être
        cochée par l'utilisateur afin de préciser à Winpro s'il doit tenir
        compte de la présence d'une éventuelle macro dans la description du
        profil. </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Si oui, à l'optimisation, il éclatera les barres en
        fct de la couleur et de la description. </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Sinon, il ne tient compte que de la couleur pour
        l'éclatement.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Chantier:
        Commandes groupées (module CDC):</span><span class="f_Textestd">Une
        commande chantier regroupe plusieurs commandes client. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">La commande chantier est
        créée par un utilisateur (autorisé à la création de commandes) via Menu
        Commandes | Commandes chantiers. Les commandes client pourront ensuite
        être associées à une commande chantier via un champ spécifique se
        trouvant dans l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">onglet Entête.</span><br>
        <span class="f_Textestd">Attention il n</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">est possible
        pas d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">associer une commande client dont le client est X à
        une commande chantier dont le client est Y.</span><br>
        <span class="f_Textestd">Il est également possible d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">ouvrir
        simultanément une ou plusieurs commandes clients associées au chantier
        en cours de visualisation depuis la fenêtre des commandes
        chantiers.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span><br>
        <span class="f_TitreReleaseNote">Validation des livraisons:</span><span
        class="f_Textestd">Il s</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">agit
        d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">un nouveau point de menu disponible optionnellement
        qui ajoute un nouvel état de commande. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Une commande livrée ne
        pourra être facturée que si la livraison a bien été validée.</span><br>
        <span class="f_Textestd">Cette étape intermédiaire est incompatible
        avec le module traitant les livraisons et factures
        partielles.</span><br>
        <span class="f_Textestd">L</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">activation de
        ce point de menu s</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">effectue par l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">ajout
        d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">une clé dans le fichier Winpro.ini :</span></p>

        <p class="p_Textestd"><span class="f_Winproini">[Customer
        Order]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Delivered Order      
         = 1</span><span class="f_Textestd">       pour activer le point de
        menu</span></p>

        <p class="p_Textestd">                       <span
        class="f_Winproini">= 0</span><span class="f_Textestd">       pour
        désactiver le point de menu</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Calcul de dates
        automatisé (module DAT):</span><span class="f_Textestd">Ce module vous
        permet de calculer automatiquement des dates « clés » pour
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">organisation et le suivi des commandes clients.
        </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ces dates sont
        accessibles dans un nouvel onglet de la commande client. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ces dates seront
        calculées automatiquement par WinPro par rapport à la date de
        livraison.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Un mécanisme
        paramétrable permet de définir, suivant un niveau de difficulté
        technique (ou autre), le nombre de jours à déduire de la date de
        livraison afin d'obtenir ces dates.</span><br>
        <span class="f_Textestd">Il faut au préalable définir les types de date
        via le menu Données | Autres données | Types de dates.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ensuite, il faut définir
        pour chaque niveau le nombre de jours ouvrables à déduire de la date de
        livraison, et ce pour chaque type de date. Cette opération
        s</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">effectue via le menu Données | Autres données |
        Configuration des niveaux de dates. L</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">accès à ces
        données est protégé par un nouveau droits utilisateurs « Configuration
        des dates ».</span></p>

        <p class="p_Textestd"><span class="f_Textestd">La dernière étape
        consiste à initialiser la variable </span><span
        class="f_Variables">_NiveauDate</span><span class="f_Textestd">via le
        paramétrage technique afin de spécifier à Winpro quel niveau de date
        nous souhaitons appliquer à la menuiserie en cours de calcul.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Winpro base ses calculs
        de date en ne retenant que le niveau de date le plus élevé de tous les
        repères.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">Voici un simple
        exemple:</span><br>
        <span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="text-decoration: underline;">Types de
        dates:</span><span class="f_Textestd">Débit, Commande
        vitrages</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="text-decoration: underline;">Niveau de
        dates:</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Niveau 1 (par exemple : forme
        rectangulaire)</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Débit : 15 jours ouvrables</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Commande vitrages : 21 jours ouvrables</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Niveau 2 (par exemple : forme non
        rectangulaire)</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Débit : 20 jours ouvrables</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Commande vitrages : 30 jours ouvrables</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="text-decoration: underline;">Dans le
        paramétrage du dormant, j</span><span class="f_Textestd"
        style="text-decoration: underline;">&rsquo;</span><span
        class="f_Textestd" style="text-decoration: underline;">y insère la
        formule suivante:</span><br>
        <span class="f_Variables">Si Forme &lt;&gt; Rectangle</span><br>
        <span class="f_Variables">  _NiveauDate := 2</span><br>
        <span class="f_Variables">Sinon</span><br>
        <span class="f_Variables">  _NiveauDate := 1</span><br>
        <span class="f_Variables">Fin Si</span><br>
        <span class="f_Textestd"> </span><br>
        <span class="f_Textestd" style="text-decoration: underline;">Dans une
        commande, je saisis un repère rectangulaire et un second repère non
        rectangulaire et dont la date de livraison est prévue pour le
        10/12.</span><br>
        <span class="f_Textestd"
        style="text-decoration: underline;"> </span><br>
        <span class="f_Textestd" style="text-decoration: underline;">Voici le
        résultat dans l</span><span class="f_Textestd"
        style="text-decoration: underline;">&rsquo;</span><span
        class="f_Textestd" style="text-decoration: underline;">onglet Dates de
        la commande:</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span><br>
        <img src="img/clip0203.gif" width="512" height="77" border="0"
        alt="clip0203"><br>
        <span class="f_Textestd">La colonne Niveau renseigne le niveau retenu
        pour l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">ensemble de la commande. </span><br>
        <span class="f_Textestd">La colonne Date contient les dates
        calculées.</span><br>
        <span class="f_Textestd">La colonne Forcer la date est accessible à
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">utilisateur disposant du droit « Validation dates »,
        de même pour la case à cocher « Valider la date ».</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p style="margin: 8px 0px 0px 0px;"><span
        class="f_TitreReleaseNote">Volet sur assemblage:</span> <span
        class="f_Textestd">Afin de contenter l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">ensemble des
        utilisateurs Winpro, nous vous laissons désormais le soin de décider
        s</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">il est possible ou non de saisir un volet au-dessus
        d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">un assemblage de fenêtres.</span></p>

        <p style="margin: 8px 0px 0px 24px;"><span
        class="f_Winproini">[System]</span></p>

        <p style="margin: 8px 0px 0px 24px;"><span
        class="f_Winproini">RollerOnWindowSet        = 1 </span>        <span
        class="f_Textestd">Autorise le volet sur un assemblage(valeur par
        défaut)</span></p>

        <p style="margin: 8px 0px 0px 45px;">                             
         <span class="f_Winproini">= 0</span><span
        style="font-family: 'Courier New'; font-weight: bold;">     
         </span><span class="f_Textestd">Interdit la pose d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">un volet
        au-dessus d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">un assemblage</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

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
                7.2.31</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">13/10/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Variables globales pour
        assemblages:</span> De nouvelles variables globales traitant des
        assemblages sont disponibles dans le paramétrage de tous les composants
        lorsque nous sommes en présence d'un assemblage de fenêtres.</p>

        <p><span class="f_Variables">_FormeAssemblage</span> renvoie la forme
        de l&rsquo;assemblage tel que <span
        class="f_Variables">_Rectangle</span>, <span
        class="f_Variables">_PleinCintre</span>, …et renvoie la valeur <span
        class="f_Variables">-1</span> dans le cas ou nous ne sommes pas en
        présence d&rsquo;un assemblage.</p>

        <p>Les variables <span class="f_Variables">_DimAAssemblage</span> à
        <span class="f_Variables">_DimLAssemblage</span> renvoient les cotes de
        fabrication au niveau de l&rsquo;assemblage et renvoient <span
        class="f_Variables">0</span> si nous ne sommes pas en présence
        d&rsquo;un assemblage.</p>

        <p> </p>

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
                7.2.30</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">07/09/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Initialisation de variables Winpro
        modifiées:</span> Les variables<span
        class="f_Variables">_OuvrantEntrAxeVantail1 [ ]</span> à <span
        class="f_Variables">_OuvrantEntrAxeVantail6 [ ]</span> renvoient,
        depuis cette release, les entraxes des vantaux calculés sur base des
        cotes de fabrication, et ce que l&rsquo;utilisateur ai décentré ou non
        les vantaux.</p>

        <p>Remarque : Jusqu&rsquo;à présent ces variables contenaient la valeur
        saisie par l&rsquo;utilisateur en cas d&rsquo;une saisie de vantaux
        décentrés. Avant que cette modification de fonctionnement de Winpro ne
        soit décidée et développée, l&rsquo;ensemble de notre clientèle à été
        consultée par la voie d&rsquo;un mailing.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Nouvelle variable globale: </span>
        <span class="f_Variables">_OuvrantDecentre [ ]</span> : Cette variable
        renvoie<span class="f_Variables">Vrai()</span> ou <span
        class="f_Variables">1</span> lorsque les vantaux de l&rsquo;ouvrant
        indicé sont décentrés, et renvoie<span class="f_Variables">Faux()
        </span>ou <span class="f_Variables">0</span> dans le cas contraire.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Nouvelles variables:</span> <span
        class="f_Variables">EntraxeVantail1</span> à <span
        class="f_Variables">EntraxeVantail6</span> : Ces variables
        d&rsquo;ouvrant permettent de décentrer les vantaux par formule en
        modifiant leur(s) valeur(s). Si l&rsquo;utilisateur décentre les
        vantaux lors de la saisie de la fenêtre, ce sont les valeurs saisies
        qui seront prises en considération par Winpro.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Réception vitrages (module
        CFV):</span> Ce nouveau module active un nouveau point de menu dans la
        Gestion de production appelé « Réception des vitrages ». Cette nouvelle
        interface permet à l&rsquo;utilisateur d&rsquo;indiquer quels vitrages
        sont réceptionnés à l&rsquo;aide de filtres. Un de ces filtres est une
        case à cocher « Réceptionné ». Si cette case est décochée, seuls les
        vitrages non réceptionnés sont listés, si la case est cochée sur un
        fond blanc seuls les vitrages réceptionnés sont affichés, et si la case
        est cochée sur fond gris tous les vitrages sont affichés.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim80.jpg" width="602"
        height="387" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p>Un nouvel onglet est également activé au niveau de la cde client
        « Réception des vitrages » listant les vitrages commandés. Les vitrages
        réceptionnés sont surlignés en vert, tandis que les autres sont
        surlignés en bleu.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim81.jpg" width="605"
        height="100" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p>L&rsquo;onglet « Encours fournisseur » viendra également
        s&rsquo;étoffer avec les informations de réception de vitrages, en
        partie basse de la fenêtre, si vous disposez du module relatif à la
        gestion des approvisionnements. Les lignes rouges représentent les
        vitrages commandés non réceptionnés, les lignes vertes sont pour les
        vitrages commandés et reçus.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim82.jpg" width="607"
        height="234" vspace="1" hspace="1" border="0" alt=""></p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Gestion relation clientèle (module
        CRM):</span> Ce module ajoute de nouvelles fonctionnalités à la fiche
        client, à la fiche représentant et crée un nouveau point de menu :
        Données | Listes | Impression des visites par représentant.<br>
        Il vous permet donc de gérer une liste de rendez-vous pour chaque
        représentant. Pour chaque rendez-vous, une date imposée par un
        utilisateur ayant le droit « Direction » peut être spécifiée ainsi
        qu&rsquo;un commentaire.<span class="f_Textestd">La case à cocher se
        trouvant à la gauche du champ Nom est automatiquement activée si le
        client est bloqué. (Pour rappel, cet état est défini dans la fiche
        client.)</span></p>

        <p>Le représentant a également accès à un autre champ date qu&rsquo;il
        doit compléter pour indiquer quant a lieu le rendez-vous (ou quand il a
        eu lieu), ainsi qu&rsquo;à une zone de commentaire.</p>

        <p>Pour chaque visite nous disposons d&rsquo;une liste combo permettant
        de définir le type de visite. Cette liste combo est personnalisable via
        le fichier winpro.ini, dont voici un exemple :</p>

        <p><span
        style="font-weight: bold; color: #666699;">[TypeVisites]</span></p>

        <p><span style="font-weight: bold; color: #666699;">Count = 3 </span>
        La valeur de Count correspond à la quantité de types à lister<br>
        <span style="font-weight: bold; color: #666699;">1 = Premier
        contact</span><br>
        <span style="font-weight: bold; color: #666699;">2 = Mesurage</span><br>
        <span style="font-weight: bold; color: #666699;">3 = Acompte</span><br>
        <span style="font-weight: bold; color: #666699;">4 = Plainte suite à la
        pose</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Lorsque l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">on modifie
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">état de la case « Bloqué » de la fiche client, un
        mail d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">avertissement est alors envoyé au représentant lié à
        ce client. Cette fonctionnalité nécessite l'installation de la dll
        wpcomm.dll dans le répertoire winpro.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ce module renomme
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">onglet « C.A » de la fiche client par « Données et
        stat. » car la fiche permet de définir les objectifs que doit atteindre
        le client.</span><br>
        <span class="f_Textestd">Sur l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">impression
        des visites d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">un représentant, Winpro affiche une comparaison
        entre les résultats avec les objectifs de chaque client.</span></p>
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
      <td align="left"><p style="text-align: center;"> </p>

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
                7.2.38</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">15/12/2006</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Tabblad
        Informaties:</span><span class="f_Textestd">De vragen welke in
        samengestelde panelen worden gesteld worden nu weergegeven in dit
        tab-blad van de order</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Gebruik maken
        van de knop "Print F11"::</span><span class="f_Textestd">Door het
        toevoegen van een nieuwe regel in het WinPro.ini bestand, kunt u nu de
        mogelijkheid deze knop te gebruiken tijdens het aanpassen van het werk
        uitschakelen.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Winproini">[System]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">PasImprimerSiEdition  
             = 1        </span><span class="f_Textestd">om deze mogelijkheid te
        activeren</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">WinProD data
        export:</span><span class="f_Textestd">WinProD kan nu ook data
        exporteren. De configuratie van deze export gebeurd enkel via het
        winpro.ini bestand</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Nieuwe tekening
        instructie op doorgaand niveau:</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Deze instructie
        complementeert de lijst zoals weergegeven in release note
        7.2.29.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"><span
        style="color:#0000ff">ArcSensRotation(0 of 1)</span> : geeft de rotatie
        richting van de gedefinieerde boog aan</span></p>

        <p class="p_Textestd"><span class="f_Textestd"></span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote"></span><span
        class="f_TitreReleaseNote">Positie van het niveau van
        optimalisatie:</span><span class="f_Textestd"></span><span
        class="f_Textestd">De basis positie van de cursor in het veld Niveau
        van optimalisatie kan nu worden voorgeprogrammeerd met behulp van een
        nieuwe regel in het WinPro.ini bestand</span></p>

        <p class="p_Textestd"><span
        class="f_Winproini">[Optimisation]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">MaxLoop        =
        </span><span class="f_Textestd">0 to 8, for +snelheid to
        +nauwkeurigheid</span></p>

        <p style="margin: 4px 0px 4px 0px;">       <img src="img/clip0248.jpg"
        width="343" height="74" border="0" alt="Clip0248"></p>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">Ingave stijlen/regels:</span> Een
        derde waarde kan worden toegevoegd aan de onder genoemde regel. Indien
        Traverse Static = 2, zal WinPro de positie van de stijl niet onthouden
        (zie RL 7,2,28) </p>

        <p><span style="font-weight: bold; color: #666699;">[System]</span></p>

        <p>Traverse Static = 0(onthoud de waarde van de eerste stijl)</p>

        <p style="margin-left:8em">= 1(onthoud de waarde van de eerste
        stijl)</p>

        <p style="margin-left:8em">= 2(geen waarde onthouden)</p>

        <p></p>

        <p> </p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Export technische
        database:</span><span class="f_Textestd"></span><span
        class="f_Textestd">Een nieuwe menukeuze &ldquo;Export technische
        database&rdquo; is toegevoegd aan het menu &ldquo;Instellingen&rdquo;.
        Deze mogelijkheid exporteert de volledige dbf tabellen van de volledige
        technische database in een afzonderlijke map genoemd
        &ldquo;technique&rdquo;. Zou u bijvoorbeeld in een
        &ldquo;ontwikkelingsversie&rdquo; kunnen werken en dan vanuit hier de
        technische database kunnen exporteren en weer importeren in de
        productie database nadat dit is getest. U kunt de data uitwisselen
        zolang beide versie nummers gelijk zijn.</span></p>

        <p><span class="f_Textestd">Alvorens u de kopie in de centrale data
        kopieert dient u zich ervan te vergewissen dat de centrale data ook
        werkelijk overschreven MAG worden en dat er geen belangrijke data
        overschreven word.</span></p>

        <p><span class="f_Textestd">Het is eveneens mogelijk om aan Quadrature
        te vragen bepaalde tabellen toegepast in de export van de technische
        data uit te schakelen voor overdracht indien dit in uw situatie van
        toepassing is.</span></p>

        <p><span class="f_Textestd">   </span></p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Versie
                7.2.37</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">23/11/2006</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Extra
        toebehoren: Profielen:</span><span class="f_Textestd"></span><span
        class="f_Textestd">Het is nu mogelijk een waarde te noteren tot op 1
        decimaal</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span><br>
        <span class="f_TitreReleaseNote">Gedeeltelijke levering en facturering
        (module LFP): </span><span class="f_Textestd">Een order kan
        gedeeltelijk worden uitgeleverd en gefactureerd. </span><br>
        <span class="f_Textestd">Hier worden een aantal van de mogelijkheden
        met deze module genoemd:</span></p>

        <p style="margin-left:2em;">&bull;De totale gefactureerde hoeveelheid
        correspondeert nu met het geverifieerde totaal aantal geleverd aan de
        klant rekening houdend met het reeds gefactureerde bedrag, ontvangen of
        niet.</p>

        <p style="margin-left:2em;">&bull;De installatie van de kozijnen kan nu
        gedeeltelijk worden gefactureerd.</p>

        <p style="margin-left:2em;">&bull;U kunt gedeeltelijk factureren
        voordat u de order gedeeltelijk heeft uitgeleverd.</p>

        <p style="margin-left:2em;">&bull;Deze module heeft de module
        verpakking management nodig om te kunnen draaien aangezien we hiermee
        de leveringen en factureringen van verpakkingen onderhouden.</p>

        <p style="margin-left:2em;">&bull;Het automatisch prijzen van
        verpakkingen door WinPro zal corresponderen met de aantallen welke aan
        de klant zijn bevestigd. Het wordt aangeraden om te werken met
        verborgen korting bij invoer van orders of offertes.</p>

        <p style="margin-left:2em;">&bull;De gebruiker heeft nu de mogelijkheid
        te kiezen uit de verschillende verpakkingsprijzen voor elke
        verpakking.</p>

        <p style="margin-left:2em;">&bull;Zodra een order is goedgekeurd is het
        gereed voor het verpakkingsproces.</p>

        <p style="margin-left:2em;">&bull;Een checkbox &ldquo;Verpakking
        compleet&rdquo; is toegevoegd aan de &ldquo;verpakking aanmaken&rdquo;
        invoervelden en staat de gebruiker welke de verpakking gereedmaakt toe
        aan te geven dat de verpakking compleet is voor deze order, ook als
        sommige artikelen nog niet zijn verpakt.</p>

        <p style="margin-left:2em;">&bull;Voor een juiste levering, met of
        zonder gedeeltelijke mogelijkheid, dienen de uit te leveren orders
        volledig zijn geoptimaliseerd en de &ldquo;Lijst van
        leveringsvoorbereiding&rdquo; moet zijn uitgedraaid.</p>

        <p style="margin-left:2em;">&bull;De gedeeltelijke leverings nota kan
        worden voorzien van het te factureren bedrag, afhankelijk van de status
        van de checkbox &ldquo;Gevalideerd&rdquo; op de leverings nota welke is
        te vinden in het Opschrift tab-blad van de order/offerte.</p>

        <p style="margin-left:2em;">&bull;Elk geprint document kan opnieuw
        worden uitgedraaid.</p>

        <p></p>

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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;"></span></td>
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
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;"></span></td>
              <td></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="text-decoration: underline;">Nieuwe statussen toegevoegd voor
        orders:</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">802: </span><span class="f_Textestd">Gedeeltelijke
        levering: De order is volledig gefactureerd en niets is geleverd (Lila
        kleur)</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">810: Gedeeltelijke levering en facturering: De order
        is gedeeltelijk geleverd en gefactureerd (Zalm kleur)</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">852: </span><span class="f_Textestd">Gedeeltelijk
        gefactureerd: De order is volledig geleverd en niets is gefactureerd
        (Groen kleur)</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">860: De order is volledig geleverd en gefactureerd
        door een aantal facturen en afleverings bonnen.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span><br>
        <span class="f_Textestd"
        style="text-decoration: underline;">Herinnering</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">740: Printen van levering voorbereidings bon
        </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">850: Order is gefactureerd en geleverd volgens de
        standaard methode. Geen gedeeltelijke levering/facturatie
        gebruikt).</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Standaard RAL
        kleuren mogelijk per zijde:</span><span class="f_Textestd"></span><span
        class="f_Textestd">Wanneer gebruik wordt gemaakt van de gelimiteerde
        keuze uit standaard RAL kleuren mogelijkheid doordat de checkbox in de
        kleuren tab-blad van het systeem setup blad is aangevinkt , laat WinPro
        een nieuwe knop zien &ldquo;Zijde keuze&rdquo; welke de mogelijkheid
        geeft de kleur in te geven per zijde, binnenzijde en buitenzijde
        gedurende de ingave van de order/offerte. Beide opties zijn standaard
        uitgeschakeld. Deze status wordt ingeschakeld als beide vinkjes zijn
        ingeschakeld </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Versie
                7.2.36</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">16/11/2006</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p><span class="f_TitreReleaseNote">Nieuwe variabele :</span><span
        style="font-weight: bold;"></span><span
        class="f_Variables">_EtatCommande</span> : Renvoie la valeur numérique
        correspondant à l&rsquo;état de la commande, soit : <span
        class="f_Variables">100</span>=devis; <span
        class="f_Variables">200</span>=Commande non traitée; <span
        class="f_Variables">210</span>=Commande modifiée; <span
        class="f_Variables">220</span>=Impression confirmation; <span
        class="f_Variables">240</span>=Vérification confirmation; <span
        class="f_Variables">250</span>=Impression de la commande fournisseur;
        <span class="f_Variables">260</span>=Avalisation financière; <span
        class="f_Variables">280</span>=Envoi confirmation; <span
        class="f_Variables">398</span>=Mise en attente; <span
        class="f_Variables">399</span>=Réactivation après mise en attente;
        <span class="f_Variables">400</span>=Approbation; <span
        class="f_Variables">420</span>=Commande vitrages; <span
        class="f_Variables">499</span>=Préparation optimisation; <span
        class="f_Variables">500</span>=Optimisation complète; <span
        class="f_Variables">501</span>=Optimisation partielle; <span
        class="f_Variables">600</span>=Mise en production complète; <span
        class="f_Variables">601</span>=Mise en production partielle; <span
        class="f_Variables">700</span>=Fin de fabrication; <span
        class="f_Variables">740</span>=Préparation de la livraison; <span
        class="f_Variables">800</span>=Note d'envoi; <span
        class="f_Variables">850</span>=Facturation; <span
        class="f_Variables">900</span>=Clôture<br>
        <span style="text-decoration: underline;">Remarque :</span>Sachez que
        de nouveaux états sont susceptibles d&rsquo;être ajoutés à la liste
        actuelle, comme c&rsquo;est déjà le cas en version 7.2.37</p>

        <p></p>

        <p>of in het Nederlands</p>

        <p></p>

        <p><span
        style="font-weight:bolder; text-decoration: underline;font-size: 12pt">Nieuwe
        variabele</span> : <strong><span
        style="color:#0000ff">_OrderStatus</span></strong> : geeft een van de
        volgende waarden:</p>

        <p><strong><span style="color:#0000ff">100</span></strong>=Offerte;</p>

        <p><strong style="color:#0000ff">200</strong>=Order nog niet
        verwerkt;</p>

        <p><strong style="color:#0000ff">210</strong>=Aangepaste order;</p>

        <p><strong style="color:#0000ff">220</strong>=Bevestiging afdrukken
        geprint;</p>

        <p><strong style="color:#0000ff">240</strong>=Bevestiging akkoord;</p>

        <p><strong style="color:#0000ff">250</strong>=Leveranciers bestelling
        geprint;</p>

        <p><strong style="color:#0000ff">260</strong>=Financiële goedkeuring
        verleende;</p>

        <p><strong style="color:#0000ff">280</strong>=Bevestiging geldig
        maken;</p>

        <p><strong><span style="color:#0000ff">398</span></strong>=Order in
        afwachting;</p>

        <p><strong style="color:#0000ff">399</strong>=Order gereactiveerd nadat
        deze in afwachting heeft gestaan;</p>

        <p><strong style="color:#0000ff">400</strong>=Order goedgekeurd;</p>

        <p><strong><span style="color:#0000ff">420</span></strong>=Beglazing
        bestelling;</p>

        <p><strong style="color:#0000ff">499</strong>=Gereed voor
        optimalisatie;</p>

        <p><strong><span
        style="color:#0000ff">500</span></strong>=Optimalisatie compleet;</p>

        <p><strong><span
        style="color:#0000ff">501</span></strong>=Gedeeltelijke
        optimalisatie;</p>

        <p><strong><span style="color:#0000ff">600</span></strong>=productie
        beginnen;</p>

        <p><strong><span
        style="color:#0000ff">601</span></strong>=Gedeeltelijke productie
        beginnen;</p>

        <p><strong><span style="color:#0000ff">700</span></strong>=Einde van
        productie;</p>

        <p><strong><span style="color:#0000ff">740</span></strong>=Lijst van
        leveringsvoorbereiding;</p>

        <p><strong><span style="color:#0000ff">800</span></strong>=Afleverings
        bon;</p>

        <p><strong><span
        style="color:#0000ff">850</span></strong>=Factureren;</p>

        <p><strong><span
        style="color:#0000ff">900</span></strong>=Afgesloten</p>

        <p>NB:Nieuwe statussen kunnen worden toegevoegd aan deze lijst in de
        toekomst zoals ook is gebeurd met versie 7.2.37</p>

        <p></p>

        <p class="p_Textestd" style="text-align: center;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="text-align: center;"><span
        class="f_Textestd"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 4px 0px 4px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Versie
                7.2.35</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">10/11/2006</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Nieuwe
        variabelen </span><span class="f_Textestd"></span><span
        class="f_Variables">(_DateMiseEnLotChassis) _DateCreatingWindowLot
        </span><span class="f_Textestd"> en </span><span
        class="f_Variables">DateCreatingShutterLot(_DateMiseEnLotVolet)</span><span
        class="f_Textestd"> : Beide variabelen geven de datum van de batch
        aanmaak gerelateerd aan het hiermee verbonden merk(raam).</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Attentie, beide 2
        variabelen worden geïnitialiseerd bij het aanklikken van de « Genereer
        batches » knop van de batch aanmaak interface voor productielijn
        management module GLP. Ze worden nooit geïnitialiseerd indien de GPL
        module niet wordt gebruikt.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"></span><span
        class="f_Textestd">s.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Categorie
        vullingen:</span><span class="f_Textestd">Een tweede categorie is
        toegevoegd aan de vullingen tab-bladen. Deze velden zorgen voor een
        nieuwe globale variabele variabele, _<span
        style="color:#0000ff">VullingCat2 [ ] (_RemplCateg2 [ ]),</span> welke
        dezelfde eigenschappen heeft als de <span
        style="color:#0000ff">CatVulling [ ]</span> </span><span
        class="f_Textestd">( </span><span class="f_Variables">_RemplCateg [
        ]</span><span class="f_Textestd">.)</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Versie
                7.2.34</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">06/11/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p><span class="f_TitreReleaseNote">Export van DXF doorsnede (module
        DXFC) :</span> Indien geactiveerd, geeft deze module u toegang tot een
        nieuwe knop in het tekening tabblad van de order/offerte. Deze module
        exporteert nu elke aangegeven doorsnede in dit tabblad. Het
        geëxporteerde bestand is nu te openen en te gebruiken in uw eigen CAD
        software.</p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Versie
                7.2.33</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">30/10/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Optimalisatie
        gebruikmakend van een macro in de profiel omschrijving:</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Om de profielen
        optimalisatie te kunnen aanmaken zal WinPro de verschillende profielen
        groeperen per kleur. Indien de profiel omschrijvingen macro's bevatten
        (bijvoorbeeld #3#) kan WinPro indien genest deze macro's gebruiken om
        te groeperen. Indien gebruik wordt gemaakt van deze mogelijkheid zal
        WinPro de profielen dwingen te groeperen per kleur en macro's. Om in
        WinPro gebruik te maken van deze mogelijkheid dient de nieuwe checkbox
        in de optimalisatietab van de desbetreffende profielen genoemd
        &ldquo;Groeperen per beschrijving&rdquo; aan te zijn gevinkt.
        .</span></p>

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
                7.2.32</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">24/10/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"><span
        class="f_Winproini"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Optimalisatie
        van profielen met macros:</span><span class="f_Textestd">Een nieuwe
        selectievakje "Groeperen per beschrijving" bevindt zich in het tabblad
        "optimalisatie" van de pagina "Profiel"l. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Dit vakje kan
        geseleceert worden door de gebruiker om an te geven dat Winpro rekening
        moet houden met eventuele macro's in de profiel beschrijving.
        </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Indien dit zo is,verdeeld Winpro de stangen in
        functie van de kleur en beschrijving. </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Indien niet,houdt hij enkel rekening met de
        kleur.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Project orders
        (module CDC):</span><span class="f_Textestd">Een order project groep is
        een lijst van klanten orders welke wordt gecreëerd door de gebruiker
        (indien hij de rechten heeft om orders te creëren) door het menu
        Orders|Orders Project. De klant orders kunnen hiermee worden
        geassocieerd met de nieuwe order door gebruik te maken van een nieuw
        gerelateerd veld in het informatie tabblad van de order.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Let op: Het is niet
        mogelijk een order van klant X te koppelen aan een order voor klant
        Y.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Het is wel mogelijk
        gelijktijdig diverse orders van een bepaald project te openen terwijl
        dit project zichtbaar is in het aangewezen projecten orders
        blad</span></p>

        <p class="p_Textestd"><span class="f_Textestd"></span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span><br>
        <span class="f_TitreReleaseNote">Levering goedkeuren:</span></p>

        <p class="p_Textestd"><span class="f_Textestd">is een nieuw optionele
        menu optie toegevoegd om een order een andere status te geven. Een
        order zal kunnen worden gefactureerd enkel wanneer de levering geldig
        is gemaakt.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Deze nieuwe eigenschap
        is niet mogelijk in combinatie met gedeeltelijke levering en
        facturatie..</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Om dit mogelijk te maken
        dient de volgende regel aan WinPro.ini worden toegevoegd</span></p>

        <p class="p_Textestd"><span class="f_Textestd"></span></p>

        <p class="p_Textestd"><span class="f_Winproini">[Customer
        Order]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Delivered Order      
         = 1</span><span class="f_Textestd">       om dit menu item te
        activeren</span></p>

        <p class="p_Textestd">                       <span
        class="f_Winproini">= 0</span><span class="f_Textestd">      0 is
        standaard waarde</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Automatische
        datum calculatie (module DAT):</span><span class="f_Textestd">Deze
        module geeft de mogelijkheid om automatisch de calculatie van
        &ldquo;sleutel&rdquo;, om slim de orders van de klanten op te volgen en
        te organiseren. De gegenereerde datum worden weergegeven in een nieuw
        tab-blad van de bestelling van de klant.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">De datum wordt
        automatisch aangevuld met de berekende datum van de
        leveringsdatum</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Een set-up methode wordt
        gedefinieerd om het aantal dagen te bepalen welke benodigd zijn voor
        verwerking, rekening houdend met de technische ingewikkeldheid (of
        anderszins) om de leveringsdatum te bepalen.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Eerst dient u het datum
        type te bepalen in het menu Datum | Diversen | Datum types.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Vervolgens dient u per
        niveau het aantal benodigde werkdagen te bepalen in het menu Datum |
        Diversen | Datum niveau configuratie. Het instellen van deze datum is
        per gebruiker beschermt met een nieuw veld &ldquo;datum set-up&rdquo;
        in het blad &ldquo;gebruikersrechten&rdquo;</span></p>

        <p class="p_Textestd"><span class="f_Textestd">De laatste stap welke
        moet worden genomen is het toewijzen van de variabele <span
        style="color:#0000ff">_Datumniveau</span> <span
        class="f_Variables">(_NiveauDate</span>) in de technische formule om te
        bepalen welke tijd benodigd is om het kozijn welke wordt gecalculeerd
        te produceren.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">WinPro laat de
        calculatie van de datum afhangen van de meest belangrijke datum
        gebaseerd op alle kozijnen in een order</span></p>

        <p class="p_Textestd"><span class="f_Textestd">ut au préalable définir
        les types de date via le menu Données | Autres données | Types de
        dates.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold; text-decoration: underline;">Als
        voorbeeld:</span><br>
        <span class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="text-decoration: underline;"></span><span
        class="f_Textestd">Datum type: Zagen, Glas order</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="text-decoration: underline;">Datum
        niveau:</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Niveau 1 (als voorbeeld een rechthoekig
        ontwerp)</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Zagen: 15 dagen</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Glas bestelling: 21 dagen</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"></span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Niveau 2 (als voorbeeld een NIET rechthoekig
        ontwerp)</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Zagen: 20 dagen</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Glas bestelling: 30 dagen</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"></span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd" style="text-decoration: underline;"></span><span
        class="f_Textestd" style="text-decoration: underline;">Op Kader niveau
        is de volgende formule geplaatst::</span><br>
        <span class="f_Variables">Si Forme &lt;&gt; Rectangle</span><br>
        <span class="f_Variables">  _NiveauDate := 2</span><br>
        <span class="f_Variables">Sinon</span><br>
        <span class="f_Variables">  _NiveauDate := 1</span><br>
        <span class="f_Variables">Fin Si</span></p>

        <p></p>

        <p style="margin-left:6em">of </p>

        <p style="margin-left:2em;"><strong><span style="color:#0000ff">If Vorm
        &lt;&gt; Rechthoek</span></strong></p>

        <p style="margin-left:2em;color:#0000ff"><strong>_ Datumniveau :=
        2</strong></p>

        <p style="margin-left:2em;color:#0000ff"><strong>Else</strong></p>

        <p style="margin-left:2em;color:#0000ff"><strong>_ Datumniveau :=
        1</strong></p>

        <p style="margin-left:2em;color:#0000ff"><strong><span
        style="color:#0000ff">End If</span></strong></p>

        <p style="margin-left:2em;"></p>

        <p style="margin-left:2em;"></p>

        <p></p>

        <p></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span><br>
        <span class="f_Textestd" style="text-decoration: underline;">In een
        order wordt een rechthoekig ontwerp toegevoegd, evenals een niet
        rechthoekig ontwerp met een aflever datum op 10/12.</span><br>
        <span class="f_Textestd"
        style="text-decoration: underline;"> </span><br>
        <span class="f_Textestd"
        style="text-decoration: underline;"></span><span class="f_Textestd"
        style="text-decoration: underline;">Het resultaat hieronder, in het
        nieuwe tab-blad in de order::</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span><br>
        <img src="img/clip0203.gif" width="512" height="77" border="0"
        alt="clip0203"><br>
        <span class="f_Textestd"></span><span class="f_Textestd">Het veld
        niveau is gecalculeerd voor de complete order (2).</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Het datum veld bevat de gecalculeerde
        datum.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">Het &ldquo;forceer datum&rdquo; veld en de
        &ldquo;valideer datum&rdquo; veld checkbox zijn enkel toebehouden voor
        gebruikers met &ldquo;datum valideren&rdquo; rechten.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

        <p style="margin: 8px 0px 0px 0px;"><span
        class="f_TitreReleaseNote">Rolluik op een gekoppeld element:</span>
        <span class="f_Textestd">Om de gebruikers van Winpro tegemoet te
        komen,willen wij jullie de keus geven om te bepalen of het wel of niet
        mogelijk is om een rolluik in te voeren op een gekoppeld
        element</span><span class="f_Textestd">Dit gebeurd door in de
        winpro.ini (settings) volgende sleutel toe te voegen.</span></p>

        <p style="margin: 8px 0px 0px 24px;"><span
        class="f_Winproini">[System]</span></p>

        <p style="margin: 8px 0px 0px 24px;"><span
        class="f_Winproini">RollerOnWindowSet        = 1 </span>        <span
        class="f_Textestd">Autoriseer een rolluik op een koppeling (standaard
        waarde)</span></p>

        <p style="margin: 8px 0px 0px 45px;">                             
         <span class="f_Winproini">= 0</span><span
        style="font-family: 'Courier New'; font-weight: bold;">     
         </span><span class="f_Textestd">verboden om een rolluik op een
        gekoppeld element in te voeren.</span><span
        class="f_Textestd"></span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd"> </span></p>

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
                7.2.31</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">13/10/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Globale variabelen voor gekoppelde
        elementen :</span> Er zijn nieuwe variabelen toegevoegd voor gebruik in
        gekoppelde kozijnen.</p>

        <p><span style="color:#0000ff">_VormSamenstelling</span> ,<span
        style="color:#0000ff">_FormeAssemblage</span> geeft de vorm van het
        totale ontwerp als variabele <span style="color:#0000ff">_Rechthoekig,
        _Boog, &hellip;(_Rectangle, <span
        class="f_Variables">_PleinCintre</span>,)</span>en geeft de waarde
        -&amp; indien het ontwerp niet een gekoppeld kozijn is.</p>

        <p>Variables <span style="color:#0000ff">_AfmASamenstelling
        (_DimAAssemblage)</span> tot<span
        style="color:#0000ff">_AfmLSamenstelling (_DimLAssemblage)</span> geeft
        de productie afmetingen ter plaatse van het gekoppelde kozijn en geeft
        als waarde 0 in het geval van een niet gekoppeld kozijn</p>

        <p></p>

        <p> </p>

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
                7.2.30</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">07/09/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Initialisering van een aantal
        WinPro variabelen aangepast :</span> <span
        class="f_Variables">_OuvrantEntrAxeVantail1 [ ]</span> tot <span
        class="f_Variables">_OuvrantEntrAxeVantail6 [ ]</span> Variabelen
        _<span style="color:#0000ff">VleugelTussenAsVak1 []</span> tot_<span
        style="color:#0000ff">VleugelTussenAsVak6 [ ]</span> geven sinds deze
        update de as van de stolp (positie tussen beide stolp vleugels) weer,
        of de gebruiker nu wel of niet gebruik maakt van asymmetrische
        stolpvleugels.</p>

        <p></p>

        <p></p>

        <p>Let wel : Tot nog toe werd de waarde welke in deze variabele stond
        enkel gevuld bij een asymmetrische stijl. Voordat we deze aanpassing
        van de variabele hebben doorgevoerd zijn de meeste van onze klanten
        hiervan door mailing op de hoogte gesteld.</p>

        <p></p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Nieuwe globale variabele:</span>
        <span class="f_Variables">_OuvrantDecentre [ ]</span> : <span
        style="color:#0000ff">_Vleugelgedecentreert [ ] :</span> Deze variabele
        geeft Waar() of 1 indien de vleugels van de betreffende vleugel
        asymmetrisch zijn en Fout() of 0 indien ze symmetrisch zijn. </p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Nieuwe variabelen:</span> <span
        class="f_Variables">EntraxeVantail1</span> à <span
        class="f_Variables">EntraxeVantail6</span> : <span
        style="color:#0000ff">SpelingAsVak1</span> tot <span
        style="color:#0000ff">SpelingAsVak6:</span> Deze vleugel variabelen
        geven de gebruiker de mogelijkheid om de as van de vleugels aan te
        geven in een formule, met het toekennen van deze waarde</p>

        <p>Als de gebruiker een asymmetrische vleugel waarde ingeeft voor een
        kozijn zullen deze ingevoerde waarden de enige zijn waar WinPro
        rekening mee houd.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Module Glas ontvangen (module
        CFV):</span> Deze nieuwe module geeft een nieuwe menu optie weer in
        &ldquo;beheer van productie&rdquo; genoemd « Ontvangst beglazing». Deze
        nieuwe interface geeft de gebruikers inzicht welk glas reeds is
        ontvangen gebruik makend van diverse filters. Door middel van dit
        filter kan het reeds ontvangen, nog te ontvangen en/of alle beglazing
        worden gefilterd.</p>

        <p>Een nieuw tab-blad in de order &ldquo;Ontvangst beglazingen&rdquo;
        is toegevoegd en geeft de bestelde beglazing weer. Reeds ontvangen glas
        word hier weergegeven in groen en nog te ontvangen glas in rood</p>

        <p></p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim80.jpg" width="602"
        height="387" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p>Er is tevens een nieuw tabblad toegevoegd op niveau van de
        klantorder « Ontvangst beglazingen » welke alle bestelde beglazingen
        oplijst. De ontvangen beglazingen worden weereggeven in het groen,de
        andere in het blauw.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim81.jpg" width="605"
        height="100" vspace="1" hspace="1" border="0" alt=""></p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p>Tabblad « Lopende bestellingen leverancier» komt tevens met de
        informatie m.b.t. de ontvangst van het glas, onderaan het scherm,
        indien u beschikt over deze module.De rode lijnen vertegenwoordigen de
        bestelde beglazingen welke nog niet ontvangen zijn, de groene lijnen
        deze welke besteld en ontvangen zijn.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/embim82.jpg" width="607"
        height="234" vspace="1" hspace="1" border="0" alt=""></p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Module Klanten Relatie Management
        (module CRM):</span> Deze module voegt nieuwe mogelijkheden aan het
        klanten gegevens menu en het verkoper menu toe. Tevens is een nieuwe
        menu optie toegevoegd aan:</p>

        <p>Gegevens &ndash; Lijsten &ndash; Print bezoeken / Verkoper.</p>

        <p>Deze module geeft de verkoper de mogelijkheid een lijst van klanten
        voor opvolging uit te draaien. Voor elke opvolging kan door de
        gebruiker welke de rechten &ldquo;directie&ldquo; heeft een datum
        worden ingegeven, evenals een commentaar (tekst regel). De verkoper
        heeft de mogelijkheid tot invoer van een afspraak datum en een
        commentaar tekst regel) Voor elk bezoek is er een combo box beschikbaar
        om het type bezoek te noteren. Dit type bezoek is te definiëren in de
        winpro.ini (zie voorbeeld hieronder)</p>

        <p></p>

        <p></p>

        <p><span
        style="font-weight: bold; color: #666699;">[TypeVisites]</span></p>

        <p><span style="font-weight: bold; color: #666699;">Count = 4</span></p>

        <p><span style="font-weight: bold; color: #666699;">; De Count waarde
        correspondeert met het aantal typen bezoek in de lijst</span></p>

        <p><span style="font-weight: bold; color: #666699;">1 = Eerste
        contact</span></p>

        <p><span style="font-weight: bold; color: #666699;">2 =
        Opmeten</span></p>

        <p><span style="font-weight: bold; color: #666699;">3 =
        Betaling</span></p>

        <p><span style="font-weight: bold; color: #666699;">4 = Klacht na
        levering</span></p>

        <p><span style="font-weight: bold; color: #666699;"></span></p>

        <p class="p_Textestd"></p>

        <p class="p_Textestd"><span class="f_Textestd">Wanneer de « Gesloten »
        checkbox aan staat bij een klantenfiche, wordt er automatisch een mail
        verstuurd naar de verkoper, gelinkt naar de klant. Deze mogelijkheid
        kan worden gebruikt met een specifieke dll &ldquo;wpcomm.dll&rdquo;, in
        de WinPro basis directory.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Deze mogelijkheid
        hernoemt het blad &ldquo;Omzet&rdquo; van het klanten blad naar
        &ldquo;Datum en statistieken&rdquo; aangezien deze aan de klant door de
        gebruiker kunnen worden toegevoegd.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Op de afgedrukte
        bezoeken lijst wordt een vergelijking tussen resultaten en klant
        aanvragen zichtbaar gemaakt.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"></span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
