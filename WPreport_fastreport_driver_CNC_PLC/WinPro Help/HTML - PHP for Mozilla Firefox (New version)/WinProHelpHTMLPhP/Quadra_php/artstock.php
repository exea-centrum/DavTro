<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Stock","Stock"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?artstock.php"; }
else { parent.quicksync('a4.5.6'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Stock</title>
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
        href="artcomposants.php">Previous</a>� <a
        href="arthistorique.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->



<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>�</p>

        <p>This page lets you define some stock handling parameters. These parameters are
        valid only if you have the stock handling module.</p>

        <p>�</p>

        <p>�</p>

        <p style="text-align: center; margin: 14px 0px 0px 0px;"><img
        src="img/clip27eng.jpg" width="791" height="273" border="0"
        alt="clip27eng"></p>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Minimum/maximum</span><span
                style="color: #000000;">: This table lets you define the
                minimum and maximum quantity you want in stock. These values
                can vary by month or quarter. The maximum stock is optional.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Periodicity</span><span
                style="color: #000000;">: This is where to define how the
                minimum and maximum values art handled.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">No stock
                handling</span><span style="color: #000000;">: When this box is
                checked, no stock handling will be done for this article.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Current
                stock, - customer reservations, + supplier orders,
                Available</span><span style="color: #000000;">: these fields
                give you a global idea of the respective quantities. You can
                click each Detail button to get more details. The <a
                href="artprevision.php">Forecast</a> page gives you a much
                better information for future stock movements.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Multiplying
                coefficient</span><span style="color: #000000;">: Stock
                reservations will be multiplied by this coefficient, giving you
                an extra security margin. This field is disabled when you
                compute reservations by optimizing the customer order's
                profiles. <a href="faq1a.php">Refer to the FAQ entry about this point.</a></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Filling coefficient</span>: Represents the occupying rate of an article into its stock slot.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Category</span>: Set the category (type) of stock boxes where the article will be stored. Stock slot are set up throuh
			  menu Basic data - Miscellaneous - Stock boxes</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Remove
                stock from store</span><span style="color: #000000;">: When
                launching the production, stock is decremented from a default
                global location. You can define here another location for the
                article.</td>
            </tr>
          </tbody>
        </table>
        </div>
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
      <td align="left"><p>�</p>

        <p>Cet onglet vous permet de d�finir les param�tres de la gestion de
        stock. Ces param�tres ne sont utilis�s que si vous disposez du module
        de gestion pr�visionnelle de stock.</p>

        <p>�</p>

        <p>�</p>

        <p style="text-align: center;"><img src="img/clip0090.gif" width="601"
        height="260" border="0" alt="clip0090"></p>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Minimum/maximum</span>: une
                grille vous permet de saisir les stocks minimum et maximum. Le
                nombre de lignes accessibles d�pend du choix de la p�riodicit�:
                mois, ann�e, trimestre. Il n'est pas obligatoire de d�finir un
                stock maximum.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">P�riodicit�</span>:
                d�termine comment g�rer les stocks minimum et maximum.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Hors stock</span>: si cette
                case est coch�e, la gestion de stock sera d�sactiv�e pour cet
                article.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Stock actuel, r�servations
                clients, commandes fournisseurs, disponible</span>: ces champs
                vous renseignent sur les quantit�s respectives en cours; vous
                pouvez cliquer sur le bouton D�tail � c�t� de chaque champ pour
                obtenir le d�tail de ce total. Notez que l'onglet <a
                href="artprevision.php">Pr�vision</a> vous donne une vue plus
                pr�cise sur les mouvements de stock futurs.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Coefficient
                multiplicateur</span>: coefficient par lequel les r�servations
                de stock sont multipli�es pour cet article. </td>
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
              <td width="13"></td>
              <td>Si vous avez choisi de r�server le stock en optimisant les
                profils, ce champ n'est pas disponible. <a
                href="faq1a.php">Voir la FAQ traitant du sujet.</a></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Coefficient de
                remplissage</span>: Repr�sente l'occupation d'un article dans
                le casier de stock.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Cat�gorie</span>: Pr�cise la
                cat�gorie (type) de casier dans lequel est stock� l'article.
                Les casiers sont cr��s via le menu Donn�es - Autres donn�es -
                Positions de stock</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p>�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Magasin �
                d�cr�menter</span>: Lors de la mise en production, les
                mouvements de stock sont affect�s � un emplacement par d�faut,
                identique pour tous les articles. Vous pouvez d�finir ici, pour
                chaque article, un autre emplacement de stock �
              d�cr�menter.</td>
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
