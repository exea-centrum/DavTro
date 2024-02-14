<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["FRA","NED"];
var WinProHelpPageName=["7.1.0x","7.1.0x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?rn710x.php"; }
else { parent.quicksync('a11.5.5'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>7.1.0x</title>
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
        href="introduction.php">Top</a>  <a href="rn7119.php">Previous</a>  <a
        href="rn709x.php">Next</a> </span> </td>
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
                7.1.07</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">12/09/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Commande fournisseur:</span> Ajout
        d'une colonne "Imprimé" dans la fenêtre de sélection de commande
        fournisseur permettant de trouver aisément les commandes qui
        n&rsquo;ayant pas été imprimées.</p>

        <p>Cette information se trouve également dans la page de la commande
        fournisseur. Une case à cocher grisée vous informe si la commande a été
        éditée ou non.</p>

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
                7.1.05</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">05/08/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Préparation du bordereau de
        livraison:</span><span
        style="font-family: 'Times New Roman'; color: #000000;"></span><span
        style="font-family: 'Tahoma'; color: #000000;">Ajout d'une colonne
        "Date prévu fin" dans la fenêtre de sélection de commande pour
        l'impression de la préparation d'un bordereau de livraison.</span></p>

        <p><span style="font-family: 'Tahoma'; color: #000000;"> </span></p>

        <p><span class="f_TitreReleaseNote">Licence Winpro Light:</span><span
        style="font-family: 'Tahoma'; color: #000000;">En fonction de
        l&rsquo;état de la case à cocher « Devis » se trouvant dans
        l&rsquo;onglet Entête d&rsquo;une commande client, Winpro modifiera
        l&rsquo;entête du devis en mentionnant Devis ou Commande. </span></p>

        <p><span style="font-family: 'Tahoma'; color: #000000;">Cette
        fonctionnalité vous permet d&rsquo;imprimer un bon de commande
        détaillé, simplifié, voir même sans cotes sachant que le module CF
        (Commande fournisseur) est indisponible dans les licences Winpro
        Lignt.</span></p>

        <p><span style="font-family: 'Tahoma'; color: #000000;"> </span></p>

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
                7.1.04</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">12/07/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Date de création d&rsquo;un
        prospect:</span><span
        style="font-family: 'Tahoma'; color: #000000;">Ajout d&rsquo;un nouveau
        champ dans la fiche prospect contenant la date de création de
        celui-ci.</span></p>

        <p><span style="font-family: 'Tahoma'; color: #000000;"> </span></p>

        <p><span class="f_TitreReleaseNote">Numerotation automatique des
        prospects:</span><span
        style="font-family: 'Tahoma'; color: #000000;">Comme pour les clients,
        commandes, devis etc, il est désormais possible de créer des prospects
        selon une règle de numérotation automatique définie depuis le menu
        Utilitaire-Préférences-Numérotation</span></p>

        <p><span style="font-family: 'Tahoma'; color: #000000;"> </span></p>

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
                7.1.01</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">27/06/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Nouveaux filtres pour
        PDFmail:</span> Ajout des cases à cocher pdf-fax1 et pdf-fax2 comme
        filtres dans l&rsquo;impression des confirmations. </p>

        <p>Ne concerne que les clients possédant le module PDFMail.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Archivage des commandes:</span>
        Lors de l&rsquo;archivage par déplacement, Winpro déplace également les
        dessins des châssis qui se trouvent dans le répertoire Drawing. </p>

        <p>(Pour autant que ces dessins ont été exportés à un moment donné dans
        Drawing). </p>

        <p>Les enregistrements dans les tables d&rsquo;export correspondant à
        la commande sont effacés lors de l&rsquo;archivage.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Gestion du répertoire
        Drawing:</span> En cas de suppression d&rsquo;un devis/commande, Winpro
        supprime automatiquement les dessins exportés dans Drawing appartenant
        à ce devis/commande.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Modification du titre de la fenêtre
        Winpro:</span> Vous êtes de plus en plus nombreux à développer votre
        paramétrage en dehors de votre Winpro gérant la production. </p>

        <p>De ce fait, si vous lancez en même temps la version de production et
        la version de développement, rien ne vous permet de les différencier.
        </p>

        <p>Désormais, un texte peut être ajouter à droite du nom de votre
        société en le définissant dans le fichier Winpro.ini :</p>

        <p><span style="font-weight: bold; color: #666699;">[winpro]</span></p>

        <p><span style="font-weight: bold; color: #666699;">Title = texte à
        ajouter</span></p>

        <p><span style="font-weight: bold; color: #666699;"> </span></p>

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
                7.1.00</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">23/06/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">Nouvelles fonctions de dessin
        FWL:</span> Il s'agit de fonctions graphiques permettant de calculer
        des débits et de réaliser des dessins que nous n'aurions pas pu réalisé
        avec les instructions de dessin existantes. </p>

        <p>Consultez l'aide php traitant du sujet.</p>
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
                7.1.07</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">12/09/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Leveranciersbestelling:</span>
        Toevoegen van een kolom « afgedrukt » in het scherm voor een bestelling
        bij een leverancier staat u toe om makkelijk alle bestellingen terug te
        vinden welke nog niet afgedrukt zijn.</p>

        <p>Deze informatie bevindt zich ook op de pagina bij de
        leveranciersbestellingen. Een grijs aan te vinken vakje informeert u of
        een bestelling is gewijzigd of niet.</p>

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
                7.1.05</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">05/08/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">&bull;Voorbereiden van een
        leveringsnota : </span><span
        style="font-family: 'Times New Roman'; color: #000000;"></span><span
        style="font-family: 'Tahoma'; color: #000000;">Toevoegen van een kolom
        « Voorziene einddatum » in het scherm waar de bestellingen geselecteerd
        worden voor het afdrukken van de leveringsbonnen .</span></p>

        <p><span style="font-family: 'Tahoma'; color: #000000;"> </span></p>

        <p><span class="f_TitreReleaseNote">&bull;Licentie Winpro Light :
        </span><span style="font-family: 'Tahoma'; color: #000000;">Wanneer
        Offerte aangevinkt staat in het beginscherm van een klantbestelling,zal
        WinPro op een gedetailleerde offerte of vereenvoudigde offerte de
        vermelding geven « Offerte ».</span></p>

        <p></p>

        <p></p>

        <p><span style="font-family: 'Tahoma'; color: #000000;"><span
        style="font-family: Times New Roman,Times,serif; font-style: oblique; font-weight:bold; text-decoration: underline;font-size: 12pt">&bull;Nieuwe
        module :</span> Indien gewenst , bestaat nu de mogelijk om jullie
        dealersleutels (USB,WinProD) te programmeren voor beperkt gebruik
        </span></p>

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
                7.1.04</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">12/07/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">&bull;Datum van aanmaak van een
        prospect </span><span
        style="font-family: 'Tahoma'; color: #000000;">Toevoegen van een nieuw
        veld waarin de datum ingevoerd kan worden van de aanmaak van de
        prospect.</span></p>

        <p><span style="font-family: 'Tahoma'; color: #000000;"> </span></p>

        <p><span class="f_TitreReleaseNote">&bull;Automatische nummering van
        prospecten : </span><span
        style="font-family: 'Tahoma'; color: #000000;">Zoals voor de klanten,
        bestellingen, offerten , enz&hellip; is het nu ook mogelijk om
        prospecten te voorzien van een automatische nummering welke ook bepaald
        kan worden vanuit het menu Instellingen-parameters
        document-Nummering</span></p>

        <p><span style="font-family: 'Tahoma'; color: #000000;"> </span></p>

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
                7.1.01</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">27/06/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">&bull;Nieuwe filter voor PDFmail
        :</span> Toevoeging van de mogelijkheid tot aanvinken van pdf-fax1 en
        pdf-fax2 als filter bij het afdrukken van een bevestiging. Enkel van
        toepassing voor de klanten in bezit van de module PDFMail.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">&bull;Archiveren van bestellingen
        :</span> Bij het archiveren per verplaatsing,zal Winpro ook de
        bijhorende raamtekeningen welke zich in de map « drawing » bevinden
        verplaatsen. De opgeslagen records in de corresponderende export
        tabellen zullen bij archivering automatisch gewist worden.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">&bull;Beheer van de map
        Drawing:</span> In geval van verwijdering van een offerte/bestelling
        zal WinPro automatisch de bijhorende geexporteerde tekeningen in de map
        « Drawing » gaan verwijderen</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">&bull; Wijziging van de titel van
        het scherm Winpro:</span> Vous êtes de plus en plus nombreux à
        développer votre paramétrage en dehors de votre Winpro gérant la
        production. </p>

        <p>De ce fait, si vous lancez en même temps la version de production et
        la version de développement, rien ne vous permet de les différencier.
        </p>

        <p>Désormais, un texte peut être ajouter à droite du nom de votre
        société en le définissant dans le fichier Winpro.ini :Er bestaat steeds
        meer de mogelijkheid om uw installatie buiten uw WinPro te
        ontwikkelen.</p>

        <p>Daarom, als je gelijktijdig begint in de productie versie en de
        ontwikkeling versie, kan je deze niet uit elkander houden.</p>

        <p>Nu kan je een eigen tekst toevoegen aan de rechterkant van de naam
        van uw bedrijf door deze te definiëren in het bestand Winpro.ini:</p>

        <p><span style="font-weight: bold; color: #666699;">[winpro]</span></p>

        <p><span style="font-weight: bold; color: #666699;">Title = toe te
        voegen tekst</span></p>

        <p><span style="font-weight: bold; color: #666699;"> </span></p>

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
                7.1.00</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">23/06/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center; margin: 0px 0px 0px 5px;"> </p>

        <p><span class="f_TitreReleaseNote">&bull;Nieuwe functies in de
        tekeningen FWL :</span> Zie Versie 7.0.</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
