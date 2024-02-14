<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Orders","Commandes"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?cltcommandes.php"; }
else { parent.quicksync('a7.8.11'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Commandes</title>
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
        href="introduction.php">Top</a>  <a href="cltca.php">Previous</a>  <a
        href="cltfiltre.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This tab allows visualizing into a same dialog the whole orders and quotations for this customer, 
	  whatever their statuses are.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0671eng.jpg"
        width="868" height="122" border="0" alt="clip0671eng"></p>

        <p> </p>

        <p>This lists the orders and quotations with, into columns, the number, status, creation date, delivery 
		date required and customer reference.</p>

        <p> </p>

        <p>Each column may be clicked, in order to sort the list.</p>

        <p> </p>

        <p>It is also possible to select an order or quotation and open it straight within this dialog, using the 
		<img src="img/clip0673eng.jpg" width="130" height="23" border="0" alt="clip0673eng"> button, or with double clicking 
		onto the order or quote line.</p>
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
      <td align="left"><p>Cet onglet permet de visualiser dans une même fenêtre
        toutes les commandes et tous les devis du client, quelque soit leur
        état.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0671.zoom81.gif"
        width="530" height="186" border="0" alt="clip0671"></p>

        <p> </p>

        <p>Cette liste affiche les commandes et devis avec en colonne le
        numéro, l'état, la date de saisie, la date de livraison souhaitée et la
        référence client.</p>

        <p> </p>

        <p>Chacune de ces colonnes peut être cliquée, afin de mieux trier la
        liste.</p>

        <p> </p>

        <p>Il est également possible de sélectionner une commande ou un devis
        donné et de l'ouvrir directement depuis ce dialogue, soit avec le
        bouton <img src="img/clip0673.zoom87.gif" width="95" height="20" border="0"
        alt="clip0673"> en bas de la fenêtre, soit en double cliquant sur la
        ligne de la commande à ouvrir.</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
