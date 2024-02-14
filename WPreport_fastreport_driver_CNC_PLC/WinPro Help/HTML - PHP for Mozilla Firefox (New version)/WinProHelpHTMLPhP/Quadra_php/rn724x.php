<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["FRA","NED"];
var WinProHelpPageName=["7.2.4x","7.2.4x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?rn724x.php"; }
else { parent.quicksync('a11.4.5'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>7.2.4x</title>
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
        href="introduction.php">Top</a>  <a href="rn725x.php">Previous</a>  <a
        href="rn723x.php">Next</a> </span> </td>
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
                7.2.49</span></p>
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

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Tables
        d</span><span class="f_TitreReleaseNote">&rsquo;</span><span
        class="f_TitreReleaseNote">export</span><span
        class="f_TitreReleaseNote">:</span><span class="f_Textestd">Lors de la
        suppression d'une commande, les informations envoyées dans les tables
        d'export sont vidées ainsi que les dessins en fonction de la valeur
        d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">une nouvelle clé à insérer dans le fichier
        WinPro.ini.</span></p>

        <p class="p_Textestd"><span class="f_Winproini">[System]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">VideTablesExport      
         = 0        </span><span class="f_Textestd">Winpro ne supprime jamais
        les données exportées.                                      
         </span></p>

        <p class="p_Textestd">                       <span
        class="f_Winproini">= 1        </span><span class="f_Textestd">Winpro
        supprime systématiquement les données exportées.</span><br>
                               <span class="f_Winproini">= 2      
         </span><span class="f_Textestd">Winpro demande à l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">utilisateur
        s</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">il faut les supprimer.</span></p>

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
                7.2.46</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">04/05/2007</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Edition de
        tarifs:</span><span class="f_Textestd">Lors de la saisie de Tarif dans
        Winpro, l'utilisateur peut désormais:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Saisir un seuil sous le dormant
                comme en saisie de devis à l'aide de la liste combo
                spécifique.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Sélectionner la configuration du
                seuil de porte comme dans la saisie du devis...pour autant que
                la clé seuil etendu soit activée dans winpro.ini</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Saisir la teinte Ral =&gt; Couleur
                intérieure et extérieure de la menuiserie.</span></td>
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
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                7.2.45</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/04/2007</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p><span class="f_TitreReleaseNote">Croisillons:</span> Simplification
        de la saisie de la teinte des croisillons : </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Inversion des champs de saisie « Couleur int » et « Couleur
                ext » afin de saisir la teinte extérieure en 1er.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>La liste déroulante « Couleur ext » affiche toutes les
                teintes autorisées OU toutes les teintes non interdites.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Le champ « Couleur int » est masqué lorsque le croisillon est
                interdit en bicoloration.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Le champ « Couleur int » est grisé et est automatiquement
                complété par Winpro par le code de la teinte intérieure lorsque
                la teinte extérieure est une teinte bicolore. </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>La liste déroulante « Couleur int » affiche :</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 18px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">o</span></td>
              <td>Toutes les teintes autorisées mono OU toutes les teintes mono
                non interdites, dans le cas où la teinte extérieure saisie
                n&rsquo;est pas bicolore.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 18px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="18"><span
                style="font-size: 10pt; font-family: 'Arial'; color: #000000;">o</span></td>
              <td>Uniquement la teinte intérieure définie dans la couleur
                bicolore saisie en tant que « Couleur ext » (=&gt;la teinte
                extérieure saisie est bicolore)</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span class="f_Textestd"> </span></p>

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
                7.2.44</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">09/03/2007</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Profil
        périphérique déduit par défaut:</span><span
        class="f_Textestd">Possibilité de définir pour chaque profil
        périphérique une position par défaut et si la hauteur du profil doit
        être déduite par défaut de la hauteur de la menuiserie.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Copie de
        Commande/Devis:</span><span class="f_Textestd">Lors de la duplication
        d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">un devis, Winpro propose à l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">utilisateur
        s</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">il souhaite convertir la copie en commande. Et lui
        propose ensuite s</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">il souhaite une numérotation automatique utilisant
        le préfixe des Devis ou des Commandes.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Onglet
        récapitulatif:</span><span class="f_Textestd"></span><br>
        <span class="f_Textestd">Une nouvelle colonne est insérée entre
        « Cha. » et « Total ». Ce nouveau champ contient la valeur de la pose
        répartie sur l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">ensemble des repères et/ou associée au repère
        concerné.</span><br>
        <span class="f_Textestd">Dans l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">encadré situé
        au centre inférieur s</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">y trouvait la
        ligne « Pose », cette ligne est renommée en pose
        non-répartie.</span><br>
        <span class="f_Textestd">Dans les totaux, nous avons maintenant une
        ligne « Pose répartie ». Ce montant correspond au total de toutes les
        poses réparties et/ou assignées à des repères en particulier.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Localisation des
        repères:</span><span class="f_Textestd">Un champ texte est disponible
        au niveau de l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">onglet « Châssis » de la cde/devis. Ce champ permet
        à l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">utilisateur de spécifier quelques indications
        concernant le repère en cours de saisie. Cette information est
        automatiquement reprise dans l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">intitulé de
        la fenêtre afin de disposer de cette information depuis tous les
        onglets de la cde.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">De plus, cette notion de
        localisation est également utilisée dans l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">onglet
        Pose.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Assistants de
        saisie de la pose:</span><span class="f_Textestd"></span><br>
        <span class="f_Textestd">Le champ « Châssis » de l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">onglet Pose
        de la Cde/Devis n</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">est plus un champ libre. Il est converti en liste
        combo dans lequel vous disposez de la liste des repères avec leur
        propre localisation. Cette modification a pour but d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">accélérer la
        saisie et d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">éviter les erreurs d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">association
        de pose-repère.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">En partie inférieure,
        vous y trouvez toujours la Surface et le Périmètre total de
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">ensemble des repères.</span><br>
        <span class="f_Textestd">Vous y trouvez également, la Localisation, la
        Surface et le Périmètre du repère indiqué dans le champ « Châssis »de
        la ligne sélectionnée.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Quantification
        automatisée de la pose:</span><span class="f_Textestd">Dans le
        paramétrage de vos articles de pose, vous avez la possibilité de
        définir la méthode que Winpro va automatiquement appliquer lors de la
        saisie de cet article dans un devis/cde pour le quantifier
        correctement. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Il vous est donc
        possible de quantifier l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">article de
        pose en mètres carré en cochant la case Surface.</span><br>
        <span class="f_Textestd">Ou de quantifier en mètres, selon vos
        souhaits : par exemple 2x hauteur + 1x Largeur.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">En saisie, la colonne
        « Qté » sera automatiquement complétée par Winpro pour autant
        qu</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">un repère ai été sélectionné au préalable et que la
        méthode de quantification automatique soit définie dans l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">article de
        pose.</span><br>
        <span class="f_Textestd">La quantité calculée par Winpro peut être
        modifiée par l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">utilisateur.   </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span
        class="f_TitreReleaseNote">Représentant:</span><span
        class="f_Textestd">Ajout d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">un champ « n°
        de tél » dans la fiche des représentants.</span></p>

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
                7.2.43</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">01/03/2007</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Module d'import
        Cover (COV):</span><span class="f_Textestd">Ce module est un
        interfaçage avec le logiciel Cover qui est spécialisé en calcul de
        véranda. Il vous permet donc d'importer dans Winpro les commandes
        provenant de Cover par le biais d'un fichier XML généré par
        Cover.</span><br>
        <span class="f_Textestd">Cette importation s'exécute par une pression
        le nouveau bouton intitulé "Importation Cover" se trouvant dans
        l'onglet "Entête" de la cde/devis.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">L'importation d'une
        commande Cover génère les châssis dans Winpro sous certaines
        conditions:</span></p>

        <p class="p_Textestd"><span class="f_Textestd">  - Le code du repère
        Cover doit correspondre à un numéro de repère stocké dans une
        bibliothèque de châssis Winpro.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">  - La forme du repère
        Cover doit correspondre à la forme du repère stocké dans une
        bibliothèque de châssis Winpro. Aucune tolérance dimensionnelle n'est
        acceptée.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Si ces conditions sont
        réunies, Winpro ajoute un repère dans la cde/devis en récupérant les
        dimensions, la couleur et le nom du repère depuis le fichier
        Cover.</span><br>
        <span class="f_Textestd">Les châssis importés peuvent être modifiés
        dans Winpro par la suite.</span><br>
        <span class="f_Textestd">Il n'est pas prévu de pouvoir importer
        plusieurs commandes Cover dans une seule cde/devis Winpro.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">En cas de réimportation
        d'une commande Cover dans Winpro, le traitement de l'import des châssis
        est exclus de la procédure.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span><br>
        <span class="f_Textestd">L'importation d'une commande Cover génère
        également les articles et profils accessoires en les affichant dans le
        nouvel onglet "Composants Cover" de la cde/devis Winpro.</span><br>
        <span class="f_Textestd">Les usinages liés à ces profils sont également
        importés et listés dans ce même onglet. Ils peuvent être récupérés par
        votre driver machine avec une adaptation. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Le contenu de cet onglet
        n'est pas modifiable.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les extrémités d'un
        profil issus de Cover peuvent être définie par 2x2 angles, soit 2
        angles par extrémité. Les angles excédentaires seront convertis en
        usinages lors de l'importation.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les Composants Cover
        sont gérés en stock comme les composants se trouvant dans les onglets
        Articles et Profils.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les Composants Cover
        peuvent être imprimés ou non sur les documents commerciaux. La
        configuration s'effectue au niveau de la fiche article, vous y
        trouverez les nouvelles cases "Documents client Cover", valorisation
        Cover".</span><br>
        <span class="f_Textestd">Le PV négoce est défini via le nouveau champ
        "Prix de vente Cover".</span></p>

        <p class="p_Textestd"><span class="f_Textestd">En cas de réimportation
        d'une commande Cover dans Winpro, le contenu de l'onglet "Composants
        Cover" est vidé intégralement avant d'être réimporté.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les profils accessoires
        de Cover sont gérés en production comme les profils accessoires saisis
        depuis l'onglet Profil de la cde/devis.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les temps de main
        d'oeuvre provenant de Cover sont stockés dans le champ "Cover" de
        l'onglet Entête de la cde/devis. Ils sont donc cumulés au temps
        paramétrés dans Winpro, mais ne sont en aucun cas valorisés.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Un fichier cover.ini
        doit être complèter lors de la mise en place du module.</span><br>
        <span class="f_Textestd"> </span></p>

        <p style="text-align: center;"> </p>

        <p style="text-align: center;"> </p>

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
                7.2.42</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">26/02/2007</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p><span class="f_TitreReleaseNote">EDIV (Glassver
        uniquement): </span></p>

        <p>Possibilité d'ajouter dans le nom du fichier la macro <span
        class="f_Variables">#2#</span> qui sera remplacée ????</p>

        <p>Pour info, la macro <span class="f_Variables">#1#</span> est déjà
        remplacée par le code lot ou le numéro de lot Winpro.</p>

        <p> </p>

        <p class="p_Textestd"><span
        class="f_TitreReleaseNote">Finitions:</span><span
        class="f_Textestd">Une notion de finition peut être activée au niveau
        de chaque système à l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">aide
        d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">une nouvelle case à cocher « Finition ». Ces
        finitions doivent être créées via le menu Technique | Châssis |
        Finitions.</span><br>
        <span class="f_Textestd">Lorsque la case « Finition » du système est
        activée, une autre case « Limiter choix finitions » apparaît à son
        tour. </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Lors de la saisie
        d</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">un devis/commande un nouveau bouton "Finition"
        apparaît dans l'onglet châssis pour autant que la case « Finition » du
        système sélectionné est activée. Une pression sur ce bouton provoque
        l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">affichage d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">une nouvelle
        fenêtre vous permettant de définir les finitions souhaitées. En
        fonction de l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">état de la case « Limiter choix finitions » les
        champs de saisie de finitions sont soit libres ou soit de type liste
        combo.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Une seconde case à
        cocher "Limiter choix finitions" apparaît en fct de l'état de la
        première case à cocher et modifie le mode de saisie de l'utilisateur:
        Si elle n'est pas cochée, les champs de saisie de finitions sont
        libres, sinon les champs de saisie libre sont remplacés par des listes
        combo présentant toutes les finitions créées.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les variables
        </span><span class="f_Variables">FinitionInt</span><span
        class="f_Textestd">et </span><span
        class="f_Variables">Finition</span><span class="f_Textestd">sont
        initialisées par Winpro avec la valeur de la catégorie correspondant à
        la finition saisie par l'utilisateur. Ces variables sont locales au
        dormant, ouvrant, traverse de dormant, traverse d'ouvrant, rehausse et
        parclose paramétrée par formule.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Des variables en
        globales sont également disponibles:</span></p>

        <p class="p_Textestd"><span
        class="f_Variables">_DormantFinitionInt</span><span
        class="f_Textestd"></span></p>

        <p class="p_Textestd"><span class="f_Variables">_OuvrantFinitionInt [
        ]</span><span class="f_Textestd">indicée sur le n° d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">ouvrant
        </span></p>

        <p class="p_Textestd"><span
        class="f_Variables">_OuvrantMauclairFinitionInt [ ]</span><span
        class="f_Textestd">indicée sur le n° d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">ouvrant
        </span></p>

        <p class="p_Textestd"><span class="f_Variables">_TravFinitionInt [
        ]</span><span class="f_Textestd">indicée sur le n° de traverse
        </span></p>

        <p class="p_Textestd"><span
        class="f_Variables">_RemplParcloseFinitionInt [ ]</span><span
        class="f_Textestd">indicée sur le n° de remplissage </span></p>

        <p class="p_Textestd"><span class="f_Variables">_PeriphFinitionInt [
        ]</span><span class="f_Textestd">indicée sur le n° du profil
        périphérique</span></p>

        <p class="p_Textestd"><span class="f_Variables">_ParcloseFinitionInt [
        ]</span><span class="f_Textestd">indicée sur le n° de
        remplissage</span></p>

        <p class="p_Textestd"><span class="f_Variables">_DormantFinition
        </span></p>

        <p class="p_Textestd"><span class="f_Variables">_OuvrantFinition [
        ]</span><span class="f_Textestd">indicée sur le n° d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">ouvrant
        </span></p>

        <p class="p_Textestd"><span
        class="f_Variables">_OuvrantMauclairFinition [ ]</span><span
        class="f_Textestd">indicée sur le n° d</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">ouvrant
        </span></p>

        <p class="p_Textestd"><span class="f_Variables">_TravFinition [
        ]</span><span class="f_Textestd">indicée sur le n° de traverse
        </span></p>

        <p class="p_Textestd"><span class="f_Variables">_PeriphFinition [
        ]</span><span class="f_Textestd">indicée sur le n° du profil
        périphérique</span></p>

        <p class="p_Textestd"><span class="f_Variables">_RemplParcloseFinition
        [ ]</span><span class="f_Textestd">indicée sur le n° de
        remplissage</span><br>
        <span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Aucune de ces variables
        ne peut être modifiée par formule, et leur valeur par défaut est
        nulle.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">De nouvelles macros sont
        également disponibles. Leur fonctionnement est comparable aux macros
        que connaissons aujourd</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">hui à
        savoir : </span><span class="f_Variables">#1#</span><span
        class="f_Textestd">, </span><span class="f_Variables">#2#</span><span
        class="f_Textestd">, …, </span><span class="f_Variables">#6#</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ces nouvelles macros
        </span><span class="f_Variables">#Fint#</span><span
        class="f_Textestd">et</span><span
        class="f_Variables">#Fext#</span><span class="f_Textestd">utilisées
        dans les descriptions des composants consommés dans le paramétrage
        seront remplacées par la description des finitions
        correspondante.</span></p>
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
                7.2.49</span></p>
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

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Export
        tabellen</span><span class="f_TitreReleaseNote"></span><span
        class="f_TitreReleaseNote">:</span><span
        class="f_Textestd"></span><span class="f_Textestd">Bij het verwijderen
        van een order van een klant, informatie welke is geplaatst in export
        tabellen kan nu worden verwijderd/opgeschoond voor deze order, even als
        de gegenereerde tekeningen. Hiervoor zijn de volgende mogelijkheden in
        de WinPro.ini opgenomen</span></p>

        <p class="p_Textestd"><span class="f_Winproini">[System]</span></p>

        <p class="p_Textestd"><span class="f_Winproini">VideTablesExport      
         = 0        </span><span class="f_Textestd">WinPro verwijderd de
        geëxporteerde data
        niet                                        </span></p>

        <p class="p_Textestd">                       <span
        class="f_Winproini">= 1        </span><span class="f_Textestd">WinPro
        systematisch verwijderd de geëxporteerde data.</span><br>
                               <span class="f_Winproini">= 2      
         </span><span class="f_Textestd"></span><span class="f_Textestd">WinPro
        verwijderd de geëxporteerde data indien gevraagd</span></p>

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
                7.2.46</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">04/05/2007</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Toevoegen van
        prijslijsen:</span><span class="f_Textestd">Bij het invoeren van een
        prijslijst in WinPro kunnen gebruikers nu:</span></p>

        <p class="p_Textestd"><span class="f_Textestd">&bull;Een onderdorpel
        invoeren onder in een kader zoals dit ook kan worden gedaan bij het
        invoeren van een order door middel van een combo box .</span></p>

        <p class="p_Textestd"><span class="f_Textestd">&bull;Het kiezen van de
        wijze van plaatsing van deze onderdorpel indien de WinPro.ini regel
        voor verlengde onderdorpel is geactiveerd</span></p>

        <p class="p_Textestd"><span class="f_Textestd">&bull;Invoeren van een
        Ral kleur =&gt; Binnenzijde en buitenzijde</span></p>

        <p></p>

        <p class="p_Textestd"><span class="f_Textestd"><img alt="afb4"
        src="rn724_4.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"></span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">
        <img alt="afb4" src="rn724_4.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"></div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">
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
              <td valign="top" width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Versie
                7.2.45</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">27/04/2007</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p><span class="f_TitreReleaseNote">Kleinhouten:</span> Versimpelde
        invoer van kleuren : </p>

        <p></p>

        <p>&bull;Invoer velden voor « Binnen kleur » en « Buiten kleur » kleur
        van kruishouten/roeden gewisseld, de buiten kleur is nu de eerste.</p>

        <p>&bull;De scroll lijst « Buiten kleur » geeft alle toegestane kleuren
        OF alle kleuren welke niet verboden zijn.</p>

        <p>&bull;Het « Binnen kleuren » veld is nu grijs indien het verboden is
        bi-color te gebruiken voor dit type kruishout/roede en wordt
        automatisch door WinPro aangevuld door de code van de « Binnen kleur
        ».</p>

        <p>&bull;De « Binnen kleur » scroll lijst geeft nu weer:</p>

        <p style="margin-left:2em;">oAlle toegestane mono kleuren OF alle mono
        kleuren welke niet zijn verboden, in geval van geen bi-color aan de
        buitenzijde.</p>

        <p style="margin-left:2em;">oAlleen de binnen kleur zoals ingesteld in
        de bi-color invoer als zijde de « Buiten kleur » (=&gt;Buiten kleur
        invoer is bi-color)</p>

        <p></p>

        <p></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 18px;">
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 18px;">
        </div>

        <p style="text-align: center;"><span class="f_Textestd"> </span></p>

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
                7.2.44</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">09/03/2007</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span
        style="font-weight: bold; text-decoration: underline;"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Bijprofielen
        standaard aftrekken:</span><span class="f_Textestd">Het is nu mogelijk
        om voor een bijprofiel reeds voor- in te stellen aan welke zijde deze
        geplaatst wordt als ook of deze bijprofielen dienen te worden
        afgetrokken van de ingegeven </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Kopie van een
        Klantorder/Offerte:</span><span class="f_Textestd"></span><span
        class="f_Textestd">Bij het dupliceren van een offerte zal de software
        vragen of de nieuwe status een order dan wel een offerte is en of er
        automatisch moet worden genummerd (gebaseerd op de
        voorinstellingen)</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Tabblad
        samenvatting:</span><span class="f_Textestd"></span><br>
        <span class="f_Textestd">Une nouvelle colonne est insérée entre
        « Cha. » et « Total ». Ce nouveau champ contient la valeur de la pose
        répartie sur l</span><span class="f_Textestd">&rsquo;</span><span
        class="f_Textestd">ensemble des repères et/ou associée au repère
        concerné.</span><br>
        <span class="f_Textestd">Dans l</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">encadré situé
        au centre inférieur s</span><span
        class="f_Textestd">&rsquo;</span><span class="f_Textestd">y trouvait la
        ligne « Pose », cette ligne est renommée en pose
        non-répartie.</span><br>
        <span class="f_Textestd">Dans les totaux, nous avons maintenant une
        ligne « Pose répartie ». Ce montant correspond au total de toutes les
        poses réparties et/ou assignées à des repères en particulier.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Lokatie van het
        raam/merk:</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Een nieuw tekst veld is
        beschikbaar in het tab-blad « raam » van de order, en geeft u de
        mogelijkheid informatie met betrekking tot het merk(raam) welke wordt
        ingevoerd verder uit te specificeren. Dit zal systematisch worden
        gebruikt als label voor het merk(raam) an is beschikbaar in alle
        tab-bladen van de order, eea zoals hieronder afgebeeld</span></p>

        <p></p>

        <p class="p_Textestd"><span class="f_Textestd"><img alt="afb1"
        src="rn724_1.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"
        width="708" height="462">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Assistentie bij
        de ingave van de montage:</span><span class="f_Textestd"></span><br>
        </p>

        <p class="p_Textestd"><span class="f_Textestd">Het « Raam » veld in de
        Plaatsing tab van een order is niet langer vrij invulbaar. Deze is
        omgebouwd naar een combo lijst waarin de merk(raam)en zichtbaar zijn
        inclusief de locatie hiervan. Dit om de plaatsing sneller te kunnen
        invoeren en minder kans op fouten te krijgen</span></p>

        <p></p>

        <p><img alt="afb2" src="rn724_2.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"
        width="747" height="311"></p>

        <p></p>

        <p>Beneden in dit scherm is de oppervlakte en de omtrek van de kozijnen
        (totaal van alle kozijnen) zichtbaar, evenals de locatie, oppervlakte
        en omtrek van het op dat moment gekozen kozijn in de geselecteerde
        lijn. </p>

        <p><img alt="afb3" src="rn724_3.jpg"
        style="display: block; text-align: center; margin-left: auto; margin-right: auto"
        width="726" height="123"></p>

        <p></p>

        <p></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Automatishe
        hoeveelheden bij de montage:</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Bij het opzetten van de
        plaatsing onderdelen met de hiervoor geldende regels, kunt u de methode
        van berekenen (oppervlakte/omtrek) reeds definiëren zoals deze dan door
        WinPro zal worden toegepast in de offerte/order.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">U kunt het item voor
        plaatsing invoeren als vierkante meters met het aanvinken van de
        checkbox of als omtrek meters zoals benodigd met de omtrek check-box
        door bijvoorbeeld in te voeren 2x hoogte, 1x lengte. .</span></p>

        <p class="p_Textestd"><span class="f_Textestd">In de fase van invoer
        van de order zal de « Hoeveelheid » kolom automatisch worden aangevulde
        zolang de locatie is gespecificeerd en de automatische rekenmethode is
        ingesteld in het plaatsing item.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">De gecalculeerde
        hoeveelheid kan worden aangepast door de gebruiker</span></p>

        <p class="p_Textestd"><span class="f_Textestd">  </span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span
        class="f_TitreReleaseNote">Verkoper:</span><span class="f_Textestd">
        Toevoegen van het veld</span><span class="f_Textestd">« tel.n° » in de
        fiche van de verkopers.</span></p>

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
                7.2.43</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">01/03/2007</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Module Import
        Cover (COV):</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Deze module heeft de
        mogelijkheid om Cover (3D Vliesgevel/Serre pakket welke in combinatie
        met WinPro is te gebruiken) orders in WinPro in te lezen met gebruik
        van de door Cover gecreëerde XML files.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Een nieuwe knop
        &ldquo;Cover import&rdquo; welke kan worden gevonden in de
        &ldquo;Opschrift&rdquo; Tab van de order is bij deze module
        beschikbaar.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"></span></p>

        <p class="p_Textestd"><span class="f_Textestd">Een Cover import
        genereert onder voorwaarden merk(raam)en(ramen) voor WinPro.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">- Het Cover merk(raam)
        code moet corresponderen met een merk(raam)(raam) code welke is
        opgeslagen in een bestaande WinPro merk(raam)(raam)
        bibliotheek.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">- De vorm van het
        merk(raam) moet corresponderen met een vorm welke is opgeslagen in de
        WinPro bibliotheek. Er is geen maat tolerantie toegestaan</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Als aan deze voorwaarden
        is voldaan zal WinPro dit merk(raam) toevoegen aan de order gebruik
        makend van de afmetingen, kleuren en locatie naam zoals deze worden
        aangeleverd door de xml file van Cover</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Het geïmporteerde
        bestand kan later in WinPro worden aangepast.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Deze functie heeft niet
        de mogelijkheid meerder Cover order imports uit te voeren binnen 1
        enkele WinPro order .</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Bij het her-importeren
        van een Cover order welke reeds eerder is geïmporteerd in WinPro de
        merk(raam)en welke reeds zijn geïmporteerd in WinPro worden niet
        opnieuw geïmporteerd en worden uitgesloten van het import
        proces.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"></span></p>

        <p class="p_Textestd"><span class="f_Textestd">Een Cover import proces
        importeert tevens accessoires, artikelen en profielen en toont deze
        componenten in een nieuw tab-blad "Cover Componenten " in de
        WinPro&rsquo;s order.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">De bewerkingen,
        verbonden aan het profiel, worden eveneens geïmporteerd en weergegeven
        in hetzelfde tab-blad. Deze kunnen worden verwerkt door de machines
        indien gewenst met een aanpassing van de driver.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">De weergave van deze tab
        kan niet worden aangepast.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Het einde van een
        profiel geïmporteerd vanuit Cover mag 2x2 zaaghoeken bevatten. 2 hoeken
        voor elke eind-zijde, dit evenzo als dit in WinPro standaard gebeurd.
        Extra hoeken zullen worden omgezet in bewerkingen gedurende het import
        proces.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cover componenten worden
        verwerkt en bijgehouden in de stock voorraad op exact dezelfde wijze
        als artikelen en profielen zoals deze kunnen worden toegevoegd in het
        tab-blad artikel of profiel in de WinPro order.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Cover componenten kunnen
        wel of niet worden geprint op de commerciële documenten. De set up
        hiervan gebeurd op artikel niveau waar je 2 nieuwe checkboxen vind
        respectievelijk " Cover klanten document", &ldquo;Cover
        prijzen".</span></p>

        <p class="p_Textestd"><span class="f_Textestd">De lijst verkoops
        prijzen wordt gedefinieerd door een nieuw veld "Cover lijst verkoop
        prijs"</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Bij her-import van een
        Cover order in WinPro is de inhoud van het tab-blad« Cover Component »
        compleet leeg en wordt opnieuw volledig gevuld.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"></span></p>

        <p class="p_Textestd"><span class="f_Textestd">Accessoire profielen van
        Cover worden op productie niveau gemanaged gelijk als accessoire
        profielen worden toegevoegd aan het profiel tab-blad in de WinPro
        order.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Bewerkingstijden van
        Cover worden opgeslagen in het hiervoor geëigende « Cover » veld in het
        Opschrift tab-blad van de WinPro order. Ze worden opgeteld tot
        bewerkingstijd reeds berekend door WinPro maar er wordt nooit een prijs
        aangehangen.</span></p>

        <p></p>

        <p class="p_Textestd"><span class="f_Textestd">Een cover.ini bestand
        moet worden geïnitialiseerd als deze module gebruikt gaat
        worden</span></p>

        <p class="p_Textestd"><span class="f_Textestd"></span></p>

        <p class="p_Textestd"><br>
        <span class="f_Textestd"> </span></p>

        <p style="text-align: center;"> </p>

        <p style="text-align: center;"> </p>

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
                7.2.42</span></p>
              </td>
              <td valign="bottom" width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">26/02/2007</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>

        <p><span class="f_TitreReleaseNote">EDIV (Enkel Glassver): </span></p>

        <p>Mogelijkheid tot het, in de naam van het bestand, toevoegen van de
        macro <span class="f_Variables">#2#</span> welke dan vervangen
        wordt.</p>

        <p>Ter info,de macro <span class="f_Variables">#1#</span> werd reeds
        vervangen door de lotcode of lotnummer in Winpro.</p>

        <p> </p>

        <p class="p_Textestd"><span
        class="f_TitreReleaseNote">Afwerkingen:</span></p>

        <p class="p_Textestd"><span class="f_Textestd">.Een niveau van
        afwerking kan worden bepaald door gebruik te maken van de nieuwe
        check-box « Finition » in [Basisgegevens] [Systemen]. Deze afwerkingen
        kunnen worden ingesteld in het menu Techniek | Raam |
        Finitions.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Wanneer de « Finition »
        box is aangevinkt, verschijnt er een nieuwe checkbox genoemd « beperkte
        keuze Finition ».</span></p>

        <p></p>

        <p class="p_Textestd"><span class="f_Textestd">Een nieuwe knop
        "Finition" is toegevoegd aan het offerte/order invoer blad, Indien hier
        de check-box « Finition » is aangevinkt, kan hier een voor de gebruiker
        vrije invoer van afwerking worden genoteerd ofwel een keuze uit een
        beperkt aantal afwerkingen afhankelijk van de status van de checkbox
        &ldquo;Beperkte keuze afwerking(Finition)&rdquo; </span></p>

        <p></p>

        <p>De variabelen FinishingInt en Finishing worden door WinPro
        geïnitialiseerd met de waarde van de categorie welke overeenkomt met de
        waarde van de afwerking(Finition) welke de gebruiker invoert. Deze
        variabelen zijn lokale variabelen voor het kader, de vleugel, de stijl,
        de bijprofielen en kunnen worden gebruikt volgens de standaard
        regels</p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Globale variabelen welke
        tevens beschikbaar zijn:</span></p>

        <p class="p_Textestd"><span class="f_Variables">_DormantFinitionInt
        _KaderafwerkingBin</span><span class="f_Textestd"></span></p>

        <p class="p_Textestd"><span class="f_Variables">_OuvrantFinitionInt [
        ]</span><span class="f_Textestd"></span><span
        class="f_Textestd">geïndexeerd aan het vleugel nummer <span
        style="color:#0000ff">_VleugelafwerkingBin [] </span></span></p>

        <p class="p_Textestd"><span
        class="f_Variables">_OuvrantMauclairFinitionInt [ ]</span><span
        class="f_Textestd"></span><span class="f_Textestd">geïndexeerd aan het
        vleugel nummer <span style="color:#0000ff">_StolpafwerkingBin []
        </span></span></p>

        <p class="p_Textestd"><span class="f_Variables">_TravFinitionInt [
        ]</span><span class="f_Textestd">geïndexeerd aan het stijl nummer <span
        style="color:#0000ff">_StijlafwerkingBin [] </span></span></p>

        <p class="p_Textestd"><span
        class="f_Variables">_RemplParcloseFinitionInt [ ]</span><span
        class="f_Textestd">geïndexeerd aan het vulling nummer <span
        style="color:#0000ff">_GlaslatafwerkingBui [] </span></span></p>

        <p class="p_Textestd"><span class="f_Variables">_PeriphFinitionInt [
        ]</span><span class="f_Textestd">geïndexeerd aan het bijprofiel nummer
        <span style="color:#0000ff">_BijprofielafwerkingBin []
        </span></span></p>

        <p class="p_Textestd"><span class="f_Variables">_ParcloseFinitionInt [
        ]</span><span class="f_Textestd">geïndexeerd aan het vulling nummer
        <span style="color:#0000ff">_GlaslatafwerkingBin []</span></span></p>

        <p class="p_Textestd"><span class="f_Variables">_DormantFinition
        _KaderafwerkingBui</span></p>

        <p class="p_Textestd"><span class="f_Variables">_OuvrantFinition [
        ]</span><span class="f_Textestd"></span><span
        class="f_Textestd">geïndexeerd aan het vleugel nummer <span
        style="color:#0000ff">_VleugelafwerkingBui [] </span></span></p>

        <p class="p_Textestd"><span
        class="f_Variables">_OuvrantMauclairFinition [ ]</span><span
        class="f_Textestd"></span><span class="f_Textestd">geïndexeerd aan het
        vleugel nummer <span style="color:#0000ff">_StolpafwerkingBui []
        </span></span></p>

        <p class="p_Textestd"><span class="f_Variables">_TravFinition [
        ]</span><span class="f_Textestd">geïndexeerd aan het stijl nummer <span
        style="color:#0000ff">_StijlafwerkingBui [] </span></span></p>

        <p class="p_Textestd"><span class="f_Variables">_PeriphFinition [
        ]</span><span class="f_Textestd">geïndexeerd aan het bijprofiel nummer
        <span style="color:#0000ff">_BijprofielafwerkingBui []
        </span></span></p>

        <p class="p_Textestd"><span class="f_Variables">_RemplParcloseFinition
        [ ]</span><span class="f_Textestd">geïndexeerd aan het vulling
        nummer</span><span class="f_Textestd"> <span
        style="color:#0000ff">_GlaslatafwerkingBui[]</span></span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Geen van deze variabelen
        kan worden aangepast door een formule en de basiswaarde is
        nul</span></p>

        <p class="p_Textestd"><span class="f_Textestd"> </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Er zijn tevens nieuwe
        macro's beschikbaar welke op dezelfde wijze te gebruiken zijn als de
        reeds bestaande macro's #1#, #2# ,#6# enz,</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Deze macro's #Fint# en
        #Fext# worden weergegeven in de omschrijving van de gebruikte
        artikelen, het gebruikte artikel wordt bepaald door de set-up) en
        worden vervangen door de omschrijving van de gekozen
        afwerking(Finition)</span></p>

        <p class="p_Textestd"><span class="f_Textestd"></span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
