<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Customer information for WinPro/D","Informations client pour module devis"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utilinfocli.php"; }
else { parent.quicksync('a9.25'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Informations client pour module devis</title>
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
        href="utilbasedevis.php">Previous</a>  <a
        href="utilinfoclimultiple.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This menu helps you to generate customer information for WinPro/d. This is a list of specific files to 
	  be copied onto a diskette (or other media), in order to define specific settings for WinPro.DF for the reseller customer,
	  such as the customer ID, licence file, expiration date or specific technical settings (through variables initialization).</p>

        <p> </p>

        <p>Refer to <a href="faq7.php">FAQ</a> chapter for more details about WinPro/D installation.</p>

        <p> </p>

        <p>This tool is reached through menu <span style="font-weight: bold;">Tools | Customer information for WinPro/D</span>.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0779eng.jpg"
        width="504" height="290" border="0" alt="clip0779eng"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Access code</span>: Type here the WinPro administrative password, you may ask 
			  it to Quadrature company in case of need.</td>
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
              <td><span style="font-weight: bold;">Customer</span>: Select here the code of the reseller 
			  <a href="client.php">customer</a> who will use WinPro/D. You may filter the list according either the code or the
			  name of the customer.</td>
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
              <td><span style="font-weight: bold;">Currency</span>: Select into the combo the main 
			  <a href="devises.php">currency</a> for the reseller. It corresponds here to the buying currency for the reseller 
			  to the facricator, the reseller (WinPro/D user) may define by himslef his own currencies for his final customers.</td>
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
              <td><span style="font-weight: bold;">Discount 1, 2, 3</span>:
                Set here up to 3 cascaded discounts for the reseller. Those values are defaulty retrived from the customer record.
				It corresponds to the buying discount allowed by the fabricator to the reseller, and not the discount agreed for
				the final customer  by the reseller.</td>
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
              <td><span style="font-weight: bold;">Price list</span>: Select into the combo the price coefficient applied by 
			  the fabricator to the reseller, when the reseller buys windows to the fabricator (and not the margin applied by 
			  the reseller to the final customer).</td>
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
              <td><span style="font-weight: bold;">Round up to 10cm</span>:
                When checked, WinPro will round up the window dimensions by step of 10cm, before computing the selling price. This
				box decide if the fabricator rounds up dimensions by 10cm before valuying the window for the reseller. When the
				reseller will create an order form for the fabroicator for windows, those windows will be valued according this
				flag.</td>
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
              <td><span style="font-weight: bold;">On current prices</span>: When checked, WinPro will compute the window selling
			  price to the reseller (and then the cost price for the reseller) based onto current cost prices instead of list cost
			  prices. The order form for the fabricator generated by the reseller will then be computed with current cost prices.</td>
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
              <td><span style="font-weight: bold;">Discount per window on orders</span>: When checked, WinPro will compute the
			  selling price for the reseller with discouint per window instead of global discount computation. The order form from
			  the reseller to the fabricator will be computed with those discounts per windows.</td>
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
              <td><span style="font-weight: bold;">Hidden discounts</span>:
                When checked, WinPro will compute the window selling price with hidden discount. The order form from the reseller
				to the fabricator will be computed including discounts but those discounts won't be detailled, the document is
				printed with net prices.</td>
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
              <td><span style="font-weight: bold;">Valid until</span>: Expiration date of the WinPro/D version. Above this date,
			  the reseller won't be able anu=ymore to start the program, an error message will be displayed and the program will
			  shut down.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>When information are set correctly, you may validate the file creation using button <img
        src="img/clip0780.zoom86.gif" width="84" height="24" border="0"
        alt="clip0780">. You will be prompted to save the list of files onto a diskette or a specific folder.</p>

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

                <p>- <span class="f_Winproini">ChoixPath</span> key from section <span class="f_Winproini">[Licence Path]</span> of
				the INI file (or settings table) is suitable to define the backup path for those files when generated from a
				production version of WinPro:</p>

                <p><span class="f_Winproini">ChoixPath </span><span
                style="color: #000000;">=   0   =&gt; customer o=info files are stored onto diskette</span></p>

                <p><span class="f_Winproini">ChoixPath </span><span
                style="color: #000000;">=   1   =&gt; WinPro willo display a browser dialog for the user to select a specific
				location onto the machine.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

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
      <td align="left"><p>Ce menu vous permet de générer les informations
        client pour WinPro/D. Ces informations client consistent en une série
        de fichiers à copier sur disquette (ou autre), afin de définir les
        paramètres de WinPro/D spécifique au client revendeur, comme son
        identifiant, sa licence d'utilisation avec sa date d'expiration ou ses
        particularités techniques (via des initialisations de variables).</p>

        <p> </p>

        <p>Reportez vous à la <a href="faq7.php">FAQ</a> pour plus de détails
        sur la mise en place de WinPro/D.</p>

        <p> </p>

        <p>Cet outil est accessible via <span
        style="font-weight: bold;">Utilitaires | Informations client pour
        module devis</span>.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0779.zoom84.gif"
        width="415" height="259" border="0" alt="clip0779"></p>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Code d'accès</span>: Mot de
                passe d'administration de WinPro. Demandez ce mot de passe à
                votre administrateur WinPro, ou bien à la société
              Quadrature.</td>
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
              <td><span style="font-weight: bold;">Client</span>: Sélectionnez
                ici le code du <a href="client.php">client</a> revendeur qui
                utilisera WinPro/D. Le premier combo permet de filtrer la liste
                des clients suivant le code, le combo à droite permet de
                filtrer suivant le nom du client. </td>
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
              <td><span style="font-weight: bold;">Devise</span>: Sélectionnez
                dans ce combo la <a href="devises.php">devise</a> principale du
                revendeur. Il s'agit ici de la devise d'achat du revendeur au
                fabricant, le revendeur (utilisant WinPro/D) est libre de
                définir ses propres devises pour son client final.</td>
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
              <td><span style="font-weight: bold;">Remise 1, 2, 3</span>:
                Renseignez ici jusqu'à 3 niveaux de remises en cascade pour le
                revendeur. Ces informations sont récupérées par défaut de la
                fiche client. Il s'agit ici de la remise d'achat accordée au
                revendeur par le fabricant, et non des remises accordées par le
                revendeur au client final. </td>
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
              <td><span style="font-weight: bold;">Tarif</span>: Sélectionnez
                dans ce combo le code tarif qui sera appliqué par le fabricant
                au revendeur, lorsque celui ci achètera des menuiseries au
                fabricant (et non pas la marge prise par le revendeur sur le
                client final).</td>
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
              <td><span style="font-weight: bold;">Arrondir par 10cm</span>:
                Lorsque cette case est cochée, WinPro arrondira les dimensions
                du châssis aux dimensions supérieures par paliers de 10cm,
                avant de calculer le prix de vente. Cette case décide donc si
                le fabricant arrondit les dimensions par 10cm avant de
                valoriser le châssis pour le revendeur. Lorsque le revendeur
                établira un bon de commande au fabricant pour des châssis, ceux
                ci seront valorisé en tenant compte de cet arrondi.</td>
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
              <td><span style="font-weight: bold;">Calculs en prix
                courant</span>: Lorsque cette case est cochée, WinPro calculera
                le prix de vente du châssis au revendeur (et donc le prix de
                revient du revendeur) sur base des prix courant au lieu des
                prix tarif. Le bon de commande au fabricant émis par le
                revendeur sera évalué en prix courant.</td>
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
              <td><span style="font-weight: bold;">Remise par repère sur la
                commande fabricant</span>: Lorsque cette case est cochée,
                WinPro calculera le prix de vente du châssis au revendeur avec
                des remises par repères plutôt que globalement à la commande.
                Le bon de commande au fabricant émis par le revendeur sera
                évalué avec ces remises par repères.</td>
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
              <td><span style="font-weight: bold;">Remise déduite</span>:
                Lorsque cette case est cochée, WinPro calculera le prix de
                vente du châssis au revendeur avec des remises masquées. Le bon
                de commande au fabricant émis par le revendeur sera évalué avec
                les remises mais elles ne seront pas détaillées, le document
                sera exprimé avec des prix nets.</td>
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
              <td><span style="font-weight: bold;">Date limite</span>: Date
                d'expiration de la version de WinPro/D. Au delà de cette date,
                le revendeur ne pourra plus lancer son programme, un message
                d'erreur apparaîtra et le logiciel fermera.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p>Lorsque les informations sont correctes, vous pouvez valider la
        création des fichiers d'informations client par le bouton <img
        src="img/clip0780.zoom86.gif" width="84" height="24" border="0"
        alt="clip0780">. Vous serez invités à sauvegarder cette série de
        fichiers sur disquette ou dans un dossier spécifique.</p>

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

                <p>- La clef <span class="f_Winproini">ChoixPath </span>de la
                section<span class="f_Winproini">[Licence Path]</span> du
                fichier INI (ou de la table settings) permet de définir
                l'emplacement de sauvegarde de ces fichiers lorsqu'ils sont
                générés par WinPro version production:</p>

                <p><span class="f_Winproini">ChoixPath </span><span
                style="color: #000000;">=   0   =&gt; les fichiers infos client
                sont stockés sur disquette</span></p>

                <p><span class="f_Winproini">ChoixPath </span><span
                style="color: #000000;">=   1   =&gt; WinPro propose un
                dialogue de navigation pour stocker les fichiers infos client
                dans un dossier de la machine.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
