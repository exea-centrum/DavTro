<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["FRA","NED"];
var WinProHelpPageName=["3.0.xx","3.0.xx"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?rn30xx.php"; }
else { parent.quicksync('a11.20.1'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>3.0.xx</title>
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
        href="introduction.php">Top</a>� <a href="rn31xx.php">Previous</a>� <a
        href="rn24xx.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="FRA">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;">

        <table align="center" cellspacing="0" cellpadding="2" border="1"
        style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                3.0.02</span></p>
              </td>
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">20/3/2000</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Suppl�ment par
        syst�me:</span><span class="f_Textestd">Vous pouvez sp�cifier, pour
        chaque syst�me, un suppl�ment forfaitaire � appliquer sur le ch�ssis
        complet, y compris le vitrage, l&rsquo;a�rateur, &hellip; mais
        </span><span class="f_Textestd">pas</span><span class="f_Textestd">sur
        le volet roulant.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ce suppl�ment permet
        d&rsquo;appliquer une majoration forfaitaire sur le tarif publi�, pour
        faire suite � une augmentation de ce tarif sans devoir imprimer un
        nouveau tarif.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Pour sp�cifier le
        suppl�ment, prenez le menu </span><span
        class="f_Textestd">Donn�es</span><span class="f_Textestd">|
        </span><span class="f_Textestd">Syst�mes </span><span
        class="f_Textestd">; vous y trouverez un nouveau champ d&rsquo;encodage
        intitul� � </span><span class="f_Textestd">Coefficient</span><span
        class="f_Textestd"></span><span class="f_Textestd">de</span><span
        class="f_Textestd"></span><span class="f_Textestd">marge</span><span
        class="f_Textestd">�. Indiquez-y le coefficient multiplicateur �
        appliquer (p.ex. pour une augmentation de 2%, indiquez 1.02). Vous avez
        droit � 5 d�cimales. Si le champ reste vide, aucun suppl�ment
        n&rsquo;est appliqu�.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"
        style="color: #ff0000;">Attention !!! Ce suppl�ment ne s&rsquo;applique
        que sur les prix &lsquo;tarif&rsquo; et pas sur les prix courants. Si
        donc vous calculez un chantier en prix courant, le programme vous
        renverra le m�me prix que dans la version pr�c�dente !!!</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Onglets Articles
        et Profils dans les commandes client:</span><span class="f_Textestd">A
        gauche de la colonne code, il y a maintenant une colonne de cases �
        cocher. Cette colonne n&rsquo;est pas modifiable. Elle sert � indiquer
        si un article ou un profil a �t� signal� comme &lsquo;tra�able&rsquo;
        dans la fiche article (c-�-d si la case � </span><span
        class="f_Textestd">Commander</span><span
        class="f_Textestd"></span><span
        class="f_Textestd">individuellement</span><span class="f_Textestd">� a
        �t� coch�e).</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span
        class="f_TitreReleaseNote">Corrections:</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les profils
        p�riph�riques sur les ensembles sont maintenant repris dans la
        description sur les documents.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les suppl�ments
        forfaitaires n�gatifs sont maintenant pris en compte �
        l&rsquo;impression.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p>�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;">

        <table align="center" cellspacing="0" cellpadding="2" border="1"
        style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                3.0.01</span></p>
              </td>
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">16/3/2000</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Texte
        atelier:</span><span class="f_Textestd">Un nouvel onglet dans
        l&rsquo;encodage des commandes </span><span
        class="f_Textestd">(</span><span class="f_Textestd">Txt</span><span
        class="f_Textestd"></span><span class="f_Textestd">Atelier</span><span
        class="f_Textestd">) vous permet de saisir un texte. Ce texte sera
        imprim� sur une feuille s�par�e comportant le num�ro de commande en
        ent�te, en m�me temps que les documents d&rsquo;optimisation; il peut
        aussi �tre imprim� s�par�ment par l&rsquo;onglet </span><span
        class="f_Textestd">Action</span><span class="f_Textestd">.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Adresse de
        livraison sur les factures:</span><span class="f_Textestd">Vous pouvez
        demander � WinPro de ne pas imprimer l&rsquo;adresse de livraison sur
        les facture. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Dans le menu
        Utilitaires, prenez le point Pr�f�rences, choisissez l&rsquo;onglet
        Facture. Dans le bas � droite, une case � cocher vous permet de choisir
        d&rsquo;imprimer ou non l&rsquo;adresse de livraison sur les
        factures.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p>�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;">

        <table align="center" cellspacing="0" cellpadding="2" border="1"
        style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Version
                3.0.00</span></p>
              </td>
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">13/3/2000</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span
        class="f_TitreReleaseNote">Articles:</span><span
        class="f_Textestd">Vous pouvez cr�er des articles � une ou deux
        dimensions. En cochant la case appropri�e dans le nouvel onglet Tarif
        de la fen�tre article, vous pouvez d�cider si l&rsquo;article aura une
        ou deux dimensions. Dans chaque cas, vous pourrez encoder ou calculer
        une grille de prix pour le prix d&rsquo;achat, les prix de revient
        (tarif et courant), le prix de vente. WinPro consid�rera que ces prix
        se rapportent au fournisseur principal. Il n&rsquo;y a actuellement pas
        de possibilit� de grille de prix pour un fournisseur
        secondaire.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Le coefficient de marge
        de l&rsquo;article s&rsquo;applique �galement aux prix dans les
        grilles; de m�me, une seule remise, dans la page Fournisseur Principal,
        a �t� conserv�e et s&rsquo;applique aux prix d&rsquo;achat pour le
        calcul des prix de revient.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Il existe �galement une
        grille pour le prix de vente n�goce. Cette grille peut �tre calcul�e
        sur base d&rsquo;une formule int�grant 5 variables : P1 (prix
        d&rsquo;achat), P2 (prix de revient courant), P3 (prix de revient
        tarif), X1 (coefficient de frais), X2 (taux de change de la devise
        d&rsquo;achat). </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Par d�faut, WinPro
        consid�re que les articles ne poss�dent pas de grille de prix; il
        applique alors les prix d&rsquo;achat, de revient et de vente
        habituels. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Dans les formules de
        param�trage des articles, vous pouvez cr�er les variables suivantes :
        pour les article � 1 dimension, la variable </span><span
        class="f_Variables">Longueur</span><span class="f_Textestd">; pour les
        articles � 2 dimensions, les variables </span><span
        class="f_Variables">LargeurArticle</span><span class="f_Textestd">et
        </span><span class="f_Variables">HauteurArticle</span><span
        class="f_Textestd">. Ces variables seront r�cup�r�es pour d�terminer la
        ou les dimension(s) de l&rsquo;article, et donc son prix; elles seront
        �galement ins�r�es dans la description de l&rsquo;article (� la place
        du param�tre #2# - cf les notes de la version 2.4.1).</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Encodage des
        articles de n�goce:</span><span class="f_Textestd">Cet encodage
        comporte 2 colonnes suppl�mentaires, pouvant contenir les dimensions
        �ventuelles de l&rsquo;article. </span></p>

        <p class="p_Textestd"><span class="f_Textestd">Ces dimensions sont
        ignor�es si l&rsquo;article a �t� d�fini comme n&rsquo;ayant pas de
        dimension; dans le cas contraire, elles seront int�gr�es � la
        description de l&rsquo;article.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Encodage des
        commandes fournisseur:</span><span class="f_Textestd">De m�me, cet
        encodage comporte 2 colonnes suppl�mentaires, utilis�es exactement de
        la m�me mani�re que pour les articles de n�goce.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Prise en compte
        des composants pour le prix de revient et/ou le prix de
        vente:</span><span class="f_Textestd">Vous pouvez dor�navant d�cider,
        pour tous les composants entrant dans le param�trage d&rsquo;une
        fen�tre (profils, articles, main d&rsquo;&oelig;uvre), s&rsquo;il faut
        ou non en tenir compte ind�pendamment pour le prix de vente et le prix
        de revient.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span
        class="f_TitreReleaseNote">Parcloses:</span><span
        class="f_Textestd">Vous pouvez d�cider de prendre en compte ou non une
        table de parclose pour le calcul des prix de vente et des prix de
        revient.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Grilles de
        prix:</span><span class="f_Textestd">Dormants, ouvrants,
        quincailleries, traverses, rehausses, accessoires de ch�ssis,
        a�rateurs, caissons, coulisses, tabliers, panneaux fabriqu�s: Un nouvel
        onglet Grille vous permet d&rsquo;encoder pour chacun de ces �l�ments
        une table de prix de revient. Cette table sera prise en compte pour le
        calcul du prix de vente final. Pour certains �l�ments, vous pouvez
        d�cider sur base de quelles dimensions la grille de prix sera appliqu�e
        : fond de feuillure ouvrant, fond de feuillure dormant, hors tout
        ouvrant, hors tout dormant ou axe de traverses. Vous pouvez aussi
        d�cider si le prix encod� dans la grille est � prendre en compte pour
        le prix de revient et/ou le prix de vente.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Remarques importantes :
        Tous les prix encod�s dans les grilles sont des prix de revient. Les
        marges habituelles sont appliqu�es pour en obtenir les prix de vente
        (marge globale, marge de l&rsquo;�l�ment).</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Les prix des grilles
        peuvent �tre cumul�s aux prix des �l�ments calcul�s.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">De nouvelles variables
        ont �t� cr��es :</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Pour les dormants, ouvrants,
                quincailleries, accessoires, caissons, tabliers, panneaux
                fabriqu�s : les variables </span><span
                class="f_Variables">LargeurHT</span><span class="f_Textestd">et
                </span><span class="f_Variables">HauteurHT</span><span
                class="f_Textestd">contiennent respectivement les largeur et
                hauteur hors tout (c � d d&rsquo;ext�rieur dormant ou axe de
                traverse � ext�rieur dormant, ou axe de traverse) des �l�ments
                �num�r�s ci-dessus.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd">Pour les traverses, rehausses,
                a�rateurs, coulisses : la variable </span><span
                class="f_Variables">DimensionHT</span><span
                class="f_Textestd">contient la dimension hors tout de
                l&rsquo;�l�ment concern�.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Dimensions des
        ch�ssis:</span><span class="f_Textestd">La valeur maximum du rayon
        d&rsquo;un cintre quelconque a �t� augment�e. Il arrive en effet que le
        rayon d�passe 10 m.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Remises
        client:</span><span class="f_Textestd">Vous pouvez encoder maintenant 2
        remises par client; ces remises sont cumulatives. WinPro va
        d&rsquo;abord d�duire la remise principale; ensuite, sur le montant
        remise d�duite, WinPro va d�duire la deuxi�me remise.</span></p>
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
      <td align="left"><p>�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;">

        <table align="center" cellspacing="0" cellpadding="2" border="1"
        style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Versie
                3.0.02</span></p>
              </td>
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">20/3/2000</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Supplement per
        systeem :</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Voor ieder systeem kan
        een forfaitair supplement bepaald worden. Dit supplement wordt op het
        volledig raam toegepast; beglazing, verluchtingsrooster inbegrepen. Dit
        supplement wordt niet op het rolluik toegepast.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Daardoor kan een
        forfaitaire verhoging op het uitgegeven tarief toegepast worden. De
        prijzen worden dan verhoogd zonder een nieuw tarief af te
        drukken.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Om het supplement te
        bepalen neemt U het menu Gegevens | Systemen ; Daar ziet U � Marge �
        waar de toe te passen multiplicatorco�ffici�nt moet ingevoerd worden.
        (bv. Om een verhoging van 2% schrijft U 1.02). 5 decimalen zijn
        mogelijk. Als niets wordt bepaald zal er geen supplement gerekend
        worden.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"></span></p>

        <p style="color:#400040"><span class="f_Textestd"
        style="color: #ff0000;">Opgelet !!! Dit supplement is slechts van
        toepassing op tariefprijzen en NIET op lopende prijzen. Indien een werk
        in lopende prijzen wordt berekend zal WinPro de zelfde prijzen als in
        vorige versie berekenen !!!</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Tabblad Artikels
        en Profielen in klantbestellingen :</span><span
        class="f_Textestd"></span><span class="f_Textestd">Naast de kolom �
        code � bestaat nu een kolom met velden die kunnen aangekruist worden.
        Deze kolom is niet veranderbaar. Daarmee wordt bepaald als een artikel
        of een profiel slechts voor een zekere klantbestelling bestemd is. In
        het bestand Gegevens | Artikels werd dan het veld � Afzonderlijk
        bestellen� gekozen..</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span
        class="f_TitreReleaseNote">Correcties:</span></p>

        <p class="p_Textestd" style="margin-left:2em;"><span
        class="f_Textestd">oDe bijprofielen zijn nu in de beschrijving op de
        documenten vermeld.</span></p>

        <p class="p_Textestd" style="margin-left:2em;"><span
        class="f_Textestd">oDe negatieve forfaitaire supplementen verschijnen
        bij de afdruk.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"></span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p>�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;">

        <table align="center" cellspacing="0" cellpadding="2" border="1"
        style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Versie
                3.0.01</span></p>
              </td>
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">16/3/2000</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Tekst fabricatie
        :</span><span class="f_Textestd"></span><span class="f_Textestd">Een
        nieuwe tabblad bij het coderen van bestellingen (Tekst Fabricatie)
        geeft U de mogelijkheid om een tekst te plaatsen. De tekst zal op een
        afzonderlijke blad vermeld worden met het bestelnummer als opschrift en
        met de documenten voor optimalisatie afgedrukt. Met de tab Acties kan
        ook de tekst afgedrukt worden.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Leveringsadres
        op facturen:</span><span class="f_Textestd">Het leveringsadres zal niet
        op de facturen verschijnen. In het menu Instelling, kiest U Kenmerken
        document, Factuur. Beneden rechts hebt U de mogelijkheid het
        leveringsadres op de factuur af te drukken of niet</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p>�</p>

        <div
        style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 8px;">

        <table align="center" cellspacing="0" cellpadding="2" border="1"
        style="border: solid 2px #808080; border-spacing:0px; border-collapse: collapse;">
          <tbody>
            <tr valign="top" align="left">
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p
                style="margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">Versie
                3.0.00</span></p>
              </td>
              <td width="303" bgcolor="#d8ffff"
              style="width: 303px; background-color: #d8ffff; border: solid 1px ;"><p
                style="text-align: right; margin: 4px 0px 4px 0px;"><span
                style="font-size: 16pt; font-family: 'Tahoma'; color: #000000;">13/3/2000</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Artikels
        :</span><span class="f_Textestd">Artikels met ��n of twee afmetingen
        kunnen aangemaakt worden in het venster Artikels, Tarief. In ieder
        geval kan een prijstabel voor inkoopprijs, kostprijs (tarief of lopende
        prijzen), verkoopsprijs ingevoerd of berekend worden. Voor WinPro gaat
        het om prijzen van de hoofdleverancier. Het is nu onmogelijk een
        prijstabel voor secundaire leveranciers te maken.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">De margeco�ffici�nt is
        van toepassing op de prijzen van de tabellen. E�n enkel korting wordt
        in de blad Hoofdleverancier bewaard en wordt op de inkoopprijs
        toegepast om de kostprijzen te berekenen.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Er bestaat ook een tabel
        voor de verkoopsprijs. De prijzen zijn berekend vanaf een formule met 5
        variabelen : P1 (inkoopprijs), P2 (lopende kostprijs), P3 (tarief
        kostprijs), X1 (kostco�ffici�nt), X2 (wisselkoers van de
        inkoopdevies).</span></p>

        <p>Standaard beschouwt WinPro dat de artikels geen prijstabel hebben.
        De gewone inkoopprijzen, kostprijzen en verkoopsprijzen worden dan
        toegepast</p>

        <p class="p_Textestd"><span class="f_Textestd">In de gebruikte formules
        om de parameters van artikels in te voeren hebt U de mogelijkheid
        volgende variabelen aan te maken :</span></p>

        <p class="p_Textestd" style="margin-left:2em;"><span
        class="f_Textestd">-de variabele <strong style="color:#0000ff"><span
        style="color:#0000ff">Longeur</span> (Lengte )</strong> voor artikels
        met een maat</span></p>

        <p class="p_Textestd" style="margin-left:2em;"><span
        class="f_Textestd">-de variabelen <strong><span
        style="color:#0000ff">LargeurArticle (ArtikelBreedte)</span></strong>
        en <strong><span style="color:#0000ff">HauteurArticle
        (ArtikelHoogte)</span></strong> voor artikels met twee
        afmetingen</span></p>

        <p class="p_Textestd"><span class="f_Textestd">Deze variabelen zullen
        gebruikt worden om de afmeting(en) van het artikel en de prijs ervan te
        bepalen. Deze zullen ook in de beschrijving van het artikel (in plaats
        van parameter #2# - zie notes over de versie 2.4.1)vermeld
        worden.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"></span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Het coderen van
        verkoopsartikels :</span><span class="f_Textestd">Twee extra kolommen
        kunnen de eventuele maten van het artikel bevatten. Er wordt geen
        rekening gehouden met deze maten als het artikel &ldquo;zonder
        maat&rdquo; wordt aangemaakt. In tegengesteld geval zullen de maten in
        de beschrijving van het artikel verschijnen.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Het coderen van
        bestelling bestemd voor de leverancier :</span><span
        class="f_Textestd">Er zijn ook twee extra kolommen die op de zelfde
        manier als voor de verkoopsartikels kunnen gebruikt worden. .</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Rekening houden
        met de componenten om de kostprijs en/of verkoopsprijs te
        berekenen:</span><span class="f_Textestd">Om de verkoopsprijs of
        kostprijs te berekenen kunt U beslissen al of niet rekening te houden
        met ieder component (profiel, artikels, arbeidsloon) die bij de invoer
        van parameters van een raam gebruikt wordt</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Glaslatten
        :</span><span class="f_Textestd">U kunt beslissen al of niet rekening
        te houden met een tabel van glaslatten om de verkoopsprijzen of
        kostprijzen te berekenen. .</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span
        class="f_TitreReleaseNote">Prijstabellen:</span><span
        class="f_Textestd">Kaders, vleugels, beslag, tussenstijlen, ophogen,
        toebehoren van ramen, verluchtingsroosters, kasten, geleiders,
        rolluikbladen, vervaardigde platen : Voor al deze elementen kan een
        tabel van kostprijs ingevoerd worden met de nieuwe tab Tabel. Om de
        laatste verkoopsprijs te berekenen zal met deze tabel rekening gehouden
        worden. Voor zekere elementen kunt U de maten kiezen waarop de
        prijstabel zal toegepast worden : sponning vleugel, sponning kader,
        totale maten vleugel, totale maten kader of assen van stijlen. U hebt
        ook de mogelijkheid te bepalen met de in de tabel vermelde prijs
        rekening te houden of niet om de kostprijs en/of verkoopsprijs te
        berekenen.</span></p>

        <p class="p_Textestd"><span class="f_Textestd"></span></p>

        <p class="p_Textestd"><span class="f_Textestd">Belangrijke opmerkingen
        :</span></p>

        <p class="p_Textestd"><span class="f_Textestd">&bull;Al de in de tabel
        vermelde prijzen zijn kostprijzen. De gewone marges worden toegepast om
        de verkoopsprijzen te berekenen. (globale marge, marge van het
        element)</span></p>

        <p class="p_Textestd"><span class="f_Textestd">&bull;De prijzen van
        tabellen kunnen toegevoegd worden aan de berekende prijzen van
        elementen.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">&bull;Er bestaan nu
        nieuwe variabelen :</span></p>

        <p class="p_Textestd" style="margin-left:2em;"><span
        class="f_Textestd">oVoor de kaders, vleugels, beslag, toebehoren,
        kasten, rolluikbladen, vervaardigde panelen : De variabelen
        <strong><span style="color:#0000ff">LargeurHT (BreedteHT)</span><span
        class="f_Textestd"></span></strong></span><span
        class="f_Textestd"><strong><span class="f_Textestd">en </span><span
        class="f_Variables">HauteurHT (HoogteHT)</span></strong> bevatten de
        totale breedte en hoogte (d.w.z. Van buiten kader of assen van stijlen
        tot buiten kader of assen van stijlen) van hier boven vermelde
        elementen.</span></p>

        <p class="p_Textestd" style="margin-left:2em;"><span
        class="f_Textestd">oVoor stijlen, ophogen, verluchters, geleiders : de
        variabele <span style="color:#0000ff"><strong>DimensionHT
        (MaatHT)</strong></span> bevat de totale afmeting van het bepaalde
        element</span></p>

        <p class="p_Textestd"><span class="f_Textestd"></span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"></td>
              <td></td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 48px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"></td>
              <td><p>Met al hierboven vermelde nieuwigheden is het met WinPro
                nog gemakkelijker en nauwkeuriger om de verkoopsprijs te
                bereken. U hebt dus de mogelijkheid werkelijke en virtuele
                artikels (met 0, 1 of 2 afmetingen) en prijzentabellen (op
                verkoopsprijs of kostprijs) te verbinden.</p>
              </td>
            </tr>
          </tbody>
        </table>
        </div>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote">Maten van
        ramen:</span><span class="f_Textestd">De maximale straalwaarde van een
        boog wordt vergroot. Soms is de straal groter dan 10m.</span></p>

        <p class="p_Textestd"><span class="f_Textestd">�</span></p>

        <p class="p_Textestd"><span class="f_TitreReleaseNote"></span><span
        class="f_Textestd"><strong style="font-size: 12pt">Kortingen van de
        klant :</strong> Het is nu mogelijk twee verschillende kortingen per
        klant in te voeren. WinPro zal ten eerste de voornaamste korting
        aftrekken. Op het gekregen bedrag zal WinPro de tweede korting
        toepassen.</span></p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
