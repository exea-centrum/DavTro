<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["FRA","NED"];
var WinProHelpPageName=["7.2.5x","7.2.5x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?rn725x.php"; }
else { parent.quicksync('a11.4.4'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>7.2.5x</title>
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
        href="introduction.php">Top</a>  <a href="7_2_6x.php">Previous</a>  <a
        href="rn724x.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="FRA">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left">
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
                7.2.58</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">07/11/2007</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">TVA spécifique à
        la pose:</span> Dans certains pays et/ou régions du monde, il peut être
        obligatoire d'affecter un taux de TVA (taxe) spécifique à la pose.<br>
        Une nouvelle clé à ajouter dans le fichier winpro.ini vous permet
        d'activer le nouveau champ de saisie.   </p>

        <p class="p_Textestd"><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>

        <p class="p_Textestd"><span class="f_Winproini">[VAT]</span><br>
        <span class="f_Winproini">TvaPose        = 1        </span><span
        class="f_Textestd">pour activer cette fonctionnalité</span></p>

        <p class="p_Textestd">               <span class="f_Winproini">= 0    
           </span><span class="f_Textestd">pour la désactiver (valeur par
        défaut)</span></p>

        <p style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Couleur des
        panneaux fabriqués :</span> Ajout d&rsquo;une nouvelle clé dans le
        fichier Winpro.ini :</p>

        <p class="p_Textestd"><span class="f_Winproini">[System]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">PanneauFabriqueDormant
               = 0        </span><span class="f_Textestd">comportement actuel
        de Winpro (valeur par défaut), soit panneau de la couleur des ouvrants
        à défaut d'une teinte imposée par l'utilisateur à la saisie du panneau
        fabriqué.</span></p>

        <p class="p_Textestd">                               <span
        class="f_Winproini">= 1</span>        <span class="f_Textestd">Si
        l'utilisateur n'a pas défini de couleur pour son panneau ET que
        celui-ci se trouve dans un fixe simple cadre, il doit alors prendre la
        couleur du cadre dormant.</span></p>

        <p class="p_Textestd"><span
        style="font-family: 'Times New Roman'; color: #0000ff;"> </span></p>

        <p class="p_Textestd"><span
        style="font-family: 'Times New Roman'; color: #0000ff;"> </span></p>

        <p class="p_Textestd"><span
        class="f_TitreReleaseNote">Aérateurs :</span> Ajout d&rsquo;une
        nouvelle clé dans le fichier Winpro.ini :<span
        style="font-family: 'Tahoma'; font-weight: bold;"></span></p>

        <p class="p_Textestd"><span class="f_Winproini">[System]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">AerateurDormant      
         = 0        </span><span class="f_Textestd">Comportement actuel de
        Winpro (valeur par défaut), soit l'aérateur récupère la couleur de
        l'ouvrant à défaut d'une teinte imposée par l'utilisateur.</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 136px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="45"><span
                style="font-family: 'Courier New';"></span><span
                class="f_Winproini">= 1</span></td>
              <td>       <span class="f_Textestd">Si l'utilisateur n'a pas
                défini de couleur pour son    aérateur ET que celui-ci se
                trouve dans un fixe simple cadre, il doit alors prendre la
                couleur du cadre dormant.</span><br>
                <span style="font-family: 'Courier New';"> </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -45px; margin: 0px 0px 0px 181px;"><span
        style="font-family: 'Courier New';"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Croisillons avec
        aérateur :</span> Ajout d&rsquo;une nouvelle clé dans le fichier
        Winpro.ini :<span
        style="font-family: 'Tahoma'; font-weight: bold;"></span></p>

        <p class="p_Textestd"><span class="f_Winproini">[System]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="181"><span
                class="f_Winproini">CroisillonAvecAerateur</span></td>
              <td><span class="f_Winproini">= 1        </span><span
                class="f_Textestd">comportement actuel de Winpro (valeur par
                défaut), soit les axes sont calculés par Winpro sur base des
                dimensions du vitrage.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 181px;"><span class="f_Winproini">=
        0</span><span style="font-family: 'Courier New';">       </span><span
        class="f_Textestd">Winpro calcule les axes en se basant sur les
        dimensions de la zone du remplissage (autrement dit dimension vitrage +
        hauteur aérateur).</span></p>

        <p style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

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
                7.2.56</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">28/09/2007</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Liste
        d</span><span class="f_TitreReleaseNote">&rsquo;</span><span
        class="f_TitreReleaseNote">optimisation:</span><span
        class="f_Textestd">Afin de vous permettre de réaliser des économies de
        papier substantielles lors de l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">impression
        des listes d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">optimisation, vous avez la possibilité de masquer le
        dessin de la barre représentant les débits.</span></p>

        <p class="p_Textestd"><span
        class="f_Winproini">[Optimisation]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Draw On Optimization
        List        = 0        </span><span class="f_Textestd">Winpro supprime
        le dessin de la barre</span></p>

        <p class="p_Textestd">                               <span
        class="f_Winproini">= 1        </span><span class="f_Textestd">Winpro
        conserve le dessin (valeur par défaut)</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

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
                7.2.53</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">10/07/2007</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Message affiché
        dans le dessin du caisson:</span> <span class="f_Textestd">Nous
        disposons d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">un nouveau champ « Texte sur dessin » au niveau de
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">onglet Description du paramétrage Caisson. Le
        contenu de champ sera affiché à l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">écran, et
        imprimé sur les documents, en avant-plan sur le dessin du
        caisson.</span><br>
         </p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Impression du
        cintre 1:1 :</span> <span class="f_Textestd">Il est maintenant possible
        de séparer l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">impression du dormant cintré de son ouvrant.
        </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Autrement dit, Winpro
        produit 2 impressions distinctes au lieu " d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">empiler "
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">ouvrant et le dormant sur un même tirage.</span><br>
        <span class="f_Textestd">Cette fonctionnalité s</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">active par
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">ajout d'une nouvelle clé dans le fichier
        Winpro.ini</span></p>

        <p class="p_Textestd"><span class="f_Winproini">[System]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Print bow 1:1 by frames
        =        1 </span><span class="f_Textestd">pour activer cette
        fonctionnalité</span></p>

        <p class="p_Textestd">                               <span
        class="f_Winproini">0 </span><span class="f_Textestd">pour la
        désactiver (valeur par défaut)</span></p>

        <p style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

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
                7.2.50</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">29/05/2007</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Codification des
        devis &amp; commandes</span><span class="f_Textestd">: Winpro vous
        permet maintenant de codifier les devis &amp; commandes en utilisant le
        code du client en tant que préfixe. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Que faut-il pour activer
        et utiliser cette fonctionnalité:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">1.</span></td>
              <td><span class="f_Textestd">Ajouter une nouvelle clé dans le
                fichier Winpro.ini:</span><br>
                <span class="f_Winproini">[Prefixes]</span><br>
                <span class="f_Winproini">PrefixeClient =        1 </span><span
                class="f_Textestd">pour activer cette fonctionnalité</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;">               
               <span class="f_Winproini">0 </span><span class="f_Textestd">pour
        la désactiver (valeur par défaut)</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">2.</span></td>
              <td><span class="f_Textestd">Avant de cliquer sur les boutons Nv
                Devis ou Nv Commande, il faut avoir saisi le code client au
                préalable.</span><br>
                <span class="f_Textestd"> </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">Si l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">une des 2
        conditions n</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">est pas remplie, Winpro constituera le code du devis
        ou de la commande sur base du préfixe défini dans les Préférences du
        menu Utilitaires.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>
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
      <td align="left">
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
                7.2.58</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">07/11/2007</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Specifieke BTW
        voor de montage:</span> In bepaalde landen en/of regio's in de
        wereld,is het verplicht om een verschillend BTW tarief aan te rekenen
        voor de montage.<br>
        Deze nieuwe functie wordt geactiveert door volgende sleutel toe te
        voegen aan het Winpro.ini bestand, waardoor er een extra veld
        tevoorschijn komt in de offerte/klantorder.   </p>

        <p class="p_Textestd"><span
        style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>

        <p class="p_Textestd"><span class="f_Winproini">[VAT]</span><br>
        <span class="f_Winproini">TvaPose        = 1        </span><span
        class="f_Textestd">om te activeren</span></p>

        <p class="p_Textestd">               <span class="f_Winproini">= 0    
           </span><span class="f_Textestd">om te déactiveren (standaard
        waarde)</span></p>

        <p style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Kleuren van
        samengestelde panelen :</span> Deze nieuwe functie wordt geactiveert
        door volgende sleutel toe te voegen aan het Winpro.ini bestand<span
        style="font-family: 'Tahoma'; font-weight: bold;"></span></p>

        <p class="p_Textestd"><span class="f_Winproini">[System]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">PanneauFabriqueDormant
               = 0        </span><span class="f_Textestd">Standaard gedrag van
        Winpro, bij de ingave de kleur overnemen van de vleugel waarin het
        paneel ingegeven wordt door de gebruiker.</span></p>

        <p class="p_Textestd">                               <span
        class="f_Winproini">= 1</span>        <span class="f_Textestd">Wanneer
        de gebruiker geen kleur gekozen heeft voor zijn samengesteld paneel EN
        wanneer deze zich in een vast enkel kader bevindt,neemt hij de kleur
        over en de buitenkader.<br>
        </span></p>

        <p class="p_Textestd"><span
        style="font-family: 'Times New Roman'; color: #0000ff;"> </span></p>

        <p class="p_Textestd"><span
        style="font-family: 'Times New Roman'; color: #0000ff;"> </span></p>

        <p class="p_Textestd"><span
        class="f_TitreReleaseNote">Verluchtingsroosters :</span> Deze nieuwe
        functie wordt geactiveert door volgende sleutel toe te voegen aan het
        Winpro.ini bestand<span
        style="font-family: 'Tahoma'; font-weight: bold;"></span></p>

        <p class="p_Textestd"><span class="f_Winproini">[System]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">AerateurDormant      
         = 0        </span><span class="f_Textestd"><span
        class="f_Textestd">Standaard gedrag van Winpro,</span> de
        verluchtingsrooster recupereert de kleur van de vleugel ipv de
        ingegeven kleur door de gebruiker.</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 136px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="45"><span
                style="font-family: 'Courier New';"></span><span
                class="f_Winproini">= 1</span></td>
              <td>    <span class="f_Textestd">Wanneer de gebruiker geen kleur
                gekozen heeft voor zijn verluchtingsrooster EN wanneer deze
                zich in een vast enkel kader bevindt,neemt hij de kleur over en
                de buitenkader.</span><br>
                <span style="font-family: 'Courier New';"> </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -45px; margin: 0px 0px 0px 181px;"><span
        style="font-family: 'Courier New';"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Kleinhouten met
        verluchtingsroosters :</span> Deze nieuwe functie wordt geactiveert
        door volgende sleutel toe te voegen aan het Winpro.ini bestand<span
        style="font-family: 'Tahoma'; font-weight: bold;"></span></p>

        <p class="p_Textestd"><span class="f_Winproini">[System]</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="181"><span
                class="f_Winproini">CroisillonAvecAerateur</span></td>
              <td><span class="f_Winproini">= 1        </span><span
                class="f_Textestd">Standaard gedrag van Winpro, de asmaten
                worden berekend door WInpro op basis van de
                glasafmetingen.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 181px;"><span class="f_Winproini">=
        0</span><span style="font-family: 'Courier New';">    </span><span
        class="f_Textestd">Winpro berekend de asmaten op basis van de
        afmetingen van de vulling (anders gezegd glasafmeting+hoogte
        verluchting).</span></p>

        <p style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

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
                7.2.56</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">28/09/2007</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Lijst van
        optimalisatie</span><span class="f_TitreReleaseNote">:</span><span
        class="f_Textestd">Om het papierberbruik bij het afdrukken van de
        optimalisatielijst tot een minimum te herleiden heeft u nu de
        mogelijkheid om de weergave van de stang (weke de zaaglengte van het
        profiel voorstelt) te verbergen</span><span
        class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span
        class="f_Winproini">[Optimisation]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Draw On Optimization
        List        = 0        </span><span class="f_Textestd">Winpro
        verwijderd de tekening van de stang</span></p>

        <p class="p_Textestd">                               <span
        class="f_Winproini">= 1        </span><span class="f_Textestd">Winpro
        bewaard de tekening (standaard waarde)</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

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
                7.2.53</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">10/07/2007</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Bericht
        weergeven in de tekening van de rolluikkast:</span> <span
        class="f_Textestd">Wij beschikken over een nieuw veld</span><span
        class="f_Textestd">« Tekst op tekening » op niveau van het tabblad
        Beschrijving in de parametrage van de rolluikkast.De inhoud van dit
        veld wordt weergegeven op het scherm, en afgedrukt op de
        documenten,</span><span class="f_Textestd"></span><br>
         </p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Afdruk van een
        boog op schaal 1:1 :</span> Het is nu mogelijk om de afdruk van een
        gebogen kader te onderscheiden van deze van de vleugel<span
        class="f_Textestd">. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Anders gezegd, Winpro
        zal 2 afdrukken maken, één voor de vleugel en één voor de
        kader</span><span class="f_Textestd">.</span><br>
        <span class="f_Textestd">Deze functie wordt geactiveert door volgende
        sleutel toe te voegen aan het Winpro.ini bestand</span><span
        class="f_Textestd"></span></p>

        <p class="p_Textestd"><span class="f_Winproini">[System]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">Print bow 1:1 by frames
        =        1 </span><span class="f_Textestd">om te activeren</span></p>

        <p class="p_Textestd">                               <span
        class="f_Winproini">0 </span><span class="f_Textestd">om te déactiveren
        (standaard waarde)</span></p>

        <p style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

        <p style="text-align: center;"><span
        class="f_TitreReleaseNote"> </span></p>

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
                7.2.50</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">29/05/2007</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Codering van
        offertes &amp; klantorders</span><span class="f_Textestd">: Winpro
        staat u nu toe om bij de codering van een offerte en/of klantorder
        gebruik te maken van de klantcode als prefix. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Om deze functie te
        kunnen gebruiken dient u:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">1.</span></td>
              <td><span class="f_Textestd">Een nieuwe sleutel toe te voegen in
                de Winpro.ini:</span><br>
                <span class="f_Winproini">[Prefixes]</span><br>
                <span class="f_Winproini">PrefixeClient =        1 </span><span
                class="f_Textestd">om te activeren</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;">               
               <span class="f_Winproini">0 </span><span class="f_Textestd">om
        te déactiveren (standaard waarde)</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">2.</span></td>
              <td><span class="f_Textestd">Vooraleer u klkt op de knoppen Nw
                Offerte of Nw Bestelling, moet de klantcode reeds ingevoerd
                zijn.</span><br>
                <span class="f_Textestd"> </span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">Wanneer één van beide
        voorwaarden niet voldaan is,zal Winpro de code starten op basis van de
        prefix bepaald bij de Instellingen | Parameters document</span><span
        class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
