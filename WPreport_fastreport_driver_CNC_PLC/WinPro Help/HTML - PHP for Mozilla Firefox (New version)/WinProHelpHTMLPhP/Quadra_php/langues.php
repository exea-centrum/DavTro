<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
<script type="text/JavaScript" src="wplang.js"></script>
<script type="text/JavaScript"> 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Languages","Langues"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0)  { top.location.href="index.php?langues.php"; }
else { parent.quicksync('a2.7.2'); }
//-->
</script>
<script type="text/javascript" src="highlight.js"></script>
   <title>Langues</title>
   <meta name="generator" content="Help &amp; Manual" />
   <meta name="keywords" content="Langue,Traduction" />
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
     <a href="indentation_style.php">Previous</a>&nbsp;
     <a href="traductions.php">Next</a>
     </span>
    </td>
  </tr>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>WinPro gives now the choice to display the rule codes into different languages. 4 languages available for instructions (french, english, spanish, polish), and 6 languages for variables (french, english, nederlands, spanish, german, polish). You may extend by yourself the number of languages available for variables, we will compile those translations and supply the files according availability. </p>
<p>Choose the language with a right click into a text editor area of a formulae. A context menu appears, showing entries for modifying the variables and instructions languages independantely. This selection is stored by user The formulas are stored into a neutral format that can be easily interpreted into any language.</p>
<p>Language for instructions may also be modified, following the procedure described into the release note 7.0.3. Anyway, please take care to respect the variable name composition rules as usually.</p>
<p>You may define the default language into <span style="font-style: italic;">WinPro.ini</span> file or <span style="font-style: italic;">settings </span>table, adding or modifying the below keys into <span class="f_Winproini" style="color: #000000;">[Interpretor]</span> section :</p>
<p style="margin: 0px 0px 0px 45px;"><span class="f_Winproini">Language=xxx</span><span class="f_Variables"> &nbsp; ; xxx represents the instruction language code, </span></p>
<p style="margin: 0px 0px 0px 45px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Variables"> &nbsp; ; with values Fra, Eng, Esp or Pol for french, english, </span></p>
<p style="margin: 0px 0px 0px 45px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Variables"> &nbsp; ; spanish or polish language respectively, </span></p>
<p style="margin: 0px 0px 0px 45px;"><span class="f_Winproini">Variable=yyy</span><span class="f_Variables"> &nbsp;&nbsp;&nbsp; ; xxx represents the variable language code, </span></p>
<p style="margin: 0px 0px 0px 45px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Variables"> &nbsp; ; with values (Fra), (Eng), (Ned), (Esp), (Deu) or (Pol) for french, english, spanish, german or polish. </span></p>
<p style="margin: 0px 0px 0px 45px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span class="f_Variables"> &nbsp; ; You may set here user defined language codes.</span></p>
<p>&nbsp;</p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table cellspacing="0" cellpadding="0" border="0" style="border: none border-spacing:0px;">
<tr valign="top" align="left">
<td width="311" style="width: 311px;"><p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 2pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 2pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="text-decoration: underline;">Instructions language:</span></p>
<p>&nbsp;</p>
<p>Each user may edit his code into his own language. Instructions are translated into several languages.</p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p>&nbsp;</p>
</td>
<td width="548" style="width: 548px;"><p><img src="img/clip0013eng.jpg" width="246" height="294" border="0" alt="clip0013"></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="311" style="width: 311px;"><p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 2pt; text-decoration: underline;">&nbsp;</span></p>
<p><span style="font-size: 1pt; text-decoration: underline;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt; text-decoration: underline;">&nbsp;</span></p>
<p><span style="font-size: 1pt; text-decoration: underline;">&nbsp;</span></p>
<p><span style="text-decoration: underline;">Variables language:</span></p>
<p><span style="text-decoration: underline;">&nbsp;</span></p>
<p>Variable language may also be user defined, so that you may work with english variables and polish instructions for instance<span style="font-size: 1pt; text-decoration: underline;"> </span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</td>
<td width="548" style="width: 548px;"><p><img src="img/clip0012eng.jpg" width="276" height="350" border="0" alt="clip0012"></p>
</td>
</tr>
</table>
</div>
<p>&nbsp;</p>
<p>The translation system is relevant for all menus, dialog, printed document or more generally for any internal string of WinPro.</p>
<p>WinPro is supplied with many default languages: french, english, nederlands, spanish, german, polish. Other languages will be supplied as soon as available.</p>
<p>An external module named <span style="font-weight: bold;">xStrings.exe </span>can be used to create new languages, and translate required strings. The tool does not allow to modify the default languages supplied&nbsp; with the program. To create your own translations, you should first create a new language, then translate the appropriate terms into it. However, in order to avoid a translation of the whole terms (more than 4000 !), you may define, at creation of the new language, a substitution language code that will replace the user defined language, when the program does not find a matching term. The terms that are not translated into the new language will be searched into the substitution language. This notion is recursive, meaning that when a term is not found into the substitution language defined into the new language, WinPro will look for a matching term into the substitution language of the substitution language, and so on until a match is found.</p>
<p>As you probably don't need the whole set of languages supplied with WinPro, you have the ability to define which language code is loaded into memory at startup or which code is proposed to the user into the login dialog, using menu <span style="font-weight: bold;">Tool | Preferences</span>, <span style="font-weight: bold;">Languages </span>tab.</p>
<p>&nbsp;</p>
<p>Not-e also that translation files have to be distributed with WinPro/D, along with the <span style="font-style: italic;">Lang.ini </span>file (translation files are located into the base directory, and are labelled « strings.* » - the * character is there replaced with the various language code ; 1 file by language).</p>
<p>Texts are managed according their usages into the translation utility. Text types are :</p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 30px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td> &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-weight: bold;">CM_</span> : textx for menus</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 30px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td> &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-weight: bold;">DOC_</span> : textx for customer and supplier documents</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 30px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td> &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-weight: bold;">IDS_</span> : textx for screens and internal documents</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 30px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td> &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-weight: bold;">IDX_ </span>: texts for the indexing utility</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 30px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td> &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-weight: bold;">MENU_</span> : textx for menu titles</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 30px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td> &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-weight: bold;">TBL_</span> : descriptions for database tables </td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 30px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td> &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-weight: bold;">VAR_ </span>: variable names within WinPro</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 30px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td> &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-weight: bold;">XLS_</span> : texts for the translation utility</td></tr></table></div><p>Translations will be stored into text files (1 by languages), into the base directory. They are named <span style="font-weight: bold;">Strings.xxx</span>, where xxx is replaced with the corresponding language code. A <span style="font-weight: bold;">[Langage]</span> section into <span style="font-style: italic;">WinPro.ini </span>file or <span style="font-style: italic;">settings </span>table enumerates each language, along with additional settings regarding memory loading. See also details of the <a href="translations.php">language</a> into preferences.</p>
<p>Textx from the base languages supplied with WinPro are not modifiable, as we supply updates for those files that may overwrite the previous version of the files. Any modification done into those files would be lost. Then when you want to change some terms into a base language, create first a new language and define the base language as substitution code ; this new language will be stored into a file distinct from the base language file, then any modification done to your new language set of terms will be kept.when upgrading your version. The substitution process allow the user to modify only what is interesting, without altering the other texts ; this hugely reduce the work time in case of partial translations.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="text-decoration: underline;">Access keys for texts :</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="font-family: 'Tahoma'; color: #000000;">&nbsp;</span></p>
<p><span style="font-family: 'Tahoma'; color: #000000;">For installation : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">DOC_POSECOMMANDE &nbsp; &nbsp; &nbsp; &nbsp;</span></p>
<p><span style="font-family: 'Tahoma'; color: #000000;">For delivery : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">DOC_LIVRAISONCOMMANDE &nbsp; &nbsp; &nbsp; &nbsp;</span></p>
<p><span style="font-family: 'Tahoma'; color: #000000;">For pick-up : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">DOC_ENLEVEMENTCOMMANDE &nbsp; &nbsp; &nbsp; &nbsp;</span></p>
<p><span style="font-family: 'Tahoma'; color: #000000;">For undefined delivery mode : &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">DOC_FOURNITURECOMMANDE &nbsp; &nbsp; &nbsp; &nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="font-family: 'Tahoma'; color: #000000;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="font-family: 'Tahoma'; color: #000000;">&nbsp;</span></p>
<p><span style="font-family: 'Tahoma'; color: #000000; text-decoration: underline;">Available macros are :</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="font-family: 'Tahoma'; color: #000000;">&nbsp;</span></p>
<p><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">#1# &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="font-family: 'Tahoma'; color: #000000;">Delivery date printed with week number format</span></p>
<p><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">#2# &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="font-family: 'Tahoma'; color: #000000;">Day of the month (1 to 31) indicate the number of week before delivery.</span></p>
<p><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">#3# &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="font-family: 'Tahoma'; color: #000000;">Real delivery date printed &nbsp; &nbsp; &nbsp; &nbsp;</span></p>
<p><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">#4# &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="font-family: 'Tahoma'; color: #000000;">This text is shown before the delivery date ; for macro </span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">#1#</span><span style="font-family: 'Tahoma'; color: #000000;">, it is replaced with « on week » (ID « </span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">DOC_LA_SEMAINE</span><span style="font-family: 'Tahoma'; color: #000000;"> »); for macro </span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">#2#</span><span style="font-family: 'Tahoma'; color: #000000;">, with « in » (ID « </span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">DOC_DANS_(x semaines)</span><span style="font-family: 'Tahoma'; color: #000000;"> »); for macro </span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">#3#</span><span style="font-family: 'Tahoma'; color: #000000;"> with text « on » (ID « </span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">DOC_LE (date)</span><span style="font-family: 'Tahoma'; color: #000000;"> »). &nbsp; &nbsp; &nbsp; &nbsp;</span></p>
<p><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">#5# &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="font-family: 'Tahoma'; color: #000000;">This text is shown after the delivery date ; for macro </span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">#2#</span><span style="font-family: 'Tahoma'; color: #000000;">, it is replaced with text « week(s) » (ID « </span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">DOC_SEMAINE(S)</span><span style="font-family: 'Tahoma'; color: #000000;"> ») ; for macros </span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">#1#</span><span style="font-family: 'Tahoma'; color: #000000;"> and </span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">#3#</span><span style="font-family: 'Tahoma'; color: #000000;">, macro </span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">#5#</span><span style="font-family: 'Tahoma'; color: #000000;"> is deleted. &nbsp; &nbsp; &nbsp; &nbsp;</span></p>

</td></tr></table>
</div>

<div class="FRA">
<!-- Placeholder for topic body. -->
<table width="100%" border="0" cellspacing="0" cellpadding="5"><tr valign="top"><td align="left">
<p>&nbsp;</p>
<p>WinPro vous donne le choix de la langue dans laquelle sont affichées les formules. Vous disposez de 4 langues pour les instructions (français, anglais, espagnol, polonais), et de 6 langues pour les variables (français, anglais, néerlandais, espagnol, allemand, polonais). Vous pouvez étendre vous-même le nombre de langues disponible pour les variables, et nous fournirons de nouvelles langues au fur et à mesure de leur disponibilité. </p>
<p>Le choix de langues se fait en cliquant avec le bouton droit de la souris sur une zone de saisie de formule. Cela active un menu, qui vous permet de sélectionner la langue de votre choix (instructions et variables, indépendamment). Cette sélection est propre à chaque utilisateur. Les formules sont stockées dans un format neutre, qui peut être restitué dans chacune des langues proposées.</p>
<p>Vous pouvez aussi modifier le nom des variables, dans la langue de votre choix, selon la méthode décrite en version 7.0.3. Veuillez toutefois respecter les règles habituelles de constitution du nom des variables.</p>
<p>Vous pouvez définir dans <span style="font-style: italic;">WinPro.ini </span>ou la table <span style="font-style: italic;">settings </span>les langues à utiliser par défaut, en ajoutant dans la section <span class="f_Winproini" style="color: #000000;">[Interpretor]</span> les lignes suivantes :</p>
<p style="margin: 0px 0px 0px 45px;"><span class="f_Winproini">Language=xxx</span><span class="f_Variables"> &nbsp; ; xxx représente la langue des instructions, </span></p>
<p style="margin: 0px 0px 0px 45px;"><span class="f_Variables"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ; et peut valoir Fra, Eng, Esp ou Pol pour le français, </span></p>
<p style="margin: 0px 0px 0px 45px;"><span class="f_Variables"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ; l'anglais, l'espagnol ou le polonais, respectivement.</span></p>
<p style="margin: 0px 0px 0px 45px;"><span class="f_Winproini">Variable=yyy</span><span class="f_Variables"> &nbsp;&nbsp;&nbsp; ; yyy représente la langue des variables, </span></p>
<p style="margin: 0px 0px 0px 45px;"><span class="f_Variables"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ; et peut valoir (Fra), (Eng), (Ned), (Esp), (Deu) ou (Pol) </span></p>
<p style="margin: 0px 0px 0px 45px;"><span class="f_Variables"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ; pour le français, l'anglais, le néerlandais, </span></p>
<p style="margin: 0px 0px 0px 45px;"><span class="f_Variables"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ; l'espagnol, l'allemand ou le polonais respectivement. Vous </span></p>
<p style="margin: 0px 0px 0px 45px;"><span class="f_Variables"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ; pouvez également définir vos propres langues.</span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;"><table cellspacing="0" cellpadding="0" border="0" style="border: none border-spacing:0px;">
<tr valign="top" align="left">
<td width="311" style="width: 311px;"><p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 2pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 2pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="text-decoration: underline;">Le langage des instructions :</span></p>
<p>&nbsp;</p>
<p>Chaque utilisateur peut éditer ses formules dans sa propre langue. Les instructions Winpro sont traduites dans différentes langues.</p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 5pt;">&nbsp;</span></p>
<p>&nbsp;</p>
</td>
<td width="548" style="width: 548px;"><p><img src="img/clip0348.gif" width="201" height="256" border="0" alt="clip0348"></p>
</td>
</tr>
<tr valign="top" align="left">
<td width="311" style="width: 311px;"><p><span style="font-size: 5pt;">&nbsp;</span></p>
<p><span style="font-size: 2pt; text-decoration: underline;">&nbsp;</span></p>
<p><span style="font-size: 1pt; text-decoration: underline;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt;">&nbsp;</span></p>
<p><span style="font-size: 1pt; text-decoration: underline;">&nbsp;</span></p>
<p><span style="font-size: 1pt; text-decoration: underline;">&nbsp;</span></p>
<p><span style="text-decoration: underline;">La langue des variables :</span></p>
<p><span style="text-decoration: underline;">&nbsp;</span></p>
<p>Vu que la langue des instructions est dissociée de la langue des variables Winpro. Rien ne vous empêche de travailler avec des instructions en français et avec les variables en néerlandais (à titre d'exemple).<span style="font-size: 1pt; text-decoration: underline;"> </span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</td>
<td width="548" style="width: 548px;"><p><img src="img/clip0349.gif" width="236" height="254" border="0" alt="clip0349"></p>
</td>
</tr>
</table>
</div>
<p>&nbsp;</p>
<p>Le système de traduction s'applique à tous les menus, fenêtres, documents, et d'une manière générale à tous les textes internes de WinPro.</p>
<p>WinPro vous est fourni en standard avec plusieurs langues : français, anglais, néerlandais, espagnol, allemand, polonais. D'autres langues sont en cours de préparation.</p>
<p>Vous disposez d'un utilitaire externe à WinPro, nommé <span style="font-weight: bold;">xStrings.exe</span>, qui vous permet de définir vos propres langues, et de traduire les termes qui lui correspondent. L'utilitaire de traduction ne vous permet pas de modifier directement les langues fournies avec WinPro. Pour créer vos propres traductions, vous devez créer une nouvelle langue, et définir les traductions qui lui correspondent. Cependant, afin de vous éviter de tout retraduire (il y a plus de 4.000 termes !), vous pouvez, au moment de la création de la langue, indiquer qu'elle se substitue à une langue déjà définie. Les termes que vous ne traduirez pas dans la langue que vous créez seront recherchés dans la langue de substitution. Notez bien que cette notion de langue de substitution est récursive, c'est-à-dire que, si le terme n'existe pas dans la langue de substitution correspondant à la langue que vous avez créée, Winpro le recherchera dans la langue de substitution de la langue de substitution, jusqu'à trouver un terme défini.</p>
<p>Comme vous n'aurez probablement pas besoin de l'ensemble des langues fournies avec WinPro, vous disposez, dans le dialogue <span style="font-weight: bold;">Utilitaires | Préférences</span>, d'un onglet <span style="font-weight: bold;">Langues</span>, qui vous permet de définir quelles langues seront chargées au démarrage, et quelles langues seront visibles pour l'utilisateur, lorsqu'il choisit une langue.</p>
<p>&nbsp;</p>
<p>Notez également que les fichiers de traduction devront être distribués avec WinPro/D, ainsi que le fichier Lang.ini (les fichiers de traduction se trouvent dans le répertoire principal de WinPro, et sont nommés « strings.* » - le signe * étant remplacé par les divers codes langue ; il y a donc un fichier par langue).</p>
<p>Les textes sont organisés dans l'utilitaire de traduction en fonction de leur utilisation. Les types de texte proposés sont :</p>
<div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 30px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td> &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-weight: bold;">CM_</span> : textes des menus</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 30px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td> &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-weight: bold;">DOC_</span> : textes des documents client et fournisseurs</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 30px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td> &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-weight: bold;">IDS_</span> : textes des écrans et documents internes</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 30px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td> &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-weight: bold;">IDX_ </span>: textes de l'utilitaire de réindexation</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 30px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td> &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-weight: bold;">MENU_</span> : textes des titres de menu</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 30px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td> &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-weight: bold;">TBL_</span> : descriptions des tables de la base de données</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 30px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td> &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-weight: bold;">VAR_ </span>: noms des variables WinPro</td></tr></table></div><div style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 30px;"><table border="0" cellpadding="0" cellspacing="0" style="line-height: normal;"><tr valign="baseline"><td width="17"><span style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&#8226;</span></td><td> &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-weight: bold;">XLS_</span> : textes de l'utilitaire de traduction</td></tr></table></div><p>Les traductions sont stockées dans des fichiers textes (1 fichier par langue), stockés dans le répertoire de WinPro. Le nom de ces fichiers est <span style="font-weight: bold;">Strings.xxx</span>, où xxx est remplacé par le code de la langue correspondante. Une section <span style="font-weight: bold;">Langage</span> dans WinPro.ini énumère chaque langue, et des informations supplémentaires indiquant si les fichiers de texte seront chargés ou non en mémoire. Voir également le détail de l'onglet <a href="utilpreflangues.php">langues</a> des préférences.</p>
<p>Les textes des langues de base fournies avec WinPro ne sont pas modifiables directement. En effet, nous fournirons avec chaque nouvelle version de WinPro des fichiers texte modifiés, qui remplaceront ceux de la version précédente. Toute modification que vous feriez à ces textes serait alors perdue. Donc, si vous souhaitez modifier tout ou partie des textes d'une langue, vous devez d'abord créer une nouvelle langue, ayant la langue à modifier comme langue de substitution ; cette nouvelle langue sera stockée dans un fichier distinct de celui de la langue de base, et les modifications que vous y ferez seront donc préservées lors des changements de version. Les mécanismes de substitution vous permettent de ne modifier que les textes qui vous intéresse, sans toucher aux autres textes ; ceci réduira considérablement votre travail pour des traductions partielles.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style="text-decoration: underline;">Les clés d'accès aux textes sont :</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="font-family: 'Tahoma'; color: #000000;">&nbsp;</span></p>
<p><span style="font-family: 'Tahoma'; color: #000000;">Pour la pose : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">DOC_POSECOMMANDE &nbsp; &nbsp; &nbsp; &nbsp;</span></p>
<p><span style="font-family: 'Tahoma'; color: #000000;">Pour la livraison : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">DOC_LIVRAISONCOMMANDE &nbsp; &nbsp; &nbsp; &nbsp;</span></p>
<p><span style="font-family: 'Tahoma'; color: #000000;">Pour l'enlèvement : &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">DOC_ENLEVEMENTCOMMANDE &nbsp; &nbsp; &nbsp; &nbsp;</span></p>
<p><span style="font-family: 'Tahoma'; color: #000000;">Pour un mode de livraison non spécifié : &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">DOC_FOURNITURECOMMANDE &nbsp; &nbsp; &nbsp; &nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="font-family: 'Tahoma'; color: #000000;">&nbsp;</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="font-family: 'Tahoma'; color: #000000;">&nbsp;</span></p>
<p><span style="font-family: 'Tahoma'; color: #000000; text-decoration: underline;">Les macros disponibles sont :</span></p>
<p style="margin: 0px 0px 0px 24px;"><span style="font-family: 'Tahoma'; color: #000000;">&nbsp;</span></p>
<p><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">#1# &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="font-family: 'Tahoma'; color: #000000;">La date de livraison est imprimée sous forme de numéro de semaine</span></p>
<p><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">#2# &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="font-family: 'Tahoma'; color: #000000;">Le jour du mois (1 à 31) indique le nombre de semaines dans lequel la livraison s'effectuera.</span></p>
<p><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">#3# &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="font-family: 'Tahoma'; color: #000000;">La date de livraison exacte est imprimée &nbsp; &nbsp; &nbsp; &nbsp;</span></p>
<p><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">#4# &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="font-family: 'Tahoma'; color: #000000;">Ce texte précède la date de livraison ; pour la macro </span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">#1#</span><span style="font-family: 'Tahoma'; color: #000000;">, il est remplacé par le texte « pendant la semaine » (identificateur « </span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">DOC_LA_SEMAINE</span><span style="font-family: 'Tahoma'; color: #000000;"> »); pour la macro </span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">#2#</span><span style="font-family: 'Tahoma'; color: #000000;">, par le texte « dans » (identificateur « </span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">DOC_DANS_(x semaines)</span><span style="font-family: 'Tahoma'; color: #000000;"> »); pour la macro </span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">#3#</span><span style="font-family: 'Tahoma'; color: #000000;"> par le texte « le » (identificateur « </span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">DOC_LE (date)</span><span style="font-family: 'Tahoma'; color: #000000;"> »). &nbsp; &nbsp; &nbsp; &nbsp;</span></p>
<p><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">#5# &nbsp; &nbsp; &nbsp; &nbsp;</span><span style="font-family: 'Tahoma'; color: #000000;">Ce texte suit la date de livraison ; pour la macro </span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">#2#</span><span style="font-family: 'Tahoma'; color: #000000;">, il est remplacé par le texte « semaine(s) » (identificateur « </span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">DOC_SEMAINE(S)</span><span style="font-family: 'Tahoma'; color: #000000;"> ») ; pour les macros </span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">#1#</span><span style="font-family: 'Tahoma'; color: #000000;"> et </span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">#3#</span><span style="font-family: 'Tahoma'; color: #000000;">, la macro </span><span style="font-family: 'Tahoma'; font-weight: bold; color: #000000;">#5#</span><span style="font-family: 'Tahoma'; color: #000000;"> est effacée. &nbsp; &nbsp; &nbsp; &nbsp;</span></p>
<p>&nbsp;</p>

</td></tr></table>
</div>

</body>
</html>
