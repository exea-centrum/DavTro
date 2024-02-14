<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Languages","Langues"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?utilpreflangues.php"; }
else { parent.quicksync('a9.1.15'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Langues</title>
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
        href="utilprefcombobox.php">Previous</a>� <a
        href="utilmagasinstockprincipal.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This tab displays created languages within WinPro along with their main characteristics.</p>

        <p>The program language may be switched at any time using combo list on top right of the main window. The labguge may 
		also be selected into the combo displayed at login.</p>

        <p>Those various languages displayed here correspond to text files labelled "Strings.xxx", where "xxx" is the language 
		code. The files are located into the base program directory.</p>

        <p>Moreover, the various settings defined here are recorded into a "lang.ini" file, also located into the base directory.</p>

        <p>See also chapter about <a href="langues.php">languages</a> creation within dans for more details.</p>

        <p>�</p>

        <p style="text-align: center;"><img src="img/clip0738beng.jpg"
        width="691" height="242" border="0" alt="clip0738beng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Code</span>: WinPro language code, correspond to file "Strings.xxx",
                where xxx is this code.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Active</span>: When checked, the language is enabled into the program, 
			  otherwise it will not be available in the interface, anf corresponding files will not be loaded into memory at 
			  start up.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Hidden</span>: Sets if the language is visible in the program, the language 
			  will not be available in the interface.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>:
                Description of WinPro language.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Subst. language</span>:
                Sets here the substitution language code for the language defined by field 
				<span style="font-weight: bold;">Code</span>. WinPro will look at the translation into the substitution 
				language when no match is found into base language code, as mentionned into chapter about 
				<a href="langues.php">languages</a>. </td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><img src="img/clip0739.gif" width="47" height="32" border="0"
                alt="clip0739">: This box defines the writing orientation of concerned specific 
				languages (oriental language for instance), from right to left when checked, otherwise the 
				characters are written from left to right.</td>
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
      <td align="left"><p>Cet onglet affiche la liste des langues cr��es dans
        WinPro, ainsi que leurs attributs principaux.</p>

        <p>Ces langues peuvent �tre modifi�e � tout moment via le combo en haut
        � droite de la fen�tre principale. Elles peuvent �galement �tre
        s�lectionn�es depuis la fen�tre de login.</p>

        <p>Ces diff�rentes langues list�es ici repr�sente des fichiers nomm�s
        "Strings.xxx" ou xxx repr�sente le code de la langue. Ces fichiers sont
        pr�sents dans le r�pertoire de base. </p>

        <p>Enfin, les diff�rents param�tres renseign�s ici sont enregistr�s
        dans le fichier "lang.ini", localis� �galement dans le r�pertoire de
        base de WinPro.</p>

        <p>Voir �galement le paragraphe sur la notion la cr�ation de <a
        href="langues.php">langues</a> dans WinPro pour des renseignements
        compl�mentaires.</p>

        <p>�</p>

        <p style="text-align: center;"><img src="img/clip0738.zoom81.gif"
        width="571" height="360" border="0" alt="clip0738"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="17"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Code</span>: Code de la
                langue WinPro. Ce code correspond � un fichier "Strings.xxx",
                o� xxx repr�sente ce code.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Actif</span>: Indique si le
                code de langue est actif dans le logiciel. Si la case est
                d�coch�e, le langage ne sera pas disponible dans l'interface,
                et les fichiers correspondants ne seront pas charg�s en m�moire
                au lancement.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Cach�e</span>: Indique si le
                code de langue est visible dans le logiciel. Si la case est
                d�coch�e, le langage ne sera pas disponible dans
              l'interface.</td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>:
                Description de la langue WinPro. </td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Langue de subst.</span>:
                Indiquez dans ce champ le code d'une langue de substitution
                pour la langue d�finie par le champ <span
                style="font-weight: bold;">Code</span>. WinPro ira chercher ses
                traductions dans la langue de substitition s'il ne la trouve
                pas dans la langue de base, comme pr�cis� dans le paragraphe
                relatif aux <a href="langues.php">langues</a>. </td>
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
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><img src="img/clip0739.gif" width="47" height="32" border="0"
                alt="clip0739">: Cette case � cocher d�finit le sens d'�criture
                de la langue concern�e. Si d�coch�e, la langue s'�crit de
                gauche � droite, sinon la langue s'�crira de droite � gauche
                (pour certaines langues orientales).</td>
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
