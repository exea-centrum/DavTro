<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
 </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA","NED"];
var WinProHelpPageName=["Articles","Articles","Artikels"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?articles.php"; }
else { parent.quicksync('a4.5'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
 </script>
  <title>Articles</title>
  <meta name="keywords" content="Article">
  <meta http-equiv="Content-Type"
  content="application/xhtml+xml; charset=iso-8859-1">
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
        href="sysfalsearch.php">Previous</a>  <a
        href="artdescription.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>The article table contains the list of all basic elements that make
        up a window or a roller shutter, with the exception of glazing and
        labour.</p>

        <p>Each article has a unique code. This code is at most 16
        alpha-numerical characters long. WinPro automatically maintains the
        creation date of each article.</p>

        <p>You must provide several kind of information to define completely an
        article: descriptions, prices, suppliers, stock handling, varnishing,
        ...</p>

        <p> </p>

        <p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>

        <p style="text-align: center;"><img src="img/clip0095eng.jpg"
        width="622" height="383" border="0" alt="clip0095eng"></p>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Code</span>: Article code.
                Must be different for each article.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Creation date</span>: Date
                at which article was created. This field is automatically
                maintained by WinPro.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Remarks:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
                      <td>Some articles exist in several colours. Usually, you
                        will need to define one article per colour, so that you
                        can handle stock. However, some articles have so many
                        possible colours, that it is not practical to create
                        one article per colour. This is especially the case
                        with aluminium in custom colours. You usually do not
                        need to handle stock for these articles. You can then
                        create a single article by price group, and use <a
                        href="macros___.php">macro #1# or #4#</a> to replace
                        the colour, and eventually the <a
                        href="finition.php">finishing</a>. However,you will
                        have no control on the colour the user select - the
                        choice will be free.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
                      <td>An article is usually a physical object, bought from
                        a supplier. But nothing prevents you from creating
                        'virtual' articles, that will contain additional
                        information (e.g. a selling price table).</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Notes on
                article prices:</span></p>

                <p style="margin: 0px 0px 0px 13px;">WinPro uses 4 price types
                for each article:</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
                      <td>The buying price (4 possible levels) is used in
                        supplier orders.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
                      <td>The current cost price is based on the buying price,
                        minus an optional discount, plus a cost factor. You can
                        also force an arbitrary cost price. </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
                      <td>The list cost price is equal to the current cost
                        price at some point in the past. It is used to compute
                        the selling price when the article is used in a
                      window.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
                      <td>The selling price is used when selling the article
                        separately. This price is used without any
                        transformation (margin or factor).</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;"> </span></p>

        <p style="text-align: center;"> </p>

        <p> </p>
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
      <td align="left"><p> </p>

        <p>Le fichier article contient la liste de tous les éléments de base
        qui composent les menuiseries. Les seuls types d'éléments exclus de
        cette liste sont les vitrages et les main d'oeuvre.</p>

        <p>Chaque article est identifié par un code unique. Ce code est composé
        d'un maximum de 16 caractères alpha-numériques. WinPro maintient
        automatiquement la date de création de chaque article.</p>

        <p>Vous devez fournir de plusieurs types de renseignements pour définir
        un article: descriptions, prix, fournisseurs, paramètres de stockage,
        laquage, ...</p>

        <p> </p>

        <p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>

        <p style="text-align: center;"><img src="img/clip0294.gif" width="608"
        height="428" border="0" alt="clip0294"></p>

        <p style="text-align: center;"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Code</span>: le code de
                l'article. Cette information doit être différente pour chaque
                article.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Création date</span>: la
                date à laquelle l'article a été créé dans WinPro. Ce champ est
                géré automatiquement par WinPro. Songez à lui donner une valeur
                si vous importez des articles par une procédure externe à
                WinPro.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Remarques:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
                      <td>Certains articles existent en plusieurs teintes. Pour
                        les articles que vous gérez en stock, il est
                        indispensable qu'ils soient identifiés par un code
                        article unique teinte par teinte. Cependant, certains
                        articles sont disponibles dans une très large gamme de
                        teintes ce qui rend la base article inconfortable.
                        C'est particulièrement le cas avec l'aluminium qui peut
                        être laqué dans des teintes "à la demande". Vous ne
                        devez alors pas gérer de stock pour ces articles. Dans
                        ce cas, vous pouvez créer un article simple par groupe
                        de prix, et employer la <a href="macros___.php">macro
                        #1# ou #4#</a> pour définir la couleur et
                        éventuellement spécifier la <a
                        href="finition.php">finition</a> par la macro #5# ou
                        #6# . Cependant, vous n'aurez aucun moyen de contrôle
                        sur la couleur que l'utilisateur aura spécifié - le
                        choix est totalement libre.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
                      <td>Habituellement, un article est un objet physique que
                        l'on commande chez un fournisseur. Mais rien ne vous
                        empêche de créer des articles "virtuels" contenant une
                        information additionnelle. (par exemple : une grille
                        prix utilisée pour la valorisation)</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Remarques
                sur le prix des articles:</span></p>

                <p style="margin: 0px 0px 0px 13px;">WinPro distingue 4 types
                de prix pour chaque article:</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
                      <td>Le prix d'achat (4 niveaux possibles en fonction de
                        la quantité) est utilisé pour les commandes
                      fournisseur.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
                      <td>Le prix de revient courant qui est basé sur le prix
                        d'achat, moins une optionnelle remise, plus un
                        coefficient de frais éventuel. Vous pouvez également
                        entrer un prix de revient courant arbitraire. </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
                      <td>Le prix de revient tarif correspond au prix de
                        revient de courant à un moment donné. Ce prix de
                        revient tarif d'un article est pris en considération,
                        en standard, lors du calcul du prix de vente d'une
                        menuiserie, pour autant que cet article fasse partie de
                        cette menuiserie.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
                      <td>Le prix de vente négoce est utilisé dans le cas où
                        l'article est vendu séparément d'une menuiserie. Ce
                        prix est utilisé tel quel sans aucune modification de
                        marge ou coefficient.</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;"> </span></p>

        <p style="text-align: center;"> </p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>

<div class="NED">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

        <p>De artikel tabel bevat de lijst van alle basiselementen die deel
        uitmaken van een raam of een rolluik, met uitzondering van glas en
        arbeid. Elk artikel heeft een unieke code. Deze code kan maximaal 16
        alfanumerieke tekens lang zijn. WinPro handhaaft automatisch de
        aanmaakdatum van elk artikel. U dient verschillende soorten informatie
        volledig te definiëren voor een artikel: beschrijvingen, prijzen,
        leveranciers, voorraadbeheer, lakken, ...</p>

        <p> </p>

        <p style="text-align: center;"><span
        style="font-size: 5pt;"> </span></p>

        <p style="text-align: center;"><img alt="001"
        src="img/artikelbeschrijving.jpg" width="805" height="648"> </p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Code</span>: Artikel code.
                Dient verschillend te zijn voor elk artikel.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
              <td><span style="font-weight: bold;">Aanmaakdatum</span>: Datum
                waarop het artikel aangemaakt is geweest.Dit veld wordt
                automatisch in Winpro bijgehouden.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;"> </span></p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf"
        border="0"
        style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Opmerking:</span></p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
                      <td>Sommige artikelen bestaan &#x200b;&#x200b;in
                        verschillende kleuren. Meestal moet u een artikel per
                        kleur definiëren, zodat u uw voorraad kan verwerken.
                        Sommige artikelen hebben zoveel kleuren, dat het niet
                        praktisch is om een artikel per kleur aan te leggen.
                        Dit is vooral het geval met aluminium in aangepaste
                        kleuren. U gaat voor deze artikels dan ook geen
                        voorrraad bijhouden. U kunt dan een enkel artikel
                        aanmaken per prijs-groep, en gebruik maken van <a
                        href="macros___.php">macro #1# of #4#</a> om de
                        gevraagde kleur te vervangen, en eventueel ook de <a
                        href="finition.php">afwerking</a>. In dit geval, heeft
                        u geen controle meer op de kleur welke de gebruiker
                        selecteert, de keuze is dus vrij.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
                      <td>Een artikel is meestal een fysiek object, gekocht bij
                        een leverancier. Maar niets houdt je tegen om het
                        creëren van 'virtuele' artikelen, die extra informatie
                        bevatten (bijvoorbeeld een verkoopprijs tabel).</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
            <tr valign="top" align="left">
              <td width="605"
                style="width: 605px; border: solid 1px #000000;"><p
                style="margin: 0px 0px 0px 13px;"><span
                style="font-weight: bold; text-decoration: underline;">Nota
                voor de artikelprijzen:</span></p>

                <p style="margin: 0px 0px 0px 13px;">WinPro gebruikt 4 prijs
                types voor elk arikel:</p>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
                      <td>De aankoopprijs (4 mogelijke niveaus) wordt gebruikt
                        in de leverancierbestellingen.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
                      <td>De huidige kostprijs is gebaseerd op de
                        ankoopprijs,verminderd met een optionele korting ,plu
                        een eventuele factor. U kan ook een willekeurige prijs
                        afdwingen </td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
                      <td>De tarief kostprijs is gelijk aan de huidige
                        kostprijs ergens in het verleden. Het wordt gebruikt om
                        de verkoopprijs berekenen wanneer het arikel ergens
                        gebruikt wordt.</td>
                    </tr>
                  </tbody>
                </table>
                </div>

                <div
                style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 14px;">

                <table border="0" cellpadding="0" cellspacing="0"
                style="line-height: normal;">
                  <tbody>
                    <tr valign="baseline">
                      <td width="17"><span
                        style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#x2022;</span></td>
                      <td>De verkoopprijs wordt gebruikt wanneer het artikel
                        afzonderlijk verkocht wordt (balieverkoop).Deze prijs
                        wordt gebruikt zonder enige aanpassing (marge of
                      factor)</td>
                    </tr>
                  </tbody>
                </table>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span style="font-size: 5pt;"> </span></p>

        <p style="text-align: center;"> </p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
