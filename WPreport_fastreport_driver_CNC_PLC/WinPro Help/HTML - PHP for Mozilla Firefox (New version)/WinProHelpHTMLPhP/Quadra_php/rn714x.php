<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["FRA","NED"];
var WinProHelpPageName=["7.1.4x","7.1.4x"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?rn714x.php"; }
else { parent.quicksync('a11.5.1'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>7.1.4x</title>
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
        href="introduction.php">Top</a>  <a href="rn720x.php">Previous</a>  <a
        href="rn713x.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="FRA">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p> </p>

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
                7.1.43</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">23/02/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span class="f_Heading1"
        style="text-decoration: underline;"> </span></p>

        <p><span class="f_TitreReleaseNote">Profils complémentaires:</span>
        Lorsque l&rsquo;on saisi un profil complémentaire dans une cde client,
        Winpro affiche la longueur d&rsquo;une barre en valeur par défaut dans
        le champ longueur. Si ce champ n&rsquo;est pas complété automatiquement
        après avoir saisi le code article, c&rsquo;est que l&rsquo;article
        n&rsquo;est référencé dans aucun profil.</p>

        <p>Vous devez noter que ce type de saisie exclura cet article de la
        gestion des approvisionnements et calculs d&rsquo;optmisation par
        manque de paramètres indispensables à Winpro.</p>

        <p>Nous pouvons maintenant empêcher l&rsquo;utilisateur de saisir un
        profil complémentaire tant que Winpro ne trouvera cette même référence
        article dans un profil quelconque. Cette fonctionnalité est activable
        par une nouvelle clé dans le fichier winpro.ini</p>

        <p><span style="font-weight: bold; color: #666699;">[System]</span></p>

        <p><span
        style="font-weight: bold; color: #666699;">CheckProfile</span><span
        style="color: #666699;">       </span><span
        style="font-weight: bold; color: #666699;">= 0</span> (par
        défaut)autorise la saisie de tout article ;</p>

        <p>               <span style="font-weight: bold; color: #666699;">=
        1</span> active la vérification</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Echec avec macro:</span> Les macros
        5 &amp; 6 peuvent être utilisées dans les instructions <span
        class="f_Variables">Echec</span>.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">DXF:</span> 5 nouveaux boutons dans
        la Menu Technique | DXF nous assistent au calage du DXF venant
        d&rsquo;être importé à l&rsquo;origine des axes X et Y.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Chiffre d&rsquo;affaire
        client:</span> Désormais, Winpro prends en compte les factures simples
        et notes de crédits pour déterminer le chiffre d&rsquo;affaire des
        clients. La table caclient.dbf est donc mise à jour lors de
        l&rsquo;édition de ces documents.</p>

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
                7.1.42</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">16/02/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Profils:</span> Nous pouvons
        spécifier un autre numéro scie pour chaque profil qui se substitue à la
        scie par défaut si le profil est consommé en tant qu&rsquo;accessoire
        via l&rsquo;onglet Profil de la commande client.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Message avec macro:</span> Le texte
        des messages peuvent maintenant contenir les macros #1# à #6#.</p>

        <p>Exemple :</p>

        <p><span class="f_Variables">Quantite := 1</span></p>

        <p><span class="f_Variables">Epaisseur := 10</span></p>

        <p><span class="f_Variables">Message L&rsquo;épaisseur est de
        #3#mm</span></p>

        <p><span class="f_Variables">Epaisseur := 20</span></p>

        <p><span class="f_Variables">Message L&rsquo;épaisseur du second
        message est de #3#mm</span></p>

        <p>Résultat affiché :</p>

        <p>L&rsquo;épaisseur est de 20mm</p>

        <p>L&rsquo;épaisseur du second message est de 20mm</p>

        <p> </p>

        <p><span style="text-decoration: underline;">Conditions
        d&rsquo;utilisation:</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Le message ne peut être paramétré dans une question.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>Pour que la macro soit remplacée, il faut impérativement
                consommer le composant.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>La macro sera remplacée par la valeur déclarée en fin de
                formule.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 24px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td>L&rsquo;instruction Echec ne fonctionne pas avec les
              macros.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Gestion des palettes:</span>
        (Concerne le module PT) Dans les fenêtres &lsquo;Palettes non
        disponible&rsquo; et &lsquo;Rappels aux clients&rsquo;, nous disposons
        d&rsquo;une liste combo &lsquo;Depuis plus de&rsquo; proposant par
        défaut 3 valeurs 7-15-30. Nous avons maintenant la possibilité de
        configurer le contenu de cette liste via le fichier winpro.ini :</p>

        <p><span style="font-weight: bold; color: #666699;">[Délais
        palettes]</span></p>

        <p><span style="font-weight: bold; color: #666699;">Délais</span><span
        style="font-weight: bold; color: #808080;">=</span> x       ou x
        correspond au nbre de possibilités (0 par défaut)</p>

        <p><span style="font-weight: bold; color: #666699;">1 =</span> première
        valeur de la liste combo</p>

        <p><span style="font-weight: bold; color: #666699;">2 =</span> seconde
        valeur de la liste combo</p>

        <p>&hellip;</p>

        <p> </p>

        <p class="p_Heading1"><span class="f_TitreReleaseNote">Articles
        composés - composition dynamique par paramètre:</span></p>

        <p>Concerne la Fiche article -&gt; Onglet Composants: Ajout d'une
        nouvelle colonne "Paramètre". Dans cette colonne, vous pouvez y
        spécifier une valeur numérique.</p>

        <p>Dans le paramétrage technique consommant l&rsquo;article composé,
        nous initialisons une nouvelle variable <span
        class="f_Variables">ParamComposant</span>.</p>

        <p>Seuls les composants de cet article composé dont la valeur de <span
        class="f_Variables">ParamComposant</span> correspond à la valeur du
        champ Paramètre seront réellement consommés, ainsi que les articles
        dont le champ Paramètre est nul.</p>

        <p> </p>

        <p> </p>

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
                7.1.41</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">15/02/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span class="f_Heading1"> </span></p>

        <p><span class="f_TitreReleaseNote">Conditionner l&rsquo;impression des
        questions:</span> Nous disposions jusqu&rsquo;à présent de la variable
        Imprimer. Cette variable utilisable exclusivement au niveau des
        formules de question permet de spécifier à Winpro si l&rsquo;on
        autorise ou non l&rsquo;impression sur les documents client et
        d&rsquo;atelier. Nous avons maintenant la possibilité de spécifier sur
        quels documents nous souhaitons autoriser ou refuser l&rsquo;impression
        d&rsquo;une question par l&rsquo;initialisation des variables <span
        class="f_Variables">DevisDetaille</span>, <span
        class="f_Variables">DevisSimplifie</span>, <span
        class="f_Variables">Confirmation</span>, <span
        class="f_Variables">PlanAtelierDetaille</span>, <span
        class="f_Variables">PlanAtelierSimplifie</span>.</p>

        <p>Lorsque la variable<span class="f_Variables">Imprimer = 0</span>, la
        question est systématiquement exclue de toute impression.</p>

        <p>Lorsque la variable<span class="f_Variables">Imprimer = 1</span>, ou
        est indéfinie, Winpro prendra en compte l&rsquo;état de ces nouvelles
        variables pour condionner l&rsquo;impression de la question en fonction
        du document en cours d&rsquo;impression.</p>

        <p>Reportez-vous à la note de release 6.4.16 pour plus de détails</p>
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
      <td align="left"><p> </p>

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
                7.1.43</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">23/02/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span class="f_Heading1"
        style="text-decoration: underline;"> </span><span
        class="f_TitreReleaseNote">De extra profielen</span> Wanneer men een
        extra profiel in een klantbestelling invoert, geeft Winpro de lengte
        van het profiel aan met een standaard waarde in het veld
        &ldquo;lengte&rdquo;. Als dit veld niet automatisch na de artikel code
        ingevoerd te hebben wordt aangevuld, is het dat het artikel niet naar
        een profiel verwijst. U moet opmerken dat dit soort van artikel door
        Winpro in de voorraadlijsten en optimalisaties door gebrek aan absoluut
        noodzakelijke parameters voor Winpro zal worden uitgesloten.</p>

        <p>Wij kunnen nu de gebruiker verhinderen om een extra profiel in te
        voeren als Winpro dezelfde verwijzing artikel in een willekeurig
        profiel zal terugvinden. Deze functionaliteit kan geactiveerd worden
        door een nieuwe sleutel in het bestand winpro.ini in te voeren.</p>

        <p></p>

        <p><span style="font-weight: bold; color: #666699;">[System]</span></p>

        <p><span
        style="font-weight: bold; color: #666699;">CheckProfile</span><span
        style="color: #666699;">       </span><span
        style="font-weight: bold; color: #666699;">= 0</span>(standaard)staat
        toe alle artikels in te voeren; </p>

        <p>               <span style="font-weight: bold; color: #666699;">=
        1</span> activeer de controle</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Foutmelding d.m.v. een
        macro:</span> De macros 5 &amp; 6 kunnen nu gebruikt worden in de
        instructies <span class="f_Variables">Echec 'Fail'</span>.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">DXF:</span> 5 nieuwe knoppen in het
        Menu Techniek| DXF assiteren ons voor de evrschuiving van een DXF nadat
        hij geimporteert is vanuit de assen X en Y.</p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Omzetcijfer klanten:</span> Winpro
        houdt rekening met de gemaakte facturen, kredietnota's om te bepalen
        wat het omzetcijfer is van een klant.De tabel caclient.dbf wordt dus
        geupdate bij het wijzigen van deze documenten.</p>

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
                7.1.42</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">16/02/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Profielen:</span> Winpro geeft u de
        mogelijkheid om per type profiel een ander zaagnummer te laten
        definiëren. Dit zaagnummer vervangt de standaard zaagnummer wanneer het
        profiel gekozen wordt in het tabblad « Profielen » in een
        klantbestelling. </p>

        <p> </p>

        <p><span class="f_TitreReleaseNote">Bericht met een macro:</span>
        Berichtteksten kunnen nu volgende macro&rsquo;s bevatten #1# tot
        #6#.</p>

        <p>Voobeeld :</p>

        <p>Voorbeeld :</p>

        <p>Quantite := 1</p>

        <p>Epaisseur := 10</p>

        <p>Message De dikte is #3#mm</p>

        <p>Epaisseur := 20</p>

        <p>Message De dikte van het tweede bericht is #3#mm</p>

        <p>Resultaat :</p>

        <p>De dikte is 10mm</p>

        <p>De dikte van het tweede bericht is 20mm</p>

        <p></p>

        <p>Gebruiksvoorwaarden :</p>

        <p>1. Het bericht kan niet geparametreerd in een routine, of in een
        vraag.</p>

        <p>2. Alvorens de macro geactiveerd kan worden, dient het artikel
        waarop het bericht geactiveerd is, ook verbruikt te worden.</p>

        <p>3. De macro wordt door de waarde vervangen op het einde van de
        formule.</p>

        <p>4. De instructie Echec kan niet werken met deze macro&rsquo;s</p>

        <p></p>

        <p> </p>

        <p></p>

        <p><span class="f_TitreReleaseNote">Beheer van paletten</span>
        (Betreffende de module PT) In het scherm &lsquo;Paletten niet
        beschikbaar&rsquo; en &lsquo;herrinering aan de klant&rsquo;,beschikken
        wij over een combo listbox &lsquo;Vanaf de &ldquo; welke standaard 3
        waardes voorstelt 7-15-30. We hebben nu de mogelijkheid om dze inhoud
        te configureren via de winpro.ini :</p>

        <p>[<span style="color:#0000ff">Délais palettes</span>]</p>

        <p><span style="color:#0000ff">Délais</span> = x waar x correspondeerd
        met de aantal mogelijkheden (0 standaard)</p>

        <p style="margin-left:4em">1 = y waar y correspondeerd met de eerste
        waarde in de combobox</p>

        <p style="margin-left:4em">2 = z waar z correspondeerd met de 2de
        waarde van de combobox</p>

        <p> </p>

        <p class="p_Heading1"><span class="f_TitreReleaseNote">Samengestelde
        artikels &ndash; Dynamische samenstelling door parameters:</span></p>

        <p>(betreft het bestand artikel --&gt; tabblad componenten: toevoegen
        van een nieuwe kolom &ldquo;parameter&rdquo;. In deze kolom kan u een
        numerieke waarde specifiëren.</p>

        <p>In de technische parametrage welke het samengesteld artikel
        verbruikt,initialiseren we een nieuwe variabele &ldquo;<span
        style="color:#0000ff">ParamComposant&rdquo;.
        &ldquo;ParamOnderdeel</span>&rdquo;</p>

        <p></p>

        <p>Enkel de componenten van dit samengestelde artikel waarvan de waarde
        van ParamComposant , &ldquo;ParamOnderdeel&rdquo; met de waarde van het
        veld Parameter overeenstemt zullen werkelijk gebruikt worden, evenals
        de artikelen waarvan het veld Parameter nul is</p>

        <p></p>

        <p>Het toevoegen van lokale variabele aan de parametriseringsformule
        van de vraag:</p>

        <p>- <span style="color:#0000ff">DevisDetaille, DevisSimplifie,
        Bevestiging, PlanAteilierDetaille en PlanAtelierSimplifie.</span></p>

        <p>- Zij zijn 1 als men de vraag wil afdrukken, 0 als men de afdruk van
        deze vraag niet wil.</p>

        <p></p>

        <p>De prioriteitvolgorde:</p>

        <p>als men, in de parametrisering, de variabele "<span
        style="color:#0000ff">afdrukken</span>" heeft die 0 is, verschijnt de
        vraag niet ,anders controleert men of een van de variabele hierboven op
        <span style="color:#0000ff">1</span> of op <span
        style="color:#0000ff">0</span> worden gezet.</p>

        <p></p>

        <p> </p>

        <p> </p>

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
                7.1.41</span></p>
              </td>
              <td width="304" bgcolor="#d8ffff"
              style="width: 304px; background-color: #d8ffff;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">15/02/06</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p><span class="f_Heading1"> </span></p>

        <p><span class="f_TitreReleaseNote">De afdruk van de vragen
        conditioneren:</span> Wij beschikten tot op heden over de variabele
        &ldquo;Afdrukken&rdquo;,&rdquo;Imprimer&rdquo;. Deze variabele welke
        uitsluitend te gebruiken is op het niveau van de formules van de vraag
        maakt het mogelijk om aan Winpro te specificeren of men wel of niet de
        afdruk op de klant documenten en van werkplaatsdocumenten toestaat. Wij
        hebben nu de mogelijkheid om zelf te bepalen op welke documenten wij de
        vraag willen afdrukken of niet door gebruik te maken van volgende
        variabelen:</p>

        <p>Fr: <span style="color:#0000ff">DevisDetaille, DevisSimplifie ,
        Confirmation, PlanAtelierDetaille, PlanAtelierSimplifie</span> .</p>

        <p>Nl :<span style="color:#0000ff">GedetailleerdeOfferte,
        VereenvoudigdeOfferte, Bevestiging,GedetailleerdWerkplaatsplan,
        VereenvoudigdWerkplaatsplan</span></p>

        <p>Wanneer de variabele <span style="color:#0000ff">Imprimer=0</span>,
        worden de vragen systematisch van elke afdruk uitgesloten. Wanneer de
        variabele <span style="color:#0000ff">Imprimer=1,</span> of
        ongedefinieerd, zal Winpro de nieuwe variabelen in aanmerking nemen om
        te conditioneren. Zie release 6.4.16 voor meer details.</p>

        <p></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
