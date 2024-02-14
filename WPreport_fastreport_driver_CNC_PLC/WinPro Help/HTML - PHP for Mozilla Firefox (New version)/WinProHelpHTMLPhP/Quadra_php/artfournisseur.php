<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Supplier","Fournisseur","Hoofdleverancier"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?artfournisseur.php"; }
else { parent.quicksync('a4.5.2'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Supplier</title>
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
        href="artdescription.php">Previous</a>  <a href="arttarif.php">Next</a>
        </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<p style="background: #fffff2;"><span
style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>

<p style="background: #fffff2;"><span
style="font-size: 5pt; color: #000000;"> </span></p>

<p style="background: #fffff2;"><span style="color: #000000;">This page lets
you define the characteristics of the article depending on the
supplier.  </span><span style="font-size: 5pt; color: #000000;"> </span></p>

<p style="background: #fffff2;"><span style="color: #000000;">There are 3
similar pages, which lets you define data for 3 different suppliers. The first
page is named 'Main supplier'. The information on this page will be used by
default by WinPro.</span></p>

<p>For other suppliers, the order form should be created manually.</p>

<p style="text-align: center; margin: 14px 0px 0px 0px;"><img
src="img/clip18eng.jpg" width="850" height="570" border="0" alt="clip18eng"></p>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="font-weight: bold;">Supplier</span><span
        style="color: #000000;">: The <a href="fournisseur.php">supplier</a>
        code of this article, the name is displayed into blue area.</span></td>
    </tr>
  </tbody>
</table>
</div>

<p> </p>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="font-weight: bold;">Supplier's description</span><span
        style="color: #000000;">: The description of the article for the
        supplier. This text will be used for supplier orders. If you leave it
        blank, the main description of the <a
        href="artdescription.php">Description</a> page will be used.</span></td>
    </tr>
  </tbody>
</table>
</div>

<p> </p>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="font-weight: bold;">Delivery delay</span><span
        style="color: #000000;">: Number of <img src="img/clip16eng.jpg" width="67"
        height="22" border="0" alt="clip16eng"> or <img src="img/clip17eng.jpg"
        width="57" height="27" border="0" alt="clip17eng"> between order and
        delivery, for this article. When you create the article, and you type
        the supplier code, these fields are filled with default values defined
        in the Supply &amp; delivery page of the supplier definition. When an
        article is managed into the stock and supplier proposition may be
        generated, it is necessary to fulfill this field.</span></td>
    </tr>
  </tbody>
</table>
</div>

<p> </p>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="font-weight: bold;">Packed by</span><span
        style="color: #000000;">: Number of units per pack. In the previsional
        stock handling module, order propositions will always use a multiple of
        this value. It then corresponds to the smallest unit an article may be
        ordered.</span> 

        <p>Example: The article SCREW4x30 is packaged using box of 1000 units,
        then the value to be set is 1000. Other example : The article
        OUTERFRAME60/80BL is packaged by pairs of two profiles of 6.5m, then
        the value to be set is 13.</p>
      </td>
    </tr>
  </tbody>
</table>
</div>

<p> </p>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="font-weight: bold;">Aluminium profile priced per
        kg</span>:  </td>
    </tr>
  </tbody>
</table>
</div>

<p class="p_Textestd" style="margin: 0px 0px 0px 13px;"><span
class="f_Textestd">For an article record you may set a unit price, per meter in
case of profile or per part in case of article.</span></p>

<p style="margin: 0px 0px 0px 13px;"><span class="f_Textestd">At supplier
record level, you may set a price for 1 kg of aluminium.</span></p>

<p class="p_Textestd" style="margin: 0px 0px 0px 13px;"><span
class="f_Textestd">For cost price computation, no changes, price per kg is
ignored, it should be set manually.</span></p>

<p class="p_Textestd" style="margin: 0px 0px 0px 13px;"><span
class="f_Textestd">To value supplier order forms, WinPro will compute prices of
profiles like this : Net Buying Price (net BP) = Ordered Qty x (BPalu/Kg x
UnitWeight + BrutArticleBP) - % discount according qty ordered.</span></p>

<p class="p_Textestd" style="margin: 0px 0px 0px 13px;"><span
class="f_Textestd">This computation considers discount by quantity, but does
not consider the cost coefficient. When this box is checked, it is necessary to
specify a Unit weight into the corresponding field of "Description"
tab.</span></p>

<p style="margin: 0px 0px 0px 13px;"> </p>

<p> </p>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="font-size: 5pt;"></span><span
        style="font-weight: bold;">Buying prices</span><span
        style="color: #000000;">: This area has 4 groups of fields, to handle
        quantity discounts. Sort your prices by increasing quantity.</span></td>
    </tr>
  </tbody>
</table>
</div>

<p style="margin: 0px 0px 0px 13px;">For most article, only one price will do.
In this case, use the first group; you do not need to set a quantity (but you
may).</p>

<p style="text-indent: -24px; margin: 0px 0px 0px 37px;">Each group has the
following fields:</p>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="font-weight: bold;">Qty #n</span><span
        style="color: #000000;">: Quantity associated to the price along with
        corresponding discount.</span></td>
    </tr>
  </tbody>
</table>
</div>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="font-weight: bold;">Code / Qty </span><span
        style="color: #000000;">: a small additional description which will be
        added to the main supplier description, depending on the quantity. This
        is useful when the supplier uses different references for different
        packings. </span> 

        <p><span style="color: #000000;">When none of the fields are set,
        nothing is added to the article description. When fields are partially
        filled and the packaging ordered corresponds to an empty field, "???"
        are added at the begining of the supplier description.</span></p>

        <p>When all is filled and the quantity order corresponds to none of
        them, "???" are added at the begining of the supplier description.<span
        style="color: #000000;"></span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="font-weight: bold;">Buying price n</span><span
        style="color: #000000;">: Buying price for the associated quantity,
        using the supplier's currency. For a profile it is a price per meter,
        for an article a price per unit.</span></td>
    </tr>
  </tbody>
</table>
</div>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="font-weight: bold;">Discount ... %</span><span
        style="color: #000000;">: Discount, in percents, on the associated
        buying price. </span></td>
    </tr>
  </tbody>
</table>
</div>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><img src="img/clip0084.gif" width="20" height="23" border="0"
        alt="clip0084"><span style="font-weight: bold">buttons</span><span
        style="color: #000000;">: If you click the button associated to one of
        these groups, the buying price is copied to the net buying price, after
        applying the discount and the currency rate, if applicable. </span></td>
    </tr>
  </tbody>
</table>
</div>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="font-weight: bold;">Currency</span><span
        style="color: #000000;">: Tells in which <a
        href="devises.php">currency</a> the buying price is given. The currency
        rate is automatically shown in the </span><span
        style="font-weight: bold; color: #000000;">Rate</span><span
        style="color: #000000;">field.</span></td>
    </tr>
  </tbody>
</table>
</div>

<p> </p>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="font-weight: bold;">Net buying price in ...</span><span
        style="color: #000000;">: your net buying price, after discounting, and
        using your own currency. This field can be filled automatically by
        clicking the corresponding </span><img src="img/clip0084.gif" width="20"
        height="23" border="0" alt="clip0084"><span
        style="color: #000000;">button; you can also directly type a
        value.</span></td>
    </tr>
  </tbody>
</table>
</div>

<p> </p>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="font-weight: bold;">Cost coefficient</span><span
        style="color: #000000;">: The factor by which your net buying price is
        multiplied to get the current cost price. You can click the </span><img
        src="img/clip0087.gif" width="20" height="23" border="0"
        alt="clip0087"><span style="color: #000000;">button to automatically
        fill the current cost price field, using the net buying price and this
        cost coefficient.</span></td>
    </tr>
  </tbody>
</table>
</div>

<p> </p>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="font-weight: bold;">Current cost price</span><span
        style="color: #000000;">: The current cost price of the article (See
        "<a href="artdescription.php">Description</a>" for more information on
        prices). You can directly type a value in this field if you
      wish.</span></td>
    </tr>
  </tbody>
</table>
</div>

<p> </p>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="font-weight: bold;">Button </span><img
        src="img/clip20eng.jpg" width="194" height="25" border="0"
        alt="clip20eng">: Allows copying the current cost price into list cost
        price (stored into "<a href="artdescription.php">Description</a>"
      tab).</td>
    </tr>
  </tbody>
</table>
</div>

<p> </p>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">
<p>Pages <img src="img/clip19eng.jpg" width="157" height="21" border="0"
alt="clip19eng"> hold the same kind of information, for additional suppliers.
</p>

<p>Supplier orders are always generated using main supplier, additionnal
suppliers may be used only manually.</p>
</div>

<p> </p>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>Cet onglet vous permet de définir les caractéristiques de l'article
        qui sont propres à chaque fournisseur. </p>

        <p>Vous disposez de trois onglets similaires, ce qui vous permet de
        définir l'article pour trois fournisseurs différents. Le premier de ces
        onglets est destiné au 'fournisseur principal'. C'est ce fournisseur
        qui sera utilisé par WinPro pour commander l'article dans une
        proposition de commande automatique. Quant aux deux autres
        fournisseurs, vous pourrez les utiliser lors d'une éventuelle saisie
        manuelle de commande fournisseur. </p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0097.gif" width="601"
        height="400" border="0" alt="clip0097"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Fournisseur</span>: Code du
                <a href="fournisseur.php">fournisseur</a> de cet article. Dés
                qu'un code fournisseur est renseigné, Winpro affiche son nom
                dans la zone bleutée.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Référence
                fournisseur</span>: La dénomination de cet article pour ce
                fournisseur. C'est ce texte qui apparaîtra sur les bons de
                commande au fournisseur. Si vous ne remplissez pas ce champ,
                c'est la description principale de l'article, définie dans
                l'onglet <a href="artdescription.php">Description</a>, qui sera
                utilisée.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Délai de livraison</span>:
                Nombre de <img src="img/clip0128.gif" width="62" height="13"
                border="0" alt="clip0128"> ou de <img src="img/clip0127.gif"
                width="42" height="14" border="0" alt="clip0127"> qui
                s'écoulent entre l'envoi de la commande et la livraison, pour
                cet article. Lorsque vous créez l'article, au moment où vous
                renseignez le code du fournisseur, ces champs seront remplis
                avec les valeurs par défaut définis dans l'onglet "Commandes et
                livraisons" de la fiche fournisseur. Si vous gérer en stock un
                article et que vous lancez des propositions de commandes
                fournisseurs via le menu stock, il est indispensable de
                spécifier le délai de livraison pour cet article. </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-family: 'Tahoma';"> </span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Conditionnement</span>: Le
                nombre d'unités par emballage. Dans le module de gestion
                prévisionnelle de stock, les propositions de commande
                contiendront toujours un multiple de cette valeur. Autrement
                dit, le conditionnement correspond à la plus petite quantité
                qu'il est possible de commander.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 13px;">Exemple: L'article VIS4x30 est
        livrable par boîte de 1000 pièces. Le conditionnement doit être de
        1000.</p>

        <p style="margin: 0px 0px 0px 13px;">Autre exemple : L'article
        DORMANT60/80BL est livrable par botte de 2 profils de 6,5m. Le
        conditionnement doit être de 13.</p>

        <p style="margin: 0px 0px 0px 13px;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Profil acheté au kg</span>: 
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd" style="margin: 0px 0px 0px 13px;"><span
        class="f_Textestd">Au niveau de l’article, vous fixez le poids unitaire
        soit, le poids au mètre pour un profil ou le poids de chaque pièce pour
        les autres articles (vis par exemple).</span></p>

        <p style="margin: 0px 0px 0px 13px;"><span class="f_Textestd">Au niveau
        du fournisseur, vous fixez le prix de l'alu au Kg.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 13px;"><span
        class="f_Textestd">Pour le calcul du prix de revient, rien ne change,
        Winpro ne tiens pas compte du prix au kg. Autrement dit, vous devez le
        saisir manuellement.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 13px;"><span
        class="f_Textestd">Pour la valorisation des commande fournisseur,
        Winpro calculera le prix des profils : PAnet = Quantité commandée x
        (PAalu/Kg x PoidsUnitaire + PAbrutArticle) - % remise octroyée en fct
        de la quantité commandée.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 13px;"><span
        class="f_Textestd">Ce calcul tient compte de la remise en fonction des
        quantités.</span></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 13px;"><span
        class="f_Textestd">Ce calcul ne tient pas compte du coefficient de
        frais. Lorsque cette case est activée, il est indispensable de
        spécifier un Poids unitaire dans le champ approprié de l'onglet
        "Description".</span></p>

        <p style="margin: 0px 0px 0px 13px;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Conditionnement et prix d'achat brut
                en devise</span>: Cette zone contient 4 groupes de champs, pour
                gérer un prix dégressif par quantité. Si vous renseignez
                plusieurs prix, triez-les par quantité croissante.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 13px;">Pour la plupart des articles, il
        ne vous faut qu'un seul prix. Dans ce cas, renseignez ce prix dans le
        premier groupe; il n'est pas indispensable de renseigner la quantité.
        </p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 37px;">Chaque groupe
        contient les éléments suivants:</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Qté</span>: Quantité qu'il
                faut commander pour bénéficier du prix d'achat associé et de
                son éventuelle remise.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Code / qté</span>: Il s'agit
                d'une description supplémentaire qui s'ajoutera en début de
                référence article fournisseur lors de la création d'une
                commande manuelle ou d'une proposition de commande. Cette
                description supplémentaire ne sera ajoutée que si le
                conditionnement commandé correspond à l'une des 4 valeurs du
                champ Qté.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="margin: 0px 0px 0px 40px;">Ceci est utilisé lorsque le
        fournisseur référence des emballages différents pour un même article
        sous des numéros de code différents</p>

        <p style="margin: 0px 0px 0px 40px;">Si aucun de ces champ n'est
        complété, rien ne sera ajouter en début de référence article
        fournisseur.</p>

        <p style="margin: 0px 0px 0px 40px;">Si les champs sont complétés
        partiellement et que le conditionnement commandé correspond à un champ
        vide, des "????" seront placés en début de référence article
        fournisseur.</p>

        <p style="margin: 0px 0px 0px 40px;">Si tous les champs sont complétés
        et que le conditionnement commandé ne correspond à aucun champ, des
        "????" seront placés en début de référence article fournisseur.</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Prix</span>:  Il s'agit d'un
                prix d'achat brut à l'unité. Il est spécifié dans la devise du
                fournisseur. Pour un profil, le prix indiqué correspond au
                prix/mètre. Pour une vis, le prix  indiqué correspond au prix
                d'une vis.   </td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Rem %</span>: Pourcentage de
                remise à décompter du prix d'achat indiqué</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Boutons </span><img
                src="img/clip0084.gif" width="20" height="23" border="0"
                alt="clip0084">: Si vous cliquez sur le bouton associé à un des
                4 groupes, le prix d'achat de base est transféré en prix
                d'achat dans votre devise de base, après application de la
                remise et du taux de change éventuels.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Devise d'achat</span>:
                Indique quelle est la <a href="devises.php">devise</a> dans
                laquelle vous achetez cet article. Le taux de change de la
                devise est automatiquement affiché dans le champ taux.</td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Prix d'achat net en
                ...</span>: montre votre prix d'achat net dans votre devise de
                base. Ce montant peut être calculé en cliquant sur le bouton
                <img src="img/clip0084.gif" width="20" height="23" border="0"
                alt="clip0084">, mais vous pouvez aussi en forcer manuellement
                la valeur</td>
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
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-size: 5pt;"></span><span
                style="font-weight: bold;">Coefficient de frais</span>: Le taux
                de frais dont vous souhaitez majorer votre prix d'achat net
                pour obtenir votre prix de revient. Le bouton <img
                src="img/clip0087.gif" width="20" height="23" border="0"
                alt="clip0087"> vous permet de calculer directement le prix de
                revient, à partir de cette valeur et du prix d'achat net.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Prix de revient</span>: Le
                prix de revient courant de cet article (voyez la <a
                href="articles.php">Remarques sur le prix des articles</a> pour
                complément d'information sur les prix de revient). Vous pouvez
                forcer manuellement la valeur de ce montant si vous le
                souhaitez.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Bouton </span><img
                src="img/clip0092.gif" width="126" height="17" border="0"
                alt="clip0092">: Permet de copier le prix de revient courant
                vers le prix de revient tarif (stocké dans l'onglet "<a
                href="artdescription.php">Description</a>")</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;"> </span></p>

        <p> </p>

        <p>Les onglets <img src="img/clip0094.gif" width="115" height="13"
        border="0" alt="clip0094"> contiennent les mêmes renseignements, pour
        d'éventuel(s) autre(s) fournisseur(s).</p>

        <p>Sachez que la commande fournisseur générée par Winpro sera toujours
        attribuée au fournisseur principal.</p>

        <p>Les fournisseurs secondaires sont disponibles lors d'une saisie
        manuelle d'une commande fournisseur.</p>

        <p> </p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>

<div class="NED">
<!-- Placeholder for topic body. -->

<p style="background: #fffff2;"><span
style="font-size: 12pt; font-family: 'Times New Roman'; color: #000000;"> </span></p>

<p style="background: #fffff2;"><span
style="font-size: 5pt; color: #000000;"> </span></p>

<p>Op deze pagina kunt u de kenmerken van het artikel, afhankelijk van de
leverancier definiëren</p>

<p></p>

<p>Er zijn 3 gelijke pagina's, waarmee u gegevens kan definiëren voor 3
verschillende leveranciers. De eerste pagina wordt de hoofdleverancier. De
informatie op deze pagina wordt standaard gebruikt door WinPro.</p>

<p>Voor andere leveranciers, moet de bestelbon handmatig worden gemaakt.</p>

<p></p>

<p></p>

<p><img alt="g"
src="../../Users/dtrippaers/Pictures/Winpro Help/Artikels/Hoofdleverancier.jpg"
style="display: block; text-align: center; margin-left: auto; margin-right: auto"
width="801" height="664"></p>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="font-weight: bold;">Leverancier</span><span
        style="color: #000000;">: De <a href="fournisseur.php">Leveranciers</a>
        code van dit artikel, de naam wordt weergegeven in de blauwe
        zone.</span></td>
    </tr>
  </tbody>
</table>
</div>

<p> </p>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="font-weight: bold;">Leverancier beschrijving</span><span
        style="color: #000000;">: : De beschrijving van het artikel bij de
        leverancier. Deze tekst zal worden gebruikt voor facturen,
        bestelbonnen. Als u deze leeg laat, zal de beschrijving van de <a
        href="artdescription.php">Beschrijving</a> worden gebruikt</span></td>
    </tr>
  </tbody>
</table>
</div>

<p></p>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="color: #000000;"><strong>Leveringstermijn</strong>:
        Aantal <img alt="x"
        src="../../Users/dtrippaers/Pictures/Winpro Help/Artikels/weken.jpg"
        width="58" height="23">of <img alt="d"
        src="../../Users/dtrippaers/Pictures/Winpro Help/Artikels/dagen.jpg"
        width="61" height="22">tussen bestelling en levering, voor dit artikel.
        Wanneer u het artikel te aanmaakt, en u typt de leverancier code,
        worden deze velden gevuld met de standaardwaarden gedefinieerd in de
        Leverancier pagina van de leverancier definitie. Wanneer een artikel
        wordt beheerd in de voorraad en een leverancier bestelling kan worden
        gegenereerd, moet dit geselecteerd zijn. </span></td>
    </tr>
  </tbody>
</table>
</div>

<p> </p>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="color: #000000;"><strong>Verpakking</strong>: Aantal
        eenheden per verpakking. In de vooruitziende voorraad module, zal de
        bestelhoeveelheid steeds een veelvoud van deze waarde zijn. Het komt
        dan overeen met de kleinste eenheid die van een artikel kan worden
        besteld</span>. 

        <p>Voorbeeld: Het artikel Schoeven4x30 is verpakt in een doos van 1000
        stuks, dan dient de waarde welke ingesteld wordt 1000 te zijn. Ander
        voorbeeld: Het artikel FRAME60/80BL wordt verpakt per paar profielen
        van 6,5 m, dan dient de waarde welke ingesteld wordt 13 te zijn.</p>
      </td>
    </tr>
  </tbody>
</table>
</div>

<p> </p>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="font-weight: bold;"></span><strong>Aluminium profiel
        geprijsd per kg:</strong> </td>
    </tr>
  </tbody>
</table>
</div>

<p class="p_Textestd" style="margin: 0px 0px 0px 13px;"><span
class="f_Textestd">Voor een artikel welke een eenheidsprijs heeft, per meter in
het geval van profiel of per stuk in het geval van artikel. Op leverancier
niveau, kan je hiervoor een prijs instellen per kg aluminium. Voor de kostprijs
berekening, zijn er geen veranderingen, prijs per kg wordt dan genegeerd, en
moet handmatig worden ingesteld. Voor de waarde van leverancier bestellingen,
zal WinPro de prijzen van de profielen als volgt berekenen : Netto aankoopprijs
(netto BP) = bestelhoeveelheid x (BPalu / Kg x gewicht per eenheid+
BrutoArtikelBP ) -% korting volgens het besteld aantal.</span></p>

<p class="p_Textestd" style="margin: 0px 0px 0px 13px;"><span
class="f_Textestd">Deze berekening beschouwt korting door kwantiteit, maar
houdt geen rekening met de prijs coëfficiënt. Als dit vakje is aangevinkt, is
het noodzakelijk om een gewicht voor de eenheid te specificeren in het
overeenkomende veld van het tabblad "Beschrijving".</span> </p>

<p> </p>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="font-size: 5pt;"></span><span
        style="font-weight: bold;">Verpakking en bruto inkoopprijs in
        valuta</span><span style="color: #000000;">: Dit gebied heeft 4 groepen
        van velden, om kortingen/hoeveelheid te behandelen. Sorteer uw prijzen
        door de toenemende hoeveelheden en hun kortingen. Voor de meeste
        artikels is er slechts één prijs van toepassing. In dit geval gebruikt
        u de eerste groep, het is niet nodig om alle aantallen hiervoor in te
        stellen.</span></td>
    </tr>
  </tbody>
</table>
</div>

<p style="text-indent: -24px; margin: 0px 0px 0px 37px;">Elke groep heeft de
volgende velden:</p>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="color: #000000;"><strong>Aantal # n</strong>: Aantal
        gekoppeld aan de prijs, samen met de bijbehorende korting.</span></td>
    </tr>
  </tbody>
</table>
</div>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="color: #000000;"><strong>Code / Aantal</strong>: een
        kleine beschrijving die wordt toegevoegd aan de belangrijkste
        leverancier beschrijving, afhankelijk van de hoeveelheid. Dit is handig
        wanneer de leverancier gebruik maakt van verschillende referenties voor
        verschillende verpakkingen of wanneer hij werkt met een ERP software
        met specifieke coderingen.(een interface met deze software moet dan
        voorhanden zijn)</span>

        <p><span style="color: #000000;">Wanneer geen van deze velden ingesteld
        zijn, wordt er niets toegevoegd aan de artikelbeschrijving. Wanneer
        velden gedeeltelijk gevuld zijn en de verpakking besteld komt overeen
        met een leeg veld, zal er een "??" toegevoegd worden aan het begin van
        de leverancier beschrijving. Wanneer alles ingevuld is en de
        hoeveelheid komt niet overeen met één van de velden, zal tevens "??"
        toegevoegd worden aan het begin van de leverancier
        beschrijving.</span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="color: #000000;"><strong>Aankoopprijs n:</strong> De
        aankoopprijs voor de bijbehorende hoeveelheid, Voor een profiel is een
        prijs per meter, voor een artikel een prijs per eenheid.</span></td>
    </tr>
  </tbody>
</table>
</div>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="color: #000000;"><strong>Korting ... %</strong>:
        Korting, in procenten, op de bijbehorende aankoopprijs. </span></td>
    </tr>
  </tbody>
</table>
</div>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><img src="img/clip0084.gif" width="20" height="23" border="0"
        alt="clip0084"><span style="font-weight: bold">knoppen</span><span
        style="color: #000000;">: Als u op deze knop met betrekking tot een van
        deze groepen klikt, wordt de aankoopprijs gekopieerd naar de netto
        aankoopprijs, na toepassing van de korting en de wisselkoers, indien
        van toepassing.. </span></td>
    </tr>
  </tbody>
</table>
</div>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 27px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="font-weight: bold;">Munteenheid</span><span
        style="color: #000000;">: .Geeft aan in welke <a
        href="devises.php">munteenheid</a> </span><span
        style="color: #000000;">valuta de aankoopprijs wordt gegeven. De
        wisselkoers wordt automatisch weergegeven in het veld voor de waarde
        van de euro</span></td>
    </tr>
  </tbody>
</table>
</div>

<p> </p>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="color: #000000;"><strong>De netto inkoopprijs in
        ...:</strong> uw netto inkoopprijs, na korting, en in uw eigen valuta.
        Dit veld kan automatisch worden gevuld door te klikken op de
        bijbehorende </span><img src="img/clip0084.gif" width="20" height="23"
        border="0" alt="clip0084"><span style="color: #000000;">of u kunt
        rechtstreeks een waarde typen</span></td>
    </tr>
  </tbody>
</table>
</div>

<p> </p>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="color: #000000;"><strong>Kosten coëfficiënt</strong>: De
        factor waarmee uw netto aankoopprijs wordt vermenigvuldigd om de
        huidige kostprijs te krijgen. U kunt op de </span><img
        src="img/clip0087.gif" width="20" height="23" border="0"
        alt="clip0087"><span style="color: #000000;">om automatisch het veld
        van de huidige kostprijs te vullen , met behulp van de
        netto-aankoopprijs en deze kosten coëfficiënt.</span></td>
    </tr>
  </tbody>
</table>
</div>

<p> </p>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="color: #000000;"><strong>Kostprijs</strong>: De huidige
        kostprijs van het artikel (zie "<a
        href="artdescription.php">Beschrijving</a>" voor meer informatie over
        de prijzen). U kunt een waarde rechtstreeks in dit veld invoeren indien
        gewenst</span></td>
    </tr>
  </tbody>
</table>
</div>

<p> </p>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

<table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;">
  <tbody>
    <tr valign="baseline">
      <td width="17"><span
        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
      <td><span style="font-weight: bold;">Knop </span><img alt="p"
        src="../../Users/dtrippaers/Pictures/Winpro Help/Artikels/pijl tarief kostprijs.jpg"
        width="147" height="22">: hiermee kan u de huidige kostprijs kopiëren
        naar de lijst kostprijs (opgeslagen in "<a
        href="artdescription.php">Beschrijving</a>" tab).</td>
    </tr>
  </tbody>
</table>
</div>

<p> </p>

<div
style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">
<p>Pagina's <img alt="c"
src="../../Users/dtrippaers/Pictures/Winpro Help/Artikels/lever2lever3.jpg"
width="114" height="20"> houden dezelfde soort informatie in, voor extra
leveranciers.</p>

<p>Leverancier bestellingen worden altijd gegenereerd met behulp van de
informatie in de hoofdleverancier, de bijkomende leveranciers kunnen enkel
handmatig gebruikt worden.</p>

<p></p>
</div>

<p> </p>
</div>
</body>
</html>
