<?php Session_Start(); if (!isset($_SESSION['validate'])) { require('../validator.php'); } ?>
<html>
<head>
  <script type="text/JavaScript" src="wplang.js">
  </script>
  <script type="text/JavaScript">
 
<!--
var WinProHelpAvailableLanguages=["ENG","FRA"];
var WinProHelpPageName=["Description","Description"];
WPlangInit(WinProHelpAvailableLanguages);
//Redirect browser to frame page if page is not in the content frame.
if(top.frames.length==0) { top.location.href="index.php?pfabdescription.php"; }
else { parent.quicksync('a5.11.1'); }
//--></script>
  <script type="text/javascript" src="highlight.js">
  </script>
  <title>Description</title>
  <meta name="keywords" content="_FillCateg[]">
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
        href="panneaucompose.php">Previous</a>� <a
        href="pfabquestions.php">Next</a> </span> </td>
    </tr>
  </tbody>
</table>

<div class="ENG">
<!-- Placeholder for topic body. -->

<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tbody>
    <tr valign="top">
      <td align="left"><p><span style="font-size: 5pt;">�</span></p>

        <p>The description page defines the main characteristics of the panel.</p>

        <p style="text-align: center; background: #fffff2; margin: 14px 0px 0px 0px;"><img
        src="img/clip0208eng.jpg" width="742" height="494" border="0"
        alt="clip0208eng"></p>

        <p style="text-align: center;"><span
        style="font-weight: bold;">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="28"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>: The description of the panel.</td>
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
              <td width="28"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Thickness (mm)</span>: The thickness of the panel. This will be used to select the correct glazing bead.</td>
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
              <td width="27"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Margin</span>: Extra margin on this panel, in %.</td>
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
              <td width="28"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Total
                sash dimensions</span>: By default, the size of the panel is inside its frame's glazing
                reveal. If you check this box, he size will be that of the
                complete frame, that is the outside of the sash, or the axis of the transom.
				</td>
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
              <td width="28"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Exclude from WinPro/D</span>: Check this
                box if you do not want this panel definition to be exported to WinPro/D.</td>
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
              <td width="28"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Category</span>: This value will be used to set up the
                <a href="varremplissages.php">global filling variable _FillCateg[]</a>.</td>
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
              <td width="28"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">2nd category</span>: This value will be used to set up the
                <a href="varremplissages.php">global filling variable _FillCateg2[]</a>.</td>
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
              <td width="28"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Weight/m�</span>: Set here the weight for one square meter of this panel unit. This will fill 
			  global variable <span class="f_Variables">_FillWeight []</span></td>
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
              <td width="28"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Selection filter</span>: This combo enables a customizable filter for 
				filling selection within the order. This filter may be used when selecting the filling, with a button on the right 
				of the filling code, from any change filling menu (Window tab, Sash tab or context menu "Change glazing").
				You may first create those filters through menu <span  style="font-weight: bold;">Data | Miscellaneous |
                Filling category</span> (table <span style="font-style: italic">FillCateg)</span>. Refer to <a href="8_0_2_x.php">note de version 8.02</a> 
				for more details.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"><span
        class="f_Textestd"
        style="font-style: italic; color: #000000;">�</span></p>

        <p
        style="text-align: center; text-indent: -24px; margin: 0px 0px 0px 28px;"><span
        class="f_Textestd" style="font-style: italic; color: #000000;">Screenshot from Window tab of the order</span></p>

        <p
        style="text-align: center; text-indent: -24px; margin: 0px 0px 0px 28px;"><img
        src="img/clip0413eng.jpg" width="369" height="167" border="0"
        alt="clip0413eng"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="28"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Thermic category</span>: Assign here a thermic category for WinPro to compute 
				the thermic coefficient for this panel. Those categories are created through menu <span style="font-weight: bold;">Technic | Window |
                Panel categories</span>. Only for users of Thermic Module, as defined into <a href="8_1_0_x.php">release note 8.1.0</a>.</td>
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
              <td width="28"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Allowed colours</span>: Check in this
                list any standard colour for this panel. Other colours will be
                rejected. A button is suitable to select all colours at a time, another to reverse the colour selection.</td>
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
              <td width="28"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Panels on
                the whole surface</span><span style="color: #000000;">: You can
                type here the code of <a href="panneaudecouper.php">plain panels</a>
                that use the total surface of the composed panel. This makes it
                very easy to create sandwich panels. This can be used in
                addition to other components computed by formula.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;">�</p>
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
      <td align="left"><p><span style="font-size: 5pt;">�</span></p>

        <p>Cette page permet de d�finir les principales caract�ristiques du
        panneau fabriqu�. </p>

        <p style="text-align: center; background: #fffff2; margin: 14px 0px 0px 0px;"><img
        src="img/clip0208fra.jpg" width="703" height="491" border="0"
        alt="clip0208fra"></p>

        <p style="text-align: center;"><span
        style="font-weight: bold;">�</span></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="28"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Description</span>:
                Description du panneau.</td>
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
              <td width="28"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Epaisseur (mm)</span>:
                Epaisseur du panneau. Utilis� pour s�lectionner la
              parclose.</td>
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
              <td width="27"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold;">Coefficient de marge</span><span
                class="f_Textestd">: Coefficient multiplicateur appliqu� au
                prix de revient de tous les composants du panneau pour obtenir
                le prix de vente.</span></td>
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
              <td width="28"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Dimensions � l'ext�rieur de
                l'ouvrant</span><span class="f_Textestd">: Par d�faut, la
                dimension du panneau est calcul�e par rapport au fond de
                feuillure vitrage. Lorsque cette case est coch�e, le panneau
                sera calcul� sur base des dimensions du vantail � l'ext�rieur
                de l'ouvrant, ou � l'axe de la traverse.</span></td>
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
              <td width="28"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Exclure de WinPro/D</span>:
                Cochez cette case pour ne pas exporter cette fiche panneau vers
                WinPro/D.</td>
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
              <td width="28"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Cat�gorie</span>: Valeur
                num�rique de la cat�gorie qui sera assign�e � la variable<span
                style="font-weight: bold;"><a
                href="varremplissages.php">_RemplCateg[]</a></span></td>
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
              <td width="28"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">2�me cat�gorie</span>:
                Valeur num�rique de la cat�gorie secondaire qui sera assign�e �
                la variable<span style="font-weight: bold;"><a
                href="varremplissages.php">_RemplCateg2[]</a></span></td>
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
              <td width="28"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #0000ff;">&bull;</span></td>
              <td><span style="font-weight: bold;">Poids m�</span>: Indiquez
                ici le poids au m�tre carr� pour ce panneau. Cette valeur ira
                renseigner la variable globale de remplissage <span
                class="f_Variables">_RemplPoids [].</span></td>
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
              <td width="28"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Filtre de
                s�lection</span><span class="f_Textestd"
                style="color: #000000;">: Ce combo active un filtre
                personalisable de s�lection du remplissage en saisie de
                commande. Un bouton � droite du code du remplissage, dans tous
                les menus de s�lection de remplissages (onglet Ch�ssis de la
                commande, onglet Ouvrant, menu contextuel "Changer de vitrage")
                permet de d�finir ce filtre. Pour pouvoir affecter un filtre �
                un panneau donn�, et l'utiliser ensuite en saisie, il faut
                d'abords cr�er une table des filtres de s�lection de
                remplissages via le menu </span><span class="f_Textestd"
                style="font-weight: bold;">Donn�es | Autres donn�es |
                Cat�gories de remplissages </span><span
                class="f_Textestd">(</span><span class="f_Textestd"
                style="color: #000000;">table </span><span class="f_Textestd"
                style="font-style: italic; color: #000000;">FillCateg).
                </span><span class="f_Textestd"
                style="color: #000000;">Reportez vous � la <a
                href="8_0_2_x.php">note de version 8.02</a> pour plus de
                d�tails.</span></td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;"><span
        class="f_Textestd"
        style="font-style: italic; color: #000000;">�</span></p>

        <p
        style="text-align: center; text-indent: -24px; margin: 0px 0px 0px 28px;"><span
        class="f_Textestd" style="font-style: italic; color: #000000;">Vue de
        l'onglet ch�ssis de la commande</span></p>

        <p
        style="text-align: center; text-indent: -24px; margin: 0px 0px 0px 28px;"><img
        src="img/clip0413.gif" width="355" height="139" border="0"
        alt="clip0413"></p>

        <div
        style="text-align: left; text-indent: 0px; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 4px;">

        <table border="0" cellpadding="0" cellspacing="0"
        style="line-height: normal;">
          <tbody>
            <tr valign="baseline">
              <td width="24"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span class="f_Textestd"
                style="font-weight: bold; color: #000000;">Cat�gorie thermique</span>: Renseigner ici une cat�gorie thermique pour le remplissage, 
				afin que WinPro calcule les valeurs thermique de ce panneau. Ces cat�gories de remplissages sont � cr�er dans le 
				menu <span style="font-weight: bold;">Technique | Ch�ssis | Cat�gorie de panneaux</span>. Uniquement pour les utilisateurs du 
				Module Thermique, tel que d�fini dans la <a href="8_1_0_x.php">note de version 8.1.0</a>.</td>
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
              <td width="28"><span
                style="font-size: 10pt; font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial'; color: #000000;">&bull;</span></td>
              <td><span style="font-weight: bold;">Couleurs autoris�es</span>:
                Vous pouvez filtrer la liste des couleurs autoris�es pour ce
                panneau gr�ce � cette liste, qui sera filtr�es dans les onglets
                de d�bits suivants (Profils, Articles, etc.). Un bouton vous
                permet de s�lectionner toutes les couleurs de la listes, un
                autre bouton permet d'inverser la s�lection de couleurs �
                l'�cran. Les autres couleurs seront rejet�es.</td>
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
              <td width="28"><span
                style="font-family: 'Arial Unicode MS', 'Lucida Sans Unicode', 'Arial';">&bull;</span></td>
              <td><span style="font-weight: bold;">Panneau sur toute la
                surface</span>: Ce champ vous permet de saisir un code de
                panneau � d�couper <a href="panneaudecouper.php">panneau �
                d�couper</a> qui sera utilis� sur toute la surface du panneau
                fabriqu� (fonction de la case 'Dimensions � l'ext�rieur de
                l'ouvrant' ci-dessus). Ceci permet de cr�er facilement des
                panneaux sandwichs, et viendra en compl�ment des �l�ments de
                d�bit calcul�s dans les autres onglets.</td>
            </tr>
          </tbody>
        </table>
        </div>

        <p style="text-indent: -24px; margin: 0px 0px 0px 28px;">�</p>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
