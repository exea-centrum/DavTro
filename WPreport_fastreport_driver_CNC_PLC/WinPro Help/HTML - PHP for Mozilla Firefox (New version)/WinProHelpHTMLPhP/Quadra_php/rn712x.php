<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["FRA","NED"];
var WinProHelpPageName=["7.1.2x","7.1.2x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?rn712x.php"; }
else { parent.quicksync('a11.5.3'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>7.1.2x</title>
  <meta name="keywords" content="Winpro.ini">
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
        href="introduction.php">Top</a>  <a href="rn713x.php">Previous</a>  <a
        href="rn7119.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="FRA">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p style="margin: 0px 0px 0px 5px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                7.1.29</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">15/12/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Nouvelles variables
        globales:</span> <span class="f_Variables">_CouleurDormantRal,
        _CouleurOuvrantRal [NumeroOuvrant], _CouleurQuincRal [NumeroOuvrant],
        _CouleurParcloseRal [NumeroOuvrant], _CouleurPeriphRal
        [NumeroProfil].</span> </p>

        <p>Toutes ces variables renvoient une de ces valeurs :</p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">0</span>
        à Teinte non Ral</p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">1</span>
        à Teinte Ral Mono Standard</p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">2</span>
        à Teinte Ral Bicolor Standard</p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">3</span>
        à Teinte Ral Mono Hors Standard</p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">4</span>
        à Teinte Ral Bicolor Hors Standard</p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p>Pour rappel, la notion de Ral Standard est précisée dans
        l&rsquo;onglet Couleur de vos différents systèmes.</p>

        <p> </p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                7.1.28</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">14/12/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Envoi de paramètres:</span> Cette
        nouvelle table ParamArticle.dbf est complétée par Winpro lors de
        l&rsquo;approbation. Elle permet au paramétreur d&rsquo;envoyer des
        informations liées aux composants. Ces informations pourront ensuite
        être exploitées par WPreport, ou tout autre logiciel externe à Winpro.
        Toutefois, pour les licences dont le module Multi-Sites, cette
        fonctionnalité ne sera prise en compte que si la clé<span
        style="color: #666699;"></span><span
        style="font-weight: bold; color: #666699;">Type Société</span> est
        initialisée dans Winpro.ini avec la valeur<span
        style="font-weight: bold;"></span><span
        style="font-weight: bold; color: #666699;">0</span>.</p>

        <p>Winpro ne faisant aucun traitement sur le contenu de cette table, il
        est donc conseillé de supprimer manuellement les enregistrements
        devenus obsolètes ou inutiles.</p>

        <p>Dans le cas d&rsquo;un archivage de commande par déplacement, les
        enregistrements liés à la commande seront quant à eux déplacés.</p>

        <p>Pour que Winpro ajoute un enregistrement dans cette table, il est
        nécessaire de prévoir un paramétrage spécifique : Dans la formule où
        l&rsquo;on consomme l&rsquo;article, le profil ou la main
        d&rsquo;oeuvre, il faut avoir initialisé le tableau ParamArticle.</p>

        <p>Ensuite, il est nécessaire d&rsquo;envoyer une ou plusieurs valeurs
        à ce tableau. Ces différentes valeurs seront stockées dans les champs
        Param01, Param02, Param03,&hellip;, Param30 lors de
        l&rsquo;approbation.</p>

        <p>Exemple :</p>

        <p><span class="f_Variables">Quantite := 1</span></p>

        <p><span class="f_Variables">Longueur := Dimension</span></p>

        <p><span class="f_Variables">ParamArticle : 3</span></p>

        <p><span class="f_Variables">ParamArticle [1] :=
        _CouleurDormant</span></p>

        <p><span class="f_Variables">ParamArticle [2] := Dimension +
        _PenetrationMaconnerieGauche + _PenetrationMaconnerieDroite</span></p>

        <p><span class="f_Variables">ParamArticle [3] :=  101</span></p>

        <p><span class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 5px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                7.1.27</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">05/12/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span class="f_TitreReleaseNote">Code TVA belge:</span> Le format du
        code TVA mentionné dans la fiche client et fournisseur vient
        d&rsquo;être adapté à la nouvelle norme européenne. Vous pouvez donc
        ajouter un 0 en tout début du code, comme dans cet exemple :</p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/img_14.jpg" width="198"
        height="31" border="0" vspace="1" hspace="1" alt="img_14"></p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Gestion des remises
        fournisseur:</span> Dans le menu "Utilitaire | Remise sur le prix
        d'achat", on peut appliquer une remise sur le PA des articles de
        certaines catégories et de certains fournisseurs. Le mot de passe pour
        pouvoir entrer dans la fenêtre est le même que partout dans winpro.
        Puis on choisi la ou les catégories d'articles, le fournisseurs et
        le(s) pourcentage(s) de remise(s).</p>

        <p>Les articles dont la nouvelle case « Prix Net » est activée sont
        exclus de cette procédure.</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 5px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                7.1.21</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">18/11/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span class="f_TitreReleaseNote"> </span></p>

        <p><span class="f_TitreReleaseNote">Tri des listes des combo (dormant,
        ouvrant, traverse,&hellip;):</span> Une nouvelle zone est disponible
        dans les différentes fiches afin de pouvoir attribuer un numéro de tri.
        Ce numéro sera alors utilisé pour trier les éléments dans les listes
        combo lors de la saisie d&rsquo;une commande. Ce champ s&rsquo;active
        par l&rsquo;ajout d&rsquo;une clé dans le fichier winpro.ini. Si le tri
        est activé et que le champ est inutilisé, le tri se fera code.</p>

        <p><span style="font-weight: bold; color: #666699;">[System]</span></p>

        <p><span style="font-weight: bold; color: #666699;">Numerotation List  
             = 1</span> pour activer le champ et le tri des listes</p>

        <p>                         <span
        style="font-weight: bold; color: #666699;">= 0 </span>pour masquer ce
        champ et conserver le tri sur le code</p>
      </td>
    </tr>
  </tbody>
</table>
</div>

<div class="NED">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p style="margin: 0px 0px 0px 5px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                7.1.29</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">15/12/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Nieuwe globale variabelen:</span>
        </p>

        <p></p>

        <p>Fr : <strong style="color:#0000ff">_CouleurDormantRal,
        _CouleurOuvrantRal [NumeroOuvrant], _CouleurQuincRal [NumeroOuvrant],
        _CouleurParcloseRal [NumeroOuvrant], _CouleurPeriphRal
        [NumeroProfil].</strong></p>

        <p></p>

        <p>Nl : <strong><span
        style="color:#0000ff">_RalKleurKader,_RalKleurVleugel[Vleugelnummer],_RalKleurBeslagl[Vleugelnummer],_RalKleurGlaslat[Vleugelnummer],_RalKleurBijprofiell[Profiellnummer]</span></strong></p>

        <p></p>

        <p>Deze variabelen verzenden één van volgende waarden :</p>

        <p></p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">0</span>
        à Tint niet Ral</p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">1</span>
        à Tint Ral Mono Standaard</p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">2</span>
        à Tint Ral Bicolor Standaard</p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">3</span>
        à Tint Ral Mono Niet Standaard</p>

        <p style="margin: 0px 0px 0px 24px;"><span class="f_Variables">4</span>
        à Tint Ral Bicolor Niet Standaard</p>

        <p style="margin: 0px 0px 0px 24px;"> </p>

        <p>Pour rappel, la notion de Ral Standaard est précisée dans
        l&rsquo;onglet Couleur de vos différents systèmes.</p>

        <p> </p>

        <p> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                7.1.28</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">14/12/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Verzenden van parameters:</span>
        Deze nieuwe tabel « ParamArticle » wordt ingevuld door Winpro bij het
        gebruik en de goedkeuring van een bestelling.Ze staat de persoon welke
        parametreert toe informatie te zenden welke op onderdeel van toepassing
        kan zijn. Deze informaties kunnen dan door gebruiker gebruikt worden in
        WpReport of in een ander extern programma. Deze optie is wel enkel
        toegankelijk wanneer de gebruikers met een licentie van Multi-site een
        sleutel Type Société toevoegen aan de winpro.ini.met de waarde 0</p>

        <p>Winpro maakt geen gebruik van deze tabel, dus is het niet mogelijk
        deze automatisch te ledigen. Dit dient steeds manueel te gebeuren.</p>

        <p>Wanneer een bestelling getransfereerd wordt naar Winpro Archief,
        wordt de opgeslagen informatie mede gearchiveerd.</p>

        <p>Als WinPro een record moet voorzien in deze tabel, dan is het
        raadzaam een specifieke parametrage te voorzien : In de formule waar
        het artikel,de profiel of de arbeid berekend wordt, dien je dan een
        tabel ParamArticle te initialiseren..</p>

        <p>Verder ,is het nodig één of meerdere waarden naar deze tabel te
        zenden.Deze verschillende waarden worden opgeslagen in de velden
        Param01, Param02, Param03,&hellip;, Param30 bij het opslaan hiervan.</p>

        <p></p>

        <p>Voorbeeld :</p>

        <p><span class="f_Variables">Quantite := 1</span></p>

        <p><span class="f_Variables">Longueur := Dimension</span></p>

        <p><span class="f_Variables">ParamArticle : 3</span></p>

        <p><span class="f_Variables">ParamArticle [1] :=
        _CouleurDormant</span></p>

        <p><span class="f_Variables">ParamArticle [2] := Dimension +
        _PenetrationMaconnerieGauche + _PenetrationMaconnerieDroite</span></p>

        <p><span class="f_Variables">ParamArticle [3] := 101</span></p>

        <p><span class="f_Variables">Nederlands :</span></p>

        <p><span class="f_Variables">Hoeveelheid := 1</span></p>

        <p><span class="f_Variables">Lengte := Maat</span></p>

        <p><span class="f_Variables">ParamArticle : 3</span></p>

        <p><span class="f_Variables">ParamArticle [1] := _KaderKleur</span></p>

        <p><span class="f_Variables">ParamArticle [2] := Maat +
        _AanslagMuurLinks + _AanslagMuurRechts</span></p>

        <p><span class="f_Variables">ParamArticle [3] := 101</span></p>

        <p><span class="f_Variables"></span></p>

        <p><span class="f_Variables"> </span></p>

        <p style="margin: 0px 0px 0px 5px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                7.1.27</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">05/12/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span class="f_TitreReleaseNote">BTW Code België :</span> Het
        formaat van de Belgische BTW code is aangepast aan het nieuwe Europese
        ondernemingsnummer . U kan dus een 0 toevoegen aan de bestaande
        code&rsquo;s.</p>

        <p style="margin: 0px 0px 0px 24px;"><img src="img/img_14.jpg" width="198"
        height="31" border="0" vspace="1" hspace="1" alt="img_14"></p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Beheer van kortingen bij de
        leveranciers :</span> In het menu "Instellingen | Korting op
        aankoopprijs", kunnen wij een korting op de aankoopprijs van bepaalde
        categorieën van artikels ingeven en van bepaalde leveranciers. Het
        wachtwoord is hetzelfde als deze welke standaard in WinPro gebruikt
        wordt. De artikels welke aangevinkt staan met &ldquo;Netto prijs&rdquo;
        worden in deze procedure uitgesloten</p>

        <p> </p>

        <p style="margin: 0px 0px 0px 5px;"> </p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 5px;">

        <table align="center" width="615" cellspacing="0" cellpadding="2"
        border="0"
        style="border: none border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                7.1.21</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">18/11/05</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span class="f_TitreReleaseNote"> </span></p>

        <p><span class="f_TitreReleaseNote">Sorteren van de combo boxen lijsten
        (kader,vleugel,stijl,&hellip;)</span> Er is een nieuwe zone beschikbaar
        in de verschillende bestandjes om te kunnen sorteren ope en nummer.
        Deze nummer wordt aldus gebruikt om de verschillende elementen op een
        andere manier bij de ingave van een bestelling te sorteren.Dit veld
        wordt geactiveerd door een sleutel toe te voegen in de winpro.ini.
        Indien de sortering geactiveerd is en het veld wordt niet gebruikt dan
        wordt er gesorteerd op code. </p>

        <p><span style="font-weight: bold; color: #666699;">[System]</span></p>

        <p><span style="font-weight: bold; color: #666699;">Numerotation List  
             = 1</span>voor het veld en de sortering te activeren</p>

        <p>                         <span
        style="font-weight: bold; color: #666699;">= 0 </span>voor het veld te
        verbergen en behouden van de sortering op code</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
