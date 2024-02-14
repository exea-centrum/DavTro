<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Texts","Textes"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utilpreftextes.php"; }
else { parent.quicksync('a9.1.7'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Textes</title>
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
        href="utilprefnumerotations.php">Previous</a>  <a
        href="utilprefetcomfou.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This tab is designed to record pre-formatted text for start and/or end of printed customer documents, 
	  into any <a href="utilpreflangues.php">language</a> enabled in the program. Those texts are selected using their 
	  sequence numbers through the <span style="font-style: italic;">Texts</span> tab of the customer order or quotation, and 
	  remain modifiable into the order.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0711eng.jpg" width="669"
        height="406" border="0" alt="clip0711eng"></p>

        <p>This dialog is divided into 5 areas.</p>

        <p> </p>

        <p><span style="font-weight: bold;">The text sequence number on the left</span> is suitable to create a text with 
		this sequence number. Up to 100 textes to be defined by document type, language and text location start and/or end.</p>

        <p> </p>

        <p><span style="font-weight: bold;">The central area for text creation</span> is suitable to input a text for the 
		selected sequence number. Layout functions are usable here, as detailled below. Use CTRL+ENTER tu insert a line break.</p>

        <p> </p>

        <p><span style="font-weight: bold;">Underneath the central area for text input, the list of tabs</span> is suitable to 
		input a text by language enabled within WinPro. Texts are recorded independantly for each language, under the 
		sequence number selected into the <span style="font-weight: bold;">left column</span>.</p>

        <p> </p>

        <p><span style="font-weight: bold;">Beneath the dialog on the left, the list of tabs</span> is suitable to record a text 
		by document type among quotation, confirmation, delivery split and invoice. Texts are recorded independantly for each
		language, under the sequence number selected into the <span style="font-weight: bold;">left column</span>.</p>

        <p> </p>

        <p><span style="font-weight: bold;">Beneath the dialog on the right, both tabs</span> are suitable to record a text 
		for header (start) or footer (end) by document type. Texts are recorded independantly for each language, under the 
		sequence number selected into the <span style="font-weight: bold;">left column</span>.</p>

        <p> </p>

        <p><span style="font-weight: bold;">The <img src="img/clip0711beng.jpg" width="76" height="21" border="0"
        alt="clip0711beng"> button</span> allows exporting the texts created under text files, into a 
		<span style="font-weight: bold;">OrderText</span> subdirectory. To import texts into the program, just create a 
		<span style="font-weight: bold;">data</span> directory (for mySQL database mainly) if not exists, or copy files into 
		this <span style="font-weight: bold;">data</span> directory and restart the program. You will be asked at start up to 
		import existing text files, and a warning displays that files are deleted once imported.</p>

        <p> </p>

        <p><span style="font-style: italic; text-decoration: underline;">Text formatting features:</span></p>

        <p><span
        style="font-style: italic; text-decoration: underline;"> </span></p>

        <p>WinPro offers various formatting tools for your customized textx for documents. You may use standard formatting 
		functionalities using the toolbar on the left of the main pane, or through the <span style="font-weight: bold;">
		Format</span> menu. Both menu and toolbar are enabled only once the user is positionned into a rich text field.</p>

        <p> </p>

        <p><img src="img/clip0712.gif" width="21" height="23" border="0"
        alt="clip0712">        menu <span style="font-weight: bold;">Format |
        Bold</span>:               Bold format applied to selected text.</p>

        <p><img src="img/clip0713.gif" width="21" height="21" border="0"
        alt="clip0713">        menu <span style="font-weight: bold;">Format |
        Italics</span>:             Italic format for selected text.</p>

        <p><img src="img/clip0714.gif" width="22" height="24" border="0"
        alt="clip0714">        menu <span style="font-weight: bold;">Format |
        Underline</span>:       Underlined format for selected text.</p>

        <p><img src="img/clip0715.gif" width="23" height="21" border="0"
        alt="clip0715">        menu <span style="font-weight: bold;">Format |
        Strikeout</span>:        Strikeout format for selected text.</p>

        <p> </p>

        <p><img src="img/clip0718.gif" width="23" height="24" border="0"
        alt="clip0718">        menu <span style="font-weight: bold;">Format |
        Font</span>:               This feature gives access to the standard Windows font selection dialog, for replacement of the 
		default font.</p>

        <p><img src="img/clip0719.gif" width="23" height="23" border="0"
        alt="clip0719">        menu <span style="font-weight: bold;">Format |
        Larger</span>:            Increases font size.</p>

        <p><img src="img/clip0720.gif" width="23" height="23" border="0"
        alt="clip0720">        menu <span style="font-weight: bold;">Format |
        Smaller</span>:          Decreases font size.</p>

        <p> </p>

        <p><img src="img/clip0722.gif" width="23" height="23" border="0"
        alt="clip0722">        menu <span style="font-weight: bold;">Format |
        Align left</span>:          Left align applied to selected text.</p>

        <p><img src="img/clip0723.gif" width="25" height="24" border="0"
        alt="clip0723">        menu <span style="font-weight: bold;">Format |
        Align center</span>:    Center align applied to selected text.</p>

        <p><img src="img/clip0724.gif" width="24" height="25" border="0"
        alt="clip0724">        menu <span style="font-weight: bold;">Format |
        Align right</span>:       Right align applied to selected text.</p>

        <p> </p>

        <p><img src="img/clip0725.gif" width="25" height="23" border="0"
        alt="clip0725">        menu <span style="font-weight: bold;">Format |
        Unindent left</span>:   Left unindent applied to selected text.</p>

        <p><img src="img/clip0726.gif" width="26" height="25" border="0"
        alt="clip0726">        menu <span style="font-weight: bold;">Format |
        Indent left</span>:       Left indent applied to selected text.</p>

        <p> </p>

        <p><img src="img/clip0727.gif" width="21" height="25" border="0"
        alt="clip0727">        menu <span style="font-weight: bold;">Format |
		Unindent right</span>:  Right unindent applied to selected text.</p>

        <p><img src="img/clip0729.gif" width="23" height="26" border="0"
        alt="clip0729">        menu <span style="font-weight: bold;">Format |
        Indent right</span>:      Right indent applied to selected text.</p>

        <p> </p>

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
      <td align="left"><p>Cet onglet vous permet d'enregistrer des textes
        pré-formatés pour le début et/ou la fin des documents client imprimés,
        dans toutes les <a href="utilpreflangues.php">langues</a> autorisées
        dans WinPro. Ces textes pourront être sélectionnés par leur numéro via
        l'onglet <span style="font-style: italic;">Textes</span> de la commande
        ou du devis, et pourront y être modifiés si nécessaire.</p>

        <p> </p>

        <p style="text-align: center;"><img src="img/clip0711fra.jpg" width="658"
        height="397" border="0" alt="clip0711fra"></p>

        <p>Ce dialogue de divise 5 zones.</p>

        <p> </p>

        <p><span style="font-weight: bold;">La colonne de numéro de texte à
        gauche </span>permet d'enregistrer un texte donné sur le numéro défini
        dans ce combo. Jusqu'à 100 textes par type de document, langue et
        position du texte.</p>

        <p> </p>

        <p><span style="font-weight: bold;">La zone de saisie de texte au
        centre </span>vous permet de saisir le texte à enregistrer sous le
        numéro sélectionné. Vous pouvez utiliser les fonctions de mise en forme
        du texte détaillées plus bas. Tapez CTRL+ENTER pour aller à la
        ligne.</p>

        <p> </p>

        <p><span style="font-weight: bold;">Sous la zone de saisie de texte, la
        série d'onglets </span>vous permet d'enregistrer un texte par langue
        autorisée dans WinPro. Les textes sont enregistrés indépendamment pour
        chaque langue, sous le numéro d'ordre sélectionné dans la <span
        style="font-weight: bold;">colonne gauche</span>.</p>

        <p> </p>

        <p><span style="font-weight: bold;">En bas du dialogue à gauche, la
        série d'onglets </span>vous permet d'enregistrer un texte par type de
        document client, devis, confirmation, note d'envoi ou facture. Les
        textes sont enregistrés indépendamment pour chaque document, sous le
        numéro d'ordre sélectionné dans la <span
        style="font-weight: bold;">colonne gauche</span>.</p>

        <p> </p>

        <p><span style="font-weight: bold;">En bas du dialogue à droite, les 2
        onglets </span>vous permettent d'enregistrer un texte d'entête (Début)
        ou de bas de page (Fin) par document. Les textes sont enregistrés
        indépendamment par position dans la page, sous le numéro d'ordre
        sélectionné dans la <span style="font-weight: bold;">colonne
        gauche</span>.</p>

        <p> </p>

        <p><span style="font-weight: bold;">Le bouton <img src="img/clip0711bfra.jpg" width="76" height="20" border="0"
        alt="clip0711bfra"></span> permet d'exporter les textes créés dans des fichiers textes, sous le sous-répertoire  
		<span style="font-weight: bold;">OrderText</span> du répertoire de base. Pour importer ces fichiers en tant que textes 
		dans WinPro, vous pouvez créer un répertoire <span style="font-weight: bold;">data</span> (pour les bases mySQL) 
		s'il n'existe pas, ou encore copier les fichiers dans ce dossier <span style="font-weight: bold;">data</span> et 
		relancer le programme. WinPro demandera au lancement s'il faut importer les fichiers textes trouvés, et 
		préviendra que les fichiers seront supprimés après importation.</p>

        <p> </p>

        <p><span style="font-style: italic; text-decoration: underline;">Mise
        en forme du texte:</span></p>

        <p><span
        style="font-style: italic; text-decoration: underline;"> </span></p>

        <p>WinPro vous permet de créer des textes avec des outils de mise en
        forme. La barre de bouton située à gauche de la fenêtre principale
        offre les fonctionnalités de mise en page classiques d'un éditeur de
        texte de base. Ces mêmes fonctions sont également accessibles depuis le
        menu <span style="font-weight: bold;">Format</span>. Le menu, tout
        comme la barre d'outils, ne sont accessibles que si vous êtes dans une
        zone de texte riche qui peut être formaté.</p>

        <p> </p>

        <p><img src="img/clip0712.gif" width="21" height="23" border="0"
        alt="clip0712">        menu <span style="font-weight: bold;">Format |
        Gras</span>:        Mise en gras du texte en surbrillance.</p>

        <p><img src="img/clip0713.gif" width="21" height="21" border="0"
        alt="clip0713">        menu <span style="font-weight: bold;">Format |
        Italique</span>:        Mise en italique du texte en surbrillance.</p>

        <p><img src="img/clip0714.gif" width="22" height="24" border="0"
        alt="clip0714">        menu <span style="font-weight: bold;">Format |
        Souligné</span>:        Soulignement du texte en surbrillance.</p>

        <p><img src="img/clip0715.gif" width="23" height="21" border="0"
        alt="clip0715">        menu <span style="font-weight: bold;">Format |
        Barré</span>:        Le texte en surbrillance sera barré.</p>

        <p> </p>

        <p><img src="img/clip0718.gif" width="23" height="24" border="0"
        alt="clip0718">        menu <span style="font-weight: bold;">Format |
        Fonte</span>:        Dialogue de modification de police de caractères
        standard de Windows, pour choisir une autre police par défaut pour vos
        textes.</p>

        <p><img src="img/clip0719.gif" width="23" height="23" border="0"
        alt="clip0719">        menu <span style="font-weight: bold;">Format |
        Agrandir</span>:        Agrandir la taille de la police de
        caractères.</p>

        <p><img src="img/clip0720.gif" width="23" height="23" border="0"
        alt="clip0720">        menu <span style="font-weight: bold;">Format |
        Réduire</span>:        Réduire la taille de la police de caractères.</p>

        <p> </p>

        <p><img src="img/clip0722.gif" width="23" height="23" border="0"
        alt="clip0722">        menu <span style="font-weight: bold;">Format |
        Aligner à gauche</span>:        Aligner le texte à gauche de la
        zone.</p>

        <p><img src="img/clip0723.gif" width="25" height="24" border="0"
        alt="clip0723">        menu <span style="font-weight: bold;">Format |
        Aligner au centre</span>:        Aligner le texte au centre de la
        zone.</p>

        <p><img src="img/clip0724.gif" width="24" height="25" border="0"
        alt="clip0724">        menu <span style="font-weight: bold;">Format |
        Aligner à droite        </span>:        Aligner le texte à droite de la
        zone.</p>

        <p> </p>

        <p><img src="img/clip0725.gif" width="25" height="23" border="0"
        alt="clip0725">        menu <span style="font-weight: bold;">Format |
        Réduire la marge gauche</span>:        Réduire la marge gauche de la
        zone de texte.</p>

        <p><img src="img/clip0726.gif" width="26" height="25" border="0"
        alt="clip0726">        menu <span style="font-weight: bold;">Format |
        Agrandir la marge gauche</span>:        Agrandir la marge gauche de la
        zone de texte.</p>

        <p> </p>

        <p><img src="img/clip0727.gif" width="21" height="25" border="0"
        alt="clip0727">        menu <span style="font-weight: bold;">Format |
        Réduire la marge droite</span>:        Réduire la marge droite de la
        zone de texte.</p>

        <p><img src="img/clip0729.gif" width="23" height="26" border="0"
        alt="clip0729">        menu <span style="font-weight: bold;">Format |
        Agrandir la marge droite</span>:        Agrandir la marge droite de la
        zone de texte.</p>

        <p> </p>

        <p> </p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
