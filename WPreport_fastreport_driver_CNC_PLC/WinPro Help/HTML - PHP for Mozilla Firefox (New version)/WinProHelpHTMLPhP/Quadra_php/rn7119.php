<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["FRA","NED"];
var WinProHelpPageName=["7.1.1x","7.1.1x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?rn7119.php"; }
else { parent.quicksync('a11.5.4'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>7.1.1x</title>
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
        href="introduction.php">Top</a>  <a href="rn712x.php">Previous</a>  <a
        href="rn710x.php">Next</a> </span> </td>
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
                7.1.19</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">10/11/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Menu Winpro personnalisé:</span> Un
        nouveau point de menu personnalisé peut être ajouté au menu Utilitaire
        déjà existant. </p>

        <p>Ces nouveaux points de menu vous permettent de lancer
        l&rsquo;exécution de logiciels externes.</p>

        <p><span
        style="font-weight: bold; color: #666699;">[Programs]</span></p>

        <p><span style="font-weight: bold; color: #666699;">Count = 2</span> la
        valeur correspond à la quantité de lignes à ajouter dans le menu
        Utilitaires (maximum 10)</p>

        <p>; Liste des programmes à exécuter suivit du caractère ; et des
        différents paramètres éventuels (voir exemple ci-dessous)</p>

        <p><span style="font-weight: bold; color: #666699;">1 = C:\Documents
        and Settings\User1\ImportTarif.exe </span>programme à exécuter suivit
        du caractère ; et des différents paramètres éventuels</p>

        <p><span style="font-weight: bold; color: #666699;">2 = WPreport.exe ;
        « Code du rapport WPreport » </span>exécuter le rapport WPreport
        indiqué en paramètre</p>

        <p><span style="font-weight: bold; color: #666699;">1:Description =
        Import Tarif </span>Description apparaissant dans le menu Utilitaire de
        WinPro</p>

        <p><span style="font-weight: bold; color: #666699;">2:Description =
        Commissions Vendeurs </span>Description apparaissant dans le menu
        Utilitaire de WinPro</p>

        <p><span style="color: #ff0000;">Remarque: L'exécution de Wpreport en
        V8 n'est plus compatible ici, consultez la RN8.0.0</span></p>

        <p> </p>

        <p style="margin: 0px 0px 0px 5px;"> </p>

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
                7.1.15</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">9/10/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Profils composés:</span> La
        réservation d&rsquo;un profil composé ne prend en compte que les
        composants du profil ayant été définis dans l&rsquo;onglet
        &lsquo;Composants&rsquo; de la fiche article. </p>

        <p>Afin de réserver à la fois les composants ET la référence du profil
        composé, il faut alors ajouter une nouvelle clé dans le fichier
        Winpro.ini :</p>

        <p><span style="font-weight: bold; color: #666699;">[System]</span> </p>

        <p><span
        style="font-weight: bold; color: #666699;">ReserverProfilCompose =
        1</span>                (La valeur par défaut étant 0)</p>

        <p>Remarque : Cette clé ne concerne que la gestion des réservations.
        Pour ce qui est des commandes fournisseurs créées directement par
        l&rsquo;onglet Action de la cde client, Winpro commande
        systématiquement le profil composé ET ses composants.</p>

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
                7.1.13</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">30/09/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span class="f_TitreReleaseNote">Paramètre de prix:</span> Dans
        l&rsquo;onglet Prix de la commande client se trouvent différentes cases
        à cocher permettant de détailler les prix ou non. La mémorisation de
        leur état « Par défaut » est spécifique à chaque utilisateur Winpro. Il
        est désormais possible de forcer une seule mémorisation valable pour
        tous les utilisateurs.</p>

        <p>Cette fonctionnalité s&rsquo;active via une nouvelle clé dans le
        fichier winpro.ini</p>

        <p><span
        style="font-weight: bold; color: #666699;">[Commande]</span></p>

        <p><span style="font-weight: bold; color: #666699;">Cases generales    
           = 1</span> pour forcer une combinaison unique</p>

        <p>                             <span
        style="font-weight: bold; color: #666699;">= 0</span> pour que chaque
        utilisateur puisse définir ses propres cases par défaut</p>

        <p> </p>

        <p>L&rsquo;activation de cette nouvelle clé prend également en compte
        les paramètres suivants pour chaque utilisateur:</p>

        <p><span style="font-weight: bold; color: #666699;">[Customer
        Order]</span></p>

        <p><span style="font-weight: bold; color: #666699;">Round up
        =...</span> Arrondir par 10 cm.</p>

        <p><span style="font-weight: bold; color: #666699;">Ral Cutoffs
        =...</span> Compter les chutes ral.</p>

        <p><span style="font-weight: bold; color: #666699;">RAL Distribution
        =...</span> Répartir les chutes ral.</p>

        <p><span style="font-weight: bold; color: #666699;">Individual discount
        =...</span> Remise calculée par repère (cette clé n'est prise en
        considération que si <span class="f_Winproini">Cases generales =
        0</span>)</p>

        <p><span style="font-weight: bold; color: #666699;">Rep =...</span>
        Remise calculée par repère (cette clé n'est prise en considération que
        si <span class="f_Winproini">Cases generales = 1</span>)</p>

        <p><span style="font-weight: bold; color: #666699;">Price type
        =...</span> _TypePrix=_Commercial ou _Debourse</p>

        <p><span style="font-weight: bold; color: #666699;">Acc =...</span>
        Détail des accessoires.</p>

        <p><span style="font-weight: bold; color: #666699;">Cha =...</span>
        Détail des châssis.</p>

        <p><span style="font-weight: bold; color: #666699;">Vit =...</span>
        Détail des vitrages.</p>

        <p><span style="font-weight: bold; color: #666699;">Vol =...</span>
        Détail des volets.</p>

        <p><span style="font-weight: bold; color: #666699;">Rem =...</span>
        Remise déduite.</p>

        <p><span style="font-weight: bold; color: #666699;">Tot =... </span>Pas
        de total.</p>

        <p> </p>

        <p>Chacune de ces clés doit prendre une de ces valeurs  :</p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-weight: bold; color: #666699;">0</span> si la case doit
        être décochée tout en pouvant être modifiée par l&rsquo;utilisateur.</p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-weight: bold; color: #666699;">1</span> si la case doit
        être cochée tout en pouvant être modifiée par l&rsquo;utilisateur.</p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-weight: bold; color: #666699;">2</span> si la case doit
        être décochée tout en la grisant.</p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-weight: bold; color: #666699;">3</span> si la case doit
        être cochée tout en la grisant.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 5px;"> </p>

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
                7.1.11</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">20/09/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">Usinage cadre dormant
        segmenté:</span> Des problèmes de positionnement d&rsquo;usinages
        envoyés sur le cadre dormant segmenté peuvent apparaître. Si vous
        rencontrez ce type de problème, vous pouvez le résoudre en activant
        cette nouvelle clé dans le fichier winpro.ini</p>

        <p><span style="font-weight: bold; color: #666699;">[system]</span></p>

        <p><span style="font-weight: bold; color: #666699;">Usinage bord
        segmente        = 1</span> pour activer la correction</p>

        <p>                                   <span
        style="font-weight: bold; color: #666699;">= 0</span> pour ne pas
        bénéficier de cette modification (valeur par défaut prise en compte si
        la clé n&rsquo;existe pas)</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Aérateur:</span> Vous pouvez
        définir une position par défaut pour chaque aérateur.</p>

        <p> </p>

        <p> </p>

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
                7.1.10</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">03/10/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">Nouvelles variables:</span> Les
        variables logiques <span class="f_Variables">ContientVide</span> et
        <span class="f_Variables">ContientPorte</span> sont locales au dormant.
        Elles sont désormais disponibles en tant que variables globales : <span
        class="f_Variables">_ContientPorte</span> et <span
        class="f_Variables">_ContientVide</span>.</p>
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
      <td align="left"><p style="margin: 0px 0px 0px 5px;"> </p>

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
                7.1.19</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">10/11/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Gepersonaliseerd menu Winpro</span>
        :<span class="f_Variables"></span> er kan nu een nieuwe optie bovenop
        het reeds bestaand gepersonaliseerd menu toegevoegd worden. Deze nieuwe
        menu opties staan u bijv. Toe een extern programma via het menu van
        Winpro op te starten. </p>

        <p></p>

        <p>[Programs]</p>

        <p>; Count = Aantal menu (Maximum 10)</p>

        <p style="margin-left:4em">Count = 2</p>

        <p>; Lijst van de uit te voeren programma&rsquo;s volgens karakter ; en
        de eventuele verschillende parameters (zie onderstaand voorbeeld)</p>

        <p style="margin-left:4em">1 = C:\Documents and
        Settings\User1\ImportTarif.exe</p>

        <p style="margin-left:4em">2 = WPreport.exe ; « Code rapport WPreport »
        « Eventuele parameter »</p>

        <p>; Lijst van beschrijvingen weergegeven in WinPro</p>

        <p style="margin-left:4em">1:Description = Import Tarif</p>

        <p style="margin-left:4em">2:Description = Commissies verkopers</p>

        <p></p>

        <p></p>

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
                7.1.15</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">9/10/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Samengestelde profielen:</span> De
        reservatie van een samengesteld profiel vindt niet plaatst wanneer de
        onderdelen van het profiel niet gedefinieert zijn in het tabblad
        "Componenten" van het artikelbestand. </p>

        <p>Teneidne in één keer de componenten EN de referentievan het
        samengesteld profiel te reserveren, dient er een nieuwe sleutel
        toegevoegd te worden in het Winpro.ini bestand :</p>

        <p><span style="font-weight: bold; color: #666699;">[System]</span> </p>

        <p><span
        style="font-weight: bold; color: #666699;">ReserverProfilCompose =
        1</span>                (Standaard waarde is 0)</p>

        <p>Opmerking : Deze sleutel heeft enkel betrekking op het beheer van de
        reservaties.Voor wat betreft de leveranciersbestellingen welke direct
        aangemaakt worden in het tabblad "Acies" in een klantorder,zal Winpro
        systematisch zowel de componenten alsook het samengetsteld profiel
        bestellen.</p>

        <p></p>

        <p> </p>

        <p> </p>

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
                7.1.13</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">30/09/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Prijsparameters :</span> in het
        tabblad « Prijs » bij een bestelling bevinden zich verschillende opties
        om aan te vinken hoe de prijs dient afgedrukt te worden. Dit aanvinken
        is specifiek per gebruiker van WinPro.Het is nu mogelijk om een
        standaard waarde te forceren voor alle gebruikers.</p>

        <p>Deze optie wordt mogelijk gemaakt door volgende sleutel toe te
        voegen in de winpro.ini.</p>

        <p></p>

        <p><span class="f_Variables"><span
        style="color:#000000">[Commande]</span></span></p>

        <p><span class="f_Variables">Cases generales=x</span></p>

        <p style="margin-left:2em;"><span class="f_Variables">; x = 1 voor een
        unieke combinatie</span></p>

        <p style="margin-left:2em;"><span class="f_Variables">; x = 0 om elke
        gebruiker zijn standaard instelling te laten kiezen</span></p>

        <p><span class="f_Variables">Activatie van deze parameters (sleutel)
        neemt ook volgende parameters met zich mee voor elke
        gebruiker:</span></p>

        <p><span class="f_Variables">[Customer Order]</span></p>

        <p style="margin-left:2em;"><span class="f_Variables">Round up =
        0/1/2/3 =&gt; Afronden op 10 cm.</span></p>

        <p style="margin-left:2em;"><span class="f_Variables">Ral Cutoffs =
        0/1/2/3 =&gt; Bereken Ral afvallen .</span></p>

        <p style="margin-left:2em;"><span class="f_Variables">RAL Distribution
        = 0/1/2/3 =&gt; Ral afvallen verdelen.</span></p>

        <p style="margin-left:2em;"><span class="f_Variables">Individual
        discount = 0/1/2/3 =&gt; korting berekend per opdracht.</span></p>

        <p style="margin-left:2em;"><span class="f_Variables">Price type =
        0/1/2/3 =&gt; _Prijstype=_Commercieel of _Debourse</span></p>

        <p style="margin-left:2em;"><span class="f_Variables">Acc = 0/1/2/3
        =&gt; Detail toebehoren prijs.</span></p>

        <p style="margin-left:2em;"><span class="f_Variables">Cha = 0/1/2/3
        =&gt; Detail ramen.</span></p>

        <p style="margin-left:2em;"><span class="f_Variables">Vit = 0/1/2/3
        =&gt; Detail beglazingen.</span></p>

        <p style="margin-left:2em;"><span class="f_Variables">Vol = 0/1/2/3
        =&gt; Detail rolluiken.</span></p>

        <p style="margin-left:2em;"><span class="f_Variables">Rem = 0/1/2/3
        =&gt; Afgetrokken korting.</span></p>

        <p style="margin-left:2em;"><span class="f_Variables">Tot = 0/1/2/3
        =&gt; Geen Totaal</span></p>

        <p></p>

        <p>Elk van deze sleutel dient één van deze waardes te bevatten  :</p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-weight: bold; color: #666699;">0</span> indien alles dient
        gedeselecteert te worden en door de gebruiker kan aangepast worden.</p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-weight: bold; color: #666699;">1</span> indien alles
        geselecteert dient te worden en kan gewijzigd worden door de
        gebruiker.</p>

        <p style="margin: 0px 0px 0px 24px;"><span
        style="font-weight: bold; color: #666699;">2</span> indien alles
        gedeselecteert dient te worden en in het grijs gezet dient te
        worden.</p>

        <p style="margin-left:2em;"><span
        style="font-weight: bold; color: #666699;">3</span> indien alles
        geselecteert dien te worden en in het grijs gezet dient te worden.</p>

        <p><span class="f_Variables"></span></p>

        <p><span class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 5px;"> </p>

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
                7.1.11</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">20/09/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span class="f_TitreReleaseNote">&bull;Bewerking bij een
        gesegmenteerde buitenkader : :</span> De problemen met de posities van
        de bewerkingen welke gestuurd worden naar een gesegmenteerde
        buitenkaderkunnen niet in rekening gebracht worden. Indien u problemen
        ondervindt, kan u volgende nieuwe sleutel activeren in de winpro.ini
        </p>

        <p></p>

        <p><strong>[system]</strong></p>

        <p>Usinage bord segmente = x</p>

        <p style="margin-left:4em">; x = 1 voor de activering van de
        correctie</p>

        <p style="margin-left:4em">; x = 0 om deze wijziging niet te gebruiken
        (waarde wanneer de sleutel niet zou bestaan)</p>

        <p></p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">&bull;Ventilator</span> U kan nu
        een standaard positie kiezen per ventilatieroostertype.U kan nu een
        standaard positie kiezen per ventilatieroostertype..</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 5px;"> </p>

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
                7.1.10</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">03/10/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span class="f_TitreReleaseNote"></span></p>

        <p><span
        style="font-family: Times New Roman,Times,serif;  font-style: oblique; font-weight:bold; text-decoration: underline;font-size: 12pt">Nieuwe
        variabelen :</span> De logische variabelen <strong><span
        style="color:#0000ff">ContientVide « InhoudLeeg »</span></strong> en
        <strong style="color:#0000ff">ContientPorte « InhoudDeur »</strong>
        zijn lokaaal bij de kader. Zij zijn ook beschikbaar als globale
        variabelen : _ InhoudDeur en</p>

        <p><strong><span style="color:#0000ff">_InhoudLeeg.</span></strong> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
