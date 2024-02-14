<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<!DOCTYPE php PUBLIC "-//W3C//DTD php 4.01 Transitional//EN">  
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["8.1.2.x","8.1.2.x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?8_1_2_x.php"; }
else { parent.quicksync('a11.2.3'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>8.1.1.x</title>
  <meta name="keywords"
  content="">
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
        href="introduction.php">Top</a>  <a href="8_2_0_x.php">Previous</a>  <a
        href="8_1_1_x.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p class="p_Comment"><span class="f_Comment"
        style="font-size: 8pt;">* Not compatible with version 7.2, unless mentioned</span></p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 12pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.2.073</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">22/07/2013</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Modified tables</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Created tables</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">ResCli</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">None</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 12pt;"> </span></p>

        <p><span style="font-size: 12pt; font-weight: bold; text-decoration: underline;">New button into reservations screen:</span> A new button is available into 
		the <span style="font-style: italic;">Reservations</span> tab of the customer order, suitable to straight open the selected article record from the list of reservations.</p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 12pt;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0970eng.jpg"
        width="602" height="328" border="0" alt="clip0970eng"></p>

        <p><span style="font-size: 12pt; font-weight: bold; text-decoration: underline;">New button into supplier order proposition screen:</span> A new <img src="img/clip0971eng.jpg" width="124" height="20" border="0" alt="clip0971eng"> button is available into 
		the <span style="font-style: italic;">Supplier order proposition</span> dialog, suitable to list the current reservations for the selected article.</p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 12pt;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0972eng.jpg"
        width="708" height="368" border="0" alt="clip0972eng"></p>
		
        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 12pt;"> </span></p>

        <p><span style="font-size: 12pt; font-weight: bold; text-decoration: underline;">New "Need" column for article reservations:</span> A new column is created containing the value of the real needs for a given article (cumulated lengths from <span style="font-style: italic;">Components</span> tab), instead of just the reserved quantites, into screens related to reservations.</p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 12pt;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0973eng.jpg"
        width="403" height="178" border="0" alt="clip0973eng"></p>

        <p>Seen from the Article record, <span style="font-style: italic;">Stock</span> tab, clicking onto the 
		<img src="img/clip0974eng.jpg" width="74" height="20" border="0" alt="clip0974eng"> button for customer reservations. Or else when clicking the previously described 
		<img src="img/clip0971eng.jpg" width="124" height="20" border="0" alt="clip0971eng"> button from <span style="font-style: italic;">Supplier order proposition</span> dialog.</p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 12pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
              style="width: 605px; height: 45px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; color: #000000; text-decoration: underline;">Attention!</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">- This value is only displayed with adapted licences containing the reservation computation at least.</span></p>
                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">- This value is only displayed when key from settings table <span style="font-weight: bold;">[Inventory].</span><span class="f_Winproini">OptimRes</span>=1 ! 
				When the pre-optimization feature is not enabled, "real needs for a profile = reservation for this profile", then the value is not displayed !
				See related <a href="faq1a.php">FAQ point about Reservations/Supplier order - Optimization</a> for more details about this pre-optimization feature.</span></p>
                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">- This value is only computed for reservations done AFTER this version upgrade.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 12pt;"> </span></p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 12pt;"> </span></p>
    </tr>
  </tbody>
</table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p class="p_Comment"><span class="f_Comment"
        style="font-size: 8pt;">* Incompatible version 7.2, sauf si précisé</span></p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 12pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="617" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#d8ffff"
              style="width: 301px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">Version
                8.1.2.073</span></p>
              </td>
              <td valign="bottom" width="308" bgcolor="#d8ffff"
              style="width: 308px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma';">22/07/2013</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#e5ffff"
              style="width: 301px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables modifiées</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#e5ffff"
              style="width: 308px; background-color: #e5ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-size: 8pt; font-family: 'Tahoma';">Tables créées</span></p>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td valign="top" width="301" bgcolor="#f2ffff"
              style="width: 301px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">ResCli</span></p>
              </td>
              <td valign="top" width="308" bgcolor="#f2ffff"
              style="width: 308px; background-color: #f2ffff;"><p
                style="margin: 2px 0px 0px 0px;"><span
                style="font-family: 'Tahoma';">None</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 12pt;"> </span></p>

        <p><span style="font-size: 12pt; font-weight: bold; text-decoration: underline;">Nouveau bouton dans l'écran des réservations:</span> Ce nouveau bouton est disponible dans l'onglet 
		<span style="font-style: italic;">Réservations</span> de la commande, et permet d'ouvrir directement la fiche de l'article sélectionné dans la grille de réservations.</p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 12pt;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0970fra.jpg"
        width="631" height="345" border="0" alt="clip0970fra"></p>

        <p><span style="font-size: 12pt; font-weight: bold; text-decoration: underline;">Nouveau bouton dans les propositions de commandes fournisseur:</span> Un nouveau bouton <img src="img/clip0971fra.jpg" width="126" height="21" border="0" alt="clip0971fra"> est disponible dans le dialogue de 
		<span style="font-style: italic;">Proposition de commande fournisseur</span>, utilisable pour lister les réservations en cours pour l'article sélectionné.</p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 12pt;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0972fra.jpg"
        width="812" height="391" border="0" alt="clip0972fra"></p>
		
        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 12pt;"> </span></p>

        <p><span style="font-size: 12pt; font-weight: bold; text-decoration: underline;">Nouvelle colonne "Besoin" réel pour les réservations d'articles:</span> Cette colonne permet de visualiser les besoins réels pour un article (profil) donné (cumul des longueurs de l'onglet <span style="font-style: italic;">Composants</span> de la commande), en plus des quantités réservées dans les écrans relatifs aux réservations.</p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 12pt;"> </span></p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/clip0973fra.jpg"
        width="400" height="177" border="0" alt="clip0973fra"></p>

        <p>Vue de la fiche Article, onglet <span style="font-style: italic;">Stock</span>, lorsque l'on clique sur le bouton 
		<img src="img/clip0974fra.jpg" width="74" height="20" border="0" alt="clip0974fra"> des réservations client. Ou encore en cliquant le bouton 
		<img src="img/clip0971fra.jpg" width="126" height="21" border="0" alt="clip0971fra"> précedemment décrit, depuis le dialogue de <span style="font-style: italic;">Proposition de commande fournisseur</span>.</p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 12pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
              style="width: 605px; height: 45px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; color: #000000; text-decoration: underline;">Attention!</span></p>

                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">- Cette valeur n'est affichée qu'avec une licence adaptée, activant au minimum le calcul des réservations.</span></p>
                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">- Cette valeur n'est affichée que si la clef de la table settings <span style="font-weight: bold;">[Inventory].</span><span class="f_Winproini">OptimRes</span>=1 ! 
				lorsque le mode pré-optimisation n'est pas activé, "besoin réel cumulé d'un profil = réservation pour ce profil", la valeur de besoin n'est donc pas utile !
				Voir le point relatif dans la <a href="faq1a.php">FAQ sur les Réservations/Commandes fournisseur - Optimisation</a> pour plus de détails sur le mode pré-optimisation.</span></p>
                <p style="margin: 0px 0px 0px 13px;"><span
                style="color: #000000;">- Cette valeur n'est calculée que pour les réservations passées APRES cette mise à jour de version.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
		
        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 12pt;"> </span></p>

        <p class="p_Comment"><span class="f_Comment"
        style="font-size: 12pt;"> </span></p>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
