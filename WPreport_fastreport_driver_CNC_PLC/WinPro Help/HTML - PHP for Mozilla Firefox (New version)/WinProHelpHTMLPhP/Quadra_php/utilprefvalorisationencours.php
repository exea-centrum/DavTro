<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Value of current orders","Valorisation de l'encours des commandes"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utilprefvalorisationencours.php"; }
else { parent.quicksync('a9.1.12'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Valorisation de l'encours des commandes</title>
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
        href="introduction.php">Top</a>  <a
        href="utilprefoptimisation.php">Previous</a>  <a
        href="utilprefvariablessite.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This table is used to define a financial value for each process step of a customer order, for 
	  valuation of running orders as detailled into <a href="rn50xx.php">release note version 5.0.07</a>.</p>

        <p>Attention, this feature is related to production management module.</p>

        <p>From a base of a full WinPro order full handling represents 100%, from confirmation to delivery printing, this 
		tab defines to which value corresponds each step, into percentage.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0737eng.jpg" width="398"
        height="384" border="0" alt="clip0737eng"></p>

        <p style="text-align: center;"><span class="f_ImageCaption"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Print confirmation</span>: Percentage of the total financial value 
			  represented by step <span style="font-weight: bold;">Orders | Confirmations handling | Print confirmations</span>.</td>
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
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Confirmation checked</span>: Percentage of the total financial value 
			  represented by step <span style="font-weight: bold;">Orders | Confirmations handling | Validate confirmations</span>.</td>
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
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Financial autorization</span>: Percentage of the total financial value 
			  represented by step <span style="font-weight: bold;">Orders | Confirmations handling | Financial approval</span>.</td>
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
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Confirmation sent</span>: Percentage of the total financial value 
			  represented by step <span style="font-weight: bold;">Orders | Confirmations handling | Send confirmations</span>.</td>
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
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Confirmation approved</span>: Percentage of the total financial value 
			  represented by step <span style="font-weight: bold;">Orders | Confirmations handling | Approve confirmations</span>.</td>
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
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Glass order</span>: Percentage of the total financial value 
			  represented by step <span style="font-weight: bold;">Orders | Production handling | Glass orders</span>.</td>
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
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Optimized</span>: Percentage of the total financial value 
			  represented by step <span style="font-weight: bold;">Orders | Production handling | Job preparation</span>.</td>
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
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Optimization</span>: Percentage of the total financial value 
			  represented by step <span style="font-weight: bold;">Orders | Production handling | Optimization</span>.</td>
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
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Launch production</span>: Percentage of the total financial value 
			  represented by step <span style="font-weight: bold;">Orders | Production handling | Launch production</span>.</td>
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
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Delivery preparation</span>: Percentage of the total financial value 
			  represented by step <span style="font-weight: bold;">Orders | Delivery handling | Delivery preparation</span>.</td>
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
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Delivery split</span>: Percentage of the total financial value 
			  represented by step <span style="font-weight: bold;">Orders | Delivery handling | Delivery documents</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="446"
                style="width: 446px; border: solid 1px #000000;"><p><span
                style="font-weight: bold; text-decoration: underline;">Note:</span></p>

                <p>- The <span class="f_Winproini">String</span> key from <span class="f_Winproini">[GesProd]</span> 
				section of INI file (or from settings table) is considered here. This is the reason why for some steps disabled 
				by the key, you may set dummy values "---".</p>

                <p>- Definitive values are stored into INI file (or settings table, <span
                class="f_Winproini">[Valorisation états]</span> section.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Then, through menu <span style="font-weight: bold;">Orders | Running production | Compute value of running 
		orders</span>, WinPro will compute for each order and according statuses, their financial value along with a sub-total 
		by status.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0738eng.jpg" width="722"
        height="498" border="0" alt="clip0738eng"><span
        class="f_ImageCaption"></span></p>

        <p style="text-align: center;"> </p>
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
      <td align="left"><p>Cet onglet permet de définir une valeur financière de
        chaque étape utilisée dans le processus d'une commande, de manière à
        valoriser l'encours comme définit dans la <a href="rn50xx.php">note de
        version 5.0.07</a>.</p>

        <p>Attention, cette fonctionnalité est liée au module gestion de
        production.</p>

        <p>Partant du principe que le traitement d'une commande dans WInPro,
        c'est à dire de l'impression des confirmations à la note d'envoi,
        correspond à 100%, cet onglet permet de définir ce que représente en
        pourcentage chaque étape du processus.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/doc.zoom78.jpg" width="453"
        height="394" border="0" alt="Doc"></p>

        <p style="text-align: center;"><span class="f_ImageCaption"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Impression
                confirmation</span>: Pourcentage de la valeur financière totale
                représenté par l'étape <span
                style="font-weight: bold;">Commandes | Gestion des
                confirmations | Impressions des confirmations</span>.</td>
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
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Vérification
                confirmation</span>: Pourcentage de la valeur financière totale
                représenté par l'étape <span
                style="font-weight: bold;">Commandes | Gestion des
                confirmations | Validation des confirmations</span>.</td>
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
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Avalisation
                financière</span>: Pourcentage de la valeur financière totale
                représenté par l'étape <span
                style="font-weight: bold;">Commandes | Gestion des
                confirmations | Avalisation financière</span>.</td>
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
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Envoi confirmation</span>:
                Pourcentage de la valeur financière totale représenté par
                l'étape <span style="font-weight: bold;">Commandes | Gestion
                des confirmations | Envoi des confirmations</span>.</td>
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
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Approbation
                confirmation</span>: Pourcentage de la valeur financière totale
                représenté par l'étape <span
                style="font-weight: bold;">Commandes | Gestion des
                confirmations | Approbation des confirmations</span>.</td>
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
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Commandes des
                vitrages</span>: Pourcentage de la valeur financière totale
                représenté par l'étape <span
                style="font-weight: bold;">Commandes | Gestion de production |
                Commande des vitrages</span>.</td>
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
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Préparation de
                l'optimisation</span>: Pourcentage de la valeur financière
                totale représenté par l'étape <span
                style="font-weight: bold;">Commandes | Gestion de production |
                Préparer un lot</span>.</td>
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
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Optimisation</span>:
                Pourcentage de la valeur financière totale représenté par
                l'étape <span style="font-weight: bold;">Commandes | Gestion de
                production | Optimisation</span>.</td>
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
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Mise en production</span>:
                Pourcentage de la valeur financière totale représenté par
                l'étape <span style="font-weight: bold;">Commandes | Gestion de
                production | Mise en production</span>.</td>
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
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Préparation de
                livraison</span>: Pourcentage de la valeur financière totale
                représenté par l'étape <span
                style="font-weight: bold;">Commandes | Gestion des livraisons |
                Bordereau de préparation de livraison</span>.</td>
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
              <td width="19"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Note d'envoi</span>:
                Pourcentage de la valeur financière totale représenté par
                l'étape <span style="font-weight: bold;">Commandes | Gestion
                des livraisons | Bordereaux de livraison</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="446"
                style="width: 446px; border: solid 1px #000000;"><p><span
                style="font-weight: bold; text-decoration: underline;">Remarque:</span></p>

                <p>- La clef <span class="f_Winproini">String </span>de la
                section<span class="f_Winproini">[GesProd]</span> du fichier
                INI (ou de la table settings) est prise en compte. C'est
                pourquoi sur certaines étapes désactivées par cette clef, vous
                pourrez renseigner des valeurs échappatoires "---", comme dans
                la capture.</p>

                <p>- Les valeurs définies sont sauvegardées dans le fichier INI
                (ou la table settings, section <span
                class="f_Winproini">[Valorisation états]</span>.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Ensuite, via le menu <span style="font-weight: bold;">Commandes |
        Liste d'encours | Valorisation de l'encours</span>, WinPro calculera
        pour chaque commande et en fonction de leur état, leur valeur
        financière ainsi qu'un sous-total par état.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/doc2.zoom76.jpg" width="577"
        height="396" border="0" alt="Doc2"><span
        class="f_ImageCaption"></span></p>

        <p style="text-align: center;"> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
