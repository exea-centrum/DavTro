<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["T.O.","C.A"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?cltca.php"; }
else { parent.quicksync('a7.8.10'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>C.A.</title>
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
        href="formules_specifiquess.php">Previous</a>  <a
        href="cltcommandes.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This tab allows vizualising the history of the customer's turnover, as well as running quotations. 
	  Only for vizualisation.</p>

        <p>This tab may be renamed as <span
        style="font-style: italic;">Data and stat</span> when module CRM is used.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0670eng.jpg"
        width="872" height="242" border="0" alt="clip0670eng"></p>

        <p> </p>

        <p><span style="font-weight: bold;">The upper section</span> shows the turnover of the customer during past months and years, 
		month by month and year by year.</p>

        <p> </p>

        <p><span style="font-weight: bold;">The lower section</span> lists pending quotations for this customer, 
		with for each line the quotation number, the total design quantity liste, total amount and deadline date.</p>

        <p> </p>

        <p><span style="font-weight: bold;">The footer band</span> shows the total cumulated quantity of designs from all quotations, 
		and the total amount of pending quotations.</p>
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
      <td align="left"><p>Cet onglet permet de visualiser l'historique du
        chiffre d'affaire du client, ainsi que son encours de devis. Cet onglet
        est consultatif seulement.</p>

        <p>Cet onglet peut être renommé en <span
        style="font-style: italic;">Données et stat</span>. si vous utilisez le
        module CRM.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0670.zoom72.gif"
        width="565" height="157" border="0" alt="clip0670"></p>

        <p> </p>

        <p><span style="font-weight: bold;">La partie supérieure </span>donne
        un aperçu du chiffre d'affaire effectué avec ce client les années et
        mois précédents, mois par mois et année par année.</p>

        <p> </p>

        <p><span style="font-weight: bold;">La partie inférieure </span>liste
        les devis en cours pour ce client, avec pour chaque ligne le numéro, la
        référence, la quantité de châssis totale dans le devis, le montant
        total, la date de saisie et la limite de validité.</p>

        <p> </p>

        <p><span style="font-weight: bold;">Le bandeau de pied de page
        </span>indique la quantité totale cumulée des châssis de tous les
        devis, ainsi que le montant total des devis en cours. </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
