<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Supply &amp; delivery","Commandes &amp; livraisons"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?foucommlivr.php"; }
else { parent.quicksync('a7.18.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Commandes &amp; livraisons</title>
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
        href="introduction.php">Top</a>� <a
        href="foudescription.php">Previous</a>� <a
        href="fouarrondi.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;">�</span></p>

        <p>This page allows defining additional information concerning the supplier, only when the stock management 
		modules are enabled. Some of below fields are only available with a full option stock management module.</p>

        <p>�</p>

        <p>Refer to stock management manual for more details about those options.</p>

        <p>�</p>

        <p style="text-align: center;"><img src="img/clip0590eng.jpg"
        width="427" height="492" border="0" alt="clip0590eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Delivery day</span>:
                Choose '???' when no fixed delivery day is relevant for this supplier, therwise you may choose up to 
				3 deliveries weekly.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Delivery delay</span>:
                Number of days or weeks between supplier order and material delivery. This is used only when creating a 
				new article record; when the supplier is selected, this delay is copied by default into the article delivery 
				delay field, remaining modifiable from article record.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Delivery cost</span>: Cost of delivery.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Free delivery</span>:
                Amount of the supplier order above which the delivery is free of charge.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Date format</span>:
                Format of the printed delivery date: <span
                style="font-weight: bold;">days </span>or <span
                style="font-weight: bold;">weeks</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Print prices on order</span>: Check this to print prices of each line 
			  onto the supplier order.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Print total price</span>: Check this box to print the footer total 
			  amount onto supplier orders.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Separate column for package</span>: Check this box to split quantites 
			  onto supplier orders into two columns, packaging and number of package units ordered. When unchecked, a single 
			  value is printed for the total quantity amount ordered (packages * quantity).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;">�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="446"
                style="width: 446px; border: solid 1px #000000;"><p><span
                style="font-weight: bold; text-decoration: underline;">Attention:</span></p>

                <p>This box ONLY concerns the paper document layout and NOT the supplier order creation interface. 
				This box is different from the similar box into menu <span
                style="font-weight: bold;">Tools | Preferences</span>,
                <a href="utilprefcomfou.php">Supplier orders</a> tab.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        style="font-weight: bold;">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Round up price  for each line</span>: When checked, the total price by line 
			  is rounded to the nearest integer value. The order total amount will then be the sum of the rounded total 
			  amounts by line.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Do not generate supplier order from customer order</span>: When the box 
			  is checked, no supplier order is allowed anymore from the Actions tab of a customer order for this supplier. </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Customer ID</span>:
                Your own customer ID into the supplier files, to be printed onto supplier order headers.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Payment terms</span>: Set here the payment terms agreed by the supplier
			  (n days invoice date, n days end of month, IOU for n days).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Price/1 kg
                aluminium</span>: Aluminium buying price per kilo from this supplier. See section about <a
                href="artfournisseur.php">Profiles bought per kilo onto article record</a>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Glass supplier identifier</span>: Numeric value stored into variable 
			  <span class="f_Variables">SupplierId</span>, used into computation of <a
                href="croisillons.php">glazing bars</a>, as well as for computation of discounts and technical limits of a <a
                href="vitformula.php">glass unit</a>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Supplier delivery dates</span>: List here the dates of specific deliveries, 
			  if required.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>
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
      <td align="left"><p><span style="font-size: 5pt;">�</span></p>

        <p>Cette page permet de d�finir des informations compl�mentaires
        concernant le fournisseur, uniquement si vous utilisez les modules
        relatifs � la gestion de stock. Certaines de ces informations ne sont
        utilis�es qu'avec le module de gestion de stock complet.</p>

        <p>�</p>

        <p>Reportez vous au manuel de gestion de stock pour plus de d�tails sur
        ces options. </p>

        <p>�</p>

        <p style="text-align: center;"><img src="img/clip0590.zoom84.gif"
        width="346" height="400" border="0" alt="clip0590"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Jour de livraison</span>:
                Choisissez '???' s'il n'y a pas de jour de livraison fixe pour
                ce fournisseur. Autrement, vous pouvez d�finir un, deux ou
                trois livraisons hebdomadaires.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">D�lai de livraison</span>:
                Nombre de jours ou de semaines entre la commande fournisseur et
                la livraison des mati�res. Cette information n'est utilis�e
                qu'� la cr�ation d'un nouvel article; lorsque vous s�lectionnez
                le fournisseur, ce d�lai est copi� dans le d�lai de livraison
                de l'article par d�faut, et reste modifiable dans la fiche
                article.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Frais de livraison</span>:
                Montant factur� pour la livraison.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Livraison franco</span>:
                Montant de la commande fournisseur � partir duquel la livraison
                est gratuite.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Format de date</span>:
                Format de la date de livraison imprim�e: <span
                style="font-weight: bold;">jours </span>ou <span
                style="font-weight: bold;">semaines</span>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Valorisation bon de
                commande</span>: Cochez cette case pour imprimer les prix de
                chaque ligne sur le bon de commande fournisseur.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Total sur bon de
                commande</span>: Cochez cette case pour imprimer le total bas
                de page de sur les commandes fournisseur.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Colonne de conditionnement
                s�par�e</span>: Lorsque cette case est coch�e, les quantit�s
                command�es seront exprim�es avec 2 valeurs sur le document
                papier, le conditionnement et le nombre d'unit�s de
                conditionnement command�. Lorsque d�coch�e, un seul nombre sera
                imprim�, repr�sentant la quantit� command�e totale
                (conditionnement * quantit�).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;">�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="446"
                style="width: 446px; border: solid 1px #000000;"><p><span
                style="font-weight: bold; text-decoration: underline;">Attention:</span></p>

                <p>Cette case � cocher ne concerne QUE la mise en page du
                document papier et non l'interface de cr�ation des commandes
                fournisseur. Ne confondez pas cette case � cocher avec la case
                de m�me nom dans le menu <span
                style="font-weight: bold;">Utilitaires | Pr�f�rences</span>,
                onglet <a href="utilprefcomfou.php">Commandes
                fournisseur</a>.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-align: center;"><span
        style="font-weight: bold;">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Arrondir total par
                ligne</span>: Lorsque la case est coch�e, le prix total par
                ligne sera arrondi � l'entier le plus proche. Le montant total
                de la commande sera la somme des totaux par ligne arrondis.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Ne pas g�n�rer de commande �
                partir de la commande client</span>: Il est possible de g�n�rer
                les commandes de mati�res aux fournisseurs depuis l'onglet
                Actions d'une commande client. Lorsque cette case est coch�e,
                aucune commande ne sera g�n�r� depuis l'onglet Actions pour ce
                fournisseur. </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Num�ro de client</span>:
                Votre identifiant chez ce fournisseur. Ceci sera imprim� dans
                les ent�tes de commandes pour ce fournisseur.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Conditions de
                paiement</span>: D�finit les conditions de paiement qui vous
                sont accord�es par ce fournisseur (n jours date de facture, n
                jours fin de mois, traite � n jours).</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Prix/1 kg
                d'aluminium</span>: Prix d'achat de l'aluminium au kilo chez ce
                fournisseur. Voir la section <a
                href="artfournisseur.php">Profils achet�s au kilo dans la fiche
                article</a>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Identificateur
                vitrage</span>: Valeur num�rique qui viendra alimenter la
                variable <span class="f_Variables">IdFournisseur</span>,
                utilis�e dans les calculs de <a
                href="croisillons.php">croisillons</a>, ainsi que dans les
                calculs de remises et limites techniques du <a
                href="vitformula.php">vitrage</a>.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Planning de
                livraison</span>: Certains fournisseurs d�finissent dans le
                d�tail les jours de livraison possibles. Listez ces dates dans
                cette colonne.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
