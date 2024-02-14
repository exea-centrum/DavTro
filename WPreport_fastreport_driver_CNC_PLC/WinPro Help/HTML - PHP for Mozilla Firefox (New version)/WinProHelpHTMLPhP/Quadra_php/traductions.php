<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Translations","Traductions"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?traductions.php"; }
else { parent.quicksync('a2.8.1'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Traductions</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="XStrings,Traduction,Langue" />
   <meta http-equiv="Content-Type" content="text/php; charset=ISO-8859-1" />
   <meta http-equiv="Content-Style-Type" content="text/css" />
   <link type="text/css" href="default.css" rel="stylesheet" />
</head>
<body style="margin: 0px 0px 0px 0px; background: #FFFFFF;" onload=" AddTitleAndLangFlags();highlight();">
<div id="hmpopupDiv" style="visibility:hidden; position:absolute; z-index:1000;"></div>


<table width="100%" border="0" cellspacing="0" cellpadding="5" bgcolor="#FF8000">
  <tr valign="middle">
    <td align="left">
      <p class="p_Heading1"><span id="titlepage" class="f_Heading1"></span></p>
    </td>
	<td align="center">
     <div id="langflags"></div>
    </td>
    </td>
    <td align="right">
     <span style="font-size: 9pt">
     <a href="introduction.php">Top</a>&nbsp;
     <a href="langues.php">Previous</a>&nbsp;
     <a href="general.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>The translation tool for the database has been redesigned. All the data translations are now centralized into the same dialog, and are grouped by type (article, outer frame, �). This makes the translation process quicker and easier, also for question translations that are also available into this dialog. </p>
<p>The storage mode for translation strings has also been modified, as those strings are now recorded into separated ASCII files, loaded into memory at the program' startup. The old translation tables are then out of date (traduct.dbf, tradques.dbf et tradselq.dbf). They are kept as is, but will not be updated by WinPro anymore. </p>
<p>This new mode is much more efficient as everything is loaded into memory and available as soon as the program has started, then you can work safely. Nevertheless, when a translation is updated from a given workstation, the other machine should restart the program for the changes to be available.</p>
<p>The access to the translation screen is authorized for users having the 'Translations' access right set into the user file.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 12px;"><span style="font-weight: bold; text-decoration: underline;">Note</span><span style="text-decoration: underline;">:</span></p>
<p style="margin: 0px 0px 0px 12px;">Concerning the articles, a '<span style="font-weight: bold;">To translate</span>' checkbox is available into the "Description" tab. Only articles with this box checked will be shown into the translation screen, in order to avoid a too important list on screen. Alternatively a similar checkbox exists at <span style="font-weight: bold;">article category </span>level, involving the whole articles from this category to be loaded into the translation screen. When the version is deployed, all articles with an existing translation will be automatically checked.</p>
</td>
</tr>
</table>
</div>
<p style="text-align: center;"><span class="f_Interligne">&nbsp;</span></p>
<p style="text-align: center;"><img src="img/clip0007eng.jpg" width="883" height="583" border="0" alt="clip0007"></p>
<p style="text-align: center;">&nbsp;</p>
<p>Moreover, an external software labelled <span style="font-style: italic;">xStrings.exe</span> allows now to create your own custom languages. This tool also allows to translate the terms from the program interface into a more appropriate language according a country or a province. You might for instance replace the string "Masonry" used within the program interface and printed document with the term "Wall".</p>
<p>See the xString program screenshot below.</p>
<p>&nbsp;</p>
<p style="text-align: center;"><img src="img/clip0009eng.jpg" width="842" height="641" border="0" alt="clip0009"></p>
<p style="text-align: center;"><span style="font-size: 8pt; font-family: 'MS Sans Serif'; color: #000000;">&nbsp;</span></p>
<p>Languages with a code between brackets are for internal use nly, you cannot modify their contents.</p>
<p>Into above example, a language labelled "Commercial" has been added. Terms of the interface and documents are then avalable to translate using xString module, but this also create an entry for a new language into the translation dialog for the database seen first above, available using the <img src="img/clip0353.gif" width="22" height="20" border="0" alt="clip0353"><span style="font-size: 8pt; font-family: 'MS Sans Serif'; color: #000000;"> button.</span></p>
<p>&nbsp;</p>
<p>You may customize the properties of the different languages used through the menu <span style="font-weight: bold;">Tools - Preferences - Language </span>tab.</p>
<p style="text-align: center;"><span style="font-size: 8pt; font-family: 'MS Sans Serif'; color: #000000;">&nbsp;</span></p>
<p style="text-align: center;"><img src="img/clip0011eng.jpg" width="622" height="165" border="0" alt="clip0011"></p>
<p style="text-align: center;"><span style="font-size: 8pt; font-family: 'MS Sans Serif'; color: #000000;">&nbsp;</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span style="font-weight: bold;">Code</span> : Language codes between brackets are for WinPro's internal use only. The user defined languages created with xStrings.exe have no brackets.</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span style="font-weight: bold;">Active </span>: A language is enabled when you need to manage translations for it. Translations done for disabled languages are not lost, but will not be available into WinPro.</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span style="font-weight: bold;">Hidden </span>: At the program startup, you may choose the appropriate language you need into the login box, among a combo of displayed (not hidden) languages. You may change the language code into the list at any time using the second tool bar of WinPro.</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span style="font-weight: bold;">Description</span> : Description of the language.</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span style="font-weight: bold;">&lt;-- </span>: For languages written and read from right to left, this box should be checked.</td></tr></table></div><p style="text-align: center;">&nbsp;</p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>L'interface de traduction de la base de donn�es a �t� remani�e. Toutes ces traductions sont maintenant accessibles directement depuis un seul �cran centralis�, o� elles sont regroup�es par type (article, dormant, �). Cela rend plus simple et rapide les traductions en s�rie. Les traductions des questions �ventuelles sont �galement accessibles depuis ce m�me �cran. </p>
<p>Le mode de stockage des traductions est �galement modifi�: les traductions sont maintenant stock�es dans des fichiers texte (format ASCII), qui sont charg�s en m�moire d�s le d�marrage du programme. Les anciennes tables de traduction (traduct.dbf, tradques.dbf et tradselq.dbf) sont donc obsol�tes. Elles sont maintenues en l'�tat, mais ne seront plus mises � jour par WinPro. </p>
<p>Ce nouveau mode de stockage offre de bien meilleures performances que l'ancien, puisque tout est en m�moire d�s le d�marrage. De plus, cela permet de travailler sur les traductions sans contrainte et sans blocage. Par contre, si les traductions sont mises � jour depuis une station de travail, les autres stations de travail devront relancer WinPro pour en b�n�ficier.</p>
<p>L'acc�s � l'�cran de traduction n'est autoris� que pour les utilisateurs ayant le droit 'Traductions', d�fini dans la fiche utilisateur.</p>
<p class="p_Interligne"><span class="f_Interligne">&nbsp;</span></p>
<div style="text-align: center; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table align="center" cellspacing="0" cellpadding="0" bgcolor="#bfd7bf" border="0" style="background-color: #bfd7bf; border: none border-spacing:0px; border-collapse: collapse;">
<tr valign="top" align="left">
<td width="605" style="width: 605px; border: solid 1px #000000;"><p style="margin: 0px 0px 0px 12px;"><span style="font-weight: bold; text-decoration: underline;">Remarque</span><span style="text-decoration: underline;">:</span></p>
<p style="margin: 0px 0px 0px 12px;">Pour les articles, une case � cocher '<span style="font-weight: bold;">A traduire</span>' est pr�sente dans l'onglet "Description". Seuls les articles pour lesquels cette case a �t� coch�e seront pr�sent�s dans l'�cran de traduction, ceci afin d'�viter de surcharger la liste. Alternativement, il existe aussi une case � cocher �quivalente dans les <span style="font-weight: bold;">cat�gories d'articles</span>; si vous la cochez, tous les articles de cette cat�gorie seront charg�s. A la mise en place de cette nouvelle version, tous les articles pour lesquels une traduction existe d�j� seront automatiquement coch�s</p>
</td>
</tr>
</table>
</div>
<p style="text-align: center;"><span class="f_Interligne">&nbsp;</span></p>
<p style="text-align: center;"><img src="img/clip0344.gif" width="789" height="555" border="0" alt="clip0344"></p>
<p style="text-align: center;">&nbsp;</p>
<p>De plus, un logiciel appel� <span style="font-style: italic;">xStrings.exe</span> vous permet d'ajouter vos propres langues. Cet outil vous permet �galement de traduire le fran�ais standard de l'ex�cutable Winpro utilisant parfois une terminologie inad�quate en fonction des r�gions. Vous pourriez, par exemple, traduire le terme "Mauclair", se trouvant dans diff�rentes fen�tres de Winpro, par "Battement".</p>
<p>Voici un aper�u.</p>
<p>&nbsp;</p>
<p style="text-align: center;"><img src="img/clip0352.gif" width="827" height="596" border="0" alt="Clip0352"></p>
<p style="text-align: center;"><span style="font-size: 8pt; font-family: 'MS Sans Serif'; color: #000000;">&nbsp;</span></p>
<p>Les langues dont le code est entre parenth�ses appartiennent � Winpro. Il vous est impossible de modifier leur contenu.</p>
<p>Dans l'exemple ci-dessus, nous avons ajout� la langue "Fran�ais" qui permet de cr�er des traductions pour l'ex�cutable via xStrings.exe, mais �galement des traductions pour la base de donn�e (articles, profils, questions, ...) Ces derni�res seront alors cr��es � partir de l'utilitaire de traduction int�gr� � Winpro (le bouton �tant symbolis� par le drapeau europ�en)<img src="img/clip0353.gif" width="16" height="16" border="0" alt="Clip0353"></p>
<p>&nbsp;</p>
<p>Via le menu <span style="font-weight: bold;">Utilitaires - Pr�f�rences - </span>onglet<span style="font-weight: bold;"> Langue </span>nous avons la possibilit� de consulter et de modifier les propri�t�s de chacune des langue.</p>
<p>&nbsp;</p>
<p style="text-align: center;"><img src="img/clip0354.gif" width="623" height="171" border="0" alt="Clip0354"></p>
<p style="text-align: center;"><span style="font-size: 8pt; font-family: 'MS Sans Serif'; color: #000000;">&nbsp;</span></p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span style="font-weight: bold;">Code</span> : Les langues entre parenth�ses sont propres � Winpro. Les langues que le param�treur cr�e � l'aide du programme xStrings.exe n'ont pas de parenth�ses.</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span style="font-weight: bold;">Actif </span>: Une langue active est une langue pour laquelle nous souhaitons g�rer des traductions. Les traductions d'une langue d�sactiv�e ne sont pas perdues, par contre cette langue devient inaccessible ainsi que ses traductions.</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span style="font-weight: bold;">Cach�e </span>: Lorsque l'on ex�cute Winpro, une boite de dialogue vous permet de saisir votre login, mot de passe et de choisir votre langue d'interface. Seules les langues non cach�es sont alors disponibles. A tout moment, vous pouvez modifier la langue de cette interface via la seconde barre d'outils Winpro.</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span style="font-weight: bold;">Description</span> : Description de la langue </td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td><span style="font-weight: bold;">&lt;-- </span>: Pour les langues dont le sens de lecture va de droite � gauche, il est n�cessaire de cocher cette case.</td></tr></table></div><p style="text-align: center;">&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
