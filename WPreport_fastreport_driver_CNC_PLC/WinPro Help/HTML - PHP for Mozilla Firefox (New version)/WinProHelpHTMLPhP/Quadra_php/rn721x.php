<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["FRA","NED"];
var WinProHelpPageName=["7.2.1x","7.2.1x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?rn721x.php"; }
else { parent.quicksync('a11.4.8'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>7.2.1x</title>
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
        href="introduction.php">Top</a>  <a href="rn722x.php">Previous</a>  <a
        href="rn720x.php">Next</a> </span> </td>
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
                7.2.18</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">19/06/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"><span
        style="color: #000000;"> </span></p>

        <p style="margin: 0px 0px 0px 5px;"><span
        class="f_TitreReleaseNote">Calcul de tarifs:</span><span
        style="font-weight: bold; color: #000000;"></span><span
        style="color: #000000;">Il est désormais possible de saisir les
        panneaux fabriqués en tant que remplissage lors de la saisie d&rsquo;un
        tarif.</span></p>

        <p style="margin: 0px 0px 0px 5px;"><span
        style="color: #000000;"> </span></p>

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
                7.2.17</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">17/06/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Nouvelles variables:</span>
        Création des nouvelles variables globales suivantes :</p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_NCourbesDormant</span> correspondant à la variable
        locale au dormant <span class="f_Variables">NCourbes</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_CentreXDormant[ ]</span> correspondant à la
        variable locale au dormant <span class="f_Variables">CentreXCadre [
        ]</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_CentreYDormant[ ]</span> correspondant à la
        variable locale au dormant <span class="f_Variables">CentreYCadre [
        ]</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_RayonDormant[ ]</span> correspondant à la variable
        locale au dormant <span class="f_Variables">RayonCadre [ ]</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_OuvertureDormant[ ]</span> correspondant à la
        variable locale au dormant <span class="f_Variables">OuvertureCadre [
        ]</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_AngleDebutDormant[ ]</span> correspondant à la
        variable locale au dormant <span class="f_Variables">AngleDebutCadre [
        ]</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_AngleFinDormant[ ]</span> correspondant à la
        variable locale au dormant <span class="f_Variables">AngleFinCadre [
        ]</span></p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Gestion de colis:</span> Pour les
        licences activant le module de colisage. Il est possible de
        sélectionner plusieurs ligne de commande lors du colisage, et il est
        également possible de spécifier si l&rsquo;on souhaite coliser les
        menuiseries. Ces deux nouvelles fonctionnalités s&rsquo;activent via la
        section [Packages] du fichier Winpro.ini :</p>

        <p><span
        style="font-weight: bold; color: #666699;">[Packages]</span></p>

        <p><span style="font-weight: bold; color: #666699;">Multiselection    
           = 1</span> active la multisélection </p>

        <p>               <span style="font-weight: bold; color: #666699;">=
        0</span> la désactive</p>

        <p><span style="font-weight: bold; color: #666699;">PackageWindow      
         = 0 </span>coche la case et la rend invisible à l&rsquo;utilisateur</p>

        <p>                       <span
        style="font-weight: bold; color: #666699;">= 1</span> décoche la case
        et la rend invisible à l&rsquo;utilisateur</p>

        <p>                       <span
        style="font-weight: bold; color: #666699;">= 2</span> coche par défaut
        la case tout en la laissant disponible</p>

        <p>                       <span
        style="font-weight: bold; color: #666699;">= 3</span> décoche par
        défaut la case tout en la laissant disponible</p>

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
                7.2.16</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">16/06/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p style="margin: 0px 0px 0px 5px;"><span
        class="f_TitreReleaseNote">Export des scies:</span><span
        style="font-weight: bold; color: #000000;"></span><span
        style="color: #000000;">Lors de l&rsquo;export d&rsquo;un paramétrage,
        Winpro exporte maintenant toutes les scies existantes dans Winpro
        lorsque la variable </span><span
        class="f_Variables">NumeroScie</span><span style="color: #000000;">fait
        partie d&rsquo;une des formules exportées.</span></p>

        <p style="margin: 0px 0px 0px 5px;"><span
        style="color: #000000;"> </span></p>

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
                7.2.15</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">14/06/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">Segmentation du dormant
        Hollandais:</span> Une nouvelle case à cocher Dormant sans battée (NL)
        est ajoutée à l&rsquo;onglet Description du système. L&rsquo;activation
        de cette case fait apparaître une autre case à cocher Dormant sans
        battée (NL) au niveau de l&rsquo;onglet Description des ouvrants liés
        au système en question.</p>

        <p>Jusqu&rsquo;à présent Winpro nous permettait de mélanger dans une
        même fenêtre des frappes extérieures et intérieures. La définition du
        type de frappe est précisée à l&rsquo;aide de la case à cocher Inverser
        le dormant.</p>

        <p>L&rsquo;activation de la nouvelle case dans l&rsquo;ouvrant ajoute
        un nouveau type de frappe appelé &lsquo;sans battée&rsquo;.</p>

        <p>La variable de dormant <span class="f_Variables">TypeSegment [
        ]</span> renvoie désormais une de ces valeurs : <span
        class="f_Variables">Normal</span>, <span
        class="f_Variables">Inverse</span>, <span
        class="f_Variables">DsBattee</span>.</p>

        <p>La variable de traverse <span class="f_Variables">TypeSegment [
        ]</span> renvoie désormais une de ces valeurs : <span
        class="f_Variables">TNormal</span>, <span
        class="f_Variables">TInverse</span>, <span
        class="f_Variables">ZNormal</span>, <span
        class="f_Variables">ZInverse</span>, <span
        class="f_Variables">TsBattee</span>, <span
        class="f_Variables">LIntG</span>, <span
        class="f_Variables">LIntD</span>, <span
        class="f_Variables">LExtG</span>, <span
        class="f_Variables">LExtD</span>.</p>

        <p> </p>

        <p>De plus, l&rsquo;activation de la nouvelle case dans le système,
        permet à l&rsquo;utilisateur de définir les parties vides en précisant
        s&rsquo;il faut une ailette à la traverse verticale ou non, et
        s&rsquo;il en faut une nous précisons alors</p>

        <p><img src="img/img_5.jpg" width="289" height="140" border="0" vspace="1"
        hspace="1" alt="img_5"></p>

        <p><span style="text-decoration: underline;">Exemple:</span> </p>

        <p>Lorsque le segment d&rsquo;une traverse verticale est en contact
        d&rsquo;une part avec un ouvrant dont la case Inverser le dormant est
        activée, et d&rsquo;autre part avec une partie vide Partie vide sans
        battée, la variable <span
        class="f_Variables">TypeSegment[NumeroSegment]</span> renverra <span
        class="f_Variables">LExtD</span> ou <span
        class="f_Variables">LExtG</span>.</p>

        <p> </p>

        <p><span style="text-decoration: underline;">Astuce:</span> </p>

        <p>Interprétez la lettre L de ces variables comme étant l&rsquo;ailette
        du profil. Soit ailette extérieure à droite pour <span
        class="f_Variables">LExtD</span>.</p>

        <p> </p>

        <p>Consultez également la release de la version 4.1.0 traitant de la
        segmentation par inversion de frappe.</p>

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
                7.2.13</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">08/06/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Traductions:</span> A chaque
        exécution de Winpro, une vérification des fichiers de traduction est
        faites dans le but de supprimer les éventuels doublons.</p>

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
                7.2.12</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">15/05/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">Fiche article -
        Fournisseurs:</span> Une zone de texte est disponible dans les onglets
        fournisseurs de la fiche article. </p>

        <p>Cette zone est disponible pour y indiquer des annotations pour
        lesquelles Winpro ne réalise aucun traitement.</p>

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
                7.2.11</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">29/04/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">Nouvelle variable:</span> <span
        class="f_Variables">_CommandeVitrage</span>. Cette variable permet de
        savoir si Winpro évalue les formules de paramétrage en vue d'imprimer
        une commande vitrage. Cette variable permet donc de conditionner la
        présence de certains dessins de croisillons qui seront imprimés
        uniquement sur la commande vitrage.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Poids des composants:</span> Une
        nouvelle colonne « Poids » est ajoutée à l&rsquo;onglet Composants du
        devis/commande client. Cette notion de poids de chaque composant est
        calculée automatiquement par Winpro quel que soit le mode de calcul du
        poids de la menuiserie, soit automatique, soit manuel à l&rsquo;aide de
        la variable <span class="f_Variables">_PoidsChargement</span>. (Voir
        release note 7.2.2)</p>

        <p>Le poids d&rsquo;un composant est déterminé par Winpro comme suit
        :</p>

        <p style="margin: 0px 0px 0px 24px;">Lorsqu'un article est consommé en
        quantité x, Winpro incrémente la variable de x fois la valeur du champ
        poids de cet article.</p>

        <p style="margin: 0px 0px 0px 24px;">Lorsqu'un profil est consommé en
        longueur y et quantite x, Winpro incrémente de x * y la valeur du champ
        poids de cet article.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Message client en pop-up:</span>
        Dans le fichier winpro.ini, vous y définissez vos différents messages.
        Dans l&rsquo;onglet « Finance » de la fiche client, vous référencez
        l&rsquo;un de ces message dans le champ adhoc. </p>

        <p>Conséquences : A chaque ouverture de la fiche client, lors de
        l&rsquo;impression d&rsquo;un document client, lors de la saisie
        d&rsquo;une nouvelle commande ou devis pour ce client, et lors de la
        consultation de commandes en cours de traitement pour ce client, une
        fenêtre s&rsquo;ouvrira contenant le message à l&rsquo;attention de
        l&rsquo;utilisateur Winpro.</p>

        <p> </p>

        <p><span style="text-decoration: underline;">Exemple de configuration
        du fichier Winpro.ini:</span></p>

        <p><span
        style="font-weight: bold; color: #666699;">[MsgClient]</span></p>

        <p><span style="font-weight: bold; color: #666699;">Count = 2 </span>
        correspond au nombre de messages listés ci-dessous</p>

        <p><span style="font-weight: bold; color: #666699;">1 = Paye
        régulièrement en retard</span> Le message n°1 est &hellip;</p>

        <p><span style="font-weight: bold; color: #666699;">2 = Supporter du
        PSG</span>... Le message n°2 est &hellip;</p>

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
                7.2.10</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">28/04/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 5px;"><span
        style="color: #000000;"> </span></p>

        <p><span class="f_TitreReleaseNote">Commande volets roulants:</span>
        Dans l'onglet Action d'une commande, ajout de la case à cocher
        "Commande fournisseur volet".</p>

        <p>Permet d'imprimer un bon de commande pour les volets. Donc, pour
        chaque caisson, il faut définir si celui-ci doit être commandé (case à
        cocher) et si oui, auprès de quel fournisseur.</p>

        <p>Cette fonction est activée si votre licence inclus le module
        Volet.</p>

        <p> </p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Execution
        automatique de programmes externes:</span><span
        class="f_Textestd">Permet de déclencher l'exécution d'un programme à
        certains stades de traitement de la commande dans Winpro détaillés
        ci-dessous:</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">- Impression des confirmations</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">- Validation des confirmations</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">- Avalisation financière</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">- Aprobation des confirmations</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">- Génération du Lot</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">- Mise en production</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">- Impression du bordereau de préparation
        livraison</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">- Impression de la note d'envoi</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">- Impression de la facture</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ces traitements sont
        paramétrés dans le fichier Winpro.ini par l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">ajout
        d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">une nouvelle section :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Winproini">[Extern program
        execution]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Execution=1 ;1 pour
        activer cette fonctionnalité 0 pour la désactiver</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Confirmation printed =
        prog.exe;param1 param2;</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Confirmation validated
        = prog.exe</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Financial validation =
        prog.exe;param1;#order#</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Confirmation on hold =
        </span></p>

        <p class="p_Textestd"><span class="f_Winproini">Ready for optimization
        = </span></p>

        <p class="p_Textestd"><span class="f_Winproini">In production =
        </span></p>

        <p class="p_Textestd"><span class="f_Winproini">Delivery preparation =
        </span></p>

        <p class="p_Textestd"><span class="f_Winproini">Delivery note printed =
        </span></p>

        <p class="p_Textestd"><span class="f_Winproini">Invoiced = </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Si la clé </span><span
        class="f_Winproini">Execution</span><span class="f_Textestd">est
        différente de 1 =&gt; pas d'éxecution</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">#order#</span><span class="f_Textestd">sera
        remplacé soit par le n°de commande, soit par le n° du lot</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">param1</span><span class="f_Textestd">et
        </span><span class="f_Textestd"
        style="font-weight: bold;">param2</span><span class="f_Textestd">sont
        des paramètres attendus par les exécutables.</span></p>
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
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                7.2.18</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">19/06/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"><span
        style="color: #000000;"> </span></p>

        <p style="margin: 0px 0px 0px 5px;"><span
        class="f_TitreReleaseNote">Berekenen van prijslijsten :</span><span
        style="font-weight: bold; color: #000000;"></span><span
        style="color: #000000;">Het is nu mogelijk de samengestelde panelen in
        te voeren als zijnde een standaard vulling gedurende het creëren van de
        prijs lijsten.</span></p>

        <p style="margin: 0px 0px 0px 5px;"><span
        style="color: #000000;"> </span></p>

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
                7.2.17</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">17/06/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Nieuwe variabelen</span> Nieuwe
        globale variabelen toegevoegd :</p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_NCourbesDormant</span> corresponderend met de
        lokale kader variabele  <span class="f_Variables">NCourbes</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_CentreXDormant[ ]</span> corresponderend met de
        lokale kader variabele  <span class="f_Variables">CentreXCadre [
        ]</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_CentreYDormant[ ]</span> corresponderend met de
        lokale kader variabele t <span class="f_Variables">CentreYCadre [
        ]</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_RayonDormant[ ]</span> corresponderend met de
        lokale kader variabele  <span class="f_Variables">RayonCadre [
        ]</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_OuvertureDormant[ ]</span> corresponderend met de
        lokale kader variabele  <span class="f_Variables">OuvertureCadre [
        ]</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_AngleDebutDormant[ ]</span> corresponderend met de
        lokale kader variabele  <span class="f_Variables">AngleDebutCadre [
        ]</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_AngleFinDormant[ ]</span> corresponderend met de
        lokale kader variabele  <span class="f_Variables">AngleFinCadre [
        ]</span></p>

        <p></p>

        <p>of met de nederlandse variabelen</p>

        <p></p>

        <p style="margin-left:2em;"><strong><span
        style="color:#0000ff">_NbogenKader</span></strong> _ corresponderend
        met de lokale kader variabele  <span
        class="f_Variables">NBogen</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_OuterFrameCentreX []</span> corresponderend met de
        lokale kader variabele  <span class="f_Variables">MiddenXKader
        []</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_OuterFrameCentreY [] </span>corresponderend met de
        lokale kader variabele t <span class="f_Variables">MiddenYKader
        []</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_OuterFrameRadius []</span> corresponderend met de
        lokale kader variabele <span class="f_Variables">StraalKader
        []</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_OuterFrameOpening []</span> corresponderend met de
        lokale kader variabele  <span class="f_Variables">OpeningKader
        []</span></p>

        <p style="margin: 0px 0px 0px 24px;"><span
        class="f_Variables">_OuterFrameStartAngle []</span> corresponderend met
        de lokale kader variabele  <span class="f_Variables">HoekKaderBegin
        []</span></p>

        <p><span class="f_Variables">_OuterFrameEndAngle []</span>
        corresponderend met de lokale kader variabele  <strong><span
        style="color:#0000ff">HoekKaderEinde []</span></strong></p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Beheer Verpakking:</span> Voor de
        gebruikers van de module beheer verpakking (GC) is het nu mogelijk om
        verschillende rijen orders te selecteren om te verpakken, ook is het
        mogelijk te specificeren of een kozijn moet worden verpakt. Om deze
        functie mogelijk te maken kan simpelweg de volgende regels aan
        &ldquo;packages&rdquo; in de sectie van de WinPro.ini zoals hieronder
        gespecificeerd worden toegevoegd:</p>

        <p><span
        style="font-weight: bold; color: #666699;">[Packages]</span></p>

        <p><span style="font-weight: bold; color: #666699;">Multiselection    
           = 1</span> maakt meerdere orders mogelijk &ndash; 0 ongedaan maken
        </p>

        <p>               <span style="font-weight: bold; color: #666699;">=
        0</span> </p>

        <p><span style="font-weight: bold; color: #666699;">PackageWindow      
         = 0 </span>Waarde 0 vinkt de box aan en zet dit op onzichtbaar voor de
        gebruiker </p>

        <p>                       <span
        style="font-weight: bold; color: #666699;">= 1</span> Waarde 1 vinkt de
        box uit en zet dit op onzichtbaar voor de gebruiker</p>

        <p>                       <span
        style="font-weight: bold; color: #666699;">= 2</span> Waarde 2 zet de
        box standaard op aan en laat de gebruiker de mogelijkheid deze te
        beïnvloeden </p>

        <p>                       <span
        style="font-weight: bold; color: #666699;">= 3</span> Waarde 3 zet de
        box standaard op uit en laat de gebruiker de mogelijkheid deze te
        beïnvloeden </p>

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
                7.2.16</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">16/06/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p style="margin: 0px 0px 0px 5px;"><span
        class="f_TitreReleaseNote">Export zagen:</span><span
        style="font-weight: bold; color: #000000;"></span><span
        style="color: #000000;"></span><span style="color: #000000;">Indien een
        technische export wordt gedraaid worden per heden alle bestaande zagen
        binnen de set up, ook indien deze zaag wordt genoemd door de variabele
        ZaagId als deel van een export formule.</span></p>

        <p style="margin: 0px 0px 0px 5px;"><span
        style="color: #000000;"> </span></p>

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
                7.2.15</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">14/06/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">Kader segmentatie voor
        Nederland:</span> Een nieuwe checkbox is toegevoegd in het omschrijving
        tabblad in [gegevens] [basisgegevens] [systemen], te weten &ldquo;Kader
        zonder aanslag&rdquo;. Indien deze optie is aangevinkt wordt er in de
        omschrijvingtabel van de vleugel eveneens een checkbox zichtbaar worden
        welke eveneens &ldquo;Kader zonder aanslag&rdquo; is genoemd.</p>

        <p>Tot aan nu, WinPro heeft ons de mogelijkheid gegeven om binnen
        hetzelfde ontwerp naar binnendraaiend en naar buitendraaiend gemixt toe
        te passen. De draairichting naar buiten draaiend wordt uitgevoerd
        indien de checkbox &ldquo;Buitendraaiend&rdquo; wordt aangevinkt.</p>

        <p>Indien dit is aangevinkt verschijnt er een nieuwe checkbox genoemd
        &ldquo;Kader zonder aanslag&ldquo;</p>

        <p>De Kader variabele <span style="color:#0000ff">TypeSegment [
        ]</span> kan nu de volgende waarden bevatten: <span
        style="color:#0000ff">Normaal, Omgekeerd, KZaanslag</span>.( <span
        class="f_Variables">Normal</span>, <span
        class="f_Variables">Inverse</span>, <span
        class="f_Variables">DsBattee</span>.)</p>

        <p>De stijl variabele <span style="color:#0000ff">TypeSegment [
        ]</span> kan nu de volgende waarden bevatten:: <span
        style="color:#0000ff">SNormaal, SOmgekeerd, ZNormaal, ZOmgekeerd,
        SZAanslag, LBinL, LBinR, LBuiL, LBuiR (TNormal, </span><span
        class="f_Variables">TInverse</span>, <span
        class="f_Variables">ZNormal</span>, <span
        class="f_Variables">ZInverse</span>, <span
        class="f_Variables">TsBattee</span>, <span
        class="f_Variables">LIntG</span>, <span
        class="f_Variables">LIntD</span>, <span
        class="f_Variables">LExtG</span>, <span
        class="f_Variables">LExtD</span>.)</p>

        <p></p>

        <p> </p>

        <p>Bovendien; indien de checkbox is aangevinkt geeft dit de gebruiker
        de mogelijkheid het lege deel verder te definiëren en zo details over
        de verticale stijl op te geven. </p>

        <p><img src="img/img_5.jpg" width="289" height="140" border="0" vspace="1"
        hspace="1" alt="img_5"></p>

        <p><span style="text-decoration: underline;">Voorbeeld:</span> wanneer
        een segment van een verticale stijl wordt aangeraakt en tezelfdertijd
        een naar buiten draaiende vleugel welke zich naast het lege deel bevind
        en een leeg deel ingesteld als &ldquo;leeg deel zonder aanslag
        (stijlprofiel bovenaan)&rdquo; de variabele <span
        style="color:#0000ff">TypeSegment [SegmentNummer]</span> geeft als
        waarde <span style="color:#0000ff">LBuiL</span> of <span
        style="color:#0000ff">LBuiR</span></p>

        <p> (TypeSegment[NumeroSegment] , <span
        class="f_Variables">LExtD</span> of <span
        class="f_Variables">LExtG</span>.</p>

        <p></p>

        <p> </p>

        <p>Tip : Het L karakter kan worden geïnterpreteerd als ware het de
        verbrede zijde van het profiel. De buitenzijde verbrede zijde van het
        profiel dan zijne <span style="color:#0000ff">LBuiR</span></p>

        <p></p>

        <p>Zie verder in release notes 4.1.0 voor details over segmentatie bij
        naar buiten draaiende vleugels in het kader.</p>

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
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                7.2.13</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">08/06/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Vertalingen:</span> Bij het
        opstarten van WinPro wordt er een controle uitgevoerd in het
        vertalingen bestand om dubbele woorden te voorkomen </p>

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
                7.2.12</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">15/05/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">Artikel bestand &ndash;
        Leveranciers tabblad:</span> Er is een tekst veld toegevoegd in het
        leveranciers tabblad van het artikel. Dit veld is voor persoonlijke
        notities en wordt verder niet door WinPro gebruikt. </p>

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
                7.2.11</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">29/04/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">Nieuwe variabele:</span> <span
        class="f_Variables">_CommandeVitrage of _GlasBestelling</span>. Deze
        variabele staat u toe te weten of u bezig bent met het afdrukken van de
        glasbestelling en dit om de weergave van de kruishouten te
        conditioneren welke enkel op de glasbestelling afgedrukt worden. </p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Gewicht van de componenten:</span>
        Er is een nieuwe kolom toegevoegd « Gewicht » in het tabblad
        Componenten van een offerte/order. Deze notie van het gewicht wordt
        voor elk component automatisch berekend door Winpro, in functie van de
        manier van berekening van een raam.Automatisch of manueel, m.b.v. de
        variabelee <span class="f_Variables">_PoidsChargement of
        _Gewichtslading</span> (Zie release note 7.2.2)</p>

        <p>Het gewicht van een component wordt door Winpro als volgt bepaald
        :</p>

        <p style="margin: 0px 0px 0px 24px;">Wanneer een artikel verbruikt
        wordt en de hoeveelheid is x,zal Winpro de variabele x aantal keer de
        waarde van het veld gewicht van dit artikel verhogen..</p>

        <p style="margin: 0px 0px 0px 24px;">Wanneer een profiel verbruikt
        wordt per lengte y en hoeveelheid x, zal Winpro de waarde x * y
        verhogen met de waarde in het veld gewicht van dit artikel.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Message klant en pop-up:</span> In
        het winpro.ini bestand,definieert u verschillende berichten. In het
        tabblad « Financieel » van de klantenfiche, refereert u naar één van
        deze berichtenin het veld adhoc. </p>

        <p>Gevolg : Telkens wanneer u de klantenfiche opent,bij de afdruk van
        een klantendocument,bij de ingave van een nieuwe offerte/order voor
        deze klant, en bij het bekijken van de lopende orders voor dze klant,
        zal een scherm openen welke de melding (bericht) bevat voor de Winpro
        gebruiker.</p>

        <p> </p>

        <p><span style="text-decoration: underline;">Voorbeeld van een
        configuratie in de Winpro.ini:</span></p>

        <p><span
        style="font-weight: bold; color: #666699;">[MsgClient]</span></p>

        <p><span style="font-weight: bold; color: #666699;">Count = 2 </span>
        correspondeerd met het aantal onderstaande berichten</p>

        <p><span style="font-weight: bold; color: #666699;">1 = Betaald
        regelmatig te laat</span> Bericht nr1 is &hellip;</p>

        <p><span style="font-weight: bold; color: #666699;">2 = Supporter van
        voetbalclub x of y</span>... Bericht nr2 is &hellip;</p>

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
                7.2.10</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">28/04/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 5px;"><span
        style="color: #000000;"> </span></p>

        <p><span class="f_TitreReleaseNote">Bestelling rolluiken :</span> in
        het tabblad « Actie « in een bestelling, is er een keuzemogelijkheid
        toegevoegd om een rolluikbestelling aan te vinken".</p>

        <p>Dit staat toe een bestelbon af te drukken voor de rolluiken =&gt;
        Voor elke kast,moet u aangeven of deze besteld moet worden (aan te
        vinken) en indien ja, bij welke leverancier dit dient te gebeuren ?</p>

        <p>Deze functie is enkel actief wanneer u beschikt over de module VO1
        of VO2.(Rolluiken)</p>

        <p></p>

        <p> </p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Uitvoeren van
        externe programma's:</span><span class="f_Textestd">Kan leiden tot de
        uitvoering van een programma in bepaalde fasen van de orderverwerking
        in WinPro zoals hieronder beschreven:</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">- Afdruk orderbevestigingen</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">- Goedkeuren orderbevestigingen</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">- Financiële goedkeuring</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">- Goedkeuren orderbevestigingen</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">- Lot aanmaken</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">- In productie geven</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">- Afdruk voorbereiding leverbon</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">- Afdruk verzendnota</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;"><span
        class="f_Textestd">- Afdruk factuur</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Deze handelingen zijn
        parameters in het Winpro.ini bestand en worden bekomen door het
        toevoegen van volgende nieuwe sectie</span><span
        class="f_Textestd"> :</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Winproini">[Extern program
        execution]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Execution=1 ;1 om deze
        functionaliteit te activeren 0 om te déactiveren</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Confirmation printed =
        prog.exe;param1 param2;</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Confirmation validated
        = prog.exe</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Financial validation =
        prog.exe;param1;#order#</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Confirmation on hold =
        </span></p>

        <p class="p_Textestd"><span class="f_Winproini">Ready for optimization
        = </span></p>

        <p class="p_Textestd"><span class="f_Winproini">In production =
        </span></p>

        <p class="p_Textestd"><span class="f_Winproini">Delivery preparation =
        </span></p>

        <p class="p_Textestd"><span class="f_Winproini">Delivery note printed =
        </span></p>

        <p class="p_Textestd"><span class="f_Winproini">Invoiced = </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Wanneer de sleutel
        </span><span class="f_Winproini">Execution</span><span
        class="f_Textestd">verschillend is van 1 =&gt; geen
        uitvoering</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">#order#</span><span class="f_Textestd">wordt
        vervangen of door het ordernummer,ofwel door het lotnummer</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="font-weight: bold;">param1</span><span class="f_Textestd">en
        </span><span class="f_Textestd"
        style="font-weight: bold;">param2</span><span class="f_Textestd">zijn
        de parameters verwacht door de executables.</span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
