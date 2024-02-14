<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["End of production sort order","Ordre de tri de fin de cha&#238;ne"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?ordretrifinchaîne.php"; }
else { parent.quicksync('a7.27'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Ordre de tri de fin de chaîne</title>
  <meta name="keywords" content="Sort order,Production sorting">
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
        href="introduction.php">Top</a>  <a href="normeverre.php">Previous</a> 
        <a href="perimetre.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This diialog is designed to define a set of sorting rules at the end of the production lines, 
	  helping the user to group with flexibility windows according requirements.</p>

        <p>The dialog is also suitable to set the maximum number of glass units onto a glass rack, in order to send sorted information to the glass supplier. The dialog is available into menu <span
        style="font-weight: bold;">Technic | Production | End of production sort order.</span></p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0564eng.jpg" width="269"
        height="326" border="0" alt="clip0564eng"></p>

        <p>Into above example, windows at the end of production line are sorted by 'Delivery area', 'Logistic code', 'Load pier', 
		'Customer' code and 'Order' code. Moreover, each glass rack will receive '5' glass units maximum before the rack number 
		is incremented.</p>

        <p> </p>

        <p>Refer to production lines manual, <span style="font-weight: bold;">GLP.chm </span>, for more details about 
		production lines and sorting of production features within WinPro.</p>
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
      <td align="left"><p>Ce dialogue vous permet vde définir des règles de
        tris des châssis en fin de lignes de production, vous aidant ainsi à
        regrouper vos fenêtre avec souplesse et flexibilité, selon vos
        besoins.</p>

        <p>Ce dialogue permet également de définir le nombre de vitrages
        maximum par palette, dans le but d'envoyer des informations triées aux
        fournisseurs de vitrages. Ce dialogue est accessible via le menu <span
        style="font-weight: bold;">Technique | Production | Ordre de tri de fin
        de chaîne.</span></p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0564.gif" width="267"
        height="354" border="0" alt="clip0564"></p>

        <p>Dans l'exemple ci-dessus, les châssis en fin de chaîne sont triés
        par 'Code logistique', 'Quai de chargement', 'Client' et 'Commande. De
        plus, chaque palette de verre contiendra '5' vitrages au maximum avant
        de changer de numéro de palette.</p>

        <p> </p>

        <p>Le manuel sur les lignes de production <span
        style="font-weight: bold;">GLP.chm </span>est à votre disposition pour
        plus de détails sur la mise en place de vos lignes de production et des
        critères de tris utilisables dans WinPro.</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
