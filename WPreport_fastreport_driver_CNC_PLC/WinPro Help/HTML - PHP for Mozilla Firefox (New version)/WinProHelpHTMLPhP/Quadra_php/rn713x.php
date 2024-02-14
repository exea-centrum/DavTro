<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["FRA","NED"];
var WinProHelpPageName=["7.1.3x","7.1.3x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?rn713x.php"; }
else { parent.quicksync('a11.5.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>7.1.3x</title>
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
        href="introduction.php">Top</a>  <a href="rn714x.php">Previous</a>  <a
        href="rn712x.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="FRA">
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
                7.1.37</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">3/02/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Export de données:</span> Nous
        pouvons exporter le dessin d&rsquo;un article sans obligation de
        l&rsquo;imprimer sur les documents client et atelier (case à cocher
        "Exporter dessin" dans onglet DXF de la fenêtre Article).</p>

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
                7.1.32</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">17/01/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Nouvelles variables de
        configuration:</span> Les variables <span
        class="f_Variables">_OuvrantLargeurVantail1 [], _OuvrantLargeurVantail2
        [],_OuvrantLargeurVantail3 [],</span></p>

        <p><span class="f_Variables">_OuvrantLargeurVantail4
        [],_OuvrantLargeurVantail5 [],_OuvrantLargeurVantail6 [],</span></p>

        <p><span class="f_Variables">_OuvrantLargeurVantail7 []</span>
        renvoient la largeur des différents vantaux constituant l&rsquo;ouvrant
        à l&rsquo;indice spécifié entre crochets. Ces variables sont indicées
        sur NumeroOuvrant.</p>

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
                7.1.31</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">17/01/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Encours production:</span> Dans
        l&rsquo;onglet &lsquo;Encours production&rsquo; de la commande client,
        les châssis produits en quantité multiple sont maintenant détaillés et
        gérés indépendamment au fin de chaîne. </p>

        <p>Il faut pour cela activer une nouvelle clé dans Winpro.ini :</p>

        <p><span
        style="font-weight: bold; color: #666699;">[WorkPlace]</span></p>

        <p><span style="font-weight: bold; color: #666699;">Type        =
        0</span> pour conserver l'ancien système de comptage</p>

        <p>       <span style="font-weight: bold; color: #666699;">= 1</span>
        pour activer cette nouvelle méthode</p>

        <p>Si cette clé est active : Dans la fiche système, une nouvelle case à
        cocher &lsquo;Comptage individuel des cadres en fin de chaîne&rsquo;
        n&rsquo;est disponible que si votre licence inclus le module &lsquo;Fin
        de chaîne&rsquo;.</p>

        <p>Si cette case est cochée, Winpro enregistre dans la table
        EtiqLogist, lors de l&rsquo;approbation, une ligne pour chaques cadres
        dormants et vantaux.</p>

        <p>Si cette case est décochée, Winpro enregistre dans la table
        EtiqLogist, lors de l&rsquo;approbation, une ligne pour chaques cadres
        dormants.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Textes prédéfinis:</span>
        Jusqu&rsquo;à présent la saisie des textes prédéfinis via
        l&rsquo;onglet « Texte » de la commande/devis se faisait uniquement sur
        base du numéro. </p>

        <p>Nous avons quelque peu modifié l&rsquo;interface permettant à
        l&rsquo;utilisateur de pré visualiser les différents textes
        disponibles.</p>

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
                7.1.30</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">23/12/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Filtrer les profils
        paramétrés:</span> Une nouvelle case à cocher dans le système <img
        src="img_11.jpg" width="94" height="10" border="0" vspace="1"
        hspace="1" alt="img_7"> nous permet de conditionner la consommation des
        profils différemment. Si la case est inactive, Winpro fonctionne comme
        auparavant.</p>

        <p>Winpro évalue la formule d&rsquo;un profil dans les cas suivants
        :</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>La CASE <img src="img/img_11.jpg" width="94" height="10"
                border="0" vspace="1" hspace="1" alt="img_8"> est décochée
              :</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="text-decoration: underline;">Cas 1:</span> Le châssis est saisi
        en teinte autorisée mono :</p>

        <p style="margin: 0px 0px 0px 72px;">Winpro évalue la formule des
        profils pour lesquels aucune teinte n&rsquo;est sélectionnée, ou pour
        lesquels la teinte sélectionnée dans la liste correspond à la teinte
        saisie.<br>
         </p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="text-decoration: underline;">Cas 2:</span> Le châssis est saisi
        en teinte autorisée bicolor : </p>

        <p style="margin: 0px 0px 0px 72px;">Winpro évalue les formules des
        profils dont la couleur sélectionnée correspond à la teinte intérieure
        du châssis ET que les cases à cocher soient dans cette configuration
        <img src="img/img_9.jpg" width="84" height="26" border="0" vspace="1"
        hspace="1" alt="img_9">, </p>

        <p style="margin: 0px 0px 0px 72px;">ou dont la couleur sélectionnée
        correspond à la teinte extérieure du châssis ET que les cases à cocher
        soient dans cette configuration<img src="img/img_10.jpg" width="85"
        height="26" border="0" vspace="1" hspace="1" alt="img_10">, ou dont
        aucune teinte n'est sélectionnées dans la liste.<br>
         </p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="text-decoration: underline;">Cas 3:</span> Le châssis est saisi
        en Teinte Ral mono ou bicolor standard :</p>

        <p style="margin: 0px 0px 0px 72px;">Winpro évalue les formules de tous
        les profils sans restriction.<br>
         </p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="text-decoration: underline;">Cas 4:</span> Le châssis est saisi
        en Teinte Ral mono ou bicolor hors standard :</p>

        <p style="margin: 0px 0px 0px 72px;">Winpro évalue les formules des
        profils pour lesquels AUCUNE teinte n&rsquo;a été sélectionnée dans la
        liste.</p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>La CASE <img src="img/img_11.jpg" width="94" height="10"
                border="0" vspace="1" hspace="1" alt="img_11"> est cochée :</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="text-decoration: underline;">Cas 1, Cas 2 et Cas 4:</span>
        correspondent respectivement au cas décrits ci-dessus.</p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p style="margin: 0px 0px 0px 48px;"><span
        style="text-decoration: underline;">Cas 3:</span> Le châssis est saisi
        en Teinte Ral mono ou bicolor standard :</p>

        <p style="margin: 0px 0px 0px 72px;">Winpro évalue la formule des
        profils pour lesquels aucune teinte n'est sélectionnée, ou pour
        lesquels la teinte Ral intérieure saisie correspond à la teinte
        sélectionnée dans la liste ET que la case <img src="img/img_12.jpg"
        width="82" height="10" border="0" vspace="1" hspace="1" alt="img_12">
        est activée, ou pour lesquels la teinte Ral extérieure saisie
        correspond à la teinte sélectionnée dans la liste ET que la case <img
        src="img_13.jpg" width="86" height="11" border="0" vspace="1"
        hspace="1" alt="img_13"> est activée.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Nouvelle variable de poids:</span>
        Winpro met à notre disposition la variable <span
        class="f_Variables">_PoidsChargement</span> que nous pouvons
        incrémenter par formule. Winpro calcule et stocke la valeur de cette
        variable, par repère, dans la table Detail, et en cas d&rsquo;export
        des données dans Fen. Sa valeur par défaut est nulle.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Fiche article:</span> Améliorations
        ergonomiques.</p>
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
                7.1.37</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">3/02/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Export van gegevens:</span> Wij
        kunnen nu een export uitvoeren van een tekening van een artikel zonder
        dat deze op een klant en/of werkplaatsdocument dient afgedrukt te
        worden (aanvinken "Exporteer tekening" in het tabblad DXF van het
        scherm Artikel).</p>

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
                7.1.32</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">17/01/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Nieuwe
        configuratievariabelen:</span> De variabelen <span
        class="f_Variables">_OuvrantLargeurVantail1 [], _OuvrantLargeurVantail2
        [],_OuvrantLargeurVantail3 [],</span></p>

        <p><span class="f_Variables">_OuvrantLargeurVantail4
        [],_OuvrantLargeurVantail5 [],_OuvrantLargeurVantail6 [],</span></p>

        <p><span class="f_Variables">_OuvrantLargeurVantail7 []</span> Sturen
        de verschillende vleugelvakbreedtes en worden geinitialiseerd met het
        <span style="color:#0000ff">NumeroOuvrant.
        &ldquo;<strong>Vleugelnummer</strong>&rdquo;</span></p>

        <p></p>

        <p>Nl : <strong><span
        style="color:#0000ff">_VleugelBreedteVak1[],_VleugelBreedteVak2[],_VleugelBreedteVak3[],_VleugelBreedteVak4[],
        _VleugelBreedteVak5[],_VleugelBreedteVak6[],_VleugelBreedteVak7[],</span></strong></p>

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
                7.1.31</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">17/01/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Lopende productie:</span> In het
        menu ` Lopende productie&rsquo; van de klant bestelling, zijn de ramen
        die meerdere malen worden geproduceerd, nu uitvoerig en onafhankelijk
        van elkaar beheerd aan het eind van produktie. Men dient daarvoor een
        nieuwe sleutel in Winpro.ini te activeren:</p>

        <p><span
        style="font-weight: bold; color: #666699;">[WorkPlace]</span></p>

        <p><span style="font-weight: bold; color: #666699;">Type        =
        0</span> om de oudemanier te houden</p>

        <p>       <span style="font-weight: bold; color: #666699;">= 1</span>
        om de nieuwe manier te activeren</p>

        <p>Indien deze sleutel geactiveerd is : In het systeem , is de nieuwe
        mogelijkheid « Kaders afzonderlijk tellen op einde van de
        produktie&rdquo; niet beschikbaar zonder in het bezit te zijn van de
        licentie hiervoor, module &ldquo;Einde Produktie&rdquo;.</p>

        <p>Wanneer dit aangevinkt wordt,zal WinPro, na goedkeuring van de
        bestelling, een lijn aanmaken voor elke kader en vleugel in de tabel
        EtiqLogist.</p>

        <p>Wanneer dit niet aangevinkt is,zal WinPro, na goedkeuring van de
        bestelling, in dezelfde tabel een lijn per buitenkader opslaan</p>

        <p></p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Voorgedefinieerde teksten:</span>
        Tot op heden werd de ingave van voorgedefinieerde teksten via het
        tabblad "teksten" in een bestelling/offerte enkel uitgevoerd op bais
        van het tekstnummer. Dit is nu aangepas zodat de gebruiker de tekst kan
        prévisualiseren voor hij deze kiest..</p>

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
                7.1.30</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">23/12/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">De aangepaste profielen
        filteren:</span> Een nieuw vakje dat in het systeem moet aangevinkt
        worden, laat ons toe om het verbruik van de profielen verschillend te
        conditioneren. Als het hokje inactief is, werkt Winpro zoals tevoren.
        <img src="img/img_11.jpg" width="94" height="10" border="0" vspace="1"
        hspace="1" alt="img_7"> Winpro evalueert de formule van een profiel in
        de volgende gevallen:</p>

        <p></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Het vakje <img src="img/img_11.jpg" width="94" height="10"
                border="0" vspace="1" hspace="1" alt="img_8"> is niet
                aangevinkt :

                <p></p>

                <p style="margin-left:4em">&bull;Mogelijkheid 1 : Het raam is
                enkel in mono tint mogelijk :</p>

                <p style="margin-left:4em">Winpro evalueert de profiel formules
                waarbij geen tint geselecteerd is, of waarvan de tint
                overeenkomt met een selectie uit de corresponderende lijst.</p>

                <p></p>

                <p style="margin-left:4em">&bull;Mogelijkheid 2 : Het raam is
                enkel in bicolor tint mogelijk :</p>

                <p style="margin-left:4em">Winpro evalueert de profielformules
                welke corresponderen met de binnenkleur EN in het geval dat
                Binnenzicht aangevinkt is als keuze , of wanneer de kleur
                correspondeerd met de buitenzijde EN in het geval dat
                Buitenzicht aangevinkt is als , of wanneer er geen keuze geaakt
                wordt uit de corrsponderende lijst.</p>

                <p></p>

                <p style="margin-left:4em">&bull;Mogelijkheid 3 :Het raam is
                zowel mogelijk in RAL mono als in RAL standaard :</p>

                <p style="margin-left:4em">Winpro evalueert alle formules
                zonder enige restrictie.</p>

                <p></p>

                <p style="margin-left:4em">&bull;Mogelijkheid 4 : Het raam is
                mogelijk in RAL mono of RAL bicolor niet standaard :</p>

                <p style="margin-left:4em">Winpro evalueert de profielformules
                waarbij GEEN enkele kleur geselecteerd is in de
                corresponderende lijst.</p>

                <p></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 72px;"></p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Nieuwe variabelen voor
        gewichten:</span> Winpro stelt onze de variabele <span
        class="f_Variables">_PoidsChargement</span> of <span
        style="color:#0000ff"><strong>Nl: _LadingsGewicht</strong></span> ter
        beschikking die wij per formule kunnen vergroten. Winpro berekent en
        slaat de waarde van deze variabele, per merk, in de tabel Detail op, en
        in gevallen van export van de gegevens in Fen op. Zijn standaard waarde
        is nul.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Artikelbestand</span> Ergonomische
        verbeteringen</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
