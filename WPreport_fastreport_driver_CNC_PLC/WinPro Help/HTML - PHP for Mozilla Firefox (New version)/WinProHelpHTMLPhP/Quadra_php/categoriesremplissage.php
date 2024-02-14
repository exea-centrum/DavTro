<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Filling Categories","Cat&#233;gories de remplissage"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?categoriesremplissage.php"; }
else { parent.quicksync('a7.6'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Cat�gories de remplissage</title>
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
        href="categoriespanneaux.php">Previous</a>� <a
        href="categoriesclient.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p>This table defines filling categories of the program, used to filter the list of fillings during order input. 
	  Once created those values may be assigned to any filling, into the <span style="font-style: italic;">Description</span> page 
	  <span style="font-style: italic;">Selection Filter</span> fioeld for <a href="vitrages.php">glazings</a>, for <a
        href="panneaudecouper.php">plain panels</a>, for <a href="panneaudeco.php">decorative panels</a> 
		and <a href="panneaudecoconf.php">configured decorative panels</a>, as well as for <a href="panneaucompose.php">composed panels</a>. 
		This filter will be displayed for the user, on the right of the filling code, for every concerned glazing modification 
		dialog (fields <span style="font-style: italic;">Filling</span> of <span style="font-style: italic;">Window</span> 
		tab, or within <span style="font-style: italic;">Sash</span> tab, or else through right clic into the filling
		+ <span style="font-style: italic;">Change glazing</span> dialog). </p>

        <p>�</p>

        <p
        style="text-align: center; text-indent: -24px; margin: 0px 0px 0px 28px;"><img
        src="img/clip0413eng.jpg" width="369" height="167" border="0"
        alt="clip0413eng"></p>

        <p>�</p>

        <p>This dialog is reached through menu <span style="font-weight: bold;">Data |
        Miscellaneous | Filling categories</span>.</p>

        <p>�</p>

        <p style="text-align: center;"><img src="img/clip0607eng.jpg"
        width="524" height="133" border="0" alt="clip0607eng"></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;">�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Code</span>: Code of the category.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>:
                Description of the category.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Filling type</span>:
                List of filling types for this category, between entre
                Glazing, Plain Panel, Decorative panel, Configured decorative panel or Composed panel.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;">�</p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;">See <a href="8_0_2_x.php">release note of version 8.02</a> 
		for more details about this feature.</p>
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
      <td align="left"><p>Cette table d�finit les cat�gories de remplissage
        utilis�es dans WinPro, ces cat�gories constituant un niveau de filtre
        pour la saisie des remplissages de la commande. Une fois cr��es, ces
        cat�gories peuvent �tre renseign�es pour chaque remplissage, au niveau
        de l'onglet <span style="font-style: italic;">Description </span>dans
        le champs <span style="font-style: italic;">Filtre de s�lection
        </span>pour les <a href="vitrages.php">vitrages</a>, les <a
        href="panneaudecouper.php">panneaux � d�couper</a>, les <a
        href="panneaudeco.php">panneaux d�coratifs</a>, les <a
        href="panneaudeco.php">panneaux d�coratifs configur�s</a> et les <a
        href="panneaucompose.php">panneaux fabriqu�s</a>. Ce filtre appara�tra
        pour l'utilisateur, � droite du code du remplissage, pour tous les
        dialogues de modifications de remplissages concern�s (champs <span
        style="font-style: italic;">Remplissage </span>de l'onglet <span
        style="font-style: italic;">Ch�ssis </span>ou de l'onglet <span
        style="font-style: italic;">Ouvrant</span>, ou bien clic droit dans le
        remplissage + <span style="font-style: italic;">Changer de
        vitrage</span>). </p>

        <p>�</p>

        <p
        style="text-align: center; text-indent: -24px; margin: 0px 0px 0px 28px;"><img
        src="img/clip0413.gif" width="355" height="139" border="0"
        alt="clip0413"></p>

        <p>�</p>

        <p>Accessible depuis le menu <span style="font-weight: bold;">Donn�es |
        Autres donn�es | Cat�gories de remplissage</span>.</p>

        <p>�</p>

        <p style="text-align: center;"><img src="img/clip0607.zoom80.gif"
        width="427" height="128" border="0" alt="clip0607"></p>

        <p class="p_Textestd" style="margin: 0px 0px 0px 24px;">�</p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Code</span>: Code de la
                cat�gorie.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>:
                Description de la cat�gorie.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Type de remplissage</span>:
                Liste des types de remplissage pour cette cat�gorie, entre
                Vitrage, Panneau � d�couper, Panneau d�coratif, Panneau d�coratif configur� ou Panneau
                fabriqu�.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;">�</p>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;">Voir la <a
        href="8_0_2_x.php">note de version 8.02 </a>pour plus de d�tails sur
        cette fonctionnalit�.</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
